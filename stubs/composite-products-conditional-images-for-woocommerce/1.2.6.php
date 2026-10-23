<?php
/**
 * Generated stub declarations for composite-products-conditional-images-for-woocommerce 1.2.6.
 * @see https://github.com/woocommerce/php-stubs
 */

/**
 * Main plugin class.
 *
 * @class    WC_CP_Conditional_Images
 * @version  1.2.6
 */
class WC_CP_Conditional_Images
{
    /**
     * Plugin version.
     *
     * @var string
     */
    public static $version = '1.2.6';
    /**
     * Min required CP version.
     *
     * @var string
     */
    public static $req_cp_version = '5.1';
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
    /**
     * Add support for creating 'overlay_image' scenario actions via the REST API.
     *
     * @since  1.1.1
     * @param  array
     */
    public static function add_rest_api_scenario_action($args)
    {
    }
}