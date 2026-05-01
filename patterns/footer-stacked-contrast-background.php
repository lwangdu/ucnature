<?php
/**
 * Title: Footer with heading, text, button.
 * Slug: ucnature/footer-stacked-contrast-background
 * Categories: footer
 * Block Types: core/template-part/footer
 *
 * @package ucnature
 */

?>
<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|small"},"margin":{"top":"0px"}}},"backgroundColor":"contrast","textColor":"base","className":"has-background-color","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="margin-top:0px;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--small)"><!-- wp:heading {"textAlign":"center","anchor":"let-s-connect","style":{"spacing":{"margin":{"bottom":"20px"}}},"className":"wp-block-heading","fontSize":"max-48"} -->
<h2 class="wp-block-heading has-text-align-center has-max-48-font-size" id="let-s-connect" style="margin-bottom:20px"><?php echo esc_html__( 'Let’s Connect', 'ucnature' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( 'Use this pattern to promote programs, stories, and calls to action across the UC Natural Reserve System.', 'ucnature' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|x-large"}}}} -->
<div class="wp-block-buttons" style="margin-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:button {"url":"<?php echo esc_url( home_url( '/' ) ); ?>"} -->
<div class="wp-block-button"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Get in Touch', 'ucnature' ); ?> →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size">© <?php echo esc_html( gmdate( 'Y' ) ); ?> Your Company LLC · <?php echo esc_html__( 'Contact Us', 'ucnature' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
