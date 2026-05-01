<?php
/**
 * Title: Call-to-action with text, button.
 * Slug: ucnature/general-cta-button
 * Categories: call-to-action
 *
 * @package ucnature
 */

?>
<!-- wp:group {"align":"wide","style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"}}},"borderColor":"contrast","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide has-border-color has-contrast-border-color" style="border-width:1px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"},"layout":{"selfStretch":"fixed","flexSize":"720px"}},"fontSize":"large"} -->
<p class="has-large-font-size" style="line-height:1.5"><?php echo esc_html__( 'Use this pattern to promote programs, stories, and calls to action across the UC Natural Reserve System.', 'ucnature' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"url":"<?php echo esc_url( home_url( '/' ) ); ?>","fontSize":"small"} -->
<div class="wp-block-button has-custom-font-size has-small-font-size"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Get Started Today', 'ucnature' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
