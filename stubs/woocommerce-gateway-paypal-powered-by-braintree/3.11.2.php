<?php
/**
 * Generated stub declarations for woocommerce-gateway-paypal-powered-by-braintree 3.11.2.
 * @see https://github.com/woocommerce/php-stubs
 */

namespace WC_Braintree\API\Requests {
    /**
     * Braintree API Abstract Request Class
     *
     * Provides functionality common to all requests
     *
     * @since 3.0.0
     */
    abstract class WC_Braintree_API_Request implements \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_API_Request
    {
        /**
         * Braintree SDK resource for the request, e.g. `transaction`.
         *
         * @var string
         */
        protected $resource;
        /**
         * Braintree SDK callback for the request, e.g. `generate`.
         *
         * @var string
         */
        protected $callback;
        /**
         * Request data passed to the static callback.
         *
         * @var array
         */
        protected $request_data = array();
        /**
         * Order associated with the request, if any.
         *
         * @var \WC_Order
         */
        protected $order;
        /**
         * Setup request
         *
         * @since 3.0.0
         * @param \WC_Order|null $order order if available.
         */
        public function __construct($order = null)
        {
        }
        /**
         * Sets the Braintree SDK resource for the request.
         *
         * @since 2.0.0
         * @param string $resource e.g. `transaction`.
         */
        protected function set_resource($resource)
        {
        }
        /**
         * Gets the Braintree SDK resource for the request.
         *
         * @since 2.0.0
         * @return string
         */
        public function get_resource()
        {
        }
        /**
         * Set the static callback for the request
         *
         * @since 3.0.0
         * @param string $callback e.g. `\Braintree\ClientToken::generate`.
         */
        protected function set_callback($callback)
        {
        }
        /**
         * Get the static callback for the request
         *
         * @since 3.0.0
         * @return string static callback
         */
        public function get_callback()
        {
        }
        /**
         * Get the callback parameters for the request
         *
         * @since 3.0.0
         * @return array
         */
        public function get_callback_params()
        {
        }
        /**
         * Return the string representation of the request
         *
         * @since 3.0.0
         * @return string
         */
        public function to_string()
        {
        }
        /**
         * Return the string representation of the request, stripped of any
         * confidential information
         *
         * @since 3.0.0
         * @return string
         */
        public function to_string_safe()
        {
        }
        /**
         * Gets the request data.
         *
         * @since 2.2.0
         *
         * @return array
         */
        public function get_data()
        {
        }
        /**
         * Gets the request data which is the 1st parameter passed to the static callback set.
         *
         * @since 3.0.0
         * @deprecated 2.2.0
         *
         * @return array
         */
        public function get_request_data()
        {
        }
        /**
         * Remove null or blank string values from the request data (up to 2 levels deep)
         *
         * @TODO: this can be improved to traverse deeper and be simpler @MR 2015-10-23
         *
         * @since 3.0.0
         */
        protected function remove_empty_data()
        {
        }
        /**
         * Gets a property from the associated order.
         *
         * @since 2.0.0
         * @param string $prop the desired order property.
         * @return mixed
         */
        public function get_order_prop($prop)
        {
        }
        /**
         * Get the order associated with the request, if any
         *
         * @since 3.0.0
         * @return \WC_Order|null
         */
        public function get_order()
        {
        }
        /**
         * Braintree requests do not require a method per request
         *
         * @since 3.0.0
         */
        public function get_method()
        {
        }
        /**
         * Braintree requests do not require a path per request
         *
         * @since 3.0.0
         */
        public function get_path()
        {
        }
        /**
         * Braintree requests do not require any query params.
         *
         * @since 2.2.0
         *
         * @return array
         */
        public function get_params()
        {
        }
    }
    /**
     * Braintree API Client Token Request class
     *
     * Handles building the request for a client token
     *
     * @since 3.0.0
     */
    class WC_Braintree_API_Client_Token_Request extends \WC_Braintree\API\Requests\WC_Braintree_API_Request
    {
        /**
         * Get the client token
         *
         * @see https://developers.braintreepayments.com/javascript+php/reference/request/client-token/generate
         *
         * @since 3.0.0
         * @param array $args token args.
         */
        public function get_token(array $args)
        {
        }
    }
    /**
     * Braintree API Abstract Vault Request class
     *
     * Handles common methods for vault requests - Customers/Payment Methods
     *
     * @since 3.0.0
     */
    abstract class WC_Braintree_API_Vault_Request extends \WC_Braintree\API\Requests\WC_Braintree_API_Request
    {
        /**
         * Return the billing address in the format required by Braintree
         *
         * @link https://developers.braintreepayments.com/reference/request/payment-method/create/php#billing_address
         * @link https://developers.braintreepayments.com/reference/request/customer/create/php#credit_card.billing_address
         *
         * @since 3.0.0
         * @return array
         */
        protected function get_billing_address()
        {
        }
        /**
         * Return the options used for creating a payment method, mostly for
         * credit cards. This verifies the card by running CVV/AVS checks and prevents
         * duplicate payment methods from being added.
         *
         * @since 3.0.0
         * @return array
         */
        protected function get_credit_card_options()
        {
        }
        /**
         * Return the options used for validating an ACH Direct Debit payment method.
         *
         * @since 3.7.0
         *
         * @return array
         */
        protected function get_ach_direct_debit_options(): array
        {
        }
        /**
         * Add device data for advanced fraud handling, if it's present
         *
         * @since 3.0.0
         */
        protected function add_device_data()
        {
        }
    }
    /**
     * Braintree API Customer Request class
     *
     * Handles creating customers and retrieving their payment methods
     *
     * @since 3.0.0
     */
    class WC_Braintree_API_Customer_Request extends \WC_Braintree\API\Requests\WC_Braintree_API_Vault_Request
    {
        /**
         * Create a new customer and associated payment method
         *
         * @link https://developers.braintreepayments.com/reference/request/customer/create/php
         *
         * @since 3.0.0
         * @param \WC_Order $order The order object.
         */
        public function create_customer(\WC_Order $order)
        {
        }
        /**
         * Create a new blank customer, without any associated payment method, this is used when validating ACH, SEPA and
         * other LPMs.
         *
         * @link https://developer.paypal.com/braintree/docs/reference/request/customer/create/php/#blank-customer
         *
         * @since 3.7.0
         * @param \WC_Order $order The order object.
         */
        public function create_blank_customer(\WC_Order $order)
        {
        }
        /**
         * Get the payment methods for a given customer
         *
         * @link https://developers.braintreepayments.com/reference/request/customer/find/php
         *
         * @since 3.0.0
         * @param string $customer_id Braintree customer ID.
         */
        public function get_payment_methods($customer_id)
        {
        }
    }
    /**
     * Braintree API Payment Method Nonce Request class
     *
     * Handles creating and getting payment method nonces, generally for use with 3D Secure
     * transactions
     *
     * @since 3.0.0
     */
    class WC_Braintree_API_Payment_Method_Nonce_Request extends \WC_Braintree\API\Requests\WC_Braintree_API_Request
    {
        /**
         * Get the payment method associated with a nonce. This is used to retrieve
         * 3D Secure information about a nonce server-side before processing the transaction.
         *
         * @link https://developers.braintreepayments.com/reference/request/payment-method-nonce/create/php
         *
         * @since 3.0.0
         * @param string $nonce nonce from 3D secure verification.
         */
        public function get_payment_method($nonce)
        {
        }
        /**
         * Create a nonce given an existing vaulted payment token. This is used to
         * provide a nonce to the 3D Secure verification method client-side.
         *
         * @link https://developers.braintreepayments.com/reference/request/payment-method-nonce/find/php
         *
         * @since 3.0.0
         * @param string $token vault token ID.
         */
        public function create_nonce($token)
        {
        }
    }
    /**
     * Braintree API Payment Method Request class
     *
     * Handles creating, updating, and deleting individual payment methods
     *
     * @since 3.0.0
     */
    class WC_Braintree_API_Payment_Method_Request extends \WC_Braintree\API\Requests\WC_Braintree_API_Vault_Request
    {
        /**
         * Create a new payment method for an existing customer
         *
         * @link https://developers.braintreepayments.com/reference/request/payment-method/create/php
         *
         * @since 3.0.0
         * @param \WC_Order $order The order object.
         */
        public function create_payment_method(\WC_Order $order)
        {
        }
        /**
         * Delete a customer's payment method
         *
         * @link https://developers.braintreepayments.com/reference/request/payment-method/delete/php
         *
         * @since 3.0.0
         * @param string $token Braintree payment method token.
         */
        public function delete_payment_method($token)
        {
        }
        /**
         * Verify the CSC for an existing saved payment method using the provided
         * nonce
         *
         * @since 3.0.0
         * @param string $token existing payment method token.
         * @param string $nonce nonce provided from client-side hosted fields.
         */
        public function verify_csc($token, $nonce)
        {
        }
        /**
         * Update the expiration date for an existing payment method.
         *
         * @since 2.6.2
         * @param string $token existing payment method token.
         * @param string $expiration_date expiration date in MM/YY format.
         */
        public function update_expiration_date($token, $expiration_date)
        {
        }
        /**
         * Verify the ACH Direct debit nonce for a transaction.
         * This must be done prior to processing the actual transaction.
         *
         * @since 3.7.0
         *
         * @param \WC_Order $order The order object.
         */
        public function verify_ach_direct_debit_account(\WC_Order $order)
        {
        }
    }
    /**
     * Braintree API Transaction Request Class
     *
     * Handles transaction requests (charges, auths, captures, refunds, voids)
     *
     * @since 3.0.0
     */
    class WC_Braintree_API_Transaction_Request extends \WC_Braintree\API\Requests\WC_Braintree_API_Request
    {
        /**
         * Auth and capture transaction type.
         *
         * @var bool
         */
        const AUTHORIZE_AND_CAPTURE = true;
        /**
         * Authorize-only transaction type.
         *
         * @var bool
         */
        const AUTHORIZE_ONLY = false;
        /**
         * Braintree partner ID.
         *
         * @var string
         */
        protected $channel;
        /**
         * Constructs the class.
         *
         * @since 2.0.0
         * @param \WC_Order|null $order order if available.
         * @param string         $channel Braintree Partner ID/channel.
         */
        public function __construct($order = null, $channel = '')
        {
        }
        /**
         * Find a transaction by ID
         *
         * @link https://developers.braintreepayments.com/reference/request/transaction/find/php
         *
         * @since 3.4.0
         * @param string $transaction_id Transaction ID.
         */
        public function find_transaction($transaction_id)
        {
        }
        /**
         * Creates a credit card charge request for the payment method / customer
         *
         * @link https://developers.braintreepayments.com/reference/request/transaction/sale/php
         *
         * @since 3.0.0
         */
        public function create_credit_card_charge()
        {
        }
        /**
         * Creates an ACH Direct Debit charge request using a payment method token.
         *
         * @link https://developers.braintreepayments.com/reference/request/transaction/sale/php
         *
         * @since 3.7.0
         */
        public function create_ach_charge()
        {
        }
        /**
         * Creates a Local Payments charge request using a payment method nonce.
         *
         * @link https://developers.braintreepayments.com/reference/request/transaction/sale/php
         *
         * @since 3.9.0
         */
        public function create_local_payments_charge()
        {
        }
        /**
         * Creates a credit card auth request for the payment method / customer
         *
         * @link https://developers.braintreepayments.com/reference/request/transaction/sale/php
         *
         * @since 3.0.0
         */
        public function create_credit_card_auth()
        {
        }
        /**
         * Capture funds for a previous credit card authorization
         *
         * @link https://developers.braintreepayments.com/reference/request/transaction/submit-for-settlement/php
         *
         * @since 3.0.0
         */
        public function create_credit_card_capture()
        {
        }
        /**
         * Refund funds from a previous transaction
         *
         * @link https://developers.braintreepayments.com/reference/request/transaction/refund/php
         *
         * @since 3.0.0
         */
        public function create_refund()
        {
        }
        /**
         * Void a previous transaction
         *
         * @link https://developers.braintreepayments.com/reference/request/transaction/void/php
         *
         * @since 3.0.0
         */
        public function create_void()
        {
        }
        /**
         * Create a sale transaction with the given settlement type
         *
         * @link https://developers.braintreepayments.com/reference/request/transaction/sale/php
         *
         * @since 3.0.0
         * @param bool $settlement_type true = auth/capture, false = auth-only.
         */
        protected function create_transaction($settlement_type)
        {
        }
        /**
         * Set the customer data for the transaction
         *
         * @link https://developers.braintreepayments.com/reference/request/transaction/sale/php#customer
         *
         * @since 3.0.0
         */
        protected function set_customer()
        {
        }
        /**
         * Get the billing address for the transaction
         *
         * @link https://developers.braintreepayments.com/reference/request/transaction/sale/php#billing
         *
         * @since 3.0.0
         */
        protected function set_billing()
        {
        }
        /**
         * Get the shipping address for the transaction
         *
         * @link https://developers.braintreepayments.com/reference/request/transaction/sale/php#shipping
         *
         * @since 3.0.0
         * @return array
         */
        protected function get_shipping_address()
        {
        }
        /**
         * Set the payment method for the transaction, either a previously saved payment
         * method (token) or a new payment method (nonce)
         *
         * @link https://developers.braintreepayments.com/reference/request/transaction/sale/php#payment_method_nonce
         *
         * @since 3.0.0
         */
        protected function set_payment_method()
        {
        }
        /**
         * Set the dynamic descriptors for the transaction, these are set by the
         * admin in the gateway settings
         *
         * @link https://developers.braintreepayments.com/reference/request/transaction/sale/php#descriptor
         *
         * @since 3.0.0
         */
        protected function set_dynamic_descriptors()
        {
        }
        /**
         * Get the options for the transaction
         *
         * @link https://developers.braintreepayments.com/reference/request/transaction/sale/php#options
         *
         * @since 3.0.0
         * @param bool $settlement_type authorize or auth/capture.
         * @return array
         */
        protected function get_options($settlement_type)
        {
        }
        /**
         * Gets the channel ID for the transaction.
         *
         * @link https://developers.braintreepayments.com/reference/request/transaction/sale/php#channel
         *
         * @since 3.0.0
         */
        protected function get_channel()
        {
        }
        /**
         * Set line items for Level 3 transaction data
         */
        protected function set_line_items()
        {
        }
        /**
         * Convert ISO 3166-1 alpha-2 country code to alpha-3
         * https://www.iban.com/country-codes
         *
         * @param string $alpha2_code The 2-letter country code.
         * @return string|null The 3-letter country code or null if not found
         */
        private function convert_country_code_to_alpha3($alpha2_code)
        {
        }
    }
}
namespace WC_Braintree\API\Responses {
    /**
     * Braintree API Abstract Response Class
     *
     * Provides functionality common to all responses
     *
     * @since 3.0.0
     */
    abstract class WC_Braintree_API_Response implements \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_API_Response
    {
        /**
         * Raw response from the Braintree SDK
         *
         * @var mixed response data from Braintree SDK
         */
        protected $response;
        /**
         * Indicates whether the response is from a credit card or PayPal request
         *
         * @var string either `credit-card` or `paypal`
         */
        protected $response_type;
        /**
         * Setup the response
         *
         * @since 3.0.0
         * @param mixed  $response response data from Braintree SDK.
         * @param string $response_type indicates whether the response is from a credit card or PayPal request.
         */
        public function __construct($response, $response_type)
        {
        }
        /**
         * Checks if the transaction was successful. Braintree's "success" attribute
         * indicates _both_ that the request was successful *and* the transaction
         * (if the request was a transaction) was successful. If a request/transaction
         * isn't successful, it's due to one or more of the following 4 things:
         *
         * 1) Validation failure - invalid request data or the request itself was invalid
         * 2) Gateway Rejection - the gateway rejected the transaction (duplicate check, AVS, CVV, fraud, 3dsecure)
         * 3) Processor Declined - the merchant processor declined the transaction (soft/hard decline, depends on error code)
         * 4) Exception - invalid API credentials, Braintree's servers are down or undergoing maintenance
         *
         * Note that exceptions are handled prior to response "parsing" so there's no
         * handling for them here.
         *
         * @since 3.0.0
         * @see SV_WC_Payment_Gateway_API_Response::transaction_approved()
         * @return bool true if approved, false otherwise
         */
        public function transaction_approved()
        {
        }
        /**
         * Braintree does not support the concept of held requests/transactions, so this
         * doesn not apply
         *
         * @since 3.0.0
         * @return bool
         */
        public function transaction_held()
        {
        }
        /**
         * Gets the transaction status code
         *
         * @since 3.0.0
         * @see SV_WC_Payment_Gateway_API_Response::get_status_code()
         * @return string status code
         */
        public function get_status_code()
        {
        }
        /**
         * Gets the transaction status message
         *
         * @since 3.0.0
         * @see SV_WC_Payment_Gateway_API_Response::get_status_message()
         * @return string status message
         */
        public function get_status_message()
        {
        }
        /**
         * Get the success status info for the given parameter, either code or message
         *
         * @since 3.0.0
         * @param string $type status info type, either `code` or `message`.
         * @return string
         */
        public function get_success_status_info($type)
        {
        }
        /**
         * Get the failure status info for the given parameter, either code or message
         *
         * @since 3.0.0
         * @param string $type status info type, either `code` or `message`.
         * @return string
         */
        public function get_failure_status_info($type)
        {
        }
        /**
         * Returns true if the response contains validation errors (API call
         * cannot be processed because the request was invalid)
         *
         * @link https://developers.braintreepayments.com/reference/general/validation-errors/overview/php
         *
         * @since 3.0.0
         * @return bool
         */
        public function has_validation_errors()
        {
        }
        /**
         * Get an associative array of validation codes => messages
         *
         * @link https://developers.braintreepayments.com/reference/general/validation-errors/all/php
         *
         * @since 3.0.0
         * @return array
         */
        public function get_validation_errors()
        {
        }
        /**
         * Get the error message suitable for displaying to the customer. This should
         * provide enough information to be helpful for correcting customer-solvable
         * issues (e.g. invalid CVV) but not enough to help nefarious folks phishing
         * for data
         *
         * @since 3.0.0
         */
        public function get_user_message()
        {
        }
        /**
         * Return the string representation of the response
         *
         * @since 3.0.0
         * @return string
         */
        public function to_string()
        {
        }
        /**
         * Return the string representation of the response, stripped of any
         * confidential info
         *
         * @since 3.0.0
         * @return string
         */
        public function to_string_safe()
        {
        }
        /**
         * Return the response type, either `credit-card` or `paypal`
         *
         * @since 3.0.0
         * @return string
         */
        protected function get_response_type()
        {
        }
        /**
         * Return the payment type for the response, either `credit-card` or `paypal`
         *
         * @since 3.2.0
         * @return string
         */
        public function get_payment_type()
        {
        }
        /**
         * Return true if this response is from a credit card request
         *
         * @since 3.0.0
         * @return bool
         */
        protected function is_credit_card_response()
        {
        }
    }
    /**
     * Braintree API Abstract Transaction Response Class
     *
     * Provides common functionality to Credit Card & PayPal transaction response classes
     *
     * @link https://developers.braintreepayments.com/javascript+php/reference/response/transaction
     *
     * @since 3.0.0
     */
    abstract class WC_Braintree_API_Transaction_Response extends \WC_Braintree\API\Responses\WC_Braintree_API_Response implements \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_API_Response, \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_API_Authorization_Response, \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_API_Create_Payment_Token_Response, \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_API_Customer_Response
    {
        /** Braintree's CSC match value */
        const CSC_MATCH = 'M';
        /**
         * Gets the response transaction ID
         *
         * @since 3.0.0
         * @see SV_WC_Payment_Gateway_API_Response::get_transaction_id()
         * @return string transaction id
         */
        public function get_transaction_id()
        {
        }
        /**
         * Returns the result of the AVS check
         *
         * @link https://developers.braintreepayments.com/reference/response/transaction/php#avs_error_response_code
         *
         * @since 3.0.0
         * @see SV_WC_Payment_Gateway_API_Authorization_Response::get_avs_result()
         * @return string result of the AVS check, if any
         */
        public function get_avs_result()
        {
        }
        /**
         * Returns the result of the CSC check
         *
         * @since 3.0.0
         * @see SV_WC_Payment_Gateway_API_Authorization_Response::get_csc_result()
         * @return string result of CSC check
         */
        public function get_csc_result()
        {
        }
        /**
         * Returns true if the CSC check was successful
         *
         * @link https://developers.braintreepayments.com/reference/response/transaction/php#cvv_response_code
         *
         * @since 3.0
         * @see SV_WC_Payment_Gateway_API_Authorization_Response::csc_match()
         * @return boolean true if the CSC check was successful
         */
        public function csc_match()
        {
        }
        /**
         * Return the customer ID for the request
         *
         * @since 3.0.0
         * @return string|null
         */
        public function get_customer_id()
        {
        }
        /** Risk Data feature *****************************************************/
        /**
         * Returns true if the transaction has risk data present. If this is not
         * present, advanced fraud tools are not enabled (and set to "show") in
         * the merchant's Braintree account and/or not enabled within plugin settings
         *
         * @since 3.0.0
         */
        public function has_risk_data()
        {
        }
        /**
         * Get the risk ID for this transaction
         *
         * @since 3.0.0
         */
        public function get_risk_id()
        {
        }
        /**
         * Get the risk decision for this transaction, one of: 'not evaluated',
         * 'approve', 'review', 'decline'
         *
         * @since 3.0.0
         */
        public function get_risk_decision()
        {
        }
    }
    /**
     * Braintree API ACH Transaction Response Class
     *
     * Handles parsing ACH transaction responses
     *
     * @see https://developer.paypal.com/braintree/docs/reference/response/transaction/php
     *
     * @since 3.7.0
     */
    class WC_Braintree_API_ACH_Transaction_Response extends \WC_Braintree\API\Responses\WC_Braintree_API_Transaction_Response
    {
        /**
         * Get the authorization code
         *
         * @since 3.7.0
         *
         * @see SV_WC_Payment_Gateway_API_Authorization_Response::get_authorization_code()
         * @return string|null authorization code
         */
        public function get_authorization_code()
        {
        }
        /**
         * Check for token in various possible locations in a transaction response.
         *
         * @link https://developer.paypal.com/braintree/docs/reference/request/payment-method/create/php/
         *
         * NOTE: The online documentation does not list the full payload structure, and the SDK does not provide DTOs,
         * so we attempt to get the token from several possible places.
         *
         * @return string|null
         */
        private function get_ach_token_from_response(): ?string
        {
        }
        /**
         * Get the ACH payment token created during this transaction
         *
         * @since 3.7.0
         *
         * @return \WC_Braintree\WC_Braintree_Payment_Method
         * @throws \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_Exception If token is missing.
         */
        public function get_payment_token()
        {
        }
        /**
         * Get the last four digits of the bank account
         *
         * @link https://developer.paypal.com/braintree/docs/reference/response/transaction/php
         *
         * @since 3.7.0
         * @return string|null
         */
        public function get_last_four()
        {
        }
        /**
         * Get the bank account type (checking or savings)
         *
         * @link https://developer.paypal.com/braintree/docs/reference/response/transaction/php
         *
         * @since 3.7.0
         * @return string|null
         */
        public function get_account_type()
        {
        }
        /**
         * Get the account holder name
         *
         * @link https://developer.paypal.com/braintree/docs/reference/response/transaction/php
         *
         * @since 3.7.0
         * @return string|null
         */
        public function get_account_holder_name()
        {
        }
        /**
         * Get the routing number
         *
         * @link https://developer.paypal.com/braintree/docs/reference/response/transaction/php
         *
         * @since 3.7.0
         * @return string|null
         */
        public function get_routing_number()
        {
        }
        /**
         * Get the bank name
         *
         * @link https://developer.paypal.com/braintree/docs/reference/response/transaction/php
         *
         * @since 3.7.0
         * @return string|null
         */
        public function get_bank_name()
        {
        }
    }
    /**
     * Braintree API Client Token Response Class
     *
     * Handles retrieving the client token
     *
     * @since 3.0.0
     */
    class WC_Braintree_API_Client_Token_Response extends \WC_Braintree\API\Responses\WC_Braintree_API_Response
    {
        /**
         * Return the client token string
         *
         * @since 3.0.0
         * @return string a very long string (1000+ chars)
         */
        public function get_client_token()
        {
        }
    }
    /**
     * Braintree API Abstract Transaction Find Response Class
     *
     * Provides common functionality for transaction find responses where the response
     * is a direct Braintree\Transaction object, not wrapped in a result object.
     *
     * @since 3.4.0
     */
    abstract class WC_Braintree_API_Transaction_Find_Response extends \WC_Braintree\API\Responses\WC_Braintree_API_Response implements \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_API_Response, \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_API_Authorization_Response, \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_API_Create_Payment_Token_Response, \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_API_Customer_Response
    {
        /** Braintree's CSC match value */
        const CSC_MATCH = 'M';
        /**
         * Gets the response transaction ID
         *
         * @see SV_WC_Payment_Gateway_API_Response::get_transaction_id()
         * @return string transaction id
         */
        public function get_transaction_id()
        {
        }
        /**
         * Returns the result of the AVS check
         *
         * @link https://developers.braintreepayments.com/reference/response/transaction/php#avs_error_response_code
         *
         * @see SV_WC_Payment_Gateway_API_Authorization_Response::get_avs_result()
         * @return string result of the AVS check, if any
         */
        public function get_avs_result()
        {
        }
        /**
         * Returns the result of the CSC check
         *
         * @see SV_WC_Payment_Gateway_API_Authorization_Response::get_csc_result()
         * @return string result of CSC check
         */
        public function get_csc_result()
        {
        }
        /**
         * Returns true if the CSC check was successful
         *
         * @link https://developers.braintreepayments.com/reference/response/transaction/php#cvv_response_code
         *
         * @see SV_WC_Payment_Gateway_API_Authorization_Response::csc_match()
         * @return boolean true if the CSC check was successful
         */
        public function csc_match()
        {
        }
        /**
         * Return the customer ID for the request
         *
         * @return string|null
         */
        public function get_customer_id()
        {
        }
        /** Risk Data feature *****************************************************/
        /**
         * Returns true if the transaction has risk data present. If this is not
         * present, advanced fraud tools are not enabled (and set to "show") in
         * the merchant's Braintree account and/or not enabled within plugin settings
         *
         * @return bool
         */
        public function has_risk_data()
        {
        }
        /**
         * Get the risk ID for this transaction
         *
         * @return string|null
         */
        public function get_risk_id()
        {
        }
        /**
         * Get the risk decision for this transaction, one of: 'not evaluated',
         * 'approve', 'review', 'decline'
         *
         * @return string|null
         */
        public function get_risk_decision()
        {
        }
        /**
         * Override parent method to handle direct transaction response
         *
         * @return object|null Transaction object or null
         */
        protected function get_transaction_object()
        {
        }
        /**
         * Get the transaction type (sale, authorization, etc.)
         *
         * @return string|null
         */
        public function get_transaction_type()
        {
        }
        /**
         * Get the merchant account ID
         *
         * @return string|null
         */
        public function get_merchant_account_id()
        {
        }
        /**
         * Get 3D Secure information
         *
         * @return array|null
         */
        public function get_three_d_secure_info()
        {
        }
        /**
         * Get the payment instrument type
         *
         * @return string|null
         */
        public function get_payment_instrument_type()
        {
        }
        /**
         * Gets the transaction status
         *
         * @return string|null
         */
        public function get_status()
        {
        }
    }
    /**
     * Braintree API Credit Card Transaction Find Response Class
     *
     * Handles parsing credit card transaction find responses where the response
     * is a direct Braintree\Transaction object, not wrapped in a result object.
     *
     * @since 3.4.0
     */
    class WC_Braintree_API_Credit_Card_Transaction_Find_Response extends \WC_Braintree\API\Responses\WC_Braintree_API_Transaction_Find_Response
    {
        /**
         * Get the authorization code
         *
         * @see SV_WC_Payment_Gateway_API_Authorization_Response::get_authorization_code()
         * @return string 6 character credit card authorization code
         */
        public function get_authorization_code()
        {
        }
        /**
         * Get the credit card payment token created during this transaction
         *
         * @return \WC_Braintree_Payment_Method
         * @throws \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_Exception If token is missing.
         */
        public function get_payment_token()
        {
        }
        /**
         * Returns the property name for the payment instrument details.
         *
         * @return string
         */
        public function get_instrument_property()
        {
        }
        /**
         * Get the card type used for this transaction
         *
         * @return string
         */
        public function get_card_type()
        {
        }
        /**
         * Get the BIN (bank identification number), AKA the first 6 digits of the card
         * number. Most useful for identifying the card type.
         *
         * @link https://developer.paypal.com/braintree/docs/reference/response/transaction/php#bin
         *
         * @return string
         */
        public function get_bin()
        {
        }
        /**
         * Get the masked card number, which is the first 6 digits followed by
         * 6 asterisks then the last 4 digits. This complies with PCI security standards.
         *
         * @link https://developer.paypal.com/braintree/docs/reference/response/transaction/php#masked_number
         *
         * @return string
         */
        public function get_masked_number()
        {
        }
        /**
         * Get the last four digits of the card number used for this transaction
         *
         * @link https://developers.braintreepayments.com/reference/response/transaction/php#last_4
         *
         * @return string
         */
        public function get_last_four()
        {
        }
        /**
         * Get the expiration month (MM) of the card number used for this transaction
         *
         * @link https://developers.braintreepayments.com/reference/response/transaction/php#expiration_month
         *
         * @return string
         */
        public function get_exp_month()
        {
        }
        /**
         * Get the expiration year (YYYY) of the card number used for this transaction
         *
         * @link https://developers.braintreepayments.com/reference/response/transaction/php#expiration_year
         *
         * @return string
         */
        public function get_exp_year()
        {
        }
        /**
         * Get the billing address ID associated with the credit card token added
         * during the transaction
         *
         * @link https://developers.braintreepayments.com/reference/response/transaction/php#id
         *
         * @return string
         */
        public function get_billing_address_id()
        {
        }
        /** 3D Secure feature *****************************************************/
        /**
         * Returns true if 3D Secure information is present for the transaction
         *
         * @return bool
         */
        public function has_3d_secure_info()
        {
        }
        /**
         * Returns the 3D secure statuses
         *
         * @return string
         */
        public function get_3d_secure_status()
        {
        }
        /**
         * Returns true if liability was shifted for the 3D secure transaction
         *
         * @return bool
         */
        public function get_3d_secure_liability_shifted()
        {
        }
        /**
         * Returns true if a liability shift was possible for the 3D secure transaction
         *
         * @return bool
         */
        public function get_3d_secure_liability_shift_possible()
        {
        }
        /**
         * Returns true if the card was enrolled in a 3D secure program
         *
         * @return bool
         */
        public function get_3d_secure_enrollment()
        {
        }
    }
    /**
     * Braintree API Credit Card Transaction Response Class
     *
     * Handles parsing credit card transaction responses
     *
     * @see https://developers.braintreepayments.com/reference/response/transaction/php#credit_card_details
     *
     * @since 3.0.0
     */
    class WC_Braintree_API_Credit_Card_Transaction_Response extends \WC_Braintree\API\Responses\WC_Braintree_API_Transaction_Response
    {
        /**
         * Get the authorization code
         *
         * @since 3.0.0
         * @see SV_WC_Payment_Gateway_API_Authorization_Response::get_authorization_code()
         * @return string 6 character credit card authorization code
         */
        public function get_authorization_code()
        {
        }
        /**
         * Get the credit card payment token created during this transaction
         *
         * @since 3.0.0
         * @return \WC_Braintree_Payment_Method
         * @throws \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_Exception If token is missing.
         */
        public function get_payment_token()
        {
        }
        /**
         * Returns the property name for the payment instrument details.
         *
         * @return string
         */
        public function get_instrument_property()
        {
        }
        /**
         * Get the card type used for this transaction
         *
         * @since 3.0.0
         * @return string
         */
        public function get_card_type()
        {
        }
        /**
         * Get the BIN (bank identification number), AKA the first 6 digits of the card
         * number. Most useful for identifying the card type.
         *
         * @link https://developers.braintreepayments.com/reference/response/transaction/php#credit_card_details.bin
         *
         * @since 3.0.0
         * @return string
         */
        public function get_bin()
        {
        }
        /**
         * Get the masked card number, which is the first 6 digits followed by
         * 6 asterisks then the last 4 digits. This complies with PCI security standards.
         *
         * @link https://developers.braintreepayments.com/reference/response/transaction/php#credit_card_details.masked_number
         *
         * @since 3.0.0
         * @return string
         */
        public function get_masked_number()
        {
        }
        /**
         * Get the last four digits of the card number used for this transaction
         *
         * @link https://developers.braintreepayments.com/reference/response/transaction/php#credit_card_details.last_4
         *
         * @since 3.0.0
         * @return string
         */
        public function get_last_four()
        {
        }
        /**
         * Get the expiration month (MM) of the card number used for this transaction
         *
         * @link https://developers.braintreepayments.com/reference/response/transaction/php#credit_card_details.expiration_month
         *
         * @since 3.0.0
         * @return string
         */
        public function get_exp_month()
        {
        }
        /**
         * Get the expiration year (YYYY) of the card number used for this transaction
         *
         * @link https://developers.braintreepayments.com/reference/response/transaction/php#credit_card_details.expiration_year
         *
         * @since 3.0.0
         * @return string
         */
        public function get_exp_year()
        {
        }
        /**
         * Get the billing address ID associated with the credit card token added
         * during the transaction
         *
         * @link https://developers.braintreepayments.com/reference/response/transaction/php#billing_details.id
         *
         * @since 3.0.0
         * @return string
         */
        public function get_billing_address_id()
        {
        }
        /** 3D Secure feature *****************************************************/
        /**
         * Returns true if 3D Secure information is present for the transaction
         *
         * @since 3.0.0
         */
        public function has_3d_secure_info()
        {
        }
        /**
         * Returns the 3D secure statuses
         *
         * @link https://developers.braintreepayments.com/guides/3d-secure/server-side/php#server-side-details
         *
         * @since 3.0.0
         * @return string
         */
        public function get_3d_secure_status()
        {
        }
        /**
         * Returns true if liability was shifted for the 3D secure transaction
         *
         * @link https://developers.braintreepayments.com/guides/3d-secure/server-side/php#server-side-details
         *
         * @since 3.0.0
         * @return bool
         */
        public function get_3d_secure_liability_shifted()
        {
        }
        /**
         * Returns true if a liability shift was possible for the 3D secure transaction
         *
         * @link https://developers.braintreepayments.com/guides/3d-secure/server-side/php#server-side-details
         *
         * @since 3.0.0
         * @return bool
         */
        public function get_3d_secure_liability_shift_possible()
        {
        }
        /**
         * Returns true if the card was enrolled in a 3D secure program
         *
         * @link https://developers.braintreepayments.com/guides/3d-secure/server-side/php#server-side-details
         *
         * @since 3.0.0
         * @return bool
         */
        public function get_3d_secure_enrollment()
        {
        }
    }
    /**
     * Braintree API Vault Response Class
     *
     * Handles common methods for parsing vault responses (customers/payment methods)
     *
     * @since 3.0.0
     */
    abstract class WC_Braintree_API_Vault_Response extends \WC_Braintree\API\Responses\WC_Braintree_API_Response
    {
        /**
         * Get the payment token data from the given payment method
         *
         * @since 3.0.0
         * @param \Braintree\CreditCard|\Braintree\PayPalAccount $payment_method payment method object.
         * @return array
         */
        protected function get_payment_token_data($payment_method)
        {
        }
    }
    /**
     * Braintree API Customer Response Class
     *
     * Handles parsing customer responses
     *
     * @since 3.0.0
     *
     * @property Braintree\Customer $response
     */
    class WC_Braintree_API_Customer_Response extends \WC_Braintree\API\Responses\WC_Braintree_API_Vault_Response implements \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_API_Create_Payment_Token_Response, \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_API_Get_Tokenized_Payment_Methods_Response, \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_API_Customer_Response
    {
        /** @var \Braintree\CreditCard|\Braintree\PayPalAccount created payment method */
        protected $payment_method;
        /**
         * Override the default constructor to set created payment method since
         * Braintree simply provides a list of payment methods instead of an object
         * containing the one just created ಠ_ಠ
         *
         * @since 3.0.0
         * @param mixed  $response response data from Braintree SDK.
         * @param string $response_type indicates whether the response is from a credit card or PayPal request.
         */
        public function __construct($response, $response_type)
        {
        }
        /**
         * Get the transaction ID, which is typically only present for create customer
         * requests when verifying the associated credit card. PayPal
         * requests (successful or unsuccessful) do not return a transaction ID
         *
         * @since 3.0.0
         */
        public function get_transaction_id()
        {
        }
        /**
         * Get the single payment token from creating a new customer with a payment
         * method
         *
         * @link https://developers.braintreepayments.com/reference/response/customer/php
         *
         * @since 3.0.0
         * @return \WC_Braintree_Payment_Method
         */
        public function get_payment_token()
        {
        }
        /**
         * Get the payment tokens for the customer.
         *
         * @link https://developers.braintreepayments.com/reference/response/customer/php
         *
         * @since 3.0.0
         *
         * @return array associative array of token => WC_Braintree_Payment_Method objects
         */
        public function get_payment_tokens()
        {
        }
        /**
         * Get the customer ID generated by Braintree when creating a new customer
         *
         * @since 3.0.0
         * @return string
         */
        public function get_customer_id()
        {
        }
        /** Risk Data feature *****************************************************/
        /**
         * Returns true if the transaction has risk data present. If this is not
         * present, advanced fraud tools are not enabled (and set to "show") in
         * the merchant's Braintree account and/or not enabled within plugin settings
         *
         * @since 3.0.0
         */
        public function has_risk_data()
        {
        }
        /**
         * Get the risk ID for this transaction
         *
         * @since 3.0.0
         */
        public function get_risk_id()
        {
        }
        /**
         * Get the risk decision for this transaction, one of: 'not evaluated',
         * 'approve', 'review', 'decline'
         *
         * @since 3.0.0
         */
        public function get_risk_decision()
        {
        }
        /** Helpers ***************************************************************/
        /**
         * Helper to return the payment method created along with the customer, can be
         * either a credit card or PayPal account
         *
         * @since 3.0.0
         * @return \Braintree\CreditCard|\Braintree\PayPalAccount
         */
        protected function get_created_payment_method()
        {
        }
    }
    /**
     * Braintree API Merchant configuration response.
     *
     * This is always preceded by a client token request, as that contains all of the information necessary for the
     * merchant account.
     *
     * @since 2.2.0
     */
    class WC_Braintree_API_Merchant_Configuration_Response extends \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_API_JSON_Response
    {
        /**
         * Determines if 3D Secure is enabled for the merchant account.
         *
         * @since 2.2.0
         *
         * @return bool
         */
        public function is_3d_secure_enabled()
        {
        }
        // TODO: we should be able to check for PayPal & Apple Pay too
    }
    /**
     * Braintree API PayPal Transaction Find Response Class
     *
     * Handles parsing PayPal transaction find responses where the response
     * is a direct Braintree\Transaction object, not wrapped in a result object.
     *
     * @since 3.4.0
     */
    class WC_Braintree_API_PayPal_Transaction_Find_Response extends \WC_Braintree\API\Responses\WC_Braintree_API_Transaction_Find_Response
    {
        /**
         * Get the authorization code
         *
         * @link https://developers.braintreepayments.com/reference/response/transaction/php#authorization_id
         *
         * @see SV_WC_Payment_Gateway_API_Authorization_Response::get_authorization_code()
         * @return string 6 character credit card authorization code
         */
        public function get_authorization_code()
        {
        }
        /**
         * Get the PayPal payment token created during this transaction
         *
         * @return \WC_Braintree_Payment_Method
         * @throws \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_Exception If token is missing.
         */
        public function get_payment_token()
        {
        }
        /**
         * Get the email address associated with the PayPal account used for this transaction
         *
         * @link https://developers.braintreepayments.com/reference/response/transaction/php#payer_email
         *
         * @return string
         */
        public function get_payer_email()
        {
        }
        /**
         * Get the payer ID associated with the PayPal account used for this transaction
         *
         * @link https://developers.braintreepayments.com/reference/response/transaction/php#payer_id
         *
         * @return string
         */
        public function get_payer_id()
        {
        }
        /**
         * Get the payment ID for this transaction
         *
         * @link https://developers.braintreepayments.com/reference/response/transaction/php#payment_id
         *
         * @return string
         */
        public function get_payment_id()
        {
        }
        /**
         * Get the debug ID for this transaction
         *
         * @link https://developers.braintreepayments.com/reference/response/transaction/php#paypal_details
         *
         * @return string
         */
        public function get_debug_id()
        {
        }
        /**
         * Get the capture ID for this transaction. For transactions that were
         * authorized and then captured, this is not available on the transaction
         * details by default, but can be found on the transaction's submitForSettlement
         * array under the key "captureId"
         *
         * @link https://developers.braintreepayments.com/reference/response/transaction/php#capture_id
         *
         * @return string
         */
        public function get_capture_id()
        {
        }
        /**
         * Get the refund ID for this transaction
         *
         * @link https://developers.braintreepayments.com/reference/response/transaction/php#refund_id
         *
         * @return string
         */
        public function get_refund_id()
        {
        }
        /**
         * Get the PayPal description for this transaction
         *
         * @link https://developers.braintreepayments.com/reference/response/transaction/php#description
         *
         * @return string
         */
        public function get_description()
        {
        }
        /**
         * Get the transaction fee amount
         *
         * @return string|null
         */
        public function get_transaction_fee_amount()
        {
        }
    }
    /**
     * Braintree API PayPal Transaction Response Class
     *
     * Handles parsing PayPal transaction responses
     *
     * @see https://developers.braintreepayments.com/reference/response/transaction/php#paypal_details
     *
     * @since 3.0.0
     */
    class WC_Braintree_API_PayPal_Transaction_Response extends \WC_Braintree\API\Responses\WC_Braintree_API_Transaction_Response
    {
        /**
         * Get the authorization code
         *
         * @link https://developers.braintreepayments.com/reference/response/transaction/php#paypal_details.authorization_id
         *
         * @since 3.0.0
         * @see SV_WC_Payment_Gateway_API_Authorization_Response::get_authorization_code()
         * @return string 6 character credit card authorization code
         */
        public function get_authorization_code()
        {
        }
        /**
         * Get the PayPal payment token created during this transaction
         *
         * @since 3.0.0
         * @return \WC_Braintree_Payment_Method
         * @throws \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_Exception If token is missing.
         */
        public function get_payment_token()
        {
        }
        /**
         * Get the email address associated with the PayPal account used for this transaction
         *
         * @link https://developers.braintreepayments.com/reference/response/transaction/php#paypal_details.payer_email
         *
         * @since 3.0.0
         * @return string
         */
        public function get_payer_email()
        {
        }
        /**
         * Get the payer ID associated with the PayPal account used for this transaction
         *
         * @link https://developers.braintreepayments.com/reference/response/transaction/php#paypal_details.payer_id
         *
         * @since 3.0.0
         * @return string
         */
        public function get_payer_id()
        {
        }
        /**
         * Get the payment ID for this transaction
         *
         * @link https://developers.braintreepayments.com/reference/response/transaction/php#paypal_details.payment_id
         *
         * @since 3.0.0
         * @return string
         */
        public function get_payment_id()
        {
        }
        /**
         * Get the debug ID for this transaction
         *
         * @link https://developers.braintreepayments.com/reference/response/transaction/php#paypal_details
         *
         * @since 3.0.0
         * @return string
         */
        public function get_debug_id()
        {
        }
        /**
         * Get the refund ID for this transaction
         *
         * @link https://developers.braintreepayments.com/reference/response/transaction/php#paypal_details.refund_id
         *
         * @since 3.0.0
         * @return string
         */
        public function get_refund_id()
        {
        }
    }
    /**
     * Braintree API Payment Method Nonce Response Class
     *
     * Handles parsing payment method nonce responses
     *
     * @since 3.0.0
     */
    class WC_Braintree_API_Payment_Method_Nonce_Response extends \WC_Braintree\API\Responses\WC_Braintree_API_Response
    {
        /**
         * Get the payment method nonce
         *
         * @link https://developers.braintreepayments.com/reference/response/payment-method-nonce/php
         *
         * @since 3.0.0
         * @return mixed
         */
        public function get_nonce()
        {
        }
        /**
         * Get the BIN information.
         *
         * @link https://developers.braintreepayments.com/reference/response/payment-method-nonce/php
         *
         * @since 3.0.4
         * @return mixed
         */
        public function get_bin()
        {
        }
        /**
         * Returns true if the payment method has 3D Secure information present
         *
         * @since 3.0.0
         * @return bool
         */
        public function has_3d_secure_info()
        {
        }
        /**
         * Returns the 3D secure statuses
         *
         * @link https://developers.braintreepayments.com/reference/response/payment-method-nonce/php#three_d_secure_info.status
         *
         * @since 3.0.0
         * @return string
         */
        public function get_3d_secure_status()
        {
        }
        /**
         * Returns true if liability was shifted for the 3D secure transaction
         *
         * @link https://developers.braintreepayments.com/reference/response/payment-method-nonce/php#three_d_secure_info.liability_shifted
         *
         * @since 3.0.0
         * @return bool
         */
        public function get_3d_secure_liability_shifted()
        {
        }
        /**
         * Returns true if a liability shift was possible for the 3D secure transaction
         *
         * @link https://developers.braintreepayments.com/reference/response/payment-method-nonce/php#three_d_secure_info.liability_shift_possible
         *
         * @since 3.0.0
         * @return bool
         */
        public function get_3d_secure_liability_shift_possible()
        {
        }
        /**
         * Returns true if the card was enrolled in a 3D secure program
         *
         * @link https://developers.braintreepayments.com/reference/response/payment-method-nonce/php#three_d_secure_info.enrolled
         *
         * @since 3.0.0
         * @return bool
         */
        public function get_3d_secure_enrollment()
        {
        }
        /**
         * Gets the payment method data.
         *
         * Some API requests will return the object directly, and others return it inside `paymentMethodNonce` so we need to
         * check for that.
         *
         * @since 2.2.0
         *
         * @return object|null
         */
        protected function get_payment_method()
        {
        }
    }
    /**
     * Braintree API Payment Method Response Class
     *
     * Handles parsing payment method responses
     *
     * @since 3.0.0
     */
    class WC_Braintree_API_Payment_Method_Response extends \WC_Braintree\API\Responses\WC_Braintree_API_Vault_Response implements \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_API_Create_Payment_Token_Response
    {
        /**
         * Get the transaction ID, which is typically only present for create customer/
         * payment method requests when verifying the associated credit card. PayPal
         * requests (successful or unsuccessful) do not return a transaction ID
         *
         * @since 3.0.0
         */
        public function get_transaction_id()
        {
        }
        /**
         * Get the single payment token from a Braintree create payment method call
         *
         * @link https://developers.braintreepayments.com/reference/response/payment-method/php
         *
         * @since 3.0.0
         *
         * @return \WC_Braintree_Payment_Method
         */
        public function get_payment_token()
        {
        }
        /**
         * Return true if the verification for this payment method has an AVS rejection from the gateway.
         *
         * @since 3.2.0
         * @return bool
         */
        public function has_avs_rejection()
        {
        }
        /**
         * Return true if the verification for this payment method has an CVV rejection from the gateway.
         *
         * @since 3.2.0
         * @return bool
         */
        public function has_cvv_rejection()
        {
        }
        /** Risk Data feature *****************************************************/
        /**
         * Returns true if the transaction has risk data present. If this is not
         * present, advanced fraud tools are not enabled (and set to "show") in
         * the merchant's Braintree account and/or not enabled within plugin settings
         *
         * @since 3.0.0
         */
        public function has_risk_data()
        {
        }
        /**
         * Get the risk ID for this transaction
         *
         * @since 3.0.0
         */
        public function get_risk_id()
        {
        }
        /**
         * Get the risk decision for this transaction, one of: 'not evaluated',
         * 'approve', 'review', 'decline'
         *
         * @since 3.0.0
         */
        public function get_risk_decision()
        {
        }
    }
    /**
     * Braintree API Venmo Transaction Response Class
     *
     * Handles parsing Venmo transaction responses
     *
     * @see https://developer.paypal.com/braintree/docs/reference/response/transaction#venmo_account
     *
     * @since 3.6.0
     */
    class WC_Braintree_API_Venmo_Transaction_Response extends \WC_Braintree\API\Responses\WC_Braintree_API_Transaction_Response
    {
        /**
         * Get the authorization code
         *
         * @since 3.6.0
         * @see SV_WC_Payment_Gateway_API_Authorization_Response::get_authorization_code()
         * @return string|null authorization code
         */
        public function get_authorization_code(): ?string
        {
        }
        /**
         * Get the Venmo payment token created during this transaction
         *
         * @since 3.6.0
         * @return \WC_Braintree_Payment_Method
         * @throws \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_Exception If token is missing.
         */
        public function get_payment_token()
        {
        }
    }
}
namespace WC_Braintree\API {
    /**
     * Braintree API Class
     *
     * This is a pseudo-wrapper around the Braintree PHP SDK
     *
     * @link https://github.com/braintree/braintree_php
     * @link https://developers.braintreepayments.com/javascript+php/reference/overview
     *
     * @since 3.0.0
     */
    class WC_Braintree_API extends \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_API_Base implements \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_API
    {
        /** Braintree Partner ID for transactions using Braintree Auth */
        const BT_AUTH_CHANNEL = 'woothemes_bt';
        /** Braintree Partner ID for transactions using API keys */
        const API_CHANNEL = 'woocommerce_bt';
        /**
         * Gateway class instance.
         *
         * @var \WC_Gateway_Braintree
         */
        protected $gateway;
        /**
         * Order associated with the request, if any.
         *
         * @var \WC_Order
         */
        protected $order;
        /**
         * Constructor - setup request object and set endpoint
         *
         * @since 3.0.0
         * @param \WC_Gateway_Braintree $gateway class instance.
         */
        public function __construct($gateway)
        {
        }
        /** API Methods ***********************************************************/
        /**
         * Gets the merchant account configuration.
         *
         * @since 2.2.0
         *
         * @return \WC_Braintree\API\Responses\WC_Braintree_API_Merchant_Configuration_Response
         * @throws \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Plugin_Exception
         */
        public function get_merchant_configuration()
        {
        }
        /**
         * Get a client token for initializing the hosted fields or PayPal forms
         *
         * @since 3.0.0
         *
         * @param array $args
         * @return \WC_Braintree_API_Client_Token_Response
         * @throws \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Plugin_Exception
         */
        public function get_client_token(array $args = array())
        {
        }
        /**
         * Get transaction details by transaction ID
         *
         * @since 3.4.0
         *
         * @param string $transaction_id Transaction ID.
         * @param string $payment_method Payment method (credit_card or paypal).
         * @return \WC_Braintree_API_Transaction_Response
         * @throws \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Plugin_Exception If transaction lookup fails.
         */
        public function get_transaction($transaction_id, $payment_method = null)
        {
        }
        /**
         * Create a new credit card charge transaction
         *
         * @since 3.0.0
         *
         * @see SV_WC_Payment_Gateway_API::credit_card_charge()
         *
         * @param \WC_Order $order order
         * @return \WC_Braintree_API_Credit_Card_Transaction_Response|\WC_Braintree_API_PayPal_Transaction_Response
         * @throws \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Plugin_Exception
         */
        public function credit_card_charge(\WC_Order $order)
        {
        }
        /**
         * Create a new credit card auth transaction
         *
         * @since 3.0.0
         *
         * @see SV_WC_Payment_Gateway_API::credit_card_authorization()
         * @param \WC_Order $order order
         * @return \WC_Braintree_API_Credit_Card_Transaction_Response|\WC_Braintree_API_PayPal_Transaction_Response
         * @throws \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Plugin_Exception
         */
        public function credit_card_authorization(\WC_Order $order)
        {
        }
        /**
         * Verify the CSC for a transaction when using a saved payment toke and CSC
         * is required. This must be done prior to processing the actual transaction.
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order order.
         * @throws \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Plugin_Exception if CSC verification fails
         */
        public function verify_csc(\WC_Order $order)
        {
        }
        /**
         * Capture funds for a credit card authorization
         *
         * @since 3.0.0
         *
         * @see SV_WC_Payment_Gateway_API::credit_card_capture()
         * @param \WC_Order $order order.
         * @return \WC_Braintree_API_Transaction_Response
         * @throws \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Plugin_Exception
         */
        public function credit_card_capture(\WC_Order $order)
        {
        }
        /**
         * Check Debit - no-op
         *
         * @since 3.0.0
         * @param \WC_Order $order order.
         * @return null
         */
        public function check_debit(\WC_Order $order)
        {
        }
        /**
         * Perform a refund for the order
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order the order.
         * @return \WC_Braintree_API_Transaction_Response
         * @throws \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Plugin_Exception
         */
        public function refund(\WC_Order $order)
        {
        }
        /**
         * Perform a void for the order
         *
         * @since 3.0.0
         *
         * @param \WC_Order $order the order.
         * @return \WC_Braintree_API_Transaction_Response
         * @throws \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Plugin_Exception
         */
        public function void(\WC_Order $order)
        {
        }
        /**
         * Verify the ACH Direct debit nonce for a transaction.
         * This must be done prior to processing the actual transaction.
         *
         * @since 3.7.0
         *
         * @param \WC_Order $order order.
         * @throws \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Plugin_Exception If the verification fails.
         */
        public function verify_ach_direct_debit_account(\WC_Order $order)
        {
        }
        /**
         * Create a new ACH Direct Debit charge transaction.
         *
         * @since 3.7.0
         *
         * @param \WC_Order $order The order object.
         * @return \WC_Braintree_API_Payment_Method_Response
         */
        public function ach_charge(\WC_Order $order)
        {
        }
        /**
         * Creates a new Local Payments charge transaction.
         *
         * @since 3.9.0
         *
         * @param \WC_Order $order The order object.
         * @return \WC_Braintree\API\Responses\WC_Braintree_API_PayPal_Transaction_Response
         * @throws \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Plugin_Exception When the request fails.
         */
        public function local_payments_charge(\WC_Order $order)
        {
        }
        /** API Tokenization methods **********************************************/
        /**
         * Tokenize the payment method associated with the order
         *
         * @since 3.0.0
         *
         * @see SV_WC_Payment_Gateway_API::tokenize_payment_method()
         * @param \WC_Order $order the order with associated payment and customer info.
         * @return \WC_Braintree_API_Customer_Response|\WC_Braintree_API_Payment_Method_Response
         * @throws \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Plugin_Exception
         */
        public function tokenize_payment_method(\WC_Order $order)
        {
        }
        /**
         * Get the tokenized payment methods for the customer
         *
         * @since 3.0.0
         *
         * @see SV_WC_Payment_Gateway_API::get_tokenized_payment_methods()
         * @param string $customer_id unique.
         * @return \WC_Braintree_API_Customer_response
         * @throws \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_API_Exception
         */
        public function get_tokenized_payment_methods($customer_id)
        {
        }
        /**
         * Update the tokenized payment method for given customer
         *
         * @since 3.0.0
         * @param WC_Order $order The order object.
         */
        public function update_tokenized_payment_method(\WC_Order $order)
        {
        }
        /**
         * Determines whether updating tokenized methods is supported.
         *
         * @since 2.2.0
         *
         * @return bool
         */
        public function supports_update_tokenized_payment_method()
        {
        }
        /**
         * Updates a credit card token expiration date.
         *
         * @since 2.6.2
         * @param string $token the payment method token.
         * @param string $expiration_date the expiration date in MM/YY format.
         */
        public function update_cc_token_expiration_date($token, $expiration_date)
        {
        }
        /**
         * Remove the given tokenized payment method for the customer
         *
         * @since 3.0.0
         *
         * @see SV_WC_Payment_Gateway_API::remove_tokenized_payment_method()
         * @param string $token the payment method token
         * @param string $customer_id unique
         * @return \WC_Braintree_API_Payment_Method_Response
         * @throws \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Plugin_Exception
         */
        public function remove_tokenized_payment_method($token, $customer_id)
        {
        }
        /**
         * Braintree supports retrieving tokenized payment methods
         *
         * @since 3.0.0
         * @see SV_WC_Payment_Gateway_API::supports_get_tokenized_payment_methods()
         * @return boolean true
         */
        public function supports_get_tokenized_payment_methods()
        {
        }
        /**
         * Braintree supports removing tokenized payment methods
         *
         * @since 3.0.0
         * @see SV_WC_Payment_Gateway_API::supports_remove_tokenized_payment_method()
         * @return boolean true
         */
        public function supports_remove_tokenized_payment_method()
        {
        }
        /**
         * Get payment method info from a client-side provided nonce, generally
         * used for retrieving and verifying 3D secure information server-side
         *
         * @since 3.0.0
         * @param string $nonce payment nonce
         * @return \WC_Braintree_API_Payment_Method_Nonce_Response
         * @throws \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Plugin_Exception
         */
        public function get_payment_method_from_nonce($nonce)
        {
        }
        /**
         * Get the payment nonce from a given payment token, generally used to
         * provide a nonce for a previously vaulted payment method to the client-side
         * 3D Secure verification script
         *
         * @since 3.0.0
         * @param string $token payment method token ID
         * @return \WC_Braintree_API_Payment_Method_Nonce_Response
         * @throws \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Plugin_Exception
         */
        public function get_nonce_from_payment_token($token)
        {
        }
        /** Request/Response Methods **********************************************/
        /**
         * Perform a remote request using the Braintree SDK. Overrides the standard
         * wp_remote_request() as the SDK already provides a cURL implementation
         *
         * @since 3.0.0
         * @see SV_WC_API_Base::do_remote_request()
         * @param string $callback SDK static callback, e.g. `\Braintree\ClientToken::generate`.
         * @param array  $callback_params parameters to pass to the static callback.
         * @return \Exception|mixed
         */
        protected function do_remote_request($callback, $callback_params)
        {
        }
        /**
         * Handle and parse the response
         *
         * @since 3.0.0
         * @param mixed $response directly from Braintree SDK.
         * @return \WC_Braintree_API_Response
         * @throws \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_API_Exception Braintree errors.
         */
        protected function handle_response($response)
        {
        }
        /**
         * Get a human-friendly message from the Braintree exception object
         *
         * @link https://developers.braintreepayments.com/reference/general/exceptions/php
         * @since 3.0.0
         * @param \Exception $e Exception object.
         * @return string
         */
        protected function get_braintree_exception_message($e)
        {
        }
        /**
         * Override the standard request URI with the static callback instead, since
         * the Braintree SDK handles the actual remote request
         *
         * @since 3.0.0
         * @see SV_WC_API_Base::get_request_uri()
         * @return string
         */
        protected function get_request_uri()
        {
        }
        /**
         * Override the standard request args with the static callback params instead,
         * since the Braintree SDK handles the actual remote request
         *
         * @since 3.0.0
         * @see SV_WC_API_Base::get_request_args()
         * @return array
         */
        protected function get_request_args()
        {
        }
        /**
         * Alert other actors that a request has been performed, primarily for
         * request/response logging.
         *
         * @see SV_WC_API_Base::broadcast_request()
         * @since 3.0.0
         */
        protected function broadcast_request()
        {
        }
        /**
         * Builds and returns a new API request object
         *
         * @since 3.0.0
         * @see SV_WC_API_Base::get_new_request()
         * @param array $args Request arguments.
         * @throws \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_API_Exception for invalid request types.
         * @return \WC_Braintree\API\Requests\WC_Braintree_API_Client_Token_Request|\WC_Braintree\API\Requests\WC_Braintree_API_Transaction_Request|\WC_Braintree\API\Requests\WC_Braintree_API_Customer_Request|\WC_Braintree\API\Requests\WC_Braintree_API_Payment_Method_Request|\WC_Braintree\API\Requests\WC_Braintree_API_Payment_Method_Nonce_Request
         */
        protected function get_new_request($args = array())
        {
        }
        /** Helper methods ********************************************************/
        /**
         * Determines if the gateway is configured with Braintree Auth or standard
         * API keys.
         *
         * @since 2.0.0
         *
         * @return bool
         */
        protected function is_braintree_auth()
        {
        }
        /**
         * Return the order associated with the request, if any
         *
         * @since 3.0.0
         * @return \WC_Order
         */
        public function get_order()
        {
        }
        /**
         * Get the ID for the API, used primarily to namespace the action name
         * for broadcasting requests
         *
         * @since 3.0.0
         * @return string
         */
        protected function get_api_id()
        {
        }
        /**
         * Return the gateway plugin
         *
         * @since 3.0.0
         * @return \WC_Braintree
         */
        public function get_plugin()
        {
        }
        /**
         * Returns the gateway class associated with the request
         *
         * @since 3.0.0
         * @return \WC_Gateway_Braintree class instance
         */
        public function get_gateway()
        {
        }
        /**
         * Check if Level 3 data is allowed for the environment.
         *
         * @param string $environment The environment of the gateway.
         * @return bool True if Level 3 data is allowed, false otherwise.
         */
        public static function is_level3_data_allowed($environment)
        {
        }
        /**
         * Get the cooldown window for sending Level 3 data after a 2046 bank declined error.
         *
         * @see https://developer.paypal.com/braintree/articles/control-panel/transactions/declines#code-2046
         * @since 3.8.0
         *
         * @param string $environment The environment of the gateway.
         * @return int The cooldown window in seconds.
         */
        protected static function get_level3_data_bank_declined_cooldown_window($environment): int
        {
        }
    }
    /**
     * Braintree API Response Message Helper
     *
     * Builds customer-friendly response messages by mapping the various Braintree
     * error codes to standardized messages
     *
     * @link https://developers.braintreepayments.com/reference/general/processor-responses/authorization-responses
     * @link https://developers.braintreepayments.com/reference/general/validation-errors/all/php
     *
     * @since 3.0.0
     * @see SV_WC_Payment_Gateway_API_Response_Message_Helper
     */
    class WC_Braintree_API_Response_Message_Helper extends \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_API_Response_Message_Helper
    {
        /**
         * API response.
         *
         * @var \WC_Braintree_API_Response
         */
        protected $response;
        /**
         * Decline codes.
         *
         * @var array
         */
        protected $decline_codes = array('cvv' => 'csc_mismatch', 'avs' => 'avs_mismatch', '2000' => 'card_declined', '2001' => 'insufficient_funds', '2002' => 'credit_limit_reached', '2003' => 'card_declined', '2004' => 'card_expired', '2005' => 'card_number_invalid', '2006' => 'card_expiry_invalid', '2007' => 'card_type_invalid', '2008' => 'card_number_invalid', '2010' => 'csc_mismatch', '2012' => 'card_declined', '2013' => 'card_declined', '2014' => 'card_declined', '2016' => 'error', '2017' => 'card_declined', '2018' => 'card_declined', '2023' => 'card_type_not_accepted', '2024' => 'card_type_not_accepted', '2038' => 'card_declined', '2046' => 'card_declined', '2056' => 'credit_limit_reached', '2059' => 'avs_mismatch', '2060' => 'avs_mismatch', '2075' => 'paypal_closed');
        /**
         * Initialize the API response message handler
         *
         * @since 3.0.0
         * @param \WC_Braintree_API_Response $response API response.
         */
        public function __construct($response)
        {
        }
        /**
         * Get the user-facing error/decline message. Used in place of the get_user_message()
         * method because this class is instantiated with the response class and handles
         * generating the message ID internally
         *
         * @since 3.0.0
         * @return string
         */
        public function get_message()
        {
        }
        /**
         * Returns a message appropriate for a frontend user.  This should be used
         * to provide enough information to a user to allow them to resolve an
         * issue on their own, but not enough to help nefarious folks fishing for
         * info. Adds a few custom authorize.net-specific user error messages.
         *
         * @since 2.0.0
         * @see SV_WC_Payment_Gateway_API_Response_Message_Helper::get_user_message()
         * @param string $message_id identifies the message to return.
         * @return string a user message
         */
        public function get_user_message($message_id)
        {
        }
        /**
         * Return the response object for this user message
         *
         * @since 3.0.0
         * @return \WC_Braintree_API_Response
         */
        public function get_response()
        {
        }
    }
}
namespace WC_Braintree\Admin {
    /**
     * Admin Order handler.
     *
     * @since 3.4.0
     */
    class Order
    {
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Display transaction data button in the Order Details section.
         *
         * @param \WC_Order $order Order object.
         */
        public function display_transaction_data($order)
        {
        }
        /**
         * Enqueue scripts for the order edit page.
         */
        public function enqueue_scripts()
        {
        }
        /**
         * AJAX handler to get transaction data from Braintree
         */
        public function ajax_get_transaction_data()
        {
        }
        /**
         * Format transaction data for display
         *
         * @param mixed     $response Braintree API response.
         * @param \WC_Order $order Order object.
         * @return array Formatted transaction data
         */
        private function format_transaction_data($response, $order)
        {
        }
        /**
         * Format payment type for display
         *
         * @param mixed $response API response object.
         * @return string Formatted payment type
         */
        private function format_payment_type($response)
        {
        }
        /**
         * Format transaction fee for display
         *
         * @param mixed $response API response object.
         * @return string Formatted transaction fee
         */
        private function format_transaction_fee($response)
        {
        }
    }
}
namespace WC_Braintree\Apple_Pay\API {
    /**
     * The Braintree Apple Pay payment response class.
     *
     * @since 2.2.0
     */
    class Payment_Response extends \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_Apple_Pay_Payment_Response
    {
        /**
         * Gets the associated Braintree nonce.
         *
         * @since 2.2.0
         *
         * @return string
         */
        public function get_braintree_nonce()
        {
        }
    }
}
namespace WC_Braintree {
    /**
     * Trait for Braintree Express Checkout.
     *
     * @since 3.4.0
     */
    trait WC_Braintree_Express_Checkout
    {
        /**
         * Modify the Express Checkout button after framework has been initialized.
         *
         * Moves the Express Checkout (ApplePay, GooglePay, etc.) button to the new location following the framework's initialization.
         * As the framework uses a protected function for determining the locations in which buttons
         * are displayed, we determine whether it has registered the actions and move them if required.
         *
         * @see https://github.com/woocommerce/woocommerce-gateway-paypal-powered-by-braintree/pull/535
         *
         * @since 3.4.0
         */
        public function post_init()
        {
        }
        /**
         * Checks if an account should be created for a guest user.
         *
         * @since 3.4.0
         *
         * @return bool
         */
        protected function should_create_account_for_guest(): bool
        {
        }
    }
}
namespace WC_Braintree\Apple_Pay {
    /**
     * The Braintree Apple Pay base handler.
     *
     * @since 2.2.0
     */
    class Apple_Pay extends \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_Apple_Pay
    {
        use \WC_Braintree\WC_Braintree_Express_Checkout;
        /**
         * Initializes the frontend handler.
         *
         * @since 2.2.0
         */
        protected function init_frontend()
        {
        }
        /**
         * Enqueues assets for the Apple Pay button CSS.
         *
         * @since 3.2.2
         */
        public function enqueue_assets()
        {
        }
        /**
         * Initializes Apple Pay session data for Blocks checkout.
         *
         * When using WooCommerce Blocks checkout, the payment request data isn't initialized
         * in the session like it is for classic checkout via Skyverge. This method ensures
         * the session data is always fresh and matches the current cart state. This method
         * is hooked to run at a higher priority than the AJAX handler that recalculates
         * totals so that the data is available when needed.
         *
         * @since 3.5.0
         */
        public function maybe_init_blocks_session()
        {
        }
        /**
         * Gets a single product payment request.
         *
         * @since 3.2.0
         * @see SV_WC_Payment_Gateway_Apple_Pay::build_payment_request()
         *
         * @param \WC_Product $product product object.
         * @param bool        $in_cart whether to generate a cart for this request.
         * @return array
         *
         * @throws \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_Exception For active pre-orders products.
         * @throws \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_Exception For unsupported product types.
         * @throws \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_Exception For products that cannot be purchased.
         */
        public function get_product_payment_request(\WC_Product $product, $in_cart = false)
        {
        }
        /**
         * Gets a payment request based on WooCommerce cart data.
         *
         * @since 3.2.0
         * @see SV_WC_Payment_Gateway_Apple_Pay::build_payment_request()
         *
         * @param \WC_Cart $cart cart object.
         * @return array
         * @throws \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_Exception If cart contains pre-orders.
         * @throws \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_Exception If cart contains multiple shipments.
         */
        public function get_cart_payment_request(\WC_Cart $cart)
        {
        }
        /**
         * Processes the payment after an Apple Pay authorization.
         *
         * This method creates a new order and calls the gateway for processing.
         *
         * @since 3.2.0
         *
         * @return array
         * @throws \Exception When Apple Payment fails.
         * @throws \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_Exception For invalid response data.
         * @throws \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_Exception When there is a gateway processing error.
         */
        public function process_payment()
        {
        }
        /**
         * Builds a new payment request.
         *
         * Overridden to remove some properties that are set by Braintree from account configuration.
         *
         * @since 2.2.0
         *
         * @param float|int $amount payment amount.
         * @param array     $args payment args.
         * @return array
         */
        public function build_payment_request($amount, $args = array())
        {
        }
        /**
         * Builds a payment response object based on an array of data.
         *
         * @since 2.2.0
         *
         * @param string $data response data as a JSON string.
         *
         * @return \WC_Braintree\Apple_Pay\API\Payment_Response
         */
        protected function build_payment_response($data)
        {
        }
        /**
         * Determines if a local Apple Pay certificate is required.
         *
         * @since 2.2.0
         *
         * @return bool
         */
        public function requires_certificate()
        {
        }
        /**
         * Determines if a merchant ID is required.
         *
         * @since 2.2.0
         *
         * @return bool
         */
        public function requires_merchant_id()
        {
        }
        /**
         * Creates a user account from the Apple Pay payment response.
         *
         * @since 3.4.0
         *
         * @param \WC_Braintree\Apple_Pay\API\Payment_Response $payment_response The Apple Pay payment response.
         * @return int User ID if created successfully.
         * @throws \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_Exception If user already exists or account creation fails.
         */
        protected function create_user_account($payment_response)
        {
        }
    }
}
namespace WC_Braintree {
    /**
     * Trait for Braintree Express Checkout Frontend
     *
     * @since 3.4.0
     */
    trait WC_Braintree_Express_Checkout_Frontend
    {
        /**
         * Determines if tokenization should be forced for Digital Wallets
         * depending on the page on which they're used.
         *
         * @since 3.2.0
         *
         * @return boolean
         */
        protected function is_tokenization_forced(): bool
        {
        }
        /**
         * Checks if guest accounts can be created during checkout for subscriptions.
         *
         * @since 3.4.0
         *
         * @return bool
         */
        public function can_create_account_for_guest()
        {
        }
        /**
         * Determines if the external checkout should be allowed for guest users.
         *
         * @since 3.4.0
         *
         * @return bool
         */
        protected function should_allow_guest_checkout(): bool
        {
        }
        /**
         * Determines if the external checkout frontend should be initialized on a product page.
         *
         * @since 3.2.0
         *
         * @param array $locations configured display locations.
         * @return bool
         */
        protected function should_init_on_product_page($locations = array()): bool
        {
        }
        /**
         * Determines if the external checkout frontend should be initialized on a cart page.
         *
         * @since 3.2.0
         *
         * @param array $locations configured display locations.
         * @return bool
         */
        protected function should_init_on_cart_page($locations = array()): bool
        {
        }
        /**
         * Determines if the external checkout frontend should be initialized on a checkout page.
         *
         * @since 3.2.0
         *
         * @param array $locations configured display locations.
         * @return bool
         */
        protected function should_init_on_checkout_page($locations = array()): bool
        {
        }
    }
}
namespace WC_Braintree\Apple_Pay {
    /**
     * The Braintree Apple Pay frontend handler.
     *
     * @since 2.2.0
     */
    class Frontend extends \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_Apple_Pay_Frontend
    {
        use \WC_Braintree\WC_Braintree_Express_Checkout_Frontend;
        /**
         * Gets the JS handler class name.
         *
         * @since 2.4.0
         *
         * @return string
         */
        protected function get_js_handler_class_name()
        {
        }
        /**
         * Enqueues the scripts.
         *
         * @see Framework\SV_WC_Payment_Gateway_Apple_Pay_Frontend::enqueue_scripts()
         *
         * @since 2.2.0
         */
        public function enqueue_scripts()
        {
        }
        /**
         * Gets the parameters to be passed to the JS handler.
         *
         * @see Framework\SV_WC_Payment_Gateway_Apple_Pay_Frontend::get_js_handler_args()
         *
         * @since 2.4.0
         *
         * @return array
         */
        protected function get_js_handler_args()
        {
        }
        /**
         * Renders an Apple Pay button.
         *
         * @since 3.2.2
         */
        public function render_button()
        {
        }
    }
}
namespace WC_Braintree {
    /**
     * The Braintree capture handler.
     *
     * @since 2.2.0
     */
    class Capture extends \SkyVerge\WooCommerce\PluginFramework\v6_2_4\Payment_Gateway\Handlers\Capture
    {
        /**
         * Determines if an order's authorization has expired.
         *
         * @since 2.2.0
         *
         * @param \WC_Order $order The order object.
         * @return bool
         */
        public function has_order_authorization_expired(\WC_Order $order)
        {
        }
        /**
         * Determines if an order is eligible for capture.
         *
         * @since 2.2.0
         *
         * @param \WC_Order $order order object.
         * @return bool
         */
        public function order_can_be_captured(\WC_Order $order)
        {
        }
    }
}
namespace WC_Braintree\Google_Pay {
    /**
     * Google Pay Frontend Handler
     *
     * @since 3.4.0
     */
    class Frontend extends \SkyVerge\WooCommerce\PluginFramework\v6_2_4\Payment_Gateway\External_Checkout\Google_Pay\Frontend
    {
        use \WC_Braintree\WC_Braintree_Express_Checkout_Frontend;
        /**
         * Gets the JavaScript handler class name.
         *
         * @since 3.4.0
         *
         * @return string
         */
        protected function get_js_handler_class_name()
        {
        }
        /**
         * Enqueues the Google Pay scripts.
         *
         * @since 3.4.0
         */
        public function enqueue_scripts()
        {
        }
        /**
         * Gets the JavaScript handler arguments.
         *
         * @since 3.4.0
         *
         * @return array
         */
        protected function get_js_handler_args()
        {
        }
    }
    /**
     * The Braintree Google Pay base handler.
     *
     * @since 3.4.0
     */
    class Google_Pay extends \SkyVerge\WooCommerce\PluginFramework\v6_2_4\Payment_Gateway\External_Checkout\Google_Pay\Google_Pay
    {
        use \WC_Braintree\WC_Braintree_Express_Checkout;
        /**
         * Initializes the frontend handler.
         *
         * @since 3.4.0
         */
        protected function init_frontend()
        {
        }
        /**
         * Enqueues assets for the Google Pay button CSS.
         *
         * @since 3.4.0
         */
        public function enqueue_assets()
        {
        }
        /**
         * Checks if all products in the cart can be purchased using Google Pay.
         *
         * @since 3.4.0
         *
         * @param \WC_Cart $cart cart object.
         *
         * @throws \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_Exception If cart contains pre-orders.
         * @throws \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_Exception If cart contains multiple shipments.
         */
        public function validate_cart(\WC_Cart $cart)
        {
        }
        /**
         * Checks if a single product can be purchased using Google Pay.
         *
         * @since 3.4.0
         *
         * @param \WC_Product $product product object.
         *
         * @throws \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_Exception If product is not available for purchase.
         * @throws \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_Exception If product is not a simple or subscription product.
         * @throws \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_Exception If product is not a pre-order product that is set to charge upon release.
         */
        public function validate_product(\WC_Product $product)
        {
        }
        /**
         * Processes the payment after a Google Pay authorization.
         *
         * This method creates a new order and calls the gateway for processing.
         *
         * @since 3.4.0
         *
         * @param mixed  $payment_data Payment data returned by Google Pay.
         * @param string $product_id Product ID, if we are on a Product page.
         *
         * @return array
         * @throws \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_Exception If gateway processing error.
         * @throws \Exception If other error occurs.
         */
        public function process_payment($payment_data, $product_id)
        {
        }
        /**
         * Prepare an address to WC formatting.
         *
         * @since 3.4.0
         *
         * @param array $address_data The Google Pay address data.
         * @return array WC formatted address.
         */
        protected function prepare_address(array $address_data): array
        {
        }
        /**
         * Creates a user account from the Google Pay payment response data.
         *
         * @since 3.4.0
         *
         * @param mixed $payment_data Payment data returned by Google Pay.
         * @return int User ID if created successfully.
         * @throws \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_Exception If user already exists or account creation fails.
         */
        protected function create_user_account($payment_data)
        {
        }
    }
}
namespace WC_Braintree\Integrations {
    /**
     * AvaTax Integration
     *
     * Provides compatibility between Braintree express checkout methods (Apple Pay, Google Pay)
     * and the WooCommerce AvaTax plugin for tax calculation.
     *
     * @since 3.7.0
     */
    class AvaTax
    {
        /**
         * Constructs the class.
         *
         * @since 3.7.0
         */
        public function __construct()
        {
        }
        /**
         * Checks if AvaTax plugin is active.
         *
         * @since 3.7.0
         *
         * @return bool
         */
        protected function is_avatax_active(): bool
        {
        }
        /**
         * Adds action and filter hooks.
         *
         * @since 3.7.0
         */
        protected function add_hooks()
        {
        }
        /**
         * Determines whether AvaTax should calculate taxes for Google Pay AJAX requests.
         *
         * AvaTax has built-in support for Apple Pay AJAX requests (checks for '_apple_pay_' in action)
         * but does not have similar support for Google Pay. This filter enables tax calculation
         * during Google Pay shipping address selection and other Google Pay AJAX operations.
         *
         * @since 3.7.0
         *
         * @param bool $needs_calculation Whether AvaTax should calculate taxes.
         * @return bool
         */
        public function enable_calculation_for_google_pay($needs_calculation)
        {
        }
        /**
         * Calculates and applies AvaTax taxes to an order.
         *
         * This method should be called after order creation for express checkout flows
         * (Apple Pay, Google Pay) where the standard checkout flow doesn't properly
         * apply cart taxes to the order.
         *
         * This method uses AvaTax's estimate_tax() which calls calculate_order_tax()
         * with update_item_taxes=true to properly update order line items and totals.
         *
         * @since 3.7.0
         *
         * @param \WC_Order $order The order to calculate taxes for.
         */
        public static function calculate_order_tax($order)
        {
        }
    }
    /**
     * Pre-Orders Integration
     *
     * @since 2.4.0
     */
    class Pre_Orders extends \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_Integration_Pre_Orders
    {
        /**
         * Processes a pre-order payment when the pre-order is released.
         *
         * Overridden here to handle PayPal transactions.
         *
         * @since 2.4.0
         *
         * @param \WC_Order $order original order containing the pre-order.
         */
        public function process_release_payment($order)
        {
        }
    }
    /**
     * Product Add-ons integration class.
     *
     * @since 2.3.0
     */
    class Product_Addons
    {
        /**
         * Constructs the product add-ons integration class.
         *
         * @since 2.3.0
         */
        public function __construct()
        {
        }
        /**
         * Validates the product data for displaying the product button.
         *
         * @since 2.3.0
         *
         * @param bool            $is_valid       whether the product data is valid.
         * @param \WC_Braintree\PayPal\Buttons\Product $product_button product button instance.
         * @return bool
         */
        public function validate_product_data($is_valid, $product_button)
        {
        }
        /**
         * Prepares the data for product add-ons before adding the product to the cart.
         *
         * @since 2.3.0
         *
         * @param int   $product_id product ID.
         * @param int   $quantity quantity.
         * @param int   $variation_id product variation ID.
         * @param array $cart_data cart data.
         */
        public function prepare_product_data_for_addons($product_id, $quantity, $variation_id, $cart_data)
        {
        }
    }
}
namespace WC_Braintree {
    /**
     * The lifecycle handler class.
     *
     * @since 2.2.0
     *
     * @method \WC_Braintree get_plugin()
     */
    class Lifecycle extends \SkyVerge\WooCommerce\PluginFramework\v6_2_4\Plugin\Lifecycle
    {
        /**
         * Initializes the plugin lifecycle.
         *
         * @since 2.2.0
         */
        public function init()
        {
        }
        /**
         * Performs any upgrade tasks based on the provided installed version.
         *
         * @since 2.2.0
         *
         * @param string $installed_version currently installed version.
         */
        protected function upgrade($installed_version)
        {
        }
        /**
         * Migrate the necessary settings from the retired plugin.
         *
         * @since 2.2.0
         */
        protected function migrate_from_sv()
        {
        }
        /**
         * Migrates Braintree legacy order, subscription, and user meta to v2.
         *
         * @since 2.2.0
         */
        protected function update_legacy_meta()
        {
        }
        /**
         * Updates to version 2.5.0.
         *
         * Adds an option to indicate whether the PayPal Pay Later button settings must be unchecked by default.
         *
         * @since 2.5.0
         */
        protected function upgrade_to_2_5_0()
        {
        }
        /**
         * Updates to version 3.7.0.
         *
         * Migrates the old `inherit_settings` boolean to the new `inherit_settings_source` setting.
         * This ensures existing credential sharing configurations continue to work after upgrade.
         *
         * @since 3.7.0
         */
        protected function upgrade_to_3_7_0()
        {
        }
        /**
         * Backfills the OAuth connection history marker when an access token is already present.
         *
         * Lets the missing-credentials notice distinguish unexpected token loss from
         * fresh installs, mid-setup, and deliberate disconnects for stores that Auth-connected
         * before `wc_braintree_was_oauth_connected` existed.
         *
         * @since 3.11.1
         */
        protected function maybe_backfill_was_oauth_connected()
        {
        }
    }
    /**
     * Log all things!
     *
     * @since 3.5.0
     */
    class Logger
    {
        const WC_LOG_FILENAME = 'woocommerce-gateway-paypal-powered-by-braintree';
        const LOG_CONTEXT = ['source' => self::WC_LOG_FILENAME, 'plugin_version' => \WC_Braintree\WC_Braintree::VERSION];
        /**
         * Log handler instance.
         *
         * @see https://woocommerce.github.io/code-reference/classes/WC-Logger.html
         * @see https://developer.woocommerce.com/docs/best-practices/data-management/logging/#log-handlers
         *
         * @var WC_Logger
         */
        public static $logger;
        /**
         * Get the WooCommerce logger instance.
         *
         * @since 3.5.0
         *
         * @return WC_Logger
         */
        private static function get_logger()
        {
        }
        // Logs have eight different severity levels:
        // - emergency.
        // - alert.
        // - critical.
        // - error.
        // - warning.
        // - notice.
        // - info.
        // - debug.
        /**
         * Creates a log entry of type emergency.
         *
         * @since 3.5.0
         *
         * @param string $message Message to send to the log file.
         * @param array  $context Additional context to add to the log.
         *
         * @return void
         */
        public static function emergency($message, $context = [])
        {
        }
        /**
         * Creates a log entry of type alert.
         *
         * @since 3.5.0
         *
         * @param string $message Message to send to the log file.
         * @param array  $context Additional context to add to the log.
         *
         * @return void
         */
        public static function alert($message, $context = [])
        {
        }
        /**
         * Creates a log entry of type critical.
         *
         * @since 3.5.0
         *
         * @param string $message Message to send to the log file.
         * @param array  $context Additional context to add to the log.
         *
         * @return void
         */
        public static function critical($message, $context = [])
        {
        }
        /**
         * Creates a log entry of type error.
         *
         * @since 3.5.0
         *
         * @param string $message Message to send to the log file.
         * @param array  $context Additional context to add to the log.
         *
         * @return void
         */
        public static function error($message, $context = [])
        {
        }
        /**
         * Creates a log entry of type warning.
         *
         * @since 3.5.0
         *
         * @param string $message Message to send to the log file.
         * @param array  $context Additional context to add to the log.
         *
         * @return void
         */
        public static function warning($message, $context = [])
        {
        }
        /**
         * Creates a log entry of type notice.
         *
         * @since 3.5.0
         *
         * @param string $message Message to send to the log file.
         * @param array  $context Additional context to add to the log.
         *
         * @return void
         */
        public static function notice($message, $context = [])
        {
        }
        /**
         * Creates a log entry of type info.
         *
         * @since 3.5.0
         *
         * @param string $message Message to send to the log file.
         * @param array  $context Additional context to add to the log.
         *
         * @return void
         */
        public static function info($message, $context = [])
        {
        }
        /**
         * Creates a log entry of type debug.
         *
         * @since 3.5.0
         *
         * @param string $message Message to send to the log file.
         * @param array  $context Additional context to add to the log.
         *
         * @return void
         */
        public static function debug($message, $context = [])
        {
        }
    }
}
namespace WC_Braintree\PayPal\Buttons {
    /**
     * Abstract PayPal button class.
     *
     * @since 2.3.0
     */
    abstract class Abstract_Button extends \SkyVerge\WooCommerce\PluginFramework\v6_2_4\Handlers\Script_Handler
    {
        /**
         * PayPal gateway instance.
         *
         * @var \WC_Gateway_Braintree_PayPal
         */
        protected $gateway;
        /**
         * Tracks whether a cancel link has been rendered from any button
         *
         * @var bool
         */
        protected static $rendered_cancel_link = false;
        /**
         * Constructs the button handler.
         *
         * @since 2.3.0
         *
         * @param \WC_Gateway_Braintree_PayPal $gateway the gateway instance.
         */
        public function __construct($gateway)
        {
        }
        /**
         * Checks if this button should be enabled or not.
         *
         * @since 2.3.0
         *
         * @return bool
         */
        protected function is_enabled()
        {
        }
        /**
         * Adds the action and filter hooks.
         *
         * @since 2.3.0
         */
        protected function add_hooks()
        {
        }
        /**
         * Adds any actions and filters needed for the button, if the button is enabled.
         *
         * @since 2.4.0
         */
        protected function add_button_hooks()
        {
        }
        /**
         * Renders the button markup and JS.
         *
         * @since 2.3.0
         */
        public function render()
        {
        }
        /**
         * Handles the request made to the WC API after the JS has generated a token.
         *
         * @since 2.3.0
         */
        public function handle_wc_api()
        {
        }
        /**
         * Validates a WC API request.
         *
         * @since 2.3.0
         *
         * @return bool
         */
        abstract protected function is_wc_api_request_valid();
        /**
         * Processes a WC API request after the JS has generated a token.
         *
         * @since 2.3.0
         */
        protected function process_wc_api_request()
        {
        }
        /**
         * Gets the array of form handler JS params.
         *
         * @since 2.3.0
         *
         * @return array
         */
        protected function get_form_handler_params()
        {
        }
        /**
         * Gets the JS handler arguments.
         *
         * @since 2.4.0
         *
         * @return array
         */
        protected function get_js_handler_args()
        {
        }
        /**
         * Gets additional JS Handler params - Override in concrete classes.
         *
         * @since 2.3.0
         *
         * @return array
         */
        protected function get_additional_js_handler_params()
        {
        }
        /**
         * Renders the PayPal button JS.
         *
         * @since 2.3.0
         */
        protected function render_js()
        {
        }
        /**
         * Gets the handler instantiation JS.
         *
         * @since 2.4.0
         *
         * @param array  $additional_args additional handler arguments, if any.
         * @param string $handler_name handler name, if different from self::get_js_handler_class_name().
         * @param string $object_name object name, if different from self::get_js_handler_object_name().
         * @return string
         */
        protected function get_handler_js(array $additional_args = [], $handler_name = '', $object_name = '')
        {
        }
        /**
         * Renders the PayPal button markup.
         *
         * @since 2.3.0
         */
        public function render_button()
        {
        }
        /**
         * Gets an array of params for rendering the button HTML.
         *
         * @since 2.3.0
         *
         * @return array
         */
        protected function get_button_params()
        {
        }
        /**
         * Gets additional button params for the button markup - override in concrete classes.
         *
         * @since 2.3.0
         *
         * @return array
         */
        protected function get_additional_button_params()
        {
        }
        /**
         * Determines if the PayPal token should be considered "single use".
         *
         * This is primarily dependent on if there are subscriptions or Pre-Orders
         * present in the cart.
         *
         * @since 2.3.0
         *
         * @return bool
         */
        protected function is_single_use()
        {
        }
        /**
         * Gets the total amount the button should charge - override in concrete classes.
         *
         * @since 2.3.0
         *
         * @return float
         */
        protected function get_button_total()
        {
        }
        /**
         * Gets the currency to be used for the button.
         *
         * @since 2.3.0
         *
         * @return string
         */
        protected function get_button_currency()
        {
        }
        /**
         * Gets the locale to be used for the button.
         *
         * @since 2.3.0
         *
         * @return string
         */
        protected function get_button_locale()
        {
        }
        /**
         * Determines if shipping address needs to be enable on express checkout or not.
         *
         * This is primarily dependent on if cart or product needs shipping.
         *
         * @since 2.9.1
         *
         * @return bool
         */
        protected function needs_shipping()
        {
        }
        /**
         * Sets the checkout address value if it's available from the PayPal session.
         *
         * @since 2.3.0
         *
         * @param null   $value the checkout field value.
         * @param string $key the checkout field key.
         * @return string|null
         */
        public function set_checkout_value($value, $key)
        {
        }
        /**
         * Sets the "Ship to different address" checkbox based on PayPal session data.
         *
         * @since 2.3.0
         *
         * @param bool $checked whether the checkbox is checked.
         * @return bool
         */
        public function set_ship_to_different_address($checked)
        {
        }
        /**
         * Disables all other gateways at checkout when confirming payment.
         *
         * @since 2.0.0
         * @param array $gateways Available gateways.
         * @return array
         */
        public function disable_other_gateways($gateways)
        {
        }
        /**
         * Adds styles for the cart & confirmation page.
         *
         * @since 2.3.0
         */
        public function enqueue_styles()
        {
        }
        /**
         * Renders a "Cancel" link.
         *
         * @since 2.3.0
         */
        public function render_cancel_link()
        {
        }
        /**
         * Sets the customer address session data from a PayPal token request.
         *
         * @since 2.3.0
         *
         * @param array $data the customer data.
         */
        protected function set_customer_data($data = [])
        {
        }
        /**
         * Determines if the current view is at Checkout, confirming the cart PayPal purchase.
         *
         * @since 2.3.0
         *
         * @return bool
         */
        public function is_checkout_confirmation()
        {
        }
        /**
         * Gets the cart nonce from the session, if any.
         *
         * @since 2.3.0
         *
         * @return string
         */
        public function get_cart_nonce()
        {
        }
        /**
         * Clears any PayPal cart session data.
         *
         * @since 2.3.0
         */
        public function clear_session_data()
        {
        }
        /**
         * Returns the gateway instance.
         *
         * @since 2.3.0
         *
         * @return \WC_Gateway_Braintree_PayPal
         */
        protected function get_gateway()
        {
        }
        /**
         * Adds a log entry.
         *
         * @since 2.4.0
         *
         * @param string $message message to log.
         */
        protected function log_event($message)
        {
        }
        /**
         * Determines whether logging is enabled.
         *
         * @since 2.4.0
         *
         * @return bool
         */
        protected function is_logging_enabled()
        {
        }
    }
    /**
     * Cart page button class.
     *
     * @since 2.3.0
     */
    class Cart extends \WC_Braintree\PayPal\Buttons\Abstract_Button
    {
        /**
         * Gets the JS handler class name.
         *
         * @since 2.4.0
         *
         * @return string
         */
        protected function get_js_handler_class_name()
        {
        }
        /**
         * Checks if this button should be enabled or not.
         *
         * @since 2.3.0
         *
         * @return bool
         */
        protected function is_enabled()
        {
        }
        /**
         * Adds any actions and filters needed for the button.
         *
         * @since 2.3.0
         * @since 2.4.0 renamed add_hooks() to add_button_hooks()
         */
        protected function add_button_hooks()
        {
        }
        /**
         * Validates the WC API request.
         *
         * @since 2.3.0
         *
         * @return bool
         */
        protected function is_wc_api_request_valid()
        {
        }
        /**
         * Renders the PayPal button JS.
         *
         * @since 2.3.0
         *
         * @return array
         */
        protected function get_form_handler_params()
        {
        }
        /**
         * Gets the total amount the button should charge.
         *
         * @since 2.3.0
         *
         * @return float
         */
        protected function get_button_total()
        {
        }
        /**
         * Gets the ID of this script handler.
         *
         * @since 2.4.0
         *
         * @return string
         */
        public function get_id()
        {
        }
    }
    /**
     * Product page button class.
     *
     * @since 2.3.0
     */
    class Product extends \WC_Braintree\PayPal\Buttons\Abstract_Button
    {
        /** @var \WC_Product|null|false the product object if on a product page or false if not on a product page */
        protected $product;
        /**
         * Gets the JS handler class name.
         *
         * @since 2.4.0
         *
         * @return string
         */
        protected function get_js_handler_class_name()
        {
        }
        /**
         * Checks if this button should be enabled or not.
         *
         * @since 2.3.0
         *
         * @return bool
         */
        protected function is_enabled()
        {
        }
        /**
         * Adds necessary actions and filters for this button.
         *
         * @since 2.3.0
         * @since 2.4.0 renamed add_hooks() to add_button_hooks()
         */
        protected function add_button_hooks()
        {
        }
        /**
         * Initializes the product page buy now button.
         *
         * @internal
         *
         * @since 2.3.0
         */
        public function init_product()
        {
        }
        /**
         * Gets the form handler params.
         *
         * @since 2.3.0
         */
        protected function get_form_handler_params()
        {
        }
        /**
         * Validates a WC API request.
         *
         * @since 2.3.0
         *
         * @return bool
         */
        protected function is_wc_api_request_valid()
        {
        }
        /**
         * Processes a WC API request that contains data from the button JS response.
         *
         * @since 2.3.0
         */
        protected function process_wc_api_request()
        {
        }
        /**
         * Determines if product data should be validated before displaying a buy button.
         *
         * @since 2.3.0
         *
         * @return bool
         */
        public function should_validate_product_data()
        {
        }
        /**
         * Validates product add-ons via AJAX to show/hide the PayPal button appropriately.
         *
         * @since 2.3.0
         */
        public function validate_product_data()
        {
        }
        /**
         * Gets the order amount for the product and quantity specified in the given form data.
         *
         * @since 2.5.0
         *
         * @return float
         */
        protected function get_order_amount_from_form($form)
        {
        }
        /**
         * Gets any additional JS handler params needed for this button.
         *
         * @since 2.3.0
         *
         * @return array
         */
        protected function get_additional_js_handler_params()
        {
        }
        /**
         * Gets additional button markup params.
         *
         * @since 2.3.0
         *
         * @return array
         */
        protected function get_additional_button_params()
        {
        }
        /**
         * Gets the product total.
         *
         * @since 2.3.0
         *
         * @return float
         */
        protected function get_button_total()
        {
        }
        /**
         * Returns whether the button is for single-use transaction or not.
         *
         * @since 2.3.0
         *
         * @return bool
         */
        protected function is_single_use()
        {
        }
        /**
         * Gets the product page product object, or false if not on a product page.
         *
         * @since 2.3.0
         *
         * @return \WC_Product|false
         */
        protected function get_product()
        {
        }
        /**
         * Gets the ID of this script handler.
         *
         * @since 2.4.0
         *
         * @return string
         */
        public function get_id()
        {
        }
    }
}
namespace WC_Braintree\Payment_Forms {
    trait Test_Mode_UI_Trait
    {
        /**
         * Render the redesigned test-mode UI block.
         *
         * Emits nothing when the gateway is not in a test environment, so callers
         * may invoke it unconditionally.
         */
        public function render_test_mode_ui(): void
        {
        }
    }
    /**
     * Braintree Abstract Payment Form
     *
     * @since 3.0.0
     */
    abstract class WC_Braintree_Payment_Form extends \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_Payment_Form
    {
        use \WC_Braintree\Payment_Forms\Test_Mode_UI_Trait;
        /**
         * Sets up the class.
         *
         * Overridden here to avoid calling get_tokens() on construct.
         *
         * @since 2.4.0
         *
         * @param \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway|\SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_Direct $gateway gateway for form.
         */
        public function __construct($gateway)
        {
        }
        /**
         * Adds hooks for rendering the payment form.
         *
         * Overridden here to move the location of the payment form JS enqueue
         *
         * @since 2.4.0
         */
        protected function add_hooks()
        {
        }
        /**
         * Renders the payment form
         *
         * Overridden here to attempt to load tokens before render rather than on form construct.
         *
         * @since 2.4.0
         */
        public function render()
        {
        }
        /**
         * Renders the payment form description, including the shared test-mode UI
         * block when the gateway is in a test environment.
         *
         * The shared test-mode UI (including the test-amount input) is suppressed
         * on the Add Payment Method page.
         *
         * @link https://developers.braintreepayments.com/reference/general/testing/php
         *
         * @since 3.0.0
         */
        public function render_payment_form_description()
        {
        }
        /**
         * Mirrors the framework implementation while suppressing the legacy
         * "TEST MODE ENABLED" banner - replaced by the Test badge
         *
         * @since 3.11.0
         *
         * @return string Payment form description HTML (admin description only).
         */
        public function get_payment_form_description_html()
        {
        }
        /**
         * Render a hidden input for the payment nonce and device_data before the
         * credit card/PayPal fields. This is populated by the payment form javascript
         * when it receives a nonce from Braintree.
         *
         * @since 3.0.0
         */
        public function render_payment_fields()
        {
        }
        /**
         * Get gateway-specific JS params that are passed to the payment form handler script
         *
         * @since 2.0.0
         *
         * @return array
         */
        protected function get_payment_form_handler_js_params()
        {
        }
        /**
         * Render JS to instantiate the Braintree-specific payment form handler class.
         * Note that this intentionally does not instantiate the standard payment
         * form handler, as Braintree replaces it entirely.
         *
         * @since 3.0.0
         */
        public function render_js()
        {
        }
        /**
         * Gets the order total for both checkout and order pay page instances.
         *
         * @since 3.3.2-1
         */
        public function get_order_total()
        {
        }
        /**
         * Determines whether the current request is authorized to see the pay-for-order's data.
         *
         * Returns true when the requester is the order's logged-in owner (for orders with a
         * customer_id), or when they supply a valid order key in the URL (for guest orders).
         * Mirrors the gate the credit-card hosted-fields form has applied since SIRT PR #1035.
         *
         * @since 3.11.0
         *
         * @return bool
         */
        protected function can_view_pay_page_order(): bool
        {
        }
        /**
         * Renders the order's billing/shipping data as hidden inputs on the pay-for-order page.
         *
         * The pay-for-order surface (form#order_review) does not render the usual billing
         * fields, so gateway JS that reads them via the DOM (LPM, 3DS card flows, etc.)
         * gets empty values. Mirror the order's address into hidden inputs using the same
         * names/IDs the regular checkout uses, gated by ownership verification.
         *
         * @since 3.11.0
         *
         * @return void
         */
        protected function render_pay_page_billing_inputs()
        {
        }
        /**
         * Gets the JS handler arguments.
         *
         * @since 2.4.0
         *
         * @return array
         */
        protected function get_js_handler_args()
        {
        }
    }
    /**
     * Braintree ACH Payment Form
     *
     * @since 3.7.0
     *
     * @method \WC_Braintree\WC_Gateway_Braintree_ACH get_gateway()
     */
    class WC_Braintree_ACH_Payment_Form extends \WC_Braintree\Payment_Forms\WC_Braintree_Payment_Form
    {
        /**
         * Gets the JS handler class name.
         *
         * @since 3.7.0
         *
         * @return string
         */
        protected function get_js_handler_class_name()
        {
        }
        /**
         * Return the JS params passed to the payment form handler script
         *
         * @since 3.7.0
         * @see WC_Braintree_Payment_Form::get_payment_form_handler_js_params()
         * @return array
         */
        public function get_payment_form_handler_js_params()
        {
        }
        /**
         * Render the ACH payment fields.
         *
         * Renders hidden inputs for ACH nonce and device data.
         *
         * @since 3.7.0
         */
        public function render_payment_fields()
        {
        }
        /**
         * Get the mandate data for the ACH payment form.
         *
         * @since 3.7.0
         * @return array The mandate data for the ACH payment form.
         */
        public function get_mandate_data(): array
        {
        }
        /**
         * Gets the saved payment method title for display on checkout.
         *
         * Overridden to show the Bank name and the las 4 digits of the account.
         *
         * @since 3.7.0
         *
         * @param \WC_Braintree\WC_Braintree_Payment_Method $token Payment token.
         * @return string
         */
        protected function get_saved_payment_method_title($token)
        {
        }
        /**
         * Gets the "Use a new bank account" input HTML.
         *
         * Overridden to always default to "Use a new bank account" regardless of saved tokens.
         *
         * @since 3.7.0
         *
         * @return string
         */
        protected function get_use_new_payment_method_input_html()
        {
        }
    }
    /**
     * Braintree Hosted Fields Payment Form
     *
     * @since 3.0.0
     *
     * @method \WC_Gateway_Braintree_Credit_Card get_gateway()
     */
    class WC_Braintree_Hosted_Fields_Payment_Form extends \WC_Braintree\Payment_Forms\WC_Braintree_Payment_Form
    {
        /**
         * Gets the JS handler class name.
         *
         * @since 2.4.0
         *
         * @return string
         */
        protected function get_js_handler_class_name()
        {
        }
        /**
         * Override the standard payment method HTML to add a nonce to the associated
         * token so it can be used for 3D Secure verification. This is added as a
         * data-nonce attribute.
         *
         * @since 3.0.0
         * @param \WC_Braintree_Payment_Method $token payment token.
         * @return string saved payment method HTML
         */
        protected function get_saved_payment_method_html($token)
        {
        }
        /**
         * Override the default form fields to add hosted field specific classes
         *
         * @since 3.0.0
         * @return array credit card form fields
         */
        protected function get_credit_card_fields()
        {
        }
        /**
         * Render a custom payment field. This essentially replaces <input> types
         * usually generated by woocommerce_form_field() with <div>s that are required
         * by Braintree's hosted field implementation
         *
         * @since 3.0.0
         * @param array $field field data.
         */
        public function render_payment_field($field)
        {
        }
        /**
         * Return the JS params passed to the the payment form handler script
         *
         * @since 3.0.0
         * @see WC_Braintree_Payment_Form::get_payment_form_handler_js_params()
         * @return array
         */
        public function get_payment_form_handler_js_params()
        {
        }
        /**
         * Determines whether 3D Secure should be enabled for the current transaction.
         *
         * @since 2.3.1
         *
         * @return bool
         */
        private function should_enable_3d_secure()
        {
        }
        /**
         * Gets the enabled card types in the Braintree SDK format.
         *
         * @since 2.1.0
         *
         * @return array
         */
        protected function get_enabled_card_types()
        {
        }
        /**
         * Get the hosted fields styles in an associative array. These are used
         * by the Braintree SDK to apply to the inputs inside the hosted field iframes.
         *
         * @link https://developers.braintreepayments.com/guides/hosted-fields/styling/javascript/v2
         *
         * @since 3.0.0
         * @return array
         */
        protected function get_hosted_fields_styles()
        {
        }
        /**
         * Renders hidden inputs for the handling 3D Secure transactions.
         *
         * @since 3.0.0
         */
        public function render_payment_fields()
        {
        }
        /**
         * Calculate the order total used for card verification.
         *
         * @since 2.3.1
         *
         * @return float cart total or the subscription recurring amount
         */
        public function get_order_total_for_3d_secure()
        {
        }
        /**
         * Calculate the recurring amount for the subscriptions included in the cart.
         *
         * @since 2.3.1
         *
         * @see \WC_Subscriptions_Cart::calculate_subscription_totals()
         * @return float
         */
        private function get_subscription_totals()
        {
        }
    }
    /**
     * Braintree Local Payment Payment Form.
     *
     * Shared payment form for all local payment method gateways.
     * Each gateway renders instructional text and hidden inputs.
     *
     * @since 3.9.0
     *
     * @method \WC_Braintree\WC_Gateway_Braintree_Local_Payment get_gateway()
     */
    class WC_Braintree_Local_Payment_Payment_Form extends \WC_Braintree\Payment_Forms\WC_Braintree_Payment_Form
    {
        /**
         * Adds hooks for rendering the payment form.
         *
         * Moves JS rendering from wp_footer to the payment_form_end hook so that
         * the handler initialization code is included in the payment form HTML.
         *
         * The parent class uses wp_footer which only fires once on initial page
         * load. LPM gateways appear dynamically when the billing country changes
         * via WooCommerce's update_checkout AJAX, so the init JS must be part of
         * the payment fragment that gets replaced.
         *
         * @since 3.9.0
         *
         * @see WC_Braintree_Local_Payment_Payment_Form::render_js()
         */
        protected function add_hooks()
        {
        }
        /**
         * Renders the handler initialization JS as an inline script tag.
         *
         * Overrides the parent to output an inline script tag instead of using
         * wc_enqueue_js(). The framework's payment_form_end hook uses wc_enqueue_js()
         * which buffers JS for wp_footer — this doesn't work during AJAX because
         * wp_footer never fires. An inline script tag is included in the AJAX
         * fragment response and executed by jQuery when the DOM is replaced.
         *
         * @since 3.9.0
         *
         * @see WC_Braintree_Local_Payment_Payment_Form::add_hooks()
         */
        public function render_js()
        {
        }
        /**
         * Gets the handler instantiation JS.
         *
         * Adds a guard to skip initialization if the handler already exists. This
         * prevents duplicate instances when the checkout payment fragment is
         * replaced on subsequent update_checkout AJAX calls while the gateway
         * remains available.
         *
         * @since 3.9.0
         *
         * @param array  $additional_args Additional handler arguments.
         * @param string $handler_name    Handler class name.
         * @param string $object_name     Global object name for the handler instance.
         * @return string
         */
        protected function get_handler_js(array $additional_args = [], $handler_name = '', $object_name = '')
        {
        }
        /**
         * Gets the JS handler class name.
         *
         * @since 3.9.0
         *
         * @return string
         */
        protected function get_js_handler_class_name()
        {
        }
        /**
         * Returns the JS params passed to the payment form handler script.
         *
         * @since 3.9.0
         *
         * @see WC_Braintree_Payment_Form::get_payment_form_handler_js_params()
         * @return array
         */
        public function get_payment_form_handler_js_params()
        {
        }
        /**
         * Renders the payment form description.
         *
         * Overrides the base to skip the test amount field. For LPMs, test
         * behavior is controlled in Braintree's off-site simulator.
         *
         * @since 3.9.0
         */
        public function render_payment_form_description()
        {
        }
        /**
         * Renders the local payment method payment fields.
         *
         * Renders instructional text and hidden inputs for amount, currency, and payment ID.
         * The payment flow is triggered via the order button.
         *
         * @since 3.9.0
         */
        public function render_payment_fields()
        {
        }
    }
    /**
     * Braintree PayPal Payment Form
     *
     * @since 3.0.0
     *
     * @method \WC_Gateway_Braintree_PayPal get_gateway()
     */
    class WC_Braintree_PayPal_Payment_Form extends \WC_Braintree\Payment_Forms\WC_Braintree_Payment_Form
    {
        /**
         * Gets the JS handler class name.
         *
         * @since 2.4.0
         *
         * @return string
         */
        protected function get_js_handler_class_name()
        {
        }
        /**
         * Return the JS params passed to the the payment form handler script
         *
         * @since 3.0.0
         * @see WC_Braintree_Payment_Form::get_payment_form_handler_js_params()
         * @return array
         */
        public function get_payment_form_handler_js_params()
        {
        }
        /**
         * Gets the cart nonce from the session, if any.
         *
         * @since 2.3.0
         *
         * @return string
         */
        public function get_cart_nonce()
        {
        }
        /**
         * Determines if the current view is at Checkout, confirming the cart PayPal purchase.
         *
         * @since 2.3.0
         *
         * @return bool
         */
        public function is_checkout_confirmation()
        {
        }
        /**
         * Renders the payment form description.
         *
         * Overridden to bail if confirming a cart order.
         *
         * @since 2.0.0
         */
        public function render_payment_form_description()
        {
        }
        /**
         * Renders the saved payment methods.
         *
         * Overridden to bail if confirming a cart order.
         *
         * @since 2.0.0
         */
        public function render_saved_payment_methods()
        {
        }
        /**
         * Gets the saved method title.
         *
         * Adds special handling to ensure PayPal accounts display their email address if no nickname is set.
         *
         * @since 2.2.5
         *
         * @param WC_Braintree_Payment_Method $token token object.
         * @return string
         */
        protected function get_saved_payment_method_title($token)
        {
        }
        /**
         * Gets the "Use a new PayPal account" input HTML.
         *
         * Overridden to display "Use a new PayPal account" instead of "Use a new bank account".
         *
         * @since 3.7.0
         *
         * @return string
         */
        protected function get_use_new_payment_method_input_html()
        {
        }
        /**
         * Render the PayPal container div, which is replaced by the PayPal button
         * when the frontend JS executes. This also renders 3 hidden inputs:
         *
         * 1) wc_braintree_paypal_amount - order total
         * 2) wc_braintree_paypal_currency - active store currency
         * 3) wc_braintree_paypal_locale - site locale
         *
         * Note these are rendered as hidden inputs and not passed to the script constructor
         * because these will be refreshed and re-rendered when the checkout updates,
         * which is important for the accuracy of things like the order total.
         *
         * Also note that the order total is used for rendering info inside the PayPal
         * modal and _not_ for actual processing for the transaction, so there's no
         * security concerns here.
         *
         * @since 3.0.0
         */
        public function render_payment_fields()
        {
        }
        /**
         * Gets the disabled funding options.
         *
         * @since 2.6.0
         *
         * @return array
         */
        protected function get_disabled_funding_options()
        {
        }
    }
    /**
     * Braintree Venmo Payment Form
     *
     * @since 3.5.0
     *
     * @method \WC_Braintree\WC_Gateway_Braintree_Venmo get_gateway()
     */
    class WC_Braintree_Venmo_Payment_Form extends \WC_Braintree\Payment_Forms\WC_Braintree_Payment_Form
    {
        /**
         * Gets the JS handler class name.
         *
         * @since 3.5.0
         *
         * @return string
         */
        protected function get_js_handler_class_name()
        {
        }
        /**
         * Return the JS params passed to the payment form handler script
         *
         * @since 3.5.0
         * @see WC_Braintree_Payment_Form::get_payment_form_handler_js_params()
         * @return array
         */
        public function get_payment_form_handler_js_params()
        {
        }
        /**
         * Gets the cart nonce from the session, if any.
         *
         * @since 3.5.0
         *
         * @return string
         */
        public function get_cart_nonce()
        {
        }
        /**
         * Determines if the current view is at Checkout, confirming the cart Venmo purchase.
         *
         * @since 3.5.0
         *
         * @return bool
         */
        public function is_checkout_confirmation()
        {
        }
        /**
         * Renders the saved payment methods.
         *
         * Overridden to bail if confirming a cart order.
         *
         * @since 3.5.0
         */
        public function render_saved_payment_methods()
        {
        }
        /**
         * Render the Venmo payment fields.
         *
         * Renders hidden inputs for Venmo nonce, device data, and username,
         * plus the Venmo button container.
         *
         * @since 3.5.0
         */
        public function render_payment_fields()
        {
        }
        /**
         * Gets the saved payment method title for display on checkout.
         *
         * Overridden to show the Venmo username.
         *
         * @since 3.6.0
         *
         * @param \WC_Braintree\WC_Braintree_Payment_Method $token Payment token.
         * @return string
         */
        protected function get_saved_payment_method_title($token)
        {
        }
        /**
         * Gets the "Use new payment method" radio input HTML.
         *
         * Overridden to display "Use a new Venmo account" instead of "Use a new bank account".
         *
         * @since 3.6.0
         *
         * @return string
         */
        protected function get_use_new_payment_method_input_html()
        {
        }
    }
}
namespace WC_Braintree {
    /**
     * Registers the `woocommerce_gateway_title` filter that decorates Braintree
     * gateway titles with a visible "Test" pill while running in sandbox mode.
     */
    class Test_Mode_Badge
    {
        /**
         * Registers the gateway-title filter callback.
         */
        public static function register(): void
        {
        }
        /**
         * Appends a "Test" badge to the gateway title when the gateway is a Braintree
         * gateway in sandbox mode and the current request is a checkout-like surface.
         *
         * @param string $title      Original gateway title.
         * @param string $gateway_id Gateway ID (e.g. `braintree_credit_card`).
         * @return string Possibly-decorated title.
         */
        public static function maybe_append_badge(string $title, string $gateway_id): string
        {
        }
        /**
         * Determines whether the current request is one where the badge should render.
         *
         * Excludes REST responses, admin-non-AJAX requests, and active transactional
         * email rendering — none of those surfaces should leak the badge HTML.
         *
         * @return bool
         */
        private static function is_allowed_context(): bool
        {
        }
        /**
         * Resolves a registered payment gateway by ID if it is a Braintree gateway.
         *
         * Uses the live gateway instance rather than reading the gateway's settings
         * option directly so inherited credentials (via `inherit_settings_source`)
         * are respected.
         *
         * @param string $gateway_id Gateway ID (e.g. `braintree_credit_card`).
         * @return WC_Gateway_Braintree|null
         */
        private static function get_braintree_gateway(string $gateway_id): ?\WC_Braintree\WC_Gateway_Braintree
        {
        }
        /**
         * Checks whether any registered Braintree gateway is in test mode.
         *
         * @return bool
         */
        public static function any_gateway_in_sandbox(): bool
        {
        }
    }
}
namespace WC_Braintree\Venmo\Buttons {
    /**
     * Abstract Venmo button class.
     *
     * @since 3.5.0
     */
    abstract class Abstract_Button extends \SkyVerge\WooCommerce\PluginFramework\v6_2_4\Handlers\Script_Handler
    {
        /**
         * Venmo gateway instance.
         *
         * @var \WC_Braintree\WC_Gateway_Braintree_Venmo
         */
        protected $gateway;
        /**
         * Tracks whether a cancel link has been rendered from any button
         *
         * @var bool
         */
        protected static $rendered_cancel_link = false;
        /**
         * Constructs the button handler.
         *
         * @since 3.5.0
         *
         * @param \WC_Braintree\WC_Gateway_Braintree_Venmo $gateway the gateway instance.
         */
        public function __construct($gateway)
        {
        }
        /**
         * Checks if this button should be enabled or not.
         *
         * @since 3.5.0
         *
         * @return bool
         */
        protected function is_enabled()
        {
        }
        /**
         * Adds the action and filter hooks.
         *
         * @since 3.5.0
         */
        protected function add_hooks()
        {
        }
        /**
         * Adds any actions and filters needed for the button, if the button is enabled.
         *
         * @since 3.5.0
         */
        protected function add_button_hooks()
        {
        }
        /**
         * Enqueues button-specific scripts.
         *
         * @since 3.5.0
         */
        protected function enqueue_scripts()
        {
        }
        /**
         * Renders the button markup and JS.
         *
         * @since 3.5.0
         */
        public function render()
        {
        }
        /**
         * Handles the request made to the WC API after the JS has generated a token.
         *
         * @since 3.5.0
         */
        public function handle_wc_api()
        {
        }
        /**
         * Validates a WC API request.
         *
         * @since 3.5.0
         *
         * @return bool
         */
        abstract protected function is_wc_api_request_valid();
        /**
         * Processes a WC API request after the JS has generated a token.
         *
         * @since 3.5.0
         */
        protected function process_wc_api_request()
        {
        }
        /**
         * Gets the JS handler arguments.
         *
         * @since 3.5.0
         *
         * @return array
         */
        protected function get_js_handler_args()
        {
        }
        /**
         * Gets additional JS Handler params - Override in concrete classes.
         *
         * @since 3.5.0
         *
         * @return array
         */
        protected function get_additional_js_handler_params()
        {
        }
        /**
         * Renders the Venmo button JS.
         *
         * @since 3.5.0
         */
        protected function render_js()
        {
        }
        /**
         * Gets the handler instantiation JS.
         *
         * @since 3.5.0
         *
         * @param array  $additional_args additional handler arguments, if any.
         * @param string $handler_name handler name, if different from self::get_js_handler_class_name().
         * @param string $object_name object name, if different from self::get_js_handler_object_name().
         * @return string
         */
        protected function get_handler_js(array $additional_args = [], $handler_name = '', $object_name = '')
        {
        }
        /**
         * Renders the Venmo button markup.
         *
         * @since 3.5.0
         */
        public function render_button()
        {
        }
        /**
         * Gets an array of params for rendering the button HTML.
         *
         * @since 3.5.0
         *
         * @return array
         */
        protected function get_button_params()
        {
        }
        /**
         * Gets additional button params for the button markup - override in concrete classes.
         *
         * @since 3.5.0
         *
         * @return array
         */
        protected function get_additional_button_params()
        {
        }
        /**
         * Gets the total amount the button should charge - override in concrete classes.
         *
         * @since 3.5.0
         *
         * @return float
         */
        protected function get_button_total()
        {
        }
        /**
         * Gets the currency to be used for the button.
         *
         * @since 3.5.0
         *
         * @return string
         */
        protected function get_button_currency()
        {
        }
        /**
         * Disables all other gateways at checkout when confirming payment.
         *
         * @since 3.5.0
         * @param array $gateways Available gateways.
         * @return array
         */
        public function disable_other_gateways($gateways)
        {
        }
        /**
         * Adds styles for the cart & confirmation page.
         *
         * @since 3.5.0
         */
        public function enqueue_styles()
        {
        }
        /**
         * Renders a "Cancel" link.
         *
         * @since 3.5.0
         */
        public function render_cancel_link()
        {
        }
        /**
         * Determines if the current view is at Checkout, confirming the cart Venmo purchase.
         *
         * @since 3.5.0
         *
         * @return bool
         */
        public function is_checkout_confirmation()
        {
        }
        /**
         * Gets the cart nonce from the session, if any.
         *
         * @since 3.5.0
         *
         * @return string
         */
        public function get_cart_nonce()
        {
        }
        /**
         * Clears any Venmo cart session data.
         *
         * @since 3.5.0
         */
        public function clear_session_data()
        {
        }
        /**
         * Returns the gateway instance.
         *
         * @since 3.5.0
         *
         * @return \WC_Braintree\WC_Gateway_Braintree_Venmo
         */
        protected function get_gateway()
        {
        }
        /**
         * Adds a log entry.
         *
         * @since 3.5.0
         *
         * @param string $message message to log.
         */
        protected function log_event($message)
        {
        }
        /**
         * Determines whether logging is enabled.
         *
         * @since 3.5.0
         *
         * @return bool
         */
        protected function is_logging_enabled()
        {
        }
    }
    /**
     * Cart page button class.
     *
     * @since 3.5.0
     */
    class Cart extends \WC_Braintree\Venmo\Buttons\Abstract_Button
    {
        /**
         * Gets the JS handler class name.
         *
         * @since 3.5.0
         *
         * @return string
         */
        protected function get_js_handler_class_name()
        {
        }
        /**
         * Checks if this button should be enabled or not.
         *
         * @since 3.5.0
         *
         * @return bool
         */
        protected function is_enabled()
        {
        }
        /**
         * Adds any actions and filters needed for the button.
         *
         * @since 3.5.0
         */
        protected function add_button_hooks()
        {
        }
        /**
         * Initializes the cart page button.
         *
         * @since 3.5.0
         */
        public function init_cart()
        {
        }
        /**
         * Enqueues cart button scripts.
         *
         * @since 3.5.0
         */
        public function enqueue_cart_scripts()
        {
        }
        /**
         * Validates the WC API request.
         *
         * @since 3.5.0
         *
         * @return bool
         */
        protected function is_wc_api_request_valid()
        {
        }
        /**
         * Gets the total amount the button should charge.
         *
         * @since 3.5.0
         *
         * @return float
         */
        protected function get_button_total()
        {
        }
        /**
         * Gets any additional JS handler params needed for this button.
         *
         * @since 3.6.0
         *
         * @return array
         */
        protected function get_additional_js_handler_params()
        {
        }
        /**
         * Gets the ID of this script handler.
         *
         * @since 3.5.0
         *
         * @return string
         */
        public function get_id()
        {
        }
    }
    /**
     * Product page button class.
     *
     * @since 3.5.0
     */
    class Product extends \WC_Braintree\Venmo\Buttons\Abstract_Button
    {
        /**
         * The product object if on a product page or false if not on a product page.
         *
         * @var \WC_Product|null|false
         */
        protected $product;
        /**
         * Gets the JS handler class name.
         *
         * @since 3.5.0
         *
         * @return string
         */
        protected function get_js_handler_class_name()
        {
        }
        /**
         * Checks if this button should be enabled or not.
         *
         * @since 3.5.0
         *
         * @return bool
         */
        protected function is_enabled()
        {
        }
        /**
         * Adds necessary actions and filters for this button.
         *
         * @since 3.5.0
         */
        protected function add_button_hooks()
        {
        }
        /**
         * Initializes the product page buy now button.
         *
         * @internal
         *
         * @since 3.5.0
         */
        public function init_product()
        {
        }
        /**
         * Enqueues product button scripts.
         *
         * @since 3.5.0
         */
        public function enqueue_product_scripts()
        {
        }
        /**
         * Validates a WC API request.
         *
         * @since 3.5.0
         *
         * @return bool
         */
        protected function is_wc_api_request_valid()
        {
        }
        /**
         * Processes a WC API request that contains data from the button JS response.
         *
         * @since 3.5.0
         */
        protected function process_wc_api_request()
        {
        }
        /**
         * Determines if product data should be validated before displaying a buy button.
         *
         * @since 3.5.0
         *
         * @return bool
         */
        public function should_validate_product_data()
        {
        }
        /**
         * Validates product add-ons via AJAX to show/hide the Venmo button appropriately.
         *
         * @since 3.5.0
         */
        public function validate_product_data()
        {
        }
        /**
         * Gets the order amount for the product and quantity specified in the given form data.
         *
         * @since 3.5.0
         *
         * @param string|array $form The form data.
         * @return float
         */
        protected function get_order_amount_from_form($form)
        {
        }
        /**
         * Gets any additional JS handler params needed for this button.
         *
         * @since 3.5.0
         *
         * @return array
         */
        protected function get_additional_js_handler_params()
        {
        }
        /**
         * Gets additional button markup params.
         *
         * @since 3.5.0
         *
         * @return array
         */
        protected function get_additional_button_params()
        {
        }
        /**
         * Gets the product total.
         *
         * @since 3.5.0
         *
         * @return float
         */
        protected function get_button_total()
        {
        }
        /**
         * Gets the product page product object, or false if not on a product page.
         *
         * @since 3.5.0
         *
         * @return \WC_Product|false
         */
        protected function get_product()
        {
        }
        /**
         * Gets the ID of this script handler.
         *
         * @since 3.5.0
         *
         * @return string
         */
        public function get_id()
        {
        }
    }
}
namespace WC_Braintree {
    /**
     * WooCommerce Gateway Braintree Main Plugin Class.
     *
     * @since 2.0.0
     */
    class WC_Braintree extends \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_Plugin
    {
        /** plugin version number */
        const VERSION = '3.11.2';
        // WRCS: DEFINED_VERSION.
        /** Braintree JS SDK version  */
        const BRAINTREE_JS_SDK_VERSION = '3.129.1';
        /** @var WC_Braintree single instance of this plugin */
        protected static $instance;
        /** plugin id */
        const PLUGIN_ID = 'braintree';
        /** credit card gateway class name */
        const CREDIT_CARD_GATEWAY_CLASS_NAME = 'WC_Braintree\WC_Gateway_Braintree_Credit_Card';
        /** credit card gateway ID */
        const CREDIT_CARD_GATEWAY_ID = 'braintree_credit_card';
        /** PayPal gateway class name */
        const PAYPAL_GATEWAY_CLASS_NAME = 'WC_Braintree\WC_Gateway_Braintree_PayPal';
        /** PayPal gateway ID */
        const PAYPAL_GATEWAY_ID = 'braintree_paypal';
        /** Venmo gateway class name */
        const VENMO_GATEWAY_CLASS_NAME = 'WC_Braintree\WC_Gateway_Braintree_Venmo';
        /** Venmo gateway ID */
        const VENMO_GATEWAY_ID = 'braintree_venmo';
        /** ACH gateway class name */
        const ACH_GATEWAY_CLASS_NAME = 'WC_Braintree\WC_Gateway_Braintree_ACH';
        /** ACH gateway ID */
        const ACH_GATEWAY_ID = 'braintree_ach';
        /** SEPA gateway class name */
        const SEPA_GATEWAY_CLASS_NAME = 'WC_Braintree\WC_Gateway_Braintree_SEPA';
        /** SEPA gateway ID */
        const SEPA_GATEWAY_ID = 'braintree_sepa';
        /** Gateway class name for iDEAL */
        const IDEAL_GATEWAY_CLASS_NAME = 'WC_Braintree\WC_Gateway_Braintree_Ideal';
        /** Gateway ID for iDEAL */
        const IDEAL_GATEWAY_ID = 'braintree_lpm_ideal';
        /** Bancontact gateway class name */
        const BANCONTACT_GATEWAY_CLASS_NAME = 'WC_Braintree\WC_Gateway_Braintree_Bancontact';
        /** Bancontact gateway ID */
        const BANCONTACT_GATEWAY_ID = 'braintree_lpm_bancontact';
        /** MyBank gateway class name */
        const MYBANK_GATEWAY_CLASS_NAME = 'WC_Braintree\WC_Gateway_Braintree_Mybank';
        /** MyBank gateway ID */
        const MYBANK_GATEWAY_ID = 'braintree_lpm_mybank';
        /** EPS gateway class name */
        const EPS_GATEWAY_CLASS_NAME = 'WC_Braintree\WC_Gateway_Braintree_EPS';
        /** EPS gateway ID */
        const EPS_GATEWAY_ID = 'braintree_lpm_eps';
        /** P24 gateway class name */
        const P24_GATEWAY_CLASS_NAME = 'WC_Braintree\WC_Gateway_Braintree_P24';
        /** P24 gateway ID */
        const P24_GATEWAY_ID = 'braintree_lpm_p24';
        /** BLIK gateway class name */
        const BLIK_GATEWAY_CLASS_NAME = 'WC_Braintree\WC_Gateway_Braintree_Blik';
        /** BLIK gateway ID */
        const BLIK_GATEWAY_ID = 'braintree_lpm_blik';
        /**
         * Initializes the plugin
         *
         * @since 2.0
         */
        public function __construct()
        {
        }
        /**
         * Prints an inline clipboard-copy script on classic checkout when at least one
         * Braintree gateway is running in sandbox mode.
         *
         * Binds click handlers to `[data-wc-braintree-copy]` buttons emitted by the
         * Test_Mode_UI_Trait. Feature-detects `navigator.clipboard.writeText`; if the
         * API is unavailable the copy buttons remain `hidden`.
         */
        public function print_test_mode_clipboard_script(): void
        {
        }
        /**
         * Overrides the SkyVerge framework's translation loader for the plugin textdomain.
         *
         * WordPress 6.5 introduced optimized .l10n.php translation files, and WP 6.7
         * loads plugin translations just-in-time from the `Text Domain` / `Domain Path`
         * plugin headers. The framework's legacy routing hard-codes a `.mo` path in
         * `WP_LANG_DIR` and calls `load_plugin_textdomain()` on the `init` hook for
         * the plugin textdomain, bypassing WP's native .l10n.php discovery and preempting
         * JIT loading.
         *
         * We skip the framework call for the plugin's own textdomain (WP Core handles
         * it natively from the plugin header, preferring .l10n.php when available), but
         * we still load the framework textdomain because it has no plugin header for
         * WP's JIT loader to discover.
         *
         * @since 3.11.1
         */
        public function load_translations()
        {
        }
        /**
         * Adds the `WC_Braintree` namespace when the token id from the Braintree gateway and other than Credit Card.
         *
         * @param string $class_name Payment token class.
         * @param string $type       Token type.
         *
         * @return string
         */
        public function filter_payment_token_classname($class_name, $type)
        {
        }
        /**
         * Adds 'brand' data to tokenized PayPal instruments.
         *
         * @param array $token_data Array of token data.
         *
         * @return array
         */
        public function add_brand_information($token_data)
        {
        }
        /**
         * Render the payment method used for a subscription in the "My Subscriptions" table
         *
         * @since 3.0.6
         *
         * @param string           $payment_method_to_display The default payment method text to display.
         * @param \WC_Subscription $subscription              The subscription object.
         * @return string The subscription payment method
         */
        public function maybe_filter_my_subscriptions_payment_method($payment_method_to_display, $subscription)
        {
        }
        /**
         * Include required files
         *
         * @since 2.0
         */
        public function includes()
        {
        }
        /**
         * Filters the checkout sections to hide Apple Pay and Google Pay tabs when viewing non-Credit Card gateway settings.
         *
         * Apple Pay and Google Pay are features of the Credit Card gateway only, so their settings tabs
         * should only be visible when viewing the Credit Card gateway settings.
         *
         * @since 3.6.0
         *
         * @param array $sections The checkout sections.
         * @return array Filtered checkout sections.
         */
        public function filter_checkout_sections($sections)
        {
        }
        /**
         * Gets the deprecated hooks and their replacements, if any.
         *
         * @since 2.0.0
         * @return array
         */
        protected function get_deprecated_hooks()
        {
        }
        /**
         * Initializes the plugin lifecycle handler.
         *
         * @since 2.2.0
         */
        public function init_lifecycle_handler()
        {
        }
        /**
         * Handles the Braintree Auth connection response.
         *
         * @since 2.0.0
         */
        public function handle_auth_connect()
        {
        }
        /**
         * Handles a Braintree Auth disconnect request.
         *
         * @since 2.0.0
         */
        public function handle_auth_disconnect()
        {
        }
        /**
         * Initializes the PayPal cart handler.
         *
         * @since 2.0.0
         * @deprecated since 2.3.0
         */
        public function maybe_init_paypal_cart()
        {
        }
        /**
         * Gets the PayPal cart handler instance.
         *
         * @since 2.0.0
         * @deprecated since 2.3.0
         */
        public function get_paypal_cart_instance()
        {
        }
        /** Apple Pay Methods *********************************************************************************************/
        /**
         * Initializes the Apple Pay feature.
         *
         * The framework requires this be enabled by filter due to the complicated setup that's usually required. Braintree
         * makes the process a bit easier, so let's enable it by default.
         *
         * @since 2.2.0
         */
        public function maybe_init_apple_pay()
        {
        }
        /**
         * Builds the Apple Pay handler instance.
         *
         * @since 2.2.0
         *
         * @return \WC_Braintree\Apple_Pay
         */
        protected function build_apple_pay_instance()
        {
        }
        /** Google Pay Methods *********************************************************************************************/
        /**
         * Initializes the Google Pay feature.
         *
         * @since 3.4.0
         */
        public function maybe_init_google_pay()
        {
        }
        /**
         * Builds the Google Pay handler instance.
         *
         * @since 3.4.0
         *
         * @return \WC_Braintree\Google_Pay\Google_Pay
         */
        protected function build_google_pay_instance()
        {
        }
        /** Admin methods ******************************************************/
        /**
         * Render a notice for the user to select their desired export format
         *
         * @since 2.1.3
         * @see SV_WC_Plugin::add_admin_notices()
         */
        public function add_admin_notices()
        {
        }
        /**
         * Determines whether OAuth credentials are missing for a store that was previously connected via OAuth.
         *
         * Relies on the persistent `wc_braintree_was_oauth_connected` marker (set on Auth connect
         * or via the Lifecycle upgrade backfill; cleared on deliberate disconnect or when switching
         * to a manual API key connection) so "credentials unexpectedly lost" can be distinguished
         * from fresh installs, mid-setup, deliberate disconnects, and intentional migration to
         * manual credentials.
         *
         * @since 3.11.1
         *
         * @return bool
         */
        public function are_oauth_credentials_missing(): bool
        {
        }
        /**
         * Adds an admin notice when OAuth credentials are missing.
         *
         * @since 3.11.1
         *
         * @return void
         */
        private function maybe_add_missing_oauth_credentials_notice(): void
        {
        }
        /**
         * Determines whether the plugin has conflicting connection settings.
         *
         * This occurs when an OAuth access token exists but connect_manually is enabled in gateway
         * settings without a usable set of API credentials, so neither connection method can process
         * payments. Often the result of syncing a database from staging.
         *
         * A manual connection backed by complete API credentials is a supported setup — merchants who
         * migrate from OAuth to API keys keep the now-unused token in the options table — so it is not
         * reported as a conflict.
         *
         * @since 3.11.1
         *
         * @return bool
         */
        public function has_conflicting_connection_settings()
        {
        }
        /**
         * Adds a notice for each enabled LPM gateway that has no Merchant Account ID for any of its supported currencies.
         *
         * @since 3.9.0
         * @return void
         */
        private function maybe_add_lpm_merchant_account_notice()
        {
        }
        /**
         * Checks whether an LPM gateway has a Merchant Account ID for at least one of its supported currencies.
         *
         * Checks both gateway-specific MAID settings and the default MAID from the
         * remote configuration.
         *
         * @since 3.9.0
         *
         * @param WC_Gateway_Braintree_Local_Payment $gateway The LPM gateway to check.
         * @return bool
         */
        private function lpm_gateway_has_merchant_account(\WC_Braintree\WC_Gateway_Braintree_Local_Payment $gateway)
        {
        }
        /**
         * Adds a notice if the merchant account is not available for the payment gateway of the current page.
         *
         * @since 3.7.0
         * @return void
         */
        private function maybe_add_merchant_account_availability_notice()
        {
        }
        /**
         * Adds delayed admin notices for invalid Dynamic Descriptor Name values.
         *
         * @since 2.1.0
         */
        public function add_delayed_admin_notices()
        {
        }
        /** Helper methods ******************************************************/
        /**
         * Main Braintree Instance, ensures only one instance is/can be loaded
         *
         * @since 2.2.0
         * @see wc_braintree()
         * @return WC_Braintree
         */
        public static function instance()
        {
        }
        /**
         * Overrides the default SV framework implementation of payment methods in My Account.
         *
         * @since 2.6.2
         * @return \WC_Braintree_My_Payment_Methods
         */
        public function get_my_payment_methods_instance()
        {
        }
        /**
         * Returns the plugin name, localized
         *
         * @since 2.1
         * @see SV_WC_Plugin::get_plugin_name()
         * @return string the plugin name
         */
        public function get_plugin_name()
        {
        }
        /**
         * Returns __FILE__
         *
         * @since 2.1
         * @see SV_WC_Plugin::get_file()
         * @return string the full path and filename of the plugin file
         */
        protected function get_file()
        {
        }
        /**
         * Gets the plugin documentation url
         *
         * @since 2.1
         * @see SV_WC_Plugin::get_documentation_url()
         * @return string documentation URL
         */
        public function get_documentation_url()
        {
        }
        /**
         * Gets the plugin support URL
         *
         * @since 2.3.0
         * @see SV_WC_Plugin::get_support_url()
         * @return string
         */
        public function get_support_url()
        {
        }
        /**
         * Gets the URL for opening a WooCommerce.com support.
         *
         * @since 3.11.1
         *
         * @return string
         */
        public function get_woocommerce_support_url()
        {
        }
        /**
         * Returns the plugin action links.
         *
         * Overrides the parent method to filter out empty action links.
         *
         * @since 3.6.0
         * @see SV_WC_Payment_Gateway_Plugin::plugin_action_links()
         * @param string[] $actions associative array of action names to anchor tags.
         * @return string[] plugin action links
         */
        public function plugin_action_links($actions)
        {
        }
        /**
         * Returns the "Configure Credit Card" or "Configure PayPal" plugin action
         * links that go directly to the gateway settings page
         *
         * @since 3.0.0
         * @see SV_WC_Payment_Gateway_Plugin::get_settings_url()
         * @param string $gateway_id the gateway identifier
         * @return string plugin configure link
         */
        public function get_settings_link($gateway_id = null)
        {
        }
        /**
         * Determines if WooCommerce is active.
         *
         * @since 2.0.0
         * @return bool
         */
        public static function is_woocommerce_active()
        {
        }
        /**
         * Determines if website is staging site.
         *
         * This functions use WooCommerce Subscriptions 'WCS_Staging' Class to determine staging site.
         * So, if WooCommerce Subscriptions plugin is not activated, this will always return false.
         *
         * @return bool
         */
        public static function is_staging_site()
        {
        }
        /**
         * Determines if we're on a page with WooCommerce Blocks.
         *
         * @since 3.5.0
         *
         * @return bool
         */
        public static function is_blocks_page()
        {
        }
        /**
         * Gets the store name for Braintree.
         *
         * @since 3.7.0
         *
         * @return string The store name.
         */
        public static function get_braintree_store_name()
        {
        }
        /**
         * Overrides the SkyVerge default logging method.
         *
         * @deprecated since 3.5.0. Use the Logger class helpers instead (ex: Logger::notice()).
         *
         * @param string $message error or message to save to log.
         * @param string $log_id optional log id to segment the files by, defaults to plugin id.
         */
        public function log($message, $log_id = null)
        {
        }
        /**
         * Registers, enqueues, and adds an inline script (replaces repeated wp_register_script + wp_enqueue_script + wp_add_inline_script).
         *
         * @since 3.10.0
         * @param string      $script_handle  Script handle.
         * @param string      $javascript     Inline JavaScript code.
         * @param array       $dependencies   Optional. Script dependencies. Default [ 'jquery' ].
         * @param string|null $version        Optional. Script version. Default WC_Braintree::VERSION.
         * @param bool        $in_footer      Optional. Whether to enqueue in footer. Default true.
         */
        public static function enqueue_inline_script(string $script_handle, string $javascript, array $dependencies = ['jquery'], ?string $version = null, bool $in_footer = true): void
        {
        }
    }
    /**
     * Braintree payment method handler.
     *
     * Extends the framework payment tokens handler class to provide Braintree-specific functionality.
     *
     * @since 3.2.0
     */
    class WC_Braintree_Payment_Method_Handler extends \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_Payment_Tokens_Handler
    {
        /**
         * Gets a payment token instance.
         *
         * @see Framework\SV_WC_Payment_Gateway_Payment_Tokens_Handler::build_token()
         *
         * @since 3.0.0
         *
         * @param string                  $token Token ID.
         * @param array|\WC_Payment_Token $data  Token data or object.
         * @return \WC_Braintree\WC_Braintree_Payment_Method
         */
        public function build_token($token, $data)
        {
        }
        /**
         * Update payment tokens.
         *
         * When retrieving payment methods via the Braintree API, it returns both credit/debit card *and* PayPal methods from a single call.
         * Overriding the core framework update method ensures that PayPal/Venmo accounts are not saved to the credit card token meta entry, and vice versa.
         *
         * @since 3.0.0
         *
         * @param int    $user_id WP user ID.
         * @param array  $tokens array of tokens.
         * @param string $environment_id optional environment id, defaults to plugin current environment.
         * @return string updated user meta id
         */
        public function update_tokens($user_id, $tokens, $environment_id = null)
        {
        }
        /**
         * Checks if the gateway is a Venmo gateway.
         *
         * @since 3.6.0
         *
         * @return bool
         */
        protected function is_venmo_gateway()
        {
        }
        /**
         * Checks if the gateway is an ACH gateway.
         *
         * @since 3.7.0
         *
         * @return bool
         */
        protected function is_ach_gateway()
        {
        }
        /**
         * Gets the order note message when a customer saves their payment method to their account.
         *
         * @since 2.0.1
         *
         * @param \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_Payment_Token $token the payment token being saved.
         * @return string
         */
        protected function get_order_note($token)
        {
        }
        /**
         * Deletes remote token data and legacy token data when the corresponding core token is deleted.
         *
         * This function skip delete the remote token if website is staging.
         *
         * @see https://github.com/woocommerce/woocommerce-gateway-paypal-powered-by-braintree/issues/388
         * @param int               $token_id   the ID of a core token.
         * @param \WC_Payment_Token $core_token the core token object.
         */
        public function payment_token_deleted($token_id, $core_token)
        {
        }
        /**
         * Returns the Apple Pay card tokens for the current user.
         *
         * @since 3.2.0
         *
         * @return array
         */
        public function get_apple_pay_card_tokens()
        {
        }
        /**
         * Returns the Google Pay card tokens for the current user.
         *
         * @since 3.4.0
         *
         * @return array
         */
        public function get_google_pay_card_tokens()
        {
        }
    }
    /**
     * Custom payment method handler for ACH payments.
     *
     * @since 3.8.0
     */
    class WC_Braintree_ACH_Payment_Method_Handler extends \WC_Braintree\WC_Braintree_Payment_Method_Handler
    {
        /**
         * Known Braintree token values for digit-only token IDs.
         *
         * @since 3.8.0
         * @var array<string, array<int, array<string, string|null>>>
         */
        protected array $known_int_tokens = [];
        /**
         * Overridden to support block checkout, where the token ID may be supplied instead of the token value.
         *
         * @since 3.8.0
         * @param int                                                  $user_id        WordPress user identifier, or 0 for guest.
         * @param string|\SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_Payment_Token $token          The token, the token value, or the token ID.
         * @param string|null                                          $environment_id optional environment id, defaults to plugin current environment.
         * @return bool
         */
        public function user_has_token($user_id, $token, $environment_id = null)
        {
        }
        /**
         * Override to support block checkout, where the token ID may be supplied instead of the token value.
         *
         * @since 3.8.0
         * @param int         $user_id        WordPress user ID.
         * @param string      $token          Token ID or value.
         * @param string|null $environment_id Optional environment ID.
         * @return \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_Payment_Token|null Token instance, or null if not found.
         */
        public function get_token($user_id, $token, $environment_id = null)
        {
        }
        /**
         * Helper method to get the Braintree token value for an incoming token supplied as a digit-only ID.
         * The code also remembers what happens for lookups in {@see known_int_tokens}.
         *
         * @param int                                                  $user_id        WordPress user ID.
         * @param string|\SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_Payment_Token $token          Token ID or value.
         * @param string|null                                          $environment_id Optional environment ID.
         * @return string|null Braintree token, or null if not found.
         */
        protected function get_braintree_token_from_int_token_for_user_id($user_id, $token, $environment_id = null): ?string
        {
        }
    }
    /**
     * WooCommerce Gateway Braintree Feature Flags Class.
     *
     * @since 3.3.0
     */
    class WC_Braintree_Feature_Flags
    {
        /**
         * The name of the option that stores the early access feature settings.
         *
         * @var string
         */
        public const EARLY_ACCESS_OPTION_NAME = 'wc_braintree_early_access_enabled';
        /**
         * The name of the option that stores the feature flags.
         *
         * @var string
         */
        public const FEATURE_FLAGS_OPTION_NAME = 'wc_braintree_feature_flags';
        /**
         * The name of the feature flag for SEPA.
         *
         * @var string
         */
        private const FEATURE_SEPA = 'sepa';
        /**
         * Default values for feature flags.
         *
         * @var array<string, string> Feature flags
         */
        private array $feature_flags = [self::FEATURE_SEPA => 'no'];
        /**
         * Single instance of the Feature Flags Handler.
         *
         * @var WC_Braintree_Feature_Flags|null single instance of the Feature Flags Handler.
         */
        private static ?\WC_Braintree\WC_Braintree_Feature_Flags $instance = null;
        /**
         * Feature Flags Handler Instance, ensures only one instance is/can be loaded.
         *
         * @since 3.3.0
         *
         * @return WC_Braintree_Feature_Flags
         */
        public static function instance(): \WC_Braintree\WC_Braintree_Feature_Flags
        {
        }
        /**
         * Constructor.
         */
        private function __construct()
        {
        }
        /**
         * Check if early access features are enabled
         *
         * @return bool True if the early access feature option is enabled, false otherwise.
         */
        private function is_early_access_enabled(): bool
        {
        }
        /**
         * Check if a feature flag is enabled.
         *
         * @param string $feature_flag_name The feature flag to check.
         * @return bool True if the feature flag is enabled, false otherwise.
         */
        private function is_feature_flag_enabled(string $feature_flag_name): bool
        {
        }
        /**
         * Set a feature flag status to enabled (yes) or disabled (no).
         *
         * @param string $feature_flag_name The feature flag to set.
         * @param bool   $enabled True if the feature flag should be enabled, false otherwise.
         */
        private function toggle_feature_flag_enabled(string $feature_flag_name, bool $enabled): void
        {
        }
        /** Specific Feature Flags Methods ***************************************************************************************/
        /**
         * Check if Venmo feature is enabled.
         *
         * @since 3.5.0
         * @deprecated 3.7.0 Venmo is now generally available.
         *
         * @return bool Always returns true since Venmo is generally available.
         */
        public static function is_venmo_enabled(): bool
        {
        }
        /**
         * Check if ACH feature is enabled.
         *
         * @since 3.7.0
         * @deprecated 3.8.0 ACH is now generally available.
         *
         * @return true Always returns true since ACH is generally available.
         */
        public static function is_ach_enabled(): bool
        {
        }
        /**
         * Check if SEPA feature is enabled.
         *
         * @since 3.5.0
         *
         * @return bool True if SEPA is enabled, false otherwise.
         */
        public static function is_sepa_enabled(): bool
        {
        }
        /**
         * Check if Fastlane feature is enabled.
         *
         * @since 3.7.0
         * @deprecated 3.8.0 Fastlane is now generally available.
         *
         * @return true Always returns true since Fastlane is generally available.
         */
        public static function is_fastlane_enabled(): bool
        {
        }
        /**
         * Check if Local Payments are enabled.
         *
         * @since 3.7.0
         * @deprecated 3.9.0 Local Payments are now generally available.
         *
         * @return true Always returns true since Local Payments are generally available.
         */
        public static function are_local_payments_enabled(): bool
        {
        }
    }
    /**
     * Wrapper for the lower-level Braintree Merchant Account object to add convenience methods.
     */
    class WC_Braintree_Merchant_Account
    {
        protected const ACH_PAYMENT_METHOD = 'US_BANK_ACCOUNT';
        protected const LOCAL_PAYMENTS_METHOD = 'LOCAL_PAYMENT';
        protected const PAYPAL_PAYMENT_METHOD = 'PAYPAL_ACCOUNT';
        protected const SEPA_PAYMENT_METHOD = 'SEPA_DEBIT_ACCOUNT';
        protected const VENMO_PAYMENT_METHOD = 'VENMO_ACCOUNT';
        protected const APPLE_PAY_PREFIX = 'APPLE_PAY_';
        protected const GOOGLE_PAY_PREFIX = 'GOOGLE_PAY_';
        /**
         * The merchant account object.
         *
         * @var \Braintree\MerchantAccount
         */
        protected \Braintree\MerchantAccount $merchant_account;
        /**
         * Whether the Fastlane feature is enabled for this merchant account.
         * This has a separate property because it's not available in the merchant account object,
         * and we need to fetch it separately.
         *
         * @var bool|null
         */
        protected ?bool $is_fastlane_enabled = null;
        /**
         * Constructor.
         *
         * @param \Braintree\MerchantAccount $merchant_account The merchant account object.
         * @return void
         */
        public function __construct(\Braintree\MerchantAccount $merchant_account)
        {
        }
        /**
         * Get the merchant account ID.
         *
         * @return string The merchant account ID.
         */
        public function get_id(): string
        {
        }
        /**
         * Get the currency of the merchant account.
         *
         * @return string The currency of the merchant account.
         */
        public function get_currency(): string
        {
        }
        /**
         * Get the status of the merchant account.
         *
         * @return string The status of the merchant account.
         */
        public function get_status(): string
        {
        }
        /**
         * Check if the merchant account is active.
         *
         * @return bool Whether the merchant account is active.
         */
        public function is_active(): bool
        {
        }
        /**
         * Check if this merchant account is the default merchant account for the gateway.
         *
         * @return bool Whether this merchant account is the default merchant account for the gateway.
         */
        public function is_default_merchant_account(): bool
        {
        }
        /**
         * Get the accepted payment methods for the merchant account.
         *
         * @return string[]
         */
        public function get_accepted_payment_methods(): array
        {
        }
        /**
         * Check if a specific payment gateway is supported by this merchant account.
         *
         * @param string $payment_gateway_id The ID of the payment gateway to check.
         * @return bool Whether the payment gateway is supported by this merchant account.
         */
        public function is_payment_gateway_supported(string $payment_gateway_id): bool
        {
        }
        /**
         * Check if ACH is enabled for this merchant account.
         *
         * @return bool Whether ACH is enabled for this merchant account.
         */
        public function is_ach_enabled(): bool
        {
        }
        /**
         * Check if Apple Pay is enabled for this merchant account.
         *
         * @return bool Whether Apple Pay is enabled for this merchant account.
         */
        public function is_apple_pay_enabled(): bool
        {
        }
        /**
         * Check if Google Pay is enabled for this merchant account.
         *
         * @return bool Whether Google Pay is enabled for this merchant account.
         */
        public function is_google_pay_enabled(): bool
        {
        }
        /**
         * Check if PayPal is enabled for this merchant account.
         *
         * @return bool Whether PayPal is enabled for this merchant account.
         */
        public function is_paypal_enabled(): bool
        {
        }
        /**
         * Check if SEPA is enabled for this merchant account.
         *
         * @return bool Whether SEPA is enabled for this merchant account.
         */
        public function is_sepa_enabled(): bool
        {
        }
        /**
         * Check if Venmo is enabled for this merchant account.
         *
         * @return bool Whether Venmo is enabled for this merchant account.
         */
        public function is_venmo_enabled(): bool
        {
        }
        /**
         * Check if Braintree's Local Payments feature is enabled for this merchant account.
         *
         * @return bool Whether the Local Payments feature is enabled for this merchant account.
         */
        public function are_local_payments_enabled(): bool
        {
        }
        /**
         * Get the Fastlane enabled flag for this merchant account.
         *
         * @return bool|null The Fastlane enabled flag, where null represents unknown status.
         */
        public function is_fastlane_enabled(): ?bool
        {
        }
        /**
         * Set the Fastlane enabled flag for this merchant account.
         *
         * @param bool|null $is_fastlane_enabled The new value for the flag, where null represents unknown status.
         * @return void
         */
        public function set_is_fastlane_enabled(?bool $is_fastlane_enabled): void
        {
        }
        /**
         * Helper method to check if a specific payment method is enabled.
         *
         * @param string $payment_method The payment method to look for.
         * @return bool Whether the payment method is enabled.
         */
        protected function is_payment_method_enabled(string $payment_method): bool
        {
        }
        /**
         * Helper method to check if any payment methods should be shown as enabled
         * when the accepted payment methods include entries with a specific prefix.
         *
         * @param string $prefix The prefix to check for in the accepted payment methods.
         * @return bool Whether any accepted payment methods have the specified prefix.
         */
        protected function is_payment_method_enabled_by_prefix(string $prefix): bool
        {
        }
    }
    /**
     * My Payment Methods Class
     *
     * Renders the My Payment Methods table on the My Account page and handles
     * any associated actions (deleting a payment method, etc).
     * Overrides the default implementation in the SkyVerge framework.
     *
     * @since 2.6.2
     */
    class WC_Braintree_My_Payment_Methods extends \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_My_Payment_Methods
    {
        /**
         * Returns the JS handler class name. Overrides the one in the SV framework.
         *
         * @since 2.6.2
         * @return string
         */
        protected function get_js_handler_class_name()
        {
        }
        /**
         * Enqueue frontend CSS/JS.
         *
         * @since 2.6.2
         */
        public function maybe_enqueue_styles_scripts()
        {
        }
        /**
         * Initializes the My Payment Methods table.
         *
         * @since 2.6.2
         */
        public function init()
        {
        }
        /**
         * Adds the Expires column content.
         *
         * @since 2.6.2
         * @param array $method Payment method.
         */
        public function add_payment_method_expires($method)
        {
        }
        /**
         * Returns a token's expiration date HTML.
         * Escapes the HTML before returning it.
         *
         * @since 2.6.2
         * @internal
         * @param \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_Payment_Token $token Token object.
         * @return string
         */
        protected function get_payment_method_expires_html($token)
        {
        }
        /**
         * Saves a payment method via AJAX.
         *
         * @since 5.1.0
         * @internal
         */
        public function ajax_save_payment_method()
        {
        }
        /**
         * Saves data to a token.
         * Overrides the method in the parent class to add support for editing expiration dates.
         *
         * @since 2.6.2
         * @param \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_Payment_Token $token Token object.
         * @param array                                         $data New data to store for the token.
         * @return \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_Payment_Token
         */
        protected function save_token_data(\SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_Payment_Token $token, array $data)
        {
        }
        /**
         * Validates and splits an expiration date in format MM/YY into month and year parts.
         *
         * @param string $expiration_date The expiration date in MM/YY format.
         * @return array|null NULL if expiration date is invalid. Otherwise, array with keys 'month' and 'year'.
         */
        protected function prepare_expiration_date($expiration_date)
        {
        }
    }
    /**
     * Braintree Payment Method Class.
     *
     * Extends the framework Payment Token class to provide Braintree-specific functionality like billing addresses and PayPal support.
     *
     * @since 3.0.0
     */
    class WC_Braintree_Payment_Method extends \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_Payment_Token
    {
        /** Credit card payment method type */
        const CREDIT_CARD_TYPE = 'credit_card';
        /** Paypal payment method type */
        const PAYPAL_TYPE = 'paypal';
        /** ACH Direct Debit payment method type */
        const ACH_TYPE = 'ach';
        /** Venmo payment method type */
        const VENMO_TYPE = 'venmo';
        /**
         * Gets the billing address ID associated with the credit card.
         *
         * @since 3.0.0
         * @return string|null
         */
        public function get_billing_address_id()
        {
        }
        /**
         * Determines if the payment method is for a PayPal account.
         *
         * @since 3.0.0
         *
         * @return bool
         */
        public function is_paypal_account()
        {
        }
        /**
         * Determines if the payment method is for a Venmo account.
         *
         * @since 3.6.0
         *
         * @return bool
         */
        public function is_venmo_account()
        {
        }
        /**
         * Determines if the payment method is for an ACH Direct Debit account.
         *
         * @since 3.7.0
         *
         * @return bool
         */
        public function is_ach_account()
        {
        }
        /**
         * Overrides the standard type full method to change the type text to the email address associated with the PayPal account,
         * the username associated with the Venmo account, or "ACH Direct Debit" for ACH accounts.
         *
         * @since 3.0.0
         *
         * @return string|void
         */
        public function get_type_full()
        {
        }
        /**
         * Gets the email associated with the PayPal account
         *
         * @since 3.0.0
         *
         * @return string|null
         */
        public function get_payer_email()
        {
        }
        /**
         * Gets the payer ID associated with the PayPal account
         *
         * @since 3.0.0
         *
         * @return string|null
         */
        public function get_payer_id()
        {
        }
        /**
         * Gets the username associated with the Venmo account.
         *
         * @since 3.6.0
         *
         * @return string|null
         */
        public function get_venmo_username()
        {
        }
        /**
         * Gets the user ID associated with the Venmo account.
         *
         * @since 3.6.0
         *
         * @return string|null
         */
        public function get_venmo_user_id()
        {
        }
        /**
         * Gets the display name (nickname) for the payment method.
         *
         * For ACH tokens, delegates to the WooCommerce core token's get_nickname() method
         * which returns a formatted string with bank name and last four digits.
         *
         * @since 3.7.0
         *
         * @return string
         */
        public function get_nickname()
        {
        }
        /**
         * Gets the last four digits of the payment method.
         *
         * For ACH accounts, returns empty since the last four is already displayed
         * in the nickname/title column along with the bank name.
         *
         * @since 3.7.0
         *
         * @return string
         */
        public function get_last_four()
        {
        }
        /**
         * Gets the framework token type based on the type of the associated WooCommerce core token.
         *
         * @since 2.5.0
         *
         * @param \WC_Payment_Token $token WooCommerce core token.
         *
         * @return string
         */
        protected function get_type_from_woocommerce_payment_token(\WC_Payment_Token $token)
        {
        }
        /**
         * Creates the WooCommerce core payment token object that store the data of this framework token.
         *
         * @since 2.5.0
         *
         * @return \WC_Payment_Token
         */
        protected function make_new_woocommerce_payment_token()
        {
        }
    }
    /**
     * The remote configuration for a Braintree payment gateway.
     */
    class WC_Braintree_Remote_Configuration
    {
        /**
         * The supported Braintree payment gateway IDs.
         *
         * @var string[]
         */
        public const SUPPORTED_GATEWAYS = [\WC_Braintree\WC_Braintree::PAYPAL_GATEWAY_ID, \WC_Braintree\WC_Braintree::CREDIT_CARD_GATEWAY_ID];
        /**
         * The version of the Braintree API to specify in API requests.
         *
         * @var string
         */
        protected const BRAINTREE_API_VERSION = '2019-01-01';
        /**
         * Cached remote configurations. Keys are merchant account IDs.
         *
         * @var array<string, WC_Braintree_Remote_Configuration>
         */
        protected static array $configurations = [];
        /**
         * The mapping of gateway IDs to merchant account IDs. Keys are the gateway IDs and values are the merchant account IDs.
         *
         * @var array<string, string>
         */
        protected static array $gateway_map = [];
        /**
         * Cached remote configurations by gateway ID. Values may be null.
         *
         * @var array<string, WC_Braintree_Remote_Configuration|null>
         */
        protected static array $gateway_configurations = [];
        /**
         * The merchant ID for the current gateway and remote configuration.
         *
         * @var string|null
         */
        public ?string $merchant_id = null;
        /**
         * The merchant accounts for the current gateway.
         *
         * @var \WC_Braintree\WC_Braintree_Merchant_Account[]
         */
        protected array $merchant_accounts = [];
        /**
         * The error message from the last attempt to fetch merchant accounts.
         * Null if there was no error, or the error message if there was an error.
         *
         * @var string|null
         */
        protected ?string $merchant_accounts_fetch_error = null;
        /**
         * The Braintree Gateway instance. It may be null if we don't have credentials.
         *
         * @var \Braintree\Gateway|null
         */
        protected ?\Braintree\Gateway $braintree_gateway = null;
        /**
         * Constructor.
         *
         * @param string $gateway_id    The ID of the Braintree payment gateway to get the configuration for.
         * @param bool   $force_refresh Whether to force a refresh of the configuration.
         * @return void
         * @throws \Exception If the gateway ID is invalid.
         */
        public function __construct(string $gateway_id, bool $force_refresh = false)
        {
        }
        /**
         * Get the merchant accounts for the current gateway.
         *
         * @return \WC_Braintree\WC_Braintree_Merchant_Account[]
         */
        public function get_merchant_accounts(): array
        {
        }
        /**
         * Get the error message from the last attempt to fetch merchant accounts.
         *
         * @return string|null The error message if there was an error, null otherwise.
         */
        public function get_merchant_accounts_fetch_error(): ?string
        {
        }
        /**
         * Get the merchant accounts that support a specified currency.
         *
         * @param string $currency The currency that must be supported.
         * @return \WC_Braintree\WC_Braintree_Merchant_Account[] The merchant accounts that support the specified currency.
         */
        public function get_merchant_accounts_by_currency(string $currency): array
        {
        }
        /**
         * Get the merchant accounts that support a specified payment gateway.
         *
         * @param string $payment_gateway_id The ID of the payment gateway to check.
         * @return \WC_Braintree\WC_Braintree_Merchant_Account[] The merchant accounts that support the specified payment gateway.
         */
        public function get_merchant_accounts_by_payment_gateway(string $payment_gateway_id): array
        {
        }
        /**
         * Find the merchant accounts that support a specified currency and payment gateway.
         *
         * @param string $currency The currency that must be supported.
         * @param string $payment_gateway_id The ID of the payment gateway to check.
         * @return \WC_Braintree\WC_Braintree_Merchant_Account[] The merchant accounts that support the specified currency and payment gateway.
         */
        public function find_eligible_merchant_accounts_by_currency_and_payment_gateway(string $currency, string $payment_gateway_id): array
        {
        }
        /**
         * Get the merchant account for the given merchant account ID.
         * If no merchant account ID is provided, the default merchant account will be used.
         *
         * @param string|null $merchant_account_id The ID of the merchant account to get. If not provided, the default merchant account will be used.
         * @return \WC_Braintree\WC_Braintree_Merchant_Account|null The merchant account if found, null otherwise.
         */
        public function get_merchant_account(?string $merchant_account_id = null): ?\WC_Braintree\WC_Braintree_Merchant_Account
        {
        }
        /**
         * Get the remote configuration for the given Braintree payment gateway.
         *
         * @param string $gateway_id    The ID of the gateway to get the configuration for.
         * @param bool   $force_refresh Whether to force a refresh of the configuration.
         * @return \WC_Braintree\WC_Braintree_Remote_Configuration The remote configuration.
         * @throws \Exception If the gateway ID is invalid.
         */
        public static function get_remote_configuration(string $gateway_id, bool $force_refresh = false): self
        {
        }
        /**
         * Get the payment gateway instance from the WooCommerce payment gateway data.
         *
         * @param string $gateway_id The gateway ID.
         * @return WC_Gateway_Braintree|null The gateway instance or null.
         * @throws \Exception If the gateway ID is invalid.
         */
        protected function get_payment_gateway_instance(string $gateway_id): ?\WC_Braintree\WC_Gateway_Braintree
        {
        }
        /**
         * Fetch the configuration for the given Braintree payment gateway.
         *
         * @param string $gateway_id    The ID of the gateway to fetch the configuration for.
         * @param bool   $force_refresh Whether to force a refresh of the configuration.
         * @return void
         */
        public function fetch_configuration(string $gateway_id, bool $force_refresh = false): void
        {
        }
        /**
         * Create a Braintree Gateway instance.
         *
         * @param array $configuration The gateway configuration.
         * @return \Braintree\Gateway The gateway instance.
         */
        protected function create_braintree_gateway(array $configuration): \Braintree\Gateway
        {
        }
        /**
         * Fetch the merchant accounts using the supplied Braintree Gateway instance.
         *
         * @param \Braintree\Gateway $braintree_gateway The Braintree Gateway instance to use.
         * @return \WC_Braintree\WC_Braintree_Merchant_Account[] The merchant accounts.
         */
        protected function fetch_merchant_accounts(\Braintree\Gateway $braintree_gateway): array
        {
        }
        /**
         * Validate the gateway ID to ensure it is supported.
         *
         * @param string $gateway_id The gateway ID to validate.
         * @return void
         * @throws \Exception If the gateway ID is invalid.
         */
        protected static function validate_gateway_id(string $gateway_id): void
        {
        }
        /**
         * Fetch the Fastlane status for a merchant account.
         * Updates the is_fastlane_enabled property of the merchant account if the fetch is successful.
         *
         * @param \WC_Braintree\WC_Braintree_Merchant_Account $merchant_account The merchant account to fetch the Fastlane status for.
         * @return bool|null The Fastlane status if the fetch is successful, null otherwise.
         */
        public function fetch_fastlane_enabled_for_merchant_account(\WC_Braintree\WC_Braintree_Merchant_Account $merchant_account): ?bool
        {
        }
        /**
         * Get the default merchant account for the current gateway.
         *
         * @return \WC_Braintree\WC_Braintree_Merchant_Account|null The default merchant account if found, null otherwise.
         */
        public function get_default_merchant_account(): ?\WC_Braintree\WC_Braintree_Merchant_Account
        {
        }
    }
    /**
     * Braintree Webhook Handler.
     *
     * Handles incoming webhooks from Braintree.
     *
     * If a webhook takes longer than 30 seconds to respond, it is considered a timeout and will be retried.
     * Braintree will resend webhook notifications every hour for up to 3 hours in sandbox, or up to 24 hours in production,
     * until the webhook responds with a successful HTTPS response code (i.e. '2xx') within 30 seconds.
     *
     * @see https://developer.paypal.com/braintree/docs/guides/webhooks/parse/php/
     *
     * @since 3.3.0
     */
    class WC_Braintree_Webhook_Handler
    {
        /**
         * Single instance of the Webhook Handler.
         *
         * @var WC_Braintree_Webhook_Handler single instance of the Webhook Handler.
         */
        protected static $instance;
        /**
         * Gateway class instance.
         *
         * @var WC_Gateway_Braintree_Credit_Card
         */
        protected \WC_Braintree\WC_Gateway_Braintree_Credit_Card $gateway;
        /**
         * Webhook Handler Instance, ensures only one instance is/can be loaded.
         *
         * @since 3.3.0
         *
         * @return WC_Braintree_Webhook_Handler
         */
        public static function instance(): \WC_Braintree\WC_Braintree_Webhook_Handler
        {
        }
        /**
         * Constructor.
         *
         * @since 3.3.0
         */
        private function __construct()
        {
        }
        /**
         * Handle incoming webhook requests.
         *
         * @since 3.3.0
         */
        public function handle_webhook(): void
        {
        }
        /**
         * Process the webhook data.
         *
         * @since 3.3.0
         *
         * @param object $event_data Webhook event data.
         */
        protected function process_webhook(object $event_data): void
        {
        }
        /**
         * Handle transaction settled webhook.
         *
         * This webhook is triggered when a transaction has been settled (funds successfully transferred).
         * This is particularly important for ACH/SEPA transactions which take several days to settle.
         *
         * @since 3.7.0
         *
         * @param object $event_data Webhook event data.
         */
        protected function handle_transaction_settled(object $event_data): void
        {
        }
        /**
         * Handle transaction settlement declined webhook.
         *
         * This webhook is triggered when a transaction settlement is declined by the bank.
         * Common reasons include insufficient funds, account closed, or invalid account information.
         *
         * @since 3.7.0
         *
         * @param object $event_data Webhook event data.
         */
        protected function handle_transaction_settlement_declined(object $event_data): void
        {
        }
    }
    /**
     * Braintree Base Gateway Class
     *
     * Handles common functionality among the Credit Card/PayPal gateways
     *
     * @since 2.0.0
     */
    class WC_Gateway_Braintree extends \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_Direct
    {
        /** Sandbox environment ID */
        const ENVIRONMENT_SANDBOX = 'sandbox';
        /**
         * The Braintree Auth access token.
         *
         * @var string
         */
        protected $auth_access_token;
        /**
         * Whether the gateway is connected manually.
         *
         * @var bool
         */
        protected $connect_manually;
        /**
         * Production merchant ID.
         *
         * @var string
         */
        protected $merchant_id;
        /**
         * Production public key.
         *
         * @var string
         */
        protected $public_key;
        /**
         * Production private key.
         *
         * @var string
         */
        protected $private_key;
        /**
         * Sandbox merchant ID.
         *
         * @var string
         */
        protected $sandbox_merchant_id;
        /**
         * Sandbox public key.
         *
         * @var string
         */
        protected $sandbox_public_key;
        /**
         * Sandbox private key.
         *
         * @var string
         */
        protected $sandbox_private_key;
        /**
         * Name dynamic descriptor.
         *
         * @var string
         */
        protected $name_dynamic_descriptor;
        /**
         * Phone dynamic descriptor.
         *
         * @var string
         */
        protected $phone_dynamic_descriptor;
        /**
         * Url dynamic descriptor.
         *
         * @var string
         */
        protected $url_dynamic_descriptor;
        /**
         * WC_Braintree_API instance.
         *
         * @var \WC_Braintree_API
         */
        protected $api;
        /**
         * Braintree\Gateway instance.
         *
         * @var \Braintree\Gateway
         */
        protected $sdk;
        /**
         * Shared settings names.
         *
         * @var array
         */
        protected $shared_settings_names = array('environment', 'public_key', 'private_key', 'merchant_id', 'sandbox_public_key', 'sandbox_private_key', 'sandbox_merchant_id', 'name_dynamic_descriptor');
        /**
         * Whether this gateway can store credentials.
         *
         * Should be overridden to return true for gateways that are permitted to store their own Braintree connection credentials.
         *
         * @since 3.7.0
         * @return bool Whether this gateway instance can store its own Braintree connection credentials.
         */
        protected function can_gateway_store_credentials(): bool
        {
        }
        /**
         * Returns a masked version of a private key, showing only the last 4 characters.
         *
         * @since 3.11.0
         *
         * @param string $key The private key to mask.
         * @return string The masked key, or empty string if key is empty.
         */
        public function mask_private_key(string $key): string
        {
        }
        /**
         * Checks whether a value is a masked private key placeholder.
         *
         * @since 3.11.0
         *
         * @param string $value The value to check.
         * @return bool Whether the value starts with the masked key character.
         */
        public function is_masked_private_key(string $value): bool
        {
        }
        /**
         * Stores credentials from all gateway sources for populating read-only fields.
         *
         * @since 3.7.0
         * @var array
         */
        protected $gateway_credentials = array();
        /**
         * Character used for masked private key placeholders.
         *
         * @since 3.11.0
         * @var string
         */
        const MASKED_KEY_CHAR = '•';
        /**
         * Whether credentials are unavailable for this gateway.
         *
         * Set to true when no credential sources are available and gateway cannot use manual credentials.
         * Used to hide credential fields in get_method_form_fields().
         *
         * @since 3.7.0
         * @var bool
         */
        protected $no_credentials_available = false;
        /**
         * Braintree API environment
         *
         * @var \WC_Braintree_Payment_Method_Handler
         */
        protected $auth_environment;
        /**
         * The remote configuration for the current gateway.
         *
         * @var \WC_Braintree\WC_Braintree_Remote_Configuration|null
         */
        protected $remote_config = null;
        /**
         * WC_Gateway_Braintree constructor.
         *
         * @param string                                 $id the gateway id.
         * @param \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_Plugin $plugin the parent plugin class.
         * @param array                                  $args gateway arguments.
         */
        public function __construct($id, $plugin, $args)
        {
        }
        /**
         * Enqueues admin scripts.
         *
         * @internal
         *
         * @since 2.3.11
         */
        public function enqueue_admin_scripts()
        {
        }
        /**
         * Gets admin params.
         *
         * @internal
         *
         * @since 2.5.0
         * @return array
         */
        protected function get_admin_params()
        {
        }
        /**
         * Gets the merchant account configuration parameters.
         *
         * @return array
         */
        public function get_merchant_account_configuration_params()
        {
        }
        /**
         * Loads the plugin configuration settings
         *
         * @since 2.0.0
         */
        public function load_settings()
        {
        }
        /**
         * Loads any shared settings from the selected source gateway.
         *
         * @since 3.7.0
         */
        protected function load_shared_settings()
        {
        }
        /**
         * Gets the list of gateway IDs that can be used as credential sources.
         *
         * @since 3.7.0
         * @return array Array of gateway IDs.
         */
        protected function get_available_credential_source_gateways()
        {
        }
        /**
         * Enqueue the Braintree.js library prior to enqueueing gateway scripts
         *
         * @since 3.0.0
         * @see SV_WC_Payment_Gateway::enqueue_scripts()
         */
        public function enqueue_gateway_assets()
        {
        }
        /**
         * Helper function to register the gateway assets without enqueuing them.
         *
         * @since 3.8.0
         * @return void
         */
        public function register_gateway_assets()
        {
        }
        /**
         * Gets a client authorization token via AJAX.
         *
         * @internal
         *
         * @since 2.1.0
         */
        public function ajax_get_client_token()
        {
        }
        /**
         * Validate the payment nonce exists
         *
         * @since 3.0.0
         * @param bool $is_valid Whether the nonce is valid.
         * @return bool
         */
        public function validate_payment_nonce($is_valid)
        {
        }
        /**
         * Add Braintree-specific data to the order prior to processing, currently:
         *
         * $order->payment->nonce - payment method nonce
         * $order->payment->tokenize - true to tokenize payment method, false otherwise
         *
         * @since 3.0.0
         * @see SV_WC_Payment_Gateway_Direct::get_order()
         * @param int $order order ID being processed.
         * @return \WC_Order object with payment and transaction information attached
         */
        public function get_order($order)
        {
        }
        /**
         * Gets the payment data that is submitted by the Apple Pay payment method.
         *
         * @since 3.2.0
         *
         * @return array
         */
        public function get_apple_pay_payment_data()
        {
        }
        /**
         * Gets the payment data that is submitted by the Google Pay payment method.
         *
         * @since 3.4.0
         *
         * @return array
         */
        public function get_google_pay_payment_data(): array
        {
        }
        /**
         * Returns true if the payment method is Apple Pay, false otherwise.
         *
         * @since 3.2.0
         *
         * @return bool
         */
        public function is_apple_pay()
        {
        }
        /**
         * Returns true if the payment method is Google Pay, false otherwise.
         *
         * @since 3.4.0
         *
         * @return bool
         */
        public function is_google_pay(): bool
        {
        }
        /**
         * Determines whether Apple Pay card should be tokenized.
         *
         * @since 3.2.0
         *
         * @return bool
         */
        public function should_tokenize_apple_pay_card()
        {
        }
        /**
         * Determines whether Google Pay card should be tokenized.
         *
         * @since 3.4.0
         *
         * @return bool
         */
        public function should_tokenize_google_pay_card(): bool
        {
        }
        /**
         * Determines whether tokenization should be performed before the sale.
         *
         * Most gateways should always tokenize before the sale if the order total is 0.00 (such as a free trial), because
         * they don't allow 0.00 transactions (but do allow tokenizing without a transaction).
         *
         * Gateways that don't support tokenization before the sale (without a transaction) should override this method to
         * return false, even if order total is 0.00. Note that when doing, so the gateway should also override
         * `can_tokenize_with_or_after_sale()` to return true.
         *
         * Finally, gateways that only tokenize with sale (Moneris), may need to override `should_skip_transaction()` to return false.
         *
         * @see SV_WC_Payment_Gateway_Direct::should_tokenize_with_or_after_sale()
         * @see SV_WC_Payment_Gateway_Direct::can_tokenize_with_or_after_sale()
         * @see SV_WC_Payment_Gateway_Direct::should_skip_transaction()
         *
         * @since 3.2.0
         *
         * @param \WC_Order $order the order being paid for.
         * @return bool
         */
        protected function should_tokenize_before_sale(\WC_Order $order): bool
        {
        }
        /**
         * Determines whether tokenization should be performed after the sale.
         *
         * Performs checks to ensure that the gateway supports tokenization, that the order is not a guest order,
         * that the gateway supports tokenization after the sale, and that the gateway is configured to tokenize after the sale.
         *
         * @see SV_WC_Payment_Gateway_Direct::should_tokenize_before_sale()
         *
         * @since 3.2.0
         *
         * @param \WC_Order $order the order that was paid for.
         * @return bool
         */
        protected function should_tokenize_with_or_after_sale(\WC_Order $order): bool
        {
        }
        /**
         * Gets the order object with data added to process a refund.
         *
         * Overridden to add the transaction ID to legacy orders since the v1.x
         * plugin didn't set its own transaction ID meta.
         *
         * @see \SV_WC_Payment_Gateway::get_order_for_refund()
         * @since 2.0.0
         * @param \WC_Order $order the order object.
         * @param float     $amount the refund amount.
         * @param string    $reason the refund reason.
         * @return \WC_Order
         */
        public function get_order_for_refund($order, $amount, $reason)
        {
        }
        /**
         * Gets the capture handler.
         *
         * @since 2.2.0
         *
         * @return \WC_Braintree\Capture
         */
        public function get_capture_handler()
        {
        }
        /** Tokenization methods **************************************************/
        /**
         * Braintree tokenizes payment methods during the transaction (if successful)
         *
         * @since 3.0.0
         * @return bool
         */
        public function tokenize_with_sale()
        {
        }
        /**
         * Return the custom Braintree payment tokens handler class
         *
         * @since 3.2.0
         * @return \WC_Braintree_Payment_Method_Handler
         */
        protected function build_payment_tokens_handler()
        {
        }
        /** Admin settings methods ************************************************/
        /**
         * Returns an array of form fields specific for this method
         *
         * @since 3.0.0
         * @see SV_WC_Payment_Gateway::get_method_form_fields()
         * @return array of form fields
         */
        protected function get_method_form_fields()
        {
        }
        /**
         * Adds the shared settings form fields.
         *
         * @since 2.0.0
         *
         * @param array $form_fields
         * @return array
         */
        protected function add_shared_settings_form_fields($form_fields)
        {
        }
        /**
         * Generates the Braintree Auth connection HTML.
         *
         * This method will be phased out as the manual connection is the preferred setup method.
         *
         * @see \WC_Gateway_Braintree::add_shared_settings_form_fields()
         *
         * @internal
         *
         * @since 2.0.0
         * @deprecated since 2.3.11
         *
         * @return string HTML
         */
        public function generate_braintree_auth_html()
        {
        }
        /**
         * Generates HTML for the masked_password field type.
         *
         * Renders a text input with the stored value replaced by a masked placeholder
         * to prevent private key exposure in page source.
         *
         * @since 3.11.0
         *
         * @param string $key  Field key.
         * @param array  $data Field data.
         * @return string The field HTML.
         */
        public function generate_masked_password_html($key, $data)
        {
        }
        /**
         * Validates a masked_password field value during save.
         *
         * If the submitted value is a masked placeholder (unchanged by the user),
         * returns the existing stored value. Otherwise returns the new value as-is.
         *
         * @since 3.11.0
         *
         * @param string $key   Field key.
         * @param string $value The submitted field value.
         * @return string The value to save.
         */
        public function validate_masked_password_field($key, $value)
        {
        }
        /**
         * Gets the Braintree Auth connect URL.
         *
         * Although the Partner API expects an array, the WooCommerce Connect
         * middleware presently wants things flattened. So instead of passing a user
         * array and a business array, we pass selected fields with `user_` and
         * `business_` prepended.
         *
         * @since 2.0.0
         * @param string $environment the desired environment, either 'production' or 'sandbox'.
         * @return string
         */
        protected function get_connect_url($environment = self::ENVIRONMENT_PRODUCTION)
        {
        }
        /**
         * Gets the Braintree Auth disconnect URL.
         *
         * @since 2.0.0
         * @return string
         */
        protected function get_disconnect_url()
        {
        }
        /** Merchant account ID (multi-currency) feature **************************/
        /**
         * Generate the merchant account ID section HTML, including the currency
         * selector and any existing merchant account IDs that have been entered
         * by the admin
         *
         * @since 3.0.0
         * @return string HTML
         */
        protected function generate_merchant_account_ids_html()
        {
        }
        /**
         * Generate the webhook info section HTML
         *
         * @since 3.5.0
         * @return string HTML
         */
        protected function generate_webhook_info_html()
        {
        }
        /**
         * Display the settings page with some additional CSS/JS to support the
         * merchant account IDs feature
         *
         * @since 3.0.0
         * @see SV_WC_Payment_Gateway::admin_options()
         */
        public function admin_options()
        {
        }
        /**
         * Generate HTML for an individual merchant account ID field.
         * Escapes the HTML before returning it.
         *
         * @since 3.0.0
         * @param string|null $currency_code 3 character currency code for the merchant account ID.
         * @return string HTML
         */
        protected function generate_merchant_account_id_html($currency_code = null)
        {
        }
        /**
         * Check if the current merchant account ID saved in the settings is a valid and supported merchant account for this gateway.
         *
         * @param string $current_merchant_account_id The current merchant account ID.
         * @return bool True if the current merchant account ID is valid, false otherwise.
         */
        private function is_current_merchant_account_id_valid($current_merchant_account_id = null)
        {
        }
        /**
         * Gets the reason why the current merchant account ID is invalid.
         *
         * @param string $current_merchant_account_id The current merchant account ID.
         * @param string $currency The currency to check.
         * @return string The reason why the current merchant account ID is invalid.
         */
        private function get_current_id_invalidity_reason($current_merchant_account_id, $currency)
        {
        }
        /**
         * Filter admin options before saving.
         *
         * Handles:
         * - Copying shared settings (credentials, environment) from source gateway when inheriting.
         * - Dynamically injecting valid merchant account IDs so they're persisted to settings.
         *
         * @since 3.0.3 update logic to sanitize multiple merchant account IDs.
         * @since 3.3.0
         * @since 3.7.0 Added shared settings inheritance support.
         * @param array $sanitized_fields Sanitized fields.
         * @return array
         */
        public function filter_admin_options($sanitized_fields)
        {
        }
        /**
         * Clears the OAuth connection history marker when saving a manual connection.
         *
         * @since 3.11.1
         *
         * @param array $sanitized_fields Sanitized settings fields about to be saved.
         * @return array
         */
        protected function maybe_clear_oauth_history_on_manual_connection(array $sanitized_fields): array
        {
        }
        /**
         * Determines whether sanitized settings include a complete set of manual API credentials.
         *
         * @since 3.11.1
         *
         * @param array $sanitized_fields Sanitized settings fields.
         * @return bool
         */
        protected function sanitized_fields_have_manual_credentials(array $sanitized_fields): bool
        {
        }
        /** Getters ***************************************************************/
        /**
         * Gets order meta.
         *
         * Overridden to account for some straggling meta that may be leftover from
         * the v1 in certain cases when WC was updated to 3.0 before Subscriptions.
         *
         * @since 2.0.2
         *
         * @param \WC_Order|int $order order object or ID.
         * @param string        $key meta key to get.
         * @return mixed meta value
         */
        public function get_order_meta($order, $key)
        {
        }
        /**
         * Returns the customer ID for the given user ID. Braintree provides a customer
         * ID after creation.
         *
         * This is overridden to account for merchants that switched to v1 from the
         * SkyVerge plugin, then updated old subscriptions and/or processed new
         * subscriptions while waiting for v2.
         *
         * @since 2.0.1
         * @see SV_WC_Payment_Gateway::get_customer_id()
         * @param int   $user_id WP user ID.
         * @param array $args optional additional arguments which can include: environment_id, autocreate (true/false), and order.
         * @return string payment gateway customer id
         */
        public function get_customer_id($user_id, $args = array())
        {
        }
        /**
         * Ensure a customer ID is created in Braintree for guest customers
         *
         * A customer ID must exist in Braintree before it can be used so a guest
         * customer ID cannot be generated on the fly. This ensures a customer is
         * created when a payment method is tokenized for transactions such as a
         * pre-order guest purchase.
         *
         * @since 3.1.1
         * @see SV_WC_Payment_Gateway::get_guest_customer_id()
         * @param \WC_Order $order The order object.
         * @return bool false
         */
        public function get_guest_customer_id(\WC_Order $order)
        {
        }
        /**
         * Returns the merchant account transaction URL for the given order
         *
         * @since 3.0.0
         * @see WC_Payment_Gateway::get_transaction_url()
         * @param \WC_Order $order the order object.
         * @return string transaction URL
         */
        public function get_transaction_url($order)
        {
        }
        /**
         * Returns true if the gateway is properly configured to perform transactions
         *
         * @since 3.0.0
         * @see SV_WC_Payment_Gateway::is_configured()
         * @return boolean true if the gateway is properly configured
         */
        public function is_configured()
        {
        }
        /**
         * Determines if the gateway is connected via Braintree Auth.
         *
         * @since 2.0.0
         * @return bool
         */
        public function is_connected()
        {
        }
        /**
         * Determines if the merchant can use Braintree Auth.
         *
         * Right now this checks that the shop is US-based and transacting in USD.
         *
         * @since 2.0.0
         * @return bool
         */
        public function can_connect()
        {
        }
        /**
         * Determines if the API is connected via standard credentials.
         *
         * @since 2.0.0
         * @return bool
         */
        public function is_connected_manually()
        {
        }
        /**
         * Returns true if the current page contains a payment form
         *
         * @since 3.0.0
         * @return bool
         */
        public function is_payment_form_page()
        {
        }
        /**
         * Get the API object
         *
         * @since 3.0.0
         * @see SV_WC_Payment_Gateway::get_api()
         * @return \WC_Braintree_API instance
         */
        public function get_api()
        {
        }
        /**
         * Get the SDK object
         *
         * @since 3.4.0
         *
         * @return \Braintree\Gateway instance
         */
        public function get_sdk()
        {
        }
        /**
         * Returns true if the current gateway environment is configured to 'sandbox'
         *
         * @since 3.0.0
         * @see SV_WC_Payment_Gateway::is_test_environment()
         * @param string $environment_id optional environment id to check, otherwise defaults to the gateway current environment.
         * @return boolean true if $environment_id (if non-null) or otherwise the current environment is test
         */
        public function is_test_environment($environment_id = null)
        {
        }
        /**
         * Gets configured environment.
         *
         * If connected to Braintree Auth, the environment was explicitly set at
         * the time of authentication. Otherwise, use the standard setting.
         *
         * @since 2.0.0
         * @return string
         */
        public function get_environment()
        {
        }
        /**
         * Get the remote configuration for this gateway (lazy loaded).
         *
         * @since 3.7.0
         * @return \WC_Braintree\WC_Braintree_Remote_Configuration
         */
        protected function get_remote_config()
        {
        }
        /**
         * Returns the source gateway ID for the gateway credentials.
         * If the source gateway is manual, return the current gateway ID.
         * Otherwise, return the source gateway ID.
         *
         * @since 3.7.0
         * @return string
         */
        public function get_credentials_source()
        {
        }
        /**
         * Returns true if the gateway is PayPal
         *
         * @since 3.2.0
         * @return bool
         */
        public function is_paypal_gateway()
        {
        }
        /**
         * Returns true if the gateway is Venmo
         *
         * @since 3.6.0
         * @return bool
         */
        public function is_venmo_gateway()
        {
        }
        /**
         * Determines if this is a gateway that supports charging virtual-only orders.
         *
         * @since 2.0.0
         * @return bool
         */
        public function supports_credit_card_charge_virtual()
        {
        }
        /**
         * Returns the merchant ID based on the current environment
         *
         * @since 3.0.0
         * @param string $environment_id optional one of 'sandbox' or 'production', defaults to current configured environment.
         * @return string merchant ID
         */
        public function get_merchant_id($environment_id = null)
        {
        }
        /**
         * Gets the Braintree Auth access token.
         *
         * @since 2.0.0
         * @return string
         */
        public function get_auth_access_token()
        {
        }
        /**
         * Gets the Braintree Auth merchant ID.
         *
         * @since 2.0.0
         * @return string
         */
        public function get_auth_environment()
        {
        }
        /**
         * Gets the Braintree Auth merchant ID.
         *
         * @since 2.0.0
         * @return string
         */
        public function get_auth_merchant_id()
        {
        }
        /**
         * Returns the public key based on the current environment
         *
         * @since 3.0.0
         * @param string $environment_id optional one of 'sandbox' or 'production', defaults to current configured environment.
         * @return string public key
         */
        public function get_public_key($environment_id = null)
        {
        }
        /**
         * Returns the private key based on the current environment
         *
         * @since 3.0.0
         * @param string $environment_id optional one of 'sandbox' or 'production', defaults to current configured environment.
         * @return string private key
         */
        public function get_private_key($environment_id = null)
        {
        }
        /**
         * Return the merchant account ID for the given currency and environment
         *
         * @since 3.0.0
         * @param string|null $currency optional currency code, defaults to base WC currency.
         * @return string|null
         */
        public function get_merchant_account_id($currency = null)
        {
        }
        /**
         * Return an array of valid Braintree environments
         *
         * @since 3.0.0
         * @return array
         */
        protected function get_braintree_environments()
        {
        }
        /**
         * Determines if a dynamic descriptor name value is valid.
         *
         * @since 2.1.0
         *
         * @param string $value name to check. Defaults to the gateway's configured setting.
         * @return bool
         */
        public function is_name_dynamic_descriptor_valid($value = '')
        {
        }
        /**
         * Return the name dynamic descriptor
         *
         * @link https://developers.braintreepayments.com/reference/request/transaction/sale/php#descriptor.name
         * @since 3.0.0
         * @return string
         */
        public function get_name_dynamic_descriptor()
        {
        }
        /**
         * Determines if a phone dynamic descriptor value is valid.
         *
         * The value must be 14 characters or less, have exactly 10 digits, and
         * otherwise contain only numbers, dashes, parentheses, or periods.
         *
         * @since 2.1.0
         *
         * @param string $value value to check. Defaults to the gateway's configured setting
         * @return bool
         */
        public function is_phone_dynamic_descriptor_valid($value = '')
        {
        }
        /**
         * Return the phone dynamic descriptor
         *
         * @link https://developers.braintreepayments.com/reference/request/transaction/sale/php#descriptor.phone
         * @since 3.0.0
         * @return string
         */
        public function get_phone_dynamic_descriptor()
        {
        }
        /**
         * Return the URL dynamic descriptor
         *
         * @link https://developers.braintreepayments.com/reference/request/transaction/sale/php#descriptor.url
         * @since 3.0.0
         * @return string
         */
        public function get_url_dynamic_descriptor()
        {
        }
        /**
         * Gets the transaction type for the gateway.
         *
         * @since 2.5.0
         *
         * @return string
         */
        public function get_transaction_type()
        {
        }
        /**
         * Adds the standard transaction data to the order.
         * This function is added to set transaction ID to order using WooCommerce Order API.
         *
         * @since 2.9.1
         *
         * @param \WC_Order                               $order    the order object.
         * @param SV_WC_Payment_Gateway_API_Response|null $response optional transaction response.
         */
        public function add_transaction_data($order, $response = null)
        {
        }
        /**
         * Handles payment processing.
         *
         * @see WC_Payment_Gateway::process_payment()
         *
         * @since 3.0.0
         *
         * @param int|string $order_id Order ID.
         * @return array associative array with members 'result' and 'redirect'
         */
        public function process_payment($order_id)
        {
        }
        /**
         * Mark an order as refunded. This should only be used when the full order
         * amount has been refunded.
         *
         * @since 3.1.5
         *
         * @param \WC_Order $order order object.
         */
        public function mark_order_as_refunded($order)
        {
        }
        /**
         * Check if the gateway has an account connected.
         *
         * @since 3.2.6
         *
         * @return bool True if the gateway has an account connected, false otherwise.
         */
        public function is_account_connected()
        {
        }
        /**
         * Checks if the cart contains a subscription product.
         *
         * @since 3.7.0
         *
         * @return bool
         */
        public function cart_contains_subscription()
        {
        }
        /**
         * Returns true if the current gateway environment is configured to 'sandbox'
         *
         * @since 3.2.6
         *
         * @return boolean true if the current environment is test environment.
         */
        public function is_in_test_mode()
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
        /** Webhook Methods *******************************************************/
        /**
         * Get the webhook URL for the current environment
         *
         * @since 3.5.0
         * @return string
         */
        public function get_webhook_url()
        {
        }
    }
    /**
     * Braintree ACH Gateway Class
     *
     * @since 3.7.0
     */
    class WC_Gateway_Braintree_ACH extends \WC_Braintree\WC_Gateway_Braintree
    {
        /** ACH payment type */
        const PAYMENT_TYPE_ACH = 'ach';
        /**
         * Initialize the gateway
         *
         * @since 3.7.0
         */
        public function __construct()
        {
        }
        /**
         * Enqueues ACH gateway specific scripts.
         *
         * @since 3.7.0
         *
         * @see SV_WC_Payment_Gateway::enqueue_gateway_assets()
         */
        public function enqueue_gateway_assets()
        {
        }
        /**
         * Helper function to register the gateway assets without enqueuing them.
         *
         * @since 3.8.0
         * @return void
         */
        public function register_gateway_assets()
        {
        }
        /**
         * Initializes the payment form handler.
         *
         * @since 3.7.0
         *
         * @return \WC_Braintree\Payment_Forms\WC_Braintree_ACH_Payment_Form
         */
        protected function init_payment_form_instance()
        {
        }
        /**
         * Return the custom Braintree ACH payment tokens handler class.
         *
         * @since 3.8.0
         * @return \WC_Braintree\WC_Braintree_ACH_Payment_Method_Handler
         */
        protected function build_payment_tokens_handler()
        {
        }
        /**
         * Gets the method form fields.
         *
         * Overrides parent to exclude Merchant Account IDs section (ACH only supports USD).
         *
         * @since 3.7.0
         *
         * @see WC_Gateway_Braintree::get_method_form_fields()
         * @return array
         */
        protected function get_method_form_fields()
        {
        }
        /** Getters ***************************************************************/
        /**
         * Get the default payment method title, which is configurable within the
         * admin and displayed on checkout.
         *
         * @see SV_WC_Payment_Gateway::get_default_title()*
         *
         * @since 3.7.0
         *
         * @return string The payment method title to show on checkout.
         */
        protected function get_default_title()
        {
        }
        /**
         * Get the default payment method description, which is configurable
         * within the admin and displayed on checkout.
         *
         * @see SV_WC_Payment_Gateway::get_default_description()
         *
         * @since 3.7.0
         *
         * @return string The payment method description to show on checkout.
         */
        protected function get_default_description()
        {
        }
        /**
         * Override the default icon to set an ACH-specific one.
         *
         * @since 3.7.0
         *
         * @return string
         */
        public function get_icon()
        {
        }
        /**
         * Gets the payment method image URL.
         *
         * @since 3.7.0
         *
         * @param string $type The payment method type.
         * @return string
         */
        public function get_payment_method_image_url($type)
        {
        }
        /**
         * Override parent to indicate ACH handles tokenization internally.
         *
         * ACH has a unique flow where tokenization happens during the verification
         * step within do_ach_transaction(), not as a separate framework-managed step.
         * Returning false prevents the SkyVerge framework from attempting to tokenize before the
         * transaction, which would consume the one-time-use nonce.
         *
         * @since 3.7.0
         *
         * @return bool
         */
        public function tokenize_before_sale()
        {
        }
        /**
         * Override parent to indicate ACH handles tokenization internally.
         *
         * ACH tokenization occurs during verification within do_ach_transaction(),
         * not as part of the charge response. Returning false prevents the SkyVerge framework
         * from trying to extract token information from the charge response.
         *
         * @since 3.7.0
         *
         * @return bool
         */
        public function tokenize_with_sale()
        {
        }
        /**
         * Processes an ACH Direct Debit transaction.
         *
         * @since 3.7.0
         *
         * @param \WC_Order $order The order object.
         * @return \WC_Braintree\API\Responses\Transaction_Response
         */
        protected function do_ach_transaction(\WC_Order $order)
        {
        }
        /**
         * Tweaks the display of ACH payment methods in My Account > Payment Methods to set brand info.
         *
         * @since 3.7.0
         *
         * @param array             $item       Payment method list item.
         * @param \WC_Payment_Token $core_token WooCommerce payment token.
         * @return array
         */
        public function set_brand_info_in_payment_method_list($item, $core_token)
        {
        }
        /**
         * Adjusts the token editor fields for ACH accounts.
         *
         * @since 3.7.0
         * @return array
         */
        public function adjust_token_editor_fields()
        {
        }
    }
    /**
     * Braintree Blocks integration
     *
     * @since 3.0.0
     */
    abstract class WC_Gateway_Braintree_Blocks_Support extends \Automattic\WooCommerce\Blocks\Payments\Integrations\AbstractPaymentMethodType
    {
        /**
         * Name of the payment method.
         *
         * @var string
         */
        protected $name;
        /**
         * Path to assets
         *
         * @var string
         */
        protected $asset_path;
        /**
         * URL of script
         *
         * @var string
         */
        protected $script_url;
        /**
         * Additional script dependencies to be added to the main script.
         *
         * @var string[]
         */
        protected array $additional_dependencies = array();
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
         * Enqueues shared styles for Braintree Blocks payment methods.
         *
         * Registers and enqueues the stylesheet that powers the "Test" pill and the
         * test-mode notice (test amount field + copyable card number). The stylesheet
         * is shared across every Braintree Blocks gateway because the TestBadge is
         * rendered in each gateway's payment method label.
         *
         * @since 3.11.0
         *
         * @param string $version Asset version string.
         */
        protected function enqueue_block_styles(string $version): void
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
         * Determine if store allows save payment information to be saved during checkout.
         *
         * @return bool True if merchant allows shopper to save payment information during checkout.
         */
        private function get_show_saved_cards()
        {
        }
        /**
         * Determine if the checkbox to enable the user to save their payment method should be shown.
         *
         * @return bool True if the save payment checkbox should be displayed to the user.
         */
        private function get_show_save_option()
        {
        }
        /**
         * Determine if tokenization is forced.
         *
         * @return bool True if tokenization is forced.
         */
        private function tokenization_forced()
        {
        }
        /**
         * Returns the payment form instance.
         *
         * @return WC_Braintree_Payment_Form|null
         */
        protected function get_payment_form_instance()
        {
        }
        /**
         * Returns the payment gateway instance for this instance.
         *
         * @since 3.8.0
         *
         * @return WC_Gateway_Braintree|null
         */
        protected function get_gateway()
        {
        }
    }
    /**
     * Braintree ACH payment method Blocks integration
     *
     * @since 3.8.0
     */
    final class WC_Gateway_Braintree_ACH_Blocks_Support extends \WC_Braintree\WC_Gateway_Braintree_Blocks_Support
    {
        /**
         * Constructor
         */
        public function __construct()
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
    }
    /**
     * Abstract Braintree Local Payment Gateway Class.
     *
     * Base class for all local payment method gateways (e.g. BLIK, P24).
     * Each concrete subclass represents a single local payment method and
     * appears as its own WooCommerce gateway at checkout.
     *
     * @since 3.9.0
     */
    abstract class WC_Gateway_Braintree_Local_Payment extends \WC_Braintree\WC_Gateway_Braintree
    {
        /** Local payment type used by the SkyVerge framework for transaction dispatch. */
        const PAYMENT_TYPE_LOCAL_PAYMENT = 'local_payment';
        /**
         * Gets the local payment type string used by the Braintree SDK.
         *
         * @since 3.9.0
         *
         * @return string e.g. 'blik', 'p24'
         */
        abstract public function get_local_payment_type(): string;
        /**
         * Gets the human-readable display name for this local payment method.
         *
         * @since 3.9.0
         *
         * @return string e.g. 'BLIK', 'Przelewy24'
         */
        abstract public function get_local_payment_display_name(): string;
        /**
         * Gets the billing countries supported by this local payment method.
         *
         * @since 3.9.0
         *
         * @return string[] ISO country codes, e.g. ['PL']
         */
        abstract public function get_supported_countries(): array;
        /**
         * Gets the currencies supported by this local payment method.
         *
         * @since 3.9.0
         *
         * @return string[] Currency codes, e.g. ['PLN', 'EUR']
         */
        abstract public function get_supported_currencies(): array;
        /**
         * Initialize the gateway.
         *
         * @since 3.9.0
         *
         * @param string $gateway_id The gateway ID.
         * @param array  $args       Additional constructor arguments to merge with defaults.
         */
        public function __construct(string $gateway_id, array $args = [])
        {
        }
        /**
         * Registers base and LPM-specific scripts.
         *
         * Does not call parent::register_gateway_assets() because it gates
         * registration behind is_available(), which includes the customer billing
         * country check. LPM gateways need scripts pre-registered regardless of
         * the current country because they appear dynamically when the customer
         * changes their billing country at checkout.
         *
         * @since 3.9.0
         */
        public function register_gateway_assets()
        {
        }
        /**
         * Enqueues local payment gateway scripts and styles.
         *
         * All local payment gateways share the same JS handler and CSS.
         * wp_enqueue_script is idempotent, so multiple gateways won't duplicate assets.
         *
         * @since 3.9.0
         *
         * @see SV_WC_Payment_Gateway::enqueue_gateway_assets()
         */
        public function enqueue_gateway_assets()
        {
        }
        /**
         * Enqueues the shared LPM scripts and styles.
         *
         * @since 3.9.0
         */
        protected function enqueue_lpm_scripts()
        {
        }
        /**
         * Enqueues LPM assets on checkout pages regardless of gateway availability.
         *
         * The framework's enqueue_scripts() skips assets for unavailable gateways.
         * However, LPM gateways appear dynamically when the billing country changes,
         * so scripts must already be loaded before the gateway becomes available.
         *
         * Skips enqueuing when the gateway is disabled or the store currency is
         * unsupported, since those conditions won't change during checkout.
         *
         * @since 3.9.0
         *
         * @internal Hooked to wp_enqueue_scripts.
         */
        public function maybe_enqueue_lpm_assets()
        {
        }
        /**
         * Determines if the gateway is available for use.
         *
         * Checks the store currency and the customer's billing country against
         * this payment method's supported values.
         *
         * When the checkout page uses WC Blocks, the billing country check is
         * skipped. WC Blocks checks the Store API's `paymentMethods` list
         * *before* calling the JS `canMakePayment` callback, so the gateway
         * must remain in that list for the client-side country filtering to
         * ever run.
         *
         * @since 3.9.0
         *
         * @return bool
         */
        public function is_available()
        {
        }
        /**
         * Initializes the payment form handler.
         *
         * @since 3.9.0
         *
         * @return \WC_Braintree\Payment_Forms\WC_Braintree_Local_Payment_Payment_Form
         */
        protected function init_payment_form_instance()
        {
        }
        /**
         * Gets the method form fields.
         *
         * Removes dynamic descriptor fields which are not supported for local payments.
         *
         * @since 3.9.0
         *
         * @see WC_Gateway_Braintree::get_method_form_fields()
         * @return array
         */
        protected function get_method_form_fields()
        {
        }
        /**
         * Gets the gateway icon HTML.
         *
         * @since 3.9.0
         *
         * @return string
         */
        public function get_icon()
        {
        }
        /**
         * Gets the URL to the gateway icon image.
         *
         * Defaults to an SVG in assets/images/. Subclasses can override
         * this to use a different format or path.
         *
         * @since 3.9.0
         *
         * @return string
         */
        public function get_local_payment_icon_url(): string
        {
        }
        /**
         * Processes a local payment transaction.
         *
         * Called by the framework via the payment_type dispatch (do_{payment_type}_transaction).
         *
         * @since 3.9.0
         *
         * @param \WC_Order $order The order object.
         * @return \WC_Braintree\API\Responses\WC_Braintree_API_PayPal_Transaction_Response
         */
        protected function do_local_payment_transaction(\WC_Order $order)
        {
        }
    }
    /**
     * Braintree Bancontact Gateway Class.
     *
     * @since 3.9.0
     */
    class WC_Gateway_Braintree_Bancontact extends \WC_Braintree\WC_Gateway_Braintree_Local_Payment
    {
        /**
         * Initialize the gateway.
         *
         * @since 3.9.0
         */
        public function __construct()
        {
        }
        /**
         * Gets the Braintree SDK payment type string.
         *
         * @inheritDoc
         */
        public function get_local_payment_type(): string
        {
        }
        /**
         * Gets the human-readable display name.
         *
         * @inheritDoc
         */
        public function get_local_payment_display_name(): string
        {
        }
        /**
         * Gets the supported billing countries.
         *
         * @inheritDoc
         */
        public function get_supported_countries(): array
        {
        }
        /**
         * Gets the supported currencies.
         *
         * @inheritDoc
         */
        public function get_supported_currencies(): array
        {
        }
        /**
         * Gets the default payment method title.
         *
         * @since 3.9.0
         *
         * @return string
         */
        protected function get_default_title()
        {
        }
        /**
         * Gets the default payment method description.
         *
         * @since 3.9.0
         *
         * @return string
         */
        protected function get_default_description()
        {
        }
    }
    /**
     * Braintree BLIK Gateway Class.
     *
     * @since 3.9.0
     */
    class WC_Gateway_Braintree_Blik extends \WC_Braintree\WC_Gateway_Braintree_Local_Payment
    {
        /**
         * Initialize the gateway.
         *
         * @since 3.9.0
         */
        public function __construct()
        {
        }
        /**
         * Gets the Braintree SDK payment type string.
         *
         * @inheritDoc
         */
        public function get_local_payment_type(): string
        {
        }
        /**
         * Gets the human-readable display name.
         *
         * @inheritDoc
         */
        public function get_local_payment_display_name(): string
        {
        }
        /**
         * Gets the supported billing countries.
         *
         * @inheritDoc
         */
        public function get_supported_countries(): array
        {
        }
        /**
         * Gets the supported currencies.
         *
         * @inheritDoc
         */
        public function get_supported_currencies(): array
        {
        }
        /**
         * Gets the default payment method title.
         *
         * @since 3.9.0
         *
         * @return string
         */
        protected function get_default_title()
        {
        }
        /**
         * Gets the default payment method description.
         *
         * @since 3.9.0
         *
         * @return string
         */
        protected function get_default_description()
        {
        }
    }
    /**
     * Braintree Credit Card Gateway Class
     *
     * @since 3.0.0
     */
    #[\WC_Braintree\AllowDynamicProperties]
    class WC_Gateway_Braintree_Credit_Card extends \WC_Braintree\WC_Gateway_Braintree
    {
        /**
         * 3D Secure standard mode.
         *
         * @var string
         */
        const THREED_SECURE_MODE_STANDARD = 'standard';
        /**
         * 3D Secure strict mode.
         *
         * @var string
         */
        const THREED_SECURE_MODE_STRICT = 'strict';
        /**
         * Require CSC field.
         *
         * @var string
         */
        protected $require_csc;
        /**
         * Fraud tool to use.
         *
         * @var string
         */
        protected $fraud_tool;
        /**
         * Kount merchant ID.
         *
         * @var string
         */
        protected $kount_merchant_id;
        /**
         * 3D Secure enabled.
         *
         * @var string
         */
        protected $threed_secure_enabled;
        /**
         * 3D Secure mode, standard or strict.
         *
         * @var string
         */
        protected $threed_secure_mode;
        /**
         * 3D Secure card types.
         *
         * @var array
         */
        protected $threed_secure_card_types = array();
        /**
         * 3D Secure available.
         *
         * @var bool
         */
        protected $threed_secure_available;
        /**
         * Whether this gateway can store credentials.
         *
         * The Credit Card gateway is permitted to store its own Braintree connection credentials.
         *
         * @since 3.7.0
         * @return bool
         */
        protected function can_gateway_store_credentials(): bool
        {
        }
        /**
         * Whether Fastlane is enabled.
         *
         * @since 3.7.0
         *
         * @var bool
         */
        protected $enable_fastlane;
        /**
         * Initialize the gateway
         *
         * @since 3.0.0
         */
        public function __construct()
        {
        }
        /**
         * Enqueue credit card method specific scripts, currently:
         *
         * + Fraud tool library
         *
         * @since 3.0.0
         * @see SV_WC_Payment_Gateway::enqueue_gateway_assets()
         */
        public function enqueue_gateway_assets()
        {
        }
        /**
         * Gets the payment form JS localized script params.
         *
         * Adds a couple of name params to the framework base.
         *
         * @since 2.3.4
         *
         * @return array
         */
        protected function get_payment_form_js_localized_script_params(): array
        {
        }
        /**
         * Initializes the payment form handler.
         *
         * @since 2.4.0
         *
         * @return \WC_Braintree\Payment_Forms\WC_Braintree_Hosted_Fields_Payment_Form
         */
        protected function init_payment_form_instance()
        {
        }
        /**
         * Add credit card method specific form fields, currently:
         *
         * + Fraud tool settings
         *
         * @since 3.0.0
         * @see WC_Gateway_Braintree::get_method_form_fields()
         * @return array
         */
        protected function get_method_form_fields()
        {
        }
        /**
         * Gets the 3D Secure settings fields.
         *
         * @since 2.2.0
         *
         * @return array
         */
        protected function get_3d_secure_fields()
        {
        }
        /**
         * Override the standard CSC setting to instead indicate that it's a combined
         * Display & Require CSC setting. Braintree doesn't allow the CSC field to be
         * present without also requiring it to be populated.
         *
         * @since 3.0.0
         * @param array $form_fields gateway form fields.
         * @return array $form_fields gateway form fields
         */
        protected function add_csc_form_fields($form_fields)
        {
        }
        /**
         * Returns true if the CSC field should be displayed and required at checkout
         *
         * @since 3.0.0
         */
        public function is_csc_required()
        {
        }
        /**
         * Override the standard CSC enabled method to return the value of the csc_required()
         * check since enabled/required is the same for Braintree
         *
         * @since 3.0.0
         * @return bool
         */
        public function csc_enabled()
        {
        }
        /**
         * Render credit card method specific JS to the settings page, currently:
         *
         * + Hide/show Fraud tool kount merchant ID setting
         *
         * @since 3.0.0
         * @see WC_Gateway_Braintree::admin_options()
         */
        public function admin_options()
        {
        }
        /**
         * Returns true if the payment nonce is provided when not using a saved
         * payment token. Note this can't be moved to the parent class because
         * validation is payment-type specific.
         *
         * @since 3.0.0
         * @param boolean $is_valid true if the fields are valid, false otherwise.
         * @return boolean true if the fields are valid, false otherwise
         */
        protected function validate_credit_card_fields($is_valid)
        {
        }
        /**
         * Returns true if the payment nonce is provided when using a saved payment method
         * and CSC is required.
         *
         * @since 3.2.0
         * @param string $csc the card security code.
         * @return bool
         */
        protected function validate_csc($csc)
        {
        }
        /**
         * Add credit card specific data to the order, primarily for 3DS support
         *
         * 1) $order->payment->is_3ds_required - require 3DS for every transaction
         * 2) $order->payment->use_3ds_nonce - use nonce instead of token for transaction
         *
         * @since 3.0.0
         * @param \WC_Order|int $order order.
         * @return \WC_Order
         */
        public function get_order($order)
        {
        }
        /**
         * Overrides the parent method to set the payment information that is
         * usually set prior to payment with a direct gateway. Because Braintree uses
         * a nonce, we don't have access to the card info (last four, expiry date, etc)
         * until after the transaction is processed.
         *
         * @since 3.0.0
         * @see SV_WC_Payment_Gateway_Direct::do_credit_card_transaction()
         * @param \WC_Order                                          $order the order object.
         * @param \WC_Braintree_API_Credit_Card_Transaction_Response $response optional credit card transaction response.
         * @return \WC_Braintree_API_Credit_Card_Transaction_Response
         * @throws \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Plugin_Exception
         */
        protected function do_credit_card_transaction($order, $response = null)
        {
        }
        /**
         * Adds any gateway-specific transaction data to the order, for credit cards
         * this is:
         *
         * + risk data (if available)
         * + 3D Secure data (if available)
         *
         * @since 3.0.0
         * @see SV_WC_Payment_Gateway_Direct::add_transaction_data()
         * @param \WC_Order                                          $order the order object.
         * @param \WC_Braintree_API_Credit_Card_Transaction_Response $response transaction response.
         */
        public function add_payment_gateway_transaction_data($order, $response)
        {
        }
        /** Apple Pay Methods *********************************************************************************************/
        /**
         * Gets the order for Apple Pay transactions.
         *
         * @since 2.2.0
         *
         * @param \WC_Order                                                  $order order object.
         * @param \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_Apple_Pay_Payment_Response $response response object.
         * @return \WC_Order
         */
        public function get_order_for_apple_pay(\WC_Order $order, \SkyVerge\WooCommerce\PluginFramework\v6_2_4\SV_WC_Payment_Gateway_Apple_Pay_Payment_Response $response)
        {
        }
        /** Google Pay Methods *********************************************************************************************/
        /**
         * Gets the order for Google Pay transactions.
         *
         * @since 3.4.0
         *
         * @param \WC_Order   $order order object.
         * @param mixed|array $response authorized payment response data.
         * @return \WC_Order
         */
        public function get_order_for_google_pay(\WC_Order $order, $response): \WC_Order
        {
        }
        /** Refund/Void feature ***************************************************/
        /**
         * Void a transaction instead of refunding when it has a submitted for settlement
         * status. Note that only credit card transactions are eligible for this, as
         * PayPal transactions are settled immediately
         *
         * @since 3.0.0
         * @param \WC_Order                  $order order.
         * @param \WC_Braintree_API_Response $response refund response.
         * @return bool true if the transaction should be transaction
         */
        protected function maybe_void_instead_of_refund($order, $response)
        {
        }
        /** Add Payment Method feature ********************************************/
        /**
         * Save verification transactional data when a customer
         * adds a new credit via the add payment method flow
         *
         * @since 3.0.0
         * @param \WC_Braintree_API_Customer_Response|\WC_Braintree_API_Payment_Method_Response $response Payment method response.
         * @return array
         */
        protected function get_add_payment_method_payment_gateway_transaction_data($response)
        {
        }
        /** Fraud Tool feature ****************************************************/
        /**
         * Renders the fraud tool script.
         *
         * Note this is hooked to load at high priority (1) so that it's rendered prior to the braintree.js/braintree-data.js scripts being loaded
         *
         * @link https://developers.braintreepayments.com/guides/advanced-fraud-tools/overview
         *
         * @internal
         *
         * @since 3.0.0
         */
        public function render_fraud_js()
        {
        }
        /**
         * Add an async attribute to the braintree-data.js script tag, there's no
         * way to do this when enqueuing so it must be done manually here
         *
         * @since 3.0.0
         * @param string $url cleaned URL from esc_url().
         * @return string
         */
        public function adjust_fraud_script_tag($url)
        {
        }
        /**
         * Return the enabled fraud tool setting, either 'basic', 'advanced', or
         * 'kount_direct'
         *
         * @since 3.0.0
         * @return string
         */
        public function get_fraud_tool()
        {
        }
        /**
         * Return true if advanced fraud tools are enabled (either advanced or
         * kount direct)
         *
         * @since 3.0.0
         * @return bool
         */
        public function is_advanced_fraud_tool_enabled()
        {
        }
        /**
         * Return true if the Kount Direct fraud tool is enabled
         *
         * @since 3.0.0
         * @return bool
         */
        public function is_kount_direct_enabled()
        {
        }
        /**
         * Get the Kount merchant ID, only used when the Kount Direct fraud tool
         * is enabled
         *
         * @since 3.0.0
         * @return string
         */
        public function get_kount_merchant_id()
        {
        }
        /**
         * Determines if Kount is supported.
         *
         * @since 2.1.0
         *
         * @return bool
         */
        public function is_kount_supported()
        {
        }
        /** 3D Secure feature *****************************************************/
        /**
         * Determines if 3D Secure is available for the merchant account.
         *
         * @since 2.2.0
         *
         * @return bool
         */
        public function is_3d_secure_available()
        {
        }
        /**
         * Determines if 3D secure is enabled.
         *
         * We've removed the 3D Secure setting, and its availability is determined by the connected account, however this
         * allows users to disable it completely via a filter should they want to.
         *
         * @since 2.0.0
         *
         * @return bool
         */
        public function is_3d_secure_enabled()
        {
        }
        /**
         * Determines if 3D Secure is in strict mode.
         *
         * @since 2.2.0
         *
         * @return bool
         */
        public function is_3d_secure_strict()
        {
        }
        /**
         * Gets the currently configured 3D Secure mode.
         *
         * @since 2.2.0
         *
         * @return string
         */
        public function get_3d_secure_mode()
        {
        }
        /**
         * Return true if a liability shift is required for *every* 3DS-eligible
         * transaction (even for those where liability shift wasn't possible, e.g.
         * the cardholder was not enrolled)
         *
         * @since 2.0.0
         *
         * @return bool
         */
        public function is_3d_secure_liability_shift_always_required()
        {
        }
        /**
         * Determines if the passed card type supports 3D Secure.
         *
         * This checks the card types configured in the settings.
         *
         * @since 2.2.0
         *
         * @param string $card_type card type.
         * @return bool
         */
        public function card_type_supports_3d_secure($card_type)
        {
        }
        /**
         * Gets the card types to validate with 3D Secure.
         *
         * @since 2.2.0
         *
         * @return array
         */
        public function get_3d_secure_card_types()
        {
        }
        /**
         * Get a payment nonce for an existing payment token so that 3D Secure verification
         * can be performed on a saved payment method
         *
         * @link https://developers.braintreepayments.com/guides/3d-secure/server-side/php#vaulted-credit-card-nonces
         *
         * @since 2.0.0
         *
         * @param \WC_Braintree_Payment_Method $token payment method.
         * @return string nonce
         */
        public function get_3d_secure_nonce_for_token($token)
        {
        }
        /**
         * Get a payment nonce and bin data for an existing payment token
         * So that 3D Secure verification can be performed on a saved payment method
         *
         * @link https://developers.braintreepayments.com/guides/3d-secure/server-side/php#vaulted-credit-card-nonces
         *
         * @since 3.0.4
         *
         * @param \WC_Braintree_Payment_Method $token payment method.
         * @return array 3d secure nonce and bin data
         */
        public function get_3d_secure_data_for_token($token)
        {
        }
        /**
         * If 3D Secure is enabled, perform validation of the provided nonce. This
         * complements the client-side check and must be performed server-side. Note
         * that this is done in validate_fields() and not a later validation check
         * as 3D Secure transactions also apply when using a saved payment token.
         *
         * @since 3.0.0
         * @see SV_WC_Payment_Gateway_Direct::validate_fields()
         * @return bool true if 3DS validations pass (or 3DS not enabled)
         */
        public function validate_fields()
        {
        }
        /**
         * Disable fail on duplicate payment method for test environment.
         *
         * @param array $options The credit card options.
         * @return array
         */
        public function disable_fail_on_duplicate_payment_method($options)
        {
        }
        /**
         * Adds the Fastlane dashboard link to the enable_fastlane field description.
         *
         * This filter runs after settings are loaded, so we can access merchant ID.
         *
         * @since 3.7.0
         *
         * @param array $form_fields The form fields array.
         * @return array
         */
        public function add_fastlane_dashboard_link($form_fields)
        {
        }
        /**
         * Gets the Fastlane Dashboard URL.
         *
         * @since 3.7.0
         *
         * @return string|null The dashboard URL or null if merchant ID is not available.
         */
        protected function get_fastlane_dashboard_url()
        {
        }
        /**
         * Determines whether PayPal Fastlane is enabled.
         *
         * Fastlane is only available for guest shoppers. Logged-in users will see
         * the regular hosted credit card fields to prevent the store user identity
         * from conflicting with the Fastlane identity.
         *
         * Fastlane is also disabled when the cart contains a subscription and
         * checkout requires manual password creation (i.e. "Allow subscription
         * customers to create an account during checkout" is enabled but "Send
         * password setup link" is not). In that case WooCommerce renders a password
         * field that Fastlane's UI cannot accommodate.
         *
         * @since 3.7.0
         *
         * @return bool
         */
        public function is_fastlane_enabled()
        {
        }
    }
    /**
     * Braintree CreditCard payment method Blocks integration
     *
     * @since 3.0.0
     */
    final class WC_Gateway_Braintree_Credit_Card_Blocks_Support extends \WC_Braintree\WC_Gateway_Braintree_Blocks_Support
    {
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Enqueue Fastlane initializer script on checkout page load.
         *
         * This script initializes Fastlane and renders the watermark below the email field,
         * independent of which payment method is selected.
         */
        public function enqueue_fastlane_initializer()
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
         * Determines if the cart contains a subscription.
         */
        private function cart_contains_subscription()
        {
        }
        /**
         * Gets token data via AJAX.
         */
        public function ajax_get_token_data()
        {
        }
        /**
         * Gets the card icons.
         */
        private function get_icons()
        {
        }
    }
    /**
     * Braintree EPS Gateway Class.
     *
     * @since 3.9.0
     */
    class WC_Gateway_Braintree_EPS extends \WC_Braintree\WC_Gateway_Braintree_Local_Payment
    {
        /**
         * Initialize the gateway.
         *
         * @since 3.9.0
         */
        public function __construct()
        {
        }
        /**
         * Gets the Braintree SDK payment type string.
         *
         * @inheritDoc
         */
        public function get_local_payment_type(): string
        {
        }
        /**
         * Gets the human-readable display name.
         *
         * @inheritDoc
         */
        public function get_local_payment_display_name(): string
        {
        }
        /**
         * Gets the supported billing countries.
         *
         * @inheritDoc
         */
        public function get_supported_countries(): array
        {
        }
        /**
         * Gets the supported currencies.
         *
         * @inheritDoc
         */
        public function get_supported_currencies(): array
        {
        }
        /**
         * Gets the default payment method title.
         *
         * @since 3.9.0
         *
         * @return string
         */
        protected function get_default_title()
        {
        }
        /**
         * Gets the default payment method description.
         *
         * @since 3.9.0
         *
         * @return string
         */
        protected function get_default_description()
        {
        }
    }
    /**
     * Braintree iDEAL Gateway Class.
     *
     * Handles iDEAL payments through Braintree's Local Payment Methods.
     *
     * @since 3.9.0
     */
    class WC_Gateway_Braintree_Ideal extends \WC_Braintree\WC_Gateway_Braintree_Local_Payment
    {
        /**
         * Initialize the gateway.
         *
         * @since 3.9.0
         */
        public function __construct()
        {
        }
        /**
         * Gets the local payment type string used by the Braintree SDK.
         *
         * @since 3.9.0
         *
         * @return string
         */
        public function get_local_payment_type(): string
        {
        }
        /**
         * Gets the human-readable display name for this local payment method.
         *
         * @since 3.9.0
         *
         * @return string
         */
        public function get_local_payment_display_name(): string
        {
        }
        /**
         * Gets the billing countries supported by this local payment method.
         *
         * @since 3.9.0
         *
         * @return string[]
         */
        public function get_supported_countries(): array
        {
        }
        /**
         * Gets the currencies supported by this local payment method.
         *
         * @since 3.9.0
         *
         * @return string[]
         */
        public function get_supported_currencies(): array
        {
        }
        /**
         * Gets the default title, shown to the customer at checkout.
         *
         * @since 3.9.0
         *
         * @return string
         */
        protected function get_default_title()
        {
        }
        /**
         * Gets the default description, shown to the customer at checkout.
         *
         * @since 3.9.0
         *
         * @return string
         */
        protected function get_default_description()
        {
        }
    }
    /**
     * Braintree Local Payment method Blocks integration.
     *
     * Each active LPM gateway gets its own instance of this class, but all
     * instances share the same JS bundle. The shared JS discovers active
     * LPMs via `window.wcBraintreeLocalPayments.gatewayIds` and registers
     * each one as a separate WC Blocks payment method.
     *
     * @since 3.9.0
     */
    final class WC_Gateway_Braintree_Local_Payment_Blocks_Support extends \WC_Braintree\WC_Gateway_Braintree_Blocks_Support
    {
        /**
         * Shared script handle used by all LPM Blocks Support instances.
         *
         * @var string
         */
        private const SCRIPT_HANDLE = 'wc-braintree-local-payments-blocks-integration';
        /**
         * Constructor.
         *
         * @since 3.9.0
         *
         * @param WC_Gateway_Braintree_Local_Payment $gateway The LPM gateway instance.
         */
        public function __construct(\WC_Braintree\WC_Gateway_Braintree_Local_Payment $gateway)
        {
        }
        /**
         * Determines if this payment method should be active for Blocks.
         *
         * Checks that the gateway is enabled and that the store currency is
         * supported. Does NOT check billing country — that is dynamic at
         * checkout and handled by JS `canMakePayment`.
         *
         * @since 3.9.0
         *
         * @return bool
         */
        public function is_active()
        {
        }
        /**
         * Returns an array of scripts/handles to be registered for this payment method.
         *
         * Uses a shared script handle so the JS loads once even when multiple
         * LPM support classes are registered.
         *
         * @since 3.9.0
         *
         * @return array
         */
        public function get_payment_method_script_handles()
        {
        }
        /**
         * Returns an array of key=>value pairs of data made available to the payment methods script.
         *
         * @since 3.9.0
         *
         * @return array
         */
        public function get_payment_method_data()
        {
        }
    }
    /**
     * Braintree MyBank Gateway Class.
     *
     * @since 3.9.0
     */
    class WC_Gateway_Braintree_Mybank extends \WC_Braintree\WC_Gateway_Braintree_Local_Payment
    {
        /**
         * Initialize the gateway.
         *
         * @since 3.9.0
         */
        public function __construct()
        {
        }
        /**
         * Gets the Braintree SDK payment type string.
         *
         * @inheritDoc
         */
        public function get_local_payment_type(): string
        {
        }
        /**
         * Gets the human-readable display name.
         *
         * @inheritDoc
         */
        public function get_local_payment_display_name(): string
        {
        }
        /**
         * Gets the supported billing countries.
         *
         * @inheritDoc
         */
        public function get_supported_countries(): array
        {
        }
        /**
         * Gets the supported currencies.
         *
         * @inheritDoc
         */
        public function get_supported_currencies(): array
        {
        }
        /**
         * Gets the default payment method title.
         *
         * @since 3.9.0
         *
         * @return string
         */
        protected function get_default_title()
        {
        }
        /**
         * Gets the default payment method description.
         *
         * @since 3.9.0
         *
         * @return string
         */
        protected function get_default_description()
        {
        }
        /**
         * Gets the URL to the gateway icon image.
         *
         * Overrides parent to use a PNG icon.
         *
         * @since 3.9.0
         *
         * @return string
         */
        public function get_local_payment_icon_url(): string
        {
        }
    }
    /**
     * Braintree Przelewy24 (P24) Gateway Class.
     *
     * @since 3.9.0
     */
    class WC_Gateway_Braintree_P24 extends \WC_Braintree\WC_Gateway_Braintree_Local_Payment
    {
        /**
         * Initialize the gateway.
         *
         * @since 3.9.0
         */
        public function __construct()
        {
        }
        /**
         * Gets the Braintree SDK payment type string.
         *
         * @inheritDoc
         */
        public function get_local_payment_type(): string
        {
        }
        /**
         * Gets the human-readable display name.
         *
         * @inheritDoc
         */
        public function get_local_payment_display_name(): string
        {
        }
        /**
         * Gets the supported billing countries.
         *
         * @inheritDoc
         */
        public function get_supported_countries(): array
        {
        }
        /**
         * Gets the supported currencies.
         *
         * @inheritDoc
         */
        public function get_supported_currencies(): array
        {
        }
        /**
         * Gets the default payment method title.
         *
         * @since 3.9.0
         *
         * @return string
         */
        protected function get_default_title()
        {
        }
        /**
         * Gets the default payment method description.
         *
         * @since 3.9.0
         *
         * @return string
         */
        protected function get_default_description()
        {
        }
    }
    /**
     * Braintree PayPal Gateway Class
     *
     * @since 3.0.0
     */
    class WC_Gateway_Braintree_PayPal extends \WC_Braintree\WC_Gateway_Braintree
    {
        /** PayPal payment type */
        const PAYMENT_TYPE_PAYPAL = 'paypal';
        /** @var bool whether cart checkout is enabled */
        protected $enable_cart_checkout;
        /** @var bool whether buy now buttons should be added to product pages */
        protected $enable_product_buy_now;
        /** @var bool whether paypal pay later is enabled */
        protected $enable_paypal_pay_later;
        /** @var string button color */
        protected $button_color;
        /** @var string button size */
        protected $button_size;
        /** @var string button shape */
        protected $button_shape;
        /** @var \WC_Braintree\PayPal\Buttons\Abstract_Button[] PayPal button handler instances  */
        protected $button_handlers = [];
        /**
         * Whether this gateway can store credentials.
         *
         * The PayPal gateway is permitted to store its own Braintree connection credentials.
         *
         * @since 3.7.0
         * @return bool
         */
        protected function can_gateway_store_credentials(): bool
        {
        }
        /**
         * Initialize the gateway
         *
         * @since 3.0.0
         */
        public function __construct()
        {
        }
        /**
         * Initializes any PayPal buttons that may be required on the current page.
         *
         * @since 2.3.0
         */
        protected function init_paypal_buttons()
        {
        }
        /**
         * Enqueues the PayPal JS scripts
         *
         * @since 2.1.0
         * @see SV_WC_Payment_Gateway::enqueue_gateway_assets()
         */
        public function enqueue_gateway_assets()
        {
        }
        /**
         * Determines if the current page contains a payment form.
         *
         * @since 2.1.0
         * @return bool
         */
        public function is_payment_form_page()
        {
        }
        /**
         * Add PayPal-specific fields to the admin payment token editor
         *
         * @since 3.2.0
         * @return array
         */
        public function adjust_token_editor_fields()
        {
        }
        /**
         * Initializes the payment form handler.
         *
         * @since 2.4.0
         *
         * @return \WC_Braintree\Payment_Forms\WC_Braintree_PayPal_Payment_Form
         */
        protected function init_payment_form_instance()
        {
        }
        /**
         * Tweak frontend strings so they match PayPal lingo instead of "Bank".
         *
         * Note: "Use a new bank account" is now handled by get_use_new_payment_method_input_html()
         * override in WC_Braintree_PayPal_Payment_Form to avoid affecting other gateways like ACH.
         *
         * @since 3.0.0
         * @param string $translated_text translated text.
         * @param string $raw_text pre-translated text.
         * @param string $text_domain text domain.
         * @return string
         */
        public function tweak_payment_methods_text($translated_text, $raw_text, $text_domain)
        {
        }
        /**
         * Tweak the "Delete" link on the My Payment Methods actions list to "Unlink"
         * which is more semantically correct (and less likely to cause customers
         * to think they are deleting their actual PayPal account)
         *
         * @internal
         *
         * @since 3.0.0
         *
         * @param array             $item individual list item from woocommerce_saved_payment_methods_list.
         * @param \WC_Payment_Token $core_token payment token associated with this method entry.
         *
         * @return array
         */
        public function tweak_my_payment_methods_delete_text($item, $core_token)
        {
        }
        /**
         * Adds any credit card authorization/charge admin fields, allowing the
         * administrator to choose between performing authorizations or charges.
         *
         * Overridden to add the Cart Checkout setting in an appropriate spot.
         *
         * @since 2.1.0
         *
         * @param array $form_fields gateway form fields.
         * @return array
         */
        protected function add_authorization_charge_form_fields($form_fields)
        {
        }
        /**
         * Generates HTML for the PayPal button preview.
         *
         * @since 2.2.0
         *
         * @return string
         */
        protected function generate_button_preview_html()
        {
        }
        /**
         * Gets the URL used to load the PayPal SDK for the button preview.
         *
         * @since 2.5.0
         *
         * @return string
         */
        protected function get_paypal_sdk_url()
        {
        }
        /**
         * Add PayPal method specific form fields, currently:
         *
         * + remove phone/URL dynamic descriptor (does not apply to PayPal)
         *
         * @since 3.0.0
         * @see WC_Gateway_Braintree::get_method_form_fields()
         * @return array
         */
        protected function get_method_form_fields()
        {
        }
        /**
         * Verify that a payment method nonce is present before processing the
         * transaction
         *
         * @since 3.0.0
         * @return bool
         */
        protected function validate_paypal_fields($is_valid)
        {
        }
        /**
         * Gets the PayPal checkout locale based on the WordPress locale
         *
         * @link http://wpcentral.io/internationalization/
         * @link https://developers.braintreepayments.com/guides/paypal/vault/javascript/v2#country-and-language-support
         *
         * @since 2.0.0
         * @return string
         */
        public function get_safe_locale()
        {
        }
        /**
         * Performs a payment transaction for the given order and returns the
         * result
         *
         * @since 3.0.0
         * @see SV_WC_Payment_Gateway_Direct::do_transaction()
         * @param \WC_Order $order the order object.
         * @return \SV_WC_Payment_Gateway_API_Response the response
         */
        protected function do_paypal_transaction(\WC_Order $order)
        {
        }
        /**
         * Get the order note message when a customer saves their PayPal account
         * to their WC account
         *
         * @since 3.0.0
         * @see SV_WC_Payment_Gateway_Direct::get_saved_payment_method_token_order_note()
         * @param \WC_Braintree_Payment_Method $token the payment token being saved.
         * @return string
         */
        protected function get_saved_payment_token_order_note($token)
        {
        }
        /**
         * Adds any gateway-specific transaction data to the order
         *
         * @since 3.0.0
         * @see SV_WC_Payment_Gateway_Direct::add_transaction_data()
         * @param \WC_Order                                     $order the order object.
         * @param \WC_Braintree_API_PayPal_Transaction_Response $response the transaction response.
         */
        public function add_payment_gateway_transaction_data($order, $response)
        {
        }
        /**
         * Builds the Pre-Orders integration class instance.
         *
         * @since 2.4.0
         *
         * @return \WC_Braintree\Integrations\Pre_Orders
         */
        protected function build_pre_orders_integration()
        {
        }
        /** Refund feature ********************************************************/
        /**
         * Adds PayPal-specific data to the order after a refund is performed
         *
         * @since 3.0.0
         * @param \WC_Order                                     $order the order object.
         * @param \WC_Braintree_API_PayPal_Transaction_Response $response the transaction response.
         */
        protected function add_payment_gateway_refund_data(\WC_Order $order, $response)
        {
        }
        /** Getters ***************************************************************/
        /**
         * Gets the array of instantiated button handlers.
         *
         * @since 2.3.0
         *
         * @return \WC_Braintree\PayPal\Buttons\Abstract_Button[]
         */
        public function get_button_handlers()
        {
        }
        /**
         * Get the default payment method title, which is configurable within the
         * admin and displayed on checkout
         *
         * @since 3.0.0
         * @see SV_WC_Payment_Gateway::get_default_title()
         * @return string payment method title to show on checkout
         */
        protected function get_default_title()
        {
        }
        /**
         * Get the default payment method description, which is configurable
         * within the admin and displayed on checkout
         *
         * @since 3.0.0
         * @see SV_WC_Payment_Gateway::get_default_description()
         * @return string payment method description to show on checkout
         */
        protected function get_default_description()
        {
        }
        /**
         * Override the default icon to set a PayPal-specific one
         *
         * @since 3.0.0
         * @return string
         */
        public function get_icon()
        {
        }
        /**
         * Return the PayPal payment method image URL
         *
         * @since 3.0.0
         * @see SV_WC_Payment_Gateway::get_payment_method_image_url()
         * @param string $type unused.
         * @return string the image URL
         */
        public function get_payment_method_image_url($type)
        {
        }
        /**
         * Braintree PayPal acts like a direct gateway
         *
         * @since 3.0.0
         * @return boolean true if the gateway supports authorization
         */
        public function supports_credit_card_authorization()
        {
        }
        /**
         * Braintree PayPal acts like a direct gateway
         *
         * @since 3.0.0
         * @return boolean true if the gateway supports charges
         */
        public function supports_credit_card_charge()
        {
        }
        /**
         * Determines if cart checkout is enabled.
         *
         * @since 2.1.0
         *
         * @return bool
         */
        public function cart_checkout_enabled()
        {
        }
        /**
         * Determines if buy now buttons should be added to the product pages.
         *
         * @since 2.3.0
         *
         * @return bool
         */
        public function product_page_buy_now_enabled()
        {
        }
        /**
         * Determines whether the PayPal Pay Later button is enabled.
         *
         * @since 2.5.0
         *
         * @return bool
         */
        public function is_paypal_pay_later_enabled()
        {
        }
        /**
         * Determines whether PayPal Pay Later is supported.
         *
         * @since 2.5.0
         *
         * @return bool
         */
        public function is_paypal_pay_later_supported()
        {
        }
        /**
         * Gets the configured logo type for the Pay Later messaging component.
         *
         * @since 2.5.0
         *
         * @return string
         */
        public function get_pay_later_messaging_logo_type()
        {
        }
        /**
         * Gets the configured logo position for the Pay Later messaging component.
         *
         * @since 2.5.0
         * @deprecated 3.11.1 Use get_pay_later_messaging_logo_position() instead.
         *
         * @return string
         *
         * typos:disable
         */
        public function get_pay_later_messaging_logo_postion()
        {
        }
        /* typos:enable */
        /**
         * Gets the configured logo position for the Pay Later messaging component.
         *
         * @since 3.11.1
         *
         * @return string
         */
        public function get_pay_later_messaging_logo_position()
        {
        }
        /**
         * Gets the configured text color for the Pay Later messaging component.
         *
         * @since 2.5.0
         *
         * @return string
         */
        public function get_pay_later_messaging_text_color()
        {
        }
        /**
         * Gets disabled funding sources that should not be offer to customers
         *
         * @since 2.6.1
         *
         * @return array
         */
        public function get_disabled_funding_sources()
        {
        }
        /**
         * Determines whether PayPal Debit/Credit Card option should be offered to customers.
         *
         * The Debit/Credit Card should only be shown if the merchant has not enabled Credit Card via Braintree.
         *
         * @since 2.5.0
         *
         * @return bool
         */
        public function is_paypal_card_enabled()
        {
        }
        /**
         * Determines whether the buyer country must be programmatically set or not.
         *
         * When this method returns true, the PayPal SDK will force the buyer country param, which
         * is retrieved automatically by PayPal by default.
         *
         * @since 2.5.0
         *
         * @return bool
         */
        public function should_force_buyer_country_on_loading_sdk()
        {
        }
        /**
         * Gets the configured button color.
         *
         * @since 2.2.0
         *
         * @return string
         */
        public function get_button_color()
        {
        }
        /**
         * Gets the configured button size.
         *
         * @since 2.2.0
         *
         * @return string
         */
        public function get_button_size()
        {
        }
        /**
         * Gets the configured button shape.
         *
         * @since 2.2.0
         *
         * @return string
         */
        public function get_button_shape()
        {
        }
        /**
         * Add Braintree-specific data to the order prior to processing, currently:
         *
         * @since 2.5.0
         * @see SV_WC_Payment_Gateway_Direct::get_order()
         * @param int $order order ID being processed.
         * @return \WC_Order object with payment and transaction information attached
         */
        public function get_order($order)
        {
        }
        /**
         * Gets the standard button sizes provided by the original Checkout.js customization options so that we can set the
         * height param and container width as expected by the new SDK.
         *
         * @see https://developer.paypal.com/docs/archive/checkout/how-to/customize-button/#size
         * @see https://developer.paypal.com/docs/checkout/integration-features/customize-button
         *
         * @since 2.5.0
         * @return array
         */
        public function get_button_sizes()
        {
        }
        /**
         * Gets the button height based on the configured button size.
         *
         * @since 2.5.0
         * @param string $size button size.
         * @return int|null
         */
        public function get_button_height($size)
        {
        }
        /**
         * Gets the button width based on the configured button size.
         *
         * @since 2.5.0
         * @param string $size Button size.
         * @return int|null
         */
        public function get_button_width($size)
        {
        }
        /**
         * Gets the style tag for the button container HTML.
         *
         * @since 2.5.0
         * @return string
         */
        public function get_button_container_style()
        {
        }
        /**
         * Gets the style attributes for the Pay Later Messaging container element.
         *
         * @since 2.5.0
         *
         * @return string
         */
        public function get_pay_later_messaging_style_attributes()
        {
        }
        /**
         * Gets admin params.
         *
         * @internal
         *
         * @since 2.5.0
         * @return array
         */
        protected function get_admin_params()
        {
        }
        /**
         * Gets the specific settings help text for a given country.
         *
         * @since 2.5.0
         *
         * @return string the best help text for the store's country
         */
        protected function get_settings_description_text()
        {
        }
        /**
         * Gets the specific client ID for a given country.
         *
         * @since 2.5.0
         *
         * @param string $country the country code to determine which client ID to be returned.
         * @return string the best client ID for the given country
         */
        protected function get_sandbox_sdk_client_id($country)
        {
        }
    }
    /**
     * Braintree PayPal payment method Blocks integration
     *
     * @since 3.0.0
     */
    final class WC_Gateway_Braintree_PayPal_Blocks_Support extends \WC_Braintree\WC_Gateway_Braintree_Blocks_Support
    {
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Initializes the payment method.
         */
        public function initialize()
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
         * Manually add braintree save tokens to the saved payment methods list.
         *
         * @param array $saved_methods The saved payment methods.
         * @param int   $customer_id The customer ID.
         * @return array $saved_methods Modified saved payment methods.
         */
        public function add_braintree_paypal_saved_payment_methods($saved_methods, $customer_id)
        {
        }
    }
    /**
     * Braintree SEPA Gateway Class
     *
     * @since 3.5.0
     */
    class WC_Gateway_Braintree_SEPA extends \WC_Braintree\WC_Gateway_Braintree
    {
        /** SEPA payment type */
        const PAYMENT_TYPE_SEPA = 'sepa';
        /**
         * Initialize the gateway
         *
         * @since 3.5.0
         */
        public function __construct()
        {
        }
        /**
         * Enqueues SEPA gateway specific scripts.
         *
         * @since 3.5.0
         *
         * @see SV_WC_Payment_Gateway::enqueue_gateway_assets()
         */
        public function enqueue_gateway_assets()
        {
        }
        /**
         * Initializes the payment form handler.
         *
         * @since 3.5.0
         *
         * @return \WC_Braintree\Payment_Forms\WC_Braintree_SEPA_Payment_Form
         */
        protected function init_payment_form_instance()
        {
        }
        /**
         * Gets the method form fields.
         *
         * Overrides parent to exclude Merchant Account IDs section (SEPA only supports EUR).
         *
         * @since 3.5.0
         *
         * @see WC_Gateway_Braintree::get_method_form_fields()
         * @return array
         */
        protected function get_method_form_fields()
        {
        }
        /** Getters ***************************************************************/
        /**
         * Get the default payment method title, which is configurable within the
         * admin and displayed on checkout.
         *
         * @see SV_WC_Payment_Gateway::get_default_title()*
         *
         * @since 3.5.0
         *
         * @return string The payment method title to show on checkout.
         */
        protected function get_default_title()
        {
        }
        /**
         * Get the default payment method description, which is configurable
         * within the admin and displayed on checkout.
         *
         * @see SV_WC_Payment_Gateway::get_default_description()
         *
         * @since 3.5.0
         *
         * @return string The payment method description to show on checkout.
         */
        protected function get_default_description()
        {
        }
    }
    /**
     * Braintree Venmo Gateway Class
     *
     * @since 3.5.0
     */
    class WC_Gateway_Braintree_Venmo extends \WC_Braintree\WC_Gateway_Braintree
    {
        /** Venmo payment type */
        const PAYMENT_TYPE_VENMO = 'venmo';
        /** Payment method usage - single use (for simple products) */
        const PAYMENT_METHOD_USAGE_SINGLE = 'single_use';
        /** Payment method usage - multi use (for subscriptions, enables vaulting) */
        const PAYMENT_METHOD_USAGE_MULTI = 'multi_use';
        /**
         * Venmo button handler instances.
         *
         * @var \WC_Braintree\Venmo\Buttons\Abstract_Button[]
         */
        protected $button_handlers = [];
        /**
         * Initialize the gateway
         *
         * @since 3.5.0
         */
        public function __construct()
        {
        }
        /**
         * Initializes any Venmo buttons that may be required on the current page.
         *
         * This method is called early in the WordPress lifecycle (during __construct), so we
         * initialize all potentially needed handlers. Each handler will determine whether to
         * actually render based on the current page context in their own initialization logic.
         *
         * @since 3.5.0
         */
        protected function init_venmo_buttons()
        {
        }
        /**
         * Enqueues Venmo gateway specific scripts.
         *
         * @since 3.5.0
         *
         * @see SV_WC_Payment_Gateway::enqueue_gateway_assets()
         */
        public function enqueue_gateway_assets()
        {
        }
        /**
         * Initializes the payment form handler.
         *
         * @since 3.5.0
         *
         * @return \WC_Braintree\Payment_Forms\WC_Braintree_Venmo_Payment_Form
         */
        protected function init_payment_form_instance()
        {
        }
        /**
         * Gets the method form fields.
         *
         * Overrides parent to exclude Merchant Account IDs section (Venmo only supports USD)
         * and phone/URL dynamic descriptor fields (Venmo only supports name descriptor).
         *
         * @since 3.5.0
         *
         * @see WC_Gateway_Braintree::get_method_form_fields()
         * @return array
         */
        protected function get_method_form_fields()
        {
        }
        /**
         * Determines if the current page contains a payment form.
         *
         * @since 3.5.0
         * @return bool
         */
        public function is_payment_form_page()
        {
        }
        /**
         * Determines if cart checkout is enabled.
         *
         * @since 3.5.0
         *
         * @return bool
         */
        public function cart_checkout_enabled()
        {
        }
        /**
         * Determines if buy now buttons should be added to the product pages.
         *
         * @since 3.5.0
         *
         * @return bool
         */
        public function product_page_buy_now_enabled()
        {
        }
        /**
         * Gets the array of instantiated button handlers.
         *
         * @since 3.5.0
         *
         * @return \WC_Braintree\Venmo\Buttons\Abstract_Button[]
         */
        public function get_button_handlers()
        {
        }
        /**
         * Gets the default title for the payment method.
         *
         * @since 3.5.0
         *
         * @return string
         */
        protected function get_default_title()
        {
        }
        /**
         * Gets the default description for the payment method.
         *
         * @since 3.5.0
         *
         * @return string
         */
        protected function get_default_description()
        {
        }
        /**
         * Gets the description for the payment method.
         *
         * If we're in checkout and we have authorized Venmo, override the
         * description to guide users to placing the order.
         *
         * @since 3.5.0
         *
         * @return string
         */
        public function get_description()
        {
        }
        /**
         * Tweaks the display of Venmo payment methods in My Account > Payment Methods to set brand info.
         *
         * @since 3.6.0
         *
         * @param array             $item       Payment method list item.
         * @param \WC_Payment_Token $core_token WooCommerce payment token.
         * @return array
         */
        public function set_brand_info_in_payment_method_list($item, $core_token)
        {
        }
        /**
         * Override the default icon to set a Venmo-specific one.
         *
         * @since 3.5.0
         *
         * @return string
         */
        public function get_icon()
        {
        }
        /**
         * Gets the payment method image URL.
         *
         * @since 3.5.0
         *
         * @param string $type The payment method type.
         * @return string
         */
        public function get_payment_method_image_url($type)
        {
        }
        /**
         * Processes a Venmo transaction.
         *
         * @since 3.5.0
         *
         * @param \WC_Order $order The order object.
         * @return \WC_Braintree\API\Responses\Transaction_Response
         */
        protected function do_venmo_transaction(\WC_Order $order)
        {
        }
        /**
         * Validates the name dynamic descriptor for Venmo.
         *
         * Venmo has simpler validation requirements than credit cards/PayPal:
         * - Only alphanumeric characters and +-.  (space included) are allowed
         * - No company*product format required
         * - Maximum 22 characters (though Braintree will truncate as needed)
         *
         * @link https://developer.paypal.com/braintree/docs/reference/request/transaction/sale/php#venmo
         * @since 3.6.0
         *
         * @param string $value Optional. The value to validate. Defaults to the saved setting.
         * @return bool
         */
        public function is_name_dynamic_descriptor_valid($value = '')
        {
        }
        /**
         * Checks if an order contains a subscription.
         *
         * @since 3.6.0
         *
         * @param \WC_Order $order The order object.
         * @return bool
         */
        protected function order_contains_subscription($order)
        {
        }
        /**
         * Checks if the current product is a subscription.
         *
         * @since 3.6.0
         *
         * @return bool
         */
        public function product_is_subscription()
        {
        }
    }
    /**
     * Braintree Venmo payment method Blocks integration
     *
     * @since 3.5.0
     */
    final class WC_Gateway_Braintree_Venmo_Blocks_Support extends \WC_Braintree\WC_Gateway_Braintree_Blocks_Support
    {
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Initializes the payment method.
         */
        public function initialize()
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
         * Manually add braintree save tokens to the saved payment methods list.
         *
         * @param array $saved_methods The saved payment methods.
         * @param int   $customer_id The customer ID.
         * @return array $saved_methods Modified saved payment methods.
         */
        public function add_braintree_venmo_saved_payment_methods($saved_methods, $customer_id)
        {
        }
    }
    /**
     * WooCommerce ACH Direct Debit Payment Token provided by Braintree.
     *
     * Representation of a payment token for ACH Direct Debit accounts.
     *
     * @since 3.7.0
     */
    class WC_Payment_Token_Braintree_ACH extends \WC_Payment_Token
    {
        /** Token type identifier */
        const TOKEN_TYPE = 'Braintree_ACH';
        /**
         * Payment Token Type.
         *
         * @var string
         */
        protected $type = self::TOKEN_TYPE;
        /**
         * ACH Direct Debit payment token data.
         *
         * @var array
         */
        protected $extra_data = ['bank_name' => '', 'last_four' => ''];
        /**
         * Gets the last four digits of the bank account.
         * When in 'view' context, returns formatted string with bank name if available.
         *
         * @since 3.7.0
         * @param string $context What the value is for. Valid values are 'view' and 'edit'.
         * @return string
         */
        public function get_last_four($context = 'view')
        {
        }
        /**
         * Gets the bank name.
         *
         * @since 3.7.0
         * @param string $context What the value is for. Valid values are 'view' and 'edit'.
         * @return string
         */
        public function get_bank_name($context = 'view')
        {
        }
        /**
         * Sets the last four digits of the bank account.
         * Setter accepts 'last4' (from framework) and maps to 'last_four' (in extra_data).
         *
         * @since 3.7.0
         * @param string $last4 Last four digits of the account.
         */
        public function set_last4($last4)
        {
        }
        /**
         * Sets the last four digits of the bank account.
         *
         * @since 3.7.0
         * @param string $last_four Last four digits of the account.
         */
        public function set_last_four($last_four)
        {
        }
        /**
         * Sets the bank name.
         *
         * @since 3.7.0
         * @param string $bank_name Bank name.
         */
        public function set_bank_name($bank_name)
        {
        }
        /**
         * Gets the display name for the payment method.
         *
         * @since 3.7.0
         *
         * @return string Display name for the payment method.
         */
        public function get_nickname()
        {
        }
    }
    /**
     * WooCommerce PayPal Payment Token provided by Braintree.
     *
     * Representation of a payment token for PayPal accounts.
     *
     * @since 2.5.0
     */
    class WC_Payment_Token_Braintree_PayPal extends \WC_Payment_Token
    {
        /** Token type identifier */
        const TOKEN_TYPE = 'Braintree_PayPal';
        /**
         * Payment Token Type.
         *
         * @var string
         */
        protected $type = self::TOKEN_TYPE;
        /**
         * PayPal payment token data.
         *
         * @var array
         */
        protected $extra_data = ['payer_email' => '', 'payer_id' => ''];
    }
    /**
     * WooCommerce Venmo Payment Token provided by Braintree.
     *
     * Representation of a payment token for Venmo accounts.
     *
     * @since 3.6.0
     */
    class WC_Payment_Token_Braintree_Venmo extends \WC_Payment_Token
    {
        /** Token type identifier */
        const TOKEN_TYPE = 'Braintree_Venmo';
        /**
         * Payment Token Type.
         *
         * @var string
         */
        protected $type = self::TOKEN_TYPE;
        /**
         * Venmo payment token data.
         *
         * @var array
         */
        protected $extra_data = ['username' => ''];
        /**
         * Gets the Venmo username.
         *
         * @since 3.6.0
         * @param string $context What the value is for. Valid values are 'view' and 'edit'.
         * @return string
         */
        public function get_username($context = 'view')
        {
        }
    }
}
namespace {
    /**
     * The plugin loader class.
     *
     * @since 2.3.0
     */
    class WC_PayPal_Braintree_Loader
    {
        /** minimum PHP version required by this plugin */
        const MINIMUM_PHP_VERSION = '7.4';
        /** minimum WordPress version required by this plugin */
        const MINIMUM_WP_VERSION = '6.9';
        /** minimum WooCommerce version required by this plugin */
        const MINIMUM_WC_VERSION = '10.9';
        /** SkyVerge plugin framework version used by this plugin */
        const FRAMEWORK_VERSION = '6.2.4';
        /** the plugin name, for displaying notices */
        const PLUGIN_NAME = 'PayPal Enterprise Payments';
        /** @var \WC_PayPal_Braintree_Loader the singleton instance of the class */
        private static $instance;
        /** @var array the admin notices to add */
        public $notices = array();
        /**
         * Constructs the loader.
         *
         * @since 2.3.0
         */
        protected function __construct()
        {
        }
        /**
         * Filter for the woocommerce_braintree_credit_card_settings option.
         *
         * Checks the card_types value of the option to ensure it is an array.
         * If the value isn't set, it's converted to an empty array. If a non-array
         * type is returned, it's converted to an array with the value as the only
         * element.
         *
         * The card_types value is passed through a number of array_*() functions which
         * throw warnings if the value isn't an array.
         *
         * @since 3.0.6
         *
         * @param mixed $option_value The option value as stored in WordPress.
         * @return mixed The modified option value.
         */
        public function ensure_card_types_is_an_array($option_value)
        {
        }
        /**
         * Cloning instances is forbidden due to singleton pattern.
         *
         * @since 2.3.0
         */
        public function __clone()
        {
        }
        /**
         * Unserializing instances is forbidden due to singleton pattern.
         *
         * @since 2.3.0
         */
        public function __wakeup()
        {
        }
        /**
         * Initializes the plugin.
         *
         * @since 2.0.0
         */
        public function init_plugin()
        {
        }
        /**
         * Gets the framework version in namespace form.
         *
         * @since 2.3.0
         *
         * @return string
         */
        protected function get_framework_version_namespace()
        {
        }
        /**
         * Gets the framework version used by this plugin.
         *
         * @since 2.3.0
         *
         * @return string
         */
        protected function get_framework_version()
        {
        }
        /**
         * Checks the server environment and other factors and deactivates plugins as necessary.
         *
         * Based on {@link http://wptavern.com/how-to-prevent-wordpress-plugins-from-activating-on-sites-with-incompatible-hosting-environments}
         *
         * @since 2.3.0
         */
        public function activation_check()
        {
        }
        /**
         * Checks the environment when loading WordPress, just in case the environment changes after activation.
         *
         * @internal
         *
         * @since 2.3.0
         */
        public function check_environment()
        {
        }
        /**
         * Checks the environment for compatibility problems.
         *
         * @since 2.3.0
         *
         * @param bool $during_activation whether this check is during plugin activation
         * @return string|bool the error message if one exists, or false if everything's okay
         */
        public static function get_environment_warning($during_activation = \false)
        {
        }
        /**
         * Adds notices for out-of-date WordPress and/or WooCommerce versions.
         *
         * @internal
         *
         * @since 2.3.0
         */
        public function add_plugin_notices()
        {
        }
        /**
         * Determines if the required plugins are compatible.
         *
         * @since 2.3.0
         *
         * @return bool
         */
        protected function plugins_compatible()
        {
        }
        /**
         * Determines if the WordPress compatible.
         *
         * @since 2.3.0
         *
         * @return bool
         */
        protected function is_wp_compatible()
        {
        }
        /**
         * Determines if the WooCommerce compatible.
         *
         * @since 2.3.0
         *
         * @return bool
         */
        protected function is_wc_compatible()
        {
        }
        /**
         * Deactivates the plugin.
         *
         * @since 2.3.0
         */
        protected function deactivate_plugin()
        {
        }
        /**
         * Determines if the server environment is compatible with this plugin.
         *
         * @since 2.3.0
         *
         * @return bool
         */
        protected function is_environment_compatible()
        {
        }
        /**
         * Gets the message for display when the environment is incompatible with this plugin.
         *
         * @since 2.3.0
         *
         * @return string
         */
        protected function get_environment_message()
        {
        }
        /**
         * Adds an admin notice to be displayed.
         *
         * @since 2.3.0
         *
         * @param string $slug notice slug/ID
         * @param string $class notice HTML class
         * @param string $message notice message
         */
        public function add_admin_notice($slug, $class, $message)
        {
        }
        /**
         * Displays any admin notices added by the plugin loader
         *
         * @internal
         *
         * @since 2.3.0
         */
        public function admin_notices()
        {
        }
        /**
         * Adds the Documentation URI header.
         *
         * @internal
         *
         * @since 2.5.0
         *
         * @param array $headers original plugin headers
         * @return array
         */
        public function add_documentation_header($headers)
        {
        }
        /**
         * Gets the main loader instance.
         *
         * Ensures only one instance can be loaded.
         *
         * @since 2.3.0
         *
         * @return \WC_PayPal_Braintree_Loader
         */
        public static function instance()
        {
        }
        /**
         * Display Warning about Braintree payment method at User delete confirmation screen.
         *
         * @return void
         */
        public function delete_user_warning()
        {
        }
        /**
         * Declare compatibility with Woocommerce features.
         *
         * List of feature -
         *   1. High-Performance Order Storage
         *   2. Product block editor
         *
         * @since 3.1.1 Rename function.
         * @since 3.0.0
         */
        public function declare_woocommerce_feature_compatibility()
        {
        }
        /**
         * Add Braintree PayPal & Credit Card payment method to WooCommerce Blocks.
         *
         * @return void
         * @since 3.0.0
         */
        public function woocommerce_block_support()
        {
        }
        /**
         * Filter callback to add a custom feature setting to the WooCommerce Features page.
         *
         * Adds an "Enable early access PayPal Enterprise Payments methods" option to the WooCommerce
         * Features settings page.
         *
         * @since 3.5.0
         *
         * @param array $settings The WooCommerce Features page settings array.
         * @return array
         */
        public function add_enable_early_access_to_woocommerce_feature_setting($settings)
        {
        }
    }
}
/**
 * WooCommerce Braintree Gateway
 *
 * This source file is subject to the GNU General Public License v3.0
 * that is bundled with this package in the file license.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.html
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@woocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade WooCommerce Braintree Gateway to newer
 * versions in the future. If you wish to customize WooCommerce Braintree Gateway for your
 * needs please refer to http://docs.woocommerce.com/document/braintree/
 *
 * @package   WC-Braintree/Gateway
 * @author    WooCommerce
 * @copyright Copyright: (c) 2016-2020, Automattic, Inc.
 * @license   http://www.gnu.org/licenses/gpl-3.0.html GNU General Public License v3.0
 */
namespace WC_Braintree {
    // end \WC_Braintree
    /**
     * Returns the One True Instance of Braintree
     *
     * @since 2.2.0
     * @return WC_Braintree
     */
    function wc_braintree()
    {
    }
}
namespace {
    /**
     * Required minimums
     */
    \define('WC_PAYPAL_BRAINTREE_MIN_PHP_VER', '7.4.0');
    /**
     * Base plugin file
     */
    \define('WC_PAYPAL_BRAINTREE_FILE', __FILE__);
}