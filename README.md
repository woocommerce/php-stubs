# WooCommerce Extension Stubs

Stub declarations of WooCommerce extensions: their functions, classes, interfaces and constants,
without implementations. They let you run static analysis tools like [PHPStan](https://phpstan.org/)
on code that integrates with these extensions, without installing them.

The stubs are generated from each extension's release using
[php-stubs/generator](https://github.com/php-stubs/generator), and published automatically for every
new release. This repository is generated, so pull requests are not accepted; please open an issue instead.

## Installation

Require [this package](https://packagist.org/packages/woocommerce/php-stubs) as a development
dependency with [Composer](https://getcomposer.org), next to
[php-stubs/woocommerce-stubs](https://github.com/php-stubs/woocommerce-stubs):

```bash
composer require --dev woocommerce/php-stubs:dev-trunk php-stubs/woocommerce-stubs
```

## Usage in PHPStan

Include the extensions you integrate with in your PHPStan configuration file:

```yaml
includes:
    # The newest release of an extension.
    - vendor/woocommerce/php-stubs/stubs/woocommerce-subscriptions/latest.neon
    # Or a specific release, e.g. the minimum version you support.
    - vendor/woocommerce/php-stubs/stubs/woocommerce-bookings/3.10.0.neon
    # WooCommerce internals that php-stubs/woocommerce-stubs leaves out, for your installed version.
    - vendor/woocommerce/php-stubs/supplements/woocommerce-internal.php
```

Each extension has a directory in [`stubs/`](stubs), with a `<version>.neon` for the first release of
each of its newest 10 minor versions, and for its newest release. Pin your minimum to the first
release of a minor version.

## For extension developers

To have the stubs of your WooCommerce Marketplace extension published here, add this line to the
header of your main plugin file in your next release:

```php
 * Woo Stubs: public
```

Releasing a version without the line removes your extension from this repository again; what was
already published stays in its history.

## License

GPL-3.0-or-later, like the extensions the stubs are generated from.
