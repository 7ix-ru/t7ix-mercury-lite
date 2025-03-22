<?php
namespace T7ix\Mercury;

if (!defined('ABSPATH')) {
    exit;
}

if (!defined('T7IX_THEME_DIR') || !defined('T7IX_THEME_URI')) {
    return;
}

if ( ! class_exists( 'T7ix\Mercury\App' ) ) {
    class App
    {
        /**
         *
         * @see trim_string
         *
         * @param $string
         * @param $amount
         * @param  string  $after
         *
         * @return string
         *
         */
        public static function trim_string( $string, $amount, string $after = '...' ): string
        {
            $string = trim( $string );
            if ( iconv_strlen( $string ) < $amount ) {
                $after = '';
            }
            return mb_substr( strip_tags( $string ), 0, $amount ) . $after;
        }

        /**
         * Convert phone number to format +00000000000 или 00000000000
         *
         * @param $phone
         * @param bool $with_plus
         * @return string
         */
        public static function format_phone_number( $phone, bool $with_plus = true ): string
        {
            $cleaned = preg_replace( '/\D/', '', $phone ) ?? '';
            if ( $with_plus && !empty( $cleaned ) ) {
                if (strpos($phone, '+') !== false) {
                    $cleaned = '+' . $cleaned;
                } elseif (strlen($cleaned) > 10) {
                    $cleaned = '+' . $cleaned;
                }
            }
            return $cleaned;
        }

        /**
         * @param $file
         *
         * @see get_theme_file_uri
         *
         * @return string
         */
        public static function file_uri($file): string
        {
            return esc_url(get_theme_file_uri(ltrim($file, '/')));
        }
    }
}