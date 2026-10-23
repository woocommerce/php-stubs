<?php
/**
 * Generated stub declarations for woocommerce-gateway-eway 3.9.3.
 * @see https://github.com/woocommerce/all-plugins/tree/stubs
 */

/**
 * WC_EWAY_API class.
 */
class WC_EWAY_API
{
    /**
     * API endpoint.
     *
     * @var string
     */
    const PRODUCTION_ENDPOINT = 'https://api.ewaypayments.com';
    /**
     * Test API endpoint.
     *
     * @var string
     */
    const TEST_ENDPOINT = 'https://api.sandbox.ewaypayments.com';
    /**
     * Device ID.
     *
     * @var string
     */
    private $device_id = '0b38ae7c3c5b466f8b234a8955f62bdd';
    /**
     * Partner ID.
     *
     * @var string
     */
    private $partner_id = '0b38ae7c3c5b466f8b234a8955f62bdd';
    /**
     * API endpoint to use (production or test).
     *
     * @var string
     */
    public $endpoint;
    /**
     * Eway API key.
     *
     * @var string
     */
    public $api_key;
    /**
     * Eway API password.
     *
     * @var string
     */
    public $api_password;
    /**
     * Whether debug mode is enabled ('on' or 'off').
     *
     * @var string
     */
    public $debug_mode;
    /**
     * Eway API client.
     *
     * @since 3.7.0
     * @var \Automattic\WooCommerce\Eway\Vendors\Eway\Rapid\Client
     */
    private $client;
    /**
     * Constructor
     *
     * @param string $api_key      Eway API key.
     * @param string $api_password Eway API password.
     * @param string $environment  Whether API is running in production or test environment.
     * @param string $debug_mode   Whether debug mode is enabled ('on' or 'off').
     */
    public function __construct($api_key, $api_password, $environment, $debug_mode)
    {
    }
    /**
     * Perform a request to Eway API.
     *
     * @param string $endpoint API endpoint.
     * @param string $json     Request body.
     *
     * @throws Exception If an error occurs during API request.
     */
    private function perform_request($endpoint, $json)
    {
    }
    /**
     * Perform an HTTP GET request to Eway API.
     *
     * @param string $endpoint API endpoint.
     *
     * @throws Exception If an error occurs during API request.
     */
    private function perform_get_request($endpoint)
    {
    }
    /**
     * Request an access code for use in an Eway Transparent Redirect payment
     * See: https://eway.io/api-v3/#transparent-redirect
     *
     * @param WC_Order $order       The order to access.
     * @param string   $method      The "Method" parameter, see: https://eway.io/api-v3/#payment-methods.
     * @param string   $trx_type    The "TransactionType" parameter, see: https://eway.io/api-v3/#transaction-types.
     * @param mixed    $order_total The amount to charge for this transaction.
     *
     * @return mixed     JSON response from /CreateAccessCode.json on success
     * @throws Exception Thrown on failure.
     */
    public function request_access_code($order, $method = 'ProcessPayment', $trx_type = 'Purchase', $order_total = \null)
    {
    }
    /**
     * Perform API call to get access code result.
     *
     * @param string $access_code Access code.
     *
     * @return string
     */
    public function get_access_code_result($access_code)
    {
    }
    /**
     * Perform API call to make a direct payment for an order.
     *
     * @param WC_Order   $order             The order associated with the payment.
     * @param int|string $token_customer_id The customer's token customer id to include in direct payment request.
     * @param int        $amount            The amount to charge for the order.
     * @param string|null $transaction_type  The transaction type
     *
     * @throws Exception If an error occurs during API request.
     */
    public function direct_payment($order, $token_customer_id, $amount = 0, $transaction_type = \Automattic\WooCommerce\Eway\Vendors\Eway\Rapid\Enum\TransactionType::PURCHASE)
    {
    }
    /**
     * Perform API call to refund an order for some amount.
     *
     * @param WC_Order   $order          The order to access.
     * @param string     $transaction_id The transaction to refund.
     * @param float|null $amount         The refund amount.
     * @param string     $reason         The reason for refund.
     */
    public function direct_refund($order, $transaction_id, $amount = 0, $reason = '')
    {
    }
    /**
     * Log a debugging message.
     *
     * @param array|object|string $message The message to log.
     */
    public function debug_message($message)
    {
    }
    /**
     * Perform API call to get a customer by their token customer id.
     *
     * @param string $token_customer_id The token customer id to look up.
     *
     * @throws Exception If the request fails.
     */
    public function lookup_customer($token_customer_id)
    {
    }
    /**
     * Return Eway customer token details.
     *
     * @since 3.7.0
     *
     * @param string $token Customer token.
     *
     * @return stdClass Eway customer token details.
     * @throws \InvalidArgumentException Throw exception if error.
     */
    public function get_customer_token_detail($token)
    {
    }
    /**
     * Get an order's possibly modified reference number.
     *
     * @param \WC_Order $order The full order object.
     */
    public function get_invoice_reference($order)
    {
    }
    /**
     * Perform API call to make a direct payment with secured card data token.
     *
     * @since 3.7.0
     *
     * @param \WC_Order   $order                        The order associated with the payment.
     * @param array       $threeds_verification_results The 3DS verification results.
     * @param string|null $secured_card_data_token The secured card data token. If null, the Eway customer token id will be retrieve from the order for transaction.
     *
     * @throws \RuntimeException Throws an exception if the request fails.
     */
    public function direct_payment_with_secured_card_data_token(\WC_Order $order, array $threeds_verification_results, $secured_card_data_token, $transaction_type = \Automattic\WooCommerce\Eway\Vendors\Eway\Rapid\Enum\TransactionType::RECURRING): object
    {
    }
    /**
     * Should enroll secured card data token to 3D Secure.
     *
     * @since 3.7.1 Add support for Eway customer token
     * @since 3.7.0
     *
     * @param int          $amount                  Amount.
     * @param \WC_Customer $customer                Customer.
     * @param string       $token                   Secured card data token or Eway customer token.
     * @param bool         $use_eway_customer_token Falg to decide whether to use Secured card data token or Eway customer token.
     *
     * @return stdClass
     * @throws Exception If an error occurs during API request.
     */
    public function three_ds_enroll_secured_card_data_token($amount, \WC_Customer $customer, $token, $use_eway_customer_token = \false): \stdClass
    {
    }
    /**
     * Should handle Eway 3D secure enrollment ajax request.
     *
     * @since 3.7.0
     *
     * @param string $access_code Access Code.
     *
     * @throws Exception If an error occurs during API request.
     */
    public function get_3dsverify_results(string $access_code): array
    {
    }
    /**
     * This function should add new credit card to Eway and return transaction details.
     *
     * @since 3.7.0
     *
     * @param \WC_Customer $wc_customer                WC_Customer object.
     * @param string       $secured_card_data_token_id Secured Card Data ID.
     *
     * @throws Exception If an error occurs during API request.
     */
    public function add_new_credit_card(\WC_Customer $wc_customer, string $secured_card_data_token_id): object
    {
    }
    /**
     * This function should validate Eway API response.
     *
     * @since 3.7.0
     *
     * @param \Automattic\WooCommerce\Eway\Vendors\Eway\Rapid\Model\Response\AbstractResponse $result Eway API response.
     *
     * @throws \Exception If an error occurs during API request.
     */
    private function validate_result(\Automattic\WooCommerce\Eway\Vendors\Eway\Rapid\Model\Response\AbstractResponse $result): void
    {
    }
    public function get_access_code_share($order, $orderItem, $method)
    {
    }
}
/**
 * Class WC_Gateway_EWAY_Ajax_Request_Controller.
 *
 * @since 3.7.0
 */
class WC_Gateway_EWAY_Ajax_Request_Controller
{
    /**
     * This variable should contain the gateway class.
     *
     * @since 3.7.0
     * @var WC_Gateway_EWAY
     */
    private $gateway;
    /**
     * This function should return the gateway class.
     *
     * @since 3.7.0
     */
    private function get_gateway_class(): \WC_Gateway_EWAY
    {
    }
    /**
     * This function should return the eway api class.
     *
     * @since 3.7.0
     */
    private function get_eway_api(): \WC_EWAY_API
    {
    }
    /**
     * This function should be used to setup hooks for the ajax request.
     *
     * @since 3.7.0
     * @return void
     */
    public function setup_hooks()
    {
    }
    /**
     * Should handle Eway 3D secure enrollment ajax request.
     *
     * @since 3.7.1 Add support for saved token id.
     * @since 3.7.0
     * @return void
     * @throws Exception If an error occurs during API request.
     */
    public function eway_3ds_enrollment(): void
    {
    }
    /**
     * Should handle Eway 3D secure enrollment ajax request.
     *
     * @since 3.7.1 Add support for saved token id.
     * @since 3.7.0
     * @return void
     * @throws Exception If an error occurs during API request.
     */
    public function eway_3ds_enrollment_order_pay(): void
    {
    }
    /**
     * This function should be used to access token from ajax request.
     *
     * @throws Exception If an error throw exception.
     */
    private function get_token_from_ajax_request(): array
    {
    }
}
/**
 * Eway payment method integration
 *
 * @since 3.2.0
 */
final class WC_Gateway_EWAY_Blocks_Support extends \Automattic\WooCommerce\Blocks\Payments\Integrations\AbstractPaymentMethodType
{
    /**
     * Name of the payment method.
     *
     * @var string
     */
    protected $name = 'eway';
    /**
     * Initializes the payment method type.
     */
    public function initialize()
    {
    }
    /**
     * Manually adds the customers Eway cards to the list of cards returned
     * by the `woocommerce_saved_payment_methods_list` filter.
     *
     * Eway tokens use the `eway_cc` token type instead of the `cc` token type.
     * WooCommerce Blocks doesn't know how to display the `eway_cc` token type,
     * so this converts all Eway saved cards to the standard `cc` token type
     * and unsets the custom `eway_cc` token type.
     *
     * @param array $saved_methods Saved payment methods list.
     * @return array
     */
    public function add_eway_saved_payment_methods($saved_methods)
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
     * Determine if saved cards should be shown as an option.
     *
     * @return bool True if customers should be able to select a saved card during checkout.
     */
    private function get_show_saved_cards()
    {
    }
    /**
     * Get saved cards data from the database.
     *
     * @return object[] Array of saved cards data.
     */
    private function get_saved_cards()
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
 * This file has class that use to translate Eway error codes.
 *
 * Note: Keep error codes sync with Eway error codes.
 *       You will find list of error codes and there description in eway-rapid-php/resource/lang/en.ini
 *
 * @package WooCommerce Eway Payment Gateway
 * @since   x.x.x
 * @link    https://github.com/eWAYPayment/eway-rapid-php/blob/master/resource/lang/en.ini
 */
/**
 * Class WC_Gateway_Eway_Error_Codes
 *
 * @since x.x.x
 */
class WC_Gateway_Eway_Error_Codes
{
    /**
     * This function should return list of error code description.
     *
     * @since x.x.x
     *
     * @param array $error_codes List of error codes.
     */
    public static function get_error_messages(array $error_codes): array
    {
    }
    /**
     * This function should return error message for given error code.
     *
     * @since x.x.x
     *
     * @param string $error_code Error code.
     */
    public static function get_error_message(string $error_code): string
    {
    }
    /**
     * This function should return list of error codes.
     *
     * @since x.x.x
     */
    private function get_error_codes(): array
    {
    }
    /**
     * Add notice.
     *
     * @since x.x.x
     *
     * @param string $eway_error_codes_str Eway error codes.
     */
    public static function add_notice(string $eway_error_codes_str): void
    {
    }
    /**
     * This function should return eway error message.
     *
     * @since x.x.x
     *
     * @param string $eway_error_codes_str Eway error codes.
     * @param bool   $with_prefix          Whether to include prefix or not.
     */
    public static function get_message(string $eway_error_codes_str, bool $with_prefix = \true): string
    {
    }
}
/**
 * WC_Gateway_EWAY_Privacy class.
 *
 * @extends WC_Abstract_Privacy
 */
class WC_Gateway_EWAY_Privacy extends \WC_Abstract_Privacy
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Returns a list of orders that are using one of Eway's payment methods.
     *
     * @param string $email_address User's email address.
     * @param int    $page Page of results to retrieve.
     *
     * @return array WP_Post
     */
    protected function get_eway_orders($email_address, $page)
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
     * @param int    $page Page.
     * @return array An array of personal data in name value pairs
     */
    public function order_data_eraser($email_address, $page)
    {
    }
    /**
     * Handle eraser of data tied to Subscriptions.
     *
     * @param WC_Order $order The order from which to delete subscription data.
     * @return array
     */
    protected function maybe_handle_subscription($order)
    {
    }
    /**
     * Handle eraser of data tied to Orders
     *
     * @param WC_Order $order The order from which to delete data.
     * @return array
     */
    protected function maybe_handle_order($order)
    {
    }
}
/**
 * WC_Gateway_EWAY class.
 *
 * @extends WC_Payment_Gateway
 *
 * @property-read string $public_api_key    Eway public api key.
 * @property-read string $customer_api      Eway customer api key.
 * @property-read string $customer_password Eway customer password.
 * @property-read string $testmode          Eway sanodbox mode.
 */
#[\AllowDynamicProperties]
class WC_Gateway_EWAY extends \WC_Payment_Gateway
{
    const SECURE_FIELD_CONNECTION = 'card_credit';
    const RESPONSIVE_SHARED_PAGE = 'shared_page';
    const TOKEN_PAYMENT_METHOD = 'TokenPayment';
    const PROCESS_PAYMENT_METHOD = 'ProcessPayment';
    /**
     * Eway API object.
     *
     * @var WC_EWAY_API
     */
    protected $api;
    /**
     * Plugin URL.
     *
     * @var string
     */
    protected $plugin_url;
    /**
     * Success Response Messages.
     *
     * @var array
     */
    protected $success_response_messages;
    /**
     * Whether or not logging is enabled.
     *
     * @var boolean
     */
    public static $log_enabled = \false;
    /**
     * Logger instance.
     *
     * @var WC_Logger
     */
    public static $log = \false;
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    public function process_admin_options()
    {
    }
    public function admin_enqueue_scripts()
    {
    }
    /**
     * Logging method.
     *
     * @param string $message Message to log.
     */
    public static function log($message)
    {
    }
    /**
     * Initialize Gateway Settings form fields.
     *
     * @since 3.7.0 Add setting for Eway "Public API Key"
     * @return void
     */
    public function init_form_fields()
    {
    }
    public function generate_select_html($key, $data)
    {
    }
    /**
     * Check if gateway meets all the requirements to be used.
     *
     * @return bool
     */
    public function is_available()
    {
    }
    /**
     * Show error in admin options if the store's currency is not an Eway-supported currency.
     */
    public function admin_options()
    {
    }
    /**
     * Make a direct payment through the API for an order and handle the result.
     *
     * @param WC_Order   $order                  The order to process.
     * @param int        $amount_to_charge       The amount to charge for the order.
     * @param int|string $eway_token_customer_id The customer's TokenCustomerID to include in direct payment request.
     * @param null|string $transaction_type      The transaction type
     *
     * @return stdClass JSON parsed API response on success, or null on failure
     * @throws Exception If order does not exist or if payment gateway fails.
     */
    protected function process_payment_request($order, $amount_to_charge, $eway_token_customer_id, $transaction_type = \Automattic\WooCommerce\Eway\Vendors\Eway\Rapid\Enum\TransactionType::PURCHASE)
    {
    }
    /**
     * Make a direct payment through the API for a new customer order with Eway secure fields and handle the result.
     *
     * @since 3.7.0
     *
     * @param \WC_Order $order                        The order to process.
     * @param array     $threeds_verification_results The 3DS verification results.
     * @param string    $secured_card_data_token      The secured card data token.
     *
     * @return stdClass JSON parsed API response on success, or null on failure
     * @throws Exception If order does not exist or if payment gateway fails.
     */
    protected function process_payment_with_secure_fields(\WC_Order $order, array $threeds_verification_results, $secured_card_data_token, $transaction_type): \stdClass
    {
    }
    /**
     * This function should be called after a payment has been processed on eway's servers.
     *
     * @param stdClass  $result The response from eway's servers.
     * @param \WC_Order $order  The order that was processed.
     *
     * @since 3.7.0
     *
     * @return object Eway response object
     * @throws Exception Throw exception If payment failed.
     */
    private function handle_eway_payment_response(\stdClass $result, \WC_Order $order): object
    {
    }
    /**
     * This function should preserve new Eway customer token if not exist and attach in order.
     *
     * @param stdClass|string $result The response from eway's servers or Eway customer token id.
     * @param \WC_Order       $order  The order that was processed.
     *
     * @since 3.7.0
     * @throws Exception Throw exception If payment failed.
     */
    private function preserve_customer_token($result, \WC_Order $order): void
    {
    }
    /**
     * Check for token payments and process the payment, otherwise redirect to pay page.
     *
     * @since 3.7.0 Implement logic to accept payment with Eway secure fields credit card form.
     *
     * @param int $order_id The ID of the order.
     *
     * @return void|array
     *
     * @throws Exception Throw exception on error.
     */
    public function process_payment($order_id)
    {
    }
    /**
     * Request an access code for use in an Eway Transparent Redirect payment.
     *
     * @since 3.5.1 Set transaction type to 'Purchase'.
     *
     * @param WC_Order $order The order whose token customer id should be used.
     *
     * @return mixed JSON response from API.
     * @throws Exception If error occurs during API request.
     */
    protected function request_access_code($order)
    {
    }
    /**
     * Load the payment form.
     *
     * @param int $order_id The order to load.
     *
     * @return void
     */
    public function receipt_page($order_id)
    {
    }
    /**
     * Print the css needed to show the card type inside the CC input box.
     *
     * @since 3.1.10 introduced
     */
    public function print_receipt_page_css()
    {
    }
    /**
     * Handle request to get share payment url
     *
     * @param $order_id
     * @return false|mixed
     */
    public function responsive_shared_page($order_id)
    {
    }
    /**
     * Get order items data
     *
     * @param $order
     * @return array
     */
    public function get_order_item($order)
    {
    }
    /**
     * Print css to for responsive shared page
     *
     * @return void
     */
    public function print_responsive_shared_page_css()
    {
    }
    /**
     * Get the Eway API object.
     *
     * @return object WC_EWAY_API
     */
    public function get_api()
    {
    }
    /**
     * Return all icons for card types supported by Eway.
     *
     * @return array
     */
    protected function get_all_payment_icons()
    {
    }
    /**
     * Return icons for allowed card types.
     *
     * @return string
     */
    public function get_icon()
    {
    }
    /**
     * Get the token customer id for an order
     *
     * @param WC_Order $order The order to access.
     *
     * @return string
     */
    protected function get_token_customer_id($order)
    {
    }
    /**
     * Enqueue scripts.
     *
     * @since 3.7.0 Enqueue script for Eway secure fields credit card form.
     *
     * @return void
     */
    public function enqueue_scripts()
    {
    }
    /**
     * Get the plugin URL.
     *
     * @return string
     */
    private function plugin_url()
    {
    }
    /**
     * Listen for a response from Eway on API URL and Process request.
     *
     * @return void
     * @throws Exception If there is an error processing the request.
     */
    public function response_listener()
    {
    }
    /**
     * Show description and option to save cards, or pay with new cards on checkout.
     *
     * @since 3.7.0 Implement eway secure fields credit card form.
     *
     * @return void
     */
    public function payment_fields()
    {
    }
    /**
     * Return payment tokens for the current user.
     * If needed, migrate legacy Eway payment tokens stored in user_meta to WooCommerce Payment Token API.
     *
     * @param WC_Payment_Token[] $tokens      Array of token objects.
     * @param int                $customer_id Customer ID.
     * @param string             $gateway_id  Gateway ID for getting tokens for a specific gateway.
     *
     * @return WC_Payment_Token[] Array of token objects.
     */
    public function get_customer_payment_tokens($tokens, $customer_id, $gateway_id)
    {
    }
    /**
     * Process refunds for WC 2.2+
     *
     * @param int        $order_id The order ID.
     * @param float|null $amount   The amount to refund. Default null.
     * @param string     $reason   The reason for the refund. Default null.
     *
     * @return bool|WP_Error
     */
    public function process_refund($order_id, $amount = \null, $reason = \null)
    {
    }
    /**
     * Lookup Response / Error messages based on codes.
     *
     * @since 3.7.0 Use eway error code class to translate eway error codes.
     *
     * @param string $eway_error_codes Response code from API.
     */
    public function response_message_lookup(string $eway_error_codes): string
    {
    }
    /**
     * Save the token customer id on the order being made.
     *
     * @param WC_Order $order             The order being made.
     * @param int      $token_customer_id The token customer id to associate with order.
     */
    protected function set_token_customer_id($order, $token_customer_id)
    {
    }
    /**
     * Verifies that no customer fields exceed the allowed lengths.
     *
     * @param array    $values The values of the submitted fields.
     * @param WP_Error $errors Validation errors. This is a reference.
     */
    public function validate_checkout_values($values, $errors)
    {
    }
    /**
     * Get the settings keys required for setup during onboarding.
     *
     * @return array
     */
    public function get_required_settings_keys()
    {
    }
    /**
     * Get help text to display during onboarding setup.
     *
     * @return string
     */
    public function get_setup_help_text()
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
     * This function should validate payment gateway related form fields.
     *
     * @since 3.7.0
     */
    public function validate_fields(): void
    {
    }
    /**
     * This function should save payment method.
     *
     * @since 3.7.0
     * @return array
     * @throws Exception When there is an error adding the payment method.
     */
    public function add_payment_method(): array
    {
    }
    /**
     * This function should add new customer token.
     *
     * @since 3.7.0
     *
     * @param stdClass $eway_customer Eway customer object.
     * @param int      $user_id       User ID.
     */
    private function add_new_customer_token(\stdClass $eway_customer, int $user_id): \WC_Payment_Token_Eway_CC
    {
    }
    /**
     * This function should return whether to save customer token for automatic future payment.
     *
     * Note: This function is used in WC_Payment_Gateway_CC::process_payment() function when process payment with secure fields.
     *
     * @param \WC_Order $order Order object.
     *
     * @return bool Whether to save customer token for automatic future payment.
     */
    protected function can_save_eway_customer_token(\WC_Order $order): bool
    {
    }
    /**
     * This function returns whether Eway secure fields enabled.
     *
     * @since 3.7.0
     *
     * @return bool
     */
    private function is_eway_secure_fields_enabled(): bool
    {
    }
    /**
     * This function should process payment with Eway transparent redirect api.
     *
     * Note: Primarily we use Eway secure fields to process payment,
     * but if Eway secure fields is not enabled then we use transparent redirect api to maintain backward compatibility.
     *
     * @since 3.7.1
     *
     * @param \WC_Order $order Order object.
     *
     * @return array|void
     * @throws Exception Thor exception, When there is an error processing the request.
     */
    private function process_payment_with_trasparent_redirect($order)
    {
    }
}
/**
 * WC_Gateway_EWAY_Subscriptions class.
 *
 * @extends WC_Gateway_EWAY
 */
class WC_Gateway_EWAY_Subscriptions extends \WC_Gateway_EWAY
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Maybe update payment method of all subscriptions.
     *
     * @param WC_Order        $order The order whose payment failed.
     * @param stdClass        $result The result from the API call.
     * @param WC_Gateway_EWAY $gateway The instance of the gateway.
     */
    public function maybe_update_all_subscriptions_payment($order, $result, $gateway)
    {
    }
    /**
     * Updates payment method if necessary.
     *
     * When changing payment to Eway for subscriptions it doesn't update payment methods immediately but waits until payment token available.
     *
     * @param  bool            $update Existing value for if payment method should update immediately.
     * @param  string          $new_payment_method Updated payment method.
     * @param  WC_Subscription $subscription Subscrption to update.
     * @return bool
     */
    public function maybe_update_payment_method($update, $new_payment_method, $subscription)
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
     * Returns the WC_Subscription(s) tied to a WC_Order, or a boolean false.
     *
     * @param  WC_Order $order The order from which to get subscriptions.
     * @return bool|WC_Subscription
     */
    protected function get_subscriptions_from_order($order)
    {
    }
    /**
     * Get the token customer id for an order
     *
     * @param WC_Order $order The order from which to get token customer id.
     * @return array|mixed
     */
    protected function get_token_customer_id($order)
    {
    }
    /**
     * Render the payment method used for a subscription in the "My Subscriptions" table
     *
     * @param string $payment_method_to_display The default payment method text to display.
     * @param object $subscription The subscription to render.
     * @return string The subscription payment method.
     */
    public function maybe_render_subscription_payment_method($payment_method_to_display, $subscription)
    {
    }
    /**
     * Check if order contains subscriptions.
     *
     * @param  WC_Order $order The order to check.
     * @return bool
     */
    protected function order_contains_subscription($order)
    {
    }
    /**
     * Process a subscription payment.
     *
     * @param mixed $order The order to process.
     * @param int   $amount The amount to process. Default 0.
     * @return null|object JSON parsed API response on success, or null on failure
     * @throws WP_Error If no token customer id or error during payment.
     */
    public function process_subscription_payment($order = '', $amount = 0)
    {
    }
    /**
     * Checks if the customer has that token to prevent fraud.
     *
     * @since x.x.x Use direct SQL query to check if customer has token.
     * @since 3.5.3 Migrate requested eway customer token from user meta.
     *
     * @param string   $eway_token_customer_id eway token.
     * @param WC_Order $order                  being processed.
     *
     * @return bool
     */
    protected function check_customer_has_token($eway_token_customer_id, $order)
    {
    }
    /**
     * Should migrate requested Eway customer token from user meta.
     *
     * In Eway 3.4.0, we decided to store Eway customer tokens in the token database table instead of the user meta.
     * We added a migration to move away customer tokens to the token table from user meta, but this migration only runs when the saved card setting is enabled.
     * For this reason, older Eway customer tokens are still in the user meta for the website on which the saved card setting is disabled.
     * Subscriptions are renewing because we were not verifying the Eway customer token in the token table.
     *
     * In Eway 3.5.1, we introduce logic to verify the Eway customer token on subscription renewal and
     * older subscription's renewal start getting this error.
     *
     * This function is to migrate the Eway customer token from user meta to the token table.
     * This function will migrate the Eway customer token only if the Eway customer token ( attach to subscription ) is existed in user meta.
     *
     * Github Issue: https://github.com/woocommerce/woocommerce-gateway-eway/issues/189
     *
     * @since 3.5.3
     *
     * @param int    $customer_id            Customer ID.
     * @param string $eway_token_customer_id Eway customer token ID.
     *
     * @return void
     */
    private function migrate_eway_customer_token_from_user_meta($customer_id, $eway_token_customer_id)
    {
    }
    /**
     * API call to get Eway access code.
     *
     * @since 3.5.1 Set transaction type to 'Purchase'.
     *
     * @param WP_Order $order The order to access.
     * @return array|mixed|object
     * @throws Exception If API error when requesting access code.
     */
    protected function request_access_code($order)
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
     * Schedule a subscription payment for an order.
     *
     * @param float    $amount_to_charge The amount to charge.
     * @param WC_Order $order The WC_Order object of the order which the subscription was purchased in.
     * @return void
     */
    public function scheduled_subscription_payment($amount_to_charge, $order)
    {
    }
    /**
     * Save the token customer id on the subscription(s) being made.
     *
     * @param WC_Order $order The order in which to save the token customer id.
     * @param int      $token_customer_id The token customer id to set.
     */
    protected function set_token_customer_id($order, $token_customer_id)
    {
    }
    /**
     * Update the customer_id for a subscription after using Eway to complete a payment to make up for
     * an automatic renewal payment which previously failed.
     *
     * @param WC_Subscription $subscription The subscription for which the failing payment method relates.
     * @param WC_Order        $renewal_order The order which recorded the successful payment (to make up for the failed automatic payment).
     */
    public function update_failing_payment_method($subscription, $renewal_order)
    {
    }
    /**
     * Validate the payment meta data required to process automatic recurring payments so that store managers can
     * manually set up automatic recurring payments for a customer via the Edit Subscriptions screen in 2.0+.
     *
     * @param string $payment_method_id The ID of the payment method to validate.
     * @param array  $payment_meta associative array of meta data required for automatic payments.
     * @throws Exception If token customer ID is missing or invalid.
     */
    public function validate_subscription_payment_meta($payment_method_id, $payment_meta)
    {
    }
    /**
     * This function should return whether Eway token is available for the user or not.
     *
     * @since x.x.x
     *
     * @param string $eway_token Eway customer token.
     * @param int    $user_id User ID.
     *
     * @return bool True if Eway token is available for the user, false otherwise.
     */
    private function has_eway_customer_token($eway_token, $user_id)
    {
    }
    /**
     * This function should return whether save eway customer token for automatic future payment.
     *
     * Note: This function is used in WC_Payment_Gateway_CC::process_payment() function when process payment with secure fields.
     *
     * @param \WC_Order $order Order object.
     *
     * @return bool Whether save eway customer token for automatic future payment.
     */
    protected function can_save_eway_customer_token(\WC_Order $order): bool
    {
    }
    /**
     * @param WC_Order $order
     * @param array $threeds_verification_results
     * @param $secured_card_data_token
     * @param $transaction_type
     *
     * @return stdClass
     * @throws Exception
     */
    protected function process_payment_with_secure_fields(\WC_Order $order, array $threeds_verification_results, $secured_card_data_token, $transaction_type): \stdClass
    {
    }
}
/**
 * WC_Payment_Token_Eway_CC class.
 */
class WC_Payment_Token_Eway_CC extends \WC_Payment_Token
{
    /**
     * Token Type String.
     *
     * @var string
     */
    protected $type = 'Eway_CC';
    /**
     * Stores Credit Card payment token data.
     *
     * @var array
     */
    protected $extra_data = array('number' => '', 'expiry_year' => '', 'expiry_month' => '');
    /**
     * Get type to display to user.
     *
     * @param  string $deprecated Deprecated since WooCommerce 3.0.
     * @return string
     */
    public function get_display_name($deprecated = '')
    {
    }
    /**
     * Hook prefix.
     */
    protected function get_hook_prefix()
    {
    }
    /**
     * Validate credit card payment tokens.
     * number        - string Masked credit card number for the card
     * expiry_year   - string Expiration date (YY) for the card
     * expiry_month  - string Expiration date (MM) for the card
     *
     * @return boolean True if the passed data is valid.
     */
    public function validate()
    {
    }
    /**
     * Return the card expiration year (YY).
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string Expiration year.
     */
    public function get_expiry_year($context = 'view')
    {
    }
    /**
     * Set the expiration year for the card (YY format).
     *
     * @param string $year Credit card expiration year.
     */
    public function set_expiry_year($year)
    {
    }
    /**
     * Return the card expiration month (MM).
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string Expiration month.
     */
    public function get_expiry_month($context = 'view')
    {
    }
    /**
     * Set the expiration month for the card (formats into MM format).
     *
     * @param string $month Credit card expiration month.
     */
    public function set_expiry_month($month)
    {
    }
    /**
     * Return the masked credit card number.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string Masked credit card number.
     */
    public function get_number($context = 'view')
    {
    }
    /**
     * Set the masked credit card number.
     *
     * @param string $number Masked credit card number.
     */
    public function set_number($number)
    {
    }
}
/**
 * This file contains utility functions.
 *
 * @since x.x.x
 * @package WooCommerce Eway Payment Gateway
 */
/**
 * This function should return assets data.
 *
 * @since x.x.x
 *
 * @param string $asset_path Path to asset file.
 */
function wc_eway_get_asset_data(string $asset_path): array
{
}
/**
 * This function should register an error to WooCommerce.
 *
 * @since x.x.x
 *
 * @param string $notice Error message.
 * @param string $notice_type Error type.
 */
function wc_eway_add_notice(string $notice, string $notice_type = 'success'): void
{
}
/**
 * This function should return the gateway class.
 *
 * @since x.x.x
 */
function wc_eway_get_gateway_class(): \WC_Gateway_EWAY
{
}
/**
 * On the My Account page, show number and expiration month for Eway cards.
 *
 * @param array            $item Individual list item from woocommerce_saved_payment_methods_list.
 * @param WC_Payment_Token $payment_token The payment token associated with this method entry.
 * @return array Filtered item.
 */
function wc_eway_get_saved_payment_methods_list($item, $payment_token)
{
}
\define('WOOCOMMERCE_GATEWAY_EWAY_VERSION', '3.9.3');
// WRCS: DEFINED_VERSION.
\define('WOOCOMMERCE_GATEWAY_EWAY_MIN_WC_VERSION', '6.0');
\define('WOOCOMMERCE_GATEWAY_EWAY_MIN_WCS_VERSION', '2.0');
\define('WOOCOMMERCE_GATEWAY_EWAY_URL', \untrailingslashit(\plugins_url(\basename(\plugin_dir_path(__FILE__)), \basename(__FILE__))));
\define('WOOCOMMERCE_GATEWAY_EWAY_PATH', \untrailingslashit(\plugin_dir_path(__FILE__)));
/**
 * Initialize the extension.
 */
function woocommerce_eway_init()
{
}
/**
 * Add Eway gateway classes to WooCommerce.
 *
 * @param array $available_gateways Payment gateways.
 * @return array Payment gateways.
 */
function woocommerce_eway_add_gateway($available_gateways)
{
}
/**
 * Adds plugin action links.
 *
 * @since 3.1.18
 *
 * @param array $links Plugin action links.
 * @return array Plugin action links.
 */
function woocommerce_eway_plugin_action_links($links)
{
}
/**
 * Support Cart and Checkout blocks from WooCommerce Blocks.
 */
function woocommerce_eway_woocommerce_blocks_support()
{
}
/**
 * Show notice for outdated version of WooCommerce.
 */
function woocommerce_eway_outdated_wc_notice()
{
}
/**
 * Show notice for outdated version of WooCommerce Subscriptions.
 */
function woocommerce_eway_outdated_wcs_notice()
{
}
/**
 * Declares HPOS compatibility
 *
 * @since 3.4.6
 */
function eway_declare_hpos_compatibility()
{
}