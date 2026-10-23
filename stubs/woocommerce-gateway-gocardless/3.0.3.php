<?php
/**
 * Generated stub declarations for woocommerce-gateway-gocardless 3.0.3.
 * @see https://github.com/woocommerce/php-stubs
 */

/**
 * Wrapper for GoCardless API.
 * Handles ajax requests for GoCardless payment gateway.
 *
 * @since 2.7.0
 */
class WC_GoCardless_Ajax
{
    /**
     * GoCardless gateway instance.
     *
     * @var WC_Gateway_GoCardless
     */
    protected $gateway;
    /**
     * Class Initialization.
     *
     * @return void
     */
    public function init()
    {
    }
    /**
     * Returns an instantiated gateway.
     *
     * @since 2.7.0
     * @return WC_Gateway_GoCardless
     */
    protected function get_gateway()
    {
    }
    /**
     * Regenerate the webhook secret.
     *
     * @since 2.7.1
     */
    public function ajax_regenerate_webhook_secret()
    {
    }
}
/**
 * Wrapper for GoCardless API.
 *
 * @since 2.4.0
 */
class WC_GoCardless_API
{
    const BASE_URL = 'https://api.gocardless.com/';
    const SANDBOX_BASE_URL = 'https://api-sandbox.gocardless.com/';
    const API_VERSION = '2015-07-06';
    /**
     * Supported countries.
     *
     * @see https://gocardless.com/guides/sepa/what-is-sepa/
     *
     * @since 2.4.0
     *
     * @var array
     */
    public static $supported_countries = array('AT', 'AU', 'BE', 'BG', 'CA', 'CH', 'CY', 'CZ', 'DK', 'EE', 'FI', 'FR', 'DE', 'GB', 'GR', 'HR', 'HU', 'IE', 'IS', 'IT', 'LI', 'LV', 'LT', 'LU', 'MT', 'MC', 'NL', 'NO', 'NZ', 'PL', 'PT', 'RO', 'SE', 'SM', 'SK', 'SI', 'ES', 'US', 'AD', 'AX', 'GF', 'GP', 'MQ', 'YT', 'BL', 'MF', 'RE', 'PM', 'VA', 'GI', 'GG', 'JE', 'IM');
    /**
     * Supported currencies.
     *
     * @see https://gocardless.com/faq/merchants/international-payments/
     *
     * @since 2.4.0
     *
     * @var array
     */
    public static $supported_currencies = array('GBP', 'EUR', 'SEK', 'DKK', 'AUD', 'NZD', 'CAD', 'USD');
    /**
     * Check whether given country is supported by GoCardless.
     *
     * @since 2.4.0
     *
     * @param string $country Country code in ISO-3166-2.
     *
     * @return bool Returns true if supported
     */
    public static function is_country_supported($country = '')
    {
    }
    /**
     * Check whether given currency is supported by GoCardless.
     *
     * @since 2.4.0
     *
     * @param string $currency Currency code in ISO-4217.
     *
     * @return bool Returns true if supported
     */
    public static function is_currency_supported($currency = '')
    {
    }
    /**
     * API request wrapper to GoCardless Pro.
     *
     * @since 2.4.0
     *
     * @param string $endpoint API Endpoint.
     * @param array  $args     Args.
     *
     * @return array|WP_Error Returns WP_Error for unexpected result or parsed
     *                        array for succeed response
     */
    protected static function _request($endpoint, $args = array())
    {
    }
    /**
     * Get GoCardless settings.
     *
     * @since 2.4.0
     *
     * @return array Settings array
     */
    public static function get_settings()
    {
    }
    /**
     * Create redirect flow.
     *
     * @since 2.4.0
     * @deprecated 2.7.0
     *
     * @param array $params Parameters to create redirect flow.
     *
     * @return WP_Error|array See self::_request return value
     */
    public static function create_redirect_flow($params = array())
    {
    }
    /**
     * Create billing request.
     *
     * @since 2.7.0
     *
     * @param array $params Parameters to create billing request.
     *
     * @return WP_Error|array See self::_request return value
     */
    public static function create_billing_request($params = array())
    {
    }
    /**
     * Collect customer details.
     *
     * @since 3.0.0
     *
     * @param string $billing_request_id Billing request ID.
     * @param array  $customer_details   Customer details.
     *
     * @return WP_Error|array See self::_request return value
     */
    public static function collect_customer_details($billing_request_id, $customer_details = array())
    {
    }
    /**
     * Get billing request.
     *
     * @since 2.7.0
     *
     * @param string $billing_request_id Billing request ID.
     *
     * @return WP_Error|array See self::_request return value
     */
    public static function get_billing_request($billing_request_id)
    {
    }
    /**
     * Create billing request flow.
     *
     * @since 2.7.0
     *
     * @param array $params Parameters to create billing request flow.
     *
     * @return WP_Error|array See self::_request return value
     */
    public static function create_billing_request_flow($params = array())
    {
    }
    /**
     * Complete redirect flow.
     *
     * @since 2.4.0
     * @deprecated 2.7.0
     *
     * @param string $redirect_flow_id ID from self::create_redirect_flow.
     * @param array  $params           Parameters to complete redirect flow.
     *
     * @return array
     */
    public static function complete_redirect_flow($redirect_flow_id, $params = array())
    {
    }
    /**
     * Get a single mandate from give mandate_id.
     *
     * @since 2.4.0
     *
     * @param string $mandate_id Mandate ID.
     *
     * @return WP_Error|array See self::_request return value
     */
    public static function get_mandate($mandate_id)
    {
    }
    /**
     * Updates a mandate.
     *
     * @since 2.4.0
     *
     * @param array $params Parameters to update mandate.
     *
     * @return WP_Error|array See self::_request return value
     */
    public static function update_mandate($params = array())
    {
    }
    /**
     * Create payment.
     *
     * @param array $params Parameters to create payment.
     *
     * @return array|WP_Error
     */
    public static function create_payment($params = array())
    {
    }
    /**
     * Update payment.
     *
     * @param string $payment_id Payment ID.
     * @param array  $params     Parameters to update payment.
     *
     * @return array|WP_Error
     */
    public static function update_payment($payment_id, $params = array())
    {
    }
    /**
     * Get a single payment from given payment_id.
     *
     * @param string $payment_id Payment ID.
     *
     * @return array
     */
    public static function get_payment($payment_id)
    {
    }
    /**
     * Cancel payment.
     *
     * @param string $payment_id Payment ID.
     *
     * @return array|WP_Error
     */
    public static function cancel_payment($payment_id)
    {
    }
    /**
     * Retries a failed payment if the underlying mandate is active.
     *
     * @param string $payment_id Payment ID.
     * @param array  $args       Parameters to retry payment.
     */
    public static function retry_payment($payment_id, $args = array())
    {
    }
    /**
     * Creates a subscription.
     *
     * @since 2.4.0
     *
     * @param array $params Parameters to create subscription.
     *
     * @return WP_Error|array See self::_request return value
     */
    public static function create_subscription($params = array())
    {
    }
    /**
     * Get a single subscription from given subscription_id.
     *
     * @param string $subscription_id Subscription ID.
     *
     * @return WP_Error|array See self::_request return value
     */
    public static function get_subscription($subscription_id)
    {
    }
    /**
     * Cancel a subscription of a given subscription_id.
     *
     * @param string $subscription_id Subscriptino ID.
     *
     * @return WP_Error|array See self::_request return value
     */
    public static function cancel_subscription($subscription_id)
    {
    }
    /**
     * Get a single customer from given customer_id.
     *
     * @param string $customer_id Customer ID.
     *
     * @return WP_Error|array See self::_request return value
     */
    public static function get_customer($customer_id)
    {
    }
    /**
     * Update a single customer from given customer_id.
     *
     * @since 2.4.1
     * @param string $customer_id Customer ID.
     * @param array  $params Parameters to update customer.
     *
     * @return WP_Error|array See self::_request return value
     */
    public static function update_customer($customer_id, $params = array())
    {
    }
    /**
     * Creates a new refund.
     *
     * @since 2.4.0
     *
     * @param array $params Parameters to create refund.
     *
     * @return WP_Error|array See self::_request return value
     */
    public static function create_refund($params = array())
    {
    }
    /**
     * Get a single refund from given refund_id.
     *
     * @param string $refund_id Refund ID.
     *
     * @return WP_Error|array See self::_request return value
     */
    public static function get_refund($refund_id)
    {
    }
    /**
     * Get a single customer bank account.
     *
     * @param string $customer_bank_account_id Customer bank account ID.
     *
     * @return WP_Error|array See self::_request return value
     */
    public static function get_customer_bank_account($customer_bank_account_id)
    {
    }
    /**
     * Get supported countries by GoCardless.
     *
     * @return array
     *
     * @since 2.6.0
     */
    public static function get_supported_countries()
    {
    }
    /**
     * Get supported currencies by GoCardless.
     *
     * @return array
     *
     * @since 2.8.0
     */
    public static function get_supported_currencies()
    {
    }
    /**
     * Get list of creditors.
     *
     * @since 2.7.0
     *
     * @return WP_Error|array See self::_request return value
     */
    public static function get_creditors()
    {
    }
}
/**
 * Compatibility class for WooCommerce Custom Order Tables
 *
 * @since 2.4.20
 */
class WC_GoCardless_Compat
{
    /**
     * Helper function to get whether custom order tables are enabled or not.
     *
     * @return bool
     */
    public static function is_cot_enabled()
    {
    }
}
/**
 * Gateway class
 */
class WC_GoCardless_Gateway extends \WC_Payment_Gateway
{
    /**
     * Gateway ID (subclasses may override, e.g. PayTo).
     *
     * @var string
     */
    public $id = 'gocardless';
    /**
     * Notices to display.
     *
     * @since 2.4.0
     *
     * @var array
     */
    private $_notices = array();
    /**
     * Access token.
     *
     * @var string
     */
    protected $access_token;
    /**
     * Webhook secret.
     *
     * @var string
     */
    protected $webhook_secret;
    /**
     * Scheme.
     *
     * @var string
     */
    protected $scheme;
    /**
     * Saved bank accounts.
     *
     * @var bool
     */
    protected $saved_bank_accounts;
    /**
     * Is Pay by Bank (formerly Instant Bank Pay) turned on.
     *
     * @var bool
     */
    protected $instant_bank_pay;
    /**
     * Test mode.
     *
     * @var bool
     */
    protected $testmode;
    /**
     * Whether fallback to Direct debit scheme enabled when Pay by Bank (formerly IBP) is unavailable.
     *
     * @var bool
     */
    protected $fallback_enabled = \true;
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Setup hooks for the gateway.
     *
     * @return void
     */
    protected function setup_hooks()
    {
    }
    /**
     * Check access token action (just retrieved or discarded) by user.
     *
     * @since 2.4.0
     * @deprecated 2.8.0
     * @todo Remove this method in future release.
     */
    public function check_access_token()
    {
    }
    /**
     * Connect GoCardless account.
     *
     * @return bool Returns true if connected successfully
     */
    public function connect_gocardless()
    {
    }
    /**
     * Disconnect GoCardless account.
     *
     * @return bool Returns true if disconnected successfully.
     */
    public function disconnect_gocardless()
    {
    }
    /**
     * Process admin options.
     *
     * Also, clear the available scheme transient.
     *
     * @return bool
     * @since 3.0.0
     */
    public function process_admin_options()
    {
    }
    /**
     * Get connection HTML.
     *
     * @since 2.4.0
     *
     * @param mixed $key  Field's key.
     * @param mixed $data Field's data.
     *
     * @return string Connection HTML.
     */
    public function generate_connection_html($key, $data)
    {
    }
    /**
     * Generate Webhook Secret Input HTML.
     *
     * @param string $key Field key.
     * @param array  $data Field data.
     * @since  2.7.0
     * @return string
     */
    public function generate_webhook_secret_html($key, $data)
    {
    }
    /**
     * Get hidden field HTML.
     *
     * @since 2.4.0
     *
     * @param string $key Field's key.
     *
     * @return string Hidden field HTML.
     */
    public function generate_hidden_html($key)
    {
    }
    /**
     * Get connect URL.
     *
     * @since 2.4.0
     *
     * @param array $args Arguments to connect URL.
     *
     * @return string Connect URL.
     */
    public function get_connect_url($args = array())
    {
    }
    /**
     * Get disconnect URL.
     *
     * @since 2.4.0
     *
     * @return string Disconnect URL
     */
    public function get_disconnect_url()
    {
    }
    /**
     * Add admin notice.
     *
     * @since 2.4.0
     *
     * @param string $slug         Slug.
     * @param string $notice_class Notice class.
     * @param string $message      Notice message.
     */
    protected function _add_admin_notice($slug, $notice_class, $message)
    {
    }
    /**
     * Display any notices we've collected thus far (e.g. for connection, disconnection).
     *
     * @since 2.4.0
     */
    public function display_admin_notices()
    {
    }
    /**
     * Initialise Gateway Settings Form Fields.
     */
    public function init_form_fields()
    {
    }
    /**
     * Load saved settings.
     *
     * @since 2.4.0
     *
     * @return void
     */
    public function load_settings()
    {
    }
    /**
     * Check if this gateway is enabled.
     *
     * @return bool Check if gateway is available.
     */
    public function is_available()
    {
    }
    /**
     * Gets the payment currency, either from current order or WC settings.
     *
     * @since 2.8.0
     *
     * @return string Three-letter currency code.
     */
    protected function get_payment_currency()
    {
    }
    /**
     * Returns the order_id if on the checkout pay page
     *
     * @since 2.8.0
     * @return int Order ID.
     */
    public function get_checkout_pay_page_order_id()
    {
    }
    /**
     * Check if current admin page is checkout settings page.
     *
     * @since 2.4.2
     *
     * @return bool Returns true if in checkout settings page.
     */
    protected function is_checkout_settings_page()
    {
    }
    /**
     * Payment form on checkout page.
     *
     * @since 2.4.0
     */
    public function payment_fields()
    {
    }
    /**
     * Checks whether user requsting checkout to use saved token.
     *
     * @since 2.4.0
     *
     * @return bool Returns true if processing payment with saved token / mandate
     */
    protected function _is_processing_payment_with_saved_token()
    {
    }
    /**
     * POST field name for saved payment token selection (matches WooCommerce tokenization UI).
     *
     * @since 3.0.0
     *
     * @return string Input name without brackets.
     */
    protected function get_payment_token_input_name()
    {
    }
    /**
     * POST field name for "save payment method" checkbox.
     *
     * @since 3.0.0
     *
     * @return string Input name.
     */
    protected function get_new_payment_method_input_name()
    {
    }
    /**
     * Process payment with saved token.
     *
     * The stored token contains mandate ID that can be used to take payment
     * from the customer.
     *
     * @since 2.4.0
     *
     * @param WC_Order $order Order object.
     *
     * @return array|WP_Error Returns array if succeed, otherwise WP_Error is returned.
     */
    protected function _process_payment_with_saved_token(\WC_Order $order)
    {
    }
    /**
     * Process payment with billing request flow.
     *
     * @since 2.7.0
     *
     * @param WC_Order $order Order object.
     *
     * @return array|bool Returns array if succeed, otherwise false is returned
     */
    protected function _process_payment_with_billing_request_flow(\WC_Order $order)
    {
    }
    /**
     * Collect customer details.
     *
     * @since 3.0.0
     *
     * @param string   $billing_request_id Billing request ID.
     * @param WC_Order $order              Order object.
     * @return bool Returns true if succeed, otherwise false is returned
     */
    protected function collect_customer_details($billing_request_id, $order)
    {
    }
    /**
     * Create a billing request and billing request flow to process the payment.
     *
     * @see https://developer.gocardless.com/api-reference/#billing-requests-billing-requests
     * @see https://developer.gocardless.com/api-reference/#billing-requests-billing-request-flows
     *
     * @since 2.7.0
     *
     * @param WC_Order $order Order object.
     * @return array Returns array with created billing request flow ID if succeed, otherwise array with error message is returned.
     */
    public function create_billing_request_flow(\WC_Order $order)
    {
    }
    /**
     * Check if the payment method supports instant payment.
     *
     * @since 2.7.0
     *
     * @param WC_Order $order Order object.
     * @return bool Returns true if the payment method supports instant payment.
     */
    protected function supports_instant_payment($order)
    {
    }
    /**
     * Check if the order needs mandate.
     *
     * The mandate is required for the following cases:
     * - Order contains pre-orders product which needs to be paid upon release.
     * - Order contains subscription product.
     * - If Customer has checked save bank account.
     *
     * @since 2.7.0
     *
     * @param WC_Order $order Order object.
     * @return bool Returns true if the order needs mandate.
     */
    protected function needs_mandate($order)
    {
    }
    /**
     * Check if request is to change payment method.
     *
     * @since 2.7.0
     *
     * @return boolean
     */
    protected function is_change_payment_method_request()
    {
    }
    /**
     * Check if the order contains pre-orders product which needs to be paid upon release.
     *
     * @since 2.7.0
     *
     * @param WC_Order $order Order object.
     * @return bool Returns true if the order contains pre-orders product which needs to be paid upon release.
     */
    protected function is_pre_orders_pay_upon_release($order)
    {
    }
    /**
     * Process the payment and return the result
     *
     * @param int $order_id Order ID.
     *
     * @return array|bool Returns array if succeed, otherwise false is returned
     */
    public function process_payment($order_id)
    {
    }
    /**
     * Process refund.
     *
     * Refund is disabled by default. Merchant needs to contact GoCardless to
     * enable refund.
     *
     * @since 2.4.0
     *
     * @param  int    $order_id      Order ID.
     * @param  float  $refund_amount Amount to refund.
     * @param  string $reason        Reason to refund.
     *
     * @return WP_Error|boolean True or false based on success, or a WP_Error object.
     */
    public function process_refund($order_id, $refund_amount = \null, $reason = '')
    {
    }
    /**
     * Get success redirect URL.
     * URL to redirect after successfull GoCardless transcation.
     *
     * @since 2.4.0
     *
     * @param WC_Order|int $order Order object or ID.
     *
     * @return string Success redirect URL.
     */
    public function get_success_redirect_url($order)
    {
    }
    /**
     * Get webhook URL.
     *
     * @since 2.4.0
     *
     * @return string Webhook URL
     */
    public function get_webhook_url()
    {
    }
    /**
     * Get create webhook URL via GoCardless dashboard.
     *
     * @since 2.4.0
     *
     * @return string Dashboard URL
     */
    public function get_create_webhook_url()
    {
    }
    /**
     * Handler for GoCardless endpoint.
     *
     * @since 2.4.0
     */
    public function gocardless_endpoint_handler()
    {
    }
    /**
     * Handle redirect back from GoCardless for billing request flow.
     *
     * @since 2.9.6
     *
     * @return void
     */
    protected function handle_billing_request_flow()
    {
    }
    /**
     * Handler after mandate is created.
     *
     * @since 2.4.0
     *
     * @param int    $order_id   Order ID.
     * @param string $mandate_id Mandate ID.
     *
     * @throws \Exception Exception.
     */
    protected function _after_mandate_created($order_id, $mandate_id)
    {
    }
    /**
     * Maybe create the payment of a given order_id and mandate_id.
     *
     * @since 2.4.0
     *
     * @throws \Exception Exception.
     *
     * @param int    $order_id   Order ID.
     * @param string $mandate_id Mandate ID.
     * @param float  $amount     Amount to charge.
     *
     * @return void
     */
    protected function _maybe_create_payment($order_id, $mandate_id, $amount = \null)
    {
    }
    /**
     * Handle payment creation for a given order.
     *
     * @param int   $order_id Order ID.
     * @param array $payment  Payment response from GoCardless.
     * @param bool  $is_dd    Is Direct Debit (mandate) payment? Default is false.
     * @return void
     */
    private function handle_payment_creation($order_id, $payment, $is_dd = \false)
    {
    }
    /**
     * Checks whether a response specifies if mandate has been replaced.
     *
     * @since 2.4.5
     * @version 2.4.5
     *
     * @param array|WP_Error $resp Response from create payments.
     *
     * @return bool Returns true if response specifies mandate has been replaced.
     */
    protected function is_mandate_replaced($resp)
    {
    }
    /**
     * Handle redirect flow from GoCardless.
     *
     * @since 2.4.0
     *
     * @return void
     */
    protected function _handle_webhook()
    {
    }
    /**
     * Process webhook payload.
     *
     * @since 2.4.0
     * @version 2.4.5
     *
     * @param array $payload Payload.
     */
    public function process_webhook_payload(array $payload)
    {
    }
    /**
     * Process mandate event from webhook.
     *
     * @since 2.4.5
     * @version 2.4.5
     *
     * @param array $event Event payload.
     */
    protected function _process_mandate_event(array $event)
    {
    }
    /**
     * Process mandate event 'replaced' from webhook.
     *
     * @since 2.4.5
     * @version 2.4.5
     *
     * @param array $event Event payload.
     */
    protected function _process_mandate_event_replaced(array $event)
    {
    }
    /**
     * Remove saved payment methods by mandate ID.
     *
     * @since 2.7.0
     * @param string $mandate_id Mandate ID.
     * @return void
     */
    protected function _remove_saved_payment_methods($mandate_id)
    {
    }
    /**
     * Update mandate with new mandate.
     *
     * @since 2.4.5
     * @version 2.4.5
     *
     * @param string $old_mandate Old mandate to replace.
     * @param string $new_mandate New mandate.
     */
    protected function _update_mandate($old_mandate, $new_mandate)
    {
    }
    /**
     * Process payment event from webhook.
     *
     * @since 2.5.4 Add logic to cancel subscriptions when orders cancel with mandate cancellation.
     * @since 2.4.0
     *
     * @param array $event Event payload.
     *
     * @return bool|int On success, returns the ID of the inserted row, which
     *                  validates to true
     */
    protected function _process_payment_event(array $event)
    {
    }
    /**
     * Process refund event from webhook.
     *
     * @since 2.4.0
     *
     * @param array $event Event payload.
     *
     * @return bool|int On success, returns the ID of the inserted row, which
     *                  validates to true.
     */
    protected function _process_refund_event(array $event)
    {
    }
    /**
     * Process subscription event from webhook.
     *
     * Subscriptions created before 2.4.0 still use GoCardless subscriptions
     * to handle payment scheduling. This handler will cancels the subscriptions
     * at GoCardless then store the mandate to let WCS handles future payments.
     *
     * @since 2.4.0
     *
     * @param array $event Webhook event.
     */
    protected function _process_subscription_event(array $event)
    {
    }
    /**
     * Maybe update subscriptions created before 2.4.0 with mandate.
     *
     * @since 2.4.0
     *
     * @param array  $subscriptions              Array of subscription objects.
     * @param string $gocardless_subscription_id GoCardless subscription ID.
     */
    protected function _maybe_update_subscriptions_with_mandate($subscriptions, $gocardless_subscription_id)
    {
    }
    /**
     * Process billing_request event from webhook.
     *
     * @since 2.7.0
     *
     * @param array $event Event payload.
     */
    protected function _process_billing_request_event(array $event)
    {
    }
    /**
     * Process billing_request event 'fulfilled' from webhook.
     * This event handling is backup for the case where payment is not created during the checkout process due to some reasons.
     *
     * @since 2.7.0
     *
     * @param array $event Event payload.
     * @return bool
     */
    protected function _process_billing_request_event_fulfilled(array $event)
    {
    }
    /**
     * Process billing_request event 'cancelled' from webhook.
     * This event handling is for the cancel the order if payment or mandate data is not saved in the order and billing request is cancelled.
     *
     * @since 2.7.0
     *
     * @param array $event Event payload.
     * @return bool
     */
    protected function _process_billing_request_event_cancelled(array $event)
    {
    }
    /**
     * Update GoCardless resource in order meta.
     *
     * @since 2.4.0
     *
     * @param int|WC_Order $order         Order or Order ID.
     * @param string       $resource_type GoCardless resource type ('payment', 'refund' etc)
     *                                    in singular noun.
     * @param array        $resource_data Resource data.
     */
    public function update_order_resource($order, $resource_type, $resource_data = array())
    {
    }
    /**
     * Get GoCardless resource from order meta.
     *
     * @since 2.4.0
     *
     * @param int         $order_id      Order ID.
     * @param string      $resource_type GoCardless resource type ('mandate', 'payment', etc)
     *                                   in singular noun. See self::update_order_resource.
     * @param null|string $key           Key in resource array (e.g. 'id', 'status', etc).
     *                                   If null then resource array is returned.
     *
     * @return mixed See WC_Data::get_meta return value.
     */
    public function get_order_resource($order_id, $resource_type, $key = \null)
    {
    }
    /**
     * Get order from given resource value.
     *
     * @since 2.4.0
     *
     * @param string $resource_type GoCardless resource type ('payment', 'refund' etc)
     *                              in singular noun. Mandate is excluded because
     *                              one mandate can be used in more than one order.
     * @param string $key           Meta Key in resource array (e.g. 'id', 'status', etc).
     * @param string $value         Value of a given resource key.
     *
     * @return WC_Order|bool Order object or false
     */
    public function get_order_from_resource($resource_type, $key, $value)
    {
    }
    /**
     * Get description to be sent to GoCardless from order.
     *
     * @since 2.4.0
     *
     * @param WC_Order|int $order Order object or order ID.
     *
     * @return string Order items description
     */
    protected function _get_description_from_order($order)
    {
    }
    /**
     * Get transaction URL format.
     *
     * @since 2.4.0
     *
     * @return string URL format
     */
    public function get_transaction_url_format()
    {
    }
    /**
     * Get mandate URL format.
     *
     * @since 2.7.0
     *
     * @return string URL format
     */
    public function get_mandate_url_format()
    {
    }
    /**
     * Save customer token (mandate and basic bank account info).
     *
     * @see https://github.com/woocommerce/woocommerce/wiki/Payment-Token-API.
     *
     * @since 2.4.0
     *
     * @param int   $customer_id Customer ID.
     * @param array $mandate     Direct debit mandate.
     *
     * @return bool True if saved successfully.
     */
    protected function _save_customer_token($customer_id, $mandate)
    {
    }
    /**
     * Alter saved payment method item for direct debit method.
     *
     * @since 2.4.0
     *
     * @param array                                    $item          Item of payment method.
     * @param WC_GoCardless_Payment_Token_Direct_Debit $payment_token The payment token associated with this method entry.
     *
     * @return array Filtered item for direct debit.
     */
    public function saved_payment_methods_list_item($item, $payment_token)
    {
    }
    /**
     * Alter display of method column in customer's saved payment methods.
     *
     * @since 2.4.0
     *
     * @param array $method Item of payment method.
     */
    public function saved_payment_methods_column_method($method)
    {
    }
    /**
     * This is needed because defalut template of payment methods will run the
     * callback to other saved methods.
     *
     * @since 2.4.0
     *
     * @param array $method Item of payment method.
     */
    protected function _get_default_column_method_display($method)
    {
    }
    /**
     * Get all payment token IDs by mandate ID.
     *
     * @since 2.4.5
     * @version 2.4.5
     *
     * @param string $mandate_id GoCardless mandate.
     *
     * @return array List of token IDs.
     */
    protected function _get_token_ids_by_mandate($mandate_id)
    {
    }
    /**
     * Mark Order temporary paid if order contains subscriptions or renewal.
     *
     * @param int   $order_id   Order ID.
     * @param array $payment    Payment array.
     */
    protected function _mark_order_temporary_activated($order_id, $payment)
    {
    }
    /**
     * Handle billing request complete.
     * This is called when customer complete the billing request flow on the website.
     * This will update the order with billing request and mandate information.
     *
     * @param WC_Order $order               Order object.
     * @param string   $billing_request_id  Billing request ID.
     * @param boolean  $save_customer_token Whether to save customer token.
     * @return array Response array with 'result' and 'redirect' or 'message' keys.
     */
    public function handle_billing_request_complete($order, $billing_request_id, $save_customer_token = \false)
    {
    }
    /**
     * Return the gateway's icon.
     *
     * @return string
     */
    public function get_icon()
    {
    }
    /**
     * Get the direct debit schemes available to the merchant.
     *
     * @since 2.7.0
     * @return array
     */
    public function get_available_direct_debit_schemes()
    {
    }
    /**
     * Get the payment request (Instant) schemes available to the merchant.
     *
     * @since 2.7.0
     * @return array
     */
    public function get_available_payment_request_schemes()
    {
    }
    /**
     * Get the available scheme identifiers to the merchant.
     *
     * @see https://hub.gocardless.com/s/article/Supporting-Bank-Debits-schemes-via-API?language=en_GB
     *
     * @since 2.7.0
     *
     * @return array
     */
    public function get_available_scheme_identifiers()
    {
    }
    /**
     * Generate webhook secret for GoCardless.
     *
     * @return string Webhook secret. Base64 encoded random bytes (48 chars).
     */
    public function generate_webhook_secret()
    {
    }
}
/**
 * Trait WC_GoCardless_Gateway_Subscriptions_Pre_Orders_Trait
 *
 * Used by {@see WC_GoCardless_Gateway_Addons} and {@see WC_GoCardless_PayTo_Gateway_Addons}.
 */
trait WC_GoCardless_Gateway_Subscriptions_Pre_Orders_Trait
{
    /**
     * Register WooCommerce Subscriptions and Pre-Orders hooks for this gateway ID.
     *
     * @return void
     */
    protected function register_hooks()
    {
    }
    /**
     * Synchronize parent order status when all subscriptions are cancelled.
     * Also intercepts pending-cancel transitions for subscriptions with unconfirmed payments,
     * checking the most recent order (parent or renewal) to determine if payment is confirmed.
     *
     * @since 2.9.9
     * @param WC_Subscription $subscription The subscription object.
     * @param string          $new_status   The new subscription status.
     * @param string          $old_status   The old subscription status.
     */
    public function sync_parent_order_status($subscription, $new_status, $old_status)
    {
    }
    /**
     * Update GoCardless resource in order meta.
     *
     * Overrides here so that GoCardless related meta updated in subscriptions
     * and renewal orders.
     *
     * @since 2.4.0
     *
     * @param int|WC_Order $order         Order or Order ID.
     * @param string       $resource_type GoCardless resource type ('payment', 'refund' etc)
     *                                    in singular noun.
     * @param array        $resource_data Resource data.
     */
    public function update_order_resource($order, $resource_type, $resource_data = array())
    {
    }
    /**
     * Process payment for subscription.
     *
     * @since 2.4.0
     *
     * @throws \Exception Exception.
     *
     * @param float    $amount_to_charge Amount to charge.
     * @param WC_Order $order            The most recent order that relates to
     *                                   current subscription, can be renewal
     *                                   order or initial order.
     */
    protected function _process_subscription_payment($amount_to_charge, $order)
    {
    }
    /**
     * Payment description for subscription payment.
     *
     * @since 2.4.0
     *
     * @param string $description Description.
     *
     * @return string Description.
     */
    public function payment_description_for_subscription($description)
    {
    }
    /**
     * Process payment when a subscription payment is due.
     *
     * @since 2.4.0
     *
     * @param float    $amount_to_charge Amount to charge.
     * @param WC_Order $order            The most recent order that relates to
     *                                   current subscription, can be renewal
     *                                   order or initial order.
     */
    public function scheduled_subscription_payment($amount_to_charge, $order)
    {
    }
    /**
     * Update mandate for a subscription, after using GoCardless to complete a
     * payment, to make up for an automatic renewal payment which previously
     * failed.
     *
     * @since 2.4.0
     *
     * @param WC_Subscription $subscription  The subscription for which the failing
     *                                       payment method relates.
     * @param WC_Order        $renewal_order The order which recorded the successful
     *                                       payment (to make up for the failed
     *                                       automatic payment).
     */
    public function update_failing_payment_method($subscription, $renewal_order)
    {
    }
    /**
     * Checks whether given order_id is a pre-order.
     *
     * @since 2.4.0
     *
     * @param int $order_id Order ID.
     *
     * @return boolean Returns true if pre-order.
     */
    protected function _is_pre_order($order_id)
    {
    }
    /**
     * Checks whether pre-order charges upon release.
     *
     * @since 2.4.0
     *
     * @param int $order_id Order ID.
     *
     * @return bool Returns true if pre-order charges upon release
     */
    protected function _is_pre_order_charges_upon_release($order_id)
    {
    }
    /**
     * Process pre-order.
     *
     * This only process pre-order without taking payment.
     *
     * @since 2.4.0
     *
     * @param WC_Order $order Order object.
     *
     * @return array Checkout response.
     */
    protected function _process_pre_order(\WC_Order $order)
    {
    }
    /**
     * For checkout with saved token, if the order is pre-order that charges
     * upon release and needs tokenization then save the token in order for
     * taking payment later.
     *
     * @since 2.4.0
     *
     * @throws \Exception Exception.
     *
     * @param WC_Order $order Order object.
     */
    protected function _process_payment_with_saved_token(\WC_Order $order)
    {
    }
    /**
     * For checkout with redirect flow, and right after mandate is created,
     * if the order being processed is pre-order that charges upon release,
     * don't take payment immediately.
     *
     * @since 2.4.0
     *
     * @throws \Exception Exception.
     *
     * @param int    $order_id   Order ID.
     * @param string $mandate_id Mandate ID.
     */
    protected function _after_mandate_created($order_id, $mandate_id)
    {
    }
    /**
     * Process payment when pre-order is released.
     *
     * @since 2.4.0
     *
     * @param WC_Order $order Order object.
     */
    public function process_payment_for_released_pre_order($order)
    {
    }
    /**
     * Include the payment meta data required to process automatic recurring payments so that store managers can
     * manually set up automatic recurring payments for a customer via the Edit Subscriptions screen in 2.0+.
     *
     * @param array           $payment_meta associative array of meta data required for automatic payments.
     * @param WC_Subscription $subscription An instance of a subscription object.
     * @return array
     */
    public function add_subscription_payment_meta($payment_meta, $subscription)
    {
    }
    /**
     * Validate the payment meta data required to process automatic recurring payments so that store managers can
     * manually set up automatic recurring payments for a customer via the Edit Subscriptions screen in 2.0+.
     *
     * @param string $payment_method_id The ID of the payment method to validate.
     * @param array  $payment_meta      Associative array of meta data required for automatic payments.
     *
     * @throws Exception Validation Error.
     */
    public function validate_subscription_payment_meta($payment_method_id, $payment_meta)
    {
    }
    /**
     * Cancel the order payment on subscription cancellation.
     *
     * If the payment is pending submission, we can cancel it.
     * Otherwise, update the retry_if_possible to false to avoid the payment being retried (except for paid_out and cancelled payment states).
     *
     * @since 2.9.7
     *
     * @param WC_Subscription $subscription Subscription object.
     */
    public function maybe_cancel_subscription_payment($subscription)
    {
    }
}
/**
 * WC_GoCardless_Gateway_Addons class.
 *
 * @extends WC_GoCardless_Gateway
 */
class WC_GoCardless_Gateway_Addons extends \WC_GoCardless_Gateway
{
    use \WC_GoCardless_Gateway_Subscriptions_Pre_Orders_Trait;
    /**
     * Constructor
     */
    public function __construct()
    {
    }
}
/**
 * GoCardless payment method integration
 *
 * @since 2.6.0
 */
final class WC_GoCardless_Gateway_Blocks_Support extends \Automattic\WooCommerce\Blocks\Payments\Integrations\AbstractPaymentMethodType
{
    const SCRIPT_HANDLE = 'wc-gocardless-blocks-integration';
    /**
     * Name of the payment method.
     *
     * @var string
     */
    protected $name = 'gocardless';
    /**
     * Register the shared Blocks bundle once; return its script handle.
     *
     * @since 3.0.0
     *
     * @return string
     */
    public static function register_blocks_integration_script()
    {
    }
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
    /**
     * Determine if store allows bank accounts to be saved during checkout.
     *
     * @return bool True if merchant allows shopper to save bank accounts during checkout.
     */
    private function should_show_saved_bank_accounts()
    {
    }
}
/**
 * Static helpers for the GoCardless gateway plugin.
 */
class WC_GoCardless_Helper
{
    /**
     * Registered payment gateway instances from WooCommerce.
     *
     * @return array
     */
    private static function get_payment_gateways_map()
    {
    }
    /**
     * Bank pay (main) GoCardless gateway instance.
     *
     * @since 3.0.0
     *
     * @return WC_GoCardless_Gateway|WC_GoCardless_Gateway_Addons|bool
     */
    public static function get_main_gateway()
    {
    }
    /**
     * PayTo GoCardless gateway instance when registered.
     *
     * @since 3.0.0
     *
     * @return WC_GoCardless_PayTo_Gateway|WC_GoCardless_PayTo_Gateway_Addons|bool
     */
    public static function get_payto_gateway()
    {
    }
    /**
     * Whether the order uses a GoCardless payment method (Bank pay or PayTo).
     *
     * @since 3.0.0
     *
     * @param WC_Order|mixed $order Order object.
     * @return bool
     */
    public static function is_gocardless_order($order)
    {
    }
    /**
     * Resolve which GoCardless gateway should handle an order (Bank pay vs PayTo).
     *
     * @since 3.0.0
     *
     * @param WC_Order|mixed $order Order object.
     * @return WC_GoCardless_Gateway|WC_GoCardless_Gateway_Addons|WC_GoCardless_PayTo_Gateway|WC_GoCardless_PayTo_Gateway_Addons|bool
     */
    public static function get_gateway_for_order($order)
    {
    }
    /**
     * Choose Bank pay or PayTo gateway for async webhook handling from the related order.
     *
     * @since 3.0.0
     *
     * @param array $payload Webhook payload (single event per scheduled action).
     * @return WC_GoCardless_Gateway|WC_GoCardless_PayTo_Gateway|bool
     */
    public static function resolve_gateway_for_webhook(array $payload)
    {
    }
    /**
     * Resolve a WooCommerce order from a GoCardless webhook event when possible.
     *
     * Mandate and legacy subscription events are handled on the main gateway because they do not
     * tie to a single order via payment/refund/billing_request meta in a reliable way.
     *
     * @since 3.0.0
     *
     * @param WC_GoCardless_Gateway $gateway Gateway instance (used for get_order_from_resource).
     * @param array                 $event   Single event from the webhook payload.
     * @return WC_Order|bool
     */
    public static function get_order_for_webhook_event($gateway, array $event)
    {
    }
    /**
     * GoCardless payment statuses eligible for temporary activation of a
     * subscription/renewal order.
     *
     * Only merchant-approved, finite collection states belong here — states that
     * the payment will leave on its own timeline (Bacs collection typically takes
     * a few days). Approval-dependent states such as `pending_customer_approval`
     * (e.g. Bacs dual-signature mandates) must NOT be included: those can remain
     * unauthorised indefinitely, so activating a subscription before the initial
     * payment is confirmed would let a shopper retain the active-subscriber
     * entitlement without ever authorising collection.
     *
     * @since 3.0.3
     *
     * @param int $order_id Order ID, for filter context.
     * @return string[] Payment statuses eligible for temporary activation.
     */
    public static function get_temporary_activatable_payment_statuses($order_id = 0)
    {
    }
    /**
     * Whether a GoCardless payment status is eligible for temporary activation of
     * a subscription/renewal order.
     *
     * @since 3.0.3
     *
     * @param string $payment_status GoCardless payment status.
     * @param int    $order_id       Order ID, for filter context.
     * @return bool True when the status may temporarily activate a subscription order.
     */
    public static function is_payment_status_temporary_activatable($payment_status, $order_id = 0)
    {
    }
    /**
     * Whether a temporarily activated order whose payment is still in a
     * merchant-approved finite collection state (`pending_submission` /
     * `submitted`) should be checked again rather than demoted.
     *
     * Keeps polling while the order is within the maximum temporary-activation
     * age, falling back to the order creation date when the first-seen time is
     * unknown. Once the maximum age is exceeded — or the age cannot be determined
     * at all — returns false so the caller demotes the order and stops
     * rescheduling: temporary activation can never persist unbounded.
     *
     * @since 3.0.3
     *
     * @param WC_Order $order Temporarily activated order.
     * @return bool True to reschedule another check; false to demote the order.
     */
    public static function should_reschedule_temporary_activation($order)
    {
    }
}
/**
 * Manage order admin UI for orders paid via GoCardless.
 *
 * @since 2.4.0
 */
class WC_GoCardless_Order_Admin
{
    /**
     * Initialization.
     */
    public function init()
    {
    }
    /**
     * Register webhook events meta box.
     *
     * @since 2.4.0
     */
    public function add_meta_box()
    {
    }
    /**
     * Add the webhook events meta box.
     *
     * @since 2.4.0
     *
     * @param string           $post_type Post Type.
     * @param WP_Post|WC_Order $post      Order or Post object.
     */
    public function add_webhook_events_meta_box($post_type, $post)
    {
    }
    /**
     * Output the content for webhook events meta box.
     *
     * @since 2.4.0
     *
     * @param WP_Post|WC_Order $post Order or Post object.
     */
    public function webhook_events_meta_box($post)
    {
    }
    /**
     * Get formatted event item.
     *
     * @since 2.4.0
     *
     * @param array $event Event array.
     *
     * @return string Formatted event item.
     */
    public function get_formatted_event_item($event)
    {
    }
    /**
     * Add GoCardless specific order actions.
     *
     * @since 2.4.0
     */
    public function add_order_actions()
    {
    }
    /**
     * GoCardless order actions.
     *
     * @since 2.4.0
     *
     * @param array    $actions The actions available for the order.
     * @param WC_Order $order   WC_Order object.
     *
     * @return array Order actions
     */
    public function gocardless_actions($actions, $order)
    {
    }
    /**
     * Order action to cancel payment.
     *
     * @since 2.4.0
     *
     * @param WC_Order $order WC_Order object.
     */
    public function cancel_payment($order)
    {
    }
    /**
     * Get notice for cancel payment action.
     *
     * @since 2.4.0
     *
     * @param int            $order_number Order Number.
     * @param WP_Error|array $payment      Payment array of WP_Error.
     *
     * @return string Notice message
     * TODO:123
     */
    public function get_cancel_payment_notice($order_number, $payment)
    {
    }
    /**
     * Order action to retry payment.
     *
     * @since 2.4.0
     *
     * @param WC_Order $order WC_Order object.
     */
    public function retry_payment($order)
    {
    }
    /**
     * Get notice for retry payment action.
     *
     * @since 2.4.0
     *
     * @param int            $order_number Order Number.
     * @param WP_Error|array $payment      Payment array of WP_Error.
     *
     * @return string Notice message
     */
    public function get_retry_payment_notice($order_number, $payment)
    {
    }
    /**
     * Add GoCardless Payment Status column to the orders list.
     *
     * @since 2.7.0
     *
     * @param array $existing_columns Columns.
     * @return array Columns with GoCardless Payment Status column.
     */
    public function add_gocardless_payment_status_column($existing_columns)
    {
    }
    /**
     * Add GoCardless Payment Status column content to the orders list.
     *
     * @since 2.7.0
     *
     * @param string       $column_name Column name.
     * @param int|WC_Order $order_id    Order ID or WC_Order object.
     * @return void
     */
    public function add_gocardless_payment_status_column_content($column_name, $order_id)
    {
    }
    /**
     * Get the GoCardless payment status for an order.
     *
     * @since 2.7.0
     * @param int  $order_id Order ID.
     * @param bool $markup   Whether to return the status with markup.
     * @return string GoCardless payment status.
     */
    public function get_gocardless_payment_status($order_id, $markup = \false)
    {
    }
    /**
     * Add payment status information to the order preview.
     *
     * @since 2.7.0
     *
     * @param array    $details Details to display.
     * @param WC_Order $order   Order object.
     *
     * @return array
     */
    public function add_payment_status_to_order_preview($details, $order)
    {
    }
    /**
     * Disconnect GoCardless account.
     *
     * @since 2.8.0
     */
    public function disconnect_gocardless()
    {
    }
    /**
     * Connect GoCardless account.
     *
     * @since 2.8.0
     */
    public function connect_gocardless()
    {
    }
    /**
     * Show notices for GoCardless connect/disconnect.
     *
     * @since 2.8.0
     */
    public function display_connection_notices()
    {
    }
    /**
     * Set connection notice.
     *
     * @param string $type    Notice type.
     * @param string $message Notice message.
     */
    public function set_connection_notice($type, $message)
    {
    }
    /**
     * Get connection notice.
     *
     * @return array A Notice array with type and message.
     */
    public function get_connection_notice()
    {
    }
    /**
     * Display notice for access token unauthorized.
     *
     * @since 2.9.8
     */
    public function display_access_token_unauthorized_notice()
    {
    }
}
/**
 * WooCommerce Direct Debit Payment Token.
 *
 * Representation of a payment token for direct debit within the Bacs system.
 *
 * @class    WC_GoCardless_Payment_Token_Direct_Debit
 * @since    2.4.0
 */
class WC_GoCardless_Payment_Token_Direct_Debit extends \WC_Payment_Token
{
    /**
     * Type of token.
     *
     * This should matches with suffix of class name.
     *
     * @since 2.4.0
     *
     * @var string
     */
    protected $type = 'Direct_Debit';
    /**
     * Validate direct debit payment tokens.
     *
     * @since 2.4.0
     *
     * @return boolean True if the passed data is valid
     */
    public function validate()
    {
    }
    /**
     * Get display name for user.
     *
     * @since 2.4.0
     *
     * @param string $deprecated Context (deprecated).
     *
     * @return string
     */
    public function get_display_name($deprecated = '')
    {
    }
    /**
     * Get direct debit scheme (autogiro, bacs, ...).
     *
     * @since 2.4.0
     *
     * @return string Scheme
     */
    public function get_scheme()
    {
    }
    /**
     * Set the direct debit scheme (mastercard, visa, ...).
     *
     * @since 2.4.0
     *
     * @param string $scheme Scheme (mastercard, visa, ...).
     */
    public function set_scheme($scheme)
    {
    }
    /**
     * Get name of the account holder, as known by the bank.
     *
     * @since 2.4.0
     *
     * @return string Name of the account holder
     */
    public function get_account_holder_name()
    {
    }
    /**
     * Set name of the account holder, as known by the bank.
     *
     * @since 2.4.0
     *
     * @param string $name Name of the account holder.
     */
    public function set_account_holder_name($name)
    {
    }
    /**
     * Get last two digits of account number.
     *
     * @since 2.4.0
     *
     * @return string Last two digits of account number
     */
    public function get_account_number_ending()
    {
    }
    /**
     * Set the last two digits of account number.
     *
     * @since 2.4.0
     *
     * @param string $number Last two digits of account number.
     */
    public function set_account_number_ending($number)
    {
    }
    /**
     * Get bank name.
     *
     * @since 2.4.0
     *
     * @return string Bank name
     */
    public function get_bank_name()
    {
    }
    /**
     * Set the bank name.
     *
     * @since 2.4.0
     *
     * @param string $name Bank name.
     * @return string Last two digits of account number
     */
    public function set_bank_name($name)
    {
    }
}
/**
 * PayTo payment gateway for Australian customers (AUD, scheme pay_to).
 *
 * Settings are stored in {@see WC_GoCardless_Gateway} options under payto_* keys.
 *
 * @class WC_GoCardless_PayTo_Gateway
 * @since 3.0.0
 */
class WC_GoCardless_PayTo_Gateway extends \WC_GoCardless_Gateway
{
    /**
     * Gateway ID (set at declaration so parent constructor sees it).
     *
     * @var string
     */
    public $id = 'gocardless_payto';
    /**
     * PayTo purpose code sent on billing requests (GoCardless API).
     *
     * @var string
     */
    protected $purpose_code = 'retail';
    /**
     * Whether BECS fallback is enabled when PayTo is unavailable for the payer's bank.
     *
     * @var bool
     */
    protected $fallback_enabled = \true;
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Setup hooks for the PayTo gateway.
     *
     * @return void
     */
    protected function setup_hooks()
    {
    }
    /**
     * Shared option key with the main GoCardless gateway (payto_* keys).
     *
     * @since 3.0.0
     *
     * @return string
     */
    public function get_option_key()
    {
    }
    /**
     * Load settings from shared option and PayTo-specific keys.
     *
     * @return void
     */
    public function load_settings()
    {
    }
    /**
     * Map logical option keys to storage keys in the shared option.
     *
     * @since 3.0.0
     *
     * @param string $key Option key.
     * @param mixed  $empty_value Default when empty.
     * @return mixed
     */
    public function get_option($key, $empty_value = \null)
    {
    }
    /**
     * Defaults for PayTo keys when missing from the database.
     *
     * @since 3.0.0
     *
     * @param string $storage_key Key in woocommerce_gocardless_settings.
     * @return mixed|null Null if no default.
     */
    protected function get_default_for_payto_option($storage_key)
    {
    }
    /**
     * No separate settings page; PayTo is configured under the main GoCardless gateway.
     *
     * @return void
     */
    public function init_form_fields()
    {
    }
    /**
     * Prevent saving a duplicate settings row for this gateway ID.
     *
     * @return bool
     */
    public function process_admin_options()
    {
    }
    /**
     * No admin UI for this gateway.
     *
     * @return void
     */
    public function admin_options()
    {
    }
    /**
     * Whether the merchant has an active PayTo scheme on their creditor.
     *
     * @return bool
     */
    protected function merchant_supports_payto()
    {
    }
    /**
     * PayTo is only available for Australia, AUD, and when PayTo is enabled and active on the account.
     *
     * @return bool
     */
    public function is_available()
    {
    }
    /**
     * Create billing request with PayTo fields (purpose_code, fallback_enabled, scheme pay_to, AUD).
     *
     * @param WC_Order $order Order.
     * @return array
     */
    public function create_billing_request_flow(\WC_Order $order)
    {
    }
    /**
     * Store mandate as PayTo token.
     *
     * @param int   $customer_id Customer ID.
     * @param array $mandate     Mandate data.
     * @return bool
     */
    protected function _save_customer_token($customer_id, $mandate)
    {
    }
    /**
     * Format saved PayTo methods in My Account.
     *
     * @param array $item          Item.
     * @param mixed $payment_token Token.
     * @return array
     */
    public function saved_payment_methods_list_item($item, $payment_token)
    {
    }
    /**
     * Return the gateway's icon.
     *
     * @return string
     */
    public function get_icon()
    {
    }
    /**
     * Display notice if PayTo is not available.
     *
     * @return void
     */
    public function maybe_show_payto_not_available_notice()
    {
    }
}
/**
 * PayTo payment gateway for stores using WooCommerce Subscriptions and/or Pre-Orders.
 *
 * @class WC_GoCardless_PayTo_Gateway_Addons
 * @extends WC_GoCardless_PayTo_Gateway
 */
class WC_GoCardless_PayTo_Gateway_Addons extends \WC_GoCardless_PayTo_Gateway
{
    use \WC_GoCardless_Gateway_Subscriptions_Pre_Orders_Trait;
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
}
/**
 * PayTo Blocks checkout integration.
 *
 * @since 3.0.0
 */
final class WC_GoCardless_PayTo_Gateway_Blocks_Support extends \Automattic\WooCommerce\Blocks\Payments\Integrations\AbstractPaymentMethodType
{
    /**
     * Payment method ID.
     *
     * @var string
     */
    protected $name = 'gocardless_payto';
    /**
     * Initialise from shared GoCardless settings.
     */
    public function initialize()
    {
    }
    /**
     * Active when PayTo is enabled and the store is connected to GoCardless.
     *
     * @return bool
     */
    public function is_active()
    {
    }
    /**
     * Script handles (shared bundle with main GoCardless Blocks integration).
     *
     * @return string[]
     */
    public function get_payment_method_script_handles()
    {
    }
    /**
     * Data for the PayTo payment method in Blocks.
     *
     * @return array
     */
    public function get_payment_method_data()
    {
    }
    /**
     * Supported gateway features for Blocks.
     *
     * @return string[]
     */
    public function get_supported_features()
    {
    }
    /**
     * Whether saved PayTo agreements can be used at checkout.
     *
     * @return bool
     */
    private function should_show_saved_bank_accounts()
    {
    }
}
/**
 * GoCardless Privacy
 */
class WC_GoCardless_Privacy extends \WC_Abstract_Privacy
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Initial registration of privacy erasers and exporters.
     */
    public function register_erasers_exporters()
    {
    }
    /**
     * Returns a list of orders that are using one of GoCardless's payment methods.
     *
     * @param string $email_address Customer email.
     * @param int    $page Page number.
     *
     * @return array WP_Post
     */
    protected function get_gocardless_orders($email_address, $page)
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
     * @param WC_Order $order WooCommerce order.
     * @return array
     */
    protected function maybe_handle_subscription($order)
    {
    }
    /**
     * Handle eraser of data tied to Orders
     *
     * @param WC_Order $order Order.
     * @return array
     */
    protected function maybe_handle_order($order)
    {
    }
}
/**
 * Manage extending Analytics reports.
 *
 * @since 2.7.0
 */
class WC_GoCardless_Reports
{
    /**
     * Class Initialization.
     *
     * @return void
     */
    public function init()
    {
    }
    /**
     * Enqueue scripts for analytics reports.
     *
     * @param string $hook_suffix The hook suffix.
     *
     * @return void
     */
    public function enqueue_reports_scripts($hook_suffix = '')
    {
    }
    /**
     * Add GoCardless customer mandates to the customers report.
     *
     * @param object $response The customer response object.
     * @return object $response with GoCardless customer mandates.
     */
    public function add_gocardless_customer_mandates($response)
    {
    }
    /**
     * Get customer mandate ids.
     *
     * @param int $customer_id The customer id.
     * @return array $mandates Customer mandate ids.
     */
    public function get_customer_mandates($customer_id)
    {
    }
    /**
     * Add GoCardless customer mandates column to the customers export.
     *
     * @param array $columns The customer export columns.
     * @return array $columns The customer export columns with Direct Debit mandates.
     */
    public function add_customer_export_column($columns)
    {
    }
    /**
     * Prepare customer export item.
     *
     * @param array $export_item The customer export item.
     * @param array $item        The customer item.
     * @return array $item The customer export item with GoCardless mandates.
     */
    public function prepare_export_customer_item($export_item, $item)
    {
    }
}
/**
 * WooCommerce PayTo Payment Token.
 *
 * Representation of a saved PayTo agreement (mandate) for Australian bank payments.
 * Shares behaviour and meta with {@see WC_GoCardless_Payment_Token_Direct_Debit}; differs by token type and display label.
 *
 * @class WC_Payment_Token_GoCardless_PayTo
 * @since 3.0.0
 */
class WC_Payment_Token_GoCardless_PayTo extends \WC_GoCardless_Payment_Token_Direct_Debit
{
    /**
     * Type of token.
     *
     * Stored in the database; WooCommerce resolves class `WC_Payment_Token_{type}`.
     *
     * @since 3.0.0
     *
     * @var string
     */
    protected $type = 'GoCardless_PayTo';
    /**
     * Get bank name for display (PayTo label instead of Direct Debit Mandate).
     *
     * @since 3.0.0
     *
     * @return string Bank name with PayTo prefix.
     */
    public function get_bank_name()
    {
    }
}
/**
 * Plugin main class.
 */
class WC_GoCardless
{
    /**
     * Plugin's version.
     *
     * @since 2.4.0
     *
     * @var string
     */
    public $version = '3.0.3';
    // WRCS: DEFINED_VERSION.
    /**
     * Plugin's absolute path.
     *
     * @since 2.4.0
     *
     * @var string
     */
    public $plugin_path;
    /**
     * Plugin's URL.
     *
     * @since 2.4.0
     *
     * @var string
     */
    public $plugin_url;
    /**
     * Plugin's settings.
     *
     * @since 2.4.0
     *
     * @var array
     */
    private $settings;
    /**
     * Logger instance.
     *
     * @var WC_Logger
     */
    private $logger;
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Add GoCardless URLs to allowed redirect hosts.
     *
     * @since 2.6.3
     *
     * @param array $hosts Allowed redirect hosts.
     * @param array $requested_host Requested host.
     *
     * @return array Modified allowed redirect hosts.
     */
    public function allowed_redirect_hosts($hosts, $requested_host)
    {
    }
    /**
     * Process webhook payload.
     *
     * This function will be called by cron to process webhook events asynchronously.
     *
     * @param array $payload Webhook event payload.
     *
     * @return void
     *
     * @since 2.4.20
     * @version 2.4.6
     */
    public function process_webhook_payload_cron(array $payload)
    {
    }
    /**
     * Add relevant links to plugins page
     *
     * @since 1.0.0
     * @version 2.4.6
     *
     * @param  array $links Plugin action links.
     * @return array Plugin action links
     */
    public function plugin_action_links($links)
    {
    }
    /**
     * Get setting URL.
     *
     * @since 2.3.8
     *
     * @return string Setting URL
     */
    public function get_setting_url()
    {
    }
    /**
     * Checks whether gateway addons can be used.
     *
     * @since 2.4.0
     *
     * @return bool Returns true if gateway addons can be used
     */
    public function can_use_gateway_addons()
    {
    }
    /**
     * Init localisations and files.
     */
    public function init()
    {
    }
    /**
     * Load plugin text domain for translation.
     */
    public function load_plugin_textdomain()
    {
    }
    /**
     * Maybe display connect notice for merchants who have access token for
     * legacy API and merchants that have the extension activated but never set
     * API credentials before.
     *
     * @since 2.4.0
     */
    protected function _maybe_display_connect_notice()
    {
    }
    /**
     * Update payment method title to "Pay by bank".
     * This update will only be applied to plugin update from version 2.6.4 or lower and current payment method title is "Direct Debit".
     *
     * @since 2.7.0
     */
    public function update_payment_method_title()
    {
    }
    /**
     * Display connect notice.
     *
     * @since 2.4.0
     */
    protected function _display_connect_notice()
    {
    }
    /**
     * Migrate old settings prior 2.4.0.
     *
     * @since 2.4.0
     */
    protected function _migrate_old_settings()
    {
    }
    /**
     * Init order admin.
     *
     * @since 2.4.0
     */
    public function init_order_admin()
    {
    }
    /**
     * Register the gateway for use.
     *
     * @param array $methods Registered payment methods.
     *
     * @return array Payment methods
     */
    public function register_gateway($methods)
    {
    }
    /**
     * Check environment and maybe show notice in admin if requirements are
     * not satisified.
     *
     * @see https://gocardless.com/faq/merchants/international-payments/
     *
     * @since 2.4.6
     * @version 2.4.6
     */
    public function environment_check()
    {
    }
    /**
     * Get GoCardless gateway instance.
     *
     * @since 2.4.0
     *
     * @return WC_GoCardless_Gateway|bool Returns gateway instance of false if not found
     */
    public function gateway_instance()
    {
    }
    /**
     * Log message.
     *
     * @since 2.3.7
     *
     * @param string $message Message to log.
     * @param string $level   Log level.
     *
     * @return void
     */
    public function log($message, $level = \WC_Log_Levels::NOTICE)
    {
    }
    /**
     * Check GoCardless Payment status of temporarily activated subscriptions.
     * If Payment is not confirmed or paid, update order status accordingly.
     * (Subscription status will be automatically updated based order status)
     *
     * @param int $order_id Order ID.
     */
    public function gocardless_check_subscription_payment_status($order_id)
    {
    }
    /**
     * Declares compatibility with Woocommerce features.
     *
     *  List of features:
     *  - custom_order_tables
     *  - product_block_editor
     *
     * @since 2.6.2 Rename function
     * @since 2.5.2
     */
    public function declare_woocommerce_feature_compatibility(): void
    {
    }
    /**
     * Remove temporary activated flag from the order.
     *
     * @param WC_Order $order WC_Order object.
     * @return void
     */
    public function remove_temporary_activated($order)
    {
    }
    /**
     * Add GoCardless payment method to WooCommerce Blocks.
     *
     * @return void
     */
    public function woocommerce_block_support()
    {
    }
    /**
     * Enqueue admin scripts.
     *
     * @since 2.7.0
     * @param string $hook_suffix The current admin page.
     */
    public function admin_scripts($hook_suffix)
    {
    }
    /**
     * Register class aliases for backwards compatibility.
     * This will be removed in future.
     *
     * @since 2.7.2
     */
    private function register_class_aliases()
    {
    }
    /**
     * Removes the GoCardless PayTo gateway on the WooCommerce Settings page.
     *
     * Note: This function is hooked onto `woocommerce_admin_field_payment_gateways` which is the hook used
     * to display the payment gateways on the WooCommerce Settings page.
     */
    public function hide_gocardless_payto_gateway_on_settings_page()
    {
    }
}
/**
 * Return instance of WC_GoCardless.
 *
 * @since 2.3.7
 *
 * @return WC_GoCardless
 */
function wc_gocardless()
{
}
/**
 * Get order property with compat check for WC 3.0.
 *
 * @since 2.4.2
 *
 * @param WC_Order $order Order object.
 * @param string   $prop  Order property.
 *
 * @return mixed Order property value.
 */
function wc_gocardless_get_order_prop($order, $prop)
{
}