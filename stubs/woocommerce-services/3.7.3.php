<?php
/**
 * Generated stub declarations for woocommerce-services 3.7.3.
 * @see https://github.com/woocommerce/all-plugins/tree/stubs
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
        /**
         * Nonce action guarding the "dismiss this notice" link.
         *
         * @var string
         */
        const DISMISS_NONCE_ACTION = 'wc_connect_dismiss_error_notice';
        /**
         * Query argument carrying the dismissal nonce.
         *
         * A dedicated name (rather than `_wpnonce`) so the dismiss link cannot overwrite a
         * nonce the surrounding admin screen already put on the current URL.
         *
         * @var string
         */
        const DISMISS_NONCE_NAME = '_wc_connect_notice_nonce';
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
         * Serialises rows of values into CSV text.
         *
         * Uses PHP's own CSV writer so that separators, quotes and line breaks inside a value
         * are quoted correctly instead of splitting the row, and neutralises every cell against
         * spreadsheet formula evaluation on the way out. Escaping is applied here, in one place,
         * so no caller can forget it for an individual column.
         *
         * @param array $rows List of rows; each row is a list of cell values.
         * @return string The CSV text, or an empty string if the temporary stream is unavailable.
         */
        public static function rows_to_csv($rows)
        {
        }
        /**
         * Neutralises a single CSV cell against spreadsheet formula evaluation.
         *
         * Excel, Numbers and Google Sheets start evaluating a cell as a formula when its first
         * character is `=`, `+`, `-`, `@`, a tab or a carriage return. Values in the tax rate
         * tables come from customer checkout addresses and from remote API responses, so a cell
         * can be planted that runs when the merchant opens the downloaded file. Prefixing the
         * value with a single quote makes spreadsheet applications treat the cell as text.
         *
         * Numeric values are returned untouched: a number cannot open a formula, and prefixing it
         * would corrupt the value when the file is imported back (a negative tax rate is the
         * realistic case). Quoting of separators, quotes and line breaks is left to the CSV
         * writer; this function only removes the formula leader.
         *
         * @param mixed $value The raw cell value.
         * @return string The value, safe to hand to a CSV writer.
         */
        public static function escape_csv_value($value)
        {
        }
        /**
         * Creates protection files in the backup directory to prevent direct HTTP access.
         *
         * Follows the same pattern used by WooCommerce's ReportCSVExporter::maybe_create_directory().
         *
         * @param string $dir The directory to protect.
         */
        private static function protect_backup_directory($dir)
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
        /**
         * AJAX handler for secure tax backup file downloads.
         *
         * Verifies nonce and capability before streaming the file.
         */
        public function handle_tax_backup_download()
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
         * Determines whether the site holds a WordPress.com token but has no connected owner.
         *
         * This is the "half connected" state: registration completed and left a blog token
         * behind, but nobody finished signing in with a WordPress.com account. Everything
         * that needs a user token - automated taxes included - stays unavailable, while
         * self::is_connected() reports false exactly as it does for a site that was never
         * connected at all. Callers that want to tell those two apart use this method.
         *
         * @return bool Whether the connection is site-level only.
         */
        public static function is_site_only_connection()
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
         * @param string          $context Optional context (e.g. a class or function name)
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
         * Nonce action guarding the "accept the Terms of Service" link on the connection banner.
         */
        const ACCEPT_TOS_NONCE_ACTION = 'wcs-nux-tos-accept';
        /**
         * Nonce action guarding the "dismiss" link on the post-connection banner.
         */
        const DISMISS_AFTER_CXN_BANNER_NONCE_ACTION = 'wcs-nux-notice-dismiss';
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
        /**
         * Whether the current user may accept the Terms of Service.
         *
         * Only the Jetpack connection owner may, or any user while Jetpack is in offline mode.
         * This checks no capability, so in offline mode it is true for every user: callers must
         * check capabilities themselves.
         *
         * @since 3.7.1
         *
         * @return bool
         */
        public static function current_user_can_accept_tos()
        {
        }
        /**
         * Whether the WooCommerce Tax connection banner may render on the given screen.
         *
         * The banner only offers WooCommerce Tax, so it is confined to where WooCommerce
         * Tax is configured: WooCommerce » Settings » Tax, including that tab's rate-table
         * sections. The Plugins page is kept as well, since that is where a store lands
         * right after activating the plugin and has not connected yet.
         *
         * @param WP_Screen|null $screen Current admin screen.
         * @return bool
         */
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
        /**
         * Banner for a site that is registered with WordPress.com but has no connected owner.
         *
         * Without it this store sees the same "connect your site" banner as a store that never
         * connected, and the Automated taxes setting is simply absent from WooCommerce >
         * Settings > Tax with nothing naming the reason. Both symptoms come from the same
         * place: WC_Connect_Jetpack::is_connected() requires a connected owner, so the plugin
         * never boots its tax integration. The sign-in is the only missing step, and the
         * existing connect handler already takes the merchant straight to it - a site that is
         * already registered skips registration and goes to the authorization flow.
         */
        public function show_banner_site_only_connection()
        {
        }
        /**
         * Verifies the nonce carried by a banner link before it is allowed to change any state.
         *
         * The banner links are plain GET links rendered into an admin notice, so without this
         * an attacker could make a logged-in admin accept the Terms of Service or dismiss the
         * banner just by getting them to load a URL.
         *
         * @param string $action Nonce action the link was created with.
         * @return bool True when the request carries a valid nonce for $action.
         */
        private static function is_nux_action_verified($action)
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
         * @param int    $order_id       Order ID.
         * @param object $new_label_data Label data from the Connect server, with a label_id.
         *
         * @return array|object The updated label info, or $new_label_data unchanged when the order
         *                      does not have that label.
         */
        public function update_label_order_meta_data($order_id, $new_label_data)
        {
        }
        /**
         * Adds new labels to the order
         *
         * @param $order_id
         * @param array $new_labels - labels to be added
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
         * Shows customer-input errors at checkout. Optional: null when none is passed to the constructor.
         *
         * @var \Automattic\WCServices\StoreNotices\StoreNoticesNotifier|null
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
         * The TaxJar line id each cart item was sent as, keyed by cart item key. Set with
         * $response_rate_ids, so each cart and order line can find its own answer.
         *
         * @var array<string, string>
         */
        private $response_cart_item_keys = array();
        /**
         * The cart item each order item was created from at checkout, keyed by
         * spl_object_id() of the order item. Only set in the request that creates the
         * items: an order item loaded from the database carries no cart item key.
         *
         * @var array<int, string>
         */
        private $order_item_cart_item_keys = array();
        /**
         * Rate ids TaxJar returned for an admin recalculation, keyed by order id, then by
         * order item id. Kept apart from $response_rate_ids, which other code reads as
         * "this request is the cart flow". Each entry is used once, see
         * take_admin_recalculation_rate_ids().
         *
         * @var array<int, array<int, array{rate_ids: int[], line: object|null}>>
         */
        private $admin_recalculation_rate_ids = array();
        /**
         * Tax snapshots captured before an out-of-cart recalculation, keyed by order id,
         * so they can be restored after WC recalculates the order totals.
         *
         * @var array
         */
        private $pre_recalculation_tax_snapshots = array();
        /**
         * Taxable amounts of order items as they were before an in-request save changed
         * them, keyed by item id. The REST API saves an edited item before it
         * recalculates the order, so this is the only place the old amount is visible.
         *
         * @var array
         */
        private $order_item_base_before_save = array();
        /**
         * Billing and shipping addresses of orders as they were before an in-request save
         * changed them, keyed by order id. Code that saves an order before recalculating it
         * would otherwise leave no trace of the old address.
         *
         * @var array
         */
        private $order_address_before_save = array();
        /**
         * The location WooCommerce taxed each order item for in this recalculation, keyed by
         * spl_object_id(), as it passed it to the item's after-calculate-taxes hook. Only kept
         * for orders being preserved, so the hook can run again on the tax set here.
         *
         * @var array<int, array>
         */
        private $order_item_tax_locations = array();
        /**
         * Order items being created, like $orders_created_in_request. WC_Order::add_product()
         * saves the item at once, so it is already saved when the order is recalculated.
         *
         * @var array{objects: array<int, bool>, ids: array<int, bool>}
         */
        private $order_items_created_in_request = array('objects' => array(), 'ids' => array());
        /**
         * Orders being created: spl_object_id() of each order object saved without an id,
         * then the id it was given. A new order had no earlier address its tax was based on.
         *
         * @var array{objects: array<int, bool>, ids: array<int, bool>}
         */
        private $orders_created_in_request = array('objects' => array(), 'ids' => array());
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
         * Line items WooCommerce will not apply item tax to.
         *
         * Recorded while the TaxJar request is built and read back when the response is
         * turned into tax rate rows, so both halves share a single taxability decision
         * instead of each re-deriving one. Keyed by TaxJar line item id, values unused.
         *
         * @var array<string, bool>
         */
        private $non_taxable_line_items = array();
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
         * Returned by lookup_order_taxes() when it failed because the order's address
         * cannot be sent to TaxJar, as opposed to TaxJar failing to answer.
         */
        private const ORDER_TAX_LOOKUP_BAD_ADDRESS = 'bad_address';
        /**
         * Returned by lookup_order_taxes() when it failed because the store's own address
         * cannot be sent to TaxJar.
         */
        private const ORDER_TAX_LOOKUP_BAD_STORE_ADDRESS = 'bad_store_address';
        /**
         * WooCommerce's after-calculate-taxes hook for each order item type.
         */
        private const ORDER_ITEM_TAX_HOOKS = array('line_item' => 'woocommerce_order_item_after_calculate_taxes', 'fee' => 'woocommerce_order_item_fee_after_calculate_taxes', 'shipping' => 'woocommerce_order_item_shipping_after_calculate_taxes');
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
        /**
         * Name of the 0% row that keeps a merchant's state-wide rate from applying to a looked-up town.
         *
         * The name is stored with the row and copied to any order it taxes, so it has to say
         * why the merchant's own rate does not apply there. US rows carry the same county and
         * city prefix as the rows TaxJar's rates are stored in.
         *
         * @param string $to_country    The destination country.
         * @param array  $jurisdictions Tax jurisdictions.
         *
         * @return string
         */
        private static function generate_nullified_rate_name(string $to_country, array $jurisdictions)
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
         * The `taxjar_store_settings` return value is guaranteed to be an array carrying
         * all five address keys, matching this method's documented contract. The filter is
         * public and unguarded, so a callback returning null / false / a string would
         * otherwise flow into callers that index it — and, since the address value object
         * declares `array $settings`, into an uncaught TypeError on every cart and checkout
         * render that resolves a base address. A non-array return is treated as "no
         * opinion" and the unfiltered settings are used; keys missing from an array return
         * are backfilled from the unfiltered settings, so callers can keep indexing the
         * result directly.
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
         * Based on the TaxJar plugin.
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
         * Empty fields come back as `false` rather than `''`. That is the historic shape of
         * this array and `Address::to_legacy_options()` is the single place the choice is
         * made, so `get_backend_address()` cannot drift away from it.
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
         * Despite the name, no street ever reaches `WC_Tax::find_rates()` — it takes no
         * street argument, and the value this method used to unpack from the tuple was
         * never read. What the callback actually does is accept a location of *four or
         * more* elements where `WC_Tax::get_rates_from_location()` accepts exactly four,
         * so it supplies the rates core skips when this plugin's five-element taxable
         * address is in play. It is public and hooked on `woocommerce_matched_rates`,
         * which core fires from the price-display, shipping-tax and coupon paths.
         *
         * The lookup arguments now come from the same value object `create_or_update_tax_rate()`
         * writes with. Before, this method normalised the city but not the state, so it
         * could not see rows that method had just written: the rate rows existed and
         * these paths returned nothing for them.
         *
         * @param array  $matched_tax_rates Rates core matched; replaced wholesale.
         * @param string $tax_class         Tax class slug.
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
         * The address is built through {@see Address}, so country/state casing, the
         * comma-list postcode split and the city semicolon rules are applied once here
         * rather than re-derived by each consumer. The return value stays WooCommerce's
         * positional 5-tuple — `Address` is internal and never crosses the filter.
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
         * Derived from the TaxJar plugin.
         * See: https://github.com/taxjar/taxjar-woocommerce-plugin/blob/4b481f5/includes/class-wc-taxjar-integration.php#L607
         *
         * Sanitization (and the `wp_unslash()` that used to be missing here) now lives in
         * `Address::from_post_request()`, and the empty-field representation comes from
         * `Address::to_legacy_options()` — the same one `get_address()` uses, so the cart and
         * admin-recalculate paths can no longer put different values on the wire for the
         * same empty input.
         *
         * Security: WooCommerce has already verified the nonce and capability by the time
         * `woocommerce_before_save_order_items` fires.
         *
         * This method used to `strtoupper()` postcode, city and street on top of that,
         * which `get_address()` did not — the same order recalculated from the admin and
         * from the cart put differently-cased values on the wire. The casing was kept only
         * because the city feeds the `wp_woocommerce_tax_rates` city column; now that the
         * rate-table seam upper-cases the city at both the write and the lookup, nothing
         * downstream depends on it and the two paths agree.
         *
         * @return array
         */
        protected function get_backend_address()
        {
        }
        /**
         * Fill in the street when an order-items request arrived without one.
         *
         * Core's Recalculate button and line-item delete both post country, state, postcode
         * and city, and the order-screen script (`client/new-order-taxjar.js`) adds `street`
         * to each. When that script did not run (not loaded, stopped by another script's
         * error, or another handler replaced the request data), the key is missing and
         * TaxJar would get no street.
         *
         * The order's saved street is used only when the posted address matches the saved
         * address on the side core read it from. Otherwise the merchant edited the address
         * without saving the order, and pairing the new ZIP with the old street would be
         * worse than sending no street. A street posted empty is the merchant's input and is
         * left alone.
         *
         * @param array|mixed   $address Backend address in the `to_*` shape from `get_backend_address()`.
         * @param WC_Order|bool $order   Order being recalculated.
         * @return array|mixed The address, with `to_street` filled when it was safe to.
         */
        private function fill_missing_backend_street($address, $order)
        {
        }
        /**
         * Read the TaxJar product tax code encoded in a tax class slug.
         *
         * Stores map a class to a TaxJar category by ending its name with the numeric
         * code, so "Digital Goods 31000" slugs to `digital-goods-31000`. The code is the
         * last segment, whatever the class name's word count. Both line item builders go
         * through here so checkout and an admin order recalculation price the same code.
         *
         * @param string $tax_class Tax class slug ('' for Standard).
         *
         * @return string The code, or '' if the slug does not end in a number.
         */
        private static function get_product_tax_code_from_tax_class($tax_class)
        {
        }
        /**
         * Get line items at checkout
         *
         * Based on the TaxJar plugin, with canonical line item IDs added.
         * See: https://github.com/taxjar/taxjar-woocommerce-plugin/blob/96b5d57/includes/class-wc-taxjar-integration.php#L645
         *
         * @param WC_Cart $wc_cart_object Cart object.
         *
         * @return array Line items keyed by cart item key. Each item's 'id' is the
         *               canonical TaxJar line item ID, not the cart item key.
         */
        protected function get_line_items($wc_cart_object)
        {
        }
        /**
         * Get line items for backend orders
         *
         * Based on the TaxJar plugin, with canonical line item IDs added.
         * See: https://github.com/taxjar/taxjar-woocommerce-plugin/blob/96b5d57/includes/class-wc-taxjar-integration.php#L695
         *
         * @param WC_Order $order Order object.
         *
         * @return array Line items keyed by order item ID. Each item's 'id' is the
         *               canonical TaxJar line item ID, not the order item ID.
         */
        protected function get_backend_line_items($order)
        {
        }
        protected function get_line_item($id, $line_items)
        {
        }
        /**
         * Replace each line item's product ID with a canonical TaxJar line item ID.
         *
         * The cart path used to key line items by WooCommerce's cart item key and the
         * order path by the numeric order item ID, so the same basket produced two
         * different request bodies — and therefore two different cache keys — depending
         * on which path built it. TaxJar treats `id` as an opaque echo field, so the two
         * paths can agree on one value derived purely from the tax-relevant inputs:
         * product, tax code, quantity, unit price, discount and tax location.
         *
         * Format is `<product_id>-<fingerprint>-<occurrence>`. The product ID stays the
         * first `-` segment because `get_itemized_tax_rates()` recovers the product from
         * it, and `override_cart_item_tax_rates()` / `override_order_item_taxes()` match
         * on the `<product_id>-` prefix. The occurrence counter keeps two otherwise
         * identical lines — an order can legitimately hold the same product twice at the
         * same price — distinct, so neither loses its rate.
         *
         * Rewriting the ids invalidates `$non_taxable_line_items`, which callers record
         * while ids are still context-specific but `get_itemized_tax_rates()` reads back
         * under the canonical id. So this method re-keys that map itself rather than
         * leaving each caller to repair it afterwards: the map is never observable in the
         * stale keying, and a future caller inherits the invariant instead of having to
         * remember it. Callers reset the map before building, so replacing it wholesale
         * here is safe — an entry whose line item did not survive into $line_items (the
         * order path skips zero-priced lines) is dropped, exactly as before.
         *
         * @since 3.6.12
         *
         * @param array $line_items Line items whose 'id' is currently the bare product ID.
         *
         * @return array The same array with 'id' expanded to the canonical ID.
         */
        private function assign_canonical_line_item_ids(array $line_items): array
        {
        }
        /**
         * Normalize a string for cache-key purposes.
         *
         * Trims, collapses runs of whitespace and upper-cases, so that "beverly hills",
         * "Beverly  Hills" and "Beverly Hills " all hash the same. Used only to derive
         * cache keys and line item fingerprints — never to build the request sent to
         * TaxJar, which keeps the merchant's values verbatim.
         *
         * @since 3.6.12
         *
         * @param mixed $value Value to normalize.
         *
         * @return string
         */
        private function normalize_cache_string($value): string
        {
        }
        /**
         * Normalize a numeric value for cache-key purposes.
         *
         * Amounts reach the request body as `wc_format_decimal()` strings with varying
         * precision, so 5, "5" and "5.00" are the same money but three different bytes.
         * Collapses them to one representation. Non-numeric input is left to
         * normalize_cache_string() so a value that is not really a number cannot be
         * silently reinterpreted — notably ZIP codes, where "01234" must never become
         * "1234".
         *
         * @since 3.6.12
         *
         * @param mixed $value Value to normalize.
         *
         * @return string
         */
        private function normalize_cache_number($value): string
        {
        }
        /**
         * Build the cache signature for a TaxJar request body.
         *
         * Hashing the raw JSON makes the cache byte-sensitive: a differently-cased city,
         * a stray double space in a street address or "5" versus "5.00" for the same
         * price all miss a cache entry that would have answered correctly. This projects
         * the body onto a canonical form first — whitespace and case folded, amounts
         * given one representation, key order fixed, line items sorted — so equivalent
         * requests share one entry.
         *
         * Only the cache key is derived from this. The body sent to TaxJar is untouched.
         *
         * @since 3.6.12
         *
         * @param string $json Encoded TaxJar request body.
         *
         * @return string Canonical signature, or the input unchanged if it will not decode.
         */
        private function get_cache_signature($json): string
        {
        }
        /**
         * Recursively canonicalize a request body for cache-key derivation.
         *
         * Numeric normalization is applied by field name rather than by looking at the
         * value, because several address fields hold digit-only strings that must keep
         * their exact form (a leading-zero ZIP above all).
         *
         * @since 3.6.12
         *
         * @param mixed  $value Value to canonicalize.
         * @param string $key   Key the value was found under.
         *
         * @return mixed
         */
        private function canonicalize_cache_payload($value, $key = '')
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
         * Remember the cart item an order item was created from.
         *
         * @internal Hooked to woocommerce_checkout_create_order_line_item.
         *
         * @param WC_Order_Item_Product $item          The order item being created.
         * @param string                $cart_item_key The key of the cart item it was copied from.
         *
         * @since 3.7.3
         */
        public function remember_order_item_cart_item_key($item, $cart_item_key)
        {
        }
        /**
         * Find the TaxJar line an order item was sent as at checkout.
         *
         * Lines are matched on the product, the variation when there is one. When the cart
         * holds that product on more than one line, the order item is matched to the cart
         * line it was created from: the same product can be on two lines at different
         * prices, and TaxJar can answer them differently. That is the cart item key
         * WooCommerce passed when it created the item, or else the cart line with the same
         * quantity and amounts. Without either, a line TaxJar taxed is used.
         *
         * @param WC_Order_Item_Product $item Order item.
         * @return string|null The line id, or null when the product was not sent.
         */
        private function find_order_item_line_key($item)
        {
        }
        /**
         * Take the rate ids an admin recalculation looked up for an order item.
         *
         * Each entry is removed as it is read, so it applies to the recalculation it was
         * looked up for and not to a later one in the same request.
         *
         * @param WC_Order_Item $item The order item being taxed.
         * @return array{rate_ids: int[], line: object|null}|null Rate ids and TaxJar's answer
         *                                                       line, or null when the item
         *                                                       was not looked up.
         */
        private function take_admin_recalculation_rate_ids($item)
        {
        }
        /**
         * Tax an order item at the given rate rows, replacing what WooCommerce found.
         *
         * The percentages come from TaxJar's answer for the item when it is given. Rows are
         * shared by every product in a tax class, so they hold whichever line was stored
         * last: an item TaxJar answered as exempt would otherwise pay the rate of a taxed
         * item beside it.
         *
         * @param WC_Order_Item_Product $item          The order item.
         * @param array                 $rate_ids      Tax rate ids.
         * @param object|null           $response_line TaxJar's breakdown line for the item.
         */
        private function set_order_item_taxes_from_rate_ids($item, array $rate_ids, $response_line = \null)
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
         * Derived from the TaxJar plugin.
         * See: https://github.com/taxjar/taxjar-woocommerce-plugin/blob/82bf7c587/includes/class-wc-taxjar-integration.php#L653
         *
         * This is a callback on `woocommerce_customer_taxable_address`, and that filter is
         * fired with two different tuple lengths depending on who fires it:
         *
         * - WooCommerce core (`WC_Customer::get_taxable_address()`) passes **four** elements —
         *   country, state, postcode, city. `WC_Tax::get_rates_from_location()` then gates on
         *   `count( $location ) === 4`, a strict comparison, so a five-element return makes
         *   core skip `WC_Tax::find_rates()` and hand back an empty rate set.
         * - This plugin (`get_taxable_address()`) passes **five**, the fifth being the street,
         *   which `get_address()` reads off index `[4]`.
         *
         * The callback therefore returns a tuple of exactly the length it was handed. It used
         * to key the length off whether the street was empty instead, which returned five
         * elements into core's four-element pipeline on any local-pickup checkout where the
         * store has a street address configured, and dropped the street slot from the
         * plugin's own pipeline whenever the street was empty.
         *
         * @param array $address Positional taxable-address tuple, four or five elements.
         * @return array The tuple with the base address substituted for local pickup,
         *               its length clamped to four or five elements to match the input.
         */
        public function append_base_address_to_customer_taxable_address($address)
        {
        }
        /**
         * This method is used to override the TaxJar result.
         *
         * The tax node is validated by calculate_tax() before this is called, so
         * in-plugin callers always pass an object. The type check below is a net for
         * third-party callers of this public method: overriding a rate is meaningless
         * without a tax object, and a property write on a non-object is the very fatal
         * this method exists to prevent. Malformed *inner* members (a missing/null
         * breakdown or shipping, a non-object line item) are tolerated further down.
         *
         * @param mixed $taxjar_resp_tax TaxJar response tax node. Expected to be an object.
         * @param array $body            Body of TaxJar request.
         *
         * @return mixed The tax object with its rates overridden, or the input returned
         *               unchanged when it is not an object.
         */
        public function maybe_override_taxjar_tax($taxjar_resp_tax, $body)
        {
        }
        /**
         * Validates a TaxJar nexus address against the shared address schema.
         *
         * Delegates to `Address::validate()`, and because `calculate_tax()` sends the
         * normalised address, the address is checked in the shape it is sent.
         *
         * Country is always required. State is required for the US only; see the inline
         * comment for the measurement behind that, and for why requiring it everywhere
         * would reject the plugin's own nexus for stores without a base state.
         *
         * Validation is deliberately confined to the fields the value object reads. Extra
         * keys supplied by a filter are neither validated nor rewritten; `calculate_tax()`
         * passes them straight through to the request body.
         *
         * @param  mixed $address Nexus address, as returned by `woocommerce_taxjar_nexus_address`.
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
         * Project the address out of a request body, for validation and the nexus gate.
         *
         * This must report what the body actually carries. Country and state are
         * upper-cased because they are compared against the literal `'US'` and against
         * each other, and this runs from the public `validate_taxjar_request()`, which
         * any caller can hand a hand-built body. Postcodes are returned verbatim:
         * normalising them here would make the value that is validated differ from the
         * value that is sent. Postcode normalisation belongs where the body is
         * assembled, in `calculate_tax()`.
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
         * Normalize a city value for safe round-trips through WooCommerce's tax rate tables.
         *
         * `WC_Tax::_update_tax_rate_cities()` treats `;` as a multi-city separator (it
         * `explode(';', ...)`s the input), but `WC_Tax::find_rates()` queries the city
         * column with a single `location_code = '<CITY>'` literal — so a checkout city
         * containing `;` (e.g. typo'd `Casse;Berry`) gets stored as two separate location
         * rows (`CASSE`, `BERRY`) yet looked up as the joined string `CASSE;BERRY`.
         * That asymmetry causes `find_rates()` to miss on every subsequent calculation,
         * which makes `create_or_update_tax_rate()` insert a fresh row each checkout —
         * unbounded growth of `wp_woocommerce_tax_rates`. See WOOTAX-19.
         *
         * Stripping `;` (and collapsing the resulting whitespace runs) before any path
         * touches the tax-rate tables or the TaxJar API restores the round-trip.
         *
         * @deprecated 3.6.12 Use {@see \Automattic\WCServices\Tax\Address::normalize_city()} instead.
         *
         * The canonical implementation now lives on the address value object, so the
         * normalisation policy has one home rather than one copy per consumer. This
         * method is retained as a delegate — it is `protected static`, so a subclass
         * outside this repository may be calling it, and removing it would break that
         * subclass on load.
         *
         * The `_deprecated_function()` notice can be raised as of this release because
         * the last in-repo caller has moved to the value object. Until then the notice
         * would have fired on every checkout.
         *
         * The non-string guard is preserved: this method has always returned its
         * argument untouched when handed a non-string, and callers may rely on that.
         *
         * @param string $city Raw city value, possibly user-entered.
         * @return string Normalized city, safe for `_update_tax_rate_cities` and `find_rates`.
         */
        protected static function normalize_city($city)
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
         * Whether a tax rate row is restricted to any postcode or city.
         *
         * @param int $rate_id Tax rate ID.
         *
         * @return bool
         */
        private function tax_rate_has_locations($rate_id)
        {
        }
        /**
         * Note that a component was written at a priority in a tax class.
         *
         * @param array  $written   Written priorities per tax class, updated in place.
         * @param string $tax_class Tax class.
         * @param int    $priority  Priority.
         * @param string $rate_name Row name; a VAT row marks the class as VAT.
         */
        private function record_written_priority(array &$written, $tax_class, $priority, $rate_name)
        {
        }
        /**
         * The address a rate row is written and looked up for.
         *
         * Non-scalars collapse to an empty string rather than reaching `(string)` and
         * becoming the literal "Array": create_or_update_tax_rate() is public and takes
         * the location it is handed. VAT rows are country-wide, so they carry no state.
         *
         * @param array $location Location in the `to_*` shape.
         * @param bool  $is_vat   Whether the row is a VAT row.
         *
         * @return \Automattic\WCServices\Tax\Address
         */
        private function get_rate_table_address($location, $is_vat)
        {
        }
        /**
         * Stop a state-wide rate from adding to the rates just written for an address.
         *
         * `WC_Tax::find_rates()` keeps one row per priority. The components TaxJar
         * returned sit at priorities 1 to N, so a merchant's state-wide row at a higher
         * priority still matches the address and is added on top of them. Checkout and
         * an admin Recalculate apply only the rate ids TaxJar returned, but everything
         * else that reads the rate table (REST and POS orders, shipping) would charge both.
         *
         * For each such priority this adds a 0% row limited to the address's postcode and
         * city. It outranks the state-wide row at that priority, so the table gives the
         * address what TaxJar returned, and every other address still gets the merchant's
         * row. The merchant's row is not changed.
         *
         * The row is not marked for shipping, and it still keeps the merchant's row off
         * shipping: `WC_Tax::find_shipping_rates()` picks one row per priority first and
         * only then drops the rows not marked for shipping. Marked for shipping, it would
         * put a $0 tax line on every order that ships to the address, since checkout,
         * order creation and Recalculate all tax shipping from the table.
         *
         * Only rows with no postcode or city are covered; a merchant's own local rows are
         * left as they are. Nothing is added for VAT rows, which are country-wide, or for
         * an address with no postcode or city, since the new row could not outrank anything.
         * The next lookup for the address finds the 0% row at that priority instead of the
         * state-wide one, so nothing more is added.
         *
         * The rows are inserted directly rather than through create_or_update_tax_rate(),
         * which matches by position and could otherwise update a merchant's local row.
         *
         * @param array  $location      Location in the `to_*` shape, as written.
         * @param string $tax_class     Tax class the components were written in.
         * @param int[]  $priorities    Priorities the components were written at.
         * @param array  $jurisdictions County and city names, for the row name.
         */
        private function shadow_unscoped_rates_above_components($location, $tax_class, array $priorities, array $jurisdictions)
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
         * Based on the TaxJar plugin. The cache key is derived from a canonical
         * projection of the body rather than its raw bytes — see get_cache_signature().
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
        /**
         * Whether an out-of-cart recalculation of this order should have its taxes preserved.
         *
         * Both halves of the preserve/restore pair consult this, because they hang off hooks
         * with different firing conditions: preserve_order_taxes_on_recalculation() runs from
         * calculate_taxes(), while restore_order_taxes_after_recalculation() runs from
         * calculate_totals() whether or not taxes were recalculated. A snapshot can therefore
         * reach the restore half without this having been evaluated on the way in.
         *
         * The gates are exclusionary: preservation runs for ANY out-of-cart recalculation of
         * an existing order — the REST/address-change path this fix targets, but also WP-CLI,
         * cron, and Action Scheduler runs. That breadth is intentional: once an order is
         * placed its tax is a record of what was charged, so we preserve it on every
         * programmatic recalculation, not only the REST path that prompted this fix.
         *
         * @since 3.7.1
         *
         * @param WC_Order $order The order being recalculated.
         * @return bool
         */
        private function should_preserve_order_taxes($order)
        {
        }
        /**
         * Whether a shipping line with no tax shows that the order's shipping is not taxed.
         *
         * A free line or one whose method is not taxable carries no tax on any order, so it
         * says nothing about whether the address taxes shipping.
         *
         * @param WC_Order_Item_Shipping $item A shipping line.
         * @return bool
         */
        private function shipping_line_could_carry_tax($item)
        {
        }
        /**
         * Preserve an order's recorded taxes when it is recalculated outside the cart.
         *
         * WC_Abstract_Order::calculate_taxes() recomputes item taxes against the order's
         * current address using WC_Tax::find_rates(). TaxJar stores its rates scoped to
         * the checkout address, so when a REST API or programmatic update changes the
         * address the lookup returns nothing and update_taxes() wipes every tax line to
         * zero. So the rate table is never consulted here: snapshot the existing taxes
         * (before WC recalculates) and, once the totals have been recalculated, either
         * restore them or re-apply the order's own rates.
         *
         * The rate is fixed when the order is placed; the amount follows the order. If no
         * item, fee or shipping amount changed, the recorded tax is restored exactly (so a
         * plain re-save moves nothing, and a hand-typed figure survives it). If some did,
         * the rates recorded on the order's tax lines are re-applied to the items that
         * changed, and the order gets a note with the old and new tax. See
         * restore_order_taxes_after_recalculation().
         *
         * Two cases ask TaxJar for fresh rates instead, once the totals are recalculated:
         * the address the order is taxed on changed (a stored rate belongs to the old
         * address), or the order has no tax yet and its items changed, as a new order's
         * have (there is no rate to re-use). See lookup_order_taxes().
         *
         * The cart/checkout, Store API and admin-AJAX flows have their own handling and are
         * left untouched, an order with no existing tax lines and nothing to look up is left
         * to WC, and a VAT-exempt order keeps the zero tax WC gives it.
         *
         * Restoration happens on woocommerce_order_after_calculate_totals, the only post-
         * recalculation hook WC fires on this path. A caller that invokes
         * WC_Abstract_Order::calculate_taxes() directly (without a following
         * calculate_totals()) is therefore not restored, because WC exposes no hook after
         * calculate_taxes(); the REST API and programmatic order-update paths this targets
         * all go through calculate_totals(). The snapshot is stashed by order id (not in a
         * per-call closure) so a batch can recalculate many orders without stacking one-shot
         * callbacks, and so a snapshot whose restore never fires cannot leak onto the hook.
         *
         * @internal Hooked to woocommerce_order_before_calculate_taxes.
         *
         * @param array    $args  Args passed to calculate_taxes(). Unused.
         * @param WC_Order $order The order being recalculated.
         *
         * @since 3.6.8
         */
        public function preserve_order_taxes_on_recalculation($args, $order)
        {
        }
        /**
         * Restore a preserved tax snapshot after WC has recalculated an order's totals.
         *
         * Looks up the snapshot captured in preserve_order_taxes_on_recalculation() for the
         * recalculated order and, if one is present, applies it and drops it from the
         * pending set. Keyed by order id so a batch that recalculates several orders
         * restores each from its own snapshot.
         *
         * - Nothing taxable changed: the recorded tax is restored exactly.
         * - Something changed: the order's recorded rates are re-applied to the changed
         *   items (see reapply_order_tax_rates()).
         * - Something changed but the order does not record its rates (orders from before
         *   WC 3.7): the recorded tax is restored and a note says it was not updated.
         * - The taxed address changed, or a new order has no tax yet: TaxJar is asked and
         *   its rates replace the order's tax. If that fails, the cases above apply as if
         *   no lookup was due, and a note says the tax could not be updated.
         * - The taxed address changed on an order with refunded tax: TaxJar is not asked,
         *   so the refunds keep matching the order's rates. The cases above apply, and a
         *   note says why the tax was not updated.
         *
         * @internal Hooked to woocommerce_order_after_calculate_totals.
         *
         * @param bool     $and_taxes Whether taxes were recalculated. Unused.
         * @param WC_Order $order     The order whose totals were recalculated.
         */
        public function restore_order_taxes_after_recalculation($and_taxes, $order)
        {
        }
        /**
         * Remember an order item's taxable amount before a save changes it.
         *
         * The REST API saves an edited item before it recalculates the order, so by the
         * time preserve_order_taxes_on_recalculation() runs, the item no longer shows what
         * it was. Only the first save in a request is kept: that is the amount the order's
         * recorded tax was based on.
         *
         * @internal Hooked to woocommerce_before_order_item_object_save.
         *
         * @param WC_Order_Item $item The item about to be saved.
         *
         * @since 3.7.1
         */
        public function remember_order_item_base_before_save($item)
        {
        }
        /**
         * Remember the location WooCommerce taxed an order item for.
         *
         * @internal Hooked to woocommerce_order_item_after_calculate_taxes and its fee and
         *           shipping counterparts, at the earliest priority.
         *
         * @param WC_Order_Item $item              The item WooCommerce just taxed.
         * @param mixed         $calculate_tax_for The location it was taxed for.
         *
         * @since 3.7.1
         */
        public function remember_order_item_tax_location($item, $calculate_tax_for = \null)
        {
        }
        /**
         * Run an item's after-calculate-taxes hook again, on the tax set for it here.
         *
         * WooCommerce fires the hook once it has taxed an item, and other plugins adjust the
         * tax there (an exemption plugin zeroes it). The tax set here replaces WooCommerce's,
         * so the hook runs again with the same arguments, and those plugins adjust this tax
         * as they adjusted WooCommerce's. Nothing runs for an item WooCommerce did not tax in
         * this recalculation.
         *
         * @param WC_Order_Item $item An item whose tax was just set.
         */
        private function run_order_item_tax_hook($item)
        {
        }
        /**
         * Record the id an order item was given when it was first saved.
         *
         * @internal Hooked to woocommerce_after_order_item_object_save.
         *
         * @param WC_Order_Item $item The saved item.
         *
         * @since 3.7.1
         */
        public function remember_order_item_created($item)
        {
        }
        /**
         * Snapshot the current tax state of an order before recalculation.
         *
         * Captures the tax line items (with their full metadata), the per-item tax
         * arrays, and the order-level tax totals so they can be restored verbatim after
         * WC recalculates the order for a changed address.
         *
         * @since 3.6.8
         * @param WC_Order $order The order to snapshot.
         * @return array {
         *   @type array  $tax_lines    Keyed by item_id; each holds the full WC_Order_Item_Tax field set.
         *   @type array  $item_taxes   Keyed by item_id (prefix 'shipping_' for shipping items); each is a taxes array.
         *   @type string $cart_tax     Order cart tax total.
         *   @type string $shipping_tax Order shipping tax total.
         *   @type string $discount_tax Order discount tax total.
         * }
         */
        private function snapshot_order_taxes($order)
        {
        }
        /**
         * Restore an order's taxes from a snapshot after WC recalculated it.
         *
         * Puts back the per-item taxes and tax line items (with their metadata) that
         * update_taxes() removed, and rebases the order total on the preserved tax
         * instead of whatever WC computed for the new address, while keeping any updated
         * non-tax amounts (such as a changed shipping total).
         *
         * @since 3.6.8
         * @param WC_Order $order    The order to restore into.
         * @param array    $snapshot Snapshot returned by snapshot_order_taxes().
         */
        private function restore_order_taxes($order, $snapshot)
        {
        }
        /**
         * Work out which of an order's taxable amounts changed since it was last saved.
         *
         * Covers the three ways an edit reaches a recalculation: an existing item whose
         * total changed (saved already, or still pending), an item added (no id yet, or
         * first saved in this request), and an item removed (still saved, but no longer on
         * the order).
         *
         * @param WC_Order $order The order about to be recalculated.
         * @return array {
         *   @type int[] $known_ids        Items saved before this request, still on the order.
         *   @type int[] $changed_ids      Saved items whose taxable amount changed.
         *   @type array $new_item_taxes   Taxes of new items that arrived already taxed, keyed by spl_object_id().
         *   @type array $removed_rate_ids Rate ids of removed items: 'classes' keyed by tax class, and 'shipping';
         *                                 'untaxed_shipping' is true when a removed shipping line carried no tax.
         *   @type bool  $has_changes      Whether anything taxable changed, including additions and removals.
         * }
         */
        private function find_order_tax_base_changes($order)
        {
        }
        /**
         * Whether a saved order item's taxable amount differs from what it was taxed on.
         *
         * Compared as numbers: a caller that re-sends "10.00" for a stored "10" has not
         * changed anything.
         *
         * @param WC_Order_Item $item A saved line item, fee or shipping item.
         * @return bool
         */
        private function order_item_base_moved($item)
        {
        }
        /**
         * The amounts an order item's tax is calculated on.
         *
         * @param array $data Item data (WC_Order_Item::get_data() shape).
         * @return array{total: float|null, subtotal: float|null}
         */
        private static function get_order_item_tax_base($data)
        {
        }
        /**
         * Whether every tax line in a snapshot records the rate it was charged at.
         *
         * Orders from before WC 3.7 have no rate_percent, and WC reads the missing value
         * back as 0. A 0% line that carries tax therefore means "rate unknown", and
         * re-applying 0% to it would wipe real tax.
         *
         * @param array $snapshot Snapshot returned by snapshot_order_taxes().
         * @return bool
         */
        private function snapshot_records_tax_rates($snapshot)
        {
        }
        /**
         * Re-apply an order's recorded rates to the items whose amounts changed.
         *
         * Items that did not change keep the tax they had. A changed item is taxed at the
         * rates it already carries; a new item or fee at the rates of an existing item in
         * the same tax class; a new shipping line at the rates of the existing shipping.
         * If the edit removed the last item of that class (or all the shipping), the rates
         * the removed items were taxed at are used. With no such rate on the order, a new
         * item is left untaxed and the note says so, unless it is shipping on an order
         * whose shipping was not taxed either.
         * A new item that arrives with its tax already set keeps it.
         * Percentages, labels and codes come from the order's tax lines, never from the
         * rate table, which may have changed since the order was placed.
         *
         * @param WC_Order $order    The recalculated order.
         * @param array    $snapshot Snapshot taken before the recalculation.
         */
        private function reapply_order_tax_rates($order, $snapshot)
        {
        }
        /**
         * Rebuild an order's tax lines and totals from the taxes now set on its items.
         *
         * WC has already recomputed the non-tax amounts by the time this runs; they are
         * kept and only the tax is swapped.
         *
         * @param WC_Order $order    The recalculated order.
         * @param array    $recorded Tax line fields to set per rate id after update_taxes()
         *                           (any of rate_code, label, rate_percent, compound).
         */
        private function rebuild_order_tax_totals($order, array $recorded)
        {
        }
        /**
         * Add a note about the order's tax.
         *
         * A checkout draft is still being built from the cart; a note there would outlive
         * the checkout and describe changes the merchant never made.
         *
         * @param WC_Order $order The order.
         * @param string   $note  Note text.
         */
        private function add_order_tax_note($order, $note)
        {
        }
        /**
         * The note for an address change whose lookup failed on an order that had tax.
         *
         * Says why the lookup failed and what was done instead: the order's tax was kept,
         * or, when other changes were made in the same edit, the recorded rates were
         * re-applied to them.
         *
         * @param string|false $lookup    Failed result of lookup_order_taxes().
         * @param bool         $reapplied Whether the recorded rates were re-applied.
         * @return string
         */
        private function get_failed_order_tax_update_note($lookup, $reapplied)
        {
        }
        /**
         * Remember an order's address before a save changes it, and which orders are new.
         *
         * Only the first save in a request is kept: that is the address the order's
         * recorded tax was calculated for.
         *
         * @internal Hooked to woocommerce_before_order_object_save.
         *
         * @param WC_Order $order The order about to be saved.
         *
         * @since 3.7.1
         */
        public function remember_order_before_save($order)
        {
        }
        /**
         * Record the id a new order was given when it was first saved.
         *
         * @internal Hooked to woocommerce_after_order_object_save.
         *
         * @param WC_Order $order The saved order.
         *
         * @since 3.7.1
         */
        public function remember_order_created($order)
        {
        }
        /**
         * The address an order was taxed on before this request changed it.
         *
         * Compares the address WC would tax the order on (see get_order_tax_address())
         * before and after, street included: two addresses in the same ZIP can have
         * different rates.
         *
         * @param WC_Order $order The order about to be recalculated.
         * @return \Automattic\WCServices\Tax\Address|null The old address, or null if it did not change.
         */
        private function find_order_tax_address_change($order)
        {
        }
        /**
         * Whether TaxJar should be asked for this order's rates once it is recalculated.
         *
         * Asked when the address the order is taxed on changed, or when the order has no
         * tax yet and its items changed. A new order counts: its items are first saved in
         * the same request. Everything else re-uses the rates recorded on the order, with
         * no request.
         *
         * @param array $snapshot Snapshot with base_changes and address_before.
         * @return bool
         */
        private function order_needs_tax_lookup(array $snapshot)
        {
        }
        /**
         * Which address an order is taxed on: 'base', 'billing' or 'shipping'.
         *
         * Mirrors WC_Abstract_Order::get_tax_location(): the Tax "Calculate tax based on"
         * setting, and the store address when the order uses local pickup.
         *
         * @param WC_Order $order The order.
         * @return string
         */
        private function get_order_tax_location_type($order)
        {
        }
        /**
         * The address an order is taxed on, built from its billing and shipping fields.
         *
         * Mirrors WC_Abstract_Order::get_tax_location(): shipping falls back to billing when
         * the order has no shipping country, and the store address is used when the
         * location type is 'base' or the chosen address has no country.
         *
         * @param array  $billing       Billing fields (WC_Order::get_address() shape).
         * @param array  $shipping      Shipping fields (WC_Order::get_address() shape).
         * @param string $location_type 'base', 'billing' or 'shipping'.
         * @return \Automattic\WCServices\Tax\Address
         */
        private function get_order_tax_address(array $billing, array $shipping, $location_type)
        {
        }
        /**
         * Ask TaxJar for the rates of an order at its current address.
         *
         * Built like the admin Recalculate request (same line items), with the address taken
         * from the order instead of the form. Items whose tax location is filtered to a
         * different address are asked for separately, as at checkout. Answers are cached
         * for an hour (see smartcalcs_cache_request()).
         *
         * @param WC_Order $order The recalculated order.
         * @return array|string|false|null Lookup result; ORDER_TAX_LOOKUP_BAD_ADDRESS when the
         *                                 order address has a US state WooCommerce does not
         *                                 list, or failed as one TaxJar cannot be asked
         *                                 about; ORDER_TAX_LOOKUP_BAD_STORE_ADDRESS when it
         *                                 failed on the store address; false when any other
         *                                 request failed; null when the order has nothing
         *                                 to ask about.
         */
        private function lookup_order_taxes($order)
        {
        }
        /**
         * The address with a state name replaced by the state's code.
         *
         * The REST API accepts "ISO code or name" for the state and saves it as sent, so an
         * order can carry "Michigan" where checkout would send "MI". Matched case-insensitively
         * against WooCommerce's state names, as the Store API's ValidationUtils::format_state()
         * does. Only the address sent to TaxJar changes; the order keeps what it was given.
         *
         * @param \Automattic\WCServices\Tax\Address $address The address the order is taxed at.
         * @return \Automattic\WCServices\Tax\Address
         */
        private function with_state_code(\Automattic\WCServices\Tax\Address $address)
        {
        }
        /**
         * Whether a US address has no state, or one WooCommerce does not list.
         *
         * Such an address would lose its tax without a request: calculate_tax() compares the
         * order's state with the store's and answers "no tax" for any mismatch.
         *
         * @param \Automattic\WCServices\Tax\Address $address The address the order is taxed at, after with_state_code().
         * @return bool
         */
        private function has_unknown_us_state(\Automattic\WCServices\Tax\Address $address)
        {
        }
        /**
         * Whether an order's tax address has what TaxJar needs to be asked about it.
         *
         * Mirrors the destination checks that calculate_tax() and validate_taxjar_request()
         * make before sending anything: a country, a postcode outside the VAT countries, a
         * state in the US and Canada, and a well-formed US ZIP code when it is 5 or 10
         * characters long. Kept no stricter than those, so an address that was sent is
         * never blamed for a request that failed.
         *
         * @param \Automattic\WCServices\Tax\Address $address The address the order is taxed at.
         * @return bool
         */
        private function is_sendable_order_tax_address(\Automattic\WCServices\Tax\Address $address)
        {
        }
        /**
         * Whether the store address has what TaxJar needs to be asked from it.
         *
         * Mirrors the origin checks that calculate_tax() and validate_taxjar_request() make
         * before sending anything: a country, and a valid ZIP code for a US store. Reads the
         * store settings, not a nexus address a filter may send in their place.
         *
         * @return bool
         */
        private function is_sendable_store_tax_address()
        {
        }
        /**
         * Tax an order at the rates TaxJar just returned for it.
         *
         * Every line is re-taxed: the old rates belonged to the old address, or there were
         * none. A fee is taxed at the rates of a product in its tax class, or keeps the tax
         * WC gave it when no such product was looked up. The address and
         * the change are recorded in a note when the address changed or the tax moved.
         *
         * An answer without rates means the store has no nexus at the address. The tax WC
         * calculated from the rate table is kept then, as checkout and the admin Recalculate
         * keep it, so a rate the merchant added for that state is still charged.
         *
         * @param WC_Order $order    The recalculated order.
         * @param array    $lookup   Result of lookup_order_taxes().
         * @param array    $snapshot Snapshot taken before the recalculation.
         */
        private function apply_looked_up_order_taxes($order, array $lookup, array $snapshot)
        {
        }
        /**
         * An order's tax address on one line, for an order note.
         *
         * @param \Automattic\WCServices\Tax\Address $address The address the order is taxed at.
         * @return string
         */
        private function format_order_tax_address(\Automattic\WCServices\Tax\Address $address)
        {
        }
        /**
         * Rates for WC_Tax::calc_tax() from rate ids TaxJar's answer was stored under.
         *
         * The percentage comes from the answer when it is given: it is what TaxJar charged
         * this line, while the shared row may since hold another line's rate.
         *
         * @param array       $rate_ids      Rate ids, in the order the answer's rates were stored.
         * @param object|null $response_line The answer's breakdown line for this item.
         * @return array
         */
        private function get_looked_up_rates(array $rate_ids, $response_line = \null)
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
        /**
         * Validate the requester's permissions for a route that acts on the whole store: the label
         * check, then manage_woocommerce. A WP_Error from the label check is returned as is, so
         * WordPress still denies the request with it.
         *
         * @param WP_REST_Request $request The request.
         * @return bool|WP_Error
         */
        protected function check_store_permission($request)
        {
        }
        /**
         * Get the order a label route acts on, before anything is written or sent upstream.
         *
         * Anything that is not an order, such as a page, a product or a refund, is not found.
         *
         * @param int|string $order_id Order ID from the route.
         *
         * @return WC_Order|WP_Error
         */
        protected function get_order_for_label_request($order_id)
        {
        }
        /**
         * Whether a shipping label is one of the order's own labels.
         *
         * @param WC_Order   $order    Order from get_order_for_label_request().
         * @param int|string $label_id Label ID from the route.
         *
         * @return bool
         */
        protected function is_label_on_order(\WC_Order $order, $label_id)
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
        /**
         * The label modal reads these settings, so reading keeps the label check. Changing them
         * affects the whole store and also needs manage_woocommerce.
         *
         * @param WP_REST_Request $request The request.
         * @return bool|WP_Error
         */
        public function check_permission($request)
        {
        }
    }
    /**
     * Normalizes a shipping label address through the Connect server.
     */
    class WC_REST_Connect_Address_Normalization_Controller extends \WC_REST_Connect_Base_Controller
    {
        /**
         * Endpoint path.
         *
         * @var string
         */
        protected $rest_base = 'connect/normalize-address';
        /**
         * Normalize the address in the request body.
         *
         * @param WP_REST_Request $request The request.
         * @return array|WP_Error
         */
        public function post($request)
        {
        }
        /**
         * Validate the requester's permissions.
         *
         * Both the origin and the destination address are only normalized from the
         * shipping label form in wp-admin, so every request needs the labels capability.
         *
         * This is deliberately kept even though it currently matches the base class:
         * the requirement belongs to this route, not to whatever default the base
         * controller happens to carry, and third-party subclasses override it here.
         *
         * @param WP_REST_Request $request The request.
         * @return bool
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
        /**
         * The migration state applies to the whole store, so the label capability alone is not enough.
         *
         * @param WP_REST_Request $request The request.
         * @return bool|WP_Error
         */
        public function check_permission($request)
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
        /**
         * Debug and logging settings apply to the whole store, so the label capability alone is not enough.
         *
         * @param WP_REST_Request $request The request.
         * @return bool|WP_Error
         */
        public function check_permission($request)
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
        /**
         * Live rate method settings apply to the whole store, so the label capability alone is not enough.
         *
         * @param WP_REST_Request $request The request.
         * @return bool|WP_Error
         */
        public function check_permission($request)
        {
        }
    }
    class WC_REST_Connect_Shipping_Carrier_Controller extends \WC_REST_Connect_Base_Controller
    {
        protected $rest_base = 'connect/shipping/carrier';
        public function post($request)
        {
        }
        /**
         * Carrier accounts belong to the whole store, so the label capability alone is not enough.
         *
         * @param WP_REST_Request $request The request.
         * @return bool|WP_Error
         */
        public function check_permission($request)
        {
        }
    }
    class WC_REST_Connect_Shipping_Carrier_Delete_Controller extends \WC_REST_Connect_Base_Controller
    {
        protected $rest_base = 'connect/shipping/carrier/(?P<carrier_id>.+)';
        public function delete($request)
        {
        }
        /**
         * Carrier accounts belong to the whole store, so the label capability alone is not enough.
         *
         * @param WP_REST_Request $request The request.
         * @return bool|WP_Error
         */
        public function check_permission($request)
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
        /**
         * Carrier accounts belong to the whole store, so the label capability alone is not enough.
         *
         * @param WP_REST_Request $request The request.
         * @return bool|WP_Error
         */
        public function check_permission($request)
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
         * Whether an address from the request is an array with a street, so saving it cannot blank
         * the stored origin or the order's shipping street.
         *
         * @param mixed $address Address from the request.
         *
         * @return bool
         */
        private function has_street_address($address)
        {
        }
        /**
         * Whether an ID is a product on one of the order's line items, as product or variation.
         *
         * @param WC_Order $order      Order the rates are for.
         * @param string   $product_id Product ID from the request.
         *
         * @return bool
         */
        private function is_product_on_order(\WC_Order $order, $product_id)
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
        /**
         * Subscriptions belong to the whole store, so the label capability alone is not enough.
         *
         * @param WP_REST_Request $request The request.
         * @return bool|WP_Error
         */
        public function check_permission($request)
        {
        }
    }
    class WC_REST_Connect_Subscriptions_Controller extends \WC_REST_Connect_Base_Controller
    {
        protected $rest_base = 'connect/subscriptions';
        public function post()
        {
        }
        /**
         * Subscriptions belong to the whole store, so the label capability alone is not enough.
         *
         * @param WP_REST_Request $request The request.
         * @return bool|WP_Error
         */
        public function check_permission($request)
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
         * Validate the requester's permissions: the capabilities below, and only a user who
         * may accept the Terms of Service (the connection owner, or anyone in offline mode).
         *
         * @param WP_REST_Request $request Request being authorized.
         * @return bool
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
         * Filesystem path of the directory holding the built assets, with a trailing slash.
         *
         * @var string
         */
        private string $dist_dir;
        /**
         * Constructor.
         *
         * @param string $dist_dir Optional. Filesystem path of the directory holding the built
         *                         assets, with a trailing slash. Defaults to the plugin's dist
         *                         directory; tests pass a temp directory.
         */
        public function __construct(string $dist_dir = '')
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
         * Get the filesystem path of a script's asset file.
         *
         * @param string $handle Script handle.
         *
         * @return string
         */
        private function get_script_asset_path(string $handle): string
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
         * Null when the instance has not been resolved, or when resolution failed.
         *
         * @var \Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema|null
         */
        private static ?\Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema $instance = null;
        /**
         * Whether resolving the ExtendSchema instance has been attempted.
         *
         * Guards against re-running container resolution (and re-logging) more than
         * once within a single request when resolution fails. Note this cannot span
         * requests: PHP statics reset on every page load, so a broken install still
         * logs once per request.
         *
         * @var bool
         */
        private static bool $attempted = false;
        /**
         * Plugin Identifier
         *
         * @var string
         */
        const IDENTIFIER = 'woocommerce-services';
        /**
         * ExtendSchemaService constructor.
         *
         * Protected rather than private so tests can subclass and override
         * resolve_extend_schema() to exercise the resolution-failure path.
         */
        protected function __construct()
        {
        }
        /**
         * Resolve the ExtendSchema instance from the Store API container.
         *
         * Extracted as a seam so a broken container can be simulated in tests (subclass
         * and override to throw) without needing a genuinely partial WooCommerce install.
         *
         * @return \Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema
         */
        protected static function resolve_extend_schema(): \Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema
        {
        }
        /**
         * Returns the ExtendSchema instance, or null when it cannot be resolved.
         *
         * Callers MUST check for null before use: on a partial or broken WooCommerce
         * install the container can fail to resolve ExtendSchema even when the
         * top-level StoreApi class exists.
         */
        public static function instance(): ?\Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema
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
         * Selector of the classic checkout notices container, replaced by the update_order_review fragment.
         *
         * @var string
         */
        const CLASSIC_CHECKOUT_NOTICES_SELECTOR = 'div.wcservices-checkout-notices';
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
         * Print the classic checkout container that the update_order_review fragment fills with the notices.
         */
        public function print_classic_checkout_notices_container()
        {
        }
        /**
         * Send the notices to the classic checkout as an update_order_review fragment.
         *
         * The container is replaced even when there are no notices, so a corrected address clears the message.
         *
         * @param array $fragments Checkout fragments.
         *
         * @return array
         */
        public function add_update_order_review_fragment($fragments)
        {
        }
        /**
         * Render the notices with the WooCommerce notice templates.
         *
         * @return string
         */
        private function get_notices_html(): string
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
namespace Automattic\WCServices\Tax {
    /**
     * Address value object for the TaxJar integration. Immutable.
     */
    final class Address
    {
        /**
         * Two-letter ISO country code, uppercase. Empty string if unknown.
         *
         * @var string
         */
        private $country = '';
        /**
         * State / province code, uppercase. Empty string if unknown.
         *
         * @var string
         */
        private $state = '';
        /**
         * Postal / ZIP code. May be empty for VAT countries.
         *
         * @var string
         */
        private $postcode = '';
        /**
         * City name with semicolons stripped and whitespace collapsed.
         *
         * @var string
         */
        private $city = '';
        /**
         * Street address.
         *
         * @var string
         */
        private $street = '';
        /**
         * Optional identifier (only used by nexus addresses).
         *
         * @var string|null
         */
        private $id = null;
        /**
         * Separator joining the components of `jurisdiction_key()`.
         *
         * @var string
         */
        private const KEY_SEPARATOR = '|';
        /**
         * Validation schema used by `validate()`. Mirrors the rules previously inlined
         * in `WC_Connect_TaxJar_Integration::is_nexus_address_valid()`.
         *
         * @var array
         */
        private const VALIDATION_SCHEMA = array('id' => array('type' => 'string', 'max_length' => 255), 'country' => array('type' => 'string', 'pattern' => '/^[A-Z]{2}$/', 'max_length' => 2), 'postcode' => array('type' => 'string', 'max_length' => 20), 'state' => array('type' => 'string', 'pattern' => '/^[A-Z0-9\-]{1,100}$/', 'max_length' => 100), 'city' => array('type' => 'string', 'max_length' => 100), 'street' => array('type' => 'string', 'max_length' => 255));
        /**
         * Private constructor — use the named static factories below.
         *
         * @param string      $country  Country code, uppercased on construction.
         * @param string      $state    State / province code, uppercased on construction.
         * @param string      $postcode Postal code; only the first comma-separated segment is kept.
         * @param string      $city     City name; semicolons stripped and whitespace collapsed.
         * @param string      $street   Street address line, trimmed.
         * @param string|null $id       Optional nexus-address identifier.
         */
        private function __construct(string $country = '', string $state = '', string $postcode = '', string $city = '', string $street = '', ?string $id = null)
        {
        }
        /* ──── Named constructors ──── */
        /**
         * Empty address. Useful for early-return paths (e.g. when `WC()->customer` is null).
         *
         * @return self
         */
        public static function empty(): self
        {
        }
        /**
         * Build from WC's positional 5-tuple `[country, state, postcode, city, street]`.
         *
         * Matches the contract of the `woocommerce_customer_taxable_address` filter.
         *
         * @param array $tuple Indexed 5-element array. Missing positions become empty strings.
         * @return self
         */
        public static function from_taxable_tuple(array $tuple): self
        {
        }
        /**
         * Build from an associative `to_*` (or `from_*`) shape — e.g. `calculate_tax()` options.
         *
         * @param array  $options Source array. Missing keys default to empty.
         * @param string $prefix  Either 'to_' (default) or 'from_'.
         * @return self
         */
        public static function from_options(array $options, string $prefix = 'to_'): self
        {
        }
        /**
         * Build from the unprefixed nexus shape (`country, zip, state, city, street`).
         *
         * Note: `zip` (not `postcode`) — matches both the TaxJar nexus_addresses[] payload
         * and the `woocommerce_taxjar_nexus_address` filter contract.
         *
         * @param array $nexus Nexus address array, optionally carrying an `id`.
         * @return self
         */
        public static function from_nexus(array $nexus): self
        {
        }
        /**
         * Build from the store-settings shape `{street, city, state, country, postcode}`.
         *
         * Matches the array returned by `WC_Connect_TaxJar_Integration::get_store_settings()`.
         *
         * @param array $settings Store settings array.
         * @return self
         */
        public static function from_store_settings(array $settings): self
        {
        }
        /**
         * Build from a WooCommerce customer's billing address.
         *
         * @param \WC_Customer $customer Live customer object — typically `WC()->customer`.
         * @return self
         */
        public static function from_customer_billing(\WC_Customer $customer): self
        {
        }
        /**
         * Build from a WooCommerce customer's shipping address.
         *
         * @param \WC_Customer $customer Live customer object — typically `WC()->customer`.
         * @return self
         */
        public static function from_customer_shipping(\WC_Customer $customer): self
        {
        }
        /**
         * Build from an order's saved billing or shipping address.
         *
         * @param \WC_Order $order Order to read.
         * @param string   $type  'billing' or 'shipping'. Anything else reads billing.
         * @return self
         */
        public static function from_order(\WC_Order $order, string $type): self
        {
        }
        /**
         * Build from an admin-order `$_POST` payload.
         *
         * Unslashes the superglobal once, then applies `wc_clean()` to each field. Caller
         * must have already verified the nonce / capability — this method does not check
         * authorization.
         *
         * The unslashing is load-bearing, not ceremony. WordPress slashes every superglobal
         * on load and `wc_clean()` sanitizes without unslashing, so an apostrophe in an admin
         * order address would otherwise reach TaxJar — and the `wp_woocommerce_tax_rates`
         * city column — as the literal `O\'Brien`, which can never match the unslashed value
         * the cart path writes for the same address.
         *
         * It happens exactly once, and only on the superglobal. `wp_unslash()` is
         * `stripslashes_deep()`, which is not idempotent: a second pass over an already
         * unslashed value eats real backslashes (`A\B` becomes `AB`). The `$post` override
         * is a test seam that is never slashed, so it must not be unslashed either.
         *
         * @param array|null $post Override source for testing. Defaults to `$_POST`.
         * @return self
         */
        public static function from_post_request(?array $post = null): self
        {
        }
        /**
         * Build from a TaxJar response's `jurisdictions` object.
         *
         * Partial: only `country`, `state`, `city` are present in the response —
         * postcode and street default to empty.
         *
         * @param object|array|null $jurisdictions A `$response_body->tax->jurisdictions` snippet.
         * @return self
         */
        public static function from_jurisdictions($jurisdictions): self
        {
        }
        /* ──── Field accessors — normalised on construction, cheap reads ──── */
        /**
         * Two-letter ISO country code, uppercase. Empty if unknown.
         *
         * @return string
         */
        public function country(): string
        {
        }
        /**
         * State / province code, uppercase. Empty if unknown.
         *
         * @return string
         */
        public function state(): string
        {
        }
        /**
         * State in the exact form WooCommerce core stores it in `tax_rate_state`.
         *
         * This is not a normalisation policy of ours — it is a mirror of core's.
         * `WC_Tax::prepare_tax_rate()` singles this one column out and runs it through
         * `sanitize_key()` before `format_tax_rate_state()` uppercases it, so the value
         * that reaches the column has been lower-cased and stripped of everything
         * outside `[a-z0-9_-]`. `WC_Tax::get_matched_tax_rates()` then compares against
         * it with a plain `tax_rate_state IN ( %s, '' )` and no normalisation of its own.
         *
         * A lookup that asks for anything else therefore cannot find the row it just
         * wrote, and `create_or_update_tax_rate()` responds by inserting another one —
         * once per calculation, forever. Stripping spaces (which is all this method used
         * to do) covers `'N Y'` and nothing else: `'N.Y.'`, and any state carrying
         * non-ASCII, still diverge.
         *
         * One boundary to that story: a state `sanitize_key()` empties *outright* (`'ЛЕН'`,
         * `'东京'`) was never the duplicating shape, because the blank it stores satisfies
         * the `''` arm of that `IN` clause whatever the lookup asked for. The rows that
         * could not be found again are the ones that collapse *partially*, to a shorter
         * non-empty code — `'ÎF'` stored as `'F'`.
         *
         * Because core applies the same function on the way in, mirroring it here cannot
         * lose information the stored value still has.
         *
         * @return string
         */
        public function state_compact(): string
        {
        }
        /**
         * Postal / ZIP code (first segment of any comma-list).
         *
         * Preserved as entered apart from that split and a trim — in particular the
         * `+4` suffix of a US ZIP is **not** stripped. See `jurisdiction_key()`.
         *
         * @return string
         */
        public function postcode(): string
        {
        }
        /**
         * City name with semicolons stripped and whitespace collapsed.
         *
         * @return string
         */
        public function city(): string
        {
        }
        /**
         * Street address line.
         *
         * @return string
         */
        public function street(): string
        {
        }
        /**
         * Optional identifier — only set for nexus addresses that carry one.
         *
         * @return string|null
         */
        public function id(): ?string
        {
        }
        /**
         * True if all five core fields are empty. Mirrors the early-return path
         * `get_taxable_address()` takes when `WC()->customer` is null.
         *
         * @return bool
         */
        public function is_empty(): bool
        {
        }
        /* ──── Jurisdiction identity ──── */
        /**
         * Stable key for the tax jurisdiction this address resolves to at TaxJar.
         *
         * Two addresses sharing a key are answered by TaxJar with the same
         * `jurisdictions` object, so a jurisdiction resolved for one may be reused for
         * the other. This is the single place the key is derived: it must be used for
         * both the write and the read side of any jurisdiction cache, because deriving
         * it differently at each end is precisely what made an earlier attempt at
         * jurisdiction-keyed rate rows (PR #2906) miss on every lookup.
         *
         * **The field set is measured, not assumed.** It was established against the
         * live TaxJar API in July 2026, over roughly 35 calls across three ZIP codes;
         * an earlier `country + state + postcode` hypothesis was falsified by that run:
         *
         * - **City is load-bearing.** ZIP 81323 CO with city `Dolores` resolves to
         *   `US|CO|MONTEZUMA|DOLORES`; with the city absent or misspelled it resolves to
         *   `US|CO|DOLORES|RICO` — a different, real county. Excluding the city would
         *   collapse two distinct jurisdictions onto one key.
         * - **The postcode must be keyed exactly as entered, `+4` included.**
         *   `81323-2100` resolves to the county-only `US|CO|MONTEZUMA|` even when an
         *   in-town city and street are supplied. Truncating to five digits would merge
         *   genuinely different jurisdictions.
         * - **Street is excluded.** Across every pairing tried it never moved
         *   `jurisdictions` — not even as a tiebreaker when the city was absent.
         *   Including it would fragment the key for no accuracy gain.
         * - **Store nexus is excluded.** Nexus was measured to leave `jurisdictions`
         *   unchanged, so a jurisdiction resolved under one store address stays valid
         *   after the store moves.
         *
         * Note the scope of that last point: nexus does not change the *jurisdiction*,
         * but it does change the *rate breakdown* within it. A jurisdiction is therefore
         * a sufficient identity for a stored rate row **only while the store nexus is
         * fixed** — a store-address change invalidates stored rates even though every
         * jurisdiction key stays the same.
         *
         * Components are upper-cased so that differences of letter case, which TaxJar
         * ignores, do not fragment the key. The separator is stripped from each
         * component first so a value containing it cannot forge a different key.
         *
         * The case folding is `wc_strtoupper()`, not `strtoupper()`, and the difference
         * is load-bearing. `strtoupper()` is byte-wise ASCII: it leaves every non-ASCII
         * byte alone, so `Zürich` folds to `ZüRICH` while `ZÜRICH` folds to itself —
         * two keys for one jurisdiction, which is precisely the fragmentation this
         * method exists to prevent. `normalize_city()` preserves multibyte input, so a
         * non-ASCII city reaches here intact from any international checkout.
         *
         * Note this deliberately diverges from the city sent to `to_find_rates_args()`,
         * which must stay on `strtoupper()`. That value's contract is byte-parity with
         * WooCommerce core, which upper-cases with plain `strtoupper()` on both the write
         * (`WC_Tax::format_tax_rate_city()`) and the read (the `location_code`
         * comparison inside `WC_Tax::find_rates()`). Folding wider than core there would
         * store `ZÜRICH` while core searched for `ZüRICH` — manufacturing the unbounded
         * rate-row growth that normalisation exists to close. Same operation, opposite
         * correct answers, because this key is ours and that one is core's.
         *
         * `wc_strtoupper()` falls back to `strtoupper()` when ext-mbstring is absent, so
         * this is no worse than the previous behavior on a minimal PHP build.
         *
         * @return string Key of the form `COUNTRY|STATE|POSTCODE|CITY`.
         */
        public function jurisdiction_key(): string
        {
        }
        /* ──── Validation ──── */
        /**
         * Validate fields against the address schema.
         *
         * Returns a `WP_Error`. Use `->has_errors()` to branch:
         *
         *   $errors = $address->validate( array( 'country', 'state' ) );
         *   if ( $errors->has_errors() ) { ... }
         *
         * @param string[] $required Field names that must be non-empty for the address
         *                           to be considered valid. Defaults to country + state
         *                           (the historic nexus-validity contract).
         * @return \WP_Error
         */
        public function validate(array $required = array('country', 'state')): \WP_Error
        {
        }
        /* ──── Output methods — one per consumer shape ──── */
        /**
         * WC core's positional 5-tuple. Feed this into the
         * `woocommerce_customer_taxable_address` filter to preserve the existing
         * external-plugin contract.
         *
         * @return array{0: string, 1: string, 2: string, 3: string, 4: string}
         */
        public function to_taxable_tuple(): array
        {
        }
        /**
         * Prefixed shape used inside the TaxJar API request body — `to_country`,
         * `to_state`, `to_zip`, `to_city`, `to_street` (or `from_*`).
         *
         * Note: the wire-level field is `zip`, not `postcode`.
         *
         * @param string $prefix Either 'to_' (default) or 'from_'.
         * @return array<string, string>
         */
        public function to_taxjar_body(string $prefix = 'to_'): array
        {
        }
        /**
         * Unprefixed nexus-address shape used by TaxJar's `nexus_addresses[]` payload
         * and the `woocommerce_taxjar_nexus_address` filter.
         *
         * @return array{country: string, zip: string, state: string, city: string, street: string}
         */
        public function to_nexus_array(): array
        {
        }
        /**
         * Args for `WC_Tax::find_rates()` — the read end of the tax-rate-table round trip.
         *
         * Every field is in the form WC core stores it, so this and
         * `to_rate_table_locations()` cannot disagree: a row written from one address is
         * found by a lookup built from the same address.
         *
         * @param string $tax_class Tax class slug to look up.
         * @return array{country: string, state: string, postcode: string, city: string, tax_class: string}
         */
        public function to_find_rates_args(string $tax_class = ''): array
        {
        }
        /**
         * Location codes for the write end: the `postcode` and `city` rows that
         * `WC_Tax::_update_tax_rate_postcodes()` / `_update_tax_rate_cities()` persist
         * alongside a rate.
         *
         * Paired with `to_find_rates_args()` on purpose. Deriving the two independently is
         * what let `create_or_update_tax_rate()` look up a value it had never written and
         * insert a fresh row for the same address on every calculation.
         *
         * @return array{postcode: string, city: string}
         */
        public function to_rate_table_locations(): array
        {
        }
        /**
         * Postcode in the form WC core matches rate rows against.
         *
         * `WC_Tax::find_rates()` normalizes its argument with
         * `wc_normalize_postcode( wc_clean( … ) )`, while
         * `_update_tax_rate_postcodes()` stores what it is handed verbatim. Applying the
         * same normalisation to both ends is what closes that gap; it is idempotent, so
         * passing an already-normalised value into `find_rates()` changes nothing.
         *
         * @return string
         */
        private function postcode_as_stored(): string
        {
        }
        /**
         * City in the form WC core stores in the `city` location row.
         *
         * Core upper-cases and trims on both ends (`format_tax_rate_city()` on the write,
         * `strtoupper()` inside the lookup SQL) but sanitizes on neither. The plugin used
         * to apply `wc_clean()` on the write only, so a city carrying anything
         * `sanitize_text_field()` strips was stored in one form and searched for in
         * another — a fresh rate row per calculation.
         *
         * @return string
         */
        private function city_as_stored(): string
        {
        }
        /**
         * Back-compat shape used by `get_address()` and `get_backend_address()` return
         * values: `to_country`, `to_state`, `to_zip`, `to_city`, `to_street` — but with
         * empty-string fields converted to `false`, the value the legacy
         * "isset && !empty" extraction produced for a missing field. Deliberately
         * narrower than `! empty()`: a literal `'0'` is preserved, where the legacy
         * check collapsed it to `false`.
         *
         * @param string $prefix Either 'to_' (default) or 'from_'.
         * @return array<string, string|false>
         */
        public function to_legacy_options(string $prefix = 'to_'): array
        {
        }
        /* ──── Normalisation helpers ──── */
        /**
         * Strip semicolons and collapse whitespace runs in a city value.
         *
         * `WC_Tax::_update_tax_rate_cities()` treats `;` as a multi-city separator
         * (it `explode(';', ...)`s the input), but `WC_Tax::find_rates()` queries the
         * city column with a single `location_code = '<CITY>'` literal — so a checkout
         * city containing `;` (e.g. typo'd `Casse;Berry`) gets stored as two separate
         * location rows (`CASSE`, `BERRY`) yet looked up as the joined string
         * `CASSE;BERRY`. That asymmetry makes `find_rates()` miss on every subsequent
         * calculation, which makes `create_or_update_tax_rate()` insert a fresh row each
         * checkout — unbounded growth of `wp_woocommerce_tax_rates`.
         *
         * This is the canonical implementation. `WC_Connect_TaxJar_Integration::normalize_city()`
         * is a deprecated delegate to it.
         *
         * @param string $city Raw city value, possibly user-entered.
         * @return string Normalized city, safe for `_update_tax_rate_cities` and `find_rates`.
         */
        public static function normalize_city(string $city): string
        {
        }
        /**
         * Uppercase + trim. Returns empty string for empty input.
         *
         * @param string $value Raw value.
         * @return string
         */
        private static function upper(string $value): string
        {
        }
        /**
         * Take only the first segment of a comma-list postcode and trim it.
         *
         * Some carts (notably WC's `,`-joined zone matching) deliver postcodes as
         * `"33033,33034"`; TaxJar wants a single value. A `+4` suffix is hyphenated,
         * not comma-separated, so it survives this split intact — which
         * `jurisdiction_key()` depends on.
         *
         * @param string $postcode Raw postcode value.
         * @return string
         */
        private static function first_postcode_segment(string $postcode): string
        {
        }
    }
    /**
     * Admin notice for the store address check.
     */
    final class StoreAddressNotice
    {
        /**
         * Admin-post action that applies the suggested state and ZIP.
         */
        const APPLY_ACTION = 'wc_connect_apply_store_address';
        /**
         * Admin-post action that dismisses the notice for the current address.
         */
        const DISMISS_ACTION = 'wc_connect_dismiss_store_address';
        /**
         * Verifier holding the stored result.
         *
         * @var StoreAddressVerifier
         */
        private $verifier;
        /**
         * Constructor.
         *
         * @param StoreAddressVerifier $verifier Verifier.
         */
        public function __construct(\Automattic\WCServices\Tax\StoreAddressVerifier $verifier)
        {
        }
        /**
         * Register hooks.
         */
        public function init()
        {
        }
        /**
         * Print the notice, if one is due on this screen.
         */
        public function render()
        {
        }
        /**
         * Print the notice for a suggested state and ZIP.
         *
         * A different state is an error: orders from the store's real state are then taxed as
         * out-of-state, which usually means no tax at all.
         *
         * @param array $result Stored result.
         */
        private function render_suggestion(array $result)
        {
        }
        /**
         * Apply the suggested state and ZIP, then return to the page the merchant came from.
         */
        public function handle_apply()
        {
        }
        /**
         * Dismiss the notice, then return to the page the merchant came from.
         */
        public function handle_dismiss()
        {
        }
        /**
         * Write the suggested state and ZIP to the store settings.
         *
         * Only those two change: they are what tax depends on, and the rest of the store address
         * stays as the merchant wrote it. The nonce is checked by the caller. This checks everything else, and does nothing
         * unless all of it holds: the user may manage the store, the suggestion is for the
         * address that is saved now, and the saved settings are what tax is calculated from.
         *
         * @return bool True when the address was updated.
         */
        public function apply_suggestion()
        {
        }
        /**
         * Is the saved store address the one tax is calculated from?
         *
         * A `taxjar_store_settings` filter can replace it. Then writing the suggestion to the
         * settings would change nothing, so the notice doesn't offer it.
         *
         * @return bool
         */
        private function can_apply()
        {
        }
        /**
         * Does the result suggest a different state from the store's?
         *
         * @param array $result Stored result.
         * @return bool
         */
        private function is_state_change(array $result)
        {
        }
        /**
         * Can the result mean orders from the store's own state get no tax from TaxJar?
         *
         * A wrong state makes them out-of-state orders, and a missing or invalid ZIP stops the
         * request. Either way they are charged only rates saved by earlier lookups, or none.
         *
         * @param array $result Stored result.
         * @return bool
         */
        private function can_stop_in_state_tax(array $result)
        {
        }
        /**
         * Is the current admin screen the WordPress Dashboard?
         *
         * @return bool
         */
        private function is_dashboard()
        {
        }
        /**
         * Is the current admin screen a WooCommerce one?
         *
         * @return bool
         */
        private function is_woocommerce_screen()
        {
        }
        /**
         * Nonced admin-post URL for an action.
         *
         * @param string $action Action name.
         * @return string
         */
        private function action_url($action)
        {
        }
        /**
         * Print a notice.
         *
         * @param string $type        notice-{type}: error or warning.
         * @param string $message     Escaped message HTML.
         * @param string $actions     Escaped HTML shown under the message.
         * @param bool   $dismissible Whether to show a dismiss link.
         */
        private function print_notice($type, $message, $actions, $dismissible)
        {
        }
        /**
         * Return to the referring admin page, or the General settings.
         */
        private function redirect_back()
        {
        }
    }
    /**
     * Store address verification against TaxJar.
     */
    final class StoreAddressVerifier
    {
        /**
         * Option holding the latest result. Site-scoped, like the rest of the plugin's settings.
         */
        const OPTION_NAME = 'wc_connect_store_address_verification';
        /**
         * WP-Cron hook for the background check.
         */
        const CRON_HOOK = 'wc_connect_verify_store_address';
        /**
         * Proxy path of TaxJar's address validation endpoint.
         */
        const VALIDATE_PATH = 'taxjar/v2/addresses/validate';
        /**
         * Time limit, in seconds, for the check made while the merchant waits on the settings screen.
         */
        const SAVE_TIMEOUT = 5;
        /**
         * How long to wait before retrying after a failed request.
         */
        const RETRY_AFTER = HOUR_IN_SECONDS;
        const STATUS_VERIFIED = 'verified';
        const STATUS_SUGGESTION = 'suggestion';
        const STATUS_AMBIGUOUS = 'ambiguous';
        const STATUS_NOT_FOUND = 'not_found';
        const STATUS_ZIP_MISSING = 'zip_missing';
        const STATUS_ZIP_INVALID = 'zip_invalid';
        const STATUS_SKIPPED = 'skipped';
        const STATUS_ERROR = 'error';
        /**
         * Client used to reach TaxJar through the Connect server.
         *
         * @var \WC_Connect_API_Client
         */
        private $api_client;
        /**
         * Supplies the store address exactly as the tax calculation sends it, and the log.
         *
         * @var \WC_Connect_TaxJar_Integration
         */
        private $taxjar;
        /**
         * Constructor.
         *
         * @param \WC_Connect_API_Client         $api_client API client.
         * @param \WC_Connect_TaxJar_Integration $taxjar     TaxJar integration.
         */
        public function __construct(\WC_Connect_API_Client $api_client, \WC_Connect_TaxJar_Integration $taxjar)
        {
        }
        /**
         * Register hooks.
         */
        public function init()
        {
        }
        /**
         * The store address TaxJar receives, normalised.
         *
         * Read through the integration so a `taxjar_store_settings` filter is honoured: that
         * filtered address is the one tax is calculated from.
         *
         * @return Address
         */
        public function get_store_address()
        {
        }
        /**
         * Fingerprint of an address. A new fingerprint means a new check is due.
         *
         * @param Address $address Address.
         * @return string
         */
        public static function hash_address(\Automattic\WCServices\Tax\Address $address)
        {
        }
        /**
         * The stored result, or null when there is none or it is malformed.
         *
         * @return array|null
         */
        public function get_result()
        {
        }
        /**
         * The stored result, only if it was made for the current store address.
         *
         * @return array|null
         */
        public function get_current_result()
        {
        }
        /**
         * Is a check due for the current store address?
         *
         * @return bool
         */
        public function is_check_due()
        {
        }
        /**
         * Schedule a background check when one is due.
         *
         * Runs on admin_init for store managers only, so front-end traffic never pays for it.
         */
        public function maybe_schedule_check()
        {
        }
        /**
         * Store the current address as verified without asking TaxJar.
         *
         * Used after the merchant applies TaxJar's own suggestion, which needs no second check.
         */
        public function mark_verified()
        {
        }
        /**
         * Does checking this address need a call to TaxJar?
         *
         * @param Address $address Address.
         * @return bool False for a non-US store or a US store without a valid ZIP: both are answered locally.
         */
        private function needs_request(\Automattic\WCServices\Tax\Address $address)
        {
        }
        /**
         * Check straight after the General settings are saved, with a short time limit.
         *
         * The merchant is waiting on the page, so a slow answer is left to the background
         * check instead: a failed request is stored as an error, which is retried later.
         */
        public function verify_after_settings_save()
        {
        }
        /**
         * Run the background check, unless it is no longer needed.
         *
         * An event can still be pending after the settings screen or the Apply button has
         * already stored a result for the current address. Checking again would send the
         * same address to TaxJar a second time.
         */
        public function run_scheduled_check()
        {
        }
        /**
         * Check the current store address and store the result.
         *
         * @param int $timeout Optional time limit in seconds for the request. 0 keeps the client's default.
         * @return array The stored result.
         */
        public function verify($timeout = 0)
        {
        }
        /**
         * Mark the current result as dismissed, so its notice stays hidden until the address changes.
         */
        public function dismiss()
        {
        }
        /**
         * Turn a TaxJar response into a result status and, when useful, a suggested address.
         *
         * Only the state and the 5-digit ZIP decide the outcome: they are what TaxJar uses to
         * place the store. A different street, city spelling or ZIP+4 does not change the tax,
         * so it does not earn a notice.
         *
         * @param Address         $address  Address that was checked.
         * @param array|\WP_Error $response Response from WC_Connect_API_Client::proxy_request().
         * @return array{status: string, suggestion: array|null}
         */
        public static function classify_response(\Automattic\WCServices\Tax\Address $address, $response)
        {
        }
        /**
         * Does a TaxJar candidate place the store in the same state and 5-digit ZIP?
         *
         * @param Address $address   Address that was checked.
         * @param array   $candidate One entry of the response's `addresses`.
         * @return bool
         */
        private static function places_same(\Automattic\WCServices\Tax\Address $address, array $candidate)
        {
        }
        /**
         * A candidate's ZIP, as returned.
         *
         * @param array $candidate One entry of the response's `addresses`.
         * @return string
         */
        private static function candidate_zip(array $candidate)
        {
        }
        /**
         * A candidate's state code, uppercased.
         *
         * @param array $candidate One entry of the response's `addresses`.
         * @return string
         */
        private static function candidate_state(array $candidate)
        {
        }
        /**
         * The first five digits of a US ZIP code.
         *
         * @param string $zip ZIP or ZIP+4.
         * @return string
         */
        private static function zip5($zip)
        {
        }
        /**
         * Send the address to TaxJar.
         *
         * @param Address $address Address to check.
         * @param int     $timeout Time limit in seconds; 0 keeps the client's default.
         * @return array|\WP_Error
         */
        private function request_validation(\Automattic\WCServices\Tax\Address $address, $timeout)
        {
        }
        /**
         * Short description of a failed response for the log.
         *
         * @param array|\WP_Error $response Response.
         * @return string
         */
        private static function describe_response($response)
        {
        }
        /**
         * Store a result.
         *
         * @param array $result Result.
         * @return array The same result.
         */
        private function save_result(array $result)
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
         * Nonce action prefix guarding the "dismiss this notice" links on server-supplied notices.
         *
         * The notice id is appended, so a nonce only dismisses the notice it was issued for.
         *
         * @var string
         */
        const DISMISS_SERVER_NOTICE_NONCE_ACTION = 'wc_connect_dismiss_server_notice';
        /**
         * Query argument carrying the server-notice dismissal nonce.
         *
         * A dedicated name (rather than `_wpnonce`) so the dismiss link cannot overwrite a
         * nonce the surrounding admin screen already put on the current URL.
         *
         * @var string
         */
        const DISMISS_SERVER_NOTICE_NONCE_NAME = '_wc_connect_notice_nonce';
        /**
         * Most bytes of a request body log_rest_api_errors() writes to the log.
         *
         * @var int
         */
        private const REST_ERROR_LOG_BODY_LIMIT = 1024;
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
         * Extend the Store API when it is available.
         *
         * Registered on `woocommerce_blocks_loaded` - the same hook the block
         * integration uses - because the Store API only exists once Blocks load and
         * our extension only surfaces notices in the block cart/checkout. On a
         * WooCommerce too old to ship Blocks the hook never fires, so nothing runs.
         *
         * The `class_exists()` guard covers the in-between case: WooCommerce versions
         * that ship Blocks (firing this hook) but predate the top-level
         * `Automattic\WooCommerce\StoreApi\StoreApi` class this plugin depends on.
         * Without the guard those versions would still fatal with `Class not found`.
         */
        public function extend_store_api()
        {
        }
        /**
         * Whether the WooCommerce Store API is available on this installation.
         *
         * @return bool
         */
        protected function is_store_api_available()
        {
        }
        /**
         * Log, at most once per day, that the Store API is unavailable.
         *
         * `extend_store_api()` runs on `woocommerce_blocks_loaded`, which fires on
         * nearly every request. On installs missing the StoreApi class the notice
         * would otherwise be written on every page load, so it is throttled to once
         * per day via a transient.
         */
        protected function log_store_api_unavailable()
        {
        }
        /**
         * Register the plugin's Store API extensions.
         */
        protected function register_store_api_extensions()
        {
        }
        /**
         * Resolve the plugin's ExtendSchema wrapper.
         *
         * Extracted as a seam so tests can substitute an unavailable schema
         * (returning null) without exercising the WooCommerce container.
         *
         * @return \Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema|null
         */
        protected function get_store_api_extend_schema(): ?\Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema
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
         * Whether WooCommerce core supplies the /wc/v3/data/continents controller.
         *
         * Answered with class_exists(), which resolves through WooCommerce's autoloader — its
         * wc_rest_ branch searches includes/rest-api/Controllers/Version{1,2,3}/ — so the answer
         * does not depend on what the current request has loaded so far. Core has shipped this
         * controller since WC 3.5.
         *
         * Kept as its own method so the fallback branch of wc_api_dev_init() is reachable from a
         * test: on any supported WooCommerce the class does exist, and class_exists() cannot be
         * made to answer otherwise within a process.
         *
         * @return bool
         */
        protected function core_provides_continents_controller()
        {
        }
        /**
         * Log any WP_Errors encountered before our REST API callbacks
         *
         * Note: intended to be hooked into 'rest_request_before_callbacks'
         *
         * WordPress applies that filter before the route's permission check, and skips the
         * check when the request already failed (invalid JSON, missing or invalid params).
         * So only requests the route itself allows are logged. The error line is always
         * written; the request body only when debug logging is on, shortened and escaped.
         * The admin error notice is not touched.
         *
         * @param WP_REST_Response|WP_HTTP_Response|WP_Error|mixed $response Result to send to the client. Usually a WP_REST_Response.
         * @param array                                            $handler  Route handler used for the request.
         * @param WP_REST_Request                                  $request  Request used to generate the response.
         *
         * @return mixed - pass through value of $response.
         */
        public function log_rest_api_errors($response, $handler, $request)
        {
        }
        /**
         * Whether the route's own permission check allows a request.
         *
         * WordPress skips its own check for a request that failed validation. It still
         * calls the callback afterwards to build the Allow header, which does not decide
         * access. A missing or non-callable check counts as denied.
         *
         * @param array|mixed     $handler Route handler used for the request.
         * @param WP_REST_Request $request Request used to generate the response.
         *
         * @return bool
         */
        private function rest_route_allows_request($handler, $request)
        {
        }
        /**
         * JSON-encode request text for the log.
         *
         * ASCII line breaks and control characters are escaped, so the text cannot add lines
         * of its own to the log. Invalid UTF-8 is replaced rather than dropping the text.
         *
         * @param string $text Text taken from the request.
         *
         * @return string The quoted, escaped text.
         */
        private function encode_for_log($text)
        {
        }
        /**
         * Describe a request body for the log: its length and an encoded excerpt.
         *
         * @param string $body Raw request body.
         *
         * @return string
         */
        private function format_rest_body_for_log($body)
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