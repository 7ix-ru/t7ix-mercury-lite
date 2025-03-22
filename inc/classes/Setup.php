<?php
namespace T7ix\Mercury;

if (!defined('ABSPATH')) {
	exit;
}

if (!defined('T7IX_THEME_DIR')) {
	return;
}

if ( ! class_exists( 'T7ix\Mercury\Setup' ) ) {
	class Setup {

        /** @var Setup|null */
        private static $instance = null;

		private function __construct() {}
		private function __clone() {}

		public function init(): void
		{
			add_action('after_setup_theme',             [$this, 'setup_theme']);
			add_action('wp_enqueue_scripts',            [$this, 'enqueue_scripts']);
			add_action('admin_enqueue_scripts',         [$this, 'admin_enqueue_scripts']);
			add_action('init',                          [$this, 'register_block_pattern_category']);
			$this->bundles();
		}


        /**
         * @return Setup
         */
		public static function instance()
		{
			if (self::$instance === null) {
				self::$instance = new self();
				self::$instance->init();
			}

			return self::$instance;
		}

		/**
		 * @return void
		 */
		private function bundles()
		{

			if (class_exists('T7ix\Mercury\Check')) {
				new Check();
			}

			if (class_exists('T7ix\Mercury\Filters')) {
				new Filters();
			}
			
		}

		/**
		 * @return void
		 */
		public function setup_theme()
		{
			load_theme_textdomain( 't7ix-mercury-lite', T7IX_THEME_DIR . '/languages' );

			add_theme_support( 'post-formats',
				['aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video']
			);

		}

        /**
		 * @return void
		 */
		public function enqueue_scripts()
		{
			if (is_callable(['T7ix\Mercury\Check', 'fun_is_file'])
			) {
				$css_style = Check::fun_is_file('/assets/css/style.css');
				if ($css_style) {
					wp_enqueue_style('t7ix-mercury-lite-style',
                        T7IX_THEME_URI . $css_style,
						[],
                        T7IX_THEME_VERSION
                    );
				}

				$js_main = Check::fun_is_file('/assets/js/main.js');
				if ($js_main) {
					wp_enqueue_script('t7ix-mercury-lite-main',
                        T7IX_THEME_URI . $js_main,
						['jquery'],
                        T7IX_THEME_VERSION,
                        true
                    );
				}
			}

			if (!is_admin()) {

				$inline_css = '*{margin:0;padding:0;box-sizing:border-box}';
				wp_add_inline_style('t7ix-mercury-lite-style', $inline_css);

			}

		}

		/**
		 * @return void
		 */
		public function admin_enqueue_scripts()
		{
			if (is_callable(['T7ix\Mercury\Check', 'fun_is_file'])
			) {
				$css_admin = Check::fun_is_file( '/admin/css/style.css' );
				if ( $css_admin ) {
					wp_enqueue_style( 't7ix-mercury-lite-admin',
                        T7IX_THEME_URI . $css_admin,
                        [],
                        T7IX_THEME_VERSION
                    );
				}

				$this->enqueue_scripts();
			}
		}

        /**
         * @return void
         */
        public function register_block_pattern_category()
        {
            register_block_pattern_category(
                't7ix-mercury-lite',
                [
                    'label' => esc_html__( 'T7ix Mercury Lite', 't7ix-mercury-lite' ),
                ]
            );
        }
		
	}
}