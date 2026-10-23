<?php
/**
 * PHPStan config that includes the WooCommerce supplement matching the installed
 * php-stubs/woocommerce-stubs version, so a Dependabot bump needs no include change:
 *
 *     includes:
 *         - tools/php-stubs/vendor/woocommerce/php-stubs/supplements/woocommerce-internal.php
 *
 * The version comes from the first vendor/composer/installed.json that lists
 * php-stubs/woocommerce-stubs: in the working directory, then in this package's parents.
 * A missing supplement fails loudly instead of loading another version's declarations.
 */

$dirs = array( (string) getcwd() );
for ( $dir = __DIR__; dirname( $dir ) !== $dir; $dir = dirname( $dir ) ) {
	$dirs[] = $dir;
}

foreach ( array_unique( $dirs ) as $dir ) {
	$file = $dir . '/vendor/composer/installed.json';
	if ( ! is_file( $file ) ) {
		continue;
	}
	$installed = json_decode( (string) file_get_contents( $file ), true );
	// Composer 2 wraps the list in "packages"; Composer 1 wrote the list itself.
	$packages = is_array( $installed ) ? ( $installed['packages'] ?? $installed ) : array();
	foreach ( $packages as $package ) {
		if ( 'php-stubs/woocommerce-stubs' !== ( $package['name'] ?? null ) ) {
			continue;
		}
		$version = ltrim( (string) ( $package['version'] ?? '' ), 'v' );
		$neon    = __DIR__ . "/woocommerce-internal/$version.neon";
		if ( ! is_file( $neon ) ) {
			throw new RuntimeException(
				"woocommerce/php-stubs has no WooCommerce supplement for php-stubs/woocommerce-stubs $version (found in $file). " .
				'It is generated within a day of the release; then run composer update in the directory that installs woocommerce/php-stubs.'
			);
		}
		// An include, not a returned scanFiles entry: PHPStan keys its container cache on the
		// config files it loads, so a version change must change the file list.
		return array( 'includes' => array( $neon ) );
	}
}

throw new RuntimeException( 'woocommerce/php-stubs: php-stubs/woocommerce-stubs is not installed in ' . implode( ', ', array_unique( $dirs ) ) . '.' );
