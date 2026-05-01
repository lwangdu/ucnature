<?php
/**
 * Title: Footer with text, links.
 * Slug: ucnature/footer-default
 * Categories: footer
 * Block Types: core/template-part/footer
 *
 * @package ucnature
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"},"margin":{"top":"0px"}}},"layout":{"type":"constrained"},"fontSize":"small"} -->
<div class="wp-block-group alignfull has-small-font-size" style="margin-top:0px;padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small)"><!-- wp:group {"align":"wide","layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph -->
<p>© <?php echo esc_html( gmdate( 'Y' ) ); ?> Your Company LLC · <?php echo esc_html__( 'Contact Us', 'ucnature' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Facebook', 'ucnature' ); ?> · <?php echo esc_html__( 'Twitter', 'ucnature' ); ?> · <?php echo esc_html__( 'Instagram', 'ucnature' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
