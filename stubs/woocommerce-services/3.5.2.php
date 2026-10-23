<?php
/**
 * Generated stub declarations for woocommerce-services 3.5.2.
 * @see https://github.com/woocommerce/php-stubs
 */

namespace {
    class WC_Connect_Account_Settings
    {
        /**
         * @var WC_Connect_Service_Settings_Store
         */
        protected $settings_store;
        /**
         * @var WC_Connect_Payment_Methods_Store
         */
        protected $payment_methods_store;
        public function __construct(\WC_Connect_Service_Settings_Store $settings_store, \WC_Connect_Payment_Methods_Store $payment_methods_store)
        {
        }
        public function get()
        {
        }
    }
    abstract class WC_Connect_API_Client
    {
        const API_VERSION = \WOOCOMMERCE_CONNECT_SERVER_API_VERSION;
        const SIFT_CONFIG_TRANSIENT_KEY = 'wc_connect_sift_configuration';
        /**
         * @var WC_Connect_Services_Validator
         */
        protected $validator;
        /**
         * @var WC_Connect_Loader
         */
        protected $wc_connect_loader;
        public function __construct(\WC_Connect_Service_Schemas_Validator $validator, \WC_Connect_Loader $wc_connect_loader)
        {
        }
        /**
         * Requests the available services for this site from the WooCommerce Tax Server
         *
         * @return array|WP_Error
         */
        public function get_service_schemas()
        {
        }
        /**
         * Validates the settings for a given service with the WooCommerce Tax Server
         *
         * @param $service_slug
         * @param $service_settings
         *
         * @return bool|WP_Error
         */
        public function validate_service_settings($service_slug, $service_settings)
        {
        }
        /**
         * Build the server's expected contents array, for rates requests.
         *
         * @param $package Package provided to WC_Shipping_Method::calculate_shipping()
         *
         * @return array|WP_Error {
         *      @type float $height Product height.
         *      @type float $width Product width.
         *      @type float $length Product length.
         *      @type int $product_id Product ID (or Variation ID).
         *      @type int $quantity Quantity of product in shipment.
         *      @type float $weight Product weight.
         * }
         */
        public function build_shipment_contents($package)
        {
        }
        /**
         * Gets shipping rates (for checkout) from the WooCommerce Tax Server
         *
         * @param $services All settings for all services we want rates for
         * @param $package Package provided to WC_Shipping_Method::calculate_shipping()
         * @param $custom_boxes array of custom boxes definitions (objects)
         * @param $predefined_boxes array of enabled predefined box IDs (strings)
         *
         * @return object|WP_Error
         */
        public function get_shipping_rates($services, $package, $custom_boxes, $predefined_boxes)
        {
        }
        /**
         * Send rates request information to track subscription events
         *
         * @param array $services Array of service settings for shipping methods.
         *
         * @return object|WP_Error
         */
        public function track_subscription_event($services)
        {
        }
        public function send_shipping_label_request($body)
        {
        }
        public function send_address_normalization_request($body)
        {
        }
        /**
         * Asks the WooCommerce Tax server for an array of payment methods
         *
         * @return mixed|WP_Error
         */
        public function get_payment_methods()
        {
        }
        /**
         * Retrieve Sift configurations.
         *
         * @param bool $blocking Whether to make a blocking request if not cached. Default false.
         * @return object|WP_Error
         */
        public function get_sift_configuration($blocking = \false)
        {
        }
        /**
         * Gets shipping rates (for labels) from the WooCommerce Tax Server
         *
         * @param array $request - array(
         *  'packages' => array(
         *      array(
         *          'id' => 'box_1',
         *          'height' => 10,
         *          'length' => 10,
         *          'width' => 10,
         *          'weight' => 10,
         *      ),
         *      array(
         *          'id' => 'box_2',
         *          'box_id' => 'medium_flat_box_top',
         *          'weight' => 5,
         *      ),
         *      ...
         *  ),
         *  'carrier' => 'usps',
         *  'origin' => array(
         *      'address' => '132 Hawthorne St',
         *      'address_2' => '',
         *      'city' => 'San Francisco',
         *      'state' => 'CA',
         *      'postcode' => '94107',
         *      'country' => 'US',
         *  ),
         *  'destination' => array(
         *      'address' => '1550 Snow Creek Dr',
         *      'address_2' => '',
         *      'city' => 'Park City',
         *      'state' => 'UT',
         *      'postcode' => '84060',
         *      'country' => 'US',
         *  ),
         * )
         * @return object|WP_Error
         */
        public function get_label_rates($request)
        {
        }
        /**
         * Gets a PDF with the set of dummy labels specified in the request
         *
         * @param $request
         * @return object|WP_Error
         */
        public function get_labels_preview_pdf($request)
        {
        }
        /**
         * Gets a PDF with the requested shipping labels in it
         *
         * @param $request
         * @return object|WP_Error
         */
        public function get_labels_print_pdf($request)
        {
        }
        /**
         * Gets the shipping label status (refund status, tracking code, etc)
         *
         * @param $label_id integer
         * @return object|WP_Error
         */
        public function get_label_status($label_id)
        {
        }
        /**
         * Gets the shipping label status (refund status, tracking code, etc)
         *
         * @param $order_id integer
         * @return object|WP_Error
         */
        public function anonymize_order($order_id)
        {
        }
        /**
         * Request a refund for a given shipping label
         *
         * @param $label_id integer
         * @return object|WP_Error
         */
        public function send_shipping_label_refund_request($label_id)
        {
        }
        /**
         * Gets the configured carrier accounts
         *
         * @param $request
         * @return object|WP_Error
         */
        public function get_carrier_accounts()
        {
        }
        /**
         * Disconnects the provided carrier account
         *
         * @param $carrier_id
         * @return object|WP_Error
         */
        public function disconnect_carrier_account($carrier_id)
        {
        }
        /**
         * Register a new carrier account
         *
         * @param $body
         * @return object|WP_Error
         */
        public function create_shipping_carrier_account($body)
        {
        }
        /**
         * Get a list of the subscriptions for WooCommerce.com linked account.
         *
         * @param $body
         * @param object|WP_Error
         */
        public function get_wccom_subscriptions()
        {
        }
        /**
         * Get all carriers we support for registration. This end point
         * returns a list of "fields" that we use to register the carrier
         * account.
         *
         * @return object|WP_Error
         */
        public function get_carrier_types()
        {
        }
        /**
         * Tests the connection to the WooCommerce Tax Server
         *
         * @return true|WP_Error
         */
        public function auth_test()
        {
        }
        /** Heartbeat test.
         *
         * @return true|WP_Error
         */
        public function is_alive()
        {
        }
        /** Heartbeat test with a transient cache.
         *
         * @return true|WP_Error
         */
        public function is_alive_cached()
        {
        }
        /**
         * Activate a subscrption with WCCOM API.
         *
         * @param  string $subscription_key Product Key on WCCOM.
         * @return WP_Error|Array  API Response.
         */
        public function activate_subscription($subscription_key)
        {
        }
        /**
         * Sends a request to the WooCommerce Tax Server
         *
         * @param $method
         * @param $path
         * @param $body
         * @return mixed|WP_Error
         */
        abstract protected function request($method, $path, $body = array());
        /**
         * Proxy an HTTP request through the WCS Server
         *
         * @param $path Path of proxy route
         * @param $args WP_Http request args
         *
         * @return array|WP_Error
         */
        public function proxy_request($path, $args)
        {
        }
        /**
         * Get useful settings values for use in a requests
         *
         * @return array
         */
        protected function get_settings_values()
        {
        }
        /**
         * Add useful WP/WC/WCC information for use in a request header
         *
         * @return json
         */
        protected function get_request_additional_header()
        {
        }
        /**
         * Adds useful WP/WC/WCC information to request bodies
         *
         * @param array $initial_body
         * @return array
         */
        protected function request_body($initial_body = array())
        {
        }
        /**
         * Generates headers for our request to the WooCommerce Tax Server
         *
         * @return array|WP_Error
         */
        protected function request_headers()
        {
        }
        protected function authorization_header()
        {
        }
        /**
         * Generate a signature for WCCOM API request validation.
         *
         * @param string $token_secret
         * @param string $endpoint
         * @param string $method
         * @param array  $body
         * @return string
         */
        protected function request_signature_wccom($token_secret, $endpoint, $method, $body = array())
        {
        }
        protected function request_signature($token_key, $token_secret, $timestamp, $nonce, $time_diff)
        {
        }
        private function get_guid()
        {
        }
        /**
         * Generates a GUID.
         * This code is based of a snippet found in https://github.com/alixaxel/phunction,
         * which was referenced in http://php.net/manual/en/function.com-create-guid.php
         *
         * @return string
         */
        private function generate_guid()
        {
        }
    }
    class WC_Connect_API_Client_Live extends \WC_Connect_API_Client
    {
        protected function request($method, $path, $body = array())
        {
        }
    }
    /**
     * Validates the shipping info in the cart.
     */
    class WC_Connect_Cart_Validation
    {
        /**
         * Needed to keep track of the current package being processed.
         *
         * @var array
         */
        private $current_package;
        /**
         * Register actions when required instead of using constructor.
         */
        public function register_actions()
        {
        }
        /**
         * Register filters when required instead of using constructor.
         */
        public function register_filters()
        {
        }
        /**
         * We use this filter to store the current package array because it's not passed to the woocommerce_cart_no_shipping_available_html filter.
         *
         * @param string $package_name Package Name.
         * @param int    $i Index.
         * @param array  $package Current package we need to store.
         *
         * @return mixed
         */
        public function set_current_package($package_name, $i, $package)
        {
        }
        /**
         * More friendly error message when WCS has an error.
         *
         * @param string $error_html Generic error message from WC.
         * @return string
         */
        public function error_no_shipping_available_html($error_html)
        {
        }
        /**
         * Check the error on the first load at Cart and Checkout page that has cart block or checkout block.
         *
         * @param \WP_Error $cart_errors List of errors in the cart.
         * @param \WC_Cart  $cart Cart object.
         */
        public function add_api_cart_errors($cart_errors, $cart)
        {
        }
    }
    /**
     * WC_Connect_Compatibility class.
     */
    abstract class WC_Connect_Compatibility
    {
        /**
         * WC_Connect_Compatibility.
         *
         * @var WC_Connect_Compatibility
         */
        private static $singleton;
        /**
         * Woocommerce version.
         *
         * @var string
         */
        private static $version = \WC_VERSION;
        /**
         * WC_Connect_Compatibility singleton instance.
         *
         * @return WC_Connect_Compatibility
         */
        public static function instance()
        {
        }
        /**
         * Return subclass for active version of WooCommerce.
         *
         * @return WC_Connect_Compatibility subclass for active version of WooCommerce
         */
        private static function select_compatibility()
        {
        }
        /**
         * Overwrite default WooCommerce Version.
         *
         * @param string $value WooCommerce Version.
         * @return void
         */
        public static function set_version($value)
        {
        }
        /**
         * Revert to current WooCommerce Version.
         *
         * @return void
         */
        public static function reset_version()
        {
        }
        /**
         * Return the order admin screen
         *
         * @return string The order admin screen
         */
        abstract public function get_order_admin_screen();
        /**
         * Helper function to initialize the global $theorder object, mostly used during order meta boxes rendering.
         *
         * @param WC_Order|WP_Post $post_or_order_object Post or order object.
         *
         * @return bool|WC_Order|WC_Order_Refund.
         */
        abstract public function init_theorder_object($post_or_order_object);
    }
    /**
     * WC_Connect_Compatibility class.
     */
    class WC_Connect_Compatibility_WC30 extends \WC_Connect_Compatibility
    {
        /**
         * Return the order admin screen
         *
         * @return string The order admin screen
         */
        public function get_order_admin_screen()
        {
        }
        /**
         * Helper function to initialize the global $theorder object, mostly used during order meta boxes rendering.
         *
         * @param WC_Order|WP_Post $post_or_order_object Post or order object.
         *
         * @return bool|WC_Order|WC_Order_Refund
         */
        public function init_theorder_object($post_or_order_object)
        {
        }
    }
    /**
     * WC_Connect_Compatibility class.
     */
    class WC_Connect_Compatibility_WC69 extends \WC_Connect_Compatibility
    {
        /**
         * Return the order admin screen
         *
         * @return string The order admin screen
         */
        public function get_order_admin_screen(): string
        {
        }
        /**
         * Helper function to initialize the global $theorder object, mostly used during order meta boxes rendering.
         *
         * @param WC_Order|WP_Post $post_or_order_object Post or order object.
         *
         * @return bool|WC_Order|WC_Order_Refund WC_Order object.
         */
        public function init_theorder_object($post_or_order_object)
        {
        }
    }
    /**
     * Replaces saved package data with WooCommerce Shipping's if it is active.
     *
     * Redirects reads of and writes to wc_connect_options[packages] to wcshipping_options[packages].
     *
     * @since x.x.x
     */
    class WC_Connect_Compatibility_WCShipping_Packages
    {
        /**
         * Number WCShipping uses to indicate data migration from WCS&T has completed.
         *
         * @var int
         */
        const WCSHIP_DATA_MIGRATION_COMPLETED = 14;
        /**
         * Mapping of WCShipping keys => WCS&T keys.
         *
         * @var array
         */
        const WCSHIPPING_TO_WCSERVICES_KEY_MAP = array('boxWeight' => 'box_weight', 'dimensions' => 'inner_dimensions', 'maxWeight' => 'max_weight');
        /**
         * Keys that are allowed in packages mapped to the WCS&T package data format.
         *
         * Other keys will be removed.
         *
         * @var array
         */
        const KEYS_USED_BY_WCSERVICES = array('box_weight', 'inner_dimensions', 'is_letter', 'is_user_defined', 'max_weight', 'name');
        /**
         * Keys that are allowed in packages mapped to the WCShipping package data format.
         *
         * Other keys will be removed.
         *
         * @var array
         */
        const KEYS_USED_BY_WCSHIPPING = array('boxWeight', 'dimensions', 'id', 'is_user_defined', 'maxWeight', 'name', 'type');
        /**
         * Registers all, some, or no hooks based on store configuration.
         *
         * @return void
         */
        public static function maybe_enable()
        {
        }
        /**
         * Enqueue REST controller registration after WCS&T has finished initializing its other controllers.
         *
         * @return void
         */
        public static function register_rest_controller_hooks()
        {
        }
        /**
         * Registers hooks intercepting reads/writes to "wc_connect_options".
         *
         * This is done to replace the keys "packages" and "predefined_packages" with values from WCShipping's options
         * after doing some mapping.
         *
         * @return void
         */
        public static function register_option_overwriting_hooks()
        {
        }
        /**
         * Replaces `wc_connect_options[packages]` with mapped values from `wcshipping_options[packages]`.
         *
         * Leaves the rest of `wc_connect_options` intact.
         *
         * @param mixed $wc_connect_options "wc_connect_options" value from the WP options table.
         *
         * @return mixed
         */
        public static function intercept_packages_read($wc_connect_options)
        {
        }
        /**
         * Replaces `wc_connect_options[predefined_packages]` with values from `wcshipping_options[predefined_packages]`.
         *
         * Leaves the rest of `wc_connect_options` intact.
         *
         * @param mixed $wc_connect_options "wc_connect_options" value from the WP options table.
         *
         * @return mixed
         */
        public static function intercept_predefined_packages_read($wc_connect_options)
        {
        }
        /**
         * Saves the mapped value of `wc_connect_options[packages]` to `wcshipping_options[packages]`.
         *
         * Reverts `wc_connect_options[packages]` to old value so that only the packages
         * in `wcshipping_options` get updated.
         *
         * Leaves the rest of `wcshipping_options` intact.
         *
         * @param mixed $value New value for "wc_connect_options" to extract packages from.
         * @param mixed $old_value Old value of "wc_connect_options".
         *
         * @return array `$value` with the `packages` field reverted to current DB value to prevent updating.
         */
        public static function intercept_packages_update($value, $old_value)
        {
        }
        /**
         * Saves the mapped value of `wc_connect_options[predefined_packages]` to `wcshipping_options[predefined_packages]`.
         *
         * Reverts `wc_connect_options[predefined_packages]` to old value so that only the predefined packages
         * in `wcshipping_options` get updated.
         *
         * Leaves the rest of `wcshipping_options` intact.
         *
         * @param mixed $value New value for "wc_connect_options" to extract predefined packages from.
         * @param mixed $old_value Old value of "wc_connect_options".
         *
         * @return array `$value` with the `predefined_packages` field reverted to current DB value to prevent updating.
         */
        public static function intercept_predefined_packages_update($value, $old_value)
        {
        }
        /**
         * Register a REST controller that reads "wc_connect_options".
         *
         * We do this because if WCShipping is active, it registers its own controller under /wc/v1/connect/packages
         * that accesses "wcshipping_options". For the purpose of the WCS&T settings page, we still want the page
         * accessing `wc_connect_options` that we'll possibly overwrite with the option read/write-intercepting filters
         * if migration of options from WCS&T to WCShipping has been completed.
         *
         * This is so that we can always modify the value of "wc_connect_options" but leave the value of
         * "wcshipping_options" intact.
         *
         * If migration has been completed, the controller will overwrite the value of "wc_connect_options[packages]" with
         * WCShipping's packages.
         *
         * If migration hasn't been completed, it will return the value of "wc_connect_options[packages]" with no changes.
         *
         * @see self::register_option_overwriting_hooks
         *
         * @param WC_Connect_Loader $loader WCS&T's main class.
         */
        public static function register_wcshipping_compatibility_rest_controller(\WC_Connect_Loader $loader)
        {
        }
        /**
         * Maps package data from WCShipping's to WCS&T's format.
         *
         * @param array $custom_packages The custom packages to map from WCShipping's to WCS&T's format.
         *
         * @return array
         */
        public static function map_packages_to_wcservices_format($custom_packages)
        {
        }
        /**
         * Maps package data from WCS&T's to WCShipping's format.
         *
         * @param array $custom_packages The custom packages to map from WCS&T's to WCShipping's format.
         *
         * @return array
         */
        public static function map_packages_to_wcshipping_format($custom_packages)
        {
        }
        /**
         * Renames keys according to provided key map then unsets the original keys.
         *
         * @param array $package Package data.
         * @param array $key_map Mapping to follow.
         *
         * @return array
         */
        private static function rename_keys($package, $key_map)
        {
        }
        /**
         * Unsets keys that aren't in `$allowed_keys`.
         *
         * @param array $package Package data.
         * @param array $allowed_keys Keys that will be left in the array, if present. Other keys are unset.
         *
         * @return array
         */
        private static function unset_unused_keys($package, $allowed_keys)
        {
        }
        /**
         * Maps a package's "type" prop ("box"/"envelope") to "is_letter" (true/false).
         *
         * "type" is the format used by WCShipping.
         * "is_letter" is the format used by WCS&T.
         *
         * @param array $package Package data.
         *
         * @return array
         */
        private static function map_type_to_is_letter($package)
        {
        }
        /**
         * Maps a package's "is_letter" prop (true/false) to "type" ("box"/"envelope").
         *
         * "type" is the format used by WCShipping.
         * "is_letter" is the format used by WCS&T.
         *
         * @param array $package Package data.
         *
         * @return array
         */
        private static function map_is_letter_to_type($package)
        {
        }
    }
    class WC_Connect_Continents
    {
        /**
         * Return the list of countries and states for a given continent.
         *
         * @since  3.1.0
         * @param  string $continent_code
         * @return array|mixed Response data, ready for insertion into collection data.
         */
        public function get_continent($continent_code = \false)
        {
        }
        public function get()
        {
        }
    }
    /**
     * WC_Connect_Custom_Surcharge class.
     */
    class WC_Connect_Custom_Surcharge
    {
        /**
         * Initialize the class and set up action hooks.
         */
        public static function init()
        {
        }
        /**
         * Add US Colorado Retail Delivery Fee Tax.
         * Uses the WooCommerce fees API `$cart->add_fee()`.
         *
         * Colorado Retail Delivery Fee Tax:
         * https://www.avalara.com/blog/en/north-america/2022/10/what-you-need-to-know-about-the-colorado-retail-delivery-fee-now.html
         *
         * RDF fee is DISABLED by default - not all business are required to charge the fee.
         * To apply the fee use `wc_services_enable_us_co_retail_delivery_fee` filter.
         * Change boolean flag to `true`
         * Example: `add_filter( 'wc_services_enable_us_co_retail_delivery_fee', '__return_true' );`
         *
         * @param WC_Cart $cart WooCommerce Cart object.
         */
        public static function add_us_co_retail_delivery_fee($cart)
        {
        }
    }
    class WC_Connect_Debug_Tools
    {
        /**
         * @var WC_Connect_API_Client
         */
        protected $api_client;
        function __construct(\WC_Connect_API_Client $api_client)
        {
        }
        function woocommerce_debug_tools($tools)
        {
        }
        function test_connection()
        {
        }
        /**
         * Back up all existing tax rates from the database in a CSV file.
         * Then, if successfully backed up, loop through the tax rates
         * in the database and delete rates where:
         * tax_rate_country = 'US' and
         * tax_rate_state = 'CA' and
         * tax_rate_name LIKE '% Tax'
         *
         * @return void
         */
        function delete_california_tax_rates()
        {
        }
        /**
         * Deletes the all the transients in the database that represent cached Tax Rates responses.
         *
         * @return void
         */
        function delete_cached_tax_server_responses()
        {
        }
    }
    class WC_Connect_Error_Notice
    {
        private static $inst = \null;
        public static function instance()
        {
        }
        public function enable_notice($error = \true)
        {
        }
        public function disable_notice()
        {
        }
        public function render_notice()
        {
        }
        private function notice_enabled()
        {
        }
        private function show_notice()
        {
        }
    }
    class WC_Connect_Extension_Compatibility
    {
        /**
         * Function called when a new tracking number is added to the order
         *
         * @param $order_id - order ID
         * @param $carrier_id - carrier ID, as returned on the label objects returned by the server
         * @param $tracking_number - tracking number string
         */
        public static function on_new_tracking_number($order_id, $carrier_id, $tracking_number)
        {
        }
        /**
         * Checks if WooCommerce Tax should email the tracking details, or if another extension is taking care of that already
         *
         * @param $order_id - order ID
         * @return boolean true if WCS should send the tracking info, false otherwise
         */
        public static function should_email_tracking_details($order_id)
        {
        }
    }
    class WC_Connect_Functions
    {
        /**
         * Checks if the potentially expensive Shipping/Tax API requests should be sent
         * based on the context in which they are initialized.
         *
         * @return bool true if the request can be sent, false otherwise
         */
        public static function should_send_cart_api_request()
        {
        }
        /**
         * Get the WC Helper authorization information to use with WC Connect Server requests( e.g. site ID, access token).
         *
         * @return array|WP_Error
         */
        public static function get_wc_helper_auth_info()
        {
        }
        /**
         * Check if we are currently in Rest API request for the wc/store/cart or wc/store/checkout API call.
         *
         * @return bool
         */
        public static function is_store_api_call()
        {
        }
        /**
         * Check if current page is a cart page or has woocommerce cart block.
         *
         * @return bool
         */
        public static function is_cart()
        {
        }
        /**
         * Check if current page is a checkout page or has woocommerce checkout block.
         *
         * @return bool
         */
        public static function is_checkout()
        {
        }
        /**
         * Check if current page has woocommerce cart block.
         *
         * @return bool
         */
        public static function has_cart_block()
        {
        }
        /**
         * Check if current page has woocommerce checkout block.
         *
         * @return bool
         */
        public static function has_checkout_block()
        {
        }
        /**
         * Check if current page has woocommerce cart or checkout block.
         *
         * @return bool
         */
        public static function has_cart_or_checkout_block()
        {
        }
        /**
         * Checks whether the current user has permissions to manage shipping labels.
         *
         * @return boolean
         */
        public static function user_can_manage_labels()
        {
        }
        /**
         * Exports existing tax rates to a CSV and clears the table.
         *
         * Ported from TaxJar's plugin.
         * See: https://github.com/taxjar/taxjar-woocommerce-plugin/blob/42cd4cd0/taxjar-woocommerce.php#L75
         *
         * @return boolean
         */
        public static function backup_existing_tax_rates()
        {
        }
        /**
         * Search the uploads directory and return all backed up
         * tax rate files.
         *
         * @return array|false
         */
        public static function get_backed_up_tax_rate_files()
        {
        }
    }
    class WC_Connect_Help_View
    {
        /**
         * @var WC_Connect_Service_Schemas_Store
         */
        protected $service_schemas_store;
        /**
         * @var WC_Connect_Service_Settings_Store
         */
        protected $service_settings_store;
        /**
         * @var WC_Connect_Logger
         */
        protected $logger;
        /**
         * @var WC_Connect_TaxJar_Integration
         */
        protected $taxjar_integration;
        /**
         * @array
         */
        protected $fieldsets;
        public function __construct(\WC_Connect_Service_Schemas_Store $service_schemas_store, \WC_Connect_TaxJar_Integration $taxjar_integration, \WC_Connect_Service_Settings_Store $service_settings_store, \WC_Connect_Logger $logger)
        {
        }
        protected function get_health_items()
        {
        }
        protected function is_shipping_loaded()
        {
        }
        protected function get_services_items()
        {
        }
        /**
         * Gets the last 10 lines from the WooCommerce Tax log by feature, if it exists
         */
        protected function get_debug_log_data($feature = '')
        {
        }
        /**
         * Filters the WooCommerce System Status Tabs to add connect
         *
         * @param array $tabs
         * @return array
         */
        public function status_tabs($tabs)
        {
        }
        /**
         * Returns the data bootstrap for the help page
         *
         * @return array
         */
        protected function get_form_data()
        {
        }
        /**
         * Localizes the bootstrap, enqueues the script and styles for the help page
         */
        public function page()
        {
        }
        /**
         * @return array
         */
        protected function get_tax_health_item()
        {
        }
    }
    class WC_Connect_Jetpack
    {
        const JETPACK_PLUGIN_SLUG = 'woocommerce-services';
        public static function get_connection_manager()
        {
        }
        /**
         * Returns the Blog Token.
         *
         * @return stdClass|WP_Error
         */
        public static function get_blog_access_token()
        {
        }
        /**
         * Helper method to get if Jetpack is in offline mode
         *
         * @return bool
         */
        public static function is_offline_mode()
        {
        }
        /**
         * Helper method to get if Jetpack is connected (aka active).
         *
         * @deprecated 2.3.0 Use self::is_connected() instead.
         *
         * @return bool
         */
        public static function is_active()
        {
        }
        /**
         * Helper method to get if the current Jetpack website is marked as staging
         *
         * @return bool
         */
        public static function is_staging_site()
        {
        }
        /**
         * Helper method to get whether the current site is an Atomic site
         *
         * @return bool
         */
        public static function is_atomic_site()
        {
        }
        public static function get_connection_owner_wpcom_data()
        {
        }
        /**
         * Helper method to get the Jetpack connection owner, IF we are connected
         *
         * @return WP_User | false
         */
        public static function get_connection_owner()
        {
        }
        /**
         * Records a Tracks event
         *
         * @param $user
         * @param $event_type
         * @param
         */
        public static function tracks_record_event($user, $event_type, $data)
        {
        }
        /**
         * Determines if the current user is the site's Jetpack connection owner.
         *
         * @return bool Whether the current user is the Jetpack connection owner.
         */
        public static function is_current_user_connection_owner()
        {
        }
        /**
         * Determines if both the blog and a blog owner account are connected to Jetpack.
         *
         * @return bool Whether or nor Jetpack is connected
         */
        public static function is_connected()
        {
        }
        /**
         * Connects the site to Jetpack.
         * This code performs a redirection, so anything executed after it will be ignored.
         *
         * @param $redirect_url
         */
        public static function connect_site($redirect_url)
        {
        }
        /**
         * Jetpack Connection package version.
         *
         * @return string
         */
        public static function get_jetpack_connection_package_version()
        {
        }
        /**
         * Get the WPCOM or self-hosted site ID.
         *
         * @return int|WP_Error
         */
        public static function get_wpcom_site_id()
        {
        }
    }
    class WC_Connect_Label_Reports extends \WC_Admin_Report
    {
        const LABELS_TRANSIENT_KEY = 'wcs_label_reports';
        /**
         * @var WC_Connect_Service_Settings_Store
         */
        protected $settings_store;
        public function __construct(\WC_Connect_Service_Settings_Store $settings_store)
        {
        }
        public function get_export_button()
        {
        }
        private function compare_label_dates_desc($label_a, $label_b)
        {
        }
        private function get_all_labels()
        {
        }
        private function query_labels()
        {
        }
        public function output_report()
        {
        }
        private function get_edit_order_link($post_id)
        {
        }
        private function get_label_refund_status($label)
        {
        }
        /**
         * Get the main chart.
         */
        public function get_main_chart()
        {
        }
    }
    class WC_Connect_Logger
    {
        /**
         * @var WC_Logger
         */
        private $logger;
        private $is_logging_enabled = \false;
        private $is_debug_enabled = \false;
        private $feature;
        public function __construct(\WC_Logger $logger, $feature = '')
        {
        }
        /**
         * Format a message with optional context for logging.
         *
         * @param string|WP_Error $message Either a string message, or WP_Error object.
         * @param string          $context Optional. Context for the logged message.
         * @return string The formatted log message.
         */
        protected function format_message($message, $context = '')
        {
        }
        public function enable_logging()
        {
        }
        public function disable_logging()
        {
        }
        public function enable_debug()
        {
        }
        public function disable_debug()
        {
        }
        public function is_debug_enabled()
        {
        }
        public function is_logging_enabled()
        {
        }
        /**
         * Log debug by printing it as notice when debugging is enabled.
         *
         * @param string $message Debug message.
         * @param string $type    Notice type.
         */
        public function debug($message, $type = 'notice')
        {
        }
        /**
         * Logs messages even if debugging is disabled
         *
         * @param string $message Message to log
         * @param string $context Optional context (e.g. a class or function name)
         */
        public function error($message, $context = '')
        {
        }
        /**
         * Logs messages to file and error_log if WP_DEBUG
         *
         * @param WP_Error|string $message Message to log
         * @param string $context Optional context (e.g. a class or function name)
         */
        public function log($message, $context = '', $force = \false)
        {
        }
    }
    class WC_Connect_Migration_Survey
    {
        /**
         * Maximum number of times to show the survey
         */
        const MAX_DISPLAY_COUNT = 2;
        /**
         * Cooldown period between survey displays (in seconds)
         */
        const COOLDOWN_PERIOD = 259200;
        // 3 days
        /**
         * Initialize the migration survey
         */
        public function __construct()
        {
        }
        /**
         * Check if survey should be shown to current user
         */
        public function should_show_survey()
        {
        }
        /**
         * Add survey data to shipping label script localization
         */
        public function add_survey_data_to_script($root_view, $payload)
        {
        }
        /**
         * Handle survey submission via AJAX
         */
        public function handle_survey_submission()
        {
        }
        /**
         * Handle survey dismissal
         */
        public function handle_survey_dismissal()
        {
        }
        /**
         * Handle survey display tracking (update user meta when survey is actually shown)
         */
        public function handle_survey_display_tracking()
        {
        }
        /**
         * Track survey events
         */
        private function track_event($event_name, $properties = array())
        {
        }
    }
    /**
     * WooCommerce Shipping note: DHL live rates available.
     *
     * Only for legacy customers that had the feature available.
     */
    class WC_Connect_Note_DHL_Live_Rates_Available
    {
        use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
        /**
         * Name of the note for use in the database.
         */
        const NOTE_NAME = 'wc-services-dhl-live-rates-available';
        /**
         * Maybe add note to inform WooCommerce Shipping users with legacy live rates about new DHL live rates.
         *
         * @param WC_Connect_Service_Schemas_Store $schemas   Store schemas.
         */
        public static function init(\WC_Connect_Service_Schemas_Store $schemas)
        {
        }
        /**
         * Get the note.
         *
         * @return Automattic\WooCommerce\Admin\Notes\Note
         */
        public static function get_note()
        {
        }
    }
    class WC_Connect_Nux
    {
        /**
         * Jetpack status constants.
         */
        const JETPACK_NOT_CONNECTED = 'not-connected';
        const JETPACK_OFFLINE_MODE = 'offline-mode';
        const JETPACK_CONNECTED = 'connected';
        const IS_NEW_LABEL_USER = 'wcc_is_new_label_user';
        /**
         * Option name for dismissing success banner
         * after the JP connection flow
         */
        const SHOULD_SHOW_AFTER_CXN_BANNER = 'should_display_nux_after_jp_cxn_banner';
        /**
         * @var WC_Connect_Tracks
         */
        protected $tracks;
        /**
         * @var WC_Connect_Shipping_Label
         */
        private $shipping_label;
        function __construct(\WC_Connect_Tracks $tracks, \WC_Connect_Shipping_Label $shipping_label)
        {
        }
        private function get_notice_states()
        {
        }
        public function is_notice_dismissed($notice)
        {
        }
        public function dismiss_notice($notice)
        {
        }
        public function ajax_dismiss_notice()
        {
        }
        private function init_pointers()
        {
        }
        public function show_pointers($hook)
        {
        }
        public function get_dismissed_pointers()
        {
        }
        /**
         * Dismiss a WP pointer for the current user.
         *
         * @param string $pointer_to_dismiss Pointer ID to dismiss for the current user
         */
        public function dismiss_pointer($pointer_to_dismiss)
        {
        }
        public function is_new_labels_user()
        {
        }
        public function register_order_page_labels_pointer($pointers)
        {
        }
        public function register_new_carrier_dhl_pointer($pointers)
        {
        }
        public static function get_banner_type_to_display($status = array())
        {
        }
        public function get_jetpack_install_status()
        {
        }
        public function should_display_nux_notice_on_screen($screen)
        {
        }
        /**
         * https://developers.taxjar.com/api/reference/#countries
         */
        public function is_taxjar_supported_country($country_code)
        {
        }
        public function should_display_nux_notice_for_current_store_locale()
        {
        }
        public function get_feature_list_for_country($country)
        {
        }
        public function get_jetpack_redirect_url()
        {
        }
        public function set_up_nux_notices()
        {
        }
        public function show_banner_before_connection()
        {
        }
        public function show_banner_after_connection()
        {
        }
        public function show_tos_banner()
        {
        }
        public function show_tos_informational_banner()
        {
        }
        public function show_nux_banner($content)
        {
        }
        /**
         * Connects the site to Jetpack.
         */
        public function register_woocommerce_services_jetpack()
        {
        }
    }
    class WC_Connect_Options
    {
        /**
         * An array that maps a grouped option type to an option name.
         *
         * @var array
         */
        private static $grouped_options = array('compact' => 'wc_connect_options');
        /**
         * Returns an array of option names for a given type.
         *
         * @param string $type The type of option to return. Defaults to 'compact'.
         *
         * @return array
         */
        public static function get_option_names($type = 'compact')
        {
        }
        /**
         * Deletes all options created by WooCommerce Tax, including shipping method options
         */
        public static function delete_all_options()
        {
        }
        /**
         * Returns the requested option.  Looks in wc_connect_options or wc_connect_$name as appropriate.
         *
         * @param string $name Option name
         * @param mixed  $default (optional)
         *
         * @return mixed
         */
        public static function get_option($name, $default = \false)
        {
        }
        /**
         * Updates the single given option.  Updates wc_connect_options or wc_connect_$name as appropriate.
         *
         * @param string $name Option name
         * @param mixed  $value Option value
         *
         * @return bool Was the option successfully updated?
         */
        public static function update_option($name, $value)
        {
        }
        /**
         * Deletes the given option.  May be passed multiple option names as an array.
         * Updates wc_connect_options and/or deletes wc_connect_$name as appropriate.
         *
         * @param string|array $names
         *
         * @return bool Was the option successfully deleted?
         */
        public static function delete_option($names)
        {
        }
        /**
         * Gets a shipping method option
         *
         * @param $name
         * @param $default
         * @param $service_id
         * @param $service_instance
         *
         * @return mixed
         */
        public static function get_shipping_method_option($name, $default, $service_id, $service_instance = \false)
        {
        }
        /**
         * Updates a shipping method option
         *
         * @param $name
         * @param $value
         * @param $service_id
         * @param $service_instance
         *
         * @return bool
         */
        public static function update_shipping_method_option($name, $value, $service_id, $service_instance = \false)
        {
        }
        /**
         * Deletes a shipping method option
         *
         * @param $name
         * @param $service_id
         * @param $service_instance
         *
         * @return bool
         */
        public static function delete_shipping_method_option($name, $service_id, $service_instance = \false)
        {
        }
        /**
         * Deletes all options related to a shipping method
         *
         * @param $service_id
         * @param $service_instance
         */
        public static function delete_shipping_method_options($service_id, $service_instance = \false)
        {
        }
        private static function get_grouped_option($group, $name, $default)
        {
        }
        private static function update_grouped_option($group, $name, $value)
        {
        }
        private static function delete_grouped_option($group, $names)
        {
        }
        /**
         * Based on the service id and optional instance, generates the option name
         *
         * @param $name
         * @param $service_id
         * @param $service_instance
         *
         * @return string|bool
         */
        private static function get_shipping_method_option_name($name, $service_id, $service_instance = \false)
        {
        }
        /**
         * Is the option name valid?
         *
         * @param string $name  The name of the option
         * @param string $group The name of the group that the option is in. Defaults to compact.
         *
         * @return bool Is the option name valid?
         */
        private static function is_valid($name, $group = 'non_compact')
        {
        }
        /**
         * Deletes all options of all shipping methods
         */
        private static function delete_all_shipping_methods_options()
        {
        }
    }
    class WC_Connect_Order_Presenter
    {
        /**
         * This function transform the WC_Order object to a representational JSON form for the react app.
         * This is based on WooCommerce v3's get_order API woocommerce/includes/legacy/api/v3/class-wc-api-orders.php
         *
         * @param WC_Order $order
         * @return array
         */
        public function get_order_for_api(\WC_Order $order)
        {
        }
    }
    class WC_Connect_Package_Settings
    {
        /**
         * @var WC_Connect_Service_Settings_Store
         */
        protected $settings_store;
        /**
         * @var WC_Connect_Service_Schemas_Store
         */
        protected $service_schemas_store;
        public function __construct(\WC_Connect_Service_Settings_Store $settings_store, \WC_Connect_Service_Schemas_Store $service_schemas_store)
        {
        }
        public function get()
        {
        }
    }
    class WC_Connect_Payment_Gateway extends \WC_Payment_Gateway
    {
        public function __construct($settings)
        {
        }
    }
    class WC_Connect_Payment_Methods_Store
    {
        /**
         * @var WC_Connect_Service_Settings_Store
         */
        protected $service_settings_store;
        /**
         * @var WC_Connect_API_Client
         */
        protected $api_client;
        /**
         * @var WC_Connect_Logger
         */
        protected $logger;
        public function __construct(\WC_Connect_Service_Settings_Store $service_settings_store, \WC_Connect_API_Client $api_client, \WC_Connect_Logger $logger)
        {
        }
        /**
         * Fetch stored payment methods from server and store in options.
         *
         * @return bool Were payment methods successfully retrieved?
         */
        public function fetch_payment_methods_from_connect_server()
        {
        }
        protected function potentially_update_selected_payment_method_from_payment_methods($payment_methods)
        {
        }
        public function get_payment_methods()
        {
        }
        protected function update_payment_methods($payment_methods)
        {
        }
        /**
         * Validate that the response body is valid and contains the correct properties.
         *
         * @param object $response_body The response body object.
         * @return true|WP_Error Whether the response body is valid.
         */
        protected function validate_payment_methods_response($response_body)
        {
        }
        protected function get_payment_methods_from_response_body($response_body)
        {
        }
        /**
         * Get the URL to add a payment method from the response body.
         *
         * @param object $response_body The response body object.
         * @return string The URL to add a payment method.
         */
        protected function get_add_payment_method_url_from_response_body($response_body)
        {
        }
        /**
         * Get the URL to add a payment method.
         *
         * @return string The URL to add a payment method.
         */
        public function get_add_payment_method_url()
        {
        }
        /**
         * Update the URL to add a payment method.
         *
         * @param string $add_payment_method_url The URL to add a payment method.
         * @return void
         */
        protected function update_add_payment_method_url($add_payment_method_url)
        {
        }
    }
    /**
     * Integrates with WooCommerce PayPal Checkout Payment Gateway,
     * modifying that plugin's behavior to facilitate authenticating requests
     * not by linking an account but via the WCS server through which we proxy.
     */
    class WC_Connect_PayPal_EC
    {
        /**
         * @var WC_Connect_API_Client
         */
        private $api_client;
        /**
         * @var WC_Connect_Nux
         */
        private $nux;
        /**
         * Express Checkout API methods to proxy.
         */
        private $methods_to_proxy = array('SetExpressCheckout', 'GetExpressCheckoutDetails', 'DoExpressCheckoutPayment');
        public function __construct(\WC_Connect_API_Client $api_client, \WC_Connect_Nux $nux)
        {
        }
        public function init()
        {
        }
        /**
         * Attach request proxying hook if it's an Express Checkout method
         */
        public function request_body($body)
        {
        }
        /**
         * Reroute Express Checkout requests from the PPEC extension via WCS server to pick up API credentials
         */
        public function proxy_request($preempt, $r, $url)
        {
        }
        /**
         * Limit supported payment gateway features to payments alone
         */
        public function ppec_supports($supported, $feature, $gateway)
        {
        }
        /**
         * Add a pointer clarifying the need to link an account before refunding payment
         */
        public function register_refund_pointer($pointers)
        {
        }
        /**
         * Trigger banner to appear based on order paid with PPEC
         */
        public function maybe_trigger_banner($order_id)
        {
        }
        /**
         * Show banner if it has been triggered and if this screen is an appropriate place for it
         */
        public function maybe_show_banner()
        {
        }
        /**
         * Show a NUX banner prompting the merchant to link a PayPal account
         */
        public function banner()
        {
        }
        /**
         * Initialize PPEC settings to their default values
         */
        public function initialize_settings()
        {
        }
        /**
         * Force setting values that will work when proxying requests
         */
        public function adjust_settings($settings)
        {
        }
        /**
         * Modify PPEC settings form to include a toggle (and other accommodations) for WCS request proxying
         */
        public function adjust_form_fields($form_fields)
        {
        }
        /**
         * Present the "API Subject" setting in a way that's simpler, more comprehensible, and more appropriate to the way it's being used
         */
        public function adjust_api_subject_form_field($form_fields)
        {
        }
        /**
         * Handle reroute_requests setting change
         */
        public function maybe_set_reroute_requests()
        {
        }
    }
    class WC_Connect_Privacy
    {
        /**
         * @var WC_Connect_Service_Settings_Store
         */
        protected $settings_store;
        /**
         * @var WC_Connect_API_Client
         */
        protected $api_client;
        public function __construct(\WC_Connect_Service_Settings_Store $settings_store, \WC_Connect_API_Client $api_client)
        {
        }
        /**
         * Gets the privacy message to display in the admin panel
         */
        public function add_privacy_message()
        {
        }
        /**
         * If WooCommerce order data erasure is enabled, display a warning on the erasure page
         */
        public function add_erasure_notice()
        {
        }
        /**
         * Filter for woocommerce_privacy_export_order_personal_data that adds WCS personal data to the exported orders
         *
         * @param array  $personal_data
         * @param object $order
         * @return array
         */
        public function label_data_exporter($personal_data, $order)
        {
        }
        /**
         * Hooks into woocommerce_privacy_before_remove_order_personal_data to remove WCS personal data from orders
         *
         * @param WC_Order $order WC Order.
         */
        public function label_data_eraser($order)
        {
        }
    }
    class WC_Connect_Service_Schemas_Store
    {
        /**
         * @var WC_Connect_API_Client
         */
        protected $api_client;
        /**
         * @var WC_Connect_Logger
         */
        protected $logger;
        public function __construct(\WC_Connect_API_Client $api_client, \WC_Connect_Logger $logger)
        {
        }
        public function fetch_service_schemas_from_connect_server()
        {
        }
        public function get_service_schemas()
        {
        }
        protected function update_service_schemas($service_schemas)
        {
        }
        public function get_last_fetch_timestamp()
        {
        }
        protected function update_last_fetch_timestamp()
        {
        }
        public function get_last_fetch_result_code()
        {
        }
        /**
         * @param int $result_status_code
         */
        protected function update_last_fetch_result_code($result_status_code)
        {
        }
        protected function maybe_update_heartbeat()
        {
        }
        protected function maybe_mark_as_legacy_site($service_schemas)
        {
        }
        /**
         * Returns all service ids of a specific type (e.g. shipping)
         *
         * @param string $type The type of services to return
         *
         * @return array An array of that type's service ids, or an empty array if no such type is known
         */
        public function get_all_service_ids_of_type($type)
        {
        }
        /**
         * Returns all shipping method ids
         *
         * @return array|bool An array of supported shipping method ids or false if schema does not support method_id
         */
        public function get_all_shipping_method_ids()
        {
        }
        /**
         * Returns a particular service's schema given its id
         *
         * @param string $service_id The service id for which to return the schema
         *
         * @return object|null The service schema or null if no such id was found
         */
        public function get_service_schema_by_id($service_id)
        {
        }
        /**
         * Returns a particular service's schema given its method_id
         *
         * @param $method_id
         *
         * @return object|null The service schema or null if no such id was found
         */
        public function get_service_schema_by_method_id($method_id)
        {
        }
        /**
         * Returns a service's schema given its shipping zone instance
         *
         * @param string $instance_id The shipping zone instance id for which to return the schema
         *
         * @return object|null The service schema or null if no such instance was found
         */
        public function get_service_schema_by_instance_id($instance_id)
        {
        }
        /**
         * Returns a service's schema given an id or shipping zone instance.
         *
         * @param string $id_or_instance_id String ID or numeric instance ID.
         * @return object|null Service schema on success, null on failure
         */
        public function get_service_schema_by_id_or_instance_id($id_or_instance_id)
        {
        }
        /**
         * Returns packages schema
         *
         * @return object|null Packages schema on success, null on failure
         */
        public function get_packages_schema()
        {
        }
        public function get_predefined_packages_schema()
        {
        }
        /**
         * Returns the WooCommerce Shipping and WooCommerce Tax migration enabled status
         *
         * @return bool
         */
        public function is_wcship_wctax_migration_enabled()
        {
        }
        /**
         * Returns the WooCommerce Shipping and WooCommerce Tax upgrade banners
         *
         * @return object|null The banners schema or null if no such id was found
         */
        public function get_wcship_wctax_upgrade_banner()
        {
        }
    }
    class WC_Connect_Service_Schemas_Validator
    {
        /**
         * Validates the overall passed services object (all service types and all services therein)
         *
         * @param object $services
         *
         * @return WP_Error|true
         */
        public function validate_service_schemas($service_schemas)
        {
        }
        /**
         * Validates a particular service schema, especially the parts of the service that WC relies
         * on like id, method_title, method_description, etc
         *
         * @param string  $service_type
         * @param integer $service_counter
         * @param object  $service
         *
         * @return WP_Error|true
         */
        protected function validate_service_schema($service_type, $service_counter, $service_schema)
        {
        }
        /**
         * Validates a particular service's service settings schema, especially the parts of the
         * service settings that WC relies on like type, required and properties
         *
         * @param string $service_id
         * @param object $service_settings
         *
         * @return WP_Error|true
         */
        protected function validate_service_schema_settings($service_id, $service_settings)
        {
        }
        /**
         * Validates a particular service's schema's required properties, especially the parts of the
         * properties that WC relies on and title
         *
         * @param string $service_id
         * @param object $service_settings_properties
         *
         * @return WP_Error|true
         */
        protected function validate_service_settings_required_properties($service_id, $service_settings_properties)
        {
        }
    }
    class WC_Connect_Service_Settings_Store
    {
        /**
         * @var WC_Connect_Service_Schemas_Store
         */
        protected $service_schemas_store;
        /**
         * @var WC_Connect_API_Client
         */
        protected $api_client;
        /**
         * @var WC_Connect_Logger
         */
        protected $logger;
        public function __construct(\WC_Connect_Service_Schemas_Store $service_schemas_store, \WC_Connect_API_Client $api_client, \WC_Connect_Logger $logger)
        {
        }
        /**
         * Gets woocommerce store options that are useful for all connect services
         *
         * @return object|array
         */
        public function get_store_options()
        {
        }
        /**
         * Gets connect account settings (e.g. payment method)
         *
         * @return array
         */
        public function get_account_settings()
        {
        }
        /**
         * Updates connect account settings (e.g. payment method)
         *
         * @param array $settings
         *
         * @return true
         */
        public function update_account_settings($settings)
        {
        }
        public function get_selected_payment_method_id()
        {
        }
        public function set_selected_payment_method_id($new_payment_method_id)
        {
        }
        public function can_user_manage_payment_methods()
        {
        }
        public function get_origin_address()
        {
        }
        public function get_preferred_paper_size()
        {
        }
        public function set_preferred_paper_size($size)
        {
        }
        /**
         * Attempts to recover faulty json string fields that might contain strings with unescaped quotes
         *
         * @param string $field_name
         * @param string $json
         *
         * @return string
         */
        public function try_recover_invalid_json_string($field_name, $json)
        {
        }
        /**
         * Attempts to recover faulty json string array fields that might contain strings with unescaped quotes
         *
         * @param string $field_name
         * @param string $json
         *
         * @return string
         */
        public function try_recover_invalid_json_array($field_name, $json)
        {
        }
        public function try_deserialize_labels_json($label_data)
        {
        }
        /**
         * Returns labels for the specific order ID
         *
         * @param $order_id
         *
         * @return array
         */
        public function get_label_order_meta_data($order_id)
        {
        }
        /**
         * Updates the existing label data
         *
         * @param $order_id
         * @param $new_label_data
         *
         * @return array updated label info
         */
        public function update_label_order_meta_data($order_id, $new_label_data)
        {
        }
        /**
         * Adds new labels to the order
         *
         * @param $order_id
         * @param array    $new_labels - labels to be added
         */
        public function add_labels_to_order($order_id, $new_labels)
        {
        }
        public function update_origin_address($address)
        {
        }
        public function update_destination_address($order_id, $api_address)
        {
        }
        protected function sort_services($a, $b)
        {
        }
        /**
         * Returns the service type and id for each enabled WooCommerce Tax service
         *
         * Shipping services also include instance_id and shipping zone id
         *
         * Note that at this time, only shipping services exist, but this method will
         * return other services in the future
         *
         * @return array
         */
        public function get_enabled_services()
        {
        }
        public function get_enabled_services_by_ids($service_ids)
        {
        }
        /**
         * Checks if the shipping method ids have been migrated to the "wc_services_*" format and migrates them
         */
        public function migrate_legacy_services()
        {
        }
        /**
         * Given a service's id and optional instance, returns the settings for that
         * service or an empty array
         *
         * @param string  $service_id
         * @param integer $service_instance
         *
         * @return object|array
         */
        public function get_service_settings($service_id, $service_instance = \false)
        {
        }
        /**
         * Given id and possibly instance, validates the settings and, if they validate, saves them to options
         *
         * @return bool|WP_Error
         */
        public function validate_and_possibly_update_settings($settings, $id, $instance = \false)
        {
        }
        /**
         * Returns a global list of packages
         *
         * @return array
         */
        public function get_packages()
        {
        }
        /**
         * Extends the global list of packages with a list of new packages
         *
         * @param array new_packages - packages to extend
         */
        public function create_packages($new_packages)
        {
        }
        /**
         * Updates the global list of packages
         *
         * @param array packages
         */
        public function update_packages($packages)
        {
        }
        /**
         * Returns a global list of enabled predefined packages for all services
         *
         * @return array
         */
        public function get_predefined_packages()
        {
        }
        /**
         * Returns a list of enabled predefined packages for the specified service
         *
         * @param $service_id
         * @return array
         */
        public function get_predefined_packages_for_service($service_id)
        {
        }
        /**
         * Extends the global list of enabled predefined packages with a list of new packages
         *
         * @param array new_packages - packages to extend
         */
        public function create_predefined_packages($new_packages)
        {
        }
        /**
         * Updates the global list of enabled predefined packages for all services
         *
         * @param array packages
         */
        public function update_predefined_packages($packages)
        {
        }
        public function get_package_lookup()
        {
        }
        public function is_eligible_for_migration()
        {
        }
        private function translate_unit($value)
        {
        }
    }
    class WC_Connect_Settings_Pages
    {
        /**
         * @var WC_Connect_Service_Schemas_Store
         */
        protected $service_schemas_store;
        /**
         * @var WC_Connect_Continents
         */
        protected $continents;
        /**
         * @var string;
         */
        protected $id;
        /**
         * @var string;
         */
        protected $label;
        /**
         * @var WC_Connect_API_Client
         */
        protected $api_client;
        public function __construct(\WC_Connect_API_Client $api_client, \WC_Connect_Service_Schemas_Store $service_schemas_store)
        {
        }
        /**
         * Get sections.
         *
         * @return array
         */
        public function get_sections($shipping_tabs)
        {
        }
        /**
         * Output the settings.
         */
        public function output_settings_screen()
        {
        }
        /**
         * Localizes the bootstrap, enqueues the script and styles for the settings page
         */
        public function output_shipping_settings_screen()
        {
        }
    }
    class WC_Connect_Shipping_Label
    {
        /**
         * @var WC_Connect_API_Client
         */
        protected $api_client;
        /**
         * @var WC_Connect_Service_Settings_Store
         */
        protected $settings_store;
        /**
         * @var WC_Connect_Service_Schemas_Store
         */
        protected $service_schemas_store;
        /**
         * @var WC_Connect_Account_Settings
         */
        protected $account_settings;
        /**
         * @var WC_Connect_Package_Settings
         */
        protected $package_settings;
        /**
         * @var WC_Connect_Continents
         */
        protected $continents;
        /**
         * @var array Supported countries by USPS, see: https://webpmt.usps.gov/pmt010.cfm
         */
        private $supported_countries = array('US', 'AS', 'PR', 'VI', 'GU', 'MP', 'UM', 'FM', 'MH');
        /**
         * @var array Supported currencies
         */
        private $supported_currencies = array('USD');
        private $show_metabox = \null;
        public function __construct(\WC_Connect_API_Client $api_client, \WC_Connect_Service_Settings_Store $settings_store, \WC_Connect_Service_Schemas_Store $service_schemas_store, \WC_Connect_Payment_Methods_Store $payment_methods_store)
        {
        }
        public function get_item_data(\WC_Order $order, $item)
        {
        }
        protected function get_packaging_from_shipping_method($shipping_method)
        {
        }
        protected function get_packaging_metadata(\WC_Order $order)
        {
        }
        protected function get_name(\WC_Product $product)
        {
        }
        public function get_selected_packages(\WC_Order $order)
        {
        }
        public function get_all_items(\WC_Order $order)
        {
        }
        public function get_selected_rates(\WC_Order $order)
        {
        }
        protected function format_address_for_api($address)
        {
        }
        protected function get_origin_address()
        {
        }
        protected function get_destination_address(\WC_Order $order)
        {
        }
        protected function get_form_data(\WC_Order $order)
        {
        }
        /**
         * Check whether the given order is eligible for shipping label creation - the order has at least one product that is:
         * - Shippable.
         * - Non-refunded.
         *
         * @param WC_Order $order The order to check for shipping label creation eligibility.
         * @return bool Whether the given order is eligible for shipping label creation.
         */
        public function is_order_eligible_for_shipping_label_creation(\WC_Order $order)
        {
        }
        /**
         * Check whether the store is eligible for shipping label creation:
         * - Store currency is supported.
         * - Store country is supported.
         *
         * @return bool Whether the WC store is eligible for shipping label creation.
         */
        public function is_store_eligible_for_shipping_label_creation()
        {
        }
        /**
         * Check whether the given country code is supported for shipping labels.
         *
         * @param string $country_code Country code of the WC store.
         * @return bool Whether the given country code is supported for shipping labels.
         */
        private function is_supported_country($country_code)
        {
        }
        /**
         * Check whether the given currency code is supported for shipping labels.
         *
         * @param string $currency_code Currency code of the WC store.
         * @return bool Whether the given country code is supported for shipping labels.
         */
        private function is_supported_currency($currency_code)
        {
        }
        public function is_dhl_express_available()
        {
        }
        public function is_order_dhl_express_eligible()
        {
        }
        /**
         * Check if meta boxes should be displayed.
         *
         * @param WP_Post $post Post object.
         * @return boolean
         */
        public function should_show_meta_box($post)
        {
        }
        /**
         * Check if meta boxes should be displayed.
         *
         * @param WP_Post $post Post object.
         * @return bool
         */
        private function calculate_should_show_meta_box($post)
        {
        }
        /**
         * Check whether shipping label feature is enabled from WC Services setting.
         *
         * @return bool True if shipping label is enabled from the settings.
         */
        public function is_shipping_label_enabled()
        {
        }
        public function get_label_payload($post_order_or_id)
        {
        }
        /**
         * Filter items needing shipping callback.
         *
         * @since  3.0.0
         * @param  array $item Item to check for shipping.
         * @return bool
         */
        public function filter_items_needing_shipping($item)
        {
        }
        /**
         * Reduce items to sum their quantities.
         *
         * @param  int   $sum  Current sum.
         * @param  array $item Item to add to sum.
         * @return int
         */
        protected function reducer_items_quantity($sum, $item)
        {
        }
        public function meta_box($post, $args)
        {
        }
    }
    class WC_Connect_Shipping_Method extends \WC_Shipping_Method
    {
        /**
         * @var object A reference to a the fetched properties of the service
         */
        protected $service_schema = \null;
        /**
         * @var WC_Connect_Service_Settings_Store
         */
        protected $service_settings_store;
        /**
         * @var WC_Connect_Logger
         */
        protected $logger;
        /**
         * @var WC_Connect_API_Client
         */
        protected $api_client;
        /**
         * Store validation errors in property for later retrieval.
         *
         * @var WP_Error
         */
        protected $package_validation_errors;
        /**
         * Cache of destinations which have already been validated.
         *
         * @var array
         */
        protected $validated_package_destinations = array();
        public function __construct($id_or_instance_id = \null)
        {
        }
        public function get_service_schema()
        {
        }
        public function set_service_schema($service_schema)
        {
        }
        public function get_service_settings_store()
        {
        }
        public function set_service_settings_store($service_settings_store)
        {
        }
        public function get_logger()
        {
        }
        public function set_logger(\WC_Connect_Logger $logger)
        {
        }
        public function get_api_client()
        {
        }
        public function set_api_client(\WC_Connect_API_Client $api_client)
        {
        }
        /**
         * Logging helper.
         *
         * Avoids calling methods on an undefined object if no logger was
         * injected during the init action in the constructor.
         *
         * @see WC_Connect_Logger::debug()
         * @param string|WP_Error $message
         * @param string          $context
         */
        protected function log($message, $context = '')
        {
        }
        protected function log_error($message, $context = '')
        {
        }
        /**
         * Restores any values persisted to the DB for this service instance
         * and sets up title for WC core to work properly
         */
        protected function init_form_settings()
        {
        }
        /**
         * Returns the settings for this service (e.g. for use in the form or for
         * sending to the rate request endpoint
         *
         * Used by WC_Connect_Loader to embed the form schema in the page for JS to consume
         *
         * @return object
         */
        public function get_service_settings()
        {
        }
        /**
         * Determine if a package's destination is valid enough for a rate quote.
         *
         * @param array $package Current Package.
         * @return bool
         */
        public function is_valid_package_destination($package)
        {
        }
        /**
         * Return WP_Error object which may have validation errors.
         *
         * @return WP_Error
         */
        public function get_package_validation_errors()
        {
        }
        private function lookup_product($package, $product_id)
        {
        }
        private function filter_preset_boxes($preset_id)
        {
        }
        private function check_and_handle_response_error($response_body, $service_settings)
        {
        }
        private function add_fallback_rate($service_settings)
        {
        }
        public function calculate_shipping($package = array())
        {
        }
        public function update_last_rate_request_timestamp()
        {
        }
        public function set_last_request_failed($timestamp = \null)
        {
        }
        public function admin_options()
        {
        }
        /**
         * @param string $method_id
         * @param int    $instance_id
         * @param string $service_ids
         *
         * @return string
         */
        public static function format_rate_id($method_id, $instance_id, $service_ids)
        {
        }
        public static function format_rate_title($rate_title)
        {
        }
        /**
         * Log debug by printing it as notice.
         *
         * @param string $message Debug message.
         * @param string $type    Notice type.
         */
        public function debug($message, $type = 'notice')
        {
        }
        /**
         * Is this method available?
         *
         * @param array $package Package.
         * @return bool
         */
        public function is_available($package)
        {
        }
        /**
         * Checks whether the shipping classes of all products in a package are
         * actually supported by the method. If a single product has an un-supported class,
         * the whole package will not be supported by the method.
         *
         * @param array $package The contents of a package.
         * @return bool
         */
        public function matches_package_shipping_classes($package)
        {
        }
    }
    class WC_Connect_TaxJar_Integration
    {
        /**
         * @var WC_Connect_API_Client
         */
        public $api_client;
        /**
         * @var WC_Connect_Logger
         */
        public $logger;
        /**
         * @var \Automattic\WCServices\StoreNotices\StoreNoticesNotifier
         */
        private $notifier;
        public $wc_connect_base_url;
        private $expected_options = array(
            // Users can set either billing or shipping address for tax rates but not shop
            'woocommerce_tax_based_on' => 'shipping',
            // Rate calculations assume tax not included
            'woocommerce_prices_include_tax' => 'no',
            // Use no special handling on shipping taxes, our API handles that
            'woocommerce_shipping_tax_class' => '',
            // Rates are calculated in the cart assuming tax not included
            'woocommerce_tax_display_shop' => 'excl',
            // TaxJar returns one total amount, not line item amounts
            'woocommerce_tax_display_cart' => 'excl',
        );
        /**
         * Cache time.
         *
         * @var int
         */
        private $cache_time;
        /**
         * Address Validation Cache time.
         *
         * @var int
         */
        private $address_cache_time;
        /**
         * Error cache time.
         *
         * @var int
         */
        private $error_cache_time;
        /**
         * @var array
         */
        private $response_rate_ids;
        /**
         * @var array
         */
        private $response_line_items;
        /**
         * @var bool
         */
        private $is_itemized_tax_display;
        /**
         * Backend tax classes.
         *
         * @var array
         */
        private $backend_tax_classes;
        /**
         * Tracks instance.
         *
         * @var WC_Connect_Tracks
         */
        protected $tracks;
        const PROXY_PATH = 'taxjar/v2';
        const OPTION_NAME = 'wc_connect_taxes_enabled';
        const SETUP_WIZARD_OPTION_NAME = 'woocommerce_setup_automated_taxes';
        /**
         * WCS TaxJar integration constructor.
         *
         * @param WC_Connect_API_Client     $api_client          TaxJar API client.
         * @param WC_Connect_Logger         $logger              Logger.
         * @param string                    $wc_connect_base_url WC Connect base URL.
         * @param WC_Connect_Tracks         $tracks              Tracks.
         * @param \Automattic\WCServices\StoreNotices\StoreNoticesNotifier|null $notifier            Notifier.
         */
        public function __construct(\WC_Connect_API_Client $api_client, \WC_Connect_Logger $logger, $wc_connect_base_url, \WC_Connect_Tracks $tracks, ?\Automattic\WCServices\StoreNotices\StoreNoticesNotifier $notifier = \null)
        {
        }
        /**
         * Generates an itemized tax rate name based on the provided tax rate and country.
         *
         * @param string $taxjar_rate_name The tax rate name from TaxJar, typically including '_tax_rate'.
         * @param string $to_country       The destination country for the tax calculation.
         * @param array  $jurisdictions    Tax jurisdictions.
         *
         * @return string The formatted and localized tax rate name.
         */
        private static function generate_itemized_tax_rate_name(string $taxjar_rate_name, string $to_country, array $jurisdictions)
        {
        }
        public function init()
        {
        }
        /**
         * Are automated taxes enabled?
         *
         * @return bool
         */
        public function is_enabled()
        {
        }
        /**
         * Add our "automated taxes" setting to the core group.
         *
         * @param array $tax_settings WooCommerce Tax Settings
         *
         * @return array
         */
        public function add_tax_settings($tax_settings)
        {
        }
        /**
         * Get the text to show in the tooltip next to automated tax settings.
         */
        private function get_tax_tooltip()
        {
        }
        /**
         * Hack to force keepAlive: true on tax setting tooltip.
         */
        public function fix_tooltip_keepalive()
        {
        }
        /**
         * When automated taxes are enabled, overwrite core tax settings that might break the API integration
         * This is similar to the original plugin functionality where these options were reverted on page load
         * See: https://github.com/taxjar/taxjar-woocommerce-plugin/blob/82bf7c58/includes/class-wc-taxjar-integration.php#L66-L91
         *
         * @param mixed $value - option value
         * @param array $option - option metadata
         * @return string new option value, based on the automated taxes state or $value
         */
        public function sanitize_tax_option($value, $option)
        {
        }
        /**
         * Overwrite WooCommerce core tax settings if they are different than expected
         *
         * Ported from TaxJar's plugin and modified to support $this->expected_options
         * See: https://github.com/taxjar/taxjar-woocommerce-plugin/blob/82bf7c58/includes/class-wc-taxjar-integration.php#L66-L91
         */
        public function configure_tax_settings()
        {
        }
        /**
         * TaxJar supports USA, Canada, Australia, and the European Union + Great Britain
         * See: https://developers.taxjar.com/api/reference/#countries
         *
         * @return array Countries supported by TaxJar.
         */
        public function get_supported_countries()
        {
        }
        /**
         * Check if a given country is supported by TaxJar.
         *
         * @param string $country Two character country code.
         *
         * @return bool Whether or not the country is supported by TaxJar.
         */
        public function is_supported_country($country)
        {
        }
        /**
         * Gets the store's location settings.
         *
         * Modified version of TaxJar's plugin.
         * See: https://github.com/taxjar/taxjar-woocommerce-plugin/blob/4b481f5/includes/class-wc-taxjar-integration.php#L910
         *
         * @return array
         */
        public function get_store_settings()
        {
        }
        /**
         * @param $message
         */
        public function _log($message)
        {
        }
        /**
         * @param $message
         */
        public function _error($message)
        {
        }
        /**
         * Wrapper to avoid calling calculate_totals() for admin carts.
         *
         * @param $wc_cart_object
         */
        public function maybe_calculate_totals($wc_cart_object)
        {
        }
        /**
         * Calculate tax / totals using TaxJar at checkout
         *
         * Unchanged from the TaxJar plugin.
         * See: https://github.com/taxjar/taxjar-woocommerce-plugin/blob/4b481f5/includes/class-wc-taxjar-integration.php#L471
         *
         * @param WC_Cart $wc_cart_object
         * @return void
         */
        public function calculate_totals($wc_cart_object)
        {
        }
        /**
         * Calculate tax / totals using TaxJar for backend orders
         *
         * Unchanged from the TaxJar plugin.
         * See: https://github.com/taxjar/taxjar-woocommerce-plugin/blob/96b5d57/includes/class-wc-taxjar-integration.php#L557
         *
         * @return void
         */
        public function calculate_backend_totals($order_id)
        {
        }
        /**
         * Get formatted address for tax calculation.
         *
         * @param string|null $location_type Location type: 'base', 'shipping', or 'billing'.
         *                                   If null, uses default behavior from get_taxable_address().
         * @return array Address array with to_country, to_state, etc.
         */
        protected function get_address($location_type = \null)
        {
        }
        /**
         * Allow street address to be passed when finding rates
         *
         * @param array  $matched_tax_rates
         * @param string $tax_class
         * @return array
         */
        public function allow_street_address_for_matched_rates($matched_tax_rates, $tax_class = '')
        {
        }
        public function cleanup_tax_label($rate_name)
        {
        }
        /**
         * Aggregate tax totals by label.
         *
         * When items are taxed at different locations (e.g., services at store address,
         * products at customer address), this combines taxes with the same label into
         * a single line for cleaner display.
         *
         * Example: Two "County Tax" entries ($0.25 + $0.12) become one "County Tax" ($0.37).
         *
         * @param array   $tax_totals Array of tax total objects from WooCommerce.
         * @param WC_Cart $cart       The cart object.
         * @return array Aggregated tax totals.
         */
        public function aggregate_tax_totals($tax_totals, $cart)
        {
        }
        /**
         * Check if local pickup shipping method is selected.
         *
         * @return bool
         */
        protected function is_local_pickup()
        {
        }
        /**
         * Group line items by their tax location.
         *
         * @param array $line_items      Line items with 'tax_location' key.
         * @param bool  $is_local_pickup If true, all items grouped under 'base'.
         * @return array Items grouped by location type.
         */
        protected function group_items_by_location($line_items, $is_local_pickup = \false)
        {
        }
        /**
         * Calculate taxes for items grouped by location.
         *
         * @param array $items_by_location Items grouped by location type.
         * @param float $shipping_amount   Shipping amount.
         * @return array|false Merged taxes or false if any calculation fails.
         */
        protected function calculate_taxes_by_location($items_by_location, $shipping_amount)
        {
        }
        /**
         * Get taxable address.
         *
         * @param string|null $location_type Location type: 'base', 'shipping', or 'billing'.
         *                                   If null, uses woocommerce_tax_based_on option with
         *                                   local pickup override. Null is kept for backward
         *                                   compatibility - internal code always passes explicit type.
         * @return array
         */
        public function get_taxable_address($location_type = \null)
        {
        }
        /**
         * Get address details of customer for backend orders
         *
         * Unchanged from the TaxJar plugin.
         * See: https://github.com/taxjar/taxjar-woocommerce-plugin/blob/4b481f5/includes/class-wc-taxjar-integration.php#L607
         *
         * @return array
         */
        protected function get_backend_address()
        {
        }
        /**
         * Get line items at checkout
         *
         * Unchanged from the TaxJar plugin.
         * See: https://github.com/taxjar/taxjar-woocommerce-plugin/blob/96b5d57/includes/class-wc-taxjar-integration.php#L645
         *
         * @return array
         */
        protected function get_line_items($wc_cart_object)
        {
        }
        /**
         * Get line items for backend orders
         *
         * Unchanged from the TaxJar plugin.
         * See: https://github.com/taxjar/taxjar-woocommerce-plugin/blob/96b5d57/includes/class-wc-taxjar-integration.php#L695
         *
         * @return array
         */
        protected function get_backend_line_items($order)
        {
        }
        protected function get_line_item($id, $line_items)
        {
        }
        /**
         * Override tax rates for individual cart items.
         *
         * This filter intercepts WooCommerce's tax rate lookup and returns
         * the correct rates for each item based on its tax location (base vs shipping).
         * This enables mixed carts where some items are taxed at the store address
         * and others at the customer's shipping address.
         *
         * @param array  $item_tax_rates Tax rates found by WooCommerce's native lookup.
         * @param object $item           Cart item object with product, quantity, etc.
         * @param object $cart           The WC_Cart object.
         * @return array Tax rates to use for this item.
         */
        public function override_cart_item_tax_rates($item_tax_rates, $item, $cart)
        {
        }
        /**
         * Re-apply TaxJar-calculated taxes to order items after WooCommerce recalculates them.
         *
         * When the Store API creates an order from a cart, it calls $order->calculate_taxes()
         * which looks up tax rates using the customer's address. For mixed-location carts
         * (some items taxed at base, others at customer address), the customer-address lookup
         * can zero out taxes for base-taxed items. This hook restores the correct TaxJar rates.
         *
         * @param WC_Order_Item $item             The order item.
         * @param array         $calculate_tax_for Tax calculation arguments.
         */
        public function override_order_item_taxes($item, $calculate_tax_for)
        {
        }
        /**
         * Override Woo's native tax rates to handle multiple line items with the same tax rate
         * within the same tax class with different rates due to exemption thresholds
         *
         * Unchanged from the TaxJar plugin.
         * See: https://github.com/taxjar/taxjar-woocommerce-plugin/blob/4b481f5/includes/class-wc-taxjar-integration.php#L729
         *
         * @return array
         */
        public function override_woocommerce_tax_rates($taxes, $price, $rates)
        {
        }
        /**
         * Set customer zip code and state to store if local shipping option set
         *
         * Unchanged from the TaxJar plugin.
         * See: https://github.com/taxjar/taxjar-woocommerce-plugin/blob/82bf7c587/includes/class-wc-taxjar-integration.php#L653
         *
         * @return array
         */
        public function append_base_address_to_customer_taxable_address($address)
        {
        }
        /**
         * This method is used to override the TaxJar result.
         *
         * @param object $taxjar_resp_tax TaxJar response object.
         * @param array  $body            Body of TaxJar request.
         *
         * @return object
         */
        public function maybe_override_taxjar_tax($taxjar_resp_tax, $body)
        {
        }
        /**
         * Validates TaxJar nexus address.
         *
         * @param  array $address
         *
         * @return bool
         */
        private function is_nexus_address_valid($address): bool
        {
        }
        /**
         * Calculate sales tax using SmartCalcs
         *
         * Direct from the TaxJar plugin, without Nexus check.
         * See: https://github.com/taxjar/taxjar-woocommerce-plugin/blob/96b5d57/includes/class-wc-taxjar-integration.php#L247
         *
         * @return array|boolean
         */
        public function calculate_tax($options = array())
        {
        }
        // End calculate_tax().
        /**
         * Return address parts.
         * Primarily used in address validation to operate on normalized and predictable indexes.
         *
         * @param array $body Request body.
         *
         * @return array
         */
        private function get_address_parts($body)
        {
        }
        /**
         * Get itemized tax rates from TaxJar response.
         *
         * @param array  $taxes        The tax data array that will be modified and returned.
         * @param object $taxjar_taxes TaxJar response object.
         * @param array  $options      Cart data used for tax calculation.
         *
         * @return array
         */
        private function get_itemized_tax_rates($taxes, $taxjar_taxes, $options): array
        {
        }
        /**
         * Add or update WooCommerce tax rate.
         *
         * @param  array     $location
         * @param  int|float $rate
         * @param  string    $tax_class
         * @param  int       $freight_taxable
         * @param  int       $rate_priority
         * @param  string    $tax_rate_name
         *
         * @return int
         */
        public function create_or_update_tax_rate($location, $rate, $tax_class = '', $freight_taxable = 1, $rate_priority = 1, $tax_rate_name = 'Tax')
        {
        }
        /**
         * Validate TaxJar API request json value and add the error to log.
         *
         * @param $json
         *
         * @return bool
         */
        public function validate_taxjar_request($json)
        {
        }
        /**
         * Wrap SmartCalcs API requests in a transient-based caching layer.
         *
         * Unchanged from the TaxJar plugin.
         * See: https://github.com/taxjar/taxjar-woocommerce-plugin/blob/4b481f5/includes/class-wc-taxjar-integration.php#L451
         *
         * @param $json
         * @param $from_state
         *
         * @return mixed|WP_Error
         */
        public function smartcalcs_cache_request($json, $from_state)
        {
        }
        /**
         * Make a TaxJar SmartCalcs API request through the WCS proxy.
         *
         * Modified from TaxJar's plugin.
         * See: https://github.com/taxjar/taxjar-woocommerce-plugin/blob/82bf7c58/includes/class-wc-taxjar-integration.php#L440
         *
         * @param $json
         *
         * @return array|WP_Error
         */
        public function smartcalcs_request($json)
        {
        }
        /**
         * Exports existing tax rates to a CSV and clears the table.
         *
         * Ported from TaxJar's plugin.
         * See: https://github.com/taxjar/taxjar-woocommerce-plugin/blob/42cd4cd0/taxjar-woocommerce.php#L75
         */
        public function backup_existing_tax_rates()
        {
        }
        /**
         * Checks if currently on the WooCommerce order page.
         *
         * @return boolean
         */
        public function on_order_page()
        {
        }
        /**
         * Admin New Order Assets
         */
        public function load_taxjar_admin_new_order_assets()
        {
        }
        /**
         * Check for incorrect California tax nexus in the TaxJar API response or cached response.
         *
         * @param $response_body
         * @param $cached
         *
         * @return void
         */
        private function check_for_incorrect_california_tax_nexus($response_body, $cached, $from_state): void
        {
        }
    }
    class WC_Connect_Tracks
    {
        static $product_name = 'woocommerceconnect';
        /**
         * @var WC_Connect_Logger
         */
        protected $logger;
        /**
         * Plugin file path.
         *
         * @var string
         */
        public $plugin_file;
        public function __construct(\WC_Connect_Logger $logger, $plugin_file)
        {
        }
        public function init()
        {
        }
        public function opted_in($source = \null)
        {
        }
        public function opted_out()
        {
        }
        public function shipping_zone_method_added($instance_id, $service_id)
        {
        }
        public function shipping_zone_method_deleted($instance_id, $service_id)
        {
        }
        public function shipping_zone_method_status_toggled($instance_id, $service_id, $zone_id, $enabled)
        {
        }
        public function saved_service_settings($service_id)
        {
        }
        public function record_user_event($event_type, $data = array())
        {
        }
        protected function debug($message)
        {
        }
    }
    /**
     * WC_Connect_Compatibility class.
     */
    class WC_Connect_Utils
    {
        /**
         * For a given product ID, it tries to find its name inside an order's line items.
         * This is useful when an order has a product which was later deleted from the
         * store.
         *
         * @param int      $product_id Product ID or variation ID.
         * @param WC_Order $order      WC Order.
         *
         * @return string The product (or variation) name, ready to print
         */
        public static function get_product_name_from_order($product_id, $order)
        {
        }
        /**
         * For a given product ID, it tries to find its price inside an order's line items.
         *
         * @param int      $product_id Product ID or variation ID.
         * @param WC_Order $order WC Order.
         *
         * @return float The product (or variation) price, or NULL if it wasn't found
         */
        public static function get_product_price_from_order($product_id, $order)
        {
        }
        /**
         * Retrieve the corresponding Product for the given Order Item.
         *
         * @param WC_Order                                  $order WC Order.
         * @param WC_Order_Item|WC_Order_Item_Product|array $item  Order Item.
         *
         * @return WC_Product|null|false
         */
        public static function get_item_product(\WC_Order $order, $item)
        {
        }
        /**
         * Check if order contains given product.
         *
         * @param int      $product_id WC Product ID.
         * @param WC_Order $order      WC Order.
         *
         * @return WC_Order_Item_Product|false
         */
        public static function get_line_item_from_order($product_id, $order)
        {
        }
    }
    /**
     * Enum for WCS&T to WCShipping migration states.
     */
    class WC_Connect_WCST_To_WCShipping_Migration_State_Enum
    {
        // These are used for WCS&T to WCShipping migration.
        public const NOT_STARTED = 1;
        public const STARTED = 2;
        public const ERROR_STARTED = 3;
        public const INSTALLING = 4;
        public const ERROR_INSTALLING = 5;
        public const ACTIVATING = 6;
        public const ERROR_ACTIVATING = 7;
        public const DB_MIGRATION = 8;
        public const ERROR_DB_MIGRATION = 9;
        public const DEACTIVATING = 10;
        public const ERROR_DEACTIVATING = 11;
        public const COMPLETED = 12;
        public static function is_valid_value($state)
        {
        }
    }
    abstract class WC_REST_Connect_Base_Controller extends \WP_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * @var WC_Connect_API_Client
         */
        protected $api_client;
        /**
         * @var WC_Connect_Service_Settings_Store
         */
        protected $settings_store;
        /**
         * @var WC_Connect_Logger
         */
        protected $logger;
        public function __construct(\WC_Connect_API_Client $api_client, \WC_Connect_Service_Settings_Store $settings_store, \WC_Connect_Logger $logger)
        {
        }
        public function register_routes()
        {
        }
        /**
         * Consolidate cache prevention mechanisms.
         */
        public function prevent_route_caching()
        {
        }
        /**
         * Send a no-cache header for WCS REST API responses. Prompted by cache issues
         * on the Pantheon hosting platform.
         *
         * See: https://pantheon.io/docs/cache-control/
         *
         * @param WP_REST_Response $response
         * @param WP_REST_Server   $server
         *
         * @return WP_REST_Response passthrough $response parameter
         */
        public function send_nocache_header($response, $server)
        {
        }
        public function get_internal($request)
        {
        }
        public function post_internal($request)
        {
        }
        public function put_internal($request)
        {
        }
        public function delete_internal($request)
        {
        }
        /**
         * Validate the requester's permissions
         */
        public function check_permission($request)
        {
        }
    }
    class WC_REST_Connect_Account_Settings_Controller extends \WC_REST_Connect_Base_Controller
    {
        protected $rest_base = 'connect/account/settings';
        /*
         * @var WC_Connect_Payment_Methods_Store
         */
        protected $payment_methods_store;
        /**
         * @var WC_Connect_Account_Settings
         */
        protected $account_settings;
        public function __construct(\WC_Connect_API_Client $api_client, \WC_Connect_Service_Settings_Store $settings_store, \WC_Connect_Logger $logger, \WC_Connect_Payment_Methods_Store $payment_methods_store)
        {
        }
        public function get()
        {
        }
        public function post($request)
        {
        }
    }
    class WC_REST_Connect_Address_Normalization_Controller extends \WC_REST_Connect_Base_Controller
    {
        protected $rest_base = 'connect/normalize-address';
        public function post($request)
        {
        }
        /**
         * Validate the requester's permissions
         */
        public function check_permission($request)
        {
        }
    }
    class WC_REST_Connect_Assets_Controller extends \WC_REST_Connect_Base_Controller
    {
        protected $rest_base = 'connect/assets';
        public function get()
        {
        }
    }
    class WC_REST_Connect_Migration_Flag_Controller extends \WC_REST_Connect_Base_Controller
    {
        protected $rest_base = 'connect/migration-flag';
        /**
         * Tracks instance.
         *
         * @var WC_Connect_Tracks
         */
        protected $tracks;
        public function __construct($api_client, $settings_store, $logger, $tracks)
        {
        }
        /**
         * Set tracks instance.
         *
         * @param WC_Connect_Tracks $tracks Tracks instance.
         */
        public function set_tracks($tracks)
        {
        }
        public function post($request)
        {
        }
    }
    class WC_REST_Connect_Packages_Controller extends \WC_REST_Connect_Base_Controller
    {
        protected $rest_base = 'connect/packages';
        /**
         * @var WC_Connect_Package_Settings
         */
        protected $package_settings;
        public function __construct(\WC_Connect_API_Client $api_client, \WC_Connect_Service_Settings_Store $settings_store, \WC_Connect_Logger $logger, \WC_Connect_Service_Schemas_Store $service_schemas_store)
        {
        }
        public function get()
        {
        }
        /**
         * Update the existing custom and predefined packages.
         *
         * @param  WP_REST_Request $request The request body contains the custom/predefined packages to replace.
         * @return WP_REST_Response
         */
        public function put($request)
        {
        }
        /**
         * Create custom and/or predefined packages.
         *
         * @param  WP_REST_Request $request The request body contains the custom/predefined packages to create.
         * @return WP_Error|WP_REST_Response
         */
        public function post($request)
        {
        }
    }
    class WC_REST_Connect_Self_Help_Controller extends \WC_REST_Connect_Base_Controller
    {
        protected $rest_base = 'connect/self-help';
        public function post($request)
        {
        }
    }
    class WC_REST_Connect_Service_Data_Refresh_Controller extends \WC_REST_Connect_Base_Controller
    {
        protected $rest_base = 'connect/service-data-refresh';
        /**
         * @var WC_Connect_Service_Schemas_Store
         */
        protected $services_schemas_store;
        public function set_service_schemas_store($services_schemas_store)
        {
        }
        public function post()
        {
        }
    }
    class WC_REST_Connect_Services_Controller extends \WC_REST_Connect_Base_Controller
    {
        protected $rest_base = 'connect/services/(?P<id>[a-z_]+)\/(?P<instance>[\d]+)';
        /**
         * @var WC_Connect_Service_Schemas_Store
         */
        protected $service_schemas_store;
        public function __construct(\WC_Connect_API_Client $api_client, \WC_Connect_Service_Settings_Store $settings_store, \WC_Connect_Logger $logger, \WC_Connect_Service_Schemas_Store $schemas_store)
        {
        }
        public function get($request)
        {
        }
        /**
         * Attempts to update the settings on a particular service and instance
         */
        public function post($request)
        {
        }
    }
    class WC_REST_Connect_Shipping_Carrier_Controller extends \WC_REST_Connect_Base_Controller
    {
        protected $rest_base = 'connect/shipping/carrier';
        public function post($request)
        {
        }
    }
    class WC_REST_Connect_Shipping_Carrier_Delete_Controller extends \WC_REST_Connect_Base_Controller
    {
        protected $rest_base = 'connect/shipping/carrier/(?P<carrier_id>.+)';
        public function delete($request)
        {
        }
    }
    /**
     * Retrieve a list of carrier WooCommerce Tax supports, along with the
     * fields needed for each carrier in order to do carrier account registration.
     */
    class WC_REST_Connect_Shipping_Carrier_Types_Controller extends \WC_REST_Connect_Base_Controller
    {
        /**
         * Carrier-types end point
         *
         * @var string
         */
        protected $rest_base = 'connect/shipping/carrier-types';
        /**
         * GET request
         *
         * @return WP_REST_Response|WP_Error
         */
        public function get()
        {
        }
    }
    class WC_REST_Connect_Shipping_Carriers_Controller extends \WC_REST_Connect_Base_Controller
    {
        protected $rest_base = 'connect/shipping/carriers';
        public function get()
        {
        }
    }
    class WC_REST_Connect_Shipping_Label_Controller extends \WC_REST_Connect_Base_Controller
    {
        protected $rest_base = 'connect/label/(?P<order_id>\d+)';
        /*
         * @var WC_Connect_Shipping_Label
         */
        protected $shipping_label;
        /*
         * @var WC_Connect_Payment_Methods_Store
         */
        protected $payment_methods_store;
        public function __construct(\WC_Connect_API_Client $api_client, \WC_Connect_Service_Settings_Store $settings_store, \WC_Connect_Logger $logger, \WC_Connect_Shipping_Label $shipping_label, \WC_Connect_Payment_Methods_Store $payment_methods_store)
        {
        }
        public function register_routes()
        {
        }
        public function get($request)
        {
        }
        public function post($request)
        {
        }
    }
    class WC_REST_Connect_Shipping_Label_Eligibility_Controller extends \WC_REST_Connect_Base_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'connect/label';
        /**
         * @var WC_Connect_Shipping_Label
         */
        protected $shipping_label;
        /**
         * @var WC_Connect_Payment_Methods_Store
         */
        protected $payment_methods_store;
        protected $has_only_tax_functionality;
        public function __construct(\WC_Connect_API_Client $api_client, \WC_Connect_Service_Settings_Store $settings_store, \WC_Connect_Logger $logger, \WC_Connect_Shipping_Label $shipping_label, \WC_Connect_Payment_Methods_Store $payment_methods_store, $has_only_tax_functionality)
        {
        }
        /**
         * Register the routes for the shipping label eligibility.
         */
        public function register_routes()
        {
        }
        /**
         * Available params for $request:
         * - `can_create_payment_method: Boolean`: optional with default value `true`. If `false`, at least one existing payment method is
         *   required for label creation.
         * - `can_create_package: Boolean`: optional with default value `true`. If `false`, at least one pre-existing
         *   package (custom or predefined) is required for label creation.
         * - `can_create_customs_form: Boolean`: optional with default value `true`. If `false`, the order is eligible for
         *   label creation if a customs form is not required for the origin and destination address in the US.
         *
         * @param WP_REST_Request $request API request with optional parameters as above.
         * @return WP_REST_Response
         */
        public function get_creation_eligibility($request)
        {
        }
    }
    class WC_REST_Connect_Shipping_Label_Preview_Controller extends \WC_REST_Connect_Base_Controller
    {
        protected $rest_base = 'connect/label/preview';
        public function get($request)
        {
        }
    }
    class WC_REST_Connect_Shipping_Label_Print_Controller extends \WC_REST_Connect_Base_Controller
    {
        protected $rest_base = 'connect/label/print';
        public function get($request)
        {
        }
    }
    class WC_REST_Connect_Shipping_Label_Refund_Controller extends \WC_REST_Connect_Base_Controller
    {
        protected $rest_base = 'connect/label/(?P<order_id>\d+)/(?P<label_id>\d+)/refund';
        public function post($request)
        {
        }
    }
    class WC_REST_Connect_Shipping_Label_Status_Controller extends \WC_REST_Connect_Base_Controller
    {
        protected $rest_base = 'connect/label/(?P<order_id>\d+)/(?P<label_ids>(\d+)(,\d+)*)';
        public function get($request)
        {
        }
    }
    class WC_REST_Connect_Shipping_Rates_Controller extends \WC_REST_Connect_Base_Controller
    {
        protected $rest_base = 'connect/label/(?P<order_id>\d+)/rates';
        /**
         * Prefix to add in package name for making requests with multiple rates.
         */
        public $SPECIAL_RATE_PREFIX = '_wcs_rate_type_';
        /**
         * Array of extra options to collect rates for.
         */
        protected $extra_rates = array('signature_required' => array('signature' => 'yes'), 'adult_signature_required' => array('signature' => 'adult'));
        private function has_customs_data($package)
        {
        }
        /**
         *
         * @param WP_REST_Request $request - See WC_Connect_API_Client::get_label_rates()
         * @return array|WP_Error
         */
        public function post($request)
        {
        }
        /**
         * Get standard rates along with rates for special options
         * that are defined in $this->extra_rates
         *
         * @param stdClass $payload Request payload.
         * @return WPError|stdClass
         */
        public function get_all_rates($payload)
        {
        }
        /**
         * Merge default rates together with extra rates.
         *
         * get_all_rates requests extra rate options as separate
         * packages. This function groups these separate packages
         * under the original the package name for easier parsing
         * on the frontend.
         *
         * @param stdClass $rates                  Rate response for server.
         * @param array    $original_package_names Package names.
         *
         * @return array Rates
         */
        public function merge_all_rates($rates, $original_package_names)
        {
        }
        /**
         * Make rate request.
         *
         * @param stdClass $payload Request payload.
         * @return WPError|stdClass
         */
        public function request_rates($payload)
        {
        }
    }
    class WC_REST_Connect_Subscription_Activate_Controller extends \WC_REST_Connect_Base_Controller
    {
        protected $rest_base = 'connect/subscription/(?P<subscription_key>.+)/activate';
        public function post($request)
        {
        }
    }
    class WC_REST_Connect_Subscriptions_Controller extends \WC_REST_Connect_Base_Controller
    {
        protected $rest_base = 'connect/subscriptions';
        public function post()
        {
        }
    }
    class WC_REST_Connect_Tos_Controller extends \WC_REST_Connect_Base_Controller
    {
        protected $rest_base = 'connect/tos';
        public function get()
        {
        }
        public function post($request)
        {
        }
        /**
         * Validate the requester's permissions
         */
        public function check_permission($request)
        {
        }
    }
    /**
     * REST controller using WCS&T's settings store instead of WCShipping's.
     */
    class WC_REST_Connect_WCShipping_Compatibility_Packages_Controller extends \WC_REST_Connect_Packages_Controller
    {
        protected $rest_base = 'connect/wcservices/packages';
    }
    /**
     * REST API Data controller class.
     *
     * @package WooCommerce/API
     * @extends WC_REST_Controller
     */
    class WC_REST_Dev_Data_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'data';
        /**
         * Register routes.
         *
         * @since 3.1.0
         */
        public function register_routes()
        {
        }
        /**
         * Check whether a given request has permission to read site data.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check whether a given request has permission to read site settings.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Return the list of data resources.
         *
         * @since  3.1.0
         * @param  WP_REST_Request $request
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Prepare a data resource object for serialization.
         *
         * @param stdClass        $report Report data.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($resource, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param object $item Data object.
         * @return array Links for the given country.
         */
        protected function prepare_links($item)
        {
        }
        /**
         * Get the data index schema, conforming to JSON Schema.
         *
         * @since  3.1.0
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Data controller class.
     *
     * @package WooCommerce/API
     * @extends WC_REST_Controller
     */
    class WC_REST_Dev_Data_Continents_Controller extends \WC_REST_Dev_Data_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * @var WC_Connect_Continents
         */
        protected $continents;
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'data/continents';
        public function __construct()
        {
        }
        /**
         * Register routes.
         *
         * @since 3.1.0
         */
        public function register_routes()
        {
        }
        /**
         * Return the list of states for all continents.
         *
         * @since  3.1.0
         * @param  WP_REST_Request $request
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Return the list of locations for a given continent.
         *
         * @since  3.1.0
         * @param  WP_REST_Request $request
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Prepare the data object for response.
         *
         * @since  3.1.0
         * @param object          $item Data object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response $response Response data.
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param object $item Data object.
         * @return array Links for the given continent.
         */
        protected function prepare_links($item)
        {
        }
        /**
         * Get the location schema, conforming to JSON Schema.
         *
         * @since  3.1.0
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
}
namespace Automattic\WCServices\Integrations {
    /**
     * WooCommerceBlocks Integration class.
     */
    class WooCommerceBlocksIntegration implements \Automattic\WooCommerce\Blocks\Integrations\IntegrationInterface
    {
        /**
         * The base URL to use for loading assets.
         *
         * @var string
         */
        private string $base_url;
        public function __construct(string $wc_connect_base_url)
        {
        }
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
    }
}
namespace Automattic\WCServices\StoreApi {
    /**
     * Interface StoreApiExtensionInterface
     */
    abstract class AbstractStoreApiExtension
    {
        /**
         * Stores the Store API Extend Schema instance.
         *
         * @var \Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema
         */
        protected static \Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema $extend_schema;
        /**
         * Stores the possible endpoints to extend.
         *
         * @var array
         */
        protected static array $endpoints = array('cart-item' => \Automattic\WooCommerce\StoreApi\Schemas\V1\CartItemSchema::IDENTIFIER, 'cart' => \Automattic\WooCommerce\StoreApi\Schemas\V1\CartSchema::IDENTIFIER, 'checkout' => \Automattic\WooCommerce\StoreApi\Schemas\V1\CheckoutSchema::IDENTIFIER, 'product' => \Automattic\WooCommerce\StoreApi\Schemas\V1\ProductSchema::IDENTIFIER);
        /**
         * Stores the possible schema types.
         *
         * @var array
         */
        protected static array $schema_types = array('array_a' => 'ARRAY_A', 'array_n' => 'ARRAY_N');
        /**
         * AbstractStoreApiExtension constructor.
         *
         * @param \Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema $extend_schema The ExtendSchema instance.
         */
        public function __construct(\Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema $extend_schema)
        {
        }
        /**
         * Get the namespace for the extension.
         */
        public function get_namespace(): string
        {
        }
        /**
         * Get the endpoint to extend.
         *
         * Should return one of the keys from the $endpoints array.
         *
         * @return string
         */
        abstract public function get_endpoint(): string;
        /**
         * The data callback method.
         *
         * This is where you can define the data this endpoint should return.
         *
         * @return array
         */
        abstract public function data_callback(): array;
        /**
         * The schema callback method.
         *
         * This is where you can define the schema for the endpoint.
         *
         * @return array
         */
        abstract public function schema_callback(): array;
        /**
         * The update callback method.
         *
         * This is where you can listen for updates to the endpoint and handle accordingly.
         *
         * @param array $data Data to update.
         *
         * @return void
         */
        abstract public function update_callback(array $data): void;
        /**
         * Get the schema type to extend the endpoint with.
         *
         * Should return one of the keys from the $schema_types array.
         *
         * @return string
         */
        abstract public function get_schema_type(): string;
    }
}
namespace Automattic\WCServices\StoreApi\Extensions {
    /**
     * Class StoreNoticesExtension
     */
    class StoreNoticesExtension extends \Automattic\WCServices\StoreApi\AbstractStoreApiExtension
    {
        /**
         * Get the endpoint to extend.
         *
         * Should return one of the keys from the $endpoints array.
         *
         * @return string
         */
        public function get_endpoint(): string
        {
        }
        /**
         * The data callback method.
         *
         * This is where you can define the data this endpoint should return.
         *
         * @return array
         */
        public function data_callback(): array
        {
        }
        /**
         * The schema callback method.
         *
         * This is where you can define the schema for the endpoint.
         *
         * @return array
         */
        public function schema_callback(): array
        {
        }
        /**
         * Get the schema type to extend the endpoint with.
         *
         * Should return one of the keys from the $schema_types array.
         *
         * @return string
         */
        public function get_schema_type(): string
        {
        }
        /**
         * The update callback method.
         *
         * This is where you can listen for updates to the endpoint and handle accordingly.
         *
         * @param array $data Data to update.
         *
         * @return void
         */
        public function update_callback(array $data): void
        {
        }
    }
}
namespace Automattic\WCServices\StoreApi {
    /**
     * StoreApiExtendSchema class.
     */
    class StoreApiExtendSchema
    {
        /**
         * Stores Store API ExtendSchema instance.
         *
         * @var \Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema
         */
        private static \Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema $instance;
        /**
         * Plugin Identifier
         *
         * @var string
         */
        const IDENTIFIER = 'woocommerce-services';
        /**
         * ExtendSchemaService constructor.
         */
        private function __construct()
        {
        }
        /**
         * Returns the ExtendSchema instance.
         */
        public static function instance(): \Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema
        {
        }
    }
    /**
     * Store API Extension Controller.
     */
    class StoreApiExtensionController
    {
        /**
         * Stores the Store API Extend Schema instance.
         *
         * @var \Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema
         */
        private static \Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema $extend_schema;
        /**
         * Stores the registered extensions.
         *
         * @var array
         */
        private array $registered_extensions = array();
        /**
         * StoreApiExntensionController constructor.
         *
         * @param \Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema $extend_schema The StoreApiExtendSchema instance.
         */
        public function __construct(\Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema $extend_schema)
        {
        }
        /**
         * Registers an extension.
         *
         * @param AbstractStoreApiExtension $extension The extension to register.
         */
        public function register_extension(\Automattic\WCServices\StoreApi\AbstractStoreApiExtension $extension)
        {
        }
        /**
         * Returns the registered extensions.
         *
         * @return array
         */
        public function get_registered_extensions(): array
        {
        }
        /**
         * Registers the data into each endpoint.
         */
        public function extend_store()
        {
        }
        /**
         * Registers the endpoint data for an extension.
         *
         * @param AbstractStoreApiExtension $extension The extension to register.
         */
        public function register_endpoint_data(\Automattic\WCServices\StoreApi\AbstractStoreApiExtension $extension)
        {
        }
        /**
         * Registers the update callback for an extension.
         *
         * @param AbstractStoreApiExtension $extension The extension to register.
         */
        public function register_update_callback(\Automattic\WCServices\StoreApi\AbstractStoreApiExtension $extension)
        {
        }
    }
}
namespace Automattic\WCServices\StoreNotices {
    /**
     * Class StoreNotice
     */
    class StoreNotice
    {
        /**
         * The notice message.
         *
         * @var string
         */
        private string $message;
        /**
         * The notice type.
         *
         * @var string
         */
        private string $type;
        /**
         * The notice data.
         *
         * @var array|null
         */
        private ?array $data;
        /**
         * StoreNotice constructor.
         *
         * @param string     $message The notice message.
         * @param string     $type    The notice type.
         * @param array|null $data    The notice data.
         */
        public function __construct(string $message, string $type, array $data = null)
        {
        }
        /**
         * Get the notice message.
         *
         * @return string
         */
        public function get_message(): string
        {
        }
        /**
         * Set the notice message.
         *
         * @param string $message The notice message.
         */
        public function set_message(string $message)
        {
        }
        /**
         * Get the notice type.
         *
         * @return string
         */
        public function get_type(): string
        {
        }
        /**
         * Set the notice type.
         *
         * @param string $type The notice type.
         */
        public function set_type(string $type)
        {
        }
        /**
         * Get the notice data.
         *
         * @return array|null
         */
        public function get_data(): ?array
        {
        }
        /**
         * Set the notice data.
         *
         * @param array|null $data The notice data.
         */
        public function set_data(?array $data)
        {
        }
        /**
         * To array.
         *
         * @return array
         */
        public function to_array(): array
        {
        }
    }
    /**
     * Class StoreNoticeTypes
     */
    class StoreNoticeTypes
    {
        /**
         * The notice type for a success.
         */
        const SUCCESS = 'success';
        /**
         * The notice type for an error.
         */
        const ERROR = 'error';
        /**
         * The notice type for an info notice.
         */
        const INFO = 'info';
        /**
         * The notice type for a warning.
         */
        const WARNING = 'warning';
    }
    /**
     * Class StoreNoticesController
     */
    class StoreNoticesController
    {
        /**
         * Notifier instance.
         *
         * @var StoreNoticesNotifier
         */
        private \Automattic\WCServices\StoreNotices\StoreNoticesNotifier $notifier;
        /**
         * StoreNoticesController constructor.
         *
         * @param StoreNoticesNotifier $notifier The WC_Connect_Logger instance.
         */
        public function __construct(\Automattic\WCServices\StoreNotices\StoreNoticesNotifier $notifier)
        {
        }
        /**
         * Maybe display address validation notices.
         */
        public function maybe_display_notices()
        {
        }
        /**
         * Check if the page contains the classic cart.
         *
         * @return bool
         */
        private static function is_classic_cart(): bool
        {
        }
        /**
         * Check if the page contains the classic checkout.
         *
         * @return bool
         */
        private static function is_classic_checkout(): bool
        {
        }
        /**
         * If there are error notices, we need to block the block checkout to prevent proceeding with checkout.
         *
         * @param \WP_Error $cart_errors List of errors in the cart.
         * @param \WC_Cart  $cart Cart object.
         * @return \WP_Error
         */
        public function add_store_api_cart_errors($cart_errors, $cart)
        {
        }
    }
    /**
     * Notifier class.
     */
    class StoreNoticesNotifier
    {
        /**
         * WC Session variable key
         *
         * @var string
         */
        const WC_SESSION_KEY = 'wcservices_store_notices';
        /**
         * Valid notice types.
         *
         * @var array
         */
        private static array $valid_notice_types = array(\Automattic\WCServices\StoreNotices\StoreNoticeTypes::ERROR, \Automattic\WCServices\StoreNotices\StoreNoticeTypes::SUCCESS, \Automattic\WCServices\StoreNotices\StoreNoticeTypes::INFO);
        /**
         * Is debug enabled.
         *
         * @var bool
         */
        private bool $is_debug_enabled;
        /**
         * Constructor.
         *
         * @param bool $is_debug_enabled Is debug enabled.
         */
        public function __construct(bool $is_debug_enabled)
        {
        }
        /**
         * Add a debug notice.
         * Debug notices are only displayed if debug is enabled and the user has the manage_options capability.
         *
         * @param string $message Message to display.
         * @param string $type    Type of notice - either error, success or notice.
         * @param array  $data    Additional data to pass.
         * @param string $group   Optional. Group to categorize notices.
         */
        public function debug(string $message, string $type = 'notice', array $data = array(), string $group = ''): void
        {
        }
        /**
         * Check if debug is enabled.
         *
         * @return bool
         */
        public function is_debug_enabled(): bool
        {
        }
        /**
         * Sanitize notice type.
         *
         * If an invalid notice type is passed, it will default to 'notice'.
         *
         * @param string $type Type of notice - either error, success or notice.
         *
         * @return mixed|string
         */
        public function sanitize_type(string $type)
        {
        }
        /**
         * Add notice if not already added.
         *
         * If an invalid notice type is passed, it will default to 'notice'.
         *
         * @param string $message Message to display.
         * @param string $type    Type of notice - either error, success or notice.
         * @param array  $data    Additional data to pass.
         * @param string $group   Optional. Group to categorize notices.
         *
         * @return void
         */
        public function maybe_add_notice(string $message, string $type = 'notice', array $data = array(), string $group = ''): void
        {
        }
        /**
         * Check if a notice has already been added.
         *
         * @param string $message The text to display in the notice.
         * @param string $type    Optional. The name of the notice type - either error, success or notice.
         * @param array  $data    Optional. Additional data to pass.
         * @param string $group   Optional. Group to categorize notices.
         *
         * @return bool
         */
        public function has_notice(string $message, string $type = 'notice', array $data = array(), string $group = ''): bool
        {
        }
        /**
         * Format a notice.
         *
         * @param string $message Message to display.
         * @param array  $data    Additional data to pass.
         * @param string $group   Group to categorize notices.
         *
         * @return array
         */
        private function format_notice(string $message, array $data, string $group): array
        {
        }
        /**
         * Add a notice.
         *
         * @param string $message Message to display.
         * @param string $type    Type of notice - either error, success or notice.
         * @param array  $data    Additional data to pass.
         * @param string $group   Optional. Group to categorize notices.
         */
        private function add_notice(string $message, string $type, array $data = array(), string $group = ''): void
        {
        }
        /**
         * Check if WC Session exists.
         *
         * @return bool
         */
        public static function wc_session_exists(): bool
        {
        }
        /**
         * Add an info notice.
         *
         * @param string $message Message to display.
         * @param array  $data    Additional data to pass.
         * @param string $group   Optional. Group to categorize notices.
         */
        public function info(string $message, array $data = array(), string $group = '')
        {
        }
        /**
         * Add an error notice.
         *
         * @param string $message Message to display.
         * @param array  $data    Additional data to pass.
         * @param string $group   Optional. Group to categorize notices.
         */
        public function error(string $message, array $data = array(), string $group = '')
        {
        }
        /**
         * Add a success notice.
         *
         * @param string $message Message to display.
         * @param array  $data    Additional data to pass.
         * @param string $group   Optional. Group to categorize notices.
         */
        public function success(string $message, array $data = array(), string $group = '')
        {
        }
        /**
         * Print all notices.
         */
        public function print_notices(): void
        {
        }
        /**
         * Get all notices.
         *
         * @return array
         */
        public static function get_notices(): array
        {
        }
        /**
         * Clear all notices.
         *
         * @param string $group Optional. Group of notices to clear.
         */
        public static function clear_notices(string $group = ''): void
        {
        }
        /**
         * Maybe get formatted message.
         *
         * @param string $message Message to display.
         * @param string $data    Additional data to pass.
         *
         * @return string
         */
        public function maybe_get_formatted_message(string $message, string $data = ''): string
        {
        }
    }
}
namespace Automattic\WCServices {
    /**
     * Automattic\WCServices utils class.
     */
    class Utils
    {
        /**
         * Get WooCommerce Services plugin version.
         *
         * @return string
         */
        public static function get_wcservices_version()
        {
        }
        /**
         * Get the base URL for enqueuing assets.
         *
         * @return string
         */
        public static function get_enqueue_base_url(): string
        {
        }
        /**
         * Get the plugin directory path.
         * This is a helper function to get the plugin directory path for either the main plugin or the WooCommerce plugin.
         *
         * @param bool $for_woocommerce Whether to get the path for the WooCommerce plugin.
         * @return string The plugin directory path.
         */
        public static function get_plugin_path($for_woocommerce = false)
        {
        }
        /**
         * Get the file modified time as a cache buster if we're in dev mode.
         *
         * @param string $file Local path to the file.
         *
         * @return string The cache buster value to use for the given file.
         */
        public static function get_file_version(string $file): string
        {
        }
        /**
         * Get sanitized request data.
         *
         * @param string $key     The key to get the data for.
         * @param string $default The default value to return if the key is not set.
         * @return string The sanitized data as a string.
         */
        public static function get_sanitized_request_data(string $key, string $default = ''): string
        {
        }
    }
}
namespace {
    class WC_Connect_Loader
    {
        /**
         * @var WC_Connect_Logger
         */
        protected $logger;
        /**
         * @var WC_Connect_Logger
         */
        protected $shipping_logger;
        /**
         * @var WC_Connect_API_Client
         */
        protected $api_client;
        /**
         * @var WC_Connect_Service_Schemas_Store
         */
        protected $service_schemas_store;
        /**
         * @var WC_Connect_Service_Settings_Store
         */
        protected $service_settings_store;
        /**
         * @var WC_Connect_Payment_Methods_Store
         */
        protected $payment_methods_store;
        /**
         * @var WC_REST_Connect_Account_Settings_Controller
         */
        protected $rest_account_settings_controller;
        /**
         * @var WC_REST_Connect_Packages_Controller
         */
        protected $rest_packages_controller;
        /**
         * @var WC_REST_Connect_Services_Controller
         */
        protected $rest_services_controller;
        /**
         * @var WC_REST_Connect_Self_Help_Controller
         */
        protected $rest_self_help_controller;
        /**
         * @var WC_REST_Connect_Shipping_Label_Controller
         */
        protected $rest_shipping_label_controller;
        /**
         * @var WC_REST_Connect_Shipping_Label_Status_Controller
         */
        protected $rest_shipping_label_status_controller;
        /**
         * @var WC_REST_Connect_Shipping_Label_Refund_Controller
         */
        protected $rest_shipping_label_refund_controller;
        /**
         * @var WC_REST_Connect_Shipping_Label_Preview_Controller
         */
        protected $rest_shipping_label_preview_controller;
        /**
         * @var WC_REST_Connect_Shipping_Label_Print_Controller
         */
        protected $rest_shipping_label_print_controller;
        /**
         * @var WC_REST_Connect_Shipping_Rates_Controller
         */
        protected $rest_shipping_rates_controller;
        /**
         * @var WC_REST_Connect_Address_Normalization_Controller
         */
        protected $rest_address_normalization_controller;
        /**
         *
         * WC_REST_Connect_Shipping_Carrier_Types_Controller
         *
         * @var WC_REST_Connect_Shipping_Carrier_Types_Controller
         */
        protected $rest_carrier_types_controller;
        /**
         * WC_REST_Connect_Assets_Controller
         *
         * @var WC_REST_Connect_Assets_Controller
         */
        protected $rest_assets_controller;
        /**
         * WC_REST_Connect_Shipping_Carrier_Controller
         *
         * @var WC_REST_Connect_Shipping_Carrier_Controller
         */
        protected $rest_carrier_controller;
        /**
         * @var \Automattic\WCServices\StoreNotices\StoreNoticesNotifier
         */
        protected $store_notices_notifier;
        /**
         * WC_REST_Connect_Shipping_Carriers_Controller
         *
         * @var WC_REST_Connect_Shipping_Carriers_Controller
         */
        protected $rest_carriers_controller;
        /**
         * WC_REST_Connect_Subscriptions_Controller
         *
         * @var WC_REST_Connect_Subscriptions_Controller
         */
        protected $rest_subscriptions_controller;
        /**
         * WC_REST_Connect_Subscription_Activate_Controller
         *
         * @var WC_REST_Connect_Subscription_Activate_Controller
         */
        protected $rest_subscription_activate_controller;
        /**
         * WC_REST_Connect_Shipping_Carrier_Delete_Controller
         *
         * @var WC_REST_Connect_Shipping_Carrier_Delete_Controller
         */
        protected $rest_carrier_delete_controller;
        /**
         * WC_REST_Connect_Migration_Flag_Controller
         *
         * @var WC_REST_Connect_Migration_Flag_Controller
         */
        protected $rest_migration_flag_controller;
        /**
         * @var WC_Connect_Service_Schemas_Validator
         */
        protected $service_schemas_validator;
        /**
         * @var WC_Connect_Settings_Pages
         */
        protected $settings_pages;
        /**
         * @var WC_Connect_Help_View
         */
        protected $help_view;
        /**
         * @var WC_Connect_Shipping_Label
         */
        protected $shipping_label;
        /**
         * @var WC_Connect_Nux
         */
        protected $nux;
        /**
         * @var WC_Connect_TaxJar_Integration
         */
        protected $taxjar;
        /**
         * @var WC_Connect_PayPal_EC
         */
        protected $paypal_ec;
        /**
         * @var WC_Connect_Tracks
         */
        protected $tracks;
        /**
         * @var WC_Connect_Label_Reports
         */
        protected $label_reports;
        /**
         * @var WC_REST_Connect_Tos_Controller
         */
        protected $rest_tos_controller;
        protected $services = array();
        protected $service_object_cache = array();
        protected $wc_connect_base_url;
        protected static $wcs_version;
        public const MIGRATION_DISMISSAL_COOKIE_KEY = 'wcst-wcshipping-migration-dismissed';
        private const SIFT_FETCH_IN_PROGRESS_TRANSIENT_KEY = 'wc_connect_sift_fetch_in_progress';
        public static function plugin_deactivation()
        {
        }
        public static function plugin_uninstall()
        {
        }
        /**
         * Deletes WC Admin notices.
         */
        public static function delete_notices()
        {
        }
        /**
         * Checks if WC Admin is active and includes needed classes.
         *
         * @return bool true|false.
         */
        public static function can_add_wc_admin_notice()
        {
        }
        /**
         * Get WCS plugin version
         *
         * @return string
         */
        public static function get_wcs_version()
        {
        }
        /**
         * Get base url.
         *
         * @return string
         */
        private static function get_wc_connect_base_url()
        {
        }
        /**
         * Get WCS admin script url.
         *
         * @return string
         */
        public static function get_wcs_admin_script_url()
        {
        }
        /**
         * Get WCS admin css url.
         *
         * @return string
         */
        public static function get_wcs_admin_style_url()
        {
        }
        public function __construct()
        {
        }
        public function get_logger()
        {
        }
        public function set_logger(\WC_Connect_Logger $logger)
        {
        }
        public function get_shipping_logger()
        {
        }
        public function set_shipping_logger(\WC_Connect_Logger $logger)
        {
        }
        public function get_api_client()
        {
        }
        public function set_api_client(\WC_Connect_API_Client $api_client)
        {
        }
        public function get_service_schemas_store()
        {
        }
        public function set_service_schemas_store(\WC_Connect_Service_Schemas_Store $schemas_store)
        {
        }
        public function get_service_settings_store()
        {
        }
        public function set_service_settings_store(\WC_Connect_Service_Settings_Store $settings_store)
        {
        }
        public function get_payment_methods_store()
        {
        }
        public function set_payment_methods_store(\WC_Connect_Payment_Methods_Store $payment_methods_store)
        {
        }
        public function get_tracks()
        {
        }
        public function set_tracks(\WC_Connect_Tracks $tracks)
        {
        }
        public function get_rest_account_settings_controller()
        {
        }
        public function set_rest_tos_controller(\WC_REST_Connect_Tos_Controller $rest_tos_controller)
        {
        }
        public function set_rest_assets_controller(\WC_REST_Connect_Assets_Controller $rest_assets_controller)
        {
        }
        public function set_rest_carriers_controller(\WC_REST_Connect_Shipping_Carriers_Controller $rest_carriers_controller)
        {
        }
        public function set_rest_subscriptions_controller(\WC_REST_Connect_Subscriptions_Controller $rest_subscriptions_controller)
        {
        }
        public function set_rest_subscription_activate_controller(\WC_REST_Connect_Subscription_Activate_Controller $rest_subscription_activate_controller)
        {
        }
        public function set_rest_carrier_controller(\WC_REST_Connect_Shipping_Carrier_Controller $rest_carrier_controller)
        {
        }
        public function set_rest_carrier_delete_controller(\WC_REST_Connect_Shipping_Carrier_Delete_Controller $rest_carrier_delete_controller)
        {
        }
        public function set_rest_packages_controller(\WC_REST_Connect_Packages_Controller $rest_packages_controller)
        {
        }
        public function set_rest_account_settings_controller(\WC_REST_Connect_Account_Settings_Controller $rest_account_settings_controller)
        {
        }
        public function get_rest_services_controller()
        {
        }
        public function set_rest_services_controller(\WC_REST_Connect_Services_Controller $rest_services_controller)
        {
        }
        public function get_rest_self_help_controller()
        {
        }
        public function set_rest_self_help_controller(\WC_REST_Connect_Self_Help_Controller $rest_self_help_controller)
        {
        }
        public function get_rest_shipping_label_controller()
        {
        }
        public function set_rest_shipping_label_controller(\WC_REST_Connect_Shipping_Label_Controller $rest_shipping_label_controller)
        {
        }
        public function get_rest_shipping_label_status_controller()
        {
        }
        public function set_rest_shipping_label_status_controller(\WC_REST_Connect_Shipping_Label_Status_Controller $rest_shipping_label_status_controller)
        {
        }
        public function get_rest_shipping_label_refund_controller()
        {
        }
        public function set_rest_shipping_label_refund_controller(\WC_REST_Connect_Shipping_Label_Refund_Controller $rest_shipping_label_refund_controller)
        {
        }
        public function get_rest_shipping_label_preview_controller()
        {
        }
        public function set_rest_shipping_label_preview_controller(\WC_REST_Connect_Shipping_Label_Preview_Controller $rest_shipping_label_preview_controller)
        {
        }
        public function get_rest_shipping_label_print_controller()
        {
        }
        public function set_rest_shipping_label_print_controller(\WC_REST_Connect_Shipping_Label_Print_Controller $rest_shipping_label_print_controller)
        {
        }
        public function set_rest_shipping_rates_controller(\WC_REST_Connect_Shipping_Rates_Controller $rest_shipping_rates_controller)
        {
        }
        public function set_rest_address_normalization_controller(\WC_REST_Connect_Address_Normalization_Controller $rest_address_normalization_controller)
        {
        }
        public function set_carrier_types_controller(\WC_REST_Connect_Shipping_Carrier_Types_Controller $rest_carrier_types_controller)
        {
        }
        public function set_rest_migration_flag_controller(\WC_REST_Connect_Migration_Flag_Controller $rest_migration_flag_controller)
        {
        }
        public function get_carrier_types_controller()
        {
        }
        public function get_service_schemas_validator()
        {
        }
        public function set_service_schemas_validator(\WC_Connect_Service_Schemas_Validator $validator)
        {
        }
        public function get_settings_pages()
        {
        }
        public function set_settings_pages(\WC_Connect_Settings_Pages $settings_pages)
        {
        }
        public function get_help_view()
        {
        }
        public function set_help_view(\WC_Connect_Help_View $help_view)
        {
        }
        public function set_shipping_label(\WC_Connect_Shipping_Label $shipping_label)
        {
        }
        public function set_nux(\WC_Connect_Nux $nux)
        {
        }
        public function set_taxjar(\WC_Connect_TaxJar_Integration $taxjar)
        {
        }
        public function set_paypal_ec(\WC_Connect_PayPal_EC $paypal_ec)
        {
        }
        public function set_label_reports(\WC_Connect_Label_Reports $label_reports)
        {
        }
        /**
         * @return \Automattic\WCServices\StoreNotices\StoreNoticesNotifier
         */
        public function get_store_notices_notifier()
        {
        }
        /**
         * @param \Automattic\WCServices\StoreNotices\StoreNoticesNotifier $store_notices_notifier
         */
        public function set_store_notices_notifier(\Automattic\WCServices\StoreNotices\StoreNoticesNotifier $store_notices_notifier)
        {
        }
        /**
         * Load our textdomain
         *
         * @codeCoverageIgnore
         */
        public function load_textdomain()
        {
        }
        public function ensure_jetpack_connection()
        {
        }
        public function on_plugins_loaded()
        {
        }
        /**
         * Register the WooCommerceBlocks integration.
         */
        public function register_blocks_integration()
        {
        }
        /**
         * Perform plugin bootstrapping that needs to happen before WC init.
         *
         * This allows the modification of extensions, integrations, etc.
         */
        public function pre_wc_init()
        {
        }
        public function get_service_schema_defaults($schema)
        {
        }
        public function save_defaults_to_shipping_method($instance_id, $service_id, $zone_id)
        {
        }
        protected function add_method_to_shipping_zone($zone_id, $method_id)
        {
        }
        /**
         * Bootstrap our plugin and hook into WP/WC core.
         *
         * @codeCoverageIgnore
         */
        public function after_wc_init()
        {
        }
        /**
         * Load all plugin dependencies.
         */
        public function load_dependencies()
        {
        }
        /**
         * Load admin-only plugin dependencies.
         */
        public function load_admin_dependencies()
        {
        }
        /**
         * Hook plugin classes into WP/WC core.
         */
        public function attach_hooks()
        {
        }
        /**
         * Init WC Store Notices.
         */
        public function init_store_notices()
        {
        }
        /**
         * Extend the Store API.
         */
        public function extend_store_api()
        {
        }
        /**
         * Register shipping labels-related hooks.
         *
         * @return void
         */
        public function init_shipping_labels()
        {
        }
        /**
         * Register live rates-related hooks.
         *
         * @return void
         */
        public function init_live_rates()
        {
        }
        /**
         * Queue up a service schema refresh (on shutdown) if there isn't one already.
         */
        public function queue_service_schema_refresh()
        {
        }
        public function tos_rest_init()
        {
        }
        /**
         * Hook the REST API
         * Note that we cannot load our controller until this time, because prior to
         * rest_api_init firing, WP_REST_Controller is not yet defined
         */
        public function rest_api_init()
        {
        }
        /**
         * If the required v3 REST API endpoints haven't been loaded at this point, load the local copies of said endpoints.
         * Delete this when the "v3" REST API is included in all the WC versions we support.
         */
        public function wc_api_dev_init()
        {
        }
        /**
         * Log any WP_Errors encountered before our REST API callbacks
         *
         * Note: intended to be hooked into 'rest_request_before_callbacks'
         *
         * @param WP_HTTP_Response $response Result to send to the client. Usually a WP_REST_Response.
         * @param WP_REST_Server   $handler  ResponseHandler instance (usually WP_REST_Server).
         * @param WP_REST_Request  $request  Request used to generate the response.
         *
         * @return mixed - pass through value of $response.
         */
        public function log_rest_api_errors($response, $handler, $request)
        {
        }
        /**
         * Added to the wc_connect_shipping_service_settings filter, returns service settings
         *
         * @param $settings
         * @param $method_id
         * @param $instance_id
         *
         * @return array
         */
        public function shipping_service_settings($settings, $method_id, $instance_id)
        {
        }
        /**
         * Load shipping method settings.
         *
         * This function is added to the wc_connect_service_admin_options action by this class
         * (see attach_hooks) and then that action is fired by WC_Connect_Shipping_Method::admin_options
         * to get the service instance form layout and settings bundled inside wcConnectData
         * as the form container is emitted into the body's HTML
         */
        public function localize_and_enqueue_service_script($method_id, $instance_id = \false)
        {
        }
        /**
         * Filter function for adding the report tabs
         *
         * @param array $reports - report tabs meta.
         * @return array report tabs with WCS tabs added.
         */
        public function reports_tabs($reports)
        {
        }
        /**
         * Send completed order details to Connect Server to check live rates usage.
         * Attached to the woocommerce_order_details_after_order_table hook
         *
         * @param int   $order_id int for completed order ID.
         * @param array $data Post data for order.
         * @param array $order WC_Order object containing completed order details.
         */
        public function track_completed_order($order_id, $data, $order)
        {
        }
        /**
         * Add tracking info (if available) to completed emails using the woocommerce_email_after_order_table hook
         *
         * @param bool|\WC_Order|\WC_Order_Refund $order
         * @param $sent_to_admin
         * @param $plain_text
         */
        public function add_tracking_info_to_emails($order, $sent_to_admin, $plain_text)
        {
        }
        /**
         * Hook fetching the available services from the connect server
         */
        public function schedule_service_schemas_fetch()
        {
        }
        /**
         * Inject API Client and Logger into WC Connect shipping method instances.
         *
         * @param WC_Connect_Shipping_Method $method
         * @param int|string                 $id_or_instance_id
         */
        public function init_service(\WC_Connect_Shipping_Method $method, $id_or_instance_id)
        {
        }
        /**
         * Returns a reference to a service (e.g. WC_Connect_Shipping_Method) of
         * a particular id so we can avoid instantiating them multiple times
         *
         * @param string $class_name Class name of service to create (e.g. WC_Connect_Shipping_Method)
         * @param string $service_id Service id of service to create (e.g. usps)
         * @return mixed
         */
        protected function get_service_object_by_id($class_name, $service_id)
        {
        }
        /**
         * Filters in shipping methods for things like WC_Shipping::get_shipping_method_class_names
         *
         * @param $shipping_methods
         * @return mixed
         */
        public function woocommerce_shipping_methods($shipping_methods)
        {
        }
        /**
         * Registers shipping methods for use in things like the Add Shipping Method dialog
         * on the Shipping Zones view
         */
        public function woocommerce_load_shipping_methods()
        {
        }
        public function woocommerce_payment_gateways($payment_gateways)
        {
        }
        private function get_i18n_json()
        {
        }
        /**
         * Return true if we are on the order list page wp-admin/edit.php?post_type=shop_order.
         *
         * @return boolean
         */
        public function should_render_upgrade_banner()
        {
        }
        public function maybe_render_upgrade_banner()
        {
        }
        /**
         * Registers the React UI bundle
         */
        public function admin_enqueue_scripts()
        {
        }
        public function get_active_shipping_services()
        {
        }
        public function get_active_services()
        {
        }
        public function is_wc_connect_shipping_service($service_id)
        {
        }
        public function shipping_zone_method_added($instance_id, $service_id, $zone_id)
        {
        }
        public function shipping_zone_method_deleted($instance_id, $service_id, $zone_id)
        {
        }
        public function shipping_zone_method_status_toggled($instance_id, $service_id, $zone_id, $enabled)
        {
        }
        public function should_show_shipping_debug_meta_box($post)
        {
        }
        public function add_meta_boxes($screen_id, $post)
        {
        }
        public function shipping_rate_packaging_debug_log_meta_box($post)
        {
        }
        public function hide_wc_connect_package_meta_data($hidden_keys)
        {
        }
        public function hide_wc_connect_order_meta_data($protected, $meta_key, $meta_type)
        {
        }
        public function add_shipping_phone_to_checkout($fields)
        {
        }
        public function add_shipping_phone_to_order_fields($fields)
        {
        }
        public function get_shipping_or_billing_phone_from_order($fields, $address_type, \WC_Order $order)
        {
        }
        public function add_plugin_action_links($links)
        {
        }
        /**
         * Performs a direct database check to see if any order has shipping labels.
         * Static method to be callable from early hooks like 'all_plugins'.
         *
         * @return bool True if any labels exist, false otherwise.
         */
        private static function _has_any_labels_db_check()
        {
        }
        /**
         * Determines if the store is configured for tax-only functionality.
         *
         * This method checks two conditions:
         * 1. If Jetpack is connected and the 'only_tax' option is set to '1', it returns true.
         * 2. If Jetpack is not connected and there are no legacy shipping labels in the database, it returns true.
         *
         * @return bool True if the store is configured for tax-only functionality, false otherwise.
         */
        public static function has_only_tax_functionality()
        {
        }
        /**
         * Checks whether shipping-related functionality and views should be loaded.
         *
         * Shipping features should only be loaded when the WooCommerce Shipping plugin
         * is not active and the site is not restricted to tax-only functionality.
         *
         * @return bool True if shipping features should be loaded, false otherwise.
         */
        public static function should_load_shipping_features(): bool
        {
        }
        public function maybe_rename_plugin($plugins)
        {
        }
        private function get_plugin_name_for_legacy_sites()
        {
        }
        private function get_plugin_description_for_legacy_sites()
        {
        }
        private function get_plugin_name_for_new_sites()
        {
        }
        private function get_plugin_description_for_new_sites()
        {
        }
        /**
         * Adds the Sift JS page tracker if needed.
         *
         * @return void
         */
        public function add_sift_js_tracker()
        {
        }
        /**
         * Schedule a background fetch for Sift configuration.
         *
         * @return void
         */
        private function schedule_background_sift_fetch()
        {
        }
        /**
         * Fetch Sift configuration in the background.
         *
         * @return void
         */
        public function background_fetch_sift_config()
        {
        }
        public function enqueue_wc_connect_script($root_view, $extra_args = array())
        {
        }
        public function render_schema_notices()
        {
        }
        /**
         * Check if WooCommerce Shipping has been activated.
         *
         * @return bool
         */
        public static function is_wc_shipping_activated()
        {
        }
        /**
         * Returns if both Woo Shipping and Woo Tax are active.
         *
         * @return bool
         */
        public function are_woo_shipping_and_woo_tax_active()
        {
        }
        /**
         * Echoes an admin notice informing of Woo Shipping and Woo Tax being active.
         *
         * To be used in the `admin_notices` hook.
         *
         * @return void
         */
        public function display_woo_shipping_and_woo_tax_are_active_notice()
        {
        }
        /**
         * Returns the notice for migrating from WCST to WC Shipping.
         *
         * @return bool
         */
        public function display_wcst_to_wcshipping_migration_notice()
        {
        }
        public function register_wcshipping_migration_modal()
        {
        }
    }
}
namespace {
    \define('WOOCOMMERCE_CONNECT_SERVER_URL', 'https://api.woocommerce.com/');
    \define('WOOCOMMERCE_CONNECT_MINIMUM_WOOCOMMERCE_VERSION', '2.6');
    \define('WOOCOMMERCE_CONNECT_MAX_JSON_DECODE_DEPTH', 32);
    \define('WCSERVICES_PLUGIN_FILE', __FILE__);
    \define('WCSERVICES_PLUGIN_DIR', __DIR__);
    \define('WCSERVICES_PLUGIN_DIST_DIR', \WCSERVICES_PLUGIN_DIR . '/dist/');
    \define('WCSERVICES_PLUGIN_URL', \plugin_dir_url(\WCSERVICES_PLUGIN_FILE));
    \define('WCSERVICES_PLUGIN_DIST_URL', \plugin_dir_url(\WCSERVICES_PLUGIN_FILE) . 'dist/');
    \define('WCSERVICES_ASSETS_URL', \WCSERVICES_PLUGIN_URL . 'assets/');
    \define('WCSERVICES_STYLESHEETS_URL', \WCSERVICES_ASSETS_URL . 'stylesheets/');
    \define('WCSERVICES_ASSETS_DIR', \WCSERVICES_PLUGIN_DIR . '/assets/');
    \define('WCSERVICES_STYLESHEETS_DIR', \WCSERVICES_ASSETS_DIR . 'stylesheets/');
}