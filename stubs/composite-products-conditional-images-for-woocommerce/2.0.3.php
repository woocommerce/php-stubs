<?php
/**
 * Generated stub declarations for composite-products-conditional-images-for-woocommerce 2.0.3.
 * @see https://github.com/woocommerce/php-stubs
 */

/**
 * Main plugin class.
 *
 * @class    WC_CP_Conditional_Images
 * @version  2.0.3
 */
class WC_CP_Conditional_Images
{
    /**
     * Plugin version.
     *
     * @var string
     */
    public static $version = '2.0.3';
    /**
     * Min required CP version.
     *
     * @var string
     */
    public static $req_cp_version = '10.0';
    /**
     * CP URL.
     *
     * @var string
     */
    private static $cp_url = 'https://woocommerce.com/products/composite-products/';
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
     * CP version check notice.
     */
    public static function cp_version_check_notice()
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
     * Front-end script.
     *
     * @param array $dependencies
     */
    public static function frontend_script($dependencies)
    {
    }
    /**
     * Dequeue zoom script.
     */
    public static function dequeue_zoom_script($dependencies)
    {
    }
    /**
     * Admin scripts and styles.
     *
     * @return void
     */
    public static function admin_scripts()
    {
    }
    /**
     * Save qty override settings in scenarios
     *
     * @param  array  $scenario_meta
     * @param  array  $scenario_post_data
     * @param  string $scenario_id
     * @param  array  $composite_meta
     * @param  string $composite_id
     * @return array
     */
    public static function process_scenario_data($scenario_meta, $scenario_post_data, $scenario_id, $composite_meta, $composite_id)
    {
    }
    /**
     * Add qty data in scenarios
     *
     * @param  array  $scenario_data
     * @param  array  $component_options
     * @param  string $composite
     * @return array
     */
    public static function scenario_data($scenario_data, $component_options, $composite)
    {
    }
    /**
     * Add 'Overlay Image' action in Scenarios.
     *
     * @return void
     */
    public static function scenario_admin_actions_html($id, $scenario_data, $composite_data, $product_id)
    {
    }
}