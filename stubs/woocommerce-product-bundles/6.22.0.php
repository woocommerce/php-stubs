<?php
/**
 * Generated stub declarations for woocommerce-product-bundles 6.22.0.
 * @see https://github.com/woocommerce/all-plugins/tree/stubs
 */

/**
 * Admin Reports Class for syncing the lookup table.
 *
 * @class    WC_PB_Admin_Analytics_Sync
 * @version  6.12.0
 */
class WC_PB_Admin_Analytics_Sync
{
    /**
     * Keeps track of which order ID is being processed.
     * @var int
     */
    protected static $updating_order_id = \false;
    /**
     * The last item in an order is the one to trigger the aggregation process.
     * @var int
     */
    protected static $trigger_order_item_id = \false;
    /**
     * Keeps track of which bundled order items need to be aggregated into their container.
     * @var int
     */
    protected static $bundled_order_item_ids = array();
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
     * Updates all order stats table rows that involve gift cards.
     *
     * @return void
     */
    public static function queue_order_item_stats_update()
    {
    }
    /**
     * Schedules a batch of row renenerations for order stats.
     *
     * @param  int  $batch
     * @param  int  $batches
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
     * @param  WC_Order  $order
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
     * @param  int  $batch
     * @param  int  $batches
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
     * @param  int  $batch
     * @param  int  $batches
     * @return void
     */
    public static function process_order_item_stats_update_batch($batch, $batches)
    {
    }
    /**
     * Updates the order item stats table for a single item.
     *
     * @param  int  $order_item_id
     * @param  int  $order_id
     * @return void
     */
    public static function update_order_item_stats($order_item_id, $order_id)
    {
    }
    /**
     * Clean bundles data when an order is deleted.
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
    /**
     * Handle stock report's cache invalidation.
     *
     * @return void
     */
    public static function sync_product_updated_props($product, $updated_props)
    {
    }
}
/**
 * Product Bundles WooCommerce Analytics.
 *
 * @version  6.15.3
 */
class WC_PB_Admin_Analytics
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
     * @return void
     */
    protected static function includes()
    {
    }
    /**
     * Add "Bundles" as a Analytics submenu item.
     *
     * @param  array  $report_pages  Report page menu items.
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
     * Analytics includes and register REST contollers.
     *
     * @param  array  $controllers
     * @return array
     */
    public static function add_rest_api_controllers($controllers)
    {
    }
    /**
     * Register Analytics data stores.
     *
     * @param  array  $stores
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
 * WC_PB_REST_Reports_Bundles_Data_Store class.
 *
 * @version 6.9.0
 */
abstract class WC_PB_Analytics_Data_Store extends \Automattic\WooCommerce\Admin\API\Reports\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
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
 * WC_PB_Analytics_Revenue_Data_Store class.
 *
 * @version 6.17.2
 */
class WC_PB_Analytics_Revenue_Data_Store extends \WC_PB_Analytics_Data_Store
{
    /**
     * Table used to get the data.
     *
     * @var string
     */
    protected static $table_name = 'wc_order_bundle_lookup';
    /**
     * Cache identifier.
     *
     * @var string
     */
    protected $cache_key = 'bundles_revenue';
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
        'bundled_items_sold' => 'intval',
        'net_revenue' => 'floatval',
        'orders_count' => 'intval',
        // Extended attributes.
        'name' => 'strval',
        'price' => 'floatval',
        'image' => 'strval',
        'permalink' => 'strval',
        'stock_status' => 'strval',
        'sku' => 'strval',
    );
    /**
     * Extended product attributes to include in the data.
     *
     * @var array
     */
    protected $extended_attributes = array('name', 'price', 'image', 'permalink', 'stock_status', 'sku');
    /**
     * Data store context used to pass to filters.
     *
     * @var string
     */
    protected $context = 'bundles';
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
 * WC_PB_Analytics_Revenue_Query class.
 *
 * @version 6.9.0
 */
class WC_PB_Analytics_Revenue_Query extends \Automattic\WooCommerce\Admin\API\Reports\Query
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
 * WC_PB_Analytics_Revenue_REST_Controller class.
 *
 * @version 6.9.0
 */
class WC_PB_Analytics_Revenue_REST_Controller extends \WC_REST_Reports_Controller implements \Automattic\WooCommerce\Admin\API\Reports\ExportableInterface
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
    protected $rest_base = 'reports/bundles';
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
     * Get stock status column export value.
     *
     * @param array $status Stock status from report row.
     * @return string
     */
    protected function _get_stock_status($status)
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
 * WC_PB_Analytics_Revenue_Stats_REST_Controller class.
 *
 * @version 6.9.0
 */
class WC_PB_Analytics_Revenue_Stats_REST_Controller extends \WC_REST_Reports_Controller
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
    protected $rest_base = 'reports/bundles/stats';
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
 * WC_PB_Analytics_Revenue_Stats_Data_Store class.
 *
 * @version 6.9.0
 */
class WC_PB_Analytics_Revenue_Stats_Data_Store extends \WC_PB_Analytics_Revenue_Data_Store
{
    /**
     * Cache identifier.
     *
     * @var string
     */
    protected $cache_key = 'bundles_revenue_stats';
    /**
     * Mapping columns to data type to return correct response types.
     *
     * @var array
     */
    protected $column_types = array('date_start' => 'strval', 'date_end' => 'strval', 'product_id' => 'intval', 'items_sold' => 'intval', 'bundled_items_sold' => 'intval', 'net_revenue' => 'floatval', 'orders_count' => 'intval', 'products_count' => 'intval');
    /**
     * Data store context used to pass to filters.
     *
     * @var string
     */
    protected $context = 'bundles_stats';
    /**
     * Assign report columns once full table name has been assigned.
     */
    protected function assign_report_columns()
    {
    }
    /**
     * Updates the database query with parameters used for Products Stats report: categories and order status.
     *
     * @param  array  $query_args
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
     * @param  string  $order_by Order by option requested by user.
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
 * WC_PB_Analytics_Revenue_Stats_Query class.
 *
 * @version 6.9.0
 */
class WC_PB_Analytics_Revenue_Stats_Query extends \Automattic\WooCommerce\Admin\API\Reports\Query
{
    /**
     * Valid fields for Bundles report.
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
 * WC_PB_REST_Reports_Bundles_Data_Store class.
 *
 * @version 6.12.2
 */
class WC_PB_Analytics_Stock_Data_Store extends \WC_PB_Analytics_Data_Store
{
    /**
     * Table used to get the data.
     *
     * @var string
     */
    protected static $table_name = 'woocommerce_bundled_items';
    /**
     * Cache identifier.
     *
     * @var string
     */
    protected $cache_key = 'bundles_stock';
    /**
     * Mapping columns to data type to return correct response types.
     *
     * @var array
     */
    protected $column_types = array(
        'bundled_item_id' => 'intval',
        'product_id' => 'intval',
        'bundle_id' => 'intval',
        'units_required' => 'intval',
        // Extended.
        'name' => 'strval',
        'bundled_name' => 'strval',
        'permalink' => 'strval',
        'stock_status' => 'strval',
        'stock_quantity' => 'intval',
        'quantity_min' => 'intval',
        'sku' => 'strval',
    );
    /**
     * Extended product attributes to include in the data.
     *
     * @var array
     */
    protected $extended_attributes = array('name', 'permalink', 'stock_status', 'manage_stock', 'stock_quantity', 'sku');
    /**
     * Data store context used to pass to filters.
     *
     * @var string
     */
    protected $context = 'bundles_stock';
    /**
     * Assign report columns once full table name has been assigned.
     */
    protected function assign_report_columns()
    {
    }
    /**
     * Set up all the hooks for maintaining and populating table data.
     */
    public static function init()
    {
    }
    /**
     * Enriches the product data with attributes specified by the extended_attributes.
     *
     * @param array $bundles_data Bundle Product data.
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
     * Updates the database query with parameters used for Products report: categories and order status.
     *
     * @param array $query_args Query arguments supplied by the user.
     */
    protected function add_sql_query_params($query_args)
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
    /*-----------------------------------------------------------------*/
    /*  Helpers.                                                       */
    /*-----------------------------------------------------------------*/
    /**
     * Maps ordering specified by the user to columns in the database/fields in the data.
     *
     * @param  string  $order_by
     * @return string
     */
    protected function normalize_order_by($order_by)
    {
    }
    /**
     * Checks if any unsynced Bundles and fix it.
     *
     * @return void.
     */
    protected function maybe_sync_stock_data()
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
 * WC_PB_REST_Reports_Stock_Query class.
 *
 * @version 6.9.0
 */
class WC_PB_Analytics_Stock_Query extends \Automattic\WooCommerce\Admin\API\Reports\Query
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
 * REST API Reports bundles controller class.
 *
 * @version 6.9.0
 */
class WC_PB_Analytics_Stock_REST_Controller extends \WC_REST_Reports_Controller implements \Automattic\WooCommerce\Admin\API\Reports\ExportableInterface
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
    protected $rest_base = 'reports/bundles/stock';
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
     * Get stock status column export value.
     *
     * @param array $status Stock status from report row.
     * @return string
     */
    protected function _get_stock_status($status)
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
 * Admin AJAX meta-box handlers.
 *
 * @class    WC_PB_Admin_Ajax
 * @version  6.16.1
 */
class WC_PB_Admin_Ajax
{
    /**
     * Used by 'ajax_search_bundled_variations'.
     *
     * @var int
     */
    private static $searching_variations_of;
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
     * @since  5.8.0
     *
     * @return void
     */
    public static function dismiss_notice()
    {
    }
    /**
     * Checks if loopback requests work.
     *
     * @since  6.3.0
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
     * Ajax search for bundled variations.
     */
    public static function ajax_search_bundled_variations()
    {
    }
    /**
     * Tweak variation titles for consistency across different WC versions.
     *
     * @param  array  $search_results
     * @return array
     */
    public static function tweak_variation_titles($search_results)
    {
    }
    /**
     * Handles adding bundled products via ajax.
     */
    public static function ajax_add_bundled_product()
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
    public static function is_bundle_edit_request()
    {
    }
    /**
     * Form content used to populate "Configure/Edit" bundle order item modals.
     *
     * @since  5.8.0
     *
     * @return void
     */
    public static function ajax_bundle_order_item_form()
    {
    }
    /**
     * Validates edited/configured bundles and returns updated order items.
     *
     * @since  5.8.0
     *
     * @return void
     */
    public static function ajax_edit_bundle_in_order()
    {
    }
}
/**
 * Admin notices handling.
 *
 * @class    WC_PB_Admin_Notices
 * @version  6.21.0
 */
class WC_PB_Admin_Notices
{
    /**
     * Notices presisting on the next request.
     * @var array
     */
    public static $meta_box_notices = array();
    /**
     * Notices displayed on the current request.
     * @var array
     */
    public static $admin_notices = array();
    /**
     * Maintenance notices displayed on every request until cleared.
     * @var array
     */
    public static $maintenance_notices = array();
    /**
     * Dismissible notices displayed on the current request.
     * @var array
     */
    public static $dismissed_notices = array();
    /**
     * Array of maintenance notice types - name => callback.
     * @var array
     */
    private static $maintenance_notice_types = array('update' => 'update_notice', 'welcome' => 'welcome_notice', 'loopback' => 'loopback_notice', 'update_order_item_stats' => 'update_order_item_stats_notice');
    /**
     * Constructor.
     */
    public static function init()
    {
    }
    /**
     * Add a notice/error.
     *
     * @param  string   $text
     * @param  mixed    $args
     * @param  boolean  $save_notice
     */
    public static function add_notice($text, $args, $save_notice = \false)
    {
    }
    /**
     * Checks if a notice that belongs to a the specified uniqueness context already exists.
     *
     * @since  6.3.0
     *
     * @param  string  $context
     * @return bool
     */
    private static function unique_notice_exists($context)
    {
    }
    /**
     * Get a setting for a notice type.
     *
     * @since  6.3.0
     *
     * @param  string  $notice_name
     * @param  string  $key
     * @param  mixed   $default
     * @return array
     */
    public static function get_notice_option($notice_name, $key, $default = \null)
    {
    }
    /**
     * Set a setting for a notice type.
     *
     * @since  6.3.0
     *
     * @param  string  $notice_name
     * @param  string  $key
     * @param  mixed   $value
     * @return array
     */
    public static function set_notice_option($notice_name, $key, $value)
    {
    }
    /**
     * Checks if a maintenance notice is visible.
     *
     * @since  5.8.0
     *
     * @param  string  $notice_name
     * @return boolean
     */
    public static function is_maintenance_notice_visible($notice_name)
    {
    }
    /**
     * Checks if a dismissible notice has been dismissed in the past.
     *
     * @since  5.8.0
     *
     * @param  string  $notice_name
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
     * @since  5.8.0
     *
     * @param  string  $text
     * @param  mixed   $args
     */
    public static function add_dismissible_notice($text, $args)
    {
    }
    /**
     * Remove a dismissible notice.
     *
     * @since  5.8.0
     *
     * @param  string  $notice_name
     */
    public static function remove_dismissible_notice($notice_name)
    {
    }
    /**
     * Add a maintenance notice to be displayed.
     *
     * @param  string  $notice_name
     */
    public static function add_maintenance_notice($notice_name)
    {
    }
    /**
     * Remove a maintenance notice.
     *
     * @param  string  $notice_name
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
     * @since  5.9.0
     */
    public static function welcome_notice()
    {
    }
    /**
     * Add 'loopback' test.
     *
     * In PB, the ability to do loopback requests is nice to have, but the plugin will do fine even without them, in most cases.
     * For this reason, we have decided to remove the notice and only let the test run to have a result in the Status Report.
     *
     * @since  6.3.0
     */
    public static function loopback_notice()
    {
    }
    /**
     * Adds a notice to migrate order revenue analytics to account for GCs correctly.
     *
     * @since  6.9.0
     */
    public static function update_order_item_stats_notice()
    {
    }
    /**
     * Returns a "trigger update" notice component.
     *
     * @since  5.5.0
     *
     * @return string
     */
    private static function get_trigger_update_prompt()
    {
    }
    /**
     * Returns a "force update" notice component.
     *
     * @since  5.5.0
     *
     * @return string
     */
    private static function get_force_update_prompt()
    {
    }
    /**
     * Returns a "failed update" notice component.
     *
     * @since  5.5.0
     *
     * @return string
     */
    private static function get_failed_update_prompt()
    {
    }
    /**
     * Dismisses a notice. Dismissible maintenance notices cannot be dismissed forever.
     *
     * @since  5.8.0
     *
     * @param  string  $notice
     */
    public static function dismiss_notice($notice)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Notes for the WC Admin Inbox.
    |--------------------------------------------------------------------------
    */
    /**
     * Add note.
     *
     * @since  6.3.0
     *
     * @param  array|string  $args
     */
    public static function add_note($args)
    {
    }
    /**
     * Get note data.
     *
     * @since 6.3.0
     *
     * @param  string  $name
     * @return array
     */
    public static function get_note_args($name)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Deprecated.
    |--------------------------------------------------------------------------
    */
    /**
     * Act upon clicking on a 'dismiss notice' link.
     *
     * @deprecated  3.14.0
     */
    public static function dismiss_notice_handler()
    {
    }
}
/**
 * Product Bundles edit-order functions and filters.
 *
 * @class    WC_PB_Admin_Order
 * @version  6.21.0
 */
class WC_PB_Admin_Order
{
    /**
     * Order object to use in 'display_edit_button'.
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
     * Whether a bundle is configurable in admin-order context.
     *
     * If a bundled item:
     *
     * - is optional;
     * - is variable and has attributes that require user input;
     * - has configurable quantities,
     *
     * then the bundle is configurable.
     *
     * @param  WC_Product_Bundle  $bundle
     * @return boolean
     */
    public static function is_bundle_configurable($bundle)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Filter hooks.
    |--------------------------------------------------------------------------
    */
    /**
     * Auto-populate bundled order-items for Bundles that don't require configuration.
     *
     * @param  $item_id  int
     * @param  $item     WC_Order_Item
     * @param  $order    WC_Order
     * @return void
     */
    public static function add_bundled_items($item_id, $item, $order)
    {
    }
    /**
     * Save order object to use in 'display_edit_button'.
     *
     * Although the order object can be retrieved via 'WC_Order_Item::get_order', we've seen a significant performance hit when using that method.
     *
     * @param  WC_Order  $order
     */
    public static function set_order($order)
    {
    }
    /**
     * Display "Configure/Edit" button next to configurable bundle container items in the edit-order screen.
     *
     * @param  $item_id  int
     * @param  $item     WC_Order_Item
     * @param  $order    WC_Product
     * @return void
     */
    public static function display_edit_button($item_id, $item, $product)
    {
    }
    /**
     * JS template of modal for configuring/editing bundles.
     */
    public static function add_js_template()
    {
    }
}
/**
 * Add hooks to the edit posts view for the 'product' post type.
 *
 * @class    WC_PB_Admin_Post_Types
 * @version  6.21.0
 */
class WC_PB_Admin_Post_Types
{
    /**
     * Hook in.
     */
    public static function init()
    {
    }
    /**
     * Add details to admin stock info when contents stock is insufficient.
     *
     * @param  string      $stock_status
     * @param  WC_Product  $product
     * @return string
     */
    public static function admin_stock_html($stock_status, $product)
    {
    }
    /**
     * Add support for bulk editing Bundle's Regular/Sale price.
     *
     * @param  array      $supported_product_types
     * @return array
     */
    public static function bulk_edit_price($supported_product_types)
    {
    }
}
/**
 * Product Bundles Admin Class.
 *
 * Loads admin scripts, includes admin classes and adds admin hooks.
 *
 * @class    WC_PB_Admin
 * @version  6.17.4
 */
class WC_PB_Admin
{
    /**
     * Bundled selectSW library version.
     *
     * @var string
     */
    private static $bundled_selectsw_version = '1.2.1';
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
     * Inclusions.
     */
    public static function includes()
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
     * Message to add in the WP Privacy Policy Guide page.
     *
     * @since  5.7.10
     *
     * @return string
     */
    protected static function get_privacy_policy_guide_message()
    {
    }
    /**
     * Include admin classes.
     *
     * @since  5.13.3
     *
     * @param  String  $classes
     * @return String
     */
    public static function include_admin_body_class($classes)
    {
    }
    /**
     * Add a message in the WP Privacy Policy Guide page.
     *
     * @since  5.7.10
     */
    public static function add_privacy_policy_guide_content()
    {
    }
    /**
     * Admin writepanel scripts.
     */
    public static function admin_scripts()
    {
    }
    /**
     * Support scanning for template overrides in extension.
     *
     * @param  array  $paths
     * @return array
     */
    public static function template_scan_path($paths)
    {
    }
    /**
     * Add PB debug data in the system status.
     *
     * @since  5.7.9
     */
    public static function render_system_status_items()
    {
    }
    /**
     * Determine which of our files have been overridden by the theme.
     *
     * @since  5.7.9
     *
     * @return array
     */
    private static function get_template_overrides()
    {
    }
    /**
     * Adds an "Insufficient stock" tab to the WC stock reports.
     *
     * @param  array  $reports
     * @return array
     */
    public static function add_insufficient_stock_report_tab($reports)
    {
    }
    /**
     * Renders the "Insufficient stock" report content.
     *
     * @param  string  $name
     * @return void
     */
    public static function get_insufficient_stock_report_content($name)
    {
    }
    /**
     * Renders a notice in the "Insufficient stock" report page.
     *
     * @since  5.9.0
     *
     * @return void
     */
    public static function maybe_add_insufficient_stock_report_notice()
    {
    }
}
/**
 * WooCommerce core Product Exporter support.
 *
 * @class    WC_PB_Product_Export
 * @version  6.17.4
 */
class WC_PB_Product_Export
{
    /**
     * Hook in.
     */
    public static function init()
    {
    }
    /**
     * Add CSV columns for exporting bundle data.
     *
     * @param  array  $columns
     * @return array  $columns
     */
    public static function add_columns($columns)
    {
    }
    /**
     * Bundle data column content.
     *
     * @param  mixed       $value
     * @param  WC_Product  $product
     * @return mixed       $value
     */
    public static function export_bundled_items($value, $product)
    {
    }
    /**
     * "Min Bundle Size" column content.
     *
     * @param  mixed       $value
     * @param  WC_Product  $product
     * @return mixed       $value
     */
    public static function export_min_bundle_size($value, $product)
    {
    }
    /**
     * "Max Bundle Size" column content.
     *
     * @param  mixed       $value
     * @param  WC_Product  $product
     * @return mixed       $value
     */
    public static function export_max_bundle_size($value, $product)
    {
    }
    /**
     * "Bundle Contents Virtual" column content.
     *
     * @param  mixed       $value
     * @param  WC_Product  $product
     * @return mixed       $value
     */
    public static function export_virtual_bundle($value, $product)
    {
    }
    /**
     * "Bundle Aggregate Weight" column content.
     *
     * @param  mixed       $value
     * @param  WC_Product  $product
     * @return mixed       $value
     */
    public static function export_aggregate_weight($value, $product)
    {
    }
    /**
     * "Bundle Layout" column content.
     *
     * @param  mixed       $value
     * @param  WC_Product  $product
     * @return mixed       $value
     */
    public static function export_layout($value, $product)
    {
    }
    /**
     * "Bundle Group Mode" column content.
     *
     * @param  mixed       $value
     * @param  WC_Product  $product
     * @return mixed       $value
     */
    public static function export_group_mode($value, $product)
    {
    }
    /**
     * "Bundle Cart Editing" column content.
     *
     * @param  mixed       $value
     * @param  WC_Product  $product
     * @return mixed       $value
     */
    public static function export_editable_in_cart($value, $product)
    {
    }
    /**
     * "Bundle Sold Individually" column content.
     *
     * @param  mixed       $value
     * @param  WC_Product  $product
     * @return mixed       $value
     */
    public static function export_sold_individually_context($value, $product)
    {
    }
    /**
     * "Bundle Form Location" column content.
     *
     * @since  5.8.1
     *
     * @param  mixed       $value
     * @param  WC_Product  $product
     * @return mixed       $value
     */
    public static function export_add_to_cart_form_location($value, $product)
    {
    }
    /**
     * "Bundle Sells" field content.
     *
     * @since  6.1.0
     *
     * @param  mixed       $value
     * @param  WC_Product  $product
     * @return mixed       $value
     */
    public static function export_bundle_sells($value, $product)
    {
    }
    /**
     * "Bundle Sells Title" field content.
     *
     * @since  6.1.0
     *
     * @param  mixed       $value
     * @param  WC_Product  $product
     * @return mixed       $value
     */
    public static function export_bundle_sells_title($value, $product)
    {
    }
    /**
     * "Bundle Sells Discount" field content.
     *
     * @since  6.1.0
     *
     * @param  mixed       $value
     * @param  WC_Product  $product
     * @return mixed       $value
     */
    public static function export_bundle_sells_discount($value, $product)
    {
    }
}
/**
 * WooCommerce core Product Importer support.
 *
 * @class    WC_PB_Product_Import
 * @version  6.17.4
 */
class WC_PB_Product_Import
{
    /**
     * Hook in.
     */
    public static function init()
    {
    }
    /**
     * Register the 'Custom Column' column in the importer.
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
     * Set formatting (decoding) callback for bundled item data.
     *
     * @since  6.9.0
     *
     * @param  array                    $callbacks
     * @param  WC_Product_CSV_Importer  $importer
     * @return array
     */
    public static function append_formatting_callbacks($callbacks, $importer)
    {
    }
    /**
     * Decodes bundled item data.
     *
     * @since  6.9.0
     *
     * @param  string  $data
     * @return array
     */
    public static function decode_bundled_items($data)
    {
    }
    /**
     * Decode bundled data items and parse relative IDs.
     *
     * @param  array                    $parsed_data
     * @param  WC_Product_CSV_Importer  $importer
     * @return array
     */
    public static function parse_bundled_items($parsed_data, $importer)
    {
    }
    /**
     * Decode Bundle Sells and parse relative IDs.
     *
     * @since  6.1.0
     *
     * @param  array                    $parsed_data
     * @param  WC_Product_CSV_Importer  $importer
     * @return array
     */
    public static function parse_bundle_sells($parsed_data, $importer)
    {
    }
    /**
     * Set bundle-type props.
     *
     * @param  array  $parsed_data
     * @return array
     */
    public static function set_bundle_props($product, $data)
    {
    }
}
/**
 * Product meta-box data for the 'Bundle' type.
 *
 * @class    WC_PB_Meta_Box_Product_Data
 * @version  6.22.0
 */
class WC_PB_Meta_Box_Product_Data
{
    /**
     * Hook in.
     */
    public static function init()
    {
    }
    /**
     * Adds a notice if prices not set.
     *
     * @return void
     */
    public static function maybe_add_non_purchasable_notice()
    {
    }
    /**
     * Renders extended "Sold Individually" option.
     *
     * @return void
     */
    public static function sold_individually_option()
    {
    }
    /**
     * Add the "Bundled Products" panel tab.
     */
    public static function product_data_tabs($tabs)
    {
    }
    /**
     * Data panels for Product Bundles.
     */
    public static function product_data_panel()
    {
    }
    /**
     * Add Bundled Products stock note.
     */
    public static function stock_note()
    {
    }
    /**
     * Product bundle type-specific options.
     *
     * @param  array  $options
     *
     * @return array
     */
    public static function bundle_type_options($options)
    {
    }
    /**
     * Shipping type image select html.
     *
     * @since 6.0.0
     *
     * @return void
     */
    public static function bundle_shipping_type_admin_html()
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
     * Process, verify and save bundle type product data.
     *
     * @param  WC_Product  $product
     *
     * @return void
     */
    public static function process_bundle_data($product)
    {
    }
    /**
     * Sort by menu order callback.
     *
     * @param  array  $a
     * @param  array  $b
     *
     * @return int
     */
    public static function menu_order_sort($a, $b)
    {
    }
    /**
     * Process posted bundled item data.
     *
     * @param  array  $posted_bundle_data
     * @param  mixed  $post_id
     *
     * @return mixed
     */
    public static function process_posted_bundle_data($posted_bundle_data, $post_id)
    {
    }
    /**
     * Add bundled product "Basic" tab content.
     *
     * @param  int    $loop
     * @param  int    $product_id
     * @param  array  $item_data
     * @param  int    $post_id
     *
     * @return void
     */
    public static function bundled_product_admin_config_html($loop, $product_id, $item_data, $post_id)
    {
    }
    /**
     * Add bundled product "Advanced" tab content.
     *
     * @param  int    $loop
     * @param  int    $product_id
     * @param  array  $item_data
     * @param  int    $post_id
     *
     * @return void
     */
    public static function bundled_product_admin_advanced_html($loop, $product_id, $item_data, $post_id)
    {
    }
    /**
     * Add bundled item id in "Advanced" tab content.
     *
     * @since  5.9.0
     *
     * @param  int    $loop
     * @param  int    $product_id
     * @param  array  $item_data
     * @param  int    $post_id
     *
     * @return void
     */
    public static function bundled_product_admin_advanced_item_id_html($loop, $product_id, $item_data, $post_id)
    {
    }
    /**
     * Render "Layout" option on 'woocommerce_bundled_products_admin_config'.
     *
     * @param  WC_Product_Bundle  $product_bundle_object
     */
    public static function bundled_products_admin_config_layout($product_bundle_object)
    {
    }
    /**
     * Displays the "Form Location" option.
     *
     * @since  5.8.0
     *
     * @param  WC_Product_Bundle  $product_bundle_object
     */
    public static function bundled_products_admin_config_form_location($product_bundle_object)
    {
    }
    /**
     * Render "Item grouping" option on 'woocommerce_bundled_products_admin_config'.
     *
     * @param  WC_Product_Bundle  $product_bundle_object
     */
    public static function bundled_products_admin_config_group_mode($product_bundle_object)
    {
    }
    /**
     * Render "Edit in Cart" option on 'woocommerce_bundled_products_admin_config'.
     *
     * @param  WC_Product_Bundle  $product_bundle_object
     */
    public static function bundled_products_admin_config_edit_in_cart($product_bundle_object)
    {
    }
    /**
     * Render bundled product settings on 'woocommerce_bundled_products_admin_config'.
     *
     * @since  5.8.0
     *
     * @param  WC_Product_Bundle  $product_bundle_object
     */
    public static function bundled_products_admin_contents($product_bundle_object)
    {
    }
    /**
     * Handles getting bundled product meta box tabs - @see bundled_product_admin_html.
     *
     * @return array
     */
    public static function get_bundled_product_tabs()
    {
    }
    /**
     * Add admin notices.
     *
     * @param  string  $content
     * @param  mixed   $args
     */
    public static function add_admin_notice($content, $args)
    {
    }
    /**
     * Add admin errors.
     *
     * @param  string  $error
     *
     * @return string
     */
    public static function add_admin_error($error)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Deprecated methods.
    |--------------------------------------------------------------------------
    */
    public static function bundled_products_admin_config($product_bundle_object)
    {
    }
    public static function form_location_option($product_bundle_object)
    {
    }
    public static function build_bundle_config($post_id, $posted_bundle_data)
    {
    }
}
/**
 * WC_PB_Report_Insufficient_Stock class.
 *
 * Handles reporting of bundles with an "Insufficient stock" status.
 *
 * @version  6.21.0
 */
class WC_PB_Report_Insufficient_Stock extends \WC_Report_Stock
{
    /**
     * Bundle IDs sorted by title.
     * @var array
     */
    private $ordered_bundle_ids = array();
    /*
     * No items found text.
     */
    public function no_items()
    {
    }
    /**
     * Get bundles matching "Insufficient stock" stock status criteria.
     *
     * @param  int  $current_page
     * @param  int  $per_page
     */
    public function get_items($current_page, $per_page)
    {
    }
    /**
     * Clean up missing bundles.
     *
     * @since  5.10.0
     *
     * @param  array  $a
     * @return boolean
     */
    private function clean_missing_bundles($result)
    {
    }
    /**
     * Sorting callback - see 'get_items'.
     *
     * @param  array  $a
     * @param  array  $b
     * @return integer
     */
    private function order_by_bundle_title($a, $b)
    {
    }
    /**
     * Get columns.
     *
     * @return array
     */
    public function get_columns()
    {
    }
    /**
     * Renders column values.
     *
     * @param  object  $item
     * @param  string  $column_name
     * @return void
     */
    public function column_default($item, $column_name)
    {
    }
}
/**
 * Add custom REST API fields.
 *
 * @class    WC_PB_REST_API
 * @version  6.18.5
 */
class WC_PB_REST_API
{
    /**
     * Custom REST API product field names, indicating support for getting/updating.
     * @var array
     */
    private static $product_fields = array('bundled_by' => array('get'), 'bundle_stock_status' => array('get'), 'bundle_stock_quantity' => array('get'), 'bundle_virtual' => array('get', 'update'), 'bundle_layout' => array('get', 'update'), 'bundle_add_to_cart_form_location' => array('get', 'update'), 'bundle_editable_in_cart' => array('get', 'update'), 'bundle_sold_individually_context' => array('get', 'update'), 'bundle_item_grouping' => array('get', 'update'), 'bundle_min_size' => array('get', 'update'), 'bundle_max_size' => array('get', 'update'), 'bundle_price' => array('get'), 'bundled_items' => array('get', 'update'));
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
     * @param  WP_REST_Response   $response
     * @param  WC_Data            $product
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
     * Gets schema properties for PB product fields.
     *
     * @param  string  $field_name
     * @return array
     */
    public static function get_product_field_schema($field_name)
    {
    }
    /**
     * Gets values for PB product fields.
     *
     * @param  array            $response
     * @param  string           $field_name
     * @param  WP_REST_Request  $request
     * @return array
     */
    public static function get_product_field_value($response, $field_name, $request)
    {
    }
    /**
     * Updates values for PB product fields.
     *
     * @param  mixed   $value
     * @param  mixed   $response
     * @param  string  $field_name
     * @return boolean
     */
    public static function update_product_field_value($field_value, $response, $field_name)
    {
    }
    /**
     * Gets bundle-specific product data.
     *
     * @since  5.0.0
     *
     * @param  string      $key
     * @param  WC_Product  $product
     * @return array
     */
    private static function get_product_field($key, $product)
    {
    }
    /**
     * Get default bundled variable product attributes - @see 'WC_REST_Products_Controller::get_default_attributes'.
     *
     * @param  WC_Bundled_Item_Data  $bundled_item_data
     * @return array
     */
    private static function get_bundled_item_attribute_defaults($bundled_item_data)
    {
    }
    /**
     * Get product attribute taxonomy name - @see 'WC_REST_Products_Controller::get_attribute_taxonomy_name'.
     *
     * @since  5.2.0
     *
     * @param  string      $slug
     * @param  WC_Product  $product
     * @return string
     */
    private static function get_attribute_taxonomy_name($slug, $product)
    {
    }
    /**
     * Save default bundled product attributes - @see 'WC_REST_Products_Controller::save_default_attributes'.
     *
     * @since 5.2.0
     *
     * @param  WC_Product  $bundled_product
     * @param  array       $default_variation_attributes
     * @return array
     */
    private static function process_default_attributes($bundled_product, $default_variation_attributes)
    {
    }
    /**
     * Get bundled item stock status, taking min quantity into account.
     *
     * @param  WC_Bundled_Item_Data  $bundled_item_data
     * @param  WC_Product_Bundle     $bundle
     * @return string
     */
    private static function get_bundled_item_stock_status($bundled_item_data, $bundle)
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
     * Modify order contents to include bundled items.
     *
     * @param  WC_Order  $order
     * @param  array     $request
     */
    public static function add_bundle_to_order($order, $request)
    {
    }
    /**
     * Converts a posted bundle configuration to a format understood by 'WC_PB_Cart::validate_bundle_configuration'.
     *
     * @since  5.8.0
     *
     * @param  WC_Product_Bundle  $bundle
     * @param  array              $posted_configuration
     * @return array
     */
    public static function parse_posted_bundle_configuration($bundle, $posted_configuration)
    {
    }
    /**
     * Save bundle configuration data on item for later processing.
     *
     * @param  WC_Order_Item  $item
     * @param  array          $posted_item_data
     */
    public static function set_order_item($item, $posted_item_data)
    {
    }
    /**
     * Adds 'bundled_by' and 'bundled_items' schema properties to line items.
     *
     * @param  array  $schema
     * @return array
     */
    public static function filter_order_schema($schema)
    {
    }
    /**
     * Filters WC REST API order responses to add references between bundle container/children items. Also modifies expanded product data based on the pricing and shipping settings.
     *
     * @since  5.0.0
     *
     * @param  WP_REST_Response   $response
     * @param  WP_Post | WC_Data  $object
     * @param  WP_REST_Request    $request
     * @return WP_REST_Response
     */
    public static function filter_order_response($response, $object, $request)
    {
    }
    /**
     * Append bundled items data to order data.
     *
     * @param  array     $order_data
     * @param  WC_Order  $order
     * @return array
     */
    private static function get_extended_order_data($order_data, $order)
    {
    }
    /**
     * Filters WC v1-v3 REST API order response content to add bundle container/children item references.
     */
    private static function add_legacy_hooks()
    {
    }
    /**
     * Filters WC v1-v3 REST API order responses to add references between bundle container/children items. Also modifies expanded product data based on the pricing and shipping settings.
     *
     * @param  array          $order_data
     * @param  WC_Order       $order
     * @param  array          $fields
     * @param  WC_API_Server  $server
     * @return array
     */
    public static function legacy_order_response($order_data, $order, $fields, $server)
    {
    }
}
/**
 * Extends the store public API with bundle related data for each bundle parent and child item.
 *
 * @version 6.20.0
 */
class WC_PB_Store_API
{
    /**
     * Stores the cart item key of the last bundled item.
     *
     * @var string
     */
    private static $last_bundled_item_key;
    /**
     * Stores the cart item key of the last bundled item.
     *
     * @var string
     */
    private static $faked_parent_bundled_item_key;
    /**
     * Plugin Identifier, unique to each plugin.
     *
     * @var string
     */
    const IDENTIFIER = 'bundles';
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
     * @param array  $cart_item
     * @return array $item_data
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
     * Aggregates bundle container item prices.
     *
     * @param array  $item_data
     * @param array  $cart_item
     */
    private static function filter_container_cart_item_prices(&$item_data, $cart_item)
    {
    }
    /**
     * Aggregates bundle container item subtotals.
     *
     * @param array  $item_data
     * @param array  $cart_item
     */
    private static function filter_container_cart_item_totals(&$item_data, $cart_item)
    {
    }
    /**
     * Adjust bundle container item quantity limits to keep max quantity limited by bundled item stock.
     *
     * @param array  $item_data
     * @param array  $cart_item
     */
    private static function filter_container_cart_item_quantity_limits(&$item_data, $cart_item)
    {
    }
    /**
     * Filter container cart item permalink to support cart editing.
     *
     * @param array  $item_data
     * @param array  $cart_item
     */
    private static function filter_container_cart_item_permalink(&$item_data, $cart_item)
    {
    }
    /**
     * Adjust bundled item quantity limits to account for min/max quantity settings and parent quantity.
     *
     * @param array  $item_data
     * @param array  $cart_item
     */
    private static function filter_bundled_cart_item_quantity_limits(&$item_data, $cart_item)
    {
    }
    /**
     * Convert monetary values from WooCommerce to string based integers, using
     * the smallest unit of a currency.
     *
     * @param string|float  $amount
     * @param int           $decimals
     * @param int           $rounding_mode
     * @return string
     */
    private static function prepare_money_response($amount, $decimals = 2, $rounding_mode = \PHP_ROUND_HALF_UP)
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
     * - aggregate bundle container prices/subtotals;
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
     * Validate bundle in Store API context.
     *
     * @throws \Automattic\WooCommerce\StoreApi\Exceptions\RouteException
     *
     * @param  array       $data
     * @param  WC_Product  $product
     * @return array
     */
    public static function validate_cart_item($bundle, $cart_item)
    {
    }
    /**
     * Prevents access to the checkout block if a bundle in the cart is misconfigured.
     *
     * @throws \Automattic\WooCommerce\StoreApi\Exceptions\RouteException
     *
     * @param  WC_Order  $order
     * @return array
     */
    public static function validate_draft_order($order)
    {
    }
    /**
     * Prevent removal of mandatory bundled items with a visible parent.
     *
     * @throws \Automattic\WooCommerce\StoreApi\Exceptions\RouteException
     *
     * @param  string   $cart_item_key
     * @param  WC_Cart  $cart
     * @return void
     */
    public static function validate_mandatory_bundled_cart_item_removal($cart_item_key, $cart)
    {
    }
}
/**
 * Class for integrating with WooCommerce Blocks scripts.
 *
 * @version  6.21.0
 */
class WC_PB_Checkout_Blocks_Integration implements \Automattic\WooCommerce\Blocks\Integrations\IntegrationInterface
{
    /**
     * Whether the intregration has been initialized.
     *
     * @var boolean
     */
    protected $is_initialized;
    /**
     * The single instance of the class.
     *
     * @var WC_PB_Checkout_Blocks_Integration
     */
    protected static $_instance = \null;
    /**
     * Main WC_PB_Checkout_Blocks_Integration instance. Ensures only one instance of WC_PB_Checkout_Blocks_Integration is loaded or can be loaded.
     *
     * @static
     * @return WC_PB_Checkout_Blocks_Integration
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
 * Bundled Item Product Container class.
 *
 * The bunded item class is a product container that initializes and holds pricing, availability and variation/attribute-related data for a bundled product.
 *
 * @class    WC_Bundled_Item
 * @version  6.17.2
 */
class WC_Bundled_Item
{
    /**
     * Bundled item settings meta are copied from the low-level data object to this array - @see WC_Bundled_Item::load_data().
     * @var array
     */
    public $item_data = array();
    /**
     * A reference to the bundled item data object - @see WC_Bundled_Item_Data.
     * @var WC_Bundled_Item_Data
     */
    public $data = \null;
    /**
     * Product instance of the associated bundled product.
     * @var WC_Product
     */
    public $product;
    /**
     * Product instance of the parent Bundle.
     * @var WC_Product_Bundle
     */
    private $bundle;
    /**
     * The title of the bundled item.
     * @var string
     */
    private $title;
    /**
     * The short description of the bundled item.
     * @var string
     */
    private $description;
    /**
     * Visibility of the bundled item in the single product, cart and order templates.
     * @var array
     */
    private $visibility;
    /**
     * Price visibility of the bundled item in the single product, cart and order templates.
     * @var array
     */
    private $price_visibility;
    /**
     * Optional status of the bundled item.
     * @var string
     */
    private $optional;
    /**
     * Min quantity of the bundled item.
     * @var boolean
     */
    private $quantity_min;
    /**
     * Max quantity of the bundled item.
     * @var boolean
     */
    private $quantity_max;
    /**
     * Default quantity of the bundled item.
     * @var boolean
     */
    private $quantity_default;
    /**
     * Pricing scheme of the bundled item.
     * @var string
     */
    private $priced_individually;
    /**
     * Shipping scheme of the bundled item.
     * @var string
     */
    private $shipped_individually;
    /**
     * Bundled item price & recurring price discount when the bundled item is priced individually.
     * @var double
     */
    private $discount;
    /**
     * Bundled item sign-up price discount when the bundled item is priced individually (unused).
     * @var double
     */
    private $sign_up_discount;
    /**
     * Array of default variation attribute selections to override, or false when no overrides are defined.
     * @var array|false
     */
    private $default_variation_attributes;
    /**
     * Array of variation ids to include, or false when no variation filters exist.
     * @var array|false
     */
    private $allowed_variations;
    /**
     * True if the thumbnail is set to be hidden.
     * @var boolean
     */
    private $hide_thumbnail;
    /**
     * True if the bundled product is a Name-Your-Price product.
     * @var boolean
     */
    private $is_nyp = \false;
    /**
     * Stock status of the bundled product.
     * @var string
     */
    private $stock_status = \null;
    /**
     * Maximum stock available in a single bundle purchase.
     * Identical to the product stock for simple products. For variable items, it is the max stock-managed variation stock when all variations manage stock.
     * @var mixed
     */
    private $max_stock = \null;
    /**
     * Raw meta prices used in the min/max bundle price calculation.
     * @var string
     */
    public $min_price;
    public $max_price;
    public $min_regular_price;
    public $max_regular_price;
    public $min_recurring_price;
    public $max_recurring_price;
    public $min_regular_recurring_price;
    public $max_regular_recurring_price;
    /**
     * Products corresponding to the min/max (regular) price at which the bundled product can be purchased. If the bundled product is variable, these will contain the associated variations, otherwise they are identical to the 'product' property.
     * @var WC_Product
     */
    public $min_price_product;
    public $max_price_product;
    public $min_regular_price_product;
    public $max_regular_price_product;
    /**
     * Flag to indicate whether min/max props have been synced.
     * @var boolean
     */
    private $synced_prices = \false;
    /**
     * Runtime cache for 'get_variation_attributes()' calls.
     * @var array
     */
    private $product_attributes;
    /**
     * Runtime cache for 'get_selected_product_variation_attributes()' calls.
     * @var array
     */
    private $selected_product_attributes;
    /**
     * Runtime cache for 'get_product_variations()' calls.
     * @var array
     */
    private $product_variations;
    /**
     * See 'has_filtered_variations'
     * @var boolean
     */
    private $block_child_filtering = \false;
    /**
     * __construct method.
     *
     * @param  mixed  $bundled_item_id
     * @param  mixed  $parent
     */
    public function __construct($bundled_item, $parent = \false)
    {
    }
    /**
     * Auto-load in-accessible properties on demand.
     *
     * @param mixed $key
     * @return mixed
     */
    public function __get($key)
    {
    }
    /**
     * Get bundled item ID.
     * Returns the ID of the associated WC_Bundled_Item_Data object - @see WC_Bundled_Item_Data class and WC_PB_Install::get_schema().
     *
     * @return int|null
     */
    public function get_id()
    {
    }
    /**
     * Get the ID of the associated product.
     *
     * @return int|null
     */
    public function get_product_id()
    {
    }
    /**
     * Get the ID of the parent bundle.
     *
     * @return int|null
     */
    public function get_bundle_id()
    {
    }
    /**
     * Returns the parent.
     *
     * @return WC_Product_Bundle|false
     */
    public function get_bundle()
    {
    }
    /**
     * Initialize bundled item class props from bundled item data object.
     *
     * @since 5.0.0
     */
    private function load_data()
    {
    }
    /**
     * Get item data.
     *
     * @since  5.0.0
     *
     * @return array
     */
    public function get_data()
    {
    }
    /**
     * Sync stock data if needed.
     *
     * @since 5.5.0
     */
    private function maybe_sync_stock()
    {
    }
    /**
     * Keep bundled item stock status in sync with associated product, taking 'min_quantity' into account.
     *
     * @since 5.0.0
     */
    public function sync_stock()
    {
    }
    /**
     * Sync price data.
     *
     * @param  bool  $force
     */
    protected function sync_prices($force = \false)
    {
    }
    /**
     * Indicates whether discounts can be applied on sale prices.
     *
     * @since  5.0.3
     */
    public function is_discount_allowed_on_sale_price()
    {
    }
    /**
     * Get bundled product.
     *
     * @since  5.2.4
     *
     * @param  array  $args
     * @return WC_Product|false
     */
    public function get_product($args = array())
    {
    }
    /**
     * Get bundled product price after discount, price filters excluded.
     *
     * @param  mixed  $product
     * @return mixed
     */
    public function get_raw_price($product = \false, $context = '')
    {
    }
    /**
     * Get bundled product regular price before discounts, price filters excluded.
     *
     * @param  mixed  $product
     * @return mixed
     */
    public function get_raw_regular_price($product = \false)
    {
    }
    /**
     * Get bundled item price, after discount, filters included.
     *
     * @since  5.0.0
     *
     * @param  string   $min_or_max
     * @param  boolean  $display
     * @return mixed
     */
    public function get_price($min_or_max = 'min', $display = \false, $qty = 1)
    {
    }
    /**
     * Get bundled item recurring price after discount, filters included.
     *
     * @since  5.0.0
     *
     * @param  string   $min_or_max
     * @param  boolean  $display
     * @return mixed
     */
    public function get_recurring_price($min_or_max = 'min', $display = \false)
    {
    }
    /**
     * Get bundled item regular price after discount, filters included.
     *
     * @since  5.0.0
     *
     * @param  string   $min_or_max
     * @param  boolean  $display
     * @param  boolean  $strict
     * @return mixed
     */
    public function get_regular_price($min_or_max = 'min', $display = \false, $strict = \false, $qty = 1)
    {
    }
    /**
     * Get bundled item recurring price after discount, filters included.
     *
     * @since  5.0.0
     *
     * @param  string   $min_or_max
     * @param  boolean  $display
     * @return mixed
     */
    public function get_regular_recurring_price($min_or_max = 'min', $display = \false)
    {
    }
    /**
     * Min bundled item price incl tax.
     *
     * @since  5.0.0
     *
     * @param  string  $min_or_max
     * @param  int     $qty
     * @return mixed
     */
    public function get_price_including_tax($min_or_max = 'min', $qty = 1)
    {
    }
    /**
     * Min bundled item price excl tax.
     *
     * @since  5.0.0
     *
     * @param  string  $min_or_max
     * @param  int     $qty
     * @return mixed
     */
    public function get_price_excluding_tax($min_or_max = 'min', $qty = 1)
    {
    }
    /**
     * Min bundled item price incl tax.
     *
     * @since  5.5.0
     *
     * @param  string  $min_or_max
     * @param  int     $qty
     * @param  bool    $strict
     * @return mixed
     */
    public function get_regular_price_including_tax($min_or_max = 'min', $qty = 1, $strict = \false)
    {
    }
    /**
     * Min bundled item price excl tax.
     *
     * @since  5.5.0
     *
     * @param  string  $min_or_max
     * @param  int     $qty
     * @param  bool    $strict
     * @return mixed
     */
    public function get_regular_price_excluding_tax($min_or_max = 'min', $qty = 1, $strict = \false)
    {
    }
    /**
     * Min/max bundled item (regular) price incl/excl tax.
     *
     * @since  5.5.0
     *
     * @param  array  $args
     * @return mixed
     */
    public function calculate_price($args)
    {
    }
    /**
     * True if the bundled item has a price of its own.
     *
     * @return boolean
     */
    public function is_priced_individually()
    {
    }
    /**
     * True if the bundled item is shipped individually.
     *
     * @return boolean
     */
    public function is_shipped_individually()
    {
    }
    /**
     * True if the weight of the composited product is added to the weight of the container.
     *
     * @return boolean
     */
    public function is_weight_aggregated($product = \false)
    {
    }
    /**
     * Bundled item sale status.
     *
     * @param  string  $context
     * @return boolean
     */
    public function is_on_sale($context = '')
    {
    }
    /**
     * Bundled item purchasable status.
     *
     * @return boolean
     */
    public function is_purchasable()
    {
    }
    /**
     * Bundled item exists status.
     *
     * @return boolean
     */
    public function exists()
    {
    }
    /**
     * Bundled item stock status.
     * Takes min quantity into account.
     *
     * @return boolean
     */
    public function is_in_stock()
    {
    }
    /**
     * Evaluates whether or not the bundled item has enough stock to fulfill an arbitrary quantity requirement in a single bundle purchase.
     *
     * @param  mixed  $quantity
     * @return boolean
     */
    public function has_enough_stock($quantity)
    {
    }
    /**
     * Bundled item backorder status.
     *
     * @return boolean
     */
    public function is_on_backorder()
    {
    }
    /**
     * Max stock available to the bundle before it becomes unavailable.
     * An empty string is treated as infinite stock.
     *
     * @since  5.0.0
     *
     * @return mixed
     */
    public function get_max_stock()
    {
    }
    /**
     * Bundled item stock status.
     *
     * @since  5.0.0
     *
     * @return string
     */
    public function get_stock_status()
    {
    }
    /**
     * Bundled item sold individually status.
     *
     * @return boolean
     */
    public function is_sold_individually()
    {
    }
    /**
     * Bundled item name-your-price status.
     *
     * @return boolean
     */
    public function is_nyp()
    {
    }
    /**
     * Check if the product has variables/options to adjust before adding to cart.
     *
     * @return boolean
     */
    public function requires_input()
    {
    }
    /**
     * Disable Add-Ons?
     *
     * @since  6.0.0
     * @return bool
     */
    public function disable_addons()
    {
    }
    /**
     * Check if the item is a subscription.
     *
     * @since  5.0.0
     *
     * @return boolean
     */
    public function is_subscription()
    {
    }
    /**
     * Check if the item has a limited subscription.
     *
     * @since  6.13.1
     *
     * @return boolean
     */
    public function is_limited_subscription()
    {
    }
    /**
     * Check if the user has purchased a subscription item.
     *
     * @since  6.13.1
     *
     * @return boolean
     */
    public function user_has_subscription()
    {
    }
    /**
     * Check if the item is a variable subscription.
     *
     * @since  5.0.0
     *
     * @return boolean
     */
    public function is_variable_subscription()
    {
    }
    /**
     * Check if the item has a variable subscription price.
     *
     * @since  6.4.0
     *
     * @return boolean
     */
    public function has_variable_subscription_price()
    {
    }
    /**
     * Returns the variation attributes array if this product is variable.
     *
     * @since  5.8.0
     *
     * @param  string  $variation_attribute_name
     * @return array
     */
    public function is_product_variation_attribute_configurable($variation_attribute_name)
    {
    }
    /**
     * Returns the variation attributes array if this product is variable.
     *
     * @since  5.8.0
     *
     * @param  string  $variation_attribute_name
     * @return array
     */
    public function display_product_variation_attribute_dropdown($variation_attribute_name)
    {
    }
    /**
     * Returns the (configurable) variation attributes array if this product is variable.
     *
     * @param  bool  $return_configurable
     * @return array
     */
    public function get_product_variation_attributes($return_configurable = \false)
    {
    }
    /**
     * Returns the selected variation attribute if this product is variable.
     *
     * @return string
     */
    public function get_selected_product_variation_attribute($attribute_name)
    {
    }
    /**
     * Returns the selected variation attributes if this product is variable.
     *
     * Ensures default attribute selections do not correspond to attribute values that have been filtered out.
     *
     * @return array
     */
    public function get_selected_product_variation_attributes()
    {
    }
    /**
     * Returns this product's available variations array.
     *
     * @return array
     */
    public function get_product_variations()
    {
    }
    /**
     * True if the product has variation filters.
     *
     * @return boolean
     */
    public function has_filtered_variations()
    {
    }
    /**
     * Get filtered (allowed) variation IDs.
     *
     * @return array
     */
    public function get_filtered_variations()
    {
    }
    /**
     * Using ajax to fetch variations?
     *
     * False if the bundle has variation filters - otherwise ALL attribute options will show up in the dropdowns.
     * If you still wish to enable ajax when using variation filters, use the 'woocommerce_bundled_item_filtered_variations_disable_ajax' filter to prevent ajax from being disabled.
     *
     * @return boolean
     */
    public function use_ajax_for_product_variations()
    {
    }
    /**
     * Get bundled item children.
     *
     * @return array
     */
    public function get_children()
    {
    }
    /**
     * Filter variable product children to exclude filtered out variations and improve the performance of 'WC_Product_Variable::get_available_variations()'.
     *
     * @param  array                $children
     * @param  WC_Product_Variable  $bundled_product
     * @return array
     */
    public function filter_children($children, $bundled_product)
    {
    }
    /**
     * Modifies the results of get_available_variations() to implement variation filtering and bundle discounts for variable products.
     * Also calculates variation prices incl. or excl. tax.
     *
     * @param  array                 $variation_data
     * @param  WC_Product            $bundled_product
     * @param  WC_Product_Variation  $bundled_variation
     * @return array
     */
    public function filter_variation($variation_data, $bundled_product, $bundled_variation)
    {
    }
    /**
     * Add price filters to modify child product prices depending on the bundled item pricing setup.
     * Applied i) when displaying single-product form content, ii) when initializing Product Bundles and iii) when calculating cart prices.
     */
    public function add_price_filters()
    {
    }
    /**
     * Remove price filters after modifying child product prices depending on the bundled item pricing setup.
     */
    public function remove_price_filters()
    {
    }
    /**
     * True if there is a title override.
     *
     * @return boolean
     */
    public function has_title_override()
    {
    }
    /**
     * Item title.
     *
     * @return string
     */
    public function get_title()
    {
    }
    /**
     * Item raw item title.
     *
     * @param  bool    $strip_tags
     * @return string
     */
    public function get_raw_title($strip_tags = \false)
    {
    }
    /**
     * Item description.
     *
     * @return string item title
     */
    public function get_description()
    {
    }
    /**
     * Item permalink.
     *
     * @since  5.5.0
     *
     * @return string
     */
    public function get_permalink()
    {
    }
    /**
     * Visible or hidden in the product/cart/order templates.
     *
     * @return boolean
     */
    public function is_visible($where = 'product')
    {
    }
    /**
     * Visible or hidden in the product/cart/order templates.
     *
     * @return boolean
     */
    public function is_price_visible($where = 'product')
    {
    }
    /**
     * Item hidden from all templates.
     *
     * @return boolean
     */
    public function is_secret()
    {
    }
    /**
     * Optional item.
     *
     * @return boolean
     */
    public function is_optional()
    {
    }
    /**
     * Optional item suffix.
     *
     * @since  6.3.0
     *
     * @return string
     */
    public function get_optional_suffix()
    {
    }
    /**
     * Retrieves the max remaining stock quantity directly from the product instance.
     *
     * @since  6.4.0
     *
     * @param  WC_Product|false  $product
     * @return int|''
     */
    public function get_stock_quantity($product = \false)
    {
    }
    /**
     * Item min/max quantity.
     *
     * @param  string  $type
     * @param  array   $args
     * @return int
     */
    public function get_quantity($type = 'min', $args = array(), $deprecated = \false)
    {
    }
    /**
     * Item discount.
     *
     * @param  string  $context
     * @return mixed   If numeric value is set, then return float. If discount is not set, return empty string.
     */
    public function get_discount($context = '')
    {
    }
    /**
     * Item sign-up discount.
     *
     * @return double
     */
    public function get_sign_up_discount()
    {
    }
    /**
     * Checkbox state for optional bundled items.
     *
     * @return boolean
     */
    public function is_optional_checked()
    {
    }
    /**
     * Visible or hidden item thumbnail.
     *
     * @return boolean
     */
    public function is_thumbnail_visible()
    {
    }
    /**
     * Get classes for template use.
     *
     * @return string
     */
    public function get_classes($implode = \true)
    {
    }
    /**
     * Get bundled item stock html.
     *
     * @since  5.2.0
     *
     * @param  WC_Product|false  $product
     * @return string
     */
    public function get_availability_html($product = \false)
    {
    }
    /**
     * Bundled product availability that takes min_quantity > 1 into account.
     *
     * @param  WC_Product|false  $product
     * @return array
     */
    public function get_availability($product = \false)
    {
    }
    /**
     * Changes stock format to "low_amount".
     *
     * @since  5.5.0
     *
     * @param  string  $format
     * @return string
     */
    public function filter_stock_format($format)
    {
    }
    /**
     * Changes the low stock amount notification threshold.
     *
     * @since  5.5.0
     *
     * @param  int  $amount
     * @return int
     */
    public function filter_notify_low_stock_amount($amount)
    {
    }
    /**
     * Get (synced) subscription up-front price.
     *
     * @since  4.14.6
     *
     * @param  double      $sign_up_fee
     * @param  double      $recurring_price
     * @param  WC_Product  $product
     * @return double
     */
    public function get_up_front_subscription_price($recurring_price, $sign_up_fee, $product = \false)
    {
    }
    /**
     * Whether this bundled item has attributes to display.
     *
     * @since  6.15.2
     *
     * @return array
     */
    public function has_attributes()
    {
    }
    /**
     * Whether this bundled item has weight to display.
     *
     * @since  6.15.2
     *
     * @return array
     */
    public function has_weight()
    {
    }
    /**
     * Whether this bundled item has dimensions to display.
     *
     * @since  6.15.2
     *
     * @return array
     */
    public function has_dimensions()
    {
    }
    /**
     * Builds a list of product attributes for display.
     *
     * @since  6.15.2
     *
     * @return array
     */
    public function get_attribute_template_args()
    {
    }
    /**
     * Filters bundled product attributes, hiding attributes that correspond to filtered-out variations. Useful up to WC 3.5 only.
     *
     * @param  string  $output
     * @param  array   $attribute
     * @param  array   $values
     * @return string
     */
    public function filter_bundled_item_attribute($output, $attribute, $values)
    {
    }
    /**
     * Get image size.
     *
     * @since  5.7.3
     *
     * @return string
     */
    public function get_bundled_item_thumbnail_size()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Deprecated methods.
    |--------------------------------------------------------------------------
    */
    public function get_bundled_item_display_attribute_args()
    {
    }
    public function init()
    {
    }
    public function is_priced_per_product()
    {
    }
    public function get_bundled_item_price($min_or_max = 'min', $display = \false)
    {
    }
    public function get_bundled_item_regular_price($min_or_max = 'min', $display = \false)
    {
    }
    public function get_bundled_item_recurring_price($min_or_max = 'min', $display = \false)
    {
    }
    public function get_bundled_item_regular_recurring_price($min_or_max = 'min', $display = \false)
    {
    }
    public function get_bundled_item_price_including_tax($min_or_max = 'min', $qty = 1)
    {
    }
    public function get_bundled_item_price_excluding_tax($min_or_max = 'min', $qty = 1)
    {
    }
    public function is_out_of_stock()
    {
    }
    public function is_sub()
    {
    }
    public function is_variable_sub()
    {
    }
    public function get_prorated_price_for_subscription($recurring_price, $sign_up_fee, $product = \false)
    {
    }
    public function get_sign_up_fee($sign_up_fee, $product)
    {
    }
    public function has_variables()
    {
    }
}
/**
 * Front-end AJAX filters for 'get_variation'.
 *
 * @class    WC_PB_Ajax
 * @version  5.0.0
 * @since    5.0.0
 */
class WC_PB_Ajax
{
    /**
     * Hook in.
     */
    public static function init()
    {
    }
    /**
     * Filters core 'get_variation' AJAX requests in order to account for bundled item variation filters and discounts.
     */
    public static function ajax_get_bundled_variation()
    {
    }
}
/**
 * Background Updater.
 *
 * Uses https://github.com/A5hleyRich/wp-background-processing to handle DB
 * updates in the background.
 *
 * @class    WC_PB_Background_Updater
 * @version  5.7.1
 */
class WC_PB_Background_Updater extends \WP_Background_Process
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
     * @since  5.7.1
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
     * Runs update tasks and creates log entries.
     * Passes the object to task callbacks to allow in-task resource monitoring using the built-in methods.
     * Handles multiple callback exit codes for restarting or requeuing a task.
     *
     * @param  string  $callback
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
 * Product Bundle cart functions and filters.
 *
 * @class    WC_PB_Cart
 * @version  6.21.0
 */
class WC_PB_Cart
{
    /**
     * Validation context for 'validate_bundle_configuration'.
     * Possible values: 'add-to-cart'|'add-to-order'|'cart'.
     *
     * @var string
     */
    protected $validation_context = \null;
    /**
     * Flag to avoid infinite loops when removing a bundle parent via a child.
     *
     * @var string
     */
    protected $removing_container_key = \null;
    /**
     * The single instance of the class.
     * @var WC_PB_Cart
     *
     * @since 5.0.0
     */
    protected static $_instance = \null;
    /**
     * Main WC_PB_Cart instance. Ensures only one instance of WC_PB_Cart is loaded or can be loaded.
     *
     * @static
     * @return WC_PB_Cart
     * @since  5.0.0
     */
    public static function instance()
    {
    }
    /**
     * Cloning is forbidden.
     *
     * @since 5.0.0
     */
    public function __clone()
    {
    }
    /**
     * Unserializing instances of this class is forbidden.
     *
     * @since 5.0.0
     */
    public function __wakeup()
    {
    }
    /*
     * Setup hooks.
     */
    protected function __construct()
    {
    }
    /**
     * Add hooks.
     *
     * @since  6.15.0
     */
    public function add_hooks()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Class methods.
    |--------------------------------------------------------------------------
    */
    /**
     * Session data loaded?
     *
     * @since  5.8.1
     *
     * @return string
     */
    public function is_cart_session_loaded()
    {
    }
    /**
     * Gets the current validation context.
     *
     * @return string|null
     */
    public function get_validation_context()
    {
    }
    /**
     * Validates and adds a bundle to the cart. Relies on specifying a bundle configuration array with all necessary data - @see 'get_posted_bundle_configuration()' for details.
     *
     * @param  mixed  $product_id      Id of the bundle to add to the cart.
     * @param  mixed  $quantity        Quantity of the bundle.
     * @param  array  $configuration   Bundle configuration - @see 'get_posted_bundle_configuration()'.
     * @param  array  $cart_item_data  Custom cart item data to pass to 'WC_Cart::add_to_cart()'.
     * @return string|WP_Error
     */
    public function add_bundle_to_cart($product_id, $quantity, $configuration = array(), $cart_item_data = array())
    {
    }
    /**
     * Parses a bundle configuration array to ensure that all mandatory cart item data fields are present.
     * Can also be used to get an array with the minimum required data to fill in before calling 'add_bundle_to_cart'.
     *
     * @param  WC_Product_Bundle  $bundle         Product bundle whose configuration is being parsed or generated.
     * @param  array              $configuration  Initial configuration array to parse. Leave empty to get a minimum array that you can fill with data - @see 'get_posted_bundle_configuration()'.
     * @param  boolean            $strict_mode    Set true to initialize bundled product IDs to an empty string if undefined in the source array.
     * @return array
     */
    public function parse_bundle_configuration($bundle, $configuration = array(), $strict_mode = \false)
    {
    }
    /**
     * Build bundle configuration array from posted data. Array example:
     *
     *    $config = array(
     *        134 => array(                             // ID of bundled item.
     *            'product_id'        => 15,            // ID of bundled product.
     *            'quantity'          => 2,             // Qty of bundled product, will fall back to min.
     *            'discount'          => 50.0,          // Bundled product discount, defaults to the defined value.
     *            'title'             => 'Test',        // Bundled product title, include only if overriding.
     *            'optional_selected' => 'yes',         // If the bundled item is optional, indicate if chosen or not.
     *            'attributes'        => array(         // Array of selected variation attribute names, sanitized.
     *                'attribute_color' => 'black',
     *                'attribute_size'  => 'medium'
     *             ),
     *            'variation_id'      => 43             // ID of chosen variation, if applicable.
     *        )
     *    );
     *
     * @param  mixed  $product
     * @return array
     */
    public function get_posted_bundle_configuration($product)
    {
    }
    /**
     * Rebuilds posted form data associated with a bundle configuration.
     *
     * @since  5.8.0
     *
     * @param  WC_Product_Bundle  $bundle
     * @param  array              $configuration
     * @return boolean
     */
    public function rebuild_posted_bundle_form_data($configuration)
    {
    }
    /**
     * Validates the selected bundled items in a bundle configuration.
     *
     * @throws Exception
     *
     * @param  mixed         $product
     * @param  int           $product_quantity
     * @param  array         $configuration
     * @param  array|string  $args
     * @return bool
     */
    public function validate_bundle_configuration($product, $product_quantity, $configuration, $args = array())
    {
    }
    /**
     * Analyzes bundled cart items to characterize a bundle.
     *
     * @since  5.8.0
     *
     * @param  array   $cart_item
     * @param  string  $key
     * @return bool
     */
    public function container_cart_item_contains($cart_item, $key)
    {
    }
    /**
     * When a bundle is static-priced, the price of all bundled items is set to 0.
     * When the shipping mode is set to "bundled", all bundled items are marked as virtual when they are added to the cart.
     * Otherwise, the container itself is a virtual product in the first place.
     *
     * @param  array              $cart_item
     * @param  WC_Product_Bundle  $bundle
     * @return array
     */
    private function set_bundled_cart_item($cart_item, $bundle)
    {
    }
    /**
     * Bundle container price must be set equal to the base price when individually-priced items exist.
     *
     * @param  array              $cart_item
     * @param  WC_Product_Bundle  $bundle
     * @return array
     */
    private function set_bundle_container_cart_item($cart_item)
    {
    }
    /**
     * Refresh parent item configuration fields that might be out-of-date.
     *
     * @param  array              $cart_item
     * @param  WC_Product_Bundle  $bundle
     * @return array
     */
    public function update_bundle_container_cart_item_configuration($cart_item, $bundle)
    {
    }
    /**
     * Refresh child item configuration fields that might be out-of-date.
     *
     * @param  array              $cart_item
     * @param  WC_Product_Bundle  $bundle
     * @return array
     */
    public function update_bundled_cart_item_configuration($cart_item, $bundle)
    {
    }
    /**
     * Adds a bundled product to the cart. Must be done without updating session data, recalculating totals or calling 'woocommerce_add_to_cart' recursively.
     * For the recursion issue, see: https://core.trac.wordpress.org/ticket/17817.
     *
     * @param  int    $bundle_id
     * @param  mixed  $product
     * @param  int    $quantity
     * @param  int    $variation_id
     * @param  array  $variation
     * @param  array  $cart_item_data
     * @return boolean
     */
    private function bundled_add_to_cart($bundle_id, $product, $quantity = 1, $variation_id = '', $variation = array(), $cart_item_data = array())
    {
    }
    /**
     * Indicates whether a container item is being removed.
     *
     * @since  6.15.0
     *
     * @param  string  $item_key
     * @return string
     */
    public function is_removing_container_cart_item($cart_item_key)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Filter hooks.
    |--------------------------------------------------------------------------
    */
    /**
     * Check bundle cart item configurations on cart load.
     */
    public function check_cart_items()
    {
    }
    /**
     * Add bundle cart item data to validate.
     *
     * @since  6.1.3
     *
     * @param  array       $data
     * @param  WC_Product  $product
     * @return array
     */
    public function cart_item_data_to_validate($data, $product)
    {
    }
    /**
     * Validates add-to-cart for bundles.
     *
     * @param  boolean  $add
     * @param  int      $product_id
     * @param  int      $quantity
     * @param  mixed    $variation_id
     * @param  array    $variations
     * @param  array    $cart_item_data
     * @return boolean
     */
    public function validate_add_to_cart($add, $product_id, $quantity, $variation_id = '', $variations = array(), $cart_item_data = array())
    {
    }
    /**
     * Validates add-to-cart for bundles.
     * Basically ensures that stock for all bundled products exists before attempting to add them to cart.
     *
     * @since  5.6.0
     *
     * @param  WC_Product_Bundle  $bundle
     * @param  int                $quantity
     * @param  array              $cart_item_data
     * @return boolean
     */
    public function validate_bundle_add_to_cart($bundle, $quantity, $cart_item_data)
    {
    }
    /**
     * Validates in-cart quantity changes.
     *
     * @param  bool    $passed
     * @param  string  $cart_item_key
     * @param  array   $cart_item
     * @param  int     $quantity
     * @return bool
     */
    public function update_cart_validation($passed, $cart_item_key, $cart_item, $quantity)
    {
    }
    /**
     * Redirect to the cart when editing a bundle "in-cart".
     *
     * @param  string  $url
     * @return string
     */
    public function edit_in_cart_redirect($url)
    {
    }
    /**
     * Filter the displayed notice after redirecting to the cart when editing a bundle "in-cart".
     *
     * @param  string  $url
     * @return string
     */
    public function edit_in_cart_redirect_message($message)
    {
    }
    /**
     * Adds bundle specific cart-item data.
     * The 'stamp' var is a unique identifier for that particular bundle configuration.
     *
     * @param  array  $cart_item_data
     * @param  int    $product_id
     * @return array
     */
    public function add_cart_item_data($cart_item_data, $product_id)
    {
    }
    /**
     * Adds bundled items to the cart on the 'woocommerce_add_to_cart' action.
     * The 'bundled_by' var is added to each item to identify between bundled and standalone instances of products.
     * Important: Recursively calling the core add_to_cart function can lead to issus with the contained action hook: https://core.trac.wordpress.org/ticket/17817.
     *
     * @param  string  $bundle_cart_key
     * @param  int     $bundle_id
     * @param  int     $bundle_quantity
     * @param  int     $variation_id
     * @param  array   $variation
     * @param  array   $cart_item_data
     * @return void
     */
    public function bundle_add_to_cart($bundle_cart_key, $bundle_id, $bundle_quantity, $variation_id, $variation, $cart_item_data)
    {
    }
    /**
     * When a bundle is static-priced, the price of all bundled items is set to 0.
     * When the shipping mode is set to "bundled", all bundled items are marked as virtual when they are added to the cart.
     * Otherwise, the container itself is a virtual product in the first place.
     *
     * @param  array   $cart_item
     * @param  string  $cart_key
     * @return array
     */
    public function add_cart_item_filter($cart_item, $cart_key)
    {
    }
    /**
     * Reload all bundle-related session data in the cart.
     *
     * @param  array  $cart_item
     * @param  array  $cart_session_item
     * @param  array  $cart_item_key
     * @return array
     */
    public function get_cart_item_from_session($cart_item, $cart_session_item, $cart_item_key)
    {
    }
    /**
     * Ensure any cart items marked as bundled have a valid parent. If not, silently remove them.
     *
     * @param  WC_Cart  $cart
     * @return void
     */
    public function cart_loaded_from_session($cart)
    {
    }
    /**
     * Keep quantities between bundled products and container items in sync.
     *
     * @param  string   $cart_item_key
     * @param  integer  $quantity
     * @return void
     */
    public function update_quantity_in_cart($cart_item_key, $quantity = 0)
    {
    }
    /**
     * Handle bundled cart item removals.
     *
     * @return void
     */
    public function update_cart_action_remove_item()
    {
    }
    /**
     * Remove bundled cart items with parent.
     *
     * @param  string   $cart_item_key
     * @param  WC_Cart  $cart
     * @return void
     */
    public function cart_item_remove($cart_item_key, $cart)
    {
    }
    /**
     * Restore bundled cart items with parent.
     *
     * @param  string   $cart_item_key
     * @param  WC_Cart  $cart
     * @return void
     */
    public function cart_item_restore($cart_item_key, $cart)
    {
    }
    /**
     * Shipping fix - add the value of any children that are not shipped individually to the container value and, optionally, add their weight to the container weight, as well.
     *
     * @param  array  $packages
     * @return array
     */
    public function cart_shipping_packages($packages)
    {
    }
    /**
     * Treat bundled subs as non-sub products when bundled in statically-priced bundles.
     * Method: Do not add product in any subscription cart group.
     *
     * @return void
     */
    public function add_subcription_filter()
    {
    }
    /**
     * Treat bundled subs as non-sub products when bundled in statically-priced bundles.
     * Method: Do not add product in any subscription cart group.
     *
     * @return void
     */
    public function remove_subcription_filter()
    {
    }
    /**
     * Treat bundled subs as non-sub products when bundled in statically-priced bundles.
     *
     * @param  bool        $is_sub
     * @param  string      $product_id
     * @param  WC_Product  $product
     * @return bool
     */
    public function is_subscription_filter($is_sub, $product_id, $product)
    {
    }
    /**
     * "Sold Individually" context support under WC 3.5+.
     *
     * @since  5.8.1
     *
     * @param  bool    $found
     * @param  int     $product_id
     * @param  int     $variation_id
     * @param  array   $cart_item
     * @return bool
     */
    public function sold_individually_found_in_cart($found, $product_id, $variation_id, $cart_item)
    {
    }
    /**
     * Deprecated class methods.
     *
     * @deprecated
     */
    public function get_bundled_cart_item_container($cart_item)
    {
    }
    public function is_bundled_cart_item($cart_item)
    {
    }
    public function is_bundle_container_cart_item($cart_item)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Deprecated methods.
    |--------------------------------------------------------------------------
    */
    public function order_again($cart_item, $order_item, $order)
    {
    }
    public function coupon_is_valid_for_product($valid, $product, $coupon, $item)
    {
    }
    public function format_subtotal($product, $subtotal)
    {
    }
    public function cart_item_price_html($price, $values, $cart_item_key)
    {
    }
    public function item_subtotal($subtotal, $values, $cart_item_key)
    {
    }
    public function cart_item_quantity($quantity, $cart_item_key)
    {
    }
    public function cart_item_remove_link($link, $cart_item_key)
    {
    }
}
/**
 * DB updating and other stuff via WP-CLI.
 *
 * @class    WC_PB_CLI
 * @version  5.5.0
 */
class WC_PB_CLI
{
    /**
     * Load required files and hooks.
     */
    public function __construct()
    {
    }
    /**
     * Load command files.
     */
    private function includes()
    {
    }
    /**
     * Sets up and hooks WP CLI to our CLI code.
     */
    private function hooks()
    {
    }
}
/**
 * Product Bundle Coupon functions and filters.
 *
 * @class    WC_PB_Coupon
 * @version  5.11.0
 */
class WC_PB_Coupon
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
     * - Coupon is invalid for bundled item if parent is excluded.
     * - Coupon is valid for bundled item if valid for parent, unless bundled item is excluded.
     *
     * @since  5.8.0
     *
     * @param  bool                   $valid
     * @param  WC_Product             $product
     * @param  WC_Coupon              $coupon
     * @param  WC_Order_Item_Product  $item
     * @return boolean
     */
    public static function coupon_is_valid_for_product($valid, $product, $coupon, $item)
    {
    }
}
/**
 * Product Bundles DB Sync Task Runner.
 *
 * Uses https://github.com/A5hleyRich/wp-background-processing to handle tasks in the background.
 *
 * @class    WC_PB_DB_Sync_Task_Runner
 * @version  6.14.1
 */
class WC_PB_DB_Sync_Task_Runner extends \WC_Background_Process
{
    /**
     * Fallback to cron every minute.
     *
     * @var int
     */
    protected $cron_interval = 1;
    /**
     * Limit the queue size just in case loopback + cron don't work.
     *
     * @var int
     */
    protected $queue_max_size = 10;
    /**
     * Initiate new background process.
     */
    public function __construct()
    {
    }
    /**
     * Returns the cron action identifier.
     *
     * @since  5.7.1
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
     * Get batch key prefix.
     *
     * @param  boolean $escape
     * @return string
     */
    protected function get_batch_key_prefix($escaped = \false)
    {
    }
    /**
     * Get batch.
     *
     * @return stdClass Return the first batch from the queue.
     */
    protected function get_batch()
    {
    }
    /**
     * Is queue empty.
     *
     * @return bool
     */
    protected function is_queue_empty()
    {
    }
    /**
     * Is queue full.
     *
     * @return bool
     */
    protected function is_queue_full()
    {
    }
    /**
     * Delete all batches.
     *
     * @return WC_Background_Process
     */
    public function delete_all_batches()
    {
    }
    /**
     * Check if the queue is full before adding a new item.
     *
     * @return bool
     */
    public function maybe_save()
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
     * @param  array  $data
     * @return mixed
     */
    protected function task($data)
    {
    }
    /**
     * When all tasks complete, create a log entry.
     */
    protected function complete()
    {
    }
}
/**
 * Hooks for DB lifecycle management of products, bundles, bundled items and their meta.
 *
 * @class    WC_PB_DB_Sync
 * @version  6.14.1
 */
class WC_PB_DB_Sync
{
    /**
     * Task runner.
     * @var WC_PB_DB_Sync_Task_Runner
     */
    private static $sync_task_runner;
    /**
     * Scan for bundles that need syncing on shutdown?
     * @var boolean
     */
    private static $sync_needed = \false;
    /**
     * Enable pre-syncing?
     * @var int
     */
    private static $bundled_product_stock_pre_sync = \true;
    /**
     * Setup Admin class.
     */
    public static function init()
    {
    }
    /**
     * Duplicates bundled items when duplicating a bundle.
     *
     * @param  WC_Product  $duplicated_product
     * @param  WC_Product  $product
     */
    public static function duplicate_product_before_save($duplicated_product, $product)
    {
    }
    /**
     * Deletes bundled item DB entries when: i) their container product bundle is deleted, or ii) the associated bundled product is deleted.
     *
     * @param  mixed  $id  ID of post being deleted.
     */
    public static function delete_post($id)
    {
    }
    /**
     * Deletes bundled item DB entries when: i) their container product bundle is deleted, or ii) the associated bundled product is deleted.
     *
     * @param  mixed  $id  ID of product being deleted.
     */
    public static function delete_product($id)
    {
    }
    /**
     * When deleting a bundled item from the DB, clear the transients of the container bundle.
     *
     * @param  WC_Bundled_Item_Data  $item  The bundled item DB object being deleted.
     */
    public static function delete_bundled_item($item)
    {
    }
    /**
     * Delete price meta reserved to bundles/composites.
     *
     * @param  WC_Product  $product
     * @return void
     */
    public static function delete_reserved_price_meta($product)
    {
    }
    /**
     * Delete bundled item stock meta cache when a linked product stock changes.
     *
     * @param  mixed   $product_id
     * @param  string  $stock_status
     * @param  mixed   $product
     * @return void
     */
    public static function product_stock_status_changed($product_id, $stock_status, $product = \null)
    {
    }
    /**
     * Delete bundled item stock meta cache when the 'backorders' prop of a linked product changes.
     *
     * @param  WC_Product  $product
     * @param  array       $changes
     * @return void
     */
    public static function backorder_prop_changed($product, $changes)
    {
    }
    /**
     * Delete bundled item stock meta cache when a linked product stock changes.
     *
     * @param  WC_Product  $product
     * @return void
     */
    public static function product_stock_changed($product)
    {
    }
    /**
     * Set stock update pre-syncing flag.
     *
     * @since  5.8.0
     *
     * @return void
     */
    public static function set_bundled_product_stock_pre_sync()
    {
    }
    /**
     * Trigger bundled items stock meta refresh when product stock (status) changes.
     *
     * @since  5.8.0
     *
     * @param  mixed  $product
     * @return void
     */
    public static function bundled_product_stock_changed($product)
    {
    }
    /**
     * Bulk update bundled item 'stock_status' meta.
     *
     * @since  5.8.0
     *
     * @param  array  $stock_meta_map
     * @return void
     */
    private static function update_bundled_items_stock_status_meta($stock_meta_map)
    {
    }
    /**
     * Bulk update bundled item 'max_stock' meta.
     *
     * @since  5.8.0
     *
     * @param  array  $stock_meta_map
     * @return void
     */
    private static function update_bundled_items_max_stock_meta($stock_meta_map)
    {
    }
    /**
     * Spawn task runner.
     */
    public static function initialize_sync_task_runner()
    {
    }
    /**
     * Maybe sync bundle stock data.
     *
     * @since  6.7.8
     *
     * @return void
     */
    public static function maybe_sync()
    {
    }
    /**
     * Sync:
     *
     * - bundled items stock status;
     * - bundle stock status; and
     * - bundle visibility.
     *
     * @see  'WC_PB_DB_Sync_Task_Runner::task'
     *
     * @return void
     */
    public static function sync()
    {
    }
    /**
     * Determines if a sync operation can be started.
     * If a sync operation hasn't been throttled, allow new sync tasks to run with a max frequency of 10 seconds.
     * If a sync operation has been throttled, wait for at least 60 seconds before syncing again.
     *
     * @since  6.7.8
     */
    protected static function throttle_sync()
    {
    }
    /**
     * Determines if a pending sync operation exists.
     *
     * @since  6.7.8
     */
    protected static function has_throttled_sync()
    {
    }
    /**
     * Determines if a sync operation has been scheduled on this request.
     *
     * @since  6.7.8
     */
    protected static function has_scheduled_sync()
    {
    }
    /**
     * Schedules a sync check.
     */
    public static function schedule_sync()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Deprecated methods.
    |--------------------------------------------------------------------------
    */
    public static function reset_bundled_items_stock_status($product_id)
    {
    }
    public static function delete_reserved_price_post_meta($post_id)
    {
    }
    public static function delete_bundled_items_stock_cache($product_id)
    {
    }
    public static function delete_bundle_transients($post_id)
    {
    }
}
/**
 * Product Bundle display functions and filters.
 *
 * @class    WC_PB_Display
 * @version  6.21.0
 */
class WC_PB_Display
{
    /**
     * Indicates whether the bundled table item indent JS has already been enqueued.
     * @var boolean
     */
    private $enqueued_bundled_table_item_js = \false;
    /**
     * Workaround for $order arg missing from 'woocommerce_order_item_name' filter - set within the 'woocommerce_order_item_class' filter - @see 'order_item_class()'.
     * @var boolean|WC_Order
     */
    private $order_item_order = \false;
    /**
     * Active element position/column when rendering a grid of bundled items, applicable when the "Grid" layout is active.
     * @var integer
     */
    private $grid_layout_pos = 1;
    /**
     * Runtime cache.
     * @var bool
     */
    private $display_cart_prices_incl_tax;
    /**
     * The single instance of the class.
     * @var WC_PB_Display
     *
     * @since 5.0.0
     */
    protected static $_instance = \null;
    /**
     * Main WC_PB_Display instance. Ensures only one instance of WC_PB_Display is loaded or can be loaded.
     *
     * @since  5.0.0
     *
     * @return WC_PB_Display
     */
    public static function instance()
    {
    }
    /**
     * Cloning is forbidden.
     *
     * @since 5.0.0
     */
    public function __clone()
    {
    }
    /**
     * Unserializing instances of this class is forbidden.
     *
     * @since 5.0.0
     */
    public function __wakeup()
    {
    }
    /**
     * Setup hooks and functions.
     */
    protected function __construct()
    {
    }
    /**
     * Frontend scripts.
     *
     * @return void
     */
    public function frontend_scripts()
    {
    }
    /**
     * Enqueue js that wraps bundled table items in a div in order to apply indentation reliably.
     * This obviously sucks but if you can find a CSS-only way to do it better that works reliably with any theme out there, drop us a line, will you?
     *
     * @return void
     */
    private function enqueue_bundled_table_item_js()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Single-product.
    |--------------------------------------------------------------------------
    */
    /**
     * The number of bundled item columns when the "Grid" layout is active.
     *
     * @since  5.8.0
     *
     * @param  WC_Product_Bundle  $bundle
     * @return int
     */
    public function get_grid_layout_columns($bundle)
    {
    }
    /**
     * Class associated with the position of a bundled item in the grid when the "Grid" layout is active.
     *
     * @since  5.8.0
     *
     * @param  WC_Bundled_Item  $bundled_item
     * @return int
     */
    public function get_grid_layout_class($bundled_item)
    {
    }
    /**
     * Increments the position of a bundled item in the grid when the "Grid" layout is active.
     *
     * @since  5.8.0
     *
     * @param  WC_Bundled_Item  $bundled_item
     * @return void
     */
    public function incr_grid_layout_pos($bundled_item)
    {
    }
    /**
     * Resets the position of a bundled item in the grid when the "Grid" layout is active.
     *
     * @since  5.8.0
     *
     * @return void
     */
    public function reset_grid_layout_pos()
    {
    }
    /**
     * Display info notice when editing a bundle from the cart.
     */
    public function add_edit_in_cart_notice()
    {
    }
    /**
     * Modify structured data for bundle-type products.
     *
     * @param  array       $data
     * @param  WC_Product  $product
     * @return array
     */
    public function structured_product_data($data, $product)
    {
    }
    /**
     * Replace 'in_stock' post class with 'insufficient_stock' and 'out_of_stock' post class.
     *
     * @since  5.11.2
     *
     * @param  array       $classes
     * @param  WC_Product  $product
     * @return array
     */
    public function post_classes($classes, $product)
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
     * @since  6.3.2
     *
     * @return string
     */
    public function display_cart_prices_including_tax()
    {
    }
    /**
     * Outputs a formatted subtotal.
     *
     * @param  WC_Product  $product
     * @param  string      $subtotal
     * @return string
     */
    public function format_subtotal($product, $subtotal)
    {
    }
    /**
     * Modify the front-end price of bundled items and container items depending on their pricing setup.
     *
     * @param  double  $price
     * @param  array   $values
     * @param  string  $cart_item_key
     * @return string
     */
    public function cart_item_price($price, $cart_item, $cart_item_key)
    {
    }
    /**
     * Modifies child cart item prices.
     *
     * @since  5.8.0
     *
     * @param  string  $price
     * @param  array   $cart_item
     * @param  string  $cart_item_key
     * @return string
     */
    public function get_child_cart_item_price($price, $cart_item, $cart_item_key, $bundle_container_item = \false)
    {
    }
    /**
     * Aggregates parent + child cart item prices.
     *
     * @param  string  $price
     * @param  array   $cart_item
     * @param  string  $cart_item_key
     * @return string
     */
    private function get_container_cart_item_price($price, $cart_item, $cart_item_key)
    {
    }
    /**
     * Aggregates parent + child cart item prices.
     *
     * @since  6.15.0
     *
     * @param  array   $cart_item
     * @return string
     */
    public function get_container_cart_item_price_amount($cart_item, $type)
    {
    }
    /**
     * Modifies child cart item subtotals.
     *
     * @since  5.8.0
     *
     * @param  string  $price
     * @param  array   $cart_item
     * @param  string  $cart_item_key
     * @return string
     */
    public function get_child_cart_item_subtotal($subtotal, $cart_item, $cart_item_key, $bundle_container_item = \false)
    {
    }
    /**
     * Aggregates parent + child cart item subtotals.
     *
     * @param  string  $subtotal
     * @param  array   $cart_item
     * @param  string  $cart_item_key
     * @return string
     */
    private function get_container_cart_item_subtotal($subtotal, $cart_item, $cart_item_key)
    {
    }
    /**
     * Aggregates cart item totals.
     *
     * @param  array   $cart_item
     * @param  string  $type
     * @return float
     */
    public static function get_container_cart_item_subtotal_amount($cart_item, $type)
    {
    }
    /**
     * Modifies line item subtotals in the 'cart.php' & 'review-order.php' templates.
     *
     * @param  string  $subtotal
     * @param  array   $cart_item
     * @param  string  $cart_item_key
     * @return string
     */
    public function cart_item_subtotal($subtotal, $cart_item, $cart_item_key)
    {
    }
    /**
     * Bundled item quantities can't be changed individually. When adjusting quantity for the container item, the bundled products must follow.
     *
     * @param  int     $quantity
     * @param  string  $cart_item_key
     * @return int
     */
    public function cart_item_quantity($quantity, $cart_item_key)
    {
    }
    /**
     * Bundled items can't be removed individually from the cart - this hides the remove buttons.
     *
     * @param  string  $link
     * @param  string  $cart_item_key
     * @return string
     */
    public function cart_item_remove_link($link, $cart_item_key)
    {
    }
    /**
     * Visibility of bundled item in cart.
     *
     * @param  boolean  $visible
     * @param  array    $cart_item
     * @param  string   $cart_item_key
     * @return boolean
     */
    public function cart_item_visible($visible, $cart_item, $cart_item_key)
    {
    }
    /**
     * Override bundled item title in cart/checkout templates.
     *
     * @param  string  $content
     * @param  array   $cart_item
     * @param  string  $cart_item_key
     * @return string
     */
    public function cart_item_title($content, $cart_item, $cart_item_key)
    {
    }
    /**
     * Change the tr class of bundled items in cart templates to allow their styling.
     *
     * @param  string  $classname
     * @param  array   $cart_item
     * @param  string  $cart_item_key
     * @return string
     */
    public function cart_item_class($classname, $cart_item, $cart_item_key)
    {
    }
    /**
     * Filters the reported number of cart items. Omit:
     *
     * - Hidden parent items.
     * - Hidden or indented child items.
     *
     * @param  int  $count
     * @return int
     */
    public function cart_contents_count($count)
    {
    }
    /**
     * Add "Part of" cart item data to bundled items.
     *
     * @param  array  $data
     * @param  array  $cart_item
     * @return array
     */
    public function cart_item_data($data, $cart_item)
    {
    }
    /**
     * Hide thumbnail in cart when 'Hide thumbnail' option is selected.
     *
     * @param  string  $image
     * @param  array   $cart_item
     * @param  string  $cart_item_key
     * @return string
     */
    public function cart_item_thumbnail($image, $cart_item, $cart_item_key)
    {
    }
    /**
     * Rendering cart widget?
     *
     * @since  5.8.0
     * @return boolean
     */
    protected function is_cart_widget()
    {
    }
    /**
     * Add cart widget filters.
     *
     * @return void
     */
    public function add_cart_widget_filters()
    {
    }
    /**
     * Remove cart widget filters.
     *
     * @return void
     */
    public function remove_cart_widget_filters()
    {
    }
    /**
     * Change the li class of composite parent/child items in mini-cart templates to allow their styling.
     *
     * @since  5.8.0
     *
     * @param  string  $classname
     * @param  array   $cart_item
     * @return string
     */
    public function mini_cart_item_class($classname, $cart_item)
    {
    }
    /**
     * Conditionally hide bundled items in the mini cart.
     *
     * @param  boolean  $show
     * @param  array    $cart_item
     * @param  string   $cart_item_key
     * @return boolean
     */
    public function cart_widget_item_visible($show, $cart_item, $cart_item_key)
    {
    }
    /**
     * Tweak bundle container qty.
     *
     * @param  bool    $qty
     * @param  array   $cart_item
     * @param  string  $cart_item_key
     * @return bool
     */
    public function cart_widget_item_qty($qty, $cart_item, $cart_item_key)
    {
    }
    /**
     * Tweak bundle container name.
     *
     * @param  bool    $show
     * @param  array   $cart_item
     * @param  string  $cart_item_key
     * @return bool
     */
    public function cart_widget_container_item_name($name, $cart_item, $cart_item_key)
    {
    }
    /**
     * Gets bundled content data.
     *
     * @since  5.8.0
     *
     * @param  array  $cart_item
     * @param  mixed  $arg
     * @return array
     */
    public function get_bundle_container_cart_item_data($cart_item, $arg = array())
    {
    }
    /**
     * Adds content data as parent item meta (by default in the mini-cart only).
     *
     * @param  array  $data
     * @param  array  $cart_item
     * @return array
     */
    public function cart_widget_container_item_data($data, $cart_item)
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
     * @param  string         $subtotal
     * @param  WC_Order_Item  $item
     * @param  WC_Order       $order
     * @return string
     */
    public function order_item_subtotal($subtotal, $item, $order)
    {
    }
    /**
     * Visibility of bundled item in orders.
     *
     * @param  boolean  $visible
     * @param  array    order_item
     * @return boolean
     */
    public function order_item_visible($visible, $order_item)
    {
    }
    /**
     * Override bundled item title in order-details template.
     *
     * @param  string  $content
     * @param  array   $order_item
     * @return string
     */
    public function order_item_title($content, $order_item)
    {
    }
    /**
     * Add class to bundled items in order templates.
     *
     * @param  string  $classname
     * @param  array   $order_item
     * @return string
     */
    public function order_item_class($classname, $order_item, $order)
    {
    }
    /**
     * Filters the reported number of order items.
     *
     * @param  int       $count
     * @param  string    $type
     * @param  WC_Order  $order
     * @return int
     */
    public function order_item_count($count, $type, $order)
    {
    }
    /**
     * Indent bundled items in emails.
     *
     * @param  string  $css
     * @return string
     */
    public function email_styles($css)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Archives.
    |--------------------------------------------------------------------------
    */
    /**
     * Used to fix QuickView support when:
     * - ajax add-to-cart is active and
     * - QuickView operates without a separate button.
     * Since WC 2.5+ this is (almost) a relic.
     *
     * @param  string      $link
     * @param  WC_Product  $product
     * @return string
     */
    public function loop_add_to_cart_link($link, $product)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Other.
    |--------------------------------------------------------------------------
    */
    /**
     * Enhance price filter widget meta query to include results based on max '_wc_sw_max_price' meta.
     *
     * @param  array     $meta_query
     * @param  WC_Query  $wc_query
     * @return array
     */
    public function price_filter_query_params($meta_query, $wc_query)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Deprecated.
    |--------------------------------------------------------------------------
    */
    public function order_table_item_title($content, $order_item)
    {
    }
    public function woo_bundles_loop_add_to_cart_link($link, $product)
    {
    }
    public function woo_bundles_in_cart_item_title($content, $cart_item_values, $cart_item_key)
    {
    }
    public function woo_bundles_order_table_item_title($content, $order_item)
    {
    }
    public function woo_bundles_table_item_class($classname, $values)
    {
    }
    public function woo_bundles_frontend_scripts()
    {
    }
    public function woo_bundles_cart_contents_count($count)
    {
    }
    public function woo_bundles_add_cart_widget_filters()
    {
    }
    public function woo_bundles_remove_cart_widget_filters()
    {
    }
    public function woo_bundles_order_item_visible($visible, $order_item)
    {
    }
    public function woo_bundles_cart_item_visible($visible, $cart_item, $cart_item_key)
    {
    }
    public function woo_bundles_email_styles($css)
    {
    }
}
/**
 * Product Bundle Helper Functions.
 *
 * @class    WC_PB_Helpers
 * @version  6.15.2
 */
class WC_PB_Helpers
{
    /**
     * Runtime cache for simple storage.
     *
     * @var array
     */
    public static $cache = array();
    /**
     * Simple runtime cache getter.
     *
     * @param  string  $key
     * @param  string  $group_key
     * @return mixed
     */
    public static function cache_get($key, $group_key = '')
    {
    }
    /**
     * Simple runtime cache setter.
     *
     * @param  string  $key
     * @param  mixed   $value
     * @param  string  $group_key
     * @return void
     */
    public static function cache_set($key, $value, $group_key = '')
    {
    }
    /**
     * Simple runtime cache unsetter.
     *
     * @param  string  $key
     * @param  mixed   $value
     * @param  string  $group_key
     * @return void
     */
    public static function cache_delete($key, $group_key = '')
    {
    }
    /**
     * Simple runtime group cache invalidator.
     *
     * @since  5.7.4
     *
     * @param  string  $key
     * @param  string  $group_key
     * @param  mixed   $value
     * @return void
     */
    public static function cache_invalidate($group_key = '')
    {
    }
    /**
     * Runtime object prop getter.
     *
     * @since  6.2.4
     *
     * @param  object  $object
     * @param  string  $prop
     * @return mixed
     */
    public static function get_runtime_prop($object, $prop)
    {
    }
    /**
     * Runtime object prop checker.
     *
     * @since  6.2.4
     *
     * @param  object  $object
     * @param  string  $prop
     * @return mixed
     */
    public static function has_runtime_prop($object, $prop)
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
     * Loads variation IDs for a given variable product.
     *
     * @param  WC_Product_Variable|int  $product
     * @return array
     */
    public static function get_product_variations($product)
    {
    }
    /**
     * Return a formatted product title based on id.
     *
     * @param  mixed  $product_id
     * @return string
     */
    public static function get_product_title($product)
    {
    }
    /**
     * Return a formatted product title based on variation id.
     *
     * @param  int     $item_id
     * @param  string  $format
     * @return string
     */
    public static function get_product_variation_title($variation, $format = 'flat')
    {
    }
    /**
     * Format a product title.
     *
     * @param  string   $title
     * @param  string   $sku
     * @param  string   $meta
     * @param  boolean  $paren
     * @return string
     */
    public static function format_product_title($title, $sku = '', $meta = '', $paren = \false)
    {
    }
    /**
     * Format a product title incl qty, price and suffix.
     *
     * @param  string  $title
     * @param  string  $qty
     * @param  string  $price
     * @param  string  $suffix
     * @return string
     */
    public static function format_product_shop_title($title, $qty = '', $price = '', $suffix = '')
    {
    }
    /**
     * Comma separated list of item names, with final comma replaced by 'and'.
     *
     * @since  5.5.0
     *
     * @param  array  $items
     * @return string
     */
    public static function format_list_of_items($items)
    {
    }
    /**
     * Array of allowed HTML tags per case.
     *
     * @since  6.1.5
     *
     * @param  string  $case
     * @return array
     */
    public static function get_allowed_html($case)
    {
    }
    /**
     * Get a new product instance, preserving runtime meta from another one.
     *
     * @since  6.3.5
     *
     * @param  WC_Product  $product
     * @return WC_Product
     */
    public static function get_product_preserving_meta($product)
    {
    }
}
/**
 * Handles installation and updating tasks.
 *
 * @class    WC_PB_Install
 * @version  6.18.3
 */
class WC_PB_Install
{
    /** @var array DB updates and callbacks that need to be run per version */
    private static $db_updates = array('3.0.0' => array('wc_pb_update_300', 'wc_pb_update_300_db_version'), '5.0.0' => array('wc_pb_update_500_main', 'wc_pb_update_500_delete_unused_meta', 'wc_pb_update_500_db_version'), '5.1.0' => array('wc_pb_update_510_main', 'wc_pb_update_510_delete_unused_meta', 'wc_pb_update_510_db_version'));
    /**
     * Whether install() ran in this request.
     * @var boolean
     */
    private static $is_install_request;
    /**
     * Term runtime cache.
     * @var boolean
     */
    private static $bundle_term_exists;
    /**
     * Background update class.
     * @var WC_PB_Background_Updater
     */
    private static $background_updater;
    /**
     * Current plugin version.
     * @var string
     */
    private static $current_version;
    /**
     * Current DB version.
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
     * Add support for the 'bundle' product type.
     *
     * @param  array  $options
     * @return array
     */
    public static function product_selector_filter($options)
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
     * @since  5.5.0
     *
     * @return boolean
     */
    private static function must_install()
    {
    }
    /**
     * Installation possible?
     *
     * @since  5.5.0
     *
     * @return boolean
     */
    private static function can_install()
    {
    }
    /**
     * Check version and run the installer if necessary.
     *
     * @since  5.5.0
     */
    public static function maybe_install()
    {
    }
    /**
     * Check version and run the installer if necessary.
     *
     * @since  6.2.4
     */
    private static function is_installing()
    {
    }
    /**
     * Check version and run the installer if necessary.
     *
     * @since  6.2.4
     */
    private static function is_new_install()
    {
    }
    /**
     * DB update needed?
     *
     * @since  5.5.0
     *
     * @return boolean
     */
    private static function must_update()
    {
    }
    /**
     * DB update possible?
     *
     * @since  5.5.0
     *
     * @return boolean
     */
    private static function can_update()
    {
    }
    /**
     * Run the updater if triggered.
     *
     * @since  5.5.0
     */
    public static function maybe_update()
    {
    }
    /**
     * If the DB version is out-of-date, a DB update must be in progress: define a 'WC_PB_UPDATING' constant.
     *
     * @since  5.5.0
     */
    public static function define_updating_constant()
    {
    }
    /**
     * Install PB.
     */
    public static function install()
    {
    }
    /**
     * Set up the database tables which the plugin needs to function.
     *
     * Tables:
     *     woocommerce_bundled_items - Each bundled item id is associated with a "contained" product id (the bundled product), and a "container" bundle id (the product bundle).
     *     woocommerce_bundled_itemmeta - Bundled item meta for storing extra data.
     */
    private static function create_tables()
    {
    }
    /**
     * Schedule cron events.
     *
     * @since 6.16.0
     */
    public static function create_events()
    {
    }
    /**
     * Get table schema.
     *
     * @return string
     */
    private static function get_schema()
    {
    }
    /**
     * Update WC PB version to current.
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
     * @since  5.5.0
     *
     * @return boolean
     */
    public static function auto_update_enabled()
    {
    }
    /**
     * Trigger DB update.
     *
     * @since  5.5.0
     */
    public static function trigger_update()
    {
    }
    /**
     * Maybe prepare DB for upcoming upgrade.
     *
     * @since 6.11.1
     * @return void
     */
    protected static function maybe_prepare_db_for_upgrade()
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
     * @since  5.5.0
     *
     * @return boolean
     */
    public static function is_update_incomplete()
    {
    }
    /**
     * True if a DB update is in progress.
     *
     * @since  5.5.0
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
     * True if an update background process is running.
     *
     * @since  5.5.0
     *
     * @return boolean
     */
    public static function is_update_background_process_running()
    {
    }
    /**
     * True if a CLI update is running.
     *
     * @since  5.5.0
     *
     * @return boolean
     */
    public static function is_update_cli_process_running()
    {
    }
    /**
     * Update DB version to current.
     *
     * @param  string  $version
     */
    public static function update_db_version($version = \null)
    {
    }
    /**
     * Get list of DB update callbacks.
     *
     * @since  5.5.0
     *
     * @return array
     */
    public static function get_db_update_callbacks()
    {
    }
    /**
     * Show row meta on the plugin screen.
     *
     * @param	mixed  $links
     * @param	mixed  $file
     * @return	array
     */
    public static function plugin_row_meta($links, $file)
    {
    }
}
/**
 * Admin notices handling.
 *
 * @class    WC_PB_Notices
 * @version  6.12.4
 */
class WC_PB_Notices
{
    /**
     * Feature plugin data by note name.
     * @var array
     */
    public static $plugin_data = array();
    /**
     * Notice options.
     * @var array
     */
    public static $notice_options = array();
    /**
     * Determines if notice options should be updated in the DB.
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
     * @since  6.3.0
     *
     * @param  string  $notice_name
     * @param  string  $key
     * @param  mixed   $default
     * @return array
     */
    public static function get_notice_option($notice_name, $key, $default = \null)
    {
    }
    /**
     * Set a setting for a notice type.
     *
     * @since  6.3.0
     *
     * @param  string  $notice_name
     * @param  string  $key
     * @param  mixed   $value
     * @return void
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
    /**
     * Used to determine if a feature plugin is installed.
     *
     * @param  string  $name
     * @return boolean|null
     */
    public static function is_feature_plugin_installed($name)
    {
    }
}
/**
 * Order-again functions and filters.
 *
 * @class    WC_PB_Order_Again
 * @version  6.12.2
 */
class WC_PB_Order_Again
{
    /**
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
     * @param  array                $cart_item
     * @param  WC_Order_Item|array  $order_item
     * @param  WC_Order             $order
     * @return array
     */
    public static function order_again_cart_item_data($cart_item, $order_item, $order)
    {
    }
    /**
     * Initialize parent-child associations from order-again keys.
     *
     * @param  array  $cart_item
     * @param  array  $cart_session_item
     * @param  array  $cart_item_key
     * @return array
     */
    public static function get_cart_item_from_session($cart_item, $cart_session_item, $cart_item_key)
    {
    }
    /**
     * Finalize parent-child associations from order-again keys.
     *
     * @param  WC_Cart  $cart
     * @return void
     */
    public static function cart_loaded_from_session($cart)
    {
    }
}
/**
 * Product Bundle order-related functions and filters.
 *
 * @class    WC_PB_Order
 * @version  6.21.0
 */
class WC_PB_Order
{
    /**
     * Flag to short-circuit 'WC_PB_Order::get_order_items'.
     *
     * @var boolean
     */
    public static $override_order_items_filter = \false;
    /**
     * Flag to short-circuit 'WC_PB_Order::get_product_from_item'.
     *
     * @var boolean
     */
    public static $override_product_from_item_filter = \false;
    /**
     * @var WC_PB_Order - the single instance of the class.
     *
     * @since 5.0.0
     */
    protected static $_instance = \null;
    /**
     * Main WC_PB_Order instance.
     *
     * Ensures only one instance of WC_PB_Order is loaded or can be loaded.
     *
     * @static
     * @return WC_PB_Order - Main instance
     * @since  5.0.0
     */
    public static function instance()
    {
    }
    /**
     * Cloning is forbidden.
     *
     * @since 5.0.0
     */
    public function __clone()
    {
    }
    /**
     * Unserializing instances of this class is forbidden.
     *
     * @since 5.0.0
     */
    public function __wakeup()
    {
    }
    /**
     * Setup order class.
     */
    protected function __construct()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | API functions.
    |--------------------------------------------------------------------------
    */
    /**
     * Reads the configuration array stored on a container order item and modifies it based on the actual state of the bundle.
     *
     * @since  5.8.0
     *
     * @param  WC_Order_Item  $order_item
     * @param  WC_Order       $order
     * @return array
     */
    public static function get_current_bundle_configuration($order_item, $order)
    {
    }
    /**
     * Validates a bundle configuration and adds all associated line items to an order. Relies on specifying a bundle configuration array with all necessary data.
     * The configuration array is passed as a 'configuration' key of the $args method argument. Example:
     *
     *    $args = array(
     *        'configuration' => array(
     *            134 => array(                             // ID of bundled item.
     *                'quantity'          => 2,             // Qty of bundled product, will fall back to min.
     *                'discount'          => 50.0,          // Bundled product discount, defaults to the defined value.
     *                'title'             => 'Test',        // Bundled product title, include only if overriding.
     *                'optional_selected' => 'yes',         // If the bundled item is optional, indicate if chosen or not.
     *                'attributes'        => array(         // Array of selected variation attribute names, sanitized.
     *                    'attribute_color' => 'black',
     *                    'attribute_size'  => 'medium'
     *                 ),
     *                'variation_id'      => 43,            // ID of chosen variation, if applicable.
     *                'args'              => array()        // Custom bundled item args to pass into 'WC_Order::add_product()'.
     *            )
     *        )
     *    );
     *
     * Returns the container order item ID if successful, or false otherwise.
     *
     * Note: Container/child order item totals are calculated without taxes, based on their pricing setup.
     * - Container item totals can be overridden by passing a 'totals' array in $args, as with 'WC_Order::add_product()'.
     * - Bundled item totals can be overridden in the 'configuration' array, as shown in the example above.
     *
     *
     * @param  WC_Product_Bundle  $bundle
     * @param  WC_Order           $order
     * @param  integer            $quantity
     * @param  array              $args
     * @return integer|WP_Error
     */
    public function add_bundle_to_order($bundle, $order, $quantity = 1, $args = array())
    {
    }
    /**
     * Modifies bundle parent/child order items depending on their shipping setup. Reconstructs an accurate representation of a bundle for shipping purposes.
     * Used in combination with 'get_product_from_item', right below.
     *
     * Adds the totals of "packaged" items to the container totals and creates a container "Contents" meta field to provide a description of the included items.
     *
     * @param  array     $items
     * @param  WC_Order  $order
     * @return array
     */
    public function get_order_items($items, $order)
    {
    }
    /**
     * Modifies parent/child order products in order to reconstruct an accurate representation of a bundle for shipping purposes:
     *
     * - If it's a container, then its weight is modified to include the weight of "packaged" children.
     * - If a child is "packaged" inside its parent, then it is marked as virtual.
     *
     * Used in combination with 'get_order_items', right above.
     *
     * @param  WC_Product  $product
     * @param  array       $item
     * @param  WC_Order    $order
     * @return WC_Product
     */
    public function get_product_from_item($product, $item, $order = \false)
    {
    }
    /**
     * Returns a list of products/quantities physically assembled in a parent order item.
     *
     * @since  5.8.0
     *
     * @param  WC_Order_Item_Product  $item
     * @param  WC_Order               $order
     * @return array
     */
    public function get_assembled_items($item, $order)
    {
    }
    /**
     * Alternative shipping representation of a bundle that reconstructs an accurate value/volume/weight representation of a bundle for shipping purposes.
     * Use this when each item needs to appear as a separate line item. Legacy method of exporting to ShipStation.
     *
     * Virtual containers/children are assigned a zero weight and tiny dimensions in order to maintain the value of the associated item in shipments:
     *
     * - If a bundled item is not shipped individually (virtual), its value must be included to ensure an accurate calculation of shipping costs (value/insurance).
     * - If a bundle is not shipped as a physical item (virtual), it may have a non-zero value that also needs to be included to ensure an accurate calculation of shipping costs (value/insurance).
     *
     * In both cases, the workaround is to assign a tiny weight and miniscule dimensions to the non-shipped order items, in order to:
     *
     * - ensure that they are included in the exported data, by having 'needs_shipping' return 'true', but also
     * - minimize the impact of their inclusion on shipping costs.
     *
     * @param  WC_Product  $product
     * @param  array       $item
     * @param  WC_Order    $order
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
     * Filters the order item admin class.
     *
     * @param  string    $class
     * @param  array     $item
     * @param  WC_Order  $order
     * @return string
     */
    public function html_order_item_class($class, $item, $order)
    {
    }
    /**
     * Bundle Containers need no processing - let it be decided by bundled items only.
     *
     * @param  boolean     $is_needed
     * @param  WC_Product  $product
     * @param  int         $order_id
     * @return boolean
     */
    public function container_item_needs_processing($is_needed, $product, $order_id)
    {
    }
    /**
     * Hides bundle metadata.
     *
     * @param  array  $hidden
     * @return array
     */
    public function hidden_order_item_meta($hidden)
    {
    }
    /**
     * Add bundle info meta to order items.
     *
     * @param  WC_Order_Item  $order_item
     * @param  string         $cart_item_key
     * @param  array          $cart_item
     * @return void
     */
    public function add_order_item_meta($order_item, $cart_item_key, $cart_item)
    {
    }
    /**
     * Given a virtual bundle container cart item, find if any of its children need processing.
     *
     * @since  5.0.0
     *
     * @param  array  $item_values
     * @return mixed
     */
    private function bundled_items_need_processing($item_values)
    {
    }
    /**
     * Activates the 'woocommerce_order_item_product' filter below.
     *
     * @param  string  $order_id
     * @return void
     */
    public function apply_order_item_product_filter($order_id)
    {
    }
    /**
     * Deactivates the 'woocommerce_order_item_product' filter below.
     *
     * @param  string  $order_id
     * @return void
     */
    public function remove_order_item_product_filter($order_id)
    {
    }
    /**
     * Filters 'woocommerce_order_item_product' to add data used by 'woocommerce_order_item_needs_processing'.
     *
     * @param  WC_Product  $product
     * @param  array       $item
     * @return WC_Product
     */
    public function get_processing_order_item_product($product, $item)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Deprecated methods.
    |--------------------------------------------------------------------------
    */
    public function order_item_subtotal($subtotal, $item, $order)
    {
    }
    public function order_item_count($count, $type, $order)
    {
    }
    public static function get_bundle_parent($item, $order, $return_type = 'item')
    {
    }
    public static function get_bundle_children($item, $order, $return_type = 'item')
    {
    }
}
/**
 * Price functions and hooks.
 *
 * @class    WC_PB_Product_Prices
 * @version  6.17.4
 */
class WC_PB_Product_Prices
{
    /**
     * Flag indicating whether 'filter_get_price_cart' is applied on a variable product price.
     *
     * @var boolean
     */
    private static $filtering_variable_price_html = \false;
    /**
     * Flag indicating whether 'get_extended_price_precision' is being used to filter WC decimals.
     *
     * @var boolean
     */
    private static $filtering_price_decimals = \false;
    /**
     * Bundled items whose prices are currently being filtered -- all states.
     *
     * @var WC_Bundled_Item
     */
    private static $bundled_item_pre;
    /**
     * Bundled item whose prices are currently being filtered.
     *
     * @var WC_Bundled_Item
     */
    public static $bundled_item;
    /**
     * Initialize.
     */
    public static function init()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Class methods.
    |--------------------------------------------------------------------------
    */
    /**
     * A non-strict way to tell if a product's prices are being altered due to the presence of a parent "bundle".
     *
     * @since  6.0.0
     *
     * @param  WC_Product  $product
     * @param  string      $context
     * @return boolean
     */
    public static function is_bundled_pricing_context($product, $context = 'any')
    {
    }
    /**
     * A non-strict way to get the bundled_item, depending on if a product's prices are being altered due to the presence of a parent "bundle".
     *
     * @since  6.12.0
     *
     * @param  WC_Product  $product
     * @param  string      $context
     * @return WC_Bundled_Item|boolean
     */
    public static function get_filtered_bundled_item($product, $context = 'any')
    {
    }
    /**
     * Method to use for calculating cart item discounts. Values: 'filters' | 'props'
     *
     * @since  6.0.0
     *
     * @return string  $method
     */
    public static function get_bundled_cart_item_discount_method()
    {
    }
    /**
     * Returns the incl/excl tax coefficients for calculating prices incl/excl tax on the client side.
     *
     * @since  5.7.6
     *
     * @param  WC_Product  $product
     * @return array
     */
    public static function get_tax_ratios($product)
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
     * Calculates product prices.
     *
     * @since  5.5.0
     *
     * @param  WC_Product  $product
     * @param  array       $args
     * @return mixed
     */
    public static function get_product_price($product, $args)
    {
    }
    /**
     * Get extended rounding precision.
     *
     * @since  6.7.7
     *
     * @param  int  $decimals
     * @return int
     */
    public static function get_extended_price_precision($decimals = \null)
    {
    }
    /**
     * Discounted bundled item price precision. Defaults to the price display precision, a.k.a. wc_get_price_decimals.
     *
     * @since  5.7.8
     *
     * @return int
     */
    public static function get_discounted_price_precision()
    {
    }
    /**
     * Discounted price getter.
     *
     * @param  mixed  $price
     * @param  mixed  $discount
     * @return mixed
     */
    public static function get_discounted_price($price, $discount)
    {
    }
    /**
     * Returns the recurring price component of a subscription product.
     *
     * @param  WC_Product  $product
     * @return string
     */
    public static function get_recurring_price_html_component($product)
    {
    }
    /**
     * Add price filters to modify child product prices depending on the bundled item pricing setup.
     *
     * @param  WC_Bundled_Item  $bundled_item
     */
    public static function add_price_filters($bundled_item)
    {
    }
    /**
     * Remove price filters after modifying child product prices depending on the bundled item pricing setup.
     */
    public static function remove_price_filters()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Callbacks.
    |--------------------------------------------------------------------------
    */
    /**
     * Filter variation prices hash to load different prices for variable products with variation filters and/or discounts.
     *
     * @param  array                $hash
     * @param  WC_Product_Variable  $product
     * @return array
     */
    public static function filter_variation_prices_hash($hash, $product)
    {
    }
    /**
     * Filter variable product children to exclude filtered out variations.
     *
     * @param  array                $children
     * @param  WC_Product_Variable  $product
     * @return array
     */
    public static function filter_children($children, $product)
    {
    }
    /**
     * Filter get_variation_prices() calls for bundled products to include discounts.
     *
     * @param  array                $prices_array
     * @param  WC_Product_Variable  $product
     * @return array
     */
    public static function filter_get_variation_prices($prices_array, $product)
    {
    }
    /**
     * Filter condition that allows WC to calculate variation price_html.
     *
     * @param  boolean               $show
     * @param  WC_Product_Variable   $product
     * @param  WC_Product_Variation  $variation
     * @return boolean
     */
    public static function filter_show_variation_price($show, $product, $variation)
    {
    }
    /**
     * Filter get_price() calls for bundled products to include discounts.
     *
     * @param  double      $price
     * @param  WC_Product  $product
     * @param  string      $context
     * @return double
     */
    public static function filter_get_price($price, $product, $context = 'any')
    {
    }
    /**
     * Filter get_regular_price() calls for bundled products to include discounts.
     *
     * @param  double      $price
     * @param  WC_Product  $product
     * @param  string      $context
     * @return double
     */
    public static function filter_get_regular_price($regular_price, $product, $context = 'any')
    {
    }
    /**
     * Filter get_sale_price() calls for bundled products to include discounts.
     *
     * @param  double      $price
     * @param  WC_Product  $product
     * @param  string      $context
     * @return double
     */
    public static function filter_get_sale_price($sale_price, $product, $context = 'any')
    {
    }
    /**
     * Filter get_price() calls for bundled cart items to include discounts.
     *
     * @since  6.0.0
     *
     * @param  double      $price
     * @param  WC_Product  $product
     * @return double
     */
    public static function filter_get_price_cart($price, $product)
    {
    }
    /**
     * Filter get_sale_price() calls for bundled cart items to include discounts.
     *
     * @since  6.0.0
     *
     * @param  double      $price
     * @param  WC_Product  $product
     * @return double
     */
    public static function filter_get_sale_price_cart($price, $product)
    {
    }
    /**
     * Filter get_regular_price() calls for bundled cart items.
     *
     * @since  6.1.4
     *
     * @param  double      $price
     * @param  WC_Product  $product
     * @return double
     */
    public static function filter_get_regular_price_cart($price, $product)
    {
    }
    /**
     * Wrapper of 'filter_get_price_html' for variable products.
     *
     * @param  string      $price_html
     * @param  WC_Product  $product
     * @return string
     */
    public static function filter_variable_price_html($price_html, $product)
    {
    }
    /**
     * Filter the html price string of bundled items to show the correct price with discount and tax - needs to be hidden when the bundled item is priced individually.
     *
     * @param  string      $price_html
     * @param  WC_Product  $product
     * @return string
     */
    public static function filter_get_price_html($price_html, $product)
    {
    }
    /**
     * Filter WC_Product::is_on_sale() calls.
     *
     * @since  6.12.0
     *
     * @param  bool        $is_on_sale
     * @param  WC_Product  $product
     * @return bool
     */
    public static function filter_is_on_sale($is_on_sale, $product)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Deprecated methods.
    |--------------------------------------------------------------------------
    */
    /**
     * Calculates bundled product prices incl. or excl. tax depending on the 'woocommerce_tax_display_shop' setting.
     *
     * @deprecated  5.5.0
     */
    public static function get_product_display_price($product, $price, $qty = 1)
    {
    }
}
/**
 * Used to create and store a product_id / variation_id representation of a product collection based on the included items' inventory requirements.
 *
 * @class    WC_PB_Stock_Manager
 * @version  6.19.0
 */
class WC_PB_Stock_Manager
{
    /**
     * Stock managed items.
     * @var array
     */
    private $items;
    /**
     * Product managing the collection.
     * @var WC_Product|false
     */
    public $product;
    /**
     * Contructor.
     * @param boolean|WC_Product  $product
     */
    public function __construct($product = \false)
    {
    }
    /**
     * Add a product to the collection.
     *
     * @param  WC_Product|int                  $product
     * @param  false|WC_Product_Variation|int  $variation
     * @param  integer                         $quantity
     * @param  array                           $args
     */
    public function add_item($product, $variation = \false, $quantity = 1, $args = array())
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
     * @param  WC_PB_Stock_Manager  $stock
     */
    public function add_stock($stock)
    {
    }
    /**
     * Return the stock requirements of the items in this collection.
     * To validate stock accurately, this method is used to add quantities and build a list of product/variation ids to check.
     * Note that in some cases, stock for a variation might be managed by the parent - this is tracked by the managed_by_id property in WC_PB_Stock_Manager_Item.
     *
     * @return array
     */
    public function get_managed_items()
    {
    }
    /**
     * Product quantities already in cart.
     *
     * @since  5.8.0
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
     * @param  array  $args
     * @return boolean
     */
    public function validate_stock($args = array())
    {
    }
}
/**
 * Maps a product/variation in the collection to the item managing stock for it.
 * These 2 will differ only if stock for a variation is managed by its parent.
 *
 * @class    WC_PB_Stock_Manager_Item
 * @version  5.10.0
 * @since    4.8.7
 */
class WC_PB_Stock_Manager_Item
{
    public $product_id;
    public $variation_id;
    public $quantity;
    public $bundled_item;
    public $managed_by_id;
    public function __construct($product, $variation = \false, $quantity = 1, $args = array())
    {
    }
}
/**
 * Hooks for initiating and modifying no/low stock notification e-mails for Product Bundles.
 *
 * @class    WC_PB_Stock_Notifications
 * @version  6.15.4
 */
class WC_PB_Stock_Notifications
{
    /**
     * Save bundle stock quantity for use in downstream context.
     * @var int
     */
    private static $bundle_stock_quantity;
    /**
     * Setup.
     */
    public static function init()
    {
    }
    /**
     * Get bundle stock quantity remaining based on bundled items' stock alone.
     *
     * @param  WC_Product_Bundle  $product
     * @return mixed
     */
    public static function get_bundled_items_stock_quantity($product)
    {
    }
    /**
     * Send no/low stock notification e-mails when bundle stock quantity changes.
     * If the parent stock quantity is below the notification threshold, no notifications are sent: Instead, we are leaving it up to WooCommerce to handle those, and modify the message in 'before_bundle_stock_notification'.
     *
     * @param  int                $to_quantity
     * @param  int                $from_quantity
     * @param  WC_Product_Bundle  $product
     * @return void
     */
    public static function bundle_stock_quantity_changed($to_quantity, $from_quantity, $product)
    {
    }
    /**
     * Adds filters that implement notification content changes.
     * The content is only modified when the remaining stock is limited due to bundled item constraints.
     * This is determined by comparing the parent stock quantity against the remaining stock quantity.
     *
     * @param  WC_Product  $product
     * @return void
     */
    public static function before_bundle_stock_notification($product)
    {
    }
    /**
     * Removes filters that implement notification content changes.
     *
     * @param  WC_Product  $product
     * @return void
     */
    public static function after_bundle_stock_notification($product)
    {
    }
    /**
     * Modifies the no stock notification message.
     *
     * @param  string  $translation
     * @param  string  $text
     * @return string
     */
    public static function filter_no_stock_notification_message($translation, $text)
    {
    }
    /**
     * Modifies the low stock notification message.
     *
     * @param  string  $translation
     * @param  string  $text
     * @return string
     */
    public static function filter_low_stock_notification_message($translation, $text)
    {
    }
    /**
     * Modifies the stock quantity in low stock notifications.
     *
     * @param  string  $translation
     * @param  string  $text
     * @return string
     */
    public static function filter_bundle_stock_quantity($quantity, $product)
    {
    }
    /**
     * Enable/disable deferring of transactional emails.
     *
     * @param  boolean  $defer
     */
    public static function set_deferred_transactional_emails($defer = \true)
    {
    }
}
/**
 * Product Bundles Tracker.
 *
 * @class    WC_PB_Tracker
 * @version  6.18.5
 */
class WC_PB_Tracker
{
    /**
     * Property to store reusable query data.
     *
     * @var array
     */
    private static $reusable_data = array();
    /**
     * Property to store and share tracking data in the class.
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
     * Property to store the tracking events.
     *
     * @var array
     */
    private static $tracking_events = array();
    /**
     * Property to store the HPOS table name.
     *
     * @var string
     */
    private static $hpos_orders_table = '';
    /**
     * Property to store how often the data will be invalidated.
     *
     * @var string
     */
    private static $invalidation_interval = '-1 week';
    /**
     * Initialize the tracker.
     */
    public static function init()
    {
    }
    /**
     * Add PB data to the tracked data.
     *
     * @param  array  $data
     * @return array  all the tracking data.
     */
    public static function add_tracking_data($data)
    {
    }
    /**
     * Get all tracking data from options.
     *
     * @return array PB's tracking data.
     */
    private static function get_tracking_data()
    {
    }
    /**
     * Calculates all tracking-related data for the previous month and year.
     * Runs independently in a background task.
     *
     * @see ::maybe_calculate_tracking_data().
     */
    private static function calculate_tracking_data()
    {
    }
    /**
     * Maybe calculate orders data. Also, handles the caching strategy.
     *
     * @return bool Returns true if the data are re-calculated, false otherwise.
     */
    public static function maybe_calculate_tracking_data()
    {
    }
    /**
     * Track bundle sells first date when saving a product (wp-admin / rest api).
     *
     * @param  WC_Product  $product
     */
    public static function track_bundle_sell_ids($product)
    {
    }
    /**
     * Calculate product aggregation data.
     *
     * @return void
     */
    private static function calculate_product_data()
    {
    }
    /**
     * Calculate bundled item aggregation data.
     *
     * @return void
     */
    private static function calculate_bundled_item_data()
    {
    }
    /**
     * Calculate order data.
     *
     * @since 6.18.3
     * @return void
     */
    private static function calculate_order_data()
    {
    }
    /**
     * Calculates integration data.
     *
     * @return void
     */
    private static function calculate_integration_data()
    {
    }
    /**
     * Get any reusable data, without re-querying the DB.
     *
     * @param  array  $key  Reusable data key.
     * @return mixed
     */
    private static function get_reusable_data($key = '')
    {
    }
    /**
     * Check if all the main aggregations have pending data.
     *
     * @return bool Pending status.
     */
    private static function has_pending_calculations()
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
     * Initialize data if they are empty month/year has changed.
     *
     * @return void
     */
    private static function maybe_initialize_data()
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
 * Tracks support.
 *
 * @class    WC_PB_Tracks
 * @version  6.18.6
 */
class WC_PB_Tracks
{
    /**
     * Tracks event name prefix.
     */
    const PREFIX = 'pb_';
    /**
     * Hook in.
     */
    public static function init()
    {
    }
    /**
     * Records a 'bundle_created' event in Tracks every time a product bundle is created.
     * Records a 'bundle_sell_created' event in Tracks every time a bundle-sell is first created on a product.
     *
     * @param  WC_Product  $product
     * @return void
     */
    public static function record_bundle_created_event($product)
    {
    }
    /**
     * Record an event in Tracks - this is the preferred way to record events from PHP.
     *
     * @param string $event_name The name of the event.
     * @param array  $props Custom properties to send with the event.
     * @return bool|WP_Error True for success or WP_Error if the event pixel could not be fired.
     */
    public static function record_event($event_name, $props = array())
    {
    }
}
/**
 * Product Bundle Class.
 *
 * @class    WC_Product_Bundle
 * @version  6.21.0
 */
class WC_Product_Bundle extends \WC_Product
{
    /**
     * Group mode options data.
     * @see 'WC_Product_Bundle::get_group_mode_options'.
     * @var array
     */
    private static $group_mode_options_data = \null;
    /**
     * Layout options data.
     * @see 'WC_Product_Bundle::get_layout_options'.
     * @var array
     */
    private static $layout_options_data = \null;
    /**
     * Array of bundle-type extended product data fields used in CRUD and runtime operations.
     * @var array
     */
    private $extended_data = array('virtual_bundle' => \false, 'min_bundle_size' => '', 'max_bundle_size' => '', 'layout' => 'default', 'group_mode' => 'parent', 'bundle_stock_quantity' => '', 'bundled_items_stock_status' => '', 'bundled_items_stock_sync_status' => '', 'editable_in_cart' => \false, 'aggregate_weight' => \false, 'sold_individually_context' => 'product', 'add_to_cart_form_location' => 'default', 'min_raw_price' => '', 'min_raw_regular_price' => '', 'max_raw_price' => '', 'max_raw_regular_price' => '');
    /**
     * Array of bundled item data objects.
     * @var array
     */
    private $bundled_data_items = \null;
    /**
     * Bundled item data objects that need deleting are stored here.
     * @var array
     */
    private $bundled_data_items_delete_queue = array();
    /**
     * Indicates whether bundled data items have temporary IDs (saving needed).
     * @var array
     */
    private $bundled_data_items_save_pending = \false;
    /**
     * Array of form data for consumption by the front-end script.
     * @var array
     */
    private $bundle_form_data = array();
    /**
     * Runtime cache for bundle prices.
     * @var array
     */
    private $bundle_price_cache = array();
    /**
     * Bundle object instance context.
     */
    private $object_context = '';
    /**
     * Storage of 'contains' keys, most set during sync.
     * @var array
     */
    private $contains = array();
    /**
     * True if the bundle is in sync with bundled items.
     * @var boolean
     */
    private $is_synced = \false;
    /**
     * True if the bundle is currently syncing.
     * @var boolean
     */
    private $is_syncing = \false;
    /**
     * The type of data store to use.
     * @var string
     */
    private $data_store_type = 'bundle';
    /**
     * Constructor.
     *
     * @param  mixed  $product
     */
    public function __construct($product = 0)
    {
    }
    /**
     * Get internal type.
     *
     * @since  5.1.0
     *
     * @return string
     */
    public function get_type()
    {
    }
    /**
     * Get data store type.
     *
     * @since  5.6.0
     *
     * @return string
     */
    public function get_data_store_type()
    {
    }
    /**
     * Load property and runtime cache defaults to trigger a re-sync.
     *
     * @since 5.2.0
     */
    public function load_defaults($reset_objects = \false)
    {
    }
    /**
     * Define type-specific data.
     *
     * @since  5.2.0
     */
    private function load_extended_data()
    {
    }
    /**
     * Sync bundle props with bundled item objects.
     *
     * @since  5.5.0
     *
     * @param  bool  $force
     * @return bool
     */
    public function sync($force = \false)
    {
    }
    /**
     * Sync product bundle raw price meta.
     *
     * @since  5.5.0
     *
     * @return boolean
     */
    private function sync_raw_prices()
    {
    }
    /**
     * Syncs stock data. Reads data from bundled data items, avoiding overhead of 'WC_Bundled_Item'.
     *
     * @since  6.5.0
     *
     * @return bool
     */
    public function sync_stock()
    {
    }
    /**
     * Returns form data passed to JS.
     *
     * @since  6.4.0
     *
     * @return array
     */
    public function get_bundle_form_data()
    {
    }
    /**
     * Min/max bundle price.
     *
     * @param  string   $min_or_max
     * @param  boolean  $display
     * @return mixed
     */
    public function get_bundle_price($min_or_max = 'min', $display = \false)
    {
    }
    /**
     * Min/max bundle regular price.
     *
     * @param  string   $min_or_max
     * @param  boolean  $display
     * @return mixed
     */
    public function get_bundle_regular_price($min_or_max = 'min', $display = \false)
    {
    }
    /**
     * Min/max bundle price including tax.
     *
     * @param  string   $min_or_max
     * @param  integer  $qty
     * @return mixed
     */
    public function get_bundle_price_including_tax($min_or_max = 'min', $qty = 1)
    {
    }
    /**
     * Min/max bundle price excluding tax.
     *
     * @param  string   $min_or_max
     * @param  integer  $qty
     * @return mixed
     */
    public function get_bundle_price_excluding_tax($min_or_max = 'min', $qty = 1)
    {
    }
    /**
     * Min/max regular bundle price including tax.
     *
     * @since  5.5.0
     *
     * @param  string   $min_or_max
     * @param  integer  $qty
     * @return mixed
     */
    public function get_bundle_regular_price_including_tax($min_or_max = 'min', $qty = 1)
    {
    }
    /**
     * Min/max regular bundle price excluding tax.
     *
     * @since  5.5.0
     *
     * @param  string   $min_or_max
     * @param  integer  $qty
     * @return mixed
     */
    public function get_bundle_regular_price_excluding_tax($min_or_max = 'min', $qty = 1)
    {
    }
    /**
     * Calculates bundle prices.
     *
     * @since  5.5.0
     *
     * @param  array  $args
     * @return mixed
     */
    public function calculate_price($args)
    {
    }
    /**
     * Prices incl. or excl. tax are calculated based on the bundled products prices, so get_price_suffix() must be overridden when individually-priced items exist.
     *
     * @return string
     */
    public function get_price_suffix($price = '', $qty = 1)
    {
    }
    /**
     * Calculate subscriptions price html component by breaking up bundled subs into recurring scheme groups and adding up all prices in each group.
     *
     * @return string
     */
    public function apply_subs_price_html($price)
    {
    }
    /**
     * Calculate subscriptions price data for each bundled item.
     *
     * Refer to `WC_Product_Bundle::apply_subs_price_html` for the structure of the $args array.
     *
     * @param  array $args
     * @return array $subs_details
     */
    public function calculate_subs_price_data($args)
    {
    }
    /**
     * Returns range style html price string without min and max.
     *
     * @param  mixed  $price
     * @return string
     */
    public function get_price_html($price = '')
    {
    }
    /**
     * Availability of bundle based on bundle-level stock and bundled-items-level stock.
     *
     * @return array
     */
    public function get_availability()
    {
    }
    /**
     * Get the add to url used mainly in loops.
     *
     * @return 	string
     */
    public function add_to_cart_url()
    {
    }
    /**
     * Get the add to cart button text.
     *
     * @return 	string
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
     * Wrapper for get_permalink that adds bundle configuration data to the URL.
     *
     * @return string
     */
    public function get_permalink()
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
     * Forces all bundled products to be treated as virtual, along with the bundle itself.
     *
     * @since 6.11.0
     *
     * @param  string  $context
     * @return boolean
     */
    public function get_virtual_bundle($context = 'view')
    {
    }
    /**
     * Min bundle size.
     *
     * @since  6.6.0
     *
     * @param  string  $context
     * @return int|''
     */
    public function get_min_bundle_size($context = 'view')
    {
    }
    /**
     * Max bundle size.
     *
     * @since  6.6.0
     *
     * @param  string  $context
     * @return int|''
     */
    public function get_max_bundle_size($context = 'view')
    {
    }
    /**
     * Cart/order items grouping mode.
     *
     * @since  5.5.0
     *
     * @param  string  $context
     * @return string
     */
    public function get_group_mode($context = 'view')
    {
    }
    /**
     * Return the stock sync status.
     *
     * @since  6.5.0
     *
     * @param  string  $context
     * @return string
     */
    public function get_bundled_items_stock_sync_status($context = 'edit')
    {
    }
    /**
     * Bundle stock status, taking bundled item stock limitations into account.
     *
     * @since  6.9.0
     *
     * @param  string  $context
     * @return int|''
     */
    public function get_bundle_stock_status($context = 'view')
    {
    }
    /**
     * Bundle quantity available for purchase, taking bundled item stock limitations into account.
     *
     * @since  6.5.0
     *
     * @param  string  $context
     * @return int|''
     */
    public function get_bundle_stock_quantity($context = 'view')
    {
    }
    /**
     * Return the stock status.
     *
     * @since  5.5.0
     *
     * @param  string  $context
     * @return string
     */
    public function get_bundled_items_stock_status($context = 'view')
    {
    }
    /**
     * Returns the base active price of the bundle.
     *
     * @since  5.2.0
     *
     * @param  string $context
     * @return mixed
     */
    public function get_price($context = 'view')
    {
    }
    /**
     * Returns the base regular price of the bundle.
     *
     * @since  5.2.0
     *
     * @param  string $context
     * @return mixed
     */
    public function get_regular_price($context = 'view')
    {
    }
    /**
     * Returns the base sale price of the bundle.
     *
     * @since  5.2.0
     *
     * @param  string  $context
     * @return mixed
     */
    public function get_sale_price($context = 'view')
    {
    }
    /**
     * "Form Location" getter.
     *
     * @since  5.7.0
     *
     * @param  string  $context
     * @return string
     */
    public function get_add_to_cart_form_location($context = 'view')
    {
    }
    /**
     * "Layout" getter.
     *
     * @since  5.0.0
     *
     * @param  string  $context
     * @return string
     */
    public function get_layout($context = 'any')
    {
    }
    /**
     * "Edit in cart" getter.
     *
     * @since  5.2.0
     *
     * @param  string  $context
     * @return boolean
     */
    public function get_editable_in_cart($context = 'any')
    {
    }
    /**
     * "Aggregate weight" getter.
     *
     * @since  6.0.0
     *
     * @param  string  $context
     * @return boolean
     */
    public function get_aggregate_weight($context = 'any')
    {
    }
    /**
     * "Sold Individually" option context.
     * Returns 'product' or 'configuration'.
     *
     * @since  5.0.0
     *
     * @param  string  $context
     * @return string
     */
    public function get_sold_individually_context($context = 'any')
    {
    }
    /**
     * Minimum raw bundle price getter.
     *
     * @since  5.2.0
     *
     * @param  string  $context
     * @return string
     */
    public function get_min_raw_price($context = 'view')
    {
    }
    /**
     * Minimum raw regular bundle price getter.
     *
     * @since  5.2.0
     *
     * @param  string  $context
     * @return string
     */
    public function get_min_raw_regular_price($context = 'view')
    {
    }
    /**
     * Maximum raw bundle price getter.
     *
     * INF is 9999999999.0 in 'edit' (DB) context.
     * INF is internally stored as 'INF'.
     *
     * @since  5.2.0
     *
     * @param  string  $context
     * @return string
     */
    public function get_max_raw_price($context = 'view')
    {
    }
    /**
     * Maximum raw regular bundle price getter.
     *
     * INF is 9999999999.0 in 'edit' (DB) context.
     * INF is internally stored as 'INF'.
     *
     * @since  5.2.0
     *
     * @param  string  $context
     * @return string
     */
    public function get_max_raw_regular_price($context = 'view')
    {
    }
    /**
     * Returns bundled item data objects.
     *
     * @since  5.1.0
     *
     * @param  string  $context
     * @return array
     */
    public function get_bundled_data_items($context = 'view')
    {
    }
    /**
     * Returns bundled item ids.
     *
     * @since  5.0.0
     *
     * @param  string  $context
     * @return array
     */
    public function get_bundled_item_ids($context = 'view')
    {
    }
    /**
     * Gets all bundled items.
     *
     * @param  string  $context
     * @return array
     */
    public function get_bundled_items($context = 'view')
    {
    }
    /**
     * Checks if a specific bundled item exists.
     *
     * @param  int     $bundled_item_id
     * @param  string  $context
     * @return boolean
     */
    public function has_bundled_item($bundled_item_id, $context = 'view')
    {
    }
    /**
     * Gets a specific bundled item.
     *
     * @param  WC_Bundled_Item_Data|int  $bundled_data_item
     * @param  string                    $context
     * @return WC_Bundled_Item
     */
    public function get_bundled_item($bundled_data_item, $context = 'view', $hash = array())
    {
    }
    /*
    |--------------------------------------------------------------------------
    | CRUD Setters
    |--------------------------------------------------------------------------
    |
    | Functions for setting product data. These do not update anything in the
    | database itself and only change what is stored in the class object.
    */
    /**
     * Set 'virtual_bundle' prop. Forced all bundled products to be treated as virtual.
     *
     * @since 6.11.0
     *
     * @param  string|boolean  $virtual
     */
    public function set_virtual_bundle($virtual)
    {
    }
    /**
     * Set min bundle size.
     *
     * @since  6.6.0
     *
     * @param  int|''  $quantity
     */
    public function set_min_bundle_size($min_bundle_size)
    {
    }
    /**
     * Set max bundle size.
     *
     * @since  6.6.0
     *
     * @param int|''  $quantity
     */
    public function set_max_bundle_size($max_bundle_size)
    {
    }
    /**
     * Set cart/order items group mode.
     *
     * @param string  $mode
     */
    public function set_group_mode($mode = '')
    {
    }
    /**
     * Set stock sync status.
     *
     * @param string  $status
     */
    public function set_bundled_items_stock_sync_status($status = '')
    {
    }
    /**
     * Set bundle stock quantity.
     * Quantity available for purchase, taking bundled item stock limitations into account.
     *
     * @param int|''  $quantity
     */
    public function set_bundle_stock_quantity($quantity)
    {
    }
    /**
     * Set stock status.
     *
     * @param string  $status
     */
    public function set_bundled_items_stock_status($status = '')
    {
    }
    /**
     * "Form Location" setter.
     *
     * @since  5.7.0
     *
     * @param  string  $value
     */
    public function set_add_to_cart_form_location($value)
    {
    }
    /**
     * "Layout" setter.
     *
     * @since  5.2.0
     *
     * @param  string  $layout
     */
    public function set_layout($layout)
    {
    }
    /**
     * "Edit in cart" setter.
     *
     * @since  5.2.0
     *
     * @param  string  $editable_in_cart
     */
    public function set_editable_in_cart($editable_in_cart)
    {
    }
    /**
     * "Aggregate weight" setter.
     *
     * @since  6.0.0
     *
     * @param  string  $aggregate_weight
     */
    public function set_aggregate_weight($aggregate_weight)
    {
    }
    /**
     * "Sold individually" context setter.
     *
     * @since  5.2.0
     *
     * @param  string  $context
     */
    public function set_sold_individually_context($context)
    {
    }
    /**
     * Minimum raw bundle price setter.
     *
     * @since  5.2.0
     *
     * @param  mixed  $value
     */
    public function set_min_raw_price($value)
    {
    }
    /**
     * Minimum raw regular bundle price setter.
     *
     * @since  5.2.0
     *
     * @param  mixed  $value
     */
    public function set_min_raw_regular_price($value)
    {
    }
    /**
     * Maximum raw bundle price setter.
     *
     * Converts 9999999999.0 to INF.
     * Internally stores infinite values as 'INF' to prevent issues with 'json_encode'.
     *
     * @since  5.2.0
     *
     * @param  mixed  $value
     */
    public function set_max_raw_price($value)
    {
    }
    /**
     * Maximum raw regular bundle price setter.
     *
     * Converts 9999999999.0 to INF.
     * Internally stores infinite values as 'INF' to prevent issues with 'json_encode'.
     *
     * @since  5.2.0
     *
     * @param  mixed  $value
     */
    public function set_max_raw_regular_price($value)
    {
    }
    /**
     * Sets bundled item data objects.
     * Expects each data element in array format - @see 'WC_Bundled_Item_Data::get_data()'.
     * Until 'save_items' is called, all items get a temporary index-based ID (unit-testing only!).
     *
     * @since  5.2.0
     *
     * @param  array  $data
     */
    public function set_bundled_data_items($data)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Conditionals
    |--------------------------------------------------------------------------
    */
    /**
     * Just a different way to check the 'virtual_bundle' prop value.
     *
     * @since  6.11.0
     *
     * @return boolean
     */
    public function is_virtual_bundle()
    {
    }
    /**
     * Equivalent of 'get_changes', but boolean and for bundled data items only.
     *
     * @since  6.3.2
     *
     * @return boolean
     */
    public function has_bundled_data_item_changes()
    {
    }
    /**
     * Getter of bundle 'contains' properties.
     *
     * @since  5.0.0
     *
     * @param  string  $key
     * @return mixed
     */
    public function contains($key)
    {
    }
    /**
     * Indicates if the bundle props are in sync with bundled items.
     *
     * @return boolean
     */
    public function is_synced()
    {
    }
    /**
     * Whether this instance is currently syncing.
     *
     * @since  6.2.5
     *
     * @return boolean
     */
    public function is_syncing()
    {
    }
    /**
     * A bundle is purchasable if it contains (purchasable) bundled items.
     *
     * @return boolean
     */
    public function is_purchasable()
    {
    }
    /**
     * Override on_sale status of product bundles. If a bundled item is on sale or has a discount applied, then the bundle appears as on sale.
     *
     * @param  string  $context
     * @return boolean
     */
    public function is_on_sale($context = 'view')
    {
    }
    /**
     * Sets Bundle object instance context.
     *
     * @since 5.13.0
     *
     * @param string $context
     */
    public function set_object_context($context)
    {
    }
    /**
     * Retrieves Bundle object instance context.
     *
     * @since 5.13.0
     *
     * @return string
     */
    public function get_object_context()
    {
    }
    /**
     * True if the product container is in stock.
     *
     * @return boolean
     */
    public function is_parent_in_stock()
    {
    }
    /**
     * True if the product is in stock and all bundled items are in stock.
     *
     * @return boolean
     */
    public function is_in_stock()
    {
    }
    /**
     * Returns whether or not the product is visible in the catalog.
     *
     * @return boolean
     */
    public function is_visible()
    {
    }
    /**
     * A bundle appears "on backorder" if the container is on backorder, or if a bundled item is on backorder (and requires notification).
     *
     * @return boolean
     */
    public function is_on_backorder($qty_in_cart = 0)
    {
    }
    /**
     * Bundle is a NYP product.
     *
     * @return boolean
     */
    public function is_nyp()
    {
    }
    /**
     * Indicates whether the product configuration can be edited in the cart.
     * Optionally pass a cart item array to check.
     *
     * @param  array   $cart_item
     * @return boolean
     */
    public function is_editable_in_cart($cart_item = \false)
    {
    }
    /**
     * A bundle on backorder requires notification if the container is defined like this, or a bundled item is on backorder and requires notification.
     *
     * @return boolean
     */
    public function backorders_require_notification()
    {
    }
    /**
     * Returns whether or not the bundle has any attributes set.
     *
     * @return boolean
     */
    public function has_attributes()
    {
    }
    /**
     * A bundle requires user input if: ( is nyp ) or ( has required addons ) or ( has items with variables ).
     *
     * @return boolean
     */
    public function requires_input()
    {
    }
    /**
     * Returns whether or not the product has additional options that must be selected before adding to cart.
     *
     * @since  5.12.0
     *
     * @return boolean
     */
    public function has_options()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Other CRUD Methods
    |--------------------------------------------------------------------------
    */
    /**
     * Validate props before saving.
     *
     * @since 5.5.0
     */
    public function validate_props()
    {
    }
    /**
     * Validate Group Mode before saving.
     *
     * @since 5.5.0
     */
    public function validate_group_mode($group_mode = \null)
    {
    }
    /**
     * Alias for 'set_props'.
     *
     * @since 5.2.0
     */
    public function set($properties)
    {
    }
    /**
     * Override 'save' to handle bundled items saving.
     *
     * @since 5.2.0
     */
    public function save()
    {
    }
    /**
     * Saves bundled data items.
     *
     * @since 5.2.0
     */
    public function save_items()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Callbacks.
    |--------------------------------------------------------------------------
    */
    public function filter_stock_quantity($qty)
    {
    }
    public function filter_stock_format($qty)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Static methods.
    |--------------------------------------------------------------------------
    */
    /**
     * Supported "Form Location" options.
     *
     * @since  5.7.0
     *
     * @return array
     */
    public static function get_add_to_cart_form_location_options()
    {
    }
    /**
     * Supported layouts.
     *
     * @return array
     */
    public static function get_layout_options()
    {
    }
    /**
     * Supported group modes.
     *
     * @param  boolean  $visible
     * @return array
     */
    public static function get_group_mode_options($visible = \false)
    {
    }
    /**
     * Filters-out invisible group modes.
     *
     * @param  array  $group_mode_data
     * @return boolean
     */
    private static function filter_invisible_group_modes($group_mode_data)
    {
    }
    /**
     * Indicates whether a specific feature is supported by a group mode.
     *
     * @param  string     $group_mode
     * @param  string     $feature
     * @param  int|false  $bundled_item_id
     * @return bool
     */
    public static function group_mode_has($group_mode, $feature)
    {
    }
    /**
     * Group mode data. Details:
     *
     * - 'parent_item':                  Container/parent line item visible in cart/order templates.
     * - 'child_item_indent':            Bundled/child line items indented in cart/order templates.
     * - 'aggregated_prices':            Bundled/child cart item prices are aggregated into their container/parent.
     * - 'aggregated_subtotals':         Bundled/child cart/order item subtotals are aggregated into their container/parent.
     * - 'child_item_meta':              "Part of" meta appended to bundled/child cart/order line items.
     * - 'parent_cart_widget_item_meta': "Includes" meta appended to container/parent cart widget line items.
     * - 'parent_cart_item_meta':        "Includes" meta appended to container/parent cart line items.
     * - 'component_multiselect':        Replaces the parent title with configuration details in all applicable templates.
     * - 'faked_parent_item':            First bundled/child line item acting as container/parent.
     *
     * Using the first child as a "fake" container:
     *
     * 'child'    => array(
     *		'title'    => __( 'First child', 'woocommerce-product-bundles' ),
     *		'features' => array( 'faked_parent_item', 'child_item_indent' )
     *	)
     *
     * @return array
     */
    private static function get_group_mode_options_data()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Deprecated methods.
    |--------------------------------------------------------------------------
    */
    public function sync_bundled_items_stock_status()
    {
    }
    public function get_bundle_price_data()
    {
    }
    public static function get_supported_layout_options()
    {
    }
    public function maybe_sync_bundle()
    {
    }
    public function sync_bundle()
    {
    }
    public function get_bundled_item_quantities($context = 'reference', $min_or_max = '')
    {
    }
    public function get_bundle_variation_attributes()
    {
    }
    public function get_selected_bundle_variation_attributes()
    {
    }
    public function get_available_bundle_variations()
    {
    }
    public function get_base_price()
    {
    }
    public function get_base_regular_price()
    {
    }
    public function get_base_sale_price()
    {
    }
    public function is_priced_per_product()
    {
    }
    public function is_shipped_per_product()
    {
    }
    public function all_items_in_stock()
    {
    }
    public function contains_sub()
    {
    }
    public function contains_nyp()
    {
    }
    public function contains_optional($exclusively = \false)
    {
    }
}
/**
 * Allows DB updates via WP-CLI.
 *
 * @class    WC_PB_CLI
 * @version  5.5.0
 */
class WC_PB_CLI_Update
{
    /**
     * Registers the update command.
     */
    public static function register_command()
    {
    }
    /**
     * Runs all pending WooCommerce database updates.
     */
    public static function update()
    {
    }
}
/**
 * Handles compatibility with other WC extensions.
 *
 * @class    WC_PB_Compatibility
 * @version  6.21.0
 */
class WC_PB_Compatibility
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
     * Publicly accessible props for use by compat classes. Still not moved for back-compat.
     *
     * @var array
     */
    public static $addons_prefix = '';
    public static $bundle_prefix = '';
    public static $compat_product = '';
    public static $compat_bundled_product = '';
    public static $stock_data;
    /**
     * The single instance of the class.
     *
     * @var WC_PB_Compatibility
     *
     * @since 5.0.0
     */
    protected static $_instance = \null;
    /**
     * Main WC_PB_Compatibility instance. Ensures only one instance of WC_PB_Compatibility is loaded or can be loaded.
     *
     * @static
     * @return WC_PB_Compatibility
     * @since  5.0.0
     */
    public static function instance()
    {
    }
    /**
     * Cloning is forbidden.
     *
     * @since 5.0.0
     */
    public function __clone()
    {
    }
    /**
     * Unserializing instances of this class is forbidden.
     *
     * @since 5.0.0
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
     * Declare HPOS( Custom Order tables) compatibility.
     *
     * @since 6.17.3
     */
    public function declare_hpos_compatibility()
    {
    }
    /**
     * Prevent deprecated mini-extensions and modules from initializing.
     *
     * @since  5.0.0
     *
     * @return void
     */
    protected function unload_modules()
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
     * @return void
     */
    public function module_includes()
    {
    }
    /**
     * Unlock CP integration module, if it exists.
     *
     * @since  6.14.0
     * @return bool
     */
    public function unload_cp_module($modules)
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
     * Checks versions of compatible/integrated/deprecated extensions.
     *
     * @return void
     */
    public function add_compatibility_notices()
    {
    }
    /**
     * Rendering a PIP document?
     *
     * @since  5.5.0
     *
     * @param  string  $type
     * @return boolean
     */
    public function is_pip($type = '')
    {
    }
    /**
     * Tells if a product is a Name Your Price product, provided that the extension is installed.
     *
     * @param  mixed  $product_id
     * @return boolean
     */
    public function is_nyp($product_id)
    {
    }
    /**
     * Tells if a product is a subscription, provided that Subs is installed.
     *
     * @param  mixed  $product
     * @return boolean
     */
    public function is_subscription($product)
    {
    }
    /**
     * Tells if an order item is a subscription, provided that Subs is installed.
     *
     * @param  mixed     $order
     * @param  WC_Prder  $order
     * @return boolean
     */
    public function is_item_subscription($order, $item)
    {
    }
    /**
     * Checks if a product has any required addons.
     *
     * @since  5.9.2
     *
     * @param  mixed    $product
     * @param  boolean  $required
     * @return boolean
     */
    public function has_addons($product, $required = \false)
    {
    }
    /**
     * Alias to 'wc_cp_is_composited_cart_item'.
     *
     * @since  5.0.0
     *
     * @param  array  $item
     * @return boolean
     */
    public function is_composited_cart_item($item)
    {
    }
    /**
     * Alias to 'wc_cp_is_composited_order_item'.
     *
     * @since  5.0.0
     *
     * @param  array     $item
     * @param  WC_Order  $order
     * @return boolean
     */
    public function is_composited_order_item($item, $order)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Deprecated methods.
    |--------------------------------------------------------------------------
    */
    /**
     * Checks if a product has required addons.
     *
     * @param  mixed  $product
     * @return boolean
     */
    public function has_required_addons($product)
    {
    }
}
/**
 * Functions for WC core back-compatibility.
 *
 * @class    WC_PB_Core_Compatibility
 * @version  6.19.0
 */
class WC_PB_Core_Compatibility
{
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
     * @since  5.13.3
     * @var    array
     */
    private static $is_wp_version_gt = array();
    /**
     * Cache 'gte' comparison results for WP version.
     *
     * @since  5.13.3
     * @var    array
     */
    private static $is_wp_version_gte = array();
    /**
     * Cache 'is_wc_admin_active' result.
     *
     * @since 6.3.1
     * @var   bool
     */
    private static $is_wc_admin_active;
    /**
     * Current REST request.
     *
     * @var WP_REST_Request
     */
    private static $request;
    /**
     * Cache HPOS status.
     *
     * @since  6.18.3
     *
     * @var bool
     */
    private static $is_hpos_enabled = \null;
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
     * Helper method to get the version of the currently installed WooCommerce.
     *
     * @since  4.7.6
     *
     * @return string
     */
    private static function get_wc_version()
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is 3.1 or greater.
     *
     * @since  5.4.0
     *
     * @return boolean
     */
    public static function is_wc_version_gte_3_1()
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is 2.7 or greater.
     *
     * @since  5.0.0
     *
     * @return boolean
     */
    public static function is_wc_version_gte_2_7()
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is 2.6 or greater.
     *
     * @since  5.0.0
     *
     * @return boolean
     */
    public static function is_wc_version_gte_2_6()
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is 2.5 or greater.
     *
     * @since  4.10.2
     *
     * @return boolean
     */
    public static function is_wc_version_gte_2_5()
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is 2.4 or greater.
     *
     * @since  4.10.2
     *
     * @return boolean
     */
    public static function is_wc_version_gte_2_4()
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is 2.3 or greater.
     *
     * @since  4.7.6
     *
     * @return boolean
     */
    public static function is_wc_version_gte_2_3()
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is 2.2 or greater.
     *
     * @since  4.7.6
     *
     * @return boolean
     */
    public static function is_wc_version_gte_2_2()
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is greater than or equal to $version.
     *
     * @since  5.2.0
     *
     * @param  string  $version the version to compare
     * @return boolean true if the installed version of WooCommerce is > $version
     */
    public static function is_wc_version_gte($version)
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is greater than $version.
     *
     * @since  4.7.6
     *
     * @param  string  $version the version to compare
     * @return boolean true if the installed version of WooCommerce is > $version
     */
    public static function is_wc_version_gt($version)
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is greater than or equal to $version.
     *
     * @since  5.13.3
     *
     * @param  string  $version
     * @return boolean
     */
    public static function is_wp_version_gt($version)
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is greater than or equal to $version.
     *
     * @since  5.13.3
     *
     * @param  string  $version
     * @return boolean
     */
    public static function is_wp_version_gte($version)
    {
    }
    /**
     * Whether this is a Store/REST API request.
     *
     * @since  6.15.0
     *
     * @return boolean
     */
    public static function is_api_request()
    {
    }
    /**
     * Returns the current Store/REST API request or false.
     *
     * @since  6.15.0
     *
     * @return WP_REST_Request|false
     */
    public static function get_api_request()
    {
    }
    /**
     * Whether this is a Store API request.
     *
     * @since  6.15.0
     *
     * @param  string  $route
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
     * Get the WC Product instance for a given product ID or post.
     *
     * get_product() is soft-deprecated in WC 2.2
     *
     * @since 4.7.6
     *
     * @param  bool|int|string|WP_Post  $the_product
     * @param  array                    $args
     * @return WC_Product
     */
    public static function wc_get_product($the_product = \false, $args = array())
    {
    }
    /**
     * Get all product cats for a product by ID, including hierarchy.
     *
     * @since  4.13.1
     *
     * @param  int  $product_id
     * @return array
     */
    public static function wc_get_product_cat_ids($product_id)
    {
    }
    /**
     * Wrapper for wp_get_post_terms which supports ordering by parent.
     *
     * @since  4.13.1
     *
     * @param  int     $product_id
     * @param  string  $taxonomy
     * @param  array   $args
     * @return array
     */
    public static function wc_get_product_terms($product_id, $attribute_name, $args)
    {
    }
    /**
     * Get rounding precision.
     *
     * @since  4.14.6
     *
     * @return int
     */
    public static function wc_get_rounding_precision($price_decimals = \false)
    {
    }
    /**
     * Return the number of decimals after the decimal point.
     *
     * @since  4.13.1
     *
     * @return int
     */
    public static function wc_get_price_decimals()
    {
    }
    /**
     * Output a list of variation attributes for use in the cart forms.
     *
     * @since 4.13.1
     *
     * @param array  $args
     */
    public static function wc_dropdown_variation_attribute_options($args = array())
    {
    }
    /**
     * Display a WooCommerce help tip.
     *
     * @since  4.14.0
     *
     * @param  string  $tip
     * @return string
     */
    public static function wc_help_tip($tip)
    {
    }
    /**
     * Back-compat wrapper for 'wc_variation_attribute_name'.
     *
     * @since  5.0.2
     *
     * @param  string  $attribute_name
     * @return string
     */
    public static function wc_variation_attribute_name($attribute_name)
    {
    }
    /**
     * Back-compat wrapper for 'WC_Product_Factory::get_product_type'.
     *
     * @since  5.2.0
     *
     * @param  mixed  $product_id
     * @return mixed
     */
    public static function get_product_type($product_id)
    {
    }
    /**
     * Back-compat wrapper for 'get_parent_id'.
     *
     * @since  5.1.0
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
     * @since  5.1.0
     *
     * @param  WC_Product  $product
     * @return mixed
     */
    public static function get_id($product)
    {
    }
    /**
     * Back-compat wrapper for getting CRUD object props directly.
     *
     * @since  5.1.0
     *
     * @param  WC_Data  $obj
     * @param  string   $name
     * @param  string   $context
     * @return mixed
     */
    public static function get_prop($obj, $name, $context = 'edit')
    {
    }
    /**
     * Back-compat wrapper for setting CRUD object props directly.
     *
     * @since  5.1.0
     *
     * @param  WC_Data  $obj
     * @param  string   $name
     * @param  mixed    $value
     * @return void
     */
    public static function set_prop($obj, $name, $value)
    {
    }
    /**
     * Back-compat wrapper for checking if a CRUD object props exists.
     *
     * @since  5.3.0
     *
     * @param  object  $obj
     * @param  string  $name
     * @return mixed
     */
    public static function prop_exists($obj, $name)
    {
    }
    /**
     * Back-compat wrapper for getting CRUD object meta.
     *
     * @since  5.2.0
     *
     * @param  WC_Data  $obj
     * @param  string   $key
     * @return mixed
     */
    public static function get_meta($obj, $key)
    {
    }
    /**
     * Back-compat wrapper for 'wc_get_price_including_tax'.
     *
     * @since  5.2.0
     *
     * @param  WC_Product  $product
     * @param  array       $args
     * @return mixed
     */
    public static function wc_get_price_including_tax($product, $args)
    {
    }
    /**
     * Back-compat wrapper for 'wc_get_price_excluding_tax'.
     *
     * @since  5.2.0
     *
     * @param  WC_Product  $product
     * @param  array       $args
     * @return mixed
     */
    public static function wc_get_price_excluding_tax($product, $args)
    {
    }
    /**
     * Back-compat wrapper for 'get_default_attributes'.
     *
     * @since  5.2.0
     *
     * @param  WC_Product  $product
     * @return mixed
     */
    public static function get_default_attributes($product, $context = 'view')
    {
    }
    /**
     * Back-compat wrapper for 'wc_get_stock_html'.
     *
     * @since  5.2.0
     *
     * @param  WC_Product  $product
     * @return mixed
     */
    public static function wc_get_stock_html($product)
    {
    }
    /**
     * Back-compat wrapper for 'wc_get_formatted_variation'.
     *
     * @since  5.1.0
     *
     * @param  WC_Product_Variation  $variation
     * @param  boolean               $flat
     * @return string
     */
    public static function wc_get_formatted_variation($variation, $flat)
    {
    }
    /**
     * Back-compat wrapper for 'wc_get_cart_remove_url'.
     *
     * @since  5.7.7
     *
     * @param  string  $cart_item_key
     * @return string
     */
    public static function wc_get_cart_remove_url($cart_item_key)
    {
    }
    /**
     * Get prefix for use with wp_cache_set. Allows all cache in a group to be invalidated at once..
     *
     * @since  5.0.0
     *
     * @param  string  $group
     * @return string
     */
    public static function wc_cache_helper_get_cache_prefix($group)
    {
    }
    /**
     * Increment group cache prefix (invalidates cache).
     *
     * @since  5.0.0
     *
     * @param  string  $group
     */
    public static function wc_cache_helper_incr_cache_prefix($group)
    {
    }
    /**
     * Backwards compatible logging using 'WC_Logger' class.
     *
     * @since  5.2.0
     *
     * @param  string  $message
     * @param  string  $level
     * @param  string  $context
     */
    public static function log($message, $level, $context)
    {
    }
    /**
     * Back-compat wrapper for 'is_rest_api_request'.
     *
     * @since  5.11.1
     *
     * @return boolean
     */
    public static function is_rest_api_request()
    {
    }
    /**
     * Compatibility wrapper for invalidating cache groups.
     *
     * @param  string  $group
     * @return void
     */
    public static function invalidate_cache_group($group)
    {
    }
    /**
     * True if 'wc-admin' is active.
     *
     * @since  6.3.1
     *
     * @return boolean
     */
    public static function is_wc_admin_active()
    {
    }
    /**
     * Returns true if is a react based admin page.
     *
     * @since  6.15.3
     *
     * @return boolean
     */
    public static function is_admin_or_embed_page()
    {
    }
    /**
     * Returns true if site is using block theme.
     *
     * @since  6.19.0
     *
     * @return boolean
     */
    public static function wc_current_theme_is_fse_theme()
    {
    }
    /**
     * Check if the usage of the custom orders table is enabled.
     *
     * @since  6.18.3
     *
     * @return bool
     */
    public static function is_hpos_enabled()
    {
    }
}
/**
 * Product Addons Compatibility.
 *
 * @version  6.21.0
 */
class WC_PB_Addons_Compatibility
{
    public static function init()
    {
    }
    /**
     * Add Addons script as a dependency to the Product Bundles script.
     *
     * @since  6.16.0
     *
     * @param  array  add_script_dependency
     * @return array
     */
    public static function add_script_dependency($dependencies)
    {
    }
    /**
     * Used to tell if a product has (required) addons.
     *
     * @since  5.9.2
     *
     * @param  mixed    $product
     * @param  boolean  $required
     * @return boolean
     */
    public static function has_addons($product, $required = \false)
    {
    }
    /**
     * Show option to disable bundled product addons.
     *
     * @param  int    $loop
     * @param  int    $product_id
     * @param  array  $item_data
     * @param  int    $post_id
     * @return void
     */
    public static function display_addons_disable_option($loop, $product_id, $item_data, $post_id)
    {
    }
    /**
     * Save option that disables bundled product addons.
     *
     * @param  array  $item_data
     * @param  array  $data
     * @param  mixed  $item_id
     * @param  mixed  $post_id
     */
    public static function process_addons_disable_option($item_data, $data, $item_id, $post_id)
    {
    }
    /**
     * Support for bundled item addons.
     *
     * @param  int              $product_id
     * @param  WC_Bundled_Item  $item
     * @return void
     */
    public static function addons_support($product_id, $item)
    {
    }
    /**
     * Sets a unique prefix for unique add-ons. The prefix is set and re-set globally before validating and adding to cart.
     *
     * @param  string   $prefix         unique prefix
     * @param  int      $product_id     the product id
     * @return string                   a unique prefix
     */
    public static function addons_cart_prefix($prefix, $product_id)
    {
    }
    /**
     * Add addons identifier to bundled item stamp, in order to generate new cart ids for bundles with different addons configurations.
     *
     * @param  array   $bundled_item_stamp
     * @param  string  $bundled_item_id
     * @return array
     */
    public static function bundled_item_addons_stamp($bundled_item_stamp, $bundled_item_id)
    {
    }
    /**
     * Validate bundled item addons.
     *
     * @param  bool  $add
     * @param  int   $product_id
     * @param  int   $quantity
     * @return bool
     */
    public static function validate_bundled_item_addons($add, $bundle, $bundled_item, $quantity, $variation_id)
    {
    }
    /**
     * Runs before adding a bundled item to the cart.
     *
     * @param  int    $product_id
     * @param  int    $quantity
     * @param  int    $variation_id
     * @param  array  $variations
     * @param  array  $bundled_item_cart_data
     * @return void
     */
    public static function after_bundled_add_to_cart($product_id, $quantity, $variation_id, $variations, $bundled_item_cart_data)
    {
    }
    /**
     * Runs after adding a bundled item to the cart.
     *
     * @param  int    $product_id
     * @param  int    $quantity
     * @param  int    $variation_id
     * @param  array  $variations
     * @param  array  $bundled_item_cart_data
     * @return void
     */
    public static function before_bundled_add_to_cart($product_id, $quantity, $variation_id, $variations, $bundled_item_cart_data)
    {
    }
    /**
     * Retrieve child cart item data from the parent cart item data array, if necessary.
     *
     * @param  array  $bundled_item_cart_data
     * @param  array  $cart_item_data
     * @return array
     */
    public static function get_bundled_cart_item_data_from_parent($bundled_item_cart_data, $cart_item_data)
    {
    }
    /**
     * Aggregate add-ons costs and calculate them after PB has applied discounts.
     *
     * @since  6.0.4
     *
     * @param  array              $cart_item
     * @param  WC_Product_Bundle  $bundle
     * @return array
     */
    public static function preprocess_bundled_cart_item_addon_data($cart_item, $bundle)
    {
    }
    /**
     * Do not let add-ons adjust prices when PB modifies them.
     *
     * @since  6.0.4
     *
     * @param  bool   $adjust
     * @param  array  $cart_item
     * @return bool
     */
    public static function adjust_addons_price($adjust, $cart_item)
    {
    }
    /**
     * Adds filter that discards bundled item add-on prices in product bundle pages.
     *
     * @since  6.0.4
     *
     * @param  WC_Bundled_Item  $bundled_item
     */
    public static function add_addon_price_zero_filter($bundled_item)
    {
    }
    /**
     * Removes filter that discards bundled item add-on prices in product bundle pages.
     *
     * @since  6.0.4
     *
     * @param  WC_Bundled_Item  $bundled_item
     */
    public static function remove_addon_price_zero_filter($bundled_item)
    {
    }
    /**
     * Discards bundled item add-on prices in product bundle pages.
     *
     * @since  6.0.4
     *
     * @param  mixed  $price
     */
    public static function option_price_raw_zero_filter($price)
    {
    }
}
/**
 * Adds hooks for AutomateWoo Compatibility.
 *
 * @version  6.18.2
 */
class WC_PB_AutomateWoo_Compatibility
{
    public static function init()
    {
    }
    /**
     * Filter out bundled items from the abandoned cart and keep the bundled products (parent).
     *
     * @since  6.18.2
     *
     * @param  array  $items
     * @return \AutomateWoo\Cart_Item[]
     */
    public static function filter_get_items($items)
    {
    }
}
/**
 * WooCommerce Blocks Compatibility.
 *
 * @version 6.15.0
 */
class WC_PB_Blocks_Compatibility
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
 * @version  5.11.0
 */
class WC_PB_COG_Compatibility
{
    /**
     * Initialize integration.
     */
    public static function init()
    {
    }
    /**
     * Update bundled item cost meta when calling 'WC_PB_Order::add_bundle_to_order'.
     *
     * @since  5.11.0
     *
     * @param  WC_Order_Item  $container_order_item
     * @param  WC_Order       $order
     * @return void
     */
    public static function set_bundle_added_to_order_item_cost($container_order_item, $order)
    {
    }
    /**
     * Cost of goods compatibility: Zero order item cost for bundled products that belong to statically priced bundles.
     *
     * @param  double    $cost
     * @param  array     $item
     * @param  WC_Order  $order
     * @return double
     */
    public static function set_bundled_order_item_cost($cost, $item, $order)
    {
    }
}
/**
 * Composite Products Compatibility.
 *
 * @version  6.21.0
 */
class WC_PB_CP_Compatibility
{
    /**
     * Context-setting Component.
     *
     * @var WC_CP_Component
     */
    private static $current_component = \false;
    /**
     * Add hooks.
     */
    public static function init()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Permalink Args.
    |--------------------------------------------------------------------------
    */
    /**
     * Add form data for composited bundles to support cart-item editing and order-item editing in CP.
     *
     * @since  5.8.0
     *
     * @param  array  $form_data
     * @param  array  $configuration
     * @return array
     *
     */
    public static function rebuild_composited_bundle_form_data($form_data, $configuration)
    {
    }
    /**
     * Get posted data for composited bundles.
     *
     * @since  5.8.0
     *
     * @param  array                 $configuration
     * @param  WC_Product_Composite  $composite
     * @return array
     *
     */
    public static function get_composited_bundle_configuration($configuration, $composite)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Prices.
    |--------------------------------------------------------------------------
    */
    /**
     * Composited bundle price.
     *
     * @param  double         $price
     * @param  array          $args
     * @param  WC_CP_Product  $composited_product
     * @return double
     */
    public static function composited_bundle_price($price, $args, $composited_product)
    {
    }
    /**
     * Create component reference to aggregate discount of component into bundled item - 'filters' method implementation.
     *
     * @see bundled_item_discount
     *
     * @param  string  $cart_item
     * @return void
     */
    public static function bundled_cart_item_reference($cart_item)
    {
    }
    /**
     * Filters 'woocommerce_bundled_item_discount' to include component + bundled item discounts.
     *
     * @param  mixed            $bundled_discount
     * @param  WC_Bundled_Item  $bundled_item
     * @param  string           $context
     * @return mixed
     */
    public static function bundled_item_discount($bundled_discount, $bundled_item, $context)
    {
    }
    /**
     * Component discounts should not trigger bundle price updates.
     *
     * @param  boolean            $is
     * @param  WC_Product_Bundle  $bundle
     * @return boolean
     */
    public static function bundles_update_price_meta($update, $bundle)
    {
    }
    /**
     * If a component is not priced individually, this should force bundled items to return a zero price.
     *
     * @since  6.2.0
     *
     * @param  boolean          $is
     * @param  WC_Bundled_Item  $bundled_item
     * @return boolean
     */
    public static function bundled_item_is_priced_individually($is_priced_individually, $bundled_item)
    {
    }
    /**
     * If a component is not priced individually, this should force bundled items to return a zero price.
     *
     * @since  6.2.0
     *
     * @param  boolean            $contains
     * @param  WC_Product_Bundle  $bundle
     * @return boolean
     */
    public static function bundle_contains_priced_items($contains, $bundle)
    {
    }
    /**
     * If a component is not shipped individually, this should force bundled items to comply.
     *
     * @since  6.2.0
     *
     * @param  boolean          $is
     * @param  WC_Bundled_Item  $bundled_item
     * @return boolean
     */
    public static function bundled_item_is_shipped_individually($is_shipped_individually, $bundled_item)
    {
    }
    /**
     * If a component is not shipped individually, this should force bundled items to comply.
     *
     * @since  6.2.0
     *
     * @param  boolean            $has
     * @param  WC_Product         $bundled_product
     * @param  int                $bundled_item_id
     * @param  WC_Product_Bundle  $bundle
     * @return boolean
     */
    public static function bundled_item_has_bundled_weight($has, $bundled_cart_item, $bundled_item_id, $bundle)
    {
    }
    /**
     * If a component is not shipped individually, this should force bundled items to comply.
     *
     * @since  6.2.0
     *
     * @param  boolean            $is
     * @param  WC_Product_Bundle  $bundle
     * @return boolean
     */
    public static function bundle_contains_shipped_items($contains, $bundle)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Templates.
    |--------------------------------------------------------------------------
    */
    /**
     * Hook into 'woocommerce_composited_product_bundle' to show bundle type product content.
     *
     * @since  5.10.0
     *
     * @param  WC_CP_Product  $component_option
     * @return void
     */
    public static function composited_product_bundle($component_option)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Cart and Orders.
    |--------------------------------------------------------------------------
    */
    /**
     * Modify group mode of composited bundles.
     *
     * @since  6.14.0
     *
     * @param  array  $cart_item
     * @return array
     */
    public static function composited_bundle_group_mode($cart_item)
    {
    }
    /**
     * Add hidden Group Modes for composited bundles.
     *
     * @param  array  $group_mode_data
     * @return array
     */
    public static function composited_group_mode_options_data($group_mode_data)
    {
    }
    /**
     * Add filters to modify bundled product prices when parent product is composited and has a discount.
     *
     * @param  array   $cart_item
     * @return void
     */
    public static function bundled_cart_item_before_price_modification($cart_item)
    {
    }
    /**
     * Remove filters that modify bundled product prices when the parent product is composited and has a discount.
     *
     * @param  string  $cart_item
     * @return void
     */
    public static function bundled_cart_item_after_price_modification($cart_item)
    {
    }
    /**
     * Hook into 'woocommerce_composite_component_add_to_cart_validation' to validate composited bundles.
     *
     * @param  WC_CP_Component  $component
     * @param  array            $component_validation_data
     * @param  int              $composite_quantity
     * @param  array            $configuration
     * @param  string           $context
     * @return void
     */
    public static function validate_component_configuration($component, $component_validation_data, $composite_quantity, $configuration, $context)
    {
    }
    /**
     * Sets a prefix for unique bundles.
     *
     * @param  string  $prefix
     * @param  int     $product_id
     * @return string
     */
    public static function bundle_field_prefix($prefix, $product_id)
    {
    }
    /**
     * Hook into 'woocommerce_composited_add_to_cart' to trigger 'WC_PB()->cart->bundle_add_to_cart()'.
     *
     * @param  string  $cart_item_key
     * @param  int     $product_id
     * @param  int     $quantity
     * @param  int     $variation_id
     * @param  array   $variation
     * @param  array   $cart_item_data
     */
    public static function add_bundle_to_cart($cart_item_key, $product_id, $quantity, $variation_id, $variation, $cart_item_data)
    {
    }
    /**
     * Used to link bundled cart items with the composite container product.
     *
     * @param  boolean  $is_child
     * @param  string   $cart_item_key
     * @param  array    $cart_item_data
     * @param  string   $composite_key
     * @param  array    $composite_data
     * @return boolean
     */
    public static function bundled_cart_item_is_child_of_composite($is_child, $cart_item_key, $cart_item_data, $composite_key, $composite_data)
    {
    }
    /**
     * Used to link bundled order items with the composite container product.
     *
     * @param  boolean   $is_child
     * @param  array     $order_item
     * @param  array     $composite_item
     * @param  WC_Order  $order
     * @return boolean
     */
    public static function bundled_order_item_is_child_of_composite($is_child, $order_item, $composite_item, $order)
    {
    }
    /**
     * Edit composited bundle container cart title.
     *
     * @param  string  $content
     * @param  array   $cart_item
     * @param  string  $cart_item_key
     * @return string
     */
    public static function composited_bundle_in_cart_item_title($content, $cart_item, $cart_item_key)
    {
    }
    /**
     * Append bundled item data to composited bundle metadata.
     *
     * @param  string  $title
     * @param  array   $cart_item
     * @param  string  $cart_item_key
     * @return string
     */
    public static function composited_bundle_cart_item_data_value($title, $cart_item, $cart_item_key)
    {
    }
    /**
     * Aggregate value and weight of bundled items in shipping packages when an unassembled bundle is composited.
     *
     * @param  array                 $cart_item
     * @param  WC_Product_Composite  $container_cart_item_key
     * @return array
     */
    public static function composited_bundle_container_cart_item($cart_item, $bundle)
    {
    }
    /**
     * Aggregate value and weight of bundled items in shipping packages when a bundle is composited in an assembled composite.
     *
     * @param  array   $cart_item
     * @param  string  $cart_item_key
     * @param  string  $container_cart_item_key
     * @return array
     */
    public static function composited_bundle_container_package_item($cart_item, $cart_item_key, $container_cart_item_key)
    {
    }
    /**
     * Bundles are not directly editable in cart if part of a composite.
     * They inherit the setting of their container and can only be edited within that scope of their container - @see 'composited_bundle_permalink_args()'.
     *
     * @param  boolean            $editable
     * @param  WC_Product_Bundle  $bundle
     * @param  array              $cart_item
     * @return boolean
     */
    public static function composited_bundle_not_editable_in_cart($editable, $bundle, $cart_item)
    {
    }
    /**
     * Add some contextual info to bundle validation messages.
     *
     * @param  string $message
     * @return string
     */
    public static function component_bundle_error_message_context($message)
    {
    }
    /**
     * Edit composited bundle container cart qty.
     *
     * @param  int     $quantity
     * @param  string  $cart_item_key
     * @return int
     */
    public static function composited_bundle_in_cart_item_quantity($quantity, $cart_item_key)
    {
    }
    /**
     * Edit composited bundle container cart qty.
     *
     * @param  int     $quantity
     * @param  string  $cart_item
     * @param  string  $cart_item_key
     * @return int
     */
    public static function composited_bundle_checkout_item_quantity($quantity, $cart_item, $cart_item_key = \false)
    {
    }
    /**
     * Visibility of composited bundle containers in orders.
     * Hide containers without children and a zero price (all optional).
     *
     * @param  boolean  $visible
     * @param  array    $order_item
     * @return boolean
     */
    public static function composited_bundle_order_item_visible($visible, $order_item)
    {
    }
    /**
     * Edit composited bundle container order item title.
     *
     * @param  string  $content
     * @param  array   $order_item
     * @return string
     */
    public static function composited_bundle_order_table_item_title($content, $order_item)
    {
    }
    /**
     * Edit composited bundle container order item qty.
     *
     * @param  string  $content
     * @param  array   $order_item
     * @return string
     */
    public static function composited_bundle_order_table_item_quantity($quantity, $order_item)
    {
    }
    /**
     * Prevents bundle container item meta from showing up.
     *
     * @since  5.8.0
     *
     * @param  string         $desc
     * @param  array          $desc_array
     * @param  WC_Order_Item  $item
     * @return string
     */
    public static function composited_bundle_order_item_description($desc, $desc_array, $order_item)
    {
    }
    /**
     * Use custom callback to add bundles to orders in 'WC_CP_Order::add_composite_to_order'.
     *
     * @since  5.8.0
     *
     * @param  array                 $callback
     * @param  WC_CP_Component       $component
     * @param  WC_Product_Composite  $composite
     * @param  WC_Order              $order
     * @param  integer               $quantity
     * @param  array                 $args
     */
    public static function add_composited_bundle_to_order_callback($callback, $component, $composite, $order, $quantity, $args)
    {
    }
    /**
     * Sync composited bundle cart stamp.
     *
     * @since  6.12.0
     *
     * @param  string  $bundle_cart_key
     */
    public static function sync_bundle_cart_stamp($bundle_cart_key)
    {
    }
    /**
     * Custom callback for adding bundles to orders in 'WC_CP_Order::add_composite_to_order'.
     *
     * @since  5.8.0
     *
     * @param  array                 $callback
     * @param  WC_CP_Component       $component
     * @param  WC_Product_Composite  $composite
     * @param  WC_Order              $order
     * @param  integer               $quantity
     * @param  array                 $args
     */
    public static function add_composited_bundle_to_order($component, $composite, $order, $quantity, $args)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | REST API.
    |--------------------------------------------------------------------------
    */
    /**
     * Parse posted bundle configuration in composite configuration array.
     *
     * @param  array                  $configuration
     * @param  WC_Product_Composite   $composite
     * @param  WC_Order_Item_Product  $item
     * @return array
     */
    public static function parse_composited_rest_bundle_configuration($configuration, $composite, $item)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Store API.
    |--------------------------------------------------------------------------
    */
    /**
     * Filter store API responses.
     *
     * @since  6.15.1
     *
     * @param  $response  WP_REST_Response
     * @param  $server    WP_REST_Server
     * @param  $request   WP_REST_Request
     * @return WP_REST_Response
     */
    public static function filter_store_api_cart_item_data($response, $server, $request)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Analytics.
    |--------------------------------------------------------------------------
    */
    /**
     * Modify CP analytics table by adding in all bundled items that sold in Composites.
     *
     * @since  6.12.0
     *
     * @param  array $clauses
     * @return array
     */
    public static function setup_analytics_base_table($clauses)
    {
    }
}
/**
 * Elementor compatibility.
 *
 * @version  6.5.0
 */
class WC_PB_Elementor_Compatibility
{
    public static function init()
    {
    }
    /**
     * If Elementor is enabled, we add an additional class `grouped_form`
     * This class does not have additional default WC styling, and
     * Elementor is using it to exclude it from some styling it does
     *
     * @param array             $form_classes
     * @param WC_Product_Bundle $product
     *
     * @return array
     */
    public static function additional_form_classes($form_classes, $product)
    {
    }
    /**
     * Flex layout issues. Elementor has no hooks we can use to add a class on a higher level
     * so, we'll add the class by search/replace in the generated markup
     *
     * @since  6.5.2
     *
     * @param string                 $widget_content The content of the widget.
     * @param \Elementor\Widget_Base $widget The widget.
     *
     * @return string
     */
    public static function render_add_to_cart_widget($widget_content, $widget)
    {
    }
}
/**
 * Divi 3.0+ integration.
 *
 * @version  6.4.3
 */
class WC_PB_ET_Compatibility
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
     * Unhook woocommerce_after_single_product_summary set inside /includes/wc-pb-template-hooks.php
     * if the Divi builder is used. No need to check the value of the form location
     */
    public static function form_displayed_twice()
    {
    }
    /**
     * Check if builder is used and the product type is "bundle"
     * If the Divi builder is used deactivate the form location
     *
     * @param WC_Product_Bundle $product_bundle_object
     */
    public static function admin_disable_form_location($product_bundle_object)
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
 * @version  6.3.6
 */
class WC_PB_FS_Compatibility
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
    /**
     * Lower the responsive styling breakpoint for Flatsome.
     *
     * @param  array  $params
     * @return array
     */
    public static function adjust_responsive_breakpoint($params)
    {
    }
    /**
     * Resolve image update mixups in quickview modals.
     *
     * @param  WC_Bundled_Item  $bundled_item
     * @return array
     */
    public static function bundled_product_gallery_classes($bundled_item)
    {
    }
}
/**
 * WooCommerce Give Products Integration.
 *
 * @version 6.15.0
 */
class WC_PB_Give_Products_Compatibility
{
    public static function init()
    {
    }
    /**
     * Loop through the items of an order that was given to an user and re-add bundles to the order using WC_PB_Order::add_bundle_to_order().
     * Without this code the order will contain only the "container" item without any of the bundled items.
     *
     * Important: Only works reliably with static bundles. WC_PB_Order::add_bundle_to_order() normally expects a configuration array when a bundle has configurable content.
     *
     * @param  int  $order_id
     */
    public static function add_bundle_to_order($order_id)
    {
    }
    /**
     * Regenerate download permissions for this order to include the permissions for the bundled items if any.
     *
     * @param  int  $order_id
     */
    public static function regenerate_download_permissions($order_id)
    {
    }
}
/**
 * Memberships Integration: Discounts inheritance.
 *
 * @version  6.13.3
 */
class WC_PB_Members_Compatibility
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
     * Inherit Memberships discounts as bundled item discounts.
     *
     * @param  mixed            $discount
     * @param  WC_Bundled_Item  $bundled_item
     * @return mixed
     */
    public static function inherit_member_discount($discount, $bundled_item, $context)
    {
    }
    /**
     * Prevent Memberships from applying member discounts to bundled products -- membership discounts are inherited.
     *
     * @param  boolean     $exclude
     * @param  WC_Product  $product
     * @return boolean
     */
    public static function exclude_bundled_product_from_member_discounts($exclude, $product)
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
 * @version  6.18.5
 */
class WC_PB_Min_Max_Compatibility
{
    /**
     * The bundled item object whose qty input is being filtered.
     * @var WC_Bundled_Item
     */
    public static $bundled_item = \false;
    /**
     * Unfiltered quantity input data used at restoration time.
     * @var array
     */
    public static $unfiltered_args = \false;
    /**
     * Initilize hooks.
     */
    public static function init()
    {
    }
    /*
     * Admin.
     */
    /**
     * Filter Min/Max bundled item Quantity based on "Group of" option on save.
     *
     * @param  array  $item_data
     * @param  array  $data
     * @param  mixed  $item_id
     * @param  mixed  $post_id
     *
     * @return array
     */
    public static function filter_processed_bundled_item_data($item_data, $data, $item_id, $post_id)
    {
    }
    /**
     * Add a notice if Min/Max bundled item quantities are not compatible with the "Group of" option.
     *
     * @param  mixed            $qty
     * @param  WC_Bundled_Item  $bundled_item
     * @param  array            $args
     *
     * @return mixed
     */
    public static function maybe_add_group_of_notice()
    {
    }
    /**
     * Filter Min/Max/Default quantity selector values when adding a new bundled item or editing an existing one.
     *
     * @param  array $item_data
     * @param  int   $product_id
     * @return array
     */
    public static function filter_add_bundled_product_item_data($item_data, $context, $product_id)
    {
    }
    /*
     * Cart.
     */
    /**
     * Set global $bundled_item variable.
     *
     * @param  WC_Bundled_Item  $bundled_item
     * @return void
     */
    public static function restore_quantities_set($bundled_item)
    {
    }
    /**
     * Unset global $bundled_item variable.
     *
     * @param  WC_Bundled_Item  $bundled_item
     * @return void
     */
    public static function restore_quantities_unset($bundled_item)
    {
    }
    /**
     * Save unmodified quantity args.
     *
     * @param  array   $data
     * @param  object  $product
     * @return array
     */
    public static function save_quantity_input_args($data, $product)
    {
    }
    /**
     * Restore min/max bundled item quantities to the values they had before min/max interference.
     *
     * @param  array   $data
     * @param  object  $product
     * @return array
     */
    public static function restore_quantity_input_args($data, $product)
    {
    }
    /**
     * Double-check bundled variation data quantities to account for "group of" option.
     *
     * @param  array                 $variation_data
     * @param  WC_Product            $bundled_product
     * @param  WC_Product_Variation  $bundled_variation
     * @return array
     */
    public static function bundled_variation_data($variation_data, $bundled_product, $bundled_variation)
    {
    }
    /**
     * Restore allowed min/max quantity for bundled items to empty, so min/max cart validation rules do not apply.
     *
     * @param  string  $qty_meta
     * @param  string  $checking_id
     * @param  string  $cart_item_key
     * @param  array   $cart_item
     * @return array
     */
    public static function restore_allowed_quantity($qty_meta, $checking_id, $cart_item_key, $cart_item)
    {
    }
    /**
     * Add bundled item and input cart quantity to the product.
     *
     * @param  WC_Product  $product
     * @param  array       $cart_item
     * @param  string      $cart_item_key
     * @return WC_Product
     */
    public static function add_bundled_item_to_product($product, $cart_item, $cart_item_key)
    {
    }
    /**
     * Filter Min bundled item Quantity based on "Group of" option on runtime.
     *
     * @since 6.16.0
     *
     * @param  mixed            $qty
     * @param  WC_Bundled_Item  $bundled_item
     * @param  array            $args
     *
     * @return mixed
     */
    public static function filter_bundled_item_min_quantity($qty, $bundled_item, $args)
    {
    }
    /**
     * Filter Max bundled item Quantity based on "Group of" option on runtime.
     *
     * @since 6.16.0
     *
     * @param  mixed            $qty
     * @param  WC_Bundled_Item  $bundled_item
     * @param  array            $args
     *
     * @return mixed
     */
    public static function filter_bundled_item_max_quantity($qty, $bundled_item, $args)
    {
    }
    /*
     * Helpers.
     */
    /**
     * Returns the "Group of" quantity of a bundled item.
     *
     * @since 6.16.0
     *
     * @param  WC_Bundled_Item|int  $bundled_item_or_product
     *
     * @return int
     */
    public static function get_bundled_item_group_of_qty($bundled_item_or_product)
    {
    }
}
/**
 * NYP Compatibility.
 *
 * @version  6.2.2
 */
class WC_PB_NYP_Compatibility
{
    /**
     * NYP field name suffix.
     *
     * @var array
     */
    protected static $nyp_suffix = '';
    /**
     * Initialize!
     */
    public static function init()
    {
    }
    /**
     * Support for bundled item NYP.
     *
     * @param  int              $product_id
     * @param  WC_Bundled_Item  $item
     * @return void
     */
    public static function nyp_price_input_support($product_id, $item)
    {
    }
    /**
     * Support for bundled variable item NYP.
     *
     * @param  int              $product_id
     * @param  WC_Bundled_Item  $item
     * @return void
     */
    public static function nyp_price_input_support_variable($product_id, $item)
    {
    }
    /**
     * Adds bundled item's optional setting to the NYP attributes.
     *
     * @since  6.0.4
     *
     * @param  array  $atrributes - The array of attributes.
     * @return array
     */
    public static function nyp_data_attributes($attributes)
    {
    }
    /**
     * Sets a unique suffix for unique NYP products. The suffix is set and re-set globally before validating and adding to cart.
     *
     * @param  string  $suffix
     * @param  int     $product_id
     * @return string
     */
    public static function nyp_cart_suffix($suffix, $product_id)
    {
    }
    /**
     * Add nyp identifier to bundled item stamp, in order to generate new cart ids for bundles with different nyp configurations.
     *
     * @param  array   $bundled_item_stamp
     * @param  string  $bundled_item_id
     * @return array
     */
    public static function bundled_item_nyp_stamp($bundled_item_stamp, $bundled_item_id)
    {
    }
    /**
     * Validate bundled item NYP.
     *
     * @param  bool  $add
     * @param  int   $product_id
     * @param  int   $quantity
     * @return bool
     */
    public static function validate_bundled_item_nyp($add, $bundle, $bundled_item, $quantity, $variation_id)
    {
    }
    /**
     * Runs before adding a bundled item to the cart.
     *
     * @param  int    $product_id
     * @param  int    $quantity
     * @param  int    $variation_id
     * @param  array  $variations
     * @param  array  $bundled_item_cart_data
     * @return void
     */
    public static function after_bundled_add_to_cart($product_id, $quantity, $variation_id, $variations, $bundled_item_cart_data)
    {
    }
    /**
     * Runs after adding a bundled item to the cart.
     *
     * @param  int    $product_id
     * @param  int    $quantity
     * @param  int    $variation_id
     * @param  array  $variations
     * @param  array  $bundled_item_cart_data
     * @return void
     */
    public static function before_bundled_add_to_cart($product_id, $quantity, $variation_id, $variations, $bundled_item_cart_data)
    {
    }
    /**
     * Retrieve child cart item data from the parent cart item data array, if necessary.
     *
     * @param  array  $bundled_item_cart_data
     * @param  array  $cart_item_data
     * @return array
     */
    public static function get_bundled_cart_item_data_from_parent($bundled_item_cart_data, $cart_item_data)
    {
    }
    /**
     * Sets a unique prefix for unique NYP products. The prefix is set and re-set globally before validating and adding to cart.
     *
     * @param  string  $prefix
     * @param  int     $product_id
     * @return string
     * @deprecated 6.2.2
     */
    public static function nyp_cart_prefix($prefix, $product_id)
    {
    }
}
/**
 * One Page Checkout Compatibility.
 *
 * @version  6.21.0
 */
class WC_PB_OPC_Compatibility
{
    public static function init()
    {
    }
    /**
     * OPC Single-product bundle-type add-to-cart template.
     *
     * @param  int  $opc_post_id
     * @return void
     */
    public static function opc_single_add_to_cart_bundle($opc_post_id)
    {
    }
    /**
     * Prevent OPC from managing bundled items.
     *
     * @param  bool    $allow
     * @param  array   $cart_item
     * @param  string  $cart_item_key
     * @param  string  $opc_id
     * @return bool
     */
    public static function opc_disallow_bundled_cart_item_modification($allow, $cart_item, $cart_item_key, $opc_id)
    {
    }
}
/**
 * Print Invoices & Packing Lists Integration.
 *
 * @version  6.21.0
 */
class WC_PB_PIP_Compatibility
{
    /**
     * The document being processed.
     * @var WC_PIP_Document
     */
    public static $document;
    /**
     * Flag to control internal flow in 'items_count'.
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
     * @since  5.5.0
     *
     * @param  string  $type
     * @return boolean
     */
    public static function rendering_document($type = '')
    {
    }
    /**
     * Fires off before rendering the PIP document body.
     *
     * @since  5.5.0
     *
     * @param  string           $type
     * @param  string           $action
     * @param  WC_PIP_Document  $document
     * @param  WC_Order         $order
     * @return void
     */
    public static function before_body($type, $action, $document, $order)
    {
    }
    /**
     * Fires off before rendering the PIP document body.
     *
     * @since  5.5.0
     *
     * @param  string           $type
     * @param  string           $action
     * @param  WC_PIP_Document  $document
     * @param  WC_Order         $order
     * @return void
     */
    public static function after_body($type, $action, $document, $order)
    {
    }
    /**
     * Modify the returned order items and products to return the correct items/weights/values for shipping.
     *
     * @since  5.5.0
     */
    public static function add_filters()
    {
    }
    /**
     * Remove filters above.
     *
     * @since  5.5.0
     */
    public static function remove_filters()
    {
    }
    /**
     * Recounts items excluding bundle containers.
     *
     * @param  int  $count
     * @return int
     */
    public static function items_count($count)
    {
    }
    /**
     * Temporarily add order item data to array.
     *
     * @param  array       $item_data
     * @param  array       $item
     * @param  WC_Product  $product
     * @param  string      $order_id
     * @param  string      $type
     * @return array
     */
    public static function row_item_data($item_data, $item, $product, $order_id, $type)
    {
    }
    /**
     * Re-sort PIP table rows so that bundled items are always below their container.
     *
     * @param  array   $table_rows
     * @param  array   $items
     * @param  string  $order_id
     * @param  string  $type
     * @return array
     */
    public static function table_rows($table_rows, $items, $order_id, $type, $pip_document = \null)
    {
    }
    /**
     * Add component title to order item title.
     *
     * @since  5.9.1
     *
     * @param  string         $product_name
     * @param  WC_Order_Item  $order_item
     * @param  boolean        $is_visible
     * @param  string         $type
     * @param  WC_Product     $product
     * @param  WC_Order       $order
     * @return string
     */
    public static function bundled_item_name($product_name, $order_item, $is_visible, $type, $product, $order)
    {
    }
    /**
     * Add 'bundled-product' class to pip row classes.
     *
     * @param  array       $classes
     * @param  WC_Product  $product
     * @param  array       $item
     * @param  string      $type
     * @return array
     */
    public static function bundled_item_class($classes, $product, $item, $type)
    {
    }
    /**
     * Add "assembled" item meta to pick-lists.
     *
     * @since  5.5.0
     *
     * @param  int            $item_id
     * @param  WC_Order_Item  $item
     */
    public static function add_assembled_order_item_meta($item_id, $item)
    {
    }
    /**
     * Ensure bundle container line items are always displayed, otherwise we will not be able to collect their children in 'table_rows'.
     *
     * @param  boolean     $hide
     * @param  WC_Product  $product
     * @param  array       $order_item
     * @param  WC_Order    $order
     * @return boolean
     */
    public static function hide_item($hide, $product, $order_item, $order)
    {
    }
    /**
     * Prevent bundled order items from being sorted/categorized.
     *
     * @param  boolean   $uncategorize
     * @param  array     $order_item
     * @param  WC_Order  $order
     * @return boolean
     */
    public static function group_bundled_items_as_uncategorized($uncategorize, $order_item, $order)
    {
    }
    /**
     * Add bundled item class CSS rule.
     * @return  void
     */
    public static function add_styles()
    {
    }
}
/**
 * Points and Rewards Compatibility.
 *
 * @version  6.22.0
 */
class WC_PB_PnR_Compatibility
{
    /**
     * Bundle points - @see 'WC_PB_PnR_Compatibility::replace_points'.
     * @var boolean
     */
    private static $bundle_price_max = \false;
    private static $bundle_price_min = \false;
    /**
     * Bypass 'wc_points_rewards_single_product_message' filter.
     * @var boolean
     */
    private static $single_product_message_filter_active = \true;
    /**
     * Initialize.
     */
    public static function init()
    {
    }
    /**
     * Return zero points for bundled cart items if container item has product- or category-level points or bundled item is not priced individually.
     *
     * @param  int     $points
     * @param  string  $cart_item_key
     * @param  array   $cart_item_values
     * @return int
     */
    public static function points_earned_for_bundled_cart_item($points, $cart_item_key, $cart_item_values)
    {
    }
    /**
     * Return zero points for bundled order items if container item has product- or category-level points or bundled item is not priced individually.
     *
     * @param  int       $points
     * @param  string    $item_key
     * @param  array     $item
     * @param  WC_Order  $order
     * @return int
     */
    public static function points_earned_for_bundled_order_item($points, $product, $item_key, $item, $order)
    {
    }
    /**
     * Points and Rewards single product message for Bundles.
     *
     * @param  string                     $message
     * @param  WC_Points_Rewards_Product  $points_n_rewards
     * @return string
     */
    public static function points_rewards_bundle_message($message, $points_n_rewards)
    {
    }
    /**
     * @see points_rewards_remove_price_html_messages
     *
     * @param  string  $message
     * @return void
     */
    public static function return_empty_message($message)
    {
    }
    /**
     * Filter bundle price returned by 'get_price' to return the min/max bundle price.
     *
     * @param  mixed              $price
     * @param  WC_Product_Bundle  $product
     * @return mixed
     */
    public static function replace_price($price, $product)
    {
    }
    /**
     * True if the bundle has fixed product- or category-level points.
     *
     * @param  WC_Product_Bundle  $bundle
     * @return boolean
     */
    private static function has_fixed_points($bundle)
    {
    }
}
/**
 * Pre Orders Compatibility.
 *
 * @since  4.11.4
 */
class WC_PB_PO_Compatibility
{
    public static function init()
    {
    }
    /**
     * Remove bundled cart item meta "Available On" text.
     *
     * @param  array  $pre_order_meta
     * @param  array  $cart_item_data
     * @return array
     */
    public static function remove_bundled_pre_orders_cart_item_meta($pre_order_meta, $cart_item_data)
    {
    }
    /**
     * Remove bundled order item meta "Available On" text.
     *
     * @param  array     $pre_order_meta
     * @param  array     $order_item
     * @param  WC_Order  $order
     * @return array
     */
    public static function remove_bundled_pre_orders_order_item_meta($pre_order_meta, $order_item, $order)
    {
    }
}
/**
 * PayPal Express Checkout Compatibility.
 *
 * @version  6.6.1
 */
class WC_PB_PPEC_Compatibility
{
    public static function init()
    {
    }
    /**
     * Enable/Disable PayPal Express Checkout Quick-pay buttons based on the validity of the Bundle's configuration.
     *
     * @since 6.6.1
     *
     */
    public static function handle_ppec_quickpay_buttons_visibility()
    {
    }
}
/**
 * QuickView Compatibility.
 *
 * @since  4.11.4
 */
class WC_PB_QV_Compatibility
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
     * Fixes QuickView support for Bundles when ajax add-to-cart is active and QuickView operates without a separate button.
     *
     * @param   string  $selector
     * @return  void
     */
    public static function qv_selector($selector)
    {
    }
}
/**
 * Storefront 2.3+ integration.
 *
 * @version  5.7.9
 */
class WC_PB_SF_Compatibility
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
     * Set corrent sticky add to cart button trigger element when "Form Location" is "After Summary".
     *
     * @param  array  $params
     * @return array
     */
    public static function sticky_add_to_cart_params($params)
    {
    }
    /**
     * Prevent use of 'parent_cart_item_meta' flag when using the new block-based cart.
     *
     * @since  6.15.0
     *
     * @param  array  $group_mode_data
     * @return array
     */
    public static function bundles_group_mode_options_data($group_mode_data)
    {
    }
}
/**
 * Shipstation Integration.
 *
 * @version  5.5.0
 */
class WC_PB_Shipstation_Compatibility
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
 * @version  5.1.0
 */
class WC_PB_Shipwire_Compatibility
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
 * @version  6.6.4
 */
class WC_PB_Stripe_Compatibility
{
    public static function init()
    {
    }
    /**
     * Hide Stripe Quick-pay buttons for non-static Bundles.
     *
     * @since 6.6.1
     *
     */
    public static function hide_stripe_quickpay($hide_button, $post)
    {
    }
}
/**
 * Subscriptions Integration.
 *
 * @version  5.10.1
 */
class WC_PB_Subscriptions_Compatibility
{
    public static function init()
    {
    }
    /**
     * Remove orphaned bundled items when WC Subs sets up the cart in order to pay for an initial (not renewal) order that contains subscription items.
     *
     * Bundled cart items are normally added to the cart when their container is added to the cart on the 'woocommerce_add_to_cart' action.
     * This is carried on to the ordering-again logic, in which case bundled cart items are specifically prevented from ending up in the cart - @see 'WC_PB_Cart::woo_bundles_validation()'.
     *
     * WC Subs fakes some of the core re-ordering logic to populate the cart with subscription order items when paying for an initial order that is pending payment, or when paying for a pending/failed renewal order.
     * However, due to https://github.com/Prospress/woocommerce-subscriptions/issues/1362, 'WC_PB_Cart::validate_add_to_cart()' does not run to prevent bundled cart items from being added to the cart when paying for initial orders that include the container bundle.
     * This hook fixes that shortcoming.
     *
     * Note that this "cleaning up" should not be done for renewal orders, since these do not include the container item.
     *
     * @param  string  $cart_item_key
     * @param  int     $product_id
     * @param  int     $quantity
     * @param  int     $variation_id
     * @param  array   $variation
     * @param  array   $cart_item_data
     * @return void
     */
    public static function remove_orphaned_bundled_cart_item($cart_item_key, $product_id, $quantity, $variation_id, $variation, $cart_item_data)
    {
    }
    /**
     * Validate support for multiple subscriptions. Will be handled by WCS in the future.
     *
     * @param  WC_Product_Bundle  $bundle
     * @return boolean
     */
    public static function validate_bundle($valid, $bundle)
    {
    }
}
/**
 * ThemeAlien Variation Swatches for WooCommerce
 *
 * @version  5.9.2
 */
class WC_PB_TAWS_Variation_Swatches_Compatibility
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
 * WooCommerce Payments Integration.
 *
 * @version  6.13.1
 */
class WC_PB_WC_Payments_Compatibility
{
    // Hide quick-pay buttons in Bundle product pages.
    public static function init()
    {
    }
    /**
     * Hide quick-pay buttons in Bundle product pages.
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
 * @version  6.3.4
 */
class WC_PB_WC_Services_Compatibility
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
 * @version  6.21.0
 */
class WC_PB_Wishlists_Compatibility
{
    public static function init()
    {
    }
    /**
     * Displays bundled items within a Composite Product.
     *
     * @param  string      $default_markup
     * @param  WC_Product  $composited_product
     * @param  array       $composited_item_data
     * @return string
     */
    public static function wishlist_display_bundled_items($default_markup, $composited_product, $composited_item_data)
    {
    }
    /**
     * Inserts bundle contents after main wishlist bundle item is displayed.
     *
     * @param  array  $item
     * @param  array  $wishlist
     * @return void
     */
    public static function wishlist_after_list_item_name($item, $wishlist)
    {
    }
    /**
     * Modifies wishlist bundle item price - the precise sum cannot be displayed reliably unless the item is added to the cart.
     *
     * @param  double  $price
     * @param  array   $item
     * @param  array   $wishlist
     * @return string  $price
     */
    public static function wishlist_list_item_price($price, $item, $wishlist)
    {
    }
}
/**
 * WP Import/Export Compatibility.
 * Uses a dedicated '_bundled_items_db_data' meta field to export bundle data using the 'get_data()' method of the WC_Bundled_Item_Data CRUD class.
 * Data is imported again using the WC_Bundled_Item_Data class.
 * Supports import of existing v4 data from post meta.
 *
 * @version  6.21.0
 */
class WC_PB_WP_IE_Compatibility
{
    public static function init()
    {
    }
    /**
     * Export bundle data using the 'get_data()' method of the WC_Bundled_Item_Data CRUD class.
     * Data is exported with a hack, when the '_wc_pb_layout_style' meta is exported.
     *
     * @param  object  $post
     * @param  array   $export_columns
     * @return object
     */
    public static function wp_export_data($skip_export, $meta_key, $meta)
    {
    }
    /**
     * Import json-encoded bundle data using the WC_Bundled_Item_Data CRUD class.
     *
     * @param  array  $post_meta
     * @param  int    $imported_post_id
     * @param  array  $post
     * @return void
     */
    public static function wp_import_data($post_meta, $imported_post_id, $post)
    {
    }
    /**
     * Reassociate bundled item ids with modified bundled product ids on import end.
     * Also delete the bundled items stock cache.
     */
    public static function wp_import_end()
    {
    }
}
/**
 * Bundled Item Data class.
 *
 * A container that represents a bundled item and handles CRUD - @see WC_PB_Install::get_schema(). Simplified version of @see WC_Data.
 * Could be modified to extend WC_Data in the future. For now, all required functionality is self-contained to maintain WC back-compat.
 *
 * @class    WC_Bundled_Item_Data
 * @version  6.16.0
 */
class WC_Bundled_Item_Data
{
    /**
     * Data array, with defaults.
     *
     * @var array
     */
    protected $data = array('bundled_item_id' => 0, 'product_id' => 0, 'bundle_id' => 0, 'menu_order' => 0);
    /**
     * Stores meta data, defaults included.
     * Meta keys are assumed unique by default. No meta is internal.
     *
     * @var array
     */
    protected $meta_data = array('quantity_min' => 1, 'quantity_max' => 1, 'quantity_default' => 1, 'priced_individually' => 'no', 'shipped_individually' => 'no', 'override_title' => 'no', 'title' => '', 'override_description' => 'no', 'description' => '', 'optional' => 'no', 'hide_thumbnail' => 'no', 'discount' => \null, 'override_variations' => 'no', 'override_default_variation_attributes' => 'no', 'allowed_variations' => \null, 'default_variation_attributes' => \null, 'single_product_visibility' => 'visible', 'cart_visibility' => 'visible', 'order_visibility' => 'visible', 'single_product_price_visibility' => 'visible', 'cart_price_visibility' => 'visible', 'order_price_visibility' => 'visible', 'stock_status' => \null, 'max_stock' => \null);
    /**
     * Sanitization function to apply to known meta values on the way in - @see sanitize_meta_value().
     *
     * @var array
     */
    protected $meta_data_type_fn = array('quantity_min' => 'absint', 'quantity_max' => 'absint_if_not_empty', 'quantity_default' => 'absint', 'priced_individually' => 'yes_or_no', 'shipped_individually' => 'yes_or_no', 'override_title' => 'yes_or_no', 'title' => 'strval', 'override_description' => 'yes_or_no', 'description' => 'strval', 'optional' => 'yes_or_no', 'hide_thumbnail' => 'yes_or_no', 'discount' => 'format_decimal_if_not_empty', 'override_variations' => 'yes_or_no', 'override_default_variation_attributes' => 'yes_or_no', 'allowed_variations' => 'maybe_unserialize', 'default_variation_attributes' => 'maybe_unserialize', 'single_product_visibility' => 'visible_or_hidden', 'cart_visibility' => 'visible_or_hidden', 'order_visibility' => 'visible_or_hidden', 'single_product_price_visibility' => 'visible_or_hidden', 'cart_price_visibility' => 'visible_or_hidden', 'order_price_visibility' => 'visible_or_hidden', 'stock_status' => 'strval', 'max_stock' => 'absint_if_not_empty');
    /**
     * Change data to JSON format.
     *
     * @return string
     */
    public function __toString()
    {
    }
    /**
     * Constructor.
     *
     * @param  int|object|array  $item  ID to load from the DB (optional) or already queried data.
     */
    public function __construct($item = 0)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Getters
    |--------------------------------------------------------------------------
    */
    /**
     * Returns all data for this object.
     *
     * @return array
     */
    public function get_data()
    {
    }
    /**
     * Get bundled item ID.
     *
     * @return int
     */
    public function get_id()
    {
    }
    /**
     * Get bundled item ID.
     *
     * @return int
     */
    public function get_bundled_item_id()
    {
    }
    /**
     * Get bundled product ID.
     *
     * @return int
     */
    public function get_product_id()
    {
    }
    /**
     * Get product bundle ID.
     *
     * @return int
     */
    public function get_bundle_id()
    {
    }
    /**
     * Get bundled item menu order.
     *
     * @return int
     */
    public function get_menu_order()
    {
    }
    /**
     * Get All Meta Data.
     *
     * @return array
     */
    public function get_meta_data()
    {
    }
    /**
     * Cleans null value meta when getting.
     *
     * @param  mixed  $value
     * @return boolean
     */
    private function has_meta_value($value)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Setters
    |--------------------------------------------------------------------------
    */
    /**
     * Set all data based on input array.
     *
     * @param  array  $data
     */
    public function set_all($data)
    {
    }
    /**
     * Set ID.
     *
     * @param  int  $value
     */
    public function set_id($value)
    {
    }
    /**
     * Set bundled item ID.
     *
     * @param  int  $value
     */
    public function set_bundled_item_id($value)
    {
    }
    /**
     * Set bundled product ID.
     *
     * @param  int  $value
     */
    public function set_product_id($value)
    {
    }
    /**
     * Set product bundle is.
     *
     * @param  int  $value
     */
    public function set_bundle_id($value)
    {
    }
    /**
     * Set bundled item menu order.
     *
     * @param  int  $value
     */
    public function set_menu_order($value)
    {
    }
    /**
     * Set all meta data from array.
     *
     * @param  array  $data
     */
    public function set_meta_data($data)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | CRUD methods
    |--------------------------------------------------------------------------
    |
    | Methods which create, read, update and delete data from the database.
    |
    */
    /**
     * Insert data into the database.
     */
    private function create()
    {
    }
    /**
     * Update data in the database.
     */
    private function update()
    {
    }
    /**
     * Read from the database.
     *
     * @param  int  $item
     */
    public function read($item)
    {
    }
    /**
     * Validates before saving for sanity.
     *
     * @since  5.2.0
     */
    public function validate()
    {
    }
    /**
     * Save data to the database.
     *
     * @return int
     */
    public function save()
    {
    }
    /**
     * Delete data from the database.
     */
    public function delete()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Meta methods
    |--------------------------------------------------------------------------
    */
    /**
     * Get Meta by Key.
     *
     * @param  string  $key
     * @return mixed
     */
    public function get_meta($key)
    {
    }
    /**
     * Add meta data.
     *
     * @param  string  $key
     * @param  string  $value
     */
    public function add_meta($key, $value)
    {
    }
    /**
     * Add meta data.
     *
     * @param  string  $key
     * @param  string  $value
     */
    public function update_meta($key, $value)
    {
    }
    /**
     * Delete meta data.
     *
     * @param  array  $key
     */
    public function delete_meta($key)
    {
    }
    /**
     * Read meta data from the database.
     */
    protected function read_meta_data()
    {
    }
    /**
     * Update Meta Data in the database.
     */
    protected function save_meta_data()
    {
    }
    /**
     * Meta value type sanitization on the way in.
     *
     * @param  mixed   $meta_value
     * @param  string  $meta_key
     */
    private function sanitize_meta_value($meta_value, $meta_key)
    {
    }
}
/**
 * Product Bundles Data class.
 *
 * Product Bundles Data filters and includes.
 *
 * @class    WC_PB_Data
 * @version  5.5.0
 */
class WC_PB_Data
{
    public static function init()
    {
    }
    /**
     * Registers the Product Bundle Custom Post Type data store.
     *
     * @param  array  $stores
     * @return array
     */
    public static function register_bundle_type_data_store($stores)
    {
    }
}
/**
 * Product Bundles DB API class.
 *
 * Product Bundles DB API for manipulating bundled item data in the database.
 *
 * @class    WC_PB_DB
 * @version  6.4.2
 */
class WC_PB_DB
{
    public static function init()
    {
    }
    /**
     * Make WP see 'bundled_item' as a meta type.
     */
    public static function wpdb_bundled_items_table_fix()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Bundled Items.
    |--------------------------------------------------------------------------
    */
    /**
     * Query bundled item data from the DB.
     *
     * @param  array  $args  {
     *     @type  string     $return           Return array format:
     *
     *         - 'all': entire row casted to array,
     *         - 'ids': bundled item ids only,
     *         - 'id=>bundle_id': map of bundled item ids / bundle ids,
     *         - 'id=>product_id': map of bundled item ids / bundled product ids,
     *         - 'objects': WC_Bundled_Item_Data objects.
     *         - 'count': count.
     *
     *     @type  int|array  $bundled_item_id  Bundled item id(s) in WHERE clause.
     *     @type  int|array  $product_id       Bundled product id(s) in WHERE clause.
     *     @type  int|array  $bundle_id        Bundle id(s) in WHERE clause.
     *     @type  array      $order_by         ORDER BY field => order pairs.
     *     @type  array      $meta_query       Bundled item meta query parameters, uses 'WP_Meta_Query' - see https://codex.wordpress.org/Class_Reference/WP_Meta_Query .
     * }
     *
     * @return array
     */
    public static function query_bundled_items($args)
    {
    }
    /**
     * Create a bundled item in the DB.
     *
     * @param  array  $args
     * @return false|int
     */
    public static function add_bundled_item($args)
    {
    }
    /**
     * Get a bundled item from the DB.
     *
     * @param  mixed  $item
     * @return false|WC_Bundled_Item_Data
     */
    public static function get_bundled_item($item)
    {
    }
    /**
     * Update a bundled item in the DB.
     *
     * @param  mixed  $item
     * @param  array  $data
     * @return boolean
     */
    public static function update_bundled_item($item, $data)
    {
    }
    /**
     * Delete a bundled item from the DB.
     *
     * @param  mixed  $item
     * @return void
     */
    public static function delete_bundled_item($item)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Bundled Item Meta.
    |--------------------------------------------------------------------------
    */
    /**
     * Add bundled item meta to the DB. Unique only.
     *
     * @access public
     * @param  mixed  $item_id
     * @param  mixed  $meta_key
     * @param  mixed  $meta_value
     * @return int
     */
    public static function add_bundled_item_meta($item_id, $meta_key, $meta_value)
    {
    }
    /**
     * Get bundled item meta from the DB. Unique only.
     *
     * @param  int     $item_id
     * @param  string  $key
     * @return mixed
     */
    public static function get_bundled_item_meta($item_id, $key = '')
    {
    }
    /**
     * Update bundled item meta in the DB. Unique only.
     *
     * @param  mixed   $item_id
     * @param  string  $meta_key
     * @param  mixed   $meta_value
     * @param  string  $prev_value
     * @return boolean
     */
    public static function update_bundled_item_meta($item_id, $meta_key, $meta_value, $prev_value = '')
    {
    }
    /**
     * Delete bundled item meta from the DB.
     *
     * @param  int      $item_id
     * @param  string   $meta_key
     * @param  string   $meta_value
     * @param  boolean  $delete_all
     * @return boolean
     */
    public static function delete_bundled_item_meta($item_id, $meta_key, $meta_value = '', $delete_all = \false)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Bulk operations.
    |--------------------------------------------------------------------------
    */
    /**
     * Bulk update bundled item meta in the DB.
     *
     * @since  5.8.0
     *
     * @param  array   $item_ids
     * @param  string  $meta_key
     * @param  mixed   $meta_value
     * @return boolean
     */
    public static function bulk_update_bundled_item_meta($bundled_item_ids, $meta_key, $meta_value)
    {
    }
    /**
     * Flush bundled items stock meta.
     *
     * @since  5.8.0
     *
     * @param  array  $bundled_item_ids
     */
    public static function bulk_delete_bundled_item_stock_meta($bundled_item_ids = array())
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Deprecated methods.
    |--------------------------------------------------------------------------
    */
    public static function delete_bundled_items_stock_meta($map = '')
    {
    }
    public static function flush_stock_cache($where = '')
    {
    }
}
/**
 * WC Product Bundle Data Store class
 *
 * Bundle data stored as Custom Post Type. For use with the WC 2.7+ CRUD API.
 *
 * @class    WC_Product_Bundle_Data_Store_CPT
 * @version  6.12.0
 */
class WC_Product_Bundle_Data_Store_CPT extends \WC_Product_Data_Store_CPT
{
    /**
     * Data stored in meta keys, but not considered "meta" for the Bundle type.
     * @var array
     */
    protected $extended_internal_meta_keys = array('_wcpb_min_qty_limit', '_wcpb_max_qty_limit', '_wc_pb_virtual_bundle', '_wc_pb_layout_style', '_wc_pb_group_mode', '_wc_pb_bundle_stock_quantity', '_wc_pb_bundled_items_stock_status', '_wc_pb_bundled_items_stock_sync_status', '_wc_pb_base_price', '_wc_pb_base_regular_price', '_wc_pb_base_sale_price', '_wc_pb_edit_in_cart', '_wc_pb_aggregate_weight', '_wc_pb_sold_individually_context', '_wc_pb_add_to_cart_form_location', '_wc_sw_max_price', '_wc_sw_max_regular_price');
    /**
     * Maps extended properties to meta keys.
     * @var array
     */
    protected $props_to_meta_keys = array('min_bundle_size' => '_wcpb_min_qty_limit', 'max_bundle_size' => '_wcpb_max_qty_limit', 'virtual_bundle' => '_wc_pb_virtual_bundle', 'layout' => '_wc_pb_layout_style', 'group_mode' => '_wc_pb_group_mode', 'bundle_stock_quantity' => '_wc_pb_bundle_stock_quantity', 'bundled_items_stock_status' => '_wc_pb_bundled_items_stock_status', 'bundled_items_stock_sync_status' => '_wc_pb_bundled_items_stock_sync_status', 'price' => '_wc_pb_base_price', 'regular_price' => '_wc_pb_base_regular_price', 'sale_price' => '_wc_pb_base_sale_price', 'editable_in_cart' => '_wc_pb_edit_in_cart', 'aggregate_weight' => '_wc_pb_aggregate_weight', 'sold_individually_context' => '_wc_pb_sold_individually_context', 'add_to_cart_form_location' => '_wc_pb_add_to_cart_form_location', 'min_raw_price' => '_price', 'min_raw_regular_price' => '_regular_price', 'max_raw_price' => '_wc_sw_max_price', 'max_raw_regular_price' => '_wc_sw_max_regular_price');
    /**
     * Callback to exclude bundle-specific meta data.
     *
     * @param  object  $meta
     * @return bool
     */
    protected function exclude_internal_meta_keys($meta)
    {
    }
    /**
     * Reads all bundle-specific post meta.
     *
     * @param  WC_Product_Bundle  $product
     */
    protected function read_product_data(&$product)
    {
    }
    /**
     * Writes all bundle-specific post meta.
     *
     * @param  WC_Product_Bundle  $product
     * @param  boolean            $force
     */
    protected function update_post_meta(&$product, $force = \false)
    {
    }
    /**
     * Handle updated meta props after updating meta data.
     *
     * @param  WC_Product_Bundle  $product
     */
    protected function handle_updated_props(&$product)
    {
    }
    /**
     * Writes the stock sync meta to the DB.
     *
     * @param  WC_Product_Bundle  $product
     * @param  array              $props_to_save
     */
    public function save_stock_sync_props(&$product, $props_to_save)
    {
    }
    /**
     * Get data to save to a lookup table.
     *
     * @since  4.0.0
     *
     * @param  int     $id
     * @param  string  $table
     * @return array
     */
    protected function get_data_for_lookup_table($id, $table)
    {
    }
    /**
     * Writes bundle raw price meta to the DB.
     *
     * @since  6.5.0
     *
     * @param  WC_Product_Bundle  $product
     */
    public function save_raw_price_props(&$product)
    {
    }
    /**
     * Prepares the specified bundle IDs for re-syncing.
     *
     * @param  array  $bundle_ids
     * @return void
     */
    public function reset_bundled_items_stock_status($bundle_ids = array())
    {
    }
    /**
     * Deletes the bundled items stock status sync meta of the specified IDs.
     *
     * @since  6.5.0
     *
     * @param  array  $ids
     * @return void
     */
    public function delete_bundled_items_stock_sync_status($ids)
    {
    }
    /**
     * Gets bundle IDs having a bundled items stock sync status.
     *
     * @since  6.5.0
     *
     * @return array
     */
    public function get_bundled_items_stock_sync_status_ids($status)
    {
    }
    /**
     * Deletes the bundled items stock status meta of the specified IDs.
     *
     * @param  array  $ids
     * @return void
     */
    public function delete_bundled_items_stock_status($ids)
    {
    }
    /**
     * Gets bundle IDs having a bundled items stock status.
     *
     * @return array
     */
    public function get_bundled_items_stock_status_ids($status)
    {
    }
    /**
     * Use 'WP_Query' to preload product data from the 'posts' table.
     * Useful when we know we are going to call 'wc_get_product' against a list of IDs.
     *
     * @since  5.5.3
     *
     * @param  array  $ids
     * @return void
     */
    public function preload_bundled_product_data($ids)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Deprecated methods.
    |--------------------------------------------------------------------------
    */
    public function save_bundled_items_stock_sync_status(&$product)
    {
    }
    public function save_bundled_items_stock_status(&$product)
    {
    }
    public function save_raw_prices(&$product)
    {
    }
}
/**
 * Abstract class used as the foundation for PB modules.
 *
 * @version  5.8.0
 */
abstract class WCS_PB_Abstract_Module
{
    /**
     * Sub-modules to instantiate.
     * @var array
     */
    protected $submodules = array();
    /**
     * Handles module initialization.
     *
     * @return void
     */
    public function __construct()
    {
    }
    /**
     * Include submodules.
     *
     * @return void
     */
    protected function register_submodules()
    {
    }
    /**
     * Initialize submodules.
     *
     * @return void
     */
    protected function initialize_submodules()
    {
    }
    /**
     * Load sub-module components.
     *
     * @param  string  $component
     * @return void
     */
    protected function load_submodule_components($component)
    {
    }
    /**
     * Load module component.
     *
     * @param  string  $component
     * @return void
     */
    public function load_component($component)
    {
    }
}
/**
 * Bundle-Sells Module
 *
 * @version  5.8.0
 */
class WC_PB_BS_Module extends \WCS_PB_Abstract_Module
{
    /**
     * Core.
     */
    public function load_core()
    {
    }
    /**
     * Cart.
     */
    public function load_cart()
    {
    }
    /**
     * Order.
     */
    public function load_order()
    {
    }
    /**
     * Display.
     */
    public function load_display()
    {
    }
}
/**
 * Admin functions and filters.
 *
 * @class    WC_PB_BS_Admin
 * @version  6.21.0
 */
class WC_PB_BS_Admin
{
    /**
     * Setup hooks.
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
     * Display Bundle-Sells multiselect.
     */
    public static function bundle_sells_options()
    {
    }
    /**
     * Process and save posted Bundle-Sells.
     */
    public static function process_bundle_sells_options($product)
    {
    }
    /**
     * Ajax search for bundled variations.
     */
    public static function ajax_search_bundle_sells()
    {
    }
    /**
     * Include only simple products in bundle-sell results.
     *
     * @param  array  $search_results
     * @return array
     */
    public static function filter_ajax_search_results($search_results)
    {
    }
}
/**
 * Cart-related functions and filters.
 *
 * @class    WC_PB_BS_Cart
 * @version  6.12.0
 */
class WC_PB_BS_Cart
{
    /**
     * Internal flag for bypassing filters.
     *
     * @var array
     */
    private static $bypass_filters = array();
    /**
     * Setup hooks.
     */
    public static function init()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Application layer functions.
    |--------------------------------------------------------------------------
    */
    /**
     * Get the posted bundle-sells configuration of a product.
     *
     * @param  WC_Product  $product
     * @return array
     */
    public static function get_posted_bundle_sells_configuration($product)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Filter hooks.
    |--------------------------------------------------------------------------
    */
    /**
     * Validates add-to-cart for bundle-sells.
     *
     * @param  boolean  $add
     * @param  int      $product_id
     * @param  int      $quantity
     * @param  mixed    $variation_id
     * @param  array    $variations
     * @param  array    $cart_item_data
     * @return boolean
     */
    public static function validate_add_to_cart($add, $product_id, $quantity, $variation_id = '', $variations = array(), $cart_item_data = array())
    {
    }
    /**
     * Adds bundle-sells to the cart on the 'woocommerce_add_to_cart' action.
     * Important: This must run before WooCommerce sets cart session data on 'woocommerce_add_to_cart' (20).
     *
     * @param  string  $parent_cart_item_key
     * @param  int     $parent_id
     * @param  int     $parent_quantity
     * @param  int     $variation_id
     * @param  array   $variation
     * @param  array   $cart_item_data
     * @return void
     */
    public static function bundle_sells_add_to_cart($parent_cart_item_key, $parent_id, $parent_quantity, $variation_id, $variation, $cart_item_data)
    {
    }
    /**
     * Filter the add-to-cart success message to include bundle-sells.
     *
     * @param  string  $message
     * @param  array   $products
     * @return string
     */
    public static function bundle_sells_add_to_cart_message_html($message, $products)
    {
    }
    /**
     * Allow bundle-sell discounts to be applied by PB.
     *
     * @since  6.0.0
     *
     * @param  array  $cart
     * @return array
     */
    public static function load_bundle_sells_into_session($cart)
    {
    }
}
/**
 * Display-related functions and filters.
 *
 * @class    WC_PB_BS_Display
 * @version  6.21.0
 */
class WC_PB_BS_Display
{
    /**
     * Setup hooks.
     */
    public static function init()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Application layer functions.
    |--------------------------------------------------------------------------
    */
    /**
     * Adds logic for overriding bundled-item template file locations.
     *
     * @return void
     */
    public static function apply_bundled_item_template_overrides()
    {
    }
    /**
     * Resets all added logic for overriding bundled-item template file locations.
     *
     * @return void
     */
    public static function reset_bundled_item_template_overrides()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Filter/action hooks.
    |--------------------------------------------------------------------------
    */
    /**
     * Add hooks necessary to display Bundle-Sells in single-product templates.
     */
    public static function add_bundle_sells_display_hooks()
    {
    }
    /**
     * Displays Bundle-Sells above the add-to-cart button.
     *
     * @return void
     */
    public static function display_bundle_sells()
    {
    }
    /**
     * Filters the default bundled-item template file location for use in bundle-selling context.
     *
     * @param  string  $template
     * @param  string  $template_name
     * @param  string  $template_args
     * @param  string  $template_path
     * @return string
     */
    public static function get_bundled_item_template_location($template, $template_name, $template_args, $template_path)
    {
    }
    /**
     * Add "Discount applied:" cart item data to bundle sells.
     *
     * @param  array  $data
     * @param  array  $cart_item
     * @return array
     */
    public static function bundle_sell_data($data, $cart_item)
    {
    }
}
/**
 * Order-related functions and filters.
 *
 * @class    WC_PB_BS_Order
 * @version  5.8.0
 */
class WC_PB_BS_Order
{
    /**
     * Setup hooks.
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
     * Add bundle-sell meta to order items.
     *
     * @param  WC_Order_Item  $order_item
     * @param  string         $cart_item_key
     * @param  array          $cart_item
     * @return void
     */
    public static function add_bundle_sell_order_item_meta($order_item, $cart_item_key, $cart_item)
    {
    }
}
/**
 * Product-related functions and filters.
 *
 * @class    WC_PB_BS_Product
 * @version  6.15.4
 */
class WC_PB_BS_Product
{
    /*
    |--------------------------------------------------------------------------
    | Application layer functions.
    |--------------------------------------------------------------------------
    */
    /**
     * Get bundle-sells IDs for a product.
     *
     * @param  mixed  $product
     * @return array
     */
    public static function get_bundle_sell_ids($product, $context = 'view')
    {
    }
    /**
     * Prompt/title displayed above the bundle-sells section in single-product pages.
     *
     * @param  mixed  $product
     * @return string
     */
    public static function get_bundle_sells_title($product, $context = 'view')
    {
    }
    /**
     * Bundle-sells discount.
     *
     * @since  6.0.0
     *
     * @param  mixed  $product
     * @return string
     */
    public static function get_bundle_sells_discount($product, $context = 'view')
    {
    }
    /**
     * Arguments used to create new bundled item data objects from bundle-sell IDs.
     *
     * @param  int         $bundle_sell_id  The bundle-sell ID.
     * @param  WC_Product  $product         The parent product.
     * @return array
     */
    public static function get_bundle_sell_data_item_args($bundle_sell_id, $product)
    {
    }
    /**
     * Creates a "runtime" bundle object from a list of bundle-sell IDs.
     *
     * @param  array       $bundle_sell_ids  Array of bundle-sell IDs.
     * @param  WC_Product  $product          Product containing the bundle-sells.
     * @return WC_Product_Bundle
     */
    public static function get_bundle($bundle_sell_ids, $product)
    {
    }
    /**
     * Get product types that don't support bundle-sells.
     *
     * @since  6.13.0
     *
     * @return array
     */
    public static function get_unsupported_product_types()
    {
    }
    /**
     * True if product supports bundle-sells.
     *
     * @since  6.13.0
     *
     * @param  mixed  $product
     * @return boolean
     */
    public static function supports_bundle_sells($product)
    {
    }
}
/**
 * Extend REST API to support bundle-sells.
 *
 * @class    WC_PB_BS_REST_API
 * @version  6.14.0
 */
class WC_PB_BS_REST_API
{
    /**
     * Custom REST API product field names, indicating support for getting/updating.
     *
     * @var array
     */
    private static $product_fields = array('bundle_sell_ids' => array('get', 'update'));
    /**
     * Setup REST API bundle-sells class.
     */
    public static function init()
    {
    }
    /**
     * Register custom REST API fields for product requests.
     */
    public static function register_product_fields()
    {
    }
    /**
     * Gets schema properties for PB product fields.
     *
     * @param  string  $field_name
     * @return array
     */
    public static function get_product_field_schema($field_name)
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
     * Gets values for PB product fields.
     *
     * @param  array            $response
     * @param  string           $field_name
     * @param  WP_REST_Request  $request
     * @return array
     */
    public static function get_product_field_value($response, $field_name, $request)
    {
    }
    /**
     * Updates values for bundle-sells product fields.
     *
     * @param  mixed   $field_value
     * @param  mixed   $response
     * @param  string  $field_name
     *
     * @return boolean
     */
    public static function update_product_field_value($field_value, $response, $field_name)
    {
    }
    /**
     * Gets bundle-sells specific product data.
     *
     * @param  string      $key
     * @param  WC_Product  $product
     *
     * @return array
     */
    private static function get_product_field($key, $product)
    {
    }
}
/**
 * PB Modules Loader
 *
 * @version  6.21.0
 */
class WC_PB_Modules
{
    /**
     * The single instance of the class.
     * @var WC_PB_Modules
     */
    protected static $_instance = \null;
    /**
     * Modules to instantiate.
     * @var array
     */
    protected $modules = array();
    /**
     * Main WC_PB_Modules instance. Ensures only one instance of WC_PB_Modules is loaded or can be loaded.
     *
     * @static
     * @return WC_PB_Modules
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
     * Handles module initialization.
     *
     * @return void
     */
    public function __construct()
    {
    }
    /**
     * Loads module functionality associated with a named component.
     *
     * @param  string  $name
     */
    public function load_components($name)
    {
    }
}
/**
 * Bundle-Sells Module
 *
 * @version  6.4.0
 */
class WC_PB_MMI_Module extends \WCS_PB_Abstract_Module
{
    /**
     * Core.
     */
    public function load_core()
    {
    }
    /**
     * Cart.
     */
    public function load_cart()
    {
    }
    /**
     * Display.
     */
    public function load_display()
    {
    }
}
/**
 * Admin functions and filters.
 *
 * @class    WC_PB_MMI_Admin
 * @version  6.6.0
 */
class WC_PB_MMI_Admin
{
    /**
     * Setup hooks.
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
     * Admin min/max settings.
     */
    public static function display_options()
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
}
/**
 * Cart-related functions and filters.
 *
 * @class    WC_PB_MMI_Cart
 * @version  6.4.0
 */
class WC_PB_MMI_Cart
{
    /**
     * Setup hooks.
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
     * Add-to-Cart validation.
     *
     * @param  bool                 $is_valid
     * @param  int                  $bundle_id
     * @param  WC_PB_Stock_Manager  $stock_data
     * @param  array                $configuration
     * @return boolean
     */
    public static function add_to_cart_validation($is_valid, $bundle_id, $stock_data, $configuration = array())
    {
    }
    /**
     * Cart validation.
     *
     * @throws Exception
     *
     * @param  bool                 $is_valid
     * @param  int                  $bundle_id
     * @param  WC_PB_Stock_Manager  $stock_data
     * @param  array                $configuration
     * @return boolean
     */
    public static function cart_validation($is_valid, $bundle_id, $stock_data, $configuration = array())
    {
    }
}
/**
 * Display-related functions and filters.
 *
 * @class    WC_PB_MMI_Display
 * @version  6.6.0
 */
class WC_PB_MMI_Display
{
    /**
     * Setup hooks.
     */
    public static function init()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Filter/action hooks.
    |--------------------------------------------------------------------------
    */
    /**
     * Validation script.
     */
    public static function enqueue_script()
    {
    }
    /**
     * Pass min/max container values to the single-product script.
     *
     * @param  array              $data
     * @param  WC_Product_Bundle  $product
     * @return void
     */
    public static function script_data($data, $product)
    {
    }
}
/**
 * Product-related functions and filters.
 *
 * @class    WC_PB_MMI_Product
 * @version  6.15.4
 */
class WC_PB_MMI_Product
{
    /**
     * Setup hooks.
     */
    public static function init()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Application layer functions.
    |--------------------------------------------------------------------------
    */
    /**
     * Indicates if a bundle has min/max size rules in effect.
     *
     * @since  6.5.0
     *
     * @param  WC_Product_Bundle  $bundle
     * @return boolean
     */
    public static function has_limited_bundle_size($bundle)
    {
    }
    /**
     * Find the price-optimized set of bundled item quantities that meet the min item count constraint while honoring the initial min/max item quantity constraints.
     *
     * @param  WC_Product  $product
     * @return array
     */
    public static function get_min_price_quantities($bundle)
    {
    }
    /**
     * Find the worst-price set of bundled item quantities that meet the max item count constraint while honoring the initial min/max item quantity constraints.
     *
     * @param  WC_Product  $product
     * @return array
     */
    public static function get_max_price_quantities($bundle)
    {
    }
    /**
     * Sort array data by price.
     *
     * @param  array $a
     * @param  array $b
     * @return -1|0|1
     */
    public static function sort_by_price($a, $b)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Filter hooks.
    |--------------------------------------------------------------------------
    */
    /**
     * Filter bundled item min quantities used in sync/price context.
     *
     * @param  int              $qty
     * @param  WC_Bundled_Item  $bundled_item
     * @param  array            $args
     * @return int
     */
    public static function bundled_item_quantity($qty, $bundled_item, $args = array())
    {
    }
    /**
     * Filter bundled item max quantities used in sync/price context.
     *
     * @param  int              $qty
     * @param  WC_Bundled_Item  $bundled_item
     * @param  array            $args
     * @return int
     */
    public static function bundled_item_quantity_max($qty, $bundled_item, $args = array())
    {
    }
    /**
     * When min/max qty constraints are present and the quantity of items in the bundle can be adjusted, require input.
     *
     * @param  bool               $requires_input
     * @param  WC_Product_Bundle  $bundle
     */
    public static function min_max_bundle_requires_input($requires_input, $bundle)
    {
    }
    /**
     * Makes sure the bundled items stock status takes the min bundle size into account.
     *
     * @since  6.5.0
     *
     * @param  string             $bundled_items_stock_status
     * @param  WC_Product_Bundle  $bundle
     * @return string
     */
    public static function synced_bundled_items_stock_status($bundled_items_stock_status, $bundle)
    {
    }
    /**
     * Makes sure the bundle stock quantity takes the min bundle size into account.
     *
     * @since  6.5.0
     *
     * @param  string             $bundle_stock_quantity
     * @param  WC_Product_Bundle  $bundle
     * @return string
     */
    public static function synced_bundle_stock_quantity($bundle_stock_quantity, $bundle)
    {
    }
    /**
     * Make sure the bundle thinks it has 'mandatory' contents when the min bundle size is > 0.
     *
     * @since  6.5.2
     *
     * @param  array              $data
     * @param  WC_Product_Bundle  $bundle
     * @return string
     */
    public static function synced_contents_data($data, $bundle)
    {
    }
}
/**
 * Main plugin class.
 *
 * @class    WC_Bundles
 * @version  6.22.0
 */
class WC_Bundles
{
    public $version = '6.22.0';
    public $required = '3.9.0';
    /**
     * The single instance of the class.
     * @var WC_Bundles
     *
     * @since 4.11.4
     */
    protected static $_instance = \null;
    /**
     * Main WC_Bundles instance. Ensures only one instance of WC_Bundles is loaded or can be loaded - @see 'WC_PB()'.
     *
     * @static
     * @return WC_Bundles
     * @since  4.11.4
     */
    public static function instance()
    {
    }
    /**
     * Cloning is forbidden.
     *
     * @since 4.11.4
     */
    public function __clone()
    {
    }
    /**
     * Unserializing instances of this class is forbidden.
     *
     * @since 4.11.4
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
     * Auto-load in-accessible properties.
     *
     * @param  mixed  $key
     * @return mixed
     */
    public function __get($key)
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
     * Plugin path getter.
     *
     * @return string
     */
    public function plugin_path()
    {
    }
    /**
     * Plugin base path name getter.
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
     * @since  5.8.0
     *
     * @param  boolean  $base
     * @param  string   $version
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
     * @since  6.3.0
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
     * Admin & AJAX functions and hooks.
     */
    public function admin_includes()
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
     * @since  6.3.0
     *
     * @param  string  $handle
     * @return string
     */
    public function get_resource_url($handle)
    {
    }
    /**
     * Get the file modified time as a cache buster if we're in dev mode.
     *
     * @since 6.15.0
     *
     * @param  string  $file
     * @return string
     */
    public function get_file_version($file)
    {
    }
    /**
     * Handle plugin activation process.
     *
     * @since  6.16.0
     *
     * @return void
     */
    public function on_activation()
    {
    }
    /**
     * Handle plugin deactivation process.
     *
     * @since  1.12.0
     *
     * @return void
     */
    public function on_deactivation()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Deprecated methods.
    |--------------------------------------------------------------------------
    */
    public function woo_bundles_plugin_url()
    {
    }
    public function woo_bundles_plugin_path()
    {
    }
}
/*
|--------------------------------------------------------------------------
| Cart functions.
|--------------------------------------------------------------------------
*/
/**
 * True if a cart item is a bundle-sell.
 * Instead of relying solely on cart item data, the function also checks that the alleged parent item actually exists.
 *
 * @since  5.8.0
 *
 * @param  array  $cart_item
 * @param  array  $cart_contents
 * @return boolean
 */
function wc_pb_is_bundle_sell_cart_item($cart_item, $cart_contents = \false)
{
}
/**
 * Given a bundle-sell cart item, find and return its parent cart item.
 * Returns the cart key of its parent cart item when the $return_id arg is true.
 *
 * @since  5.8.0
 *
 * @param  array    $cart_item
 * @param  array    $cart_contents
 * @param  boolean  $return_id
 * @return mixed
 */
function wc_pb_get_bundle_sell_cart_item_container($cart_item, $cart_contents = \false, $return_id = \false)
{
}
/**
 * Given a bundle-sells parent cart item, find and return its child cart items -- or their cart ids when the $return_ids arg is true.
 *
 * @since  5.8.0
 *
 * @param  array    $cart_item
 * @param  array    $cart_contents
 * @param  boolean  $return_ids
 * @return mixed
 */
function wc_pb_get_bundle_sell_cart_items($cart_item, $cart_contents = \false, $return_ids = \false)
{
}
function wc_bundles_dropdown_variation_attribute_options($args = array())
{
}
function wc_bundles_get_price_decimals()
{
}
function wc_bundles_get_product_terms($product_id, $attribute_name, $args)
{
}
function wc_bundles_attribute_label($arg)
{
}
function wc_bundles_attribute_order_by($arg)
{
}
function wc_bundles_get_template($file, $data, $empty, $path)
{
}
/*
|--------------------------------------------------------------------------
| Products.
|--------------------------------------------------------------------------
*/
/**
 * Create a WC_Bundled_Item instance.
 *
 * @since  5.0.0
 *
 * @param  mixed  $item
 * @param  mixed  $parent
 * @return mixed
 */
function wc_pb_get_bundled_item($item, $parent = \false)
{
}
/**
 * Get a map of the bundled item DB IDs and product bundle post IDs associated with a (bundled) product.
 *
 * @since  5.0.0
 *
 * @param  mixed    $product
 * @param  boolean  $allow_cache
 * @return array
 */
function wc_pb_get_bundled_product_map($product, $allow_cache = \true)
{
}
/*
|--------------------------------------------------------------------------
| Cart.
|--------------------------------------------------------------------------
*/
/**
 * Given a bundled cart item, find and return its container cart item - the Bundle - or its cart id when the $return_id arg is true.
 *
 * @since  5.0.0
 *
 * @param  array    $bundled_cart_item
 * @param  array    $cart_contents
 * @param  boolean  $return_id
 * @return mixed
 */
function wc_pb_get_bundled_cart_item_container($bundled_cart_item, $cart_contents = \false, $return_id = \false)
{
}
/**
 * Given a bundle container cart item, find and return its child cart items - or their cart ids when the $return_ids arg is true.
 *
 * @since  5.0.0
 *
 * @param  array    $container_cart_item
 * @param  array    $cart_contents
 * @param  boolean  $return_ids
 * @return mixed
 */
function wc_pb_get_bundled_cart_items($container_cart_item, $cart_contents = \false, $return_ids = \false)
{
}
/**
 * True if a cart item is part of a bundle.
 * Instead of relying solely on cart item data, the function also checks that the alleged parent item actually exists.
 *
 * @since  5.0.0
 *
 * @param  array  $cart_item
 * @param  array  $cart_contents
 * @return boolean
 */
function wc_pb_is_bundled_cart_item($cart_item, $cart_contents = \false)
{
}
/**
 * True if a cart item appears to be part of a bundle.
 * The result is purely based on cart item data - the function does not check that a valid parent item actually exists.
 *
 * @since  5.0.0
 *
 * @param  array  $cart_item
 * @return boolean
 */
function wc_pb_maybe_is_bundled_cart_item($cart_item)
{
}
/**
 * True if a cart item appears to be a bundle container item.
 *
 * @since  5.0.0
 *
 * @param  array  $cart_item
 * @return boolean
 */
function wc_pb_is_bundle_container_cart_item($cart_item)
{
}
/*
|--------------------------------------------------------------------------
| Orders.
|--------------------------------------------------------------------------
*/
/**
 * Given a bundled order item, find and return its container order item - the Bundle - or its order item id when the $return_id arg is true.
 *
 * @since  5.0.0
 *
 * @param  WC_Order_Item  $bundled_order_item
 * @param  WC_Order       $order
 * @param  boolean        $return_id
 * @return mixed
 */
function wc_pb_get_bundled_order_item_container($bundled_order_item, $order = \false, $return_id = \false)
{
}
/**
 * Given a bundle container order item, find and return its child order items - or their order item ids when the $return_ids arg is true.
 *
 * @since  5.0.0
 *
 * @param  WC_Order_Item  $container_order_item
 * @param  WC_Order       $order
 * @param  boolean        $return_ids
 * @return mixed
 */
function wc_pb_get_bundled_order_items($container_order_item, $order = \false, $return_ids = \false)
{
}
/**
 * True if an order item is part of a bundle.
 * Instead of relying solely on the existence of item meta, the function also checks that the alleged parent item actually exists.
 *
 * @since  5.0.0
 *
 * @param  WC_Order_Item  $order_item
 * @param  WC_Order       $order
 * @return boolean
 */
function wc_pb_is_bundled_order_item($order_item, $order = \false)
{
}
/**
 * True if an order item appears to be part of a bundle.
 * The result is purely based on item meta - the function does not check that a valid parent item actually exists.
 *
 * @since  5.0.0
 *
 * @param  WC_Order_Item  $order_item
 * @return boolean
 */
function wc_pb_maybe_is_bundled_order_item($order_item)
{
}
/**
 * True if an order item appears to be a bundle container item.
 *
 * @since  5.0.0
 *
 * @param  WC_Order_Item  $order_item
 * @return boolean
 */
function wc_pb_is_bundle_container_order_item($order_item)
{
}
/*
|--------------------------------------------------------------------------
| Formatting.
|--------------------------------------------------------------------------
*/
/**
 * Get precision depending on context.
 *
 * @return string
 */
function wc_pb_price_num_decimals($context = '')
{
}
/*
|--------------------------------------------------------------------------
| Conditionals.
|--------------------------------------------------------------------------
*/
/**
 * True if the current single product page is of a bundle-type product.
 *
 * @since  5.7.0
 *
 * @return boolean
 */
function wc_pb_is_product_bundle()
{
}
/*
|--------------------------------------------------------------------------
| Single-product.
|--------------------------------------------------------------------------
*/
/**
 * Checks whether this product is rendered using a legacy template; an indication that a classic theme is in use.
 * Although a legacy PHP template might be in use with a block theme (via the "Legacy PHP Product Block", the extension does not account for this scenario when gating template features.
 *
 * @since  6.22.0
 *
 * @param  WC_Product  $product
 * @return boolean
 */
function wc_pb_has_legacy_product_template($product)
{
}
/**
 * Add-to-cart template for Product Bundles. Handles the 'Form location > After summary' case.
 *
 * @since  6.14.1
 */
function wc_pb_template_add_to_cart_after_summary()
{
}
/**
 * Add-to-cart template for Product Bundles.
 */
function wc_pb_template_add_to_cart()
{
}
/**
 * Add-to-cart buttons area.
 *
 * @since 5.5.0
 *
 * @param  WC_Product_Bundle  $bundle
 */
function wc_pb_template_add_to_cart_wrap($product)
{
}
/**
 * Add-to-cart button and quantity input.
 */
function wc_pb_template_add_to_cart_button($bundle = \false)
{
}
/**
 * Load the bundled item title template.
 *
 * @param  WC_Bundled_Item    $bundled_item
 * @param  WC_Product_Bundle  $bundle
 */
function wc_pb_template_bundled_item_title($bundled_item, $bundle)
{
}
/**
 * Load the bundled item thumbnail template.
 *
 * @param  WC_Bundled_Item    $bundled_item
 * @param  WC_Product_Bundle  $bundle
 */
function wc_pb_template_bundled_item_thumbnail($bundled_item, $bundle)
{
}
/**
 * Load the bundled item short description template.
 *
 * @param  WC_Bundled_Item    $bundled_item
 * @param  WC_Product_Bundle  $bundle
 */
function wc_pb_template_bundled_item_description($bundled_item, $bundle)
{
}
/**
 * Adds the 'bundled_product' container div.
 *
 * @param  WC_Bundled_Item    $bundled_item
 * @param  WC_Product_Bundle  $bundle
 */
function wc_pb_template_bundled_item_details_wrapper_open($bundled_item, $bundle)
{
}
/**
 * Adds a qty input column when using the tabular template.
 *
 * @param  WC_Bundled_Item    $bundled_item
 * @param  WC_Product_Bundle  $bundle
 */
function wc_pb_template_tabular_bundled_item_qty($bundled_item, $bundle)
{
}
/**
 * Adds a qty input column when using the default template.
 *
 * @param  WC_Bundled_Item  $bundled_item
 */
function wc_pb_template_default_bundled_item_qty($bundled_item)
{
}
/**
 * Close the 'bundled_product' container div.
 *
 * @param  WC_Bundled_Item    $bundled_item
 * @param  WC_Product_Bundle  $bundle
 */
function wc_pb_template_bundled_item_details_wrapper_close($bundled_item, $bundle)
{
}
/**
 * Add a 'details' container div.
 *
 * @param  WC_Bundled_Item    $bundled_item
 * @param  WC_Product_Bundle  $bundle
 */
function wc_pb_template_bundled_item_details_open($bundled_item, $bundle)
{
}
/**
 * Close the 'details' container div.
 *
 * @param  WC_Bundled_Item    $bundled_item
 * @param  WC_Product_Bundle  $bundle
 */
function wc_pb_template_bundled_item_details_close($bundled_item, $bundle)
{
}
/**
 * Display bundled product details templates.
 *
 * @param  WC_Bundled_Item    $bundled_item
 * @param  WC_Product_Bundle  $bundle
 */
function wc_pb_template_bundled_item_product_details($bundled_item, $bundle)
{
}
/**
 * Bundled variation details.
 *
 * @param  int              $product_id
 * @param  WC_Bundled_Item  $bundled_item
 */
function wc_pb_template_single_variation($product_id, $bundled_item)
{
}
/**
 * Bundled variation template.
 *
 * @since  5.6.0
 *
 * @param  int              $product_id
 * @param  WC_Bundled_Item  $bundled_item
 */
function wc_pb_template_single_variation_template($product_id, $bundled_item)
{
}
/**
 * Echo opening tabular markup if necessary.
 *
 * @param  WC_Product_Bundle  $bundle
 */
function wc_pb_template_before_bundled_items($bundle)
{
}
/**
 * Echo closing tabular markup if necessary.
 *
 * @param  WC_Product_Bundle  $bundle
 */
function wc_pb_template_after_bundled_items($bundle)
{
}
/**
 * Display bundled product attributes.
 *
 * @param  WC_Product  $product
 */
function wc_pb_template_bundled_item_attributes($product)
{
}
/**
 * Variation attribute options for bundled items. If:
 *
 * - only a single variation is active,
 * - all attributes have a defined value, and
 * - the single values are actually selected as defaults,
 *
 * ...then wrap the dropdown in a hidden div and show the single attribute value description before it.
 *
 * @param  array  $args
 */
function wc_pb_template_bundled_variation_attribute_options($args)
{
}
/**
 * Compatibility wrapper for getting the element-based block class.
 *
 * @since 6.19.0
 *
 * @param  string  $element
 * @return string
 */
function wc_pb_wp_theme_get_element_class_name($element)
{
}
function wc_pb_update_300()
{
}
function wc_pb_update_300_db_version()
{
}
function wc_pb_update_500_delete_unused_meta()
{
}
function wc_pb_update_500_main($updater = \false)
{
}
function wc_pb_update_v4_meta_to_v5($bundled_item_data, $args = array())
{
}
function wc_pb_update_500_db_version()
{
}
function wc_pb_update_510_main($updater = \false)
{
}
function wc_pb_update_510_delete_unused_meta()
{
}
function wc_pb_update_510_db_version()
{
}
/**
 * Returns the main instance of WC_Bundles to prevent the need to use globals.
 *
 * @since  4.11.4
 * @return WC_Bundles
 */
function WC_PB()
{
}
\define('WC_PB_VERSION', '6.22.0');
