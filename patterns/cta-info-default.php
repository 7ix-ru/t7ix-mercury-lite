<?php
/**
 * Title: CTA Info default
 * Slug: t7ix-mercury-lite/cta-info-default
 * Categories: t7ix-mercury-lite
 * Keywords: cta
 */
?>
<!-- wp:group {"metadata":{"categories":["t7ix-mercury-lite"],"patternName":"t7ix-mercury-lite/cta-info-default","name":"<?php esc_html_e('CTA Info default', 't7ix-mercury-lite') ?>"},"align":"full","className":"t7ix-block__preview section cta-info","backgroundColor":"additional","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull t7ix-block__preview section cta-info has-additional-background-color has-background">
    <!-- wp:group {"align":"wide","className":"section__wrapper","style":{"spacing":{"blockGap":"0px"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","flexWrap":"nowrap"}} -->
    <div class="wp-block-group alignwide section__wrapper">
        <!-- wp:heading {"textAlign":"center","className":"title-1","fontSize":"x-large"} -->
        <h2 class="wp-block-heading has-text-align-center title-1 has-x-large-font-size"><?php esc_html_e('What DNA kit Should You choose?', 't7ix-mercury-lite') ?></h2>
        <!-- /wp:heading -->
        <!-- wp:paragraph {"align":"center","className":"subtitle-3"} -->
        <p class="has-text-align-center subtitle-3"><?php echo wp_kses_post(__('Answer 3 questions and we will give you<br>recommendations for genetic research', 't7ix-mercury-lite')) ?></p>
        <!-- /wp:paragraph -->
        <!-- wp:buttons -->
        <div class="wp-block-buttons">
            <!-- wp:button -->
            <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e('Pick a test', 't7ix-mercury-lite') ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->