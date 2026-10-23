<?php
/**
 * Generated stub declarations for product-bundles-bulk-discounts-for-woocommerce 2.0.1.
 * @see https://github.com/woocommerce/all-plugins/tree/stubs
 */

class WC_PB_Bulk_Discounts
{
    /**
     * Plugin version.
     *
     * @var string
     */
    public static $version = '2.0.1';
    /**
     * Min required PB version.
     *
     * @var string
     */
    public static $req_pb_version = '8.0';
    /**
     * PB URL.
     *
     * @var string
     */
    private static $pb_url = 'https://woocommerce.com/products/product-bundles/';
    /**
     * Discount data array for access via filter callbacks -- internal use only.
     *
     * @var array
     */
    public static $discount_data_array = array();
    /**
     * Total min Qty for access via filter callbacks -- internal use only.
     *
     * @var array
     */
    public static $total_min_quantity = 0;
    /**
     * Plugin URL.
     *
     * @return string
     */
    public static function plugin_url()
    {
    }
    /**
     * Plugin path.
     *
     * @return string
     */
    public static function plugin_path()
    {
    }
    /**
     * Fire in the hole!
     */
    public static function init()
    {
    }
    /**
     * Hooks.
     */
    public static function load_plugin()
    {
    }
    /**
     * Load textdomain.
     *
     * @return void
     */
    public static function localize_plugin()
    {
    }
    /**
     * Declare HPOS( Custom Order tables) compatibility.
     *
     */
    public static function declare_hpos_compatibility()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Application layer.
    |--------------------------------------------------------------------------
    */
    /**
     * Calculates a discounted price based on quantity and a discount data array.
     *
     * @param  integer  $total_quantity
     * @param  array    $discount_data_array
     * @return mixed
     */
    public static function get_discount($total_quantity, $discount_data_array)
    {
    }
    /**
     * Calculates a discounted price based on quantity and a discount data array.
     *
     * @param  mixed  $price
     * @param  float  $discount
     * @return mixed
     */
    public static function get_discounted_price($price, $discount)
    {
    }
    /**
     * Decodes a discount data array to a human-readable format.
     *
     * @param  array   $discount_data_array
     * @return string  $discount_data_string
     */
    private static function decode($discount_data_array)
    {
    }
    /**
     * Encodes $input_data string to array by separating quantity_min, quantity_max and discount.
     *
     * @param  string  $input_data
     * @return array   $parsed_discount_data
     */
    private static function encode($input_data)
    {
    }
    /**
     * Whether to apply discounts to the base price.
     *
     * @param  array    $bundle
     * @return boolean
     */
    public static function apply_discount_to_base_price($bundle)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Admin and Metaboxes.
    |--------------------------------------------------------------------------
    */
    /**
     * PB version check notice.
     */
    public static function version_notice()
    {
    }
    /**
     * Add bundle quantity discount option.
     *
     * @param  WC_Product  $product_bundle_object
     * @return void
     */
    public static function product_bundles_bulk_discount($product_bundle_object)
    {
    }
    /**
     * Save meta.
     *
     * @param  WC_Product  $product
     * @return void
     */
    public static function save_meta($product)
    {
    }
    /**
     * Export bulk discounts as formatted meta data.
     *
     * @param  string        $meta_value
     * @param  WC_Meta_Data  $meta
     * @return string        $meta_value
     */
    public static function export_bulk_discounts($meta_value, $meta)
    {
    }
    /**
     * Parse and import bulk discounts.
     *
     * @param  array  $parsed_data
     * @return array  $parsed_data
     */
    public static function import_bulk_discounts($parsed_data)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Cart.
    |--------------------------------------------------------------------------
    */
    /**
     * Applies discount on bundled cart items based on overall cart quantity.
     *
     * @param  array  $cart_item
     * @param  array  $bundle
     * @return array  $cart_item
     */
    public static function bundled_cart_item_discount($cart_item, $bundle)
    {
    }
    /**
     * Applies discount on bundle container cart item based on overall cart quantity.
     *
     * @param  array  $cart_item
     * @param  array  $bundle
     * @return array  $cart_item
     */
    public static function bundle_container_cart_item_discount($cart_item, $bundle)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Products / Catalog.
    |--------------------------------------------------------------------------
    */
    /**
     * Returns discounted price based on default min quantities.
     *
     * @param  string  $price
     * @param  object  $product
     * @return string  $price
     */
    public static function bundle_get_discounted_price_html($price, $product)
    {
    }
    /**
     * Add filters to modify products when contained in Bundles.
     *
     * @return void
     */
    public static function add_filters()
    {
    }
    /**
     * Remove filters - @see 'add_filters'.
     *
     * @return void
     */
    public static function remove_filters()
    {
    }
    /**
     * Aggregate bulk discount into bundled item discount.
     *
     * @since  1.2.0
     *
     * @param  float            $discount
     * @param  WC_Bundled_Item  $bundled_item
     * @param  string           $context
     * @return float
     */
    public static function filter_bundled_item_discount($discount, $bundled_item, $context)
    {
    }
    /**
     * Modify bundle prices hash to go around the runtime cache.
     *
     * @param   array              $hash
     * @param   WC_Product_Bundle  $bundle
     * @return array
     */
    public static function filter_bundle_prices_hash($hash, $bundle)
    {
    }
    /**
     * Computes and returns discounted price.
     *
     * @param  mixed   $price
     * @param  object  $product
     * @return mixed
     */
    public static function filter_price($price, $product)
    {
    }
    /**
     * Filter get_price() calls to include container discounts.
     *
     * @since  1.2.0
     *
     * @param  double      $price
     * @param  WC_Product  $product
     * @param  string      $context
     * @return double
     */
    public static function filter_get_price_cart($price, $product, $context = '')
    {
    }
    /**
     * Calls filter to add a suffix to price_html if some discount applies.
     *
     * @param  array   $bundled_item
     * @return void
     */
    public static function add_bundle_discount_price_html_suffix($bundled_item)
    {
    }
    /**
     * Adds suffix to price_html.
     *
     * @param  string  $price_html
     * @param  object  $product
     * @return string  $price_html
     */
    public static function add_discount_price_html_suffix($price_html, $product)
    {
    }
    /**
     * Removes filter.
     *
     * @param  array  $bundled_item
     * @return void
     */
    public static function remove_bundle_discount_price_html_suffix($bundled_item)
    {
    }
    /**
     * Front-end script.
     *
     * @param  array  $dependencies
     */
    public static function script()
    {
    }
    /**
     * Add the Bulk Discounts script as a dependency to the main Bundle/Composite script.
     *
     * @param array $dependencies
     *
     */
    public static function add_script_dependency($dependencies)
    {
    }
    /**
     * Update settings to add parameters.
     *
     * @param  array  $price_data
     * @param  array  $bundle
     * @return array
     */
    public static function add_discount_data($price_data, $bundle)
    {
    }
    /**
     * Update front-end parameters to add 'After discount'.
     *
     * @param  array  $parameter_array
     * @return array
     */
    public static function add_front_end_params($parameter_array)
    {
    }
}