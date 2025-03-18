<?php
/**
 * Title: CTA Info Cover
 * Slug: t7ix-mercury-lite/cta-info-cover
 * Categories: t7ix-mercury-lite
 * Keywords: cta
 */
?>
<!-- wp:cover {"useFeaturedImage":true,"hasParallax":true,"dimRatio":80,"overlayColor":"light-grey","isUserOverlayColor":true,"minHeight":50,"isDark":false,"metadata":{"categories":["t7ix-mercury-lite"],"patternName":"t7ix-mercury-lite/cta-info-cover","name":"<?php esc_html_e('CTA Info Cover', 't7ix-mercury-lite') ?>"},"style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}},"heading":{"color":{"text":"var:preset|color|dark"}}},"color":{"duotone":"unset"},"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"textColor":"black","layout":{"type":"default"}} -->
<div class="wp-block-cover is-light has-parallax has-black-color has-text-color has-link-color" style="padding-top:4rem;padding-bottom:4rem;min-height:50px">
    <span aria-hidden="true" class="wp-block-cover__background has-light-grey-background-color has-background-dim-80 has-background-dim"></span>
    <div class="wp-block-cover__inner-container">
        <!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|dark"}}}},"textColor":"dark","fontSize":"large"} -->
        <h2 class="wp-block-heading has-text-align-center has-dark-color has-text-color has-link-color has-large-font-size"><?php esc_html_e('What DNA kit Should You choose?', 't7ix-mercury-lite') ?></h2>
        <!-- /wp:heading -->
        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|dark"}}},"typography":{"textTransform":"uppercase"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"textColor":"dark","fontSize":"medium"} -->
        <p class="has-text-align-center has-dark-color has-text-color has-link-color has-medium-font-size" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);text-transform:uppercase"><?php echo wp_kses_post(__('Answer 3 questions and we will give you<br>recommendations for genetic research', 't7ix-mercury-lite')) ?></p>
        <!-- /wp:paragraph -->
        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal","flexWrap":"wrap"}} -->
        <div class="wp-block-buttons">
            <!-- wp:button -->
            <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e('Pick a test', 't7ix-mercury-lite') ?></a></div>
            <!-- /wp:button -->
            <!-- wp:button {"backgroundColor":"accent"} -->
            <div class="wp-block-button"><a class="wp-block-button__link has-accent-background-color has-background wp-element-button" href="#"><?php esc_html_e('One page', 't7ix-mercury-lite') ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
</div>
<!-- /wp:cover -->