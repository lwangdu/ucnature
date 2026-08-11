<?php
/**
 * Title: Advisory with key updates and call to action.
 * Slug: ucnature/general-advisory
 * Categories: text, call-to-action
 * Keywords: advisory, alert, notice, update
 * Description: A prominent, scannable advisory with three key updates and a help action.
 *
 * @package ucnature
 */

?>
<!-- wp:group {"metadata":{"name":"Advisory"},"align":"wide","className":"ucnature-advisory","style":{"border":{"left":{"color":"var:preset|color|orange","width":"6px"}},"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"}},"backgroundColor":"neutral","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide ucnature-advisory has-neutral-background-color has-background" style="border-left-color:var(--wp--preset--color--orange);border-left-width:6px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"className":"ucnature-advisory__header","style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group ucnature-advisory__header"><!-- wp:paragraph {"className":"ucnature-advisory__eyebrow","style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.08em"}},"textColor":"primary","fontSize":"x-small"} -->
<p class="ucnature-advisory__eyebrow has-primary-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:700;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html__( 'Travel update', 'ucnature' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.15"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"max-36"} -->
<h2 class="wp-block-heading has-max-36-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:700;line-height:1.15"><?php echo esc_html__( '2026 Travel Advisory', 'ucnature' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"darker","fontSize":"x-small"} -->
<p class="has-darker-color has-text-color has-x-small-font-size"><?php echo esc_html__( 'What travelers need to know before planning a trip.', 'ucnature' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"className":"ucnature-advisory__items","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|small"}}}} -->
<div class="wp-block-columns ucnature-advisory__items"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"className":"ucnature-advisory__item-title","style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"0","bottom":"10px"}}},"textColor":"primary","fontSize":"medium"} -->
<h3 class="wp-block-heading ucnature-advisory__item-title has-primary-color has-text-color has-medium-font-size" style="margin-top:0;margin-bottom:10px;font-style:normal;font-weight:700"><?php echo esc_html__( 'Tibet travel permits', 'ucnature' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.55"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="line-height:1.55"><?php echo esc_html__( 'A Tibet permit is required in addition to your visa. Allow about three weeks and apply through an official Tibet travel agency.', 'ucnature' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html__( 'Get connected with an agency', 'ucnature' ); ?> <span aria-hidden="true">&rarr;</span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"className":"ucnature-advisory__item-title","style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"0","bottom":"10px"}}},"textColor":"primary","fontSize":"medium"} -->
<h3 class="wp-block-heading ucnature-advisory__item-title has-primary-color has-text-color has-medium-font-size" style="margin-top:0;margin-bottom:10px;font-style:normal;font-weight:700"><?php echo esc_html__( 'Nepal border', 'ucnature' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.55"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="line-height:1.55"><?php echo esc_html__( 'The Kyirong and Dram crossings are open. Due to altitude concerns, travel from Tibet toward Nepal is the recommended overland direction.', 'ucnature' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"className":"ucnature-advisory__item-title","style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"0","bottom":"10px"}}},"textColor":"primary","fontSize":"medium"} -->
<h3 class="wp-block-heading ucnature-advisory__item-title has-primary-color has-text-color has-medium-font-size" style="margin-top:0;margin-bottom:10px;font-style:normal;font-weight:700"><?php echo esc_html__( 'Visa update', 'ucnature' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.55"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="line-height:1.55"><?php echo esc_html__( 'The special Chinese Group Visa is no longer required from Nepal. An individual visa from your home country now works; a Tibet permit is still required.', 'ucnature' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"className":"ucnature-advisory__action","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|small"}},"backgroundColor":"base","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group ucnature-advisory__action has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:700"><?php echo esc_html__( 'Need help planning?', 'ucnature' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"darker","fontSize":"x-small"} -->
<p class="has-darker-color has-text-color has-x-small-font-size"><?php echo esc_html__( 'We will connect you for free with an official, Tibetan-owned agency we trust.', 'ucnature' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html__( 'Get free help', 'ucnature' ); ?> <span aria-hidden="true">&rarr;</span></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
