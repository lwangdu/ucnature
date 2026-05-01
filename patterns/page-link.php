<?php
/**
 * Title: Sample link page.
 * Slug: ucnature/page-link
 * Categories: featured
 *
 * @package ucnature
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0px"},"padding":{"left":"0px","top":"var:preset|spacing|large","right":"0px","bottom":"var:preset|spacing|large"}},"dimensions":{"minHeight":"100vh"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group alignfull" style="min-height:100vh;margin-top:0px;padding-top:var(--wp--preset--spacing--large);padding-right:0px;padding-bottom:var(--wp--preset--spacing--large);padding-left:0px"><!-- wp:group {"layout":{"type":"constrained","wideSize":"600px"}} -->
<div class="wp-block-group"><!-- wp:image {"align":"center","id":3489,"width":120,"height":120,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image aligncenter size-full is-resized is-style-rounded"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/sample_800x800.jpg'; ?>" alt="<?php echo esc_attr__( 'Profile photo for the sample link page', 'ucnature' ); ?>" class="wp-image-3489" width="120" height="120"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"textAlign":"center","level":1,"className":"wp-block-heading"} -->
<h1 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Your Name', 'ucnature' ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( 'Company Name', 'ucnature' ); ?><br><a href="mailto:name@company.com">name@company.com</a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}}}} -->
<p class="has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--medium)"><?php echo esc_html__( 'Facebook', 'ucnature' ); ?> · <?php echo esc_html__( 'Instagram', 'ucnature' ); ?> · <?php echo esc_html__( 'Twitter', 'ucnature' ); ?> · <?php echo esc_html__( 'Dribbble', 'ucnature' ); ?> · <?php echo esc_html__( 'LinkedIn', 'ucnature' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"},"style":{"spacing":{"blockGap":"10px","margin":{"bottom":"var:preset|spacing|small"}}}} -->
<div class="wp-block-buttons" style="margin-bottom:var(--wp--preset--spacing--small)">
<!-- wp:button {"width":100,"url":"https://example.com"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link" href="https://example.com"><?php echo esc_html__( 'Visit My Website', 'ucnature' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"width":100,"url":"https://example.com/blog"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link" href="https://example.com/blog"><?php echo esc_html__( 'Read My Blog', 'ucnature' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"width":100,"url":"https://example.com/ebook"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link" href="https://example.com/ebook"><?php echo esc_html__( 'Download My Ebook', 'ucnature' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"width":100,"url":"https://example.com/newsletter"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link" href="https://example.com/newsletter"><?php echo esc_html__( 'Follow My Newsletter', 'ucnature' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"width":100,"url":"https://example.com/podcast"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link" href="https://example.com/podcast"><?php echo esc_html__( 'Listen to My Podcast', 'ucnature' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size"><?php echo esc_html__( 'Customize this page with your own links, contact details, and social profiles.', 'ucnature' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
