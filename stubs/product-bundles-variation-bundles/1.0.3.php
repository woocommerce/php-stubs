<?php
/**
 * Generated stub declarations for product-bundles-variation-bundles 1.0.3.
 * @see https://github.com/woocommerce/all-plugins/tree/stubs
 */

class WC_PB_Variable_Bundles
{
    /**
     * Plugin version.
     *
     * @var string
     */
    public static $version = '1.0.3';
    /**
     * Min required PB version.
     *
     * @var string
     */
    public static $req_pb_version = '5.5';
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
     * @param int $variation_id
     * @param int $index
     */
    public static function process_variable_bundles($variation_id, $index)
    {
    }
    /**
     * Add Product Bundle to the cart instead of variation.
     *
     * @param int $add_to_cart_id
     * @return int
     */
    public static function add_bundle_to_cart($add_to_cart_id)
    {
    }
    /**
     * Store variation ID in cart item data.
     *
     * @param  array $cart_item_data
     * @param  int   $product_id
     * @param  int   $variation_id
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
}