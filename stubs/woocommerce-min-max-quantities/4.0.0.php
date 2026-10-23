<?php
/**
 * Generated stub declarations for woocommerce-min-max-quantities 4.0.0.
 * @see https://github.com/woocommerce/php-stubs
 */

/**
 * Filters the store public API.
 *
 * @version 2.5.0
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
     * @param  WC_Order  $order
     * @return array
     */
    public static function validate_draft_order($order)
    {
    }
}
class WC_Min_Max_Quantities_Addons
{
    /**
     * Checks if checkout page is on set multiple shipping addresses
     *
     * @access public
     * @since 2.3.15
     * @version 2.3.15
     * @return
     */
    public function is_multiple_shipping_address_page()
    {
    }
}
/**
 * WC_Min_Max_Quantities_Admin class.
 */
class WC_Min_Max_Quantities_Admin
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * add admin settings
     *
     * @access public
     * @since 2.3.0
     * @return array $settings
     */
    public function add_settings($settings)
    {
    }
    /**
     * admin_settings function.
     *
     * @access public
     * @return void
     */
    function admin_settings()
    {
    }
    /**
     * save_admin_settings function.
     *
     * @access public
     * @return void
     */
    function save_admin_settings()
    {
    }
    /**
     * Admin writepanel scripts.
     */
    function admin_scripts()
    {
    }
    /**
     * write_panel function.
     *
     * @access public
     * @return void
     */
    function write_panel()
    {
    }
    /**
     * write_panel_save variations.
     *
     * @access public
     * @param mixed $post_id
     * @return void
     */
    public function save_variation_settings($variation_id, $i)
    {
    }
    /**
     * write_panel_save function.
     *
     * @access public
     * @param mixed $post_id
     * @return void
     */
    function write_panel_save($post_id)
    {
    }
    /**
     * variation_options function.
     *
     * @access public
     * @return void
     */
    function variation_options($loop, $variation_data, $variation)
    {
    }
    /**
     * variation_panel function.
     *
     * @access public
     * @param mixed $loop
     * @param mixed $variation_data
     * @return void
     */
    function variation_panel($loop, $variation_data, $variation)
    {
    }
    /**
     * Category thumbnail fields.
     *
     * @access public
     * @return void
     */
    function add_category_fields()
    {
    }
    /**
     * Edit category thumbnail field.
     *
     * @access public
     * @param mixed $term Term (category) being edited
     * @param mixed $taxonomy Taxonomy of the term being edited
     * @return void
     */
    function edit_category_fields($term, $taxonomy)
    {
    }
    /**
     * Validates category Group of value when creating a new category.
     *
     * @param string|WP_Error $term     The term name to add, or a WP_Error object if there's an error.
     * @param string          $taxonomy Taxonomy slug.
     * @return string|WP_Error
     */
    function validate_category_group_of($term, $taxonomy)
    {
    }
    /**
     * woocommerce_category_fields_save function.
     *
     * @access public
     * @param mixed $term_id Term ID being saved
     * @param mixed $tt_id
     * @param mixed $taxonomy Taxonomy of the term being saved
     * @return void
     */
    function category_fields_save($term_id, $tt_id, $taxonomy)
    {
    }
    /**
     * product_cat_columns function.
     *
     * @access public
     * @param mixed $columns
     * @return void
     */
    function product_cat_columns($columns)
    {
    }
    /**
     * product_cat_column function.
     *
     * @access public
     * @param mixed $columns
     * @param mixed $column
     * @param mixed $id
     * @return void
     */
    function product_cat_column($columns, $column, $id)
    {
    }
    /**
     * Backwards compatibility: Add a notice if Minimum/Maximum quantities are not compatible with the "Group of" option.
     */
    function maybe_add_group_of_notice()
    {
    }
    /**
     * Prints warning messages in the admin area.
     *
     * @param string $content
     * @param string $type
     * @return void
     */
    function output_notice($content, $type)
    {
    }
}
/**
 * Functions for WC core back-compatibility.
 *
 * @class    WC_MMQ_Core_Compatibility
 * @version  2.5.0
 */
class WC_MMQ_Core_Compatibility
{
    /**
     * Current REST request.
     *
     * @var WP_REST_Request
     */
    private static $request;
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
     * Saves the current rest request.
     *
     * @since  6.15.0
     *
     * @param  mixed            $result
     * @param  WP_REST_Server   $server
     * @param  WP_REST_Request  $request
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
     * @param  string  $route
     * @return boolean
     */
    public static function is_store_api_request($route = '')
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
    public $min_wc_version = '3.9.0';
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
     * @var int
     */
    public $minimum_order_value;
    /**
     * Maximum order value.
     *
     * @var int
     */
    public $maximum_order_value;
    /**
     * List of excluded product titles.
     *
     * @var array
     */
    public $excludes = array();
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
     * Load scripts.
     */
    public function load_scripts()
    {
    }
    /**
     * Enqueue compatibility with Cart/Checkout Blocks.
     */
    public function enqueue_blocks_support()
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
     * @param  int  $min_quantity
     * @param  int  $group_of_quantity
     *
     * @return int
     */
    public static function adjust_min_quantity($min_quantity, $group_of_quantity)
    {
    }
    /**
     * Filter Maximum Quantity based on "Group of" option on runtime.
     *
     * @param  int  $max_quantity
     * @param  int  $group_of_quantity
     * @param  int  $min_quantity
     *
     * @return int
     */
    public static function adjust_max_quantity($max_quantity, $group_of_quantity, $min_quantity = 0)
    {
    }
}
\define('WC_MIN_MAX_QUANTITIES', '4.0.0');