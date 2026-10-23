<?php
/**
 * Generated stub declarations for woocommerce-composite-products 10.2.0.
 * @see https://github.com/woocommerce/php-stubs
 */

/**
 * Admin Reports Class for syncing the lookup table.
 *
 * @class    WC_CP_Admin_Analytics_Sync
 * @version  9.0.4
 */
class WC_CP_Admin_Analytics_Sync
{
    /**
     * Keeps track of which order ID is being processed.
     *
     * @var int
     */
    protected static $updating_order_id = \false;
    /**
     * The last item in an order is the one to trigger the aggregation process.
     *
     * @var int
     */
    protected static $trigger_order_item_id = \false;
    /**
     * Keeps track of which composited order items need to be aggregated into their container.
     *
     * @var int
     */
    protected static $composited_order_item_ids = array();
    /**
     * Setup Admin class.
     */
    public static function init()
    {
    }
    /**
     * Update order stats if triggered.
     */
    public static function handle_trigger_order_item_stats_update()
    {
    }
    /**
     * Number of orders per regeneration batch.
     *
     * @return int
     */
    protected static function get_batch_size()
    {
    }
    /**
     * Updates all order stats table rows that involve composite products.
     *
     * @return void
     */
    public static function queue_order_item_stats_update()
    {
    }
    /**
     * Schedules a batch of row regenerations for order stats.
     *
     * @param  int $batch
     * @param  int $batches
     * @return void
     */
    protected static function queue_order_item_stats_update_batch($batch, $batches)
    {
    }
    /**
     * Indicates whether an order stats regeneration has been attempted in the past.
     *
     * @return boolean
     */
    public static function is_order_item_stats_update_actioned()
    {
    }
    /**
     * Indicates whether an order stats regeneration is currently queued.
     *
     * @return boolean
     */
    public static function is_order_item_stats_update_queued()
    {
    }
    /**
     * Prepares the controller logic for updating order item stats data.
     *
     * @param  WC_Order $order
     * @return void
     */
    protected static function prepare_order_item_stats_update($order)
    {
    }
    /**
     * Updates the order item stats table for a single item.
     *
     * @return void
     */
    protected static function process_order_item_stats_update()
    {
    }
    /**
     * Resets shared variables in context.
     *
     * @param  int $batch
     * @param  int $batches
     * @return void
     */
    protected static function reset_runtime_variables()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Callbacks.
    |--------------------------------------------------------------------------
    */
    /**
     * Regenerates order stats for single batch of orders.
     *
     * @param  int $batch
     * @param  int $batches
     * @return void
     */
    public static function process_order_item_stats_update_batch($batch, $batches)
    {
    }
    /**
     * Updates the order item stats table for a single item.
     *
     * @param  int $order_item_id
     * @param  int $order_id
     * @return void
     */
    public static function update_order_item_stats($order_item_id, $order_id)
    {
    }
    /**
     * Clean composites data when an order is deleted.
     *
     * @param int $order_id Order ID.
     */
    public static function sync_on_order_delete($order_id)
    {
    }
    /**
     * Adds status tool to regenerate the order stats table.
     *
     * @param  array
     * @return array
     */
    public static function add_regenerate_order_item_stats_tool($tools)
    {
    }
}
/**
 * Composite Products WooCommerce Analytics.
 *
 * @version  10.0.0
 */
class WC_CP_Admin_Analytics
{
    /*
     * Init.
     */
    public static function init()
    {
    }
    /*
     * Setup Analytics.
     */
    public static function setup()
    {
    }
    /**
     * Includes.
     *
     * @TODO
     *
     * @return void
     */
    protected static function includes()
    {
    }
    /**
     * Add "Composite Products" as a Analytics submenu item.
     *
     * @param  array $report_pages  Report page menu items.
     * @return array
     */
    public static function add_report_menu_item($report_pages)
    {
    }
    /**
     * Register analytics JS.
     */
    public static function register_script()
    {
    }
    /**
     * Adds fields so that we can store user preferences for the columns to display on a report.
     *
     * @param array $user_data_fields User data fields.
     * @return array
     */
    public static function add_user_data_fields($user_data_fields)
    {
    }
    /**
     * Analytics includes and register REST controllers.
     *
     * @param  array $controllers
     * @return array
     */
    public static function add_rest_api_controllers($controllers)
    {
    }
    /**
     * Register Analytics data stores.
     *
     * @param  array $stores
     * @return array
     */
    public static function register_data_stores($stores)
    {
    }
    /**
     * Whether or not the new Analytics reports are enabled.
     *
     * @return bool
     */
    public static function is_enabled()
    {
    }
}
/**
 * WC_CP_REST_Reports_Composite_Products_Data_Store class.
 *
 * @version 8.3.0
 */
abstract class WC_CP_Analytics_Data_Store extends \Automattic\WooCommerce\Admin\API\Reports\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
{
    /**
     * Wrapper around DataStore::get_cached_data().
     *
     * @param string $cache_key Cache key.
     * @return mixed
     */
    protected function get_cached_data($cache_key)
    {
    }
    /**
     * Wrapper around DataStore::set_cached_data().
     *
     * @param string $cache_key Cache key.
     * @param mixed  $value     New value.
     * @return bool
     */
    protected function set_cached_data($cache_key, $value)
    {
    }
}
/**
 * WC_CP_Analytics_Revenue_Data_Store class.
 *
 * @version 8.3.0
 */
class WC_CP_Analytics_Revenue_Data_Store extends \WC_CP_Analytics_Data_Store
{
    /**
     * Table used to get the data.
     *
     * @var string
     */
    protected static $table_name = 'wc_order_composite_lookup';
    /**
     * Cache identifier.
     *
     * @var string
     */
    protected $cache_key = 'composites_revenue';
    /**
     * Mapping columns to data type to return correct response types.
     *
     * @var array
     */
    protected $column_types = array(
        'date_start' => 'strval',
        'date_end' => 'strval',
        'product_id' => 'intval',
        'items_sold' => 'intval',
        'composited_items_sold' => 'intval',
        'net_revenue' => 'floatval',
        'orders_count' => 'intval',
        // Extended attributes.
        'name' => 'strval',
        'price' => 'floatval',
        'image' => 'strval',
        'permalink' => 'strval',
        'sku' => 'strval',
    );
    /**
     * Extended product attributes to include in the data.
     *
     * @var array
     */
    protected $extended_attributes = array('name', 'price', 'image', 'permalink', 'sku');
    /**
     * Data store context used to pass to filters.
     *
     * @var string
     */
    protected $context = 'composites';
    /**
     * Assign report columns once full table name has been assigned.
     */
    protected function assign_report_columns()
    {
    }
    /*
     * Set up all the hooks for maintaining and populating table data.
     */
    public static function init()
    {
    }
    /**
     * Fills FROM clause of SQL request based on user supplied parameters.
     *
     * @param array  $query_args Parameters supplied by the user.
     * @param string $arg_name   Target of the JOIN sql param.
     * @param string $id_cell    ID cell identifier, like `table_name.id_column_name`.
     */
    protected function add_from_sql_params($query_args, $arg_name, $id_cell)
    {
    }
    /**
     * Updates the database query with parameters used for Products report: categories and order status.
     *
     * @param array $query_args Query arguments supplied by the user.
     */
    protected function add_sql_query_params($query_args)
    {
    }
    /**
     * Maps ordering specified by the user to columns in the database/fields in the data.
     *
     * @param string $order_by Sorting criterion.
     * @return string
     */
    protected function normalize_order_by($order_by)
    {
    }
    /**
     * Enriches the product data with attributes specified by the extended_attributes.
     *
     * @param array $products_data Product data.
     * @param array $query_args  Query parameters.
     */
    protected function include_extended_info(&$products_data, $query_args)
    {
    }
    /**
     * Returns the report data based on parameters supplied by the user.
     *
     * @param array $query_args  Query parameters.
     * @return stdClass|WP_Error Data.
     */
    public function get_data($query_args)
    {
    }
    /**
     * Initialize query objects.
     */
    protected function initialize_queries()
    {
    }
}
/**
 * WC_CP_Analytics_Revenue_Query class.
 *
 * @version 10.2.0
 */
class WC_CP_Analytics_Revenue_Query extends \Automattic\WooCommerce\Admin\API\Reports\GenericQuery
{
    /**
     * Valid fields for Products report.
     *
     * @return array
     */
    protected function get_default_query_vars()
    {
    }
    /**
     * Get product data based on the current query vars.
     *
     * @return array
     */
    public function get_data()
    {
    }
}
/**
 * WC_CP_Analytics_Revenue_REST_Controller class.
 *
 * @version 8.8.0
 */
class WC_CP_Analytics_Revenue_REST_Controller extends \WC_REST_Reports_Controller implements \Automattic\WooCommerce\Admin\API\Reports\ExportableInterface
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc-analytics';
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'reports/composites';
    /**
     * Mapping between external parameter name and name used in query class.
     *
     * @var array
     */
    protected $param_mapping = array('products' => 'product_includes');
    /**
     * Get items.
     *
     * @param WP_REST_Request $request Request data.
     *
     * @return array|WP_Error
     */
    public function get_items($request)
    {
    }
    /**
     * Prepare a report object for serialization.
     *
     * @param Array           $report  Report data.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response
     */
    public function prepare_item_for_response($report, $request)
    {
    }
    /**
     * Prepare links for the request.
     *
     * @param Array $object Object data.
     * @return array        Links for the given post.
     */
    protected function prepare_links($object)
    {
    }
    /**
     * Get the Report's schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
    }
    /**
     * Get the query params for collections.
     *
     * @return array
     */
    public function get_collection_params()
    {
    }
    /**
     * Get the column names for export.
     *
     * @return array Key value pair of Column ID => Label.
     */
    public function get_export_columns()
    {
    }
    /**
     * Get the column values for export.
     *
     * @param array $item Single report item/row.
     * @return array Key value pair of Column ID => Row Value.
     */
    public function prepare_item_for_export($item)
    {
    }
}
/**
 * WC_CP_Analytics_Revenue_Stats_Data_Store class.
 *
 * @version 9.0.4
 */
class WC_CP_Analytics_Revenue_Stats_Data_Store extends \WC_CP_Analytics_Revenue_Data_Store
{
    /**
     * Cache identifier.
     *
     * @var string
     */
    protected $cache_key = 'composites_revenue_stats';
    /**
     * Mapping columns to data type to return correct response types.
     *
     * @var array
     */
    protected $column_types = array('date_start' => 'strval', 'date_end' => 'strval', 'product_id' => 'intval', 'items_sold' => 'intval', 'composited_items_sold' => 'intval', 'net_revenue' => 'floatval', 'orders_count' => 'intval', 'products_count' => 'intval');
    /**
     * Data store context used to pass to filters.
     *
     * @var string
     */
    protected $context = 'composites_stats';
    /**
     * Assign report columns once full table name has been assigned.
     */
    protected function assign_report_columns()
    {
    }
    /**
     * Updates the database query with parameters used for Products Stats report: categories and order status.
     *
     * @param  array $query_args
     * @return void
     */
    protected function update_sql_query_params($query_args)
    {
    }
    /**
     * Returns the report data based on parameters supplied by the user.
     *
     * @param array $query_args  Query parameters.
     * @return stdClass|WP_Error Data.
     */
    public function get_data($query_args)
    {
    }
    /**
     * Normalizes order_by clause to match to SQL query.
     *
     * @param  string $order_by Order by option requested by user.
     * @return string
     */
    protected function normalize_order_by($order_by)
    {
    }
    /**
     * Initialize query objects.
     */
    protected function initialize_queries()
    {
    }
}
/**
 * WC_CP_Analytics_Revenue_Stats_Query class.
 *
 * @version 10.2.0
 */
class WC_CP_Analytics_Revenue_Stats_Query extends \Automattic\WooCommerce\Admin\API\Reports\GenericQuery
{
    /**
     * Valid fields for Composites report.
     *
     * @return array
     */
    protected function get_default_query_vars()
    {
    }
    /**
     * Get product data based on the current query vars.
     *
     * @return array
     */
    public function get_data()
    {
    }
}
/**
 * WC_CP_Analytics_Revenue_Stats_REST_Controller class.
 *
 * @version 8.8.0
 */
class WC_CP_Analytics_Revenue_Stats_REST_Controller extends \WC_REST_Reports_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc-analytics';
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'reports/composites/stats';
    /**
     * Mapping between external parameter name and name used in query class.
     *
     * @var array
     */
    protected $param_mapping = array('products' => 'product_includes');
    /**
     * Get all items.
     *
     * @param WP_REST_Request $request Request data.
     * @return array|WP_Error
     */
    public function get_items($request)
    {
    }
    /**
     * Prepare a report object for serialization.
     *
     * @param Array           $report  Report data.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response
     */
    public function prepare_item_for_response($report, $request)
    {
    }
    /**
     * Get the Report's schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
    }
    /**
     * Set the default results to 0 if API returns an empty array
     *
     * @param Mixed $results Report data.
     * @return object
     */
    public function set_default_report_data($results)
    {
    }
    /**
     * Get the query params for collections.
     *
     * @return array
     */
    public function get_collection_params()
    {
    }
}
/**
 * Admin AJAX meta-box handlers.
 *
 * @class     WC_CP_Admin_Ajax
 * @version   10.1.0
 */
class WC_CP_Admin_Ajax
{
    /**
     * Hook in.
     */
    public static function init()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Notices.
    |--------------------------------------------------------------------------
    */
    /**
     * Dismisses notices.
     *
     * @since  3.14.0
     *
     * @return void
     */
    public static function dismiss_notice()
    {
    }
    /**
     * Checks if loopback requests work.
     *
     * @since  7.0.3
     *
     * @return void
     */
    public static function ajax_loopback_test()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Edit-Product.
    |--------------------------------------------------------------------------
    */
    /**
     * Fetches the categories of a product.
     *
     * @since  3.14.0
     * @return void
     */
    public static function get_product_categories()
    {
    }
    /**
     * Handles saving composite config via ajax.
     *
     * @return void
     */
    public static function ajax_composite_save()
    {
    }
    /**
     * Handles adding components via ajax.
     *
     * @return void
     */
    public static function ajax_add_component()
    {
    }
    /**
     * Handles adding scenarios via ajax.
     *
     * @return void
     */
    public static function ajax_add_scenario()
    {
    }
    /**
     * Handles adding states via ajax.
     *
     * @return void
     */
    public static function ajax_add_state()
    {
    }
    /**
     * Search for products and variations in component.
     *
     * @since  3.14.0
     *
     * @return void
     */
    public static function search_products_in_categories()
    {
    }
    /**
     * Search for products and variations in component.
     *
     * @return void
     */
    public static function search_products_and_variations_in_component()
    {
    }
    /**
     * Search for products and variations in component.
     *
     * @param  array $args
     * @return void
     */
    public static function search_products_in_component($args = array())
    {
    }
    /**
     * Ajax search for Component Options: Show results for supported product types only.
     */
    public static function search_component_options()
    {
    }
    /**
     * Include only supported product types in Component Options search results.
     *
     * @param  array $search_results
     * @return array
     */
    public static function component_options_search_results($search_results)
    {
    }
    /**
     * Modify variable product titles when searching in scenarios.
     *
     * @since  3.14.3
     *
     * @param  array $search_results
     * @return array
     */
    public static function component_options_in_scenario_search_results($search_results)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Edit-Order.
    |--------------------------------------------------------------------------
    */
    /**
     * True when displaying content in an edit-composite order item modal.
     *
     * @since  3.14.0
     *
     * @return void
     */
    public static function is_composite_edit_request()
    {
    }
    /**
     * Form content used to populate "Configure/Edit" composite order item modals.
     *
     * @since  3.14.0
     *
     * @return void
     */
    public static function ajax_composite_order_item_form()
    {
    }
    /**
     * Validates edited/configured composites and returns updated order items.
     *
     * @since  3.14.0
     *
     * @return void
     */
    public static function ajax_edit_composite_in_order()
    {
    }
    /**
     * Fetches selection data.
     *
     * @since  3.14.0
     *
     * @return void
     */
    public static function ajax_show_composited_product()
    {
    }
    /**
     * Filter component data in edit-order context.
     *
     * @since  3.14.0
     *
     * @param  array $component_data
     * @return array
     */
    public static function filter_component_data($component_data)
    {
    }
}
/**
 * Composite Products admin notices handling.
 *
 * @class    WC_CP_Admin_Notices
 * @version  10.0.0
 */
class WC_CP_Admin_Notices
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
    private static $maintenance_notice_types = array('update' => 'update_notice', 'welcome' => 'welcome_notice', 'loopback' => 'loopback_notice');
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
     * @since  7.0.3
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
     * @since  7.0.3
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
     * @since  7.0.3
     *
     * @param  string $notice_name
     * @param  string $key
     * @param  mixed  $value
     * @return array
     */
    public static function set_notice_option($notice_name, $key, $value)
    {
    }
    /**
     * Checks if a maintenance notice is visible.
     *
     * @since  3.14.0
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
     * @since  3.14.0
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
     * @since  3.14.0
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
     * @since  3.14.0
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
     * Add 'update' maintenance notice.
     */
    public static function update_notice()
    {
    }
    /**
     * Add 'welcome' notice.
     *
     * @since  3.15.0
     */
    public static function welcome_notice()
    {
    }
    /**
     * Add 'loopback' notice.
     *
     * @since  7.0.3
     */
    public static function loopback_notice()
    {
    }
    /**
     * Returns a "trigger update" notice component.
     *
     * @since  3.12.0
     *
     * @return string
     */
    private static function get_trigger_update_prompt()
    {
    }
    /**
     * Returns a "force update" notice component.
     *
     * @since  3.12.0
     *
     * @return string
     */
    private static function get_force_update_prompt()
    {
    }
    /**
     * Returns a "failed update" notice component.
     *
     * @since  3.12.0
     *
     * @return string
     */
    private static function get_failed_update_prompt()
    {
    }
    /**
     * Dismisses a notice. Dismissible maintenance notices cannot be dismissed forever.
     *
     * @since  3.14.0
     *
     * @param  string $notice
     */
    public static function dismiss_notice($notice)
    {
    }
}
/**
 * Composite Products edit-order functions and filters.
 *
 * @class    WC_CP_Admin_Order
 * @version  8.10.1
 */
class WC_CP_Admin_Order
{
    /**
     * Order object to use in 'display_edit_button'.
     *
     * @var WC_Order
     */
    protected static $order;
    /**
     * Setup Admin class.
     */
    public static function init()
    {
    }
    /**
     * Whether a composite is configurable in admin-order context.
     *
     * @param  WC_Product_Composite $composite
     * @return boolean
     */
    public static function is_composite_configurable($composite)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Filter hooks.
    |--------------------------------------------------------------------------
    */
    /**
     * Auto-populate composited order-items for Composites that don't require configuration.
     *
     * @param  $item_id  int
     * @param  $item     WC_Order_Item
     * @param  $order    WC_Order
     * @return void
     */
    public static function add_components($item_id, $item, $order)
    {
    }
    /**
     * Save order object to use in 'display_edit_button'.
     *
     * Although the order object can be retrieved via 'WC_Order_Item::get_order', we've seen a significant performance hit when using that method.
     *
     * @param  WC_Order $order
     */
    public static function set_order($order)
    {
    }
    /**
     * Display "Configure/Edit" button next to configurable composite container items in the edit-order screen.
     *
     * @param  $item_id  int
     * @param  $item     WC_Order_Item
     * @param  $product  WC_Product
     * @return void
     */
    public static function display_edit_button($item_id, $item, $product)
    {
    }
    /**
     * JS template of modal for configuring/editing composites.
     */
    public static function add_js_template()
    {
    }
}
/**
 * Add hooks to the edit posts view for the 'product' post type.
 *
 * @class    WC_CP_Admin_Post_Types
 * @version  3.15.2
 */
class WC_CP_Admin_Post_Types
{
    /**
     * Hook in.
     */
    public static function init()
    {
    }
    /**
     * Add support for bulk editing Composite's Regular/Sale price.
     *
     * @param  array $supported_product_types
     * @return array
     */
    public static function bulk_edit_price($supported_product_types)
    {
    }
}
/**
 * Return configured admin restrictions.
 *
 * @class    WC_CP_Admin_Restrictions
 * @version  10.1.1
 */
class WC_CP_Admin_Restrictions
{
    /**
     * The possible license states.
     */
    const LICENSE_STATE_SITE_DISCONNECTED = 'site-disconnected';
    const LICENSE_STATE_LICENSE_EXPIRED = 'license-expired';
    const LICENSE_STATE_LICENSE_EXPIRING = 'license-expiring';
    const LICENSE_STATE_LICENSE_UNREGISTERED = 'license-unregistered';
    const LICENSE_STATE_LICENSE_REGISTERED = 'license-registered';
    const LICENSE_STATES = array(self::LICENSE_STATE_SITE_DISCONNECTED, self::LICENSE_STATE_LICENSE_EXPIRED, self::LICENSE_STATE_LICENSE_EXPIRING, self::LICENSE_STATE_LICENSE_UNREGISTERED, self::LICENSE_STATE_LICENSE_REGISTERED);
    /**
     * Finds the current license state.
     *
     * @param mixed $product_id The product ID.
     * @return string|false The license state or false if the product ID or fetched license state is invalid.
     */
    public static function find_license_state($product_id)
    {
    }
    /**
     * Returns if the product is restricted
     *
     * @param mixed $product_id The product ID.
     * @return bool Returns true if there is a restriction for the product based on the license state and restriction data from WCCOM.
     */
    public static function is_restricted($product_id)
    {
    }
    /**
     * Wraps the core function `WC_Product_Usage::get_rules_for_product` to check for restrictions.
     *
     * @param mixed $product_id The product ID.
     * @return array|null The restrictions array for the given feature and action, null if we can't fetch the data or if there is no restriction.
     */
    private static function get_restriction_data($product_id)
    {
    }
    /**
     * A compatibility wrapper for WC versions > 5.6 to fetch restriction data.
     *
     * @param mixed $product_id The product ID.
     * @return array|null The restrictions array for the given feature and action, null if we can't fetch the data or if there is no restriction.
     */
    private static function get_restriction_data_compat($product_id)
    {
    }
    /**
     * Wraps the core function `WC_Helper::get_product_usage_notice_rules` to check for restrictions.
     * This is helpful for WC 9.2, which does not have the helper SDK.
     *
     * @param mixed $product_id The product ID.
     * @return array|null The restrictions array for the given feature and action, null if we can't fetch the data or if there is no restriction.
     */
    private static function get_restriction_data_get_product_usage_notice_rules($product_id)
    {
    }
    /**
     * Get restriction data based on just the WC Helper API get. We use the same cache key here as in WC Core.
     *
     * @return array|null The restrictions array for the given feature and action, null if we can't fetch the data or if there is no restriction.
     */
    private static function get_restriction_data_wc_helper_api_get()
    {
    }
    /**
     * A compatibility layer for find product subscription state that reimplements some functions in WC Core.
     * This is tested for WC versions > 5.6.
     *
     * @param mixed $product_id The product ID.
     * @return array|null the product subscription state or null iif the site is not connected.
     */
    private static function get_product_subscription_state_compat($product_id)
    {
    }
    /**
     * A replacement for core WC_Helper::get_installed_subscriptions that reimplements some functions in WC Core.
     * Tested with WC > 5.6
     *
     * @return array The installed subscriptions.
     */
    private static function get_installed_subscriptions_compat()
    {
    }
    /**
     * A compatibility layer for is_site_connected that reimplements some functions in WC Core.
     * This is tested for WC versions > 5.6.
     *
     * @return bool Returns true if the site is connected, false otherwise.
     */
    private static function is_site_connected_compat()
    {
    }
    /**
     * Maps license state object from WC_Helper to easily understandable strings.
     *
     * @param mixed $license
     *
     * @return string|false. Returns a string representing the license state and false if the license state is invalid.
     */
    private static function map_license_state_from_wc_helper($license)
    {
    }
    /**
     * Get restriction message data based on WCCOM license state.
     *
     * @since 10.1.1
     *
     * @param int $product_id WCCOM product ID.
     *
     * @return array
     */
    public static function get_restriction_message_data($product_id)
    {
    }
    /**
     * Get the message when the site uses expired WCCOM license.
     *
     * @since 10.1.1
     *
     * @param int   $product_id       WCCOM product ID.
     * @param array $restriction_data Contains data about the restriction (including product name and price).
     * @param bool  $inline_cta       True will put a CTA link inside the message.
     *                                Message with inline CTA is rendered as a notice.
     *
     * @return string
     */
    public static function get_expired_wccom_license_message($product_id, $restriction_data, $inline_cta = \false)
    {
    }
    /**
     * Get the message when the site uses unregistered WCCOM license.
     *
     * @since 10.1.1
     *
     * @param int   $product_id       WCCOM product ID.
     * @param array $restriction_data Contains data about the restriction (including product name and price).
     * @param bool  $inline_cta       True will put a CTA link inside the message.
     *                                Message with inline CTA is rendered as a notice.
     *
     * @return string
     */
    public static function get_unregistered_wccom_license_message($product_id, $restriction_data, $inline_cta = \false)
    {
    }
    /**
     * Get the message when the site is disconnected from WCCOM.
     *
     * @since 10.1.1
     *
     * @param int   $product_id       WCCOM product ID.
     * @param array $restriction_data Contains data about the restriction (including product name and price).
     * @param bool  $inline_cta       True will put a CTA link inside the message.
     *                                Message with inline CTA is rendered as a notice.
     *
     * @return string
     */
    public static function get_wccom_disconnected_message($product_id, $restriction_data, $inline_cta = \false)
    {
    }
    /**
     * Get URL to subscribe the CP license.
     *
     * @since 10.1.1
     *
     * @param int $product_id WCCOM product ID.
     *
     * @return string
     */
    public static function get_url_to_subscribe_wccom_license($product_id)
    {
    }
    /**
     * Get URL to renew the CP license.
     *
     * @since 10.1.1
     *
     * @return string
     */
    public static function get_url_to_renew_wccom_license($product_id, $restriction_data)
    {
    }
    /**
     * Get URL to connect to WCCOM.
     *
     * @since 10.1.1
     *
     * @return string
     */
    public static function get_url_to_connect_to_wccom()
    {
    }
}
/**
 * Handles sending Tracks events.
 *
 * @class    WC_CP_Admin_Tracks
 * @version  10.1.1
 */
class WC_CP_Admin_Tracks
{
    public static function record_event($event, $properties = array())
    {
    }
    public static function get_default_properties()
    {
    }
}
/**
 * Setup admin hooks.
 *
 * @class    WC_CP_Admin
 * @version  10.1.1
 */
class WC_CP_Admin
{
    /**
     * Bundled selectSW library version.
     *
     * @var string
     */
    private static $bundled_selectsw_version = '1.2.3';
    /**
     * Setup admin hooks.
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
     * Register own version of select2 library.
     *
     * @since 5.1.0
     */
    public static function maybe_register_selectsw()
    {
    }
    /**
     * Load own version of select2 library.
     *
     * @since 5.1.0
     */
    public static function maybe_load_selectsw()
    {
    }
    /**
     * Display notice when selectSW library is unsupported.
     *
     * @since 5.1.0
     */
    public static function maybe_display_selectsw_notice()
    {
    }
    /**
     * Whether to load own version of select2 library or not.
     *
     * @since   5.1.0
     *
     * @return  boolean
     */
    private static function load_selectsw()
    {
    }
    /**
     * Enqueue scripts for the product tutorial.
     *
     * @since 9.0.3
     *
     * @return void
     */
    public static function admin_product_tutorial_resources()
    {
    }
    /**
     * Include classes.
     */
    public static function includes()
    {
    }
    /**
     * Message to add in the WP Privacy Policy Guide page.
     *
     * @since  3.13.10
     *
     * @return string
     */
    protected static function get_privacy_policy_guide_message()
    {
    }
    /**
     * Add a message in the WP Privacy Policy Guide page.
     *
     * @since  3.13.10
     */
    public static function add_privacy_policy_guide_content()
    {
    }
    /**
     * Include scripts.
     */
    public static function composite_admin_scripts()
    {
    }
    /**
     * Get JS parameters for restriction.
     *
     * @since 10.1.1
     *
     * @return array
     */
    private static function get_js_params_for_restriction()
    {
    }
    /**
     * Support scanning for template overrides in extension.
     *
     * @param  array $paths
     * @return array
     */
    public static function composite_template_scan_path($paths)
    {
    }
    /**
     * Add CP debug data in the system status.
     *
     * @since  3.13.9
     */
    public static function render_system_status_items()
    {
    }
    /**
     * Determine which of our files have been overridden by the theme.
     *
     * @since  3.13.9
     *
     * @return array
     */
    private static function get_template_overrides()
    {
    }
    /**
     * Enqueue scripts for the product type on the onboarding task list.
     *
     * @since 9.0.2
     *
     * @return void
     */
    public static function admin_onboarding_task_product_type_resources()
    {
    }
}
/**
 * WooCommerce core Product Exporter support.
 *
 * @class    WC_CP_Product_Export
 * @version  9.0.4
 */
class WC_CP_Product_Export
{
    /**
     * Hook in.
     */
    public static function init()
    {
    }
    /**
     * Add CSV columns for exporting composite data.
     *
     * @param  array $columns
     * @return array  $columns
     */
    public static function add_columns($columns)
    {
    }
    /**
     * Components column content.
     *
     * @param  mixed      $value
     * @param  WC_Product $product
     * @return string      $value
     */
    public static function export_components($value, $product)
    {
    }
    /**
     * Scenarios column content.
     *
     * @param  mixed      $value
     * @param  WC_Product $product
     * @return string      $value
     */
    public static function export_scenarios($value, $product)
    {
    }
    /**
     * "Composite Contents Virtual" column content.
     *
     * @param  mixed      $value
     * @param  WC_Product $product
     * @return mixed       $value
     */
    public static function export_virtual_composite($value, $product)
    {
    }
    /**
     * "Composite Aggregate Weight" column content.
     *
     * @param  mixed      $value
     * @param  WC_Product $product
     * @return mixed       $value
     */
    public static function export_aggregate_weight($value, $product)
    {
    }
    /**
     * "Composite Layout" column content.
     *
     * @param  mixed      $value
     * @param  WC_Product $product
     * @return mixed       $value
     */
    public static function export_layout($value, $product)
    {
    }
    /**
     * "Composite Cart Editing" column content.
     *
     * @param  mixed      $value
     * @param  WC_Product $product
     * @return mixed       $value
     */
    public static function export_editable_in_cart($value, $product)
    {
    }
    /**
     * "Composite Sold Individually" column content.
     *
     * @param  mixed      $value
     * @param  WC_Product $product
     * @return mixed       $value
     */
    public static function export_sold_individually_context($value, $product)
    {
    }
    /**
     * "Composite Catalog Proce" column content.
     *
     * @param  mixed      $value
     * @param  WC_Product $product
     * @return mixed       $value
     */
    public static function export_shop_price_calc($value, $product)
    {
    }
    /**
     * "Composite Form Location" column content.
     *
     * @since  3.14.0
     *
     * @param  mixed      $value
     * @param  WC_Product $product
     * @return mixed       $value
     */
    public static function export_add_to_cart_form_location($value, $product)
    {
    }
}
/**
 * WooCommerce core Product Importer support.
 *
 * @class    WC_CP_Product_Import
 * @version  9.0.4
 */
class WC_CP_Product_Import
{
    /**
     * Working importer instance.
     *
     * @var WC_Product_CSV_Importer
     */
    private static $importer = \null;
    /**
     * Hook in.
     */
    public static function init()
    {
    }
    /**
     * Register the 'Custom Column' column in the importer.
     *
     * @param  array $options
     * @return array  $options
     */
    public static function map_columns($options)
    {
    }
    /**
     * Add automatic mapping support for custom columns.
     *
     * @param  array $columns
     * @return array  $columns
     */
    public static function add_columns_to_mapping_screen($columns)
    {
    }
    /**
     * Prevent JSON-encoded fields from being kses-posted.
     *
     * @param  array                   $callbacks
     * @param  WC_Product_CSV_Importer $importer
     * @return array
     */
    public static function formatting_callbacks($callbacks, $importer)
    {
    }
    /**
     * Decode component data and parse relative IDs.
     *
     * @param  array                   $parsed_data
     * @param  WC_Product_CSV_Importer $importer
     * @return array
     */
    public static function parse_components($parsed_data, $importer)
    {
    }
    /**
     * Decode scenario data and parse relative IDs.
     *
     * @param  array                   $parsed_data
     * @param  WC_Product_CSV_Importer $importer
     * @return array
     */
    public static function parse_scenarios($parsed_data, $importer)
    {
    }
    /**
     * Set composite-type props.
     *
     * @param  array $parsed_data
     * @return array
     */
    public static function set_composite_props($product, $data)
    {
    }
}
/**
 * Product Data tabs/panels for the Composite type.
 *
 * @class    WC_CP_Meta_Box_Product_Data
 * @version  10.2.0
 */
class WC_CP_Meta_Box_Product_Data
{
    /**
     * Notices to send via ajax when saving a Composite config.
     *
     * @var array
     */
    public static $ajax_notices = array();
    /**
     * Runtime caching of the category hierarchical tree.
     *
     * @since 7.1.2
     *
     * @var array
     */
    private static $product_categories_tree;
    /**
     * Store of generated ids.
     *
     * @since 8.0.0
     *
     * @var array
     */
    private static $generated_ids = array();
    /**
     * Hook in.
     */
    public static function init()
    {
    }
    public static function maybe_add_metabox_load_notices()
    {
    }
    /**
     * Add a notice if prices not set.
     *
     * @param  WC_Product_Composite $product
     * @return void
     */
    public static function maybe_add_non_purchasable_notice($product)
    {
    }
    /**
     * Add a notice if calculating min/max catalog price in the background.
     *
     * @since  4.0.0
     *
     * @param  WC_Product_Composite $product
     * @return void
     */
    public static function maybe_add_catalog_price_notice($product)
    {
    }
    /**
     * Add a notice if a states migration is pending.
     *
     * @since  8.0.0
     *
     * @param  WC_Product_Composite $product
     * @return void
     */
    public static function maybe_add_states_migration_notice($product)
    {
    }
    /**
     * Renders additional "Sold Individually" options.
     *
     * @return void
     */
    public static function sold_individually_options()
    {
    }
    /**
     * Composite general options.
     *
     * @since  3.14.0
     *
     * @param  WC_Product_Composite $composite_product_object
     * @return void
     */
    public static function composite_options($composite_product_object)
    {
    }
    /**
     * Renders the composite writepanel Layout Options section before the Components section.
     *
     * @param  WC_Product_Composite $composite_product_object
     * @return void
     */
    public static function composite_layout($composite_product_object)
    {
    }
    /**
     * Displays the "Form location" option.
     *
     * @since  3.14.0
     *
     * @param  WC_Product_Composite $composite_product_object
     * @return void
     */
    public static function composite_form_location($composite_product_object)
    {
    }
    /**
     * Displays the "Catalog Price" option.
     *
     * @param  WC_Product_Composite $composite_product_object
     * @return void
     */
    public static function composite_shop_price_calc($composite_product_object)
    {
    }
    /**
     * Displays the "Edit in Cart" option.
     *
     * @param  WC_Product_Composite $composite_product_object
     * @return void
     */
    public static function composite_edit_in_cart($composite_product_object)
    {
    }
    /**
     * Renders the composite writepanel Layout Options section before the Components section.
     *
     * @param  array $composite_data
     * @param  int   $composite_id
     * @return void
     */
    public static function composite_component_options($composite_data, $composite_id)
    {
    }
    /**
     * Shipping type image select html.
     *
     * @since 6.0.0
     *
     * @return void
     */
    public static function shipping_type_admin_html()
    {
    }
    /**
     * Renders inline JS to handle product_data container classes.
     *
     * @since 6.0.0
     *
     * @return void
     */
    public static function js_handle_container_classes()
    {
    }
    /**
     * Handles getting component meta box tabs - @see 'component_admin_html'.
     *
     * @return array
     */
    public static function get_component_tabs()
    {
    }
    /**
     * Load component meta box in 'woocommerce_composite_component_admin_html'.
     *
     * @param  int    $id
     * @param  array  $data
     * @param  int    $composite_id
     * @param  string $toggle
     * @return void
     */
    public static function component_admin_html($id, $data, $composite_id, $toggle = 'closed')
    {
    }
    /**
     * Load scenario meta box in 'woocommerce_composite_scenario_admin_html'.
     *
     * @param  int    $id
     * @param  array  $scenario_data
     * @param  array  $composite_data
     * @param  int    $composite_id
     * @param  string $toggle
     * @return void
     */
    public static function scenario_admin_html($id, $scenario_data, $composite_data, $composite_id, $toggle = 'closed')
    {
    }
    /**
     * Load state meta box in 'woocommerce_composite_state_admin_html'.
     *
     * @param  int    $id
     * @param  array  $state_data
     * @param  array  $composite_data
     * @param  int    $composite_id
     * @param  string $toggle
     * @return void
     */
    public static function state_admin_html($id, $state_data, $composite_data, $composite_id, $toggle = 'closed')
    {
    }
    /**
     * Add "Hide Components" scenario action.
     *
     * @param  int   $id
     * @param  array $scenario_data
     * @param  array $composite_data
     * @param  int   $product_id
     * @return void
     */
    public static function scenario_action_hide_components($id, $scenario_data, $composite_data, $product_id)
    {
    }
    /**
     * Add "Hide Options" scenario action.
     *
     * @since 8.0.0
     *
     * @param  int   $id
     * @param  array $scenario_data
     * @param  array $composite_data
     * @param  int   $product_id
     * @return void
     */
    public static function scenario_action_hide_options($id, $scenario_data, $composite_data, $product_id)
    {
    }
    /**
     * Add scenario title and description options.
     *
     * @param  int   $id
     * @param  array $scenario_data
     * @param  array $composite_data
     * @param  int   $product_id
     * @return void
     */
    public static function scenario_info($id, $scenario_data, $composite_data, $product_id)
    {
    }
    /**
     * Add state title and description options.
     *
     * @param  int   $id
     * @param  array $state_data
     * @param  array $composite_data
     * @param  int   $product_id
     * @return void
     */
    public static function state_info($id, $state_data, $composite_data, $product_id)
    {
    }
    /**
     * Add scenario config options.
     *
     * @param  int   $id
     * @param  array $scenario_data
     * @param  array $composite_data
     * @param  int   $product_id
     * @return void
     */
    public static function scenario_config($id, $scenario_data, $composite_data, $product_id)
    {
    }
    /**
     * Add state config options.
     *
     * @param  int   $id
     * @param  array $state_data
     * @param  array $composite_data
     * @param  int   $product_id
     * @return void
     */
    public static function state_config($id, $state_data, $composite_data, $product_id)
    {
    }
    /**
     * Select action options.
     *
     * @param  int   $id
     * @param  array $data
     * @param  int   $product_id
     * @return void
     */
    public static function component_select_action_options($id, $data, $product_id)
    {
    }
    /**
     * Add component selection details layout options.
     *
     * @param  int   $id
     * @param  array $data
     * @param  int   $product_id
     * @return void
     */
    public static function component_selection_details_options($id, $data, $product_id)
    {
    }
    /**
     * Add component subtotal visibility options.
     *
     * @param  int   $id
     * @param  array $data
     * @param  int   $product_id
     * @return void
     */
    public static function component_subtotal_visibility_options($id, $data, $product_id)
    {
    }
    /**
     * Add component 'show orderby' option.
     *
     * @param  int   $id
     * @param  array $data
     * @param  int   $product_id
     * @return void
     */
    public static function component_sort_filter_show_orderby($id, $data, $product_id)
    {
    }
    /**
     * Add component 'show filters' option.
     *
     * @param  int   $id
     * @param  array $data
     * @param  int   $product_id
     * @return void
     */
    public static function component_sort_filter_show_filters($id, $data, $product_id)
    {
    }
    /**
     * Open component config group div.
     *
     * @param  int   $id
     * @param  array $data
     * @param  int   $product_id
     * @return void
     */
    public static function component_options_group_pre($id, $data, $product_id)
    {
    }
    /**
     * Open component config group div (sorting/filtering).
     *
     * @param  int   $id
     * @param  array $data
     * @param  int   $product_id
     * @return void
     */
    public static function component_options_group_pre_sf($id, $data, $product_id)
    {
    }
    /**
     * Open component select-action config group div.
     *
     * @param  int   $id
     * @param  array $data
     * @param  int   $product_id
     * @return void
     */
    public static function component_options_group_pre_sa($id, $data, $product_id)
    {
    }
    /**
     * Close component config group div.
     *
     * @param  int   $id
     * @param  array $data
     * @param  int   $product_id
     * @return void
     */
    public static function component_options_group_post($id, $data, $product_id)
    {
    }
    /**
     * Add component config title option.
     *
     * @param  int   $id
     * @param  array $data
     * @param  int   $product_id
     * @return void
     */
    public static function component_config_title($id, $data, $product_id)
    {
    }
    /**
     * Add component config description option.
     *
     * @param  int   $id
     * @param  array $data
     * @param  int   $product_id
     * @return void
     */
    public static function component_config_description($id, $data, $product_id)
    {
    }
    /**
     * Add component placeholder image.
     *
     * @param  int   $id
     * @param  array $data
     * @param  int   $product_id
     * @return void
     */
    public static function component_config_image($id, $data, $product_id)
    {
    }
    /**
     * Add component config multi select products option.
     *
     * @param  int   $id
     * @param  array $data
     * @param  int   $product_id
     * @return void
     */
    public static function component_config_options($id, $data, $product_id)
    {
    }
    /**
     * Add component config default selection option.
     *
     * @param  int   $id
     * @param  array $data
     * @param  int   $product_id
     * @return void
     */
    public static function component_config_default_option($id, $data, $product_id)
    {
    }
    /**
     * Add component config min quantity option.
     *
     * @param  int   $id
     * @param  array $data
     * @param  int   $product_id
     * @return void
     */
    public static function component_config_quantity_min($id, $data, $product_id)
    {
    }
    /**
     * Add component config max quantity option.
     *
     * @param  int   $id
     * @param  array $data
     * @param  int   $product_id
     * @return void
     */
    public static function component_config_quantity_max($id, $data, $product_id)
    {
    }
    /**
     * Add component config optional option.
     *
     * @param  int   $id
     * @param  array $data
     * @param  int   $product_id
     * @return void
     */
    public static function component_config_optional($id, $data, $product_id)
    {
    }
    /**
     * Add component config Shipped Individually option.
     *
     * @param  int   $id
     * @param  array $data
     * @param  int   $product_id
     * @return void
     */
    public static function component_config_shipped_individually($id, $data, $product_id)
    {
    }
    /**
     * Add component config Priced Individually option.
     *
     * @param  int   $id
     * @param  array $data
     * @param  int   $product_id
     * @return void
     */
    public static function component_config_priced_individually($id, $data, $product_id)
    {
    }
    /**
     * Add component "Option Prices" option.
     *
     * @since  3.12.0
     *
     * @param  int   $id
     * @param  array $data
     * @param  int   $product_id
     * @return void
     */
    public static function component_config_display_prices($id, $data, $product_id)
    {
    }
    /**
     * Add component config discount option.
     *
     * @param  int   $id
     * @param  array $data
     * @param  int   $product_id
     * @return void
     */
    public static function component_config_discount($id, $data, $product_id)
    {
    }
    /**
     * Add component "Options Style" option.
     *
     * @param  int   $id
     * @param  array $data
     * @param  int   $product_id
     * @return void
     */
    public static function component_config_options_style($id, $data, $product_id)
    {
    }
    /**
     * Add component "Pagination Style" option.
     *
     * @since  3.12.0
     *
     * @param  int   $id
     * @param  array $data
     * @param  int   $product_id
     * @return void
     */
    public static function component_config_pagination_style($id, $data, $product_id)
    {
    }
    /**
     * Adds the Composite Product write panel tabs.
     *
     * @param  array $tabs
     * @return array
     */
    public static function composite_product_data_tabs($tabs)
    {
    }
    /**
     * Add Composited Products stock note.
     *
     * @return void
     */
    public static function composite_stock_info()
    {
    }
    /**
     * Sets global data used in component/scenario metaboxes.
     *
     * @param WC_Product_Composite $composite_product_object
     */
    public static function set_global_object_data($composite_product_object)
    {
    }
    /**
     * Whether to display the States panel or not.
     * By default only available to users who already utilized state-based logic before v8.0.0 became available.
     *
     * @since  8.0.0
     *
     * @return boolean
     */
    protected static function display_states_panel()
    {
    }
    /**
     * Whether a Composite has States and/or needs a States migration.
     *
     * @since  8.0.0
     *
     * @param  WC_Product_Composite
     * @return boolean
     */
    protected static function get_global_object_states_data($product, $prop = 'has_states')
    {
    }
    /**
     * Calculates whether a Composite has States and/or needs a States migration.
     *
     * @since  8.0.0
     *
     * @param  WC_Product_Composite
     * @return void
     */
    protected static function set_global_object_states_data($product)
    {
    }
    /**
     * Components and Scenarios write panels.
     *
     * @return void
     */
    public static function composite_data_panel()
    {
    }
    /**
     * Product options for post-1.6.2 product data section.
     *
     * @param  array $options
     * @return array
     */
    public static function add_composite_type_options($options)
    {
    }
    /**
     * Process, verify and save bundle type product data.
     *
     * @param  WC_Product $product
     * @return void
     */
    public static function process_composite_data($product)
    {
    }
    /**
     * Save composite configuration: Components and Scenarios tab fields.
     *
     * @param  int   $composite_id
     * @param  array $posted_composite_data
     * @return void
     */
    public static function save_configuration($composite_id, $posted_composite_data)
    {
    }
    /**
     * Save components and scenarios.
     *
     * @param  WC_Product_Composite $product
     * @param  array                $posted_composite_data
     * @return array
     */
    public static function process_posted_composite_configuration($product, $posted_composite_data = array())
    {
    }
    /**
     * Checks if a Scenario includes Conditions with partial or no effect on their Actions.
     *
     * @param  array $scenario_data
     * @param  array $component_indexes
     * @return bool
     */
    protected static function has_non_effective_conditions($scenario_data, $component_indexes)
    {
    }
    /**
     * Add custom save notices via filters.
     *
     * @param string $content
     * @param string $type
     */
    public static function add_notice($content, $type)
    {
    }
    /**
     * Get (cached) product by ID.
     *
     * @since  3.14.0
     *
     * @param  int  $product_id
     * @param  bool $expanded
     * @return false|WC_Product
     */
    protected static function get_component_option($component_option_id, $expanded = \false)
    {
    }
    /**
     * Back-compat wrapper for getting the options style value from raw component data.
     *
     * @since  3.14.0
     *
     * @param  array $data
     * @return string
     */
    protected static function get_options_style($data)
    {
    }
    /**
     * Adds an error tip.
     *
     * @since  3.14.0
     *
     * @param  string $error
     * @param  bool   $allow_html
     * @return void
     */
    protected static function add_error_tip($error = '', $allow_html = \false)
    {
    }
    /**
     * Generate a unique timestamp and use it as id.
     *
     * @since  8.0.0
     *
     * @param  array $existing_ids
     * @return int
     */
    protected static function generate_id($existing_ids)
    {
    }
    /**
     * Filters disabled scenarios.
     *
     * @since  7.0.1
     *
     * @param  array $scenario_data
     * @return boolean
     */
    public static function filter_disabled_scenarios($scenario_data)
    {
    }
    /**
     * Print component condition admin fields html.
     *
     * @since  8.0.0
     *
     * @param  array $condition_data
     * @param  int   $composite_id
     * @param  array $selected
     * @param  array $modifiers
     * @return void
     */
    protected static function print_condition_component_admin_fields_html($condition_data, $composite_id, $selected = array(), $modifiers = array())
    {
    }
    /**
     * Get condition's components selections.
     *
     * @since 8.0.0
     *
     * @param  array $scenario_data
     * @param  array $component_data
     * @return array
     */
    public static function get_condition_component_selections($scenario_data, $component_data)
    {
    }
    /**
     * Get condition's components options.
     *
     * @since 8.0.0
     *
     * @param  array $component_data
     * @return array
     */
    public static function get_condition_component_options($component_data)
    {
    }
    /**
     * Prints JS templates for the conditions stack.
     *
     * @since 8.0.0
     *
     * @return void
     */
    public static function print_conditions_js_templates()
    {
    }
    /**
     * Get condition's components dropdown html.
     *
     * @since 8.0.0
     *
     * @param  array $composite_data
     * @param  mixed $selected_id
     * @param  array $additional_options (Optional)
     * @return void
     */
    public static function print_condition_components_dropdown($composite_data, $selected_id = \false, $additional_options = array())
    {
    }
}
/**
 * Add custom REST API fields.
 *
 * @class    WC_CP_REST_API
 * @version  10.0.0
 */
class WC_CP_REST_API
{
    /**
     * Custom REST API product field names, indicating support for getting/updating.
     *
     * @var array
     */
    private static $product_fields = array('composite_virtual' => array('get', 'update'), 'composite_layout' => array('get', 'update'), 'composite_add_to_cart_form_location' => array('get', 'update'), 'composite_editable_in_cart' => array('get', 'update'), 'composite_sold_individually_context' => array('get', 'update'), 'composite_shop_price_calc' => array('get', 'update'), 'composite_components' => array('get', 'update'), 'composite_scenarios' => array('get', 'update'));
    /**
     * Setup order class.
     */
    public static function init()
    {
    }
    /**
     * Filters REST API order responses to add custom data.
     */
    public static function filter_order_fields()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Products.
    |--------------------------------------------------------------------------
    */
    /**
     * Filters WC REST API product responses to cast prices to string, as per the schema.
     *
     * @since  6.1.1
     *
     * @param  WP_REST_Response $response
     * @param  WC_Data          $product
     * @return WP_REST_Response
     */
    public static function filter_product_response($response, $product)
    {
    }
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
     * Gets schema properties for CP product fields.
     *
     * @param  string $field_name
     * @return array
     */
    public static function get_product_field_schema($field_name)
    {
    }
    /**
     * Gets values for CP product fields.
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
     * Updates values for CP product fields.
     *
     * @param  mixed  $value
     * @param  mixed  $response
     * @param  string $field_name
     * @return array
     */
    public static function update_product_field_value($field_value, $response, $field_name)
    {
    }
    /**
     * Gets composite-specific product data.
     *
     * @since  3.7.0
     *
     * @param  string     $key
     * @param  WC_Product $product
     * @return array
     */
    private static function get_product_field($key, $product)
    {
    }
    /**
     * Sanitizes component data supplied using the api schema.
     *
     * @param  array $component_data
     * @return array
     */
    public static function sanitize_rest_api_component_data($component_data)
    {
    }
    /**
     * Converts component data supplied using the api schema to the internal schema.
     *
     * @param  array $data
     * @return array
     */
    public static function convert_rest_api_component_data($data)
    {
    }
    /**
     * Validates internal component data before saving.
     *
     * @param  array $component_data
     * @return array
     */
    public static function validate_internal_component_data($component_data, $context = 'rest')
    {
    }
    /**
     * Validates scenario data with REST API schema.
     *
     * @param  array $scenario_data
     * @return array
     */
    public static function sanitize_rest_api_scenario_data($data)
    {
    }
    /**
     * Validates scenario data with REST API schema.
     *
     * @param  array $scenario_data
     * @return array
     */
    public static function validate_rest_api_scenario_data($data)
    {
    }
    /**
     * Converts scenario data supplied using the REST API schema to the internal schema.
     *
     * @param  array $scenario_rest_api_data
     * @return array
     */
    public static function convert_rest_api_scenario_data($data)
    {
    }
    /**
     * Converts scenario data with internal schema to REST API schema.
     *
     * @param  WC_Product_Composite $product
     * @return array
     */
    private static function get_rest_api_scenario_data($product)
    {
    }
    /**
     * Converts component data with internal schema to REST API schema.
     *
     * @param  WC_Product_Composite $product
     * @return array
     */
    private static function get_rest_api_component_data($product)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Orders.
    |--------------------------------------------------------------------------
    */
    /**
     * Gets extended (unprefixed) schema properties for order line items.
     *
     * @return array
     */
    private static function get_extended_order_line_item_schema()
    {
    }
    /**
     * Modify order contents to include composite product components.
     *
     * @param  WC_Order $order
     * @param  array    $request
     */
    public static function add_composite_to_order($order, $request)
    {
    }
    /**
     * Converts a posted composite configuration to a format understood by 'WC_CP_Cart::validate_composite_configuration'.
     *
     * @since  3.14.0
     *
     * @param  array                 $posted_configuration
     * @param  WC_Product_Composite  $composite
     * @param  WC_Order_Item_Product $item
     * @return array
     */
    public static function parse_posted_composite_configuration($posted_configuration, $composite, $item)
    {
    }
    /**
     * Save composite configuration data on item for later processing.
     *
     * @param  WC_Order_Item $item
     * @param  array         $posted_item_data
     */
    public static function set_order_item($item, $posted_item_data)
    {
    }
    /**
     * Adds 'composite_parent' and 'composite_children' schema properties to line items.
     *
     * @param  array $schema
     * @return array
     */
    public static function filter_order_schema($schema)
    {
    }
    /**
     * Filters WC REST API order responses to add references between composite container/children items. Also modifies expanded product data based on the pricing and shipping settings.
     *
     * @since  3.7.0
     *
     * @param  WP_REST_Response  $response
     * @param  WP_Post | WC_Data $object
     * @param  WP_REST_Request   $request
     * @return WP_REST_Response
     */
    public static function filter_order_response($response, $object, $request)
    {
    }
    /**
     * Append CP data to order data.
     *
     * @param  array    $order_data
     * @param  WC_Order $order
     * @return array
     */
    private static function get_extended_order_data($order_data, $order)
    {
    }
    /**
     * Filters WC v1-v3 REST API order response content to add composite container/children item references.
     */
    private static function add_legacy_hooks()
    {
    }
    /**
     * Filters WC v1-v3 REST API order responses to add references between composite container/children items. Also modifies expanded product data based on the pricing and shipping settings.
     *
     * @param  array         $order_data
     * @param  WC_Order      $order
     * @param  array         $fields
     * @param  WC_API_Server $server
     * @return array
     */
    public static function legacy_order_response($order_data, $order, $fields, $server)
    {
    }
    /**
     * If the requested template is 'composite-product', return the path to the composite product template.
     *
     * @since 9.0.2
     * @param string $template_path Current template path.
     * @param string $template_name Requested template name.
     * @return string
     */
    public static function composite_product_template_csv_file_path($template_path, $template_name)
    {
    }
}
/**
 * Extends the store public API with composite related data for each composite parent and child item.
 *
 * @version 9.0.3
 */
class WC_CP_Store_API
{
    /**
     * Stores the cart item key of the last composited item.
     *
     * @var string
     */
    private static $last_composited_item_key;
    /**
     * Plugin Identifier, unique to each plugin.
     *
     * @var string
     */
    const IDENTIFIER = 'composites';
    /**
     * Bootstraps the class and hooks required data.
     */
    public static function init()
    {
    }
    /**
     * Registers the actual data into each endpoint.
     */
    public static function extend_store()
    {
    }
    /**
     * Register subscription product data into cart/items endpoint.
     *
     * @param  array $cart_item
     * @return array  $item_data
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
     * Aggregates composite container item prices.
     *
     * @param array $item_data
     * @param array $cart_item
     */
    private static function filter_container_cart_item_prices(&$item_data, $cart_item)
    {
    }
    /**
     * Aggregates composite container item subtotals.
     *
     * @param array $item_data
     * @param array $cart_item
     */
    private static function filter_container_cart_item_totals(&$item_data, $cart_item)
    {
    }
    /**
     * Adjust Composite container item quantity limits to keep max quantity limited by composited item stock.
     *
     * @param array $item_data
     * @param array $cart_item
     */
    private static function filter_container_cart_item_quantity_limits(&$item_data, $cart_item)
    {
    }
    /**
     * Filter container cart item permalink to support cart editing.
     *
     * @param array $item_data
     * @param array $cart_item
     */
    private static function filter_container_cart_item_permalink(&$item_data, $cart_item)
    {
    }
    /**
     * Adjust composited item quantity limits to account for min/max quantity settings and parent quantity.
     *
     * @param array $item_data
     * @param array $cart_item
     */
    private static function filter_composited_cart_item_quantity_limits(&$item_data, $cart_item)
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
    /**
     * Controls whether composite container cart item prices include the prices of their components.
     *
     * @param  array $cart_item
     * @return boolean
     */
    public static function is_container_cart_item_price_aggregated($cart_item)
    {
    }
    /**
     * Controls whether composite container cart item subtotals include the subtotals of their components.
     *
     * @param  array $cart_item
     * @return boolean
     */
    public static function is_container_cart_item_subtotal_aggregated($cart_item)
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
     * - aggregate composite container prices/subtotals;
     * - keep min/max/step quantity fields in sync.
     *
     * @param  $response  WP_REST_Response
     * @param  $server    WP_REST_Server
     * @param  $request   WP_REST_Request
     * @return WP_REST_Response
     */
    public static function filter_cart_item_data($response, $server, $request)
    {
    }
    /**
     * Validate composite in Store API context.
     *
     * @throws \Automattic\WooCommerce\StoreApi\Exceptions\RouteException
     *
     * @param  array      $data
     * @param  WC_Product $product
     * @return array
     */
    public static function validate_cart_item($composite, $cart_item)
    {
    }
    /**
     * Prevents access to the checkout block if a composite in the cart is misconfigured.
     *
     * @throws \Automattic\WooCommerce\StoreApi\Exceptions\RouteException
     *
     * @param  WC_Order $order
     * @return array
     */
    public static function validate_draft_order($order)
    {
    }
    /**
     * Prevent removal of mandatory components.
     *
     * @throws \Automattic\WooCommerce\StoreApi\Exceptions\RouteException
     *
     * @param  string  $cart_item_key
     * @param  WC_Cart $cart
     * @return void
     */
    public static function validate_mandatory_composited_cart_item_removal($cart_item_key, $cart)
    {
    }
}
/**
 * Class for integrating with WooCommerce Blocks scripts.
 *
 * @version 10.2.0
 */
class WC_CP_Checkout_Blocks_Integration implements \Automattic\WooCommerce\Blocks\Integrations\IntegrationInterface
{
    /**
     * Whether the integration has been initialized.
     *
     * @var boolean
     */
    protected $is_initialized;
    /**
     * The single instance of the class.
     *
     * @var WC_CP_Checkout_Blocks_Integration
     */
    protected static $_instance = \null;
    /**
     * Main WC_CP_Checkout_Blocks_Integration instance. Ensures only one instance of WC_CP_Checkout_Blocks_Integration is loaded or can be loaded.
     *
     * @static
     * @return WC_CP_Checkout_Blocks_Integration
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
     * The name of the integration.
     *
     * @return string
     */
    public function get_name()
    {
    }
    /**
     * When called invokes any initialization/setup for the integration.
     */
    public function initialize()
    {
    }
    /**
     * Returns an array of script handles to enqueue in the frontend context.
     *
     * @return string[]
     */
    public function get_script_handles()
    {
    }
    /**
     * Returns an array of script handles to enqueue in the editor context.
     *
     * @return string[]
     */
    public function get_editor_script_handles()
    {
    }
    /**
     * An array of key, value pairs of data made available to the block on the client side.
     *
     * @return array
     */
    public function get_script_data()
    {
    }
}
/**
 * Class for handling the Configuration Summary Block.
 *
 * @package  WooCommerce Composite Products
 * @since    8.10.4
 * @version 8.10.4
 */
class WC_CP_Configuration_Summary_Block
{
    /**
     * The single instance of the class.
     *
     * @var WC_CP_Configuration_Summary_Block
     */
    protected static $_instance = \null;
    /**
     * Main WC_CP_Configuration_Summary_Block instance. Ensures only one instance of WC_CP_Configuration_Summary_Block is loaded or can be loaded.
     *
     * @static
     * @return WC_CP_Configuration_Summary_Block
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
     * Construct.
     */
    public function __construct()
    {
    }
    /**
     * Init.
     */
    public function init()
    {
    }
    /**
     * Register the block.
     */
    private function register_block()
    {
    }
    /**
     * Render the block.
     *
     * @param array    $attributes Block attributes. Default empty array.
     * @param string   $content    Block content. Default empty string.
     * @param WP_Block $block      Block instance.
     *
     * @return string Rendered block type output.
     */
    public function render($attributes, $content, $block)
    {
    }
}
/**
 * Composited Products AJAX Handlers.
 *
 * @class    WC_CP_AJAX
 * @version  8.7.0
 */
class WC_CP_AJAX
{
    public static function init()
    {
    }
    /**
     * Display paged component options via ajax. Effective in 'thumbnails' mode only.
     */
    public static function show_component_options_ajax()
    {
    }
    /**
     * Ajax listener that fetches product markup when a new selection is made.
     *
     * @param  mixed $product_id
     * @param  mixed $item_id
     * @param  mixed $container_id
     * @return string
     */
    public static function show_composited_product_ajax($product_id = '', $component_id = '', $composite_id = '')
    {
    }
}
/**
 * Abstract WC_CP_Async_Request class.
 */
abstract class WC_CP_Async_Request
{
    /**
     * Prefix
     *
     * (default value: 'wp')
     *
     * @var string
     * @access protected
     */
    protected $prefix = 'wp';
    /**
     * Action
     *
     * (default value: 'async_request')
     *
     * @var string
     * @access protected
     */
    protected $action = 'async_request';
    /**
     * Identifier
     *
     * @var mixed
     * @access protected
     */
    protected $identifier;
    /**
     * Data
     *
     * (default value: array())
     *
     * @var array
     * @access protected
     */
    protected $data = array();
    /**
     * Initiate new async request
     */
    public function __construct()
    {
    }
    /**
     * Set data used during the request
     *
     * @param array $data Data.
     *
     * @return $this
     */
    public function data($data)
    {
    }
    /**
     * Dispatch the async request
     *
     * @return array|WP_Error
     */
    public function dispatch()
    {
    }
    /**
     * Get query args
     *
     * @return array
     */
    protected function get_query_args()
    {
    }
    /**
     * Get query URL
     *
     * @return string
     */
    protected function get_query_url()
    {
    }
    /**
     * Get post args
     *
     * @return array
     */
    protected function get_post_args()
    {
    }
    /**
     * Maybe handle
     *
     * Check for correct nonce and pass to handler.
     */
    public function maybe_handle()
    {
    }
    /**
     * Handle
     *
     * Override this method to perform any actions required
     * during the async request.
     */
    abstract protected function handle();
}
/**
 * Abstract WC_CP_Background_Process class.
 */
abstract class WC_CP_Background_Process extends \WC_CP_Async_Request
{
    /**
     * Action
     *
     * (default value: 'background_process')
     *
     * @var string
     * @access protected
     */
    protected $action = 'background_process';
    /**
     * Start time of current process.
     *
     * (default value: 0)
     *
     * @var int
     * @access protected
     */
    protected $start_time = 0;
    /**
     * Cron_hook_identifier
     *
     * @var mixed
     * @access protected
     */
    protected $cron_hook_identifier;
    /**
     * Cron_interval_identifier
     *
     * @var mixed
     * @access protected
     */
    protected $cron_interval_identifier;
    /**
     * Initiate new background process
     */
    public function __construct()
    {
    }
    /**
     * Dispatch
     *
     * @access public
     * @return void
     */
    public function dispatch()
    {
    }
    /**
     * Push to queue
     *
     * @param mixed $data Data.
     *
     * @return $this
     */
    public function push_to_queue($data)
    {
    }
    /**
     * Save queue
     *
     * @return $this
     */
    public function save()
    {
    }
    /**
     * Update queue
     *
     * @param string $key Key.
     * @param array  $data Data.
     *
     * @return $this
     */
    public function update($key, $data)
    {
    }
    /**
     * Delete queue
     *
     * @param string $key Key.
     *
     * @return $this
     */
    public function delete($key)
    {
    }
    /**
     * Generate key
     *
     * Generates a unique key based on microtime. Queue items are
     * given a unique key so that they can be merged upon save.
     *
     * @param int $length Length.
     *
     * @return string
     */
    protected function generate_key($length = 64)
    {
    }
    /**
     * Maybe process queue
     *
     * Checks whether data exists within the queue and that
     * the process is not already running.
     */
    public function maybe_handle()
    {
    }
    /**
     * Is queue empty
     *
     * @return bool
     */
    protected function is_queue_empty()
    {
    }
    /**
     * Is process running
     *
     * Check whether the current process is already running
     * in a background process.
     */
    protected function is_process_running()
    {
    }
    /**
     * Lock process
     *
     * Lock the process so that multiple instances can't run simultaneously.
     * Override if applicable, but the duration should be greater than that
     * defined in the time_exceeded() method.
     */
    protected function lock_process()
    {
    }
    /**
     * Unlock process
     *
     * Unlock the process so that other instances can spawn.
     *
     * @return $this
     */
    protected function unlock_process()
    {
    }
    /**
     * Get batch
     *
     * @return stdClass Return the first batch from the queue
     */
    protected function get_batch()
    {
    }
    /**
     * Handle
     *
     * Pass each queue item to the task handler, while remaining
     * within server memory and time limit constraints.
     */
    protected function handle()
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
    protected function memory_exceeded()
    {
    }
    /**
     * Get memory limit
     *
     * @return int
     */
    protected function get_memory_limit()
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
    protected function time_exceeded()
    {
    }
    /**
     * Complete.
     *
     * Override if applicable, but ensure that the below actions are
     * performed, or, call parent::complete().
     */
    protected function complete()
    {
    }
    /**
     * Schedule cron healthcheck
     *
     * @access public
     * @param mixed $schedules Schedules.
     * @return mixed
     */
    public function schedule_cron_healthcheck($schedules)
    {
    }
    /**
     * Handle cron healthcheck
     *
     * Restart the background process if not already running
     * and data exists in the queue.
     */
    public function handle_cron_healthcheck()
    {
    }
    /**
     * Schedule event
     */
    protected function schedule_event()
    {
    }
    /**
     * Clear scheduled event
     */
    protected function clear_scheduled_event()
    {
    }
    /**
     * Cancel Process
     *
     * Stop processing queue items, clear cronjob and delete batch.
     */
    public function cancel_process()
    {
    }
    /**
     * Task
     *
     * Override this method to perform any actions required on each
     * queue item. Return the modified item for further processing
     * in the next pass through. Or, return false to remove the
     * item from the queue.
     *
     * @param mixed $item Queue item to iterate over.
     *
     * @return mixed
     */
    abstract protected function task($item);
}
/**
 * Background Updater.
 *
 * Uses https://github.com/A5hleyRich/wp-background-processing to handle DB
 * updates in the background.
 *
 * @class    WC_CP_Background_Updater
 * @version  10.0.0
 */
class WC_CP_Background_Updater extends \WC_CP_Background_Process
{
    /**
     * Initiate new background process.
     */
    public function __construct()
    {
    }
    /**
     * Returns the cron action identifier.
     *
     * @since  3.13.1
     *
     * @return string
     */
    public function get_cron_hook_identifier()
    {
    }
    /**
     * Dispatch updater.
     */
    public function dispatch()
    {
    }
    /**
     * Handle cron healthcheck.
     *
     * Restart the background process if not already running and data exists in the queue.
     */
    public function handle_cron_healthcheck()
    {
    }
    /**
     * Schedule event.
     */
    protected function schedule_event()
    {
    }
    /**
     * Is the updater queue empty?
     *
     * @return boolean
     */
    public function is_update_queued()
    {
    }
    /**
     * Is the updater actually running?
     *
     * @return boolean
     */
    public function is_process_running()
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
    public function time_exceeded()
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
    public function memory_exceeded()
    {
    }
    /**
     * Runs update task and creates log entries.
     *
     * @param  string $callback
     * @return mixed
     */
    protected function task($callback)
    {
    }
    /**
     * When all tasks complete, update plugin db version and create log entry.
     */
    protected function complete()
    {
    }
}
/**
 * Composite products cart API and hooks.
 *
 * @class    WC_CP_Cart
 * @version  10.1.0
 */
class WC_CP_Cart
{
    /**
     * Globally accessible validation context for 'validate_composite_configuration'.
     * Possible values: 'add-to-cart'|'add-to-order'|'cart'.
     *
     * @var string|null
     */
    protected $validation_context = \null;
    /**
     * Flag to avoid infinite loops when removing a composite parent via a child.
     *
     * @var string
     */
    protected $removing_container_key = \null;
    /**
     * The single instance of the class.
     *
     * @var WC_CP_Cart
     *
     * @since 3.7.0
     */
    protected static $_instance = \null;
    /**
     * Main WC_CP_Cart instance.
     *
     * Ensures only one instance of WC_CP_Cart is loaded or can be loaded.
     *
     * @static
     * @return WC_CP_Cart
     * @since  3.7.0
     */
    public static function instance()
    {
    }
    /**
     * Cloning is forbidden.
     *
     * @since 3.7.0
     */
    public function __clone()
    {
    }
    /**
     * Unserializing instances of this class is forbidden.
     *
     * @since 3.7.0
     */
    public function __wakeup()
    {
    }
    /*
     * Setup hooks.
     */
    public function __construct()
    {
    }
    /**
     * Add hooks.
     *
     * @since  8.4.0
     */
    public function add_hooks()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Class Methods.
    |--------------------------------------------------------------------------
    */
    /**
     * Session data loaded?
     *
     * @since  3.14.6
     *
     * @param  string $context
     * @return string
     */
    public function is_cart_session_loaded()
    {
    }
    /**
     * Gets the current validation context.
     *
     * @since  3.13.5
     *
     * @return string|null
     */
    public function get_validation_context()
    {
    }
    /**
     * Adds a composite to the cart. Relies on specifying a composite configuration array with all necessary data - @see 'get_posted_composite_configuration()' for details.
     *
     * @param  mixed $product_id      ID of the composite to add to the cart.
     * @param  mixed $quantity        Quantity of the composite.
     * @param  array $configuration   Composite configuration - @see 'get_posted_composite_configuration()'.
     * @param  array $cart_item_data  Custom cart item data to pass to 'WC_Cart::add_to_cart()'.
     * @return string|WP_Error
     */
    public function add_composite_to_cart($product_id, $quantity, $configuration = array(), $cart_item_data = array())
    {
    }
    /**
     * Parses a composite configuration array to ensure that all mandatory cart item data fields are present.
     * Can also be used to get an array with the minimum required data to fill in before calling 'add_composite_to_cart'.
     *
     * @param  WC_Product_Composite $composite      Composite product whose configuration is being parsed or generated.
     * @param  array                $configuration  Initial configuration array to parse. Leave empty to get a minimum array that you can fill with data - @see 'get_posted_composite_configuration()'.
     * @param  boolean              $strict_mode    Set true to initialize component selection IDs to an empty string if undefined in the source array.
     * @return array
     */
    public function parse_composite_configuration($composite, $configuration = array(), $strict_mode = \false)
    {
    }
    /**
     * Build composite configuration array from posted data. Array example:
     *
     *    $config = array(
     *        134567890 => array(                       // ID of component.
     *            'product_id'        => 15,            // ID of selected option.
     *            'quantity'          => 2,             // Qty of selected product, will fall back to component min.
     *            'discount'          => 50.0,          // Component discount, defaults to the defined value.
     *            'attributes'        => array(         // Array of selected variation attribute names, sanitized.
     *                'attribute_color' => 'black',
     *                'attribute_size'  => 'medium'
     *             ),
     *            'variation_id'      => 43             // ID of chosen variation, if applicable.
     *        )
     *    );
     *
     * @param  mixed $composite
     * @return array
     */
    public function get_posted_composite_configuration($composite)
    {
    }
    /**
     * Rebuilds posted form data associated with a composite configuration.
     *
     * @since  3.14.0
     *
     * @param  WC_Product_Composite $composite
     * @param  array                $configuration
     * @return boolean
     */
    public function rebuild_posted_composite_form_data($configuration)
    {
    }
    /**
     * Validates the components in a composite configuration.
     *
     * @param  mixed        $product
     * @param  int          $composite_quantity
     * @param  array        $configuration
     * @param  array|string $args
     * @return boolean
     */
    public function validate_composite_configuration($composite, $composite_quantity, $configuration, $args = array())
    {
    }
    /**
     * Analyzes child items to characterize a composite.
     *
     * @since  3.14.0
     *
     * @param  array  $cart_item
     * @param  string $key
     * @return bool
     */
    public function container_cart_item_contains($cart_item, $key)
    {
    }
    /**
     * Modifies composited cart item virtual status and price depending on composite pricing and shipping strategies.
     *
     * @param  array                $cart_item
     * @param  WC_Product_Composite $composite
     * @return array
     */
    private function set_composited_cart_item($cart_item, $composite)
    {
    }
    /**
     * Get composited products prices with discounts.
     *
     * @param  int                  $product_id
     * @param  mixed                $variation_id
     * @param  string               $component_id
     * @param  WC_Product_Composite $composite
     * @return double
     */
    private function set_composited_cart_item_price($cart_item, $component_id, $composite)
    {
    }
    /**
     * Set container price equal to the base price.
     *
     * @param  array $cart_item
     * @return array
     */
    private function set_composite_container_cart_item($cart_item)
    {
    }
    /**
     * Refresh parent item configuration fields that might be out-of-date.
     *
     * @param  array                $cart_item
     * @param  WC_Product_Composite $composite
     * @return array
     */
    public function update_composite_container_cart_item_configuration($cart_item, $composite)
    {
    }
    /**
     * Refresh child item configuration fields that might be out-of-date.
     *
     * @param  array                $cart_item
     * @param  WC_Product_Composite $composite
     * @return array
     */
    public function update_composited_cart_item_configuration($cart_item, $composite)
    {
    }
    /**
     * Add a composited product to the cart. Must be done without updating session data, recalculating totals or calling 'woocommerce_add_to_cart' recursively.
     * For the recursion issue, see: https://core.trac.wordpress.org/ticket/17817.
     *
     * @param  int    $composite_id
     * @param  mixed  $product
     * @param  string $quantity
     * @param  int    $variation_id
     * @param  array  $variation
     * @param  array  $cart_item_data
     * @return bool
     */
    private function composited_add_to_cart($composite_id, $product, $quantity = 1, $variation_id = '', $variation = '', $cart_item_data = array())
    {
    }
    /**
     * Indicates whether a container item is being removed.
     *
     * @since  8.3.0
     *
     * @param  string $item_key
     * @return string
     */
    public function is_removing_container_cart_item($cart_item_key)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Filter Hooks.
    |--------------------------------------------------------------------------
    */
    /**
     * Redirect to the cart when updating a composite cart item.
     *
     * @param  string $url
     * @return string
     */
    public function update_composite_cart_redirect($url)
    {
    }
    /**
     * Filter the displayed notice after redirecting to the cart when updating a composite cart item.
     *
     * @param  string $url
     * @return string
     */
    public function update_composite_cart_redirect_message($message)
    {
    }
    /**
     * Check composite cart item configurations on cart load.
     */
    public function check_cart_items()
    {
    }
    /**
     * Add composite cart item data to validate.
     *
     * @since  6.1.2
     *
     * @param  array      $data
     * @param  WC_Product $product
     * @return array
     */
    public function cart_item_data_to_validate($data, $product)
    {
    }
    /**
     * Validates that all composited items chosen can be added-to-cart before actually starting to add items.
     *
     * @param  bool $add
     * @param  int  $product_id
     * @param  int  $quantity
     * @return bool
     */
    public function add_to_cart_validation($add, $product_id, $quantity, $variation_id = '', $variations = array(), $cart_item_data = array())
    {
    }
    /**
     * Adds configuration-specific cart-item data.
     *
     * @param  array $cart_item_data
     * @param  int   $product_id
     * @return void
     */
    public function add_cart_item_data($cart_item_data, $product_id)
    {
    }
    /**
     * Adds composited items to the cart.
     *
     * @param  string $composite_cart_key
     * @param  int    $composite_id
     * @param  int    $composite_quantity
     * @param  int    $variation_id
     * @param  array  $variation
     * @param  array  $cart_item_data
     * @return void
     */
    public function add_items_to_cart($composite_cart_key, $composite_id, $composite_quantity, $variation_id, $variation, $cart_item_data)
    {
    }
    /**
     * Modifies cart item data - important for the first calculation of totals only.
     *
     * @param  array  $cart_item
     * @param  string $cart_item_key
     * @return array
     */
    public function add_cart_item_filter($cart_item, $cart_item_key)
    {
    }
    /**
     * Load all composite-related session data.
     *
     * @param  array $cart_item
     * @param  array $item_session_values
     * @return void
     */
    public function get_cart_item_from_session($cart_item, $item_session_values)
    {
    }
    /**
     * Ensure any cart items marked as composited have a valid parent. If not, silently remove them.
     *
     * @param  WC_Cart $cart
     * @return void
     */
    public function cart_loaded_from_session($cart)
    {
    }
    /**
     * Keeps composited items' quantities in sync with container item.
     *
     * @param  string $cart_item_key
     * @param  int    $quantity
     * @return void
     */
    public function update_quantity_in_cart($cart_item_key, $quantity = 0)
    {
    }
    /**
     * Validates in-cart component quantity changes.
     *
     * @param  bool   $passed
     * @param  string $cart_item_key
     * @param  array  $cart_item
     * @param  int    $quantity
     * @return bool
     */
    public function update_cart_validation($passed, $cart_item_key, $cart_item, $quantity)
    {
    }
    /**
     * Cart item remove handler.
     *
     * @since 8.3.0
     *
     * @return void
     */
    public function update_cart_action_remove_item()
    {
    }
    /**
     * Remove child cart items with parent.
     *
     * @throws Exception
     *
     * @param  string  $cart_item_key
     * @param  WC_Cart $cart
     * @return void
     */
    public function cart_item_remove($cart_item_key, $cart)
    {
    }
    /**
     * Restore child cart items with parent.
     *
     * @param  string  $cart_item_key
     * @param  WC_Cart $cart
     * @return void
     */
    public function cart_item_restore($cart_item_key, $cart)
    {
    }
    /**
     * Shipping fix - add the value of any children that are not shipped individually to the container value and, optionally, add their weight to the container weight, as well.
     *
     * @param  array $packages
     * @return array
     */
    public function cart_shipping_packages($packages)
    {
    }
    /**
     * "Sold Individually" context support under WC 3.5+.
     *
     * @since  3.14.6
     *
     * @param  bool  $found
     * @param  int   $product_id
     * @param  int   $variation_id
     * @param  array $cart_item
     * @return bool
     */
    public function sold_individually_found_in_cart($found, $product_id, $variation_id, $cart_item)
    {
    }
}
/**
 * Maintains component view state.
 *
 * @class    WC_CP_Component_View
 * @version  8.4.2
 */
class WC_CP_Component_View
{
    /**
     * A reference to the component whose state is being maintained here.
     *
     * @var WC_CP_Component
     */
    private $component;
    /**
     * Instantiated component options in this view.
     *
     * @var int
     */
    private $option_instances = 0;
    /**
     * The current component options query instance.
     *
     * @var WC_CP_Query
     */
    private $query = \null;
    /**
     * Constructor.
     *
     * @param  WC_CP_Component $component
     */
    public function __construct($component)
    {
    }
    /**
     * Component getter.
     *
     * @return WC_CP_Component
     */
    public function get_component()
    {
    }
    /**
     * True if the component view has been set.
     *
     * @return boolean
     */
    public function is_set()
    {
    }
    /**
     * Get the query object that was used to build the component options view of a component.
     * Should be called after {@see get_options} has been used to initialize the component view.
     *
     * @return WC_CP_Query
     */
    public function get_options_query()
    {
    }
    /**
     * Initializes the query object required by this view.
     *
     * @since  3.12.0
     *
     * @return void
     */
    public function initialize()
    {
    }
    /**
     * Get component options to display. Fetched using a WP Query wrapper to allow advanced component options filtering / ordering / pagination.
     *
     * @param  array $args
     * @return array
     */
    public function get_options($args = array())
    {
    }
    /**
     * Filter option IDs matching specific state IDs.
     *
     * @since  8.0.0
     *
     * @param  array $options
     * @param  array $scenarios
     * @return array
     */
    private function filter_options_in_states($options, $states)
    {
    }
    /**
     * Filter option IDs hidden in scenarios.
     *
     * @since  8.0.0
     *
     * @param  array $options
     * @param  array $scenarios
     * @return array
     */
    private function filter_conditional_options($options, $scenarios)
    {
    }
    /**
     * Get component options data for use by JS.
     *
     * @param  array $args
     * @return array
     */
    public function get_options_data($args = array())
    {
    }
    /**
     * Returns the number of option instances created in this view.
     *
     * @since  7.0.0
     * @return int
     */
    public function get_option_instances()
    {
    }
    /**
     * Returns the total number of displayed products up to this component in this request.
     *
     * @since  6.1.4
     * @return int
     */
    private function get_aggregated_option_instances()
    {
    }
    /**
     * Get the currently selected option (product ID) in a component view.
     *
     * @return int
     */
    public function get_selected_option()
    {
    }
    /**
     * Are component options paged?
     *
     * @return boolean
     */
    public function has_pages()
    {
    }
    /**
     * Get the currently viewed page, if applicable.
     *
     * @return int|false
     */
    public function get_page()
    {
    }
    /**
     * Get the total number of pages.
     *
     * @return int|false
     */
    public function get_pages()
    {
    }
    /**
     * Get pagination data.
     *
     * @return int|false
     */
    public function get_pagination_data()
    {
    }
}
/**
 * Component abstraction. Contains data and maintains view state.
 *
 * @class    WC_CP_Component
 * @version  9.0.0
 */
class WC_CP_Component implements \ArrayAccess
{
    /**
     * The view state of the component.
     *
     * @var WC_CP_Component_View
     */
    public $view;
    /**
     * The component ID.
     *
     * @var string
     */
    private $id;
    /**
     * The component data.
     *
     * @var array
     */
    private $data = array();
    /**
     * The composite product that the component belongs to.
     *
     * @var WC_Product_Composite
     */
    private $composite;
    /**
     * Component options.
     *
     * @var array
     */
    public $options;
    /**
     * Component products.
     *
     * @var array
     */
    public $products;
    /**
     * Component options count.
     *
     * @var int
     */
    public $options_count;
    /**
     * Index of this component.
     *
     * @var int
     */
    public $index;
    /**
     * Constructor.
     *
     * @param  WC_Product_Composite $composite
     */
    public function __construct($id, $composite)
    {
    }
    /**
     * Composite product getter.
     *
     * @return WC_Product_Composite
     */
    public function get_composite()
    {
    }
    /**
     * Composite product getter.
     *
     * @return WC_Product_Composite
     */
    public function get_composite_id()
    {
    }
    /**
     * Component ID getter.
     *
     * @return string
     */
    public function get_id()
    {
    }
    /**
     * Component data getter.
     *
     * @return array
     */
    public function get_data()
    {
    }
    /**
     * Component options getter. Returns all product IDs added in this component.
     *
     * @return array
     */
    public function get_options()
    {
    }
    /**
     * Get the component title.
     *
     * @return string
     */
    public function get_title()
    {
    }
    /**
     * Get the component slug.
     *
     * @since  4.0.0
     *
     * @return string
     */
    public function get_slug()
    {
    }
    /**
     * Get the component description.
     *
     * @return string
     */
    public function get_description()
    {
    }
    /**
     * Get the component discount, if applicable.
     *
     * @return mixed   If numeric value is set, then return float. If discount is not set, return empty string.
     */
    public function get_discount()
    {
    }
    /**
     * Get the component min/max quantity.
     *
     * @param  string $min_or_max
     * @return boolean
     */
    public function get_quantity($min_or_max)
    {
    }
    /**
     * True if the component has only one option and is not optional.
     *
     * @return boolean
     */
    public function is_static()
    {
    }
    /**
     * True if the component is optional.
     *
     * @return boolean
     */
    public function is_optional()
    {
    }
    /**
     * True if the component is priced individually.
     *
     * @return boolean
     */
    public function is_priced_individually()
    {
    }
    /**
     * True if the component is shipped individually.
     *
     * @return boolean
     */
    public function is_shipped_individually()
    {
    }
    /**
     * Controls whether the options of this component will be lazy loaded.
     *
     * @since  7.0.0
     * @return boolean
     */
    public function is_lazy_loaded()
    {
    }
    /**
     * Get the default option/product ID.
     *
     * @param  bool $check_posted
     * @return int|''
     */
    public function get_default_option($check_posted = \false)
    {
    }
    /**
     * Create a product wrapper object from an option/product ID.
     *
     * @param  int $product_id
     * @return WC_CP_Product|false
     */
    public function get_option($product_id)
    {
    }
    /**
     * True if add-ons are disabled in this component.
     *
     * @return boolean
     */
    public function disable_addons()
    {
    }
    /**
     * Get the default method to order the options of the component.
     *
     * @return string
     */
    public function get_default_sorting_order()
    {
    }
    /**
     * Indicates whether component sorting options are enabled.
     *
     * @since  3.14.0
     *
     * @return array
     */
    public function show_sorting_options()
    {
    }
    /**
     * Get component sorting options, if enabled.
     *
     * @return array
     */
    public function get_sorting_options()
    {
    }
    /**
     * Indicates whether component filtering options are enabled.
     *
     * @since  3.14.0
     *
     * @return array
     */
    public function show_filtering_options()
    {
    }
    /**
     * Returns all taxonomy IDs used to populate attribute filters.
     *
     * @since  3.14.0
     *
     * @return array
     */
    public function get_attribute_filters()
    {
    }
    /**
     * Get component filtering options, if enabled.
     *
     * @return array
     */
    public function get_filtering_options()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Templating methods.
    |--------------------------------------------------------------------------
    */
    /**
     * The index of this component.
     *
     * @since  7.0.0
     *
     * @return int
     */
    public function get_index()
    {
    }
    /**
     * Select action.
     *
     * @since  4.0.0
     *
     * @return string
     */
    public function get_select_action()
    {
    }
    /**
     * Indicates whether to show an empty placeholder dropdown option. By default a placeholder is displayed when the component has no default option.
     *
     * @return boolean
     */
    public function show_placeholder_option()
    {
    }
    /**
     * Component options selection style.
     *
     * @return string
     */
    public function get_options_style()
    {
    }
    /**
     * Thumbnail loop columns count.
     *
     * @return int
     */
    public function get_columns()
    {
    }
    /**
     * Thumbnail loop results per page.
     *
     * @return int
     */
    public function get_results_per_page()
    {
    }
    /**
     * Options pagination style.
     *
     * @since  3.12.0
     *
     * @return string
     */
    public function get_pagination_style()
    {
    }
    /**
     * Controls whether component options loaded via ajax will be appended or paginated.
     * When incompatible component options are set to be hidden, pagination cannot be used for simplicity.
     *
     * @return boolean
     */
    public function paginate_options()
    {
    }
    /**
     * Controls whether out of stock component options should be hidden.
     *
     * @since  8.0.3
     *
     * @return boolean
     */
    public function exclude_out_of_stock_options()
    {
    }
    /**
     * Component pagination data.
     *
     * @return array
     */
    public function get_pagination_data()
    {
    }
    /**
     * Controls whether disabled component options will be hidden instead of greyed-out.
     *
     * @return boolean
     */
    public function hide_disabled_options()
    {
    }
    /**
     * Get component placeholder image data.
     *
     * @return array
     */
    public function get_image_data()
    {
    }
    /**
     * Image size to use in Thumbnail grid and Summary template.
     *
     * @since  3.13.7
     * @return string
     */
    public function get_image_size()
    {
    }
    /**
     * Create an array of classes to use in the component layout templates.
     *
     * @return array
     */
    public function get_classes()
    {
    }
    /**
     * True if the selected option title is hidden.
     *
     * @return boolean
     */
    public function hide_selected_option_title()
    {
    }
    /**
     * True if the selected option description is hidden.
     *
     * @return boolean
     */
    public function hide_selected_option_description()
    {
    }
    /**
     * True if the selected option thumbnail is hidden.
     *
     * @return boolean
     */
    public function hide_selected_option_thumbnail()
    {
    }
    /**
     * True if the selected option thumbnail is hidden.
     *
     * @return boolean
     */
    public function hide_selected_option_price()
    {
    }
    /**
     * True if component option prices need to be hidden.
     *
     * @return boolean
     */
    public function hide_component_option_prices()
    {
    }
    /**
     * Subtotal visibility in the product/cart/order templates.
     *
     * @return boolean
     */
    public function is_subtotal_visible($where = 'product')
    {
    }
    /**
     * Price display format.
     *
     * @since  3.12.0
     *
     * @return string
     */
    public function get_price_display_format()
    {
    }
    /**
     * Price display settings.
     *
     * @since  5.0.0
     *
     * @return string
     */
    public function get_price_display_settings()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Array access methods for back-compat in templates.
    |--------------------------------------------------------------------------
    */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
    }
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
    }
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
    }
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Static API methods.
    |--------------------------------------------------------------------------
    */
    /**
     * Fetches component options. The query is configured based on the data stored in the 'component_data' array.
     * Note that the query parameters are filterable - @see 'WC_CP_Query' class for details.
     *
     * @param  array $component_data
     * @param  array $query_args
     * @return array
     */
    public static function query_component_options($component_data, $query_args = array())
    {
    }
    /**
     * Get composite selection styles.
     *
     * @return array
     */
    public static function get_options_styles()
    {
    }
    /**
     * Get composite selection style data.
     *
     * @param  string $style_id
     * @return array|false
     */
    public static function get_options_style_data($style_id)
    {
    }
    /**
     * True if a selection style supports a given functionality.
     *
     * @param  string $style_id
     * @param  string $what
     * @return bool
     */
    public static function options_style_supports($style_id, $what)
    {
    }
    /**
     * Set/upload component thumbnail.
     *
     * @since  3.11.0
     *
     * @param  int                  $thumbnail_id
     * @param  string               $thumbnail_src
     * @param  WC_Product_Composite $product
     * @return integer|false
     */
    public static function set_thumbnail($thumbnail_id, $thumbnail_src, $product)
    {
    }
    /**
     * "Display Price" options:
     *
     * - Absolute
     * - Relative
     * - Hidden
     *
     * @since  3.12.0
     *
     * @return array
     */
    public static function get_price_display_options()
    {
    }
    /**
     * "Pagination Style" options:
     *
     * - Absolute
     * - Relative
     * - Hidden
     *
     * @since  3.12.0
     *
     * @return array
     */
    public static function get_pagination_style_options()
    {
    }
    /**
     * "Option Select Action" options:
     *
     * - View Selection Details
     * - View Next Component
     *
     * @since  4.0.0
     *
     * @return array
     */
    public static function get_select_action_options()
    {
    }
}
/**
 * Composite Products Coupon functions and filters.
 *
 * @class    WC_CP_Coupon
 * @version  4.1.0
 */
class WC_CP_Coupon
{
    /*
     * Initilize.
     */
    public static function init()
    {
    }
    /**
     * Inherit coupon validity from parent:
     *
     * - Coupon is invalid for child item if parent is excluded.
     * - Coupon is valid for child item if valid for parent, unless child item is excluded.
     *
     * @param  bool       $valid
     * @param  WC_Product $product
     * @param  WC_Coupon  $coupon
     * @param  array      $item
     * @return bool
     */
    public static function coupon_validity($valid, $product, $coupon, $item)
    {
    }
}
/**
 * Composite Products display functions and filters.
 *
 * @class    WC_CP_Display
 * @version  9.1.1
 */
class WC_CP_Display
{
    /**
     * Keep track of whether the bundled table JS has already been enqueued.
     *
     * @var boolean
     */
    private $enqueued_composited_table_item_js = \false;
    /**
     * Workaround for $order arg missing from 'woocommerce_order_item_name' filter - set within the 'woocommerce_order_item_class' filter - @see 'order_item_class()'.
     *
     * @var false|WC_Order
     */
    private $order_item_order = \false;
    /**
     * Runtime cache.
     *
     * @var bool
     */
    private $display_cart_prices_incl_tax;
    /**
     * The single instance of the class.
     *
     * @var WC_CP_Display
     *
     * @since 3.7.0
     */
    protected static $_instance = \null;
    /**
     * Main WC_CP_Display instance.
     *
     * Ensures only one instance of WC_CP_Display is loaded or can be loaded.
     *
     * @static
     * @return WC_CP_Display
     * @since  3.7.0
     */
    public static function instance()
    {
    }
    /**
     * Cloning is forbidden.
     *
     * @since 3.7.0
     */
    public function __clone()
    {
    }
    /**
     * Unserializing instances of this class is forbidden.
     *
     * @since 3.7.0
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
     * Front-end JS templates.
     */
    public function frontend_js_templates()
    {
    }
    /**
     * Front-end styles and scripts.
     */
    public function frontend_scripts()
    {
    }
    /**
     * Enqeue js that wraps child line items in a div in order to apply indentation reliably.
     * This obviously sucks but if you can find a CSS-only way to do it better that works reliably with any theme out there, drop us a line, will you?
     *
     * @return void
     */
    private function enqueue_composited_table_item_js()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Single-product.
    |--------------------------------------------------------------------------
    */
    /**
     * Display info notice when calculating the price of a composite product.
     */
    public function add_price_calc_task_notice()
    {
    }
    /**
     * Display info notice when editing a composite product.
     */
    public function add_edit_in_cart_notice()
    {
    }
    /**
     * Modify structured data for composite products.
     *
     * @param  array      $data
     * @param  WC_Product $product
     * @return array
     */
    public function structured_product_data($data, $product)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Cart.
    |--------------------------------------------------------------------------
    */
    /**
     * Back-compat wrapper for 'WC_Cart::display_price_including_tax'.
     *
     * @since  7.0.5
     *
     * @return string
     */
    public function display_cart_prices_including_tax()
    {
    }
    /**
     * Outputs a formatted subtotal.
     *
     * @param  WC_Product $product
     * @param  string     $subtotal
     * @return string
     */
    public function format_subtotal($product, $subtotal)
    {
    }
    /**
     * Modifies the cart.php & review-order.php templates formatted html prices visibility depending on pricing strategy.
     *
     * @param  string $price
     * @param  array  $cart_item
     * @param  string $cart_item_key
     * @return string
     */
    public function cart_item_price($price, $cart_item, $cart_item_key)
    {
    }
    /**
     *
     * Aggregates parent + child cart item prices.
     *
     * @param  string $price
     * @param  array  $cart_item
     * @param  string $cart_item_key
     * @return string
     */
    private function get_container_cart_item_price($price, $cart_item, $cart_item_key)
    {
    }
    /**
     * Aggregates parent + child cart item prices.
     *
     * @since  8.4.0
     *
     * @param  array $cart_item
     * @return string
     */
    public function get_container_cart_item_price_amount($cart_item, $type)
    {
    }
    /**
     *
     * Modifies child cart item prices.
     *
     * @since  3.14.0
     *
     * @param  string $price
     * @param  array  $cart_item
     * @param  string $cart_item_key
     * @return string
     */
    private function get_child_cart_item_price($price, $cart_item, $cart_item_key)
    {
    }
    /**
     *
     * Aggregates parent + child cart item subtotals.
     *
     * @param  string $subtotal
     * @param  array  $cart_item
     * @param  string $cart_item_key
     * @return string
     */
    private function get_container_cart_item_subtotal($subtotal, $cart_item, $cart_item_key)
    {
    }
    /**
     * Aggregates cart item subtotals.
     *
     * @param  array  $cart_item
     * @param  string $type
     * @return float
     */
    public function get_container_cart_item_subtotal_amount($cart_item, $type)
    {
    }
    /**
     *
     * Modifies child cart item subtotals.
     *
     * @since  3.14.0
     *
     * @param  string $subtotal
     * @param  array  $cart_item
     * @param  string $cart_item_key
     * @return string
     */
    private function get_child_cart_item_subtotal($subtotal, $cart_item, $cart_item_key)
    {
    }
    /**
     * Modifies line item subtotals in the 'cart.php' & 'review-order.php' templates.
     *
     * @param  string $price
     * @param  array  $cart_item
     * @param  string $cart_item_key
     * @return string
     */
    public function cart_item_subtotal($subtotal, $cart_item, $cart_item_key)
    {
    }
    /**
     * Composited item quantities may be changed between min_q and max_q.
     *
     * @param  string $quantity
     * @param  string $cart_item_key
     * @return string
     */
    public function cart_item_quantity($quantity, $cart_item_key)
    {
    }
    /**
     * Composited items can't be removed individually from the cart.
     *
     * @param  string $link
     * @param  string $cart_item_key
     * @return string
     */
    public function cart_item_remove_link($link, $cart_item_key)
    {
    }
    /**
     * Change the tr class of composite parent/child items in cart templates to allow their styling.
     *
     * @param  string $classname
     * @param  array  $cart_item
     * @return string
     */
    public function cart_item_class($classname, $cart_item)
    {
    }
    /**
     * Change the li class of composite parent/child items in mini-cart templates to allow their styling.
     *
     * @param  string $classname
     * @param  array  $cart_item
     * @return string
     */
    public function mini_cart_item_class($classname, $cart_item)
    {
    }
    /**
     * Adds order item title preambles to cart items ( Composite Attribute Descriptions ).
     *
     * @param  string $content
     * @param  array  $cart_item
     * @param  string $cart_item_key
     * @return string
     */
    public function cart_item_component_name($content, $cart_item, $cart_item_key, $append_qty = \false)
    {
    }
    /**
     * Delete composited item quantity from the review-order.php template. Quantity is inserted into the product name by 'cart_item_component_name'.
     *
     * @param  string $quantity
     * @param  array  $cart_item
     * @param  string $cart_key
     * @return string
     */
    public function cart_item_component_quantity($quantity, $cart_item, $cart_key)
    {
    }
    /**
     * Filters the reported number of cart items - counts only composite containers.
     *
     * @param  int      $count
     * @param  WC_Order $order
     * @return int
     */
    public function cart_contents_count($count)
    {
    }
    /**
     * Add composited items as meta to the parent item.
     *
     * @param  array $data
     * @param  array $cart_item
     * @return array
     */
    public function cart_item_data($data, $cart_item)
    {
    }
    /**
     * Rendering cart widget?
     *
     * @since  3.14.0
     * @return boolean
     */
    protected function is_cart_widget()
    {
    }
    /**
     * Add cart widget filters.
     */
    public function add_cart_widget_filters()
    {
    }
    /**
     * Remove cart widget filters.
     */
    public function remove_cart_widget_filters()
    {
    }
    /**
     * Tweak composite container qty.
     *
     * @param  bool   $qty
     * @param  array  $cart_item
     * @param  string $cart_item_key
     * @return bool
     */
    public function cart_widget_item_qty($qty, $cart_item, $cart_item_key)
    {
    }
    /**
     * Do not show composited items.
     *
     * @param  bool   $qty
     * @param  array  $cart_item
     * @param  string $cart_item_key
     * @return bool
     */
    public function cart_widget_item_visible($show, $cart_item, $cart_item_key)
    {
    }
    /**
     * Tweak composite container/child name.
     *
     * @param  bool   $qty
     * @param  array  $cart_item
     * @param  string $cart_item_key
     * @return bool
     */
    public function cart_widget_item_name($name, $cart_item, $cart_item_key)
    {
    }
    /**
     * Adds content data as parent item meta in the mini-cart.
     *
     * @param  array $data
     * @param  array $cart_item
     * @return array
     */
    public function cart_widget_container_item_data($data, $cart_item)
    {
    }
    /**
     * Gets bundled content data.
     *
     * @since  3.14.0
     *
     * @param  array $cart_item
     * @return array
     */
    public function get_composite_container_cart_item_data($cart_item, $arg = array())
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Orders.
    |--------------------------------------------------------------------------
    */
    /**
     * Modify the subtotal of order items depending on their pricing setup.
     *
     * @param  string        $subtotal
     * @param  WC_Order_Item $item
     * @param  WC_Order      $order
     * @return string
     */
    public function order_item_subtotal($subtotal, $item, $order)
    {
    }
    /**
     * Adds component title preambles to order-details template.
     *
     * @param  string $content
     * @param  array  $order_item
     * @return string
     */
    public function order_item_component_name($content, $order_item)
    {
    }
    /**
     * Delete composited item quantity from order-details template. Quantity is inserted into the product name by 'order_item_component_name'.
     *
     * @param  string $content
     * @param  array  $order_item
     * @return string
     */
    public function order_item_component_quantity($content, $order_item)
    {
    }
    /**
     * Add 'component_table_item' class to child items in order templates.
     *
     * @param  string $classname
     * @param  array  $order_item
     * @return string
     */
    public function order_item_class($classname, $order_item, $order)
    {
    }
    /**
     * Filters the reported number of order items - counts only composite containers.
     *
     * @param  int      $count
     * @param  string   $type
     * @param  WC_Order $order
     * @return int
     */
    public function order_item_count($count, $type, $order)
    {
    }
    /**
     * Sets the 'order_item_order' prop.
     *
     * @param  WC_Order $order
     */
    public function set_order_item_order($order)
    {
    }
    /**
     * Indent composited items in emails.
     *
     * @param  string $css
     * @return string
     */
    public function email_styles($css)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Other.
    |--------------------------------------------------------------------------
    */
    /**
     * Inserts bundle contents after main wishlist bundle item is displayed.
     *
     * @param  array $item
     * @param  array $wishlist
     * @return void
     */
    public function wishlist_after_list_item_name($item, $wishlist)
    {
    }
    /**
     * Modifies wishlist bundle item price - the precise sum cannot be displayed reliably unless the item is added to the cart.
     *
     * @param  double $price
     * @param  array  $item
     * @param  array  $wishlist
     * @return string  $price
     */
    public function wishlist_list_item_price($price, $item, $wishlist)
    {
    }
    /**
     * Enhance price filter widget meta query to include results based on max '_wc_sw_max_price' meta.
     *
     * @param  array    $meta_query
     * @param  WC_Query $wc_query
     * @return array
     */
    public function price_filter_query_params($meta_query, $wc_query)
    {
    }
}
/**
 * Helper functions.
 *
 * @class    WC_CP_Helpers
 * @version  9.0.5
 */
class WC_CP_Helpers
{
    /**
     * General-purpose runtime key/value cache.
     *
     * @var array
     */
    private static $cache = array();
    /**
     * Flag indicating whether 'get_extended_price_precision' is being used to filter WC decimals.
     *
     * @var boolean
     */
    private static $filtering_price_decimals = \false;
    /**
     * Simple runtime cache getter.
     *
     * @param  string $key
     * @param  string $group_key
     * @return mixed
     */
    public static function cache_get($key, $group_key = '')
    {
    }
    /**
     * Simple runtime cache setter.
     *
     * @param  string $key
     * @param  mixed  $value
     * @param  string $group_key
     * @return void
     */
    public static function cache_set($key, $value, $group_key = '')
    {
    }
    /**
     * Simple runtime cache unsetter.
     *
     * @param  string $key
     * @param  mixed  $value
     * @param  string $group_key
     * @return void
     */
    public static function cache_delete($key, $group_key = '')
    {
    }
    /**
     * Simple runtime group cache invalidator.
     *
     * @since  7.1.4
     *
     * @param  string $key
     * @param  string $group_key
     * @param  mixed  $value
     * @return void
     */
    public static function cache_invalidate($group_key = '')
    {
    }
    /**
     * True when processing a FE request.
     *
     * @return boolean
     */
    public static function is_front_end()
    {
    }
    /**
     * Filters the 'woocommerce_price_num_decimals' option to use the internal WC rounding precision.
     */
    public static function extend_price_display_precision()
    {
    }
    /**
     * Reset applied filters to the 'woocommerce_price_num_decimals' option.
     */
    public static function reset_price_display_precision()
    {
    }
    /**
     * Get extended rounding precision.
     *
     * @since  8.0.2
     *
     * @param  int $decimals
     * @return int
     */
    public static function get_extended_price_precision($decimals = \null)
    {
    }
    /**
     * Loads variation IDs for a given variable product.
     *
     * @param  WC_Product_Variable|int $product
     * @return array
     */
    public static function get_product_variations($product)
    {
    }
    /**
     * Loads variation descriptions and ids for a given variable product.
     *
     * @param  WC_Product_Variable|int $product
     * @param  string                  $format
     * @return array
     */
    public static function get_product_variation_descriptions($product, $format = 'flat')
    {
    }
    /**
     * Return a formatted variation title.
     *
     * @param  WC_Product_Variation|int $variation
     * @param  string                   $format
     *
     * @return string
     */
    public static function get_product_variation_title($variation, $format = 'flat')
    {
    }
    /**
     * Return a formatted product title.
     *
     * @param  WC_Product|int $product
     * @param  string         $title
     * @param  string         $meta
     * @return string
     */
    public static function get_product_title($product, $title = '', $meta = '')
    {
    }
    /**
     * Format a product title.
     *
     * @param  string $title
     * @param  string $identifier
     * @param  string $meta
     * @param  string $paren
     * @return string
     */
    public static function format_product_title($title, $identifier = '', $meta = '', $paren = \true)
    {
    }
    /**
     * Format prices without html content.
     *
     * @param  mixed $price
     * @param  array $args
     * @return string
     */
    public static function format_raw_price($price, $args = array())
    {
    }
    /**
     * Version of 'in_array' operating on the values of an input array.
     *
     * @since  3.9.0
     *
     * @param  array $array
     * @param  mixed $key
     * @param  mixed $value
     * @return boolean
     */
    public static function in_array_key($array, $key, $value)
    {
    }
    /**
     * Recursive version of 'urlencode' for multidimensional assosciative arrays.
     *
     * @since  3.14.0
     *
     * @param  function $array
     * @param  array    $escaped_array
     * @return array
     */
    public static function urlencode_recursive($array)
    {
    }
    /**
     * Get a new product instance, preserving runtime meta from another one.
     *
     * @since  7.0.7
     *
     * @param  WC_Product $product
     * @return WC_Product
     */
    public static function get_product_preserving_meta($product)
    {
    }
}
/**
 * Class to represent stock-managed items.
 *
 * @class  WC_CP_Array
 * @since  9.0.0
 */
class WC_CP_Array implements \ArrayAccess
{
    private $registry = array();
    public function __construct($data = array())
    {
    }
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
    }
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
    }
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
    }
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
    }
    public function import($data)
    {
    }
}
/**
 * Handles installation and updating tasks. Not much to see here, folks!
 *
 * @class    WC_CP_Install
 * @version  9.0.3
 */
class WC_CP_Install
{
    /** @var array DB updates and callbacks that need to be run per version */
    private static $db_updates = array('3.7.0' => array('wc_cp_update_370_main', 'wc_cp_update_370_delete_unused_meta', 'wc_cp_update_370_db_version'), '3.8.0' => array('wc_cp_update_380_main', 'wc_cp_update_380_delete_unused_meta', 'wc_cp_update_380_db_version'));
    /**
     * Background update class.
     *
     * @var WC_CP_Background_Updater
     */
    private static $background_updater;
    /**
     * Current plugin version.
     *
     * @var string
     */
    private static $current_version;
    /**
     * Current DB version.
     *
     * @var string
     */
    private static $current_db_version;
    /**
     * Hook in tabs.
     */
    public static function init()
    {
    }
    /**
     * Adds support for the Composite type.
     *
     * @param  array $types
     * @return array
     */
    public static function add_composite_type($types)
    {
    }
    /**
     * Init background updates.
     */
    public static function init_background_updater()
    {
    }
    /**
     * Installation needed?
     *
     * @return boolean
     */
    private static function must_install()
    {
    }
    /**
     * Installation possible?
     *
     * @since  3.12.0
     *
     * @param  boolean $check_installing
     * @return boolean
     */
    private static function can_install($check_installing = \true)
    {
    }
    /**
     * Check version and run the installer if necessary.
     *
     * @since  3.12.0
     */
    public static function maybe_install()
    {
    }
    /**
     * DB update needed?
     *
     * @since  3.12.0
     *
     * @return boolean
     */
    private static function must_update()
    {
    }
    /**
     * DB update possible?
     *
     * @since  3.12.0
     *
     * @param  boolean $check_installing
     * @return boolean
     */
    private static function can_update($check_installing = \true)
    {
    }
    /**
     * Run the updater if triggered.
     *
     * @since  3.12.0
     */
    public static function maybe_update()
    {
    }
    /**
     * If the DB version is out-of-date, a DB update must be in progress: define a 'WC_CP_UPDATING' constant.
     */
    public static function define_updating_constant()
    {
    }
    /**
     * Install CP.
     */
    public static function install()
    {
    }
    /**
     * Set up the database tables which the plugin needs to function.
     *
     * Tables:
     *     wc_order_composite_lookup - Used for the analytics.
     *
     * @since  8.3.0
     */
    private static function create_tables()
    {
    }
    /**
     * Schedule cron events.
     *
     * @since 8.5.1
     */
    public static function create_events()
    {
    }
    /**
     * Get table schema.
     *
     * @since  8.3.0
     *
     * @return string
     */
    private static function get_schema()
    {
    }
    /**
     * Update WC CP version to current.
     */
    private static function update_version()
    {
    }
    /**
     * Push all needed DB updates to the queue for processing.
     */
    private static function update()
    {
    }
    /**
     * Is auto-updating enabled?
     *
     * @since  3.12.0
     *
     * @return boolean
     */
    public static function auto_update_enabled()
    {
    }
    /**
     * Trigger DB update.
     *
     * @since  3.12.0
     */
    public static function trigger_update()
    {
    }
    /**
     * Force re-start the update cron if everything else fails.
     */
    public static function force_update()
    {
    }
    /**
     * Updates plugin DB version when all updates have been processed.
     */
    public static function update_complete()
    {
    }
    /**
     * True if a DB update is pending.
     *
     * @return boolean
     */
    public static function is_update_pending()
    {
    }
    /**
     * True if a DB update was started but not completed.
     *
     * @since  3.12.0
     *
     * @return boolean
     */
    public static function is_update_incomplete()
    {
    }
    /**
     * True if an update is in progress.
     *
     * @since  3.12.0
     *
     * @return boolean
     */
    public static function is_update_queued()
    {
    }
    /**
     * True if an update process is running.
     *
     * @return boolean
     */
    public static function is_update_process_running()
    {
    }
    /**
     * Update DB version to current.
     *
     * @param  string $version
     */
    public static function update_db_version($version = \null)
    {
    }
    /**
     * Get list of DB update callbacks.
     *
     * @since  3.12.0
     *
     * @return array
     */
    public static function get_db_update_callbacks()
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
}
/**
 * Admin notices handling.
 *
 * @class    WC_CP_Notices
 * @version  8.3.2
 */
class WC_CP_Notices
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
     * @return array
     */
    public static function set_notice_option($notice_name, $key, $value)
    {
    }
    /**
     * Save notice options to the DB.
     */
    public static function save_notice_options()
    {
    }
}
/**
 * Order-again functions and filters.
 *
 * @class    WC_CP_Order_Again
 * @version  8.3.0
 */
class WC_CP_Order_Again
{
    /*
     * Initilize.
     */
    public static function init()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Filter hooks.
    |--------------------------------------------------------------------------
    */
    /**
     * Inialize cart item data when re-ordering.
     * Depending on whether cart session data is loaded, a different technique is needed.
     *
     * @param  array    $cart_item
     * @param  array    $order_item
     * @param  WC_Order $order
     * @return array
     */
    public static function order_again_cart_item_data($cart_item, $order_item, $order)
    {
    }
    /**
     * Initialize parent-child associations from order-again keys.
     *
     * @param  array $cart_item
     * @param  array $cart_session_item
     * @param  array $cart_item_key
     * @return array
     */
    public static function get_cart_item_from_session($cart_item, $cart_session_item, $cart_item_key)
    {
    }
    /**
     * Finalize parent-child associations from order-again keys.
     *
     * @param  WC_Cart $cart
     * @return void
     */
    public static function cart_loaded_from_session($cart)
    {
    }
}
/**
 * Composite order-related filters and functions.
 *
 * @class    WC_CP_Order
 * @version  10.0.0
 */
class WC_CP_Order
{
    /**
     * Flag to short-circuit 'WC_CP_Order::get_order_items'.
     *
     * @var boolean
     */
    public static $override_order_items_filter = \false;
    /**
     * Flag to short-circuit 'WC_CP_Order::get_product_from_item'.
     *
     * @var boolean
     */
    public static $override_product_from_item_filter = \false;
    /**
     * The single instance of the class.
     *
     * @var WC_CP_Order
     *
     * @since 3.7.0
     */
    protected static $_instance = \null;
    /**
     * Main WC_CP_Order instance.
     *
     * Ensures only one instance of WC_CP_Order is loaded or can be loaded.
     *
     * @static
     * @return WC_CP_Order
     * @since  3.7.0
     */
    public static function instance()
    {
    }
    /**
     * Cloning is forbidden.
     *
     * @since 3.7.0
     */
    public function __clone()
    {
    }
    /**
     * Unserializing instances of this class is forbidden.
     *
     * @since 3.7.0
     */
    public function __wakeup()
    {
    }
    /**
     * Construct, man.
     */
    public function __construct()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | API functions.
    |--------------------------------------------------------------------------
    */
    /**
     * Reads the configuration array stored on a container order item and modifies it based on the actual state of the composite.
     *
     * @since  3.14.0
     *
     * @param  WC_Order_Item $order_item
     * @param  WC_Order      $order
     * @return array
     */
    public static function get_current_composite_configuration($order_item, $order)
    {
    }
    /**
     * Validates a composite configuration and adds all associated line items to an order. Relies on specifying a composite configuration array with all necessary data.
     * The configuration array is passed as a 'configuration' key of the $args method argument. Example:
     *
     *    $args = array(
     *        'configuration' => array(
     *            134567890 => array(                       // ID of the component.
     *                'quantity'          => 2,             // Qty of composited product, will fall back to min.
     *                'discount'          => 50.0,          // Composited product discount, defaults to the defined value.
     *                'attributes'        => array(         // Array of selected variation attribute names, sanitized.
     *                    'attribute_color' => 'black',
     *                    'attribute_size'  => 'medium'
     *                 ),
     *                'variation_id'      => 43,            // ID of chosen variation, if applicable.
     *                'args'              => array()        // Custom composited item args to pass into 'WC_Order::add_product()'.
     *            )
     *        )
     *    );
     *
     * Returns the container order item ID if sucessful, or false otherwise.
     *
     * Note: Container/child order item totals are calculated without taxes, based on their pricing setup.
     * - Container item totals can be overridden by passing a 'totals' array in $args, as with 'WC_Order::add_product()'.
     * - Composited item totals can be overridden in the 'configuration' array, as shown in the example above.
     *
     * @param  WC_Product_Composite $composite
     * @param  WC_Order             $order
     * @param  integer              $quantity
     * @param  array                $args
     * @return integer|WP_Error
     */
    public function add_composite_to_order($composite, $order, $quantity = 1, $args = array())
    {
    }
    /**
     * Modifies composite parent/child order items depending on their shipping setup. Reconstructs an accurate representation of a composite for shipping purposes.
     * Used in combination with 'get_product_from_item', right below.
     *
     * Adds the totals of "packaged" items to the container totals and creates a container "Contents" meta field to provide a description of the included items.
     *
     * @param  array    $items
     * @param  WC_Order $order
     * @return array
     */
    public function get_order_items($items, $order)
    {
    }
    /**
     * Modifies parent/child order products in order to reconstruct an accurate representation of a composite for shipping purposes:
     *
     * - If it's a container, then its weight is modified to include the weight of "packaged" children.
     * - If a child is "packaged" inside its parent, then it is marked as virtual.
     *
     * Used in combination with 'get_order_items', right above.
     *
     * @param  WC_Product $product
     * @param  array      $item
     * @param  WC_Order   $order
     * @return WC_Product
     */
    public function get_product_from_item($product, $item, $order = \false)
    {
    }
    /**
     * Returns a list of products/quantities physically assembled in a parent order item.
     *
     * @since  3.14.0
     *
     * @param  WC_Order_Item_Product $item
     * @param  WC_Order              $order
     * @return array
     */
    public function get_assembled_items($item, $order)
    {
    }
    /**
     * Modify product objects using order item meta in order to construct an accurate value/volume/weight representation of a composite for shipping purposes.
     *
     * Virtual containers/children are assigned a zero weight and tiny dimensions in order to maintain the value of the associated item in shipments:
     *
     * - If a bundled item is not shipped individually (virtual), its value must be included to ensure an accurate calculation of shipping costs (value/insurance).
     * - If a composite is not shipped as a physical item (virtual), it may have a non-zero value that also needs to be included to ensure an accurate calculation of shipping costs (value/insurance).
     *
     * In both cases, the workaround is to assign a tiny weight and miniscule dimensions to the non-shipped order items, in order to:
     *
     * - ensure that they are included in the exported data, by having 'needs_shipping' return 'true', but also
     * - minimize the impact of their inclusion on shipping costs.
     *
     * @param  WC_Product $product
     * @param  array      $item
     * @param  WC_Order   $order
     * @return WC_Product
     */
    public function get_legacy_shipstation_product_from_item($product, $item, $order)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Filter hooks.
    |--------------------------------------------------------------------------
    */
    /**
     * Composite Containers should not affect order status - let it be decided by composited items only.
     *
     * @param  bool       $is_needed
     * @param  WC_Product $product
     * @param  int        $order_id
     * @return bool
     */
    public function container_item_needs_processing($is_needed, $product, $order_id)
    {
    }
    /**
     * Hides composite metadata.
     *
     * @param  array $hidden
     * @return array
     */
    public function hide_order_item_meta($hidden)
    {
    }
    /**
     * Adds composite info to order items.
     *
     * @param  WC_Order_Item $order_item
     * @param  string        $cart_item_key
     * @param  array         $cart_item
     * @return void
     */
    public function add_order_item_meta($order_item, $cart_item_key, $cart_item)
    {
    }
    /**
     * Given a virtual composite container cart item, find if any of its children need processing.
     *
     * @since  3.7.0
     *
     * @param  array $item_values
     * @return mixed
     */
    private function components_need_processing($item_values)
    {
    }
    /**
     * Filters the order item admin class.
     *
     * @param  string   $class
     * @param  array    $item
     * @param  WC_Order $order
     * @return string
     */
    public function html_order_item_class($class, $item, $order)
    {
    }
    /**
     * Activates the 'woocommerce_order_item_product' filter below.
     *
     * @param  string $order_id
     * @return void
     */
    public function apply_order_item_product_filter($order_id)
    {
    }
    /**
     * Deactivates the 'woocommerce_order_item_product' filter below.
     *
     * @param  string $order_id
     * @return void
     */
    public function remove_order_item_product_filter($order_id)
    {
    }
    /**
     * Filters 'woocommerce_order_item_product' to add data used by 'woocommerce_order_item_needs_processing'.
     *
     * @param  WC_Product $product
     * @param  array      $item
     * @return WC_Product
     */
    public function get_processing_order_item_product($product, $item)
    {
    }
}
/**
 * Product Bundles DB Sync Task Runner.
 *
 * Uses https://github.com/A5hleyRich/wp-background-processing to handle tasks in the background.
 *
 * @class    WC_CP_Price_Calc_Task_Runner
 * @version  10.0.0
 */
class WC_CP_Price_Calc_Task_Runner extends \WC_CP_Background_Process
{
    /**
     * Initiate new background process.
     */
    public function __construct()
    {
    }
    /**
     * Returns the cron action identifier.
     *
     * @since  4.0.0
     *
     * @return string
     */
    public function get_cron_hook_identifier()
    {
    }
    /**
     * Generates a key based on product ID.
     *
     * @param int $length
     *
     * @return string
     */
    protected function generate_key($length = 64)
    {
    }
    /**
     * Generates a key based on product ID.
     *
     * @param array $task_data
     * @param int   $length
     *
     * @return string
     */
    protected function get_task_key($task_data, $length = 64)
    {
    }
    /**
     * Retrieves the stored data of a running task.
     *
     * @param  string $key
     *
     * @return array
     */
    protected function get_task_data($key)
    {
    }
    /**
     * Dispatch updater.
     */
    public function dispatch()
    {
    }
    /**
     * Handle cron healthcheck.
     *
     * Restart the background process if not already running and data exists in the queue.
     */
    public function handle_cron_healthcheck()
    {
    }
    /**
     * Schedule event.
     */
    protected function schedule_event()
    {
    }
    /**
     * Any work to do?
     *
     * @return boolean
     */
    public function is_queued()
    {
    }
    /**
     * Is the task runner actually running?
     *
     * @return boolean
     */
    public function is_running()
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
    public function time_exceeded()
    {
    }
    /**
     * Memory exceeded.
     *
     * Ensures the batch process never exceeds 90%
     * of the maximum WordPress memory.
     *
     * @return bool
     */
    public function memory_exceeded()
    {
    }
    /**
     * Runs stock status sync tasks.
     *
     * @param  array $data
     * @return mixed
     */
    protected function task($data)
    {
    }
    /**
     * Handle
     *
     * @override
     * @since 8.10.4
     *
     * Pass each queue item to the task handler, while remaining
     * within server memory and time limit constraints.
     */
    protected function handle()
    {
    }
}
/**
 * Product data parallel structure for storing product properties.
 *
 * @class    WC_CP_Product_Data
 * @version  9.0.1
 */
class WC_CP_Product_Data
{
    /**
     * @var WC_CP_Product_Data - the single instance of the class.
     *
     * @since 9.0.0
     */
    protected static $_instance = \null;
    /**
     * @var array - the instance's data.
     *
     * @since 9.0.0
     */
    protected $data = array();
    /**
     * Main WC_CP_Product_Data Instance.
     *
     * Ensures only one instance of WC_CP_Product_Data is loaded or can be loaded.
     *
     * @static
     * @return WC_CP_Product_Data - Main instance
     * @since 9.0.0
     */
    public static function instance()
    {
    }
    /**
     * Overriding the constructor with a private one prevents calling it directly.
     *
     * @since 9.0.0
     */
    private function __construct()
    {
    }
    /**
     * Cloning is forbidden.
     *
     * @since 9.0.0
     */
    public function __clone()
    {
    }
    /**
     * Unserializing instances of this class is forbidden.
     *
     * @since 9.0.0
     */
    public function __wakeup()
    {
    }
    /**
     * Gets product data.
     *
     * @since 9.0.0
     *
     * @param WC_Product  $product
     * @param string      $key
     * @param null|string $default
     *
     * @return string
     */
    public function get($product, $key, $default = \null)
    {
    }
    /**
     * Sets product data.
     *
     * @since 9.0.0
     *
     * @param WC_Product $product
     * @param string     $key
     * @param string     $value
     */
    public function set($product, $key, $value)
    {
    }
    /**
     * Deletes product data.
     *
     * @since 9.0.0
     *
     * @param WC_Product $product
     * @param string     $key
     *
     * @return boolean
     */
    public function delete($product, $key)
    {
    }
}
/**
 * Composited Product wrapper class.
 *
 * @class    WC_CP_Product
 * @version  10.1.0
 */
class WC_CP_Product
{
    /**
     * Product instance of the associated composited product.
     *
     * @var WC_Product
     */
    private $product = \false;
    /**
     * Raw meta prices used in the min/max composite price calculation.
     *
     * @var string
     */
    public $min_price;
    public $min_price_incl_tax;
    public $min_price_excl_tax;
    public $max_price;
    public $min_regular_price;
    public $max_regular_price;
    /**
     * Products corresponding to the min/max (regular) price at which the composited product can be purchased. If the product is variable, these will contain the associated variations, otherwise they are identical to the 'product' property.
     *
     * @var WC_Product
     */
    public $min_price_product;
    public $max_price_product;
    public $min_regular_price_product;
    public $max_regular_price_product;
    /**
     * Flag to indicate whether min/max props have been synced.
     *
     * @var boolean
     */
    private $synced_prices = \false;
    /**
     * Component ID of the component that this product belongs to.
     *
     * @var string
     */
    private $component_id = '';
    /**
     * Composite that this product belongs to.
     *
     * @var WC_Product_Composite
     */
    private $composite = \null;
    /**
     * True if the composited product is a Name-Your-Price product.
     *
     * @var boolean
     */
    private $is_nyp = \false;
    /**
     * True if the product can be bought.
     *
     * @var boolean
     */
    private $purchasable;
    /**
     * True if the composited product is marked as individually-sold item.
     *
     * @var boolean
     */
    private $sold_individually;
    /**
     * Variations data.
     *
     * @var array
     */
    private $variations_data;
    /**
     * True if currently renewing a subscription.
     *
     * @var boolean
     */
    public $is_subscription_renewal;
    /**
     * Constructor.
     *
     * @param  mixed                $product_id
     * @param  string               $component_id
     * @param  WC_Product_Composite $parent
     */
    public function __construct($product_id, $component_id, $parent)
    {
    }
    /**
     * True if the composited product is a valid product.
     *
     * @return boolean
     */
    public function exists()
    {
    }
    /**
     * Get composited product.
     *
     * @param  array $args
     * @return WC_Product|false
     */
    public function get_product($args = array())
    {
    }
    /**
     * Get composited product ID.
     *
     * @return integer
     */
    public function get_product_id()
    {
    }
    /**
     * Get the composite product.
     *
     * @return WC_Product_Composite|false
     */
    public function get_composite()
    {
    }
    /**
     * Get the composite product ID.
     *
     * @return integer
     */
    public function get_composite_id()
    {
    }
    /**
     * Get component id.
     *
     * @return string|false
     */
    public function get_component_id()
    {
    }
    /**
     * Get raw component data.
     *
     * @return array|false
     */
    public function get_component_data()
    {
    }
    /**
     * Get component.
     *
     * @since  3.7.0
     *
     * @return array|false
     */
    public function get_component()
    {
    }
    /**
     * Sync price data, if needed.
     *
     * @param  bool $force
     */
    public function sync_prices($force = \false)
    {
    }
    /**
     * Adds price filters to account for component discounts.
     */
    public function add_filters()
    {
    }
    /**
     * Removes attached price filters.
     */
    public function remove_filters()
    {
    }
    /**
     * True if the product can be bought.
     *
     * @return boolean
     */
    public function is_purchasable()
    {
    }
    /**
     * True if the composited product is priced individually.
     *
     * @return boolean
     */
    public function is_priced_individually()
    {
    }
    /**
     * True if the composited product is shipped individually.
     *
     * @return boolean
     */
    public function is_shipped_individually($product = \false)
    {
    }
    /**
     * True if the weight of the composited product is added to the weight of the container.
     *
     * @param  WC_Product $composited_product
     * @return boolean
     */
    public function is_weight_aggregated($product = \false)
    {
    }
    /**
     * True if the composited product is marked as individually-sold item.
     *
     * @return boolean
     */
    public function is_sold_individually()
    {
    }
    /**
     * True if the composited product is a NYP product.
     *
     * @return boolean
     */
    public function is_nyp()
    {
    }
    /**
     * True if the composited product is configurable.
     *
     * @return boolean
     */
    public function is_configurable()
    {
    }
    /**
     * True if the composited product has addons.
     *
     * @param mixed $type
     *
     * @return boolean
     */
    public function has_addons($type = '')
    {
    }
    /**
     * Get composited product price after discount, price filters excluded.
     *
     * @return mixed
     */
    public function get_raw_price($product = \false, $context = '')
    {
    }
    /**
     * Get composited product regular price before discounts, price filters excluded.
     *
     * @return mixed
     */
    public function get_raw_regular_price($product = \false)
    {
    }
    /**
     * Min/max bundled item (regular) price incl/excl tax.
     *
     * @since  3.12.0
     *
     * @param  array $args
     * @return mixed
     */
    public function calculate_price($args)
    {
    }
    /**
     * Get composited product price after discount.
     *
     * @param  string  $min_or_max
     * @param  boolean $display
     * @return double
     */
    public function get_price($min_or_max = 'min', $display = \false, $qty = 1)
    {
    }
    /**
     * Get composited product regular price after discount.
     *
     * @param  string  $min_or_max
     * @param  boolean $display
     * @param  boolean $strict
     * @return double
     */
    public function get_regular_price($min_or_max = 'min', $display = \false, $strict = \false, $qty = 1)
    {
    }
    /**
     * Min composited product price incl tax.
     *
     * @return double
     */
    public function get_price_including_tax($min_or_max = 'min', $qty = 1)
    {
    }
    /**
     * Min composited product price excl tax.
     *
     * @return double
     */
    public function get_price_excluding_tax($min_or_max = 'min', $qty = 1)
    {
    }
    /**
     * Min composited product price incl tax.
     *
     * @since  3.12.0
     *
     * @param  string $min_or_max
     * @param  int    $qty
     * @param  bool   $strict
     * @return mixed
     */
    public function get_regular_price_including_tax($min_or_max = 'min', $qty = 1, $strict = \false)
    {
    }
    /**
     * Min composited product price excl tax.
     *
     * @since  3.12.0
     *
     * @param  string $min_or_max
     * @param  int    $qty
     * @param  bool   $strict
     * @return mixed
     */
    public function get_regular_price_excluding_tax($min_or_max = 'min', $qty = 1, $strict = \false)
    {
    }
    /**
     * Wrapper for 'get_price_html()' that applies price filters.
     *
     * @return string
     */
    public function get_price_html()
    {
    }
    /**
     * Selection html.
     *
     * @since  4.0.0
     * @return array
     */
    private function get_product_html()
    {
    }
    /**
     * Get variations data.
     *
     * @since  4.0.0
     * @return array|false
     */
    public function get_variations_data()
    {
    }
    /**
     * Product data.
     *
     * @since  4.0.0
     * @return array
     */
    public function get_product_data()
    {
    }
    /**
     * Get display price data for consumption by the single page app.
     *
     * @see 'WC_CP_Component_View::get_options_data'.
     *
     * @return array|false
     */
    public function get_price_data()
    {
    }
    /**
     * Generated dropdown price string for composited products priced individually.
     *
     * @return string|false
     */
    public function get_price_string()
    {
    }
    /**
     * Generated title string for composited products.
     *
     * @param  string $title
     * @param  string $qty
     * @param  string $price
     * @return string
     */
    public static function get_title_string($title, $qty = '', $price = '')
    {
    }
    /**
     * Component discount getter.
     *
     * @return mixed
     */
    public function get_discount()
    {
    }
    /**
     * Indicates whether discounts can be applied on sale prices.
     */
    public function is_discount_allowed_on_sale_price()
    {
    }
    /**
     * Composited product min quantity.
     *
     * @return mixed
     */
    public function get_quantity_min()
    {
    }
    /**
     * Composited product max quantity.
     *
     * @param  string               $min_or_max
     * @param  boolean              $bound_by_stock
     * @param  WC_Product_Variation $variation
     * @return mixed
     */
    public function get_quantity_max($bound_by_stock = \false, $variation = \false)
    {
    }
    /**
     * Get composited product stock html.
     *
     * @since  3.9.0
     *
     * @param  WC_Product|false $product
     * @return string
     */
    public function get_availability_html($product = \false)
    {
    }
    /**
     * Composited product availability that takes min_quantity > 1 into account.
     *
     * @since  3.7.0
     *
     * @return array
     */
    public function get_availability($product = \false)
    {
    }
    /**
     * Get availability text based on stock status.
     *
     * @since  3.7.0
     *
     * @return string
     */
    private function get_availability_text($product = \false)
    {
    }
    /**
     * Get availability classname based on stock status.
     *
     * @since  3.7.0
     *
     * @return string
     */
    private function get_availability_class($product = \false)
    {
    }
    /**
     * Get product image data.
     *
     * @return array
     */
    public function get_image_data()
    {
    }
    /**
     * Image size to use in Thumbnail grid and Summary template.
     *
     * @since  3.13.3
     * @return string
     */
    public function get_image_size()
    {
    }
    /**
     * Image size to use in selection template.
     *
     * @since  3.13.3
     * @return string
     */
    public function get_selection_thumbnail_size()
    {
    }
    /**
     * Tax ratios.
     *
     * @since  4.0.0
     * @return array
     */
    public function get_tax_ratios()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Static methods.
    |--------------------------------------------------------------------------
    */
    /**
     * Placeholder product data array.
     *
     * @since  4.0.0
     * @param  string $context
     * @return array
     */
    public static function get_placeholder_product_data($context = 'no-product', $args = array())
    {
    }
}
/**
 * API functions to support product modifications when contained in Composites.
 *
 * @class    WC_CP_Products
 * @version  10.1.0
 */
class WC_CP_Products
{
    /**
     * Composited product being filtered - @see 'add_filters'.
     *
     * @var WC_CP_Product|false
     */
    public static $filtered_component_option = \false;
    /**
     * Composited products being filtered -- all states.
     *
     * @var WC_Bundled_Item
     */
    private static $filtered_component_option_pre;
    /**
     * Price calc task data to add to the queue.
     *
     * @var array
     */
    private static $price_calc_tasks_to_queue = array();
    /**
     * Task runner.
     *
     * @var WC_CP_Price_Calc_Task_Runner
     */
    private static $price_calc_task_runner;
    /**
     * IDs of composites updated in this request.
     *
     * @var array
     */
    private static $updated_composite_ids = array();
    /**
     * Setup hooks.
     */
    public static function init()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Class Methods.
    |--------------------------------------------------------------------------
    */
    /**
     * A non-strict way to tell if a product's prices are being altered due to the presence of a parent composite.
     *
     * @since  6.0.0
     *
     * @param  WC_Product|WC_Bundled_Item $product
     * @param  string                     $context
     * @return boolean
     */
    public static function is_component_option_pricing_context($product, $context = 'any')
    {
    }
    /**
     * Returns the currently filtered component option.
     *
     * @since  6.0.4
     *
     * @param  WC_CP_Product $product
     * @return boolean
     */
    public static function get_filtered_component_option()
    {
    }
    /**
     * Method to use for calculating cart item discounts. Values: 'filters' | 'props'
     *
     * @since  6.0.0
     *
     * @return string  $method
     */
    public static function get_composited_cart_item_discount_method()
    {
    }
    /**
     * Spawn task runner.
     *
     * @since  4.0.0
     * @return void
     */
    public static function initialize_price_calc_task_runner()
    {
    }
    /**
     * Schedule task.
     *
     * @since  4.0.0
     * @param  $data
     */
    public static function schedule_price_calc_task($data)
    {
    }
    /**
     * Get tasks to queue.
     *
     * @since  4.0.0
     * @param  $data
     */
    public static function get_price_calc_tasks_to_queue()
    {
    }
    /**
     * Get composites updated in this request.
     *
     * @since  7.0.0
     * @param  $data
     */
    public static function get_updated_composite_ids()
    {
    }
    /**
     * Add filters to modify products when contained in Composites.
     *
     * @param  WC_CP_Product $product
     * @return void
     */
    public static function add_filters($component_option)
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
     * Returns the incl/excl tax coefficients for calculating prices incl/excl tax on the client side.
     *
     * @since  3.13.6
     *
     * @param  WC_Product $product
     * @return array
     */
    public static function get_tax_ratios($product)
    {
    }
    /**
     * Calculates product prices.
     *
     * @since  3.12.0
     *
     * @param  WC_Product $product
     * @param  array      $args
     * @return mixed
     */
    public static function get_product_price($product, $args)
    {
    }
    /**
     * Discounted price getter.
     *
     * @param  mixed $price
     * @param  mixed $discount
     * @return mixed
     */
    public static function get_discounted_price($price, $discount)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Hooks.
    |--------------------------------------------------------------------------
    */
    /**
     * Calculate composite min/max price permutations.
     *
     * @see  'WC_CP_Price_Calc_Task_Runner::task'
     *
     * @return void
     */
    public static function schedule_price_calc_tasks()
    {
    }
    /**
     * Filter variation prices hash to load different prices for variable products with variation filters and/or discounts.
     *
     * @param  array               $hash
     * @param  WC_Product_Variable $product
     * @return array
     */
    public static function filter_variation_prices_hash($hash, $product)
    {
    }
    /**
     * Filter get_variation_prices() calls to include discounts when displaying composited variable product prices.
     *
     * @param  array               $prices_array
     * @param  WC_Product_Variable $product
     * @return array
     */
    public static function filter_get_variation_prices($prices_array, $product)
    {
    }
    /**
     * Filters variation data in the show_product function.
     *
     * @param  mixed                $variation_data
     * @param  WC_Product           $bundled_product
     * @param  WC_Product_Variation $bundled_variation
     * @return mixed
     */
    public static function filter_available_variation($variation_data, $product, $variation)
    {
    }
    /**
     * Filter condition that allows WC to calculate variation price_html.
     *
     * @param  boolean              $show
     * @param  WC_Product_Variable  $product
     * @param  WC_Product_Variation $variation
     * @return boolean
     */
    public static function filter_show_variation_price($show, $product, $variation)
    {
    }
    /**
     * Filters get_price_html to include component discounts.
     *
     * @param  string     $price_html
     * @param  WC_Product $product
     * @return string
     */
    public static function filter_get_price_html($price_html, $product)
    {
    }
    /**
     * Filters get_price_html to hide nyp prices in static pricing mode.
     *
     * @param  string     $price_html
     * @param  WC_Product $product
     * @return string
     */
    public static function filter_get_nyp_price_html($price_html, $product)
    {
    }
    /**
     * Filters get_price to include component discounts.
     *
     * @param  double     $price
     * @param  WC_Product $product
     * @return string
     */
    public static function filter_get_price($price, $product)
    {
    }
    /**
     * Filters get_regular_price to include component discounts.
     *
     * @param  double     $price
     * @param  WC_Product $product
     * @return string
     */
    public static function filter_get_regular_price($price, $product)
    {
    }
    /**
     * Filters get_sale_price to include component discounts.
     *
     * @param  double     $sale_price
     * @param  WC_Product $product
     * @return string
     */
    public static function filter_get_sale_price($sale_price, $product)
    {
    }
    /**
     * Filter WC_Product::is_on_sale() calls.
     *
     * @since  6.11.2
     *
     * @param  bool       $is_on_sale
     * @param  WC_Product $product
     * @return bool
     */
    public static function filter_is_on_sale($is_on_sale, $product)
    {
    }
    /**
     * Filter get_price() calls for composited cart items to include discounts.
     *
     * @since  6.0.0
     *
     * @param  double     $price
     * @param  WC_Product $product
     * @return double
     */
    public static function filter_get_price_cart($price, $product)
    {
    }
    /**
     * Filter get_sale_price() calls for composited cart items to include discounts.
     *
     * @since  6.0.0
     *
     * @param  double     $price
     * @param  WC_Product $product
     * @return double
     */
    public static function filter_get_sale_price_cart($price, $product)
    {
    }
    /**
     * Filter get_regular_price() calls for composited cart items to include discounts.
     *
     * @since  6.1.3
     *
     * @param  double     $price
     * @param  WC_Product $product
     * @return double
     */
    public static function filter_get_regular_price_cart($price, $product)
    {
    }
    /**
     * Delete component options query cache + composite product price sync cache.
     *
     * @param  int $post_id
     * @return void
     */
    public static function post_status_transition($post_id)
    {
    }
    /**
     * Invalidate composite product query cache.
     *
     * @since  4.0.0
     *
     * @param  int $post_id
     * @return void
     */
    public static function flush_query_cache($post_id = 0)
    {
    }
    /**
     * Invalidate composite product price data.
     *
     * @since  4.0.0
     *
     * @param  WC_Product $product
     * @param  array      $changed_props
     * @return void
     */
    public static function invalidate_price_data($product, $updated_props)
    {
    }
    /**
     * Delete price meta reserved to bundles/composites (legacy).
     *
     * @param  int $post_id
     * @return void
     */
    public static function delete_reserved_price_post_meta($post_id)
    {
    }
    /**
     * Delete price meta reserved to bundles/composites.
     *
     * @param  WC_Product $product
     * @return void
     */
    public static function delete_reserved_price_meta($product)
    {
    }
    /**
     * Log saved composites and delete reserved price meta.
     *
     * @since  7.0.0
     *
     * @param  WC_Product $product
     * @return void
     */
    public static function before_product_object_save($product)
    {
    }
}
/**
 * Compresses and expands query strings.
 *
 * @class    WC_CP_Query_String
 * @version  6.3.0
 */
class WC_CP_Query_String
{
    /**
     * Prefix for compressed component IDs.
     *
     * @var string
     */
    protected static $compressed_component_id_prefix = 'c';
    /*
     * Initilize.
     */
    public static function init()
    {
    }
    /**
     * Reads compressed query strings and populates $_GET and $_REQUEST variables.
     *
     * @return void
     */
    public static function maybe_expand_query_string()
    {
    }
    /**
     * Compresses query string data.
     *
     * @since 6.3.0
     *
     * @param  array $args
     * @return array
     */
    public static function compress($args)
    {
    }
    /**
     * Expands compressed query string data.
     *
     * @param  array $compressed_args
     * @param  bool  $remove_compressed
     * @return array
     */
    public static function expand(&$compressed_args, $remove_compressed = \true)
    {
    }
}
/**
 * Fetches component option IDs.
 *
 * Supports two query types: 1) By product ID and 2) by product category ID.
 * Note that during composite product initialization, custom queries are used to fetch an unpaginated array of product IDs -- @see 'WC_Composite_Product::sync'.
 * This is necessary to sync prices and initialize template parameters.
 * When a component is rendered, sorting / filtering / pagination are handled via 'WC_CP_Component_View::get_options()' which uses the results of the initialization query.
 * Therefore, all rendering queries are done by fetching product IDs directly.
 *
 * You can add your own custom query types by hooking into 'woocommerce_composite_component_query_types' to add the query key/description.
 * Then, implement the query itself by hooking into 'woocommerce_composite_component_options_query_args'.
 *
 * You can add you own custom sorting function by hooking into 'woocommerce_composite_component_orderby' - or you can extend/modfify the behaviour of the 'default' orderby case.
 * To implement it, hook into 'woocommerce_composite_component_options_query_args'.
 *
 * @class    WC_CP_Query
 * @version  3.14.0
 */
class WC_CP_Query
{
    /**
     * Queried results.
     *
     * @var array
     */
    private $results;
    /**
     * Constructor.
     *
     * @param  array $component_data
     * @param  array $query_args
     */
    public function __construct($component_data, $query_args = array())
    {
    }
    /**
     * Get queried component option IDs.
     *
     * @return array
     */
    public function get_component_options()
    {
    }
    /**
     * Query args getter.
     *
     * @return array
     */
    public function get_query_args()
    {
    }
    /**
     * True if the query was paged and there is more than one page to show.
     *
     * @return boolean
     */
    public function has_pages()
    {
    }
    /**
     * Get the page number of the query.
     *
     * @return int
     */
    public function get_current_page()
    {
    }
    /**
     * Get the total number of pages.
     *
     * @return int
     */
    public function get_pages_num()
    {
    }
    /**
     * Runs the query.
     *
     * @param  array $component_data
     * @param  array $query_args
     */
    private function query($component_data, $query_args)
    {
    }
}
/**
 * Scenario object.
 *
 * @class    WC_CP_Scenario
 * @version  8.0.0
 */
class WC_CP_Scenario
{
    /**
     * Scenario ID.
     *
     * @var string
     */
    private $id;
    /**
     * Scenario name.
     *
     * @var string
     */
    private $name;
    /**
     * Scenario description.
     *
     * @var string
     */
    private $description;
    /**
     * Matching conditions.
     *
     * @var array
     */
    private $configuration_data;
    /**
     * Matching conditions.
     *
     * @var array
     */
    private $actions_data;
    /**
     * Constructor.
     *
     * @param  array $scenario_data
     */
    public function __construct($scenario_data)
    {
    }
    /**
     * Scenario ID getter.
     *
     * @return string
     */
    public function get_id()
    {
    }
    /**
     * Scenario name getter.
     *
     * @return string
     */
    public function get_name()
    {
    }
    /**
     * Scenario description getter.
     *
     * @return string
     */
    public function get_description()
    {
    }
    /**
     * Returns true if the scenario contains a product/variation ID selection from a specific component. Uses 'WC_CP_Scenario::contains_id' but also takes exclusion rules into account.
     * When checking a variation, it also checks the parent.
     *
     * @param  string $component_id
     * @param  int    $product_id
     * @param  int    $variation_id
     * @return boolean
     */
    public function contains_component_option($component_id, $product_id, $variation_id = 0)
    {
    }
    /**
     * Returns true if the scenario hides a product/variation ID selection in a specific component. Uses 'WC_CP_Scenario::contains_id' but also takes exclusion rules into account.
     * When checking a variation, it also checks the parent.
     *
     * @param  string $component_id
     * @param  int    $product_id
     * @param  int    $variation_id
     * @return boolean
     */
    public function hides_component_option($component_id, $product_id, $variation_id = 0)
    {
    }
    /**
     * Get components masked in scenario.
     *
     * @return array
     */
    public function get_masked_components()
    {
    }
    /**
     * Get components with all options in scenario.
     *
     * @return array
     */
    public function get_any_components()
    {
    }
    /**
     * Indicates whether a component is masked in this scenario.
     *
     * @param  string $component_id
     * @return boolean
     */
    public function masks_component($component_id)
    {
    }
    /**
     * Get components hidden by the scenario.
     *
     * @return array
     */
    public function get_hidden_components()
    {
    }
    /**
     * Indicates whether a components is hidden by the scenario.
     *
     * @param  string $component_id
     * @return boolean
     */
    public function hides_component($component_id)
    {
    }
    /**
     * Returns active action IDs.
     *
     * @return array
     */
    public function get_actions()
    {
    }
    /**
     * Checks if an action is defined and active in the scenario by ID.
     *
     * @param  string $action_id
     * @return boolean
     */
    public function has_action($action_id)
    {
    }
    /**
     * Action data getter.
     *
     * @param  string $action_id
     * @return array
     */
    public function get_action_data($action_id)
    {
    }
    /**
     * Get raw component option IDs definition.
     *
     * @since  3.13.0
     *
     * @param  string $component_id
     * @return array
     */
    public function get_ids($component_id)
    {
    }
    /**
     * Get modifier.
     *
     * @since  8.1.0
     *
     * @param  string $component_id
     * @return array
     */
    public function get_modifier($component_id)
    {
    }
    /**
     * Returns true if a component option ID is defined in the scenario. Also @see 'WC_CP_Scenario::contains_product'.
     *
     * @param  string      $component_id
     * @param  int         $id
     * @param  array|false $data
     * @return boolean
     */
    public function contains_id($component_id, $id, $configuration = \false)
    {
    }
}
/**
 * Validates configurations against scenarios.
 *
 * @class    WC_CP_Scenarios_Manager
 * @version  8.10.2
 */
class WC_CP_Scenarios_Manager
{
    /**
     * Scenario objects.
     *
     * @var array
     */
    private $scenarios;
    /**
     * Component objects.
     *
     * @var array
     */
    private $components;
    /**
     * Count of scenarios with defined actions.
     *
     * @var integer
     */
    private $complexity = 0;
    /**
     * Optional component IDs.
     *
     * @var array
     */
    private $optional_components;
    /**
     * Constructor.
     *
     * @param  WC_Product_Composite|array $data
     */
    public function __construct($data, $context = 'view')
    {
    }
    /**
     * Validates a composite configuration against scenarios. Example:
     *
     *    $config = array(
     *        134567890 => array(              // ID of component.
     *            'product_id'        => 15,   // ID of selected product option.
     *            'variation_id'      => 43    // ID of chosen variation, if applicable.
     *        )
     *    );
     *
     * Note: Only validates the supplied IDs against Scenarios. Does not validate that they exist!
     *
     * @param  array $configuration
     * @param  array $args
     * @return boolean
     */
    public function validate_configuration($configuration, $args = array())
    {
    }
    /**
     * Find scenarios matching a composite configuration - @see 'WC_CP_Scenarios_Manager::validate_composite_configuration'.
     *
     * @param  array $configuration
     * @param  array $args
     * @return boolean
     */
    public function find_matching($configuration, $args = array())
    {
    }
    /**
     * Parses a composite configuration for validation.
     *
     * @param  array $configuration
     * @return array
     */
    private function parse_configuration($configuration)
    {
    }
    /**
     * Filter scenarios by action type.
     *
     * @param  string $action_id
     * @param  array  $subset_ids
     * @return array
     */
    public function get_ids_by_action($action_id, $subset_ids = \false)
    {
    }
    /**
     * Get all scenario IDs.
     *
     * @return array
     */
    public function get_ids()
    {
    }
    /**
     * Get all scenarios.
     *
     * @return array
     */
    public function get_scenarios()
    {
    }
    /**
     * Get all components.
     *
     * @return array
     */
    public function get_components()
    {
    }
    /**
     * Maps component options to scenario IDs.
     *
     * @param  array  $component_options_subset  Subset of the available component options (product IDs only) to use, indexed by component ID. Optional.
     * @param  array  $scenarios_subset          Subset of the available scenarios to use. Optional.
     * @param  string $map_type                  Map type. Optional.
     * @return array                              Map of product IDs and variation IDs (indexed by component ID) to scenario IDs.
     */
    public function get_map($component_options_subset = \false, $scenarios_subset = \false, $map_type = 'conditions')
    {
    }
    /**
     * Return scenario settings indexed by scenario ID:
     *
     * - Active scenario action IDs.
     * - Masked component IDs.
     * - Hidden component IDs.
     *
     * @return array
     */
    public function get_settings()
    {
    }
    /**
     * Get scenarios data array.
     *
     * @param  array $component_options_subset  Subset of the available component options (product IDs only) to use, indexed by component ID. Optional.
     * @return array
     */
    public function get_data($component_options_subset = \false)
    {
    }
    /**
     * Get scenario action calculation settings.
     *
     * @return array
     */
    public function get_action_settings()
    {
    }
    /**
     * Indicates whether any active scenarios exist. Active = scenarios with active actions, which introduce conditional logic.
     *
     * @return boolean
     */
    public function exist()
    {
    }
    /**
     * Validation complexity index (worst case).
     * Doubling the components increases the complexity by a factor of ~1.5.
     * A complexity index of 10 should be below the PHP timeout.
     *
     * @param  int $permutations      Number of permutations to test.
     * @param  int $components_count  Number of components in passed configuration.
     * @return float
     */
    public function get_validation_complexity_index($permutations = 1, $components_count = '')
    {
    }
}
/**
 * Used to create and store a product_id / variation_id representation of a product collection based on the included items' inventory requirements.
 *
 * @class    WC_CP_Stock_Manager
 * @version  4.0.0
 */
class WC_CP_Stock_Manager
{
    private $items;
    public $product;
    /**
     * Constructor.
     *
     * @param  WC_Product_Composite $product
     */
    public function __construct($product)
    {
    }
    /**
     * Add a product to the collection.
     *
     * @param  WC_Product|int                 $product
     * @param  false|WC_Product_Variation|int $variation
     * @param  integer                        $quantity
     */
    public function add_item($product, $variation = \false, $quantity = 1)
    {
    }
    /**
     * Return the items of this collection.
     *
     * @return array
     */
    public function get_items()
    {
    }
    /**
     * Merge another collection with this one.
     *
     * @param WC_CP_Stock_Manager $stock
     */
    public function add_stock($stock)
    {
    }
    /**
     * Return the stock requirements of the items in this collection.
     * To validate stock accurately, this method is used to add quantities and build a list of product/variation ids to check.
     * Note that in some cases, stock for a variation might be managed by the parent - this is tracked by the managed_by_id property in WC_CP_Stock_Manager_Item.
     *
     * @return array
     */
    public function get_managed_items()
    {
    }
    /**
     * Product quantities already in cart.
     *
     * @since  3.14.0
     *
     * @return array
     */
    private function get_quantities_in_cart()
    {
    }
    /**
     * Validate that all managed items in the collection are in stock.
     *
     * @throws Exception
     *
     * @param  array $args
     * @return boolean
     */
    public function validate_stock($args = array())
    {
    }
}
/**
 * Class to represent stock-managed items.
 *
 * Maps a product/variation in the collection to the item managing stock for it.
 * These 2 will differ only if stock for a variation is managed by its parent.
 *
 * @class    WC_CP_Stock_Manager_Item
 * @version  3.8.0
 * @since    3.3.1
 */
class WC_CP_Stock_Manager_Item
{
    public $product_id;
    public $variation_id;
    public $quantity;
    public $managed_by_id;
    public function __construct($product, $variation = \false, $quantity = 1)
    {
    }
}
/**
 * Composite Products Tracker.
 *
 * @class    WC_CP_Tracker
 * @version  8.7.6
 */
class WC_CP_Tracker
{
    /**
     * Property to store reusable query data.
     *
     * @var array
     */
    private static $reusable_data = array();
    /**
     * Property to store the plugin's data.
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
     * Property to store the number of batches of the process.
     *
     * @var int
     */
    private static $batch_size = 30;
    /**
     * Property to store pending products.
     *
     * @var array
     */
    private static $pending_products = array();
    /**
     * Initialize the Tracker.
     */
    public static function init()
    {
    }
    /**
     * Setup tracker - Cron and Action Scheduler.
     *
     * @return void
     */
    public static function setup_tracker()
    {
    }
    /**
     * Adds CP data to the tracked data.
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
     * @return array CP's tracking data.
     */
    private static function get_tracking_data()
    {
    }
    /**
     * Cron job to start the calculations.
     *
     * @return void
     */
    public static function cron_calculate_tracking_data()
    {
    }
    /**
     * Maybe calculate tracking data.
     * Used by Action Scheduler to execute the next batch.
     *
     * @return bool Returns true if the data are re-calculated, false otherwise.
     */
    public static function maybe_calculate_tracking_data($args = array())
    {
    }
    /**
     * Calculates all tracking-related data for the current month.
     * Runs independently in a background task.
     *
     * @return array All the tracking data.
     * @see ::maybe_calculate_tracking_data().
     */
    private static function calculate_tracking_data()
    {
    }
    /**
     * Calculate and set pending products.
     *
     * @return void
     */
    private static function calculate_pending_products()
    {
    }
    /**
     * Calculate data for pending products.
     *
     * @return void
     */
    private static function calculate_aggregation_data()
    {
    }
    /**
     * Aggregate product data and increase counters.
     *
     * @param  WC_Product_Composite $product
     *
     * @return void
     */
    private static function calculate_product_data($product)
    {
    }
    /**
     * Aggregate component data and increase counters.
     *
     * @param  WC_Product_Composite $product
     *
     * @return void
     */
    private static function calculate_component_data($product)
    {
    }
    /**
     * Aggregate scenario data and increase counters.
     *
     * @param  WC_Product_Composite $product
     *
     * @return void
     */
    private static function calculate_scenario_data($product)
    {
    }
    /**
     * Increase counters.
     *
     * @param  string $category  composites/components.
     * @param  array  $keys      keys to increase.
     *
     * @return void
     */
    public static function increase_counters($category, $keys)
    {
    }
    /**
     * Calculate integration data.
     *
     * @return void
     */
    private static function calculate_integration_data()
    {
    }
    /**
     * Check if we have pending calculations.
     *
     * @return bool Pending status.
     */
    private static function has_pending_calculations()
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
     * Get any reusable data, without re-querying the DB.
     *
     * @param  array $key  Reusable data key.
     * @return mixed
     */
    private static function get_reusable_data($key = '')
    {
    }
    /**
     * Get last processed product id.
     *
     * @return int
     */
    private static function get_last_processed_product_id()
    {
    }
    /**
     * Set last processed product id.
     *
     * @param  int $product_id
     *
     * @return void
     */
    private static function set_last_processed_product_id($product_id)
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
     * Get number of iterations.
     *
     * @return void
     */
    private static function get_iterations()
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
 * Composite Product Class.
 *
 * @class    WC_Product_Composite
 * @version  10.0.2
 */
class WC_Product_Composite extends \WC_Product
{
    /**
     * Array of composite-type extended product data fields used in CRUD and runtime operations.
     *
     * @var array
     */
    private $extended_data = array(
        'sold_individually_context' => 'product',
        // Provides context when the "Sold Individually" option is set to 'yes': 'product' or 'configuration'.
        'add_to_cart_form_location' => 'default',
        // "Form Location" option.
        'shop_price_calc' => 'defaults',
        // "Catalog Price" option.
        'layout' => 'default',
        // "Composite Layout" option.
        'virtual_composite' => \false,
        // "Virtual" box state.
        'editable_in_cart' => \false,
        // "Edit in cart" option.
        'aggregate_weight' => \false,
        // "Assembled weight" option.
        'min_raw_price' => '',
        // Min raw price of the composite based on raw prices, as stored in the DB.
        'max_raw_price' => '',
    );
    /**
     * Raw meta where all component data is saved.
     * A shamefully simple way to store/manage data that just works, but can't be used for any complex operations on the DB side.
     *
     * @var array
     */
    private $composite_meta = array();
    /**
     * Indicates whether composite meta have been changed.
     *
     * @var array
     */
    private $composite_meta_save_pending = \false;
    /**
     * Raw meta where all scenario data is saved.
     * A shamefully simple way to store/manage data that just works, but can't be used for any complex operations on the DB side.
     *
     * @var array
     */
    private $scenario_meta = array();
    /**
     * Configurations with lowest/highest composite prices.
     * Used in 'get_composite_price', 'get_composite_regular_price', 'get_composite_price_including_tax' and 'get_composite_price_excluding_tax methods'.
     *
     * @var array
     */
    private $permutations = array();
    /**
     * Array of composite price data for consumption by the front-end script.
     *
     * @var array
     */
    private $composite_price_data = array();
    /**
     * Composite object instance context.
     */
    private $object_context = '';
    /**
     * Array of cached composite prices.
     *
     * @var array
     */
    private $composite_price_cache = array();
    /**
     * Storage of 'contains' keys, most set during sync.
     *
     * @var array
     */
    private $contains = array();
    /**
     * Indicates whether the product has been synced with component data.
     *
     * @var boolean
     */
    private $is_synced = \false;
    /**
     * Product type.
     *
     * @var string
     */
    private $product_type;
    /**
     * Composite-specific add to cart form settings.
     *
     * @var array
     */
    private $form_settings;
    /**
     * True if Composite is a NYP product.
     *
     * @var boolean
     */
    private $is_nyp;
    /**
     * Composite base layout.
     *
     * @var string
     */
    private $base_layout;
    /**
     * Composite base layout variation.
     *
     * @var string
     */
    private $base_layout_variation;
    /**
     * Scenarios manager view.
     *
     * @var mixed
     */
    public $scenarios_manager_view;
    /**
     * Total number of component options.
     *
     * @var int
     */
    public $options_count;
    /**
     * Constructor.
     *
     * @param  mixed $composite
     */
    public function __construct($composite = 0)
    {
    }
    /**
     * Get internal type.
     *
     * @since  3.9.0
     *
     * @return string
     */
    public function get_type()
    {
    }
    /**
     * Load property and runtime cache defaults to trigger a re-sync.
     *
     * @since 3.9.0
     */
    public function load_defaults()
    {
    }
    /**
     * Define type-specific data.
     *
     * @since  3.9.0
     */
    private function load_extended_data()
    {
    }
    /**
     * Sync composite props with component objects.
     *
     * @since  3.12.0
     *
     * @param  bool $force
     * @return bool
     */
    public function sync($force = \false)
    {
    }
    /**
     * Sync product bundle raw price meta.
     *
     * @since  3.12.0
     *
     * @return bool
     */
    private function sync_raw_prices()
    {
    }
    /**
     * Stores composite pricing strategy data that is passed to JS.
     *
     * @return void
     */
    public function load_price_data()
    {
    }
    /**
     * Calculates composite prices.
     *
     * @since  3.12.0
     *
     * @param  array $args
     * @return mixed
     */
    public function calculate_price($args)
    {
    }
    /**
     * Get min/max composite price.
     *
     * @param  string  $min_or_max
     * @param  boolean $display
     * @return mixed
     */
    public function get_composite_price($min_or_max = 'min', $display = \false)
    {
    }
    /**
     * Get min/max composite regular price.
     *
     * @param  string  $min_or_max
     * @param  boolean $display
     * @return mixed
     */
    public function get_composite_regular_price($min_or_max = 'min', $display = \false)
    {
    }
    /**
     * Get min/max composite price including tax.
     *
     * @return mixed
     */
    public function get_composite_price_including_tax($min_or_max = 'min', $qty = 1)
    {
    }
    /**
     * Get min/max composite price excluding tax.
     *
     * @return double
     */
    public function get_composite_price_excluding_tax($min_or_max = 'min', $qty = 1)
    {
    }
    /**
     * Get min/max regular composite price including tax.
     *
     * @since  3.12.0
     *
     * @param  string  $min_or_max
     * @param  integer $qty
     * @return mixed
     */
    public function get_composite_regular_price_including_tax($min_or_max = 'min', $qty = 1)
    {
    }
    /**
     * Get min/max regular composite price excluding tax.
     *
     * @since  3.12.0
     *
     * @param  string  $min_or_max
     * @param  integer $qty
     * @return mixed
     */
    public function get_composite_regular_price_excluding_tax($min_or_max = 'min', $qty = 1)
    {
    }
    /**
     * Returns range style html price string without min and max.
     *
     * @param  mixed $price
     * @return string
     */
    public function get_price_html($price = '')
    {
    }
    /**
     * Price suffix for Composite products.
     *
     * @return string
     */
    public function get_price_suffix($price = '', $qty = 1)
    {
    }
    /**
     * Gets price data array. Contains localized strings and price data passed to JS.
     *
     * @return array
     */
    public function get_composite_price_data()
    {
    }
    /**
     * Wrapper for get_permalink that adds composite configuration data to the URL.
     *
     * @return string
     */
    public function get_permalink()
    {
    }
    /**
     * Generate component slugs based on component titles. Used to generate routes.
     *
     * @return array
     */
    public function get_component_slugs()
    {
    }
    /**
     * Get the add to cart button text.
     *
     * @return  string
     */
    public function add_to_cart_text()
    {
    }
    /**
     * Get the add to cart button text for the single page.
     *
     * @return string
     */
    public function single_add_to_cart_text()
    {
    }
    /**
     * Get composite-specific add to cart form settings.
     *
     * @return  string
     */
    public function add_to_cart_form_settings()
    {
    }
    /**
     * Container of scenarios-related functionality - @see WC_CP_Scenarios_Manager.
     *
     * @param  string $context
     * @return WC_CP_Scenarios_Manager
     */
    public function scenarios($context = 'view')
    {
    }
    /*
    |--------------------------------------------------------------------------
    | CRUD Getters
    |--------------------------------------------------------------------------
    |
    | Methods for getting data from the product object.
    */
    /**
     * Forces all component options to be treated as virtual, along with the Composite itself.
     *
     * @since 8.2.0
     *
     * @param  string $context
     * @return boolean
     */
    public function get_virtual_composite($context = 'view')
    {
    }
    /**
     * Returns the base active price of the composite.
     *
     * @since  3.9.0
     *
     * @param  string $context
     * @return mixed
     */
    public function get_price($context = 'view')
    {
    }
    /**
     * Returns the base regular price of the composite.
     *
     * @since  3.9.0
     *
     * @param  string $context
     * @return mixed
     */
    public function get_regular_price($context = 'view')
    {
    }
    /**
     * Returns the base sale price of the composite.
     *
     * @since  3.9.0
     *
     * @param  string $context
     * @return mixed
     */
    public function get_sale_price($context = 'view')
    {
    }
    /**
     * Catalog Price getter.
     *
     * @since  3.12.0
     *
     * @param  string $context
     * @return string
     */
    public function get_shop_price_calc($context = 'any')
    {
    }
    /**
     * Form Location getter.
     *
     * @since  3.13.0
     *
     * @param  string $context
     * @return string
     */
    public function get_add_to_cart_form_location($context = 'view')
    {
    }
    /**
     * Layout getter.
     *
     * @since  3.9.0
     *
     * @param  string $context
     * @return string
     */
    public function get_layout($context = 'any')
    {
    }
    /**
     * Editable-in-cart getter.
     *
     * @since  3.9.0
     *
     * @param  string $context
     * @return string
     */
    public function get_editable_in_cart($context = 'any')
    {
    }
    /**
     * "Aggregate weight" getter.
     *
     * @since  6.0.0
     *
     * @param  string $context
     * @return boolean
     */
    public function get_aggregate_weight($context = 'any')
    {
    }
    /**
     * "Sold Individually" option context.
     * Returns 'product' or 'configuration'.
     *
     * @since  3.6.0
     *
     * @param  string $context
     * @return string
     */
    public function get_sold_individually_context($context = 'any')
    {
    }
    /**
     * Minimum raw composite price getter.
     *
     * @since  3.9.0
     *
     * @param  string $context
     * @return string
     */
    public function get_min_raw_price($context = 'view')
    {
    }
    /**
     * Maximum raw composite price getter.
     * INF is 9999999999.0 in 'edit' (DB) context.
     * INF is internally stored as 'INF'.
     *
     * @since  3.9.0
     *
     * @param  string $context
     * @return string
     */
    public function get_max_raw_price($context = 'view')
    {
    }
    /**
     * Get data for all Components, indexed by component ID.
     *
     * @return array
     */
    public function get_composite_data($context = 'any')
    {
    }
    /**
     * Get raw scenario data, indexed by scenario ID.
     *
     * @return array
     */
    public function get_scenario_data($context = 'view')
    {
    }
    /*
    |--------------------------------------------------------------------------
    | CRUD Setters
    |--------------------------------------------------------------------------
    |
    | Functions for setting product data. These should not update anything in the
    | database itself and should only change what is stored in the class
    | object.
    */
    /**
     * Set 'virtual_composite' prop. Forces all component options to be treated as virtual.
     *
     * @since 8.2.0
     *
     * @param  string|boolean $virtual
     */
    public function set_virtual_composite($virtual)
    {
    }
    /**
     * Shop price calc setter.
     *
     * @since  3.12.0
     *
     * @param  string $value
     */
    public function set_shop_price_calc($value)
    {
    }
    /**
     * Form Location setter.
     *
     * @since  3.13.0
     *
     * @param  string $value
     */
    public function set_add_to_cart_form_location($value)
    {
    }
    /**
     * Layout setter.
     *
     * @since  3.9.0
     *
     * @param  string $layout
     */
    public function set_layout($layout)
    {
    }
    /**
     * Edtiable-in-cart setter.
     *
     * @since  3.9.0
     *
     * @param  string $editable_in_cart
     */
    public function set_editable_in_cart($editable_in_cart)
    {
    }
    /**
     * "Aggregate weight" setter.
     *
     * @since  6.0.0
     *
     * @param  string $aggregate_weight
     */
    public function set_aggregate_weight($aggregate_weight)
    {
    }
    /**
     * Sold-individually context setter.
     *
     * @since  3.9.0
     *
     * @param  string $context
     */
    public function set_sold_individually_context($context)
    {
    }
    /**
     * Minimum raw composite price setter.
     *
     * @since  3.9.0
     *
     * @param  mixed $value
     */
    public function set_min_raw_price($value)
    {
    }
    /**
     * Maximum raw composite price setter.
     *
     * Converts 9999999999.0 to INF.
     * Internally stores infinite values as 'INF' to prevent issues with 'json_encode'.
     *
     * @since  3.9.0
     *
     * @param  mixed $value
     */
    public function set_max_raw_price($value)
    {
    }
    /**
     * Set raw components data using internal schema.
     *
     * @internal
     *
     * @since 3.9.0
     */
    public function set_composite_data($data)
    {
    }
    /**
     * Set raw scenario data using internal schema.
     *
     * @internal
     *
     * @since 3.9.0
     */
    public function set_scenario_data($data)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Other CRUD Methods
    |--------------------------------------------------------------------------
    */
    /**
     * Ensure properties are set correctly before saving.
     *
     * @since 4.0.0
     */
    public function validate_props()
    {
    }
    /**
     * Ensure scenarios are consistent with components before saving.
     *
     * @since 4.0.0
     */
    protected function validate_scenarios()
    {
    }
    /**
     * Alias for 'set_props'.
     *
     * @since 3.9.0
     */
    public function set($properties)
    {
    }
    /**
     * Override 'save' to invalidate component runtime cache.
     *
     * @since 3.9.0
     */
    public function save()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Conditionals
    |--------------------------------------------------------------------------
    */
    /**
     * Just a different way to check the 'virtual_composite' prop value.
     *
     * @since  8.2.0
     *
     * @return boolean
     */
    public function is_virtual_composite()
    {
    }
    /**
     * Returns whether or not the product has additional options that need
     * selecting before adding to cart.
     *
     * @since  5.0.0
     *
     * @return boolean
     */
    public function has_options()
    {
    }
    /**
     * Getter of composite 'contains' properties.
     *
     * @since  3.7.0
     *
     * @param  string $key
     * @return mixed
     */
    public function contains($key)
    {
    }
    /**
     * Indicates whether the catalog price of this product is being calculated in the background or has maybe failed to complete.
     * Values: 'pending' | 'completed' | 'failed' | ''
     *
     * @since  4.0.0
     *
     * @return string
     */
    public function get_shop_price_calc_status($context = 'view')
    {
    }
    /**
     * True if the composite is in sync with its contents.
     *
     * @return boolean
     */
    public function is_synced()
    {
    }
    /**
     * Composite is a NYP product.
     *
     * @since  3.8.0
     *
     * @return boolean
     */
    public function is_nyp()
    {
    }
    /**
     * True if a one of the composited products has a component discount, or if there is a base sale price defined.
     *
     * @param  string $context
     * @return boolean
     */
    public function is_on_sale($context = 'view')
    {
    }
    /**
     * Sets Composite object instance context.
     *
     * @param  string $context
     */
    public function set_object_context($context)
    {
    }
    /**
     * Retrieves Composite object instance context.
     *
     * @param  string $context
     * @return string
     */
    public function get_object_context()
    {
    }
    /**
     * Override purchasable method to account for empty price meta being allowed when individually-priced components exist.
     *
     * @return boolean
     */
    public function is_purchasable()
    {
    }
    /**
     * True if the composite is editable in cart.
     *
     * @return boolean
     */
    public function is_editable_in_cart()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Layout.
    |--------------------------------------------------------------------------
    */
    /**
     * Composite base layout.
     *
     * @return string
     */
    public function get_composite_layout_style()
    {
    }
    /**
     * Composite base layout variation.
     *
     * @return string
     */
    public function get_composite_layout_style_variation()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Scenarios.
    |--------------------------------------------------------------------------
    */
    /**
     * Build scenario data arrays for specific components, adapted to the data present in the current component options queries.
     * Make sure this is always called after component options queries have run, otherwise component options queries will be populated with results for the initial composite state.
     *
     * @param  array   $component_ids
     * @param  boolean $use_current_query
     * @return array
     */
    public function get_current_scenario_data($component_ids = array())
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Component methods: Instantiation and data.
    |--------------------------------------------------------------------------
    */
    /**
     * Get component raw meta array by component id.
     * All component data is currently lumped in a single meta field, which should hopefully change at some point.
     *
     * @param  string $component_id
     * @return array
     */
    public function get_component_meta($component_id)
    {
    }
    /**
     * Component object getter.
     *
     * @param  string $component_id
     * @return WC_CP_Component
     */
    public function get_component($component_id)
    {
    }
    /**
     * Checks if a specific component ID exists.
     *
     * @param  string $component_id
     * @return boolean
     */
    public function has_component($component_id)
    {
    }
    /**
     * Get all component ids.
     *
     * @return array
     */
    public function get_component_ids()
    {
    }
    /**
     * Gets all components.
     *
     * @return array
     */
    public function get_components()
    {
    }
    /**
     * Get component data array by component id.
     *
     * @param  string $component_id
     * @return array
     */
    public function get_component_data($component_id)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Component methods: Options and properties.
    |--------------------------------------------------------------------------
    */
    /**
     * Get all component options (product IDs) available in a component.
     *
     * @param  string $component_id
     * @return array|null
     */
    public function get_component_options($component_id)
    {
    }
    /**
     * Get composited product.
     *
     * @param  string $component_id
     * @param  int    $product_id
     * @return WC_CP_Product|null
     */
    public function get_component_option($component_id, $product_id)
    {
    }
    /**
     * Grab component discount by component id.
     *
     * @param  string $component_id
     * @return string|null
     */
    public function get_component_discount($component_id)
    {
    }
    /**
     * True if a component has only one option and is not optional.
     *
     * @param  string $component_id
     * @return boolean|null
     */
    public function is_component_static($component_id)
    {
    }
    /**
     * True if a component is optional.
     *
     * @param  string $component_id
     * @return boolean|null
     */
    public function is_component_optional($component_id)
    {
    }
    /**
     * Get the default method to sort the options of a component.
     *
     * @param  int $component_id
     * @return string|null
     */
    public function get_component_default_sorting_order($component_id)
    {
    }
    /**
     * Get component sorting options, if enabled.
     *
     * @param  int $component_id
     * @return array|null
     */
    public function get_component_sorting_options($component_id)
    {
    }
    /**
     * Get component filtering options, if enabled.
     *
     * @param  int $component_id
     * @return array|null
     */
    public function get_component_filtering_options($component_id)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Component methods: Templating.
    |--------------------------------------------------------------------------
    */
    /**
     * Component options selection style.
     *
     * @param  string $component_id
     * @return string|null
     */
    public function get_component_options_style($component_id)
    {
    }
    /**
     * Thumbnail loop columns count.
     *
     * @param  string $component_id
     * @return int|null
     */
    public function get_component_columns($component_id)
    {
    }
    /**
     * Thumbnail loop results per page.
     *
     * @param  string $component_id
     * @return int|null
     */
    public function get_component_results_per_page($component_id)
    {
    }
    /**
     * Controls whether component options loaded via ajax will be appended or paginated.
     * When incompatible component options are set to be hidden, pagination cannot be used since results are filtered via js on the client side.
     *
     * @param  string $component_id
     * @return boolean
     */
    public function paginate_component_options($component_id)
    {
    }
    /**
     * Controls whether disabled component options will be hidden instead of greyed-out.
     *
     * @param  string $component_id
     * @return boolean|null
     */
    public function hide_disabled_component_options($component_id)
    {
    }
    /**
     * Create an array of classes to use in the component layout templates.
     *
     * @param  string $component_id
     * @return array|null
     */
    public function get_component_classes($component_id)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Component methods: View state.
    |--------------------------------------------------------------------------
    */
    /**
     * Get the current query object that was used to build the component options view of a component.
     * Should be called after 'WC_CP_Component_View::get_options()' has been used to set its view state.
     *
     * @param  int $component_id
     * @return WC_CP_Query|null|false
     */
    public function get_current_component_options_query($component_id)
    {
    }
    /**
     * Get component options to display. Fetched using a WP Query wrapper to allow advanced component options filtering / ordering / pagination.
     *
     * @param  string $component_id
     * @param  array  $args
     * @return array|null
     */
    public function get_current_component_options($component_id, $args = array())
    {
    }
    /**
     * Get the currently selected option (product id) for a component.
     *
     * @since  3.6.0
     *
     * @param  string $component_id
     * @return int
     */
    public function get_current_component_selection($component_id)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Static methods.
    |--------------------------------------------------------------------------
    */
    /**
     * Supported types for use as Component Options.
     *
     * @return array
     */
    public static function get_supported_component_option_types($expanded = \false)
    {
    }
    /**
     * Get "Catalog Price" options.
     *
     * @return array
     */
    public static function get_shop_price_calc_options()
    {
    }
    /**
     * Get "Form Location" options.
     *
     * @since  3.13.0
     *
     * @return array
     */
    public static function get_add_to_cart_form_location_options()
    {
    }
    /**
     * Get "Layout" options.
     *
     * @return array
     */
    public static function get_layout_options()
    {
    }
    /**
     * Get composite layout descriptions.
     *
     * @param  string $layout_id
     * @return string
     */
    public static function get_layout_description($layout_id)
    {
    }
    /**
     * Get selected layout option.
     *
     * @param  string $layout
     * @return string
     */
    public static function get_layout_option($layout)
    {
    }
}
/**
 * 3rd-party Extensions Compatibility.
 *
 * @class    WC_CP_Compatibility
 * @version  10.1.0
 */
class WC_CP_Compatibility
{
    /**
     * Array of min required plugin versions.
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
     * @var WC_CP_Compatibility
     *
     * @since 3.7.0
     */
    protected static $_instance = \null;
    /**
     * Main WC_CP_Compatibility instance.
     *
     * Ensures only one instance of WC_CP_Compatibility is loaded or can be loaded.
     *
     * @static
     * @return WC_CP_Compatibility
     * @since  3.7.0
     */
    public static function instance()
    {
    }
    /**
     * Cloning is forbidden.
     *
     * @since 3.7.0
     */
    public function __clone()
    {
    }
    /**
     * Unserializing instances of this class is forbidden.
     *
     * @since 3.7.0
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
     * @since  3.10.2
     *
     * @return void
     */
    protected function load_modules()
    {
    }
    /**
     * Prevent deprecated mini-extensions from initializing.
     *
     * @since 3.7.0
     */
    protected function unload_modules()
    {
    }
    /**
     * Core compatibility functions.
     *
     * @since  3.10.2
     */
    public static function core_includes()
    {
    }
    /**
     * Declare HPOS( Custom Order tables) compatibility.
     *
     * @since 8.6.1
     */
    public function declare_hpos_compatibility()
    {
    }
    /**
     * Declare cart/checkout Blocks compatibility.
     *
     * @since 8.10.4
     */
    public function declare_blocks_compatibility()
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
     * Init compatibility classes.
     */
    public function module_includes()
    {
    }
    /**
     * Get min module version.
     *
     * @since  6.0.0
     * @return bool
     */
    public function get_required_module_version($module)
    {
    }
    /**
     * Checks minimum required versions of compatible/integrated extensions.
     */
    public function check_required_versions()
    {
    }
    /**
     * Rendering a PIP document?
     *
     * @since  3.12.0
     *
     * @param  string $type
     * @return boolean
     */
    public function is_pip($type = '')
    {
    }
    /**
     * Tells if a product is a Name Your Price product, provided that the extension is installed.
     *
     * @param  mixed $product
     * @return boolean
     */
    public function is_nyp($product)
    {
    }
    /**
     * Checks if a product has (required) addons.
     *
     * @since  4.0.0
     *
     * @param  mixed   $product
     * @param  boolean $required
     * @return boolean
     */
    public function has_addons($product, $required = \false)
    {
    }
    /**
     * Checks PHP version.
     *
     * @param  string $version
     * @return boolean
     */
    public static function php_version_gte($version)
    {
    }
}
/**
 * Functions related to WC core backwards compatibility.
 *
 * @class    WC_CP_Core_Compatibility
 * @version  10.2.0
 */
class WC_CP_Core_Compatibility
{
    /*
    |--------------------------------------------------------------------------
    | Version check methods.
    |--------------------------------------------------------------------------
    */
    /**
     * Cache 'gte' comparison results.
     *
     * @var array
     */
    private static $is_wc_version_gte = array();
    /**
     * Cache 'gt' comparison results.
     *
     * @var array
     */
    private static $is_wc_version_gt = array();
    /**
     * Cache 'gt' comparison results for WP version.
     *
     * @since  5.0.5
     * @var    array
     */
    private static $is_wp_version_gt = array();
    /**
     * Cache 'gte' comparison results for WP version.
     *
     * @since  5.0.5
     * @var    array
     */
    private static $is_wp_version_gte = array();
    /**
     * Cache 'is_wc_admin_active' result.
     *
     * @since 8.3.0
     * @var   bool
     */
    private static $is_wc_admin_active;
    /**
     * Current REST request stack.
     * An array containing WP_REST_Request instances.
     *
     * @since 9.0.3
     *
     * @var array
     */
    private static $requests = array();
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
     * @since  9.0.3
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
     * @since  9.0.3
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
     * @since  8.4.0
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
     * @since  3.2.0
     *
     * @return string
     */
    public static function get_wc_version()
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is 2.5 or greater.
     *
     * @since  3.2.0
     *
     * @return boolean
     */
    public static function use_wc_ajax()
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is greater than or equal to $version.
     *
     * @since  3.9.0
     *
     * @param  string $version
     * @return boolean
     */
    public static function is_wc_version_gte($version)
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is greater than $version.
     *
     * @since  3.0.0
     *
     * @param  string $version
     * @return boolean
     */
    public static function is_wc_version_gt($version)
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is greater than or equal to $version.
     *
     * @since  5.0.5
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
     * @since  5.0.5
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
     * @since  8.4.0
     *
     * @return boolean
     */
    public static function is_api_request()
    {
    }
    /**
     * Returns the current Store/REST API request or false.
     *
     * @since  8.4.0
     *
     * @return WP_REST_Request|false
     */
    public static function get_api_request()
    {
    }
    /**
     * Whether this is a Store API request.
     *
     * @since  8.4.0
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
     * @since  3.9.0
     *
     * @param  string $message
     * @param  string $level
     * @param  string $context
     */
    public static function log($message, $level, $context)
    {
    }
    /**
     * Back-compat wrapper for 'get_parent_id' with fallback to 'get_id'.
     *
     * @since  3.9.3
     *
     * @param  WC_Product $product
     * @return mixed
     */
    public static function get_product_id($product)
    {
    }
    /**
     * Back-compat wrapper for 'is_rest_api_request'.
     *
     * @since  4.1.1
     *
     * @return boolean
     */
    public static function is_rest_api_request()
    {
    }
    /**
     *
     * Whether this is a Store Editor REST API request.
     *
     * @since  8.10.3
     *
     * @return boolean
     */
    public static function is_block_editor_api_request($route = '')
    {
    }
    /**
     * True if 'wc-admin' is active.
     *
     * @since  8.3.0
     *
     * @return boolean
     */
    public static function is_wc_admin_active()
    {
    }
    /**
     * Returns true if is a react based admin page.
     *
     * @since  8.4.2
     *
     * @return boolean
     */
    public static function is_admin_or_embed_page()
    {
    }
    /**
     * Returns true if site is using block theme.
     *
     * @since  8.10.0
     *
     * @return boolean
     */
    public static function wc_current_theme_is_fse_theme()
    {
    }
}
/**
 * Adds hooks for Product Add-Ons Compatibility.
 *
 * @version 10.2.0
 */
class WC_CP_Addons_Compatibility
{
    // phpcs:disable WordPress.NamingConventions.ValidVariableName.VariableNotSnakeCase
    public static $addons_prefix = '';
    public static $compat_composited_product = '';
    private static $current_component = \false;
    public static function init()
    {
    }
    /**
     * Used to tell if a product has (required) addons.
     *
     * @since  4.0.0
     *
     * @param  mixed $product
     * @param  mixed $type
     * @return boolean
     */
    public static function has_addons($product, $type = '')
    {
    }
    /**
     * Add Addons script as a dependency to the Composite Products script.
     *
     * @since  8.7.0
     *
     * @param  array  add_script_dependency
     * @return array
     */
    public static function add_script_dependency($dependencies)
    {
    }
    /**
     * Save option to disable addons at component level.
     *
     * @since  3.6.6
     *
     * @param  array  $component_data
     * @param  array  $posted_component_data
     * @param  string $component_id
     * @param  string $composite_id
     * @return array
     */
    public static function process_component_addons_disable($component_data, $posted_component_data, $component_id, $composite_id)
    {
    }
    /**
     * Show option to disable addons at Component level.
     *
     * @since  3.6.6
     *
     * @param  string $id
     * @param  array  $data
     * @param  string $product_id
     * @return void
     */
    public static function component_addons_disable($id, $data, $product_id)
    {
    }
    /**
     * Outputs add-ons for composited products.
     *
     * @param  WC_Product           $product
     * @param  int                  $component_id
     * @param  WC_Product_Composite $composite_product
     * @return void
     */
    public static function addons_display_support($composited_product, $component_id, $composite_product)
    {
    }
    /**
     * Sets a prefix for unique add-ons.
     *
     * @param  string $prefix
     * @param  int    $product_id
     * @return string
     */
    public static function addons_cart_prefix($prefix, $product_id)
    {
    }
    /**
     * Add some contextual info to addons validation messages.
     *
     * @param  string $message
     * @return string
     */
    public static function component_addons_error_message_context($message)
    {
    }
    /**
     * Validate composited item addons.
     *
     * @param  bool                 $add
     * @param  int                  $composite_id
     * @param  int                  $component_id
     * @param  int                  $product_id
     * @param  int                  $quantity
     * @param  array                $cart_item_data
     * @param  WC_Product_Composite $composite
     * @return bool
     */
    public static function validate_component_addons($add, $composite_id, $component_id, $product_id, $quantity, $cart_item_data, $composite)
    {
    }
    /**
     * Add addons identifier to composited item stamp, in order to generate new cart ids for composites with different addons configurations.
     *
     * @param  array  $composited_item_identifier
     * @param  string $composited_item_id
     * @return array
     */
    public static function composited_item_addons_identifier($composited_item_identifier, $composited_item_id)
    {
    }
    /**
     * Runs before adding a composited item to the cart.
     *
     * @param  int   $product_id
     * @param  int   $quantity
     * @param  int   $variation_id
     * @param  array $variations
     * @param  array $composited_item_cart_data
     * @return void
     */
    public static function before_composited_add_to_cart($product_id, $quantity, $variation_id, $variations, $composited_item_cart_data)
    {
    }
    /**
     * Runs after adding a composited item to the cart.
     *
     * @param  int   $product_id
     * @param  int   $quantity
     * @param  int   $variation_id
     * @param  array $variations
     * @param  array $composited_item_cart_data
     * @return void
     */
    public static function after_composited_add_to_cart($product_id, $quantity, $variation_id, $variations, $composited_item_cart_data)
    {
    }
    /**
     * Retrieve child cart item data from the parent cart item data array, if necessary.
     *
     * @param  array $composited_item_cart_data
     * @param  array $cart_item_data
     * @return array
     */
    public static function get_composited_cart_item_data_from_parent($composited_item_cart_data, $cart_item_data)
    {
    }
    /**
     * Aggregate add-ons costs and calculate them after CP has applied discounts.
     *
     * @since  6.0.4
     *
     * @param  array                $cart_item
     * @param  WC_Product_Composite $composite
     * @param  array|boolean        $cart_contents
     * @return array
     */
    public static function preprocess_composited_cart_item_addon_data($cart_item, $composite, $cart_contents = \false)
    {
    }
    /**
     * Do not let add-ons adjust prices when CP modifies them.
     *
     * @since  6.0.4
     *
     * @param  bool  $adjust
     * @param  array $cart_item
     * @return bool
     */
    public static function adjust_addons_price($adjust, $cart_item)
    {
    }
    /**
     * Adds filter that discards component add-on prices in composite product pages.
     *
     * @since  6.0.4
     */
    public static function add_addon_price_zero_filter()
    {
    }
    /**
     * Removes filter that discards component add-on prices in composite product pages.
     *
     * @param  WC_CP_Product $filtered_component_option
     *
     * @since  6.0.4
     */
    public static function remove_addon_price_zero_filter($component_option)
    {
    }
    /**
     * Discards component add-on prices in composite product pages.
     *
     * @since  6.0.4
     *
     * @param  mixed $price
     */
    public static function option_price_raw_zero_filter($price)
    {
    }
    /**
     * Add support for REST API.
     *
     * @since  9.0.2
     *
     * @param  array $schema
     * @return array
     */
    public static function rest_api_product_schema($schema)
    {
    }
    /**
     * Expose product addons visibility in the REST API in get context.
     *
     * @since  9.0.2
     *
     * @param  array        $component_data        Component data to be passed to the REST API.
     * @param  array|object $component             Component object.
     * @param  int          $composite_product_id  Composite product ID.
     *
     * @return array
     */
    public static function rest_api_get_component_data($component_data, $component, $composite_product_id)
    {
    }
    /**
     * Set product addons visibility in the REST API in update context.
     *
     * @since  9.0.2
     *
     * @param  array  $component_data        Component data to be passed to the REST API.
     * @param  string $action                Create or update.
     * @param  array  $data                  Data sent from the body of the REST API call.
     * @param  int    $composite_product_id  Composite product ID.
     *
     * @return array
     */
    public static function rest_api_update_component_data($component_data, $action, $data, $composite_product_id)
    {
    }
    /**
     * Render addons for parent product.
     *
     * @param WC_Product_Composite $product The product.
     * @param WC_Order_Item        $item The item.
     * @param WC_Order             $order The order.
     */
    public static function admin_render_composite_addons($product, $item, $order)
    {
    }
    /**
     * Support for component item addons.
     *
     * @param  WC_Product           $product            The product object.
     * @param  int                  $component_id       The component ID.
     * @param  WC_Product_Composite $composite_product  The composite product object.
     *
     * @return void
     */
    public static function admin_render_composite_item_addons($composited_product, $component_id, $composite_product)
    {
    }
    /**
     * Add addons to the posted configuration when editing in order.
     *
     * @param  array $configuration  The configuration.
     * @param  array $product        The product.
     * @param  array $item           The item.
     * @param  array $order          The order.
     *
     * @return array
     */
    public static function editing_composite_item_addons($configuration, $product, $item, $order)
    {
    }
    /**
     * Store addons for parent composite item, if it has any.
     *
     * We need to do this in the `woocommerce_before_editing_composite_in_order` hook, because
     * the `woocommerce_editing_composite_in_order` hook is only run if the component configuration changes, which doesn't take
     * parent composite item addons into account.
     *
     * @param WC_Order_Item_Product $item  The container item.
     * @param WC_Order              $order The order
     *
     * @return void
     */
    public static function store_composite_item_addons($item, $order)
    {
    }
    /**
     * Copy addons from old item to new item.
     *
     * @param WC_Order_Item_Product $new_item The new item.
     * @param WC_Order_Item_Product $old_item The old item.
     * @param WC_Order              $order    The order.
     *
     * @return void
     */
    public static function copy_composite_item_addons($new_item, $old_item, $order)
    {
    }
    /**
     * Store add to order Addons.
     *
     * @param  WC_Order_Item        $composited_order_item
     * @param  WC_Order             $order
     * @param  WC_Product_Composite $composite
     * @param  int                  $quantity
     * @param  array                $args
     */
    public static function store_component_item_addons($composited_order_item, $order, $composite, $quantity, $args)
    {
    }
    /**
     * Validate add to order Addons.
     *
     * @param  WC_CP_Component $component
     * @param  array           $component_validation_data
     * @param  int             $composite_quantity
     * @param  array           $configuration
     * @param  string          $context
     *
     * @return void
     */
    public static function admin_validate_composite_component_addons($component, $component_validation_data, $composite_quantity, $configuration, $context)
    {
    }
    /**
     * Maybe hide the edit button for addons in the order editing screen.
     *
     * @param  boolean $display
     * @param  array   $item
     *
     * @return boolean
     */
    public static function maybe_hide_edit_button($display, $item)
    {
    }
    /**
     * The composite should be editable if any items have addons.
     *
     * @param  boolean              $editable   Whether the composite is editable.
     * @param  WC_Product_Composite $composite  The composite product.
     * @param  array                $item       The cart item.
     *
     * @return boolean
     */
    public static function addon_composite_editable_in_cart($editable, $composite, $item)
    {
    }
    /**
     * Retrieves the add-on data from a cart item for a composite product.
     *
     * @since 10.2.0
     *
     * @param  array      $parsed_addons  Parsed add-ons.
     * @param  WC_Product $product        The product.
     * @param  array      $cart_item      The cart item.
     *
     * @return array
     */
    public static function parse_composite_addons(array $parsed_addons, \WC_Product $product, array $cart_item): array
    {
    }
    /**
     * Filter to force add-ons to include the correct query parameters in cart item link if any products in the bundle have add-ons.
     *
     * @since 10.2.0
     *
     * @param  bool  $allow_cart_key  Whether to allow the cart key.
     * @param  array $cart_item       The cart item.
     *
     * @return bool
     */
    public static function add_cart_key_to_permalink(bool $allow_cart_key, array $cart_item): bool
    {
    }
    /**
     * Adds the PAO key to edit composite links in the cart.
     *
     * @param array                       $args      The permalink arguments.
     * @param array|WC_Order_Item_Product $cart_item The cart item.
     *
     * @return array
     */
    public static function maybe_add_cart_key_to_permalink_args(array $args, $cart_item): array
    {
    }
    // phpcs:enable WordPress.NamingConventions.ValidVariableName.VariableNotSnakeCase
}
/**
 * Adds hooks for AutomateWoo Compatibility.
 *
 * @version  8.7.4
 */
class WC_CP_AutomateWoo_Compatibility
{
    public static function init()
    {
    }
    /**
     * Filter out components from the abandoned cart and keep the composite products (parent).
     *
     * @since  8.7.4
     *
     * @param  array $items
     * @return \AutomateWoo\Cart_Item[]
     */
    public static function filter_get_items($items)
    {
    }
}
/**
 * WooCommerce Blocks Compatibility.
 *
 * @version 8.4.0
 */
class WC_CP_Blocks_Compatibility
{
    /**
     * Initialize.
     */
    public static function init()
    {
    }
}
/**
 * Cost of Goods Compatibility.
 *
 * @version  4.1.0
 */
class WC_CP_COG_Compatibility
{
    public static function init()
    {
    }
    /**
     * Update composited item cost meta when calling 'WC_CP_Order::add_composite_to_order'.
     *
     * @since  4.1.0
     *
     * @param  WC_Order_Item $container_order_item
     * @param  WC_Order      $order
     * @return void
     */
    public static function set_composite_added_to_order_item_cost($container_order_item, $order)
    {
    }
    /**
     * Cost of goods compatibility: Zero order item cost for composited products that belong to statically priced composites.
     *
     * @param  double   $cost
     * @param  array    $item
     * @param  WC_Order $order
     * @return double
     */
    public static function set_composited_order_item_cost($cost, $item, $order)
    {
    }
}
/**
 * Elementor compatibility.
 *
 * @version  7.1.2
 */
class WC_CP_Elementor_Compatibility
{
    public static function init()
    {
    }
    /**
     * If Elementor is enabled, we add an additional class `grouped_form`
     * This class does not have additional default WC styling, and
     * Elementor is using it to exclude it from some styling it does
     *
     * @param array                $form_classes
     * @param WC_Product_Composite $product
     *
     * @return array
     */
    public static function additional_form_classes($form_classes, $product)
    {
    }
}
/**
 * Divi 3.0+ integration.
 *
 * @version  7.1.2
 */
class WC_CP_ET_Compatibility
{
    public static function init()
    {
    }
    /**
     * Add hooks if the active parent theme is Divi.
     */
    public static function maybe_add_hooks()
    {
    }
    /**
     * Unhook woocommerce_after_single_product_summary set inside /includes/wc-cp-template-hooks.php
     * if the Divi builder is used. No need to check the value of the form location
     */
    public static function form_displayed_twice()
    {
    }
    /**
     * Check if builder is used and the product type is "composite"
     * If the Divi builder is used deactivate the form location
     *
     * @param  WC_Product_Composite $composite_product_object
     */
    public static function admin_disable_form_location($composite_product_object)
    {
    }
    /**
     * If the Divi builder is used change the help message that appears in (?)
     * Checking the product type, causes an infinite loop and there is no need to check the type
     * for what we're doing
     *
     * @param array $options
     *
     * @return array
     */
    public static function change_help_message($options)
    {
    }
}
/**
 * Flatsome integration.
 *
 * @version  8.10.5
 */
class WC_CP_FS_Compatibility
{
    public static function init()
    {
    }
    /**
     * Add hooks if the active parent theme is Flatsome.
     */
    public static function maybe_add_hooks()
    {
    }
    /**
     * Initializes bundles in quick view modals.
     *
     * @return array
     */
    public static function add_quickview_integration()
    {
    }
}
/**
 * Jetpack compatibility.
 *
 * @version  4.0.0
 */
class WC_CP_JP_Compatibility
{
    public static function init()
    {
    }
    /**
     * Disable Jetpack's Lazy Load module when populating component options image data.
     *
     * @param  boolean $skip
     * @return boolean
     */
    public static function skip_lazy_load($skip)
    {
    }
}
/**
 * Memberships Integration: Discounts inheritance.
 *
 * @version  10.0.0
 */
class WC_CP_Members_Compatibility
{
    /**
     * Runtime cache.
     *
     * @var boolean
     */
    private static $member_is_logged_in;
    /**
     * Flag used to prevent 'wc_memberships_exclude_product_from_member_discounts' from changing the return value.
     *
     * @var boolean
     */
    private static $calculating_inherited_discounts = \false;
    /**
     * Control flag used in inherit_member_discount().
     *
     * @var boolean
     */
    private static $inherit_member_discount;
    /**
     * Initialization.
     */
    public static function init()
    {
    }
    /**
     * Whether the current user has an active membership.
     *
     * @return bool
     */
    private static function member_is_logged_in()
    {
    }
    /**
     * Inherit Memberships discounts as composited item discounts.
     *
     * @param  mixed         $discount
     * @param  WC_CP_Product $component_option
     * @return mixed
     */
    public static function inherit_member_discount($discount, $component_option)
    {
    }
    /**
     * Prevent Memberships from applying member discounts to composited products -- membership discounts are inherited.
     *
     * @param  boolean    $exclude
     * @param  WC_Product $product
     * @return boolean
     */
    public static function exclude_composited_product_from_member_discounts($exclude, $product)
    {
    }
    /**
     * Enables discount filtering.
     */
    public static function enable_member_discount_inheritance()
    {
    }
    /**
     * Disables discount filtering.
     */
    public static function disable_member_discount_inheritance()
    {
    }
}
/**
 * Min/Max Quantities Compatibility.
 *
 * @version  9.0.0
 */
class WC_CP_Min_Max_Compatibility
{
    /**
     * The composited item object whose qty input is being filtered.
     *
     * @var WC_CP_Product
     */
    public static $composited_item = \false;
    /**
     * Unfiltered quantity input data used at restoration time.
     *
     * @var array
     */
    public static $unfiltered_args = \false;
    public static function init()
    {
    }
    /**
     * Set global $component variable.
     *
     * @param  WC_CP_Product $option
     * @return void
     */
    public static function restore_quantities_set($option)
    {
    }
    /**
     * Unset global $componentvariable.
     *
     * @param  WC_CP_Product $option
     * @return void
     */
    public static function restore_quantities_unset($option)
    {
    }
    /**
     * Save unmodified quantity args.
     *
     * @param  array  $data
     * @param  object $product
     * @return array
     */
    public static function save_quantity_input_args($data, $product)
    {
    }
    /**
     * Restore min/max composited product quantities to the values they had before min/max interference.
     *
     * @param  array  $data
     * @param  object $product
     * @return array
     */
    public static function restore_quantity_input_args($data, $product)
    {
    }
    /**
     * Double-check composited variation data quantities to account for "group of" option.
     *
     * @param  array                $variation_data
     * @param  WC_Product           $composited_product
     * @param  WC_Product_Variation $composited_variation
     * @return array
     */
    public static function composited_variation_data($variation_data, $composited_product, $composited_variation)
    {
    }
    /**
     * Restore allowed min/max quantity for composited items to empty, so min/max cart validation rules do not apply.
     *
     * @param  string $qty_meta
     * @param  string $checking_id
     * @param  string $cart_item_key
     * @param  array  $cart_item
     * @return array
     */
    public static function restore_allowed_quantity($qty_meta, $checking_id, $cart_item_key, $cart_item)
    {
    }
    /**
     * Add composited item and input cart quantity to the product.
     *
     * @param  WC_Product $product
     * @param  array      $cart_item
     * @param  string     $cart_item_key
     * @return WC_Product
     */
    public static function add_component_to_product($product, $cart_item, $cart_item_key)
    {
    }
    /**
     * Filter Min composited item Quantity based on "Group of" option on runtime.
     *
     * @param  mixed           $qty
     * @param  WC_CP_Product   $composited_item
     * @param  WC_CP_Component $component
     *
     * @return mixed
     */
    public static function filter_composited_item_min_quantity($qty, $composited_item, $component)
    {
    }
    /**
     * Filter Max composited item Quantity based on "Group of" option on runtime.
     *
     * @param  mixed           $qty
     * @param  WC_CP_Product   $composited_item
     * @param  WC_CP_Component $component
     *
     * @return mixed
     */
    public static function filter_composited_item_max_quantity($qty, $composited_item, $component)
    {
    }
    /**
     * Returns the "Group of" quantity of a composited item.
     *
     * @param  WC_CP_Product $composited_item
     *
     * @return int
     */
    public static function get_composited_item_group_of_qty($composited_item)
    {
    }
    /**
     * Trigger Min/Max Quantities validation script when components load.
     */
    public static function load_scripts()
    {
    }
}
/**
 * Adds hooks for NYP Compatibility.
 *
 * @version  10.0.0
 */
class WC_CP_NYP_Compatibility
{
    /**
     * NYP form field name suffix.
     *
     * @var string
     */
    private static $nyp_suffix = '';
    /**
     * Current component being worked on.
     *
     * @var boolean
     */
    private static $current_component = \false;
    /**
     * NYP version flag.
     *
     * @var boolean
     */
    private static $is_nyp_3 = \false;
    /**
     * Initialize!
     */
    public static function init()
    {
    }
    /**
     * Outputs nyp markup.
     *
     * @param  WC_Product           $product
     * @param  int                  $component_id
     * @param  WC_Product_Composite $composite
     * @return void
     */
    public static function nyp_display_support($product, $component_id, $composite)
    {
    }
    /**
     * Add NYP component price html filter.
     */
    public static function add_nyp_price_filter()
    {
    }
    /**
     * Remove NYP component price html filter.
     */
    public static function remove_nyp_price_filter()
    {
    }
    /**
     * Sets a suffix for unique nyp.
     *
     * @param  string $suffix
     * @param  int    $product_id
     * @return string
     */
    public static function nyp_cart_suffix($suffix, $product_id)
    {
    }
    /**
     * Add some contextual info to NYP validation messages.
     *
     * @param  string $message
     * @return string
     */
    public static function component_nyp_error_message_context($message)
    {
    }
    /**
     * Validate composited item NYP.
     *
     * @param  bool                 $add
     * @param  int                  $composite_id
     * @param  int                  $component_id
     * @param  int                  $product_id
     * @param  int                  $quantity
     * @param  array                $cart_item_data
     * @param  WC_Product_Composite $composite
     * @return bool
     */
    public static function validate_component_nyp($add, $composite_id, $component_id, $product_id, $quantity, $cart_item_data, $composite)
    {
    }
    /**
     * Add nyp identifier to composited item stamp, in order to generate new cart ids for composites with different nyp configurations.
     *
     * @param  array  $composited_item_identifier
     * @param  string $composited_item_id
     * @return array
     */
    public static function composited_item_nyp_stamp($composited_item_identifier, $composited_item_id)
    {
    }
    /**
     * Runs before adding a composited item to the cart.
     *
     * @param  int   $product_id
     * @param  int   $quantity
     * @param  int   $variation_id
     * @param  array $variations
     * @param  array $composited_item_cart_data
     * @return void
     */
    public static function before_composited_add_to_cart($product_id, $quantity, $variation_id, $variations, $composited_item_cart_data)
    {
    }
    /**
     * Runs after adding a composited item to the cart.
     *
     * @param  int   $product_id
     * @param  int   $quantity
     * @param  int   $variation_id
     * @param  array $variations
     * @param  array $composited_item_cart_data
     * @return void
     */
    public static function after_composited_add_to_cart($product_id, $quantity, $variation_id, $variations, $composited_item_cart_data)
    {
    }
    /**
     * Retrieve child cart item data from the parent cart item data array, if necessary.
     *
     * @param  array $composited_item_cart_data
     * @param  array $cart_item_data
     * @return array
     */
    public static function get_composited_cart_item_data_from_parent($composited_item_cart_data, $cart_item_data)
    {
    }
}
/**
 * Hooks for One Page Checkout compatibility.
 *
 * @version  8.8.0
 */
class WC_CP_OPC_Compatibility
{
    public static function init()
    {
    }
    /**
     * OPC Single-product bundle-type add-to-cart template
     *
     * @param  int $opc_post_id
     * @return void
     */
    public static function opc_single_add_to_cart_composite($opc_post_id)
    {
    }
    /**
     * Prevent OPC from managing composited cart items.
     *
     * @param  bool   $allow
     * @param  array  $cart_item
     * @param  string $cart_item_key
     * @param  string $opc_id
     * @return bool
     */
    public static function opc_disallow_composited_cart_item_modification($allow, $cart_item, $cart_item_key, $opc_id)
    {
    }
}
/**
 * PayPal Compatibility.
 *
 * @version 9.0.5
 */
class WC_CP_PayPal_Compatibility
{
    // Hide smart buttons in product pages when product is a Composite product.
    public static function init()
    {
    }
    /**
     * Hide smart buttons in product pages when product is a Composite product.
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
 * PIP Compatibility.
 *
 * @version  8.8.0
 */
class WC_CP_PIP_Compatibility
{
    /**
     * The document being processed.
     *
     * @var WC_PIP_Document
     */
    public static $document;
    /**
     * Flag to control internal flow in 'items_count'.
     *
     * @var bool
     */
    private static $recounting_items = \false;
    /**
     * Add hooks.
     */
    public static function init()
    {
    }
    /**
     * Rendering a PIP document?
     *
     * @since  3.12.0
     *
     * @param  string $type
     * @return boolean
     */
    public static function rendering_document($type = '')
    {
    }
    /**
     * Fires off before rendering the PIP document body.
     *
     * @since  3.12.0
     *
     * @param  string          $type
     * @param  string          $action
     * @param  WC_PIP_Document $document
     * @param  WC_Order        $order
     * @return void
     */
    public static function before_body($type, $action, $document, $order)
    {
    }
    /**
     * Fires off before rendering the PIP document body.
     *
     * @since  3.12.0
     *
     * @param  string          $type
     * @param  string          $action
     * @param  WC_PIP_Document $document
     * @param  WC_Order        $order
     * @return void
     */
    public static function after_body($type, $action, $document, $order)
    {
    }
    /**
     * Modify the returned order items and products to return the correct items/weights/values for shipping.
     *
     * @since  3.12.0
     */
    public static function add_filters()
    {
    }
    /**
     * Remove filters above.
     *
     * @since  3.12.0
     */
    public static function remove_filters()
    {
    }
    /**
     * Recounts items excluding bundle containers.
     *
     * @param  int $count
     * @return int
     */
    public static function items_count($count)
    {
    }
    /**
     * Temporarily add order item data to array.
     *
     * @param  array      $item_data
     * @param  array      $item
     * @param  WC_Product $product
     * @param  string     $order_id
     * @param  string     $type
     * @return array
     */
    public static function row_item_data($item_data, $item, $product, $order_id, $type)
    {
    }
    /**
     * Re-sort PIP table rows so that composited items are always below their container.
     *
     * @param  array  $table_rows
     * @param  array  $items
     * @param  string $order_id
     * @param  string $type
     * @return array
     */
    public static function table_rows($table_rows, $items, $order_id, $type, $pip_document = \null)
    {
    }
    /**
     * Add 'composited-product' class to pip row classes.
     *
     * @param  array      $classes
     * @param  WC_Product $product
     * @param  array      $item
     * @param  string     $type
     * @return array
     */
    public static function bundled_item_class($classes, $product, $item, $type)
    {
    }
    /**
     * Add component title to order item title.
     *
     * @param  string        $name
     * @param  WC_Order_Item $item
     * @param  boolean       $is_visible
     * @param  string        $type
     * @param  WC_Product    $product
     * @param  WC_Order      $order
     * @return string
     */
    public static function order_item_component_name($name, $item, $is_visible, $type, $product, $order)
    {
    }
    /**
     * Add "assembled" item meta to pick-lists.
     *
     * @since  3.12.0
     *
     * @param  int           $item_id
     * @param  WC_Order_Item $item
     */
    public static function add_assembled_order_item_meta($item_id, $item)
    {
    }
    /**
     * Ensure container line items are always displayed, otherwise we will not be able to collect their children in 'table_rows'.
     *
     * @param  boolean    $hide
     * @param  WC_Product $product
     * @param  array      $order_item
     * @param  WC_Order   $order
     * @return boolean
     */
    public static function hide_item($hide, $product, $order_item, $order)
    {
    }
    /**
     * Prevent composited order items from being sorted/categorized.
     *
     * @param  boolean  $uncategorize
     * @param  array    $order_item
     * @param  WC_Order $order
     * @return boolean
     */
    public static function group_bundled_items_as_uncategorized($uncategorize, $order_item, $order)
    {
    }
    /**
     * Add composited item class CSS rule.
     */
    public static function add_styles()
    {
    }
}
/**
 * Points and Rewards Compatibility.
 *
 * @version  8.10.0
 */
class WC_CP_PnR_Compatibility
{
    /**
     * Composite points - @see 'WC_CP_PnR_Compatibility::replace_points'.
     *
     * @var boolean
     */
    private static $composite_price_max = \false;
    private static $composite_price_min = \false;
    /**
     * Bypass 'wc_points_rewards_single_product_message' filter.
     *
     * @var boolean
     */
    private static $single_product_message_filter_active = \true;
    /**
     * Initialization.
     */
    public static function init()
    {
    }
    /**
     * Return zero points for composited cart items if container item has product level points.
     *
     * @param  int    $points
     * @param  string $cart_item_key
     * @param  array  $cart_item_values
     * @return int
     */
    public static function points_earned_for_composited_cart_item($points, $cart_item_key, $cart_item_values)
    {
    }
    /**
     * Return zero points for composited cart items if container item has product level points.
     *
     * @param  int      $points
     * @param  string   $item_key
     * @param  array    $item
     * @param  WC_Order $order
     * @return int
     */
    public static function points_earned_for_composited_order_item($points, $product, $item_key, $item, $order)
    {
    }
    /**
     * Points and Rewards single product message for Composites that contain individually-priced components.
     *
     * @param  string                    $message
     * @param  WC_Points_Rewards_Product $points_n_rewards
     * @return string
     */
    public static function points_rewards_composite_message($message, $points_n_rewards)
    {
    }
    /**
     * Filter option_wc_points_rewards_single_product_message in order to force 'WC_Points_Rewards_Product::render_variation_message' to display nothing.
     */
    public static function points_rewards_remove_price_html_messages($args)
    {
    }
    /**
     * Restore option_wc_points_rewards_single_product_message. Forced in order to force 'WC_Points_Rewards_Product::render_variation_message' to display nothing.
     */
    public static function points_rewards_restore_price_html_messages($args)
    {
    }
    /**
     * @see points_rewards_remove_price_html_messages
     *
     * @param  string $message
     * @return void
     */
    public static function return_empty_message($message)
    {
    }
    /**
     * Filter composite price returned by 'get_price' to return the min/max composite price.
     *
     * @param  mixed                $price
     * @param  WC_Product_Composite $product
     * @return mixed
     */
    public static function replace_price($price, $product)
    {
    }
    /**
     * True if the composite has fixed product- or category-level points.
     *
     * @param  WC_Product_Composite $composite
     * @return boolean
     */
    private static function has_fixed_points($composite)
    {
    }
}
/**
 * Pre Orders compatibility.
 *
 * @version  3.7.0
 */
class WC_CP_PO_Compatibility
{
    public static function init()
    {
    }
    /**
     * Remove composited cart item meta "Available On" text.
     *
     * @param  array $pre_order_meta
     * @param  array $cart_item_data
     * @return array
     */
    public static function remove_composite_pre_orders_cart_item_meta($pre_order_meta, $cart_item_data)
    {
    }
    /**
     * Remove composited order item meta "Available On" text.
     *
     * @param  array    $pre_order_meta
     * @param  array    $order_item
     * @param  WC_Order $order
     * @return array
     */
    public static function remove_composite_pre_orders_order_item_meta($pre_order_meta, $order_item, $order)
    {
    }
}
/**
 * PayPal Express Checkout Compatibility.
 *
 * @version  7.1.4
 */
class WC_CP_PPEC_Compatibility
{
    public static function init()
    {
    }
    /**
     * Enable/Disable PayPal Express Checkout Quick-pay buttons based on the validity of the Composite's configuration.
     *
     * @since 7.1.4
     */
    public static function handle_ppec_quickpay_buttons_visibility()
    {
    }
}
/**
 * WooCommerce Quantity Increment compatibility.
 *
 * @version 3.3.0
 */
class WC_CP_QI_Compatibility
{
    public static function init()
    {
    }
    /**
     * Render WC 2.2 quantity buttons markup when the WC Quantity Increment plugin is active.
     *
     * @param  array $params
     * @return array
     */
    public static function quantity_increment_support($params)
    {
    }
}
/**
 * QuickView compatibility.
 */
class WC_CP_QV_Compatibility
{
    public static function init()
    {
    }
    /**
     * Load scripts for use by QV on non-product pages.
     */
    public static function load_scripts()
    {
    }
    /**
     * Fixes QuickView support for Composites when ajax add-to-cart is active and QuickView operates without a separate button.
     *
     * @param   string $selector
     * @return  void
     */
    public static function qv_selector($selector)
    {
    }
}
/**
 * Storefront integration.
 *
 * @version  4.0.3
 */
class WC_CP_SF_Compatibility
{
    public static function init()
    {
    }
    /**
     * Add hooks if the active parent theme is Storefront.
     */
    public static function maybe_add_hooks()
    {
    }
    /**
     * Disable accessible focus with older Storefront versions.
     *
     * @since  4.0.0
     *
     * @param  array $params
     * @return array
     */
    public static function disable_accessible_focus($params)
    {
    }
    /**
     * Set corrent sticky add to cart button trigger element when "Form Location" is "After Summary".
     *
     * @param  array $params
     * @return array
     */
    public static function sticky_add_to_cart_params($params)
    {
    }
}
/**
 * Shipstation Integration.
 *
 * @version  3.12.0
 */
class WC_CP_Shipstation_Compatibility
{
    public static function init()
    {
    }
    /**
     * Modify the returned order items and products to return the correct items/weights/values for shipping.
     */
    public static function add_filters()
    {
    }
}
/**
 * Shipwire Integration.
 *
 * @version  3.8.0
 */
class WC_CP_Shipwire_Compatibility
{
    public static function init()
    {
    }
    /**
     * Modify the returned order items and products to return the correct items/weights/values for shipping.
     */
    public static function add_filters()
    {
    }
    /**
     * Remove filters.
     */
    public static function remove_filters()
    {
    }
}
/**
 * Stripe Compatibility.
 *
 * @version  9.0.5
 */
class WC_CP_Stripe_Compatibility
{
    public static function init()
    {
    }
    /**
     * Hide Stripe Quick-pay buttons for non-static Composites.
     *
     * @since 7.1.4
     */
    public static function hide_stripe_quickpay($hide_button, $post)
    {
    }
}
/**
 * Subscriptions Integration.
 *
 * @version  3.7.0
 */
class WC_CP_Subscriptions_Compatibility
{
    public static function init()
    {
    }
    /**
     * Remove orphaned bundled item when paying for an order that contains subscription items.
     *
     * @param  string $cart_item_key
     * @param  int    $product_id
     * @param  int    $quantity
     * @param  int    $variation_id
     * @param  array  $variation
     * @param  array  $cart_item_data
     * @return void
     */
    public static function remove_orhpaned_composited_cart_item($cart_item_key, $product_id, $quantity, $variation_id, $variation, $cart_item_data)
    {
    }
}
/**
 * ThemeAlien Variation Swatches for WooCommerce
 *
 * @version  8.8.0
 */
class WC_CP_TAWS_Variation_Swatches_Compatibility
{
    public static function init()
    {
    }
    /**
     * Add footer script to support ThemeAlien's Variation Swatches.
     *
     * @return void
     */
    public static function tawc_variation_swatches_form_support()
    {
    }
}
/**
 * WooPayments Integration.
 *
 * @version  9.0.5
 */
class WC_CP_WC_Payments_Compatibility
{
    // Hide quick-pay buttons when product is a Composite product.
    public static function init()
    {
    }
    /**
     * Hide quick-pay buttons when product is a Composite product.
     *
     * @param  bool       $is_supported
     * @param  WC_Product $product
     * @return bool
     */
    public static function handle_quick_pay_buttons($is_supported, $product)
    {
    }
}
/**
 * WooCommerce Services Integration.
 *
 * @version  7.0.6
 */
class WC_CP_WC_Services_Compatibility
{
    public static function init()
    {
    }
    /**
     * Adds the necessary filters when processing requests on the `connect/label' endpoint.
     */
    public static function add_rest_filters($dispatch_result, $request, $route)
    {
    }
    /**
     * Adds the necessary filters at the beginning of the edit-order postboxes created by WC Services.
     */
    public static function add_postbox_filters($classes)
    {
    }
    /**
     * Adds the necessary filters at the beginning of the edit-order postboxes created by WC Services.
     */
    public static function remove_postbox_filters($payload)
    {
    }
    /**
     * Modify the returned order items and products to return the correct items/weights/values for shipping.
     */
    public static function add_filters()
    {
    }
    /**
     * Modify the returned order items and products to return the correct items/weights/values for shipping.
     */
    public static function remove_filters()
    {
    }
}
/**
 * WooCommerce Wishlists Compatibility.
 *
 * @version  9.0.2
 */
class WC_CP_Wishlists_Compatibility
{
    public static function init()
    {
    }
    /**
     * Inserts composite contents after main wishlist composited item is displayed.
     *
     * @param  array $item
     * @param  array $wishlist
     * @return void
     */
    public static function wishlist_after_list_item_name($item, $wishlist)
    {
    }
    /**
     * Modifies wishlist composited item price - the precise sum cannot be displayed reliably unless the item is added to the cart.
     *
     * @param  double $price
     * @param  array  $item
     * @param  array  $wishlist
     * @return string  $price
     */
    public static function wishlist_list_item_price($price, $item, $wishlist)
    {
    }
}
/**
 * Zapier compatibility.
 *
 * @version  8.1.1
 */
class WC_CP_Zapier_Compatibility
{
    public static function init()
    {
    }
    /**
     * Removes Scenario fields from REST API schema.
     *
     * @param  array $schema
     * @return array
     */
    public static function remove_composite_scenarios_field($schema)
    {
    }
}
/**
 * Composite Products Data class.
 *
 * Composite Products Data filters and includes.
 *
 * @class    WC_CP_Data
 * @version  3.9.0
 */
class WC_CP_Data
{
    public static function init()
    {
    }
    /**
     * Registers the Composite Product Custom Post Type data store.
     *
     * @param  array $stores
     * @return array
     */
    public static function register_composite_type_data_store($stores)
    {
    }
}
/**
 * WC Composite Product Data Store class
 *
 * Composite data stored as Custom Post Type. For use with the WC 3.0+ CRUD API.
 *
 * @class    WC_Product_Composite_Data_Store_CPT
 * @version  10.0.2
 */
class WC_Product_Composite_Data_Store_CPT extends \WC_Product_Data_Store_CPT
{
    /**
     * Data stored in meta keys, but not considered "meta" for the Composite type.
     *
     * @var array
     */
    protected $extended_internal_meta_keys = array('_bto_data', '_bto_virtual_composite', '_bto_scenario_data', '_bto_base_price', '_bto_base_regular_price', '_bto_base_sale_price', '_bto_shop_price_calc', '_bto_style', '_bto_add_to_cart_form_location', '_bto_edit_in_cart', '_bto_aggregate_weight', '_bto_sold_individually', '_wc_sw_max_price');
    /**
     * Maps extended properties to meta keys.
     *
     * @var array
     */
    protected $props_to_meta_keys = array('virtual_composite' => '_bto_virtual_composite', 'price' => '_bto_base_price', 'regular_price' => '_bto_base_regular_price', 'sale_price' => '_bto_base_sale_price', 'layout' => '_bto_style', 'add_to_cart_form_location' => '_bto_add_to_cart_form_location', 'shop_price_calc' => '_bto_shop_price_calc', 'editable_in_cart' => '_bto_edit_in_cart', 'aggregate_weight' => '_bto_aggregate_weight', 'sold_individually_context' => '_bto_sold_individually', 'min_raw_price' => '_price', 'max_raw_price' => '_wc_sw_max_price');
    /**
     * Callback to exclude composite-specific meta data.
     *
     * @param  object $meta
     * @return bool
     */
    protected function exclude_internal_meta_keys($meta)
    {
    }
    /**
     * Reads all composite-specific post meta.
     *
     * @param  WC_Product_Composite $product
     */
    protected function read_product_data(&$product)
    {
    }
    /**
     * Writes all composite-specific post meta.
     *
     * @param  WC_Product_Composite $product
     * @param  boolean              $force
     */
    protected function update_post_meta(&$product, $force = \false)
    {
    }
    /**
     * Handle updated meta props after updating meta data.
     *
     * @param  WC_Product_Composite $product
     */
    protected function handle_updated_props(&$product)
    {
    }
    /**
     * Get data to save to a lookup table.
     *
     * @since  4.0.0
     *
     * @param  int    $id
     * @param  string $table
     * @return array
     */
    protected function get_data_for_lookup_table($id, $table)
    {
    }
    /**
     * Writes composite raw price meta to the DB.
     *
     * @param  WC_Product_Composite $product
     */
    public function save_raw_prices(&$product)
    {
    }
    /**
     * Calculate component option vectors for min/max price calculations.
     *
     * @since  4.0.0
     *
     * @param  WC_Product_Composite $product
     * @return array
     */
    private function read_permutation_vectors($product)
    {
    }
    /**
     * Calculates and returns the configuration that correspond to the minimum & maximum price.
     *
     * @param  WC_Product_Composite $product
     * @param  mixed                $task_runner_args
     * @return array
     */
    public function read_price_data(&$product, $task_runner_args = \false)
    {
    }
    /**
     * Calculates the price of a permutation.
     *
     * @since  4.0.0
     *
     * @param  array  $permutation
     * @param  array  $components
     * @param  array  $prices
     * @param  string $min_or_max
     * @return mixed
     */
    private function get_permutation_price($permutation, $components, $prices, $min_or_max = 'min')
    {
    }
    /**
     * Get raw product prices straight from the DB.
     *
     * @param  array $product_ids
     * @return array
     */
    public function get_raw_component_option_prices($product_ids)
    {
    }
    /**
     * Get expanded component options to include variations straight from the DB.
     *
     * @since  3.14.0
     *
     * @param  array $product_ids
     * @return array
     */
    public static function get_expanded_component_options($product_ids, $return = 'expanded')
    {
    }
    /**
     * Use 'WP_Query' to preload product data from the 'posts' table.
     * Useful when we know we are going to call 'wc_get_product' against a list of IDs.
     *
     * @since  3.13.2
     *
     * @param  array $product_ids
     * @return void
     */
    public function preload_component_options_data($product_ids)
    {
    }
    /**
     * Component option query handler.
     *
     * @since  3.14.0
     *
     * @param  array $component_data
     * @param  array $query_args
     * @return array
     */
    public function query_component_options($component_data, $query_args)
    {
    }
}
/**
 * Composite Product Config Summary Widget.
 *
 * Displays configuration summary of the currently displayed composite product.
 * By default applicable to Multi-page Composites only.
 *
 * @version  8.10.4
 * @extends  WC_Widget
 */
class WC_Widget_Composite extends \WC_Widget
{
    const BASE_ID = 'woocommerce_widget_composite_summary';
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Render function.
     *
     * @see self::widget()
     *
     * @param  WC_Product $product
     * @param  array      $args
     *
     * @return void
     */
    public static function render($product, $args)
    {
    }
    /**
     * Widget function.
     *
     * @see WP_Widget
     *
     * @param  array $args
     * @param  array $instance
     *
     * @return void
     */
    public function widget($args, $instance)
    {
    }
    /**
     * True if the widget can be viewed.
     *
     * @return boolean
     */
    public static function is_visible()
    {
    }
    /**
     * True if the widget is visible.
     *
     * @return boolean
     */
    public static function is_active()
    {
    }
    /**
     * Display options.
     *
     * @return array
     */
    public static function get_display_options()
    {
    }
}
/**
 * Main plugin class.
 *
 * @class    WC_Composite_Products
 * @version  10.1.3
 */
class WC_Composite_Products
{
    /**
     * The plugin version
     *
     * @var string
     */
    public $version = '10.2.0';
    /**
     * The minimum required WooCommerce version.
     *
     * @var string
     */
    public $required = '8.2.0';
    /**
     * The product ID for Composite Products at WooCommerce.com
     *
     * @var int
     *
     * @since 10.1.1
     */
    public $wccom_product_id = 216836;
    /**
     * The single instance of the class.
     *
     * @var WC_Composite_Products
     *
     * @since 3.2.3
     */
    protected static $_instance = \null;
    /**
     * Product data object.
     *
     * @var WC_CP_Product_Data
     *
     * @since 9.0.0
     */
    public $product_data;
    /**
     * Main WC_Composite_Products instance.
     *
     * Ensures only one instance of WC_Composite_Products is loaded or can be loaded - @see 'WC_CP()'.
     *
     * @since  3.2.3
     *
     * @static
     * @return WC_Composite_Products - Main instance
     */
    public static function instance()
    {
    }
    /**
     * Cloning is forbidden.
     *
     * @since 3.2.3
     */
    public function __clone()
    {
    }
    /**
     * Unserializing instances of this class is forbidden.
     *
     * @since 3.2.3
     */
    public function __wakeup()
    {
    }
    /**
     * Contructor.
     *
     * @since 1.0.0
     */
    public function __construct()
    {
    }
    /**
     * Auto-load in-accessible properties.
     *
     * @param  mixed $key
     * @return mixed
     */
    public function __get($key)
    {
    }
    /**
     * Gets the plugin url.
     *
     * @since  1.0.0
     *
     * @return string
     */
    public function plugin_url()
    {
    }
    /**
     * Gets the plugin path.
     *
     * @since  1.0.0
     *
     * @return string
     */
    public function plugin_path()
    {
    }
    /**
     * Plugin base path name getter.
     *
     * @since  3.7.0
     *
     * @return string
     */
    public function plugin_basename()
    {
    }
    /**
     * Indicates whether the plugin has been fully initialized.
     *
     * @since  6.2.0
     *
     * @return boolean
     */
    public function plugin_initialized()
    {
    }
    /**
     * Define constants if not present.
     *
     * @since  6.2.0
     *
     * @return boolean
     */
    protected function maybe_define_constant($name, $value)
    {
    }
    /**
     * Plugin version getter.
     *
     * @since  3.14.0
     *
     * @param  boolean $base
     * @param  string  $version
     * @return string
     */
    public function plugin_version($base = \false, $version = '')
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
     * A simple dumb datastore for sharing information accross our plugins.
     *
     * @since  7.0.3
     *
     * @return void
     */
    private function maybe_create_store()
    {
    }
    /**
     * Includes.
     */
    public function includes()
    {
    }
    /**
     * Loads the Admin filters / hooks.
     */
    private function admin_includes()
    {
    }
    /**
     * Load textdomain.
     */
    public function load_translation()
    {
    }
    /**
     * Returns URL to a doc or support resource.
     *
     * @since  7.0.3
     *
     * @param  string $handle
     * @return string
     */
    public function get_resource_url($handle)
    {
    }
    /**
     * Get the file modified time as a cache buster if we're in dev mode.
     *
     * @since 8.4.0
     *
     * @param  string $file
     * @return string
     */
    public function get_file_version($file)
    {
    }
    /**
     * Handle plugin activation process.
     *
     * @since  8.5.1
     *
     * @return void
     */
    public function on_activation()
    {
    }
    /**
     * Handle plugin deactivation process.
     *
     * @since  8.5.1
     *
     * @return void
     */
    public function on_deactivation()
    {
    }
}
/*
---------------*/
/*
	Cart         */
/*---------------*/
/**
 * Given a composited cart item, find and return its container cart item - the Composite - or its cart id when the $return_id arg is true.
 *
 * @param  array   $maybe_composited_cart_item
 * @param  array   $cart_contents
 * @param  boolean $return_id
 * @return mixed
 */
function wc_cp_get_composited_cart_item_container($maybe_composited_cart_item, $cart_contents = \false, $return_id = \false)
{
}
/**
 * Given a composite container cart item, find and return its child cart items - or their cart ids when the $return_ids arg is true.
 * Includes a deep mode argument to allow filtering the result of the internal cart item comparison.
 *
 * @param  array   $maybe_composite_container_cart_item
 * @param  array   $cart_contents
 * @param  boolean $return_ids
 * @param  boolean $deep_mode
 * @return mixed
 */
function wc_cp_get_composited_cart_items($maybe_composite_container_cart_item, $cart_contents = \false, $return_ids = \false, $deep_mode = \false)
{
}
/**
 * True if a cart item is part of a composite.
 * Instead of relying solely on cart item data, the function also checks that the alleged parent item actually exists.
 *
 * @param  array $maybe_composited_cart_item
 * @param  array $cart_contents
 * @return boolean
 */
function wc_cp_is_composited_cart_item($maybe_composited_cart_item, $cart_contents = \false)
{
}
/**
 * True if a cart item appears to be part of a composite.
 * The result is purely based on cart item data - the function does not check that a valid parent item actually exists.
 *
 * @param  array $maybe_composited_cart_item
 * @return boolean
 */
function wc_cp_maybe_is_composited_cart_item($maybe_composited_cart_item)
{
}
/**
 * True if a cart item appears to be a composite container item.
 *
 * @param  array $cart_item
 * @return boolean
 */
function wc_cp_is_composite_container_cart_item($maybe_composite_container_cart_item)
{
}
/*
---------------*/
/*
	Orders       */
/*---------------*/
/**
 * Given a composited order item, find and return its container order item - the Composite - or its order item id when the $return_id arg is true.
 *
 * @param  array    $maybe_composited_order_item
 * @param  WC_Order $order
 * @param  boolean  $return_id
 * @return mixed
 */
function wc_cp_get_composited_order_item_container($maybe_composited_order_item, $order = \false, $return_id = \false)
{
}
/**
 * Given a composite container order item, find and return its child order items - or their order item ids when the $return_ids arg is true.
 * Includes a deep mode argument to allow filtering the result of the internal order item comparison.
 *
 * @param  array    $item
 * @param  WC_Order $order
 * @param  boolean  $return_ids
 * @param  boolean  $deep_mode
 * @return mixed
 */
function wc_cp_get_composited_order_items($maybe_composite_container_order_item, $order = \false, $return_ids = \false, $deep_mode = \false)
{
}
/**
 * True if an order item is part of a composite.
 * Instead of relying solely on the existence of item meta, the function also checks that the alleged parent item actually exists.
 *
 * @param  array    $maybe_composited_order_item
 * @param  WC_Order $order
 * @return boolean
 */
function wc_cp_is_composited_order_item($maybe_composited_order_item, $order = \false)
{
}
/**
 * True if an order item appears to be part of a composite.
 * The result is purely based on item meta - the function does not check that a valid parent item actually exists.
 *
 * @param  array $maybe_composited_order_item
 * @return boolean
 */
function wc_cp_maybe_is_composited_order_item($maybe_composited_order_item)
{
}
/**
 * True if an order item appears to be a composite container item.
 *
 * @param  array $maybe_composited_container_order_item
 * @return boolean
 */
function wc_cp_is_composite_container_order_item($maybe_composited_container_order_item)
{
}
/*
--------------------------*/
/*
	Conditional functions.  */
/*--------------------------*/
/**
 * True if the current product page is a composite product.
 *
 * @return boolean
 */
function is_composite_product()
{
}
/*
----------------------------*/
/*
	Helper functions.         */
/*----------------------------*/
/**
 * get_option( 'woocommerce_calc_taxes' ) cache.
 *
 * @return string
 */
function wc_cp_calc_taxes()
{
}
/**
 * get_option( 'woocommerce_prices_include_tax' ) cache.
 *
 * @return string
 */
function wc_cp_prices_include_tax()
{
}
/**
 * get_option( 'woocommerce_tax_display_shop' ) cache.
 *
 * @return string
 */
function wc_cp_tax_display_shop()
{
}
/**
 * get_option( 'woocommerce_price_decimal_sep' ) cache.
 *
 * @return string
 */
function wc_cp_price_decimal_sep()
{
}
/**
 * get_option( 'woocommerce_price_thousand_sep' ) cache.
 *
 * @return string
 */
function wc_cp_price_thousand_sep()
{
}
/**
 * Wrapper around 'wc_get_rounding_precision' and 'wc_get_price_decimals' that caches results to avoid callback hell.
 *
 * @return string
 */
function wc_cp_price_num_decimals($context = '')
{
}
/**
 * Builds terms tree of a flatten terms array.
 *
 * @since  7.0.0
 *
 * @param  array $terms Array of WP_Term objects.
 * @param  int   $parent_id
 * @return array
 */
function wc_cp_build_taxonomy_tree($terms, $parent_id = 0)
{
}
/**
 * Prints <option/> elements for a given terms tree.
 *
 * @since  7.0.0
 *
 * @param  array  $terms Array of WP_Term objects.
 * @param  array  $selected_ids
 * @param  string $prefix_html
 * @param  array  $args
 * @return void
 */
function wc_cp_print_taxonomy_tree_options($terms, $selected_ids = array(), $args = array())
{
}
/**
 * Cartesian product based on generator.
 *
 * @param  array $vectors
 * @return array
 */
function wc_cp_cartesian($vectors)
{
}
/*
---------------------------------------------------------*/
/*
	Composite products single product template functions.  */
/*---------------------------------------------------------*/
/**
 * Checks whether this product is rendered using a legacy template; an indication that a classic theme is in use.
 * Although a legacy PHP template might be in use with a block theme (via the "Legacy PHP Product Block", the extension does not account for this scenario when gating template features.
 *
 * @since  8.10.0
 *
 * @param  WC_Product $product
 * @return boolean
 */
function wc_cp_has_legacy_product_template($product)
{
}
/**
 * Add-to-cart template for composite products. Form location: After summary.
 *
 * @since  3.13.0
 */
function wc_cp_add_to_cart_after_summary()
{
}
/**
 * Add-to-cart template for composite products. Form location: Default.
 */
function wc_cp_add_to_cart()
{
}
/**
 * Add-to-cart button and quantity template for composite products.
 *
 * @param  WC_Product_Composite $composite
 */
function wc_cp_add_to_cart_button($composite = \false)
{
}
/*
-----------------------------------------------------------------------------*/
/*
	Composite products single product summary widget functions.                */
/*-----------------------------------------------------------------------------*/
/**
 * Summary widget content.
 *
 * @since  3.6.0
 *
 * @param  array                $components
 * @param  WC_Product_Composite $composite
 * @param  array                $widget_options
 */
function wc_cp_summary_widget_content($components, $composite, $widget_options)
{
}
/**
 * Summary widget wrapper start.
 *
 * @since  3.12.0
 *
 * @param  array                $components
 * @param  WC_Product_Composite $composite
 * @param  array                $widget_options
 */
function wc_cp_summary_widget_details_wrapper_start($components, $composite, $widget_options)
{
}
/**
 * Summary widget wrapper end.
 *
 * @since  3.12.0
 *
 * @param  array                $components
 * @param  WC_Product_Composite $composite
 * @param  array                $widget_options
 */
function wc_cp_summary_widget_details_wrapper_end($components, $composite, $widget_options)
{
}
/**
 * Summary widget UI wrapper start.
 *
 * @since  3.12.0
 *
 * @param  array                $components
 * @param  WC_Product_Composite $composite
 * @param  array                $widget_options
 */
function wc_cp_summary_widget_ui_wrapper_start($components, $composite, $widget_options)
{
}
/**
 * Summary widget UI wrapper end.
 *
 * @since  3.12.0
 *
 * @param  array                $components
 * @param  WC_Product_Composite $composite
 * @param  array                $widget_options
 */
function wc_cp_summary_widget_ui_wrapper_end($components, $composite, $widget_options)
{
}
/**
 * Summary widget price. Empty element to be populated by the script.
 *
 * @since  3.6.0
 *
 * @param  array                $components
 * @param  WC_Product_Composite $composite
 */
function wc_cp_summary_widget_price($components, $composite)
{
}
/**
 * Summary widget validation message. Empty element to be populated by the script.
 *
 * @since  3.6.0
 *
 * @param  array                $components
 * @param  WC_Product_Composite $composite
 */
function wc_cp_summary_widget_message($components, $composite)
{
}
/**
 * Summary widget product availability.
 *
 * @since  3.6.0
 *
 * @param  array                $components
 * @param  WC_Product_Composite $composite
 */
function wc_cp_summary_widget_availability($components, $product)
{
}
/**
 * Summary widget add-to-cart button.
 *
 * @since  3.6.0
 *
 * @param  array                $components
 * @param  WC_Product_Composite $composite
 */
function wc_cp_summary_widget_button($components, $composite)
{
}
/**
 * Summary widget validation message. Empty element to be populated by the script.
 *
 * @since  4.0.0
 *
 * @param  array                $components
 * @param  WC_Product_Composite $composite
 * @param  array                $widget_options
 */
function wc_cp_summary_widget_message_default($components, $composite, $widget_options)
{
}
/**
 * Summary widget validation message. Empty element to be populated by the script.
 *
 * @since  4.0.0
 *
 * @param  array                $components
 * @param  WC_Product_Composite $composite
 * @param  array                $widget_options
 */
function wc_cp_summary_widget_message_fixed($components, $composite, $widget_options)
{
}
/*
-----------------------------------------------------------------------------*/
/*
	Composite products single product template functions - Component Options.  */
/*-----------------------------------------------------------------------------*/
/**
 * Show current selection scroll target in paged modes.
 *
 * @since  4.0.0
 *
 * @param  string               $component_id
 * @param  WC_Product_Composite $product
 */
function wc_cp_component_selection_scroll_target_paged_top($component_id, $product)
{
}
/**
 * Component selection notices container displayed in the 'component_selections' container (paged layout, thumbnails).
 *
 * @since  4.0.0
 *
 * @param  string               $component_id
 * @param  WC_Product_Composite $product
 */
function wc_cp_component_selection_message_paged_top($component_id, $product)
{
}
/**
 * Show current selection details in paged modes -- added before component options when viewed as thumbnails.
 *
 * @since  4.0.0
 *
 * @param  string               $component_id
 * @param  WC_Product_Composite $product
 */
function wc_cp_component_selection_paged_top($component_id, $product)
{
}
/**
 * In progressive mode, wrap component options & sorting/filtering controls in a blockable div.
 *
 * @since  4.0.0
 *
 * @param  string               $component_id
 * @param  WC_Product_Composite $product
 */
function wc_cp_component_options_progressive_start($component_id, $product)
{
}
/**
 * Add sorting input.
 *
 * @since  4.0.0
 *
 * @param  string               $component_id
 * @param  WC_Product_Composite $product
 */
function wc_cp_component_options_sorting($component_id, $product)
{
}
/**
 * Add attribute filters.
 *
 * @since  4.0.0
 *
 * @param  string               $component_id
 * @param  WC_Product_Composite $product
 */
function wc_cp_component_options_filtering($component_id, $product)
{
}
/**
 * Show component options title.
 *
 * @since  4.0.0
 *
 * @param  string               $component_id
 * @param  WC_Product_Composite $product
 */
function wc_cp_component_options_title($component_id, $product)
{
}
/**
 * Show component options top pagination.
 *
 * @since  4.0.0
 *
 * @param  string               $component_id
 * @param  WC_Product_Composite $product
 */
function wc_cp_component_options_pagination_top($component_id, $product)
{
}
/**
 * Show component options.
 *
 * @since  4.0.0
 *
 * @param  string               $component_id
 * @param  WC_Product_Composite $product
 */
function wc_cp_component_options($component_id, $product)
{
}
/**
 * Show component options bottom pagination.
 *
 * @since  4.0.0
 *
 * @param  string               $component_id
 * @param  WC_Product_Composite $product
 */
function wc_cp_component_options_pagination_bottom($component_id, $product)
{
}
/**
 * In progressive mode, wrap component options & sorting/filtering controls in a blockable div.
 *
 * @since  4.0.0
 *
 * @param  string               $component_id
 * @param  WC_Product_Composite $product
 */
function wc_cp_component_options_progressive_end($component_id, $product)
{
}
/**
 * Show current selection details in non-paged modes.
 *
 * @since  4.0.0
 *
 * @param  string               $component_id
 * @param  WC_Product_Composite $product
 * @return void
 */
function wc_cp_component_selection($component_id, $product)
{
}
/**
 * Show current selection details in paged modes -- added after component options when viewed as drop-downs/radios.
 *
 * @since  4.0.0
 *
 * @param  string               $component_id
 * @param  WC_Product_Composite $product
 */
function wc_cp_component_selection_paged_bottom($component_id, $product)
{
}
/**
 * Component selection notices container displayed in the 'component_selections' container (paged layout, dropdowns/radios).
 *
 * @param  string               $component_id
 * @param  WC_Product_Composite $product
 */
function wc_cp_component_selection_message_paged_bottom($component_id, $product)
{
}
/**
 * Show component options pagination.
 *
 * @param  string               $component_id
 * @param  WC_Product_Composite $product
 * @param  array                $classes
 */
function wc_cp_component_options_pagination($component_id, $product, $classes = array())
{
}
/**
 * Show component options as a dropdown.
 *
 * @param  string               $component_id
 * @param  WC_Product_Composite $product
 */
function wc_cp_component_options_dropdown($component_id, $product)
{
}
/**
 * Show component options as thumbnails.
 *
 * @param  string               $component_id
 * @param  WC_Product_Composite $product
 */
function wc_cp_component_options_thumbnails($component_id, $product)
{
}
/**
 * Show component option as radio buttons.
 *
 * @param  string               $component_id
 * @param  WC_Product_Composite $product
 */
function wc_cp_component_options_radios($component_id, $product)
{
}
/*
----------------------------------------------------------------------------------*/
/*
	Composite products single product template functions - Composite.               */
/*----------------------------------------------------------------------------------*/
/**
 * Add Composite Summary on the 'woocommerce_before_add_to_cart_button' hook.
 */
function wc_cp_before_add_to_cart_button()
{
}
/**
 * Add Review/Summary with current configuration details.
 * The Summary template must be loaded if the summary widget is active.
 *
 * @param  array                $components
 * @param  WC_Product_Composite $product
 */
function wc_cp_summary($components, $product)
{
}
/**
 * Hook layout/style-specific content on the 'woocommerce_composite_before_components' action.
 */
function wc_cp_before_components($components, $product)
{
}
/**
 * Hook layout/style-specific content on the 'woocommerce_composite_after_components' action.
 *
 * @return void
 */
function wc_cp_after_components($components, $product)
{
}
/**
 * Loading status message.
 */
function wc_cp_status()
{
}
/**
 * Add-to-cart section.
 *
 * @param  array                $components
 * @param  WC_Product_Composite $product
 */
function wc_cp_add_to_cart_section($components, $product)
{
}
/**
 * Add previous/next navigation buttons in paged mode -- added on bottom of page under the component options section.
 *
 * @param  array                $components
 * @param  WC_Product_Composite $product
 */
function wc_cp_navigation_bottom($components, $product)
{
}
/**
 * Add previous/next navigation buttons in paged mode -- added on top of page under the composite pagination section when component options are viewed as thumbnails.
 *
 * @param  array                $components
 * @param  WC_Product_Composite $product
 */
function wc_cp_navigation_top($components, $product)
{
}
/**
 * Add previous/next navigation buttons in multi-page mode -- added on top of page under the composite pagination section.
 *
 * @param  array                $components
 * @param  WC_Product_Composite $product
 */
function wc_cp_navigation_movable($components, $product)
{
}
/**
 * Add previous/next navigation buttons in multi-page mode.
 *
 * @param  array                $classes
 * @param  WC_Product_Composite $product
 */
function wc_cp_navigation($classes, $product)
{
}
/**
 * Component selection notices container displayed in the component_selections container (progressive layout).
 *
 * @param  string               $component_id
 * @param  WC_Product_Composite $product
 */
function wc_cp_component_selection_message_progressive($component_id, $product)
{
}
/**
 * Component selection notices container displayed in progressive/paged layouts.
 *
 * @param  array $classes
 */
function wc_cp_component_message($classes)
{
}
/**
 * When changing between components in paged mode, the viewport will scroll to this div if it's not visible.
 * Adding the 'scroll_bottom' class to the element will scroll the bottom of the viewport to the target.
 *
 * @param  array                $components
 * @param  WC_Product_Composite $product
 */
function wc_cp_component_transition_scroll_target($components, $product)
{
}
/**
 * Div for blocking form content during transitions.
 *
 * @param  array                $components
 * @param  WC_Product_Composite $product
 */
function wc_cp_component_blocker($components, $product)
{
}
/**
 * Adds composite pagination in paged mode.
 *
 * @param  array                $components
 * @param  WC_Product_Composite $product
 */
function wc_cp_pagination($components, $product)
{
}
/**
 * When selecting the final step in paged mode, the viewport will scroll to this div.
 * Adding the 'scroll_bottom' class to the element will scroll the bottom of the viewport to the target.
 *
 * @param  array                $components
 * @param  WC_Product_Composite $product
 */
function wc_cp_final_step_scroll_target($components, $product)
{
}
/**
 * No js notice.
 *
 * @param  array                $components
 * @param  WC_Product_Composite $product
 */
function wc_cp_no_js_msg($components, $product)
{
}
/*
--------------------------------------------------------*/
/*
	Component selection template functions.               */
/*--------------------------------------------------------*/
/**
 * Composited product title template.
 *
 * @param  WC_CP_Product $component_option
 */
function wc_cp_composited_product_title($component_option)
{
}
/**
 * Composited product wrapper open.
 *
 * @since  4.0.0
 *
 * @param  WC_CP_Product $component_option
 */
function wc_cp_composited_product_wrapper_open($component_option)
{
}
/**
 * Composited product thumbnail template.
 *
 * @param  WC_CP_Product $component_option
 */
function wc_cp_composited_product_thumbnail($component_option)
{
}
/**
 * Composited product template.
 *
 * @since  4.0.0
 *
 * @param  WC_CP_Product $component_option
 */
function wc_cp_composited_product_single($component_option)
{
}
/**
 * Composited product details wrapper close.
 *
 * @since  4.0.0
 *
 * @param  WC_CP_Product $component_option
 */
function wc_cp_composited_product_wrapper_close($component_option)
{
}
/**
 * Composited simple product template.
 *
 * @since  4.0.0
 *
 * @param  WC_CP_Product $component_option
 */
function wc_cp_composited_product_simple($component_option)
{
}
/**
 * Composited variable product template.
 *
 * @since  4.0.0
 *
 * @param  WC_CP_Product $component_option
 */
function wc_cp_composited_product_variable($component_option)
{
}
/**
 * Composited product excerpt.
 *
 * @param  WC_Product           $product
 * @param  string               $component_id
 * @param  WC_Product_Composite $composite
 */
function wc_cp_composited_product_excerpt($product, $component_id, $composite)
{
}
/**
 * Composited simple product price.
 *
 * @param  WC_Product           $product
 * @param  string               $component_id
 * @param  WC_Product_Composite $composite
 */
function wc_cp_composited_product_price($product, $component_id, $composite)
{
}
/**
 * Composited single variation details.
 *
 * @since  3.12.5
 *
 * @param  WC_Product_Variable  $product
 * @param  string               $component_id
 * @param  WC_Product_Composite $composite
 */
function wc_cp_composited_single_variation($product, $component_id, $composite)
{
}
/**
 * Composited single variation template.
 *
 * @since  3.12.5
 *
 * @param  WC_Product_Variable  $product
 * @param  string               $component_id
 * @param  WC_Product_Composite $composite
 */
function wc_cp_composited_single_variation_template($product, $component_id, $composite)
{
}
/**
 * Variation attribute options for composited products.
 *
 * @since  3.14.3
 *
 * @param  array $args
 */
function wc_cp_composited_single_variation_attribute_options($args)
{
}
/**
 * Compatibility wrapper for getting the element-based block class.
 *
 * @since 9.0.2
 *
 * @param  string $element
 * @return string
 */
function wc_cp_wp_theme_get_element_class_name($element)
{
}
function wc_cp_update_370_delete_unused_meta()
{
}
function wc_cp_update_370_main($updater = \false)
{
}
function wc_cp_update_370_db_version()
{
}
function wc_cp_update_380_main($updater = \false)
{
}
function wc_cp_update_380_delete_unused_meta()
{
}
function wc_cp_update_380_db_version()
{
}
/**
 * Register Widgets.
 *
 * @since 3.0.0
 */
function wc_cp_register_widgets()
{
}
/**
 * Adds a filter to conditionally remove the Composite Summary Widget instead of short-circuiting the widget() callback.
 *
 * @since 3.6.0
 */
function wc_cp_add_widgets_filter()
{
}
/**
 * Conditionally removes the Composite Summary Widget.
 *
 * @since 3.6.0
 */
function wc_cp_remove_composite_summary_widget($widget_areas)
{
}
/**
 * Returns the main instance of WC_Composite_Products to prevent the need to use globals.
 *
 * @since  3.2.3
 *
 * @return WC_Composite_Products
 */
function WC_CP()
{
}
\define('WC_CP_VERSION', '10.2.0');
