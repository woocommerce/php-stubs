<?php
/**
 * Generated stub declarations for woocommerce-table-rate-shipping 3.7.4.
 * @see https://github.com/woocommerce/all-plugins/tree/stubs
 */

namespace WooCommerce\Shipping\Table_Rate {
    /**
     * Class for WooCommerce Blocks integration.
     */
    class Blocks_Integration implements \Automattic\WooCommerce\Blocks\Integrations\IntegrationInterface
    {
        /**
         * The name of the integration.
         *
         * @return string
         */
        public function get_name(): string
        {
        }
        /**
         * When called invokes any initialization/setup for the integratidon.
         */
        public function initialize()
        {
        }
        /**
         * Returns an array of script handles to enqueue in the frontend context.
         *
         * @return string[]
         */
        public function get_script_handles(): array
        {
        }
        /**
         * Returns an array of script handles to enqueue in the editor context.
         *
         * @return string[]
         */
        public function get_editor_script_handles(): array
        {
        }
        /**
         * An array of key, value pairs of data made available to the block on the client side.
         *
         * @return array
         */
        public function get_script_data(): array
        {
        }
        /**
         * Registers the scripts and styles for the integration.
         */
        public function register_scripts()
        {
        }
        /**
         * Register a script for the integration.
         *
         * @param string $handle Script handle.
         */
        protected function register_script(string $handle)
        {
        }
        /**
         * Get the file modified time as a cache buster if we're in dev mode.
         *
         * @param string $file Local path to the file.
         *
         * @return string The cache buster value to use for the given file.
         */
        protected function get_file_version(string $file): string
        {
        }
    }
    /**
     * Main Class.
     */
    class Helpers
    {
        /**
         * Get the shipping method database table name.
         *
         * @return string
         */
        public static function get_db_table_name(): string
        {
        }
        /**
         * Get raw shipping rates from the DB.
         *
         * Optional filter helper for integration with other plugins.
         *
         * @param int    $instance_id Shipping method instance ID.
         * @param string $output      Output format.
         *
         * @return mixed
         */
        public static function get_shipping_rates(int $instance_id, string $output = OBJECT)
        {
        }
        /**
         * Loop through the shipping rates and add flags to indicate if any rate's conditions conflict with another rate's conditions.
         *
         * @param array $shipping_rates array of shipping rates.
         *
         * @return array
         */
        public static function flag_conflicting_shipping_rates(array $shipping_rates): array
        {
        }
        /**
         * Get conflicting shipping rates.
         *
         * @param array $flagged_shipping_rates array of flagged shipping rates.
         *
         * @return array
         */
        public static function get_conflicting_shipping_rates(array $flagged_shipping_rates): array
        {
        }
        /**
         * Get conflicting shipping rates by instance ID.
         *
         * @param int $instance_id Shipping method instance ID.
         *
         * @return array
         */
        public static function get_conflicting_shipping_rates_by_instance_id(int $instance_id): array
        {
        }
        /**
         * Read one rate-row column out of $_POST.
         *
         * Every rate-row field is submitted as `name[<row index>]`, so a scalar means a malformed
         * request. Returning an empty array for one keeps the row loop from indexing a string,
         * where `$condition[0]` would silently yield `'w'` instead of `'weight'`.
         *
         * @param string $key $_POST key to read.
         *
         * @return array
         */
        private static function get_submitted_rate_column(string $key): array
        {
        }
        /**
         * Get an array of formatted rate values from the $_POST data.
         * Returns false if $_POST is empty.
         *
         * No nonce is verified here; that is the caller's responsibility. Both current callers sit
         * behind a `manage_woocommerce` check — maybe_add_error_notices_on_settings_saved() verifies
         * the `woocommerce-settings` nonce itself, and wc_table_rate_admin_shipping_rows_process() is
         * reached only from process_admin_options(). That second caller writes this return value to
         * the rates table, so do not add a caller without an equivalent gate.
         *
         * @return array|false
         */
        public static function get_formatted_table_rate_row_values_from_postdata()
        {
        }
        /**
         * Invalidate cached shipping rates after table rates change.
         *
         * WooCommerce keys its session rate cache by a package hash embedding the `shipping`
         * transient version, so bumping that version discards every cached rate at once —
         * and does so wherever transients are stored, making it object-cache safe.
         *
         * @return void
         *
         * @since 3.6.7
         */
        public static function flush_rates_cache(): void
        {
        }
        /**
         * Get the volume of a product (length × width × height).
         *
         * The value is expressed in the store's dimension unit cubed
         * (e.g. cm³, in³), as configured under WooCommerce > Settings > Products.
         *
         * @param \WC_Product $product Product object.
         *
         * @return float
         */
        public static function get_product_volume(\WC_Product $product): float
        {
        }
    }
    /**
     * Class for handling import/export of shipping instance settings.
     */
    class Shipping_Rates_Import_Export
    {
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Handle export action and generate CSV file.
         *
         * @return void
         */
        public function export_settings()
        {
        }
        /**
         * Register WordPress importer.
         *
         * @return void
         */
        public function register_importer()
        {
        }
        /**
         * Run importer.
         *
         * @return void
         */
        public function run_importer()
        {
        }
        /**
         * Enqueue necessary admin styles.
         */
        public function enqueue_styles()
        {
        }
    }
    /**
     * Class for importing table rates from CSV files.
     */
    class Shipping_Rates_Importer extends \WP_Importer
    {
        /**
         * Instance ID.
         *
         * @var int
         */
        private int $instance_id;
        /**
         * Dispatches the importer based on the current step.
         *
         * @return void
         */
        public function dispatch()
        {
        }
        /**
         * Checks whether an instance ID belongs to an existing Table Rate shipping method.
         *
         * @param int $instance_id Shipping method instance ID.
         *
         * @return bool
         */
        private function is_table_rate_instance(int $instance_id): bool
        {
        }
        /**
         * Columns that may be written by an import, mapped to their `$wpdb` format.
         *
         * `rate_id` is excluded so imported rows never target an existing row, and
         * `shipping_method_id` is set from the instance being imported into, not the file.
         *
         * @return array<string, string>
         */
        private function get_rate_columns(): array
        {
        }
        /**
         * Sanitizes a single imported rate value to match the admin save path.
         *
         * The importer is the one write path that bypasses WooCommerce's normal admin
         * save (`Helpers::update_shipping_rates()`), so it has to apply the same
         * per-field treatment: cost fields become decimals, everything else textual is
         * cleaned, and flags are cast. Cleaning the text fields is also what stops an
         * imported label carrying markup into the admin rates table.
         *
         * @param string $column    Column name.
         * @param mixed  $value     Raw value from the CSV cell.
         * @param string $format    `$wpdb` format for the column (`%d` or `%s`).
         * @param int    $precision Decimal precision for cost fields.
         *
         * @return string|int
         */
        private function sanitize_rate_value(string $column, $value, string $format, int $precision)
        {
        }
        /**
         * Imports shipping rates from a CSV file.
         *
         * @param string $file_path Path to uploaded CSV file.
         * @param bool   $override_table_rates Whether to override existing table rates.
         */
        private function import(string $file_path, bool $override_table_rates)
        {
        }
        /**
         * Displays the upload form for importing CSV file.
         *
         * @return void
         */
        private function upload_form()
        {
        }
    }
    /**
     * Store API Extension.
     */
    class Store_API_Extension
    {
        /**
         * Stores Rest Extending instance.
         *
         * @var \Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema
         */
        private static $extend;
        /**
         * Plugin Identifier, unique to each plugin.
         *
         * @var string
         */
        const IDENTIFIER = 'woocommerce_table_rate_shipping';
        /**
         * Bootstraps the class and hooks required data.
         *
         * @since 1.0.0
         */
        public static function init()
        {
        }
        /**
         * Registers the data into each endpoint.
         */
        public static function extend_store()
        {
        }
        /**
         * Store API extension data callback.
         *
         * @return array
         */
        public static function data()
        {
        }
        /**
         * Store API extension schema callback.
         *
         * @return array Registered schema.
         */
        public static function schema()
        {
        }
    }
}
namespace {
    /**
     * Privacy class.
     */
    class WC_Shipping_Table_Rate_Privacy extends \WC_Abstract_Privacy
    {
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Gets the message of the privacy to display.
         */
        public function get_privacy_message()
        {
        }
    }
    /**
     * Shipping method class.
     */
    class WC_Shipping_Table_Rate extends \WC_Shipping_Method
    {
        /**
         * Available table rates titles and costs.
         *
         * @var array
         */
        private $available_rates;
        /**
         * Method ID.
         *
         * @var string
         */
        public $id;
        /**
         * Instance ID.
         *
         * @var int
         */
        public $instance_id;
        /**
         * Decimal optipns.
         *
         * @var array
         */
        private $decimal_options = array('order_handling_fee', 'max_shipping_cost', 'handling_fee', 'min_cost', 'max_cost');
        /**
         * Order handling fee.
         *
         * @var float
         */
        protected $order_handling_fee;
        /**
         * Calculation type.
         *
         * @var string
         */
        protected $calculation_type;
        /**
         * Calculate the Min-Max after discount.
         *
         * @var boolean
         */
        protected $minmax_after_discount;
        /**
         * Calculate the Min-Max with tax.
         *
         * @var boolean
         */
        protected $minmax_with_tax;
        /**
         * Minimum cost value.
         *
         * @var float
         */
        protected $min_cost;
        /**
         * Maximum cost value.
         *
         * @var float
         */
        protected $max_cost;
        /**
         * Maximum cost that the customer will pay after all the shipping rules have been applied. If the shipping cost calculated is bigger than this value, this cost will be the one shown.
         *
         * @var float
         */
        protected $max_shipping_cost;
        /**
         * Name of the table rates in database.
         *
         * @var string
         */
        protected $rates_table;
        /**
         * Constructor.
         *
         * @param int $instance_id Instance ID.
         */
        public function __construct($instance_id = 0)
        {
        }
        /**
         * Gets and option from the settings API, using defaults if necessary to prevent undefined notices.
         *
         * @param  string $key Option key.
         * @param  mixed  $empty_value Value to return if option is empty.
         * @return mixed  The value specified for the option or a default value for the option.
         */
        public function get_option($key, $empty_value = \null)
        {
        }
        /**
         * Gets an option from the settings API, using defaults if necessary to prevent undefined notices.
         *
         * @param  string $key Option key.
         * @param  mixed  $empty_value Value to return if option is empty.
         * @return mixed  The value specified for the option or a default value for the option.
         */
        public function get_instance_option($key, $empty_value = \null)
        {
        }
        /**
         * Get settings fields for instances of this shipping method (within zones).
         * Should be overridden by shipping methods to add options.
         *
         * @since 3.0.0
         * @return array
         */
        public function get_instance_form_fields()
        {
        }
        /**
         * Return the name of the option in the WP DB.
         *
         * @since 3.0.0
         * @return string
         */
        public function get_instance_option_key()
        {
        }
        /**
         * Get calculation type descriptions.
         *
         * Returns an array of shipping rate calculation methods, each with a title and description
         * explaining how shipping is calculated at different levels (per item, line item, shipping class, or order).
         *
         * @return array
         */
        public function get_calculation_type_descs()
        {
        }
        /**
         * Generate calculation type description.
         */
        public function generate_calculation_type_description()
        {
        }
        /**
         * Initialise Settings for instances.
         *
         * @since 3.0.0
         */
        public function init_instance_settings()
        {
        }
        /**
         * Initialise Gateway Settings Form Fields
         */
        public function init_form_fields()
        {
        }
        /**
         * Admin options
         */
        public function admin_options()
        {
        }
        /**
         * Return admin options as a html string.
         *
         * @return string
         */
        public function get_admin_options_html()
        {
        }
        /**
         * Admin options.
         */
        public function instance_options()
        {
        }
        /**
         * Process admin options.
         */
        public function process_admin_options()
        {
        }
        /**
         * Process update options.
         *
         * This is called when the settings are saved in the admin.
         */
        public function process_update_tbr_options()
        {
        }
        /**
         * Check if the shipping method is available based on the package and cart.
         *
         * @param array $package Shipping package.
         * @return bool
         */
        public function is_available($package)
        {
        }
        /**
         * Get the items in class count.
         *
         * @param array $package Shipping package.
         * @param int   $class_id Class ID.
         * @return int
         */
        public function count_items_in_class($package, $class_id)
        {
        }
        /**
         * Get cart shipping class id.
         *
         * @param array $package Shipping package.
         * @return int
         */
        public function get_cart_shipping_class_id($package)
        {
        }
        /**
         * Rates query.
         *
         * @param array $args Rates args.
         * @return array
         */
        public function query_rates($args)
        {
        }
        /**
         * Get rates function.
         *
         * @param array $package Package to check.
         * @return bool|void
         */
        public function get_rates($package)
        {
        }
        /**
         * Unique function for overriding the prices including tax setting in WooCommerce.
         *
         * @since 3.0.27
         *
         * @return bool
         */
        public function override_prices_include_tax_setting()
        {
        }
        /**
         * Calculate shipping.
         *
         * @param array $package Shipping package.
         */
        public function calculate_shipping($package = array())
        {
        }
        /**
         * Get shipping rates with normalized values (respect decimal separator
         * settings), for display.
         *
         * @return array
         */
        public function get_normalized_shipping_rates()
        {
        }
        /**
         * Convert the product price to the base currency using WooCommerce Payments Multi-Currency.
         *
         * @param float $total_price Total product price.
         * @return float  Converted price in base currency.
         */
        private function maybe_convert_to_base_currency($total_price)
        {
        }
        /**
         * Retrieve the product price from a line item.
         *
         * @param object $_product Product object.
         * @param int    $qty      Line item quantity.
         * @param array  $item     Array of line item data.
         * @return float
         */
        public function get_product_price($_product, $qty = 1, $item = array())
        {
        }
        /**
         * Save the abort notice in the session (to display when shipping methods are loaded from cache).
         *
         * @since 3.0.19
         * @param string $message Message to show.
         * @param array  $package Shipping package.
         * @return void
         */
        private function add_notice($message, $package = \null)
        {
        }
        /**
         * Print the abort text if no other available rates.
         *
         * @param array $rates   Shipping rates.
         * @param array $package Shipping package.
         *
         * @return array
         */
        public function maybe_display_notice($rates, $package)
        {
        }
        /**
         * Unset the abort notice in the session.
         *
         * @param array $package Shipping package.
         * @since 3.0.25
         */
        private function unset_abort_message($package = \null)
        {
        }
        /**
         * Maybe add error notices when the settings are saved.
         *
         * @return void
         */
        public function maybe_add_error_notices_on_settings_saved()
        {
        }
    }
    /**
     * Main Class.
     */
    class WC_Table_Rate_Shipping
    {
        /**
         * Abort session key.
         *
         * @var string
         */
        public static $abort_key = 'wc_table_rate_abort';
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Register blocks integration.
         */
        public function register_blocks_integration()
        {
        }
        /**
         * Extend the store API.
         */
        public function extend_store_api()
        {
        }
        /**
         * We need to filter out woocommerce-table-rate-shipping from .org since that's a different
         * plugin and users should not be redirected there.
         *
         * Note that in case this plugin is not activated, users will still be taken to the wrong .org
         * site if they click on "View Details".
         *
         * See https://github.com/woocommerce/woocommerce-table-rate-shipping/issues/70 for more information.
         *
         * @param mixed $value List of plugins information.
         * @return array
         */
        public function filter_out_trs($value)
        {
        }
        /**
         * Register method for usage.
         *
         * @param  array $shipping_methods List of shipping methods.
         * @return array
         */
        public function woocommerce_shipping_methods($shipping_methods)
        {
        }
        /**
         * Init TRS.
         */
        public function init()
        {
        }
        /**
         * Declare High-Performance Order Storage (HPOS) compatibility
         *
         * @see https://github.com/woocommerce/woocommerce/wiki/High-Performance-Order-Storage-Upgrade-Recipe-Book#declaring-extension-incompatibility
         *
         * @return void
         */
        public function declare_hpos_compatibility()
        {
        }
        /**
         * Localisation.
         */
        public function load_plugin_textdomain()
        {
        }
        /**
         * Row meta.
         *
         * @param  array  $links List of plugin links.
         * @param  string $file  Current file.
         * @return array
         */
        public function plugin_row_meta($links, $file)
        {
        }
        /**
         * Admin styles + scripts.
         */
        public function admin_enqueue_scripts()
        {
        }
        /**
         * Enqueue front-end scripts.
         *
         * @return void
         */
        public function frontend_enqueue_scripts()
        {
        }
        /**
         * Load shipping class.
         */
        public function shipping_init()
        {
        }
        /**
         * Installer.
         */
        public function install()
        {
        }
        /**
         * Delete table rates when deleting shipping class.
         *
         * @param int $term_id Term ID.
         */
        public function update_deleted_shipping_class($term_id)
        {
        }
        /**
         * WooCommerce Deactivated Notice.
         */
        public function woocommerce_deactivated()
        {
        }
        /**
         * Show abort message when shipping methods are loaded from cache.
         *
         * @since 3.0.25
         * @return void
         */
        public function maybe_show_abort()
        {
        }
        /**
         * Create hash string based on package.
         *
         * @since 3.0.26
         * @param array $package Shipping package.
         * @return string
         */
        public static function create_package_hash($package)
        {
        }
    }
}
namespace {
    /**
     * The wc_table_rate_admin_shipping_rows function.
     *
     * @param WC_Shipping_Table_Rate $instance Current instance.
     */
    function wc_table_rate_admin_shipping_rows($instance)
    {
    }
    /**
     * The wc_table_rate_admin_shipping_class_priorities function.
     *
     * @param int $shipping_method_id Shipping Method Id.
     *
     * @return void
     */
    function wc_table_rate_admin_shipping_class_priorities($shipping_method_id)
    {
    }
    /**
     * WC_table_rate_admin_shipping_rows_process function.
     *
     * @param int $shipping_method_id Shipping Method Id.
     *
     * @return void
     */
    function wc_table_rate_admin_shipping_rows_process($shipping_method_id)
    {
    }
    /**
     * Delete table rate.
     *
     * @return void
     */
    function woocommerce_table_rate_delete()
    {
    }
    \define('TABLE_RATE_SHIPPING_VERSION', '3.7.4');
    \define('TABLE_RATE_SHIPPING_DEBUG', \defined('WP_DEBUG') && \WP_DEBUG && (!\defined('WP_DEBUG_DISPLAY') || \WP_DEBUG_DISPLAY));
    \define('WC_TABLE_RATE_SHIPPING_MAIN_FILE', __FILE__);
    \define('WC_TABLE_RATE_SHIPPING_MAIN_ABSPATH', \dirname(\WC_TABLE_RATE_SHIPPING_MAIN_FILE) . '/');
    \define('WC_TABLE_RATE_SHIPPING_PLUGIN_DIR', \plugin_dir_path(__FILE__));
    \define('WC_TABLE_RATE_SHIPPING_PLUGIN_URL', \plugin_dir_url(__FILE__));
    \define('WC_TABLE_RATE_SHIPPING_DIST_DIR', \WC_TABLE_RATE_SHIPPING_PLUGIN_DIR . 'dist/');
    \define('WC_TABLE_RATE_SHIPPING_DIST_URL', \WC_TABLE_RATE_SHIPPING_PLUGIN_URL . 'dist/');
    /**
     * Callback function for loading an instance of this method.
     *
     * This function appears to be unused internally. It is kept because its name
     * is a public, backward-compatible global symbol that third-party code may
     * call. Do not remove or rename it.
     *
     * @param mixed $instance Table Rate instance.
     * @return WC_Shipping_Table_Rate
     */
    function woocommerce_get_shipping_method_table_rate($instance = \false)
    {
    }
}