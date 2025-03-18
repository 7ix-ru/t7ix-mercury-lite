<?php
if (!defined('ABSPATH')) {
	exit;
} else {
	define('T7IX_THEME_DIR', get_template_directory());
	define('T7IX_THEME_URI', esc_url(get_template_directory_uri()));
	define('T7IX_THEME_VERSION', wp_get_theme()->get( 'Version' ));
}

$autoload_path = T7IX_THEME_DIR . '/inc/autoloader.php';

if (is_readable($autoload_path)) {
	require_once $autoload_path;
}

if (class_exists('T7ix\Mercury\Setup')) {
	\T7ix\Mercury\Setup::instance();
}