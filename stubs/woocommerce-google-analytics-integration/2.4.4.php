<?php
/**
 * Generated stub declarations for woocommerce-google-analytics-integration 2.4.4.
 * @see https://github.com/woocommerce/all-plugins/tree/stubs
 */

/**
 * Registers the read-only Google Analytics tracking settings ability.
 */
class WC_Google_Analytics_Get_Tracking_Settings_Ability implements \Automattic\WooCommerce\Abilities\AbilityDefinition
{
    /**
     * Get the ability name.
     *
     * @return string
     */
    public static function get_name(): string
    {
    }
    /**
     * Get the ability registration arguments.
     *
     * @return array
     */
    public static function get_registration_args(): array
    {
    }
    /**
     * Read the current Google Analytics tracking settings.
     *
     * @return array|WP_Error
     */
    public static function execute()
    {
    }
    /**
     * Check whether the current user can read the integration settings.
     *
     * @return bool
     */
    public static function can_read_tracking_settings(): bool
    {
    }
    /**
     * Get the active Google Analytics integration instance.
     *
     * @return WC_Google_Analytics|WP_Error
     */
    private static function get_integration()
    {
    }
    /**
     * Get the ability output schema.
     *
     * @return array
     */
    private static function get_output_schema(): array
    {
    }
    /**
     * Get schema properties for event tracking settings.
     *
     * @return array
     */
    private static function get_event_tracking_schema_properties(): array
    {
    }
    /**
     * Get all GA4 event names this extension can track.
     *
     * @return array
     */
    private static function get_event_names(): array
    {
    }
}
/**
 * WC_Abstract_Google_Analytics_JS class
 *
 * Abstract JS for recording Google Analytics/Gtag info
 */
abstract class WC_Abstract_Google_Analytics_JS
{
    /** @var WC_Abstract_Google_Analytics_JS $instance Class Instance */
    protected static $instance;
    /** @var array $settings Inherited Analytics settings */
    protected $settings = array();
    /** @var string Developer ID */
    public const DEVELOPER_ID = 'dOGY3NW';
    /** @var string WC session key used to carry add_to_cart event data across an add-to-cart redirect. */
    protected const PENDING_ADDED_TO_CART_SESSION_KEY = '_ga_pending_added_to_cart';
    /** @var array|null Formatted product data captured during the current request's woocommerce_add_to_cart action. */
    protected $pending_added_to_cart = \null;
    /**
     * Constructor
     * To be called from child classes to setup event data
     *
     * @return void
     */
    public function __construct()
    {
    }
    /**
     * Hook into various parts of WooCommerce and set the relevant
     * script data that the frontend tracking script will use.
     *
     * @return void
     */
    public function attach_event_data(): void
    {
    }
    /**
     * Returns the product list name for the current page context.
     * Used to populate item_list_name in view_item_list GA4 events for classic pages.
     *
     * @return string
     */
    public function get_list_name(): string
    {
    }
    /**
     * Return one of our settings.
     *
     * @param string $setting Key/name for the setting.
     *
     * @return mixed|null Value of the setting or null if not found.
     */
    protected function get_setting(string $setting)
    {
    }
    /**
     * Generic GA snippet for opt out.
     *
     * @return void
     */
    public function load_opt_out_script(): void
    {
    }
    /**
     * Compatibility wrapper for the formerly static opt-out loader.
     *
     * @return void
     */
    public static function load_opt_out(): void
    {
    }
    /**
     * Get item identifier from product data.
     *
     * @param WC_Product $product WC_Product Object.
     *
     * @return string
     */
    public function get_product_identifier_for_product(\WC_Product $product): string
    {
    }
    /**
     * Compatibility wrapper for the formerly static product identifier formatter.
     *
     * @param WC_Product $product WC_Product Object.
     *
     * @return string
     */
    public static function get_product_identifier(\WC_Product $product): string
    {
    }
    /**
     * Returns an array of cart data in the required format
     *
     * @return array
     */
    public function get_formatted_cart(): array
    {
    }
    /**
     * Returns an array of product data in the required format
     *
     * Returns an empty array when the product cannot be resolved. Several
     * callers pass a value that is not guaranteed to be a WC_Product (e.g. a
     * deleted product, or a product whose type class is not registered). The
     * argument is intentionally untyped so that such values degrade gracefully
     * instead of fataling the front-end render with a TypeError on PHP 8.
     *
     * @param WC_Product|false|null $product   The product to format.
     * @param int                   $variation_id Variation product ID.
     * @param array|bool            $variation An array containing product variation attributes to include in the product data.
     *                              For the "variation" type products, we'll use product->get_attributes.
     * @param bool|int              $quantity  Quantity to include in the formatted product object
     *
     * @return array
     */
    public function get_formatted_product($product, $variation_id = 0, $variation = \false, $quantity = \false): array
    {
    }
    /**
     * Returns the product fields that do not depend on a price.
     *
     * Cart and order items use this instead of get_formatted_product() because they report
     * their own line prices. Skipping the catalog price matters for Composite Products: when
     * its stored price data is out of date, calculating the price can take seconds.
     *
     * @param WC_Product $product   The product to format.
     * @param array|bool $variation Variation attributes to include. For "variation" type products,
     *                              the product's own attributes are used instead.
     *
     * @return array
     */
    private function get_formatted_product_data(\WC_Product $product, $variation = \false): array
    {
    }
    /**
     * Returns the catalog price of a product.
     *
     * For simple, variable and grouped products, `get_price()` is already the lowest price
     * the product sells for. Product Bundles and Composite Products keep only the container's
     * base price in `get_price()`, which is often 0 when the items inside are priced individually.
     *
     * @param WC_Product $product The product.
     * @param mixed      $price   The price from `get_price()`, or from the chosen variation.
     *
     * @return mixed
     */
    private function get_catalog_price(\WC_Product $product, $price)
    {
    }
    /**
     * Return product categories with assigned terms expanded into parent-first hierarchy order.
     *
     * @param int $product_id Product ID.
     *
     * @return array
     */
    private function get_formatted_product_categories(int $product_id): array
    {
    }
    /**
     * Capture the product added to the cart so it can either be rendered now
     * (no redirect) or persisted into the WC session (if WC will redirect).
     *
     * @param string     $cart_item_key Cart item key.
     * @param int        $product_id    Product ID being added.
     * @param int|string $quantity      Quantity added.
     * @param int        $variation_id  Variation ID (0 if not a variation).
     * @param array      $variation     Variation attributes.
     *
     * @return void
     */
    public function capture_added_to_cart($cart_item_key, $product_id, $quantity, $variation_id, $variation): void
    {
    }
    /**
     * Persist the captured `added_to_cart` payload into the WC session when a
     * classic add-to-cart request is going to redirect. The next page request
     * will pick it up via `restore_added_to_cart_from_session()` and fire the
     * event.
     *
     * @param string|false    $url     Redirect URL (returned unchanged).
     * @param WC_Product|null $product Product being added. `null` when WooCommerce only builds the cart link.
     *
     * @return string|false
     */
    public function persist_added_to_cart_for_redirect($url, $product = \null)
    {
    }
    /**
     * Persist the captured `added_to_cart` payload when WooCommerce's legacy
     * AJAX add-to-cart handler will redirect the browser before it fires the
     * `added_to_cart` JavaScript event.
     *
     * @return void
     */
    public function persist_added_to_cart_for_ajax_redirect(): void
    {
    }
    /**
     * Persist the pending add-to-cart payload into the WC session.
     *
     * @return void
     */
    private function persist_pending_added_to_cart(): void
    {
    }
    /**
     * Restore an `added_to_cart` payload that was stashed before a redirect,
     * append `add_to_cart` to the events array, and consume the session key
     * so the event only fires once.
     *
     * @return void
     */
    public function restore_added_to_cart_from_session(): void
    {
    }
    /**
     * Returns an array of order data in the required format
     *
     * @param WC_Abstract_Order $order An instance of the WooCommerce Order object.
     *
     * @return array
     */
    public function get_formatted_order($order): array
    {
    }
    /**
     * Formats a price the same way WooCommerce Blocks does
     *
     * @param mixed $value The price value for format
     *
     * @return int
     */
    public function get_formatted_price($value): int
    {
    }
    /**
     * Add product identifier to StoreAPI
     *
     * @param WC_Product|array $product Either an instance of WC_Product or a cart item array depending on the endpoint
     *
     * @return array
     */
    public function data_callback($product): array
    {
    }
    /**
     * Return an instance for the static compatibility wrappers to read settings from.
     *
     * If a tracking instance has already been bootstrapped, reuse it. Otherwise build a
     * lightweight, settings-only instance without invoking the constructor, so reading a
     * setting never registers scripts/hooks, enqueues anything, or installs a live
     * singleton. This mirrors the pre-refactor static helpers, which read settings with
     * no side effects even when the integration skipped get_tracking_instance() (e.g.
     * `ga_id` is unset).
     *
     * @return WC_Abstract_Google_Analytics_JS
     */
    protected static function get_compatibility_instance(): \WC_Abstract_Google_Analytics_JS
    {
    }
    /**
     * Schema for the extended StoreAPI data
     *
     * @return array
     */
    public function schema_callback(): array
    {
    }
    /**
     * Returns the tracker variable this integration should use
     *
     * @return string
     */
    abstract public static function tracker_function_name(): string;
    /**
     * Add an event to the script data
     *
     * @param string       $type The type of event this data is related to.
     * @param string|array $data The event data to add.
     *
     * @return void
     */
    abstract public function set_script_data(string $type, $data): void;
    /**
     * Append data to an existing script data array
     *
     * @param string       $type The type of event this data is related to.
     * @param string|array $data The event data to add.
     *
     * @return void
     */
    abstract public function append_script_data(string $type, $data): void;
    /**
     * Get the class instance
     *
     * @param  array $settings Settings
     * @return WC_Abstract_Google_Analytics_JS
     */
    abstract public static function get_instance($settings = array()): \WC_Abstract_Google_Analytics_JS;
}
/**
 * Wires Google Analytics abilities into WooCommerce's ability loader.
 */
class WC_Google_Analytics_Abilities
{
    /**
     * Initialize ability definition loading when WooCommerce supports it.
     *
     * @return void
     */
    public static function init(): void
    {
    }
    /**
     * Add Google Analytics ability definitions to WooCommerce's loader.
     *
     * @param array $classes Ability definition classes.
     * @return array
     */
    public static function add_ability_definition_classes(array $classes): array
    {
    }
}
/**
 * Setup Task class.
 */
class WC_Google_Analytics_Task extends \Automattic\WooCommerce\Admin\Features\OnboardingTasks\Task
{
    /**
     * Get the ID of the task.
     *
     * @return string
     */
    public function get_id()
    {
    }
    /**
     * Get the title for the task.
     *
     * @return string
     */
    public function get_title()
    {
    }
    /**
     * Get the content for the task.
     *
     * @return string
     */
    public function get_content()
    {
    }
    /**
     * Get the time required to perform the task.
     *
     * @return string
     */
    public function get_time()
    {
    }
    /**
     * Get the action URL for the task.
     *
     * @return string
     */
    public function get_action_url()
    {
    }
    /**
     * Check if the task is complete.
     *
     * @return bool
     */
    public function is_complete()
    {
    }
}
/**
 * Builds curated Google Analytics tracking settings snapshots.
 */
class WC_Google_Analytics_Tracking_Settings_Service
{
    /**
     * Google Analytics integration instance.
     *
     * @var WC_Google_Analytics
     */
    private $integration;
    /**
     * Constructor.
     *
     * @param WC_Google_Analytics $integration Google Analytics integration instance.
     */
    public function __construct(\WC_Google_Analytics $integration)
    {
    }
    /**
     * Get a curated tracking settings snapshot.
     *
     * @return array
     */
    public function get_tracking_settings(): array
    {
    }
    /**
     * Get the event setting map for tracking settings summaries.
     *
     * @return array
     */
    public static function get_event_settings_map(): array
    {
    }
    /**
     * Parse linker domains for API-oriented output.
     *
     * @param string $domains Comma-separated domains.
     * @return array
     */
    public static function parse_linker_domains(string $domains): array
    {
    }
    /**
     * Check whether a yes/no setting is enabled.
     *
     * @param string $setting Setting key.
     * @return bool
     */
    private function is_setting_enabled(string $setting): bool
    {
    }
    /**
     * Get enabled event names.
     *
     * @return array
     */
    private function get_enabled_events(): array
    {
    }
    /**
     * Get the measurement ID prefix used in tracking summaries.
     *
     * @param string $measurement_id Measurement ID.
     * @return string
     */
    private static function get_measurement_id_prefix(string $measurement_id): string
    {
    }
}
/**
 * Google Analytics for WooCommerce
 *
 * Allows tracking code to be inserted into store pages.
 *
 * @class   WC_Google_Analytics
 */
class WC_Google_Analytics extends \WC_Integration
{
    /**
     * Returns the proper class based on Gtag settings.
     *
     * @return WC_Abstract_Google_Analytics_JS
     */
    protected function get_tracking_instance()
    {
    }
    /**
     * Constructor
     * Init and hook in the integration.
     */
    public function __construct()
    {
    }
    /**
     * Conditionally display an error notice to the merchant if the stored property ID starts with "UA"
     *
     * @return void
     */
    public function universal_analytics_upgrade_notice()
    {
    }
    /**
     * Tells WooCommerce which settings to display under the "integration" tab
     */
    public function init_form_fields()
    {
    }
    /**
     * Shows some additional help text after saving the Google Analytics settings
     */
    public function show_options_info()
    {
    }
    /**
     * Hooks into woocommerce_tracker_data and tracks some of the analytic settings (just enabled|disabled status)
     * only if you have opted into WooCommerce tracking
     * https://woocommerce.com/usage-tracking/
     *
     * @param  array $data Current WC tracker data.
     * @return array       Updated WC Tracker data.
     */
    public function track_settings($data)
    {
    }
    /**
     * Add suggested privacy policy content
     *
     * @return void
     */
    public function privacy_policy()
    {
    }
    /**
     * Check if tracking is disabled
     *
     * @param  string $type The setting to check
     * @return bool         True if tracking for a certain setting is disabled
     */
    private function disable_tracking($type)
    {
    }
    /**
     * Add the utm_nooverride parameter to any return urls. This makes sure Google Adwords doesn't mistake the offsite gateway as the referrer.
     *
     * @param  string $return_url WooCommerce Return URL
     * @return string URL
     */
    public function utm_nooverride($return_url)
    {
    }
    /**
     * Check if the Google Analytics Tracking ID has been set up.
     *
     * @since 1.5.17
     *
     * @return bool Whether the Google Analytics setup is completed.
     */
    public function is_setup_complete()
    {
    }
    /**
     * Adds the setup task to the Tasklists.
     *
     * @since 1.5.17
     */
    public function add_wc_setup_task()
    {
    }
}
/**
 * WC_Google_Gtag_JS class
 *
 * JS for recording Google Gtag info
 */
class WC_Google_Gtag_JS extends \WC_Abstract_Google_Analytics_JS
{
    /** @var string $script_handle Handle for the front end JavaScript file */
    public $script_handle = 'woocommerce-google-analytics-integration';
    /** @var string $gtag_script_handle Handle for the gtag setup script */
    public $gtag_script_handle = 'woocommerce-google-analytics-integration-gtag';
    /** @var string $data_script_handle Handle for the event data inline script */
    public $data_script_handle = 'woocommerce-google-analytics-integration-data';
    /** @var string $script_data Data required for frontend event tracking */
    private $script_data = array();
    /** @var array $mappings A map of the GA4 events and the classic WooCommerce hooks that trigger them */
    private $mappings = array('actions' => array('begin_checkout' => 'woocommerce_before_checkout_form', 'purchase' => 'woocommerce_thankyou', 'add_to_cart' => 'woocommerce_add_to_cart', 'remove_from_cart' => 'woocommerce_cart_item_removed', 'view_item' => 'woocommerce_after_single_product'), 'filters' => array('view_item_list' => 'woocommerce_loop_add_to_cart_link'));
    /**
     * Constructor
     * Takes our settings from the parent class so we can later use them in the JS snippets
     *
     * @param array $settings Settings
     */
    public function __construct($settings = array())
    {
    }
    /**
     * Register manager and tracker scripts.
     * Call early so other extensions could add inline data to it.
     *
     * @return void
     */
    private function register_scripts(): void
    {
    }
    /**
     * Enqueue tracker scripts and its inline config.
     * We need to execute tracker.js w/ `gtag` configuration before any trackable action may happen.
     *
     * @return void
     */
    public function enqueue_tracker(): void
    {
    }
    /**
     * @deprecated 2.2.0 Use enqueue_tracker() instead.
     */
    public function enquque_tracker(): void
    {
    }
    /**
     * Add all event data via an inline script in the footer to ensure all the data is collected in time.
     *
     * @return void
     */
    public function inline_script_data(): void
    {
    }
    /**
     * Hook into WooCommerce and add corresponding Blocks Actions to our event data
     *
     * @return void
     */
    public function map_hooks(): void
    {
    }
    /**
     * Appends a specific event, if it's not included yet.
     *
     * @param string $gtag_event
     * @return void
     */
    private function append_event(string $gtag_event)
    {
    }
    /**
     * Set script data for a specific event
     *
     * @param string       $type The type of event this data is related to.
     * @param string|array $data The event data to add.
     *
     * @return void
     */
    public function set_script_data(string $type, $data): void
    {
    }
    /**
     * Append data to an existing script data array
     *
     * @param string       $type The type of event this data is related to.
     * @param string|array $data The event data to add.
     *
     * @return void
     */
    public function append_script_data(string $type, $data): void
    {
    }
    /**
     * Return a JSON encoded string of all script data for the current page load
     *
     * @return string
     */
    public function get_script_data(): string
    {
    }
    /**
     * Returns the tracker variable this integration should use
     *
     * @return string
     */
    public static function tracker_function_name(): string
    {
    }
    /**
     * Return Google Analytics configuration, for JS to read.
     *
     * @return array
     */
    public function get_site_tag_config(): array
    {
    }
    /**
     * Get validated cross-domain linker domains.
     *
     * @return array
     */
    private function get_linker_domains(): array
    {
    }
    /**
     * Query parameters stripped from the page URL and referrer reported to Google Analytics on every page.
     *
     * Names are matched case-insensitively. Independently of this list, any parameter whose value
     * looks like a WooCommerce order key, or carries one inside a nested URL, is stripped as well.
     *
     * @return string[]
     */
    public function get_redacted_url_params(): array
    {
    }
    /**
     * Slugs of the WooCommerce endpoints whose URLs carry an order key: order-received and order-pay.
     *
     * Read from WooCommerce's configured query vars (which honour the endpoint settings and the
     * `woocommerce_get_query_vars` filter), falling back to the stock slugs.
     *
     * @return string[]
     */
    public function get_order_page_endpoints(): array
    {
    }
    /**
     * Query parameters kept in the page URL reported to Google Analytics on order-received and
     * order-pay pages. Every other parameter is stripped there.
     *
     * @return string[]
     */
    public function get_order_page_allowed_url_params(): array
    {
    }
    /**
     * Configuration for the client-side URL redaction, passed to the `redactGtagConfig` helper.
     *
     * Returns an empty array when redaction is disabled, which the helper treats as "do nothing".
     *
     * @return array
     */
    public function get_url_redaction_config(): array
    {
    }
    /**
     * Lower-case, de-duplicate and reindex a list of query parameter names, dropping anything
     * that is not a non-empty string.
     *
     * @param mixed $names Parameter names, typically the output of a filter.
     * @return string[]
     */
    private static function normalize_url_param_names($names): array
    {
    }
    /**
     * Get an array containing the names of all enabled events
     *
     * @return array
     */
    public function get_enabled_events_for_settings(): array
    {
    }
    /**
     * Compatibility wrapper for the formerly static enabled-events formatter.
     *
     * @return array
     */
    public static function get_enabled_events(): array
    {
    }
    /**
     * Get the default state configuration of consent mode.
     */
    protected static function get_consent_modes(): array
    {
    }
    /**
     * Get the class instance
     *
     * @param array $settings Settings
     * @return WC_Abstract_Google_Analytics_JS
     */
    public static function get_instance($settings = array()): \WC_Abstract_Google_Analytics_JS
    {
    }
}
/**
 * Google Analytics for WooCommerce main class.
 */
class WC_Google_Analytics_Integration
{
    /** @var WC_Google_Analytics_Integration $instance Instance of this class. */
    protected static $instance = \null;
    /**
     * Initialize the plugin.
     */
    public function __construct()
    {
    }
    /**
     * Gets the settings page URL.
     *
     * @since 1.5.17
     *
     * @return string Settings URL
     */
    public function get_settings_url()
    {
    }
    /**
     * Add links on the plugins page (Settings & Support)
     *
     * @param  array $links Default links
     * @return array        Default + added links
     */
    public function plugin_links($links)
    {
    }
    /**
     * Return an instance of this class.
     *
     * @return WC_Google_Analytics_Integration A single instance of this class.
     */
    public static function get_instance()
    {
    }
    /**
     * Load the plugin text domain for translation.
     */
    public function load_plugin_textdomain()
    {
    }
    /**
     * WooCommerce fallback notice.
     */
    public function woocommerce_missing_notice()
    {
    }
    /**
     * Add a new integration to WooCommerce.
     *
     * @param  array $integrations WooCommerce integrations.
     * @return array               Google Analytics for WooCommerce added.
     */
    public function add_integration($integrations)
    {
    }
    /**
     * Get Google Analytics Integration
     *
     * @since 1.5.17
     *
     * @return WC_Google_Analytics The Google Analytics integration.
     */
    public static function get_integration()
    {
    }
    /**
     * Logic for Google Analytics Pro notices.
     */
    public function maybe_show_ga_pro_notices()
    {
    }
    /**
     * Set default options during activation if no settings exist
     *
     * @since 2.0.0
     *
     * @return void
     */
    public function maybe_set_defaults()
    {
    }
    /**
     * Get the path to something in the plugin dir.
     *
     * @param string $end End of the path.
     * @return string
     */
    public function path($end = '')
    {
    }
    /**
     * Get the URL to something in the plugin dir.
     *
     * @param string $end End of the URL.
     *
     * @return string
     */
    public function url($end = '')
    {
    }
    /**
     * Get the URL to something in the plugin JS assets build dir.
     *
     * @param string $end End of the URL.
     *
     * @return string
     */
    public function get_js_asset_url($end = '')
    {
    }
    /**
     * Get the path to something in the plugin JS assets build dir.
     *
     * @param string $end End of the path.
     * @return string
     */
    public function get_js_asset_path($end = '')
    {
    }
    /**
     * Gets the asset.php generated file for an asset name.
     *
     * @param string $asset_name The name of the asset to get the file from.
     * @return array The asset file. Or an empty array if the file doesn't exist.
     */
    public function get_js_asset_file($asset_name)
    {
    }
    /**
     * Gets the dependencies for an assets based on its asset.php generated file.
     *
     * @param string $asset_name The name of the asset to get the dependencies from.
     * @param array  $extra_dependencies Array containing extra dependencies to include in the dependency array.
     *
     * @return array The dependencies array. Empty array if no dependencies.
     */
    public function get_js_asset_dependencies($asset_name, $extra_dependencies = array())
    {
    }
    /**
     * Gets the version for an assets based on its asset.php generated file.
     *
     * @param string $asset_name The name of the asset to get the version from.
     * @return string|false The version. False in case no version is found.
     */
    public function get_js_asset_version($asset_name)
    {
    }
}
\define('WC_GOOGLE_ANALYTICS_INTEGRATION_VERSION', '2.4.4');
// WRCS: DEFINED_VERSION.
\define('WC_GOOGLE_ANALYTICS_INTEGRATION_MIN_WC_VER', '11.1');