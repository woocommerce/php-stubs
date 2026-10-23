<?php
/**
 * Generated stub declarations for woocommerce-gateway-amazon-payments-advanced 2.4.1.
 * @see https://github.com/woocommerce/php-stubs
 */

/**
 * Admin Related Functionality
 *
 * @package WC_Gateway_Amazon_Pay
 */
/**
 * WC_Amazon_Payments_Advanced_Admin
 */
class WC_Amazon_Payments_Advanced_Admin
{
    /**
     * Plugin's absolute path.
     *
     * @var string
     */
    public $path;
    /**
     * Plugin's settings.
     *
     * @var array
     */
    protected $settings;
    /**
     * Order admin handler instance.
     *
     * @since 1.6.0
     * @var WC_Amazon_Payments_Advanced_Order_Admin
     */
    protected $order_admin;
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Returns the full URL to the plugin's settings page.
     *
     * @return string
     */
    protected function get_settings_url()
    {
    }
    /**
     * Init admin handler.
     *
     * @since 1.6.0
     */
    public function init_order_admin()
    {
    }
    /**
     * Plugin page links
     *
     * @since 1.0.0
     * @version 1.7.3
     *
     * @param array $links Array links.
     */
    public function plugin_links($links)
    {
    }
    /**
     * Get admin notices.
     *
     * @since 1.8.0
     * @version 1.8.0
     *
     * @return array Array of notices.
     */
    protected function get_admin_notices()
    {
    }
    /**
     * Output admin notices (if any).
     *
     * @since 1.8.0
     * @version 1.8.0
     */
    public function admin_notices()
    {
    }
    /**
     * AJAX handler for dismiss notice action.
     *
     * @since 1.8.0
     * @version 1.8.0
     */
    public function ajax_dismiss_notice()
    {
    }
    /**
     * Add scripts to dashboard settings.
     *
     * @param string $hook Admin screen ID.
     *
     * @throws Exception On Errors.
     */
    public function admin_scripts($hook)
    {
    }
    /**
     *  AJAX handler to check if credentials have been set on settings page.
     */
    public function ajax_check_credentials()
    {
    }
    /**
     *  AJAX handler to delete credentials have been set on settings page.
     */
    public function ajax_delete_credentials()
    {
    }
}
/**
 * Amazon Pay Order Admin class.
 *
 * @package WC_Gateway_Amazon_Pay
 */
/**
 * Handle admin orders interface
 */
class WC_Amazon_Payments_Advanced_Order_Admin
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * AJAX handler that performs order actions.
     */
    public function order_actions()
    {
    }
    /**
     * Non AJAX handler that performs order actions.
     */
    public function order_actions_non_ajax()
    {
    }
    /**
     * Do the order action
     *
     * @param  WC_Order $order Order object.
     * @param  string   $id A charge_id, refund_id or charge_permission_id.
     * @param  string   $action Action to be performed.
     * @param  string   $version Version of the order.
     */
    public function do_order_action($order, $id, $action, $version)
    {
    }
    /**
     * Amazon Pay authorization metabox.
     *
     * @param Object           $screen The current screen object.
     * @param WC_Order|WP_Post $order The current post/order object.
     * @return void
     */
    public function meta_box($screen, $order)
    {
    }
    /**
     * Authorization metabox content.
     *
     * @param WC_Order|WP_Post $object The current post/order object.
     * @return void
     */
    public function authorization_box($object)
    {
    }
    /**
     * Turn a status object into a string for a label
     *
     * @param  object $status_details Status details object.
     * @return string
     */
    private function status_details_label($status_details)
    {
    }
    /**
     * Render the Admin meta box
     *
     * @param  WC_Order $order Order object.
     * @param  string   $version Version of the order.
     */
    public function auth_box_render($order, $version)
    {
    }
}
/**
 * Legacy Order Admin Functionality
 *
 * @package WC_Gateway_Amazon_Pay
 */
/**
 * WC_Amazon_Payments_Advanced_Order_Admin_Legacy
 */
class WC_Amazon_Payments_Advanced_Order_Admin_Legacy
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Perform the action.
     *
     * @todo Either return a value or throw exception so that error message
     * can be retrieved by the caller.
     *
     * @since 1.6.0
     *
     * @param WC_Order $order Order object.
     * @param int      $id        Reference ID.
     * @param string   $action    Action to perform.
     * @param string   $version Version of the order.
     */
    public function do_order_action($order, $id, $action, $version)
    {
    }
    /**
     * Wipe states so the value is refreshed.
     *
     * Invoked when refresh link is clicked.
     *
     * @param int $order_id Order ID.
     */
    private function clear_stored_states($order_id)
    {
    }
    /**
     * Get the refresh link.
     *
     * Refresh link in Amazon Pay meta box is used to clear Amazon order state.
     *
     * @since 1.6.0
     *
     * @return string HTML of refresh link with its container
     */
    private function get_refresh_link()
    {
    }
    /**
     * Authorization metabox content.
     *
     * @param  WC_Order $order Order object.
     * @param  string   $version Version of the order.
     */
    public function auth_box_render($order, $version)
    {
    }
}
/**
 * Registers plugin's blocks.
 *
 * @package WC_Gateway_Amazon_Pay\Blocks
 */
/**
 * Backend registration of Amazon Blocks.
 */
class WC_Amazon_Payments_Advanced_Register_Blocks
{
    /**
     * Custom arguments used to identify if a block has
     * - frontend script
     * - frontend style
     * - backend style
     */
    const CUSTOM_ARGS = array('frontend_script', 'backend_style', 'frontend_style');
    /**
     * Amazon Pay Blocks
     */
    const BLOCKS = array('change-address' => array('frontend_script' => \false, 'backend_style' => \false, 'frontend_style' => \false), 'log-out-banner' => array('frontend_script' => \false, 'backend_style' => \false, 'frontend_style' => \true));
    /**
     * Register our hooks.
     */
    public function __construct()
    {
    }
    /**
     * Registers Amazon Pay Blocks.
     *
     * @return void
     */
    public function register_amazon_blocks()
    {
    }
}
/**
 * Amazon Alexa Notifications class.
 *
 * @package WC_Gateway_Amazon_Pay
 */
/**
 * Amazon Alexa Notifications class
 */
class WC_Amazon_Payments_Advanced_Alexa_Notifications
{
    /**
     * Constructor, which registers this instance's enable_alexa_notifications_for_carrier
     * to the $action provided.
     *
     * You can integrate Alexa Notifications in your shipping plugin by calling.
     * do_action( 'woocommerce_amazon_pa_enable_alexa_notifications', $tracking_number, $carrier, $order_id );
     */
    public function __construct()
    {
    }
    /**
     * Enables Alexa Delivery notifications for an Order.
     *
     * For debug purposes you should enable logging for the Amazon Pay Gateway
     * and look the logs Under WooCommerce -> Status -> Logs while testing your
     * integration.
     *
     * $carrier should be supported by Amazon API.
     *
     * @see https://developer.amazon.com/docs/amazon-pay-checkout/setting-up-delivery-notifications.html
     *
     * For a list of supported carriers,
     * @see https://eps-eu-external-file-share.s3.eu-central-1.amazonaws.com/Alexa/Delivery+Notifications/amazon-pay-delivery-tracker-supported-carriers-v2.csv
     *
     * @throws Exception On error, but the functions catches it and logs it.
     *
     * @param mixed      $tracking_number The tracking number provided by the carrier.
     * @param string     $carrier         The carrier code through the shipping is being handled.
     * @param string|int $order_id        The order id which the tracking number refers to.
     * @return void
     */
    public function enable_alexa_notifications_for_carrier($tracking_number, $carrier, $order_id)
    {
    }
}
/**
 * Amazon API abstract class.
 *
 * @package WC_Gateway_Amazon_Pay
 */
/**
 * Amazon Pay API abstract class
 */
abstract class WC_Amazon_Payments_Advanced_API_Abstract
{
    /**
     * Merchant identifier of the Solution Provider (SP).
     *
     * @see https://developer.amazon.com/docs/amazon-pay-api-v2/checkout-session.html#ERL9CA7OsPD
     */
    const AMAZON_PAY_FOR_WOOCOMMERCE_SP_ID = 'A1BVJDFFHQ7US4';
    /**
     * Login App setup - Client ID Retrieval Instruction URLs
     *
     * @var array
     */
    protected static $client_id_instructions = array('us' => 'https://payments.amazon.com/documentation/express/201728550', 'gb' => 'https://amazonpayments.s3.amazonaws.com/documents/Get_Your_Login_with_Amazon_Client_ID_EU_ENG.pdf?ld=APUSLPADefault', 'eu' => 'https://amazonpayments.s3.amazonaws.com/documents/Get_Your_Login_with_Amazon_Client_ID_EU_ENG.pdf?ld=APUSLPADefault');
    /**
     * Language ISO code map to its domain.
     *
     * @var array
     */
    public static $lang_domains_mapping = array('en-GB' => 'co.uk', 'de-DE' => 'de', 'fr-FR' => 'fr', 'it-IT' => 'it', 'es-ES' => 'es', 'en-US' => 'com', 'ja-JP' => 'co.jp');
    /**
     * List of supported currencies.
     * https://pay.amazon.com/uk/help/5BDCWHCUC27485L
     *
     * @var array
     */
    protected static $supported_currencies = array('AUD', 'GBP', 'DKK', 'EUR', 'HKD', 'JPY', 'NZD', 'NOK', 'ZAR', 'SEK', 'CHF', 'USD');
    /**
     * Simple Path registration urls.
     *
     * @var array
     */
    public static $registration_urls = array('us' => 'https://payments.amazon.com/register', 'gb' => 'https://payments-eu.amazon.com/register', 'eu' => 'https://payments-eu.amazon.com/register', 'jp' => 'https://pay.amazon.com/jp/signup');
    /**
     * Simple Path public keys urls.
     *
     * @var array
     */
    public static $get_public_keys_urls = array('us' => 'https://payments.amazon.com/register/getpublickey', 'gb' => 'https://payments-eu.amazon.com/register/getpublickey', 'eu' => 'https://payments-eu.amazon.com/register/getpublickey', 'jp' => '');
    /**
     * Simple Path spIds.
     *
     * @var array
     */
    public static $sp_ids = array('us' => 'A1BVJDFFHQ7US4', 'gb' => 'A3AO8502KEOZS3', 'eu' => 'A3V6YX13IG1QFQ', 'jp' => 'A2EBW2CGZKMGE4');
    /**
     * Simple Onboarding Version.
     *
     * @var int
     */
    public static $onboarding_version = 2;
    /**
     * Get settings
     *
     * @param  string $key Key, if retrieving a single key.
     *
     * @return array|mixed
     */
    public static function get_settings($key = \null)
    {
    }
    /**
     * Get payment region based on a given country.
     *
     * @since 1.6.3
     *
     * @param string $country Country code.
     * @param string $default Default country code. Default to 'us' or 'eu' if
     *                        passed country is in EU union.
     *
     * @return string Payment region
     */
    public static function get_payment_region_from_country($country, $default = 'us')
    {
    }
    /**
     * Get payment regions.
     *
     * @since 1.6.3
     *
     * @return array Payment regions
     */
    public static function get_payment_regions()
    {
    }
    /**
     * Checks whether current payment region supports shop currency.
     *
     * @since 1.8.0
     * @version 1.8.0
     *
     * @return bool Returns true if shop currency is supported by current payment region.
     */
    public static function is_region_supports_shop_currency()
    {
    }
    /**
     * Get location.
     *
     * @deprecated
     */
    public static function get_location()
    {
    }
    /**
     * Get payment region from setting.
     *
     * @return string
     */
    public static function get_region()
    {
    }
    /**
     * Get the label of payment region from setting.
     *
     * @since 1.8.0
     * @version 1.8.0
     * @param  string $region Region, if checking for a specific region. If not defined, will get label for current region.
     *
     * @return string Payment region label.
     */
    public static function get_region_label($region = \null)
    {
    }
    /**
     * Get Login with Amazon App setup URL.
     *
     * @return string
     */
    public static function get_client_id_instructions_url()
    {
    }
    /**
     * Get if amazon keys have been set and validated.
     *
     * @return bool
     */
    public static function get_amazon_keys_set()
    {
    }
    /**
     * Get list of supported currencies.
     *
     * @param bool $filter Filters current woocommerce currency.
     *
     * @return array
     */
    public static function get_supported_currencies($filter = \false)
    {
    }
    /**
     * Returns selected currencies on settings together with native woocommerce currency.
     *
     * @return array
     */
    public static function get_selected_currencies()
    {
    }
    /**
     * Returns the current value for the authorization mode setting.
     *
     * @return array
     */
    public static function get_authorization_mode()
    {
    }
    /**
     * Check if it is a new merchant (new install).
     *
     * @return bool
     */
    public static function is_new_installation()
    {
    }
    /**
     * VAT registered sellers - Obtaining the Billing Address.
     *
     * @see http://docs.developer.amazonservices.com/en_UK/apa_guide/APAGuide_GetAuthorizationStatus.html
     *
     * @param int    $order_id Order ID.
     * @param object $result   Result from API response.
     *
     * @deprecated
     */
    public static function maybe_update_billing_details($order_id, $result)
    {
    }
    /**
     * Remove address fields that have a string value of "undefined".
     *
     * @param SimpleXMLElement $address Address object from Amazon Pay API.
     */
    private static function remove_undefined_strings($address)
    {
    }
    /**
     * Format an Amazon Pay Name for WooCommerce.
     *
     * @param string $name Amazon Pay full name field.
     */
    public static function format_name($name)
    {
    }
    /**
     * Format an Amazon Pay Address DataType for WooCommerce.
     *
     * @see https://payments.amazon.com/documentation/apireference/201752430
     *
     * @param object $address Address object from Amazon Pay API.
     *
     * @return array Address formatted for WooCommerce.
     */
    public static function format_address($address)
    {
    }
    /**
     * Validate API Keys signature
     *
     * @return bool
     */
    public static function validate_api_keys()
    {
    }
}
/**
 * Amazon API class.
 *
 * @package WC_Gateway_Amazon_Pay
 */
/**
 * Amazon Pay API class
 */
class WC_Amazon_Payments_Advanced_API extends \WC_Amazon_Payments_Advanced_API_Abstract
{
    /**
     * Helper to store the current refund being handled
     *
     * @var array
     */
    protected static $amazonpay_sdk_config;
    /**
     * Helper to store the current refund being handled
     *
     * @var \Amazon\Pay\API\Client
     */
    protected static $amazonpay_client;
    /**
     * Set up API V2 SDK.
     *
     * @since 2.0.0
     * @param  bool $fresh Force refresh, or get from cache.
     *
     * @return array Returns SDK configuration
     */
    protected static function get_amazonpay_sdk_config($fresh = \false)
    {
    }
    /**
     * Validate API keys when settings are updated.
     *
     * @since 2.0.0
     *
     * @return bool Returns true if API keys are valid
     *
     * @throws Exception On Errors.
     */
    public static function validate_api_keys()
    {
    }
    /**
     * Enables Alexa Notifications for an order specified in $payload.
     *
     * @param array $payload Data passed to Amazon to Enable delivery notifications on the user's Alexa.
     * @return array
     */
    public static function trigger_alexa_notifications($payload)
    {
    }
    /**
     * Add Amazon reference information in order item response.
     *
     * @since 2.0.0
     *
     * @return WP_Error|bool Error
     */
    public static function validate_api_settings()
    {
    }
    /**
     * Get Amazon Pay SDK Client
     *
     * @since 2.0.0
     *
     * @return Amazon\Pay\API\Client Instance
     */
    protected static function get_client()
    {
    }
    /**
     * Location type detection.
     *
     * @param  object $location Location to check.
     * @return boolean
     */
    private static function location_is_continent($location)
    {
    }
    /**
     * Location type detection.
     *
     * @param  object $location Location to check.
     * @return boolean
     */
    private static function location_is_country($location)
    {
    }
    /**
     * Location type detection.
     *
     * @param  object $location Location to check.
     * @return boolean
     */
    private static function location_is_state($location)
    {
    }
    /**
     * Location type detection.
     *
     * @param  object $location Location to check.
     * @return boolean
     */
    private static function location_is_postcode($location)
    {
    }
    /**
     * Remove string from string letters.
     *
     * @param  string $string String to clean.
     * @return string
     */
    private static function remove_signs($string)
    {
    }
    /**
     * Return shipping restrictions for checkout sessions
     *
     * @return bool|array
     */
    protected static function get_shipping_restrictions()
    {
    }
    /**
     * Create checkout session parameters for button
     *
     * @param  string $redirect_url Redirect URL on success.
     * @return string JSON encoded object
     */
    protected static function create_checkout_session_params($redirect_url = \null)
    {
    }
    /**
     * Create classic checkout session parameters for button.
     *
     * @param string $redirect_url Redirect URL on success.
     * @return array
     */
    public static function create_checkout_session_classic_params($redirect_url = \null)
    {
    }
    /**
     * Get create checkout session config to send to the
     *
     * @param  string $redirect_url Redirect URL on success.
     * @return array
     */
    public static function get_create_checkout_session_config($redirect_url = \null)
    {
    }
    /**
     * Get classic create checkout session config to send to Amazon.
     *
     * @param  array $payload The payload that will be used to create a checkout session.
     * @return array
     */
    public static function get_create_checkout_classic_session_config($payload)
    {
    }
    /**
     * Get Checkout Session Data.
     *
     * @param  string $checkout_session_id Checkout Session Id.
     * @return object Checkout Session from the API
     */
    public static function get_checkout_session_data($checkout_session_id)
    {
    }
    /**
     * Normalize Address Data from the API
     *
     * @param  object $address Object that will be adjusted.
     */
    protected static function normalize_address($address)
    {
    }
    /**
     * Update Checkout Session Data
     *
     * @param  string $checkout_session_id Checkout Session Id.
     * @param  array  $data Data to send to the API.
     * @return object|WP_Error API Response, or WP_Error.
     */
    public static function update_checkout_session_data($checkout_session_id, $data = array())
    {
    }
    /**
     * Complete Checkout session
     *
     * @param  string $checkout_session_id Checkout Session Id.
     * @param  array  $data Data to send to the API.
     * @return object|WP_Error API Response, or WP_Error.
     */
    public static function complete_checkout_session($checkout_session_id, $data = array())
    {
    }
    /**
     * Get Languages available per region
     *
     * @return array
     */
    public static function get_languages_per_region()
    {
    }
    /**
     * Get Charge Permission object
     *
     * @param  string $charge_permission_id Charge Permission ID.
     * @return object|WP_Error API Response, or WP_Error.
     */
    public static function get_charge_permission($charge_permission_id)
    {
    }
    /**
     * Get Charge object
     *
     * @param  string $charge_id Charge ID.
     * @return object|WP_Error API Response, or WP_Error.
     */
    public static function get_charge($charge_id)
    {
    }
    /**
     * Get Refund object
     *
     * @param  string $refund_id Refund ID.
     * @return object|WP_Error API Response, or WP_Error.
     */
    public static function get_refund($refund_id)
    {
    }
    /**
     * Generate UUID to use as idempotency
     *
     * @return string
     */
    private static function generate_uuid()
    {
    }
    /**
     * Capture a Charge
     *
     * @param  string $charge_id Charge ID.
     * @param  array  $data Data to send to the API.
     * @return object|WP_Error API Response, or WP_Error.
     */
    public static function capture_charge($charge_id, $data = array())
    {
    }
    /**
     * Refund a Charge
     *
     * @param  string $charge_id Charge ID.
     * @param  float  $amount Amount to refund.
     * @param  array  $data Data to send to the API.
     * @return object|WP_Error API Response, or WP_Error.
     */
    public static function refund_charge($charge_id, $amount = \null, $data = array())
    {
    }
    /**
     * Cancel a charge
     *
     * @param  string $charge_id Charge ID.
     * @param  string $reason Reason for the cancellation of the charge.
     * @return object|WP_Error API Response, or WP_Error.
     */
    public static function cancel_charge($charge_id, $reason = 'Order Cancelled')
    {
    }
    /**
     * Get Merchant Metadata object
     *
     * @param  int $order_id Order ID.
     * @return array
     */
    public static function get_merchant_metadata($order_id)
    {
    }
    /**
     * Function to handle simulation strings
     *
     * @param  string $type Function being called.
     * @return array
     */
    protected static function get_extra_headers($type)
    {
    }
    /**
     * Create a charge
     *
     * @param  string $charge_permission_id Charge Permission ID.
     * @param  array  $data Data to send to the API.
     * @return object|WP_Error API Response, or WP_Error.
     */
    public static function create_charge($charge_permission_id, $data)
    {
    }
    /**
     * Close Charge Permission
     *
     * @param  string $charge_permission_id Charge Permission ID.
     * @param  string $reason Reason for cancelling the recurring charge permission.
     * @return object|WP_Error API Response, or WP_Error.
     */
    public static function close_charge_permission($charge_permission_id, $reason = 'Subscription Cancelled')
    {
    }
    /**
     * Sanitize the object before sending it to the logs
     *
     * @param  object|array $obj Object to send to the logs.
     * @param  bool         $recursing If we're recursing or not.
     * @return array
     */
    private static function sanitize_remote_response_log($obj, $recursing = \false)
    {
    }
    /**
     * Get URLs from where to get the secret key in seller central, per region.
     *
     * @return array
     */
    public static function get_secret_key_page_urls()
    {
    }
    /**
     * Get URL from where to get the secret key in seller central, for the current region.
     *
     * @return string|bool
     */
    public static function get_secret_key_page_url()
    {
    }
}
/**
 * Main class to handle compatbilities with other plugins.
 *
 * @package WC_Gateway_Amazon_Pay
 */
/**
 * WooCommerce Amazon Pay compats handler.
 *
 * @since 1.6.0
 */
class WC_Amazon_Payments_Advanced_Compat
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Load compat classes and instantiate it.
     */
    public function require_compats()
    {
    }
    /**
     * Load compat classes and instantiate it.
     */
    public function load_compats()
    {
    }
    /**
     * Init Multicurrency hooks
     */
    public function load_multicurrency()
    {
    }
    /**
     * Loads the WooCommerce Block Compatibility Classes,
     * when the WooCommerce Blocks Plugin is active.
     *
     * @return void
     */
    public function load_block_compatibility()
    {
    }
}
/**
 * WC_Amazon_Payments_Advanced_Install Class.
 */
class WC_Amazon_Payments_Advanced_Install
{
    const APA_NEW_INSTALL_OPTION = 'woocommerce_amazon_payments_new_install';
    /**
     * On Amazon pay plugin.
     */
    public static function install()
    {
    }
    /**
     * If it is a fresh install (new merchant), we will log version to be used for back/forward compatibility.
     */
    protected static function log_when_fresh_install()
    {
    }
}
/**
 * Common handling for IPNs.
 *
 * @package WC_Gateway_Amazon_Pay
 */
/**
 * WC_Amazon_Payments_Advanced_IPN_Handler_Abstract
 */
abstract class WC_Amazon_Payments_Advanced_IPN_Handler_Abstract
{
    /**
     * Validate required keys that need to be present in message.
     *
     * @since 1.8.0
     * @version 1.8.0
     *
     * @throws Exception Missing required key in the message.
     *
     * @param array $message Message to check.
     * @param array $keys    Required keys to be present.
     */
    protected function validate_required_keys($message, $keys)
    {
    }
}
/**
 * Amazon Pay IPN handler.
 *
 * @package WC_Gateway_Amazon_Pay
 */
/**
 * Amazon Pay IPN handler.
 *
 * The validation logic of SNS message is borrowed from aws-php-sns-message-validator.
 *
 * @see https://github.com/aws/aws-php-sns-message-validator
 * @see https://pay.amazon.com/us/developer/documentation/lpwa/201985720
 *
 * @since 1.8.0
 */
class WC_Amazon_Payments_Advanced_IPN_Handler extends \WC_Amazon_Payments_Advanced_IPN_Handler_Abstract
{
    /**
     * This constant tells you the signature version that's passed as `SignatureVersion`.
     * For Amazon SNS notifications, Amazon SNS currently supports signature version 1.
     *
     * @see http://docs.aws.amazon.com/sns/latest/dg/SendMessageToHttp.verify.signature.html.
     */
    const SIGNATURE_VERSION_1 = '1';
    /**
     * A pattern that will match all regional SNS endpoints.
     *
     * For example:
     *
     * - sns.<region>.amazonaws.com        (AWS)
     * - sns.us-gov-west-1.amazonaws.com   (AWS GovCloud)
     * - sns.cn-north-1.amazonaws.com.cn   (AWS China)
     *
     * @since 1.8.0
     * @version 1.8.0
     *
     * @var string
     */
    protected $host_pattern = '/^sns\.[a-zA-Z0-9\-]{3,}\.amazonaws\.com(\.cn)?$/';
    /**
     * Required data keys to present in Simple Notification Service (SNS).
     *
     * These keys are used to validate incoming SNS data in IPN request. If
     * one of the key is not present then validation failed. If one of the key
     * is array, it means at least one of the element in the array must be
     * present.
     *
     * @see self::get_message_from_raw_post_data()
     * @see self::validate_required_keys()
     *
     * @since 1.8.0
     * @version 1.8.0
     *
     * @var array
     */
    protected $required_data_keys = array('Message', 'MessageId', 'Timestamp', 'TopicArn', 'Type', 'Signature', array('SigningCertURL', 'SigningCertUrl'), 'SignatureVersion');
    /**
     * Constructor.
     *
     * @since 1.8.0
     * @version 1.8.0
     */
    public function __construct()
    {
    }
    /**
     * Get notify URL.
     *
     * @since 1.8.0
     * @version 1.8.0
     *
     * @return string Notify URL.
     */
    public function get_notify_url()
    {
    }
    /**
     * Retrieves the raw request data (body).
     *
     * `$HTTP_RAW_POST_DATA` is deprecated in PHP 5.6 and removed in PHP 5.7,
     * it's used here for server that has issue with reading `php://input`
     * stream.
     *
     * @since 1.8.0
     * @version 1.8.0
     *
     * @return string Raw request data.
     */
    protected function get_raw_post_data()
    {
    }
    /**
     * Validates given SNS message from post data.
     *
     * @since 1.8.0
     * @version 1.8.0
     *
     * @throws Exception Invalid message.
     *
     * @param array|null $message SNS message.
     */
    protected function validate_message($message)
    {
    }
    /**
     * Checks if a given message in lambda style.
     *
     * @since 1.8.0
     * @version 1.8.0
     *
     * @param array|null $message SNS message.
     *
     * @return bool Returns true if message in lambda style.
     */
    protected function is_lambda_style($message)
    {
    }
    /**
     * Normalize lambda message.
     *
     * @since 1.8.0
     * @version 1.8.0
     *
     * @param array $message SNS message.
     *
     * @return array SNS message.
     */
    protected function normalize_lambda_message($message)
    {
    }
    /**
     * Validate certificate URL.
     *
     * @since 1.8.0
     * @version 1.8.0
     *
     * @throws Exception Invalid certificate URL.
     *
     * @param string $url Cert URL.
     */
    protected function validate_certificate_url($url)
    {
    }
    /**
     * Builds string-to-sign according to the SNS message spec.
     *
     * @since 1.8.0
     * @version 1.8.0
     *
     * @throws Exception Unsupported signature version.
     *
     * @param array $message SNS message.
     *
     * @return string String to sign.
     */
    protected function get_string_to_sign($message)
    {
    }
    /**
     * Get message array from string of raw post data.
     *
     * @since 1.8.0
     * @version 1.8.0
     *
     * @throws Exception Missing handler.
     *
     * @param string $raw_post_data Raw post data.
     *
     * @return array Message.
     */
    protected function get_message_from_raw_post_data($raw_post_data)
    {
    }
    /**
     * Decode raw post data.
     *
     * @since 1.8.0
     * @version 1.8.0
     *
     * @throws Exception Failed to decode the message.
     *
     * @param string $raw_post_data Raw post data.
     *
     * @return array Message.
     */
    protected function decode_raw_post_data($raw_post_data)
    {
    }
    /**
     * Get nice JSON error message from a given JSON error flag.
     *
     * @since 1.8.0
     * @version 1.8.0
     *
     * @param int $json_error JSON error flag.
     *
     * @return string Error message.
     */
    protected function get_json_error_message($json_error)
    {
    }
    /**
     * Check incoming IPN request.
     *
     * @since 1.8.0
     * @version 1.8.0
     * @throws Exception On Errors.
     */
    public function check_ipn_request()
    {
    }
    /**
     * Handle the IPN.
     *
     * At this point, notification message is validated already.
     *
     * @throws Exception Missing handler for the notification type.
     *
     * @since 1.8.0
     * @version 1.8.0
     *
     * @param array $message Parsed SNS message.
     */
    public function handle_notification_ipn_v2($message)
    {
    }
    /**
     * Check if the next hook is scheduled.
     *
     * @param  string $hook Hook to check.
     * @param  array  $args Args to check.
     * @param  string $group Group to check for.
     * @return bool
     */
    private function is_next_scheduled($hook, $args = \null, $group = '')
    {
    }
    /**
     * Schedule the hook for polling.
     *
     * @param  string $id Object ID to check for.
     * @param  string $type Object Type.
     */
    public function schedule_hook($id, $type)
    {
    }
    /**
     * Unschedule the hook for polling.
     *
     * @param  string $id Object ID to check for.
     * @param  string $type Object Type.
     */
    public function unschedule_hook($id, $type)
    {
    }
    /**
     * Simulate an IPN request when polling
     *
     * @param  string $amazon_id Object ID to check for.
     * @param  string $type Object Type.
     */
    public function handle_async_polling($amazon_id, $type)
    {
    }
    /**
     * Safe load XML.
     *
     * @param  string $source  XML input.
     * @param  int    $options Options.
     *
     * @return SimpleXMLElement|bool
     */
    public static function safe_load_xml($source, $options = 0)
    {
    }
}
/**
 * Amazon Pay Merchant Onboarding flow handler.
 * Will handle automatic key exchange from registration process.
 *
 * @package WC_Gateway_Amazon_Pay
 */
/**
 * Amazon Pay Merchant Onboarding flow handler.
 * https://github.com/woocommerce/woocommerce-gateway-amazon-payments-advanced/files/537729/PWA.Merchant.Registration.Integration.Guide_Version.1.0.pdf
 *
 * Class WC_Amazon_Payments_Advanced_Merchant_Onboarding_Handler
 */
class WC_Amazon_Payments_Advanced_Merchant_Onboarding_Handler
{
    /**
     * Our enpoint to receive encrypted keys
     */
    const ENDPOINT_URL = 'wc_gateway_amazon_payments_advanced_merchant_onboarding';
    const DIGEST_ALG = 'sha1';
    const PRIVATE_KEY_BITS = 2048;
    const PRIVATE_KEY_TYPE = 'OPENSSL_KEYTYPE_RSA';
    const KEYS_OPTION_PRIVATE_KEY = 'woocommerce_amazon_payments_advanced_private_key';
    const KEYS_OPTION_TEMP_PRIVATE_KEYS = 'woocommerce_amazon_payments_advanced_temp_private_keys';
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Check Onboarding Request.
     *
     * @throws Exception On errors.
     */
    public function check_onboarding_request()
    {
    }
    /**
     * Decrypt the encryptedKey value from the encrypted credential payload.
     * This gives you the key that was used to encrypt the encryptedPayload value.
     *   a. Base64decode the encryptedKey value from the encrypted credential payload.
     *   b. Use the private decrypt function of the openSSL package (specifying the OPENSSL_PKCS1_OAEP_PADDING algorithm),
     *      to decrypt the result of 2a, passing in the private key that was generated on opening the workflow.
     *
     * @param string $public_key_id Public Key ID.
     *
     * @return string|bool
     * @throws Exception On Errors.
     */
    protected function decrypt_encrypted_public_key_id($public_key_id)
    {
    }
    /**
     * Get Simple path registration URL.
     *
     * @return string Notify URL.
     */
    public function get_simple_path_registration_url()
    {
    }
    /**
     * Retrieves the raw request data (body).
     *
     * `$HTTP_RAW_POST_DATA` is deprecated in PHP 5.6 and removed in PHP 5.7,
     * it's used here for server that has issue with reading `php://input`
     * stream.
     *
     * @since 1.8.0
     * @version 1.8.0
     *
     * @return string Raw request data.
     */
    protected function get_raw_post_data()
    {
    }
    /**
     * Return temporary private keys
     *
     * @return array
     */
    protected function get_temp_private_keys()
    {
    }
    /**
     * The public key generated by the Ecommerce provider or plugin, which is used to encrypt the contents of the key
     * exchange package when supported by the registration workflow. This is an ephemeral 2048 bit RSA public key.
     *
     * @param bool $public Returns public or private key.
     * @return mixed
     * @throws Exception On Errors.
     */
    protected function generate_keys($public = \false)
    {
    }
    /**
     * Destroy public/private key generated for keys exchange.
     */
    public static function destroy_keys()
    {
    }
    /**
     * Gets amazon gateway settings and update them with the new credentials from exchange.
     *
     * @param object $payload Payload received from Amazon.
     */
    protected function save_payload($payload)
    {
    }
    /**
     * Convert key to PEM format for openssl functions
     *
     * @param string $key Key data.
     *
     * @return string
     */
    public function key2pem($key)
    {
    }
    /**
     * Return RSA public key.
     *
     * @param bool $pem_format Wether to return the Key in PEM format.
     * @param bool $reset Wether to reset the private key.
     *
     * @return string
     * @throws Exception On Errors.
     */
    public function get_public_key($pem_format = \false, $reset = \false)
    {
    }
    /**
     * Return RSA private key.
     *
     * @param bool $reset Wether to force reset the private key.
     *
     * @return string
     * @throws Exception On Errors.
     */
    public function get_private_key($reset = \false)
    {
    }
    /**
     * From Incoming Exchange message we need to know which country belong the registration.
     *
     * @param array $headers Headers received.
     *
     * @return string
     */
    protected function get_country_origin_from_header($headers)
    {
    }
    /**
     * Check because getallheaders is only available for apache, we need a fallback in case of nginx or others,
     * http://php.net/manual/es/function.getallheaders.php
     *
     * @return array
     */
    private function get_all_headers()
    {
    }
    /**
     * Apache uses capital, nginx uses not capitalised.
     *
     * @param array $headers Headers received.
     *
     * @return string
     */
    private function get_origin_header($headers)
    {
    }
    /**
     * Get API Migration status.
     */
    public static function get_migration_status()
    {
    }
    /**
     * Update migration status update
     */
    public static function update_migration_status()
    {
    }
    /**
     * Downgrade migration status update
     */
    public static function delete_migration_status()
    {
    }
}
/**
 * Main class WooCommerce Amazon Pat REST API.
 *
 * @package WC_Gateway_Amazon_Pay
 */
/**
 * WooCommerce Amazon Pay REST API class.
 *
 * Expose additional functionalities to WP REST API for order paid with
 * Amazon Pay.
 *
 * @since 1.6.0
 */
class WC_Amazon_Payments_Advanced_REST_API_Controller extends \WC_REST_Controller
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
    protected $rest_base = 'orders/(?P<order_id>[\d]+)/amazon-payments-advanced';
    /**
     * Post type.
     *
     * @var string
     */
    protected $post_type = 'shop_order';
    /**
     * Register the routes for order notes.
     */
    public function register_routes()
    {
    }
    /**
     * Check whether a given request has permission to read the resource.
     *
     * @param  WP_REST_Request $request Full details about the request.
     *
     * @return WP_Error|boolean
     */
    public function get_read_permissions_check($request)
    {
    }
    /**
     * Check whether a given request has permission to edit the resource.
     *
     * @param  WP_REST_Request $request Full details about the request.
     *
     * @return WP_Error|boolean
     */
    public function get_edit_permissions_check($request)
    {
    }
    /**
     * Check whether a given request has permission to create a resource.
     *
     * @param  WP_REST_Request $request Full details about the request.
     *
     * @return WP_Error|boolean
     */
    public function get_create_permissions_check($request)
    {
    }
    /**
     * Check whether a given request has permission to create a resource.
     *
     * @param  WP_REST_Request $request Full details about the request.
     *
     * @return WP_Error|boolean
     */
    public function get_delete_permissions_check($request)
    {
    }
    /**
     * Check whether a given request has permission to perform action at the resource.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @param string          $action Action (create, read, edit, or delete).
     *
     * @return WP_Error|boolean
     */
    protected function get_permissions_check($request, $action)
    {
    }
    /**
     * Get error message for insufficient permission accessing or modifying the
     * resource.
     *
     * @since 1.7.0
     *
     * @param string $action Action (create, read, edit, or delete).
     *
     * @return string Error message.
     */
    protected function get_permissions_check_error_message($action)
    {
    }
    /**
     * Get reference state.
     *
     * @param WP_REST_Request $request Request instance.
     *
     * @return array|WP_Error|WP_REST_Response
     */
    public function get_reference_state($request)
    {
    }
    /**
     * Authorize specified order.
     *
     * @param WP_REST_Request $request WP HTTP request.
     *
     * @return WP_Error|WP_HTTP_Response WP_Error if response generated an error,
     *                                   WP_HTTP_Response if response is already
     *                                   an instance, otherwise returns a new
     *                                   WP_REST_Response instance.
     */
    public function authorize($request)
    {
    }
    /**
     * Authorize and capture specified order.
     *
     * @param WP_REST_Request $request WP HTTP request.
     *
     * @return WP_Error|WP_HTTP_Response WP_Error if response generated an error,
     *                                   WP_HTTP_Response if response is already
     *                                   an instance, otherwise returns a new
     *                                   WP_REST_Response instance.
     */
    public function authorize_and_capture($request)
    {
    }
    /**
     * Authorize specified order.
     *
     * @param int   $order_id       Order Id.
     * @param array $authorize_args Optional args to WC_Amazon_Payments_Advanced_API_Legacy::authorize.
     *
     * @return WP_Error|WP_HTTP_Response WP_Error if response generated an error,
     *                                   WP_HTTP_Response if response is already
     *                                   an instance, otherwise returns a new
     *                                   WP_REST_Response instance.
     */
    protected function authorize_order_v1($order_id, $authorize_args = array())
    {
    }
    /**
     * Close the authorization of specified order.
     *
     * @param WP_REST_Request $request WP HTTP request.
     *
     * @return WP_Error|WP_HTTP_Response WP_Error if response generated an error,
     *                                   WP_HTTP_Response if response is already
     *                                   an instance, otherwise returns a new
     *                                   WP_REST_Response instance.
     */
    public function close_authorization($request)
    {
    }
    /**
     * Capture specified order.
     *
     * @param WP_REST_Request $request WP HTTP request.
     *
     * @return WP_Error|WP_HTTP_Response WP_Error if response generated an error,
     *                                   WP_HTTP_Response if response is already
     *                                   an instance, otherwise returns a new
     *                                   WP_REST_Response instance.
     */
    public function capture($request)
    {
    }
    /**
     * Refund specified order.
     *
     * @param WP_REST_Request $request WP HTTP request.
     *
     * @return WP_Error|WP_HTTP_Response WP_Error if response generated an error,
     *                                   WP_HTTP_Response if response is already
     *                                   an instance, otherwise returns a new
     *                                   WP_REST_Response instance.
     */
    public function refund($request)
    {
    }
    /**
     * Get error from request when no reference_id from specified order.
     *
     * @param WC_Order $order Order object.
     *
     * @return null|WP_Error Null if there's no error in the request.
     */
    protected function get_missing_reference_id_request_error($order)
    {
    }
    /**
     * Get error from request when no authorization_id from specified order.
     *
     * @param WC_Order $order Order object.
     *
     * @return null|WP_Error Null if there's no error in the request.
     */
    protected function get_missing_authorization_id_request_error($order)
    {
    }
    /**
     * Get error from request when no capture_id from specified order.
     *
     * @param WC_Order $order Order object.
     *
     * @return null|WP_Error Null if there's no error in the request.
     */
    protected function get_missing_capture_id_request_error($order)
    {
    }
    /**
     * Check whether order is valid to proceed.
     *
     * @param int $order_id Order post ID.
     *
     * @return WP_Post|WP_Error Post object if it's valid, WP_Error if it's invalid.
     */
    protected function is_valid_order($order_id)
    {
    }
}
/**
 * Utils class.
 *
 * @package WC_Gateway_Amazon_Pay
 */
/**
 * Implement Helper methods.
 */
class WC_Amazon_Payments_Advanced_Utils
{
    /**
     * Returns the edit order's screen id.
     *
     * Takes into consideration if HPOS is enabled or not.
     *
     * @return string
     */
    public static function get_edit_order_screen_id()
    {
    }
}
/**
 * Abstract Gateway Class with common implementations between v1 and v2
 *
 * @package WC_Gateway_Amazon_Pay
 */
/**
 * WC_Gateway_Amazon_Payments_Advanced_Abstract
 */
abstract class WC_Gateway_Amazon_Payments_Advanced_Abstract extends \WC_Payment_Gateway
{
    /**
     * ISO region codes for JAPAN mapped to Japanese.
     *
     * Used to pass the region in Japanese to the Amazon API.
     *
     * Specifically requested by Amazon's JP Team.
     */
    const JP_REGION_CODE_MAP = array('JP01' => '北海道', 'JP02' => '青森県', 'JP03' => '岩手県', 'JP04' => '宮城県', 'JP05' => '秋田県', 'JP06' => '山形県', 'JP07' => '福島県', 'JP08' => '茨城県', 'JP09' => '栃木県', 'JP10' => '群馬県', 'JP11' => '埼玉県', 'JP12' => '千葉県', 'JP13' => '東京都', 'JP14' => '神奈川県', 'JP15' => '新潟県', 'JP16' => '富山県', 'JP17' => '石川県', 'JP18' => '福井県', 'JP19' => '山梨県', 'JP20' => '長野県', 'JP21' => '岐阜県', 'JP22' => '静岡県', 'JP23' => '愛知県', 'JP24' => '三重県', 'JP25' => '滋賀県', 'JP26' => '京都府', 'JP27' => '大阪府', 'JP28' => '兵庫県', 'JP29' => '奈良県', 'JP30' => '和歌山県', 'JP31' => '鳥取県', 'JP32' => '島根県', 'JP33' => '岡山県', 'JP34' => '広島県', 'JP35' => '山口県', 'JP36' => '徳島県', 'JP37' => '香川県', 'JP38' => '愛媛県', 'JP39' => '高知県', 'JP40' => '福岡県', 'JP41' => '佐賀県', 'JP42' => '長崎県', 'JP43' => '熊本県', 'JP44' => '大分県', 'JP45' => '宮崎県', 'JP46' => '鹿児島県', 'JP47' => '沖縄県');
    /**
     * Amazon Private Key
     *
     * @var string
     */
    protected $private_key;
    /**
     * Debug enabled status
     *
     * @var bool
     */
    protected $debug;
    /**
     * Payment Region
     *
     * @var string
     */
    protected $payment_region;
    /**
     * Merchant ID
     *
     * @var string
     */
    protected $merchant_id;
    /**
     * Store ID
     *
     * @var string
     */
    protected $store_id;
    /**
     * Public Key ID
     *
     * @var string
     */
    protected $public_key_id;
    /**
     * Sandbox Environment
     *
     * @var string
     */
    protected $sandbox;
    /**
     * Capture Mode
     *
     * @var string
     */
    protected $payment_capture;
    /**
     * Authorization Mode
     *
     * @var string
     */
    protected $authorization_mode;
    /**
     * Redirect Authentication (v1)
     *
     * @var string
     */
    protected $redirect_authentication;
    /**
     * Seller ID (v1)
     *
     * @var string
     */
    protected $seller_id;
    /**
     * App Client ID (v1)
     *
     * @var string
     */
    protected $app_client_id;
    /**
     * MWS Access Key (v1)
     *
     * @var string
     */
    protected $mws_access_key;
    /**
     * MWS Secret Key (v1)
     *
     * @var string
     */
    protected $secret_key;
    /**
     * Enable Login App (v1)
     *
     * @var string
     */
    protected $enable_login_app;
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Gateway Settings Init
     *
     * @since 2.3.4
     */
    public function gateway_settings_init()
    {
    }
    /**
     * Get Amazon logout URL.
     *
     * @since 1.6.0
     * @param  string $url URL to logout from.
     *
     * @return string Amazon logout URL
     */
    public function get_amazon_logout_url($url = \null)
    {
    }
    /**
     * Get Amazon Payments Checkout URL
     *
     * @return string
     */
    public function get_amazon_payments_checkout_url()
    {
    }
    /**
     * Remove Amazon Payments Checkout URL from the current URL
     *
     * @return string
     */
    public function get_amazon_payments_clean_logout_url()
    {
    }
    /**
     * Get transaction URL format.
     *
     * @since 1.6.0
     *
     * @return string URL format
     */
    public function get_transaction_url_format()
    {
    }
    /**
     * Define user set variables.
     */
    public function load_settings()
    {
    }
    /**
     * Init payment gateway form fields
     */
    public function get_form_fields()
    {
    }
    /**
     * Generate Custom HTML.
     *
     * @param  string $id Field ID.
     * @param  array  $conf Field configuration.
     * @return string
     */
    public function generate_custom_html($id, $conf)
    {
    }
    /**
     * Generate Text Input HTML.
     *
     * @param string $key Field key.
     * @param array  $data Field data.
     * @return string
     */
    public function generate_hidden_masked_html($key, $data)
    {
    }
    /**
     * Get field value.
     *
     * @param string $key Field key.
     * @param array  $value Field value.
     * @return string
     */
    public function validate_hidden_masked_field($key, $value)
    {
    }
    /**
     * Admin Panel Options
     * - Options for bits like 'title' and availability on a country-by-country basis
     */
    public function admin_options()
    {
    }
    /**
     * Unset keys json box.
     *
     * @return bool|void
     */
    public function process_admin_options()
    {
    }
    /**
     * Process settings in a file
     *
     * @param array $import_file PHP $_FILES (or similar) entry.
     * @param  bool  $clean_post Wether to clean the post or not.
     */
    protected function process_settings_from_file($import_file, $clean_post = \false)
    {
    }
    /**
     * Save private key.
     *
     * @param string $private_key Private key PEM string.
     */
    protected function save_private_key($private_key)
    {
    }
    /**
     * Validate api keys.
     */
    public function validate_api_keys()
    {
    }
    /**
     * Checkout Button
     *
     * Triggered from the 'woocommerce_proceed_to_checkout' action.
     *
     * @param  bool   $echo Wether to echo or not.
     * @param  string $elem HTML tag to render.
     * @param  string $id   The id attribute to provide the HTML tag with.
     * @return bool|string|void
     */
    public function checkout_button($echo = \true, $elem = 'div', $id = 'pay_with_amazon')
    {
    }
    /**
     * Classic Checkout button
     *
     * Triggered from 'woocommerce_after_checkout_form' and 'woocommerce_pay_order_after_submit'.
     *
     * @param bool   $echo Wether to echo or not.
     * @param string $elem HTML tag to render.
     * @return bool|string|void
     */
    public function classic_integration_button($echo = \true, $elem = 'div')
    {
    }
    /**
     * Remove amazon gateway.
     *
     * @param array $gateways Gateways registered.
     *
     * @return array
     */
    public function remove_amazon_gateway($gateways)
    {
    }
    /**
     * Remove all gateways except amazon
     *
     * @param array $gateways List of payment methods.
     *
     * @return array List of payment methods.
     */
    public function remove_gateways($gateways)
    {
    }
    /**
     * Override billing fields when checking out with Amazon.
     *
     * @param array $fields billing fields.
     */
    public function override_billing_fields($fields)
    {
    }
    /**
     * Override address fields when checking out with Amazon.
     *
     * @param array $fields default address fields.
     */
    public function override_shipping_fields($fields)
    {
    }
    /**
     * Init common hooks on checkout_init hook
     */
    public function checkout_init_common()
    {
    }
    /**
     * Check if the v1 settings are configured
     *
     * @return bool
     */
    public function is_v1_configured()
    {
    }
    /**
     * Checks if there's settings for v1
     *
     * @return bool
     */
    public function has_v1_settings()
    {
    }
    /**
     * Checks if site has other gateways enabled.
     *
     * @return bool
     */
    public function has_other_gateways_enabled()
    {
    }
    /**
     * Returns if the classic integration is enabled.
     *
     * @return boolean
     */
    public function is_classic_enabled()
    {
    }
    /**
     * Returns if the mini-cart button placement is enabled.
     *
     * @return boolean
     */
    protected function is_mini_cart_button_enabled()
    {
    }
    /**
     * Returns if the product button placement is enabled.
     *
     * @return boolean
     */
    protected function is_product_button_enabled()
    {
    }
    /**
     * Returns if the user is using woo blocks.
     *
     * @return boolean
     */
    protected function using_woo_blocks()
    {
    }
}
/**
 * Gateway class.
 *
 * @package WC_Gateway_Amazon_Pay
 */
/**
 * Implement payment method for Amazon Pay.
 */
class WC_Gateway_Amazon_Payments_Advanced extends \WC_Gateway_Amazon_Payments_Advanced_Abstract
{
    /**
     * Cached object for the checkout session
     *
     * @var object
     */
    protected $checkout_session;
    /**
     * Helper to store the current refund being handled
     *
     * @var WC_Order_Refund
     */
    protected $current_refund;
    /**
     * WooCommerce's session keys that get deleted during empty_cart().
     *
     * @var array
     */
    protected static $session_keys = array('cart', 'cart_totals', 'applied_coupons', 'coupon_discount_totals', 'coupon_discount_tax_totals', 'removed_cart_contents', 'order_awaiting_payment');
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Amazon Pay is available if the following conditions are met (on top of
     * WC_Payment_Gateway::is_available).
     *
     * 1) Merchant id exists.
     * 2) Region supports selected currency.
     * 2) In checkout pay page OR in product page with the product button placement enabled OR the mini-cart button placement enabled.
     *
     * @return bool
     */
    public function is_available()
    {
    }
    /**
     * Returns Amazon Pay availability.
     *
     * @return bool
     */
    protected function get_availability()
    {
    }
    /**
     * Has fields.
     *
     * @return bool
     */
    public function has_fields()
    {
    }
    /**
     * Payment form on checkout page
     */
    public function payment_fields()
    {
    }
    /**
     * Load handlers for cart and orders after WC Cart is loaded.
     */
    public function init_handlers()
    {
    }
    /**
     * Add scripts
     */
    public function scripts()
    {
    }
    /**
     * Returns the params used by JS.
     *
     * @return array
     */
    protected function get_js_params()
    {
    }
    /**
     * Actually enqueue scripts if needed.
     */
    public function enqueue_scripts()
    {
    }
    /**
     * Get button placement string (to send to the JS)
     *
     * @return string Either Cart, Checkout or Other
     */
    protected function get_current_placement()
    {
    }
    /**
     * Get regional version of the checkout.js script
     *
     * @return string URL of the script
     */
    protected function get_region_script()
    {
    }
    /**
     * Get ledger currency
     *
     * @return bool|string Returns the currency code for the region ledger, or false if the region is invalid.
     */
    protected function get_ledger_currency()
    {
    }
    /**
     * Display payment request button separator.
     *
     * @since 2.0.0
     */
    public function display_amazon_pay_button_separator_html()
    {
    }
    /**
     * Will maybe create the buyer index table.
     */
    public function maybe_create_index_table()
    {
    }
    /**
     * Gets a customer ID from the buyer ID
     *
     * @param  mixed $buyer_id Buyer ID.
     * @return bool|int The Customer ID
     */
    public function get_customer_id_from_buyer($buyer_id)
    {
    }
    /**
     * Stores in the index the buyer ID for a specific Customer ID.
     *
     * @param  string $buyer_id Buyer ID.
     * @param  int    $customer_id WC Customer ID.
     * @return bool True on success, false on failure.
     */
    public function set_customer_id_for_buyer($buyer_id, $customer_id)
    {
    }
    /**
     * Add filter that will self remove and will validate data entered to validate ownership of an account already created.
     */
    public function signal_account_hijack()
    {
    }
    /**
     * Validate data entered to verify ownership of an account already created.
     *
     * @throws Exception When there's an error.
     *
     * @param  int $customer_id WC Customer ID.
     * @return int Return the customer id
     */
    public function handle_account_registration($customer_id)
    {
    }
    /**
     * Generate the HTML for the extra fields required for validation
     *
     * @param  string $html HTML to be rendered.
     * @return string
     */
    public function print_validate_button($html)
    {
    }
    /**
     * Initialize hooks when on checkout
     *
     * @param  WC_Checkout $checkout WC_Checkout instance.
     */
    public function checkout_init($checkout)
    {
    }
    /**
     * Prints the Amazon Pay button on the mini cart.
     *
     * When the setting is on and there are products in cart.
     *
     * @hooked on 'woocommerce_widget_shopping_cart_buttons'
     *
     * @return void
     */
    public function maybe_separator_and_checkout_button()
    {
    }
    /**
     * Prints the Amazon Pay button on the product page when the setting is on.
     *
     * @hooked on 'woocommerce_single_product_summary' on 35 priority
     *
     * @return void
     */
    public function maybe_separator_and_checkout_button_single_product()
    {
    }
    /**
     * Checkout Message
     */
    public function checkout_message()
    {
    }
    /**
     * Print logout notice at the top of the checkout.
     */
    public function logout_checkout_message()
    {
    }
    /**
     * Returns the checkout session key to use
     *
     * @return string
     */
    protected function get_checkout_session_key()
    {
    }
    /**
     * Actually logout the user from Amazon.
     */
    protected function do_logout()
    {
    }
    /**
     * Signal a force refresh of the checkout session is required.
     *
     * @param  string $reason Reason to do the refresh for.
     */
    protected function do_force_refresh($reason)
    {
    }
    /**
     * Returns the reason a force refresh is required.
     *
     * @return null|string Null if there's no reason, or the reason string.
     */
    protected function get_force_refresh()
    {
    }
    /**
     * Remove the signal for a force refresh.
     */
    protected function unset_force_refresh()
    {
    }
    /**
     * Check if we need to force refresh.
     *
     * @return bool True if we need to force refresh, false if not.
     */
    protected function need_to_force_refresh()
    {
    }
    /**
     * Handle the Amazon Payments actions (login, logout, return)
     */
    public function maybe_handle_apa_action()
    {
    }
    /**
     * Get the checkout session id
     *
     * @return bool|string False if no session is active, the session id otherwise.
     */
    public function get_checkout_session_id()
    {
    }
    /**
     * Get the checkout session object
     *
     * @param  mixed       $force Wether to force read from amazon, or use the cached data if available.
     * @param  null|string $checkout_session_id The checkout session id if it exists.
     * @return object the Checkout Session Object from Amazon API
     */
    public function get_checkout_session($force = \false, $checkout_session_id = \null)
    {
    }
    /**
     * Check wether the user is logged in to amazon or not.
     *
     * @return bool
     */
    protected function is_logged_in()
    {
    }
    /**
     * Hijack the checkout fields when logged in to amazon.
     *
     * @param  WC_Checkout $checkout WC_Checkout instance.
     */
    public function hijack_checkout_fields($checkout)
    {
    }
    /**
     * Alter account checkout field.
     *
     * @since 1.7.0
     *
     * @param WC_Checkout $checkout WC_Checkout instance.
     */
    protected function hijack_checkout_field_account($checkout)
    {
    }
    /**
     * Adds hidden class to checkout field
     *
     * @param array $field reference to the field to be hidden.
     */
    protected function add_hidden_class_to_field(&$field)
    {
    }
    /**
     * Adds hidden class to checkout fields based on a list
     *
     * @param array $checkout_fields reference to checkout fields.
     * @param array $field_list fields to be hidden.
     */
    protected function add_hidden_class_to_fields(&$checkout_fields, $field_list)
    {
    }
    /**
     * Render the selected payment method information widget.
     *
     * @param  null|object $checkout_session Checkout session object to use.
     */
    public function display_payment_method_selected($checkout_session = \null)
    {
    }
    /**
     * Returns whether there are payment preferences set in the checkout
     * session object.
     *
     * @param  object $checkout_session The active checkout session.
     * @return boolean
     */
    public function has_payment_preferences($checkout_session = \null)
    {
    }
    /**
     * Returns the selected payment method from Amazon.
     *
     * @param object $checkout_session The active checkout session.
     * @return string
     */
    public function get_selected_payment_label($checkout_session = \null)
    {
    }
    /**
     * Render billing address information widget
     *
     * @param  null|object $checkout_session Checkout session object to use.
     */
    public function display_billing_address_selected($checkout_session = \null)
    {
    }
    /**
     * Render shipping address information widget.
     *
     * @param  null|object $checkout_session Checkout session object to use.
     */
    public function display_shipping_address_selected($checkout_session = \null)
    {
    }
    /**
     * Render layout for Amazon Checkout
     */
    public function display_amazon_customer_info()
    {
    }
    /**
     * Get a WC Compatible version of address data from the current checkout session.
     *
     * @return array
     */
    protected function get_woocommerce_data()
    {
    }
    /**
     * Filters the session data and replaces relevant data with information from the Checkout Session
     *
     * @param  array $data Data from WooCommerce.
     * @return array
     */
    public function use_checkout_session_data($data)
    {
    }
    /**
     * Filter a single value for session data.
     *
     * @param  mixed $ret Previous value.
     * @param  mixed $input Field being retrieved.
     * @return mixed
     */
    public function use_checkout_session_data_single($ret, $input)
    {
    }
    /**
     * Checks that a phone has been provided when using Amazon Pay "Classic"
     *
     * @param array    $data   The submitted user data.
     * @param WP_Error $errors Validation errors.
     * @return void
     */
    public function classic_validation($data, $errors)
    {
    }
    /**
     * Process payment.
     *
     * @version 2.0.0
     *
     * @throws Exception On errors.
     *
     * @param int $order_id Order ID.
     */
    public function process_payment($order_id)
    {
    }
    /**
     * Handle the return from amazon after a confirmed checkout.
     *
     * @param string $checkout_session_id The checkout session id if provided.
     * @return void
     */
    public function handle_return($checkout_session_id = '')
    {
    }
    /**
     * Log a change to the charge status stored in an order.
     *
     * @param  WC_Order           $order Order object.
     * @param  null|string|object $charge Optional. Can be the charge_id, or the charge object from the amazon API.
     */
    public function log_charge_status_change($order, $charge = \null)
    {
    }
    /**
     * Log a change to the charge permission status stored in an order.
     *
     * @param  WC_Order           $order Order object.
     * @param  null|string|object $charge_permission Optional. Can be the charge_permission_id, or the charge permission object from the amazon API.
     * @return null|string Returns null on error, or the new status (even if it's the same as the old one).
     */
    public function log_charge_permission_status_change($order, $charge_permission = \null)
    {
    }
    /**
     * Adds a note to an order stating the status change for a charge permission
     *
     * @param  WC_Order $order Order object.
     * @param  string   $charge_permission_id Charge Permission ID.
     * @param  string   $new_status New status.
     */
    public function add_status_change_note($order, $charge_permission_id, $new_status)
    {
    }
    /**
     * Render tag that will be read in the browser to update data in the JS environment.
     *
     * @param string $id The value to provide the id attribute of the script with.
     * @return void
     */
    public function update_js($id = '')
    {
    }
    /**
     * Get Product Type used on the Amazon button. This depends on wether the payment needs shipping or not.
     *
     * @return string Either PayAndShip or PayOnly.
     */
    public function get_current_cart_action()
    {
    }
    /**
     * Product Type used on the Amazon Pay button. Depends to whether the product needs shipping or not.
     *
     * @return string Either PayAndShip or PayOnly.
     */
    public function get_current_product_action()
    {
    }
    /**
     * Render the amazon button when the session is not valid anymore.
     *
     * @param  string $message Message to render along with the button.
     * @param  bool   $col_wrap Wether to wrap the button in columns or not.
     */
    public function render_login_button_again($message = \null, $col_wrap = \true)
    {
    }
    /**
     * Validate checkout session with desired current config
     *
     * @param  mixed $current Compare source.
     * @param  mixed $desired Optional. Desired values to compare against.
     * @param  mixed $path    Optional. Current property path, to add to the error data. Used recursively.
     * @return bool|WP_Error
     */
    private function validate_session_properties($current, $desired = \null, $path = array())
    {
    }
    /**
     * Check wether the checkout session is still valid.
     *
     * @param  object $checkout_session Checkout Session Object from the Amazon API.
     * @return bool|WP_Error True if valid, WP_Error in case of error.
     */
    public function is_checkout_session_still_valid($checkout_session)
    {
    }
    /**
     * Maybe render login button again, if the session is not valid anymore
     *
     * @param  object $checkout_session Checkout Session Object from the Amazon API.
     * @param  bool   $wrap Wether to wrap the button in columns or not.
     */
    public function maybe_render_login_button_again($checkout_session, $wrap = \true)
    {
    }
    /**
     * Filter billing fields
     *
     * @param  array $fields Billing fields from WooCommerce.
     * @return array
     */
    public function override_billing_fields($fields)
    {
    }
    /**
     * Filter shipping fields
     *
     * @param  array $fields Shipping fields from WooCommerce.
     * @return array
     */
    public function override_shipping_fields($fields)
    {
    }
    /**
     * Unset keys json box.
     */
    public function process_admin_options()
    {
    }
    /**
     * Standarize status and it's reasons from a Status Details object from the Amazon API
     *
     * @param  object $status_details Amazon status details.
     * @return object
     */
    private function format_status_details($status_details)
    {
    }
    /**
     * Get cached charge permission status for an order
     *
     * @param  WC_Order $order Order object.
     * @param  bool     $read_only If true, will not fetch status from API. Defaults to false.
     * @return object
     */
    public function get_cached_charge_permission_status($order, $read_only = \false)
    {
    }
    /**
     * Refresh cached charge permission status for an order
     *
     * @param  WC_Order $order Order object.
     * @param  object   $charge_permission Optional. Charge permission object from the Amazon API.
     * @return object
     */
    public function refresh_cached_charge_permission_status($order, $charge_permission = \null)
    {
    }
    /**
     * Get cached charge status for an order
     *
     * @param  WC_Order $order Order object.
     * @param  bool     $read_only If true, will not fetch status from API. Defaults to false.
     * @return object
     */
    public function get_cached_charge_status($order, $read_only = \false)
    {
    }
    /**
     * Refresh cached charge status for an order
     *
     * @param  WC_Order $order Order object.
     * @param  object   $charge Optional. Charge object from the Amazon API.
     * @return object
     */
    public function refresh_cached_charge_status($order, $charge = \null)
    {
    }
    /**
     * Handle refund creation on the WC side from an Amazon Refund object from the API.
     *
     * @param  WC_Order $order Order object.
     * @param  object   $refund Refund object from the Amazon API.
     * @param  int      $wc_refund_id Optional. WC Refund ID (if it's already created).
     * @return bool
     */
    public function handle_refund($order, $refund, $wc_refund_id = \null)
    {
    }
    /**
     * Do process refund on an order
     *
     * @param  int    $order_id Order ID.
     * @param  float  $amount Amount to refund.
     * @param  string $reason Optional. Message to be added to the WC Refund object as reason for the refund.
     * @return bool|WP_Error WP_Error if error, otherwise, true on success, false on failure.
     */
    public function process_refund($order_id, $amount = \null, $reason = '')
    {
    }
    /**
     * Store wc refund object in a previous hook for later use.
     *
     * @param  WC_Order_Refund $wc_refund Current Order Refund.
     */
    public function current_refund_set($wc_refund)
    {
    }
    /**
     * Maybe change session key when on the order-pay screen.
     *
     * @param  string $session_key Session Key.
     * @return string
     */
    public function maybe_change_session_key($session_key)
    {
    }
    /**
     * Lock an order to be processed only in the current request.
     *
     * @param  int  $order Order ID.
     * @param  bool $force Wether to force acquisition or not.
     * @return bool True if acquired, false if not.
     */
    public function get_lock_for_order($order, $force = \false)
    {
    }
    /**
     * Release an acquired lock for an order.
     *
     * @param  int $order Order ID.
     */
    public function release_lock_for_order($order)
    {
    }
    /**
     * Maybe hides Amazon Pay buttons on cart or checkout pages if hide button mode
     * is enabled.
     *
     * @since 1.6.0
     */
    public function maybe_hide_amazon_buttons()
    {
    }
    /**
     * Perform an authorization on an order.
     *
     * @param  WC_Order $order Order object.
     * @param  bool     $capture_now Wether to capture now or not.
     * @param  string   $id Charge Permission ID.
     * @return object|WP_Error Charge object from the API, or WP_Error in case of error.
     */
    public function perform_authorization($order, $capture_now = \true, $id = \null)
    {
    }
    /**
     * Cancel an authorization
     *
     * @param  WC_Order $order Order object.
     * @param  string   $id Charge ID.
     * @return object|WP_Error Charge object from the API, or WP_Error in case of error.
     */
    public function perform_cancel_auth($order, $id = \null)
    {
    }
    /**
     * Capture an authorization
     *
     * @param  WC_Order $order Order object.
     * @param  string   $id Charge ID.
     * @return object|WP_Error Charge object from the API, or WP_Error in case of error.
     */
    public function perform_capture($order, $id = \null)
    {
    }
    /**
     * Perform a refund on an order
     *
     * @param  WC_Order $order Order object.
     * @param  float    $amount Amount to refund.
     * @param  string   $id Charge ID.
     * @return object|WP_Error Refund object from the API, or WP_Error in case of error.
     */
    public function perform_refund($order, $amount = \null, $id = \null)
    {
    }
    /**
     * Check if we're on an AJAX call
     *
     * @return bool
     */
    public function doing_ajax()
    {
    }
    /**
     * Filters the fragments
     *
     * @param  array $fragments Fragments to be returned.
     * @return array
     */
    public function update_amazon_fragments($fragments)
    {
    }
    /**
     * Filter a customer field.
     *
     * @param  string $value Value to filter.
     * @return string
     */
    public function filter_customer_field($value)
    {
    }
    /**
     * Maybe hide standard WC checkout button on the cart, if enabled
     */
    public function maybe_hide_standard_checkout_button()
    {
    }
    /**
     * Maybe set order transaction id.
     *
     * @param WC_Order $order Order object.
     * @param string   $charge_permission_id Charge Permission.
     * @param string   $charge_id Charge Id.
     */
    public function maybe_set_transaction_id($order, $charge_permission_id, $charge_id)
    {
    }
    /**
     * Removes Amazon Pay from order-pay endpoint.
     *
     * @return void
     */
    public function remove_amazon_gateway_order_pay()
    {
    }
    /**
     * Process the pay form.
     *
     * @throws Exception On payment error.
     */
    public static function ajax_pay_action()
    {
    }
    /**
     * If checkout failed during an AJAX call, send failure response.
     */
    protected static function send_ajax_failure_response()
    {
    }
    /**
     * Loads scripts globally when the setting to display Amazon Pay button on mini cart is enabled.
     *
     * @param bool $load_scripts Whether to load Amazon Pay scripts or not.
     * @return bool
     */
    public function load_scripts_globally_if_button_enabled_on_cart($load_scripts)
    {
    }
    /**
     * Loads scripts on product pages when the setting to display Amazon Pay button on products is enabled.
     *
     * @param bool $load_scripts Whether to load Amazon Pay scripts or not.
     * @return bool
     */
    public function load_scripts_on_product_pages($load_scripts)
    {
    }
    /**
     * Restores a cart stored in session.
     *
     * @return void
     */
    public function remember_forgotten_cart()
    {
    }
    /**
     * Stores current cart in session and creates a new one.
     * Notifies JS of the current checkout session config params.
     *
     * Ajax endpoint hooked in the 'amazon_change_wc_carts_change_wc_cart' action.
     *
     * @return void
     */
    public function ajax_amazon_change_wc_carts()
    {
    }
    /**
     * Checks if a product is a subscription while we don't support subscriptions.
     *
     * Runs before outputting the markup for the Amazon Pay button in single products.
     * If the subscription support is enabled it will always return true.
     * If not, it will return true only when the product is not a subscription.
     *
     * @return bool
     */
    protected function possible_subscription_product_supported()
    {
    }
    /**
     * Checks if the current cart contains a subscription.
     *
     * Runs before outputting the markup for the Amazon Pay button in the mini cart.
     * If the subscription support is enabled it will always return true.
     * If not, it will return true only when the cart does not contain any subscriptions.
     *
     * @return bool
     */
    protected function possible_subscription_cart_supported()
    {
    }
    /**
     * Filter the payload to add the addressDetails data to the checkout session object.
     *
     * @param  array    $payload Payload to send to the API before proceeding to checkout.
     * @param  string   $checkout_session_id Checkout Session Id.
     * @param  WC_Order $order Order object.
     * @param  bool     $doing_classic_payment Indicates whether this is an Amazon "Classic" Transaction or not.
     * @return array
     */
    public function update_address_details_for_classic($payload, $checkout_session_id, $order, $doing_classic_payment)
    {
    }
    /**
     * Get the estimated order amount from the cart totals.
     *
     * @return string
     */
    private static function get_estimated_order_amount()
    {
    }
}
/**
 * Gateway class.
 *
 * @package WC_Gateway_Amazon_Pay
 */
/**
 * Implement payment method for Amazon Pay.
 */
class WC_Gateway_Amazon_Payments_Advanced_Express extends \WC_Gateway_Amazon_Payments_Advanced
{
    /**
     * Payment's method id.
     *
     * @var string
     */
    public $id = 'amazon_payments_advanced_express';
    /**
     * Gateways availability.
     *
     * Only available before processing checkout through
     * WooCommerce Blocks.
     *
     * @var boolean
     */
    protected $available = \false;
    /**
     * Constructor
     *
     * Needs to remain empty, so no hooks are being registered twice.
     */
    public function __construct()
    {
    }
    /**
     * Skip un-setting amazon_payments_advanced gateway when using WooCommerce Blocks Checkout.
     *
     * @return void
     */
    public function restore_amazon_payments_advanced()
    {
    }
    /**
     * Make the gateway available when checkout triggered through WooCommerce Blocks.
     *
     * @return void
     */
    public function available_on_block_checkout()
    {
    }
    /**
     * Returns Amazon Pay Express availability.
     *
     * @return bool
     */
    protected function get_availability()
    {
    }
    /**
     * Returns an empty array as the Gateway's settings.
     *
     * @return array
     */
    public function get_form_fields()
    {
    }
    /**
     * Update a single option.
     *
     * @param string $key Option key.
     * @param mixed  $value Value to set.
     * @return bool was anything saved?
     */
    public function update_option($key, $value = '')
    {
    }
    /**
     * Visually hides the gateway from the Backend list of available gateways.
     *
     * @return void
     */
    public static function visually_hide_amazon_express_on_backend()
    {
    }
    /**
     * Change the payment method after order is completed.
     *
     * @param WC_Order $order The order being completed.
     * @return void
     */
    public function update_orders_payment_method($order)
    {
    }
}
/**
 * WC_Gateway_Amazon_Payments_Advanced_Privacy
 */
class WC_Gateway_Amazon_Payments_Advanced_Privacy extends \WC_Abstract_Privacy
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Returns a list of orders that are using one of Amazon's payment methods.
     *
     * @param string $email_address Email address to search orders for.
     * @param int    $page Page being processed.
     *
     * @return array WP_Post
     */
    protected function get_amazon_orders($email_address, $page)
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
     * @param WC_Order $order Order object.
     * @return array
     */
    protected function maybe_handle_order($order)
    {
    }
}
/**
 * Gateway class to support WooCommerce Subscriptions.
 *
 * @package WC_Gateway_Amazon_Pay
 */
/**
 * WC_Gateway_Amazon_Payments_Advanced_Subscriptions.
 *
 * Extending main gateway class and only loaded if Subscriptions is available.
 */
class WC_Gateway_Amazon_Payments_Advanced_Subscriptions
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Initialize Handlers For subscriptions
     */
    public function init_handlers()
    {
    }
    /**
     * Set redirect URL if the result redirect URL is empty
     *
     * @param mixed           $result Result object to filter.
     * @param WC_Subscription $subscription Subscription object.
     *
     * @return mixed
     */
    public function filter_payment_method_changed_result($result, $subscription)
    {
    }
    /**
     * Add subscription support to the gateway
     *
     * @param  array $supports List of supported features.
     * @return array
     */
    public function add_subscription_support($supports)
    {
    }
    /**
     * Insert an item in an array before or after another item.
     *
     * @param  array $array Source array.
     * @param  mixed $element Element to insert.
     * @param  mixed $key Key to insert around.
     * @param  int   $operation Operation to perform.
     * @return array Returns a new array
     */
    public static function array_insert($array, $element, $key, $operation = 1)
    {
    }
    /**
     * Add subscription field to the gateway settings
     *
     * @param  array $fields Admin fields.
     * @return array
     */
    public function add_enable_subscriptions_field($fields)
    {
    }
    /**
     * Check if order contains subscriptions.
     *
     * @param  WC_Order|int $order Order / Order ID.
     * @return bool Returns true of order contains subscription.
     */
    public static function order_contains_subscription($order)
    {
    }
    /**
     * Get recurring frequency from the cart
     *
     * @return array Standard data object to be used in API calls.
     */
    private function get_recurring_frequency()
    {
    }
    /**
     * Parse WC interval into Amazon Pay frequency object.
     *
     * @param  string     $apa_period WC Period.
     * @param  int|string $apa_interval WC Interval.
     * @return array
     */
    public function parse_interval_to_apa_frequency($apa_period = \null, $apa_interval = \null)
    {
    }
    /**
     * Filter the payload to add recurring data to the checkout session creation object.
     *
     * @param  array $payload Payload to create checkout session (JS button).
     * @return array
     */
    public function recurring_checkout_session($payload)
    {
    }
    /**
     * Filter the payload to add recurring data to the checkout session update object.
     *
     * @param  array    $payload Payload to send to the API before proceeding to checkout.
     * @param  string   $checkout_session_id Checkout Session Id.
     * @param  WC_Order $order Order object.
     * @param  bool     $doing_classic_payment Indicates whether this is an Amazon "Classic" Transaction or not.
     * @return array
     */
    public function recurring_checkout_session_update($payload, $checkout_session_id, $order, $doing_classic_payment)
    {
    }
    /**
     * Filter payload to complete recurring checkout session
     *
     * @param  array $payload Payload for the complete checkout session API call.
     * @return array
     */
    public function recurring_complete_checkout_session_update($payload)
    {
    }
    /**
     * Copy meta from order to the relevant subscriptions
     *
     * @param  WC_Order $order Order object.
     * @param  object   $response Response from the API.
     */
    public function copy_meta_to_sub($order, $response)
    {
    }
    /**
     * Filter data to be copied from the subscription to the renewal
     *
     * @param  array           $meta Array of meta to copy from the subscription.
     * @param  WC_Order        $order Order object.
     * @param  WC_Subscription $subscription Susbcription Object.
     * @return array
     */
    public function copy_meta_from_sub($meta, $order, $subscription)
    {
    }
    /**
     * Process a scheduled subscription payment.
     *
     * @param float    $amount_to_charge The amount to charge.
     * @param WC_Order $order Order object.
     *                                   the subscription was purchased in.
     */
    public function scheduled_subscription_payment($amount_to_charge, $order)
    {
    }
    /**
     * Cancelled subscription hook
     *
     * @param WC_Subscription $subscription Subscription object.
     */
    public function cancelled_subscription($subscription)
    {
    }
    /**
     * Wether the subscription should move to on-hold
     *
     * @param  bool     $fail Wether to fail or not.
     * @param  WC_Order $order Order object.
     * @return bool
     */
    public function subs_not_on_hold($fail, $order)
    {
    }
    /**
     * Propagate status change from one order or subscription, to related orders.
     *
     * @param  WC_Order|WC_Subscription $_order Order object.
     * @param  string                   $charge_permission_id Charge Permission ID.
     * @param  object                   $charge_permission_status Charge Permission Status.
     */
    public function propagate_status_update_to_related($_order, $charge_permission_id, $charge_permission_status)
    {
    }
    /**
     * Do a specific order status propagation action
     *
     * @param  WC_Order $rel_order Order Object.
     * @param  string   $charge_permission_id Charge Permission ID.
     * @param  object   $charge_permission_status Charge Permission Status.
     */
    protected function handle_order_propagation($rel_order, $charge_permission_id, $charge_permission_status)
    {
    }
    /**
     * Maybe change session key to store checkout session on order pay screen.
     *
     * @param  string $session_key Session Key Used.
     * @return string
     */
    public function maybe_change_session_key($session_key)
    {
    }
    /**
     * Maybe not update payment method if it's already the same.
     *
     * @param  bool   $update Wether to Update.
     * @param  string $method New method.
     * @return bool   False if the gateway shouldn't update. True, otherwise.
     */
    public function maybe_not_update_payment_method($update, $method)
    {
    }
    /**
     * Change payment method after processing order.
     *
     * @param  WC_Order $order Order object.
     * @param  object   $response Charge Completion response from the Amazon API.
     */
    public function maybe_change_payment_method($order, $response)
    {
    }
    /**
     * Filter the redirect URL
     *
     * @param  string   $redirect Redirect URL.
     * @param  WC_Order $order Order object.
     * @return string
     */
    public function maybe_redirect_to_subscription($redirect, $order)
    {
    }
    /**
     * Add subscription post type to the admin meta box to be rendered.
     *
     * @param  array $post_types Post Types to render the meta box on.
     * @return array
     */
    public function add_subscription_post_type($post_types)
    {
    }
    /**
     * Clean up some charge permission meta box actions on recurring.
     *
     * @param  array    $actions Ations on the meta box.
     * @param  WC_Order $order Order object.
     * @return array
     */
    public function remove_charge_permission_actions_on_recurring($actions, $order)
    {
    }
    /**
     * Ignore recurring properties
     *
     * @param  bool   $valid Wether the data is invalid or not.
     * @param  object $data Order object.
     * @return bool
     */
    public function ignore_amounts_in_session_validation($valid, $data)
    {
    }
}
/**
 * Main class to handle compatbility with woocommerce-drip extension.
 *
 * @package WC_Gateway_Amazon_Pay\Compats
 */
/**
 * WooCommerce APA compatibility with Drip extension.
 *
 * @since 1.6.0
 */
class WC_Amazon_Payments_Advanced_Drip_Compat
{
    /**
     * Specify hooks where compatbility action takes place.
     */
    public function __construct()
    {
    }
    /**
     * Action performed to support the compatibility.
     */
    public function drip_compat_scripts()
    {
    }
}
/**
 * Main class to handle compatbility with woocommerce-dynamic-pricing extension.
 *
 * @package WC_Gateway_Amazon_Pay\Compats
 */
/**
 * WooCommerce APA compatibility with Dynamic Pricing extension.
 *
 * @since 1.6.0
 */
class WC_Amazon_Payments_Advanced_Dynamic_Pricing_Compat
{
    /**
     * Specify hooks where compatbility action takes place.
     */
    public function __construct()
    {
    }
    /**
     * Action performed to support the compatibility.
     *
     * @param WC_Cart $cart Cart instance.
     */
    public function maybe_restore_subtotal($cart)
    {
    }
}
/**
 * Abstract Class for all multi currency classes.
 *
 * @package WC_Gateway_Amazon_Pay\Compats
 */
/**
 * WooCommerce Multi-currency Abstract.
 */
abstract class WC_Amazon_Payments_Advanced_Multi_Currency_Abstract
{
    const ORIGINAL_CURRENCY_SESSION = 'original_currency';
    const CURRENCY_TIMES_SWITCHED_SESSION = 'currency_times_switched';
    /**
     * On Suspended Order References, we have to bypass currency switch.
     */
    const CURRENCY_BYPASS_SESSION = 'currency_bypass';
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * After WC and relevant multicurrency plugins have initialized
     *
     * @return void
     */
    public function maybe_disable_due_to_unsupported_currency()
    {
    }
    /**
     * Get selected currency function.
     *
     * @deprecated 2.1.2
     *
     * @abstract Used to be abstract up to version 2.1.1. Has been replaced by get_active_currency.
     *
     * @return string
     */
    public function get_selected_currency()
    {
    }
    /**
     * Interface for get active currency function
     *
     * @abstract It will be made abstract in future release, in order to give time to merchants extending this class to adjust their code.
     *
     * @since 2.1.2
     *
     * @return string
     */
    public static function get_active_currency()
    {
    }
    /**
     * If Multi-currency plugin is frontend compatible, meaning all currency changes happens only on frontend level.
     *
     * @return bool
     */
    public function is_front_end_compatible()
    {
    }
    /**
     * Check if the $currency_selected is compatible with amazon (and has been selected on settings).
     *
     * @param string $currency_selected Current currency selected from the frontend.
     *
     * @return bool
     */
    public function is_currency_compatible($currency_selected)
    {
    }
    /**
     * Capture original currency used on checkout and save it to Session.
     */
    public function capture_original_checkout_currency()
    {
    }
    /**
     * Triggered on thank you hook, it will delete currency session.
     */
    public function delete_currency_session()
    {
    }
    /**
     * Get amount of times currencies have been changed.
     *
     * @return string
     */
    public function get_currency_switched_times()
    {
    }
    /**
     * Set presentmentCurrency on the payment details
     *
     * @param  array $payload Payload on the checkout session object.
     * @return array
     */
    public function set_presentment_currency($payload)
    {
    }
    /**
     * LEGACY v1 METHODS AND HOOKS
     */
    /**
     * Option to bypass currency session.
     * This will be triggered on order reference statuses equal to pending, where is not allowed switching multicurrency.
     */
    public function bypass_currency_session()
    {
    }
    /**
     * Get original currency session.
     *
     * @return string
     */
    public function get_original_checkout_currency()
    {
    }
    /**
     * Flag if we need to reload Amazon wallet on frontend.
     *
     * @return bool
     */
    public function reload_wallet_widget()
    {
    }
    /**
     * Get selected currency, to be used on frontend.
     */
    public function ajax_get_currency()
    {
    }
    /**
     * If current order reference on checkout, after invalid payment method for instance, check if status is Suspended.
     *
     * @return bool
     */
    public function is_order_reference_checkout_suspended()
    {
    }
}
/**
 * Main class to handle WooCommerce Price Based on Country compatibility.
 * https://wordpress.org/plugins/woocommerce-product-price-based-on-countries/
 * Tested up to: 1.7.18
 *
 * @package WC_Gateway_Amazon_Pay\Compats
 */
/**
 * WooCommerce WooCommerce Price Based on Country Multi-currency compatibility.
 */
class WC_Amazon_Payments_Advanced_Multi_Currency_PPBC extends \WC_Amazon_Payments_Advanced_Multi_Currency_Abstract
{
    /**
     * Session key to force new region.
     */
    const FORCE_NEW_ZONE_SESSION = 'force_new_region';
    /**
     * Holds Product Price Base Country instance.
     *
     * @var WC_Product_Price_Based_Country
     */
    protected $ppbc;
    /**
     * Specify hooks where compatibility action takes place.
     */
    public function __construct()
    {
    }
    /**
     * Get PPBC selected currency.
     *
     * @return string
     */
    public static function get_active_currency()
    {
    }
    /**
     * LEGACY v1 METHODS AND HOOKS
     */
    /**
     * Get selected currency, to be used on frontend.
     */
    public function ajax_get_currency()
    {
    }
    /**
     * As Changing addresses on Address widget changes currency, we need to reload wallet accordingly.
     *
     * @return bool
     */
    public function reload_wallet_widget()
    {
    }
    /**
     * Allow PPBC to get proper country every time user changes its address on address widget.
     * If the new shipping address has associated a currency amazon does not support, set base country to session, then new currency is not force.
     * Hooks before $ppbc looks for Customer Session.
     * Amazon has not set up yet the customer information, so we need to set shipping and billing.
     */
    public function hook_before_ppbc_update_order_review()
    {
    }
    /**
     * If the country has been forced on hook_before_ppbc_update_order_review, set session again so
     * get_refreshed_fragments gets same country/currency.
     */
    public function hook_before_ppbc_get_refreshed_fragments()
    {
    }
    /**
     * Get base country where the shop is set up.
     *
     * @return string
     */
    public function get_base_country()
    {
    }
    /**
     * Sets billing and shipping country on WC customer.
     *
     * @param string $country
     */
    public function set_shipping_billing_customer($country)
    {
    }
    /**
     * Get Amazon Order Details from current Reference id.
     *
     * @return bool|SimpleXMLElement
     */
    public function get_amazon_order_details()
    {
    }
    /**
     * On OrderReferenceStatus === Suspended, hide currency switcher.
     */
    public function remove_currency_switcher_on_order_reference_suspended()
    {
    }
}
/**
 * Main class to handle Currency Converter Widget compatibility.
 * https://woocommerce.com/products/currency-converter-widget/
 * Tested up to: 1.6.12
 *
 * @package WC_Gateway_Amazon_Pay\Compats
 */
/**
 * This plugin does not need hooks to make it compatible, currency switch happens only on frontend level,
 * native currency is being used to process payments.
 *
 * Class WC_Amazon_Payments_Advanced_Multi_Currency_WCCW
 */
class WC_Amazon_Payments_Advanced_Multi_Currency_WCCW extends \WC_Amazon_Payments_Advanced_Multi_Currency_Abstract
{
    /**
     * Get Currency_Converted_Widget selected currency.
     * In this case it correspond always to native currency.
     *
     * @return string
     */
    public static function get_active_currency()
    {
    }
    /**
     * This plugin does not need hooks to make it compatible, currency switch happens only on frontend level.
     *
     * @return bool
     */
    public function is_front_end_compatible()
    {
    }
}
/**
 * Main class to handle WOOCS – Currency Switcher for WooCommerce compatibility.
 * https://wordpress.org/plugins/woocommerce-currency-switcher/
 * Tested up to: 1.2.7
 *
 * @package WC_Gateway_Amazon_Pay\Compats
 */
/**
 * WooCommerce WOOCS – Currency Switcher for WooCommerce Multi-currency compatibility.
 */
class WC_Amazon_Payments_Advanced_Multi_Currency_Woocs extends \WC_Amazon_Payments_Advanced_Multi_Currency_Abstract
{
    /**
     * Specify hooks where compatibility action takes place.
     */
    public function __construct()
    {
    }
    /**
     * Get Woocs selected currency.
     *
     * @return string
     */
    public static function get_active_currency()
    {
    }
    /**
     * Woocs has 2 ways of work:
     * Settings > Advanced > Is multiple allowed
     * If it is set, users will pay on selected currency (where we hook)
     * otherwise it will just change currency on frontend, but order will be taken on original shop currency.
     *
     * @return bool
     */
    public function is_front_end_compatible()
    {
    }
    /**
     * LEGACY v1 METHODS AND HOOKS
     */
    /**
     * On OrderReferenceStatus === Suspended, hide currency switcher.
     *
     * @param  bool $value Wether to remove or not the switcher.
     * @return bool
     */
    public function remove_currency_switcher_on_order_reference_suspended($value)
    {
    }
    /**
     * On OrderReferenceStatus === Suspended, hide currency switcher.
     */
    public function remove_shortcode_currency_switcher_on_order_reference_suspended()
    {
    }
}
/**
 * Main class to handle WPML WooCommerce Multilingual compatibility.
 * https://wordpress.org/plugins/woocommerce-multilingual/
 * Tested up to: 4.3.7
 *
 * @package WC_Gateway_Amazon_Pay\Compats
 */
/**
 * WooCommerce WPML WooCommerce Multilingual Multi-currency compatibility.
 */
class WC_Amazon_Payments_Advanced_Multi_Currency_WPML extends \WC_Amazon_Payments_Advanced_Multi_Currency_Abstract
{
    /**
     * WPML instance
     *
     * @var woocommerce_wpml
     */
    protected $wpml;
    /**
     * Specify hooks where compatibility action takes place.
     */
    public function __construct()
    {
    }
    /**
     * Get WPML selected currency.
     *
     * @return string
     */
    public static function get_active_currency()
    {
    }
    /**
     * LEGACY v1 METHODS AND HOOKS
     */
    /**
     * On OrderReferenceStatus === Suspended, hide currency switcher.
     */
    public function remove_currency_switcher_on_order_reference_suspended()
    {
    }
}
/**
 * Main class to handle compatbility with Multi-currency.
 *
 * @package WC_Gateway_Amazon_Pay\Compats
 */
/**
 * WooCommerce Multi-currency 3rd party compatibility.
 */
class WC_Amazon_Payments_Advanced_Multi_Currency
{
    /**
     * Instance for the compatible plugin handler
     *
     * @var WC_Amazon_Payments_Advanced_Multi_Currency_Abstract
     */
    public static $compatible_instance;
    /**
     * List of compatible plugins, with its global variable name or main class.
     */
    const COMPATIBLE_PLUGINS = array('global_WOOCS' => 'WOOCS – Currency Switcher for WooCommerce', 'class_WC_Product_Price_Based_Country' => 'Price Based on Country for WooCommerce', 'global_woocommerce_wpml' => 'WPML WooCommerce Multilingual', 'class_WC_Currency_Converter' => 'Currency Converter Widget');
    /**
     * List of compatible regions supportng multi-currency.
     */
    const COMPATIBLE_REGIONS = array('eu', 'gb');
    /**
     * WC_Amazon_Payments_Advanced_Multi_Currency constructor.
     *
     * @param string|null $region Region to inject.
     */
    public static function init($region = \null)
    {
    }
    /**
     * Checks if region is compatible.
     *
     * @param string|null $region Region to check for compatibility.
     *
     * @return bool
     */
    public static function compatible_region($region = \null)
    {
    }
    /**
     * Singleton to get if there is a compatible instance running. Region can be injected.
     *
     * @param bool $region Region to check for compatibility.
     *
     * @return WC_Amazon_Payments_Advanced_Multi_Currency_Abstract
     */
    public static function get_compatible_instance($region = \null)
    {
    }
    /**
     * Multi-currency is active behind the doors, once there is a compatible plugin (active instance).
     * If plugin is frontend compatible, we consider multi-currency not active, since we don't have to intercede.
     *
     * @return bool
     */
    public static function is_active()
    {
    }
    /**
     * Reload wallet widget wrapper around the instance
     *
     * @return bool
     */
    public static function reload_wallet_widget()
    {
    }
    /**
     * Get selected currency from selected currency.
     *
     * @return string
     */
    public static function get_selected_currency()
    {
    }
    /**
     * Currency switched in checkout page.
     * If original currency on checkout is different of the current one.
     *
     * @return bool
     */
    public static function is_currency_switched_on_checkout()
    {
    }
    /**
     * Returns name or global/class name of compatible plugin or false.
     *
     * @param bool $return_name If name is true, returns commercial name.
     *
     * @return string
     */
    public static function compatible_plugin($return_name = \false)
    {
    }
    /**
     * Are we on the settings page?
     *
     * @return bool
     */
    public function is_amazon_settings_page()
    {
    }
    /**
     * Adds multicurrency settings to form fields.
     *
     * @param  array $form_fields Admin fields.
     * @return array
     */
    public static function add_currency_fields($form_fields)
    {
    }
    /**
     * Searches for the compatible plugin instance.
     *
     * @param boolean $init When true it will init the found compatible instance and assign it to self::$compatible_instance.
     *                      When false it will just return the full class name of the compatible instance.
     * @return string|WC_Amazon_Payments_Advanced_Multi_Currency_Abstract
     */
    protected static function init_compatible_plugin_instance($init = \true)
    {
    }
    /**
     * Determines current active currency based on the region and the supported multicurrency plugins.
     *
     * In the case that its not a supported multicurrency region but there is a supported multicurrency plugin
     * enabled. We need to find out what's the selected currency is, because Amazon API does not support other currencies
     * than JPY in Japan region and USD in United States region.
     *
     * @param string $currency WooCommerce's currency.
     * @return string
     */
    public static function get_active_currency($currency)
    {
    }
}
/**
 * Main class to handle compatbility with woocommerce-subscribe-to-newsletter extension.
 *
 * @package WC_Gateway_Amazon_Pay\Compats
 */
/**
 * WooCommerce APA compatibility with Subscribe to Newsletter extension.
 *
 * @since 1.6.0
 */
class WC_Amazon_Payments_Advanced_Subscribe_To_Newsletter_Compat
{
    /**
     * Specify hooks where compatbility action takes place.
     */
    public function __construct()
    {
    }
    /**
     * Action performed to support the compatibility.
     */
    public function compat_scripts()
    {
    }
}
/**
 * Main class to handle compatbility with woocommerce-german-market extension.
 *
 * @package WC_Gateway_Amazon_Pay\Compats
 */
/**
 * WooCommerce APA compatibility with WooCommerce German Market extension.
 *
 * @since 1.6.0
 */
class WC_Amazon_Payments_Advanced_WGM_Compat
{
    /**
     * Constructor.
     *
     * @since 1.6.0
     */
    public function __construct()
    {
    }
    /**
     * WGM stores checkout fields data in session before proceeding to second
     * checkout page.
     *
     * @since 1.6.0
     */
    public function maybe_set_amazon_pa_session()
    {
    }
    /**
     * Check if WGM API exists.
     *
     * @since 1.6.0
     *
     * @return bool Returns true if WGM API exists
     */
    public function wgm_api_exists()
    {
    }
    /**
     * Check if Amazon reference ID exists in WGM session.
     *
     * @since 1.6.0
     *
     * @return bool Returns true if WGM Session has Amazon reference ID
     */
    public function has_amazon_reference_id()
    {
    }
    /**
     * Retrieve Amazon reference ID from WGM Session.
     *
     * @since 1.6.0
     *
     * @return string Amazon reference ID
     */
    public function get_amazon_reference_id()
    {
    }
    /**
     * Retrieve Amazon access token from WGM Session.
     *
     * @since 1.6.0
     *
     * @return string Amazon access token
     */
    public function get_amazon_access_token()
    {
    }
    /**
     * Check if current page is confirm and place order page from WGM.
     *
     * @since 1.6.0
     *
     * @return bool Return true if current page is confirm and place order page
     *              from WGM.
     */
    public function is_confirm_and_place_order_page()
    {
    }
    /**
     * Remove any attempt to initialize Amazon widget on second checkout page.
     *
     * @since 1.6.0
     */
    public function remove_ui_hooks()
    {
    }
    /**
     * Store address details from Amazon in WGM Session.
     *
     * @since 1.6.0
     */
    public function store_address_details()
    {
    }
    /**
     * Set address details of given type in WGM Session.
     *
     * @since 1.6.0
     *
     * @param array  $address Address details.
     * @param string $type    Address type ('billing' or 'shipping').
     */
    public function set_address_in_wgm($address, $type = 'billing')
    {
    }
    /**
     * Get amazon order details.
     *
     * @since 1.6.0
     *
     * @return bool|Object Returns OrderReferenceDetails object if succeed,
     *                     otherwise false is returned
     */
    public function get_amazon_order_details()
    {
    }
}
/**
 * Main class to handle compatbility with WPML plugin.
 *
 * @package WC_Gateway_Amazon_Pay\Compats
 */
/**
 * WooCommerce APA compatibility with WooCommerce multilingual (WPML).
 *
 * @since 1.7.0
 */
class WC_Amazon_Payments_Advanced_Woocommerce_Multilingual_Compat
{
    /**
     * Specify hooks where compatbility action takes place.
     */
    public function __construct()
    {
    }
    /**
     * Action performed to support the compatibility.
     *
     * @param WC_Cart $cart Cart instance.
     */
    public function maybe_restore_subtotal($cart)
    {
    }
}
/**
 * WooCommerce Blocks compatibility Abstract.
 *
 * @see https://github.com/woocommerce/woocommerce-gutenberg-products-block/blob/trunk/docs/extensibility/payment-method-integration.md
 */
abstract class WC_Amazon_Payments_Advanced_Block_Compat_Abstract extends \Automattic\WooCommerce\Blocks\Payments\Integrations\AbstractPaymentMethodType
{
    /**
     * Checks that classes extending this class have set the properties name and settings_name.
     *
     * @throws Exception When name or settings_name properties are not set.
     */
    final public function __construct()
    {
    }
    /**
     * Gets called during the server side initialization and sets our settings.
     *
     * Overwrite when you need different set of logic.
     *
     * @return void
     */
    public function initialize()
    {
    }
    /**
     * Returns if the Payment Method is active.
     *
     * Overwrite when you need different set of logic.
     *
     * @return boolean
     */
    public function is_active()
    {
    }
    /**
     * Returns the frontend scripts required by the payment method.
     *
     * Return an array of script handles that have been registered already.
     *
     * @return array
     */
    public function get_payment_method_script_handles()
    {
    }
    /**
     * Returns the backend scripts required by the payment method.
     *
     * Return an array of script handles that have been registered already.
     *
     * @return array
     */
    public function get_payment_method_script_handles_for_admin()
    {
    }
    /**
     * Returns the frontend accessible data.
     *
     * Can be accessed by calling
     * const settings = wc.wcSettings.getSetting( '{paymentMethodName}_data' );
     *
     * @return array
     */
    public function get_payment_method_data()
    {
    }
    /**
     * Returns the scripts required by the payment method based on the $type param.
     *
     * @param string $type Can be 'backend' or 'frontend'.
     * @return array Return an array of script handles that have been registered already.
     */
    abstract protected function scripts_name_per_type($type = '');
    /**
     * Returns an array of supported features.
     *
     * @return string[]
     */
    public function get_supported_features()
    {
    }
    /**
     * Returns supported currencies if multi currency is enabled.
     *
     * @return array|false
     */
    protected function get_allowed_currencies()
    {
    }
}
/**
 * Integrates Amazon Pay "Classic" in the Checkout Block of WooCommerce Blocks.
 *
 * @package WC_Gateway_Amazon_Pay\Compats\Woo-Blocks
 */
/**
 * Adds support for Amazon Pay "Classic" in the checkout Block of WooCommerce Blocks.
 */
class WC_Amazon_Payments_Advanced_Block_Compat_Classic extends \WC_Amazon_Payments_Advanced_Block_Compat_Abstract
{
    /**
     * The payment method's name.
     *
     * @var string
     */
    public $name = 'amazon_payments_advanced';
    /**
     * The option where the payment method stores its settings.
     *
     * @var string
     */
    public $settings_name = 'woocommerce_amazon_payments_advanced_settings';
    /**
     * Returns if the payment method should be active.
     *
     * @return boolean
     */
    public function is_active()
    {
    }
    /**
     * Returns the frontend accessible data.
     *
     * Can be accessed by calling
     * const settings = wc.wcSettings.getSetting( '{paymentMethodName}_data' );
     *
     * @return array
     */
    public function get_payment_method_data()
    {
    }
    /**
     * Returns the scripts required by the payment method based on the $type param.
     *
     * @param string $type Can be 'backend' or 'frontend'.
     * @return array Return an array of script handles that have been registered already.
     */
    protected function scripts_name_per_type($type = '')
    {
    }
}
/**
 * Integrates Amazon Pay "Express" in the Checkout Block of WooCommerce Blocks.
 *
 * @package WC_Gateway_Amazon_Pay\Compats\Woo-Blocks
 */
/**
 * Adds support for Amazon Pay "Express" in the checkout Block of WooCommerce Blocks.
 */
class WC_Amazon_Payments_Advanced_Block_Compat_Express extends \WC_Amazon_Payments_Advanced_Block_Compat_Abstract
{
    /**
     * The payment method's name.
     *
     * @var string
     */
    public $name = 'amazon_payments_advanced_express';
    /**
     * The option where the payment method stores its settings.
     *
     * @var string
     */
    public $settings_name = 'woocommerce_amazon_payments_advanced_settings';
    /**
     * Returns if the payment method should be active.
     *
     * @return boolean
     */
    public function is_active()
    {
    }
    /**
     * Returns the frontend accessible data.
     *
     * Can be accessed by calling
     * const settings = wc.wcSettings.getSetting( '{paymentMethodName}_data' );
     *
     * @return array
     */
    public function get_payment_method_data()
    {
    }
    /**
     * Returns the scripts required by the payment method based on the $type param.
     *
     * @param string $type Can be 'backend' or 'frontend'.
     * @return array Return an array of script handles that have been registered already.
     */
    protected function scripts_name_per_type($type = '')
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
     * Returns an array of payment method ids to unset on the frontend.
     *
     * @return array
     */
    protected function gateways_to_unset_on_fe()
    {
    }
}
/**
 * WooCommerce Blocks Compatibility Class.
 */
class WC_Amazon_Payments_Advanced_Block_Compatibility
{
    /**
     * Holds a map of compatibility classes pointing to the files where they are declared.
     *
     * @var array
     */
    protected static $file_class_compats_map = array('WC_Amazon_Payments_Advanced_Block_Compat_Classic' => __DIR__ . '/class-wc-amazon-payments-advanced-block-compat-classic.php', 'WC_Amazon_Payments_Advanced_Block_Compat_Express' => __DIR__ . '/class-wc-amazon-payments-advanced-block-compat-express.php');
    /**
     * Registers the compatible classes to the PaymentMethodRegistry.
     *
     * Hooked on woocommerce_blocks_payment_method_type_registration
     *
     * @param \Automattic\WooCommerce\Blocks\Payments\PaymentMethodRegistry $registry WooCommerce Block's registry instance.
     * @return void
     */
    public static function init(\Automattic\WooCommerce\Blocks\Payments\PaymentMethodRegistry $registry)
    {
    }
}
/**
 * Amazon Legacy API class.
 *
 * @package WC_Gateway_Amazon_Pay
 */
/**
 * Amazon Pay API class
 */
class WC_Amazon_Payments_Advanced_API_Legacy extends \WC_Amazon_Payments_Advanced_API_Abstract
{
    /**
     * Widgets URLs.
     *
     * @var array
     */
    protected static $widgets_urls = array('sandbox' => array('us' => 'https://static-na.payments-amazon.com/OffAmazonPayments/us/sandbox/js/Widgets.js', 'gb' => 'https://static-eu.payments-amazon.com/OffAmazonPayments/gbp/sandbox/lpa/js/Widgets.js', 'eu' => 'https://static-eu.payments-amazon.com/OffAmazonPayments/eur/sandbox/lpa/js/Widgets.js', 'jp' => 'https://origin-na.ssl-images-amazon.com/images/G/09/EP/offAmazonPayments/sandbox/prod/lpa/js/Widgets.js'), 'production' => array('us' => 'https://static-na.payments-amazon.com/OffAmazonPayments/us/js/Widgets.js', 'gb' => 'https://static-eu.payments-amazon.com/OffAmazonPayments/gbp/lpa/js/Widgets.js', 'eu' => 'https://static-eu.payments-amazon.com/OffAmazonPayments/eur/lpa/js/Widgets.js', 'jp' => 'https://origin-na.ssl-images-amazon.com/images/G/09/EP/offAmazonPayments/live/prod/lpa/js/Widgets.js'));
    /**
     * Non-app widgets URLs.
     *
     * @since 1.6.3
     *
     * @var array
     */
    protected static $non_app_widgets_urls = array('sandbox' => array('us' => 'https://static-na.payments-amazon.com/OffAmazonPayments/us/sandbox/js/Widgets.js', 'gb' => 'https://static-eu.payments-amazon.com/OffAmazonPayments/gbp/sandbox/js/Widgets.js', 'eu' => 'https://static-eu.payments-amazon.com/OffAmazonPayments/eur/sandbox/js/Widgets.js', 'jp' => 'https://static-fe.payments-amazon.com/OffAmazonPayments/jp/sandbox/js/Widgets.js'), 'production' => array('us' => 'https://static-na.payments-amazon.com/OffAmazonPayments/us/js/Widgets.js', 'gb' => 'https://static-eu.payments-amazon.com/OffAmazonPayments/gbp/js/Widgets.js', 'eu' => 'https://static-eu.payments-amazon.com/OffAmazonPayments/eur/js/Widgets.js', 'jp' => 'https://static-fe.payments-amazon.com/OffAmazonPayments/jp/js/Widgets.js'));
    /**
     * API Endpoints.
     *
     * @var array
     */
    protected static $endpoints = array('sandbox' => array('us' => 'https://mws.amazonservices.com/OffAmazonPayments_Sandbox/2013-01-01/', 'gb' => 'https://mws-eu.amazonservices.com/OffAmazonPayments_Sandbox/2013-01-01/', 'eu' => 'https://mws-eu.amazonservices.com/OffAmazonPayments_Sandbox/2013-01-01/', 'jp' => 'https://mws.amazonservices.jp/OffAmazonPayments_Sandbox/2013-01-01/'), 'production' => array('us' => 'https://mws.amazonservices.com/OffAmazonPayments/2013-01-01/', 'gb' => 'https://mws-eu.amazonservices.com/OffAmazonPayments/2013-01-01/', 'eu' => 'https://mws-eu.amazonservices.com/OffAmazonPayments/2013-01-01/', 'jp' => 'https://mws.amazonservices.jp/OffAmazonPayments/2013-01-01/'));
    /**
     * Get API endpoint.
     *
     * @param bool $is_sandbox Whether using sandbox or not.
     *
     * @return string
     */
    public static function get_endpoint($is_sandbox = \false)
    {
    }
    /**
     * Make an api request.
     *
     * @param  args $args Arguments.
     *
     * @return WP_Error|SimpleXMLElement Response.
     */
    public static function request($args)
    {
    }
    /**
     * Safe load XML.
     *
     * @param  string $source  XML input.
     * @param  int    $options Options.
     *
     * @return SimpleXMLElement|bool
     */
    public static function safe_load_xml($source, $options = 0)
    {
    }
    /**
     * Sanitize log message.
     *
     * Used to sanitize logged HTTP response message.
     *
     * @see https://github.com/woocommerce/woocommerce-gateway-amazon-payments-advanced/issues/133
     * @since 1.6.0
     *
     * @param mixed $message Log message.
     *
     * @return string Sanitized log message.
     */
    private static function sanitize_remote_response_log($message)
    {
    }
    /**
     * Sanitize logged request.
     *
     * Used to sanitize logged HTTP request message.
     *
     * @see https://github.com/woocommerce/woocommerce-gateway-amazon-payments-advanced/issues/133
     * @since 1.6.0
     *
     * @param string $message Log message from stringified array structure.
     *
     * @return string Sanitized log message
     */
    private static function sanitize_remote_request_log($message)
    {
    }
    /**
     * Sign a url for amazon.
     *
     * @param string $url        URL.
     * @param string $secret_key Secret key.
     *
     * @return string
     */
    private static function get_signed_amazon_url($url, $secret_key)
    {
    }
    /**
     * Validate API keys when settings are updated.
     *
     * @since 1.6.0
     *
     * @return bool Returns true if API keys are valid
     *
     * @throws Exception On Errors.
     */
    public static function validate_api_keys()
    {
    }
    /**
     * Get widgets URL.
     *
     * @return string
     */
    public static function get_widgets_url()
    {
    }
    /**
     * Get reference ID.
     *
     * @return string
     */
    public static function get_reference_id()
    {
    }
    /**
     * Get Access token.
     *
     * @return string
     */
    public static function get_access_token()
    {
    }
    /**
     * Check WC session for reference ID or access token.
     *
     * @since 1.6.0
     *
     * @param string $key   Key from query string in URL.
     * @param string $value Value from query string in URL.
     *
     * @return string
     */
    private static function check_session($key, $value)
    {
    }
    /**
     * If merchant is eu payment region (eu & uk).
     *
     * @return bool
     */
    public static function is_sca_region()
    {
    }
    /**
     * Get auth state from amazon API.
     *
     * @param string $order_id Order ID.
     * @param string $id       Reference ID.
     *
     * @return string|bool Returns false if failed
     */
    public static function get_reference_state($order_id, $id)
    {
    }
    /**
     * Get auth state from amazon API.
     *
     * @param string $order_id Order ID.
     * @param string $id       Reference ID.
     *
     * @return string|bool Returns false if failed.
     */
    public static function get_authorization_state($order_id, $id)
    {
    }
    /**
     * Get capture state from amazon API.
     *
     * @param string $order_id Order ID.
     * @param string $id       Reference ID.
     *
     * @return string|bool Returns false if failed.
     */
    public static function get_capture_state($order_id, $id)
    {
    }
    /**
     * Get reference state.
     *
     * @param int    $order_id Order ID.
     * @param string $state    State to retrieve.
     *
     * @return string Reference state.
     */
    public static function get_order_ref_state($order_id, $state = 'amazon_reference_state')
    {
    }
    /**
     * Handle the result of an async ipn authorization request.
     * https://m.media-amazon.com/images/G/03/AMZNPayments/IntegrationGuide/AmazonPay_-_Order_Confirm_And_Omnichronous_Authorization_Including-IPN-Handler._V516642695_.svg
     *
     * @param object       $ipn_payload    IPN payload.
     * @param int|WC_Order $order          Order object.
     *
     * @return string Authorization status.
     */
    public static function handle_async_ipn_payment_authorization_payload($ipn_payload, $order)
    {
    }
    /**
     * Handle the result of an sync authorization request.
     *
     * @param  mixed    $response Authorization Details object from the Amazon API.
     * @param  WC_Order $order Order object.
     * @param  string   $auth_id Authorization ID.
     * @return string Authorization status.
     */
    public static function handle_synch_payment_authorization_payload($response, $order, $auth_id = \false)
    {
    }
    /**
     * Get order language from order metadata.
     *
     * @param string $order_id Order ID.
     *
     * @return string
     */
    public static function get_order_language($order_id)
    {
    }
    /**
     * Authorize payment against an order reference using 'Authorize' method.
     *
     * @see https://payments.amazon.com/documentation/apireference/201752010
     *
     * @since 1.6.0
     *
     * @param int|WC_Order $order Order.
     * @param array        $args  Arguments.
     *
     * @return bool|WP_Error|SimpleXMLElement Response.
     */
    public static function authorize($order, $args = array())
    {
    }
    /**
     * Authorize payment against an order reference using 'Authorize' method.
     *
     * @see: https://payments.amazon.com/documentation/apireference/201752010
     *
     * @param int    $order_id            Order ID.
     * @param string $amazon_reference_id Amazon reference ID.
     * @param bool   $capture_now         Whether to immediately capture or not.
     *
     * @return bool See return value of self::handle_payment_authorization_response.
     */
    public static function authorize_payment($order_id, $amazon_reference_id, $capture_now = \false)
    {
    }
    /**
     * Get args to perform Authorize request.
     *
     * @since 1.6.0
     *
     * @param WC_Order $order Order object.
     * @param array    $args  Base args.
     */
    public static function get_authorize_request_args($order, $args)
    {
    }
    /**
     * Authorize payment against a billing agreement using 'AuthorizeOnBillingAgreement' method
     * See: https://payments.amazon.com/documentation/automatic/201752090#201757380
     *
     * @param int        $order_id                    Order ID.
     * @param string     $amazon_billing_agreement_id Reference ID.
     * @param bool|false $capture_now                 Whether to capture immediately.
     *
     * @return bool Returns true if succeed.
     */
    public static function authorize_recurring_payment($order_id, $amazon_billing_agreement_id, $capture_now = \false)
    {
    }
    /**
     * Authorize recurring payment against an order reference using
     * 'AuthorizeOnBillingAgreement' method.
     *
     * @see https://payments.amazon.com/documentation/apireference/201752010
     *
     * @since 1.6.0
     *
     * @param int|WC_Order $order Order ID or order object.
     * @param array        $args  Whether to immediately capture or not.
     *
     * @return bool|WP_Error
     */
    public static function authorize_recurring($order, $args = array())
    {
    }
    /**
     * Get args to perform AuthorizeBillingAgreement request.
     *
     * @since 1.6.0
     *
     * @param WC_Order $order Order object.
     * @param array    $args  Args.
     *
     * @return array Request args.
     */
    public static function get_authorize_recurring_request_args($order, $args)
    {
    }
    /**
     * Handle the result of an authorization request.
     *
     * @param object       $response    Return value from self::request().
     * @param int|WC_Order $order       Order object.
     * @param bool         $capture_now Whether to capture immediately or not.
     * @param string       $auth_method Deprecated. Which API authorization
     *                                  method was used (Authorize, or
     *                                  AuthorizeOnBillingAgreement).
     *
     * @return bool Whether or not payment was authorized.
     */
    public static function handle_payment_authorization_response($response, $order, $capture_now, $auth_method = \null)
    {
    }
    /**
     * Update order from authorization response.
     *
     * @since 1.6.0
     *
     * @param WC_Order $order Order object.
     * @param Object   $response    Response from self::request.
     * @param bool     $capture_now Whether to capture immediately.
     *
     * @return bool Returns true if succeed.
     */
    public static function update_order_from_authorize_response($order, $response, $capture_now = \false)
    {
    }
    /**
     * Cancels a previously confirmed order reference.
     *
     * @since 1.7.0
     *
     * @param WC_Order $order Order object.
     * @param string   $reason Reason for the cancellation.
     *
     * @return bool|WP_Error Return true when succeed. Otherwise WP_Error is returned.
     */
    public static function cancel_order_reference($order, $reason = '')
    {
    }
    /**
     * Get Authorization ID from reesponse.
     *
     * @since 1.6.9
     *
     * @param object $response Return value from self::request().
     *
     * @return string|bool String of Authorization ID. Otherwise false is returned.
     */
    public static function get_auth_id_from_response($response)
    {
    }
    /**
     * Get Amazon Order ID from response.
     *
     * @since 1.6.0
     *
     * @param object $response Response from self::request().
     *
     * @return string Amazon Order ID.
     */
    public static function get_reference_id_from_response($response)
    {
    }
    /**
     * Get billing address from response.
     *
     * @since 1.6.0
     *
     * @param object $response Response from self::request().
     *
     * @return array Billing address.
     */
    public static function get_billing_address_from_response($response)
    {
    }
    /**
     * Get Authorization state from reesponse.
     *
     * @since 1.6.9
     *
     * @param object $response Response from self::request().
     *
     * @return string|bool String of Authorization state.
     */
    public static function get_auth_state_from_reponse($response)
    {
    }
    /**
     * Get Authorization state reason code from reesponse.
     *
     * @see   https://payments.amazon.com/documentation/apireference/201752950
     * @since 1.6.9
     *
     * @param object $response Response from self::request().
     *
     * @return string|bool String of Authorization state.
     */
    public static function get_auth_state_reason_code_from_response($response)
    {
    }
    /**
     * Update order billing address.
     *
     * @since 1.6.0
     *
     * @param int   $order_id Order ID.
     * @param array $address  Billing address.
     *
     * @return bool
     */
    public static function update_order_billing_address($order_id, $address = array())
    {
    }
    /**
     * Handle the result of an async ipn order reference request.
     * We need only to cover the change to Open status.
     *
     * URL: https://m.media-amazon.com/images/G/03/AMZNPayments/IntegrationGuide/AmazonPay_-_Order_Confirm_And_Omnichronous_Authorization_Including-IPN-Handler._V516642695_.svg
     *
     * @param object       $ipn_payload    IPN payload.
     * @param int|WC_Order $order          Order object.
     */
    public static function handle_async_ipn_order_reference_payload($ipn_payload, $order)
    {
    }
    /**
     * Close order reference.
     *
     * @since 1.6.0
     *
     * @param int|WC_Order $order Order ID or order object.
     *
     * @return bool|WP_Error Return true when succeed. Otherwise WP_Error is returned
     */
    public static function close_order_reference($order)
    {
    }
    /**
     * Close authorization.
     *
     * @param int    $order_id                Order ID.
     * @param string $amazon_authorization_id Authorization ID.
     *
     * @return bool|WP_Error True if succeed. Otherwise WP_Error is returned
     */
    public static function close_authorization($order_id, $amazon_authorization_id)
    {
    }
    /**
     * Capture payment.
     *
     * @see https://payments.amazon.com/documentation/apireference/201752040
     *
     * @since 1.6.0
     *
     * @param int|WC_Order $order Order.
     * @param array        $args  Whether to immediately capture or not.
     *
     * @return bool|object|WP_Error
     */
    public static function capture($order, $args = array())
    {
    }
    /**
     * Get args to perform Capture request.
     *
     * @since 1.6.0
     *
     * @param WC_Order $order Order object.
     * @param array    $args  Base args.
     *
     * @return array
     */
    public static function get_capture_request_args($order, $args)
    {
    }
    /**
     * Capture payment
     *
     * @param int    $order_id                Order ID.
     * @param string $amazon_authorization_id Optional Amazon authorization ID.
     *                                        If not provided, value from order
     *                                        meta will be used.
     */
    public static function capture_payment($order_id, $amazon_authorization_id = \null)
    {
    }
    /**
     * Handle the result of a capture request.
     *
     * @since 1.6.0
     *
     * @param object       $response Response from self::request().
     * @param int|WC_Order $order    Order ID or object.
     *
     * @return bool whether or not payment was captured.
     */
    public static function handle_payment_capture_response($response, $order)
    {
    }
    /**
     * Update order from capture response.
     *
     * @since 1.6.0
     *
     * @param WC_Order $order Order object.
     * @param Object   $response Response from self::request.
     *
     * @return bool Returns true if succeed.
     */
    public static function update_order_from_capture_response($order, $response)
    {
    }
    /**
     * Refund a payment
     *
     * @param int    $order_id   Order ID.
     * @param string $capture_id Refund ID.
     * @param float  $amount     Amount to refund.
     * @param string $note       Refund note.
     *
     * @return bool Returns true if succeed.
     */
    public static function refund_payment($order_id, $capture_id, $amount, $note)
    {
    }
    /**
     * Get order ID from reference ID.
     *
     * @param string $reference_id Reference ID.
     *
     * @return int Order ID.
     */
    public static function get_order_id_from_reference_id($reference_id)
    {
    }
    /**
     * Send an email notification to the recipient in the woocommerce mail template.
     *
     * @param string $subject Subject.
     * @param string $message Message to be sent.
     * @param string $recipient Email address.
     */
    public static function send_email_notification($subject, $message, $recipient)
    {
    }
    /**
     * Return if subscription is shippable
     *
     * @param WC_Order $order Order object.
     *
     * @return boolean
     */
    public static function maybe_subscription_is_shippable(\WC_Order $order)
    {
    }
}
/**
 * IPN Legacy Handling.
 *
 * @package WC_Gateway_Amazon_Pay
 */
/**
 * WC_Amazon_Payments_Advanced_IPN_Handler_Legacy
 */
class WC_Amazon_Payments_Advanced_IPN_Handler_Legacy extends \WC_Amazon_Payments_Advanced_IPN_Handler_Abstract
{
    /**
     * Required keys for subscription confirmation type.
     *
     * @see self::$required_data_keys.
     *
     * @since 1.8.0
     * @version 1.8.0
     *
     * @var array
     */
    protected $required_subscription_keys_v1 = array(array('SubscribeURL', 'SubscribeUrl'), 'Token');
    /**
     * Required keys for notification message.
     *
     * @see self::$required_data_keys.
     *
     * @since 1.8.0
     * @version 1.8.0
     *
     * @var array
     */
    protected $required_notification_message_keys_v1 = array('NotificationType', 'NotificationData', 'NotificationReferenceId', 'SellerId');
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Validate IPN Legacy Message
     *
     * @param  array  $message IPN Message.
     * @param  string $notification_version Notification Version.
     */
    public function validate_notification_keys_v1($message, $notification_version)
    {
    }
    /**
     * Validate IPN Legacy Message for subscriptions
     *
     * @param  mixed $message IPN Message.
     */
    public function validate_subscription_keys_v1($message)
    {
    }
    /**
     * Handle the IPN.
     *
     * At this point, notification message is validated already.
     *
     * @throws Exception Missing handler for the notification type.
     *
     * @since 1.8.0
     * @version 1.8.0
     *
     * @param array $message Parsed SNS message.
     */
    public function handle_notification_ipn_v1($message)
    {
    }
    /**
     * Handle IPN for order reference notification.
     *
     * Currently only log the event in the order notes.
     *
     * @since 1.8.0
     * @version 1.8.0
     *
     * @param WC_Order         $order Order object.
     * @param SimpleXMLElement $notification_data Notification data.
     */
    protected function handle_ipn_order_reference($order, $notification_data)
    {
    }
    /**
     * Handle IPN for payment authorize notification.
     *
     * Currently only log the event in the order notes.
     *
     * @since 1.8.0
     * @version 1.8.0
     *
     * @param WC_Order         $order Order object.
     * @param SimpleXMLElement $notification_data Notification data.
     */
    protected function handle_ipn_payment_authorize($order, $notification_data)
    {
    }
    /**
     * Handle IPN for payment capture notification.
     *
     * Currently only log the event in the order notes.
     *
     * @since 1.8.0
     * @version 1.8.0
     *
     * @param WC_Order         $order Order object.
     * @param SimpleXMLElement $notification_data Notification data.
     */
    protected function handle_ipn_payment_capture($order, $notification_data)
    {
    }
    /**
     * Handle IPN for payment payment refund.
     *
     * Currently only log the event in the order notes.
     *
     * @since 1.8.0
     * @version 1.8.0
     *
     * @param WC_Order         $order Order object.
     * @param SimpleXMLElement $notification_data Notification data.
     */
    protected function handle_ipn_payment_refund($order, $notification_data)
    {
    }
    /**
     * Get the parsed notification data (from XML).
     *
     * @since 1.8.0
     *
     * @throws Exception Failed to parse the XML.
     *
     * @param array $notification Notification message.
     *
     * @return SimpleXMLElement Parsed XML object.
     */
    protected function get_parsed_notification_data($notification)
    {
    }
    /**
     * Get order from notification data.
     *
     * @since 1.8.0
     *
     * @throws Exception Failed to get order information from notification data.
     *
     * @param string           $notification_type Notification type.
     * @param SimpleXMLElement $notification_data Notification data.
     *
     * @return WC_Order Order object.
     */
    protected function get_order_from_notification_data($notification_type, $notification_data)
    {
    }
    /**
     * Process pending syncronuos payments.
     *
     * @param  int    $order_id Order ID.
     * @param  string $amazon_authorization_id Authorization ID.
     * @return null|WP_Error WP_Error on error, null if processed
     */
    public function process_pending_syncro_payments($order_id, $amazon_authorization_id)
    {
    }
    /**
     * Unschedule Action for Order.
     *
     * @param  WC_Order $order Order object.
     */
    public function unschedule_pending_syncro_payments($order)
    {
    }
}
/**
 * Legacy Gateway for v1 orders.
 *
 * @package WC_Gateway_Amazon_Pay
 */
/**
 * WC_Gateway_Amazon_Payments_Advanced_Legacy
 */
class WC_Gateway_Amazon_Payments_Advanced_Legacy extends \WC_Gateway_Amazon_Payments_Advanced_Abstract
{
    /**
     * Amazon Order Reference ID (when not in "login app" mode checkout)
     *
     * @var string
     */
    protected $reference_id;
    /**
     * Amazon Pay Access Token ("login app" mode checkout)
     *
     * @var string
     */
    protected $access_token;
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Amazon Pay is available if the following conditions are met (on top of
     * WC_Payment_Gateway::is_available).
     *
     * 1) Login App mode is enabled and we have an access token from Amazon
     * 2) Login App mode is *not* enabled and we have an order reference id
     * 3) In checkout pay page.
     *
     * @return bool
     */
    public function is_available()
    {
    }
    /**
     * Has fields.
     *
     * @return bool
     */
    public function has_fields()
    {
    }
    /**
     * Payment form on checkout page
     */
    public function payment_fields()
    {
    }
    /**
     * Get the shipping address from Amazon and store in session.
     *
     * This makes tax/shipping rate calculation possible on AddressBook Widget selection.
     *
     * @since 1.0.0
     * @version 1.8.0
     */
    public function store_shipping_info_in_session()
    {
    }
    /**
     * Normalized address after formatted.
     *
     * @since 1.8.0
     * @version 1.8.0
     *
     * @param array $address Address.
     *
     * @return array Address.
     */
    protected function normalize_address($address)
    {
    }
    /**
     * Set customer info.
     *
     * WC 3.0.0 deprecates some methods in customer setter, especially for billing
     * related address. This method provides compatibility to set customer billing
     * info.
     *
     * @since 1.7.0
     *
     * @param string $setter_suffix Setter suffix.
     * @param mixed  $value         Value to set.
     */
    protected function set_customer_info($setter_suffix, $value)
    {
    }
    /**
     * Check customer coupons after checkout validation.
     *
     * Since the checkout fields were hijacked and billing_email is not present,
     * we need to call WC()->cart->check_customer_coupons again.
     *
     * @since 1.7.0
     *
     * @param array $posted Posted data.
     */
    public function check_customer_coupons($posted)
    {
    }
    /**
     * Process payment.
     *
     * @version 1.7.1
     *
     * @param int $order_id Order ID.
     *
     * @throws Exception On Errors.
     */
    public function process_payment($order_id)
    {
    }
    /**
     * Checks payment_capture mode and process payment accordingly.
     *
     * @param WC_Order $order Order object.
     * @param string   $amazon_reference_id Associated Amazon reference ID.
     *
     * @throws Exception Declined transaction.
     */
    protected function process_payment_capture($order, $amazon_reference_id)
    {
    }
    /**
     * Process asynchronous Authorization.
     *
     * @param WC_Order $order Order object.
     * @param string   $amazon_reference_id Reference ID.
     */
    public function process_async_auth($order, $amazon_reference_id)
    {
    }
    /**
     * Process payment without authorizing and capturing the payment.
     *
     * This means store doesn't authorize and capture the payment when an order
     * is placed. Store owner will manually authorize and capture the payment
     * via edit order screen.
     *
     * @since 1.7.0
     *
     * @param WC_Order $order Order object.
     * @param string   $amazon_reference_id Amazon Order Reference ID.
     */
    protected function process_payment_with_manual($order, $amazon_reference_id)
    {
    }
    /**
     * Process payment with authorizing the payment.
     *
     * Store owner will capture manually the payment via edit order screen.
     *
     * @since 1.7.0
     *
     * @param WC_Order $order Order object.
     * @param string   $amazon_reference_id Amazon Order Reference ID.
     *
     * @throws Exception Declined transaction.
     */
    protected function process_payment_with_authorize($order, $amazon_reference_id)
    {
    }
    /**
     * In asynchronous mode, the Authorize operation always returns the State as Pending. The authorisation remains in this state until it is processed by Amazon.
     * The processing time varies and can be a minute or more. After processing is complete, Amazon notifies you of the final processing status.
     * Transaction Timeout always set to 1440.
     *
     * @param WC_Order $order Order object.
     * @param string   $amazon_reference_id Amazon Order Reference ID.
     *
     * @return SimpleXMLElement Response.
     */
    public function process_payment_with_async_authorize($order, $amazon_reference_id)
    {
    }
    /**
     * Process payment with authorizing and capturing.
     *
     * @since 1.7.0
     *
     * @param WC_Order $order Order object.
     * @param string   $amazon_reference_id Amazon Order Reference ID.
     *
     * @throws Exception Declined transaction.
     */
    protected function process_payment_with_capture($order, $amazon_reference_id)
    {
    }
    /**
     * Check authorize result for a declined error.
     *
     * @since 1.7.0
     *
     * @throws Exception Declined transaction.
     *
     * @param int    $order_id Order ID.
     * @param object $result   Return value from WC_Amazon_Payments_Advanced_API_Legacy::request().
     */
    protected function process_payment_check_declined_error($order_id, $result)
    {
    }
    /**
     * Process refund.
     *
     * @since 1.6.0
     *
     * @param  int    $order_id      Order ID.
     * @param  float  $refund_amount Amount to refund.
     * @param  string $reason        Reason to refund.
     *
     * @return WP_Error|boolean True or false based on success, or a WP_Error object.
     */
    public static function do_process_refund($order_id, $refund_amount = \null, $reason = '')
    {
    }
    /**
     * Instance wrapper to process refund
     *
     * @param  int    $order_id      Order ID.
     * @param  float  $refund_amount Amount to refund.
     * @param  string $reason        Reason to refund.
     * @return WP_Error|boolean True or false based on success, or a WP_Error object.
     */
    public function process_refund($order_id, $refund_amount = \null, $reason = '')
    {
    }
    /**
     * Use 'SetOrderReferenceDetails' action to update details of the order reference.
     *
     * By default, use data from the WC_Order and WooCommerce / Site settings, but offer the ability to override.
     *
     * @throws Exception Error from API request.
     *
     * @param WC_Order $order Order object.
     * @param string   $amazon_reference_id Reference ID.
     * @param array    $overrides           Optional. Override values sent to
     *                                      the Amazon Pay API for the
     *                                      SetOrderReferenceDetails request.
     *
     * @return WP_Error|array WP_Error or parsed response array
     */
    public function set_order_reference_details($order, $amazon_reference_id, $overrides = array())
    {
    }
    /**
     * Helper method to call 'ConfirmOrderReference' API action.
     *
     * @throws Exception Error from API request.
     *
     * @param string $amazon_reference_id Reference ID.
     * @param bool   $is_sca If needs SCA, ConfirmOrderReference needs extra parameters.
     *
     * @return WP_Error|array WP_Error or parsed response array
     */
    public function confirm_order_reference($amazon_reference_id, $is_sca = \false)
    {
    }
    /**
     * Retrieve full details from the order using 'GetOrderReferenceDetails'.
     *
     * @param string $amazon_reference_id Reference ID.
     *
     * @return bool|object Boolean false on failure, object of OrderReferenceDetails on success.
     */
    public function get_amazon_order_details($amazon_reference_id)
    {
    }
    /**
     * Format an Amazon Pay Address DataType for WooCommerce.
     *
     * @see https://payments.amazon.com/documentation/apireference/201752430
     *
     * @deprecated
     *
     * @param array $address Address object from Amazon Pay API.
     *
     * @return array Address formatted for WooCommerce.
     */
    public function format_address($address)
    {
    }
    /**
     * Parse the OrderReferenceDetails object and store billing/shipping addresses
     * in order meta.
     *
     * @version 1.7.1
     *
     * @param int|WC_order $order                   Order ID or order instance.
     * @param object       $order_reference_details Amazon API OrderReferenceDetails.
     */
    public function store_order_address_details($order, $order_reference_details)
    {
    }
    /**
     * If AuthenticationStatus is hit, we need to finish payment process that has been stopped previously.
     */
    public function handle_sca_url_processing()
    {
    }
    /**
     * If redirected to success url, proceed with payment and redirect to thank you page.
     *
     * @param WC_Order $order Order object.
     * @param string   $amazon_reference_id Reference ID.
     */
    protected function handle_sca_success($order, $amazon_reference_id)
    {
    }
    /**
     * If redirected to failure url, add a notice with right information for the user.
     *
     * @param WC_Order $order Order object.
     * @param string   $amazon_reference_id Reference ID.
     * @param string   $authorization_status Authorization Status.
     */
    protected function handle_sca_failure($order, $amazon_reference_id, $authorization_status)
    {
    }
    /**
     * Write a message to log if we're in "debug" mode.
     *
     * @deprecated
     *
     * @param string $context Context.
     * @param string $message Message to log.
     */
    public function log($context, $message)
    {
    }
    /**
     * Maybe render timeout transaction order received text.
     *
     * @param string   $text Text to be displayed.
     * @param WC_Order $order Order object.
     *
     * @return string
     */
    public function maybe_render_timeout_transaction_order_received_text($text, $order)
    {
    }
    /**
     * Load handlers for cart and orders after WC Cart is loaded.
     */
    public function init_handlers()
    {
    }
    /**
     * Maybe the request to logout from Amazon.
     *
     * @since 1.6.0
     */
    public function maybe_attempt_to_logout()
    {
    }
    /**
     * Logout from Amazon by removing Amazon related session and logout too
     * from app widget.
     *
     * @since 1.6.0
     */
    public function logout_from_amazon()
    {
    }
    /**
     * Initialize Amazon Pay UI during checkout.
     *
     * @param WC_Checkout $checkout Checkout object.
     */
    public function checkout_init($checkout)
    {
    }
    /**
     * Output an empty placeholder widgets container
     */
    public function placeholder_widget_container()
    {
    }
    /**
     * Output an empty placeholder checkout message container
     */
    public function placeholder_checkout_message_container()
    {
    }
    /**
     * Checkout Message
     */
    public function checkout_message()
    {
    }
    /**
     * Output the address widget HTML
     */
    public function address_widget()
    {
    }
    /**
     * Output the payment method widget HTML
     */
    public function payment_widget()
    {
    }
    /**
     * Capture full shipping address in the case of a $0 order, using the "login app"
     * version of the API.
     *
     * @version 1.7.1
     *
     * @param int $order_id Order ID.
     */
    public function capture_shipping_address_for_zero_order_total($order_id)
    {
    }
    /**
     * Hijack checkout fields during checkout.
     *
     * @since 1.6.0
     *
     * @param WC_Checkout $checkout WC_Checkout instance.
     */
    public function hijack_checkout_fields($checkout)
    {
    }
    /**
     * Alter account checkout field.
     *
     * @since 1.7.0
     *
     * @param WC_Checkout $checkout WC_Checkout instance.
     */
    protected function hijack_checkout_field_account($checkout)
    {
    }
    /**
     * Hijack billing checkout field.
     *
     * @since 1.7.0
     *
     * @param WC_Checkout $checkout WC_Checkout instance.
     */
    protected function hijack_checkout_field_billing($checkout)
    {
    }
    /**
     * Hijack shipping checkout field.
     *
     * @since 1.7.0
     *
     * @param WC_Checkout $checkout WC_Checkout instance.
     */
    protected function hijack_checkout_field_shipping($checkout)
    {
    }
    /**
     * Adds hidden class to checkout field
     *
     * @param array $field reference to the field to be hidden.
     */
    protected function add_hidden_class_to_field(&$field)
    {
    }
    /**
     * Adds hidden class to checkout fields based on a list
     *
     * @param array $checkout_fields reference to checkout fields.
     * @param array $field_list fields to be hidden.
     */
    protected function add_hidden_class_to_fields(&$checkout_fields, $field_list)
    {
    }
    /**
     * Removes fields from checkout based on a list
     *
     * @param array $checkout_fields reference to checkout fields.
     * @param array $field_list fields to be removed.
     */
    protected function unset_fields_from_checkout(&$checkout_fields, $field_list)
    {
    }
    /**
     * Render the Amazon Pay widgets when an order is updated to require
     * payment, and the Amazon gateway is available.
     *
     * @param array $fragments Fragments.
     *
     * @return array
     */
    public function update_amazon_widgets_fragment($fragments)
    {
    }
    /**
     * Force a page refresh when an order is updated to have a zero total and
     * we're not using the "login app" mode.
     *
     * This ensures that the standard WC checkout form is rendered.
     *
     * @param WC_Cart $cart Cart object.
     */
    public function force_standard_mode_refresh_with_zero_order_total($cart)
    {
    }
    /**
     * Maybe hide standard WC checkout button on the cart, if enabled
     */
    public function maybe_hide_standard_checkout_button()
    {
    }
    /**
     * Maybe hides Amazon Pay buttons on cart or checkout pages if hide button mode
     * is enabled.
     *
     * @since 1.6.0
     */
    public function maybe_hide_amazon_buttons()
    {
    }
    /**
     * When SCA, we hijack "Place Order Button" and perform our own custom Checkout.
     */
    public function ajax_sca_processing()
    {
    }
    /**
     * Init Amazon login app widget.
     */
    public function init_amazon_login_app_widget()
    {
    }
    /**
     * Filter Ajax endpoint so it carries the query string after buyer is
     * redirected from Amazon.
     *
     * Commit 75cc4f91b534ce3114d19da80586bacd083bb5a8 from WC 3.2 replaces the
     * REQUEST_URI with `/` so that query string from current URL is not carried.
     * This plugin hooked into checkout related actions/filters that might be
     * called from Ajax request and expecting some parameters from query string.
     *
     * @since 1.8.0
     *
     * @param string $url     Ajax URL.
     * @param string $request Request type. Expecting only 'checkout'.
     *
     * @return string URL.
     */
    public function filter_ajax_endpoint($url, $request)
    {
    }
    /**
     * Ajax handler for fetching order reference
     */
    public function ajax_get_order_reference()
    {
    }
    /**
     * Maybe display declined notice.
     *
     * @since 1.7.1
     * @version 1.7.1
     */
    public function maybe_display_declined_notice()
    {
    }
    /**
     * Add scripts
     */
    public function scripts()
    {
    }
    /**
     * Init legacy hooks
     */
    public static function legacy_hooks()
    {
    }
    /**
     * Handle v1 refunds
     *
     * @param  mixed  $ret Shortcircuit parameter.
     * @param  int    $order_id Order ID.
     * @param  float  $amount Amount to refund.
     * @param  string $reason Reason for the refund.
     *
     * @return bool|WP_Error
     */
    public static function maybe_handle_v1_refund($ret, $order_id, $amount, $reason)
    {
    }
}
/**
 * Gateway class to support WooCommerce Subscriptions on v1.
 *
 * @package WC_Gateway_Amazon_Pay
 */
/**
 * WC_Gateway_Amazon_Payments_Advanced_Subscriptions_Legacy.
 */
class WC_Gateway_Amazon_Payments_Advanced_Subscriptions_Legacy
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Init Handlers for subscription products
     *
     * @param mixed $version gateway current version.
     */
    public function init_handlers($version)
    {
    }
    /**
     * Process payment
     *
     * @param mixed $process Shortcircuit parameter.
     * @param int   $order_id Order that payment is being processed for.
     *
     * @return mixed|array If not a subscription, will return the shortcircuit parameter. Otherwise the process_payment typical array.
     * @throws Exception On errors with payment processing.
     */
    public function process_payment($process, $order_id)
    {
    }
    /**
     * Use 'SetBillingAgreementDetails' action to update details of the billing
     * agreement.
     *
     * @see https://payments.amazon.com/documentation/apireference/201751700
     *
     * @throws Exception Exception from API response error.
     *
     * @param WC_Order $order Order object.
     * @param string   $amazon_billing_agreement_id Billing agreement ID.
     *
     * @return WP_Error|array WP_Error or parsed response array.
     */
    private function set_billing_agreement_details($order, $amazon_billing_agreement_id)
    {
    }
    /**
     * Use 'ConfirmBillingAgreement' action to confirm the billing agreement.
     *
     * @see https://payments.amazon.com/documentation/apireference/201751710
     *
     * @throws Exception Error from API error response.
     *
     * @param int    $order_id                    Order ID.
     * @param string $amazon_billing_agreement_id Billing agreement ID.
     * @param bool   $is_sca If needs SCA, ConfirmOrderReference needs extra parameters.
     *
     * @return WP_Error|array WP_Error or parsed response array
     */
    private function confirm_billing_agreement($order_id, $amazon_billing_agreement_id, $is_sca = \false)
    {
    }
    /**
     * Do authorization on an order with a recurring charge.
     *
     * @param WC_Order $order Order object.
     * @param string   $amazon_billing_agreement_id Recurring object.
     */
    private function do_authorize_payment($order, $amazon_billing_agreement_id)
    {
    }
    /**
     * Authorize (and potentially capture) payment for an order w/subscriptions.
     *
     * @param int|WC_Order $order                       Order ID or order object.
     * @param string       $amazon_billing_agreement_id Billing agreement ID.
     *
     * @return array Array value for process_payment method.
     */
    private function authorize_payment($order, $amazon_billing_agreement_id)
    {
    }
    /**
     * Use 'GetBillingAgreementDetails' action to retrieve details of the billing agreement.
     *
     * @see https://payments.amazon.com/documentation/apireference/201751710#201751690
     *
     * @throws Exception Exception.
     *
     * @param int    $order_id                    Order ID.
     * @param string $amazon_billing_agreement_id Billing agreement ID.
     *
     * @return WP_Error|array WP_Error or parsed response array.
     */
    private function get_billing_agreement_details($order_id, $amazon_billing_agreement_id)
    {
    }
    /**
     * Store the billing and shipping addresses for this order in meta for both
     * the order and the subscriptions it contains.
     *
     * @param int    $order_id Order ID.
     * @param object $response SetBillingAgreementDetails response object.
     */
    private function store_subscription_destination($order_id, $response)
    {
    }
    /**
     * Convenience method to process generic Amazon API response errors.
     *
     * @throws Exception Error from API response.
     *
     * @param string $context                     Context.
     * @param object $response                    API response from WC_Amazon_Payments_Advanced_API_Legacy::request().
     * @param int    $order_id                    Order ID.
     * @param string $amazon_billing_agreement_id Billing agreement ID.
     */
    private function handle_generic_api_response_errors($context, $response, $order_id, $amazon_billing_agreement_id)
    {
    }
    /**
     * Retrieve full details from the order using 'GetBillingAgreementDetails' (if it contains a subscription).
     *
     * @param mixed  $process Shortcircuit parameter.
     * @param string $amazon_reference_id Reference ID.
     *
     * @return mixed|bool|object $process parameter if not supposed to run, Boolean false on failure, object of OrderReferenceDetails on success.
     */
    public function get_amazon_order_details($process, $amazon_reference_id)
    {
    }
    /**
     * If redirected to success url, proceed with payment and redirect to thank you page.
     *
     * @param mixed    $process Shortcircuit parameter.
     * @param WC_Order $order Order object.
     * @param string   $amazon_reference_id Reference ID.
     *
     * @return mixed|void $process parameter if not supposed to run, will redirect and exit if it runs.
     */
    public function handle_sca_success($process, $order, $amazon_reference_id)
    {
    }
    /**
     * If redirected to failure url, add a notice with right information for the user.
     *
     * @param mixed    $process Shortcircuit parameter.
     * @param WC_Order $order Order object.
     * @param string   $amazon_reference_id Reference ID.
     * @param string   $authorization_status Authorization Status.
     *
     * @return mixed|void $process parameter if not supposed to run, will redirect and exit if it runs.
     */
    public function handle_sca_failure($process, $order, $amazon_reference_id, $authorization_status)
    {
    }
    /**
     * Process a scheduled subscription payment.
     *
     * @param float    $amount_to_charge The amount to charge.
     * @param WC_Order $order Order object.
     *
     * @throws Exception When there's an error with the payment.
     */
    public function scheduled_subscription_payment($amount_to_charge, $order)
    {
    }
    /**
     * Use 'CloseBillingAgreement' to disallow future authorizations after
     * cancelling a subscription.
     *
     * @param WC_Order $order Order object.
     */
    public function cancelled_subscription($order)
    {
    }
    /**
     * Copy over the billing reference id and billing/shipping address info from
     * a successful manual payment for a failed renewal.
     *
     * @param WC_Subscription $subscription  The subscription for which the
     *                                       failing payment method relates.
     * @param WC_Order        $renewal_order The order which recorded the successful
     *                                       payment (to make up for the failed
     *                                       automatic payment).
     */
    public function update_failing_payment_method($subscription, $renewal_order)
    {
    }
    /**
     * Filter the admin actions available on the admin for the orders.
     *
     * @param array    $ret Shortcircuit parameter.
     * @param WC_Order $order Order object.
     * @param array    $actions Actions defined so far.
     *
     * @return array
     */
    public function admin_actions_panel($ret, $order, $actions)
    {
    }
    /**
     * Perform an authorization on a recurring billing agreement
     *
     * @param WC_Order $order Order object.
     * @param string   $amazon_billing_agreement_id Billing Agreement ID.
     */
    public function admin_action_authorize_recurring($order, $amazon_billing_agreement_id)
    {
    }
    /**
     * Perform an authorization and capture on a recurring billing agreement
     *
     * @param WC_Order $order Order object.
     * @param string   $amazon_billing_agreement_id Billing Agreement ID.
     */
    public function admin_action_authorize_capture_recurring($order, $amazon_billing_agreement_id)
    {
    }
    /**
     * Get auth state from amazon API.
     *
     * @param string $order_id Order ID.
     * @param string $amazon_billing_agreement_id       Reference ID.
     *
     * @return string|bool Returns false if failed
     */
    public function get_billing_agreement_state($order_id, $amazon_billing_agreement_id)
    {
    }
    /**
     * Clear stored billing agreement state
     *
     * @param int $order_id Order ID.
     */
    public function clear_stored_billing_agreement_state($order_id)
    {
    }
}
/**
 * Amazon Pay main class
 */
class WC_Amazon_Payments_Advanced
{
    /**
     * Plugin's version.
     *
     * @since 1.6.0
     *
     * @var string
     */
    public $version;
    /**
     * Plugin's absolute path.
     *
     * @var string
     */
    public $path;
    /**
     * Plugin's includes path.
     *
     * @var string
     */
    public $includes_path;
    /**
     * Plugin's URL.
     *
     * @since 1.6.0
     *
     * @var string
     */
    public $plugin_url;
    /**
     * Plugin basename.
     *
     * @since 2.0.0
     *
     * @var string
     */
    public $plugin_basename;
    /**
     * Amazon Pay settings.
     *
     * @var array
     */
    private $settings;
    /**
     * Amazon Pay Gateway
     *
     * @var WC_Gateway_Amazon_Payments_Advanced|WC_Gateway_Amazon_Payments_Advanced_Legacy
     */
    private $gateway;
    /**
     * Amazon Pay Express Gateway
     *
     * @var WC_Gateway_Amazon_Payments_Advanced_Express
     */
    private $express_gateway = \null;
    /**
     * Amazon Pay Gateway Admin Class
     *
     * @var WC_Amazon_Payments_Advanced_Admin
     */
    private $admin;
    /**
     * Amazon Pay Gateway Subscriptions Class
     *
     * @var WC_Gateway_Amazon_Payments_Advanced_Subscriptions
     */
    private $subscriptions;
    /**
     * WC logger instance.
     *
     * @var WC_Logger
     */
    private $logger;
    /**
     * Logger prefix for the whole transaction
     *
     * @var string
     */
    private $logger_prefix;
    /**
     * Amazon Pay compat handler.
     *
     * @since 1.6.0
     * @var WC_Amazon_Payments_Advanced_Compat
     */
    private $compat;
    /**
     * IPN handler.
     *
     * @since 1.8.0
     * @var WC_Amazon_Payments_Advanced_IPN_Handler
     */
    public $ipn_handler;
    /**
     * Simple Path handler.
     *
     * @var WC_Amazon_Payments_Advanced_Merchant_Onboarding_Handler
     */
    public $onboarding_handler;
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Init.
     *
     * @since 1.6.0
     */
    public function init()
    {
    }
    /**
     * Load translations.
     *
     * @since 1.6.0
     */
    public function load_plugin_textdomain()
    {
    }
    /**
     * Init gateway
     */
    public function init_gateway()
    {
    }
    /**
     * Add Amazon gateway to WC.
     *
     * @param array $methods List of payment methods.
     *
     * @return array List of payment methods.
     */
    public function add_gateway($methods)
    {
    }
    /**
     * Helper method to get a sanitized version of the site name.
     *
     * @return string
     */
    public static function get_site_name()
    {
    }
    /**
     * Helper method to get a sanitized version of the site description.
     *
     * @return string
     */
    public static function get_site_description()
    {
    }
    /**
     * Helper method to format a number before sending over to Amazon.
     *
     * @param string|float|int $num           Amount to format.
     * @param null|int         $decimals      The amount of decimals the formatted number should have.
     * @param string           $decimals_sep  The separator of the decimals.
     * @param string           $thousands_sep The separator of thousands.
     * @return string
     */
    public static function format_amount($num, $decimals = \null, $decimals_sep = '.', $thousands_sep = '')
    {
    }
    /**
     * Helper method to get order Version.
     *
     * @param int     $order_id Order ID.
     * @param boolean $force   Wether to force version to be v2 or not.
     *
     * @return string
     */
    public static function get_order_version($order_id, $force = \true)
    {
    }
    /**
     * Helper method to get order Version.
     *
     * @param int $order_id Order ID.
     *
     * @return string
     */
    public static function get_order_charge_permission($order_id)
    {
    }
    /**
     * Helper method to get order Version.
     *
     * @param int $order_id Order ID.
     *
     * @return string
     */
    public static function get_order_charge_id($order_id)
    {
    }
    /**
     * Helper method to get a sanitized version of a string.
     *
     * @param string $string Sanitize some elements.
     *
     * @return string
     */
    protected static function sanitize_string($string)
    {
    }
    /**
     * Write a message to log if we're in "debug" mode.
     *
     * @since 1.6.0
     *
     * @param string|WP_Error $message Log message.
     * @param null|mixed      $object Data to be printed for more detail about the entry.
     * @param null|string     $context Context for the log.
     */
    public function log($message, $object = \null, $context = \null)
    {
    }
    /**
     * Register REST API route for /orders/<order-id>/amazon-payments-advanced/.
     *
     * @since 1.6.0
     */
    public function rest_api_register_routes()
    {
    }
    /**
     * Add Amazon reference information in order item response.
     *
     * @since 1.6.0
     *
     * @param WP_REST_Response $response Response object.
     * @param WP_Post          $post     Post object.
     *
     * @return WP_REST_Response REST response
     */
    public function rest_api_add_amazon_ref_info($response, $post)
    {
    }
    /**
     * Return instance of WC_Gateway_Amazon_Payments_Advanced.
     *
     * @since 2.0.0
     *
     * @return WC_Gateway_Amazon_Payments_Advanced|WC_Gateway_Amazon_Payments_Advanced_Legacy
     */
    public function get_gateway()
    {
    }
    /**
     * Return instance of WC_Gateway_Amazon_Payments_Advanced_Express.
     *
     * @return WC_Gateway_Amazon_Payments_Advanced_Express
     */
    public function get_express_gateway()
    {
    }
    /**
     * Checks whether Express Gateway should be loaded or not.
     *
     * Express gateway should only be loaded if:
     *
     * 1) Merchant has migrated to V2 of the Amazon API and as a result
     *    he is using the WC_Gateway_Amazon_Payments_Advanced class as the
     *    Amazon Pay main Gateway.
     * 2) Class WC_Gateway_Amazon_Payments_Advanced has been loaded.
     * 3) WooCommerce blocks is installed and activated
     *
     * @return boolean
     */
    public function should_express_be_loaded()
    {
    }
}
// phpcs:ignore
/*
 * Plugin Name: WooCommerce Amazon Pay
 * Plugin URI: https://woocommerce.com/products/pay-with-amazon/
 * Description: Amazon Pay is embedded directly into your existing web site, and all the buyer interactions with Amazon Pay and Login with Amazon take place in embedded widgets so that the buyer never leaves your site. Buyers can log in using their Amazon account, select a shipping address and payment method, and then confirm their order. Requires an Amazon Pay seller account and supports USA, UK, Germany, France, Italy, Spain, Luxembourg, the Netherlands, Sweden, Portugal, Hungary, Denmark, and Japan.
 * Version: 2.4.1
 * Author: WooCommerce
 * Author URI: https://woocommerce.com
 * Text Domain: woocommerce-gateway-amazon-payments-advanced
 * Domain Path: /languages/
 * Tested up to: 6.0
 * WC tested up to: 7.0
 * WC requires at least: 4.0
 *
 * Copyright: © 2023 WooCommerce
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 *
 * @package WC_Gateway_Amazon_Pay
 */
\define('WC_AMAZON_PAY_VERSION', '2.4.1');
// WRCS: DEFINED_VERSION.
\define('WC_AMAZON_PAY_VERSION_CV1', '1.13.1');
/**
 * Return instance of WC_Amazon_Payments_Advanced.
 *
 * @since 1.6.0
 *
 * @return WC_Amazon_Payments_Advanced
 */
function wc_apa()
{
}
/**
 * Get order property with compatibility for WC lt 3.0.
 *
 * @since 1.7.0
 *
 * @param WC_Order $order Order object.
 * @param string   $key   Order property.
 *
 * @return mixed Value of order property.
 */
function wc_apa_get_order_prop($order, $key)
{
}