<?php
/**
 * Generated stub declarations for woocommerce-shipping-stamps 2.3.7.
 * @see https://github.com/woocommerce/all-plugins/tree/stubs
 */

namespace WooCommerce\Stamps {
    /**
     * WC_Stamps_Utils class
     */
    class Utils
    {
        /**
         * Return array of Stamps.com package content types.
         *
         * @since 2.0.1
         * @return array
         */
        public static function get_content_types()
        {
        }
        /**
         * Return array of Stamps.com non-delivery options.
         *
         * @since 2.1.7
         * @return array
         */
        public static function get_non_delivery_options(): array
        {
        }
        /**
         * Get the default non-delivery option.
         *
         * @return string
         */
        public static function get_default_non_delivery_option(): string
        {
        }
        /**
         * Get non-delivery option value.
         *
         * @return string
         */
        public static function get_non_delivery_option_value(): string
        {
        }
        /**
         * Is default non-delivery option value set.
         *
         * @return bool
         */
        public static function is_default_non_delivery_option(): bool
        {
        }
    }
}
namespace {
    /**
     * Stamps API wrapper.
     *
     * Used to interact with the Stamps API
     */
    class WC_Stamps_API
    {
        /**
         * Instance of SoapClient.
         *
         * @var SoapClient
         */
        private static $client = \false;
        /**
         * Authenticator.
         *
         * @var string|WP_Error
         */
        private static $authenticator = \false;
        /**
         * Instance of WC_Logger.
         *
         * @var WC_Logger
         */
        private static $logger = \false;
        /**
         * Whether logging is enabled or not ('yes' or 'no').
         *
         * @var string
         */
        private static $logging_enabled = \null;
        /**
         * Get Stamps.com API rate addons property.
         *
         * @return string Addon property name.
         */
        public static function get_addon_property()
        {
        }
        /**
         * Get Stamps.com API rate addons property.
         *
         * @return string Addon property name.
         */
        public static function get_addon_type_property()
        {
        }
        /**
         * Get surcharges info.
         *
         * @return array
         */
        public static function get_surcharges()
        {
        }
        /**
         * Return an array of surcharge name based on type.
         *
         * @param string $surcharge_code Surcharge code.
         *
         * @return string
         */
        public static function get_surcharge_name(string $surcharge_code): string
        {
        }
        /**
         * Get SOAP client for Stamps service.
         *
         * @return SoapClient
         * @throws \SoapFault In case the workaround failed too.
         */
        public static function get_client()
        {
        }
        /**
         * Log a message.
         *
         * @param string $message Message to log.
         */
        public static function log($message)
        {
        }
        /**
         * Log SoapFault.
         *
         * @since 1.3.3
         * @version 1.3.3
         *
         * @param SoapFault $e      Instance of SoapFault.
         * @param string    $prefix Message prefix.
         */
        private static function log_soap_fault(\SoapFault $e, $prefix)
        {
        }
        /**
         * Make an API request.
         *
         * @param string $endpoint Endpoint.
         * @param array  $request  Request params.
         * @param bool   $retry    Whether to retry when failed.
         *
         * @return object|WP_Error Response on success, WP_Error if failed.
         */
        public static function do_request($endpoint, $request = array(), $retry = \false)
        {
        }
        /**
         * Replace every EmailAddress value in a payload before it is logged.
         *
         * The obfuscation mask in do_request() matches top-level keys only, so the
         * recipient nested under Rate is not covered. Returns a copy, leaving the
         * payload that is actually sent to Stamps.com untouched.
         *
         * @since 2.3.5
         * @param mixed $payload Request or response payload.
         * @return mixed Payload with email addresses replaced.
         */
        private static function redact_email_addresses($payload)
        {
        }
        /**
         * Authenticate a user.
         *
         * @return string|WP_Error
         */
        public static function authenticate()
        {
        }
        /**
         * Get authenticator for requests.
         *
         * @return string|WP_Error
         */
        public static function get_authenticator()
        {
        }
        /**
         * Update authenticator after a request.
         *
         * @param object $response Response from SOAP request.
         */
        public static function update_authenticator($response)
        {
        }
        /**
         * Update stamps balance.
         *
         * Called after every successful request (by self::do_request) to the stamps.com
         * API.
         *
         * Note that this also kicks off the top-up code - that will result in
         * postage being purchased for accounts that fall below the merchant's
         * minimum (if any).
         *
         * @param object $response Response from SOAP request.
         */
        public static function update_balance($response)
        {
        }
        /**
         * Purchase postage on behalf of the user.
         *
         * @param int   $amount        Amount to top up. Must be an integer.
         * @param float $control_total This is the amount of postage that the user
         *                             has CONSUMED over the LIFETIME of the account.
         *
         * @return object|WP_Error Response from SOAP request, WP_Error if failed.
         */
        public static function purchase_postage($amount, $control_total)
        {
        }
        /**
         * Check purchase status.
         *
         * @param  string $transaction_id Transaction ID.
         * @return object|WP_Error
         */
        public static function get_purchase_status($transaction_id)
        {
        }
        /**
         * Check From & To addresses.
         *
         * @param array $request Request to check.
         * @return true|WP_Error
         */
        public static function check_address($request)
        {
        }
        /**
         * Get account info.
         *
         * @return string|WP_Error
         */
        public static function get_account_info()
        {
        }
        /**
         * Checks to see if country is a US territory.
         * This is needed because WC treats US territories
         * such as Puerto Rico as a country rather than a
         * US state.
         *
         * @since 1.3.15
         * @param string $country The shipping country.
         * @return bool
         */
        public static function is_us_territory($country)
        {
        }
        /**
         * Verify an address.
         *
         * @param WC_Order $order Order object.
         *
         * @return array|WP_Error
         */
        public static function verify_address($order)
        {
        }
        /**
         * Get rates for a package.
         *
         * @param  WC_Order $order Order object.
         * @param  array    $args  Request args.
         *
         * @return array|bool|string|\WP_Error
         */
        public static function get_rates($order, $args)
        {
        }
        /**
         * Get total surcharges.
         *
         * @param object $rate Stamps API rate.
         */
        public static function get_rate_surcharges($rate)
        {
        }
        /**
         * Get (purchase) label for a rate.
         *
         * @param \WC_Order $order Order object.
         * @param array     $args Request args.
         *
         * @return array|bool|int|string|\WC_Stamps_Label|\WP_Error
         * @version 1.3.2
         */
        public static function purchase_label($order, $args)
        {
        }
        /**
         * Cancel a label.
         *
         * @param WC_Order $order Order object.
         * @param string   $tx_id Transaction ID.
         *
         * @return bool|WP_Error true on success.
         */
        public static function cancel_label($order, $tx_id)
        {
        }
        /**
         * Get a URL to an account page.
         *
         * @param  string $endpoint Endpoint.
         * @return string|bool
         */
        public static function get_url($endpoint)
        {
        }
        /**
         * Get store address.
         *
         * @return array
         */
        public static function get_store_address()
        {
        }
        /**
         * Get order formatted shipping address.
         *
         * @param WC_Order $order Order to get its shipping address.
         *
         * @return array
         */
        public static function get_shipping_address($order)
        {
        }
        /**
         * Whether a Stamps.com service requires a recipient email address.
         *
         * Stamps.com enforces a recipient email on GlobalPost services (service codes
         * prefixed with `SC-GP`, e.g. `SC-GPL` GlobalPost Plus).
         *
         * @since 2.3.5
         * @param string $service_type Stamps.com service code.
         * @return bool
         */
        public static function service_requires_recipient_email($service_type)
        {
        }
        /**
         * Set the recipient email on a rated To address for the CreateIndicium request.
         *
         * The To address on a posted rate is the one Stamps.com echoed back from GetRates
         * and carries no email, so it is set from the order billing email here. CreateIndicium
         * for a GlobalPost service is the only request the recipient email is sent on. Rates
         * whose To is missing or not an object, and empty emails, are left untouched.
         *
         * @since 2.3.5
         * @param array  $rate  Rate as built by WC_Stamps_Order::get_posted_rate().
         * @param string $email Recipient (billing) email address.
         * @return array Rate with EmailAddress set on the To address when applicable.
         */
        public static function apply_recipient_email($rate, $email)
        {
        }
    }
    /**
     * Stamps account balance handler.
     */
    class WC_Stamps_Balance
    {
        /**
         * Instance of WC_Logger.
         *
         * @var WC_Logger
         */
        private static $logger;
        /**
         * Whether logging is enabled or not ('yes' or 'no').
         *
         * @since 1.3.17
         * @var string
         */
        private static $logging_enabled = \null;
        /**
         * Constructor
         *
         * Set callbacks to WP hooks.
         */
        public function __construct()
        {
        }
        /**
         * Add log entry.
         *
         * @since 1.3.17 Check if logging is enabled before logging.
         * @param string $message Message to log.
         */
        public static function log($message)
        {
        }
        /**
         * Show balance on admin bar.
         */
        public function admin_bar()
        {
        }
        /**
         * Add admin menus/screens.
         *
         * @return void
         */
        public function admin_menus()
        {
        }
        /**
         * Remove dashboard page links.
         *
         * @return void
         */
        public function admin_head()
        {
        }
        /**
         * Redirect to stamps.com.
         */
        public function stamps_redirect()
        {
        }
        /**
         * Get the current balance for the user.
         *
         * @param bool $force_update Whether to force update. Default false.
         *
         * @return mixed False in API error OR float from API.
         */
        public static function get_current_balance($force_update = \false)
        {
        }
        /**
         * Get current control total.
         *
         * Control total is the amount of postage that the user has CONSUMED over
         * the LIFETIME of the account.
         *
         * @param bool $force_update Whether to force update to retrieve control
         *                           total. Default to false.
         *
         * @return float
         */
        public static function get_current_control_total($force_update = \false)
        {
        }
        /**
         * Top up user balance with amount `$amount`.
         *
         * Hooked to the `wc_stamps_do_top_up` action, which is called while handling
         * the `wp_schedule_single_event` task scheduled by `self::schedule_top_up`.
         *
         * @param int   $amount        Amount of postage to purchase.
         * @param float $control_total The amount of postage that the user has CONSUMED
         *                             over the LIFETIME of the account.
         * @param int   $attempt       Which attempt this is.
         *
         * @return void
         */
        public function top_up($amount, $control_total, $attempt)
        {
        }
        /**
         * Check status of a top up.
         *
         * @param int    $amount          Amount to top up. Must be an integer.
         * @param float  $control_total   Current balance.
         * @param string $transaction_id Transaction ID.
         * @param int    $attempt         Number to retry if failed to top up.
         */
        public function check_payment_status($amount, $control_total, $transaction_id, $attempt)
        {
        }
        /**
         * Checks whether automatic top-up should happen or not.
         *
         * @param mixed $balance Balance.
         *
         * @since 1.3.3
         * @version 1.3.3
         *
         * @return bool
         */
        protected static function is_automatic_topup_needed($balance)
        {
        }
        /**
         * See if we need to top up soon.
         *
         * Called by `WC_Stamps_API::update_balance()`.
         *
         * @param float $balance Balance.
         */
        public static function check_balance($balance)
        {
        }
        /**
         * Schedule events for topping up event.
         *
         * Called either by `self::topup_screen()` (when the user requests a manual top-up)
         * or by `self::check_balance()`.
         *
         * Note: `$force` is `true` when called by `self::topup_screen()` (when the
         * user requests a manual top-up). The top up event is always schedule for
         * just 8 seconds in the future.
         *
         * @param int   $amount        The amount of postage to purchase.
         * @param float $control_total This is the amount of postage that the user
         *                             has CONSUMED over the LIFETIME of the account.
         * @param bool  $force         Whether or not to schedule a top-up even if
         *                             a top-up is already scheduled.
         * @param int   $attempt       Which attempt this is.
         */
        public static function schedule_top_up($amount, $control_total, $force = \false, $attempt = 0)
        {
        }
        /**
         * Screen for adding stamps balance manually.
         */
        public function topup_screen()
        {
        }
    }
    /**
     * Stamps API wrapper class.
     *
     * @package woocommerce-shipping-stamps
     */
    /**
     * WC_Stamps_Integration class.
     */
    class WC_Stamps_Integration
    {
        /**
         * Constructor.
         */
        public function __construct()
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
         * Check SOAP support on activation
         */
        public function activation_check()
        {
        }
        /**
         * Plugin action links.
         *
         * @since 1.3.3
         * @version 1.3.3
         *
         * @param array $links Plugin action links.
         *
         * @return array Plugin action links.
         */
        public function plugin_action_links($links)
        {
        }
        /**
         * Load Localisation files.
         *
         * @return void
         */
        public function load_plugin_textdomain()
        {
        }
        /**
         * Initialize plugin.
         *
         * @return void
         */
        public function plugin_init()
        {
        }
    }
    /**
     * Represent a single label (a post of wc_stamps_label).
     */
    class WC_Stamps_Label
    {
        /**
         * Label ID (post ID).
         *
         * @since 1.0.0
         *
         * @var int
         */
        private $id;
        /**
         * URL of label.
         *
         * Stored as post content.
         *
         * @since 1.0.0
         *
         * @var string
         */
        private $url;
        /**
         * Tracking number of the label.
         *
         * Stored as post title.
         *
         * @since 1.0.0
         *
         * @var string
         */
        private $tracking_number;
        /**
         * Constructor.
         *
         * Set internal props for this label.
         *
         * @param int $label_id Label ID / Post ID of CPT wc_stamps_label.
         */
        public function __construct($label_id)
        {
        }
        /**
         * See if label is valid.
         *
         * Valid label contains post ID and URL (post_content).
         *
         * @return bool Returns true if label is valid.
         */
        public function is_valid()
        {
        }
        /**
         * Magic method to check if a given label contains meta data specified
         * by `$key`.
         *
         * @param string $key Key name.
         *
         * @return bool Returns true if a given `$key` exists in the post meta.
         */
        public function __isset($key)
        {
        }
        /**
         * Magic method to retrieve a given label meta / post meta.
         *
         * @param string $key Key name.
         *
         * @return mixed
         */
        public function __get($key)
        {
        }
        /**
         * Get value.
         *
         * Same as `__get()`.
         *
         * @param string $key Key name.
         *
         * @return mixed
         */
        public function get_value($key)
        {
        }
        /**
         * Get ID of the label.
         *
         * @return int Label ID.
         */
        public function get_id()
        {
        }
        /**
         * Get the URL to the label.
         *
         * @return string Label URL.
         */
        public function get_label_url()
        {
        }
        /**
         * Get the tracking number.
         *
         * @return string Label tracking number.
         */
        public function get_tracking_number()
        {
        }
        /**
         * Get the excerpted tracking number.
         *
         * @see https://github.com/woocommerce/woocommerce-shipping-stamps/issues/63.
         *
         * @since 1.3.3
         * @version 1.3.3
         *
         * @param int    $length Number of chars to return from start.
         * @param string $suffix Suffix to add to the substr'ed string.
         *
         * @return string
         */
        public function get_tracking_number_excerpt($length = 16, $suffix = '...')
        {
        }
        /**
         * Check if a refund has been requested for this label.
         *
         * @return bool True if refund has been requested.
         */
        public function is_refund_requested()
        {
        }
        /**
         * Mark this label as having a refund requested.
         *
         * @return bool True on success, false on failure.
         */
        public function mark_refund_requested()
        {
        }
        /**
         * Get the Stamps.com transaction ID.
         *
         * @return string Transaction ID or empty string if not set.
         */
        public function get_stamps_tx_id()
        {
        }
    }
    /**
     * Wrapper to abstract labels CRUD.
     */
    class WC_Stamps_Labels
    {
        /**
         * Create a label.
         *
         * @param WC_Order $order        Order object.
         * @param object   $label_result Label result creation from API.
         *
         * @return int|WP_Error
         */
        public static function create_label($order, $label_result)
        {
        }
        /**
         * Delete a label.
         *
         * @param int $label_id Label ID.
         *
         * @return bool
         */
        public static function delete_label($label_id)
        {
        }
        /**
         * Get labels attached to an order.
         *
         * @param int $order_id Order ID.
         *
         * @return array List of labels.
         */
        public static function get_order_labels($order_id)
        {
        }
    }
}
namespace WooCommerce\Stamps {
    /**
     * Trait Order_Util
     *
     * A proxy-style trait that will help keep our code more stable and cleaner during the
     * transition to WC Custom Order Tables.
     */
    trait Order_Util
    {
        /**
         * The OrderUtil class provided by WooCommerce in version 6.5
         * to help with the transition to Custom Order Tables
         *
         * @var string
         */
        public static $wc_order_util_class = 'Automattic\WooCommerce\Utilities\OrderUtil';
        /**
         * The legacy screen name/id for the WC Order post type
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
         * @param string $method Method to check.
         *
         * @return bool
         */
        public function wc_order_util_method_exists($method)
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
         * Returns the WC_Order object from the object passed to
         * the add_meta_box callback function.
         *
         * @param \WP_Post|\WC_Order $post_or_order_object Post or order object.
         *
         * @return \WC_Order
         */
        public function init_theorder_object($post_or_order_object)
        {
        }
    }
}
namespace {
    /**
     * Order handler.
     *
     * Controls the meta box shown on orders in admin. Used for printing labels and
     * address verification.
     */
    class WC_Stamps_Order
    {
        use \WooCommerce\Stamps\Order_Util;
        /**
         * Package types.
         *
         * @var array
         */
        private $package_types = array();
        /**
         * Constructor.
         *
         * Set WP hooks and basic props.
         */
        public function __construct()
        {
        }
        /**
         * Enqueue styles.
         */
        public function styles()
        {
        }
        /**
         * Enqueue scripts.
         *
         * @since 1.3.4
         * @version 1.3.4
         */
        public function scripts()
        {
        }
        /**
         * Add meta boxes.
         */
        public function add_meta_boxes()
        {
        }
        /**
         * Verify an address.
         */
        public function ajax_verify_address()
        {
        }
        /**
         * Override address - verification complete.
         */
        public function ajax_override_address()
        {
        }
        /**
         * Accept address - verification complete.
         *
         * This is AJAX handler for wc_stamps_accept_address action.
         */
        public function ajax_accept_address()
        {
        }
        /**
         * Define packages.
         *
         * This is AJAX handler for wc_stamps_define_package action.
         */
        public function ajax_define_package()
        {
        }
        /**
         * Get rates from stamps.
         *
         * This is AJAX handler for wc_stamps_get_rates action.
         */
        public function ajax_get_rates()
        {
        }
        /**
         * Get a posted rate object as well as addons.
         *
         * @param array $posted Posted data.
         *
         * @return array|false Stamps Rate in array format.
         */
        public function get_posted_rate($posted)
        {
        }
        /**
         * Get chosen rate and ask for customs information.
         *
         * This is AJAX handler for wc_stamps_customs action.
         */
        public function ajax_customs()
        {
        }
        /**
         * Get label for a rate.
         *
         * This is AJAX handler for wc_stamps_request_label action.
         */
        public function ajax_request_label()
        {
        }
        /**
         * Get labels.
         *
         * This is AJAX handler for wc_stamps_get_labels action.
         */
        public function ajax_get_labels()
        {
        }
        /**
         * Cancel/refund a label (request refund from Stamps.com).
         *
         * This is AJAX handler for wc_stamps_cancel_label action.
         * On success, marks the label as having a refund requested via post meta.
         */
        public function ajax_cancel_label()
        {
        }
        /**
         * Delete/remove a label record (local only).
         *
         * This is AJAX handler for wc_stamps_delete_label action.
         */
        public function ajax_delete_label()
        {
        }
        /**
         * Address verification html - step 1.
         *
         * @return string
         */
        public function get_address_verification_html()
        {
        }
        /**
         * Get address verification html based on stored results.
         *
         * @param array $result Result from Stamps API.
         */
        public function get_address_verification_result_html($result)
        {
        }
        /**
         * Get html for defining packages.
         *
         * @param WC_Order $order Order object.
         *
         * @return string
         */
        public function get_packages_html($order)
        {
        }
        /**
         * Get html for listing rates.
         *
         * @param WC_Order $order Order object.
         * @param array    $rates Rates from Stamps API.
         *
         * @return string
         */
        public function get_rates_html($order, $rates)
        {
        }
        /**
         * Output html for listing addons.
         *
         * @param object $rate Rate.
         */
        public static function addons_html($rate)
        {
        }
        /**
         * Get HTML for customs information.
         *
         * @param WC_Order $order       Order object.
         * @param array    $stamps_rate Rates from Stamps API.
         *
         * @return string
         */
        public function get_customs_html($order, $stamps_rate)
        {
        }
        /**
         * Get HTML for listing labels.
         *
         * @param WP_Error|WC_Stamps_Label $label Label or WP_Error.
         *
         * @return string
         */
        public function get_label_html($label)
        {
        }
        /**
         * Get HTML for listing labels.
         *
         * @param array $labels List of labels of an order.
         *
         * @return string
         */
        public function get_labels_html($labels)
        {
        }
        /**
         * Output the meta box.
         *
         * @param WP_Post|WC_Order $post_or_order_object Post or order object.
         *
         * @return void
         */
        public function output($post_or_order_object)
        {
        }
        /**
         * Check whether a given order needs customs step to print label.
         *
         * @param WC_Order $order Order object.
         *
         * @return bool Returns true if given country and/or state in an order needs custom step.
         * @see https://github.com/woocommerce/woocommerce-shipping-stamps/issues/73.
         *
         * @version 1.3.3
         *
         * @since 1.3.3
         */
        public function needs_customs_step($order)
        {
        }
        /**
         * Return decoded, parsed, and sanitized AJAX posted data.
         *
         * @param  string $posted_data  AJAX posted data.
         *
         * @return array|string
         */
        public function get_sanitized_ajax_data($posted_data)
        {
        }
    }
    /**
     * Post types class.
     *
     * @package woocommerce-shipping-stamps
     */
    /**
     * Post types handler.
     */
    class WC_Stamps_Post_Types
    {
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Register custom post types.
         *
         * @return void
         */
        public function register_post_types()
        {
        }
    }
    /**
     * WC_Stamps_Privacy class
     */
    class WC_Stamps_Privacy extends \WC_Abstract_Privacy
    {
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Returns a list of orders.
         *
         * @param string $email_address Customer email address.
         * @param int    $page          Result page.
         *
         * @return array WP_Post
         */
        protected function get_orders($email_address, $page)
        {
        }
        /**
         * Gets the message of the privacy to display.
         */
        public function get_privacy_message()
        {
        }
        /**
         * Handle exporting data for Orders.
         *
         * @param string $email_address E-mail address to export.
         * @param int    $page          Pagination of data.
         *
         * @return array
         */
        public function order_data_exporter($email_address, $page = 1)
        {
        }
        /**
         * Finds and erases order data by email address.
         *
         * @param string $email_address The user email address.
         * @param int    $page  Page.
         * @return array An array of personal data in name value pairs
         */
        public function order_data_eraser($email_address, $page)
        {
        }
        /**
         * Handle eraser of data tied to Orders
         *
         * @param WC_Order $order Order to handle.
         *
         * @return array
         */
        protected function maybe_handle_order($order)
        {
        }
        /**
         * Gets all the label ids associated with order.
         *
         * @param int $order_id Order ID.
         *
         * @return array
         */
        public function get_order_label_ids($order_id)
        {
        }
        /**
         * Handle exporting data for Labels.
         *
         * @param string $email_address E-mail address to export.
         * @param int    $page          Pagination of data.
         *
         * @return array
         */
        public function label_data_exporter($email_address, $page = 1)
        {
        }
        /**
         * Finds and erases label data by email address.
         *
         * @param string $email_address The user email address.
         * @param int    $page  Page.
         * @return array An array of personal data in name value pairs
         */
        public function label_data_eraser($email_address, $page)
        {
        }
        /**
         * Handle eraser of data tied to Orders
         *
         * @param WC_Order $order Order to handle.
         *
         * @return array
         */
        protected function maybe_handle_label($order)
        {
        }
    }
    /**
     * WC_Stamps_Settings class
     */
    class WC_Stamps_Settings
    {
        const SETTINGS_NAMESPACE = 'stamps';
        /**
         * Get the setting fields
         *
         * @since  1.0.0
         *
         * @return array $setting_fields
         */
        private static function get_fields()
        {
        }
        /**
         * Get an option set in our settings tab
         *
         * @param string $key Key name.
         *
         * @since  1.0.0
         *
         * @return string Option value.
         */
        public static function get_option($key)
        {
        }
        /**
         * Setup the WooCommerce settings.
         *
         * @since  1.0.0
         */
        public static function init()
        {
        }
        /**
         * Add a settings tab to the settings page
         *
         * @param array $settings_tabs List of setting tabs.
         *
         * @since  1.0.0
         *
         * @return array List of setting tabs.
         */
        public static function add_settings_tab($settings_tabs)
        {
        }
        /**
         * Output the tab content.
         *
         * @since  1.0.0
         */
        public static function tab_content()
        {
        }
        /**
         * Update the settings.
         *
         * @since  1.0.0
         */
        public static function update_settings()
        {
        }
    }
}
namespace {
    /**
     * WooCommerce fallback notice.
     *
     * @since 1.3.17
     * @return void
     */
    function woocommerce_shipping_stamps_missing_wc_notice()
    {
    }
    \define('WC_STAMPS_INTEGRATION_VERSION', '2.3.7');
    /**
     * Initializes the extension.
     *
     * @return void
     *
     * @since 1.3.17
     */
    function woocommerce_shipping_stamps_init()
    {
    }
    /**
     * Return instance of WC_Stamps_Integration.
     *
     * @since 1.3.3
     * @version 1.3.3
     *
     * @return WC_Stamps_Integration
     */
    function wc_shipping_stamps()
    {
    }
}