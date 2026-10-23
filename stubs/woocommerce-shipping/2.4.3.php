<?php
/**
 * Generated stub declarations for woocommerce-shipping 2.4.3.
 * @see https://github.com/woocommerce/php-stubs
 */

namespace Automattic\WCShipping\Connect {
    class WC_Connect_Account_Settings
    {
        protected \Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store $settings_store;
        protected \Automattic\WCShipping\Connect\WC_Connect_Payment_Methods_Store $payment_methods_store;
        public function __construct(\Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store $settings_store, \Automattic\WCShipping\Connect\WC_Connect_Payment_Methods_Store $payment_methods_store)
        {
        }
        public function get($isWCShipping = false)
        {
        }
    }
    abstract class WC_Connect_API_Client
    {
        const API_VERSION = '5';
        const SIFT_CONFIG_TRANSIENT_KEY = 'wcshipping_sift_config';
        /**
         * @var WC_Connect_Service_Schemas_Validator
         */
        protected $validator;
        /**
         * @var \Automattic\WCShipping\Loader
         */
        protected $loader;
        public function __construct(\Automattic\WCShipping\Connect\WC_Connect_Service_Schemas_Validator $validator, \Automattic\WCShipping\Loader $loader)
        {
        }
        /**
         * Requests the available services for this site from the WooCommerce Shipping Server
         *
         * @return array|\WP_Error
         */
        public function get_service_schemas()
        {
        }
        /**
         * Validates the settings for a given service with the WooCommerce Shipping Server
         *
         * @param $service_slug
         * @param $service_settings
         *
         * @return bool|\WP_Error
         */
        public function validate_service_settings($service_slug, $service_settings)
        {
        }
        /**
         * Build the server's expected contents array, for rates requests.
         *
         * @param      $package    Package provided to WC_Shipping_Method::calculate_shipping()
         *
         * @return array|\WP_Error {
         * @type float $height     Product height.
         * @type float $width      Product width.
         * @type float $length     Product length.
         * @type int   $product_id Product ID (or Variation ID).
         * @type int   $quantity   Quantity of product in shipment.
         * @type float $weight     Product weight.
         *                         }
         */
        public function build_shipment_contents($package)
        {
        }
        /**
         * Gets shipping rates (for checkout) from the WooCommerce Shipping Server
         *
         * @param $services         All settings for all services we want rates for
         * @param $package          Package provided to WC_Shipping_Method::calculate_shipping()
         * @param $custom_boxes     array of custom boxes definitions (objects)
         * @param $predefined_boxes array of enabled predefined box IDs (strings)
         *
         * @return object|\WP_Error
         */
        public function get_shipping_rates($services, $package, $custom_boxes, $predefined_boxes)
        {
        }
        /**
         * Send rates request information to track subscription events
         *
         * @param array $services Array of service settings for shipping methods.
         *
         * @return object|\WP_Error
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
         * Create a USPS ScanForm from label IDs.
         *
         * @param array $body Request body containing label_ids.
         * @return object|\WP_Error Response from server with ScanForm data.
         */
        public function send_scan_form($body)
        {
        }
        /**
         * Review label IDs before creating a ScanForm.
         *
         * @param array $body Request body containing label_ids.
         * @return object|\WP_Error Response with eligible, already_scanned, not_found, and invalid_site arrays.
         */
        public function review_scan_form($body)
        {
        }
        /**
         * Asks the WooCommerce Shipping server for an array of payment methods
         *
         * @return mixed|\WP_Error
         */
        public function get_payment_methods()
        {
        }
        /**
         * Make ToS Acceptance request to the WooCommerce Shipping Server.
         *
         * @param array $body Request body.
         * @return mixed|\WP_Error Response from the server.
         */
        public function send_tos_acceptance_for_origin_address($body)
        {
        }
        /**
         * Send FedEx TOS acceptance to the WooCommerce Shipping Server.
         *
         * @param array $body Request body.
         * @return mixed|\WP_Error Response from the server.
         */
        public function send_fedex_tos_acceptance($body)
        {
        }
        /**
         * Retrieve Sift configurations.
         *
         * @return object|\WP_Error
         */
        public function get_sift_configuration()
        {
        }
        /**
         * Gets shipping rates (for labels) from the WooCommerce Shipping Server
         *
         * @param array $request - array(
         *                       'packages' => array(
         *                       array(
         *                       'id' => 'box_1',
         *                       'height' => 10,
         *                       'length' => 10,
         *                       'width' => 10,
         *                       'weight' => 10,
         *                       ),
         *                       array(
         *                       'id' => 'box_2',
         *                       'box_id' => 'medium_flat_box_top',
         *                       'weight' => 5,
         *                       ),
         *                       ...
         *                       ),
         *                       'carrier' => 'usps',
         *                       'origin' => array(
         *                       'address' => '132 Hawthorne St',
         *                       'address_2' => '',
         *                       'city' => 'San Francisco',
         *                       'state' => 'CA',
         *                       'postcode' => '94107',
         *                       'country' => 'US',
         *                       ),
         *                       'destination' => array(
         *                       'address' => '1550 Snow Creek Dr',
         *                       'address_2' => '',
         *                       'city' => 'Park City',
         *                       'state' => 'UT',
         *                       'postcode' => '84060',
         *                       'country' => 'US',
         *                       ),
         *                       )
         *
         * @return object|\WP_Error
         */
        public function get_label_rates($request)
        {
        }
        /**
         * Gets a PDF with the set of dummy labels specified in the request
         *
         * @param $request
         *
         * @return object|\WP_Error
         */
        public function get_labels_preview_pdf($request)
        {
        }
        /**
         * Gets a PDF with the requested shipping labels in it
         *
         * @param $request
         *
         * @return object|\WP_Error
         */
        public function get_labels_print_pdf($request)
        {
        }
        /**
         * Gets a PDF of the packing slip
         *
         * @param $request
         *
         * @return object|\WP_Error
         */
        public function get_packing_slip_pdf($request)
        {
        }
        /**
         * Gets the shipping label status (refund status, tracking code, etc)
         *
         * @param $label_id integer
         *
         * @return object|\WP_Error
         */
        public function get_label_status($label_id)
        {
        }
        /**
         * Gets the shipping label status (refund status, tracking code, etc)
         *
         * @param $order_id integer
         *
         * @return object|\WP_Error
         */
        public function anonymize_order($order_id)
        {
        }
        /**
         * Request a refund for a given shipping label
         *
         * @param $label_id integer
         *
         * @return object|\WP_Error
         */
        public function send_shipping_label_refund_request($label_id)
        {
        }
        /**
         * Gets the configured carrier accounts
         *
         * @param $request
         *
         * @return object|\WP_Error
         */
        public function get_carrier_accounts()
        {
        }
        /**
         * Disconnects the provided carrier account
         *
         * @param $carrier_id
         *
         * @return object|\WP_Error
         */
        public function disconnect_carrier_account($carrier_id)
        {
        }
        /**
         * Register a new carrier account
         *
         * @param $body
         *
         * @return object|\WP_Error
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
         * @return object|\WP_Error
         */
        public function get_carrier_types()
        {
        }
        /**
         * Tests the connection to the WooCommerce Shipping Server
         *
         * @return true|\WP_Error
         */
        public function auth_test()
        {
        }
        /** Heartbeat test.
         *
         * @return true|\WP_Error
         */
        public function is_alive()
        {
        }
        /** Heartbeat test with a transient cache.
         *
         * @return true|\WP_Error
         */
        public function is_alive_cached()
        {
        }
        /**
         * Activate a subscrption with WCCOM API.
         *
         * @param string $subscription_key Product Key on WCCOM.
         *
         * @return \WP_Error|Array  API Response.
         */
        public function activate_subscription($subscription_key)
        {
        }
        /**
         * Sends a request to the WooCommerce Shipping Server
         *
         * @param $method
         * @param $path
         * @param $body
         *
         * @return mixed|\WP_Error
         */
        abstract protected function request($method, $path, $body = array());
        /**
         * Proxy an HTTP request through the WCS Server
         *
         * @param $path Path of proxy route
         * @param $args WP_Http request args
         *
         * @return array|\WP_Error
         */
        public function proxy_request($path, $args)
        {
        }
        /**
         * Adds useful WP/WC/WCC information to request bodies
         *
         * @param array $initial_body
         *
         * @return array
         */
        protected function request_body($initial_body = array())
        {
        }
        /**
         * Generates headers for our request to the WooCommerce Shipping Server
         *
         * @return array|\WP_Error
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
         *
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
    class WC_Connect_API_Client_Live extends \Automattic\WCShipping\Connect\WC_Connect_API_Client
    {
        protected function request($method, $path, $body = array())
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
        private static $version = WC_VERSION;
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
    class WC_Connect_Compatibility_WC30 extends \Automattic\WCShipping\Connect\WC_Connect_Compatibility
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
         * @param \WC_Order|WP_Post $post_or_order_object Post or order object.
         *
         * @return bool|\WC_Order|WC_Order_Refund
         */
        public function init_theorder_object($post_or_order_object)
        {
        }
    }
    /**
     * WC_Connect_Compatibility class.
     */
    class WC_Connect_Compatibility_WC69 extends \Automattic\WCShipping\Connect\WC_Connect_Compatibility
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
    class WC_Connect_Continents
    {
        /**
         * Return the list of countries and states for a given continent.
         *
         * @since  3.1.0
         * @param  string $continent_code
         * @return array|mixed Response data, ready for insertion into collection data.
         */
        public function get_continent($continent_code = false)
        {
        }
        public function get()
        {
        }
    }
    class WC_Connect_Debug_Tools
    {
        protected \Automattic\WCShipping\Connect\WC_Connect_API_Client $api_client;
        function __construct(\Automattic\WCShipping\Connect\WC_Connect_API_Client $api_client)
        {
        }
        function woocommerce_debug_tools($tools)
        {
        }
        function test_connection()
        {
        }
    }
    class WC_Connect_Error_Notice
    {
        private static $inst = null;
        public static function instance()
        {
        }
        public function enable_notice($error = true)
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
        public static function on_new_tracking_number($order_id, $carrier_id, $tracking_number, $service = '')
        {
        }
        /**
         * Checks if WooCommerce Shipping should email the tracking details, or if another extension is taking care of that already
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
         * Checks if the potentially expensive Shipping API requests should be sent
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
         * @return array|\WP_Error
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
         * @array
         */
        protected $fieldsets;
        public function __construct(\Automattic\WCShipping\Connect\WC_Connect_Service_Schemas_Store $service_schemas_store, \Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store $service_settings_store, \Automattic\WCShipping\Connect\WC_Connect_Logger $logger)
        {
        }
        protected function get_health_items()
        {
        }
        protected function get_services_items()
        {
        }
        /**
         * Gets the last 10 lines from the WooCommerce Shipping log by feature, if it exists
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
    }
    class WC_Connect_Jetpack
    {
        const JETPACK_PLUGIN_SLUG = 'woocommerce-shipping';
        public static function get_connection_manager()
        {
        }
        /**
         * Returns a Jetpack Status instance.
         *
         * Has methods to retrieve information about the current status of Jetpack and the site overall.
         *
         * @return \Automattic\Jetpack\Status The Jetpack status instance.
         */
        public static function get_status()
        {
        }
        /**
         * Returns the Blog Token.
         *
         * Blog Tokens: These are the "main" tokens.
         * Each site typically has one Blog Token, though some sites can have multiple "Special" Blog Tokens.
         * These tokens are not associated with a user account. They represent the site's connection with the Jetpack servers.
         *
         * @return \stdClass|\WP_Error
         */
        public static function get_blog_access_token()
        {
        }
        /**
         * Is Jetpack in offline mode?
         *
         * This was formerly called "Development Mode", but sites "in development" aren't always offline/localhost.
         *
         * @return bool
         */
        public static function is_offline_mode()
        {
        }
        /**
         * Helper method to get if Jetpack is connected (aka active).
         *
         * @return bool
         */
        public static function is_active()
        {
        }
        /**
         * Helper method to get if the current Jetpack website is marked as a staging/development site.
         *
         * @return bool
         */
        public static function is_development_site()
        {
        }
        /**
         * Helper method to get if the current Jetpack website is in safe mode.
         *
         * Safe mode is enabled by Jetpack if we identify an identify crisis with the site ID.
         *
         * @return bool
         */
        public static function is_safe_mode()
        {
        }
        /**
         * Determine if the site is hosted on the Atomic hosting platform.
         *
         * @return bool
         */
        public static function is_atomic_site()
        {
        }
        /**
         * Get the wpcom user data of the current|specified connected user.
         *
         * @return bool|array An array with the WPCOM user data on success, false otherwise.
         */
        public static function get_connection_owner_wpcom_data()
        {
        }
        /**
         * Get the wpcom user data of the current|specified connected user.
         *
         * @return array|bool
         */
        public static function get_connected_user_data($user_id)
        {
        }
        /**
         * Helper method to get the Jetpack connection owner user object, IF we are connected.
         *
         * @return \WP_User|false
         */
        public static function get_connection_owner()
        {
        }
        public static function is_current_user_connection_owner()
        {
        }
        /**
         * Determines if the current user is connected to Jetpack
         *
         * @return bool Whether or nor the current user is connected to Jetpack
         */
        public static function is_current_user_connected()
        {
        }
        /**
         * Determines if both the blog and user are connected to Jetpack.
         *
         * Returns true if the site has a token, a blog id, and a connected Blog owner.
         *
         * @return bool Whether or nor Jetpack is connected
         */
        public static function is_connected()
        {
        }
        /**
         * Connects the site to Jetpack.
         *
         * This code performs a redirection, so anything executed after it will be ignored.
         *
         * @param string $redirect_url The return URL after a connection has been authorized on WPCOM.
         * @param string $source The location the connection was initiated from.
         * @param bool   $redirect Determines if we should redirect immediately or return the redirect URL.
         * @return void|string|\WP_Error
         */
        public static function connect_site($redirect_url, $source, $redirect = true)
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
         * @return int|\WP_Error
         */
        public static function get_wpcom_site_id()
        {
        }
    }
    class WC_Connect_Logger
    {
        /**
         * @var \WC_Logger
         */
        private $logger;
        private $is_logging_enabled = false;
        private $is_debug_enabled = false;
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
         * @param string $message Message to log.
         * @param string $context Optional context (e.g. __CLASS__ or __METHOD__).
         * @param bool   $force   Optional force log even if logging is disabled. Defaults to false.
         */
        public function log($message, $context = '', $force = false)
        {
        }
    }
    class WC_Connect_Nux
    {
        /**
         * Jetpack status constants.
         */
        const JETPACK_NOT_CONNECTED = 'not-connected';
        const JETPACK_DEV = 'dev';
        const JETPACK_CONNECTED = 'connected';
        /**
         * Option name for dismissing success banner
         * after the JP connection flow
         */
        const SHOULD_SHOW_AFTER_CXN_BANNER = 'should_display_nux_after_jp_cxn_banner';
        const TOS_ACCEPTED = 'tos_accepted';
        /**
         * The GET parameter used to recognize returns after successful connection authorization.
         */
        const AUTH_SUCCESS_SOURCE_RETURN_PARAM = 'wcshipping-auth-successful';
        /**
         * The name of the nonce GET parameter after successful connection authorization.
         */
        const AUTH_SUCCESS_NONCE_RETURN_PARAM = '_wcshipping-auth-successful-nonce';
        /**
         * The name of the nonce action used to recognize successful connection authorization.
         */
        const AUTH_SUCCESS_NONCE_ACTION = 'wcshipping_auth_successful';
        /**
         * @var \Automattic\WCShipping\LabelPurchase\ViewService
         */
        private $view_service;
        /**
         * WC_Connect_Nux constructor.
         *
         * @param \Automattic\WCShipping\LabelPurchase\ViewService $view_service
         *
         * @return void
         */
        function __construct(\Automattic\WCShipping\LabelPurchase\ViewService $view_service)
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
        /**
         * Check that the current user is the owner of the Jetpack connection
         * - Only that person can accept the TOS
         *
         * @return bool
         * @uses self::get_jetpack_install_status()
         */
        public function can_accept_tos()
        {
        }
        public static function get_banner_type_to_display($status = array())
        {
        }
        public function get_jetpack_install_status()
        {
        }
        /**
         * Whether the WooCommerce Shipping connection banner should render on the given screen.
         *
         * The banner is confined to the surfaces where WooCommerce Shipping can actually be used or
         * activated: WooCommerce > Settings > Shipping, the order detail page (classic posts and
         * HPOS), and the Plugins page. Anywhere else - including the other WooCommerce settings
         * tabs, such as Payments and its onboarding flow - it is unrelated noise.
         *
         * @param \WP_Screen $screen The screen to check.
         * @return bool
         */
        public function should_display_nux_notice_on_screen($screen)
        {
        }
        /**
         * Check if the current page is the WC Shipping settings page.
         *
         * @param \WP_Screen|null $current_screen The object that represents the current page.
         * @return bool
         */
        public function is_wcshipping_settings_page(?\WP_Screen $current_screen)
        {
        }
        public function get_feature_list_for_country($country)
        {
        }
        public function get_jetpack_redirect_url()
        {
        }
        public static function is_tos_accepted()
        {
        }
        /**
         * Register Terms of Service acceptance.
         *
         * @param string $source Where the acceptance originates from.
         * @return void
         */
        public static function accept_tos($source = '')
        {
        }
        public function set_up_nux_notices()
        {
        }
        /**
         * Register callback listeners.
         *
         * @return void
         */
        private function register_callback_listeners()
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
        public function show_nux_banner($content)
        {
        }
        /**
         * Get Jetpack connection URL.
         */
        public function register_wcshipping_jetpack()
        {
        }
        /**
         * Load scripts and styles.
         *
         * @return void
         */
        public function load_scripts_and_styles()
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
        private static $grouped_options = array('compact' => 'wcshipping_options');
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
         * Deletes all options created by WooCommerce Shipping, including shipping method options
         */
        public static function delete_all_options()
        {
        }
        /**
         * Returns the requested option.  Looks in wcshipping_options or wcshipping_$name as appropriate.
         *
         * @param string $name Option name
         * @param mixed  $default (optional)
         *
         * @return mixed
         */
        public static function get_option($name, $default = false)
        {
        }
        /**
         * Updates the single given option.  Updates wcshipping_options or wcshipping_$name as appropriate.
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
         * Updates wcshipping_options and/or deletes wcshipping_$name as appropriate.
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
        public static function get_shipping_method_option($name, $default, $service_id, $service_instance = false)
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
        public static function update_shipping_method_option($name, $value, $service_id, $service_instance = false)
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
        public static function delete_shipping_method_option($name, $service_id, $service_instance = false)
        {
        }
        /**
         * Deletes all options related to a shipping method
         *
         * @param $service_id
         * @param $service_instance
         */
        public static function delete_shipping_method_options($service_id, $service_instance = false)
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
        private static function get_shipping_method_option_name($name, $service_id, $service_instance = false)
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
         * @param \WC_Order $order
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
        public function __construct(\Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store $settings_store, \Automattic\WCShipping\Connect\WC_Connect_Service_Schemas_Store $service_schemas_store)
        {
        }
        /**
         * Get store options, package schemas, saved custom packages, and starred predefined packages.
         *
         * @param array|null $features_supported_by_client Features supported by the client.
         *
         * @return array Package settings.
         */
        public function get(?array $features_supported_by_client)
        {
        }
        /**
         * Filters out UPS DAP and FedEx predefined packages schema if it is not supported by the client.
         * This is only necessary to ensure the filtered out packages are not shown in the UI even if they exist in the local cache.
         *
         * @param array|null $features_supported_by_client Features supported by the client.
         *
         * @return array|null Predefined packages schema.
         */
        private function get_predefined_packages_schema(?array $features_supported_by_client)
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
        public function __construct(\Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store $service_settings_store, \Automattic\WCShipping\Connect\WC_Connect_API_Client $api_client, \Automattic\WCShipping\Connect\WC_Connect_Logger $logger)
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
         * @return bool|\WP_Error Whether the response body is valid.
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
         * @return string|\WP_Error The URL to add a payment method.
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
        public function __construct(\Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store $settings_store, \Automattic\WCShipping\Connect\WC_Connect_API_Client $api_client)
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
        public function __construct(\Automattic\WCShipping\Connect\WC_Connect_API_Client $api_client, \Automattic\WCShipping\Connect\WC_Connect_Logger $logger)
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
        /**
         * @return array|null
         */
        public function get_predefined_packages_schema()
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
         * @return \WP_Error|true
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
         * @return \WP_Error|true
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
         * @return \WP_Error|true
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
         * @return \WP_Error|true
         */
        protected function validate_service_settings_required_properties($service_id, $service_settings_properties)
        {
        }
    }
    class WC_Connect_Service_Settings_Store
    {
        /**
         * Destination address normalization key.
         *
         * @var string
         */
        const IS_DESTINATION_NORMALIZED_KEY = '_wcshipping_destination_normalized';
        /**
         * Origin address normalization key.
         *
         * @var string
         */
        const IS_ORIGIN_NORMALIZED_KEY = 'origin_normalized';
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
        private \Automattic\WCShipping\Packages\PackageRepository $package_repository;
        /**
         * @var \Automattic\WCShipping\Fulfillments\ShippingFulfillmentsDataStore
         */
        private $shipping_fulfillments_data_store;
        public function __construct(\Automattic\WCShipping\Connect\WC_Connect_Service_Schemas_Store $service_schemas_store, \Automattic\WCShipping\Connect\WC_Connect_API_Client $api_client, \Automattic\WCShipping\Connect\WC_Connect_Logger $logger, \Automattic\WCShipping\Fulfillments\ShippingFulfillmentsDataStore $shipping_fulfillments_data_store)
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
         * Return all shipping tax identifiers for the store.
         *
         * @return array
         */
        public function get_tax_identifiers()
        {
        }
        /**
         * Sets a tax identifier for the store.
         *
         * @param string $tax_id_type The type of tax identifier, e.g. 'ioss'.
         * @param string $tax_id The tax identifier number / ID.
         *
         * @return bool true if the tax identifier was successfully set.
         */
        public function set_tax_identifier($tax_id_type, $tax_id)
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
         * @param bool $use_legacy_key should the legacy key be used to retrieve the order labels, this is most useful for
         * migration purposes.
         *
         * @return array
         */
        public function get_label_order_meta_data($order_id, $use_legacy_key = false)
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
        public function is_origin_address_normalized()
        {
        }
        public function set_is_origin_address_normalized($value)
        {
        }
        protected function sort_services($a, $b)
        {
        }
        /**
         * Returns the service type and id for each enabled WooCommerce Shipping service
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
         * Given a service's id and optional instance, returns the settings for that
         * service or an empty array
         *
         * @param string  $service_id
         * @param integer $service_instance
         *
         * @return object|array
         */
        public function get_service_settings($service_id, $service_instance = false)
        {
        }
        /**
         * Given id and possibly instance, validates the settings and, if they validate, saves them to options
         *
         * @return bool|\WP_Error
         */
        public function validate_and_possibly_update_settings($settings, $id, $instance = false)
        {
        }
        /**
         * Return all saved packages templates.
         *
         * @since 1.1.2 - Add a unique ID to the package if it doesn't already have one.
         * @since 1.0.0
         *
         * @return array[] Array of packages-as-arrays.
         */
        public function get_packages(): array
        {
        }
        /**
         * Extends the global list of packages with a list of new packages.
         *
         * @since 1.1.2 - Add a unique ID to the package if it doesn't already have one.
         * @since 1.0.0
         *
         * @param array $new_packages Packages to extend.
         *
         * @return void
         * @throws \Automattic\WCShipping\Packages\PackageValidationException If at least one of the provided packages doesn't pass validation.
         */
        public function create_packages($new_packages)
        {
        }
        /**
         * Updates the global list of packages.
         *
         * @since 1.1.2 - Add a unique ID to the package if it doesn't already have one.
         * @since 1.0.0
         *
         * @param array $packages The packages we wish to update.
         *
         * @return void
         * @throws \Automattic\WCShipping\Packages\PackageValidationException If at least one of the provided packages doesn't pass validation.
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
         * @var WC_Connect_API_Client
         */
        protected $api_client;
        /**
         * @var WC_Connect_Account_Settings
         */
        protected $account_settings;
        /**
         * @var \Automattic\WCShipping\OriginAddresses\OriginAddressService
         */
        protected $origin_address_service;
        protected string $id;
        protected string $label;
        public function __construct(\Automattic\WCShipping\Connect\WC_Connect_API_Client $api_client, \Automattic\WCShipping\Connect\WC_Connect_Service_Schemas_Store $service_schemas_store, \Automattic\WCShipping\OriginAddresses\OriginAddressService $origin_address_service, \Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store $settings_store, \Automattic\WCShipping\Connect\WC_Connect_Payment_Methods_Store $payment_methods_store)
        {
        }
        /**
         * Register WooCommerce settings section
         *
         * This class is meant to handle the settings page after a successful connection exists,
         * but we also want to be able to use it to prompt merchants to e.g. connect their site
         * to WPCOM or flag issues preventing them from using WC Shipping.
         * So this method exists to be able to trigger a consistent
         *
         * @return void
         */
        public static function register_wc_section()
        {
        }
        /**
         * Get sections.
         *
         * @return array
         */
        public static function get_sections($shipping_tabs)
        {
        }
        /**
         * Output the settings.
         */
        public static function output_settings_screen()
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
        private $show_metabox = null;
        public function __construct(\Automattic\WCShipping\Connect\WC_Connect_API_Client $api_client, \Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store $settings_store, \Automattic\WCShipping\Connect\WC_Connect_Service_Schemas_Store $service_schemas_store, \Automattic\WCShipping\Connect\WC_Connect_Payment_Methods_Store $payment_methods_store)
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
         * @param \WC_Order $order The order to check for shipping label creation eligibility.
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
         * @param \WC_Order $order      WC Order.
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
         * @param \WC_Order $order WC Order.
         *
         * @return float The product (or variation) price, or NULL if it wasn't found
         */
        public static function get_product_price_from_order($product_id, $order)
        {
        }
        /**
         * Retrieve the corresponding Product for the given Order Item.
         *
         * @param \WC_Order                                   $order WC Order.
         * @param \WC_Order_Item|\WC_Order_Item_Product|array $item  Order Item.
         *
         * @return \WC_Product|null|false
         */
        public static function get_item_product(\WC_Order $order, $item)
        {
        }
        /**
         * Check if order contains given product.
         *
         * @param int      $product_id WC Product ID.
         * @param \WC_Order $order      WC Order.
         *
         * @return WC_Order_Item_Product|false
         */
        public static function get_line_item_from_order($product_id, $order)
        {
        }
    }
}
namespace Automattic\WCShipping\LegacyAPIControllers {
    abstract class WC_REST_Connect_Base_Controller extends \WP_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v1';
        /**
         * @var \Automattic\WCShipping\Connect\WC_Connect_API_Client
         */
        protected $api_client;
        /**
         * @var \Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store
         */
        protected $settings_store;
        /**
         * @var \Automattic\WCShipping\Connect\WC_Connect_Logger
         */
        protected $logger;
        public function __construct(\Automattic\WCShipping\Connect\WC_Connect_API_Client $api_client, \Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store $settings_store, \Automattic\WCShipping\Connect\WC_Connect_Logger $logger)
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
    class WC_REST_Connect_Account_Settings_Controller extends \Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Base_Controller
    {
        protected $rest_base = 'connect/account/settings';
        /*
         * @var WC_Connect_Payment_Methods_Store
         */
        protected $payment_methods_store;
        /**
         * @var \Automattic\WCShipping\Connect\WC_Connect_Account_Settings
         */
        protected $account_settings;
        public function __construct(\Automattic\WCShipping\Connect\WC_Connect_API_Client $api_client, \Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store $settings_store, \Automattic\WCShipping\Connect\WC_Connect_Logger $logger, \Automattic\WCShipping\Connect\WC_Connect_Payment_Methods_Store $payment_methods_store)
        {
        }
        public function get()
        {
        }
        public function post($request)
        {
        }
    }
    class WC_REST_Connect_Address_Normalization_Controller extends \Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Base_Controller
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
    /**
     * @deprecated since 1.1.0, see src/Integrations/AssetsRESTController.php
     */
    class WC_REST_Connect_Assets_Controller extends \Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Base_Controller
    {
        protected $rest_base = 'connect/assets';
        public function get()
        {
        }
    }
    class WC_REST_Connect_Packages_Controller extends \Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Base_Controller
    {
        protected $rest_base = 'connect/packages';
        /**
         * @var \Automattic\WCShipping\Connect\WC_Connect_Package_Settings
         */
        protected $package_settings;
        public function __construct(\Automattic\WCShipping\Connect\WC_Connect_API_Client $api_client, \Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store $settings_store, \Automattic\WCShipping\Connect\WC_Connect_Logger $logger, \Automattic\WCShipping\Connect\WC_Connect_Service_Schemas_Store $service_schemas_store)
        {
        }
        /**
         * @throws \Automattic\WCShipping\Packages\PackageValidationException Doesn't really throw this because we set `throw_on_failure = false`.
         */
        public function get(\WP_REST_Request $request)
        {
        }
        /**
         * Update the existing custom and predefined packages.
         *
         * @param \WP_REST_Request $request The request body contains the custom/predefined packages to replace.
         *
         * @return \WP_REST_Response
         * @throws \Automattic\WCShipping\Packages\PackageValidationException
         */
        public function put($request)
        {
        }
        /**
         * Create custom and/or predefined packages.
         *
         * @param \WP_REST_Request $request The request body contains the custom/predefined packages to create.
         *
         * @return WP_Error|\WP_REST_Response
         * @throws \Automattic\WCShipping\Packages\PackageValidationException
         */
        public function post($request)
        {
        }
    }
    class WC_REST_Connect_Self_Help_Controller extends \Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Base_Controller
    {
        protected $rest_base = 'connect/self-help';
        public function post($request)
        {
        }
    }
    class WC_REST_Connect_Service_Data_Refresh_Controller extends \Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Base_Controller
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
    class WC_REST_Connect_Services_Controller extends \Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Base_Controller
    {
        protected $rest_base = 'connect/services/(?P<id>[a-z_]+)\/(?P<instance>[\d]+)';
        /**
         * @var \Automattic\WCShipping\Connect\WC_Connect_Service_Schemas_Store
         */
        protected $service_schemas_store;
        public function __construct(\Automattic\WCShipping\Connect\WC_Connect_API_Client $api_client, \Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store $settings_store, \Automattic\WCShipping\Connect\WC_Connect_Logger $logger, \Automattic\WCShipping\Connect\WC_Connect_Service_Schemas_Store $schemas_store)
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
    class WC_REST_Connect_Shipping_Carrier_Controller extends \Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Base_Controller
    {
        protected $rest_base = 'connect/shipping/carrier';
        public function post($request)
        {
        }
    }
    class WC_REST_Connect_Shipping_Carrier_Delete_Controller extends \Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Base_Controller
    {
        protected $rest_base = 'connect/shipping/carrier/(?P<carrier_id>.+)';
        public function delete($request)
        {
        }
    }
    /**
     * Retrieve a list of carrier WooCommerce Shipping supports, along with the
     * fields needed for each carrier in order to do carrier account registration.
     */
    class WC_REST_Connect_Shipping_Carrier_Types_Controller extends \Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Base_Controller
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
         * @return \WP_REST_Response|WP_Error
         */
        public function get()
        {
        }
    }
    class WC_REST_Connect_Shipping_Carriers_Controller extends \Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Base_Controller
    {
        protected $rest_base = 'connect/shipping/carriers';
        public function get()
        {
        }
    }
    class WC_REST_Connect_Shipping_Label_Controller extends \Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Base_Controller
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
        public function __construct(\Automattic\WCShipping\Connect\WC_Connect_API_Client $api_client, \Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store $settings_store, \Automattic\WCShipping\Connect\WC_Connect_Logger $logger, \Automattic\WCShipping\Connect\WC_Connect_Shipping_Label $shipping_label, \Automattic\WCShipping\Connect\WC_Connect_Payment_Methods_Store $payment_methods_store)
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
         * @return \WP_REST_Response
         */
        public function get_creation_eligibility($request)
        {
        }
    }
    class WC_REST_Connect_Shipping_Label_Preview_Controller extends \Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Base_Controller
    {
        protected $rest_base = 'connect/label/preview';
        public function get($request)
        {
        }
    }
    class WC_REST_Connect_Shipping_Label_Print_Controller extends \Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Base_Controller
    {
        protected $rest_base = 'connect/label/print';
        public function get($request)
        {
        }
    }
    class WC_REST_Connect_Shipping_Label_Refund_Controller extends \Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Base_Controller
    {
        protected $rest_base = 'connect/label/(?P<order_id>\d+)/(?P<label_id>\d+)/refund';
        public function post($request)
        {
        }
    }
    class WC_REST_Connect_Shipping_Label_Status_Controller extends \Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Base_Controller
    {
        protected $rest_base = 'connect/label/(?P<order_id>\d+)/(?P<label_ids>(\d+)(,\d+)*)';
        public function get($request)
        {
        }
    }
    class WC_REST_Connect_Shipping_Rates_Controller extends \Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Base_Controller
    {
        protected $rest_base = 'connect/label/(?P<order_id>\d+)/rates';
        /**
         * Prefix to add in package name for making requests with multiple rates.
         */
        public $SPECIAL_RATE_PREFIX = '_wcshipping_rate_type_';
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
         * @return array|\WP_Error
         */
        public function post($request)
        {
        }
        /**
         * Get standard rates along with rates for special options
         * that are defined in $this->extra_rates
         *
         * @param \stdClass $payload Request payload.
         * @return WPError|\stdClass
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
         * @param \stdClass $rates                  Rate response for server.
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
         * @param \stdClass $payload Request payload.
         * @return WPError|\stdClass
         */
        public function request_rates($payload)
        {
        }
    }
    class WC_REST_Connect_Subscription_Activate_Controller extends \Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Base_Controller
    {
        protected $rest_base = 'connect/subscription/(?P<subscription_key>.+)/activate';
        public function post($request)
        {
        }
    }
    class WC_REST_Connect_Subscriptions_Controller extends \Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Base_Controller
    {
        protected $rest_base = 'connect/subscriptions';
        public function post()
        {
        }
    }
    class WC_REST_Connect_Tos_Controller extends \Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Base_Controller
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
}
namespace Automattic\WCShipping\Connect {
    class WC_Connect_API_Client_Local_Test_Mock extends \Automattic\WCShipping\Connect\WC_Connect_API_Client
    {
        /**
         * Gets mock endpoint data from json file.
         *
         * json data structure must map connect server endpoints to
         * mock data that will be returned when WCS makes a request.
         *
         * @return object
         */
        private function get_mock_endpoints()
        {
        }
        /**
         * Gets mock endpoint data from json file as an associative array.
         *
         * json data structure must map connect server endpoints to
         * mock data that will be returned when WCS makes a request.
         *
         * @return object
         */
        private function get_mock_endpoints_associative()
        {
        }
        /**
         * Returns mock data for what would otherwise come from WC connect server
         *
         * @param $method
         * @param $path
         * @param $body
         * @return mixed|WP_Error
         */
        protected function request($method, $path, $body = array())
        {
        }
    }
}
namespace Automattic\WCShipping {
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
         * @return \WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check whether a given request has permission to read site settings.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return \WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Return the list of data resources.
         *
         * @since  3.1.0
         * @param  WP_REST_Request $request
         * @return \WP_Error|WP_REST_Response
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
    class WC_REST_Dev_Data_Continents_Controller extends \Automattic\WCShipping\WC_REST_Dev_Data_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = 'wc/v3';
        /**
         * @var \Automattic\WCShipping\Connect\WC_Connect_Continents
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
         * @return \WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Return the list of locations for a given continent.
         *
         * @since  3.1.0
         * @param  WP_REST_Request $request
         * @return \WP_Error|WP_REST_Response
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
namespace Automattic\WCShipping\Abilities {
    /**
     * Hooks WooCommerce Shipping ability definitions into Woo's abilities loader.
     */
    class Abilities
    {
        /**
         * Initialize ability registration hooks when Woo's loader contract exists.
         *
         * @return void
         */
        public static function init(): void
        {
        }
        /**
         * Add WooCommerce Shipping ability definitions to Woo's loader.
         *
         * @param array $classes Ability definition class names.
         * @return array
         */
        public static function register_definitions(array $classes): array
        {
        }
    }
    /**
     * Read-only ability for querying purchased WooCommerce Shipping labels.
     */
    class ShippingLabelsReport implements \Automattic\WooCommerce\Abilities\AbilityDefinition
    {
        public const ABILITY_ID = 'woocommerce-shipping/get-shipping-labels-report';
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
         * Execute the ability.
         *
         * @param array $input Ability input.
         * @return array|\WP_Error
         */
        public static function execute(array $input)
        {
        }
        /**
         * Check whether the current user can read WooCommerce Shipping labels.
         *
         * @param mixed $input Ability input.
         * @return bool
         */
        public static function can_read_labels_report($input = array()): bool
        {
        }
        /**
         * Get the input schema.
         *
         * @return array
         */
        private static function get_input_schema(): array
        {
        }
        /**
         * Get the output schema.
         *
         * @return array
         */
        private static function get_output_schema(): array
        {
        }
        /**
         * Validate semantic date range constraints not covered by JSON schema.
         *
         * @param array $input Ability input.
         * @return true|\WP_Error
         */
        private static function validate_date_range(array $input)
        {
        }
        /**
         * Format a label row for the ability output contract.
         *
         * @param array $label Raw label row from LabelsService.
         * @return array
         */
        private static function format_label(array $label): array
        {
        }
        /**
         * Normalize refund statuses to the ability's stable enum values.
         *
         * @param mixed $status Refund status from LabelsService.
         * @return string
         */
        private static function normalize_refund_status($status): string
        {
        }
    }
}
namespace Automattic\WCShipping\Analytics {
    class LabelsService
    {
        const LABELS_TRANSIENT_KEY = 'wcshipping_labels_report';
        const LABELS_TRANSIENT_EXPIRATION_IN_SECONDS = MINUTE_IN_SECONDS * 30;
        /**
         * Page size used when a report caller does not supply one.
         */
        const DEFAULT_PER_PAGE = 20;
        /**
         * Fields returned for each label when a report caller does not supply a list.
         */
        const DEFAULT_FIELDS = array('created_date', 'order_id', 'rate', 'service_name', 'refund');
        /**
         * Fetch labels from the database
         *
         * @return array
         */
        public function fetch_labels_from_database(): array
        {
        }
        /**
         * Get all labels
         *
         * @return array|null
         */
        public function get_all_labels(): ?array
        {
        }
        /**
         * Get labels for a given period
         *
         * @param array $query
         * @param array $fields
         *
         * $query:
         * array(
         *     'before'   => string, // ISO date string
         *     'after'    => string, // ISO date string
         *     'offset'   => int,    // Offset for pagination
         *     'per_page' => int,    // Number of items per page
         * )
         *
         * $fields:
         * array(
         *     'before', // string | ISO date string
         *     'after',  // string | ISO date string
         *     'offset', // int | Offset for pagination
         *     'per_page', // int Number of items per page, if none-positive number, all items are returned
         * )
         *
         * @return array {
         *     'rows' => array, // Array of labels with selected fields
         *     'meta' => array {
         *         'pages'         => int,   // Total number of pages
         *         'total_count'   => int,   // Total number of labels
         *         'total_cost'    => float, // Sum of all label rates
         *         'total_refunds' => float, // Sum of all label refunds
         *     }
         * }
         */
        public function get_labels_for_period(array $query, array $fields): array
        {
        }
        /**
         * Get the refund status of a label
         *
         * @param array $label
         * @return string Possible return values are '', 'Rejected', 'Complete', or 'Requested'
         */
        public function get_label_refund_status(array $label): string
        {
        }
    }
    class ShippingLabel
    {
        const ANALYTICS_PATH = '/analytics/shipping';
        /**
         * Initialize the shipping label analytics
         */
        public function init()
        {
        }
        /**
         * Add the shipping label analytics menu item
         *
         * @param array $report_pages Report page menu items.
         * @return array
         */
        public function add_menu_item($report_pages)
        {
        }
        public function enqueue_scripts($current_screen)
        {
        }
    }
}
namespace Automattic\WCShipping {
    /**
     * WCShippingRESTController class.
     */
    abstract class WCShippingRESTController extends \WC_REST_Controller
    {
        /**
         * WooCommerce Shipping namespace.
         *
         * @var string
         */
        protected $namespace = 'wcshipping/v1';
        /**
         * Receives array of required parameter keys,
         * returns array of request parameters.
         *
         * @param \WP_REST_Request $request    Incoming WP REST request.
         * @param array           $param_keys Array of required body parameters. Optional parameters are marked with prefix '?'.
         *
         * @throws \Automattic\WCShipping\Exceptions\RESTRequestException If parameter is missing.
         * @return array Array of parsed body parameters.
         */
        protected function get_and_check_body_params($request, $param_keys)
        {
        }
        /**
         * Receives array of required parameter keys,
         * returns array of request parameters.
         *
         * @param \WP_REST_Request $request    Incoming WP REST request.
         * @param array           $param_keys Array of required request parameters. Optional parameters are marked with prefix '?'.
         *
         * @throws \Automattic\WCShipping\Exceptions\RESTRequestException If parameter is missing.
         * @return array Array of parsed request parameters.
         */
        protected function get_and_check_request_params($request, $param_keys)
        {
        }
        /**
         * Find the first duplicated positive `order_id` in a batch payload.
         *
         * Malformed items are ignored here so endpoint-specific shape validation can report them using
         * the response contract for that batch route.
         *
         * @param array $items Batch items that may contain `order_id`.
         * @return int|null Duplicated positive order ID, or null when the batch has no duplicates.
         */
        protected function get_duplicate_positive_order_id(array $items): ?int
        {
        }
        /**
         * Get the route for the controller.
         *
         * @return string
         */
        public function get_rest_base()
        {
        }
        /**
         * @param \WP_REST_Request $request
         *
         * @return bool
         */
        public function ensure_rest_permission($request)
        {
        }
        /**
         * Attach a hook to prevent API from being cached.
         */
        public static function prevent_route_caching()
        {
        }
        /**
         * Send nocache_headers when any of the namespace endpoints are being accessed.
         *
         * This method is used as a callback for the 'rest_post_dispatch' filter.
         * It checks if the requested route falls under our namespace and, if so,
         * sends no-cache headers to prevent caching of the API response.
         *
         * @param mixed           $result  The result that will be sent to the client.
         * @param WP_REST_Server  $server  The REST server instance.
         * @param \WP_REST_Request $request The request used to generate the response.
         *
         * @return mixed The unmodified $result.
         */
        public static function exclude_namespace_from_cache($result, $server, $request)
        {
        }
    }
}
namespace Automattic\WCShipping\Analytics {
    class ShippingLabelRESTController extends \Automattic\WCShipping\WCShippingRESTController
    {
        protected $rest_base = 'reports/labels';
        /**
         * @var \Automattic\WCShipping\Analytics\LabelsService
         */
        protected $labels_service;
        public function __construct(\Automattic\WCShipping\Analytics\LabelsService $labels_service)
        {
        }
        public function register_routes()
        {
        }
        public function get(\WP_REST_Request $request)
        {
        }
    }
}
namespace Automattic\WCShipping {
    /**
     * Autoloader class.
     *
     * @since 1.0.5
     */
    class Autoloader
    {
        /**
         * Static-only class.
         */
        private function __construct()
        {
        }
        /**
         * Require the autoloader and return the result.
         *
         * If the autoloader is not present, let's log the failure and display a nice admin notice.
         *
         * @return boolean
         */
        public static function init()
        {
        }
    }
}
namespace Automattic\WCShipping\Banners {
    class Banners
    {
        /**
         * @var \Automattic\WCShipping\Connect\WC_Connect_Service_Schemas_Store
         */
        protected $service_schemas_store;
        /**
         * @var \Automattic\WCShipping\Connect\WC_Connect_Logger
         */
        protected $logger;
        /**
         * User meta key for storing IDs of the dismissed feature banners
         */
        const DISMISSED_BANNERS_META_KEY = 'wcshipping_feature_banner_notices';
        public function __construct(\Automattic\WCShipping\Connect\WC_Connect_Service_Schemas_Store $service_schemas_store, \Automattic\WCShipping\Connect\WC_Connect_Logger $logger)
        {
        }
        /**
         * Initialize feature banners
         */
        public function init()
        {
        }
        /**
         * Check if feature banners should be displayed on the current screen
         * More flexible than NUX targeting - can be extended for feature banner needs
         *
         * @return bool
         */
        protected function should_show_feature_banners()
        {
        }
        /**
         * Determine if feature banners should be shown on a specific screen
         * Can be extended to include additional screens beyond NUX targeting
         *
         * @param \WP_Screen $screen The current screen object
         * @return bool
         */
        protected function should_display_feature_banner_on_screen($screen)
        {
        }
        /**
         * Check if a screen matches a target configuration
         *
         * @param \WP_Screen $screen The screen to check
         * @param array      $target Target configuration
         * @return bool
         */
        protected function screen_matches_target($screen, $target)
        {
        }
        /**
         * Get stored features/banners
         *
         * @return object|null The features object or null if not set
         */
        protected function get_features()
        {
        }
        /**
         * Get all active (non-dismissed) feature banners for current user
         *
         * @return array
         */
        public function get_active_banners()
        {
        }
        /**
         * Get IDs of the banners that the user has already dismissed
         *
         * @return array
         */
        protected function get_dismissed_banners()
        {
        }
        /**
         * Check if a specific banner is dismissed
         *
         * @param string $banner_id
         * @return bool
         */
        public function is_banner_dismissed($banner_id)
        {
        }
        /**
         * Once the user clicks the dismiss button, this function stores the ID
         * to the user meta so it is not shown again
         *
         * @param string $banner_id
         * @return bool
         */
        public function on_banner_dismissed($banner_id)
        {
        }
        /**
         * AJAX handler for dismissing feature banners
         * called by the rendered banner
         */
        public function dismiss_feature_banner()
        {
        }
        /**
         * Verify the nonce for banner dismissal
         * Separated into its own method for testability
         *
         * @return bool
         */
        protected function verify_dismiss_nonce()
        {
        }
        /**
         * AJAX handler for tracking feature banner button clicks
         * called by the rendered CTAs in the banner
         */
        public function track_feature_banner_click()
        {
        }
        /**
         * Get non dismissed banners and enqueue the assets
         */
        public function render_feature_banners()
        {
        }
        /**
         * Render a single feature banner
         *
         * @param string $banner_id
         * @param object $banner_data
         */
        protected function render_banner($banner_id, $banner_data)
        {
        }
        /**
         * Enqueue CSS and JavaScript for feature banners
         */
        protected function enqueue_banner_assets()
        {
        }
    }
    /**
     * Renders the bulk-labels selection banner on the order-list page.
     */
    class BulkLabelsBanner
    {
        const BULK_ACTION_CREATE_SHIPPING_LABELS = 'wcshipping_create_shipping_labels';
        /**
         * Service settings store used to read the saved paper-size preference.
         *
         * @var \Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store
         */
        private $settings_store;
        /**
         * Constructor.
         *
         * @param \Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store $settings_store Used to read the merchant's saved paper-size preference.
         */
        public function __construct(\Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store $settings_store)
        {
        }
        /**
         * Enqueue the bulk labels banner script on order list pages.
         */
        public function enqueue_scripts()
        {
        }
        /**
         * Add the bulk labels action to the order list bulk actions menu.
         *
         * @param array $actions Bulk actions keyed by action ID.
         * @return array
         */
        public function register_bulk_action(array $actions): array
        {
        }
        /**
         * Whether the banner should render on the current screen.
         *
         * @return bool
         */
        private function should_render(): bool
        {
        }
        /**
         * Insert a bulk action after an existing action.
         *
         * @param array  $actions Bulk actions keyed by action ID.
         * @param string $after_action Action ID to insert after.
         * @param array  $new_action Action to insert.
         * @return array
         */
        private function insert_action_after(array $actions, string $after_action, array $new_action): array
        {
        }
    }
}
namespace Automattic\WCShipping\Bulk {
    /**
     * Subclass of WC_Connect_API_Client_Live that adds parallel-dispatch helpers for batch flows.
     *
     * Lives in src/ (per project conventions) but extends the legacy classes/ Live client so the
     * Jetpack auth machinery (request_body, request_headers, HMAC signing) can be reused via
     * protected inheritance instead of being re-implemented.
     */
    class BatchableApiClient extends \Automattic\WCShipping\Connect\WC_Connect_API_Client_Live
    {
        /**
         * Concurrency cap for the parallel batch dispatch.
         *
         * Tuned to stay within EasyPost's per-second rate limits and to avoid stampeding upstream
         * carriers with one site's traffic. Conservative for v1; lift after we measure.
         */
        private const MULTI_CONCURRENCY = 5;
        /**
         * Per-request HTTP timeout, in seconds. Matches the single-order request() default.
         */
        private const REQUEST_TIMEOUT = 60;
        /**
         * Customs data a shipment route requires, as decided by Connect Server.
         *
         * @param array $body `origin`, `destination` and `is_return`.
         * @return object|\WP_Error
         */
        public function get_customs_requirements(array $body)
        {
        }
        /**
         * Get label rates for many orders in one parallel dispatch.
         *
         * @param array $payloads Numerically-indexed list of rate-quote payloads, in the same shape
         *                        each element passed to get_label_rates() expects.
         *
         * @return array Array of decoded responses (object) or WP_Error, aligned with input indices.
         */
        public function get_label_rates_batch(array $payloads)
        {
        }
        /**
         * Purchase labels for many shipments in one parallel dispatch.
         *
         * Note: each payload becomes its own per-order BillingDaddy purchase, which means the
         * merchant sees N Stripe charges. Prefer `send_grouped_label_batch_request()` for the
         * "one batch = one charge" flow; this method is retained for the rate-quote sibling
         * (`get_label_rates_batch`) and for any future parallel-dispatch label paths.
         *
         * @param array $payloads Numerically-indexed list of shipping-label purchase payloads, in the
         *                        same shape each element passed to send_shipping_label_request() expects.
         *
         * @return array Array of decoded responses (object) or WP_Error, aligned with input indices.
         */
        public function purchase_labels_batch(array $payloads)
        {
        }
        /**
         * Send a single grouped batch label-purchase request to the Connect Server. The
         * server flattens packages across all shipments into one BillingDaddy purchase, so
         * the merchant sees one Stripe charge with N line items rather than N per-label
         * charges. This is the "one batch = one charge" path consumed by the bulk label flow.
         *
         * Body shape sent on the wire:
         *   `{ async, email_receipt, payment_method_id, shipments: [{ order_id, origin,
         *      destination, packages, shipment_options, is_return }] }`
         * Only one HTTP call is made — no parallel dispatch, no per-order fan-out.
         *
         * @param array $body Multi-shipment payload. Must contain a non-empty `shipments`
         *                    array and a non-empty `payment_method_id`.
         *
         * @return object|\WP_Error Decoded per-order response map or a transport-level error.
         */
        public function send_grouped_label_batch_request(array $body)
        {
        }
        /**
         * Generic POST batch dispatcher.
         *
         * Builds one HTTP request per payload and fires them all via the Requests library bundled
         * with WordPress, capped at MULTI_CONCURRENCY in flight. Each response is decoded with the
         * same JSON + error mapping as the single-order request() in the parent class.
         *
         * @param string $path     Relative Connect Server path (no leading slash, e.g. "shipping/label").
         * @param array  $payloads Numerically-indexed list of body payloads.
         *
         * @return array Array of decoded responses (object) or WP_Error, aligned with input indices.
         */
        private function dispatch_post_batch(string $path, array $payloads)
        {
        }
        /**
         * Parse a single Requests-library response into the same shape request() returns.
         *
         * Mirrors the JSON-decode + error-mapping branches of the parent's request() method.
         * Lifted here so the parallel path produces results indistinguishable from the sequential
         * one.
         *
         * @param mixed $response Either a Requests response object, an exception, or null.
         *
         * @return object|\WP_Error
         */
        private function parse_multi_response($response)
        {
        }
        /**
         * Build the per-request Requests-library options array, honoring `wcshipping_request_args`.
         *
         * The single-order path runs `wp_remote_request()` with an args array that integrations can
         * tweak via `wcshipping_request_args`. The batch path uses `Requests::request_multiple()`,
         * which takes a different shape, so we pass the same args through the filter and then map
         * the keys that survive (timeout today; extend as integration needs surface).
         *
         * @return array Options array suitable for a single Requests-library request.
         */
        private function resolve_batch_request_options(): array
        {
        }
    }
}
namespace Automattic\WCShipping\Utilities {
    /**
     * Base model class providing common functionality for data objects
     * Uses get_object_vars() for flexible serialization across different types
     */
    abstract class BaseModel
    {
        /**
         * Convert the model to an array using get_object_vars()
         *
         * This approach automatically includes all public properties
         * and handles nested models recursively.
         *
         * @param string|null $key Optional property key to serialize only that property
         * @return mixed The model data as an associative array, or specific property value
         */
        public function to_array(?string $key = null)
        {
        }
        /**
         * Recursively serialize a value for array conversion
         *
         * @param mixed $value The value to serialize
         * @return mixed The serialized value
         */
        private function serialize_value($value)
        {
        }
        /**
         * Convert to JSON string
         *
         * @return string JSON representation of the model
         */
        public function to_json(): string
        {
        }
    }
}
namespace Automattic\WCShipping\Bulk\Models {
    /**
     * Value object describing one entry in the bulk-label print queue.
     *
     * Persistence lives in {@see PrintQueueRepository}; this class only models the data shape.
     */
    class PrintQueueItem extends \Automattic\WCShipping\Utilities\BaseModel
    {
        /**
         * WooCommerce order ID this queue entry belongs to.
         *
         * @var int
         */
        public int $order_id;
        /**
         * Identifier of the batch the order failed in.
         *
         * @var string
         */
        public string $batch_id;
        /**
         * Human-readable reason for the failure.
         *
         * @var string
         */
        public string $error_reason;
        /**
         * Structured error code from the originating WP_Error, when available.
         *
         * @var string|null
         */
        public ?string $error_code;
        /**
         * Number of retry attempts that have run for this queued order.
         *
         * @var int
         */
        public int $retry_count;
        /**
         * Unix timestamp at which the order was first queued.
         *
         * @var int
         */
        public int $added_at;
        /**
         * Unix timestamp of the most recent mutation.
         *
         * @var int
         */
        public int $updated_at;
        /**
         * Constructor.
         *
         * @param int         $order_id     Order ID.
         * @param string      $batch_id     Source batch ID.
         * @param string      $error_reason Human-readable failure reason.
         * @param string|null $error_code   Structured error code, when available.
         * @param int         $retry_count  Retry counter (>= 0).
         * @param int         $added_at     Initial-add timestamp.
         * @param int         $updated_at   Last-update timestamp.
         */
        public function __construct(int $order_id, string $batch_id, string $error_reason, ?string $error_code, int $retry_count, int $added_at, int $updated_at)
        {
        }
        /**
         * Build an item from a {@see WC_Order} by reading its print-queue meta.
         *
         * Returns null when the order is not currently in the queue.
         *
         * @param \WC_Order $order Order to hydrate from.
         * @return self|null
         */
        public static function from_order(\WC_Order $order): ?self
        {
        }
    }
}
namespace Automattic\WCShipping\Bulk {
    /**
     * CRUD helpers for the bulk-label print queue.
     *
     * A valid queue entry requires BOTH meta entries to be present and well-formed:
     *   - {@see self::META_BATCH_ID}: a non-empty string holding the source batch ID.
     *   - {@see self::META_ITEM}: an array carrying `error_reason`, `added_at`, `updated_at`
     *     (plus optional `error_code` / `retry_count`).
     *
     * `get()` and `list()` hide entries that are missing or malformed on either side,
     * so an orphaned `META_BATCH_ID` (or a corrupted `META_ITEM`) is treated as
     * "not in the queue". `remove()` is best-effort and clears both meta keys when
     * either is present, so stale half-state still gets cleaned up.
     *
     * Both keys are written through HPOS-compatible WC_Order APIs.
     */
    class PrintQueueRepository
    {
        /**
         * Meta key holding the source batch ID. Required half of a valid queue entry;
         * its presence alone (without a valid {@see self::META_ITEM}) is treated as
         * orphaned / corrupt state.
         */
        public const META_BATCH_ID = '_wcshipping_print_queue_batch_id';
        /**
         * Meta key holding the rest of the queue-item state (array).
         */
        public const META_ITEM = '_wcshipping_print_queue_item';
        /**
         * Add an order to the print queue, or overwrite its entry if already present.
         *
         * Idempotent on order ID: re-adding resets retry_count to 0 and updates updated_at,
         * while added_at is preserved from the original add. This matches the "merchant
         * kicked off a fresh batch and it failed again" flow.
         *
         * @param int         $order_id     WooCommerce order ID.
         * @param string      $batch_id     Source batch ID. Must be non-empty; an empty value is
         *                                  treated as "not queued" by {@see PrintQueueItem::from_order()}
         *                                  and would leave orphaned meta.
         * @param string      $error_reason Human-readable failure reason.
         * @param string|null $error_code   Structured error code (e.g. WP_Error code).
         * @return \Automattic\WCShipping\Bulk\Models\PrintQueueItem|null Null when the order does not exist or $batch_id is empty.
         */
        public function add(int $order_id, string $batch_id, string $error_reason, ?string $error_code = null): ?\Automattic\WCShipping\Bulk\Models\PrintQueueItem
        {
        }
        /**
         * Remove an order from the print queue.
         *
         * @param int $order_id WooCommerce order ID.
         * @return bool True if anything was removed; false if the order was not queued or does not exist.
         */
        public function remove(int $order_id): bool
        {
        }
        /**
         * Fetch the queue entry for a single order.
         *
         * @param int $order_id WooCommerce order ID.
         * @return \Automattic\WCShipping\Bulk\Models\PrintQueueItem|null
         */
        public function get(int $order_id): ?\Automattic\WCShipping\Bulk\Models\PrintQueueItem
        {
        }
        /**
         * List queue entries, optionally restricted to a single batch.
         *
         * @param string|null $batch_id Source batch ID, or null for the full queue.
         * @return \Automattic\WCShipping\Bulk\Models\PrintQueueItem[]
         */
        public function list(?string $batch_id = null): array
        {
        }
        /**
         * Bump the retry counter for an existing queue entry.
         *
         * This is a read-modify-write update for a single order's queue meta. Per-order
         * meta avoids one shared queue value across different orders, but concurrent
         * mutations for the same order can still overwrite each other.
         *
         * @param int $order_id WooCommerce order ID.
         * @return \Automattic\WCShipping\Bulk\Models\PrintQueueItem|null Null when the order is not queued or does not exist.
         */
        public function increment_retry(int $order_id): ?\Automattic\WCShipping\Bulk\Models\PrintQueueItem
        {
        }
        /**
         * Replace the error reason/code on an existing queue entry without touching retry_count.
         *
         * @param int         $order_id     WooCommerce order ID.
         * @param string      $error_reason New human-readable reason.
         * @param string|null $error_code   New structured code.
         * @return \Automattic\WCShipping\Bulk\Models\PrintQueueItem|null Null when the order is not queued or does not exist.
         */
        public function update_error(int $order_id, string $error_reason, ?string $error_code = null): ?\Automattic\WCShipping\Bulk\Models\PrintQueueItem
        {
        }
    }
}
namespace Automattic\WCShipping\Carrier\FedEx {
    /**
     * REST controller for FedEx carrier strategy operations.
     */
    class FedExCarrierStrategyRESTController extends \Automattic\WCShipping\WCShippingRESTController
    {
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'carrier-strategy/fedex';
        /**
         * FedEx carrier strategy service.
         *
         * @var FedExCarrierStrategyService
         */
        private $fedex_carrier_service;
        /**
         * Constructor.
         *
         * @param FedExCarrierStrategyService $fedex_carrier_service FedEx carrier strategy service.
         */
        public function __construct(\Automattic\WCShipping\Carrier\FedEx\FedExCarrierStrategyService $fedex_carrier_service)
        {
        }
        /**
         * Register routes.
         */
        public function register_routes()
        {
        }
        /**
         * Error codes that indicate client validation errors (HTTP 400).
         */
        private const CLIENT_ERROR_CODES = array('invalid_user_email');
        /**
         * Handle TOS acceptance update.
         *
         * @param \WP_REST_Request $request Full details about the request.
         * @return \WP_REST_Response
         */
        public function update($request)
        {
        }
    }
    /**
     * Handles FedEx Terms of Service acceptance via the Connect Server.
     */
    class FedExCarrierStrategyService
    {
        /**
         * API client.
         *
         * @var \Automattic\WCShipping\Connect\WC_Connect_API_Client
         */
        private $api_client;
        /**
         * Constructor.
         *
         * @param \Automattic\WCShipping\Connect\WC_Connect_API_Client $api_client API client instance.
         */
        public function __construct(\Automattic\WCShipping\Connect\WC_Connect_API_Client $api_client)
        {
        }
        /**
         * Sends FedEx TOS acceptance to the Connect Server.
         *
         * @return array|\WP_Error Response array or error.
         */
        public function accept_tos()
        {
        }
    }
    /**
     * FedEx TOS error interceptor.
     */
    class FedExTosErrorInterceptor
    {
        private const FEDEX_TOS_CODE = 'missing_fedex_terms_of_service_acceptance';
        private const UPSDAP_TOS_CODE = 'missing_upsdap_terms_of_service_acceptance';
        /**
         * Register the HTTP response filter.
         */
        public static function init()
        {
        }
        /**
         * If the Connect Server responds with the FedEx TOS error, rewrite the
         * response body `code` to `missing_upsdap_terms_of_service_acceptance` so
         * the API client's existing TOS passthrough preserves it as a typed WP_Error.
         * The real code is stored in `data.carrier_tos_code` for the frontend.
         *
         * @param array  $response    HTTP response.
         * @param array  $parsed_args Request arguments.
         * @param string $url         Request URL.
         * @return array Modified response.
         */
        public static function intercept_fedex_tos_error($response, $parsed_args, $url)
        {
        }
    }
}
namespace Automattic\WCShipping\Carrier\UPSDAP {
    class UPSDAPCarrierStrategyRESTController extends \Automattic\WCShipping\WCShippingRESTController
    {
        protected $rest_base = 'carrier-strategy/upsdap';
        public function __construct(\Automattic\WCShipping\Carrier\UPSDAP\UPSDAPCarrierStrategyService $upsdap_carrier_service)
        {
        }
        public function register_routes()
        {
        }
        /**
         * Error codes raised locally that indicate client validation errors (HTTP 400).
         *
         * Errors relayed from the Connect Server carry their own status instead;
         * see `get_error_status_code()`.
         */
        private const CLIENT_ERROR_CODES = array('invalid_user_email');
        /**
         * Resolve the HTTP status to answer a failed strategy update with.
         *
         * The route's historical contract is narrow: `invalid_user_email` is a 400
         * and every other failure a 500. Widening that is a change to a published
         * error contract (`docs/api/README.md`), and clients that branch on the
         * status band rather than the body `code` would see it - a relayed 401/403
         * in particular reads as session expiry to most mobile HTTP layers.
         *
         * So relay exactly one status: the 403 the Connect Server answers with for
         * `origin_address_limit_reached`, which is the merchant-actionable case
         * this fix is about (WOOSHIP-2373). Everything else - including
         * `MISSING_UPSDAP_TOS_ACCEPTANCE`, which is also on the passthrough list
         * and also carries an upstream `status` - keeps the previous mapping.
         *
         * @param \WP_Error $error Error returned by the strategy service.
         * @return int
         */
        private function get_error_status_code(\WP_Error $error): int
        {
        }
        public function update($request)
        {
        }
    }
    /**
     * Handles UPS DAP Terms of Service acceptance via the Connect Server.
     */
    class UPSDAPCarrierStrategyService
    {
        /**
         * API client.
         *
         * @var \Automattic\WCShipping\Connect\WC_Connect_API_Client
         */
        private $api_client;
        /**
         * Constructor.
         *
         * @param \Automattic\WCShipping\Connect\WC_Connect_API_Client $api_client API client instance.
         */
        public function __construct(\Automattic\WCShipping\Connect\WC_Connect_API_Client $api_client)
        {
        }
        /**
         * Sends TOS acceptance for the given origin address to the Connect Server.
         *
         * @param array $origin  Origin address data.
         * @param array $options Additional options for the update.
         * @return mixed|\WP_Error A success indicator.
         */
        public function update_strategies($origin, $options = array())
        {
        }
    }
}
namespace Automattic\WCShipping\Checkout {
    /**
     * Class CheckoutController
     */
    class CheckoutController
    {
        /**
         * Checkout service.
         *
         * @var CheckoutService
         */
        private \Automattic\WCShipping\Checkout\CheckoutService $checkout_service;
        /**
         * Notifier instance.
         *
         * @var CheckoutNotifier
         */
        private \Automattic\WCShipping\Checkout\CheckoutNotifier $notifier;
        /**
         * The settings store.
         *
         * @var \Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store
         */
        private \Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store $settings_store;
        /**
         * Address normalization service.
         *
         * @var \Automattic\WCShipping\LabelPurchase\AddressNormalizationService
         */
        private \Automattic\WCShipping\LabelPurchase\AddressNormalizationService $address_normalization_service;
        /**
         * CheckoutController constructor.
         *
         * @param \Automattic\WCShipping\Connect\WC_Connect_Logger                 $wc_connect_logger The WC_Connect_Logger instance.
         * @param CheckoutService                   $checkout_service Checkout service.
         * @param \Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store $settings_store The settings store.
         * @param \Automattic\WCShipping\LabelPurchase\AddressNormalizationService       $address_normalization_service Address normalization service.
         */
        public function __construct(\Automattic\WCShipping\Connect\WC_Connect_Logger $wc_connect_logger, \Automattic\WCShipping\Checkout\CheckoutService $checkout_service, \Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store $settings_store, \Automattic\WCShipping\LabelPurchase\AddressNormalizationService $address_normalization_service)
        {
        }
        /**
         * Load assets.
         */
        public function load_assets()
        {
        }
        /**
         * Maybe display address validation notices.
         */
        public function maybe_display_address_validation_notices()
        {
        }
        /**
         * Print the classic checkout billing target for address validation notices.
         */
        public function print_billing_address_validation_notice_container()
        {
        }
        /**
         * Print the classic checkout shipping target for address validation notices.
         */
        public function print_shipping_address_validation_notice_container()
        {
        }
        /**
         * Print a classic checkout target for address validation notices.
         */
        public function print_address_validation_notice_container()
        {
        }
        /**
         * Print a classic checkout target for a given address type.
         *
         * @param string $address_type The checkout address section.
         */
        private function print_address_validation_notice_container_for_address_type(string $address_type)
        {
        }
        /**
         * Add address validation notices as a checkout fragment during update_order_review.
         *
         * WooCommerce core marks update_order_review as failed whenever the global
         * notice queue has any message. Returning WC Shipping's soft address
         * validation notices as a dedicated fragment keeps the classic checkout
         * response successful and avoids core's failure branch re-blurring fields.
         *
         * @param array $fragments Checkout fragments.
         *
         * @return array
         */
        public function add_address_validation_notice_fragment(array $fragments): array
        {
        }
        /**
         * Get the active classic checkout address section for address validation notices.
         *
         * @return string
         */
        private function get_classic_notice_address_type(): string
        {
        }
        /**
         * Maybe set destination normalized order meta.
         *
         * @param int|\WC_Order $order_id_or_object The order ID or WC_Order instance depending on the context.
         */
        public function maybe_set_destination_normalized_order_meta($order_id_or_object)
        {
        }
        /**
         * If the right conditions are met, add address validation notices for entered shipping address.
         *
         * @param array $packages Shipping packages.
         *
         * @return array
         */
        public function maybe_add_address_validation_notices(array $packages): array
        {
        }
        /**
         * Add address validation notices for entered shipping address.
         */
        private function add_address_validation_notices()
        {
        }
    }
    /**
     * Notifier class.
     */
    class CheckoutNotifier
    {
        /**
         * WC Session variable key
         *
         * @var string
         */
        const WC_SESSION_KEY = 'wcshipping_checkout_notices';
        /**
         * Valid notice types.
         *
         * @var array
         */
        private static array $valid_notice_types = array('error', 'success', 'notice');
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
         * Clear all notices.
         *
         * @param string $group Optional. Group of notices to clear.
         */
        public function clear_notices(string $group = ''): void
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
         * Get rendered notice HTML.
         *
         * @param string $group Optional. Group of notices to render.
         *
         * @return string
         */
        public function get_notices_html(string $group = ''): string
        {
        }
        /**
         * Sanitize notice HTML.
         *
         * @param string $message Notice HTML.
         *
         * @return string
         */
        private function sanitize_notice_html(string $message): string
        {
        }
        /**
         * Get the WooCommerce notice class for a notice type.
         *
         * @param string $type Notice type.
         *
         * @return string
         */
        private function get_notice_class(string $type): string
        {
        }
        /**
         * Maybe get formatted message.
         *
         * @param string $message Message to display.
         * @param string $data    Additional data to pass.
         * @param string $group   Optional. Group to categorize notices.
         *
         * @return string
         */
        public function maybe_get_formatted_message(string $message, string $data = '', string $group = ''): string
        {
        }
    }
    /**
     * Class CheckoutService
     */
    class CheckoutService
    {
        /**
         * The session variable key for destination address normalization status.
         *
         * @var string
         */
        const IS_DESTINATION_NORMALIZED_VAR = 'wcshipping_is_destination_normalized';
        /**
         * Key prefix for the cached address validation response.
         *
         * The cache holds rendered notice markup for 24 hours, so it can outlive an update and replay the
         * previous release's markup. Bump the suffix whenever that markup changes; old entries expire.
         *
         * @var string
         */
        private const ADDRESS_VALIDATION_CACHE_PREFIX = 'wcshipping_av_v2_';
        /**
         * The address normalization service.
         *
         * @var \Automattic\WCShipping\LabelPurchase\AddressNormalizationService
         */
        private \Automattic\WCShipping\LabelPurchase\AddressNormalizationService $address_normalization_service;
        /**
         * CheckoutService constructor.
         *
         * @param \Automattic\WCShipping\LabelPurchase\AddressNormalizationService $address_normalization_service The address normalization service.
         */
        public function __construct(\Automattic\WCShipping\LabelPurchase\AddressNormalizationService $address_normalization_service)
        {
        }
        /**
         * Get data to pass to checkout scripts.
         *
         * @return array
         */
        public static function get_checkout_script_data(): array
        {
        }
        /**
         * Get checkout settings.
         *
         * @return array
         */
        public static function get_checkout_settings(): array
        {
        }
        /**
         * Is address validation enabled?
         *
         * @return bool
         */
        public static function is_address_validation_enabled(): bool
        {
        }
        /**
         * Is this a checkout page?
         *
         * @return bool
         */
        public static function is_checkout_page(): bool
        {
        }
        /**
         * Is this a classic checkout request?
         *
         * @return bool
         */
        public static function is_classic_checkout(): bool
        {
        }
        /**
         * Is this a classic checkout update_order_review request?
         *
         * @return bool
         */
        public static function is_update_order_review_request(): bool
        {
        }
        /**
         * Validate the shipping address.
         *
         * @return array
         */
        public function validate_shipping_address(): array
        {
        }
        /**
         * Cache a response for a given hash.
         *
         * @param string $hash      The hash to cache the response under.
         * @param array  $response The response to cache.
         */
        private function cache_address_validation_response(string $hash, array $response)
        {
        }
        /**
         * Set the destination normalized session var.
         *
         * This is used to store the normalized address in the WC Session so that it can be used later.
         *
         * @param bool $value The value to set.
         */
        public function set_destination_normalized_session_var(bool $value)
        {
        }
        /**
         * Get the destination normalized session value.
         *
         * @return bool
         */
        public function get_destination_normalized_session_value(): bool
        {
        }
        /**
         * Get the cart shipping address.
         *
         * @return array
         */
        public function get_cart_shipping_address(): array
        {
        }
        /**
         * Maybe fill missing shipping address data.
         *
         * @param array $shipping_address The shipping address (passed by reference).
         */
        public static function maybe_fill_missing_shipping_address_data(array &$shipping_address)
        {
        }
        /**
         * Get the cart customer instance.
         *
         * @return false|\WC_Customer
         */
        public static function get_cart_customer_instance()
        {
        }
        /**
         * Get the cart instance.
         *
         * @return false|\WC_Cart
         */
        public static function get_cart_instance()
        {
        }
        /**
         * Get suggested address store notice.
         *
         * @param array $address The address.
         *
         * @return StoreNotice
         */
        public static function get_suggested_address_store_notice(array $address): \Automattic\WCShipping\Checkout\StoreNotice
        {
        }
    }
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
         * The notice type for an info.
         */
        const INFO = 'info';
        /**
         * The notice type for a warning.
         */
        const WARNING = 'warning';
    }
}
namespace Automattic\WCShipping\Connect {
    /**
     * Connect Server error codes the API clients must surface verbatim.
     *
     * By default a non-2xx response from the Connect Server is flattened into a
     * single `wcc_server_error_response` WP_Error, which throws away the server's
     * `code` and wraps its message in "Error: The WooCommerce Shipping server
     * returned: ...". That is fine for genuine server faults, but the Connect
     * Server also returns codes describing a client-side condition the merchant
     * (or support) can act on. Flattening those leaves the merchant staring at an
     * opaque 500 for a state they could otherwise resolve.
     *
     * Codes listed here keep their `code`, their untouched message, and their
     * upstream HTTP status, so callers can branch on them and show the merchant
     * what actually happened.
     */
    final class ConnectServerErrorCodes
    {
        /**
         * The merchant has not accepted the UPS DAP terms of service yet. Drives
         * the UPS terms modal in the label purchase flow.
         */
        public const MISSING_UPSDAP_TOS_ACCEPTANCE = 'missing_upsdap_terms_of_service_acceptance';
        /**
         * The site is at the per-site origin-address cap. Returned as a 403 and
         * not resolvable by the merchant: the message directs them to support.
         *
         * Only `POST /shipping/origin-addresses` can return it: the Connect Server
         * throws it from `enforceOriginAddressCapAsync()`, reached solely through
         * `getOrCreateOriginAddress()`, whose two call sites both sit inside
         * `saveOriginAddressHandler`. On this side that endpoint has one caller,
         * `send_tos_acceptance_for_origin_address()`, so the code surfaces only
         * through the UPS DAP carrier-strategy route. The unpaid-debt purchase
         * guard added by the same project uses a different code.
         */
        public const ORIGIN_ADDRESS_LIMIT_REACHED = 'origin_address_limit_reached';
        /**
         * Error codes that must reach the client with their code, message and
         * status intact instead of being collapsed into a generic server error.
         *
         * This list is consulted in the shared request path, so a code added here
         * changes the WP_Error for *every* Connect Server call that can return it -
         * including the HTTP status, since `data['status']` is what
         * `WP_REST_Server::error_to_response()` answers with. Before adding a code,
         * check which Connect Server endpoints can emit it and confirm the routes
         * relaying it are ones whose status may change.
         */
        public const PASSTHROUGH = array(self::MISSING_UPSDAP_TOS_ACCEPTANCE, self::ORIGIN_ADDRESS_LIMIT_REACHED);
        /**
         * Whether a Connect Server error code should be surfaced verbatim.
         *
         * Accepts anything the response body carried, since the value comes off a
         * decoded JSON payload and is not guaranteed to be a string.
         *
         * @param mixed $code Error code from the Connect Server response body.
         * @return bool
         */
        public static function should_pass_through($code): bool
        {
        }
        /**
         * The codes the client needs to branch on, keyed by name.
         *
         * Handed to the front end through `WCShipping_Config` so the codes are
         * declared once, here, rather than duplicated as string literals in JS
         * where they can drift from this list without anything noticing.
         *
         * @return array<string, string>
         */
        public static function get_codes_for_js(): array
        {
        }
    }
}
namespace Automattic\WCShipping\Customs {
    /**
     * Tells clients which customs data a shipment route requires.
     */
    class CustomsRequirementsRESTController extends \Automattic\WCShipping\WCShippingRESTController
    {
        /**
         * Route
         *
         * @var string
         */
        protected $rest_base = 'label/customs-requirements';
        /**
         * Connect Server API client.
         *
         * @var \Automattic\WCShipping\Connect\WC_Connect_API_Client
         */
        private $api_client;
        /**
         * Origin address service.
         *
         * @var \Automattic\WCShipping\OriginAddresses\OriginAddressService
         */
        private $origin_address_service;
        /**
         * Logger.
         *
         * @var \Automattic\WCShipping\Connect\WC_Connect_Logger
         */
        private $logger;
        /**
         * Class constructor.
         *
         * @param \Automattic\WCShipping\Connect\WC_Connect_API_Client $api_client             Connect Server API client.
         * @param \Automattic\WCShipping\OriginAddresses\OriginAddressService  $origin_address_service Origin address service.
         * @param \Automattic\WCShipping\Connect\WC_Connect_Logger     $logger                 Logger.
         */
        public function __construct(\Automattic\WCShipping\Connect\WC_Connect_API_Client $api_client, \Automattic\WCShipping\OriginAddresses\OriginAddressService $origin_address_service, \Automattic\WCShipping\Connect\WC_Connect_Logger $logger)
        {
        }
        /**
         * Register API routes.
         *
         * @return void
         */
        public function register_routes()
        {
        }
        /**
         * Customs requirements for the requested route, from Connect Server.
         *
         * @param \WP_REST_Request $request Request.
         * @return \WP_REST_Response|\WP_Error
         */
        public function get_requirements(\WP_REST_Request $request)
        {
        }
        /**
         * The fields Connect Server reads; the rest of the address stays on the site.
         *
         * @param array $address Address.
         * @return array
         */
        private static function route_address(array $address): array
        {
        }
        /**
         * The origin the shipment leaves from.
         *
         * @param mixed $origin_id Requested origin ID, or null for the default.
         * @param bool  $is_return Returns default to the default return address.
         * @return array|null The origin, an empty array when the store has none, or null for an unknown ID.
         */
        private function find_origin($origin_id, bool $is_return): ?array
        {
        }
        /**
         * Error clients treat as "unknown", distinct from "not required".
         *
         * @return \WP_Error
         */
        private function unavailable(): \WP_Error
        {
        }
    }
}
namespace Automattic\WCShipping\DOM {
    class Manipulation
    {
        /**
         * Output a script root element that entry point script can attach to.
         *
         * @param string $root_view The root view name.
         * @param string $context   The context of the root view.
         */
        public static function create_root_script_element($root_view, $context = '')
        {
        }
    }
}
namespace Automattic\WCShipping\Emails {
    /**
     * Admin Return Label Email
     *
     * An email sent to store admins when a return label is created.
     *
     * @class       WC_Admin_Return_Label_Email
     * @version     1.0.0
     * @extends     WC_Email
     */
    class WC_Admin_Return_Label_Email extends \WC_Email
    {
        /**
         * The return label data.
         *
         * @var array
         */
        public $label_data;
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Trigger the sending of this email
         *
         * @param int   $order_id The order ID.
         * @param array $label_data The label data.
         * @param array $attachments Optional attachments (like PDF label).
         */
        public function trigger($order_id, $label_data, $attachments = array())
        {
        }
        /**
         * Get content HTML
         *
         * @return string
         */
        public function get_content_html()
        {
        }
        /**
         * Get content plain
         *
         * @return string
         */
        public function get_content_plain()
        {
        }
        /**
         * Initialize settings form fields
         */
        public function init_form_fields()
        {
        }
        /**
         * Get default email subject
         *
         * @return string
         */
        public function get_default_subject()
        {
        }
        /**
         * Get default email heading
         *
         * @return string
         */
        public function get_default_heading()
        {
        }
        /**
         * Get default additional content
         *
         * @return string
         */
        public function get_default_additional_content()
        {
        }
        /**
         * Filter order items to show only products in the return label.
         *
         * @param array     $items Order items.
         * @param \WC_Order $order Order object.
         * @return array Filtered order items.
         */
        public function filter_return_label_items($items, $order)
        {
        }
    }
    /**
     * Return Label Email
     *
     * An email sent to customers when a return label is created for their order.
     *
     * @class       WC_Return_Label_Email
     * @version     1.0.0
     * @extends     WC_Email
     */
    class WC_Return_Label_Email extends \WC_Email
    {
        /**
         * The return label data.
         *
         * @var array
         */
        public $label_data;
        /**
         * Attachments for this email.
         *
         * @var array
         */
        public $attachments = array();
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Trigger the sending of this email
         *
         * @param int   $order_id The order ID.
         * @param array $label_data The label data.
         * @param array $attachments Optional attachments (like PDF label).
         */
        public function trigger($order_id, $label_data, $attachments = array())
        {
        }
        /**
         * Get content HTML
         *
         * @return string
         */
        public function get_content_html()
        {
        }
        /**
         * Get content plain
         *
         * @return string
         */
        public function get_content_plain()
        {
        }
        /**
         * Initialize settings form fields
         */
        public function init_form_fields()
        {
        }
        /**
         * Get default email subject
         *
         * @return string
         */
        public function get_default_subject()
        {
        }
        /**
         * Get default email heading
         *
         * @return string
         */
        public function get_default_heading()
        {
        }
        /**
         * Get default additional content
         *
         * @return string
         */
        public function get_default_additional_content()
        {
        }
        /**
         * Filter order items to show only products in the return label.
         *
         * @param array     $items Order items.
         * @param \WC_Order $order Order object.
         * @return array Filtered order items.
         */
        public function filter_return_label_items($items, $order)
        {
        }
        /**
         * Get email attachments.
         *
         * @return array
         */
        public function get_attachments()
        {
        }
    }
}
namespace Automattic\WCShipping\Exceptions {
    /**
     * Exception class for throwing errors in REST requests.
     */
    class RESTRequestException extends \Exception
    {
        public function get_error_response()
        {
        }
    }
}
namespace Automattic\WCShipping\FeatureFlags {
    class FeatureFlags
    {
        /**
         * Features supported by the store.
         *
         * Please do not use this constant directly - instead, use the
         * `wcshipping_features_supported_by_store` filter.
         *
         * @var string[]
         */
        const FEATURES_SUPPORTED_BY_STORE = array('upsdap', 'fedex');
        public function register_hooks()
        {
        }
        public function decorate_api_request_body_with_feature_flags(array $body): array
        {
        }
        /**
         * Get features supported by the store.
         *
         * @return string[]
         */
        public function get_features_supported_by_store(): array
        {
        }
        /**
         * Check if ScanForm feature is enabled.
         *
         * Checks the user setting from account_settings, with a filter to override.
         *
         * @return bool
         */
        public static function is_scanform_enabled(): bool
        {
        }
        /**
         * Check if the bulk label printing feature is enabled.
         *
         * Defaults to disabled while the feature is in development. Flip on per environment via the
         * `wcshipping_enable_bulk_labels_feature` filter (for example in a local mu-plugin).
         *
         * When enabled, `'bulk_labels'` is advertised to the Connect Server through
         * `features_supported_by_store`, which lets Connect Server handlers gate bulk-only behavior.
         *
         * @return bool
         */
        public static function is_bulk_labels_enabled(): bool
        {
        }
    }
}
namespace Automattic\WCShipping\Fulfillments {
    /**
     * Enum class for fulfillment notification types.
     *
     * Defines the types of notifications that can be sent for fulfillment events.
     * This allows the invoker to explicitly control which notification type should be sent,
     * rather than having the system decide based on context.
     */
    final class FulfillmentNotificationType
    {
        /**
         * Notification type for when a fulfillment is created.
         *
         * @var string
         */
        public const CREATED = 'created';
        /**
         * Notification type for when a fulfillment is updated.
         *
         * @var string
         */
        public const UPDATED = 'updated';
        /**
         * Notification type for when a fulfillment is deleted.
         *
         * @var string
         */
        public const DELETED = 'deleted';
        /**
         * No notification should be sent.
         *
         * @var string
         */
        public const NONE = 'none';
        /**
         * Get all valid notification types.
         *
         * @return array<string> Array of valid notification type constants.
         */
        public static function get_all(): array
        {
        }
        /**
         * Check if a notification type is valid.
         *
         * @param string|null $type The notification type to validate.
         * @return bool True if valid, false otherwise.
         */
        public static function is_valid(?string $type): bool
        {
        }
    }
    class FulfillmentsService
    {
        /**
         * @var ShippingFulfillmentsDataStore
         */
        private $data_store;
        /**
         * @param ShippingFulfillmentsDataStore $shipping_fulfillments_data_store
         */
        public function __construct(\Automattic\WCShipping\Fulfillments\ShippingFulfillmentsDataStore $data_store)
        {
        }
        /**
         * Get a fulfillment by ID.
         *
         * @param int $fulfillment_id Fulfillment entity ID.
         * @return ShippingFulfillment|null Fulfillment object if found, null otherwise.
         */
        public function get_fulfillment_by_id(int $fulfillment_id): ?\Automattic\WCShipping\Fulfillments\ShippingFulfillment
        {
        }
        /**
         * Get the fulfillments for an order in shipments format.
         *
         * This method converts fulfillments back to shipments format for compatibility
         * with the UI, which expects the shipment structure with id, subItems, and fulfillment_id.
         *
         * @param int $order_id The ID of the order.
         * @return array The fulfillments converted to shipments format.
         */
        public function get_order_fulfillments_as_shipments(int $order_id)
        {
        }
        /**
         * Update the fulfillments for an order.
         *
         * Note: "Shipments" from UI are actually fulfillment data since fulfillments
         * are now the single source of truth.
         *
         * @param int   $order_id The ID of the order.
         * @param array $shipments The fulfillment data from UI (called "shipments").
         * @return array The updated fulfillments.
         */
        public function update_order_fulfillments(int $order_id, array $shipments)
        {
        }
        /**
         * Create a new fulfillment for an order.
         *
         * @param int   $order_id The ID of the order.
         * @param array $items The items to fulfill.
         * @return Fulfillment The created fulfillment.
         */
        private function create_order_fulfillment(int $order_id, array $items)
        {
        }
        /**
         * Extract fulfillment_id from shipment data.
         * The fulfillment_id can be found in any of the items in the shipment.
         *
         * @param array $shipment_data The shipment data array.
         * @return int|null The fulfillment ID or null if not found.
         */
        private function extract_fulfillment_id_from_shipment(array $shipment_data)
        {
        }
        /**
         * Convert shipment items to fulfillment items format.
         *
         * Transforms the nested shipment structure with id and subItems
         * into the flat fulfillment items format with item_id and qty.
         * Note: fulfillment_id is used for mapping but doesn't need to be stored in the items.
         *
         * @param array $shipment_items The shipment items array
         * @return array Array of fulfillment items in the format: [['item_id' => int, 'qty' => int], ...]
         */
        public function convert_shipment_items_to_fulfillment_items(array $shipment_items): array
        {
        }
        /**
         * Convert fulfillments to shipments format.
         *
         * This method reverses the conversion process to provide the shipments format
         * that the UI expects, with each shipment containing items with id, subItems, and fulfillment_id.
         *
         * @param array $fulfillments Array of Fulfillment objects
         * @return array Array in shipments format organized by shipment index
         */
        public function convert_fulfillments_to_shipments_format(array $fulfillments): array
        {
        }
        /**
         * Ensure the order has at least one fulfillment. If not, create one from shippable order items.
         *
         * @param int $order_id Order ID.
         * @return Fulfillment | Fulfillment[] | null If a new fulfillment is created it's returned, if fulfillments already exist it's returned and null otherwise
         */
        public function ensure_order_has_fulfillment(int $order_id)
        {
        }
        /**
         * Build fulfillment items directly from order items.
         *
         * @param \WC_Order $order Order object.
         * @return array Array of fulfillment items in the format: [['item_id' => int, 'qty' => int], ...]
         */
        private function build_fulfillment_items_from_shippable_order_items(\WC_Order $order)
        {
        }
    }
    /**
     * Shipping Fulfillment Class
     *
     * Extends the core Fulfillment class to provide shipping-specific functionality
     * such as tracking information, carrier details, and label management.
     *
     * @since 1.9.0
     */
    class ShippingFulfillment extends \Automattic\WCShipping\Fulfillments\Base\Fulfillment
    {
        /**
         * The type of notification to send to the customer.
         *
         * @var string One of FulfillmentNotificationType constants, or FulfillmentNotificationType::NONE for no notification.
         */
        private $notify_customer = \Automattic\WCShipping\Fulfillments\FulfillmentNotificationType::NONE;
        /**
         * Get the tracking number for this shipping fulfillment.
         * Returns the tracking number from the purchased label, or null if no purchased label exists.
         *
         * @return string|null The tracking number or null if not set.
         */
        public function get_tracking_number(): ?string
        {
        }
        /**
         * Get the carrier name for this shipping fulfillment.
         * Returns the carrier name from the purchased label.
         *
         * @return string|null The carrier name or null if not set.
         */
        public function get_carrier_name(): ?string
        {
        }
        /**
         * Get the carrier ID for this shipping fulfillment.
         * Returns the carrier ID from the purchased label.
         *
         * @return string|null The carrier ID or null if not set.
         */
        public function get_carrier_id(): ?string
        {
        }
        /**
         * Get the shipping service name for this fulfillment.
         * Returns the service name from the purchased label.
         *
         * @return string|null The shipping service name or null if not set.
         */
        public function get_service_name(): ?string
        {
        }
        /**
         * Get the shipping service ID for this fulfillment.
         * Returns the service ID from the purchased label.
         *
         * @return string|null The shipping service ID or null if not set.
         */
        public function get_service_id(): ?string
        {
        }
        /**
         * Get the shipping labels for this fulfillment.
         *
         * @return array The labels array or empty array if not set.
         */
        public function get_labels(): array
        {
        }
        /**
         * Set the shipping labels for this fulfillment.
         * This method appends new labels to existing ones to preserve refunded labels.
         *
         * @param array $labels The labels array to add.
         * @return void
         */
        public function set_labels(array $labels): void
        {
        }
        /**
         * Replace all shipping labels for this fulfillment.
         * Use this method when you want to completely overwrite existing labels.
         *
         * @param array $labels The labels array to set (replaces all existing labels).
         * @return void
         */
        public function replace_all_labels(array $labels): void
        {
        }
        /**
         * Add a single label to the fulfillment.
         *
         * @param array $label The label data to add.
         * @return void
         */
        public function add_label(array $label): void
        {
        }
        /**
         * Remove a label by its ID.
         *
         * @param string $label_id The ID of the label to remove.
         * @return bool True if label was removed, false if not found.
         */
        public function remove_label(string $label_id): bool
        {
        }
        /**
         * Get a specific label by its ID.
         *
         * @param string $label_id The ID of the label to retrieve.
         * @return array|null The label data or null if not found.
         */
        public function get_label_by_id(string $label_id): ?array
        {
        }
        /**
         * Get the purchased label for this fulfillment.
         *
         * @return array|null The purchased label data or null if not found.
         */
        public function get_purchased_label(): ?array
        {
        }
        /**
         * Get the purchased label that has not been refunded.
         *
         * A refunded label keeps its 'PURCHASED' status, so callers that need to know whether the
         * fulfillment still holds a label it can ship with have to ignore the refunded ones.
         *
         * @return array|null The purchased label data, or null if there is none left.
         */
        public function get_unrefunded_purchased_label(): ?array
        {
        }
        /**
         * Check if this fulfillment has shipping labels.
         *
         * @return bool True if labels exist, false otherwise.
         */
        public function has_label(): bool
        {
        }
        /**
         * Get the count of labels for this fulfillment.
         *
         * @return int The number of labels.
         */
        public function get_label_count(): int
        {
        }
        /**
         * Check if this fulfillment has tracking information.
         * Returns true if there's a purchased label with tracking information.
         *
         * @return bool True if tracking information exists, false otherwise.
         */
        public function has_tracking(): bool
        {
        }
        /**
         * Get the shipping label rate information.
         *
         * @return array|null The shipping rate data or null if not set.
         */
        public function get_shipping_label_rate(): ?array
        {
        }
        /**
         * Set the shipping label rate information.
         *
         * @param array|null $rate The shipping rate data.
         * @return void
         */
        public function set_shipping_label_rate(?array $rate): void
        {
        }
        /**
         * Get the hazmat configuration for this fulfillment.
         *
         * @return array|null The hazmat configuration or null if not set.
         */
        public function get_shipping_label_hazmat(): ?array
        {
        }
        /**
         * Set the hazmat configuration for this fulfillment.
         *
         * @param array|null $hazmat The hazmat configuration.
         * @return void
         */
        public function set_shipping_label_hazmat(?array $hazmat): void
        {
        }
        /**
         * Get the selected origin address for this fulfillment.
         *
         * @return array|null The origin address or null if not set.
         */
        public function get_selected_origin(): ?array
        {
        }
        /**
         * Set the selected origin address for this fulfillment.
         *
         * @param array|null $origin The origin address.
         * @return void
         */
        public function set_selected_origin(?array $origin): void
        {
        }
        /**
         * Get the shipping label destination address.
         *
         * @return array|null The destination address or null if not set.
         */
        public function get_shipping_label_destination(): ?array
        {
        }
        /**
         * Set the shipping label destination address.
         *
         * @param array|null $destination The destination address.
         * @return void
         */
        public function set_shipping_label_destination(?array $destination): void
        {
        }
        /**
         * Get the shipping label customs information.
         *
         * @return array|null The customs information or null if not set.
         */
        public function get_shipping_label_customs(): ?array
        {
        }
        /**
         * Set the shipping label customs information.
         *
         * @param array|null $customs The customs information.
         * @return void
         */
        public function set_shipping_label_customs(?array $customs): void
        {
        }
        /**
         * Get the shipping label dates information.
         *
         * @return array|null The shipment dates or null if not set.
         */
        public function get_shipping_label_dates(): ?array
        {
        }
        /**
         * Set the shipping label dates information.
         *
         * @param array|null $dates The shipment dates.
         * @return void
         */
        public function set_shipping_label_dates(?array $dates): void
        {
        }
        /**
         * Update a specific label by its ID with new data.
         *
         * @param string $label_id The ID of the label to update.
         * @param array  $data The data to update for the label.
         * @return bool True if label was found and updated, false otherwise.
         */
        public function update_label(string $label_id, array $data): bool
        {
        }
        /**
         * Set tracking metadata for a label.
         * This includes tracking number, tracking URL, and shipment provider.
         *
         * @param array $label_data The label data containing tracking information.
         * @return void
         */
        public function set_tracking_metadata(array $label_data): void
        {
        }
        /**
         * Check if a label's status will change to a specific target status.
         *
         * @param string $label_id The ID of the label to check.
         * @param array  $new_label_data The new label data being applied.
         * @param string $target_status The status to check for (default: 'PURCHASED').
         * @return bool True if status will change to the target status, false otherwise.
         */
        public function will_status_change(string $label_id, array $new_label_data, string $target_status = 'PURCHASED'): bool
        {
        }
        /**
         * Clean up individual label_id meta entries.
         * Removes all meta entries with '_shipping_label_id' key.
         *
         * @return void
         */
        private function cleanup_individual_label_entries(): void
        {
        }
        /**
         * Get the notification type to send to the customer.
         *
         * @return string One of FulfillmentNotificationType constants, or FulfillmentNotificationType::NONE for no notification.
         */
        public function get_notify_customer(): string
        {
        }
        /**
         * Set the notification type to send to the customer.
         *
         * @param string|null $notification_type One of FulfillmentNotificationType constants, or null for no notification (converted to NONE).
         * @return void
         * @throws \InvalidArgumentException If the notification type is invalid.
         */
        public function set_notify_customer(?string $notification_type): void
        {
        }
        /**
         * Save the fulfillment and trigger notifications if needed.
         *
         * @return int The ID of the saved fulfillment.
         */
        public function save()
        {
        }
        /**
         * Delete the fulfillment and trigger notifications if needed.
         *
         * @param bool $force_delete Whether to force delete (bypass trash).
         * @return bool Result of the delete operation.
         */
        public function delete($force_delete = false)
        {
        }
        /**
         * Get shipping-specific data as an array.
         *
         * @return array The shipping data.
         */
        public function get_shipping_data(): array
        {
        }
    }
    /**
     * Shipping Fulfillments Data Store Class
     *
     * Extends the core FulfillmentsDataStore to return ShippingFulfillment objects
     * which provide additional shipping-specific functionality.
     *
     * @since 1.9.0
     */
    class ShippingFulfillmentsDataStore extends \Automattic\WCShipping\Fulfillments\Base\FulfillmentsDataStore
    {
        /**
         * Read fulfillments from the database.
         *
         * Overrides the parent method to return ShippingFulfillment objects
         * instead of base Fulfillment objects.
         *
         * @param string $entity_type The entity type (e.g., 'WC_Order').
         * @param string $entity_id The entity ID.
         * @param bool   $with_deleted Whether to include deleted fulfillments.
         *
         * @return ShippingFulfillment[] Array of ShippingFulfillment objects.
         *
         * @throws \Exception If failed to read fulfillment data.
         */
        public function read_fulfillments(string $entity_type, string $entity_id, bool $with_deleted = false): array
        {
        }
        /**
         * Find a fulfillment by label ID.
         *
         * Searches all fulfillments to find one that contains a label with the specified ID.
         * Returns the first matching fulfillment found.
         *
         * @param string $label_id The label ID to search for.
         *
         * @return ShippingFulfillment|null ShippingFulfillment object if found, null otherwise.
         *
         * @throws \Exception If failed to search fulfillment data.
         */
        public function get_by_label_id(string $label_id): ?\Automattic\WCShipping\Fulfillments\ShippingFulfillment
        {
        }
    }
}
namespace Automattic\WCShipping\Integrations {
    class AssetsRESTController extends \Automattic\WCShipping\WCShippingRESTController
    {
        protected $rest_base = 'assets';
        public function register_routes()
        {
        }
        public function get()
        {
        }
    }
    /**
     * REST controller for config loading.
     */
    class ConfigRESTController extends \Automattic\WCShipping\WCShippingRESTController
    {
        /**
         * REST base.
         *
         * @var string
         */
        protected $rest_base = 'config';
        /**
         * Shipping label view instance.
         *
         * @var \Automattic\WCShipping\LabelPurchase\View
         */
        private $shipping_label_view;
        /**
         * Account settings instance.
         *
         * @var \Automattic\WCShipping\Connect\WC_Connect_Account_Settings
         */
        protected $account_settings;
        /**
         * Origin address service instance.
         *
         * @var \Automattic\WCShipping\OriginAddresses\OriginAddressService
         */
        private $origin_address_service;
        /**
         * Continents instance.
         *
         * @var \Automattic\WCShipping\Connect\WC_Connect_Continents
         */
        private $continents;
        /**
         * Constructor.
         *
         * @param \Automattic\WCShipping\LabelPurchase\View                        $shipping_label_view Shipping label view instance.
         * @param \Automattic\WCShipping\Connect\WC_Connect_Account_Settings $account_settings Account settings instance.
         * @param \Automattic\WCShipping\OriginAddresses\OriginAddressService        $origin_address_service Origin address service instance.
         */
        public function __construct(\Automattic\WCShipping\LabelPurchase\View $shipping_label_view, \Automattic\WCShipping\Connect\WC_Connect_Account_Settings $account_settings, \Automattic\WCShipping\OriginAddresses\OriginAddressService $origin_address_service)
        {
        }
        /**
         * Register routes.
         */
        public function register_routes()
        {
        }
        /**
         * Returns shipping label config for the order.
         *
         * @param WP_REST_Request $request Incoming WP REST request.
         *
         * @return \WP_Error|mixed
         */
        public function get($request)
        {
        }
        /**
         * Returns settings config.
         *
         * @return \WP_Error|mixed
         */
        public function get_settings()
        {
        }
    }
    class Garden
    {
        /**
         * Check if Garden config is enabled.
         *
         * @return bool
         */
        public static function is_config_enabled()
        {
        }
        /**
         * Get a WPCloud config value.
         *
         * @param string $key The config key to retrieve.
         * @return mixed The config value or null.
         */
        public static function get_wpcloud_config($key)
        {
        }
        public static function get_plan_info()
        {
        }
        public static function get_selected_payment_method_id()
        {
        }
    }
    class TosRESTController extends \Automattic\WCShipping\WCShippingRESTController
    {
        protected $rest_base = 'tos';
        public function register_routes()
        {
        }
        public function post($request)
        {
        }
    }
    /**
     * Class for modifying some of the WooCommerce Shipping & Tax plugin behavior.
     *
     * @since 1.1.0
     */
    class WCST
    {
        /**
         * The plugin file for WCS&T.
         */
        const PLUGIN_FILE = 'woocommerce-services/woocommerce-services.php';
        /**
         * Constructor.
         */
        public static function init(): void
        {
        }
        /**
         * Check if the WooCommerce Shipping & Tax plugin is active.
         *
         * @since 1.1.4
         *
         * @param string|null $min_version Optional. Version number to compare.
         * @return bool Whether the WooCommerce Shipping & Tax plugin is active and matches the version if provided.
         */
        public static function is_wcst_active($min_version = null): bool
        {
        }
        /**
         * Maybe filter the plugin name.
         */
        public static function maybe_filter_plugin_name(): void
        {
        }
        /**
         * Modify the name of the WooCommerce Shipping & Tax plugin to just WooCommerce Tax if WC Shipping is active.
         *
         * @param array $plugins An array of plugin data.
         * @return array The modified array of plugin data.
         */
        public static function change_plugin_name($plugins): array
        {
        }
    }
    /**
     * WooCommerceBlocks Integration class.
     */
    class WooCommerceBlocksIntegration implements \Automattic\WooCommerce\Blocks\Integrations\IntegrationInterface
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
    }
    /**
     * Class WooCommerceShipmentTracking
     *
     * @package Automattic\WCShipping\Integrations
     */
    class WooCommerceShipmentTracking
    {
        /**
         * Constructor.
         */
        public static function init()
        {
        }
        /**
         * Add a WooCommerce Shipment Tracking compatible tracking number to an order.
         * We will use the WC Shipment Tracking functions if the plugin is installed
         * otherwise we will use our own custom implementation so data is present for
         * when the plugin is installed, but in the same format.
         *
         * @param int    $order_id Order ID.
         * @param string $tracking_number Tracking number.
         * @param string $carrier Carrier ID.
         * @param string $service Service Name.
         *
         * @return void
         */
        public static function add_tracking_number_to_order($order_id, $tracking_number, $carrier, $service = '')
        {
        }
        /**
         * Save the tracking items to the order using the WC Shipment Tracking format.
         *
         * @param int   $order_id Order ID.
         * @param array $tracking_items Tracking items.
         *
         * @return void
         */
        public static function save_st_tracking_items($order_id, $tracking_items)
        {
        }
        /**
         * Gets all tracking items from the post meta array for an order.
         *
         * @param int $order_id Order ID.
         *
         * @return array Tracking items
         */
        public static function get_st_tracking_items($order_id)
        {
        }
        /**
         * Check if WooCommerce Shipment Tracking is installed.
         *
         * @return bool
         */
        public static function is_st_installed()
        {
        }
        /**
         * Add tracking number using WC Shipment Tracking function, if the plugin is installed.
         *
         * @param int    $order_id Order ID.
         * @param string $tracking_number Tracking number.
         * @param string $carrier Carrier ID.
         * @param string $tracking_url Custom Tracking URL.
         *
         * @return void
         */
        public static function add_tracking_using_st_installed_functions($order_id, $tracking_number, $carrier, $tracking_url)
        {
        }
        /**
         * Modify tracking data stored erroneously due to previous a bug.
         *
         * @param mixed    $value The value of the meta key.
         * @param WC_Order $order The order object.
         *
         * @return mixed The modified value.
         */
        public static function modify_tracking_data_stored_erenously($value, $order)
        {
        }
    }
}
namespace Automattic\WCShipping\LabelPurchase {
    /**
     * Class to handle address normalization requests.
     */
    class AddressNormalizationService
    {
        /**
         * Destination address normalization hash key.
         *
         * @var string
         */
        const DESTINATION_NORMALIZED_HASH_KEY = '_wcshipping_destination_normalized_hash';
        /**
         * Connect Server settings store.
         *
         * @var \Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store
         */
        private $settings_store;
        /**
         * Connect Server API client.
         *
         * @var \Automattic\WCShipping\Connect\WC_Connect_API_Client
         */
        private $api_client;
        /**
         * Logging utility.
         *
         * @var \Automattic\WCShipping\Connect\WC_Connect_Logger
         */
        private $logger;
        /**
         * Origin address service.
         *
         * @var \Automattic\WCShipping\OriginAddresses\OriginAddressService
         */
        private $origin_address_service;
        /**
         * Class constructor.
         *
         * @param \Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store $settings_store Server settings store instance.
         * @param \Automattic\WCShipping\Connect\WC_Connect_API_Client             $api_client     Server API client instance.
         * @param \Automattic\WCShipping\Connect\WC_Connect_Logger                 $logger         Logging utility.
         * @param \Automattic\WCShipping\OriginAddresses\OriginAddressService              $origin_address_service Origin address service.
         */
        public function __construct(\Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store $settings_store, \Automattic\WCShipping\Connect\WC_Connect_API_Client $api_client, \Automattic\WCShipping\Connect\WC_Connect_Logger $logger, \Automattic\WCShipping\OriginAddresses\OriginAddressService $origin_address_service)
        {
        }
        /**
         * Confirm and update origin address in store.
         *
         * @param array $address Origin shipping address.
         *
         * @return array|\WP_Error REST response body.
         */
        public function update_origin_address($address)
        {
        }
        /**
         * Confirm and update shipping destination in store.
         *
         * @param int|string $order_id    WC order ID.
         * @param array      $address     Destination shipping address.
         * @param bool       $is_verified Is destination address normalized/verified.
         *
         * @return array|\WP_Error REST response body.
         */
        public function update_destination_address($order_id, $address, $is_verified)
        {
        }
        /**
         * Builds the error returned when an order ID doesn't resolve to an order.
         *
         * The `status` key is what `rest_convert_error_to_response()` reads to set
         * the HTTP status, so this surfaces as a 404 rather than the default 500.
         *
         * @return \WP_Error
         */
        private function get_order_not_found_error(): \WP_Error
        {
        }
        /**
         * Checks whether destination address has already been verified/normalized.
         *
         * @param int|string $order_id WC order ID.
         *
         * @return array|\WP_Error REST response body.
         */
        public function is_destination_address_verified($order_id)
        {
        }
        /**
         * Requests server to normalize address.
         *
         * @param array  $address Address to normalize.
         * @param string $type    Address role on the wire — `'origin'` or
         *                        `'destination'` (default). Forwarded to the
         *                        connect server so origin saves don't get
         *                        labeled as destinations. See WOOSHIP-2230.
         *
         * @return array|\WP_Error REST response body.
         */
        public function get_normalization_response($address, $type = 'destination')
        {
        }
        /**
         * Uses the stored hash to verify if the address matches the current normalized address.
         *
         * @param int $order_id Order ID.
         *
         * @return bool True if address is normalized, false otherwise.
         */
        public function is_destination_address_normalized(int $order_id): bool
        {
        }
        /**
         * Sets the order meta with the current address hash if verified, or deletes it if not.
         *
         * @param int  $order_id    Order ID.
         * @param bool $is_verified True if address is verified, false otherwise.
         */
        public function set_is_destination_address_normalized(int $order_id, bool $is_verified): void
        {
        }
        /**
         * Generates a hash for the destination address based on its fields.
         *
         * @param int $order_id Order ID.
         *
         * @return string|null Hash of the destination address, or null if order or address are not found.
         */
        private function get_destination_address_hash(int $order_id): ?string
        {
        }
        /**
         * Returns normalization response for address from server.
         *
         * @param array  $address Address to normalize.
         * @param string $type    `'origin'` or `'destination'` — chooses which
         *                        key wraps the request body. The connect
         *                        server's `normalizeRequest` validator accepts
         *                        either (per WOOSHIP-2230 / the matching
         *                        APIWOO server PR); historically it only
         *                        accepted `destination`, which is why that
         *                        stays the default.
         *
         * @return object|\WP_Error REST reponse object.
         */
        private function normalize_address($address, $type = 'destination')
        {
        }
        /**
         * Formats address request body to support required server validation.
         *
         * @param array $address {
         *     WooCommerce-style address fields.
         *
         *     @type string $address_1       (Required) Street address, will be converted to 'address'
         *     @type string $city            (Required) City name
         *     @type string $state           (Required) State code
         *     @type string $postcode        (Required) Postal code
         *     @type string $country         (Required) Country code
         *     @type string $address_2       (Optional) Secondary address line
         *     @type string $first_name      (Optional, Required if company is present) First name, combined with last_name into 'name' if both present
         *     @type string $last_name       (Optional, Required if company is present) Last name, combined with first_name into 'name' if both present
         *     @type string $company         (Optional, Required if name parts are not present) Company name
         *     @type string $phone           (Optional) Will be removed in output
         *     @type string $email           (Optional) Will be removed in output
         *     @type string $id              (Optional) Will be removed in output
         *     @type bool   $default_address (Optional) Will be removed in output
         *     @type bool   $is_verified     (Optional) Will be removed in output
         * }
         *
         * @return array {
         *     Formatted request body for Connect Server.
         *
         *     @type string $address        (Required) Street address, copied from address_1 if present
         *     @type string $city           (Required) City name
         *     @type string $state          (Required) State code
         *     @type string $postcode       (Required) Postal code
         *     @type string $country        (Required) Country code
         *     @type string $address_2      (Optional) Secondary address line, defaults to empty string if not set
         *     @type string $name           (Optional) Full name, combined from first_name and last_name if both present, defaults to empty string
         *     @type string $company        (Optional) Company name
         * }
         */
        private function format_address_for_connect_server($address)
        {
        }
        /**
         * Formats address response from server format to WooCommerce format.
         *
         * @param array $address {
         *     Server-formatted address fields.
         *
         *     @type string $address        Street address line 1
         *     @type string $address_2      Secondary address line
         *     @type string $city           City name
         *     @type string $state          State code
         *     @type string $postcode       Postal code
         *     @type string $country        Country code
         *     @type string $name           Full name (will be split into first_name and last_name)
         *     @type string $company        Company name
         * }
         * @param array $original_address {
         *     Optional. Original address with additional fields to preserve.
         *
         *     @type string $phone           Phone number
         *     @type string $email           Email address
         *     @type string $id              Address ID
         *     @type bool   $default_address Whether this is the default address
         * }
         * @return array {
         *     WooCommerce-formatted address fields.
         *
         *     @type string $address_1       Street address line 1 (converted from address)
         *     @type string $address_2       Secondary address line
         *     @type string $city            City name
         *     @type string $state           State code
         *     @type string $postcode        Postal code
         *     @type string $country         Country code
         *     @type string $first_name      First name (split from name)
         *     @type string $last_name       Last name (split from name)
         *     @type string $company         Company name
         *     @type string $phone           Phone number (if in original_address)
         *     @type string $email           Email address (if in original_address)
         *     @type string $id              Address ID (if in original_address)
         *     @type bool   $default_address Whether this is the default address (if in original_address)
         * }
         */
        private function format_address_for_client($address, $original_address = array())
        {
        }
    }
    /**
     * REST controller for origin and destination address verification.
     */
    class AddressRESTController extends \Automattic\WCShipping\WCShippingRESTController
    {
        /**
         * API endpoint path.
         *
         * @var string
         */
        protected $rest_base = 'address';
        /**
         * Address normalization service.
         *
         * @var AddressNormalizationService
         */
        private $normalization_service;
        /**
         * Origin address service.
         *
         * @var \Automattic\WCShipping\OriginAddresses\OriginAddressService
         */
        private $origin_address_service;
        /**
         * REST controller constructor.
         *
         * @param AddressNormalizationService $normalization_service Service to manage address normalization.
         */
        public function __construct(\Automattic\WCShipping\LabelPurchase\AddressNormalizationService $normalization_service, \Automattic\WCShipping\OriginAddresses\OriginAddressService $origin_address_service)
        {
        }
        /**
         * Register API routes.
         *
         * @return void
         */
        public function register_routes()
        {
        }
        /**
         * Confirm and update origin address.
         *
         * @param \WP_REST_Request $request REST request object.
         * @return WP_REST_Response|\WP_Error REST response or error.
         */
        public function update_origin(\WP_REST_Request $request)
        {
        }
        /**
         * Confirm and update destination address.
         *
         * @param \WP_REST_Request $request REST request object.
         * @return WP_REST_Response|\WP_Error REST response or error.
         */
        public function update_destination(\WP_REST_Request $request)
        {
        }
        /**
         * Verify if shipping destination is normalized,
         * intended to be called on order summary details page.
         *
         * @param \WP_REST_Request $request REST request object.
         * @return WP_REST_Response|\WP_Error REST response or error.
         */
        public function verify_order_shipping_address(\WP_REST_Request $request)
        {
        }
        /**
         * Submits address to normalization service and returns response.
         *
         * @param \WP_REST_Request $request REST request object.
         * @return WP_REST_Response|\WP_Error REST response or error.
         */
        public function normalize_address(\WP_REST_Request $request)
        {
        }
        /**
         * Delete an origin address.
         *
         * @param  \WP_REST_Request $request The request body contains the origin address to delete.
         * @return \WP_Error|WP_REST_Response
         */
        public function delete($request)
        {
        }
        /**
         * Get all origin addresses.
         *
         * @return WP_REST_Response|\WP_Error REST response or error.
         */
        public function get_origin_addresses()
        {
        }
    }
    /**
     * REST controller for checking shipping label eligibility.
     */
    class EligibilityRESTController extends \Automattic\WCShipping\WCShippingRESTController
    {
        /**
         * API endpoint path.
         *
         * @var string
         */
        protected $rest_base = 'eligibility';
        /**
         * Label purchase service.
         *
         * @var LabelPurchaseService
         */
        private $label_purchase_service;
        /**
         * Settings store.
         *
         * @var SettingsStore
         */
        private $settings_store;
        /**
         * Constructor.
         *
         * @param ViewService $view_service Service to manage label purchases.
         */
        /**
         * @var \Automattic\WCShipping\Connect\WC_Connect_Payment_Methods_Store
         */
        private $payment_methods_store;
        public function __construct(\Automattic\WCShipping\LabelPurchase\ViewService $view_service, \Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store $settings_store, \Automattic\WCShipping\Connect\WC_Connect_Payment_Methods_Store $payment_methods_store)
        {
        }
        /**
         * Register REST routes.
         *
         * @return void
         */
        public function register_routes()
        {
        }
        /**
         * Check if an order is eligible for shipping label creation.
         *
         * @param \WP_REST_Request $request Request object.
         * @return WP_REST_Response|\WP_Error Response object or WP_Error.
         */
        public function get_eligibility($request)
        {
        }
    }
    /**
     * REST controller for label preview.
     */
    class LabelPreviewRESTController extends \Automattic\WCShipping\WCShippingRESTController
    {
        /**
         * Route
         *
         * @var string
         */
        protected $rest_base = 'label/preview';
        /**
         * LabelPrintService class.
         *
         * @var LabelPrintService
         */
        protected $label_print_service;
        /**
         * Logger for the connect server.
         *
         * @var \Automattic\WCShipping\Connect\WC_Connect_Logger
         */
        protected $logger;
        /**
         * Class constructor.
         *
         * @param LabelPrintService $label_print_service Service that has logic to print labels.
         * @param \Automattic\WCShipping\Connect\WC_Connect_Logger $logger Logger class.
         */
        public function __construct(\Automattic\WCShipping\LabelPurchase\LabelPrintService $label_print_service, \Automattic\WCShipping\Connect\WC_Connect_Logger $logger)
        {
        }
        /**
         * Register API routes.
         *
         * @return void
         */
        public function register_routes()
        {
        }
        /**
         * Retrieve the test label and returns it as a base64 encoded content.
         *
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response|\WP_Error
         */
        public function label_preview(\WP_REST_Request $request)
        {
        }
    }
    class LabelPrintController extends \Automattic\WCShipping\WCShippingRESTController
    {
        protected $rest_base = 'label/print';
        /**
         * @var \Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store
         */
        protected $settings_store;
        /**
         * @var \Automattic\WCShipping\Connect\WC_Connect_API_Client
         */
        protected $api_client;
        /**
         * @var \Automattic\WCShipping\Connect\WC_Connect_Logger
         */
        protected $logger;
        /**
         * @var WC_Label_Print_Service
         */
        protected $label_print_service;
        /**
         * Fulfillment data store used to verify bulk print requests before forwarding label IDs.
         *
         * @var \Automattic\WCShipping\Fulfillments\ShippingFulfillmentsDataStore
         */
        protected $shipping_fulfillments_data_store;
        /**
         * Fulfillment service used to resolve fulfillment entities.
         *
         * @var \Automattic\WCShipping\Fulfillments\FulfillmentsService
         */
        protected $fulfillments_service;
        public function __construct(\Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store $settings_store, \Automattic\WCShipping\Connect\WC_Connect_API_Client $api_client, \Automattic\WCShipping\Connect\WC_Connect_Logger $logger, \Automattic\WCShipping\LabelPurchase\LabelPrintService $label_print_service, \Automattic\WCShipping\Fulfillments\ShippingFulfillmentsDataStore $shipping_fulfillments_data_store, ?\Automattic\WCShipping\Fulfillments\FulfillmentsService $fulfillments_service = null)
        {
        }
        /**
         * Register API routes.
         *
         * @return void
         */
        public function register_routes()
        {
        }
        public function print_label($request)
        {
        }
        /**
         * Build the `labels` payload from the raw `label_id_csv` parameter.
         *
         * Current behavior (flag off) forwards a single label to preserve existing mobile and web
         * single-label callers. When `bulk_labels` is enabled, the CSV is parsed into multiple
         * labels so a merged PDF can be produced server-side.
         *
         * The route does not declare a schema for `label_id_csv`, so `get_param` may return a
         * non-string (for example an array from `label_id_csv[]=1&label_id_csv[]=2`). Non-scalar
         * inputs are treated as invalid and return an empty payload, which the caller turns into
         * a standard `invalid_pdf_request` error rather than a 500.
         *
         * @param mixed $label_id_csv Raw value from the `label_id_csv` query parameter.
         * @return array[] Array of `['label_id' => int]` entries for the Connect Server `labels` payload.
         */
        private function parse_label_ids($label_id_csv): array
        {
        }
        /**
         * Resolve a bulk print request through the fulfillment entity before forwarding label IDs.
         *
         * The Connect Server PDF endpoint still accepts label IDs, but bulk purchases are stored on
         * fulfillment records. The paired `fulfillment_id_csv` makes the plugin prove every requested
         * label belongs to the expected fulfillment entity before the remote print request is made.
         *
         * @param mixed $label_id_csv       Raw CSV value from the `label_id_csv` query parameter.
         * @param mixed $fulfillment_id_csv Raw CSV value from the `fulfillment_id_csv` query parameter.
         * @return array[]|\WP_Error Array of `['label_id' => int]` entries or an error.
         */
        private function parse_fulfillment_label_ids($label_id_csv, $fulfillment_id_csv)
        {
        }
        /**
         * Parse a comma-separated list of positive integers.
         *
         * Unlike `parse_label_ids`, this is strict because label IDs and fulfillment IDs are paired
         * positionally. Dropping a bad token could silently pair a label with the wrong fulfillment.
         *
         * @param mixed $csv Raw CSV parameter.
         * @return int[]|null Parsed IDs, or null when the CSV is malformed.
         */
        private function parse_positive_int_csv_strict($csv): ?array
        {
        }
        /**
         * Check that the resolved fulfillment still contains the requested label.
         *
         * @param \Automattic\WCShipping\Fulfillments\ShippingFulfillment $fulfillment Fulfillment entity resolved by label ID.
         * @param int                 $label_id    Requested label ID.
         * @return bool True when the label is stored on the fulfillment entity.
         */
        private function fulfillment_contains_label(\Automattic\WCShipping\Fulfillments\ShippingFulfillment $fulfillment, int $label_id): bool
        {
        }
        /**
         * Build and log the standard invalid-PDF-request error.
         *
         * @return \WP_Error
         */
        private function invalid_pdf_request_error(): \WP_Error
        {
        }
        /**
         * Build and log the fulfillment-API-required error.
         *
         * @return \WP_Error
         */
        private function fulfillment_api_required_error(): \WP_Error
        {
        }
        /**
         * Generate packing list for a specific label.
         *
         * @param WP_REST_Request $request REST request object.
         * @return WP_REST_Response|\WP_Error REST response or error.
         */
        public function get_packing_list(\WP_REST_Request $request)
        {
        }
        /**
         * Generate packing list without requiring a shipping label.
         *
         * @param WP_REST_Request $request REST request object.
         * @return WP_REST_Response|\WP_Error REST response or error.
         */
        public function get_packing_list_without_label(\WP_REST_Request $request)
        {
        }
    }
    /**
     * Class to handle logics around printing labels.
     */
    class LabelPrintService
    {
        /**
         * Connect Server API client.
         *
         * @var \Automattic\WCShipping\Connect\WC_Connect_API_Client
         */
        private $api_client;
        /**
         * Logger utility.
         *
         * @var \Automattic\WCShipping\Connect\WC_Connect_Logger
         */
        private $logger;
        /**
         * Labels service.
         *
         * @var \Automattic\WCShipping\LabelPurchase\LabelPurchaseService
         */
        private $label_purchase_service;
        /**
         * Class constructor.
         *
         * @param \Automattic\WCShipping\Connect\WC_Connect_API_Client $api_client            Server API client instance.
         * @param \Automattic\WCShipping\Connect\WC_Connect_Logger     $logger                Logger.
         */
        public function __construct(\Automattic\WCShipping\Connect\WC_Connect_API_Client $api_client, \Automattic\WCShipping\Connect\WC_Connect_Logger $logger, \Automattic\WCShipping\LabelPurchase\LabelPurchaseService $label_purchase_service)
        {
        }
        /**
         * This function retrieve the test label PDF binary from the connect server.
         *
         * @param string $paper_size The size of the paper. Check connect server for the valid inputs.
         * @return array|\WP_Error
         */
        public function get_label_preview_content($paper_size)
        {
        }
        /**
         * Generate packing list HTML for a specific label.
         *
         * @param int $order_id WC Order ID.
         * @param int $label_id Label ID.
         * @return array|\WP_Error REST response body.
         */
        public function get_packing_list(int $order_id, int $label_id)
        {
        }
        /**
         * Render the packing slip HTML shared across label and no-label flows.
         *
         * @param array $args Arguments used to populate the template.
         * @return string HTML markup for the packing slip.
         */
        private function render_packing_slip_html(array $args): string
        {
        }
        /**
         * Generate packing list HTML for an order without requiring a shipping label.
         *
         * @param int    $order_id WC Order ID.
         * @param string $format   Output format ('html' or 'pdf').
         * @return array|\WP_Error REST response body.
         */
        public function get_packing_list_without_label(int $order_id, string $format = 'html')
        {
        }
        /**
         * Create label items array from shipment items.
         *
         * @param array     $shipment_items Array of shipment items.
         * @param \WC_Order $order         WooCommerce order object.
         * @return array                   Array of formatted label items.
         */
        private function create_rows_from_shipment_items(array $shipment_items, \WC_Order $order): array
        {
        }
        /**
         * Get store origin address from WooCommerce settings.
         *
         * @return string Formatted store address HTML.
         */
        private function get_store_origin_address(): string
        {
        }
    }
    /**
     * REST controller for purchasing labels for order.
     */
    class LabelPurchaseRESTController extends \Automattic\WCShipping\WCShippingRESTController
    {
        /**
         * Maximum number of shipments allowed in a single batch purchase request.
         */
        private const BATCH_SIZE_CAP = 25;
        /**
         * API endpoint path.
         *
         * @var string
         */
        protected $rest_base = 'label/purchase';
        /**
         * Label purchase service.
         *
         * @var LabelPurchaseService
         */
        private $label_service;
        /**
         * REST controller constructor.
         *
         * @param AddressNormalizationService $normalization_service Service to manage address normalization.
         */
        public function __construct(\Automattic\WCShipping\LabelPurchase\LabelPurchaseService $label_service)
        {
        }
        /**
         * Register API routes.
         *
         * @return void
         */
        public function register_routes()
        {
        }
        /**
         * Get labels for order.
         *
         * @param \WP_REST_Request $request REST request object.
         * @return \WP_REST_Response|\WP_Error REST response or error.
         */
        public function get_labels(\WP_REST_Request $request)
        {
        }
        /**
         * Purchase labels.
         *
         * @param \WP_REST_Request $request REST request object.
         * @return \WP_REST_Response|\WP_Error REST response or error.
         */
        public function purchase_labels(\WP_REST_Request $request)
        {
        }
        /**
         * Batch purchase handler. Accepts a shared `origin` plus a `shipments` array and returns
         * results keyed by `order_<id>` (or `invalid_order_<index>` for entries with a missing or
         * non-positive `order_id`). The string prefix keeps the response object-shaped in JSON for
         * web and mobile clients regardless of the underlying numeric `order_id`.
         *
         * Per-shipment failures are captured as `{ error: { code, message } }` entries rather than
         * aborting the whole batch. Used by the bulk label printing flow.
         *
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response|\WP_Error
         */
        public function purchase_labels_batch(\WP_REST_Request $request)
        {
        }
    }
    /**
     * Class to handle label purchase requests.
     */
    class LabelPurchaseService
    {
        /**
         * Connect Server settings store.
         *
         * @var \Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store
         */
        private $settings_store;
        /**
         * Connect Server API client.
         *
         * @var \Automattic\WCShipping\Connect\WC_Connect_API_Client
         */
        private $api_client;
        /**
         * Connect Label Service.
         *
         * @var View
         */
        private $connect_label_service;
        /**
         * Logger utility.
         *
         * @var \Automattic\WCShipping\Connect\WC_Connect_Logger
         */
        private $logger;
        /**
         * Promo service.
         *
         * @var \Automattic\WCShipping\Promo\PromoService
         */
        private $promo_service;
        /**
         * Fulfillments service.
         *
         * @var \Automattic\WCShipping\Fulfillments\FulfillmentsService
         */
        private $fulfillments_service;
        /**
         * Selected rates key used to store selected rates in order meta.
         *
         * @var string
         */
        const SELECTED_RATES_KEY = '_wcshipping_selected_rates';
        /**
         * Selected hazmat key used to store selected hazmat in order meta.
         *
         * @var string
         */
        const SELECTED_HAZMAT_KEY = '_wcshipping_selected_hazmat';
        /**
         * Selected hazmat key used to store selected hazmat in order meta.
         *
         * @var string
         */
        const SELECTED_ORIGIN_KEY = '_wcshipping_selected_origin';
        /**
         * Selected hazmat key used to store selected hazmat in order meta.
         *
         * @var string
         */
        const SELECTED_DESTINATION_KEY = '_wcshipping_selected_destination';
        /**
         * Key used to store customs information in order meta.
         *
         * @var string
         */
        const CUSTOMS_INFORMATION = '_wcshipping_customs_information';
        /**
         * Key used to store order shipments in order meta.
         *
         * @var string
         */
        const ORDER_SHIPMENTS = '_wcshipping-shipments';
        /**
         * Key used to store shipment dates in order meta.
         *
         * @var string
         */
        const SHIPMENT_DATES = '_wcshipping_shipment_dates';
        /**
         * Key used to store package dimensions in order meta.
         *
         * @var string
         */
        const PACKAGE_DIMENSIONS = '_wcshipping_package_dimensions';
        /**
         * Class constructor.
         *
         * @param \Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store $settings_store        Server settings store instance.
         * @param \Automattic\WCShipping\Connect\WC_Connect_API_Client             $api_client            Server API client instance.
         * @param View                              $connect_label_service Connect Label Service instance.
         * @param \Automattic\WCShipping\Connect\WC_Connect_Logger                 $logger                Server API client instance.
         * @param \Automattic\WCShipping\Promo\PromoService                      $promo_service         Promo service instance.
         * @param \Automattic\WCShipping\Fulfillments\FulfillmentsService               $fulfillments_service  Fulfillments service instance.
         */
        public function __construct(\Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store $settings_store, \Automattic\WCShipping\Connect\WC_Connect_API_Client $api_client, \Automattic\WCShipping\LabelPurchase\View $connect_label_service, \Automattic\WCShipping\Connect\WC_Connect_Logger $logger, \Automattic\WCShipping\Promo\PromoService $promo_service, \Automattic\WCShipping\Fulfillments\FulfillmentsService $fulfillments_service)
        {
        }
        /**
         * Get labels for order.
         *
         * @param int $order_id WC Order ID.
         * @return array REST response body.
         */
        public function get_labels($order_id)
        {
        }
        /**
         * Purchase labels for order.
         *
         * @param array  $origin      Origin address.
         * @param array  $destination Destination address.
         * @param array  $packages   Packages to purchase labels for.
         * @param int    $order_id    WC Order ID.
         * @param array  $selected_rate Selected rate. { rate: array, parent?: array }
         * @param array  $selected_rate_options Selected rate options.
         * @param array  $hazmat Selected HAZMAT category and if shipment includes HAZMAT.
         * @param array  $customs Customs form information.
         * @param array  $user_meta User meta array.
         * @param array  $features_supported_by_client Features supported by client.
         * @param array  $shipment_options Extra options.
         * @param bool   $is_return Whether this is a return shipment.
         * @param string $parent_shipment_id For return shipments: which shipment ID this is a return for.
         * @return array|\WP_Error REST response body.
         */
        public function purchase_labels($origin, $destination, $packages, $order_id, $selected_rate, $selected_rate_options, $hazmat, $customs, $user_meta = array(), $features_supported_by_client = array(), $shipment_options = array(), $is_return = false, $parent_shipment_id = null)
        {
        }
        /**
         * Purchase labels for many shipments in one batch.
         *
         * Each shipment is dispatched in parallel via the BatchableApiClient (concurrency cap 5).
         * Per-shipment failures are returned as WP_Error in the response map; they do not abort
         * the rest of the batch. Successful purchases are persisted to the order's fulfillment
         * record. The `is_return` email-receipt path used by the single-order flow is not yet
         * fired for bulk purchases (deferred).
         *
         * @param array $origin    Shared origin address for the whole batch.
         * @param array $shipments List of per-shipment payloads. Each item:
         *                         { order_id, destination, packages, selected_rate,
         *                           selected_rate_options, hazmat, customs,
         *                           shipment_options?, is_return?,
         *                           parent_shipment_id? }
         *
         * @return array|\WP_Error Map of `order_<id>` => label meta array (success) or WP_Error (failure).
         *                       Invalid shipments use a placeholder key `invalid_order_<index>`.
         *                       String prefix avoids JSON-array coercion in clients when keys are numeric,
         *                       and keeps the contract identifier-style for future Fulfillment-id keys.
         *                       Returns a top-level WP_Error (`fulfillment_api_required`) when the
         *                       fulfillment API is disabled. Bulk paths are fulfillment-only and
         *                       have no legacy fallback.
         */
        public function purchase_labels_batch(array $origin, array $shipments)
        {
        }
        /**
         * Send the grouped batch label-purchase request to the Connect Server.
         *
         * Uses the single-call endpoint (`POST /shipping/labels/batch`), which
         * produces ONE BillingDaddy purchase across all shipments. This keeps the
         * merchant-facing charge model consistent with the bulk-label flow: one batch
         * with N line items instead of N per-label charges.
         *
         * @param array      $origin             Shared origin (already stripped for the wire).
         * @param array      $shipments_payload  Per-shipment payloads keyed numerically.
         * @param int|string $payment_method_id  Saved payment method id (the settings store may
         *                                       return either an int or a string id depending on
         *                                       the storage backend; we forward as-is).
         * @param bool       $email_receipt      Whether the merchant has email receipts on.
         *
         * @return array<string, object|array|\WP_Error|null>|\WP_Error Per-order map keyed by `order_<id>`,
         *               or a transport-level WP_Error covering the whole batch. Map values may be:
         *               - object/array: a successful per-order entry the caller passes to the
         *                 labels-meta extractor;
         *               - WP_Error: a per-order failure the caller surfaces directly;
         *               - null: a missing order slot (caller substitutes `wcc_server_no_response`).
         */
        private function send_batch_purchase_request(array $origin, array $shipments_payload, $payment_method_id, bool $email_receipt)
        {
        }
        /**
         * Prepare an object-shaped Connect Server field for JSON encoding.
         *
         * Empty PHP arrays encode as JSON arrays (`[]`), but the Connect Server
         * validates fields such as `shipment_options` as JSON objects (`{}`).
         *
         * @param mixed $value Value to encode as an object-shaped field.
         * @return array|\stdClass
         */
        private function prepare_object_for_wire($value)
        {
        }
        /**
         * Convert an unexpected top-level batch response (no `order_<id>` keys) into a
         * WP_Error so the caller can fan it out to every shipment uniformly. Tries to
         * preserve the server's code/message when present.
         *
         * @param mixed $response Raw decoded response from the Connect Server.
         * @return \WP_Error
         */
        private function wp_error_from_unexpected_batch_response($response): \WP_Error
        {
        }
        /**
         * Detect a per-order error entry in the batch response.
         *
         * Connect Server returns errors as `{ error: { code, message } }`. The outer
         * entry and the inner `error` may each independently arrive as an associative
         * array or a stdClass depending on how the caller (or upstream code) decoded
         * the JSON, so all four combinations must be handled.
         *
         * @param mixed $entry Per-order entry from the response map.
         * @return bool
         */
        private function is_batch_error_entry($entry): bool
        {
        }
        /**
         * Read a field from a per-order error entry's `error` object regardless of
         * whether the outer entry or the inner error arrived as array or stdClass.
         * Returns empty string when the field is missing — the caller substitutes
         * default code/message.
         *
         * @param mixed  $entry Per-order entry from the response map.
         * @param string $field Field name on the inner `error` object.
         * @return string Field value, or empty string if missing.
         */
        private function resolve_entry_value($entry, string $field): string
        {
        }
        /**
         * Pull the inner `error` payload out of a per-order entry whose outer shape
         * may be either an array or a stdClass. Returns null when the entry is not
         * an error envelope. The inner value is returned as-is (array or object) so
         * the callers can inspect it without assuming a shape.
         *
         * Direct array-of-object indexing (`$arr['error']['code']`) is unsafe in
         * mixed-shape decodings — accessing array offsets on a stdClass throws a
         * PHP fatal — so this helper isolates the type-juggling.
         *
         * @param mixed $entry Per-order entry from the response map.
         * @return array|object|null Inner `error` payload, or null if absent.
         */
        private function extract_inner_error($entry)
        {
        }
        /**
         * Wrap a WP_Error with the same error_data shape the single-order path returns,
         * and restore the original carrier TOS code when FedExTosErrorInterceptor rewrote
         * it to the UPS DAP code so the API client's TOS passthrough could keep it typed.
         *
         * Used by both single-order and batch paths so the error contract is consistent.
         * Note: on the batch path FedEx TOS rewriting via FedExTosErrorInterceptor does not
         * yet fire (BatchableApiClient uses Requests::request_multiple, which bypasses WP_Http
         * hooks). UPS DAP TOS handling still works here; FedEx remap on the batch path is
         * pending.
         *
         * @param \WP_Error $label_response Error returned by the Connect Server response.
         * @return \WP_Error Normalized WP_Error.
         */
        private function restore_carrier_tos_error_code(\WP_Error $label_response): \WP_Error
        {
        }
        /**
         * Returns meta object for purchased labels to store with order.
         *
         * @param object $response           Purchase shipping label response from Connect Server.
         * @param array  $packages          Packages for purchase label request body.
         * @param array  $service_names     List of service names for packages.
         * @param int    $order_id           WooCommerce order ID.
         * @param string $parent_shipment_id For return labels: which shipment this is a return for.
         * @return array|\WP_Error Meta for purchased labels.
         */
        private function get_labels_meta_from_response($response, $packages, $service_names, $order_id, $parent_shipment_id = null)
        {
        }
        /**
         * Prepares packages request for Connect Server.
         *
         * @param array $packages Packages from purchase request.
         * @return array Prepared packages request payload.
         */
        private function prepare_packages_for_purchase($packages)
        {
        }
        /**
         * Store user meta.
         *
         * @param array $user_meta User meta array.
         */
        public function update_user_meta($user_meta)
        {
        }
        public function get_status($label_id)
        {
        }
        public function update_order_label(int $order_id, $label_data)
        {
        }
        /**
         *
         * @param $order_id int
         * @param $selected_meta [
         *    'selected_rate' => [],
         *   'hazmat' => []
         *   'origin' => []
         *   'destination' => []
         * ]
         *
         * @return array
         */
        private function store_selected_meta($order_id, $selected_meta): array
        {
        }
        /**
         * @return object|\WP_Error
         */
        public function refund_label(int $order_id, int $label_id)
        {
        }
        /**
         * Get shipments destinations.
         *
         * @param int $order_id Order ID.
         * @return array Array of destinations by shipment id.
         */
        public function get_shipments_destinations(int $order_id)
        {
        }
        /**
         * Get shipments origins.
         *
         * @param int $order_id Order ID.
         * @return array Array of origins by shipment id.
         */
        public function get_shipments_origins(int $order_id)
        {
        }
        /**
         * Get shipments from order, build it from order items if only 1 shipment is present.
         *
         * Todo: refactor in  WOOSHIP-1603
         *
         * @param int $order_id Order ID.
         * @return array Array of shipments.
         */
        public function get_shipments(int $order_id)
        {
        }
        /**
         * Ensure the order has shipments.
         *
         * @param int $order_id Order ID.
         * @return void
         */
        private function ensure_order_has_shipments($order_id)
        {
        }
        /**
         * Get label PDF as a temporary file for email attachment.
         *
         * @param int $label_id The label ID.
         * @param int $order_id The order ID.
         * @return string|\WP_Error Path to temporary PDF file or error.
         */
        private function get_label_pdf_for_email($label_id, $order_id)
        {
        }
        /**
         * Store purchased label data to fulfillment.
         *
         * @param \Automattic\WCShipping\Fulfillments\ShippingFulfillment $fulfillment Fulfillment object instance.
         * @param array               $purchased_labels_meta Array of purchased label metadata.
         *                            Structure: [
         *                                [
         *                                    'label_id' => string,
         *                                    'tracking' => string,
         *                                    'refundable_amount' => float,
         *                                    'created' => string (timestamp),
         *                                    'carrier_id' => string,
         *                                    'service_name' => string,
         *                                    'status' => string,
         *                                    'commercial_invoice_url' => string,
         *                                    'is_commercial_invoice_submitted_electronically' => bool,
         *                                    'package_name' => string,
         *                                    'is_letter' => bool,
         *                                    'product_names' => array of strings,
         *                                    'product_ids' => array of integers,
         *                                    'id' => string (internal shipment id)
         *                                ],
         *                                ...
         *                            ]
         * @param array               $selected_rate Selected shipping rate data.
         *                            Structure: [
         *                                'rate' => [
         *                                    'id' => string,
         *                                    'carrier_id' => string,
         *                                    'service_id' => string,
         *                                    'rate' => float,
         *                                    'currency' => string,
         *                                    'type' => string,
         *                                    ...additional rate properties from API response
         *                                ],
         *                                'parent' => array|null (parent rate data if applicable),
         *                                'shipment_options' => array (selected rate options)
         *                            ]
         * @param array               $hazmat_config HAZMAT configuration.
         *                            Structure: [
         *                                'category' => string (HAZMAT category),
         *                                'is_hazmat' => string ('true'|'false')
         *                            ]
         * @param array               $origin_address Origin address data.
         *                            Structure: [
         *                                'id' => string (address ID),
         *                                'is_verified' => bool,
         *                                'name' => string,
         *                                'company' => string,
         *                                'address' => string,
         *                                'address_2' => string,
         *                                'city' => string,
         *                                'state' => string,
         *                                'postcode' => string,
         *                                'country' => string,
         *                                'phone' => string
         *                            ]
         * @param array               $destination Destination address data.
         *                            Structure: [
         *                                'name' => string,
         *                                'company' => string,
         *                                'address' => string,
         *                                'address_2' => string,
         *                                'city' => string,
         *                                'state' => string,
         *                                'postcode' => string,
         *                                'country' => string,
         *                                'phone' => string
         *                            ]
         * @param array               $customs Customs form information.
         *                            Structure: [
         *                                'contents_type' => string,
         *                                'restriction_type' => string,
         *                                'restriction_comments' => string,
         *                                'non_delivery_option' => string,
         *                                'customs_items' => [
         *                                    [
         *                                        'description' => string,
         *                                        'quantity' => int,
         *                                        'value' => float,
         *                                        'weight' => float,
         *                                        'hs_tariff_number' => string,
         *                                        'origin_country' => string
         *                                    ],
         *                                    ...
         *                                ]
         *                            ]
         * @param array               $shipment_dates Shipment date information.
         *                            Structure: [
         *                                'shipping_date' => string|null (label date),
         *                                'estimated_delivery_date' => string|null (estimated delivery)
         *                            ]
         * @return array Response array with success status and stored data.
         */
        protected function store_purchased_label_to_fulfillment($fulfillment, $purchased_labels_meta, $selected_rate, $hazmat_config, $origin_address, $destination, $customs, $shipment_dates)
        {
        }
    }
    class LabelRefundRESTController extends \Automattic\WCShipping\WCShippingRESTController
    {
        protected $rest_base = 'label/refund/(?P<order_id>\d+)/(?P<label_id>\d+)';
        /**
         * @var LabelPurchaseService
         */
        private $purchase_service;
        public function __construct(\Automattic\WCShipping\LabelPurchase\LabelPurchaseService $purchase_service)
        {
        }
        /**
         * Register API routes.
         *
         * @return void
         */
        public function register_routes()
        {
        }
        public function post($request)
        {
        }
    }
    class LabelStatusController extends \Automattic\WCShipping\WCShippingRESTController
    {
        protected $rest_base = 'label/status/(?P<order_id>\d+)/(?P<label_id>\d+)';
        /**
         * @var LabelPurchaseService
         */
        protected $label_service;
        /**
         * @var \Automattic\WCShipping\Connect\WC_Connect_Logger
         */
        protected $logger;
        /**
         * @var \Automattic\WCShipping\Fulfillments\ShippingFulfillmentsDataStore
         */
        protected $shipping_fulfillments_data_store;
        public function __construct(\Automattic\WCShipping\LabelPurchase\LabelPurchaseService $label_service, \Automattic\WCShipping\Connect\WC_Connect_Logger $logger, \Automattic\WCShipping\Fulfillments\ShippingFulfillmentsDataStore $shipping_fulfillments_data_store)
        {
        }
        /**
         * Register API routes.
         *
         * @return void
         */
        public function register_routes()
        {
        }
        public function get_labels_status(\WP_REST_Request $request)
        {
        }
    }
    /**
     * Returns shipping context for a list of orders so the bulk-purchase modal
     * can render one row per order without having the merchant assemble the
     * destination, weight, and package details client-side.
     */
    class OrdersShippingContextRESTController extends \Automattic\WCShipping\WCShippingRESTController
    {
        /**
         * Maximum number of orders allowed in a single shipping-context request.
         *
         * Mirrors the cap on the batch rate-quote and batch purchase routes so
         * the modal can't be opened for more orders than the downstream batch
         * endpoints will accept.
         */
        public const BATCH_SIZE_CAP = 25;
        /**
         * REST base.
         *
         * @var string
         */
        protected $rest_base = 'orders/shipping-context';
        /**
         * Settings store. Used to recover legacy malformed JSON in package
         * meta, the same way the single-order label-purchase view does.
         *
         * @var \Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store|null
         */
        private $settings_store;
        /**
         * Fulfillment data store. Used to prevent duplicate labels for orders
         * that already have purchased labels.
         *
         * @var \Automattic\WCShipping\Fulfillments\ShippingFulfillmentsDataStore
         */
        private $shipping_fulfillments_data_store;
        /**
         * Constructor.
         *
         * @param \Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store|null $settings_store                  Optional settings store used for the legacy invalid-JSON recovery branch in the package-meta parser.
         * @param \Automattic\WCShipping\Fulfillments\ShippingFulfillmentsDataStore|null     $shipping_fulfillments_data_store Optional fulfillment data store.
         */
        public function __construct(?\Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store $settings_store = null, ?\Automattic\WCShipping\Fulfillments\ShippingFulfillmentsDataStore $shipping_fulfillments_data_store = null)
        {
        }
        /**
         * Register routes. Only registered when bulk_labels is enabled.
         *
         * @return void
         */
        public function register_routes()
        {
        }
        /**
         * Build per-order shipping context for the bulk-purchase modal.
         *
         * @param \WP_REST_Request $request REST request.
         * @return \WP_REST_Response|\WP_Error
         */
        public function get_shipping_context(\WP_REST_Request $request)
        {
        }
        /**
         * Check if an order already has a purchased shipping label.
         *
         * @param \Automattic\WCShipping\Fulfillments\ShippingFulfillment[] $fulfillments Fulfillment records for the order.
         * @return bool
         */
        private function order_already_has_shipping_label(array $fulfillments): bool
        {
        }
        /**
         * Load fulfillment records for an order once per request row.
         *
         * @param \WC_Order $order Order object.
         * @return \Automattic\WCShipping\Fulfillments\ShippingFulfillment[]
         */
        private function get_order_fulfillments(\WC_Order $order): array
        {
        }
        /**
         * Check if an order is already fully fulfilled.
         *
         * @param \Automattic\WCShipping\Fulfillments\ShippingFulfillment[] $fulfillments Fulfillment records for the order.
         * @return bool
         */
        private function order_is_fully_fulfilled(array $fulfillments): bool
        {
        }
        /**
         * Check if labels contain a non-refunded purchased label.
         *
         * @param array $labels Label records.
         * @return bool
         */
        private function labels_contain_active_purchase(array $labels): bool
        {
        }
        /**
         * Build the shipping-context payload for a single order.
         *
         * @param \WC_Order $order Order object.
         * @return array
         */
        private function build_order_context(\WC_Order $order): array
        {
        }
        /**
         * Total quantity of shippable items in the order.
         *
         * @param \WC_Order $order Order object.
         * @return int
         */
        private function get_item_count(\WC_Order $order): int
        {
        }
        /**
         * Customer display name. Prefer shipping name, fall back to billing.
         *
         * @param \WC_Order $order Order object.
         * @return string
         */
        private function get_customer_name(\WC_Order $order): string
        {
        }
        /**
         * Build the destination address payload. Empty fields are dropped so
         * the client can render the address compactly.
         *
         * @param \WC_Order $order Order object.
         * @return array<string,string>
         */
        private function get_destination(\WC_Order $order): array
        {
        }
        /**
         * Sum of (item weight × quantity) for shippable items in the order.
         *
         * @param \WC_Order $order Order object.
         * @return float
         */
        private function get_total_weight(\WC_Order $order): float
        {
        }
        /**
         * The package selected for the order, or null when nothing is on file.
         *
         * The "selected" package lives on the order's shipping method as the
         * `wcshipping_packages` meta. We surface the first one for the modal
         * row; multi-package orders aren't represented in the shell yet.
         *
         * @param \WC_Order $order Order object.
         * @return array|null
         */
        private function get_selected_package(\WC_Order $order): ?array
        {
        }
        /**
         * Parse the `wcshipping_packages` meta off a shipping method, handling
         * the same value shapes the single-order label-purchase view does:
         * native arrays (WC3+), serialized strings (WC2.6), legacy JSON, and
         * the invalid-JSON recovery branch.
         *
         * Mirrors `View::get_packaging_from_shipping_method()` so the modal
         * sees the chosen package for orders where the meta was stored in any
         * of those formats.
         *
         * @param mixed $shipping_method WC_Order_Item_Shipping or false.
         * @return array
         */
        private function parse_packages_meta($shipping_method): array
        {
        }
    }
    class View
    {
        /**
         * @var \Automattic\WCShipping\Connect\WC_Connect_API_Client
         */
        protected $api_client;
        /**
         * @var \Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store
         */
        protected $settings_store;
        /**
         * @var \Automattic\WCShipping\Connect\WC_Connect_Service_Schemas_Store
         */
        protected $service_schemas_store;
        /**
         * @var \Automattic\WCShipping\Connect\WC_Connect_Account_Settings
         */
        protected $account_settings;
        /**
         * @var \Automattic\WCShipping\Connect\WC_Connect_Package_Settings
         */
        protected $package_settings;
        /**
         * @var \Automattic\WCShipping\Connect\WC_Connect_Continents
         */
        protected $continents;
        /**
         * @var \Automattic\WCShipping\Shipments\ShipmentsService $shipments_service
         */
        private $shipments_service;
        /**
         * @var \Automattic\WCShipping\OriginAddresses\OriginAddressService $origin_address_service
         */
        private $origin_address_service;
        /**
         * @var ViewService
         */
        private $view_service;
        /**
         * @var \Automattic\WCShipping\Promo\PromoService
         */
        private $promo_service;
        /**
         * @var AddressNormalizationService
         */
        private $address_normalization_service;
        /**
         * @var \Automattic\WCShipping\Fulfillments\FulfillmentsService
         */
        private $fulfillments_service;
        /**
         * @var \Automattic\WCShipping\Fulfillments\ShippingFulfillmentsDataStore
         */
        private $shipping_fulfillments_data_store;
        public function __construct(\Automattic\WCShipping\Connect\WC_Connect_API_Client $api_client, \Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store $settings_store, \Automattic\WCShipping\Connect\WC_Connect_Service_Schemas_Store $service_schemas_store, \Automattic\WCShipping\Connect\WC_Connect_Payment_Methods_Store $payment_methods_store, \Automattic\WCShipping\Shipments\ShipmentsService $shipments_service, \Automattic\WCShipping\OriginAddresses\OriginAddressService $origin_address_service, \Automattic\WCShipping\LabelPurchase\ViewService $view_service, \Automattic\WCShipping\Connect\WC_Connect_Account_Settings $account_settings, \Automattic\WCShipping\Promo\PromoService $promo_service, \Automattic\WCShipping\LabelPurchase\AddressNormalizationService $address_normalization_service, \Automattic\WCShipping\Fulfillments\FulfillmentsService $fulfillments_service, \Automattic\WCShipping\Fulfillments\ShippingFulfillmentsDataStore $shipping_fulfillments_data_store)
        {
        }
        public function is_order_dhl_express_eligible(): bool
        {
        }
        /**
         * @param $post_order_or_id
         *
         * @return array|false
         */
        public function get_label_payload($post_order_or_id): array
        {
        }
        /**
         * Check if order meta boxes should be displayed.
         *
         * @param \WC_Order $order The order object.
         * @return bool|\WP_Error
         */
        public function throw_error_or_show_order_meta_box($order)
        {
        }
        public function get_meta_boxes_payload($order, $args)
        {
        }
        public function meta_boxes($post, $args)
        {
        }
        private function get_item_data(\WC_Order $order, $item)
        {
        }
        /**
         * @param \WC_Order_Item_Shipping|false $shipping_method
         */
        private function get_packaging_from_shipping_method($shipping_method): array
        {
        }
        private function get_packaging_metadata(\WC_Order $order): array
        {
        }
        private function get_name(\WC_Product $product): string
        {
        }
        private function get_selected_packages(\WC_Order $order): array
        {
        }
        private function get_all_items(\WC_Order $order): array
        {
        }
        private function get_selected_rates(\WC_Order $order): array
        {
        }
        private function format_address_for_api($address): array
        {
        }
        private function get_origin_address(): array
        {
        }
        private function get_destination_address(\WC_Order $order): array
        {
        }
        private function get_stored_data(\WC_Order $order, array $purchased_labels): array
        {
        }
        private function filter_items_needing_shipping(\WC_Order_Item $item): bool
        {
        }
        /**
         * Reduce items to sum their quantities.
         */
        private function reducer_items_quantity(int $sum, \WC_Order_Item $item): int
        {
        }
        /**
         * Reassign IDs to purchased labels if needed.
         * Assignment only happens if the label doesn't already have an id.
         *
         * @param array $label_data Array of label data to process.
         * @return array Label data with assigned IDs.
         */
        private function ensure_purchased_labels_have_shipment_ids($label_data)
        {
        }
    }
    class ViewService
    {
        /**
         * @var array Supported countries by USPS, see: https://webpmt.usps.gov/pmt010.cfm
         */
        private $supported_countries = \Automattic\WCShipping\Utilities\USPSTerritories::DOMESTIC_MAIL_TERRITORIES;
        /**
         * @var array Supported currencies
         */
        private $supported_currencies = array('USD');
        /**
         * @var \Automattic\WCShipping\Connect\WC_Connect_Account_Settings
         */
        private $account_settings;
        /**
         * @var \Automattic\WCShipping\Connect\WC_Connect_Service_Schemas_Store
         */
        private $service_schemas_store;
        /**
         * @param \Automattic\WCShipping\Connect\WC_Connect_Account_Settings      $account_settings
         * @param \Automattic\WCShipping\Connect\WC_Connect_Service_Schemas_Store $service_schemas_store
         */
        function __construct(\Automattic\WCShipping\Connect\WC_Connect_Account_Settings $account_settings, \Automattic\WCShipping\Connect\WC_Connect_Service_Schemas_Store $service_schemas_store)
        {
        }
        /**
         * Remove shipment information stored along the label for labels with PURCHASE_ERROR status based on the shipment id.
         * Only removes the meta if there are no other non-error labels with the same shipment id.
         *
         * @param array $purchased_labels [
         *    [ 'id' => {WCS shipment id}, 'status' => 'PURCHASED' ],
         *    [ 'id' => {WCS shipment id}, 'status' => 'PURCHASE_ERROR' ]
         *  ]
         * @param array $shipment_meta [ 'shipment_0' => [...], 'shipment_1' => [...] ]
         *
         * @return array
         */
        public function remove_meta_for_purchase_error(array $purchased_labels, array $shipment_meta): array
        {
        }
        /**
         * Remove shipment information stored along refunded labels.
         *
         * The purchased label will still contain all refund related data (e.g. status), but we will no longer be using the
         * selected rate itself, so we might as well filter it out immediately to make dependent logic simpler (e.g. React).
         *
         * @param array[] $purchased_labels {
         *     @type int      $id The WCS shipment ID (read: not label ID).
         *     @type int      $label_id The purchased label ID.
         *     @type object   $refund A conditional object that will only exist if the label has a refund request.
         *     ...
         * }
         * @param array[] $shipment_meta An array of shipment related meta-data. The key for these are "shipment_{id}".
         * @return array
         */
        public function remove_meta_for_refunds(array $purchased_labels, array $shipment_meta): array
        {
        }
        /**
         * Remove customs information snapshots for refunded shipments.
         *
         * @param array[] $purchased_labels {
         *     @type int      $id The WCS shipment ID (read: not label ID).
         *     @type object   $refund A conditional object that will only exist if the label has a refund request.
         *     ...
         * }
         * @param array[] $customs_information An array of customs form snapshots. The key for these are "shipment_{id}".
         * @return array
         */
        public function remove_customs_information_for_refunds(array $purchased_labels, array $customs_information): array
        {
        }
        /**
         * This function transform the WC_Order object to a representational JSON form for the React app.
         *
         * This is based on WooCommerce v3's get_order API woocommerce/includes/legacy/api/v3/class-wc-api-orders.php.
         *
         * @param \WC_Order $order The Woo Order we wish to prepare for the API.
         * @return array
         */
        public function get_order_data(\WC_Order $order): array
        {
        }
        /**
         * Check whether the given country code is supported for shipping labels.
         */
        public function is_supported_country(string $country_code): bool
        {
        }
        /**
         * Check whether the given currency code is supported for shipping labels.
         */
        public function is_supported_currency(string $currency_code): bool
        {
        }
        /**
         * Check whether the given order is eligible for shipping label creation - the order has at least one product that is:
         * - Shippable.
         * - Non-refunded.
         *
         * @param \WC_Order $order The order to check for shipping label creation eligibility.
         * @return bool Whether the given order is eligible for shipping label creation.
         */
        public function is_order_eligible_for_shipping_label_creation(\WC_Order $order): bool
        {
        }
        /**
         * Check whether the store is eligible for shipping label creation:
         * - Store currency is supported.
         * - Store country is supported.
         *
         * @return bool Whether the WC store is eligible for shipping label creation.
         */
        public function is_store_eligible_for_shipping_label_creation(): bool
        {
        }
        public function is_dhl_express_available(): bool
        {
        }
    }
}
namespace Automattic\WCShipping\LabelRate {
    /**
     * Class to label rate requests.
     */
    class LabelRateRESTController extends \Automattic\WCShipping\WCShippingRESTController
    {
        /**
         * Maximum number of orders allowed in a single batch rate-quote request.
         */
        private const BATCH_SIZE_CAP = 25;
        /**
         * Route
         *
         * @var string
         */
        protected $rest_base = 'label/rate';
        /**
         * Label rate service
         *
         * @var LabelRateService
         */
        protected $label_rate_service;
        /**
         * Class constructor.
         *
         * @param LabelRateService $label_rate_service Service that has logic for handling label rates.
         */
        public function __construct(\Automattic\WCShipping\LabelRate\LabelRateService $label_rate_service)
        {
        }
        /**
         * Register API routes.
         *
         * @return void
         */
        public function register_routes()
        {
        }
        /**
         * Define the schema for the label rate request.
         *
         * @return array
         */
        private function get_label_rate_properties()
        {
        }
        /**
         * Define the schema for the shipment object inside label rate request.
         *
         * @return array
         */
        private function get_shipment_properties()
        {
        }
        /**
         * Define the schema for the package object inside label rate request.
         *
         * @return array
         */
        private function get_package_properties()
        {
        }
        /**
         * Define the schema for the product item object inside package.
         *
         * @return array
         */
        private function get_product_properties()
        {
        }
        /**
         * Validate the address and phone number.
         *
         * @param array $param Request payload.
         *
         * @return boolean|\WP_Error
         */
        public function validate_address($param)
        {
        }
        /**
         * Sanitize the address.
         *
         * @param array $param Request payload.
         */
        public function sanitize_address($param)
        {
        }
        /**
         * The method that handles GET request.
         *
         * @param \WP_REST_Request $request Request object.
         * @return WP_REST_Response|\WP_Error
         */
        public function quote_rates(\WP_REST_Request $request)
        {
        }
        /**
         * Batch rate-quote handler. Accepts a single root `origin` and an `orders` array, and returns
         * rates keyed by `order_id`.
         *
         * Bulk batches are confined to a single origin per request: UPSDAP terms-of-service acceptance
         * is per-origin and the FedEx ToS is once per site, so per-order origins would only complicate
         * ToS gating without serving a real workflow. Each order carries the per-shipment fields:
         * `order_id`, `destination`, `packages`, and the optional `shipment_options` / `is_return`.
         *
         * A per-order failure (for example an invalid destination) is captured as an `error` entry
         * for that order rather than aborting the whole batch.
         *
         * @param \WP_REST_Request $request Request object.
         * @return WP_REST_Response|\WP_Error
         */
        public function quote_batch_rates(\WP_REST_Request $request)
        {
        }
        /**
         * Split a batch payload into structurally-valid orders and per-item shape errors.
         *
         * Each order must be an associative array with a positive `order_id` and the structural keys
         * the service dereferences without further checks: `destination`, `packages`. (Origin is
         * supplied at the batch root and validated separately.) Items failing this contract are
         * returned as a per-item WP_Error keyed by `order_id` when present, otherwise by a stable
         * `invalid_order_<index>` placeholder so callers can correlate errors back to their input position.
         *
         * @param array $orders Raw `orders` array from the batch request.
         * @return array{0: array, 1: array<string|int, \WP_Error>} Tuple of (valid orders, shape errors).
         */
        private function partition_batch_orders_by_shape(array $orders): array
        {
        }
    }
    /**
     * Handles all label rate logics.
     */
    class LabelRateService
    {
        /**
         * API client
         *
         * @var \Automattic\WCShipping\Connect\WC_Connect_API_Client $api_client
         */
        private $api_client;
        /**
         * WC connect logger.
         *
         * @var \Automattic\WCShipping\Connect\WC_Connect_Logger $logger
         */
        private $logger;
        /**
         * Settings store.
         *
         * @var \Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store $settings_store
         */
        protected $settings_store;
        /**
         * Prefix to add in package name for making requests with multiple rates.
         */
        public const SPECIAL_RATE_PREFIX = '_wcshipping_rate_type_';
        /**
         * Array of extra options to collect rates for.
         *
         * @var array $extra_rates
         */
        private const EXTRA_RATES = array('signature_required' => array('signature' => 'yes'), 'adult_signature_required' => array('signature' => 'adult'));
        private const UPSDAP_EXTRA_RATES = array('carbon_neutral' => true, 'additional_handling' => true, 'saturday_delivery' => true);
        /**
         * Class constructor.
         *
         * @param \Automattic\WCShipping\Connect\WC_Connect_API_Client             $api_client API client.
         * @param \Automattic\WCShipping\Connect\WC_Connect_Logger                 $logger Logger.
         * @param \Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store $settings_store Server settings store instance.
         */
        public function __construct(\Automattic\WCShipping\Connect\WC_Connect_API_Client $api_client, \Automattic\WCShipping\Connect\WC_Connect_Logger $logger, \Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store $settings_store)
        {
        }
        /**
         * Get standard rates along with rates for special options
         * that are defined in self::EXTRA_RATES.
         *
         * @param array $payload Request payload.
         * @return \WP_Error|\stdClass
         */
        public function get_all_rates($payload)
        {
        }
        /**
         * Get rates for many orders in parallel, against a single shared origin.
         *
         * Each order is prepared with the same per-order logic as get_all_rates() (payment method,
         * tax identifiers, customs updates, package multiplexing for signature/UPSDAP options),
         * with the shared `$origin` merged into each prepared payload before dispatch. The HTTP
         * requests to Connect Server are dispatched in parallel via the API client's
         * get_label_rates_batch() method. The per-order side-effects (customs metadata persistence)
         * still run sequentially in the prep loop to avoid product-meta write races.
         *
         * Bulk batches are confined to a single origin per request because UPSDAP terms-of-service
         * acceptance is per-origin and the FedEx ToS is once per site, so per-order origin would
         * complicate ToS gating without serving a real workflow.
         *
         * @param array $origin Shared origin address for all orders in the batch.
         * @param array $orders List of per-order rate-quote payloads (order_id, destination, packages, ...).
         *
         * @return array Map of order_id => parsed rates response (stdClass) or WP_Error.
         */
        public function get_all_rates_for_batch(array $origin, array $orders): array
        {
        }
        /**
         * Build the tax_identifiers payload entry from the configured settings.
         *
         * Tax identifiers are derived from store settings and do not vary per order, so the batch
         * flow can compute them once and reuse the result across every prepared payload.
         *
         * @return array
         */
        private function build_tax_identifiers(): array
        {
        }
        /**
         * Go through the packages from the payload and return a list of IDs.
         *
         * @param array $payload Request payload.
         */
        public function get_package_ids_from_payload($payload)
        {
        }
        /**
         * Go through the extra rates and append it to the list of packages.
         *
         * @param array $payload_packages Request payload.
         * @return array
         */
        public function get_packages_with_signature_required_options($payload_packages)
        {
        }
        /**
         * Merge default rates together with "signature required" and
         * "adult signature required" rates.
         *
         * The get_all_rates requests extra rate options and upsdap rate options as separate
         * packages. This function groups these separate packages
         * under the original the package name for easier parsing
         * on the frontend.
         *
         * @param \stdClass $rates Rate response for server.
         * @param array    $original_package_ids Package IDs.
         *
         * @return \stdClass Rates
         */
        public function merge_extra_rates($rates, $original_package_ids)
        {
        }
        /**
         * Make a rate request through our connect server client.
         *
         * @param object $payload Request payload.
         * @return \WP_Error|\stdClass
         */
        public function request_rates($payload)
        {
        }
        /**
         * International shipping requires custom forms. The frontend provides a `contents_type` settings to indicate this.
         * This function update product meta `wcshipping_customs_info` if there are custom form info, it also updates
         * the "value" to "total value".
         *
         * @param array $payload Request payload. This is a reference, any changes to payload will affect the caller.
         */
        public function update_product_and_payload_customs_information(&$payload)
        {
        }
        /**
         * Remove unnecessary parameters before passing it to the connect server.
         *
         * @param array $payload Request payload.
         * @return array
         */
        public function normalize_api_rate_request($payload)
        {
        }
        /**
         * Get packages with UPSDAP extra rate options.
         * This function will return an array of packages with UPSDAP extra rate options set.
         * These packages will be used to request UPSDAP rates.
         *
         * @param $payload_packages
         *
         * @return array
         */
        public function get_packages_with_extra_options_for_upsdap($payload_packages)
        {
        }
        /**
         * Get request payload packages.
         * The function will merge the original packages with packages with extra rate options and UPSDAP extra rate options.
         * These packages will be used to request rates.
         *
         * @param $packages
         */
        public function get_request_payload_packages($packages): array
        {
        }
    }
}
namespace Automattic\WCShipping\LabelSettings {
    class AccountSettingsRestController extends \Automattic\WCShipping\WCShippingRESTController
    {
        protected $rest_base = 'account/settings';
        private $settings_store;
        private $logger;
        /**
         * @var \Automattic\WCShipping\Connect\WC_Connect_Account_Settings
         */
        protected $account_settings;
        public function __construct(\Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store $settings_store, \Automattic\WCShipping\Connect\WC_Connect_Payment_Methods_Store $payment_methods_store, \Automattic\WCShipping\Connect\WC_Connect_Logger $logger)
        {
        }
        public function register_routes()
        {
        }
        public function get_account_settings()
        {
        }
        public function save_account_settings($request)
        {
        }
    }
    /**
     * REST API to handle all settings on the status page.
     */
    class SelfHelpRestController extends \Automattic\WCShipping\WCShippingRESTController
    {
        protected $rest_base = 'self-help';
        private $logger;
        public function __construct(\Automattic\WCShipping\Connect\WC_Connect_Logger $logger)
        {
        }
        public function register_routes()
        {
        }
        public function update_self_help_settings(\WP_REST_Request $request)
        {
        }
    }
    class ServiceDataRefreshRestController extends \Automattic\WCShipping\WCShippingRESTController
    {
        protected $rest_base = 'service-data-refresh';
        private \Automattic\WCShipping\Connect\WC_Connect_Service_Schemas_Store $services_schemas_store;
        public function __construct(\Automattic\WCShipping\Connect\WC_Connect_Service_Schemas_Store $services_schemas_store)
        {
        }
        public function register_routes()
        {
        }
        public function fetch_service_schemas_from_connect_server()
        {
        }
    }
}
namespace Automattic\WCShipping {
    class Loader
    {
        /**
         * @var \Automattic\WCShipping\Connect\WC_Connect_Logger
         */
        protected $logger;
        /**
         * @var \Automattic\WCShipping\Connect\WC_Connect_Logger
         */
        protected $shipping_logger;
        /**
         * @var \Automattic\WCShipping\Connect\WC_Connect_API_Client
         */
        protected $api_client;
        /**
         * @var \Automattic\WCShipping\Connect\WC_Connect_Service_Schemas_Store
         */
        protected $service_schemas_store;
        /**
         * @var \Automattic\WCShipping\ServiceData\ServiceSchemasFetcherService
         */
        protected $service_schemas_fetcher;
        /**
         * @var \Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store
         */
        protected $service_settings_store;
        /**
         * @var \Automattic\WCShipping\Connect\WC_Connect_Payment_Methods_Store
         */
        protected $payment_methods_store;
        /**
         * @var \Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Account_Settings_Controller
         */
        protected $rest_account_settings_controller;
        /**
         * @var \Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Packages_Controller
         */
        protected $rest_packages_controller;
        /**
         * @var \Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Services_Controller
         */
        protected $rest_services_controller;
        /**
         * @var \Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Self_Help_Controller
         */
        protected $rest_self_help_controller;
        /**
         * @var \Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Shipping_Label_Controller
         */
        protected $rest_shipping_label_controller;
        /**
         * @var \Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Shipping_Label_Status_Controller
         */
        protected $rest_shipping_label_status_controller;
        /**
         * @var \Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Shipping_Label_Refund_Controller
         */
        protected $rest_shipping_label_refund_controller;
        /**
         * @var \Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Shipping_Label_Preview_Controller
         */
        protected $rest_shipping_label_preview_controller;
        /**
         * @var \Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Shipping_Label_Print_Controller
         */
        protected $rest_shipping_label_print_controller;
        /**
         * @var \Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Shipping_Rates_Controller
         */
        protected $rest_shipping_rates_controller;
        /**
         * @var \Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Address_Normalization_Controller
         */
        protected $rest_address_normalization_controller;
        /**
         *
         * WC_REST_Connect_Shipping_Carrier_Types_Controller
         *
         * @var \Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Shipping_Carrier_Types_Controller
         */
        protected $rest_carrier_types_controller;
        /**
         * @var \Automattic\WCShipping\Connect\WC_Connect_Service_Schemas_Validator
         */
        protected $service_schemas_validator;
        /**
         * @var \Automattic\WCShipping\Connect\WC_Connect_Settings_Pages
         */
        protected $settings_pages;
        /**
         * @var \Automattic\WCShipping\Connect\WC_Connect_Help_View
         */
        protected $help_view;
        /**
         * @var \Automattic\WCShipping\LabelPurchase\View
         */
        protected $shipping_label;
        /**
         * @var \Automattic\WCShipping\Connect\WC_Connect_Shipping_Label
         */
        protected $legacy_shipping_label;
        /**
         * @var \Automattic\WCShipping\Connect\WC_Connect_Nux
         */
        protected $nux;
        /**
         * @var \Automattic\WCShipping\Banners\Banners
         */
        protected $feature_banners;
        /**
         * @var \Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Tos_Controller
         */
        protected $rest_tos_controller;
        /**
         * @var \Automattic\WCShipping\LabelRate\LabelRateService
         */
        protected $label_rate_service;
        /**
         * @var \Automattic\WCShipping\Promo\PromoService
         */
        protected $promo_service;
        /**
         * @var ?\Automattic\WCShipping\Fulfillments\FulfillmentsService
         */
        protected ?\Automattic\WCShipping\Fulfillments\FulfillmentsService $fulfillments_service = null;
        /**
         * @var ?\Automattic\WCShipping\LabelPurchase\LabelPurchaseService
         */
        protected ?\Automattic\WCShipping\LabelPurchase\LabelPurchaseService $label_purchase_service = null;
        /**
         * @var \Automattic\WCShipping\Migration\MigrationController
         */
        protected $migration_controller;
        /**
         * @var \Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Assets_Controller
         */
        protected $rest_assets_controller;
        /**
         * @var \Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Subscriptions_Controller
         */
        protected $rest_subscriptions_controller;
        /**
         * @var \Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Shipping_Carriers_Controller
         */
        protected $rest_carriers_controller;
        /**
         * @var \Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Subscription_Activate_Controller
         */
        protected $rest_subscription_activate_controller;
        /**
         * @var \Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Shipping_Carrier_Controller
         */
        protected $rest_carrier_controller;
        /**
         * @var \Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Shipping_Carrier_Delete_Controller
         */
        protected $rest_carrier_delete_controller;
        protected $services = array();
        protected $service_object_cache = array();
        protected $wc_connect_base_url;
        /**
         * @var \Automattic\WCShipping\LabelPurchase\AddressNormalizationService
         */
        protected $address_normalization_service;
        /**
         * @var \Automattic\WCShipping\LabelPurchase\ViewService
         */
        protected $view_service;
        /**
         * @var \Automattic\WCShipping\Checkout\CheckoutService
         */
        protected \Automattic\WCShipping\Checkout\CheckoutService $checkout_service;
        /**
         * @var \Automattic\WCShipping\Carrier\FedEx\FedExCarrierStrategyService
         */
        private $fedex_carrier_strategy_service;
        /**
         * @var \Automattic\WCShipping\Carrier\UPSDAP\UPSDAPCarrierStrategyService
         */
        protected $upsdap_carrier_strategy_service;
        /**
         * Shipping fulfillments data store instance.
         *
         * @var \Automattic\WCShipping\Fulfillments\ShippingFulfillmentsDataStore
         */
        protected $shipping_fulfillments_data_store;
        /**
         * Account settings instance.
         *
         * @var \Automattic\WCShipping\Connect\WC_Connect_Account_Settings
         */
        protected \Automattic\WCShipping\Connect\WC_Connect_Account_Settings $account_settings;
        /**
         * Origin address service instance.
         *
         * @var \Automattic\WCShipping\OriginAddresses\OriginAddressService
         */
        protected \Automattic\WCShipping\OriginAddresses\OriginAddressService $origin_address_service;
        /**
         * Plugin deactivation hook.
         */
        public static function plugin_deactivation()
        {
        }
        /**
         * Plugin activation hook.
         */
        public static function plugin_activation()
        {
        }
        public static function plugin_uninstall()
        {
        }
        /**
         * Update DB version and fire the updated action if plugin was updated.
         */
        public static function maybe_plugin_updated(): void
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
        public static function get_wcs_shipment_tracking_script_url()
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
        public static function get_wcs_shipment_tracking_style_url()
        {
        }
        public function wpcom_static_url($file)
        {
        }
        public function __construct()
        {
        }
        public function get_logger()
        {
        }
        public function set_logger(\Automattic\WCShipping\Connect\WC_Connect_Logger $logger)
        {
        }
        public function get_shipping_logger()
        {
        }
        public function set_shipping_logger(\Automattic\WCShipping\Connect\WC_Connect_Logger $logger)
        {
        }
        public function get_api_client()
        {
        }
        public function set_api_client(\Automattic\WCShipping\Connect\WC_Connect_API_Client $api_client)
        {
        }
        public function get_service_schemas_store()
        {
        }
        public function set_service_schemas_store(\Automattic\WCShipping\Connect\WC_Connect_Service_Schemas_Store $schemas_store)
        {
        }
        public function get_service_settings_store()
        {
        }
        public function set_service_settings_store(\Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store $settings_store)
        {
        }
        public function get_payment_methods_store()
        {
        }
        public function set_payment_methods_store(\Automattic\WCShipping\Connect\WC_Connect_Payment_Methods_Store $payment_methods_store)
        {
        }
        public function get_rest_account_settings_controller()
        {
        }
        public function set_rest_tos_controller(\Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Tos_Controller $rest_tos_controller)
        {
        }
        public function set_rest_assets_controller(\Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Assets_Controller $rest_assets_controller)
        {
        }
        public function set_rest_carriers_controller(\Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Shipping_Carriers_Controller $rest_carriers_controller)
        {
        }
        public function set_rest_subscriptions_controller(\Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Subscriptions_Controller $rest_subscriptions_controller)
        {
        }
        public function set_rest_subscription_activate_controller(\Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Subscription_Activate_Controller $rest_subscription_activate_controller)
        {
        }
        public function set_rest_carrier_controller(\Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Shipping_Carrier_Controller $rest_carrier_controller)
        {
        }
        public function set_rest_carrier_delete_controller(\Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Shipping_Carrier_Delete_Controller $rest_carrier_delete_controller)
        {
        }
        public function set_rest_packages_controller(\Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Packages_Controller $rest_packages_controller)
        {
        }
        public function set_rest_account_settings_controller(\Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Account_Settings_Controller $rest_account_settings_controller)
        {
        }
        public function get_rest_services_controller()
        {
        }
        public function set_rest_services_controller(\Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Services_Controller $rest_services_controller)
        {
        }
        public function get_rest_self_help_controller()
        {
        }
        public function set_rest_self_help_controller(\Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Self_Help_Controller $rest_self_help_controller)
        {
        }
        public function get_rest_shipping_label_controller()
        {
        }
        public function set_rest_shipping_label_controller(\Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Shipping_Label_Controller $rest_shipping_label_controller)
        {
        }
        public function get_rest_shipping_label_status_controller()
        {
        }
        public function set_rest_shipping_label_status_controller(\Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Shipping_Label_Status_Controller $rest_shipping_label_status_controller)
        {
        }
        public function get_rest_shipping_label_refund_controller()
        {
        }
        public function set_rest_shipping_label_refund_controller(\Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Shipping_Label_Refund_Controller $rest_shipping_label_refund_controller)
        {
        }
        public function get_rest_shipping_label_preview_controller()
        {
        }
        public function set_rest_shipping_label_preview_controller(\Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Shipping_Label_Preview_Controller $rest_shipping_label_preview_controller)
        {
        }
        public function get_rest_shipping_label_print_controller()
        {
        }
        public function set_rest_shipping_label_print_controller(\Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Shipping_Label_Print_Controller $rest_shipping_label_print_controller)
        {
        }
        public function set_rest_shipping_rates_controller(\Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Shipping_Rates_Controller $rest_shipping_rates_controller)
        {
        }
        public function set_rest_address_normalization_controller(\Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Address_Normalization_Controller $rest_address_normalization_controller)
        {
        }
        public function set_carrier_types_controller(\Automattic\WCShipping\LegacyAPIControllers\WC_REST_Connect_Shipping_Carrier_Types_Controller $rest_carrier_types_controller)
        {
        }
        public function get_carrier_types_controller()
        {
        }
        public function get_service_schemas_validator()
        {
        }
        public function set_service_schemas_validator(\Automattic\WCShipping\Connect\WC_Connect_Service_Schemas_Validator $validator)
        {
        }
        public function get_settings_pages()
        {
        }
        public function set_settings_pages(\Automattic\WCShipping\Connect\WC_Connect_Settings_Pages $settings_pages)
        {
        }
        public function get_help_view()
        {
        }
        public function set_help_view(\Automattic\WCShipping\Connect\WC_Connect_Help_View $help_view)
        {
        }
        public function set_shipping_label(\Automattic\WCShipping\LabelPurchase\View $shipping_label)
        {
        }
        public function get_shipping_label()
        {
        }
        public function set_legacy_shipping_label(\Automattic\WCShipping\Connect\WC_Connect_Shipping_Label $legacy_shipping_label)
        {
        }
        public function set_nux(\Automattic\WCShipping\Connect\WC_Connect_Nux $nux)
        {
        }
        public function set_feature_banners(\Automattic\WCShipping\Banners\Banners $feature_banners)
        {
        }
        public function get_feature_banners()
        {
        }
        /**
         * Get the checkout service instance.
         *
         * @return \Automattic\WCShipping\Checkout\CheckoutService
         */
        public function get_checkout_service(): \Automattic\WCShipping\Checkout\CheckoutService
        {
        }
        /**
         * Set the checkout service instance.
         *
         * @param \Automattic\WCShipping\Checkout\CheckoutService $checkout_service The checkout service instance.
         */
        public function set_checkout_service(\Automattic\WCShipping\Checkout\CheckoutService $checkout_service)
        {
        }
        public function on_plugins_loaded()
        {
        }
        /**
         * Deactivates the WooCommerce Shipping & Tax plugin.
         *
         * @return void
         */
        public function deactivate_wcst()
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
        /**
         * Initialise onboarding dependencies.
         *
         * @since $$next-version$$
         *
         * @return void
         */
        public function init_onboarding_dependencies()
        {
        }
        /**
         * Add WC Shipping to the list of WPCOM dependent plugins
         *
         * @return void
         */
        public function jetpack_on_plugins_loaded()
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
         * Extend WC Checkout.
         */
        public function extend_checkout()
        {
        }
        /**
         * Extend the Store API.
         */
        public function extend_store_api()
        {
        }
        /**
         * Load all plugin dependencies.
         */
        public function load_dependencies()
        {
        }
        /**
         * Add plugin action links.
         *
         * @param array $links Existing links.
         * @return array New links.
         */
        public function add_plugin_action_links($links)
        {
        }
        public function add_plugin_description_links($plugin_meta, $plugin_file)
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
         * Hook the REST API V2
         * Note that we cannot load our controller until this time, because prior to
         * rest_api_init firing, WP_REST_Controller is not yet defined
         */
        public function rest_api_v2_init()
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
         * @param \WP_HTTP_Response $response Result to send to the client. Usually a WP_REST_Response.
         * @param \WP_REST_Server   $handler  ResponseHandler instance (usually WP_REST_Server).
         * @param \WP_REST_Request  $request  Request used to generate the response.
         *
         * @return mixed - pass through value of $response.
         */
        public function log_rest_api_errors($response, $handler, $request)
        {
        }
        /**
         * Added to the wcshipping_shipping_service_settings filter, returns service settings
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
         * Add tracking info (if available) to completed emails using the woocommerce_email_after_order_table hook
         *
         * @param bool|\WC_Order|\WC_Order_Refund $order
         * @param                                 $sent_to_admin
         * @param                                 $plain_text
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
        public function woocommerce_payment_gateways($payment_gateways)
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
        /**
         * If we should display the shipment tracking meta box.
         * WC Shipment Tracking has it's own meta box, so we don't want to show ours if it's installed.
         *
         * @return bool
         */
        public function should_show_shipment_tracking_meta_box()
        {
        }
        /**
         * Add meta boxes to the order screen.
         *
         * WooCommerce has implemented their own version of "add_meta_boxes",
         * so it different from how e.g. Posts, Pages, and WooCommerce products work.
         *
         * @see Automattic\WooCommerce\Internal\Admin\Orders\Edit::setup
         *
         * @param \WC_Order $order The order object.
         *
         * @return void
         */
        public function add_order_meta_boxes($order)
        {
        }
        /**
         * Add legacy WordPress posts storage support for order meta boxes.
         *
         * WooCommerce introduced "High Performance Order Storage" in WooCommerce 8.2, where orders are implemented as
         * an independent entity type (read: not as a custom post type).
         *
         * This method functions as a "polyfill" for installations of WooCommerce that still use the legacy post storage
         * which used to be the default on older WC versions, and makes it easy for us
         * to remove this hook the day we no longer have to support the CPT version.
         *
         * @link https://developer.woocommerce.com/docs/how-to-enable-high-performance-order-storage/
         *
         * @param \WP_Post $post The order as a post object.
         *
         * @return void
         */
        public function add_order_meta_boxes_legacy_support($post)
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
        /*
         * Adds the Sift JS page tracker if needed. See the comments for the detailed logic.
         *
         * @return  void
         */
        public function add_sift_js_tracker()
        {
        }
        /**
         * Enqueue entry point scripts, localized data, and stylesheets.
         * Remember to call Automattic\WCShipping\DOM\Manipulation::create_root_script_element before calling do_action( 'wcshipping_enqueue_script' )
         * in your calling function.
         *
         * @param string $handle The name of the entry point script to enqueue.
         * @param array  $extra_args Extra data to pass to the entry point script, this gets added as localised data.
         *
         * @return void
         */
        public function wcshipping_enqueue_script($handle, $extra_args = array())
        {
        }
        /**
         * Register WCShipping plugin assets with proper HMR support.
         * This static method can be called externally to register
         * the woocommerce-shipping-plugin script with the correct URL based on whether
         * HMR is active or not.
         */
        public static function load_shipping_dependencies()
        {
        }
        /**
         * Enqueue the next module script and its dependencies.
         */
        public static function load_next_module()
        {
        }
        public function render_schema_notices()
        {
        }
        /**
         * Add a "deactivated" message to the plugin list table for WooCommerce Shipping & Tax
         *
         * @param string $plugin_file
         * @param array  $plugin_data
         */
        public function add_custom_message_to_wcst_plugin_list_entry()
        {
        }
        /**
         * Maybe sticks the meta box with $box_id id to the top of the order screen.
         *
         * If the meta box is not in the ordering thread, move it to the top, this is to respect users' ordering.
         *
         * @param string $meta_box_id The meta box ID (machine name) that we want to display at the top by default.
         *
         * @return void
         */
        private function maybe_move_meta_box_to_top(string $meta_box_id)
        {
        }
        /**
         * Generate meta box order structure for a specific screen.
         *
         * WordPress do not store any meta box order before a user has changes the order on a screen for the first time.
         * This means that we have to create the entire default order structure, so we can insert our own meta box.
         *
         * Sadly, there isn't a specific core function to create this order, but we can borrow the logic that renders
         * the default box order in "do_meta_boxes()" (which is also why we have to create this method to begin with).
         *
         * @since 1.0.0
         *
         * @see   do_meta_boxes
         * @global array $wp_meta_boxes
         *
         * @param string $screen      The screen identifier that represents which admin page is being rendered.
         * @param string $meta_box_id The meta box ID we want to inject.
         *
         * @return string[]
         */
        private function generate_meta_box_order_structure(string $screen, string $meta_box_id)
        {
        }
        /**
         * Handle dismiss action for the after-connection banner.
         *
         * This must be called during admin_init (before headers are sent) so that
         * wp_safe_redirect() can work. The banner's dismiss logic in WC_Connect_Nux::show_banner_after_connection()
         * runs during admin_notices, but at that point headers have already been sent
         * and the redirect fails silently on some admin pages (e.g., WooCommerce Orders).
         *
         * @return void
         */
        public function maybe_dismiss_after_connection_banner(): void
        {
        }
        /**
         * Determine if the migration is eligible to run and set the migration type if needed.
         *
         * @return void
         */
        public function determine_migration_eligibility(): void
        {
        }
        /**
         * Handle the form submission to start the data migration process.
         */
        public function handle_migration_form_submission()
        {
        }
        public function init_analytics()
        {
        }
        /**
         * Add return label email class to WooCommerce email classes.
         *
         * @param array $email_classes Array of email class names.
         * @return array Modified array of email class names.
         */
        public function add_return_label_email_class($email_classes)
        {
        }
        /**
         * Clean up temporary file.
         *
         * @param string $filepath Path to file to delete.
         */
        public function cleanup_temp_file($filepath)
        {
        }
        /**
         * Send return label email with delay (for labels that were in progress).
         *
         * @param int   $order_id Order ID.
         * @param array $label_meta Label metadata.
         */
        public function send_return_label_email_delayed($order_id, $label_meta)
        {
        }
        /**
         * @return \Automattic\WCShipping\LabelPurchase\LabelPurchaseService|null
         */
        private function get_label_purchase_service_instance()
        {
        }
    }
    /**
     * Logger class.
     */
    class Logger
    {
        /**
         * WC Logger
         *
         * @var \WC_Logger|null
         */
        private static ?\WC_Logger $logger = null;
        /**
         * Is debug enabled.
         *
         * @var bool
         */
        private static bool $is_debug_enabled = false;
        /**
         * Constructor.
         */
        private function __construct()
        {
        }
        /**
         * Initialize the logger.
         */
        private static function init(): void
        {
        }
        /**
         * Add a debug log entry.
         * Only logs if debug is enabled.
         *
         * @param string $message Message to display.
         * @param array  $data    Additional contextual data to pass.
         *
         * @return void
         */
        public static function debug(string $message, array $data = array())
        {
        }
        /**
         * Add a warning log entry.
         * Always logs regardless of debug setting, as warnings indicate potential issues.
         *
         * @param string $message Message to display.
         * @param array  $data    Additional contextual data to pass.
         *
         * @return void
         */
        public static function warning(string $message, array $data = array())
        {
        }
    }
}
namespace Automattic\WCShipping\Migration {
    /**
     * Class LegacyLabelMigrator
     *
     * This service will migrate label data from WCS&T to the WC Shipping.
     *
     * @package Automattic\WCShipping\Migration
     */
    class LegacyLabelMigrator implements \Automattic\WooCommerce\Internal\BatchProcessing\BatchProcessorInterface
    {
        const LEGACY_LABEL_META_KEY = 'wc_connect_labels';
        const WCSHIPPING_LABEL_META_KEY = 'wcshipping_labels';
        const DESTINATION_NORMALIZED = array('legacy' => '_wc_connect_destination_normalized', 'wcshipping' => \Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store::IS_DESTINATION_NORMALIZED_KEY);
        /**
         * @var \Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store $settings_store
         */
        private $settings_store;
        /**
         * @var int $total_pending_count
         */
        private $total_pending_count;
        /**
         * @var int $total_count
         */
        private $total_count;
        /**
         * @var int $total_processed_count
         */
        private $total_processed_count = 0;
        public function __construct(\Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store $settings_store)
        {
        }
        public function get_name(): string
        {
        }
        public function get_description(): string
        {
        }
        public function get_total_count(): int
        {
        }
        /**
         * Gets the total number of orders that still need their labels migrated.
         *
         * This method counts orders in two categories:
         * 1. Orders that only have legacy labels and no WC Shipping labels
         * 2. Orders that have both legacy and WC Shipping labels, but where some legacy labels
         *    haven't been migrated yet
         *
         * For orders with both types of labels, it checks each legacy label to see if it exists
         * in the WC Shipping labels. If any legacy label is missing, that order is counted.
         *
         * @return int The total number of orders that still need label migration
         */
        public function get_total_pending_count(): int
        {
        }
        /**
         * Gets the next batch of orders that need their labels migrated.
         *
         * This method retrieves orders in two steps:
         * 1. Gets orders that only have legacy labels (up to batch size)
         * 2. If more orders are needed to fill the batch, gets orders with both legacy and WC Shipping labels
         *    where some legacy labels haven't been migrated yet
         *
         * When the final batch is processed, it triggers the 'wcshipping_labels_migration_completed' action.
         *
         * @param int $size The maximum number of orders to return in this batch
         *
         * @return array Array of order IDs that need label migration
         */
        public function get_next_batch_to_process(int $size): array
        {
        }
        public function process_batch(array $order_ids): void
        {
        }
        public function get_default_batch_size(): int
        {
        }
        public function start(): void
        {
        }
        public function stop(): void
        {
        }
        /**
         * Check if there are any orders that need to be migrated.
         *
         * @return bool
         */
        public function needs_migration(): bool
        {
        }
        /**
         * Check if the migration is currently queued.
         *
         * @return bool
         */
        public function migration_queued(): bool
        {
        }
        /**
         * Add internal shipment id which is the index of the WCS shipment
         * Internal ids as representation of shipment id see LabelPurchaseService::get_labels_meta_from_response
         */
        private function add_internal_shipment_id(array $label, int $label_index): array
        {
        }
        /**
         * @param int[]           $product_ids
         * @param array<int, int> $product_id_to_item_map A map of product id to item id
         *
         * @return array
         */
        private function get_order_shipments(array $product_ids, array $product_id_to_item_map): array
        {
        }
        /**
         * Calculate the next available internal ID for a new shipping label.
         *
         * This function examines existing WC Shipping labels and finds the highest internal ID
         * among purchased labels, then returns that value plus 1. This ensures new labels get
         * unique, sequential internal IDs that don't conflict with existing ones.
         *
         * @param array $existing_wcshipping_labels Array of existing WC Shipping label data
         * @return int The next available internal ID to use
         */
        private function get_internal_id_offset(array $existing_wcshipping_labels): int
        {
        }
        /**
         * Creates a mapping between product IDs and order item IDs.
         * For variable products, uses the variation ID as the key if it exists.
         *
         * @param array $order_items Array of WC_Order_Item objects.
         * @return array Map of product/variation IDs to order item IDs.
         */
        private function get_product_id_to_item_map(array $order_items): array
        {
        }
        /**
         * Initialize shipments data by either creating new shipments from the first purchased label's product IDs,
         * or using existing shipments if available.
         *
         * @param array $existing_shipments Array of existing shipments data.
         * @param array $existing_wcshipping_labels Array of existing WC Shipping labels.
         * @param array $product_id_to_item_map Map of product IDs to order item IDs.
         * @return array Array containing initialized shipments and next shipment index.
         */
        private function initialize_shipments_data(array $existing_shipments, array $existing_wcshipping_labels, array $product_id_to_item_map): array
        {
        }
        /**
         * @internal For internal use only.
         */
        public function convert_item_and_copy_label_data(\WC_Order $order): void
        {
        }
    }
    /**
     * Class LegacySettingsMigrator
     *
     * This service helps to migrate settings data from WCS&T to the WC Shipping.
     *
     * @package Automattic\WCShipping\Migration
     */
    class LegacySettingsMigrator
    {
        public const PURCHASE_SETTINGS = array('label_box_id' => array('legacy' => 'wc_connect_last_box_id', 'wcshipping' => 'wcshipping_last_box_id'), 'last_service_id' => array('legacy' => 'wc_connect_last_service_id', 'wcshipping' => 'wcshipping_last_service_id'), 'last_carrier_id' => array('legacy' => 'wc_connect_last_carrier_id', 'wcshipping' => 'wcshipping_last_carrier_id'));
        public const OPTIONS = array('legacy' => 'wc_connect_options', 'wcshipping' => 'wcshipping_options');
        public const ORIGIN_ADDRESS = array('legacy' => 'wc_connect_origin_address', 'wcshipping' => 'wcshipping_origin_addresses');
        public const NON_MIGRATABLE_SETTINGS = array(
            'tos' => 'tos_accepted',
            'guid' => 'store_guid',
            'banner' => 'should_display_nux_after_jp_cxn_banner',
            // All payment related data is something we fetch automatically in WC Shipping as well,
            // and their will automatically happen after a WPCOM connection is established, so they
            // will block settings migration from happening if e.g. a merchant visits the settings
            // page before doing a migration.
            'pm_url' => 'add_payment_method_url',
            'pms' => 'payment_methods',
            'smm' => 'shipping_methods_migrated',
        );
        public const WCST_PACKAGE_COMPATIBILITY_CLASS_FQN = 'WC_Connect_Compatibility_WCShipping_Packages';
        public const WCST_PACKAGE_COMPATIBILITY_FILTERS = array(
            /* Item: array( 'filter name', 'callback' ) */
            array('option_wc_connect_options', array(self::WCST_PACKAGE_COMPATIBILITY_CLASS_FQN, 'intercept_packages_read')),
            array('option_wc_connect_options', array(self::WCST_PACKAGE_COMPATIBILITY_CLASS_FQN, 'intercept_predefined_packages_read')),
        );
        public function migrate_all(): void
        {
        }
        public function needs_migration(): bool
        {
        }
        /**
         * @internal For internal use only.
         */
        public function migrate_settings(): void
        {
        }
        /**
         * @return int[]
         */
        private function get_users_with_legacy_purchase_settings(): array
        {
        }
        /**
         * @internal For internal use only.
         */
        public function migrate_label_purchase_settings(): void
        {
        }
        /**
         * @internal For internal use only.
         */
        public function migrate_origin_address(): void
        {
        }
        /**
         * Gets the value of `wc_connect_options`, deregistering WCS&T's packages setting redirection if needed.
         *
         * WCS&T 2.8.2 introduced a compatibility layer which will detect reads of and writes to `wc_connect_options`
         * and replace the option's `packages` and `predefined_packages` keys with those of `wcshipping_options`.
         *
         * This was done to keep packages between WCS&T and WCShipping in sync. Keeping them synchronized is necessary
         * for WCS&T's package manager (which WCShipping surfaces) and WCShipping's package selection field to display
         * the same packages.
         *
         * @return array
         */
        private function get_legacy_options(): array
        {
        }
    }
    /**
     * Class MigrationController
     *
     * A controller to manage all the data migration from WCS&T to WooCommerce Shipping.
     *
     * @package Automattic\WCShipping\Migration
     */
    class MigrationController
    {
        private \Automattic\WCShipping\Migration\LegacyLabelMigrator $label_migrator;
        private \Automattic\WCShipping\Migration\LegacySettingsMigrator $settings_migrator;
        public function __construct(\Automattic\WCShipping\Migration\LegacyLabelMigrator $label_migrator, \Automattic\WCShipping\Migration\LegacySettingsMigrator $settings_migrator)
        {
        }
        /**
         * Register LegacyLabelMigrator to WC BatchProcessor, this is how a third-party plugin provides its own batch-processor
         *
         * @param string|mixed $processor
         * @param string|mixed $processor_class_name
         *
         * @return LegacyLabelMigrator|mixed
         */
        public function get_label_batch_processor($processor, $processor_class_name)
        {
        }
        /**
         * Migrate all the data from WCS&T to WooCommerce Shipping.
         */
        public function migrate_all(): void
        {
        }
        /**
         * Migrate the settings from WCS&T to WooCommerce Shipping.
         */
        public function migrate_settings(): void
        {
        }
        /**
         * Migrate the labels from WCS&T to WooCommerce Shipping.
         */
        public function migrate_labels(): void
        {
        }
        /**
         * Add the tool to start or stop the background process that converts order coupon metadata entries.
         *
         * @param array $tools Old tools array.
         * @return array Updated tools array.
         */
        public function handle_woocommerce_debug_tools(array $tools): array
        {
        }
        /**
         * Check if there are any migrations pending.
         *
         * @return bool
         */
        public function needs_migration(): bool
        {
        }
        /**
         * Check if there are labels migrations pending.
         *
         * @return bool
         */
        public function needs_labels_migration(): bool
        {
        }
        /**
         * Check if there are settings migrations pending.
         *
         * @return bool
         */
        public function needs_settings_migration(): bool
        {
        }
        /**
         * Get progress of the labels migration.
         *
         * @return array
         */
        public function get_labels_migration_progress(): int
        {
        }
    }
    /**
     * Class MigrationNotices
     */
    class MigrationNotices
    {
        /**
         * @var MigrationController $migration_controller
         */
        private static $migration_controller;
        /**
         * Constructor.
         */
        public static function init(\Automattic\WCShipping\Migration\MigrationController $migration_controller): void
        {
        }
        /**
         * Output migration notices.
         */
        public static function output_migration_notices(): void
        {
        }
        /**
         * Installation completed notice. No data migration is needed.
         */
        public static function installation_completed_notice(): void
        {
        }
        /**
         * Check if a notice should be shown.
         *
         * @param string $notice The notice to check.
         * @return bool Wehther the notice should be shown.
         */
        public static function should_show_notice($notice): bool
        {
        }
        /**
         * Data migration required notice.
         */
        public static function data_migration_required_notice(): void
        {
        }
        /**
         * Data migration started notice.
         */
        public static function data_migration_started_notice()
        {
        }
        private static function data_migration_progress()
        {
        }
        /**
         * Data migration completed notice.
         */
        public static function data_migration_completed_notice()
        {
        }
        public static function dismiss_migration_completed_notice()
        {
        }
        public static function enqueue_migration_notice_dismiss_script()
        {
        }
    }
    /**
     * Class for WCS&T to WCShipping migration states.
     */
    class MigrationState
    {
        // These are used for WCS&T to WCShipping migration. 1-11 is not applicable to WCShipping but we include the whole range for clarity.
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
        public const INSTALLATION_COMPLETED = 12;
        public const DATA_MIGRATION_STARTED = 13;
        public const DATA_MIGRATION_COMPLETED = 14;
        public const LABELS_TYPE = 'labels';
        public const SETTINGS_TYPE = 'settings';
        public const ALL_TYPE = 'all';
        public const NO_TYPE = 'none';
        /**
         * Constructor.
         *
         * @return void
         */
        public static function init(): void
        {
        }
        /**
         * Check if the given state is valid.
         *
         * @param int $state The migration state.
         *
         * @return bool
         */
        public static function is_valid_state(int $state): bool
        {
        }
        /**
         * Check if the given type is valid.
         *
         * @param string $type The migration type.
         */
        public static function is_valid_type(string $type): bool
        {
        }
        /**
         * Set the migration state in the database.
         *
         * @param int $state The migration state.
         * @return void
         */
        public static function set_state(int $state): void
        {
        }
        /**
         * Get the migration state from the database.
         *
         * @return int|bool Current state in the DB or false if not set.
         */
        public static function get_state(): int
        {
        }
        /**
         * Get data migration required bool from DB.
         *
         * @return bool True if migration is required, false otherwise.
         */
        public static function is_data_migration_required(): bool
        {
        }
        /**
         * Set the data migration required type in the database.
         *
         * @param string $type The data migration required type.
         * @return void
         */
        public static function set_data_migration_required_type(string $type): void
        {
        }
        /**
         * Get the number of data migration processes to run from the database.
         *
         * @return int The number data migration processes to run, -1 if nothing has been set.
         */
        public static function get_data_migration_processes_to_run(): int
        {
        }
        /**
         * Get the data migration required type from the database.
         *
         * @return string|false The data migration required type, or false if not set.
         */
        public static function get_data_migration_required_type()
        {
        }
        /**
         * Determine if the migration is complete and set the state accordingly.
         */
        public static function maybe_mark_migration_complete(): void
        {
        }
        /**
         * When label migration finished, decrement the processes to run and mark the migration as complete if needed.
         */
        public static function labels_migration_completed(): void
        {
        }
        /**
         * When settings migration finished, decrement the processes to run and mark the migration as complete if needed.
         */
        public static function settings_migration_completed(): void
        {
        }
    }
}
namespace Automattic\WCShipping\Onboarding {
    /**
     * Class SettingsPage.
     */
    class SettingsPage
    {
        /**
         * WC Shipping setting store.
         *
         * @var \Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store
         */
        protected $service_settings_store;
        /**
         * View service that combines a lot of internal dependencies.
         *
         * @var \Automattic\WCShipping\LabelPurchase\ViewService
         */
        protected $view_service;
        /**
         * Constructor
         *
         * @param \Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store $service_settings_store WC Shipping setting store.
         * @param \Automattic\WCShipping\LabelPurchase\ViewService                       $view_service View service that combines a lot of internal dependencies.
         * @return void
         */
        public function __construct(\Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store $service_settings_store, \Automattic\WCShipping\LabelPurchase\ViewService $view_service)
        {
        }
        /**
         * Register hooks used to initiate the onboarding settings page
         *
         * @return void
         */
        public function register_hooks()
        {
        }
        /**
         * Register settings page section content
         *
         * @return void
         */
        public function section_content()
        {
        }
        /**
         * Get redirect location after WPCOM authorization
         *
         * @return string
         */
        private function get_wpcom_connection_redirect_url()
        {
        }
    }
}
namespace Automattic\WCShipping\OriginAddresses {
    class OriginAddressService
    {
        public function get_origin_addresses()
        {
        }
        public function update_origin_addresses($address)
        {
        }
        public function delete_origin_address($id)
        {
        }
        /**
         * Get the default origin address for outbound shipments.
         *
         * @return array|null
         */
        public function get_default_outbound_address()
        {
        }
        /**
         * Get the default return address for return shipments.
         *
         * @return array|null
         */
        public function get_default_return_address()
        {
        }
        /**
         * Seed the origin addresses with the store address on first run.
         *
         * This is a one-time operation: if origin addresses have already been
         * persisted, the store address update is ignored so that merchant
         * edits to their ship-from address are never silently overwritten.
         *
         * After the initial seed, {@see on_woocommerce_store_address_option_updated()}
         * persists the wcshipping_main_origin_store_address_drift option so
         * {@see is_main_origin_address_in_sync_with_store()} only reflects
         * store-address-initiated drift (not sender-only edits).
         *
         * @return void
         */
        public function sync_origin_addresses_with_woocommerce_store_address()
        {
        }
        /**
         * Runs after WooCommerce store address options change. Seeds origin addresses
         * on first run, then either auto-syncs or tracks drift depending on context.
         *
         * In the standard WooCommerce admin (non-CIAB), the store-seeded sender
         * address is automatically kept in sync with the store address so merchants
         * always ship from their current store location without manual intervention.
         *
         * In CIAB (Next Admin), drift is only persisted so the admin UI can surface
         * a notice and let the merchant decide whether to sync.
         *
         * General settings may update several options in one request; each fires this
         * hook. {@see persist_main_origin_store_address_drift_flag()} skips writing
         * when the computed drift value is unchanged to avoid redundant option updates.
         *
         * @param mixed  $old_value Previous option value.
         * @param mixed  $value     New option value.
         * @param string $option   Option name.
         * @return void
         */
        public function on_woocommerce_store_address_option_updated($old_value, $value, $option)
        {
        }
        /**
         * Check whether the UI should treat the main sender as in sync with the store address.
         *
         * When {@see persist_main_origin_store_address_drift_flag()} has run, reads the
         * persisted drift flag so a manual sender edit alone does not surface the
         * "store address changed" warning. When the flag is unset (legacy installs),
         * falls back to comparing live store settings with the store_details origin.
         *
         * @return bool True when no store-initiated drift warning should be shown.
         */
        public function is_main_origin_address_in_sync_with_store(): bool
        {
        }
        /**
         * Whether the store_details origin address matches current WooCommerce store address fields.
         *
         * When the merchant has removed or renamed the store-seeded sender row,
         * there is nothing left to sync back to — treat that as "in sync" so the
         * UI does not nag with an unactionable warning (the sync REST endpoint
         * would 404 because {@see sync_store_details_address()} returns null).
         *
         * @return bool
         */
        private function addresses_physically_match_store_and_store_details(): bool
        {
        }
        /**
         * @return array|null The origin address with id store_details, or null.
         */
        private function find_store_details_origin_address(): ?array
        {
        }
        /**
         * Persists drift after WooCommerce general/store address options change.
         *
         * @return void
         */
        private function persist_main_origin_store_address_drift_flag(): void
        {
        }
        /**
         * After the store_details sender is saved, clear drift only when it matches the store again.
         * Never sets drift to yes from a sender edit alone.
         *
         * @param array $saved_store_details_address Saved store_details row.
         * @return void
         */
        private function maybe_clear_main_origin_store_address_drift_after_store_details_save(array $saved_store_details_address): void
        {
        }
        /**
         * Mark the main origin sender as in sync with the store address.
         *
         * Used when the merchant intentionally updates the store-seeded sender from
         * the store-address drift notice flow and confirms the change via the editor.
         *
         * @return void
         */
        public function mark_main_origin_store_address_in_sync(): void
        {
        }
        /**
         * Compute an MD5 hash over the physical location fields of an address.
         *
         * Address lines (address_1, address_2) are combined before hashing so that
         * different splits of the same street address still produce the same hash.
         *
         * @param array $address Address array.
         * @return string 32-character hex MD5 hash.
         */
        private function compute_address_hash(array $address): string
        {
        }
        /**
         * Return the current WooCommerce store address as a single formatted string.
         *
         * Example: "456 Oak Ave, Chicago, IL 60601"
         *
         * @return string
         */
        public function get_formatted_store_address(): string
        {
        }
        /**
         * Return a draft of the store-seeded sender row with the current store
         * address applied to its physical fields, without persisting anything.
         *
         * @return array|null Draft address array, or null when no store-seeded address exists.
         */
        public function get_store_details_origin_address_draft(): ?array
        {
        }
        /**
         * Physical address fields copied from the store settings when syncing the
         * store-seeded sender. Non-address fields (name, company, email, phone,
         * first/last name, verification flags, default flags) on the existing row
         * are preserved so merchant customisations are not wiped out.
         */
        private const PHYSICAL_ADDRESS_FIELDS = array('address_1', 'address_2', 'city', 'state', 'postcode', 'country');
        /**
         * Overwrite the store-seeded origin address with the current WooCommerce store address.
         *
         * Finds the origin address whose id is "store_details" and replaces only
         * its physical address fields with the current store settings, preserving
         * everything else (name, company, email, phone, default flags, etc.).
         *
         * @return array|null The updated address array, or null when no store-seeded address exists.
         */
        public function sync_store_details_address(): ?array
        {
        }
        /**
         * Returns the Store's address to be included in the shipping settings script parameters
         *
         * @return mixed
         */
        private function get_store_details()
        {
        }
    }
}
namespace Automattic\WCShipping\PackageAssignment {
    /**
     * REST controller that suggests a single shipping package per order for a
     * batch of orders, gated by the bulk_labels feature flag.
     */
    class PackageAssignmentRESTController extends \Automattic\WCShipping\WCShippingRESTController
    {
        /**
         * Maximum number of orders allowed in a single auto-assign request.
         */
        private const BATCH_SIZE_CAP = 25;
        /**
         * REST base.
         *
         * @var string
         */
        protected $rest_base = 'label/auto-assign-packages';
        /**
         * Service that resolves the package suggestion for each order.
         *
         * @var PackageAssignmentService
         */
        private $service;
        /**
         * Constructor.
         *
         * @param PackageAssignmentService $service Package assignment service.
         */
        public function __construct(\Automattic\WCShipping\PackageAssignment\PackageAssignmentService $service)
        {
        }
        /**
         * Register API routes. Only registers when the bulk_labels feature flag is on.
         *
         * @return void
         */
        public function register_routes()
        {
        }
        /**
         * Handle POST /wcshipping/v1/label/auto-assign-packages.
         *
         * @param \WP_REST_Request $request REST request.
         * @return \WP_REST_Response|\WP_Error REST response with per-order assignment results, or a validation error.
         */
        public function auto_assign_packages(\WP_REST_Request $request)
        {
        }
        /**
         * Build a 400 response for an invalid batch payload.
         *
         * The four input-validation branches in `auto_assign_packages()` all
         * surface the same `invalid_batch_payload` error code at HTTP 400; this
         * helper keeps the construction in one place so the code, status, and
         * shape stay aligned even if the per-branch message text drifts.
         *
         * @param string $message Translated, branch-specific error message.
         *
         * @return \WP_Error
         */
        private function invalid_batch_payload(string $message): \WP_Error
        {
        }
    }
    /**
     * Resolves a suggested package for each order in a bulk request.
     */
    class PackageAssignmentService
    {
        /** Status: a single configured package can hold every shippable item in the order. */
        const STATUS_FIT = 'fit';
        /** Status: items would need more than one package, or a single item is too large for any configured package. */
        const STATUS_NEEDS_SPLIT = 'needs_split';
        /** Status: at least one shippable product is missing length, width, height, or weight. */
        const STATUS_MISSING_DIMENSIONS = 'missing_dimensions';
        /** Status: the store has no configured packages to choose from. */
        const STATUS_NO_PACKAGES = 'no_packages';
        /** Status: the order has no items requiring shipping (e.g. all items are virtual or downloadable). */
        const STATUS_NO_SHIPPABLE_ITEMS = 'no_shippable_items';
        /** Status: an unexpected condition prevented the service from producing a suggestion. */
        const STATUS_ERROR = 'error';
        /**
         * Settings store providing the merchant's package configuration.
         *
         * @var \Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store
         */
        private $settings_store;
        /**
         * Schemas store used to resolve enabled predefined package IDs against
         * the cached predefined-packages schema.
         *
         * @var \Automattic\WCShipping\Connect\WC_Connect_Service_Schemas_Store
         */
        private $service_schemas_store;
        /**
         * Logger used to record skipped orders and unexpected packer failures.
         *
         * @var \Automattic\WCShipping\Connect\WC_Connect_Logger
         */
        private $logger;
        /**
         * Constructor.
         *
         * @param \Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store $settings_store        Settings store.
         * @param \Automattic\WCShipping\Connect\WC_Connect_Service_Schemas_Store  $service_schemas_store Schemas store.
         * @param \Automattic\WCShipping\Connect\WC_Connect_Logger                 $logger                Logger.
         */
        public function __construct(\Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store $settings_store, \Automattic\WCShipping\Connect\WC_Connect_Service_Schemas_Store $service_schemas_store, \Automattic\WCShipping\Connect\WC_Connect_Logger $logger)
        {
        }
        /**
         * Suggest a package for each order id.
         *
         * @param int[] $order_ids Order ids to process.
         *
         * @return array<int, array{status: string, package_id?: string, package_name?: string, service_id?: string, reason?: string}> Map of order id to assignment result. `service_id` is only set when the picked package is a predefined carrier package.
         */
        public function assign_for_orders(array $order_ids): array
        {
        }
        /**
         * Suggest a package for a single order.
         *
         * @param int   $order_id            Order id.
         * @param array $configured_packages Normalized merchant package list produced by `build_configured_packages()`. Built once per batch in `assign_for_orders()` and passed through verbatim, so this method does not re-walk the schema.
         *
         * @return array{status: string, package_id?: string, package_name?: string, service_id?: string, reason?: string} `service_id` is only set when the picked package is a predefined carrier package.
         */
        private function assign_for_order(int $order_id, array $configured_packages): array
        {
        }
        /**
         * Run the boxpacker against the configured boxes/items and return the
         * resulting list of `WooCommerce\BoxPacker\Package` objects. Wrapped in
         * an output buffer because the dvdoug packer's
         * `Abstract_Packer::maybe_display_packing_error()` echoes
         * "Packing error: ..." straight to stdout for any user with
         * `manage_options`, which would corrupt the JSON REST response.
         *
         * The captured stdout is logged (with the order id for context) instead
         * of being discarded, so production packing diagnostics survive into the
         * Connect Server logs without leaking into the REST body.
         *
         * Marked `protected` so tests can override it to simulate an unexpected
         * exception thrown deep in the packer; the production implementation
         * intentionally does its own error handling so the caller's `\Throwable`
         * catch only fires on truly unexpected fatal errors.
         *
         * @param mixed $boxpack  The packer instance returned by `WC_Boxpack::get_packer()`.
         * @param int   $order_id Order id, used to tag any captured packer stdout.
         * @return array
         * @throws \Throwable Re-thrown after capturing and logging any stdout the packer emitted before failing.
         */
        protected function pack_with_boxpack($boxpack, int $order_id = 0): array
        {
        }
        /**
         * Filter order line items to those that need shipping.
         *
         * @param \WC_Order $order Order instance.
         *
         * @return array<int, array{product: \WC_Product, quantity: int}>
         */
        private function get_shippable_items(\WC_Order $order): array
        {
        }
        /**
         * Build a normalized list of packages the merchant has configured for
         * label purchase: custom packages saved against the store and predefined
         * carrier packages explicitly enabled in the store's predefined-package
         * settings.
         *
         * Returns a flat list of `{ id, name, length, width, height, box_weight,
         * max_weight }` ready to feed into `WC_Boxpack`. Packages whose dimension
         * string cannot be parsed are skipped (logged via WC_Connect_Logger)
         * rather than silently coerced to 0x0x0 boxes that would fit anything in
         * the packer.
         *
         * Crucially this does NOT use `WC_Connect_Service_Settings_Store::get_package_lookup()`
         * because that helper returns every predefined definition from the cached
         * schema regardless of whether the merchant enabled it. Auto-assign must
         * only consider packages the merchant actually picked.
         *
         * The `id` field is a stable internal id used to look up the picked box
         * after packing: for custom packages it is `"custom:{package_id}"`, for
         * predefined packages it is `"predef:{service_id}:{package_id}"`, so two
         * carriers sharing a predefined id (e.g. both USPS and FedEx defining
         * `"medium_box"`) cannot collide and a custom id cannot accidentally
         * shadow a predefined id either. The merchant-facing `package_id`
         * returned to clients is the original saved id, kept in `package_id`.
         * Predefined entries also carry `service_id` so callers can scope the
         * picked id back to its carrier; custom entries leave it null because
         * custom packages have no service scope.
         *
         * Candidates are filtered to `type === 'box'` for MVP. The dvdoug packer
         * is a rigid-box model and produces false fit results for envelopes,
         * paks, tubes, etc. Non-box types are skipped silently with a log entry
         * via WC_Connect_Logger so we can audit the gap later.
         * TODO(WOOSHIP-2164+): re-add non-box types with type-specific handling.
         *
         * The return value also carries a `had_box_candidate` flag: true if the
         * merchant configured at least one entry whose `type` was `'box'`,
         * regardless of whether its dimensions later parsed cleanly. The caller
         * uses this to distinguish "no packages configured for this store"
         * (true MVP gap) from "boxes were configured but unparseable"
         * (a data-repair issue).
         *
         * `had_unresolved_predefined` is true when the merchant enabled at least
         * one predefined package id that cannot be found in the cached schema.
         * That is not the same as "no packages configured"; the saved selection
         * exists, but the schema needs to be refreshed or repaired.
         *
         * The predefined-packages schema is fetched once per batch in
         * `assign_for_orders()` and passed in via `$schema`.
         *
         * The schema can arrive as either nested `stdClass` objects or
         * associative arrays depending on how the upstream payload was decoded.
         * Each level is cast to `(array)` before reading so the loop produces
         * the same candidate set in both shapes. The cast is a no-op when the
         * value is already an array, and on an object it returns the public
         * property values keyed by name, which matches the existing object-
         * access path verbatim for the test fixtures.
         *
         * @param array             $custom_packages    Custom packages list as returned by `WC_Connect_Service_Settings_Store::get_packages()`.
         * @param array             $enabled_predefined Map of service id to enabled predefined ids as returned by `WC_Connect_Service_Settings_Store::get_predefined_packages()`.
         * @param array|object|null $schema             Predefined packages schema as returned by `WC_Connect_Service_Schemas_Store::get_predefined_packages_schema()`.
         *
         * @return array{packages: array<int, array{id: string, package_id: string, service_id: ?string, name: string, length: float, width: float, height: float, box_weight: float, max_weight: float}>, had_box_candidate: bool, had_unresolved_predefined: bool}
         */
        private function build_configured_packages(array $custom_packages, array $enabled_predefined, $schema): array
        {
        }
        /**
         * Return true if at least one predefined package id is enabled.
         *
         * `get_predefined_packages()` returns a map of service id to id list
         * (e.g. `[ 'usps' => [], 'fedex' => [] ]`), which is non-empty as a
         * map even when every inner list is empty. Walk the inner lists so
         * callers correctly recognize "zero enabled predefined ids".
         *
         * @param mixed $enabled_predefined Map of service id to enabled predefined ids, or any non-array value (treated as "nothing enabled").
         *
         * @return bool
         */
        private static function has_enabled_predefined($enabled_predefined): bool
        {
        }
        /**
         * Resolve the predefined package type from schema data.
         *
         * Older/current predefined package schemas may omit `type` and only carry
         * `is_letter`. Treat `is_letter: false` as a box so enabled carrier boxes
         * remain usable with those schemas.
         *
         * @param array $definition Predefined package definition from the schema.
         *
         * @return string Package type.
         */
        private function get_predefined_package_type(array $definition): string
        {
        }
        /**
         * Interpret bool-like schema values.
         *
         * @param mixed $value Schema value.
         *
         * @return bool
         */
        private function is_schema_truthy($value): bool
        {
        }
        /**
         * Parse an "L x W x H" dimension string into floats.
         *
         * Returns null if the string does not match the expected shape so callers
         * can skip the package rather than feeding 0x0x0 into the packer.
         *
         * @param string $dimensions Dimension string, e.g. "10 x 10 x 10".
         *
         * @return array{length: float, width: float, height: float}|null
         */
        private function parse_dimensions(string $dimensions): ?array
        {
        }
        /**
         * Return the name of the first product whose length, width, height, or
         * weight is missing or non-positive. The status constant
         * STATUS_MISSING_DIMENSIONS keeps its public value for client compatibility,
         * but the helper is named to reflect that it inspects all four metrics.
         *
         * @param array<int, array{product: \WC_Product, quantity: int}> $shippable_items Items.
         *
         * @return string|null
         */
        private function find_item_with_invalid_metrics(array $shippable_items): ?string
        {
        }
    }
}
namespace Automattic\WCShipping\Packages {
    class Package
    {
        const TYPE_BOX = 'box';
        const TYPE_ENVELOPE = 'envelope';
        private string $id;
        private string $name;
        private string $dimensions;
        private float $length;
        private float $width;
        private float $height;
        private float $box_weight;
        private float $max_weight;
        private string $type;
        private bool $is_user_defined = true;
        /**
         * Creates an instance of the class from package data provided as an array.
         *
         * @param array $data   Package data.
         * @param bool  $strict Whether dimensions must be exactly three plain numbers. Use it for new input.
         *
         * @throws PackageValidationException
         */
        public static function from_array(array $data, bool $strict = false): \Automattic\WCShipping\Packages\Package
        {
        }
        /**
         * @throws PackageValidationException
         */
        public function __construct(?string $id, string $name, string $type, string $dimensions, float $box_weight, ?float $max_weight = 0.0)
        {
        }
        /**
         * @throws \InvalidArgumentException
         */
        public function __get($property)
        {
        }
        /**
         * @return array{
         *     id: string,
         *     name: string,
         *     dimensions: string,
         *     boxWeight: float,
         *     maxWeight: float,
         *     type: string,
         *     is_user_defined: true
         * }
         */
        public function to_array(): array
        {
        }
        /**
         * @return array{
         *     id: string,
         *     name: string,
         *     inner_dimensions: string,
         *     box_weight: float,
         *     max_weight: float,
         *     is_letter: bool,
         *     is_user_defined: bool
         * }
         */
        public function to_wcst_array(): array
        {
        }
        public function to_api_array(): array
        {
        }
        /**
         * Generate an ID if the package does not have one yet.
         *
         * We need a unique ID for each package to be able to identify them as a box_id
         * to prepopulate the saved templates form, and other types of situations where
         * uniqueness is required.
         *
         * This introduces backwards support for migrated WCS&T packages that do not have an ID
         * and older version of WC Shipping that had a bug not setting an ID.
         *
         * @since 1.2.2 Moved this method here from `WC_Connect_Service_Settings_Store`.
         * @since 1.1.2 This logic was introduced in `WC_Connect_Service_Settings_Store`.
         *
         * @return void
         */
        private function set_or_generate_id($id)
        {
        }
        /**
         * Throws if the package instance has invalid data.
         *
         * @return void
         * @throws PackageValidationException
         */
        private function validate()
        {
        }
        /**
         * @param array $data Package data as array.
         *
         * @return array Package data as array with WCS&T keys mapped to WCShip keys.
         */
        private static function map_wcst_keys_to_wcshipping_keys(array $data): array
        {
        }
        /**
         * Throws if the array of package data to create a Package from is invalid.
         *
         * @return void
         * @throws PackageValidationException
         */
        private static function validate_from_array_input(array $data)
        {
        }
        /**
         * Read a dimensions string as three finite non-negative numbers and return it as "L x W x H".
         *
         * Stored packages can hold legacy values such as `10cm x 5cm x 3cm` or `1,000 x 5 x 3`, so by
         * default each part keeps the leading number the float cast always used, and extra parts are
         * ignored. Strict mode, for new input, accepts exactly three plain numbers.
         *
         * Negative values are invalid in both modes: the settings page saves the full list back, so a
         * readable negative package would make every save fail strict validation.
         *
         * @param string $dimensions Raw dimensions string.
         * @param bool   $strict     Whether the value must be exactly three plain numbers.
         * @return string|null Canonical "L x W x H" string, or null when it cannot be read.
         */
        private static function normalize_dimensions(string $dimensions, bool $strict = false): ?string
        {
        }
        /**
         * Read one dimension the way the float cast in `set_length_width_height_from_dimensions()` does.
         *
         * @param string $part   One part of a dimensions string.
         * @param bool   $strict Whether the part must be a plain numeric string.
         * @return string|null The number as a string, or null when the part holds no finite non-negative number.
         */
        private static function read_dimension(string $part, bool $strict): ?string
        {
        }
        /**
         * Convert dimensions from "LxWxH" to "length", "width", "height".
         *
         * @param string $dimensions The dimensions string in the format "LxWxH".
         *
         * @return array{length: string, width: string, height: string}
         */
        private function dimensions_to_length_width_height(string $dimensions): array
        {
        }
        /**
         * Set the length, width, and height from the dimensions.
         *
         * @param string $dimensions The dimensions string in the format "LxWxH".
         *
         * @return void
         */
        private function set_length_width_height_from_dimensions(string $dimensions)
        {
        }
    }
    /**
     * Handles CRUD operations on saved packages.
     */
    class PackageRepository
    {
        /**
         * Gets custom packages from the database.
         *
         * @return array[]
         */
        public function get_custom_packages()
        {
        }
        /**
         * Reads the raw `packages` option.
         *
         * The option is not guaranteed to hold an array. It accepted unvalidated REST input before
         * #898, `LegacySettingsMigrator` merges the WCS&T option into it verbatim, and anything on the
         * site can write to it. `PackagesAsArraysSanitizer` type hints its first argument as `array`,
         * so reading the option unguarded is a fatal on every path that lists packages - the packages
         * screen, the label-purchase package picker and the eligibility check, not just the REST route.
         *
         * Every read of the option goes through here so the guard cannot be missing on one path.
         *
         * @return array Raw stored packages, or an empty array when the option holds anything else.
         */
        private function get_stored_packages(): array
        {
        }
        /**
         * Adds packages to the collection of existing custom packages in the database.
         *
         * @param array[] $new_packages Array of packages-as-arrays.
         *
         * @throws PackageValidationException If at least one of the provided packages doesn't pass validation.
         */
        public function add_custom_packages(array $new_packages)
        {
        }
        /**
         * Replaces the collection of existing custom packages in the database with the provided packages.
         *
         * Stored packages that cannot be read (see `log_unreadable_stored_packages()`) are not in the
         * provided list, because `get_custom_packages()` filters them out, so the save drops them.
         *
         * @param array[] $packages Array of packages-as-arrays.
         *
         * @throws PackageValidationException If at least one of the provided packages doesn't pass validation.
         */
        public function replace_custom_packages(array $packages)
        {
        }
        /**
         * Logs a warning for each stored package the save that follows will drop.
         *
         * A package with a negative, infinite or non-numeric dimension was never a usable box, so
         * nothing usable is lost, but the removal must not be silent.
         */
        private function log_unreadable_stored_packages(): void
        {
        }
    }
    class PackageValidationException extends \Automattic\WCShipping\Exceptions\RESTRequestException
    {
    }
    /**
     * Accepts a collection of packages as arrays, sanitizes them, and returns them as WCShip/WCS&T formatted arrays.
     *
     * It might seem weird to use this class to create `Package` objects from an array of packages as arrays (i.e.
     * package data instead of `Package` instances) only to convert them back into an array of packages as arrays.
     *
     * The reason this happens is that the constructor of the `Package` class contains some validation rules
     * as well as logic to map the keys used by WCS&T and some earlier WCShip versions to a consistent format.
     */
    class PackagesAsArraysSanitizer
    {
        private array $packages;
        /**
         * Construct from an array of packages as arrays (i.e. from package data instead of `Package `instances).
         *
         * The `$throw_on_failure` parameter is especially useful when reading package data
         * from the database which might fail to the validation of the `Package` class
         * in an unexpected way.
         *
         * @param array $packages_as_arrays Array of packages to map to Package instances.
         * @param bool  $throw_on_failure Whether to throw an exception if mapping to a Package failed. Pass `true` only
         *                                for new input: it also validates dimensions strictly.
         *
         * @throws PackageValidationException Rethrows `Package` validation if `throw_on_failure === true`.
         */
        public function __construct(array $packages_as_arrays, bool $throw_on_failure = true)
        {
        }
        /**
         * Return an array of packages as arrays after sanitizing to WCShip format.
         *
         * @return array{
         *     id: string,
         *     name: string,
         *     dimensions: string,
         *     boxWeight: float,
         *     maxWeight: float,
         *     type: string,
         *     is_user_defined: bool
         * }[]
         */
        public function to_packages_as_arrays(): array
        {
        }
        /**
         * Return an array of packages as arrays after sanitizing to WCS&T format.
         *
         * @return array{
         *     id: string,
         *     name: string,
         *     dimensions: string,
         *     box_weight: float,
         *     max_weight: float,
         *     is_letter: bool,
         *     is_user_defined: bool
         * }[]
         */
        public function to_packages_as_wcst_arrays(): array
        {
        }
        /**
         * Return an array of packages as arrays after sanitizing to new API format.
         *
         * @return array{
         *     id: string,
         *     name: string,
         *     dimensions: string,
         *     length: float,
         *     width: float,
         *     height: float,
         *     box_weight: float,
         *     is_letter: bool,
         *     is_user_defined: bool
         * }[]
         */
        public function to_packages_as_api_arrays(): array
        {
        }
        /**
         * Map one entry of the collection to a Package, rejecting or skipping an entry that is not an array.
         *
         * @param mixed $entry            One entry of the packages collection.
         * @param bool  $throw_on_failure Whether to throw instead of skipping an invalid entry.
         *
         * @throws PackageValidationException If the entry is invalid and `throw_on_failure === true`.
         */
        private function map_entry_to_package($entry, bool $throw_on_failure): ?\Automattic\WCShipping\Packages\Package
        {
        }
        private function map_to_package(array $package_as_array, bool $throw_on_failure): ?\Automattic\WCShipping\Packages\Package
        {
        }
    }
    class PackagesRESTController extends \Automattic\WCShipping\WCShippingRESTController
    {
        protected $rest_base = 'packages';
        private $settings_store;
        /**
         * @var \Automattic\WCShipping\Connect\WC_Connect_Package_Settings
         */
        protected $package_settings;
        public function __construct(\Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store $settings_store, \Automattic\WCShipping\Connect\WC_Connect_Package_Settings $package_settings)
        {
        }
        public function register_routes()
        {
        }
        /**
         * Get the package settings.
         *
         * @return \WP_Error|\WP_REST_Response
         */
        public function get(\WP_REST_Request $request)
        {
        }
        /**
         * Update the existing custom and predefined packages.
         *
         * @param  \WP_REST_Request $request The request body contains the custom/predefined packages to replace.
         * @return \WP_REST_Response
         */
        public function put($request)
        {
        }
        /**
         * Create custom and/or predefined packages.
         *
         * @param  \WP_REST_Request $request The request body contains the custom/predefined packages to create.
         * @return \WP_Error|\WP_REST_Response
         */
        public function post($request)
        {
        }
        /**
         * Delete a saved package.
         *
         * @param  \WP_REST_Request $request The request parameters contain the package type and id to delete.
         * @return \WP_Error|\WP_REST_Response
         */
        public function delete(\WP_REST_Request $request)
        {
        }
    }
}
namespace Automattic\WCShipping\Promo {
    /**
     * REST controller for handling promotion-related actions.
     */
    class PromoRESTController extends \Automattic\WCShipping\WCShippingRESTController
    {
        /**
         * Route
         *
         * @var string
         */
        protected $rest_base = 'promo';
        /**
         * The promo service instance.
         *
         * @var PromoService
         */
        protected $promo_service;
        /**
         * Constructor.
         *
         * @param PromoService $promo_service The promo service instance.
         */
        public function __construct(\Automattic\WCShipping\Promo\PromoService $promo_service)
        {
        }
        /**
         * Register API routes.
         *
         * @return void
         */
        public function register_routes()
        {
        }
        /**
         * Dismiss a promotion.
         *
         * @param \WP_REST_Request $request Full details about the request.
         * @return \WP_REST_Response
         */
        public function dismiss_promotion(\WP_REST_Request $request)
        {
        }
    }
    /**
     * Handles all promotion logics.
     */
    class PromoService
    {
        /**
         * Schema Store instance
         *
         * @var \Automattic\WCShipping\Connect\WC_Connect_Service_Schemas_Store
         */
        protected $schemas_store;
        /**
         * Settings Store instance
         *
         * @var \Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store
         */
        protected $settings_store;
        /**
         * Class constructor.
         *
         * @param \Automattic\WCShipping\Connect\WC_Connect_Service_Schemas_Store  $schemas_store   Schema store instance.
         * @param \Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store $settings_store  Settings store instance.
         */
        public function __construct(\Automattic\WCShipping\Connect\WC_Connect_Service_Schemas_Store $schemas_store, \Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store $settings_store)
        {
        }
        /**
         * Get promotion from service schemas.
         *
         * @return object|null Promotion object or null if none exists
         */
        public function get_promotion()
        {
        }
        /**
         * Check if a promotion is dismissed by type and ID.
         *
         * @param string $type The type of promotion ('notice' | 'banner').
         * @param string $id   The ID of the promotion.
         *
         * @return bool True if the promotion is dismissed, false otherwise.
         */
        public function is_promotion_dismissed(string $type, string $id): bool
        {
        }
        /**
         * Dismiss a promotion by type and ID.
         *
         * @param string $type The type of promotion ('notice' | 'banner').
         * @param string $id   The ID of the promotion.
         */
        public function dismiss_promotion(string $type, string $id)
        {
        }
        /**
         * Maybe show promotion on the WooCommerce Orders page.
         */
        public function maybe_show_promotion_notice()
        {
        }
        /**
         * Handle the dismissal of the Orders page notice.
         */
        public function handle_promotion_notice_dismiss()
        {
        }
        /**
         * Maybe decrement promotion remaining count when a label is purchased.
         *
         * @param int    $order_id       The order ID.
         * @param object $new_label_data The new label data.
         */
        public function maybe_decrement_promotion_remaining(int $order_id, object $new_label_data)
        {
        }
        /**
         * Update the promotion schema in the service schemas store.
         *
         * @param object $promotion The updated promotion object.
         */
        protected function update_promotion_schema(object $promotion)
        {
        }
    }
}
namespace Automattic\WCShipping\RestApi\Routes\V2 {
    /**
     * AbstractController class.
     */
    abstract class AbstractController extends \Automattic\WCShipping\WCShippingRESTController
    {
        /**
         * Shared error codes.
         */
        const INVALID_ID = 'invalid_id';
        const RESOURCE_EXISTS = 'resource_exists';
        const CANNOT_CREATE = 'cannot_create';
        const CANNOT_DELETE = 'cannot_delete';
        const CANNOT_TRASH = 'cannot_trash';
        const TRASH_NOT_SUPPORTED = 'trash_not_supported';
        /**
         * Route namespace.
         *
         * @var string
         */
        protected $namespace = 'wcshipping/v2';
        /**
         * Get the item response.
         *
         * @param mixed           $item    WooCommerce representation of the item.
         * @param \WP_REST_Request $request Request object.
         * @return array The item response.
         */
        abstract protected function get_item_response($item, \WP_REST_Request $request): array;
        /**
         * Prepares the item for the REST response. Controllers do not need to override this method as they can define a
         * get_item_response method to prepare items. This method will take care of filter hooks.
         *
         * @param mixed           $item    WordPress representation of the item.
         * @param \WP_REST_Request $request Request object.
         * @return WP_REST_Response|\WP_Error Response object on success, or WP_Error object on failure.
         */
        public function prepare_item_for_response($item, $request)
        {
        }
        /**
         * Get the error prefix for errors.
         *
         * Example: woocommerce_rest_api_v4_orders_
         *
         * @return string The error prefix.
         * @since 10.2.0
         */
        protected function get_error_prefix(): string
        {
        }
        /**
         * Get route response when something went wrong.
         *
         * @param string $error_code String based error code.
         * @param string $error_message User facing error message.
         * @param int    $http_status_code HTTP status. Defaults to 400.
         * @param array  $additional_data Extra data (key value pairs) to expose in the error response.
         * @return \WP_Error WP Error object.
         * @since 10.2.0
         */
        protected function get_route_error_response(string $error_code, string $error_message, int $http_status_code = \WP_Http::BAD_REQUEST, array $additional_data = array()): \WP_Error
        {
        }
        /**
         * Get route response when something went wrong and the supplied error is a WP_Error.
         *
         * @param \WP_Error $error_object The WP_Error object containing the error.
         * @param int      $http_status_code HTTP status. Defaults to 400.
         * @param array    $additional_data Extra data (key value pairs) to expose in the error response.
         * @return \WP_Error WP Error object.
         * @since 10.2.0
         */
        protected function get_route_error_response_from_object(\WP_Error $error_object, int $http_status_code = \WP_Http::BAD_REQUEST, array $additional_data = array()): \WP_Error
        {
        }
        /**
         * Returns an authentication error for a given HTTP verb.
         *
         * @param string $method HTTP method.
         * @return \WP_Error|false WP Error object or false if no error is found.
         */
        protected function get_authentication_error_by_method(string $method)
        {
        }
        /**
         * Get an error response for a given error code.
         *
         * @param string $error_code The error code.
         * @return \WP_Error WP Error object.
         */
        protected function get_route_error_by_code(string $error_code): \WP_Error
        {
        }
    }
    /**
     * Abstract REST Schema for WCShipping REST API V2.
     *
     * Provides common functionality for all V2 schema controllers including
     * property generation, context filtering, and validation.
     *
     * @see Automattic\WooCommerce\Internal\RestApi\Routes\V4\AbstractSchema
     */
    abstract class AbstractSchema
    {
        /**
         * The schema item identifier.
         *
         * @var string
         */
        const IDENTIFIER = '';
        /**
         * Context for the item schema - view, edit, and embed.
         *
         * @var array
         */
        const VIEW_EDIT_EMBED_CONTEXT = array('view', 'edit', 'embed');
        /**
         * Context for the item schema - view and edit only.
         *
         * @var array
         */
        const VIEW_EDIT_CONTEXT = array('view', 'edit');
        /**
         * Get the item schema.
         *
         * @return array The item schema.
         * @since 10.2.0
         */
        public function get_item_schema(): array
        {
        }
        /**
         * Get the item response.
         *
         * @param mixed           $item WordPress representation of the item.
         * @param \WP_REST_Request $request Request object.
         * @param array           $include_fields Fields to include in the response.
         * @return array The item response.
         */
        abstract public function get_item_response($item, \WP_REST_Request $request, array $include_fields = array()): array;
        /**
         * Return all properties for the item schema.
         *
         * @return array The schema properties.
         * @since 10.2.0
         */
        public function get_item_schema_properties(): array
        {
        }
        /**
         * Return all writable properties for the item schema.
         *
         * @return array The schema properties.
         * @since 10.2.0
         */
        public function get_writable_item_schema_properties(): array
        {
        }
        /**
         * Filter schema properties to only return writable ones.
         *
         * @param array $schema The schema property to check.
         * @return bool True if the property is writable, false otherwise.
         * @since 10.2.0
         */
        protected function filter_writable_props(array $schema): bool
        {
        }
    }
}
namespace Automattic\WCShipping\RestApi\Routes\V2\Addresses {
    /**
     * Address Schema.
     */
    class AddressSchema extends \Automattic\WCShipping\RestApi\Routes\V2\AbstractSchema
    {
        /**
         * The schema identifier.
         *
         * @var string
         */
        const IDENTIFIER = 'shipping_method';
        /**
         * Return all properties for the item schema
         *
         * @return array
         */
        public function get_item_schema_properties(): array
        {
        }
        /**
         * Get the item response for an address.
         *
         * @param mixed           $address Address.
         * @param \WP_REST_Request $request Request object.
         * @param array           $include_fields Fields to include in the response.
         * @return array The item response.
         */
        public function get_item_response($address, \WP_REST_Request $request, array $include_fields = array()): array
        {
        }
    }
    /**
     * Addresses Controller.
     */
    class Controller extends \Automattic\WCShipping\RestApi\Routes\V2\AbstractController
    {
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'addresses';
        /**
         * Origin address service instance.
         *
         * @var \Automattic\WCShipping\OriginAddresses\OriginAddressService
         */
        protected $origin_address_service;
        /**
         * Schema class for this route.
         *
         * @var AddressSchema
         */
        protected $item_schema;
        /**
         * Controller constructor.
         *
         * @param \Automattic\WCShipping\OriginAddresses\OriginAddressService $origin_address_service Origin address service.
         */
        public function __construct(\Automattic\WCShipping\OriginAddresses\OriginAddressService $origin_address_service)
        {
        }
        /**
         * Get the item schema.
         *
         * @return array
         */
        protected function get_schema(): array
        {
        }
        /**
         * Get the item response.
         *
         * @param mixed           $item    Item data.
         * @param \WP_REST_Request $request Request object.
         * @return array
         */
        protected function get_item_response($item, \WP_REST_Request $request): array
        {
        }
        /**
         * Register the routes for addresses.
         */
        public function register_routes()
        {
        }
        /**
         * Get a collection of addresses.
         *
         * @param \WP_REST_Request $request Full details about the request.
         * @return \WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Create a single item.
         *
         * @param \WP_REST_Request $request Full details about the request.
         * @return \WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Update a single item.
         *
         * @param \WP_REST_Request $request Full details about the request.
         * @return \WP_Error|WP_REST_Response
         */
        public function update_item($request)
        {
        }
        /**
         * Current store-address vs main sender sync state for the address Redux store.
         *
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        public function get_store_address_sync($request)
        {
        }
        /**
         * Delete a single item.
         *
         * @param \WP_REST_Request $request Full details about the request.
         * @return \WP_Error|WP_REST_Response
         */
        public function delete_item($request)
        {
        }
    }
}
namespace Automattic\WCShipping\ScanForm {
    /**
     * ScanForm class.
     */
    class ScanForm
    {
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Add ScanForm button for legacy order list page.
         *
         * @param string $which The location of the extra table nav: 'top' or 'bottom'.
         */
        public function add_scan_form_button_on_classic($which)
        {
        }
        /**
         * Add ScanForm button for HPOS order page.
         *
         * @param string $order_type Order type.
         * @param string $which The location of the extra table nav: 'top' or 'bottom'.
         */
        public function add_scan_form_button_on_hpos($order_type, $which)
        {
        }
        /**
         * Add ScanForm button.
         *
         * @param string $which The location of the extra table nav: 'top' or 'bottom'.
         */
        public function add_scan_form_button($which)
        {
        }
        /**
         * Enqueue ScanForm scripts on order list pages.
         *
         * @param string $hook The current admin page hook.
         */
        public function enqueue_scan_form_scripts($hook)
        {
        }
    }
    /**
     * ScanForm History REST Controller class.
     */
    class ScanFormHistoryRESTController extends \Automattic\WCShipping\WCShippingRESTController
    {
        /**
         * ScanForm service.
         *
         * @var ScanFormService
         */
        private \Automattic\WCShipping\ScanForm\ScanFormService $scanform_service;
        /**
         * Class constructor.
         *
         * @param ScanFormService $scanform_service     ScanForm service instance.
         */
        public function __construct(\Automattic\WCShipping\ScanForm\ScanFormService $scanform_service)
        {
        }
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $rest_base = 'scan-form';
        /**
         * Register routes for ScanForm endpoints.
         */
        public function register_routes()
        {
        }
        /**
         * Get ScanForm history with pagination.
         *
         * @param \WP_REST_Request $request Request object containing page and per_page parameters.
         *
         * @return \WP_REST_Response Response with paginated ScanForm history.
         */
        public function get_scan_form_history(\WP_REST_Request $request): \WP_REST_Response
        {
        }
        /**
         * Get labels for a specific ScanForm.
         *
         * @param \WP_REST_Request $request Request object containing scan_form_id.
         *
         * @return \WP_REST_Response|\WP_Error Response with label details or error.
         */
        public function get_scan_form_labels(\WP_REST_Request $request)
        {
        }
    }
    /**
     * ScanForm REST Controller class.
     */
    class ScanFormRESTController extends \Automattic\WCShipping\WCShippingRESTController
    {
        /**
         * ScanForm service.
         *
         * @var ScanFormService
         */
        private \Automattic\WCShipping\ScanForm\ScanFormService $scanform_service;
        /**
         * @var \Automattic\WCShipping\Connect\WC_Connect_API_Client
         */
        protected \Automattic\WCShipping\Connect\WC_Connect_API_Client $api_client;
        /**
         * Logger for the connect server.
         *
         * @var \Automattic\WCShipping\Connect\WC_Connect_Logger
         */
        protected \Automattic\WCShipping\Connect\WC_Connect_Logger $logger;
        /**
         * Class constructor.
         *
         * @param ScanFormService       $scanform_service     ScanForm service instance.
         * @param \Automattic\WCShipping\Connect\WC_Connect_API_Client $api_client     Server API client instance.
         * @param \Automattic\WCShipping\Connect\WC_Connect_Logger     $logger         Logging utility.
         */
        public function __construct(\Automattic\WCShipping\ScanForm\ScanFormService $scanform_service, \Automattic\WCShipping\Connect\WC_Connect_API_Client $api_client, \Automattic\WCShipping\Connect\WC_Connect_Logger $logger)
        {
        }
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $rest_base = 'scan-form';
        /**
         * Register routes for ScanForm endpoints.
         */
        public function register_routes()
        {
        }
        /**
         * Get origin addresses with labels data (combined endpoint for step 1 and 2).
         *
         * Returns origin addresses with full label data, eliminating the need for a separate
         * labels request. This reduces API calls from 2 to 1 when opening the ScanForm modal.
         *
         * @return \WP_REST_Response Response with origin addresses and their labels.
         */
        public function get_origin_addresses(): \WP_REST_Response
        {
        }
        /**
         * Create a ScanForm from selected label IDs.
         *
         * @param \WP_REST_Request $request Request object containing label_ids.
         *
         * @return \WP_REST_Response|\WP_Error Response with ScanForm data and PDF URL.
         */
        public function create_scan_form(\WP_REST_Request $request)
        {
        }
        /**
         * Review labels before creating a ScanForm.
         *
         * @param \WP_REST_Request $request Request object containing label_ids.
         *
         * @return \WP_REST_Response|\WP_Error Response with review results.
         */
        public function review_scan_form(\WP_REST_Request $request)
        {
        }
    }
    /**
     * ScanForm Service class.
     * Handle logic and database operations.
     */
    class ScanFormService
    {
        /**
         * Transient key for caching ScanForm history.
         */
        const SCANFORM_HISTORY_TRANSIENT_KEY = 'wcshipping_scanform_history';
        /**
         * Get paginated ScanForms with their orders.
         *
         * @param int $per_page Number of ScanForms per page.
         * @param int $offset   Offset for pagination.
         * @return array Array with 'scan_forms' and 'total' keys.
         */
        public function get_paginated_scan_forms(int $per_page, int $offset): array
        {
        }
        /**
         * Get all ScanForms from cache or database.
         *
         * Returns ScanForms with origin_address and label_count.
         * Results are cached in a transient for performance.
         *
         * @return array List of ScanForm arrays.
         */
        private function get_all_scan_forms(): array
        {
        }
        /**
         * Clear the ScanForm history cache.
         *
         * @return void
         */
        public function clear_history_cache(): void
        {
        }
        /**
         * Build the complete ScanForms list from database.
         *
         * @return array List of ScanForm arrays sorted by creation date.
         */
        private function build_scan_forms_list(): array
        {
        }
        /**
         * Fetch and deduplicate ScanForms from database.
         *
         * @return array Array with 'scan_forms' and 'order_ids_map' keys.
         */
        private function fetch_scan_forms_from_database(): array
        {
        }
        /**
         * Add origin addresses and label counts to ScanForms.
         *
         * @param array $scan_forms    Deduplicated ScanForms keyed by ID.
         * @param array $order_ids_map Map of scan_form_id to order IDs.
         * @return array List of ScanForms sorted by creation date.
         */
        private function add_origin_addresses(array $scan_forms, array $order_ids_map): array
        {
        }
        /**
         * Get origin address for a ScanForm using pre-fetched meta data.
         *
         * @param string $scan_form_id     The ScanForm ID.
         * @param array  $order_ids        The order IDs containing this ScanForm.
         * @param array  $scan_forms_meta  Pre-fetched _wcshipping_scan_forms meta by order_id.
         * @param array  $labels_meta      Pre-fetched wcshipping_labels meta by order_id.
         * @param array  $selected_origins Pre-fetched _wcshipping_selected_origin meta by order_id.
         * @return array|null Origin address data or null if not found.
         */
        private function get_scan_form_origin_address_from_meta(string $scan_form_id, array $order_ids, array $scan_forms_meta, array $labels_meta, array $selected_origins): ?array
        {
        }
        /**
         * Validate and extract label IDs from a REST request.
         *
         * @param \WP_REST_Request $request Request object.
         *
         * @return array|\WP_Error Array of label IDs or WP_Error if validation fails.
         */
        public function validate_label_ids(\WP_REST_Request $request)
        {
        }
        /**
         * Parse ScanForm error message to extract failed label IDs.
         *
         * Example errors:
         * - "Already manifested (9): Label ID: 54321 (Shipment: shp_xxx), Label ID: 54322 (Shipment: shp_yyy)"
         * - "No valid labels found. Labels must have EasyPost shipment IDs (shp_*) and be less than 90 days old."
         *
         * @param string $error_message The error message from the API.
         * @param array  $submitted_labels All label IDs that were submitted.
         *
         * @return array Contains 'failed_labels' and 'valid_labels' arrays.
         */
        public function parse_scan_form_error(string $error_message, array $submitted_labels): array
        {
        }
        /**
         * Check if a label is an envelope shipment.
         *
         * Envelope labels (is_letter = true) are created via PC Postage and are not
         * compatible with USPS SCAN Forms. This is a temporary limitation while
         * USPS Ship adds envelope support.
         *
         * @param array $label Label data.
         *
         * @return bool True if the label is an envelope shipment.
         */
        public function is_envelope_label(array $label): bool
        {
        }
        /**
         * Check if a label is eligible for ScanForm creation.
         *
         * Based on EasyPost requirements:
         * - Label must be for USPS carrier
         * - Label must not be refunded
         * - Label must have a tracking number
         * - Label must be in created/purchased status
         *
         * Note: Shipping date check (10 days) is done separately in the main loops.
         *
         * @param array $label Label data.
         *
         * @return bool True if eligible, false otherwise.
         */
        public function is_label_eligible(array $label): bool
        {
        }
        /**
         * Fetch meta data for multiple orders in bulk using wpdb.
         *
         * @param array  $order_ids Array of order IDs.
         * @param string $meta_key  Meta key to fetch.
         *
         * @return array Associative array with order_id as key and unserialized meta_value as value.
         */
        public function get_order_meta_bulk(array $order_ids, string $meta_key): array
        {
        }
        /**
         * Get eligible shipments for orders with shipment dates today or later.
         *
         * Queries orders with _wcshipping_shipment_dates meta and returns a map of
         * order IDs to their eligible shipments (shipment_key => shipment_data) where
         * the shipment has a shipping_date >= today.
         *
         * Excludes labels from trashed orders.
         *
         * @return array Associative array: [ order_id => [ shipment_key => shipment_data ] ].
         */
        public function get_orders_with_eligible_shipping_dates(): array
        {
        }
        /**
         * Save ScanForm information to orders that contain the labels.
         *
         * @param array $scan_form_data ScanForm data including ID, PDF URL, and creation date.
         * @param array $order_labels   Array from server with order-to-label mapping.
         *                               Format: [{order_id: 123, label_ids:[12,23,34]}, ...].
         *
         * @return void
         */
        public function save_scan_form_to_orders(array $scan_form_data, array $order_labels)
        {
        }
        /**
         * Generate a unique key for an origin address based on its address components.
         *
         * @param array $address Origin address data.
         * @return string MD5 hash of the address components.
         */
        public function get_origin_address_key(array $address): string
        {
        }
    }
}
namespace Automattic\WCShipping\ServiceData {
    /**
     * Handles fetching service schemas with error monitoring.
     *
     * This service wraps the schemas store fetch operation to monitor for internal
     * plugin errors and display appropriate admin notices.
     */
    class ServiceSchemasFetcherService
    {
        /**
         * API client instance.
         *
         * @var \Automattic\WCShipping\Connect\WC_Connect_API_Client
         */
        private $api_client;
        /**
         * Services error notice handler.
         *
         * @var ServicesErrorNotice|null
         */
        private $error_notice;
        /**
         * Service schemas store.
         *
         * @var \Automattic\WCShipping\Connect\WC_Connect_Service_Schemas_Store
         */
        private $schemas_store;
        /**
         * Constructor.
         *
         * @param \Automattic\WCShipping\Connect\WC_Connect_API_Client            $api_client    API client instance.
         * @param \Automattic\WCShipping\Connect\WC_Connect_Service_Schemas_Store $schemas_store Service schemas store.
         * @param ServicesErrorNotice|null         $error_notice  Error notice handler.
         */
        public function __construct(\Automattic\WCShipping\Connect\WC_Connect_API_Client $api_client, \Automattic\WCShipping\Connect\WC_Connect_Service_Schemas_Store $schemas_store, ?\Automattic\WCShipping\ServiceData\ServicesErrorNotice $error_notice = null)
        {
        }
        /**
         * Fetch service schemas with error handling.
         *
         * This method delegates to the schemas store for the actual fetch, then
         * checks for errors. If an error occurred, it makes an additional API call
         * to get the error details and show the appropriate notice.
         *
         * @return bool True on success, false on failure.
         */
        public function fetch()
        {
        }
        /**
         * Handle a fetch error by checking for internal plugin errors.
         *
         * Makes an additional API call to get the actual error details since
         * the schemas store doesn't expose them.
         *
         * @return void
         */
        private function handle_fetch_error()
        {
        }
        /**
         * Get the underlying schemas store.
         *
         * @return \Automattic\WCShipping\Connect\WC_Connect_Service_Schemas_Store
         */
        public function get_schemas_store()
        {
        }
    }
    /**
     * REST controller for fetching service status notices from Connect Server.
     */
    class ServiceStatusRESTController extends \Automattic\WCShipping\WCShippingRESTController
    {
        /**
         * API endpoint path.
         *
         * @var string
         */
        protected $rest_base = 'service-status';
        /**
         * API client instance.
         *
         * @var \Automattic\WCShipping\Connect\WC_Connect_API_Client
         */
        private $api_client;
        /**
         * Constructor.
         *
         * @param \Automattic\WCShipping\Connect\WC_Connect_API_Client $api_client API client instance.
         */
        public function __construct(\Automattic\WCShipping\Connect\WC_Connect_API_Client $api_client)
        {
        }
        /**
         * Register REST routes.
         *
         * @return void
         */
        public function register_routes()
        {
        }
        /**
         * Get service status from Connect Server.
         *
         * @return \WP_REST_Response|\WP_Error Service status response or error.
         */
        public function get_service_status()
        {
        }
        /**
         * Sanitize notice action URLs to allow only http/https schemes.
         *
         * @param array $notices Raw notices from Connect Server.
         * @return array Sanitized notices.
         */
        private function sanitize_notices(array $notices): array
        {
        }
    }
    /**
     * Show admin notice when services endpoint fetch fails due to internal plugin errors.
     *
     * This notice is displayed when the plugin cannot connect to the WooCommerce Shipping
     * server due to issues like Jetpack connection problems, token issues, etc.
     */
    class ServicesErrorNotice
    {
        /**
         * Option key for storing the error notice state.
         */
        const OPTION_KEY = 'services_fetch_error';
        /**
         * User meta key for dismissed notice.
         */
        const DISMISSED_META_KEY = 'wcshipping_services_error_dismissed';
        /**
         * Error codes that indicate internal plugin errors (should show warning).
         *
         * @var array
         */
        private static $internal_error_codes = array('jetpack_data_class_not_found', 'jetpack_data_get_access_token_not_found', 'request_body_should_be_array', 'unable_to_json_encode_body', 'missing_token', 'invalid_token', 'invalid_signature');
        /**
         * Initialize the notice hooks.
         *
         * @return void
         */
        public function init()
        {
        }
        /**
         * Check if an error code is an internal plugin error.
         *
         * @param string $error_code The WP_Error code.
         * @return bool
         */
        public static function is_internal_error($error_code)
        {
        }
        /**
         * Enable the error notice.
         *
         * @param string $error_code The error code that occurred.
         * @param string $error_message The error message.
         * @return void
         */
        public function enable_notice($error_code, $error_message)
        {
        }
        /**
         * Disable the error notice.
         *
         * @return void
         */
        public function disable_notice()
        {
        }
        /**
         * Check if the notice is enabled.
         *
         * @return array|false Error data array or false if not enabled.
         */
        public function is_notice_enabled()
        {
        }
        /**
         * Check if the notice was dismissed by the current user.
         *
         * @return bool
         */
        private function is_dismissed()
        {
        }
        /**
         * Reset the dismissed state for all users.
         *
         * @return void
         */
        private function reset_dismissed_state()
        {
        }
        /**
         * AJAX handler for dismissing the notice.
         *
         * @return void
         */
        public function dismiss_notice()
        {
        }
        /**
         * Maybe render the notice.
         *
         * @return void
         */
        public function maybe_render_notice()
        {
        }
        /**
         * Check if the notice should be shown on the current screen.
         *
         * @return bool
         */
        private function should_show_on_current_screen()
        {
        }
        /**
         * Render the warning notice.
         *
         * @param array $error_data The error data (kept for future use/debugging).
         *
         * @return void
         */
        private function render_notice($error_data)
        {
        }
    }
}
namespace Automattic\WCShipping\Shipment {
    /**
     * Object that represent an address in WooCommerce Shipping.
     */
    class Address
    {
        /**
         * Address line
         *
         * @var string $address
         */
        public $address;
        /**
         * Address line 1
         *
         * @var string $address_1
         */
        public $address_1;
        /**
         * Address line 2
         *
         * @var string $address_2
         */
        public $address_2;
        /**
         * City name
         *
         * @var string $city
         */
        public $city;
        /**
         * 2 letters country code
         *
         * @var string $country_code
         */
        public $country_code;
        /**
         * State code
         *
         * @var string $state_code
         */
        public $state_code;
        /**
         * Postal code
         *
         * @var string $postcode
         */
        public $postcode;
        /**
         * Class constructor. Initialize the address object and also sanitize all fields upon creation.
         *
         * @param array $params Array of address fields. params: array(
         * 'address' => '',
         * 'address_1' => '',
         * 'address_2' => '',
         * 'city' => '',
         * 'state' => '',
         * 'country' => '',
         * 'postcode' => ''
         * )
         */
        public function __construct($params)
        {
        }
        /**
         * Validate the properties of this Address object. This function
         * validate each property separately. Return false if any fails.
         *
         * @return true|\WP_Error Return true if all address fields are valid or a WP_Error if a field is invalid.
         */
        public function validate()
        {
        }
        /**
         * Sanitize the properties of this Address object. This function
         * sanitize each property separately.
         */
        public function sanitize()
        {
        }
        /**
         * Validate state
         *
         * If state is not required, then return true. If state is required, then
         * validate if this is a valid state in the country.
         *
         * @return true|\WP_Error
         */
        public function validate_state()
        {
        }
        public function validate_city()
        {
        }
        /**
         * Validate country code. This checks if the country code is 2 letters and also check if it
         * is a valid country from the list: wc()->countries->get_countries().
         *
         * @return true|\WP_Error
         */
        public function validate_country()
        {
        }
        /**
         * Validate the postcode.
         *
         * @return true|\WP_Error
         */
        public function validate_postcode()
        {
        }
        /**
         * Sanitize address.
         *
         * @param string $address Can be address line 1 or line 2.
         * @return string The sanitized address.
         */
        public function sanitize_address($address)
        {
        }
        /**
         * Sanitize state code.
         *
         * @param string $state_code State code.
         * @return string The sanitized state code.
         */
        public function sanitize_state_code($state_code)
        {
        }
        /**
         * Sanitize country code.
         *
         * @param string $country_code Country code.
         * @return string The sanitized country code.
         */
        public function sanitize_country_code($country_code)
        {
        }
        /**
         * Helper function to remove all non alphabet characters.
         *
         * @param string $input Any string input.
         * @return string A string that only contain alphabets.
         */
        private function sanitize_two_letters_code($input)
        {
        }
        /**
         * Sanitize and format the postcode.
         *
         * @param string $postcode Value being sanitized.
         * @return string
         */
        public function sanitize_postcode($postcode)
        {
        }
        /**
         * Check if state is required for this country. Woo defaults (https://github.com/woocommerce/woocommerce/blob/882527fe054a5c074f79a6f06cea253e0a4c4c50/plugins/woocommerce/includes/class-wc-countries.php#L1644.)
         * states to have required => true. If it's not explicitly overwritten by wc()->countries->get_country_locale() to false,
         * then state is always required.
         *
         * @return boolean true if state is required.
         */
        public function is_state_required_for_country_code()
        {
        }
    }
    class ShipmentFromLabelGenerator
    {
        /*
         * @var array
         */
        private $orderItemsMap;
        /*
         * Create a new ShipmentFromLabelGenerator instance.
         *
         * @param WC_Order $order The order object.
         */
        public function __construct(\WC_Order $order)
        {
        }
        /*
         * Generate shipments from labels.
         *
         * @param array|null $labels Array of label metadata.
         * @return array An array with two elements: shipments array and a fallback flag.
         */
        public function generate_shipments(?array $labels = null)
        {
        }
        /*
         * Generate shipment items based on a label.
         *
         * If any product mapping fails or if no items are generated,
         * fall back to including all order items with a fallback flag.
         *
         * @param array $label The label data, expected to contain a 'product_ids' key.
         * @return array An array with the keys 'items' and 'shipment_uses_autogenerated_items'.
         */
        private function generate_shipment_from_label(array $label)
        {
        }
        /**
         * Group product IDs by occurrence in the label.
         *
         * Takes a list of product IDs from a label and groups them by product ID,
         * tracking the original indices of each occurrence.
         *
         * @param array $productIds List of product IDs from the label.
         * @return array An associative array where keys are product IDs and values are arrays of indices where each product appears.
         */
        private function count_product_id_quantities(array $productIds)
        {
        }
        /*
         * Build a lookup map of order items by product ID.
         *
         * @param WC_Order $order The order object.
         * @return array Array with product IDs as keys and order item data as values.
         */
        private function build_order_items_map(\WC_Order $order)
        {
        }
    }
}
namespace Automattic\WCShipping\Shipments\Models {
    /**
     * Represents a single shipment containing multiple items
     * A shipment is identified by its ID (usually "0", "1", "2" etc.)
     */
    class Shipment extends \Automattic\WCShipping\Utilities\BaseModel
    {
        /**
         * Shipment identifier (e.g., "0", "1", "2")
         *
         * @var string
         */
        public string $id;
        /**
         * Array of items in this shipment
         *
         * @var ShipmentItem[]
         */
        public array $items = array();
        /**
         * Constructor
         *
         * @param string $id      Shipment identifier
         * @param array  $items   Array of items (can be ShipmentItem objects or arrays)
         */
        public function __construct(string $id, array $items = array())
        {
        }
    }
    /**
     * Represents a single item within a shipment
     * Only stores minimal data: id and subItems (as string array)
     */
    class ShipmentItem extends \Automattic\WCShipping\Utilities\BaseModel
    {
        /**
         * Item identifier
         *
         * @var int
         */
        public int $id;
        /**
         * Array of sub-item IDs in the shape: [12-sub-0, 12-sub-1, ...]
         *
         * @var string[]
         */
        public array $subItems = array();
        public function __construct(array $data)
        {
        }
        /**
         * Normalize subItems to string array - fixes the bug!
         * Converts any objects/arrays to just their IDs
         *
         * @param array $sub_items Array that may contain strings, objects, or arrays
         * @return string[] Array of string IDs only
         */
        private function normalize_sub_items(array $sub_items): array
        {
        }
        /**
         * Validate that subItems are strings only (for debugging)
         *
         * @return bool True if all subItems are strings
         */
        public function has_valid_sub_items(): bool
        {
        }
    }
    /**
     * Represents the collection of all shipments for an order
     * This is the top-level model that contains multiple Shipment objects
     */
    class Shipments extends \Automattic\WCShipping\Utilities\BaseModel
    {
        /**
         * Map of shipment ID to Shipment objects
         *
         * @var array<string, Shipment>
         */
        public array $shipments = array();
        /**
         * Constructor
         *
         * @param array $data Raw shipments data from database
         */
        public function __construct(array $data = array())
        {
        }
        /**
         * Convert to array - overridden to return storage-compatible format
         *
         * Raw data structure:
         * [
         *   '0' => [
         *     ['id' => 1, 'subItems' => []],
         *     ['id' => 2, 'subItems' => ['sub1']]
         *   ],
         *   '1' => [
         *     ['id' => 3, 'subItems' => ['sub2', 'sub3']]
         *   ]
         * ]
         *
         * Default BaseModel output would be:
         * [
         *   'shipments' => [
         *     '0' => ['id' => '0', 'items' => [...]],
         *     '1' => ['id' => '1', 'items' => [...]]
         *   ]
         * ]
         *
         * This override returns storage format (same as raw data):
         * [
         *   '0' => [
         *     ['id' => 1, 'subItems' => []],
         *     ['id' => 2, 'subItems' => ['sub1']]
         *   ],
         *   '1' => [
         *     ['id' => 3, 'subItems' => ['sub2', 'sub3']]
         *   ]
         * ]
         *
         * @param string|null $key Optional property key to serialize only that property
         * @return mixed The shipments data in storage format
         */
        public function to_array(?string $key = null)
        {
        }
    }
}
namespace Automattic\WCShipping\Shipments {
    /**
     * Validates and repairs shipment data before model creation.
     */
    class ShipmentDataValidator
    {
        /**
         * Validate and repair shipment data.
         *
         * Detects and repairs corrupted shipment data where item IDs are null.
         * This can occur in legacy orders migrated from WooCommerce Shipping & Tax.
         *
         * @param array    $raw_shipments Raw shipments data from database.
         * @param \WC_Order $order         The WooCommerce order object.
         * @return array Validated and repaired shipments data.
         */
        public function validate_and_repair(array $raw_shipments, \WC_Order $order): array
        {
        }
        /**
         * Repair null IDs in shipment items.
         *
         * Maps null IDs to available order line item IDs. If no IDs are available,
         * the item is skipped entirely.
         *
         * @param array $shipment_items   Items in a single shipment.
         * @param array $available_item_ids Available order line item IDs.
         * @param int   $order_id         Order ID for logging.
         * @return array Repaired shipment items.
         */
        private function repair_null_ids(array $shipment_items, array $available_item_ids, int $order_id): array
        {
        }
        /**
         * Log a warning about corrupted shipment data.
         *
         * @param int   $order_id Order ID.
         * @param array $context  Additional context about the corruption.
         */
        private function log_corruption_warning(int $order_id, array $context): void
        {
        }
    }
    class ShipmentsRESTController extends \Automattic\WCShipping\WCShippingRESTController
    {
        protected $rest_base = 'shipments';
        /**
         * @var ShipmentsService $service
         */
        private $service;
        /**
         * @var \Automattic\WCShipping\Fulfillments\FulfillmentsService $fulfillment_service
         */
        private $fulfillment_service;
        public function __construct(\Automattic\WCShipping\Shipments\ShipmentsService $service, \Automattic\WCShipping\Fulfillments\FulfillmentsService $fulfillment_service)
        {
        }
        public function register_routes()
        {
        }
        public function update(\WP_REST_Request $request)
        {
        }
    }
    class ShipmentsService
    {
        const META_KEY = '_wcshipping-shipments';
        /**
         * @var \Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store
         */
        protected $settings_store;
        /**
         * @var ShipmentDataValidator
         */
        protected $validator;
        /**
         * Constructor.
         *
         * @param \Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store $settings_store Settings store instance.
         * @param ShipmentDataValidator|null        $validator      Optional validator instance for testing.
         */
        public function __construct(\Automattic\WCShipping\Connect\WC_Connect_Service_Settings_Store $settings_store, ?\Automattic\WCShipping\Shipments\ShipmentDataValidator $validator = null)
        {
        }
        /**
         * Update shipments on an order.
         *
         * @param int   $order_id The WC order ID.
         * @param array $raw_shipments The shipments sent with the api call.
         * @param array $shipment_ids_to_update The shipment ID map to update.
         * @return \Automattic\WCShipping\Exceptions\RESTRequestException|int
         *
         * @throws \Automattic\WCShipping\Exceptions\RESTRequestException Will throw an error if the order is not found.
         */
        public function update_order_shipments(int $order_id, array $raw_shipments, array $shipment_ids_to_update = array())
        {
        }
        /**
         * Get the order shipments JSON.
         *
         * If shipments are already stored as order meta, returns a JSON encoded object of those shipments.
         * Otherwise, it generates shipments (and flag whether fallback was needed) and then returns a JSON encoded object.
         *
         * @param int $order_id The WC order ID.
         * @return array {
         *     @type array $shipments The shipments.
         *     @type array $autogenerated_from_labels The autogenerated from labels.
         * }
         */
        public function get_order_shipments_data($order_id): array
        {
        }
        /**
         * Create a Shipments model from raw data.
         *
         * First attempts to create the model directly. If an InvalidArgumentException
         * is thrown (indicating corrupted data like null item IDs), runs the repair
         * logic and retries. This avoids the overhead of validation for healthy orders.
         *
         * @param array    $raw_shipments Raw shipments data.
         * @param \WC_Order $order         The WooCommerce order object.
         * @return array The shipments data as an array.
         *
         * @throws \Automattic\WCShipping\Exceptions\RESTRequestException If model creation fails even after repair.
         */
        protected function create_shipments_model(array $raw_shipments, \WC_Order $order): array
        {
        }
        /**
         * Build a shipment from order items.
         *
         * @param \WC_Order $order Order object.
         * @return array
         */
        public static function build_shipment_from_order_items($order)
        {
        }
    }
}
namespace Automattic\WCShipping\StoreApi {
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
namespace Automattic\WCShipping\StoreApi\Extensions {
    /**
     * Class BlocksCheckoutAddressValidationExtension
     */
    class BlocksCheckoutAddressValidationExtension extends \Automattic\WCShipping\StoreApi\AbstractStoreApiExtension
    {
        /**
         * The checkout service.
         *
         * @var \Automattic\WCShipping\Checkout\CheckoutService
         */
        private \Automattic\WCShipping\Checkout\CheckoutService $checkout_service;
        /**
         * BlocksCheckoutAddressValidationExtension constructor.
         *
         * @param \Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema    $extend_schema    The ExtendSchema instance.
         * @param \Automattic\WCShipping\Checkout\CheckoutService $checkout_service The checkout service.
         */
        public function __construct(\Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema $extend_schema, \Automattic\WCShipping\Checkout\CheckoutService $checkout_service)
        {
        }
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
    }
}
namespace Automattic\WCShipping\StoreApi {
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
        const IDENTIFIER = 'woocommerce-shipping';
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
        public function register_extension(\Automattic\WCShipping\StoreApi\AbstractStoreApiExtension $extension)
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
        public function register_endpoint_data(\Automattic\WCShipping\StoreApi\AbstractStoreApiExtension $extension)
        {
        }
        /**
         * Registers the update callback for an extension.
         *
         * @param AbstractStoreApiExtension $extension The extension to register.
         */
        public function register_update_callback(\Automattic\WCShipping\StoreApi\AbstractStoreApiExtension $extension)
        {
        }
    }
}
namespace Automattic\WCShipping\Testing {
    /**
     * Creates deterministic WooCommerce product and order data for e2e tests.
     */
    class E2ESeedData
    {
        /**
         * Option key for the latest seeded order id.
         */
        private const OPTION_ORDER_ID = 'wcshipping_e2e_order_id';
        /**
         * Option key for the latest seeded product id.
         */
        private const OPTION_PRODUCT_ID = 'wcshipping_e2e_product_id';
        /**
         * Seed a fresh product and order for e2e tests.
         *
         * @return array<string,int>
         * @throws \RuntimeException If WooCommerce is unavailable or data cannot be created.
         */
        public static function seed()
        {
        }
        /**
         * Return the latest seeded identifiers stored in options.
         *
         * @return array<string,int>
         */
        public static function get_seed_state()
        {
        }
        /**
         * Ensure WooCommerce APIs are ready before seeding.
         *
         * @return void
         * @throws \RuntimeException If WooCommerce is unavailable.
         */
        private static function ensure_woocommerce_ready()
        {
        }
        /**
         * Delete previously-seeded entities so each setup starts clean.
         *
         * @return void
         */
        private static function cleanup_previous_seed()
        {
        }
        /**
         * Create a simple physical product if the store does not already have one.
         *
         * @return int
         * @throws \RuntimeException If the product cannot be created.
         */
        private static function create_product()
        {
        }
        /**
         * Find an existing shippable product to reuse for e2e seeding.
         *
         * @return int
         */
        private static function find_existing_product_id()
        {
        }
        /**
         * Create an order with one line item.
         *
         * @param int $product_id Product id.
         * @return int
         * @throws \RuntimeException If the order cannot be created.
         */
        private static function create_order($product_id)
        {
        }
        /**
         * Create a shipping line that includes packaging metadata expected by the label UI.
         *
         * @param int $product_id Product id.
         * @return \WC_Order_Item_Shipping
         */
        private static function create_shipping_item($product_id)
        {
        }
        /**
         * Mirror WC_Helper_Order and set BACS as the order payment method.
         *
         * @param \WC_Order $order Order instance.
         * @return void
         */
        private static function set_bacs_payment_method($order)
        {
        }
    }
    /**
     * Provides deterministic Connect Server responses for e2e environments.
     */
    class WCConnectE2EAPIClientMock extends \Automattic\WCShipping\Connect\WC_Connect_API_Client
    {
        /**
         * Default connect-server scenario for the current label purchase e2e flow.
         *
         * This represents a domestic shipment where both origin and destination
         * addresses are treated as verified and Connect Server returns successful
         * rates and label purchase responses.
         */
        public const SCENARIO_LABEL_PURCHASE_DOMESTIC_VERIFIED_ADDRESSES_SUCCESS = 'label_purchase_domestic_verified_addresses_success';
        private const CONNECT_SERVER_SCENARIO_OPTION = 'wcshipping_e2e_connect_server_scenario';
        private const PAYMENT_METHOD_ID = 4242;
        private const DEFAULT_RATE = 9.949999999999999;
        private const DEFAULT_RETAIL_RATE = 10.95;
        /**
         * Convert an array payload into an object graph.
         *
         * @param array $data Payload to convert.
         *
         * @return object
         */
        private function as_object(array $data)
        {
        }
        /**
         * Normalize API client paths so request matching is consistent.
         *
         * @param string $path Request path.
         *
         * @return string
         */
        private function get_normalized_path($path)
        {
        }
        /**
         * Return the active e2e connect-server scenario.
         *
         * @return string
         */
        public static function get_active_connect_server_scenario()
        {
        }
        /**
         * Update the active connect-server mock scenario for test-mode requests.
         *
         * @return void
         */
        public static function set_connect_server_scenario()
        {
        }
        /**
         * Return the active e2e connect-server scenario.
         *
         * @return string
         */
        private function get_active_connect_server_scenario_for_request()
        {
        }
        /**
         * Extract package ids from a request payload.
         *
         * @param array $body Request payload.
         *
         * @return array
         */
        private function get_package_ids($body)
        {
        }
        /**
         * Build a single mock label rate payload.
         *
         * @param string $package_id Package id.
         * @param int    $index      Package index.
         *
         * @return array
         */
        private function get_label_rate_payload($package_id, $index = 0)
        {
        }
        /**
         * Return service schema payload compatible with current validators/consumers.
         *
         * @return object
         */
        private function get_mock_service_schemas()
        {
        }
        /**
         * Return payment methods payload used by account settings consumers.
         *
         * @return object
         */
        private function get_mock_payment_methods()
        {
        }
        /**
         * Return label rates for each requested package id.
         *
         * @param array $body Request payload.
         *
         * @return object
         */
        private function get_mock_label_rates($body)
        {
        }
        /**
         * Return a successful label purchase payload.
         *
         * @param array $body Request payload.
         *
         * @return object
         */
        private function get_mock_label_purchase($body)
        {
        }
        /**
         * Return a successful grouped batch label purchase payload.
         *
         * @param array $body Request payload.
         *
         * @return object
         */
        private function get_mock_label_batch_purchase($body)
        {
        }
        /**
         * Send a grouped batch label-purchase request to the e2e Connect Server mock.
         *
         * @param array $body Multi-shipment payload.
         *
         * @return object
         */
        public function send_grouped_label_batch_request(array $body)
        {
        }
        /**
         * E2E runs have no Connect Server; never require EU product identifiers.
         *
         * @param array $body Ignored.
         * @return object
         */
        public function get_customs_requirements(array $body)
        {
        }
        /**
         * Return a trivial address-normalization response.
         *
         * @param array $body Request payload.
         *
         * @return object
         */
        private function get_mock_address_normalization($body)
        {
        }
        /**
         * Return a label-status payload for an existing mock label.
         *
         * @param string $path Normalized request path.
         *
         * @return object
         */
        private function get_mock_label_status($path)
        {
        }
        /**
         * Return Connect Server responses for known endpoints.
         *
         * @param string $method Request method.
         * @param string $path   Request path.
         * @param array  $body   Request payload.
         *
         * @return object
         */
        protected function request($method, $path, $body = array())
        {
        }
    }
    class WCConnectE2EConnectionShim
    {
        private const E2E_PAYMENT_METHOD_ID = 4242;
        private static function is_logged_in_request()
        {
        }
        /**
         * Whether the mock connection is switched on for this request.
         *
         * Only server configuration counts: the two environment variables and the
         * WOOCOMMERCE_SERVICES_LOCAL_TEST_MODE constant. Nothing a request carries
         * can turn this on.
         *
         * @return bool
         */
        public static function is_enabled()
        {
        }
        public static function init()
        {
        }
        /**
         * Print seeded e2e state into admin pages for browser-based tests.
         *
         * @return void
         */
        public static function print_seed_state()
        {
        }
        /**
         * Return seeded e2e state for authenticated test-mode requests.
         *
         * @return void
         */
        public static function get_seed_state()
        {
        }
        private static function get_mock_payment_method()
        {
        }
        public static function force_connected_jetpack_status($status)
        {
        }
        public static function bootstrap_test_state()
        {
        }
        public static function ensure_nux_state_for_tests()
        {
        }
        public static function ensure_store_eligibility_for_tests()
        {
        }
        public static function provide_mock_access_token($token)
        {
        }
        public static function provide_mock_connection_owner_data($connected_data)
        {
        }
        public static function provide_mock_account_settings_payload($payload, $settings_store)
        {
        }
        public static function force_mock_garden_config_enabled($is_enabled)
        {
        }
        public static function provide_mock_garden_config($value, $key)
        {
        }
        public static function hide_wcshipping_nux_banner_styles()
        {
        }
    }
}
namespace Automattic\WCShipping {
    /**
     * Automattic\WCShipping\Tracks class.
     */
    class Tracks extends \WC_Tracks
    {
        /**
         * Tracks prefix.
         *
         * @var string
         */
        const PREFIX = 'wcadmin_wcshipping_';
        /**
         * Init function, add any wp action that should be tracked here.
         *
         * @return void
         */
        public static function init()
        {
        }
        /**
         * Check if we can track.
         *
         * @return bool
         */
        protected static function can_track()
        {
        }
        /**
         * Record an event in Tracks - this is the preferred way to record events from PHP.
         * Note: the event request won't be made if $properties has a member called `error`.
         * We override the WC_Tracks::record_event method to add the prefix to the event name,
         * and to add additional data to the event.
         *
         * @param string $event_name The name of the event without the wcadmin_wcshipping prefix.
         * @param array  $event_properties Custom properties to send with the event.
         * @return bool|WP_Error True for success or WP_Error if the event pixel could not be fired.
         */
        public static function record_event($event_name, $event_properties = array())
        {
        }
        /**
         * Normalize the properties, ie convert arrays to strings, etc.
         *
         * @param array  $properties The properties to normalize.
         * @param string $parent_key The parent key.
         * @return array
         */
        protected static function normalize_tracks_properties($properties, $parent_key = '')
        {
        }
        /**
         * Get the additional WooCommerce Shipping properties to add to the event.
         *
         * @todo Implement this a default data when we track events.
         *
         * @return array
         */
        public static function get_wcshipping_props()
        {
        }
        /**
         * Record a plugin activation event.
         *
         * @return void
         */
        public static function plugin_activation()
        {
        }
        /**
         * Record a plugin deactivation event.
         *
         * @return void
         */
        public static function plugin_deactivation()
        {
        }
        /**
         * Record a shipping zone method added event.
         *
         * @param int    $instance_id The instance ID.
         * @param string $service_id The service ID.
         * @param int    $zone_id The zone ID.
         *
         * @return void
         */
        public static function shipping_zone_method_added($instance_id, $service_id, $zone_id)
        {
        }
        /**
         * Record a shipping zone method deleted event.
         *
         * @param int    $instance_id The instance ID.
         * @param string $service_id The service ID.
         * @param int    $zone_id The zone ID.
         *
         * @return void
         */
        public static function shipping_zone_method_deleted($instance_id, $service_id, $zone_id)
        {
        }
        /**
         * Record a shipping zone method status toggled event.
         *
         * @param int    $instance_id The instance ID.
         * @param string $service_id The service ID.
         * @param int    $zone_id The zone ID.
         * @param bool   $enabled Whether the method is enabled.
         *
         * @return void
         */
        public static function shipping_zone_method_status_toggled($instance_id, $service_id, $zone_id, $enabled)
        {
        }
        /**
         * Record a saved settings event.
         *
         * @param array $settings The settings.
         *
         * @return void
         */
        public static function settings_saved(array $settings)
        {
        }
        /**
         * Record when a banner is displayed.
         *
         * @param string $source The source aka what type of banner we are displaying.
         *
         * @return void
         */
        public static function show_banner($source = '')
        {
        }
        /**
         * Record a TOS accepted event.
         *
         * @param string $source The source of the event, tos or connection.
         *
         * @return void
         */
        public static function tos_accepted($source = '')
        {
        }
        /**
         * Record when a flow would normally accept our Tos, but we already have agreement.
         *
         * @param string $source The source of the ToS acceptance.
         *
         * @return void
         */
        public static function tos_already_accepted($source = '')
        {
        }
        /**
         * Record a setup complete banner dismissed event.
         *
         * @return void
         */
        public static function setup_complete_banner_dismissed()
        {
        }
        /**
         * Record a wpcom connect site start event when they get redirected to wp.com to connect.
         *
         * @param string $source The location the connection was initiated from.
         * @return void
         */
        public static function wpcom_connect_site_start($source)
        {
        }
        /**
         * Record a WPCOM Connection error.
         *
         * @param \WP_Error $error The error thrown to explain why we cannot register a connection.
         * @return void
         */
        public static function wpcom_connect_site_error(\WP_Error $error)
        {
        }
        /**
         * Record a successful WPCOM registration return.
         *
         * @param string $source The location the connection was initiated from.
         * @return void
         */
        public static function wpcom_connect_site_connected($source)
        {
        }
        /**
         * Record a migration for settings started event.
         *
         * @return void
         */
        public static function wcshipping_settings_migration_started()
        {
        }
        /**
         * Record a migration for settings completed event.
         *
         * @return void
         */
        public static function wcshipping_settings_migration_completed()
        {
        }
        /**
         * Record a migration for labels started event.
         *
         * @param array $data Contextual data about the migration.
         * @return void
         */
        public static function wcshipping_labels_migration_started($data = array())
        {
        }
        /**
         * Record a migration for labels completed event.
         *
         * @param array $data Contextual data about the migration.
         * @return void
         */
        public static function wcshipping_labels_migration_completed($data = array())
        {
        }
        /**
         * Record a promo dismissed event.
         *
         * @param string $type The type of promo, e.g. notice, banner, etc.
         * @param string $promo_id The ID of the promo that was dismissed.
         *
         * @return void
         */
        public static function promo_dismissed(string $type, string $promo_id)
        {
        }
        /**
         * Record a promo notice viewed event.
         *
         * @param string $promo_id The ID of the promo that was viewed.
         * @return void
         */
        public static function promo_notice_viewed(string $promo_id)
        {
        }
        /**
         * Record a feature banner viewed event.
         *
         * @param string $banner_id The ID of the feature banner that was viewed.
         * @return void
         */
        public static function feature_banner_viewed(string $banner_id)
        {
        }
        /**
         * Record a feature banner dismissed event.
         *
         * @param string $banner_id The ID of the feature banner that was dismissed.
         * @return void
         */
        public static function feature_banner_dismissed(string $banner_id)
        {
        }
        /**
         * Record a feature banner button clicked event.
         *
         * @param string $banner_id The ID of the feature banner.
         * @param string $button_action The action/title of the button that was clicked.
         * @return void
         */
        public static function feature_banner_button_clicked(string $banner_id, string $button_action)
        {
        }
    }
}
namespace Automattic\WCShipping\Utilities {
    /**
     * AddressUtils class.
     */
    class AddressUtils
    {
        /**
         * Standard address fields.
         *
         * @var array
         */
        public static array $standard_address_fields = array('address_1', 'address_2', 'city', 'state', 'postcode', 'country');
        /**
         * Map of address abbreviations.
         *
         * @var array
         */
        public static array $address_abbreviation_map = array('STREET' => 'ST', 'AVENUE' => 'AVE', 'BOULEVARD' => 'BLVD', 'ROAD' => 'RD', 'DRIVE' => 'DR', 'LANE' => 'LN', 'COURT' => 'CT', 'PARKWAY' => 'PKWY', 'PLACE' => 'PL', 'TERRACE' => 'TER', 'CIRCLE' => 'CIR', 'HIGHWAY' => 'HWY', 'MOUNT' => 'MT', 'MOUNTAIN' => 'MTN', 'SQUARE' => 'SQ', 'SUITE' => 'STE', 'BUILDING' => 'BLDG', 'FLOOR' => 'FL', 'ROOM' => 'RM', 'APARTMENT' => 'APT', 'UNIT' => 'UNIT', 'HARBOR' => 'HBR', 'ISLAND' => 'IS', 'CREEK' => 'CRK', 'HEIGHTS' => 'HTS', 'SPRING' => 'SPG', 'VALLEY' => 'VLY', 'CROSSING' => 'XING', 'NORTH' => 'N', 'SOUTH' => 'S', 'EAST' => 'E', 'WEST' => 'W');
        /**
         * Compare two addresses to determine if they are close.
         *
         * @param array $address1 The first address.
         * @param array $address2 The second address.
         *
         * @return bool
         */
        public static function are_addresses_close(array $address1, array $address2): bool
        {
        }
        /**
         * Returns a standardized address string.
         *
         * @param array $address The address.
         *
         * @return array
         */
        public static function get_standardized_address(array $address): array
        {
        }
        /**
         * Convert a state to WooCommerce format.
         *
         * @param string $state   The state.
         * @param string $country The country.
         *
         * @return string
         */
        public static function convert_state_to_wc_format(string $state, string $country): string
        {
        }
        /**
         * Get standardized address field.
         *
         * @param string $field The address field.
         *
         * @return string
         */
        public static function get_standardized_address_field(string $field): string
        {
        }
        /**
         * Compare two addresses to determine if they are equal.
         *
         * @param array $address1 The first address.
         * @param array $address2 The second address.
         *
         * @return bool
         */
        public static function are_addresses_equal(array $address1, array $address2): bool
        {
        }
        /**
         * Get required shipping address field keys for the passed country.
         *
         * @param string $country The country.
         * @param string $type    The address type. Default is 'billing_'.
         *
         * @return array
         */
        public static function get_required_shipping_address_field_keys(string $country, string $type = 'billing_'): array
        {
        }
        /**
         * Get address field keys to validate for the passed country.
         *
         * @param string $country The country.
         * @param string $type    The address type. Default is 'billing_'.
         *
         * @return array
         */
        public static function get_address_field_keys_to_validate(string $country, string $type = 'billing_'): array
        {
        }
        /**
         * Get address fields for the passed country.
         *
         * @param string $country The country.
         * @param string $type    The address type. Default is 'billing_'. Possible values are 'billing_' and 'shipping_'.
         *
         * @return array
         */
        public static function get_country_address_fields(string $country, string $type = 'billing_'): array
        {
        }
        /**
         * Format an address array into a single string for HTML.
         *
         * @param array $address_data Address data array.
         * @return string Formatted address.
         */
        public static function address_array_to_formatted_html_string(array $address_data)
        {
        }
    }
    /**
     * USPSTerritories class.
     *
     * @since 2.3.0
     */
    class USPSTerritories
    {
        /**
         * USPS domestic mail territory country codes.
         *
         * @see https://webpmt.usps.gov/pmt010.cfm
         *
         * @var string[]
         */
        public const DOMESTIC_MAIL_TERRITORIES = array(
            'US',
            // United States.
            'AS',
            // American Samoa.
            'PR',
            // Puerto Rico.
            'VI',
            // Virgin Islands.
            'GU',
            // Guam.
            'MP',
            // Northern Mariana Islands.
            'UM',
            // United States Minor Outlying Islands.
            'FM',
            // Micronesia.
            'MH',
            // Marshall Islands.
            'PW',
        );
        /**
         * Check if a country code is in the USPS domestic mail territory list.
         *
         * @since 2.3.0
         * @param string $country_code Country code to check (case-insensitive).
         * @return bool True if the code is a USPS domestic mail territory.
         */
        public static function is_domestic_mail_territory(string $country_code): bool
        {
        }
        /**
         * Determine if a shipment is domestic based on origin and destination countries.
         *
         * A shipment is domestic if origin and destination are the same country,
         * or if both are in the USPS domestic mail territory list. Labels with an
         * unknown (empty) origin or destination are classified as NOT domestic so
         * they do not silently join a domestic batch.
         *
         * @since 2.3.0
         * @param string $origin_country      Origin country code.
         * @param string $destination_country Destination country code.
         * @return bool True if the shipment is domestic.
         */
        public static function is_domestic_shipment(string $origin_country, string $destination_country): bool
        {
        }
    }
}
namespace Automattic\WCShipping {
    /**
     * Automattic\WCShipping utils class.
     */
    class Utils
    {
        /**
         * Get WooCommerce Shipping plugin version.
         *
         * @return string
         */
        public static function get_wcshipping_version()
        {
        }
        /**
         * Return an array of usefull settings that can be used throughout the codebase and as a JS object.
         *
         * @return array Array of settings.
         */
        public static function get_settings_object()
        {
        }
        /**
         * Get customs data for a product.
         *
         * @since 1.1.2
         *
         * @param int|\WC_Product $product Product ID or object.
         * @return array|false Return an array of customs data or false if the product does not exist.
         */
        public static function get_product_customs_data($product)
        {
        }
        /**
         * Get the base URL for enqueuing assets.
         *
         * @since 1.6.3
         *
         * @return string
         */
        public static function get_enqueue_base_url()
        {
        }
        /**
         * Filter out dev-only dependencies that are injected by build tools during HMR
         * when WordPress hasn't registered them as script handles.
         *
         * @param array $dependencies The dependencies array from an asset.php file.
         * @return array Filtered dependencies.
         */
        public static function filter_dev_dependencies(array $dependencies): array
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
         * Get the relative path to the plugin directory.
         * This is a helper function to get the relative path to the plugin directory for either the main plugin or the WooCommerce plugin.
         *
         * @param bool $for_woocommerce Whether to get the path for the WooCommerce plugin.
         * @return string The relative path to the plugin directory.
         */
        public static function get_relative_plugin_path($for_woocommerce = false)
        {
        }
        /**
         * Get constants that are useful for JavaScript.
         *
         * @return array
         */
        public static function get_constants_for_js()
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
         * Whether to use the fulfillment API.
         * This checks a database option and can be filtered.
         *
         * @return bool
         */
        public static function should_use_fulfillment_api(): bool
        {
        }
        /**
         * Get the base tracking URL for a carrier based on their ID.
         *
         * @param string $carrier_id Carrier ID (e.g., 'ups', 'usps', 'fedex', 'dhlexpress').
         * @return string The base tracking URL (without tracking number), or empty string if carrier is unknown.
         */
        public static function get_carrier_tracking_url(string $carrier_id): string
        {
        }
        /**
         * Get the complete tracking URL for a shipment.
         *
         * @param string $carrier_id Carrier ID (e.g., 'ups', 'usps', 'fedex', 'dhlexpress').
         * @param string $tracking_number The tracking number.
         * @return string The complete tracking URL, or empty string if carrier is unknown.
         */
        public static function get_tracking_url(string $carrier_id, string $tracking_number): string
        {
        }
        /**
         * Checks if we're on an orders screen (HPOS or Classic), including list and edit pages.
         *
         * @return bool True if on orders screen, false otherwise.
         */
        public static function is_orders_screen(): bool
        {
        }
        public static function is_next(): bool
        {
        }
    }
    class Validators
    {
        /**
         * Regular expression pattern for validating ISO 8601 formatted date strings.
         * Format: YYYY-MM-DDThh:mm:ss.sssZ or YYYY-MM-DDThh:mm:ss.sss+hh:mm
         *
         * Pattern is formatted without delimiters for compatibility with WordPress's
         * rest_validate_json_schema_pattern() function which adds its own #...#u delimiters.
         */
        const ISO8601_PATTERN = '^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(\.\d+)?(Z|[+-]\d{2}:\d{2})$';
        /**
         * Validates if a parameter is a boolean-like value.
         * Accepts: 'true', 'false', true, false, '0', '1', 0, 1
         *
         * @param mixed            $param The parameter to validate
         * @param \WP_REST_Request $request The request object
         * @param string           $key The parameter key
         * @return bool Whether the parameter is valid
         */
        public static function validate_boolean_like($param, $request, $key): bool
        {
        }
    }
}
namespace Automattic\WCShipping\WPCOMConnection {
    /**
     * Class WPCOMConnectionRESTController.
     */
    class WPCOMConnectionRESTController extends \Automattic\WCShipping\WCShippingRESTController
    {
        /**
         * The base REST route
         *
         * @var string
         */
        protected $rest_base = 'wpcom-connection';
        /**
         * Register API routes
         *
         * @return void
         */
        public function register_routes()
        {
        }
        /**
         * Create WPCOM connection
         *
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response|\WP_Error
         */
        public function post_handler(\WP_REST_Request $request)
        {
        }
    }
}
namespace {
    /**
     * Resolve fulfillment base classes to namespaced aliases.
     *
     * Checks for the new namespace first (WooCommerce 10.5+), then falls back
     * to the old Internal namespace (WooCommerce 10.1-10.4).
     *
     * Aliases created:
     * - Automattic\WCShipping\Fulfillments\Base\Fulfillment            → Fulfillment model
     * - Automattic\WCShipping\Fulfillments\Base\FulfillmentsDataStore  → FulfillmentsDataStore
     * - Automattic\WCShipping\Fulfillments\Base\FulfillmentsController → FulfillmentsController
     */
    function wcshipping_resolve_fulfillment_classes(): void
    {
    }
    \define('WCSHIPPING_VERSION', '2.4.3');
    // WRCS: DEFINED_VERSION.
    \define('WCSHIPPING_PLUGIN_FILE', __FILE__);
    \define('WCSHIPPING_PLUGIN_DIR', __DIR__);
    \define('WCSHIPPING_PLUGIN_DIST_DIR', \WCSHIPPING_PLUGIN_DIR . '/dist/');
    \define('WCSHIPPING_PLUGIN_URL', \plugin_dir_url(\WCSHIPPING_PLUGIN_FILE));
    \define('WCSHIPPING_PLUGIN_DIST_URL', \plugin_dir_url(\WCSHIPPING_PLUGIN_FILE) . 'dist/');
    \define('WCSHIPPING_ASSETS_URL', \WCSHIPPING_PLUGIN_URL . 'assets/');
    \define('WCSHIPPING_STYLESHEETS_URL', \WCSHIPPING_ASSETS_URL . 'stylesheets/');
    \define('WCSHIPPING_JAVASCRIPT_URL', \WCSHIPPING_ASSETS_URL . 'javascript/');
    \define('WCSHIPPING_ASSETS_DIR', \WCSHIPPING_PLUGIN_DIR . '/assets/');
    \define('WCSHIPPING_STYLESHEETS_DIR', \WCSHIPPING_ASSETS_DIR . 'stylesheets/');
    \define('WCSHIPPING_JAVASCRIPT_DIR', \WCSHIPPING_ASSETS_URL . 'javascript/');
}