<?php
/**
 * Title: Page home
 * Slug: t7ix-mercury-lite/home
 */
?>
<!-- wp:query {"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"tagName":"main","metadata":{"categories":["posts"],"patternName":"t7ix-mercury-lite/template-query-loop","name":"<?php esc_html_e( 'Query loop', 't7ix-mercury-lite' ) ?>"},"align":"wide","className":"section blog","layout":{"type":"default"}} -->
<main class="wp-block-query alignwide section blog">
    <!-- wp:group {"className":"section__wrapper","layout":{"type":"constrained"}} -->
    <div class="wp-block-group section__wrapper">
        <!-- wp:group {"className":"title"} -->
        <div class="wp-block-group title">
            <!-- wp:heading {"className":"wp-block-heading title-1"} -->
            <h2 class="wp-block-heading title-1"><?php esc_html_e( 'Blog', 't7ix-mercury-lite' ) ?></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
    <!-- wp:group {"className":"section__wrapper no-results","layout":{"type":"constrained"}} -->
    <div class="wp-block-group section__wrapper no-results">
        <!-- wp:query-no-results -->
        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center"><?php esc_html_e( 'Sorry, but nothing was found. Please try a search with different keywords.', 't7ix-mercury-lite' ) ?></p>
        <!-- /wp:paragraph -->
        <!-- /wp:query-no-results -->
    </div>
    <!-- /wp:group -->
    <!-- wp:group {"className":"section__wrapper","layout":{"type":"constrained"}} -->
    <div class="wp-block-group section__wrapper">
        <!-- wp:post-template {"className":"blog__wrapper","layout":{"type":"default"}} -->
        <!-- wp:post-terms {"term":"category","separator":"","className":"categories text"} /-->
        <!-- wp:post-date {"format":"Y-m-d","className":"date text"} /-->
        <!-- wp:post-title {"className":"title subtitle-3"} /-->
        <!-- wp:post-featured-image {"aspectRatio":"16/9","className":"figure_img"} /-->
        <!-- wp:read-more {"content":" ","className":"blog__read-more"} /-->
        <!-- /wp:post-template -->
    </div>
    <!-- /wp:group -->
</main>
<!-- /wp:query -->
<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->