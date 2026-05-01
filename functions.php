<?php
/**
 * This file adds functions to the ucnature WordPress theme.
 *
 * @package ucnature
 * @author  Lobsang Wangdu
 * @license GNU General Public License v2 or later
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
