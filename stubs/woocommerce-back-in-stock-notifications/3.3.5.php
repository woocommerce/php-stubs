<?php
/**
 * Generated stub declarations for woocommerce-back-in-stock-notifications 3.3.5.
 * @see https://github.com/woocommerce/all-plugins/tree/stubs
 */

/**
 * WC_BIS_Admin_Activity_Page Class.
 */
class WC_BIS_Admin_Activity_Page
{
    /**
     * Page home URL.
     *
     * @const PAGE_URL
     */
    const PAGE_URL = 'admin.php?page=bis_activity';
    /**
     * Render page.
     */
    public static function output()
    {
    }
}
/**
 * Admin AJAX meta-box handlers.
 *
 * @class    WC_BIS_Admin_Ajax
 * @version  1.4.0
 */
class WC_BIS_Admin_Ajax
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
     * @return void
     */
    public static function dismiss_notice()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Partials.
    |--------------------------------------------------------------------------
    */
    /**
     * Returns product data partial html for new notification.
     *
     * @return void
     */
    public static function new_notification_get_product_data_html()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Modals.
    |--------------------------------------------------------------------------
    */
    /**
     * Returns export notifications modal's html.
     *
     * @return void
     */
    public static function modal_export_notifications_html()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Dashboard.
    |--------------------------------------------------------------------------
    */
    /**
     * Returns data for 'Most subscribed' dashboard table.
     *
     * @return void
     */
    public static function get_most_subscribed_date_range_results()
    {
    }
    /**
     * Search for products and echo json for new notification product.
     * We could use the WooCommerce's native "json_search_for_products_and_varitions" but it doesn't include an `exclude_type` param prior to WC 3.9.
     *
     * @param  string $term
     * @return string (JSON)
     */
    public static function json_search_products_for_notification($term = '')
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Tests.
    |--------------------------------------------------------------------------
    */
    /**
     * Checks if loopback requests work.
     *
     * @return void
     */
    public static function ajax_loopback_test()
    {
    }
}
/**
 * WC_BIS_Admin_Dashboard_Page Class.
 *
 * @version 3.0.0
 */
class WC_BIS_Admin_Dashboard_Page
{
    /**
     * Page home URL.
     *
     * @const PAGE_URL
     */
    const PAGE_URL = 'admin.php?page=bis_dashboard';
    /**
     * Render page.
     */
    public static function output()
    {
    }
    /**
     * Get deliveries chart.
     */
    protected static function print_deliveries_chart()
    {
    }
    /**
     * Get registrations chart.
     */
    protected static function print_registrations_chart()
    {
    }
    /**
     * Prepare items for chart.
     *
     * @param  array  $notifications Array of notifications arrays. This doesn't consists of WC_BIS_Notification_Data objects.
     * @param  string $date_prop     Date property.
     * @param  string $data_prop     Data property.
     * @param  int    $interval      Interval (in days).
     * @param  string $start_date    Start date.
     * @return array
     */
    protected static function prepare_chart_data($notifications, $date_prop, $data_prop, $interval, $start_date)
    {
    }
}
/**
 * WC_BIS_Admin_Exporters Class.
 *
 * @version 1.0.0
 */
class WC_BIS_Admin_Exporters
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
     */
    public function download_export_file()
    {
    }
    /**
     * AJAX callback for doing the actual export to the CSV file.
     */
    public function bis_do_ajax_notifications_export()
    {
    }
}
/**
 * Setup BIS menus in WP admin.
 *
 * @version 3.3.4
 */
class WC_BIS_Admin_Menus
{
    /**
     * The CSS classes used to hide the submenu items in navigation.
     *
     * @var string
     */
    protected static $HIDE_CSS_CLASS = 'hide-if-js';
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
     * Configure back in stock tabs.
     *
     * @param  array $pages
     * @return array
     */
    public static function wc_admin_navigation_page_tab_sections($pages)
    {
    }
    /**
     * Configure back in stock page sections.
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
     * @since 1.6.4
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
    public static function wc_admin_connect_bis_pages()
    {
    }
    /**
     * Renders tabs on our custom post types pages.
     *
     * @see includes/admin/views templates.
     * @internal
     */
    public static function render_tabs()
    {
    }
    /**
     * Returns the current admin tab.
     *
     * @param  string $current_tab (Optional)
     * @return string
     */
    public static function get_current_tab($current_tab = \false)
    {
    }
    /**
     * Add menu items.
     */
    public static function add_menu()
    {
    }
    /**
     * Render "Dashboard" page.
     */
    public static function dashboard_page()
    {
    }
    /**
     * Render "Back In Stock" page.
     */
    public static function backinstock_page()
    {
    }
    /**
     * Init admin page. Setups the `save` feature and adds messages.
     */
    public static function backinstock_page_init()
    {
    }
    /**
     * Register the "per page" Screen Option on the Notifications list table.
     *
     * Only added on the list view, not on the create/edit notification sections.
     *
     * @since 3.3.4
     *
     * @return void
     */
    public static function add_notifications_screen_options()
    {
    }
    /**
     * Register the "per page" Screen Option on the Activity list table.
     *
     * @since 3.3.4
     *
     * @return void
     */
    public static function add_activity_screen_options()
    {
    }
    /**
     * Save the "per page" Screen Option values.
     *
     * @since 3.3.4
     *
     * @param  mixed  $status Screen option value. Default false to skip.
     * @param  string $option The option name.
     * @param  int    $value  The number of rows to use.
     * @return mixed
     */
    public static function set_screen_option($status, $option, $value)
    {
    }
    /**
     * Render "Activity" page.
     */
    public static function activity_page()
    {
    }
    /**
     * Exclude menu items from WooCommerce menu migration.
     *
     * @since  1.0.9
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
     * @since 1.6.3
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
     * @since 1.6.3
     *
     * @param int    $index The position of a submenu item in the submenu array.
     * @param string $parent_slug The parent slug.
     * @param array  $item The submenu item.
     */
    protected static function hide_submenu_element($index, $parent_slug, $item)
    {
    }
}
/**
 * Admin notices handling.
 *
 * @class    WC_BIS_Admin_Notices
 * @version  3.3.3
 */
class WC_BIS_Admin_Notices
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
    private static $maintenance_notice_types = array('update' => 'update_notice', 'welcome' => 'welcome_notice', 'loopback' => 'loopback_notice', 'queue' => 'queue_notice');
    /**
     * Constructor.
     */
    public static function init()
    {
    }
    /**
     * Add a notice/error.
     *
     * @since 1.7.0 Added the args.actions parameter.
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
     * @param  string $context
     * @return bool
     */
    private static function unique_notice_exists($context)
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
     * @param  string $text
     * @param  mixed  $args
     */
    public static function add_dismissible_notice($text, $args)
    {
    }
    /**
     * Remove a dismissible notice.
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
     */
    public static function welcome_notice()
    {
    }
    /**
     * Run 'loopback' test and display notice on failure.
     * Rescheduled with every plugin update - see 'WC_BIS_Install::install'.
     */
    public static function loopback_notice()
    {
    }
    /**
     * Check if there are pending deliveries every 24 hours.
     * Rescheduled with every plugin update - see 'WC_BIS_Install::install'.
     *
     * @since  1.0.1
     */
    public static function queue_notice()
    {
    }
    /**
     * Dismisses a notice. Dismissible maintenance notices cannot be dismissed forever.
     *
     * @param  string $notice
     */
    public static function dismiss_notice($notice)
    {
    }
}
/**
 * WC_BIS_Admin_Notifications_Page Class.
 *
 * @version 1.6.5
 */
class WC_BIS_Admin_Notifications_Page
{
    /**
     * Page home URL.
     *
     * @const PAGE_URL
     */
    const PAGE_URL = 'admin.php?page=bis_notifications';
    public static function init()
    {
    }
    /**
     * Render page.
     */
    public static function output()
    {
    }
    /**
     * Save.
     */
    public static function process()
    {
    }
    /**
     * Delete notification.
     */
    public static function delete()
    {
    }
    /**
     * Render createe page.
     */
    public static function create_output()
    {
    }
    /**
     * Render edit page.
     */
    public static function edit_output()
    {
    }
    /**
     * Handle notification activation.
     *
     * @param  WC_BIS_Notification_Data $notification
     * @param  array                    $update_args
     * @return void
     */
    public static function handle_reactivation($notification, &$update_args)
    {
    }
    /**
     * Handle notification deactivation.
     *
     * @param  WC_BIS_Notification_Data $notification
     * @param  array                    $update_args
     * @return void
     */
    public static function handle_deactivation($notification, &$update_args)
    {
    }
    /**
     * JS template of modal for exporting notifications.
     *
     * @return void
     */
    public static function add_js_template()
    {
    }
}
/**
 * Admin Class.
 *
 * Loads admin scripts, includes admin classes and adds admin hooks.
 *
 * @class    WC_BIS_Admin
 * @version  3.3.5
 */
class WC_BIS_Admin
{
    /**
     * Bundled selectSW library version.
     *
     * @var string
     */
    private static $bundled_selectsw_version = '1.2.3';
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
    protected static function includes()
    {
    }
    /**
     * Register own version of select2 library.
     *
     * @return void
     */
    public static function maybe_register_selectsw()
    {
    }
    /**
     * Load own version of select2 library.
     *
     * @return void
     */
    public static function maybe_load_selectsw()
    {
    }
    /**
     * Display notice when selectSW library is unsupported.
     *
     * @return void
     */
    public static function maybe_display_selectsw_notice()
    {
    }
    /**
     * Whether to load own version of select2 library or not.
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
     * Add 'Stock Notifications' tab to WooCommerce Settings tabs.
     *
     * @param  array $settings
     * @return array $settings
     */
    public static function add_settings_page($settings)
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
     * Add PB debug data in the system status.
     *
     * @version 3.3.5
     * @return void
     */
    public static function render_system_status_items()
    {
    }
    /**
     * Add screen ids.
     *
     * @return void
     */
    public static function add_wc_screens($screens)
    {
    }
    /**
     * Inject custom notices into variation's metabox.
     *
     * @param  bool $show_invalid_variations_notice
     * @return bool
     */
    public static function inject_custom_notices($show_invalid_variations_notice)
    {
    }
    /**
     * Setting to allow admins disabling bis on product level.
     *
     * @since  1.2.0
     *
     * @return void
     */
    public static function add_disable_bis_checkbox()
    {
    }
    /**
     * Save product settings meta.
     *
     * @since  1.2.0
     *
     * @param  WC_Product $product
     * @return void
     */
    public static function process_product_object($product)
    {
    }
    /**
     * Add a notice if there are active notifications and the registration form is disabled or the product is unpublished.
     *
     * @since  1.2.0
     *
     * @return void
     */
    public static function maybe_add_active_notifications_notice()
    {
    }
    /**
     * Handle bulk deactivation in admin context and refresh the page to reveal notice.
     *
     * @since  1.2.0
     *
     * @return void
     */
    public static function process_bulk_admin_deactivate()
    {
    }
    /**
     * Bulk deactivate notifications.
     *
     * @since  1.7.0
     *
     * @param  $product_id  integer
     * @return bool
     */
    public static function handle_bulk_admin_deactivation($product_id)
    {
    }
    /**
     * Append BIS guest (email-only) customers to WooCommerce customer search results.
     *
     * Hooks into 'woocommerce_json_search_found_customers' so that customers who signed up
     * via the BIS form but have no WP account appear in the Activity view customer filter.
     *
     * Scoped to the Activity page only. The filter fires globally on every WC customer
     * search AJAX call, but only the Activity list table resolves email values correctly
     * (via is_email() + user_email query arg). The Notifications list table and the
     * Create Notification page currently use absint() on the dropdown value, so injecting
     * email strings there would silently match user_id=0 (all guests) instead of the
     * specific email. To extend this to Notifications, add is_email() handling in
     * WC_BIS_Admin_List_Table_Notifications::prepare_items() and display_customer_dropdown(),
     * then widen the referer check below.
     *
     * @param  array $found_customers  Found customers keyed by user ID or email.
     * @return array
     *
     * @version  3.3.4
     */
    public static function add_bis_guests_to_customer_search($found_customers)
    {
    }
}
/**
 * WC_BIS_Notification_CSV_Exporter Class.
 *
 * @version 1.7.1
 */
class WC_BIS_Notification_CSV_Exporter extends \WC_CSV_Batch_Exporter
{
    /**
     * Type of export used in filter names.
     *
     * @var string
     */
    protected $export_type = 'bis_notifications';
    /**
     * Should meta be exported?
     *
     * @var boolean
     */
    protected $enable_meta_export = \false;
    /**
     * Query filters.
     *
     * @var boolean
     */
    protected $filters = \false;
    /**
     * Constructor.
     */
    public function __construct()
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
     */
    public function enable_meta_export($enable_meta_export)
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
     * Return an array of columns to export.
     *
     * @return array
     */
    public function get_default_column_names()
    {
    }
    /**
     * Prepare data for export.
     */
    public function prepare_data_to_export()
    {
    }
    /**
     * Take a notification and generate row data from it for export.
     *
     * @param WC_BIS_Notification_Data $notification WC_BIS_Notification_Data object.
     *
     * @return array
     */
    protected function generate_row_data($notification)
    {
    }
    /**
     * Export meta data.
     *
     * @param WC_BIS_Notification_Data $notification Notification being exported.
     * @param array                    $row Row data.
     */
    protected function prepare_meta_for_export($notification, &$row)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Columns.                                         */
    /*---------------------------------------------------*/
    /**
     * Get product title.
     *
     * @param  WC_BIS_Notification_Data $notification Notification being exported.
     * @return string
     */
    protected function get_column_value_product_title($notification)
    {
    }
    /**
     * Get product name.
     *
     * @param  WC_BIS_Notification_Data $notification Notification being exported.
     * @return string
     */
    protected function get_column_value_product_name($notification)
    {
    }
    /**
     * Get product SKU.
     *
     * @param  WC_BIS_Notification_Data $notification Notification being exported.
     * @return string
     */
    protected function get_column_value_product_sku($notification)
    {
    }
    /**
     * Get user firstname.
     *
     * @param  WC_BIS_Notification_Data $notification Notification being exported.
     * @return string
     */
    protected function get_column_value_user_firstname($notification)
    {
    }
    /**
     * Get user lastname.
     *
     * @param  WC_BIS_Notification_Data $notification Notification being exported.
     * @return string
     */
    protected function get_column_value_user_lastname($notification)
    {
    }
    /**
     * Get date created.
     *
     * @param  WC_BIS_Notification_Data $notification Notification being exported.
     * @return string
     */
    protected function get_column_value_create_date($notification)
    {
    }
    /**
     * Get date subscribed.
     *
     * @param  WC_BIS_Notification_Data $notification Notification being exported.
     * @return string
     */
    protected function get_column_value_subscribe_date($notification)
    {
    }
    /**
     * Get last notified date.
     *
     * @param  WC_BIS_Notification_Data $notification Notification being exported.
     * @return string
     */
    protected function get_column_value_last_notified_date($notification)
    {
    }
    /**
     * Get active status column.
     *
     * @param  WC_BIS_Notification_Data $notification Notification being exported.
     * @return string
     */
    protected function get_column_value_is_active($notification)
    {
    }
}
/**
 * Adds a custom deployments list table.
 *
 * @class    WC_BIS_Activity_List_Table
 * @version  3.3.4
 */
class WC_BIS_Activity_List_Table extends \WP_List_Table
{
    /**
     * Page home URL.
     *
     * @const PAGE_URL
     */
    const PAGE_URL = 'admin.php?page=bis_activity';
    /**
     * Total view records.
     *
     * @var int
     */
    private $total_items = 0;
    /**
     * Specify Notification to show activity (Defaults to all).
     *
     * @var int
     */
    private $notification;
    /**
     * Constructor
     */
    public function __construct($notification = 0)
    {
    }
    /**
     * This is a default column renderer
     *
     * @param $item - row (key, value array)
     * @param $column_name - string (key)
     * @return string
     */
    public function column_default($item, $column_name)
    {
    }
    /**
     * Handles the title column output.
     *
     * @param array $item
     */
    public function column_notification_id($item)
    {
    }
    /**
     * Handles the user column output.
     *
     * @param array $item
     */
    public function column_user($item)
    {
    }
    /**
     * Handles the product column output.
     *
     * @param array $item
     */
    public function column_product($item)
    {
    }
    /**
     * Handles the type column output.
     *
     * @param array $item
     */
    public function column_type($item)
    {
    }
    /**
     * Handles the date column output.
     *
     * @param array $item
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
 * Adds a custom Notifications list table.
 *
 * @class    WC_BIS_Notifications_List_Table
 * @version  3.3.4
 */
class WC_BIS_Notifications_List_Table extends \WP_List_Table
{
    /**
     * Page home URL.
     *
     * @const PAGE_URL
     */
    const PAGE_URL = 'admin.php?page=bis_notifications';
    /**
     * Total view records.
     *
     * @var int
     */
    public $total_items = 0;
    /**
     * Total active records.
     *
     * @var int
     */
    public $total_active_items = 0;
    /**
     * Total inactive records.
     *
     * @var int
     */
    public $total_inactive_items = 0;
    /**
     * Total queued records.
     *
     * @var int
     */
    public $total_queued_items = 0;
    /**
     * Are there any notifications in the DB?.
     *
     * @var int
     */
    public $bis_has_items = \false;
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * This is a default column renderer
     *
     * @param $notification - row (key, value array)
     * @param $column_name - string (key)
     * @return string
     */
    public function column_default($notification, $column_name)
    {
    }
    /**
     * Handles the checkbox column output.
     *
     * @param array $notification
     */
    public function column_cb($notification)
    {
    }
    /**
     * Handles the title column output.
     *
     * @param array $notification
     */
    public function column_id($notification)
    {
    }
    /**
     * Handles the status column output.
     *
     * @param array $notification
     */
    public function column_status($notification)
    {
    }
    /**
     * Handles the redeemed user column output.
     *
     * @param array $notification
     */
    public function column_user($notification)
    {
    }
    /**
     * Handles the product column output.
     *
     * @param array $notification
     */
    public function column_product($notification)
    {
    }
    /**
     * Handles the product SKU output.
     *
     * @param array $notification
     */
    public function column_sku($notification)
    {
    }
    /**
     * Handles the notification date column output.
     *
     * @param array $notification
     */
    public function column_date_subscribed($notification)
    {
    }
    /**
     * Handles the waiting since column output.
     *
     * @param array $notification
     */
    public function column_waiting_since($notification)
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
     * @return array
     */
    protected function get_bulk_actions()
    {
    }
    /**
     * Process bulk actions.
     *
     * @version 3.3.4
     * @return void
     */
    private function process_bulk_action()
    {
    }
    /**
     * Process bulk actions.
     *
     * @since 1.2.0
     * @version 3.3.4
     *
     * @return void
     */
    private function process_clear_queue_action()
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
     * @return array
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
     * Display product filter.
     *
     * @return void
     */
    protected function display_product_dropdown()
    {
    }
    /**
     * Display customer filter.
     *
     * @return void
     */
    protected function display_customer_dropdown()
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
 * WooCommerce Back In Stock Notifications Settings.
 *
 * @class    WC_BIS_Settings
 * @version  3.0.0
 */
class WC_BIS_Settings extends \WC_Settings_Page
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
     * Add warning notice before displaying content.
     */
    public function output()
    {
    }
}
/**
 * Account class.
 *
 * @class    WC_BIS_Account
 * @version  3.3.4
 */
class WC_BIS_Account
{
    /**
     * Cache query vars locally to avoid multiple get_option calls.
     *
     * @since 1.4.0
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
     * @since 1.4.0
     */
    public function init_query_vars()
    {
    }
    /**
     * Render page html.
     *
     * @return void
     */
    public function render_page($current_page)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Action handlers.                                 */
    /*---------------------------------------------------*/
    /**
     * Process registration.
     *
     * @return void
     */
    public function process_registration()
    {
    }
    /**
     * Signup.
     *
     * Handles the signing up session based on the arguments specified.
     * Creates a new notification or reactivates an existing one, based on the "user + product" unique footprint.
     *
     * @since 1.2.0
     *
     * @throws Exception
     *
     * @param  array $args        Notification args.
     * @param  array $attributes  Variation attributes in a 'key=>value' format.
     * @return WC_BIS_Notification_Data|false
     */
    public function signup($args, $attributes = array())
    {
    }
    /**
     * Process data when re-activate.
     *
     * @return void
     */
    public function process_reactivate()
    {
    }
    /**
     * Process data when deactivating.
     *
     * @return void
     */
    public function process_deactivate()
    {
    }
    /**
     * Process data when verifying.
     *
     * @since 1.2.0
     *
     * @return void
     */
    public function process_verify()
    {
    }
    /**
     * Process data when unsubscribing.
     *
     * @version 3.3.4
     *
     * @return void
     */
    public function process_unsubscribe()
    {
    }
    /**
     * Process resend verification email.
     *
     * @since 1.2.0
     *
     * @return void
     */
    public function process_resend_verification()
    {
    }
    /**
     * Process canceling a pending verification request.
     *
     * @since 1.2.0
     *
     * @return void
     */
    public function process_cancel_pending_verification()
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Account Page.                                    */
    /*---------------------------------------------------*/
    /**
     * Add navigation item.
     *
     * @param  array $items
     * @return array
     */
    public function add_navigation_item($items)
    {
    }
    /**
     * Add endpoint.
     *
     * @param  array $settings
     * @return array
     */
    public function add_endpoint_setting($settings)
    {
    }
    /**
     * Get the endpoint page url.
     *
     * @return string
     */
    public function get_endpoint_url()
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
    /*
    	---------------------------------------------------*/
    /*
    		User data functions.                             */
    /*---------------------------------------------------*/
    /**
     * Process data when re-activate.
     *
     * @param  string $email
     * @return void
     */
    public function create_customer($email)
    {
    }
    /**
     * Migrating existing notifications when user is added.
     *
     * @param  int $user_id
     * @return void
     */
    public function migrate_new_user_data($user_id)
    {
    }
    /**
     * Migrating existing notifications when a user changes his email.
     *
     * @param  int   $user_id
     * @param  array $old_user
     * @return void
     */
    public function migrate_updated_user_data($user_id, $old_user)
    {
    }
}
/**
 * Front-end AJAX filters.
 *
 * @class    WC_BIS_Ajax
 * @version  1.0.0
 */
class WC_BIS_Ajax
{
    /**
     * Hook in.
     */
    public static function init()
    {
    }
}
/**
 * Abstract WC_BIS_Async_Request class.
 */
abstract class WC_BIS_Async_Request
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
 * Abstract WC_BIS_Background_Process class.
 */
abstract class WC_BIS_Background_Process extends \WC_BIS_Async_Request
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
 * @class    WC_BIS_Background_Updater
 * @version  2.0.0
 */
class WC_BIS_Background_Updater extends \WC_BIS_Background_Process
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
 * DB updating and other stuff via WP-CLI.
 *
 * @class    WC_BIS_CLI
 * @version  1.0.0
 */
class WC_BIS_CLI
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
 * Emails manager.
 *
 * @class    WC_BIS_Emails
 * @version  3.3.1
 */
class WC_BIS_Emails
{
    /**
     * List of all core subscription email classes.
     *
     * @var array
     */
    public static $email_classes = array('WC_BIS_Email_Notification_Received' => 'emails/class-wc-bis-email-notification-received.php', 'WC_BIS_Email_Notification_Confirm' => 'emails/class-wc-bis-email-notification-confirm.php', 'WC_BIS_Email_Notification_Verify' => 'emails/class-wc-bis-email-notification-verify.php');
    /**
     * List of all core subscription email IDs.
     *
     * @var array
     */
    public static $email_ids = array('bis_notification_received', 'bis_notification_confirm', 'bis_notification_verify');
    /**
     * Constructor.
     */
    public function __construct()
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
     * Restore customer data from notification's metadata, if applicable.
     *
     * @since 1.3.2
     *
     * @param  WC_Notification_Data $notification
     * @return void
     */
    public function maybe_restore_customer_data($notification)
    {
    }
    /**
     * Registers custom emails classes.
     *
     * @param  array $emails Array of email classes.
     * @return array
     */
    public function email_classes($emails)
    {
    }
    /**
     * Prints in the email.
     *
     * @param  WC_BIS_Notification_Data $notification
     * @param  WC_Email                 $email
     * @return void
     */
    public function notification_email_html($notification, $email = \null)
    {
    }
    /**
     * Prints in the email.
     *
     * @param  WC_BIS_Notification_Data $notification
     * @param  WC_Email                 $email
     * @return void
     */
    public function confirm_notification_email_html($notification, $email = \null)
    {
    }
    /**
     * Prints in the email.
     *
     * @since 1.2.0
     *
     * @param  WC_BIS_Notification_Data $notification
     * @param  WC_Email                 $email
     * @return void
     */
    public function verify_notification_email_html($notification, $email = \null)
    {
    }
    /**
     * Prints CSS in the emails.
     *
     * @param  string   $css
     * @param  WC_Email $email (Optional)
     * @return void
     */
    public function add_stylesheets($css, $email = \null)
    {
    }
    /**
     * Register intro_content email fields to be watched by WooCommerce's live email preview.
     *
     * @param array  $setting_ids The email content setting IDs.
     * @param string $email_id The email ID.
     * @return array
     */
    public function add_intro_content_to_preview_settings($setting_ids, $email_id)
    {
    }
}
/**
 * Helper Functions.
 *
 * @class    WC_BIS_Helpers
 * @version  1.2.0
 */
class WC_BIS_Helpers
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
     * @since  5.7.4
     *
     * @param  string $key
     * @param  string $group_key
     * @param  mixed  $value
     * @return void
     */
    public static function cache_invalidate($group_key = '')
    {
    }
}
/**
 * Handles installation and updating tasks.
 *
 * @class    WC_BIS_Install
 * @version  3.3.5
 */
class WC_BIS_Install
{
    /**
     * DB updates and callbacks that need to be run per version.
     *
     * @var array
     */
    private static $db_updates = array('1.1.0' => array('wc_bis_update_110_main', 'wc_bis_update_110_db_version'));
    /**
     * Background update class.
     *
     * @var WC_BIS_Background_Updater
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
     * Whether install() ran in this request.
     *
     * @var boolean
     */
    private static $is_install_request;
    /**
     * Hook in.
     */
    public static function init()
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
     * @return boolean
     */
    private static function can_install()
    {
    }
    /**
     * Check version and run the installer if necessary.
     */
    public static function maybe_install()
    {
    }
    /**
     * Is currently installing?
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
     */
    public static function maybe_update()
    {
    }
    /**
     * If the DB version is out-of-date, a DB update must be in progress: define a 'WC_BIS_UPDATING' constant.
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
     */
    private static function create_tables()
    {
    }
    /**
     * Schedule cron events.
     */
    public static function create_events()
    {
    }
    /**
     * Get table schema.
     *
     * @since 1.0.0
     * @since 3.0.0 Added  the `idx_product_active_queue` index on the `woocommerce_bis_notifications` table.
     *
     * @return string
     */
    private static function get_schema()
    {
    }
    /**
     * Update WC BIS version to current.
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
     * @return boolean
     */
    public static function auto_update_enabled()
    {
    }
    /**
     * Trigger DB update.
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
     */
    public static function update_db_version($version = \null)
    {
    }
    /**
     * Get list of DB update callbacks.
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
 * Notice handling.
 *
 * @class    WC_BIS_Notices
 * @version  2.0.0
 */
class WC_BIS_Notices
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
     *
     * @return void
     */
    public static function save_notice_options()
    {
    }
    /**
     * Updates data used to display notices.
     *
     * @return void
     */
    public static function update_notice_data()
    {
    }
    /**
     * Updates data for the 'queue' notice.
     *
     * @since  1.0.1
     *
     * @param bool $force (Optional)
     */
    private static function update_queue_notice_data($force = \false)
    {
    }
    /**
     * Searches for overdue delivery tasks and returns true if any are found.
     *
     * @since  1.0.1
     *
     * @param  int $time_overdue
     * @return boolean
     */
    public static function has_overdue_deliveries($time_overdue = \DAY_IN_SECONDS)
    {
    }
}
/**
 * Back In Stock Product Controller.
 *
 * @class    WC_BIS_Product
 * @version  3.3.5
 */
class WC_BIS_Product
{
    /**
     * Init.
     */
    public function __construct()
    {
    }
    /**
     * Handles the form submission.
     *
     * @return void
     */
    public function handle_form_submit()
    {
    }
    /**
     * Display the form on variations.
     *
     * @param  string $html
     * @param  mixed  $product
     * @return string
     */
    public function handle_display_form_variation($html, $product)
    {
    }
    /**
     * Handle BIS form.
     *
     * @return void
     */
    public function handle_display_form()
    {
    }
    /**
     * Display the form.
     *
     * @param  mixed $product
     * @return void
     */
    public function display_form($product)
    {
    }
    /**
     * Whether a product is eligible for stock notification sign-ups.
     *
     * @since  1.2.0
     *
     * @param  mixed  $product
     * @param  string $context singe or catalog.
     * @return void
     */
    public function is_eligible($product, $context = 'single')
    {
    }
    /**
     * Check if notification sign-ups are disabled for this product.
     *
     * @since  1.2.0
     *
     * @param  WC_Product $product
     * @return bool
     */
    public function is_disabled($product)
    {
    }
    /**
     * If product is available for back in stock notifications, display a link during the loop to inform users they can sign-up to BIS.
     *
     * @since  1.2.0
     *
     * @param  string     $link
     * @param  WC_Product $product
     * @return string
     */
    public function loop_add_to_cart_link_signup_prompt($link, $product)
    {
    }
    /**
     * Returns the actual HTML markup to display the signup prompt.
     *
     * @since  1.2.0
     *
     * @param  mixed $product
     * @return void
     */
    public function display_signup_prompt($product)
    {
    }
    /**
     * Display a notice after clicking on the loop link, informing users that they can signup for bis notifications.
     *
     * @since  1.2.0
     *
     * @return void
     */
    public function handle_signup_prompt_notice()
    {
    }
}
/**
 * REST API Endpoints.
 * Similar to Automattic\WooCommerce\RestApi\Server.php.
 *
 * @class    WC_BIS_REST_API
 * @version  1.7.0
 */
class WC_BIS_REST_API
{
    /**
     * Load required files, setups hooks and rest api fields.
     */
    public function __construct()
    {
    }
    /**
     * Load REST API related files.
     */
    private function includes()
    {
    }
    /**
     * Sets up hooks.
     */
    private function register_hooks()
    {
    }
    /**
     * Register Back In Stock Notifications REST namespace.
     *
     * @param  array $namespaces List of registered namespaces.
     * @return array
     */
    public function register_rest_namespaces($namespaces)
    {
    }
}
/**
 * Sync stock Queue Controller Class.
 *
 * @class    WC_BIS_Sync_Tasks
 * @version  3.0.0
 */
class WC_BIS_Sync_Tasks
{
    /**
     * Setup.
     */
    public static function init()
    {
    }
    /*****************************************
     * Instock tasks.
     ****************************************/
    /**
     * Prepare notifications, mark queue status.
     *
     * @param  array $product_ids
     * @param  bool  $force (Optional)
     * @return void
     */
    public static function handle_instock_products($product_ids, $force = \false)
    {
    }
    /**
     * Handle spam notices.
     *
     * @since 3.0.0
     *
     * @param  array $product_ids Array of product ids.
     * @param  int   $spam_count  Number of spam notifications.
     * @return void
     */
    private static function handle_spam_notices(array $product_ids, int $spam_count)
    {
    }
    /**
     * Bypass throttle and force queue notifications.
     *
     * @return void
     */
    public static function force_queue_notifications()
    {
    }
    /*****************************************
     * Notification queue.
     ****************************************/
    /**
     * Trigger the notification queue.
     *
     * @param  array $product_ids
     * @param  int   $last_known_count
     * @return void
     */
    public static function start_notifications_queue($product_ids, $last_known_count)
    {
    }
    /**
     * Process single batch of notifications for given product.
     *
     * @param  array $args Array of arguments.
     * @return void
     */
    public static function async_process_notifications_batch($args)
    {
    }
    /*****************************************
     * Outofstock tasks.
     ****************************************/
    /**
     * Hande outofstock product notifications.
     *
     * @param  array $product_ids
     * @return void
     */
    public static function handle_outofstock_products($product_ids)
    {
    }
    /*****************************************
     * Misc.
     ****************************************/
    /**
     * Number of notifications per batch.
     *
     * @return int
     */
    protected static function get_batch_size()
    {
    }
    /**
     * Deletes all notifications associated with the deleted product.
     *
     * @since 1.1.2
     *
     * @param  int    $post_id
     * @param  object $post
     */
    public static function handle_product_delete($post_id)
    {
    }
    /**
     * Run daily for maintenance.
     *
     * @since 1.2.0
     *
     * @return void
     */
    public static function do_wc_bis_daily()
    {
    }
}
/**
 * Sync Stock Controller.
 *
 * @class    WC_BIS_Sync
 * @version  3.0.0
 */
class WC_BIS_Sync
{
    /**
     * Mark sync.
     *
     * @var boolean
     */
    private $sync_needed = \false;
    /**
     * Product ids that need syncing at shutdown.
     *
     * @var array
     */
    private $queue = array();
    /**
     * Init.
     */
    public function __construct()
    {
    }
    /**
     * Sync stock.
     *
     * @return void
     */
    public function sync()
    {
    }
    /**
     * Handle stock status changes.
     *
     * @param  mixed  $product_id
     * @param  string $stock_status
     * @param  mixed  $product (Optional)
     * @return void
     */
    public function product_stock_status_changed($product_id, $stock_status, $product = \null)
    {
    }
    /**
     * Handle stock changes.
     *
     * @param  WC_Product $product
     * @return void
     */
    public function product_stock_changed($product)
    {
    }
    /**
     * Add a product id to the sync queue.
     *
     * @param  mixed  $product
     * @param  string $stock_status
     * @return bool
     */
    public function add_product($product, $stock_status)
    {
    }
    /**
     * Add a product id to the sync queue.
     *
     * @param  int    $product_id
     * @param  string $group
     * @return bool
     */
    public function add_to_queue($product_id, $group)
    {
    }
    /**
     * Validate product to be synced.
     *
     * @param  WC_Product $product
     * @param  string     $context
     * @return bool
     */
    public function validate_product($product, $context = '')
    {
    }
}
/**
 * Display functions and filters.
 *
 * @class    WC_BIS_Templates
 * @version  3.2.1
 */
class WC_BIS_Templates
{
    /**
     * Should dequeue scripts status.
     *
     * @var array
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
     * Dequeue script when not needed.
     *
     * @return void
     */
    public function dequeue_product_scripts()
    {
    }
}
/**
 * Allows DB updates via WP-CLI.
 *
 * @class    WC_BIS_CLI_Update
 * @version  3.3.5
 */
class WC_BIS_CLI_Update
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
 * @class    WC_BIS_Compatibility
 * @version  3.0.0
 */
class WC_BIS_Compatibility
{
    /**
     * Min required plugin versions to check.
     *
     * @var array
     */
    private static $required = array('wc_bundles' => '6.5.1');
    /**
     * Setup compatibility class.
     */
    public static function init()
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
     * @since 1.4.1
     */
    public static function declare_hpos_compatibility()
    {
    }
    /**
     * Declare cart/checkout Blocks compatibility.
     *
     * @since 1.6.5
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
}
/**
 * Functions related to core back-compatibility.
 *
 * @class    WC_BIS_Core_Compatibility
 * @version  3.3.0
 */
class WC_BIS_Core_Compatibility
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
     * @var array
     */
    private static $is_wp_version_gt = array();
    /**
     * Cache 'gte' comparison results for WP version.
     *
     * @var array
     */
    private static $is_wp_version_gte = array();
    /**
     * Cache wc admin status result.
     *
     * @var bool
     */
    private static $is_wc_admin_enabled = \null;
    /**
     * Initialization and hooks.
     */
    public static function init()
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
}
/**
 * WooCommerce Product Bundles compatibility.
 *
 * @version  1.0.0
 */
class WC_BIS_Bundles_Compatibility
{
    /**
     * Initialize integration.
     */
    public static function init()
    {
    }
    /**
     * Handle form display for Bundles.
     *
     * @return void
     */
    public static function handle_display_form()
    {
    }
    /**
     * Reactivate notification.
     *
     * @return void
     */
    public static function notification_reactivate($notification)
    {
    }
    /**
     * Handle reactivation args.
     *
     * @param  array                     g $args
     * @param  WC_BIS_Notification_Data    $notification
     * @return array
     */
    public static function handle_reactivation_args($args, $notification)
    {
    }
    /**
     * Include Bundles in supported product types.
     *
     * @param  array $types
     * @return array
     */
    public static function add_bundle_product_type($types)
    {
    }
    /**
     * Bypass native BIS sync action for bundle types.
     *
     * @param  bool       $valid
     * @param  WC_Product $product
     * @return bool
     */
    public static function bypass_native_sync($valid, $product)
    {
    }
    /**
     * Sync Product Bundle's stock change.
     *
     * @param  WC_Product $product
     * @param  array      $updated_props
     * @return void
     */
    public static function bundle_stock_changed($product, $updated_props = array())
    {
    }
    /**
     * Add a Bundle to the sync queue.
     *
     * @param  mixed  $product
     * @param  string $stock_status
     * @return bool
     */
    public static function add_bundle($product, $stock_status)
    {
    }
}
/**
 * WooCommerce Pre-Orders compatibility.
 *
 * @version  1.0.4
 */
class WC_BIS_Pre_Orders_Compatibility
{
    /**
     * Initialize integration.
     */
    public static function init()
    {
    }
    /**
     * Replace email subject.
     */
    public static function replace_email_subject($subject, $notification, $email)
    {
    }
    /**
     * Replace email heading.
     */
    public static function replace_email_heading($heading, $notification, $email)
    {
    }
    /**
     * Replace email intro content.
     */
    public static function replace_email_intro_content($intro_content, $notification, $email)
    {
    }
    /**
     * Replace email action button.
     */
    public static function replace_email_action_button_text($text, $notification)
    {
    }
}
/**
 * WooCommerce Subscriptions compatibility.
 *
 * @version  1.2.0
 */
class WC_BIS_WCS_Compatibility
{
    /**
     * Initialize integration.
     */
    public static function init()
    {
    }
    /**
     * Handle the BIS form for simple subscriptions.
     *
     * @param  string $availability_html
     * @return void
     */
    public static function handle_display_form($availability_html)
    {
    }
    /**
     * Include Subscription in supported product types.
     *
     * @param  array $types
     * @return array
     */
    public static function add_subscriptions_product_type($types)
    {
    }
}
/**
 * Activity Data model class.
 *
 * @class    WC_BIS_Activity_Data
 * @version  1.0.1
 */
class WC_BIS_Activity_Data
{
    /**
     * Data array, with defaults.
     *
     * @var array
     */
    protected $data = array('id' => 0, 'type' => '', 'user_id' => 0, 'user_email' => '', 'product_id' => 0, 'notification_id' => 0, 'object_id' => 0, 'amount' => 0, 'date' => 0, 'note' => '');
    /**
     * Constructor.
     *
     * @param  int|object|array $item  ID to load from the DB (optional) or already queried data.
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
     * Get product id.
     *
     * @return int
     */
    public function get_product_id()
    {
    }
    /**
     * Get notification id.
     *
     * @return int
     */
    public function get_notification_id()
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
     */
    public function set_all($data)
    {
    }
    /**
     * Set Activity ID.
     *
     * @param  int
     */
    public function set_id($value)
    {
    }
    /**
     * Set product ID.
     *
     * @param  int
     */
    public function set_product_id($value)
    {
    }
    /**
     * Set notification ID.
     *
     * @param  int
     */
    public function set_notification_id($value)
    {
    }
    /**
     * Set code.
     *
     * @param  string
     * @return void
     */
    public function set_type($value)
    {
    }
    /**
     * Set user ID.
     *
     * @param  int
     * @return void
     */
    public function set_user_id($value)
    {
    }
    /**
     * Set user email.
     *
     * @param  string
     * @return void
     */
    public function set_user_email($value)
    {
    }
    /**
     * Set object ID.
     *
     * @param  int
     * @return void
     */
    public function set_object_id($value)
    {
    }
    /**
     * Set date.
     *
     * @param  int
     * @return void
     */
    public function set_date($value)
    {
    }
    /**
     * Set note.
     *
     * @param  string
     * @return void
     */
    public function set_note($value)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		CRUD.                                            */
    /*---------------------------------------------------*/
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
     * Delete data from the database.
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
     * @param  int $activity
     * @return void
     */
    public function read($activity)
    {
    }
    /**
     * Validates before saving for sanity.
     */
    public function validate()
    {
    }
}
/**
 * Notification Data model class.
 *
 * @class    WC_BIS_Notification_Data
 * @version  3.1.0
 */
class WC_BIS_Notification_Data
{
    /**
     * Runtime cache of the product instance.
     *
     * @var null|WC_Product
     */
    protected $product;
    /**
     * Data array, with defaults.
     *
     * @var array
     */
    protected $data = array('id' => 0, 'type' => 'one-time', 'product_id' => 0, 'user_id' => 0, 'user_email' => '', 'create_date' => 0, 'last_notified_date' => 0, 'subscribe_date' => 0, 'is_queued' => 'off', 'is_active' => 'on', 'is_verified' => 'yes');
    /**
     * Stores meta data, defaults included.
     * Meta keys are assumed unique by default. No meta is internal.
     *
     * @var array
     */
    protected $meta_data = array();
    /**
     * Sanitization function to apply to known meta values on the way in - @see sanitize_meta_value().
     *
     * @var array
     */
    protected $meta_data_type_fn = array();
    /**
     * Constructor.
     *
     * @param  int|object|array $item  ID to load from the DB (optional) or already queried data.
     */
    public function __construct($notification = 0)
    {
    }
    /**
     * Change data to JSON format.
     *
     * @return string
     */
    public function __toString()
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
     * Get product ID.
     *
     * @return int
     */
    public function get_product_id()
    {
    }
    /**
     * Get product.
     *
     * @return WC_Product|false
     */
    public function get_product()
    {
    }
    /**
     * Get product link.
     *
     * @return string
     */
    public function get_product_permalink()
    {
    }
    /**
     * Get product name.
     *
     * @return string
     */
    public function get_product_name()
    {
    }
    /**
     * Get product formatted variation list.
     *
     * @param  bool   $flat
     * @param  string $context
     * @return string
     */
    public function get_product_formatted_variation_list($flat = \false, $context = 'view')
    {
    }
    /**
     * Get product formatted name.
     *
     * @return string
     */
    public function get_product_formatted_name()
    {
    }
    /**
     * Get user ID.
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
     * Get create date.
     *
     * @return int
     */
    public function get_create_date()
    {
    }
    /**
     * Get subscribe again date.
     *
     * @return int
     */
    public function get_subscribe_date()
    {
    }
    /**
     * Get last notified date date.
     *
     * @return int
     */
    public function get_last_notified_date()
    {
    }
    /**
     * Get a generated sha256 hash unique for the notification.
     *
     * @return string
     */
    public function get_hash()
    {
    }
    /**
     * Get a verification hash.
     *
     * @since 1.2.0
     *
     * @param  string $code (Optional) If not specified, the code saved in metadata will be used.
     * @return string  SHA-256 Hashed string
     */
    public function get_verification_hash($code = '')
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
     * @param  mixed $value
     * @return boolean
     */
    private function has_meta_value($value)
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
     */
    public function set_all($data)
    {
    }
    /**
     * Set Notification ID.
     *
     * @param  int
     */
    public function set_id($value)
    {
    }
    /**
     * Set active status.
     *
     * @param  string
     * @return void
     */
    public function set_active($value)
    {
    }
    /**
     * Set active status.
     *
     * @param  string
     * @return void
     */
    public function set_queued_status($value)
    {
    }
    /**
     * Set locale.
     *
     * @since 3.0.1
     *
     * @param  string $value Locale code.
     * @return void
     */
    public function set_locale($value)
    {
    }
    /**
     * Set verified status.
     *
     * @since 1.2.0
     *
     * @param  string
     * @return void
     */
    public function set_verified_status($value)
    {
    }
    /**
     * Set type.
     *
     * @param  strings
     * @return void
     */
    public function set_type($value)
    {
    }
    /**
     * Set product ID.
     *
     * @param  int
     * @return void
     */
    public function set_product_id($value)
    {
    }
    /**
     * Set user ID.
     *
     * @param  string
     * @return void
     */
    public function set_user_id($value)
    {
    }
    /**
     * Set user email.
     *
     * @param  string
     * @return void
     */
    public function set_user_email($value)
    {
    }
    /**
     * Set create date.
     *
     * @param  string
     * @return void
     */
    public function set_create_date($value)
    {
    }
    /**
     * Set subscribe again date.
     *
     * @param  string
     * @return void
     */
    public function set_subscribe_date($value)
    {
    }
    /**
     * Set last notified date.
     *
     * @param  string
     * @return void
     */
    public function set_last_notified_date($value)
    {
    }
    /**
     * Set all meta data from array.
     *
     * @param  array $data
     */
    public function set_meta_data($data)
    {
    }
    /**
     * Set Notification Product.
     *
     * @since 3.1.0
     * @param WC_Product $product Product object.
     * @return void
     */
    public function set_product(\WC_Product $product): void
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		CRUD.                                            */
    /*---------------------------------------------------*/
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
     * Delete data from the database.
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
     * @param  int $notification
     * @return void
     */
    public function read($notification)
    {
    }
    /**
     * Validates before saving for sanity.
     */
    public function validate()
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Utilities and actions.                           */
    /*---------------------------------------------------*/
    /**
     * Validates before saving for sanity.
     *
     * @since 1.3.2
     */
    protected function update_customer_data()
    {
    }
    /**
     * Add an event.
     *
     * @param  string $type
     * @param  mixed  $user (Optional)
     * @return bool
     */
    public function add_event($type, $user = \false)
    {
    }
    /**
     * Handle reactivation.
     *
     * @return bool
     */
    public function reactivate()
    {
    }
    /**
     * Handle deactivation.
     *
     * @return bool
     */
    public function deactivate($user = \false)
    {
    }
    /**
     * Setup hash data for handling notification specific secure requests (e.g. Unsubscribe).
     *
     * @since 1.2.0
     *
     * @return void
     */
    private function setup_hash_data()
    {
    }
    /**
     * Setup verification code and hash data used for double opt-in registration.
     *
     * @since 1.2.0
     *
     * @return void
     */
    private function setup_verification_data()
    {
    }
    /**
     * Validates a notification's specific hash. (e.g. Unsubscribe).
     *
     * @since 1.2.0
     *
     * @return bool
     */
    public function validate_hash($hash_to_check)
    {
    }
    /**
     * Validates a given double opt-in verification code and hash.
     *
     * @since 1.2.0
     *
     * @param  string $code           Code string to check.
     * @param  string $hash_to_check  Acts as a public key.
     * @return bool
     */
    public function validate_verification_code($code, $hash_to_check)
    {
    }
    /**
     * Generate verification code and data if needed.
     *
     * @since 1.2.0
     *
     * @return bool
     */
    public function maybe_setup_verification_data()
    {
    }
    /**
     * Invalidates double opt-in verification code.
     *
     * @since 1.2.0
     *
     * @return void
     */
    public function invalidate_verification_data()
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Conditionals.                                    */
    /*---------------------------------------------------*/
    /**
     * Is queued.
     *
     * @return bool
     */
    public function is_queued()
    {
    }
    /**
     * Is sent.
     *
     * @return bool
     */
    public function is_delivered()
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
     * Is verified.
     *
     * @since 1.2.0
     *
     * @return bool
     */
    public function is_verified()
    {
    }
    /**
     * Is pending verification.
     *
     * @since 1.2.0
     *
     * @return bool
     */
    public function is_pending()
    {
    }
    /**
     * Validate verification code.
     *
     * @since 1.2.0
     *
     * @return bool
     */
    public function is_verification_data_valid()
    {
    }
    /**
     * Validates verification expiration.
     *
     * @since 1.2.0
     *
     * @return bool
     */
    public function is_expired()
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Meta methods.                                    */
    /*---------------------------------------------------*/
    /**
     * Get Meta by Key.
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
     * @param  string $key
     * @param  string $value
     */
    public function add_meta($key, $value)
    {
    }
    /**
     * Add meta data.
     *
     * @param  string $key
     * @param  string $value
     */
    public function update_meta($key, $value)
    {
    }
    /**
     * Delete meta data.
     *
     * @param  array $key
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
     * @param  mixed  $meta_value
     * @param  string $meta_key
     */
    private function sanitize_meta_value($meta_value, $meta_key)
    {
    }
}
/**
 * DB API class.
 *
 * @version  3.3.4
 */
class WC_BIS_Activity_DB
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
     *         - 'objects': WC_BIS_Activity_Data objects.
     * }
     *
     * @return array
     */
    public function query($args)
    {
    }
    /**
     * Get a record from the DB.
     *
     * @param  mixed $activity
     * @return false|WC_BIS_Activity_Data
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
     * @param  array                &$args
     * @param  WC_BIS_Activity_Data $activity
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
     * Get distinct guest (user_id = 0) emails matching a search term.
     *
     * @param  string $term  Search term.
     * @return array
     */
    public function get_guest_emails_by_search($term)
    {
    }
    /**
     * Get activity data for given user.
     *
     * @since  1.0.10
     *
     * @param  int $user_id
     * @param  int $limit (Optional)
     * @param  int $offset (Optional)
     * @return array
     */
    public function get_activity_by_user($user_id, $limit = 10, $offset = 0)
    {
    }
    /**
     * Get total activity records for given user.
     *
     * @since  1.0.10
     *
     * @param  int $user_id
     * @return array
     */
    public function get_total_activity_records_by_user($user_id)
    {
    }
}
/**
 * DB API class.
 */
class WC_BIS_DB
{
    /**
     * A reference to the DB Model - @see WC_BIS_Notifications_DB.
     *
     * @var WC_BIS_Notifications_DB
     */
    public $notifications;
    /**
     * A reference to the DB Model - @see WC_BIS_Activity_DB.
     *
     * @var WC_BIS_Activity_DB
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
     * Make WP see 'bis_notification_meta' as a meta type.
     */
    public function notifications_table_fix()
    {
    }
}
/**
 * DB API class.
 *
 * @version  3.0.1
 */
class WC_BIS_Notifications_DB
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
     * Query notifications data from the DB.
     *
     * @param  array $args The query arguments.
     * @return array|int
     */
    public function query($args)
    {
    }
    /**
     * Get a record from the DB.
     *
     * @param  mixed $notification
     * @return false|WC_BIS_Notification_Data
     */
    public function get($notification)
    {
    }
    /**
     * Get a notification from the DB using hash.
     *
     * @param  string $hash
     * @return false|WC_BIS_Notification_Data
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
     * @param  WC_BIS_Notification_Data|int $notification The Notification ID or object.
     * @param  array                        $args         The data to update.
     * @return bool
     *
     * @throws Exception
     */
    public function update($notification, $args)
    {
    }
    /**
     * Validate data.
     *
     * @throws Exception
     *
     * @param  array                    &$args
     * @param  WC_BIS_Notification_Data $notification
     * @return void
     */
    public function validate(&$args, $notification = \false)
    {
    }
    /**
     * Delete a record from the DB.
     *
     * @param  mixed $notification
     * @return void
     */
    public function delete($notification)
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
     * Get most delayed products.
     *
     * @return array
     */
    public function get_delayed_products($limit = 5)
    {
    }
    /**
     * Get most anticipated products.
     *
     * @return array
     */
    public function get_anticipated_products($limit = 5)
    {
    }
    /**
     * Get most anticipated products.
     *
     * @return array
     */
    public function get_most_subscribed_products($start = 0, $limit = 5, $end = 0)
    {
    }
    /**
     * Bulk enqueue notifications.
     *
     * @param  array|int $product_ids The product IDs.
     * @param  bool      $force       The force flag. Whether to override spam protection.
     * @return int
     */
    public function bulk_enqueue_by_product_id($product_ids, $force = \false)
    {
    }
    /**
     * Bulk set queue status.
     *
     * @deprecated 3.0.0
     *
     * @param  array  $notification_ids
     * @param  string $value
     * @return int
     */
    public function bulk_set_queue_status($notification_ids, $value = 'on')
    {
    }
    /**
     * Bulk renew subscribe dates.
     *
     * @deprecated 3.0.0
     *
     * @param  array|int $notification_ids
     * @return int
     */
    public function bulk_renew_subscribe_dates($notification_ids)
    {
    }
    /**
     * Get notifications number per day.
     *
     * @since 3.0.0
     *
     * @param  int    $date_start  Start date as a Unix timestamp.
     * @param  int    $date_end    End date as a Unix timestamp.
     * @param  string $date_column Date column name (e.g., 'create_date', 'subscribe_date', 'last_notified_date').
     * @return array
     */
    public function get_notifications_number_per_day(int $date_start, int $date_end, string $date_column): array
    {
    }
    /**
     * Bulk renew subscribe dates by product id.
     *
     * @since 3.0.0
     *
     * @param  array|int $product_ids The product IDs.
     * @return int
     */
    public function bulk_renew_subscribe_dates_by_product_id($product_ids)
    {
    }
    /**
     * Get subscribed notifications count per product.
     *
     * @since 3.0.0
     *
     * @param  array|int $product_ids   The product IDs.
     * @param  int       $sent_throttle The throttle time in seconds.
     * @return array {
     *    @type int $allowed   The allowed notifications.
     *    @type int $throttled The throttled notifications.
     * }
     */
    public function get_subscribed_notifications_count_per_product($product_ids, $sent_throttle = 0)
    {
    }
}
/**
 * Interface used to signal that an email class has the necessary methods to build a custom preview.
 *
 * @interface WC_BIS_Email_Previewable
 * @version  3.1.0
 */
interface WC_BIS_Email_Previewable
{
    /**
     * Prepares the email based on the notification data.
     *
     * @param WC_BIS_Notification_Data $notification Notification data.
     *
     * @return void
     */
    public function prepare_email(\WC_BIS_Notification_Data $notification): void;
}
/**
 * Notification Confirm email controller.
 *
 * @class    WC_BIS_Email_Notification_Confirm
 * @version  3.2.0
 */
class WC_BIS_Email_Notification_Confirm extends \WC_Email implements \WC_BIS_Email_Previewable
{
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
     * Prepares the email based on the notification data.
     *
     * @since 3.1.0
     * @param WC_BIS_Notification_Data $notification Notification.
     *
     * @return void
     */
    public function prepare_email(\WC_BIS_Notification_Data $notification): void
    {
    }
    /**
     * Trigger the sending of this email.
     *
     * @param WC_BIS_Notification_Data|int $notification
     */
    public function trigger($notification)
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
     * Get default email content.
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
     * Get email content.
     *
     * @return string
     */
    public function get_into_content()
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
     * Setup placeholders.
     *
     * @since  1.3.0
     */
    protected function setup_placeholders()
    {
    }
    /**
     * Set placeholders.
     *
     * @since  1.3.0
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
     * @return void
     */
    public function init_form_fields()
    {
    }
    /**
     * Setup action hooks.
     *
     * @since 1.2.0
     *
     * @return void
     */
    public function setup_hooks()
    {
    }
}
/**
 * Notification Received email controller.
 *
 * @class    WC_BIS_Email_Notification_Received
 * @version  3.2.0
 */
class WC_BIS_Email_Notification_Received extends \WC_Email implements \WC_BIS_Email_Previewable
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Prepares the email based on the notification data.
     *
     * @since 3.1.0
     * @param WC_BIS_Notification_Data $notification Notification.
     *
     * @return void
     */
    public function prepare_email(\WC_BIS_Notification_Data $notification): void
    {
    }
    /**
     * Trigger the sending of this email.
     *
     * @param WC_BIS_Notification_Data|int $notification
     */
    public function trigger($notification)
    {
    }
    /**
     * Switch locale if necessary based on notification meta.
     *
     * @since 3.0.1
     *
     * @param WC_BIS_Notification_Data $notification Notification object.
     */
    private function maybe_switch_locale($notification)
    {
    }
    /**
     * Restore locale if previously switched.
     *
     * @since 3.0.1
     *
     * @param WC_BIS_Notification_Data $notification Notification object.
     */
    private function maybe_restore_locale($notification)
    {
    }
    /**
     * Force trigger the sending of this email.
     *
     * @param WC_BIS_Notification_Data|int $notification
     */
    public function force_trigger($notification)
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
     * Get default email content.
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
    /**
     * Get email content.
     *
     * @return string
     */
    public function get_into_content()
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
     * Setup placeholders.
     *
     * @since  1.3.0
     */
    protected function setup_placeholders()
    {
    }
    /**
     * Set placeholders.
     *
     * @since  1.3.0
     */
    public function set_placeholders_value()
    {
    }
    /**
     * Initialize Settings Form Fields.
     *
     * @return void
     */
    public function init_form_fields()
    {
    }
    /**
     * Setup action hooks.
     *
     * @since 1.2.0
     *
     * @return void
     */
    public function setup_hooks()
    {
    }
}
/**
 * Notification verify double opt-in email controller.
 *
 * @class    WC_BIS_Email_Notification_Verify
 * @version  3.2.0
 */
class WC_BIS_Email_Notification_Verify extends \WC_Email implements \WC_BIS_Email_Previewable
{
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
     * Prepares the email based on the notification data.
     *
     * @since 3.1.0
     * @param WC_BIS_Notification_Data $notification Notification.
     *
     * @return void
     */
    public function prepare_email(\WC_BIS_Notification_Data $notification): void
    {
    }
    /**
     * Trigger the sending of this email.
     *
     * @param WC_BIS_Notification_Data|int $notification
     */
    public function trigger($notification)
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
     * Get default email content.
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
     * Get email content.
     *
     * @return string
     */
    public function get_into_content()
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
     * Setup placeholders.
     *
     * @since  1.3.0
     */
    protected function setup_placeholders()
    {
    }
    /**
     * Set placeholders.
     *
     * @since  1.3.0
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
     * @return void
     */
    public function init_form_fields()
    {
    }
    /**
     * Setup action hooks.
     *
     * @return void
     */
    public function setup_hooks()
    {
    }
}
/**
 * BIS email preview class
 *
 * @interface WC_BIS_Email_Previewable
 * @version  3.1.0
 */
class WC_BIS_Email_Preview
{
    /**
     * The email being previewed
     *
     * @var string
     */
    private $email_type;
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Get a dummy product.
     *
     * @return WC_Product
     */
    private function get_dummy_product(): \WC_Product
    {
    }
    /**
     * Get a dummy notification object.
     *
     * @return WC_BIS_Notification_Data
     */
    private function get_dummy_notification(): \WC_BIS_Notification_Data
    {
    }
    /**
     * Prepares the email for preview.
     *
     * @template T of WC_Email
     * @param T $email The email object being previewed.
     * @return T
     */
    public function prepare_email_for_preview($email)
    {
    }
    /**
     * Check if the email being previewed is a back in stock email.
     *
     * @return bool
     */
    private function is_bis_email(): bool
    {
    }
}
/**
 * REST API Back In Stock Notifications class.
 *
 * @class   WC_BIS_REST_API_Back_In_Stock_Controller
 * @extends WC_REST_Controller
 * @version 1.7.0
 */
class WC_BIS_REST_API_Back_In_Stock_Controller extends \WC_REST_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v3';
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'back-in-stock';
    /**
     * Register the routes for Back In Stock Notifications.
     */
    public function register_routes()
    {
    }
    /**
     * Deactivate notifications.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error
     */
    public function deactivate_notifications($request)
    {
    }
    /**
     * Force-Send notifications.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_REST_Response|WP_Error
     */
    public function force_send_notifications($request)
    {
    }
    /**
     * Check if a given request has access to deactivate notifications.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_items_permissions_check($request)
    {
    }
    /**
     * Get any query params needed for deactivating notifications.
     *
     * @return array
     */
    public function get_deactivation_collection_params()
    {
    }
    /**
     * Get any query params needed for deactivating notifications.
     *
     * @return array
     */
    public function get_force_send_collection_params()
    {
    }
}
/**
 * Main plugin class.
 *
 * @class    WC_Back_In_Stock
 * @version  3.3.5
 */
class WC_Back_In_Stock
{
    /**
     * Plugin version.
     *
     * @var string
     */
    public $version = '3.3.5';
    /**
     * Min required WC version.
     *
     * @var string
     */
    private $wc_min_version = '8.2.0';
    /**
     * Sync Stock Controller.
     *
     * @var WC_BIS_Sync
     */
    public $sync;
    /**
     * The DB helper.
     *
     * @var WC_BIS_DB
     */
    public $db;
    /**
     * Templates Controller.
     *
     * @var WC_BIS_Templates
     */
    public $templates;
    /**
     * Account Controller.
     *
     * @var WC_BIS_Account
     */
    public $account;
    /**
     * Product Controller.
     *
     * @var WC_BIS_Product
     */
    public $product;
    /**
     * Emails controller.
     *
     * @var WC_BIS_Emails
     */
    public $emails;
    /**
     * The single instance of the class.
     *
     * @var WC_Back_In_Stock
     */
    protected static $_instance = \null;
    /**
     * Main WC_Back_In_Stock instance. Ensures only one instance is loaded or can be loaded - @see 'WC_BIS()'.
     *
     * @static
     * @return  WC_Back_In_Stock
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
     * @return boolean
     */
    protected function maybe_define_constant($name, $value)
    {
    }
    /**
     * Indicates whether the plugin is fully initialized.
     *
     * @return boolean
     */
    public function is_plugin_initialized()
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
     * Log using 'WC_Logger' class.
     *
     * @param  string $message
     * @param  string $level
     * @param  string $context
     */
    public function log($message, $level, $context)
    {
    }
    /**
     * Handle plugin activation process.
     *
     * @since  1.2.0
     *
     * @return void
     */
    public function on_activation()
    {
    }
    /**
     * Handle plugin deactivation process.
     *
     * @since  1.2.0
     *
     * @return void
     */
    public function on_deactivation()
    {
    }
    /**
     * Get screen ids.
     */
    public function get_screen_ids()
    {
    }
    /**
     * Checks if the current admin screen is the Dashboard.
     *
     * @return  bool
     */
    public function is_dashboard()
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
     * @param  string $handle
     * @return string
     */
    public function get_resource_url($handle)
    {
    }
}
/*
---------------------------------------------------*/
/*
	Data functions.                                  */
/*---------------------------------------------------*/
/**
 * Get notification types.
 *
 * @return array
 */
function wc_bis_get_notification_types()
{
}
/**
 * Get activity events.
 *
 * @return array
 */
function wc_bis_get_activity_types()
{
}
/**
 * Get activity events.
 *
 * @return array
 */
function wc_bis_get_supported_types()
{
}
/**
 * Get min stock threshold for broadcasting notifications.
 *
 * @return int
 */
function wc_bis_get_stock_threshold()
{
}
/**
 * Is account required for signing up.
 *
 * @return bool
 */
function wc_bis_is_account_required()
{
}
/**
 * Is opt-in required for signing up.
 *
 * @return bool
 */
function wc_bis_is_opt_in_required()
{
}
/**
 * Create an account on signing up.
 *
 * @return bool
 */
function wc_bis_create_account_on_registration()
{
}
/**
 * Returns verification codes expiration time threshold (in seconds).
 *
 * @since 1.2.0
 *
 * @return int
 */
function wc_bis_get_verification_expiration_time_threshold()
{
}
/**
 * Time period required to keep unverified notifications in the system (in seconds). @see WC_BIS_Sync_Tasks::do_wc_bis_daily()
 *
 * @since 1.2.0
 *
 * @return int
 */
function wc_bis_get_delete_unverified_time_threshold()
{
}
/**
 * Is signup prompt enabled?
 *
 * @since 1.2.0
 *
 * @return bool
 */
function wc_bis_is_loop_signup_prompt_enabled()
{
}
/*
---------------------------------------------------*/
/*
	DB.                                              */
/*---------------------------------------------------*/
/**
 * Get a notification object controller.
 *
 * @param  mixed $notification
 * @return WC_BIS_Notification_Data|false
 */
function wc_bis_get_notification($notification)
{
}
/**
 * Get a notification object controller.
 *
 * @param  array $query_args
 * @return array|int|false Array of WC_BIS_Notification_Data objects | int if count is true, and we have notifications | false if count is used, and no notifications.
 */
function wc_bis_get_notifications($query_args)
{
}
/**
 * Checks if a notification configuration exists.
 *
 * @param  array $query_args
 * @param  array $attributes
 * @param  bool  $active
 * @return WC_BIS_Notification_Data|false
 */
function wc_bis_notification_exists($query_args, $attributes = array(), $active = \false)
{
}
/**
 * Get a sign ups for a product ID.
 *
 * @param  array|int $product_id
 * @param  bool      $active
 * @return int
 */
function wc_bis_get_notifications_count($product_id, $active = \false)
{
}
/*
---------------------------------------------------*/
/*
	Display functions.                               */
/*---------------------------------------------------*/
/**
 * Get notification type label.
 *
 * @param  string $slug
 * @return string
 */
function wc_bis_get_notification_type_label($slug)
{
}
/**
 * Get activity type label.
 *
 * @param  string $slug
 * @return string
 */
function wc_bis_get_activity_type_label($slug)
{
}
/*
---------------------------------------------------*/
/*
	Conditional.                                     */
/*---------------------------------------------------*/
/**
 * Is email format.
 *
 * @return bool
 */
function wc_bis_is_email($value)
{
}
/*
---------------------------------------------------*/
/*
	Utilities.                                       */
/*---------------------------------------------------*/
/**
 * Get the minimum time between two notifications.
 * This is used to prevent spamming.
 */
function wc_bis_get_minimum_time_between_notifications()
{
}
/**
 * Get debug status.
 *
 * @return bool
 */
function wc_bis_debug_enabled()
{
}
/**
 * Get double opt-in status.
 *
 * @since 1.2.0
 *
 * @return bool
 */
function wc_bis_double_opt_in_required()
{
}
/**
 * Generates a unique notification hash.
 *
 * @param  string $input
 * @param  string $action
 * @return string
 */
function wc_bis_notification_hash($input, $action)
{
}
/**
 * Get formatted screen id.
 *
 * @since 1.0.1
 *
 * @param  string $key
 * @return string
 */
function wc_bis_get_formatted_screen_id($screen_id)
{
}
/**
 * Whether or not the store is using HTML caching for logged-in users.
 *
 * @since 1.0.7
 *
 * @return bool
 */
function wc_bis_is_using_html_caching_for_users()
{
}
function wc_bis_email_notification_product_image($product, $notification)
{
}
function wc_bis_email_notification_product_title($product, $notification)
{
}
function wc_bis_email_notification_product_attributes($product, $notification)
{
}
function wc_bis_email_notification_product_price($product, $notification)
{
}
function wc_bis_get_activity_description($activity_data)
{
}
function wc_bis_get_form_header_default_text()
{
}
function wc_bis_get_form_header_signed_up_default_text()
{
}
function wc_bis_get_form_button_default_text()
{
}
function wc_bis_get_form_header_signed_up_link_default_text()
{
}
function wc_bis_get_form_privacy_default_text()
{
}
function wc_bis_get_form_signups_count_plural_default_text()
{
}
function wc_bis_get_form_signups_count_default_text()
{
}
/**
 * Default signup prompt text.
 *
 * @since 1.2.0
 *
 * @return string
 */
function wc_bis_get_loop_signup_prompt_default_text()
{
}
/**
 * Default signup prompt link text.
 *
 * @since 1.2.0
 *
 * @return string
 */
function wc_bis_get_loop_signup_prompt_link_default_text()
{
}
/**
 * Default text for signup prompt when user already signed up.
 *
 * @since 1.2.0
 *
 * @return string
 */
function wc_bis_get_loop_signup_prompt_signed_up_default_text()
{
}
/**
 * Default link text for signup prompt when user already signed up.
 *
 * @since 1.2.0
 *
 * @return string
 */
function wc_bis_get_loop_signup_prompt_signed_up_link_default_text()
{
}
/**
 * Helper function.
 *
 * Build a string with option values and default values. If placeholder is set, this function will replace it depending on the placeholder_data argument. This function only works for one placeholder.
 *
 * @since 1.2.0
 *
 * @param  string $key
 * @param  string $placeholder (Optional)
 * @param  mixed  $placeholder_data (Optional)
 * @return string
 */
function wc_bis_build_shop_text($key, $placeholder = '', $placeholder_data = \false)
{
}
/**
 * Compatibility wrapper for getting the element-based block class.
 *
 * @since 1.6.0
 *
 * @param  string $element
 * @return string
 */
function wc_bis_wp_theme_get_element_class_name($element)
{
}
/**
 * Update 1.1.0 db function.
 *
 * @return void
 */
function wc_bis_update_110_main()
{
}
/**
 * Update 1.1.0 db version function.
 *
 * @return void
 */
function wc_bis_update_110_db_version()
{
}
/**
 * Returns the main instance of WC_Back_In_Stock to prevent the need to use globals.
 *
 * @return  WC_Back_In_Stock
 */
function WC_BIS()
{
}
\define('WC_BIS_VERSION', '3.3.5');
