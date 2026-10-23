<?php
/**
 * Generated stub declarations for woocommerce-shipping-purolator 3.3.5.
 * @see https://github.com/woocommerce/php-stubs
 */

/**
 * Class WC_Shipping_Purolator_Ajax
 */
class WC_Shipping_Purolator_Ajax
{
    /**
     * Constructor
     *
     * @since 2.4.0
     * @version 2.4.0
     */
    public function __construct()
    {
    }
    /**
     * Validate nonce for frontend/public AJAX requests.
     *
     * @since 3.3.3
     * @return bool
     */
    private function validate_public_ajax_nonce()
    {
    }
    /**
     * Clear Purolator shipping cache to force recalculation
     *
     * @since 2.4.0
     * @param bool $clear_global_transients Whether to clear global Purolator transients.
     * @return void
     */
    private function clear_purolator_shipping_cache($clear_global_transients = \false)
    {
    }
    /**
     * AJAX handler to refresh Purolator shipping rates
     *
     * @since 2.4.0
     * @return void
     */
    public function refresh_shipping_rates()
    {
    }
    /**
     * Handle add to cart event - clear cache to trigger Purolator recalculation
     *
     * @since 2.4.0
     * @param string $cart_item_key Cart item key.
     * @param int    $product_id Product ID.
     * @param int    $quantity Quantity.
     * @param int    $variation_id Variation ID.
     * @param array  $variation Variation data.
     * @param array  $cart_item_data Cart item data.
     * @return void
     */
    public function on_add_to_cart($cart_item_key, $product_id, $quantity, $variation_id, $variation, $cart_item_data)
    {
    }
    /**
     * Handle cart changes (item removed, quantity updated, item restored)
     *
     * @since 2.4.0
     * @return void
     */
    public function on_cart_changed()
    {
    }
    /**
     * Get and print the Purolator label
     *
     * @access public
     * @return void
     */
    public function get_label()
    {
    }
    public function process_label($order_id)
    {
    }
    public function process_documents()
    {
    }
    /**
     * Get the tracking
     *
     * @access public
     * @return void
     */
    public function render_get_tracking()
    {
    }
    /**
     * Void the shipment
     *
     * @access public
     * @return void
     */
    public function render_void_shipment()
    {
    }
    /**
     * Handle Adding product via AJAX on Single product page
     *
     * @access public
     * @since 3.3.1
     */
    public function handle_single_product_ajax_add_to_cart()
    {
    }
}
/**
 * WC_Shipping_Purolator class deprecated.
 *
 * This class serves only WC < 2.6 and will be removed by WC 3.1
 *
 */
class WC_Shipping_Purolator extends \WC_Shipping_Method
{
    // Estimating WSDL and URL's
    public $soap_dev_location = 'https://devwebservices.purolator.com/PWS/V1/Estimating/EstimatingService.asmx';
    public $soap_prod_location = 'https://webservices.purolator.com/PWS/V1/Estimating/EstimatingService.asmx';
    public $wsdl_dev_path = 'wsdl/ws_estimate/Development/EstimatingService.wsdl';
    public $wsdl_prod_path = 'wsdl/ws_estimate/Production/EstimatingService.wsdl';
    // Availability WSDL and URL's
    public $soap_availability_dev_location = 'https://devwebservices.purolator.com/PWS/V1/ServiceAvailability/ServiceAvailabilityService.asmx';
    public $soap_availability_prod_location = 'https://webservices.purolator.com/PWS/V1/ServiceAvailability/ServiceAvailabilityService.asmx';
    public $wsdl_availability_dev_path = 'wsdl/ws_availability/Development/ServiceAvailabilityService.wsdl';
    public $wsdl_availability_prod_path = 'wsdl/ws_availability/Production/ServiceAvailabilityService.wsdl';
    // Shipment WSDL and URL's
    public $soap_shipment_dev_location = 'https://devwebservices.purolator.com/PWS/V1/Shipping/ShippingService.asmx';
    public $soap_shipment_prod_location = 'https://webservices.purolator.com/PWS/V1/Shipping/ShippingService.asmx';
    public $wsdl_shipment_dev_path = 'wsdl/ws_shipment/Development/ShippingService.wsdl';
    public $wsdl_shipment_prod_path = 'wsdl/ws_shipment/Production/ShippingService.wsdl';
    // Shipment WSDL and URL's
    public $soap_getdocuments_dev_location = 'https://devwebservices.purolator.com/PWS/V1/ShippingDocuments/ShippingDocumentsService.asmx';
    public $soap_getdocuments_prod_location = 'https://webservices.purolator.com/PWS/V1/ShippingDocuments/ShippingDocumentsService.asmx';
    public $wsdl_getdocuments_dev_path = 'wsdl/ws_getdocuments/Development/ShippingDocumentsService.wsdl';
    public $wsdl_getdocuments_prod_path = 'wsdl/ws_getdocuments/Production/ShippingDocumentsService.wsdl';
    // Tracking WSDL and URL's
    public $soap_tracking_dev_location = 'https://devwebservices.purolator.com/PWS/V1/Tracking/TrackingService.asmx';
    public $soap_tracking_prod_location = 'https://webservices.purolator.com/PWS/V1/Tracking/TrackingService.asmx';
    public $wsdl_tracking_dev_path = 'wsdl/ws_tracking/Development/TrackingService.wsdl';
    public $wsdl_tracking_prod_path = 'wsdl/ws_tracking/Production/TrackingService.wsdl';
    // Purolator URL
    public $uri = 'http://purolator.com/pws/datatypes/v1';
    public $class_path;
    private $key = '';
    private $pass = '';
    private $request;
    private $soap_extension = \false;
    private $boxes;
    private $total_weight = 0;
    private $total_count = 0;
    private $pieces_information;
    public $contact_name;
    public $company_name;
    public $department;
    public $origin_street_number;
    public $origin_street_name;
    public $origin_city;
    public $origin_province;
    public $origin_postalcode;
    public $origin_country;
    public $country_code;
    public $area_code;
    public $phone_number;
    public $fee_to_ship;
    public $production_key;
    public $pay_shipping_amount;
    public $production_pass;
    public $development_key;
    public $development_pass;
    public $billing_account;
    public $use_account_rates;
    public $shipping_methods;
    public $multiple_rates;
    public $debug;
    public $soap_method;
    public $test_mode;
    public $show_date;
    public $declare_value;
    public $need_signature;
    public $handling_time;
    public $delivery_date_sprint;
    public $delivery_date_format;
    public $packing_method;
    public $printer_type;
    public $auto_create_label;
    public $max_weight;
    public $soap_location;
    public $wsdl_path;
    public $soap_availability_location;
    public $wsdl_availability_path;
    public $soap_shipment_location;
    public $wsdl_shipment_path;
    public $soap_getdocuments_location;
    public $wsdl_getdocuments_path;
    public $soap_tracking_location;
    public $wsdl_tracking_path;
    public $shipping_type;
    public $countries;
    public $street_number;
    public $street_name;
    public function __construct()
    {
    }
    public function admin_scripts()
    {
    }
    /**
     * Display a notice if we don't have a origin city or province selected.
     *
     * @return void
     */
    public function check_notices()
    {
    }
    private function add_notice($message, $notice_type = 'notice')
    {
    }
    public function add_order_actions($actions, $the_order)
    {
    }
    public function email_order_meta_keys($show_fields, $sent_to_admin)
    {
    }
    public function order_status_onhold($order_id)
    {
    }
    public function admin_order_totals_after_shipping($order_id)
    {
    }
    public function product_data_panels()
    {
    }
    public function product_data_tabs($tabs)
    {
    }
    /**
     * Initialise Gateway Settings Form Fields
     */
    function init_form_fields()
    {
    }
    function create_soap_client($wsdl, $location, $ref = 'Shipping', $version = '1.3')
    {
    }
    /**
     * Get shipping quotes based on change of shipping address.
     *
     * @param array $package Package data.
     * @return void
     */
    function calculate_shipping($package = array())
    {
    }
    private function insert_ns($request)
    {
    }
    /**
     * Validate address using Purolator address verification.
     *
     * @access public
     * @param array $address Address data.
     * @return array
     */
    public function validate_address($address)
    {
    }
    /**
     * Send request and retrieve the result.
     */
    function get_shipping_request($package)
    {
    }
    function make_the_call($client, $request, $i = 1)
    {
    }
    /**
     * Send request and retrieve the result.
     */
    function create_shipment($order)
    {
    }
    public function get_documents($shipment_pin)
    {
    }
    public function get_tracking($tracking_number)
    {
    }
    function add_this_estimate($estimate)
    {
    }
    function addDays($timestamp, $days, $skipdays = \null, $skipdates = \null)
    {
    }
    /**
     * Shipping method available condition:
     * 1. Set to yes
     * 2. Origin country is CA
     * 3. Destination country is in the list
     *
     * @param array $package Shipping package data.
     * @return bool
     */
    function is_available($package)
    {
    }
    function admin_options()
    {
    }
    /**
     * get_request function.
     *
     * @access private
     * @return void
     */
    private function set_package_requests($package, $request)
    {
    }
    /**
     * per_item_shipping function.
     *
     * @access private
     * @param mixed $package
     * @return void
     */
    private function per_item_shipping($package, $request)
    {
    }
    /**
     * box_shipping function.
     *
     * @access private
     * @param mixed $package
     * @return void
     */
    private function box_shipping($package, $request)
    {
    }
    /**
     * weight_only_shipping function.
     *
     * @access privatemail
     * @param mixed $package
     * @return void
     */
    private function weight_only_shipping($package, $request)
    {
    }
    /**
     * Generate Multiselect HTML.
     *
     * @access public
     * @param mixed $key
     * @param mixed $data
     * @since 1.0.0
     * @return string
     */
    function generate_multiselect_html($key, $data)
    {
    }
    /**
     * generate_box_packing_html function.
     *
     * @access public
     * @return void
     */
    public function generate_box_packing_html()
    {
    }
    /**
     * validate_box_packing_field function.
     *
     * @access public
     * @param mixed $key
     * @return void
     */
    public function validate_box_packing_field($key)
    {
    }
    public function object_to_xml($obj, $uri, $request = 'GetFullEstimateRequest', $version = '1.3')
    {
    }
    public function generate_xml_from_array($obj, $node_name = '')
    {
    }
    public function object_to_array($d)
    {
    }
    /**
     * Get order property with compatibility check on order getter introduced
     * in WC 3.0.
     *
     * @since 2.4.0
     *
     * @param WC_Order $order Order object.
     * @param string   $prop  Property name.
     *
     * @return mixed Property value
     */
    public static function get_order_prop($order, $prop)
    {
    }
    public function process_label($order_id)
    {
    }
    /**
     * Get and print the Purolator label
     *
     * @access public
     * @return void
     */
    public function get_label()
    {
    }
    public function process_documents()
    {
    }
    public function void_shipment($tracking_number)
    {
    }
}
class WC_Purolator_Order
{
    public function __construct()
    {
    }
    public function admin_scripts()
    {
    }
    public function woocommerce_review_order_after_shipping($the_order)
    {
    }
    public function admin_order_totals_after_shipping($order_id)
    {
    }
    public function add_order_actions($actions, $the_order)
    {
    }
    public function display_purolator_signature_meta_admin($order)
    {
    }
    public function purolator_signature_override_field($order)
    {
    }
    public function purolator_override_toggle_js()
    {
    }
    public function save_signature_override($order_id)
    {
    }
}
class WC_Shipping_Purolator_Privacy extends \WC_Abstract_Privacy
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
     * @param string $email_address
     * @param int    $page
     *
     * @return array WP_Post
     */
    protected function get_puro_orders($email_address, $page)
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
     * @since 3.4.0
     * @param string $email_address The user email address.
     * @param int    $page  Page.
     * @return array An array of personal data in name value pairs
     */
    public function order_data_eraser($email_address, $page)
    {
    }
    /**
     * Handle eraser of data tied to Orders maybe_handle_order
     *
     * @param WC_Order $order
     * @return array
     */
    protected function maybe_handle_order($order)
    {
    }
}
/**
 * Admin list table for the Purolator shipment report.
 */
class WC_Shipping_Purolator_Report_List_Table extends \WP_List_Table
{
    /**
     * @var array<string, string>
     */
    protected $filters = array();
    /**
     * Constructor.
     *
     * @param array<string, string> $filters Sanitized request filters.
     */
    public function __construct($filters = array())
    {
    }
    /**
     * {@inheritdoc}
     */
    public function no_items()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function get_columns()
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function get_sortable_columns()
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function extra_tablenav($which)
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function column_default($item, $column_name)
    {
    }
    /**
     * @param array<string, mixed> $item Row.
     * @return string
     */
    protected function column_order_number($item)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function prepare_items()
    {
    }
}
/**
 * Dedicated WooCommerce admin report for Purolator shipments.
 *
 * Uses locally stored order meta only. Live tracking status is not queried
 * from Purolator so the report stays fast on large order histories.
 */
class WC_Shipping_Purolator_Report
{
    const PAGE_SLUG = 'wc-purolator-shipments';
    const EXPORT_MAX = 2000;
    const QUERY_BATCH = 100;
    /**
     * Register admin hooks.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Add the report under WooCommerce.
     *
     * @return void
     */
    public static function register_menu()
    {
    }
    /**
     * @return void
     */
    public static function add_screen_options()
    {
    }
    /**
     * @param mixed  $status Unused.
     * @param string $option Option name.
     * @param mixed  $value  Submitted value.
     * @return mixed
     */
    public static function save_screen_option($status, $option, $value)
    {
    }
    /**
     * @param string $hook_suffix Current admin page.
     * @return void
     */
    public static function enqueue_assets($hook_suffix)
    {
    }
    /**
     * @return array<string, string>
     */
    public static function get_filters_from_request()
    {
    }
    /**
     * Query shipment rows from local order data only.
     *
     * Pagination is applied at the order query so large stores are not loaded into memory.
     *
     * @param array<string, string> $filters  Filters.
     * @param int                   $per_page Page size.
     * @param int                   $paged    Page number.
     * @return array{rows: array<int, array<string, mixed>>, total: int, total_pages: int}
     */
    public static function query_rows($filters, $per_page = 20, $paged = 1)
    {
    }
    /**
     * Collect matching shipment rows for CSV export, capped for performance.
     *
     * @param array<string, string> $filters Filters.
     * @param int                   $limit   Maximum rows.
     * @return array<int, array<string, mixed>>
     */
    public static function collect_rows($filters, $limit = self::EXPORT_MAX)
    {
    }
    /**
     * Render the report screen.
     *
     * @return void
     */
    public static function render_page()
    {
    }
    /**
     * Export the current filtered result set.
     *
     * @return void
     */
    public static function maybe_export_csv()
    {
    }
    /**
     * @param array<string, string> $filters Filters.
     * @return string
     */
    public static function get_export_url($filters)
    {
    }
    /**
     * @param int $timestamp Unix timestamp.
     * @return string
     */
    public static function format_datetime($timestamp)
    {
    }
    /**
     * @param string $status Status key.
     * @return string
     */
    public static function format_status_label($status)
    {
    }
    /**
     * @param string $status Status key.
     * @return string
     */
    public static function format_status_html($status)
    {
    }
    /**
     * Billing accounts configured on Purolator shipping zone instances.
     *
     * @return void
     */
    protected static function render_account_notice()
    {
    }
    /**
     * @return array<int, array{zone: string, account: string}>
     */
    protected static function get_configured_billing_accounts()
    {
    }
    /**
     * @param array<int, WC_Order>  $orders  Orders.
     * @param array<string, string> $filters Filters.
     * @return array<int, array<string, mixed>>
     */
    protected static function rows_from_orders($orders, $filters)
    {
    }
    /**
     * @param array<string, string> $filters  Filters.
     * @param int                   $per_page Page size.
     * @param int                   $paged    Page number.
     * @return array{orders: array<int, WC_Order>, total: int, total_pages: int}
     */
    protected static function query_orders_page($filters, $per_page, $paged)
    {
    }
    /**
     * @param array<string, string> $filters Filters.
     * @return array<string, string>
     */
    protected static function get_order_sort_args($filters)
    {
    }
    /**
     * Targeted lookup when searching by order number or tracking PIN.
     *
     * @param string $search Search term.
     * @return array<int, WC_Order>|null Null when no search is active.
     */
    protected static function query_orders_for_search($search)
    {
    }
    /**
     * @param array<int, WC_Order> $orders Orders.
     * @return array<int, WC_Order>
     */
    protected static function unique_orders($orders)
    {
    }
    /**
     * @param array<string, string> $filters Filters.
     * @return array<string, mixed>|null
     */
    protected static function get_shipment_date_meta_query($filters)
    {
    }
    /**
     * @param array<string, mixed>  $row     Row.
     * @param array<string, string> $filters Filters.
     * @return bool
     */
    protected static function row_matches_filters($row, $filters)
    {
    }
    /**
     * @param array<int, array<string, mixed>> $rows    Rows.
     * @param string                           $orderby Column.
     * @param string                           $order   ASC/DESC.
     * @return void
     */
    protected static function sort_rows(&$rows, $orderby, $order)
    {
    }
    /**
     * @param array<string, string> $filters Filters.
     * @return array{start: int, end: int}|null
     */
    protected static function get_date_range_timestamps($filters)
    {
    }
    /**
     * @param string $date Date string.
     * @return bool
     */
    protected static function is_valid_date($date)
    {
    }
    /**
     * Prevent CSV formula injection.
     *
     * @param mixed $value Cell value.
     * @return string
     */
    protected static function csv_cell($value)
    {
    }
}
/**
 * Local Purolator shipment records used by the admin report.
 *
 * Reads existing order meta for historical shipments and stores an additive
 * history so voided PINs remain reportable without changing live label/track/void UI.
 */
class WC_Shipping_Purolator_Shipment_Store
{
    const META_SHIPMENTS = '_purolator_shipments';
    const META_HAS_SHIPMENT = '_purolator_has_shipment';
    const META_PINS = '_purolator_pins';
    const STATUS_CREATED = 'created';
    const STATUS_VOIDED = 'voided';
    /**
     * Record a created shipment. Safe to call repeatedly for the same PIN.
     *
     * @param WC_Order|int $order Order object or ID.
     * @param string       $pin   Purolator PIN / tracking number.
     * @return void
     */
    public static function record_created($order, $pin)
    {
    }
    /**
     * Mark a shipment as voided while keeping it available for reporting.
     *
     * @param WC_Order|int $order Order object or ID.
     * @param string       $pin   Purolator PIN / tracking number.
     * @return void
     */
    public static function record_voided($order, $pin)
    {
    }
    /**
     * Stored history records for an order.
     *
     * @param WC_Order|int $order Order object or ID.
     * @return array<int, array<string, mixed>>
     */
    public static function get_records($order)
    {
    }
    /**
     * Build report rows from stored history plus legacy live meta.
     *
     * @param WC_Order $order Order object.
     * @return array<int, array<string, mixed>>
     */
    public static function get_report_rows($order)
    {
    }
    /**
     * Whether the order currently has reportable Purolator shipment data.
     *
     * @param WC_Order $order Order object.
     * @return bool
     */
    public static function order_has_shipment_data($order)
    {
    }
    /**
     * Active tracking number stored by the existing label flow.
     *
     * @param WC_Order $order Order object.
     * @return string
     */
    public static function get_live_tracking_number($order)
    {
    }
    /**
     * Unix timestamp for the current live shipment.
     *
     * @param WC_Order $order Order object.
     * @return int
     */
    public static function get_live_shipment_timestamp($order)
    {
    }
    /**
     * Customer display name.
     *
     * @param WC_Order $order Order object.
     * @return string
     */
    public static function get_customer_name($order)
    {
    }
    /**
     * Compact shipping destination.
     *
     * @param WC_Order $order Order object.
     * @return string
     */
    public static function get_destination($order)
    {
    }
    /**
     * @param WC_Order|int $order Order object or ID.
     * @return WC_Order|null
     */
    private static function resolve_order($order)
    {
    }
    /**
     * @param string $pin Raw PIN.
     * @return string
     */
    private static function normalize_pin($pin)
    {
    }
    /**
     * @param WC_Order $order  Order object.
     * @param string   $pin    PIN.
     * @param string   $status Status.
     * @return array<string, mixed>
     */
    private static function build_record($order, $pin, $status)
    {
    }
    /**
     * @param WC_Order             $order  Order object.
     * @param array<string, mixed> $record Stored or synthesized record.
     * @return array<string, mixed>
     */
    private static function normalize_report_row($order, $record)
    {
    }
    /**
     * @param WC_Order                       $order   Order object.
     * @param array<int, array<string, mixed>> $records Records.
     * @return void
     */
    private static function persist($order, $records)
    {
    }
    /**
     * Keep a searchable PIN index without changing live tracking meta.
     *
     * @param WC_Order                       $order   Order object.
     * @param array<int, array<string, mixed>> $records Records.
     * @return void
     */
    private static function persist_search_index($order, $records)
    {
    }
}
/**
 * Check for WC_Purolator
 */
class WC_Purolator
{
    /**
     * Request-scoped flag to avoid repetitive cart logs.
     *
     * @var bool
     */
    private $did_log_loaded_methods = \false;
    /**
     * Lightweight logger for shipping bootstrap diagnostics.
     *
     * @param string $message Log message.
     * @param array  $context Context payload.
     */
    private function log_debug($message, $context = array())
    {
    }
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    public function purolator_enqueue_scripts()
    {
    }
    /**
     * Callback for download XML file.
     */
    public function download_xml_file()
    {
    }
    /**
     * Localisation
     */
    public function load_plugin_textdomain()
    {
    }
    /**
     * Plugin page links
     *
     * @param int $links Link for plugin action.
     */
    public function plugin_action_links($links)
    {
    }
    /**
     * Load gateway class
     */
    public function init()
    {
    }
    /**
     * Load load_order_functions.
     */
    public function load_order_functions()
    {
    }
    /**
     * Loads all ajax processes.
     *
     * @since 2.4.0
     * @version 2.4.0
     */
    public function load_ajax_processes()
    {
    }
    /**
     * Add method to WC
     *
     * @param string $methods WC_Shipping_Purolator.
     */
    public function add_method($methods)
    {
    }
    /**
     * Remove invalid shipping method instances before WooCommerce uses supports().
     *
     * @param array $package Shipping package.
     * @return void
     */
    public function sanitize_loaded_shipping_methods($package = array())
    {
    }
    /**
     * Sanitize package rates to prevent null shipping method lookups in WooCommerce core.
     *
     * Some malformed or stale cached rates can carry method_id values that do not map
     * to loaded shipping method objects, which leads to:
     * "Call to a member function supports() on null".
     *
     * @param array $rates   Package rates.
     * @param array $package Shipping package.
     * @return array
     */
    public function sanitize_package_rates($rates, $package)
    {
    }
    /**
     * Sanitize stale session-cached Purolator rates from older plugin versions.
     *
     * This prevents Store API / checkout-block requests from loading cached rates
     * with malformed method IDs (e.g. "purolator:Service"), which can later trigger
     * null shipping method lookups in WooCommerce core.
     *
     * @return void
     */
    public function sanitize_session_cached_rates()
    {
    }
    /**
     * Log available shipping methods during cart/checkout rate calculation.
     *
     * @param array  $package         Shipping package.
     * @param object $shipping_method Current shipping method being evaluated.
     * @return void
     */
    public function log_cart_shipping_methods($package, $shipping_method)
    {
    }
    /**
     * Checks the plugin version
     *
     * @access public
     * @since 2.4.0
     * @version 2.4.0
     * @return void
     */
    public function maybe_install()
    {
    }
    /**
     * Update/migration script
     *
     * @since 2.4.0
     * @version 2.4.0
     * @access public
     */
    public function install()
    {
    }
    /**
     * XML file generation callback.
     */
    public function error_log_xml()
    {
    }
    /**
     * Show the user a notice for plugin updates
     *
     * @since 2.4.0
     */
    public function upgrade_notice()
    {
    }
    /**
     * Turn of the dismisable upgrade notice.
     *
     * @since 2.4.0
     */
    public function dismiss_upgrade_notice()
    {
    }
    /**
     * Helper method to check whether given zone_id has purolator method instance.
     *
     * @since 2.4.0
     *
     * @param int $zone_id Zone ID.
     *
     * @return bool True if given zone_id has purolator method instance
     */
    public function is_zone_has_purolator($zone_id)
    {
    }
    /**
     * Action hook for executing code before the order table in a WooCommerce email.
     *
     * @param WC_Order $order The order object.
     * @param bool     $sent_to_admin Whether the email is sent to the admin or not.
     * @param bool     $plain_text Whether the email is plain text or not.
     * @param WC_Email $email The WooCommerce email instance.
     */
    public function action_woocommerce_email_before_order_table($order, $sent_to_admin, $plain_text, $email)
    {
    }
}
\define('WC_SHIPPING_PUROLATOR_VERSION', '3.3.4');