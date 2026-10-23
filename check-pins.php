<?php
/**
 * Fails when an exact stubs/<slug>/<version>.neon include in phpstan.neon.dist differs
 * from the minimum version this plugin declares for that plugin.
 *
 * Each exact include follows a comment naming where the minimum is declared:
 *
 *     # minimum: <file> <regex whose first group captures the version>
 *     - tools/php-stubs/vendor/woocommerce/php-stubs/stubs/<slug>/<version>.neon
 *
 * Shipped with woocommerce/php-stubs so every consumer runs the same check. From the
 * repository root, after installing the package:
 *
 *     php tools/php-stubs/vendor/woocommerce/php-stubs/check-pins.php [<phpstan.neon.dist>]
 */

$config = $argv[1] ?? 'phpstan.neon.dist';
$lines  = file( $config, FILE_IGNORE_NEW_LINES );
if ( false === $lines ) {
	fwrite( STDERR, "Cannot read $config.\n" );
	exit( 1 );
}

$errors  = array();
$checked = 0;
$spec    = null;
foreach ( $lines as $index => $line ) {
	$where = $config . ':' . ( $index + 1 );
	if ( preg_match( '/^\s*#\s*minimum:\s*(\S+)\s+(.+?)\s*$/', $line, $match ) ) {
		$spec = array( $match[1], $match[2] );
		continue;
	}
	if ( ! preg_match( '#/woocommerce/php-stubs/stubs/([a-z0-9-]+)/(\d+\.\d+\.\d+)\.neon\s*$#', $line, $pin ) ) {
		// Comments and blank lines may sit between a minimum and its include; nothing else.
		if ( null !== $spec && '' !== trim( $line ) && 0 !== strpos( ltrim( $line ), '#' ) ) {
			$errors[] = "$where: the '# minimum:' comment above is not followed by an exact stubs/<slug>/<version>.neon include.";
			$spec     = null;
		}
		continue;
	}
	if ( null === $spec ) {
		$errors[] = "$where: {$pin[1]} {$pin[2]} has no '# minimum: <file> <regex>' comment above it.";
		continue;
	}
	list( $file, $regex ) = $spec;
	$spec                 = null;
	$code                 = is_file( $file ) ? file_get_contents( $file ) : false;
	if ( false === $code ) {
		$errors[] = "$where: cannot read $file.";
		continue;
	}
	$found = @preg_match_all( $regex, $code, $matches );
	if ( false === $found ) {
		$errors[] = "$where: invalid regex $regex.";
		continue;
	}
	$versions = array_values( array_unique( $matches[1] ?? array() ) );
	if ( 1 !== count( $versions ) ) {
		$errors[] = sprintf( '%s: %s matches %s in %s; expected exactly one version.', $where, $regex, $versions ? implode( ', ', $versions ) : 'nothing', $file );
		continue;
	}
	if ( $versions[0] !== $pin[2] ) {
		$errors[] = "$where: {$pin[1]} is pinned to {$pin[2]}, but $file declares {$versions[0]}. Include stubs/{$pin[1]}/{$versions[0]}.neon instead.";
		continue;
	}
	++$checked;
}

if ( $errors ) {
	fwrite( STDERR, implode( "\n", $errors ) . "\n" );
	exit( 1 );
}
printf( "Stub pins match the declared minimums: %d checked.\n", $checked );
