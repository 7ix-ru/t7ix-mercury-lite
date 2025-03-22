<?php
/**
 * Title: Footer Section
 * Slug: t7ix-mercury-lite/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: A customizable footer section with multiple columns, social links, and copyright information.
 * Keywords: footer, columns, navigation, social
 */
namespace T7ix\Mercury;
?>
<!-- wp:column {"className":"footer","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"},":hover":{"color":{"text":"var:preset|color|additional"}}}}},"backgroundColor":"accent","textColor":"white"} -->
<div class="wp-block-column footer has-white-color has-accent-background-color has-text-color has-background has-link-color">
	<!-- wp:column {"className":"footer__wrapper"} -->
	<div class="wp-block-column footer__wrapper">
		<!-- wp:column {"className":"footer__item"} -->
		<div class="wp-block-column footer__item">
			<!-- wp:group {"className":"logo"} -->
			<div class="wp-block-group logo">
                <!-- wp:image {"lightbox":{"enabled":false},"width":"100px","height":"109px","scale":"cover","sizeSlug":"full","linkDestination":"custom"} -->
                <figure class="wp-block-image size-full is-resized">
                    <a href="#">
                        <img src="<?php echo App::file_uri('/assets/img/logo-footer.png') ?>" alt="" style="object-fit:cover;width:100px;height:109px"/>
                    </a>
                </figure>
                <!-- /wp:image -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"info"} -->
			<div class="wp-block-group info">
                <!-- wp:paragraph -->
				<p><a href="#"><?php esc_html_e('Privacy Policy', 't7ix-mercury-lite') ?></a></p>
				<!-- /wp:paragraph -->
                <!-- wp:paragraph -->
				<p><a href="#"><?php esc_html_e('User agreement', 't7ix-mercury-lite') ?></a></p>
				<!-- /wp:paragraph -->
				<!-- wp:group {"className":"copyright"} -->
				<div class="wp-block-group copyright">
                    <!-- wp:paragraph -->
                    <p><?php
                        /* translators: %s - The current year */
                        printf(esc_html__('%s © All Rights Reserved', 't7ix-mercury-lite'), date('Y'));
                        ?></p>
					<!-- /wp:paragraph -->
                    <!-- wp:paragraph -->
                    <p><?php printf(wp_kses(sprintf(
                                '<a href="%s" target="_blank">%s</a>',
                                esc_url('https://7ix.ru/themes/mercury-lite/'),
                                esc_html__('Design Studio 7ix', 't7ix-mercury-lite')
                        ), ['a' => ['href' => [], 'target' => []]])) ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"className":"footer__item"} -->
		<div class="wp-block-column footer__item">
			<!-- wp:columns -->
			<div class="wp-block-columns footer__columns">

				<!-- wp:navigation {"overlayMenu":"never","className":"footer-menu","layout":{"type":"flex","orientation":"vertical"}} -->
				<!-- wp:group {"className":"footer-menu__title"} -->
				<div class="wp-block-group footer-menu__title">
					<!-- wp:heading {"level":3} -->
					<h3><?php esc_html_e('Main', 't7ix-mercury-lite') ?></h3>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:group -->
				<!-- wp:navigation-link {"label":"<?php esc_html_e('About', 't7ix-mercury-lite') ?>","url":"#"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_html_e('Blog', 't7ix-mercury-lite') ?>","url":"#"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_html_e('FAQ', 't7ix-mercury-lite') ?>","url":"#"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_html_e('Contacts', 't7ix-mercury-lite') ?>","url":"#"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_html_e('Information', 't7ix-mercury-lite') ?>","url":"#"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_html_e('Our Services', 't7ix-mercury-lite') ?>","url":"#"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_html_e('Terms & Condition', 't7ix-mercury-lite') ?>","url":"#"} /-->
				<!-- /wp:navigation -->

				<!-- wp:navigation {"overlayMenu":"never","className":"footer-menu","layout":{"type":"flex","orientation":"vertical"}} -->
				<!-- wp:group {"className":"footer-menu__title"} -->
				<div class="wp-block-group footer-menu__title">
					<!-- wp:heading {"level":3} -->
					<h3><?php esc_html_e('Links', 't7ix-mercury-lite') ?></h3>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:group -->
				<!-- wp:navigation-link {"label":"<?php esc_html_e('Shop', 't7ix-mercury-lite') ?>","url":"#"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_html_e('Wishlist', 't7ix-mercury-lite') ?>","url":"#"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_html_e('My Account', 't7ix-mercury-lite') ?>","url":"#"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_html_e('Order History', 't7ix-mercury-lite') ?>","url":"#"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_html_e('Order Tracking', 't7ix-mercury-lite') ?>","url":"#"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_html_e('Services Center', 't7ix-mercury-lite') ?>","url":"#"} /-->
				<!-- /wp:navigation -->

			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"className":"footer__item"} -->
		<div class="wp-block-column footer__item">
			<!-- wp:group {"className":"phone"} -->
			<div class="wp-block-group phone">
                <!-- wp:paragraph {"className":"has-white-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                <p class="has-white-color has-text-color has-link-color"><?php printf(
						wp_kses(
							'<a href="tel:%1$s">%2$s</a>',
							['a' => ['href' => []]]
						),
                        esc_attr('+00000000000'),
                        esc_html__('+0 (000) 000-0000', 't7ix-mercury-lite')
					) ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:social-links {"iconColor":"var(--white)","iconColorValue":"var(--white)","openInNewTab":true,"size":"has-large-icon-size","className":"soc-network wp-block-social-links has-large-icon-size has-icon-color is-style-logos-only","layout":{"type":"flex","justifyContent":"right","flexWrap":"wrap","orientation":"horizontal"}} -->
			<ul class="soc-network wp-block-social-links has-large-icon-size has-icon-color is-style-logos-only">
                <!-- wp:social-link {"url":"#","service":"facebook"} /-->
                <!-- wp:social-link {"url":"#","service":"instagram"} /-->
				<!-- wp:social-link {"url":"#","service":"whatsapp","label":""} /-->
			</ul>
			<!-- /wp:social-links -->
			<!-- wp:group {"className":"email"} -->
			<div class="wp-block-group email">
                <!-- wp:paragraph {"className":"has-white-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                <p class="has-white-color has-text-color has-link-color"><?php printf(
						wp_kses(
							'<a href="mailto:%1$s">%1$s</a>',
							['a' => ['href' => []]]
						),
                        esc_attr__('Theme.Mercury@7ix.ru', 't7ix-mercury-lite')
					) ?>
				</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"className":"contacts"} -->
			<div class="wp-block-group contacts">
                <!-- wp:paragraph {"className":"has-white-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                <p class="has-white-color has-text-color has-link-color"><?php esc_html_e('48 Broadway St', 't7ix-mercury-lite') ?></p>
				<!-- /wp:paragraph -->
                <!-- wp:paragraph {"className":"has-white-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
                <p class="has-white-color has-text-color has-link-color"><?php esc_html_e('NY 260683', 't7ix-mercury-lite') ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:column -->