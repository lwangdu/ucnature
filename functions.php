<?php
/**
 * This file adds functions to the ucnature WordPress theme.
 *
 * @package ucnature
 * @author  Lobsang Wangdu
 * @license GNU General Public License v3 or later
 * @link    https://ucnature.org/
 */

if ( ! function_exists( 'ucnature_setup' ) ) {

	/**
	 * Sets up theme defaults.
	 *
	 * Registers support for WordPress features on after_setup_theme.
	 * The init hook is too late for post thumbnail support.
	 *
	 * @since 0.8.0
	 *
	 * @return void
	 */
	function ucnature_setup() {
		$language_dir = get_template_directory() . '/languages';

		// Make theme available for translation.
		load_theme_textdomain( 'ucnature', $language_dir );

		// Enqueue editor styles and fonts.
		add_editor_style(
			array(
				'./style.css',
			)
		);

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );
	}
}
add_action( 'after_setup_theme', 'ucnature_setup' );

/**
 * Enqueue the front-end stylesheet.
 *
 * @return void
 */
function ucnature_enqueue_style_sheet() {
	wp_enqueue_style(
		'ucnature',
		get_template_directory_uri() . '/style.css',
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'ucnature_enqueue_style_sheet' );

/**
 * Enqueue editor script for the curation embed block.
 *
 * @return void
 */
function ucnature_enqueue_editor_assets() {
	wp_enqueue_script(
		'ucnature-editor-script',
		get_theme_file_uri( '/assets/js/curation-embed.js' ),
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
		filemtime( get_theme_file_path( '/assets/js/curation-embed.js' ) ),
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'ucnature_enqueue_editor_assets' );

/**
 * Register the accordion block stylesheet for the editor and front end.
 *
 * @return void
 */
function ucnature_register_accordion_stylesheet() {
	$stylesheet_path = get_theme_file_path( 'assets/block-accordion.css' );

	wp_enqueue_block_style(
		'core/accordion',
		array(
			'handle' => 'ucnature-block-accordion',
			'src'    => get_theme_file_uri( 'assets/block-accordion.css' ),
			'path'   => $stylesheet_path,
			'ver'    => filemtime( $stylesheet_path ),
		)
	);
}
add_action( 'init', 'ucnature_register_accordion_stylesheet' );

/**
 * Open the first item in each minimal accordion by default.
 *
 * This also applies the pattern behavior to accordions that were inserted
 * before the pattern defined its default-open item.
 *
 * @param string $block_content Rendered accordion markup.
 * @return string
 */
function ucnature_open_first_accordion_item( $block_content ) {
	if ( false === strpos( $block_content, 'is-style-accordion-minimal' ) ) {
		return $block_content;
	}

	$processor  = new WP_HTML_Tag_Processor( $block_content );
	$item_query = array( 'class_name' => 'wp-block-accordion-item' );

	if ( ! $processor->next_tag( $item_query ) ) {
		return $block_content;
	}

	$context_attribute = $processor->get_attribute( 'data-wp-context' );
	$context           = json_decode( $context_attribute, true );

	if ( ! is_array( $context ) ) {
		return $block_content;
	}

	$context['openByDefault'] = true;
	$processor->set_attribute( 'data-wp-context', wp_json_encode( $context ) );
	$processor->add_class( 'is-open' );

	$toggle_query = array(
		'class_name' => 'wp-block-accordion-heading__toggle',
	);

	if ( $processor->next_tag( $toggle_query ) ) {
		$processor->set_attribute( 'aria-expanded', 'true' );
	}

	$panel_query = array( 'class_name' => 'wp-block-accordion-panel' );

	if ( $processor->next_tag( $panel_query ) ) {
		$processor->remove_attribute( 'hidden' );
	}

	return $processor->get_updated_html();
}
add_filter(
	'render_block_core/accordion',
	'ucnature_open_first_accordion_item'
);

/**
 * Register block styles.
 *
 * @since 0.9.2
 */
function ucnature_register_block_styles() {

	$block_styles = array(
		'core/columns'         => array(
			'columns-reverse' => __( 'Reverse', 'ucnature' ),
		),
		'core/group'           => array(
			'shadow-light' => __( 'Shadow', 'ucnature' ),
			'shadow-solid' => __( 'Solid', 'ucnature' ),
		),
		'core/image'           => array(
			'shadow-light' => __( 'Shadow', 'ucnature' ),
			'shadow-solid' => __( 'Solid', 'ucnature' ),
		),
		'core/list'            => array(
			'no-disc' => __( 'No Disc', 'ucnature' ),
		),
		'core/navigation-link' => array(
			'outline' => __( 'Outline', 'ucnature' ),
		),
		'core/quote'           => array(
			'shadow-light' => __( 'Shadow', 'ucnature' ),
			'shadow-solid' => __( 'Solid', 'ucnature' ),
		),
		'core/social-links'    => array(
			'outline' => __( 'Outline', 'ucnature' ),
		),
	);

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style_name => $style_label ) {
			register_block_style(
				$block,
				array(
					'name'  => $style_name,
					'label' => $style_label,
				)
			);
		}
	}
}
add_action( 'init', 'ucnature_register_block_styles' );

/**
 * Print custom login logo styles.
 *
 * @return void
 */
function ucnature_login_logo_styles() {
	$logo_path = '/assets/images/UC-Nature-logo.png';

	if ( ! file_exists( get_theme_file_path( $logo_path ) ) ) {
		return;
	}

	$logo_url = get_theme_file_uri( $logo_path );
	?>
	<style type="text/css">
		.login h1 a {
			background-image: url(<?php echo esc_url( $logo_url ); ?>);
			background-size: contain;
			background-repeat: no-repeat;
			background-position: center center;
			display: block;
			width: 100%;
			max-width: 350px;
			height: 83px;
			margin-bottom: 20px;
		}
	</style>
	<?php
}
add_action( 'login_head', 'ucnature_login_logo_styles' );

/**
 * Filter the login logo URL.
 *
 * @return string
 */
function ucnature_login_logo_url() {
	return 'https://ucnature.org';
}
add_filter( 'login_headerurl', 'ucnature_login_logo_url' );

/**
 * Filter the login logo hover title.
 *
 * @return string
 */
function ucnature_login_logo_title() {
	return 'UC Nature';
}
add_filter( 'login_headertext', 'ucnature_login_logo_title' );
