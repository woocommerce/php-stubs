<?php
/**
 * Generated stub declarations for woocommerce-coupon-campaigns 1.2.40.
 * @see https://github.com/woocommerce/php-stubs
 */

/**
 * Retain core rendering while keeping the row ID expected by wp-lists.js.
 *
 * @version 1.2.40
 */
class WC_Coupon_Campaign_Checklist extends \Walker_Category_Checklist
{
    /**
     * Render one campaign with a stable row ID and core's unique checkbox ID.
     *
     * @param string  $output            Output HTML, passed by reference.
     * @param WP_Term $data_object       Campaign term.
     * @param int     $depth             Nesting depth.
     * @param array   $args              Walker arguments.
     * @param int     $current_object_id Current object ID.
     * @return void
     */
    public function start_el(&$output, $data_object, $depth = 0, $args = array(), $current_object_id = 0)
    {
    }
}
/**
 * The coupon campaign filter class.
 *
 * @class   WC_Coupon_Campaign_Filter
 * @version 1.2.40
 */
class WC_Coupon_Campaign_Filter
{
    /**
     * Hooks the necessary methods into their actions.
     */
    public function load(): void
    {
    }
    /**
     * Refresh Analytics after coupon campaign assignments change.
     *
     * @since 1.2.40
     * @param int    $object_id Object whose terms changed.
     * @param mixed  $tt_ids Changed term taxonomy ID or IDs.
     * @param string $taxonomy Changed taxonomy.
     * @return void
     */
    public function invalidate_campaign_report_cache($object_id, $tt_ids, $taxonomy)
    {
    }
    /**
     * Load coupon campaign query filters.
     */
    private function load_coupon_campaign_query_filters(): void
    {
    }
    /**
     * Add the coupon campaign param to the query args.
     *
     * @param array $args The Query parameters.
     * @return array
     */
    public function update_query_args(array $args)
    {
    }
    /**
     * Check if current page is a WooCommerce Admin report page.
     *
     * @return bool
     */
    public function is_wc_admin_page(): bool
    {
    }
    /**
     * Load coupon campaign settings data if on a WooCommerce Admin report page.
     */
    public function load_coupon_campaign_settings(): void
    {
    }
    /**
     * Add coupon campaign data to WooCommerce Admin JS settings.
     */
    public function add_coupon_campaign_settings(): void
    {
    }
    /**
     * Get current coupon campaign query string data.
     * If coupon campaign id is not set it returns 0.
     *
     * @return int
     */
    public function get_current_coupon_campaign_id()
    {
    }
    /**
     * Add JOIN coupon campaign information on WC admin queries.
     *
     * @param string[] $clauses The array of JOIN clauses.
     * @return string[]
     */
    public function add_join_subquery(array $clauses): array
    {
    }
    /**
     * Add WHERE coupon campaign filter on WC admin queries.
     *
     * @param string[] $clauses The array of WHERE clauses.
     * @return string[]
     */
    public function add_where_subquery(array $clauses): array
    {
    }
}
/**
 * Register Coupon Campaigns privacy handlers.
 *
 * @class   WC_Coupon_Campaigns_Privacy
 * @version 1.2.40
 */
class WC_Coupon_Campaigns_Privacy extends \WC_Abstract_Privacy
{
    /**
     * Raw count from the most recent native order selection.
     *
     * @var int|null
     */
    private $queried_order_count = \null;
    /**
     * A failed legacy identity write during the current order page.
     *
     * @var WP_Error|null
     */
    private $legacy_note_error = \null;
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Initial registration of privacy erasers and exporters.
     *
     * Due to the use of translation functions, this should run only after plugins loaded.
     *
     * @return void
     */
    public function register_erasers_exporters()
    {
    }
    /**
     * Returns a list of orders that have post meta in coupons by Coupon Campaigns.
     *
     * @param string $email_address Verified privacy email address.
     * @param int    $page Result offset.
     *
     * @return WC_Order[] Orders whose coupons have Coupon Campaigns data.
     */
    protected function get_orders_with_coupons($email_address, $page)
    {
    }
    /**
     * Returns a list of orders that have post meta in coupons by Coupon Campaigns.
     *
     * @param string $email_address Verified privacy email address.
     * @param int    $page Result offset.
     *
     * @return WP_Comment[] Coupon notes of the subject.
     */
    protected function get_coupon_notes($email_address, $page)
    {
    }
    /**
     * Query coupon notes without changing the exclusion on unrelated comment queries.
     *
     * @param array  $comment_query Native comment query arguments.
     * @param string $identity      Prepared SQL identity condition.
     * @return WP_Comment[]
     */
    private function query_coupon_notes($comment_query, $identity)
    {
    }
    /**
     * Recover old guest identities while core walks the subject's paged order data.
     *
     * Order callbacks run before note callbacks. Only the generated order link on a
     * coupon actually used by this guest order can establish the missing identity.
     *
     * @param WC_Order $order         Selected order.
     * @param int[]    $coupon_ids    Coupons used by the order.
     * @param string   $email_address Verified privacy email address.
     * @return void
     */
    private function recover_legacy_guest_notes($order, $coupon_ids, $email_address)
    {
    }
    /**
     * Gets the message of the privacy to display.
     */
    public function get_privacy_message()
    {
    }
    /**
     * Finds and erases order data by email address.
     *
     * @since 3.4.0
     * @param string $email_address The user email address.
     * @param int    $page  Page.
     * @return array{items_removed: bool|int, items_retained: bool|int, messages: string[], done: bool}|WP_Error Erasure result or an identity recovery error.
     */
    public function order_data_eraser($email_address, $page)
    {
    }
    /**
     * Handle eraser of coupon data tied to Orders
     *
     * @param WC_Order $order Order whose coupon data is being erased.
     * @return array{bool, bool, string[]} Whether data was removed, whether data was retained, and messages.
     */
    protected function maybe_handle_order_coupons($order)
    {
    }
    /**
     * Export the subject's order-linked coupon tracking data.
     *
     * @param string $email_address Verified privacy email address.
     * @param int    $page          Order page.
     * @return array{data: array<int, array{group_id: string, group_label: string, item_id: string, data: array<int, array{name: string, value: string|false}>}>, done: bool}|WP_Error Export data or an identity recovery error.
     */
    public function order_data_exporter($email_address, $page = 1)
    {
    }
    /**
     * Handle exporting data for notes.
     *
     * @param string $email_address E-mail address to export.
     * @param int    $page          Pagination of data.
     *
     * @return array{data: array<int, array{group_id: string, group_label: string, item_id: string, data: array<int, array{name: string, value: int|string}>}>, done: bool}
     */
    public function coupon_note_data_exporter($email_address, $page = 1)
    {
    }
    /**
     * Finds and erases notes data by email address.
     *
     * @since 3.4.0
     * @param string $email_address The user email address.
     * @param int    $page  Page.
     * @return array{items_removed: bool, items_retained: bool, messages: string[], done: bool} An array of personal data in name value pairs
     */
    public function coupon_note_data_eraser($email_address, $page)
    {
    }
}
/**
 * Coupon Campaigns class.
 *
 * @class   WC_Coupon_Campaigns
 * @version 1.2.40
 */
class WC_Coupon_Campaigns
{
    /**
     * Plugin directory.
     *
     * @var string
     */
    private $dir;
    /**
     * Main plugin filename.
     *
     * @var string
     */
    private $file;
    /**
     * Coupon post type.
     *
     * @var string
     */
    private $post_type;
    /**
     * Campaign taxonomy.
     *
     * @var string
     */
    public $tax;
    /**
     * The constructor.
     *
     * @param string $file The main plugin filename.
     */
    public function __construct($file)
    {
    }
    /**
     * Hides View row action on coupon campaigns page.
     *
     * @param array<string, string> $actions Array of all action links.
     * @return array<string, string> Modified array of action links without view action.
     * @since 1.2.38
     */
    public function remove_view_action_campaign($actions)
    {
    }
    /**
     * Register the scripts used in WooCommerce admin.
     *
     * @return void
     */
    public function register_script()
    {
    }
    /**
     * Register coupon campaigns taxonomy.
     *
     * @return void
     */
    public function register_taxonomy()
    {
    }
    /**
     * Keep campaign rows addressable by WordPress's AJAX checklist replacement.
     *
     * @param array|string $args Checklist arguments.
     * @return array|string
     */
    public function campaign_checklist_args($args)
    {
    }
    /**
     * Edit the taxonomy term column headers.
     *
     * @param array<string, string> $columns The column header labels keyed by column ID.
     * @return array<string, string> The column header labels keyed by column ID.
     */
    public function edit_tax_columns($columns)
    {
    }
    /**
     * Edit the taxonomy term column data.
     *
     * @param string $value       Custom column output.
     * @param string $column_name Name of the column.
     * @param int    $term_id     Term ID.
     * @return string Custom column output.
     */
    public function edit_tax_column_data($value, $column_name, $term_id)
    {
    }
    /**
     * Register 'Campaigns' column heading for coupons list table.
     *
     * @param  array<string, string> $columns existing columns.
     * @return array<string, string> Updated columns.
     */
    public function register_custom_column_headings($columns)
    {
    }
    /**
     * Register 'Campaigns' column for coupons list table.
     *
     * @param  string $column_name Name of column.
     * @param  int    $id          ID of column.
     * @return void
     */
    public function register_custom_columns($column_name, $id)
    {
    }
    /**
     * Add option to filter coupons by campaign.
     *
     * @return void
     */
    public function campaign_filter_option()
    {
    }
    /**
     * Filter coupons by campaign.
     *
     * @param  array $request Current request.
     * @return array          Modified request.
     */
    public function campaign_filter_action($request)
    {
    }
    /**
     * Register meta boxes for coupon edit screen.
     *
     * @return void
     */
    public function register_meta_boxes()
    {
    }
    /**
     * Add menu items.
     *
     * @return void
     */
    public function admin_menu_items()
    {
    }
    /**
     * Get the parent menu slug. WooCommerce only registers the Marketing menu while its marketing feature is enabled.
     *
     * @since 1.2.38
     *
     * @return string
     */
    private function get_menu_parent()
    {
    }
    /**
     * Highlight the correct menu item when handling campaigns.
     *
     * @return void
     */
    public function admin_menu_highlight()
    {
    }
    /**
     * Display coupon usage notes on coupon edit screen.
     *
     * @param  WP_Post $post Coupon post object.
     * @return void
     */
    public function display_usage_notes($post)
    {
    }
    /**
     * Save coupon usage data.
     *
     * @param  int $order_id ID of order.
     * @return void
     */
    public function save_usage_data($order_id)
    {
    }
    /**
     * Get coupons from order.
     *
     * @param  WC_Order $order Order object.
     * @return array         Array of coupons applied to order.
     */
    public function get_order_coupons($order)
    {
    }
    /**
     * Assign order to appropriate campaigns.
     *
     * @param  WC_Coupon $coupon   Coupon post object.
     * @param  int       $order_id Order ID.
     * @return void
     */
    private function save_order_data($coupon, $order_id)
    {
    }
    /**
     * Save coupon usage data to coupon post.
     *
     * @param  WC_Coupon     $coupon        Coupon post object.
     * @param  int           $order_id      ID of order.
     * @param  float         $order_total   Total value of order.
     * @param  int           $discount      Total discount provided by coupon.
     * @param  WP_User|false $user          Customer's user object.
     * @param  string        $time          Time & date of order.
     * @param  string        $billing_email Normalized order billing email.
     * @return void
     */
    private function save_coupon_data($coupon, $order_id, $order_total, $discount, $user, $time, $billing_email)
    {
    }
    /**
     * Add note to post containing usage data.
     *
     * @param  WC_Coupon     $coupon        Coupon post object.
     * @param  int           $discount      Total discount provided by coupon.
     * @param  int           $order_id      ID of order.
     * @param  float         $order_total   Total value of order.
     * @param  WP_User|false $user          Customer's user object.
     * @param  string        $time          Time & date of order.
     * @param  string        $billing_email Normalized order billing email.
     * @return void
     */
    private function save_coupon_note($coupon, $discount, $order_id, $order_total, $user, $time, $billing_email)
    {
    }
    /**
     * Exclude coupon comments from queries and RSS, similarly to how WooCommerce does it for order notes.
     *
     * @param  string[] $clauses A compacted array of comment query clauses.
     * @return string[]
     */
    public function exclude_coupon_comments($clauses)
    {
    }
    /**
     * Display coupone notes on coupon edit screen.
     *
     * @return void
     */
    private function display_coupon_notes()
    {
    }
    /**
     * Display copoun campaigns on order edit screen.
     *
     * @param  WC_Order $order Order post object.
     * @return void
     */
    public function display_order_campaigns($order)
    {
    }
    /**
     * Coupon info form for use on front-end.
     *
     * @return string HTML of form
     */
    public function coupon_info()
    {
    }
    /**
     * Load plugin localisation files.
     *
     * @return void
     */
    public function load_localisation()
    {
    }
    /**
     * Load plugin text domain.
     *
     * @return void
     */
    public function load_plugin_textdomain()
    {
    }
    /**
     * Hide coupon note.
     *
     * @since 1.0.3
     *
     * @param WP_Comment_Query $comments_query The comments query object.
     * @return WP_Comment_Query
     */
    public function hide_coupon_note_comments($comments_query)
    {
    }
}
/**
 * WC_Report_Coupon_Campaign
 *
 * @package     WooCommerce/Admin/Reports
 * @version     2.1.0
 */
/**
 * Display the legacy coupon campaign report.
 *
 * @class   WC_Report_Campaigns
 * @version 1.2.40
 */
class WC_Report_Campaigns extends \WC_Admin_Report
{
    /**
     * Chart series colours.
     *
     * @var array<string, string>
     */
    public $chart_colours = array();
    /**
     * Coupon codes selected for the report.
     *
     * @var string[]
     */
    public $coupon_codes = array();
    /**
     * Campaign taxonomy.
     *
     * @var string
     */
    private $taxonomy;
    /**
     * Selected campaign ID.
     *
     * @var string
     */
    private $selected_campaign;
    /**
     * Order counts prepared for the chart.
     *
     * @var array|null
     */
    private $order_counts;
    /**
     * Discount amounts prepared for the chart.
     *
     * @var array|null
     */
    private $order_discount_amounts;
    /**
     * Revenue prepared for the chart.
     *
     * @var array|null
     */
    private $order_revenue;
    /**
     * Order count total for the legend.
     *
     * @var int|float|null
     */
    private $legend_order_counts;
    /**
     * Discount total for the legend.
     *
     * @var int|float|null
     */
    private $legend_order_discount_amounts;
    /**
     * Revenue total for the legend.
     *
     * @var int|float|null
     */
    private $legend_order_revenue;
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Get the legend for the main chart sidebar.
     *
     * @return array<int, array{title: string, color: string, highlight_series: int}>
     */
    public function get_chart_legend()
    {
    }
    /**
     * Calculate the coupon statistics we'll need for the legend.
     *
     * @return void
     */
    public function get_legend_stats()
    {
    }
    /**
     * Get the coupon query.
     *
     * @return WP_Query
     */
    public function get_coupon_query()
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
     * [get_chart_widgets description].
     *
     * @return array<int, array{title: string, callback: callable}>
     */
    public function get_chart_widgets()
    {
    }
    /**
     * Product selection.
     *
     * @return void
     */
    public function coupons_widget()
    {
    }
    /**
     * Get the campaigns.
     *
     * @return mixed
     */
    public function get_campaigns()
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
     * Round our totals correctly.
     *
     * @param  string|array $amount The amount to be rounded, or a chart data point pair.
     * @return string|array
     */
    private function round_chart_totals($amount)
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
    /**
     * Figure out exactly which orders have coupons attached to them.
     *
     * @return array Order IDs the coupons have been applied to.
     */
    public function get_orders_with_coupons()
    {
    }
    /**
     * Select the campaign's coupon items, using the coupon identity saved when the order was placed.
     *
     * @param array $coupon_orders Orders belonging to this campaign.
     * @return int[] Matching coupon item IDs.
     */
    private function get_campaign_coupon_item_ids($coupon_orders)
    {
    }
    /**
     * Query the DB and figure out the data that will go in the chart.
     *
     * @return void
     */
    public function prepare_all_chart_data()
    {
    }
}
/**
 * Load the extension when its WooCommerce requirements are met.
 *
 * @return void
 */
function wc_coupon_campaigns_tracking()
{
}
\define('WC_COUPON_CAMPAIGNS_VERSION', '1.2.40');
