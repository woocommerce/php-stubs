<?php
/**
 * Generated stub declarations for woocommerce-min-max-quantities 5.1.0.
 * @see https://github.com/woocommerce/php-stubs
 */

/**
 * Admin notices handling.
 *
 * @class    WC_Min_Max_Quantities_Admin_Notices
 * @version  4.3.2
 */
class WC_Min_Max_Quantities_Admin_Notices
{
    /**
     * Notices presisting on the next request.
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
     * @var array
     */
    private static $maintenance_notice_types = array('welcome' => 'welcome_notice');
    /**
     * Constructor.
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
     */
    public static function add_notice($text, $args, $save_notice = \false)
    {
    }
    /**
     * Checks if a notice that belongs to a the specified uniqueness context already exists.
     *
     * @since  4.2.3
     *
     * @param  string $context
     * @return bool
     */
    private static function unique_notice_exists($context)
    {
    }
    /**
     * Checks if a maintenance notice is visible.
     *
     * @since  4.2.3
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
     * @since  4.2.3
     *
     * @param  string $notice_name
     * @return boolean
     */
    public static function is_dismissible_notice_dismissed($notice_name)
    {
    }
    /**
     * Save notices to the DB.
     */
    public static function save_notices()
    {
    }
    /**
     * Show any stored error messages.
     */
    public static function output_notices()
    {
    }
    /**
     * Show maintenance notices.
     */
    public static function hook_maintenance_notices()
    {
    }
    /**
     * Add a dimissible notice/error.
     *
     * @since  4.2.3
     *
     * @param  string $text
     * @param  mixed  $args
     */
    public static function add_dismissible_notice($text, $args)
    {
    }
    /**
     * Remove a dismissible notice.
     *
     * @since  5.8.0
     *
     * @param  string $notice_name
     */
    public static function remove_dismissible_notice($notice_name)
    {
    }
    /**
     * Add a maintenance notice to be displayed.
     *
     * @param  string $notice_name
     */
    public static function add_maintenance_notice($notice_name)
    {
    }
    /**
     * Remove a maintenance notice.
     *
     * @param  string $notice_name
     */
    public static function remove_maintenance_notice($notice_name)
    {
    }
    /**
     * Add 'welcome' notice.
     *
     * @since  4.2.3
     */
    public static function welcome_notice()
    {
    }
    /**
     * Dismisses a notice. Dismissible maintenance notices cannot be dismissed forever.
     *
     * @since  4.2.3
     *
     * @param  string $notice
     */
    public static function dismiss_notice($notice)
    {
    }
}
/**
 * WC_Min_Max_Quantities_Admin class.
 *
 * @version 5.1.0
 */
class WC_Min_Max_Quantities_Admin
{
    /**
     * Plugin settings.
     */
    public $settings = array();
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Sanitize the minimum order value.
     *
     * @param string $value The value to sanitize.
     */
    public function sanitize_minimum_order_value($value)
    {
    }
    /**
     * Sanitize the maximum order value.
     *
     * @param string $value The value to sanitize.
     */
    public function sanitize_maximum_order_value($value)
    {
    }
    /**
     * Helper function used to sanitize the order value settings.
     *
     * @param string $value The value to sanitize.
     * @param string $message The error message to display if the value is invalid.
     */
    private function sanitize_numeric_string_value($value, $message)
    {
    }
    /**
     * Αdd global admin settings.
     *
     * @since 2.3.0
     * @return array $settings
     */
    public function add_settings($settings)
    {
    }
    /**
     * Display global admin settings.
     *
     * @return void
     */
    public function admin_settings()
    {
    }
    /**
     * Save global admin settings.
     *
     * @return void
     */
    public function save_admin_settings()
    {
    }
    /**
     * Admin writepanel scripts.
     */
    public function admin_scripts()
    {
    }
    /**
     * Output product-level Quantity rules.
     *
     * @return void
     */
    public function write_panel()
    {
    }
    /**
     * Save variation-level quantity rules.
     *
     * @param mixed $post_id
     * @return void
     */
    public function save_variation_settings($variation_id, $i)
    {
    }
    /**
     * Save product-level Quantity rules.
     *
     * @param mixed $post_id
     * @return void
     */
    public function write_panel_save($post_id)
    {
    }
    /**
     * Save variation-level quantity rules.
     *
     * @return void
     */
    public function variation_options($loop, $variation_data, $variation)
    {
    }
    /**
     * Display variation-level Quantity rules.
     *
     * @param mixed $loop
     * @param mixed $variation_data
     * @return void
     */
    public function variation_panel($loop, $variation_data, $variation)
    {
    }
    /**
     * Category thumbnail fields.
     *
     * @return void
     */
    public function add_category_fields()
    {
    }
    /**
     * Edit category thumbnail field.
     *
     * @param mixed $term Term (category) being edited
     * @param mixed $taxonomy Taxonomy of the term being edited
     * @return void
     */
    public function edit_category_fields($term, $taxonomy)
    {
    }
    /**
     * Validates category Group of value when creating a new category.
     *
     * @param string|WP_Error $term     The term name to add, or a WP_Error object if there's an error.
     * @param string          $taxonomy Taxonomy slug.
     * @return string|WP_Error
     */
    public function validate_category_group_of($term, $taxonomy)
    {
    }
    /**
     * Save 'Group of' category field.
     *
     * @param mixed $term_id Term ID being saved
     * @param mixed $tt_id
     * @param mixed $taxonomy Taxonomy of the term being saved
     * @return void
     */
    public function category_fields_save($term_id, $tt_id, $taxonomy)
    {
    }
    /**
     * Add new column in categories overview table.
     *
     * @param mixed $columns
     * @return void
     */
    public function product_cat_columns($columns)
    {
    }
    /**
     * Populate the 'Group of' category column.
     *
     * @param mixed $columns
     * @param mixed $column
     * @param mixed $id
     * @return void
     */
    public function product_cat_column($columns, $column, $id)
    {
    }
    /**
     * Backwards compatibility: Add a notice if Minimum/Maximum quantities are not compatible with the "Group of" option.
     */
    public function maybe_add_group_of_notice()
    {
    }
    /**
     * Prints warning messages in the admin area.
     *
     * @param string $content
     * @param string $type
     * @return void
     */
    public function output_notice($content, $type)
    {
    }
    /**
     * Show row meta on the plugin screen.
     *
     * @param   mixed $links
     * @param   mixed $file
     * @return  array
     */
    public static function plugin_row_meta($links, $file)
    {
    }
    /**
     * Dismisses notices.
     *
     * @since  4.2.3
     *
     * @return void
     */
    public function dismiss_notice()
    {
    }
}
/**
 * Add custom REST API fields.
 *
 * @class    WC_MMQ_REST_API
 * @version  5.0.0
 */
class WC_MMQ_REST_API
{
    /**
     * Custom REST API product field names, indicating support for getting/updating.
     *
     * @var array
     */
    private static $product_fields = array('group_of_quantity' => array('get', 'update'), 'min_quantity' => array('get', 'update'), 'max_quantity' => array('get', 'update'), 'exclude_order_quantity_value_rules' => array('get', 'update'), 'exclude_category_quantity_rules' => array('get', 'update'), 'combine_variations' => array('get', 'update'));
    /**
     * Setup order class.
     */
    public static function init()
    {
    }
    /**
     * Filters REST API product variation responses to add custom data.
     */
    public static function filter_variation_fields()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Variations.
    |--------------------------------------------------------------------------
    */
    /**
     * Modify GET requests for product variations.
     *
     * @param  array $schema
     * @return array
     */
    public static function filter_variation_schema($schema)
    {
    }
    /**
     * Filters WC REST API GET product variation responses.
     *
     * @since  4.3.0
     *
     * @param  WP_REST_Response $response
     * @param  WC_Data          $product
     *
     * @return WP_REST_Response
     */
    public static function filter_product_variation_response($response, $product)
    {
    }
    /**
     * Filters WC REST API SET product variation responses.
     *
     * @since  4.3.0
     *
     * @param  WC_Product_Variation $variation
     * @param  WP_REST_Request      $request
     *
     * @return WC_Product_Variation
     */
    public static function handle_product_variation_update($variation, $request)
    {
    }
    /**
     * Validates quantity rules in REST API PUT/POST requests.
     *
     * @since  4.3.2
     *
     * @throws WC_REST_Exception When invalid quantity rules for variations.
     *
     * @param  WC_Product_Variation $variation
     * @param  WP_REST_Request      $request
     *
     * @return WC_Product_Variation
     */
    public static function rest_validate_product_variation_quantity_rules($variation, $request)
    {
    }
    /**
     * Updates product variation meta data based on quantity rules from REST request.
     *
     * @since  4.3.2
     *
     * @param  WC_Product_Variation $variation
     * @param  WP_REST_Request      $request
     *
     * @return WC_Product_Variation
     */
    public static function rest_set_product_variation_fields($variation, $request)
    {
    }
    /**
     * Gets extended (unprefixed) variation schema properties for products.
     *
     * @return array
     */
    private static function get_extended_variation_schema()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Products.
    |--------------------------------------------------------------------------
    */
    /**
     * Register custom REST API fields for product requests.
     */
    public static function register_product_fields()
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
     * Gets schema properties for MMQ product fields.
     *
     * @param  string $field_name
     * @return array
     */
    public static function get_product_field_schema($field_name)
    {
    }
    /**
     * Gets values for MMQ product fields.
     *
     * @param  array           $response
     * @param  string          $field_name
     * @param  WP_REST_Request $request
     * @return array
     */
    public static function get_product_field_value($response, $field_name, $request)
    {
    }
    /**
     * Validates and sets product fields based on PUT/POST REST API requests.
     *
     * @since  4.3.2
     *
     * @param  WC_Product      $product
     * @param  WP_REST_Request $request
     */
    public static function handle_product_update($product, $request)
    {
    }
    /**
     * Updates product meta data based on quantity rules from REST request.
     *
     * @since  4.3.2
     *
     * @param  WC_Product      $product
     * @param  WP_REST_Request $request
     */
    public static function rest_set_product_fields($product, $request)
    {
    }
    /**
     * Validates quantity rules in REST API PUT/POST requests.
     *
     * @since  4.3.2
     *
     * @throws WC_REST_Exception When invalid quantity rules.
     *
     * @param  WC_Product      $product
     * @param  WP_REST_Request $request
     */
    public static function rest_validate_product_quantity_rules($product, $request)
    {
    }
    /**
     * Gets bundle-specific product data.
     *
     * @since  5.0.0
     *
     * @param  string     $key
     * @param  WC_Product $product
     * @return array
     */
    private static function get_product_field($key, $product)
    {
    }
}
/**
 * Filters the store public API.
 *
 * @version 4.1.2
 */
class WC_MMQ_Store_API
{
    /**
     * Plugin Identifier, unique to each plugin.
     *
     * @var string
     */
    const IDENTIFIER = 'min_max_quantities';
    /**
     * Bootstraps the class and hooks required data.
     */
    public static function init()
    {
    }
    /**
     * Adjust cart item quantity limits to keep min quantity limited by Min/Max Quantity restrictions.
     *
     * If the $cart_item is null, then this means that the $product has not been added to the cart yet.
     * In this case, the minimum product quantity can be read directly from the post meta.
     * When the $cart_item exists, though, the minimum product quantity must be filtered by the `wc_min_max_quantity_minimum_allowed_quantity` first.
     *
     * @param mixed       $value The value being filtered.
     * @param \WC_Product $product The product object.
     * @param array|null  $cart_item The cart item if the product exists in the cart, or null.
     *
     * @return mixed
     */
    public static function filter_min_cart_item_qty($value, $product, $cart_item)
    {
    }
    /**
     * Adjust cart item quantity limits to keep max quantity limited by Min/Max Quantity restrictions.
     *
     * If the $cart_item is null, then this means that the $product has not been added to the cart yet.
     * In this case, the maximum product quantity can be read directly from the post meta.
     * When the $cart_item exists, though, the maximum product quantity must be filtered by the `wc_min_max_quantity_maximum_allowed_quantity` first.
     *
     * @param mixed       $value The value being filtered.
     * @param \WC_Product $product The product object.
     * @param array|null  $cart_item The cart item if the product exists in the cart, or null.
     *
     * @return mixed
     */
    public static function filter_max_cart_item_qty($value, $product, $cart_item)
    {
    }
    /**
     * Ensure that cart item quantity can be changed in specific intervals.
     *
     * If the $cart_item is null, then this means that the $product has not been added to the cart yet.
     * In this case, the group of product quantity can be read directly from the post meta.
     * When the $cart_item exists, though, the group of product quantity must be filtered by the `wc_min_max_quantity_group_of_quantity` first.
     *
     * @param mixed       $value The value being filtered.
     * @param \WC_Product $product The product object.
     * @param array|null  $cart_item The cart item if the product exists in the cart, or null.
     *
     * @return mixed
     */
    public static function filter_multiple_of_cart_item_qty($value, $product, $cart_item)
    {
    }
    /**
     * Validate cart based on Min/Max/Group of rules and add error notices.
     *
     * @throws \Automattic\WooCommerce\StoreApi\Exceptions\RouteException
     *
     * @param WP_Error $errors
     * @param WC_Cart  $cart
     */
    public static function validate_cart($errors, $cart)
    {
    }
    /**
     * Prevents access to the checkout block if the cart item quantities are not correctly configured.
     *
     * @throws \Automattic\WooCommerce\StoreApi\Exceptions\RouteException
     *
     * @param  WC_Order $order
     * @return array
     */
    public static function validate_draft_order($order)
    {
    }
}
/**
 * WC_Min_Max_Quantities_Blocks class.
 */
class WC_Min_Max_Quantities_Blocks
{
    public function __construct()
    {
    }
    public function register_custom_blocks()
    {
    }
    public function add_blocks_to_product_editor($inventory_tab)
    {
    }
    private function add_blocks_to_simple_product_template($inventory_tab)
    {
    }
    private function add_blocks_to_product_variation_template($inventory_tab)
    {
    }
}
/**
 * Handles compatibility with other WC extensions.
 *
 * @class    WC_MMQ_Compatibility
 * @version  5.0.4
 */
class WC_MMQ_Compatibility
{
    /**
     * Min required plugin versions to check.
     *
     * @var array
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
     * @var WC_MMQ_Compatibility
     *
     * @since 4.0.4
     */
    protected static $_instance = \null;
    /**
     * Main WC_MMQ_Compatibility instance. Ensures only one instance of WC_MMQ_Compatibility is loaded or can be loaded.
     *
     * @static
     * @return WC_MMQ_Compatibility
     * @since  4.0.4
     */
    public static function instance()
    {
    }
    /**
     * Cloning is forbidden.
     *
     * @since 4.0.4
     */
    public function __clone()
    {
    }
    /**
     * Unserializing instances of this class is forbidden.
     *
     * @since 4.0.4
     */
    public function __wakeup()
    {
    }
    /**
     * Setup compatibility class.
     */
    protected function __construct()
    {
    }
    /**
     * Initialize.
     *
     * @since  5.4.0
     *
     * @return void
     */
    protected function load_modules()
    {
    }
    /**
     * Core compatibility functions.
     *
     * @return void
     */
    public static function core_includes()
    {
    }
    /**
     * Checks if a module has been loaded.
     *
     * @return boolean
     */
    public function is_module_loaded($name)
    {
    }
    /**
     * Load compatibility classes.
     *
     * @version 4.3.2
     *
     * @return void
     */
    public function module_includes()
    {
    }
    /**
     * Get min module version.
     *
     * @since  4.0.4
     * @return bool
     */
    public function get_required_module_version($module)
    {
    }
}
/**
 * Functions for WC core back-compatibility.
 *
 * @class    WC_MMQ_Core_Compatibility
 * @version  4.2.3
 */
class WC_MMQ_Core_Compatibility
{
    /**
     * Current REST request stack.
     * An array containing WP_REST_Request instances.
     *
     * @since 4.2.3
     *
     * @var array
     */
    private static $requests = array();
    /**
     * Cache 'gt' comparison results for WP version.
     *
     * @since  4.3.0
     * @var    array
     */
    private static $is_wp_version_gt = array();
    /**
     * Cache 'gte' comparison results for WP version.
     *
     * @since  4.3.0
     * @var    array
     */
    private static $is_wp_version_gte = array();
    /**
     * Cache 'gte' comparison results for WC version.
     *
     * @since  5.13.3
     * @var    array
     */
    private static $is_wc_version_gte = array();
    /**
     * Constructor.
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
     * @since  4.2.3
     *
     * @param  WP_REST_Response     $response
     * @param  WP_REST_Server|array $handler
     * @param  WP_REST_Request      $request
     * @return mixed
     */
    public static function pop_rest_request($response)
    {
    }
    /**
     * Saves the current hydration request.
     *
     * @since  4.2.3
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
     * @since  6.15.0
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
     * Returns the current Store/REST API request or false.
     *
     * @since  2.5.0
     *
     * @return WP_REST_Request|false
     */
    public static function get_api_request()
    {
    }
    /**
     * Whether this is a Store API request.
     *
     * @since  2.5.0
     *
     * @param  string $route
     * @return boolean
     */
    public static function is_store_api_request($route = '')
    {
    }
    /**
     * Returns true if the installed version of WordPress is greater than or equal to $version.
     *
     * @since  4.3.0
     *
     * @param  string $version
     * @return boolean
     */
    public static function is_wp_version_gt($version)
    {
    }
    /**
     * Returns true if the installed version of WordPress is greater than or equal to $version.
     *
     * @since  4.3.0
     *
     * @param  string $version
     * @return boolean
     */
    public static function is_wp_version_gte($version)
    {
    }
    /**
     * Helper method to get the version of the currently installed WooCommerce.
     *
     * @since  5.1.0
     *
     * @return string
     */
    private static function get_wc_version()
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is greater than or equal to $version.
     *
     * @since  5.1.0
     *
     * @param  string $version The version to compare.
     * @return boolean true if the installed version of WooCommerce is > $version
     */
    public static function is_wc_version_gte($version)
    {
    }
    /**
     * Add body class for WC 9.6 compatibility.
     *
     * @since  5.1.0
     *
     * @param  string $classes The current class string.
     * @return string The updated class string.
     */
    public static function include_admin_body_class($classes)
    {
    }
}
class WC_Min_Max_Quantities_Addons
{
    /**
     * Checks if checkout page is on set multiple shipping addresses
     *
     * @since 2.3.15
     * @version 2.3.15
     * @return
     */
    public function is_multiple_shipping_address_page()
    {
    }
}
/**
 * WooCommerce Blocks Compatibility.
 *
 * @version 4.0.4
 */
class WC_MMQ_Blocks_Compatibility
{
    /**
     * Initialize.
     */
    public static function init()
    {
    }
}
/**
 * PayPal Compatibility.
 *
 * @version 4.3.2
 */
class WC_Min_Max_Quantities_PayPal_Compatibility
{
    // Hide smart buttons in product pages when Min or Max qty/value are set.
    public static function init()
    {
    }
    /**
     * Hide smart buttons in product pages when Min or Max qty/value are set.
     *
     * @param  bool       $is_supported
     * @param  WC_Product $product
     *
     * @return bool
     */
    public static function handle_smart_buttons($is_supported, $product)
    {
    }
}
/**
 * Stripe Compatibility.
 *
 * @version 4.3.2
 */
class WC_Min_Max_Quantities_Stripe_Compatibility
{
    // Hide smart buttons in product pages when Min or Max qty/value are set.
    public static function init()
    {
    }
    /**
     * Hide express checkout buttons in product pages when Min or Max qty/value are set.
     *
     * @param  bool    $hide
     * @param  WP_Post $post
     *
     * @return bool
     */
    public static function handle_express_checkout_buttons($hide, $post = \null)
    {
    }
}
/**
 * WC_Payments Compatibility.
 *
 * @version 4.3.2
 */
class WC_Min_Max_Quantities_WC_Payments_Compatibility
{
    public static function init()
    {
    }
    /**
     * Hide express checkout buttons in product pages when Min or Max qty/value are set.
     *
     * @param  bool       $is_supported
     * @param  WC_Product $product
     *
     * @return bool
     */
    public static function handle_express_checkout_buttons($is_supported, $product)
    {
    }
}
// WRCS: DEFINED_VERSION.
/**
 * Min Max Quantities class.
 */
class WC_Min_Max_Quantities
{
    /**
     * Minimum WooCommerce version.
     *
     * @var string
     */
    public $min_wc_version = '8.2.0';
    /**
     * Minimum order quantity.
     *
     * @var int
     */
    public $minimum_order_quantity;
    /**
     * Maximum order quantity.
     *
     * @var int
     */
    public $maximum_order_quantity;
    /**
     * Minimum order value.
     *
     * @var float
     */
    public $minimum_order_value;
    /**
     * Maximum order value.
     *
     * @var float
     */
    public $maximum_order_value;
    /**
     * List of excluded product titles.
     *
     * @var array
     */
    public $excludes = array();
    /**
     * Instance of compatibility class.
     *
     * @var WC_MMQ_Compatibility
     */
    public $compatibility;
    /**
     * Instance of addons class.
     *
     * @var WC_Min_Max_Quantities_Addons
     */
    public $addons;
    /**
     * Class instance.
     *
     * @var object
     */
    private static $instance;
    /**
     * Get the class instance.
     */
    public static function get_instance()
    {
    }
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Sets DB version and conditionally displays welcome notice.
     *
     * @since 4.2.3
     */
    public function maybe_install()
    {
    }
    /**
     * Registers custom taxonomies.
     *
     * @since 4.1.4
     */
    public function register_custom_taxonomies()
    {
    }
    /**
     * Plugin version getter.
     *
     * @since  4.3.0
     *
     * @param  boolean $base
     * @param  string  $version
     * @return string
     */
    public function plugin_version($base = \false, $version = '')
    {
    }
    /**
     * Define constants if not present.
     *
     * @since 4.0.4
     *
     * @return boolean
     */
    protected function maybe_define_constant($name, $value)
    {
    }
    /**
     * Plugin URL getter.
     *
     * @return string
     */
    public function plugin_url()
    {
    }
    /**
     * Output a notice if Woocommerce isn't active.
     */
    public function woocommerce_required_notice()
    {
    }
    /**
     * Output a notice if PHP is older than 7.0
     */
    public function php_version_notice()
    {
    }
    /**
     * Load scripts.
     */
    public function load_scripts()
    {
    }
    /**
     * Declare HPOS (Custom Order tables), Blocks and new Product Editor compatibility.
     *
     * @since 4.0.2
     */
    public function declare_feature_compatibilities()
    {
    }
    /**
     * Load Localisation files.
     *
     * Note: the first-loaded translation file overrides any following ones if the same translation is present.
     *
     * Frontend/global Locales found in:
     * - WP_LANG_DIR/woocommerce-min-max-quantities/woocommerce-min-max-quantities-LOCALE.mo
     * - woocommerce-min-max-quantities/woocommerce-min-max-quantities-LOCALE.mo (which if not found falls back to:)
     * - WP_LANG_DIR/plugins/woocommerce-min-max-quantities-LOCALE.mo
     */
    public function load_plugin_textdomain()
    {
    }
    /**
     * Add an error.
     *
     * @since 1.0.0
     * @version 2.3.18
     * @param string $error Error text.
     */
    public function add_error($error = '')
    {
    }
    /**
     * Output any plugin specific error messages
     *
     * We use this instead of wc_print_notices so we
     * can remove any error notices that aren't from us.
     */
    public function output_errors()
    {
    }
    /**
     * Add quantity property to add to cart button on shop loop for simple products.
     *
     * @param  string     $html    Add to cart link.
     * @param  WC_Product $product Product object.
     * @return string
     */
    public function add_to_cart_link($html, $product)
    {
    }
    /**
     * Get product or variation ID to check
     *
     * @param array $values List of values.
     * @return int
     */
    public function get_id_to_check($values)
    {
    }
    /**
     * Validate cart items against set rules
     *
     * @throws Exception
     */
    public function check_cart_items()
    {
    }
    /**
     * If the minimum allowed quantity for purchase is lower then the current stock, we need to
     * let the user know that they are on backorder, or out of stock.
     *
     * @param array      $args    List of arguments.
     * @param WC_Product $product Product object.
     */
    public function maybe_show_backorder_message($args, $product)
    {
    }
    /**
     * Add respective error message depending on rules checked.
     *
     * @throws Exception
     *
     * @param WC_Product $product           Product object.
     * @param int        $quantity          Quantity to check.
     * @param int        $minimum_quantity  Minimum quantity.
     * @param int        $maximum_quantity  Maximum quanitty.
     * @param int        $group_of_quantity Group quantity.
     * @param int|null   $checking_id       Variation ID
     * @return void
     */
    public function check_rules($product, $quantity, $minimum_quantity, $maximum_quantity, $group_of_quantity, $checking_id = \null)
    {
    }
    /**
     * Add to cart validation
     *
     * @param  mixed $pass         Filter value.
     * @param  mixed $product_id   Product ID.
     * @param  mixed $quantity     Quantity.
     * @param  int   $variation_id Variation ID (default none).
     * @return mixed
     */
    public function add_to_cart($pass, $product_id, $quantity, $variation_id = 0)
    {
    }
    /**
     * Updates the quantity arguments.
     *
     * @param array      $data    List of data to update.
     * @param WC_Product $product Product object.
     * @return array
     */
    public function update_quantity_args($data, $product)
    {
    }
    /**
     * If on a grouped product page, don't use Group as for our minimum.
     *
     * @param boolean $use_group Whether to use group quantity as minimum. Default true.
     * @param object  $product   Product object.
     * @param array   $data      Available product data.
     * @return boolean
     */
    public function use_group_as_min_quantity($use_group, $product, $data)
    {
    }
    /**
     * Adds variation min max settings to the localized variation parameters to be used by JS.
     *
     * @param array  $data      Available variation data.
     * @param object $product   Product object.
     * @param object $variation Variation object.
     * @return array $data
     */
    public function available_variation($data, $product, $variation)
    {
    }
    /**
     * Get group_of_quantity setting for a product.
     *
     * @param WC_Product $product Product object.
     *
     * Doesn't handle variations on variable products.
     *
     * @return int
     */
    public function get_group_of_quantity_for_product($product)
    {
    }
    /**
     * Modify quantity for add to cart action inside loop to respect minimum rules.
     *
     * @param int $product_id Product ID.
     *
     * @return int
     */
    public function modify_add_to_cart_quantity($product_id)
    {
    }
    /**
     * Filter Minimum Quantity based on "Group of" option on runtime.
     *
     * @param  int $min_quantity
     * @param  int $group_of_quantity
     *
     * @return int
     */
    public static function adjust_min_quantity($min_quantity, $group_of_quantity)
    {
    }
    /**
     * Filter Maximum Quantity based on "Group of" option on runtime.
     *
     * @param  int $max_quantity
     * @param  int $group_of_quantity
     * @param  int $min_quantity
     *
     * @return int
     */
    public static function adjust_max_quantity($max_quantity, $group_of_quantity, $min_quantity = 0)
    {
    }
    /**
     * Check if the product always conforms to MMQ rules.
     *
     * That is, there are either no rules set, or the min/max rules are set and equal.
     *
     * @param WC_Product $product Product object.
     *
     * @return bool
     */
    private function can_skip_product_rules_validation($product)
    {
    }
    /**
     * Check if the variable product supports express checkout.
     *
     * Simplified version that is a bit lighter on resources: If there are any variations with min/max rules enabled, return false.
     * Variations can have different prices, too. But that's handled outside of this plugin.
     *
     * @param WC_Product $product Product object.
     *
     * @return bool
     */
    private function variable_product_supports_express_checkout($product)
    {
    }
    /**
     * Check if global rules apply to a product.
     *
     * That is, if there are any global rules set, and the product is not excluded from them.
     *
     * Exclusion from group of rules applied through categories is done in can_skip_product_rules_validation(),
     * as get_group_of_quantity_for_product returns 0 if the rule is set, but the product is excluded.
     *
     * @since 4.3.2
     * @version 4.3.2
     *
     * @param WC_Product $product Product object.
     *
     * @return bool
     */
    private function global_rules_apply_to_product($product)
    {
    }
    /**
     * Check if the express checkout button(s) can be displayed on single product page.
     *
     * The only thing we can do from PHP is to hide the smart buttons if the min/max quantity or value is set.
     * The end customer can increase the quantity and click the express checkout button and only at that point
     * we can check if the quantity/value is within the allowed range.
     * Since we can't validate this in PHP, we hide the express checkout button.
     *
     * @since 4.3.2
     * @version 4.3.2
     *
     * @param WC_Product $product Product object.
     *
     * @return bool
     */
    public function can_display_express_checkout($product)
    {
    }
}
\define('WC_MIN_MAX_QUANTITIES', '5.1.0');