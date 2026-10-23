<?php
/**
 * Generated stub declarations for woocommerce-payfast-gateway 1.5.9.
 * @see https://github.com/woocommerce/php-stubs
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
class WC_Gateway_PayFast_Privacy extends \WC_Abstract_Privacy
{
    /**
     * Constructor
     *
     */
    public function __construct()
    {
    }
    /**
     * Returns a list of orders that are using one of Payfast's payment methods.
     *
     * @param string  $email_address
     * @param int     $page
     *
     * @return array WP_Post
     */
    protected function get_payfast_orders($email_address, $page)
    {
    }
    /**
     * Gets the message of the privacy to display.
     *
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
     * @param WC_Order $order
     * @return array
     */
    protected function maybe_handle_subscription($order)
    {
    }
    /**
     * Handle eraser of data tied to Orders
     *
     * @param WC_Order $order
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
 * @package WooCommerce
 * @category Payment Gateways
 * @author WooCommerce
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
     * @access protected
     * @var array $data_to_send
     */
    protected $data_to_send = array();
    /**
     * Constructor
     */
    public function __construct()
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
     * add_testmode_admin_settings_notice()
     * Add a notice to the merchant_key and merchant_id fields when in test mode.
     *
     * @since 1.0.0
     */
    public function add_testmode_admin_settings_notice()
    {
    }
    /**
     * check_requirements()
     *
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
     */
    public function generate_payfast_form($order_id)
    {
    }
    /**
     * Process the payment and return the result.
     *
     * @since 1.0.0
     */
    public function process_payment($order_id)
    {
    }
    /**
     * Reciept page.
     *
     * Display text and a button to direct the user to Payfast.
     *
     * @param WC_Order $order Order object.
     * @since 1.0.0
     */
    public function receipt_page($order)
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
     */
    public function log_order_details($order)
    {
    }
    /**
     * This function mainly responds to ITN cancel requests initiated on Payfast, but also acts
     * just in case they are not cancelled.
     * @version 1.4.3 Subscriptions flag
     *
     * @param array $data should be from the Gatewy ITN callback.
     * @param WC_Order $order
     */
    public function handle_itn_payment_cancelled($data, $order, $subscriptions)
    {
    }
    /**
     * This function handles payment complete request by Payfast.
     * @version 1.4.3 Subscriptions flag
     *
     * @param array $data should be from the Gatewy ITN callback.
     * @param WC_Order $order
     */
    public function handle_itn_payment_complete($data, $order, $subscriptions)
    {
    }
    /**
     * @param $data
     * @param $order
     */
    public function handle_itn_payment_failed($data, $order)
    {
    }
    /**
     * @since 1.4.0 introduced
     * @param $data
     * @param $order
     */
    public function handle_itn_payment_pending($data, $order)
    {
    }
    /**
     * @param string $order_id
     * @return double
     */
    public function get_pre_order_fee($order_id)
    {
    }
    /**
     * @param string $order_id
     * @return bool
     */
    public function order_contains_pre_order($order_id)
    {
    }
    /**
     * @param string $order_id
     *
     * @return bool
     */
    public function order_requires_payment_tokenization($order_id)
    {
    }
    /**
     * @return bool
     */
    public function cart_contains_pre_order_fee()
    {
    }
    /**
     * Store the Payfast subscription token
     *
     * @param string $token
     * @param WC_Subscription $subscription
     */
    protected function _set_subscription_token($token, $subscription)
    {
    }
    /**
     * Retrieve the Payfast subscription token for a given order id.
     *
     * @param WC_Subscription $subscription
     * @return mixed
     */
    protected function _get_subscription_token($subscription)
    {
    }
    /**
     * Retrieve the Payfast subscription token for a given order id.
     *
     * @param WC_Subscription $subscription
     * @return mixed
     */
    protected function _delete_subscription_token($subscription)
    {
    }
    /**
     * Store the Payfast renewal flag
     * @since 1.4.3
     *
     * @param string $token
     * @param WC_Subscription $subscription
     */
    protected function _set_renewal_flag($subscription)
    {
    }
    /**
     * Retrieve the Payfast renewal flag for a given order id.
     * @since 1.4.3
     *
     * @param WC_Subscription $subscription
     * @return bool
     */
    protected function _has_renewal_flag($subscription)
    {
    }
    /**
     * Retrieve the Payfast renewal flag for a given order id.
     * @since 1.4.3
     *
     * @param WC_Subscription $subscription
     * @return mixed
     */
    protected function _delete_renewal_flag($subscription)
    {
    }
    /**
     * Store the Payfast pre_order_token token
     *
     * @param string   $token
     * @param WC_Order $order
     */
    protected function _set_pre_order_token($token, $order)
    {
    }
    /**
     * Retrieve the Payfast pre-order token for a given order id.
     *
     * @param WC_Order $order
     * @return mixed
     */
    protected function _get_pre_order_token($order)
    {
    }
    /**
     * Wrapper for WooCommerce subscription function wc_is_subscription.
     *
     * @param WC_Order $order The order.
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
     * Wrapper function for wcs_order_contains_subscription
     *
     * @param WC_Order $order
     * @return bool
     */
    public function order_contains_subscription($order)
    {
    }
    /**
     * @param $amount_to_charge
     * @param WC_Order $renewal_order
     */
    public function scheduled_subscription_payment($amount_to_charge, $renewal_order)
    {
    }
    /**
     * @param WC_Subscription $subscription
     * @param $amount_to_charge
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
     * @param WC_Subscription $subscription
     * @return string
     */
    public function get_subscription_name($subscription)
    {
    }
    /**
     * Setup api data for the the adhoc payment.
     *
     * @since 1.4.0 introduced.
     * @param string $token
     * @param double $amount_to_charge
     * @param string $item_name
     * @param string $item_description
     *
     * @return bool|WP_Error
     */
    public function submit_ad_hoc_payment($token, $amount_to_charge, $item_name, $item_description)
    {
    }
    /**
     * Send off API request.
     *
     * @since 1.4.0 introduced.
     *
     * @param $command
     * @param $token
     * @param $api_args
     * @param string $method GET | PUT | POST | DELETE.
     *
     * @return bool|WP_Error
     */
    public function api_request($command, $token, $api_args, $method = 'POST')
    {
    }
    /**
     * Responds to Subscriptions extension cancellation event.
     *
     * @since 1.4.0 introduced.
     * @param WC_Subscription $subscription
     */
    public function cancel_subscription_listener($subscription)
    {
    }
    /**
     * @since 1.4.0
     * @param string $token
     *
     * @return bool|WP_Error
     */
    public function cancel_pre_order_subscription($token)
    {
    }
    /**
     * @since 1.4.0 introduced.
     * @param      $api_data
     * @param bool $sort_data_before_merge? default true.
     * @param bool $skip_empty_values Should key value pairs be ignored when generating signature?  Default true.
     *
     * @return string
     */
    protected function _generate_parameter_string($api_data, $sort_data_before_merge = \true, $skip_empty_values = \true)
    {
    }
    /**
     * @since 1.4.0 introduced.
     * @param WC_Order $order
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
     * @since 1.0.0
     */
    public function log($message)
    {
    }
    /**
     * validate_signature()
     *
     * Validate the signature against the returned data.
     *
     * @param array $data
     * @param string $signature
     * @since 1.0.0
     * @return string
     */
    public function validate_signature($data, $signature)
    {
    }
    /**
     * Validate the IP address to make sure it's coming from Payfast.
     *
     * @param string $source_ip Source IP.
     * @since 1.0.0
     * @return bool
     */
    public function is_valid_ip($source_ip)
    {
    }
    /**
     * validate_response_data()
     *
     * @param array $post_data
     * @param string $proxy Address of proxy to use or NULL if no proxy.
     * @since 1.0.0
     * @return bool
     */
    public function validate_response_data($post_data, $proxy = \null)
    {
    }
    /**
     * amounts_equal()
     *
     * Checks to see whether the given amounts are equal using a proper floating
     * point comparison with an Epsilon which ensures that insignificant decimal
     * places are ignored in the comparison.
     *
     * eg. 100.00 is equal to 100.0001
     *
     * @author Jonathan Smit
     * @param $amount1 Float 1st amount for comparison
     * @param $amount2 Float 2nd amount for comparison
     * @since 1.0.0
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
     * @param   string  $key  The key representing an error
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
}
\define('WC_GATEWAY_PAYFAST_VERSION', '1.5.9');
// WRCS: DEFINED_VERSION.
\define('WC_GATEWAY_PAYFAST_URL', \untrailingslashit(\plugins_url(\basename(\plugin_dir_path(__FILE__)), \basename(__FILE__))));
\define('WC_GATEWAY_PAYFAST_PATH', \untrailingslashit(\plugin_dir_path(__FILE__)));
/**
 * Initialize the gateway.
 * @since 1.0.0
 */
function woocommerce_payfast_init()
{
}
function woocommerce_payfast_plugin_links($links)
{
}
/**
 * Add the gateway to WooCommerce
 * @since 1.0.0
 */
function woocommerce_payfast_add_gateway($methods)
{
}
function woocommerce_payfast_woocommerce_blocks_support()
{
}
/**
 * Declares support for HPOS.
 *
 * @return void
 */
function woocommerce_payfast_declare_hpos_compatibility()
{
}
/**
 * Display notice if WooCommerce is not installed.
 *
 * @since x.x.x
 */
function woocommerce_payfast_missing_wc_notice()
{
}