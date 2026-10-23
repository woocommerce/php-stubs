<?php
/**
 * Generated stub declarations for woocommerce-shipping-new-zealand-post 5.1.2.
 * @see https://github.com/woocommerce/php-stubs
 */

class WC_NZP_Auth_Client
{
    const OAUTH_TOKEN_URL = 'https://oauth.nzpost.co.nz/as/token.oauth2';
    /**
     * @var self|null
     */
    private static $instance = \null;
    private $client_id;
    private $client_secret;
    private $account_number;
    private $environment;
    /**
     * Shared instance, sourced from the global NZ Post settings option.
     *
     * Credentials are stored globally in `woocommerce_new_zealand_post_settings`, not
     * per shipping-zone instance, so a single shared instance is the correct scope -
     * there is no per-instance credential isolation to maintain.
     *
     * @return self
     */
    public static function instance()
    {
    }
    /**
     * @param array|null $settings Optional injected settings (for tests). Defaults to
     *                              the live `woocommerce_new_zealand_post_settings` option.
     */
    public function __construct($settings = \null)
    {
    }
    /**
     * Whether the merchant has entered both a Client ID and Client Secret.
     *
     * No plugin-owned fallback exists - if this is false, callers must fail clearly
     * rather than substitute shared/embedded credentials.
     *
     * @return bool
     */
    public function has_valid_configuration()
    {
    }
    /**
     * Get a bearer access token, using the cache where possible.
     *
     * @return string|WP_Error
     */
    public function get_access_token()
    {
    }
    /**
     * Build the standard headers used on NZ Post ShippingOptions v2 resource requests.
     *
     * @return array|WP_Error
     */
    public function get_authorization_headers()
    {
    }
    /**
     * Discard the cached token for the current credentials/environment.
     */
    public function invalidate_token()
    {
    }
    /**
     * Perform an authenticated NZ Post API request, retrying exactly once on a 401.
     *
     * Centralizing the retry policy here means it is implemented once, not duplicated
     * across every caller.
     *
     * @param string $method 'GET' or 'POST'.
     * @param string $url    Full request URL.
     * @param array  $args   wp_remote_* args; 'headers' is merged with the auth headers.
     * @return array|WP_Error
     */
    public function request($method, $url, $args = array())
    {
    }
    /**
     * Cache key is a pure function of environment + client_id + client_secret. Any
     * credential or environment change therefore produces a cache miss on the very
     * next call - no explicit "clear cache on settings save" hook is wired up on
     * purpose, since re-deriving the key from freshly-saved settings would only ever
     * compute the *new* (not-yet-cached) key and delete nothing. The old entry simply
     * ages out within its own TTL (at most ~55 minutes).
     *
     * @return string
     */
    private function cache_key()
    {
    }
    /**
     * Get the cached token data object, or fetch and cache a fresh one.
     *
     * @return object|WP_Error Object with ->access_token and ->token_type, or WP_Error.
     */
    private function get_token_data()
    {
    }
    /**
     * POST the OAuth 2.0 Client Credentials grant, validate the response, and cache it.
     *
     * Credentials are sent as POST body fields (never in the URL), and TLS verification
     * uses WordPress's default (sslverify is intentionally not set to false).
     *
     * @return object|WP_Error
     */
    private function fetch_token()
    {
    }
}
class WC_NZP_Blocks_Integration
{
    /**
     * Store API extension namespace. Also used as the JS plugin name.
     */
    const EXTENSION_NAMESPACE = 'nz-post-collection-points';
    /**
     * Order meta keys - identical to those written by the classic checkout handler
     * (WC_Shipping_New_Zealand_Post_Init::nzp_save_collection_points()).
     */
    const META_ENABLED = 'nzp_collection_point_enabled';
    const META_LOCATION_ID = 'nzp_collection_point_location_id';
    /**
     * Cache lifetime for a given address's collection points. The Store API data callback
     * runs on every cart/checkout request, so without this the three-call NZ Post lookup
     * would repeat constantly.
     */
    const CACHE_TTL = 900;
    public function __construct()
    {
    }
    /**
     * Wire up the Store API data, the order persistence, and the frontend script.
     */
    public function register()
    {
    }
    /**
     * Store API update callback - persist the shopper's selection to the session.
     *
     * The posted location id is resolved to an address server-side, never taken from
     * the request body, so a tampered payload cannot make the store rate against an
     * arbitrary address.
     *
     * @param array $data Posted extension data.
     * @return void
     */
    public function update_selection($data)
    {
    }
    /**
     * The shopper's current shipping address, in the shape get_collection_points() expects.
     *
     * @return array|null Null when there is no customer context.
     */
    private function get_current_shipping_address()
    {
    }
    /**
     * Look up collection points for an address, with a short-lived cache.
     *
     * @param  array $ship_address
     * @return array List of points, each { id, company_name, full_address, distance }.
     */
    private function lookup_collection_points($ship_address)
    {
    }
    /**
     * Store API data callback - exposes the available points to the Blocks frontend.
     *
     * @return array
     */
    public function get_cart_extension_data()
    {
    }
    /**
     * Store API schema for the exposed data.
     *
     * @return array
     */
    public function get_extension_schema()
    {
    }
    /**
     * Store API schema for the data the checkout posts back (the shopper's selection).
     *
     * @return array
     */
    public function get_checkout_schema()
    {
    }
    /**
     * Persist the shopper's selection when a Blocks order is placed.
     *
     * Writes the same meta keys as the classic checkout so downstream consumers are unchanged.
     *
     * @param WC_Order        $order
     * @param WP_REST_Request $request
     */
    public function save_selection_to_order($order, $request)
    {
    }
    /**
     * Enqueue the Blocks checkout UI script.
     *
     * Only loads on a checkout page that is actually using the checkout block - the classic
     * checkout keeps using its own existing script and is unaffected.
     */
    public function enqueue_scripts()
    {
    }
}
class WC_NZP_Collection_Point_Order
{
    /**
     * Order meta keys. The first two predate this class and are what
     * WC_NZP_Helper reads when generating the label - do not rename them.
     */
    const META_ENABLED = 'nzp_collection_point_enabled';
    const META_LOCATION_ID = 'nzp_collection_point_location_id';
    const META_NAME = 'nzp_collection_point_name';
    const META_ADDRESS = 'nzp_collection_point_address';
    const META_ADDRESS_PART = '_nzp_collection_point_address_parts';
    /**
     * Shipping line-item meta keys. The two without a leading underscore are shown to
     * merchants and customers; their key *is* the label WooCommerce renders.
     */
    const ITEM_NAME = 'Collection Point';
    const ITEM_ADDRESS = 'Collection Point Address';
    const ITEM_ID = '_nzp_collection_point_id';
    public static function init()
    {
    }
    /**
     * Contribute the current selection to a shipping rate's meta_data.
     *
     * @param array $meta_data Existing rate meta.
     * @param array $package   The shipping package.
     * @return array
     */
    public static function add_rate_meta($meta_data, $package)
    {
    }
    /**
     * Persist the selection to order-level meta.
     *
     * Called by both checkout handlers so the two paths cannot drift apart.
     *
     * @param WC_Order    $order
     * @param string      $location_id Empty string to record "not selected".
     * @param array|null  $selection   Resolved selection; defaults to the session's.
     * @return void
     */
    public static function save_to_order($order, $location_id, $selection = \null)
    {
    }
    /**
     * Whether the order was placed with a collection point.
     *
     * @param WC_Order $order
     * @return bool
     */
    public static function is_selected($order)
    {
    }
    /**
     * The collection point recorded on an order, as display-ready strings.
     *
     * Falls back to the shipping line item (where the rate meta was copied) when the
     * order-level name/address are missing - which is the case for any order placed
     * before 5.1.2, when only the location id was stored.
     *
     * @param WC_Order $order
     * @return array|null { name, address, location_id }
     */
    public static function get_from_order($order)
    {
    }
    /**
     * Shared markup for the customer-facing surfaces.
     *
     * @param WC_Order $order
     * @param bool     $plain_text
     * @return string
     */
    private static function build_output($order, $plain_text = \false)
    {
    }
    /**
     * Admin order screen, immediately after the shipping address.
     *
     * @param WC_Order $order
     * @return void
     */
    public static function render_admin($order)
    {
    }
    /**
     * Order-received page and My Account > view order.
     *
     * @param WC_Order $order
     * @return void
     */
    public static function render_customer($order)
    {
    }
    /**
     * Order emails.
     *
     * @param WC_Order $order
     * @param bool     $sent_to_admin
     * @param bool     $plain_text
     * @param WC_Email $email
     * @return void
     */
    public static function render_email($order, $sent_to_admin = \false, $plain_text = \false, $email = \null)
    {
    }
}
class WC_NZP_Collection_Point_Rating
{
    /**
     * WooCommerce session key holding the current selection.
     */
    const SESSION_KEY = 'nzp_collection_point';
    /**
     * Package key the selection is injected under.
     */
    const PACKAGE_KEY = 'nzp_collection_point';
    /**
     * Register the hooks. Called once from the main plugin file.
     */
    public static function init()
    {
    }
    /**
     * Whether rating to the collection point is switched on.
     *
     * Off by default: turning it on changes shipping prices for stores already using
     * the feature, so it is an explicit merchant decision rather than a silent change
     * on upgrade. See the `nzp_rate_to_collection_point` setting.
     *
     * @return bool
     */
    public static function is_enabled()
    {
    }
    /**
     * Store the shopper's current selection.
     *
     * @param string $location_id NZ Post collection point id. Empty to clear.
     * @param array  $point       Collection point address components.
     * @return void
     */
    public static function set_selection($location_id, $point = array())
    {
    }
    /**
     * Forget the current selection.
     *
     * @return void
     */
    public static function clear_selection()
    {
    }
    /**
     * The current selection, or null.
     *
     * @return array|null { location_id, address }
     */
    public static function get_selection()
    {
    }
    /**
     * Normalize an address array to the four components NZ Post's ShippingOptions
     * `delivery` object accepts, dropping anything else.
     *
     * @param mixed $address
     * @return array
     */
    public static function sanitize_address($address)
    {
    }
    /**
     * Whether an address has enough detail for NZ Post to rate against.
     *
     * A collection point with no usable address must fall back to the shopper's own
     * address rather than produce a request NZ Post cannot price - failing over to
     * the previous (shopper-address) behaviour is always safe.
     *
     * @param mixed $address
     * @return bool
     */
    public static function is_ratable_address($address)
    {
    }
    /**
     * Inject the selection into every shipping package.
     *
     * Changing the package changes the hash WooCommerce keys its rate cache on, so
     * selecting or clearing a collection point re-runs the rate request instead of
     * serving a stale quote for the shopper's own address.
     *
     * @param array $packages
     * @return array
     */
    public static function inject_into_packages($packages)
    {
    }
    /**
     * Read the selection out of a shipping package.
     *
     * @param array $package
     * @return array|null Address components, or null when the package carries no usable selection.
     */
    public static function address_from_package($package)
    {
    }
    /**
     * Classic checkout: mirror the posted checkout fields into the session.
     *
     * `woocommerce_checkout_update_order_review` fires on the AJAX request that
     * refreshes shipping rates, and receives the serialized checkout form. Capturing
     * here means the selection is in the session before rates are calculated on that
     * same request. Blocks uses a Store API update callback instead - see
     * WC_NZP_Blocks_Integration::update_selection().
     *
     * @param string $post_data Serialized checkout form data.
     * @return void
     */
    public static function capture_from_classic_checkout($post_data)
    {
    }
    /**
     * Resolve a collection point id to its name, formatted address and components.
     *
     * Always resolved server-side from NZ Post's own response rather than trusted from
     * the client, so a tampered request cannot make the store rate against an arbitrary
     * address.
     *
     * @param string $location_id
     * @param array  $ship_address Optional shopper address to search near. Defaults to the customer's.
     * @return array { name, full_address, address }, empty when the id is not among the offered points.
     */
    public static function resolve_point($location_id, $ship_address = \null)
    {
    }
    /**
     * A one-line human-readable description of a stored selection, e.g.
     * "NZ Post Martinborough - Four Square, 14 Memorial Square, Martinborough 5711".
     *
     * @param array|null $selection Defaults to the current session selection.
     * @return string Empty when there is nothing selected.
     */
    public static function format_selection($selection = \null)
    {
    }
}
class WC_NZP_Helper
{
    public $nzp_config;
    public $unit_weight;
    public $unit_dimension;
    public $postage_type;
    public $api_endpoint;
    public function __construct()
    {
    }
    /**
     * Output a message
     */
    public function debug($message, $type = 'notice')
    {
    }
    public function get_package_deminsion($order_id, $packing_method = 'per_item', $boxes = \null)
    {
    }
    public function box_shipping($order, $boxes)
    {
    }
    /**
     * Per_item_shipping function.
     *
     * @param mixed $order
     * @return array
     */
    private function per_item_shipping($order)
    {
    }
    /**
     * Normalize Māori macrons in address strings for API compatibility.
     * Converts macron characters to their ASCII equivalents.
     * 
     * @param string $text Text to normalize
     * @return string Normalized text
     * @since 5.1.1
     */
    private function normalize_maori_macrons($text)
    {
    }
    public function pickup_address_id()
    {
    }
    public function get_delivery_address($order)
    {
    }
    public function get_address_array($address)
    {
    }
    public function create_label_request($order_id, $shipping_options)
    {
    }
    public function convert_weight($weight, $convert_unit = '')
    {
    }
    public function convert_dimension($dimension, $convert_unit = '')
    {
    }
    /**
     * GET API Request
     */
    public function nzp_get_request($endpoint, $request = '')
    {
    }
    /**
     * POST API Request
     */
    public function nzp_post_request($endpoint, $request)
    {
    }
}
class NZP_Logger
{
    /**
     * Get WooCommerce logger instance.
     *
     * @return WC_Logger|null
     */
    private static function get_logger()
    {
    }
    private static function pretty_print($log)
    {
    }
    public static function trace($log)
    {
    }
    public static function debug($log)
    {
    }
    public static function error($log)
    {
    }
}
class WC_NZP_Shipping_Collection_Points
{
    public $nzp_config;
    public $endpoints;
    public $nzp_api;
    public $nzp_helper;
    public $api_endpoint;
    public function __construct()
    {
    }
    /**
     * Normalize Māori macrons in address strings for API compatibility.
     * Converts macron characters to their ASCII equivalents.
     * 
     * @param string $text Text to normalize
     * @return string Normalized text
     * @since 5.1.1
     */
    private function normalize_maori_macrons($text)
    {
    }
    public function get_collection_points($ship_address)
    {
    }
}
/**
 * WC_Shipping_New_Zealand_Post class.
 *
 */
class WC_Shipping_New_Zealand_Post extends \WC_Shipping_Method
{
    public $debug;
    public $offer_rates;
    public $ordered_services;
    public $origin;
    public $packing_method;
    public $postage_type;
    public $api_key;
    public $boxes;
    public $custom_services;
    private $endpoints = array('domestic' => 'http://api.nzpost.co.nz/ratefinder/domestic/rating/v2', 'international' => 'http://api.nzpost.co.nz/ratefinder/international.json');
    private $services = array(
        // Domestic
        'parcel_post' => 'ParcelPost',
        'parcel_post_fast' => 'ParcelPost Fast',
        'parcel_post_tracked' => 'ParcelPost Tracked',
        'parcel_post_tracked_zonal' => 'ParcelPost Tracked Zonal',
        'courier' => 'Courier',
        // New rates
        'STD' => 'Standard Parcel',
        'TRK' => 'Tracked Parcel',
        'COU' => 'Courier',
        'COS' => 'Courier & Signature',
        // International
        'TIEX' => 'International Express Courier',
        'TIEC' => 'International Economy Courier',
        'TIALP' => 'International Air',
        'TIASPC' => 'International Air Small Parcel',
    );
    private $found_rates;
    private $rate_cache;
    /**
     * __construct function.
     *
     * @return void
     */
    public function __construct()
    {
    }
    /**
     * Init function.
     *
     * @return void
     */
    private function init()
    {
    }
    /**
     * Output a message
     */
    public function debug($message, $type = 'notice')
    {
    }
    /**
     * Environment_check function.
     *
     * @return void
     */
    private function environment_check()
    {
    }
    /**
     * Admin_options function.
     *
     * @return void
     */
    public function admin_options()
    {
    }
    /**
     * Generate_services_html function.
     *
     * @return void
     */
    public function generate_services_html()
    {
    }
    /**
     * Generate_box_packing_html function.
     *
     * @return void
     */
    public function generate_box_packing_html()
    {
    }
    /**
     * Validate_box_packing_field function.
     *
     * @param mixed $key
     * @return void
     */
    public function validate_box_packing_field($key)
    {
    }
    /**
     * Validate_services_field function.
     *
     * @param mixed $key
     * @return void
     */
    public function validate_services_field($key)
    {
    }
    /**
     * Clear_transients function.
     *
     * @return void
     */
    public function clear_transients()
    {
    }
    /**
     * Init_form_fields function.
     *
     * @return void
     */
    public function init_form_fields()
    {
    }
    /**
     * Is the postcode rural?
     * NZ Post recommended this logic to determine if an address is rural.
     *
     * @return boolean
     */
    public function is_rural($postcode)
    {
    }
    /**
     * Calculate_shipping function.
     *
     * @param mixed $package
     * @return void
     */
    public function calculate_shipping($package = array())
    {
    }
    /**
     * Prepare_rate function.
     *
     * @param mixed $rate_code
     * @param mixed $rate_id
     * @param mixed $rate_name
     * @param mixed $rate_cost
     * @return void
     */
    private function prepare_rate($rate_code, $rate_id, $rate_name, $rate_cost, $package_request = '')
    {
    }
    /**
     * Get_response function.
     *
     * @param mixed $endpoint
     * @param mixed $request
     * @return array
     */
    private function get_response($endpoint, $request)
    {
    }
    /**
     * Sort_rates function.
     *
     * @param mixed $a
     * @param mixed $b
     * @return void
     */
    public function sort_rates($a, $b)
    {
    }
    /**
     * Get_request function.
     *
     * @param mixed $package
     * @return array
     */
    private function get_request($package)
    {
    }
    /**
     * Get_request function.
     *
     * @return array
     */
    private function get_package_requests($package)
    {
    }
    /**
     * Per_item_shipping function.
     *
     * @param mixed $package
     * @return array
     */
    private function per_item_shipping($package)
    {
    }
    /**
     * Box_shipping function.
     *
     * @param mixed $package
     * @return array
     */
    private function box_shipping($package)
    {
    }
}
class WC_Shipping_New_Zealand_Post_Label
{
    /**
     * Action Scheduler hook that performs the NZ Post label creation call.
     */
    const GENERATE_LABEL_ACTION = 'nzp_generate_shipping_label';
    /**
     * Action Scheduler hook that re-checks a consignment's status.
     */
    const POLL_STATUS_ACTION = 'nzp_poll_consignment_status';
    /**
     * Hard cap on consignment status re-checks. Replaces the previous unbounded
     * recursion, which could loop indefinitely while NZ Post reported "Processing".
     */
    const MAX_STATUS_ATTEMPTS = 5;
    /**
     * Seconds between consignment status re-checks.
     */
    const STATUS_RETRY_INTERVAL = 30;
    /**
     * Action Scheduler group, so these jobs are identifiable in WooCommerce > Status > Scheduled Actions.
     */
    const SCHEDULER_GROUP = 'nz-post';
    public $nzp_config;
    public $label_endpoint;
    public $nzp_api;
    public $nzp_helper;
    public $packing_method;
    public $boxes;
    public function __construct()
    {
    }
    public function custom_filter_shipping_methods_based_on_coupon($rates, $package)
    {
    }
    public function offer_free_shipping_based_on_last_order($rates, $package)
    {
    }
    // Helper to remove all custom shipping methods if no coupon
    public function custom_remove_special_shipping_methods($rates)
    {
    }
    /**
     * Add shpping meta for NZ Post.
     *
     * @param  int $order_id
     */
    /**
     * Normalise an order ID or WC_Order into a WC_Order.
     *
     * The classic and Blocks checkouts hand us different argument types, and the
     * Action Scheduler jobs only carry an ID, so every entry point resolves here.
     *
     * @param  int|WC_Order $order
     * @return WC_Order|null
     */
    private function resolve_order($order)
    {
    }
    /**
     * Single entry point for label generation, shared by the classic and Blocks checkouts.
     *
     * Records the chosen NZ Post service on the order and queues the actual label
     * creation as a background job - the NZ Post API is never called inside the
     * customer's checkout request.
     *
     * @param int|WC_Order $order Order ID (classic checkout) or WC_Order (Store API checkout).
     */
    public function maybe_generate_label_for_order($order)
    {
    }
    /**
     * Backwards-compatible alias for the previous public method name.
     *
     * @deprecated 5.1.2 Use maybe_generate_label_for_order().
     *
     * @param int|WC_Order $order
     */
    public function nz_shipping_meta($order)
    {
    }
    /**
     * Queue label creation on Action Scheduler (bundled with WooCommerce).
     *
     * Falls back to running inline if Action Scheduler is unavailable, so the feature
     * degrades to the old behaviour rather than silently doing nothing.
     *
     * @param int $order_id
     */
    private function enqueue_label_generation($order_id)
    {
    }
    /**
     * Background worker: create the NZ Post label, then start bounded status polling.
     *
     * @param int $order_id
     */
    public function generate_label_for_order_async($order_id)
    {
    }
    /**
     * Queue a bounded consignment status re-check.
     *
     * Replaces the previous in-process sleep()/recursion, which could block a request
     * indefinitely. Without Action Scheduler we perform a single check and stop rather
     * than looping.
     *
     * @param int $order_id
     * @param int $attempt
     */
    private function schedule_status_check($order_id, $attempt)
    {
    }
    /**
     * Background worker: re-check consignment status, rescheduling until it settles
     * or the attempt cap is reached.
     *
     * @param int $order_id
     * @param int $attempt
     */
    public function poll_consignment_status_async($order_id, $attempt = 1)
    {
    }
    /**
     * Add nonce for woocommerce newzeland setting page.
     *
     */
    function nz_shipping_add_nonce()
    {
    }
    /**
     * Add nonce for woocommerce checkout page.
     *
     */
    function validate_checkout_nonce()
    {
    }
    /**
     * Save custom delivery date on order meta data hook.
     */
    function nz_shipping_save_custom_checkout_field($order_id)
    {
    }
    /**
     * Display custom delivery date field on adminside order detail page.
     */
    public function nz_shipping_display_custom_field_admin($order)
    {
    }
    /**
     * Added script file for custom datepicker field.
     */
    public function nz_shipping_load_jquery_ui_for_datepicker()
    {
    }
    /**
     * Display custom delivery date field on checkout page.
     */
    public function nz_shipping_custom_delivery_date_field($checkout)
    {
    }
    /**
     * Get Free shipping minimum value from shipping zones method.
     */
    public function get_free_shipping_minimum()
    {
    }
    /**
     * Displayed Progress bar on cart and checkout page for unlock free shipping method.
     */
    public function display_free_shipping_info_on_cart()
    {
    }
    public function create_nz_shipping_lable($order_id, $shipping_options)
    {
    }
    /**
     * Fetch and store the current consignment status for an order.
     *
     * Performs exactly one request and returns the status. Rescheduling is handled by
     * poll_consignment_status_async() - this method no longer sleeps or recurses.
     *
     * @param  int|WC_Order $order_id
     * @return string|null Consignment status, or null if it could not be determined.
     */
    public function get_consignment_status($order_id)
    {
    }
}
class WC_Shipping_New_Zealand_Post_Privacy extends \WC_Abstract_Privacy
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     *
     * Gets the message of the privacy to display.
     */
    public function get_privacy_message()
    {
    }
}
class WC_Shipping_Role_Based extends \WC_Shipping_Method
{
    public function __construct()
    {
    }
    public function init()
    {
    }
    public function init_form_fields()
    {
    }
    public function calculate_shipping($package = array())
    {
    }
}
class WC_Shipping_Local_Pickup_Custom extends \WC_Shipping_Method
{
    public $nzp_helper;
    public $api_endpoint;
    public $pickup_locations;
    public function __construct($instance_id = 0)
    {
    }
    public function init_form_fields()
    {
    }
    public function admin_options()
    {
    }
    public function custom_pickup_dropdown_from_api($method, $index)
    {
    }
    public function calculate_shipping($package = array())
    {
    }
    /**
     * process_admin_options function.
     *
     * @return void
     */
    public function process_admin_options()
    {
    }
    public function get_zone_postcodes_via_sql($instance_id)
    {
    }
    public function get_collection_points_from_postcodes($postcodes)
    {
    }
    public function save_custom_pickup_location_to_order($item, $package_key, $package, $order)
    {
    }
    public function custom_display_pickup_location($label, $shipping_item)
    {
    }
    public function custom_pickup_location_as_shipping_address($address, $order)
    {
    }
}
class WC_Shipping_New_Zealand_Post_Init
{
    /**
     *
     * Plugin's version.
     *
     * @since 1.3.0
     *
     * @var string
     */
    public $version;
    /**
     *
     * Class Instance
     *
     * @var object
     * */
    private static $instance;
    /**
     *
     * Get the class instance
     */
    public static function get_instance()
    {
    }
    public $nzp_config;
    /**
     *
     * Initialize the plugin's public actions
     */
    public function __construct()
    {
    }
    public function nz_post_add_admin_menu()
    {
    }
    public function render_dashboard_page()
    {
    }
    public function custom_dashboard_shortcode()
    {
    }
    public function handle_dashboard_ajax_data()
    {
    }
    public function get_total_shipments($start_date = \null, $end_date = \null)
    {
    }
    public function get_initiated_shipments($start_date = \null, $end_date = \null)
    {
    }
    private function count_orders_with_meta($meta_key, $start_date = \null, $end_date = \null)
    {
    }
    public function get_total_pickups($start_date = '', $end_date = '')
    {
    }
    public function get_labels_generated($start_date = '', $end_date = '')
    {
    }
    public function custom_shipping_method_coupon_field($coupon)
    {
    }
    public function custom_shipping_method_coupon_field_save($post_id)
    {
    }
    // Validate the store address for customer
    function validate_customer_address_on_save($user_id, $address_type)
    {
    }
    // Check store addess on admin woo settings on cart and checkout page.
    public function validate_cart_page_address($cart)
    {
    }
    // Check store addess on admin woo settings
    function validate_store_address_on_save()
    {
    }
    function display_store_address_on_save($address_data)
    {
    }
    public function validate_nz_post_address($fields, $errors)
    {
    }
    /**
     * Normalize Māori macrons in address strings for API compatibility.
     * Converts macron characters to their ASCII equivalents.
     * 
     * @param string $text Text to normalize
     * @return string Normalized text
     * @since 5.1.1
     */
    private function normalize_maori_macrons($text)
    {
    }
    public function nz_post_address_validation($address_data)
    {
    }
    public function collection_ajax_script()
    {
    }
    /**
     * Admin notice for ShippingOptions v2 stores missing OAuth credentials.
     *
     * Deliberately does not fall back to shared/embedded credentials - if configuration is
     * incomplete, the merchant must be told, not silently routed onto plugin-owned auth.
     *
     * Lives on this always-loaded class (rather than WC_Shipping_New_Zealand_Post, which is
     * only included via the woocommerce_shipping_init hook and may not have loaded on every
     * admin page) so the admin_notices callback is always resolvable.
     */
    public function nzp_v2_credentials_notice()
    {
    }
    /**
     *
     * Environment_check function.
     */
    public function environment_check()
    {
    }
    public function woo_add_shipping_surcharge($cart)
    {
    }
    /**
     *
     * Woocommerce_init_shipping_table_rate function.
     *
     * @since 1.3.0
     * @version 1.3.0
     * @return void
     */
    /**
     * Load the label class on demand.
     *
     * Background (Action Scheduler) requests do not necessarily fire
     * woocommerce_shipping_init, so includes() may not have run. Loading the same files
     * in the same order used by includes() keeps behaviour identical in both contexts.
     *
     * @return WC_Shipping_New_Zealand_Post_Label|null
     */
    private function get_label_handler()
    {
    }
    /**
     * Action Scheduler callback: create the NZ Post label for an order.
     *
     * @param int $order_id
     */
    public function run_generate_shipping_label($order_id)
    {
    }
    /**
     * Action Scheduler callback: re-check an order's consignment status.
     *
     * @param int $order_id
     * @param int $attempt
     */
    public function run_poll_consignment_status($order_id, $attempt = 1)
    {
    }
    public function includes()
    {
    }
    public function custom_add_local_pickup_extended($methods)
    {
    }
    /**
     *
     * Add New Zealand Post shipping method to WC
     *
     * @param mixed $methods
     * @return array
     */
    public function add_method($methods)
    {
    }
    public function save_pickup_dpid()
    {
    }
    /**
     *
     * Localisation
     */
    public function load_textdomain()
    {
    }
    /**
     *
     * Plugin page links
     */
    public function plugin_links($links)
    {
    }
    /**
     *
     * WooCommerce not installed notice
     */
    public function wc_deactivated()
    {
    }
    /**
     *
     * Checks the plugin version
     *
     * @since 1.3.0
     * @version 1.3.0
     * @return void
     */
    public function maybe_install()
    {
    }
    /**
     *
     * Update/migration script
     *
     * @since 1.3.0
     * @version 1.3.0
     *
     * @return void
     */
    public function install()
    {
    }
    /**
     *
     * Show the user a notice for plugin updates
     *
     * @since 1.3.0
     */
    public function upgrade_notice()
    {
    }
    /**
     *
     * Turn of the dismisable upgrade notice.
     *
     * @since 1.3.0
     */
    public function dismiss_upgrade_notice()
    {
    }
    /**
     *
     * Helper method to check whether given zone_id has New Zealand Post method instance.
     *
     * @since 1.3.0
     *
     * @param int $zone_id Zone ID
     *
     * @return bool True if given zone_id has New Zealand Post method instance
     */
    public function is_zone_has_new_zealand_post($zone_id)
    {
    }
    public function nz_post_scripts()
    {
    }
    /**
     * Add script for the admin pages
     */
    public function nz_post_admin_scripts()
    {
    }
    /**
     * Add script for the free Shipping progress bar on cart and checkout page
     */
    public function nz_post_progress_bar_scripts()
    {
    }
    /**
     * Add Custom css for autocomplete shipping address.
     */
    public function nz_post_address_autocomplete_styles()
    {
    }
    /**
     * Add Media library js file for open media dailog box.
     */
    function nz_post_enqueue_scripts($hook_suffix)
    {
    }
    /**
     * Add custom CSS for NZ Post settings page formatting
     */
    public function nz_post_settings_custom_css()
    {
    }
    /**
     * Add Custom css for progress bar.
     */
    public function nz_post_progress_bar_custom_css()
    {
    }
    /**
     * Add Shpping Meta box to order
     */
    public function nzp_shipping_metabox()
    {
    }
    public function nzp_shipping_metabox_callback($post)
    {
    }
    public function nzp_download_shipping_label()
    {
    }
    public function nzp_track_order_percel()
    {
    }
    public function view_shipping_details_order($order_id)
    {
    }
    public function nzp_schedule_tracking_check($order_id)
    {
    }
    public function nzp_check_and_notify_tracking_status($order_id)
    {
    }
    public function recheck_pending_tracking_orders()
    {
    }
    public function nzp_collection_point_fields($fields)
    {
    }
    public function nzp_display_collection_point_fields($fields)
    {
    }
    public function nzp_conditionally_hide_show_collection_fileds()
    {
    }
    public function nzp_save_collection_points($order, $data)
    {
    }
    public function nzp_email_order_tracking_code($fields, $sent_to_admin, $order)
    {
    }
    public function nzp_collection_point_ajax()
    {
    }
}
function change_noship_message($a = \null)
{
}
/**
 *
 * Chack API settings and update if needed according current viersion.
 */
function check_api_settings()
{
}
\define('WC_SHIPPING_NEW_ZEALAND_POST_INIT_VERSION', '4.0.0');
function nzpost_sanitize_address_for_shipping_api($packages)
{
}