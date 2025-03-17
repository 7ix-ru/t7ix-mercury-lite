<?php
/**
 * Title: Page single
 * Slug: t7ix-mercury-lite/single
 * Categories: posts
 * Description: Page of a separate entry with the heading, image, contents, meta-dane, navigation and comments.
 */
?>
<!-- wp:post-title {"level":1} /-->
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
    <!-- wp:post-featured-image {"aspectRatio":"3/2","width":"100%","height":"200px","overlayColor":"dark","dimRatio":50} /-->
    <!-- wp:spacer {"height":"20px"} -->
    <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    <!-- wp:group {"className":"has-link-color","style":{"spacing":{"blockGap":"0.2em","margin":{"bottom":"var:preset|spacing|50"}}},"textColor":"accent-4","fontSize":"small","layout":{"type":"flex","flexWrap":"wrap"}} -->
    <div class="wp-block-group has-link-color has-accent-4-color has-text-color has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--50)">
        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"typography":{"fontSize":"16px"}},"textColor":"black"} -->
        <p class="has-black-color has-text-color has-link-color" style="font-size:16px"><?php esc_html_e('Written', 't7ix-mercury-lite') ?></p>
        <!-- /wp:paragraph -->
        <!-- wp:post-author-name {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|dark-grey"}}},"typography":{"fontSize":"16px"}},"textColor":"dark-grey"} /-->
        <!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"}}} -->
        <p style="font-size:16px"><?php esc_html_e('in', 't7ix-mercury-lite') ?></p>
        <!-- /wp:paragraph -->
        <!-- wp:post-terms {"term":"category","style":{"typography":{"fontWeight":"300","fontStyle":"normal","fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent"} /-->
    </div>
    <!-- /wp:group -->
    <!-- wp:post-content {"align":"full","fontSize":"medium","layout":{"type":"constrained"}} /-->
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
        <!-- wp:post-terms {"term":"post_tag","separator":"  ","className":"is-style-post-terms-1","style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black","fontSize":"medium"} /-->
    </div>
    <!-- /wp:group -->
    <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)">
        <!-- wp:group {"tagName":"nav","align":"wide","style":{"border":{"top":{"color":"var:preset|color|accent-6","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|line"}}}},"textColor":"line","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
        <nav class="wp-block-group alignwide has-line-color has-text-color has-link-color" aria-label="<?php esc_attr_e('Navigation by records', 't7ix-mercury-lite') ?>" style="border-top-color:var(--wp--preset--color--accent-6);border-top-width:1px;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
            <!-- wp:post-navigation-link {"type":"previous","showTitle":true,"arrow":"arrow","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent"} /-->
            <!-- wp:post-navigation-link {"showTitle":true,"arrow":"arrow","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent"} /-->
        </nav>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
    <!-- wp:comments {"className":"wp-block-comments-query-loop","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|dark"}}}},"textColor":"dark"} -->
    <div class="wp-block-comments wp-block-comments-query-loop has-dark-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)">
        <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black","fontSize":"medium"} -->
        <h2 class="wp-block-heading has-black-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('Comments', 't7ix-mercury-lite') ?></h2>
        <!-- /wp:heading -->
        <!-- wp:comments-title {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black","fontSize":"medium"} /-->
        <!-- wp:comment-template -->
        <!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|50"}}}} -->
        <div class="wp-block-group" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--50)">
            <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group">
                <!-- wp:avatar {"size":50} /-->
                <!-- wp:group {"layout":{"type":"default"}} -->
                <div class="wp-block-group">
                    <!-- wp:comment-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|grey"}}}},"textColor":"grey"} /-->
                    <!-- wp:comment-author-name {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent"} /-->
                    <!-- wp:comment-content {"style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black"} /-->
                    <!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group has-accent-color has-text-color has-link-color">
                        <!-- wp:comment-edit-link /-->
                        <!-- wp:comment-reply-link /-->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:comment-template -->
        <!-- wp:comments-pagination {"style":{"elements":{"link":{"color":{"text":"var:preset|color|dark-grey"}}}},"textColor":"dark-grey","layout":{"type":"flex","justifyContent":"space-between"}} -->
        <!-- wp:comments-pagination-previous /-->
        <!-- wp:comments-pagination-next /-->
        <!-- /wp:comments-pagination -->
        <!-- wp:post-comments-form {"style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"typography":{"fontSize":"18px"}},"textColor":"black"} /-->
    </div>
    <!-- /wp:comments -->
</div>
<!-- /wp:group -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
    <!-- wp:heading {"align":"wide","style":{"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"600","letterSpacing":"0px","fontSize":"18px"},"elements":{"link":{"color":{"text":"var:preset|color|dark-grey"}}}},"textColor":"dark-grey"} -->
    <h2 class="wp-block-heading alignwide has-dark-grey-color has-text-color has-link-color" style="font-size:18px;font-style:normal;font-weight:600;letter-spacing:0px;text-transform:none"><?php esc_html_e('More records', 't7ix-mercury-lite') ?></h2>
    <!-- /wp:heading -->
    <!-- wp:query {"queryId":22,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"align":"wide","layout":{"type":"default"}} -->
    <div class="wp-block-query alignwide">
        <!-- wp:post-template {"align":"full","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
        <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"border":{"bottom":{"color":"var:preset|color|accent-6","width":"1px"},"top":[],"right":[],"left":[]}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"space-between","orientation":"horizontal"}} -->
        <div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--accent-6);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
            <!-- wp:post-title {"level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black","fontSize":"medium"} /-->
            <!-- wp:post-date {"textAlign":"right","isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|grey"}}}},"textColor":"grey"} /-->
        </div>
        <!-- /wp:group -->
        <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->