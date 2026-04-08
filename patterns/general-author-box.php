<?php
/**
 * Title: Box with image, text, social icons.
 * Slug: ucnature/general-author-box
 * Categories: featured
 */
?>
<!-- wp:group {"style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|x-small"}},"borderColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-contrast-border-color" style="border-width:1px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:avatar {"size":100,"align":"center","style":{"border":{"radius":"50px"}}} /-->
<!-- wp:post-author-name {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"10px"}}},"fontSize":"large"} /-->
<!-- wp:post-author-biography {"textAlign":"center","style":{"spacing":{"margin":{"top":"0px"}},"typography":{"lineHeight":"1.5"}}} /-->
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( 'Twitter', 'ucnature' ); ?> · <?php echo esc_html__( 'Instagram', 'ucnature' ); ?> · <?php echo esc_html__( 'LinkedIn', 'ucnature' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
