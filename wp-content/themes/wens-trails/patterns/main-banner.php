<?php
/**
 * Title: Main Banner
 * Slug: wens-trails/main-banner
 * Categories: wens-trails
 *
 * @package wens-trails
 * @since 1.0.0
 */

?>

<!-- wp:group {"metadata":{"name":"banner"},"align":"full","className":"banner-margin-top","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull banner-margin-top"><!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/main-banner.jpg","id":25,"dimRatio":50,"overlayColor":"contrast","isUserOverlayColor":true,"minHeight":900,"minHeightUnit":"px","sizeSlug":"large","align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="min-height:900px"><img class="wp-block-cover__image-background wp-image-25 size-large" alt="" src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/main-banner.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"120px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-top:120px"><!-- wp:group {"style":{"spacing":{"blockGap":"16px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<h1 class="wp-block-heading has-text-align-center has-base-color has-text-color has-link-color"><?php echo esc_html__( 'Wild Trails, Hidden Gems,', 'wens-trails' ); ?><br> <?php echo esc_html__( 'Unforgettable Journeys', 'wens-trails' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<p class="has-text-align-center has-base-color has-text-color has-link-color"><?php echo esc_html__( 'Suspendisse potenti. Amet luctus venenatis lectus magna fringilla. Ultrices dui sapien eget mi proin sed. Egestas egestas fringilla phasellus', 'wens-trails' ); ?><br> <?php echo esc_html__( 'faucibus scelerisque eleifend donec pretium.', 'wens-trails' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"30px"}},"border":{"radius":"20px"}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="border-radius:20px;margin-top:30px"><!-- wp:button {"textColor":"base","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"color":{"background":"#024caa"},"border":{"radius":"20px"}}} -->
<div class="wp-block-button"><a href="#" class="wp-block-button__link has-base-color has-text-color has-background has-link-color wp-element-button" style="border-radius:20px;background-color:#024caa"><?php echo esc_html__( 'Know More', 'wens-trails' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->