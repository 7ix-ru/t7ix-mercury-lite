<?php
/**
 * Title: Query loop
 * Slug: t7ix-mercury-lite/template-query-loop
 * Categories: query
 * Block Types: core/query
 * Description: List of posts in the form of a grid is one large, two small.
 */
?>
<!-- wp:query {"tagName":"section","className":"section blog t7ix-block__preview","query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date",
"author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"align":"wide","layout":{"type":"default"}} -->
<section class="wp-block-query alignwide section blog t7ix-block__preview">

    <!-- wp:group {"className":"section__wrapper","layout":{"type":"constrained"}} -->
    <div class="wp-block-group section__wrapper">
        <!-- wp:group {"className":"title"} -->
        <div class="wp-block-group title">
            <!-- wp:heading {"level":2,"className":"wp-block-heading title-1"} -->
            <h2 class="wp-block-heading title-1"><?php esc_html_e('Blog', 't7ix-mercury-lite') ?></h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"section__wrapper","layout":{"type":"constrained"}} -->
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
        <!-- wp:post-template {"layout":{"type":"default"},"className":"blog__wrapper"} -->
        <!-- wp:post-terms {"term":"category","className":"categories text","separator":""} /-->
        <!-- wp:post-date {"format":"Y-m-d","isLink":false,"className":"date text"} /-->
        <!-- wp:post-title {"isLink":false,"level":2,"className":"title subtitle-3"} /-->
        <!-- wp:post-featured-image {"isLink":false,"aspectRatio":"16/9","className":"figure_img"} /-->
        <!-- wp:read-more {"content":" ","className":"blog__read-more"} /-->
        <!-- /wp:post-template -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"section__wrapper","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
    <div class="wp-block-group section__wrapper pagination">
        <!-- wp:query-pagination {"align":"full","layout":{"type":"flex","justifyContent":"space-between"}} -->
        <!-- wp:query-pagination-numbers /-->
        <!-- /wp:query-pagination -->
    </div>
    <!-- /wp:group -->
</section>
<!-- /wp:query -->