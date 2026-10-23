<?php
/**
 * Generated stub declarations for woocommerce-payfast-gateway 1.7.9.
 * @see https://github.com/woocommerce/all-plugins/tree/stubs
 */

/**
 * Payfast payment method integration
 *
 * @since 1.5.0
 */
final class WC_PayFast_Blocks_Support extends \Automattic\WooCommerce\Blocks\Payments\Integrations\AbstractPaymentMethodType
{
    /**
     * Name of the payment method.
     *
     * @var string
     */
    protected $name = 'payfast';
    /**
     * Initializes the payment method type.
     */
    public function initialize()
    {
    }
    /**
     * Returns if this payment method should be active. If false, the scripts will not be enqueued.
     *
     * @return boolean
     */
    public function is_active()
    {
    }
    /**
     * Returns an array of scripts/handles to be registered for this payment method.
     *
     * @return array
     */
    public function get_payment_method_script_handles()
    {
    }
    /**
     * Returns an array of key=>value pairs of data made available to the payment methods script.
     *
     * @return array
     */
    public function get_payment_method_data()
    {
    }
    /**
     * Returns an array of supported features.
     *
     * @return string[]
     */
    public function get_supported_features()
    {
    }
}
/**
 * Privacy/GDPR related functionality which ties into WordPress functionality.
 */
class WC_Gateway_PayFast_Privacy extends \WC_Abstract_Privacy
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Returns a list of orders that are using one of Payfast's payment methods.
     *
     * The list of orders is paginated to 10 orders per page.
     *
     * @param string $email_address The user email address.
     * @param int    $page          Page number to query.
     * @return WC_Order[]|stdClass Number of pages and an array of order objects.
     */
    protected function get_payfast_orders($email_address, $page)
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
     * Handle exporting data for Subscriptions.
     *
     * @param string $email_address E-mail address to export.
     * @param int    $page          Pagination of data.
     *
     * @return array
     */
    public function subscriptions_data_exporter($email_address, $page = 1)
    {
    }
    /**
     * Finds and erases order data by email address.
     *
     * @since 3.4.0
     * @param string $email_address The user email address.
     * @param int    $page  Page.
     * @return array An array of personal data in name value pairs
     */
    public function order_data_eraser($email_address, $page)
    {
    }
    /**
     * Handle eraser of data tied to Subscriptions
     *
     * @param WC_Order $order Order object.
     * @return array
     */
    protected function maybe_handle_subscription($order)
    {
    }
    /**
     * Handle eraser of data tied to Orders
     *
     * @since 1.4.13
     *
     * @param WC_Order $order The order object.
     * @return array
     */
    protected function maybe_handle_order($order)
    {
    }
}
/**
 * Payfast Payment Gateway
 *
 * Provides a Payfast Payment Gateway.
 *
 * @class  woocommerce_payfast
 */
class WC_Gateway_PayFast extends \WC_Payment_Gateway
{
    /**
     * Version
     *
     * @var string
     */
    public $version;
    /**
     * Data to send to Payfast.
     *
     * @var array $data_to_send
     */
    protected $data_to_send = array();
    /**
     * Merchant ID.
     *
     * @var string $merchant_id
     */
    protected $merchant_id;
    /**
     * Merchant Key.
     *
     * @var string $merchant_key
     */
    protected $merchant_key;
    /**
     * Pass Phrase.
     *
     * @var string $pass_phrase
     */
    protected $pass_phrase;
    /**
     * Payfast URL.
     *
     * @var string $url
     */
    protected $url;
    /**
     * Payfast Validate URL.
     *
     * @var string $validate_url
     */
    protected $validate_url;
    /**
     * Response URL.
     *
     * @var string $response_url
     */
    protected $response_url;
    /**
     * Send debug email.
     *
     * @var bool $send_debug_email
     */
    protected $send_debug_email;
    /**
     * Debug email.
     *
     * @var string $debug_email
     */
    protected $debug_email;
    /**
     * Enable logging.
     *
     * @var bool $enable_logging
     */
    protected $enable_logging;
    /**
     * Available countries.
     *
     * @var array $available_countries
     */
    protected $available_countries;
    /**
     * Available currencies.
     *
     * @var array $available_currencies
     */
    protected $available_currencies;
    /**
     * Logger instance.
     *
     * @var WC_Logger $logger
     */
    protected $logger;
    /**
     * Whether the currency filter is running.
     *
     * @var bool $is_filtering_currency
     */
    private $is_filtering_currency = \false;
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Use the no-store, private cache directive on the order-pay endpoint.
     *
     * This prevents the browser caching the page even when the visitor has clicked
     * the back button. This is required to determine if a user has pressed back while
     * in the payfast gateway.
     *
     * @since 1.6.2
     *
     * @param string[] $headers Array of caching headers.
     * @return string[] Modified caching headers.
     */
    public function no_store_cache_headers($headers)
    {
    }
    /**
     * Initialise Gateway Settings Form Fields
     *
     * @since 1.0.0
     */
    public function init_form_fields()
    {
    }
    /**
     * Get the required form field keys for setup.
     *
     * @return array
     */
    public function get_required_settings_keys()
    {
    }
    /**
     * Determine if the gateway still requires setup.
     *
     * @return bool
     */
    public function needs_setup()
    {
    }
    /**
     * Get the settings that only users who can manage the credentials may change.
     *
     * @return string[]
     */
    private function get_credential_setting_keys()
    {
    }
    /**
     * Check if the current user can view and change the Payfast credentials.
     *
     * @return bool
     */
    public function can_manage_credentials()
    {
    }
    /**
     * Generate the settings HTML, with the credential fields disabled for other users.
     *
     * @param array $form_fields Form fields.
     * @param bool  $echo        Whether to echo the output.
     * @return string
     */
    public function generate_settings_html($form_fields = array(), $echo = \true)
    {
    }
    /**
     * Generate the password field HTML, without printing the saved passphrase.
     *
     * @param string $key  Field key.
     * @param array  $data Field data.
     * @return string
     */
    public function generate_password_html($key, $data)
    {
    }
    /**
     * Validate the merchant ID field.
     *
     * @param string $key   Field key.
     * @param mixed  $value Posted value.
     * @return string
     */
    public function validate_merchant_id_field($key, $value)
    {
    }
    /**
     * Validate the merchant key field.
     *
     * @param string $key   Field key.
     * @param mixed  $value Posted value.
     * @return string
     */
    public function validate_merchant_key_field($key, $value)
    {
    }
    /**
     * Validate the passphrase field. A blank value keeps the saved passphrase.
     *
     * @param string $key   Field key.
     * @param mixed  $value Posted value.
     * @return string
     */
    public function validate_pass_phrase_field($key, $value)
    {
    }
    /**
     * Validate the sandbox field.
     *
     * @param string $key   Field key.
     * @param mixed  $value Posted value.
     * @return string
     */
    public function validate_testmode_field($key, $value)
    {
    }
    /**
     * Keep the saved credentials when another logged-in user updates the settings (settings page or REST API).
     *
     * @param mixed $value     New settings.
     * @param mixed $old_value Old settings.
     * @return mixed
     */
    public function protect_credential_settings($value, $old_value)
    {
    }
    /**
     * Hide the passphrase in REST API responses from users who cannot manage the credentials.
     *
     * @param WP_REST_Response   $response Response.
     * @param WC_Payment_Gateway $gateway  Gateway.
     * @return WP_REST_Response
     */
    public function redact_rest_credential_settings($response, $gateway)
    {
    }
    /**
     * Add a notice to the merchant_key and merchant_id fields when in test mode.
     *
     * @since 1.0.0
     */
    public function add_testmode_admin_settings_notice()
    {
    }
    /**
     * Check if this gateway is enabled and available in the base currency being traded with.
     *
     * @since 1.0.0
     * @return array
     */
    public function check_requirements()
    {
    }
    /**
     * Check if the gateway is available for use.
     *
     * @return bool
     */
    public function is_available()
    {
    }
    /**
     * Admin Panel Options
     * - Options for bits like 'title' and availability on a country-by-country basis
     *
     * @since 1.0.0
     */
    public function admin_options()
    {
    }
    /**
     * Generate the Payfast button link.
     *
     * @since 1.0.0
     *
     * @param int $order_id Order ID.
     * @return void
     */
    public function generate_payfast_form($order_id)
    {
    }
    /**
     * Process the payment and return the result.
     *
     * @since 1.0.0
     *
     * @throws Exception When there is an error processing the payment.
     *
     * @param int $order_id Order ID.
     * @return string[] Payment result {
     *    @type string $result   Result of payment.
     *    @type string $redirect Redirect URL.
     * }
     */
    public function process_payment($order_id)
    {
    }
    /**
     * Receipt page.
     *
     * Display text and a button to direct the user to Payfast.
     *
     * @param int $order_id Order ID (WooCommerce passes order ID from order-receipt template).
     * @since 1.0.0
     */
    public function receipt_page($order_id)
    {
    }
    /**
     * Check Payfast ITN response.
     *
     * @since 1.0.0
     */
    public function check_itn_response()
    {
    }
    /**
     * Check Payfast ITN validity.
     *
     * @param array $data Data.
     * @since 1.0.0
     */
    public function handle_itn_request($data)
    {
    }
    /**
     * Handle logging the order details.
     *
     * @since 1.4.5
     *
     * @param WC_Order $order Order object.
     */
    public function log_order_details($order)
    {
    }
    /**
     * This function mainly responds to ITN cancel requests initiated on Payfast, but also acts
     * just in case they are not cancelled.
     *
     * @version 1.4.3 Subscriptions flag
     *
     * @param array             $data          Should be from the Gateway ITN callback.
     * @param WC_Order          $order         Order object.
     * @param WC_Subscription[] $subscriptions Array of subscriptions.
     */
    public function handle_itn_payment_cancelled($data, $order, $subscriptions)
    {
    }
    /**
     * This function handles payment complete request by Payfast.
     *
     * @version 1.4.3 Subscriptions flag
     *
     * @param array             $data          Should be from the Gateway ITN callback.
     * @param WC_Order          $order         Order object.
     * @param WC_Subscription[] $subscriptions Array of subscriptions.
     */
    public function handle_itn_payment_complete($data, $order, $subscriptions)
    {
    }
    /**
     * Handle payment failed request by Payfast.
     *
     * @param array    $data  Should be from the Gateway ITN callback.
     * @param WC_Order $order Order object.
     */
    public function handle_itn_payment_failed($data, $order)
    {
    }
    /**
     * Handle payment pending request by Payfast.
     *
     * @since 1.4.0
     *
     * @param array    $data  Should be from the Gateway ITN callback.
     * @param WC_Order $order Order object.
     */
    public function handle_itn_payment_pending($data, $order)
    {
    }
    /**
     * Get the pre-order fee.
     *
     * @param string $order_id Order ID.
     * @return double
     */
    public function get_pre_order_fee($order_id)
    {
    }
    /**
     * Whether order contains a pre-order.
     *
     * @param string $order_id Order ID.
     * @return bool Whether order contains a pre-order.
     */
    public function order_contains_pre_order($order_id)
    {
    }
    /**
     * Whether the order requires payment tokenization.
     *
     * @param string $order_id Order ID.
     * @return bool Whether the order requires payment tokenization.
     */
    public function order_requires_payment_tokenization($order_id)
    {
    }
    /**
     * Whether order contains a pre-order fee.
     *
     * @return bool Whether order contains a pre-order fee.
     */
    public function cart_contains_pre_order_fee()
    {
    }
    /**
     * Store the Payfast subscription token
     *
     * @param string          $token        Payfast subscription token.
     * @param WC_Subscription $subscription The subscription object.
     */
    protected function _set_subscription_token($token, $subscription)
    {
    }
    /**
     * Retrieve the Payfast subscription token for a given order id.
     *
     * @param WC_Subscription $subscription The subscription object.
     * @return mixed Payfast subscription token.
     */
    protected function _get_subscription_token($subscription)
    {
    }
    /**
     * Retrieve the Payfast subscription token for a given order id.
     *
     * @param WC_Subscription $subscription The subscription object.
     */
    protected function _delete_subscription_token($subscription)
    {
    }
    /**
     * Whether another active Payfast subscription is using the same token.
     *
     * @param string          $token        Payfast subscription token.
     * @param WC_Subscription $subscription The subscription object.
     * @return bool
     */
    protected function _is_subscription_token_used_by_another_active_subscription($token, $subscription)
    {
    }
    /**
     * Store the Payfast renewal flag
     *
     * @since 1.4.3
     *
     * @param WC_Subscription $subscription The subscription object.
     */
    protected function _set_renewal_flag($subscription)
    {
    }
    /**
     * Retrieve the Payfast renewal flag for a given order id.
     *
     * @since 1.4.3
     *
     * @param WC_Subscription $subscription The subscription object.
     * @return bool
     */
    protected function _has_renewal_flag($subscription)
    {
    }
    /**
     * Retrieve the Payfast renewal flag for a given order id.
     *
     * @since 1.4.3
     *
     * @param WC_Subscription $subscription The subscription object.
     */
    protected function _delete_renewal_flag($subscription)
    {
    }
    /**
     * Wrapper for WooCommerce subscription function wc_is_subscription.
     *
     * @param WC_Order|int $order The order.
     * @return bool
     */
    public function is_subscription($order)
    {
    }
    /**
     * Cancel Payfast Tokenization(ad-hoc) token if subscription changed to other payment method.
     *
     * @param WC_Subscription $subscription       The subscription for which the payment method changed.
     * @param string          $new_payment_method New payment method name.
     */
    public function maybe_cancel_subscription_token($subscription, $new_payment_method)
    {
    }
    /**
     * Whether order contains a subscription.
     *
     * Wrapper function for wcs_order_contains_subscription
     *
     * @param WC_Order $order Order object.
     * @return bool Whether order contains a subscription.
     */
    public function order_contains_subscription($order)
    {
    }
    /**
     * Process scheduled subscription payment and update the subscription status accordingly.
     *
     * @param float    $amount_to_charge Subscription cost.
     * @param WC_Order $renewal_order    Renewal order object.
     */
    public function scheduled_subscription_payment($amount_to_charge, $renewal_order)
    {
    }
    /**
     * Attempt to process a subscription payment on the Payfast gateway.
     *
     * @param WC_Subscription $subscription     The subscription object.
     * @param float           $amount_to_charge The amount to charge.
     * @return mixed WP_Error on failure, bool true on success
     */
    public function submit_subscription_payment($subscription, $amount_to_charge)
    {
    }
    /**
     * Get a name for the subscription item. For multiple
     * item only Subscription $date will be returned.
     *
     * For subscriptions with no items Site/Blog name will be returned.
     *
     * @param WC_Subscription $subscription The subscription object.
     * @return string
     */
    public function get_subscription_name($subscription)
    {
    }
    /**
     * Setup api data for the the adhoc payment.
     *
     * @since 1.4.0 introduced.
     *
     * @param string $token            Payfast subscription token.
     * @param float  $amount_to_charge Amount to charge.
     * @param string $item_name        Item name.
     * @param string $item_description Item description.
     *
     * @return bool|WP_Error WP_Error on failure, bool true on success
     */
    public function submit_ad_hoc_payment($token, $amount_to_charge, $item_name, $item_description)
    {
    }
    /**
     * Send off API request.
     *
     * @since 1.4.0 introduced.
     *
     * @param string $command  API command.
     * @param string $token    Payfast subscription token.
     * @param array  $api_args Arguments for the API request. See WP documentation for wp_remote_request.
     * @param string $method   GET | PUT | POST | DELETE.
     *
     * @return bool|WP_Error WP_Error on failure, bool true on success
     */
    public function api_request($command, $token, $api_args, $method = 'POST')
    {
    }
    /**
     * Responds to Subscriptions extension cancellation event.
     *
     * @since 1.4.0 introduced.
     * @param WC_Subscription $subscription The subscription object.
     */
    public function cancel_subscription_listener($subscription)
    {
    }
    /**
     * Cancel a pre-order subscription.
     *
     * @since 1.4.0
     *
     * @param string $token Payfast subscription token.
     *
     * @return bool|WP_Error WP_Error on failure, bool true on success.
     */
    public function cancel_pre_order_subscription($token)
    {
    }
    /**
     * Generate the parameter string to send to Payfast.
     *
     * @since 1.4.0 introduced.
     *
     * @param array $api_data               Data to send to the Payfast API.
     * @param bool  $sort_data_before_merge Whether to sort before merge. Default true.
     * @param bool  $skip_empty_values      Should key value pairs be ignored when generating signature? Default true.
     *
     * @return string
     */
    protected function _generate_parameter_string($api_data, $sort_data_before_merge = \true, $skip_empty_values = \true)
    {
    }
    /**
     * Process pre-order payment.
     *
     * @since 1.4.0 introduced.
     *
     * @param WC_Order $order Order object.
     */
    public function process_pre_order_payments($order)
    {
    }
    /**
     * Setup constants.
     *
     * Setup common values and messages used by the Payfast gateway.
     *
     * @since 1.0.0
     */
    public function setup_constants()
    {
    }
    /**
     * Log system processes.
     *
     * @since 1.0.0
     *
     * @param string $message Log message.
     */
    public function log($message)
    {
    }
    /**
     * Validate the signature against the returned data.
     *
     * @since 1.0.0
     *
     * @param array  $data      Returned data.
     * @param string $signature Signature to check.
     * @return bool Whether the signature is valid.
     */
    public function validate_signature($data, $signature)
    {
    }
    /**
     * Get the IP address ranges Payfast sends ITN requests from.
     *
     * Payfast publishes its ITN senders as IPv4 CIDR ranges. The list is hardcoded on purpose:
     * looking the ranges up at request time would put a network call in the payment notification
     * path, where a slow or failing lookup silently shrinks the allowlist.
     *
     * @since 1.7.9
     *
     * @return string[] IPv4 ranges in CIDR notation. A bare address is treated as a single host.
     */
    public function get_valid_ip_ranges()
    {
    }
    /**
     * Get the hostnames Payfast publishes its ITN sender addresses under.
     *
     * These are the four hostnames this gateway has always resolved. They are consulted only when
     * an address is not in the documented list, so the set of accepted addresses stays a superset
     * of what resolving them alone would accept.
     *
     * @since 1.7.9
     *
     * @return string[] Hostnames to resolve, empty when the lookup has been switched off.
     */
    public function get_valid_ip_hostnames()
    {
    }
    /**
     * Resolve the Payfast hostnames, caching each answer briefly.
     *
     * The result can only widen the set of accepted addresses, so a lookup that fails, times out
     * or answers with nothing is logged and the caller carries on. Only answers are cached; a
     * failure is retried on the next request, so a resolver that recovers is picked up at once
     * rather than leaving addresses reachable only through that hostname refused in the meantime.
     *
     * @since 1.7.9
     *
     * @return string[] Resolved IPv4 addresses, possibly empty.
     */
    public function get_resolved_ip_addresses()
    {
    }
    /**
     * Parse an IPv4 range into the network address and prefix length it stands for.
     *
     * This is also what decides which filtered entries survive in get_valid_ip_ranges(), so a
     * subclass that overrides is_ip_in_range() to accept another notation has to override this
     * method as well. Entries written in that notation are dropped here otherwise, before the
     * matcher ever sees them.
     *
     * @since 1.7.9
     *
     * @param string $range IPv4 range in CIDR notation, or a bare IPv4 address for a single host.
     * @return array|false Network address as a long and prefix length, or false when the range is malformed.
     */
    protected function parse_ip_range($range)
    {
    }
    /**
     * Check whether an IPv4 address falls inside a range.
     *
     * @since 1.7.9
     *
     * @param string $ip    IPv4 address to check.
     * @param string $range IPv4 range in CIDR notation, or a bare IPv4 address for a single host.
     * @return bool
     */
    public function is_ip_in_range($ip, $range)
    {
    }
    /**
     * Validate the IP address to make sure it's coming from Payfast.
     *
     * The address is matched against the ranges Payfast publishes for its ITN senders, which is a
     * wider set than the addresses currently held in DNS.
     *
     * @param string $source_ip Source IP.
     * @since 1.0.0
     * @return bool
     */
    public function is_valid_ip($source_ip)
    {
    }
    /**
     * Validate response data.
     *
     * @since 1.0.0
     *
     * @param array  $post_data POST data for original request.
     * @param string $proxy     Address of proxy to use or NULL if no proxy.
     * @return bool
     */
    public function validate_response_data($post_data, $proxy = \null)
    {
    }
    /**
     * Check the given amounts are equal.
     *
     * Checks to see whether the given amounts are equal using a proper floating
     * point comparison with an Epsilon which ensures that insignificant decimal
     * places are ignored in the comparison.
     *
     * eg. 100.00 is equal to 100.0001
     *
     * @since 1.0.0
     *
     * @param float $amount1 1st amount for comparison.
     * @param float $amount2 2nd amount for comparison.
     *
     * @return bool
     */
    public function amounts_equal($amount1, $amount2)
    {
    }
    /**
     * Get order property with compatibility check on order getter introduced
     * in WC 3.0.
     *
     * @since 1.4.1
     *
     * @param WC_Order $order Order object.
     * @param string   $prop  Property name.
     *
     * @return mixed Property value
     */
    public static function get_order_prop($order, $prop)
    {
    }
    /**
     * Gets user-friendly error message strings from keys
     *
     * @param   string $key  The key representing an error.
     *
     * @return  string        The user-friendly error message for display
     */
    public function get_error_message($key)
    {
    }
    /**
     * Show possible admin notices
     */
    public function admin_notices()
    {
    }
    /**
     * Displays the amount_fee as returned by payfast.
     *
     * @param int $order_id The ID of the order.
     */
    public function display_order_fee($order_id)
    {
    }
    /**
     * Displays the amount_net as returned by payfast.
     *
     * @param int $order_id The ID of the order.
     */
    public function display_order_net($order_id)
    {
    }
    /**
     * Filters the currency to 'ZAR' if set via WooPayments multi-currency feature.
     *
     * @param string $currency The currency code.
     * @return string
     */
    public function filter_currency($currency)
    {
    }
    /**
     * Check if the saved order currency is ZAR, the only currency Payfast charges in.
     *
     * @param WC_Order $order Order object.
     * @return bool
     */
    public function is_order_currency_supported($order)
    {
    }
    /**
     * Get a Payfast-safe order return URL.
     *
     * Third-party plugins can turn the order-received
     * URL into a relative `/order-received/{id}/` path. Payfast rejects relative
     * URLs, so rebuild from the checkout URL without endpoint filters.
     *
     * @since 1.7.8
     * @param WC_Order $order Order object.
     * @return string Absolute checkout order-received URL.
     */
    protected function get_payfast_return_url($order)
    {
    }
    /**
     * Validate the Payfast credentials.
     * This function is used to validate the Payfast credentials.
     *
     * @param array $old_settings Old Payfast settings.
     * @param array $settings     Payfast settings.
     */
    public function validate_payfast_credentials($old_settings, $settings)
    {
    }
}
\define('WC_GATEWAY_PAYFAST_VERSION', '1.7.9');
// WRCS: DEFINED_VERSION.
\define('WC_GATEWAY_PAYFAST_URL', \untrailingslashit(\plugins_url('/', __FILE__)));
\define('WC_GATEWAY_PAYFAST_PATH', \untrailingslashit(\plugin_dir_path(__FILE__)));
/**
 * Initialize the gateway.
 *
 * @since 1.0.0
 */
function woocommerce_payfast_init()
{
}
/**
 * Add links to the plugin action links.
 *
 * @since 1.4.13
 *
 * @param array $links Plugin action links.
 * @return array Modified plugin action links.
 */
function woocommerce_payfast_plugin_links($links)
{
}
/**
 * Add the gateway to WooCommerce
 *
 * @since 1.0.0
 *
 * @param string[] $methods WooCommerce payment methods.
 * @return string[] Modified payment methods to include Payfast.
 */
function woocommerce_payfast_add_gateway($methods)
{
}
/**
 * Add the gateway to WooCommerce Blocks.
 *
 * @since 1.4.19
 */
function woocommerce_payfast_woocommerce_blocks_support()
{
}
/**
 * Declares compatibility with Woocommerce features.
 *
 * List of features:
 * - custom_order_tables
 * - product_block_editor
 *
 * @since 1.6.1 Rename function
 * @return void
 */
function woocommerce_payfast_declare_feature_compatibility()
{
}
/**
 * Initialize the privacy class.
 *
 * Initializes the privacy class for privacy export tools.
 *
 * @since 1.7.5
 * @return void
 */
function woocommerce_payfast_privacy_init()
{
}
/**
 * Display notice if WooCommerce is not installed.
 *
 * @since 1.5.8
 */
function woocommerce_payfast_missing_wc_notice()
{
}