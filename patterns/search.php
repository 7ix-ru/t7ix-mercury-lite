<?php
/**
 * Title: Search list of posts, 3 columns
 * Slug: t7ix-mercury-lite/search
 * Categories: query
 * Block Types: core/query
 * Description: A list of posts, 3 column, with featured image, title, terms and post date.
 */
?>
<!-- wp:query {"query":{"perPage":18,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],
"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"tagName":"main","enhancedPagination":true,"metadata":{"categories":["posts"],
"patternName":"t7ix-mercury-lite/template-query-loop","name":"<?php esc_html_e( 'Query loop', 't7ix-mercury-lite' ) ?>"},"align":"wide","className":"section blog","layout":{"type":"default"}} -->
<main class="wp-block-query alignwide section blog">
    <!-- wp:group {"className":"section__wrapper","layout":{"type":"constrained"}} -->
    <div class="wp-block-group section__wrapper">
        <!-- wp:group {"className":"title"} -->
        <div class="wp-block-group title">
            <!-- wp:query-title {"type":"search"} /-->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
    <!-- wp:group {"className":"section__wrapper no-results","layout":{"type":"constrained"}} -->
    <div class="wp-block-group section__wrapper no-results">
        <!-- wp:query-no-results -->
        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center"><?php esc_html_e('Sorry, but nothing was found. Please try to search with other keywords.', 't7ix-mercury-lite') ?></p>
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
    <!-- wp:group {"className":"section__wrapper pagination","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
    <div class="wp-block-group section__wrapper pagination">
        <!-- wp:query-pagination {"align":"full","layout":{"type":"flex","justifyContent":"space-between"}} -->
        <!-- wp:query-pagination-numbers /-->
        <!-- /wp:query-pagination -->
    </div>
    <!-- /wp:group -->
</main>
<!-- /wp:query -->
<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->