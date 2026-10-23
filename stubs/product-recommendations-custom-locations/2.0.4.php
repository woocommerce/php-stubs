<?php
/**
 * Generated stub declarations for product-recommendations-custom-locations 2.0.4.
 * @see https://github.com/woocommerce/php-stubs
 */

/**
 * Setup PRL menus in WP admin.
 *
 * @version x.x.x
 */
class WC_PRL_CL_Admin_Menus
{
    /**
     * Setup.
     */
    public static function init()
    {
    }
    /**
     * Admin hooks.
     */
    public static function add_hooks()
    {
    }
    /**
     * Connect pages with navigation bar.
     *
     * @return void
     */
    public static function wc_admin_connect_gc_pages()
    {
    }
    /**
     * Renders tabs on our custom post types pages.
     *
     * @internal
     */
    public static function add_admin_tabs($tabs)
    {
    }
    /**
     * Returns the current admin tab.
     *
     * @param  string  $current_tab
     * @return string
     */
    public static function get_current_tab($current_tab)
    {
    }
}
/**
 * Admin Class.
 *
 * Loads admin scripts, includes admin classes and adds admin hooks.
 *
 * @class    WC_PRL_CL_Admin
 * @version  2.0.1
 */
class WC_PRL_CL_Admin
{
    /**
     * Setup Admin class.
     */
    public static function init()
    {
    }
    /**
     * Admin init.
     */
    public static function admin_init()
    {
    }
    /**
     * Print footer templates in custom location CPT.
     */
    public static function add_cpt_location_column($output, $location, $item)
    {
    }
    public static function maybe_add_cpt_performance_location_data($location_data, $hash)
    {
    }
    /**
     * Delete all deployments when deleting a custom location.
     */
    public static function before_delete_location($post_id, $post)
    {
    }
    /**
     * Handle saving a custom location.
     */
    public static function before_save_location($post_id, $post)
    {
    }
    /**
     * Print footer templates in custom location CPT.
     */
    public static function print_conditions_field_scripts()
    {
    }
    /**
     * Inclusions.
     */
    protected static function includes()
    {
    }
    /**
     * Add meta-boxes.
     */
    public static function init_meta_boxes($metaboxes)
    {
    }
    /**
     * Admin scripts.
     */
    public static function admin_resources()
    {
    }
}
/**
 * Modifies the custom's post type list table.
 *
 * @class    WC_PRL_CL_Admin_List_Table_Locations
 * @version  1.0.0
 */
class WC_PRL_CL_Admin_List_Table_Locations
{
    /**
     * Post type.
     *
     * @var string
     */
    private static $list_table_type = 'prl_hook';
    /**
     * Object being shown on the row.
     *
     * @var object|null
     */
    private static $location = \null;
    /**
     * Hook in.
     */
    public static function init()
    {
    }
    /**
     * Remove Quick Edit action.
     *
     * @param  array   $actions
     * @param  WP_Post $post
     * @return array
     */
    public static function disable_quick_edit($actions, $post)
    {
    }
    /**
     * Remove Bulk actions.
     *
     * @param  array $actions
     * @return array
     */
    public static function disable_bulk_actions($actions)
    {
    }
    /**
     * Setup custom table columns.
     *
     * @param  array $columns
     * @return array
     */
    public static function custom_columns($columns)
    {
    }
    /**
     * Define sortable table columns.
     *
     * @param  array $columns
     * @return array
     */
    public static function sortable_columns($columns)
    {
    }
    /**
     * Pre-fetch any data for the row each column has access to it.
     *
     * @param int $post_id
     */
    private static function prepare_row_data($post_id)
    {
    }
    /**
     * Display custom column content.
     *
     * @param  string $column
     * @param  int    $post_id
     * @return void
     */
    public static function render_columns($column, $post_id)
    {
    }
    /**
     * Render column: deployments.
     */
    public static function render_deployments_column()
    {
    }
    /**
     * Render column: wc_actions.
     */
    public static function render_wc_actions_column()
    {
    }
}
/**
 * Engine details meta-box.
 *
 * @class    WC_PRL_CL_Meta_Box_Location_Configuration
 * @version  1.0.0
 */
class WC_PRL_CL_Meta_Box_Location_Configuration extends \WC_PRL_Meta_Box
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Returns the meta box title.
     *
     * @return string
     */
    public function get_title()
    {
    }
    /**
     * Displays the engine details meta box.
     *
     * @param WP_Post $post
     */
    public function output(\WP_Post $post)
    {
    }
    /**
     * Handles the request data.
     *
     * @param int $post_id
     * @param WP_Post $post
     */
    public function update($post_id, $post)
    {
    }
}
/**
 * Engine details meta-box.
 *
 * @class    WC_PRL_CL_Meta_Box_Shortcode
 * @version  1.0.0
 */
class WC_PRL_CL_Meta_Box_Shortcode extends \WC_PRL_Meta_Box
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Returns the meta box title.
     *
     * @return string
     */
    public function get_title()
    {
    }
    /**
     * Displays the engine details meta box.
     *
     * @param WP_Post $post
     */
    public function output(\WP_Post $post)
    {
    }
}
/**
 * Locations that are used only in cart context.
 *
 * @class    WC_PRL_CL_Location_Shortcode
 * @version  1.0.0
 */
class WC_PRL_CL_Location_Shortcode extends \WC_PRL_Location
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Check if the current location page is active.
     *
     * @return boolean
     */
    public function is_active()
    {
    }
    /**
     * Setup all supported hooks based on the location id.
     *
     * @return void
     */
    protected function setup_hooks()
    {
    }
}
/**
 * Locations Collection class.
 *
 * @class    WC_PRL_CL_Locations
 * @version  1.0.0
 */
class WC_PRL_CL_Locations
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Filters all locations in `view` context.
     *
     * @param array $locations
     */
    public function get_locations($locations)
    {
    }
    /**
     * Filters all hooks for a given deployment.
     *
     * @param array $locations
     */
    public function get_hooks_for_deployment($hooks)
    {
    }
    /**
     * Filters all hooks for a given deployment.
     *
     * @param WC_PRL_Location $location
     * @param string          $hook
     */
    public function get_location_by_hook($location, $hook)
    {
    }
}
/**
 * Product Recommendations Post Types Class.
 *
 * Registers custom post types and taxonomies.
 *
 * @class    WC_PRL_CL_Post_Types
 * @version  2.0.2
 */
class WC_PRL_CL_Post_Types
{
    /**
     * Hook in methods.
     */
    public static function init()
    {
    }
    /**
     * Remove "New Location" item from Admin bar
     */
    public static function admin_bar_menu($admin_bar)
    {
    }
    /**
     * Register post types.
     */
    public static function register_post_types()
    {
    }
    /**
     * Boarding HTML when no engines.
     */
    public static function no_locations_boarding()
    {
    }
    /**
     * Specify custom action messages.
     *
     * @param  array $messages Existing post update messages.
     * @return array
     */
    public static function post_updated_messages($messages)
    {
    }
    /**
     * Specify custom bulk actions messages for different post types.
     *
     * @param  array $bulk_messages Array of messages.
     * @param  array $bulk_counts Array of how many objects were updated.
     * @return array
     */
    public static function bulk_post_updated_messages($bulk_messages, $bulk_counts)
    {
    }
}
/**
 * Main plugin class.
 *
 * @class    WC_Product_Recommendations_Custom_Locations
 * @version  2.0.4
 */
class WC_Product_Recommendations_Custom_Locations
{
    /**
     * Plugin version.
     *
     * @var string
     */
    private $version = '2.0.4';
    /**
     * Min required PRL version.
     *
     * @var string
     */
    private $prl_min_version = '4.0';
    /**
     * The single instance of the class.
     *
     * @var WC_Product_Recommendations_Custom_Locations
     */
    protected static $_instance = \null;
    /**
     * Main WC_Product_Recommendations_Custom_Locations instance. Ensures only one instance is loaded or can be loaded - @see 'WC_PRL_CL()'.
     *
     * @static
     * @return  WC_Product_Recommendations_Custom_Locations
     */
    public static function instance()
    {
    }
    /**
     * Cloning is forbidden.
     */
    public function __clone()
    {
    }
    /**
     * Unserializing instances of this class is forbidden.
     */
    public function __wakeup()
    {
    }
    /**
     * Make stuff.
     */
    protected function __construct()
    {
    }
    /**
     * Plugin URL getter.
     *
     * @return string
     */
    public function get_plugin_url()
    {
    }
    /**
     * Plugin path getter.
     *
     * @return string
     */
    public function get_plugin_path()
    {
    }
    /**
     * Plugin base path name getter.
     *
     * @return string
     */
    public function get_plugin_basename()
    {
    }
    /**
     * Plugin version getter.
     *
     * @param  boolean  $base
     * @param  string   $version
     * @return string
     */
    public function get_plugin_version($base = \false, $version = '')
    {
    }
    /**
     * Fire in the hole!
     */
    public function initialize_plugin()
    {
    }
    /**
     * Constants.
     */
    public function define_constants()
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
     * Define constants if not present.
     *
     * @return boolean
     */
    protected function maybe_define_constant($name, $value)
    {
    }
    /**
     * Includes.
     */
    public function includes()
    {
    }
    /**
     * Admin & AJAX functions and hooks.
     */
    public function admin_includes()
    {
    }
    /**
     * Init a new shortcode global Location.
     */
    public function add_location_object($locations)
    {
    }
    /**
     * Add PRL CL screen ids.
     */
    public function add_screen_ids($screens)
    {
    }
    /**
     * PRL dependency check notice.
     */
    public function dependencies_notice()
    {
    }
}
/**
 * Returns the main instance of WC_Product_Recommendations_Custom_Locations to prevent the need to use globals.
 *
 * @return  WC_Product_Recommendations_Custom_Locations
 */
function WC_PRL_CL()
{
}