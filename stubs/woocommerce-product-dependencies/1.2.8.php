<?php
/**
 * Generated stub declarations for woocommerce-product-dependencies 1.2.8.
 * @see https://github.com/woocommerce/all-plugins/tree/stubs
 */

/**
 * Functions for WC core back-compatibility.
 *
 * @class  WC_PD_Core_Compatibility
 */
class WC_PD_Core_Compatibility
{
    /**
     * Helper method to get the version of the currently installed WooCommerce.
     *
     * @return string
     */
    private static function get_wc_version()
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is 2.7 or greater.
     *
     * @return boolean
     */
    public static function is_wc_version_gte_2_7()
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is 2.6 or greater.
     *
     * @return boolean
     */
    public static function is_wc_version_gte_2_6()
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is 2.5 or greater.
     *
     * @return boolean
     */
    public static function is_wc_version_gte_2_5()
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is 2.4 or greater.
     *
     * @return boolean
     */
    public static function is_wc_version_gte_2_4()
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is 2.3 or greater.
     *
     * @return boolean
     */
    public static function is_wc_version_gte_2_3()
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is 2.2 or greater.
     *
     * @return boolean
     */
    public static function is_wc_version_gte_2_2()
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is less than 2.2.
     *
     * @return boolean
     */
    public static function is_wc_version_lt_2_2()
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is greater than $version.
     *
     * @param  string  $version the version to compare
     * @return boolean true if the installed version of WooCommerce is > $version
     */
    public static function is_wc_version_gt($version)
    {
    }
    /**
     * Get the WC Product instance for a given product ID or post.
     *
     * get_product() is soft-deprecated in WC 2.2
     *
     * @param  bool|int|string|WP_Post  $the_product
     * @param  array                    $args
     * @return WC_Product
     */
    public static function wc_get_product($the_product = \false, $args = array())
    {
    }
    /**
     * Display a WooCommerce help tip.
     *
     * @param  string  $tip
     * @return string
     */
    public static function wc_help_tip($tip)
    {
    }
    /**
     * Back-compat wrapper for 'get_parent_id'.
     *
     * @param  WC_Product  $product
     * @return mixed
     */
    public static function get_parent_id($product)
    {
    }
    /**
     * Back-compat wrapper for 'get_id'.
     *
     * @param  WC_Product  $product
     * @return mixed
     */
    public static function get_id($product)
    {
    }
}
/**
 * Helper functions.
 *
 * @class    WC_PD_Helpers
 * @version  1.2.0
 */
class WC_PD_Helpers
{
    /**
     * Expression of part to merge.
     *
     * @since  1.2.0
     *
     * @param  int     $loop
     * @param  int     $count
     * @param  string  $relationship
     * @return string
     */
    private static function get_part_to_merge_expression($loop, $count, $relationship)
    {
    }
    /**
     * Merges product titles.
     *
     * @param  array   $products
     * @param  string  $relationship
     * @return string
     */
    public static function merge_product_titles($products, $relationship)
    {
    }
    /**
     * Merges category titles.
     *
     * @since  1.2.0
     *
     * @param  array   $category_ids
     * @param  string  $relationship
     * @return string
     */
    public static function merge_category_titles($category_ids, $relationship)
    {
    }
    /**
     * Return a formatted product title.
     *
     * @param  WC_Product|int  $product
     * @param  string          $title
     * @return string
     */
    public static function get_product_title($product, $title = '')
    {
    }
    /**
     * Format a product title.
     *
     * @param  string  $title
     * @param  string  $identifier
     * @param  string  $meta
     * @param  string  $paren
     * @return string
     */
    public static function format_product_title($title, $identifier = '', $meta = '', $paren = \false)
    {
    }
}
/**
 * Plugin Name: WooCommerce Product Dependencies
 * Plugin URI: https://somewherewarm.com/
 * Description: Restrict access to WooCommerce products, depending on the ownership and/or purchase of other, required products.
 * Version: 1.2.8
 * Author: SomewhereWarm
 * Author URI: https://somewherewarm.com/
 *
 * Text Domain: woocommerce-product-dependencies
 * Domain Path: /languages/
 *
 * Requires at least: 3.8
 * Tested up to: 6.3
 *
 * WC requires at least: 2.2
 * WC tested up to: 8.0
 *
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */
class WC_Product_Dependencies
{
    /**
     * The single instance of the class.
     * @var WC_Product_Dependencies
     *
     * @since 1.1.0
     */
    protected static $_instance = \null;
    /**
     * Required WC version.
     * @var string
     */
    private $required = '2.2';
    /**
     * Product Dependencies version.
     */
    public $version = '1.2.8';
    /**
     * 'Ownership' dependency type code.
     */
    const DEPENDENCY_TYPE_OWNERSHIP = 1;
    /**
     * 'Purchase' dependency type code.
     */
    const DEPENDENCY_TYPE_PURCHASE = 2;
    /**
     * 'Either' dependency type code.
     */
    const DEPENDENCY_TYPE_EITHER = 3;
    /**
     * Main WC_Product_Dependencies instance.
     *
     * Ensures only one instance of WC_Product_Dependencies is loaded or can be loaded - @see 'WC_Product_Dependencies()'.
     *
     * @since  1.1.0
     *
     * @static
     * @return WC_Product_Dependencies - Main instance
     */
    public static function instance()
    {
    }
    /**
     * Cloning is forbidden.
     *
     * @since 1.1.0
     */
    public function __clone()
    {
    }
    /**
     * Unserializing instances of this class is forbidden.
     *
     * @since 1.1.0
     */
    public function __wakeup()
    {
    }
    /**
     * Fire in the hole!
     */
    public function __construct()
    {
    }
    /**
     * The plugin url
     * @return string
     */
    public function plugin_url()
    {
    }
    /**
     * Initialize.
     *
     * @return void
     */
    public function plugins_loaded()
    {
    }
    /**
     * Init textdomain.
     *
     * @return void
     */
    public function init()
    {
    }
    /**
     * Declare HPOS( Custom Order tables) compatibility.
     *
     */
    public function declare_hpos_compatibility()
    {
    }
    /**
     * Include scripts.
     */
    public function dependencies_admin_scripts()
    {
    }
    /**
     * Validates a product when adding to cart.
     *
     * @param  boolean  $add
     * @param  int      $item_id
     * @param  int      $quantity
     * @return boolean
     */
    public function add_to_cart_validation($add, $item_id, $quantity)
    {
    }
    /**
     * Validates cart contents.
     */
    public function check_cart_items()
    {
    }
    /**
     * Check conditions.
     *
     * @param  mixed  $item
     * @return boolean
     */
    public function evaluate_dependencies($item)
    {
    }
    /**
     * Dependency relationship:
     * - 'or':   Ownership/purchase of any product required.
     * - 'and':  Ownership/purhase of all products required.
     *
     * @param  WC_Product  $product
     * @return string
     */
    public function get_dependency_relationship($product)
    {
    }
    /**
     * Returns an array with all dependent product ids.
     *
     * @since  1.2.0
     *
     * @param  WC_Product  $product
     * @return array       $dependent_ids
     */
    public function get_tied_product_ids($product)
    {
    }
    /**
     * Returns an array with all saved category ids.
     *
     * @since  1.2.0
     *
     * @param  WC_Product  $product
     * @return array       $category_ids
     */
    public function get_tied_category_ids($product)
    {
    }
    /**
     * Returns the product dependency selection type.
     *
     * @since  1.2.0
     *
     * @param  WC_Product  $product
     * @return string      $selection_type
     */
    public function get_dependency_selection_type($product)
    {
    }
    /**
     * Returns the custom dependency notice.
     *
     * @since  1.2.0
     *
     * @param  WC_Product  $product
     * @return string      $notice
     */
    public function get_dependency_notice($product)
    {
    }
    /**
     * Returns the product dependency type.
     *
     * @since  1.2.0
     *
     * @param  WC_Product  $product
     * @return string      $type
     */
    public function get_dependency_type($product)
    {
    }
    /**
     * Get all product IDs that belong to the specified categories.
     *
     * @param  array  $category_ids
     * @return array
     */
    private function get_product_ids_in_categories($category_ids)
    {
    }
    /**
     * Re-implementation of 'wc_customer_bought_product' with support for array input.
     *
     * @since  1.2.0
     *
     * @param  string  $customer_email
     * @param  int     $user_id
     * @param  array   $product_ids
     * @return array
     */
    private function customer_bought_products($customer_email, $user_id, $product_ids)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Admin Filters.
    |--------------------------------------------------------------------------
    */
    /**
     * Add Product Data tab.
     *
     * @return void
     */
    public function dependencies_product_data_panel_tab()
    {
    }
    /**
     * Add the "Product Dependencies" panel tab.
     *
     * @param  array  $tabs
     * @return array
     */
    public function dependencies_product_data_tab($tabs)
    {
    }
    /**
     * Add Product Data tab section.
     *
     * @return void
     */
    public function dependencies_product_data_panel()
    {
    }
    /**
     * Save dependencies data. WC >= 2.7.
     *
     * @param  WC_Product  $product
     * @return void
     */
    public function process_product_data($product)
    {
    }
    /**
     * Save dependencies meta. WC <= 2.6.
     *
     * @param  int      $post_id
     * @param  WC_Post  $post
     * @return void
     */
    public function process_meta($post_id, $post)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Deprecated methods.
    |--------------------------------------------------------------------------
    */
    /**
     * Check conditions.
     *
     * @deprecated  1.1.0
     *
     * @param  int  $item_id
     * @return boolean
     */
    public function woo_tied_evaluate_access($id)
    {
    }
}
/**
 * Returns the main instance of WC_Product_Dependencies to prevent the need to use globals.
 *
 * @since  1.1.0
 * @return WC_Product_Dependencies
 */
function WC_Product_Dependencies()
{
}