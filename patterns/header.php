<?php
/**
 * Title: Header
 * Slug: t7ix-mercury-lite/header
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Header with site logo and navigation.
 * Keywords: header, columns, logo, navigation
 */
namespace T7ix\Mercury;
?>
<!-- wp:group {"tagName":"aside","className":"top-panel"} -->
<aside class="wp-block-group top-panel">
    <!-- wp:columns {"verticalAlignment":"center","className":"top-panel__wrapper"} -->
    <div class="wp-block-columns are-vertically-aligned-center top-panel__wrapper">
        <!-- wp:column {"verticalAlignment":"center","width":"33.33%","className":"top-panel__item"} -->
        <div class="wp-block-column is-vertically-aligned-center top-panel__item" style="flex-basis:33.33%">
            <!-- wp:group {"className":"address","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group address">
                <!-- wp:image -->
                <figure class="wp-block-image">
                    <img src="<?php echo App::file_uri('/assets/img/svg/ico-location.svg') ?>" alt="search" />
                </figure>
                <!-- /wp:image -->
                <!-- wp:paragraph {"className":"button-text"} -->
                <p class="button-text">
                    <a href="#"><?php esc_html_e('Thomsburg', 't7ix-mercury-lite') ?></a>
                </p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column {"verticalAlignment":"center","width":"66.66%","className":"top-panel__item","layout":{"type":"flex","justifyContent":"right"}} -->
        <div class="wp-block-column is-vertically-aligned-center top-panel__item" style="flex-basis:66.66%">
            <!-- wp:group {"className":"contacts","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group contacts">
                <!-- wp:social-links {"iconColor":"var(--black)","iconColorValue":"var(--black)","openInNewTab":true,"size":"has-large-icon-size",
                "className":"soc-network wp-block-social-links has-large-icon-size has-icon-color is-style-logos-only","layout":{"type":"flex","justifyContent":"right","flexWrap":"wrap","orientation":"horizontal"}} -->
                <ul class="wp-block-social-links has-large-icon-size has-icon-color soc-network is-style-logos-only">
                    <!-- wp:social-link {"url":"#","service":"facebook"} /-->
                    <!-- wp:social-link {"url":"#","service":"instagram"} /-->
                    <!-- wp:social-link {"url":"#","service":"whatsapp","label":""} /-->
                </ul>
                <!-- /wp:social-links -->
                <!-- wp:buttons -->
                <div class="wp-block-buttons">
                    <!-- wp:button {"className":"top-header-phone"} -->
                    <div class="wp-block-button top-header-phone">
                        <a class="wp-block-button__link wp-element-button" href="tel:<?php echo esc_attr('+00000000000') ?>">
                            <img src="<?php echo App::file_uri('/assets/img/svg/ico-phone.svg') ?>" alt="phone">
                            <?php esc_html_e('+0 (000) 000-0000', 't7ix-mercury-lite') ?>
                        </a>
                    </div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</aside>
<!-- /wp:group -->
<!-- wp:group {"tagName":"header","className":"header"} -->
<header class="wp-block-group header">
    <!-- wp:columns {"verticalAlignment":center,"className":"header__wrapper"} -->
    <div class="wp-block-columns header__wrapper">
        <!-- wp:site-logo {"width":73,"className":"header__item"} /-->
        <!-- wp:column {"verticalAlignment":"center","width":"70%","className":"header__item","layout":{"type":"constrained","justifyContent":"left",
        "wideSize":"","contentSize":"100%"}} -->
        <div class="wp-block-column is-vertically-aligned-center header__item" style="flex-basis:70%">
            <!-- wp:navigation {"overlayMenu":"never","className":"header-menu","layout":{"type":"flex","orientation":"horizontal","justifyContent":"left","flexWrap":"wrap"}} -->
            <!-- wp:navigation-link {"label":"<?php esc_html_e('About', 't7ix-mercury-lite') ?>","url":"#"} /-->
            <!-- wp:navigation-link {"label":"<?php esc_html_e('Blog', 't7ix-mercury-lite') ?>","url":"#"} /-->
            <!-- wp:navigation-link {"label":"<?php esc_html_e('Contacts', 't7ix-mercury-lite') ?>","url":"#"} /-->
            <!-- wp:navigation-link {"label":"<?php esc_html_e('FAQ', 't7ix-mercury-lite') ?>","url":"#"} /-->
            <!-- wp:navigation-link {"label":"<?php esc_html_e('Information', 't7ix-mercury-lite') ?>","url":"#"} /-->
            <!-- wp:navigation-link {"label":"<?php esc_html_e('Services', 't7ix-mercury-lite') ?>","url":"#"} /-->
            <!-- wp:navigation-link {"label":"<?php esc_html_e('Shop', 't7ix-mercury-lite') ?>","url":"#"} /-->
            <!-- /wp:navigation -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column {"verticalAlignment":"center","className":"header__item","layout":{"type":"constrained","justifyContent":"right"}} -->
        <div class="wp-block-column is-vertically-aligned-center header__item">
            <!-- wp:group {"className":"header__menu-user","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
            <div class="wp-block-group header__menu-user">
                <!-- wp:group {"className":"menu-user","layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group menu-user">
                    <!-- wp:image -->
                    <figure class="wp-block-image button menu-user__search">
                        <img src="<?php echo App::file_uri('/assets/img/svg/ico-search.svg') ?>" alt="search" />
                    </figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <?php if (is_callable(['T7ix\Mercury\Check', 'is_woo_active']) && Check::is_woo_active()) : ?>
                    <!-- wp:woocommerce/customer-account {"displayStyle":"icon_only","iconStyle":"line","iconClass":"wc-block-customer-account__account-icon"} /-->
                    <!-- wp:woocommerce/mini-cart /-->
                <?php endif ?>
            </div>
            <!-- /wp:group -->
            <!-- wp:search {"label":"header-search"} /-->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</header>