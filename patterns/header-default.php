<?php
/**
 * Title: Header with site title, navigation.
 * Slug: ucnature/header-default
 * Categories: header
 * Block Types: core/template-part/header
 *
 * @package ucnature
 */

?>
<!-- wp:group {"tagName":"header","style":{"border":{"bottom":{"color":"var:preset|color|orange","style":"solid","width":"2px"},"top":[],"right":[],"left":[]},"position":{"type":"sticky","top":"0px"},"spacing":{"padding":{"right":"var:preset|spacing|small","left":"var:preset|spacing|small","top":"var:preset|spacing|small"}}},"backgroundColor":"secondary","layout":{"type":"default"}} -->
<header class="wp-block-group has-secondary-background-color has-background" style="border-bottom-color:var(--wp--preset--color--orange);border-bottom-style:solid;border-bottom-width:2px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"right":"0","left":"0"},"blockGap":{"top":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":350} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-bottom:var(--wp--preset--spacing--small)"><!-- wp:group {"metadata":{"blockVisibility":{"viewport":{"mobile":false}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:navigation {"textColor":"base","overlayMenu":"never","fontSize":"x-small","layout":{"type":"flex","justifyContent":"right"}} /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"textColor":"base","overlay":"navigation-overlay","icon":"menu","overlayBackgroundColor":"neutral","overlayTextColor":"contrast","style":{"layout":{"selfStretch":"fill","flexSize":null},"typography":{"fontStyle":"normal","fontWeight":"500"}},"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></header>
<!-- /wp:group -->
