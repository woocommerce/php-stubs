<?php
/**
 * Generated stub declarations for woocommerce-product-addons 8.4.5.
 * @see https://github.com/woocommerce/php-stubs
 */

/**
 * Product AddOns edit-order functions and filters.
 *
 * @class    WC_Product_Addons_Admin_Ajax
 * @version  8.4.5
 */
class WC_Product_Addons_Admin_Ajax
{
    /**
     * Hook in.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Generates a string describing the change in an addon value.
     *
     * @param  array        $addon          The addon.
     * @param  string|array $posted_value   Posted value.
     * @param  string|array $current_value  Current value.
     * @return string|null
     */
    protected static function generate_change_string($addon, $posted_value, $current_value)
    {
    }
    /**
     * Store updated product addons for an order item.
     *
     * @param  WC_Order_Item_Product $item     Order item.
     * @param  WC_Product            $product  Product.
     * @param  WC_Order              $order    Order.
     *
     * @return bool True on success, including products without add-ons; false on validation failure.
     */
    public static function store_product_addons($item, $product, $order)
    {
    }
    /**
     * Ajax handler used to store updated order item.
     *
     * @return void
     */
    public static function ajax_edit_addon_order_item()
    {
    }
    /**
     * Render the form content for populating "Configure/Edit" addon order item modals.
     *
     * @param  WC_Order|null      $order    Order.
     * @param  WC_Order_Item|null $item     Order item.
     * @param  WC_Product         $product  Product.
     *
     * @return string|false
     */
    public static function render_form($order, $item, $product)
    {
    }
    /**
     * Form content used to populate "Configure/Edit" addon order item modals.
     *
     * @return void
     */
    public static function ajax_addon_order_item_form()
    {
    }
    /**
     * Return the addon values for a cart item.
     *
     * @param  WC_Order_Item|null $item          Order item.
     * @param  array|null         $addon_values  Addon values to use (or load from item).
     *
     * @return array Cart item data
     */
    protected static function get_addon_values($item, $addon_values = \null): array
    {
    }
    /**
     * Validate the request and fetch the order, item, and product.
     *
     * @throws Exception If the request is invalid, or the current user is not allowed to edit the requested order.
     *
     * @return array
     */
    public static function validate_request_and_fetch_data(): array
    {
    }
}
/**
 * Adds a custom global add-ons list table.
 *
 * @class    WC_PAO_List_Table
 * @version  8.4.5
 */
class WC_PAO_List_Table extends \WP_List_Table
{
    /**
     * Page home URL.
     *
     * @const PAGE_URL
     */
    const PAGE_URL = 'edit.php?post_type=product&page=addons';
    /**
     * Total view records.
     *
     * @var int
     */
    public $total_items = 0;
    /**
     * Constructor
     *
     * @version 8.4.0
     */
    public function __construct()
    {
    }
    /**
     * Handles the title column output.
     *
     * @param array $item
     * @return void
     */
    public function column_name($item)
    {
    }
    /**
     * Handles the checkbox column output.
     *
     * @param array $item
     * @return void
     */
    public function column_cb($item)
    {
    }
    /**
     * Handles the Priority column output.
     *
     * @param array $item
     * @return void
     */
    public function column_priority($item)
    {
    }
    /**
     * Handles the Product Categories column output.
     *
     * @param array $item
     * @return void
     */
    public function column_product_categories($item)
    {
    }
    /**
     * Handles the Number of fields column output.
     *
     * @param array $item
     * @return void
     */
    public function column_fields($item)
    {
    }
    /**
     * Get a list of columns. The format is:
     * 'internal-name' => 'Title'
     */
    public function get_columns()
    {
    }
    /**
     * Return sortable columns.
     *
     * @version 8.4.0
     *
     * @return array<string, array{string, bool}>
     */
    public function get_sortable_columns()
    {
    }
    /**
     * Returns bulk actions.
     *
     * @return array<string, string>
     */
    protected function get_bulk_actions()
    {
    }
    /**
     * Process bulk actions.
     *
     * @return void
     */
    private function process_bulk_action()
    {
    }
    /**
     * Query the DB and attach items.
     *
     * @version 8.4.0
     *
     * @return void
     */
    public function prepare_items()
    {
    }
    /**
     * Message to be displayed when there are no items.
     *
     * @return void
     */
    public function no_items()
    {
    }
}
/**
 * Product Add-Ons admin notices handling.
 *
 * @class    WC_PAO_Admin_Notices
 * @version  8.4.5
 */
class WC_PAO_Admin_Notices
{
    /**
     * Notices persisting on the next request.
     *
     * @var array
     */
    public static $meta_box_notices = array();
    /**
     * Notices displayed on the current request.
     *
     * @var array
     */
    public static $admin_notices = array();
    /**
     * Maintenance notices displayed on every request until cleared.
     *
     * @var array
     */
    public static $maintenance_notices = array();
    /**
     * Dismissible notices displayed on the current request.
     *
     * @var array
     */
    public static $dismissed_notices = array();
    /**
     * Array of maintenance notice types - name => callback.
     *
     * @var array<string, string>
     */
    private static $maintenance_notice_types = array();
    /**
     * Constructor.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Add a notice/error.
     *
     * @param  string  $text
     * @param  mixed   $args
     * @param  boolean $save_notice
     * @return void
     */
    public static function add_notice($text, $args, $save_notice = \false)
    {
    }
    /**
     * Checks if a notice that belongs to a the specified uniqueness context already exists.
     *
     * @since  6.0.0
     *
     * @param  string $context
     * @return bool
     */
    private static function unique_notice_exists($context)
    {
    }
    /**
     * Get a setting for a notice type.
     *
     * @since  6.0.0
     *
     * @param  string $notice_name
     * @param  string $key
     * @param  mixed  $default
     * @return array
     */
    public static function get_notice_option($notice_name, $key, $default = \null)
    {
    }
    /**
     * Set a setting for a notice type.
     *
     * @since  6.0.0
     *
     * @param  string $notice_name
     * @param  string $key
     * @param  mixed  $value
     * @return void
     */
    public static function set_notice_option($notice_name, $key, $value)
    {
    }
    /**
     * Checks if a maintenance notice is visible.
     *
     * @since  6.0.0
     *
     * @param  string $notice_name
     * @return boolean
     */
    public static function is_maintenance_notice_visible($notice_name)
    {
    }
    /**
     * Checks if a dismissible notice has been dismissed in the past.
     *
     * @since  6.0.0
     *
     * @param  string $notice_name
     * @return boolean
     */
    public static function is_dismissible_notice_dismissed($notice_name)
    {
    }
    /**
     * Save notices to the DB.
     *
     * @return void
     */
    public static function save_notices()
    {
    }
    /**
     * Show any stored error messages.
     *
     * @version 8.4.1
     * @return void
     */
    public static function output_notices()
    {
    }
    /**
     * Show maintenance notices.
     *
     * @return void
     */
    public static function hook_maintenance_notices()
    {
    }
    /**
     * Add a maintenance notice to be displayed.
     *
     * @param string $notice_name Notice name.
     * @return bool
     */
    public static function add_maintenance_notice($notice_name)
    {
    }
    /**
     * Remove a maintenance notice.
     *
     * @param  string $notice_name Notice name.
     * @return bool
     */
    public static function remove_maintenance_notice($notice_name)
    {
    }
    /**
     * Add a dimissible notice/error.
     *
     * @since  6.0.0
     *
     * @param  string $text
     * @param  mixed  $args
     * @return void
     */
    public static function add_dismissible_notice($text, $args)
    {
    }
    /**
     * Remove a dismissible notice.
     *
     * @since  6.0.0
     *
     * @param  string $notice_name
     * @return bool
     */
    public static function remove_dismissible_notice($notice_name)
    {
    }
    /**
     * Dismisses a notice. Dismissible maintenance notices cannot be dismissed forever.
     *
     * @since  6.0.0
     *
     * @param  string $notice
     * @return bool
     */
    public static function dismiss_notice($notice)
    {
    }
}
/**
 * Product AddOns edit-order functions and filters.
 *
 * @class    WC_Product_Addons_Admin_Order
 * @version  8.4.5
 */
class WC_Product_Addons_Admin_Order
{
    /**
     * Order object to use in 'display_edit_button'.
     *
     * @var WC_Order|null
     */
    protected static $order;
    /**
     * Setup Admin class.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Save order object to use in 'display_edit_button'.
     *
     * Although the order object can be retrieved via 'WC_Order_Item::get_order', we've seen a significant performance hit when using that method.
     *
     * @param  WC_Order $order Order object.
     * @return void
     */
    public static function set_order($order)
    {
    }
    /**
     * Display "Configure/Edit" button next to configurable addons in the edit-order screen.
     *
     * @param  int                   $item_id Item ID.
     * @param  WC_Order_Item         $item   Order item object.
     * @param  WC_Product|false|null $product Product object.
     * @return void
     */
    public static function display_edit_button($item_id, $item, $product)
    {
    }
    /**
     * JS template of modal for configuring/editing add-ons.
     *
     * @return void
     */
    public static function add_js_template()
    {
    }
}
/**
 * Product_Addon_Admin class.
 */
/**
 * Product Add-Ons admin.
 *
 * @class    WC_Product_Addons_Admin
 * @version  8.4.5
 */
class WC_Product_Addons_Admin
{
    /**
     * Initialize administrative actions.
     */
    public function __construct()
    {
    }
    /**
     * Add menus.
     *
     * @version 8.4.0
     * @return void
     */
    public function admin_menu()
    {
    }
    /**
     * Register per-page screen option for the global add-ons list table.
     *
     * @since 8.4.0
     * @return void
     */
    public function add_addons_screen_options()
    {
    }
    /**
     * Save the per-page screen option value.
     *
     * @since  8.4.0
     *
     * @param  mixed  $status Screen option value. Default false to skip.
     * @param  string $option The option name.
     * @param  int    $value  The number of rows to use.
     * @return mixed
     */
    public function set_addons_screen_option($status, $option, $value)
    {
    }
    /**
     * Include dependencies.
     *
     * @return void
     */
    public function includes()
    {
    }
    /**
     * Injects new add-ons settings section.
     *
     * @param  array $sections  Other admin settings sections.
     *
     * @return array
     */
    public function add_addons_section(array $sections): array
    {
    }
    /**
     * Renders the add-ons settings.
     *
     * @param  mixed  $settings   Settings of the current section, as filtered by 'woocommerce_get_settings_products'.
     * @param  string $section_id Current section ID.
     * @return mixed
     */
    public function add_addons_settings($settings, $section_id)
    {
    }
    /**
     * Get add-on options.
     *
     * @since 3.0.0.
     * @return void
     */
    public function ajax_get_addon_options()
    {
    }
    /**
     * Get add-on field.
     *
     * @since 3.0.0.
     * @return void
     */
    public function ajax_get_addon_field()
    {
    }
    /**
     * AJAX callback for importing product add-ons.
     *
     * @since 6.5.0
     * @return void
     */
    public function ajax_import_addons()
    {
    }
    /**
     * Enqueue scripts and styles.
     *
     * @since 3.0.0
     * @return void
     */
    public function script_styles()
    {
    }
    /**
     * Add screen id to WooCommerce.
     *
     * @param  array $screen_ids  List of screen IDs.
     * @return array
     */
    public function add_screen_id($screen_ids)
    {
    }
    /**
     * Connect pages with navigation bar.
     *
     * @since 6.4.7
     * @return void
     */
    public static function wc_admin_connect_pao_pages()
    {
    }
    /**
     * Controls the global addons admin page.
     *
     * @return void
     */
    public function global_addons_admin()
    {
    }
    /**
     * Converts the field type key to display name.
     *
     * @since 3.0.0
     * @param  string $type
     * @return string $name
     */
    public function convert_type_name($type = '')
    {
    }
    /**
     * Save global addons
     *
     * @return array|false posted addons data, or false when the edited post is not a global add-ons group
     */
    public function save_global_addons()
    {
    }
    /**
     * Add product tab.
     *
     * @return void
     */
    public function tab()
    {
    }
    /**
     * Add product panel.
     *
     * @return void
     */
    public function panel()
    {
    }
    /**
     * Backwards compatibility: Add a notice if an add-on title exceeds the 255 characters threshold.
     *
     * @return void
     */
    public function maybe_add_title_max_length_notice()
    {
    }
    /**
     * Process meta box.
     *
     * @param  int $post_id  Post ID.
     * @return void
     */
    public function process_meta_box($post_id)
    {
    }
    /**
     * Generate a filterable default new addon option.
     *
     * @return array
     */
    public static function get_new_addon_option()
    {
    }
    /**
     * Put posted addon data into an array.
     *
     * @return array
     */
    protected function get_posted_product_addons()
    {
    }
    /**
     * Sanitize and normalize a file upload addon's allowed file types.
     *
     * Accepts either an array of extensions or a comma-separated string
     * (both appear on the wire depending on the source: form fields post a
     * string, while the JSON import posts an array) and returns the
     * cleaned-up array form used by the rest of the plugin. Callers are
     * responsible for unslashing the raw value before passing it in, and
     * for deciding whether an empty result should be stored as `''`.
     *
     * @since 8.4.2
     * @param  mixed $allowed_file_types  Raw allowed file types (array or comma-separated string).
     * @return string[]
     */
    private function sanitize_allowed_file_types($allowed_file_types)
    {
    }
    /**
     * Sanitize the addon.
     *
     * @since 3.0.36
     * @param  array $addon  Array containing the addon data.
     * @return array
     */
    public function sanitize_addon($addon)
    {
    }
    /**
     * Filters the admin order hidden metas to hide addons.
     *
     * @since 3.0.0
     * @param  string[] $hidden_metas Hidden order item meta keys.
     * @return string[]
     */
    public function filter_hidden_order_itemmeta($hidden_metas)
    {
    }
    /**
     * Filters the admin order line item to show only addons.
     *
     * @since 3.0.0
     * @param  int    $item_id
     * @param  object $item
     * @param  object $order
     * @return void
     */
    public function filter_order_line_item_html($item_id, $item, $order)
    {
    }
    /**
     * Filters the admin order line item to show only addons.
     *
     * @since 3.0.0
     * @param  int    $item_id
     * @param  object $item
     * @param  object $order
     * @return void
     */
    public function filter_order_line_item_after_html($item_id, $item, $order)
    {
    }
    /**
     * Sort addons.
     *
     * @param  array $a  First item to compare.
     * @param  array $b  Second item to compare.
     * @return int
     */
    protected function addons_cmp($a, $b)
    {
    }
    /**
     * Prints warning messages in the admin area.
     *
     * @param  string $content
     * @param  string $type
     * @return void
     */
    public function output_notice($content, $type)
    {
    }
}
/**
 * WC_Product_Addons_Privacy class
 */
class WC_Product_Addons_Privacy extends \WC_Abstract_Privacy
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Gets the message of the privacy to display.
     */
    public function get_privacy_message()
    {
    }
}
/**
 * WooCommerce core Product Exporter support.
 *
 * @class    WC_Product_Addons_Product_Export
 * @version  8.4.5
 */
class WC_Product_Addons_Product_Export
{
    /**
     * Hook in.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Export Product Add-Ons.
     *
     * @param  mixed        $meta_value
     * @param  WC_Meta_Data $meta
     * @param  WC_Product   $product
     * @param  array        $row
     * @return string        $meta_value
     */
    public static function export_product_addons($meta_value, $meta, $product, $row)
    {
    }
}
/**
 * WooCommerce core Product Importer support.
 *
 * @class    WC_Product_Addons_Product_Import
 * @version  8.4.5
 */
class WC_Product_Addons_Product_Import
{
    /**
     * Hook in.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Keep JSON intact until the decoded field values can be sanitized.
     *
     * @since 8.4.5
     * @param array                   $callbacks Native column parsers.
     * @param WC_Product_CSV_Importer $importer Native importer.
     * @return array
     */
    public static function formatting_callbacks($callbacks, $importer)
    {
    }
    /**
     * Parse Product Add-Ons..
     *
     * @param  array                   $parsed_data
     * @param  WC_Product_CSV_Importer $importer
     * @return array                    $parsed_data
     */
    public static function import_product_addons($parsed_data, $importer)
    {
    }
}
class WC_Product_Add_Ons_Groups_Controller extends \WP_REST_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc-product-add-ons/v1';
    /**
     * Endpoint method (GET/POST/PUT...)
     *
     * @var string
     */
    protected $method;
    public function __construct()
    {
    }
    /**
     * Register the route for groups
     *
     * @since 2.9.0
     * @return void
     */
    public function register_routes()
    {
    }
    /**
     * Add (POST/CREATABLE) a global group
     *
     * @since 2.9.0
     * @param $request WP_REST_Request
     * @return WP_REST_Response| mixed
     */
    public function create_item($request)
    {
    }
    /**
     * Get (GET/READABLE) all (global) groups
     *
     * @since 2.9.0
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response| mixed
     */
    public function get_all($request)
    {
    }
    /**
     * Get (GET/READABLE) a single group
     *
     * @since 2.9.0
     * @param $request WP_REST_Request
     * @return WP_REST_Response| WP_Error
     */
    public function get_item($request)
    {
    }
    /**
     * Update (PUT/EDITABLE) a global group or product
     *
     * @since 2.9.0
     * @param $request WP_REST_Request
     * @return WP_REST_Response| WP_Error
     */
    public function update_item($request)
    {
    }
    /**
     * Delete (DELETE/DELETABLE) a global group
     *
     * @since 2.9.0
     * @param $request array REST API request
     * @return WP_REST_Response| WP_Error
     */
    public function delete_item($request)
    {
    }
    /** Validate the requester's permissions
     *
     * @since 2.9.0
     *
     * @param WP_REST_Request $request Request object.
     * @return boolean|WP_Error
     */
    public function permissions_check($request)
    {
    }
}
/**
 * Extends the store public API with add-ons related data.
 *
 * @version 8.4.5
 */
class WC_Product_Addons_Store_API
{
    /**
     * Plugin Identifier, unique to each plugin.
     *
     * @var string
     */
    const IDENTIFIER = 'addons';
    /**
     * Bootstraps the class and hooks required data.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Registers the actual data into each endpoint.
     *
     * @return void
     */
    public static function extend_store()
    {
    }
    /**
     * Register subscription product data into cart/items endpoint.
     *
     * @param array $cart_item
     * @return array $item_data
     */
    public static function extend_cart_item_data($cart_item)
    {
    }
    /**
     * Register subscription product schema into cart/items endpoint.
     *
     * @return array Registered schema.
     */
    public static function extend_cart_item_schema()
    {
    }
    /**
     * Aggregates bundle container item prices.
     *
     * @param array $item_data
     * @param array $cart_item
     * @return void
     */
    private static function filter_cart_item_prices(&$item_data, $cart_item)
    {
    }
    /**
     * Removes flat fee add-ons from product prices in the cart.
     *
     * @param array $item_data
     * @param array $cart_item
     * @return void
     */
    public static function remove_flat_fees_from_cart_item_price(&$item_data, $cart_item)
    {
    }
    /**
     * Re-adds flat fee add-ons from product prices in the cart.
     *
     * @param array $item_data
     * @param array $cart_item
     * @return void
     */
    public static function add_flat_fees_from_cart_item_price(&$item_data, $cart_item)
    {
    }
    /**
     * Removes flat fee add-ons from aggregated Bundle/Composite prices in the cart.
     *
     * @param array $item_data
     * @param array $cart_item
     * @return void
     */
    public static function remove_flat_fees_from_aggregated_container_prices($item_data, $cart_item)
    {
    }
    /**
     * Re-adds flat fee add-ons to aggregated Bundle/Composite prices in the cart.
     *
     * @param array $item_data
     * @param array $cart_item
     * @return void
     */
    public static function add_flat_fees_to_aggregated_container_prices($item_data, $cart_item)
    {
    }
    /**
     * Convert monetary values from WooCommerce to string based integers, using
     * the smallest unit of a currency.
     *
     * @param string|float $amount
     * @param int          $decimals
     * @param int          $rounding_mode
     * @return string
     */
    private static function prepare_money_response($amount, $decimals = 2, $rounding_mode = \PHP_ROUND_HALF_UP)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Callbacks.
    |--------------------------------------------------------------------------
    */
    /**
     * Filter store API responses to:
     *
     * - aggregate bundle container prices/subtotals;
     * - keep min/max/step quantity fields in sync.
     *
     * @param  mixed                $response Result to send to the client, as filtered by other callbacks.
     * @param  array<string, mixed> $server   Route handler used for the request.
     * @param  WP_REST_Request      $request  Request used to generate the response.
     * @return WP_REST_Response|WP_Error
     */
    public static function filter_cart_item_data($response, $server, $request)
    {
    }
    /**
     * Filter cart item permalink.
     *
     * @param array $item_data Item data.
     * @param array $cart_item Cart item data.
     * @return void
     */
    private static function filter_cart_item_permalink(&$item_data, $cart_item)
    {
    }
}
/**
 * Rest API v2 Abstract Group helper.
 *
 * @package Automattic\WooCommerce\ProductAddons
 * @since 7.0.3
 * @version 8.4.5
 */
/**
 * WC_Product_Addons_Api_V2_Abstract_Group class.
 */
abstract class WC_Product_Addons_Api_V2_Abstract_Group
{
    /**
     * Group ID.
     *
     * @var int
     */
    protected $id = 0;
    /**
     * Group name.
     *
     * @var string
     */
    protected $name = '';
    /**
     * Group priority.
     *
     * @var int
     */
    protected $priority = 1;
    /**
     * Group fields (add-ons).
     *
     * @var array
     */
    protected $fields = array();
    /**
     * Persist data.
     *
     * @return void
     */
    abstract public function save();
    /**
     * Get id.
     *
     * @return int
     */
    public function get_id()
    {
    }
    /**
     * Get name.
     *
     * @return string
     */
    public function get_name()
    {
    }
    /**
     * Set name.
     *
     * @param string $value Value to set.
     * @return void
     */
    public function set_name(string $value)
    {
    }
    /**
     * Get priority.
     *
     * @return int
     */
    public function get_priority()
    {
    }
    /**
     * Set priority.
     *
     * @param int $value Value to set.
     * @return void
     */
    public function set_priority(int $value)
    {
    }
    /**
     * Get fields.
     *
     * @return array
     */
    public function get_fields()
    {
    }
    /**
     * Set fields.
     *
     * @param array $value Value to set.
     * @return void
     */
    public function set_fields(array $value)
    {
    }
    /**
     * Update fields.
     *
     * Blend in Add-Ons with matching id, create new Add-Ons if not found.
     *
     * @param array $values Values to update.
     * @return void
     */
    public function update_fields(array $values)
    {
    }
    /**
     * Convert fields from the DB format to internal representation which is aligned with the API types.
     *
     * - Numeric values converted to their correct types (int/float).
     * - Bool values stored as 0/1 converted to true/false.
     * - Options are normalized using normalize_field_options_from_db.
     * - Defaults converted to string (as it's a complex type, can be both an int/float number or a list of numbers)
     *
     * @param string|array $fields Fields to format.
     */
    protected function set_fields_from_db($fields): void
    {
    }
    /**
     * Normalize options of a field.
     *
     * @param array $option Field option.
     * @return array
     */
    protected static function normalize_field_options_from_db(array $option): array
    {
    }
    /**
     * Normalize default option.
     *
     * @param string $default_option_value Default option.
     * @param string $type  Add-on type.
     * @return string
     */
    protected static function normalize_default_options_for_db(string $default_option_value, string $type)
    {
    }
    /**
     * Normalize min/max for storing in the db based on the add-on type.
     *
     * @param string $value Min or max value to normalize.
     * @param string $addon_type Type of add-on.
     *
     * @return float|int|string
     */
    protected static function normalize_min_max_for_db(string $value, string $addon_type)
    {
    }
    /**
     * Get fields to save to DB.
     *
     * @return array
     */
    protected function get_fields_for_db(): array
    {
    }
}
/**
 * Rest API v2 Controller.
 *
 * @package Automattic\WooCommerce\ProductAddons
 * @since 6.9.0
 * @version 8.4.5
 */
/**
 * Controller class.
 */
class WC_Product_Addons_Api_V2_Controller extends \WP_REST_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc-product-add-ons/v2';
    /**
     * Validation helper.
     *
     * @var WC_Product_Addons_Api_V2_Validation
     */
    protected $validation;
    /**
     * Constructor.
     *
     * @param WC_Product_Addons_Api_V2_Validation $validation Validation helper instance.
     */
    public function __construct(\WC_Product_Addons_Api_V2_Validation $validation)
    {
    }
    /**
     * Register the route for groups
     *
     * @since 2.9.0
     * @return void
     */
    public function register_routes()
    {
    }
    /**
     * Retrieves an array of endpoint arguments from the item schema for the controller.
     *
     * @param string $method Optional. HTTP method of the request.
     * @return array Endpoint arguments.
     */
    public function get_endpoint_args_for_item_schema($method = \WP_REST_Server::CREATABLE)
    {
    }
    /**
     * Returns the full item schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
    }
    /**
     * Addon schema properties.
     *
     * @return array
     */
    protected function get_global_addons_properties()
    {
    }
    /**
     * Addon field schema properties. Note, all properties are required but we set defaults for non-required props when
     * sanitizing the request.
     *
     * Sanitization inspired by WC_Product_Addons_Admin::ajax_get_addon_field().
     *
     * @return array
     */
    public function get_common_addon_properties()
    {
    }
    /**
     * Get (GET/READABLE) all global Add-On groups
     *
     * @return \WP_REST_Response
     */
    public function get_all()
    {
    }
    /**
     * Get (GET/READABLE) a single group
     *
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response|\WP_Error
     */
    public function get_item($request)
    {
    }
    /**
     * Format WC_Product_Addons_Api_V2_Global_Group object for the response.
     *
     * @param WC_Product_Addons_Api_V2_Global_Group $result Object to format.
     *
     * @return array
     */
    protected function format_response(\WC_Product_Addons_Api_V2_Global_Group $result)
    {
    }
    /**
     * Add (POST/CREATABLE) a global Add-On group
     *
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response|\WP_Error
     */
    public function create_item($request)
    {
    }
    /**
     * Update (PUT/EDITABLE) a global Add-On group
     *
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response|\WP_Error
     */
    public function update_item($request)
    {
    }
    /**
     * Delete (DELETE/DELETABLE) a global Add-On group
     *
     * @since 2.9.0
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response|\WP_Error
     */
    public function delete_item($request)
    {
    }
    /**
     * Get the group ID of a request, or 0 when it is not a number.
     *
     * `id` can come from the query string or body as well as the URL, so it may be any
     * string or an array. A numeric value is cast as PHP would coerce it for the
     * constructor, so a negative ID still reaches it and gets its 404.
     *
     * @since 8.4.5
     *
     * @param \WP_REST_Request $request Request object.
     * @return int
     */
    private function get_request_group_id($request)
    {
    }
    /**
     * Validate the requester's permissions
     *
     * @return boolean|\WP_Error
     */
    public function permissions_check()
    {
    }
}
/**
 * Rest API v2 Global Group helper.
 *
 * @package Automattic\WooCommerce\ProductAddons
 * @since 6.9.0
 */
/**
 * WC_Product_Addons_Api_V2_Global_Group class.
 *
 * @version 8.4.5
 */
class WC_Product_Addons_Api_V2_Global_Group extends \WC_Product_Addons_Api_V2_Abstract_Group
{
    /**
     * Group restrictions.
     *
     * @var int[]
     */
    protected $restrict_to_category_ids = array();
    /**
     * Constructor.
     *
     * @throws \Exception Exception if the provided ID is invalid.
     * @param integer $id Group ID. 0 if the group does not yet exist.
     */
    public function __construct(int $id = 0)
    {
    }
    /**
     * Persist data.
     *
     * @return void
     */
    public function save()
    {
    }
    /**
     * Get restrict_to_category_ids as id=>name pairs.
     *
     * @return array
     */
    public function get_restrict_to_categories()
    {
    }
    /**
     * Get restrict_to_category_ids.
     *
     * @return int[]
     */
    public function get_restrict_to_category_ids()
    {
    }
    /**
     * Set restrict_to_category_ids.
     *
     * @param array $value Value to set.
     * @return void
     */
    public function set_restrict_to_category_ids(array $value)
    {
    }
    /**
     * Create a new global Add-On group.
     *
     * @param \WP_REST_Request $request Args to update.
     *
     * @return WC_Product_Addons_Api_V2_Global_Group Returns the updated group on success.
     */
    public static function create_group(\WP_REST_Request $request)
    {
    }
    /**
     * Given a global group ID, update add-ons from the args provided
     *
     * @param \WP_REST_Request $request Args to update.
     *
     * @return WC_Product_Addons_Api_V2_Global_Group Returns the updated group on success.
     */
    public function update_group(\WP_REST_Request $request)
    {
    }
    /**
     * Given a global group ID, deletes it
     *
     * Delegates to the shared deletion path so this endpoint also validates the post type and
     * refreshes the global add-on cache.
     *
     * @param int $id Group ID.
     * @return array|\WP_Error
     */
    public function delete_group(int $id)
    {
    }
    /**
     * Tests if the passed ID corresponds to a global group
     *
     * @param integer $id Group ID.
     * @return bool
     */
    public static function is_a_global_group_id(int $id)
    {
    }
    /**
     * Returns all the global groups (if any) and their add-ons
     *
     * @return WC_Product_Addons_Api_V2_Global_Group[]
     * @throws \Exception Exception if the provided ID is invalid.
     */
    public static function get_all()
    {
    }
}
/**
 * Rest API v2 Product Group helper.
 *
 * @package Automattic\WooCommerce\ProductAddons
 * @since 6.9.0
 * @version 8.4.5
 */
/**
 * WC_Product_Addons_Api_V2_Product_Group class.
 */
class WC_Product_Addons_Api_V2_Product_Group extends \WC_Product_Addons_Api_V2_Abstract_Group
{
    /**
     * Exclude global add-ons.
     *
     * @var bool
     */
    protected $exclude_global_add_ons = \false;
    /**
     * Get exclude_global_add_ons.
     *
     * @return bool
     */
    public function get_exclude_global_add_ons()
    {
    }
    /**
     * Set exclude_global_add_ons.
     *
     * @param bool $value Value to set.
     * @return void
     */
    public function set_exclude_global_add_ons(bool $value)
    {
    }
    /**
     * Constructor.
     *
     * @throws \Exception Exception if the provided ID is invalid.
     * @param integer $id Product ID. 0 if the product does not yet exist.
     */
    public function __construct(int $id = 0)
    {
    }
    /**
     * Check if product add-ons have already been set for the product.
     *
     * @param integer $product_id Product ID.
     * @return bool
     * @throws \Exception Exception if the provided ID is invalid.
     */
    public static function addons_already_set(int $product_id)
    {
    }
    /**
     * Persist data.
     *
     * @throws \Exception Exception if the provided ID is invalid.
     * @return void
     */
    public function save()
    {
    }
    /**
     * Get priority.
     *
     * Product specific Add-On's priority can't be changed and isn't exposed to the user.
     *
     * @return int
     */
    public function get_priority()
    {
    }
}
/**
 * Add custom REST API fields to WooCommerce core's products endpoint.
 *
 * @class WC_Product_Addons_Api_V2_Product_Rest_Api
 */
class WC_Product_Addons_Api_V2_Product_Rest_Api
{
    /**
     * Custom REST API product field names, indicating support for getting/updating.
     *
     * @var array
     */
    private static $product_fields = array('exclude_global_add_ons' => array('get', 'update'), 'addons' => array('get', 'update'));
    /**
     * Setup REST API class.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Register custom REST API fields for product requests.
     *
     * @return void
     */
    public static function register_product_fields()
    {
    }
    /**
     * Gets schema properties for Add-Ons Product fields.
     *
     * @param  string $field_name
     * @return array
     */
    public static function get_product_field_schema($field_name)
    {
    }
    /**
     * Gets extended (unprefixed) schema properties for products.
     *
     * @return array
     */
    private static function get_extended_product_schema()
    {
    }
    /**
     * Gets values for Product Add-On's fields.
     *
     * @param  array            $response
     * @param  string           $field_name
     * @param  \WP_REST_Request $request
     * @return array|bool|\WP_Error|null
     */
    public static function get_product_field_value($response, $field_name, $request)
    {
    }
    /**
     * Updates values for Product Add-On's fields.
     *
     * @param mixed  $field_value
     * @param mixed  $response
     * @param string $field_name
     *
     * @return boolean|\WP_Error
     */
    public static function update_product_field_value($field_value, $response, $field_name)
    {
    }
    /**
     * Gets Add-on-specific product data.
     *
     * @param  string      $key
     * @param  \WC_Product $product
     * @param  mixed       $context Request context.
     * @return array|bool
     */
    private static function get_product_field($key, $product, $context)
    {
    }
}
/**
 * Rest API v2 Validation helper.
 *
 * @package Automattic\WooCommerce\ProductAddons
 * @since 6.9.0
 * @version 8.4.5
 */
/**
 * WC_Product_Addons_Api_V2_Product_Group class.
 */
class WC_Product_Addons_Api_V2_Validation
{
    /**
     * Add-on types that support options.
     *
     * @var string[]
     */
    public static $options_valid_for = array('multiple_choice', 'checkbox');
    /**
     * Add-on types that support default values.
     *
     * @var string[]
     */
    public static $default_valid_for = array('multiple_choice', 'checkbox', 'input_multiplier', 'custom_price');
    /**
     * Add-on types that support min/max values.
     *
     * @var string[]
     */
    public static $min_max_valid_for = array('custom_text', 'custom_textarea', 'custom_price', 'input_multiplier');
    /**
     * Return true if the object is getting created.
     *
     * If the object includes an `id` parameter, then this object is to be updated. Otherwise, assume it's a request to create the object.
     *
     * @param array|\WP_REST_Request $object Add-on or group object, or the request that carries it.
     * @return bool
     */
    public static function creating_object($object)
    {
    }
    /**
     * Return true if the object is getting updated.
     *
     * If the object includes an `id` parameter, then this object is to be updated. Otherwise, assume it's a request to create the object.
     *
     * @param array|\WP_REST_Request $object Add-on or group object, or the request that carries it.
     * @return bool
     */
    public static function updating_object($object)
    {
    }
    /**
     * Validate Name of Product Add-On.
     *
     * This callback will (and can) only be called from Validation::is_array_of_addons(), hence it can have some extra parameters.
     *
     * @param mixed            $value The value to validate.
     * @param \WP_REST_Request $request The request object.
     * @param string           $param The parameter name.
     * @param array            $schema
     * @param array            $all_values
     *
     * @return true|\WP_Error
     */
    public function validate_addon_name($value, $request, $param, $schema, $all_values)
    {
    }
    /**
     * Validate Name of Global groups.
     *
     * This callback will be called from regular WP code, hence it only gets standard set of parameters.
     *
     * @param mixed            $value The value to validate.
     * @param \WP_REST_Request $request The request object.
     * @param string           $param The parameter name.
     *
     * @return true|\WP_Error
     */
    public function validate_group_name($value, $request, $param = '')
    {
    }
    /**
     * Validate Name of Product Add-On and Global groups.
     *
     * Name is required when creating an object.
     * Name cannot be longer than 255 characters and it's a string.
     *
     * @param mixed  $name The name to validate.
     * @param bool   $is_create_request Whether the object is being created or updated.
     * @param string $param_name The parameter name (to be used in error messages).
     *
     * @return true|\WP_Error
     */
    protected function validate_name($name, $is_create_request, $param_name)
    {
    }
    /**
     * Validates that the passed argument is an array of add-on fields. An empty array
     * IS acceptable. This also validates each option in the field's options array against
     * the field type.
     *
     * @param mixed            $values The data to validate.
     * @param \WP_REST_Request $request Request object.
     * @param string           $param Current param being validated.
     * @param array            $schema  Field schema.
     * @return bool|\WP_Error
     */
    public function is_array_of_addons($values, $request, $param, $schema)
    {
    }
    /**
     * Sanitizes fields with defaults and schema properties.
     *
     * @param array            $addons The data to sanitize.
     * @param \WP_REST_Request $request Request object.
     * @param string           $param Current param being sanitized.
     * @param array            $schema  Field schema.
     *
     * @return array|\WP_Error
     */
    public function sanitize_array_of_addons($addons, $request, $param, $schema)
    {
    }
    /**
     * Validates that the passed argument is empty or a float.
     *
     * @param string           $value The data to validate.
     * @param \WP_REST_Request $request Request object.
     * @param string           $param Current param being validated.
     * @return bool|\WP_Error
     */
    public function is_empty_or_float($value, $request, $param)
    {
    }
    /**
     * Validate min and max values and the correct relation between them.
     *
     * This callback will (and can) only be called from Validation::is_array_of_addons(), hence it can have some extra parameters.
     *
     * @param string               $value The data to validate.
     * @param \WP_REST_Request     $request Request object.
     * @param string               $param Current param being validated.
     * @param array<string, mixed> $schema Schema of the param being validated.
     * @param array                $all_values All values.
     *
     * @return bool|\WP_Error
     */
    public function validate_min_max($value, $request, $param, $schema, $all_values)
    {
    }
    /**
     * Validates default add-on option:
     *
     * - default must be within the min/max limits for Quantity and Price add-ons
     * - default option index must exist for Checkboxes and Multiple Choice add-ons
     *
     * This callback will (and can) only be called from Validation::is_array_of_addons(), hence it can have some extra parameters.
     *
     * @param array            $value The data to validate.
     * @param \WP_REST_Request $request Request object.
     * @param string           $param Current param being validated.
     * @param array            $schema Field schema.
     * @param array            $all_values All values.
     *
     * @return true|\WP_Error
     */
    public function validate_default($value, $request, $param, $schema, $all_values)
    {
    }
    /**
     * Validate Add-on options:
     *  - options are defined for multiple_choice or checkbox Add-ons
     *  - options are not defined for other Add-ons
     *  - options always have a name
     *  - at least one add-on option must be visible for required add-ons
     *
     * This callback will (and can) only be called from Validation::is_array_of_addons(), hence it can have some extra parameters.
     *
     * @param array                $value The data to validate.
     * @param \WP_REST_Request     $request Request object.
     * @param string               $param Current param being validated.
     * @param array<string, mixed> $schema Schema of the add-on fields.
     * @param array                $all_values All values.
     *
     * @return true|\WP_Error
     */
    public function validate_options($value, $request, $param, $schema, $all_values)
    {
    }
    /**
     * Validate Add-on required option:
     *  - at least one add-on option must be visible for required add-ons
     *
     * This callback will (and can) only be called from Validation::is_array_of_addons(), hence it can have some extra parameters.
     *
     * @param array            $value The data to validate.
     * @param \WP_REST_Request $request Request object.
     * @param string           $param Current param being validated.
     * @param array            $schema Field schema.
     * @param array            $all_values All values.
     *
     * @return true|\WP_Error
     */
    public function validate_required($value, $request, $param, $schema, $all_values)
    {
    }
    /**
     * Sanitize an empty string or float.
     *
     * @param float|string $value The data to sanitize.
     *
     * @return float|string
     */
    public function sanitize_empty_or_float($value)
    {
    }
    /**
     * Gets the prop value either from the request or the add-on object.
     *
     * @param string $prop        Prop name.
     * @param array  $all_values  Request values.
     * @param array  $addons      Product add-ons.
     *
     * @return mixed|string
     */
    public static function get_addon_prop($prop, $all_values, $addons)
    {
    }
}
/**
 * Loads Product Add-Ons ability definitions.
 *
 * @version 8.4.5
 */
class WC_Product_Addons_Abilities
{
    /**
     * Initialize ability registration hooks.
     *
     * @version 8.3.1
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Adds Product Add-Ons ability definitions to WooCommerce's ability loader.
     *
     * @param array $classes Ability definition class names.
     * @version 8.3.1
     * @return array
     */
    public static function add_ability_definition_classes(array $classes)
    {
    }
    /**
     * Loads WooCommerce ability definition classes.
     *
     * @version 8.3.1
     * @return void
     */
    private static function load_ability_definition_classes()
    {
    }
}
/**
 * Shared output helpers for Product Add-Ons abilities.
 *
 * @version 8.3.1
 */
class WC_Product_Addons_Ability_Output
{
    /**
     * Normalize add-ons before returning ability output.
     *
     * Product Add-Ons data can be extended or historically malformed. Only expose
     * the reviewed Product Add-Ons configuration keys promised by the ability schema.
     *
     * @param mixed $add_ons Add-ons.
     * @version 8.3.1
     * @return array
     */
    public static function normalize_add_ons($add_ons)
    {
    }
    /**
     * Get add-on output schema.
     *
     * @version 8.3.1
     * @return array
     */
    public static function get_add_on_schema()
    {
    }
    /**
     * Normalize a single add-on before returning ability output.
     *
     * @param array $add_on Add-on.
     * @version 8.3.1
     * @return array
     */
    private static function normalize_add_on(array $add_on)
    {
    }
    /**
     * Normalize add-on options before returning ability output.
     *
     * @param mixed $options Add-on options.
     * @version 8.3.1
     * @return array
     */
    private static function normalize_add_on_options($options)
    {
    }
    /**
     * Normalize a single add-on option before returning ability output.
     *
     * @param array $option Add-on option.
     * @version 8.3.1
     * @return array
     */
    private static function normalize_add_on_option(array $option)
    {
    }
    /**
     * Get output field types for add-ons.
     *
     * @version 8.3.1
     * @return string[]
     */
    private static function get_add_on_output_schema_types()
    {
    }
    /**
     * Get output field types for add-on options.
     *
     * @version 8.3.1
     * @return string[]
     */
    private static function get_add_on_option_output_schema_types()
    {
    }
    /**
     * Normalize a value for a schema type.
     *
     * @param mixed  $value Value.
     * @param string $type Schema type.
     * @version 8.3.1
     * @return mixed|null
     */
    private static function normalize_schema_value($value, $type)
    {
    }
}
/**
 * WC_Product_Addons_Cart_Ajax class
 *
 * @class    WC_Product_Addons_Cart_Ajax
 * @version  8.4.5
 */
class WC_Product_Addons_Cart_Ajax
{
    /**
     * Handle ajax endpoints.
     */
    public function __construct()
    {
    }
    /**
     * Dismisses notices.
     *
     * @since  8.1.2
     *
     * @return void
     */
    public static function dismiss_notice()
    {
    }
    /**
     * Calculate tax values for sub total (after options value)
     * Used when we can't calculate tax from form values
     * (since there 4 different combinations of how taxes can be displayed).
     *
     * @since 1.0.0
     * @return void
     */
    public function calculate_tax()
    {
    }
    /**
     * Checks whether the current user is allowed to access a product.
     *
     * Gates on access, not on catalog listing: published products stay available to everyone -- including
     * the ones excluded from the catalog and sold through a direct link -- while non-published ones are
     * limited to the users who can read them.
     *
     * @since 8.4.2
     *
     * @param  WC_Product $product Product object.
     * @return bool
     */
    private static function is_product_accessible($product)
    {
    }
}
/**
 * WC_Product_Addons_Cart class.
 *
 * @class    WC_Product_Addons_Cart
 * @version  8.4.5
 */
class WC_Product_Addons_Cart
{
    /**
     * Maximum checkbox selections accepted by one Store API add-on.
     *
     * @since 8.4.2
     */
    private const MAX_STORE_API_CHECKBOX_SELECTIONS = 100;
    /**
     * Server-known existing file values keyed by add-on field name.
     *
     * @var array
     */
    private $trusted_file_values = array();
    /**
     * Order currently being edited by an authorized merchant.
     *
     * @var WC_Order|false
     */
    private $editable_order = \false;
    /**
     * Whether the current Store API validation must inspect an empty data set.
     *
     * @var bool
     */
    private $validate_empty_cart_item_data = \false;
    /**
     * Allow exact existing file values to survive a server-authorized edit.
     *
     * Callers must source these values from persisted cart or order data, never request data.
     *
     * @since 8.4.3
     *
     * @param array $values Existing file values keyed by add-on field name.
     * @return void
     */
    public function set_trusted_file_values($values)
    {
    }
    /**
     * Whether a value is an HTTP(S) URL, including a protocol-relative one.
     *
     * Existing values are passed through untouched: a value stored by an older version may not
     * survive re-escaping, and dropping it would fail the edit for the whole line item. It is the
     * byte-for-byte comparison against the posted value that authorizes it, not its exact shape.
     *
     * @param mixed $value Candidate URL.
     * @return bool
     */
    private function is_absolute_http_url($value)
    {
    }
    /**
     * Collect the file add-on values of a product from an already-prepared data set.
     *
     * @since 8.4.3
     *
     * @param int   $product_id Product being configured.
     * @param array $post_data  Data prepared from server-owned order data.
     * @return array
     */
    private function get_posted_file_values($product_id, $post_data)
    {
    }
    /**
     * Return a matching file value from server-owned cart or order data.
     *
     * @since 8.4.3
     *
     * @param int   $product_id     Product being configured.
     * @param array $addon          File add-on definition.
     * @param mixed $candidate_value Posted file value.
     * @return string
     */
    private function get_trusted_file_value($product_id, $addon, $candidate_value)
    {
    }
    /**
     * Return a matching file value this customer's own cart holds for an add-on.
     *
     * A value stored on a cart item was verified when the item was added, so a shopper
     * reconfiguring that item may post it back unchanged.
     *
     * @since 8.4.3
     *
     * @param int   $product_id     Product being configured.
     * @param mixed $field_name     Add-on field name.
     * @param mixed $candidate_value Posted file value.
     * @return string
     */
    private function get_cart_file_value($product_id, $field_name, $candidate_value)
    {
    }
    /**
     * Return a matching file value from an order being edited by an authorized merchant.
     *
     * Product Bundles and Composite Products rebuild child add-ons through the public cart
     * API, outside the Product Add-Ons order-item editor that supplies trusted values directly.
     *
     * @since 8.4.3
     *
     * @param int   $product_id     Product being configured.
     * @param array $addon          File add-on definition.
     * @param mixed $candidate_value Posted file value.
     * @return string
     */
    private function get_editable_order_file_value($product_id, $addon, $candidate_value)
    {
    }
    /**
     * Set the order whose add-ons are being edited by an authorized merchant.
     *
     * @since 8.4.3
     *
     * @param WC_Order_Item $item  Item being edited.
     * @param WC_Order      $order Order containing the item.
     * @return void
     */
    public function set_editable_order($item, $order)
    {
    }
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Handle Store API add to cart request.
     *
     * @since 7.7.0
     * @version 8.4.1
     *
     * @param array           $add_to_cart_data Add to cart data.
     * @param WP_REST_Request $wp_rest_request WP REST Request.
     *
     * @throws \Automattic\WooCommerce\StoreApi\Exceptions\RouteException When invalid add-on ID is provided.
     *
     * @return array
     */
    public function handle_store_api_add_to_cart_request(array $add_to_cart_data, \WP_REST_Request $wp_rest_request): array
    {
    }
    /**
     * Add Store API validation hooks.
     *
     * @since 7.7.0
     */
    public function add_store_api_validation_hooks(): void
    {
    }
    /**
     * Validate add to cart action for Store API. Throws an exception if add to cart isn't valid.
     *
     * @since 7.7.0
     *
     * @param WC_Product $product Product being added to cart.
     * @param array      $request Simple array with id, quantity, variation and cart_item_data keys. Not WP_REST_Request.
     *
     * @return void
     * @throws \Automattic\WooCommerce\StoreApi\Exceptions\RouteException When add to cart isn't valid.
     */
    public function validate_add_to_cart_store_api(\WC_Product $product, array $request): void
    {
    }
    /**
     * Validate add cart item. Note: Fires before add_cart_item_data.
     *
     * @param  bool       $passed       If passed validation.
     * @param  int        $product_id   Product ID.
     * @param  int        $qty          Quantity.
     * @param  int|string $variation_id Variation ID, when the product is a variation.
     * @param  array      $variations   Variation attributes.
     * @param  array      $post_data    Posted add-on data.
     * @return bool
     */
    public function validate_add_cart_item($passed, $product_id, $qty, $variation_id = '', $variations = array(), $post_data = array())
    {
    }
    /**
     * Validate cart item data. Note: Fires before add_cart_item_data.
     *
     * @param  int   $product_id Product ID.
     * @param  array $post_data  Post data.
     * @return WP_Error|void
     */
    public function validate_cart_item_data($product_id, $post_data = array())
    {
    }
    /**
     * Decorator that converts cart item data to post data for
     * add-to-cart validation, while re-ordering.
     *
     * For multiple_choice (select/images display) and legacy select add-ons, the stored cart
     * item `value` is the raw option label (e.g. `Gold`), while validators expect the indexed
     * slug format `slug-INDEX` (e.g. `gold-1`). When a product ID is supplied, look up the
     * addon definition and reconstruct the indexed slug so re-orders pass validation.
     *
     * @param  array $cart_item_data Cart item data.
     * @param  int   $product_id     Optional product ID, used to reconstruct indexed option slugs.
     * @return array<string, mixed>
     */
    public function prepare_post_data_for_validation($cart_item_data, $product_id = 0)
    {
    }
    /**
     * Add cart item data action. Fires before add to cart action and add cart item filter.
     *
     * @throws Exception
     * @throws \Automattic\WooCommerce\StoreApi\Exceptions\RouteException When a custom amount is invalid.
     *
     * @param  array $cart_item_data  Cart item meta data.
     * @param  int   $product_id      Product ID.
     * @return array
     */
    public function add_cart_item_data($cart_item_data, $product_id)
    {
    }
    /**
     * Include add-ons line item meta.
     *
     * @param  WC_Order_Item_Product $item           Order item data.
     * @param  string|null           $cart_item_key  Cart item key, or null when the item is not built from the cart.
     * @param  array                 $values         Order item values.
     * @return void
     */
    public function order_line_item($item, $cart_item_key, $values)
    {
    }
    /**
     * Filter the order item's meta display value if needed.
     *
     * @param  string        $display_value
     * @param  stdClass      $meta Order item meta.
     * @param  WC_Order_Item $order_item
     * @return string
     */
    public function order_item_display_meta_value($display_value, $meta = \null, $order_item = \null)
    {
    }
    /**
     * Re-order.
     *
     * @since 3.0.0
     * @param  array         $cart_item_data  Cart item data.
     * @param  WC_Order_Item $item            Order item.
     * @param  WC_Order      $order           Order object.
     *
     * @return array Cart item data
     */
    public function re_add_cart_item_data($cart_item_data, $item, $order = \null)
    {
    }
    /**
     * Updates the product price based on the add-ons and the quantity.
     *
     * Important: A replica of this function exists in WCPay\MultiCurrency\Compatibility\WooCommerceProductAddOns. Any changes must apply to that function too.
     *
     * @param  array $cart_item_data  Cart item meta data.
     * @param  int   $quantity        Quantity of products in that cart item.
     * @param  array $prices          Array of prices for that product to use in
     *                                calculations.
     *
     * @return array
     */
    public function update_product_price($cart_item_data, $quantity, $prices)
    {
    }
    /**
     * Retain an invalid line for removal without letting it reach checkout.
     *
     * @since 8.4.3
     * @param array $cart_item_data Cart item being priced.
     * @return array
     */
    private function invalidate_custom_price($cart_item_data)
    {
    }
    /**
     * Block checkout for custom prices rejected during session or quantity updates.
     *
     * @since 8.4.3
     * @return void
     */
    public function check_custom_prices()
    {
    }
    /**
     * Add cart item. Fires after add cart item data filter.
     *
     * @throws \Automattic\WooCommerce\StoreApi\Exceptions\RouteException When the resulting custom price is invalid.
     * @since 3.0.0
     * @param  array $cart_item_data  Cart item meta data.
     *
     * @return array
     */
    public function add_cart_item($cart_item_data)
    {
    }
    /**
     * Update cart item quantity.
     *
     * @param  string   $cart_item_key  Cart item key.
     * @param  integer  $quantity       New quantity of the product.
     * @param  integer  $old_quantity   Old quantity of the product.
     * @param  \WC_Cart $cart           WC Cart object.
     *
     * @return void
     */
    public function update_price_on_quantity_update($cart_item_key, $quantity, $old_quantity, $cart)
    {
    }
    /**
     * Get cart item from session.
     *
     * @param  array $cart_item  Cart item data.
     * @param  array $values     Cart item values.
     * @return array
     */
    public function get_cart_item_from_session($cart_item, $values)
    {
    }
    /**
     * Get item data.
     *
     * Important: A replica of this function exists in WCPay\MultiCurrency\Compatibility\WooCommerceProductAddOns. Any changes must apply to that function too.
     *
     * @param  array $other_data  Other data.
     * @param  array $cart_item   Cart item data.
     *
     * @return array
     */
    public function get_item_data($other_data, $cart_item)
    {
    }
    /**
     * This gets the value for an add-on while considering backward compatibility for orders created before the `raw_value` field addition.
     *
     * @since 6.9.0
     * @param  array|object $meta  Meta data.
     * @return mixed
     */
    private function extract_meta_value($meta)
    {
    }
    /**
     * Grabs the value of a product addon from order item meta.
     *
     * @param  array  $ids   Array of addon meta that include id, name and value.
     * @param  array  $addon
     * @param  string $type  Addon type.
     * @return array|string
     */
    public function get_addon_meta_value($ids, $addon, $type)
    {
    }
    /**
     * Checks if an order item addon meta matches a product level addon.
     *
     * @version 8.3.1
     *
     * @param  array        $addon
     * @param  array|object $meta
     * @return boolean
     */
    public function is_matching_addon($addon, $meta)
    {
    }
    /**
     * Checks if the added product is a grouped product.
     *
     * @param  int $product_id  Product ID.
     * @return bool
     */
    public function is_grouped_product($product_id)
    {
    }
}
/**
 * 3rd-party Extensions Compatibility.
 *
 * @class    WC_PAO_Compatibility
 * @version  8.4.5
 */
class WC_PAO_Compatibility
{
    /**
     * Array of min required plugin versions.
     *
     * @var array<string, string>
     */
    private $required = array();
    /**
     * Modules to load.
     *
     * @var array
     */
    private $modules = array();
    /**
     * The single instance of the class.
     *
     * @var WC_PAO_Compatibility|null
     *
     * @since 6.0.0
     */
    protected static $_instance = \null;
    /**
     * Main WC_PAO_Compatibility instance.
     *
     * Ensures only one instance of WC_PAO_Compatibility is loaded or can be loaded.
     *
     * @static
     * @return WC_PAO_Compatibility
     * @since  6.0.0
     */
    public static function instance()
    {
    }
    /**
     * Cloning is forbidden.
     *
     * @since 6.0.0
     */
    public function __clone()
    {
    }
    /**
     * Unserializing instances of this class is forbidden.
     *
     * @since 6.0.0
     */
    public function __wakeup()
    {
    }
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Initialize.
     *
     * @since  6.0.0
     *
     * @return void
     */
    protected function load_modules()
    {
    }
    /**
     * Core compatibility functions.
     *
     * @since  6.1.3
     * @return void
     */
    public static function core_includes()
    {
    }
    /**
     * Load compatibility classes.
     *
     * @return void
     */
    public function module_includes()
    {
    }
    /**
     * Load time-sensitive compatibility classes.
     *
     * Runs on 'before_woocommerce_init' which runs on init with priority 0. This is to ensure that i10n needs of the FeaturesUtil class are met.
     *
     * @since 7.2.0
     *
     * @return void
     */
    public static function deferred_module_includes()
    {
    }
    /**
     * Get min module version.
     *
     * @since  6.0.0
     * @param  string $module Module key.
     * @return string|null
     */
    public function get_required_module_version($module)
    {
    }
    /**
     * Checks minimum required versions of compatible/integrated extensions.
     *
     * @return void
     */
    public function check_required_versions()
    {
    }
}
/**
 * Product_Addon_Display class.
 *
 * @version 8.4.5
 */
class WC_Product_Addons_Display
{
    /**
     * Number of characters of a text add-on value to show, as filtered by 'woocommerce_product_addons_show_num_chars'.
     *
     * @var mixed
     */
    public $show_num_chars;
    /**
     * Initialize frontend actions.
     */
    public function __construct()
    {
    }
    /**
     * Enqueue add-ons styles.
     *
     * @return void
     */
    public function styles()
    {
    }
    /**
     * Enqueue add-ons scripts.
     *
     * @return void
     */
    public function addon_scripts()
    {
    }
    /**
     * Adds support for WooCommerce Quick View adding a new script.
     *
     * @return void
     */
    public function quick_view_single_compat()
    {
    }
    /**
     * Display add-ons.
     *
     * @param int|bool    $post_id Post ID (default: false).
     * @param string|bool $prefix  Add-on prefix.
     * @return void
     */
    public function display($post_id = \false, $prefix = \false)
    {
    }
    /**
     * Update totals to include product add-ons.
     *
     * @param int $post_id Post ID.
     * @return void
     */
    public function totals($post_id)
    {
    }
    /**
     * Render placeholder for addons notices
     *
     * @param int $post_id Post ID.
     * @return void
     */
    public function notices($post_id)
    {
    }
    /**
     * Checks if the product has any required add-ons.
     *
     * Since this is an expensive operation, the result is cached.
     *
     * @param int $product_id Product ID.
     * @return bool
     */
    protected function check_required_addons($product_id)
    {
    }
    /**
     * Add to cart text.
     *
     * @since 1.0.0
     * @version 8.4.3
     * @param string $text Add to cart text.
     * @param object $product
     * @return string
     */
    public function add_to_cart_text($text, $product = \null)
    {
    }
    /**
     * Product has options filter. This tells WooCommerce if a product has required options. This will prevent the user
     * adding the item to the cart without first selecting them on the product page.
     *
     * @param boolean    $has_options True if the product has options.
     * @param WC_Product $product Product object.
     * @return boolean
     */
    public function has_options($has_options, $product)
    {
    }
    /**
     * Removes ajax-add-to-cart functionality in WC 2.5 when a product has required add-ons.
     *
     * @param  bool       $supports If support a feature.
     * @param  string     $feature  Feature to support.
     * @param  WC_Product $product  Product data.
     * @return bool
     */
    public function ajax_add_to_cart_supports($supports, $feature, $product)
    {
    }
    /**
     * Include product add-ons to add to cart URL.
     *
     * @since 1.0.0
     * @version 2.9.0
     * @param string $url Add to cart URL.
     * @param object $product
     * @return string
     */
    public function add_to_cart_url($url, $product = \null)
    {
    }
    /**
     * Don't let products with required addons be added to cart when viewing grouped products.
     *
     * @param  bool       $purchasable If product is purchasable.
     * @param  WC_Product $product     Product data.
     * @return bool
     */
    public function prevent_purchase_at_grouped_level($purchasable, $product)
    {
    }
    /**
     * Removes the cost of flat fee add-ons from the displayed price in the cart.
     *
     * @param string $price_html
     * @param array  $cart_item
     * @param string $cart_item_key
     * @return string
     */
    public function remove_flat_fees_from_cart_item_price($price_html, $cart_item, $cart_item_key)
    {
    }
    /**
     * Re-adds the cost of flat fee add-ons to the cart item price.
     *
     * @param string $price_html
     * @param array  $cart_item
     * @param string $cart_item_key
     * @return string
     */
    public function add_flat_fees_to_cart_item_price($price_html, $cart_item, $cart_item_key)
    {
    }
    /**
     * Fix the display of uploaded files.
     *
     * @param  string $meta_value Meta value.
     * @param  mixed  $meta       Order item metadata object.
     * @param  mixed  $item       Order item object.
     * @return string
     */
    public function fix_file_uploaded_display($meta_value, $meta = \null, $item = \null)
    {
    }
    /**
     * Keep shopper text inert after WooCommerce formats order and email metadata.
     *
     * @since 8.4.3
     * @param string $meta_value Display value.
     * @param object $meta       Order metadata.
     * @param object $item       Order item.
     * @return string
     */
    public function format_text_addon_display($meta_value, $meta = \null, $item = \null)
    {
    }
    /**
     * Get the trusted local upload URL represented by order item metadata.
     *
     * @since 8.4.3
     *
     * @param  mixed  $meta_value  Display metadata value.
     * @param  mixed  $meta        Order item metadata object.
     * @param  mixed  $item        Order item object.
     * @param  string $file_suffix Display text following the stored upload URL.
     * @return string|false
     */
    private function get_order_item_file_upload_url($meta_value, $meta, $item, &$file_suffix = '')
    {
    }
    /**
     * Fix product addons position on variable products - show them after a single variation description
     * or out of stock message.
     *
     * @return void
     */
    public function reposition_display_for_variable_product()
    {
    }
    /**
     * Retrieves the permalink for a product with add-ons.
     *
     * @param  null|string $permalink The content.
     * @param  null|array  $cart_item The cart item.
     * @param  null|string $cart_item_key The cart item key.
     * @return null|string
     */
    public function get_cart_item_permalink(?string $permalink, ?array $cart_item, ?string $cart_item_key): ?string
    {
    }
    /**
     * Parses cart-item addons into a format usable for injecting into request parameters
     *
     * @since 7.2.0
     * @param array $product_addons   Product addons.
     * @param array $cart_item_addons Cart item addons.
     *
     * @return array
     */
    public function parse_cart_addons(array $product_addons, array $cart_item_addons): array
    {
    }
    /**
     * Retrieves the addons for a product from the cart item.
     *
     * @since 7.2.0
     *
     * @param WC_Product $product   The product.
     * @param array      $cart_item The cart item.
     *
     * @return array
     */
    protected function get_cart_addons(\WC_Product $product, array $cart_item): array
    {
    }
    /**
     * Fetches the cart item based on the pao_key query parameter.
     *
     * @return array|null
     */
    protected function get_cart_item_from_query(): ?array
    {
    }
    /**
     * Retrieves the add-on data from a cart item and injects it into the $_REQUEST global.
     *
     * @since 7.2.0
     * @return void
     */
    public function inject_addons(): void
    {
    }
}
/**
 * WC_Product_Addons_Global_Add_On_Groups_Ability ability definition.
 *
 * @version 8.4.5
 */
class WC_Product_Addons_Global_Add_On_Groups_Ability implements \Automattic\WooCommerce\Abilities\AbilityDefinition
{
    /**
     * Ability ID for global add-on groups.
     */
    const NAME = 'woocommerce-product-addons/get-global-add-on-groups';
    /**
     * Ability category.
     */
    const CATEGORY = 'woocommerce';
    /**
     * Get the ability name.
     *
     * @version 8.3.1
     * @return string
     */
    public static function get_name(): string
    {
    }
    /**
     * Get the ability registration arguments.
     *
     * @version 8.3.1
     * @return array
     */
    public static function get_registration_args(): array
    {
    }
    /**
     * Check whether the current user may read Product Add-Ons configuration.
     *
     * @param mixed $input Ability input.
     * @version 8.3.1
     * @return bool
     */
    public static function can_read_add_ons($input = \null)
    {
    }
    /**
     * Execute the global add-on groups read ability.
     *
     * @param array $input Ability input.
     * @version 8.3.1
     * @return array|WP_Error
     */
    public static function execute(array $input = array())
    {
    }
    /**
     * Read-only metadata for externally visible abilities.
     *
     * @version 8.3.1
     * @return array
     */
    private static function get_read_only_meta()
    {
    }
    /**
     * Format a global group for ability output.
     *
     * @param WC_Product_Addons_Api_V2_Global_Group $group Global add-on group.
     * @version 8.3.1
     * @return array
     */
    private static function format_global_group(\WC_Product_Addons_Api_V2_Global_Group $group)
    {
    }
    /**
     * Format a global group by ID for ability output.
     *
     * @param int $group_id Global add-on group ID.
     * @version 8.3.1
     * @return array|WP_Error
     */
    private static function format_global_group_by_id($group_id)
    {
    }
    /**
     * Check whether a global add-on group applies to all products.
     *
     * @param int $group_id Global add-on group ID.
     * @version 8.3.1
     * @return bool
     */
    private static function global_group_applies_to_all_products($group_id)
    {
    }
    /**
     * Load v2 API model classes used by the ability.
     *
     * @version 8.3.1
     * @return void
     */
    private static function load_v2_api_classes()
    {
    }
    /**
     * Get input schema for the global group ability.
     *
     * @version 8.3.1
     * @return array
     */
    private static function get_input_schema()
    {
    }
    /**
     * Get output schema for the global group ability.
     *
     * @version 8.3.1
     * @return array
     */
    private static function get_output_schema()
    {
    }
    /**
     * Get global add-on group output schema.
     *
     * @version 8.3.1
     * @return array
     */
    private static function get_global_add_on_group_schema()
    {
    }
}
/**
 * WC_Product_Addons_Helper class.
 *
 * @version 8.4.5
 */
class WC_Product_Addons_Helper
{
    /**
     * Keep custom-price arithmetic finite and below a conservative monetary ceiling.
     *
     * @since 8.4.3
     * @param mixed $price Amount to check, including filtered calculation results.
     * @return bool
     */
    public static function is_bounded_price($price)
    {
    }
    /**
     * Array of Add-on IDs used in this request.
     *
     * @var int[]
     */
    public static $addon_ids = array();
    /**
     * Invalidate membership only when global groups or product categories change.
     *
     * @since 8.4.3
     * @internal
     * @return void
     */
    public static function init_cache_invalidation()
    {
    }
    /**
     * Track all native writers that can change global add-on membership.
     *
     * @since 8.4.3
     * @return array
     */
    public static function get_global_addons_cache_version()
    {
    }
    /**
     * Gets global product addons. The result is cached.
     *
     * @return array
     */
    protected static function get_global_product_addons()
    {
    }
    /**
     * Gets product addons from its terms. The result is cached.
     *
     * @param int $product_id The product ID.
     * @return array
     */
    protected static function get_product_term_addons($product_id)
    {
    }
    /**
     * Gets addons assigned to a product by ID.
     *
     * @param  int          $post_id ID of the product to get addons for.
     * @param  string|false $prefix for addon field names. Defaults to postid.
     * @param  bool         $inc_parent Set to false to not include parent product addons.
     * @param  bool         $inc_global Set to false to not include global addons.
     * @return array
     */
    public static function get_product_addons($post_id, $prefix = \false, $inc_parent = \true, $inc_global = \true)
    {
    }
    /**
     * Display prices according to shop settings.
     *
     * @param  float|string $price     Price to display.
     * @param  WC_Product   $cart_item Product from cart.
     *
     * @return float|string
     */
    public static function get_product_addon_price_for_display($price, $cart_item = \null)
    {
    }
    /**
     * Return tax display mode depending on context.
     *
     * @return string
     */
    public static function get_product_addon_tax_display_mode()
    {
    }
    /**
     * Checks if addon field is required.
     *
     * @since 3.0.0
     * @param array $addon
     * @return bool
     */
    public static function is_addon_required($addon = array())
    {
    }
    /**
     * Checks if addon should display description.
     *
     * @since 3.07.28
     * @param  array $addon  Current add-on.
     * @return bool          True if should display description.
     */
    public static function should_display_description($addon = array())
    {
    }
    /**
     * Get addon restriction data
     *
     * @param array $addon Add-on field data.
     * @return mixed Restriction data, as filtered by 'wc_pao_restriction_data'.
     * @version 7.0.3
     */
    public static function get_restriction_data($addon)
    {
    }
    /**
     * Checks WC version for backwards compatibility.
     *
     * @since 3.0.0
     * @param string $version
     * @return bool
     */
    public static function is_wc_gte($version)
    {
    }
    /**
     * Checks WC version for backwards compatibility.
     *
     * @since 3.0.0
     * @param string $version
     * @return bool
     */
    public static function is_wc_gt($version)
    {
    }
    /**
     * Checks if server can handle upload filesize.
     *
     * @since 3.0.0
     * @param  int $file File size in bytes.
     * @return bool
     */
    public static function can_upload($file)
    {
    }
    /**
     * Checks if file exceeds upload size limit.
     *
     * @since 3.0.33
     * @param  array $post_file File from $_FILES.
     * @return bool             True if over size limit.
     */
    public static function is_filesize_over_limit($post_file)
    {
    }
    /**
     * Get the placeholder image URL for image swatch
     * with no selection.
     *
     * @return string
     */
    public static function no_image_select_placeholder_src()
    {
    }
    /**
     * Create a clone of the current product/cart item/order item and set its price equal to the add-on price.
     * This will allow extensions to discount the add-on price.
     *
     * @param WC_Product $product
     * @param float      $price
     *
     * @return WC_Product
     */
    public static function create_product_with_filtered_addon_prices($product, $price)
    {
    }
    /**
     * Get the date format for JS.
     *
     * Hint: Doesn't support time formats.
     *
     * @since  6.8.0
     *
     * @param  string $date_format (Optional) Date format in PHP
     * @return string The date format for JS
     */
    public static function wc_pao_get_js_date_format($date_format = \null)
    {
    }
    /**
     * Get the timestamp type.
     *
     * @since  6.8.0
     *
     * @return string
     */
    public static function wc_pao_get_date_input_timezone_reference()
    {
    }
    /**
     * Get the store's GMT offset.
     *
     * @since  6.8.0
     *
     * @return float
     */
    public static function wc_pao_get_gmt_offset()
    {
    }
    /**
     * Takes a timestamp in GMT and converts it to store's timezone.
     *
     * @since 6.8.0
     *
     * @param  int        $timestamp
     * @param  float|null $gmt_offset GMT offset in hours. Defaults to the store's offset.
     * @return int
     */
    public static function wc_pao_convert_timestamp_to_gmt_offset($timestamp, $gmt_offset = \null)
    {
    }
    /**
     * Gets the default value for an addon.
     *
     * @param array $addon Add-on.
     *
     * @return mixed
     */
    public static function wc_pao_get_default_addon_value($addon)
    {
    }
    /**
     * Keep legacy radio and checkbox slugs unless an index is needed to distinguish options.
     *
     * @since 8.4.3
     * @param array $addon Add-on definition.
     * @return string[] Values in option order.
     */
    public static function get_radio_option_values($addon)
    {
    }
    /**
     * Recover an indexed radio value from a recorded option label.
     *
     * @since 8.4.3
     * @param array $addon Add-on definition.
     * @param mixed $value Recorded label.
     * @return mixed
     */
    public static function get_radio_value_for_label($addon, $value)
    {
    }
    /**
     * Generate a unique timestamp and use it as id.
     *
     * @since  6.9.0
     *
     * @param  array $existing_ids
     * @return int
     */
    public static function generate_id($existing_ids = array())
    {
    }
    /**
     * Get the canonical URL for a local Product Add-Ons upload.
     *
     * Current upload hosts and paths are trusted after normalized path validation.
     * Historical hosts or paths must still map to an existing local file, which
     * supports migrated orders without making DNS requests. The stored host is never returned.
     *
     * @since 8.4.3
     *
     * @param string $file_url Upload URL stored with the order or cart item.
     * @return string|false
     */
    public static function get_trusted_file_upload_url($file_url)
    {
    }
    /**
     * Normalize a URL path and reject traversal segments.
     *
     * @since 8.4.3
     *
     * @param mixed $path URL path.
     * @return string|false
     */
    private static function normalize_upload_url_path($path)
    {
    }
    /**
     * Retrieves the permalink for a product with add-ons.
     *
     * @since 7.2.0
     * @param  null|string $permalink The content.
     * @param  null|array  $cart_item The cart item.
     * @param  null|string $cart_item_key The cart item key.
     * @return null|string
     */
    public static function get_permalink(?string $permalink, ?array $cart_item, ?string $cart_item_key): ?string
    {
    }
}
/**
 * Product AddOns HTML generator
 *
 * @class    WC_Product_Addons_Html
 * @version  8.4.5
 */
class WC_Product_Addons_Html_Generator
{
    /**
     * Get add-on field HTML.
     *
     * @param  array      $addon  Add-on field data.
     * @param  array|null $value  Add-on field value.
     * @return string|false
     */
    public static function get_addon_html($addon, $value = \null)
    {
    }
    /**
     * Get multiple choice HTML.
     *
     * @since 3.0.0
     * @param  array $addon  Add-on field data.
     * @param  mixed $value  Add-on field value.
     * @return void
     */
    public static function get_multiple_choice_html($addon, $value = '')
    {
    }
    /**
     * Get image swatches field HTML.
     *
     * @param  array $addon  Add-on field data.
     * @param  mixed $value  Add-on field value.
     * @return void
     */
    public static function get_image_html($addon, $value = '')
    {
    }
    /**
     * Get checkbox field HTML.
     *
     * @param  array $addon  Add-on field data.
     * @param  mixed $value  Add-on field value.
     * @return void
     */
    public static function get_checkbox_html($addon, $value = '')
    {
    }
    /**
     * Get radio button field HTML.
     *
     * @param  array $addon  Add-on field data.
     * @param  mixed $value  Add-on field value.
     * @return void
     */
    public static function get_radiobutton_html($addon, $value = '')
    {
    }
    /**
     * Get select field HTML.
     *
     * @param  array $addon  Add-on field data.
     * @param  mixed $value  Add-on field value.
     * @return void
     */
    public static function get_select_html($addon, $value = '')
    {
    }
    /**
     * Get custom field HTML.
     *
     * @param  array $addon  Add-on field data.
     * @param  mixed $value  Add-on field value.
     * @return void
     */
    public static function get_custom_text_html($addon, $value = '')
    {
    }
    /**
     * Get custom textarea field HTML.
     *
     * @param  array $addon  Add-on field data.
     * @param  mixed $value  Add-on field value.
     * @return void
     */
    public static function get_custom_textarea_html($addon, $value = '')
    {
    }
    /**
     * Get file upload field HTML.
     *
     * @param  array $addon  Add-on field data.
     * @param  mixed $value  Add-on field value.
     * @return void
     */
    public static function get_file_upload_html($addon, $value = '')
    {
    }
    /**
     * Get custom price field HTML.
     *
     * @param  array $addon  Add-on field data.
     * @param  mixed $value  Add-on field value.
     * @return void
     */
    public static function get_custom_price_html($addon, $value = '')
    {
    }
    /**
     * Get input multiplier field HTML.
     *
     * @param  array $addon  Add-on field data.
     * @param  mixed $value  Add-on field value.
     * @return void
     */
    public static function get_input_multiplier_html($addon, $value = '')
    {
    }
    /**
     * Get datepicker field HTML.
     *
     * @param  array $addon  Add-on field data.
     * @param  mixed $value  Add-on field value.
     * @return void
     */
    public static function get_datepicker_html($addon, $value = '')
    {
    }
}
/**
 * Installation/Migration Class.
 *
 * Handles the activation/installation of the plugin.
 *
 * @package  Installation
 * @version  8.4.5
 */
class WC_Product_Addons_Install
{
    /**
     * Maximum number of index.html placeholders the daily healthcheck backfills per run.
     *
     * @since 8.4.1
     */
    const INDEX_BACKFILL_LIMIT = 250;
    /**
     * Option flagging that every pre-existing upload directory has been backfilled.
     *
     * @since 8.4.1
     */
    const INDEX_BACKFILL_DONE_OPTION = 'wc_pao_upload_index_backfill_done';
    /**
     * Initialize hooks.
     *
     * @since 3.0.0
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Run the installation.
     *
     * @since 3.0.0
     * @return void
     */
    private static function run()
    {
    }
    /**
     * Updates the plugin version in db.
     *
     * @since 3.0.0
     * @return void
     */
    private static function update_plugin_version()
    {
    }
    /**
     * 3.0 migration script.
     *
     * @since 3.0.0
     * @return void
     */
    private static function migration_3_0()
    {
    }
    /**
     * 3.0 migration script for product level.
     *
     * @since 3.0.0
     * @return void
     */
    private static function migration_3_0_product()
    {
    }
    /**
     * Schedule cron events.
     *
     * @since 6.1.3
     * @return void
     */
    private static function create_events()
    {
    }
    /**
     * Create the index.html placeholder in the PAO uploads directory.
     *
     * Suppresses directory listing on Apache, Nginx, and LiteSpeed without
     * relying on server-specific configuration. Called eagerly on install/upgrade
     * (creates the directory if needed) and again via the daily healthcheck
     * wrapper `maybe_create_files()` if the file is ever removed after the fact.
     *
     * @since 8.3.1
     * @return void
     */
    public static function create_files()
    {
    }
    /**
     * Create the index.html placeholder in a single directory, if missing.
     *
     * The directory must already exist -- callers that generate it are responsible
     * for creating it first.
     *
     * @since 8.4.1
     *
     * @param  string $dir Absolute path of the directory to place the placeholder in.
     * @return bool        Whether this call created the placeholder. False when it was
     *                     already there, when creation was skipped, and when the write failed.
     */
    public static function create_index_html($dir)
    {
    }
    /**
     * Daily healthcheck: re-create the index.html placeholder if the PAO uploads
     * directory exists but the placeholder has been removed (filesystem reset,
     * manual deletion, backup restore, etc.).
     *
     * Intentionally does not create the directory itself — sites that have never
     * received a file-upload add-on don't need an empty directory pre-created
     * just to host a placeholder. The directory is created either by the install
     * hook (eager) or by `wp_handle_upload()` on the first real upload.
     *
     * @since 8.3.1
     * @return void
     */
    public static function maybe_create_files()
    {
    }
    /**
     * Add the placeholder to upload directories generated before it was created
     * alongside the upload itself.
     *
     * Walks the one directory this plugin writes uploads to. `upload_dir()` in
     * `WC_Product_Addons_Field_File_Upload` replaces the year/month segment rather than
     * appending to it, so uploads always land in `uploads/product_addons_uploads/<upload-key>`
     * whether or not year/month folders are on. Deriving that path from `wp_get_upload_dir()`
     * also keeps each site of a multisite network inside its own uploads tree.
     *
     * Idempotent, and bounded to `INDEX_BACKFILL_LIMIT` writes per run so a store with many
     * upload directories never walks everything in one request. When a run fills its batch
     * it schedules the next one shortly after, so a large store converges within hours
     * instead of one batch per day.
     *
     * Only placeholders this run actually wrote count towards the batch, so a run that
     * cannot write -- a read-only filesystem, a permissions problem -- never queues a
     * successor, and the chain always terminates: every write permanently removes one
     * directory from the work left to do.
     *
     * @since 8.4.1
     * @return void
     */
    public static function backfill_upload_index_html()
    {
    }
    /**
     * Queue the next backfill batch, unless one is already waiting.
     *
     * @since 8.4.1
     * @return void
     */
    private static function schedule_index_backfill()
    {
    }
}
/**
 * Admin notices handling.
 *
 * @class    WC_PAO_Notices
 * @version  8.4.5
 */
class WC_PAO_Notices
{
    /**
     * Notice options.
     *
     * @var array
     */
    public static $notice_options = array();
    /**
     * Determines if notice options should be updated in the DB.
     *
     * @var boolean
     */
    private static $should_update = \false;
    /**
     * Constructor.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Get a setting for a notice type.
     *
     * @param  string $notice_name
     * @param  string $key
     * @param  mixed  $default
     * @return array
     */
    public static function get_notice_option($notice_name, $key, $default = \null)
    {
    }
    /**
     * Set a setting for a notice type.
     *
     * @param  string $notice_name
     * @param  string $key
     * @param  mixed  $value
     * @return void
     */
    public static function set_notice_option($notice_name, $key, $value)
    {
    }
    /**
     * Save notice options to the DB.
     *
     * @return void
     */
    public static function save_notice_options()
    {
    }
}
/**
 * WC_Product_Addons_Product_Add_Ons_Ability ability definition.
 *
 * @version 8.3.1
 */
class WC_Product_Addons_Product_Add_Ons_Ability implements \Automattic\WooCommerce\Abilities\AbilityDefinition
{
    /**
     * Ability ID for product add-ons.
     */
    const NAME = 'woocommerce-product-addons/get-product-add-ons';
    /**
     * Ability category.
     */
    const CATEGORY = 'woocommerce';
    /**
     * Get the ability name.
     *
     * @version 8.3.1
     * @return string
     */
    public static function get_name(): string
    {
    }
    /**
     * Get the ability registration arguments.
     *
     * @version 8.3.1
     * @return array
     */
    public static function get_registration_args(): array
    {
    }
    /**
     * Check whether the current user may read Product Add-Ons configuration.
     *
     * @param mixed $input Ability input.
     * @version 8.3.1
     * @return bool
     */
    public static function can_read_add_ons($input = \null)
    {
    }
    /**
     * Execute the product add-ons read ability.
     *
     * @param array $input Ability input.
     * @version 8.3.1
     * @return array|WP_Error
     */
    public static function execute(array $input)
    {
    }
    /**
     * Read-only metadata for externally visible abilities.
     *
     * @version 8.3.1
     * @return array
     */
    private static function get_read_only_meta()
    {
    }
    /**
     * Get input schema for the product add-ons ability.
     *
     * @version 8.3.1
     * @return array
     */
    private static function get_input_schema()
    {
    }
    /**
     * Get output schema for the product add-ons ability.
     *
     * @version 8.3.1
     * @return array
     */
    private static function get_output_schema()
    {
    }
}
/**
 * Product Add-Ons Tracker.
 *
 * @class    WC_PAO_Tracker
 * @version  8.4.5
 */
class WC_PAO_Tracker
{
    /**
     * Property to store reusable query data.
     *
     * @var array
     */
    private static $reusable_data = array();
    /**
     * Property to store and share tracking data in the class.
     *
     * @var array
     */
    private static $data = array();
    /**
     * Property to store the starting time of the process.
     *
     * @var int
     */
    private static $start_time = 0;
    /**
     * Property to store the tracking events.
     *
     * @var array
     */
    private static $tracking_events = array();
    /**
     * Property to store the HPOS table name.
     *
     * @var string
     */
    private static $hpos_orders_table = '';
    /**
     * Property to store how often the data will be invalidated.
     *
     * @var string
     */
    private static $invalidation_interval = '-1 week';
    /**
     * Initialize the tracker.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Add PAO data to the tracked data.
     *
     * @param  array $data
     * @return array  all the tracking data.
     */
    public static function add_tracking_data($data)
    {
    }
    /**
     * Get all tracking data from options.
     *
     * @return array PAO's tracking data.
     */
    private static function get_tracking_data()
    {
    }
    /**
     * Calculates all tracking-related data for the previous month and year.
     * Runs independently in a background task.
     *
     * @see ::maybe_calculate_tracking_data().
     * @return void
     */
    private static function calculate_tracking_data()
    {
    }
    /**
     * Maybe calculate orders data. Also, handles the caching strategy.
     *
     * @return bool Returns true if the data are re-calculated, false otherwise.
     */
    public static function maybe_calculate_tracking_data()
    {
    }
    /**
     * Track product addons first date when saving a product (wp-admin / rest api).
     *
     * @param  WC_Product $product
     * @return void
     */
    public static function track_product_addons($product)
    {
    }
    /**
     * Calculate product aggregation data.
     *
     * @return void
     */
    private static function calculate_product_data()
    {
    }
    /**
     * Calculate order data.
     *
     * @return void
     */
    private static function calculate_order_data()
    {
    }
    /**
     * Get any reusable data, without re-querying the DB.
     *
     * @param  string $key  Reusable data key.
     * @return mixed
     */
    private static function get_reusable_data($key = '')
    {
    }
    /**
     * Check if all the main aggregations have pending data.
     *
     * @return bool Pending status.
     */
    private static function has_pending_calculations()
    {
    }
    /**
     * Check if execution time is high or if available memory is almost consumed.
     *
     * @return bool Returns true if we're about to consume our available resources.
     */
    private static function time_or_memory_exceeded()
    {
    }
    /**
     * Initialize data if they are empty month/year has changed.
     *
     * @return void
     */
    private static function maybe_initialize_data()
    {
    }
    /**
     * Time exceeded.
     *
     * Ensures the batch never exceeds a sensible time limit.
     * A timeout limit of 30s is common on shared hosting.
     *
     * @return bool
     */
    private static function time_exceeded()
    {
    }
    /**
     * Memory exceeded
     *
     * Ensures the batch process never exceeds 90%
     * of the maximum WordPress memory.
     *
     * @return bool
     */
    private static function memory_exceeded()
    {
    }
    /**
     * Get memory limit.
     *
     * @return int
     */
    private static function get_memory_limit()
    {
    }
    /**
     * Increase iterations.
     *
     * @return void
     */
    private static function increase_iterations()
    {
    }
    /**
     * Set starting time.
     *
     * @return void
     */
    private static function set_start_time()
    {
    }
    /**
     * Set data from option.
     *
     * @return void
     */
    private static function read_data()
    {
    }
    /**
     * Set option with data.
     *
     * @return void
     */
    private static function set_option_data()
    {
    }
}
/**
 * Tracks support.
 *
 * @class    WC_PAO_Tracks
 * @version  8.4.5
 */
class WC_PAO_Tracks
{
    /**
     * Tracks event name prefix.
     */
    const PREFIX = 'pao_';
    /**
     * Hook in.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Records a 'product_with_addons_created' event in Tracks every time add-ons are added to product that didn't have add-ons before.
     *
     * @param  WC_Product $product
     * @return void
     */
    public static function record_product_with_addons_created_event($product)
    {
    }
    /**
     * Records a 'global_addon_created' event in Tracks every time a global add-on is created.
     *
     * @return void
     */
    public static function record_global_addon_created_event()
    {
    }
    /**
     * Records a 'addon_edit_in_order_render' event in Tracks every time the addon edit form is rendered in the admin order form.
     *
     * @since 6.9.0
     *
     * @return void
     */
    public static function record_edit_in_order_render()
    {
    }
    /**
     * Records a 'addon_edit_in_order_save' event in Tracks every time an order item with add-ons is edited in the admin order form.
     *
     * @since 6.9.0
     *
     * @return void
     */
    public static function record_edit_in_order_save()
    {
    }
    /**
     * Record an event in Tracks - this is the preferred way to record events from PHP.
     *
     * @param string $event_name The name of the event.
     * @param array  $props Custom properties to send with the event.
     * @return void
     */
    public static function record_event($event_name, $props = array())
    {
    }
}
/**
 * Limit new uploads without changing stored files or their ownership.
 *
 * @version 8.4.3
 */
class WC_Product_Addons_Upload_Limits
{
    /**
     * Charge each guest file before persistence. Later upload failures are not refunded.
     *
     * @since 8.4.3
     * @param array $file PHP upload data.
     * @return bool
     */
    public static function allow_upload($file)
    {
    }
    /**
     * Identify the client without trusting forwarded headers or storing raw IPs.
     *
     * @since 8.4.3
     * @return string
     */
    private static function get_client_id()
    {
    }
    /**
     * Atomically charge a counter. WooCommerce removes expired rows through its existing cleanup.
     *
     * @since 8.4.3
     * @param string $key    Private counter key.
     * @param int    $limit  Units available in a new 24-hour window.
     * @param int    $amount Units charged for this file.
     * @return bool
     */
    private static function consume_budget($key, $limit, $amount)
    {
    }
}
/**
 * Functions for WC core back-compatibility.
 *
 * @class    WC_PAO_Core_Compatibility
 * @version  8.4.5
 */
class WC_PAO_Core_Compatibility
{
    /**
     * Cache 'gte' comparison results.
     *
     * @var bool[]
     */
    private static $is_wc_version_gte = array();
    /**
     * Cache 'gt' comparison results.
     *
     * @var bool[]
     */
    private static $is_wc_version_gt = array();
    /**
     * Cache 'gt' comparison results for WP version.
     *
     * @var    bool[]
     */
    private static $is_wp_version_gt = array();
    /**
     * Cache 'gte' comparison results for WP version.
     *
     * @var    bool[]
     */
    private static $is_wp_version_gte = array();
    /**
     * Cache 'is_wc_admin_active' result.
     *
     * @var   bool|null
     */
    private static $is_wc_admin_active;
    /**
     * Current REST request stack.
     * An array containing WP_REST_Request instances.
     *
     * @since 6.8.2
     *
     * @var array
     */
    private static $requests = array();
    /**
     * Cache HPOS status.
     *
     * @var bool|null
     */
    private static $is_hpos_enabled = \null;
    /**
     * Constructor.
     *
     * @return void
     */
    public static function init()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Callbacks.
    |--------------------------------------------------------------------------
    */
    /**
     * Pops the current request from the execution stack.
     *
     * @since  6.8.2
     *
     * @param  WP_REST_Response $response
     * @return mixed
     */
    public static function pop_rest_request($response)
    {
    }
    /**
     * Saves the current hydration request.
     *
     * @since  6.8.2
     *
     * @param  mixed           $result
     * @param  WP_REST_Request $request
     * @return mixed
     */
    public static function save_hydration_request($result, $request)
    {
    }
    /**
     * Saves the current rest request.
     *
     * @param  mixed           $result
     * @param  WP_REST_Server  $server
     * @param  WP_REST_Request $request
     * @return mixed
     */
    public static function save_rest_request($result, $server, $request)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Utilities.
    |--------------------------------------------------------------------------
    */
    /**
     * Helper method to get the version of the currently installed WooCommerce.
     *
     * @return string
     */
    private static function get_wc_version()
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is greater than or equal to $version.
     *
     * @param  string $version the version to compare
     * @return boolean true if the installed version of WooCommerce is > $version
     */
    public static function is_wc_version_gte($version)
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is greater than $version.
     *
     * @param  string $version the version to compare
     * @return boolean true if the installed version of WooCommerce is > $version
     */
    public static function is_wc_version_gt($version)
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is greater than or equal to $version.
     *
     * @param  string $version
     * @return boolean
     */
    public static function is_wp_version_gt($version)
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is greater than or equal to $version.
     *
     * @param  string $version
     * @return boolean
     */
    public static function is_wp_version_gte($version)
    {
    }
    /**
     * Whether this is a Store/REST API request.
     *
     * @return boolean
     */
    public static function is_api_request()
    {
    }
    /**
     * Returns the current Store/REST API request or false.
     *
     * @return WP_REST_Request|false
     */
    public static function get_api_request()
    {
    }
    /**
     * Whether this is a Store API request.
     *
     * @param  string $route
     * @return boolean
     */
    public static function is_store_api_request($route = '')
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Compatibility wrappers.
    |--------------------------------------------------------------------------
    */
    /**
     * Backwards compatible logging using 'WC_Logger' class.
     *
     * @param  string $message
     * @param  string $level
     * @param  string $context
     * @return void
     */
    public static function log($message, $level, $context)
    {
    }
    /**
     * Back-compat wrapper for 'is_rest_api_request'.
     *
     * @return boolean
     */
    public static function is_rest_api_request()
    {
    }
    /**
     * Compatibility wrapper for invalidating cache groups.
     *
     * @param  string $group
     * @return void
     */
    public static function invalidate_cache_group($group)
    {
    }
    /**
     * True if 'wc-admin' is active.
     *
     * @return boolean
     */
    public static function is_wc_admin_active()
    {
    }
    /**
     * Returns true if is a react based admin page.
     *
     * @return boolean
     */
    public static function is_admin_or_embed_page()
    {
    }
    /**
     * Check if the usage of the custom orders table is enabled.
     *
     * @return bool
     */
    public static function is_hpos_enabled()
    {
    }
}
/**
 * WooCommerce Blocks Compatibility.
 *
 * @version 8.4.5
 */
class WC_Product_Addons_Blocks_Compatibility
{
    /**
     * Initialize.
     *
     * @return void
     */
    public static function init()
    {
    }
}
/**
 * Name Your Price Compatibility.
 *
 * @version 7.0.3
 */
class WC_Product_Addons_NYP_Compatibility
{
    /**
     * Init.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Get line item price.
     *
     * @param string $price Default line item price.
     * @param array  $values Order item values.
     * @return string
     */
    public static function get_line_item_price($price, $values)
    {
    }
}
/**
 * PayPal Compatibility.
 *
 * @version 8.4.5
 */
class WC_Product_Addons_PayPal_Compatibility
{
    /**
     * Hide smart buttons in product pages with add-ons.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Hide smart buttons in product pages with add-ons.
     *
     * @param  bool       $is_supported
     * @param  WC_Product $product
     * @return bool
     */
    public static function handle_smart_buttons($is_supported, $product)
    {
    }
}
/**
 * Stripe Compatibility.
 *
 * @version 8.4.5
 */
class WC_Product_Addons_Stripe_Compatibility
{
    /**
     * Hide express checkout buttons in product pages with add-ons.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Hide express checkout buttons in product pages with add-ons.
     *
     * @param  bool    $hide_button
     * @param  WP_Post $post
     * @return bool
     */
    public static function handle_express_checkout_buttons($hide_button, $post)
    {
    }
}
/**
 * Subscriptions Integration.
 *
 * @version  8.4.5
 */
class WC_Product_Addons_Subscriptions_Compatibility
{
    /**
     * Constructor.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Display the "Configure/Edit" button in admin for subscription products.
     *
     * @param  bool          $display_editing_in_order_button  Whether to display the "Configure/Edit" button.
     * @param  WC_Order_Item $item                             Order item object.
     * @param  WC_Product    $product                          Product object.
     *
     * @return boolean
     */
    public static function show_if_subscription($display_editing_in_order_button, $item, $product)
    {
    }
}
/**
 * WooPayments Compatibility.
 *
 * @version 8.4.5
 */
class WC_Product_Addons_WC_Payments_Compatibility
{
    /**
     * Hide express checkout buttons in product pages with add-ons.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Hide express checkout buttons in product pages with add-ons.
     *
     * @param  bool       $is_supported
     * @param  WC_Product $product
     * @return bool
     */
    public static function handle_express_checkout_buttons($is_supported, $product)
    {
    }
}
/**
 * Product Addon Fields
 *
 * @package woocommerce-product-addons
 * @version 8.4.5
 */
/**
 * WC_Product_Addons_Field class.
 */
abstract class WC_Product_Addons_Field
{
    /**
     * Addon data.
     *
     * @var array
     */
    public $addon;
    /**
     * Addon value, as posted or stored: usually a string, an array for multi-value fields.
     *
     * @var mixed
     */
    public $value;
    /**
     * Constructor
     *
     * @param array $addon Addon data.
     * @param mixed $value Addon value.
     */
    public function __construct($addon, $value = '')
    {
    }
    /**
     * Get data for the posted addon
     */
    public function get_cart_item_data()
    {
    }
    /**
     * Validate an addon
     *
     * @return bool|WP_Error pass or fail, or WP_Error
     */
    public function validate()
    {
    }
    /**
     * Get the name of the posted addon
     *
     * @return string
     */
    public function get_field_name()
    {
    }
    /**
     * Get the label for an option
     *
     * @param  array $option The option array object.
     * @return string
     */
    public function get_option_label($option)
    {
    }
    /**
     * Get the price for an option
     *
     * @param  array $option The option array object.
     * @return string
     */
    public function get_option_price($option)
    {
    }
}
/**
 * Custom fields (text)
 *
 * @package woocommerce-product-addons
 */
/**
 * WC_Product_Addons_Field_Custom class
 *
 * @version 8.4.5
 */
class WC_Product_Addons_Field_Custom extends \WC_Product_Addons_Field
{
    /**
     * Validate an addon
     *
     * @return bool|WP_Error pass, or WP_Error
     */
    public function validate()
    {
    }
    /**
     * Normalize the amount shared by validation and materialization.
     *
     * @since 8.4.3
     * @param mixed $value Submitted or filtered amount.
     * @return float|WP_Error
     */
    private function normalize_custom_price($value)
    {
    }
    /**
     * Process this field after being posted
     *
     * @return array|WP_Error Array on success, WP_Error on failure
     */
    public function get_cart_item_data()
    {
    }
}
/**
 * Date picker field
 *
 * @since   6.8.0
 * @version 8.4.5
 */
class WC_Product_Addons_Field_Datepicker extends \WC_Product_Addons_Field
{
    /**
     * The addon field
     *
     * @var array
     */
    public $addon;
    /**
     * The selected value/date, as posted or stored.
     *
     * @var mixed
     */
    public $value;
    /**
     * The timestamp of the selected value/date.
     *
     * @var int
     */
    public $timestamp;
    /**
     * The offset of the selected value/date.
     *
     * @var float
     */
    public $offset;
    /**
     * Constructor
     *
     * @param array $addon     Addon data.
     * @param mixed $value     Addon value.
     * @param mixed $timestamp The timestamp of the selected date, as posted or stored.
     * @param mixed $offset    The GMT offset of the selected date, as posted or stored.
     */
    public function __construct($addon, $value = '', $timestamp = '', $offset = '')
    {
    }
    /**
     * Validate an addon
     *
     * @return bool|WP_Error pass, or WP_Error
     */
    public function validate()
    {
    }
    /**
     * Process this field after being posted
     *
     * @return array on success, WP_ERROR on failure
     */
    public function get_cart_item_data()
    {
    }
}
/**
 * File Upload field
 *
 * @version 8.4.5
 */
class WC_Product_Addons_Field_File_Upload extends \WC_Product_Addons_Field
{
    public $addon;
    public $value;
    /**
     * Whether to skip processing a posted '$_FILES' upload.
     *
     * @var bool
     */
    public $test;
    /**
     * Random directory key for the current upload.
     *
     * @var string
     */
    private $upload_directory = '';
    /**
     * Exact server-known value that may be retained while editing existing data.
     *
     * @var string
     */
    private $trusted_value;
    /**
     * Whether the caller supplied an explicit server-known value.
     *
     * @var bool
     */
    private $strict_existing_value = \false;
    /**
     * Successful uploads processed in this request, keyed by PHP temporary path.
     *
     * @since 8.4.4
     * @var array
     */
    private static $processed_uploads = array();
    /**
     * Constructor.
     *
     * @param array $addon         Add-on definition.
     * @param mixed $value         Posted value.
     * @param bool  $test          Whether to skip processing a posted '$_FILES' upload.
     * @param mixed $trusted_value Exact server-known value that may be retained.
     */
    public function __construct($addon, $value = '', $test = \false, $trusted_value = '')
    {
    }
    /**
     * Validate an addon
     *
     * @return bool|WP_Error pass, or WP_Error
     */
    public function validate()
    {
    }
    /**
     * Process this field after being posted
     *
     * @return array|WP_Error Array on success, WP_Error on failure
     */
    public function get_cart_item_data()
    {
    }
    /**
     * Handle file upload
     *
     * @param  array $file Uploaded file entry from $_FILES.
     * @return array
     */
    public function handle_upload($file)
    {
    }
    /**
     * Whether the posted value exactly matches server-owned existing data.
     *
     * @since 8.4.3
     *
     * @return bool
     */
    private function is_trusted_existing_value()
    {
    }
    /**
     * Whether a value is an absolute HTTP(S) URL.
     *
     * @since 8.4.3
     *
     * @param mixed $value Candidate URL.
     * @return bool
     */
    private function is_absolute_http_url($value)
    {
    }
    /**
     * Return the validation error for an untrusted posted upload value.
     *
     * @since 8.4.3
     * @return WP_Error
     */
    private function get_untrusted_upload_error()
    {
    }
    /**
     * upload_dir function.
     *
     * @access public
     * @param mixed $pathdata
     * @return array
     */
    public function upload_dir($pathdata)
    {
    }
    /**
     * Get the random directory key for the current upload.
     *
     * @since 8.4.2
     *
     * @return string
     */
    private function get_upload_directory()
    {
    }
}
/**
 * Checkbox/radios field
 *
 * @version 8.4.5
 */
class WC_Product_Addons_Field_List extends \WC_Product_Addons_Field
{
    /**
     * Validate an addon
     *
     * @return bool|WP_Error
     */
    public function validate()
    {
    }
    /**
     * Process this field after being posted
     *
     * @return array|false Array on success, false when no value is posted
     */
    public function get_cart_item_data()
    {
    }
    /**
     * Preserve indexed option identities while accepting legacy label-only values.
     *
     * @since 8.4.3
     * @param mixed $value Posted value.
     * @return string
     */
    private function normalize_option_value($value)
    {
    }
    /**
     * Find the single option a posted slug or indexed radio value refers to.
     *
     * Legacy label-only values cannot distinguish colliding options, so the same
     * option must win in validate() and get_cart_item_data(): the first visible match, or the
     * first hidden match when no visible option carries the slug. Otherwise a selection could
     * pass validation against one sibling and price another, including a hidden one.
     *
     * @since 8.4.3
     *
     * @param  string $slug Sanitized posted value.
     * @return array|null
     */
    private function get_option_by_slug($slug)
    {
    }
}
/**
 * Select field
 *
 * @version 8.4.5
 */
class WC_Product_Addons_Field_Select extends \WC_Product_Addons_Field
{
    /**
     * Validate an addon
     *
     * @return bool|WP_Error pass or fail, or WP_Error
     */
    public function validate()
    {
    }
    /**
     * Process this field after being posted
     *
     * @return array|false Array on success, false when no option is chosen
     */
    public function get_cart_item_data()
    {
    }
}
/**
 * Global add-on group storage.
 *
 * @class    WC_Product_Addons_Global_Group
 * @version  8.4.5
 */
class WC_Product_Addons_Global_Group
{
    /**
     * Gets a global add-on group from the provided post in a structure intended for a REST API response
     *
     * @since 2.9.0
     *
     * @throws Exception
     * @param WP_Post|false|null $post Post to read the group from.
     * @return array
     */
    public static function get_group($post)
    {
    }
    /**
     * Updates a new global add-on group post using the provided arguments (after validating them)
     *
     * @since 2.9.0
     *
     * @throws Exception
     * @param array $args
     * @return array|WP_Error
     */
    public static function create_group($args)
    {
    }
    /**
     * Updates a global add-on group post using the provided arguments (after validating them)
     *
     * @since 2.9.0
     *
     * @throws Exception
     * @param WP_Post $post
     * @param array   $args
     * @return array|WP_Error
     */
    public static function update_group($post, $args)
    {
    }
    /**
     * Updates a global add-on group post's name
     *
     * @since 2.9.0
     *
     * @throws Exception
     * @param WP_Post $post
     * @param string  $name
     * @return void
     */
    protected static function set_name($post, $name)
    {
    }
    /**
     * Updates a global add-on group post's priority
     *
     * @since 2.9.0
     *
     * @throws Exception
     * @param WP_Post $post
     * @param int     $priority
     * @return void
     */
    protected static function set_priority($post, $priority)
    {
    }
    /**
     * Updates a global add-on group post's applicable product categories (or all products)
     *
     * @since 2.9.0
     *
     * @throws Exception
     * @param WP_Post $post
     * @param array   $category_ids
     * @return void
     */
    protected static function set_restrict_to_categories($post, $category_ids)
    {
    }
    /**
     * Updates a global add-on group post's fields and options
     *
     * @since 2.9.0
     *
     * @throws Exception
     * @param WP_Post $post
     * @param array   $fields
     * @return void
     */
    protected static function set_fields($post, $fields)
    {
    }
}
/**
 * Validates add-on group data before it is saved.
 *
 * @version 8.4.5
 */
class WC_Product_Addons_Group_Validator
{
    /**
     * Validates that the passed update is valid to apply to a global add-ons group
     *
     * @since 2.9.0
     *
     * @param array $update
     * @throws Exception If the passed update is invalid for any reason
     * @return true
     */
    public static function is_valid_global_addons_group_update($update)
    {
    }
    /**
     * Validates that the passed update is valid to apply to a product's add-ons
     *
     * @since 2.9.0
     *
     * @param array $update
     * @throws Exception If the passed update is invalid for any reason
     * @return true
     */
    public static function is_valid_product_addons_update($update)
    {
    }
    /**
     * Validates the passed data against the passed schema.  Note: Used recursively.
     *
     * @since 2.9.0
     *
     * @param mixed $data The data to validate.
     * @param array $schema The schema against which to validate it
     * @throws Exception If the passed data fails validation
     * @return true
     */
    protected static function validate($data, $schema)
    {
    }
    /**
     * Validates that the passed argument is a string. Used in validation schemas.
     *
     * @since 2.9.0
     *
     * @param mixed $arg The data to validate.
     * @throws Exception If the passed data is not a string
     * @return true
     */
    protected static function is_string($arg)
    {
    }
    /**
     * Validates that the passed argument is a valid price type. Used in validation schemas.
     *
     * @since 3.0.34.
     *
     * @param string $arg The data to validate.
     * @throws Exception  If the passed data is not a valid price type.
     * @return true
     */
    protected static function is_valid_price_type($arg)
    {
    }
    /**
     * Validates that the passed argument is a NON EMPTY string. Used in validation schemas.
     *
     * @since 2.9.0
     *
     * @param mixed $arg The data to validate.
     * @throws Exception If the passed data is not a string or is empty
     * @return true
     */
    protected static function is_non_empty_string($arg)
    {
    }
    /**
     * Validates that the passed argument is a 0 or a 1. Used in validation schemas.
     * Note that "false" in JSON will arrive as an empty string, so we also allow that.
     * Also note that "true" in JSON will arrive as a "1".
     *
     * @since 2.9.0
     *
     * @param string|integer|boolean $arg The data to validate
     * @throws Exception If the passed data is not a 0 or 1
     * @return true
     */
    protected static function is_zero_or_one($arg)
    {
    }
    /**
     * Validates that the passed argument is an array. The array can be empty. Used in validation schemas.
     *
     * @since 2.9.0
     *
     * @param mixed $arg The data to validate.
     * @throws Exception If the passed data is not an array
     * @return true
     */
    protected static function is_array($arg)
    {
    }
    /**
     * Validates that the passed argument is a positive integer (zero is also acceptable). Floating point
     * numbers are NOT acceptable. Used in validation schemas.
     *
     * @since 2.9.0
     *
     * @param mixed $arg The data to validate.
     * @throws Exception If the passed data is not a positive integer
     * @return true
     */
    protected static function is_positive_integer($arg)
    {
    }
    /**
     * Validates that the passed argument is empty or numeric. Integer AND floating point
     * numbers ARE acceptable. Used in validation schemas.
     *
     * @since 2.9.0
     *
     * @param integer|float|string $arg The data to validate
     * @throws Exception If the passed data is not empty or numeric
     * @return true
     */
    protected static function is_empty_or_numeric($arg)
    {
    }
    /**
     * Validates that the passed argument is empty or an integer. Floating point
     * numbers are NOT acceptable. Used in validation schemas.
     *
     * @since 2.9.0
     *
     * @param mixed $arg The data to validate.
     * @throws Exception If the passed data is not empty or an integer
     * @return true
     */
    protected static function is_empty_or_integer($arg)
    {
    }
    /**
     * Validates that the passed argument is an array of valid product category IDs. An empty array
     * IS acceptable. Used in validation schemas.
     *
     * @since 2.9.0
     *
     * @param mixed $arg The data to validate.
     * @throws Exception If the passed data is not an array of valid product category IDs
     * @return true
     */
    protected static function is_array_of_product_category_ids($arg)
    {
    }
    /**
     * Validates that the passed argument is an array of add-on fields. An empty array
     * IS acceptable. This also validates each option in the field's options array against
     * the field type. Used in validation schemas.
     *
     * @since 2.9.0
     *
     * @param mixed $arg The data to validate.
     * @throws Exception If the passed data is not an array of add-on fields
     * @return true
     */
    protected static function is_array_of_fields($arg)
    {
    }
    /**
     * Validates that the passed argument is valid field type. Used in validation schemas.
     *
     * @since 2.9.0
     *
     * @param string $arg The data to validate
     * @throws Exception If the passed data is not a valid field type
     * @return true
     */
    protected static function is_field_type($arg)
    {
    }
    /**
     * Validates that the passed argument is an array of basic options (i.e. options that only have
     * a label and optional price.) An empty array IS acceptable. Used in validation schemas.
     *
     * @since 2.9.0
     *
     * @param mixed $arg The data to validate.
     * @throws Exception If the passed data is not an array of basic options
     * @return true
     */
    protected static function is_array_of_basic_options($arg)
    {
    }
    /**
     * Validates that the passed argument is an array of options with optional integer limits.
     * An empty array IS acceptable. Used in validation schemas.
     *
     * @since 2.9.0
     *
     * @param mixed $arg The data to validate.
     * @throws Exception If the passed data is not an array of options with integer limits
     * @return true
     */
    protected static function is_array_of_options_with_optional_integer_limits($arg)
    {
    }
    /**
     * Validates that the passed argument is an array of options with optional float limits.
     * An empty array IS acceptable. Used in validation schemas.
     *
     * @since 2.9.0
     *
     * @param mixed $arg The data to validate.
     * @throws Exception If the passed data is not an array of options with float limits
     * @return true
     */
    protected static function is_array_of_options_with_optional_float_limits($arg)
    {
    }
}
/**
 * Global and product add-on group storage.
 *
 * @class    WC_Product_Addons_Groups
 * @version  8.4.5
 */
class WC_Product_Addons_Groups
{
    /**
     * Returns all the global groups (if any) and their add-ons
     *
     * @since 2.9.0
     *
     * @return array
     */
    public static function get_all_global_groups()
    {
    }
    /**
     * Given a global group ID or a product ID, returns add-ons in a structure intended for a REST API response
     *
     * @since 2.9.0
     *
     * @param int|string $id Global group or product ID.
     * @return array|WP_Error
     */
    public static function get_group($id)
    {
    }
    /**
     * Given a global group ID or a product ID, updates add-ons from the args provided
     *
     * @since 2.9.0
     *
     * @param int|string $id Global group or product ID.
     * @param array      $args
     * @return array|WP_Error
     */
    public static function update_group($id, $args)
    {
    }
    /**
     * Given a global group ID, deletes it
     *
     * @since 2.9.0
     *
     * @param int|string $id Global group ID.
     * @return array|WP_Error
     */
    public static function delete_group($id)
    {
    }
    /**
     * Tells you if the passed ID corresponds to a global group
     *
     * @since 2.9.0
     *
     * @param int|string $id Post ID to check.
     * @return bool
     */
    public static function is_a_global_group_id($id)
    {
    }
    /**
     * For backwards compatibility, each option needs to have a label, price, min and max
     * key when stored in meta, even if the field type does not require such a key
     *
     * @since 2.9.0
     *
     * @param array $fields
     * @return array
     */
    public static function coerce_options_to_contain_all_keys_before_saving_to_meta($fields)
    {
    }
    /**
     * For backwards compatibility, we let each option have a label, price, min and max
     * key when stored in meta, even though all those fields are not used by each field type.
     * This function removes inappropriate keys in options based on the field type, and is
     * used to help keep the REST API responses consistent with the structure of the requests.
     *
     * @since 2.9.0
     *
     * @param array $fields
     * @return array
     */
    public static function coerce_options_to_remove_field_type_inappropriate_keys($fields)
    {
    }
}
/**
 * Product-level add-on group.
 *
 * @version 8.4.5
 */
class WC_Product_Addons_Product_Group
{
    /**
     * Gets a product's add-on "group" from the provided post in a structure intended for a REST API response
     *
     * @since 2.9.0
     *
     * @throws Exception
     * @param WP_Post|false|null $post Post to read the group from.
     * @return array
     */
    public static function get_group($post)
    {
    }
    /**
     * Updates a product's add-ons "group" using the provided arguments (after validating them)
     *
     * @since 2.9.0
     *
     * @throws Exception
     * @param WP_Post $post
     * @param array   $args
     * @return array|WP_Error
     */
    public static function update_group($post, $args)
    {
    }
    /**
     * Updates a product's "exclude global add-ons" flag
     *
     * @since 2.9.0
     *
     * @param WP_Post $post
     * @param mixed   $value
     * @return void
     */
    protected static function set_exclude_global_add_ons($post, $value)
    {
    }
    /**
     * Gets a product's "exclude global add-ons" flag
     *
     * @since 2.9.0
     * @param  WP_Post $post Post of the product.
     * @return bool
     */
    protected static function get_exclude_global_add_ons($post)
    {
    }
    /**
     * Updates a product's add-on fields and options
     *
     * @since 2.9.0
     *
     * @throws Exception
     * @param WP_Post $post
     * @param array   $fields
     * @return void
     */
    protected static function set_fields($post, $fields)
    {
    }
}
/**
 * Handles the settings conversion from pre 3.0.
 *
 * @since 3.0.0
 */
class WC_Product_Addons_3_0_Conversion_Helper
{
    /**
     * Performs the conversion.
     *
     * @since 3.0.0
     * @param array $addon_fields
     * @return array $updated_addon_fields Updated add-on fields.
     */
    public static function do_conversion($addon_fields)
    {
    }
    /**
     * Converts the field type to restrictions.
     *
     * @since 3.0.0
     * @param string $field_type
     * @return string $restrictions_type
     */
    public static function convert_restrictions($field_type)
    {
    }
    /**
     * Converts the field type.
     *
     * @since 3.0.0
     * @param string $previous_type
     * @return string $new_type
     */
    public static function convert_type($previous_type)
    {
    }
    /**
     * Adds a heading field.
     *
     * @since 3.0.0
     * @param array $field
     * @return array $heading
     */
    public static function generate_heading($field)
    {
    }
    /**
     * Converts the field to 3.0 compatible.
     *
     * @since 3.0.0
     * @param array $field Field setting.
     * @return array Converted field setting data.
     */
    public static function convert($field = array())
    {
    }
}
/**
 * WC_Product_Addons_Migration_3_0_Product class
 *
 * @since 3.0.0
 * @version 8.4.5
 */
class WC_Product_Addons_Migration_3_0_Product
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Try to run migration on product.
     *
     * @since 3.0.0
     * @return void
     */
    public function migrate()
    {
    }
}
/**
 * WC_Product_Addons_Migration_3_0 class
 *
 * @since 3.0.0
 * @version 8.4.5
 */
class WC_Product_Addons_Migration_3_0
{
    /**
     * Constructor
     *
     * @since 3.0.0
     */
    public function __construct()
    {
    }
    /**
     * Run the migration.
     *
     * @since 3.0.0
     * @return void
     */
    private function run()
    {
    }
    /**
     * Migrate all Global add-ons.
     *
     * @since 3.0.0
     * @todo We should remove the saved backup "_product_addons_old" in the future.
     * @return void
     */
    private function migrate_global_addons()
    {
    }
    /**
     * Whether add-ons are already stored in the 3.0 format.
     *
     * Every add-on saved by 3.0 or later has a title format, which 2.x never stored. Saving
     * rewrites all the add-ons of a group, so a group never holds both formats.
     *
     * @since 8.4.4
     * @param mixed $addon_fields Stored add-ons.
     * @return bool
     */
    private static function is_3_0_format($addon_fields)
    {
    }
}
/**
 * Main class.
 *
 * @version 8.4.5
 */
class WC_Product_Addons
{
    /**
     * Groups controller instance (legacy).
     *
     * @var WC_Product_Add_Ons_Groups_Controller
     */
    protected $groups_controller;
    /**
     * The single instance of the class.
     *
     * @var WC_Product_Addons|null
     */
    protected static $_instance = \null;
    /**
     * Main WC_Product_Addons instance. Ensures only one instance is loaded or can be loaded - @see 'WC_PAO()'.
     *
     * @static
     * @return  WC_Product_Addons
     */
    public static function instance()
    {
    }
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Initializes plugin classes.
     *
     * @version 8.3.1
     * @return void
     */
    public function init()
    {
    }
    /**
     * Init post types used for addons.
     *
     * @return void
     */
    public function init_post_types()
    {
    }
    /**
     * Initialize the REST API
     *
     * @since 2.9.0
     * @param WP_REST_Server $wp_rest_server Rest server class.
     * @return void
     */
    public function rest_api_init($wp_rest_server)
    {
    }
    /**
     * Plugin action links
     *
     * @param string[] $links Array of links.
     * @param string   $file  Path to the plugin file relative to the plugins directory.
     * @return string[]
     */
    public function plugin_row_meta($links, $file)
    {
    }
    /**
     * On activation.
     * Runs on activation. Assigns a notice message to a WordPress option.
     *
     * @return void
     */
    public function notices()
    {
    }
    /**
     * Declare HPOS( Custom Order tables) compatibility.
     *
     * @since 5.0.1
     * @return void
     */
    public function declare_hpos_compatibility()
    {
    }
    /**
     * Declare cart/checkout Blocks compatibility.
     *
     * @since 6.5.0
     * @return void
     */
    public function declare_blocks_compatibility()
    {
    }
    /**
     * Get PAO screen ids.
     */
    public function get_screen_ids()
    {
    }
    /**
     * Checks if the current admin screen belongs to extension.
     *
     * @param   string[] $extra_screens_to_check Extra screen IDs to check (optional).
     * @return  bool
     */
    public function is_current_screen($extra_screens_to_check = array())
    {
    }
    /**
     * Get formatted screen id.
     *
     * @param  string $screen_id Screen ID.
     * @return string
     */
    function get_formatted_screen_id($screen_id)
    {
    }
    /**
     * Returns URL to a doc or support resource.
     *
     * @since  6.5.0
     *
     * @param  string $handle
     * @return string|false
     */
    public function get_resource_url($handle)
    {
    }
    /**
     * Plugin version getter.
     *
     * @since  6.9.0
     *
     * @param  boolean $base
     * @param  string  $version
     * @return string
     */
    public function plugin_version($base = \false, $version = '')
    {
    }
}
/**
 * Returns the main instance of WC_Product_Addons to prevent the need to use globals.
 *
 * @return  WC_Product_Addons
 */
function WC_PAO()
{
}
// phpcs:disable WordPress.Files.FileName
/**
 * WooCommerce fallback notice.
 *
 * @since 4.1.2
 * @return void
 */
function woocommerce_product_addons_missing_wc_notice()
{
}
/**
 * Queues the PHP version incompatibility notice.
 *
 * Runs on 'admin_notices' before 'WC_PAO_Admin_Notices::output_notices()' so that no translation
 * function is called before 'init'.
 *
 * @since 8.4.1
 * @return void
 */
function woocommerce_product_addons_php_incompatibility_notice()
{
}
/**
 * Queues the WooCommerce version incompatibility notice.
 *
 * Runs on 'admin_notices' before 'WC_PAO_Admin_Notices::output_notices()' so that no translation
 * function is called before 'init'.
 *
 * @since 8.4.1
 * @return void
 */
function woocommerce_product_addons_wc_incompatibility_notice()
{
}
/**
 * Loads the plugin translations.
 *
 * Must not run before 'init' -- see https://developer.wordpress.org/reference/functions/load_plugin_textdomain/.
 *
 * @since 8.4.1
 * @return void
 */
function woocommerce_product_addons_load_textdomain()
{
}
/**
 * Activation.
 *
 * @since 3.0.0
 * @return void
 */
function woocommerce_product_addons_activation()
{
}
/**
 * Handle plugin deactivation process.
 *
 * @since 6.1.3
 * @return void
 */
function woocommerce_product_addons_deactivation()
{
}
/**
 * Init product addons.
 *
 * @version 8.4.4
 * @return void
 */
function woocommerce_product_addons_init()
{
}
\define('WC_PRODUCT_ADDONS_VERSION', '8.4.5');
