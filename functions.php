<?php
if (!defined('ABSPATH')) {
    exit;
}

define('T7IX_THEME_DIR', get_template_directory());

$theme_uri = get_template_directory_uri();
define('T7IX_THEME_URI', esc_url($theme_uri));

$theme_version = wp_get_theme()->get('Version');
define('T7IX_THEME_VERSION', $theme_version);

$autoload_path = T7IX_THEME_DIR . '/inc/autoloader.php';

if (is_readable($autoload_path)) {
    require_once $autoload_path;
}

if (class_exists('T7ix\Mercury\Setup')) {
    \T7ix\Mercury\Setup::instance();
}