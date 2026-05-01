<?php
/**
 * Title: Footer with text, button, links.
 * Slug: ucnature/footer-mega
 * Categories: footer
 * Block Types: core/template-part/footer
 *
 * @package ucnature
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained"},"fontSize":"small"} -->
<div class="wp-block-group alignfull has-small-font-size" style="margin-top:0px;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:columns {"align":"wide","style":{"elements":{"link":{"color":[]}}}} -->
<div class="wp-block-columns alignwide has-link-color"><!-- wp:column {"width":"55%"} -->
<div class="wp-block-column" style="flex-basis:55%"><!-- wp:heading {"level":4,"anchor":"our-company","className":"wp-block-heading"} -->
<h4 class="wp-block-heading" id="our-company"><?php echo esc_html__( 'Our Company', 'ucnature' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Use this pattern to promote programs, stories, and calls to action across the UC Natural Reserve System.', 'ucnature' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"url":"<?php echo esc_url( home_url( '/' ) ); ?>","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-button"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="wp-block-button__link wp-element-button" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--medium)"><?php echo esc_html__( 'Learn More', 'ucnature' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->
<!-- wp:column {"width":"15%"} -->
<div class="wp-block-column" style="flex-basis:15%"><!-- wp:heading {"level":4,"anchor":"about-us","className":"wp-block-heading"} -->
<h4 class="wp-block-heading" id="about-us"><?php echo esc_html__( 'About Us', 'ucnature' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:list -->
<ul><!-- wp:list-item -->
<li><?php echo esc_html__( 'Start Here', 'ucnature' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Our Mission', 'ucnature' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Brand Guide', 'ucnature' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Newsletter', 'ucnature' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Accessibility', 'ucnature' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->
<!-- wp:column {"width":"15%"} -->
<div class="wp-block-column" style="flex-basis:15%"><!-- wp:heading {"level":4,"anchor":"services","className":"wp-block-heading"} -->
<h4 class="wp-block-heading" id="services"><?php echo esc_html__( 'Services', 'ucnature' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:list -->
<ul><!-- wp:list-item -->
<li><?php echo esc_html__( 'Web Design', 'ucnature' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Development', 'ucnature' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Copywriting', 'ucnature' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Marketing', 'ucnature' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Social Media', 'ucnature' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->
<!-- wp:column {"width":"15%"} -->
<div class="wp-block-column" style="flex-basis:15%"><!-- wp:heading {"level":4,"anchor":"connect","className":"wp-block-heading"} -->
<h4 class="wp-block-heading" id="connect"><?php echo esc_html__( 'Connect', 'ucnature' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:list -->
<ul><!-- wp:list-item -->
<li><?php echo esc_html__( 'Facebook', 'ucnature' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Instagram', 'ucnature' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Twitter', 'ucnature' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'LinkedIn', 'ucnature' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Dribbble', 'ucnature' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
