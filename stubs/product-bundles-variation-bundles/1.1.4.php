<?php
/**
 * Generated stub declarations for product-bundles-variation-bundles 1.1.4.
 * @see https://github.com/woocommerce/all-plugins/tree/stubs
 */

class WC_PB_Variable_Bundles
{
    /**
     * Plugin version.
     *
     * @var string
     */
    public static $version = '1.1.4';
    /**
     * Min required PB version.
     *
     * @var string
     */
    public static $req_pb_version = '5.5';
    /**
     * Min required WC version.
     *
     * @var string
     */
    public static $req_wc_version = '3.8';
    /**
     * PB URL.
     *
     * @var string
     */
    private static $pb_url = 'https://woocommerce.com/products/product-bundles/';
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
     * Enqueue styles.
     *
     * @return void
     */
    public static function enqueue_admin_styles()
    {
    }
    /**
     * Enqueue scripts.
     *
     * @return void
     */
    public static function enqueue_admin_scripts()
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
    /**
     * Add Variation Bundle field to each variation.
     *
     * @param string  $loop
     * @param array   $variation_data
     * @param WP_Post $variation
     *
     */
    public static function product_variations_options($loop, $variation_data, $variation)
    {
    }
    /**
     * PB version check notice.
     */
    public static function pb_admin_notice()
    {
    }
    /**
     * WC version check notice.
     */
    public static function wc_admin_notice()
    {
    }
    /**
     * Ajax search for bundled variations.
     */
    public static function ajax_search_variable_bundles()
    {
    }
    /**
     * Include only static Product Bundles in Variation Bundle results.
     *
     * @param  array  $search_results
     * @return array
     */
    public static function filter_ajax_search_results($search_results)
    {
    }
    /**
     * Save extra meta info for variations.
     *
     * @param WC_Product_Variation  $variation_id
     * @param int                   $index
     */
    public static function process_variable_bundles($variation, $index)
    {
    }
    /**
     * Inherit from mapped bundle.
     *
     * @since  1.1.0
     *
     * @param  WC_Product  $product
     * @return void
     */
    public static function before_product_object_save($product)
    {
    }
    /**
     * Inherit from mapped bundle.
     *
     * @since  1.1.0
     *
     * @param  bool        $sku
     * @param  WC_Product  $variation
     * @return void
     */
    public static function variation_get_sku($sku, $variation)
    {
    }
    /**
     * Inherit from mapped bundle.
     *
     * @since  1.1.0
     *
     * @param  bool        $manage_stock
     * @param  WC_Product  $variation
     * @return void
     */
    public static function variation_get_manage_stock($manage_stock, $variation)
    {
    }
    /**
     * Inherit from mapped bundle.
     *
     * @since  1.1.0
     *
     * @param  bool        $is_virtual
     * @param  WC_Product  $variation
     * @return void
     */
    public static function variation_get_virtual($is_virtual, $variation)
    {
    }
    /**
     * Inherit from mapped bundle.
     *
     * @since  1.1.0
     *
     * @param  string      $stock_quantity
     * @param  WC_Product  $variation
     * @return void
     */
    public static function variation_get_stock_quantity($stock_quantity, $variation)
    {
    }
    /**
     * Inherit from mapped bundle.
     *
     * @since  1.1.0
     *
     * @param  string      $stock_status
     * @param  WC_Product  $variation
     * @return void
     */
    public static function variation_get_stock_status($stock_status, $variation)
    {
    }
    /**
     * Inherit from mapped bundle.
     *
     * @since  1.1.0
     *
     * @param  string      $weight
     * @param  WC_Product  $variation
     * @return void
     */
    public static function variation_get_weight($weight, $variation)
    {
    }
    /**
     * Inherit from mapped bundle.
     *
     * @since  1.1.0
     *
     * @param  string      $width
     * @param  WC_Product  $variation
     * @return void
     */
    public static function variation_get_width($width, $variation)
    {
    }
    /**
     * Inherit from mapped bundle.
     *
     * @since  1.1.0
     *
     * @param  string      $length
     * @param  WC_Product  $variation
     * @return void
     */
    public static function variation_get_length($length, $variation)
    {
    }
    /**
     * Inherit from mapped bundle.
     *
     * @since  1.1.0
     *
     * @param  string      $height
     * @param  WC_Product  $variation
     * @return void
     */
    public static function variation_get_height($height, $variation)
    {
    }
    /**
     * Inherit from mapped bundle.
     *
     * @since  1.1.0
     *
     * @param  string      $shipping_class_id
     * @param  WC_Product  $variation
     * @return void
     */
    public static function variation_get_shipping_class_id($shipping_class_id, $variation)
    {
    }
    /**
     * Inherit from mapped bundle.
     *
     * @since  1.1.0
     *
     * @param  string      $tax_class
     * @param  WC_Product  $variation
     * @return void
     */
    public static function variation_get_tax_class($tax_class, $variation)
    {
    }
    /**
     * Inherit from mapped bundle.
     *
     * @since  1.1.0
     *
     * @param  string      $price
     * @param  WC_Product  $variation
     * @return void
     */
    public static function variation_get_price($price, $variation)
    {
    }
    /**
     * Inherit from mapped bundle.
     *
     * @since  1.1.0
     *
     * @param  string      $regular_price
     * @param  WC_Product  $variation
     * @return void
     */
    public static function variation_get_regular_price($regular_price, $variation)
    {
    }
    /**
     * Inherit from mapped bundle.
     *
     * @since  1.1.0
     *
     * @param  string      $sale_price
     * @param  WC_Product  $variation
     * @return void
     */
    public static function variation_get_sale_price($sale_price, $variation)
    {
    }
    /**
     * Inherit prices from mapped bundles.
     *
     * @since  1.1.0
     *
     * @param  array       $prices
     * @param  WC_Product  $product
     * @return void
     */
    public static function variation_prices($prices_array, $product, $for_display)
    {
    }
    /**
     * Retrieve the bundle mapped to a variation.
     *
     * @since  1.1.0
     *
     * @param  WC_Product_Variation|int  $variation
     * @param  bool                      $use_cache
     * @return WC_Product_Bundle|false
     */
    public static function maybe_get_variation_bundle($variation, $use_cache = \true)
    {
    }
    /**
     * Add Product Bundle to the cart instead of variation.
     *
     * @param  int $add_to_cart_id
     * @return int
     */
    public static function add_bundle_to_cart($add_to_cart_id)
    {
    }
    /**
     * Store variation ID in cart item data.
     *
     * @param  array  $cart_item_data
     * @param  int    $product_id
     * @param  int    $variation_id
     * @return array
     */
    public static function store_variation_id($cart_item_data, $product_id, $variation_id)
    {
    }
    /**
     * Change Bundle's permalink to redirect back to the Variable Product page.
     *
     * @param  string  $html
     * @param  array   $cart_item
     * @param  string  $cart_item_key
     * @return string
     */
    public static function bundle_cart_item_permalink($html, $cart_item, $cart_item_key)
    {
    }
    /*
     * Compatibility and Integrations.
     *
     */
    /*
     * WooCommerce Importer.
     *
     */
    /**
     * Register the 'Variable Bundles' column in the importer.
     *
     * @param  array  $options
     * @return array  $options
     */
    public static function map_columns($options)
    {
    }
    /**
     * Add automatic mapping support for custom columns.
     *
     * @param  array  $columns
     * @return array  $columns
     */
    public static function add_columns_to_mapping_screen($columns)
    {
    }
    /**
     * Parse Variation Bundles data.
     *
     *
     * @param  array                    $parsed_data
     * @param  WC_Product_CSV_Importer  $importer
     * @return array
     */
    public static function parse_variation_bundles($parsed_data, $importer)
    {
    }
    /*
     * WooCommerce Exporter.
     *
     */
    /**
     * Add CSV columns for exporting Variation Bundles.
     *
     * @param  array  $columns
     * @return array  $columns
     */
    public static function add_columns($columns)
    {
    }
    /**
     * "Variation Bundles" field content.
     *
     *
     * @param  mixed       $value
     * @param  WC_Product  $product
     * @return mixed       $value
     */
    public static function export_variation_bundles($value, $product)
    {
    }
    /**
     * Returns the parent product object of the variation using cache
     *
     * @since  1.1.3
     *
     * @param  WC_Product  $variation
     * @return WC_Product
     */
    public static function get_variation_parent($variation)
    {
    }
}