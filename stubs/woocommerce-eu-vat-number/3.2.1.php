<?php
/**
 * Generated stub declarations for woocommerce-eu-vat-number 3.2.1.
 * @see https://github.com/woocommerce/all-plugins/tree/stubs
 */

/**
 * WC_EU_VAT_Admin class.
 */
class WC_EU_VAT_Admin
{
    /**
     * Admin settings array.
     *
     * @var array
     */
    private static $settings = array();
    /**
     * Constructor.
     */
    public static function init()
    {
    }
    /**
     * Add fields to admin. This also handles save.
     *
     * @param  array $fields Fields being shown in admin.
     * @return array
     */
    public static function admin_billing_fields($fields)
    {
    }
    /**
     * Add VAT Number fields to admin. This also handles save.
     *
     * @param  array $fields Fields being shown in admin.
     * @return array
     */
    public static function admin_shipping_fields($fields)
    {
    }
    /**
     * Get VAT Number from order for shipping address edit form.
     *
     * @param string   $value The VAT Number value in DB.
     * @param WC_Order $order The order object.
     * @return string
     */
    public static function get_vat_number_from_order($value, $order)
    {
    }
    /**
     * Add VAT Number fields to admin. This also handles save.
     *
     * @param  array $fields Fields being shown in admin.
     * @return array
     */
    public static function add_vat_number_field($fields)
    {
    }
    /**
     * Add Meta Boxes.
     */
    public static function add_meta_boxes()
    {
    }
    /**
     * Enqueue admin styles and scripts
     *
     * @param string $hook The current admin page.
     * @return void
     */
    public static function styles_and_scripts($hook)
    {
    }
    /**
     * Is this is an EU order?
     *
     * @param  WC_Order $order The order object.
     * @return boolean
     */
    protected static function is_eu_order($order)
    {
    }
    /**
     * Get order VAT Number data in one object/array.
     *
     * @param  WC_Order $order The order object.
     * @return object
     */
    protected static function get_order_vat_data($order)
    {
    }
    /**
     * Output meta box.
     */
    public static function output()
    {
    }
    /**
     * Add settings to WC.
     */
    public static function admin_settings()
    {
    }
    /**
     * Save settings.
     */
    public static function save_admin_settings()
    {
    }
    /**
     * Initialize settings array.
     */
    public static function init_form_fields()
    {
    }
    /**
     * Add column.
     *
     * @param array $existing_columns Columns array.
     */
    public static function add_column($existing_columns)
    {
    }
    /**
     * Show Column.
     *
     * @param string $column Column being shown.
     */
    public static function show_column($column, $order)
    {
    }
    /**
     * Handles VAT when order is created/edited within admin manually.
     *
     * @since 2.3.14
     * @param array  $args Additional arguments.
     * @param object $order WooCommerce Order Object.
     * @throws Exception Error message if VAT validation fails.
     */
    public static function admin_order($args, $order)
    {
    }
    /**
     * Adds custom fields to user profile.
     *
     * @since 2.3.21
     * @param array $fields WC defined user fields.
     * @return array $fields Modified user fields.
     */
    public static function add_customer_meta_fields($fields)
    {
    }
    /**
     * Return VAT information to get customer details via AJAX.
     *
     * @since 2.3.21
     * @param array  $data The customer's data in context.
     * @param object $customer The customer object in context.
     * @param int    $user_id The user ID in context.
     * @return array $data Modified user data.
     */
    public static function get_customer_details($data, $customer, $user_id)
    {
    }
    /**
     * Display admin notice for EU VAT Number.
     */
    public static function maybe_show_admin_notice()
    {
    }
    /**
     * Dismiss EU VAT Disclaimer.
     */
    public static function dismiss_eu_vat_disclaimer()
    {
    }
    /**
     * Delete the disclaimer option so it shows up on store country/postcode change.
     *
     * @param mixed  $old_value Old value of option.
     * @param mixed  $value New value of option.
     * @param string $option Name of the option.
     */
    public static function reset_admin_notice_display($old_value, $value, $option)
    {
    }
    /**
     * Display admin notice for block checkout.
     *
     * @since 2.9.3
     */
    public static function maybe_show_admin_notice_for_block_checkout()
    {
    }
    /**
     * Dismiss Block checkout notice.
     *
     * @since 2.9.3
     */
    public static function dismiss_block_checkout_notice()
    {
    }
    /**
     * Check if EU VAT inner block is already adjusted in block checkout.
     *
     * @return boolean
     */
    public static function is_eu_vat_block_adjusted()
    {
    }
    /**
     * Get VAT Number field label.
     *
     * @return string
     */
    public static function get_vat_number_field_label()
    {
    }
}
/**
 * WC_EU_VAT_Blocks class.
 */
class WC_EU_VAT_Blocks_Integration implements \Automattic\WooCommerce\Blocks\Integrations\IntegrationInterface
{
    /**
     * The name of the integration.
     *
     * @return string
     */
    public function get_name()
    {
    }
    /**
     * When called invokes any initialization/setup for the integration.
     */
    public function initialize()
    {
    }
    /**
     * Show admin notice for script registration errors.
     *
     * @param string $handler Script handler that failed to register.
     * @param string $error_message The error message.
     */
    private function show_admin_notice_for_script_registration($handler, $error_message)
    {
    }
    /**
     * Returns an array of script handles to enqueue in the frontend context.
     *
     * @return string[]
     */
    public function get_script_handles()
    {
    }
    /**
     * Returns an array of script handles to enqueue in the editor context.
     *
     * @return string[]
     */
    public function get_editor_script_handles()
    {
    }
    /**
     * An array of key, value pairs of data made available to the block on the client side.
     *
     * @return array
     */
    public function get_script_data()
    {
    }
}
/**
 * WC_EU_VAT_Extend_Store_Endpoint class.
 * Extends the store API with EU VAT Number related data.
 */
class WC_EU_VAT_Extend_Store_Endpoint
{
    /**
     * Plugin Identifier, unique to each plugin.
     *
     * @var string
     */
    const IDENTIFIER = 'woocommerce-eu-vat-number';
    /**
     * Initialization.
     */
    public function init()
    {
    }
    /**
     * Adding order meta data that are part of the plugin of orders created using the
     * checkout block.
     *
     * @param WC_Order        $order   The order being placed.
     * @param WP_REST_Request $request The API request currently being processed.
     * @return void
     */
    public function update_order_meta($order, $request)
    {
    }
    /**
     * Registers extensions to two rest API endpoints:
     * 1 - a cart update endpoint to get the VAT number after it has been typed and check for
     * vat excepmption while on the checkout form.
     * 2 - a checkout endpoint extension to inform our frontend component about the result of
     * the validity of the VAT number and react accordingly.
     *
     * @return void
     */
    public function extend_rest_api()
    {
    }
    /**
     * Returns data to be used in the cart.
     *
     * @return array
     */
    public function get_cart_data()
    {
    }
    /**
     * Sets the data for the cart and applies the VAT exemption if needed.
     *
     * @param array $data Extension data received when the cart is updated.
     */
    public function set_cart_data($data)
    {
    }
    /**
     * Checks if VAT number is formatted correctly.
     *
     * @param string|null $vat_number VAT number.
     * @return array Information about the result of the validation.
     */
    public function validate($vat_number = \null)
    {
    }
    /**
     * Validates VAT Number and tries to apply the exemption given the information.
     *
     * @param boolean $with_notices Indicates whether to add notices or just run without any feedback.
     * This is used while changing the field on the checkout for and when submitting the order, hence
     * the two separate use cases.
     *
     * @return void
     */
    public function maybe_apply_exemption($with_notices = \true)
    {
    }
    /**
     * Tries to apply the exemption given the information.
     *
     * @param  mixed $validation Result of the validation of the VAT Number.
     */
    private function maybe_set_vat_exemption($validation)
    {
    }
}
/**
 * WC_EU_VAT_Reports class
 */
class WC_EU_VAT_My_Account
{
    /**
     * URL endpoint.
     *
     * @var string
     */
    public $endpoint = 'vat-number';
    /**
     * Success Messages.
     *
     * @var array
     */
    public $messages = array();
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Checks to see if we need to remove vat from displaying in the cart and from product itself.
     *
     * @see https://github.com/woocommerce/woocommerce-eu-vat-number/issues/71
     * @see https://github.com/woocommerce/woocommerce-eu-vat-number/issues/74
     * @see https://github.com/woocommerce/woocommerce-eu-vat-number/issues/233
     */
    public function maybe_remove_vat()
    {
    }
    /**
     * Register new endpoint to use inside My Account page.
     *
     * @since 2.1.12
     *
     * @see https://developer.wordpress.org/reference/functions/add_rewrite_endpoint/
     */
    public function add_endpoints()
    {
    }
    /**
     * Add new query var.
     *
     * @since 2.1.12
     *
     * @param array $vars Query vars.
     * @return array
     */
    public function add_query_vars($vars)
    {
    }
    /**
     * Update endpoint title.
     *
     * @since 2.9.8
     *
     * @param string $title Endpoint title.
     *
     * @return string
     */
    public function update_endpoint_title($title)
    {
    }
    /**
     * Set endpoint title.
     *
     * @since 2.1.12
     *
     * @param string $title Endpoint title.
     * @return string
     */
    public function endpoint_title($title)
    {
    }
    /**
     * Insert new endpoint into My Account menu.
     *
     * @since 2.1.12
     *
     * @param array $items Menu items.
     * @return array Menu items.
     */
    public function new_menu_items($items)
    {
    }
    /**
     * Endpoint HTML content.
     *
     * @since 2.1.12
     */
    public function endpoint_content()
    {
    }
    /**
     * Render My VAT Number content.
     *
     * @since 2.1.12
     */
    public function render_my_vat_number_content()
    {
    }
    /**
     * Validate a VAT number.
     *
     * Honors the "Failed Validation Handling" setting the same way checkout does: a VAT
     * number that fails VIES/UK validation is only rejected outright when that setting is
     * 'reject'. Otherwise it is allowed to be saved, so a store that accepts non-VIES numbers
     * (e.g. Portuguese NIFs) at checkout also accepts them on the My Account page. A VAT number
     * that doesn't match its country's format is always rejected regardless of the setting,
     * matching checkout.
     *
     * @version 2.3.0
     * @since 2.3.0
     * @param  string $vat_number  VAT number passed by the form.
     * @param  string $country     Country of the customer.
     * @param  string $postcode    Postcode of the customer.
     * @param  string $current_vat VAT number saved in database.
     *
     * @return boolean True if the VAT number should be treated as VAT-exempt.
     * @throws Exception For invalid VAT Number.
     */
    public function validate($vat_number, $country, $postcode = '', $current_vat = '')
    {
    }
    /**
     * Function to save VAT number from the my account form.
     */
    public function save_vat_number()
    {
    }
}
/**
 * WC_EU_VAT_Number class.
 */
class WC_EU_VAT_Number
{
    /**
     * Stores an array of EU country codes.
     *
     * @var array
     */
    private static $eu_countries = array();
    /**
     * Stores an array of RegEx patterns for country codes.
     *
     * @var array
     */
    private static $country_codes_patterns = array('AT' => 'U[A-Z\d]{8}', 'BE' => '[01]\d{9}', 'BG' => '\d{9,10}', 'CY' => '\d{8}[A-Z]', 'CZ' => '\d{8,10}', 'DE' => '\d{9}', 'DK' => '(\d{2} ?){3}\d{2}', 'EE' => '\d{9}', 'EL' => '\d{9}', 'ES' => '[A-Z]\d{7}[A-Z]|\d{8}[A-Z]|[A-Z]\d{8}', 'FI' => '\d{8}', 'FR' => '([A-Z]{2}|[A-Z0-9]{2})\d{9}', 'GB' => '(\d{9}|\d{12}|(GD|HA)\d{3})', 'XI' => '(\d{9}|\d{12}|(GD|HA)\d{3})', 'HR' => '\d{11}', 'HU' => '\d{8}', 'IE' => '[A-Z\d]{8,10}', 'IT' => '\d{11}', 'LT' => '(\d{9}|\d{12})', 'LU' => '\d{8}', 'LV' => '\d{11}', 'MT' => '\d{8}', 'NL' => '\d{9}B\d{2}', 'PL' => '\d{10}', 'PT' => '\d{9}', 'RO' => '\d{2,10}', 'SE' => '\d{12}', 'SI' => '\d{8}', 'SK' => '\d{10}');
    /**
     * VAT Number data.
     *
     * @var array
     */
    private static $data = array('vat_number' => \false, 'validation' => array('valid' => \null, 'error' => \false));
    /**
     * Stores the current IP Address' country code after geolocation.
     *
     * @var boolean
     */
    private static $ip_country = \false;
    /**
     * Init.
     */
    public static function init()
    {
    }
    /**
     * Logs API errors.
     *
     * @param string $code    Error code.
     * @param string $message Error message.
     */
    public static function log_api_errors($code, $message)
    {
    }
    /**
     * Load scripts used on the checkout.
     */
    public static function load_scripts()
    {
    }
    /**
     * Localise data for the `wc_eu_vat_params` script.
     *
     * @param string $script_handle Script handle.
     */
    public static function localize_wc_eu_vat_params($script_handle)
    {
    }
    /**
     * Get EU Country codes.
     *
     * @return array
     */
    public static function get_eu_countries()
    {
    }
    /**
     * Reset number.
     */
    public static function reset()
    {
    }
    /**
     * Add VAT Number field wrapper on the shipping fields.
     *
     * @since 2.9.4
     *
     * @param array $fields Shipping Fields.
     * @return array
     */
    public static function shipping_vat_number_field($fields)
    {
    }
    /**
     * Show the VAT field on the checkout.
     *
     * @since 1.0.0
     * @version 2.3.1
     * @param array $fields Billing Fields.
     * @return array
     */
    public static function vat_number_field($fields)
    {
    }
    /**
     * Return the vat number prefix.
     *
     * @param  string $country Country Code.
     * @return string
     */
    public static function get_vat_number_prefix($country)
    {
    }
    /**
     * Normalize a VAT number by cleaning it and ensuring the correct country prefix.
     *
     * Strips unwanted characters and uppercases the value. The country prefix is
     * only corrected when the VAT number already includes one, or when the store
     * allows customers to enter VAT numbers without a country prefix. In the
     * former case, the prefix is fixed for countries where the VAT prefix differs
     * from the country code (e.g., Greece uses 'EL' as VAT prefix but 'GR'
     * as country code). In the latter case, the prefix is prepended when none was
     * provided.
     *
     * @since 3.1.0
     *
     * @param string $vat_number The raw VAT number.
     * @param string $country    The country code.
     * @return string The normalized VAT number, with the correct prefix when applicable.
     */
    public static function get_normalized_vat_number($vat_number, $country)
    {
    }
    /**
     * Extract the 2-letter country code from a VAT number.
     *
     * @param string $vat_number The VAT number to extract the country code from.
     *
     * @return string|null The 2-letter country code if found, or null if not.
     */
    public static function get_country_code_from_vat($vat_number)
    {
    }
    /**
     * Remove unwanted chars and the prefix from a VAT number.
     *
     * @param  string $vat VAT Number.
     * @return string
     */
    public static function get_formatted_vat_number($vat)
    {
    }
    /**
     * Get IP address country for user.
     *
     * @return string
     */
    public static function get_ip_country()
    {
    }
    /**
     * Validate a number.
     *
     * @param  string $vat_number VAT Number.
     * @param  string $country    CountryCode.
     * @param  string $postcode   Postcode.
     *
     * @return bool|WP_Error if valid/not valid, WP_ERROR if validation failed
     */
    public static function vat_number_is_valid($vat_number, $country, $postcode = '')
    {
    }
    /**
     * Returns array of country code patterns.
     *
     * @since 2.9.0
     *
     * @return array
     */
    public static function get_country_code_patterns()
    {
    }
    /**
     * Validate a number and store the result.
     *
     * @param string $vat_number VAT Number.
     * @param string $country    Billing CountryCode.
     * @param string $postcode   Billing PostCode.
     * @return void
     */
    public static function validate($vat_number, $country, $postcode = '')
    {
    }
    /**
     * Whether the base country match with the billing/shipping country.
     *
     * @param string $billing_country Billing country of customer.
     * @param string $shipping_country Shipping country of customer.
     * @return bool
     */
    public static function is_base_country_match($billing_country, $shipping_country)
    {
    }
    /**
     * Set tax exception based on the vat number and store country.
     *
     * @param string $vat_number VAT Number.
     * @param string $exempt     Boolean to exempt VAT.
     *
     * @return void
     */
    public static function maybe_apply_vat_exemption($vat_number = '', $exempt = \null)
    {
    }
    /**
     * Set tax exception based on countries.
     *
     * @param bool   $exempt Are they exempt?.
     * @param string $billing_country Billing country of customer.
     * @param string $shipping_country Shipping country of customer.
     */
    public static function maybe_set_vat_exempt($exempt, $billing_country, $shipping_country)
    {
    }
    /**
     * Validate the VAT number when the checkout form is processed.
     *
     * For B2C transactions, validate the IP only if this is a digital order.
     */
    public static function process_checkout()
    {
    }
    /**
     * Determine if the country prefix is required.
     *
     * Helper function for the woocommerce_eu_vat_number_require_country_code
     * option to determine if the country prefix is required by the merchant.
     *
     * @return bool Whether the country prefix is required or not.
     */
    public static function is_country_prefix_required()
    {
    }
    /**
     * See if we need the user to self-declare location.
     *
     * This is needed when:
     *      The IP country cannot be detected
     *      The IP country is inside the EU OR
     *      The Billing country is inside the EU AND
     *      The IP doesn't match the billing country.
     *
     * @param string $ip_country      IP Country of customer.
     * @param string $billing_country Billig Country code.
     * @return boolean
     */
    public static function is_self_declaration_required($ip_country = \null, $billing_country = \null)
    {
    }
    /**
     * Show checkbox for customer to confirm their location (location evidence for B2C)
     */
    public static function location_confirmation()
    {
    }
    /**
     * Support method for WooCommerce Deposits.
     *
     * Sets the VAT related meta whenever a new scheduled order is created.
     *
     * @param WC_Order $new_order      The scheduled order object.
     * @param WC_Order $original_order The original order object.
     */
    public static function set_vat_details_for_scheduled_orders($new_order, $original_order)
    {
    }
    /**
     * Triggered when the totals are updated on the checkout.
     *
     * @since 1.0.0
     * @version 2.3.1
     * @param array $form_data Checkout Form data.
     */
    public static function ajax_update_checkout_totals($form_data)
    {
    }
    /**
     * Sees if a cart contains anything non-shippable. Thanks EU, I hate you.
     *
     * @return bool
     */
    public static function cart_has_digital_goods()
    {
    }
    /**
     * Add VAT ID to the formatted address array
     *
     * @param  array    $address Address Array.
     * @param  WC_Order $order WC Order Object.
     * @return array
     */
    public static function formatted_billing_address($address, $order)
    {
    }
    /**
     * Add VAT ID to the formatted shipping address array
     *
     * @param  array    $address Address Array.
     * @param  WC_Order $order   WC Order Object.
     * @return array
     */
    public static function formatted_shipping_address($address, $order)
    {
    }
    /**
     * Add {vat_id} placeholder
     *
     * @param  array $formats Address formats.
     * @param  array $args    Arguments.
     * @return array
     */
    public static function output_company_vat_number($formats, $args)
    {
    }
    /**
     * Address formats.
     *
     * @param  array $formats Address formats.
     * @return array
     */
    public static function localisation_address_formats($formats)
    {
    }
    /**
     * Force Digital Goods tax class to use billing address
     *
     * @param  array  $location  Location.
     * @param  string $tax_class Tax Class.
     * @return array
     */
    public static function woocommerce_get_tax_location($location, $tax_class = '')
    {
    }
    /**
     * Add VAT Number to order endpoint response.
     *
     * @since 2.1.12
     *
     * @param WP_REST_Response $response The response object.
     *
     * @return WP_REST_Response The response object with VAT number
     */
    public static function add_vat_number_to_order_response($response)
    {
    }
    /**
     * Save VAT Number to the order during checkout (WC 2.7.x).
     *
     * @param  WC_Order $order WC Order.
     */
    public static function set_order_data($order)
    {
    }
    /**
     * Save VAT Number to the customer during checkout (WC 2.7.x).
     *
     * @param  WC_Customer $customer Customer Object.
     */
    public static function set_customer_data($customer)
    {
    }
    /**
     * Save VAT Number to the customer during checkout (WC 2.7.x).
     *
     * @param  WC_Order $refund Refund Order.
     */
    public static function set_refund_data($refund)
    {
    }
    /**
     * Validate the VAT number format.
     *
     * @param string $vat_number           VAT Number.
     * @param string $address_country_code Purchaser's Shipping or Billing Country Code.
     *
     * @return bool|WP_Error
     */
    public static function validate_vat_format($vat_number = '', $address_country_code = '')
    {
    }
    /**
     * When enabled, require a valid company name if a VAT number is entered (classic checkout).
     *
     * Skips when the WooCommerce checkout company field is hidden; customers cannot enter a company.
     *
     * @since 3.2.0
     *
     * @param array $data Checkout field data.
     * @return void
     */
    public static function validate_company_with_vat_at_checkout($data)
    {
    }
    /**
     * Block / Store API: require company when VAT is on the order.
     *
     * @since 3.2.0
     *
     * Skips when the setting is off, the checkout company field is hidden, or WooCommerce already requires it.
     *
     * @param WC_Order $order              Order.
     * @param WP_Error $validation_errors  Errors object.
     * @return void
     */
    public static function validate_order_company_with_vat($order, $validation_errors)
    {
    }
    /**
     * Validate AJAX Order Review / Checkout & add errors if any.
     *
     * @param array   $data Checkout field data.
     * @param boolean $doing_checkout True if doing checkout. False if AJAX order review.
     */
    public static function validate_checkout($data, $doing_checkout = \false)
    {
    }
    /**
     * Load script with all required dependencies.
     *
     * @param string $handler Script handler.
     * @param string $script Script name.
     * @param array  $dependencies Additional dependencies.
     *
     * @throws Exception If the script file could not be read.
     * @return void
     */
    public static function register_script_with_dependencies(string $handler, string $script, array $dependencies = array())
    {
    }
    /**
     * Gets the file modified time as a cache buster if we're in dev mode, or the plugin version otherwise.
     *
     * @param string $file Local path to the file.
     * @return string The cache buster value to use for the given file.
     */
    public static function get_file_version($file): string
    {
    }
    /**
     * Handles legcy meta value for VAT number.
     *
     * The legacy vat number was stored automatically by WooCommerce
     * in the user meta under the billing_vat_number and shipping_vat_number keys.
     * The values under these keys are used to pre-fill the VAT number field on the
     * checkout page for logged in users, which is incorrect as the legacy keys are
     * not used anymore.
     *
     * We instead return the value stored under the vat_number key.
     *
     * @param string $value The meta value.
     * @return string The filtered meta value.
     */
    public static function filter_customer_meta_vat_number($value)
    {
    }
    /**
     * Pre-fills VAT checkout fields when Subscriptions does not map custom billing keys from the renewal order.
     *
     * Runs on {@see default_checkout_billing_vat_number} and {@see default_checkout_shipping_vat_number} so the
     * normal customer lookup in WC_Checkout::get_value() stays intact and other plugins can hook the same filters.
     *
     * @param string|null $value Default from customer/meta before this filter.
     * @param string      $input Field key (`billing_vat_number` or `shipping_vat_number`).
     * @return string|null
     */
    public static function default_checkout_vat_number($value, $input)
    {
    }
    /**
     * After WooCommerce Subscriptions sets up a renewal cart, copy VAT from the subscription (and optionally the
     * renewal order) into session so checkout autofill matches; {@see get_checkout_vat_number_prefill()} prioritizes
     * session so customer edits on checkout stay authoritative.
     *
     * @param WC_Subscription $subscription Subscription used to build the cart.
     * @param WC_Order|null   $order        Renewal order when {@see wcs_after_renewal_setup_cart_subscription} fires.
     * @return void
     */
    public static function seed_session_vat_after_renewal_cart_setup($subscription, $order = \null)
    {
    }
    /**
     * VAT number for checkout / blocks: session first (includes values seeded on renewal cart setup and customer edits),
     * then subscription renewal context, then customer profile.
     *
     * @return string
     */
    public static function get_checkout_vat_number_prefill()
    {
    }
    /**
     * When the cart contains a subscription renewal line: return VAT from the subscription (billing/legacy meta);
     * if empty, return VAT from the related renewal order when the cart item provides `renewal_order_id` (and it is
     * not the subscription id).
     *
     * @return string
     */
    private static function get_vat_number_from_subscription_renewal_context()
    {
    }
    /**
     * Sync `_billing_vat_number` from a renewal order onto the linked subscription(s) at the end of checkout.
     *
     * That meta is the canonical VAT on orders for this plugin ({@see WC_EU_VAT_Number::set_order_data()},
     * {@see wc_eu_vat_get_vat_from_order()}), including when validation uses the shipping VAT field.
     * `_shipping_vat_number` is not copied: the helper never reads it, and checkout persists the validated
     * number on `_billing_vat_number` only.
     *
     * Mirrors Subscriptions copying billing address onto the subscription on renewal. Only the subscription
     * is updated; the parent / initial order is intentionally left untouched.
     *
     * Hooked on:
     *  - `woocommerce_checkout_order_processed` (shortcode checkout)
     *  - `woocommerce_store_api_checkout_order_processed` (block checkout)
     *
     * @since 3.2.0
     *
     * @param int|WC_Order $order_or_id The renewal order (object) or its ID.
     * @return void
     */
    public static function maybe_sync_vat_to_subscription_on_renewal($order_or_id)
    {
    }
    /**
     * Performs VAT validation during Subscription renewal and charges/exempt VAT
     * based on the current tax settings.
     *
     * @param WC_Order        $renewal      The renewal order.
     * @param WC_Subscription $subscription Subscription.
     * @return WC_Order The renewal order.
     */
    public static function vat_on_creating_renewal_order(\WC_Order $renewal, $subscription)
    {
    }
}
/**
 * EU VAT Privacy Class
 */
class WC_EU_VAT_Privacy extends \WC_Abstract_Privacy
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
     * Returns a list of orders.
     *
     * @param string $email_address Email address of customer.
     * @param int    $page Current page.
     * @param string $post_type Default: order. Set to 'subscription' if querying for subscription orders.
     *
     * @return array WP_Post
     */
    protected function get_orders($email_address, $page, $post_type = 'order')
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
     * Finds and exports customer data by email address.
     *
     * @since 3.4.0
     * @param string $email_address The user email address.
     * @param int    $page  Page.
     *
     * @return array An array of personal data in name value pairs
     */
    public function customer_data_exporter($email_address, $page)
    {
    }
    /**
     * Finds and erases customer data by email address.
     *
     * @since 3.4.0
     * @param string $email_address The user email address.
     * @param int    $page  Page.
     *
     * @return array An array of personal data in name value pairs
     */
    public function customer_data_eraser($email_address, $page)
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
     * Finds and erases Subscription order data by email address.
     *
     * @since 2.3.26
     *
     * @param string $email_address The user email address.
     * @param int    $page Page.
     * @return array An array of personal data in name value pairs.
     */
    public function subscriptions_data_eraser($email_address, $page)
    {
    }
    /**
     * Erase EU VAT data from WooCommerce/Subscription orders.
     *
     * @since 2.3.26
     *
     * @param array $orders WooCommerce orders.
     *
     * @return array
     */
    protected function maybe_erase_order_data($orders)
    {
    }
    /**
     * Handle eraser of data tied to Orders
     *
     * @param WC_Order $order WooCommerce order/subscription object.
     *
     * @return array Array of order data removed/retained along with corresponding message.
     */
    protected function maybe_handle_order($order)
    {
    }
}
/**
 * WC_EU_VAT_Report_EC_Sales_List class
 */
class WC_EU_VAT_Report_EC_Sales_List extends \WC_Admin_Report
{
    /**
     * Get the legend for the main chart sidebar
     *
     * @return array
     */
    public function get_chart_legend()
    {
    }
    /**
     * Output an export link
     */
    public function get_export_button()
    {
    }
    /**
     * Output the report
     */
    public function output_report()
    {
    }
    /**
     * Get the current range and calculate the start and end dates
     *
     * @param  string $current_range Report Range.
     */
    public function calculate_current_range($current_range)
    {
    }
    /**
     * Get the main chart
     *
     * @return void
     */
    public function get_main_chart()
    {
    }
}
/**
 * WC_EU_VAT_Report_B2C_Sales class
 */
class WC_EU_VAT_Report_EU_VAT extends \WC_Admin_Report
{
    /**
     * Get the legend for the main chart sidebar.
     *
     * @return array
     */
    public function get_chart_legend()
    {
    }
    /**
     * Output an export link
     */
    public function get_export_button()
    {
    }
    /**
     * Output the report
     */
    public function output_report()
    {
    }
    /**
     * Get the current range and calculate the start and end dates
     *
     * @param  string $current_range Report Range.
     */
    public function calculate_current_range($current_range)
    {
    }
    /**
     * Get the main chart
     *
     * @return void
     */
    public function get_main_chart()
    {
    }
}
/**
 * WC_EU_VAT_Reports class
 */
class WC_EU_VAT_Reports
{
    /**
     * OrderUtil object.
     *
     * @var \Automattic\WooCommerce\Utilities\OrderUtil object.
     */
    public static $order_util;
    /**
     * Constructor
     */
    public static function init()
    {
    }
    /**
     * Helper function to get whether custom order tables are enabled or not.
     *
     * @return bool
     */
    public static function is_cot_enabled()
    {
    }
    /**
     * Helper function to check whether custom order tables are in sync or not.
     *
     * @return bool
     */
    public static function is_cot_sync_enabled()
    {
    }
    /**
     * Displays an admin notice indicating EU VAT reports are disabled on HPOS environments with no syncing.
     */
    public static function display_hpos_incompatibility_notice()
    {
    }
    /**
     * Add reports
     *
     * @param array $reports EU VAT reports.
     * @return array
     */
    public static function init_reports($reports)
    {
    }
    /**
     * Get a report
     */
    public static function ec_sales_list()
    {
    }
    /**
     * Get a report
     */
    public static function eu_vat()
    {
    }
    /**
     * Get a report
     */
    public static function non_eu_vat()
    {
    }
}
/**
 * WC_EU_VAT_UK_Number_API class.
 */
class WC_EU_VAT_UK_Number_API
{
    /**
     * UK VAT Number API URL.
     *
     * @var string
     */
    protected $api_url = 'https://api.service.hmrc.gov.uk/organisations/vat/check-vat-number/lookup/';
    /**
     * UK VAT Number API Version.
     *
     * @var string
     */
    protected $api_version = '1.0';
    /**
     * Check VAT Number
     *
     * @param string $vat_number UK VAT Number to be validate.
     *
     * @return array|WP_Error A WordPress HTTP response.
     * @throws Exception When remote request fails.
     */
    public function check_vat_number($vat_number)
    {
    }
}
/**
 * WC_Non_EU_Sales_Report class
 */
class WC_Non_EU_Sales_Report extends \WC_Admin_Report
{
    /**
     * Get the legend for the main chart sidebar
     *
     * @return array
     */
    public function get_chart_legend()
    {
    }
    /**
     * Output an export link
     */
    public function get_export_button()
    {
    }
    /**
     * Output the report
     */
    public function output_report()
    {
    }
    /**
     * Get the current range and calculate the start and end dates
     *
     * @param  string $current_range Report Range.
     */
    public function calculate_current_range($current_range)
    {
    }
    /**
     * Get the main chart
     *
     * @return void
     */
    public function get_main_chart()
    {
    }
}
/**
 * A client for the VIES SOAP web service
 *
 * Based on https://github.com/ddeboer/vatin
 */
class VIES_Client
{
    /**
     * URL to WSDL
     *
     * @var string
     */
    protected $wsdl = 'https://ec.europa.eu/taxation_customs/vies/checkVatService.wsdl';
    /**
     * SOAP client
     *
     * @var SoapClient
     */
    protected $soapclient;
    /**
     * SOAP classmap
     *
     * @var array
     */
    protected $classmap = array('checkVatResponse' => 'VIES_Response');
    /**
     * Check VAT
     *
     * @param string $country_code Country code.
     * @param string $vat_number   VAT number.
     *
     * @return VIES_Response
     */
    public function check_vat($country_code, $vat_number)
    {
    }
    /**
     * Get SOAP client
     *
     * @return SoapClient
     */
    public function get_soap_client()
    {
    }
}
/**
 * Response object from VIES
 */
class VIES_Response
{
    /**
     * Country Code
     *
     * @var string
     */
    protected $countryCode;
    /**
     * VAT Number
     *
     * @var string
     */
    protected $vatNumber;
    /**
     * Date of request.
     *
     * @var DateTime
     */
    protected $requestDate;
    /**
     * Is VAT valid?
     *
     * @var boolean
     */
    protected $valid;
    /**
     * Name
     *
     * @var string
     */
    protected $name;
    /**
     * Address
     *
     * @var string
     */
    protected $address;
    /**
     * Get the country code
     *
     * @return string
     */
    public function get_country_code()
    {
    }
    /**
     * Get the VAT Number
     *
     * @return string
     */
    public function get_vat_number()
    {
    }
    /**
     * Get the date of the request
     *
     * @return DateTime
     */
    public function get_request_date()
    {
    }
    /**
     * Whether the number is valid or not
     *
     * @return boolean
     */
    public function is_valid()
    {
    }
    /**
     * Get the name
     *
     * @return string
     */
    public function get_name()
    {
    }
    /**
     * Get the address
     *
     * @return string
     */
    public function get_address()
    {
    }
}
/**
 * WC_EU_VAT_Number_Init class.
 */
class WC_EU_VAT_Number_Init
{
    /**
     * Min version of WooCommerce supported.
     *
     * @var string
     */
    const WC_MIN_VERSION = '10.9';
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Checks that WooCommerce is loaded before doing anything else.
     *
     * @return bool True if supported
     */
    private function check_dependencies()
    {
    }
    /**
     * Checks if the WooCommerce plugin is active.
     * Note: Must be run after the "plugins_loaded" action fires.
     *
     * @since 1.0
     * @return bool
     */
    public function is_woocommerce_active()
    {
    }
    /**
     * Checks if the current WooCommerce version is supported.
     * Note: Must be run after the "plugins_loaded" action fires.
     *
     * @since 1.0
     * @return bool
     */
    public function is_woocommerce_version_supported()
    {
    }
    /**
     * Checks if the WooCommerce Blocks is active.
     * Note: Must be run after the "plugins_loaded" action fires.
     *
     * @return bool
     */
    public function is_woocommerce_blocks_active()
    {
    }
    /**
     * Checks if WooCommerce taxes are enabled.
     *
     * @since 2.8.8
     *
     * @return bool
     */
    public function is_taxes_enabled()
    {
    }
    /**
     * Checks if the current WooCommerce Blocks version is supported.
     * Note: Must be run after the "plugins_loaded" action fires.
     *
     * @return bool
     */
    public function is_woocommerce_blocks_version_supported()
    {
    }
    /**
     * Checks if the server supports SOAP.
     *
     * @since 2.3.7
     * @return bool
     */
    public function is_soap_supported()
    {
    }
    /**
     * WC inactive notice.
     *
     * @since 1.0.0
     */
    public function woocommerce_inactive_notice()
    {
    }
    /**
     * Wrong version notice.
     *
     * @since 1.0.0
     */
    public function woocommerce_wrong_version_notice()
    {
    }
    /**
     * No SOAP support notice.
     *
     * @since 2.3.7
     */
    public function requires_soap_notice()
    {
    }
    /**
     * Taxes disabled notice.
     *
     * @since 2.8.8
     */
    public function woocommerce_tax_disabled_notice()
    {
    }
    /**
     * Init the plugin once WP is loaded.
     */
    public function init()
    {
    }
    /**
     * Load translations.
     */
    public function localization()
    {
    }
    /**
     * Installer
     */
    public function install()
    {
    }
    /**
     * Add custom action links on the plugin screen.
     *
     * @param  mixed $actions Plugin Actions Links.
     * @return array
     */
    public function plugin_action_links($actions)
    {
    }
    /**
     * Show row meta on the plugin screen.
     *
     * @param  mixed $links Plugin Row Meta.
     * @param  mixed $file  Plugin Base file.
     * @return array
     */
    public function plugin_row_meta($links, $file)
    {
    }
    /**
     * Remove incompatible express payment options from WooCommerce Payments.
     *
     * Neither the Apple Pay or Google Pay APIs support the collection of
     * VAT numbers so store owners running a B2B store will disable these
     * payment methods by default.
     *
     * WooPay is not compatible.
     *
     * @see https://woo.com/document/woopay-merchant-documentation/#incompatible-extensions
     * @see https://github.com/woocommerce/woocommerce-eu-vat-number/issues/315#issuecomment-1888262947
     *
     * @since 2.9.2
     */
    public function filter_woocpayments_compatibility()
    {
    }
    /**
     * Registers block type and registers with WC Blocks Integration Interface.
     */
    public function wc_eu_vat_number_block_init()
    {
    }
    /**
     * Declares compatibility with Woocommerce features.
     *
     *  List of features:
     *  - custom_order_tables
     *  - product_block_editor
     *
     * @since 2.9.0 Rename function
     */
    public function declare_woocommerce_feature_compatibility(): void
    {
    }
}
/**
 * Data payload for wc_add_notice() so session notices can be identified as from this plugin.
 *
 * @since 3.2.0
 * @return array
 */
function wc_eu_vat_notice_data()
{
}
/**
 * Whether a stored notice was added by this plugin (third parameter to wc_add_notice).
 *
 * @since 3.2.0
 * @param array $notice Notice entry from wc_notices session.
 * @return bool
 */
function wc_eu_vat_is_tagged_notice($notice)
{
}
/**
 * Removes EU VAT–tagged error notices from the session (see WC_EU_VAT_NOTICE_DATA_KEY / wc_eu_vat_notice_data()).
 *
 * Used when validation succeeds, when using accept/accept_with_vat handlers, and before
 * adding a fresh reject notice so stale Store API 409 errors do not persist.
 * Legacy notices without tagged data are not cleared.
 *
 * @since 3.2.0
 * @return void
 */
function wc_eu_vat_clear_tagged_error_notices_from_session()
{
}
/**
 * Gets the VAT ID from order.
 *
 * @since 2.3.21
 * @param object $order The order in context.
 * @return string $vat;
 */
function wc_eu_vat_get_vat_from_order($order)
{
}
/**
 * Display 0.00% VAT line item and reason.
 *
 * @param array    $total_rows  Order item totals array.
 * @param WC_Order $order       WC_Order object.
 * @param string   $tax_display Tax display (incl or excl).
 */
function wc_eu_vat_maybe_add_zero_tax_display($total_rows, $order, $tax_display)
{
}
/**
 * Get whether to use shipping country for VAT validation.
 *
 * @since 2.9.4
 *
 * @return bool
 */
function wc_eu_vat_use_shipping_country()
{
}
/**
 * Whether checkout must collect a company name when a VAT number is provided.
 *
 * @since 3.2.0
 *
 * @return bool
 */
function wc_eu_vat_require_company_with_vat()
{
}
/**
 * Resolve checkout company field visibility from Blocks when available, else the WooCommerce option.
 *
 * @since 3.2.0
 *
 * @return string optional|required|hidden (values match WC checkout company field setting).
 */
function wc_eu_vat_resolve_checkout_company_field_visibility()
{
}
/**
 * Whether the WooCommerce checkout company field is shown (classic, blocks, and Store API use the same setting).
 *
 * When hidden, customers cannot enter a company name; require-company-with-VAT must not block checkout.
 *
 * @since 3.2.0
 *
 * @return bool False when WooCommerce checkout company field visibility is "hidden".
 */
function wc_eu_vat_checkout_company_field_is_visible()
{
}
/**
 * WooCommerce checkout company field visibility: optional, required, or hidden.
 *
 * @since 3.2.0
 *
 * @return string
 */
function wc_eu_vat_get_checkout_company_field_visibility_option()
{
}
/**
 * Validate company name when required for B2B-style checkout (non-empty when required).
 *
 * @since 3.2.0
 *
 * @param string      $company              Company string (will be trimmed).
 * @param bool        $required             If true, empty input is an error.
 * @param string|null $company_address_type Which address the company belongs to: 'billing', 'shipping', or null for generic wording.
 * @return true|WP_Error True when valid; WP_Error with message when invalid.
 */
function wc_eu_vat_validate_company_name($company, $required = \true, $company_address_type = \null)
{
}
/**
 * Whether VAT/company validation should use the shipping address for this checkout context.
 *
 * Classic checkout: shipping address when the setting is on and the customer ships elsewhere.
 * Block checkout: also when the Store API session used shipping for VAT (`wc_eu_vat_used_shipping_country`),
 * including "use same address for billing" and ship-to-different flows.
 *
 * @since 3.2.0
 *
 * @param bool $use_shipping_country Use shipping address for VAT validation (setting).
 * @param bool $ship_to_different    Customer ships to a different address.
 * @param bool $needs_shipping       Cart/order needs a shipping address.
 * @return bool
 */
function wc_eu_vat_use_shipping_address_for_vat_context($use_shipping_country, $ship_to_different, $needs_shipping = \true)
{
}
/**
 * Resolve which company field aligns with VAT input context (billing vs shipping).
 *
 * @since 3.2.0
 *
 * @param bool      $use_shipping_country       Use shipping address for VAT validation (setting).
 * @param bool      $ship_to_different          Customer ships to a different address.
 * @param string    $billing_company            Billing company value.
 * @param string    $shipping_company           Shipping company value.
 * @param bool|null $use_shipping_address       Optional. VAT/shipping-address context for company field.
 * @param bool|null $use_shipping_company_field Optional. Overrides which company field to read/highlight.
 * @return array{company: string, company_address: string} company_address is 'billing' or 'shipping'. Only the targeted field value is used (no cross-address fallback).
 */
function wc_eu_vat_resolve_company_for_vat_context($use_shipping_country, $ship_to_different, $billing_company, $shipping_company, $use_shipping_address = \null, $use_shipping_company_field = \null)
{
}
/**
 * Block checkout (Store API): use shipping company when VAT uses billing but the shopper uses same address for billing.
 *
 * @since 3.2.0
 *
 * @param WC_Order $order                  Order.
 * @param bool     $use_shipping_country   Setting enabled.
 * @param bool     $ship_to_different      Ship to a different address.
 * @return bool
 */
function wc_eu_vat_use_shipping_company_for_block_same_address_order($order, $use_shipping_country, $ship_to_different)
{
}
/**
 * Resolve billing vs shipping company for company+VAT validation on an order (mirrors checkout field logic).
 *
 * @since 3.2.0
 *
 * @param WC_Order $order Order object.
 * @return array{company: string, vat_country: string, vat: string, company_address: string}|null Null when this validation does not apply.
 */
function wc_eu_vat_get_company_validation_context_for_order($order)
{
}
/**
 * Add an order note with details about VAT validation result.
 *
 * @since 3.1.0
 *
 * @param WC_Order $order       WC Order.
 * @param string   $vat_number  VAT number.
 * @param bool     $is_valid    Whether VAT number is valid.
 * @return void
 */
function wc_eu_vat_maybe_add_order_note($order, $vat_number, $is_valid)
{
}
// phpcs:disable WordPress.Files.FileName
\define('WC_EU_VAT_VERSION', '3.2.1');
// WRCS: DEFINED_VERSION.
\define('WC_EU_VAT_FILE', __FILE__);
\define('WC_EU_ABSPATH', __DIR__ . '/');
\define('WC_EU_VAT_PLUGIN_URL', \untrailingslashit(\plugins_url('/', __FILE__)));
/**
 * Session notice data key for wc_add_notice() third parameter (identifies notices from this plugin).
 *
 * @since 3.2.0
 */
\define('WC_EU_VAT_NOTICE_DATA_KEY', 'woocommerce_eu_vat_notice');