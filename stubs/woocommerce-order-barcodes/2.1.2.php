<?php
/**
 * Generated stub declarations for woocommerce-order-barcodes 2.1.2.
 * @see https://github.com/woocommerce/all-plugins/tree/stubs
 */

namespace {
    /**
     * Class WooCommerce_Order_Barcodes_Privacy
     *
     * A class to handle a privacy message.
     */
    class WooCommerce_Order_Barcodes_Privacy extends \WC_Abstract_Privacy
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
     * Class WooCommerce_Order_Barcodes_Settings.
     *
     * A class to handle the plugin settings.
     */
    class WooCommerce_Order_Barcodes_Settings
    {
        /**
         * The single instance of WooCommerce_Order_Barcodes_Settings.
         *
         * @var     object
         * @since   1.0.0
         * @static
         */
        private static $instance = \null;
        /**
         * The main plugin object.
         *
         * @var   object
         * @since 1.0.0
         */
        public $parent = \null;
        /**
         * Prefix for plugin settings.
         *
         * @var   string
         * @since 1.0.0
         */
        public $base = '';
        /**
         * Available settings for plugin.
         *
         * @var   array
         * @since 1.0.0
         */
        public $settings = array();
        /**
         * WooCommerce settings general object.
         *
         * @var WC_Settings_General
         */
        protected \WC_Settings_General $wc_settings_general;
        /**
         * Constructor
         *
         * @since 1.0.0
         * @param WooCommerce_Order_Barcodes $wc_order_barcodes Main plugin object.
         */
        public function __construct($wc_order_barcodes)
        {
        }
        // End __construct ()
        /**
         * Initialise settings
         *
         * @since  1.0.0
         * @return void
         */
        public function init_settings()
        {
        }
        // End init_settings ()
        /**
         * Get WooCommerce settings general object.
         *
         * @return WC_Settings_General
         */
        public function get_wc_settings_general(): \WC_Settings_General
        {
        }
        /**
         * Build settings fields
         *
         * @since  1.0.0
         * @return array Fields to be displayed on settings page
         */
        private function settings_fields()
        {
        }
        // End settings_fields ()
        /**
         * Markup for colour settings
         *
         * @since  1.0.0
         * @return void
         */
        public function colour_settings()
        {
        }
        // End colour_settings ().
        /**
         * Markup for background colour settings
         *
         * @since  1.0.0
         * @return void
         */
        public function bgcolor_settings()
        {
        }
        // End colour_settings ().
        /**
         * Save colour settings.
         *
         * @since  1.0.0
         * @return void
         */
        public function colour_settings_save()
        {
        }
        // End colour_settings_save ()
        /**
         * Add settings to WooCommerce General settings
         *
         * @since  1.0.0
         * @param  array $settings Default settings.
         * @return array           Modified settings
         */
        public function add_settings($settings = array())
        {
        }
        // End add_settings ()
        /**
         * Load assets
         *
         * @since  1.0.0
         * @param  string $hook_suffix Current hook.
         * @return void
         */
        public function load_assets($hook_suffix = '')
        {
        }
        // End load_assets ()
        /**
         * Add settings link to plugin list table
         *
         * @since  1.0.0
         * @param  array $links Existing links.
         * @return array        Modified links
         */
        public function add_settings_link($links)
        {
        }
        // End add_settings_link ()
        /**
         * Main class instance - ensures only one instance of the class is loaded or can be loaded.
         *
         * @since  1.0.0
         * @static
         *
         * @param  WooCommerce_Order_Barcodes $wc_order_barcodes `WooCommerce_Order_Barcodes` object.
         * @see    WC_Order_Barcodes()
         * @return WooCommerce_Order_Barcodes_Settings instance
         */
        public static function instance($wc_order_barcodes)
        {
        }
        // End instance ()
        /**
         * Cloning is forbidden
         *
         * @since  1.0.0
         */
        public function __clone()
        {
        }
        // End __clone ()
        /**
         * Unserializing instances of this class is forbidden
         *
         * @since  1.0.0
         */
        public function __wakeup()
        {
        }
        // End __wakeup ()
    }
}
namespace WooCommerce\OrderBarcodes {
    /**
     * Trait Order_Util
     *
     * A proxy-style trait that will help keep our code more stable and cleaner during the
     * transition to WC Custom Order Tables.
     */
    trait Order_Util
    {
        /**
         * Constant variable for OrderUtil class.
         *
         * @var string
         */
        public static $wc_order_util_class = 'Automattic\WooCommerce\Utilities\OrderUtil';
        /**
         * Constant variable for admin screen name.
         *
         * @var string
         */
        public static $legacy_order_admin_screen = 'shop_order';
        /**
         * Checks whether the OrderUtil class exists
         *
         * @return bool
         */
        public function wc_order_util_class_exists()
        {
        }
        /**
         * Checks whether the OrderUtil class and the given method exist
         *
         * @param String $method_name Class method name.
         *
         * @return bool
         */
        public function wc_order_util_method_exists($method_name)
        {
        }
        /**
         * Checks whether we are using custom order tables.
         *
         * @return bool
         */
        public function custom_orders_table_usage_is_enabled()
        {
        }
        /**
         * Returns the relevant order screen depending on whether
         * custom order tables are being used.
         *
         * @return string
         */
        public function get_order_admin_screen()
        {
        }
        /**
         * Check if the object is WP_Post object.
         *
         * @param Mixed $post_or_order Either Post object or Order object.
         *
         * @return Boolean
         */
        public function is_wp_post($post_or_order)
        {
        }
        /**
         * Check if the object is WC_Order object.
         *
         * @param Mixed $post_or_order Either Post object or Order object.
         *
         * @return Boolean
         */
        public function is_wc_order($post_or_order)
        {
        }
        /**
         * Check if the object is either WP_Post or WC_Order object.
         *
         * @param Mixed $post_or_order Either Post object or Order object.
         *
         * @return Boolean
         */
        public function is_order_or_post($post_or_order)
        {
        }
        /**
         * Returns the WC_Order object from the object passed to
         * the add_meta_box callback function.
         *
         * @param \WC_Order|\WP_Post $post_or_order_object Either Post object or Order object.
         *
         * @return \WC_Order
         */
        public function init_theorder_object($post_or_order_object)
        {
        }
        /**
         * Get order status with 'wc-' prefix from order object.
         *
         * @param \WC_Order $order Order object.
         *
         * @return bool|string
         */
        public function get_order_status($order)
        {
        }
        /**
         * Return error text for unready barcode.
         *
         * @return string
         */
        public function barcode_not_ready_error_text()
        {
        }
    }
}
namespace {
    /**
     * Class WooCommerce_Order_Barcodes.
     *
     * @package woocommerce-order-barcodes
     */
    class WooCommerce_Order_Barcodes
    {
        use \WooCommerce\OrderBarcodes\Order_Util;
        /**
         * The single instance of WooCommerce_Order_Barcodes.
         *
         * @var   ?self
         * @since 1.0.0
         */
        private static ?self $instance = \null;
        /**
         * Settings class object
         *
         * @var   ?WooCommerce_Order_Barcodes_Settings
         * @since 1.0.0
         */
        public ?\WooCommerce_Order_Barcodes_Settings $settings = \null;
        /**
         * The version number.
         *
         * @var   string
         * @since 1.0.0
         */
        public string $version;
        /**
         * The token.
         *
         * @var   string
         * @since 1.0.0
         */
        public string $token;
        /**
         * The main plugin file.
         *
         * @var   string
         * @since 1.0.0
         */
        public string $file;
        /**
         * The main plugin directory.
         *
         * @var   string
         * @since 1.0.0
         */
        public string $dir;
        /**
         * The plugin assets directory.
         *
         * @var   string
         * @since 1.0.0
         */
        public string $assets_dir;
        /**
         * The plugin assets URL.
         *
         * @var   string
         * @since 1.0.0
         */
        public string $assets_url;
        /**
         * Suffix for Javascript.
         *
         * @var   string
         * @since 1.0.0
         */
        public string $script_suffix;
        /**
         * Barcode enabled or not.
         *
         * @var   string
         * @since 1.6.4
         */
        public string $barcode_enable;
        /**
         * Type of barcode to be used.
         *
         * @var   string
         * @since 1.0.0
         */
        public string $barcode_type = 'code128';
        /**
         * Type of barcode generator class to be used.
         *
         * @var WooCommerce_Order_Barcodes_Generator_Tclib
         */
        public \WooCommerce_Order_Barcodes_Generator_Tclib $barcode_generator;
        /**
         * Color of barcode.
         *
         * @var   array
         * @since 1.0.0
         */
        public array $barcode_colours;
        /**
         * Constructor function.
         *
         * @since   1.0.0
         * @param   string $file    Plugin file.
         * @param   string $version Plugin version.
         * @return  void
         */
        public function __construct(string $file = \WC_ORDER_BARCODES_FILE, string $version = \WC_ORDER_BARCODES_VERSION)
        {
        }
        /**
         * Add barcode to order meta.
         *
         * @since   1.0.0
         * @param   int $order_id Order ID.
         * @return  void
         */
        public function update_order_meta(int $order_id = 0): void
        {
        }
        /**
         * Generate unique barcode.
         *
         * @since  1.0.0
         * @param  int $order_id The ID of the order post.
         * @return void
         */
        public function generate_barcode(int $order_id): void
        {
        }
        /**
         * Save barcode via ajax.
         *
         * @since  1.0.0
         * @return void
         */
        public function save_barcode(): void
        {
        }
        /**
         * Get text string for barcode.
         *
         * @since  1.0.0
         * @return string
         */
        public function get_barcode_string(): string
        {
        }
        // End get_barcode_string ()
        /**
         * Get barcode for display in an email.
         *
         * @since  1.0.0
         * @param  WC_Order $order WC_Order object.
         * @return void
         */
        public function get_email_barcode(\WC_Order $order): void
        {
        }
        /**
         * Get barcode for frontend display
         *
         * @since   1.0.0
         * @param  WC_Order $order WC_Order object.
         * @return void
         */
        public function get_display_barcode(\WC_Order $order): void
        {
        }
        /**
         * Add barcode meta box to order edit screen
         *
         * @since   1.0.0
         * @param   string           $post_type Current post type.
         * @param   WP_Post|WC_Order $post_or_order_object Either Post object or Order object.
         * @return  void
         */
        public function add_order_metabox(string $post_type, $post_or_order_object): void
        {
        }
        /**
         * Get barcode for display in the order metabox
         *
         * @since  1.0.0
         * @param  WP_Post|WC_Order $post_or_order_object Order post object.
         * @return void
         */
        public function get_metabox_barcode($post_or_order_object): void
        {
        }
        /**
         * Maybe displaying barcode.
         *
         * @param WC_Order $order Order object.
         *
         * @return string
         */
        public function maybe_display_barcode(\WC_Order $order): string
        {
        }
        /**
         * Display barcode as an image
         *
         * @since 1.0.0
         *
         * @param int  $order_id Order ID.
         * @param bool $image    Display as an image (default false).
         *
         * @return string The generated barcode.
         */
        public function display_barcode(int $order_id = 0, bool $image = \false): string
        {
        }
        /**
         * Get the URL for a given order's barcode
         *
         * @since 1.0.0
         *
         * @param  int $order_id Order ID.
         *
         * @return string  URL for barcode.
         */
        public function barcode_url(int $order_id = 0): string
        {
        }
        /**
         * Form for scanning barcodes
         *
         * @param array $params Shortcode parameters.
         *
         * @return string Form markup
         */
        public function barcode_scan_form(array $params = array()): string
        {
        }
        // End barcode_scan_form ()
        /**
         * Process scanning/input of barcode
         *
         * @return void
         */
        public function scan_barcode(): void
        {
        }
        // End scan_barcode ()
        /**
         * Display custom WooCommerce notice.
         *
         * @param string $message Message text.
         * @param string $type    Type of notice.
         *
         * @return void
         */
        public function display_notice(string $message = '', string $type = 'success'): void
        {
        }
        /**
         * Retrieve order ID from barcode.
         *
         * @param string $barcode Scanned barcode.
         *
         * @return int Order ID
         */
        public function get_barcode_order_before_wc_310(string $barcode = ''): int
        {
        }
        // End get_barcode_order ()
        /**
         * Retrieve order ID from barcode.
         *
         * @param string $barcode Scanned barcode.
         *
         * @return int Order ID
         */
        public function get_barcode_order(string $barcode = ''): int
        {
        }
        // End get_barcode_order ()
        /**
         * Display check in status field on order edit screen
         *
         * @since  1.0.0
         * @param  WC_Order $order WC_Order object.
         * @return void
         */
        public function checkin_status_edit_field(\WC_Order $order): void
        {
        }
        // End checkin_status_edit_field ()
        /**
         * Save check in status on order edit screen
         *
         * @param int $post_id Order post ID.
         *
         * @return  void
         * @since 1.0.0
         */
        public function checkin_status_edit_save(int $post_id): void
        {
        }
        // End checkin_status_edit_save ()
        /**
         * Remove the _barcode_image metadata from REST API responses.
         *
         * @param WP_REST_Response $response WP_REST_Response.
         *
         * @return  WP_REST_Response
         *
         * @since 1.3.1
         */
        public function remove_barcode_from_api_response(\WP_REST_Response $response): \WP_REST_Response
        {
        }
        /**
         * Add the barcode URL in REST API responses.
         *
         * @param   WP_REST_Response $response       WP_REST_Response.
         * @param   WC_Order         $maybe_wc_order WC_Order Object.
         *
         * @return  WP_REST_Response  $response
         * @since   1.3.24
         */
        public function add_barcode_url_in_api_response(\WP_REST_Response $response, \WC_Order $maybe_wc_order): \WP_REST_Response
        {
        }
        /**
         * Register all required JS & CSS for admin.
         *
         * @since   1.0.0
         * @since   1.3.19 Isolate to admin assets.
         * @return  void
         */
        public function register_admin_assets(): void
        {
        }
        /**
         * Load onscan js library.
         *
         * @since 1.3.19
         * @return void
         */
        public function load_onscan_js(): void
        {
        }
        /**
         * Register all required JS & CSS for frontend.
         *
         * @since   1.0.0
         * @since   1.3.19 Isolate to frontend assets.
         * @return  void
         */
        public function register_frontend_assets(): void
        {
        }
        /**
         * Load JS & CSS required for barcode generation
         *
         * @since   1.0.0
         * @since   1.3.19 Remove deprecated qr code script.
         * @return  void
         */
        public function load_barcode_assets(): void
        {
        }
        /**
         * Get barcode image.
         *
         * @since   1.0.0
         * @return  void
         */
        public function get_barcode_image(): void
        {
        }
        /**
         * Add new tools action button.
         *
         * @param array $tools List of tools action.
         *
         * @result array
         */
        public function add_new_tools_action(array $tools): array
        {
        }
        /**
         * Save Order meta.
         *
         * @param int    $order_id The ID of the order post.
         * @param string $meta_name The name of the meta.
         * @param mixed  $meta_value The value of the meta.
         *
         * @return bool
         */
        public function save_order_meta(int $order_id, string $meta_name, $meta_value): bool
        {
        }
        /**
         * Get Order or post meta value.
         *
         * @param int    $id The ID of the order or post.
         * @param string $meta_name The name of the meta.
         */
        public function get_order_or_post_meta(int $id, string $meta_name)
        {
        }
        /**
         * Generate barcode for existing orders before WC version 3.1.0.
         */
        public function generate_barcode_for_existing_orders_before_wc_310(): void
        {
        }
        /**
         * Generate barcode for existing orders.
         */
        public function generate_barcode_for_existing_orders(): void
        {
        }
        /**
         * Modify the wc_get_orders query.
         *
         * @param array $query_vars Query variable.
         *
         * @return array
         */
        public function modify_get_orders_query_cot(array $query_vars): array
        {
        }
        /**
         * Modify the wc_get_orders query.
         *
         * @param array $query Query variable.
         * @param array $query_vars Query variable.
         *
         * @return array
         */
        public function modify_get_orders_query(array $query, array $query_vars): array
        {
        }
        /**
         * Main class instance - ensures only one instance of the class is loaded or can be loaded
         *
         * @param string $file Path of file.
         * @param string $version Version of the plugin.
         *
         * @return WooCommerce_Order_Barcodes WooCommerce_Order_Barcodes instance
         * @see    WC_Order_Barcodes()
         * @since  1.0.0
         * @static
         */
        public static function instance(string $file = \WC_ORDER_BARCODES_FILE, string $version = \WC_ORDER_BARCODES_VERSION): ?\WooCommerce_Order_Barcodes
        {
        }
        // End instance ()
        /**
         * Cloning is forbidden.
         *
         * @since  1.0.0
         */
        public function __clone()
        {
        }
        // End __clone ()
        /**
         * Unserializing instances of this class is forbidden.
         *
         * @since  1.0.0
         */
        public function __wakeup()
        {
        }
        // End __wakeup ()
    }
}
namespace {
    /**
     * Fetch a barcode for a given order
     *
     * @param int    $order_id Order ID.
     * @param string $before   Content to display before the barcode.
     * @param string $after    Content to display after the barcode.
     *
     * @return string            Order barcode
     */
    function wc_order_barcode($order_id = 0, $before = '', $after = '')
    {
    }
    /**
     * Returns the main instance of WooCommerce_Order_Barcodes to prevent the need to use globals.
     *
     * @since  1.0.0
     * @return WooCommerce_Order_Barcodes WooCommerce_Order_Barcodes instance
     */
    function WC_Order_Barcodes()
    {
    }
    \define('WC_ORDER_BARCODES_VERSION', '2.1.2');
    // WRCS: DEFINED_VERSION.
    \define('WC_ORDER_BARCODES_FILE', __FILE__);
    \define('WC_ORDER_BARCODES_DIR_PATH', \untrailingslashit(\plugin_dir_path(\WC_ORDER_BARCODES_FILE)));
    \define('WC_ORDER_BARCODES_DIR_URL', \untrailingslashit(\plugins_url('/', \WC_ORDER_BARCODES_FILE)));
    /**
     * Activation function.
     */
    function wc_order_barcodes_activate(): void
    {
    }
    /**
     * Initialize plugin.
     */
    function wc_order_barcodes_init()
    {
    }
    /**
     * Initialize WC_Order_Barcodes instance.
     *
     * @return void
     */
    function wc_order_barcodes_init_instance(): void
    {
    }
    /**
     * Load plugin classes.
     */
    function wc_order_barcodes_load_classes()
    {
    }
    /**
     * WooCommerce feature compatibility declaration.
     *
     * @return void
     */
    function wc_order_barcodes_compatibility_declaration(): void
    {
    }
    /**
     * Load localization.
     */
    function wc_order_barcodes_load_textdomain(): void
    {
    }
    /**
     * WooCommerce Deactivated Notice.
     */
    function wc_order_barcodes_woocommerce_deactivated(): void
    {
    }
}