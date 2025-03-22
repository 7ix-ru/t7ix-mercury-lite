<?php
namespace T7ix\Mercury;

if (!defined('ABSPATH')) {
    exit;
}

if (!defined('T7IX_THEME_DIR')) {
    return;
}

if ( ! class_exists( 'T7ix\Mercury\Check' ) ) {
    class Check {

        public function __construct() {}

        /**
         * Checks if a given file exists and is readable within the theme directory.
         *
         * This method verifies whether a specified file is available in the theme directory
         * and can be read. It is useful for ensuring that required assets or configuration
         * files are present before attempting to use them.
         *
         * @param string $filename The relative path to the file within the theme directory.
         * @return string Returns the filename if it exists and is readable, otherwise false.
         */
        public static function fun_is_file(string $filename ): string
        {
            if ( is_readable( T7IX_THEME_DIR . $filename ) ) {
                return $filename;
            } else {
                return false;
            }
        }

        /**
         * Checks whether WooCommerce is activated in WordPress.
         *
         * This method determines whether the wooCommerce plugin is included so that you can
         * Conditionally display or hide the functionality depending on it.
         *
         * @return bool Returns True if WooCommerce is active, otherwise false.
         */
        public static function is_woo_active(): bool
        {
            return class_exists('WooCommerce');
        }

        /**
         * Checks whether WooCommerce is activated in WordPress (including multisite support).
         *
         * The method checks the presence WooCommerce:
         * If the call occurs until the plugins are completely loaded, checks `active_plugins` In the database.
         *
         * @return bool Returns True if WooCommerce is active, otherwise false.
         */
        public static function is_woo_active_sitewide(): bool
        {
            return in_array(
                'woocommerce/woocommerce.php',
                array_merge(
                    (array) get_option('active_plugins', []),
                    is_multisite() ? (array) get_site_option('active_sitewide_plugins', []) : []
                )
            );
        }
    }
}