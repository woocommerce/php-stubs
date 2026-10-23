<?php
/**
 * Generated stub declarations for skyverge-wc-plugin-framework 6.0.1.
 * @see https://github.com/woocommerce/all-plugins/tree/stubs
 */

namespace SkyVerge\WooCommerce\PluginFramework\v6_0_1\Addresses;

/**
 * The base address data class.
 *
 * This serves as a standard address object to be passed around by plugins whenever dealing with address data.
 * Eliminates the need to rely on WooCommerce's address arrays.
 *
 * @since 5.3.0
 */
#[\AllowDynamicProperties]
class Address
{
    /** @var string line 1 of the street address */
    protected $line_1 = '';
    /** @var string line 2 of the street address */
    protected $line_2 = '';
    /** @var string line 3 of the street address */
    protected $line_3 = '';
    /** @var string address locality (city) */
    protected $locality = '';
    /** @var string address region (state) */
    protected $region = '';
    /** @var string address country */
    protected $country = '';
    /** @var string address postcode */
    protected $postcode = '';
    /** Getter methods ************************************************************************************************/
    /**
     * Gets line 1 of the street address.
     *
     * @since 5.3.0
     *
     * @return string
     */
    public function get_line_1()
    {
    }
    /**
     * Gets line 2 of the street address.
     *
     * @since 5.3.0
     *
     * @return string
     */
    public function get_line_2()
    {
    }
    /**
     * Gets line 3 of the street address.
     *
     * @since 5.3.0
     *
     * @return string
     */
    public function get_line_3()
    {
    }
    /**
     * Gets the locality or city.
     *
     * @since 5.3.0
     *
     * @return string
     */
    public function get_locality()
    {
    }
    /**
     * Gets the region or state.
     *
     * @since 5.3.0
     *
     * @return string
     */
    public function get_region()
    {
    }
    /**
     * Gets the country.
     *
     * @since 5.3.0
     *
     * @return string
     */
    public function get_country()
    {
    }
    /**
     * Gets the postcode.
     *
     * @since 5.3.0
     *
     * @return string
     */
    public function get_postcode()
    {
    }
    /**
     * Gets the hash representation of this address.
     *
     * @see Address::get_hash_data()
     *
     * @since 5.3.0
     *
     * @return string
     */
    public function get_hash()
    {
    }
    /**
     * Gets the data used to generate a hash for the address.
     *
     * @since 5.3.0
     *
     * @return string[]
     */
    protected function get_hash_data()
    {
    }
    /** Setter methods ************************************************************************************************/
    /**
     * Sets line 1 of the street address.
     *
     * @since 5.3.0
     *
     * @param string $value line 1 value
     */
    public function set_line_1($value)
    {
    }
    /**
     * Sets line 2 of the street address.
     *
     * @since 5.3.0
     *
     * @param string $value line 2 value
     */
    public function set_line_2($value)
    {
    }
    /**
     * Gets line 3 of the street address.
     *
     * @since 5.3.0
     *
     * @param string $value line 3 value
     */
    public function set_line_3($value)
    {
    }
    /**
     * Gets the locality or city.
     *
     * @since 5.3.0
     *
     * @param string $value locality value
     */
    public function set_locality($value)
    {
    }
    /**
     * Gets the region or state.
     *
     * @since 5.3.0
     *
     * @param string $value region value
     */
    public function set_region($value)
    {
    }
    /**
     * Sets the country.
     *
     * @since 5.3.0
     *
     * @param string $value country value
     */
    public function set_country($value)
    {
    }
    /**
     * Sets the postcode.
     *
     * @since 5.3.0
     *
     * @param string $value postcode value
     */
    public function set_postcode($value)
    {
    }
}
/**
 * The customer address data class.
 *
 * Adds customer-specific data to a base address, as used for a billing or shipping address that can include first and last name.
 *
 * @since 5.3.0
 */
#[\AllowDynamicProperties]
class Customer_Address extends \SkyVerge\WooCommerce\PluginFramework\v6_0_1\Addresses\Address
{
    /** @var string customer first name */
    protected $first_name = '';
    /** @var string customer last name */
    protected $last_name = '';
    /** Getter Methods ************************************************************************************************/
    /**
     * Gets the customer first name.
     *
     * @since 5.3.0
     *
     * @return string
     */
    public function get_first_name()
    {
    }
    /**
     * Gets the customer first name.
     *
     * @since 5.3.0
     *
     * @return string
     */
    public function get_last_name()
    {
    }
    /**
     * Gets the data used to generate a hash for the address.
     *
     * @see Address::get_hash_data()
     *
     * @since 5.3.0
     *
     * @return string[]
     */
    protected function get_hash_data()
    {
    }
    /** Setter Methods ************************************************************************************************/
    /**
     * Sets the customer first name.
     *
     * @since 5.3.0
     *
     * @param string $value first name value
     */
    public function set_first_name($value)
    {
    }
    /**
     * Sets the customer last name.
     *
     * @since 5.3.0
     *
     * @param string $value first name value
     */
    public function set_last_name($value)
    {
    }
    /**
     * Sets the full address based on a WooCommerce order.
     *
     * @since 5.3.0
     *
     * @param \WC_Order $order WooCommerce order object
     * @param string $type address type, like billing or shipping
     */
    public function set_from_order(\WC_Order $order, $type = 'billing')
    {
    }
}
namespace SkyVerge\WooCommerce\PluginFramework\v6_0_1\Blocks\Traits;

/**
 * A trait for block integrations.
 *
 * Since WooCommerce does not provide a base class for non-gateways, but any integration needs to implement {@see IntegrationInterface},
 * we can reuse this trait in both {@see Block_Integration} and {@see Gateway_Checkout_Block_Integration} base classes.
 *
 * @since 5.12.0
 *
 * @property \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Plugin|\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Plugin $plugin
 * @property \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway|null $gateway only in payment gateway integrations
 * @property string $block_name the name of the block the integration is for, e.g. 'cart' or 'checkout
 */
trait Block_Integration_Trait
{
    /** @var string[] main script dependencies */
    protected array $script_dependencies = ['wc-blocks-registry', 'wc-settings', 'wp-element', 'wp-components', 'wp-html-entities', 'wp-i18n'];
    /** @var string[] main stylesheet dependencies */
    protected array $stylesheet_dependencies = [];
    /**
     * Gets the integration name.
     *
     * Implements {@see IntegrationInterface::get_name()}.
     *
     * @since 5.12.0
     *
     * @return string
     */
    public function get_name(): string
    {
    }
    /**
     * Gets the integration ID.
     *
     * @since 5.12.0
     *
     * @return string
     */
    protected function get_id(): string
    {
    }
    /**
     * Gets the integration ID (dasherized).
     *
     * @since 5.12.0
     *
     * @return string
     */
    protected function get_id_dasherized(): string
    {
    }
    /**
     * Initializes the block integration.
     *
     * Individual implementations may need to override this if they need to handle scripts and styles differently.
     *
     * @since 5.12.0
     *
     * @return void
     */
    public function initialize(): void
    {
    }
    /**
     * Gets the main script handle.
     *
     * The default is `wc-{plugin_id}-{block_name}-block`.
     * If a gateway plugin includes different gateways supporting a block, it is assumed they will share the same script,
     * used for a single script and stylesheet. If this is not the case, and a specific gateway needs to use a different script,
     * then that gateway should override this method or filter out the handle.
     *
     * @since 5.12.0
     *
     * @return string
     */
    protected function get_main_script_handle(): string
    {
    }
    /**
     * Gets the main script URL.
     *
     * The default is `{plugin_root}/assets/js/blocks/wc-{plugin_id}-{block_name}-block.js`.
     * This may introduce the same script name if a gateway plugin includes multiple gateways.
     * However, it is assumed that gateways supporting a block will use a single script for all the included gateways.
     * If this is not the case, then any outlier gateway should override this method or filter out the URL.
     *
     * @since 5.12.0
     *
     * @return string
     */
    protected function get_main_script_url(): string
    {
    }
    /**
     * Gets the main script stylesheet URL.
     *
     * The default is `{plugin_root}/assets/css/blocks/wc-{plugin_id}-{block_name}-block.css`.
     * This may introduce the same stylesheet name if a gateway plugin includes multiple gateways.
     * However, it is assumed that gateways supporting a block will use a single stylesheet for all the included gateways.
     * If this is not the case, then any outlier gateway should override this method or filter out the URL.
     *
     * @since 5.12.0
     *
     * @return string
     */
    protected function get_main_script_stylesheet_url(): string
    {
    }
    /**
     * Adds a main script dependency.
     *
     * @since 5.12.0
     *
     * @param string|string[] $dependency one or more dependencies defined by their identifiers
     * @return void
     */
    protected function add_main_script_dependency($dependency): void
    {
    }
    /**
     * Gets the main script dependencies.
     *
     * @since 5.12.0
     *
     * @return string[]
     */
    protected function get_main_script_dependencies(): array
    {
    }
    /**
     * Adds a main stylesheet dependency.
     *
     * @since 5.12.0
     *
     * @param string|string[] $dependency one or more dependencies defined by their identifiers
     * @return void
     */
    protected function add_main_script_stylesheet_dependency($dependency): void
    {
    }
    /**
     * Gets the main script stylesheet dependencies.
     *
     * @since 5.12.0
     *
     * @return string[]
     */
    protected function get_main_script_stylesheet_dependencies(): array
    {
    }
    /**
     * Gets an array of script handles to enqueue in the frontend context.
     *
     * @since 5.12.0
     *
     * @return string[]
     */
    public function get_script_handles()
    {
    }
    /**
     * Gets an array of script handles to enqueue in the editor context.
     *
     * @since 5.12.0
     *
     * @return string[]
     */
    public function get_editor_script_handles(): array
    {
    }
    /**
     * Gets array of key-value pairs of data made available to the block on the client side.
     *
     * @since 5.12.0
     *
     * @return array<string, mixed> (default empty)
     */
    public function get_script_data(): array
    {
    }
    /**
     * Adds AJAX hooks for logging.
     *
     * Classes implementing this trait should call this method to enable the hooks therein.
     *
     * @since 5.12.0
     *
     * @return void
     */
    protected function add_ajax_logging(): void
    {
    }
    /**
     * Logs a message to the plugin or gateway log via AJAX.
     *
     * @since 5.12.0
     *
     * @NOTE Classes implementing this trait should ensure to add the following actions to attach this callback to:
     *
     * `add_action( 'wp_ajax_wc_' . $this->get_name() . '_' . $this->block_name . '_block_log', [ $this, 'ajax_log' ] );`
     * `add_action( 'wp_ajax_nopriv_wc_' . $this->get_name() . '_' . $this->block_name . '_block_log', [ $this, 'ajax_log' ] );`
     *
     * Requests should  include a `nonce` generated by:
     *
     * `wp_create_nonce( 'wc_' . $this->get_name() . '_' . $this->block_name . '_block_log' );`
     *
     * @return void
     */
    public function ajax_log(): void
    {
    }
    /**
     * Logs an AJAX message.
     *
     * @since 5.12.0
     *
     * @param string $message
     * @param string $type
     * @return void
     */
    protected function log_ajax_message(string $message, string $type): void
    {
    }
    /**
     * Logs AJAX API request/response data.
     *
     * @since 5.12.0
     *
     * @param array<string, mixed>|\stdClass $request
     * @param array<string, mixed>|\stdClass $response
     * @param string $type
     * @return void
     */
    protected function log_api_request($request, $response, string $type): void
    {
    }
    /**
     * Determines if AJAX logging is enabled.
     *
     * @since 5.12.0
     *
     * @return bool
     */
    protected function is_ajax_logging_enabled(): bool
    {
    }
    /**
     * Verifies AJAX logging requests.
     *
     * @since 5.12.0
     *
     * @return array{
     *     message: scalar|array|null,
     *     type: string,
     *     request: array<string, array<mixed>|scalar>,
     *     response: array<string, array<mixed>|scalar>,
     * }
     * @throws \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Plugin_Exception
     */
    protected function parse_ajax_log_request(): array
    {
    }
    /**
     * Gets the data to log via AJAX.
     *
     * This is intended as a filter callback that classes implementing this method may override if they need to adjust any data before logging.
     *
     * @see Block_Integration::add_hooks()
     * @see Credit_Card_Checkout_Block_Integration::add_hooks()
     *
     * @since 5.12.0
     *
     * @param array<string, mixed>|mixed $log_data
     * @param array<string, mixed> $ajax_request
     * @return array<string, mixed>|mixed
     */
    public function get_ajax_log_data($log_data, array $ajax_request)
    {
    }
}
namespace SkyVerge\WooCommerce\PluginFramework\v6_0_1\Blocks;

/**
 * Base class for handling support for WooCommerce blocks, like Cart or Checkout blocks.
 *
 * This is the base integration class that can be used by non-gateway plugins.
 * @see Blocks_Handler::handle_blocks_integration()
 * For gateways, {@see Gateway_Checkout_Block_Integration}.
 *
 * @since 5.12.0
 */
#[\AllowDynamicProperties]
abstract class Block_Integration implements \Automattic\WooCommerce\Blocks\Integrations\IntegrationInterface
{
    use \SkyVerge\WooCommerce\PluginFramework\v6_0_1\Blocks\Traits\Block_Integration_Trait;
    /** @var \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Plugin the current plugin */
    protected \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Plugin $plugin;
    /** @var string implementations should specify the block supported (e.g. 'cart' or 'checkout') */
    protected string $block_name;
    /**
     * Block integration constructor.
     *
     * @since 5.12.0
     *
     * @param \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Plugin $plugin
     */
    public function __construct(\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Plugin $plugin)
    {
    }
    /**
     * Adds hooks.
     *
     * @since 5.12.0
     *
     * @return void
     */
    protected function add_hooks(): void
    {
    }
}
/**
 * WooCommerce Blocks handler.
 *
 * This handler is responsible for loading and registering WooCommerce Block integration handlers in supported plugins.
 *
 * Individual plugins should override this class to load their own block integrations classes.
 *
 * Gateways can straight out use {@see Gateway_Blocks_Handler} instead.
 *
 * @since 5.11.11
 */
#[\AllowDynamicProperties]
class Blocks_Handler
{
    /** @var \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Plugin|\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway current plugin instance */
    protected \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Plugin $plugin;
    /** @var \Automattic\WooCommerce\Blocks\Integrations\IntegrationInterface|null */
    protected ?\Automattic\WooCommerce\Blocks\Integrations\IntegrationInterface $cart_block_integration = null;
    /** @var \Automattic\WooCommerce\Blocks\Integrations\IntegrationInterface|null */
    protected ?\Automattic\WooCommerce\Blocks\Integrations\IntegrationInterface $checkout_block_integration = null;
    /**
     * Blocks handler constructor.
     *
     * Individual plugins should initialize their block integrations classes by overriding this constructor and calling the parent.
     *
     * @since 5.11.11
     *
     * @param \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Plugin $plugin
     */
    public function __construct(\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Plugin $plugin)
    {
    }
    /**
     * Determines if the plugin is compatible with the WooCommerce Cart block.
     *
     * @since 5.11.11
     *
     * @return bool
     */
    public function is_cart_block_compatible(): bool
    {
    }
    /**
     * Determines if the plugin is compatible with the WooCommerce Checkout block.
     *
     * @since 5.11.11
     *
     * @return bool
     */
    public function is_checkout_block_compatible(): bool
    {
    }
    /**
     * Gets the cart block integration instance.
     *
     * @since 5.12.0
     *
     * @return Block_Integration|null
     */
    public function get_cart_block_integration_instance(): ?\Automattic\WooCommerce\Blocks\Integrations\IntegrationInterface
    {
    }
    /**
     * Gets the checkout block integration instance.
     *
     * @since 5.12.0
     *
     * @return Block_Integration|null
     */
    public function get_checkout_block_integration_instance(): ?\Automattic\WooCommerce\Blocks\Integrations\IntegrationInterface
    {
    }
    /**
     * Handles WooCommerce Blocks integrations in compatible plugins.
     *
     * @see Gateway_Blocks_Handler::handle_blocks_integration() for gateways
     *
     * @internal
     *
     * @since 5.12.0
     *
     * @return void
     */
    public function handle_blocks_integration(): void
    {
    }
    /**
     * Determines if the checkout page is using the checkout block.
     *
     * @since 5.11.11
     *
     * @return bool false when using the legacy checkout shortcode
     */
    public static function is_checkout_block_in_use(): bool
    {
    }
    /**
     * Determines if a page contains a checkout shortcode.
     *
     * @since 5.12.0
     *
     * @param int|string|\WP_Post $page
     * @return bool
     */
    public static function page_contains_checkout_shortcode($page): bool
    {
    }
    /**
     * Determines if the cart page is using the cart block.
     *
     * @since 5.11.11
     *
     * @return bool false if using the legacy cart shortcode
     */
    public static function is_cart_block_in_use(): bool
    {
    }
    /**
     * Determines if a page contains a cart shortcode.
     *
     * @since 5.12.0
     *
     * @param int|string|\WP_Post $page
     * @return bool
     */
    public static function page_contains_cart_shortcode($page): bool
    {
    }
    /**
     * Determines if a page contains a cart or checkout shortcode.
     *
     * @since 5.12.0
     *
     * @param string $shortcode
     * @param int|string|\WP_Post $page
     * @return bool
     */
    protected static function page_contains_shortcode(string $shortcode, $page): bool
    {
    }
    /**
     * Adds admin notices pertaining the blocks integration.
     *
     * @since 5.11.11
     *
     * @return void
     */
    public function add_admin_notices(): void
    {
    }
}
namespace SkyVerge\WooCommerce\PluginFramework\v6_0_1\Emails\Traits;

/**
 * Adds improved support for the experimental "Email Improvements" feature, by populating any missing properties
 * with default/placeholder values.
 *
 * {@see \Automattic\WooCommerce\Internal\Admin\EmailPreview\EmailPreview::set_email_type()}
 */
trait HasEmailPreviewValuesTrait
{
    /**
     * Sets "Preview" values on the email object.
     */
    abstract public function setPreviewValues(): void;
    /**
     * Gets a random, real product from the site.
     *
     * For use in rendering examples for email templates.
     * @return \WC_Product|null
     */
    protected function getRandomProduct(): ?\WC_Product
    {
    }
    /**
     * Gets a dummy (fake) product.
     *
     * For use in rendering examples for email templates.
     * @return \WC_Product
     */
    protected function getDummyProduct(): \WC_Product
    {
    }
}
namespace SkyVerge\WooCommerce\PluginFramework\v6_0_1\Enums\Traits;

/**
 * Enables enum-like syntax pre PHP 8.1.
 *
 * @see https://www.php.net/manual/en/language.enumerations.backed.php
 *
 * @since 5.13.0
 */
trait EnumTrait
{
    /** @var array<string, static::*>|null */
    protected static ?array $enumReflectionCache = null;
    /**
     * Maps a scalar to an enum value or null.
     *
     * @param int|string $value The scalar value to map to an enum case.
     *
     * @since 5.13.0
     * @return static::*|null
     */
    public static function tryFrom($value)
    {
    }
    /**
     * Fetches the values for this enum.
     *
     * @since 5.13.0
     * @return array<static::*> An array of enum values.
     */
    public static function values(): array
    {
    }
    /**
     * Returns an associative array where the enum names are the keys and the enum values are the values.
     *
     * @since 5.13.0
     * @return array<string, static::*>
     */
    public static function cases(): array
    {
    }
}
namespace SkyVerge\WooCommerce\PluginFramework\v6_0_1\Enums;

/**
 * @since 5.13.0
 */
class PaymentFormContext
{
    use \SkyVerge\WooCommerce\PluginFramework\v6_0_1\Enums\Traits\EnumTrait;
    /** @var string primary checkout page */
    public const Checkout = 'checkout';
    /** @var string separate payment page after the normal checkout flow */
    public const CheckoutPayPage = 'checkout_pay_page';
    /** @var string payment page usually accessed via a manual order ("Customer payment page" link in admin UI) */
    public const CustomerPayPage = 'customer_pay_page';
}
namespace SkyVerge\WooCommerce\PluginFramework\v6_0_1\Handlers;

/**
 * SkyVerge Country Helper Class
 *
 * The purpose of this class is to centralize country-related utility
 * functions that are commonly used in SkyVerge plugins
 *
 * @since 5.4.3
 */
#[\AllowDynamicProperties]
class Country_Helper
{
    /** @var array ISO 3166-alpha2 => ISO 3166-alpha3  */
    public static array $alpha3 = ['AF' => 'AFG', 'AL' => 'ALB', 'DZ' => 'DZA', 'AD' => 'AND', 'AO' => 'AGO', 'AG' => 'ATG', 'AR' => 'ARG', 'AM' => 'ARM', 'AU' => 'AUS', 'AT' => 'AUT', 'AZ' => 'AZE', 'BS' => 'BHS', 'BH' => 'BHR', 'BD' => 'BGD', 'BB' => 'BRB', 'BY' => 'BLR', 'BE' => 'BEL', 'BZ' => 'BLZ', 'BJ' => 'BEN', 'BT' => 'BTN', 'BO' => 'BOL', 'BA' => 'BIH', 'BW' => 'BWA', 'BR' => 'BRA', 'BN' => 'BRN', 'BG' => 'BGR', 'BF' => 'BFA', 'BI' => 'BDI', 'KH' => 'KHM', 'CM' => 'CMR', 'CA' => 'CAN', 'CV' => 'CPV', 'CF' => 'CAF', 'TD' => 'TCD', 'CL' => 'CHL', 'CN' => 'CHN', 'CO' => 'COL', 'KM' => 'COM', 'CD' => 'COD', 'CG' => 'COG', 'CR' => 'CRI', 'CI' => 'CIV', 'HR' => 'HRV', 'CU' => 'CUB', 'CY' => 'CYP', 'CZ' => 'CZE', 'DK' => 'DNK', 'DJ' => 'DJI', 'DM' => 'DMA', 'DO' => 'DOM', 'EC' => 'ECU', 'EG' => 'EGY', 'SV' => 'SLV', 'GQ' => 'GNQ', 'ER' => 'ERI', 'EE' => 'EST', 'ET' => 'ETH', 'FJ' => 'FJI', 'FI' => 'FIN', 'FR' => 'FRA', 'GA' => 'GAB', 'GM' => 'GMB', 'GE' => 'GEO', 'DE' => 'DEU', 'GH' => 'GHA', 'GR' => 'GRC', 'GD' => 'GRD', 'GT' => 'GTM', 'GN' => 'GIN', 'GW' => 'GNB', 'GY' => 'GUY', 'HT' => 'HTI', 'HN' => 'HND', 'HU' => 'HUN', 'IS' => 'ISL', 'IN' => 'IND', 'ID' => 'IDN', 'IR' => 'IRN', 'IQ' => 'IRQ', 'IE' => 'IRL', 'IL' => 'ISR', 'IT' => 'ITA', 'JM' => 'JAM', 'JP' => 'JPN', 'JO' => 'JOR', 'KZ' => 'KAZ', 'KE' => 'KEN', 'KI' => 'KIR', 'KP' => 'PRK', 'KR' => 'KOR', 'KW' => 'KWT', 'KG' => 'KGZ', 'LA' => 'LAO', 'LV' => 'LVA', 'LB' => 'LBN', 'LS' => 'LSO', 'LR' => 'LBR', 'LY' => 'LBY', 'LI' => 'LIE', 'LT' => 'LTU', 'LU' => 'LUX', 'MK' => 'MKD', 'MG' => 'MDG', 'MW' => 'MWI', 'MY' => 'MYS', 'MV' => 'MDV', 'ML' => 'MLI', 'MT' => 'MLT', 'MH' => 'MHL', 'MR' => 'MRT', 'MU' => 'MUS', 'MX' => 'MEX', 'FM' => 'FSM', 'MD' => 'MDA', 'MC' => 'MCO', 'MN' => 'MNG', 'ME' => 'MNE', 'MA' => 'MAR', 'MZ' => 'MOZ', 'MM' => 'MMR', 'NA' => 'NAM', 'NR' => 'NRU', 'NP' => 'NPL', 'NL' => 'NLD', 'NZ' => 'NZL', 'NI' => 'NIC', 'NE' => 'NER', 'NG' => 'NGA', 'NO' => 'NOR', 'OM' => 'OMN', 'PK' => 'PAK', 'PW' => 'PLW', 'PA' => 'PAN', 'PG' => 'PNG', 'PY' => 'PRY', 'PE' => 'PER', 'PH' => 'PHL', 'PL' => 'POL', 'PT' => 'PRT', 'QA' => 'QAT', 'RO' => 'ROU', 'RU' => 'RUS', 'RW' => 'RWA', 'KN' => 'KNA', 'LC' => 'LCA', 'VC' => 'VCT', 'WS' => 'WSM', 'SM' => 'SMR', 'ST' => 'STP', 'SA' => 'SAU', 'SN' => 'SEN', 'RS' => 'SRB', 'SC' => 'SYC', 'SL' => 'SLE', 'SG' => 'SGP', 'SK' => 'SVK', 'SI' => 'SVN', 'SB' => 'SLB', 'SO' => 'SOM', 'ZA' => 'ZAF', 'ES' => 'ESP', 'LK' => 'LKA', 'SD' => 'SDN', 'SR' => 'SUR', 'SZ' => 'SWZ', 'SE' => 'SWE', 'CH' => 'CHE', 'SY' => 'SYR', 'TJ' => 'TJK', 'TZ' => 'TZA', 'TH' => 'THA', 'TL' => 'TLS', 'TG' => 'TGO', 'TO' => 'TON', 'TT' => 'TTO', 'TN' => 'TUN', 'TR' => 'TUR', 'TM' => 'TKM', 'TV' => 'TUV', 'UG' => 'UGA', 'UA' => 'UKR', 'AE' => 'ARE', 'GB' => 'GBR', 'US' => 'USA', 'UY' => 'URY', 'UZ' => 'UZB', 'VU' => 'VUT', 'VA' => 'VAT', 'VE' => 'VEN', 'VN' => 'VNM', 'YE' => 'YEM', 'ZM' => 'ZMB', 'ZW' => 'ZWE', 'TW' => 'TWN', 'CX' => 'CXR', 'CC' => 'CCK', 'HM' => 'HMD', 'NF' => 'NFK', 'NC' => 'NCL', 'PF' => 'PYF', 'YT' => 'MYT', 'GP' => 'GLP', 'PM' => 'SPM', 'WF' => 'WLF', 'TF' => 'ATF', 'BV' => 'BVT', 'CK' => 'COK', 'NU' => 'NIU', 'TK' => 'TKL', 'GG' => 'GGY', 'IM' => 'IMN', 'JE' => 'JEY', 'AI' => 'AIA', 'BM' => 'BMU', 'IO' => 'IOT', 'VG' => 'VGB', 'KY' => 'CYM', 'FK' => 'FLK', 'GI' => 'GIB', 'MS' => 'MSR', 'PN' => 'PCN', 'SH' => 'SHN', 'GS' => 'SGS', 'TC' => 'TCA', 'MP' => 'MNP', 'PR' => 'PRI', 'AS' => 'ASM', 'UM' => 'UMI', 'GU' => 'GUM', 'VI' => 'VIR', 'HK' => 'HKG', 'MO' => 'MAC', 'FO' => 'FRO', 'GL' => 'GRL', 'GF' => 'GUF', 'MQ' => 'MTQ', 'RE' => 'REU', 'AX' => 'ALA', 'AW' => 'ABW', 'AN' => 'ANT', 'SJ' => 'SJM', 'AC' => 'ASC', 'TA' => 'TAA', 'AQ' => 'ATA', 'CW' => 'CUW'];
    /** @var array ISO 3166-alpha2 => ISO 3166-numeric  */
    public static array $numeric = ['AF' => '004', 'AX' => '248', 'AL' => '008', 'DZ' => '012', 'AS' => '016', 'AD' => '020', 'AO' => '024', 'AI' => '660', 'AQ' => '010', 'AG' => '028', 'AR' => '032', 'AM' => '051', 'AW' => '533', 'AU' => '036', 'AT' => '040', 'AZ' => '031', 'BS' => '044', 'BH' => '048', 'BD' => '050', 'BB' => '052', 'BY' => '112', 'BE' => '056', 'BZ' => '084', 'BJ' => '204', 'BM' => '060', 'BT' => '064', 'BO' => '068', 'BQ' => '535', 'BA' => '070', 'BW' => '072', 'BV' => '074', 'BR' => '076', 'IO' => '086', 'BN' => '096', 'BG' => '100', 'BF' => '854', 'BI' => '108', 'KH' => '116', 'CM' => '120', 'CA' => '124', 'CV' => '132', 'KY' => '136', 'CF' => '140', 'TD' => '148', 'CL' => '152', 'CN' => '156', 'CX' => '162', 'CC' => '166', 'CO' => '170', 'KM' => '174', 'CG' => '178', 'CD' => '180', 'CK' => '184', 'CR' => '188', 'CI' => '384', 'HR' => '191', 'CU' => '192', 'CW' => '531', 'CY' => '196', 'CZ' => '203', 'DK' => '208', 'DJ' => '262', 'DM' => '212', 'DO' => '214', 'EC' => '218', 'EG' => '818', 'SV' => '222', 'GQ' => '226', 'ER' => '232', 'EE' => '233', 'ET' => '231', 'FK' => '238', 'FO' => '234', 'FJ' => '242', 'FI' => '246', 'FR' => '250', 'GF' => '254', 'PF' => '258', 'TF' => '260', 'GA' => '266', 'GM' => '270', 'GE' => '268', 'DE' => '276', 'GH' => '288', 'GI' => '292', 'GR' => '300', 'GL' => '304', 'GD' => '308', 'GP' => '312', 'GU' => '316', 'GT' => '320', 'GG' => '831', 'GN' => '324', 'GW' => '624', 'GY' => '328', 'HT' => '332', 'HM' => '334', 'VA' => '336', 'HN' => '340', 'HK' => '344', 'HU' => '348', 'IS' => '352', 'IN' => '356', 'ID' => '360', 'IR' => '364', 'IQ' => '368', 'IE' => '372', 'IM' => '833', 'IL' => '376', 'IT' => '380', 'JM' => '388', 'JP' => '392', 'JE' => '832', 'JO' => '400', 'KZ' => '398', 'KE' => '404', 'KI' => '296', 'KP' => '408', 'KR' => '410', 'KW' => '414', 'KG' => '417', 'LA' => '418', 'LV' => '428', 'LB' => '422', 'LS' => '426', 'LR' => '430', 'LY' => '434', 'LI' => '438', 'LT' => '440', 'LU' => '442', 'MO' => '446', 'MK' => '807', 'MG' => '450', 'MW' => '454', 'MY' => '458', 'MV' => '462', 'ML' => '466', 'MT' => '470', 'MH' => '584', 'MQ' => '474', 'MR' => '478', 'MU' => '480', 'YT' => '175', 'MX' => '484', 'FM' => '583', 'MD' => '498', 'MC' => '492', 'MN' => '496', 'ME' => '499', 'MS' => '500', 'MA' => '504', 'MZ' => '508', 'MM' => '104', 'NA' => '516', 'NR' => '520', 'NP' => '524', 'NL' => '528', 'NC' => '540', 'NZ' => '554', 'NI' => '558', 'NE' => '562', 'NG' => '566', 'NU' => '570', 'NF' => '574', 'MP' => '580', 'NO' => '578', 'OM' => '512', 'PK' => '586', 'PW' => '585', 'PS' => '275', 'PA' => '591', 'PG' => '598', 'PY' => '600', 'PE' => '604', 'PH' => '608', 'PN' => '612', 'PL' => '616', 'PT' => '620', 'PR' => '630', 'QA' => '634', 'RE' => '638', 'RO' => '642', 'RU' => '643', 'RW' => '646', 'BL' => '652', 'SH' => '654', 'KN' => '659', 'LC' => '662', 'MF' => '663', 'PM' => '666', 'VC' => '670', 'WS' => '882', 'SM' => '674', 'ST' => '678', 'SA' => '682', 'SN' => '686', 'RS' => '688', 'SC' => '690', 'SL' => '694', 'SG' => '702', 'SX' => '534', 'SK' => '703', 'SI' => '705', 'SB' => '090', 'SO' => '706', 'ZA' => '710', 'GS' => '239', 'SS' => '728', 'ES' => '724', 'LK' => '144', 'SD' => '729', 'SR' => '740', 'SJ' => '744', 'SZ' => '748', 'SE' => '752', 'CH' => '756', 'SY' => '760', 'TW' => '158', 'TJ' => '762', 'TZ' => '834', 'TH' => '764', 'TL' => '626', 'TG' => '768', 'TK' => '772', 'TO' => '776', 'TT' => '780', 'TN' => '788', 'TR' => '792', 'TM' => '795', 'TC' => '796', 'TV' => '798', 'UG' => '800', 'UA' => '804', 'AE' => '784', 'GB' => '826', 'US' => '840', 'UM' => '581', 'UY' => '858', 'UZ' => '860', 'VU' => '548', 'VE' => '862', 'VN' => '704', 'VG' => '092', 'VI' => '850', 'WF' => '876', 'EH' => '732', 'YE' => '887', 'ZM' => '894', 'ZW' => '716'];
    /** @var array ISO 3166-alpha2 => phone calling code(s) */
    public static array $calling_codes = ['BD' => '+880', 'BE' => '+32', 'BF' => '+226', 'BG' => '+359', 'BA' => '+387', 'BB' => '+1246', 'WF' => '+681', 'BL' => '+590', 'BM' => '+1441', 'BN' => '+673', 'BO' => '+591', 'BH' => '+973', 'BI' => '+257', 'BJ' => '+229', 'BT' => '+975', 'JM' => '+1876', 'BV' => '', 'BW' => '+267', 'WS' => '+685', 'BQ' => '+599', 'BR' => '+55', 'BS' => '+1242', 'JE' => '+441534', 'BY' => '+375', 'BZ' => '+501', 'RU' => '+7', 'RW' => '+250', 'RS' => '+381', 'TL' => '+670', 'RE' => '+262', 'TM' => '+993', 'TJ' => '+992', 'RO' => '+40', 'TK' => '+690', 'GW' => '+245', 'GU' => '+1671', 'GT' => '+502', 'GS' => '', 'GR' => '+30', 'GQ' => '+240', 'GP' => '+590', 'JP' => '+81', 'GY' => '+592', 'GG' => '+441481', 'GF' => '+594', 'GE' => '+995', 'GD' => '+1473', 'GB' => '+44', 'GA' => '+241', 'SV' => '+503', 'GN' => '+224', 'GM' => '+220', 'GL' => '+299', 'GI' => '+350', 'GH' => '+233', 'OM' => '+968', 'TN' => '+216', 'JO' => '+962', 'HR' => '+385', 'HT' => '+509', 'HU' => '+36', 'HK' => '+852', 'HN' => '+504', 'HM' => '', 'VE' => '+58', 'PR' => ['+1787', '+1939'], 'PS' => '+970', 'PW' => '+680', 'PT' => '+351', 'SJ' => '+47', 'PY' => '+595', 'IQ' => '+964', 'PA' => '+507', 'PF' => '+689', 'PG' => '+675', 'PE' => '+51', 'PK' => '+92', 'PH' => '+63', 'PN' => '+870', 'PL' => '+48', 'PM' => '+508', 'ZM' => '+260', 'EH' => '+212', 'EE' => '+372', 'EG' => '+20', 'ZA' => '+27', 'EC' => '+593', 'IT' => '+39', 'VN' => '+84', 'SB' => '+677', 'ET' => '+251', 'SO' => '+252', 'ZW' => '+263', 'SA' => '+966', 'ES' => '+34', 'ER' => '+291', 'ME' => '+382', 'MD' => '+373', 'MG' => '+261', 'MF' => '+590', 'MA' => '+212', 'MC' => '+377', 'UZ' => '+998', 'MM' => '+95', 'ML' => '+223', 'MO' => '+853', 'MN' => '+976', 'MH' => '+692', 'MK' => '+389', 'MU' => '+230', 'MT' => '+356', 'MW' => '+265', 'MV' => '+960', 'MQ' => '+596', 'MP' => '+1670', 'MS' => '+1664', 'MR' => '+222', 'IM' => '+441624', 'UG' => '+256', 'TZ' => '+255', 'MY' => '+60', 'MX' => '+52', 'IL' => '+972', 'FR' => '+33', 'IO' => '+246', 'SH' => '+290', 'FI' => '+358', 'FJ' => '+679', 'FK' => '+500', 'FM' => '+691', 'FO' => '+298', 'NI' => '+505', 'NL' => '+31', 'NO' => '+47', 'NA' => '+264', 'VU' => '+678', 'NC' => '+687', 'NE' => '+227', 'NF' => '+672', 'NG' => '+234', 'NZ' => '+64', 'NP' => '+977', 'NR' => '+674', 'NU' => '+683', 'CK' => '+682', 'XK' => '', 'CI' => '+225', 'CH' => '+41', 'CO' => '+57', 'CN' => '+86', 'CM' => '+237', 'CL' => '+56', 'CC' => '+61', 'CA' => '+1', 'CG' => '+242', 'CF' => '+236', 'CD' => '+243', 'CZ' => '+420', 'CY' => '+357', 'CX' => '+61', 'CR' => '+506', 'CW' => '+599', 'CV' => '+238', 'CU' => '+53', 'SZ' => '+268', 'SY' => '+963', 'SX' => '+599', 'KG' => '+996', 'KE' => '+254', 'SS' => '+211', 'SR' => '+597', 'KI' => '+686', 'KH' => '+855', 'KN' => '+1869', 'KM' => '+269', 'ST' => '+239', 'SK' => '+421', 'KR' => '+82', 'SI' => '+386', 'KP' => '+850', 'KW' => '+965', 'SN' => '+221', 'SM' => '+378', 'SL' => '+232', 'SC' => '+248', 'KZ' => '+7', 'KY' => '+1345', 'SG' => '+65', 'SE' => '+46', 'SD' => '+249', 'DO' => ['+1809', '+1829', '+1849'], 'DM' => '+1767', 'DJ' => '+253', 'DK' => '+45', 'VG' => '+1284', 'DE' => '+49', 'YE' => '+967', 'DZ' => '+213', 'US' => '+1', 'UY' => '+598', 'YT' => '+262', 'UM' => '+1', 'LB' => '+961', 'LC' => '+1758', 'LA' => '+856', 'TV' => '+688', 'TW' => '+886', 'TT' => '+1868', 'TR' => '+90', 'LK' => '+94', 'LI' => '+423', 'LV' => '+371', 'TO' => '+676', 'LT' => '+370', 'LU' => '+352', 'LR' => '+231', 'LS' => '+266', 'TH' => '+66', 'TF' => '', 'TG' => '+228', 'TD' => '+235', 'TC' => '+1649', 'LY' => '+218', 'VA' => '+379', 'VC' => '+1784', 'AE' => '+971', 'AD' => '+376', 'AG' => '+1268', 'AF' => '+93', 'AI' => '+1264', 'VI' => '+1340', 'IS' => '+354', 'IR' => '+98', 'AM' => '+374', 'AL' => '+355', 'AO' => '+244', 'AQ' => '', 'AS' => '+1684', 'AR' => '+54', 'AU' => '+61', 'AT' => '+43', 'AW' => '+297', 'IN' => '+91', 'AX' => '+35818', 'AZ' => '+994', 'IE' => '+353', 'ID' => '+62', 'UA' => '+380', 'QA' => '+974', 'MZ' => '+258'];
    /** @var array flipped calling codes */
    protected static array $flipped_calling_codes;
    /**
     * Convert a 2-character country code into its 3-character equivalent, or
     * vice-versa, e.g.
     *
     * 1) given USA, returns US
     * 2) given US, returns USA
     *
     * @since 5.4.3
     *
     * @param string $code ISO-3166-alpha-2 or ISO-3166-alpha-3 country code
     * @return string country code
     */
    public static function convert_alpha_country_code($code)
    {
    }
    /**
     * Converts an ISO 3166-alpha2 country code to an ISO 3166-alpha3 country code.
     *
     * @since 5.4.3
     *
     * @param string $alpha2_code ISO 3166-alpha2 country code
     * @return string ISO 3166-alpha3 country code
     */
    public static function alpha2_to_alpha3($alpha2_code)
    {
    }
    /**
     * Converts an ISO 3166-alpha2 country code to an ISO 3166-numeric country code.
     *
     * @since 5.4.3
     *
     * @param string $alpha2_code ISO 3166-alpha2 country code
     * @return string ISO 3166-numeric country code
     */
    public static function alpha2_to_numeric($alpha2_code)
    {
    }
    /**
     * Converts an ISO 3166-alpha2 country code to a calling code.
     *
     * This conversion is available in WC 3.6+ so we'll call out to that when available.
     *
     * @since 5.4.3
     *
     * @param string $alpha2_code ISO 3166-alpha2 country code
     * @return string calling code
     */
    public static function alpha2_to_calling_code($alpha2_code)
    {
    }
    /**
     * Converts an ISO 3166-alpha3 country code to an ISO 3166-alpha2 country code.
     *
     * @since 5.4.3
     *
     * @param string $alpha3_code ISO 3166-alpha3 country code
     * @return string ISO 3166-alpha2 country code
     */
    public static function alpha3_to_alpha2($alpha3_code)
    {
    }
    /**
     * Converts an ISO 3166-alpha3 country code to an ISO 3166-numeric country code.
     *
     * @since 5.4.3
     *
     * @param string $alpha3_code ISO 3166-alpha3 country code
     * @return string ISO 3166-numeric country code
     */
    public static function alpha3_to_numeric($alpha3_code)
    {
    }
    /**
     * Converts an ISO 3166-alpha3 country code to a calling code.
     *
     * @since 5.4.3
     *
     * @param string $alpha3_code ISO 3166-alpha3 country code
     * @return string calling code
     */
    public static function alpha3_to_calling_code($alpha3_code)
    {
    }
    /**
     * Converts an ISO 3166-numeric country code to an ISO 3166-alpha2 code.
     *
     * @since 5.4.3
     *
     * @param string $numeric ISO 3166-numeric country code
     * @return string ISO 3166-alpha2 country code
     */
    public static function numeric_to_alpha2($numeric)
    {
    }
    /**
     * Converts an ISO 3166-numeric country code to an ISO 3166-alpha3 code.
     *
     * @since 5.4.3
     *
     * @param string $numeric ISO 3166-numeric country code
     * @return string ISO 3166-alpha3 country code
     */
    public static function numeric_to_alpha3($numeric)
    {
    }
    /**
     * Converts an ISO 3166-numeric country code to a calling code.
     *
     * @since 5.4.3
     *
     * @param string $numeric ISO 3166-numeric country code
     * @return string calling code
     */
    public static function numeric_to_calling_code($numeric)
    {
    }
    /**
     * Converts a country calling code to an ISO 3166-alpha2 code.
     *
     * @since 5.4.3
     *
     * @param string $calling_code country calling code (includes leading '+')
     * @return string ISO 3166-alpha2 code
     */
    public static function calling_code_to_alpha2($calling_code)
    {
    }
    /**
     * Converts a country calling code to an ISO 3166-alpha3 code.
     *
     * @since 5.4.3
     *
     * @param string $calling_code country calling code (includes leading '+')
     * @return string ISO 3166-alpha3 code
     */
    public static function calling_code_to_alpha3($calling_code)
    {
    }
    /**
     * Converts a country calling code to an ISO 3166-numeric code.
     *
     * @since 5.4.3
     *
     * @param string $calling_code country calling code (includes leading '+')
     * @return string ISO 3166-numeric code
     */
    public static function calling_code_to_numeric($calling_code)
    {
    }
    /**
     * Gets the flipped version of the calling codes array.
     *
     * Since array_flip will fail on the calling codes array due to
     * having some arrays as values, this custom function is necessary.
     *
     * @since 5.4.3
     *
     * @return array
     */
    public static function get_flipped_calling_codes()
    {
    }
}
/**
 * Script Handler Abstract Class
 *
 * Handles initializing the payment registered JavaScripts
 *
 * @since 5.7.0
 */
#[\AllowDynamicProperties]
abstract class Script_Handler
{
    /** @var string JS handler base class name, without the FW version */
    protected $js_handler_base_class_name = '';
    /**
     * Script_Handler constructor.
     *
     * @since 5.7.0
     */
    public function __construct()
    {
    }
    /**
     * Adds the action and filter hooks.
     *
     * @since 5.7.0
     */
    protected function add_hooks()
    {
    }
    /**
     * Returns the JS handler class name.
     *
     * @since 5.7.0
     *
     * @return string
     */
    protected function get_js_handler_class_name()
    {
    }
    /**
     * Returns the JS handler object name.
     *
     * @since 5.7.0
     *
     * @return string
     */
    protected function get_js_handler_object_name()
    {
    }
    /**
     * Gets the JS event triggered after the JS handler class is loaded.
     *
     * @since 5.7.0
     *
     * @return string
     */
    protected function get_js_loaded_event()
    {
    }
    /**
     * Gets the handler instantiation JS wrapped in a safe load technique.
     *
     * @since 5.7.0
     *
     * @param array $additional_args additional handler arguments, if any
     * @param string $handler_name handler name, if different from self::get_js_handler_class_name()
     * @param string $object_name object name, if different from self::get_js_handler_object_name()
     * @return string
     */
    protected function get_safe_handler_js(array $additional_args = [], $handler_name = '', $object_name = '')
    {
    }
    /**
     * Gets the handler instantiation JS.
     *
     * @since 5.7.0
     *
     * @param array $additional_args additional handler arguments, if any
     * @param string $handler_name handler name, if different from self::get_js_handler_class_name()
     * @param string $object_name object name, if different from self::get_js_handler_object_name()
     * @return string
     */
    protected function get_handler_js(array $additional_args = [], $handler_name = '', $object_name = '')
    {
    }
    /**
     * Gets the JS handler arguments.
     *
     * @since 5.7.0
     *
     * @return array
     */
    protected function get_js_handler_args()
    {
    }
    /**
     * Gets inline JavaScript code to issue an AJAX request to log a script error event.
     *
     * @since 5.7.0
     *
     * @return string
     */
    protected function get_js_handler_event_debug_log_request()
    {
    }
    /**
     * Logs an event via AJAX.
     *
     * @internal
     *
     * @since 5.7.0
     */
    public function ajax_log_event()
    {
    }
    /**
     * Adds inline JavaScript to the page.
     *
     * @since 6.0.1
     *
     * @param string $data The JavaScript code to add inline
     * @return bool True if successfully added
     */
    protected function addInlineScript(string $data): bool
    {
    }
    /**
     * Adds a log entry.
     *
     * @since 5.7.0
     *
     * @param string $message message to log
     */
    abstract protected function log_event($message);
    /** Conditional methods *******************************************************************************************/
    /**
     * Determines whether logging is enabled.
     *
     * @since 5.7.0
     *
     * @return bool
     */
    protected function is_logging_enabled()
    {
    }
    /** Getter methods ************************************************************************************************/
    /**
     * Gets the ID of this script handler.
     *
     * @since 5.7.0
     *
     * @return string
     */
    abstract public function get_id();
    /**
     * Gets the ID, but dasherized.
     *
     * @since 5.7.0
     *
     * @return string
     */
    public function get_id_dasherized()
    {
    }
}
namespace SkyVerge\WooCommerce\PluginFramework\v6_0_1\Helpers;

class ArrayHelper
{
    /**
     * Determines if a given item is an accessible array.
     *
     * @param mixed $value
     * @return bool
     * @phpstan-return ($value is array ? true : false)
     */
    public static function accessible($value): bool
    {
    }
    /**
     * Gets an array excluding the given keys.
     *
     * @param array $array
     * @param array|string $keys
     * @return array
     */
    public static function except(array $array, $keys): array
    {
    }
    /**
     * Removes a given key or keys from the original array.
     *
     * @param array $array
     * @param array|string $keys
     */
    public static function remove(array &$array, $keys): void
    {
    }
    /**
     * Wraps a given item in an array if it is not an array.
     *
     * @param mixed $item
     * @return array
     */
    public static function wrap($item = null): array
    {
    }
    /**
     * Determines if an array key exists.
     *
     * @param \ArrayAccess|array<mixed> $array
     * @param string|int $key
     * @return bool
     */
    public static function exists($array, $key): bool
    {
    }
    /**
     * Gets an array value from a dot notated key.
     *
     * @param mixed $array
     * @param int|string $key
     * @param mixed $default
     * @return mixed
     */
    public static function get($array, $key, $default = null)
    {
    }
}
class NumberHelper
{
    /**
     * Format a number with 2 decimal points, using a period for the decimal
     * separator and no thousands separator.
     *
     * Commonly used for payment gateways which require amounts in this format.
     *
     * @since 5.15.0
     *
     * @param float|mixed $number
     * @return string
     */
    public static function format($number): string
    {
    }
    /**
     * Determines whether or not the provided value is formatted with a comma as the decimal.
     *
     * This will only return `true` if the store settings are also configured to use a comma as the separator.
     *
     * @since 5.15.0
     *
     * @param mixed $number
     * @return bool
     */
    public static function isCommaDecimalSeparatedNumber($number): bool
    {
    }
    /**
     * Determines whether or not the provided value is formatted with a period as the decimal.
     *
     * This will only return `true` if store settings are also configured to use a decimal as the separator.
     *
     * @since 5.15.0
     *
     * @param int|float|string $number
     * @return bool
     */
    public static function isPeriodDecimalSeparatedNumber($number): bool
    {
    }
    /**
     * Accepts a number input and converts it to a float, for use in database storage or mathematical operations.
     *
     * For example: putting in a string `5,50` (number formatted European style) will be converted to float `5.50`.
     *
     * @since 5.15.0
     *
     * @param string|int|float $number
     * @return float
     */
    public static function convertNumberToFloatValue($number): float
    {
    }
    /**
     * Formats a given price for front-end display. This is the same as {@see wc_price()} but without the surrounding
     * HTML markup.
     *
     * @since 5.15.0
     *
     * @param int|string|float $price
     * @return string
     */
    public static function wcPrice($price): string
    {
    }
}
/**
 * OrderHelper class
 *
 * @since     x.x.x
 */
class OrderHelper
{
    /**
     * Gets the payment object associated with an order.
     *
     * Retrieves the payment details stored as a dynamic property on the order object.
     * If no payment object exists, returns an empty stdClass instance.
     *
     * @since x.x.x
     *
     * @param \WC_Order $order The order object.
     * @return \stdClass The payment object containing payment details.
     */
    public static function get_payment(\WC_Order $order)
    {
    }
    /**
     * Gets the payment total for an order.
     *
     * Retrieves the total payment amount stored as a dynamic property on the order.
     *
     * @since x.x.x
     *
     * @param \WC_Order $order The order object.
     * @return mixed The payment total amount, or null if not set.
     */
    public static function get_payment_total(\WC_Order $order)
    {
    }
    /**
     * Gets the customer ID associated with an order.
     *
     * Retrieves the customer ID stored as a dynamic property on the order.
     *
     * @since x.x.x
     *
     * @param \WC_Order $order The order object.
     * @return mixed The customer ID, or null if not set.
     */
    public static function get_customer_id(\WC_Order $order)
    {
    }
    /**
     * Gets a dynamic property from an order.
     *
     * Provides a generic way to retrieve any dynamic property stored on an order object.
     * Supports nested properties through the optional nested_key parameter.
     *
     * @since x.x.x
     *
     * @param \WC_Order $order      The order object.
     * @param string    $key        The property key to retrieve.
     * @param string    $nested_key Optional. A nested key within the property. Default null.
     * @param mixed     $default    Optional. The default value if the property doesn't exist. Default null.
     * @return mixed The property value if found, or the default value if not found.
     */
    public static function get_property(\WC_Order $order, string $key, $nested_key = null, $default = null)
    {
    }
    /**
     * Sets the payment object for an order.
     *
     * Stores payment details as a dynamic property on the order object.
     * This method uses pass-by-reference to modify the order object directly.
     *
     * @since x.x.x
     *
     * @param \WC_Order  $order   The order object (passed by reference).
     * @param \stdClass  $payment The payment object containing payment details.
     */
    public static function set_payment(\WC_Order &$order, \stdClass $payment)
    {
    }
    /**
     * Sets the payment total for an order.
     *
     * Stores the payment total as a dynamic property on the order object.
     * This method uses pass-by-reference to modify the order object directly.
     *
     * @since x.x.x
     *
     * @param \WC_Order     $order         The order object (passed by reference).
     * @param float|string  $payment_total The payment total amount.
     */
    public static function set_payment_total(\WC_Order &$order, $payment_total)
    {
    }
    /**
     * Sets the customer ID for an order.
     *
     * Stores the customer ID as a dynamic property on the order object.
     * This method uses pass-by-reference to modify the order object directly.
     *
     * @since x.x.x
     *
     * @param \WC_Order $order       The order object (passed by reference).
     * @param mixed     $customer_id The customer ID to set.
     */
    public static function set_customer_id(\WC_Order &$order, $customer_id)
    {
    }
    /**
     * Sets a dynamic property on an order.
     *
     * Provides a generic way to store any dynamic property on an order object.
     * This method uses pass-by-reference to modify the order object directly.
     *
     * @since x.x.x
     *
     * @param \WC_Order $order The order object (passed by reference).
     * @param string    $key   The property key to set.
     * @param mixed     $value The value to set for the property.
     */
    public static function set_property(\WC_Order &$order, string $key, $value)
    {
    }
}
class PageHelper
{
    /**
     * Determines whether the current page is the WooCommerce "Analytics" page.
     *
     * @since 5.15.4
     */
    public static function isWooCommerceAnalyticsPage(): bool
    {
    }
    /**
     * @codeCoverageIgnore
     */
    protected static function getWooCommercePageController(): ?\Automattic\WooCommerce\Admin\PageController
    {
    }
}
class ScriptHelper
{
    /**
     * Adds inline JavaScript.
     *
     * @since 6.0.1
     *
     * @param string $handle Handle name
     * @param string $javaScriptString The JavaScript code to add inline
     * @return bool True if successfully added
     */
    public static function addInlineScript(string $handle, string $javaScriptString): bool
    {
    }
    /**
     * Adds inline jQuery.
     * This calls {@see static::addInlineScript()} but with automatic jQuery wrapping.
     *
     * @since 6.0.1
     *
     * @param string $handle Handle name
     * @param string $javaScriptString The JavaScript code to add inline
     * @return bool True if successfully added
     */
    public static function addInlinejQuery(string $handle, string $javaScriptString): bool
    {
    }
}
namespace SkyVerge\WooCommerce\PluginFramework\v6_0_1\Plugin;

/**
 * Plugin lifecycle handler.
 *
 * Registers and displays milestone notice prompts and eventually the plugin
 * install, upgrade, activation, and deactivation routines.
 *
 * @since 5.1.0
 */
#[\AllowDynamicProperties]
class Lifecycle
{
    /** @var array the version numbers that have an upgrade routine */
    protected $upgrade_versions = [];
    /** @var string minimum milestone version */
    private $milestone_version;
    /** @var \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Plugin plugin instance */
    private $plugin;
    /**
     * Constructs the class.
     *
     * @since 5.1.0
     *
     * @param \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Plugin $plugin plugin instance
     */
    public function __construct(\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Plugin $plugin)
    {
    }
    /**
     * Adds the action & filter hooks.
     *
     * @since 5.1.0
     */
    protected function add_hooks()
    {
    }
    /**
     * Initializes the plugin lifecycle.
     *
     * @since 5.2.0
     */
    public function init()
    {
    }
    /**
     * Triggers plugin activation.
     *
     * We don't use register_activation_hook() as that can't be called inside
     * the 'plugins_loaded' action. Instead, we rely on setting to track the
     * plugin's activation status.
     *
     * @internal
     *
     * @link https://developer.wordpress.org/reference/functions/register_activation_hook/#comment-2100
     *
     * @since 5.2.0
     */
    public function handle_activation()
    {
    }
    /**
     * Triggers plugin deactivation.
     *
     * @internal
     *
     * @since 5.2.0
     */
    public function handle_deactivation()
    {
    }
    /**
     * Handles plugin activation.
     *
     * Plugins can override this to run their own activation tasks.
     *
     * Important Note: operations here should never be destructive for existing
     * data. Since we rely on an option to track activation, it's possible for
     * this to run outside of genuine activations.
     *
     * @since 5.2.0
     */
    public function activate()
    {
    }
    /**
     * Handles plugin deactivation.
     *
     * Plugins can override this to run their own deactivation tasks.
     *
     * @since 5.2.0
     */
    public function deactivate()
    {
    }
    /**
     * Helper method to install default settings for a plugin.
     *
     * @since 5.2.0
     *
     * @param array $settings settings in format required by WC_Admin_Settings
     */
    public function install_default_settings(array $settings)
    {
    }
    /**
     * Performs any install tasks.
     *
     * @since 5.2.0
     */
    protected function install()
    {
    }
    /**
     * Performs any upgrade tasks based on the provided installed version.
     *
     * @since 5.2.0
     *
     * @param string $installed_version installed version
     */
    protected function upgrade($installed_version)
    {
    }
    /**
     * Adds any lifecycle admin notices.
     *
     * @since 5.1.0
     */
    public function add_admin_notices()
    {
    }
    /** Milestone Methods *****************************************************/
    /**
     * Triggers a milestone.
     *
     * This will only be triggered if the install's "milestone version" is lower
     * than $since. Plugins can specify $since as the version at which a
     * milestone's feature was added. This prevents existing installs from
     * triggering notices for milestones that have long passed, like a payment
     * gateway's first successful payment. Omitting $since will assume the
     * milestone has always existed and should only trigger for fresh installs.
     *
     * @since 5.1.0
     *
     * @param string $id milestone ID
     * @param string $message message to display to the user
     * @param string $since the version since this milestone has existed in the plugin
     * @return bool
     */
    public function trigger_milestone($id, $message, $since = '1.0.0')
    {
    }
    /**
     * Generates a milestone notice message.
     *
     * @since 5.1.0
     *
     * @param string $custom_message custom text that notes what milestone was completed.
     * @return string
     */
    protected function generate_milestone_notice_message($custom_message)
    {
    }
    /**
     * Registers a milestone message to be displayed in the admin.
     *
     * @since 5.1.0
     * @see Lifecycle::generate_milestone_notice_message()
     *
     * @param string $id milestone ID
     * @param string $message message to display to the user
     * @return bool whether the message was successfully registered
     */
    public function register_milestone_message($id, $message)
    {
    }
    /** Event history methods *****************************************************************************************/
    /**
     * Adds an upgrade lifecycle event.
     *
     * @since 5.4.0
     *
     * @param string $from_version version upgrading from
     * @param array $data extra data to add
     * @return false|int
     */
    public function add_upgrade_event($from_version, array $data = array())
    {
    }
    /**
     * Adds a migration lifecycle event.
     *
     * @since 5.4.0
     *
     * @param string $from_plugin plugin migrating from
     * @param string $from_version version migrating from
     * @param array $data extra data to add
     * @return false|int
     */
    public function add_migrate_event($from_plugin, $from_version = '', array $data = array())
    {
    }
    /**
     * Stores a lifecycle event.
     *
     * This can be used to log installs, upgrades, etc...
     *
     * Uses a direct database query to avoid cache issues.
     *
     * @since 5.4.0
     *
     * @param string $name lifecycle event name
     * @param array $data any extra data to store
     * @return false|int
     */
    public function store_event($name, array $data = array())
    {
    }
    /**
     * Gets the lifecycle event history.
     *
     * The last 30 events are stored, with the latest first.
     *
     * @since 5.4.0
     *
     * @return array
     */
    public function get_event_history()
    {
    }
    /**
     * Gets the event history option name.
     *
     * @since 5.4.0
     *
     * @return string
     */
    protected function get_event_history_option_name()
    {
    }
    /** Utility Methods *******************************************************/
    /**
     * Gets the registered milestone messages.
     *
     * @since 5.1.0
     *
     * @return array
     */
    protected function get_milestone_messages()
    {
    }
    /**
     * Sets the milestone version.
     *
     * @since 5.1.0
     *
     * @param string $version plugin version
     * @return bool
     */
    public function set_milestone_version($version)
    {
    }
    /**
     * Gets the milestone version.
     *
     * @since 5.1.0
     *
     * @return string
     */
    public function get_milestone_version()
    {
    }
    /**
     * Gets the currently installed plugin version.
     *
     * @since 5.2.0
     *
     * @return string
     */
    protected function get_installed_version()
    {
    }
    /**
     * Sets the installed plugin version.
     *
     * @since 5.2.0
     *
     * @param string $version version to set
     */
    protected function set_installed_version($version)
    {
    }
    /**
     * Gets the plugin instance.
     *
     * @since 5.1.0
     *
     * @return \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Plugin|\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Plugin
     */
    protected function get_plugin()
    {
    }
}
namespace SkyVerge\WooCommerce\PluginFramework\v6_0_1\Settings_API;

/**
 * The base settings handler.
 *
 * @since 5.7.0
 */
#[\AllowDynamicProperties]
abstract class Abstract_Settings
{
    /** @var string settings ID */
    public $id;
    /** @var Setting[] registered settings */
    protected $settings = [];
    /**
     * Constructs the class.
     *
     * @since 5.7.0
     *
     * @param string $id the ID of plugin or payment gateway that owns these settings
     */
    public function __construct($id)
    {
    }
    /**
     * Registers the settings.
     *
     * Plugins or payment gateways should overwrite this method to register their settings.
     *
     * @since 5.7.0
     */
    abstract protected function register_settings();
    /**
     * Loads the values for all registered settings.
     *
     * @since 5.7.0
     */
    protected function load_settings()
    {
    }
    /**
     * Registers a setting.
     *
     * @param string $id unique setting ID
     * @param string $type setting type
     * @param array $args setting arguments
     * @return bool
     */
    public function register_setting($id, $type, array $args = [])
    {
    }
    /**
     * Unregisters a setting.
     *
     * @since 5.7.0
     *
     * @param string $id setting ID to unregister
     */
    public function unregister_setting($id)
    {
    }
    /**
     * Registers a control for a setting.
     *
     * @since 5.7.0
     *
     * @param string $setting_id the setting ID
     * @param string $type the control type
     * @param array $args optional args for the control
     * @return bool
     */
    public function register_control($setting_id, $type, array $args = [])
    {
    }
    /**
     * Gets the settings ID.
     *
     * @since 5.7.0
     *
     * @return string
     */
    public function get_id()
    {
    }
    /**
     * Gets registered settings.
     *
     * It returns all settings by default, but you can pass an array of IDs to filter the results.
     *
     * @param string[] $ids setting IDs to get
     * @return Setting[]
     */
    public function get_settings(array $ids = [])
    {
    }
    /**
     * Gets a setting object.
     *
     * @since 5.7.0
     *
     * @param string $id setting ID to get
     * @return Setting|null
     */
    public function get_setting($id)
    {
    }
    /**
     * Gets the stored value for a setting.
     *
     * Optionally, will return the setting's default value if nothing is stored.
     *
     * @since 5.7.0
     *
     * @param string $setting_id setting ID
     * @param bool $with_default whether to return the default value if nothing is stored
     * @return array|bool|float|int|string
     * @throws \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Plugin_Exception
     */
    public function get_value($setting_id, $with_default = true)
    {
    }
    /**
     * Updates the stored value for a setting.
     *
     * @since 5.7.0
     *
     * @param string $setting_id setting ID
     * @param array|bool|float|int|string $value
     * @throws \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Plugin_Exception
     */
    public function update_value($setting_id, $value)
    {
    }
    /**
     * Deletes the stored value for a setting.
     *
     * @since 5.7.0
     *
     * @param string $setting_id setting ID
     * @return bool
     * @throws \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Plugin_Exception
     */
    public function delete_value($setting_id)
    {
    }
    /**
     * Saves registered settings in their current state.
     *
     * It saves all settings by default, but you can pass a setting ID to save a specific setting.
     *
     * @since 5.7.0
     *
     * @param string $setting_id setting ID
     */
    public function save($setting_id = '')
    {
    }
    /**
     * Converts the value of a setting to be stored in an option.
     *
     * @since 5.7.0
     *
     * @param Setting $setting
     * @return mixed
     */
    protected function get_value_for_database(\SkyVerge\WooCommerce\PluginFramework\v6_0_1\Settings_API\Setting $setting)
    {
    }
    /**
     * Converts the stored value of a setting to the proper setting type.
     *
     * @since 5.7.0
     *
     * @param mixed $value the value stored in an option
     * @param Setting $setting
     * @return mixed
     */
    protected function get_value_from_database($value, \SkyVerge\WooCommerce\PluginFramework\v6_0_1\Settings_API\Setting $setting)
    {
    }
    /**
     * Gets the list of valid setting types.
     *
     * @since 5.7.0
     *
     * @return string[]
     */
    public function get_setting_types()
    {
    }
    /**
     * Gets the list of valid control types.
     *
     * @since 5.7.0
     *
     * @return string[]
     */
    public function get_control_types()
    {
    }
    /**
     * Returns the valid control types for a setting.
     *
     * @since 5.7.0
     *
     * @param Setting $setting setting object
     * @return string[]
     */
    public function get_setting_control_types($setting)
    {
    }
    /**
     * Gets the prefix for db option names.
     *
     * @since 5.7.0
     *
     * @return string
     */
    public function get_option_name_prefix()
    {
    }
}
/**
 * The base control object.
 *
 * @since 5.7.0
 */
#[\AllowDynamicProperties]
class Control
{
    /** @var string the text control type */
    const TYPE_TEXT = 'text';
    /** @var string the textarea control type */
    const TYPE_TEXTAREA = 'textarea';
    /** @var string the number control type */
    const TYPE_NUMBER = 'number';
    /** @var string the email control type */
    const TYPE_EMAIL = 'email';
    /** @var string the password control type */
    const TYPE_PASSWORD = 'password';
    /** @var string the date control type */
    const TYPE_DATE = 'date';
    /** @var string the checkbox control type */
    const TYPE_CHECKBOX = 'checkbox';
    /** @var string the radio control type */
    const TYPE_RADIO = 'radio';
    /** @var string the select control type */
    const TYPE_SELECT = 'select';
    /** @var string the file control type */
    const TYPE_FILE = 'file';
    /** @var string the color control type */
    const TYPE_COLOR = 'color';
    /** @var string the range control type */
    const TYPE_RANGE = 'range';
    /** @var string|null the setting ID to which this control belongs */
    protected $setting_id;
    /** @var string|null the control type */
    protected $type;
    /** @var string the control name */
    protected $name = '';
    /** @var string the control description */
    protected $description = '';
    /** @var array the control options, as $option => $label  */
    protected $options = [];
    /** Getter methods ************************************************************************************************/
    /**
     * The setting ID to which this control belongs.
     *
     * @since 5.7.0
     *
     * @return null|string
     */
    public function get_setting_id()
    {
    }
    /**
     * Gets the control type.
     *
     * @since 5.7.0
     *
     * @return null|string
     */
    public function get_type()
    {
    }
    /**
     * Gets the control name.
     *
     * @since 5.7.0
     *
     * @return string
     */
    public function get_name()
    {
    }
    /**
     * Gets the control description.
     *
     * @since 5.7.0
     *
     * @return string
     */
    public function get_description()
    {
    }
    /**
     * Gets the control options.
     *
     * As $option => $label for display.
     *
     * @since 5.7.0
     *
     * @return array
     */
    public function get_options()
    {
    }
    /** Setter methods ************************************************************************************************/
    /**
     * Sets the setting ID.
     *
     * @since 5.7.0
     *
     * @param string $value setting ID to set
     * @throws \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Plugin_Exception
     */
    public function set_setting_id($value)
    {
    }
    /**
     * Sets the type.
     *
     * @since 5.7.0
     *
     * @param string $value setting ID to set
     * @param string[] $valid_types allowed control types
     * @throws \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Plugin_Exception
     */
    public function set_type($value, array $valid_types = [])
    {
    }
    /**
     * Sets the name.
     *
     * @since 5.7.0
     *
     * @param string $value control name to set
     * @throws \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Plugin_Exception
     */
    public function set_name($value)
    {
    }
    /**
     * Sets the description.
     *
     * @since 5.7.0
     *
     * @param string $value control description to set
     * @throws \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Plugin_Exception
     */
    public function set_description($value)
    {
    }
    /**
     * Sets the options.
     *
     * @since 5.7.0
     *
     * @param array $options options to set
     * @param array $valid_options valid option keys to check against
     */
    public function set_options(array $options, array $valid_options = [])
    {
    }
}
/**
 * The base setting object.
 *
 * @since 5.7.0
 */
#[\AllowDynamicProperties]
class Setting
{
    /** @var string the string setting type */
    const TYPE_STRING = 'string';
    /** @var string the URL setting type */
    const TYPE_URL = 'url';
    /** @var string the email setting type */
    const TYPE_EMAIL = 'email';
    /** @var string the integer setting type */
    const TYPE_INTEGER = 'integer';
    /** @var string the float setting type */
    const TYPE_FLOAT = 'float';
    /** @var string the boolean setting type */
    const TYPE_BOOLEAN = 'boolean';
    /** @var string unique setting ID */
    protected $id;
    /** @var string setting type */
    protected $type;
    /** @var string setting name */
    protected $name;
    /** @var string setting description */
    protected $description;
    /** @var bool whether the setting holds an array of multiple values */
    protected $is_multi = false;
    /** @var array valid setting options */
    protected $options = [];
    /** @var int|float|string|bool|array setting default value */
    protected $default;
    /** @var int|float|string|bool|array setting current value */
    protected $value;
    /** @var Control control object */
    protected $control;
    /** Getter Methods ************************************************************************************************/
    /**
     * Gets the setting ID.
     *
     * @since 5.7.0
     *
     * @return string
     */
    public function get_id()
    {
    }
    /**
     * Gets the setting type.
     *
     * @since 5.7.0
     *
     * @return string
     */
    public function get_type()
    {
    }
    /**
     * Gets the setting name.
     *
     * @since 5.7.0
     *
     * @return string
     */
    public function get_name()
    {
    }
    /**
     * Gets the setting description.
     *
     * @since 5.7.0
     *
     * @return string
     */
    public function get_description()
    {
    }
    /**
     * Returns whether the setting holds an array of multiple values.
     *
     * @since 5.7.0
     *
     * @return bool
     */
    public function is_is_multi()
    {
    }
    /**
     * Gets the setting options.
     *
     * @since 5.7.0
     *
     * @return array
     */
    public function get_options()
    {
    }
    /**
     * Gets the setting default value.
     *
     * @since 5.7.0
     *
     * @return array|bool|float|int|string|null
     */
    public function get_default()
    {
    }
    /**
     * Gets the setting current value.
     *
     * @since 5.7.0
     *
     * @return array|bool|float|int|string
     */
    public function get_value()
    {
    }
    /**
     * Gets the setting control.
     *
     * @since 5.7.0
     *
     * @return Control
     */
    public function get_control()
    {
    }
    /** Setter Methods ************************************************************************************************/
    /**
     * Sets the setting ID.
     *
     * @since 5.7.0
     *
     * @param string $id
     */
    public function set_id($id)
    {
    }
    /**
     * Sets the setting type.
     *
     * @since 5.7.0
     *
     * @param string $type
     */
    public function set_type($type)
    {
    }
    /**
     * Sets the setting name.
     *
     * @since 5.7.0
     *
     * @param string $name
     */
    public function set_name($name)
    {
    }
    /**
     * Sets the setting description.
     *
     * @since 5.7.0
     *
     * @param string $description
     */
    public function set_description($description)
    {
    }
    /**
     * Sets whether the setting holds an array of multiple values.
     *
     * @since 5.7.0
     *
     * @param bool $is_multi
     */
    public function set_is_multi($is_multi)
    {
    }
    /**
     * Sets the setting options.
     *
     * @since 5.7.0
     *
     * @param array $options
     */
    public function set_options($options)
    {
    }
    /**
     * Sets the setting default value.
     *
     * @since 5.7.0
     *
     * @param array|bool|float|int|string|null $value default value to set
     */
    public function set_default($value)
    {
    }
    /**
     * Sets the setting current value.
     *
     * @since 5.7.0
     *
     * @param array|bool|float|int|string $value
     */
    public function set_value($value)
    {
    }
    /**
     * Sets the setting control.
     *
     * @since 5.7.0
     *
     * @param Control $control
     */
    public function set_control($control)
    {
    }
    /**
     * Sets the setting current value, after validating it against the type and, if set, options.
     *
     * @since 5.7.0
     *
     * @param array|bool|float|int|string $value
     * @throws \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Plugin_Exception
     */
    public function update_value($value)
    {
    }
    /**
     * Validates the setting value.
     *
     * @since 5.7.0
     *
     * @param array|bool|float|int|string $value
     * @return bool
     */
    public function validate_value($value)
    {
    }
    /**
     * Validates a string value.
     *
     * @since 5.7.0
     *
     * @param array|bool|float|int|string $value value to validate
     * @return bool
     */
    protected function validate_string_value($value)
    {
    }
    /**
     * Validates a URL value.
     *
     * @since 5.7.0
     *
     * @param array|bool|float|int|string $value value to validate
     * @return bool
     */
    protected function validate_url_value($value)
    {
    }
    /**
     * Validates an email value.
     *
     * @since 5.7.0
     *
     * @param mixed $value value to validate
     * @return bool
     */
    protected function validate_email_value($value)
    {
    }
    /**
     * Validates an integer value.
     *
     * @since 5.7.0
     *
     * @param mixed $value value to validate
     * @return bool
     */
    public function validate_integer_value($value)
    {
    }
    /**
     * Validates a float value.
     *
     * @since 5.7.0
     *
     * @param mixed $value value to validate
     * @return bool
     */
    protected function validate_float_value($value)
    {
    }
    /**
     * Validates a boolean value.
     *
     * @since 5.7.0
     *
     * @param mixed $value value to validate
     * @return bool
     */
    protected function validate_boolean_value($value)
    {
    }
}
namespace SkyVerge\WooCommerce\PluginFramework\v6_0_1\Traits;

/**
 * A trait that allows a given class/object to convert its state to an array.
 */
trait CanConvertToArrayTrait
{
    /** @var bool convert Private Properties to Array Output */
    protected bool $toArrayIncludePrivate = false;
    /** @var bool convert Protected Properties to Array Output */
    protected bool $toArrayIncludeProtected = true;
    /** @var bool convert Public Properties to Array Output */
    protected bool $toArrayIncludePublic = true;
    /** @var bool prevents infinite recursive calls */
    private bool $bailIfInRecursiveCall = false;
    /**
     * Converts all class data properties to an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
    }
    /**
     * Determines if an item can be converted to an array.
     *
     * @param mixed $item
     * @return bool
     */
    protected function canConvertItemToArray($item): bool
    {
    }
    /**
     * Checks if the property is accessible for {@see toArray()} conversion.
     *
     * @param \ReflectionProperty $property
     * @return bool
     */
    private function toArrayShouldPropertyBeAccessible(\ReflectionProperty $property): bool
    {
    }
}
/**
 * A trait that allows a given class/object to get a new instance of itself.
 * For singletons {@see CanGetNewInstanceTrait} instead.
 */
trait CanGetNewInstanceTrait
{
    /**
     * Creates and returns a new instance of the calling class.
     *
     * @return static
     */
    public static function getNewInstance(...$args)
    {
    }
}
trait IsSingletonTrait
{
    /** @var ?static holds the current singleton instance */
    protected static $instance;
    /**
     * Determines if the current instance is loaded.
     *
     * @return bool
     */
    public static function isLoaded(): bool
    {
    }
    /**
     * Gets the singleton instance.
     *
     * @return static
     */
    public static function getInstance(...$args)
    {
    }
    /**
     * Resets the singleton instance.
     *
     * @return void
     */
    public static function reset(): void
    {
    }
}
namespace SkyVerge\WooCommerce\PluginFramework\v6_0_1\Admin;

/**
 * Helper class for WooCommerce enhanced admin notes.
 *
 * @since 5.6.0
 */
#[\AllowDynamicProperties]
class Notes_Helper
{
    /** Conditional methods *******************************************************************************************/
    /**
     * Determines if any notes with the given name exist.
     *
     * @since 5.6.0
     *
     * @param string $name note name
     * @return bool
     */
    public static function note_with_name_exists($name)
    {
    }
    /** Getter methods ************************************************************************************************/
    /**
     * Gets a note with the given name.
     *
     * @since 5.6.0
     *
     * @param string $name name of the note to get
     * @return \Automattic\WooCommerce\Admin\Notes\WC_Admin_Note|null
     */
    public static function get_note_with_name($name)
    {
    }
    /**
     * Gets all notes with the given name.
     *
     * @since 5.6.0
     *
     * @param string $name note name
     * @return int[]
     */
    public static function get_note_ids_with_name($name)
    {
    }
    /**
     * Gets all note IDs from the given source.
     *
     * @since 5.6.1
     *
     * @param string $source note source
     * @return int[]
     */
    public static function get_note_ids_with_source($source)
    {
    }
    /**
     * Deletes all notes from the given source.
     *
     * @since 5.6.1
     *
     * @param string $source source name
     */
    public static function delete_notes_with_source($source)
    {
    }
}
/**
 * The plugin Setup Wizard class.
 *
 * This creates a setup wizard so that plugins can provide a user-friendly
 * step-by-step interaction for configuring critical plugin options.
 *
 * Based on WooCommerce's \WC_Admin_Setup_Wizard
 *
 * @since 5.2.2
 */
#[\AllowDynamicProperties]
abstract class Setup_Wizard
{
    /** the "finish" step ID */
    const ACTION_FINISH = 'finish';
    /** @var string the user capability required to use this wizard */
    protected $required_capability = 'manage_woocommerce';
    /** @var string the current step ID */
    protected $current_step = '';
    /** @var array registered steps to be displayed */
    protected $steps = array();
    /** @var string setup handler ID  */
    private $id;
    /** @var \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Plugin plugin instance */
    private $plugin;
    /**
     * Constructs the class.
     *
     * @param \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Plugin $plugin plugin instance
     */
    public function __construct(\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Plugin $plugin)
    {
    }
    /**
     * Registers the setup steps.
     *
     * Plugins should extend this to register their own steps.
     *
     * @since 5.2.2
     */
    abstract protected function register_steps();
    /**
     * Adds the action & filter hooks.
     *
     * @since 5.2.2
     */
    protected function add_hooks()
    {
    }
    /**
     * Adds any admin notices.
     *
     * @since 5.2.2
     */
    public function add_admin_notices()
    {
    }
    /**
     * Gets the new installation documentation notice message.
     *
     * This prompts users to read the docs and is displayed if the wizard has
     * already been completed.
     *
     * @since 5.2.2
     *
     * @return string
     */
    protected function get_documentation_notice_message()
    {
    }
    /**
     * Gets the new installation setup notice message.
     *
     * This prompts users to start the setup wizard and is displayed if the
     * wizard has not yet been completed.
     *
     * @since 5.2.2
     *
     * @return string
     */
    protected function get_setup_notice_message()
    {
    }
    /**
     * Adds a 'Setup' link to the plugin action links if the wizard hasn't been completed.
     *
     * This will override the plugin's standard "Configure" link with a link to this setup wizard.
     *
     * @internal
     *
     * @since 5.2.2
     *
     * @param array $action_links plugin action links
     * @return array
     */
    public function add_setup_link($action_links)
    {
    }
    /**
     * Initializes setup.
     *
     * @since 5.2.2
     */
    protected function init_setup()
    {
    }
    /**
     * Adds the page to WordPress core.
     *
     * While this doesn't output any markup/menu items, it is essential to officially register the page to avoid permissions issues.
     *
     * @internal
     *
     * @since 5.2.2
     */
    public function add_page()
    {
    }
    /**
     * Renders the entire setup page markup.
     *
     * @internal
     *
     * @since 5.2.2
     */
    public function render_page()
    {
    }
    /**
     * Saves a step.
     *
     * @since 5.2.2
     *
     * @param string $step_id the step ID being saved
     * @return void|string redirects upon success, returns an error message upon failure
     */
    protected function save_step($step_id)
    {
    }
    /**
     * Registers and enqueues the wizard's scripts and styles.
     *
     * @since 5.2.2
     */
    protected function load_scripts_styles()
    {
    }
    /** Header Methods ************************************************************************************************/
    /**
     * Renders the header markup.
     *
     * @since 5.2.2
     */
    protected function render_header()
    {
    }
    /**
     * Gets the header image URL.
     *
     * Plugins can override this to point to their own branding image URL.
     *
     * @since 5.2.2
     *
     * @return string
     */
    protected function get_header_image_url()
    {
    }
    /**
     * Renders the step list.
     *
     * This displays a list of steps, marking them as complete or upcoming as sort of a progress bar.
     *
     * @since 5.2.2
     */
    protected function render_steps()
    {
    }
    /** Content Methods ***********************************************************************************************/
    /**
     * Renders the setup content.
     *
     * This will display the welcome screen, finished screen, or a specific step's markup.
     *
     * @since 5.2.2
     *
     * @param string $error_message custom error message
     */
    protected function render_content($error_message = '')
    {
    }
    /**
     * Renders a save error.
     *
     * @since 5.2.2
     *
     * @param string $message error message to render
     */
    protected function render_error($message)
    {
    }
    /**
     * Renders a default welcome note.
     *
     * @since 5.2.2
     */
    protected function render_welcome()
    {
    }
    /**
     * Renders the default welcome note heading.
     *
     * @since 5.2.2
     */
    protected function render_welcome_heading()
    {
    }
    /**
     * Renders the default welcome note text.
     *
     * @since 5.2.2
     */
    protected function render_welcome_text()
    {
    }
    /**
     * Renders the finished screen markup.
     *
     * This is what gets displayed after all of the steps have been completed or skipped.
     *
     * @since 5.2.2
     */
    protected function render_finished()
    {
    }
    /**
     * Renders HTML before the next steps in the finished step screen.
     *
     * Plugins can implement this method to output additional HTML before the next steps are printed.
     *
     * @since 5.2.2
     */
    protected function render_before_next_steps()
    {
    }
    /**
     * Renders HTML after the next steps in the finished step screen.
     *
     * Plugins can implement this method to output additional HTML after the next steps are printed.
     *
     * @since 5.2.2
     */
    protected function render_after_next_steps()
    {
    }
    /**
     * Renders the next steps.
     *
     * @since 5.2.2
     */
    protected function render_next_steps()
    {
    }
    /**
     * Gets the next steps.
     *
     * These are major actions a user can take after finishing the setup wizard.
     * For instance, things like "Create your first Add-On" could go here.
     *
     * @since 5.2.2
     *
     * @return array
     */
    protected function get_next_steps()
    {
    }
    /**
     * Gets the additional steps.
     *
     * These are secondary actions.
     *
     * @since 5.2.2
     *
     * @return array
     */
    protected function get_additional_actions()
    {
    }
    /**
     * Renders a given step's markup.
     *
     * This will display a title, whatever get's rendered by the step's view
     * callback, then the navigation buttons.
     *
     * @since 5.2.2
     *
     * @param string $step_id step ID to render
     */
    protected function render_step($step_id)
    {
    }
    /**
     * Renders a form field.
     *
     * Call this in the same way as woocommerce_form_field().
     *
     * @since 5.2.2
     *
     * @param string $key field key
     * @param array $args field args - @see woocommerce_form_field()
     * @param string|null $value field value
     */
    protected function render_form_field($key, $args, $value = null)
    {
    }
    /**
     * Renders the toggle form field.
     *
     * This requires special markup for the toggle UI.
     *
     * @since 5.2.2
     *
     * @param string $key field key
     * @param array $args field args - @see woocommerce_form_field()
     * @param string|null $value field value
     */
    public function render_toggle_form_field($key, $args, $value)
    {
    }
    /**
     * Renders the setup footer.
     *
     * @since 5.2.2
     */
    protected function render_footer()
    {
    }
    /** Helper Methods ************************************************************************************************/
    /**
     * Registers a step.
     *
     * @since 5.2.2
     *
     * @param string $id unique step ID
     * @param string $name step name for display
     * @param string|array $view_callback callback to render the step's content HTML
     * @param string|array|null $save_callback callback to save the step's form values
     * @return bool whether the step was successfully added
     */
    public function register_step($id, $name, $view_callback, $save_callback = null)
    {
    }
    /**
     * Marks the setup as complete.
     *
     * @since 5.2.2
     *
     * @return bool
     */
    public function complete_setup()
    {
    }
    /** Conditional Methods *******************************************************************************************/
    /**
     * Determines if the current page is the setup wizard page.
     *
     * @since 5.2.2
     *
     * @return bool
     */
    public function is_setup_page()
    {
    }
    /**
     * Determines if a step is the current one displayed.
     *
     * @since 5.2.2
     *
     * @param string $step_id step ID
     * @return bool
     */
    public function is_current_step($step_id)
    {
    }
    /**
     * Determines if setup has started.
     *
     * @since 5.2.2
     *
     * @return bool
     */
    public function is_started()
    {
    }
    /**
     * Determines if setup has completed all of the steps.
     *
     * @since 5.2.2
     *
     * @return bool
     */
    public function is_finished()
    {
    }
    /**
     * Determines if the setup wizard has been completed.
     *
     * This will be true if any user has been redirected back to the regular
     * WordPress dashboard, either manually or after finishing the steps.
     *
     * @since 5.2.2
     *
     * @return bool
     */
    public function is_complete()
    {
    }
    /**
     * Determines if the given step has been completed.
     *
     * @since 5.2.2
     *
     * @param string $step_id step ID to check
     * @return bool
     */
    public function is_step_complete($step_id)
    {
    }
    /**
     * Determines if the wizard has steps to display.
     *
     * @since 5.2.2
     *
     * @return bool
     */
    public function has_steps()
    {
    }
    /**
     * Determines if this setup handler has a given step.
     *
     * @since 5.2.2
     *
     * @param string $step_id step ID to check
     * @return bool
     */
    public function has_step($step_id)
    {
    }
    /** Getter Methods ************************************************************************************************/
    /**
     * Gets a given step's title.
     *
     * @since 5.2.2
     *
     * @param string $step_id step ID (optional: will assume the current step if unspecified)
     * @return string
     */
    public function get_step_title($step_id = '')
    {
    }
    /**
     * Gets the Setup Wizard URL.
     *
     * @since 5.2.2
     *
     * @return string
     */
    public function get_setup_url()
    {
    }
    /**
     * Gets the URL for the next step based on a current step.
     *
     * @since 5.2.2
     *
     * @param string $step_id step ID to base "next" off of - defaults to this class's internal pointer
     * @return string
     */
    public function get_next_step_url($step_id = '')
    {
    }
    /**
     * Gets a given step's URL.
     *
     * @since 5.2.2
     *
     * @param string $step_id step ID
     * @return string|false
     */
    public function get_step_url($step_id)
    {
    }
    /**
     * Gets the "finish" action URL.
     *
     * @since 5.2.2
     *
     * @return string
     */
    protected function get_finish_url()
    {
    }
    /**
     * Gets the return URL.
     *
     * Can be used to return the user to the dashboard. The plugin's settings URL
     * will be used if it exists, otherwise the general dashboard URL.
     *
     * @since 5.2.2
     *
     * @return string
     */
    protected function get_dashboard_url()
    {
    }
    /**
     * Gets the setup setup handler's slug.
     *
     * @since 5.2.2
     *
     * @return string
     */
    protected function get_slug()
    {
    }
    /**
     * Gets the plugin instance.
     *
     * @since 5.2.2
     *
     * @return \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Plugin|\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Plugin
     */
    protected function get_plugin()
    {
    }
}
namespace SkyVerge\WooCommerce\PluginFramework\v6_0_1;

/**
 * # WooCommerce Plugin Framework API Base Class
 *
 * This class provides a standardized framework for constructing an API wrapper
 * to external services. It is designed to be extremely flexible.
 *
 * @version 2.2.0
 */
#[\AllowDynamicProperties]
abstract class SV_WC_API_Base
{
    /** @var string request method, defaults to POST */
    protected $request_method = 'POST';
    /** @var string URI used for the request */
    protected $request_uri;
    /** @var array request headers */
    protected $request_headers = array();
    /** @var string request user-agent */
    protected $request_user_agent;
    /** @var string request HTTP version, defaults to 1.0 */
    protected $request_http_version = '1.0';
    /** @var string request duration */
    protected $request_duration;
    /** @var SV_WC_API_Request|object request */
    protected $request;
    /** @var string response code */
    protected $response_code;
    /** @var string response message */
    protected $response_message;
    /** @var array response headers */
    protected $response_headers;
    /** @var string raw response body */
    protected $raw_response_body;
    /** @var string response handler class name */
    protected $response_handler;
    /** @var SV_WC_API_Response|object response */
    protected $response;
    /**
     * Perform the request and return the parsed response
     *
     * @since 2.2.0
     *
     * @param SV_WC_API_Request|object $request class instance which implements SV_WC_API_Request
     * @return SV_WC_API_Response|object class instance which implements SV_WC_API_Response
     * @throws SV_WC_API_Exception may be thrown in implementations
     */
    protected function perform_request($request)
    {
    }
    /**
     * Simple wrapper for wp_remote_request() so child classes can override this
     * and provide their own transport mechanism if needed, e.g. a custom
     * cURL implementation
     *
     * @since 2.2.0
     *
     * @param string $request_uri
     * @param string $request_args
     * @return array|\WP_Error
     */
    protected function do_remote_request($request_uri, $request_args)
    {
    }
    /**
     * Handle and parse the response
     *
     * @since 2.2.0
     * @param array|\WP_Error $response response data
     * @throws SV_WC_API_Exception network issues, timeouts, API errors, etc
     * @return SV_WC_API_Request|object request class instance that implements SV_WC_API_Request
     */
    protected function handle_response($response)
    {
    }
    /**
     * Allow child classes to validate a response prior to instantiating the
     * response object. Useful for checking response codes or messages, e.g.
     * throw an exception if the response code is not 200.
     *
     * A child class implementing this method should simply return true if the response
     * processing should continue, or throw a \SV_WC_API_Exception with a
     * relevant error message & code to stop processing.
     *
     * Note: Child classes *must* sanitize the raw response body before throwing
     * an exception, as it will be included in the broadcast_request() method
     * which is typically used to log requests.
     *
     * @since 2.2.0
     */
    protected function do_pre_parse_response_validation()
    {
    }
    /**
     * Allow child classes to validate a response after it has been parsed
     * and instantiated. This is useful for check error codes or messages that
     * exist in the parsed response.
     *
     * A child class implementing this method should simply return true if the response
     * processing should continue, or throw a \SV_WC_API_Exception with a
     * relevant error message & code to stop processing.
     *
     * Note: Response body sanitization is handled automatically
     *
     * @since 2.2.0
     */
    protected function do_post_parse_response_validation()
    {
    }
    /**
     * Return the parsed response object for the request
     *
     * @since 2.2.0
     * @param string $raw_response_body
     * @return object|SV_WC_API_Request response class instance which implements SV_WC_API_Request
     */
    protected function get_parsed_response($raw_response_body)
    {
    }
    /**
     * Alert other actors that a request has been performed. This is primarily used
     * for request logging.
     *
     * @since 2.2.0
     */
    protected function broadcast_request()
    {
    }
    /**
     * Reset the API response members to their
     *
     * @since 1.0.0
     */
    protected function reset_response()
    {
    }
    /** Request Getters *******************************************************/
    /**
     * Get the request URI
     *
     * @since 2.2.0
     * @return string
     */
    protected function get_request_uri()
    {
    }
    /**
     * Gets the request path.
     *
     * @since 4.5.0
     * @return string
     */
    protected function get_request_path()
    {
    }
    /**
     * Gets the request URL query.
     *
     * @since 4.5.0
     *
     * @return string
     */
    protected function get_request_query()
    {
    }
    /**
     * Get the request arguments in the format required by wp_remote_request()
     *
     * @since 2.2.0
     *
     * @return array
     */
    protected function get_request_args()
    {
    }
    /**
     * Get the request method, POST by default
     *
     * @since 2.2.0
     * @return string
     */
    protected function get_request_method()
    {
    }
    /**
     * Gets the request body.
     *
     * @since 4.5.0
     * @return string
     */
    protected function get_request_body()
    {
    }
    /**
     * Gets the sanitized request body, for logging.
     *
     * @since 4.5.0
     * @return string
     */
    protected function get_sanitized_request_body()
    {
    }
    /**
     * Get the request HTTP version, 1.1 by default
     *
     * @since 2.2.0
     * @return string
     */
    protected function get_request_http_version()
    {
    }
    /**
     * Get the request headers
     *
     * @since 2.2.0
     * @return array
     */
    protected function get_request_headers()
    {
    }
    /**
     * Get sanitized request headers suitable for logging, stripped of any
     * confidential information
     *
     * The `Authorization` header is sanitized automatically.
     *
     * Child classes that implement any custom authorization headers should
     * override this method to perform sanitization.
     *
     * @since 2.2.0
     * @return array
     */
    protected function get_sanitized_request_headers()
    {
    }
    /**
     * Get the request user agent, defaults to:
     *
     * Dasherized-Plugin-Name/Plugin-Version (WooCommerce/WC-Version; WordPress/WP-Version)
     *
     * @since 2.2.0
     * @return string
     */
    protected function get_request_user_agent()
    {
    }
    /**
     * Get the request duration in seconds, rounded to the 5th decimal place
     *
     * @since 2.2.0
     * @return string
     */
    protected function get_request_duration()
    {
    }
    /**
     * Gets the request data for broadcasting the request.
     *
     * Overriding this method allows child classes to customize the request data when broadcasting the request.
     *
     * @since 5.10.10
     *
     * @return array
     */
    protected function get_request_data_for_broadcast(): array
    {
    }
    /** Response Getters ******************************************************/
    /**
     * Get the response handler class name
     *
     * @since 2.2.0
     * @return string
     */
    protected function get_response_handler()
    {
    }
    /**
     * Get the response code
     *
     * @since 2.2.0
     * @return string
     */
    protected function get_response_code()
    {
    }
    /**
     * Get the response message
     *
     * @since 2.2.0
     * @return string
     */
    protected function get_response_message()
    {
    }
    /**
     * Get the response headers
     *
     * @since 2.2.0
     * @return array
     */
    protected function get_response_headers()
    {
    }
    /**
     * Get the raw response body, prior to any parsing or sanitization
     *
     * @since 2.2.0
     * @return string
     */
    protected function get_raw_response_body()
    {
    }
    /**
     * Get the sanitized response body, provided by the response class
     * to_string_safe() method
     *
     * @since 2.2.0
     * @return string|null
     */
    protected function get_sanitized_response_body()
    {
    }
    /**
     * Gets the response data for broadcasting the request.
     *
     * Overriding this method allows child classes to customize the response data when broadcasting the request.
     *
     * @since 5.10.10
     *
     * @return array
     * @return array
     */
    protected function get_response_data_for_broadcast(): array
    {
    }
    /** Misc Getters ******************************************************/
    /**
     * Returns the most recent request object.
     *
     * @since 2.2.0
     *
     * @return SV_WC_API_Request|object the most recent request object
     */
    public function get_request()
    {
    }
    /**
     * Returns the most recent response object.
     *
     * @since 2.2.0
     *
     * @return SV_WC_API_Response|object the most recent response object
     */
    public function get_response()
    {
    }
    /**
     * Get the ID for the API, used primarily to namespace the action name
     * for broadcasting requests
     *
     * @since 2.2.0
     * @return string
     */
    protected function get_api_id()
    {
    }
    /**
     * Return a new request object
     *
     * Child classes must implement this to return an object that implements
     * \SV_WC_API_Request which should be used in the child class API methods
     * to build the request. The returned SV_WC_API_Request should be passed
     * to self::perform_request() by your concrete API methods
     *
     * @since 2.2.0
     *
     * @param array $args optional request arguments
     * @return SV_WC_API_Request|object
     */
    abstract protected function get_new_request($args = array());
    /**
     * Return the plugin class instance associated with this API
     *
     * Child classes must implement this to return their plugin class instance
     *
     * This is used for defining the plugin ID used in filter names, as well
     * as the plugin name used for the default user agent.
     *
     * @since 2.2.0
     *
     * @return SV_WC_Plugin
     */
    abstract protected function get_plugin();
    /** Setters ***************************************************************/
    /**
     * Set a request header
     *
     * @since 2.2.0
     * @param string $name header name
     * @param string $value header value
     * @return string
     */
    protected function set_request_header($name, $value)
    {
    }
    /**
     * Set multiple request headers at once
     *
     * @since 4.3.0
     * @param array $headers
     */
    protected function set_request_headers(array $headers)
    {
    }
    /**
     * Set HTTP basic auth for the request
     *
     * Since 2.2.0
     * @param string $username
     * @param string $password
     */
    protected function set_http_basic_auth($username, $password)
    {
    }
    /**
     * Set the Content-Type request header
     *
     * @since 2.2.0
     * @param string $content_type
     */
    protected function set_request_content_type_header($content_type)
    {
    }
    /**
     * Set the Accept request header
     *
     * @since 2.2.0
     * @param string $type the request accept type
     */
    protected function set_request_accept_header($type)
    {
    }
    /**
     * Set the response handler class name. This class will be instantiated
     * to parse the response for the request.
     *
     * Note the class should implement SV_WC_API
     *
     * @since 2.2.0
     *
     * @param string $handler handle class name
     */
    protected function set_response_handler($handler)
    {
    }
    /**
     * Maybe force TLS v1.2 requests.
     *
     * @since 4.4.0
     *
     * @param resource $handle the cURL handle returned by curl_init() (passed by reference)
     * @param array $r the HTTP request arguments
     * @param $url string the request URL
     */
    public function set_tls_1_2_request($handle, $r, $url)
    {
    }
    /**
     * Determines if TLS v1.2 is required for API requests.
     *
     * @since 4.4.0
     * @deprecated 5.5.2
     *
     * @return bool
     */
    public function require_tls_1_2()
    {
    }
    /**
     * Determines if TLS 1.2 is available.
     *
     * @since 4.6.5
     *
     * @return bool
     */
    public function is_tls_1_2_available()
    {
    }
}
namespace SkyVerge\WooCommerce\PluginFramework\v6_0_1\API;

/**
 * Abstract API base class with caching support.
 *
 * Plugins which need to use API request caching should use extend this API base class rather than SV_WC_API_Base.
 * In addition, each request class which needs caching, should use the Cacheable_Request_Trait.
 *
 * @since 5.10.10
 */
#[\AllowDynamicProperties]
abstract class Abstract_Cacheable_API_Base extends \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_API_Base
{
    /** @var bool whether the response was loaded from cache */
    protected $response_loaded_from_cache = false;
    /**
     * Simple wrapper for wp_remote_request() so child classes can override this
     * and provide their own transport mechanism if needed, e.g. a custom
     * cURL implementation
     *
     * @since 5.10.10
     *
     * @param string $request_uri
     * @param string $request_args
     * @return array|\WP_Error
     */
    protected function do_remote_request($request_uri, $request_args)
    {
    }
    /**
     * Handle and parse the response
     *
     * @since 5.10.10
     *
     * @param array|\WP_Error $response response data
     * @throws SV_WC_API_Exception network issues, timeouts, API errors, etc
     * @return SV_WC_API_Request|object request class instance that implements SV_WC_API_Request
     */
    protected function handle_response($response)
    {
    }
    /**
     * Resets the API response members to their default values.
     *
     * @since 5.10.10
     */
    protected function reset_response()
    {
    }
    /**
     * Gets the request transient key for the current plugin and request data.
     *
     * Request transients can be disabled by using the filter below.
     *
     * @since 5.10.10
     *
     * @return string transient key
     */
    protected function get_request_transient_key(): string
    {
    }
    /**
     * Checks whether the current request is cacheable.
     *
     * @since 5.10.10
     *
     * @return bool
     */
    protected function is_request_cacheable(): bool
    {
    }
    /**
     * Gets the cache lifetime for the current request.
     *
     * @since 5.10.10
     *
     * @return int
     */
    protected function get_request_cache_lifetime(): int
    {
    }
    /**
     * Determine whether the response was loaded from cache or not.
     *
     * @since 5.10.10
     *
     * @return bool
     */
    protected function is_response_loaded_from_cache(): bool
    {
    }
    /**
     * Loads the response for the current request from the cache, if available.
     *
     * @since 5.10.10
     *
     * @return array|null
     */
    protected function load_response_from_cache()
    {
    }
    /**
     * Saves the response to cache.
     *
     * @since 5.10.10
     *
     * @param array $response
     */
    protected function save_response_to_cache(array $response)
    {
    }
    /**
     * Gets the response data for broadcasting the request.
     *
     * Adds a flag to the response data indicating whether the response was loaded from cache.
     *
     * @since 5.10.10
     *
     * @return array
     */
    protected function get_request_data_for_broadcast(): array
    {
    }
    /**
     * Gets the response data for broadcasting the request.
     *
     * Adds a flag to the response data indicating whether the response was loaded from cache.
     *
     * @since 5.10.10
     *
     * @return array
     */
    protected function get_response_data_for_broadcast(): array
    {
    }
}
namespace SkyVerge\WooCommerce\PluginFramework\v6_0_1\API\Traits;

/**
 * This trait can be used to add response caching support to API requests.
 *
 * It is intended to be used by a class implementing the SV_WC_API_Request interface. Caching itself is handled
 * by the Abstract_Cacheable_API_Base class, which the API handler should abstract in order to support caching.
 *
 * Adding `use Cacheable_Request_Trait;` to a request class will declare caching support for that request class.
 * It's also possible to customize the cache lifetime by setting it in the request constructor.
 */
trait Cacheable_Request_Trait
{
    /** @var int the cache lifetime for the request, in seconds, defaults to 86400 (24 hours) */
    protected $cache_lifetime = 86400;
    /** @var bool whether to force a fresh request regardless if a cached response is available */
    protected $force_refresh = false;
    /** @var bool whether to the current request should be cached or not */
    protected $should_cache = true;
    /**
     * Sets the cache lifetime for this request.
     *
     * @since 5.10.10
     *
     * @param int $lifetime cache lifetime, in seconds. Set to 0 for unlimited
     * @return self
     */
    public function set_cache_lifetime(int $lifetime)
    {
    }
    /**
     * Gets the cache lifetime for this request.
     *
     * @since 5.10.10
     *
     * @return int
     */
    public function get_cache_lifetime(): int
    {
    }
    /**
     * Sets whether a fresh request should be attempted, regardless if a cached response is available.
     *
     * @since 5.10.10
     *
     * @param bool $value whether to force a fresh request, or not
     * @return self
     */
    public function set_force_refresh(bool $value)
    {
    }
    /**
     * Determines whether a fresh request should be attempted.
     *
     * @since 5.10.10
     *
     * @return bool
     */
    public function should_refresh(): bool
    {
    }
    /**
     * Sets whether the request's response should be stored in cache.
     *
     * @since 5.10.10
     *
     * @param bool $value whether to cache the request, or not
     * @return self
     */
    public function set_should_cache(bool $value)
    {
    }
    /**
     * Determines whether the request's response should be stored in cache.
     *
     * @since 5.10.10
     *
     * @return bool
     */
    public function should_cache(): bool
    {
    }
    /**
     * Bypasses caching for this request completely.
     *
     * When called, sets the `force_refresh` flag to true and `should_cache` flag to false
     *
     * @since 5.10.10
     *
     * @return self
     */
    public function bypass_cache()
    {
    }
}
namespace SkyVerge\WooCommerce\PluginFramework\v6_0_1;

/**
 * API Request
 */
interface SV_WC_API_Request
{
    /**
     * Returns the method for this request: one of HEAD, GET, PUT, PATCH, POST, DELETE
     *
     * @since 4.0.0
     * @return string the request method, or null to use the API default
     */
    public function get_method();
    /**
     * Returns the request path
     *
     * @since 4.0.0
     * @return string the request path, or '' if none
     */
    public function get_path();
    /**
     * Gets the request query params.
     *
     * @since 5.0.0
     *
     * @return array
     */
    public function get_params();
    /**
     * Gets the request data.
     *
     * @since 5.0.0
     *
     * @return array
     */
    public function get_data();
    /**
     * Returns the string representation of this request
     *
     * @since 2.2.0
     * @return string the request
     */
    public function to_string();
    /**
     * Returns the string representation of this request with any and all
     * sensitive elements masked or removed
     *
     * @since 2.2.0
     * @return string the request, safe for logging/displaying
     */
    public function to_string_safe();
}
/**
 * Base JSON API request class.
 *
 * @since 4.3.0
 */
#[\AllowDynamicProperties]
abstract class SV_WC_API_JSON_Request implements \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_API_Request
{
    /** @var string The request method, one of HEAD, GET, PUT, PATCH, POST, DELETE */
    protected $method;
    /** @var string The request path */
    protected $path;
    /** @var array The request parameters, if any */
    protected $params = array();
    /** @var array the request data */
    protected $data = array();
    /**
     * Get the request method.
     *
     * @since 4.3.0
     * @see SV_WC_API_Request::get_method()
     * @return string
     */
    public function get_method()
    {
    }
    /**
     * Get the request path.
     *
     * @since 4.3.0
     * @see SV_WC_API_Request::get_path()
     * @return string
     */
    public function get_path()
    {
    }
    /**
     * Get the request parameters.
     *
     * @since 4.3.0
     * @see SV_WC_API_Request::get_params()
     * @return array
     */
    public function get_params()
    {
    }
    /**
     * Get the request data.
     *
     * @since 4.5.0
     * @return array
     */
    public function get_data()
    {
    }
    /** API Helper Methods ******************************************************/
    /**
     * Get the string representation of this request.
     *
     * @since 4.3.0
     * @see SV_WC_API_Request::to_string()
     * @return string
     */
    public function to_string()
    {
    }
    /**
     * Get the string representation of this request with any and all sensitive elements masked
     * or removed.
     *
     * @since 4.3.0
     * @see SV_WC_API_Request::to_string_safe()
     * @return string
     */
    public function to_string_safe()
    {
    }
}
/**
 * API Response
 */
interface SV_WC_API_Response
{
    /**
     * Returns the string representation of this request
     *
     * @since 2.2.0
     * @return string the request
     */
    public function to_string();
    /**
     * Returns the string representation of this request with any and all
     * sensitive elements masked or removed
     *
     * @since 2.2.0
     * @return string the request, safe for logging/displaying
     */
    public function to_string_safe();
}
/**
 * Base JSON API response class.
 *
 * @since 4.3.0
 */
#[\AllowDynamicProperties]
abstract class SV_WC_API_JSON_Response implements \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_API_Response
{
    /** @var string string representation of this response */
    protected $raw_response_json;
    /** @var mixed decoded response data */
    public $response_data;
    /**
     * Build the data object from the raw JSON.
     *
     * @since 4.3.0
     * @param string $raw_response_json The raw JSON
     */
    public function __construct($raw_response_json)
    {
    }
    /**
     * Magic accessor for response data attributes
     *
     * @since 4.3.0
     * @param string $name The attribute name to get.
     * @return mixed The attribute value
     */
    public function __get($name)
    {
    }
    /**
     * Get the string representation of this response.
     *
     * @since 4.3.0
     * @see SV_WC_API_Response::to_string()
     * @return string
     */
    public function to_string()
    {
    }
    /**
     * Get the string representation of this response with any and all sensitive elements masked
     * or removed.
     *
     * @since 4.3.0
     * @see SV_WC_API_Response::to_string_safe()
     * @return string
     */
    public function to_string_safe()
    {
    }
}
/**
 * Base XML API request class.
 *
 * @since 4.3.0
 */
#[\AllowDynamicProperties]
abstract class SV_WC_API_XML_Request implements \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_API_Request
{
    /** @var string the request method, one of HEAD, GET, PUT, PATCH, POST, DELETE */
    protected $method;
    /** @var string the request path */
    protected $path = '';
    /** @var array the request parameters */
    protected $params = array();
    /** @var array request data */
    protected $request_data;
    /** @var string root element for XML */
    protected $root_element;
    /** @var \XMLWriter $xml object */
    protected $xml;
    /** @var string complete request XML */
    protected $request_xml;
    /**
     * Get the method for this request.
     *
     * @since 4.3.0
     * @see SV_WC_API_Request::get_method()
     * @return null|string
     */
    public function get_method()
    {
    }
    /**
     * Get the path for this request.
     *
     * @since 4.3.0
     * @see SV_WC_API_Request::get_path()
     * @return string
     */
    public function get_path()
    {
    }
    /**
     * Get the request parameters.
     *
     * @since 4.5.0
     * @return array
     */
    public function get_params()
    {
    }
    /**
     * Convert the request data into XML.
     *
     * @since 4.3.0
     * @return string
     */
    protected function to_xml()
    {
    }
    /**
     * Gets the request data to be converted to XML.
     *
     * @since 5.0.0
     * @return array
     */
    public function get_data()
    {
    }
    /**
     * Get the string representation of this request
     *
     * @since 4.3.0
     * @see SV_WC_API_Request::to_string()
     * @return string
     */
    public function to_string()
    {
    }
    /**
     * Get the string representation of this request with any and all sensitive elements masked
     * or removed.
     *
     * @since 4.3.0
     * @see SV_WC_API_Request::to_string_safe()
     * @return string
     */
    public function to_string_safe()
    {
    }
    /**
     * Helper method for making XML pretty, suitable for logging or rendering
     *
     * @since 4.3.0
     * @param string $xml_string ugly XML string
     * @return string
     */
    public function prettify_xml($xml_string)
    {
    }
    /**
     * Concrete classes must implement this method to return the root element
     * for the XML document
     *
     * @since 4.3.0
     * @return string
     */
    abstract protected function get_root_element();
}
/**
 * Base XML API response class.
 *
 * @since 4.3.0
 */
#[\AllowDynamicProperties]
abstract class SV_WC_API_XML_Response implements \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_API_Response
{
    /** @var string string representation of this response */
    protected $raw_response_xml;
    /** @var \SimpleXMLElement XML object */
    protected $response_xml;
    /** @var array|mixed|object XML data after conversion into an usable object */
    protected $response_data;
    /**
     * Build an XML object from the raw response.
     *
     * @since 4.3.0
     * @param string $raw_response_xml The raw response XML
     */
    public function __construct($raw_response_xml)
    {
    }
    /**
     * Magic method for getting XML element data. Note the response data has
     * already been casted into simple data types (string,int,array) and does not
     * require further casting in order to use.
     *
     * @since 4.3.0
     * @param string $key
     * @return mixed
     */
    public function __get($key)
    {
    }
    /**
     * Get the string representation of this response.
     *
     * @since 4.3.0
     * @return string
     */
    public function to_string()
    {
    }
    /**
     * Get the string representation of this response with any and all sensitive elements masked
     * or removed.
     *
     * @since 4.3.0
     * @see SV_WC_API_Response::to_string_safe()
     * @return string
     */
    public function to_string_safe()
    {
    }
}
/**
 * Plugin Framework Exception - generic Exception
 */
#[\AllowDynamicProperties]
class SV_WC_Plugin_Exception extends \Exception
{
}
/**
 * Plugin Framework API Exception - generic API Exception
 */
#[\AllowDynamicProperties]
class SV_WC_API_Exception extends \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Plugin_Exception
{
}
/**
 * SkyVerge Admin Notice Handler Class
 *
 * The purpose of this class is to provide a facility for displaying
 * conditional (often dismissible) admin notices during a single page
 * request
 *
 * @since 3.0.0
 */
#[\AllowDynamicProperties]
class SV_WC_Admin_Notice_Handler
{
    /** @var SV_WC_Plugin the plugin */
    private $plugin;
    /** @var array associative array of id to notice text */
    private $admin_notices = array();
    /** @var boolean static member to enforce a single rendering of the admin notice placeholder element */
    private static $admin_notice_placeholder_rendered = false;
    /** @var boolean static member to enforce a single rendering of the admin notice javascript */
    private static $admin_notice_js_rendered = false;
    /**
     * Initialize and setup the Admin Notice Handler
     *
     * @since 3.0.0
     */
    public function __construct($plugin)
    {
    }
    /**
     * Adds the given $message as a dismissible notice identified by $message_id,
     * unless the notice has been dismissed, or we're on the plugin settings page
     *
     * @since 3.0.0
     * @param string $message the notice message to display
     * @param string $message_id the message id
     * @param array $params {
     *     Optional parameters.
     *
     *     @type bool $dismissible             If the notice should be dismissible
     *     @type bool $always_show_on_settings If the notice should be forced to display on the
     *                                         plugin settings page, regardless of `$dismissible`.
     *     @type string $notice_class          Additional classes for the notice.
     * }
     */
    public function add_admin_notice($message, $message_id, $params = array())
    {
    }
    /**
     * Returns true if the identified notice hasn't been cleared, or we're on
     * the plugin settings page (where notices are always displayed)
     *
     * @since 3.0.0
     * @param string $message_id the message id
     * @param array $params {
     *     Optional parameters.
     *
     *     @type bool $dismissible             If the notice should be dismissible
     *     @type bool $always_show_on_settings If the notice should be forced to display on the
     *                                         plugin settings page, regardless of `$dismissible`.
     * }
     * @return bool
     */
    public function should_display_notice($message_id, $params = array())
    {
    }
    /**
     * Render any admin notices, as well as the admin notice placeholder
     *
     * @since 3.0.0
     * @param boolean $is_visible true if the notices should be immediately visible, false otherwise
     */
    public function render_admin_notices($is_visible = true)
    {
    }
    /**
     * Render any delayed admin notices, which have not yet already been rendered
     *
     * @since 3.0.0
     */
    public function render_delayed_admin_notices()
    {
    }
    /**
     * Render a single admin notice
     *
     * @since 3.0.0
     * @param string $message the notice message to display
     * @param string $message_id the message id
     * @param array $params {
     *     Optional parameters.
     *
     *     @type bool $dismissible             If the notice should be dismissible
     *     @type bool $is_visible              If the notice should be immediately visible
     *     @type bool $always_show_on_settings If the notice should be forced to display on the
     *                                         plugin settings page, regardless of `$dismissible`.
     *     @type string $notice_class          Additional classes for the notice.
     * }
     */
    public function render_admin_notice($message, $message_id, $params = array())
    {
    }
    /**
     * Render the javascript to handle the notice "dismiss" functionality
     *
     * @since 3.0.0
     */
    public function render_admin_notice_js()
    {
    }
    /**
     * Marks the identified admin notice as dismissed for the given user
     *
     * @since 3.0.0
     * @param string $message_id the message identifier
     * @param int $user_id optional user identifier, defaults to current user
     */
    public function dismiss_notice($message_id, $user_id = null)
    {
    }
    /**
     * Marks the identified admin notice as not dismissed for the identified user
     *
     * @since 3.0.0
     * @param string $message_id the message identifier
     * @param int $user_id optional user identifier, defaults to current user
     */
    public function undismiss_notice($message_id, $user_id = null)
    {
    }
    /**
     * Returns true if the identified admin notice has been dismissed for the
     * given user
     *
     * @since 3.0.0
     * @param string $message_id the message identifier
     * @param int $user_id optional user identifier, defaults to current user
     * @return boolean true if the message has been dismissed by the admin user
     */
    public function is_notice_dismissed($message_id, $user_id = null)
    {
    }
    /**
     * Returns the full set of dismissed notices for the user identified by
     * $user_id, for this plugin
     *
     * @since 3.0.0
     * @param int $user_id optional user identifier, defaults to current user
     * @return array of message id to dismissed status (true or false)
     */
    public function get_dismissed_notices($user_id = null)
    {
    }
    /** AJAX methods ******************************************************/
    /**
     * Dismiss the identified notice
     *
     * @since 3.0.0
     */
    public function handle_dismiss_notice()
    {
    }
    /** Getter methods ******************************************************/
    /**
     * Get the plugin
     *
     * @since 3.0.0
     * @return SV_WC_Plugin returns the plugin instance
     */
    protected function get_plugin()
    {
    }
}
/**
 * SkyVerge Helper Class
 *
 * The purpose of this class is to centralize common utility functions that
 * are commonly used in SkyVerge plugins
 *
 * @since 2.2.0
 */
#[\AllowDynamicProperties]
class SV_WC_Helper
{
    /** encoding used for mb_*() string functions */
    const MB_ENCODING = 'UTF-8';
    /** String manipulation functions (all multi-byte safe) ***************/
    /**
     * Returns true if the haystack string starts with needle
     *
     * Note: case-sensitive
     *
     * @since 2.2.0
     * @param string $haystack
     * @param string $needle
     * @return bool
     */
    public static function str_starts_with($haystack, $needle)
    {
    }
    /**
     * Return true if the haystack string ends with needle
     *
     * Note: case-sensitive
     *
     * @since 2.2.0
     * @param string $haystack
     * @param string $needle
     * @return bool
     */
    public static function str_ends_with($haystack, $needle)
    {
    }
    /**
     * Returns true if the needle exists in haystack
     *
     * Note: case-sensitive
     *
     * @since 2.2.0
     * @param string $haystack
     * @param string $needle
     * @return bool
     */
    public static function str_exists($haystack, $needle)
    {
    }
    /**
     * Truncates a given $string after a given $length if string is longer than
     * $length. The last characters will be replaced with the $omission string
     * for a total length not exceeding $length
     *
     * @since 2.2.0
     * @param string $string text to truncate
     * @param int $length total desired length of string, including omission
     * @param string $omission omission text, defaults to '...'
     * @return string
     */
    public static function str_truncate($string, $length, $omission = '...')
    {
    }
    /**
     * Returns a string with all non-ASCII characters removed.
     *
     * This is useful for any string functions that expect only ASCII chars and can't safely handle UTF-8.
     * Note this only allows ASCII chars in the range 33-126 (newlines/carriage returns are stripped).
     *
     * @since 2.2.0
     *
     * @param string|mixed $string string to make ASCII
     * @return string|false
     */
    public static function str_to_ascii($string)
    {
    }
    /**
     * Return a string with insane UTF-8 characters removed, like invisible
     * characters, unused code points, and other weirdness. It should
     * accept the common types of characters defined in Unicode.
     *
     * The following are allowed characters:
     *
     * p{L} - any kind of letter from any language
     * p{Mn} - a character intended to be combined with another character without taking up extra space (e.g. accents, umlauts, etc.)
     * p{Mc} - a character intended to be combined with another character that takes up extra space (vowel signs in many Eastern languages)
     * p{Nd} - a digit zero through nine in any script except ideographic scripts
     * p{Zs} - a whitespace character that is invisible, but does take up space
     * p{P} - any kind of punctuation character
     * p{Sm} - any mathematical symbol
     * p{Sc} - any currency sign
     *
     * pattern definitions from http://www.regular-expressions.info/unicode.html
     *
     * @since 4.0.0
     *
     * @param string $string
     * @return string
     */
    public static function str_to_sane_utf8($string)
    {
    }
    /**
     * Formats a number as a percentage.
     *
     * @since 5.10.9
     *
     * @NOTE The second and third parameter below are directly passed to {@see wc_format_decimal()} in case the decimal output or rounding needs to be tweaked.
     *
     * @param float|int|string $fraction the fraction to format as percentage
     * @param int|string|false number of decimal points to use, empty string to use {@see woocommerce_price_num_decimals(), or false to avoid rounding (optional, default).
     * @param bool $trim_zeros from end of string (optional, default false)
     * @return string fraction formatted as percentage
     */
    public static function format_percentage($fraction, $decimal_points = false, $trim_zeros = false)
    {
    }
    /**
     * Helper method to check if the multibyte extension is loaded, which
     * indicates it's safe to use the mb_*() string methods
     *
     * @since 2.2.0
     * @return bool
     */
    protected static function multibyte_loaded()
    {
    }
    /** Array functions ***************************************************/
    /**
     * Insert the given element after the given key in the array
     *
     * Sample usage:
     *
     * given
     *
     * array( 'item_1' => 'foo', 'item_2' => 'bar' )
     *
     * array_insert_after( $array, 'item_1', array( 'item_1.5' => 'w00t' ) )
     *
     * becomes
     *
     * array( 'item_1' => 'foo', 'item_1.5' => 'w00t', 'item_2' => 'bar' )
     *
     * @since 2.2.0
     * @param array $array array to insert the given element into
     * @param string $insert_key key to insert given element after
     * @param array $element element to insert into array
     * @return array
     */
    public static function array_insert_after(array $array, $insert_key, array $element)
    {
    }
    /**
     * Convert array into XML by recursively generating child elements
     *
     * First instantiate a new XML writer object:
     *
     * $xml = new XMLWriter();
     *
     * Open in memory (alternatively you can use a local URI for file output)
     *
     * $xml->openMemory();
     *
     * Then start the document
     *
     * $xml->startDocument( '1.0', 'UTF-8' );
     *
     * Don't forget to end the document and output the memory
     *
     * $xml->endDocument();
     *
     * $your_xml_string = $xml->outputMemory();
     *
     * @since 2.2.0
     *
     * @param \XMLWriter $xml_writer XML writer instance
     * @param string|array $element_key name for element, e.g. <per_page>
     * @param string|array $element_value value for element, e.g. 100
     */
    public static function array_to_xml($xml_writer, $element_key, $element_value = array())
    {
    }
    /**
     * Lists an array as text.
     *
     * Takes an array and returns a list like "one, two, three, and four"
     * with a (mandatory) oxford comma.
     *
     * @since 5.2.0
     *
     * @param array $items items to list
     * @param string|null $conjunction coordinating conjunction, like "or" or "and"
     * @param string $separator list separator, like a comma
     * @return string
     */
    public static function list_array_items(array $items, $conjunction = null, $separator = '')
    {
    }
    /**
     * Joins the array elements into a string using natural language.
     *
     * For example, the array `['US', 'Canada', 'Mexico']` would become `'US, Canada, and Mexico'`.
     *
     * When using this method to create user-facing text, it is recommended to supply a localized conjunction.
     *
     * @since 5.11.8
     *
     * @param array<scalar> $array
     * @param string|null $conjunction one of 'and' or 'or'
     * @param string|null $pattern a custom sprintf pattern, with placeholders %1$s and %2$s
     * @return string
     */
    public static function array_join_natural(array $array, ?string $conjunction = 'and', ?string $pattern = ''): string
    {
    }
    /** Number helper functions *******************************************/
    /**
     * Format a number with 2 decimal points, using a period for the decimal
     * separator and no thousands separator.
     *
     * Commonly used for payment gateways which require amounts in this format.
     *
     * @deprecated 5.15.0 - use {@see NumberHelper::format()} instead
     *
     * @since 3.0.0
     * @param float $number
     * @return string
     */
    public static function number_format($number)
    {
    }
    /** WooCommerce helper functions **************************************/
    /**
     * Gets order line items (products) as an array of objects.
     *
     * Object properties:
     *
     * + id          - item ID
     * + name        - item name, usually product title, processed through htmlentities()
     * + description - formatted item meta (e.g. Size: Medium, Color: blue), processed through htmlentities()
     * + quantity    - item quantity
     * + item_total  - item total (line total divided by quantity, excluding tax & rounded)
     * + line_total  - line item total (excluding tax & rounded)
     * + meta        - formatted item meta array
     * + product     - item product or null if getting product from item failed
     * + item        - raw item array
     *
     * @since 3.0.0
     *
     * @param \WC_Order $order
     * @return \stdClass[] array of line item objects
     */
    public static function get_order_line_items($order): array
    {
    }
    /**
     * Determines if an order contains only virtual products.
     *
     * @since 4.5.0
     *
     * @param \WC_Order $order the order object
     * @return bool
     */
    public static function is_order_virtual(\WC_Order $order)
    {
    }
    /**
     * Determines if a shop has any published virtual products.
     *
     * @since 5.10.0
     *
     * @return bool
     */
    public static function shop_has_virtual_products()
    {
    }
    /**
     * Safely gets a value from $_POST.
     *
     * If the expected data is a string also trims it.
     *
     * @since 5.5.0
     *
     * @param string $key posted data key
     * @param int|float|array|bool|null|string $default default data type to return (default empty string)
     * @return int|float|array|bool|null|string posted data value if key found, or default
     */
    public static function get_posted_value($key, $default = '')
    {
    }
    /**
     * Safely gets a value from $_REQUEST.
     *
     * If the expected data is a string also trims it.
     *
     * @since 5.5.0
     *
     * @param string $key posted data key
     * @param int|float|array|bool|null|string $default default data type to return (default empty string)
     * @return int|float|array|bool|null|string posted data value if key found, or default
     */
    public static function get_requested_value($key, $default = '')
    {
    }
    /**
     * Get the count of notices added, either for all notices (default) or for one
     * particular notice type specified by $notice_type.
     *
     * WC notice functions are not available in the admin
     *
     * @since 3.0.2
     * @param string $notice_type The name of the notice type - either error, success or notice. [optional]
     * @return int
     */
    public static function wc_notice_count($notice_type = '')
    {
    }
    /**
     * Add and store a notice.
     *
     * WC notice functions are not available in the admin
     *
     * @since 3.0.2
     * @param string $message The text to display in the notice.
     * @param string $notice_type The singular name of the notice type - either error, success or notice. [optional]
     */
    public static function wc_add_notice($message, $notice_type = 'success')
    {
    }
    /**
     * Print a single notice immediately
     *
     * WC notice functions are not available in the admin
     *
     * @since 3.0.2
     * @param string $message The text to display in the notice.
     * @param string $notice_type The singular name of the notice type - either error, success or notice. [optional]
     */
    public static function wc_print_notice($message, $notice_type = 'success')
    {
    }
    /**
     * Gets the full URL to the log file for a given $handle
     *
     * @since 4.0.0
     * @param string $handle log handle
     * @return string URL to the WC log file identified by $handle
     */
    public static function get_wc_log_file_url($handle)
    {
    }
    /**
     * Gets the current WordPress site name.
     *
     * This is helpful for retrieving the actual site name instead of the
     * network name on multisite installations.
     *
     * @since 4.6.0
     * @return string
     */
    public static function get_site_name()
    {
    }
    /**
     * Determines whether we're on the WooCommerce checkout "pay page".
     *
     * @since 5.12.7
     * @return bool
     */
    public static function isCheckoutPayPage(): bool
    {
    }
    /** JavaScript helper functions ***************************************/
    /**
     * Enhanced search JavaScript (Select2)
     *
     * Enqueues JavaScript required for AJAX search with Select2.
     *
     * @codeCoverageIgnore no need to unit test this since it's mostly JavaScript
     *
     * @since 3.1.0
     */
    public static function render_select2_ajax()
    {
    }
    /** Framework translation functions ***********************************/
    /**
     * Gettext `__()` wrapper for framework-translated strings
     *
     * Warning! This function should only be used if an existing
     * translation from the framework is to be used. It should
     * never be called for plugin-specific or untranslated strings!
     * Untranslated = not registered via string literal.
     *
     * @since 4.1.0
     * @param string $text
     * @return string translated text
     */
    public static function f__($text)
    {
    }
    /**
     * Gettext `_e()` wrapper for framework-translated strings
     *
     * Warning! This function should only be used if an existing
     * translation from the framework is to be used. It should
     * never be called for plugin-specific or untranslated strings!
     * Untranslated = not registered via string literal.
     *
     * @since 4.1.0
     * @param string $text
     */
    public static function f_e($text)
    {
    }
    /**
     * Gettext `_x()` wrapper for framework-translated strings
     *
     * Warning! This function should only be used if an existing
     * translation from the framework is to be used. It should
     * never be called for plugin-specific or untranslated strings!
     * Untranslated = not registered via string literal.
     *
     * @since 4.1.0
     *
     * @param string $text
     * @param string $context
     * @return string translated text
     */
    public static function f_x($text, $context)
    {
    }
    /** Misc functions ****************************************************/
    /**
     * Gets the WordPress current screen.
     *
     * @see get_current_screen() replacement which is always available, unlike the WordPress core function
     *
     * @since 5.4.2
     *
     * @return \WP_Screen|null
     */
    public static function get_current_screen()
    {
    }
    /**
     * Checks if the current screen matches a specified ID.
     *
     * This helps avoiding using the get_current_screen() function which is not always available,
     * or setting the substitute global $current_screen every time a check needs to be performed.
     *
     * @since 5.4.2
     *
     * @param string $id id (or property) to compare
     * @param string $prop optional property to compare, defaults to screen id
     * @return bool
     */
    public static function is_current_screen($id, $prop = 'id')
    {
    }
    /**
     * Determines if viewing an enhanced admin screen.
     *
     * @since 5.6.0
     *
     * @return bool
     */
    public static function is_enhanced_admin_screen(): bool
    {
    }
    /**
     * Determines whether the new WooCommerce enhanced navigation is supported and enabled.
     *
     * @since 5.10.6
     *
     * @deprecated with no alternatives
     *
     * @return bool
     */
    public static function is_wc_navigation_enabled(): bool
    {
    }
    /**
     * Determines whether Woo's Enhanced Eavigation feature is enabled.
     *
     * @since 5.15.1
     *
     * @return bool
     */
    protected static function isEnhancedNavigationFeatureEnabled(): bool
    {
    }
    /**
     * Logs a notice for the Enhanced Navigation feature being deprecated.
     *
     * @since 5.15.1
     *
     * @return void
     */
    protected static function enhancedNavigationDeprecationNotice(): void
    {
    }
    /**
     * Determines if the current request is for a WC REST API endpoint.
     *
     * @see \WooCommerce::is_rest_api_request()
     *
     * @since 5.9.0
     *
     * @return bool
     */
    public static function is_rest_api_request()
    {
    }
    /**
     * Displays a notice if the provided hook has not yet run.
     *
     * @since 5.2.0
     *
     * @param string $hook action hook to check
     * @param string $method method/function name
     * @param string $version version the notice was added
     */
    public static function maybe_doing_it_early($hook, $method, $version)
    {
    }
    /**
     * Triggers a PHP error.
     *
     * This wrapper method ensures AJAX isn't broken in the process.
     *
     * @since 4.6.0
     * @param string $message the error message
     * @param int $type Optional. The error type. Defaults to E_USER_NOTICE
     */
    public static function trigger_error($message, $type = E_USER_NOTICE)
    {
    }
    /**
     * Converts an array of strings to a comma separated list of strings, escaped for SQL use.
     *
     * This can be safely used in SQL IN clauses.
     *
     * @since 5.10.9
     *
     * @param string[] $values
     * @return string
     */
    public static function get_escaped_string_list(array $values)
    {
    }
    /**
     * Converts an array of numerical integers into a comma separated list of IDs.
     *
     * This can be safely used for SQL IN clauses.
     *
     * @since 5.10.9
     *
     * @param int[] $ids
     * @return string
     */
    public static function get_escaped_id_list(array $ids)
    {
    }
    /**
     * Gets value of a meta key from WooCommerce object based on its data type.
     *
     * @param \WP_Post|\WC_Data $object
     * @param string $field
     * @param bool $single
     *
     * @return array|mixed|string|null
     */
    public static function getWooCommerceObjectMetaValue($object, string $field, bool $single = true)
    {
    }
    /**
     * Adds local compatibility for Woo's internal OrderUtil::get_post_or_object_meta() method.
     *
     * @param \WP_Post|null $post
     * @param \WC_Data|null $data
     * @param string       $key
     * @param bool         $single
     *
     * @return array|false|mixed|string
     */
    public static function getPostOrObjectMetaCompat(?\WP_Post $post, ?\WC_Data $data, string $key, bool $single)
    {
    }
}
/**
 * SkyVerge Hook Deprecator Class
 *
 * This class handles triggering PHP notices for deprecated and removed hooks
 *
 * @since 4.3.0
 */
#[\AllowDynamicProperties]
class SV_WC_Hook_Deprecator
{
    protected \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Plugin $plugin;
    /** @var string plugin name (deprecated) */
    protected $plugin_name;
    /** @var array deprecated/removed hooks */
    protected $hooks;
    /**
     * Setup class
     *
     * @param string|SV_WC_Plugin $plugin Plugin instance or string name of plugin (latter is deprecated)
     * @param array $hooks
     *
     * @since 5.15.7 The `$plugin_name` parameter has been renamed to `$plugin` and now expects an `SV_WC_Plugin`
     *               object. This change is to avoid loading translations too early. Support for `$plugin` as
     *               plugin name remains for back-compat though it will likely result in `_load_textdomain_just_in_time`
     *               notices being logged for the current extension.
     */
    public function __construct($plugin, $hooks)
    {
    }
    /**
     * Sets the deprecated hook defaults.
     *
     * @since 4.5.0
     * @param array $hook_params the hook parameters
     * @return array
     */
    protected function set_hook_defaults($hook_params)
    {
    }
    /**
     * Map each deprecated hook to its replacement.
     *
     * @since 4.5.0
     */
    protected function map_deprecated_hooks()
    {
    }
    /**
     * Map a deprecated/renamed hook to a new one.
     *
     * This method works by hooking into the new, renamed version of the action/filter
     * and checking if any actions/filters are hooked into the old hook. It then runs
     * these and applies the data modifications in the new hook.
     *
     * @since 4.5.0
     * @return mixed
     */
    public function map_deprecated_hook()
    {
    }
    /**
     * Trigger a notice when other actors have attached callbacks to hooks that
     * are either deprecated or removed. This only runs when WP_DEBUG is on.
     *
     * @since 4.3.0
     */
    public function trigger_deprecated_errors()
    {
    }
    /**
     * Trigger the deprecated/removed notice
     *
     * @since 4.3.0
     * @param string $old_hook_name deprecated/removed hook name
     * @param array $hook {
     *   @type string $version version the hook was deprecated/removed in
     *   @type bool $removed if present and true, the message will indicate the hook was removed instead of deprecated
     *   @type string|bool $replacement if present and a string, the message will indicate the replacement hook to use,
     *     otherwise (if bool and false) the message will indicate there is no replacement available.
     * }
     */
    protected function trigger_error($old_hook_name, $hook)
    {
    }
    /**
     * Gets the plugin name.
     *
     * @return string
     */
    protected function getPluginName(): string
    {
    }
}
/**
 * WooCommerce Compatibility Utility Class
 *
 * The unfortunate purpose of this class is to provide a single point of
 * compatibility functions for dealing with supporting multiple versions
 * of WooCommerce and various extensions.
 *
 * The expected procedure is to remove methods from this class, using the
 * latest ones directly in code, as support for older versions of WooCommerce
 * are dropped.
 *
 * Current Compatibility
 * + Core 3.0.9 - 3.7.x
 * + Subscriptions 2.2.x
 *
 * // TODO: move to /compatibility
 *
 * @since 2.0.0
 */
#[\AllowDynamicProperties]
class SV_WC_Plugin_Compatibility
{
    /**
     * Retrieves a list of the latest available WooCommerce versions.
     *
     * Excludes betas, release candidates and development versions.
     * Versions are sorted from most recent to least recent.
     *
     * @since 5.4.1
     *
     * @return string[] array of semver strings
     */
    public static function get_latest_wc_versions()
    {
    }
    /**
     * Gets the version of the currently installed WooCommerce.
     *
     * @since 3.0.0
     *
     * @return string|null Woocommerce version number or null if undetermined
     */
    public static function get_wc_version()
    {
    }
    /**
     * Determines if the installed WooCommerce version matches a specific version.
     *
     * @since 5.5.0
     *
     * @param string $version semver
     * @return bool
     */
    public static function is_wc_version($version)
    {
    }
    /**
     * Determines if the installed version of WooCommerce is equal or greater than a given version.
     *
     * @since 4.7.3
     *
     * @param string $version version number to compare
     * @return bool
     */
    public static function is_wc_version_gte($version)
    {
    }
    /**
     * Determines if the installed version of WooCommerce is lower than a given version.
     *
     * @since 4.7.3
     *
     * @param string $version version number to compare
     * @return bool
     */
    public static function is_wc_version_lt($version)
    {
    }
    /**
     * Determines if the installed version of WooCommerce is greater than a given version.
     *
     * @since 2.0.0
     *
     * @param string $version the version to compare
     * @return bool
     */
    public static function is_wc_version_gt($version)
    {
    }
    /**
     * Determines whether the enhanced admin is available.
     *
     * This checks both for WooCommerce v4.0+ and the underlying package availability.
     *
     * @since 5.6.0
     *
     * @return bool
     */
    public static function is_enhanced_admin_available(): bool
    {
    }
    /** WordPress core ******************************************************/
    /**
     * Normalizes a WooCommerce page screen ID.
     *
     * Needed because WordPress uses a menu title (which is translatable), not slug, to generate screen ID.
     * See details in: https://core.trac.wordpress.org/ticket/21454
     * TODO: Add WP version check when https://core.trac.wordpress.org/ticket/18857 is addressed {BR 2016-12-12}
     *
     * @since 4.6.0
     *
     * @param string $slug slug for the screen ID to normalize (minus `woocommerce_page_`)
     * @return string normalized screen ID
     */
    public static function normalize_wc_screen_id($slug = 'wc-settings')
    {
    }
    /**
     * Converts a shorthand byte value to an integer byte value.
     *
     * Wrapper for wp_convert_hr_to_bytes(), moved to load.php in WordPress 4.6 from media.php
     *
     * Based on ActionScheduler's compat wrapper for the same function:
     * ActionScheduler_Compatibility::convert_hr_to_bytes()
     *
     * @link https://secure.php.net/manual/en/function.ini-get.php
     * @link https://secure.php.net/manual/en/faq.using.php#faq.using.shorthandbytes
     *
     * @since 5.3.1
     *
     * @param string $value A (PHP ini) byte value, either shorthand or ordinary.
     * @return int An integer byte value.
     */
    public static function convert_hr_to_bytes($value)
    {
    }
    /** Subscriptions *********************************************************/
    /**
     * Determines if the installed version of WooCommerce Subscriptions matches or exceeds a given version.
     *
     * @since 5.5.0
     *
     * @param string $version version number to compare
     * @return bool
     */
    public static function is_wc_subscriptions_version_gte($version)
    {
    }
    /**
     * Determines if the installed version of WooCommerce Subscriptions exceeds a given version.
     *
     * @since 5.5.0
     *
     * @param string $version version number to compare
     * @return bool
     */
    public static function is_wc_subscriptions_version_gt($version)
    {
    }
    /**
     * Determines if the installed version of WooCommerce Subscriptions is lower than a given version.
     *
     * @since 5.5.0
     *
     * @param string $version version number to compare
     * @return bool
     */
    public static function is_wc_subscriptions_version_lt($version)
    {
    }
    /**
     * Gets the version of the currently installed WooCommerce Subscriptions.
     *
     * @since 4.1.0
     *
     * @return string|null WooCommerce Subscriptions version number or null if not found
     */
    protected static function get_wc_subscriptions_version(): ?string
    {
    }
    /**
     * Determines if the installed WooCommerce Subscriptions version matches a specific version.
     *
     * @since 5.5.0
     *
     * @param string $version semver
     * @return bool
     */
    protected static function is_wc_subscriptions_version($version)
    {
    }
    /**
     * Determines whether HPOS is enabled.
     *
     * @link https://woocommerce.com/document/high-performance-order-storage/
     * @link https://github.com/woocommerce/woocommerce/wiki/High-Performance-Order-Storage-Upgrade-Recipe-Book#detecting-whether-hpos-tables-are-being-used-in-the-store
     *
     * @since 5.11.0
     *
     * @return bool
     */
    public static function is_hpos_enabled(): bool
    {
    }
}
/**
 * Plugin dependencies handler.
 *
 * @since 5.2.0
 */
#[\AllowDynamicProperties]
class SV_WC_Plugin_Dependencies
{
    /** @var array required PHP extensions */
    protected $php_extensions = array();
    /** @var array required PHP functions */
    protected $php_functions = array();
    /** @var array required PHP settings */
    protected $php_settings = array();
    /** @var SV_WC_Plugin plugin instance */
    protected $plugin;
    /**
     * Constructs the class.
     *
     * @since 5.2.0
     *
     * @param SV_WC_Plugin $plugin plugin instance
     * @param array $args {
     *     PHP extension, function, and settings dependencies
     *
     *     @type array $php_extensions PHP extension dependencies
     *     @type array $php_functions  PHP function dependencies
     *     @type array $php_settings   PHP settings dependencies
     * }
     */
    public function __construct(\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Plugin $plugin, $args = array())
    {
    }
    /**
     * Parses the dependency arguments and sets defaults.
     *
     * @since 5.2.0
     *
     * @param array $args dependency args
     * @return array
     */
    private function parse_dependencies($args)
    {
    }
    /**
     * Adds the action & filter hooks.
     *
     * @since 5.2.0
     */
    protected function add_hooks()
    {
    }
    /**
     * Adds the admin dependency notices.
     *
     * @since 5.2.0
     */
    public function add_admin_notices()
    {
    }
    /**
     * Adds notices for any missing PHP extensions.
     *
     * @since 5.2.0
     */
    public function add_php_extension_notices()
    {
    }
    /**
     * Adds notices for any missing PHP functions.
     *
     * @since 5.2.0
     */
    public function add_php_function_notices()
    {
    }
    /**
     * Adds notices for any incompatible PHP settings.
     *
     * @since 5.2.0
     */
    public function add_php_settings_notices()
    {
    }
    /**
     * Gets any deprecated warning notices.
     *
     * @since 5.2.0
     */
    protected function add_deprecated_notices()
    {
    }
    /**
     * Adds an admin notice.
     *
     * @since 5.2.0
     *
     * @param string $id notice ID
     * @param string $message notice message
     * @param string $type notice type
     */
    protected function add_admin_notice($id, $message, $type = 'info')
    {
    }
    /**
     * Returns the active scripts optimization plugins.
     *
     * Returns a key-value array where the key contains the plugin file identifier and the value is the name of the plugin.
     *
     * @since 5.7.0
     *
     * @return array
     */
    public function get_active_scripts_optimization_plugins()
    {
    }
    /**
     * Returns true if any of the known scripts optimization plugins is active.
     *
     * @since 5.7.0
     *
     * @return bool
     */
    public function is_scripts_optimization_plugin_active()
    {
    }
    /** Getter methods ********************************************************/
    /**
     * Gets any missing PHP extensions.
     *
     * @since 5.2.0
     *
     * @return array
     */
    public function get_missing_php_extensions()
    {
    }
    /**
     * Gets the required PHP extensions.
     *
     * @since 5.2.0
     *
     * @return array
     */
    public function get_php_extensions()
    {
    }
    /**
     * Gets any missing PHP functions.
     *
     * @since 5.2.0
     *
     * @return array
     */
    public function get_missing_php_functions()
    {
    }
    /**
     * Gets the required PHP functions.
     *
     * @since 5.2.0
     *
     * @return array
     */
    public function get_php_functions()
    {
    }
    /**
     * Gets any incompatible PHP settings.
     *
     * @since 5.2.0
     *
     * @return array
     */
    public function get_incompatible_php_settings()
    {
    }
    /**
     * Gets the required PHP settings.
     *
     * @since 5.2.0
     *
     * @return array
     */
    public function get_php_settings()
    {
    }
    /**
     * Gets the plugin instance.
     *
     * @since 5.2.0
     *
     * @return SV_WC_Plugin
     */
    protected function get_plugin()
    {
    }
}
/**
 * # WooCommerce Plugin Framework
 *
 * This framework class provides a base level of configurable and overrideable
 * functionality and features suitable for the implementation of a WooCommerce
 * plugin.  This class handles all the "non-feature" support tasks such
 * as verifying dependencies are met, loading the text domain, etc.
 *
 * @version 5.8.0
 */
#[\AllowDynamicProperties]
abstract class SV_WC_Plugin
{
    /** Plugin Framework Version */
    public const VERSION = '6.0.1';
    /** @var object single instance of plugin */
    protected static $instance;
    /** @var string plugin id */
    private $id;
    /** @var string version number */
    private $version;
    /** @var string plugin path, without trailing slash */
    private $plugin_path;
    /** @var string plugin URL */
    private $plugin_url;
    /** @var string template path, without trailing slash */
    private $template_path;
    /** @var \WC_Logger_Interface|null instance */
    private ?\WC_Logger_Interface $logger = null;
    /** @var  SV_WP_Admin_Message_Handler instance */
    private $message_handler;
    /** @var string the plugin text domain */
    private $text_domain;
    /** @var array{ hpos?: bool, blocks?: array{ cart?: bool, checkout?: bool }} plugin compatibility flags */
    private $supported_features;
    /** @var array memoized list of active plugins */
    private $active_plugins = [];
    /** @var SV_WC_Plugin_Dependencies dependency handler instance */
    private $dependency_handler;
    /** @var SV_WC_Hook_Deprecator hook deprecator instance */
    private $hook_deprecator;
    /** @var Plugin\Lifecycle lifecycle handler instance */
    protected $lifecycle_handler;
    /** @var REST_API REST API handler instance */
    protected $rest_api_handler;
    /** @var Blocks\Blocks_Handler blocks handler instance */
    protected \SkyVerge\WooCommerce\PluginFramework\v6_0_1\Blocks\Blocks_Handler $blocks_handler;
    /** @var Admin\Setup_Wizard handler instance */
    protected $setup_wizard_handler;
    /** @var SV_WC_Admin_Notice_Handler the admin notice handler class */
    private $admin_notice_handler;
    /**
     * Initialize the plugin.
     *
     * Child plugin classes may add their own optional arguments.
     *
     * @since 2.0.0
     *
     * @param string $id plugin id
     * @param string $version plugin version number
     * @param array{
     *     latest_wc_versions?: int|float,
     *     text_domain?: string,
     *     supported_features?: array{
     *          hpos?: bool,
     *          blocks?: array{
     *               cart?: bool,
     *               checkout?: bool
     *          }
     *     },
     *     dependencies?: array{
     *          php_extensions?: array<string, mixed>,
     *          php_functions?: array<string, mixed>,
     *          php_settings?: array<string, mixed>
     *     }
     *  } $args
     */
    public function __construct(string $id, string $version, array $args = [])
    {
    }
    /**
     * Provides backward compatibility for arguments, where we can. This handles any format changes in the $args array.
     *
     * @param array $args
     * @return array
     */
    protected function maybeHandleBackwardsCompatibleArgs(array $args): array
    {
    }
    /** Init methods **********************************************************/
    /**
     * Initializes the plugin dependency handler.
     *
     * @since 5.2.0
     *
     * @param array $dependencies {
     *     PHP extension, function, and settings dependencies
     *
     *     @type array $php_extensions PHP extension dependencies
     *     @type array $php_functions  PHP function dependencies
     *     @type array $php_settings   PHP settings dependencies
     * }
     */
    protected function init_dependencies($dependencies)
    {
    }
    /**
     * Builds the admin message handler instance.
     *
     * Plugins can override this with their own handler.
     *
     * @since 5.2.0
     */
    protected function init_admin_message_handler()
    {
    }
    /**
     * Builds the admin notice handler instance.
     *
     * Plugins can override this with their own handler.
     *
     * @since 5.2.0
     */
    protected function init_admin_notice_handler()
    {
    }
    /**
     * Builds the hook deprecator instance.
     *
     * Plugins can override this with their own handler.
     *
     * @since 5.2.0
     * @since 5.15.7 The full `SV_WC_Plugin` instance is now used to instantiate `SV_WC_Hook_Deprecator`.
     */
    protected function init_hook_deprecator()
    {
    }
    /**
     * Builds the lifecycle handler instance.
     *
     * Plugins can override this with their own handler to perform install and
     * upgrade routines.
     *
     * @since 5.2.0
     */
    protected function init_lifecycle_handler()
    {
    }
    /**
     * Builds the REST API handler instance.
     *
     * Plugins can override this to add their own data and/or routes.
     *
     * @since 5.2.0
     */
    protected function init_rest_api_handler()
    {
    }
    /**
     * Builds the blocks handler instance.
     *
     * @since 5.11.11
     *
     * @return void
     */
    protected function init_blocks_handler(): void
    {
    }
    /**
     * Builds the Setup Wizard handler instance.
     *
     * Plugins can override and extend this method to add their own setup wizard.
     *
     * @since 5.3.0
     *
     * @deprecated
     */
    protected function init_setup_wizard_handler()
    {
    }
    /**
     * Adds the action & filter hooks.
     *
     * @since 5.2.0
     */
    private function add_hooks()
    {
    }
    /**
     * Cloning instances is forbidden due to singleton pattern.
     *
     * @since 3.1.0
     */
    public function __clone()
    {
    }
    /**
     * Unserializing instances is forbidden due to singleton pattern.
     *
     * @since 3.1.0
     */
    public function __wakeup()
    {
    }
    /**
     * Load plugin & framework text domains.
     *
     * @internal
     *
     * @since 4.2.0
     */
    public function load_translations()
    {
    }
    /**
     * Loads the framework textdomain.
     *
     * @since 4.5.0
     */
    protected function load_framework_textdomain()
    {
    }
    /**
     * Loads the plugin textdomain.
     *
     * @since 4.5.0
     */
    protected function load_plugin_textdomain()
    {
    }
    /**
     * Loads the plugin textdomain.
     *
     * @since 4.5.0
     * @param string $textdomain the plugin textdomain
     * @param string $path the i18n path
     */
    protected function load_textdomain($textdomain, $path)
    {
    }
    /**
     * Initializes the plugin.
     *
     * Plugins can override this to set up any handlers after WordPress is ready.
     *
     * @since 5.2.0
     */
    public function init_plugin()
    {
    }
    /**
     * Initializes the plugin admin.
     *
     * Plugins can override this to set up any handlers after the WordPress admin is ready.
     *
     * @since 5.2.0
     */
    public function init_admin()
    {
    }
    /**
     * Include any critical files which must be available as early as possible,
     *
     * @since 2.0.0
     *
     * @deprecated class files are loaded via composer
     */
    private function includes()
    {
    }
    /**
     * Setup aliases for classes that got renamed, moved, or namespace changed.
     *
     * @since 5.13.1
     *
     * @return void
     */
    protected function setupClassAliases(): void
    {
    }
    /**
     * Gets a list of framework deprecated/removed hooks.
     *
     * @see SV_WC_Plugin::init_hook_deprecator()
     * @see SV_WC_Plugin::get_deprecated_hooks()
     *
     * @since 5.8.0
     *
     * @return array associative array
     */
    private function get_framework_deprecated_hooks()
    {
    }
    /**
     * Gets a list of the plugin's deprecated/removed hooks.
     *
     * Implementing classes should override this and return an array of deprecated/removed hooks in the following format:
     *
     * $old_hook_name = array {
     *   @type string $version version the hook was deprecated/removed in
     *   @type bool $removed if present and true, the message will indicate the hook was removed instead of deprecated
     *   @type string|bool $replacement if present and a string, the message will indicate the replacement hook to use,
     *     otherwise (if bool and false) the message will indicate there is no replacement available.
     * }
     *
     * @since 4.3.0
     *
     * @return array
     */
    protected function get_deprecated_hooks()
    {
    }
    /** Admin methods ******************************************************/
    /**
     * Returns true if on the admin plugin settings page, if any
     *
     * @since 2.0.0
     * @return boolean true if on the admin plugin settings page
     */
    public function is_plugin_settings()
    {
    }
    /**
     * Adds admin notices upon initialization.
     *
     * @since 3.0.0
     */
    public function add_admin_notices()
    {
    }
    /**
     * Convenience method to add delayed admin notices, which may depend upon
     * some setting being saved prior to determining whether to render
     *
     * @since 3.0.0
     */
    public function add_delayed_admin_notices()
    {
    }
    /**
     * Return the plugin action links.  This will only be called if the plugin
     * is active.
     *
     * @since 2.0.0
     * @param array $actions associative array of action names to anchor tags
     * @return array associative array of plugin action links
     */
    public function plugin_action_links($actions)
    {
    }
    /**
     * Declares HPOS compatibility if the plugin is compatible with HPOS.
     *
     * @internal
     *
     * @since 5.11.0
     * @deprecated since 5.11.11
     * @see SV_WC_Plugin::handle_features_compatibility()
     *
     * @return void
     */
    public function handle_hpos_compatibility(): void
    {
    }
    /**
     * Declares compatibility with specific WooCommerce features.
     *
     * @internal
     *
     * @since 5.12.0
     *
     * @return void
     */
    public function handle_features_compatibility(): void
    {
    }
    /** Helper methods ******************************************************/
    /**
     * Automatically log API requests/responses when using SV_WC_API_Base
     *
     * @since 2.2.0
     * @see SV_WC_API_Base::broadcast_request()
     */
    public function add_api_request_logging()
    {
    }
    /**
     * Logs API requests/responses.
     *
     * @since 2.2.0
     *
     * @param array<mixed>|\stdClass $request request data, see SV_WC_API_Base::broadcast_request() for format
     * @param array<mixed>|\stdClass $response response data
     * @param string|null $log_id log to write data to
     */
    public function log_api_request($request, $response, ?string $log_id = null): void
    {
    }
    /**
     * Transform the API request/response data into a string suitable for logging.
     *
     * @since 2.2.0
     *
     * @param array<string, mixed>|scalar $data
     * @param string|null $type optional type of data, either 'request' or 'response'
     * @return string
     */
    public function get_api_log_message($data, ?string $type = null): string
    {
    }
    /**
     * Adds any PHP incompatibilities to the system status report.
     *
     * @since 4.5.0
     *
     * @param array $rows WooCommerce system status rows
     * @return array
     */
    public function add_system_status_php_information($rows)
    {
    }
    /**
     * Saves errors or messages to WooCommerce Log (woocommerce/logs/plugin-id-xxx.txt)
     *
     * @since 2.0.0
     * @param string $message error or message to save to log
     * @param string $log_id optional log id to segment the files by, defaults to plugin id
     */
    public function log($message, $log_id = null)
    {
    }
    protected function logger(): \WC_Logger_Interface
    {
    }
    public function assert($assertion): void
    {
    }
    /**
     * Require and instantiate a class
     *
     * @since 4.2.0
     * @param string $local_path path to class file in plugin, e.g. '/includes/class-wc-foo.php'
     * @param string $class_name class to instantiate
     * @return object instantiated class instance
     */
    public function load_class($local_path, $class_name)
    {
    }
    /**
     * Determines if TLS v1.2 is required for API requests.
     *
     * Subclasses should override this to return true if TLS v1.2 is required.
     *
     * @since 5.5.2
     *
     * @return bool
     */
    public function require_tls_1_2()
    {
    }
    /**
     * Determines if TLS 1.2 is available.
     *
     * @since 5.5.2
     *
     * @return bool
     */
    public function is_tls_1_2_available()
    {
    }
    /**
     * Gets a list of the plugin's compatibility flags.
     *
     * @since 5.11.11
     *
     * @return array{ hpos?: bool, blocks?: array{ cart?: bool, checkout?: bool }}
     */
    public function get_supported_features(): array
    {
    }
    /**
     * Determines if the plugin supports HPOS.
     *
     * @since 5.11.0
     *
     * @return bool
     */
    public function is_hpos_compatible(): bool
    {
    }
    /** Getter methods ******************************************************/
    /**
     * Gets the main plugin file.
     *
     * @since 5.0.0
     *
     * @return string
     */
    public function get_plugin_file()
    {
    }
    /**
     * The implementation for this abstract method should simply be:
     *
     * return __FILE__;
     *
     * @since 2.0.0
     * @return string the full path and filename of the plugin file
     */
    abstract protected function get_file();
    /**
     * Returns the plugin id
     *
     * @since 2.0.0
     * @return string plugin id
     */
    public function get_id()
    {
    }
    /**
     * Returns the plugin id with dashes in place of underscores, and
     * appropriate for use in frontend element names, classes and ids
     *
     * @since 2.0.0
     * @return string plugin id with dashes in place of underscores
     */
    public function get_id_dasherized()
    {
    }
    /**
     * Returns the plugin full name including "WooCommerce", ie
     * "WooCommerce X".  This method is defined abstract for localization purposes
     *
     * @since 2.0.0
     * @return string plugin name
     */
    abstract public function get_plugin_name();
    /** Handler methods *******************************************************/
    /**
     * Gets the dependency handler.
     *
     * @since 5.2.0.1
     *
     * @return SV_WC_Plugin_Dependencies
     */
    public function get_dependency_handler()
    {
    }
    /**
     * Gets the lifecycle handler instance.
     *
     * @since 5.1.0
     *
     * @return Plugin\Lifecycle
     */
    public function get_lifecycle_handler()
    {
    }
    /**
     * Gets the blocks handler instance.
     *
     * @since 5.11.11
     *
     * @return Blocks\Blocks_Handler
     */
    public function get_blocks_handler(): \SkyVerge\WooCommerce\PluginFramework\v6_0_1\Blocks\Blocks_Handler
    {
    }
    /**
     * Gets the Setup Wizard handler instance.
     *
     * @since 5.3.0
     *
     * @return null|Admin\Setup_Wizard
     */
    public function get_setup_wizard_handler()
    {
    }
    /**
     * Gets the admin message handler.
     *
     * @since 2.0.0
     *
     * @return SV_WP_Admin_Message_Handler
     */
    public function get_message_handler()
    {
    }
    /**
     * Gets the admin notice handler instance.
     *
     * @since 3.0.0
     *
     * @return SV_WC_Admin_Notice_Handler
     */
    public function get_admin_notice_handler()
    {
    }
    /**
     * Gets the settings API handler instance.
     *
     * Plugins can use this to init the settings API handler.
     *
     * @since 5.7.0
     *
     * @return void|Settings_API\Abstract_Settings
     */
    public function get_settings_handler()
    {
    }
    /**
     * Returns the plugin version name.  Defaults to wc_{plugin id}_version
     *
     * @since 2.0.0
     *
     * @return string the plugin version name
     */
    public function get_plugin_version_name()
    {
    }
    /**
     * Returns the current version of the plugin
     *
     * @since 2.0.0
     *
     * @return string plugin version
     */
    public function get_version()
    {
    }
    /**
     * Gets the plugin version to be used by any internal scripts.
     *
     * This normally returns the plugin version, but will return `time()` if debug is enabled, to burst assets caches.
     *
     * @since 5.12.0
     *
     * @return string
     */
    public function get_assets_version(): string
    {
    }
    /**
     * Gets the plugin's textdomain.
     *
     * @since 5.12.0
     *
     * @return string
     */
    public function get_textdomain(): string
    {
    }
    /**
     * Returns the "Configure" plugin action link to go directly to the plugin
     * settings page (if any)
     *
     * @since 2.0.0
     * @see SV_WC_Plugin::get_settings_url()
     * @param string $plugin_id optional plugin identifier.  Note that this can be a
     *        sub-identifier for plugins with multiple parallel settings pages
     *        (ie a gateway that supports both credit cards and echecks)
     * @return string plugin configure link
     */
    public function get_settings_link($plugin_id = null)
    {
    }
    /**
     * Gets the plugin configuration URL
     *
     * @since 2.0.0
     * @see SV_WC_Plugin::get_settings_link()
     * @param string $plugin_id optional plugin identifier.  Note that this can be a
     *        sub-identifier for plugins with multiple parallel settings pages
     *        (ie a gateway that supports both credit cards and echecks)
     * @return string plugin settings URL
     */
    public function get_settings_url($plugin_id = null)
    {
    }
    /**
     * Returns true if the current page is the admin general configuration page
     *
     * @since 3.0.0
     * @return boolean true if the current page is the admin general configuration page
     */
    public function is_general_configuration_page()
    {
    }
    /**
     * Returns the admin configuration url for the admin general configuration page
     *
     * @since 3.0.0
     * @return string admin configuration url for the admin general configuration page
     */
    public function get_general_configuration_url()
    {
    }
    /**
     * Gets the plugin documentation url, used for the 'Docs' plugin action
     *
     * @since 2.0.0
     * @return string documentation URL
     */
    public function get_documentation_url()
    {
    }
    /**
     * Gets the support URL, used for the 'Support' plugin action link
     *
     * @since 4.0.0
     * @return string support url
     */
    public function get_support_url()
    {
    }
    /**
     * Gets the plugin sales page URL.
     *
     * @since 5.1.0
     *
     * @return string
     */
    public function get_sales_page_url()
    {
    }
    /**
     * Gets the plugin reviews page URL.
     *
     * Used for the 'Reviews' plugin action and review prompts.
     *
     * @since 5.1.0
     *
     * @return string
     */
    public function get_reviews_url()
    {
    }
    /**
     * Gets the plugin's path without a trailing slash.
     *
     * e.g. /path/to/wp-content/plugins/plugin-directory
     *
     * @since 2.0.0
     *
     * @return string
     */
    public function get_plugin_path()
    {
    }
    /**
     * Gets the plugin's URL without a trailing slash.
     *
     * E.g. http://skyverge.com/wp-content/plugins/plugin-directory
     *
     * @since 2.0.0
     *
     * @return string
     */
    public function get_plugin_url()
    {
    }
    /**
     * Gets the woocommerce uploads path, without trailing slash.
     *
     * Oddly WooCommerce core does not provide a way to get this.
     *
     * @since 2.0.0
     *
     * @return string
     */
    public static function get_woocommerce_uploads_path()
    {
    }
    /**
     * Returns the loaded framework __FILE__
     *
     * @since 4.0.0
     * @return string
     */
    public function get_framework_file()
    {
    }
    /**
     * Gets the loaded framework path, without trailing slash.
     *
     * This matches the path to the highest version of the framework currently loaded.
     *
     * @since 4.0.0
     * @return string
     */
    public function get_framework_path()
    {
    }
    /**
     * Gets the absolute path to the loaded framework image directory, without a trailing slash.
     *
     * @since 4.0.0
     *
     * @return string
     */
    public function get_framework_assets_path()
    {
    }
    /**
     * Gets the loaded framework assets URL without a trailing slash.
     *
     * @since 4.0.0
     *
     * @return string
     */
    public function get_framework_assets_url()
    {
    }
    /**
     * Gets the plugin default template path, without a trailing slash.
     *
     * @since 5.5.0
     *
     * @return string
     */
    public function get_template_path()
    {
    }
    /**
     * Loads and outputs a template file HTML.
     *
     * @see \wc_get_template() except we define automatically the default path
     *
     * @since 5.5.0
     *
     * @param string $template template name/part
     * @param array $args associative array of optional template arguments
     * @param string $path optional template path, can be empty, as themes can override this
     * @param string $default_path optional default template path, will normally use the plugin's own template path unless overridden
     */
    public function load_template($template, array $args = [], $path = '', $default_path = '')
    {
    }
    /**
     * Determines whether a plugin is active.
     *
     * @since 2.0.0
     *
     * @param string $plugin_name plugin name, as the plugin-filename.php
     * @return boolean true if the named plugin is installed and active
     */
    public function is_plugin_active($plugin_name)
    {
    }
}
/**
 * # WordPress Admin Message Handler Class
 *
 * This class provides a reusable wordpress admin messaging facility for setting
 * and displaying messages and error messages across admin page requests without
 * resorting to passing the messages as query vars.
 *
 * ## Usage
 *
 * To use simple instantiate the class then set one or more messages:
 *
 * `
 * $admin_message_handler = new WP_Admin_Message_Handler( __FILE__ );
 * $admin_message_handler->add_message( 'Hello World!' );
 * `
 *
 * Then show the messages wherever you need, either with the built-in method
 * or by writing your own:
 *
 * `$admin_message_handler->show_messages();`
 *
 * @version 1.0.1
 */
#[\AllowDynamicProperties]
class SV_WP_Admin_Message_Handler
{
    /** transient message prefix */
    const MESSAGE_TRANSIENT_PREFIX = '_wp_admin_message_';
    /** the message id GET name */
    const MESSAGE_ID_GET_NAME = 'wpamhid';
    /** @var string unique message identifier, defaults to __FILE__ unless otherwise set */
    private $message_id;
    /** @var array array of messages */
    private $messages = array();
    /** @var array array of error messages */
    private $errors = array();
    /** @var array array of warning messages */
    private $warnings = array();
    /** @var array array of info messages */
    private $infos = array();
    /**
     * Construct and initialize the admin message handler class
     *
     * @since 1.0.0
     * @param string $message_id optional message id.  Best practice is to set
     *        this to a unique identifier based on the client plugin, such as __FILE__
     */
    public function __construct($message_id = null)
    {
    }
    /**
     * Persist messages
     *
     * @since 1.0.0
     * @return boolean true if any messages were set, false otherwise
     */
    public function set_messages()
    {
    }
    /**
     * Loads messages
     *
     * @since 1.0.0
     */
    public function load_messages()
    {
    }
    /**
     * Clear messages and errors
     *
     * @since 1.0.0
     * @param string $id the messages identifier
     */
    public function clear_messages($id)
    {
    }
    /**
     * Add an error message.
     *
     * @since 1.0.0
     * @param string $error error message
     */
    public function add_error($error)
    {
    }
    /**
     * Adds a warning message.
     *
     * @since 5.1.0
     *
     * @param string $message warning message to add
     */
    public function add_warning($message)
    {
    }
    /**
     * Adds a info message.
     *
     * @since 5.1.0
     *
     * @param string $message info message to add
     */
    public function add_info($message)
    {
    }
    /**
     * Add a message.
     *
     * @since 1.0.0
     * @param string $message the message to add
     */
    public function add_message($message)
    {
    }
    /**
     * Get error count.
     *
     * @since 1.0.0
     * @return int error message count
     */
    public function error_count()
    {
    }
    /**
     * Gets the warning message count.
     *
     * @since 5.1.0
     *
     * @return int warning message count
     */
    public function warning_count()
    {
    }
    /**
     * Gets the info message count.
     *
     * @since 5.1.0
     *
     * @return int info message count
     */
    public function info_count()
    {
    }
    /**
     * Get message count.
     *
     * @since 1.0.0
     * @return int message count
     */
    public function message_count()
    {
    }
    /**
     * Get error messages
     *
     * @since 1.0.0
     * @return array of error message strings
     */
    public function get_errors()
    {
    }
    /**
     * Get an error message
     *
     * @since 1.0.0
     * @param int $index the error index
     * @return string the error message
     */
    public function get_error($index)
    {
    }
    /**
     * Gets all warning messages.
     *
     * @since 5.1.0
     *
     * @return array
     */
    public function get_warnings()
    {
    }
    /**
     * Gets a specific warning message.
     *
     * @since 5.1.0
     *
     * @param int $index warning message index
     * @return string
     */
    public function get_warning($index)
    {
    }
    /**
     * Gets all info messages.
     *
     * @since 5.1.0
     *
     * @return array
     */
    public function get_infos()
    {
    }
    /**
     * Gets a specific info message.
     *
     * @since 5.0.0
     *
     * @param int $index info message index
     * @return string
     */
    public function get_info($index)
    {
    }
    /**
     * Get messages
     *
     * @since 1.0.0
     * @return array of message strings
     */
    public function get_messages()
    {
    }
    /**
     * Get a message
     *
     * @since 1.0.0
     * @param int $index the message index
     * @return string the message
     */
    public function get_message($index)
    {
    }
    /**
     * Render the errors and messages.
     *
     * @since 1.0.0
     * @param array $params {
     *     Optional parameters.
     *
     *     @type array $capabilities Any user capabilities to check if the user is allowed to view the messages,
     *                               default: `manage_woocommerce`
     * }
     */
    public function show_messages($params = array())
    {
    }
    /**
     * Redirection hook which persists messages into session data.
     *
     * @since 1.0.0
     * @param string $location the URL to redirect to
     * @param int $status the http status
     * @return string the URL to redirect to
     */
    public function redirect($location, $status)
    {
    }
    /**
     * Generate a unique id to identify the messages
     *
     * @since 1.0.0
     * @return string unique identifier
     */
    protected function get_message_id()
    {
    }
}
/**
 * WooCommerce data compatibility class.
 *
 * @since 4.6.0
 * @deprecated 5.5.0
 */
#[\AllowDynamicProperties]
abstract class SV_WC_Data_Compatibility
{
}
/**
 * WooCommerce order compatibility class.
 *
 * @since 4.6.0
 */
#[\AllowDynamicProperties]
class SV_WC_Order_Compatibility extends \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Data_Compatibility
{
    /**
     * Gets the formatted metadata for an order item.
     *
     * @since 4.6.5
     * @deprecated 5.11.0 prefer using {@see \WC_Order_Item::get_formatted_meta_data()}
     *
     * @param \WC_Order_Item $item order item object
     * @param string $hide_prefix prefix for meta that is considered hidden
     * @param bool $include_all whether to include all meta (attributes, etc...), or just custom fields
     * @return array $item_meta {
     *     @type string $label meta field label
     *     @type mixed $value meta value
     * }
     */
    public static function get_item_formatted_meta_data($item, $hide_prefix = '_', $include_all = false)
    {
    }
    /**
     * Gets the orders screen admin URL according to HPOS availability.
     *
     * @since 5.11.0
     *
     * @return string
     */
    public static function get_orders_screen_url(): string
    {
    }
    /**
     * Gets the admin Edit screen URL for an order according to HPOS compatibility.
     *
     * @NOTE consider using {@see \WC_Order::get_edit_order_url()} whenever possible
     *
     * @see OrderUtil::get_order_admin_edit_url()
     * @see PageController::get_edit_url()
     *
     * @since 5.0.1
     *
     * @param \WC_Order|int $order order object or ID
     * @return string
     */
    public static function get_edit_order_url($order): string
    {
    }
    /**
     * Determines if the current admin screen is for the orders.
     *
     * @since 5.11.0
     *
     * @return bool
     */
    public static function is_orders_screen(): bool
    {
    }
    /**
     * Determines if the current orders screen is for orders of a specific status.
     *
     * @since 5.11.0
     *
     * @param string|string[] $status one or more statuses to compare
     * @return bool
     */
    public static function is_orders_screen_for_status($status): bool
    {
    }
    /**
     * Determines if the current admin screen is for adding or editing an order.
     *
     * @since 5.11.0
     *
     * @return bool
     */
    public static function is_order_edit_screen(): bool
    {
    }
    /**
     * Determines if the current admin page is for any kind of order screen.
     *
     * @since 5.11.0
     *
     * @return bool
     */
    public static function is_order_screen(): bool
    {
    }
    /**
     * Gets the ID of the order for the current edit screen.
     *
     * @since 5.11.0
     *
     * @return int|null
     */
    public static function get_order_id_for_order_edit_screen(): ?int
    {
    }
    /**
     * Gets the admin screen ID for orders.
     *
     * This method detects the expected orders screen ID according to HPOS availability.
     * `shop_order` as a registered post type as the screen ID is no longer used when HPOS is active.
     *
     * @see OrderUtil::get_order_admin_screen()
     * @see COTMigrationUtil::get_order_admin_screen()
     *
     * @since 5.11.0
     *
     * @return string
     */
    public static function get_order_screen_id(): string
    {
    }
    /**
     * Gets the orders table.
     *
     * @return string
     */
    public static function get_orders_table(): string
    {
    }
    /**
     * Gets the orders meta table.
     *
     * @return string
     */
    public static function get_orders_meta_table(): string
    {
    }
    /**
     * Determines whether a given identifier is a WooCommerce order or not, according to HPOS availability.
     *
     * @see OrderUtil::get_order_type()
     *
     * @since 5.11.0
     *
     * @param int|\WP_Post|\WC_Order|null $post_order_or_id identifier of a possible order
     * @param string|string[] $order_type the order type, defaults to shop_order, can specify multiple types
     * @return bool
     */
    public static function is_order($post_order_or_id, $order_type = 'shop_order'): bool
    {
    }
    /**
     * Determines whether a given identifier is a WooCommerce refund or not, according to HPOS availability.
     *
     * @since 5.11.0
     *
     * @param int|\WP_Post|\WC_Order|null $order_post_or_id identifier of a possible order
     * @return bool
     */
    public static function is_refund($order_post_or_id): bool
    {
    }
    /**
     * Gets the order meta according to HPOS availability.
     *
     * Uses {@see \WC_Order::get_meta()} if HPOS is enabled, otherwise it uses the WordPress {@see get_post_meta()} function.
     *
     * @since 5.11.0
     *
     * @param int|\WC_Order $order order ID or object
     * @param string $meta_key meta key
     * @param bool $single return the first found meta with key (true), or all meta sharing the same key (default true)
     * @return mixed
     */
    public static function get_order_meta($order, string $meta_key, bool $single = true)
    {
    }
    /**
     * Updates the order meta according to HPOS availability.
     *
     * Uses {@see \WC_Order::update_meta_data()} if HPOS is enabled, otherwise it uses the WordPress {@see update_meta_data()} function.
     *
     * @since 5.11.0
     *
     * @param int|\WC_Order $order order ID or object
     * @param string $meta_key meta key
     * @param mixed $meta_value meta value
     */
    public static function update_order_meta($order, string $meta_key, $meta_value)
    {
    }
    /**
     * Adds the order meta according to HPOS availability.
     *
     * Uses {@see \WC_Order::add_meta_data()} if HPOS is enabled, otherwise it uses the WordPress {@see add_meta_data()} function.
     *
     * @since 5.11.0
     *
     * @param int|\WC_Order $order order ID or object
     * @param string $meta_key meta key
     * @param mixed $meta_value meta value
     * @param bool $unique optional - whether the same key should not be added (default false)
     */
    public static function add_order_meta($order, string $meta_key, $meta_value, bool $unique = false)
    {
    }
    /**
     * Deletes the order meta according to HPOS availability.
     *
     * Uses {@see \WC_Order::delete_meta_data()} if HPOS is enabled, otherwise it uses the WordPress {@see delete_meta_data()} function.
     *
     * @since 5.11.0
     *
     * @param int|\WC_Order $order order ID or object
     * @param string $meta_key meta key
     * @param mixed $meta_value optional (applicable if HPOS is inactive)
     */
    public static function delete_order_meta($order, string $meta_key, $meta_value = '')
    {
    }
    /**
     * Determines if an order meta exists according to HPOS availability.
     *
     * Uses {@see \WC_Order::meta_exists()} if HPOS is enabled, otherwise it uses the WordPress {@see metadata_exists()} function.
     *
     * @since 5.11.0
     *
     * @param int|\WC_Order $order order ID or object
     * @param string $meta_key meta key
     * @return bool
     */
    public static function order_meta_exists($order, string $meta_key): bool
    {
    }
    /**
     * Gets the list of order post types.
     *
     * @since 5.11.6
     *
     * @return string[]
     */
    public static function get_order_post_types(): array
    {
    }
}
/**
 * WooCommerce subscription compatibility class.
 *
 * @since 5.11.1
 */
#[\AllowDynamicProperties]
class SV_WC_Subscription_Compatibility extends \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Data_Compatibility
{
    /**
     * Gets the admin screen ID for subscriptions.
     *
     * @since 5.11.1
     *
     * @return string
     */
    public static function get_subscripton_screen_id(): string
    {
    }
    /**
     * Determines if the current admin screen is for adding or editing a subscription.
     *
     * @since 5.11.1
     *
     * @return bool
     */
    public static function is_subscription_edit_screen(): bool
    {
    }
    /**
     * Determines if the current admin screen is for the subscriptions.
     *
     * @since 5.11.1
     *
     * @return bool
     */
    public static function is_subscriptions_screen(): bool
    {
    }
    /**
     * Determines if the current admin page is for any kind of subscription screen.
     *
     * @since 5.11.1
     *
     * @return bool
     */
    public static function is_subscription_screen(): bool
    {
    }
    /**
     * Determines whether a given identifier is a WooCommerce subscription or not, according to HPOS availability.
     *
     * @since 5.11.1
     *
     * @param int|\WP_Post|\WC_Subscription|null $post_subscription_or_id identifier of a possible subcription
     * @return bool
     */
    public static function is_subscription($post_subscription_or_id): bool
    {
    }
}
namespace SkyVerge\WooCommerce\PluginFramework\v6_0_1\Payment_Gateway\Blocks;

/**
 * Extends the base {@see Blocks_Handler} for supporting WooCommerce Blocks in payment gateways.
 *
 * Individual gateway plugins should override this class to load their own block integrations classes.
 *
 * @since 5.12.0
 *
 * @property Gateway_Checkout_Block_Integration $checkout_Block_Integration
 * @property \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Plugin $plugin
 */
#[\AllowDynamicProperties]
class Gateway_Blocks_Handler extends \SkyVerge\WooCommerce\PluginFramework\v6_0_1\Blocks\Blocks_Handler
{
    /**
     * Gateway blocks handler constructor.
     *
     * @since 5.12.0
     *
     * @param \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Plugin $plugin
     */
    public function __construct(\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Plugin $plugin)
    {
    }
    /**
     * Handles WooCommerce Blocks integrations in compatible plugins.
     *
     * @internal
     *
     * @since 5.12.0
     *
     * @return void
     */
    public function handle_blocks_integration(): void
    {
    }
}
/**
 * Base class for handling support for the WooCommerce Checkout block in gateways.
 *
 * For support in non-gateways, {@see Block_Integration}.
 *
 * @since 5.12.0
 */
#[\AllowDynamicProperties]
abstract class Gateway_Checkout_Block_Integration extends \Automattic\WooCommerce\Blocks\Payments\Integrations\AbstractPaymentMethodType
{
    use \SkyVerge\WooCommerce\PluginFramework\v6_0_1\Blocks\Traits\Block_Integration_Trait;
    /** @var \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Plugin instance of the current plugin */
    protected \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Plugin $plugin;
    /** @var \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway gateway handling integration */
    protected \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway $gateway;
    /** @var string supported block name */
    protected string $block_name = 'checkout';
    /**
     * Block integration constructor.
     *
     * @since 5.12.0
     *
     * @param \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Plugin $plugin
     * @param \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway $gateway
     */
    public function __construct(\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Plugin $plugin, \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway $gateway)
    {
    }
    /**
     * Adds hooks.
     *
     * @since 5.12.0
     *
     * @return void
     */
    protected function add_hooks(): void
    {
    }
    /**
     * Determines if the payment method is available in the checkout block context.
     *
     * @since 5.12.0
     *
     * @return bool
     */
    public function is_active(): bool
    {
    }
    /**
     * Determines if AJAX logging is enabled for the gateway.
     *
     * @since 5.12.0
     *
     * @return bool
     */
    protected function is_ajax_logging_enabled(): bool
    {
    }
    /**
     * Gets the payment method script handles.
     *
     * Defaults to {@see get_script_handles()} but concrete implementations may override this.
     *
     * @since 5.12.0
     *
     * @return string[]
     */
    public function get_payment_method_script_handles(): array
    {
    }
    /**
     * Gets the payment method data.
     *
     * @since 5.12.0
     *
     * @return array<string, mixed>
     */
    public function get_payment_method_data(): array
    {
    }
    /**
     * Gets the payment data as a JSON string.
     *
     * @since 5.12.0
     *
     * @return string JSON
     */
    public function get_payment_method_data_json(): string
    {
    }
    /**
     * Adds payment method data.
     *
     * Plugins that extend this class may override this method to add additional payment method data.
     * @see Gateway_Checkout_Block_Integration::get_payment_method_data()
     *
     * @since 5.12.0
     *
     * @param array $payment_method_data
     * @param \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway $gateway
     * @return array
     */
    public function add_payment_method_data(array $payment_method_data, \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway $gateway): array
    {
    }
    /**
     * Gets all the supported card types for this gateway.
     *
     * Some gateways don't support all card types.
     *
     * @since 5.12.0
     *
     * @return string[]
     */
    protected function get_supported_card_types(): array
    {
    }
    /**
     * Gets all the enabled card types for this gateway.
     *
     * A gateway could support more card types, but the merchant may have disabled some.
     *
     * @since 5.12.0
     *
     * @return string[]
     */
    protected function get_enabled_card_types(): array
    {
    }
    /**
     * Gets a list of gateway logos as icon image URLs.
     *
     * If the gateway has a specific icon, it will return that item only.
     * Otherwise, it will return a list of icon URLs for each card type supported by the gateway.
     *
     * @since 5.12.0
     *
     * @return array<string, string>
     */
    protected function get_gateway_icons(): array
    {
    }
    /**
     * Gets the payment method fields placeholder.
     *
     * @since 5.12.0
     *
     * @return array<string, mixed>
     */
    protected function get_placeholders(): array
    {
    }
    /**
     * Gets the gateway defaults.
     *
     * @since 5.12.0
     *
     * @return array<string, mixed>
     */
    protected function get_gateway_defaults(): array
    {
    }
    /**
     * Returns any gateway flags from configuration (boolean values only).
     *
     * @since 5.12.0
     *
     * @return array<string, bool>
     */
    protected function get_gateway_flags(): array
    {
    }
    /**
     * Gets any gateway configuration values.
     *
     * @since 5.12.0
     *
     * @return array<string, mixed>
     */
    protected function get_gateway_configuration(): array
    {
    }
    /**
     * Gets the Apple Pay configuration for the current gateway, if available.
     *
     * @since 5.12.0
     *
     * @return array<string, mixed>|null returns null if Apple Pay is unsupported by the gateway
     */
    protected function get_apple_pay_configuration(): ?array
    {
    }
    /**
     * Gets the Google Pay configuration for the current gateway, if available.
     *
     * @since 5.12.0
     *
     * @return array<string, mixed>|null returns null if Google Pay is unsupported by the gateway
     */
    protected function get_google_pay_configuration(): ?array
    {
    }
    /**
     * Gets the debug mode configured for the gateway.
     *
     * - `off`: no logging
     * - `log`: save to log file
     * - `checkout`: save to log file and display in checkout page
     * - `full`: save to log file and display in checkout page
     *
     * @since 5.12.0
     *
     * @return string one of off, log, checkout or full
     */
    protected function get_debug_mode(): string
    {
    }
    /**
     * Prepare payment data for processing by the gateway.
     *
     * This method does not actually process the payment - it simply adjusts the payment data to support legacy processing.
     *
     * The checkout block has built-in support for tokenization & payment tokens, but it sends the data from the frontend
     * with field names and values that our existing payment processing does not expect.
     *
     * For example, it sends the internal (core) token ID instead of the gateway-specific token ID. This method fetches
     * the token based on core ID and injects the gateway-specific token ID into the `PaymentContext::$payment_data`
     * array so that the gateway can process the payment.
     *
     * @see PaymentContext::$payment_data is converted to `$_POST` by WC core when handling legacy payments.
     * @see \Automattic\WooCommerce\StoreApi\Legacy::process_legacy_payment()
     * @see SV_WC_Payment_Gateway::get_processing_context()
     *
     * @internal
     *
     * @since 5.12.0
     *
     * @param \Automattic\WooCommerce\StoreApi\Payments\PaymentContext $payment_context
     * @param \Automattic\WooCommerce\StoreApi\Payments\PaymentResult $payment_result
     * @return \Automattic\WooCommerce\StoreApi\Payments\PaymentResult
     */
    public function prepare_payment_data(\Automattic\WooCommerce\StoreApi\Payments\PaymentContext $payment_context, \Automattic\WooCommerce\StoreApi\Payments\PaymentResult $payment_result): \Automattic\WooCommerce\StoreApi\Payments\PaymentResult
    {
    }
    /**
     * Gets a payment token for a given payment context.
     *
     * @since 5.12.0
     *
     * @param \Automattic\WooCommerce\StoreApi\Payments\PaymentContext $payment_context
     * @return \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Payment_Token|null
     */
    protected function get_payment_token_for_context(\Automattic\WooCommerce\StoreApi\Payments\PaymentContext $payment_context): ?\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Payment_Token
    {
    }
}
namespace SkyVerge\WooCommerce\PluginFramework\v6_0_1\Payment_Gateway;

/**
 * Dynamic property storage handler for WooCommerce order objects.
 *
 * This class provides a way to store dynamic properties on order objects without using
 * dynamic properties (deprecated in PHP 8.2+) while maintaining backwards compatibility
 * with PHP 7.4+. It uses WeakMap for PHP 8.0+ and falls back to dynamic properties
 * for PHP 7.4+.
 *
 * @since x.x.x
 *
 * @example
 * ```php
 * // Store properties
 * Dynamic_Props::set($order, 'customer_id', 123);
 * Dynamic_Props::set($order, 'payment_total', 99.99);
 *
 * // Retrieve properties
 * $customer_id = Dynamic_Props::get($order, 'customer_id');
 * $total       = Dynamic_Props::get($order, 'payment_total');
 * ```
 */
class Dynamic_Props
{
    /**
     * Storage container for dynamic properties using WeakMap in PHP 8.0+.
     *
     * Uses WeakMap to store properties without memory leaks, as WeakMap allows garbage
     * collection of its keys when they're no longer referenced elsewhere.
     *
     * @since x.x.x
     * @var   \WeakMap<object, \stdClass>|null
     */
    private static ?\WeakMap $map = null;
    // phpcs:ignore PHPCompatibility.Classes.NewClasses.weakmapFound -- conditionally used for PHP 8.0+
    /**
     * Sets a property on the order object.
     *
     * Stores a dynamic property either using WeakMap (PHP 8.0+) or direct property
     * access (PHP 7.4+). The storage method is automatically determined based on
     * PHP version and WeakMap availability.
     *
     * @since  x.x.x
     *
     * @param  \WC_Order $order The order object to store data on.
     * @param  string    $key   The property key.
     * @param  mixed     $value The value to store.
     * @return void
     *
     * @example
     * ```php
     * Dynamic_Props::set($order, 'customer_id', 123);
     * Dynamic_Props::set($order, 'payment_total', '99.99');
     * ```
     */
    public static function set(\WC_Order &$order, string $key, $value): void
    {
    }
    /**
     * Gets a property from the order object.
     *
     * Retrieves a stored dynamic property using the appropriate storage method
     * based on PHP version. Supports nested property access.
     *
     * @since  x.x.x
     *
     * @param  \WC_Order $order      The order object to retrieve data from.
     * @param  string    $key        The property key.
     * @param  string    $nested_key Optional. The nested property key. Default null.
     * @param  mixed     $default    Optional. Default value if not found. Default null.
     * @return mixed The stored value or default if not found.
     *
     * @example
     * ```php
     * $customer_id = Dynamic_Props::get($order, 'customer_id');
     * $total       = Dynamic_Props::get($order, 'payment_total');
     * $token       = Dynamic_Props::get($order, 'payment', 'token', 'DEFAULT_TOKEN');
     * ```
     */
    public static function get(\WC_Order $order, string $key, $nested_key = null, $default = null)
    {
    }
    /**
     * Unsets a property on the order object.
     *
     * Removes a stored dynamic property using the appropriate storage method
     * based on PHP version.
     *
     * @since  x.x.x
     *
     * @param  \WC_Order $order The order object to unset data from.
     * @param  string    $key   The property key to remove.
     * @return void
     */
    public static function unset(\WC_Order &$order, string $key): void
    {
    }
    /**
     * Checks if Dynamic_Props class should be used based on the filter.
     *
     * @return bool True if Dynamic_Props class should be used, false otherwise.
     */
    private static function use_dynamic_props_class(): bool
    {
    }
    /**
     * Checks if WeakMap should be used based on PHP version.
     *
     * Determines whether to use WeakMap storage based on PHP version (8.0+)
     * and WeakMap class availability. Result is cached for performance.
     *
     * @since  x.x.x
     * @return bool True if WeakMap should be used, false otherwise.
     */
    private static function use_weak_map(): bool
    {
    }
    /**
     * Initializes WeakMap storage if not already initialized.
     *
     * Ensures the WeakMap storage is initialized only once when needed.
     * This lazy initialization helps with performance and memory usage.
     *
     * @since  x.x.x
     * @return void
     */
    private static function init_weak_map(): void
    {
    }
}
namespace SkyVerge\WooCommerce\PluginFramework\v6_0_1\Payment_Gateway\External_Checkout;

/**
 * Base class to set up a Payments settings screen, used by external checkout integrations.
 *
 * @since 5.10.0
 */
#[\AllowDynamicProperties]
abstract class Admin
{
    /** @var string settings section ID */
    protected $section_id;
    /**
     * Construct the class.
     *
     * @since 5.10.0
     */
    public function __construct()
    {
    }
    /**
     * Sets up the necessary hooks.
     *
     * @since 5.10.0
     */
    protected function add_hooks()
    {
    }
    /**
     * Adds the checkout settings section.
     *
     * @internal
     *
     * @since 5.10.0
     *
     * @param array $sections the existing sections
     * @return array
     */
    public function add_settings_section($sections)
    {
    }
    /**
     * Gets the name of the settings section.
     *
     * @since 5.10.0
     *
     * @return string
     */
    abstract protected function get_settings_section_name();
    /**
     * Gets all of the combined settings.
     *
     * @since 5.10.0
     *
     * @return array $settings combined settings.
     */
    abstract public function get_settings();
    /**
     * Adds the definition for a Processing Gateway setting.
     *
     * @since 5.10.0
     *
     * @param array $settings setting definitions
     * @return array
     */
    protected function add_processing_gateway_settings($settings)
    {
    }
    /**
     * Gets the ID for the Processing Gateway setting.
     *
     * @since 5.10.0
     *
     * @return string
     */
    protected function get_processing_gateway_setting_id()
    {
    }
    /**
     * Gets an array IDs and names of payment gateways that declare support.
     *
     * @since 5.10.0
     *
     * @return array
     */
    protected function get_processing_gateway_options()
    {
    }
    /**
     * Gets the gateways that declare support.
     *
     * @since 5.10.0
     *
     * @return array the supporting gateways as `$gateway_id => \SV_WC_Payment_Gateway`
     */
    abstract protected function get_supporting_gateways();
    /**
     * Outputs the settings fields.
     *
     * @internal
     *
     * @since 5.10.0
     *
     * @global string $current_section current settings section.
     */
    public function add_settings()
    {
    }
    /**
     * Saves the settings.
     *
     * @internal
     *
     * @since 5.10.0
     *
     * @global string $current_section current settings section.
     */
    public function save_settings()
    {
    }
    /**
     * Renders a static setting.
     *
     * This "setting" just displays simple text instead of a <select> with only one option.
     *
     * @since 5.10.0
     *
     * @param array $setting
     */
    public function render_static_setting($setting)
    {
    }
    /**
     * Determines if the user is currently on the settings screen.
     *
     * @since 5.10.0
     *
     * @return bool
     */
    protected function is_settings_screen()
    {
    }
    /**
     * Gets the available display location options.
     *
     * @since 5.10.0
     *
     * @return array
     */
    protected function get_display_location_options()
    {
    }
    /**
     * Adds admin notices for configuration issues.
     *
     * @since 5.10.0
     */
    public function add_admin_notices()
    {
    }
    /**
     * Adds one error notice for all configuration options that need attention.
     *
     * @since 5.10.0
     */
    protected function add_configuration_errors_notice()
    {
    }
    /**
     * Adds warning notices for each configuration option that may need attention.
     *
     * @since 5.10.0
     */
    protected function add_configuration_warnings_notices()
    {
    }
    /**
     * Gets the error messages for configuration issues that need attention.
     *
     * @since 5.10.0
     *
     * @return string[] error messages
     */
    protected function get_configuration_errors()
    {
    }
    /**
     * Checks if the shipping based tax notice should be displayed.
     *
     * @since 5.10.0
     *
     * @return bool
     */
    protected function should_display_shipping_based_tax_notice()
    {
    }
    /**
     * Gets the shipping based tax notice text.
     *
     * @since 5.10.0
     *
     * @return string
     */
    protected function get_shipping_based_tax_notice(): string
    {
    }
    /**
     * Checks if the billing based tax notice should be displayed.
     *
     * @since 5.10.0
     *
     * @return bool
     */
    protected function should_display_billing_based_tax_notice()
    {
    }
    /**
     * Gets the billing based tax notice text.
     *
     * @since 5.10.0
     *
     * @return string
     */
    protected function get_billing_based_tax_notice()
    {
    }
}
/**
 * Base class to set up an external checkout integration.
 *
 * @since 5.10.0
 */
#[\AllowDynamicProperties]
abstract class External_Checkout
{
    /** @var string external checkout ID */
    protected $id;
    /** @var string external checkout human-readable label (used in notices and log entries) */
    protected $label;
    /** @var array<string, mixed> used to define supported features */
    protected array $supported_features = [];
    /** @var \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Plugin the plugin instance */
    protected $plugin;
    /**
     * Constructs the class.
     *
     * @since 5.10.0
     *
     * @param \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Plugin $plugin the plugin instance
     * @param array<string, mixed> $args optional arguments
     */
    public function __construct(\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Plugin $plugin, array $args = [])
    {
    }
    /**
     * Initializes the handlers.
     *
     * @since 5.10.0
     */
    protected function init()
    {
    }
    /**
     * Initializes the admin handler.
     *
     * @since 5.10.0
     */
    abstract protected function init_admin();
    /**
     * Initializes the AJAX handler.
     *
     * @since 5.10.0
     */
    abstract protected function init_ajax();
    /**
     * Initializes the frontend handler.
     *
     * @since 5.10.0
     */
    abstract protected function init_frontend();
    /**
     * Checks if the external checkout provides the customer billing address to WC before payment confirmation.
     *
     * Each external checkout handler should implement this method according to the external checkout behavior.
     *
     * @since 5.10.0
     *
     * @return bool
     */
    abstract public function is_billing_address_available_before_payment();
    /**
     * Gets the configured display locations.
     *
     * @since 5.10.0
     *
     * @return array
     */
    public function get_display_locations()
    {
    }
    /**
     * Adds a log entry to the gateway's debug log.
     *
     * @since 5.10.0
     *
     * @param string $message the log message to add
     */
    public function log($message)
    {
    }
    /**
     * Simulates a successful gateway payment response.
     *
     * This provides an easy way for merchants to test that their settings are correctly configured and communicating
     * with the external checkout provider without processing actual payments to test.
     *
     * @since 5.10.0
     *
     * @param \WC_Order $order order object
     * @return array
     */
    protected function process_test_payment(\WC_Order $order)
    {
    }
    /**
     * Determines if the external checkout is available.
     *
     * Each handler can override this method to add availability requirements.
     *
     * @since 5.10.0
     *
     * @return bool
     */
    public function is_available()
    {
    }
    /**
     * Determines if the external checkout settings are properly configured.
     *
     * Each handler can override this method to add configuration requirements.
     *
     * @since 5.10.0
     *
     * @return bool
     */
    public function is_configured()
    {
    }
    /**
     * Determines if the external checkout is enabled.
     *
     * @since 5.10.0
     *
     * @return bool
     */
    public function is_enabled()
    {
    }
    /**
     * Determines if test mode is enabled.
     *
     * @since 5.10.0
     *
     * @return bool
     */
    public function is_test_mode()
    {
    }
    /**
     * Determines whether the external checkout supports the WooCommerce Cart Block.
     *
     * @since 5.12.0
     *
     * @return bool
     */
    public function supports_cart_block(): bool
    {
    }
    /**
     * Determines whether the external checkout supports the WooCommerce Checkout Block.
     *
     * @since 5.12.0
     *
     * @return bool
     */
    public function supports_checkout_block(): bool
    {
    }
    /**
     * Gets the gateways that declare support for this external checkout flow.
     *
     * @since 5.10.0
     *
     * @return array the supporting gateways as `$gateway_id => \SV_WC_Payment_Gateway`
     */
    public function get_supporting_gateways()
    {
    }
    /**
     * Gets the gateway set to process transactions for this external checkout flow.
     *
     * @since 5.10.0
     *
     * @return \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway|null
     */
    public function get_processing_gateway()
    {
    }
    /**
     * Gets the external checkout button style.
     *
     * @since 5.10.0
     *
     * @return string
     */
    public function get_button_style()
    {
    }
    /**
     * Gets the gateway plugin instance.
     *
     * @since 5.10.0
     *
     * @return \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Plugin
     */
    public function get_plugin()
    {
    }
    /**
     * Gets the external checkout label.
     *
     * @since 5.10.0
     *
     * @return string
     */
    public function get_label()
    {
    }
}
/**
 * Base class to set up an external checkout front-end functionality.
 *
 * @since 5.10.0
 */
#[\AllowDynamicProperties]
abstract class Frontend extends \SkyVerge\WooCommerce\PluginFramework\v6_0_1\Handlers\Script_Handler
{
    /** @var \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Plugin $plugin the gateway plugin instance */
    protected $plugin;
    /** @var External_Checkout $handler the external checkout handler instance */
    protected $handler;
    /** @var \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway $gateway the gateway instance */
    protected $gateway;
    /**
     * Constructs the class.
     *
     * @since 5.10.0
     *
     * @param \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Plugin $plugin the gateway plugin instance
     * @param External_Checkout the handler instance
     */
    public function __construct(\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Plugin $plugin, \SkyVerge\WooCommerce\PluginFramework\v6_0_1\Payment_Gateway\External_Checkout\External_Checkout $handler)
    {
    }
    /**
     * Adds the action and filter hooks.
     *
     * @since 5.10.0
     */
    protected function add_hooks()
    {
    }
    /**
     * Initializes the scripts and hooks.
     *
     * @since 5.10.0
     */
    public function init()
    {
    }
    /**
     * Determines if the external checkout frontend should be initialized on a product page.
     *
     * @since 5.12.0
     *
     * @param array $locations configured display locations
     * @return bool
     */
    protected function should_init_on_product_page(array $locations): bool
    {
    }
    /**
     * Determines if the external checkout frontend should be initialized on the cart page.
     *
     * @since 5.12.0
     *
     * @param string[] $locations configured display locations
     * @return bool
     */
    protected function should_init_on_cart_page(array $locations): bool
    {
    }
    /**
     * Determines if the external checkout frontend should be initialized on the checkout page.
     *
     * @since 5.12.0
     *
     * @param string[] $locations configured display locations
     * @return bool
     */
    protected function should_init_on_checkout_page(array $locations): bool
    {
    }
    /**
     * Initializes external checkout on the single product page.
     *
     * Each handler can override this method to add specific product validation.
     *
     * @since 5.10.0
     */
    public function init_product()
    {
    }
    /**
     * Initializes external checkout on the cart page.
     *
     * Each handler can override this method to add specific cart validation.
     *
     * @since 5.10.0
     */
    public function init_cart()
    {
    }
    /**
     * Initializes external checkout on the checkout page.
     *
     * Each handler can override this method to add specific cart validation.
     *
     * @since 5.10.0
     */
    public function init_checkout()
    {
    }
    /**
     * Maybe renders the external checkout buttons and possibly terms notice.
     *
     * @since 5.10.0
     */
    public function maybe_render_external_checkout()
    {
    }
    /**
     * Renders the external checkout buttons and possibly terms notice.
     *
     * @since 5.10.0
     */
    public function render_external_checkout()
    {
    }
    /**
     * Maybe renders the external checkout buttons and possibly terms notice with a divider.
     *
     * @since 5.10.0
     */
    public function maybe_render_external_checkout_with_divider()
    {
    }
    /**
     * Renders the external checkout buttons and possibly terms notice with a divider.
     *
     * @since 5.10.0
     */
    public function render_external_checkout_with_divider()
    {
    }
    /**
     * Renders an external checkout button.
     *
     * Each handler should override this method to render its own button.
     *
     * @since 5.10.0
     */
    abstract public function render_button();
    /**
     * Renders a notice informing the customer that by purchasing they are accepting the website's terms and conditions.
     *
     * Only displayed if a Terms and conditions page is configured.
     *
     * @internal
     *
     * @since 5.10.0
     */
    public function render_terms_notice()
    {
    }
    /**
     * Enqueues the scripts.
     *
     * Each handler should override this method to add its specific JS.
     *
     * @since 5.10.0
     *
     * @return void
     */
    public function enqueue_scripts()
    {
    }
    /**
     * Determines whether the external checkout handle should enqueue scripts.
     *
     * @since 5.12.1
     *
     * @return bool
     */
    protected function should_enqueue_scripts(): bool
    {
    }
    /**
     * Enqueues an external checkout JS handler.
     *
     * @since 5.10.0
     *
     * @param array $args handler arguments
     * @param string $object_name JS object name
     * @param string $handler_name handler class name
     */
    protected function enqueue_js_handler(array $args, $object_name = '', $handler_name = '')
    {
    }
    /**
     * Gets the handler instantiation JS.
     *
     * @since 5.10.0
     *
     * @param array $additional_args additional handler arguments, if any
     * @param string $handler_name handler name, if different from self::get_js_handler_class_name()
     * @param string $object_name object name, if different from self::get_js_handler_object_name()
     * @return string
     */
    protected function get_handler_js(array $additional_args = [], $handler_name = '', $object_name = '')
    {
    }
    /**
     * Adds a log entry.
     *
     * @since 5.10.0
     *
     * @param string $message message to log
     */
    protected function log_event($message)
    {
    }
    /**
     * Determines whether logging is enabled.
     *
     * @since 5.10.0
     *
     * @return bool
     */
    protected function is_logging_enabled()
    {
    }
    /**
     * Gets the gateway instance.
     *
     * @since 5.10.0
     *
     * @return \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway
     */
    protected function get_gateway()
    {
    }
    /**
     * Gets the gateway plugin instance.
     *
     * @since 5.10.0
     *
     * @return \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Plugin
     */
    protected function get_plugin()
    {
    }
    /**
     * Gets the external checkout handler instance.
     *
     * @since 5.10.0
     *
     * @return External_Checkout
     */
    protected function get_handler()
    {
    }
}
namespace SkyVerge\WooCommerce\PluginFramework\v6_0_1\Payment_Gateway\External_Checkout\Google_Pay;

/**
 * The Google Pay AJAX handler.
 *
 * @since 5.10.0
 */
#[\AllowDynamicProperties]
class AJAX
{
    /** @var Google_Pay $handler the Google Pay handler instance */
    protected $handler;
    /**
     * Constructs the class.
     *
     * @since 5.10.0
     *
     * @param Google_Pay $handler the Google Pay handler instance
     */
    public function __construct(\SkyVerge\WooCommerce\PluginFramework\v6_0_1\Payment_Gateway\External_Checkout\Google_Pay\Google_Pay $handler)
    {
    }
    /**
     * Adds the action & filter hooks.
     *
     * @since 5.10.0
     */
    protected function add_hooks()
    {
    }
    /**
     * Gets Google transaction info based on WooCommerce cart data.
     *
     * @internal
     *
     * @since 5.10.0
     */
    public function get_transaction_info()
    {
    }
    /**
     * Recalculates the totals after selecting an address or shipping method.
     *
     * @internal
     *
     * @since 5.10.0
     */
    public function recalculate_totals()
    {
    }
    /**
     * Processes the payment after the Google Pay authorization.
     *
     * @internal
     *
     * @since 5.10.0
     */
    public function process_payment()
    {
    }
    /**
     * Gets the Google Pay handler instance.
     *
     * @since 5.10.0
     *
     * @return Google_Pay
     */
    protected function get_handler()
    {
    }
}
/**
 * Sets up the Google Pay settings screen.
 *
 * @since 5.10.0
 */
#[\AllowDynamicProperties]
class Admin extends \SkyVerge\WooCommerce\PluginFramework\v6_0_1\Payment_Gateway\External_Checkout\Admin
{
    /** @var Google_Pay the Google Pay handler instance */
    protected $handler;
    /**
     * Construct the class.
     *
     * @since 5.10.0
     *
     * @param Google_Pay $handler main Google Pay handler instance
     */
    public function __construct(\SkyVerge\WooCommerce\PluginFramework\v6_0_1\Payment_Gateway\External_Checkout\Google_Pay\Google_Pay $handler)
    {
    }
    /**
     * Gets the name of the Google Pay settings section.
     *
     * @since 5.10.0
     *
     * @return string
     */
    protected function get_settings_section_name()
    {
    }
    /**
     * Gets all of the combined settings.
     *
     * @since 5.10.0
     *
     * @return array $settings combined settings.
     */
    public function get_settings()
    {
    }
    /**
     * Gets the connection settings for Google Pay.
     *
     * @since 5.10.0
     *
     * @return array $settings connection settings
     */
    protected function get_connection_settings()
    {
    }
    /**
     * Gets the gateways that declare support for Google Pay.
     *
     * @since 5.10.0
     *
     * @return array
     */
    protected function get_supporting_gateways()
    {
    }
}
/**
 * Sets up the Google Pay front-end functionality.
 *
 * @since 5.10.0
 */
#[\AllowDynamicProperties]
class Frontend extends \SkyVerge\WooCommerce\PluginFramework\v6_0_1\Payment_Gateway\External_Checkout\Frontend
{
    /** @var string JS handler base class name, without the FW version */
    protected $js_handler_base_class_name = 'SV_WC_Google_Pay_Handler';
    /**
     * Constructs the class.
     *
     * @since 5.10.0
     *
     * @param \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Plugin $plugin the gateway plugin instance
     * @param Google_Pay $handler the Google Pay handler instance
     */
    public function __construct(\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Plugin $plugin, \SkyVerge\WooCommerce\PluginFramework\v6_0_1\Payment_Gateway\External_Checkout\Google_Pay\Google_Pay $handler)
    {
    }
    /**
     * Gets the script ID.
     *
     * @since 5.10.0
     *
     * @return string
     */
    public function get_id()
    {
    }
    /**
     * Gets the script ID, dasherized.
     *
     * @since 5.10.0
     *
     * @return string
     */
    public function get_id_dasherized()
    {
    }
    /**
     * Enqueues the scripts.
     *
     * @since 5.10.0
     */
    public function enqueue_scripts()
    {
    }
    /**
     * Gets the JS handler arguments.
     *
     * @since 5.10.0
     *
     * @return array
     */
    protected function get_js_handler_args()
    {
    }
    /**
     * Renders a Google Pay button.
     *
     * @since 5.10.0
     */
    public function render_button()
    {
    }
    /**
     * Initializes Google Pay on the single product page.
     *
     * @since 5.10.0
     */
    public function init_product()
    {
    }
    /**
     * Gets the args passed to the product JS handler.
     *
     * @since 5.10.0
     *
     * @param \WC_Product $product product object
     * @return array
     */
    protected function get_product_js_handler_args(\WC_Product $product)
    {
    }
    /** Cart functionality ****************************************************/
    /**
     * Initializes Google Pay on the cart page.
     *
     * @since 5.10.0
     */
    public function init_cart()
    {
    }
    /**
     * Gets the args passed to the cart JS handler.
     *
     * @since 5.10.0
     *
     * @param \WC_Cart $cart cart object
     * @return array
     */
    protected function get_cart_js_handler_args(\WC_Cart $cart)
    {
    }
    /** Checkout functionality ************************************************/
    /**
     * Initializes Google Pay on the checkout page.
     *
     * @since 5.10.0
     */
    public function init_checkout()
    {
    }
    /**
     * Gets the args passed to the checkout JS handler.
     *
     * @since 5.10.0
     *
     * @return array
     */
    protected function get_checkout_js_handler_args()
    {
    }
}
/**
 * Sets up Google Pay support.
 *
 * @since 5.10.0
 */
#[\AllowDynamicProperties]
class Google_Pay extends \SkyVerge\WooCommerce\PluginFramework\v6_0_1\Payment_Gateway\External_Checkout\External_Checkout
{
    /** @var Admin the admin instance */
    protected $admin;
    /** @var Frontend the frontend instance */
    protected $frontend;
    /** @var AJAX the AJAX instance */
    protected $ajax;
    /**
     * Constructs the class.
     *
     * @since 5.10.0
     *
     * @param \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Plugin $plugin the plugin instance
     * @param array<string, mixed> $args optional arguments
     */
    public function __construct(\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Plugin $plugin, array $args = [])
    {
    }
    /**
     * Initializes the admin handler.
     *
     * @since 5.10.0
     */
    protected function init_admin()
    {
    }
    /**
     * Initializes the AJAX handler.
     *
     * @since 5.10.0
     */
    protected function init_ajax()
    {
    }
    /**
     * Initializes the frontend handler.
     *
     * @since 5.10.0
     */
    protected function init_frontend()
    {
    }
    /**
     * Checks if the external checkout provides the customer billing address to WC before payment confirmation.
     *
     * @since 5.10.0
     *
     * @return bool
     */
    public function is_billing_address_available_before_payment()
    {
    }
    /**
     * Gets Google transaction info based on WooCommerce cart or product data.
     *
     * @since 5.10.0
     *
     * @param \WC_Cart $cart cart object
     * @param string $product_id product ID, if we are on a Product page
     * @return array
     * @throws \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Exception
     */
    public function get_transaction_info(\WC_Cart $cart, $product_id = '')
    {
    }
    /**
     * Checks if all products in the cart can be purchased using Google Pay.
     *
     * @since 5.10.0
     *
     * @param \WC_Cart $cart cart object
     * @throws \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Exception
     */
    public function validate_cart(\WC_Cart $cart)
    {
    }
    /**
     * Checks if a single product can be purchased using Google Pay.
     *
     * @since 5.10.0
     *
     * @param \WC_Product $product product object
     * @throws \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Exception
     */
    public function validate_product(\WC_Product $product)
    {
    }
    /**
     * Gets Google transaction info based on WooCommerce cart data.
     *
     * @since 5.10.0
     *
     * @param \WC_Cart $cart cart object
     * @return array
     * @throws \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Exception
     */
    public function get_cart_transaction_info(\WC_Cart $cart)
    {
    }
    /**
     * Gets Google transaction info based on product data.
     *
     * @since 5.10.0
     *
     * @param \WC_Product $product product object
     * @return array
     * @throws \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Exception
     */
    public function get_product_transaction_info(\WC_Product $product)
    {
    }
    /**
     * Populates cart with a single product.
     *
     * @since 5.10.0
     *
     * @param string $product_id product ID, if we are on a Product page
     * @throws \Exception
     */
    public function add_product_to_cart($product_id)
    {
    }
    /**
     * Recalculates the lines and totals after selecting an address or shipping method.
     *
     * @since 5.10.0
     *
     * @param string $chosen_shipping_method chosen shipping method
     * @param string $product_id product ID, if we are on a Product page
     * @return array
     * @throws \Exception
     */
    public function recalculate_totals($chosen_shipping_method, $product_id)
    {
    }
    /**
     * Builds display items for the Google Pay JS.
     *
     * @since 5.10.0
     *
     * @param \WC_Cart $cart
     * @return array
     */
    public function build_display_items(\WC_Cart $cart)
    {
    }
    /**
     * Processes the payment after a Google Pay authorization.
     *
     * This method creates a new order and calls the gateway for processing.
     *
     * @since 5.10.0
     *
     * @param mixed $payment_data payment data returned by Google Pay
     * @param string $product_id product ID, if we are on a Product page
     * @return array
     * @throws \Exception
     */
    public function process_payment($payment_data, $product_id)
    {
    }
    /**
     * Gets the stored payment response data.
     *
     * @since 5.10.0
     *
     * @return mixed|array $data
     */
    public function get_stored_payment_response()
    {
    }
    /**
     * Stores payment response data for later use.
     *
     * @since 5.10.0
     *
     * @param mixed|array $data
     */
    public function store_payment_response($data)
    {
    }
    /**
     * Filters and sets the customer's taxable address.
     *
     * This is necessary because Google Pay doesn't ever provide a billing
     * address until after payment is complete. If the shop is set to calculate
     * tax based on the billing address, we need to use the shipping address
     * to at least get some rates for new customers.
     *
     * @internal
     *
     * @since 5.10.0
     *
     * @param array $address taxable address
     * @return array
     */
    public function set_customer_taxable_address($address)
    {
    }
    /**
     * Allows the processing gateway to add Google Pay details to the payment data.
     *
     * @internal
     *
     * @since 5.10.0
     *
     * @param \WC_Order $order the order object
     * @return \WC_Order
     */
    public function add_order_data($order)
    {
    }
    /**
     * Gets the currencies supported by the gateway and available for shipping.
     *
     * @since 5.10.0
     *
     * @return array
     */
    public function get_available_countries()
    {
    }
    /**
     * Gets the currencies accepted by the gateway's Google Pay integration.
     *
     * @since 5.10.0
     *
     * @return array
     */
    public function get_accepted_currencies()
    {
    }
    /**
     * Gets the supported networks for Google Pay.
     *
     * @since 5.10.0
     *
     * @return array
     */
    public function get_supported_networks()
    {
    }
    /**
     * Gets the Google Pay merchant ID.
     *
     * @since 5.10.0
     *
     * @see https://developers.google.com/pay/api/web/reference/request-objects#MerchantInfo
     *
     * @return string
     */
    public function get_merchant_id(): string
    {
    }
    /**
     * Gets the gateway merchant ID.
     *
     * This is different from the Google Pay Merchant ID.
     * Each plugin can override this method to get the merchant ID from their own setting.
     *
     * @see https://developers.google.com/pay/api/web/guides/tutorial#tokenization
     *
     * @since 5.15.3
     *
     * @return string
     */
    public function get_gateway_merchant_id(): string
    {
    }
    /**
     * Gets the merchant name.
     *
     * Defaults to the blog name.
     *
     * @since 5.15.3
     *
     * @return string
     */
    public function get_merchant_name(): string
    {
    }
}
namespace SkyVerge\WooCommerce\PluginFramework\v6_0_1\Payment_Gateway\External_Checkout;

/**
 * A helper that handles order creation outside the regular WC checkout process.
 *
 * @see \WC_Checkout
 *
 * @since 5.10.0
 */
#[\AllowDynamicProperties]
class Orders
{
    /**
     * Creates an order from a cart.
     *
     * @since 5.10.0
     *
     * @param \WC_Cart $cart cart object
     * @param array $order_data order data
     * @return \WC_Order
     * @throws \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Exception
     * @throws \Exception
     */
    public static function create_order(\WC_Cart $cart, $order_data = [])
    {
    }
    /**
     * Gets the hash of the cart based on the cart contents.
     *
     * @since 5.10.0
     *
     * @param \WC_Cart $cart cart object
     * @return string
     */
    private static function get_cart_hash(\WC_Cart $cart)
    {
    }
    /**
     * Gets an order object for payment.
     *
     * @since 5.10.0
     *
     * @see \WC_Checkout::create_order()
     *
     * @param array $order_data the order data
     * @return \WC_Order
     * @throws \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Exception
     */
    public static function get_order_object($order_data)
    {
    }
}
namespace SkyVerge\WooCommerce\PluginFramework\v6_0_1;

/**
 * The Apple Pay API request object.
 *
 * @since 4.7.0
 */
#[\AllowDynamicProperties]
class SV_WC_Payment_Gateway_Apple_Pay_API_Request extends \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_API_JSON_Request
{
    /** @var \SV_WC_Payment_Gateway $gateway the gateway instance */
    protected $gateway;
    /**
     * Constructs the request.
     *
     * @since 4.7.0
     *
     * @param \SV_WC_Payment_Gateway $gateway the gateway instance
     */
    public function __construct(\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway $gateway)
    {
    }
    /**
     * Sets the data for merchant validation.
     *
     * @since 4.7.0
     *
     * @param string $merchant_id the merchant ID to validate
     * @param string $domain_name the verified domain name
     * @param string $display_name the merchant display name
     */
    public function set_merchant_data($merchant_id, $domain_name, $display_name)
    {
    }
    /**
     * Get the string representation of this response with any and all sensitive
     * elements masked or removed.
     *
     * @since 4.7.0
     * @see SV_WC_API_Response::to_string_safe()
     *
     * @return string
     */
    public function to_string_safe()
    {
    }
}
/**
 * The Apple Pay API response object.
 *
 * @since 4.7.0
 */
#[\AllowDynamicProperties]
class SV_WC_Payment_Gateway_Apple_Pay_API_Response extends \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_API_JSON_Response
{
    /**
     * Gets the status code.
     *
     * @since 4.7.0
     *
     * @return string
     */
    public function get_status_code()
    {
    }
    /**
     * Gets the status message.
     *
     * @since 4.7.0
     *
     * @return string
     */
    public function get_status_message()
    {
    }
    /**
     * Gets the validated merchant session.
     *
     * @since 4.7.0
     *
     * @return string|array
     */
    public function get_merchant_session()
    {
    }
    /**
     * Get the string representation of this response with any and all sensitive
     * elements masked or removed.
     *
     * No strong indication from the Apple documentation that these _need_ to be
     * masked, but they don't provide any useful info and only make the debug
     * logs unnecessarily huge.
     *
     * @since 4.7.0
     * @see SV_WC_API_Response::to_string_safe()
     *
     * @return string
     */
    public function to_string_safe()
    {
    }
}
/**
 * Sets up the Apple Pay API.
 *
 * @since 4.7.0
 */
#[\AllowDynamicProperties]
class SV_WC_Payment_Gateway_Apple_Pay_API extends \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_API_Base
{
    /** @var \SV_WC_Payment_Gateway the gateway instance */
    protected $gateway;
    /**
     * Constructs the class.
     *
     * @since 4.7.0
     *
     * @param \SV_WC_Payment_Gateway the gateway instance
     */
    public function __construct(\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway $gateway)
    {
    }
    /**
     * Validates the Apple Pay merchant.
     *
     * @since 4.7.0
     *
     * @param string $url the validation URL
     * @param string $merchant_id the merchant ID to validate
     * @param string $domain_name the verified domain name
     * @param string $display_name the merchant display name
     * @return SV_WC_Payment_Gateway_Apple_Pay_API_Response the response object
     * @throws SV_WC_API_Exception
     */
    public function validate_merchant($url, $merchant_id, $domain_name, $display_name)
    {
    }
    /**
     * Performs the request and return the parsed response.
     *
     * @since 4.7.0
     *
     * @param SV_WC_API_Request|object
     * @return SV_WC_API_Response|object
     * @throws SV_WC_API_Exception
     */
    protected function perform_request($request)
    {
    }
    /**
     * Sets the PEM file required for authentication.
     *
     * @internal
     *
     * @since 4.7.0
     *
     * @param resource $curl_handle
     */
    public function set_cert_file($curl_handle)
    {
    }
    /** Validation methods ****************************************************/
    /**
     * Validates the post-parsed response.
     *
     * @since 4.7.0
     *
     * @return bool
     *
     * @throws SV_WC_API_Exception
     */
    protected function do_post_parse_response_validation()
    {
    }
    /** Helper methods ********************************************************/
    /**
     * Gets a new request object.
     *
     * @since 4.7.0
     *
     * @param array $type Optional. The desired request type
     * @return SV_WC_Payment_Gateway_Apple_Pay_API_Request the request object
     */
    protected function get_new_request($type = array())
    {
    }
    /**
     * Gets the gateway instance.
     *
     * @since 4.7.0
     *
     * @return \SV_WC_Payment_Gateway
     */
    protected function get_gateway()
    {
    }
    /**
     * Gets the plugin instance.
     *
     * @since 4.7.0
     *
     * @return \SV_WC_Payment_Gateway_Plugin
     */
    protected function get_plugin()
    {
    }
}
/**
 * The Apple Pay payment response object.
 *
 * @since 4.7.0
 */
#[\AllowDynamicProperties]
class SV_WC_Payment_Gateway_Apple_Pay_Payment_Response extends \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_API_JSON_Response
{
    /**
     * Gets the authorized payment data.
     *
     * @since 4.7.0
     *
     * @return array
     */
    public function get_payment_data()
    {
    }
    /**
     * Gets the authorization transaction ID.
     *
     * @since 4.7.0
     *
     * @return string
     */
    public function get_transaction_id()
    {
    }
    /**
     * Gets the authorized card type.
     *
     * @since 4.7.0
     *
     * @return string
     */
    public function get_card_type()
    {
    }
    /**
     * Gets the last four digits of the authorized card.
     *
     * @since 4.7.0
     *
     * @return string
     */
    public function get_last_four()
    {
    }
    /**
     * Gets the billing address.
     *
     * @since 4.7.0
     *
     * @return array
     */
    public function get_billing_address()
    {
    }
    /**
     * Gets the shipping address.
     *
     * @since 4.7.0
     *
     * @return array
     */
    public function get_shipping_address()
    {
    }
    /**
     * Prepare an address to WC formatting.
     *
     * @since 4.7.0
     *
     * @param \stdClass|object $contact the address to prepare
     * @return array
     */
    protected function prepare_address($contact)
    {
    }
    /**
     * Get the string representation of this response with any and all sensitive
     * elements masked or removed.
     *
     * No strong indication from the Apple documentation that these _need_ to be
     * masked, but they don't provide any useful info and only make the debug
     * logs unnecessarily huge.
     *
     * @since 4.7.0
     *
     * @see SV_WC_API_Response::to_string_safe()
     * @return string
     */
    public function to_string_safe()
    {
    }
}
/**
 * Sets up the Apple Pay settings screen.
 *
 * @since 4.7.0
 */
#[\AllowDynamicProperties]
class SV_WC_Payment_Gateway_Apple_Pay_Admin extends \SkyVerge\WooCommerce\PluginFramework\v6_0_1\Payment_Gateway\External_Checkout\Admin
{
    /** @var SV_WC_Payment_Gateway_Apple_Pay the Apple Pay handler instance */
    protected $handler;
    /**
     * Construct the class.
     *
     * @since 4.7.0
     *
     * @param SV_WC_Payment_Gateway_Apple_Pay $handler main Apple Pay handler instance
     */
    public function __construct($handler)
    {
    }
    /**
     * Gets the name of the Apple Pay settings section.
     *
     * @since 5.10.0
     *
     * @return string
     */
    protected function get_settings_section_name()
    {
    }
    /**
     * Gets all of the combined settings.
     *
     * @since 4.7.0
     *
     * @return array $settings combined settings.
     */
    public function get_settings()
    {
    }
    /**
     * Gets the connection settings for Apple Pay.
     *
     * @since 5.10.0
     *
     * @return array $settings connection settings
     */
    protected function get_connection_settings()
    {
    }
    /**
     * Gets the gateways that declare support for Apple Pay.
     *
     * @since 5.10.0
     *
     * @return array
     */
    protected function get_supporting_gateways()
    {
    }
    /**
     * Gets the error messages for configuration issues that need attention.
     *
     * @since 5.10.0
     *
     * @return string[] error messages
     */
    protected function get_configuration_errors()
    {
    }
}
/**
 * The Apple Pay AJAX handler.
 *
 * @since 4.7.0
 */
#[\AllowDynamicProperties]
class SV_WC_Payment_Gateway_Apple_Pay_AJAX
{
    /** @var SV_WC_Payment_Gateway_Apple_Pay $handler the Apple Pay handler instance */
    protected $handler;
    /**
     * Constructs the class.
     *
     * @since 4.7.0
     *
     * @param SV_WC_Payment_Gateway_Apple_Pay $handler the Apple Pay handler instance
     */
    public function __construct(\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Apple_Pay $handler)
    {
    }
    /**
     * Adds the action & filter hooks.
     *
     * @since 5.6.0
     */
    protected function add_hooks()
    {
    }
    /**
     * Gets a payment request for the specified type.
     *
     * @internal
     *
     * @since 4.7.0
     */
    public function get_payment_request()
    {
    }
    /**
     * Validates the merchant.
     *
     * @internal
     *
     * @since 4.7.0
     */
    public function validate_merchant()
    {
    }
    /**
     * Recalculates the totals for the current payment request.
     *
     * @internal
     *
     * @since 4.7.0
     */
    public function recalculate_totals()
    {
    }
    /**
     * Processes the payment after the Apple Pay authorization.
     *
     * @internal
     *
     * @since 4.7.0
     */
    public function process_payment()
    {
    }
    /**
     * Gets the Apple Pay handler instance.
     *
     * @since 4.7.0
     *
     * @return SV_WC_Payment_Gateway_Apple_Pay
     */
    protected function get_handler()
    {
    }
}
/**
 * Sets up the Apple Pay front-end functionality.
 *
 * @since 4.7.0
 */
#[\AllowDynamicProperties]
class SV_WC_Payment_Gateway_Apple_Pay_Frontend extends \SkyVerge\WooCommerce\PluginFramework\v6_0_1\Payment_Gateway\External_Checkout\Frontend
{
    /** @var string JS handler base class name, without the FW version */
    protected $js_handler_base_class_name = 'SV_WC_Apple_Pay_Handler';
    /**
     * Constructs the class.
     *
     * @since 4.7.0
     *
     * @param SV_WC_Payment_Gateway_Plugin $plugin the gateway plugin instance
     * @param SV_WC_Payment_Gateway_Apple_Pay $handler the Apple Pay handler instance
     */
    public function __construct(\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Plugin $plugin, \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Apple_Pay $handler)
    {
    }
    /**
     * Adds the action and filter hooks.
     *
     * @since 5.7.0
     */
    protected function add_hooks()
    {
    }
    /**
     * Gets the script ID.
     *
     * @since 5.7.0
     *
     * @return string
     */
    public function get_id()
    {
    }
    /**
     * Gets the script ID, dasherized.
     *
     * @since 5.7.0
     *
     * @return string
     */
    public function get_id_dasherized()
    {
    }
    /**
     * Enqueues the scripts.
     *
     * @since 4.7.0
     */
    public function enqueue_scripts()
    {
    }
    /**
     * Gets the JS handler arguments.
     *
     * @since 5.7.0
     *
     * @return array
     */
    protected function get_js_handler_args()
    {
    }
    /**
     * Renders an Apple Pay button.
     *
     * @since 4.7.0
     */
    public function render_button()
    {
    }
    /**
     * Gets the args passed to the product JS handler.
     *
     * @since 5.6.0
     *
     * @param \WC_Product $product product object
     * @return array
     */
    protected function get_product_js_handler_args(\WC_Product $product)
    {
    }
    /** Cart functionality ****************************************************/
    /**
     * Gets the args passed to the cart JS handler.
     *
     * @since 5.6.0
     *
     * @param \WC_Cart $cart cart object
     * @return array
     */
    protected function get_cart_js_handler_args(\WC_Cart $cart)
    {
    }
    /** Checkout functionality ************************************************/
    /**
     * Gets the args passed to the checkout JS handler.
     *
     * @since 5.6.0
     *
     * @return array
     */
    protected function get_checkout_js_handler_args()
    {
    }
}
/**
 * Sets up Apple Pay support.
 *
 * @since 4.7.0
 */
#[\AllowDynamicProperties]
class SV_WC_Payment_Gateway_Apple_Pay extends \SkyVerge\WooCommerce\PluginFramework\v6_0_1\Payment_Gateway\External_Checkout\External_Checkout
{
    /** @var SV_WC_Payment_Gateway_Apple_Pay_Admin the admin instance */
    protected $admin;
    /** @var SV_WC_Payment_Gateway_Apple_Pay_Frontend the frontend instance */
    protected $frontend;
    /** @var SV_WC_Payment_Gateway_Apple_Pay_AJAX the AJAX instance */
    protected $ajax;
    /** @var SV_WC_Payment_Gateway_Apple_Pay_API the Apple Pay API */
    protected $api;
    /**
     * Constructs the class.
     *
     * @since 4.7.0
     *
     * @param SV_WC_Payment_Gateway_Plugin $plugin the plugin instance
     * @param array<string, mixed> $args optional arguments
     */
    public function __construct(\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Plugin $plugin, array $args = [])
    {
    }
    /**
     * Initializes the admin handler.
     *
     * @since 5.6.0
     */
    protected function init_admin()
    {
    }
    /**
     * Initializes the AJAX handler.
     *
     * @since 5.6.0
     */
    protected function init_ajax()
    {
    }
    /**
     * Initializes the frontend handler.
     *
     * @since 5.6.0
     */
    protected function init_frontend()
    {
    }
    /**
     * Checks if the external checkout provides the customer billing address to WC before payment confirmation.
     *
     * @since 5.10.0
     *
     * @return bool
     */
    public function is_billing_address_available_before_payment()
    {
    }
    /**
     * Processes the payment after an Apple Pay authorization.
     *
     * This method creates a new order and calls the gateway for processing.
     *
     * @since 4.7.0
     *
     * @return array
     * @throws \Exception
     */
    public function process_payment()
    {
    }
    /**
     * Updates a customer's stored billing & shipping addresses based on the
     * Apple Pay payment response.
     *
     * @since 4.7.0
     *
     * @param int $user_id WordPress user ID
     * @param SV_WC_Payment_Gateway_Apple_Pay_Payment_Response $payment_response payment response object
     */
    protected function update_customer_addresses($user_id, \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Apple_Pay_Payment_Response $payment_response)
    {
    }
    /**
     * Gets a single product payment request.
     *
     * @since 4.7.0
     * @see SV_WC_Payment_Gateway_Apple_Pay::build_payment_request()
     *
     * @param \WC_Product $product product object
     * @param bool $in_cart whether to generate a cart for this request
     * @return array
     * @throws \Exception
     */
    public function get_product_payment_request(\WC_Product $product, $in_cart = false)
    {
    }
    /**
     * Gets a payment request based on WooCommerce cart data.
     *
     * @since 4.7.0
     * @see SV_WC_Payment_Gateway_Apple_Pay::build_payment_request()
     *
     * @param \WC_Cart $cart cart object
     * @return array
     * @throws SV_WC_Payment_Gateway_Exception
     */
    public function get_cart_payment_request(\WC_Cart $cart)
    {
    }
    /**
     * Recalculates the lines and totals for the current payment request.
     *
     * @since 4.7.0
     *
     * @return array
     * @throws \Exception
     */
    public function recalculate_totals()
    {
    }
    /**
     * Gets the line totals for a cart.
     *
     * @since 4.7.0
     * @see SV_WC_Payment_Gateway_Apple_Pay::build_payment_request_lines()
     *
     * @param \WC_Cart $cart cart object
     * @return array
     */
    protected function get_cart_totals(\WC_Cart $cart)
    {
    }
    /**
     * Builds a payment request for the Apple Pay JS.
     *
     * This contains all of the data necessary to complete a payment.
     *
     * @since 4.7.0
     *
     * @param float|int $amount amount to be charged by Apple Pay
     * @param array $args {
     *     Optional. The payment request args.
     *
     *     @type string $currency_code         Payment currency code. Defaults to the shop currency.
     *     @type string $country_code          Payment country code. Defaults to the shop base country.
     *     @type string $merchant_name         Merchant name. Defaults to the shop name.
     *     @type array  $merchant_capabilities merchant capabilities
     *     @type array  $supported_networks    supported networks or card types
     *     @type bool   $needs_shipping        whether the payment needs shipping
     *     @type array  $line_totals           request line totals. @see \SV_WC_Payment_Gateway_Apple_Pay::build_payment_request_lines()
     * }
     *
     * @return array
     */
    public function build_payment_request($amount, $args = [])
    {
    }
    /**
     * Builds payment request lines for the Apple Pay JS.
     *
     * Apple guidelines prefer that the "lines" displayed on the Apple Pay card
     * should be overall order totals, instead of listing actual product lines.
     * This method standardizes the main breakdowns which are:
     * + Subtotal
     * + Discounts (represented as a single negative amount)
     * + Shipping
     * + Fees
     * + Taxes
     *
     * @since 4.7.0
     *
     * @param array $totals {
     *     Payment line totals.
     *
     *     @type float $subtotal items subtotal
     *     @type float $discount discounts total
     *     @type float $shipping shipping total
     *     @type float $fees     fees total
     *     @type float $taxes    tax total
     * }
     * @return array
     */
    public function build_payment_request_lines($totals)
    {
    }
    /**
     * Formats a total price for use with Apple Pay JS.
     *
     * @since 4.7.0
     *
     * @param string|float $price the price to format
     * @return string
     */
    protected function format_price($price)
    {
    }
    /**
     * Gets the stored payment request data.
     *
     * @since 4.7.0
     *
     * @return array
     */
    public function get_stored_payment_request()
    {
    }
    /**
     * Gets the stored payment response data.
     *
     * @since 4.7.0
     *
     * @return false|SV_WC_Payment_Gateway_Apple_Pay_Payment_Response|false
     */
    public function get_stored_payment_response()
    {
    }
    /**
     * Builds a payment response object from an array of data.
     *
     * @since 5.6.0
     *
     * @param string $data response data, as a JSON string
     * @return SV_WC_Payment_Gateway_Apple_Pay_Payment_Response
     */
    protected function build_payment_response($data)
    {
    }
    /**
     * Stores payment request data for later use.
     *
     * @since 4.7.0
     *
     * @param mixed|array $data
     */
    public function store_payment_request($data)
    {
    }
    /**
     * Stores payment response data for later use.
     *
     * @since 4.7.0
     *
     * @param mixed|array $data
     */
    public function store_payment_response($data)
    {
    }
    /**
     * Clears all payment request & response data from the session.
     *
     * @since 4.7.0
     */
    public function clear_payment_data()
    {
    }
    /**
     * Filters and sets the customer's taxable address.
     *
     * This is necessary because Apple Pay doesn't ever provide a billing
     * address until after payment is complete. If the shop is set to calculate
     * tax based on the billing address, we need to use the shipping address
     * to at least get some rates for new customers.
     *
     * @internal
     *
     * @since 4.7.0
     *
     * @param array $address taxable address
     * @return array
     */
    public function set_customer_taxable_address($address)
    {
    }
    /**
     * Allows the processing gateway to add Apple Pay details to the payment data.
     *
     * @internal
     *
     * @since 4.7.0
     *
     * @param \WC_Order $order the order object
     * @return \WC_Order
     */
    public function add_order_data($order)
    {
    }
    /**
     * Gets the Apple Pay API.
     *
     * @since 4.7.0
     *
     * @return SV_WC_Payment_Gateway_Apple_Pay_API
     */
    public function get_api()
    {
    }
    /**
     * Determines if Apple Pay is available.
     *
     * This does not indicate browser support or a user's ability, but rather
     * that Apple Pay is properly configured and ready to be initiated by the
     * Apple Pay JS.
     *
     * @since 4.7.0
     *
     * @return bool
     */
    public function is_available()
    {
    }
    /**
     * Determines if Apple Pay settings are properly configured.
     *
     * @since 4.7.0
     *
     * @return bool
     */
    public function is_configured()
    {
    }
    /**
     * Determines if the certification path is set and valid.
     *
     * @since 4.7.0
     *
     * @return bool
     */
    public function is_cert_configured()
    {
    }
    /**
     * Determines if a merchant ID is required for configuration.
     *
     * @since 5.6.0
     *
     * @return bool
     */
    public function requires_merchant_id()
    {
    }
    /**
     * Determines if a local Apple Pay certificate is required for configuration.
     *
     * @since 5.6.0
     *
     * @return bool
     */
    public function requires_certificate()
    {
    }
    /**
     * Gets the configured Apple merchant ID.
     *
     * @since 4.7.0
     * @return string
     */
    public function get_merchant_id()
    {
    }
    /**
     * Gets the certificate file path.
     *
     * @since 4.7.0
     *
     * @return string
     */
    public function get_cert_path()
    {
    }
    /**
     * Gets the currencies accepted by the gateway's Apple Pay integration.
     *
     * @since 4.7.0
     *
     * @return array
     */
    public function get_accepted_currencies()
    {
    }
    /**
     * Gets the gateway's Apple Pay capabilities.
     *
     * @since 4.7.0
     *
     * @return array
     */
    public function get_capabilities()
    {
    }
    /**
     * Gets the supported networks for Apple Pay.
     *
     * @since 4.7.0
     *
     * @return array
     */
    public function get_supported_networks()
    {
    }
}
namespace SkyVerge\WooCommerce\PluginFramework\v6_0_1\Payment_Gateway\Handlers;

/**
 * The base payment handler class.
 *
 * This acts as an abstracted handler for processing payments, regardless of their front-end or API implementation.
 * Both direct and hosted gateways' transactions end up as the same response object, which this class handles for order
 * updating.
 *
 * @see Abstract_Hosted_Payment_Handler
 *
 * @since 5.4.0
 */
#[\AllowDynamicProperties]
abstract class Abstract_Payment_Handler
{
    /** the success result code */
    const RESULT_CODE_SUCCESS = 'success';
    /** the failure result code */
    const RESULT_CODE_FAILURE = 'failure';
    /** @var \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway gateway instance */
    protected $gateway;
    /**
     * Constructs the class.
     *
     * @since 5.4.0
     *
     * @param \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway $gateway
     */
    public function __construct(\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway $gateway)
    {
    }
    /**
     * Adds any action and filter hooks required by the handler.
     *
     * @since 5.4.0
     */
    protected function add_hooks()
    {
    }
    /**
     * Renders a custom held order message if available.
     *
     * @since 5.4.0
     *
     * @param string $text default text
     * @param \WC_Order $order order object
     *
     * @return mixed
     */
    public function maybe_render_held_order_received_text($text, $order)
    {
    }
    /**
     * Processes payment for an order.
     *
     * @since 5.4.0
     *
     * @param \WC_Order $order order object
     * @return array
     * @throws \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Plugin_Exception
     */
    abstract public function process_order_payment(\WC_Order $order);
    /**
     * Processes a gateway API payment response and handles the order accordingly.
     *
     * @since 5.4.0
     *
     * @param \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Response $response
     * @param \WC_Order $order
     * @throws \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Exception for payment failures
     * @throws \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Plugin_Exception for other validation errors
     */
    protected function process_transaction_response(\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Response $response, \WC_Order $order)
    {
    }
    /**
     * Validates a transaction response & its order.
     *
     * This ensures duplicate or fraudulent responses aren't processed. Implementations can add exceptions to this for
     * things like invalid hashes, etc...
     *
     * @since 5.4.0
     *
     * @param \WC_Order $order order object
     * @param \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Response $response API response object
     * @throws \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_API_Exception
     */
    protected function validate_transaction_response(\WC_Order $order, \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Response $response)
    {
    }
    /**
     * Handles actions after an approved transaction.
     *
     * @since 5.4.0
     *
     * @param \WC_Order $order order object
     * @param \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Response $response API response object
     */
    protected function process_order_transaction_approved(\WC_Order $order, \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Response $response)
    {
    }
    /**
     * Handles actions after a held transaction.
     *
     * @since 5.4.0
     *
     * @param \WC_Order $order order object
     * @param \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Response $response API response object
     */
    protected function process_order_transaction_held(\WC_Order $order, \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Response $response)
    {
    }
    /**
     * Handles actions after a failed transaction.
     *
     * @since 5.4.0
     *
     * @param \WC_Order $order order object
     * @param string $message failure message
     * @param \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Response|null $response response object
     */
    protected function process_order_transaction_failed(\WC_Order $order, $message = '', ?\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Response $response = null)
    {
    }
    /** Order marking methods *****************************************************************************************/
    /**
     * Marks an order as paid.
     *
     * @since 5.4.0
     *
     * @param \WC_Order $order order object
     * @param \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Customer_Response|\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Response|null $response API response object
     */
    public function mark_order_as_paid(\WC_Order $order, ?\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Response $response = null)
    {
    }
    /**
     * Marks an order as approved.
     *
     * @since 5.4.0
     *
     * @param \WC_Order $order order object
     * @param string $message message for the order note
     * @param \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Response|null $response API response object
     */
    public function mark_order_as_approved(\WC_Order $order, $message = '', ?\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Response $response = null)
    {
    }
    /**
     * Marks an order as held for review.
     *
     * Adds an order note and transitions to a held status.
     *
     * @since 5.4.0
     *
     * @param \WC_Order $order order object
     * @param string $message order note message
     * @param \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Response|null $response
     */
    public function mark_order_as_held(\WC_Order $order, $message = '', ?\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Response $response = null)
    {
    }
    /**
     * Gets the order status used for held orders.
     *
     * @since 5.4.0
     *
     * @param \WC_Order $order order object
     * @param \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Response|null $response API response object
     *
     * @return string
     */
    public function get_held_order_status(\WC_Order $order, ?\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Response $response = null)
    {
    }
    /**
     * Marks an order as failed.
     *
     * @since 5.4.0
     *
     * @param \WC_Order $order order object
     * @param string $message order note message
     * @param \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Response|null $response
     */
    public function mark_order_as_failed(\WC_Order $order, $message = '', ?\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Response $response = null)
    {
    }
    /**
     * Marks an order as cancelled.
     *
     * @since 5.4.0
     *
     * @param \WC_Order $order order object
     * @param string $message order note message
     * @param \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Response|null $response
     */
    public function mark_order_as_cancelled(\WC_Order $order, $message, ?\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Response $response = null)
    {
    }
    /** Conditional methods *******************************************************************************************/
    /** Getter methods ************************************************************************************************/
    /**
     * Gets the gateway object.
     *
     * @since 5.4.0
     *
     * @return \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway
     */
    public function get_gateway()
    {
    }
    /** Setter methods ************************************************************************************************/
}
/**
 * The base hosted payment handler.
 *
 * Gateways can use this for common hosted response handling.
 *
 * @since 5.4.0
 */
#[\AllowDynamicProperties]
abstract class Abstract_Hosted_Payment_Handler extends \SkyVerge\WooCommerce\PluginFramework\v6_0_1\Payment_Gateway\Handlers\Abstract_Payment_Handler
{
    /**
     * Adds the action & filter hooks.
     *
     * @since 5.4.0
     */
    protected function add_hooks()
    {
    }
    /**
     * Processes a new order payment.
     *
     * This simply gets the URL for a redirect.
     *
     * @since 5.4.0
     *
     * @param \WC_Order $order order object
     * @return array
     * @throws \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Plugin_Exception
     */
    public function process_order_payment(\WC_Order $order)
    {
    }
    /**
     * Renders the payment page.
     *
     * @since 5.4.0
     *
     * @param int $order_id order ID
     */
    public function payment_page($order_id)
    {
    }
    /**
     * Gets payment params for the given order object.
     *
     * @since 5.4.0
     *
     * @param \WC_Order $order order object
     * @return array
     */
    public function get_order_payment_params(\WC_Order $order)
    {
    }
    /**
     * Gets the URL for the hosted payment page or form.
     *
     * @since 5.4.0
     *
     * @return string
     */
    abstract protected function get_hosted_payment_url();
    /**
     * Gets the response handler URL.
     *
     * @since 5.4.0
     *
     * @return string
     */
    public function get_response_handler_url()
    {
    }
    /**
     * Handles a transaction response request via the wc-api endpoint.
     *
     * @since 5.4.0
     */
    public function handle_transaction_response_request()
    {
    }
    /**
     * Handles the response when processing is complete.
     *
     * @since 5.4.0
     *
     * @param \WC_Order|null $order order object, if any
     * @param \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Response|null $response API response object, if any
     */
    protected function do_transaction_response_complete(?\WC_Order $order = null, ?\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Response $response = null)
    {
    }
    /**
     * Handles the response when processing has failed.
     *
     * @since 5.4.0
     *
     * @param \WC_Order|null $order order object, if any
     * @param string $message error message, for logging
     * @param string $user_message user-facing message
     * @param \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Response|null $response API response object, if any
     */
    protected function do_transaction_response_failed(?\WC_Order $order = null, $message = '', $user_message = '', ?\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Response $response = null)
    {
    }
    /**
     * Handles the response when the response data is invalid.
     *
     * This will trigger when there is no way to salvage the payment, i.e. when the response data is invalid.
     *
     * @since 5.4.0
     *
     * @param \WC_Order|null $order order object, if any
     * @param string $message error message, for logging
     * @param \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Response|null $response API response object, if any
     */
    protected function do_transaction_response_invalid(?\WC_Order $order = null, $message = '', ?\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Response $response = null)
    {
    }
    /**
     * Handles the final payment request response.
     *
     * This is the final step after all payment verification and processing, and runs regardless of the transaction
     * result.
     *
     * @since 5.4.0
     *
     * @param \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Response|null $response
     * @param string $url
     */
    protected function do_transaction_request_response(?\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Response $response = null, $url = '')
    {
    }
    /**
     * Logs a transaction response request.
     *
     * @since 5.4.0
     *
     * @param string $request data to log
     * @param string $message prefix message, like Request: or Response:
     */
    protected function log_transaction_response_request($request, $message = '')
    {
    }
    /**
     * Gets an order object from an API response.
     *
     * @since 5.4.0
     *
     * @param \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Payment_Notification_Response $response
     * @return \WC_Order
     * @throws \Exception
     */
    protected function get_order_from_response(\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Payment_Notification_Response $response)
    {
    }
    /**
     * Gets an API response object for the given data.
     *
     * @since 5.4.0
     *
     * @param array $request_response_data the current request response data
     * @return \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Payment_Notification_Response API response object
     * @throws \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_API_Exception
     */
    abstract protected function get_transaction_response($request_response_data);
    /** Conditional methods *******************************************************************************************/
    /**
     * Determines whether the payment response is IPN.
     *
     * @since 5.4.0
     *
     * @return bool
     */
    public function is_ipn()
    {
    }
    /**
     * Determines whether this is a redirect hosted form.
     *
     * @since 5.4.0
     *
     * @return bool
     */
    public function is_redirect()
    {
    }
}
/**
 * The transaction capture handler.
 *
 * @since 5.3.0
 */
#[\AllowDynamicProperties]
class Capture
{
    /** @var \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway payment gateway instance */
    private $gateway;
    /**
     * Capture constructor.
     *
     * @since 5.3.0
     *
     * @param \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway $gateway payment gateway instance
     */
    public function __construct(\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway $gateway)
    {
    }
    /**
     * Captures an order on status change to a "paid" status.
     *
     * @internal
     *
     * @since 5.3.0
     *
     * @param int $order_id order ID
     * @param string $old_status status being changed
     * @param string $new_status new order status
     */
    public function maybe_capture_paid_order($order_id, $old_status, $new_status)
    {
    }
    /**
     * Perform a capture on an order if it can be captured.
     *
     * This acts as a wrapper for when the process should just bail without logging any errors or order notes, like when
     * performing capture via bulk action.
     *
     * @since 5.3.0
     *
     * @param \WC_Order $order order object
     * @param float|null $amount amount to capture
     * @return bool
     */
    public function maybe_perform_capture(\WC_Order $order, $amount = null)
    {
    }
    /**
     * Performs a credit card capture for an order.
     *
     * @since 5.3.0
     *
     * @param \WC_Order $order WooCommerce order object
     * @param float|null $amount amount to capture
     * @return array {
     *     Capture transaction results
     *
     *     @type bool   $success whether the capture was successful
     *     @type int    $code    result code
     *     @type string $message result message
     * }
     */
    public function perform_capture(\WC_Order $order, $amount = null)
    {
    }
    /**
     * Adds the standard capture data to an order.
     *
     * @since 5.3.0
     *
     * @param \WC_Order $order the order object
     * @param \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Response $response transaction response
     */
    public function do_capture_success(\WC_Order $order, \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Response $response)
    {
    }
    /**
     * Lets gateways handle any specific capture failure results for the order.
     *
     * @since 5.3.0
     *
     * @param \WC_Order $order WooCommerce order object
     * @param \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Response $response API response object
     */
    public function do_capture_failed(\WC_Order $order, \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Response $response)
    {
    }
    /** Conditional Methods *******************************************************************************************/
    /**
     * Determines if an order is eligible for capture.
     *
     * @since 5.3.0
     *
     * @param \WC_Order $order order object
     * @return bool
     */
    public function order_can_be_captured(\WC_Order $order)
    {
    }
    /**
     * Determines if an order is ready for capture.
     *
     * The base implementation of this method checks for a valid order status and that a transaction ID is set.
     *
     * @since 5.3.0
     *
     * @param \WC_Order $order order object
     * @return bool
     */
    public function is_order_ready_for_capture(\WC_Order $order)
    {
    }
    /**
     * Determines if an order has been fully captured
     *
     * @since 5.3.0
     *
     * @param \WC_Order $order
     * @return bool
     */
    public function is_order_fully_captured(\WC_Order $order)
    {
    }
    /**
     * Determines if an order's authorization has expired.
     *
     * @since 5.3.0
     *
     * @param \WC_Order $order
     * @return bool
     */
    public function has_order_authorization_expired(\WC_Order $order)
    {
    }
    /**
     * Determines if an order's authorization has been captured, even partially.
     *
     * @since 5.3.0
     *
     * @param \WC_Order $order order object
     * @return bool
     */
    public function is_order_captured(\WC_Order $order)
    {
    }
    /** Getter Methods ************************************************************************************************/
    /**
     * Gets the maximum amount that can be captured from an order.
     *
     * Gateways can override this for an value above or below the order total.
     * For instance, some processors allow capturing an amount a certain
     * percentage higher than the payment total.
     *
     * @since 5.3.0
     *
     * @param \WC_Order $order WooCommerce order object
     * @return float
     */
    public function get_order_capture_maximum(\WC_Order $order)
    {
    }
    /**
     * Gets the amount originally authorized for an order.
     *
     * @since 5.3.0
     *
     * @param \WC_Order $order order object
     * @return float
     */
    public function get_order_authorization_amount(\WC_Order $order)
    {
    }
    /**
     * Gets the payment gateway instance.
     *
     * @since 5.3.0
     *
     * @return \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway
     */
    protected function get_gateway()
    {
    }
}
namespace SkyVerge\WooCommerce\PluginFramework\v6_0_1\Payment_Gateway;

/**
 * Helper class for setting and checking the page context that a payment form for a given gateway is rendered on.
 *
 * @since 5.13.0
 */
class PaymentFormContextChecker
{
    /** @var string ID of the gateway in use */
    protected string $gatewayId;
    public function __construct(string $gatewayId)
    {
    }
    /**
     * Gets the name of the session key where we store context data.
     *
     * @since 5.13.0
     * @return string
     */
    protected function getContextSessionKeyName(): string
    {
    }
    /**
     * Sets the context of the current page, if one is available.
     *
     * @since 5.13.0
     * @return void
     */
    public function maybeSetContext(): void
    {
    }
    /**
     * Gets the context of the current payment form page.
     *
     * @since 5.13.0
     * @return string|null
     */
    protected function getCurrentPaymentFormContext(): ?string
    {
    }
    /**
     * Gets the context stored in the session data.
     *
     * @since 5.13.0
     * @return string|null
     */
    protected function getStoredPaymentFormContext(): ?string
    {
    }
    /**
     * @since 5.13.0
     */
    public function currentContextRequiresTermsAndConditionsAcceptance(): bool
    {
    }
}
namespace SkyVerge\WooCommerce\PluginFramework\v6_0_1\Payment_Gateway\Admin;

/**
 * The payment gateway plugin Setup Wizard class.
 *
 * Extends the base plugin class to add common gateway functionality.
 *
 * @since 5.2.2
 */
#[\AllowDynamicProperties]
abstract class Setup_Wizard extends \SkyVerge\WooCommerce\PluginFramework\v6_0_1\Admin\Setup_Wizard
{
    /**
     * Adds a 'Setup' link to the plugin action links if the wizard hasn't been completed.
     *
     * This will override the plugin's standard "Configure {gateway}" links with a link to
     * this setup wizard.
     *
     * @internal
     *
     * @since 5.2.2
     *
     * @param array $action_links plugin action links
     * @return array
     */
    public function add_setup_link($action_links)
    {
    }
}
namespace SkyVerge\WooCommerce\PluginFramework\v6_0_1;

/**
 * Handle the admin order screens.
 *
 * @since 5.0.0
 */
#[\AllowDynamicProperties]
class SV_WC_Payment_Gateway_Admin_Order
{
    /** @var SV_WC_Payment_Gateway_Plugin the plugin instance **/
    protected $plugin;
    /**
     * Constructs the class.
     *
     * @since 5.0.0
     *
     * @param SV_WC_Payment_Gateway_Plugin The plugin instance
     */
    public function __construct(\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Plugin $plugin)
    {
    }
    /**
     * Enqueues the scripts and styles.
     *
     * @internal
     *
     * @since 5.0.0
     *
     * @param string|mixed $hook_suffix page hook suffix
     */
    public function enqueue_scripts($hook_suffix)
    {
    }
    /**
     * Enqueues the assets for the Edit Order screen.
     *
     * @since 5.3.0
     *
     * @param \WC_Order $order order object
     */
    protected function enqueue_edit_order_assets(\WC_Order $order)
    {
    }
    /** Capture Charge Feature ******************************************************/
    /**
     * Adds 'Capture charge' to the Orders screen bulk action select.
     *
     * @internal
     *
     * @since 5.0.0
     */
    public function maybe_add_capture_charge_bulk_order_action()
    {
    }
    /**
     * Processes the 'Capture Charge' custom bulk action.
     *
     * @internal
     *
     * @since 5.0.0
     *
     * @param string|null|mixed $redirect_url redirect URL if HPOS is used
     * @param string|mixed $action current action if HPOS is used
     * @param int[]|mixed $order_ids applicable order IDS if HPOS is used
     */
    public function process_capture_charge_bulk_order_action($redirect_url = null, $action = '', $order_ids = [])
    {
    }
    /**
     * Adds a "Capture Charge" action to the admin Order Edit screen
     *
     * @since 5.0.0
     *
     * @param array $actions available order actions
     * @return array
     */
    public function add_order_action_charge_action($actions)
    {
    }
    /**
     * Adds the capture charge button to the order UI.
     *
     * @internal
     *
     * @since 5.0.0
     *
     * @param \WC_Order $order order object
     */
    public function add_capture_button($order)
    {
    }
    /**
     * Outputs the partial capture UI HTML.
     *
     * @since 5.0.0
     *
     * @param \WC_Order $order order object
     * @param SV_WC_Payment_Gateway $gateway gateway instance
     */
    protected function output_partial_capture_html(\WC_Order $order, \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway $gateway)
    {
    }
    /**
     * Processes a capture via AJAX.
     *
     * @internal
     *
     * @since 5.0.0
     */
    public function ajax_process_capture()
    {
    }
    /**
     * Gets the gateway object from an order.
     *
     * @since 5.0.0
     *
     * @param \WC_Order $order order object
     * @return SV_WC_Payment_Gateway
     */
    protected function get_order_gateway(\WC_Order $order)
    {
    }
    /**
     * Gets the current action selected from the bulk actions dropdown.
     *
     * @see \WP_List_Table::current_action()
     * Instead of using _get_list_table() to call current_action() we can duplicate its logic here to grab the action context.
     *
     * @since 5.10.14
     *
     * @return string|false the action name or false if no action was detected from the request
     */
    protected function current_action()
    {
    }
    /**
     * Gets the plugin instance.
     *
     * @since 5.0.0
     *
     * @return SV_WC_Payment_Gateway_Plugin the plugin instance
     */
    protected function get_plugin()
    {
    }
}
/**
 * The token editor.
 *
 * @since 4.3.0
 */
#[\AllowDynamicProperties]
class SV_WC_Payment_Gateway_Admin_Payment_Token_Editor
{
    /** @var SV_WC_Payment_Gateway_Direct the gateway object **/
    protected $gateway;
    /**
     * Constructs the editor.
     *
     * @since 4.3.0
     *
     * @param SV_WC_Payment_Gateway_Direct the gateway object
     */
    public function __construct(\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Direct $gateway)
    {
    }
    /**
     * Load the editor scripts and styles.
     *
     * @since 4.3.0
     */
    public function enqueue_scripts_styles()
    {
    }
    /**
     * Display the token editor.
     *
     * @since 4.3.0
     * @param int $user_id the user ID
     */
    public function display($user_id)
    {
    }
    /**
     * Display the tokens.
     *
     * @since 4.3.0
     * @param int $user_id the user ID
     */
    public function display_tokens($user_id)
    {
    }
    /**
     * Save the token editor.
     *
     * @since 4.3.0
     * @param int $user_id the user ID
     */
    public function save($user_id)
    {
    }
    /**
     * Add a token via AJAX.
     *
     * @since 4.3.0
     */
    public function ajax_get_blank_token()
    {
    }
    /**
     * Remove a token via AJAX.
     *
     * @since 4.3.0
     */
    public function ajax_remove_token()
    {
    }
    /**
     * Refresh the tokens list via AJAX.
     *
     * @since 4.3.0
     */
    public function ajax_refresh_tokens()
    {
    }
    /**
     * Builds a token object from data saved in the admin.
     *
     * This method allows concrete gateways to add special token data.
     * See Authorize.net CIM for an example.
     *
     * @since 4.3.0
     *
     * @param int $user_id the user ID
     * @param string $token_id the token ID
     * @param array $data the token data
     * @return SV_WC_Payment_Gateway_Payment_Token the payment token object
     */
    protected function build_token($user_id, $token_id, $data)
    {
    }
    /**
     * Updates a token object with data saved in the admin.
     *
     * @since 5.8.0
     *
     * @param SV_WC_Payment_Gateway_Payment_Token the payment token object to update
     * @param string $token_id the token ID
     * @param array $data the token data
     * @return SV_WC_Payment_Gateway_Payment_Token
     */
    protected function set_token_props($token, $token_id, $data)
    {
    }
    /**
     * Update the user's token data.
     *
     * @since 4.3.0
     * @param int $user_id the user ID
     * @param array the token objects
     */
    protected function update_tokens($user_id, $tokens)
    {
    }
    /**
     * Remove a specific token.
     *
     * @since 4.3.0
     * @param int $user_id the user ID
     * @param string $token_id the token ID
     * @return bool whether the token was successfully removed
     */
    protected function remove_token($user_id, $token_id)
    {
    }
    /**
     * Validate a token's data before saving.
     *
     * Concrete gateways can override this to provide their own validation.
     *
     * @since 4.3.0
     * @param array $data the token data
     * @return array|bool the validated token data or false if the token should not be saved
     */
    protected function validate_token_data($token_id, $data)
    {
    }
    /**
     * Correctly format a credit card expiration date for storage.
     *
     * @since 4.3.0
     * @param array $data
     * @return array
     */
    protected function prepare_expiry_date($data)
    {
    }
    /**
     * Get the stored tokens for a user.
     *
     * @since 4.3.0
     * @param int $user_id the user ID
     * @return array the tokens in db format
     */
    protected function get_tokens($user_id)
    {
    }
    /**
     * Get the editor title.
     *
     * @since 4.3.0
     * @return string
     */
    protected function get_title()
    {
    }
    /**
     * Get the editor columns.
     *
     * @since 4.3.0
     * @return array
     */
    protected function get_columns()
    {
    }
    /**
     * Get the editor fields.
     *
     * @since 4.3.0
     * @return array
     */
    protected function get_fields($type = '')
    {
    }
    /**
     * Get the token payment type.
     *
     * @since 4.3.0
     * @return string
     */
    protected function get_payment_type()
    {
    }
    /**
     * Get the credit card type field options.
     *
     * @since 4.3.0
     * @return array
     */
    protected function get_card_type_options()
    {
    }
    /**
     * Get the HTML name for the token fields.
     *
     * @since 4.3.0
     * @return string
     */
    protected function get_input_name()
    {
    }
    /**
     * Get the available editor actions.
     *
     * @since 4.3.0
     * @return array
     */
    protected function get_actions()
    {
    }
    /**
     * Get the available token actions.
     *
     * @since 4.3.0
     * @return array
     */
    protected function get_token_actions()
    {
    }
    /**
     * Gets the gateway object.
     *
     * @since 4.3.0
     *
     * @return SV_WC_Payment_Gateway_Direct the gateway object
     */
    protected function get_gateway()
    {
    }
}
/**
 * Handle the admin user profile settings.
 *
 * @since 4.3.0
 */
#[\AllowDynamicProperties]
class SV_WC_Payment_Gateway_Admin_User_Handler
{
    /** @var \SV_WC_Payment_Gateway_Plugin the plugin instance **/
    protected $plugin;
    /** @var array the token editor for each gateway **/
    protected $token_editors = array();
    /**
     * Construct the user handler.
     *
     * @since 4.3.0
     * @param \SV_WC_Payment_Gateway_Plugin The plugin instance
     */
    public function __construct(\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Plugin $plugin)
    {
    }
    /**
     * Set up a token editor for each gateway.
     *
     * @since 4.3.0
     */
    public function init_token_editors()
    {
    }
    /**
     * Display the customer profile settings markup.
     *
     * @since 4.3.0
     * @param \WP_User $user The user object
     */
    public function add_profile_section($user)
    {
    }
    /**
     * Display the token editor markup.
     *
     * @since 4.3.0
     * @param \WP_User $user The user object
     */
    public function display_token_editors($user)
    {
    }
    /**
     * Display the customer ID field(s).
     *
     * @since 4.3.0
     * @param \WP_User $user the user object
     */
    public function display_customer_id_fields($user)
    {
    }
    /**
     * Save the user profile section fields.
     *
     * @since 4.3.0
     * @param int $user_id the user ID
     */
    public function save_profile_fields($user_id)
    {
    }
    /**
     * Save the token data from each token editor.
     *
     * @since 4.3.0
     * @param int $user_id the user ID
     */
    protected function save_tokens($user_id)
    {
    }
    /**
     * Save the customer IDs.
     *
     * @since 4.3.0
     * @param int $user_id the user ID
     */
    protected function save_customer_ids($user_id)
    {
    }
    /** Getter methods ******************************************************/
    /**
     * Get the token editor section title.
     *
     * @since 4.3.0
     * @return string
     */
    protected function get_title()
    {
    }
    /**
     * Get the token editor section description.
     *
     * @since 4.3.0
     * @return string
     */
    protected function get_description()
    {
    }
    /**
     * Get the token editor objects.
     *
     * @since 4.3.0
     * @return array
     */
    protected function get_token_editors()
    {
    }
    /**
     * Get the customer ID fields for the plugin's gateways.
     *
     * In most cases, this will be a single field unless the plugin has multiple gateways and they
     * are set to different environments.
     *
     * @since 4.3.0
     * @param int $user_id the user ID
     * @return array {
     *     The fields data
     *
     *     @type string $label the field label
     *     @type string $name  the input name
     *     @type string $value the input value
     * }
     */
    protected function get_customer_id_fields($user_id)
    {
    }
    /**
     * Get the unique environments between the plugin's gateways.
     *
     * @since 4.3.0
     * @return array the environments in the format `$environment_id => $environment_name`
     */
    protected function get_unique_environments()
    {
    }
    /**
     * Get the gateways that support tokenization and are enabled.
     *
     * @since 4.3.0
     * @return array
     */
    protected function get_tokenized_gateways()
    {
    }
    /** Conditional methods ******************************************************/
    /**
     * Determine if the user profile section is supported by at least one gateway.
     *
     * @since 4.3.0
     * @return bool
     */
    protected function is_supported()
    {
    }
    /**
     * Determine if the plugin has varying environments between its gateways.
     *
     * @since 4.3.0
     * @return bool
     */
    public function has_multiple_environments()
    {
    }
    /**
     * Get the plugin instance.
     *
     * @since 4.3.0
     * @return \SV_WC_Payment_Gateway_Plugin the plugin instance
     */
    protected function get_plugin()
    {
    }
}
/**
 * WooCommerce Payment Gateway API Response Message Helper
 *
 * This utility class is meant to provide a standard set of error messages to be
 * displayed to the customer during checkout.
 *
 * Most gateways define a plethora of error conditions, some of which a customer
 * can resolve on their own, and others which must be handled by the admin/
 * merchant.  It's not always clear which conditions should be reported to a
 * customer, or what the best wording is.  This utility class seeks to ease
 * the development burden of handling customer-facing error messages by
 * defining a set of common error conditions/messages which can be used by
 * nearly any gateway.
 *
 * This class, or a subclass, should be instantiated by the API response object,
 * which will use a gateway-specific mapping of error conditions to message,
 * and returned by the `SV_WC_Payment_Gateway_API_Response::get_user_message()`
 * method implementation.  Add new common/generic codes and messages to this
 * base class as they are encountered during gateway integration development,
 * and use a subclass to include any gateway-specific codes/messages.
 *
 * @since 2.2.0
 */
#[\AllowDynamicProperties]
class SV_WC_Payment_Gateway_API_Response_Message_Helper
{
    /**
     * Returns a message appropriate for a frontend user.  This should be used
     * to provide enough information to a user to allow them to resolve an
     * issue on their own, but not enough to help nefarious folks fishing for
     * info.
     *
     * @since 2.2.0
     *
     * @param string[] $message_ids array of string $message_id's which identify the message(s) to return
     * @return string a user message, combining all $message_ids
     */
    public function get_user_messages($message_ids)
    {
    }
    /**
     * Returns a message appropriate for a frontend user.  This should be used
     * to provide enough information to a user to allow them to resolve an
     * issue on their own, but not enough to help nefarious folks fishing for
     * info.
     *
     * @since 2.2.0
     * @param string $message_id identifies the message to return
     * @return string a user message
     */
    public function get_user_message($message_id)
    {
    }
}
/**
 * WooCommerce Direct Payment Gateway API Response
 */
interface SV_WC_Payment_Gateway_API_Response extends \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_API_Response
{
    /**
     * Checks if the transaction was successful.
     *
     * @since 1.0.0
     *
     * @return bool true if approved, false otherwise
     */
    public function transaction_approved();
    /**
     * Returns true if the transaction was held, for instance due to AVS/CSC
     * Fraud Settings.  This indicates that the transaction was successful, but
     * did not pass a fraud check and should be reviewed.
     *
     * @since 1.0.0
     *
     * @return bool true if the transaction was held, false otherwise
     */
    public function transaction_held();
    /**
     * Gets the response status message, or null if there is no status message
     * associated with this transaction.
     *
     * @since 1.0.0
     *
     * @return string status message
     */
    public function get_status_message();
    /**
     * Gets the response status code, or null if there is no status code
     * associated with this transaction.
     *
     * @since 1.0.0
     *
     * @return string status code
     */
    public function get_status_code();
    /**
     * Gets the response transaction id, or null if there is no transaction id
     * associated with this transaction.
     *
     * @since 1.0.0
     *
     * @return string transaction id
     */
    public function get_transaction_id();
    /**
     * Gets the payment type: 'credit-card', 'echeck', etc...
     *
     * @since 5.0.0
     *
     * @return string
     */
    public function get_payment_type();
    /**
     * Returns a message appropriate for a frontend user.  This should be used
     * to provide enough information to a user to allow them to resolve an
     * issue on their own, but not enough to help nefarious folks fishing for
     * info.
     *
     * @see SV_WC_Payment_Gateway_API_Response_Message_Helper
     *
     * @since 2.2.0
     *
     * @return string user message, if there is one
     */
    public function get_user_message();
}
/**
 * WooCommerce Direct Payment Gateway API Authorization Response
 *
 * Represents a Payment Gateway Credit Card Authorization response.  This should
 * also be used as the parent class for credit card charge (authorization +
 * capture) responses.
 */
interface SV_WC_Payment_Gateway_API_Authorization_Response extends \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Response
{
    /**
     * The authorization code is returned from the credit card processor to
     * indicate that the charge will be paid by the card issuer.
     *
     * @since 1.0.0
     *
     * @return string credit card authorization code
     */
    public function get_authorization_code();
    /**
     * Returns the result of the AVS check.
     *
     * @since 1.0.0
     *
     * @return string result of the AVS check, if any
     */
    public function get_avs_result();
    /**
     * Returns the result of the CSC check.
     *
     * @since 1.0.0
     *
     * @return string result of CSC check
     */
    public function get_csc_result();
    /**
     * Returns true if the CSC check was successful.
     *
     * @since 1.0.0
     *
     * @return boolean true if the CSC check was successful
     */
    public function csc_match();
}
/**
 * WooCommerce Direct Payment Gateway API Create Payment Token Response
 */
interface SV_WC_Payment_Gateway_API_Create_Payment_Token_Response extends \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Response
{
    /**
     * Returns the payment token.
     *
     * @since 1.0.0
     *
     * @return SV_WC_Payment_Gateway_Payment_Token payment token
     */
    public function get_payment_token();
}
/**
 * WooCommerce Direct Payment Gateway API Customer Response
 */
interface SV_WC_Payment_Gateway_API_Customer_Response extends \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Response
{
    /**
     * Returns the customer ID.
     *
     * @since 4.0.0
     *
     * @return string customer ID returned by the gateway
     */
    public function get_customer_id();
}
/**
 * WooCommerce Direct Payment Gateway API Create Payment Token Response
 */
interface SV_WC_Payment_Gateway_API_Get_Tokenized_Payment_Methods_Response extends \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Response
{
    /**
     * Returns any payment tokens.
     *
     * @since 1.0.0
     *
     * @return SV_WC_Payment_Gateway_Payment_Token[] array of SV_WC_Payment_Gateway_Payment_Token payment tokens, keyed by the token ID
     */
    public function get_payment_tokens();
}
/**
 * WooCommerce Payment Gateway API Payment Notification Response
 *
 * Represents an IPN or redirect-back request response
 *
 * @since 2.1.0
 */
interface SV_WC_Payment_Gateway_API_Payment_Notification_Response extends \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Response
{
    /**
     * Returns the order id associated with this response.
     *
     * @since 2.1.0
     *
     * @return int|null the order id associated with this response, or null if it could not be determined
     * @throws \Exception if there was a serious error finding the order id
     */
    public function get_order_id();
    /**
     * Returns true if the transaction was cancelled, false otherwise.
     *
     * @since 2.1.0
     *
     * @return bool true if cancelled, false otherwise
     */
    public function transaction_cancelled();
    /**
     * Returns the card PAN or checking account number, if available.
     *
     * @since 2.2.0
     *
     * @return string|null PAN or account number or null if not available
     */
    public function get_account_number();
    /**
     * Determines if this is an IPN response.
     *
     * Intentionally commented out to prevent fatal errors in older plugins
     *
     * @since 4.3.0
     *
     * @return bool
     */
    public function is_ipn();
}
/**
 * WooCommerce Payment Gateway API Payment Credit Card Notification Response
 *
 * Represents an IPN or redirect-back credit card request response
 *
 * @since 2.2.0
 */
interface SV_WC_Payment_Gateway_API_Payment_Notification_Credit_Card_Response extends \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Payment_Notification_Response, \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Authorization_Response
{
    /**
     * Returns the card type, if available, i.e., 'visa', 'mastercard', etc.
     *
     * @see SV_WC_Payment_Gateway_Helper::payment_type_to_name()
     *
     * @since 2.2.0
     *
     * @return string|null card type or null if not available
     */
    public function get_card_type();
    /**
     * Returns the card expiration month with leading zero, if available.
     *
     * @since 2.2.0
     *
     * @return string|null card expiration month or null if not available
     */
    public function get_exp_month();
    /**
     * Returns the card expiration year with four digits, if available.
     *
     * @since 2.2.0
     *
     * @return string|null card expiration year or null if not available
     */
    public function get_exp_year();
}
/**
 * WooCommerce Payment Gateway API Payment eCheck Notification Response
 *
 * Represents an IPN or redirect-back eCheck request response
 *
 * @since 2.2.0
 */
interface SV_WC_Payment_Gateway_API_Payment_Notification_eCheck_Response extends \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Payment_Notification_Response
{
    /**
     * Returns the account type, one of 'checking' or 'savings', if available.
     *
     * @since 2.2.0
     *
     * @return string account type, one of 'checking' or 'savings'
     */
    public function get_account_type();
    /**
     * Returns the check number used, if available.
     *
     * @since 2.2.0
     *
     * @return int|null check number, or null
     */
    public function get_check_number();
}
/**
 * WooCommerce Payment Gateway API Payment Credit Card Notification Response
 *
 * Represents an IPN or redirect-back credit card request response
 *
 * @since 2.2.0
 */
interface SV_WC_Payment_Gateway_Payment_Notification_Tokenization_Response extends \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Create_Payment_Token_Response
{
    /** Response Message Methods **********************************************/
    /**
     * Gets the overall result message for a new payment method tokenization
     * and/or customer creation.
     *
     * @since 5.0.0
     *
     * @return string
     */
    public function get_tokenization_message();
    /**
     * Gets the result message for a new customer creation.
     *
     * @since 5.0.0
     *
     * @return string
     */
    public function get_customer_created_message();
    /**
     * Gets the result message for a new payment method tokenization.
     *
     * @since 5.0.0
     *
     * @return string
     */
    public function get_payment_method_tokenized_message();
    /** Response Code Methods *************************************************/
    /**
     * Gets the result code for a new customer creation.
     *
     * @since 5.0.0
     *
     * @return string
     */
    public function get_customer_created_code();
    /**
     * Gets the result code for a new payment method tokenization.
     *
     * @since 5.0.0
     *
     * @return string
     */
    public function get_payment_method_tokenized_code();
    /**
     * Determines whether a new customer was created.
     *
     * @since 5.0.0
     *
     * @return bool
     */
    public function customer_created();
    /**
     * Determines whether a new payment method was tokenized.
     *
     * @since 5.0.0
     *
     * @return bool
     */
    public function payment_method_tokenized();
    /**
     * Determines whether the overall payment tokenization was successful.
     *
     * Gateways can check that the payment method was tokenized, and if a new
     * customer was created, that was successful.
     *
     * @since 5.0.0
     *
     * @return bool
     */
    public function tokenization_successful();
    /**
     * Determines whether the customer was successfully created.
     *
     * @since 5.0.0
     *
     * @return bool
     */
    public function customer_creation_successful();
    /**
     * Determines whether the payment method was successfully tokenized.
     *
     * @since 5.0.0
     *
     * @return bool
     */
    public function payment_method_tokenization_successful();
    /**
     * Gets any payment tokens that were edited on the hosted pay page.
     *
     * @since 5.0.0
     *
     * @return array|SV_WC_Payment_Gateway_Payment_Token[]
     */
    public function get_edited_payment_tokens();
    /**
     * Gets any payment tokens that were deleted on the hosted pay page.
     *
     * @since 5.0.0
     *
     * @return array|SV_WC_Payment_Gateway_Payment_Token[]
     */
    public function get_deleted_payment_tokens();
}
/**
 * WooCommerce Direct Payment Gateway API Request
 */
interface SV_WC_Payment_Gateway_API_Request extends \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_API_Request
{
}
/**
 * WooCommerce Direct Payment Gateway API
 */
interface SV_WC_Payment_Gateway_API
{
    /**
     * Perform a credit card authorization for the given order
     *
     * If the gateway does not support credit card authorizations, this method can be a no-op.
     *
     * @since 1.0.0
     *
     * @param \WC_Order $order the order
     * @return SV_WC_Payment_Gateway_API_Response credit card charge response
     * @throws SV_WC_Payment_Gateway_Exception network timeouts, etc
     */
    public function credit_card_authorization(\WC_Order $order);
    /**
     * Perform a credit card charge for the given order
     *
     * If the gateway does not support credit card charges, this method can be a no-op.
     *
     * @since 1.0.0
     *
     * @param \WC_Order $order the order
     * @return SV_WC_Payment_Gateway_API_Response credit card charge response
     * @throws SV_WC_Payment_Gateway_Exception network timeouts, etc
     */
    public function credit_card_charge(\WC_Order $order);
    /**
     * Perform a credit card capture for a given authorized order
     *
     * If the gateway does not support credit card capture, this method can be a no-op.
     *
     * @since 1.0.0
     *
     * @param \WC_Order $order the order
     * @return SV_WC_Payment_Gateway_API_Response credit card capture response
     * @throws SV_WC_Payment_Gateway_Exception network timeouts, etc
     */
    public function credit_card_capture(\WC_Order $order);
    /**
     * Perform an eCheck debit (ACH transaction) for the given order
     *
     * If the gateway does not support check debits, this method can be a no-op.
     *
     * @since 1.0.0
     *
     * @param \WC_Order $order the order
     * @return SV_WC_Payment_Gateway_API_Response check debit response
     * @throws SV_WC_Payment_Gateway_Exception network timeouts, etc
     */
    public function check_debit(\WC_Order $order);
    /**
     * Perform a refund for the given order
     *
     * If the gateway does not support refunds, this method can be a no-op.
     *
     * @since 3.1.0
     *
     * @param \WC_Order $order order object
     * @return SV_WC_Payment_Gateway_API_Response refund response
     * @throws SV_WC_Payment_Gateway_Exception network timeouts, etc
     */
    public function refund(\WC_Order $order);
    /**
     * Perform a void for the given order
     *
     * If the gateway does not support voids, this method can be a no-op.
     *
     * @since 3.1.0
     *
     * @param \WC_Order $order order object
     * @return SV_WC_Payment_Gateway_API_Response void response
     * @throws SV_WC_Payment_Gateway_Exception network timeouts, etc
     */
    public function void(\WC_Order $order);
    /**
     * Creates a payment token for the given order
     *
     * If the gateway does not support tokenization, this method can be a no-op.
     *
     * @since 1.0.0
     *
     * @param \WC_Order $order the order
     * @return SV_WC_Payment_Gateway_API_Create_Payment_Token_Response payment method tokenization response
     * @throws SV_WC_Payment_Gateway_Exception network timeouts, etc
     */
    public function tokenize_payment_method(\WC_Order $order);
    /**
     * Updates a tokenized payment method.
     *
     * @since 5.3.0
     *
     * @param \WC_Order $order order object
     * @return SV_WC_Payment_Gateway_API_Response
     * @throws SV_WC_Plugin_Exception
     */
    public function update_tokenized_payment_method(\WC_Order $order);
    /**
     * Determines if this API supports updating tokenized payment methods.
     *
     * @see SV_WC_Payment_Gateway_API::update_tokenized_payment_method()
     *
     * @since 5.3.0
     *
     * @return bool
     */
    public function supports_update_tokenized_payment_method();
    /**
     * Removes the tokenized payment method.  This method should not be invoked
     * unless supports_remove_tokenized_payment_method() returns true, otherwise
     * the results are undefined.
     *
     * @since 1.0.0
     * @see SV_WC_Payment_Gateway_API::supports_remove_tokenized_payment_method()
     *
     * @param string $token the payment method token
     * @param string $customer_id unique customer id for gateways that support it
     * @return SV_WC_Payment_Gateway_API_Response remove tokenized payment method response
     * @throws SV_WC_Payment_Gateway_Exception network timeouts, etc
     */
    public function remove_tokenized_payment_method($token, $customer_id);
    /**
     * Returns true if this API supports a "remove tokenized payment method"
     * request.  If this method returns true, then remove_tokenized_payment_method()
     * is considered safe to call.
     *
     * @since 1.0.0
     * @see SV_WC_Payment_Gateway_API::remove_tokenized_payment_method()
     *
     * @return boolean true if this API supports a "remove tokenized payment method" request, false otherwise
     */
    public function supports_remove_tokenized_payment_method();
    /**
     * Returns all tokenized payment methods for the customer.  This method
     * should not be invoked unless supports_get_tokenized_payment_methods()
     * return true, otherwise the results are undefined
     *
     * @since 1.0.0
     * @see SV_WC_Payment_Gateway_API::supports_get_tokenized_payment_methods()
     *
     * @param string $customer_id unique customer id
     * @return SV_WC_Payment_Gateway_API_Get_Tokenized_Payment_Methods_Response response containing any payment tokens for the customer
     * @throws SV_WC_Payment_Gateway_Exception network timeouts, etc
     */
    public function get_tokenized_payment_methods($customer_id);
    /**
     * Returns true if this API supports a "get tokenized payment methods"
     * request.  If this method returns true, then get_tokenized_payment_methods()
     * is considered safe to call.
     *
     * @since 1.0.0
     * @see SV_WC_Payment_Gateway_API::get_tokenized_payment_methods()
     *
     * @return boolean true if this API supports a "get tokenized payment methods" request, false otherwise
     */
    public function supports_get_tokenized_payment_methods();
    /**
     * Returns the most recent request object
     *
     * @since 1.0.0
     *
     * @return SV_WC_Payment_Gateway_API_Request the most recent request object
     */
    public function get_request();
    /**
     * Returns the most recent response object
     *
     * @since 1.0.0
     *
     * @return SV_WC_Payment_Gateway_API_Response the most recent response object
     */
    public function get_response();
    /**
     * Returns the WC_Order object associated with the request, if any
     *
     * @since 4.1.0
     *
     * @return \WC_Order
     */
    public function get_order();
}
/**
 * WooCommerce Payment Gateway Framework
 *
 * @since 1.0.0
 */
#[\AllowDynamicProperties]
abstract class SV_WC_Payment_Gateway extends \WC_Payment_Gateway
{
    /** Sends through sale and request for funds to be charged to cardholder's credit card. */
    const TRANSACTION_TYPE_CHARGE = 'charge';
    /** Sends through a request for funds to be "reserved" on the cardholder's credit card. A standard authorization is reserved for 2-5 days. Reservation times are determined by cardholder's bank. */
    const TRANSACTION_TYPE_AUTHORIZATION = 'authorization';
    /** The production environment identifier */
    const ENVIRONMENT_PRODUCTION = 'production';
    /** The test environment identifier */
    const ENVIRONMENT_TEST = 'test';
    /** Debug mode log to file */
    const DEBUG_MODE_LOG = 'log';
    /** Debug mode display on checkout */
    const DEBUG_MODE_CHECKOUT = 'checkout';
    /** Debug mode log to file and display on checkout */
    const DEBUG_MODE_BOTH = 'both';
    /** Debug mode disabled */
    const DEBUG_MODE_OFF = 'off';
    /** Gateway which supports direct (XML, REST, SOAP, custom, etc) communication */
    const GATEWAY_TYPE_DIRECT = 'direct';
    /** Gateway which supports redirecting to a gateway server for payment collection, or embedding an iframe on checkout */
    const GATEWAY_TYPE_HOSTED = 'hosted';
    /** Credit card payment type */
    const PAYMENT_TYPE_CREDIT_CARD = 'credit-card';
    /** eCheck payment type */
    const PAYMENT_TYPE_ECHECK = 'echeck';
    /** Gateway with multiple payment options */
    const PAYMENT_TYPE_MULTIPLE = 'multiple';
    /** Bank transfer gateway */
    const PAYMENT_TYPE_BANK_TRANSFER = 'bank_transfer';
    /** Products feature */
    const FEATURE_PRODUCTS = 'products';
    /** Credit card types feature */
    const FEATURE_CARD_TYPES = 'card_types';
    /** Tokenization feature */
    const FEATURE_TOKENIZATION = 'tokenization';
    /** Credit Card charge transaction feature */
    const FEATURE_CREDIT_CARD_CHARGE = 'charge';
    /** Credit Card authorization transaction feature */
    const FEATURE_CREDIT_CARD_AUTHORIZATION = 'authorization';
    /** Credit Card charge virtual-only orders feature */
    const FEATURE_CREDIT_CARD_CHARGE_VIRTUAL = 'charge-virtual';
    /** Credit Card capture charge transaction feature */
    const FEATURE_CREDIT_CARD_CAPTURE = 'capture_charge';
    /** Credit Card partial capture transaction feature */
    const FEATURE_CREDIT_CARD_PARTIAL_CAPTURE = 'partial_capture';
    /** Display detailed customer decline messages on checkout */
    const FEATURE_DETAILED_CUSTOMER_DECLINE_MESSAGES = 'customer_decline_messages';
    /** Refunds feature */
    const FEATURE_REFUNDS = 'refunds';
    /** Voids feature */
    const FEATURE_VOIDS = 'voids';
    /** Payment Form feature */
    const FEATURE_PAYMENT_FORM = 'payment_form';
    /** Customer ID feature */
    const FEATURE_CUSTOMER_ID = 'customer_id';
    /** Add new payment method feature */
    const FEATURE_ADD_PAYMENT_METHOD = 'add_payment_method';
    /** Apple Pay feature */
    const FEATURE_APPLE_PAY = 'apple_pay';
    /** Google Pay feature */
    const FEATURE_GOOGLE_PAY = 'google_pay';
    /** Admin token editor feature */
    const FEATURE_TOKEN_EDITOR = 'token_editor';
    /** Subscriptions integration ID */
    const INTEGRATION_SUBSCRIPTIONS = 'subscriptions';
    /** Pre-orders integration ID */
    const INTEGRATION_PRE_ORDERS = 'pre_orders';
    /** flag used when the checkout context is the shortcode-based checkout */
    public const PROCESSING_CONTEXT_SHORTCODE = 'shortcode';
    /** flag used when the checkout context is the block-based checkout */
    public const PROCESSING_CONTEXT_BLOCK = 'block';
    /** @var SV_WC_Payment_Gateway_Plugin the parent plugin class */
    private $plugin;
    /** @var string payment type, one of 'credit-card' or 'echeck' */
    private $payment_type;
    /** @var array associative array of environment id to display name, defaults to 'production' => 'Production' */
    private $environments;
    /** @var array associative array of card type to display name */
    private $available_card_types;
    /** @var array optional array of currency codes this gateway is allowed for */
    protected $currencies;
    /** @var string configuration option: the transaction environment, one of $this->environments keys */
    private $environment;
    /** @var string configuration option: the type of transaction, whether purchase or authorization, defaults to 'charge' */
    private $transaction_type;
    /** @var string configuration option: whether transactions should always be charged if the order is virtual-only, defaults to 'no' */
    private $charge_virtual_orders;
    /** @var string configuration option: whether orders can be partially captured multiple times */
    private $enable_partial_capture;
    /** @var string configuration option: whether orders are captured when switched to a "paid" status */
    private $enable_paid_capture;
    /** @var array configuration option: card types to show images for */
    private $card_types;
    /** @var string configuration option: indicates whether a Card Security Code field will be presented on checkout, either 'yes' or 'no' */
    private $enable_csc;
    /** @var string configuration option: indicates whether a Card Security Code field will be presented for saved cards at checkout, either 'yes' or 'no' */
    private $enable_token_csc;
    /** @var array configuration option: supported echeck fields, one of 'check_number', 'account_type' */
    private $supported_check_fields;
    /** @var string configuration option: indicates whether tokenization is enabled, either 'yes' or 'no' */
    private $tokenization;
    /** @var string configuration option: indicates whether detailed customer decline messages should be displayed at checkout, either 'yes' or 'no' */
    private $enable_customer_decline_messages;
    /** @var string configuration option: 4 options for debug mode - off, checkout, log, both */
    private $debug_mode;
    /** @var string configuration option: whether to use a sibling gateway's connection/authentication settings */
    private $inherit_settings;
    /** @var array of shared setting names, if any.  This can be used for instance when a single plugin supports both credit card and echeck payments, and the same credentials can be used for both gateways */
    private $shared_settings = array();
    /** @var SV_WC_Payment_Gateway_Payment_Tokens_Handler payment tokens handler instance */
    protected $payment_tokens_handler;
    /** @var Payment_Gateway\Handlers\Capture capture handler instance */
    protected $capture_handler;
    /** @var array of SV_WC_Payment_Gateway_Integration objects for Subscriptions, Pre-Orders, etc. */
    protected $integrations;
    /** @var SV_WC_Payment_Gateway_Payment_Form|null payment form instance */
    protected $payment_form;
    /**
     * Initialize the gateway
     *
     * Args:
     *
     * + `method_title` - string admin method title, ie 'Intuit QBMS', defaults to 'Settings'
     * + `method_description` - string admin method description, defaults to ''
     * + `supports` - array  list of supported gateway features, possible values include:
     *   'products', 'card_types', 'tokenziation', 'charge', 'authorization', 'subscriptions',
     *   'subscription_suspension', 'subscription_cancellation', 'subscription_reactivation',
     *   'subscription_amount_changes', 'subscription_date_changes', 'subscription_payment_method_change',
     *   'customer_decline_messages'
     *   Defaults to 'products', 'charge' (credit-card gateways only)
     * + `payment_type` - string one of 'credit-card' or 'echeck', defaults to 'credit-card'
     * + `card_types` - array  associative array of card type to display name, used if the payment_type is 'credit-card' and the 'card_types' feature is supported.  Defaults to:
     *   'VISA' => 'Visa', 'MC' => 'MasterCard', 'AMEX' => 'American Express', 'DISC' => 'Discover', 'DINERS' => 'Diners', 'JCB' => 'JCB'
     * + `echeck_fields` - array of supported echeck fields, including 'check_number', 'account_type'
     * + `environments` - associative array of environment id to display name, merged with default of 'production' => 'Production'
     * + `currencies` -  array of currency codes this gateway is allowed for, defaults to plugin accepted currencies
     * + `countries` -  array of two-letter country codes this gateway is allowed for, defaults to all
     * + `shared_settings` - array of shared setting names, if any.  This can be used for instance when a single plugin supports both credit card and echeck payments, and the same credentials can be used for both gateways
     *
     * @since 1.0.0
     * @param string $id the gateway id
     * @param SV_WC_Payment_Gateway_Plugin $plugin the parent plugin class
     * @param array $args gateway arguments
     */
    public function __construct($id, $plugin, $args)
    {
    }
    /**
     * Adds the various milestone hooks like "payment processed".
     *
     * @since 5.1.0
     */
    protected function add_milestone_hooks()
    {
    }
    /**
     * Loads the plugin configuration settings
     *
     * @since 1.0.0
     */
    public function load_settings()
    {
    }
    /**
     * Loads any shared settings from sibling gateways.
     *
     * @since 4.5.0
     */
    protected function load_shared_settings()
    {
    }
    /**
     * Gets the IDs of sibling gateways that this gateway can inherit settings from.
     *
     * @since 5.10.0
     *
     * @return array
     */
    protected function get_ids_of_gateways_to_inherit_settings_from()
    {
    }
    /**
     * Enqueue the necessary scripts & styles for the gateway, including the
     * payment form assets (if supported) and any gateway-specific assets.
     *
     * @since 1.0.0
     */
    public function enqueue_scripts()
    {
    }
    /**
     * Enqueue the payment form JS, CSS, and localized
     * JS params
     *
     * @since 4.3.0
     */
    protected function enqueue_payment_form_assets()
    {
    }
    /**
     * Returns an array of JS script params to localize for the payment form JS. Generally used for i18n purposes.
     *
     * @note This method exists for backwards compatibility with the shortcode-based checkout.
     *
     * @since 4.3.0
     *
     * @return array<string, string> associative array of param name to value
     */
    protected function get_payment_form_js_localized_script_params(): array
    {
    }
    /**
     * Gets a list of messages that could be displayed in the front end payment form or checkout block.
     *
     * @since 5.12.0
     *
     * @return array<string, string>
     */
    public function get_gateway_payment_form_localized_params(): array
    {
    }
    /**
     * Enqueue the gateway-specific assets if present, including JS, CSS, and localized script params.
     *
     * @since 4.3.0
     *
     * @return void
     */
    protected function enqueue_gateway_assets()
    {
    }
    /**
     * Determines whether the front end gateway assets should load.
     *
     * By default, we don't load the legacy frontend when the checkout block is in use.
     *
     * @since 5.12.0
     *
     * @return bool
     */
    protected function should_enqueue_gateway_assets(): bool
    {
    }
    /**
     * Return the gateway-specifics JS script handle. This is used for:
     *
     * + enqueuing the script
     * + the localized JS script param object name
     *
     * Defaults to 'wc-<plugin ID dasherized>'.
     *
     * @since 4.3.0
     * @return string
     */
    protected function get_gateway_js_handle()
    {
    }
    /**
     * Returns an array of JS script params to localize for the gateway-specific
     * JS. Concrete classes must override this as needed.
     *
     * @since 4.3.0
     * @return array
     */
    protected function get_gateway_js_localized_script_params()
    {
    }
    /**
     * Localize a script once. Gateway plugins that have multiple gateways should
     * only have their params localized once.
     *
     * @since 4.3.0
     * @param string $handle script handle to localize
     * @param array $params script params to localize
     * @param string $object_name the localized object name. Defaults to a snake-cased version of $handle
     */
    protected function localize_script($handle, $params, $object_name = '')
    {
    }
    /**
     * Initializes the payment form handler.
     *
     * @since 5.7.0
     */
    protected function maybe_init_payment_form()
    {
    }
    /**
     * Initializes the payment form instance.
     *
     * @since 5.7.0
     *
     * @return SV_WC_Payment_Gateway_Payment_Form
     */
    protected function init_payment_form_instance()
    {
    }
    /**
     * Returns true if on the pay page and this is the currently selected gateway
     *
     * @since 1.0.0
     *
     * @return null|bool true if on pay page and is currently selected gateways, false if on pay page and not the selected gateway, null otherwise
     */
    public function is_pay_page_gateway()
    {
    }
    /**
     * Gets the order button text:
     *
     * Direct gateway: "Place order"
     * Redirect/Hosted gateway: "Continue to Payment"
     *
     * If a gateway has a separate payment page, then we expect to show "Continue to Payment" on checkout, and
     * "Place order" on the separate pay page.
     *
     * @since 4.0.0
     */
    protected function get_order_button_text()
    {
    }
    /**
     * Adds a default simple pay page handler
     *
     * @since 1.0.0
     */
    protected function add_pay_page_handler()
    {
    }
    /**
     * Render a simple payment page
     *
     * @since 2.1.0
     * @param int $order_id identifies the order
     */
    public function payment_page($order_id)
    {
    }
    /**
     * Gets the WooCommerce Checkout Block integration.
     *
     * @since 5.11.11
     *
     * @return \SkyVerge\WooCommerce\PluginFramework\v6_0_1\Payment_Gateway\Blocks\Gateway_Checkout_Block_Integration|null
     */
    public function get_checkout_block_integration_instance(): ?\SkyVerge\WooCommerce\PluginFramework\v6_0_1\Payment_Gateway\Blocks\Gateway_Checkout_Block_Integration
    {
    }
    /**
     * Gets the WooCommerce Cart Block integration.
     *
     * @since 5.11.11
     *
     * @return \Automattic\WooCommerce\Blocks\Integrations\IntegrationInterface|null
     */
    public function get_cart_block_integration_instance(): ?\Automattic\WooCommerce\Blocks\Integrations\IntegrationInterface
    {
    }
    /** Payment Form Feature **************************************************/
    /**
     * Returns true if the gateway supports the payment form feature
     *
     * @since 4.0.0
     * @return bool
     */
    public function supports_payment_form()
    {
    }
    /**
     * Render the payment fields
     *
     * @since 4.0.0
     * @see WC_Payment_Gateway::payment_fields()
     * @see SV_WC_Payment_Gateway_Payment_Form class
     */
    public function payment_fields()
    {
    }
    /**
     * Renders the payment method selector styles.
     *
     * Uses flexbox for any Framework-powered payment method selector, to ensure credit card icons are aligned properly.
     *
     * Note that we cannot apply the styles in the CSS file because there is no generic selector that would only affect FW gateways.
     * Instead, each FW gateway prints these styles with the label selector for its own gateway.
     *
     * @since 5.11.7
     *
     * @TODO: this method can be removed if/when WooCommerce updates their frontend to use flexbox {@itambek 2023-07-26}
     *
     * @return void
     */
    protected function payment_method_selector_styles(): void
    {
    }
    /**
     * Gets the payment form class instance.
     *
     * @since 4.1.2
     *
     * @return SV_WC_Payment_Gateway_Payment_Form|null
     */
    public function get_payment_form_instance()
    {
    }
    /**
     * Get the payment form field defaults, primarily for gateways to override
     * and set dummy credit card/eCheck info when in the test environment
     *
     * @since 4.0.0
     * @return array
     */
    public function get_payment_method_defaults()
    {
    }
    /** Tokenization **************************************************/
    /**
     * Initialize payment tokens handler.
     *
     * @since 5.0.0
     */
    protected function init_payment_tokens_handler()
    {
    }
    /**
     * Gets the payment tokens handler instance.
     *
     * Concrete classes can override this method to return a custom implementation.
     *
     * @since 5.0.0
     *
     * @return SV_WC_Payment_Gateway_Payment_Tokens_Handler
     */
    protected function build_payment_tokens_handler()
    {
    }
    /**
     * Gets the payment tokens handler instance.
     *
     * @since 5.0.0
     *
     * @return SV_WC_Payment_Gateway_Payment_Tokens_Handler
     */
    public function get_payment_tokens_handler()
    {
    }
    /**
     * Determines if tokenization takes place prior to transaction processing.
     *
     * Gateways that tokenize the payment method before the sale transaction (in a separate request), should set this to true.
     *
     * @since 5.0.0
     *
     * @return bool
     */
    public function tokenize_before_sale()
    {
    }
    /**
     * Determines if tokenization takes place during a transaction request.
     *
     * Gateways that tokenize the payment method in the same request as the sale transaction should set this to true.
     *
     * @since 5.0.0
     *
     * @return bool
     */
    public function tokenize_with_sale()
    {
    }
    /**
     * Determines tokenization takes place after a transaction request.
     *
     * Gateways that tokenize the payment method after the sale transaction (in a separate request), should set this to true.
     *
     * @since 5.0.0
     *
     * @return bool
     */
    public function tokenize_after_sale()
    {
    }
    /**
     * Determines if the gateway supports the admin token editor feature.
     *
     * @since 5.0.0
     *
     * @return bool
     */
    public function supports_token_editor()
    {
    }
    /** Integrations Feature **************************************************/
    /**
     * Initializes supported integrations.
     *
     * @since 5.0.0
     */
    public function init_integrations()
    {
    }
    /**
     * Gets an array of available integration objects
     *
     * @since 5.0.0
     * @return array
     */
    public function get_integrations()
    {
    }
    /**
     * Gets the integration object for the given ID.
     *
     * @since 5.0.0
     *
     * @param string $id the integration ID, e.g. subscriptions
     * @return SV_WC_Payment_Gateway_Integration|null
     */
    public function get_integration($id)
    {
    }
    /**
     * Builds the Subscriptions integration class instance.
     *
     * Concrete classes can override this method to return a custom implementation.
     *
     * @since 5.0.0
     *
     * @return SV_WC_Payment_Gateway_Integration_Subscriptions
     */
    protected function build_subscriptions_integration()
    {
    }
    /**
     * Gets the Subscriptions integration class instance.
     *
     * @since 5.0.0
     *
     * @return SV_WC_Payment_Gateway_Integration_Subscriptions|null
     */
    public function get_subscriptions_integration()
    {
    }
    /**
     * Builds the Pre-Orders integration class instance.
     *
     * Concrete classes can override this method to return a custom implementation.
     *
     * @since 5.0.0
     *
     * @return SV_WC_Payment_Gateway_Integration_Pre_Orders
     */
    protected function build_pre_orders_integration()
    {
    }
    /**
     * Gets the Pre-Orders integration class instance.
     *
     * @since 5.0.0
     *
     * @return SV_WC_Payment_Gateway_Integration_Pre_Orders|null
     */
    public function get_pre_orders_integration()
    {
    }
    /**
     * Determines if the gateway supports Subscriptions.
     *
     * A gateway supports Subscriptions if all of the following are true:
     *
     * + Subscriptions is active
     * + tokenization is supported
     * + tokenization is enabled
     *
     * Concrete gateways can override this to conditionally support Subscriptions
     * based on certain settings (e.g. only when CSC is not required, etc.)
     *
     * @since 5.0.0
     *
     * @return bool
     */
    public function supports_subscriptions()
    {
    }
    /**
     * Determines if the gateway supports Pre-Orders.
     *
     * A gateway supports Pre-Orders if all of the following are true:
     *
     * + Pre-Orders is active
     * + tokenization is supported
     * + tokenization is enabled
     *
     * Concrete gateways can override this to conditionally support Pre-Orders
     * based on certain settings (e.g. only when CSC is not required, etc.)
     *
     * @since 5.0.0
     *
     * @return bool
     */
    public function supports_pre_orders()
    {
    }
    /** Apple Pay Feature *****************************************************/
    /**
     * Determines whether this gateway supports Apple Pay.
     *
     * @since 4.7.0
     *
     * @return bool
     */
    public function supports_apple_pay()
    {
    }
    /**
     * Gets the Apple Pay gateway capabilities.
     *
     * Gateways should override this if they have more or less capabilities than
     * the default. See https://developer.apple.com/reference/applepayjs/paymentrequest/1916123-merchantcapabilities
     * for valid values.
     *
     * @since 4.7.0
     *
     * @return array
     */
    public function get_apple_pay_capabilities()
    {
    }
    /**
     * Gets the currencies supported by Apple Pay.
     *
     * This method should be overwritten by any gateway that needs to restrict the supported currencies.
     *
     * @since 4.7.0
     *
     * @return array
     */
    public function get_apple_pay_currencies()
    {
    }
    /**
     * Adds the Apple Pay payment data to the order object.
     *
     * Gateways should override this to set the appropriate values depending on
     * how their processing API needs to handle the data.
     *
     * @since 4.7.0
     *
     * @param \WC_Order the order object
     * @param SV_WC_Payment_Gateway_Apple_Pay_Payment_Response authorized payment response
     * @return \WC_Order
     */
    public function get_order_for_apple_pay(\WC_Order $order, \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Apple_Pay_Payment_Response $response)
    {
    }
    /** Google Pay Feature *****************************************************/
    /**
     * Determines whether this gateway supports Google Pay.
     *
     * @since 5.10.0
     *
     * @return bool
     */
    public function supports_google_pay()
    {
    }
    /**
     * Gets the currencies supported by Google Pay.
     *
     * This method should be overwritten by any gateway that needs to restrict the supported currencies.
     *
     * @since 5.10.0
     *
     * @return array
     */
    public function get_google_pay_currencies()
    {
    }
    /**
     * Adds the Google Pay payment data to the order object.
     *
     * Gateways should override this to set the appropriate values depending on
     * how their processing API needs to handle the data.
     *
     * @since 5.10.0
     *
     * @param \WC_Order the order object
     * @param mixed|array $response_data authorized payment response data
     * @return \WC_Order
     */
    public function get_order_for_google_pay(\WC_Order $order, $response_data)
    {
    }
    /**
     * Get the default payment method title, which is configurable within the
     * admin and displayed on checkout
     *
     * @since 2.1.0
     * @return string payment method title to show on checkout
     */
    protected function get_default_title()
    {
    }
    /**
     * Get the default payment method description, which is configurable
     * within the admin and displayed on checkout
     *
     * @since 2.1.0
     * @return string payment method description to show on checkout
     */
    protected function get_default_description()
    {
    }
    /**
     * Initialize payment gateway settings fields
     *
     * @since 1.0.0
     * @see WC_Settings_API::init_form_fields()
     */
    public function init_form_fields()
    {
    }
    /**
     * Returns an array of form fields specific for this method.
     *
     * To add environment-dependent fields, include the 'class' form field argument
     * with 'environment-field production-field' where "production" matches a
     * key from the environments member
     *
     * @since 1.0.0
     * @return array of form fields
     */
    abstract protected function get_method_form_fields();
    /**
     * Adds the gateway environment form fields
     *
     * @since 1.0.0
     * @param array $form_fields gateway form fields
     * @return array $form_fields gateway form fields
     */
    protected function add_environment_form_fields($form_fields)
    {
    }
    /**
     * Adds the optional shared settings toggle element.  The 'shared_settings'
     * optional constructor parameter must have been used in order for shared
     * settings to be supported.
     *
     * @since 1.0.0
     * @see SV_WC_Payment_Gateway::$shared_settings
     * @see SV_WC_Payment_Gateway::$inherit_settings
     * @param array $form_fields gateway form fields
     * @return array $form_fields gateway form fields
     */
    protected function add_shared_settings_form_fields($form_fields)
    {
    }
    /**
     * Adds the enable Card Security Code form fields
     *
     * @since 1.0.0
     * @param array $form_fields gateway form fields
     * @return array $form_fields gateway form fields
     */
    protected function add_csc_form_fields($form_fields)
    {
    }
    /**
     * Displays settings page with some additional javascript for hiding conditional fields.
     *
     * @see \WC_Settings_API::admin_options()
     *
     * @since 1.0.0
     */
    public function admin_options()
    {
    }
    /**
     * Checks for proper gateway configuration including:
     *
     * + gateway enabled
     * + correct configuration (gateway specific)
     * + any dependencies met
     * + required currency
     * + required country
     *
     * @since 1.0.0
     * @see WC_Payment_Gateway::is_available()
     * @return true if this gateway is available for checkout, false otherwise
     */
    public function is_available()
    {
    }
    /**
     * Determines whether the gateway is properly configured to perform transactions.
     *
     * @since 1.0.0
     *
     * @return bool
     */
    public function is_configured()
    {
    }
    /**
     * Returns the gateway icon markup
     *
     * @since 1.0.0
     * @see WC_Payment_Gateway::get_icon()
     * @return string icon markup
     */
    public function get_icon()
    {
    }
    /**
     * Returns the payment method image URL (if any) for the given $type, ie
     * if $type is 'amex' a URL to the american express card icon will be
     * returned.  If $type is 'echeck', a URL to the echeck icon will be
     * returned.
     *
     * @since 1.0.0
     * @param string $type the payment method cc type or name
     * @return string the image URL or null
     */
    public function get_payment_method_image_url($type)
    {
    }
    /**
     * Adds payment and transaction information on $order object.
     *
     * The standard information that can be added includes:
     *
     * It is set and get using Dynamic_Props class and not directly on $order object, but documented here for reference.
     *
     * $order->payment_total           - the payment total
     * $order->customer_id             - optional payment gateway customer id (useful for tokenized payments, etc)
     * $order->payment->type           - one of 'credit_card' or 'check'
     * $order->description             - an order description based on the order
     * $order->unique_transaction_ref  - a combination of order number + retry count, should provide a unique value for each transaction attempt
     *
     * Note that not all gateways will necessarily pass or require all of the above.
     * These represent the most common attributes used among a variety of gateways, it's up to the specific gateway implementation to make use of, or ignore them, or add custom ones by overriding this method.
     *
     * The returned order is expected to be used in a transaction request.
     *
     * @since 1.0.0
     *
     * @param int|\WC_Order $order the order or order ID being processed
     * @return \WC_Order object with payment and transaction information attached
     */
    public function get_order($order)
    {
    }
    /**
     * Completes an order payment.
     *
     * This method marks the order with an appropriate status, and adds a relevant order note.
     *
     * @since 5.0.0
     *
     * @param \WC_Order $order order object
     * @param SV_WC_Payment_Gateway_API_Response $response response object
     * @throws \Exception
     */
    protected function complete_payment(\WC_Order $order, \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Response $response)
    {
    }
    /** Capture Methods ***********************************************************************************************/
    /**
     * Builds the capture handler instance.
     *
     * @since 5.3.0
     */
    public function init_capture_handler()
    {
    }
    /**
     * Gets the capture handler instance.
     *
     * @since 5.3.0
     *
     * @return Payment_Gateway\Handlers\Capture
     */
    public function get_capture_handler()
    {
    }
    /**
     * Gets an order object with payment data added for use in credit card capture transactions.
     *
     * This was intentionally not moved to the capture handler since we'll likely be refactoring how this information is
     * set in the future, and plenty of gateways override it.
     *
     * @since 4.5.0
     *
     * @param \WC_Order|int $order the order being processed
     * @param float|null $amount amount to capture or null for the full order amount
     * @return \WC_Order
     */
    public function get_order_for_capture($order, $amount = null)
    {
    }
    /** Refund feature ********************************************************/
    /**
     * Returns true if this is gateway that supports refunds
     *
     * @since 3.1.0
     * @return boolean true if the gateway supports refunds
     */
    public function supports_refunds()
    {
    }
    /**
     * Processes a refund.
     *
     * @since 3.1.0
     *
     * @param int $order_id order being refunded
     * @param float $amount refund amount
     * @param string $reason user-entered reason text for refund
     * @return bool|\WP_Error true on success, or a WP_Error object on failure/error
     */
    public function process_refund($order_id, $amount = null, $reason = '')
    {
    }
    /**
     * Add refund information to $order object.
     *
     * It is set and get using Dynamic_Props class and not directly on $order object, but documented here for reference.
     *
     * Standard information includes:
     *
     * $order->refund->amount = refund amount
     * $order->refund->reason = user-entered reason text for the refund
     * $order->refund->trans_id = the ID of the original payment transaction for the order
     *
     * Payment gateway implementations can override this to add their own
     * refund-specific data
     *
     * @since 3.1.0
     *
     * @param \WC_Order|int $order order being processed
     * @param float $amount refund amount
     * @param string $reason optional refund reason text
     * @return \WC_Order|\WP_Error object with refund information attached
     */
    protected function get_order_for_refund($order, $amount, $reason)
    {
    }
    /**
     * Adds the standard refund transaction data to the order.
     *
     * Note that refunds can be performed multiple times for a single order so
     * transaction IDs keys are not unique
     *
     * @since 3.1.0
     *
     * @param \WC_Order $order the order object
     * @param SV_WC_Payment_Gateway_API_Response $response transaction response
     */
    protected function add_refund_data(\WC_Order $order, $response)
    {
    }
    /**
     * Adds any gateway-specific data to the order after a refund is performed.
     *
     * @since 3.1.0
     *
     * @param \WC_Order $order the order object
     * @param SV_WC_Payment_Gateway_API_Response $response the transaction response
     */
    protected function add_payment_gateway_refund_data(\WC_Order $order, $response)
    {
    }
    /**
     * Adds an order note with the amount and (optional) refund transaction ID.
     *
     * @since 3.1.0
     *
     * @param \WC_Order $order order object
     * @param SV_WC_Payment_Gateway_API_Response $response transaction response
     */
    protected function add_refund_order_note(\WC_Order $order, $response)
    {
    }
    /**
     * Builds the WP_Error object for a failed refund.
     *
     * @since 3.1.0
     *
     * @param int|string $error_code error code
     * @param string $error_message error message
     * @return \WP_Error suitable for returning from the process_refund() method
     */
    protected function get_refund_failed_wp_error($error_code, $error_message)
    {
    }
    /**
     * Mark an order as refunded. This should only be used when the full order
     * amount has been refunded.
     *
     * @since 3.1.0
     *
     * @param \WC_Order $order order object
     */
    public function mark_order_as_refunded($order)
    {
    }
    /** Void feature ********************************************************/
    /**
     * Returns true if this is gateway that supports voids
     *
     * @since 3.1.0
     * @return boolean true if the gateway supports voids
     */
    public function supports_voids()
    {
    }
    /**
     * Allow gateways to void an order that was attempted to be refunded. This is
     * particularly useful for gateways that can void an authorized & captured
     * charge that has not yet settled (e.g. Authorize.net AIM/CIM)
     *
     * @since 4.0.0
     *
     * @param \WC_Order $order order
     * @param SV_WC_Payment_Gateway_API_Response $response refund response
     * @return boolean true if a void should be performed for the given order/response
     */
    protected function maybe_void_instead_of_refund($order, $response)
    {
    }
    /**
     * Processes a void order.
     *
     * @since 3.1.0
     *
     * @param \WC_Order $order order object (with refund class member already added)
     * @return bool|\WP_Error true on success, or a WP_Error object on failure/error
     */
    protected function process_void(\WC_Order $order)
    {
    }
    /**
     * Adds the standard void transaction data to the order.
     *
     * @since 3.1.0
     *
     * @param \WC_Order $order the order object
     * @param SV_WC_Payment_Gateway_API_Response $response transaction response
     */
    protected function add_void_data(\WC_Order $order, $response)
    {
    }
    /**
     * Adds any gateway-specific data to the order after a void is performed.
     *
     * @since 3.1.0
     *
     * @param \WC_Order $order the order object
     * @param SV_WC_Payment_Gateway_API_Response $response the transaction response
     */
    protected function add_payment_gateway_void_data(\WC_Order $order, $response)
    {
    }
    /**
     * Builds the WP_Error object for a failed void.
     *
     * @since 3.1.0
     *
     * @param int|string $error_code error code
     * @param string $error_message error message
     * @return \WP_Error suitable for returning from the process_refund() method
     */
    protected function get_void_failed_wp_error($error_code, $error_message)
    {
    }
    /**
     * Marks an order as voided.
     *
     * Because WC has no status for "void", we use refunded.
     *
     * @since 3.1.0
     *
     * @param \WC_Order $order order object
     * @param SV_WC_Payment_Gateway_API_Response $response object
     */
    public function mark_order_as_voided($order, $response)
    {
    }
    /**
     * Maybe change the order status for a voided order to cancelled
     *
     * @hooked woocommerce_order_fully_refunded_status filter
     *
     * @see SV_WC_Payment_Gateway::mark_order_as_voided()
     * @since 4.0.0
     * @param string $order_status default order status for fully refunded orders
     * @param int $order_id order ID
     * @return string 'cancelled'
     */
    public function maybe_cancel_voided_order($order_status, $order_id)
    {
    }
    /**
     * Returns the $order object with a unique transaction ref member added.
     *
     * @since 2.2.0
     *
     * @param \WC_Order $order the order object
     * @return \WC_Order order object with member named unique_transaction_ref
     */
    protected function get_order_with_unique_transaction_ref($order)
    {
    }
    /**
     * Called after an unsuccessful transaction attempt.
     *
     * @since 1.0.0
     *
     * @param \WC_Order $order the order
     * @param SV_WC_Payment_Gateway_API_Response $response the transaction response
     * @return false
     */
    protected function do_transaction_failed_result(\WC_Order $order, \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Response $response)
    {
    }
    /**
     * Adds the standard transaction data to the order.
     *
     * @since 1.0.0
     *
     * @param \WC_Order $order the order object
     * @param SV_WC_Payment_Gateway_API_Response|null $response optional transaction response
     */
    public function add_transaction_data($order, $response = null)
    {
    }
    /**
     * Adds any gateway-specific transaction data to the order.
     *
     * @since 1.0.0
     *
     * @param \WC_Order $order the order object
     * @param SV_WC_Payment_Gateway_API_Customer_Response $response the transaction response
     */
    public function add_payment_gateway_transaction_data($order, $response)
    {
    }
    /**
     * Add customer data to an order/user if the gateway supports the customer ID
     * response
     *
     * @since 4.0.0
     *
     * @param \WC_Order $order order
     * @param SV_WC_Payment_Gateway_API_Customer_Response $response
     */
    protected function add_customer_data($order, $response = null)
    {
    }
    /**
     * Gets the order note message for approved credit card transactions.
     *
     * @since 5.0.0
     *
     * @param \WC_Order $order order object
     * @param SV_WC_Payment_Gateway_API_Response $response response object
     * @return string
     * @throws \Exception
     */
    public function get_credit_card_transaction_approved_message(\WC_Order $order, $response)
    {
    }
    /**
     * Gets the order note message for approved eCheck transactions.
     *
     * @since 5.0.0
     *
     * @param \WC_Order $order order object
     * @param SV_WC_Payment_Gateway_API_Response $response response object
     * @return string
     */
    public function get_echeck_transaction_approved_message(\WC_Order $order, \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Response $response)
    {
    }
    /**
     * Marks the given order as 'on-hold', set an order note and display a message to the customer.
     *
     * @since 1.0.0
     *
     * @param \WC_Order $order the order
     * @param string $message a message to display within the order note
     * @param SV_WC_Payment_Gateway_API_Response $response optional, the transaction response object
     */
    public function mark_order_as_held($order, $message, $response = null)
    {
    }
    /**
     * Maybe render custom order received text on the thank you page when
     * an order is held
     *
     * If detailed customer decline messages are enabled, this message may
     * additionally include more detailed information.
     *
     * @since 4.0.0
     *
     * @param string $text order received text
     * @param \WC_Order|null $order order object
     * @return string
     */
    public function maybe_render_held_order_received_text($text, $order)
    {
    }
    /**
     * Marks the given order as failed and set the order note.
     *
     * @since 1.0.0
     *
     * @param \WC_Order $order the order
     * @param string $error_message a message to display inside the "Payment Failed" order note
     * @param SV_WC_Payment_Gateway_API_Response|null $response optional transaction response object
     */
    public function mark_order_as_failed($order, $error_message, $response = null)
    {
    }
    /**
     * Marks the given order as cancelled and set the order note.
     *
     * @since 2.1.0
     *
     * @param \WC_Order $order the order
     * @param string $message a message to display inside the "Payment Cancelled" order note
     * @param SV_WC_Payment_Gateway_API_Response|null $response optional transaction response object
     */
    public function mark_order_as_cancelled($order, $message, $response = null)
    {
    }
    /** Customer ID Feature  **************************************************/
    /**
     * Returns true if this is gateway that supports gateway customer IDs
     *
     * @since 4.0.0
     * @return boolean true if the gateway supports gateway customer IDs
     */
    public function supports_customer_id()
    {
    }
    /**
     * Gets/sets the payment gateway customer id.
     *
     * This defaults to wc-{user id} and retrieves/stores to the user meta named by get_customer_id_user_meta_name()
     * This can be overridden for gateways that use some other value, or made to return false for gateways that don't support a customer id.
     * @see SV_WC_Payment_Gateway::get_customer_id_user_meta_name()
     *
     * @since 1.0.0
     *
     * @param int $user_id wordpress user identifier
     * @param array $args optional additional arguments which can include: environment_id, autocreate (true/false), and order
     * @return string payment gateway customer id
     */
    public function get_customer_id($user_id, $args = [])
    {
    }
    /**
     * Updates the payment gateway customer id for the given $environment, or for the plugin current environment.
     *
     * @see SV_WC_Payment_Gateway::get_customer_id()
     *
     * @since 1.0.0
     *
     * @param int $user_id WP user ID
     * @param string $customer_id payment gateway customer id
     * @param string $environment_id optional environment id, defaults to current environment
     * @return false|int false if no change was made (if the new value was the same as previous value) or if the update failed, meta id if the value was different and the update a success
     */
    public function update_customer_id($user_id, $customer_id, $environment_id = null)
    {
    }
    /**
     * Removes the payment gateway customer id for the given $environment, or for the plugin current environment.
     *
     * @since 4.0.0
     *
     * @param int $user_id WP user ID
     * @param string $environment_id optional environment id, defaults to current environment
     * @return bool success
     */
    public function remove_customer_id($user_id, $environment_id = null)
    {
    }
    /**
     * Gets a payment gateway customer id for a guest customer.
     *
     * This defaults to wc-guest-{order id} but can be overridden for gateways that use some other value, or made to return false for gateways that don't support a customer id.
     *
     * @since 1.0.0
     *
     * @param \WC_Order $order order object
     * @return string payment gateway guest customer id
     */
    public function get_guest_customer_id(\WC_Order $order)
    {
    }
    /**
     * Returns the payment gateway customer id user meta name for persisting the
     * gateway customer id.  Defaults to wc_{plugin id}_customer_id for the
     * production environment and wc_{plugin id}_customer_id_{environment}
     * for other environments.  A particular environment can be passed,
     * otherwise this will default to the plugin current environment.
     *
     * This can be overridden and made to return false for gateways that don't
     * support a customer id.
     *
     * NOTE: the plugin id, rather than gateway id, is used by default to create
     * the meta key for this setting, because it's assumed that in the case of a
     * plugin having multiple gateways (ie credit card and eCheck) the customer
     * id will be the same between them.
     *
     * @since 1.0.0
     *
     * @param string $environment_id optional environment id, defaults to plugin current environment
     * @return string payment gateway customer id user meta name
     */
    public function get_customer_id_user_meta_name($environment_id = null)
    {
    }
    /** Authorization/Charge feature ******************************************/
    /**
     * Returns true if this is a credit card gateway which supports
     * authorization transactions
     *
     * @since 1.0.0
     * @return boolean true if the gateway supports authorization
     */
    public function supports_credit_card_authorization()
    {
    }
    /**
     * Returns true if this is a credit card gateway which supports
     * charge transactions
     *
     * @since 1.0.0
     * @return boolean true if the gateway supports charges
     */
    public function supports_credit_card_charge()
    {
    }
    /**
     * Determines if this is a credit card gateway that supports charging virtual-only orders.
     *
     * @since 4.5.0
     * @return bool
     */
    public function supports_credit_card_charge_virtual()
    {
    }
    /**
     * Returns true if the gateway supports capturing a charge
     *
     * @since 3.1.0
     * @return boolean true if the gateway supports capturing a charge
     */
    public function supports_credit_card_capture()
    {
    }
    /**
     * Determines if the gateway supports capturing a partial charge.
     *
     * @since 5.0.0
     *
     * @return bool
     */
    public function supports_credit_card_partial_capture()
    {
    }
    /**
     * Adds any credit card authorization/charge admin fields, allowing the
     * administrator to choose between performing authorizations or charges
     *
     * @since 1.0.0
     * @param array $form_fields gateway form fields
     * @return array $form_fields gateway form fields
     */
    protected function add_authorization_charge_form_fields($form_fields)
    {
    }
    /**
     * Return the authorization time window in hours. An authorization is considered
     * expired if it is older than this.
     *
     * 30 days (720 hours) is the standard authorization window. Individual gateways
     * can override this as necessary.
     *
     * @since 2.2.0
     * @return int hours
     */
    public function get_authorization_time_window()
    {
    }
    /**
     * Determines if a credit card transaction should result in a charge.
     *
     * @since 1.0.0
     *
     * @param \WC_Order|null $order Optional. The order being charged
     * @return bool
     */
    public function perform_credit_card_charge(?\WC_Order $order = null)
    {
    }
    /**
     * Determines if a credit card transaction should result in an authorization.
     *
     * @since 1.0.0
     *
     * @param \WC_Order|null $order Optional. The order being authorized
     * @return bool
     */
    public function perform_credit_card_authorization(?\WC_Order $order = null)
    {
    }
    /**
     * Determines if partial capture is enabled.
     *
     * @since 5.0.0
     *
     * @return bool
     */
    public function is_partial_capture_enabled()
    {
    }
    /**
     * Determines if orders should be captured when switched to a "paid" status.
     *
     * @since 5.0.1
     *
     * @return bool
     */
    public function is_paid_capture_enabled()
    {
    }
    /** Add Payment Method feature ********************************************/
    /**
     * Determines if the gateway supports the add payment method feature.
     *
     * @since 5.0.0
     *
     * @return bool
     */
    public function supports_add_payment_method()
    {
    }
    // TODO: generalize the direct methods
    /** Card Types feature ******************************************************/
    /**
     * Returns true if the gateway supports card_types: allows the admin to
     * configure card type icons to display at checkout
     *
     * @since 1.0.0
     * @return boolean true if the gateway supports card_types
     */
    public function supports_card_types()
    {
    }
    /**
     * Returns the array of accepted card types if this is a credit card gateway
     * that supports card types.  Return format is 'VISA', 'MC', 'AMEX', etc
     *
     * @since 1.0.0
     * @see get_available_card_types()
     * @return array of accepted card types, ie 'VISA', 'MC', 'AMEX', etc
     */
    public function get_card_types()
    {
    }
    /**
     * Adds any card types form fields, allowing the admin to configure the card
     * types icons displayed during checkout
     *
     * @since 1.0.0
     * @param array $form_fields gateway form fields
     * @return array $form_fields gateway form fields
     */
    protected function add_card_types_form_fields($form_fields)
    {
    }
    /**
     * Returns available card types, ie 'VISA' => 'Visa', 'MC' => 'MasterCard', etc
     *
     * @since 1.0.0
     * @return array<string, string> associative array of card type to display name
     */
    public function get_available_card_types()
    {
    }
    /** Tokenization feature **************************************************/
    /**
     * Returns true if the gateway supports tokenization
     *
     * @since 1.0.0
     * @return boolean true if the gateway supports tokenization
     */
    public function supports_tokenization()
    {
    }
    /**
     * Returns true if tokenization is enabled
     *
     * @since 1.0.0
     * @return boolean true if tokenization is enabled
     */
    public function tokenization_enabled()
    {
    }
    /**
     * Adds any tokenization form fields for the settings page
     *
     * @since 1.0.0
     * @param array $form_fields gateway form fields
     * @return array $form_fields gateway form fields
     */
    protected function add_tokenization_form_fields($form_fields)
    {
    }
    /** Helper methods ******************************************************/
    /**
     * Add API request logging for the gateway. The main plugin class typically handles this, but the payment
     * gateway plugin class no-ops the method so each gateway's requests can be logged individually (e.g. credit card &
     * eCheck) and make use of the payment gateway-specific add_debug_message() method
     *
     * @since 2.2.0
     * @see SV_WC_Plugin::add_api_request_logging()
     */
    public function add_api_request_logging()
    {
    }
    /**
     * Log gateway API requests/responses
     *
     * @since 2.2.0
     *
     * @param \stdClass|array<string, mixed> $request request data, {@see SV_WC_API_Base::broadcast_request()} for format
     * @param \stdClass|array<string, mixed> $response response data, same as above
     * @param string $type for available types {@see SV_WC_Plugin::get_api_log_message()}
     * @return void
     */
    public function log_api_request($request, $response = [], string $type = 'message'): void
    {
    }
    /**
     * Adds debug messages to the page as a WC message/error, and/or to the WC Error log
     *
     * @since 1.0.0
     *
     * @param string|mixed $message message to add
     * @param string|null $type how to add the message, options are: 'message' (styled as WC message), 'error' (styled as WC Error)
     */
    public function add_debug_message($message, ?string $type = 'message'): void
    {
    }
    /**
     * Gets the payment currency, either from current order or WC settings.
     *
     * @since 4.1.0
     *
     * @return string three-letter currency code
     */
    protected function get_payment_currency()
    {
    }
    /**
     * Determines if a given currency is accepted by this gateway.
     *
     * @since 2.1.0
     *
     * @param string $currency optional three-letter currency code, defaults to order currency (if available) or currently configured WooCommerce currency
     * @return bool
     */
    public function currency_is_accepted($currency = null)
    {
    }
    /**
     * Returns true if the given order needs shipping, false otherwise.  This
     * is based on the WooCommerce core Cart::needs_shipping()
     *
     * @since 2.2.0
     * @param \WC_Order $order
     * @return boolean true if $order needs shipping, false otherwise
     */
    protected function order_needs_shipping($order)
    {
    }
    /** Order Meta helper methods *********************************************/
    /**
     * Adds order meta data.
     *
     * @since 2.2.0
     *
     * @param \WC_Order|int the order to add meta to
     * @param string $key meta key (already prefixed with gateway ID)
     * @param mixed $value meta value
     * @param bool $unique whether the meta value should be unique
     * @return bool success
     */
    public function add_order_meta($order, $key, $value, $unique = false)
    {
    }
    /**
     * Gets order meta data.
     *
     * @since 2.2.0
     *
     * @param \WC_Order|int the order to get meta for
     * @param string $key meta key
     * @return false|mixed
     */
    public function get_order_meta($order, $key)
    {
    }
    /**
     * Updates order meta data.
     *
     * @since 2.2.0
     *
     * @param \WC_Order|int the order to update meta for
     * @param string $key meta key
     * @param mixed $value meta value
     * @return bool success
     */
    public function update_order_meta($order, $key, $value)
    {
    }
    /**
     * Delete order meta data.
     *
     * @since 2.2.0
     * @param \WC_Order|int the order to delete meta for
     * @param string $key meta key
     * @return bool success
     */
    public function delete_order_meta($order, $key)
    {
    }
    /**
     * Gets the order meta prefixed used for the *_order_meta() methods
     *
     * Defaults to `_wc_{gateway_id}_`
     *
     * @since 2.2.0
     *
     * @return string
     */
    public function get_order_meta_prefix()
    {
    }
    /** Getters ******************************************************/
    /**
     * Returns the payment gateway id
     *
     * @since 1.0.0
     * @see WC_Payment_Gateway::$id
     * @return string payment gateway id
     */
    public function get_id()
    {
    }
    /**
     * Returns the payment gateway id with dashes in place of underscores, and
     * appropriate for use in frontend element names, classes and ids
     *
     * @since 1.0.0
     * @return string payment gateway id with dashes in place of underscores
     */
    public function get_id_dasherized()
    {
    }
    /**
     * Returns the parent plugin object
     *
     * @since 1.0.0
     *
     * @return SV_WC_Payment_Gateway_Plugin the parent plugin object
     */
    public function get_plugin()
    {
    }
    /**
     * Returns the admin method title.  This should be the gateway name, ie
     * 'Intuit QBMS'
     *
     * @since 1.0.0
     * @see WC_Settings_API::$method_title
     * @return string method title
     */
    public function get_method_title()
    {
    }
    /**
     * Determines if the Card Security Code (CVV) field should be used at checkout.
     *
     * @since 1.0.0
     * @return bool
     */
    public function csc_enabled()
    {
    }
    /**
     * Determines if the Card Security Code (CVV) field should be used for saved cards at checkout.
     *
     * @since 5.0.0
     * @return bool
     */
    public function csc_enabled_for_tokens()
    {
    }
    /**
     * Determines if the Card Security Code (CVV) field should be required at checkout.
     *
     * @since 4.5.0
     * @return bool
     */
    public function csc_required()
    {
    }
    /**
     * Determines if the gateway supports sharing settings with sibling gateways.
     *
     * @since 4.5.0
     * @return bool
     */
    public function share_settings()
    {
    }
    /**
     * Determines if settings should be inherited for this gateway.
     *
     * @since 1.0.0
     * @return bool
     */
    public function inherit_settings()
    {
    }
    /**
     * Returns an array of two-letter country codes this gateway is allowed for, defaults to all
     *
     * @since 2.2.0
     * @see WC_Payment_Gateway::$countries
     * @return array of two-letter country codes this gateway is allowed for, defaults to all
     */
    public function get_available_countries()
    {
    }
    /**
     * Adds support for the named feature or features.
     *
     * @since 1.0.0
     *
     * @param string|string[] $feature the feature name or names supported by this gateway
     */
    public function add_support($feature)
    {
    }
    /**
     * Removes support for the named feature or features.
     *
     * @since 4.1.0
     *
     * @param string|string[] $feature feature name or names not supported by this gateway
     */
    public function remove_support($feature)
    {
    }
    /**
     * Set all features supported.
     *
     * @since 1.0.0
     *
     * @param string[]|string $features feature or array of supported feature names
     */
    public function set_supports($features)
    {
    }
    /**
     * Returns true if this echeck gateway supports
     *
     * @since 1.0.0
     * @param string $field_name check gateway field name, includes 'check_number', 'account_type'
     * @return boolean true if this check gateway supports the named field
     */
    public function supports_check_field($field_name)
    {
    }
    /**
     * Gets the set of environments supported by this gateway.  All gateways
     * support at least the production environment
     *
     * @since 1.0.0
     * @return array associative array of environment id to name supported by this gateway
     */
    public function get_environments()
    {
    }
    /**
     * Returns the environment setting, one of the $environments keys, ie
     * 'production'
     *
     * @since 1.0.0
     * @return string the configured environment id
     */
    public function get_environment()
    {
    }
    /**
     * Get the configured environment's display name.
     *
     * @since 4.3.0
     * @return string The configured environment name
     */
    public function get_environment_name()
    {
    }
    /**
     * Returns true if the current environment is $environment_id.
     *
     * @since 1.0.0
     *
     * @param string|mixed $environment_id
     * @return bool
     */
    public function is_environment($environment_id)
    {
    }
    /**
     * Returns true if the current gateway environment is configured to
     * 'production'.  All gateways have at least the production environment
     *
     * @since 1.0.0
     * @param string $environment_id optional environment id to check, otherwise defaults to the gateway current environment
     * @return boolean true if $environment_id (if non-null) or otherwise the current environment is production
     */
    public function is_production_environment($environment_id = null)
    {
    }
    /**
     * Returns true if the current gateway environment is configured to 'test'
     *
     * @since 2.1.0
     * @param string $environment_id optional environment id to check, otherwise defaults to the gateway current environment
     * @return boolean true if $environment_id (if non-null) or otherwise the current environment is test
     */
    public function is_test_environment($environment_id = null)
    {
    }
    /**
     * Returns true if the gateway is enabled.  This has nothing to do with
     * whether the gateway is properly configured or functional.
     *
     * @since 2.1.0
     * @see WC_Payment_Gateway::$enabled
     * @return boolean true if the gateway is enabled
     */
    public function is_enabled()
    {
    }
    /**
     * Returns true if detailed decline messages should be displayed to
     * customers on checkout when available, rather than a single generic
     * decline message
     *
     * @since 2.2.0
     * @see SV_WC_Payment_Gateway_API_Response_Message_Helper
     * @see SV_WC_Payment_Gateway_API_Response::get_user_message()
     * @return boolean true if detailed decline messages should be displayed
     *         on checkout
     */
    public function is_detailed_customer_decline_messages_enabled()
    {
    }
    /**
     * Returns the set of accepted currencies, or empty array if all currencies
     * are accepted by this gateway
     *
     * @since 2.1.0
     * @return array of currencies accepted by this gateway
     */
    public function get_accepted_currencies()
    {
    }
    /**
     * Gets the debug mode value.
     *
     * @since 5.12.0
     *
     * @return string
     */
    public function get_debug_mode(): string
    {
    }
    /**
     * Returns true if all debugging is disabled
     *
     * @since 1.0.0
     *
     * @return boolean if all debugging is disabled
     */
    public function debug_off(): bool
    {
    }
    /**
     * Returns true if all debugging is enabled (on both checkout page and log files).
     *
     * This means the following apply:
     * @see SV_WC_Payment_Gateway::debug_checkout()
     * @see SV_WC_Payment_Gateway::debug_log()
     *
     * @since 5.12.0
     *
     * @return bool
     */
    public function debug_all(): bool
    {
    }
    /**
     * Returns true if debug logging is enabled
     *
     * @since 1.0.0
     *
     * @return boolean if debug logging is enabled
     */
    public function debug_log(): bool
    {
    }
    /**
     * Returns true if checkout debugging is enabled.
     *
     * This will cause debugging statements to be displayed on the checkout/pay pages.
     *
     * @since 1.0.0
     *
     * @return boolean if checkout debugging is enabled
     */
    public function debug_checkout(): bool
    {
    }
    /**
     * Returns true if this is a direct type gateway
     *
     * @since 1.0.0
     * @return boolean if this is a direct payment gateway
     */
    public function is_direct_gateway()
    {
    }
    /**
     * Returns true if this is a hosted type gateway
     *
     * @since 1.0.0
     * @return boolean if this is a hosted IPN payment gateway
     */
    public function is_hosted_gateway()
    {
    }
    /**
     * Returns true if the gateway has a separate, dedicated payment page after the normal Checkout page.
     * This usually means the checkout page would show a "Continue to Payment" button, which when clicked redirects
     * the customer to a separate page (probably on-site) where payment is actually taken.
     *
     * @since 5.12.7
     * @return bool
     */
    public function hasSeparatePaymentPage(): bool
    {
    }
    /**
     * Returns the payment type for this gateway
     *
     * @since 2.1.0
     * @return string the payment type, ie 'credit-card', 'echeck', etc
     */
    public function get_payment_type()
    {
    }
    /**
     * Returns true if this is a credit card gateway
     *
     * @since 1.0.0
     * @return boolean true if this is a credit card gateway
     */
    public function is_credit_card_gateway()
    {
    }
    /**
     * Returns true if this is an echeck gateway
     *
     * @since 1.0.0
     * @return boolean true if this is an echeck gateway
     */
    public function is_echeck_gateway()
    {
    }
    /**
     * Returns true if currently processing payment from block-based checkout.
     *
     * @since 5.12.1
     *
     * @return bool
     */
    protected function is_processing_block_checkout(): bool
    {
    }
    /**
     * Gets the current payment processing context.
     *
     * @since 5.12.1
     * @see Gateway_Checkout_Block_Integration::prepare_payment_data()
     *
     * @return string
     */
    protected function get_processing_context(): ?string
    {
    }
    /**
     * Checks if we're currently in the given payment processing context.
     *
     * @since 5.12.1
     * @see Gateway_Checkout_Block_Integration::prepare_payment_data()
     *
     * @param string $context
     * @return bool
     */
    protected function is_processing_context(string $context): bool
    {
    }
    /**
     * Returns the API instance for this gateway if it uses direct communication
     *
     * This is a stub method which must be overridden if this gateway performs
     * direct communication
     *
     * @since 1.0.0
     * @return SV_WC_Payment_Gateway_API the payment gateway API instance
     */
    public function get_api()
    {
    }
    /**
     * Returns the order_id if on the checkout pay page
     *
     * @since 3.0.0
     * @return int order identifier
     */
    public function get_checkout_pay_page_order_id()
    {
    }
    /**
     * Returns the order_id if on the checkout order received page
     *
     * Note this must be used in the `wp` or later action, as earlier
     * actions do not yet have access to the query vars
     *
     * @since 3.0.0
     * @return int order identifier
     */
    public function get_checkout_order_received_order_id()
    {
    }
    /**
     * Returns the error message for display if the gateway is not configured.
     *
     * @since 5.4.2
     *
     * @return string
     */
    public function get_not_configured_error_message()
    {
    }
}
/**
 * # WooCommerce Payment Gateway Framework Direct Gateway
 *
 * @since 1.0.0
 */
#[\AllowDynamicProperties]
abstract class SV_WC_Payment_Gateway_Direct extends \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway
{
    /**
     * Validate the payment fields when processing the checkout
     *
     * NOTE: if we want to bring billing field validation (ie length) into the
     * fold, see the Elavon VM Payment Gateway for a sample implementation
     *
     * @since 1.0.0
     * @see WC_Payment_Gateway::validate_fields()
     * @return bool true if fields are valid, false otherwise
     */
    public function validate_fields()
    {
    }
    /**
     * Returns true if the posted credit card fields are valid, false otherwise
     *
     * @since 1.0.0
     * @param boolean $is_valid true if the fields are valid, false otherwise
     * @return boolean true if the fields are valid, false otherwise
     */
    protected function validate_credit_card_fields($is_valid)
    {
    }
    /**
     * Validates the provided credit card expiration date
     *
     * @since 2.1.0
     * @param string $expiration_month the credit card expiration month
     * @param string $expiration_year the credit card expiration month
     * @return boolean true if the card expiration date is valid, false otherwise
     */
    protected function validate_credit_card_expiration_date($expiration_month, $expiration_year)
    {
    }
    /**
     * Validates the provided credit card account number
     *
     * @since 2.1.0
     * @param string $account_number the credit card account number
     * @return boolean true if the card account number is valid, false otherwise
     */
    protected function validate_credit_card_account_number($account_number)
    {
    }
    /**
     * Validates the provided Card Security Code, adding user error messages as
     * needed
     *
     * @since 1.0.0
     * @param string $csc the customer-provided card security code
     * @return boolean true if the card security code is valid, false otherwise
     */
    protected function validate_csc($csc)
    {
    }
    /**
     * Returns true if the posted echeck fields are valid, false otherwise
     *
     * @since 1.0.0
     * @param bool $is_valid true if the fields are valid, false otherwise
     * @return bool
     */
    protected function validate_check_fields($is_valid)
    {
    }
    /**
     * Handles payment processing.
     *
     * @see WC_Payment_Gateway::process_payment()
     *
     * @since 1.0.0
     *
     * @param int|string $order_id
     * @return array associative array with members 'result' and 'redirect'
     */
    public function process_payment($order_id)
    {
    }
    /**
     * Gets any added front end notices as user messages.
     *
     * @since 5.12.0
     *
     * @param string|null $type
     * @return string[]
     */
    protected function get_notices_as_user_messages(?string $type = null): array
    {
    }
    /**
     * Handles updating a user's payment method during payment.
     *
     * This allows us to check the billing address against the last used so we can determine if it needs an update.
     *
     * @since 5.3.0
     *
     * @param \WC_Order $order
     * @return \WC_Order
     */
    protected function update_transaction_payment_method(\WC_Order $order)
    {
    }
    /**
     * Add payment and transaction information to $order object.
     *
     * The standard information that can be added includes:
     *
     * It is set and get using Dynamic_Props class and not directly on $order object, but documented here for reference.
     *
     * $order->payment_total           - the payment total
     * $order->customer_id             - optional payment gateway customer id (useful for tokenized payments for certain gateways, etc)
     * $order->payment->account_number - the credit card or checking account number
     * $order->payment->last_four      - the last four digits of the account number
     * $order->payment->card_type      - the card type (e.g. visa) derived from the account number
     * $order->payment->routing_number - account routing number (check transactions only)
     * $order->payment->account_type   - optional type of account one of 'checking' or 'savings' if type is 'check'
     * $order->payment->card_type      - optional card type, ie one of 'visa', etc
     * $order->payment->exp_month      - the 2 digit credit card expiration month (for credit card gateways), e.g. 07
     * $order->payment->exp_year       - the 2 digit credit card expiration year (for credit card gateways), e.g. 17
     * $order->payment->csc            - the card security code (for credit card gateways)
     * $order->payment->check_number   - optional check number (check transactions only)
     * $order->payment->drivers_license_number - optional driver license number (check transactions only)
     * $order->payment->drivers_license_state  - optional driver license state code (check transactions only)
     * $order->payment->token          - payment token (for tokenized transactions)
     *
     * Note that not all gateways will necessarily pass or require all of the
     * above.  These represent the most common attributes used among a variety
     * of gateways, it's up to the specific gateway implementation to make use
     * of, or ignore them, or add custom ones by overridding this method.
     *
     * @since 1.0.0
     * @see SV_WC_Payment_Gateway::get_order()
     * @param int|\WC_Order $order_id order ID being processed
     * @return \WC_Order object with payment and transaction information attached
     */
    public function get_order($order_id)
    {
    }
    /**
     * Performs a check transaction for the given order and returns the result.
     *
     * @since 1.0.0
     *
     * @param \WC_Order $order the order object
     * @param SV_WC_Payment_Gateway_API_Response $response optional check transaction response
     * @return SV_WC_Payment_Gateway_API_Response the response
     * @throws SV_WC_Plugin_Exception network timeouts, etc
     */
    protected function do_check_transaction($order, $response = null)
    {
    }
    /**
     * Performs a credit card transaction for the given order and returns the result.
     *
     * @since 1.0.0
     *
     * @param \WC_Order $order the order object
     * @param SV_WC_Payment_Gateway_API_Response $response optional credit card transaction response
     * @return SV_WC_Payment_Gateway_API_Response the response
     * @throws SV_WC_Plugin_Exception network timeouts, etc
     */
    protected function do_credit_card_transaction($order, $response = null)
    {
    }
    /**
     * Create a transaction.
     *
     * @since 1.0.0
     *
     * @param \WC_Order $order the order object
     * @return bool
     * @throws SV_WC_Plugin_Exception
     */
    protected function do_transaction($order)
    {
    }
    /** Add Payment Method feature ********************************************/
    /**
     * Entry method for the Add Payment Method feature flow. Note this is *not*
     * stubbed in the WC_Payment_Gateway abstract class, but is called if the
     * gateway declares support for it.
     *
     * @since 4.0.0
     */
    public function add_payment_method()
    {
    }
    /**
     * Performs the transaction to add the customer's payment method to their account.
     *
     * @since 4.0.0
     *
     * @param \WC_Order $order order object
     * @param SV_WC_Payment_Gateway_API_Create_Payment_Token_Response $response optional payment token transaction response
     * @return array result with success/error message and request status (success/failure)
     * @throws SV_WC_Plugin_Exception
     */
    protected function do_add_payment_method_transaction(\WC_Order $order, ?\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Create_Payment_Token_Response $response = null)
    {
    }
    /**
     * Creates the order required for adding a new payment method.
     *
     * Note that a mock order is generated as there is no actual order associated with the request.
     *
     * @since 4.0.0
     *
     * @return \WC_Order generated order object
     */
    protected function get_order_for_add_payment_method()
    {
    }
    /**
     * Add customer data as part of the add payment method transaction, primarily
     * customer ID
     *
     * @since 4.0.0
     * @param \WC_Order $order mock order
     * @param SV_WC_Payment_Gateway_API_Create_Payment_Token_Response $response
     */
    protected function add_add_payment_method_customer_data($order, $response)
    {
    }
    /**
     * Adds data from the add payment method transaction, primarily:
     *
     * + transaction ID
     * + transaction date
     * + transaction environment
     *
     * @since 4.0.0
     *
     * @param SV_WC_Payment_Gateway_API_Create_Payment_Token_Response $response
     */
    protected function add_add_payment_method_transaction_data($response)
    {
    }
    /**
     * Allow gateway implementations to add additional data to the data saved
     * during the add payment method transaction
     *
     * @since 4.0.0
     * @param SV_WC_Payment_Gateway_API_Create_Payment_Token_Response $response create payment token response
     * @return array
     */
    protected function get_add_payment_method_payment_gateway_transaction_data($response)
    {
    }
    /** Getters ******************************************************/
    /**
     * Returns true if this is a direct type gateway
     *
     * @since 1.0.0
     * @return boolean if this is a direct payment gateway
     */
    public function is_direct_gateway()
    {
    }
    /**
     * Returns true if a transaction should be forced (meaning payment
     * processed even if the order amount is 0).  This is useful mostly for
     * testing situations
     *
     * @since 2.2.0
     * @return boolean true if the transaction request should be forced
     */
    public function transaction_forced()
    {
    }
    /**
     * Determines whether tokenization should be performed before the sale.
     *
     * Most gateways should always tokenize before the sale if the order total is 0.00 (such as a free trial), because
     * they don't allow 0.00 transactions (but do allow tokenizing without a transaction).
     *
     * Gateways that don't support tokenization before the sale (without a transaction) should override this method to
     * return false, even if order total is 0.00. Note that when doing, so the gateway should also override
     * `can_tokenize_with_or_after_sale()` to return true.
     *
     * Finally, gateways that only tokenize with sale (Moneris), may need to override `should_skip_transaction()` to return false.
     *
     * @see SV_WC_Payment_Gateway_Direct::should_tokenize_with_or_after_sale()
     * @see SV_WC_Payment_Gateway_Direct::can_tokenize_with_or_after_sale()
     * @see SV_WC_Payment_Gateway_Direct::should_skip_transaction()
     *
     * @since 5.11.10
     *
     * @param \WC_Order $order the order being paid for.
     * @return bool
     */
    protected function should_tokenize_before_sale(\WC_Order $order): bool
    {
    }
    /**
     * Determines whether tokenization should be performed after the sale.
     *
     * Performs checks to ensure that the gateway supports tokenization, that the order is not a guest order,
     * that the gateway supports tokenization after the sale, and that the gateway is configured to tokenize after the sale.
     *
     * @see SV_WC_Payment_Gateway_Direct::should_tokenize_before_sale()
     *
     * @since 5.11.10
     *
     * @param \WC_Order $order the order that was paid for.
     * @return bool
     */
    protected function should_tokenize_with_or_after_sale(\WC_Order $order): bool
    {
    }
    /**
     * Determines whether the gateway can tokenize after the sale of a concrete order.
     *
     * Most gateways can tokenize after the sale only if the payment total is greater than 0. If the payment total is 0.00,
     * then most gateways should tokenize before the sale. However, if a gateway only supports tokenization with or after sale,
     * then this method should return true.
     *
     * @since 5.11.10
     *
     * @param \WC_Order $order the order that was paid for.
     * @return bool
     */
    protected function can_tokenize_with_or_after_sale(\WC_Order $order): bool
    {
    }
    /**
     * Determines whether the transaction should be skipped when processing payment for an order.
     *
     * Most gateways should skip the transaction if the order total is 0.00 (such as a free trial), because they don't
     * support 0.00 transactions. If a new payment method was used, and tokenization was enabled, then the gateway
     * most likely tokenized the method before the sale.
     *
     * Gateways that only support tokenization with sale (in the same request), should override this method to return true.
     *
     * @since 5.11.10
     *
     * @param \WC_Order $order the order being paid for.
     * @return bool
     */
    protected function should_skip_transaction(\WC_Order $order): bool
    {
    }
}
/**
 * SkyVerge Payment Gateway Helper Class
 *
 * The purpose of this class is to centralize common utility functions that
 * are commonly used in SkyVerge payment gateway plugins
 *
 * @since 3.0.0
 */
#[\AllowDynamicProperties]
class SV_WC_Payment_Gateway_Helper
{
    /** @var string the Visa card type ID **/
    const CARD_TYPE_VISA = 'visa';
    /** @var string the MasterCard card type ID **/
    const CARD_TYPE_MASTERCARD = 'mastercard';
    /** @var string the American Express card type ID **/
    const CARD_TYPE_AMEX = 'amex';
    /** @var string the Diners Club card type ID **/
    const CARD_TYPE_DINERSCLUB = 'dinersclub';
    /** @var string the Discover card type ID **/
    const CARD_TYPE_DISCOVER = 'discover';
    /** @var string the JCB card type ID **/
    const CARD_TYPE_JCB = 'jcb';
    /** @var string the CarteBleue card type ID **/
    const CARD_TYPE_CARTEBLEUE = 'cartebleue';
    /** @var string the Maestro card type ID **/
    const CARD_TYPE_MAESTRO = 'maestro';
    /** @var string the Laser card type ID **/
    const CARD_TYPE_LASER = 'laser';
    /**
     * Perform standard luhn check.  Algorithm:
     *
     * 1. Double the value of every second digit beginning with the second-last right-hand digit.
     * 2. Add the individual digits comprising the products obtained in step 1 to each of the other digits in the original number.
     * 3. Subtract the total obtained in step 2 from the next higher number ending in 0.
     * 4. This number should be the same as the last digit (the check digit). If the total obtained in step 2 is a number ending in zero (30, 40 etc.), the check digit is 0.
     *
     * @since 3.0.0
     * @param string $account_number the credit card number to check
     * @return bool true if $account_number passes the check, false otherwise
     */
    public static function luhn_check($account_number)
    {
    }
    /**
     * Normalize a card type to a standard type ID and account for variations.
     *
     * @since 4.5.0
     * @param string $card_type the card type to normalize
     * @return string
     */
    public static function normalize_card_type($card_type)
    {
    }
    /**
     * Determines the credit card type from a given account number (only first 4 required).
     *
     * @since 4.0.0
     *
     * @param string $account_number the credit card account number
     * @return string the credit card type
     */
    public static function card_type_from_account_number($account_number)
    {
    }
    /**
     * Translates a credit card type or bank account name to a full name,
     * e.g. 'mastercard' => 'MasterCard' or 'savings' => 'eCheck'
     *
     * @since 4.0.0
     * @param string $payment_type the credit card or bank type, ie 'mastercard', 'amex', 'checking'
     * @return string the credit card or bank account name, ie 'MasterCard', 'American Express', 'Checking Account'
     */
    public static function payment_type_to_name($payment_type)
    {
    }
    /**
     * Gets the known card types and their variations.
     *
     * Returns the card types in the format:
     *
     * 'mastercard' {
     *     'name'       => 'MasterCard',
     *     'variations' => array( 'mc' ),
     * }
     *
     * @since 4.5.0
     *
     * @return array
     */
    public static function get_card_types()
    {
    }
    /**
     * Formats the given expiration year to include the last two digits only.
     *
     * @since 5.9.0
     *
     * @param string $exp_year a credit card expiration year
     * @return string
     */
    public static function format_exp_year($exp_year)
    {
    }
}
/**
 * # WooCommerce Payment Gateway Framework Hosted Gateway
 *
 * Implement the following methods:
 *
 * + `get_hosted_pay_page_url()` - Return the hosted pay page url
 * + `get_hosted_pay_page_params()` - Return any hosted pay page parameters (optional)
 * + `get_transaction_response()` - Return the transaction response object on redirect-back/IPN
 *
 * @since 1.0.0
 */
#[\AllowDynamicProperties]
abstract class SV_WC_Payment_Gateway_Hosted extends \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway
{
    /** @var string the WC API url, used for the IPN and/or redirect-back handler */
    protected $transaction_response_handler_url;
    /**
     * Initialize the gateway
     *
     * See parent constructor for full method documentation
     *
     * @since 2.1.0
     * @see SV_WC_Payment_Gateway::__construct()
     * @param string $id the gateway id
     * @param SV_WC_Payment_Gateway_Plugin $plugin the parent plugin class
     * @param array $args gateway arguments
     */
    public function __construct($id, $plugin, $args)
    {
    }
    /**
     * Display the payment fields on the checkout page
     *
     * @since 1.0.0
     * @see WC_Payment_Gateway::payment_fields()
     */
    public function payment_fields()
    {
    }
    /**
     * Processes the payment by redirecting customer to the WooCommerce pay page or the gateway hosted pay page.
     *
     * @see \WC_Payment_Gateway::process_payment()
     *
     * @since 1.0.0
     *
     * @param int $order_id the order to process
     * @return array with keys 'result' and 'redirect'
     */
    public function process_payment($order_id)
    {
    }
    /**
     * Gets the payment URL: the checkout pay page
     *
     * @since 2.1.0
     * @param int $order_id the order id
     * @return string the payment URL, or false if unavailable
     */
    protected function get_payment_url($order_id)
    {
    }
    /**
     * Determines if the customers cart should be emptied before redirecting to the payment form, after the order is created.
     *
     * Gateways can set this to false if they want the cart to remain intact until a successful payment is made.
     *
     * @since 5.0.0
     *
     * @return bool
     */
    protected function empty_cart_before_redirect()
    {
    }
    /**
     * Render the payment page for gateways that use a form post method
     *
     * @since 2.1.0
     * @see SV_WC_Payment_Gateway::payment_page()
     * @see SV_WC_Payment_Gateway_Hosted::use_form_post()
     * @see SV_WC_Payment_Gateway_Hosted::add_pay_page_handler()
     * @param int $order_id identifies the order
     */
    public function payment_page($order_id)
    {
    }
    /**
     * Generates the POST pay form.  Some inline javascript will attempt to
     * auto-submit this pay form, so as to make the checkout process as
     * seamless as possile
     *
     * @since 2.1.0
     * @param int $order_id the order identifier
     */
    public function generate_pay_form($order_id)
    {
    }
    /**
     * Renders the gateway pay page direct post form.  This is used by gateways
     * that collect some or all payment information on-site, and POST the
     * entered information to a remote server for processing
     *
     * @see SV_WC_Payment_Gateway_Hosted::use_auto_form_post()
     *
     * @since 2.2.0
     *
     * @param \WC_Order $order the order object
     * @param array $request_params associative array of request parameters
     */
    public function render_pay_page_form($order, $request_params)
    {
    }
    /**
     * Renders the gateway auto post form.  This is used for gateways that
     * collect no payment information on-site, but must POST parameters to a
     * hosted payment page where payment information is entered.
     *
     * @since 2.2.0
     * @see SV_WC_Payment_Gateway_Hosted::use_auto_form_post()
     *
     * @param \WC_Order $order the order object
     * @param array $request_params associative array of request parameters
     */
    public function render_auto_post_form(\WC_Order $order, $request_params)
    {
    }
    /**
     * Get the auto post form display arguments.
     *
     * @since 4.3.0
     * @see SV_WC_Payment_Gateway_Hosted::render_auto_post_form() for args
     *
     * @param \WC_Order $order the order object
     * @return array
     */
    protected function get_auto_post_form_args(\WC_Order $order)
    {
    }
    /**
     * Get the auto post form params HTML.
     *
     * This can be overridden by concrete gateways to support more complex param arrays.
     *
     * @since 4.3.0
     * @param array $request_params The request params
     * @return string
     */
    protected function get_auto_post_form_params_html($request_params = array())
    {
    }
    /**
     * Returns the gateway hosted pay page parameters, if any
     *
     * @since 2.1.0
     *
     * @param \WC_Order $order the order object
     * @return array associative array of name-value parameters
     */
    protected function get_hosted_pay_page_params($order)
    {
    }
    /**
     * Gets the hosted pay page url to redirect to, to allow the customer to
     * remit payment.  This is generally the bare URL, without any query params.
     *
     * This method may be called more than once during a single request.
     *
     * @since 2.1.0
     *
     * @see SV_WC_Payment_Gateway_Hosted::get_hosted_pay_page_params()
     * @param \WC_Order $order optional order object, defaults to null
     * @return string hosted pay page url, or false if it could not be determined
     */
    abstract public function get_hosted_pay_page_url($order = null);
    /**
     * Handle a payment notification request.
     *
     * @since 4.3.0
     *
     * @throws \Exception
     */
    public function handle_transaction_response_request()
    {
    }
    /**
     * Gets the order object with transaction data.
     *
     * @since 5.0.0
     *
     * @param SV_WC_Payment_Gateway_API_Payment_Notification_Response $response response object
     * @return \WC_Order
     * @throws SV_WC_Payment_Gateway_Exception
     * @throws \Exception
     */
    protected function get_order_from_response($response)
    {
    }
    /**
     * Gets the order object with payment data added.
     *
     * @since 5.0.0
     * @see SV_WC_Payment_Gateway::get_order()
     *
     * @param int|\WC_Order $order_id order ID or object
     * @return \WC_Order
     */
    public function get_order($order_id)
    {
    }
    /**
     * Validate a transaction response.
     *
     * @since 4.3.0
     * @param \WC_Order $order the order object
     * @param SV_WC_Payment_Gateway_API_Payment_Notification_Response the response object
     * @throws SV_WC_Payment_Gateway_Exception
     */
    protected function validate_transaction_response($order, $response)
    {
    }
    /**
     * Process the transaction response for the given order
     *
     * @since 2.1.0
     *
     * @param \WC_Order $order the order
     * @param SV_WC_Payment_Gateway_API_Payment_Notification_Response $response transaction response
     * @throws \Exception
     */
    protected function process_transaction_response($order, $response)
    {
    }
    /**
     * Processes a transaction response's token data, if any.
     *
     * @since 5.0.0
     *
     * @param \WC_Order $order order object
     * @param SV_WC_Payment_Gateway_Payment_Notification_Tokenization_Response $response response object
     * @return \WC_Order order object
     * @throws \Exception
     */
    protected function process_tokenization_response(\WC_Order $order, $response)
    {
    }
    /**
     * Adds an order note, along with anything else required after an approved
     * transaction.  This is a generic, default approved handler.
     *
     * @since 2.1.0
     *
     * @param \WC_Order $order the order object
     * @param SV_WC_Payment_Gateway_API_Payment_Notification_Response $response the response object
     */
    protected function do_transaction_approved(\WC_Order $order, $response)
    {
    }
    /**
     * Handle a held transaction response.
     *
     * @since 4.3.0
     *
     * @param \WC_Order $order the order object
     * @param SV_WC_Payment_Gateway_API_Payment_Notification_Response $response the response object
     */
    protected function do_transaction_held(\WC_Order $order, $response)
    {
    }
    /**
     * Handles a cancelled transaction response.
     *
     * @since 4.3.0
     *
     * @param \WC_Order $order the order object
     * @param SV_WC_Payment_Gateway_API_Payment_Notification_Response $response the response object
     */
    protected function do_transaction_cancelled(\WC_Order $order, $response)
    {
    }
    /**
     * Handles a failed transaction response.
     *
     * @since 4.3.0
     *
     * @param \WC_Order $order the order object
     * @param SV_WC_Payment_Gateway_API_Payment_Notification_Response $response the response object
     */
    protected function do_transaction_failed(\WC_Order $order, $response)
    {
    }
    /**
     * Handles an invalid transaction response.
     *
     * i.e. the order has already been paid or was not found
     *
     * @since 4.3.0
     *
     * @param \WC_Order $order WooCommerce order object
     * @param SV_WC_Payment_Gateway_API_Payment_Notification_Response $response the response object
     */
    protected function do_invalid_transaction_response($order, $response)
    {
    }
    /**
     * Returns an API response object for the current response request
     *
     * @since 2.1.0
     * @param array $request_response_data the current request response data
     * @return SV_WC_Payment_Gateway_API_Payment_Notification_Response the response object
     */
    abstract protected function get_transaction_response($request_response_data);
    /** Helper methods ******************************************************/
    /**
     * Returns the WC API URL for this gateway, based on the current protocol
     *
     * @since 2.1.0
     * @return string the WC API URL for this server
     */
    public function get_transaction_response_handler_url()
    {
    }
    /**
     * Returns true if currently doing a transaction response request
     *
     * @since 2.1.0
     * @return boolean true if currently doing a transaction response request
     */
    public function doing_transaction_response_handler()
    {
    }
    /**
     * Logs pay page form submission request.
     *
     * @since 2.1.0
     *
     * @param array $request the request data associative array, which should include members 'method', 'uri', 'body'
     */
    public function log_hosted_pay_page_request($request)
    {
    }
    /**
     * Logs IPN/redirect-back transaction response request to the log file.
     *
     * @since 2.1.0
     *
     * @param array|string $response the request data
     * @param string $message optional message string with a %s to hold the
     *        response data.  Defaults to 'Request %s'
     * $response
     */
    public function log_transaction_response_request($response, $message = null)
    {
    }
    /** Getters ******************************************************/
    /**
     * Returns true if this is a hosted type gateway
     *
     * @since 1.0.0
     * @return boolean true if this is a hosted payment gateway
     */
    public function is_hosted_gateway()
    {
    }
    /**
     * Returns true if this gateway uses a form-post from the pay
     * page to "redirect" to a hosted payment page
     *
     * @since 2.1.0
     * @return boolean true if this gateway uses a form post, false if it
     *         redirects directly to the hosted pay page from checkout
     */
    public function use_form_post()
    {
    }
    /**
     * Returns true if this gateway uses an automatic form-post from the pay
     * page to "redirect" to the hosted payment page where payment information
     * is securely entered.  Return false if payment information is collected
     * on the pay page and then posted to a remote server.
     *
     * This method has no effect if use_form_post() returns false
     *
     * @since 2.2.0
     * @see SV_WC_Payment_Gateway_Hosted::use_form_post()
     * @return boolean true if this gateway automatically posts to the remote
     *         processor server from the pay page
     */
    public function use_auto_form_post()
    {
    }
}
/**
 * My Payment Methods Class
 *
 * Renders the My Payment Methods table on the My Account page and handles
 * any associated actions (deleting a payment method, etc)
 *
 * @since 4.0.0
 */
#[\AllowDynamicProperties]
class SV_WC_Payment_Gateway_My_Payment_Methods extends \SkyVerge\WooCommerce\PluginFramework\v6_0_1\Handlers\Script_Handler
{
    /** @var SV_WC_Payment_Gateway_Plugin */
    protected $plugin;
    /** @var SV_WC_Payment_Gateway_Payment_Token[] array of token objects */
    protected $tokens;
    /** @var SV_WC_Payment_Gateway_Payment_Token[] array of token objects */
    protected $credit_card_tokens;
    /** @var SV_WC_Payment_Gateway_Payment_Token[] array of token objects */
    protected $echeck_tokens;
    /** @var bool true if there are tokens */
    protected $has_tokens;
    /** @var string JS handler base class name, without the FW version */
    protected $js_handler_base_class_name = 'SV_WC_Payment_Methods_Handler';
    /**
     * Sets up the class.
     *
     * @param SV_WC_Payment_Gateway_Plugin $plugin gateway plugin
     *
     * @since 4.0.0
     */
    public function __construct($plugin)
    {
    }
    /**
     * Adds the action and filter hooks.
     *
     * @since 5.7.0
     */
    protected function add_hooks()
    {
    }
    /**
     * Gets the script ID.
     *
     * @since 5.7.0
     *
     * @return string
     */
    public function get_id()
    {
    }
    /**
     * Gets the script ID, dasherized.
     *
     * @since 5.7.0
     *
     * @return string
     */
    public function get_id_dasherized()
    {
    }
    /**
     * Initializes the My Payment Methods table
     *
     * @since 5.1.0
     */
    public function init()
    {
    }
    /**
     * Enqueues frontend CSS/JS.
     *
     * @since 4.0.0
     *
     * @return void
     */
    public function maybe_enqueue_styles_scripts()
    {
    }
    /**
     * Gets the available tokens for each plugin gateway and combine them.
     *
     * Tokens are also separated into Credit Card and eCheck-specific class members for convenience.
     *
     * @since 4.0.0
     */
    protected function load_tokens()
    {
    }
    /**
     * Clear the tokens transients after making a method the default,
     * so that the correct payment method shows as default.
     *
     * @internal
     *
     * @since 5.8.0
     *
     * @param int $token_id token ID
     * @param \WC_Payment_Token $token core token object
     */
    public function clear_payment_methods_transients($token_id, $token)
    {
    }
    /**
     * Adds the token ID to the token data array.
     *
     * @see wc_get_account_saved_payment_methods_list
     *
     * @internal
     *
     * @since 5.8.0
     *
     * @param array $item individual list item from woocommerce_saved_payment_methods_list
     * @param \WC_Payment_Token $token payment token associated with this method entry
     * @return array
     */
    public function add_payment_methods_list_item_id($item, $token)
    {
    }
    /**
     * Adds the Edit and Save buttons to the Actions column.
     *
     * @see wc_get_account_saved_payment_methods_list
     *
     * @internal
     *
     * @since 5.8.0
     *
     * @param array $item individual list item from woocommerce_saved_payment_methods_list
     * @param \WC_Payment_Token $core_token payment token associated with this method entry
     * @return array
     */
    public function add_payment_methods_list_item_edit_action($item, $core_token)
    {
    }
    /**
     * Adds columns to the payment methods table.
     *
     * @internal
     *
     * @since 5.8.0
     *
     * @param array of table columns in key => Title format
     * @return array of table columns in key => Title format
     */
    public function add_payment_methods_columns($columns = [])
    {
    }
    /**
     * Gets FW token object from payment method token ID.
     *
     * @since 5.8.0
     *
     * @param string $token_id token string
     * @return SV_WC_Payment_Gateway_Payment_Token|null
     */
    private function get_token_by_id($token_id)
    {
    }
    /**
     * Gets FW token object from payment method data array.
     *
     * @since 5.8.0
     *
     * @param array $method payment method data array
     * @return SV_WC_Payment_Gateway_Payment_Token|null
     */
    private function get_token_from_method_data_array($method)
    {
    }
    /**
     * Adds the Title column content.
     *
     * @internal
     *
     * @since 5.8.0
     *
     * @param array $method payment method
     */
    public function add_payment_method_title($method)
    {
    }
    /**
     * Adds the Details column content.
     *
     * @internal
     *
     * @since 5.8.0
     *
     * @param array $method payment method
     */
    public function add_payment_method_details($method)
    {
    }
    /**
     * Adds the Default column content.
     *
     * @internal
     *
     * @since 5.8.0
     *
     * @param array $method payment method
     */
    public function add_payment_method_default($method)
    {
    }
    /**
     * Triggers the wc_{id}_before_my_payment_method_table action.
     *
     * @internal
     *
     * @since 5.8.0
     *
     * @param bool $has_methods whether there any saved payment methods in the table
     */
    public function before_payment_methods_table($has_methods)
    {
    }
    /**
     * Triggers the wc_{id}_after_my_payment_method_table action.
     *
     * @internal
     *
     * @since 5.8.0
     *
     * @param bool $has_methods whether there any saved payment methods in the table
     */
    public function after_payment_methods_table($has_methods)
    {
    }
    /**
     * Triggers action wc_payment_gateway_{id}_payment_method_deleted when a framework token is deleted.
     *
     * @internal
     *
     * @since 5.8.0
     *
     * @param int $core_token_id the ID of a core token
     * @param \WC_Payment_Token $core_token the core token object
     */
    public function payment_token_deleted($core_token_id, $core_token)
    {
    }
    /**
     * Renders the payment methods table.
     *
     * TODO: remove this method by version 6.0.0 or by 2021-02-20 {WV 2020-02-20}
     *
     * @internal
     *
     * @since 4.0.0
     * @deprecated 5.8.0
     */
    public function render()
    {
    }
    /**
     * Gets the JS args for the payment methods handler.
     *
     * Payment gateways can overwrite this method to define specific args.
     * render_js() will apply filters to the returned array of args.
     *
     * @since 5.7.0
     *
     * @return array
     */
    protected function get_js_handler_args()
    {
    }
    /**
     * Gets the JS handler class name.
     *
     * Plugins can override this for their own JS implementations.
     *
     * @since 5.1.0
     * @deprecated 5.7.0
     *
     * @return string
     */
    protected function get_js_handler_class()
    {
    }
    /**
     * Adds a log entry.
     *
     * @since 5.7.0
     *
     * @param string $message message to log
     */
    protected function log_event($message)
    {
    }
    /**
     * Determines whether logging is enabled.
     *
     * Considers logging enabled at the plugin level if at least one gateway has logging enabled.
     *
     * @since 5.7.0
     *
     * @return bool
     */
    protected function is_logging_enabled()
    {
    }
    /**
     * Return the no payment methods section HTML
     *
     * @since 4.0.0
     * @return string no payment methods HTML
     */
    protected function get_no_payment_methods_html()
    {
    }
    /** Table HTML methods ****************************************************/
    /**
     * Return the table title HTML, text defaults to "My Payment Methods"
     *
     * TODO: remove this method by version 6.0.0 or by 2021-02-21 {WV 2020-02-21}
     *
     * @since 4.0.0
     * @deprecated 5.8.0
     *
     * @return string table title HTML
     */
    protected function get_table_title_html()
    {
    }
    /**
     * Returns the table HTML
     *
     * TODO: remove this method by version 6.0.0 or by 2021-02-21 {WV 2020-02-21}
     *
     * @since 4.0.0
     * @deprecated 5.8.0
     *
     * @return string table HTML
     */
    public function get_table_html()
    {
    }
    /**
     * Returns the table head HTML
     *
     * TODO: remove this method by version 6.0.0 or by 2021-02-21 {WV 2020-02-21}
     *
     * @since 4.0.0
     * @deprecated 5.8.0
     *
     * @return string table thead HTML
     */
    protected function get_table_head_html()
    {
    }
    /**
     * Returns the table headers.
     *
     * TODO: remove this method by version 6.0.0 or by 2021-02-17 {DM 2020-02-17}
     *
     * @since 4.0.0
     * @deprecated 5.8.0
     *
     * @return array of table headers in key => Title format
     */
    protected function get_table_headers()
    {
    }
    /**
     * Returns the table body HTML
     *
     * TODO: remove this method by version 6.0.0 or by 2021-02-21 {WV 2020-02-21}
     *
     * @since 4.0.0
     * @deprecated 5.8.0
     *
     * @return string table tbody HTML
     */
    protected function get_table_body_html()
    {
    }
    /**
     * Returns the table body row HTML, each row represents a single payment method.
     *
     * TODO: remove this method by version 6.0.0 or by 2021-02-21 {WV 2020-02-21}
     *
     * @since 4.0.0
     * @deprecated 5.8.0
     *
     * @param SV_WC_Payment_Gateway_Payment_Token[] $tokens token objects
     * @return string table tbody > tr HTML
     */
    protected function get_table_body_row_html($tokens)
    {
    }
    /**
     * Gets the payment method data for a given token.
     *
     * TODO: remove this method by version 6.0.0 or by 2021-02-24 {FN 2020-02-21}
     *
     * @since 4.0.0
     * @deprecated 5.8.0
     *
     * @param SV_WC_Payment_Gateway_Payment_Token $token the token object
     * @return array payment method data suitable for HTML output
     */
    protected function get_table_body_row_data($token)
    {
    }
    /**
     * Get a token's payment method title HTML.
     *
     * @since 5.1.0
     *
     * @param SV_WC_Payment_Gateway_Payment_Token $token token object
     * @return string
     */
    protected function get_payment_method_title_html(\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Payment_Token $token)
    {
    }
    /**
     * Get a token's payment method "default" flag HTML.
     *
     * @since 5.1.0
     *
     * @param boolean $is_default true if the token is the default token
     * @param SV_WC_Payment_Gateway_Payment_Token|null $token FW token object, only set if the token is a FW token
     * @return string
     */
    protected function get_payment_method_default_html($is_default = false, ?\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Payment_Token $token = null)
    {
    }
    /**
     * Gets a token's payment method details HTML.
     *
     * This includes the method type icon, last four digits, and "default"
     * badge if applicable. Example:
     *
     * [icon] * * * 1234 [default]
     *
     * @since 5.1.0
     *
     * @param SV_WC_Payment_Gateway_Payment_Token $token token object
     * @return array
     */
    protected function get_payment_method_details_html(\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Payment_Token $token)
    {
    }
    /**
     * Get a token's payment method expiration date HTML.
     *
     * TODO: remove this method by version 6.0.0 or by 2021-02-21 {WV 2020-02-21}
     *
     * @since 5.1.0
     * @deprecated 5.8.0
     *
     * @param SV_WC_Payment_Gateway_Payment_Token $token token object
     * @return string
     */
    protected function get_payment_method_expiry_html(\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Payment_Token $token)
    {
    }
    /**
     * Get a token's payment method actions HTML.
     *
     * TODO: remove this method by version 6.0.0 or by 2021-02-21 {WV 2020-02-21}
     *
     * @since 5.1.0
     * @deprecated 5.8.0
     *
     * @param SV_WC_Payment_Gateway_Payment_Token $token token object
     * @return string
     */
    protected function get_payment_method_actions_html(\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Payment_Token $token)
    {
    }
    /**
     * Gets the actions for the given payment method token.
     *
     * TODO: remove this method by version 6.0.0 or by 2021-02-21 {WV 2020-02-21}
     *
     * @since 4.0.0
     * @deprecated 5.8.0
     *
     * @param SV_WC_Payment_Gateway_Payment_Token $token token object
     * @return array
     */
    protected function get_payment_method_actions($token)
    {
    }
    /** Payment Method actions ************************************************/
    /**
     * Saves a payment method via AJAX.
     *
     * @internal
     *
     * @since 5.1.0
     */
    public function ajax_save_payment_method()
    {
    }
    /**
     * Saves data to a token.
     *
     * Gateways can override this to set their own data if they add custom Edit
     * fields. Note that this does not persist the data to the db, but only sets
     * it for the object.
     *
     * @since 5.1.0
     *
     * @param SV_WC_Payment_Gateway_Payment_Token $token token object
     * @param array $data {
     *    new data to store for the token
     *
     *    @type string $nickname method nickname
     *    @type string $default  whether the method should be set as default
     * }
     * @return SV_WC_Payment_Gateway_Payment_Token
     */
    protected function save_token_data(\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Payment_Token $token, array $data)
    {
    }
    /**
     * Handles custom payment methods actions.
     *
     * @internal
     *
     * @since 4.0.0
     */
    public function handle_payment_method_actions()
    {
    }
    /**
     * Renders the JavaScript.
     *
     * @since 5.1.0
     */
    public function render_js()
    {
    }
    /**
     * Redirect back to the Payment Methods (WC 2.6+) or My Account page
     *
     * @since 4.0.0
     */
    protected function redirect_to_my_account()
    {
    }
    /**
     * Return the gateway plugin, primarily a convenience method to other actors
     * using filters
     *
     * @since 4.0.0
     *
     * @return SV_WC_Payment_Gateway_Plugin
     */
    public function get_plugin()
    {
    }
    /**
     * Returns true if at least one of the plugin's gateways supports the
     * add new payment method feature
     *
     * @since 4.0.0
     * @return bool
     */
    protected function supports_add_payment_method()
    {
    }
    /**
     * Determines if we're viewing the My Account -> Payment Methods page.
     *
     * @since 5.1.0
     *
     * @return bool
     */
    protected function is_payment_methods_page()
    {
    }
}
/**
 * Payment Form Class
 *
 * Handles rendering the payment form for both credit card and eCheck gateways
 *
 * @since 4.0.0
 */
#[\AllowDynamicProperties]
class SV_WC_Payment_Gateway_Payment_Form extends \SkyVerge\WooCommerce\PluginFramework\v6_0_1\Handlers\Script_Handler
{
    /** @var \SV_WC_Payment_Gateway gateway for this payment form */
    protected $gateway;
    protected \SkyVerge\WooCommerce\PluginFramework\v6_0_1\PaymentFormContextChecker $paymentFormContextChecker;
    /** @var array of SV_WC_Payment_Gateway_Payment_Tokens, keyed by token ID */
    protected $tokens;
    /** @var bool default to show new payment method form */
    protected $default_new_payment_method = true;
    /** @var string JS handler base class name, without the FW version */
    protected $js_handler_base_class_name = 'SV_WC_Payment_Form_Handler';
    /** @var bool memoization to account whether the payment JS has been rendered for a gateway */
    protected $payment_form_js_rendered = [];
    /**
     * Sets up class.
     *
     * @since 4.0.0
     *
     * @param SV_WC_Payment_Gateway|SV_WC_Payment_Gateway_Direct $gateway gateway for form
     */
    public function __construct($gateway)
    {
    }
    /**
     * Adds hooks for rendering the payment form.
     *
     * @see SV_WC_Payment_Gateway_Payment_Form::render()
     *
     * @since 4.0.0
     */
    protected function add_hooks()
    {
    }
    /**
     * Gets the script ID.
     *
     * @since 5.7.0
     *
     * @return string
     */
    public function get_id()
    {
    }
    /**
     * Gets the script ID, dasherized.
     *
     * @since 5.7.0
     *
     * @return string
     */
    public function get_id_dasherized()
    {
    }
    /**
     * Returns the active tokens for the current user/gateway
     *
     * @since 4.0.0
     * @return array of SV_WC_Payment_Gateway_Payment_Tokens, keyed by token ID
     */
    protected function get_tokens()
    {
    }
    /**
     * Returns the gateway for this form.
     *
     * @since 4.0.0
     *
     * @return SV_WC_Payment_Gateway|SV_WC_Payment_Gateway_Direct
     */
    public function get_gateway()
    {
    }
    /**
     * Return true if the current user has active tokens to display
     *
     * @since 4.0.0
     * @return bool
     */
    public function has_tokens()
    {
    }
    /**
     * Returns true if tokenization is allowed for the payment form. This is true
     * if both the gateway supports tokenization and it is enabled.
     *
     * Note that tokenization is not allowed on the pay page for guest customers,
     * as there is no way to create an account there.
     *
     * @since 4.0.0
     * @return bool true if tokenization is allowed
     */
    public function tokenization_allowed()
    {
    }
    /**
     * Returns true if tokenization is forced for the payment form. This is generally
     * true when a subscription or pre-order is in the cart and the payment
     * method must be tokenized.
     *
     * Note that only direct gateways support forced tokenization
     *
     * @since 4.0.0
     * @return bool true if tokenization is forced
     */
    public function tokenization_forced()
    {
    }
    /**
     * Return true if the payment form should default to showing the new payment
     * method form
     *
     * @since 4.0.0
     * @return bool
     */
    public function default_new_payment_method()
    {
    }
    /**
     * Gets the payment form fields.
     *
     * @since 4.0.0
     *
     * @return array<string, mixed> payment fields in format suitable for {@see woocommerce_form_field()}
     */
    protected function get_payment_fields(): array
    {
    }
    /**
     * Get default credit card form fields, note this pulls default values
     * from the associated gateway
     *
     * for an explanation of autocomplete attribute values, see:
     * @link https://html.spec.whatwg.org/multipage/forms.html#autofill
     *
     * @since 4.0.0
     * @return array credit card form fields
     */
    protected function get_credit_card_fields()
    {
    }
    /**
     * Get default eCheck form fields, note this pulls default values
     * from the associated gateway
     *
     * @since 4.0.0
     * @return array eCheck form fields
     */
    protected function get_echeck_fields()
    {
    }
    /**
     * Get the payment form description HTML, generally set by the admin in
     * the gateway settings
     *
     * @since 4.0.0
     * @return string payment form description HTML
     */
    public function get_payment_form_description_html()
    {
    }
    /**
     * Get the sample check image HTML
     *
     * @since 4.0.0
     * @return string sample check image HTML
     */
    protected function get_sample_check_html()
    {
    }
    /**
     * Get the saved payment methods HTML, this section includes the
     * "Manage Payment Method" button, the radio inputs for selecting an existing saved
     * payment method, and the radio input for using a new saved payment method
     *
     * @since 4.0.0
     * @return string saved payment methods HTML
     */
    protected function get_saved_payment_methods_html()
    {
    }
    /**
     * Get the "Manage Payment Methods" button HTML
     *
     * @since 4.0.0
     * @return string manage payment methods button html
     */
    protected function get_manage_payment_methods_button_html()
    {
    }
    /**
     * Get the saved payment method HTML for an given token, renders an input + label like:
     *
     * o <Amex logo> American Express ending in 6666 (expires 10/20)
     *
     * @since 4.0.0
     * @param SV_WC_Payment_Gateway_Payment_Token $token payment token
     * @return string saved payment method HTML
     */
    protected function get_saved_payment_method_html($token)
    {
    }
    /**
     * Get the title for a saved payment method, like
     *
     * <Amex logo> American Express ending in 6666 (expires 10/20)
     *
     * @since 4.0.0
     * @param SV_WC_Payment_Gateway_Payment_Token $token payment token
     * @return string saved payment method title
     */
    protected function get_saved_payment_method_title($token)
    {
    }
    /**
     * Get the "Use new payment method" radio input HTML, like
     *
     * o Use new <card>|<bank account>
     *
     * @since 4.0.0
     * @return string saved payment method title
     */
    protected function get_use_new_payment_method_input_html()
    {
    }
    /**
     * Get saved payment method checkbox HTML, like:
     *
     * [] Securely Save to Account
     *
     * @since 4.0.0
     * @return string save payment method checkbox HTML
     */
    protected function get_save_payment_method_checkbox_html()
    {
    }
    /** Rendering methods *****************************************************/
    /**
     * Renders the payment form
     *
     * @since 4.0.0
     */
    public function render()
    {
    }
    /**
     * Render the payment form description
     *
     * @hooked wc_{gateway ID}_payment_form_start @ priority 15
     *
     * @since 4.0.0
     */
    public function render_payment_form_description()
    {
    }
    /**
     * Render the saved payment methods
     *
     * @hooked wc_{gateway ID}_payment_form_start @ priority 20
     *
     * @since 4.0.0
     */
    public function render_saved_payment_methods()
    {
    }
    /**
     * Render the sample check image if gateway is eCheck
     *
     * @hooked wc_{gateway ID}_payment_form_start @ priority 25
     *
     * @since 4.0.0
     */
    public function render_sample_check()
    {
    }
    /**
     * Render the payment form opening fieldset tag and div
     *
     * @hooked wc_{gateway ID}_payment_form_start @ priority 30
     *
     * @since 4.0.0
     */
    public function render_fieldset_start()
    {
    }
    /**
     * Render the payment fields (e.g. account number, expiry, etc)
     *
     * @hooked wc_{gateway ID}_payment_form_start @ priority 0
     *
     * @since 4.0.0
     */
    public function render_payment_fields()
    {
    }
    /**
     * Render the payment, a simple wrapper around woocommerce_form_field() to
     * make it more convenient for concrete gateways to override form output
     *
     * @since 4.1.2
     * @param array $field
     */
    protected function render_payment_field($field)
    {
    }
    /**
     * Render the payment form closing fieldset tag, clearing div, and "save
     * payment method" checkbox
     *
     * @hooked wc_{gateway ID}_payment_form_end @ priority 5
     *
     * @since 4.0.0
     */
    public function render_fieldset_end()
    {
    }
    /**
     * Maybe renders the payment gateway JS on checkout or pay pages.
     *
     * This is hooking directly into `wp_footer` in case the `wc_{$gateway_id}_payment_form_end` didn't trigger already.
     *
     * @since 5.10.8
     */
    public function maybe_render_js()
    {
    }
    /**
     * Determines if it should render the payment form JavaScript in the checkout page.
     *
     * @since 5.12.0
     *
     * @return bool
     */
    protected function should_render_js_on_checkout_page(): bool
    {
    }
    /**
     * Renders the payment form JS.
     *
     * This is normally hooked to `wc_{$gateway_id}_payment_form_end` with priority 5.
     * However, in the circumstance this doesn't trigger, {@see SV_WC_Payment_Gateway_Payment_Form::maybe_render_js()} hooked to footer.
     * This may happen when the customer reaches checkout with a $0 value order.
     *
     * @see SV_WC_Payment_Gateway_Payment_Form::get_safe_handler_js()
     *
     * @since 4.0.0
     */
    public function render_js()
    {
    }
    /**
     * Renders the payment form JS dependencies.
     *
     * @see SV_WC_Payment_Gateway_Payment_Form::render_js()
     *
     * @since 4.12.6
     */
    protected function renderScriptDependencies(): void
    {
    }
    /**
     * Gets the payment form JS list of dependencies handles.
     *
     * @see SV_WC_Payment_Gateway_Payment_Form::renderScriptDependencies()
     *
     * @since 4.12.6
     *
     * @return string[]
     */
    protected function getFormScriptDependencies(): array
    {
    }
    /**
     * Gets the handler instantiation JS.
     *
     * @since 5.7.0
     *
     * @param array $additional_args additional handler arguments, if any
     * @param string $handler_name handler name, if different from self::get_js_handler_class_name()
     * @param string $object_name object name, if different from self::get_js_handler_object_name()
     * @return string
     */
    protected function get_handler_js(array $additional_args = [], $handler_name = '', $object_name = '')
    {
    }
    /**
     * Gets the JS args for the payment form handler.
     *
     * Payment gateways can overwrite this method to define specific args.
     * render_js() will apply filters to the returned array of args.
     *
     * @since 5.7.0
     *
     * @return array
     */
    protected function get_js_handler_args()
    {
    }
    /**
     * Adds a log entry.
     *
     * @since 5.7.0
     *
     * @param string $message message to log
     */
    protected function log_event($message)
    {
    }
    /**
     * Determines whether logging is enabled.
     *
     * @since 5.7.0
     *
     * @return bool
     */
    protected function is_logging_enabled()
    {
    }
}
/**
 * # WooCommerce Payment Gateway Plugin Framework
 *
 * A payment gateway refinement of the WooCommerce Plugin Framework
 *
 * This framework class provides a base level of configurable and overrideable
 * functionality and features suitable for the implementation of a WooCommerce
 * payment gateway.  This class handles all the non-gateway support tasks such
 * as verifying dependencies are met, loading the text domain, etc.  It also
 * loads the payment gateway when needed now that the gateway is only created
 * on the checkout & settings pages / api hook.  The gateway can also be loaded
 * in the following instances:
 *
 * + On the My Account page to display / change saved payment methods (if supports tokenization)
 * + On the Admin User/Your Profile page to render/persist the customer ID field(s) (if supports customer_id)
 * + On the Admin Order Edit page to render a merchant account transaction direct link (if supports transaction_link)
 *
 * ## Supports (zero or more):
 *
 * + `customer_id`             - adds actions to show/persist the "Customer ID" area of the admin User edit page
 * + `transaction_link`        - adds actions to render the merchant account transaction direct link on the Admin Order Edit page.  (Don't forget to override the SV_WC_Payment_Gateway::get_transaction_url() method!)
 * + `capture_charge`          - adds actions to capture charge for authorization-only transactions
 * + `my_payment_methods`      - adds actions to show/handle a "My Payment Methods" area on the customer's My Account page. This will show saved payment methods for all plugin gateways that support tokenization.
 *
 * @version 2.0.0
 */
#[\AllowDynamicProperties]
abstract class SV_WC_Payment_Gateway_Plugin extends \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Plugin
{
    /** Customer ID feature */
    const FEATURE_CUSTOMER_ID = 'customer_id';
    /** Charge capture feature */
    const FEATURE_CAPTURE_CHARGE = 'capture_charge';
    /** My Payment Methods feature */
    const FEATURE_MY_PAYMENT_METHODS = 'my_payment_methods';
    /** @var array optional associative array of gateway id to array( 'gateway_class_name' => string, 'gateway' => SV_WC_Payment_Gateway ) */
    private $gateways;
    /** @var array optional array of currency codes this gateway is allowed for */
    private $currencies = array();
    /** @var array named features that this gateway supports which require action from the parent plugin, including 'tokenization' */
    private $supports = array();
    /** @var bool helper for lazy subscriptions active check */
    private $subscriptions_active;
    /** @var bool helper for lazy pre-orders active check */
    private $pre_orders_active;
    /** @var boolean true if this gateway requires SSL for processing transactions, false otherwise */
    private $require_ssl;
    /** @var SV_WC_Payment_Gateway_Privacy payment gateway privacy handler instance */
    protected $privacy_handler;
    /** @var SV_WC_Payment_Gateway_Admin_Order order handler instance */
    protected $admin_order_handler;
    /** @var SV_WC_Payment_Gateway_Admin_User_Handler user handler instance */
    protected $admin_user_handler;
    /** @var SV_WC_Payment_Gateway_My_Payment_Methods adds My Payment Method functionality */
    private $my_payment_methods;
    /** @var SV_WC_Payment_Gateway_Apple_Pay the Apple Pay handler instance */
    private $apple_pay;
    /** @var \SkyVerge\WooCommerce\PluginFramework\v6_0_1\Payment_Gateway\External_Checkout\Google_Pay\Google_Pay the Google Pay handler instance */
    private $google_pay;
    /**
     * Initializes the plugin.
     *
     * Optional args:
     *
     * + `require_ssl` - boolean true if this plugin requires SSL for proper functioning, false otherwise. Defaults to false
     * + `gateways` - array associative array of gateway id to gateway class name.  A single plugin might support more than one gateway, ie credit card, echeck.  Note that the credit card gateway must always be the first one listed.
     * + `currencies` -  array of currency codes this gateway is allowed for, defaults to all
     * + `supports` - array named features that this gateway supports, including 'tokenization', 'transaction_link', 'customer_id', 'capture_charge'
     *
     * @since 1.0.0
     *
     * @see SV_WC_Plugin::__construct()
     * @param string $id plugin id
     * @param string $version plugin version number
     * @param array $args plugin arguments
     */
    public function __construct($id, $version, $args)
    {
    }
    /**
     * Builds the REST API handler instance.
     *
     * Gateway plugins can override this to add their own data and/or routes.
     *
     * @see SV_WC_Plugin::init_rest_api_handler()
     *
     * @since 5.2.0
     */
    protected function init_rest_api_handler()
    {
    }
    /**
     * Builds the gateway blocks handler instance.
     *
     * @since 5.12.0
     *
     * @return void
     */
    protected function init_blocks_handler(): void
    {
    }
    /**
     * Adds the action & filter hooks.
     *
     * @since 5.2.0
     */
    private function add_hooks()
    {
    }
    /**
     * Initializes the plugin admin.
     *
     * @see SV_WC_Plugin::init_admin()
     *
     * @since 5.2.0
     */
    public function init_admin()
    {
    }
    /**
     * Adds any gateways supported by this plugin to the list of available payment gateways.
     *
     * @internal
     *
     * @since 1.0.0
     *
     * @param array $gateways
     * @return array $gateways
     */
    public function load_gateways($gateways)
    {
    }
    /**
     * Adjust the available gateways in certain cases.
     *
     * @since 4.4.0
     *
     * @param array $available_gateways the available payment gateways
     * @return array
     */
    public function adjust_available_gateways($available_gateways)
    {
    }
    /**
     * Include required files.
     *
     * @internal
     *
     * @since 1.0.0
     */
    private function includes()
    {
    }
    /** My Payment Methods methods ***********************************/
    /**
     * Instantiates the My Payment Methods table class instance when a user is
     * logged in on an account page and tokenization is enabled for at least
     * one of the active gateways.
     *
     * @internal
     *
     * @since 4.0.0
     */
    public function maybe_init_my_payment_methods()
    {
    }
    /**
     * Returns true if tokenization is supported and enabled for at least one
     * active gateway
     *
     * @since 4.2.0
     *
     * @return bool
     */
    public function tokenization_enabled()
    {
    }
    /**
     * Gets the My Payment Methods table instance.
     *
     * Overrideable by concrete gateway plugins to return a custom instance as needed
     *
     * @since 4.0.0
     *
     * @return SV_WC_Payment_Gateway_My_Payment_Methods
     */
    protected function get_my_payment_methods_instance()
    {
    }
    /**
     * Determines whether the My Payment Methods feature is supported.
     *
     * @since 5.1.0
     *
     * @return bool
     */
    public function supports_my_payment_methods()
    {
    }
    /** Apple Pay *************************************************************/
    /**
     * Initializes Apple Pay if it's supported.
     *
     * @since 4.7.0
     */
    public function maybe_init_apple_pay()
    {
    }
    /**
     * Determines whether Apple Pay is activated.
     *
     * @since 5.5.1
     */
    private function is_apple_pay_activated()
    {
    }
    /**
     * Builds the Apple Pay handler instance.
     *
     * Gateways can override this to define their own Apple Pay class.
     *
     * @since 4.7.0
     *
     * @return SV_WC_Payment_Gateway_Apple_Pay
     */
    protected function build_apple_pay_instance()
    {
    }
    /**
     * Gets the Apple Pay handler instance.
     *
     * @since 4.7.0
     *
     * @return SV_WC_Payment_Gateway_Apple_Pay
     */
    public function get_apple_pay_instance()
    {
    }
    /**
     * Determines if this plugin has any gateways with Apple Pay support.
     *
     * @since 4.7.0
     *
     * @return bool
     */
    public function supports_apple_pay()
    {
    }
    /** Google Pay *************************************************************/
    /**
     * Initializes Google Pay if it's supported.
     *
     * @since 5.10.0
     */
    public function maybe_init_google_pay()
    {
    }
    /**
     * Builds the Google Pay handler instance.
     *
     * Gateways can override this to define their own Google Pay class.
     *
     * @since 5.10.0
     *
     * @return \SkyVerge\WooCommerce\PluginFramework\v6_0_1\Payment_Gateway\External_Checkout\Google_Pay\Google_Pay
     */
    protected function build_google_pay_instance()
    {
    }
    /**
     * Gets the Google Pay handler instance.
     *
     * @since 5.10.0
     *
     * @return \SkyVerge\WooCommerce\PluginFramework\v6_0_1\Payment_Gateway\External_Checkout\Google_Pay\Google_Pay
     */
    public function get_google_pay_instance()
    {
    }
    /**
     * Determines if this plugin has any gateways with Google Pay support.
     *
     * @since 5.10.0
     *
     * @return bool
     */
    public function supports_google_pay()
    {
    }
    /** Admin methods ******************************************************/
    /**
     * Adds the gateway plugin action links.
     *
     * @see SV_WC_Plugin::plugin_action_links()
     *
     * @since 1.0.0
     *
     * @param string[] $actions associative array of action names to anchor tags
     * @return string[]
     */
    public function plugin_action_links($actions)
    {
    }
    /**
     * Determines if on the admin gateway settings screen for this plugin.
     *
     * Multi-gateway plugins will return true if on either settings page
     *
     * @since 2.0.0
     *
     * @see SV_WC_Plugin::is_plugin_settings()
     * @return bool
     */
    public function is_plugin_settings()
    {
    }
    /**
     * Convenience method to add delayed admin notices, which may depend upon
     * some setting being saved prior to determining whether to render.
     *
     * @since 3.0.0
     *
     * @see SV_WC_Plugin::add_delayed_admin_notices()
     */
    public function add_delayed_admin_notices()
    {
    }
    /**
     * Adds any SSL admin notices.
     *
     * Checks if SSL is required and not available and adds a dismissible admin
     * notice if so.
     *
     * @since 3.0.0
     *
     * @see SV_WC_Payment_Gateway_Plugin::add_admin_notices()
     */
    protected function add_ssl_admin_notices()
    {
    }
    /**
     * Adds any currency admin notices.
     *
     * Checks if a particular currency is required and not being used and adds a
     * dismissible admin notice if so.
     *
     * @since 3.0.0
     *
     * @see SV_WC_Payment_Gateway_Plugin::render_admin_notices()
     */
    protected function add_currency_admin_notices()
    {
    }
    /**
     * Adds notices about enabled debug logging.
     *
     * @since 5.3.0
     */
    protected function add_debug_setting_notices()
    {
    }
    /**
     * Adds notices about gateways not being configured.
     *
     * @since 5.4.2
     */
    protected function add_gateway_not_configured_notices()
    {
    }
    /**
     * Adds notices about Apple Pay not supported in the current WooCommerce version.
     *
     * @since 5.5.1
     */
    protected function add_apple_pay_not_supported_notices()
    {
    }
    /**
     * Adds notices about Google Pay not supported in the current WooCommerce version.
     *
     * @since 5.10.0
     */
    protected function add_google_pay_not_supported_notices()
    {
    }
    /** Integration methods ***************************************************/
    /**
     * Checks if a supported integration is activated (Subscriptions or Pre-Orders)
     * and adds a notice if a gateway supports the integration *and* tokenization,
     * but tokenization is not enabled
     *
     * @since 4.0.0
     */
    protected function add_integration_requires_tokenization_notices()
    {
    }
    /**
     * Edit the Subscriptions automatic renewal payments support column content
     * when a gateway supports subscriptions (via tokenization) but tokenization
     * is not enabled
     *
     * @since 4.1.0
     *
     * @param string $html column content
     * @param \WC_Payment_Gateway|SV_WC_Payment_Gateway $gateway payment gateway being checked for support
     * @return string html
     */
    public function subscriptions_maybe_edit_renewal_support_status($html, $gateway)
    {
    }
    /**
     * Add some inline CSS to render the failed order status icon for the
     * automatic renewal payment support status column
     *
     * @since 4.1.0
     */
    public function subscriptions_add_renewal_support_status_inline_style()
    {
    }
    /**
     * Add gateway information to the system status report.
     *
     * @since 4.3.0
     */
    public function add_system_status_information()
    {
    }
    /** Helper methods ******************************************************/
    /**
     * Determines if the plugin supports the capture charge feature.
     *
     * @since 5.0.0
     *
     * @return bool
     */
    public function supports_capture_charge()
    {
    }
    /**
     * Returns true if the gateway supports the named feature
     *
     * @since 1.0.0
     * @param string $feature the feature
     * @return boolean true if the named feature is supported
     */
    public function supports($feature)
    {
    }
    /** Getter methods ******************************************************/
    /**
     * Gets the privacy handler instance.
     *
     * @since 5.1.4
     *
     * @return SV_WC_Payment_Gateway_Privacy
     */
    public function get_privacy_instance()
    {
    }
    /**
     * Get the admin order handler instance.
     *
     * @since 5.0.0
     *
     * @return SV_WC_Payment_Gateway_Admin_Order
     */
    public function get_admin_order_handler()
    {
    }
    /**
     * Get the admin user handler instance.
     *
     * @since 4.3.0
     *
     * @return SV_WC_Payment_Gateway_Admin_User_Handler
     */
    public function get_admin_user_handler()
    {
    }
    /**
     * Returns the gateway settings option name for the identified gateway.
     * Defaults to woocommerce_{gateway id}_settings
     *
     * @since 1.0.0
     *
     * @param string $gateway_id
     * @return string the gateway settings option name
     */
    protected function get_gateway_settings_name($gateway_id)
    {
    }
    /**
     * Returns the settings array for the identified gateway.  Note that this
     * will not include any defaults if the gateway has yet to be saved
     *
     * @since 1.0.0
     *
     * @param string $gateway_id gateway identifier
     * @return array settings array
     */
    public function get_gateway_settings($gateway_id)
    {
    }
    /**
     * Returns true if this plugin requires SSL to function properly
     *
     * @since 1.0.0
     *
     * @return boolean true if this plugin requires ssl
     */
    protected function requires_ssl()
    {
    }
    /**
     * Gets the plugin configuration URL
     *
     * @since 1.0.0
     *
     * @see SV_WC_Plugin::get_settings_url()
     * @param string $gateway_id the gateway identifier
     * @return string gateway settings URL
     */
    public function get_settings_url($gateway_id = null)
    {
    }
    /**
     * Returns the admin configuration url for a gateway
     *
     * @since 3.0.0
     *
     * @param string $gateway_id the gateway ID
     * @return string admin configuration url for the gateway
     */
    public function get_payment_gateway_configuration_url($gateway_id)
    {
    }
    /**
     * Returns true if the current page is the admin configuration page for a gateway
     *
     * @since 3.0.0
     *
     * @param string $gateway_id the gateway ID
     * @return boolean true if the current page is the admin configuration page for the gateway
     */
    public function is_payment_gateway_configuration_page($gateway_id)
    {
    }
    /**
     * Adds the given gateway id and gateway class name as an available gateway
     * supported by this plugin
     *
     * @since 1.0.0
     *
     * @param string $gateway_id the gateway identifier
     * @param string $gateway_class_name the corresponding gateway class name
     */
    public function add_gateway($gateway_id, $gateway_class_name)
    {
    }
    /**
     * Gets all supported gateway class names; typically this will be just one,
     * unless the plugin supports credit card and echeck variations
     *
     * @since 1.0.0
     *
     * @return array of string gateway class names
     */
    public function get_gateway_class_names()
    {
    }
    /**
     * Gets the gateway class name for the given gateway id
     *
     * @since 1.0.0
     *
     * @param string $gateway_id the gateway identifier
     * @return string gateway class name
     */
    public function get_gateway_class_name($gateway_id)
    {
    }
    /**
     * Gets all supported gateway objects; typically this will be just one,
     * unless the plugin supports credit card and echeck variations
     *
     * @since 1.0.0
     *
     * @return SV_WC_Payment_Gateway[]
     */
    public function get_gateways()
    {
    }
    /**
     * Adds the given $gateway to the internal gateways store
     *
     * @since 2.2.0
     *
     * @param string $gateway_id the gateway identifier
     * @param SV_WC_Payment_Gateway $gateway the gateway object
     */
    public function set_gateway($gateway_id, $gateway)
    {
    }
    /**
     * Returns the identified gateway object
     *
     * @since 1.0.0
     *
     * @param string $gateway_id optional gateway identifier, defaults to first gateway, which will be the credit card gateway in plugins with support for both credit cards and echecks
     * @return SV_WC_Payment_Gateway the gateway object
     */
    public function get_gateway($gateway_id = null)
    {
    }
    /**
     * Returns true if the plugin supports this gateway
     *
     * @since 1.0.0
     *
     * @param string $gateway_id the gateway identifier
     * @return boolean true if the plugin has this gateway available, false otherwise
     */
    public function has_gateway($gateway_id)
    {
    }
    /**
     * Returns all available gateway ids for the plugin
     *
     * @since 1.0.0
     *
     * @return array of gateway id strings
     */
    public function get_gateway_ids()
    {
    }
    /**
     * Returns the gateway for a given token
     *
     * @since 4.0.0
     *
     * @param string|int $user_id the user ID associated with the token
     * @param string $token the token string
     * @return SV_WC_Payment_Gateway|null gateway if found, null otherwise
     */
    public function get_gateway_from_token($user_id, $token)
    {
    }
    /**
     * No-op the plugin class implementation so the payment gateway class can
     * implement its own request logging. This is primarily done to keep the log
     * files separated by gateway ID
     *
     * @see SV_WC_Plugin::add_api_request_logging()
     *
     * @since 2.2.0
     */
    public function add_api_request_logging()
    {
    }
    /**
     * Returns the set of accepted currencies, or empty array if all currencies
     * are accepted.  This is the intersection of all currencies accepted by
     * any gateways this plugin supports.
     *
     * @since 1.0.0
     *
     * @return array of accepted currencies
     */
    public function get_accepted_currencies()
    {
    }
    /**
     * Checks is WooCommerce Subscriptions is active as a plugin or as a core library
     *
     * @since 1.0.0
     *
     * @return bool true if the WooCommerce Subscriptions plugin is active, false if not active
     */
    public function is_subscriptions_active(): bool
    {
    }
    /**
     * Checks is WooCommerce Pre-Orders is active
     *
     * @since 1.0.0
     *
     * @return bool true if WC Pre-Orders is active, false if not active
     */
    public function is_pre_orders_active()
    {
    }
    /**
     * Gets the plugin version to be used by any internal scripts.
     *
     * This normally corresponds to the plugin version, but can be overridden when debug mode is used.
     * In that case `time()` will be used to force cache bursting.
     *
     * @since 5.12.0
     *
     * @param string|null $gateway_id
     * @return string
     */
    public function get_assets_version(?string $gateway_id = null): string
    {
    }
    /**
     * Returns the loaded payment gateway framework __FILE__
     *
     * @since 4.0.0
     *
     * @return string
     */
    public function get_payment_gateway_framework_file()
    {
    }
    /**
     * Returns the loaded payment gateway framework path, without trailing slash.
     *
     * This is the highest version payment gateway framework that was loaded by
     * the bootstrap.
     *
     * @since 4.0.0
     *
     * @return string
     */
    public function get_payment_gateway_framework_path()
    {
    }
    /**
     * Returns the absolute path to the loaded payment gateway framework image
     * directory, without a trailing slash
     *
     * @since 4.0.0
     *
     * @return string relative path to framework image directory
     */
    public function get_payment_gateway_framework_assets_path()
    {
    }
    /**
     * Returns the loaded payment gateway framework assets URL, without a trailing slash
     *
     * @since 4.0.0
     *
     * @return string
     */
    public function get_payment_gateway_framework_assets_url()
    {
    }
}
/**
 * The payment gateway privacy handler class.
 *
 * @since 5.1.4
 */
#[\AllowDynamicProperties]
class SV_WC_Payment_Gateway_Privacy extends \WC_Abstract_Privacy
{
    /** @var SV_WC_Payment_Gateway_Plugin payment gateway plugin instance */
    private $plugin;
    /**
     * Constructs the class.
     *
     * @since 5.1.4
     *
     * @param SV_WC_Payment_Gateway_Plugin payment gateway plugin instance
     */
    public function __construct(\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Plugin $plugin)
    {
    }
    /**
     * Adds the action & filter hooks.
     *
     * @since 5.1.4
     */
    protected function add_hooks()
    {
    }
    /**
     * Initial registration of privacy erasers and exporters.
     *
     *  Due to the use of translation functions, this should run only on/after init.
     */
    public function registerExportersAndErasers()
    {
    }
    /** Customer methods ******************************************************/
    /**
     * Adds the gateway data to customer data exports.
     *
     * @internal
     *
     * @since 5.1.4
     *
     * @param array $data customer personal data to export
     * @param \WC_Customer $customer customer object
     * @return array
     */
    public function add_export_customer_data($data, $customer)
    {
    }
    /**
     * Removes the gateway data during an order data erasure.
     *
     * @since 5.1.4
     *
     * @param array $response customer data erasure response
     * @param \WC_Customer $customer customer object
     * @return array
     */
    public function remove_customer_personal_data($response, $customer)
    {
    }
    /**
     * Handles the customer token exporter.
     *
     * @internal
     *
     * @param string $email_address email address for the user to export
     * @param int $page page offset - unused as we don't page tokens
     * @return array token export data
     */
    public function customer_tokens_exporter($email_address, $page)
    {
    }
    /**
     * Handles the customer token eraser.
     *
     * @internal
     *
     * @param string $email_address email address for the user to erase
     * @param int $page page offset - unused as we don't page tokens
     * @return array token eraser data
     */
    public function customer_tokens_eraser($email_address, $page)
    {
    }
    /** Order methods *********************************************************/
    /**
     * Adds the gateway data to order data exports.
     *
     * @internal
     *
     * @since 5.1.4
     *
     * @param array $data order personal data to export
     * @param \WC_Order $order order object
     * @return array
     */
    public function add_export_order_data($data, $order)
    {
    }
    /**
     * Removes the gateway data during an order data erasure.
     *
     * @since 5.1.4
     *
     * @param \WC_Order $order order object
     */
    public function remove_order_personal_data($order)
    {
    }
    /**
     * Gets the payment gateway plugin instance.
     *
     * @since 5.1.4
     *
     * @return SV_WC_Payment_Gateway_Plugin
     */
    protected function get_plugin()
    {
    }
}
/**
 * Payment Gateway Exception - generic payment failure Exception
 */
#[\AllowDynamicProperties]
class SV_WC_Payment_Gateway_Exception extends \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Plugin_Exception
{
}
/**
 * Abstract Integration
 *
 * @since 4.1.0
 */
#[\AllowDynamicProperties]
abstract class SV_WC_Payment_Gateway_Integration
{
    /** @var SV_WC_Payment_Gateway direct gateway instance */
    protected $gateway;
    /**
     * Bootstraps the class.
     *
     * @since 4.1.0
     *
     * @param SV_WC_Payment_Gateway $gateway direct gateway instance
     */
    public function __construct(\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway $gateway)
    {
    }
    /**
     * Return the gateway for the integration
     *
     * @since 4.1.0
     * @return SV_WC_Payment_Gateway
     */
    public function get_gateway()
    {
    }
}
/**
 * Pre-Orders Integration
 *
 * @since 4.1.0
 */
#[\AllowDynamicProperties]
class SV_WC_Payment_Gateway_Integration_Pre_Orders extends \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Integration
{
    /**
     * Bootstrap class
     *
     * @since 4.1.0
     *
     * @param SV_WC_Payment_Gateway|SV_WC_Payment_Gateway_Direct $gateway gateway object
     */
    public function __construct(\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway $gateway)
    {
    }
    /**
     * Adds support for pre-orders by hooking in some necessary actions
     *
     * @since 4.1.0
     */
    public function add_support()
    {
    }
    /**
     * Forces tokenization for pre-orders.
     *
     * @see SV_WC_Payment_Gateway::tokenization_forced()
     *
     * @since 4.1.0
     *
     * @param bool $force_tokenization whether tokenization should be forced
     * @return bool
     */
    public function maybe_force_tokenization($force_tokenization)
    {
    }
    /**
     * Adds pre-orders data to the order object.
     *
     * Filtered onto SV_WC_Payment_Gateway::get_order()
     *
     * @see SV_WC_Payment_Gateway::get_order()
     *
     * @since 4.1.0
     *
     * @param \WC_Order $order the order
     * @return \WC_Order
     */
    public function get_order($order)
    {
    }
    /**
     * Handle the pre-order initial payment/tokenization, or defer back to the normal payment
     * processing flow
     *
     * @since 4.1.0
     * @see SV_WC_Payment_Gateway::process_payment()
     * @param boolean $result the result of this pre-order payment process
     * @param int $order_id the order identifier
     * @return true|array true to process this payment as a regular transaction, otherwise
     *         return an array containing keys 'result' and 'redirect'
     */
    public function process_payment($result, $order_id)
    {
    }
    /**
     * Completes a pre-order payment by marking the order as Pre-Ordered.
     *
     * @internal
     *
     * @since 5.0.0
     *
     * @param \WC_Order $order order object
     */
    public function complete_payment($order)
    {
    }
    /**
     * Processes a pre-order payment when the pre-order is released.
     *
     * @since 4.1.0
     *
     * @param \WC_Order $order original order containing the pre-order
     * @throws SV_WC_Payment_Gateway_Exception
     */
    public function process_release_payment($order)
    {
    }
}
/**
 * Subscriptions Integration
 *
 * @since 4.1.0
 */
#[\AllowDynamicProperties]
class SV_WC_Payment_Gateway_Integration_Subscriptions extends \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Integration
{
    /** @var string|float renewal payment total for Subs 2.0.x renewals */
    protected $renewal_payment_total;
    /**
     * Bootstraps the class.
     *
     * @since 4.1.0
     *
     * @param SV_WC_Payment_Gateway|SV_WC_Payment_Gateway_Direct $gateway
     */
    public function __construct(\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway $gateway)
    {
    }
    /**
     * Adds support for subscriptions by hooking in some necessary actions
     *
     * @since 4.1.0
     */
    public function add_support()
    {
    }
    /**
     * Disables Subscription's default payment token change notice if wc_add_notice() is not defined
     *
     * This prevents an uncaught error from being triggered when tokens are retrieved and saved in the user profile page.
     *
     * @internal
     *
     * @see \WCS_My_Account_Payment_Methods::display_default_payment_token_change_notice()
     *
     * @since 5.8.0
     */
    public function disable_default_payment_token_change_notice()
    {
    }
    /**
     * Force tokenization for subscriptions, this can be forced either during checkout
     * or when the payment method for a subscription is being changed
     *
     * @since 4.1.0
     * @see SV_WC_Payment_Gateway::tokenization_forced()
     * @param bool $force_tokenization whether tokenization should be forced
     * @return bool true if tokenization should be forced, false otherwise
     */
    public function maybe_force_tokenization($force_tokenization)
    {
    }
    /**
     * Save payment meta to the Subscription object after a successful transaction,
     * this is primarily used for the payment token and customer ID which are then
     * copied over to a renewal order prior to payment processing.
     *
     * @since 4.1.0
     *
     * @param \WC_Order $order order
     */
    public function save_payment_meta($order)
    {
    }
    /**
     * Adds subscription details to order base data.
     *
     * Details are added to a \WC_Order::$payment->subscriptions[] property.
     * @see SV_WC_Payment_Gateway_Integration_Subscriptions::add_subscription_details_to_order()
     * @internal
     *
     * @since 5.4.2
     *
     * @param \WC_Order $order order object
     * @param SV_WC_Payment_Gateway $gateway payment gateway
     * @return \WC_Order
     */
    public function add_subscriptions_details_to_order($order, $gateway)
    {
    }
    /**
     * Builds and returns a subscription's details data.
     *
     * @see SV_WC_Payment_Gateway_Integration_Subscriptions::add_subscriptions_details_to_order()
     *
     * \stdClass {
     *  int $id the subscription's ID
     *  bool $is_renewal whether the order is for a subscription renewal
     *  bool $is_installment whether the subscription is for an installment
     *  bool $is_first whether it is the first payment for an installment series
     *  bool $is_last whether it is the last payment for an installment series
     *}
     *
     * @since 5.4.2
     *
     * @param \WC_Subscription $subscription subscription object
     * @param bool $renewal whether the subscription is a renewal
     * @return \stdClass subscription details data
     */
    protected function add_subscription_details_to_order($subscription, $renewal)
    {
    }
    /**
     * Process a subscription renewal payment
     *
     * @since 4.1.0
     * @param float $amount_to_charge subscription amount to charge, could include multiple renewals if they've previously failed and the admin has enabled it
     * @param \WC_Order $order original order containing the subscription
     */
    public function process_renewal_payment($amount_to_charge, $order)
    {
    }
    /**
     * Adds subscriptions data to the order object, currently:
     *
     * + renewal order specific description
     * + renewal payment total
     * + token and associated data (last four, type, etc)
     *
     * @since 4.1.0
     * @see SV_WC_Payment_Gateway_Direct::get_order()
     * @param \WC_Order $order renewal order
     * @return \WC_Order renewal order with payment token data set
     */
    public function get_order($order)
    {
    }
    /**
     * Don't copy order-specific meta to renewal orders from the {@see WC_Subscription} object.
     *
     * Generally the subscription object should not have any order-specific meta (aside from `payment_token` and `customer_id`)
     * as they are not copied during the upgrade (see do_not_copy_order_meta_during_upgrade()),
     * so this method is more of a fallback in case meta accidentally is copied.
     *
     * @since 4.1.0
     *
     * @param array<mixed>|scalar $order_meta order meta to copy
     * @return array<mixed>|scalar
     */
    public function do_not_copy_order_meta($order_meta)
    {
    }
    /**
     * Don't copy order-specific meta to the new WC_Subscription object during
     * upgrade to 2.0.x. This only allows the `payment_token` and `customer_id`
     * meta to be copied.
     *
     * @since 4.1.0
     * @param array $order_meta order meta to copy
     * @return array
     */
    public function do_not_copy_order_meta_during_upgrade($order_meta)
    {
    }
    /**
     * Processes a Change Payment transaction.
     *
     * This hooks in before standard payment processing to simply add or create
     * token data and avoid certain failure conditions affecting the subscription
     * object.
     *
     * @internal
     *
     * @since 4.6.4
     *
     * @param bool|array $result result from any others filtering this
     * @param int $order_id an order or subscription ID
     * @param SV_WC_Payment_Gateway_Direct $gateway gateway object
     * @return array $result change payment result
     */
    public function process_change_payment($result, $order_id, $gateway)
    {
    }
    /**
     * Remove order meta (like trans ID) that's added to a Subscription object
     * during the change payment method flow, which uses WC_Payment_Gateway::process_payment(),
     * thus some order-specific meta is added that is undesirable to have copied
     * over to renewal orders.
     *
     * @since 4.1.0
     *
     * @param array $result process_payment() result, unused
     * @param int|\WC_Subscription $subscription subscription object
     * @return array
     */
    public function remove_order_meta_from_change_payment($result, $subscription)
    {
    }
    /**
     * Update the payment token and optional customer ID for a subscription after a customer
     * uses this gateway to successfully complete the payment for an automatic
     * renewal payment which had previously failed.
     *
     * @since 4.1.0
     * @param \WC_Subscription $subscription subscription being updated
     * @param \WC_Order $renewal_order order which recorded the successful payment (to make up for the failed automatic payment).
     */
    public function update_failing_payment_method($subscription, $renewal_order)
    {
    }
    /**
     * Get the order-specific meta keys that should not be copied to the WC_Subscription
     * object during upgrade to 2.0.x or during change payment method actions
     *
     * @since 4.1.0
     * @return array
     */
    protected function get_order_specific_meta_keys()
    {
    }
    /**
     * Render the payment method used for a subscription in the "My Subscriptions" table
     *
     * @since 4.1.0
     * @param string $payment_method_to_display the default payment method text to display
     * @param \WC_Subscription $subscription
     * @return string the subscription payment method
     */
    public function maybe_render_payment_method($payment_method_to_display, $subscription)
    {
    }
    /**
     * Add a subscriptions header to the My Payment Methods table.
     *
     * @since 4.3.0
     * @param array $headers the table headers
     * @param \SV_WC_Payment_Gateway_My_Payment_Methods the my payment methods instance
     * @return array
     */
    public function add_my_payment_methods_table_header($headers, $handler)
    {
    }
    /**
     * Displays a list of subscriptions orders associated with the current token.
     *
     * This method only generates output for tokens created by the framework.
     *
     * TODO: Ask Subscriptions developers whether they would be interested in start adding the column to the payment methods table themselves {WV 2020-02-19}
     *
     * @internal
     *
     * @since 5.8.0
     *
     * @param array $method payment method
     */
    public function add_payment_method_subscriptions($method)
    {
    }
    /**
     * Gets the HTML code for the list of subscriptions orders associated with the given token.
     *
     * @since 5.8.0
     *
     * @param SV_WC_Payment_Gateway_Payment_Token $token the payment token
     * @return string
     */
    private function get_payment_method_subscriptions_html($token)
    {
    }
    /**
     * Add a subscriptions header to the My Payment Methods table.
     *
     * TODO: remove this method by version 6.0.0 or by 2021-02-20 {WV 2020-02-20}
     *
     * @internal
     *
     * @since 4.3.0
     * @deprecated 5.8.0
     *
     * @param array $method the table row data
     * @param \SV_WC_Payment_Gateway_Payment_Token $token the payment token
     * @param \SV_WC_Payment_Gateway_My_Payment_Methods the my payment methods instance
     * @return array
     */
    public function add_my_payment_methods_table_body_row_data($method, $token, $handler)
    {
    }
    /**
     * Disables the "Delete" My Payment Methods method action button if there is an associated subscription.
     *
     * TODO: remove this method by version 6.0.0 or by 2021-02-20 {WV 2020-02-20}
     *
     * @internal
     *
     * @since 4.3.0
     * @deprecated 5.8.0
     *
     * @param array $actions the token actions
     * @param SV_WC_Payment_Gateway_Payment_Token the token object
     * @param SV_WC_Payment_Gateway_My_Payment_Methods the my payment methods instance
     * @return array
     */
    public function disable_my_payment_methods_table_method_delete($actions, $token, $handler)
    {
    }
    /**
     * Gets the subscriptions tied to a user payment token.
     *
     * @since 4.3.0
     *
     * @param int $user_id the user
     * @param SV_WC_Payment_Gateway_Payment_Token $token the token object
     * @return array the subscriptions or an empty array
     */
    protected function get_payment_token_subscriptions($user_id, $token)
    {
    }
    /**
     * Include the payment meta data required to process automatic recurring
     * payments so that store managers can manually set up automatic recurring
     * payments for a customer via the Edit Subscriptions screen in 2.0.x
     *
     * @since 4.1.0
     * @param array $meta associative array of meta data required for automatic payments
     * @param \WC_Subscription $subscription subscription object
     * @return array
     */
    public function admin_add_payment_meta($meta, $subscription)
    {
    }
    /**
     * Validate the payment meta data required to process automatic recurring
     * payments so that store managers can manually set up automatic recurring
     * payments for a customer via the Edit Subscriptions screen in 2.0.x
     *
     * @since 4.1.0
     *
     * @param array $meta associative array of meta data required for automatic payments
     * @throws \Exception if payment token or customer ID is missing or blank
     */
    public function admin_validate_payment_meta($meta)
    {
    }
}
/**
 * WooCommerce Payment Gateway Token
 *
 * Represents a credit card or check payment token
 */
#[\AllowDynamicProperties]
class SV_WC_Payment_Gateway_Payment_Token
{
    /** @var string payment gateway token ID */
    protected $id;
    /**
     * @var array associated token data
     */
    protected $data;
    /**
     * @var string payment type image url
     */
    protected $img_url;
    /**
     * @var array key-value array to map WooCommerce core token props to framework token `$data` keys
     */
    protected $props = ['gateway_id' => 'gateway_id', 'user_id' => 'user_id', 'is_default' => 'default', 'last4' => 'last_four', 'expiry_year' => 'exp_year', 'expiry_month' => 'exp_month', 'card_type' => 'card_type'];
    /**
     * @var null|\WC_Payment_Token WooCommerce core token corresponding to the framework token, if set
     */
    protected $token;
    /**
     * Initializes a payment token.
     *
     * The token $data is expected to have the following members:
     *
     * gateway_id   - string identifier of the gateway the token belongs to (in WooCommerce core tokens this also identifies the environment of the gateway)
     * user_id      - int identifier of the customer user associated to this token
     * default      - boolean optional indicates this is the default payment token
     * type         - string one of 'credit_card' or 'echeck' ('check' for backwards compatibility)
     * last_four    - string last four digits of account number
     * card_type    - string credit card type: visa, mc, amex, disc, diners, jcb, etc (credit card only)
     * exp_month    - string optional expiration month MM (credit card only)
     * exp_year     - string optional expiration year YYYY (credit card only)
     * account_type - string one of 'checking' or 'savings' (checking gateway only)
     * environment  - string optional gateway environment id
     *
     * @since 1.0.0
     *
     * @param string $id the payment gateway token ID
     * @param array|\WC_Payment_Token $data associated data array or WC core token
     */
    public function __construct($id, $data)
    {
    }
    /**
     * Gets the payment token string.
     *
     * @since 4.0.0
     *
     * @return string payment token string
     */
    public function get_id()
    {
    }
    /**
     * Sets the payment token string.
     *
     * @since 5.8.0
     *
     * @param string $id payment token string
     */
    public function set_id($id)
    {
    }
    /**
     * Gets the gateway ID for the token.
     *
     * @since 5.8.0
     *
     * @return string
     */
    public function get_gateway_id()
    {
    }
    /**
     * Sets the gateway ID for the token.
     *
     * @since 5.8.0
     *
     * @param string $gateway_id
     */
    public function set_gateway_id($gateway_id)
    {
    }
    /**
     * Gets the ID of the user associated with the token.
     *
     * @since 5.8.0
     *
     * @return int
     */
    public function get_user_id()
    {
    }
    /**
     * Sets the ID of the user associated with the token.
     *
     * @since 5.8.0
     *
     * @param int $user_id
     */
    public function set_user_id($user_id)
    {
    }
    /**
     * Determines if this payment token is default.
     *
     * @since 1.0.0
     *
     * @return bool
     */
    public function is_default()
    {
    }
    /**
     * Makes this payment token the default or a non-default one.
     *
     * @since 1.0.0
     *
     * @param bool $default
     */
    public function set_default($default)
    {
    }
    /**
     * Determines true if this payment token represents a credit card
     *
     * @since 1.0.0
     *
     * @return bool
     */
    public function is_credit_card()
    {
    }
    /**
     * Determines if this payment token represents an eCheck.
     *
     * @since 4.0.0
     *
     * @return bool
     */
    public function is_echeck()
    {
    }
    /**
     * Gets the payment type, one of 'credit_card' or 'echeck'.
     *
     * @since 1.0.0
     *
     * @return string the payment type
     */
    public function get_type()
    {
    }
    /**
     * Gets the card type ie visa, mc, amex, disc, diners, jcb, etc.
     *
     * Credit card gateways only.
     *
     * @since 1.0.0
     *
     * @return null|string the payment type
     */
    public function get_card_type()
    {
    }
    /**
     * Sets the card type.
     *
     * Credit Card gateways only.
     *
     * @since 4.0.0
     *
     * @param string $card_type
     */
    public function set_card_type($card_type)
    {
    }
    /**
     * Gets the bank account type, one of 'checking' or 'savings'.
     *
     * eCheck gateways only.
     *
     * @since 1.0.0
     *
     * @return null|string the payment type
     */
    public function get_account_type()
    {
    }
    /**
     * Sets the account type
     *
     * eCheck gateways only.
     *
     * @since 4.0.0
     *
     * @param string $account_type
     */
    public function set_account_type($account_type)
    {
    }
    /**
     * Gets the full payment type, ie Visa, MasterCard, American Express, Discover, Diners, JCB, eCheck, etc.
     *
     * @since 1.0.0
     *
     * @return string the payment type
     */
    public function get_type_full()
    {
    }
    /**
     * Gets the last four digits of the credit card or check account number.
     *
     * @since 1.0.0
     *
     * @return string last four of account
     */
    public function get_last_four()
    {
    }
    /**
     * Sets the account last four.
     *
     * @since 4.0.0
     *
     * @param string $last_four
     */
    public function set_last_four($last_four)
    {
    }
    /**
     * Gets the expiration month of the credit card.
     *
     * This should only be called for credit card tokens.
     *
     * @since 1.0.0
     *
     * @return string expiration month as a two-digit number
     */
    public function get_exp_month()
    {
    }
    /**
     * Sets the expiration month.
     *
     * @since 4.0.0
     *
     * @param string $month
     */
    public function set_exp_month($month)
    {
    }
    /**
     * Gets the expiration year of the credit card.
     *
     * This should only be called for credit card tokens.
     *
     * @since 1.0.0
     *
     * @return string expiration year as a four-digit number
     */
    public function get_exp_year()
    {
    }
    /**
     * Sets the expiration year.
     *
     * @since 4.0.0
     *
     * @param string $year
     */
    public function set_exp_year($year)
    {
    }
    /**
     * Gets the expiration date in the format MM/YY.
     *
     * Suitable for use in order notes or other customer-facing areas.
     *
     * @since 1.0.0
     *
     * @return string formatted expiration date
     */
    public function get_exp_date()
    {
    }
    /**
     * Sets the full image URL based on the token payment type.
     *
     * Note that this is available for convenience during a single request and will not be  included in persistent storage.
     * @see SV_WC_Payment_Gateway_Payment_Token::get_image_url()
     *
     * @since 1.0.0
     *
     * @param string $url the full image URL
     */
    public function set_image_url($url)
    {
    }
    /**
     * Gets the full image URL based on teh token payment type.
     *
     * @see SV_WC_Payment_Gateway_Payment_Token::set_image_url()
     *
     * @since 1.0.0
     *
     * @return string the full image URL
     */
    public function get_image_url()
    {
    }
    /**
     * Gets the payment method nickname.
     *
     * @since 5.1.0
     *
     * @return string
     */
    public function get_nickname()
    {
    }
    /**
     * Sets the payment method nickname.
     *
     * @since 5.1.0
     *
     * @param string $value nickname value
     */
    public function set_nickname($value)
    {
    }
    /**
     * Gets the billing address hash.
     *
     * @since 5.3.0
     *
     * @return string
     */
    public function get_billing_hash()
    {
    }
    /**
     * Sets the billing hash.
     *
     * @since 5.3.0
     *
     * @param string $value billing hash
     */
    public function set_billing_hash($value)
    {
    }
    /**
     * Gets the gateway environment that this token is associated with.
     *
     * @since 5.8.0
     *
     * @return string
     */
    public function get_environment()
    {
    }
    /**
     * Sets the gateway environment that this token is associated with.
     *
     * @since 5.8.0
     *
     * @param string $value environment to set
     */
    public function set_environment($value)
    {
    }
    /**
     * Determines if this token's data has been migrated to core storage.
     *
     * @since 5.8.0
     *
     * @return bool
     */
    public function is_migrated()
    {
    }
    /**
     * Sets if this token's data has been migrated to core storage.
     *
     * @since 5.8.0
     *
     * @param bool $value if this token's data has been migrated to core storage
     */
    public function set_migrated($value)
    {
    }
    /**
     * Gets the framework token type based on the type of the associated WooCommerce core token.
     *
     * Defaults to 'echeck' if core token is not an instance of \WC_Payment_Token_CC
     *
     * @since 5.10.5
     *
     * @param \WC_Payment_Token $token WooCommerce core token
     *
     * @return string
     */
    protected function get_type_from_woocommerce_payment_token(\WC_Payment_Token $token)
    {
    }
    /**
     * Gets the WooCommerce core payment token object related to this framework token.
     *
     * @since 5.8.0
     *
     * @return \WC_Payment_Token|null
     */
    public function get_woocommerce_payment_token()
    {
    }
    /**
     * Creates the WooCommerce core payment token object that store the data of this framework token.
     *
     * If it's not a credit card, we default to echeck, so there's always an instance.
     *
     * @since 5.10.5
     *
     * @return \WC_Payment_Token
     */
    protected function make_new_woocommerce_payment_token()
    {
    }
    /**
     * Gets a representation of this token suitable for persisting to a datastore.
     *
     * Note: moving forward we will use {@see \WC_Data} and {@see \WC_Payment_Token} to handle data stores.
     * @see SV_WC_Payment_Gateway_Payment_Token::save()
     *
     * @since 1.0.0
     *
     * @return array|mixed datastore representation of token
     */
    public function to_datastore_format()
    {
    }
    /**
     * Reads the properties and meta data of a WooCommerce core token.
     *
     * Sets the found key-values as an array in the data property.
     *
     * @since 5.8.0
     *
     * @param \WC_Payment_Token $core_token
     */
    private function read(\WC_Payment_Token $core_token)
    {
    }
    /**
     * Stores the token data in the database.
     *
     * Stores the token as a Woocommerce payment token.
     * @see \WC_Payment_Token::save()
     *
     * @since 5.8.0
     *
     * @return int ID of the token saved as returned by {@see \WC_Payment_Token::save()}
     * @throws SV_WC_Payment_Gateway_Exception when saving and validating the parent token hits an error
     */
    public function save()
    {
    }
    /**
     * Deletes the associated WooCommerce core token from the database, if any.
     *
     * @see \WC_Payment_Token::delete()
     *
     * @since 5.8.0
     *
     * @param bool $force_delete argument mapped to {@see \WC_Data::delete()}
     * @return bool
     */
    public function delete($force_delete = false)
    {
    }
}
/**
 * Handle the payment tokenization related functionality.
 *
 * @since 4.3.0
 */
#[\AllowDynamicProperties]
class SV_WC_Payment_Gateway_Payment_Tokens_Handler
{
    /** @var string the gateway environment ID */
    protected $environment_id;
    /** @var array|SV_WC_Payment_Gateway_Payment_Token[] array of cached user id to array of SV_WC_Payment_Gateway_Payment_Token token objects */
    protected $tokens;
    /** @var array cached legacy tokens, by user ID and environment */
    protected $legacy_tokens;
    /** @var SV_WC_Payment_Gateway gateway instance */
    protected $gateway;
    /**
     * Build the class.
     *
     * @since 4.3.0
     *
     * @param SV_WC_Payment_Gateway $gateway payment gateway instance
     */
    public function __construct(\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway $gateway)
    {
    }
    /**
     * Builds the token object.
     *
     * A factory method to build and return a payment token object for the gateway.
     * Child implementations can override this method to return a custom payment token.
     *
     * From version 5.8.0, this method can accept a core \WC_Payment_Token type as the second argument to read data from.
     *
     * @since 4.3.0
     *
     * @param string $token payment token
     * @param \WC_Payment_Token|array $data {
     *     Payment token data.
     *
     *     @type bool   $default   Optional. Indicates this is the default payment token
     *     @type string $type      Payment type. Either 'credit_card' or 'check'
     *     @type string $last_four Last four digits of account number
     *     @type string $card_type Credit card type (`visa`, `mc`, `amex`, `disc`, `diners`, `jcb`) or `echeck`
     *     @type string $exp_month Optional. Expiration month (credit card only)
     *     @type string $exp_year  Optional. Expiration year (credit card only)
     * }
     * @return SV_WC_Payment_Gateway_Payment_Token payment token
     */
    public function build_token($token, $data)
    {
    }
    /** Handle single tokens **********************************************************************/
    /**
     * Tokenizes the current payment method and adds the standard transaction
     * data to the order post record.
     *
     * Can be used to tokenize a payment method either before, with, or after the sale:
     * - before sale: will try to perform a tokenization request
     * - with sale: expects to find a payment token in the given response object
     * - after sale: will try to perform a tokenization request, regardless if a response object is given
     *
     * @since 1.0.0
     *
     * @param \WC_Order $order order object
     * @param SV_WC_Payment_Gateway_API_Create_Payment_Token_Response|null $response payment token API response, or null if the request should be made
     * @param string $environment_id optional environment ID, defaults to the current environment
     * @return \WC_Order order object
     * @throws SV_WC_Plugin_Exception on transaction failure
     */
    public function create_token(\WC_Order $order, $response = null, $environment_id = null)
    {
    }
    /**
     * Adds a payment method and token as user meta.
     *
     * @since 1.0.0
     *
     * @param int $user_id user identifier
     * @param SV_WC_Payment_Gateway_Payment_Token $token the token
     * @param string|null $environment_id optional environment id, defaults to plugin current environment
     * @return int
     */
    public function add_token($user_id, $token, $environment_id = null)
    {
    }
    /**
     * Returns the payment token object identified by $token from the user
     * identified by $user_id
     *
     * @since 1.0.0
     *
     * @param int $user_id WordPress user identifier, or 0 for guest
     * @param string $token payment token
     * @param string|null $environment_id optional environment id, defaults to plugin current environment
     * @return SV_WC_Payment_Gateway_Payment_Token payment token object or null
     */
    public function get_token($user_id, $token, $environment_id = null)
    {
    }
    /**
     * Returns the payment token object identified by the core token ID from the user.
     *
     * @since 5.12.0
     *
     * @param int $user_id WordPress user identifier, or 0 for guest
     * @param int $core_token_id core token ID
     * @param string|null $environment_id optional environment id, defaults to plugin current environment
     * @return SV_WC_Payment_Gateway_Payment_Token payment token object or null
     */
    public function get_token_by_core_id(int $user_id, int $core_token_id, ?string $environment_id = null): ?\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Payment_Token
    {
    }
    /**
     * Updates a single token by persisting its data as a core token.
     *
     * @since since 4.0.0
     *
     * @param int $user_id WP user ID
     * @param SV_WC_Payment_Gateway_Payment_Token $token token to update
     * @param string|null $environment_id optional environment ID, defaults to plugin current environment
     * @return string|int updated user meta ID
     */
    public function update_token($user_id, $token, $environment_id = null)
    {
    }
    /**
     * Deletes a credit card token from user meta
     *
     * @since 1.0.0
     *
     * @param int $user_id user identifier
     * @param SV_WC_Payment_Gateway_Payment_Token|string $token the payment token to delete
     * @param string|null $environment_id optional environment id, defaults to plugin current environment
     * @return bool|int false if not deleted, updated user meta ID if deleted
     */
    public function remove_token($user_id, $token, $environment_id = null)
    {
    }
    /**
     * Removes a tokenized payment method using the gateway's API.
     *
     * Returns true if the token's local data should be removed.
     *
     * @since 5.8.0
     *
     * @param int $user_id user identifier
     * @param string $environment_id environment id
     * @param SV_WC_Payment_Gateway_Payment_Token $token the payment token to remove
     * @return bool
     */
    private function remove_token_from_gateway($user_id, $environment_id, $token)
    {
    }
    /**
     * Determines if a token's local meta should be deleted based on an API response.
     *
     * @since 5.1.0
     *
     * @param SV_WC_Payment_Gateway_Payment_Token $token payment token object
     * @param SV_WC_Payment_Gateway_API_Response $response API response object
     * @return bool
     */
    public function should_delete_token(\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Payment_Token $token, \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_API_Response $response)
    {
    }
    /**
     * Deletes a payment token from user meta.
     *
     * @since 5.1.0
     *
     * @param int $user_id WordPress user ID
     * @param SV_WC_Payment_Gateway_Payment_Token $token payment token object
     * @param string|null $environment_id gateway environment ID
     * @return bool
     */
    public function delete_token($user_id, \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Payment_Token $token, $environment_id = null)
    {
    }
    /**
     * Deletes a legacy payment token from user meta.
     *
     * @see SV_WC_Payment_Gateway_Payment_Token::delete()
     *
     * @since 5.8.0
     *
     * @param int $user_id WordPress user ID
     * @param SV_WC_Payment_Gateway_Payment_Token $token payment token object
     * @param string|null $environment_id gateway environment ID
     * @return bool whether the token was deleted from the user meta
     */
    public function delete_legacy_token($user_id, \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Payment_Gateway_Payment_Token $token, $environment_id = null)
    {
    }
    /**
     * Sets the default token for a user.
     *
     * This is shown as "Default Card" in the frontend and will be auto-selected during checkout.
     *
     * @since 1.0.0
     *
     * @param int $user_id user identifier
     * @param SV_WC_Payment_Gateway_Payment_Token|string $token the token to make default
     * @param string|null $environment_id optional environment id, defaults to plugin current environment
     * @return string|bool false if not set, updated user meta ID if set
     */
    public function set_default_token($user_id, $token, $environment_id = null)
    {
    }
    /** Handle all tokens *************************************************************************/
    /**
     * Gets the available payment tokens for a user as an associative array of
     * payment token to SV_WC_Payment_Gateway_Payment_Token
     *
     * @since 1.0.0
     *
     * @param int $user_id WordPress user identifier, or 0 for guest
     * @param array $args optional arguments, can include
     *  	`customer_id` - if not provided, this will be looked up based on $user_id
     *  	`environment_id` - defaults to plugin current environment
     * @return array|SV_WC_Payment_Gateway_Payment_Token[] associative array of string token to SV_WC_Payment_Gateway_Payment_Token object
     */
    public function get_tokens($user_id, $args = array())
    {
    }
    /**
     * Gets token objects from the legacy user meta data store.
     *
     * @since 5.8.0
     *
     * @param int $user_id WordPress user ID
     * @param null|string $environment_id desired environment ID
     * @return SV_WC_Payment_Gateway_Payment_Token[]
     */
    public function get_legacy_tokens($user_id, $environment_id = null)
    {
    }
    /**
     * Updates the given payment tokens for the identified user, in the database.
     *
     * @since 1.0.0
     *
     * @param int $user_id WP user ID
     * @param SV_WC_Payment_Gateway_Payment_Token[] $tokens array of tokens
     * @param string|null $environment_id optional environment id, defaults to plugin current environment
     * @return bool
     */
    public function update_tokens($user_id, $tokens, $environment_id = null)
    {
    }
    /**
     * Updates a single legacy token in user meta.
     *
     * @see SV_WC_Payment_Gateway_Payment_Token::save()
     *
     * @since 5.8.0
     *
     * @param int $user_id WP user ID
     * @param SV_WC_Payment_Gateway_Payment_Token $token token to update
     * @param string|null $environment_id optional environment ID, defaults to plugin current environment
     * @param bool $migrated whether the token was migrated to the new datastore
     * @return int|bool Meta ID if the key didn't exist, true on successful update, false on failure
     */
    public function update_legacy_token($user_id, $token, $environment_id = null, $migrated = false)
    {
    }
    /** Admin methods *****************************************************************************/
    /**
     * Get the admin token editor instance.
     *
     * @since 4.3.0
     *
     * @return SV_WC_Payment_Gateway_Admin_Payment_Token_Editor
     */
    public function get_token_editor()
    {
    }
    /** Conditional methods ***********************************************************************/
    /**
     * Determines if the identified user has the given payment token
     *
     * @since 1.0.0
     *
     * @param int $user_id WordPress user identifier, or 0 for guest
     * @param string|SV_WC_Payment_Gateway_Payment_Token $token payment token
     * @param string|null $environment_id optional environment id, defaults to plugin current environment
     * @return bool
     */
    public function user_has_token($user_id, $token, $environment_id = null)
    {
    }
    /**
     * Determines if the current payment method should be tokenized.
     *
     * Whether requested by customer or otherwise forced. This parameter is passed from
     * the checkout page/payment form.
     *
     * @since 1.0.0
     *
     * @return bool
     */
    public function should_tokenize()
    {
    }
    /**
     * Determines if tokenization should be forced on the checkout page.
     *
     * This is most useful to force tokenization for a subscription or pre-orders initial transaction.
     *
     * @since 1.0.0
     *
     * @return bool
     */
    public function tokenization_forced()
    {
    }
    /** Utility methods ***************************************************************************/
    /**
     * Merges remote token data with local tokens.
     *
     * Sometimes local tokens can provide additional detail that's not provided remotely.
     *
     * @since 4.0.0
     *
     * @param array $local_tokens local tokens
     * @param array $remote_tokens remote tokens
     * @return array associative array of string token to SV_WC_Payment_Gateway_Payment_Token objects
     */
    protected function merge_token_data($local_tokens, $remote_tokens)
    {
    }
    /**
     * Returns the attributes that should be used to merge local token data into
     * a remote token.
     *
     * Gateways can override this method to add their own attributes, but must
     * also include the associated get_*() & set_*() methods in the token class.
     *
     * See Authorize.net CIM for an example implementation.
     *
     * @since 4.0.0
     *
     * @return array associative array of string token to SV_WC_Payment_Gateway_Payment_Token objects
     */
    protected function get_merge_attributes()
    {
    }
    /**
     * Gets the payment token transient key for the given user, gateway and environment.
     *
     * Payment token transients can be disabled by using the filter below.
     *
     * @since 4.0.0
     *
     * @param string|int $user_id
     * @return string transient key
     */
    protected function get_transient_key($user_id = null)
    {
    }
    /**
     * Helper method to clear the tokens transient
     *
     * TODO: ideally the transient would make use of actions to clear itself
     * as needed (e.g. when customer IDs are updated/removed), but for now it's
     * only cleared when the tokens are updated. @MR July 2015
     *
     * @since 4.0.0
     *
     * @param int|string $user_id
     */
    public function clear_transient($user_id)
    {
    }
    /**
     * Returns the payment token user meta name for persisting the payment tokens.
     *
     * Defaults to _wc_{gateway id}_payment_tokens for the production environment,
     * and _wc_{gateway id}_payment_tokens_{environment} for any other environment.
     *
     * NOTE: the gateway id, rather than plugin id, is used by default to create
     * the meta key for this setting, because it's assumed that in the case of a
     * plugin having multiple gateways (ie credit card and eCheck) the payment
     * tokens will be distinct between them
     *
     * @since 1.0.0
     *
     * @param string|null $environment_id optional environment id, defaults to plugin current environment
     * @return string payment token user meta name
     */
    public function get_user_meta_name($environment_id = null)
    {
    }
    /**
     * Gets the order note message when a customer saves their payment method
     * to their account
     *
     * @since 4.1.2
     *
     * @param SV_WC_Payment_Gateway_Payment_Token $token the payment token being saved
     * @return string
     */
    protected function get_order_note($token)
    {
    }
    /**
     * Returns $tokens in a format suitable for data storage
     *
     * @since 1.0.0
     *
     * @param array $tokens array of SV_WC_Payment_Gateway_Payment_Token tokens
     * @return array data storage version of $tokens
     */
    protected function format_for_db($tokens)
    {
    }
    /**
     * Get the gateway environment ID.
     *
     * @since 4.3.0
     *
     * @return string
     */
    protected function get_environment_id()
    {
    }
    /**
     * Gets the gateway instance.
     *
     * @since 4.3.0
     *
     * @return SV_WC_Payment_Gateway gateway instance
     */
    protected function get_gateway()
    {
    }
    /**
     * Determines whether a user's tokens have been migrated.
     *
     * @since 5.8.0
     *
     * @param int $user_id WordPress user ID
     * @param string|null $environment_id environment ID
     * @return bool
     */
    public function user_legacy_tokens_migrated($user_id, $environment_id = null)
    {
    }
    /**
     * Marks a user as having their tokens migrated.
     *
     * @since 5.8.0
     *
     * @param int $user_id WordPress user ID
     * @param string|null $environment_id environment ID
     */
    public function set_user_legacy_tokens_migrated($user_id, $environment_id = null)
    {
    }
    /**
     * Adds the callback action for woocommerce_payment_token_deleted.
     *
     * @since 5.8.0
     */
    private function add_payment_token_deleted_action()
    {
    }
    /**
     * Removes the callback action for woocommerce_payment_token_deleted.
     *
     * @since 5.8.0
     */
    private function remove_payment_token_deleted_action()
    {
    }
    /**
     * Deletes remote token data and legacy token data when the corresponding core token is deleted.
     *
     * @internal
     *
     * @since 5.8.0
     *
     * @param int $token_id the ID of a core token
     * @param \WC_Payment_Token $core_token the core token object
     */
    public function payment_token_deleted($token_id, $core_token)
    {
    }
}
/**
 * The plugin REST API handler class.
 *
 * This is responsible for hooking in to the WC REST API to add data for existing
 * routes and/or register new routes.
 *
 * @since 5.2.0
 */
#[\AllowDynamicProperties]
class REST_API
{
    /** @var SV_WC_Plugin plugin instance */
    private $plugin;
    /**
     * Constructs the class.
     *
     * @since 5.2.0
     *
     * @param SV_WC_Plugin $plugin plugin instance
     */
    public function __construct(\SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Plugin $plugin)
    {
    }
    /**
     * Adds the action and filter hooks.
     *
     * @since 5.2.0
     */
    protected function add_hooks()
    {
    }
    /**
     * Adds plugin data to the system status.
     *
     * @internal
     *
     * @since 5.2.0
     *
     * @param \WP_REST_Response $response REST API response object
     * @param array $system_status system status data
     * @param \WP_REST_Request $request REST API request object
     * @return \WP_REST_Response
     */
    public function add_system_status_data($response, $system_status, $request)
    {
    }
    /**
     * Gets the data to add to the WooCommerce REST API System Status response.
     *
     * Plugins can override this to add their own data.
     *
     * @since 5.2.0
     *
     * @return array
     */
    protected function get_system_status_data()
    {
    }
    /**
     * Registers new WC REST API routes.
     *
     * @since 5.2.0
     */
    public function register_routes()
    {
    }
    /**
     * Gets the plugin instance.
     *
     * @since 5.2.0
     *
     * @return SV_WC_Plugin|SV_WC_Payment_Gateway_Plugin
     */
    protected function get_plugin()
    {
    }
}
namespace SkyVerge\WooCommerce\PluginFramework\v6_0_1\Payment_Gateway;

/**
 * The payment gateway plugin REST API handler class.
 *
 * @see \SkyVerge\WooCommerce\PluginFramework\v6_0_1\REST_API
 *
 * @since 5.2.0
 */
#[\AllowDynamicProperties]
class REST_API extends \SkyVerge\WooCommerce\PluginFramework\v6_0_1\REST_API
{
    /**
     * Gets the data to add to the WooCommerce REST API System Status response.
     *
     * Plugins can override this to add their own data.
     *
     * @see \SkyVerge\WooCommerce\PluginFramework\v6_0_1\REST_API::get_system_status_data()
     *
     * @since 5.2.0
     *
     * @return array
     */
    public function get_system_status_data()
    {
    }
}
namespace SkyVerge\WooCommerce\PluginFramework\v6_0_1\REST_API\Controllers;

/**
 * The settings controller class.
 *
 * @since 5.7.0
 */
#[\AllowDynamicProperties]
class Settings extends \WP_REST_Controller
{
    /** @var \SkyVerge\WooCommerce\PluginFramework\v6_0_1\Settings_API\Abstract_Settings settings handler */
    protected $settings;
    /**
     * Settings constructor.
     *
     * @since 5.7.0
     *
     * @param \SkyVerge\WooCommerce\PluginFramework\v6_0_1\Settings_API\Abstract_Settings $settings settings handler
     */
    public function __construct(\SkyVerge\WooCommerce\PluginFramework\v6_0_1\Settings_API\Abstract_Settings $settings)
    {
    }
    /**
     * Registers the API routes.
     *
     * @since 5.7.0
     */
    public function register_routes()
    {
    }
    /** Read methods **************************************************************************************************/
    /**
     * Checks whether the user has permissions to get settings.
     *
     * @since 5.7.0
     *
     * @param \WP_REST_Request $request request object
     * @return bool|\WP_Error
     */
    public function get_items_permissions_check($request)
    {
    }
    /**
     * Gets all registered settings.
     *
     * @since 5.7.0
     *
     * @param \WP_REST_Request $request request object
     * @return \WP_REST_Response|\WP_Error
     */
    public function get_items($request)
    {
    }
    /**
     * Gets a single setting.
     *
     * @since 5.7.0
     *
     * @param \WP_REST_Request $request request object
     * @return \WP_REST_Response|\WP_Error
     */
    public function get_item($request)
    {
    }
    /** Update methods ************************************************************************************************/
    /**
     * Checks whether the user has permissions to update a setting.
     *
     * @since 5.7.0
     *
     * @param \WP_REST_Request $request request object
     * @return bool|\WP_Error
     */
    public function update_item_permissions_check($request)
    {
    }
    /**
     * Updates a single setting.
     *
     * @since 5.7.0
     *
     * @param \WP_REST_Request $request request object
     * @return WP_Error|WP_REST_Response
     */
    public function update_item($request)
    {
    }
    /** Utility methods ***********************************************************************************************/
    /**
     * Prepares the item for the REST response.
     *
     * @since 5.7.0
     *
     * @param \SkyVerge\WooCommerce\PluginFramework\v6_0_1\Settings_API\Setting $setting a setting object
     * @param \WP_REST_Request $request request object
     * @return array
     */
    public function prepare_setting_item($setting, $request)
    {
    }
    /**
     * Retrieves the item's schema, conforming to JSON Schema.
     *
     * @since 5.7.0
     *
     * @return array
     */
    public function get_item_schema()
    {
    }
}
namespace SkyVerge\WooCommerce\PluginFramework\v6_0_1;

/**
 * SkyVerge Wordpress Async Request class
 *
 * Based on the incredible work by deliciousbrains - most of the code is from
 * here: https://github.com/A5hleyRich/wp-background-processing
 *
 * Forked & namespaced to prevent dependency conflicts and to facilitate
 * further customizations.
 *
 * Use SV_WP_Async_Request::set_data() to set request data, instead of ::data().
 *
 * @since 4.4.0
 */
#[\AllowDynamicProperties]
abstract class SV_WP_Async_Request
{
    /** @var string request prefix */
    protected $prefix = 'wp';
    /** @var string request action name */
    protected $action = 'async_request';
    /** @var string request identifier */
    protected $identifier;
    /** @var array request data */
    protected $data = array();
    /**
     * Initiate a new async request
     *
     * @since 4.4.0
     */
    public function __construct()
    {
    }
    /**
     * Set data used during the async request
     *
     * @since 4.4.0
     * @param array $data
     * @return SV_WP_Async_Request
     */
    public function set_data($data)
    {
    }
    /**
     * Dispatch the async request
     *
     * @since 4.4.0
     * @return array|\WP_Error
     */
    public function dispatch()
    {
    }
    /**
     * Get query args
     *
     * @since 4.4.0
     * @return array
     */
    protected function get_query_args()
    {
    }
    /**
     * Get query URL
     *
     * @since 4.4.0
     * @return string
     */
    protected function get_query_url()
    {
    }
    /**
     * Get request args
     *
     * In 4.6.3 renamed from get_post_args to get_request_args
     *
     * @since 4.4.0
     * @return array
     */
    protected function get_request_args()
    {
    }
    /**
     * Maybe handle
     *
     * Check for correct nonce and pass to handler.
     * @since 4.4.0
     */
    public function maybe_handle()
    {
    }
    /**
     * Handle
     *
     * Override this method to perform any actions required
     * during the async request.
     *
     * @since 4.4.0
     */
    abstract protected function handle();
}
/**
 * SkyVerge WordPress Background Job Handler class
 *
 * Based on the wonderful WP_Background_Process class by deliciousbrains:
 * https://github.com/A5hleyRich/wp-background-processing
 *
 * Subclasses SV_WP_Async_Request. Instead of the concept of `batches` used in
 * the Delicious Brains' version, however, this takes a more object-oriented approach
 * of background `jobs`, allowing greater control over manipulating job data and
 * processing.
 *
 * A batch implicitly expected an array of items to process, whereas a job does
 * not expect any particular data structure (although it does default to
 * looping over job data) and allows subclasses to provide their own
 * processing logic.
 *
 * # Sample usage:
 *
 * $background_job_handler = new SV_WP_Background_Job_Handler();
 * $job = $background_job_handler->create_job( $attrs );
 * $background_job_handler->dispatch();
 *
 * @since 4.4.0
 */
#[\AllowDynamicProperties]
abstract class SV_WP_Background_Job_Handler extends \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WP_Async_Request
{
    /** @var string async request prefix */
    protected $prefix = 'sv_wp';
    /** @var string async request action */
    protected $action = 'background_job';
    /** @var string data key */
    protected $data_key = 'data';
    /** @var int start time of current process */
    protected $start_time = 0;
    /** @var string cron hook identifier */
    protected $cron_hook_identifier;
    /** @var string cron interval identifier */
    protected $cron_interval_identifier;
    /** @var string debug message, used by the system status tool */
    protected $debug_message;
    /**
     * Initiate new background job handler
     *
     * @since 4.4.0
     */
    public function __construct()
    {
    }
    /**
     * Adds the necessary action and filter hooks.
     *
     * @since 4.8.0
     */
    protected function add_hooks()
    {
    }
    /**
     * Dispatch
     *
     * @since 4.4.0
     * @return array|WP_Error
     */
    public function dispatch()
    {
    }
    /**
     * Maybe processes job queue.
     *
     * Checks whether data exists within the job queue and that the background process is not already running.
     *
     * @since 4.4.0
     *
     * @throws \Exception upon error
     */
    public function maybe_handle()
    {
    }
    /**
     * Check whether job queue is empty or not
     *
     * @since 4.4.0
     * @return bool True if queue is empty, false otherwise
     */
    protected function is_queue_empty()
    {
    }
    /**
     * Check whether background process is running or not
     *
     * Check whether the current process is already running
     * in a background process.
     *
     * @since 4.4.0
     * @return bool True if processing is running, false otherwise
     */
    protected function is_process_running()
    {
    }
    /**
     * Lock process
     *
     * Lock the process so that multiple instances can't run simultaneously.
     * Override if applicable, but the duration should be greater than that
     * defined in the time_exceeded() method.
     *
     * @since 4.4.0
     */
    protected function lock_process()
    {
    }
    /**
     * Unlock process
     *
     * Unlock the process so that other instances can spawn.
     *
     * @since 4.4.0
     * @return SV_WP_Background_Job_Handler
     */
    protected function unlock_process()
    {
    }
    /**
     * Check if memory limit is exceeded
     *
     * Ensures the background job handler process never exceeds 90%
     * of the maximum WordPress memory.
     *
     * @since 4.4.0
     *
     * @return bool True if exceeded memory limit, false otherwise
     */
    protected function memory_exceeded()
    {
    }
    /**
     * Get memory limit
     *
     * @since 4.4.0
     *
     * @return int memory limit in bytes
     */
    protected function get_memory_limit()
    {
    }
    /**
     * Check whether request time limit has been exceeded or not
     *
     * Ensures the background job handler never exceeds a sensible time limit.
     * A timeout limit of 30s is common on shared hosting.
     *
     * @since 4.4.0
     *
     * @return bool True, if time limit exceeded, false otherwise
     */
    protected function time_exceeded()
    {
    }
    /**
     * Create a background job
     *
     * Delicious Brains' versions alternative would be using ->data()->save().
     * Allows passing in any kind of job attributes, which will be available at item data processing time.
     * This allows sharing common options between items without the need to repeat
     * the same information for every single item in queue.
     *
     * Instead of returning self, returns the job instance, which gives greater
     * control over the job.
     *
     * @since 4.4.0
     *
     * @param array|mixed $attrs Job attributes.
     * @return \stdClass|object|null
     */
    public function create_job($attrs)
    {
    }
    /**
     * Get a job (by default the first in the queue)
     *
     * @since 4.4.0
     *
     * @param string $id Optional. Job ID. Will return first job in queue if not
     *                   provided. Will not return completed or failed jobs from queue.
     * @return \stdClass|object|null The found job object or null
     */
    public function get_job($id = null)
    {
    }
    /**
     * Gets jobs.
     *
     * @since 4.4.2
     *
     * @param array $args {
     *     Optional. An array of arguments
     *
     *     @type string|array $status Job status(es) to include
     *     @type string $order ASC or DESC. Defaults to DESC
     *     @type string $orderby Field to order by. Defaults to option_id
     * }
     * @return \stdClass[]|object[]|null Found jobs or null if none found
     */
    public function get_jobs($args = array())
    {
    }
    /**
     * Handles jobs.
     *
     * Process jobs while remaining within server memory and time limit constraints.
     *
     * @since 4.4.0
     *
     * @throws \Exception
     */
    protected function handle()
    {
    }
    /**
     * Process a job
     *
     * Default implementation is to loop over job data and passing each item to
     * the item processor. Subclasses are, however, welcome to override this method
     * to create totally different job processing implementations - see
     * WC_CSV_Import_Suite_Background_Import in CSV Import for an example.
     *
     * If using the default implementation, the job must have a $data_key property set.
     * Subclasses can override the data key, but the contents must be an array which
     * the job processor can loop over. By default, the data key is `data`.
     *
     * If no data is set, the job will completed right away.
     *
     * @since 4.4.0
     *
     * @param \stdClass|object $job
     * @param int $items_per_batch number of items to process in a single request. Defaults to unlimited.
     * @throws \Exception when job data is incorrect
     * @return \stdClass $job
     */
    public function process_job($job, $items_per_batch = null)
    {
    }
    /**
     * Update job attrs
     *
     * @since 4.4.0
     *
     * @param \stdClass|object|string $job Job instance or ID
     * @return \stdClass|object|false on failure
     */
    public function update_job($job)
    {
    }
    /**
     * Handles job completion.
     *
     * @since 4.4.0
     *
     * @param \stdClass|object|string $job Job instance or ID
     * @return \stdClass|object|false on failure
     */
    public function complete_job($job)
    {
    }
    /**
     * Handle job failure
     *
     * Default implementation does not call this method directly, but it's
     * provided as a convenience method for subclasses that may call this to
     * indicate that a particular job has failed for some reason.
     *
     * @since 4.4.0
     *
     * @param \stdClass|object|string $job Job instance or ID
     * @param string $reason Optional. Reason for failure.
     * @return \stdClass|false on failure
     */
    public function fail_job($job, $reason = '')
    {
    }
    /**
     * Delete a job
     *
     * @since 4.4.2
     *
     * @param \stdClass|object|string $job Job instance or ID
     * @return false on failure
     */
    public function delete_job($job)
    {
    }
    /**
     * Handle job queue completion
     *
     * Override if applicable, but ensure that the below actions are
     * performed, or, call parent::complete().
     *
     * @since 4.4.0
     */
    protected function complete()
    {
    }
    /**
     * Schedule cron healthcheck
     *
     * @since 4.4.0
     * @param array $schedules
     * @return array
     */
    public function schedule_cron_healthcheck($schedules)
    {
    }
    /**
     * Handle cron healthcheck
     *
     * Restart the background process if not already running
     * and data exists in the queue.
     *
     * @since 4.4.0
     */
    public function handle_cron_healthcheck()
    {
    }
    /**
     * Schedule cron health check event
     *
     * @since 4.4.0
     */
    protected function schedule_event()
    {
    }
    /**
     * Clear scheduled health check event
     *
     * @since 4.4.0
     */
    protected function clear_scheduled_event()
    {
    }
    /**
     * Process an item from job data
     *
     * Implement this method to perform any actions required on each
     * item in job data.
     *
     * @since 4.4.2
     *
     * @param mixed $item Job data item to iterate over
     * @param \stdClass|object $job Job instance
     * @return mixed
     */
    abstract protected function process_item($item, $job);
    /**
     * Handles PHP shutdown, say after a fatal error.
     *
     * @since 4.5.0
     *
     * @param \stdClass|object $job the job being processed
     */
    public function handle_shutdown($job)
    {
    }
    /**
     * Update a job option in options database.
     *
     * @since 4.6.3
     *
     * @param \stdClass|object $job the job instance to update in database
     * @return int|bool number of rows updated or false on failure, see wpdb::update()
     */
    private function update_job_option($job)
    {
    }
    /** Debug & Testing Methods ***********************************************/
    /**
     * Tests the background handler's connection.
     *
     * @since 4.8.0
     *
     * @return bool
     */
    public function test_connection()
    {
    }
    /**
     * Handles the connection test request.
     *
     * @since 4.8.0
     */
    public function handle_connection_test_response()
    {
    }
    /**
     * Adds the WooCommerce debug tool.
     *
     * @since 4.8.0
     *
     * @param array $tools WooCommerce core tools
     * @return array
     */
    public function add_debug_tool($tools)
    {
    }
    /**
     * Runs the test connection debug tool.
     *
     * @since 4.8.0
     *
     * @return string
     */
    public function run_debug_tool()
    {
    }
    /**
     * Translate the tool success message.
     *
     * This can be removed in favor of returning the message string in `run_debug_tool()`
     *  when WC 3.1 is required, though that means the message will always be "success" styled.
     *
     * @since 4.8.0
     *
     * @param string $translated the text to output
     * @param string $original the original text
     * @param string $domain the textdomain
     * @return string the updated text
     */
    public function translate_success_message($translated, $original, $domain)
    {
    }
    /** Helper Methods ********************************************************/
    /**
     * Gets the job handler identifier.
     *
     * @since 4.8.0
     *
     * @return string
     */
    public function get_identifier()
    {
    }
}
/**
 * The job batch handler class.
 *
 * This provides a way for plugins to process "background" jobs in batches when
 * regular background processing isn't available.
 *
 * @since 4.8.0
 */
#[\AllowDynamicProperties]
class SV_WP_Job_Batch_Handler
{
    /** @var SV_WP_Background_Job_Handler job handler instance */
    protected $job_handler;
    /** @var SV_WC_Plugin $plugin WC plugin instance */
    protected $plugin;
    /** @var int default items per batch */
    protected $items_per_batch = 20;
    /**
     * Constructs the class.
     *
     * @since 4.8.0
     *
     * @param SV_WP_Background_Job_Handler $job_handler job handler instance
     * @param SV_WC_Plugin $plugin WC plugin instance
     */
    public function __construct($job_handler, \SkyVerge\WooCommerce\PluginFramework\v6_0_1\SV_WC_Plugin $plugin)
    {
    }
    /**
     * Adds the necessary action and filter hooks.
     *
     * @since 4.8.0
     */
    protected function add_hooks()
    {
    }
    /**
     * Gets the name of the script handle.
     *
     * @since 6.0.1
     *
     * @return string
     */
    protected function getScriptHandle(): string
    {
    }
    /**
     * Enqueues the scripts.
     *
     * @since 4.8.0
     */
    public function enqueue_scripts()
    {
    }
    /**
     * Renders the inline JavaScript for instantiating the batch handler class.
     *
     * @since 4.8.0
     */
    protected function render_js()
    {
    }
    /**
     * Gets the JavaScript batch handler arguments.
     *
     * @since 4.8.0
     *
     * @return array
     */
    protected function get_js_args()
    {
    }
    /**
     * Gets the JavaScript batch handler class name.
     *
     * Plugins can override this with their own handler that extends the base.
     *
     * @since 4.8.0
     *
     * @return string
     */
    protected function get_js_class()
    {
    }
    /**
     * Processes a job batch via AJAX.
     *
     * @internal
     *
     * @since 4.8.0
     *
     * @throws \Exception upon error.
     */
    public function ajax_process_batch()
    {
    }
    /**
     * Cancels a job via AJAX.
     *
     * @internal
     *
     * @since 4.8.0
     */
    public function ajax_cancel_job()
    {
    }
    /**
     * Handles a job after processing one of its batches.
     *
     * Allows plugins to add extra job properties and handle certain statuses.
     * Implementations may throw a SV_WC_Plugin_Exception.
     *
     * @since 4.8.0
     *
     * @param \stdClass|object $job job object
     * @return \stdClass|object $job job object
     */
    protected function process_job_status($job)
    {
    }
    /**
     * Processes a batch of items for the given job.
     *
     * A batch consists of the number of items defined by self::get_items_per_batch()
     * or the number we're able to process before exceeding time or memory limits.
     *
     * @since 4.8.0
     *
     * @param string $job_id job to process
     * @return \stdClass|object $job job after processing the batch
     * @throws \Exception
     * @throws SV_WC_Plugin_Exception
     */
    public function process_batch($job_id)
    {
    }
    /**
     * Gets the number of items to process in a single request when processing job item batches.
     *
     * @since 4.8.0
     *
     * @return int
     */
    protected function get_items_per_batch()
    {
    }
    /**
     * Gets the job handler.
     *
     * @since 4.8.0
     *
     * @return SV_WP_Background_Job_Handler
     */
    protected function get_job_handler()
    {
    }
    /**
     * Gets the plugin instance.
     *
     * @since 4.8.0
     *
     * @return SV_WC_Plugin
     */
    protected function get_plugin()
    {
    }
}