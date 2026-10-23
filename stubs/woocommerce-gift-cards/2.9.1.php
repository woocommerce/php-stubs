<?php
/**
 * Generated stub declarations for woocommerce-gift-cards 2.9.1.
 * @see https://github.com/woocommerce/php-stubs
 */

/**
 * Admin Sync Reports Class.
 *
 * @version 2.9.1
 */
class WC_GC_Admin_Analytics_Sync
{
    /**
     * Used to short circuit 'woocommerce_analytics_update_order_stats' action if the data is already filtered.
     *
     * @var int[]
     */
    protected static $updated_order_ids = array();
    /**
     * Setup Admin class.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Update order stats if triggered.
     *
     * @return void
     */
    public static function handle_trigger_order_stats_update()
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
    public static function queue_order_stats_update()
    {
    }
    /**
     * Schedules a batch of row renenerations for order stats.
     *
     * @param  int       $batch   Batch number.
     * @param  int|float $batches Total number of batches.
     * @return void
     */
    protected static function queue_order_stats_update_batch($batch, $batches)
    {
    }
    /**
     * Indicates whether an order stats regeneration has been attempted in the past.
     *
     * @return boolean
     */
    public static function is_order_stats_update_actioned()
    {
    }
    /**
     * Indicates whether an order stats regeneration is currently queued.
     *
     * @return boolean
     */
    public static function is_order_stats_update_queued()
    {
    }
    /**
     * Regenerates order stats for single batch of orders.
     *
     * @param  int $batch
     * @param  int $batches
     * @return void
     */
    public static function process_order_stats_update_batch($batch, $batches)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Callbacks.
    |--------------------------------------------------------------------------
    */
    /**
     * Filters the order stats data for a single order.
     *
     * @param  array    $data
     * @param  WC_Order $order
     * @return array
     */
    public static function filter_order_stats($data, $order)
    {
    }
    /**
     * Updates the order stats table for a single order.
     *
     * @param  int $order_id
     * @return void
     */
    public static function update_order_stats($order_id)
    {
    }
    /**
     * Adds status tool to regenerate the order stats table.
     *
     * @param  array $tools Debug tools.
     * @return array
     */
    public static function add_regenerate_order_stats_tool($tools)
    {
    }
    /**
     * Handle analytics report's cache invalidation.
     *
     * @param  WC_GC_Gift_Card_Data $giftcard Gift card.
     * @return void
     */
    public static function invalidate_reports_cache($giftcard)
    {
    }
}
/**
 * Gift Cards WooCommerce Analytics.
 *
 * @version 2.9.1
 */
class WC_GC_Admin_Analytics
{
    /**
     * Init.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Setup Analytics.
     *
     * @return void
     */
    public static function setup()
    {
    }
    /**
     * Limit statistics-report bursts through WooCommerce's shared rate-limit storage.
     *
     * @since 2.8.0
     * @param mixed           $response Earlier dispatch result.
     * @param WP_REST_Request $request Current request.
     * @param string          $route Registered route matched by WordPress.
     * @return mixed
     */
    public static function limit_report_request($response, $request, $route)
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
     * Add "Gift Cards" as a Analytics submenu item.
     *
     * @param  array $report_pages  Report page menu items.
     * @return array
     */
    public static function add_report_menu_item($report_pages)
    {
    }
    /**
     * Register analytics JS.
     *
     * @return void
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
 * WC_GC_REST_Reports_Bundles_Data_Store class.
 *
 * @version 2.9.1
 */
abstract class WC_GC_Analytics_Data_Store extends \Automattic\WooCommerce\Admin\API\Reports\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
{
    /**
     * Date field name.
     *
     * @var string
     */
    protected $date_field_name = 'date';
    /**
     * Bound the interval work before a statistics report reaches its cache or SQL.
     *
     * @since 2.8.0
     * @param array $query_args Report arguments.
     * @param array $defaults Default arguments.
     * @throws \Automattic\WooCommerce\Admin\API\Reports\ParameterException When the requested report exceeds its work budget.
     * @return void
     */
    protected function normalize_timezones(&$query_args, $defaults)
    {
    }
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
    /**
     * Fills WHERE clause of SQL request with date-related constraints.
     *
     * @param array  $query_args Parameters supplied by the user.
     * @param string $table_name Name of the db table relevant for the date constraint.
     * @return void
     */
    protected function add_time_period_sql_params($query_args, $table_name)
    {
    }
    /**
     * Fills FROM and WHERE clauses of SQL request for 'Intervals' section of data response based on user supplied parameters.
     *
     * @param array  $query_args Parameters supplied by the user.
     * @param string $table_name Name of the db table relevant for the date constraint.
     * @return void
     */
    protected function add_intervals_sql_params($query_args, $table_name)
    {
    }
    /**
     * @override TimeInterval::db_datetime_format().
     *
     * Returns date format to be used as grouping clause in SQL.
     *
     * @param string $time_interval Time interval.
     * @param string $table_name Name of the db table relevant for the date constraint.
     * @return mixed
     */
    public function db_datetime_format($time_interval, $table_name)
    {
    }
    /**
     * Updates the LIMIT query part for Intervals query of the report.
     *
     * If there are less records in the database than time intervals, then we need to remap offset in SQL query
     * to fetch correct records.
     *
     * @param array  $query_args Query arguments.
     * @param int    $db_interval_count Database interval count.
     * @param int    $expected_interval_count Expected interval count on the output.
     * @param string $table_name Name of the db table relevant for the date constraint.
     * @return void
     */
    protected function update_intervals_sql_params(&$query_args, $db_interval_count, $expected_interval_count, $table_name)
    {
    }
    /**
     * Advance bounded report offsets using native calendar boundaries.
     *
     * @since 2.8.0
     * @param DateTime $date Starting date.
     * @param string   $interval Bucket size.
     * @param int      $count Number of intervals.
     * @param bool     $reversed Whether to move backwards.
     * @return DateTime
     */
    private function advance_interval($date, $interval, $count, $reversed = \false)
    {
    }
    /**
     * Parse date value to be used in SQL queries.
     *
     * @param  mixed $date
     * @return mixed
     */
    public function parse_date_for_sql($date)
    {
    }
}
/**
 * WC_GC_Analytics_Revenue_Data_Store class.
 *
 * @version 2.9.1
 */
class WC_GC_Analytics_Expired_Data_Store extends \WC_GC_Analytics_Data_Store
{
    /**
     * Table used to get the data.
     *
     * @var string
     */
    protected static $table_name = 'woocommerce_gc_cards';
    /**
     * Date field name.
     *
     * @var string
     */
    protected $date_field_name = 'expire_date';
    /**
     * Cache identifier.
     *
     * @var string
     */
    protected $cache_key = 'giftcards_expired';
    /**
     * Mapping columns to data type to return correct response types.
     *
     * @var array<string, string>
     */
    protected $column_types = array('date_start' => 'strval', 'date_end' => 'strval', 'giftcard_id' => 'intval', 'giftcard_code' => 'strval', 'expired_balance' => 'floatval', 'create_date' => 'strval', 'expire_date' => 'strval');
    /**
     * Extended giftcard attributes to include in the data. @TODO: remove this.
     *
     * @var array
     */
    protected $extended_attributes = array();
    /**
     * Data store context used to pass to filters.
     *
     * @var string
     */
    protected $context = 'giftcards';
    /**
     * Assign report columns once full table name has been assigned.
     *
     * @return void
     */
    protected function assign_report_columns()
    {
    }
    /**
     * Set up all the hooks for maintaining and populating table data.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Updates the database query with parameters used for Products report: categories and order status.
     *
     * @param array $query_args Query arguments supplied by the user.
     * @return void
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
     *
     * @return void
     */
    protected function initialize_queries()
    {
    }
}
/**
 * WC_GC_Analytics_Revenue_Query class.
 *
 * @version 2.8.0
 */
class WC_GC_Analytics_Expired_Query extends \Automattic\WooCommerce\Admin\API\Reports\GenericQuery
{
    /**
     * Valid fields for report.
     *
     * @return array
     */
    protected function get_default_query_vars()
    {
    }
    /**
     * Get gift card data based on the current query vars.
     *
     * @return stdClass|WP_Error
     */
    public function get_data()
    {
    }
}
/**
 * WC_GC_Analytics_Expired_REST_Controller class.
 *
 * @version 2.9.1
 */
class WC_GC_Analytics_Expired_REST_Controller extends \WC_REST_Reports_Controller implements \Automattic\WooCommerce\Admin\API\Reports\ExportableInterface
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
    protected $rest_base = 'reports/giftcards/expired';
    /**
     * Mapping between external parameter name and name used in query class.
     *
     * @var array
     */
    protected $param_mapping = array();
    /**
     * Get items.
     *
     * @param  WP_REST_Request $request Request data.
     * @return array|WP_Error
     */
    public function get_items($request)
    {
    }
    /**
     * Prepare a report object for serialization.
     *
     * @param  array|stdClass  $report  Report data.
     * @param  WP_REST_Request $request Request object.
     * @return WP_REST_Response
     */
    public function prepare_item_for_response($report, $request)
    {
    }
    /**
     * Prepare links for the request.
     *
     * @param  array $object Object data.
     * @return array
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
     * @param  array $item Single report item/row.
     * @return array Key value pair of Column ID => Row Value.
     */
    public function prepare_item_for_export($item)
    {
    }
}
/**
 * WC_GC_Analytics_Expired_Stats_Data_Store class.
 *
 * @version 2.9.1
 */
class WC_GC_Analytics_Expired_Stats_Data_Store extends \WC_GC_Analytics_Expired_Data_Store
{
    /**
     * Cache identifier.
     *
     * @var string
     */
    protected $cache_key = 'giftcards_expired_stats';
    /**
     * Mapping columns to data type to return correct response types.
     *
     * @var array<string, string>
     */
    protected $column_types = array('date_start' => 'strval', 'date_end' => 'strval', 'giftcards_count' => 'intval', 'expired_balance' => 'floatval');
    /**
     * Data store context expired to pass to filters.
     *
     * @var string
     */
    protected $context = 'giftcards_expired_stats';
    /**
     * Assign report columns once full table name has been assigned.
     *
     * @return void
     */
    protected function assign_report_columns()
    {
    }
    /**
     * Updates the database query with parameters expired for Products Stats report: categories and order status.
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
     * @return stdClass|array|WP_Error Data.
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
     *
     * @return void
     */
    protected function initialize_queries()
    {
    }
}
/**
 * WC_GC_Analytics_Expired_Stats_Query class.
 *
 * @version 2.8.0
 */
class WC_GC_Analytics_Expired_Stats_Query extends \Automattic\WooCommerce\Admin\API\Reports\GenericQuery
{
    /**
     * Valid fields for report.
     *
     * @return array
     */
    protected function get_default_query_vars()
    {
    }
    /**
     * Get gift card data based on the current query vars.
     *
     * @return stdClass|WP_Error
     */
    public function get_data()
    {
    }
}
/**
 * WC_GC_Analytics_Expired_Stats_REST_Controller class.
 *
 * @version 2.9.1
 */
class WC_GC_Analytics_Expired_Stats_REST_Controller extends \WC_REST_Reports_Controller
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
    protected $rest_base = 'reports/giftcards/expired/stats';
    /**
     * Mapping between external parameter name and name expired in query class.
     *
     * @var array
     */
    protected $param_mapping = array();
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
     * @param array|stdClass  $report  Report data.
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
 * WC_GC_Analytics_Revenue_Data_Store class.
 *
 * @version 2.9.1
 */
class WC_GC_Analytics_Issued_Data_Store extends \WC_GC_Analytics_Data_Store
{
    /**
     * Table used to get the data.
     *
     * @var string
     */
    protected static $table_name = 'woocommerce_gc_activity';
    /**
     * Cache identifier.
     *
     * @var string
     */
    protected $cache_key = 'giftcards_issued';
    /**
     * Mapping columns to data type to return correct response types.
     *
     * @var array<string, string>
     */
    protected $column_types = array('date_start' => 'strval', 'date_end' => 'strval', 'giftcard_id' => 'intval', 'giftcard_code' => 'strval', 'issued_balance' => 'floatval', 'expire_date' => 'strval');
    /**
     * Extended giftcard attributes to include in the data. @TODO: remove this.
     *
     * @var array
     */
    protected $extended_attributes = array();
    /**
     * Data store context used to pass to filters.
     *
     * @var string
     */
    protected $context = 'giftcards';
    /**
     * Assign report columns once full table name has been assigned.
     *
     * @return void
     */
    protected function assign_report_columns()
    {
    }
    /**
     * Set up all the hooks for maintaining and populating table data.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Updates the database query with parameters used for Products report: categories and order status.
     *
     * @param array $query_args Query arguments supplied by the user.
     * @return void
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
     *
     * @return void
     */
    protected function initialize_queries()
    {
    }
}
/**
 * WC_GC_Analytics_Revenue_Query class.
 *
 * @version 2.8.0
 */
class WC_GC_Analytics_Issued_Query extends \Automattic\WooCommerce\Admin\API\Reports\GenericQuery
{
    /**
     * Valid fields for report.
     *
     * @return array
     */
    protected function get_default_query_vars()
    {
    }
    /**
     * Get gift card data based on the current query vars.
     *
     * @return stdClass|WP_Error
     */
    public function get_data()
    {
    }
}
/**
 * WC_GC_Analytics_Issued_REST_Controller class.
 *
 * @version 2.9.1
 */
class WC_GC_Analytics_Issued_REST_Controller extends \WC_REST_Reports_Controller implements \Automattic\WooCommerce\Admin\API\Reports\ExportableInterface
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
    protected $rest_base = 'reports/giftcards-issued';
    /**
     * Mapping between external parameter name and name used in query class.
     *
     * @var array
     */
    protected $param_mapping = array();
    /**
     * Get items.
     *
     * @param  WP_REST_Request $request Request data.
     * @return array|WP_Error
     */
    public function get_items($request)
    {
    }
    /**
     * Prepare a report object for serialization.
     *
     * @param  array|stdClass  $report  Report data.
     * @param  WP_REST_Request $request Request object.
     * @return WP_REST_Response
     */
    public function prepare_item_for_response($report, $request)
    {
    }
    /**
     * Prepare links for the request.
     *
     * @param  array $object Object data.
     * @return array
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
     * @param  array $item Single report item/row.
     * @return array Key value pair of Column ID => Row Value.
     */
    public function prepare_item_for_export($item)
    {
    }
}
/**
 * WC_GC_Analytics_Issued_Stats_Data_Store class.
 *
 * @version 2.9.1
 */
class WC_GC_Analytics_Issued_Stats_Data_Store extends \WC_GC_Analytics_Issued_Data_Store
{
    /**
     * Cache identifier.
     *
     * @var string
     */
    protected $cache_key = 'giftcards_issued_stats';
    /**
     * Mapping columns to data type to return correct response types.
     *
     * @var array<string, string>
     */
    protected $column_types = array('date_start' => 'strval', 'date_end' => 'strval', 'giftcards_count' => 'intval', 'issued_balance' => 'floatval');
    /**
     * Data store context used to pass to filters.
     *
     * @var string
     */
    protected $context = 'giftcards_issued_stats';
    /**
     * Assign report columns once full table name has been assigned.
     *
     * @return void
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
     * @return stdClass|array|WP_Error Data.
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
     *
     * @return void
     */
    protected function initialize_queries()
    {
    }
}
/**
 * WC_GC_Analytics_Issued_Stats_Query class.
 *
 * @version 2.8.0
 */
class WC_GC_Analytics_Issued_Stats_Query extends \Automattic\WooCommerce\Admin\API\Reports\GenericQuery
{
    /**
     * Valid fields for report.
     *
     * @return array
     */
    protected function get_default_query_vars()
    {
    }
    /**
     * Get gift card data based on the current query vars.
     *
     * @return stdClass|WP_Error
     */
    public function get_data()
    {
    }
}
/**
 * WC_GC_Analytics_Issued_Stats_REST_Controller class.
 *
 * @version 2.9.1
 */
class WC_GC_Analytics_Issued_Stats_REST_Controller extends \WC_REST_Reports_Controller
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
    protected $rest_base = 'reports/giftcards-issued/stats';
    /**
     * Mapping between external parameter name and name used in query class.
     *
     * @var array
     */
    protected $param_mapping = array();
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
     * @param array|stdClass  $report  Report data.
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
 * WC_GC_Analytics_Revenue_Data_Store class.
 *
 * @version 2.9.1
 */
class WC_GC_Analytics_Used_Data_Store extends \WC_GC_Analytics_Data_Store
{
    /**
     * Table used to get the data.
     *
     * @var string
     */
    protected static $table_name = 'woocommerce_gc_activity';
    /**
     * Cache identifier.
     *
     * @var string
     */
    protected $cache_key = 'giftcards_used';
    /**
     * Mapping columns to data type to return correct response types.
     *
     * @var array<string, string>
     */
    protected $column_types = array('date_start' => 'strval', 'date_end' => 'strval', 'giftcard_id' => 'intval', 'giftcard_code' => 'strval', 'used_amount' => 'floatval', 'refunded_amount' => 'floatval', 'net_amount' => 'floatval');
    /**
     * Extended giftcard attributes to include in the data. @TODO: remove this.
     *
     * @var array
     */
    protected $extended_attributes = array();
    /**
     * Data store context used to pass to filters.
     *
     * @var string
     */
    protected $context = 'giftcards';
    /**
     * Assign report columns once full table name has been assigned.
     *
     * @return void
     */
    protected function assign_report_columns()
    {
    }
    /**
     * Set up all the hooks for maintaining and populating table data.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Updates the database query with parameters used for Products report: categories and order status.
     *
     * @param array $query_args Query arguments supplied by the user.
     * @return void
     */
    protected function add_sql_query_params($query_args)
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
     *
     * @return void
     */
    protected function initialize_queries()
    {
    }
}
/**
 * WC_GC_Analytics_Used_Query class.
 *
 * @version 2.8.0
 */
class WC_GC_Analytics_Used_Query extends \Automattic\WooCommerce\Admin\API\Reports\GenericQuery
{
    /**
     * Valid fields for report.
     *
     * @return array
     */
    protected function get_default_query_vars()
    {
    }
    /**
     * Get gift card data based on the current query vars.
     *
     * @return stdClass|WP_Error
     */
    public function get_data()
    {
    }
}
/**
 * WC_GC_Analytics_Used_REST_Controller class.
 *
 * @version 2.9.1
 */
class WC_GC_Analytics_Used_REST_Controller extends \WC_REST_Reports_Controller implements \Automattic\WooCommerce\Admin\API\Reports\ExportableInterface
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
    protected $rest_base = 'reports/giftcards/used';
    /**
     * Mapping between external parameter name and name used in query class.
     *
     * @var array
     */
    protected $param_mapping = array();
    /**
     * Get items.
     *
     * @param  WP_REST_Request $request Request data.
     * @return array|WP_Error
     */
    public function get_items($request)
    {
    }
    /**
     * Prepare a report object for serialization.
     *
     * @param  array|stdClass  $report  Report data.
     * @param  WP_REST_Request $request Request object.
     * @return WP_REST_Response
     */
    public function prepare_item_for_response($report, $request)
    {
    }
    /**
     * Prepare links for the request.
     *
     * @param  array $object Object data.
     * @return array
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
     * @param  array $item Single report item/row.
     * @return array Key value pair of Column ID => Row Value.
     */
    public function prepare_item_for_export($item)
    {
    }
}
/**
 * WC_GC_Analytics_Used_Stats_Data_Store class.
 *
 * @version 2.9.1
 */
class WC_GC_Analytics_Used_Stats_Data_Store extends \WC_GC_Analytics_Used_Data_Store
{
    /**
     * Cache identifier.
     *
     * @var string
     */
    protected $cache_key = 'giftcards_used_stats';
    /**
     * Mapping columns to data type to return correct response types.
     *
     * @var array<string, string>
     */
    protected $column_types = array('date_start' => 'strval', 'date_end' => 'strval', 'giftcards_count' => 'intval', 'used_amount' => 'floatval', 'refunded_amount' => 'floatval', 'net_amount' => 'floatval');
    /**
     * Data store context used to pass to filters.
     *
     * @var string
     */
    protected $context = 'giftcards_used_stats';
    /**
     * Assign report columns once full table name has been assigned.
     *
     * @return void
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
     * @return stdClass|array|WP_Error Data.
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
     *
     * @return void
     */
    protected function initialize_queries()
    {
    }
}
/**
 * WC_GC_Analytics_Used_Stats_Query class.
 *
 * @version 2.8.0
 */
class WC_GC_Analytics_Used_Stats_Query extends \Automattic\WooCommerce\Admin\API\Reports\GenericQuery
{
    /**
     * Valid fields for report.
     *
     * @return array
     */
    protected function get_default_query_vars()
    {
    }
    /**
     * Get gift card data based on the current query vars.
     *
     * @return stdClass|WP_Error
     */
    public function get_data()
    {
    }
}
/**
 * WC_GC_Analytics_Used_Stats_REST_Controller class.
 *
 * @version 2.9.1
 */
class WC_GC_Analytics_Used_Stats_REST_Controller extends \WC_REST_Reports_Controller
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
    protected $rest_base = 'reports/giftcards/used/stats';
    /**
     * Mapping between external parameter name and name used in query class.
     *
     * @var array
     */
    protected $param_mapping = array();
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
     * @param array|stdClass  $report  Report data.
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
 * WC_GC_Admin_Activity_Page Class.
 *
 * @version 2.9.1
 */
class WC_GC_Admin_Activity_Page
{
    /**
     * Page home URL.
     *
     * @const PAGE_URL
     */
    const PAGE_URL = 'admin.php?page=gc_activity';
    /**
     * Render page.
     *
     * @return void
     */
    public static function output()
    {
    }
}
/**
 * Admin AJAX meta-box handlers.
 *
 * @class    WC_GC_Admin_Ajax
 * @version  2.9.1
 */
class WC_GC_Admin_Ajax
{
    /**
     * Hook in.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Validate & Save gift card order item.
     *
     * @since 1.3.0
     *
     * @return void
     */
    public static function edit_order_item_gift_card_in_order()
    {
    }
    /**
     * Fetch gift card order item form.
     *
     * @since 1.3.0
     *
     * @return void
     */
    public static function configure_order_item_gift_card()
    {
    }
    /**
     * Add gift card order item.
     *
     * @since 1.2.0
     *
     * @return void
     */
    public static function add_order_item_gift_card()
    {
    }
    /**
     * Remove gift card order item.
     *
     * @since 1.2.0
     *
     * @return void
     */
    public static function remove_order_item_gift_card()
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
     * @return void
     */
    public static function dismiss_notice()
    {
    }
    /**
     * Checks if loopback requests work.
     *
     * @since  1.3.2
     *
     * @return void
     */
    public static function ajax_loopback_test()
    {
    }
}
/**
 * WC_GC_Admin_Exporters Class.
 *
 * @version 2.9.1
 */
class WC_GC_Admin_Exporters
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Return true if WooCommerce export is allowed for current user, false otherwise.
     *
     * @return bool Whether current user can perform export.
     */
    protected function export_allowed()
    {
    }
    /**
     * Serve the generated file.
     *
     * @return void
     */
    public function download_export_file()
    {
    }
    /**
     * AJAX callback for doing the actual export to the CSV file.
     *
     * @return void
     */
    public function do_ajax_export()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Modals.
    |--------------------------------------------------------------------------
    */
    /**
     * Returns export modal's html.
     *
     * @return void
     */
    public function export_modal_html()
    {
    }
    /**
     * JS template of modal for exporting giftcards.
     *
     * @return void
     */
    public static function add_js_template()
    {
    }
}
/**
 * WC_GC_Admin_Gift_Cards_Page Class.
 *
 * @version 2.9.1
 */
class WC_GC_Admin_Gift_Cards_Page
{
    /**
     * Page home URL.
     *
     * @const PAGE_URL
     */
    const PAGE_URL = 'admin.php?page=gc_giftcards';
    /**
     * Save.
     *
     * @return false|void False when nothing was posted.
     */
    public static function process()
    {
    }
    /**
     * Delete giftcard.
     *
     * @return void
     */
    public static function delete()
    {
    }
    /**
     * Render page.
     *
     * @return void
     */
    public static function output()
    {
    }
    /**
     * Render edit page.
     *
     * @return void
     */
    public static function edit_output()
    {
    }
    /**
     * Get gift card message field HTML.
     *
     * @since 1.0.1
     * @param  WC_GC_Gift_Card_Data $giftcard Gift card.
     * @return void
     */
    public static function get_message_field_html($giftcard)
    {
    }
}
/**
 * WC_GC_Admin_Importers Class.
 *
 * @version 2.9.1
 */
class WC_GC_Admin_Importers
{
    /**
     * Array of importer IDs.
     *
     * @var array[]
     */
    protected $importers = array();
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Return true if WooCommerce Gift Cards imports are allowed for current user, false otherwise.
     *
     * @return bool Whether current user can perform imports.
     */
    protected function import_allowed()
    {
    }
    /**
     * Register importer scripts.
     *
     * @return void
     */
    public function admin_scripts()
    {
    }
    /**
     * The product importer.
     *
     * This has a custom screen - the Tools > Import item is a placeholder.
     * If we're on that screen, redirect to the custom one.
     *
     * @return void
     */
    public function giftcard_importer()
    {
    }
    /**
     * Register WordPress based importers.
     *
     * @return void
     */
    public function register_importers()
    {
    }
    /**
     * Ajax callback for importing one batch of products from a CSV.
     *
     * @return void
     */
    public function do_ajax_gift_card_import()
    {
    }
}
/**
 * Setup GC menus in WP admin.
 *
 * @version 2.9.1
 */
class WC_GC_Admin_Menus
{
    /**
     * The CSS classes used to hide the submenu items in navigation.
     *
     * @var string
     */
    protected static $HIDE_CSS_CLASS = 'hide-if-js';
    /**
     * GC parent file.
     *
     * @var string
     */
    public static $parent_file;
    /**
     * Setup.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Admin hooks.
     *
     * @return void
     */
    public static function add_hooks()
    {
    }
    /**
     * Configure giftcard tabs.
     *
     * @param  array $pages
     * @return array
     */
    public static function wc_admin_navigation_page_tab_sections($pages)
    {
    }
    /**
     * Configure giftcard page sections.
     *
     * @param  array $pages
     * @return array
     */
    public static function wc_admin_navigation_pages_with_tabs($pages)
    {
    }
    /**
     * Add screen id to WooCommerce.
     *
     * @since 1.16.5
     * @param  array $screen_ids  List of screen IDs.
     * @return array
     */
    public static function wc_admin_navigation_screen_ids($screen_ids)
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
     * @since 1.0.0
     *
     * @return void
     */
    public static function render_tabs()
    {
    }
    /**
     * Returns the current admin tab.
     *
     * @param  string $current_tab
     * @return string
     */
    public static function get_current_tab($current_tab = 'giftcards')
    {
    }
    /**
     * Add menu items.
     *
     * @return void
     */
    public static function gc_menu()
    {
    }
    /**
     * "Gift Cards" page main Router.
     *
     * @return void
     */
    public static function giftcards_page()
    {
    }
    /**
     * Init admin page. Setups the `save` feature and adds messages.
     *
     * @return void
     */
    public static function giftcards_page_init()
    {
    }
    /**
     * Render "Activity" page.
     *
     * @return void
     */
    public static function activity_page()
    {
    }
    /**
     * Fix the active menu item.
     *
     * @return mixed
     */
    public static function gc_fix_menu_highlight()
    {
    }
    /**
     * Exclude menu items from WooCommerce menu migration.
     *
     * @since  1.6.0
     *
     * @param  array $excluded_items
     * @return array
     */
    public static function exclude_navigation_items($excluded_items)
    {
    }
    /**
     * Hide the submenu page based on slug and return the item that was hidden.
     *
     * @since 1.16.3
     *
     * Instead of actually removing the submenu item, a safer approach is to hide it and filter it in the API response.
     * In this manner we'll avoid breaking third-party plugins depending on items that no longer exist.
     *
     * @param string $menu_slug The parent menu slug.
     * @param string $submenu_slug The submenu slug that should be hidden.
     * @return false|array
     */
    protected static function hide_submenu_page($menu_slug, $submenu_slug)
    {
    }
    /**
     * Apply the hide-if-js CSS class to a submenu item.
     *
     * @since 1.16.3
     *
     * @param int    $index The position of a submenu item in the submenu array.
     * @param string $parent_slug The parent slug.
     * @param array  $item The submenu item.
     * @return void
     */
    protected static function hide_submenu_element($index, $parent_slug, $item)
    {
    }
}
/**
 * Admin notices handling.
 *
 * @class    WC_GC_Admin_Notices
 * @version  2.9.1
 */
class WC_GC_Admin_Notices
{
    /**
     * Notices persisting on the next request.
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
     * @var array<string, string>
     */
    private static $maintenance_notice_types = array('update' => 'update_notice', 'welcome' => 'welcome_notice', 'loopback' => 'loopback_notice', 'queue' => 'queue_notice', 'update_order_stats' => 'update_order_stats_notice');
    /**
     * Constructor.
     *
     * @return void
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
     * @return void
     */
    public static function add_notice($text, $args, $save_notice = \false)
    {
    }
    /**
     * Checks if a notice that belongs to a the specified uniqueness context already exists.
     *
     * @since  1.3.2
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
     * @since  1.3.2
     *
     * @param  string $notice_name
     * @param  string $key
     * @param  mixed  $default
     * @return mixed
     */
    public static function get_notice_option($notice_name, $key, $default = \null)
    {
    }
    /**
     * Set a setting for a notice type.
     *
     * @since  1.3.2
     *
     * @param  string $notice_name
     * @param  string $key
     * @param  mixed  $value
     * @return void
     */
    public static function set_notice_option($notice_name, $key, $value)
    {
    }
    /**
     * Checks if a maintenance notice is visible.
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
     * @param  string $notice_name
     * @return boolean
     */
    public static function is_dismissible_notice_dismissed($notice_name)
    {
    }
    /**
     * Save notices to the DB.
     *
     * @return void
     */
    public static function save_notices()
    {
    }
    /**
     * Show any stored error messages.
     *
     * @return void
     */
    public static function output_notices()
    {
    }
    /**
     * Show maintenance notices.
     *
     * @return void
     */
    public static function hook_maintenance_notices()
    {
    }
    /**
     * Add a dimissible notice/error.
     *
     * @param  string $text
     * @param  mixed  $args
     * @return void
     */
    public static function add_dismissible_notice($text, $args)
    {
    }
    /**
     * Remove a dismissible notice.
     *
     * @param  string $notice_name
     * @return bool
     */
    public static function remove_dismissible_notice($notice_name)
    {
    }
    /**
     * Add a maintenance notice to be displayed.
     *
     * @param  string $notice_name
     * @return bool
     */
    public static function add_maintenance_notice($notice_name)
    {
    }
    /**
     * Remove a maintenance notice.
     *
     * @param  string $notice_name
     * @return bool
     */
    public static function remove_maintenance_notice($notice_name)
    {
    }
    /**
     * Add 'update' maintenance notice.
     *
     * @return void
     */
    public static function update_notice()
    {
    }
    /**
     * Returns a "trigger update" notice component.
     *
     * @return string
     */
    private static function get_trigger_update_prompt()
    {
    }
    /**
     * Returns a "force update" notice component.
     *
     * @return string
     */
    private static function get_force_update_prompt()
    {
    }
    /**
     * Returns a "failed update" notice component.
     *
     * @return string
     */
    private static function get_failed_update_prompt()
    {
    }
    /**
     * Add 'welcome' notice.
     *
     * @return void
     */
    public static function welcome_notice()
    {
    }
    /**
     * Run 'loopback' test and display notice on failure.
     * Rescheduled with every plugin update - see 'WC_GC_Install::install'.
     *
     * @since  1.3.2
     * @return void
     */
    public static function loopback_notice()
    {
    }
    /**
     * Check if there are pending deliveries every 24 hours.
     * Rescheduled with every plugin update - see 'WC_GC_Install::install'.
     *
     * @since  1.3.2
     * @return void
     */
    public static function queue_notice()
    {
    }
    /**
     * Adds a notice to migrate order revenue analytics to account for GCs correctly.
     *
     * @since  1.4.0
     * @return void
     */
    public static function update_order_stats_notice()
    {
    }
    /**
     * Returns a "trigger update" notice component.
     *
     * @since  1.4.0
     *
     * @return string
     */
    private static function get_trigger_order_stats_update_prompt()
    {
    }
    /**
     * Dismisses a notice. Dismissible maintenance notices cannot be dismissed forever.
     *
     * @param  string $notice
     * @return bool
     */
    public static function dismiss_notice($notice)
    {
    }
}
/**
 * WC_GC_Admin_Refunds Class.
 *
 * @version 2.9.1
 */
class WC_GC_Admin_Refunds
{
    /**
     * Setup refunds in admin.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Whether or not to render the refund button.
     *
     * @since 1.12.2
     *
     * @param  boolean $should
     * @param  int     $order_id
     * @return boolean
     */
    public static function should_render_refunds($should, $order_id)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Refunds admin UI.
    	/*---------------------------------------------------*/
    /**
     * Adds Gift Cards refund data in admin order totals.
     *
     * @param  int $order_id
     * @return void
     */
    public static function add_admin_refund_totals($order_id)
    {
    }
    /**
     * Adds Gift Cards refund description in admin order totals.
     *
     * @param  WC_Order_Refund $refund
     * @return void
     */
    public static function add_admin_refund_line_description($refund)
    {
    }
}
/**
 * Admin Class.
 *
 * Loads admin scripts, includes admin classes and adds admin hooks.
 *
 * @class    WC_GC_Admin
 * @version  2.9.1
 */
class WC_GC_Admin
{
    /**
     * Bundled selectSW library version.
     *
     * @var string
     */
    private static $bundled_selectsw_version = '1.2.3';
    /**
     * Setup Admin class.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Admin init.
     *
     * @return void
     */
    public static function admin_init()
    {
    }
    /**
     * Inclusions.
     *
     * @return void
     */
    protected static function includes()
    {
    }
    /**
     * Register own version of select2 library.
     *
     * @since 1.2.0
     * @return void
     */
    public static function maybe_register_selectsw()
    {
    }
    /**
     * Load own version of select2 library.
     *
     * @since 1.2.0
     * @return void
     */
    public static function maybe_load_selectsw()
    {
    }
    /**
     * Display notice when selectSW library is unsupported.
     *
     * @since 1.2.0
     * @return void
     */
    public static function maybe_display_selectsw_notice()
    {
    }
    /**
     * Whether to load own version of select2 library or not.
     *
     * @since 1.2.0
     *
     * @return boolean
     */
    private static function load_selectsw()
    {
    }
    /**
     * Add a message in the WP Privacy Policy Guide page.
     *
     * @return void
     */
    public static function add_privacy_policy_guide_content()
    {
    }
    /**
     * Message to add in the WP Privacy Policy Guide page.
     *
     * @return string
     */
    protected static function get_privacy_policy_guide_message()
    {
    }
    /**
     * Admin scripts.
     *
     * @return void
     */
    public static function admin_resources()
    {
    }
    /**
     * Enqueue scripts for the product type on the onboarding task list.
     *
     * @since 1.16.11
     *
     * @return void
     */
    public static function admin_onboarding_task_product_type_resources()
    {
    }
    /**
     * Enqueue scripts for the product tutorial.
     *
     * @since 1.16.12
     *
     * @return void
     */
    public static function admin_product_tutorial_resources()
    {
    }
    /**
     * Add PB debug data in the system status.
     *
     * @return void
     */
    public static function render_system_status_items()
    {
    }
    /**
     * Add screen ids.
     */
    public static function add_wc_screens($screens)
    {
    }
    /**
     * Add 'Gift Cards' tab to WooCommerce Settings tabs.
     *
     * @param  array $settings
     * @return array $settings
     */
    public static function add_settings_page($settings)
    {
    }
    /**
     * Filter order notes, and mask gift card code if needed.
     *
     * @since  1.15.1
     *
     * @param  WP_Comment $comment Order note.
     * @return WP_Comment $comment
     */
    public static function filter_order_notes($comment)
    {
    }
}
/**
 * WC_GC_CSV_Exporter Class.
 *
 * @version 2.9.1
 */
class WC_GC_CSV_Exporter extends \WC_CSV_Batch_Exporter
{
    /**
     * Type of export used in filter names.
     *
     * @var string
     */
    protected $export_type = 'gc_giftcards';
    /**
     * Should meta be exported?
     *
     * @var boolean
     */
    protected $enable_meta_export = \false;
    /**
     * Should activities be exported?
     *
     * @var boolean
     */
    protected $enable_activities_export = \false;
    /**
     * Query filters.
     *
     * @var array|false
     */
    protected $filters = \false;
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Stage the export under a random name in the protected CSV directory, since it contains gift card codes.
     *
     * @since 2.8.0
     *
     * @return string
     */
    protected function get_file_path()
    {
    }
    /**
     * Name of the per-user transient holding the random file name of this export.
     *
     * @since 2.8.0
     *
     * @return string
     */
    protected function get_file_transient_name()
    {
    }
    /**
     * Whether this user's staged export file exists.
     *
     * @since 2.8.0
     *
     * @return bool
     */
    public function has_file()
    {
    }
    /**
     * Pick a random file name on the first step, and stop later steps whose file is gone.
     *
     * @since 2.8.0
     * @return void
     */
    public function generate_file()
    {
    }
    /**
     * Force-Cast percent to integer.
     *
     * @override
     */
    public function get_percent_complete()
    {
    }
    /**
     * Should meta be exported?
     *
     * @param bool $enable_meta_export Should meta be exported.
     * @return void
     */
    public function enable_meta_export($enable_meta_export)
    {
    }
    /**
     * Should meta be exported?
     *
     * @param bool $enable_activities_export Should meta be exported.
     * @return void
     */
    public function enable_activities_export($enable_activities_export)
    {
    }
    /**
     * Return an array of columns to export.
     *
     * @return array
     */
    public function get_default_column_names()
    {
    }
    /**
     * Prepare data for export.
     *
     * @return void
     */
    public function prepare_data_to_export()
    {
    }
    /**
     * Take a giftcard and generate row data from it for export.
     *
     * @param WC_GC_Gift_Card_Data $giftcard WC_GC_Gift_Card_Data object.
     *
     * @return array
     */
    protected function generate_row_data($giftcard)
    {
    }
    /**
     * Export activity data.
     *
     * @param WC_GC_Gift_Card_Data $giftcard Gift card object.
     * @param array                $row
     * @return void
     */
    protected function prepare_activities_for_export($giftcard, &$row)
    {
    }
    /**
     * Export meta data.
     *
     * @param WC_GC_Gift_Card_Data $giftcard Gift card object.
     * @param array                $row
     * @return void
     */
    protected function prepare_meta_for_export($giftcard, &$row)
    {
    }
    /**
     * Set filters.
     *
     * @param  array $post_data
     * @return void
     */
    public function set_filters($post_data)
    {
    }
    /**
     * Set export meta.
     *
     * @since 2.5.0
     *
     * @param  mixed $export_meta Whether to export meta data.
     * @return void
     */
    public function set_export_meta($export_meta)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Columns.                                         */
    /*---------------------------------------------------*/
    /**
     * Get initial balance.
     *
     * @param  WC_GC_Gift_Card_Data $giftcard Gift Card being exported.
     * @return float
     */
    protected function get_column_value_balance($giftcard)
    {
    }
    /**
     * Get remaining balance.
     *
     * @param  WC_GC_Gift_Card_Data $giftcard Gift Card being exported.
     * @return float
     */
    protected function get_column_value_remaining($giftcard)
    {
    }
    /**
     * Get create date.
     *
     * @param  WC_GC_Gift_Card_Data $giftcard Gift Card being exported.
     * @return string|int
     */
    protected function get_column_value_create_date($giftcard)
    {
    }
    /**
     * Get expire date.
     *
     * @param  WC_GC_Gift_Card_Data $giftcard Gift Card being exported.
     * @return string|int
     */
    protected function get_column_value_expire_date($giftcard)
    {
    }
    /**
     * Get Redeemed date.
     *
     * @param  WC_GC_Gift_Card_Data $giftcard Gift Card being exported.
     * @return string|int
     */
    protected function get_column_value_redeem_date($giftcard)
    {
    }
    /**
     * Get delivered date.
     *
     * @param  WC_GC_Gift_Card_Data $giftcard Gift Card being exported.
     * @return string|int
     */
    protected function get_column_value_deliver_date($giftcard)
    {
    }
    /**
     * Get delivered status.
     *
     * @param  WC_GC_Gift_Card_Data $giftcard Gift Card being exported.
     * @return string|int
     */
    protected function get_column_value_delivered($giftcard)
    {
    }
    /**
     * Get virtual status column.
     *
     * @param  WC_GC_Gift_Card_Data $giftcard Gift Card being exported.
     * @return string
     */
    protected function get_column_value_is_virtual($giftcard)
    {
    }
    /**
     * Get active status column.
     *
     * @param  WC_GC_Gift_Card_Data $giftcard Gift_Card being exported.
     * @return string
     */
    protected function get_column_value_is_active($giftcard)
    {
    }
    /**
     * Get currency column.
     *
     * @since 2.5.0
     *
     * @param  WC_GC_Gift_Card_Data $giftcard Gift_Card being exported.
     * @return string
     */
    protected function get_column_value_currency($giftcard)
    {
    }
}
/**
 * WC_GC_Importer Class.
 *
 * @version 2.9.1
 */
abstract class WC_GC_Importer implements \WC_Importer_Interface
{
    /**
     * CSV file.
     *
     * @var string
     */
    protected $file = '';
    /**
     * The file position after the last read.
     *
     * @var int
     */
    protected $file_position = 0;
    /**
     * Importer parameters.
     *
     * @var array
     */
    protected $params = array();
    /**
     * Raw keys - CSV raw headers.
     *
     * @var array
     */
    protected $raw_keys = array();
    /**
     * Mapped keys - CSV headers.
     *
     * @var array
     */
    protected $mapped_keys = array();
    /**
     * Raw data.
     *
     * @var array
     */
    protected $raw_data = array();
    /**
     * Raw data.
     *
     * @var array
     */
    protected $file_positions = array();
    /**
     * Parsed data.
     *
     * @var array
     */
    protected $parsed_data = array();
    /**
     * Start time of current import.
     *
     * (default value: 0)
     *
     * @var int
     */
    protected $start_time = 0;
    /**
     * Get file raw headers.
     *
     * @return array
     */
    public function get_raw_keys()
    {
    }
    /**
     * Get file mapped headers.
     *
     * @return array
     */
    public function get_mapped_keys()
    {
    }
    /**
     * Get raw data.
     *
     * @return array
     */
    public function get_raw_data()
    {
    }
    /**
     * Get parsed data.
     *
     * @return array
     */
    public function get_parsed_data()
    {
    }
    /**
     * Get importer parameters.
     *
     * @return array
     */
    public function get_params()
    {
    }
    /**
     * Get file pointer position from the last read.
     *
     * @return int
     */
    public function get_file_position()
    {
    }
    /**
     * Get file pointer position as a percentage of file size.
     *
     * @return int
     */
    public function get_percent_complete()
    {
    }
    /**
     * Prepare a single gift card for create or update.
     *
     * @param  array $data     Item data.
     * @return WC_GC_Gift_Card_Data|WP_Error
     */
    protected function get_giftcard_object($data)
    {
    }
    /**
     * Process a single item and save.
     *
     * @throws Exception If item cannot be processed.
     *
     * @param  array $data Raw CSV data.
     * @return array|WP_Error
     */
    protected function process_item($data)
    {
    }
    /**
     * Set activity data based on imported object.
     *
     * @param array                &$data
     * @param WC_GC_Gift_Card_Data $giftcard
     * @return void
     */
    protected function set_activity_data(&$data, $giftcard)
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
     * Explode CSV cell values using commas by default, and handling escaped
     * separators.
     *
     * @param  string $value     Value to explode.
     * @param  string $separator Separator separating each value. Defaults to comma.
     * @return string[]
     */
    protected function explode_values($value, $separator = ',')
    {
    }
    /**
     * Remove formatting and trim each value.
     *
     * @param  string $value Value to format.
     * @return string
     */
    protected function explode_values_formatter($value)
    {
    }
    /**
     * The exporter prepends a ' to escape fields that start with =, +, - or @.
     * Remove the prepended ' character preceding those characters.
     *
     * @param  string $value A string that may or may not have been escaped with '.
     * @return string
     */
    protected function unescape_data($value)
    {
    }
}
/**
 * Gift Card controller - handles file upload and forms in admin.
 *
 * @version 2.9.1
 */
class WC_GC_CSV_Importer_Controller
{
    /**
     * Page home URL.
     *
     * @const PAGE_URL
     */
    const PAGE_URL = 'admin.php?page=gc_giftcards';
    /**
     * The path to the current file.
     *
     * @var string
     */
    protected $file = '';
    /**
     * Token identifying the current import file.
     *
     * @var string
     */
    protected $import_token = '';
    /**
     * Whether the current file was created by this importer upload.
     *
     * @var bool
     */
    protected $delete_import_file_after_import = \false;
    /**
     * The current import step.
     *
     * @var string
     */
    protected $step = '';
    /**
     * Progress steps.
     *
     * @var array
     */
    protected $steps = array();
    /**
     * Errors.
     *
     * @var array
     */
    protected $errors = array();
    /**
     * The current delimiter for the file being read.
     *
     * @var string
     */
    protected $delimiter = ',';
    /**
     * Whether to use previous mapping selections.
     *
     * @var bool
     */
    protected $map_preferences = \false;
    /**
     * Whether to skip existing products.
     *
     * @var bool
     */
    protected $update_existing = \false;
    /**
     * Get importer instance.
     *
     * @param  string $file File to import.
     * @param  array  $args Importer arguments.
     * @return WC_Product_CSV_Importer
     */
    public static function get_importer($file, $args = array())
    {
    }
    /**
     * Check whether a file is a valid CSV file.
     *
     * @param string $file File path.
     * @param bool   $check_path Whether to also check the file is located in a valid location (Default: true).
     * @return bool
     */
    public static function is_file_valid_csv($file, $check_path = \true)
    {
    }
    /**
     * Register an import file for the current user.
     *
     * @since 2.7.6
     *
     * @param  string $file                     Import file path.
     * @param  bool   $delete_after_import      Whether completion may delete the file.
     * @return string|WP_Error
     */
    public static function register_import_file($file, $delete_after_import)
    {
    }
    /**
     * Resolve a registered import token for the current user.
     *
     * @since 2.7.6
     *
     * @param  string $token Import token.
     * @return array|false
     */
    public static function get_registered_import_file($token)
    {
    }
    /**
     * Finish an import and delete only an importer-owned upload.
     *
     * @since 2.7.6
     *
     * @param  string $token Import token.
     * @return bool
     */
    public static function cleanup_registered_import_file($token)
    {
    }
    /**
     * Delete the import registration for a token, but only when it belongs to the current user.
     *
     * @since 2.7.6
     *
     * @param  string $token Import token.
     * @return void
     */
    private static function forget_own_import_file($token)
    {
    }
    /**
     * Build the transient key for an import token.
     *
     * @since 2.7.6
     *
     * @param  string $token Import token.
     * @return string
     */
    private static function get_import_file_transient_key($token)
    {
    }
    /**
     * Checks if the provided filepath is within the PHAR executable.
     *
     * @since 1.13.1
     *
     * @param  string $filepath  The filepath to be checked.
     * @return bool True if the filepath is within ABSPATH.
     */
    public static function is_within_phar($filepath)
    {
    }
    /**
     * Checks if the provided filepath is within the WordPress absolute path.
     *
     * @since 1.13.1
     *
     * @param  string $filepath  The filepath to be checked.
     * @return bool True if the filepath is within ABSPATH.
     */
    public static function is_within_abspath($filepath)
    {
    }
    /**
     * Checks if the provided filepath is within wp-content directory.
     *
     * @since 1.15.3
     *
     * @param  string $filepath  The filepath to be checked.
     * @return bool True if the filepath is within WP_CONTENT_DIR.
     */
    public static function is_within_wp_content($filepath)
    {
    }
    /**
     * Check whether a canonical file path is inside a canonical directory.
     *
     * @since 2.8.0
     *
     * @param string $filepath  File path to check.
     * @param string $directory Directory that must contain the file.
     * @return bool
     */
    private static function is_path_within_directory($filepath, $directory)
    {
    }
    /**
     * Get all the valid filetypes for a CSV file.
     *
     * @return array
     */
    protected static function get_valid_csv_filetypes()
    {
    }
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Get the URL for the next step's screen.
     *
     * @param string $step  slug (default: current step).
     * @return string       URL for next step if a next step exists.
     *                      Admin URL if it's the last step.
     *                      Empty string on failure.
     */
    public function get_next_step_link($step = '')
    {
    }
    /**
     * Output header view.
     *
     * @return void
     */
    protected function output_header()
    {
    }
    /**
     * Output steps view.
     *
     * @return void
     */
    protected function output_steps()
    {
    }
    /**
     * Output footer view.
     *
     * @return void
     */
    protected function output_footer()
    {
    }
    /**
     * Add error message.
     *
     * @param string $message Error message.
     * @param array  $actions List of actions with 'url' and 'label'.
     * @return void
     */
    protected function add_error($message, $actions = array())
    {
    }
    /**
     * Add error message.
     *
     * @return void
     */
    protected function output_errors()
    {
    }
    /**
     * Dispatch current step and show correct view.
     *
     * @return void
     */
    public function dispatch()
    {
    }
    /**
     * Output information about the uploading process.
     *
     * @return void
     */
    protected function upload_form()
    {
    }
    /**
     * Handle the upload form and store options.
     *
     * @return void
     */
    public function upload_form_handler()
    {
    }
    /**
     * Handles the CSV upload and initial parsing of the file to prepare for
     * displaying author import options.
     *
     * @return string|WP_Error
     */
    public function handle_upload()
    {
    }
    /**
     * Mapping step.
     *
     * @return void
     */
    protected function mapping_form()
    {
    }
    /**
     * Import the file if it exists and is valid.
     *
     * @return void
     */
    public function import()
    {
    }
    /**
     * Done step.
     *
     * @return void
     */
    protected function done()
    {
    }
    /**
     * Columns to normalize.
     *
     * @param  array $columns List of columns names and keys.
     * @return array
     */
    protected function normalize_columns_names($columns)
    {
    }
    /**
     * Auto map column names.
     *
     * @param  array $raw_headers Raw header columns.
     * @param  bool  $num_indexes If should use numbers or raw header columns as indexes.
     * @return array
     */
    protected function auto_map_columns($raw_headers, $num_indexes = \true)
    {
    }
    /**
     * Map columns using the user's latest import mappings.
     *
     * @param  array $headers Header columns.
     * @return array
     */
    public function auto_map_user_preferences($headers)
    {
    }
    /**
     * Sanitize special column name regex.
     *
     * @param  string $value Raw special column name.
     * @return string
     */
    protected function sanitize_special_column_name_regex($value)
    {
    }
    /**
     * Get special columns.
     *
     * @param  array $columns Raw special columns.
     * @return array
     */
    protected function get_special_columns($columns)
    {
    }
    /**
     * Get mapping options.
     *
     * @param  string $item Item name.
     * @return array
     */
    protected function get_mapping_options($item = '')
    {
    }
}
/**
 * WC_GC_CSV_Importer Class.
 *
 * @version 2.9.1
 */
class WC_GC_CSV_Importer extends \WC_GC_Importer
{
    /**
     * Tracks current row being parsed.
     *
     * @var integer
     */
    protected $parsing_raw_data_index = 0;
    /**
     * Initialize importer.
     *
     * @param string $file   File to read.
     * @param array  $params Arguments for the parser.
     */
    public function __construct($file, $params = array())
    {
    }
    /**
     * Read file.
     *
     * @return void
     */
    protected function read_file()
    {
    }
    /**
     * Remove UTF-8 BOM signature.
     *
     * @param string $string String to handle.
     *
     * @return string
     */
    protected function remove_utf8_bom($string)
    {
    }
    /**
     * Set file mapped keys.
     *
     * @return void
     */
    protected function set_mapped_keys()
    {
    }
    /**
     * Get formatting callback.
     *
     * @return array
     */
    protected function get_formatting_callback()
    {
    }
    /**
     * Check if strings starts with determined word.
     *
     * @param string $haystack Complete sentence.
     * @param string $needle   Excerpt.
     *
     * @return bool
     */
    protected function starts_with($haystack, $needle)
    {
    }
    /**
     * Expand special and internal data into the correct formats for the product CRUD.
     *
     * @param array $data Data to import.
     *
     * @return array
     */
    protected function expand_data($data)
    {
    }
    /**
     * Map and format raw data to known fields.
     *
     * @return void
     */
    protected function set_parsed_data()
    {
    }
    /**
     * Get a string to identify the row from parsed data.
     *
     * @param array $parsed_data Parsed data.
     *
     * @return string
     */
    protected function get_row_id($parsed_data)
    {
    }
    /**
     * Process importer.
     *
     * Skips rows whose gift card ID or code already exists.
     *
     * @return array
     */
    public function import()
    {
    }
    /*
    	------------------------------------------ */
    /*
    	Parsers.
    	/* ------------------------------------------ */
    /**
     * Parse the ID field.
     *
     * If we're not doing an update, create a placeholder product so mapping works
     * for rows following this one.
     *
     * @param string $value Field value.
     *
     * @return int
     */
    public function parse_id_field($value)
    {
    }
    /**
     * Parse a comma-delineated field from a CSV.
     *
     * @param string $value Field value.
     *
     * @return array
     */
    public function parse_comma_field($value)
    {
    }
    /**
     * Parse a field that is generally '1' or '0' but can be something else.
     *
     * @param string $value Field value.
     *
     * @return bool|string
     */
    public function parse_bool_field($value)
    {
    }
    /**
     * Parse a float value field.
     *
     * @param string $value Field value.
     *
     * @return float|string
     */
    public function parse_float_field($value)
    {
    }
    /**
     * Parse dates from a CSV to timestamps.
     * Dates requires the format YYYY-MM-DD and time is optional.
     *
     * @param  string $value
     * @return int|false
     */
    public function parse_timestamp_field($value)
    {
    }
    /**
     * Parse emails from a CSV.
     *
     * @param  string $value
     * @return string|null
     */
    public function parse_email_field($value)
    {
    }
    /**
     * Parse gift card activities from a CSV.
     *
     * @param  string $value
     * @return string|false
     */
    public function parse_activities_field($value)
    {
    }
    /**
     * Parse gift card code from a CSV.
     *
     * @param  string $value
     * @return string|null
     */
    public function parse_code_field($value)
    {
    }
    /**
     * Parse and validate template id from a CSV.
     *
     * @param string $value Field value.
     * @return string
     */
    public function parse_template_field($value)
    {
    }
    /**
     * Parse delivered stamp from a CSV.
     * Delivered stamp might have a `no` value for non-delivered GCs and an integer indicating the user id or `0` for system.
     *
     * @param string $value Field value.
     * @return string|int
     */
    public function parse_delivered_field($value)
    {
    }
    /**
     * Just skip current field.
     *
     * By default is applied wc_clean() to all not listed fields
     * in self::get_formatting_callback(), use this method to skip any formatting.
     *
     * @param string $value Field value.
     *
     * @return string
     */
    public function parse_skip_field($value)
    {
    }
    /**
     * Parse an int value field
     *
     * @param string $value field value.
     *
     * @return int
     */
    public function parse_int_field($value)
    {
    }
    /**
     * Parse a decimal field using wc_format_decimal.
     *
     * @since 2.7.3
     *
     * @param  string $value Field value.
     * @return string
     */
    public function parse_decimal_field($value)
    {
    }
}
/**
 * Adds a custom deployments list table.
 *
 * @class    WC_GC_Activity_List_Table
 * @version  2.9.1
 */
class WC_GC_Activity_List_Table extends \WP_List_Table
{
    /**
     * Page home URL.
     *
     * @const PAGE_URL
     */
    const PAGE_URL = 'admin.php?page=gc_activity';
    /**
     * Total view records.
     *
     * @var int
     */
    private $total_items = 0;
    /**
     * Specify Gift Card to show activity (Defaults to all).
     *
     * @var int
     */
    private $giftcard;
    /**
     * Whether or not to mask the gift card codes.
     *
     * @var bool
     */
    private $mask_codes;
    /**
     * Constructor
     *
     * @param int $giftcard Gift card ID.
     */
    public function __construct($giftcard = 0)
    {
    }
    /**
     * This is a default column renderer
     *
     * @param $item - row (key, value array)
     * @param $column_name - string (key)
     * @return void
     */
    public function column_default($item, $column_name)
    {
    }
    /**
     * Handles the title column output.
     *
     * @param array $item
     * @return void
     */
    public function column_gc_code($item)
    {
    }
    /**
     * Handles the customer column output.
     *
     * @param array $item
     * @return void
     */
    public function column_customer($item)
    {
    }
    /**
     * Handles the balance column output.
     *
     * @param array $item
     * @return void
     */
    public function column_amount($item)
    {
    }
    /**
     * Handles the type column output.
     *
     * @param array $item
     * @return void
     */
    public function column_type($item)
    {
    }
    /**
     * Handles the date column output.
     *
     * @param array $item
     * @return void
     */
    public function column_date($item)
    {
    }
    /**
     * Get a list of columns. The format is:
     * 'internal-name' => 'Title'
     */
    public function get_columns()
    {
    }
    /**
     * Return sortable columns.
     *
     * @return array
     */
    public function get_sortable_columns()
    {
    }
    /**
     * Query the DB and attach items.
     *
     * @return void
     */
    public function prepare_items()
    {
    }
    /**
     * Message to be displayed when there are no items.
     *
     * @return void
     */
    public function no_items()
    {
    }
    /**
     * Construct a link string from args.
     *
     * @param  array  $args
     * @param  string $label
     * @param  string $class
     * @return string
     */
    protected function get_link($args, $label, $class = '')
    {
    }
    /**
     * Display table extra nav.
     *
     * @param  string $which top|bottom
     * @return void
     */
    public function extra_tablenav($which)
    {
    }
    /**
     * Display table filters.
     *
     * @return void
     */
    protected function render_filters()
    {
    }
    /**
     * Display types dropdown filter.
     *
     * @return void
     */
    protected function display_types_dropdown()
    {
    }
    /**
     * Display dates dropdown filter.
     *
     * @return void
     */
    protected function display_months_dropdown()
    {
    }
}
/**
 * Adds a custom deployments list table.
 *
 * @class    WC_GC_Gift_Cards_List_Table
 * @version  2.9.1
 */
class WC_GC_Gift_Cards_List_Table extends \WP_List_Table
{
    /**
     * Page home URL.
     *
     * @const PAGE_URL
     */
    const PAGE_URL = 'admin.php?page=gc_giftcards';
    /**
     * Total view records.
     *
     * @var int
     */
    public $total_items = 0;
    /**
     * Total redeemed records.
     *
     * @var int
     */
    public $total_redeemed_items = 0;
    /**
     * Whether or not to mask the gift card codes.
     *
     * @var bool
     */
    private $mask_codes;
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * This is a default column renderer
     *
     * @param $item - row (key, value array)
     * @param $column_name - string (key)
     * @return void
     */
    public function column_default($item, $column_name)
    {
    }
    /**
     * Handles the title column output.
     *
     * @param array $item
     * @return void
     */
    public function column_gc_code($item)
    {
    }
    /**
     * Handles the checkbox column output.
     *
     * @param array $item
     * @return void
     */
    public function column_cb($item)
    {
    }
    /**
     * Handles the balance column output.
     *
     * @param array $item
     * @return void
     */
    public function column_remaining($item)
    {
    }
    /**
     * Handles the status column output.
     *
     * @param array $item
     * @return void
     */
    public function column_status($item)
    {
    }
    /**
     * Handles the redeemed user column output.
     *
     * @param array $item
     * @return void
     */
    public function column_redeemed($item)
    {
    }
    /**
     * Handles the date column output.
     *
     * @param array $item
     * @return void
     */
    public function column_create_date($item)
    {
    }
    /**
     * Handles the expires column output.
     *
     * @param array $item
     * @return void
     */
    public function column_expire_date($item)
    {
    }
    /**
     * Get a list of columns. The format is:
     * 'internal-name' => 'Title'
     */
    public function get_columns()
    {
    }
    /**
     * Return sortable columns.
     *
     * @return array
     */
    public function get_sortable_columns()
    {
    }
    /**
     * Returns bulk actions.
     *
     * @return array<string, string>
     */
    protected function get_bulk_actions()
    {
    }
    /**
     * Process bulk actions.
     *
     * @return void
     */
    private function process_bulk_action()
    {
    }
    /**
     * Query the DB and attach items.
     *
     * @return void
     */
    public function prepare_items()
    {
    }
    /**
     * Message to be displayed when there are no items.
     *
     * @return void
     */
    public function no_items()
    {
    }
    /**
     * Items of the `subsubsub` status menu.
     *
     * @return array<string, string>
     */
    protected function get_views()
    {
    }
    /**
     * Construct a link string from args.
     *
     * @param  array  $args
     * @param  string $label
     * @param  string $class
     * @return string
     */
    protected function get_link($args, $label, $class = '')
    {
    }
    /**
     * Display table extra nav.
     *
     * @param  string $which top|bottom
     * @return void
     */
    public function extra_tablenav($which)
    {
    }
    /**
     * Display table filters.
     *
     * @return void
     */
    protected function render_filters()
    {
    }
    /**
     * Display dates dropdown filter.
     *
     * @return void
     */
    protected function display_months_dropdown()
    {
    }
}
/**
 * Admin AJAX meta-box handlers.
 *
 * @class    WC_GC_Meta_Box_Order
 * @version  2.9.1
 */
class WC_GC_Meta_Box_Order
{
    /**
     * Order object to use in 'display_edit_button'.
     *
     * @since  1.3.0
     *
     * @var WC_Order|null
     */
    protected static $order;
    /**
     * Hook in.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Save order object to use in 'display_edit_button'.
     *
     * Although the order object can be retrieved via 'WC_Order_Item::get_order', we've seen a significant performance hit when using that method.
     *
     * @since  1.3.0
     *
     * @param  WC_Order $order
     * @return void
     */
    public static function set_order($order)
    {
    }
    /**
     * Display "Configure/Edit" button next to Gift Card Product items in the edit-order screen.
     *
     * @since  1.3.0
     *
     * @param  int                   $item_id Order item ID.
     * @param  WC_Order_Item         $item Order item.
     * @param  WC_Product|false|null $product Order item product.
     * @return void
     */
    public static function display_edit_button($item_id, $item, $product)
    {
    }
    /**
     * JS template of modal for configuring/editing gift cards.
     *
     * @since  1.3.0
     *
     * @return void
     */
    public static function add_js_template()
    {
    }
    /**
     * Add action button in order items table.
     *
     * @since  1.2.0
     *
     * @param  WC_Order $order Order object.
     * @return void
     */
    public static function add_order_item_action_button($order)
    {
    }
    /**
     * Prints the admin form field html for code input.
     *
     * @since  1.6.0
     *
     * @param  WC_Product $product
     * @return void
     */
    public static function admin_form_field_code_html($product)
    {
    }
}
/**
 * Admin AJAX meta-box handlers.
 *
 * @class    WC_GC_Meta_Box_Product_Data
 * @version  2.9.1
 */
class WC_GC_Meta_Box_Product_Data
{
    /**
     * Hook in.
     *
     * @return void
     */
    public static function init()
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Admin Settings & Handlers.                       */
    /*---------------------------------------------------*/
    /**
     * Add checkbox in product type options.
     *
     * @param  array $actions
     * @return array
     */
    public static function add_gift_card_checkbox($actions)
    {
    }
    /**
     * Print inputs in product data general tab.
     *
     * @return void
     */
    public static function add_gift_card_inputs()
    {
    }
    /**
     * Print inputs in variation data form.
     *
     * @since 1.2.0
     *
     * @param  int     $loop
     * @param  array   $variation_data
     * @param  WP_Post $variation
     * @return void
     */
    public static function add_gift_card_variation_inputs($loop, $variation_data, $variation)
    {
    }
    /**
     * Add checkbox in product type options.
     *
     * @param  WC_Product $product
     * @return void
     */
    public static function process_post_data($product)
    {
    }
    /**
     * Process variation attributes.
     *
     * @since 1.2.0
     *
     * @param  int|WC_Product_Variation $variation Variation ID or object.
     * @param  int                      $index
     * @return void
     */
    public static function process_variation_post_data($variation, $index)
    {
    }
}
/**
 * Admin Reports Class.
 *
 * @class    WC_GC_Admin_Reports
 * @version  2.9.1
 */
class WC_GC_Admin_Reports
{
    /**
     * Setup Admin class.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Adds the reports tab.
     *
     * @param  array $reports
     * @return array
     */
    public static function add_reports($reports)
    {
    }
    /**
     * Get a report from our reports subfolder.
     *
     * @param string $name
     * @return void
     */
    public static function get_report($name)
    {
    }
}
/**
 * Base Report Class for GCs.
 *
 * @class    WC_GC_Admin_Report
 * @version  2.9.1
 */
class WC_GC_Report_Gift_Cards extends \WC_Admin_Report
{
    /**
     * Chart colors.
     *
     * @var array
     */
    public $chart_colours = array();
    /**
     * The report data.
     *
     * @var stdClass|null
     */
    private $report_data;
    /**
     * Get report data.
     *
     * @return stdClass
     */
    public function get_report_data()
    {
    }
    /**
     * Get all data needed for this report and store in the class.
     *
     * @return void
     */
    private function query_report_data()
    {
    }
    /**
     * Output an export link.
     *
     * @return void
     */
    public function get_export_button()
    {
    }
    /**
     * Get the legend for the main chart sidebar.
     *
     * @return array
     */
    public function get_chart_legend()
    {
    }
    /**
     * Output the report.
     *
     * @return void
     */
    public function output_report()
    {
    }
    /**
     * Round our totals correctly.
     *
     * @param array|string $amount
     *
     * @return array|string
     */
    private function round_chart_totals($amount)
    {
    }
    /**
     * Put data with post_date's into an array of times.
     *
     * @param  array  $data array of your data
     * @param  string $date_key key for the 'date' field. e.g. 'post_date'
     * @param  string $data_key key for the data you are charting
     * @param  int    $interval
     * @param  int    $start_date Start timestamp.
     * @param  string $group_by
     * @return array
     */
    public function prepare($data, $date_key, $data_key, $interval, $start_date, $group_by)
    {
    }
    /**
     * Get the main chart.
     *
     * @return void
     */
    public function get_main_chart()
    {
    }
}
/**
 * WooCommerce Gift Cards Settings.
 *
 * @class    WC_GC_Settings
 * @version  2.9.1
 */
class WC_GC_Settings extends \WC_Settings_Page
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Get settings array.
     *
     * @return array
     */
    public function get_settings()
    {
    }
    /**
     * Validate settings upon save.
     *
     * @since 1.9.0
     *
     * @param  string $value
     * @param  array  $option Option settings.
     * @return string
     */
    public function manage_settings($value, $option)
    {
    }
    /**
     * Revert disable UI setting value upon save.
     *
     * @since 1.7.3
     *
     * @param  string $value
     * @return string
     */
    public function manage_disable_ui_setting($value)
    {
    }
    /**
     * Validate BCC value upon save.
     *
     * @since 1.9.0
     *
     * @param  string $value
     * @return string
     */
    public function manage_bcc_setting($value)
    {
    }
}
class WC_GC_Checkout_Blocks_Endpoint
{
    /**
     * Plugin Identifier, unique to each plugin.
     *
     * @var string
     */
    const IDENTIFIER = 'woocommerce-gift-cards';
    /**
     * Bootstrap.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Register extensibility points.
     *
     * @return void
     */
    protected static function extend_store()
    {
    }
    /**
     * Create gift card order line items.
     *
     * @throws \Automattic\WooCommerce\StoreApi\Exceptions\RouteException
     *
     * @param \WC_Order $order
     * @return void
     */
    public static function rest_checkout_update_order_meta($order)
    {
    }
    /**
     * Handle gift card related actions through StoreAPI.
     *
     * @param array $args
     * @return void
     */
    public static function rest_handle_gift_card_endpoint($args)
    {
    }
    /**
     * Process front-end gift card form through REST API.
     *
     * @throws \Automattic\WooCommerce\StoreApi\Exceptions\RouteException
     *
     * @param  array $args
     * @return void
     */
    protected static function rest_process_gift_card_form($args)
    {
    }
    /**
     * Register gift card data into cart API.
     */
    public static function extend_cart_data()
    {
    }
    /**
     * Register gift cards schema into cart endpoint.
     *
     * @return array Registered schema.
     */
    public static function extend_cart_schema()
    {
    }
    /**
     * Adjust cart item quantity limits to ensure proper handling of multiple reciepients.
     *
     * @since 1.16.7
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
     * Ensure that cart item quantity can be changed in specific intervals based on reciepients.
     *
     * @since 1.16.7
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
}
/**
 * Class for integrating with WooCommerce Blocks scripts
 *
 * @package WooCommerce Gift Cards
 * @since   1.11.0
 *
 * @version 2.9.1
 */
class WC_GC_Checkout_Blocks_Integration implements \Automattic\WooCommerce\Blocks\Integrations\IntegrationInterface
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
     * @var WC_GC_Checkout_Blocks_Integration|null
     */
    protected static $_instance = \null;
    /**
     * Main WC_GC_Checkout_Blocks_Integration instance. Ensures only one instance of WC_GC_Checkout_Blocks_Integration is loaded or can be loaded.
     *
     * @static
     * @return WC_GC_Checkout_Blocks_Integration
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
     *
     * @return void
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
    /**
     * Enqueue block assets for the editor.
     *
     * @since 1.13.1
     *
     * @return void
     */
    public function enqueue_block_editor_assets()
    {
    }
    /**
     * Enqueue block assets for both editor and front-end.
     *
     * @since 1.13.1
     *
     * @return void
     */
    public function enqueue_block_assets()
    {
    }
    /**
     * Get the file modified time as a cache buster if we're in dev mode.
     *
     * @param string $file Local path to the file.
     * @return string|int|false The cache buster value to use for the given file.
     */
    protected function get_file_version($file)
    {
    }
}
/**
 * Registers WooCommerce Gift Cards abilities.
 *
 * @class    WC_GC_Abilities
 * @version  2.9.1
 */
class WC_GC_Abilities
{
    /**
     * Hook into the Abilities API lifecycle.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Adds Gift Cards ability definitions to WooCommerce's ability loader.
     *
     * @param  array $classes Ability definition class names.
     * @return array
     */
    public static function add_ability_definition_classes(array $classes)
    {
    }
}
/**
 * Account class.
 *
 * @class    WC_GC_Account
 * @version  2.9.1
 */
class WC_GC_Account
{
    /**
     * Cache query vars locally to avoid multiple get_option calls.
     *
     * @since 1.13.0
     * @var array
     */
    protected $query_vars = array();
    /**
     * Hook.
     */
    public function __construct()
    {
    }
    /**
     * Init query vars by loading options.
     *
     * @since 1.13.0
     * @return void
     */
    public function init_query_vars()
    {
    }
    /**
     * Whether or not a customer wants to use the balance.
     *
     * @return bool
     */
    public function use_balance()
    {
    }
    /**
     * Set the balance usage to on/off.
     *
     * @param  bool $use
     * @return void
     */
    public function set_balance_usage($use)
    {
    }
    /**
     * Fetches all active giftcards for customer.
     *
     * @param  int $user_id
     * @return array
     */
    public function get_active_giftcards($user_id = 0)
    {
    }
    /**
     * Try to fetch from session active giftcards. If not, save for later use.
     *
     * @return array
     */
    public function get_active_giftcards_from_session()
    {
    }
    /**
     * Clear caches.
     *
     * @return void
     */
    public function clear_caches()
    {
    }
    /**
     * Clear caches.
     *
     * @return void
     */
    public function maybe_clear_caches()
    {
    }
    /**
     * Whether or not the customer has balance.
     *
     * @return bool
     */
    public function has_balance()
    {
    }
    /**
     * Retrieve balance for customer.
     *
     * @param  int        $user_id
     * @param  array|null $giftcards
     * @return float
     */
    public function get_balance($user_id = 0, $giftcards = \null)
    {
    }
    /**
     * Process the email link redeeming if any.
     *
     * @since 1.1.0
     *
     * @return void
     */
    public function maybe_process_email_redeem()
    {
    }
    /**
     * Process the FE redeem form.
     *
     * @return void
     */
    public function process_redeem()
    {
    }
    /**
     * Add Gift Cards navigation item.
     *
     * @param  array $items
     * @return array
     */
    public function add_navigation_item($items)
    {
    }
    /**
     * Add Gift Cards navigation item.
     *
     * @since 1.2.2
     *
     * @param  array $settings
     * @return array
     */
    public function add_endpoint_setting($settings)
    {
    }
    /**
     * Render page html.
     *
     * @param  int $current_page (Optional)
     * @return void
     */
    public function render_page($current_page = 1)
    {
    }
    /**
     * Get the endpoint page title.
     *
     * @param  string $title
     * @param  string $endpoint
     * @return string
     */
    public function get_endpoint_title($title, $endpoint)
    {
    }
    /**
     * Add endpoint slug as query var.
     *
     * @param  array $query_vars
     * @return array
     */
    public function add_query_var($query_vars)
    {
    }
    /**
     * Init action on my account orders page.
     *
     * @since 1.6.0
     *
     * @param  mixed $query_args Unused.
     * @return void
     */
    public function init_my_account_pending_orders($query_args)
    {
    }
    /**
     * Filters my account order to show only pending orders.
     *
     * @since 1.6.0
     *
     * @param  array $query_args
     * @return array
     */
    public function filter_my_account_pending_orders($query_args)
    {
    }
    /**
     * Renders the order status name and appends the pending gift card balance indicator.
     *
     * Default callback on the `woocommerce_my_account_my_orders_column_order-status` action.
     * Compatibility modules may remove this and register `output_pending_balance_indicator()`
     * instead when another plugin owns the status rendering (see WC_GC_OSM_Compatibility).
     *
     * @since 1.6.0
     *
     * @param  WC_Order $order
     * @return void
     */
    public function add_pending_balance_in_account_orders_list($order)
    {
    }
    /**
     * Outputs the pending gift card balance indicator for an order.
     *
     * Kept separate from `add_pending_balance_in_account_orders_list()` so that
     * compatibility modules can register this as a standalone callback at a
     * later priority when another plugin is rendering the status name.
     *
     * @since 2.7.5
     *
     * @param  WC_Order $order Order being rendered in the My Account orders table.
     * @return void
     */
    public function output_pending_balance_indicator($order)
    {
    }
}
/**
 * Front-end AJAX filters for 'get_variation'.
 *
 * @class    WC_GC_Ajax
 * @version  2.9.1
 */
class WC_GC_Ajax
{
    /**
     * Hook in.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Toggle balance usage.
     *
     * @return void
     */
    public static function toggle_balance_usage()
    {
    }
    /**
     * Apply a gift card code to session.
     *
     * @return void
     */
    public static function apply_gift_card_to_session()
    {
    }
    /**
     * Remove a Gift Card from the session.
     *
     * @return void
     */
    public static function remove_gift_card_from_session()
    {
    }
}
/**
 * Abstract WC_GC_Async_Request class.
 *
 * @version 2.9.1
 */
abstract class WC_GC_Async_Request
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
     * Request body used to create the dispatch signature.
     *
     * @var array|null
     */
    private $signature_data = \null;
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
     * Get the form data represented by the outgoing request body.
     *
     * @since 2.7.7
     *
     * @param array $args HTTP request arguments.
     * @return array
     */
    private function get_post_signature_data($args)
    {
    }
    /**
     * Create a purpose-bound signature for an async request.
     *
     * @since 2.7.7
     *
     * @param int        $timestamp Request timestamp.
     * @param array|null $data Request body. Defaults to the pending request data.
     * @return string
     */
    protected function get_request_signature($timestamp, $data = \null)
    {
    }
    /**
     * Validate an async request signature and its lifetime.
     *
     * @since 2.7.7
     *
     * @param int    $timestamp Request timestamp.
     * @param string $signature Request signature.
     * @return bool
     */
    protected function is_request_signature_valid($timestamp, $signature)
    {
    }
    /**
     * Check the current request's purpose-bound signature.
     *
     * @since 2.7.7
     *
     * @return bool
     */
    protected function is_request_authenticated()
    {
    }
    /**
     * Maybe handle
     *
     * Check the request signature and pass to the handler.
     *
     * @return void
     */
    public function maybe_handle()
    {
    }
    /**
     * Handle
     *
     * Override this method to perform any actions required
     * during the async request.
     *
     * @return void
     */
    abstract protected function handle();
}
/**
 * Abstract WC_GC_Background_Process class.
 */
abstract class WC_GC_Background_Process extends \WC_GC_Async_Request
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
     * @return array|WP_Error
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
     *
     * @return void
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
     *
     * @return bool
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
     *
     * @return void
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
     *
     * @return void
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
     *
     * @return void
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
     *
     * @return void
     */
    public function handle_cron_healthcheck()
    {
    }
    /**
     * Schedule event
     *
     * @return void
     */
    protected function schedule_event()
    {
    }
    /**
     * Clear scheduled event
     *
     * @return void
     */
    protected function clear_scheduled_event()
    {
    }
    /**
     * Cancel Process
     *
     * Stop processing queue items, clear cronjob and delete batch.
     *
     * @return void
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
 * @class    WC_GC_Background_Updater
 * @version  2.9.1
 */
class WC_GC_Background_Updater extends \WC_GC_Background_Process
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
     * @return string
     */
    public function get_cron_hook_identifier()
    {
    }
    /**
     * Dispatch updater.
     *
     * @return array|WP_Error
     */
    public function dispatch()
    {
    }
    /**
     * Handle cron healthcheck.
     *
     * Restart the background process if not already running and data exists in the queue.
     *
     * @return void
     */
    public function handle_cron_healthcheck()
    {
    }
    /**
     * Schedule event.
     *
     * @return void
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
     * @param  string $callback
     * @return mixed
     */
    protected function task($callback)
    {
    }
    /**
     * When all tasks complete, update plugin db version and create log entry.
     *
     * @return void
     */
    protected function complete()
    {
    }
}
/**
 * WC_GC_Cart class.
 *
 * @version 2.9.1
 */
class WC_GC_Cart
{
    /**
     * Keep track of form notices.
     *
     * @var array
     */
    private $notices;
    /**
     * Applied Gift Cards.
     *
     * @var array
     */
    private $giftcards;
    /**
     * Keep track of various totals.
     *
     * @var array
     */
    private $totals;
    /**
     * Constructor for the cart class. Loads options and hooks in the init method.
     */
    public function __construct()
    {
    }
    /**
     * Add Store API validation hooks.
     *
     * @since 2.4.0
     */
    public function add_store_api_validation_hooks(): void
    {
    }
    /**
     * Handle Store API add to cart request.
     *
     * @since 2.4.0
     *
     * @param array           $add_to_cart_data Add to cart data.
     * @param WP_REST_Request $wp_rest_request WP REST Request.
     *
     * @throws \Automattic\WooCommerce\StoreApi\Exceptions\RouteException When add to cart isn't valid.
     *
     * @return array
     */
    public function handle_store_api_add_to_cart_request(array $add_to_cart_data, \WP_REST_Request $wp_rest_request): array
    {
    }
    /**
     * Normalize a configured email list into the array shape the rest of the plugin expects.
     *
     * Arrays and delimiter-separated strings go through the same parser, so the recipient count
     * used for pricing matches the one issuance derives from the stored order item.
     *
     * @since 2.8.0
     *
     * @param  mixed $emails Configured emails.
     * @return string[]
     */
    private static function parse_configured_emails($emails)
    {
    }
    /**
     * Map gift card configuration to cart item data.
     *
     * @since 2.4.0
     *
     * @param array $gift_card_configuration Gift card configuration.
     * @param array $cart_item_data Cart item data.
     * @return void
     */
    private function map_gift_card_config_to_cart_item_data(array &$gift_card_configuration, array &$cart_item_data)
    {
    }
    /**
     * Validate add to cart action for Store API. Throws an exception if add to cart isn't valid.
     *
     * @since 2.4.0
     *
     * @param WC_Product $product Product being added to cart.
     * @param array      $request Simple array with id, quantity, variation and cart_item_data keys. Not WP_REST_Request.
     *
     * @return void
     * @throws \Automattic\WooCommerce\StoreApi\Exceptions\RouteException When add to cart isn't valid.
     */
    public function validate_add_to_cart_store_api(\WC_Product $product, array $request): void
    {
    }
    /**
     * Sets whether to use balance through the Checkout context.
     *
     * @param  string $post_data
     * @return void
     */
    public function update_order_review($post_data)
    {
    }
    /**
     * Calculate totals using active Gift Cards.
     *
     * @since 1.14.0
     *
     * @param  WC_Cart $cart (Optional).
     * @return void
     */
    public function calculate_totals($cart = \null)
    {
    }
    /**
     * Calculate totals using active Gift Cards.
     *
     * @param  WC_Cart $cart
     * @return void
     */
    public function after_calculate_totals($cart)
    {
    }
    /**
     * Remove applied GC from session.
     *
     * @return void
     */
    public function destroy_cart_session()
    {
    }
    /**
     * Includes Gift Cards in cart hash.
     *
     * @since  1.5.4
     *
     * @param  string $hash
     * @param  array  $cart_session
     * @return string
     */
    public function handle_cart_hash($hash, $cart_session)
    {
    }
    /**
     * Print Gift Card table rows.
     *
     * @return void
     */
    public function print_gift_cards()
    {
    }
    /**
     * Display form to add gift card.
     *
     * @return void
     */
    public function display_form()
    {
    }
    /**
     * Display gift card related notices.
     *
     * @since  1.3.5
     *
     * @return void
     */
    public function display_notices()
    {
    }
    /**
     * Get all applied gift cards.
     *
     * @since 1.2.0
     *
     * @return array {
     *   giftcards  array An array with all the giftcard objects.
     *   total_amount  float The total amount covered.
     * }
     */
    public function get_applied_gift_cards()
    {
    }
    /**
     * Get all account-related applied gift cards.
     *
     * @since 1.2.0
     *
     * @return array {
     *   giftcards  array An array with all the giftcard objects.
     *   total_amount  float The total amount covered.
     * }
     */
    public function get_account_gift_cards()
    {
    }
    /**
     * Gets the totals breakdown for account balance.
     *
     * @since 1.2.0
     *
     * @return array
     */
    public function get_account_totals_breakdown()
    {
    }
    /**
     * Check if cart contains giftcards.
     *
     * @return bool
     */
    public function cart_contains_gift_card()
    {
    }
    /**
     * Process front-end Gift Card cart form.
     *
     * @param  array $args
     * @return bool
     */
    public function process_gift_card_cart_form($args)
    {
    }
    /**
     * Process the email link for session if any.
     *
     * @since 1.1.0
     *
     * @return void
     */
    public function maybe_process_email_session()
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Coupons.                                         */
    /*---------------------------------------------------*/
    /**
     * Setup all hooks for coupon usage restrictions.
     *
     * @since 1.7.0
     *
     * @return void
     */
    protected function setup_coupon_restrictions()
    {
    }
    /**
     * Disable coupons for gift card products.
     *
     * @since 1.7.0
     *
     * @param  bool       $is_valid
     * @param  WC_Product $product
     * @return bool
     */
    public function coupon_is_valid_for_product($is_valid, $product)
    {
    }
    /**
     * Invalidate coupons when used with gift card products.
     *
     * @since 1.7.0
     *
     * @param  bool      $is_valid
     * @param  WC_Coupon $coupon
     * @return bool
     */
    public function coupon_is_valid($is_valid, $coupon)
    {
    }
}
/**
 * DB updating and other stuff via WP-CLI.
 *
 * @class    WC_GC_CLI
 * @version  2.9.1
 */
class WC_GC_CLI
{
    /**
     * Load required files and hooks.
     */
    public function __construct()
    {
    }
    /**
     * Load command files.
     *
     * @return void
     */
    private function includes()
    {
    }
    /**
     * Sets up and hooks WP CLI to our CLI code.
     *
     * @return void
     */
    private function hooks()
    {
    }
}
/**
 * Gift Card emails manager.
 *
 * @class    WC_GC_Emails
 * @version  2.9.1
 */
class WC_GC_Emails
{
    /**
     * Email group slug used to group Gift Cards emails in WooCommerce.
     */
    public const EMAIL_GROUP = 'wc-gift-cards';
    /**
     * Email Templates collection.
     *
     * @since 1.2.0
     *
     * @var array
     */
    private $templates;
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Get a dummy gift card.
     *
     * @since 2.4.0
     * @return WC_GC_Gift_Card
     */
    private function get_dummy_giftcard(): \WC_GC_Gift_Card
    {
    }
    /**
     * Prepare email for preview.
     *
     * @since 2.4.0
     * @template T of WC_Email
     * @param T $email The email object being previewed.
     *
     * @return T
     */
    public function prepare_email_for_preview($email)
    {
    }
    /**
     * Inject setting ids for email preview.
     *
     * @since 2.4.0
     *
     * @param  string[] $setting_ids  The setting ids.
     * @param  string   $email_id     The email id.
     *
     * @return string[]
     */
    public function inject_setting_ids(array $setting_ids, string $email_id): array
    {
    }
    /**
     * Add CC/BCC recipients to email headers.
     *
     * @param string     $headers
     * @param string     $email_id
     * @param WC_Product $product
     * @param WC_Email   $email
     *
     * @return string
     */
    public function add_cc_bcc_recipients($headers, $email_id, $product, $email)
    {
    }
    /**
     * Registers custom emails actions.
     *
     * @param  array $actions
     * @return array
     */
    public function email_actions($actions)
    {
    }
    /**
     * Registers custom emails classes.
     *
     * @param  array $emails
     * @return array
     */
    public function email_classes($emails)
    {
    }
    /**
     * Register this email for the block editor.
     *
     * @param array $emails Array of email IDs.
     * @return array Modified array of email IDs.
     */
    public function register_gift_card_received_email_for_block_editor($emails)
    {
    }
    /**
     * Load email templates.
     *
     * @since 1.2.0
     *
     * @return void
     */
    protected function load_templates()
    {
    }
    /**
     * Get template object by template id.
     *
     * @since 1.2.0
     *
     * @param  string $template_id
     * @return false|WC_GC_Email_Template
     */
    public function get_template($template_id)
    {
    }
    /**
     * Get template object by product.
     *
     * @since 1.2.0
     *
     * @param  WC_Product $product
     * @return false|WC_GC_Email_Template
     */
    public function get_template_by_product($product)
    {
    }
    /**
     * Prints code in the email.
     *
     * @param  WC_GC_Gift_Card $giftcard
     * @param  string          $intro_content
     * @param  WC_Email        $email
     * @return void
     */
    public function gift_card_email_html($giftcard, $intro_content, $email = \null)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Helpers.
    |--------------------------------------------------------------------------
    */
    /**
     * Validates e-mails array.
     *
     * @param array $emails
     *
     * @return bool
     */
    public function validate_emails($emails)
    {
    }
}
/**
 * Gift Card Product view controller.
 *
 * @class    WC_GC_Gift_Card_Product
 * @version  2.9.1
 */
class WC_GC_Gift_Card_Product
{
    /**
     * Constructor.
     *
     * @return void
     */
    public static function init()
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Getters.                                         */
    /*---------------------------------------------------*/
    /**
     * Get form fields.
     *
     * @return array
     */
    public static function get_form_fields()
    {
    }
    /**
     * Read unexpired edit configurations belonging to this WooCommerce session.
     *
     * @since 2.8.0
     * @return array|null Configurations, or null when no browser session exists.
     */
    private static function get_edit_configurations()
    {
    }
    /**
     * Replace private URL fields with a short-lived reference in the current session.
     *
     * @since 2.8.0
     * @param string $link Product permalink.
     * @param array  $fields Gift card form values.
     * @return string
     */
    private static function get_edit_permalink($link, $fields)
    {
    }
    /**
     * Read form prefill from the submitted request or a private session reference.
     *
     * @since 2.8.0
     * @param string $key Gift card form field.
     * @return mixed
     */
    public static function get_form_field_value($key)
    {
    }
    /**
     * Prevent caching pages containing private edit form values.
     *
     * @since 2.8.0
     * @return void
     */
    public static function prevent_edit_form_caching()
    {
    }
    /**
     * Whether submitted CC recipients are accepted.
     *
     * Legacy visibility callbacks may depend on the product-page query. Keep them on the rendering path
     * and preserve historical CC acceptance on sites using them, rather than reinterpreting them as validation.
     *
     * @since 2.8.0
     *
     * @return bool
     */
    private static function is_cc_enabled()
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Front End Handlers.                              */
    /*---------------------------------------------------*/
    /**
     * Handle gift card form templates on simple products.
     *
     * @since 1.6.2
     *
     * @return void
     */
    public static function handle_simple_gift_card_form()
    {
    }
    /**
     * Handle gift card form templates on variable products.
     *
     * @since 1.6.2
     *
     * @return void
     */
    public static function handle_variable_gift_card_form()
    {
    }
    /**
     * Print gift card form template.
     *
     * @return void
     */
    public static function print_gift_card_form()
    {
    }
    /**
     * Add Gift Card container CSS class.
     *
     * @param  array      $classes
     * @param  WC_Product $product
     * @return array
     */
    public static function add_single_product_container_class($classes, $product)
    {
    }
    /**
     * Set quantity input type to hidden, when using add to cart + options and legacy theme.
     *
     * @since  2.7.2
     *
     * @param  string $type The input type.
     * @return string
     */
    public static function set_qty_input_hidden($type)
    {
    }
    /**
     * Modify add-to-cart button text.
     *
     * @param  string     $text
     * @param  WC_Product $product
     * @return string
     */
    public static function change_add_to_cart_text($text, $product)
    {
    }
    /**
     * Filter Add-to-cart url.
     *
     * @param  string     $url
     * @param  WC_Product $product
     * @return string
     */
    public static function add_to_cart_url($url, $product)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Add-to-cart.                                     */
    /*---------------------------------------------------*/
    /**
     * Disable AJAX add-to-cart feature.
     *
     * @param  bool       $supports
     * @param  string     $feature
     * @param  WC_Product $product
     * @return bool
     */
    public static function supports_ajax_add_to_cart($supports, $feature, $product)
    {
    }
    /**
     * Get posted configuration.
     *
     * @param  array|ArrayAccess<string, mixed> $posted_data (Optional).
     * @return array
     */
    public static function get_posted_gift_card_configuration($posted_data = array())
    {
    }
    /**
     * Add cart item data.
     *
     * @param  array $cart_item_data
     * @param  int   $product_id
     * @param  int   $variation_id
     * @param  int   $quantity (Optional)
     * @return array
     */
    public static function add_cart_item_data($cart_item_data, $product_id, $variation_id, $quantity = 0)
    {
    }
    /**
     * Modify cart quantity when adding to cart multiple emails.
     *
     * @param  array $cart_item
     * @return array
     */
    public static function add_cart_item($cart_item)
    {
    }
    /**
     * Change the default quantity html for the cart item.
     *
     * @param  string $product_quantity_html
     * @param  string $cart_item_key
     * @param  array  $cart_item
     * @return string
     */
    public static function manipulate_cart_quantity_input($product_quantity_html, $cart_item_key, $cart_item = \null)
    {
    }
    /**
     * Validates in-cart quantity changes.
     *
     * @param  bool   $passed
     * @param  string $cart_item_key
     * @param  array  $cart_item
     * @param  int    $quantity
     * @return bool
     */
    public static function update_cart_validation($passed, $cart_item_key, $cart_item, $quantity)
    {
    }
    /**
     * Disable one-click purchase for gift cards.
     *
     * @since 1.16.15
     *
     * @param  bool       $has_options
     * @param  WC_Product $product
     * @return bool
     */
    public static function handle_has_options($has_options, $product)
    {
    }
    /**
     * Change cart item permalink.
     *
     * @param  string $link
     * @param  array  $cart_item
     * @param  string $cart_item_key
     * @return string
     */
    public static function cart_item_permalink($link, $cart_item, $cart_item_key)
    {
    }
    /**
     * Validate add-to-cart action.
     *
     * @param  boolean $passed
     * @param  int     $product_id
     * @param  int     $quantity
     * @param  mixed   $variation_id
     * @param  array   $variations
     * @param  array   $cart_item_data
     * @return boolean
     */
    public static function validate_add_to_cart($passed, $product_id, $quantity, $variation_id = '', $variations = array(), $cart_item_data = array())
    {
    }
    /**
     * Validate form fields.
     *
     * @param  array      $configuration Configuration.
     * @param  WC_Product $product Gift Card product object.
     *
     * @throws Exception If validation fails.
     * @return void
     */
    public static function validate_form_fields($configuration, $product)
    {
    }
    /**
     * Filter to non-scalar all cart item meta.
     *
     * @param  array $item_data
     * @param  array $cart_item
     * @return array
     */
    public static function get_item_data($item_data, $cart_item)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Order Items.                                     */
    /*---------------------------------------------------*/
    /**
     * Filter to non-scalar all cart item meta.
     *
     * @param  WC_Order_Item $order_item
     * @param  string        $cart_item_key
     * @param  array         $cart_item
     * @param  WC_Order      $order
     * @return void
     */
    public static function create_order_line_item($order_item, $cart_item_key, $cart_item, $order)
    {
    }
    /**
     * Copy order item meta to cart meta.
     *
     * @param  array                 $cart_item_data
     * @param  WC_Order_Item_Product $order_item
     * @param  WC_Order              $order
     * @return array
     */
    public static function order_again_add_cart_item_data($cart_item_data, $order_item, $order)
    {
    }
    /**
     * Change order item permalink.
     *
     * @param  string   $link
     * @param  array    $order_item
     * @param  WC_Order $order
     * @return string
     */
    public static function order_item_permalink($link, $order_item, $order)
    {
    }
    /**
     * Filter the order item's meta labels if needed.
     *
     * @param  string        $display_key
     * @param  stdClass      $meta Meta data object.
     * @param  WC_Order_Item $order_item
     * @return string
     */
    public static function order_item_display_meta_key($display_key, $meta, $order_item)
    {
    }
    /**
     * Filter the order item's meta display value if needed.
     *
     * @param  string        $display_value
     * @param  stdClass      $meta Meta data object.
     * @param  WC_Order_Item $order_item
     * @return string
     */
    public static function order_item_display_meta_value($display_value, $meta = \null, $order_item = \null)
    {
    }
    /**
     * Mark meta keys as hidden.
     *
     * @param  array $hidden_meta
     * @return array
     */
    public static function order_item_hide_meta($hidden_meta)
    {
    }
    /**
     * Re-add necessary formatted meta data if WC hides them.
     *
     * @since  1.3.0
     *
     * @param  array         $formatted_meta
     * @param  WC_Order_Item $order_item
     * @return array
     */
    public static function order_item_add_formatted_meta_again($formatted_meta, $order_item)
    {
    }
    /**
     * Create gift cards.
     *
     * @param  int      $order_id
     * @param  WC_Order $order
     * @return void
     */
    public static function create_order_gift_cards($order_id, $order = \null)
    {
    }
    /**
     * Add a Gift Card unless its paid recipient allocation is already complete.
     *
     * @param  array $args Gift Card data.
     * @param  int   $recipient_quantity Purchased quantity for this recipient.
     * @param  int   $order_item_id Order item being issued.
     * @return false|int
     */
    private static function add_order_gift_card($args, $recipient_quantity, $order_item_id)
    {
    }
    /**
     * Acquire an issuance lock for an order item.
     *
     * @since 2.8.0
     *
     * @param  int $order_item_id Order item ID.
     * @return string Lock name, or an empty string when no lock could be taken.
     */
    private static function acquire_order_gift_card_lock($order_item_id)
    {
    }
    /**
     * Release an issuance lock.
     *
     * @since 2.8.0
     *
     * @param string $lock_name Lock name.
     * @return void
     */
    private static function release_order_gift_card_lock($lock_name)
    {
    }
    /**
     * Deactivate gift cards.
     *
     * @param  int      $order_id
     * @param  WC_Order $order
     * @return void
     */
    public static function deactivate_order_gift_cards($order_id, $order)
    {
    }
    /**
     * Check for scheduled giftcards before deleting an Order/Product.
     *
     * @since 1.3.6
     *
     * @param  int $post_id
     * @return void
     */
    public static function before_delete_post($post_id)
    {
    }
    /**
     * Check for scheduled giftcards before deleting an Order/Product through REST API.
     *
     * @since 1.3.6
     *
     * @param  bool   $permission
     * @param  string $context
     * @param  int    $object_id
     * @param  string $post_type
     * @return bool
     */
    public static function before_delete_rest_post($permission, $context, $object_id, $post_type)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Utilities.                                       */
    /*---------------------------------------------------*/
    /**
     * Check if product is gift card.
     *
     * @param  WC_Product $product
     * @return bool
     */
    public static function is_gift_card($product)
    {
    }
}
/**
 * Gift Card Controller class.
 *
 * @class    WC_GC_Gift_Card
 * @version  2.9.1
 */
class WC_GC_Gift_Card
{
    /**
     * A reference to the giftcard data object - @see WC_GC_Gift_Card_Data.
     *
     * @var WC_GC_Gift_Card_Data|false|null
     */
    public $data = \null;
    /**
     * Constructor.
     *
     * @param  int|object $giftcard  ID to load from the DB (optional).
     */
    public function __construct($giftcard = \null)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Getters.                                         */
    /*---------------------------------------------------*/
    /**
     * Get GiftCard ID.
     * Returns the ID of the associated WC_GC_Gift_Card_Data object - @see WC_GC_Gift_Card_Data class.
     *
     * @return int|null
     */
    public function get_id()
    {
    }
    /**
     * Get code.
     *
     * @return string|null
     */
    public function get_code()
    {
    }
    /**
     * Get order ID.
     *
     * @return int|null
     */
    public function get_order_id()
    {
    }
    /**
     * Get order item ID.
     *
     * @return int|null
     */
    public function get_order_item_id()
    {
    }
    /**
     * Get recipient.
     *
     * @return string|null
     */
    public function get_recipient()
    {
    }
    /**
     * Get redeemed by.
     *
     * @return int|null
     */
    public function get_redeemed_by()
    {
    }
    /**
     * Get sender.
     *
     * @return string|null
     */
    public function get_sender()
    {
    }
    /**
     * Get sender email.
     *
     * @return string|null
     */
    public function get_sender_email()
    {
    }
    /**
     * Get message.
     *
     * @return string|null
     */
    public function get_message()
    {
    }
    /**
     * Get balance.
     *
     * @return float|null
     */
    public function get_initial_balance()
    {
    }
    /**
     * Get remaining balance.
     *
     * @return float|null
     */
    public function get_balance()
    {
    }
    /**
     * Get create date.
     *
     * @return int|null
     */
    public function get_date_created()
    {
    }
    /**
     * Get deliver date.
     *
     * @return int|null
     */
    public function get_deliver_date()
    {
    }
    /**
     * Get expire date.
     *
     * @return int|null
     */
    public function get_expire_date()
    {
    }
    /**
     * Get redeem date.
     *
     * @return int|null
     */
    public function get_date_redeemed()
    {
    }
    /**
     * Get last modify date.
     *
     * @return int|null
     *
     * @since 2.1.0
     */
    public function get_last_modify_date()
    {
    }
    /**
     * Get template id.
     *
     * @since 1.2.0
     *
     * @return string
     */
    public function get_template_id()
    {
    }
    /**
     * Get the balance currency.
     *
     * Cards without currency metadata use their source order currency, then the
     * store's configured currency. The result is filterable so that stores which
     * changed currency after issuing cards can map those cards.
     *
     * @since 2.8.0
     *
     * @param  WC_GC_Gift_Card_Data|null $giftcard_data Loaded gift card data (optional).
     * @return string
     */
    public function get_currency($giftcard_data = \null)
    {
    }
    /**
     * Get generated hash.
     *
     * @since 1.1.0
     *
     * @return string
     */
    public function get_hash()
    {
    }
    /**
     * Get generated hash.
     *
     * @since 1.6.0
     *
     * @param  bool $expand
     * @return string
     */
    public function get_pending_balance($expand = \false)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Actions.                                         */
    /*---------------------------------------------------*/
    /**
     * Redeem giftcard.
     *
     * @throws Exception
     *
     * @param  int  $user_id
     * @param  bool $force
     * @param  bool $log
     * @return bool
     */
    public function redeem($user_id, $force = \false, $log = \true)
    {
    }
    /**
     * Use the Gift Card for an order.
     *
     * @throws Exception
     *
     * @param  float               $amount
     * @param  WC_Order|false|null $order Order the amount is used for, or false/null when no order applies (pass $log = false then).
     * @param  bool                $log
     * @return bool
     */
    public function debit($amount, $order, $log = \true)
    {
    }
    /**
     * Credit the Gift Card.
     *
     * @throws Exception
     *
     * @param  float         $amount Amount to credit.
     * @param  WC_Order|null $order Order, optional when the activity is not logged.
     * @param  bool          $log Whether to log the activity.
     * @return bool
     */
    public function credit($amount, $order, $log = \true)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Utilities.                                       */
    /*---------------------------------------------------*/
    /**
     * Is usable.
     *
     * @return bool
     */
    public function is_usable()
    {
    }
    /**
     * Is active.
     *
     * @return bool
     */
    public function is_active()
    {
    }
    /**
     * Is virtual.
     *
     * @return bool
     */
    public function is_virtual()
    {
    }
    /**
     * Is redeemable.
     *
     * @since 1.0.4
     *
     * @return bool
     */
    public function is_redeemable()
    {
    }
    /**
     * Is redeemed.
     *
     * @return bool
     */
    public function is_redeemed()
    {
    }
    /**
     * Is delivered.
     *
     * @return int|false
     */
    public function is_delivered()
    {
    }
    /**
     * Has expired?.
     *
     * @return bool
     */
    public function has_expired()
    {
    }
}
/**
 * WC_GC_Gift_Cards_Query_Ability ability definition.
 *
 * @version 2.9.1
 */
class WC_GC_Gift_Cards_Query_Ability implements \Automattic\WooCommerce\Abilities\AbilityDefinition
{
    /**
     * Gift cards query ability ID.
     */
    const NAME = 'woocommerce-gift-cards/gift-cards-query';
    /**
     * Ability category.
     */
    const CATEGORY = 'woocommerce';
    /**
     * Gift cards collection orderby values.
     */
    private const ORDERBY_VALUES = array('id', 'create_date', 'deliver_date', 'balance', 'remaining', 'order_id');
    /**
     * Get the ability name.
     *
     * @return string
     */
    public static function get_name(): string
    {
    }
    /**
     * Get the ability registration arguments.
     *
     * @return array
     */
    public static function get_registration_args(): array
    {
    }
    /**
     * Check whether the current user can query gift cards.
     *
     * @param  mixed $input Ability input.
     * @return bool
     */
    public static function can_query_gift_cards($input = array())
    {
    }
    /**
     * Query gift cards.
     *
     * @param  mixed $input Ability input.
     * @return array|WP_Error
     */
    public static function execute($input = array())
    {
    }
    /**
     * Get read-only tool metadata.
     *
     * @return array
     */
    private static function get_meta(): array
    {
    }
    /**
     * Get the gift cards query input schema.
     *
     * @return array
     */
    private static function get_input_schema(): array
    {
    }
    /**
     * Get the gift cards query output schema.
     *
     * @return array
     */
    private static function get_output_schema(): array
    {
    }
    /**
     * Get the gift card item output schema.
     *
     * @return array
     */
    private static function get_gift_card_output_schema(): array
    {
    }
    /**
     * Get a single gift card result.
     *
     * @param  int $gift_card_id Gift card ID.
     * @return array|WP_Error
     */
    private static function get_gift_card_result($gift_card_id)
    {
    }
    /**
     * Get a gift cards collection result.
     *
     * @param  array $input Query input.
     * @return array
     */
    private static function get_gift_cards_result($input)
    {
    }
    /**
     * Format a gift card data object for the Gift Cards query ability contract.
     *
     * Keep the externally projected ability response explicit, separately from REST response shape.
     *
     * @param  WC_GC_Gift_Card_Data $gift_card Gift card data object.
     * @return array
     */
    private static function format_gift_card_response($gift_card)
    {
    }
    /**
     * Check whether the gift card message should be omitted from ability output.
     *
     * @return bool
     */
    private static function should_mask_message()
    {
    }
}
/**
 * Gift Card Collection Controller class.
 *
 * @class    WC_GC_Gift_Cards
 * @version  2.9.1
 */
class WC_GC_Gift_Cards
{
    /**
     * Get all active Gift Cards from session.
     *
     * @return array
     */
    public function get()
    {
    }
    /**
     * Fetch from session applied giftcards through the inline forms.
     *
     * @return array
     */
    public function get_applied_giftcards_from_session()
    {
    }
    /**
     * Apply a gift card to session.
     *
     * @throws Exception
     *
     * @param  WC_GC_Gift_Card $giftcard
     * @return void
     */
    public function apply_giftcard_to_session($giftcard)
    {
    }
    /**
     * Remove an applied Gift Card from the session.
     *
     * @param  int $id
     * @return void
     */
    public function remove_giftcard_from_session($id)
    {
    }
    /**
     * Return giftcards needed to cover the given balance.
     *
     * @param  float      $balance
     * @param  array|null $giftcards Gift cards to use. Defaults to the active gift cards in the session.
     * @return array
     */
    public function cover_balance($balance, $giftcards = \null)
    {
    }
    /**
     * Return gift cards needed to cover a balance in a specific currency.
     *
     * @since 2.8.0
     *
     * @param  float      $balance Balance to cover.
     * @param  array|null $giftcards Gift cards to use.
     * @param  string     $currency Balance currency.
     * @return array
     */
    public function cover_balance_for_currency($balance, $giftcards, $currency)
    {
    }
    /**
     * Order giftcards to be used by priority.
     *
     * @param  WC_GC_Gift_Card_Data $a
     * @param  WC_GC_Gift_Card_Data $b
     * @return int
     */
    private function compare_giftcards($a, $b)
    {
    }
}
/**
 * Handles installation and updating tasks.
 *
 * @class    WC_GC_Install
 * @version  2.9.1
 */
class WC_GC_Install
{
    /**
     * DB updates and callbacks that need to be run per version.
     *
     * @var array<string, string[]>
     */
    private static $db_updates = array('1.7.0' => array('wc_gc_update_170_main', 'wc_gc_update_170_db_version'));
    /**
     * Background update class.
     *
     * @var WC_GC_Background_Updater|null
     */
    private static $background_updater;
    /**
     * Current plugin version.
     *
     * @var string|null
     */
    private static $current_version;
    /**
     * Current DB version.
     *
     * @var string|null
     */
    private static $current_db_version;
    /**
     * Whether install() ran in this request.
     *
     * @var boolean
     */
    private static $is_install_request;
    /**
     * Hook in.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Init background updates.
     *
     * @return void
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
     * @return boolean
     */
    private static function can_install()
    {
    }
    /**
     * Check version and run the installer if necessary.
     *
     * @return void
     */
    public static function maybe_install()
    {
    }
    /**
     * Is currently installing?
     *
     * @since  1.2.0
     *
     * @return boolean
     */
    private static function is_installing()
    {
    }
    /**
     * DB update needed?
     *
     * @return boolean
     */
    private static function must_update()
    {
    }
    /**
     * DB update possible?
     *
     * @return boolean
     */
    private static function can_update()
    {
    }
    /**
     * Run the updater if triggered.
     *
     * @return void
     */
    public static function maybe_update()
    {
    }
    /**
     * Register Site Health tests.
     *
     * @since  2.7.4
     *
     * @param  array $tests Site health tests.
     * @return array
     */
    public static function add_site_health_tests($tests)
    {
    }
    /**
     * Site Health test: verify all custom tables exist.
     *
     * @since  2.7.4
     *
     * @return array
     */
    public static function site_health_test_tables()
    {
    }
    /**
     * If the DB version is out-of-date, a DB update must be in progress: define a 'WC_GC_UPDATING' constant.
     *
     * @return void
     */
    public static function define_updating_constant()
    {
    }
    /**
     * Install GC.
     *
     * @return void
     */
    public static function install()
    {
    }
    /**
     * Set up the database tables which the plugin needs to function.
     *
     * @return void
     */
    private static function create_tables()
    {
    }
    /**
     * True if all custom tables exist.
     *
     * @since  2.7.4
     *
     * @return boolean
     */
    public static function tables_exist()
    {
    }
    /**
     * Schedule cron events.
     *
     * @since 1.12.0
     * @return void
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
     * Update WC GC version to current.
     *
     * @return void
     */
    private static function update_version()
    {
    }
    /**
     * Push all needed DB updates to the queue for processing.
     *
     * @return void
     */
    private static function update()
    {
    }
    /**
     * Is auto-updating enabled?
     *
     * @return boolean
     */
    public static function auto_update_enabled()
    {
    }
    /**
     * Trigger DB update.
     *
     * @return void
     */
    public static function trigger_update()
    {
    }
    /**
     * Force re-start the update cron if everything else fails.
     *
     * @return void
     */
    public static function force_update()
    {
    }
    /**
     * Updates plugin DB version when all updates have been processed.
     *
     * @return void
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
     * @return boolean
     */
    public static function is_update_incomplete()
    {
    }
    /**
     * True if a DB update is in progress.
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
     * @return boolean
     */
    public static function is_update_background_process_running()
    {
    }
    /**
     * True if a CLI update is running.
     *
     * @return boolean
     */
    public static function is_update_cli_process_running()
    {
    }
    /**
     * Update DB version to current.
     *
     * @param  string $version
     * @return void
     */
    public static function update_db_version($version = \null)
    {
    }
    /**
     * Get list of DB update callbacks.
     *
     * @return array<string, string[]>
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
 * Notice handling.
 *
 * @class    WC_GC_Notices
 * @version  2.9.1
 */
class WC_GC_Notices
{
    /**
     * Notice options.
     *
     * @var mixed
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
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Get a setting for a notice type.
     *
     * @since  1.3.4
     *
     * @param  string $notice_name
     * @param  string $key
     * @param  mixed  $default
     * @return mixed
     */
    public static function get_notice_option($notice_name, $key, $default = \null)
    {
    }
    /**
     * Set a setting for a notice type.
     *
     * @since  1.3.4
     *
     * @param  string $notice_name
     * @param  string $key
     * @param  mixed  $value
     * @return void
     */
    public static function set_notice_option($notice_name, $key, $value)
    {
    }
    /**
     * Save notice options to the DB.
     *
     * @return void
     */
    public static function save_notice_options()
    {
    }
    /**
     * Updates data used to display notices.
     *
     * @since  1.3.4
     * @return void
     */
    public static function update_notice_data()
    {
    }
    /**
     * Updates data for the 'queue' notice.
     *
     * @since  1.3.4
     * @param  bool $force Unused.
     * @return void
     */
    private static function update_queue_notice_data($force = \false)
    {
    }
    /**
     * Searches for overdue delivery tasks and returns true if any are found.
     *
     * @since  1.3.4
     *
     * @param  int $time_overdue
     * @return boolean
     */
    public static function has_overdue_deliveries($time_overdue = \DAY_IN_SECONDS)
    {
    }
}
/**
 * Gift Card Order Item Model class.
 *
 * @class    WC_GC_Order_Item_Gift_Card
 * @version  2.9.1
 */
class WC_GC_Order_Item_Gift_Card extends \WC_Order_Item
{
    /**
     * Extra item data required for Gift Cards.
     *
     * @var array
     */
    protected $extra_data = array('giftcard_id' => 0, 'code' => '', 'amount' => 0);
    /**
     * Runtime cache of the giftcard object.
     *
     * @since 1.10.0
     *
     * @var WC_GC_Gift_Card_Data|false|null
     */
    protected $giftcard;
    /*
    	---------------------------------------------------*/
    /*
    		Setters.                                         */
    /*---------------------------------------------------*/
    /**
     * Set item amount.
     *
     * @param  string $value
     * @return void
     */
    public function set_name($value)
    {
    }
    /**
     * Set item amount.
     *
     * @param  string $value
     * @return void
     */
    public function set_code($value)
    {
    }
    /**
     * Set item amount.
     *
     * @param  float $value
     * @return void
     */
    public function set_amount($value)
    {
    }
    /**
     * Set giftcard id.
     *
     * @param  int $value
     * @return void
     */
    public function set_giftcard_id($value)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Getters.                                         */
    /*---------------------------------------------------*/
    /**
     * Magic getters.
     *
     * @param string $name Property name.
     * @return mixed
     */
    public function &__get($name)
    {
    }
    /**
     * Get name.
     *
     * @return string
     */
    public function get_name($context = 'view')
    {
    }
    /**
     * Get type.
     *
     * @return string
     */
    public function get_type()
    {
    }
    /**
     * Get code.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_code($context = 'view')
    {
    }
    /**
     * Get type.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return float
     */
    public function get_amount($context = 'view')
    {
    }
    /**
     * Get giftcard id.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return int
     */
    public function get_giftcard_id($context = 'view')
    {
    }
    /**
     * Get giftcard.
     *
     * @since 1.10.0
     *
     * @return WC_GC_Gift_Card_Data|false
     */
    public function get_giftcard()
    {
    }
    /**
     * Get captured balance amount.
     *
     * @since 1.10.0
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return float
     */
    public function get_captured_amount($context = 'view')
    {
    }
    /**
     * Get refunded balance amount.
     *
     * @since 1.10.0
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return float
     */
    public function get_refunded_amount($context = 'view')
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Utilities.                                       */
    /*---------------------------------------------------*/
}
/**
 * WC_GC_Order class.
 *
 * @version 2.9.1
 */
class WC_GC_Order
{
    private $debit_order_statuses;
    private $credit_order_statuses;
    /**
     * Constructor for the cart class. Loads options and hooks in the init method.
     */
    public function __construct()
    {
    }
    /**
     * Get Gift Cards total amount from a given order.
     *
     * @param  WC_Order $order
     * @return array
     */
    public function get_gift_cards($order)
    {
    }
    /**
     * Get total captured amount.
     *
     * @since 1.10.0
     *
     * @param  int|WC_Order $order
     * @param  string       $context
     * @return float
     */
    public function get_order_total_captured($order, $context = 'view')
    {
    }
    /**
     * Get total refunded amount.
     *
     * @since 1.10.0
     *
     * @param  int|WC_Order $order
     * @param  string       $context
     * @return float
     */
    public function get_order_total_refunded($order, $context = 'view')
    {
    }
    /**
     * Get total gift cards amount.
     *
     * @since 1.10.0
     *
     * @param  int|WC_Order $order
     * @return float
     */
    public function get_order_total_gift_cards($order)
    {
    }
    /**
     * Get the total amount of gift cards formatted.
     *
     * @since 1.10.0
     *
     * @param  WC_Order $order
     * @param  bool     $display_refunded (Optional)
     * @return string
     */
    public function get_formatted_order_total_gift_cards($order, $display_refunded = \true)
    {
    }
    /**
     * Filters the refund amount in view context.
     *
     * @since 1.10.0
     *
     * @param  int|float|string $value Refund amount.
     * @param  WC_Order_Refund  $refund
     * @return int|float|string
     */
    public function filter_display_refund_amount($value, $refund)
    {
    }
    /**
     * Re-Calculate order's total.
     *
     * @param  WC_Order $order
     * @return float
     */
    public function get_order_total($order)
    {
    }
    /**
     * Has order refunds to gift cards.
     *
     * @param  int|WC_Order $order Order ID or object.
     * @return bool|null
     */
    public function has_order_refunds_to_gift_cards($order)
    {
    }
    /**
     * Get Gift Cards total amount from a given order.
     *
     * @param  bool     $and_taxes
     * @param  WC_Order $order
     * @return void
     */
    public function after_calculate_totals($and_taxes, $order)
    {
    }
    /**
     * Calculate totals when updating an order.
     *
     * @param  int $order_id
     * @return void
     */
    public function update_order($order_id)
    {
    }
    /**
     * Print Gift Card item in admin order details.
     *
     * @param  WC_GC_Order_Item_Gift_Card $giftcard_order_item
     * @param  WC_Order                   $order
     * @return void
     */
    private function print_admin_order_item($giftcard_order_item, $order)
    {
    }
    /**
     * Adds Gift Cards totals in admin order details.
     *
     * @param  int $order_id
     * @return void
     */
    public function add_admin_order_items($order_id)
    {
    }
    /**
     * Adds Gift Cards totals in admin order details.
     *
     * @param  int $order_id
     * @return void
     */
    public function add_admin_order_totals($order_id)
    {
    }
    /**
     * Adds Gift Cards totals in order details.
     *
     * @param  array    $total_rows
     * @param  WC_Order $order
     * @return array
     */
    public function add_order_details_totals($total_rows, $order)
    {
    }
    /**
     * If only Gift Cards in cart transition to Complete.
     *
     * @param  bool       $is_processing_needed
     * @param  WC_Product $product
     * @param  int        $order_id
     * @return bool
     */
    public function gift_card_needs_processing($is_processing_needed, $product, $order_id)
    {
    }
    /**
     * Maybe debit balances.
     *
     * @throws Exception
     *
     * @param  int      $order_id
     * @param  WC_Order $order
     * @param  array    $giftcard_items (Optional)
     * @return void
     */
    public function maybe_debit_giftcards($order_id, $order, $giftcard_items = array())
    {
    }
    /**
     * Maybe credit balances.
     *
     * @throws Exception When the order cannot be locked or a gift card cannot be credited.
     *
     * @param  int      $order_id
     * @param  WC_Order $order
     * @param  array    $giftcard_items (Optional)
     * @return void
     */
    public function maybe_credit_giftcards($order_id, $order, $giftcard_items = array())
    {
    }
    /**
     * Adds Gift Cards order items.
     *
     * @throws Exception
     *
     * @param  WC_Order $order
     * @return void
     */
    public function checkout_create_order($order)
    {
    }
    /**
     * Unlocks all giftcards in the given order.
     *
     * @since  1.14.0
     *
     * @param  WC_Order $order
     * @return void
     */
    public function unlock_giftcards($order)
    {
    }
    /**
     * If a resume order is placed we need to sanity check all on-hold balances. @see WC_GC_Order::checkout_create_order.
     *
     * @since  1.5.4
     *
     * @throws Exception
     *
     * @param  int $order_id
     * @return void
     */
    public function handle_order_awaiting_payment($order_id)
    {
    }
    /**
     * Refuse to pay an order whose gift cards can no longer cover their share, e.g. a failed order being retried.
     *
     * @param  WC_Order $order Order being paid.
     * @return void
     */
    public function validate_pay_order_giftcards($order)
    {
    }
    /**
     * Debit Gift Cards on newly created orders.
     *
     * @param  int      $order_id
     * @param  array    $posted_data
     * @param  WC_Order $order
     * @return void
     */
    public function checkout_order_processed($order_id, $posted_data, $order)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Order Item Configuration.                        */
    /*---------------------------------------------------*/
    /**
     * Filter order item classname.
     *
     * @param  string $classname
     * @param  string $item_type
     * @return string
     */
    public function get_order_item_classname($classname, $item_type)
    {
    }
    /**
     * Filter order item key.
     *
     * @param  string $key
     * @param  mixed  $item
     * @return string
     */
    public function get_items_key($key, $item)
    {
    }
    /**
     * Filter order item type group.
     *
     * @param  array $groups
     * @return array
     */
    public function order_type_to_group($groups)
    {
    }
    /**
     * Attach data store to order item.
     *
     * @param  array $stores
     * @return array
     */
    public function order_item_data_store($stores)
    {
    }
    /**
     * Handle trashing orders.
     *
     * @since  1.5.4
     *
     * @param  int $post_id Post ID or Order id.
     * @return void
     */
    public function handle_trash_order($post_id)
    {
    }
    /**
     * After order trashed replace with cancelled status.
     *
     * @since  1.5.4
     *
     * @param  int $post_id Post ID or Order ID.
     * @return void
     */
    public function after_trash_order($post_id)
    {
    }
    /**
     * Check for pending balances in giftcards before deleting an Order.
     *
     * @since  1.5.4
     *
     * @param  int $post_id Post ID or Order id.
     * @return void
     */
    public function before_delete_order($post_id)
    {
    }
    /**
     * Check for pending balances in giftcards before deleting an Order through REST API.
     *
     * @since  1.5.4
     *
     * @param  bool   $permission
     * @param  string $context
     * @param  int    $object_id
     * @param  string $post_type
     * @return bool
     */
    public function before_delete_rest_order($permission, $context, $object_id, $post_type)
    {
    }
    /**
     * Handle pending balances.
     *
     * @since  1.6.0
     *
     * @param  int $order_id
     * @return void
     */
    public function handle_pending_balance_tracking($order_id)
    {
    }
    /**
     * Add pending balances tracking meta.
     *
     * @since  1.6.0
     *
     * @param  WC_Order_Item $order_item Order item.
     * @param  WC_Order      $order (Optional)
     * @return int|false
     */
    public function add_pending_balance_tracking($order_item, $order = \null)
    {
    }
    /**
     * Add pending balances tracking meta.
     *
     * @since  1.6.0
     *
     * @param  WC_Order_Item $order_item Order item.
     * @return int|false
     */
    public function remove_pending_balance_tracking($order_item)
    {
    }
    /**
     * Save only the requested pending-balance metadata key.
     *
     * @since 2.8.0
     *
     * @param WC_GC_Gift_Card_Data $giftcard Gift card data.
     * @param string               $meta_key Metadata key.
     * @param mixed                $value Metadata value.
     * @param bool                 $delete Whether to delete the key.
     * @return int|false
     */
    private function save_pending_balance_tracking($giftcard, $meta_key, $value = \null, $delete = \false)
    {
    }
    /**
     * Add help notice in pay-pages.
     *
     * @since 1.6.0
     *
     * @return void
     */
    public function add_notices_in_pay_page()
    {
    }
    /**
     * Maybe move pay page notice params in the next redirect url.
     *
     * @since 1.6.0
     *
     * @param  mixed $url Checkout payment URL.
     * @return string
     */
    public function maybe_add_notices_in_order_pay_url($url)
    {
    }
    /**
     * Acquire a lock for an order's gift card balance changes.
     *
     * @since 2.8.0
     *
     * @throws Exception When another request still holds the lock after the timeout.
     *
     * @param  int $order_id Order ID.
     * @return string Lock name, or an empty string when the host has no GET_LOCK support.
     */
    public static function acquire_order_lock($order_id)
    {
    }
    /**
     * Release an order lock.
     *
     * @since 2.8.0
     *
     * @param string $lock_name Lock name.
     * @return void
     */
    public static function release_order_lock($lock_name)
    {
    }
}
/**
 * WC_GC_Refunds Class.
 *
 * @version 2.9.1
 */
class WC_GC_Refunds
{
    /**
     * Setup refunds in admin.
     *
     * @return void
     */
    public static function init()
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Refund flow methods.
    	/*---------------------------------------------------*/
    /**
     * Add gift card specific data when creating a new refund object.
     * TODO: In case of failure, revert refunds.
     *
     * @param  WC_Order_Refund $refund
     * @param  array           $args
     * @return void
     */
    public static function handle_create_refund($refund, $args)
    {
    }
    /**
     * When refunding an order, check for captured balance before consider it as fully refunded.
     *
     * @since 1.12.2
     *
     * @param  boolean $is_partial
     * @param  int     $order_id
     * @return boolean
     */
    public static function is_partially_refunded($is_partial, $order_id)
    {
    }
    /**
     * When refunding an order, create a refund line item if the partial refunds do not match gift card order total.
     *
     * @param  int      $order_id
     * @param  WC_Order $order
     * @return void
     */
    public static function order_fully_refunded($order_id, $order)
    {
    }
    /**
     * Re-hook emails actions for the WC_Email_Customer_Refunded_Order email.
     *
     * @param  int   $refund_id
     * @param  array $args
     * @return void
     */
    public static function enable_refund_emails($refund_id, $args)
    {
    }
    /**
     * Un-hook emails actions for the WC_Email_Customer_Refunded_Order email.
     *
     * @param  array $args
     * @return void
     */
    public static function disable_refund_emails($args)
    {
    }
    /**
     * Delete a refund.
     *
     * @override
     *
     * @return void
     */
    public static function delete_refund()
    {
    }
    /**
     * Validate the balance required to reverse a batch of refunds.
     *
     * @since 2.8.0
     *
     * @param WC_Order_Refund[] $refunds Refunds.
     * @return array
     */
    private static function validate_delete_refund_batch($refunds)
    {
    }
    /**
     * Handle deleting a refund.
     *
     * @param  int $refund_id
     * @return bool|string
     */
    public static function handle_delete_refund($refund_id)
    {
    }
    /**
     * Handle a refund via the edit order screen.
     *
     * @return void
     */
    public static function refund_line_items()
    {
    }
}
/**
 * REST API Endpoints.
 * Similar to Automattic\WooCommerce\RestApi\Server.php.
 *
 * @class    WC_GC_REST_API
 * @version  2.9.1
 */
class WC_GC_REST_API
{
    /**
     * Load required files, setups hooks and rest api fields.
     */
    public function __construct()
    {
    }
    /**
     * Load REST API related files.
     *
     * @return void
     */
    private function includes()
    {
    }
    /**
     * Sets up hooks.
     *
     * @return void
     */
    private function register_hooks()
    {
    }
    /**
     * If the requested template is 'gift-card', return the path to the gift card template.
     *
     * @since 1.16.11
     * @param string $template_path Current template path.
     * @param string $template_name Requested template name.
     * @return string
     */
    public function gift_card_template_csv_file_path($template_path, $template_name)
    {
    }
    /**
     * Register Gift Cards REST namespace.
     *
     * @param  array $namespaces List of registered namespaces.
     * @return array
     */
    public function register_rest_namespaces($namespaces)
    {
    }
    /**
     * Instantiate classes that register new fields in existing routes.
     *
     * @return void
     */
    private function register_fields()
    {
    }
}
/**
 * WooCommerce Gift Cards Shortcodes class.
 *
 * @version 2.9.1
 */
class WC_GC_Shortcodes
{
    /**
     * Init shortcodes.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Shortcode Wrapper.
     *
     * @param  mixed        $function Render function.
     * @param  mixed        $args     Arguments to pass through the render function.
     * @param  array|string $wrapper  Attributes passed in the shortcode call.
     * @return string
     */
    public static function shortcode_wrapper($function, $args = array(), $wrapper = array())
    {
    }
    /**
     * My account giftcards page shortcode.
     *
     * @param  array|string $atts Shortcode attributes, or an empty string when none are given.
     * @return string
     */
    public static function my_account_giftcards($atts)
    {
    }
    /**
     * Giftcards apply form shortcode.
     *
     * @param  array|string $atts Shortcode attributes, or an empty string when none are given.
     * @return string
     */
    public static function giftcard_form($atts)
    {
    }
}
/**
 * Display functions and filters.
 *
 * @class    WC_GC_Templates
 * @version  2.9.1
 */
class WC_GC_Templates
{
    /**
     * Should dequeue scripts status.
     *
     * @since 1.1.1
     *
     * @var bool
     */
    private $should_dequeue_scripts;
    /**
     * Setup hooks and functions.
     */
    public function __construct()
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Setters.                                         */
    /*---------------------------------------------------*/
    /**
     * Force enqueuing scripts or not.
     *
     * @since  1.1.1
     *
     * @return void
     */
    public function enqueue_scripts()
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Callbacks.                                       */
    /*---------------------------------------------------*/
    /**
     * Front-end styles and scripts.
     *
     * @return void
     */
    public function frontend_scripts()
    {
    }
    /**
     * Dequeue script when not viewing a Gift Card product.
     *
     * @since  1.1.1
     *
     * @return void
     */
    public function dequeue_product_scripts()
    {
    }
}
/**
 * Gift Cards Tracker.
 *
 * @class    WC_GC_Tracker
 * @version  2.9.1
 */
class WC_GC_Tracker
{
    /**
     * Property to store reusable query data.
     *
     * @since 1.15.4
     * @var   array
     */
    private static $reusable_data = array();
    /**
     * Property to store and share tracking data in the class.
     *
     * @since 1.15.4
     * @var   array
     */
    private static $data = array();
    /**
     * Property to store previously calculated data.
     * We need it to retain and not recalculate parts of the data.
     *
     * @since 1.15.4
     * @var   array
     */
    private static $calculated_data = array();
    /**
     * Property to store if we should retain the previously calculated data.
     *
     * @since 1.15.4
     * @var   boolean
     */
    private static $should_retain_calculated_data = \false;
    /**
     * Property to store the starting time of the process.
     *
     * @since 1.15.4
     * @var   int
     */
    private static $start_time = 0;
    /**
     * Property to store the HPOS table name.
     *
     * @since 1.15.4
     * @var   string
     */
    private static $hpos_orders_table = '';
    /**
     * Initialize the Tracker.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Adds GC data to the tracked data.
     *
     * @param  array $data
     * @return array all the tracking data.
     */
    public static function add_tracking_data($data)
    {
    }
    /**
     * Get all tracking data from cache.
     *
     * @return array All the tracking data.
     */
    protected static function get_tracking_data()
    {
    }
    /**
     * Calculates all tracking-related data.
     * Runs independently in a background task.
     *
     * @see ::maybe_calculate_tracking_data().
     * @return void
     */
    protected static function calculate_tracking_data()
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
     * Calculate settings data.
     *
     * @since  1.15.4
     * @return void
     */
    private static function calculate_settings_data()
    {
    }
    /**
     * Calculate gift cards data.
     *
     * The following data are calculated:
     * - first_issued_date
     * - product_first_create_date
     * - issued_previous_month
     * - issued_previous_year
     * - issued_total
     * - issued_revenue_previous_month
     * - issued_revenue_previous_year
     * - issued_revenue_total
     * - redeemed_revenue_total
     * - used_revenue_total
     * - used_total
     *
     * @since  1.15.4
     * @return void
     */
    private static function calculate_giftcards_data()
    {
    }
    /**
     * Calculate orders data.
     *
     * The following data is calculated:
     * - balance_revenue_previous_month
     * - revenue_previous_month
     * - balance_revenue_previous_month_percent
     * - balance_revenue_previous_year
     * - revenue_previous_year
     * - balance_revenue_previous_year_percent
     * - count_with_balance_previous_month
     * - count_previous_month
     * - usage_previous_month_percent
     * - count_with_balance_previous_year
     * - count_previous_year
     * - usage_previous_year_percent
     * - orders_in_multiple_currencies
     * - first_order_with_giftcard_date
     * - count_with_giftcard_total
     *
     * @since  1.15.4
     * @return void
     */
    private static function calculate_orders_data()
    {
    }
    /**
     * Get dates.
     *
     * @param  string   $time_period
     * @param  DateTime $reference_date  (Optional) Date to act as reference for calculating the previous month, year. Defaults to 'now'.
     * @return DateTime[] Array of DateTime objects.
     */
    protected static function get_dates($time_period, $reference_date = \null)
    {
    }
    /**
     * Get any reusable data, without re-querying the DB.
     *
     * @since  1.15.4
     * @param  string $key  Reusable data key.
     * @return mixed
     */
    private static function get_reusable_data($key = '')
    {
    }
    /**
     * Check if all the main aggregations have pending data.
     *
     * @since  1.15.4
     * @return bool Pending status.
     */
    private static function has_pending_calculations()
    {
    }
    /**
     * Check if execution time is high or if available memory is almost consumed.
     *
     * @since  1.15.4
     * @return bool Returns true if we're about to consume our available resources.
     */
    private static function time_or_memory_exceeded()
    {
    }
    /**
     * Initialize data if they are empty month/year has changed.
     *
     * @since  1.15.4
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
     * @since  1.15.4
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
     * @since  1.15.4
     * @return bool
     */
    private static function memory_exceeded()
    {
    }
    /**
     * Get memory limit.
     *
     * @since  1.15.4
     * @return int
     */
    private static function get_memory_limit()
    {
    }
    /**
     * Increase iterations.
     *
     * @since  1.15.4
     * @return void
     */
    private static function increase_iterations()
    {
    }
    /**
     * Set starting time.
     *
     * @since  1.15.4
     * @return void
     */
    private static function set_start_time()
    {
    }
    /**
     * Set data from option.
     *
     * @since  1.15.4
     * @return void
     */
    private static function read_data()
    {
    }
    /**
     * Set option with data.
     *
     * @since  1.15.4
     * @return void
     */
    private static function set_option_data()
    {
    }
}
/**
 * Tracks support.
 *
 * @class    WC_GC_Tracks
 * @version  2.9.1
 */
class WC_GC_Tracks
{
    /**
     * Tracks event name prefix.
     */
    const PREFIX = 'gc_';
    /**
     * Hook in.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Include necessary classes.
     *
     * @return void
     */
    private static function maybe_include_tracks_classes()
    {
    }
    /**
     * Records a 'gift_card_product_created' event in Tracks every time a new gift card product is created.
     *
     * @param  WC_Product $product
     * @return void
     */
    public static function record_gift_card_product_created_event($product)
    {
    }
    /**
     * Records an 'order_with_gift_card' event in Tracks every time a new gift card product is created.
     * Does not work for orders created via the Store API, because a draft order without any gift cards applied already exists by the time that a new order is saved.
     *
     * @param  WC_Order $order
     * @return void
     */
    public static function record_order_with_gift_cards_created_event($order)
    {
    }
    /**
     * Record an event in Tracks - this is the preferred way to record events from PHP.
     *
     * @param string $event_name The name of the event.
     * @param array  $props Custom properties to send with the event.
     * @return void
     */
    public static function record_event($event_name, $props = array())
    {
    }
}
/**
 * Allows DB updates via WP-CLI.
 *
 * @class    WC_GC_CLI_Update
 * @version  2.9.1
 */
class WC_GC_CLI_Update
{
    /**
     * Registers the update command.
     *
     * @return void
     */
    public static function register_command()
    {
    }
    /**
     * Runs all pending WooCommerce database updates.
     *
     * @return void
     */
    public static function update()
    {
    }
}
/**
 * Handles compatibility with other WC extensions.
 *
 * @class    WC_GC_Compatibility
 * @version  2.9.1
 */
class WC_GC_Compatibility
{
    /**
     * Min required plugin versions to check.
     *
     * @var array<string, string>
     */
    private static $required = array('wc_stripe' => '4.0.0', 'blocks' => '7.0.0');
    /**
     * Keep track of cart totals recursive loops.
     *
     * @var int
     */
    protected static $recursive_counter;
    /**
     * Setup compatibility class.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * When starting the cart totals calculation increase the counter.
     *
     * @since  1.5.0
     *
     * @param  WC_Cart $cart Cart.
     * @return void
     */
    public static function increase_cart_totals_recursive_counter($cart)
    {
    }
    /**
     * When ending the cart totals calculation decrease the counter.
     *
     * @since  1.5.0
     *
     * @param  WC_Cart $cart Cart.
     * @return void
     */
    public static function decrease_cart_totals_recursive_counter($cart)
    {
    }
    /**
     * Detect if it's a cart totals recursive loop.
     *
     * @since  1.5.0
     *
     * @return bool
     */
    public static function has_cart_totals_loop()
    {
    }
    /**
     * Initialize.
     *
     * @return void
     */
    protected static function load_modules()
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
     * @since 1.13.1
     * @return void
     */
    public static function declare_hpos_compatibility()
    {
    }
    /**
     * Declare cart/checkout Blocks compatibility.
     *
     * @since 1.16.6
     * @return void
     */
    public static function declare_blocks_compatibility()
    {
    }
    /**
     * Prevent deprecated mini-extensions from initializing.
     *
     * @return void
     */
    protected static function unload_modules()
    {
    }
    /**
     * Load compatibility classes.
     *
     * @return void
     */
    public static function module_includes()
    {
    }
    /**
     * Checks versions of compatible/integrated/deprecated extensions.
     *
     * @return void
     */
    public static function add_compatibility_notices()
    {
    }
    /**
     * Get the normalized total discount from gift cards to use in Level 3 data for Stripe.
     *
     * This is a simplified version from \WCPay\Internal\Service\Level3Service::get_data_from_order() and \WCPay\Internal\Service\Level3Service::process_item().
     *
     * @param  array    $gift_cards
     * @param  WC_Order $order
     * @param  callable $normalize_fn
     *
     * @return float
     */
    protected static function get_level3_total_discount($gift_cards, $order, $normalize_fn)
    {
    }
    /**
     * Apply gift card discount to Level 3 data for Stripe.
     *
     * @param  array    $level3_data
     * @param  WC_Order $order
     * @param  callable $normalize_fn
     *
     * @return array
     */
    public static function apply_discount_to_level3_line_items($level3_data, $order, $normalize_fn)
    {
    }
}
/**
 * Functions related to core back-compatibility.
 *
 * @class    WC_GC_Core_Compatibility
 * @version  2.9.1
 */
class WC_GC_Core_Compatibility
{
    /**
     * Cache 'gte' comparison results.
     *
     * @var bool[]
     */
    private static $is_wc_version_gte = array();
    /**
     * Cache 'gt' comparison results.
     *
     * @var bool[]
     */
    private static $is_wc_version_gt = array();
    /**
     * Cache 'gt' comparison results for WP version.
     *
     * @var bool[]
     */
    private static $is_wp_version_gt = array();
    /**
     * Cache 'gte' comparison results for WP version.
     *
     * @var bool[]
     */
    private static $is_wp_version_gte = array();
    /**
     * Cache wc admin status result.
     *
     * @var bool|null
     */
    private static $is_wc_admin_enabled = \null;
    /**
     * Current REST request stack.
     * An array containing WP_REST_Request instances.
     *
     * @since 1.16.12
     *
     * @var array
     */
    private static $requests = array();
    /**
     * Cache HPOS status.
     *
     * @since  1.15.0
     *
     * @var bool|null
     */
    private static $is_hpos_enabled = \null;
    /**
     * Initialization and hooks.
     *
     * @return void
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
     * @since  1.16.12
     *
     * @param  WP_REST_Response $response
     * @return mixed
     */
    public static function pop_rest_request($response)
    {
    }
    /**
     * Saves the current hydration request.
     *
     * @since  1.16.12
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
     * @since  1.2.0
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
    | WC version handling.
    |--------------------------------------------------------------------------
    */
    /**
     * Helper method to get the version of the currently installed WooCommerce.
     *
     * @return string
     */
    public static function get_wc_version()
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is greater than or equal to $version.
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
     * @param  string $version
     * @return boolean
     */
    public static function is_wc_version_gt($version)
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is lower than or equal $version.
     *
     * @param  string $version
     * @return boolean
     */
    public static function is_wc_version_lte($version)
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is lower than $version.
     *
     * @param  string $version
     * @return boolean
     */
    public static function is_wc_version_lt($version)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | WP version handling.
    |--------------------------------------------------------------------------
    */
    /**
     * Returns true if the installed version of WooCommerce is greater than or equal to $version.
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
     * @param  string $version
     * @return boolean
     */
    public static function is_wp_version_gte($version)
    {
    }
    /**
     * Returns true if the WC Admin feature is installed and enabled.
     *
     * @return boolean
     */
    public static function is_wc_admin_enabled()
    {
    }
    /**
     * Returns true if is a react based admin page.
     *
     * @since 1.10.3
     *
     * @return boolean
     */
    public static function is_admin_or_embed_page()
    {
    }
    /**
     * Back-compat wrapper for 'is_rest_api_request'.
     *
     * @since  1.2.0
     *
     * @return boolean
     */
    public static function is_rest_api_request()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Utilities.
    |--------------------------------------------------------------------------
    */
    /**
     * Whether this is a Store/REST API request.
     *
     * @since  1.2.0
     *
     * @return boolean
     */
    public static function is_api_request()
    {
    }
    /**
     * Returns the current Store/REST API request or false.
     *
     * @since  1.2.0
     *
     * @return WP_REST_Request|false
     */
    public static function get_api_request()
    {
    }
    /**
     * Whether this is a Store API request.
     *
     * @since  1.2.0
     *
     * @param  string $route
     * @param  string $method Request method.
     * @return boolean
     */
    public static function is_store_api_request($route = '', $method = '')
    {
    }
    /**
     * Check if the usage of the custom orders table is enabled.
     *
     * @since  1.15.0
     *
     * @return bool
     */
    public static function is_hpos_enabled()
    {
    }
}
/**
 * WooCommerce Avatax Compatibility.
 *
 * @version  2.9.1
 */
class WC_GC_Avatax_Compatibility
{
    /**
     * Initialize integration.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Do not calculate Gift Cards while Avatax is resetting the cart.
     *
     * @param  bool $needs_calculation
     * @return bool
     */
    public static function needs_calculation($needs_calculation)
    {
    }
}
/**
 * WooCommerce Blocks Compatibility.
 *
 * @version 2.9.1
 */
class WC_GC_Blocks_Compatibility
{
    /**
     * Initialize.
     *
     * @return void
     */
    public static function init()
    {
    }
}
/**
 * WooCommerce Elementor Compatibility.
 *
 * @version  2.9.1
 */
class WC_GC_Elementor_Compatibility
{
    /**
     * Initialize integration.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Flex layout issues. Elementor has no hooks we can use to add a class on a higher level
     * so, we'll add the class by search/replace in the generated markup
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
 * Flatsome integration.
 *
 * @version  2.9.1
 */
class WC_GC_FS_Compatibility
{
    /**
     * Initialize.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Add hooks if the active parent theme is Flatsome.
     *
     * @return void
     */
    public static function maybe_add_hooks()
    {
    }
    /**
     * Initializes gift cards in quick view modals.
     *
     * @return void
     */
    public static function add_quickview_integration()
    {
    }
}
/**
 * WooCommerce Order Status Manager integration.
 *
 * Both plugins hook into `woocommerce_my_account_my_orders_column_order-status`
 * to render output in the order status column. Without this module, the status
 * name is echoed twice in the My Account > Orders table. We let Order Status
 * Manager own the status rendering (it adds a tooltip with the custom status
 * description) and only append the Gift Cards pending-balance indicator.
 *
 * @class    WC_GC_OSM_Compatibility
 * @version  2.7.5
 */
class WC_GC_OSM_Compatibility
{
    /**
     * Init.
     *
     * @return void
     */
    public static function init()
    {
    }
}
/**
 * PayPal Payments Compatibility.
 *
 * @version  2.9.1
 */
class WC_GC_PayPal_Compatibility
{
    /**
     * Initialize integration.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Hide smart buttons in gift card product pages.
     *
     * @param  bool       $is_supported
     * @param  WC_Product $product
     * @return bool
     */
    public static function handle_smart_buttons($is_supported, $product)
    {
    }
}
/**
 * WooCommerce Print Invoices/Packing Lists Compatibility.
 *
 * @version  2.9.1
 */
class WC_GC_PIP_Compatibility
{
    /**
     * Initialize integration.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Mask the GC message when viewing invoices.
     *
     * @param  array                 $formatted_meta Formatted meta data.
     * @param  WC_Order_Item_Product $order_item
     * @return array
     */
    public static function mask_invoice_message($formatted_meta, $order_item)
    {
    }
    /**
     * Add payment method in the Invoice.
     *
     * @param  array  $rows
     * @param  string $type
     * @param  int    $order_id
     * @return array
     */
    public static function add_payment_gateway($rows, $type, $order_id)
    {
    }
}
/**
 * WooCommerce Stripe Gateway Compatibility.
 *
 * @version  2.9.1
 */
class WC_GC_Stripe_Compatibility
{
    /**
     * Initialize integration.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Hide express checkout buttons on single Product page.
     *
     * @param  bool    $hide
     * @param  WP_Post $post (Optional)
     * @return bool
     */
    public static function handle_express_checkout_buttons($hide, $post = \null)
    {
    }
    /**
     * Update level 3 data with gift card information.
     *
     * Allows to partially pay an order with a gift card and send the remaining amount to the payment gateway.
     *
     * @since 2.0.0
     *
     * @param array    $level3_data The level 3 data.
     * @param WC_Order $order The order object.
     *
     * @return array The updated level 3 data.
     */
    public static function update_level3_data($level3_data, $order)
    {
    }
}
/**
 * WC Subscriptions integration.
 *
 * @version 2.9.1
 */
class WC_GC_WCS_Compatibility
{
    /**
     * Init.
     *
     * @return void
     */
    public static function init()
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Lifecycle methods.                               */
    /*---------------------------------------------------*/
    /**
     * Maybe enable gift card balance in newly created subscriptions.
     *
     * @param  WC_Subscription $subscription
     * @param  WC_Order        $order
     * @return void
     */
    public static function maybe_enable_on_subscription_creation($subscription, $order)
    {
    }
    /**
     * Handle gift card balance when a renewal order is created.
     *
     * @param  WC_Order        $renewal_order
     * @param  WC_Subscription $subscription
     * @return WC_Order
     */
    public static function renewal_order_created($renewal_order, $subscription)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		View subscription in account.                    */
    /*---------------------------------------------------*/
    /**
     * Display balance toggle in View subscription account page.
     *
     * @param  WC_Subscription $subscription
     * @return void
     */
    public static function add_giftcard_balance_toggle($subscription)
    {
    }
    /**
     * Handle balance toggle AJAX action.
     *
     * @return void
     */
    public static function update_subscription_giftcards_toggle()
    {
    }
    /**
     * Add a security nonce for the balance toggle.
     *
     * @param  array $params
     * @return array
     */
    public static function add_ajax_security_nonce($params)
    {
    }
    /**
     * Check whether the current user may update a subscription's gift card setting.
     *
     * @since 2.7.6
     *
     * @param  WC_Subscription $subscription Subscription to authorize.
     * @return bool
     */
    public static function current_user_can_update_subscription($subscription)
    {
    }
    /**
     * Add front end params.
     *
     * @param  array $params
     * @return array
     */
    public static function add_front_end_params($params)
    {
    }
    /**
     * Handle early renewal modal totals table.
     *
     * @param  array           $total_rows
     * @param  WC_Subscription $subscription
     * @return array
     */
    public static function get_subscription_item_totals($total_rows, $subscription)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Admin edit subscription screen.                  */
    /*---------------------------------------------------*/
    /**
     * Add gift card balance option in admin view.
     *
     * @param  WC_Subscription $subscription
     * @return void
     */
    public static function add_giftcard_balance_setting($subscription)
    {
    }
    /**
     * Save giftcards balance usage.
     *
     * @param  int $post_id
     * @return void
     */
    public static function save_giftcard_balance_setting($post_id)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Global settings.                                  */
    /*---------------------------------------------------*/
    /**
     * Add a setting to allow store managers to enable or disable the gift card balance toggle.
     *
     * @param  array $settings
     * @return array
     */
    public static function add_global_giftcard_balance_settings($settings)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Utilities.                                       */
    /*---------------------------------------------------*/
    /**
     * Whether or not the giftcards are enabled for this subscription order.
     *
     * @return bool
     */
    public static function is_giftcard_balance_enabled()
    {
    }
    /**
     * Whether or not to use giftcards balance for this subscription renewals.
     *
     * @param  WC_Subscription $subscription
     * @return bool
     */
    public static function is_giftcard_balance_enabled_for_subscription($subscription)
    {
    }
    /**
     * Whether or not to use giftcards balance for this subscription renewals.
     *
     * @param  WC_Subscription $subscription
     * @return bool
     */
    public static function validate_payment_gateway_for_subscription($subscription)
    {
    }
    /**
     * Whether or not the giftcards are enabled for this subscription order.
     *
     * @param  WC_Subscription $subscription
     * @return bool
     */
    public static function is_giftcard_balance_toggle_enabled($subscription)
    {
    }
}
/**
 * WooPayments Compatibility.
 *
 * @version  2.9.1
 */
class WC_GC_WC_Payments_Compatibility
{
    /**
     * Initialize integration.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Hide express checkout buttons in gift card product pages.
     *
     * @param  bool       $is_supported
     * @param  WC_Product $product
     * @return bool
     */
    public static function handle_express_checkout_buttons($is_supported, $product)
    {
    }
    /**
     * Update level 3 data with gift card information.
     *
     * Allows to partially pay an order with a gift card and send the remaining amount to the payment gateway.
     *
     * @since 2.0.0
     *
     * @param array    $level3_data The level 3 data.
     * @param WC_Order $order The order object.
     *
     * @return array The updated level 3 data.
     */
    public static function update_level3_data($level3_data, $order)
    {
    }
}
/**
 * WooCommerce PDF Invoices & Packing Slips by Ewout Fernhout Compatibility.
 *
 * @version  2.9.1
 */
class WC_GC_WPO_WCPDF_Compatibility
{
    /**
     * Initialize integration.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Mask the GC message when viewing invoices.
     *
     * @param  array                 $formatted_meta Formatted meta data.
     * @param  WC_Order_Item_Product $order_item
     * @return array
     */
    public static function mask_invoice_message($formatted_meta, $order_item)
    {
    }
    /**
     * Add gift cards to the payment method shown in invoices.
     *
     * @param  mixed $payment Payment method title.
     * @param  mixed $order_document Invoice document.
     * @return mixed
     */
    public static function add_invoice_payments($payment, $order_document)
    {
    }
}
/**
 * Gift Card Data model class.
 *
 * @class    WC_GC_Activity_Data
 * @version  2.9.1
 */
class WC_GC_Activity_Data
{
    /**
     * Data array, with defaults.
     *
     * @var array
     */
    protected $data = array('id' => 0, 'type' => '', 'user_id' => 0, 'user_email' => '', 'object_id' => 0, 'gc_id' => 0, 'gc_code' => '', 'amount' => 0, 'date' => 0, 'note' => '');
    /**
     * Constructor.
     *
     * @param  int|object|array $activity  ID to load from the DB (optional) or already queried data.
     */
    public function __construct($activity = 0)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Getters.                                         */
    /*---------------------------------------------------*/
    /**
     * Returns all data for this object.
     *
     * @return array
     */
    public function get_data()
    {
    }
    /**
     * Get id.
     *
     * @return int
     */
    public function get_id()
    {
    }
    /**
     * Get type.
     *
     * @return string
     */
    public function get_type()
    {
    }
    /**
     * Get user id.
     *
     * @return int
     */
    public function get_user_id()
    {
    }
    /**
     * Get user email.
     *
     * @return string
     */
    public function get_user_email()
    {
    }
    /**
     * Get object id.
     *
     * @return int
     */
    public function get_object_id()
    {
    }
    /**
     * Get gift card id.
     *
     * @return int
     */
    public function get_gc_id()
    {
    }
    /**
     * Get gift card code.
     *
     * @return string
     */
    public function get_gc_code()
    {
    }
    /**
     * Get amount.
     *
     * @return float
     */
    public function get_amount()
    {
    }
    /**
     * Get date.
     *
     * @return int
     */
    public function get_date()
    {
    }
    /**
     * Get note.
     *
     * @return string
     */
    public function get_note()
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Setters.                                         */
    /*---------------------------------------------------*/
    /**
     * Set all data based on input array.
     *
     * @param  array $data
     * @return void
     */
    public function set_all($data)
    {
    }
    /**
     * Set Deployment ID.
     *
     * @param  int $value Value to set.
     * @return void
     */
    public function set_id($value)
    {
    }
    /**
     * Set code.
     *
     * @param  string $value Value to set.
     * @return void
     */
    public function set_type($value)
    {
    }
    /**
     * Set user ID.
     *
     * @param  int $value Value to set.
     * @return void
     */
    public function set_user_id($value)
    {
    }
    /**
     * Set user email.
     *
     * @param  string $value Value to set.
     * @return void
     */
    public function set_user_email($value)
    {
    }
    /**
     * Set object ID.
     *
     * @param  int $value Value to set.
     * @return void
     */
    public function set_object_id($value)
    {
    }
    /**
     * Set gift card ID.
     *
     * @param  int $value Value to set.
     * @return void
     */
    public function set_gc_id($value)
    {
    }
    /**
     * Set gift card code.
     *
     * @param  string $value Value to set.
     * @return void
     */
    public function set_gc_code($value)
    {
    }
    /**
     * Set amount.
     *
     * @param  float $value Value to set.
     * @return void
     */
    public function set_amount($value)
    {
    }
    /**
     * Set date.
     *
     * @param  int $value Value to set.
     * @return void
     */
    public function set_date($value)
    {
    }
    /**
     * Set note.
     *
     * @param  string $value Value to set.
     * @return void
     */
    public function set_note($value)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Utilities.                                       */
    /*---------------------------------------------------*/
    /**
     * Is type.
     *
     * @since 1.10.0
     *
     * @param  string|array $types
     * @return bool
     */
    public function is_type($types)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		CRUD.                                            */
    /*---------------------------------------------------*/
    /**
     * Insert data into the database.
     *
     * @return void
     */
    private function create()
    {
    }
    /**
     * Update data in the database.
     *
     * @return int|false
     */
    private function update()
    {
    }
    /**
     * Delete data from the database.
     *
     * @return void
     */
    public function delete()
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
     * Read from DB object using ID.
     *
     * @param  int|object $activity Activity ID or database row.
     * @return void
     */
    public function read($activity)
    {
    }
    /**
     * Validates before saving for sanity.
     *
     * @return void
     */
    public function validate()
    {
    }
}
/**
 * Gift Card Data model class.
 *
 * @class    WC_GC_Gift_Card_Data
 * @version  2.9.1
 */
class WC_GC_Gift_Card_Data
{
    /**
     * Runtime cache of pending orders.
     *
     * @var float[]|null
     */
    protected $pending_orders;
    /**
     * Data array, with defaults.
     *
     * @var array
     */
    protected $data = array('id' => 0, 'is_active' => 'on', 'is_virtual' => 'on', 'code' => '', 'order_id' => 0, 'order_item_id' => 0, 'recipient' => '', 'redeemed_by' => 0, 'sender' => '', 'sender_email' => '', 'template_id' => 'default', 'message' => '', 'balance' => 0, 'remaining' => 0, 'create_date' => 0, 'deliver_date' => 0, 'delivered' => 'no', 'expire_date' => 0, 'redeem_date' => 0, 'last_modify_date' => 0);
    /**
     * Original complete row used to identify changes and reject stale financial edits.
     *
     * @since 2.8.0
     * @var array|null
     */
    protected $original_data;
    /**
     * Exact stored financial values, before setter normalization of database doubles.
     *
     * @since 2.8.0
     * @var array
     */
    protected $original_financial_data = array();
    /**
     * Stores meta data, defaults included.
     * Meta keys are assumed unique by default. No meta is internal.
     *
     * @var array
     */
    protected $meta_data = array();
    /**
     * Meta keys whose stored row holds a serialized object and is hidden as null.
     *
     * @since 2.8.0
     *
     * @var bool[]
     */
    protected $blocked_meta_keys = array();
    /**
     * Constructor.
     *
     * Existing queried rows need all raw database fields before saving. For partial
     * edits, load by ID and then use setters or set_all(). Pass a data object directly
     * when copying it: get_data() normalizes monetary values and may lose precision.
     *
     * @param  int|object|array $giftcard  ID to load from the DB (optional) or already queried data.
     */
    public function __construct($giftcard = 0)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Getters.                                         */
    /*---------------------------------------------------*/
    /**
     * Returns all data for this object.
     *
     * @return array
     */
    public function get_data()
    {
    }
    /**
     * Get id.
     *
     * @return int
     */
    public function get_id()
    {
    }
    /**
     * Get code.
     *
     * @return string
     */
    public function get_code()
    {
    }
    /**
     * Get order ID.
     *
     * @return int
     */
    public function get_order_id()
    {
    }
    /**
     * Get order item ID.
     *
     * @return int
     */
    public function get_order_item_id()
    {
    }
    /**
     * Get recipient.
     *
     * @return string
     */
    public function get_recipient()
    {
    }
    /**
     * Get redeemed by user.
     *
     * @return int
     */
    public function get_redeemed_by()
    {
    }
    /**
     * Get sender.
     *
     * @return string
     */
    public function get_sender()
    {
    }
    /**
     * Get sender email.
     *
     * @return string
     */
    public function get_sender_email()
    {
    }
    /**
     * Get message.
     *
     * @return string
     */
    public function get_message()
    {
    }
    /**
     * Get balance.
     *
     * @return float
     */
    public function get_initial_balance()
    {
    }
    /**
     * Get remaining balance.
     *
     * @return float
     */
    public function get_balance()
    {
    }
    /**
     * Get template id.
     *
     * @since 1.2.0
     *
     * @return string
     */
    public function get_template_id()
    {
    }
    /**
     * Get create date.
     *
     * @return int
     */
    public function get_date_created()
    {
    }
    /**
     * Get deliver date.
     *
     * @return int
     */
    public function get_deliver_date()
    {
    }
    /**
     * Get expire date.
     *
     * @return int
     */
    public function get_expire_date()
    {
    }
    /**
     * Get redeem date.
     *
     * @return int
     */
    public function get_date_redeemed()
    {
    }
    /**
     * Get last modify date.
     *
     * @return int
     *
     * @since 2.1.0
     */
    public function get_last_modify_date()
    {
    }
    /**
     * Get pending balance if any.
     *
     * @since 1.6.0
     *
     * @param  bool $expand
     * @return mixed
     */
    public function get_pending_balance($expand = \false)
    {
    }
    /**
     * Get generated hash.
     *
     * @since 1.9.0
     *
     * @return string
     */
    public function get_hash()
    {
    }
    /**
     * Get All Meta Data.
     *
     * @since 1.6.0
     *
     * @return array
     */
    public function get_meta_data()
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Setters.                                         */
    /*---------------------------------------------------*/
    /**
     * Set all data based on input array.
     *
     * @param  array $data
     * @return void
     */
    public function set_all($data)
    {
    }
    /**
     * Set Deployment ID.
     *
     * @param  int $value Value to set.
     * @return void
     */
    public function set_id($value)
    {
    }
    /**
     * Set active.
     *
     * @param  string $value Value to set.
     * @return void
     */
    public function set_active($value)
    {
    }
    /**
     * Set virtual.
     *
     * @param  string $value Value to set.
     * @return void
     */
    public function set_virtual($value)
    {
    }
    /**
     * Set code.
     *
     * @param  string $value Value to set.
     * @return void
     */
    public function set_code($value)
    {
    }
    /**
     * Set order ID.
     *
     * @param  int $value Value to set.
     * @return void
     */
    public function set_order_id($value)
    {
    }
    /**
     * Set order item ID.
     *
     * @param  int $value Value to set.
     * @return void
     */
    public function set_order_item_id($value)
    {
    }
    /**
     * Set recipient.
     *
     * @param  string $value Value to set.
     * @return void
     */
    public function set_recipient($value)
    {
    }
    /**
     * Set redeemed by.
     *
     * @param  int|string $value Value to set.
     * @return void
     */
    public function set_redeemed_by($value)
    {
    }
    /**
     * Set sender.
     *
     * @param  string $value Value to set.
     * @return void
     */
    public function set_sender($value)
    {
    }
    /**
     * Set sender_email.
     *
     * @param  string $value Value to set.
     * @return void
     */
    public function set_sender_email($value)
    {
    }
    /**
     * Set message.
     *
     * @param  string $value Value to set.
     * @return void
     */
    public function set_message($value)
    {
    }
    /**
     * Set balance.
     *
     * @param  float $value Value to set.
     * @return void
     */
    public function set_initial_balance($value)
    {
    }
    /**
     * Set remaining balance.
     *
     * @param  float $value Value to set.
     * @return void
     */
    public function set_balance($value)
    {
    }
    /**
     * Set template id.
     *
     * @since 1.2.0
     *
     * @param  string $value Value to set.
     * @return void
     */
    public function set_template_id($value)
    {
    }
    /**
     * Set create date.
     *
     * @param  string $value Value to set.
     * @return void
     */
    public function set_date_created($value)
    {
    }
    /**
     * Set expire date.
     *
     * @param  int|string $value Value to set.
     * @return void
     */
    public function set_expire_date($value)
    {
    }
    /**
     * Set deliver date.
     *
     * @param  int|string $value Value to set.
     * @return void
     */
    public function set_deliver_date($value)
    {
    }
    /**
     * Set delivered status.
     *
     * @param  mixed $value Value to set.
     * @return void
     */
    public function set_delivered($value)
    {
    }
    /**
     * Set redeem date.
     *
     * @param  int|string $value Value to set.
     * @return void
     */
    public function set_date_redeemed($value)
    {
    }
    /**
     * Set all meta data from array.
     *
     * @since 1.6.0
     *
     * @param array $data
     * @return void
     */
    public function set_meta_data($data)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		CRUD.                                            */
    /*---------------------------------------------------*/
    /**
     * Get normalized values for the gift card row.
     *
     * @since 2.8.0
     * @return array
     */
    private function get_row_data()
    {
    }
    /**
     * Record a complete queried row without treating missing fields as stored defaults.
     *
     * @since 2.8.0
     * @param array|object $row Queried row.
     * @return void
     */
    private function record_original_data($row)
    {
    }
    /**
     * Insert data into the database.
     *
     * @return int|false
     */
    public function create()
    {
    }
    /**
     * Update data in the database.
     *
     * @return int|false Rows updated, or false for a missing snapshot or financial conflict.
     */
    public function update()
    {
    }
    /**
     * Delete data from the database.
     *
     * @return void
     */
    public function delete()
    {
    }
    /**
     * Save data to the database.
     *
     * @return int|false
     */
    public function save()
    {
    }
    /**
     * Advance the reminder batch timestamp without saving other loaded values.
     *
     * @since 2.8.0
     * @internal
     * @return int|false
     */
    public function save_last_modify_date()
    {
    }
    /**
     * Save only the ownership fields changed by account redemption.
     *
     * @since 2.8.0
     * @internal
     *
     * @param bool $force Whether to replace an existing owner.
     * @return int|false
     */
    public function save_redemption($force = \false)
    {
    }
    /**
     * Clear object caches if needed.
     *
     * @since 1.6.0
     *
     * @return void
     */
    protected function clear_meta_caches()
    {
    }
    /**
     * Read from DB object using ID.
     *
     * @param  int|object $giftcard Gift card ID or database row.
     * @return void
     */
    public function read($giftcard)
    {
    }
    /**
     * Validates before saving for sanity.
     *
     * @return void
     */
    public function validate()
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Meta CRUD.                                       */
    /*---------------------------------------------------*/
    /**
     * Read meta data from the database.
     *
     * @since 1.6.0
     *
     * @return void
     */
    protected function read_meta_data()
    {
    }
    /**
     * Update Meta Data in the database.
     *
     * @since 1.6.0
     *
     * @return void
     */
    public function save_meta_data()
    {
    }
    /**
     * Get Meta by Key.
     *
     * @since 1.6.0
     *
     * @param  string $key
     * @return mixed
     */
    public function get_meta($key)
    {
    }
    /**
     * Add meta data.
     *
     * @since 1.6.0
     *
     * @param  string $key
     * @param  mixed  $value Meta value.
     * @return void
     */
    public function add_meta($key, $value)
    {
    }
    /**
     * Add meta data.
     *
     * @since 1.6.0
     *
     * @param  string $key
     * @param  mixed  $value Meta value. Null deletes the meta.
     * @return void
     */
    public function update_meta($key, $value)
    {
    }
    /**
     * Delete meta data.
     *
     * @since 1.6.0
     *
     * @param  string $key Meta key.
     * @return void
     */
    public function delete_meta($key)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Utilities.                                       */
    /*---------------------------------------------------*/
    /**
     * Is Gift Card active.
     *
     * @return bool
     */
    public function is_active()
    {
    }
    /**
     * Is Gift Card virtual.
     *
     * @return bool
     */
    public function is_virtual()
    {
    }
    /**
     * Is Gift Card redeemed.
     *
     * @return bool
     */
    public function is_redeemed()
    {
    }
    /**
     * Is Gift Card delivered.
     *
     * @return int|false False or user id
     */
    public function is_delivered()
    {
    }
    /**
     * Is Gift Card expired.
     *
     * @return bool
     */
    public function has_expired()
    {
    }
    /**
     * Cleans null value meta when getting.
     *
     * @since 1.6.0
     *
     * @param  mixed $value
     * @return boolean
     */
    private function has_meta_value($value)
    {
    }
    /**
     * Meta value type sanitization on the way in.
     *
     * @since 1.6.0
     *
     * @param  mixed  $meta_value
     * @param  string $meta_key
     * @return mixed
     */
    private function sanitize_meta_value($meta_value, $meta_key)
    {
    }
    /**
     * Decode a stored meta value without instantiating PHP classes.
     *
     * Legacy rows may hold PHP-serialized arrays; those still decode. Serialized objects are never
     * materialized -- a value containing one decodes to null.
     *
     * @since 2.8.0
     *
     * @param  mixed $meta_value Raw stored value.
     * @return mixed
     */
    public static function decode_meta_value($meta_value)
    {
    }
    /**
     * Blank any stored row under a key that holds a serialized object.
     *
     * Call before handing the key to a core metadata helper (update_metadata() and friends read the
     * old value through maybe_unserialize() with classes enabled).
     *
     * @since 2.8.0
     *
     * @internal
     *
     * @param  int    $giftcard_id Gift card ID.
     * @param  string $meta_key    Meta key.
     * @return void
     */
    public static function neutralize_blocked_meta($giftcard_id, $meta_key)
    {
    }
    /**
     * Overwrite one stored meta row with an empty string.
     *
     * @since 2.8.0
     *
     * @param  int $meta_id Meta row ID.
     * @return void
     */
    private static function blank_meta_row($meta_id)
    {
    }
    /**
     * Decode a stored meta value and report whether an object was hidden.
     *
     * @since 2.8.0
     *
     * @param  mixed $meta_value Raw stored value.
     * @return array{value:mixed,blocked:bool}
     */
    private static function decode_meta_value_with_status($meta_value)
    {
    }
    /**
     * Whether a decoded meta value contains an object at any depth.
     *
     * Self-referencing arrays (serialized references) are treated as unsafe once the depth limit is hit.
     *
     * @since 2.8.0
     *
     * @param  mixed $value Decoded value.
     * @param  int   $depth Current nesting depth.
     * @return bool
     */
    private static function meta_value_contains_object($value, $depth = 0)
    {
    }
    /**
     * Setup hash data for handling gift cards specific secure requests (e.g. Email redeeming).
     *
     * @since 1.9.0
     *
     * @return void
     */
    private function setup_hash_data()
    {
    }
    /**
     * Validates a gift cards's specific hash. (e.g. Email redeeming).
     *
     * @since 1.9.0
     *
     * @param  mixed $hash_to_check Hash to check.
     * @return bool
     */
    public function validate_hash($hash_to_check)
    {
    }
    /**
     * Lock checkout transactions for this giftcard.
     *
     * @since 1.14.0
     *
     * @throws Exception
     *
     * @return string|null The lock meta key, or null if locking is disabled.
     */
    public function lock_transactions()
    {
    }
}
/**
 * WC_Order_Item_Gift_Card_Data_Store class.
 *
 * @version 2.9.1
 */
class WC_Order_Item_Gift_Card_Data_Store extends \Abstract_WC_Order_Item_Type_Data_Store implements \WC_Object_Data_Store_Interface, \WC_Order_Item_Type_Data_Store_Interface
{
    /**
     * Data stored in meta keys.
     *
     * @var string[]
     */
    protected $internal_meta_keys = array('giftcard_id', 'code', 'amount');
    /**
     * Read/populate data properties specific to this order item.
     *
     * @param WC_Order_Item $item Order item object.
     * @return void
     */
    public function read(&$item)
    {
    }
    /**
     * Saves an item's data to the database / item meta.
     * Ran after both create and update, so $id will be set.
     *
     * @param WC_GC_Order_Item_Gift_Card $item Order item object.
     * @return void
     */
    public function save_item_data(&$item)
    {
    }
}
/**
 * DB API class.
 *
 * @version  2.9.1
 */
class WC_GC_Activity_DB
{
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
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Query activiry data from the DB.
     *
     * @param  array $args  {
     *     @type  string     $return           Return array format:
     *
     *         - 'all': entire row casted to array,
     *         - 'ids': ids only,
     *         - 'objects': WC_PRL_Gift_Card_Data objects.
     * }
     *
     * @return array|int
     */
    public function query($args)
    {
    }
    /**
     * Get a record from the DB.
     *
     * @param  mixed $activity
     * @return false|WC_GC_Activity_Data
     */
    public function get($activity)
    {
    }
    /**
     * Create a record in the DB.
     *
     * @param  array $args
     * @return false|int
     *
     * @throws Exception
     */
    public function add($args)
    {
    }
    /**
     * Update a record in the DB.
     *
     * @param  mixed $activity
     * @param  array $args
     * @return bool
     *
     * @throws Exception
     */
    public function update($activity, $args)
    {
    }
    /**
     * Validate data.
     *
     * @param  array                     &$args     Activity data.
     * @param  WC_GC_Activity_Data|false $activity Existing activity when updating.
     * @return void
     *
     * @throws Exception
     */
    public function validate(&$args, $activity = \false)
    {
    }
    /**
     * Delete a record from the DB.
     *
     * @param  mixed $activity
     * @return void
     */
    public function delete($activity)
    {
    }
    /**
     * Get distinct dates.
     *
     * @return array
     */
    public function get_distinct_dates()
    {
    }
    /**
     * Get manual refunds for a gift card in an order.
     *
     * @since 1.10.0
     *
     * @param  int $giftcard_id
     * @param  int $order_id
     * @return array
     */
    public function get_gift_card_refunds($giftcard_id, $order_id)
    {
    }
    /**
     * Get captured amount for a gift card in an order.
     *
     * @since 1.10.0
     *
     * @param  array $args
     * @return float|false
     */
    public function get_gift_card_captured_amount($args)
    {
    }
    /**
     * Trace balance for a gift card in order.
     *
     * @since 1.10.0
     *
     * @param  int $giftcard_id
     * @return float|false
     */
    public function trace_gift_card_balance($giftcard_id)
    {
    }
}
/**
 * DB API class.
 *
 * @version 2.9.1
 */
class WC_GC_DB
{
    /**
     * A reference to the DB Model - @see WC_GC_Gift_Cards_DB.
     *
     * @var WC_GC_Gift_Cards_DB
     */
    public $giftcards;
    /**
     * A reference to the DB Model - @see WC_GC_Activity_DB.
     *
     * @var WC_GC_Activity_DB
     */
    public $activity;
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
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Make WP see 'gc_giftcard' as a meta type.
     *
     * @since 1.6.0
     * @return void
     */
    public function wpdb_giftcards_meta_table_fix()
    {
    }
}
/**
 * DB API class.
 *
 * @version  2.9.1
 */
class WC_GC_Gift_Cards_DB
{
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
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Remove expired checkout locks.
     *
     * @since 2.9.0
     * @return void
     */
    public function cleanup_expired_locks()
    {
    }
    /**
     * Query gift cards data from the DB.
     *
     * @param  array $args  {
     *     @type  string     $return           Return array format:
     *
     *         - 'all': entire row casted to array,
     *         - 'ids': ids only,
     *         - 'objects': WC_PRL_Gift_Card_Data objects.
     *
     *     @type  bool          $count             Whether or not to count the results and return an integer.
     *     @type  string        $search            Query with search term.
     *     @type  bool          $is_redeemed       Query based on redeem status.
     *     @type  bool          $is_delivered      Query based on delivery status.
     *     @type  int           $redeemed_by       Redeemed by user id(s) in WHERE clause.
     *     @type  int           $is_active         Gift Card active status in WHERE clause.
     *     @type  int           $is_virtual        Gift Card virtual status in WHERE clause.
     *     @type  int|array     $code              Gift Card code(s) in WHERE clause.
     *     @type  int|array     $order_id          Gift Card order id(s) in WHERE clause.
     *     @type  int|array     $order_item_id     Gift Card order item id(s) in WHERE clause.
     *     @type  int|array     $product_id        Gift Card product id(s) in WHERE clause.
     *     @type  string|array  $recipient         Gift Card recipient(s) in WHERE clause.
     *     @type  string|array  $sender            Gift Card sender(s) in WHERE clause.
     *     @type  string|array  $sender_email      Gift Card senders email(s) in WHERE clause.
     *     @type  string|array  $template_id       Gift Card template id.
     *     @type  int           $expired_start     Expired date start in WHERE clause.
     *     @type  int           $expired_end       Expired date end in WHERE clause.
     *     @type  int           $last_modify_start Last modify date start in WHERE clause.
     *     @type  int           $last_modify_end   Last modify date end in WHERE clause.
     *     @type  int           $start_date        Create date start in WHERE clause.
     *     @type  int           $end_date          Create date end in WHERE clause.
     *     @type  array         $order_by          ORDER BY field => order pairs.
     *     @type  int           $limit             Query limit.
     *     @type  int           $offset            Query offset.
     *     @type  array         $meta_query        Meta query array.
     * }
     *
     * @return array|int
     */
    public function query($args)
    {
    }
    /**
     * Get a record from the DB.
     *
     * @param  mixed $giftcard
     * @return false|WC_GC_Gift_Card_Data
     */
    public function get($giftcard)
    {
    }
    /**
     * No longer resolves a giftcard: legacy hash tokens were derived from a key and IV
     * hardcoded in the source, so they are forgeable and are no longer accepted. Always
     * returns false. Retained so existing callers keep working.
     *
     * @since 1.1.0
     * @deprecated 2.7.6 Legacy token authentication is no longer supported.
     *
     * @param  string $hash
     * @return false
     */
    public function get_by_hash($hash)
    {
    }
    /**
     * Create a record in the DB.
     *
     * @param  array $args
     * @return false|int
     *
     * @throws Exception
     */
    public function add($args)
    {
    }
    /**
     * Update a record in the DB.
     *
     * @param  mixed $giftcard
     * @param  array $args
     * @return bool
     *
     * @throws Exception
     */
    public function update($giftcard, $args)
    {
    }
    /**
     * Validate data.
     *
     * @param  array &$args
     * @param  mixed $giftcard Gift card.
     * @return void
     *
     * @throws Exception
     */
    public function validate(&$args, $giftcard = \false)
    {
    }
    /**
     * Delete a record from the DB.
     *
     * @param  mixed $giftcard
     * @return void
     */
    public function delete($giftcard)
    {
    }
    /**
     * Get distinct dates.
     *
     * @return array
     */
    public function get_distinct_dates()
    {
    }
    /**
     * Get active gift cards for given user.
     *
     * @since  1.6.0
     *
     * @param  int $user_id
     * @return array
     */
    public function get_active_giftcards($user_id)
    {
    }
    /**
     * Check and locks a giftcard for a short period.
     *
     * @since 1.14.0
     *
     * @param int $giftcard_id
     *
     * @return string|0|false|null The lock meta key if the gift card was locked, 0 if another lock is held, false on a database error, null if locking is disabled.
     */
    public function check_and_lock_giftcard($giftcard_id)
    {
    }
    /**
     * Credit a gift card balance.
     *
     * A single relative UPDATE, so the write is serialized by the row lock against
     * debit_giftcard() and never overwrites a balance read earlier by the caller.
     *
     * @since 2.8.0
     *
     * @param  int   $giftcard_id Gift card ID.
     * @param  float $amount      Amount to credit.
     * @return bool
     */
    public function credit_giftcard($giftcard_id, $amount)
    {
    }
    /**
     * Check balance of a gift card for a given amount.
     *
     * @since 1.14.0
     *
     * @param int   $giftcard_id
     * @param float $amount
     *
     * @return bool
     */
    public function debit_giftcard($giftcard_id, $amount)
    {
    }
    /**
     * Debit a gift card when unredeemed or owned by the expected customer.
     *
     * @since 2.8.0
     * @internal
     *
     * @param int   $giftcard_id Gift Card ID.
     * @param float $amount Amount to debit.
     * @param int   $customer_id Expected customer ID.
     * @return bool
     */
    public function debit_giftcard_for_customer($giftcard_id, $amount, $customer_id)
    {
    }
    /**
     * Debit a gift card balance under its row lock.
     *
     * @since 2.8.0
     *
     * @param int      $giftcard_id Gift Card ID.
     * @param float    $amount Amount to debit.
     * @param int|null $customer_id Expected customer ID, or null for legacy behavior.
     * @return bool
     */
    private function debit_giftcard_balance($giftcard_id, $amount, $customer_id = \null)
    {
    }
    /**
     * Run a transaction control query.
     *
     * Transactions are forced in production to preserve the row lock even when
     * WC_USE_TRANSACTIONS has been disabled by third-party code.
     *
     * @since 2.7.6
     *
     * @param string $type Transaction type.
     * @return void
     */
    private function transaction_query($type)
    {
    }
}
/**
 * Abstract Email template.
 *
 * @class    WC_GC_Email_Template
 * @version  2.9.1
 */
abstract class WC_GC_Email_Template
{
    /**
     * Template id.
     *
     * @var string
     */
    protected $id;
    /**
     * Template html file.
     *
     * @var string
     */
    protected $template_html;
    /**
     * Get id.
     *
     * @return string
     */
    public function get_id()
    {
    }
    /**
     * Get template html file.
     *
     * @return string
     */
    public function get_template_html()
    {
    }
    /**
     * Get template args.
     *
     * @param  WC_Email $email
     * @return array
     */
    public function get_args($email)
    {
    }
    /**
     * Get template html file.
     *
     * @return void
     */
    public function setup()
    {
    }
    /**
     * Get admin product fields.
     *
     * @param  WC_Product $product
     * @param  int|false  $index Loop index.
     * @return void
     */
    public function get_admin_product_fields_html($product, $index = \false)
    {
    }
    /**
     * Process product fields.
     *
     * @throws  Exception
     *
     * @param  WC_Product $product
     * @return void
     */
    public function process_product_data(&$product)
    {
    }
    /**
     * Process product variation fields.
     *
     * @throws  Exception
     *
     * @param  WC_Product $product
     * @param  int        $index Variation loop index.
     * @return void
     */
    public function process_variation_product_data(&$product, $index)
    {
    }
    /**
     * Style Giftcard template.
     *
     * @param  string   $css
     * @param  WC_Email $email
     * @return string
     */
    public function add_stylesheets($css, $email = \null)
    {
    }
}
/**
 * Default email template.
 *
 * @class    WC_GC_Email_Template_Default
 * @version  2.9.1
 */
class WC_GC_Email_Template_Default extends \WC_GC_Email_Template
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Get template args.
     *
     * @param  WC_Email $email
     * @return array
     */
    public function get_args($email)
    {
    }
    /**
     * Get admin product fields.
     *
     * @param  WC_Product $product
     * @param  int|false  $index Loop index.
     * @return void
     */
    public function get_admin_product_fields_html($product, $index = \false)
    {
    }
    /**
     * Process product fields.
     *
     * @throws  Exception
     *
     * @param  WC_Product $product
     * @return void
     */
    public function process_product_data(&$product)
    {
    }
    /**
     * Process product variation fields.
     *
     * @throws  Exception
     *
     * @param  WC_Product $product
     * @param  int        $index Variation loop index.
     * @return void
     */
    public function process_variation_product_data(&$product, $index)
    {
    }
    /**
     * Style Giftcard template.
     *
     * @param  string   $css
     * @param  WC_Email $email
     * @return string
     */
    public function add_stylesheets($css, $email = \null)
    {
    }
}
/**
 * Gift Card Received email controller.
 *
 * @class    WC_GC_Email_Gift_Card_Received
 * @version  2.9.1
 */
class WC_GC_Email_Gift_Card_Received extends \WC_Email
{
    /**
     * Current giftcard object.
     *
     * @var WC_GC_Gift_Card
     */
    protected $giftcard;
    /**
     * Template for the block editor content.
     *
     * Used to render the dynamic content block.
     *
     * @var string
     */
    public $template_block_content = 'emails/block/custom-general-block-email.php';
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /*
    		---------------------------------------------------*/
    /*
    			Triggers.                                        */
    /*---------------------------------------------------*/
    /**
     * Process giftcards.
     *
     * @param array          $giftcards
     * @param int            $order_id
     * @param WC_Order|false $order
     * @return void
     */
    public function process_giftcards($giftcards, $order_id, $order = \false)
    {
    }
    /**
     * Trigger the sending of this email.
     *
     * @param int|WC_GC_Gift_Card_Data|WC_GC_Gift_Card $giftcard Gift card object, data object or ID.
     * @return void
     */
    public function force_trigger($giftcard)
    {
    }
    /**
     * Trigger the sending of this email.
     *
     * @param int|WC_GC_Gift_Card $giftcard Gift card object or ID.
     * @param int                 $order_id
     * @param WC_Order|false      $order
     * @return void
     */
    public function trigger($giftcard, $order_id, $order)
    {
    }
    /**
     * Trigger the sending of a scheduled email.
     *
     * @param int $giftcard
     * @param int $order_id
     * @return void
     */
    public function schedule_trigger($giftcard, $order_id)
    {
    }
    /*
    		---------------------------------------------------*/
    /*
    			Defaults.                                        */
    /*---------------------------------------------------*/
    /**
     * Get email subject.
     *
     * @return string
     */
    public function get_default_subject()
    {
    }
    /**
     * Get email heading.
     *
     * @return string
     */
    public function get_default_heading()
    {
    }
    /**
     * Get default email gift card content.
     *
     * @since  1.1.0
     *
     * @return string
     */
    public function get_default_intro_content()
    {
    }
    /**
     * Default content to show below main email content.
     *
     * @return string
     */
    public function get_default_additional_content()
    {
    }
    /*
    		---------------------------------------------------*/
    /*
    			Getters.                                         */
    /*---------------------------------------------------*/
    /**
     * Get giftcard.
     *
     * @since  1.2.0
     *
     * @return WC_GC_Gift_Card
     */
    public function get_gift_card()
    {
    }
    /**
     * Get email gift card content.
     *
     * @since  1.1.0
     *
     * @return string
     */
    public function get_intro_content()
    {
    }
    /**
     * Get content html.
     *
     * @return string
     */
    public function get_content_html()
    {
    }
    /**
     * Get content plain.
     *
     * @return string
     */
    public function get_content_plain()
    {
    }
    /**
     * Get block editor email template content.
     *
     * @return string
     */
    public function get_block_editor_email_template_content()
    {
    }
    /*
    		---------------------------------------------------*/
    /*
    			Setters.                                         */
    /*---------------------------------------------------*/
    /**
     * Set giftcard.
     *
     * @since  1.8.0
     *
     * @param  WC_GC_Gift_Card $giftcard
     * @return void
     */
    public function set_gift_card($giftcard)
    {
    }
    /**
     * Set placeholders.
     *
     * @since  1.8.0
     * @return void
     */
    public function set_placeholders_value()
    {
    }
    /*
    		---------------------------------------------------*/
    /*
    			Init.                                            */
    /*---------------------------------------------------*/
    /**
     * Initialize Settings Form Fields.
     *
     * @since  1.1.0
     *
     * @return void
     */
    public function init_form_fields()
    {
    }
    /**
     * Setup placeholders.
     *
     * @since  1.8.0
     * @return void
     */
    protected function setup_placeholders()
    {
    }
    /**
     * Setup triggers for this e-mail.
     *
     * @since  1.8.1
     * @return void
     */
    public function setup_hooks()
    {
    }
}
/**
 * Abstract class used as the foundation for GC modules.
 *
 * @version  1.9.0
 */
abstract class WC_GC_Abstract_Module
{
    /**
     * Sub-modules to instantiate.
     *
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
     * @param  string $component
     * @return void
     */
    protected function load_submodule_components($component)
    {
    }
    /**
     * Load module component.
     *
     * @param  string $component
     * @return void
     */
    public function load_component($component)
    {
    }
}
/**
 * GC Modules Loader
 *
 * @version  2.9.1
 */
class WC_GC_Modules
{
    /**
     * The single instance of the class.
     *
     * @var WC_GC_Modules|null
     */
    protected static $_instance = \null;
    /**
     * Modules to instantiate.
     *
     * @var array
     */
    protected $modules = array();
    /**
     * Main WC_GC_Modules instance. Ensures only one instance of WC_GC_Modules is loaded or can be loaded.
     *
     * @static
     * @return WC_GC_Modules
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
     * @param  string $name
     * @return void
     */
    public function load_components($name)
    {
    }
}
/**
 * Expiration Reminders Module
 *
 * @class    WC_GC_SAG_Module
 * @version  2.9.1
 */
class WC_GC_Expiration_Reminders_Module extends \WC_GC_Abstract_Module
{
    /**
     * Core.
     *
     * @return void
     */
    public function load_core()
    {
    }
}
/**
 * WC_GC_Expiration_Reminders_Batch_Processor class.
 *
 * @version 2.8.0
 */
class WC_GC_Expiration_Reminders_Batch_Processor implements \Automattic\WooCommerce\Internal\BatchProcessing\BatchProcessorInterface
{
    /**
     * Get a user-friendly name for this processor.
     */
    public function get_name(): string
    {
    }
    /**
     * Get a user-friendly description for this processor.
     */
    public function get_description(): string
    {
    }
    /**
     * Get the total number of pending items that require processing.
     */
    public function get_total_pending_count(): int
    {
    }
    /**
     * Returns the next batch of items that need to be processed.
     *
     * @param int $size Maximum size of the batch to be returned.
     */
    public function get_next_batch_to_process(int $size): array
    {
    }
    /**
     * Process data for the supplied batch.
     *
     * @param array $gift_cards Batch of items to process.
     */
    public function process_batch(array $gift_cards): void
    {
    }
    /**
     * Get the default batch size for this processor.
     */
    public function get_default_batch_size(): int
    {
    }
    /**
     * Start the background process for scheduling expiration reminders.
     *
     * @return string Informative string to show after the tool is triggered in UI.
     */
    public static function enqueue(): string
    {
    }
    /**
     * Stop the background process for scheduling expiration reminders.
     */
    public static function dequeue(): void
    {
    }
}
/**
 * WC_GC_Expiration_Reminders class.
 *
 * @version 2.9.1
 */
class WC_GC_Expiration_Reminders
{
    const EXPIRATION_REMINDERS_GROUP = 'woocommerce_gc_expiration_reminders';
    const EXPIRATION_MINIMUM_BUFFER = 2 * \DAY_IN_SECONDS;
    /**
     * Setup hooks.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Validate settings upon save.
     *
     * @param  mixed $value Settings value.
     * @param  array $option Settings option.
     * @return mixed
     */
    public static function manage_settings($value, $option)
    {
    }
    /**
     * Add expiration reminders settings.
     *
     * @param array $settings Settings.
     */
    public static function add_expiration_reminders_settings($settings)
    {
    }
    /**
     * Add expiration reminder email class.
     *
     * @param array $emails Email classes.
     */
    public static function email_classes($emails)
    {
    }
    /**
     * Maybe schedule all expiration reminders.
     *
     * @return void
     */
    public static function maybe_schedule_all_expiration_reminders_job()
    {
    }
    /**
     * Schedule expiration reminder.
     *
     * @param WC_GC_Gift_Card_Data $gift_card_data Gift card data.
     * @return void
     */
    public static function schedule_expiration_reminder(\WC_GC_Gift_Card_Data $gift_card_data)
    {
    }
    /**
     * Extracts the gift card data from the action arguments and reschedules the expiration reminder.
     *
     * @param float           $amount Amount.
     * @param WC_GC_Gift_Card $gift_card Gift card.
     * @return void
     */
    public static function handle_credit_and_debit_hook($amount, \WC_GC_Gift_Card $gift_card)
    {
    }
    /**
     * Reschedule expiration reminder.
     *
     * @param WC_GC_Gift_Card_Data $gift_card_data Gift card data.
     * @return void
     */
    public static function reschedule_expiration_reminder(\WC_GC_Gift_Card_Data $gift_card_data)
    {
    }
    /**
     * Get gift card args.
     *
     * @param WC_GC_Gift_Card_Data $gift_card_data Gift card data.
     * @return array{gift_card_id: int}
     */
    public static function get_action_scheduler_action_args(\WC_GC_Gift_Card_Data $gift_card_data)
    {
    }
    /**
     * Unschedule expiration reminder.
     *
     * @param WC_GC_Gift_Card_Data $gift_card_data Gift card data.
     * @return void
     */
    public static function unschedule_expiration_reminder(\WC_GC_Gift_Card_Data $gift_card_data)
    {
    }
    /**
     * Send expiration reminder.
     *
     * @param int $gift_card_id Gift card ID.
     * @return void
     */
    public static function send_expiration_reminder(int $gift_card_id)
    {
    }
    /**
     * Should an expiration reminder be sent?
     *
     * @param WC_GC_Gift_Card_Data $gift_card Gift card data object.
     *
     * @return bool
     */
    public static function should_expiration_reminder_be_sent(\WC_GC_Gift_Card_Data $gift_card): bool
    {
    }
    /**
     * Check card eligibility for a queued or explicitly triggered reminder.
     *
     * @since 2.9.1
     * @param WC_GC_Gift_Card_Data $gift_card Gift card data object.
     * @return bool Whether the reminder can be delivered.
     */
    public static function can_send_expiration_reminder(\WC_GC_Gift_Card_Data $gift_card): bool
    {
    }
    /**
     * Share card eligibility while preserving the future scheduling requirement.
     *
     * @since 2.9.1
     * @param WC_GC_Gift_Card_Data $gift_card Gift card data object.
     * @param bool                 $future_only Whether to require a future reminder date.
     * @return bool Whether the card is eligible for this stage.
     */
    private static function reminder_is_eligible(\WC_GC_Gift_Card_Data $gift_card, $future_only)
    {
    }
    /**
     * Calculate expiration reminder date.
     *
     * @param WC_GC_Gift_Card_Data $gift_card Gift card object.
     *
     * @return int Unix timestamp.
     */
    public static function calculate_expiration_reminder_date(\WC_GC_Gift_Card_Data $gift_card): int
    {
    }
    /**
     * Check if expiration reminders are enabled.
     *
     * @return bool
     */
    public static function is_enabled(): bool
    {
    }
}
/**
 * WC_GC_Email_Expiration_Reminder class.
 *
 * @version 2.9.1
 */
class WC_GC_Email_Expiration_Reminder extends \WC_Email
{
    /**
     * Current giftcard object.
     *
     * @var WC_GC_Gift_Card|null
     */
    protected $giftcard;
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Setup hooks.
     *
     * @return void
     */
    public function setup_hooks()
    {
    }
    /**
     * Trigger the email.
     *
     * @throws Exception Email failed to send.
     * @param WC_GC_Gift_Card $gift_card Gift card object.
     * @return void
     */
    public function trigger(\WC_GC_Gift_Card $gift_card)
    {
    }
    /**
     * Setup placeholders.
     *
     * @return void
     */
    protected function setup_placeholders()
    {
    }
    /**
     * Set placeholders.
     *
     * @return void
     */
    public function set_placeholders_value()
    {
    }
    /**
     * Set giftcard.
     *
     * @param WC_GC_Gift_Card $giftcard Gift card object.
     */
    public function set_gift_card(\WC_GC_Gift_Card $giftcard): void
    {
    }
    /**
     * Get giftcard.
     *
     * @return WC_GC_Gift_Card
     */
    public function get_gift_card()
    {
    }
    /**
     * Get email subject.
     *
     * @return string
     */
    public function get_default_subject()
    {
    }
    /**
     * Get email heading.
     *
     * @return string
     */
    public function get_default_heading()
    {
    }
    /**
     * Get default email gift card content.
     *
     * @return string
     */
    public function get_default_intro_content()
    {
    }
    /**
     * Get email gift card content.
     *
     * @return string
     */
    public function get_intro_content()
    {
    }
    /**
     * Get content html.
     *
     * @return string
     */
    public function get_content_html()
    {
    }
    /**
     * Style Giftcard template.
     *
     * @param  string   $css Stylesheet.
     * @param  WC_Email $email Email object.
     * @return string
     */
    public function add_stylesheets($css, $email = \null)
    {
    }
    /**
     * Get template args.
     *
     * @param  WC_Email $email Email object.
     * @return array
     */
    public function get_template_args($email)
    {
    }
    /**
     * Get content plain.
     *
     * @return string
     */
    public function get_content_plain()
    {
    }
}
/**
 * Send As Gift Module
 *
 * @class    WC_GC_SAG_Module
 * @version  2.9.1
 */
class WC_GC_SAG_Module extends \WC_GC_Abstract_Module
{
    /**
     * Core.
     *
     * @return void
     */
    public function load_core()
    {
    }
}
/**
 * Gift Card - Send As Gift admin manager.
 *
 * @class    WC_GC_SAG_Admin
 * @version  2.9.1
 */
class WC_GC_SAG_Admin
{
    /**
     * Constructor.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Add admin settings to enable/disable "Send as Gift" functionality.
     *
     * @param  array $settings
     * @return array
     */
    public static function add_send_as_gift_settings($settings)
    {
    }
    /**
     * Disable the delivery date field for "Send to me" gift cards.
     *
     * @param  bool            $enabled
     * @param  WC_GC_Gift_Card $giftcard
     * @return bool
     */
    public static function disable_delivery_date_field($enabled, $giftcard)
    {
    }
}
/**
 * Gift Card - Send As Gift emails manager.
 *
 * @class    WC_GC_SAG_Emails
 * @version  2.9.1
 */
class WC_GC_SAG_Emails
{
    /**
     * Constructor.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Support BCC recipients in "Send to Me" emails.
     *
     * @param array $supported_ids
     *
     * @return array
     */
    public static function support_bcc_recipients($supported_ids)
    {
    }
    /**
     * Registers custom emails actions.
     *
     * @param  array $actions
     * @return array
     */
    public static function email_actions($actions)
    {
    }
    /**
     * Registers custom emails classes.
     *
     * @param  array $emails
     * @return array
     */
    public static function email_classes($emails)
    {
    }
    /**
     * Applies default e-mail styles to SAG emails.
     *
     * @param  array $emails
     * @return array
     */
    public static function style_emails($emails)
    {
    }
    /**
     * Filters action hook name for sending Gift Card emails.
     *
     * @param  string $hook
     * @param  array  $giftcards
     * @return string
     */
    public static function register_send_to_buyer_hook($hook, $giftcards)
    {
    }
    /**
     * Filters action hook name for sending Gift Card emails.
     *
     * @param  string          $hook
     * @param  WC_GC_Gift_Card $giftcard
     * @return string
     */
    public static function register_force_send_to_buyer_hook($hook, $giftcard)
    {
    }
}
/**
 * Gift Card - Send As Gift product manager.
 *
 * @class    WC_GC_SAG_Gift_Card_Product
 * @version  2.9.1
 */
class WC_GC_SAG_Gift_Card_Product
{
    /**
     * Constructor.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Conditionally hide Gift Cards form, when "Send as Gift?" is set to never.
     *
     * @return void
     */
    public static function maybe_hide_cards_form()
    {
    }
    /**
     * Display a checkbox, when "Send as Gift?" is set to "Let customers decide".
     *
     * @return void
     */
    public static function maybe_print_send_as_a_gift_checkbox()
    {
    }
    /**
     * Print "Send as Gift" checkbox.
     *
     * @param  WC_Product $product
     * @return void
     */
    public static function print_send_as_a_gift_checkbox($product)
    {
    }
    /**
     * Open wrapper before the Gift Cards form.
     *
     * @return void
     */
    public static function add_form_container_pre()
    {
    }
    /**
     * Close wrapper after the Gift Cards form.
     *
     * @return void
     */
    public static function add_form_container_after()
    {
    }
    /**
     * Conditionally show/hide the Gift Cards form based on the value of the "Send as Gift" checkbox.
     *
     * @return void
     */
    public static function toggle_gift_card_form()
    {
    }
    /**
     * Validate add-to-cart action.
     *
     * @param  boolean $passed
     * @param  int     $product_id
     * @param  int     $quantity
     * @param  mixed   $variation_id
     * @param  array   $variations
     * @param  array   $cart_item_data
     * @return boolean
     */
    public static function validate_add_to_cart($passed, $product_id, $quantity, $variation_id = '', $variations = array(), $cart_item_data = array())
    {
    }
    /**
     * Change cart item permalink.
     *
     * @param  string $link
     * @param  array  $cart_item
     * @param  string $cart_item_key
     * @return string
     */
    public static function cart_item_permalink($link, $cart_item, $cart_item_key)
    {
    }
    /**
     * Clear cart item data for users who buy a Gift Card for themselves.
     *
     * @param  array $cart_item_data
     * @param  int   $product_id
     * @param  int   $variation_id
     *
     * @return array
     */
    public static function update_gift_card_item_data($cart_item_data, $product_id, $variation_id)
    {
    }
    /**
     * Update cart item meta in 'order-again' context.
     *
     * @param  array                 $cart_item_data
     * @param  WC_Order_Item_Product $order_item
     * @param  WC_Order              $order
     * @return array
     */
    public static function update_gift_card_order_again_item_data($cart_item_data, $order_item, $order)
    {
    }
    /**
     * Handle guests who buy a Gift Card for themselves.
     *
     * @param  WC_Order_Item $order_item
     * @param  string        $cart_item_key
     * @param  array         $cart_item
     * @param  WC_Order      $order
     * @return void
     */
    public static function get_customer_details_from_order($order_item, $cart_item_key, $cart_item, $order)
    {
    }
    /**
     * Handle guests who buy a Gift Card for themselves (blocks checkout).
     *
     * @throws \Automattic\WooCommerce\StoreApi\Exceptions\RouteException
     *
     * @param  WC_Order $order
     * @return void
     */
    public static function rest_checkout_update_order_meta_recipient_is_buyer($order)
    {
    }
    /**
     * Mark SAG meta keys as hidden.
     *
     * @param  array $hidden_meta
     * @return array
     */
    public static function order_item_hide_sag_meta($hidden_meta)
    {
    }
    /**
     * Change order item permalink.
     *
     * @param  string        $link
     * @param  WC_Order_Item $order_item
     * @param  WC_Order      $order
     * @return string
     */
    public static function order_item_permalink($link, $order_item, $order)
    {
    }
    /**
     * Saves order item meta, specific to recipient is buyer.
     *
     * @param  WC_Order      $order
     * @param  WC_Order_Item $order_item
     * @return void
     */
    private static function add_order_item_meta_recipient_is_buyer($order, $order_item)
    {
    }
}
/**
 * Gift Card - Send As Gift gift card manager.
 *
 * @class    WC_GC_SAG_Gift_Card
 * @version  2.9.1
 */
class WC_GC_SAG_Gift_Card
{
    /**
     * Initialize.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Runtime cache of already checked Gift Cards.
     *
     * @var bool[]
     */
    protected static $checked_gift_cards = array();
    /**
     * Checks if Gift Card will be sent to the buyer.
     *
     * @param  WC_GC_Gift_Card $giftcard
     * @return bool
     */
    public static function is_a_gift($giftcard)
    {
    }
}
/**
 * Gift Card Send_To_Buyer email controller.
 *
 * @class    WC_GC_Email_Gift_Card_Send_To_Buyer
 * @version  2.9.1
 */
class WC_GC_Email_Gift_Card_Send_To_Buyer extends \WC_GC_Email_Gift_Card_Received
{
    /**
     * Current giftcard object.
     *
     * @var WC_GC_Gift_Card
     */
    protected $giftcard;
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /*
    		---------------------------------------------------*/
    /*
    			Triggers.                                        */
    /*---------------------------------------------------*/
    /**
     * Process giftcards.
     *
     * @param array          $giftcards
     * @param int            $order_id
     * @param WC_Order|false $order
     * @return void
     */
    public function process_giftcards($giftcards, $order_id, $order = \false)
    {
    }
    /**
     * Trigger the sending of this email.
     *
     * @param int|WC_GC_Gift_Card_Data|WC_GC_Gift_Card $giftcard Gift card object, data object or ID.
     * @return void
     */
    public function force_trigger($giftcard)
    {
    }
    /*
    		---------------------------------------------------*/
    /*
    			Defaults.                                        */
    /*---------------------------------------------------*/
    /**
     * Get email subject.
     *
     * @return string
     */
    public function get_default_subject()
    {
    }
    /**
     * Get email heading.
     *
     * @return string
     */
    public function get_default_heading()
    {
    }
    /**
     * Get default email gift card content.
     *
     * @since  1.0.0
     *
     * @return string
     */
    public function get_default_intro_content()
    {
    }
    /*
    		---------------------------------------------------*/
    /*
    			Init.                                            */
    /*---------------------------------------------------*/
    /**
     * Setup triggers for this e-mail.
     *
     * @since  1.0.0
     * @return void
     */
    public function setup_hooks()
    {
    }
}
/**
 * REST API Gift Cards class.
 *
 * @class    WC_GC_REST_API_Gift_Cards_V2_Controller
 * @version  2.9.1
 */
class WC_GC_REST_API_Gift_Cards_V2_Controller extends \WC_REST_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v2';
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'gift-cards';
    /**
     * Cached batch attributes. Used for batch requests.
     *
     * @var array
     */
    protected $cached_batch_attributes = array(
        'POST' => array(),
        // Batch create.
        'PUT' => array(),
        // Batch update.
        'DELETE' => array(),
    );
    /**
     * Whether a newly created card is being prepared for its create response.
     *
     * @var bool
     */
    private $preparing_create_response = \false;
    /**
     * Register the routes for Gift Cards.
     *
     * @return void
     */
    public function register_routes()
    {
    }
    /**
     * Validate date request arguments.
     *
     * @param  mixed           $value   Value to validate.
     * @param  WP_REST_Request $request Request instance.
     * @param  string          $param   Param to validate.
     * @return WP_Error|boolean
     */
    public function rest_validate_date($value, $request, $param)
    {
    }
    /**
     * Sanitize and format the given date.
     *
     * @param  string          $date_str Value being sanitized.
     * @param  WP_REST_Request $request  The Request.
     * @param  string          $param    The param being sanitized.
     * @return int
     */
    public function rest_sanitize_date($date_str, $request, $param)
    {
    }
    /**
     * Get a single Gift Card.
     *
     * @param  WP_REST_Request $request Request data.
     * @return WP_REST_Response|WP_Error
     */
    public function get_item($request)
    {
    }
    /**
     * Get all Gift Cards.
     *
     * @param  WP_REST_Request $request Request data.
     * @return WP_REST_Response
     */
    public function get_items($request)
    {
    }
    /**
     * Create a single Gift Card.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error
     */
    public function create_item($request)
    {
    }
    /**
     * Update a single Gift Card.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error
     */
    public function update_item($request)
    {
    }
    /**
     * Delete a single Gift Card.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error
     */
    public function delete_item($request)
    {
    }
    /**
     * Prepare the Gift Card for the REST response.
     *
     * @param  WC_GC_Gift_Card_Data $item    Gift Card data.
     * @param  WP_REST_Request      $request Request object.
     * @return WP_REST_Response
     */
    public function prepare_item_for_response($item, $request)
    {
    }
    /**
     * Prepare the Gift Card Activity for the REST response.
     *
     * @param  array $activity
     * @return array
     */
    protected function prepare_activity_data_item_for_response($activity)
    {
    }
    /**
     * Prepare the Gift Card meta data for the REST response.
     *
     * @param  stdClass $meta Singe meta object.
     * @return array
     */
    protected function prepare_meta_data_item_for_response($meta)
    {
    }
    /**
     * Prepare links for the request.
     *
     * @param  int $gift_card_id Given Gift Card ID.
     * @return array
     */
    protected function prepare_links($gift_card_id)
    {
    }
    /**
     * Check whether a given request has permission to read a Gift Cards.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_item_permissions_check($request)
    {
    }
    /**
     * Check whether a given request has permission to read Gift Cards.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_items_permissions_check($request)
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
     * Check if a given request has access to create Gift Cards.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function create_item_permissions_check($request)
    {
    }
    /**
     * Check whether a given request has permission to edit Gift Cards.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function update_item_permissions_check($request)
    {
    }
    /**
     * Check whether a given request has permission to delete Gift Cards.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function delete_item_permissions_check($request)
    {
    }
    /**
     * Check if a given request has access to batch manage Gift Cards.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function batch_items_permissions_check($request)
    {
    }
    /**
     * Get the Gift Card's schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
    }
    /**
     * Reject request meta values that carry PHP serialization.
     *
     * Values are stored as-is and only ever decoded on the way out (see WC_GC_Gift_Card_Data::decode_meta_value),
     * so a serialized string must never enter storage.
     *
     * @since 2.8.0
     *
     * @param  mixed $value Request meta value.
     * @return mixed
     * @throws Exception When the value is an object or a PHP-serialized string.
     */
    private function prepare_meta_value($value)
    {
    }
    /**
     * Fine tune endpoint args.
     *
     * @param  string $method HTTP method of the request (Optional).
     * @return array
     */
    public function get_endpoint_args_for_item_schema($method = \WP_REST_Server::CREATABLE)
    {
    }
    /**
     * Check user permissions on REST API.
     *
     * @param  string $object  Object.
     * @param  string $context Request context.
     * @return bool
     */
    public function wc_rest_check_gift_card_permissions($object, $context = 'read')
    {
    }
    /**
     * Validate and decorate batch request with the necessary attributes, sanitizations.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_REST_Request|WP_Error The decorated request or error if there is no match.
     */
    protected function maybe_prepare_attributes_for_batch_request($request)
    {
    }
}
/**
 * REST API Gift Cards class.
 *
 * @class   WC_GC_REST_API_Gift_Cards_Controller
 * @version 2.8.0
 */
class WC_GC_REST_API_Gift_Cards_Controller extends \WC_GC_REST_API_Gift_Cards_V2_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v3';
}
/**
 * Add custom REST API fields.
 *
 * @class    WC_GC_REST_API_Order_Controller
 * @version  2.9.1
 */
class WC_GC_REST_API_Order_Controller
{
    /**
     * Custom REST API order field names, indicating support for getting/updating.
     *
     * @var array<string, string[]>
     */
    private $order_fields = array('gift_cards' => array('get', 'update'));
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Sets up hooks.
     *
     * @return void
     */
    private function hooks()
    {
    }
    /**
     * Omit private gift-card metadata from generic order responses.
     *
     * @since 2.8.0
     *
     * @param WP_REST_Response $response Order response.
     * @return WP_REST_Response
     */
    public function hide_private_item_metadata($response)
    {
    }
    /**
     * Apply code visibility to REST order note responses.
     *
     * @since 2.8.0
     * @param WP_REST_Response $response Order note response.
     * @return WP_REST_Response
     */
    public function format_order_note($response)
    {
    }
    /**
     * Register custom REST API fields for order requests.
     *
     * @return void
     */
    public function register_order_fields()
    {
    }
    /**
     * Gets schema properties for GC order fields.
     *
     * @param string $field_name
     *
     * @return array
     */
    public function get_order_field_schema($field_name)
    {
    }
    /**
     * Gets values for GC order fields.
     *
     * @param  array           $response
     * @param  string          $field_name
     * @param  WP_REST_Request $request
     * @return array
     */
    public function get_order_field_value($response, $field_name, $request)
    {
    }
    /**
     * Gets GC specific order data.
     *
     * @param  string   $key
     * @param  WC_Order $order
     * @return array
     */
    private function get_order_field($key, $order)
    {
    }
    /**
     * Updates values for GC order fields.
     *
     * @param  mixed  $field_value
     * @param  mixed  $response
     * @param  string $field_name
     * @return boolean
     */
    public function update_order_field_value($field_value, $response, $field_name)
    {
    }
    /**
     * Parse the value from the REST request.
     *
     * @throws Exception
     *
     * @param  mixed                                     $value Gift cards data from the request.
     * @param  WC_Order                                  $order Order.
     * @param  array<string, WC_GC_Order_Item_Gift_Card> $current_items Gift card order items, keyed by code.
     * @return array {
     *     @type  WC_GC_Gift_Card  $giftcard
     *     @type  float|null       $amount
     *     @type  bool             $force_delete
     *     @type  bool             $is_optional
     * }
     */
    private function parse_order_field_value($value, $order, $current_items = array())
    {
    }
    /**
     * Gets extended (unprefixed) schema properties for orders.
     *
     * @return array
     */
    private function get_extended_order_schema()
    {
    }
}
/**
 * Main plugin class.
 *
 * @class    WC_Gift_Cards
 * @version  2.9.1
 */
class WC_Gift_Cards
{
    /**
     * Plugin version.
     *
     * @var string
     */
    public $version = '2.9.1';
    /**
     * Min required WC version.
     *
     * @var string
     */
    private $wc_min_version = '11.1.0';
    /**
     * The DB helper.
     *
     * @var WC_GC_DB
     */
    public $db;
    /**
     * Gift Cards Controller.
     *
     * @var WC_GC_Gift_Cards|null
     */
    public $giftcards;
    /**
     * Cart Controller.
     *
     * @var WC_GC_Cart
     */
    public $cart;
    /**
     * Order Controller.
     *
     * @var WC_GC_Order
     */
    public $order;
    /**
     * Templates Controller.
     *
     * @var WC_GC_Templates
     */
    public $templates;
    /**
     * Account Controller.
     *
     * @var WC_GC_Account|null
     */
    public $account;
    /**
     * Emails Controller.
     *
     * @var WC_GC_Emails
     */
    public $emails;
    /**
     * The single instance of the class.
     *
     * @var WC_Gift_Cards|null
     */
    protected static $_instance = \null;
    /**
     * Main WC_Gift_Cards instance. Ensures only one instance is loaded or can be loaded - @see 'WC_GC()'.
     *
     * @static
     * @return  WC_Gift_Cards
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
     * @param  boolean $base
     * @param  string  $version
     * @return string
     */
    public function get_plugin_version($base = \false, $version = '')
    {
    }
    /**
     * Define constants if not present.
     *
     * @since  1.1.0
     *
     * @param  string $name Constant name.
     * @param  mixed  $value Constant value.
     * @return void
     */
    protected function maybe_define_constant($name, $value)
    {
    }
    /**
     * Indicates whether the plugin is fully initialized.
     *
     * @since  1.1.0
     *
     * @return boolean
     */
    public function is_plugin_initialized()
    {
    }
    /**
     * Queues the WooCommerce version incompatibility notice.
     *
     * Runs on 'admin_notices' before 'WC_GC_Admin_Notices::output_notices()' so that no translation
     * function is called before 'init'.
     *
     * @since 2.7.7
     *
     * @return void
     */
    public function wc_incompatibility_notice()
    {
    }
    /**
     * Queues the PHP version incompatibility notice.
     *
     * Runs on 'admin_notices' before 'WC_GC_Admin_Notices::output_notices()' so that no translation
     * function is called before 'init'.
     *
     * @since 2.7.7
     *
     * @return void
     */
    public function php_incompatibility_notice()
    {
    }
    /**
     * Fire in the hole!
     *
     * @return void
     */
    public function initialize_plugin()
    {
    }
    /**
     * Constants.
     *
     * @return void
     */
    public function define_constants()
    {
    }
    /**
     * A simple dumb datastore for sharing information across our plugins.
     *
     * @since  1.3.2
     *
     * @return void
     */
    private function maybe_create_store()
    {
    }
    /**
     * Includes.
     *
     * @return void
     */
    public function includes()
    {
    }
    /**
     * Admin & AJAX functions and hooks.
     *
     * @return void
     */
    public function admin_includes()
    {
    }
    /**
     * Load textdomain.
     *
     * @return void
     */
    public function load_translation()
    {
    }
    /**
     * Log using 'WC_Logger' class.
     *
     * @param  string $message
     * @param  string $level
     * @param  string $context
     * @return void
     */
    public function log($message, $level, $context)
    {
    }
    /**
     * Handle plugin activation process.
     *
     * @since  1.12.0
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
    /**
     * Get screen ids.
     *
     * @return string[]
     */
    public function get_screen_ids()
    {
    }
    /**
     * Checks if the current admin screen belongs to extension.
     *
     * @param   array $extra_screens_to_check (Optional)
     * @return  bool
     */
    public function is_current_screen($extra_screens_to_check = array())
    {
    }
    /**
     * Returns URL to a doc or support resource.
     *
     * @since  1.3.2
     *
     * @param  string $handle
     * @return string|false URL, or false for an unknown handle.
     * @phpstan-return ($handle is 'update-php'|'docs-contents'|'guide'|'guide-multi-prepaid-tax'|'faq-multi-prepaid-revenue'|'updating'|'ticket-form' ? string : false)
     */
    public function get_resource_url($handle)
    {
    }
}
/**
 * Add English mapping placeholders when not using English as current language.
 *
 * @since  1.6.0
 *
 * @param  array $mappings Importer columns mappings.
 * @return array
 */
function wc_gc_importer_default_english_mappings($mappings)
{
}
/**
 * Add English special mapping placeholders when not using English as current language.
 *
 * @since 1.6.0
 *
 * @param  array $mappings Importer columns mappings.
 * @return array
 */
function wc_gc_importer_default_special_english_mappings($mappings)
{
}
/**
 * Add Shopify mappings.
 *
 * @since  1.6.0
 *
 * @param  array $mappings     Importer columns mappings.
 * @param  array $raw_headers  Raw headers from CSV being imported.
 * @return array
 */
function wc_gc_importer_shopify_mappings($mappings, $raw_headers)
{
}
/**
 * Removes the `ID` mapping for Shopify.
 *
 * @since  1.6.0
 *
 * @param  array $headers      Importer columns mappings.
 * @param  array $raw_headers  Raw headers from CSV being imported.
 * @return array
 */
function wc_gc_importer_shopify_mappings_remove_id($headers, $raw_headers)
{
}
/**
 * Gets the value of the "Is Gift Card for a gift?" admin setting.
 *
 * @param  WC_Product|null $product Product object.
 * @return string
 */
function wc_gc_sag_get_send_as_gift_status($product = \null)
{
}
/*
---------------------------------------------------*/
/*
	Data functions.                                  */
/*---------------------------------------------------*/
/**
 * Get activity types.
 *
 * @return array<string, string>
 */
function wc_gc_get_activity_types()
{
}
/**
 * Get activity type label.
 *
 * @param  string $slug
 * @return string
 */
function wc_gc_get_activity_type_label($slug)
{
}
/**
 * Get Product types that can be used as Gift Cards.
 *
 * @return array
 */
function wc_gc_get_product_types_allowed()
{
}
/**
 * Returns all WooCommerce Order statuses that match with a "Pending Payment" state.
 *
 * @since  1.5.4
 *
 * @return array
 */
function wc_gc_get_order_pending_statuses()
{
}
/*
---------------------------------------------------*/
/*
	DB.                                              */
/*---------------------------------------------------*/
/**
 * Get a gift card object.
 *
 * @since  1.6.0
 *
 * @param  int $giftcard_id
 * @return WC_GC_Gift_Card_Data|false
 */
function wc_gc_get_gift_card($giftcard_id)
{
}
/**
 * Get a gift card object by code.
 *
 * @since  1.6.0
 *
 * @param  string $code
 * @return WC_GC_Gift_Card_Data|false
 */
function wc_gc_get_gift_card_by_code($code)
{
}
/**
 * Get a notification object.
 *
 * @since  1.6.0
 *
 * @param  array $query_args (Optional)
 * @return array|int|false Array of WC_GC_Gift_Card_Data objects, the number of matches when counting, or false if nothing is found.
 */
function wc_gc_get_gift_cards($query_args = array())
{
}
/*
---------------------------------------------------*/
/*
	Template functions.                              */
/*---------------------------------------------------*/
/**
 * Boolean whether or not to mask the gc codes.
 *
 * @param  string $context
 * @return bool
 */
function wc_gc_mask_codes($context = '')
{
}
/**
 * Boolean whether or not to mask the gc messages.
 *
 * @since  1.1.0
 *
 * @return bool
 */
function wc_gc_mask_messages()
{
}
/**
 * Parse delimiter-separated emails string.
 *
 * @param  string $email_string
 * @return string[]
 */
function wc_gc_parse_email_string($email_string)
{
}
/**
 * Get emails string delimiter.
 *
 * @since  1.1.5
 *
 * @return string
 */
function wc_gc_get_emails_delimiter()
{
}
/*
---------------------------------------------------*/
/*
	Utilities.                                       */
/*---------------------------------------------------*/
/**
 * Is site admin helper.
 *
 * @return bool
 */
function wc_gc_is_site_admin()
{
}
/**
 * Is shop manager helper.
 *
 * @since 1.7.0
 *
 * @return bool
 */
function wc_gc_is_shop_manager()
{
}
/**
 * Front-End components.
 *
 * @return bool
 */
function wc_gc_is_ui_disabled()
{
}
/**
 * Store-wide redeeming.
 *
 * @return bool
 */
function wc_gc_is_redeeming_enabled()
{
}
/**
 * Generates a unique 19 character Gift Card code.
 *
 * @return string
 */
function wc_gc_generate_gift_card_code()
{
}
/**
 * Has code pattern.
 *
 * @since 1.6.0
 *
 * @param  string $code
 * @return bool
 */
function wc_gc_is_gift_card_code($code)
{
}
/**
 * Is email format.
 *
 * @since 1.6.0
 *
 * @param  string $value
 * @return string|false
 */
function wc_gc_is_email($value)
{
}
/**
 * Generates a unique Gift Card hash.
 *
 * @since 1.0.4
 * @deprecated 2.7.6 Legacy token authentication is no longer supported.
 *
 * @param  string $input
 * @param  string $action
 * @return string|false
 */
function wc_gc_gift_card_hash($input, $action)
{
}
/**
 * Utility function, returns the given status with the `wc-` prefix.
 *
 * @since  1.6.0
 *
 * @param  string $order_status
 * @return string
 */
function wc_gc_prefix_order_status($order_status)
{
}
/**
 * Utility function, adjusts the RGB brightness steps of a given hex color.
 *
 * @since  1.7.0
 *
 * @param  string $hex
 * @param  int    $steps
 * @return string
 */
function wc_gc_adjust_color_brightness($hex, $steps)
{
}
/**
 * Utility function, returns the RGB contrast between two colors.
 *
 * @since  1.7.0
 *
 * @param  string $color_1
 * @param  string $color_2
 * @return int|float
 */
function wc_gc_get_color_diff($color_1, $color_2)
{
}
/*
---------------------------------------------------*/
/*
	Screen functions.                                */
/*---------------------------------------------------*/
/**
 * Get parent menu.
 *
 * @since 1.6.0
 *
 * @return string
 */
function wc_gc_get_parent_menu()
{
}
/**
 * Get formatted screen id.
 *
 * @since 1.5.2
 *
 * @param string $screen_id
 * @param  bool   $replace (Optional) Replace submenu parent
 *
 * @return string
 */
function wc_gc_get_formatted_screen_id(string $screen_id, bool $replace = \true): string
{
}
/*
---------------------------------------------------*/
/*
	Date functions.                                  */
/*---------------------------------------------------*/
/**
 * Is a unix timestamp.
 *
 * @since 1.2.0
 *
 * @param  mixed $stamp Value to check.
 * @return bool
 */
function wc_gc_is_unix_timestamp($stamp)
{
}
/**
 * Takes a timestamp in GMT and converts it to store's timezone.
 *
 * @since 1.3.0
 *
 * @param  int   $timestamp
 * @param  float $gmt_offset GMT offset in hours.
 * @return int
 */
function wc_gc_convert_timestamp_to_gmt_offset($timestamp, $gmt_offset = \null)
{
}
/**
 * Get the store's GMT offset.
 *
 * @since  1.3.0
 *
 * @return float
 */
function wc_gc_get_gmt_offset()
{
}
/**
 * Get the date format for JS.
 *
 * Hint: Doesn't support time formats.
 *
 * @since  1.12.1
 *
 * @param  string $date_format (Optional) Date format in PHP
 * @return string The date format for JS
 */
function wc_gc_get_js_date_format($date_format = \null)
{
}
/**
 * Get the delivery timestamp type.
 *
 * @since  1.3.0
 *
 * @return string
 */
function wc_gc_get_date_input_timezone_reference()
{
}
/**
 * Get the protected directory that stages CSV imports and exports.
 *
 * Staged files contain gift card codes. Like WooCommerce core's woocommerce_uploads directory, this one blocks web
 * access where .htaccess is honored, and callers also give every file a random name so it cannot be guessed elsewhere.
 *
 * @since 2.8.0
 *
 * @return string Directory path with a trailing slash.
 */
function wc_gc_get_csv_directory()
{
}
/**
 * Delete a staged CSV file left behind by an abandoned import or export.
 *
 * @since 2.8.0
 *
 * @param  string $file_name Random file name inside the CSV directory.
 * @return void
 */
function wc_gc_delete_csv_file($file_name)
{
}
/**
 * Check whether the current user can edit a specific order.
 *
 * @since 2.7.7
 *
 * @param WC_Order|false $order Order to authorize.
 * @return bool
 */
function wc_gc_current_user_can_edit_order($order)
{
}
/**
 * Create a new order refund programmatically.
 *
 * Returns a new refund object on success which can then be used to add additional data.
 *
 * @since 1.10.0
 *
 * @throws Exception Throws exceptions when fail to create, but returns WP_Error instead.
 *
 * @param  array $args
 * @return WC_Order_Refund|WP_Error
 */
function wc_gc_create_refund($args = array())
{
}
function wc_gc_get_activity_description($activity_data)
{
}
/**
 * Format a list of emails, showing the first few.
 *
 * @param  string[] $emails Emails.
 * @param  int      $show Number of emails to show.
 * @return string
 */
function wc_gc_get_emails_formatted($emails, $show = 2)
{
}
/**
 * Mask a gift card code, keeping its last four characters.
 *
 * @param  string $code Gift card code.
 * @return string
 */
function wc_gc_mask_code($code)
{
}
/**
 * Format a gift card code for the current order administrator.
 *
 * @since 2.8.0
 *
 * @param string $code Gift card code.
 * @return string
 */
function wc_gc_format_code($code)
{
}
/**
 * Apply the current code visibility policy to marked codes in an order note.
 *
 * @since 2.8.0
 *
 * @param string $note Order note text.
 * @return string
 */
function wc_gc_format_order_note($note)
{
}
/**
 * Builds the resolution to be shown for pending balances.
 *
 * @since  1.6.0
 *
 * @param  WC_GC_Gift_Card|WC_GC_Gift_Card_Data $giftcard Gift card.
 * @param  string                               $context  Context, 'view' or 'notice'.
 * @return string
 */
function wc_gc_get_pending_balance_resolution($giftcard, $context = 'view')
{
}
/**
 * Prints the recipient form field html.
 *
 * @since  1.6.0
 *
 * @param  WC_Product $product
 * @return void
 */
function wc_gc_form_field_recipient_html($product)
{
}
/**
 * Prints the CC form field html.
 *
 * @since  1.9.0
 *
 * @param  WC_Product $product
 * @return void
 */
function wc_gc_form_field_cc_html($product)
{
}
/**
 * Prints the sender form field html.
 *
 * @since  1.6.0
 *
 * @param  WC_Product $product
 * @return void
 */
function wc_gc_form_field_sender_html($product)
{
}
/**
 * Prints the message form field html.
 *
 * @since  1.6.0
 *
 * @param  WC_Product $product
 * @return void
 */
function wc_gc_form_field_message_html($product)
{
}
/**
 * Prints the delivery form field html.
 *
 * @since  1.6.0
 *
 * @param  WC_Product $product
 * @return void
 */
function wc_gc_form_field_delivery_html($product)
{
}
/**
 * Get the status labels html.
 *
 * @since  1.7.0
 *
 * @param  mixed $giftcard
 * @param  bool  $single
 * @return string
 */
function wc_gc_get_status_labels_html($giftcard, $single = \false)
{
}
/**
 * Get the status labels html.
 *
 * @since  1.8.1
 *
 * @param  string $message
 * @param  string $context
 * @param  string $separator
 * @return string
 */
function wc_gc_display_message_text($message, $context = 'all', $separator = ' ')
{
}
/**
 * Compatibility wrapper for getting the element-based block class.
 *
 * @since 1.16.0
 *
 * @param  string $element
 * @return string
 */
function wc_gc_wp_theme_get_element_class_name($element)
{
}
/**
 * Update 1.7.0 db function.
 *
 * @return void
 */
function wc_gc_update_170_main()
{
}
/**
 * Update 1.7.0 db version function.
 *
 * @return void
 */
function wc_gc_update_170_db_version()
{
}
/**
 * Returns the main instance of WC_Gift_Cards to prevent the need to use globals.
 *
 * @return  WC_Gift_Cards
 */
function WC_GC()
{
}
\define('WC_GC_VERSION', '2.9.1');
