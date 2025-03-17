<?php
if ( ! function_exists( 't7ix_mercury_autoload' ) ) {
	function t7ix_mercury_autoload($class): void
	{
		$prefix   = 'T7ix\\Mercury\\';
		$base_dir = __DIR__ . '/classes/';

		if (strncmp($class, $prefix, strlen($prefix)) === 0) {
			$relative_class = substr($class, strlen($prefix));
			$file           = $base_dir.str_replace('\\', '/', $relative_class).'.php';
			if (file_exists($file)) {
				require $file;
			}
		}
	}
	spl_autoload_register('t7ix_mercury_autoload');
}