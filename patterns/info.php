<?php
/**
 * Title: Reserve Information Accordion
 * Slug: ucnature/info-accordion
 * Description: Displays editable reserve details in a ten-section accordion.
 * Categories: text
 * Keywords: reserve, information, accordion, details
 * Viewport Width: 640
 * Block Types: core/accordion
 *
 * @package ucnature
 */

defined( 'ABSPATH' ) || exit;

$items = array(
	array(
		'title'   => __( 'Contact Information', 'ucnature' ),
		'content' => __( 'Add the reserve name, mailing address, phone number, email address, and website.', 'ucnature' ),
	),
	array(
		'title'   => __( 'Location', 'ucnature' ),
		'content' => __( 'Add the reserve location and directions.', 'ucnature' ),
	),
	array(
		'title'   => __( 'Facilities', 'ucnature' ),
		'content' => __( 'Describe the available facilities, lodging, laboratories, classrooms, and other amenities.', 'ucnature' ),
	),
	array(
		'title'   => __( 'Reserve bibliography', 'ucnature' ),
		'content' => __( 'Add a description and link to publications or other work associated with the reserve.', 'ucnature' ),
	),
	array(
		'title'   => __( 'Database', 'ucnature' ),
		'content' => __( 'List available datasets, species inventories, maps, photographs, and research collections.', 'ucnature' ),
	),
	array(
		'title'   => __( 'Personnel', 'ucnature' ),
		'content' => __( 'Add information about reserve managers, faculty contacts, and on-site staff.', 'ucnature' ),
	),
	array(
		'title'   => __( 'Size', 'ucnature' ),
		'content' => __( 'Add the reserve area in hectares and acres.', 'ucnature' ),
	),
	array(
		'title'   => __( 'Elevation', 'ucnature' ),
		'content' => __( 'Add the elevation range in metric and imperial units.', 'ucnature' ),
	),
	array(
		'title'   => __( 'Average precipitation', 'ucnature' ),
		'content' => __( 'Add the average annual precipitation.', 'ucnature' ),
	),
	array(
		'title'   => __( 'Average temperatures', 'ucnature' ),
		'content' => __( 'Add representative seasonal average, minimum, and maximum temperatures.', 'ucnature' ),
	),
);
?>

<!-- wp:accordion {"className":"is-style-accordion-minimal"} -->
<div role="group" class="wp-block-accordion is-style-accordion-minimal">

	<?php
	foreach ( $items as $index => $item ) :
		?>

		<?php if ( 0 === $index ) : ?>
		<!-- wp:accordion-item {"openByDefault":true} -->
		<div class="wp-block-accordion-item is-open">
		<?php else : ?>
		<!-- wp:accordion-item -->
		<div class="wp-block-accordion-item">
		<?php endif; ?>
			<!-- wp:accordion-heading -->
			<h3 class="wp-block-accordion-heading has-icon has-icon-right"><button type="button" class="wp-block-accordion-heading__toggle"><span class="wp-block-accordion-heading__toggle-title"><?php echo esc_html( $item['title'] ); ?></span><span class="wp-block-accordion-heading__toggle-icon" aria-hidden="true">+</span></button></h3>
			<!-- /wp:accordion-heading -->

			<!-- wp:accordion-panel -->
			<div role="region" class="wp-block-accordion-panel">
				<!-- wp:paragraph -->
				<p><?php echo esc_html( $item['content'] ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:accordion-panel -->
		</div>
		<!-- /wp:accordion-item -->

	<?php endforeach; ?>

</div>
<!-- /wp:accordion -->
