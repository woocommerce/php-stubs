<?php
/**
 * Generated stub declarations for woocommerce-bookings 3.12.0.
 * @see https://github.com/woocommerce/php-stubs
 */

namespace {
    /**
     * WC_Bookable_Resource_CPT class.
     *
     * Handles custom post type for bookable resources.
     */
    class WC_Bookable_Resource_CPT
    {
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Change title boxes in admin.
         *
         * @param  string $text
         * @param  object $post
         * @return string
         */
        public function enter_title_here($text, $post)
        {
        }
        /**
         * Change the columns shown in admin.
         */
        public function edit_columns($existing_columns)
        {
        }
        /**
         * Make product columns sortable.
         *
         * https://gist.github.com/906872
         *
         * @access public
         * @param mixed $columns
         * @return array
         */
        public function custom_columns_sort($columns)
        {
        }
        /**
         * Define our custom columns shown in admin.
         *
         * @param  string $column
         */
        public function custom_columns($column)
        {
        }
    }
    /**
     * WC_Bookable_Resource_Details_Meta_Box class.
     *
     * Handles the details meta box for bookable resources.
     */
    class WC_Bookable_Resource_Details_Meta_Box
    {
        /**
         * Meta box ID.
         *
         * @var string
         */
        public $id;
        /**
         * Meta box title.
         *
         * @var string
         */
        public $title;
        /**
         * Meta box context.
         *
         * @var string
         */
        public $context;
        /**
         * Meta box priority.
         *
         * @var string
         */
        public $priority;
        /**
         * Meta box post types.
         * @var array
         */
        public $post_types;
        /**
         * Is meta boxes saved once?
         *
         * @var boolean
         */
        private static $saved_meta_box = \false;
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Show meta box.
         */
        public function meta_box_inner($post)
        {
        }
        /**
         * Get posted availability fields and format.
         *
         * @return array
         */
        private function get_posted_availability()
        {
        }
        /**
         * Save handler.
         *
         * @param  int     $post_id
         * @param  WP_Post $post
         */
        public function meta_box_save($post_id, $post)
        {
        }
    }
    /**
     * WC_Bookings_Admin_Add_Ons class.
     *
     * Handles the booking addons screen in admin.
     */
    class WC_Bookings_Admin_Add_Ons
    {
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Adds a new section for "bookings" add-ons
         */
        public function add_section($sections)
        {
        }
    }
    /**
     * Handles the admin-side wiring for the booking instances CSV exporter.
     *
     * Mirrors WC core's WC_Admin_Exporters: a hidden submenu page renders the export form,
     * one AJAX endpoint drives the multi-step batch export, and an admin_init hook serves
     * the generated file. The screen entry point is the WP CPT list table for `wc_booking`.
     *
     * @version 3.11.0
     */
    class WC_Bookings_Admin_Exporters
    {
        /**
         * Submenu page slug for the export screen.
         */
        const PAGE_SLUG = 'bookings_exporter';
        /**
         * Parent menu the export page is hung off (matches the Bookings CPT list).
         */
        const PARENT_MENU = 'edit.php?post_type=wc_booking';
        /**
         * URL parameters from the Bookings list table that the export should mirror.
         *
         * Keys correspond to the WP-core month/status dropdowns and the
         * `restrict_manage_posts` filter registered by WC_Bookings_CPT.
         *
         * @var string[]
         */
        const FILTER_PARAMS = array('m', 'post_status', 'filter_bookings');
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Whether the current user is allowed to export bookings.
         *
         * @return bool
         */
        protected function export_allowed()
        {
        }
        /**
         * Whether we are currently on the Bookings list screen (`edit.php?post_type=wc_booking`).
         *
         * @return bool
         */
        protected function is_bookings_list_screen()
        {
        }
        /**
         * Whether we are currently on the dedicated export screen.
         *
         * @return bool
         */
        protected function is_export_screen()
        {
        }
        /**
         * Register the hidden export submenu page.
         */
        public function add_to_menus()
        {
        }
        /**
         * Hide the submenu item — the page exists but isn't reachable from the nav.
         */
        public function hide_from_menus()
        {
        }
        /**
         * Highlight Bookings → All Bookings while on the export screen.
         */
        public function menu_highlight_for_export()
        {
        }
        /**
         * Enqueue export script + localised params on the export screen.
         */
        public function enqueue_assets()
        {
        }
        /**
         * Inject an "Export" button on the Bookings list screen as a `page-title-action`.
         *
         * Carries over the active list-table filter URL params so they pre-populate on the export screen.
         */
        public function render_list_screen_button()
        {
        }
        /**
         * Render the export page.
         */
        public function render_export_page()
        {
        }
        /**
         * Read the Bookings list filters that were passed through to the export screen via URL.
         *
         * @return array Sanitized filter values keyed by FILTER_PARAMS. Empty values are omitted.
         */
        public static function get_request_filters()
        {
        }
        /**
         * Serve the generated CSV file.
         */
        public function download_export_file()
        {
        }
        /**
         * AJAX callback for processing one batch of the export.
         */
        public function do_ajax_export()
        {
        }
    }
    /**
     * Handles the admin-side wiring for the booking instances CSV importer.
     *
     * Mirrors WC_Bookings_Admin_Exporters: a hidden submenu page hosts the multi-step
     * import flow, an AJAX endpoint drives the batched processing, and an "Import" button
     * appears on the Bookings list screen alongside the existing "Export" button.
     *
     * @version 3.11.0
     */
    class WC_Bookings_Admin_Importers
    {
        /**
         * Submenu page slug for the importer screen.
         */
        const PAGE_SLUG = 'bookings_importer';
        /**
         * Parent menu the importer page is hung off (matches the Bookings CPT list).
         */
        const PARENT_MENU = 'edit.php?post_type=wc_booking';
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Whether the current user can import bookings.
         *
         * @return bool
         */
        protected function import_allowed()
        {
        }
        /**
         * Whether we are currently on the Bookings list screen.
         *
         * @return bool
         */
        protected function is_bookings_list_screen()
        {
        }
        /**
         * Whether we are currently on the importer screen.
         *
         * @return bool
         */
        protected function is_import_screen()
        {
        }
        /**
         * Register the hidden importer submenu page.
         */
        public function add_to_menus()
        {
        }
        /**
         * Hide the submenu item — the page exists but isn't reachable from the nav.
         */
        public function hide_from_menus()
        {
        }
        /**
         * Highlight Bookings → All Bookings while on the importer screen.
         */
        public function menu_highlight_for_import()
        {
        }
        /**
         * Register the importer with WordPress core's Tools → Import screen.
         */
        public function register_importers()
        {
        }
        /**
         * Register the import script (enqueued lazily on the import step).
         */
        public function admin_scripts()
        {
        }
        /**
         * Render the importer screen — delegates to WC_Bookings_CSV_Importer_Controller.
         */
        public function render_import_page()
        {
        }
        /**
         * Inject an "Import" button on the Bookings list screen as a `page-title-action`.
         */
        public function render_list_screen_button()
        {
        }
        /**
         * AJAX callback for processing one batch of bookings from the CSV.
         */
        public function do_ajax_import()
        {
        }
    }
    /**
     * WC_Bookings_Admin class.
     *
     * Handles booking admin functionality.
     *
     * @version 3.11.0
     */
    class WC_Bookings_Admin
    {
        private static $_this;
        /**
         * Constructor.
         *
         * @since 1.13.0
         */
        public function __construct()
        {
        }
        public function init()
        {
        }
        /**
         * Bookings debug tools in WooCommerce > Status > Tools.
         *
         * @param array $tools
         */
        public function bookings_debug_tools($tools)
        {
        }
        /**
         * Get posted availability fields and format.
         *
         * @return array
         */
        private function get_posted_availability()
        {
        }
        /**
         * Get posted pricing fields and format.
         *
         * @return array
         */
        private function get_posted_pricing()
        {
        }
        /**
         * Get posted person types.
         *
         * @return array
         */
        private function get_posted_person_types($product)
        {
        }
        /**
         * Get posted resources. Resources are global, but booking products store information about the relationship.
         *
         * @return array
         */
        private function get_posted_resources($product)
        {
        }
        /**
         * Set data in 3.0.x
         *
         * @version  3.6.0
         * @param    WC_Product $product
         */
        public function set_props($product)
        {
        }
        /**
         * Init product edit tabs.
         */
        public function init_tabs()
        {
        }
        /**
         * Add tabs to WC 2.6+
         *
         * @param  array $tabs
         * @return array
         */
        public function register_tab($tabs)
        {
        }
        /**
         * Public access to instance object
         *
         * @return object
         */
        public static function get_instance()
        {
        }
        /**
         * Duplicate a post.
         *
         * @param  int     $new_post_id Duplicated product ID.
         * @param  WP_Post $post        Original product post.
         */
        public function woocommerce_duplicate_product_pre_wc_30($new_post_id, $post)
        {
        }
        /**
         * Duplicate a post.
         *
         * @param  WC_Product $new_product Duplicated product.
         * @param  WC_Product $product     Original product.
         */
        public function woocommerce_duplicate_product($new_product, $product)
        {
        }
        /**
         * Change messages when a post type is updated.
         *
         * @param  array $messages
         * @return array
         */
        public function post_updated_messages($messages)
        {
        }
        /**
         * Show booking data if a line item is linked to a booking ID.
         */
        public function booking_display($item_id, $item, $product)
        {
        }
        /**
         * Include CPT handlers
         */
        public function include_post_type_handlers()
        {
        }
        /**
         * Include meta box handlers
         */
        public function include_meta_box_handlers()
        {
        }
        /**
         * Redirect the default add booking url to the custom one
         */
        public function redirect_new_add_booking_url()
        {
        }
        /**
         * Get booking products.
         *
         * @return array
         */
        public static function get_booking_products()
        {
        }
        /**
         * Get booking product resources.
         *
         * @return array
         */
        public static function get_booking_resources()
        {
        }
        /**
         * Tweak product type options
         *
         * @param  array $options
         * @return array
         */
        public function product_type_options($options)
        {
        }
        /**
         * Show the booking tab
         */
        public function add_tab()
        {
        }
        /**
         * Show the booking data view
         */
        public function booking_data()
        {
        }
        /**
         * Show the booking panels views
         */
        public function booking_panels()
        {
        }
        /**
         * Add admin styles
         */
        public function styles_and_scripts()
        {
        }
        /**
         * Add extra product type options
         *
         * @param  array $options
         * @return array
         */
        public function booking_product_type_options($options)
        {
        }
        /**
         * Reset the ICS exporter timezone string cache.
         *
         * Kept for backwards compatibility with third-party integrations
         * that may call this public method directly.
         *
         * @return void
         */
        public function reset_ics_exporter_timezone_cache()
        {
        }
        /**
         * Override product type for New Product screen, if a request parameter is set.
         *
         * @param string $override Product Type
         * @param int    $product_id
         *
         * @return string
         */
        public function maybe_override_product_type($override, $product_id)
        {
        }
        /**
         * Perform clean up when a bookable product is deleted.
         *
         * @since 1.14.0
         * @param int $post_id The post ID.
         */
        public function handle_deleted_bookable_product($post_id)
        {
        }
        /**
         * Modifies query to retrieve Private products on the
         * Create Booking, Edit Booking and Send Notification
         * admin pages.
         *
         * @param array $args Query args for products
         * @see https://github.com/woocommerce/woocommerce-bookings/issues/3090
         * @return array
         */
        public function modify_booking_products_query($args)
        {
        }
    }
    /**
     * WC_Bookings_Ajax class.
     *
     * Handles AJAX callbacks for bookings.
     *
     * @version 3.11.0
     */
    class WC_Bookings_Ajax
    {
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Add resource link to product.
         */
        public function add_bookable_resource()
        {
        }
        /**
         * Remove resource link from product.
         */
        public function remove_bookable_resource()
        {
        }
        /**
         * Add person type.
         */
        public function add_bookable_person()
        {
        }
        /**
         * Remove person type.
         */
        public function unlink_bookable_person()
        {
        }
        /**
         * Mark a booking confirmed.
         */
        public function mark_booking_confirmed()
        {
        }
        /**
         * Return the available month blocks for the booking in array format.
         *
         * @return array Array of blocks
         */
        public function get_booking_month_blocks()
        {
        }
        /**
         * Calculate costs.
         *
         * @since 1.0.0
         * @since 3.7.0 Added selected dates/months string to the response.
         *
         * Take posted booking form values and then use these to quote a price for what has been chosen.
         * Returns a string which is appended to the booking form.
         */
        public function calculate_costs()
        {
        }
        /**
         * Get a list of time blocks available on a date.
         */
        public function get_time_blocks_for_date()
        {
        }
        /**
         * Resolve the customer-selected duration used to build public time blocks.
         *
         * The posted multiplier is clamped to the product's own maximum duration, which is what
         * the storefront selector offers, so it cannot expand the requested range any further.
         *
         * @since 3.11.0
         *
         * @param mixed              $duration Posted duration.
         * @param WC_Product_Booking $product  Bookable product.
         * @return array Requested and base duration in minutes.
         */
        private function get_duration_intervals($duration, $product)
        {
        }
        /**
         * Gets the end time html dropdown.
         *
         * @since 1.13.0
         * @return void
         */
        public function get_end_time_html()
        {
        }
        /**
         * Search for customers and return json.
         */
        public function json_search_order()
        {
        }
        /**
         * Adds a store availability rule.
         *
         * @since 1.16.0
         * @return array
         */
        public function add_store_availability_rule()
        {
        }
        /**
         * Reads a store availability rule.
         *
         * @since 1.16.0
         * @return array
         */
        public function get_store_availability_rules()
        {
        }
        /**
         * Updates a store availability rule.
         *
         * @since 1.16.0
         * @return array
         */
        public function update_store_availability_rule()
        {
        }
        /**
         * Deletes a store availability rule.
         *
         * @since 1.16.0
         * @return array
         */
        public function delete_store_availability_rules()
        {
        }
        /**
         * Should return availability rules html.
         *
         * @since 1.15.69
         *
         * @return void
         * @throws Exception
         */
        public function lazy_load_availability_rules()
        {
        }
    }
    /**
     * WC_Bookings_Calendar.
     *
     * @version 3.12.0
     */
    class WC_Bookings_Calendar
    {
        /**
         * Stores Bookings/Availability.
         *
         * @var array Mixed type of WC_Global_Availability and WC_Booking
         */
        private $events;
        /**
         * Maximum number of bookings to display in each day of the monthly calendar view.
         */
        const MAX_BOOKINGS_PER_DAY = 3;
        const CALENDAR_VIEWS = array('month', 'day', 'schedule');
        const HIDE_BOOKING_STATUS_LABEL = array('paid', 'complete');
        /**
         * Stores the available minutes for a day.
         *
         * @var array
         */
        private $global_availability_minutes;
        /**
         * Stores the days for the schedule view.
         *
         * @var array
         */
        private $days;
        /**
         * Stores the events data for the schedule view.
         *
         * @var array
         */
        private $events_data;
        /**
         * Stores the day for the day view.
         *
         * @var int
         */
        private $day;
        /**
         * Stores the colors for the bookings.
         *
         * @var array
         */
        private $colours;
        /**
         * Output the calendar view.
         */
        public function output()
        {
        }
        /**
         * Clamp an out-of-range calendar year back to the current, site-local year.
         *
         * Mirrors the site-local default the month, year, and day pickers use in output()
         * (`current_time()`), so an out-of-range `calendar_year` request resets to the same
         * "today" the pickers show. Reading the year with `date( 'Y' )` returned the server
         * UTC year, which sits a year ahead of or behind the site around the New Year boundary.
         *
         * @since 3.9.0
         *
         * @param int $year Requested calendar year.
         * @return int A year within the accepted range.
         */
        private function clamp_calendar_year($year)
        {
        }
        /**
         * Pull out array of event data needed for schedule view from an
         * array of bookings and global availability rules for a range of days.
         *
         * @param array $days   Array of dates to generate event data array for.
         * @param array $events Mixed array of 'WC_Global_Availability' and 'WC_Booking' objects.
         *
         * @return array Array of data needed for schedule view.
         */
        protected function get_events_data_for_days($days, $events)
        {
        }
        /**
         * List bookings for a day.
         */
        public function list_bookings($day, $month, $year)
        {
        }
        private function get_available_minutes_for_calendar_day($day)
        {
        }
        protected function is_day_unavailable($day)
        {
        }
        /**
         * Determine font color based on background color.
         * Calculations rely on perceptive luminance (contrast).
         *
         * @param string $bg_color Background color as a hex code.
         *
         * @return string Font color as a hex code.
         */
        protected function get_font_color($bg_color)
        {
        }
        /**
         * Get color CSS styles for a given list of events.
         *
         * @param array $events
         * @return array Hash event_id => color styles
         */
        protected function get_event_color_styles($events)
        {
        }
        /**
         * List bookings on a day.
         *
         * @version  1.10.7 [<description>]
         */
        public function list_bookings_for_day()
        {
        }
        /**
         * Get translated label of booking status to display
         * in calendar(s).
         *
         * @param string $status Booking status value.
         *
         * @return string Returns the translated label.
         *
         * @since  1.15.49
         */
        static function get_booking_status_label($status)
        {
        }
        /**
         * Add global availability areas to calendar.
         *
         * @since  1.13.0
         */
        public function list_global_availability_for_day()
        {
        }
        /**
         * Build <li> element for rendering a bookings block.
         *
         * @param array $data Bookings data
         * @param array $color_style Color data for the event.
         *
         * @return string
         */
        protected function render_li_element($data, $color_style, $classes = array())
        {
        }
        /**
         * From a list of minutes it creates ranges of consecutive minutes blocks
         *
         * @param array $minutes array of minutes
         *
         * @return array $array of time ranges.
         *
         * @since 1.13.0
         */
        private function split_minutes_array_into_ranges($minutes)
        {
        }
        /**
         * Get Bookings data to be included in the html element on the calendar.
         *
         * @version 3.8.0
         *
         * @param WC_Booking $booking
         * @param integer    $check_date Timestamp during day to be checked. Defaults to $_REQUEST['calendar_day'] or current day.
         * @param bool       $apply_ended_guard Whether to skip events that ended at or before the start of the viewed day (midnight). True for single-day views; the schedule view passes false so past-but-in-month bookings remain listed.
         * @return array|null
         */
        protected function get_booking_data($event, $check_date = \null, $apply_ended_guard = \true)
        {
        }
        /**
         * Get formatted time from timestamp with shortened time format.
         * Shortened format removes minutes when time is on the hour and removes
         * space between time and AM/PM.
         *
         * @param int $timestamp Timestamp to format.
         * @return string
         *
         * @since 1.15.0
         */
        protected function get_short_time($timestamp)
        {
        }
        /**
         * Get a random colour.
         */
        public function random_color()
        {
        }
        /**
         * Get a tooltip in day view.
         *
         * @param  object $booking
         * @return string
         */
        public function get_tip($booking)
        {
        }
        /**
         * Filters products for narrowing search.
         *
         * @param bool $include_resources If true, each product's resources will be included.
         * @return array list of bookable products.
         */
        public function product_filters($include_resources = \true)
        {
        }
        /**
         * Filters resources for narrowing search.
         */
        public function resources_filters()
        {
        }
    }
    /**
     * WC_Bookings_CPT class.
     *
     * Handles custom post type for bookings.
     */
    class WC_Bookings_CPT
    {
        /**
         * Post type.
         *
         * @var string
         */
        public $type;
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Remove edit from the bulk actions.
         *
         * @param mixed $actions
         * @return array
         */
        public function bulk_actions($actions)
        {
        }
        /**
         * Add extra bulk action options to mark orders as complete or processing.
         *
         * Using Javascript until WordPress core fixes: http://core.trac.wordpress.org/ticket/16031
         *
         * @return void
         */
        public function bulk_admin_footer()
        {
        }
        /**
         * Process the new bulk actions for changing order status.
         *
         * @since 1.15.65 On validate user capability to edit bookings.
         *
         * @return void
         */
        public function bulk_action()
        {
        }
        /**
         * Show confirmation message that order status changed for number of orders.
         */
        public function bulk_admin_notices()
        {
        }
        /**
         * Change title boxes in admin.
         *
         * @param  string $text
         * @param  object $post
         * @return string
         */
        public function enter_title_here($text, $post)
        {
        }
        /**
         * Change the columns shown in admin.
         */
        public function edit_columns($existing_columns)
        {
        }
        /**
         * Make product columns sortable.
         *
         * https://gist.github.com/906872
         *
         * @access public
         * @param mixed $columns
         * @return array
         */
        public function custom_columns_sort($columns)
        {
        }
        /**
         * Define our custom columns shown in admin.
         *
         * @param  string $column
         * @param  string $post_id
         * @global WC_Booking $booking
         */
        public function custom_columns($column, $post_id)
        {
        }
        /**
         * Product column orderby.
         *
         * http://scribu.net/wordpress/custom-sortable-columns.html#comment-4732
         *
         * @access public
         * @param mixed $vars
         * @return array
         */
        public function custom_columns_orderby($vars)
        {
        }
        /**
         * Show a filter box.
         */
        public function booking_filters()
        {
        }
        /**
         * Filter the products in admin based on options.
         *
         * @param mixed $query
         */
        public function booking_filters_query($query)
        {
        }
        /**
         * Search custom fields.
         *
         * @param mixed $wp
         */
        public function search_custom_fields($wp)
        {
        }
        /**
         * Change the label when searching orders.
         *
         * @param mixed $query
         * @return string
         */
        public function search_label($query)
        {
        }
        /**
         * Remove row actions from bookings list table.
         *
         * @param array   $actions Array of actions.
         * @param WP_Post $post    Current post object.
         * @return array
         */
        public function row_actions($actions, $post)
        {
        }
    }
    /**
     * WC_Bookings_Create class.
     *
     * Handles the create new bookings page functionality.
     *
     * @version 3.12.0
     */
    class WC_Bookings_Create
    {
        /**
         * Stores errors.
         *
         * @var array
         */
        private $errors = array();
        /**
         * Output the form.
         *
         * @version  1.10.7
         */
        public function output()
        {
        }
        /**
         * Whether a booking for this product can carry a customer timezone.
         *
         * Mirrors the customer-facing form, which records a timezone on the time picker only and
         * only while "Display visitor's local time" is on. This form itself stays in store time.
         *
         * @since 3.12.0
         *
         * @param WC_Product_Booking $product Bookable product.
         * @return bool
         */
        private function has_customer_timezone($product)
        {
        }
        /**
         * Get the timezones a manual booking can be assigned to.
         *
         * @since 3.12.0
         *
         * @return string[]
         */
        private function get_customer_timezone_choices()
        {
        }
        /**
         * Get the customer timezone for the booking being added.
         *
         * @since 3.12.0
         *
         * @param WC_Product_Booking $product      Bookable product.
         * @param array              $booking_data Posted booking data, when the booking is being saved.
         * @return string Timezone identifier, or an empty string when the booking is not converted.
         */
        private function get_customer_timezone($product, $booking_data = array())
        {
        }
        /**
         * Get the form nonce action for a manual booking request.
         *
         * @since 3.9.0
         *
         * @param int|string $order_id Existing order ID or order creation mode.
         * @return string
         */
        private function get_nonce_action($order_id = 0)
        {
        }
        /**
         * Validate an existing order selected for a manual booking.
         *
         * @since 3.9.0
         *
         * @param int $order_id Order ID.
         * @throws Exception When the order is invalid or cannot be edited.
         */
        private function validate_existing_order($order_id)
        {
        }
        /**
         * Create order.
         *
         * @param  float $total
         * @param  int   $customer_id
         * @return int
         */
        public function create_order($total, $customer_id)
        {
        }
        /**
         * Output any errors
         */
        public function show_errors()
        {
        }
        /**
         * Use default template form from the extension.
         *
         * This prevents any overridden template via theme being used in
         * create booking screen.
         *
         * @since 1.9.11
         * @see https://github.com/woothemes/woocommerce-bookings/issues/773
         */
        public function use_default_form_template($located, $template_name, $args, $template_path, $default_path)
        {
        }
    }
    /**
     * WC_Bookings_Customer_Meta_Box class.
     *
     * @version 3.11.0
     */
    class WC_Bookings_Customer_Meta_Box
    {
        /**
         * Meta box ID.
         *
         * @var string
         */
        public $id;
        /**
         * Meta box title.
         *
         * @var string
         */
        public $title;
        /**
         * Meta box context.
         *
         * @var string
         */
        public $context;
        /**
         * Meta box priority.
         *
         * @var string
         */
        public $priority;
        /**
         * Meta box post types.
         * @var array
         */
        public $post_types;
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Meta box content.
         */
        public function meta_box_inner($post)
        {
        }
    }
    /**
     * WC_Bookings_Details_Meta_Box.
     *
     * @version 3.12.0
     */
    class WC_Bookings_Details_Meta_Box
    {
        /**
         * Meta box ID.
         *
         * @var string
         */
        public $id;
        /**
         * Meta box title.
         *
         * @var string
         */
        public $title;
        /**
         * Meta box context.
         *
         * @var string
         */
        public $context;
        /**
         * Meta box priority.
         *
         * @var string
         */
        public $priority;
        /**
         * Meta box post types.
         *
         * @var array
         */
        public $post_types;
        /**
         * Are meta boxes saved?
         *
         * @var boolean
         */
        private static $saved_meta_box = \false;
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Check data and output warnings.
         *
         * @param WC_Booking         $booking Booking object.
         * @param WC_Product_Booking $product Product object.
         */
        private function sanity_check_notices($booking, $product)
        {
        }
        /**
         * Meta box content.
         *
         * @version 3.12.0
         *
         * @param WP_Post $post Post object.
         */
        public function meta_box_inner($post)
        {
        }
        /**
         * Returns an array of labels (statuses wrapped in gettext)
         *
         * @param  array $statuses
         * @deprecated since 1.9.13. $this->get_wc_booking_statuses now also comes with globalised strings.
         * @return array
         */
        public function get_labels_for_statuses($statuses = array())
        {
        }
        /**
         * Save handler.
         *
         * @version 1.10.2
         *
         * @param  int     $post_id Post ID.
         * @param  WP_Post $post    Post object.
         *
         * @throws Exception If error occurs, show it.
         */
        public function meta_box_save($post_id, $post)
        {
        }
        /**
         * Check whether the current user may link a booking to, or unlink it from, an order.
         *
         * @since 3.11.0
         *
         * @param int $order_id Order ID; zero or a missing order needs no permission.
         * @return bool
         */
        private function can_edit_order($order_id)
        {
        }
    }
    /**
     * WC_Bookings_Single_Export class.
     *
     * Handles export functionality for booking products.
     *
     * @version 3.11.0
     */
    class WC_Bookings_Single_Export
    {
        /**
         * Temporary directory path.
         *
         * @var string
         */
        public $temp_dir;
        /**
         * Checks to see if ZipArchive library exists.
         *
         * @var boolean
         */
        public $ziparchive_available;
        /**
         * Product ID that catch_export_requests() has authorized for export.
         *
         * Carried on the instance rather than passed as an argument so that
         * export_product_with_global_rules() keeps its published zero-argument
         * signature; adding a parameter would fatal any subclass overriding it.
         *
         * @since 3.9.0
         * @var int
         */
        protected $authorized_product_id = 0;
        /**
         * ZIP file created by create_zip(), the only file clean_up() removes.
         *
         * @since 3.11.0
         * @var string
         */
        private $zip_file = '';
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Catches form requests.
         */
        public function catch_export_requests()
        {
        }
        /**
         * Exports a specific product and the Global rules.
         *
         * Exports the product that catch_export_requests() authorized. It deliberately
         * does not read a product from the request: the nonce and capability checks are
         * bound to `product_id`, so honouring any other request parameter here would let
         * an authorized export be pointed at a different product.
         *
         * @throws Exception Show error if no product exists.
         */
        public function export_product_with_global_rules()
        {
        }
        /**
         * Gets global availability rules.
         *
         * @throws Exception If error occurs, show it.
         */
        public function get_global_rules()
        {
        }
        /**
         * Triggers the download feature of the browser.
         *
         * @param string $data   Data to add to file.
         * @param string $prefix File prefix to use.
         *
         * @throws Exception Show error if something goes wrong.
         */
        public function trigger_download($data = '', $prefix = '')
        {
        }
        /**
         * Removes the ZIP file created by this exporter and its now-empty directory.
         *
         * Never recurses, so a link or entry it did not create is left untouched.
         *
         * @param string|null $path Unused since 3.11.0; kept for backwards compatibility.
         */
        public function clean_up($path = \null)
        {
        }
        /**
         * Creates the zip file.
         *
         * @param string       $filename Name of file.
         * @param string|false $data     Data to be zipped.
         *
         * @return bool
         */
        public function create_zip($filename, $data = \false)
        {
        }
        /**
         * Prepares the directory for file transfer.
         *
         * Fails when the path already exists, so a directory or link planted there is never adopted.
         *
         * @return bool Whether a new private directory was created.
         */
        public function prep_transfer()
        {
        }
        /**
         * Renders the HTTP headers
         *
         * @param string $filename Path to file.
         */
        public function render_headers($filename)
        {
        }
    }
    class WC_Bookings_Inbox_Notice
    {
        const NOTE_NAME = 'woocommerce-bookings-welcome-note';
        /**
         * Adds a note to the merchant' inbox.
         */
        public static function add_activity_panel_inbox_welcome_note()
        {
        }
        /**
         * Removes any notes this plugin created.
         */
        public static function remove_activity_panel_inbox_notes()
        {
        }
    }
    /**
     * WC_Bookings_Menus class.
     *
     * Handles admin menu functionality for bookings.
     *
     * @version 3.11.0
     */
    class WC_Bookings_Menus
    {
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * output buffer.
         */
        public function buffer()
        {
        }
        /**
         * Screen IDS.
         *
         * @param  array $ids
         * @return array
         */
        public function woocommerce_screen_ids($ids)
        {
        }
        /**
         * Removes the default add new booking link from the main admin menu.
         */
        public function remove_default_add_booking_url()
        {
        }
        /**
         * Add a submenu for managing bookings pages.
         */
        public function admin_menu()
        {
        }
        /**
         * Registers bookings pages.
         *
         * @since 2.0.0
         */
        public function register_pages()
        {
        }
        /**
         * Get bookings pages.
         *
         * @since 2.0.0
         *
         * @return array Data for the bookings pages.
         */
        public static function get_bookings_pages()
        {
        }
        /**
         * Create booking scripts.
         */
        public function create_booking_page_scripts()
        {
        }
        /**
         * Create booking page.
         */
        public function create_booking_page()
        {
        }
        /**
         * calendar_page_scripts.
         */
        public function calendar_page_scripts()
        {
        }
        /**
         * Output the calendar page.
         */
        public function calendar_page()
        {
        }
        /**
         * Provides an email notification form.
         */
        public function notifications_page()
        {
        }
        /**
         * settings_page_scripts.
         */
        public function settings_page_scripts()
        {
        }
        /**
         * Output the store availability page.
         *
         * @since 1.16.0
         */
        public function settings_page()
        {
        }
        /**
         * Reorder the WC menu items in admin.
         *
         * @param mixed $menu_order
         * @return array
         */
        public function menu_order($menu_order)
        {
        }
        /**
         * Filters the add new booking url to point to our custom page
         *
         * @param string $url original url
         * @param string $path requested path that we can match against
         * @return string new url
         */
        public function add_new_booking_url($url, $path)
        {
        }
    }
    /**
     * WC_Bookings_Meta_Boxes class.
     *
     * Handles meta boxes for bookings.
     */
    class WC_Bookings_Meta_Boxes
    {
        /**
         * Stores an array of meta boxes we include.
         *
         * @var array
         */
        private $meta_boxes = array();
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Add meta boxes to edit product page.
         */
        public function add_meta_boxes()
        {
        }
        /**
         * Removes built-in submitdiv meta box.
         *
         * The post_status field from submitdiv meta box causing unexpected transition
         * booking status events.
         *
         * @see https://github.com/woocommerce/woocommerce-bookings/issues/1014
         *
         * @since 1.10.0
         *
         * @version 1.10.0
         */
        public function remove_submitdiv()
        {
        }
    }
    /**
     * A bookings notes meta-box class file.
     *
     * @package WooCommerce Bookings
     */
    /**
     * WC_Bookings_Notes_Meta_Box class.
     */
    class WC_Bookings_Notes_Meta_Box
    {
        /**
         * Meta box ID.
         *
         * @var string
         */
        public $id;
        /**
         * Meta box title.
         *
         * @var string
         */
        public $title;
        /**
         * Meta box context.
         *
         * @var string
         */
        public $context;
        /**
         * Meta box priority.
         *
         * @var string
         */
        public $priority;
        /**
         * Meta box post types.
         *
         * @var array
         */
        public $post_types;
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Render inner part of meta box.
         *
         * @since 2.0.8
         *
         * @param object $post Post object.
         */
        public function meta_box_inner($post)
        {
        }
    }
    /**
     * WC_Booking_Products_Export class.
     *
     * Handles exporting of bookable products.
     *
     * @version 3.11.0
     */
    class WC_Booking_Products_Export
    {
        /**
         * The data properties we'd like to include in the export.
         *
         * @deprecated 3.6.0 Use WC_Booking_Products_Export::get_column_labels() instead.
         *
         * @var array
         */
        protected $properties = array();
        /**
         * Merges booking product data into the parent object.
         *
         * @param int|WC_Product|object $product Product to init.
         */
        public function __construct($product = 0)
        {
        }
        /**
         * Set up the bookable properties that should also be exported.
         *
         * @deprecated 3.6.0 Labels now live in WC_Booking_Products_Export::get_column_labels().
         */
        public function set_default_properties()
        {
        }
        /**
         * Canonical bookable-product CSV columns: internal key => display label.
         *
         * Single source of truth shared with WC_Booking_Products_Import so that
         * exported headers and import auto-detection can never drift. Labels are
         * literal strings so they are picked up for translation, and the method is
         * called lazily from filter callbacks (which run after `init`) so the text
         * domain is loaded by the time `__()` runs.
         *
         * @since 3.6.0
         *
         * @return array
         */
        public static function get_column_labels()
        {
        }
        /**
         * When exporting  WC core uses columns to decided which properties to export.
         * Add the bookings properties  to this list to ensure that we export those values.
         *
         * @since 1.11.0
         *
         * @param array $default_columns
         *
         * @return array
         */
        public function add_column_names($default_columns)
        {
        }
        /**
         * Add person types to the booking export.
         *
         * @since 1.11.0
         *
         * @param array $row
         * @param WC_Product
         *
         * @return array
         */
        public function add_person_types($row, $product)
        {
        }
        /**
         * Convert array of type WC_Product_Booking_Person_Type to array of array
         * representing the data from the given objects. This ensures that don't export
         * objects.
         *
         * @since 1.11.0
         *
         * @param array $types
         *
         * @return string|boolean
         */
        public function convert_types_for_export($types = array())
        {
        }
    }
    /**
     * WC_Booking_Products_Import class.
     *
     * Handles importing of bookable products.
     *
     * @version 3.12.0
     */
    class WC_Booking_Products_Import
    {
        /**
         * The data properties we'd like to include in the import.
         *
         * @deprecated 3.6.0 Use WC_Booking_Products_Export::get_column_labels() instead.
         *
         * @var array
         */
        protected $properties = array();
        /**
         * Merges booking product data into the parent object.
         *
         * @param int|WC_Product|object $product Product to init.
         */
        public function __construct($product = 0)
        {
        }
        /**
         * Set up the bookable properties used during import.
         *
         * @deprecated 3.6.0 Labels now live in WC_Booking_Products_Export::get_column_labels().
         */
        public function set_default_properties()
        {
        }
        /**
         * Register the bookable columns in the import column-mapping dropdown.
         *
         * WC core expects `key => label`, so the shared label map is added as-is.
         *
         * @since 1.11.0
         *
         * @param array $mappings Column key => label options shown in the dropdown.
         *
         * @return array
         */
        public function add_mapped_fields($mappings)
        {
        }
        /**
         * Auto-detect bookable columns on the import mapping screen.
         *
         * WC core matches CSV header text against a `label => key` table to
         * pre-select the right field, so the shared label map is flipped here.
         *
         * @since 3.6.0
         *
         * @param array $columns Header label => column key auto-detection table.
         *
         * @return array
         */
        public function auto_detect_columns($columns)
        {
        }
        /**
         * We store the person type data as a serialized array on export.
         * This function converts it from a serialized array to the required
         * objects before we save the product.
         *
         * @since 1.11.0
         *
         * @param WC_Product $product Could be bookable or standard product.
         * @param array $data Raw import data added tot the WC_Product.
         *
         * @return array
         */
        public function convert_person_types($product, $data)
        {
        }
    }
    /**
     * WC_Bookings_Report_Dashboard class.
     *
     * Handles WooCommerce dashboard display logic for bookings.
     */
    class WC_Bookings_Report_Dashboard
    {
        /**
         * Hook in additional reporting to WooCommerce dashboard widget
         */
        public function __construct()
        {
        }
        /**
         * Add the Bookings specific details to the bottom of the dashboard widget
         */
        public static function add_stats_to_dashboard()
        {
        }
    }
    /**
     * WC_Bookings_Reschedule class.
     *
     * @version 3.11.0
     */
    class WC_Bookings_Reschedule
    {
        /**
         * Singleton instance.
         *
         * @var WC_Bookings_Reschedule|null
         */
        private static $instance = \null;
        /**
         * The booking currently being rendered, if any. Used by filter callbacks.
         *
         * @var WC_Booking|null
         */
        private $current_booking = \null;
        /**
         * Get / lazily create the shared instance.
         *
         * The constructor registers hooks; using a singleton prevents
         * double-registration when more than one caller needs access (bootstrap +
         * meta-box render).
         *
         * @since 3.8.0
         *
         * @return WC_Bookings_Reschedule
         */
        public static function instance()
        {
        }
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Whether a booking is in a status that allows rescheduling.
         *
         * @param WC_Booking $booking Booking.
         * @return bool
         */
        private function is_reschedulable($booking)
        {
        }
        /**
         * Render the reschedule panel inside the booking details meta box.
         *
         * @since 3.8.0
         *
         * @param WC_Booking $booking The booking being edited.
         */
        public function render_panel($booking)
        {
        }
        /**
         * Preselect the current booking's start date in the date picker.
         *
         * @internal
         *
         * @since 3.8.0
         *
         * @param int|null $default_value Existing default (unix timestamp) or null.
         * @return int|null
         */
        public function preselect_default_date($default_value)
        {
        }
        /**
         * Compare two person-count arrays for semantic equality, ignoring zero
         * entries and key ordering.
         *
         * @param array $a First set.
         * @param array $b Second set.
         * @return bool
         */
        private function persons_match($a, $b)
        {
        }
        /**
         * Current booking's duration in the product's customer duration units (the
         * value the `wc_bookings_field_duration` input would carry).
         *
         * @param WC_Booking         $booking Booking.
         * @param WC_Product_Booking $product Product.
         * @return int
         */
        private function get_current_duration_units($booking, $product)
        {
        }
        /**
         * Suppress the resource additional-cost string in the reschedule dialog.
         *
         * Registered at PHP_INT_MAX so any third-party customizations downstream of
         * the canonical filter still execute; we then deterministically blank the
         * final value because resource cost is irrelevant when the order total is locked.
         *
         * @internal
         *
         * @since 3.8.0
         *
         * @return string
         */
        public function suppress_resource_cost_string()
        {
        }
        /**
         * Enqueue reschedule styles on the booking edit screen.
         *
         * The companion JS handle is enqueued from {@see render_panel()} so that its
         * `wc-bookings-booking-form` dependency is already registered (the booking
         * form registers its own handle during `output()`). Enqueuing the script here
         * would trigger WP 6.9.1+'s "dependency not registered" notice.
         *
         * @internal
         *
         * @since 3.8.0
         */
        public function enqueue_styles()
        {
        }
        /**
         * Enqueue the reschedule script. Called from {@see render_panel()} after
         * `WC_Booking_Form::output()` has registered the `wc-bookings-booking-form`
         * handle we declare as a dependency.
         */
        private function enqueue_script()
        {
        }
        /**
         * AJAX: apply a reschedule to an existing booking.
         *
         * @internal
         *
         * @since 3.8.0
         *
         * @throws WC_Data_Exception If a non-lock data error occurs.
         */
        public function ajax_apply_reschedule()
        {
        }
    }
    /**
     * WC_Bookings_Save_Meta_Box.
     *
     * @version 3.6.0
     */
    class WC_Bookings_Save_Meta_Box
    {
        /**
         * Meta box ID.
         *
         * @var string
         */
        public $id;
        /**
         * Meta box title.
         *
         * @var string
         */
        public $title;
        /**
         * Meta box context.
         *
         * @var string
         */
        public $context;
        /**
         * Meta box priority.
         *
         * @var string
         */
        public $priority;
        /**
         * Meta box post types.
         * @var array
         */
        public $post_types;
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Render inner part of meta box.
         *
         * @param WP_Post $post The post object.
         */
        public function meta_box_inner($post)
        {
        }
    }
    /**
     * WC_Bookings_Templates.
     *
     * @version 3.9.0
     */
    class WC_Bookings_Templates
    {
        const SOURCE_TEMPLATE_META_KEY = '_wc_bookings_source_template';
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * One-time cleanup of the legacy upgrade notice introduced in 2.0.0.
         *
         * @since 3.2.0
         */
        public function maybe_cleanup_upgrade_notice()
        {
        }
        /**
         * Redirect users to the templates screen on plugin activation.
         *
         * @since 2.0.0
         */
        public function wc_bookings_templates_page_redirect()
        {
        }
        /**
         * Add a submenu for managing bookings pages.
         *
         * @since 2.0.0
         */
        public function admin_menu()
        {
        }
        /**
         * A Templates page content.
         *
         * @since 2.0.0
         */
        public function product_templates()
        {
        }
        /**
         * Get the templates data.
         *
         * @since 2.0.0
         *
         * @return array of the templates data.
         */
        public function wc_bookings_get_template_data()
        {
        }
        /**
         * Create a product and return its edit page URL.
         *
         * @since 2.0.0
         *
         * Take posted booking form values and then use these to quote a price for what has been chosen.
         * Returns a string which is appended to the booking form.
         */
        public function wc_bookings_get_product_template()
        {
        }
        /**
         * Creates a bookable product.
         *
         * @since 2.0.0
         *
         * @param array $product_data the product data from the JSON.
         *
         * @return int newly created product's ID.
         */
        public function wc_bookings_create_product($product_data)
        {
        }
        /**
         * This function changes the from and to dates to the current month and year.
         * It keeps the day (i.e. 'd') same as received.
         *
         * @since 2.0.0
         *
         * @param array $product_data a bookable product data.
         *
         * @return array $product_data updated bookable product data.
         */
        public function wc_bookings_update_dates($product_data)
        {
        }
        /**
         * This function converts the person type info from a serialized array to the required
         * objects before we save the product.
         *
         * @since 2.0.0
         *
         * @param WC_Product_Booking $product a bookable product.
         *
         * @return array WC_Product_Booking updated object & Created Person Types.
         */
        public function convert_person_types($product)
        {
        }
    }
    /**
     * Booking tools
     */
    class WC_Bookings_Tools
    {
        public static $id = 'bookings-tools';
        /*
         * Clean person types tool.
         */
        public static function clean_person_types()
        {
        }
        /**
         * Removes In Cart bookings
         *
         * @param  string  $remove  If set to 'all' it will remove all In Cart, otherwise, just expired ones.
         *
         * @return string  Message being returned after the system tool is run.
         */
        public static function remove_in_cart_bookings($remove = 'expired')
        {
        }
        /**
         * Removes the relationship between the resource and bookable product.
         *
         * @since 1.14.0
         * @param int $product_id The product ID to unlink.
         * @return bool
         */
        public static function unlink_resource($product_id = \null)
        {
        }
        /**
         * Schedules an Action Scheduler task to add missing attendance_status meta to bookings.
         *
         * @return string Message being returned after the system tool is run.
         */
        public static function schedule_add_missing_attendance_status()
        {
        }
    }
    /**
     * Logic for displaying on WooCommerce Status page.
     */
    class WC_Bookings_WC_Status_Dashboard
    {
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Display WC Bookings template overrides in theme.
         */
        public function add_template_overrides_panel()
        {
        }
    }
    /**
     * Booking instances CSV exporter.
     *
     * Mirrors WC_GC_CSV_Exporter from WooCommerce Gift Cards: extends WC_CSV_Batch_Exporter and
     * exposes 1:1 column hooks so 3rd parties can swap or extend any field via filter without
     * subclassing. Exports booking-related fields only (not bookable product configuration —
     * that is handled by WC_Booking_Products_Export / WC_Bookings_Single_Export).
     *
     * @version 3.11.0
     */
    class WC_Bookings_CSV_Exporter extends \WC_CSV_Batch_Exporter
    {
        /**
         * Type of export used in filter names.
         *
         * @var string
         */
        protected $export_type = 'bookings';
        /**
         * Should meta data be exported?
         *
         * @var bool
         */
        protected $enable_meta_export = \false;
        /**
         * Query filters captured from the modal form.
         *
         * @var array|false
         */
        protected $filters = \false;
        /**
         * Explicit list of booking IDs to export, bypassing filters.
         *
         * @var int[]
         */
        protected $booking_ids = array();
        /**
         * Stage exports in WooCommerce's protected uploads directory instead of the public uploads root.
         *
         * WooCommerce creates woocommerce_uploads with index.html and .htaccess on install. Fall back to the
         * parent location only when the directory cannot be created or written, so exports keep working on every host.
         *
         * @since 3.11.0
         * @return string
         */
        protected function get_file_path()
        {
        }
        /**
         * Name shown to the browser when the export is downloaded.
         *
         * Applies the woocommerce_bookings_export_get_filename filter like WooCommerce does, but only to the download
         * name: the staged file keeps its generated name. Falls back to that name when the filter returns no usable name.
         *
         * @since 3.11.0
         * @return string
         */
        public function get_filename()
        {
        }
        /**
         * Name of the staged export file, as set by generate_filename() or set_filename().
         *
         * Later export steps and the download request carry this name, never the filtered get_filename().
         *
         * @since 3.11.0
         * @return string
         */
        public function get_generated_filename()
        {
        }
        /**
         * Give a new export an unguessable filename.
         *
         * @since 3.11.0
         */
        public function generate_filename()
        {
        }
        /**
         * Whether a requested filename has the shape generate_filename() produces.
         *
         * @since 3.11.0
         * @param mixed $filename Requested filename.
         * @return bool
         */
        public static function is_generated_filename($filename)
        {
        }
        /**
         * Force-cast percent to integer (matches gift cards override; avoids client-side string compare quirks).
         *
         * @return int
         */
        public function get_percent_complete()
        {
        }
        /**
         * Limit the export to a specific set of booking IDs (selected from the list table).
         *
         * @param array $ids Booking post IDs.
         */
        public function set_booking_ids_to_export($ids)
        {
        }
        /**
         * Toggle meta export.
         *
         * @param mixed $export_meta Whether to export meta data.
         */
        public function set_export_meta($export_meta)
        {
        }
        /**
         * Default columns. All Booking-related fields.
         *
         * @return array
         */
        public function get_default_column_names()
        {
        }
        /**
         * Prepare data to export.
         */
        public function prepare_data_to_export()
        {
        }
        /**
         * Build the args passed to WC_Booking_Data_Store::get_booking_ids_by() for the current page.
         *
         * Kept separate from prepare_data_to_export() so the filter→query-args mapping can be
         * unit tested without hitting the database.
         *
         * @return array
         */
        protected function get_query_args()
        {
        }
        /**
         * Statuses considered exportable by default. Matches the post statuses the bookings list table shows.
         *
         * @return array
         */
        protected function get_exportable_statuses()
        {
        }
        /**
         * Build a single CSV row for a booking.
         *
         * @param WC_Booking $booking Booking object.
         * @return array
         */
        protected function generate_row_data($booking)
        {
        }
        /**
         * Append booking post-meta as `meta:<key>` columns when meta export is enabled.
         *
         * @param WC_Booking $booking Booking.
         * @param array      $row     Row data (by reference).
         */
        protected function prepare_meta_for_export($booking, &$row)
        {
        }
        /**
         * Set filters from the AJAX request payload.
         *
         * Accepts the same URL parameter names used on the Bookings list table
         * (`m` for month, `post_status` for status, `filter_bookings` for product/resource),
         * so the export form can pass them through verbatim from hidden inputs.
         *
         * @param array $post_data $_POST data.
         */
        public function set_filters($post_data)
        {
        }
        /*
        |--------------------------------------------------------------------------
        | Column value resolvers.
        |--------------------------------------------------------------------------
        |
        | One method per non-trivial column. The dispatch in generate_row_data() will
        | pick `get_column_value_{column_id}` over the generic `get_{column_id}` getter,
        | so subclasses or filters can override the formatting per field.
        |
        */
        /**
         * Booking ID.
         *
         * @param WC_Booking $booking Booking object.
         * @return int
         */
        protected function get_column_value_id($booking)
        {
        }
        /**
         * All day flag.
         *
         * @param WC_Booking $booking Booking object.
         * @return string
         */
        protected function get_column_value_all_day($booking)
        {
        }
        /**
         * Start date as ISO 8601 with site offset.
         *
         * @param WC_Booking $booking Booking object.
         * @return string
         */
        protected function get_column_value_start($booking)
        {
        }
        /**
         * End date as ISO 8601 with site offset.
         *
         * @param WC_Booking $booking Booking object.
         * @return string
         */
        protected function get_column_value_end($booking)
        {
        }
        /**
         * Created date as ISO 8601 with site offset.
         *
         * @param WC_Booking $booking Booking object.
         * @return string
         */
        protected function get_column_value_date_created($booking)
        {
        }
        /**
         * Modified date as ISO 8601 with site offset.
         *
         * @param WC_Booking $booking Booking object.
         * @return string
         */
        protected function get_column_value_date_modified($booking)
        {
        }
        /**
         * Cancelled date as ISO 8601 with site offset.
         *
         * @param WC_Booking $booking Booking object.
         * @return string
         */
        protected function get_column_value_date_cancelled($booking)
        {
        }
        /**
         * Person counts as JSON ("{type_id: count}").
         *
         * @param WC_Booking $booking Booking object.
         * @return string
         */
        protected function get_column_value_person_counts($booking)
        {
        }
        /**
         * Total person count.
         *
         * @param WC_Booking $booking Booking object.
         * @return int
         */
        protected function get_column_value_persons_total($booking)
        {
        }
        /**
         * Linked product name (resolved at export time — not stored on the booking).
         *
         * @param WC_Booking $booking Booking object.
         * @return string
         */
        protected function get_column_value_product_name($booking)
        {
        }
        /**
         * Linked resource name.
         *
         * @param WC_Booking $booking Booking object.
         * @return string
         */
        protected function get_column_value_resource_name($booking)
        {
        }
        /**
         * Order status (resolved from the linked order).
         *
         * @param WC_Booking $booking Booking object.
         * @return string
         */
        protected function get_column_value_order_status($booking)
        {
        }
        /**
         * Customer display name (uses WC_Booking::get_customer() — handles guests).
         *
         * @param WC_Booking $booking Booking object.
         * @return string
         */
        protected function get_column_value_customer_name($booking)
        {
        }
        /**
         * Customer email.
         *
         * @param WC_Booking $booking Booking object.
         * @return string
         */
        protected function get_column_value_customer_email($booking)
        {
        }
    }
    /**
     * Multi-step controller for the booking CSV importer admin screen.
     *
     * Mirrors WC_GC_CSV_Importer_Controller and WC core's product CSV importer:
     * upload → mapping → import (driven by AJAX) → done. The AJAX work happens in
     * WC_Bookings_Admin_Importers; this class only renders/handles the form steps.
     *
     * @version 3.11.0
     */
    class WC_Bookings_CSV_Importer_Controller
    {
        /**
         * Submenu page slug used for the importer screen URL.
         */
        const PAGE_URL = 'edit.php?post_type=wc_booking&page=bookings_importer';
        /**
         * Path to the uploaded CSV file for the current session.
         *
         * @var string
         */
        protected $file = '';
        /**
         * The active step key.
         *
         * @var string
         */
        protected $step = '';
        /**
         * Step definitions ({ key => { name, view, handler } }).
         *
         * @var array
         */
        protected $steps = array();
        /**
         * Form-level errors collected during step handlers.
         *
         * @var array
         */
        protected $errors = array();
        /**
         * Active CSV delimiter for this session.
         *
         * @var string
         */
        protected $delimiter = ',';
        /**
         * Whether to reuse the user's last column-mapping selection.
         *
         * @var bool
         */
        protected $map_preferences = \false;
        /**
         * Whether existing bookings (matched by ID) should be updated.
         *
         * @var bool
         */
        protected $update_existing = \false;
        /**
         * Build a CSV importer instance for the supplied file/args.
         *
         * @param string $file File to import.
         * @param array  $args Importer arguments.
         * @return WC_Bookings_CSV_Importer
         */
        public static function get_importer($file, $args = array())
        {
        }
        /**
         * Validate that the supplied file is a CSV (by extension/MIME).
         *
         * @param string $file       File path.
         * @param bool   $check_path Also check that the path is local (no remote streams).
         * @return bool
         */
        public static function is_file_valid_csv($file, $check_path = \true)
        {
        }
        /**
         * Whether the path resolves inside a PHAR archive (defence in depth).
         *
         * @param string $filepath The filepath to be checked.
         * @return bool
         */
        public static function is_within_phar($filepath)
        {
        }
        /**
         * Whether the path resolves inside ABSPATH.
         *
         * @param string $filepath The filepath to be checked.
         * @return bool
         */
        public static function is_within_abspath($filepath)
        {
        }
        /**
         * Whether the path resolves inside WP_CONTENT_DIR.
         *
         * @param string $filepath The filepath to be checked.
         * @return bool
         */
        public static function is_within_wp_content($filepath)
        {
        }
        /**
         * Delete the current user's uploaded import file once it has been imported.
         *
         * Files chosen with the server file path option are not import attachments and are kept.
         *
         * @since 3.11.0
         *
         * @param string $file Imported file path.
         */
        public static function delete_uploaded_file($file)
        {
        }
        /**
         * Allow-list of CSV-ish MIME types accepted by the uploader.
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
         * Build the URL for the next step.
         *
         * @param string $step Step slug (default: current step).
         * @return string Next-step URL, admin URL on the last step, or empty string on failure.
         */
        public function get_next_step_link($step = '')
        {
        }
        /**
         * Render the importer header.
         */
        protected function output_header()
        {
        }
        /**
         * Render the step indicator.
         */
        protected function output_steps()
        {
        }
        /**
         * Render the importer footer.
         */
        protected function output_footer()
        {
        }
        /**
         * Add a form-level error.
         *
         * @param string $message Error message.
         * @param array  $actions Action links { url, label }.
         */
        protected function add_error($message, $actions = array())
        {
        }
        /**
         * Render any collected form errors.
         */
        protected function output_errors()
        {
        }
        /**
         * Run the active step (and its save handler if a form was submitted).
         */
        public function dispatch()
        {
        }
        /**
         * Upload step view.
         */
        protected function upload_form()
        {
        }
        /**
         * Upload step handler — validates the upload then redirects to the mapping step.
         */
        public function upload_form_handler()
        {
        }
        /**
         * Handle the CSV upload (file input or server-path advanced option).
         *
         * @return string|WP_Error Uploaded file path on success.
         */
        public function handle_upload()
        {
        }
        /**
         * Mapping step view — read the file headers and let the user assign them to internal column ids.
         */
        protected function mapping_form()
        {
        }
        /**
         * Import step view — kicks off the AJAX import loop.
         */
        public function import()
        {
        }
        /**
         * Done step view — show counts of imported / updated / skipped / failed.
         */
        protected function done()
        {
        }
        /**
         * Lowercase the keys of a column-name map for case-insensitive header matching.
         *
         * @param array $columns List of columns names and keys.
         * @return array
         */
        protected function normalize_columns_names($columns)
        {
        }
        /**
         * Whether a CSV column is one of the export-only fields the importer cannot consume.
         *
         * The exporter emits derived/read-only columns (product/resource name, persons total,
         * order status, customer name/email, modified date) that have no import counterpart.
         * We hide these from the mapping UI so re-uploaded export files don't surface
         * unmappable rows.
         *
         * @param string $header Raw CSV column header.
         * @return bool
         */
        protected function is_export_only_column($header)
        {
        }
        /**
         * Auto-map raw CSV headers to internal column ids based on the default exporter labels.
         *
         * @param array $raw_headers Raw header columns from the CSV.
         * @param bool  $num_indexes Whether to key the result by numeric index (default) or raw header value.
         * @return array
         */
        protected function auto_map_columns($raw_headers, $num_indexes = \true)
        {
        }
        /**
         * Override auto_map_columns() with the user's last-saved mapping when "use previous preferences" is checked.
         *
         * @param array $headers Header columns.
         * @return array
         */
        public function auto_map_user_preferences($headers)
        {
        }
        /**
         * Convert a printf-style label (e.g. "Meta: %s") into a regex used to capture special columns.
         *
         * @param string $value Raw special column name.
         * @return string
         */
        protected function sanitize_special_column_name_regex($value)
        {
        }
        /**
         * Compile special column patterns into anchored regex keys.
         *
         * @param array $columns Raw special columns.
         * @return array
         */
        protected function get_special_columns($columns)
        {
        }
        /**
         * Mapping options shown in the per-column dropdown.
         *
         * @param string $item Currently mapped key (used to surface the right meta variant).
         * @return array
         */
        protected function get_mapping_options($item = '')
        {
        }
    }
    /**
     * Base class for booking CSV importers.
     *
     * Mirrors WC_GC_Importer: handles file/state tracking and delegates per-row processing
     * to subclasses via process_item(). Booking creation is implemented here so the only
     * thing CSV-format-specific lives in WC_Bookings_CSV_Importer.
     *
     * @version 3.11.0
     */
    abstract class WC_Bookings_Importer implements \WC_Importer_Interface
    {
        /**
         * CSV file path.
         *
         * @var string
         */
        protected $file = '';
        /**
         * File pointer offset after the most recent batch.
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
         * Raw CSV header row.
         *
         * @var array
         */
        protected $raw_keys = array();
        /**
         * Header row mapped to internal column ids.
         *
         * @var array
         */
        protected $mapped_keys = array();
        /**
         * Raw row data for the current batch.
         *
         * @var array
         */
        protected $raw_data = array();
        /**
         * Per-row file pointer offsets used to resume mid-batch on time/memory limits.
         *
         * @var array
         */
        protected $file_positions = array();
        /**
         * Parsed (formatted) row data for the current batch.
         *
         * @var array
         */
        protected $parsed_data = array();
        /**
         * Batch start time for the timeout guard.
         *
         * @var int
         */
        protected $start_time = 0;
        /**
         * Get the raw CSV header row.
         *
         * @return array
         */
        public function get_raw_keys()
        {
        }
        /**
         * Get the mapped header row, falling back to the raw headers if no mapping is set.
         *
         * @return array
         */
        public function get_mapped_keys()
        {
        }
        /**
         * Get the raw rows for the current batch.
         *
         * @return array
         */
        public function get_raw_data()
        {
        }
        /**
         * Get the parsed rows for the current batch.
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
         * Get the file pointer position from the most recent read.
         *
         * @return int
         */
        public function get_file_position()
        {
        }
        /**
         * File-pointer position as a percentage of the total file size.
         *
         * @return int
         */
        public function get_percent_complete()
        {
        }
        /**
         * Process a single parsed row and persist the resulting WC_Booking.
         *
         * @param array $data Parsed row data, keyed by internal column id.
         * @return array|WP_Error { id, updated } on success or a WP_Error on failure.
         * @throws Exception When the row references an invalid product or fails to persist.
         */
        protected function process_item($data)
        {
        }
        /**
         * Validate permissions for the booking and changed object references.
         *
         * @since 3.11.0
         *
         * @param array           $data     Parsed row data.
         * @param WC_Booking|null $booking  Existing booking, if this is an update.
         * @param bool            $updating Whether an existing booking will be updated.
         * @return true|WP_Error
         * @throws Exception When the row references an invalid bookable product.
         */
        private function validate_item_permissions($data, $booking, $updating)
        {
        }
        /**
         * Build a consistent authorization error for an import row.
         *
         * @since 3.11.0
         *
         * @param string $message Error message.
         * @return WP_Error
         */
        private function permission_error($message)
        {
        }
        /**
         * Memory exceeded — abort batch when usage hits 90% of the limit.
         *
         * @return bool
         */
        protected function memory_exceeded()
        {
        }
        /**
         * PHP memory limit in bytes (defaults to 32GB if unlimited).
         *
         * @return int
         */
        protected function get_memory_limit()
        {
        }
        /**
         * Time exceeded — abort batch after a sensible cutoff to survive shared-host timeouts.
         *
         * @return bool
         */
        protected function time_exceeded()
        {
        }
        /**
         * Explode a comma-delimited cell, respecting escaped commas.
         *
         * @param string $value     Raw cell value.
         * @param string $separator Delimiter (default: comma).
         * @return array
         */
        protected function explode_values($value, $separator = ',')
        {
        }
        /**
         * Trim and unescape a single value produced by explode_values().
         *
         * @param string $value Value to format.
         * @return string
         */
        protected function explode_values_formatter($value)
        {
        }
        /**
         * The exporter prepends a leading apostrophe to fields starting with =, +, - or @
         * to neutralise CSV-injection attacks. Strip the marker on import.
         *
         * @param string $value Possibly-escaped value.
         * @return string
         */
        protected function unescape_data($value)
        {
        }
        /**
         * Record a warning about a row during parsing.
         *
         * Subclasses must implement this to attach the warning to the specific row being
         * parsed (see WC_Bookings_CSV_Importer::record_row_warning()), so warnings are
         * correctly attributed when process_item() walks rows one at a time.
         *
         * @since 3.6.0
         *
         * @param string $code    Warning code.
         * @param string $message Human-readable message.
         * @param array  $context Structured context.
         */
        abstract public function record_row_warning($code, $message, $context = array());
    }
    /**
     * CSV importer for booking instances.
     *
     * Format mirrors WC_Bookings_CSV_Exporter output: same column ids, same JSON shape
     * for person counts. Datetime fields accept ISO 8601 with offset (preferred) or
     * a TZ-less wall clock interpreted as destination-site-local. Bare numeric epochs
     * are rejected. The mapping step lets users adapt arbitrary CSVs to those internal ids.
     *
     * @version 3.11.0
     */
    class WC_Bookings_CSV_Importer extends \WC_Bookings_Importer
    {
        /**
         * Index of the row currently being parsed (used for set_parsed_data context).
         *
         * @var int
         */
        protected $parsing_raw_data_index = 0;
        /**
         * Per-parsed-row warnings, keyed by raw data row index.
         *
         * @var array<int, array<int, array>>
         */
        private $row_warnings_by_index = array();
        /**
         * Per-parsed-row failures, keyed by raw data row index.
         *
         * @var array<int, array>
         */
        private $row_failures_by_index = array();
        /**
         * Initialise importer.
         *
         * @param string $file   File path.
         * @param array  $params Importer arguments.
         */
        public function __construct($file, $params = array())
        {
        }
        /**
         * Read the CSV file into memory for the current batch.
         */
        protected function read_file()
        {
        }
        /**
         * Strip the UTF-8 BOM from the first header value if present.
         *
         * @param string $value String to handle.
         * @return string
         */
        protected function remove_utf8_bom($value)
        {
        }
        /**
         * Translate raw CSV header values to internal column ids using the user's mapping.
         */
        protected function set_mapped_keys()
        {
        }
        /**
         * Per-column formatting callbacks. Mirrors WC_GC_CSV_Importer::get_formatting_callback().
         *
         * @return array
         */
        protected function get_formatting_callback()
        {
        }
        /**
         * Whether $haystack starts with $needle.
         *
         * @param string $haystack Sentence.
         * @param string $needle   Excerpt.
         * @return bool
         */
        protected function starts_with($haystack, $needle)
        {
        }
        /**
         * Collapse special multi-column groupings (currently just `meta:*`) into nested arrays.
         *
         * @param array $data Row data.
         * @return array
         */
        protected function expand_data($data)
        {
        }
        /**
         * Map and format the raw rows into known fields.
         */
        protected function set_parsed_data()
        {
        }
        /**
         * Build a short identifier for a row, used in error messages.
         *
         * @param array $parsed_data Parsed row.
         * @return string
         */
        protected function get_row_id($parsed_data)
        {
        }
        /**
         * Iterate parsed rows and dispatch each to the persistence layer.
         *
         * Existing-ID rows are skipped unless the `update_existing` flag is set.
         *
         * @return array { imported[], failed[], updated[], skipped[] }
         */
        public function import()
        {
        }
        /*
        |--------------------------------------------------------------------------
        | Field parsers.
        |--------------------------------------------------------------------------
        */
        /**
         * Parse a CSV datetime cell into a fake-UTC booking timestamp.
         *
         * Accepts ISO 8601 with offset (preferred) or a TZ-less wall-clock string in
         * destination-site time. Numeric epochs and unparsable strings are rejected: 0 is
         * returned and a warning is recorded on the row for the caller. An offset that does
         * not match the site offset is NOT a rejection — a valid non-zero timestamp is
         * returned with a warning attached. 0 is therefore returned only on empty or invalid
         * input, never on the offset-mismatch path.
         *
         * @param string $value Field value.
         * @return int Fake-UTC timestamp, or 0 only when the value is empty / invalid.
         */
        public function parse_timestamp_field($value)
        {
        }
        /**
         * Record a per-row warning during CSV parsing.
         *
         * Overrides the abstract base to attach warnings to the specific raw data row index
         * being parsed, so warnings are correctly attributed when process_item walks rows
         * one at a time.
         *
         * @since 3.6.0
         *
         * @param string $code    Warning code.
         * @param string $message Human-readable message.
         * @param array  $context Structured context.
         */
        public function record_row_warning($code, $message, $context = array())
        {
        }
        /**
         * Mark the row currently being parsed as failed.
         *
         * Picked up by process_item() through the reserved __row_failure key on the parsed row.
         *
         * @since 3.6.0
         *
         * @param string $message Human-readable failure reason.
         * @param string $value   Original CSV value that triggered the failure.
         */
        private function stash_row_failure($message, $value)
        {
        }
        /**
         * Format a human-readable message for an offset_mismatch warning.
         *
         * @param array $warning Warning context from wc_bookings_parse_csv_datetime.
         * @return string
         */
        protected function format_offset_mismatch_message($warning)
        {
        }
        /**
         * Parse '1'/'0', 'yes'/'no', booleans → 'yes' or 'no'. Unknown values fall through to wc_clean().
         *
         * @param string $value Field value.
         * @return string
         */
        public function parse_bool_field($value)
        {
        }
        /**
         * Parse an integer field, stripping the CSV-injection escape character if present.
         *
         * @param string $value Field value.
         * @return int
         */
        public function parse_int_field($value)
        {
        }
        /**
         * Parse a decimal field using wc_format_decimal().
         *
         * @param string $value Field value.
         * @return string
         */
        public function parse_decimal_field($value)
        {
        }
        /**
         * Parse the person-counts JSON column produced by the exporter.
         *
         * @param string $value Field value.
         * @return array
         */
        public function parse_person_counts_field($value)
        {
        }
        /**
         * Parse a status key. Strips the `wc-` prefix WooCommerce stores internally.
         *
         * @param string $value Field value.
         * @return string
         */
        public function parse_status_field($value)
        {
        }
        /**
         * Parse a timezone string. Returns an empty string for invalid values rather than failing import.
         *
         * @param string $value Field value.
         * @return string
         */
        public function parse_timezone_field($value)
        {
        }
    }
    /**
     * Tracks in Bookings.
     *
     * @package WooCommerce Bookings
     */
    /**
     * Bookings-specific Tracks implementation.
     */
    class WC_Bookings_Tracks
    {
        /**
         * Tracks event name prefix.
         */
        const PREFIX = 'bookings_';
        /**
         * Constructor.
         *
         * @since 1.15.0
         */
        public function __construct()
        {
        }
        /**
         * Record an event in Tracks - this is the preferred way to record events from PHP.
         *
         * @param string $event_name The name of the event.
         * @param array  $properties Custom properties to send with the event.
         */
        public static function record_event($event_name, $properties = array())
        {
        }
    }
    /**
     * This class adds actions to track usage of WooCommerce Bookings Bookings.
     */
    class WC_Bookings_Bookings_Tracking
    {
        /**
         * Init tracking.
         */
        public function init()
        {
        }
        /**
         * When booking product is saved.
         *
         * @since 1.15.0
         * @param int $post_id The ID of the post.
         */
        public function on_save_post($post_id)
        {
        }
        /**
         * When booking is saved.
         *
         * @since 1.15.0
         * @param int $post_id The ID of the booking.
         */
        public function record_saved_booking($post_id)
        {
        }
        /**
         * When create manual booking is triggered.
         *
         * @since 1.15.0
         * @param object $booking The booking object created.
         */
        public function create_manual_booking($booking)
        {
        }
        /**
         * Before the page has rendered to the screen.
         *
         * @since 1.15.0
         * @param object $screen Current screen.
         */
        public function current_screen($screen)
        {
        }
    }
    /**
     * This class adds actions to track usage of WooCommerce Bookings Calendar.
     */
    class WC_Bookings_Calendar_Tracking
    {
        /**
         * Init tracking.
         */
        public function init()
        {
        }
        /**
         * When calendar settings page is saved.
         *
         * @since 1.15.0
         * @param object $calendar The calendar object.
         */
        public function calendar_settings_on_save($calendar)
        {
        }
        /**
         * Before the page has rendered to the screen.
         *
         * @since 1.15.0
         * @param object $screen Current screen.
         */
        public function current_screen($screen)
        {
        }
    }
    /**
     * This class adds actions to track usage of WooCommerce Bookings Global Availability.
     *
     * @version 3.11.0
     */
    class WC_Bookings_Global_Availability_Tracking
    {
        /**
         * Init tracking.
         */
        public function init()
        {
        }
        /**
         * When global availability page is saved.
         *
         * @since 1.15.0
         */
        public function global_availability_on_save()
        {
        }
    }
    /**
     * This class adds actions to track usage of WooCommerce Bookings Notification.
     */
    class WC_Bookings_Notification_Tracking
    {
        /**
         * Init tracking.
         */
        public function init()
        {
        }
        /**
         * When manual booking notification is sent.
         *
         * @since 1.15.0
         */
        public function on_notification_sent()
        {
        }
        /**
         * Before the page has rendered to the screen.
         *
         * @since 1.15.0
         * @param object $screen Current screen.
         */
        public function current_screen($screen)
        {
        }
    }
    /**
     * This class adds actions to track usage of WooCommerce Booking Products.
     *
     * @version 3.10.0
     */
    class WC_Bookings_Products_Tracking
    {
        /**
         * Init tracking.
         */
        public function init()
        {
        }
        /**
         * When booking product is saved.
         *
         * @since 1.15.0
         * @param int $post_id The ID of the post.
         */
        public function on_save_post($post_id)
        {
        }
        /**
         * Record event for when bookable product is saved/updated.
         *
         * @since 1.15.0
         * @param int $post_id The ID of the post.
         */
        public function record_saved_product($post_id)
        {
        }
        /**
         * Before the page has rendered to the screen.
         *
         * @since 1.15.0
         * @param object $screen Current screen.
         */
        public function current_screen($screen)
        {
        }
    }
    /**
     * This class adds actions to track usage of WooCommerce Booking Resources.
     */
    class WC_Bookings_Resources_Tracking
    {
        /**
         * Init tracking.
         */
        public function init()
        {
        }
        /**
         * When booking product is saved.
         *
         * @since 1.15.0
         * @param int $post_id The ID of the post.
         */
        public function on_save_post($post_id)
        {
        }
        /**
         * When resource is saved.
         *
         * @since 1.15.0
         * @param int $post_id The ID of the resource.
         */
        public function record_saved_resource($post_id)
        {
        }
        /**
         * Before the page has rendered to the screen.
         *
         * @since 1.15.0
         * @param object $screen Current screen.
         */
        public function current_screen($screen)
        {
        }
    }
    /**
     * Integrates Tracks with Bookings product templates.
     *
     * @since 2.0.0
     */
    class WC_Bookings_Templates_Tracking
    {
        /**
         * Initialize tracking.
         *
         * @return void
         */
        public function init()
        {
        }
        /**
         * Tracks when the Bookings > Add Product page is shown.
         */
        public function track_add_product_screen_view()
        {
        }
        /**
         * Augments 'bookings_product_settings' and 'product_add_publish' track events with template information.
         *
         * @param array  $event_properties Tracks event properties.
         * @param string $event_name       Tracks event name.
         * @return array
         */
        public function track_template_data($event_properties, $event_name)
        {
        }
        /**
         * Tracks when a bookable product is created from a template.
         *
         * @param int $product_id
         */
        public function track_product_from_template_created($product_id)
        {
        }
        /**
         * Tracks when a bookable product that was created from a template is published.
         *
         * @param int          $post_id
         * @param object       $post
         * @param bool         $update
         * @param null|WP_Post $post_before
         */
        public function track_product_from_template_published($post_id, $post, $update, $post_before)
        {
        }
        /**
         * Tracks when a bookable product that was created from a template is trashed or deleted.
         *
         * @param int $post_id
         */
        public function track_product_from_template_trashed_or_deleted($post_id)
        {
        }
    }
    /**
     * This class adds actions to track usage of WooCommerce Bookings Timezone.
     */
    class WC_Bookings_Timezone_Tracking
    {
        /**
         * Init tracking.
         */
        public function init()
        {
        }
        /**
         * When timezone settings page is saved.
         *
         * @since 1.15.0
         * @param object $timezone_settings The timezone_settings object.
         */
        public function timezone_settings_on_save($timezone_settings)
        {
        }
    }
    /**
     * Add custom REST API product fields.
     *
     * @class WC_Bookings_Product_Rest_API
     * @version 3.11.0
     */
    class WC_Bookings_Product_Rest_API
    {
        /**
         * Resource/team member IDs to filter products by for the current request.
         *
         * Populated by filter_products_query() from the booking_resource_ids param.
         * Used instead of a WP_Query arg because custom args are stripped by
         * prepare_items_query() before reaching WP_Query.
         *
         * @var int[]
         */
        private $filter_resource_ids = array();
        /**
         * Resource/team member IDs to exclude products by for the current request.
         *
         * Populated by filter_products_query() from the exclude_booking_resource_ids param.
         * Used instead of a WP_Query arg because custom args are stripped by
         * prepare_items_query() before reaching WP_Query.
         *
         * @var int[]
         */
        private $filter_exclude_resource_ids = array();
        /**
         * Custom REST API product field names.
         *
         * @var array
         */
        private $product_fields = array('booking_location' => array('get', 'update'), 'booking_location_type' => array('get', 'update'), 'booking_duration' => array('get', 'update'), 'booking_duration_unit' => array('get', 'update'), 'booking_buffer' => array('get', 'update'), 'booking_cost' => array('get', 'update'), 'booking_resources' => array('get', 'update'));
        /**
         * Setup.
         */
        public function __construct()
        {
        }
        /**
         * Register custom REST API fields for product requests.
         */
        public function register_product_fields()
        {
        }
        /**
         * Gets extended schema properties for products.
         *
         * @return array
         */
        public function get_extended_product_schema()
        {
        }
        /**
         * Gets schema properties for product fields.
         *
         * @param  string $field_name Field name.
         * @return array
         */
        public function get_product_field_schema($field_name)
        {
        }
        /**
         * Gets values for product fields.
         *
         * @param  array           $response The response object.
         * @param  string          $field_name Field name.
         * @param  WP_REST_Request $request The request object.
         * @return mixed
         */
        public function get_product_field_value($response, $field_name, $request)
        {
        }
        /**
         * Updates values for product fields.
         *
         * @param  mixed  $field_value  Field value.
         * @param  mixed  $response     The response object.
         * @param  string $field_name   Field name.
         * @return boolean|WP_Error True on success, WP_Error on validation failure.
         */
        public function update_product_field_value($field_value, $response, $field_name)
        {
        }
        /**
         * Gets product data.
         *
         * @param  string     $key Field key.
         * @param  WC_Product $product Product object.
         * @return mixed
         */
        public function get_product_field($key, $product)
        {
        }
        /**
         * Adds collection params to the /wc/v4/products endpoint.
         *
         * Registers:
         * - booking_resource_ids:           filter to products assigned to any of the given resource IDs.
         * - exclude_booking_resource_ids:   exclude products assigned to any of the given resource IDs.
         *
         * When WC_BOOKINGS_EXPERIMENTAL_ENABLED is true, also registers:
         * - booking_location_type:          filter by in-person or online location type.
         * - exclude_booking_location_type:  exclude products with a specific location type.
         *
         * @param array $params Existing collection params.
         * @return array
         */
        public function add_collection_params($params)
        {
        }
        /**
         * Applies booking filter params to the WP_Query args.
         *
         * Handles: booking_location_type, exclude_booking_location_type,
         *          booking_resource_ids, exclude_booking_resource_ids.
         *
         * Hooked into woocommerce_rest_product_object_query at priority 20 so it runs
         * after other Bookings hooks (e.g. woocommerce_bookings_next_apply_service_filters)
         * that may have already added incorrect meta_query entries for these params.
         * We strip those entries and replace them with correct logic.
         *
         * booking_location_type / exclude_booking_location_type:
         *   'in-person' is never stored explicitly in the DB (stored as '' or no row),
         *   so direct meta_value matches from earlier hooks break it. We use a NOT EXISTS
         *   subquery via posts_where instead (@see add_location_type_where).
         *
         * booking_resource_ids / exclude_booking_resource_ids:
         *   Relationships are stored in wc_booking_relationships, not postmeta.
         *   Earlier hooks query a non-existent _booking_resources meta key (both as flat
         *   NOT LIKE clauses and as nested OR arrays for multi-ID includes), which always
         *   returns empty. We use EXISTS / NOT EXISTS subqueries via posts_where instead
         *   (@see add_resource_ids_where).
         *
         * @param array           $args    WP_Query args.
         * @param WP_REST_Request $request REST request.
         * @return array
         */
        public function filter_products_query($args, $request)
        {
        }
        /**
         * Adds a WHERE condition to match 'in-person' products.
         *
         * Triggered by both booking_location_type=in-person and exclude_booking_location_type=online,
         * since both reduce to the same query: products that are NOT explicitly set to 'online'.
         *
         * 'in-person' is the implicit default and is never stored explicitly in the DB
         * (stored as '' or no meta row at all), so we cannot match it directly.
         * Instead, we exclude products that have meta_value = 'online'. A NOT EXISTS
         * subquery avoids WP_Meta_Query's INNER JOIN issues and correctly includes
         * products with an empty value or no meta row.
         *
         * Registered dynamically by filter_products_query() only when needed.
         * Removes itself immediately so it cannot fire for any subsequent WP_Query.
         *
         * @param string   $where    Current WHERE clause.
         * @param WP_Query $wp_query Current query object.
         * @return string
         */
        public function add_location_type_where($where, $wp_query)
        {
        }
        /**
         * Adds a WHERE condition to filter products by assigned resource/team member IDs.
         *
         * Resource relationships are stored in wc_booking_relationships (not postmeta),
         * so we query that table directly. An EXISTS subquery avoids duplicate rows that
         * a JOIN approach would require GROUP BY to resolve — a product with multiple
         * matching resources would otherwise appear multiple times.
         *
         * booking_resource_ids:         EXISTS subquery — returns products assigned to ANY of the IDs.
         * exclude_booking_resource_ids: NOT EXISTS subquery — excludes products assigned to ANY of the IDs.
         *
         * Registered dynamically by filter_products_query() only when needed.
         * Removes itself immediately so it cannot fire for any subsequent WP_Query.
         *
         * @param string   $where    Current WHERE clause.
         * @param WP_Query $wp_query Current query object.
         * @return string
         */
        public function add_resource_ids_where($where, $wp_query)
        {
        }
    }
    // phpcs:ignoreFile
    /**
     * Abstract class CRUD class generic objects such as bookings and resource extend.
     *
     * @package WooCommerce\Bookings\Rest\Controller
     */
    /**
     * Abstract REST API CRUD controller class.
     *
     * @version 3.10.0
     */
    abstract class WC_Bookings_REST_CRUD_Controller extends \WC_REST_CRUD_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = \WC_Bookings_REST_API::V1_NAMESPACE;
        /**
         * Check whether the current user may read a protected item.
         *
         * @since 3.10.0
         *
         * @param WP_REST_Request $request Request object.
         * @return true|WP_Error
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Register the routes for products.
         */
        public function register_routes()
        {
        }
    }
    // phpcs:ignoreFile
    /**
     * REST API for bookings objects.
     *
     * Handles requests to the /bookings endpoint.
     *
     * @package WooCommerce\Bookings\Rest\Controller
     */
    /**
     * REST API Products controller class.
     */
    class WC_Bookings_REST_Booking_Controller extends \WC_Bookings_REST_CRUD_Controller
    {
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'bookings';
        /**
         * Post type.
         *
         * @var string
         */
        protected $post_type = 'wc_booking';
        /**
         * Get object.
         *
         * @param int $booking_id Object ID.
         *
         * @return WC_Booking|false
         */
        protected function get_object($booking_id)
        {
        }
        /**
         * Get objects (i.e. Bookings).
         *
         * @param array $query_args Query args.
         *
         * @return array Bookings data.
         */
        protected function get_objects($query_args)
        {
        }
        /**
         * Prepare a single product output for response.
         *
         * @param WC_Booking      $object  Object data.
         * @param WP_REST_Request $request Request object.
         *
         * @return WP_REST_Response
         */
        public function prepare_object_for_response($object, $request)
        {
        }
        /**
         * Prepare a single product for create or update.
         *
         * @param  WP_REST_Request $request Request object.
         * @param  bool            $creating If is creating a new object.
         * @return WP_Error|WC_Data
         */
        protected function prepare_object_for_database($request, $creating = \false)
        {
        }
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API Products categories controller class.
     *
     * @version 3.11.0
     */
    class WC_Bookings_REST_Products_Categories_Controller extends \WC_REST_Product_Categories_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = \WC_Bookings_REST_API::V1_NAMESPACE;
        /**
         * Get terms associated with a taxonomy.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Response|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Get a single term from a taxonomy.
         *
         * Return category data only if it is
         * assigned to at least 1 booking product.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Request|WP_Error|array
         */
        public function get_item($request)
        {
        }
        /**
         * Filters the terms query SQL clauses so only categories with bookable products are returned.
         * Product type is also a term so we have to do many joins.
         *
         * @param string[] $pieces     Array of query SQL clauses.
         * @param string[] $taxonomies An array of taxonomy names.
         * @param array    $args       An array of term query arguments.
         *
         * @return array
         */
        public function add_bookable_product_category_filter($pieces, $taxonomies, $args)
        {
        }
        /**
         * Get normalized product type slugs registered as bookable.
         *
         * @since 3.11.0
         *
         * @return string[]
         */
        private function get_bookable_product_types()
        {
        }
    }
    /**
     * Trait WC_Bookings_Rest_Permission_Check.
     *
     * @version 3.11.0
     */
    trait WC_Bookings_Rest_Permission_Check
    {
        /**
         * Override base permission check to add our filter.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Override base permission check to add our filter.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Add the filter during get_items() as well because get_items() calls wc_rest_check_post_permissions() for each item.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_Error|WP_REST_Response
         */
        public function get_items($request)
        {
        }
        /**
         * Filter to override how wc_rest_check_post_permissions works.
         * Allows non-editors to read products that meet the public slots visibility policy.
         *
         * @param bool   $permission Current permission.
         * @param string $context   Request context.
         * @param int    $object_id Post ID.
         * @param string $post_type Post Type.
         * @return bool
         */
        public function rest_check_permissions($permission, $context, $object_id, $post_type)
        {
        }
        /**
         * Overrides the behavior of wc_rest_check_post_permissions for a specific item.
         * Single products retain native public-status and password access without catalog filtering.
         *
         * @param bool   $permission Current permission.
         * @param string $context   Request context.
         * @param int    $object_id Post ID.
         * @param string $post_type Post Type.
         * @return bool
         */
        public function rest_check_item_permissions($permission, $context, $object_id, $post_type)
        {
        }
    }
    /**
     * REST API Products controller class.
     *
     * @version 3.11.0
     */
    class WC_Bookings_REST_Products_Controller extends \WC_REST_Products_Controller
    {
        use \WC_Bookings_Rest_Permission_Check;
        /**
         * Product fields used by the public Bookings Availability blocks.
         *
         * @var array
         */
        private const PUBLIC_RESPONSE_FIELDS = array('id', 'name', 'permalink', 'price_html', 'images', 'duration', 'duration_unit', 'duration_type', 'has_persons', 'has_resources', 'has_restricted_days', 'restricted_days', 'min_duration', 'max_duration');
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = \WC_Bookings_REST_API::V1_NAMESPACE;
        /**
         * Prepare a product response.
         *
         * @since 3.11.0
         *
         * @param WC_Data         $object  Product object.
         * @param WP_REST_Request $request Request object.
         * @return WP_REST_Response|WP_Error
         */
        public function prepare_object_for_response($object, $request)
        {
        }
        /**
         * Add support for filtering by resource.
         *
         * @param WP_REST_Request $request Request data.
         *
         * @return array Query arguments, or an array containing WP_Error for the native CRUD controller.
         */
        protected function prepare_objects_query($request)
        {
        }
        /**
         * Get objects.
         *
         * @param array $query_args Query args.
         *
         * @return array
         */
        protected function get_objects($query_args)
        {
        }
        /**
         * Filters products by associated resource id(s).
         *
         * @param string   $join Current join clauses.
         * @param WP_Query $wp_query Current query object.
         *
         * @return string
         */
        public function add_resource_filter($join, $wp_query)
        {
        }
        /**
         * Get product data.
         *
         * @param  WC_Product_Booking $product Product instance.
         * @param  string             $context Request context.
         *                                     Options: 'view' and 'edit'.
         * @return array
         */
        protected function get_product_data($product, $context = 'view')
        {
        }
        /**
         * Update the collection params.
         *
         * Adds new options for 'orderby', and new parameters 'cat_operator', 'attr_operator'.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * @param WP_REST_Request $request
         * @param bool $creating
         *
         * @return WC_Data|WP_Error
         */
        protected function prepare_object_for_database($request, $creating = \false)
        {
        }
        protected function get_booking_product_properties()
        {
        }
        /**
         * Get the Product's schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    // phpcs:ignoreFile
    /**
     * REST API for bookings objects.
     *
     * Handles requests to the /bookings endpoint.
     *
     * @package WooCommerce\Bookings\Rest\Controller
     */
    /**
     * REST API Products controller class.
     *
     * @version 3.12.0
     */
    class WC_Bookings_REST_Products_Slots_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = \WC_Bookings_REST_API::V1_NAMESPACE;
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'products/slots';
        /**
         * Register the route for bookings slots.
         */
        public function register_routes()
        {
        }
        /**
         * Abbreviations constants.
         */
        const AVAILABLE = 'a';
        const BOOKED = 'b';
        const DATE = 'd';
        const DURATION = 'du';
        const ID = 'i';
        /**
         * Mapping of abbrieviations to expanded versions of labels.
         * Used to minimize stored transient size.
         */
        protected $transient_keys_mapping = array(self::AVAILABLE => 'available', self::BOOKED => 'booked', self::DATE => 'date', self::DURATION => 'duration', self::ID => 'product_id');
        /**
         * @param $availability with abbreviated labels.
         *
         * @return object with labels expanded to their full version.
         */
        public function transient_expand($availability)
        {
        }
        /**
         * Format timestamp to the shortest reasonable format usable in API.
         *
         * @param $timestamp
         * @param $timezone DateTimeZone
         *
         * @return string
         */
        public function get_time($timestamp, $timezone)
        {
        }
        /**
         * Get available bookings slots.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Response|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Resolve the native calculation window and resource selection once.
         *
         * @since 3.11.0
         * @param WC_Product_Booking $bookable_product Product.
         * @param int|false $min_date Requested start; 0 or false when absent or unparsable.
         * @param int|false $max_date Requested end; 0 or false when absent or unparsable.
         * @param int[] $resource_ids Requested resources.
         * @return array Calculation bounds and resources.
         */
        private function get_product_request_data($bookable_product, $min_date, $max_date, $resource_ids)
        {
        }
        /**
         * Scale the request budget to the memory this request can still use.
         *
         * The base budget fits a 256 MB memory_limit. Rejected requests are ones that would
         * otherwise exhaust memory, so larger hosts keep serving larger calendars.
         *
         * @since 3.11.0
         * @return float Multiplier of at least 1.
         */
        private function get_request_budget_scale()
        {
        }
        /**
         * Return a retryable response for a selection that exceeds the request budget.
         *
         * @since 3.11.0
         * @return WP_Error
         */
        private function request_too_large()
        {
        }
        /**
         * Checks if a given request has access to get items.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return true|WP_Error True if the request has read access, WP_Error object otherwise.
         */
        public function get_items_permissions_check($request)
        {
        }
    }
    // phpcs:ignoreFile
    /**
     * REST API controller for resource objects.
     *
     * Handles requests to the /resources endpoint.
     *
     * @package WooCommerce\Bookings\Rest\Controller
     */
    /**
     * REST API Resources controller class.
     *
     * @version 3.9.0
     */
    class WC_Bookings_REST_Resources_Controller extends \WC_Bookings_REST_CRUD_Controller
    {
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'resources';
        /**
         * Post type.
         *
         * @var string
         */
        protected $post_type = 'bookable_resource';
        /**
         * Get object.
         *
         * @param int $id Object ID.
         *
         * @return WC_Product_Booking_Resource|false
         */
        protected function get_object($id)
        {
        }
        /**
         * Prepare a single product output for response.
         *
         * @param WC_Product_Booking_Resource $object  Object data.
         * @param WP_REST_Request             $request Request object.
         *
         * @return WP_REST_Response
         */
        public function prepare_object_for_response($object, $request)
        {
        }
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API for date override availability objects.
     *
     * Handles requests to the /date-overrides endpoint.
     *
     * @package WooCommerce\Bookings\Rest\Controller
     */
    /**
     * REST API date overrides controller class.
     */
    class WC_Bookings_REST_Availability_Date_Overrides_V2_Controller extends \WC_REST_Data_Controller
    {
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'date-overrides';
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = \WC_Bookings_REST_API::V2_NAMESPACE;
        /**
         * Register the routes for date overrides.
         */
        public function register_routes()
        {
        }
        /**
         * Check if a given request has access to read items.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return bool|WP_Error
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a request has access to create items.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return bool|WP_Error
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to read a single item.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return bool|WP_Error
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check if a request has access to update items.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return bool|WP_Error
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Check if a request has access to delete items.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return bool|WP_Error
         */
        public function delete_item_permissions_check($request)
        {
        }
        /**
         * Get date overrides availability rules.
         *
         * @param WP_REST_Request $request Request.
         * @return WP_REST_Response|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Get time slots for a specific date from database.
         *
         * @param int $date Date.
         * @return array Time slots for the specific date.
         */
        private function get_time_slots_for_date($date)
        {
        }
        /**
         * Get all rules for a specific date.
         *
         * @param int $date Date.
         * @return array Rules for the specific date.
         */
        private function get_rules_for_date($date)
        {
        }
        /**
         * Delete rules for a specific date.
         *
         * @param int $date Date.
         * @return bool True on success, false on failure.
         */
        private function delete_rules_for_date($date)
        {
        }
        /**
         * Create item.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Response|WP_Error
         */
        public function create_item($request)
        {
        }
        /**
         * Get a single date's schedule.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Response|WP_Error
         */
        public function get_item($request)
        {
        }
        /**
         * Update a single date's schedule.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Response|WP_Error
         */
        public function update_item($request)
        {
        }
        /**
         * Delete a single date's schedule.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Response|WP_Error
         */
        public function delete_item($request)
        {
        }
        /**
         * Get the date overrides schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API for weekly schedule objects.
     *
     * Handles requests to the /weekly-schedule endpoint.
     *
     * @package WooCommerce\Bookings\Rest\Controller
     */
    /**
     * REST API Weekly Schedule controller class.
     */
    class WC_Bookings_REST_Availability_Weekly_Schedule_V2_Controller extends \WC_REST_Data_Controller
    {
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'weekly-schedule';
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = \WC_Bookings_REST_API::V2_NAMESPACE;
        /**
         * Register the routes for weekly schedule.
         */
        public function register_routes()
        {
        }
        /**
         * Check if a given request has access to read items.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return bool|WP_Error
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to read a single item.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return bool|WP_Error
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check if a request has access to update items.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return bool|WP_Error
         */
        public function update_item_permissions_check($request)
        {
        }
        /**
         * Get weekly schedule rules.
         *
         * @param WP_REST_Request $request Request.
         * @return WP_REST_Response|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Get rules for a specific day from database.
         *
         * @param int $day Day of the week (1-7).
         * @return array Time slots for the specific day.
         */
        private function get_time_slots_for_day($day)
        {
        }
        /**
         * Delete rules for a specific day from database.
         *
         * @param int $day Day of the week (1-7).
         * @return bool True on success, false on failure.
         */
        private function delete_rules_for_day($day)
        {
        }
        /**
         * Get a single day's schedule.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Response|WP_Error
         */
        public function get_item($request)
        {
        }
        /**
         * Update a single day's schedule.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Response|WP_Error
         */
        public function update_item($request)
        {
        }
        /**
         * Get the weekly schedule schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
    }
    /**
     * REST API for bookings objects.
     *
     * Handles requests to the /bookings endpoint.
     *
     * @package WooCommerce\Bookings\Rest\Controller
     */
    /**
     * REST API Products controller class.
     *
     * @version 3.11.0
     */
    class WC_Bookings_REST_Booking_V2_Controller extends \WC_Bookings_REST_CRUD_Controller
    {
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'bookings';
        /**
         * Post type.
         *
         * @var string
         */
        protected $post_type = 'wc_booking';
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = \WC_Bookings_REST_API::V2_NAMESPACE;
        /**
         * Get object.
         *
         * @param int $booking_id Object ID.
         *
         * @return WC_Booking|false
         */
        protected function get_object($booking_id)
        {
        }
        /**
         * Get objects (i.e. Bookings).
         *
         * @param array $query_args Query args.
         *
         * @return array Bookings data.
         */
        protected function get_objects($query_args)
        {
        }
        /**
         * Prepare a single booking output for response.
         *
         * @param WC_Booking      $booking  Object data.
         * @param WP_REST_Request $request Request object.
         *
         * @return WP_REST_Response
         */
        public function prepare_object_for_response($booking, $request)
        {
        }
        /**
         * Validate the request for updating a booking.
         *
         * @since 3.0.0
         *
         * @param array $request  The request data.
         * @param bool  $creating Whether the request is for creating a new booking.
         * @return WP_Error|true Returns a WP_Error object if the request is invalid, otherwise returns true.
         */
        private function validate_update_request($request, $creating = \false)
        {
        }
        /**
         * Prepare a single booking for create or update.
         *
         * @param  WP_REST_Request $request Request object.
         * @param  bool            $creating If is creating a new object.
         * @return WP_Error|WC_Data
         */
        protected function prepare_object_for_database($request, $creating = \false)
        {
        }
        /**
         * Load an order after checking permission for that exact object.
         *
         * @since 3.10.0
         *
         * @param int $order_id Order ID.
         * @return WC_Order|WP_Error
         */
        private function get_authorized_order($order_id)
        {
        }
        /**
         * Handle order creation.
         *
         * @param WC_Booking $booking Booking object.
         * @return bool|WP_Error
         */
        private function handle_order_creation(\WC_Booking $booking)
        {
        }
        /**
         * Create an order.
         *
         * @param WC_Booking $booking Booking object.
         * @return int|WP_Error
         */
        private function create_order(\WC_Booking $booking)
        {
        }
        /**
         * Create an order item.
         *
         * @param WC_Booking $booking Booking object.
         * @return int|WP_Error
         */
        private function create_order_item(\WC_Booking $booking)
        {
        }
        /**
         * Resolve the booking customer_id (WP user ID) from the WooCommerce
         * Analytics customer ID lookup before order creation.
         *
         * @param WC_Booking $booking Booking object.
         * @return void
         */
        private function hydrate_booking_customer_id(\WC_Booking $booking)
        {
        }
        /**
         * Populate the created order with customer data from either a registered
         * customer or the most recent guest order for the analytics customer.
         *
         * @param WC_Order       $order        Order object.
         * @param WC_Booking     $booking      Booking object.
         * @param WC_Order|false $source_order Most recent order for the analytics customer.
         * @return void
         */
        private function populate_order_customer_data(\WC_Order $order, \WC_Booking $booking, $source_order = \false)
        {
        }
        /**
         * Build a WooCommerce order address array from a registered customer.
         *
         * @param int    $customer_user_id Customer user ID.
         * @param string $type             Address type.
         * @return array
         */
        private function get_customer_address(int $customer_user_id, string $type): array
        {
        }
        /**
         * Build a raw WooCommerce order address array suitable for persistence.
         *
         * @param WC_Order $order Order object.
         * @param string   $type  Address type.
         * @return array
         */
        private function get_order_address(\WC_Order $order, string $type): array
        {
        }
        /**
         * Get the raw address fields persisted for the given address type.
         *
         * @param string $type Address type.
         * @return array
         */
        private function get_address_fields(string $type): array
        {
        }
        /**
         * Find the most recent order associated with the analytics customer ID.
         *
         * @param int $woo_customer_id Analytics customer ID.
         * @return WC_Order|false
         */
        private function get_latest_order_for_woo_customer_id(int $woo_customer_id)
        {
        }
        /**
         * Map booking data to wc_booking_get_posted_data.
         *
         * @param WC_Booking $booking Booking object.
         * @param int        $duration Duration of the request.
         * @return array
         */
        private function map_to_legacy_posted_data(\WC_Booking $booking, int $duration): array
        {
        }
        /**
         * Get allowed statuses.
         *
         * @return array Array of allowed statuses.
         */
        private function get_allowed_statuses(): array
        {
        }
        /**
         * Get the booking schema, conforming to JSON Schema.
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Modify query args to support filtering and searching.
         *
         * @param WP_REST_Request $request  Request.
         * @return array Query args for WP_Query.
         */
        protected function prepare_objects_query($request)
        {
        }
        /**
         * Get collection parameters.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Sanitize callback for integer array parameters.
         *
         * @param mixed $value The value to sanitize.
         * @return array Array of sanitized integers.
         */
        public function sanitize_integer_array($value)
        {
        }
        /**
         * Sanitize callback for string array parameters.
         *
         * @param mixed $value The value to sanitize.
         * @return array Array of sanitized strings.
         */
        public function sanitize_string_array($value)
        {
        }
    }
    /**
     * REST API for Google Calendar connection.
     *
     * Handles requests to the /google-calendar endpoint.
     *
     * @package WooCommerce\Bookings\Rest\Controller
     */
    /**
     * REST API Google Calendar controller class.
     */
    class WC_Bookings_REST_Google_Calendar_V2_Controller extends \WC_REST_Data_Controller
    {
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'google-calendar';
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = \WC_Bookings_REST_API::V2_NAMESPACE;
        /**
         * Register the routes for Google Calendar.
         */
        public function register_routes()
        {
        }
        /**
         * Check if a given request has access to read connection status.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return bool|WP_Error
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a request has access to disconnect.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return bool|WP_Error
         */
        public function disconnect_permissions_check($request)
        {
        }
        /**
         * Check if a request has access to update settings.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return bool|WP_Error
         */
        public function update_settings_permissions_check($request)
        {
        }
        /**
         * Get Google Calendar connection status.
         *
         * @param WP_REST_Request $request Request.
         * @return WP_REST_Response|WP_Error
         */
        public function get_connection_status($request)
        {
        }
        /**
         * Disconnect from Google Calendar.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Response|WP_Error
         */
        public function disconnect($request)
        {
        }
        /**
         * Get the list of available Google calendars.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Response|WP_Error
         */
        public function get_calendars($request)
        {
        }
        /**
         * Get Google Calendar settings.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Response|WP_Error
         */
        public function get_settings($request)
        {
        }
        /**
         * Update Google Calendar settings.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Response|WP_Error
         */
        public function update_settings($request)
        {
        }
        /**
         * Get the connection schema.
         *
         * @return array
         */
        public function get_connection_schema()
        {
        }
        /**
         * Get the calendars schema.
         *
         * @return array
         */
        public function get_calendars_schema()
        {
        }
        /**
         * Get the settings schema.
         *
         * @return array
         */
        public function get_settings_schema()
        {
        }
    }
    /**
     * REST API Quotes controller class.
     *
     * @version 3.11.0
     */
    class WC_Bookings_REST_Quotes_V2_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = \WC_Bookings_REST_API::V2_NAMESPACE;
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'quotes';
        /**
         * Register the route for quotes.
         */
        public function register_routes()
        {
        }
        /**
         * Get a quote.
         *
         * @param WP_REST_Request $request Full details about the request.
         * @return WP_REST_Response|WP_Error
         */
        public function get_items($request)
        {
        }
        /**
         * Map request data to wc_booking_get_posted_data.
         *
         * @see WC_Product_Booking::is_bookable()
         *
         * @param WP_REST_Request $request  Request data.
         * @param int             $duration Duration of the request.
         * @return array
         */
        private function map_to_legacy_posted_data(\WP_REST_Request $request, int $duration): array
        {
        }
        /**
         * Check if a given request has access to read items.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
    }
    /**
     * REST API controller for resource team members objects.
     *
     * Handles requests to the /resources/team-members endpoint.
     *
     * @package WooCommerce\Bookings\Rest\Controller
     */
    /**
     * REST API Team Members controller class.
     *
     * @version 3.11.0
     */
    class WC_Bookings_REST_Team_Members_V2_Controller extends \WC_Bookings_REST_CRUD_Controller
    {
        /**
         * Team-member fields exposed to readers without management access.
         *
         * @var array
         */
        private const PUBLIC_RESPONSE_FIELDS = array('id' => \true, 'status' => \true, 'name' => \true, 'image_url' => \true, 'description' => \true);
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'resources/team-members';
        /**
         * Post type.
         *
         * @var string
         */
        protected $post_type = 'bookable_team_member';
        /**
         * Endpoint namespace.
         *
         * @var string
         */
        protected $namespace = \WC_Bookings_REST_API::V2_NAMESPACE;
        /**
         * Get object.
         *
         * @since 3.0.0
         *
         * @param int $id Object ID.
         *
         * @return WC_Product_Booking_Team_Member|false
         */
        protected function get_object($id)
        {
        }
        /**
         * Create a single team member.
         *
         * @since 3.2.0
         *
         * @param WP_REST_Request $request Request object.
         *
         * @return WP_REST_Response|WP_Error
         */
        public function create_item($request)
        {
        }
        /**
         * Update a single team member.
         *
         * @since 3.2.0
         *
         * @param WP_REST_Request $request Request object.
         *
         * @return WP_REST_Response|WP_Error
         */
        public function update_item($request)
        {
        }
        /**
         * Sync product relationships and refresh the response payload.
         *
         * @since 3.2.0
         *
         * @param WP_REST_Response $response Response object.
         * @param WP_REST_Request  $request  Request object.
         *
         * @return WP_REST_Response|WP_Error
         */
        private function sync_and_refresh_response($response, $request)
        {
        }
        /**
         * Prepare a single product output for response.
         *
         * @since 3.0.0
         *
         * @param  WC_Product_Booking_Team_Member $resource_obj Object data.
         * @param  WP_REST_Request                $request      Request object.
         *
         * @return WP_REST_Response
         */
        public function prepare_object_for_response($resource_obj, $request)
        {
        }
        /**
         * Prepare objects query.
         *
         * @since 3.0.0
         *
         * @param WP_REST_Request $request Request object.
         *
         * @return array
         */
        protected function prepare_objects_query($request)
        {
        }
        /**
         * Validate the request for updating a resource.
         *
         * @since 3.0.0
         *
         * @param array $request The request data.
         *
         * @return WP_Error|true Returns a WP_Error object if the request is invalid, otherwise returns true.
         */
        private function validate_update_request($request)
        {
        }
        /**
         * Prepare a single resource for create or update.
         *
         * @since 3.0.0
         *
         * @param array $request Request object.
         * @param bool  $creating If creating a new object.
         *
         * @return WP_Error|WC_Product_Booking_Team_Member
         */
        protected function prepare_object_for_database($request, $creating = \false)
        {
        }
        /**
         * Get the resource schema, conforming to JSON Schema.
         *
         * @since 3.0.0
         *
         * @return array
         */
        public function get_item_schema()
        {
        }
        /**
         * Validate availability payload.
         *
         * @since 3.2.0
         *
         * @param array $availability Availability payload.
         * @return WP_Error|true
         */
        private function validate_availability_request($availability)
        {
        }
        /**
         * Convert availability payload to database-ready rules.
         *
         * @since 3.2.0
         *
         * @param array $availability Availability payload.
         * @return array
         */
        private function map_availability_for_database($availability)
        {
        }
        /**
         * Format availability rules for API response.
         *
         * @since 3.2.0
         *
         * @param array $availability_rules Availability rules from storage.
         * @return array
         */
        private function format_availability_for_response($availability_rules)
        {
        }
        /**
         * Validate date string in YYYY-MM-DD format.
         *
         * @since 3.2.0
         *
         * @param string $date Date string.
         * @return bool
         */
        private function is_valid_date($date)
        {
        }
        /**
         * Get the collection params.
         *
         * @since 3.0.0
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Get product IDs for a resource.
         *
         * @param int $resource_id Resource ID.
         *
         * @return int[]
         */
        private function get_product_booking_ids_for_resource($resource_id)
        {
        }
        /**
         * Sync product relationships for a resource.
         *
         * @param int   $resource_id Resource ID.
         * @param int[] $new_product_booking_ids Product IDs to keep.
         * @return true|WP_Error
         */
        private function sync_product_booking_ids($resource_id, $new_product_booking_ids)
        {
        }
        /**
         * Get only the weekly rules from an availability array.
         *
         * @param array $availability Availability rules.
         * @return array Weekly rules, re-indexed.
         */
        private function get_weekly_rules(array $availability): array
        {
        }
        /**
         * Get only the date override rules from an availability array.
         *
         * @param array $availability Availability rules.
         * @return array Date override rules, re-indexed.
         */
        private function get_date_override_rules(array $availability): array
        {
        }
    }
    /**
     * Utility class for availability operations.
     */
    class WC_Bookings_Availability_Utils
    {
        /**
         * Validate time slots.
         *
         * @param array $time_slots Array of time slots.
         * @return bool|WP_Error True if valid, WP_Error if invalid.
         */
        public static function validate_time_slots($time_slots)
        {
        }
        /**
         * Check for overlapping time slots within the same day.
         *
         * @param array $time_slots Array of time slots for a single day.
         * @return bool|WP_Error True if no overlaps, WP_Error if overlaps found.
         */
        public static function check_time_slot_overlaps($time_slots)
        {
        }
        /**
         * Convert time string (HH:MM) to minutes since midnight.
         *
         * @param string $time Time in HH:MM format.
         * @return int Minutes since midnight.
         */
        public static function time_to_minutes($time)
        {
        }
        /**
         * Process time slots and generate availability rules with gaps.
         *
         * Uses separate priorities for "no" (blocked) and "yes" (bookable) rules so
         * that blocking rules from any level always take precedence over allowing
         * rules, enforcing a "narrowing only" constraint across levels.
         *
         * @param array  $time_slots   Array of time slots.
         * @param string $type         The type field for the rules.
         * @param string $rule_type    The rule_type field for the rules.
         * @param int    $no_priority  Priority for blocked (bookable=no) rules.
         * @param int    $yes_priority Priority for available (bookable=yes) rules.
         * @param string $date         Optional date for date-specific rules.
         * @return array Array of availability rules.
         */
        private static function process_time_slots($time_slots, $type, $rule_type, $no_priority, $yes_priority, $date = \null)
        {
        }
        /**
         * Map date overrides availability rules to expected DB format.
         *
         * Expected format:
         *
         * array(
         *     'date'       => '2025-09-23',
         *     'time_slots' => array(
         *         array(
         *             'start' => '09:00',
         *             'end' => '12:00',
         *         ),
         *         array(
         *             'start' => '14:00',
         *             'end' => '17:00',
         *         ),
         *     ),
         * )
         *
         * Expected return (global level defaults: no_priority=10, yes_priority=80):
         *
         * array(
         *   array(
         *           'type'       => 'custom:daterange',
         *           'priority'  => 10,
         *           'bookable'  => 'no',
         *           'from_date' => '2025-09-23',
         *           'to_date'   => '2025-09-23',
         *           'from'      => '00:00',
         *           'to'        => '09:00',
         *     ),
         *   array(
         *           'type'       => 'custom:daterange',
         *           'priority'  => 80,
         *           'bookable'  => 'yes',
         *            'from_date' => '2025-09-23',
         *           'to_date'   => '2025-09-23',
         *           'from'      => '09:00',
         *           'to'        => '12:00',
         *     ),
         *   array(
         *           'type'       => 'custom:daterange',
         *           'priority'  => 10,
         *           'bookable'  => 'no',
         *           'from_date' => '2025-09-23',
         *           'to_date'   => '2025-09-23',
         *           'from'      => '12:00',
         *           'to'        => '14:00',
         *     ),
         *   array(
         *           'type'       => 'custom:daterange',
         *           'priority'  => 80,
         *           'bookable'  => 'yes',
         *           'from_date' => '2025-09-23',
         *           'to_date'   => '2025-09-23',
         *           'from'      => '14:00',
         *           'to'        => '17:00',
         *     ),
         *   array(
         *           'type'       => 'custom:daterange',
         *           'priority'  => 10,
         *           'bookable'  => 'no',
         *           'from_date' => '2025-09-23',
         *           'to_date'   => '2025-09-23',
         *           'from'      => '14:00',
         *           'to'        => '00:00',
         *     ),
         * )
         *
         * @param array $availability_rules Availability rules.
         * @param int   $no_priority        Priority for blocked (bookable=no) rules (default 10 for global level).
         * @param int   $yes_priority       Priority for available (bookable=yes) rules (default 80 for global level).
         * @return array
         */
        public static function map_date_overrides_rules($availability_rules, $no_priority = 10, $yes_priority = 80)
        {
        }
        /**
         * Map weekly availability rules to expected DB format.
         *
         * Expected format:
         *
         * array(
         *     '1' => array( // Monday
         *         array(
         *             'start' => '09:00',
         *             'end' => '12:00'
         *         ),
         *         array(
         *             'start' => '14:00',
         *             'end' => '17:00'
         *         ),
         *     ),
         * )
         *
         * Expected return (global level defaults: no_priority=30, yes_priority=70):
         *
         * array(
         *   array(
         *           'type'      => 'time:1',
         *           'priority'  => 70,
         *           'bookable'  => 'yes',
         *           'from'      => '09:00',
         *           'to'        => '12:00',
         *     ),
         *   array(
         *           'type'      => 'time:1',
         *           'priority'  => 30,
         *           'bookable'  => 'no',
         *           'from'      => '00:00',
         *           'to'        => '09:00',
         *     ),
         *   array(
         *           'type'      => 'time:1',
         *           'priority'  => 30,
         *           'bookable'  => 'no',
         *           'from'      => '12:00',
         *           'to'        => '14:00',
         *     ),
         *   array(
         *           'type'      => 'time:1',
         *           'priority'  => 70,
         *           'bookable'  => 'yes',
         *           'from'      => '14:00',
         *           'to'        => '17:00',
         *     ),
         *   array(
         *           'type'      => 'time:1',
         *           'priority'  => 30,
         *           'bookable'  => 'no',
         *           'from'      => '17:00',
         *           'to'        => '00:00',
         *     ),
         * )
         *
         * @param array $availability_rules Availability rules.
         * @param int   $no_priority        Priority for blocked (bookable=no) rules (default 30 for global level).
         * @param int   $yes_priority       Priority for available (bookable=yes) rules (default 70 for global level).
         * @return array
         */
        public static function map_weekly_availability_rules($availability_rules, $no_priority = 30, $yes_priority = 70)
        {
        }
    }
    /**
     * Extends the store availability API with booking related data.
     *
     * @version 3.11.0
     */
    class WC_Bookings_Availability_Store_API extends \WC_REST_Controller
    {
        /**
         * Namespace for the API.
         *
         * @var string
         */
        protected $namespace = \WC_Bookings_REST_API::V2_NAMESPACE;
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Register the routes for the API.
         *
         * @return void
         */
        public function register_routes()
        {
        }
        /**
         * Get the availability for a product.
         *
         * @param WP_REST_Request $request The request object.
         * @return WP_Error|array The availability data, or a WP_Error if the request is invalid.
         */
        public function get_availability($request)
        {
        }
        /**
         * Update the timezone offset for the availability blocks.
         *
         * @param array $blocks Array of availability blocks.
         * @param int   $timezone_offset  Timezone offset in hours.
         * @return array Updated availability blocks.
         */
        private function adjust_blocks_for_timezone(array $blocks, int $timezone_offset = 0): array
        {
        }
        /**
         * Format availability slots into a structured array grouped by month and day.
         *
         * Takes an array of raw availability slots and formats them into a nested array structure:
         * - First level: Months (YYYY-MM)
         * - Second level: Days (YYYY-MM-DD)
         * - Third level: Individual time slots with availability count
         *
         * @param array $blocks Array of availability blocks with timestamps as keys.
         * @return array Formatted availability data grouped by month and day.
         */
        private function get_formatted_availability(array $blocks)
        {
        }
        /**
         * Validate the request parameters.
         *
         * @param WP_REST_Request $request The request object.
         * @return WP_Error|null The validation error, or null if valid.
         */
        private function validate_params($request)
        {
        }
        /**
         * Get the availability schema.
         *
         * @return array
         */
        public function get_collection_params()
        {
        }
        /**
         * Check if the user has permission to get the availability.
         *
         * @param WP_REST_Request $request The request object.
         * @return bool True if the user has permission, false otherwise.
         */
        public function get_availability_permissions_check($request)
        {
        }
    }
    /**
     * Extends the store add-to-cart API with booking related data.
     *
     * @version 3.11.0
     */
    class WC_Bookings_Cart_Store_API
    {
        /**
         * Bootstraps the class and hooks required data.
         */
        public function __construct()
        {
        }
        /**
         * Add cart item data.
         *
         * @throws \Automattic\WooCommerce\StoreApi\Exceptions\RouteException When invalid params are provided.
         *
         * @param array           $cart_item_data Cart item data.
         * @param WP_REST_Request $request Request data.
         * @return array $cart_item_data
         */
        public function add_cart_item_data(array $cart_item_data, \WP_REST_Request $request): array
        {
        }
        /**
         * Map store API to legacy posted data.
         *
         * @see wc_bookings_get_posted_data().
         *
         * @throws \Automattic\WooCommerce\StoreApi\Exceptions\RouteException When invalid params are provided.
         *
         * @param array              $params Params.
         * @param WC_Product_Booking $product Product.
         * @return array $store_api_cart_data
         */
        private function map_store_api_to_legacy_posted_data($params, $product): array
        {
        }
        /**
         * Validate store API params.
         *
         * @throws \Automattic\WooCommerce\StoreApi\Exceptions\RouteException When invalid params are provided.
         *
         * @param array              $params Params.
         * @param WC_Product_Booking $product Product.
         * @return void
         */
        private function validate_store_api_params($params, $product)
        {
        }
    }
    /**
     * This class is responsible for handling the cart item data display.
     * It replaces the default booking meta (Date/Time/Type) with a single combined format.
     */
    class WC_Bookings_Blocks_Cart_Item_Data
    {
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Remove the default WC_Booking_Cart_Manager::get_item_data callback
         * and replace it with our customized version.
         */
        public function replace_cart_item_data()
        {
        }
        /**
         * Get cart item data for display.
         * Replaces all booking meta with a single inline summary.
         *
         * @param array $other_data Other cart item data.
         * @param array $cart_item  The cart item.
         * @return array Modified cart item data.
         */
        public function get_item_data($other_data, $cart_item)
        {
        }
    }
    /**
     * WC_Bookings_Blocks_Collection_Services class.
     */
    class WC_Bookings_Blocks_Collection_Services
    {
        /**
         * The collection name.
         *
         * @var string
         */
        private $collection_name = 'woocommerce-bookings/product-collection/services';
        /**
         * The product type to filter by.
         *
         * @var string
         */
        private $product_type = \WC_Product_Bookable_Service::PRODUCT_TYPE;
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Update the query for the product query block in Editor.
         *
         * @param array           $query   Query args.
         * @param WP_REST_Request $request Request.
         * @return array Modified query args.
         */
        public function update_rest_query_in_editor($query, $request): array
        {
        }
        /**
         * Handle query vars for front-end product collection blocks.
         *
         * @param array    $query The WordPress WP_Query arguments.
         * @param WP_Block $block The block being rendered.
         * @return array Modified query args.
         */
        public function handle_query_vars($query, $block)
        {
        }
        /**
         * Check if the REST API request is for this collection in the editor.
         *
         * @param WP_REST_Request $request Request object.
         * @return bool
         */
        private function is_editor_request_valid($request): bool
        {
        }
        /**
         * Check if the Product Collection block is the current variation.
         *
         * @param WP_Block $block The block being rendered.
         * @return bool
         */
        private function is_valid_block($block): bool
        {
        }
        /**
         * Add product type filter to the tax query.
         *
         * @param array $query Query args.
         * @return array Modified query args.
         */
        private function add_product_type_filter(array $query): array
        {
        }
        /**
         * Ensure tax_query is a valid array.
         *
         * @param mixed $tax_query Existing tax_query value.
         * @return array Valid tax_query array.
         */
        private function ensure_tax_query($tax_query): array
        {
        }
        /**
         * Add product type filter to tax query.
         *
         * @param array $tax_query Existing tax_query array.
         * @return array Modified tax_query array.
         */
        private function add_product_type_tax_query(array $tax_query): array
        {
        }
        /**
         * Ensure tax_query has a relation when multiple queries exist.
         *
         * @param array $tax_query Existing tax_query array.
         * @return array Modified tax_query array with relation if needed.
         */
        private function ensure_tax_query_relation(array $tax_query): array
        {
        }
    }
    /**
     * This class is responsible for handling Gutenberg blocks.
     *
     * @version 3.11.0
     */
    class WC_Bookings_Blocks_Controller
    {
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Adds the add to cart actions.
         *
         * Hint: This is to backfill the add to cart templates on the legacy frontend form.
         */
        public function add_to_cart_actions()
        {
        }
        /**
         * Sets CSS color variables based on global styles.
         */
        public function set_blocks_color_variables()
        {
        }
        /**
         * Adds the booking additional product types to the product types.
         *
         * @param array $types The product types.
         * @return array The product types.
         */
        public function add_internal_booking_product_types($types)
        {
        }
        /**
         * Adds the booking additional product types to the product types.
         *
         * @param array $types The product types.
         * @return array The product types.
         */
        public function add_woocommerce_additional_product_types($types)
        {
        }
        /**
         * Removes the booking product type from the Editor preview.
         *
         * @internal
         */
        public function remove_booking_product_type_from_editor_preview()
        {
        }
        /**
         * Re-adds the booking product type after the Editor preview is hydrated.
         *
         * @internal
         */
        public function re_add_booking_product_type_after_editor_hydration()
        {
        }
        /**
         * Removes the legacy booking product type.
         *
         * @param array $types The product types.
         * @return array The product types.
         */
        public function remove_legacy_booking_product_type($types)
        {
        }
        /**
         * Adds the booking product type to the product type selector.
         *
         * @param array $types The product types.
         * @return array The product types.
         */
        public function add_booking_product_type($types)
        {
        }
        /**
         * Registers the data stores.
         *
         * @param array $data_stores The Woo data stores.
         * @return array
         */
        public function register_data_stores($data_stores)
        {
        }
        /**
         * Registers the blocks via metadata collection.
         */
        public function register_blocks()
        {
        }
        /**
         * Enqueues block scripts.
         */
        public function enqueue_block_scripts()
        {
        }
        /**
         * Returns the custom Add to Cart + Options template part path for events and services.
         *
         * @return string The template part path.
         */
        public function get_add_to_cart_with_options_template_part_path()
        {
        }
        /**
         * Modifies the Add to Cart + Options button so it opens a modal.
         *
         * @param string   $block_content The block content.
         * @param array    $block The full block, including name and attributes.
         * @param WP_Block $instance The block instance.
         * @return string The updated block content.
         */
        public function hook_add_to_cart_with_options_button_to_modal($block_content, $block, $instance)
        {
        }
        /**
         * Register product collection types.
         */
        private function register_product_collection_types()
        {
        }
        /**
         * Adds variations for the core/post-featured-image block.
         *
         * @param array         $variations Array of registered variations for a block type.
         * @param WP_Block_Type $block_type The full block type object.
         * @return array Array of variations with team member image variation added.
         */
        public function add_post_featured_image_variations($variations, $block_type)
        {
        }
    }
    /**
     * This class is responsible for handling the order confirmation template.
     */
    class WC_Bookings_Blocks_Order_Confirmation
    {
        /**
         * The single instance of the class.
         *
         * @var WC_Bookings_Blocks_Order_Confirmation|null
         * @since 3.5.0
         */
        private static $instance = \null;
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Public access to instance object
         *
         * @return WC_Bookings_Blocks_Order_Confirmation
         */
        public static function get_instance()
        {
        }
        /**
         * Remove the default WC_Booking_Order_Manager::booking_display callback
         * and replace it with our customized version.
         */
        public function replace_booking_display()
        {
        }
        /**
         * Display simplified booking information.
         * Format: "Booking #42 · Wednesday, January 8, 2026 at 12:00 pm with Marianne"
         *
         * @param int           $item_id The order item ID.
         * @param WC_Order_Item $item    The order item.
         * @param WC_Order      $order   The order.
         */
        public function booking_summary_display($item_id, $item, $order)
        {
        }
    }
    /**
     * WC_Bookings_Blocks_Team_Member_Block_Bindings class.
     */
    class WC_Bookings_Blocks_Team_Member_Block_Bindings
    {
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Register the block bindings source.
         */
        public function register_block_bindings_sources()
        {
        }
        /**
         * Gets value for Team Member block bindings source.
         *
         * @param array    $source_args    Array containing source arguments used to look up the override value.
         *                                 Example: array( 'field' => 'name' ).
         * @param WP_Block $block_instance The block instance.
         * @param string   $attribute_name The name of the target attribute (unused but required by interface).
         * @return mixed The value computed for the source.
         */
        public function get_team_member_value($source_args, $block_instance, $attribute_name)
        {
        }
    }
}
namespace WooCommerce\Bookings\Blocks {
    /**
     * This class is responsible for integrating a new payment method when using WooCommerce Blocks.
     */
    class WC_Bookings_Blocks_Integration
    {
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Add payment method block support
         */
        public function add_woocommerce_block_support()
        {
        }
        /**
         * Register payment method
         *
         * @return void
         */
        protected function register_payment_methods()
        {
        }
        /**
         * Register the payment requirements for blocks
         *
         * @return void
         */
        public function register_payment_requirements()
        {
        }
        /**
         * Adds booking availability payment requirement for carts that contain a product that requires it.
         *
         * @return array
         */
        public function add_booking_availability_payment_requirement()
        {
        }
        /**
         * Register payment method integration
         *
         * @param \Automattic\WooCommerce\Blocks\Payments\PaymentMethodRegistry $payment_method_registry Payment method registry object.
         */
        public function register_payment_method_integrations(\Automattic\WooCommerce\Blocks\Payments\PaymentMethodRegistry $payment_method_registry)
        {
        }
        /**
         * Include needed files
         */
        public function includes()
        {
        }
    }
    /**
     * Bookings Gateway method integration
     *
     * @since 0.1
     * @version 3.8.0
     */
    final class Bookings_Gateway extends \Automattic\WooCommerce\Blocks\Payments\Integrations\AbstractPaymentMethodType
    {
        /**
         * Payment method name defined by payment methods extending this class.
         *
         * @var string
         */
        protected $name = 'wc-bookings-gateway';
        /**
         * An instance of the Asset Api
         *
         * @var \Automattic\WooCommerce\Blocks\Assets\Api
         */
        private $asset_api;
        /**
         * Is the payment method enabled
         *
         * @var \Automattic\WooCommerce\Blocks\Assets\Api
         */
        private $enabled;
        /**
         * Constructor
         *
         * @param \Automattic\WooCommerce\Blocks\Assets\Api $asset_api An instance of Api.
         */
        public function __construct(\Automattic\WooCommerce\Blocks\Assets\Api $asset_api)
        {
        }
        /**
         * Initializes the payment method type.
         */
        public function initialize()
        {
        }
        /**
         * Returns if this payment method should be active. If false, the scripts will not be enqueued.
         *
         * @return boolean
         */
        public function is_active()
        {
        }
        /**
         * Returns an array of scripts/handles to be registered for this payment method.
         *
         * @return array
         */
        public function get_payment_method_script_handles()
        {
        }
        /**
         * Gets payment method supported features.
         *
         * @return array
         */
        public function get_supported_features()
        {
        }
        /**
         * Returns an array of key=>value pairs of data made available to the payment methods script.
         *
         * @return array
         */
        public function get_payment_method_data()
        {
        }
        /**
         * Get the registered Bookings gateway instance.
         *
         * @return \WC_Bookings_Gateway
         */
        private function get_gateway()
        {
        }
    }
}
namespace {
    /**
     * Compatibility base class for the booking product type.
     *
     * @version 3.11.0
     */
    class WC_Product_Booking_Compatibility extends \WC_Product
    {
    }
    /**
     * Class for the booking product type.
     *
     * @version 3.11.0
     */
    class WC_Product_Booking extends \WC_Product_Booking_Compatibility
    {
        /**
         * Stores product data.
         *
         * @var array
         */
        protected $defaults = array('apply_adjacent_buffer' => \false, 'availability' => array(), 'block_cost' => 0, 'buffer_period' => 0, 'calendar_display_mode' => 'always_visible', 'cancel_limit_unit' => 'month', 'cancel_limit' => 1, 'check_start_block_only' => \false, 'cost' => 0, 'default_date_availability' => '', 'display_cost' => '', 'duration_type' => 'fixed', 'duration_unit' => 'day', 'duration' => 1, 'enable_range_picker' => \false, 'first_block_time' => '', 'has_person_cost_multiplier' => \false, 'has_person_qty_multiplier' => \false, 'has_person_types' => \false, 'has_persons' => \false, 'has_resources' => \false, 'has_restricted_days' => \false, 'has_shared_resource_qty' => \false, 'max_date_unit' => 'month', 'max_date_value' => 12, 'max_duration' => 1, 'max_persons' => 1, 'min_date_unit' => 'day', 'min_date_value' => 0, 'min_duration' => 1, 'min_persons' => 1, 'person_types' => array(), 'pricing' => array(), 'qty' => 1, 'requires_confirmation' => \false, 'resource_label' => '', 'resource_base_costs' => array(), 'resource_block_costs' => array(), 'resource_ids' => array(), 'resources_assignment' => '', 'restricted_days' => '', 'user_can_cancel' => \false, 'booking_location' => '', 'booking_location_type' => '');
        /**
         * Stores availability rules once loaded.
         *
         * @var array
         */
        public $availability_rules = array();
        /**
         * Flag to toggle inclusion and exclusion of in-cart booking when checking booking slot availability.
         *
         * @used-by WC_Booking_Cart_Manager::validate_booking_order()
         *
         * @since 1.15.76
         *
         * @var bool TRUE will include in-cart booking and FALSE will exclude in-car booking. Default: TRUE
         */
        public $check_in_cart = \true;
        /**
         * Stores in cart confirmed/valid bookings.
         * Used in conjunction with $check_in_cart to check availability.
         *
         * @used-by WC_Booking_Cart_Manager::validate_booking_order()
         *
         * @since   1.15.76
         *
         * @var WC_Booking[]
         */
        public $confirmed_order_bookings = array();
        /**
         * Booking IDs excluded from an availability check.
         *
         * @since 3.11.0
         *
         * @var int[]
         */
        private $excluded_booking_ids = array();
        /**
         * Merges booking product data into the parent object.
         *
         * @param int|WC_Product|object $product Product to init.
         */
        public function __construct($product = 0)
        {
        }
        /**
         * Apply pending changes while exactly replacing Bookings-owned array values.
         *
         * @since 3.11.0
         */
        public function apply_changes()
        {
        }
        /**
         * Get the add to cart button text for the single page
         *
         * @return string
         */
        public function single_add_to_cart_text()
        {
        }
        /**
         * Get product price.
         *
         * @param string $context
         * @return string
         */
        public function get_price($context = 'view')
        {
        }
        /**
         * Get price HTML
         *
         * @param string $price
         * @return string
         */
        public function get_price_html($price = '')
        {
        }
        /**
         * Get internal type.
         *
         * @return string
         */
        public function get_type()
        {
        }
        /*
        |--------------------------------------------------------------------------
        | WC 3.0 Product Type Options functions
        |
        | WooCommerce 3.0 will call this function when determining if
        | the product type boxes are checked.
        |
        | This ensures forward compatibility if the data source is no longer post-meta
        |--------------------------------------------------------------------------
        */
        /**
         * @since 1.10.0
         * @return bool
         */
        public function is_wc_booking_has_persons()
        {
        }
        /**
         * @since 1.10.0
         * @return bool
         */
        public function is_wc_booking_has_resources()
        {
        }
        /*
        |--------------------------------------------------------------------------
        | CRUD Getters and setters.
        |--------------------------------------------------------------------------
        */
        /**
         * Get the qty available to book per block.
         *
         * @param  string $context
         * @return integer
         */
        public function get_qty($context = 'view')
        {
        }
        /**
         * Set qty.
         *
         * @param integer $value
         */
        public function set_qty($value)
        {
        }
        /**
         * Get has_persons.
         *
         * @param  string $context
         * @return boolean
         */
        public function get_has_persons($context = 'view')
        {
        }
        /**
         * Set has_persons.
         *
         * @param boolean $value
         */
        public function set_has_persons($value)
        {
        }
        /**
         * Get has_person_types.
         *
         * @param  string $context
         * @return boolean
         */
        public function get_has_person_types($context = 'view')
        {
        }
        /**
         * Set has_person_types.
         *
         * @param boolean $value
         */
        public function set_has_person_types($value)
        {
        }
        /**
         * Get has_person_qty_multiplier.
         *
         * @param  string $context
         * @return boolean
         */
        public function get_has_person_qty_multiplier($context = 'view')
        {
        }
        /**
         * Set has_person_qty_multiplier.
         *
         * @param boolean $value
         */
        public function set_has_person_qty_multiplier($value)
        {
        }
        /**
         * Get min_persons.
         *
         * @param  string $context
         * @return integer
         */
        public function get_min_persons($context = 'view')
        {
        }
        /**
         * Set min_persons.
         *
         * @param integer $value
         */
        public function set_min_persons($value)
        {
        }
        /**
         * Get max_persons.
         *
         * @param  string $context
         * @return integer
         */
        public function get_max_persons($context = 'view')
        {
        }
        /**
         * Set max_persons.
         *
         * @param integer $value
         */
        public function set_max_persons($value)
        {
        }
        /**
         * Get has_resources.
         *
         * @param  string $context
         * @return boolean
         */
        public function get_has_resources($context = 'view')
        {
        }
        /**
         * Set has_resources.
         *
         * @param boolean $value
         */
        public function set_has_resources($value)
        {
        }
        /**
         * Get has_shared_resource_qty.
         *
         * When enabled, "Max bookings per block" is a single allowance shared by every
         * resource of the product instead of each resource having its own allowance.
         *
         * @since 3.10.0
         *
         * @param  string $context Either 'view' or 'edit'.
         * @return boolean
         */
        public function get_has_shared_resource_qty($context = 'view')
        {
        }
        /**
         * Set has_shared_resource_qty.
         *
         * @since 3.10.0
         *
         * @param boolean $value Whether resources share the product's max bookings per block.
         */
        public function set_has_shared_resource_qty($value)
        {
        }
        /**
         * Get booking_location.
         *
         * @param  string $context Either 'view' or 'edit'.
         * @return string
         */
        public function get_booking_location($context = 'view')
        {
        }
        /**
         * Set booking_location.
         *
         * @param string $value The booking location.
         */
        public function set_booking_location($value)
        {
        }
        /**
         * Get booking_location_type.
         *
         * @param  string $context Either 'view' or 'edit'.
         * @return string
         */
        public function get_booking_location_type($context = 'view')
        {
        }
        /**
         * Set booking_location_type.
         *
         * @param string $value The booking location type.
         */
        public function set_booking_location_type($value)
        {
        }
        /**
         * Get duration.
         *
         * @param  string $context
         * @return integer
         */
        public function get_duration($context = 'view')
        {
        }
        /**
         * Set duration.
         *
         * @param integer $value
         */
        public function set_duration($value)
        {
        }
        /**
         * Get duration_unit.
         *
         * @param  string $context
         * @return string
         */
        public function get_duration_unit($context = 'view')
        {
        }
        /**
         * Set duration_unit.
         *
         * @param string $value
         */
        public function set_duration_unit($value)
        {
        }
        /**
         * Get duration_type.
         *
         * @param  string $context
         * @return string
         */
        public function get_duration_type($context = 'view')
        {
        }
        /**
         * Set duration_type.
         *
         * @param string $value
         */
        public function set_duration_type($value)
        {
        }
        /**
         * Get min_duration.
         * Returns 1 if duration is fixed on view context.
         *
         * @param  string $context
         * @return integer
         */
        public function get_min_duration($context = 'view')
        {
        }
        /**
         * Set min_duration.
         *
         * @param integer $value
         */
        public function set_min_duration($value)
        {
        }
        /**
         * Get max_duration.
         * Returns 1 if duration is fixed on view context.
         *
         * @param  string $context
         * @return integer
         */
        public function get_max_duration($context = 'view')
        {
        }
        /**
         * Set max_duration.
         *
         * @param integer $value
         */
        public function set_max_duration($value)
        {
        }
        /**
         * Get enable_range_picker.
         *
         * @param  string $context
         * @return boolean
         */
        public function get_enable_range_picker($context = 'view')
        {
        }
        /**
         * Set enable_range_picker.
         *
         * @param boolean $value
         */
        public function set_enable_range_picker($value)
        {
        }
        /**
         * Get display_cost.
         *
         * @param  string $context
         * @return string
         */
        public function get_display_cost($context = 'view')
        {
        }
        /**
         * Set display_cost.
         *
         * @param string $value
         */
        public function set_display_cost($value)
        {
        }
        /**
         * Get base_cost.
         *
         * @param  string $context
         * @return float
         * @deprecated since 1.10.9
         */
        public function get_base_cost($context = 'view')
        {
        }
        /**
         * Set base_cost.
         *
         * @param float $value
         * @deprecated since 1.10.9
         */
        public function set_base_cost($value)
        {
        }
        /**
         * Get block_cost.
         *
         * @param  string $context
         * @return float
         */
        public function get_block_cost($context = 'view')
        {
        }
        /**
         * Set block_cost.
         *
         * @param float $value
         */
        public function set_block_cost($value)
        {
        }
        /**
         * Get cost.
         *
         * @param  string $context
         * @return float
         */
        public function get_cost($context = 'view')
        {
        }
        /**
         * Set cost.
         *
         * @param float $value
         */
        public function set_cost($value)
        {
        }
        /**
         * Get has_person_cost_multiplier.
         *
         * @param  string $context
         * @return boolean
         */
        public function get_has_person_cost_multiplier($context = 'view')
        {
        }
        /**
         * Set has_person_cost_multiplier.
         *
         * @param boolean $value
         */
        public function set_has_person_cost_multiplier($value)
        {
        }
        /**
         * Get has_additional_costs.
         *
         * @param  string $context
         * @return boolean
         */
        public function get_has_additional_costs($context = 'view')
        {
        }
        /**
         * Set has_additional_costs.
         *
         * @param boolean $value
         */
        public function set_has_additional_costs($value)
        {
        }
        /**
         * Get min_date_value.
         *
         * @param  string $context
         * @return integer
         */
        public function get_min_date_value($context = 'view')
        {
        }
        /**
         * Set min_date_value.
         *
         * @param integer $value
         */
        public function set_min_date_value($value)
        {
        }
        /**
         * Get min_date_unit.
         *
         * @param  string $context
         * @return string
         */
        public function get_min_date_unit($context = 'view')
        {
        }
        /**
         * Set min_date_unit.
         *
         * @param string $value
         */
        public function set_min_date_unit($value)
        {
        }
        /**
         * Get max_date_value.
         *
         * @param  string $context
         * @return integer
         */
        public function get_max_date_value($context = 'view')
        {
        }
        /**
         * Set max_date_value.
         *
         * @param integer $value
         */
        public function set_max_date_value($value)
        {
        }
        /**
         * Get max_date_unit.
         *
         * @param  string $context
         * @return string
         */
        public function get_max_date_unit($context = 'view')
        {
        }
        /**
         * Set max_date_unit.
         *
         * @param string $value
         */
        public function set_max_date_unit($value)
        {
        }
        /**
         * Get resources_assignment.
         *
         * @param  string $context
         * @return string
         */
        public function get_resources_assignment($context = 'view')
        {
        }
        /**
         * Set resources_assignment.
         *
         * @param string $value
         */
        public function set_resources_assignment($value)
        {
        }
        /**
         * Get default_date_availability.
         *
         * @param  string $context
         * @return string
         */
        public function get_default_date_availability($context = 'view')
        {
        }
        /**
         * Set default_date_availability.
         *
         * @param string $value
         */
        public function set_default_date_availability($value)
        {
        }
        /**
         * Get requires_confirmation.
         *
         * @param  string $context
         * @return boolean
         */
        public function get_requires_confirmation($context = 'view')
        {
        }
        /**
         * Set requires_confirmation.
         *
         * @param boolean $value
         */
        public function set_requires_confirmation($value)
        {
        }
        /**
         * Get user_can_cancel.
         *
         * @param  string $context
         * @return boolean
         */
        public function get_user_can_cancel($context = 'view')
        {
        }
        /**
         * Set user_can_cancel.
         *
         * @param boolean $value
         */
        public function set_user_can_cancel($value)
        {
        }
        /**
         * Get buffer_period.
         *
         * @param  string $context
         * @return integer
         */
        public function get_buffer_period($context = 'view')
        {
        }
        /**
         * Set buffer_period.
         *
         * @param integer $value
         */
        public function set_buffer_period($value)
        {
        }
        /**
         * Get check_start_block_only.
         *
         * @param  string $context
         * @return bool
         */
        public function get_check_start_block_only($context = 'view')
        {
        }
        /**
         * Set check_start_block_only.
         *
         * @param bool $value
         */
        public function set_check_start_block_only($value)
        {
        }
        /**
         * Get calendar_display_mode.
         *
         * @param  string $context
         * @return string
         */
        public function get_calendar_display_mode($context = 'view')
        {
        }
        /**
         * Set calendar_display_mode.
         *
         * @param string $value
         */
        public function set_calendar_display_mode($value)
        {
        }
        /**
         * Get cancel_limit.
         *
         * @param  string $context
         * @return integer
         */
        public function get_cancel_limit($context = 'view')
        {
        }
        /**
         * Set cancel_limit.
         *
         * @param integer $value
         */
        public function set_cancel_limit($value)
        {
        }
        /**
         * Get cancel_limit_unit.
         *
         * @param  string $context
         * @return string
         */
        public function get_cancel_limit_unit($context = 'view')
        {
        }
        /**
         * Set cancel_limit_unit.
         *
         * @param string $value
         */
        public function set_cancel_limit_unit($value)
        {
        }
        /**
         * Get first_block_time.
         *
         * @param  string $context
         * @return string
         */
        public function get_first_block_time($context = 'view')
        {
        }
        /**
         * Set first_block_time.
         *
         * @param string $value
         */
        public function set_first_block_time($value)
        {
        }
        /**
         * Get resource_label.
         *
         * @param  string $context
         * @return string
         */
        public function get_resource_label($context = 'view')
        {
        }
        /**
         * Set resource_label.
         *
         * @param string $value
         */
        public function set_resource_label($value)
        {
        }
        /**
         * Get apply_adjacent_buffer.
         *
         * @param  string $context
         * @return bool
         */
        public function get_apply_adjacent_buffer($context = 'view')
        {
        }
        /**
         * Set apply_adjacent_buffer.
         *
         * @param bool $value
         */
        public function set_apply_adjacent_buffer($value)
        {
        }
        /**
         * Get availability.
         *
         * @param  string $context
         * @return array
         */
        public function get_availability($context = 'view')
        {
        }
        /**
         * Set availability.
         *
         * @param array $value
         */
        public function set_availability($value)
        {
        }
        /**
         * Get pricing_rules.
         *
         * @param  string $context
         * @return array
         */
        public function get_pricing($context = 'view')
        {
        }
        /**
         * Set pricing_rules.
         *
         * @param array $value
         */
        public function set_pricing($value)
        {
        }
        /**
         * Get person_types.
         *
         * @param  string $context
         * @return array
         */
        public function get_person_types($context = 'view')
        {
        }
        /**
         * Set person_types.
         *
         * @param array $value
         */
        public function set_person_types($value)
        {
        }
        /**
         * Add a Person_Type ID to the existing list of ids.
         *
         * @param WC_Product_Booking_Person_Type $person_type
         */
        public function add_person_type($person_type)
        {
        }
        /**
         * Get resource_ids.
         *
         * @param  string $context
         * @return array
         */
        public function get_resource_ids($context = 'view')
        {
        }
        /**
         * Set resource_ids.
         *
         * @param array $value
         */
        public function set_resource_ids($value)
        {
        }
        /**
         * Add resource ID to the existing list of ids.
         *
         * @param int $id
         */
        public function add_resource_id($id)
        {
        }
        /**
         * Get resource_base_costs.
         *
         * @param  string $context
         * @return array
         */
        public function get_resource_base_costs($context = 'view')
        {
        }
        /**
         * Set resource_base_costs.
         *
         * @param array $value
         */
        public function set_resource_base_costs($value)
        {
        }
        /**
         * Get resource_block_costs.
         *
         * @param  string $context
         * @return array
         */
        public function get_resource_block_costs($context = 'view')
        {
        }
        /**
         * Set resource_block_costs.
         *
         * @param array $value
         */
        public function set_resource_block_costs($value)
        {
        }
        /**
         * Get has_restricted_days.
         *
         * @param  string $context
         * @return string
         */
        public function get_has_restricted_days($context = 'view')
        {
        }
        /**
         * Set has_restricted_days.
         *
         * @param string $value
         */
        public function set_has_restricted_days($value)
        {
        }
        /**
         * Get restricted_days.
         *
         * @param  string $context
         * @return string
         */
        public function get_restricted_days($context = 'view')
        {
        }
        /**
         * Set restricted_days.
         *
         * @param string $value
         */
        public function set_restricted_days($value)
        {
        }
        /*
        |--------------------------------------------------------------------------
        | Conditionals
        |--------------------------------------------------------------------------
        |
        | Conditionals functions which return true or false.
        */
        /**
         * If this product class is a skeleton/place holder class (used for booking addons).
         *
         * @return boolean
         */
        public function is_skeleton()
        {
        }
        /**
         * If this product class is an addon for bookings.
         *
         * @return boolean
         */
        public function is_bookings_addon()
        {
        }
        /**
         * Extension/plugin/add-on name for the booking addon this product refers to.
         *
         * @return string
         */
        public function bookings_addon_title()
        {
        }
        /**
         * We want to sell bookings one at a time.
         *
         * @return boolean
         */
        public function is_sold_individually()
        {
        }
        /**
         * Bookings can always be purchased regardless of price.
         *
         * @return boolean
         */
        public function is_purchasable()
        {
        }
        /**
         * See if this booking product has persons enabled.
         *
         * @return boolean
         */
        public function has_persons()
        {
        }
        /**
         * See if this booking product has person types enabled.
         *
         * @return boolean
         */
        public function has_person_types()
        {
        }
        /**
         * See if persons affect the booked qty.
         *
         * @return boolean
         */
        public function has_person_qty_multiplier()
        {
        }
        /**
         * See if this booking product has resources enabled.
         *
         * @return boolean
         */
        public function has_resources()
        {
        }
        /**
         * See if "Max bookings per block" is shared by every resource of this product.
         *
         * When it is, the product quantity is a ceiling across all resources: bookings made
         * against any resource consume the same allowance. Each resource's own quantity and
         * its availability rules still apply on top of that ceiling.
         *
         * The setting is meaningless without resources, so it is only honoured when the
         * product actually has them.
         *
         * @since 3.10.0
         *
         * @return boolean
         */
        public function has_shared_resource_qty()
        {
        }
        /**
         * Test duration type.
         *
         * @param string $type
         * @return boolean
         */
        public function is_duration_type($type)
        {
        }
        /**
         * is_range_picker_enabled.
         *
         * @return bool
         */
        public function is_range_picker_enabled()
        {
        }
        /**
         * Requires time selection.
         *
         * @since 3.0.0
         *
         * @return bool
         */
        public function requires_time_selection()
        {
        }
        /**
         * Return if booking has extra costs.
         *
         * @return bool
         */
        public function has_additional_costs()
        {
        }
        /**
         * How resources are assigned.
         *
         * @param string $type
         * @return boolean customer or automatic
         */
        public function is_resource_assignment_type($type)
        {
        }
        /**
         * Checks if a product requires confirmation.
         *
         * @return bool
         */
        public function requires_confirmation()
        {
        }
        /**
         * See if the booking can be cancelled.
         *
         * @return boolean
         */
        public function can_be_cancelled()
        {
        }
        /**
         * See if dates are by default bookable.
         *
         * @return bool
         */
        public function get_default_availability()
        {
        }
        /**
         * See if this booking product has restricted days.
         *
         * @return boolean
         */
        public function has_restricted_days()
        {
        }
        /*
        |--------------------------------------------------------------------------
        | Non-CRUD getters
        |--------------------------------------------------------------------------
        */
        /**
         * Gets all formatted cost rules.
         *
         * @return array
         */
        public function get_costs()
        {
        }
        /**
         * Get Min date.
         *
         * @return array
         */
        public function get_min_date()
        {
        }
        /**
         * Get max date.
         *
         * @return array
         */
        public function get_max_date()
        {
        }
        /**
         * Get the Product buffer period setting.
         *
         * @since 1.9.13 introduced.
         * @return mixed $buffer_period
         */
        public function get_buffer_period_minutes()
        {
        }
        /**
         * Get available quantity.
         *
         * @since 1.9.13 introduced.
         * @param $resource_id
         * @return bool|int
         */
        public function get_available_quantity($resource_id = '')
        {
        }
        /**
         * Get person type by ID.
         *
         * @param  int $id
         * @return WP_Post object
         */
        public function get_person($id)
        {
        }
        /**
         * Get resource by ID.
         *
         * @param mixed $id ID of the resource or WC_Product_Booking_Resource object.
         * @return WC_Product_Booking_Resource object
         */
        public function get_resource($id)
        {
        }
        /**
         * Get resources objects.
         *
         * @return array Array of WC_Product_Booking_Resource objects.
         */
        public function get_resources()
        {
        }
        /**
         * Get rules in order of `override power`. The higher the index the higher the override power. Element at index 4 will
         * override element at index 2.
         *
         * Within priority the rules will be ordered top to bottom.
         *
         * @param int $for_resource The resource ID.
         * @return array  availability_rules {
         *    @type $resource_id => array {
         *
         *       The $order_index depicts the levels override. `0` Is the lowest. `1` overrides `0` and `2` overrides `1`.
         *       e.g. If monday is set to available in `1` and not available in `2` the results should be that Monday is
         *       NOT available because `2` overrides `1`.
         *       $order_index corresponds to override power. The higher the element index the higher the override power.
         *       @type $order_index => array {
         *          @type string $type   The type of range selected in admin.
         *          @type string $range  Depending on the type this depicts what range and if available or not.
         *          @type integer $priority
         *          @type string $level Global, Product or Resource
         *          @type integer $order The index for the order set in admin.
         *      }
         * }
         */
        public function get_availability_rules($for_resource = 0)
        {
        }
        /*
        |--------------------------------------------------------------------------
        | Block calculation functions. @todo move to own manager class
        |--------------------------------------------------------------------------
        */
        /**
         * Get the duration time interval in minutes.
         *
         * @return int duration in minutes.
         */
        public function get_time_interval_in_minutes()
        {
        }
        /**
         * Check resource availability for a booking within a given date range.
         *
         * This method validates whether a booking request (with quantity and optional resource)
         * can be accommodated between the specified start and end times. It accounts for:
         * - Resource capacity and product availability.
         * - Buffers and adjacent buffers (before/after bookings).
         * - Existing bookings in the date range (including pending ones at checkout).
         * - Person multipliers when enabled on the product.
         *
         * @since 1.15.76
         *        Added support for:
         *        - Using `check_in_cart` to consider bookings currently in the cart.
         *        - Including checkout bookings in availability checks when
         *          `$confirmed_checkout_order_item` is set.
         *
         * @param  int                              $start_date       Booking start timestamp.
         * @param  int                              $end_date         Booking end timestamp.
         * @param  int                              $qty              Quantity requested.
         * @param  WC_Product_Booking_Resource|null $booking_resource Optional. Resource being booked.
         *                                                            Defaults to `null` (product as a whole).
         * @param  array<int,int>                   $intervals        Optional. Array of [interval, base_interval]
         *                                                            in minutes. Defaults to product duration.
         *
         * @return int|string|WP_Error
         *     - int:    The minimum available quantity across checked blocks.
         *     - string: `'false'` (no availability for given block).
         *     - WP_Error: Error object if the requested quantity exceeds availability,
         *                 with translated error messages such as:
         *                 - "There is a maximum of X place(s) remaining"
         *                 - "There are a maximum of X places remaining on [date]"
         */
        public function get_blocks_availability($start_date, $end_date, $qty, $booking_resource = \null, $intervals = array())
        {
        }
        /**
         * Get booking blocks within a specified date range.
         *
         * Depending on the product duration unit, this delegates to:
         * - {@see get_blocks_in_range_for_day()}   for day-based durations,
         * - {@see get_blocks_in_range_for_month()} for month-based durations,
         * - {@see get_blocks_in_range_for_hour_or_minutes()} for hour/minute-based durations.
         *
         * Applies product settings such as slot size, intervals, and whether only the first block
         * of a booking should be checked. Optionally includes unavailable blocks for month units.
         *
         * @param  int   $start_date     Range start timestamp.
         * @param  int   $end_date       Range end timestamp.
         * @param  array $intervals      Optional. Array of [interval, base_interval] in minutes.
         *                               Defaults to [duration, duration] (or duration * 60 for hours).
         * @param  int   $resource_id    Resource ID to check availability against. Default 0.
         * @param  array $booked         Optional. Array of existing bookings (format depends on duration unit).
         * @param  bool  $get_past_times Whether to include past times when generating blocks. Default false.
         *
         * @return array<int,mixed> Associative array of blocks keyed by start timestamp.
         *     Returned structure depends on duration unit:
         *
         *     - Day duration:    [ timestamp => int $booked_count ]
         *     - Month duration:  [ timestamp => 0|'unavailable' ]
         *     - Hour/minute:     [ timestamp => int $booked_count ]
         */
        public function get_blocks_in_range($start_date, $end_date, $intervals = array(), $resource_id = 0, $booked = array(), $get_past_times = \false)
        {
        }
        /**
         * Generate day-based booking blocks within a date range.
         *
         * Iterates through each day in the range and marks it as available or partially booked
         * based on existing bookings, product availability rules, and per-resource capacity.
         *
         * Example:
         *   Given bookings spanning Jan 1–2 and Jan 3–4, with resource capacity = 2:
         *   Output blocks: {
         *     1735689600 => 0, // Jan 1, 2025 (available, no overlapping bookings)
         *     1735776000 => 1, // Jan 2, 2025 (1 booking counted, still available)
         *     1735862400 => 2, // Jan 3, 2025 (2 bookings counted, still under capacity)
         *   }
         *
         * @param  int   $start_date Starting timestamp for the range.
         * @param  int   $end_date   Ending timestamp for the range.
         * @param  int   $resource_id Resource ID to check availability against.
         * @param  array $bookings   Array of bookings, each entry formatted as:
         *                           [ start_timestamp, end_timestamp ].
         *
         * @return array<int,int> Associative array keyed by day start timestamp (midnight).
         *     Each value represents:
         *     @type int 0             Day is fully available.
         *     @type int $booked_count Number of bookings already placed for that day (still available
         *                             as long as count < resource capacity).
         */
        public function get_blocks_in_range_for_day($start_date, $end_date, $resource_id, $bookings)
        {
        }
        /**
         * Generate month-based booking blocks within a date range.
         *
         * Iterates month by month between the given start and end dates, creating
         * blocks that represent the first day of each month. Availability rules
         * are applied per month, and unavailable months can optionally be returned.
         *
         * Example:
         *   Input range: 2025-01-10 to 2025-04-05
         *   Output blocks: {
         *     1735689600 => 0,            // Jan 1, 2025 (available)
         *     1740787200 => 0,            // Mar 1, 2025 (available)
         *     1743465600 => 'unavailable' // Apr 1, 2025 (unavailable if include_unavailable = true)
         *   }
         *
         * @param  int  $start_date         Range start timestamp.
         * @param  int  $end_date           Range end timestamp.
         * @param  int  $resource_id        Resource ID to check availability against.
         * @param  bool $include_unavailable Whether to include unavailable months
         *                                   (marked as `'unavailable'`). Defaults to false.
         *
         * @return array<int,int|string> Associative array keyed by month start timestamp.
         *     Each value represents:
         *     @type int    0             Block available for booking.
         *     @type string 'unavailable' Block exists but is not bookable (only present if $include_unavailable is true).
         */
        public function get_blocks_in_range_for_month($start_date, $end_date, $resource_id, $include_unavailable = \false)
        {
        }
        /**
         * Get blocks in range for hour or minute duration unit.
         * For minutes and hours find valid blocks within THIS DAY ($check_date)
         *
         * @param $start_date
         * @param $end_date
         * @param $intervals
         * @param integer        $resource_id
         * @param $booked
         * @param $get_past_times
         *
         * @return array
         */
        public function get_blocks_in_range_for_hour_or_minutes($start_date, $end_date, $intervals, $resource_id, $booked, $get_past_times = \false)
        {
        }
        /**
         * From an array of minutes for a day remove all minutes before first block time.
         *
         * @since 1.10.0
         *
         * @param array $bookable_minutes
         * @param int   $first_block_minutes
         *
         * @return array $minutes
         */
        public function apply_first_block_time($bookable_minutes, $first_block_minutes)
        {
        }
        /**
         * Collapse an array of bookable minutes into contiguous start–end ranges.
         *
         * Iterates through a list of minute values and groups them into continuous blocks
         * without gaps. Each block is represented as a [start, end] pair. Blocks that
         * collapse to a single minute (same start and end) are removed.
         *
         * Example:
         *   Input:  [480, 481, 482, 500, 501]
         *   Output: [[480, 482], [500, 501]]
         *
         * @param  array<int> $bookable_minutes Sequential list of minute offsets from midnight.
         *
         * @return array<int,array{int,int}> List of [start_minute, end_minute] pairs
         *                                   representing contiguous bookable ranges.
         */
        public function get_bookable_minute_start_and_end($bookable_minutes)
        {
        }
        /**
         * Return an array of that is not available for booking.
         *
         * @since 1.9.13 introduced.
         *
         * @param array $booked. Pairs of booked slot start and end times.
         * @return array $booked_minutes
         */
        public function get_unavailable_minutes($booked)
        {
        }
        /**
         * @deprecated sine 1.9.15
         * @param $booked
         * @return mixed
         */
        public function get_unavailable_mintues($booked)
        {
        }
        /**
         * Generate bookable minute-level blocks for a given date.
         *
         * Determines available slots between a start and end date by:
         * - Iterating through bookable ranges (expressed in minutes).
         * - Applying product min/max booking constraints.
         * - Respecting buffer periods and adjacent buffer rules.
         * - Skipping already booked/unavailable minutes.
         * - Validating against product availability rules.
         *
         * Always returns an associative array of block start timestamps with
         * the number of already booked slots, to be used in further availability checks.
         *
         * @since 1.9.13
         *
         * @param int   $check_date            Base date (timestamp at midnight).
         * @param int   $start_date            Range start timestamp.
         * @param int   $end_date              Range end timestamp.
         * @param array $bookable_ranges       Array of [range_start_minutes, range_end_minutes].
         * @param array $intervals             Array with [interval, base_interval] in minutes.
         * @param int   $resource_id           Resource ID for availability check.
         * @param array $minutes_not_available Map of timestamps => booked count for already blocked minutes.
         * @param bool  $get_past_times        Whether to include past times. Default false.
         *
         * @return array<int,int> Associative array keyed by slot start timestamp (Unix).
         *     Each value represents:
         *     @type int $booked Number of slots already booked for this block.
         */
        protected function get_bookable_minute_blocks_for_date($check_date, $start_date, $end_date, $bookable_ranges, $intervals, $resource_id, $minutes_not_available, $get_past_times = \false)
        {
        }
        /**
         * Find available and booked blocks for the product (optionally scoped to a resource).
         *
         * @see wc_bookings_get_time_slots()
         *
         * @param  array<int> $blocks          Block start timestamps (Unix).
         * @param  int        $resource_id     Optional. Resource ID to check. Defaults to 0 (all resources).
         * @param  int        $from            Optional. Range start timestamp. Defaults to 0.
         * @param  int        $to              Optional. Range end timestamp. Defaults to 0.
         * @param  bool       $include_sold_out Whether to include sold-out blocks in the results. Defaults to false.
         *
         * @return array<int,array> Associative array keyed by block start timestamp. Each block contains:
         *     @type int   $booked      Number of slots already booked.
         *     @type int   $available   Number of slots still available.
         *     @type array $resources   (optional) Map of resource IDs to available quantities.
         *     @type bool  $old_availability True if the response contains stale availability (served while cache rebuilds).
         */
        public function get_time_slots($blocks, $resource_id = 0, $from = 0, $to = 0, $include_sold_out = \false)
        {
        }
        /**
         * Get available blocks within a range by checking existing bookings.
         *
         * @since 1.15.76 Passes the product's `check_in_cart` flag to include in-cart bookings;
         *                optionally merges pending checkout bookings when present to validate the same slot.
         *
         * @param  array $args {
         *     Arguments controlling the availability query.
         *
         *     @type array<int>     $blocks      Required. Block start timestamps (Unix).
         *     @type array<int,int> $intervals   Required. [interval, base_interval] in minutes.
         *                                       If empty, defaults to [default_interval, default_interval] where
         *                                       default_interval = duration (or duration*60 for hours).
         *     @type int            $resource_id Resource ID to check. 0 = aggregate/product-level availability.
         *     @type int            $from        Range start timestamp. Defaults to first element in $blocks.
         *     @type int            $to          Range end timestamp.   Defaults to last element in $blocks.
         *     @type bool           $include_filtered_out_blocks Internal. Preserve raw candidates for the
         *                                                       identity-aware shared extensive pass. Defaults to false.
         * }
         *
         * @return array<int,array> Associative array keyed by block start timestamp. Each block contains:
         *     @type int   $start      The block start timestamp.
         *     @type int   $end        The block end timestamp.
         *     @type int   $available  Number of slots available for this block.
         *     @type int   $booked     Number of slots already booked.
         *     @type array $resources  (optional) Map of resource IDs to available quantities, if resources are enabled.
         */
        public function get_available_blocks($args)
        {
        }
        /**
         * Get the availability of all resources
         *
         * @param string  $start_date
         * @param string  $end_date
         * @param integer $qty
         * @return array| WP_Error
         */
        public function get_all_resources_availability($start_date, $end_date, $qty)
        {
        }
        /**
         * Warm a single booking lookup covering this product and all of its resources.
         *
         * Availability is calculated one block / duration / resource combination at a time and each
         * of those combinations would otherwise query the bookings it needs on its own. Declaring the
         * whole window up-front lets them share one query for the rest of the request. This only
         * affects how many queries run — every check still resolves exactly the bookings it would
         * have fetched itself, and an uncovered check simply runs its own query.
         *
         * @since 3.10.0
         *
         * @param int $start_date Start of the range that will be checked, as a timestamp.
         * @param int $end_date   End of the range that will be checked, as a timestamp.
         * @return void
         */
        public function prefetch_bookings_for_availability($start_date, $end_date)
        {
        }
        /*
        |--------------------------------------------------------------------------
        | Deprecated Methods
        |--------------------------------------------------------------------------
        */
        /**
         * Get the minutes that should be available based on the rules and the date to check.
         *
         * The minutes are returned in a range from the start incrementing minutes right up to the last available minute.
         *
         * @deprecated since 1.9.14
         * @param array $rules
         * @param int   $check_date
         *
         * @return array $bookable_minutes
         */
        public function get_minutes_from_rules($rules, $check_date)
        {
        }
        /**
         * Find the minimum block's timestamp based on settings.
         *
         * @deprecated Replaced with wc_bookings_get_min_timestamp_for_day
         * @return int
         */
        public function get_min_timestamp_for_date($start_date)
        {
        }
        /**
         * Sort rules.
         *
         * @deprecated Replaced with WC_Product_Booking_Rule_Manager::sort_rules_callback
         */
        public function rule_override_power_sort($rule1, $rule2)
        {
        }
        /**
         * Return an array of resources which can be booked for a defined start/end date
         *
         * @deprecated Replaced with wc_bookings_get_block_availability_for_range
         * @param  string  $start_date
         * @param  string  $end_date
         * @param  string  $resource_id
         * @param  integer $qty being booked
         * @return bool|WP_Error if no blocks available, or int count of bookings that can be made, or array of available resources
         */
        public function get_available_bookings($start_date, $end_date, $resource_id = '', $qty = 1)
        {
        }
        /**
         * Get existing bookings in a given date range
         *
         * @since 1.15.76 Pass check_in_cart booking product property value.
         *              Include checkout bookings in the query, if $confirmed_checkout_order_item set.
         *              This help to check if the booking is available for the same time slot.
         *
         * @param integer $start_date
         * @param integer $end_date
         * @param int     $resource_id
         *
         * @return array
         */
        public function get_bookings_in_date_range($start_date, $end_date, $resource_id = \null)
        {
        }
        /**
         * Remove caller-owned bookings from an availability result.
         *
         * @since 3.11.0
         *
         * @param WC_Booking[] $bookings Bookings found for the range.
         * @return WC_Booking[]
         */
        private function exclude_bookings_from_availability($bookings)
        {
        }
        /**
         * Check a time against the time specific availability rules
         *
         * @param  string $block_start_time timestamp to check
         * @param  string $block_end_time   timestamp to check
         * @return bool available or not
         */
        public function check_availability_rules_against_time($block_start_time, $block_end_time, $resource_id)
        {
        }
        /**
         * Check a date against the availability rules
         *
         * @param  string $check_date date to check
         *
         * @return bool available or not
         */
        public function check_availability_rules_against_date($check_date, $resource_id)
        {
        }
        /**
         * Find available blocks and return HTML for the user to choose a block. Used in class-wc-bookings-ajax.php
         *
         * @param  array   $blocks
         * @param  array   $intervals
         * @param  integer $resource_id
         * @param  string  $from The starting date for the set of blocks
         * @return string
         */
        public function get_available_blocks_html($blocks, $intervals = array(), $resource_id = 0, $from = '')
        {
        }
        /**
         * Validate if the booking request data makes the product bookable.
         *
         * Returns true if the booking is valid, otherwise returns a WP_Error
         * describing the validation failure.
         *
         * @since   1.15.0
         * @version 3.11.0
         *
         * @param  array $data {
         *     Normalized booking data (from wc_bookings_get_posted_data()).
         *
         *     @type int             $_start_date    Start timestamp.
         *     @type int             $_end_date      End timestamp.
         *     @type string          $_date          Start date in Y-m-d format.
         *     @type string          $date           Localized, formatted start date.
         *     @type string          $_time          Raw start time (G:i), optional.
         *     @type string          $time           Localized, formatted start time, optional.
         *     @type int             $_duration      Booking duration (in blocks), required if duration type is customer.
         *     @type string          $_duration_unit Duration unit (e.g., minute, hour, day, month).
         *     @type int             $_resource_id   Resource ID, if applicable.
         *     @type int             $_qty           Quantity being booked.
         *     @type array<int,int>  $_persons       Map of person type IDs to quantities.
         * }
         *
         * @return true|WP_Error True if bookable, or WP_Error with a validation message.
         */
        public function is_bookable($data)
        {
        }
        /**
         * Compares the provided date with the booking max allowed date and returns
         * the earliest.
         *
         * @since 1.15.6
         * @param  int $end_date Date to compare.
         * @return int
         */
        private function get_max_allowed_date_into_the_future($end_date)
        {
        }
    }
    /**
     * WC_Product_Bookable_Event class.
     * @since 3.0.0
     * @version 3.11.0
     */
    class WC_Product_Bookable_Event extends \WC_Product_Booking
    {
        /**
         * Public constant to get the event product type.
         */
        const PRODUCT_TYPE = 'bookable-event';
        /**
         * This is the name of this object type.
         *
         * @var string
         */
        protected $object_type = 'product-booking';
        /**
         * Get internal type.
         *
         * @return string
         */
        public function get_type()
        {
        }
        /**
         * Get the add to cart button text.
         *
         * @return string
         */
        public function single_add_to_cart_text()
        {
        }
    }
    /**
     * WC_Product_Bookable_Service class.
     * @since 3.0.0
     * @version 3.11.0
     */
    class WC_Product_Bookable_Service extends \WC_Product_Booking
    {
        /**
         * Public constant to get the service product type.
         */
        const PRODUCT_TYPE = 'bookable-service';
        /**
         * This is the name of this object type.
         *
         * @var string
         */
        protected $object_type = 'product-booking';
        /**
         * Get internal type.
         *
         * @return string
         */
        public function get_type()
        {
        }
        /**
         * Service products are always virtual.
         *
         * @param string $context What the value is for. Valid values are view and edit.
         * @return bool
         */
        public function is_virtual($context = 'view')
        {
        }
        /**
         * Service products duration type is always fixed.
         *
         * @param string $context What the value is for. Valid values are view and edit.
         * @return string
         */
        public function get_duration_type($context = 'view')
        {
        }
        /**
         * Service products duration unit is always minutes.
         *
         * @param string $context What the value is for. Valid values are view and edit.
         * @return string
         */
        public function get_duration_unit($context = 'view')
        {
        }
        /**
         * Services are unavailable by default. They depend on the availability of the store.
         *
         * @param  string $context What the value is for. Valid values are view and edit.
         * @return string
         */
        public function get_default_date_availability($context = 'view')
        {
        }
        /**
         * Resources assignment is always customer.
         *
         * @param  string $context What the value is for. Valid values are view and edit.
         * @return string
         */
        public function get_resources_assignment($context = 'view')
        {
        }
        /**
         * Get the add to cart button text.
         *
         * @return string
         */
        public function single_add_to_cart_text()
        {
        }
        /**
         * Get the add to cart button text for the product loop.
         *
         * @return string
         */
        public function add_to_cart_text()
        {
        }
    }
    /**
     * Picker class
     */
    abstract class WC_Booking_Form_Picker
    {
        protected $booking_form;
        protected $args = array();
        /**
         * Get the label for the field based on booking durations and type
         * @param  string $text text to insert into label string
         * @return string
         */
        protected function get_field_label($text)
        {
        }
        /**
         * Get the min date in date picker format
         * @return string
         */
        protected function get_min_date()
        {
        }
        /**
         * Get the max date in date picker format
         * @return string
         */
        protected function get_max_date()
        {
        }
        /**
         * Return args for the field
         * @return array
         */
        public function get_args()
        {
        }
    }
    /**
     * Class dependencies
     */
    /**
     * Date Picker class
     *
     * @version 3.11.0
     */
    class WC_Booking_Form_Date_Picker extends \WC_Booking_Form_Picker
    {
        private $field_type = 'date-picker';
        private $field_name = 'start_date';
        /**
         * Constructor
         * @param WC_Booking_Form $booking_form The booking form which called this picker
         */
        public function __construct($booking_form)
        {
        }
        /**
         * Attempts to find what date to default to in the date picker
         * by looking at the fist available block. Otherwise, the current date is used.
         *
         * @return int Timestamp
         */
        public function get_default_date()
        {
        }
    }
    /**
     * Class dependencies
     */
    /**
     * Date and time Picker class
     */
    class WC_Booking_Form_Datetime_Picker extends \WC_Booking_Form_Date_Picker
    {
        private $field_type = 'datetime-picker';
        private $field_name = 'start_date';
        /**
         * Constructor
         * @param WC_Booking_Form $booking_form The booking form which called this picker
         */
        public function __construct($booking_form)
        {
        }
        public static function set_duration_to_day()
        {
        }
    }
    /**
     * Class dependencies
     */
    /**
     * Month Picker class
     */
    class WC_Booking_Form_Month_Picker extends \WC_Booking_Form_Picker
    {
        private $field_type = 'month-picker';
        private $field_name = 'start_date';
        /**
         * Constructor
         * @param object $booking_form The booking form which called this picker
         */
        public function __construct($booking_form)
        {
        }
        /**
         * Return the available blocks for this booking in array format
         *
         * @return array Array of blocks
         */
        public function get_booking_blocks()
        {
        }
        /**
         * Finds months which are fully booked already so they can be blocked on the date picker
         */
        protected function find_fully_booked_blocks()
        {
        }
    }
    /**
     * A WC_Booking_Form class file.
     *
     * @package WooCommerce Bookings
     * @version 3.7.0
     */
    /**
     * Booking form class
     *
     * @version 3.11.0
     */
    class WC_Booking_Form
    {
        /**
         * Booking product data.
         *
         * @var WC_Product_Booking
         */
        public $product;
        /**
         * Booking fields.
         *
         * @var array
         */
        private $fields;
        /**
         * Constructor
         *
         * @param WC_Product_Booking $product
         */
        public function __construct($product)
        {
        }
        /**
         * Booking form scripts
         */
        public function scripts()
        {
        }
        /**
         * Attempt to convert a date formatting string from PHP to Moment
         *
         * @deprecated 1.15.0
         * @param string $format
         * @return string
         */
        protected function convert_to_moment_format($format)
        {
        }
        /**
         * Prepare fields for the booking form
         */
        public function prepare_fields()
        {
        }
        /**
         * Reset fields array
         */
        public function reset_fields()
        {
        }
        /**
         * Add duration field to the form
         */
        private function duration_field()
        {
        }
        /**
         * Add persons field
         */
        private function persons_field()
        {
        }
        /**
         * Add resources field
         */
        private function resources_field()
        {
        }
        /**
         * Add the date field to the booking form
         */
        private function date_field()
        {
        }
        /**
         * Add Field
         *
         * @param  array $field
         * @return void
         */
        public function add_field($field)
        {
        }
        /**
         * Output the form - called from the add to cart templates
         */
        public function output()
        {
        }
        /**
         * Get posted form data into a neat array
         *
         * @param  array $posted
         * @return array
         */
        public function get_posted_data($posted = array())
        {
        }
        /**
         * Checks booking data is correctly set, and that the chosen blocks are indeed available.
         *
         * @deprecated 1.15.0
         * @param  array $data
         * @return bool|WP_Error on failure, true on success
         */
        public function is_bookable($data)
        {
        }
        /**
         * Get an array of formatted time values.
         *
         * @deprecated  1.15.0
         * @param  string $timestamp
         * @return array
         */
        public function get_formatted_times($timestamp)
        {
        }
        /**
         * Calculate costs from posted values.
         *
         * @deprecated 1.15.0
         * @param  array $posted
         * @return string cost
         */
        public function calculate_booking_cost($posted)
        {
        }
        /**
         * Builds the HTML to display the start time for hours/minutes.
         *
         * @since 1.13.0
         * @param  array   $blocks
         * @param  array   $intervals
         * @param  integer $resource_id
         * @param  integer $from The starting date for the set of blocks.
         * @param  integer $to
         *
         * @return string
         */
        public function get_start_time_html($blocks, $intervals = array(), $resource_id = 0, $from = 0, $to = 0)
        {
        }
        /**
         * Builds the data to display the end time for hours/minutes.
         *
         * @since 1.13.0
         * @param  array   $blocks
         * @param  string  $start_date_time Date of the start time.
         * @param  array   $intervals
         * @param  integer $resource_id
         * @param  integer $from The starting date for the set of blocks.
         * @param  integer $to
         * @param  bool    $check Whether to just check if there's any data at all.
         * @return array
         */
        public function get_end_times($blocks, $start_date_time = '', $intervals = array(), $resource_id = 0, $from = 0, $to = 0, $check = \false)
        {
        }
        /**
         * Renders the HTML to display the end time for hours/minutes.
         *
         * @since 1.13.0
         * @param  array   $blocks
         * @param  string  $start_date_time Date of the start time.
         * @param  array   $intervals
         * @param  integer $resource_id
         * @param  integer $from The starting date for the set of blocks.
         * @param  integer $to
         * @return string
         */
        public function get_end_time_html($blocks, $start_date_time = '', $intervals = array(), $resource_id = 0, $from = 0, $to = 0)
        {
        }
        /**
         * Find available blocks and return HTML for the user to choose a block. Used in class-wc-bookings-ajax.php.
         *
         * @param  array   $blocks
         * @param  array   $intervals
         * @param  integer $resource_id
         * @param  integer $from The starting date for the set of blocks.
         * @param  integer $to
         * @return string
         *
         * @since  1.10.7
         * @since  3.7.0 Added role="button" to the anchor tags.
         */
        public function get_time_slots_html($blocks, $intervals = array(), $resource_id = 0, $from = 0, $to = 0)
        {
        }
        /**
         * Warm the booking lookup shared by the availability checks the time dropdowns run.
         *
         * Rendering the start/end time dropdowns checks availability once per block, per selectable
         * duration and per resource, which otherwise means one booking query each. Declaring the
         * whole window covered by the blocks, plus the longest bookable duration, lets those checks
         * share a single query. It does not change what any of them return.
         *
         * @since 3.10.0
         *
         * @param array $blocks Blocks being rendered, keyed by start timestamp.
         * @param int   $from   The starting date for the set of blocks, when known.
         * @param int   $to     The ending date for the set of blocks, when known.
         * @return void
         */
        private function prefetch_bookings_for_blocks($blocks, $from = 0, $to = 0)
        {
        }
    }
    /**
     * WC_Booking_Cart_Manager class.
     *
     * Handles cart management for bookings.
     *
     * @version 3.11.0
     */
    class WC_Booking_Cart_Manager
    {
        /** Seconds to wait for another reservation request to finish. */
        private const RESERVATION_LOCK_TIMEOUT = 3;
        /** Seconds before a lock left by an interrupted request can be reclaimed. */
        private const RESERVATION_LOCK_TTL = 300;
        /** Seconds to let a linked checkout draft finish before removing its booking. */
        private const CHECKOUT_DRAFT_CLEANUP_DELAY = 300;
        /** Order item meta set until its cart booking is linked successfully. */
        private const BOOKING_LINK_ERROR_META = '_wc_bookings_cart_booking_link_error';
        /**
         * The class id used for identification in logging.
         *
         * @var string
         */
        public $id;
        /**
         * The logger instance.
         *
         * @var WC_Logger
         */
        public $log;
        /**
         * Singleton instance.
         *
         * @var WC_Booking_Cart_Manager
         */
        private static $instance;
        /**
         * Order item IDs whose cart bookings have not been linked.
         *
         * @var bool[]
         */
        private $booking_link_errors = array();
        /**
         * Get the singleton instance.
         *
         * @return WC_Booking_Cart_Manager
         */
        public static function get_instance()
        {
        }
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Add to cart for bookings
         */
        public function add_to_cart()
        {
        }
        /**
         * When a booking is added to the cart, validate it
         *
         * @param mixed $passed Boolean passed carry value.
         * @param mixed $product_id Product ID.
         * @param mixed $qty Quantity.
         * @return bool
         */
        public function validate_add_cart_item($passed, $product_id, $qty)
        {
        }
        /**
         * Should validate booking product order for booking for checkout block.
         *
         * @since 1.15.76
         *
         * @param WP_Error $errors
         * @param WC_Cart  $cart
         *
         * @return void
         */
        public function validate_booking_order_checkout_block_support(\WP_Error $errors, \WC_Cart $cart)
        {
        }
        /**
         * Should validate booking product order for booking for legacy checkout.
         *
         * @since 1.15.76
         *
         * @param WP_Error $errors
         *
         * @return void
         */
        public function validate_booking_order_legacy_checkout(array $data, \WP_Error $errors)
        {
        }
        /**
         * Should validate booking order items.
         *
         * Booking availability validates competing in-cart bookings while excluding the order's own holds.
         * This helps to reduce race conditions: https://github.com/woocommerce/woocommerce-bookings/issues/3324
         *
         * @since 1.15.76
         *
         * @return void
         */
        public function validate_booking_order(\WP_Error $errors, \WC_Cart $cart)
        {
        }
        /**
         * Reject a classic checkout whose booking disappeared before order linking.
         *
         * @param WC_Order $order Created order.
         * @throws Exception When a booking order item could not be linked.
         */
        public function validate_created_booking_order($order)
        {
        }
        /**
         * Reject a Store API checkout whose booking disappeared before order linking.
         *
         * @param WC_Order $order  Checkout order.
         * @param WP_Error $errors Checkout validation errors.
         */
        public function validate_booking_order_before_payment($order, $errors)
        {
        }
        /**
         * Delete a classic checkout order whose cart booking could not be linked.
         *
         * The order is already persisted when checkout validation fails. Removing it
         * prevents the customer from paying it later through the order-pay endpoint.
         *
         * @param WC_Order $order Failed checkout order.
         */
        public function delete_failed_booking_order($order)
        {
        }
        /**
         * Check whether any persisted order item failed to link its cart booking.
         *
         * @param WC_Order $order Order to inspect.
         * @return bool
         */
        private function order_has_booking_link_error($order)
        {
        }
        /**
         * Adjust the price of the booking product based on booking properties
         *
         * @param mixed $cart_item
         * @return array cart item
         *
         * @version  1.10.5
         */
        public function add_cart_item($cart_item)
        {
        }
        /**
         * Get data from the session and add to the cart item's meta
         *
         * @param mixed $cart_item
         * @param mixed $values
         * @return array cart item
         */
        public function get_cart_item_from_session($cart_item, $values, $cart_item_key)
        {
        }
        /**
         * Before delete
         *
         * @param string $cart_item_key identifying which item in cart.
         * @throws WC_Data_Exception When booking deletion fails outside lock contention.
         */
        public function cart_item_removed($cart_item_key)
        {
        }
        /**
         * Remove a temporary booking abandoned from a checkout draft.
         *
         * A short delay lets a checkout that linked the booking finish first. WooCommerce
         * may retain the draft line after the last cart item is removed, so the unchanged
         * booking association and draft status determine whether the hold is abandoned.
         *
         * @since 3.11.0
         *
         * @param mixed $booking_id    Booking ID.
         * @param mixed $order_id      Checkout-draft order ID.
         * @param mixed $order_item_id Linked order item ID.
         */
        public function remove_inactive_checkout_draft_booking($booking_id, $order_id, $order_item_id)
        {
        }
        /**
         * Schedule cleanup for a booking removed from a linked checkout draft.
         *
         * @param int $booking_id    Booking ID.
         * @param int $order_id      Checkout-draft order ID.
         * @param int $order_item_id Linked order item ID.
         */
        private function schedule_checkout_draft_cleanup($booking_id, $order_id, $order_item_id)
        {
        }
        /**
         * Remove the cart reference and scheduled cleanup for a handled booking.
         *
         * @param string $cart_item_key Removed cart item key.
         * @param int    $booking_id    Booking ID.
         */
        private function complete_cart_item_removal($cart_item_key, $booking_id)
        {
        }
        /**
         * Restore item
         *
         * @param string $cart_item_key identifying which item in cart.
         */
        public function cart_item_restored($cart_item_key)
        {
        }
        /**
         * Schedule booking to be deleted if inactive
         */
        public function schedule_cart_removal($booking_id)
        {
        }
        /**
         * Check for invalid bookings
         */
        public function cart_loaded_from_session()
        {
        }
        /**
         * Add posted data to the cart item
         *
         * @throws Exception If in-cart booking is not created.
         *
         * @param mixed $cart_item_meta Cart item meta.
         * @param mixed $product_id Product ID.
         * @return array $cart_item_meta
         */
        public function add_cart_item_data($cart_item_meta, $product_id)
        {
        }
        /**
         * Configure cart item data
         *
         * @since 3.0.0
         *
         * @throws Exception If in-cart booking is not created.
         *
         * @param array              $data Request args. @see wc_bookings_get_posted_data().
         * @param WC_Product_Booking $product Product.
         * @return array
         */
        public function configure_cart_item_data($data, $product)
        {
        }
        /**
         * Run a final availability operation while competing reservations are serialized.
         *
         * The lock deliberately omits timestamps: differently shaped ranges can overlap,
         * so product/resource is the narrowest key that preserves capacity correctness.
         *
         * @internal
         *
         * @since 3.11.0
         *
         * @param WC_Product_Booking $product  Booking product.
         * @param array              $data     Booking data.
         * @param callable           $callback Operation executed while holding the lock.
         * @return mixed
         * @throws WC_Data_Exception When the reservation lock cannot be acquired.
         */
        public function with_reservation_lock($product, $data, $callback)
        {
        }
        /**
         * Run an operation while a booking cannot be deleted or linked elsewhere.
         *
         * @param int      $booking_id Booking ID.
         * @param callable $callback   Operation executed while holding the lock.
         * @return mixed
         * @throws WC_Data_Exception When the lock cannot be acquired.
         */
        private function with_booking_transition_lock($booking_id, $callback)
        {
        }
        /**
         * Run an operation while holding each named database lock.
         *
         * @param string[] $lock_names Database lock names.
         * @param callable $callback   Operation executed while holding the locks.
         * @return mixed
         * @throws WC_Data_Exception When a lock cannot be acquired.
         */
        private function with_lock_names($lock_names, $callback)
        {
        }
        /**
         * Claim a primary-routed options row for a reservation capacity pool.
         *
         * The unique option name makes the INSERT atomic. A conditional UPDATE takes
         * over a row left behind by a request that ended before releasing its lock.
         *
         * @since 3.11.0
         *
         * @param string $lock_name Options-row lock name.
         * @param float  $deadline  Latest time at which to acquire the lock.
         * @return string|null Stored expiry token, or null when acquisition times out.
         */
        private function acquire_reservation_lock($lock_name, $deadline)
        {
        }
        /**
         * Release a reservation row only when it is still owned by this request.
         *
         * @since 3.11.0
         *
         * @param string $lock_name  Options-row lock name.
         * @param string $lock_token Expiry token returned by acquire_reservation_lock().
         */
        private function release_reservation_lock($lock_name, $lock_token)
        {
        }
        /**
         * Build the database lock names for every capacity pool used by a booking.
         *
         * @since 3.11.0
         *
         * @param WC_Product_Booking $product Booking product.
         * @param array              $data    Booking data.
         * @return string[]
         */
        private function get_reservation_lock_names($product, $data)
        {
        }
        /**
         * Create booking from cart data
         *
         * @param array  $data Booking Cart data.
         * @param int    $product_id Product ID.
         * @param string $status Booking status.
         * @return WC_Booking
         */
        private function create_booking_from_cart_data($data, $product_id, $status = 'in-cart')
        {
        }
        /**
         * Put meta data into format which can be displayed
         *
         * @param mixed $other_data
         * @param mixed $cart_item
         * @return array meta
         */
        public function get_item_data($other_data, $cart_item)
        {
        }
        /**
         * Store the displayed booking duration on a new order item.
         *
         * @since 3.11.0
         *
         * @param mixed $item          Order item.
         * @param mixed $cart_item_key Cart item key.
         * @param mixed $values        Cart item values.
         */
        public function add_order_item_duration($item, $cart_item_key, $values)
        {
        }
        /**
         * order_item_meta function
         *
         * @param mixed $item_id  Order item ID.
         * @param mixed $values   Order item data.
         * @param mixed $order_id Order ID.
         * @throws WC_Data_Exception When booking linking fails outside lock contention.
         */
        public function order_item_meta($item_id, $values, $order_id = 0)
        {
        }
        /**
         * Goes through all the bookings after the order is submitted via a checkout block to update their statuses.
         *
         * @param WC_Order $order The order represented.
         */
        public function review_items_on_block_checkout($order)
        {
        }
        /**
         * Makes sure we change the booking statuses to account for the new order statuses created by WooCommerce Blocks
         * and also account for products that might have the new in-cart status.
         *
         * @param mixed $order_id The order represented.
         */
        public function review_items_on_shortcode_checkout($order_id)
        {
        }
        /**
         * Redirects directly to the cart the products they need confirmation.
         *
         * @since 1.0.0
         * @version 1.10.8
         *
         * @param string $url URL.
         */
        public function add_to_cart_redirect($url)
        {
        }
        /**
         * Remove all bookings that requires confirmation.
         *
         * @return void
         */
        protected function remove_booking_that_requires_confirmation()
        {
        }
        /**
         * Removes all products when cart have a booking which requires confirmation
         *
         * @param  bool $passed
         * @param  int  $product_id
         *
         * @return bool
         */
        public function validate_booking_requires_confirmation($passed, $product_id)
        {
        }
        /**
         * Check to see if we should remove all In Cart bookings.
         *
         * @param  array $tool  The system tool that is being run.
         */
        public function maybe_remove_active_cart_sessions($tool)
        {
        }
        /**
         * Modify structured data for bookable-type products.
         *
         * @param  array      $data Structured data.
         * @param  WC_Product $product The product object.
         * @return array
         */
        public function structured_product_data($data, $product)
        {
        }
    }
    /**
     * WC_Booking_Checkout_Manager class.
     *
     * Handles checkout functionality for bookings.
     *
     * @version 3.10.0
     */
    class WC_Booking_Checkout_Manager
    {
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Removes all payment methods when cart has a booking that requires confirmation.
         *
         * @param  array $available_gateways
         * @return array
         */
        public function remove_payment_methods($available_gateways)
        {
        }
        /**
         * Always require payment if the order have a booking that requires confirmation.
         *
         * @param  bool $needs_payment
         * @param  WC_Cart $cart
         *
         * @return bool
         */
        public function booking_requires_confirmation($needs_payment, $cart)
        {
        }
        /**
         * Prevent payment while a linked booking awaits confirmation. Once confirmed,
         * a confirmation-required product still requires payment regardless of order total.
         *
         * @param  bool         $needs_payment       The WooCommerce value passed to the 'woocommerce_order_needs_payment' filter.
         * @param  object       $order               The WooCommerce order.
         * @param  array|string $valid_order_statuses Order statuses eligible for payment.
         * @return bool  the filtered value of $needs_payment
         */
        public function booking_order_requires_confirmation($needs_payment, $order, $valid_order_statuses)
        {
        }
        /**
         * Check whether any booking linked to an order awaits merchant confirmation.
         *
         * @since 3.10.0
         *
         * @param WC_Order $order Order object.
         * @return bool
         */
        private function order_has_pending_confirmation_booking($order)
        {
        }
    }
    /**
     * WC_Booking_Coupon class.
     *
     * Handles coupon functionality for bookings.
     *
     * @version 3.12.0
     */
    class WC_Booking_Coupon
    {
        /**
         * Holds discount amounts for each applied coupon. Keys are coupon code,
         * values are total discount amounts.
         *
         * @var array
         */
        private $amounts = array();
        /**
         * Holds booking items with coupon applied.
         *
         * @var array
         */
        private $already_applied = array();
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Adds a new coupon type that allows a discount per person booked.
         *
         * @param  array $types Coupon types
         * @return array        Altered coupon types with booking_person added
         */
        public function add_coupon_type($types)
        {
        }
        /**
         * Filter the list of coupon types that are valid for the cart.
         *
         * @param array $types Valid coupon types for the cart.
         *
         * @return array
         */
        public function cart_coupon_types($types)
        {
        }
        /**
         * Limit per-person coupons to booking products with persons.
         *
         * @since 3.11.0
         *
         * @param array     $items  Items eligible for the coupon.
         * @param WC_Coupon $coupon Coupon object.
         * @return array
         */
        public function coupon_items_to_apply($items, $coupon)
        {
        }
        /**
         * Allow WooCommerce to validate product restrictions for person coupons.
         *
         * @since 3.12.0
         *
         * @param array $types Product coupon types.
         * @return array
         */
        public function product_coupon_types($types)
        {
        }
        /**
         * Looks through our cart to see if we actually have a booking product
         * before applying our coupon.
         *
         * @param bool         $is_valid  Whether a given coupon is valid.
         * @param WC_Coupon    $wc_coupon Coupon object.
         * @param WC_Discounts $discount  Discounts object holding the cart or order being validated.
         *
         * @return bool Returns true if coupon is valid
         */
        public function is_coupon_valid($is_valid, $wc_coupon, $discount)
        {
        }
        /**
         * Calculate discount for specific cart item and coupon,
         * by multiplying person types by coupon discount amount.
         *
         * @param array     $cart_item  Cart item
         * @param WC_Coupon $coupon     Coupon
         * @return float Discount amount
         */
        protected function get_discount($cart_item, $coupon)
        {
        }
        /**
         * Get coupon discount amount.
         *
         * @param  array $discounts
         * @param  WC_Coupon $coupon
         * @return float
         */
        public function coupon_custom_discounts($discounts, $coupon)
        {
        }
        /**
         * Update coupon discount amount of an order item.
         *
         * @param float     $discount
         * @param float     $discounting_amount
         * @param object    $cart_item WC_Order_Item_Product
         * @param bool      $single
         * @param WC_Coupon $coupon
         *
         * @return float
         */
        public function update_coupon_discount_amount($discount, $discounting_amount, $cart_item, $single, $coupon)
        {
        }
        /**
         * Get coupon property with compatibility check on order getter introduced
         * in WC 3.0.
         *
         * @since 1.10.3
         *
         * @param WC_Coupon $coupon Coupon object.
         * @param string    $prop   Property name.
         *
         * @return mixed Property value
         */
        public static function get_coupon_prop($coupon, $prop)
        {
        }
    }
    /**
     * WC_Booking_Cron_Manager class.
     *
     * Handles cron jobs for bookings.
     *
     * @version 3.12.0
     */
    class WC_Booking_Cron_Manager
    {
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Send booking reminder email.
         *
         * @since 3.5.0 Added guard to skip reminders for bookings that have already started.
         *
         * @param int $booking_id Booking ID.
         */
        public function send_booking_reminder($booking_id)
        {
        }
        /**
         * Change the booking status if it wasn't previously cancelled
         */
        public function maybe_mark_booking_complete($booking_id)
        {
        }
        /**
         * Change the booking status to complete
         */
        public function mark_booking_complete($booking)
        {
        }
        /**
         * Remove inactive booking
         */
        public function remove_inactive_booking_from_cart($booking_id)
        {
        }
        /**
         * Process a batch of bookings to add missing attendance_status meta.
         */
        public function add_missing_attendance_status_batch()
        {
        }
    }
    /**
     * WC_Booking_Email_Manager class.
     *
     * Handles email sending for bookings.
     *
     * @version 3.11.0
     */
    class WC_Booking_Email_Manager
    {
        /**
         * Email group name for WooCommerce Bookings emails.
         *
         * @var string
         */
        const EMAIL_GROUP = 'wc-bookings';
        /**
         * Constructor sets up actions
         */
        public function __construct()
        {
        }
        /**
         * Include our mail templates
         *
         * @param  array $emails
         * @return array
         */
        public function init_emails($emails)
        {
        }
        /**
         * Register email groups for WooCommerce 10.3.0+
         *
         * @param array $email_groups Array of email groups.
         * @return array
         */
        public function register_email_groups($email_groups)
        {
        }
        /**
         * Attach the .ics files in the emails.
         *
         * @param  array  $attachments
         * @param  string $email_id
         * @param  mixed  $booking
         *
         * @return array
         */
        public function attach_ics_file($attachments, $email_id, $booking)
        {
        }
        /**
         * Custom template directory.
         *
         * @param  string $directory
         * @param  string $template
         *
         * @return string
         */
        public function template_directory($directory, $template)
        {
        }
        /**
         * Bookings email actions for transactional emails.
         *
         * @since   1.10.5
         * @version 1.10.5
         */
        public function bookings_email_actions()
        {
        }
        /**
         * Load the bookings email preview class.
         *
         * @since 2.2.7
         */
        public function load_bookings_email_preview()
        {
        }
        /**
         * Load block email editor support.
         *
         * @since 3.2.0
         */
        public function load_block_email_editor_support()
        {
        }
        /**
         * Register booking emails for the block email editor.
         *
         * @since 3.2.0
         *
         * @param array $emails Array of email IDs supported by block editor.
         * @return array
         */
        public function register_block_editor_emails($emails)
        {
        }
        /**
         * Get the list of booking email IDs.
         *
         * @since 3.2.0
         * @return array
         */
        private function get_booking_email_ids()
        {
        }
        /**
         * Add booking context data for email personalization.
         *
         * @since 3.2.0
         *
         * @param array    $context The context data.
         * @param WC_Email $email   The email object.
         * @return array
         */
        public function add_booking_context_data($context, $email)
        {
        }
        /**
         * Exclude booking emails from order details rendering in block emails.
         *
         * Booking emails use WC_Booking objects, not WC_Order objects, so the default
         * order details rendering would not work correctly.
         *
         * @since 3.2.0
         *
         * @param array $emails Array of email IDs that should not display order details.
         * @return array
         */
        public function exclude_booking_emails_from_order_details($emails)
        {
        }
        /**
         * Render booking details content for block emails.
         *
         * This is called via the woocommerce_email_general_block_content action
         * to render booking details in the email-content block.
         *
         * @since 3.2.0
         *
         * @param bool     $sent_to_admin Whether the email is sent to admin.
         * @param bool     $plain_text    Whether the email is plain text.
         * @param WC_Email $email         The email object.
         */
        public function render_booking_block_content($sent_to_admin, $plain_text, $email)
        {
        }
    }
    /**
     * WC_Booking_Form_Handler class.
     *
     * Handles frontend booking forms.
     *
     * @version 3.10.0
     */
    class WC_Booking_Form_Handler
    {
        /**
         * Hook in methods
         */
        public static function init()
        {
        }
        /**
         * Cancel a booking.
         */
        public static function cancel_booking()
        {
        }
    }
    /**
     * Compatibility class for WooCommerce Orders
     */
    class WC_Booking_Order_Compat
    {
        /**
         * @var \Automattic\WooCommerce\Utilities\OrderUtil object.
         */
        public static $order_util;
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Helper function to get whether custom order tables are enabled or not.
         *
         * @return bool
         */
        public static function is_cot_enabled()
        {
        }
        /**
         * Returns type of passed id, post or order object.
         *
         * @param int $order_id Order ID.
         *
         * @return bool Type of the order.
         */
        public static function is_shop_order($order_id)
        {
        }
        /**
         * Un-trash the order.
         *
         * @param int $order_id Order ID.
         *
         * @return bool Type of the order.
         */
        public static function untrash_post($order_id)
        {
        }
    }
    /**
     * WC_Booking_Order_Manager class.
     *
     * Handles order status transitions and keeps bookings in sync.
     *
     * @version 3.12.0
     */
    class WC_Booking_Order_Manager
    {
        /**
         * ID being synced.
         *
         * @var array
         */
        private static $syncing_ids = array();
        /**
         * Instance.
         *
         * @var WC_Booking_Order_Manager
         */
        private static $instance;
        /**
         * Get the instance.
         *
         * @return WC_Booking_Order_Manager
         */
        public static function instance()
        {
        }
        /**
         * Constructor sets up actions
         */
        public function __construct()
        {
        }
        /**
         * Show booking data if a line item is linked to a booking ID.
         */
        public function booking_display($item_id, $item, $order)
        {
        }
        /**
         * Is ID being synced?
         */
        private static function is_syncing($id)
        {
        }
        /**
         * Store ID on sync.
         */
        private static function syncing_start($id)
        {
        }
        /**
         * Remove ID on sync completion.
         */
        private static function syncing_stop($id)
        {
        }
        /**
         * Check whether the current request may cascade a trash or delete to a linked record.
         *
         * Requests without a user (cron, CLI) keep cascading as before. A logged-in user needs
         * the capability on the linked record itself, so editing bookings alone cannot remove
         * orders and vice versa.
         *
         * @since 3.11.0
         *
         * @param string $capability Meta capability, e.g. delete_shop_order or delete_wc_booking.
         * @param int    $id         ID of the linked order or booking.
         * @return bool
         */
        private static function can_sync($capability, $id)
        {
        }
        /**
         * Check restore authority, allowing userless reconciliation only in cron or CLI.
         *
         * @since 3.11.0
         *
         * @param string $capability Native restore capability.
         * @param int    $id         Order or booking ID.
         * @return bool
         */
        private static function can_restore($capability, $id)
        {
        }
        /**
         * Return the my-account page endpoint.
         *
         * @since 1.9.11
         * @return string
         */
        public function get_endpoint()
        {
        }
        /**
         * Add the bookings endpoint to the WooCommerce Account endpoints settings.
         *
         * @since 3.6.0
         * @param array $settings Existing settings.
         * @return array
         */
        public function add_endpoint_account_settings($settings)
        {
        }
        /**
         * Register endpoint-specific hooks.
         *
         * Deferred to 'init' so that the 'woocommerce_bookings_account_endpoint'
         * filter can be used from a theme's functions.php.
         *
         * @since 3.6.0
         */
        public function register_endpoint_hooks()
        {
        }
        /**
         * Register new endpoint to use inside My Account page.
         *
         * @since 1.9.11
         * @see https://developer.wordpress.org/reference/functions/add_rewrite_endpoint/
         */
        public function add_endpoint()
        {
        }
        /**
         * Add new query var.
         *
         * @since 1.9.11
         * @param array $vars
         * @return string[]
         */
        public function add_query_vars($vars)
        {
        }
        /**
         * Add bookings query var.
         *
         * @since 2.1.8
         *
         * @param array $vars Query vars.
         *
         * @return array altered query vars
         */
        public function add_bookings_woocommerce_query_vars($vars)
        {
        }
        /**
         * Change title for bookings endpoint.
         *
         * @since 2.1.8
         *
         * @return string Endpoint title.
         */
        public function change_endpoint_title()
        {
        }
        /**
         * Change endpoint title.
         *
         * @since 1.9.11
         * @param string $title
         * @return string
         */
        public function endpoint_title($title)
        {
        }
        /**
         * Insert the new endpoint into the My Account menu.
         *
         * @since 1.9.11
         * @param array $items
         * @return array
         */
        public function my_account_menu_item($items)
        {
        }
        /**
         * Enqueue scripts and variables for my account pages Bookings section.
         *
         * @since 1.15.18
         */
        public function my_account_scripts()
        {
        }
        /**
         * Endpoint HTML content.
         *
         * @param int $current_page
         *
         * @since    1.9.11
         * @version  1.10.8
         */
        public function endpoint_content($current_page)
        {
        }
        /**
         * Show a users bookings in My Account > Bookings.
         *
         * @param int $current_page
         *
         * @since 1.8.0
         * @since 1.13.0 Added Today's Bookings to My Account.
         * @since 3.3.0 Updated titles.
         */
        public function my_bookings($current_page = 0)
        {
        }
        /**
         * Called when an order is paid
         * @param  int $order_id
         */
        public function publish_bookings($order_id)
        {
        }
        /**
         * Called when an order goes from Processing or Completed to Pending.
         * Sets Bookings to status Unpaid.
         *
         * @since 1.15.14
         * @param  int $order_id Id of current order.
         * @return void
         */
        public function mark_as_unpaid_bookings($order_id)
        {
        }
        /**
         * Complete virtual booking orders,
         *
         * Hooked into a filter that changes the status for bookings.
         *
         * @param string        $order_status The order status.
         * @param int           $order_id     The order ID. Zero (0) for unsaved orders.
         * @param WC_Order|null $order        The order object. Optional. For backward compatibility this is optional
         *                                    but it is recommended to be passed in to account for unsaved orders.
         * @return string Modified order status.
         */
        public function complete_order($order_status, $order_id, $order = \null)
        {
        }
        /**
         * Treat virtual booking products like other virtual products that need no processing.
         *
         * @since 3.12.0
         * @param bool       $needs_processing Whether the item needs processing.
         * @param WC_Product $product          Product object.
         * @return bool
         */
        public function booking_order_item_needs_processing($needs_processing, $product)
        {
        }
        /**
         * Cancel bookings with order.
         * @param  int $order_id
         */
        public function cancel_bookings($order_id)
        {
        }
        /**
         * Cancel bookings when an order refunded partially.
         *
         * @since 1.10.0
         *
         * @version 1.10.0
         *
         * @see https://github.com/woocommerce/woocommerce-bookings/issues/817
         *
         * @param int $order_id Order ID.
         */
        public function cancel_bookings_for_partial_refunds($order_id)
        {
        }
        /**
         * Removes bookings related to the order being deleted.
         *
         * @param mixed $post_id ID of post being deleted
         */
        public function delete_post($post_id)
        {
        }
        /**
         * Trash bookings with orders
         *
         * @param mixed $post_id
         */
        public function trash_post($post_id)
        {
        }
        /**
         * Untrash bookings with orders
         *
         * @param mixed $post_id
         */
        public function untrash_post($post_id)
        {
        }
        /**
         * Keep the old status of bookings when untrashing a booking/order.
         *
         * @param string $new_status New status.
         * @param int    $post_id Post ID.
         * @param string $previous_status Previous status.
         *
         * @return string Updated status.
         */
        public function untrash_post_status($new_status, $post_id, $previous_status)
        {
        }
        /**
         * Clear cron hooks for booking
         *
         * @param mixed $post_id
         */
        function clear_cron_hooks($post_id)
        {
        }
        /**
         * Stops WC cancelling unpaid bookings orders.
         *
         * @param  bool $return
         * @param  object $order
         * @return bool
         */
        public function prevent_cancel($return, $order)
        {
        }
        /**
         * My Orders custom actions.
         *
         * Remove the pay button when the booking requires confirmation.
         * @hooked woocommerce_my_account_my_orders_actions
         * @param  array $actions
         * @param  WC_Order $order
         * @return array
         */
        public function my_orders_actions($actions, $order)
        {
        }
        /**
         * Sync booking customer ID when order customer ID is updated.
         * Compatible with both CPT and HPOS (High-Performance Order Storage).
         *
         * @since 3.5.0
         * @param WC_Order $order Order object.
         */
        public function sync_booking_customer_id($order)
        {
        }
        /**
         * Resolve WooCommerce Analytics customer ID before a booking is saved.
         *
         * Handles all scenarios: new bookings, customer_id changes (direct or
         * via order sync), and deferred resolution when woo_customer_id is still 0.
         *
         * @since 3.5.0
         * @param WC_Booking $booking Booking object.
         */
        public function sync_woo_customer_id_on_booking_save($booking)
        {
        }
        /**
         * Resolve the WordPress user ID for a WooCommerce Analytics customer ID.
         *
         * There is no public WooCommerce core helper for this reverse lookup, so
         * Bookings keeps the query in one place and reuses it across save/create flows.
         *
         * @param int $woo_customer_id WooCommerce Analytics customer ID.
         * @return int
         */
        public static function get_user_id_from_woo_customer_id(int $woo_customer_id): int
        {
        }
        /**
         * Attaches a newly created user (during checkout) to a booking.
         *
         * @since 3.5.0
         */
        public function attach_new_user($booking_id, $booking)
        {
        }
        /**
         * Look up an existing WooCommerce Analytics customer ID for a booking.
         *
         * Read-only by design: never writes to the `wc_customer_lookup` table.
         * Writes are owned by WooCommerce's own Analytics sync (queued via
         * Action Scheduler on order create/update). When the row does not exist
         * yet, the caller leaves woo_customer_id at 0 and the value is backfilled
         * by backfill_woo_customer_id_for_order() once WC fires
         * `woocommerce_analytics_update_order_stats`.
         *
         * @since 3.5.2
         * @param WC_Booking $booking Booking object.
         * @return int|false WC Analytics customer ID or false if not yet available.
         */
        private function lookup_woo_customer_id($booking)
        {
        }
        /**
         * Read-only lookup of the analytics customer ID for an order.
         *
         * Prefers the registered-user lookup; falls back to the guest-by-email
         * lookup when the order has no user_id but does have a billing email.
         *
         * @since 3.5.2
         * @param WC_Abstract_Order $order Order object.
         * @return int 0 when no row exists yet.
         */
        private function lookup_woo_customer_id_for_order(\WC_Abstract_Order $order)
        {
        }
        /**
         * Backfill woo_customer_id on bookings after WooCommerce Analytics syncs the order.
         *
         * `woocommerce_analytics_update_order_stats` fires after
         * OrdersStatsDataStore::update() has populated the `wc_customer_lookup` row
         * for the order. At that point the read-only lookup performed on booking
         * save can succeed, so we revisit any bookings on this order whose
         * woo_customer_id is still unresolved.
         *
         * @since 3.5.2
         * @param int $order_id Order ID.
         */
        public function backfill_woo_customer_id_for_order($order_id)
        {
        }
        /**
         * Cancel order with bookings.
         *
         * @param  int $booking_id
         */
        public function maybe_cancel_order($booking_id)
        {
        }
        /**
         * Track the cancel timestamp for a booking.
         *
         * @since 3.0.0
         *
         * @param  int $booking_id Booking ID.
         */
        public function track_cancel_timestamp($booking_id)
        {
        }
        /**
         * Mark the booking as unattended when it is cancelled.
         *
         * @param int $booking_id Booking ID.
         */
        public function mark_as_unattended($booking_id)
        {
        }
        /**
         * Sync order with bookings (paid) only in case where the booking is the only item in the order.
         *
         * @param  int $booking_id
         */
        public function maybe_process_order($booking_id)
        {
        }
        /**
         * Sync order with bookings (unpaid) only in case where the booking is the only item in the order.
         *
         * @param  int $booking_id
         */
        public function maybe_pending_order($booking_id)
        {
        }
        /**
         * Maybe set attendance status to attended when booking becomes complete.
         *
         * @param int        $booking_id Booking ID.
         * @param WC_Booking $booking    Booking object.
         */
        public function maybe_set_as_attended($booking_id, $booking)
        {
        }
        /**
         * Update booking's related order
         * This only applies if the order has only the booking as an item.
         *
         * @param  int $booking_id
         * @param  string $status
         */
        private function maybe_update_order($booking_id, $status)
        {
        }
        /**
         * Scheduling an event for a failed order if it has bookings.
         *
         * @since 1.11.0
         *
         * @param integer $order_id The order that failed.
         */
        public function schedule_failed_order_event($order_id)
        {
        }
        /**
         * Responding to scheduled event for a failed booking.
         *
         * @since 1.11.0
         *
         * @param integer $order_id The order that failed.
         * @param array   $booking_ids Attached to failed order.
         */
        public function handle_failed_order_scheduled_event($order_id = 0, $booking_ids = array())
        {
        }
        /**
         * Add edit order link for admin.
         * Add view my bookings link for customers.
         * Works only if order has booking(s).
         *
         * @param WC_Order $order WC_Order object.
         * @param bool     $sent_to_admin Whether to send email notification to admin or not.
         *
         * @since 1.15.57
         * @return void
         */
        public function add_admin_calender_link($order, $sent_to_admin)
        {
        }
        /**
         * Format booking ID meta.
         *
         * The booking ID meta is stored as an array, but meta data with scalar values are ignored in `WC_Order_Item::get_formatted_meta_data`.
         * This also prevents them from showing in the REST API.
         * This method ensures it's only exposed in REST API responses and remains hidden in all user-facing pages.
         *
         * @param array         $formatted_meta_data Formatted meta data.
         * @param WC_Order_Item $item Order item.
         * @return array
         */
        public function order_item_get_formatted_meta_data($formatted_meta_data, $item)
        {
        }
    }
    /**
     * WC_Booking_Privacy class.
     *
     * Handles privacy functionality for bookings (GDPR compliance).
     */
    class WC_Booking_Privacy extends \WC_Abstract_Privacy
    {
        /**
         * Constructor
         *
         */
        public function __construct()
        {
        }
        /**
         * Initial registration of privacy erasers and exporters.
         */
        public function register_erasers_exporters()
        {
        }
        /**
         * Returns a list of Bookings for the user.
         *
         * @param string  $email_address
         * @param int     $page
         *
         * @return array WC_Booking
         */
        protected function get_bookings($email_address, $page)
        {
        }
        /**
         * Gets the message of the privacy to display.
         *
         */
        public function get_privacy_message()
        {
        }
        /**
         * Handle exporting data for Bookings.
         *
         * @param string $email_address E-mail address to export.
         * @param int    $page          Pagination of data.
         *
         * @return array
         */
        public function bookings_data_exporter($email_address, $page = 1)
        {
        }
        /**
         * Finds and erases Bookings data by email address.
         *
         * @since 3.4.0
         * @param string $email_address The user email address.
         * @param int    $page  Page.
         * @return array An array of personal data in name value pairs
         */
        public function bookings_data_eraser($email_address, $page)
        {
        }
        /**
         * Handle eraser of data tied to Bookings
         *
         * @param WC_Booking $booking
         * @return array
         */
        protected function maybe_handle_booking($booking)
        {
        }
    }
    /**
     * Extends the store public API with booking related data for each bookingable product.
     *
     * @version 3.0.0
     */
    class WC_Booking_Store_API
    {
        /**
         * Bootstraps the class and hooks required data.
         */
        public function __construct()
        {
        }
    }
    /**
     * Helper cache class.
     *
     * @since 1.15.0
     * @version 3.11.0
     */
    class WC_Bookings_Cache
    {
        /**
         * Slot-cache entry limit for one product and key prefix.
         */
        const MAX_BOOKING_SLOTS_TRANSIENT_KEYS = 256;
        /**
         * Constructor.
         *
         * @since 1.15.0
         */
        public function __construct()
        {
        }
        /**
         * Number of active scopes that must read booking data from storage.
         *
         * @var int
         */
        private static $cache_read_bypass_depth = 0;
        /**
         * Determines if debug mode is enabled. Used to
         * get around stale cache when testing.
         *
         * @since 1.15.0
         * @version 3.12.0
         * @return bool
         */
        public static function is_debug_mode()
        {
        }
        /**
         * Gets the cache transient from db.
         *
         * @since 1.15.0
         * @param string $name Name of the cache.
         * @return mixed $data
         */
        public static function get($name = '')
        {
        }
        /**
         * Run an operation without reading request-local booking cache entries.
         *
         * Reservation locks serialize storage writes, but a request may have primed an
         * availability transient before acquiring its lock. Scoped bypassing ensures
         * the final check observes reservations created by the preceding lock holder.
         *
         * @internal
         *
         * @since 3.11.0
         *
         * @param callable $callback Operation that must read current booking data.
         * @return mixed
         */
        public static function without_cache_reads($callback)
        {
        }
        /**
         * Sets the cache transient to db.
         *
         * @since 1.15.0
         * @param string $name Name of the cache.
         * @param mixed  $data The data to be cached.
         * @param int    $expiration When to expire the cache.
         * @return void
         */
        public static function set($name = '', $data = \null, $expiration = \YEAR_IN_SECONDS)
        {
        }
        /**
         * Deletes the cache transient from db.
         *
         * @since 1.15.0
         * @param string $name Name of the cache.
         * @return void
         */
        public static function delete($name = '')
        {
        }
        /**
         * Register a slot-cache transient so it can be flushed for its products.
         *
         * Once a product and key prefix reaches the limit, registration replaces its oldest entry.
         * Existing oversized registries therefore stop growing without being drained in one request.
         *
         * @since 3.11.0
         *
         * @param int|int[] $bookable_product_ids Product ID or IDs the transient belongs to.
         * @param string    $transient_name       Transient name.
         * @return void
         */
        public static function register_booking_slots_transient($bookable_product_ids, $transient_name)
        {
        }
        /**
         * Resolve the registry budget a slot-cache transient name belongs to.
         *
         * @since 3.11.0
         *
         * @param string $transient_name Transient name.
         * @return string
         */
        private static function get_booking_slots_transient_prefix($transient_name)
        {
        }
        /**
         * Clears the cache transient from db.
         *
         * @since 1.15.0
         * @return void
         */
        public static function clear_cache()
        {
        }
        /**
         * Clears the transients when booking is edited.
         *
         * @param int $post_id
         * @return int $post_id
         */
        public static function clear_cache_on_save_post($post_id)
        {
        }
        /**
         * Delete Booking Related Transients
         */
        public static function delete_booking_transients()
        {
        }
        /**
         * Delete Booking Date Range Related Transients
         */
        public static function delete_booking_dr_transients()
        {
        }
        /**
         * Delete Booking Product Resources Related Transients
         */
        public static function delete_booking_ress_transients()
        {
        }
        /**
         * Delete Booking Product Resource Related Transients
         */
        public static function delete_booking_res_transients()
        {
        }
        /**
         * Delete Booking Product Resource Related Transients
         *
         * @return void
         * @since 1.15.17
         */
        public static function delete_booking_res_ids_transients()
        {
        }
        /**
         * Clear booking list of resources transient.
         *
         * @param  int|null $bookable_product_id
         * @return void
         * @since  1.15.17
         */
        public static function delete_booking_resources_transient($bookable_product_id = \null)
        {
        }
        /**
         * Clear booking slots transient.
         * If there are resources find connected products and clear their transients.
         *
         * @param  WC_Booking $booking
         * @since  1.15.18
         *
         * @throws Exception When a resource not found.
         */
        public static function flush_all_booking_connected_transients($booking)
        {
        }
        /**
         * Clear booking slots transients connected to a product.
         *
         * Flushes the product's own slot transients plus those of any product
         * sharing one of its resources.
         *
         * @since 3.12.0
         * @param int $bookable_product_id Bookable product ID.
         */
        public static function flush_product_connected_transients($bookable_product_id)
        {
        }
        /**
         * Clear booking slots transient.
         *
         * In contexts where we have a product id, it will only delete the specific ones.
         * However, not all contexts will have a product id, e.g. Global Availability.
         *
         * @param  int|null $bookable_product_id
         * @since  1.13.12
         */
        public static function delete_booking_slots_transient($bookable_product_id = \null)
        {
        }
    }
    /**
     * Gets bookings
     *
     * @package WooCommerce Bookings
     */
    /**
     * WC_Bookings_Controller class.
     *
     * @version 3.12.0
     */
    class WC_Bookings_Controller
    {
        /**
         * Return all bookings for a product in a given range
         *
         * @param integer $start_date Start date.
         * @param integer $end_date End date.
         * @param mixed   $product_or_resource_ids Product or resource IDs.
         * @param bool    $check_in_cart Check in cart.
         *
         * @return array Array of bookings.
         */
        public static function get_bookings_in_date_range($start_date, $end_date, $product_or_resource_ids = 0, $check_in_cart = \true)
        {
        }
        /**
         * Return all bookings and blocked availability for a product in a given range.
         *
         * @param integer $start_date              Start date.
         * @param integer $end_date                End date.
         * @param mixed   $product_or_resource_ids Product or resource IDs.
         * @param bool    $check_in_cart           Flag to Check whether include in-cart bookings in query.
         *
         * @return array
         */
        public static function get_events_in_date_range($start_date, $end_date, $product_or_resource_ids = 0, $check_in_cart = \true)
        {
        }
        /**
         * Return an array global_availability_rules
         *
         * @since 1.13.0
         *
         * @param  int $start_date Start date.
         * @param  int $end_date End date.
         *
         * @return array Days that are buffer days and therefor should be un-bookable
         */
        public static function get_global_availability_in_date_range($start_date, $end_date)
        {
        }
        /**
         * Return an array of un-bookable buffer days
         *
         * @since 1.9.13
         *
         * @param WC_Product_Booking|int $bookable_product Product or product ID.
         *
         * @return array Days that are buffer days and therefor should be un-bookable
         * @throws Exception When product is not a bookable product.
         */
        public static function find_buffer_day_blocks($bookable_product)
        {
        }
        /**
         * Return an array of un-bookable buffer days
         *
         * @since 1.9.13
         *
         * @param WC_Product_Booking|int $bookable_product  Product or product ID.
         * @param array                  $fully_booked_days Array of fully booked days.
         *
         * @return array Days that are buffer days and therefor should be un-bookable
         */
        public static function get_buffer_day_blocks_for_booked_days($bookable_product, $fully_booked_days)
        {
        }
        /**
         * Finds existing bookings for a product and its tied resources.
         *
         * @param WC_Product_Booking $bookable_product Bookable product.
         * @param int                $min_date         Min date.
         * @param int                $max_date         Max date.
         *
         * @return array Array of existing bookings.
         */
        public static function get_all_existing_bookings($bookable_product, $min_date = 0, $max_date = 0)
        {
        }
        /**
         * For hour bookings types check that the booking is past midnight and before start time.
         * This only works for the very next day after booking start.
         *
         * @since 1.10.7
         *
         * @param WC_Booking         $booking    Booking object.
         * @param WC_Product_Booking $product    Bookable product object.
         * @param string             $check_date Date to check.
         *
         * @return boolean True if booking is past midnight and before start time.
         */
        private static function is_booking_past_midnight_and_before_start_time($booking, $product, $check_date)
        {
        }
        /**
         * Finds months which are fully booked.
         *
         * @param WC_Product_Booking|int $bookable_product Bookable product.
         *
         * @return array Array of months which are fully booked, keyed by 'fully_booked_months'.
         * @throws Exception When the product is not a bookable product.
         */
        public static function find_booked_month_blocks($bookable_product)
        {
        }
        /**
         * Finds days which are partially booked & fully booked already.
         *
         * This function will get a general min/max Booking date, which initially is [today, today + 1 year]
         * Based on the Bookings retrieved from that date, it will shrink the range to the [Bookings_min, Bookings_max]
         * For the newly generated range, it will determine availability of dates by calling `wc_bookings_get_time_slots` on it.
         *
         * Depending on the data returned from it we set:
         * Fully booked days     - for those dates that there are no more slot available
         * Partially booked days - for those dates that there are some slots available
         *
         * @since   1.8.0
         * @version 3.8.0
         *
         * @param WC_Product_Booking|int $bookable_product    Bookable product.
         * @param int                    $min_date            Min date to check for bookings.
         * @param int                    $max_date            Max date to check for bookings.
         * @param string                 $default_date_format Date format to use for the returned array.
         * @param int                    $timezone_offset     Timezone offset in hours.
         * @param array                  $resource_ids        Array of resource ids.
         *
         * @return void|array Array of booked days, keyed by 'partially_booked_days' and 'fully_booked_days'.
         * @throws Exception When the product is not a bookable product.
         */
        public static function find_booked_day_blocks($bookable_product, $min_date = 0, $max_date = 0, $default_date_format = 'Y-n-j', $timezone_offset = 0, $resource_ids = array())
        {
        }
        /**
         * Updates existing available blocks according to the customer's local timezone.
         *
         * @param array $available_blocks Existing available block.
         * @param int   $timezone_offset  Difference between customer and store timezones, in seconds.
         *
         * @return array Updated available blocks.
         */
        public static function update_booking_availability_for_customers_timezone($available_blocks, $timezone_offset = 0)
        {
        }
        /**
         * Gets bookings for product ids and resource ids
         *
         * @param array   $ids       Array of booking IDs.
         * @param array   $status    Array of booking statuses.
         * @param integer $date_from Timestamp.
         * @param integer $date_to   Timestamp.
         *
         * @return array of WC_Booking objects.
         */
        public static function get_bookings_for_objects($ids = array(), $status = array(), $date_from = 0, $date_to = 0)
        {
        }
        /**
         * Gets bookings for product ids and resource ids
         *
         * @param array   $ids       Array of booking IDs.
         * @param array   $status    Array of booking statuses.
         * @param integer $date_from Timestamp.
         * @param integer $date_to   Timestamp.
         *
         * @return array of WC_Booking objects.
         */
        public static function get_bookings_for_objects_query($ids, $status, $date_from = 0, $date_to = 0)
        {
        }
        /**
         * Gets bookings for a product by ID
         *
         * @param int   $product_id The id of the product that we want bookings for.
         * @param array $status The status of the bookings we want to get.
         *
         * @return array of WC_Booking objects.
         */
        public static function get_bookings_for_product($product_id, $status = array('confirmed', 'paid'))
        {
        }
        /**
         * Get latest bookings
         *
         * @param int $number_of_items Number of objects returned (default to unlimited).
         * @param int $offset          The number of objects to skip (as a query offset).
         *
         * @return array of WC_Booking objects.
         */
        public static function get_latest_bookings($number_of_items = 10, $offset = 0)
        {
        }
        /**
         * Gets bookings for a user by ID
         *
         * @param int   $user_id    The id of the user that we want bookings for.
         * @param array $query_args The query arguments used to get booking IDs.
         *
         * @return array             Array of WC_Booking objects.
         */
        public static function get_bookings_for_user($user_id, $query_args = array())
        {
        }
        /*
        |--------------------------------------------------------------------------
        | Deprecated Methods
        |--------------------------------------------------------------------------
        */
        /**
         * Get the start and end times for and array of bookings
         *
         * @since       1.10.0
         *
         * @deprecated  should be removed after other parts of the is optimised to use an array of bookings objects
         *
         * @param WC_Booking[] $bookings_objects Array of bookings objects.
         * @param int          $resource_id      Whether to filter on a specific resource.
         *
         * @return array Array of start and end times
         */
        public static function get_bookings_star_and_end_times($bookings_objects, $resource_id = 0)
        {
        }
        /**
         * Gets bookings for a resource.
         *
         * @param int   $resource_id Resource ID.
         * @param array $status      Status.
         *
         * @return array array of WC_Booking objects.
         */
        public static function get_bookings_for_resource($resource_id, $status = array('confirmed', 'paid'))
        {
        }
        /**
         * Loop through given bookings to find those that are on or over lap the given date.
         *
         * @since 1.9.14
         *
         * @param array  $bookings array of WC_Booking objects.
         * @param string $date     Date in string format.
         *
         * @return array of booking ids
         */
        public static function filter_bookings_on_date($bookings, $date)
        {
        }
    }
    /**
     * Class that handles all cost calculations.
     *
     * @since 1.15.0
     * @version 3.11.0
     */
    class WC_Bookings_Cost_Calculation
    {
        public static $applied_cost_rules;
        /**
         * Normalize a stored value into a float that is safe to calculate with.
         *
         * Costs, person counts and durations are read straight from post meta, so a currency
         * symbol, a thousands separator or plain text can end up in them. Our own admin form
         * only runs person costs through wc_clean(), and any third party writing the meta can
         * store whatever it likes. PHP 8 raises a TypeError for arithmetic on a non-numeric
         * string, so every such value goes through here before it reaches a calculation.
         *
         * Uses wc_format_decimal() rather than a bare cast so that "NT$500" and "1,000" keep
         * their magnitude instead of collapsing to 0 and 1, matching how
         * WC_Product_Booking::set_cost() normalizes the same kind of input. Anything with no
         * number in it at all falls back to 0.
         *
         * @since 3.9.0
         * @param  mixed $value Value read from storage, posted data, or returned by a filter.
         * @return float
         */
        private static function to_number($value)
        {
        }
        /**
         * Calculate the total booking cost from normalized booking data.
         *
         * Validates that the product is bookable for the requested range, then applies:
         * base cost, per-block cost, person costs (base and per-block), resource costs,
         * and any matching cost rules (time ranges, months/weeks/days, custom dates,
         * persons, and blocks). Returns a WP_Error if validation fails (e.g., buffer-day
         * conflicts or unbookable range).
         *
         * @param  array              $data {
         *     Normalized booking data (typically from wc_bookings_get_posted_data()).
         *
         *     @type int            $_resource_id    Selected resource ID. Optional.
         *     @type int            $_start_date     Start timestamp (Unix).
         *     @type int            $_duration       Number of blocks requested. Optional.
         *     @type array<int,int> $_persons        Map of person type IDs to quantities. Optional.
         *     @type int            $_customer_id    Customer ID. Optional.
         *     @type string         $_date           Start date in Y-m-d format. (Needed for is_bookable check)
         *     @type string         $date            Localized, formatted start date. (Needed for is_bookable check)
         *     @type string         $_time          Raw start time (G:i). (Needed for is_bookable check)
         *     @type string         $time           Localized, formatted start time. (Needed for is_bookable check)
         * }
         * @param  WC_Product_Booking $product  The bookable product.
         *
         * @return float|int|WP_Error   Unformatted total cost on success, or WP_Error on failure.
         */
        public static function calculate_booking_cost($data, $product)
        {
        }
        /**
         * Apply a cost.
         *
         * @since 1.15.0
         * @param  float $base
         * @param  string $multiplier
         * @param  float $cost
         * @return float
         */
        public static function apply_cost($base, $multiplier, $cost)
        {
        }
        /**
         * Apply base cost.
         *
         * @since 1.15.0
         * @param  float $base
         * @param  string $multiplier
         * @param  float $cost
         * @param  string $rule_key Cost to apply the rule to - used for * and /
         * @return float
         */
        public static function apply_base_cost($base, $multiplier, $cost, $rule_key = '')
        {
        }
        /**
         * Gets a cost based on the base cost and default resource.
         *
         * @param  WC_Product_Booking $product
         * @return string
         */
        public static function calculated_base_cost($product)
        {
        }
    }
    /**
     * Class WC_Bookings_Encryption.
     *
     * @since 1.15.79
     * @version 3.11.0
     */
    class WC_Bookings_Encryption
    {
        const ENCRYPTION_MIGRATE_OPTION = 'wc_bookings_encrypt_tokens_migrated';
        /**
         * Holds instance of class.
         *
         * @var WC_Bookings_Encryption
         */
        protected static $instance = \null;
        /**
         * Encryption Key.
         *
         * @since 1.15.79
         * @var string
         */
        private $key;
        /**
         * Encryption Salt.
         *
         * @since 1.15.79
         * @var string
         */
        private $salt;
        /**
         * Class constructor.
         *
         * @since 1.15.79
         */
        public function __construct()
        {
        }
        /**
         * Perform migration of non-encrypted tokens
         *
         * @return void
         */
        public function migrate()
        {
        }
        /**
         * Returns true if `BOOKINGS_ENCRYPTION_KEY` constant is set.
         *
         * @since 2.0.5
         *
         * @return boolean
         */
        public function is_custom_bookings_enc_key_set()
        {
        }
        /**
         * Returns true if `BOOKINGS_ENCRYPTION_SALT` constant is set.
         *
         * @since 2.0.5
         *
         * @return boolean
         */
        public function is_custom_bookings_salt_key_set()
        {
        }
        /**
         * Returns true if both `BOOKINGS_ENCRYPTION_KEY` and `BOOKINGS_ENCRYPTION_SALT` constants are set.
         *
         * @since 2.0.5
         *
         * @return boolean
         */
        public function are_custom_bookings_auth_keys_set()
        {
        }
        /**
         * Get the Logged-in key for encryption.
         *
         * @since 1.15.79
         */
        private function get_default_key(): string
        {
        }
        /**
         * Get the SALT key for encryption.
         *
         * @since 1.15.79
         */
        private function get_default_salt(): string
        {
        }
        /**
         * Detect changed custom keys without keeping database copies of the keys.
         *
         * @since 3.11.0
         */
        private function maybe_invalidate_changed_auth_keys()
        {
        }
        /**
         * The encryption method.
         *
         * @param string $value Value to encryption.
         *
         * @since 1.15.79
         */
        public function encrypt(string $value): string
        {
        }
        /**
         * The decryption method.
         *
         * @param string $raw_value Encrypted value for decryption.
         * @since 1.15.79
         */
        public function decrypt(string $raw_value): string
        {
        }
        /**
         * Returns the single instance of class.
         *
         * @return WC_Bookings_Encryption
         */
        public static function instance()
        {
        }
    }
    /**
     * Google Calendar Connection.
     *
     * @version 3.12.0
     */
    class WC_Bookings_Google_Calendar_Connection extends \WC_Settings_API
    {
        const CONNECT_WOOCOMMERCE_URL = \WC_BOOKINGS_CONNECT_WOOCOMMERCE_URL;
        const TOKEN_TRANSIENT_TIME = 3500;
        /**
         * Prefix identifying encrypted custom OAuth client secrets.
         *
         * @since 3.11.0
         */
        const CLIENT_SECRET_ENCRYPTED_PREFIX = 'wc-bookings-encrypted-v1:';
        const DAYS_OF_WEEK = array(1 => 'monday', 2 => 'tuesday', 3 => 'wednesday', 4 => 'thursday', 5 => 'friday', 6 => 'saturday', 7 => 'sunday');
        /**
         * The single instance of the class.
         *
         * @var WC_Bookings_Google_Calendar_Connection|null
         * @since 1.13.0
         */
        protected static $_instance = \null;
        // phpcs:ignore PSR2.Classes.PropertyDeclaration.Underscore
        /**
         * Name for nonce to update calendar settings.
         *
         * @since 1.13.0
         * @var string self::NONCE_NAME
         */
        const NONCE_NAME = 'bookings_calendar_settings_nonce';
        /**
         * Action name for nonce to update calendar settings.
         *
         * @since 1.13.0
         * @var string self::NONCE_ACTION
         */
        const NONCE_ACTION = 'submit_bookings_calendar_settings';
        /**
         * If the service is currently is a poll operation with google.
         *
         * @var bool
         */
        protected $polling = \false;
        /**
         * Whether the last event lookup failed without Google reporting the event as missing.
         *
         * @since 3.12.0
         * @var bool
         */
        private $event_lookup_failed = \false;
        /**
         * Number of the scheduled sync retry that is running, 0 outside of a retry.
         *
         * @since 3.12.0
         * @var int
         */
        private $event_sync_retry = 0;
        /**
         * Whether the running sync may only update an existing event, never create one.
         *
         * @since 3.12.0
         * @var bool
         */
        private $event_sync_update_only = \false;
        /**
         * WooCommerce Logger instance.
         *
         * @var WC_Logger_Interface
         */
        protected $log;
        /**
         * Google Service from SDK.
         *
         * @var \Automattic\WooCommerce\Bookings\Vendor\Google\Service\Calendar
         */
        protected $service;
        /**
         * Google Client ID.
         *
         * @var string
         */
        private $client_id;
        /**
         * Google Client Secret.
         *
         * @var string
         */
        private $client_secret;
        /**
         * Google Calendar Redirect URI.
         *
         * @var string
         */
        private $redirect_uri_custom;
        /**
         * Google Calendar Page Token.
         *
         * @var string
         */
        private $page_token;
        /**
         * Name for the option holds information about how many failures in a row we had.
         * If the options is not defined then we assume it is 0.
         *
         * @since 1.15.15
         */
        const POLLER_BACKOFF_FAILURE_STATE = 'wc_bookings_gcalendar_poller_failure_state';
        /**
         * Name of the admin notice raised when the calendar list cannot be fetched.
         *
         * @since 3.9.0
         */
        const CALENDAR_FETCH_ERROR_NOTICE = 'bookings_google_calendar_fetch_calendars_error';
        /**
         * Number of minutes between poller fetches.
         *
         * @since 1.15.15
         */
        const CALENDAR_DEFAULT_POLLER_RATE = 5;
        /**
         * Number of events requested from Google in one API call.
         *
         * @since 3.11.0
         */
        const CALENDAR_EVENTS_PAGE_SIZE = 250;
        /**
         * Number of API pages processed by one scheduled poll.
         *
         * @since 3.11.0
         */
        const CALENDAR_SYNC_MAX_PAGES = 4;
        /**
         * Option holding the page a poll stopped at, so the next one resumes there.
         *
         * @since 3.11.0
         */
        const CALENDAR_PAGE_TOKEN_OPTION = 'wc_bookings_gcalendar_sync_page_token';
        /**
         * Action that syncs a booking again after its Google event could not be looked up.
         *
         * @since 3.12.0
         */
        const EVENT_SYNC_RETRY_HOOK = 'woocommerce_bookings_retry_google_calendar_sync';
        /**
         * How many times a booking sync is retried after a failed Google event lookup.
         *
         * @since 3.12.0
         */
        const EVENT_SYNC_MAX_RETRIES = 3;
        /**
         * Poller retry delay progress when we experience fetch error.
         *
         * @since 1.15.15
         */
        const CALENDAR_EXPONENTIAL_BACKOFF_RATES = array(
            self::CALENDAR_DEFAULT_POLLER_RATE,
            self::CALENDAR_DEFAULT_POLLER_RATE * 1,
            // Schedule first retry using the same time.
            self::CALENDAR_DEFAULT_POLLER_RATE * 2,
            self::CALENDAR_DEFAULT_POLLER_RATE * 4,
            self::CALENDAR_DEFAULT_POLLER_RATE * 8,
        );
        /**
         * Limit for the poller retry.
         * Even if we will have more consecutive failures we will use this as a maximum value.
         *
         * @since 1.15.15
         */
        const CALENDAR_POLLER_MAX_RETRY_RATE = 4;
        // Maximum index for CALENDAR_EXPONENTIAL_BACKOFF_RATES.
        /**
         * Init and hook in the integration.
         */
        private function __construct()
        {
        }
        /**
         * Show warning to reconnect if the `BOOKINGS_ENCRYPTION_KEY` and `BOOKINGS_ENCRYPTION_SALT` constants
         * are newly added.
         *
         * @since 2.0.5
         */
        public function show_auth_keys_changed_notice()
        {
        }
        /**
         * Hide calendar fetch error notice if not on the bookings settings page.
         *
         * @since 3.0.0
         */
        public function handle_calendar_fetch_error_notice()
        {
        }
        /**
         * Process Calendar redirect
         *
         * @since 1.11
         */
        public function process_calendar_redirect()
        {
        }
        /**
         * Enqueues admin js scripts.
         *
         * @since 1.3.12
         */
        public function enqueue_scripts()
        {
        }
        /**
         * Get configured calendar id.
         *
         * @return string
         */
        protected function get_calendar_id()
        {
        }
        /**
         * Get configured sync preference
         *
         * @return string
         */
        protected function get_sync_preference()
        {
        }
        /**
         * Returns true if event deletion is preferred when the
         * corresponding store availability is deleted, false
         * otherwise.
         *
         * @return boolean
         */
        protected function is_event_deletion_preferred()
        {
        }
        /**
         * Returns true if overwriting the Google Event Description
         * is allowed, false otherwise.
         *
         * @since 1.15.49
         * @return bool
         */
        protected function is_event_description_overwritable()
        {
        }
        /**
         * Get WC_Logger if enabled.
         *
         * @return WC_Logger|null
         */
        protected function get_logger()
        {
        }
        /**
         * Logging method.
         *
         * @param string $message Log message.
         * @param array  $context Optional. Additional information for log handlers.
         * @param string $level   Log level.
         *                        Available options: 'emergency', 'alert',
         *                        'critical', 'error', 'warning', 'notice',
         *                        'info' and 'debug'.
         *                        Defaults to 'info'.
         * @param bool   $show_notice Whether to show a notice to the user.
         */
        private function log($message, $context = array(), $level = \WC_Log_Levels::NOTICE, $show_notice = \false)
        {
        }
        /**
         * $this->id changed so we need to migrate any old settings that may exist.
         */
        private function maybe_migrate_old_settings()
        {
        }
        /**
         * Replace a plaintext client secret in a settings option with ciphertext.
         *
         * @since 3.11.0
         *
         * @param string $option_name   Settings option name.
         * @param mixed  $client_secret Stored client secret.
         * @return string Encrypted secret, or an empty string when it cannot be protected.
         */
        private function migrate_client_secret_option($option_name, $client_secret)
        {
        }
        /**
         * Encrypt a custom OAuth client secret for storage.
         *
         * @since 3.11.0
         *
         * @param string $client_secret Plaintext secret.
         * @return string
         */
        private function encrypt_client_secret($client_secret)
        {
        }
        /**
         * Decrypt a custom OAuth client secret immediately before use.
         *
         * @since 3.11.0
         *
         * @param mixed $client_secret Stored secret.
         * @return string
         */
        private function decrypt_client_secret($client_secret)
        {
        }
        /**
         * Returns WC_Bookings_Google_Calendar_Settings singleton
         *
         * Ensures only one instance of WC_Bookings_Google_Calendar_Settings is created.
         *
         * @since 1.13.0
         * @return WC_Bookings_Google_Calendar_Connection - Main instance.
         */
        public static function instance()
        {
        }
        /**
         * Update settings values from form.
         *
         * @since 1.13.0
         */
        public function maybe_save_settings()
        {
        }
        /**
         * Generates full HTML form for the instance settings.
         *
         * @since 1.13.0
         */
        public static function generate_form_html()
        {
        }
        /**
         * Set a delay for the next poller request in case we had an error on the previous request.
         *
         * This is a very simplified exponential backoff request function. It is simplified because we don't do
         * active re-tries in the case of a failure. This means that we don't need advance algorithm but just
         * an exponentially growing set of retry times. We also don't need to add the random amount to ensure
         * out of sync requests between sites. The sites poller is already out of sync by default.
         *
         * @since 1.15.15
         */
        protected function poller_error_backoff_engine($request_status)
        {
        }
        /**
         * Returns value of poller interval that will be used for next poll.
         *
         * @return integer Poller interval in seconds.
         *
         * @since 1.15.15
         */
        public function get_poller_interval()
        {
        }
        /**
         * Attempt to schedule/unschedule poller once AS is ready.
         */
        public function maybe_schedule_poller()
        {
        }
        /**
         * Schedule a recurring Action Scheduler every 6 months to cleanup
         * the option `woocommerce_bookings_cleanup_deleted_events` which
         * stores an array of deleted options.
         */
        public function maybe_schedule_deleted_events_cleanup()
        {
        }
        /**
         * Deletes deleted events before 'today' from option `woocommerce_bookings_deleted_global_availability`.
         * 'today' is the day when this method is scheduled to run.
         */
        public function cleanup_deleted_events()
        {
        }
        /**
         * Registers booking object lifecycle events.
         * Needs to happen after init because of the dynamic hook names.
         */
        public function register_booking_update_hooks()
        {
        }
        /**
         * Syncs bookings to Google Calendar that are made using COD
         * payment method.
         *
         * @param int        $booking_id Booking id.
         * @param WC_Booking $booking    Booking object.
         * @see https://github.com/woocommerce/woocommerce-bookings/issues/2755#issuecomment-829304974
         */
        public function sync_cod_booking($booking_id, $booking)
        {
        }
        /**
         * Returns an authorized API client.
         *
         * @since 1.16.02 Decryption of access token before setting it to client.
         * @return \Automattic\WooCommerce\Bookings\Vendor\Google\Client the authorized client object
         */
        protected function get_client()
        {
        }
        /**
         * Activates Google Integration without api.woocommerce.com/integrations if site was previously setup with it's own app.
         *
         * @param \Automattic\WooCommerce\Bookings\Vendor\Google\Client $client Google Client App.
         */
        public function maybe_enable_legacy_integration(\Automattic\WooCommerce\Bookings\Vendor\Google\Client $client)
        {
        }
        public function is_using_wooconnect_method()
        {
        }
        public function is_using_custom_connection()
        {
        }
        /**
         * Set a new sync token (used when Google returns one)
         *
         * @param string $sync_token Google sync token.
         */
        protected function set_sync_token($sync_token)
        {
        }
        /**
         * Get sync token.
         *
         * @return string
         */
        protected function get_sync_token()
        {
        }
        /**
         * This is called by API requesters. We are not doing it on the constructor
         * as it takes some time to init the service, so only init when necessary.
         */
        protected function maybe_init_service()
        {
        }
        /**
         * Get Google Events (paginated)
         *
         * @param array $params Current parameters.
         * @return array
         */
        protected function get_event_page($params = array())
        {
        }
        /**
         * Get a list of calendar events.
         *
         * @return array
         */
        public function get_events()
        {
        }
        /**
         * Remember the page the next poll should resume from.
         *
         * @since 3.11.0
         *
         * @param string $page_token Next page token, or an empty string once the listing is complete.
         * @param array  $params     Request parameters the token belongs to.
         */
        private function set_page_token($page_token, $params)
        {
        }
        /**
         * Get the page a previous poll stopped at, for the calendar it was listing.
         *
         * @since 3.11.0
         *
         * @return array|false
         */
        private function get_page_cursor()
        {
        }
        /**
         * Method for polling data from Google API.
         *
         * Sync path: Google API -> Bookings
         * The sync path Bookings -> Google API will be handled by `action` and `filter` events.
         */
        public function poll_google_calendar_events()
        {
        }
        /**
         * Initialize integration settings form fields.
         *
         * @return void
         */
        public function init_form_fields()
        {
        }
        /**
         * Resolve the remote form-field values and display a fetch error raised too late for `admin_notices`.
         *
         * WC_Admin_Notices snapshots its notice list on `admin_print_styles`, and
         * this settings tab renders from the page body, after `admin_notices` has
         * already run. A fetch error raised while resolving would therefore sit in
         * the option until the next admin page load. Resolving here, before any of
         * the form markup is emitted, lets that error be displayed on the request
         * that caused it; the stored notice still shows, with its dismiss link, on
         * subsequent loads.
         *
         * @since 3.9.0
         */
        protected function maybe_output_late_calendar_fetch_notice()
        {
        }
        /**
         * Resolve the form-field values that require a Google API call.
         *
         * The calendar_id options (a calendarList.list call) and the
         * client_id/client_secret disabled flag (is_using_wooconnect_method(),
         * which can trigger a token refresh) are deliberately left empty/false
         * by init_form_fields(), which runs on `init` for every request. They are
         * resolved here instead, from admin_options(), so only a render of the
         * settings tab pays for them.
         *
         * @since 3.9.0
         */
        protected function resolve_remote_form_field_values()
        {
        }
        /**
         * Generate Settings HTML.
         *
         * Extends base class html generation to add 'display_check' parameter to each
         * field. 'display_check', is a callable that enables/disables the display of
         * the field.
         *
         * @param array $form_fields (default: array()) Array of form fields.
         * @param bool  $echo Echo or return.
         * @return string the html for the settings
         * @since  1.15.0
         */
        public function generate_settings_html($form_fields = array(), $echo = \true)
        {
        }
        /**
         * Whether or not connection settings should be displayed.
         *
         * Checks Google connection status so connection settings can be hidden
         * if there is no active action.
         *
         * @return bool Whether or not connection settings should be displayed.
         * @since  1.15.0
         */
        protected function display_connection_settings()
        {
        }
        /**
         * Return the Google auth URL for starting a connection.
         *
         * @since 3.2.0
         * @return string
         */
        public function get_connection_auth_url()
        {
        }
        /**
         * Whether the connection is active and has valid tokens.
         *
         * @since 3.2.0
         * @return bool
         */
        public function has_valid_connection()
        {
        }
        /**
         * Disconnect the current Google Calendar integration.
         *
         * @since 3.2.0
         * @return bool
         */
        public function disconnect()
        {
        }
        /**
         * Get the list of available Google calendars.
         *
         * @since 3.2.0
         * @return array Array of calendars with 'id', 'name', and 'primary' keys, or empty array on error.
         */
        public function get_calendars()
        {
        }
        /**
         * Get the currently selected calendar ID.
         *
         * @since 3.2.0
         * @return string The selected calendar ID, or empty string if none selected.
         */
        public function get_selected_calendar_id()
        {
        }
        /**
         * Set the selected calendar ID.
         *
         * @since 3.2.0
         * @param string $calendar_id The calendar ID to save.
         * @return bool True on success, false on failure.
         */
        public function set_selected_calendar_id($calendar_id)
        {
        }
        /**
         * Generate the Google Calendar Authorization field for self-owned Google Calendar apps.
         *
         * @param  mixed $key
         * @param  array $data
         *
         * @return string
         */
        public function generate_custom_google_calendar_authorization_html($key, $data)
        {
        }
        /**
         * Returns an array to feed the calendar list select input
         *
         * @return array
         */
        private function get_calendar_list_options()
        {
        }
        /**
         * Validate the Google Calendar Authorization field.
         * Really it performs the oauth_logout if the disconnect button is clicked.
         *
         * @param string $key Current Key.
         * @param string $value Value of field.
         *
         * @return string
         */
        public function validate_google_calendar_authorization_field($key, $value)
        {
        }
        /**
         * Validate the the id and secret.
         * If the integration is active and one of the fields was deleted then it means that we should log-out.
         *
         * @param string $key Current Key.
         * @param string $value Value of field.
         *
         * @return string
         */
        public function validate_text_field($key, $value)
        {
        }
        /**
         * Encrypt a submitted client secret and preserve it when the masked field is blank.
         *
         * @since 3.11.0
         *
         * @param string $key   Field key.
         * @param mixed  $value Submitted value.
         * @return string
         */
        public function validate_client_secret_field($key, $value)
        {
        }
        /**
         * Generate an empty password field without exposing the stored value.
         *
         * @since 3.11.0
         *
         * @param string $key  Field key.
         * @param array  $data Field data.
         * @return string
         */
        public function generate_client_secret_html($key, $data)
        {
        }
        /**
         * Generate the Google Calendar Authorization field.
         *
         * @param  mixed $key
         * @param  array $data
         *
         * @return string
         */
        public function generate_google_calendar_authorization_html($key, $data)
        {
        }
        /**
         * Admin Options.
         */
        public function admin_options()
        {
        }
        /**
         * OAuth Logout.
         *
         * @return void
         */
        protected function oauth_logout()
        {
        }
        /**
         * Process the oauth redirect.
         *
         * @return void
         */
        public function oauth_redirect()
        {
        }
        /**
         * Update option keys on auth redirect.
         *
         * @since 2.0.5
         */
        private function maybe_update_keys_on_auth_redirect()
        {
        }
        /**
         * OAuth Logout.
         *
         * @return bool
         */
        protected function oauth_logout_custom()
        {
        }
        /**
         * Process the oauth redirect.
         *
         * @return void
         */
        public function oauth_redirect_custom()
        {
        }
        /**
         * Sync new Booking with Google Calendar.
         *
         * @param int $booking_id Booking ID.
         *
         * @return void
         */
        public function sync_new_booking($booking_id)
        {
        }
        /**
         * Check if Google Calendar settings are supplied and we're authenticated.
         *
         * @return bool True is calendar is set, false otherwise.
         */
        public function is_integration_active()
        {
        }
        /**
         * Sync an event resource with Google Calendar.
         * https://developers.google.com/google-apps/calendar/v3/reference/events
         *
         * @param   int $booking_id Booking ID.
         * @return  object|boolean Parsed JSON data from the http request or false if error
         */
        public function get_event_resource($booking_id)
        {
        }
        /**
         * Sync Booking with Google Calendar.
         *
         * @param  int $booking_id Booking ID.
         */
        public function sync_booking($booking_id)
        {
        }
        /**
         * Schedule another sync of a booking whose Google event could not be looked up.
         *
         * @since 3.12.0
         *
         * @param int $booking_id Booking ID.
         */
        private function schedule_booking_sync_retry($booking_id)
        {
        }
        /**
         * Drop the retries still waiting for a booking that has been synced in the meantime.
         *
         * @since 3.12.0
         *
         * @param int $booking_id Booking ID.
         */
        private function unschedule_booking_sync_retries($booking_id)
        {
        }
        /**
         * Sync a booking again after its Google event could not be looked up.
         *
         * @since 3.12.0
         *
         * @param int $booking_id Booking ID.
         * @param int $attempt    Number of this retry.
         */
        public function retry_booking_sync($booking_id, $attempt = 1)
        {
        }
        /**
         * Sync Booking with Google Calendar when booking is edited.
         *
         * @param  int $booking_id Booking ID.
         *
         * @return void
         */
        public function sync_edited_booking($booking_id)
        {
        }
        /**
         * Sync Booking with Google Calendar when booking is rescheduled via the
         * admin reschedule flow. Mirrors sync_edited_booking but skips the
         * meta-box-nonce gate, which is not present on the reschedule AJAX request.
         *
         * @param int $booking_id Booking ID.
         * @return void
         */
        public function sync_rescheduled_booking($booking_id)
        {
        }
        /**
         * Sync Booking with Google Calendar when booking is untrashed.
         *
         * @param  int $booking_id Booking ID.
         *
         * @return void
         */
        public function sync_untrashed_booking($booking_id)
        {
        }
        /**
         * Remove/cancel the booking in Google Calendar
         *
         * @param  int $booking_id Booking ID.
         *
         * @return void
         */
        public function remove_booking($booking_id)
        {
        }
        /**
         * Maybe remove / sync booking based on booking status.
         *
         * @param int $booking_id Booking ID.
         *
         * @return void
         */
        public function maybe_sync_booking_from_status($booking_id)
        {
        }
        /**
         * Get booking's post statuses considered as paid.
         *
         * @return array
         */
        private function get_booking_is_paid_statuses()
        {
        }
        /**
         * Is edited from post.php's meta box.
         *
         * @return bool
         */
        public function is_edited_from_meta_box()
        {
        }
        /**
         * Maybe delete Global Availability from Google.
         *
         * @param WC_Global_Availability $availability Availability to delete.
         */
        public function delete_global_availability(\WC_Global_Availability $availability)
        {
        }
        /**
         * Sync Global Availability to Google.
         *
         * @param WC_Global_Availability $availability Global Availability object.
         */
        public function sync_global_availability(\WC_Global_Availability $availability)
        {
        }
        /**
         * Sanitize a recurring rule to make sure the date + time formats match up.
         *
         * @param string                     $rrule Recurring Rule.
         * @param \Automattic\WooCommerce\Bookings\Vendor\Google\Service\Calendar\Event $event Google calendar event object.
         *
         * @return string
         */
        private function maybe_sanitize_rrule($rrule, \Automattic\WooCommerce\Bookings\Vendor\Google\Service\Calendar\Event $event)
        {
        }
        /**
         * Update global availability object with data from google event object.
         *
         * @param WC_Global_Availability     $availability WooCommerce Global Availability object.
         * @param \Automattic\WooCommerce\Bookings\Vendor\Google\Service\Calendar\Event $event Google calendar event object.
         *
         * @return bool
         */
        private function update_global_availability_from_event(\WC_Global_Availability $availability, \Automattic\WooCommerce\Bookings\Vendor\Google\Service\Calendar\Event $event)
        {
        }
        /**
         * Update google event object with data from global availability object.
         *
         * @param \Automattic\WooCommerce\Bookings\Vendor\Google\Service\Calendar\Event $event Google calendar event object.
         * @param WC_Global_Availability     $availability WooCommerce Global Availability object.
         *
         * @return bool
         */
        private function update_event_from_global_availability(\Automattic\WooCommerce\Bookings\Vendor\Google\Service\Calendar\Event $event, \WC_Global_Availability $availability)
        {
        }
        /**
         * Renew access token with refresh token. Must pass through api.woocommerce.com/integrations middleware.
         *
         * @param string       $refresh_token Refresh Token.
         * @param \Automattic\WooCommerce\Bookings\Vendor\Google\Client $client Google Client Object.
         *
         * @return array
         */
        private function renew_access_token($refresh_token, $client)
        {
        }
        /**
         * Get google login url from api.woocommerce.com/integrations.
         *
         * @return string
         */
        private function get_google_auth_url()
        {
        }
    }
    /**
     * .ics Exporter
     *
     * @version 3.11.0
     */
    class WC_Bookings_ICS_Exporter
    {
        /**
         * Prefix identifying the private attachment paths created by this class.
         */
        const TEMPORARY_PREFIX = 'woocommerce-bookings-';
        /**
         * Bookings list to export
         *
         * @var array
         */
        protected $bookings = array();
        /**
         * File path
         *
         * @var string
         */
        protected $file_path = '';
        /**
         * Temporary email attachment paths.
         *
         * @var string[]
         */
        protected static $temporary_files = array();
        /**
         * UID prefix.
         *
         * @var string
         */
        protected $uid_prefix = 'wc_bookings_';
        /**
         * End of line.
         *
         * @var string
         */
        protected $eol = "\r\n";
        /**
         * Get booking .ics
         *
         * @param  WC_Booking $booking Booking data
         *
         * @return string .ics path
         */
        public function get_booking_ics($booking)
        {
        }
        /**
         * Get a private temporary booking .ics email attachment.
         *
         * @since 3.11.0
         *
         * @param WC_Booking $booking Booking data.
         * @return string .ics path.
         */
        public function get_booking_ics_for_email($booking)
        {
        }
        /**
         * Get .ics for bookings.
         *
         * @param  array  $bookings Array with WC_Booking objects
         * @param  string $filename .ics filename
         *
         * @return string .ics path
         */
        public function get_ics($bookings, $filename = '')
        {
        }
        /**
         * Get file path
         *
         * @param  string $filename Filename
         *
         * @return string
         */
        protected function get_file_path($filename)
        {
        }
        /**
         * Build an unguessable path prefix for an email attachment.
         *
         * Attachments live outside the request that created them for as long as mail callbacks run,
         * so the path carries a random component instead of the booking ID and product title.
         *
         * @since 3.11.0
         *
         * @return string Trailing-slashed private directory, or a temporary path prefix when it cannot be created.
         */
        protected function get_attachment_path_prefix()
        {
        }
        /**
         * Delete temporary email attachments at request shutdown.
         *
         * @since 3.11.0
         *
         * @return void
         */
        public static function cleanup_temporary_files()
        {
        }
        /**
         * Create the .ics file
         *
         * @return void
         */
        protected function create()
        {
        }
        /**
         * Format the date
         *
         * @version 1.10.0
         *
         * @param int        $timestamp Timestamp to format.
         * @param WC_Booking $booking   Booking object.
         *
         * @return string Formatted date for ICS.
         */
        protected function format_date($timestamp, $booking = \null)
        {
        }
        /**
         * Sanitize strings for .ics
         *
         * @param  string $string
         *
         * @return string
         */
        protected function sanitize_string($string)
        {
        }
        /**
         * Generate the .ics content
         *
         * @return string
         */
        protected function generate()
        {
        }
    }
    /**
     * WC_Bookings_Init class.
     *
     * Initializes bookings functionality.
     */
    class WC_Bookings_Init
    {
        /**
         * Constructor.
         *
         * @since 1.13.0
         */
        public function __construct()
        {
        }
        /**
         * Filter the product template CSV file path.
         *
         * @param string $file_path The file path.
         * @param string $product_type The product type.
         *
         * @since 2.1.3
         *
         * @return string The file path.
         */
        public function product_booking_template_csv_file_path($file_path, $product_type)
        {
        }
        /**
         * Init post types
         */
        public function init_post_types()
        {
        }
        /**
         * Filter whether to display express pay buttons on product pages.
         *
         * Runs on the `wcpay_payment_request_is_product_supported` and
         * `wcpay_woopay_button_is_product_supported` filters.
         *
         * @since 2.0.8
         *
         * @param bool        $is_supported Whether express pay buttons are supported on product pages.
         * @param \WC_Product $product      The product object.
         *
         * @return bool Modified support status.
         */
        public function wcpay_is_product_supported($is_supported, $product)
        {
        }
        /**
         * Filter whether to display Apple/Google express pay buttons on cart pages.
         *
         * Hide the express pay button on cart pages if the booking requires confirmation.
         *
         * Runs on the `wcpay_payment_request_is_cart_supported` filter.
         *
         * @since 2.0.8
         *
         * @param bool        $is_supported Whether Apple/Google express pay buttons are supported on cart pages.
         * @param \WC_Product $product      A product object in the cart.
         *
         * @return bool Modified support status.
         */
        public function wcpay_is_cart_supported($is_supported, $product)
        {
        }
        /**
         * Filter whether to display WooPay express pay buttons on cart pages.
         *
         * Hide the express WooPay button on cart pages containing bookings.
         *
         * Runs on the `wcpay_platform_checkout_button_are_cart_items_supported` filter.
         *
         * @link https://woocommerce.com/document/woopay-merchant-documentation/#incompatible-extensions
         *
         * @since 2.0.8
         *
         * @param bool $is_supported Whether express WooPay buttons are supported on cart pages.
         *
         * @return bool Modified support status.
         */
        public function platform_checkout_button_are_cart_items_supported($is_supported)
        {
        }
        /**
         * Register data stores for bookings.
         *
         * @param array $data_stores
         *
         * @return array
         */
        public function register_data_stores($data_stores = array())
        {
        }
        /**
         * Enqueue the booking form's frontend stylesheets. Shared by the front-end
         * single-product view, the admin "Add Booking" screen, and the admin
         * reschedule dialog.
         *
         * The jQuery UI stylesheet handle depends on the calling surface:
         *
         * - Front-end (`'frontend'`): WooCommerce core never registers `jquery-ui-style`
         *   on the front-end, so Bookings has always owned that handle there. Keeping it
         *   preserves backwards compatibility for third-party code that dequeues or
         *   extends `jquery-ui-style` on the front-end.
         * - Admin (`'admin'`): WC core registers an unscoped `jquery-ui-style` for popup
         *   datepickers (e.g. the booking edit screen's start/end date fields, whose popup
         *   div is appended to `<body>`). Our copy is scoped under `.wc-bookings-booking-form`
         *   for the inline datepicker, so reusing the handle would silently override core's
         *   registration and break those popups. Use our own handle there instead.
         *
         * @param string $context Calling surface: 'frontend' (default) or 'admin'.
         */
        public static function booking_form_styles($context = 'frontend')
        {
        }
        /**
         * Register shared dependencies.
         *
         * @since 1.15.42
         */
        public function booking_shared_dependencies()
        {
        }
        /**
         * Register/enqueue admin dependencies.
         *
         * @since 1.15.80
         */
        public function booking_admin_dependencies()
        {
        }
        /**
         * Add a custom payment gateway.
         *
         * This gateway backs bookings that require confirmation. It is registered
         * everywhere (including the admin) so its Title and Description can be edited
         * on the Payments settings screen. It has no enable/disable option of its own
         * and is always enabled, since it only backs the per-product "Requires
         * confirmation" flow.
         */
        public function include_gateway($gateways)
        {
        }
        /**
         * Adds all bookings capabilities to roles with deprecated manage_bookings cap.
         *
         * @param array        $allcaps An array of all the user's capabilities.
         * @param array|string $caps Actual capabilities for meta capability.
         * @param array        $args Optional parameters passed to has_cap(), typically object ID.
         * @param WP_User      $user The user object.
         *
         * @return array
         */
        public function add_new_booking_caps(array $allcaps, $caps, $args, \WP_User $user)
        {
        }
        /**
         * Add a new custom add new item.
         *
         * @since 2.0.0
         *
         * return false or void.
         *
         * @param WP_Admin_Bar $wp_admin_bar
         */
        public function wp_admin_bar_new_content_menu(\WP_Admin_Bar $wp_admin_bar)
        {
        }
        /**
         * Bookable Products filtered under the Analytics page.
         *
         * @param array $args Query arguments.
         *
         * @return array Updated query arguments.
         */
        public function analytics_products_query_args($args)
        {
        }
        /**
         * Bookable Products filtered via JOIN clause(s).
         *
         * @param array $clauses The existing clauses.
         * @param array $context The context of the clause.
         *
         * @return array Updated clauses.
         */
        public function analytics_clauses_join($clauses, $context)
        {
        }
        /**
         * Bookable Products filtered via WHERE clause(s).
         *
         * @param array $clauses The existing clauses.
         * @param array $context The context of the clause.
         *
         * @return array Updated clauses.
         */
        public function analytics_clauses_where($clauses, $context)
        {
        }
        /**
         * Handle all action schedules and custom migrations for the plugin.
         */
        public function booking_migrations()
        {
        }
        /**
         * Update all booking products.
         * For https://github.com/woocommerce/woocommerce-bookings/issues/2966
         */
        public function booking_migration_2966()
        {
        }
    }
    /**
     * Installation/Migration Class.
     *
     * Handles the activation/installation of the plugin.
     *
     * @version  3.12.0
     */
    class WC_Bookings_Install
    {
        /**
         * Current plugin version.
         *
         * @var string
         */
        private static $current_version;
        /**
         * Current plugin db version.
         *
         * @var string
         */
        private static $current_db_version;
        /**
         * Get capabilities for WooCommerce Bookings - these are assigned to admin/shop manager during installation or reset.
         *
         * @return array
         */
        public static function get_core_capabilities()
        {
        }
        /**
         * Initialize.
         *
         * @since 1.13.0
         */
        public static function init()
        {
        }
        /**
         * Run the installer on admin requests from users allowed to manage WooCommerce.
         *
         * Any logged-in user can reach admin_init. Letting such a request install would advance
         * the plugin version marker before an authorized user runs the updater, so version-based
         * migrations would be skipped.
         *
         * @since 3.11.0
         */
        public static function maybe_install_on_admin_init()
        {
        }
        /**
         * Check version and run the installer if necessary.
         *
         * @since 3.2.0
         */
        public static function maybe_install()
        {
        }
        /**
         * Run the updater if triggered.
         *
         * @since 3.2.0
         */
        public static function maybe_update()
        {
        }
        /**
         * Installation possible?
         *
         * @since 3.2.0
         *
         * @return boolean
         */
        private static function can_install()
        {
        }
        /**
         * DB update possible?
         *
         * @since 3.2.0
         *
         * @return boolean
         */
        private static function can_update()
        {
        }
        /**
         * Is currently installing?
         *
         * @since 3.2.0
         *
         * @return boolean
         */
        private static function is_installing()
        {
        }
        /**
         * Must install?
         *
         * @since 3.2.0
         *
         * @return boolean
         */
        private static function must_install()
        {
        }
        /**
         * Must update?
         *
         * @since 3.2.0
         *
         * @return boolean
         */
        private static function must_update()
        {
        }
        /**
         * Install the plugin.
         *
         * Handles initial plugin installation including database setup,
         * product type registration, and capability assignment.
         *
         * @since 3.2.0
         */
        private static function install()
        {
        }
        /**
         * Update the plugin.
         *
         * Handles plugin updates including version-specific migrations,
         * database updates, and cache clearing.
         *
         * @since 3.2.0
         */
        private static function update()
        {
        }
        /**
         * Create or update database tables.
         *
         * Uses dbDelta to create tables on install or update them if schema changes.
         *
         * @since 3.2.0
         */
        private static function create_tables()
        {
        }
        /**
         * Register the booking product type.
         *
         * Ensures the 'booking' product type term exists in the product_type taxonomy.
         *
         * @since 3.2.0
         */
        private static function register_product_type()
        {
        }
        /**
         * Setup user capabilities.
         *
         * Assigns booking-related capabilities to shop_manager and administrator roles,
         * and removes deprecated capabilities.
         *
         * @since 3.2.0
         */
        public static function setup_capabilities()
        {
        }
        /**
         * Run version-specific migrations.
         *
         * Executes data migrations based on the previously installed version.
         *
         * @since 3.2.0
         */
        private static function run_version_migrations()
        {
        }
        /**
         * Updates the plugin version in db.
         *
         * @since 1.13.0
         */
        private static function update_plugin_version()
        {
        }
        /**
         * Updates the plugin db version in db.
         *
         * @since 1.13.0
         */
        private static function update_db_version()
        {
        }
        /**
         * Migrate global availabiltity from options table
         * to custom availability table.
         *
         * @since 1.13.0
         */
        private static function migration_1_13_0()
        {
        }
        /**
         * Show row meta on the plugin screen.
         *
         * @param  mixed $links Plugin Row Meta.
         * @param  mixed $file  Plugin Base file.
         * @return array
         */
        public static function plugin_row_meta($links, $file)
        {
        }
    }
    /**
     * API class which registers all the routes.
     *
     * @version 3.11.0
     */
    class WC_Bookings_REST_API
    {
        const V1_NAMESPACE = 'wc-bookings/v1';
        const V2_NAMESPACE = 'wc-bookings/v2';
        /**
         * Construct.
         */
        public function __construct()
        {
        }
        /**
         * Initialize the REST API.
         */
        public function rest_api_init()
        {
        }
        /**
         * Initialize the REST API v2.
         */
        public function rest_api_v2_init()
        {
        }
    }
    /**
     * Class WC_Booking_Timezone_Settings
     *
     * Singleton class for Bookings timezone settings.
     *
     * @version 3.12.0
     * @package Woocommerce/Bookings
     */
    class WC_Bookings_Timezone_Settings extends \WC_Settings_API
    {
        /**
         * The single instance of the class.
         *
         * @var WC_Bookings_Timezone_Settings|null
         * @since 1.13.0
         */
        protected static $_instance = \null;
        /**
         * Name for nonce to update timezone settings.
         *
         * @since 1.13.0
         * @var string self::NONCE_NAME
         */
        const NONCE_NAME = 'bookings_timezone_settings_nonce';
        /**
         * Action name for nonce to update timezone settings.
         *
         * @since 1.13.0
         * @var string self::NONCE_ACTION
         */
        const NONCE_ACTION = 'submit_bookings_timezone_settings';
        /**
         * Constructor.
         *
         * @since 1.13.0
         */
        private function __construct()
        {
        }
        /**
         * Initialize settings and form data.
         *
         * @since 1.13.0
         * @return void
         */
        public function init_timezone_settings()
        {
        }
        /**
         * Update settings values from form.
         *
         * @since 1.13.0
         * @return void
         */
        public function maybe_save_settings()
        {
        }
        /**
         * Defines settings fields.
         *
         * @since 1.13.0
         * @return void
         */
        public function init_form_fields()
        {
        }
        /**
         * Render a custom radio button field.
         *
         * Renders a radio button field that does not escape the label HTML, so hyperlinks
         * can be included the content.
         *
         * @since 1.13.0
         * @param string $key Setting key name.
         * @param array  $field Attributes for setting field.
         * @return string Input HTML string.
         */
        protected function generate_radio_custom_label_html($key, $field)
        {
        }
        /**
         * Returns true if settings exist in database.
         *
         * @since 1.13.0
         * @return bool
         */
        public static function exists_in_db()
        {
        }
        /**
         * Generates full HTML form for the instance settings.
         *
         * @since 1.13.0
         * @return void
         */
        public static function generate_form_html()
        {
        }
        /**
         * Returns WC_Bookings_Timezone_Settings singleton
         *
         * Ensures only one instance of WC_Bookings_Timezone_Settings is created.
         *
         * @since 1.13.0
         * @return WC_Bookings_Timezone_Settings - Main instance.
         */
        public static function instance()
        {
        }
        /**
         * Retrieves value for the provided option key.
         *
         * @since 1.13.0
         * @param string $key Option key.
         * @return mixed Option value.
         */
        public static function get($key)
        {
        }
    }
    /**
     * Bookings WC ajax callbacks.
     *
     * @version 3.12.0
     */
    class WC_Bookings_WC_Ajax
    {
        const AJAX_DEPRECATION_VERSION = '1.14.0';
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Find booking slots for:
         * - A list of products
         * - For a specific date range
         * - Filtered by categories
         * - Filtered by resources
         */
        public function find_booking_slots()
        {
        }
        /**
         * This endpoint is supposed to replace the back-end logic in booking-form.
         *
         * @since   1.15.70 When there is no resource ID, supplies `WC_Bookings_Controller::find_booked_day_blocks()` with an empty array.
         * @version 3.6.0
         */
        public function find_booked_day_blocks()
        {
        }
        /**
         * Ajax request controller.
         *
         * This function should return all the bookable products.
         *
         * @since 1.13.0
         */
        public function get_all_bookable_products()
        {
        }
        /**
         * Ajax request controller.
         *
         * This function should return all categories that contain bookable products.
         *
         * @since 1.13.0
         */
        public function get_all_categories_with_bookable_products()
        {
        }
        /**
         * Ajax request controller.
         *
         * This function should return product resources.
         *
         * @since 1.13.0
         */
        public function get_all_resources()
        {
        }
        /**
         * Adds the booking to the cart using WC().
         *
         * @since 1.13.13
         */
        public function add_booking_to_cart()
        {
        }
        /**
         * Log an unexpected AJAX endpoint failure for troubleshooting.
         *
         * @since 3.11.0
         *
         * @param string    $endpoint  Fully qualified endpoint method name, as produced by __METHOD__.
         * @param Exception $exception Exception raised by the endpoint.
         */
        private function log_exception($endpoint, $exception)
        {
        }
    }
    /**
     * WC_Product_Booking_Manager class.
     *
     * Handles product booking transitions and lifecycle management.
     */
    class WC_Product_Booking_Manager
    {
        /**
         * Constructor sets up actions
         */
        public function __construct()
        {
        }
        /**
         * Filters whether a bookable product deletion should take place.
         * If there are Bookings linked to it, do not allow deletion.
         *
         * @since 1.10.9
         *
         * @param int $post_id  Post ID.
         */
        public static function pre_trash_delete_handler($post_id)
        {
        }
    }
    /**
     * Class that parses and returns rules for bookable products.
     *
     * @version 3.11.0
     */
    class WC_Product_Booking_Rule_Manager
    {
        /**
         * Occurrences one availability check may expand for a recurrence rule before the rule is treated as unavailable.
         *
         * @since 3.11.0
         */
        const RRULE_MAX_OCCURRENCES = 5000;
        /**
         * Get a range and put value inside each day
         *
         * @param  string $from
         * @param  string $to
         * @param  mixed  $value
         * @return array
         */
        private static function get_custom_range($from, $to, $value)
        {
        }
        /**
         * Get a range and put value inside each day
         *
         * Generates availability data where time range starts on first date on the beginning
         * time and ends on the last date at the end time.
         *
         * @since 1.13.0
         *
         * @param  string $from_day   Range start date.
         * @param  string $to_day     Range end date.
         * @param  mixed  $time_range Time range value.
         * @return array
         */
        private static function get_custom_datetime_range($from_day, $to_day, $time_range)
        {
        }
        /**
         * Get a range and put value inside each day
         *
         * @param  string $from
         * @param  string $to
         * @param  mixed  $value
         * @return array
         */
        private static function get_months_range($from, $to, $value)
        {
        }
        /**
         * Get a range and put value inside each day
         *
         * @param  string $from
         * @param  string $to
         * @param  mixed  $value
         * @return array
         */
        private static function get_weeks_range($from, $to, $value)
        {
        }
        /**
         * Get a range and put value inside each day
         *
         * @param  string $from
         * @param  string $to
         * @param  mixed  $value
         * @return array
         */
        private static function get_days_range($from, $to, $value)
        {
        }
        /**
         * Get a range and put value inside each day
         *
         * @param  string $from
         * @param  string $to
         * @param  mixed  $value
         * @return array
         */
        private static function get_time_range($from, $to, $value, $day = 0)
        {
        }
        /**
         * Get a time range for a set of custom dates.
         *
         * Generates availability data where time range is repeated for each day in range.
         *
         * @param  string $from_date
         * @param  string $to_date
         * @param  string $from_time
         * @param  string $to_time
         * @param  mixed  $value
         * @return array
         */
        private static function get_time_range_for_custom_date($from_date, $to_date, $from_time, $to_time, $value)
        {
        }
        /**
         * Get a time range for a set of custom dates.
         *
         * Generates availability data where time range starts on first date on the beginning
         * time and ends on the last date at the end time.
         *
         * @since 1.13.0
         *
         * @param  string $from_date
         * @param  string $to_date
         * @param  string $from_time
         * @param  string $to_time
         * @param  mixed  $value
         * @return array
         */
        private static function get_time_range_for_custom_datetime($from_date, $to_date, $from_time, $to_time, $value)
        {
        }
        /**
         * Get duration range
         *
         * @param  mixed $from Range start.
         * @param  mixed $to Range end.
         * @param  mixed $value Rule value.
         * @return array
         */
        private static function get_duration_range($from, $to, $value)
        {
        }
        /**
         * Get Persons range
         *
         * @param  mixed $from Range start.
         * @param  mixed $to Range end.
         * @param  mixed $value Rule value.
         * @return array
         */
        private static function get_persons_range($from, $to, $value)
        {
        }
        /**
         * Get blocks range
         *
         * @param  mixed $from Range start.
         * @param  mixed $to Range end.
         * @param  mixed $value Rule value.
         * @return array
         */
        private static function get_blocks_range($from, $to, $value)
        {
        }
        private static function get_rrule_range($from, $to, $rrule, $value)
        {
        }
        /**
         * Process and return formatted cost rules.
         *
         * @param  $rules array
         * @return array
         */
        public static function process_cost_rules($rules)
        {
        }
        /**
         * Returns a function name (for this class) that returns our time or date range
         *
         * @param  string $type rule type
         * @return string       function name
         */
        public static function get_type_function($type)
        {
        }
        /**
         * Split the store availability rule into one or more classic availability rules.
         *
         * @param WC_Global_Availability $rule Current Store availability rule.
         * @param string                 $level Rule level, 'global', 'product', or 'resource.
         * @param bool                   $hide_past Hide Past rules.
         *
         * @return array
         */
        private static function process_store_availability_rule(\WC_Global_Availability $rule, $level, $hide_past)
        {
        }
        /**
         * Process and return formatted availability rules
         *
         * @version 1.10.7
         * @param   array  $rules Rules to process.
         * @param   string $level Resource, Product or Globally.
         * @return  array
         */
        public static function process_availability_rules($rules, $level, $hide_past = \true)
        {
        }
        /**
         * Get the minutes that should be available based on the rules and the date to check.
         *
         * The minutes are returned in a range from the start to increment minutes right up to the last available minute.
         *
         * This function expects the rules to be ordered in the sequence that is should be processed. Later rule minutes
         * will override prior rule minutes in the order given.
         *
         * @since 1.9.14 moved from WC_Product_Booking.
         *
         * @param array $rules
         * @param int $check_date
         * @param array $bookable_minutes
         *
         * @return array $bookable_minutes
         */
        public static function get_minutes_from_rules($rules, $check_date, $bookable_minutes = array())
        {
        }
        /**
         * This function is a mediator that simplifies the creation of
         * a data object representing the range of rules minutes and the property of bookable or not.
         *
         * @since 1.10.10
         *
         * @param array $rule
         * @param int   $check_date
         *
         * @return array $minute_range
         */
        public static function get_rule_minute_range($rule, $check_date)
        {
        }
        /**
         * Calculate minutes range.
         *
         * @since 1.13.0
         * @param $from
         * @param $to
         *
         * @return array
         */
        protected static function calculate_minute_range($from, $to)
        {
        }
        /**
         * Get minutes from rules for a time rule type.
         *
         * @since 1.9.14
         * @param $rule
         * @param integer $check_date
         *
         * @return array
         */
        public static function get_rule_minutes_for_time($rule, $check_date)
        {
        }
        /**
         * Get minutes from rules for a 'rrule' rule type.
         *
         * @since 1.13.0
         * @param $rule
         * @param integer $check_date
         *
         * @return array
         */
        public static function get_rule_minutes_for_rrule($rule, $check_date)
        {
        }
        /**
         * Get minutes from rules for days rule type.
         *
         * @since 1.9.14
         * @param $rule
         * @param integer $check_date
         *
         * @return array
         */
        public static function get_rule_minutes_for_days($rule, $check_date)
        {
        }
        /**
         * Get minutes from rules for a weeks rule type.
         *
         * @since 1.9.14
         * @param $rule
         * @param integer $check_date
         *
         * @return array
         */
        public static function get_rule_minutes_for_weeks($rule, $check_date)
        {
        }
        /**
         * Get minutes from rules for a months rule type.
         *
         * @since 1.9.14
         * @param $rule
         * @param integer $check_date
         *
         * @return array
         */
        public static function get_rule_minutes_for_months($rule, $check_date)
        {
        }
        /**
         * Get minutes from rules for custom rule type.
         *
         * @since 1.9.14
         * @param $rule
         * @param integer $check_date
         *
         * @return array
         */
        public static function get_rule_minutes_for_custom($rule, $check_date)
        {
        }
        /**
         * Sort rules in order of precedence.
         *
         * @version 1.9.14 sort order reversed
         * The order produced will be from the lowest to the highest.
         * The elements with higher indexes overrides those with lower indexes e.g. `4` overrides `3`
         * Index corresponds to override power. The higher the element index the higher the override power
         *
         * Level    : `global` > `product` > `resource` (greater in terms of override power)
         * Priority : within a level
         * Order    : Within a priority The lower the order index higher the override power.
         *
         * @param array $rule1
         * @param array $rule2
         *
         * @return integer
         */
        public static function sort_rules_callback($rule1, $rule2)
        {
        }
        /**
         * Filter out all but time rules.
         *
         * @param  array $rule
         * @return boolean
         */
        private static function filter_time_rules($rule)
        {
        }
        /**
         * Check a bookable product's availability rules against a time range and return if bookable or not.
         *
         * @param  WC_Product_Booking $bookable_product
         * @param  int                $resource_id
         * @param  int                $start timestamp
         * @param  int                $end timestamp
         * @return boolean
         */
        public static function check_range_availability_rules($bookable_product, $resource_id, $start, $end)
        {
        }
        /**
         * Check a time against the time specific availability rules
         *
         * @param integer                                                     $slot_start_time
         * @param integer                                                     $slot_end_time
         * @param integer                                                     $resource_id
         * @param WC_Product_Booking                                          $bookable_product
         * @param bool|null          $bookable If not null, it will default to the boolean value. If null, it will use product default availability.
         *
         * @return bool available or not
         */
        public static function check_availability_rules_against_time($slot_start_time, $slot_end_time, $resource_id, $bookable_product, $bookable = \null)
        {
        }
        /**
         * Check a date against the availability rules
         *
         * @version 1.11.3 Added woocommerce_bookings_is_date_bookable filter hook
         * @version 1.10.0  Moved to this class from WC_Product_Booking
         *                  only apply rules if within their scope
         *                  keep booking value alive within the loop to ensure the next rule with higher power can override
         * @version 1.9.14  removed all calls to break 2 to ensure we get to the highest
         *                  priority rules, otherwise higher order/priority rules will not
         *                  override lower ones and the function exit with the wrong value.
         *
         * @param  WC_Product_Booking $bookable_product
         * @param  int                $resource_id
         * @param  int                $check_date timestamp
         * @return bool available or not
         */
        public static function check_availability_rules_against_date($bookable_product, $resource_id, $check_date)
        {
        }
        /**
         * Does the time stamp fall within the scope of the rule?
         *
         * @param $rule
         * @param $timestamp
         * @return bool
         */
        public static function does_rule_apply($rule, $timestamp)
        {
        }
        /**
         * Given a timestamp and rule check to see if the time stamp is bookable based on the rule.
         *
         * @since 1.10.0
         *
         * @param integer $timestamp
         * @param array   $rule
         * @param boolean $default
         * @return boolean
         */
        public static function check_timestamp_against_rule($timestamp, $rule, $default)
        {
        }
        /**
         * Checks if the given rrule and event happens at the given timestamp.
         *
         * @param array $range Range and rrule to check.
         * @param int   $timestamp Timestamp to check against.
         *
         * @return bool
         */
        private static function rrule_matches_timestamp($range, $timestamp)
        {
        }
        /**
         * Checks if the given rrule and event happens between the given slot timestamps.
         *
         * @param array $range           Range and rrule to check.
         * @param int   $slot_start_time Start Timestamp of the slot.
         * @param int   $slot_end_time   End Timestamp of the slot.
         *
         * @return bool
         */
        private static function rrule_has_occurrences_between_slots($range, $slot_start_time, $slot_end_time)
        {
        }
        /**
         * Lists the occurrences of a recurrence rule between two instants, within a fixed work budget.
         *
         * Iteration starts one period before $begin instead of at the event start (see shift_rrule_start()),
         * so a rule that has repeated for a decade costs the same as a new one, and the parsed set is reused
         * for later windows in the request. A rule that cannot be parsed, uses EXRULE, or expands more than
         * RRULE_MAX_OCCURRENCES occurrences before $end is logged once and returns null: callers must then
         * treat the checked time as unavailable, never as bookable.
         *
         * @since 3.11.0
         *
         * @param string          $rrule   Recurrence string (RRULE/RDATE/EXDATE lines) as stored by the Google Calendar sync.
         * @param DateTime|string $dtstart Event start; a 'Y-m-d' string for all-day events.
         * @param mixed           $begin   Earliest occurrence to return (inclusive): timestamp, date string or DateTime.
         * @param mixed           $end     Latest occurrence to return (inclusive); null for no end.
         * @param int|null        $limit   Maximum number of occurrences to return.
         * @return DateTime[]|null Occurrences, or null when the rule cannot be evaluated.
         *
         * phpcs:ignore Squiz.Commenting.FunctionCommentThrowTag.Missing -- Every throw below is caught in this method.
         */
        public static function get_rrule_occurrences($rrule, $dtstart, $begin, $end = \null, $limit = \null)
        {
        }
        /**
         * Moves a recurrence start forward by whole periods so iteration begins just before $window_start.
         *
         * Occurrences before the window are never needed, and skipping whole INTERVAL periods preserves every
         * BYxxx part the rule derives from its start (weekday, day of month, time of day). Rules with COUNT or
         * BYSETPOS depend on the original start and are left alone, as are month and year shifts that would
         * not land on the same day of the month (day 29-31, 29 February).
         *
         * @since 3.11.0
         *
         * @param array           $rule         Parsed RRULE parts.
         * @param DateTime|string $dtstart      Original start; a 'Y-m-d' string for all-day events.
         * @param DateTime        $window_start Start of the window being evaluated.
         * @return DateTime|string Shifted start of the same type as $dtstart, or $dtstart itself.
         */
        private static function shift_rrule_start(array $rule, $dtstart, \DateTime $window_start)
        {
        }
    }
    /**
     * Dummy class for our 'addon' classes to load from.
     */
    class WC_Product_Skeleton_Booking extends \WC_Product_Booking
    {
        public function __construct($product)
        {
        }
        public function is_purchasable()
        {
        }
        public function is_skeleton()
        {
        }
        public function is_bookings_addon()
        {
        }
    }
    /**
     * CLI command handler for WooCommerce Bookings.
     *
     * Executes CLI commands by dispatching internal REST API requests.
     *
     * Based on WooCommerce's WC_CLI_REST_Command which is forked from wp-cli/restful
     * (by Daniel Bachhuber, released under the MIT license https://opensource.org/licenses/MIT).
     *
     * @since 3.8.0
     *
     * @package WooCommerce\Bookings
     */
    class WC_Bookings_CLI_REST_Command
    {
        /**
         * Name of command/endpoint object.
         *
         * @var string
         */
        private $name;
        /**
         * Endpoint route.
         *
         * @var string
         */
        private $route;
        /**
         * Main resource ID.
         *
         * @var string|null
         */
        private $resource_identifier;
        /**
         * Schema for command.
         *
         * @var array
         */
        private $schema;
        /**
         * List of supported IDs and their description (name => desc).
         *
         * @var array
         */
        private $supported_ids = array();
        /**
         * Sets up REST Command.
         *
         * @param string $name   Name of endpoint object (comes from schema).
         * @param string $route  Path to route of this endpoint.
         * @param array  $schema Schema object.
         */
        public function __construct($name, $route, $schema)
        {
        }
        /**
         * Passes supported ID arguments that we should look for in addition to id.
         *
         * @param array $supported_ids List of supported IDs.
         */
        public function set_supported_ids($supported_ids = array())
        {
        }
        /**
         * Returns supported ID arguments.
         *
         * @return array
         */
        public function get_supported_ids()
        {
        }
        /**
         * Create a new item.
         *
         * @subcommand create
         *
         * @param array $args       WP-CLI positional arguments.
         * @param array $assoc_args WP-CLI associative arguments.
         */
        public function create_item($args, $assoc_args)
        {
        }
        /**
         * Delete an existing item.
         *
         * @subcommand delete
         *
         * @param array $args       WP-CLI positional arguments.
         * @param array $assoc_args WP-CLI associative arguments.
         */
        public function delete_item($args, $assoc_args)
        {
        }
        /**
         * Get a single item.
         *
         * @subcommand get
         *
         * @param array $args       WP-CLI positional arguments.
         * @param array $assoc_args WP-CLI associative arguments.
         */
        public function get_item($args, $assoc_args)
        {
        }
        /**
         * List all items.
         *
         * @subcommand list
         *
         * @param array $args       WP-CLI positional arguments.
         * @param array $assoc_args WP-CLI associative arguments.
         */
        public function list_items($args, $assoc_args)
        {
        }
        /**
         * Update an existing item.
         *
         * @subcommand update
         *
         * @param array $args       WP-CLI positional arguments.
         * @param array $assoc_args WP-CLI associative arguments.
         */
        public function update_item($args, $assoc_args)
        {
        }
        /**
         * Do a REST Request.
         *
         * @param string $method     Request method. Examples: 'POST', 'PUT', 'DELETE' or 'GET'.
         * @param string $route      Resource route.
         * @param array  $assoc_args Associative arguments passed to the originating WP-CLI command.
         *
         * @return array
         */
        private function do_request($method, $route, $assoc_args)
        {
        }
        /**
         * Get Formatter object based on supplied parameters.
         *
         * @param array $assoc_args Parameters passed to command. Determines formatting.
         * @return \WP_CLI\Formatter
         */
        protected function get_formatter(&$assoc_args)
        {
        }
        /**
         * Get a list of fields present in a given context.
         *
         * @param string $context Scope under which the request is made. Determines fields present in response.
         * @return array
         */
        private function get_context_fields($context)
        {
        }
        /**
         * Get the route for this resource with IDs filled in.
         *
         * @param array $args Positional arguments passed to the originating WP-CLI command.
         * @return string
         */
        private function get_filled_route($args = array())
        {
        }
        /**
         * Reduce an item to specific fields.
         *
         * @param array $item   Item to reduce.
         * @param array $fields Fields to keep.
         * @return array
         */
        private static function limit_item_to_fields($item, $fields)
        {
        }
        /**
         * Decode JSON values in arguments.
         *
         * @param array $arr Array that will be scanned for JSON encoded values.
         * @return array
         */
        protected function decode_json($arr)
        {
        }
    }
    /**
     * WC Bookings API to WP-CLI Bridge.
     *
     * Hooks into the REST API, figures out which endpoints come from WC Bookings,
     * and registers them as CLI commands.
     *
     * Based on WooCommerce's WC_CLI_Runner which is forked from wp-cli/restful
     * (by Daniel Bachhuber, released under the MIT license https://opensource.org/licenses/MIT).
     *
     * @since 3.8.0
     *
     * @package WooCommerce\Bookings
     */
    class WC_Bookings_CLI_Runner
    {
        /**
         * Schema titles of the endpoints to expose as CLI commands.
         *
         * @var array
         */
        private static $enabled_endpoints = array('wc_booking');
        /**
         * The REST API namespace to target for generating commands.
         *
         * @var string
         */
        private static $target_namespace = 'wc-bookings/v2';
        /**
         * Map schema titles to friendlier CLI command names.
         *
         * @var array
         */
        private static $title_map = array('wc_booking' => 'booking');
        /**
         * Registers all Bookings REST endpoints as CLI commands once WP has loaded.
         */
        public static function after_wp_load()
        {
        }
        /**
         * Generates command information and tells WP-CLI about all
         * commands available from a route.
         *
         * @param WC_Bookings_CLI_REST_Command $rest_command Bookings CLI command.
         * @param string                       $route        Path to route endpoint.
         * @param array                        $route_data   Command data.
         * @param array                        $command_args WP-CLI command arguments.
         */
        private static function register_route_commands($rest_command, $route, $route_data, $command_args = array())
        {
        }
    }
    /**
     * WC Bookings CLI.
     *
     * Loads and registers WP-CLI commands for WooCommerce Bookings
     * by bridging the Bookings REST API to CLI commands.
     *
     * @since 3.8.0
     *
     * @package WooCommerce\Bookings
     */
    class WC_Bookings_CLI
    {
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
    }
    abstract class WC_Bookings_Data extends \WC_Data
    {
    }
    /**
     * Backport fix for WC 2.6
     */
    class WC_Ajax_Compat extends \WC_AJAX
    {
        /**
         * Get WC Ajax Endpoint.
         *
         * @param  string $request Optional.
         * @return string
         */
        public static function get_endpoint($request = '')
        {
        }
    }
    /**
     * Functions related to WC core backwards compatibility.
     *
     * @class    WC_Bookings_Core_Compatibility
     * @version  3.11.0
     */
    class WC_Bookings_Core_Compatibility
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
         * @var    array
         */
        private static $is_wp_version_gt = array();
        /**
         * Cache 'gte' comparison results for WP version.
         *
         * @var    array
         */
        private static $is_wp_version_gte = array();
        /**
         * Current REST request stack.
         * An array containing WP_REST_Request instances.
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
         * @param  WP_REST_Response $response Response.
         * @return mixed
         */
        public static function pop_rest_request($response)
        {
        }
        /**
         * Saves the current hydration request.
         *
         * @param  mixed           $result Result.
         * @param  WP_REST_Request $request Request.
         * @return mixed
         */
        public static function save_hydration_request($result, $request)
        {
        }
        /**
         * Saves the current rest request.
         *
         * @param  mixed           $result Result.
         * @param  WP_REST_Server  $server Server.
         * @param  WP_REST_Request $request Request.
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
         * @return string
         */
        public static function get_wc_version()
        {
        }
        /**
         * Returns true if the installed version of WooCommerce is greater than or equal to $version.
         *
         * @param  string $version Version.
         * @return boolean
         */
        public static function is_wc_version_gte($version)
        {
        }
        /**
         * Returns true if the installed version of WooCommerce is greater than $version.
         *
         * @param  string $version Version.
         * @return boolean
         */
        public static function is_wc_version_gt($version)
        {
        }
        /**
         * Returns true if the installed version of WooCommerce is greater than or equal to $version.
         *
         * @param  string $version Version.
         * @return boolean
         */
        public static function is_wp_version_gt($version)
        {
        }
        /**
         * Returns true if the installed version of WooCommerce is greater than or equal to $version.
         *
         * @param  string $version Version.
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
         * @param  string $route Route.
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
         * Back-compat wrapper for 'is_rest_api_request'.
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
         * @param  string $route Route.
         * @return boolean
         */
        public static function is_block_editor_api_request($route = '')
        {
        }
    }
    /**
     * Main model class for all bookings.
     *
     * @version 3.12.0
     */
    class WC_Booking extends \WC_Bookings_Data
    {
        /**
         * Data array, with defaults.
         *
         * @var array
         */
        protected $data = array('start' => '', 'end' => '', 'all_day' => \false, 'status' => 'unpaid', 'cost' => 0, 'customer_id' => 0, 'woo_customer_id' => 0, 'date_created' => '', 'date_modified' => '', 'google_calendar_event_id' => 0, 'order_id' => 0, 'order_item_id' => 0, 'parent_id' => 0, 'person_counts' => array(), 'product_id' => 0, 'resource_id' => 0, 'local_timezone' => '', 'date_cancelled' => 0, 'note' => '', 'attendance_status' => 'unattended');
        /**
         * Stores meta in cache for future reads.
         *
         * A group must be set to to enable caching.
         * @var string
         */
        protected $cache_group = 'booking';
        /**
         * Which data store to load.
         *
         * @var string
         */
        protected $data_store_name = 'booking';
        /**
         * This is the name of this object type.
         *
         * @var string
         */
        protected $object_type = 'booking';
        /**
         * Stores data about status changes so relevant hooks can be fired.
         *
         * @since 1.10.0
         *
         * @version 1.10.0
         *
         * @var bool|array False if it's not transitioned. Otherwise an array containing
         *                 transitioned status 'from' and 'to'.
         */
        protected $status_transitioned = \false;
        /**
         * Cached start time.
         *
         * @var int
         */
        protected $start_cached = \null;
        /**
         * Cached end time.
         *
         * @var int
         */
        protected $end_cached = \null;
        /**
         * Cached start time getter.
         * This data needs to be set manually before it can be accessed.
         * It also becomes available when the `is_within_block` function is used.
         * Prefer the unguarded `get_start()` / `get_end()` unless you are deliberately
         * optimizing a hot path — they are safe without this manual setup.
         *
         * @since  1.15.13
         *
         * @return integer Booking start timestamp.
         */
        public function get_start_cached()
        {
        }
        /**
         * Cached end time getter.
         * This data needs to be set manually before it can be accessed.
         * It also becomes available when the `is_within_block` function is used.
         * Prefer the unguarded `get_start()` / `get_end()` unless you are deliberately
         * optimizing a hot path — they are safe without this manual setup.
         *
         * @since  1.15.13
         *
         * @return integer Booking end timestamp.
         */
        public function get_end_cached()
        {
        }
        /**
         * Constructor, possibly sets up with post or id belonging to existing booking
         * or supplied with an array to construct a new booking.
         *
         * @version  1.10.7
         * @param    int|array|object $booking Booking ID, data array, or post object.
         * @throws Exception If booking is not found.
         */
        public function __construct($booking = 0)
        {
        }
        /**
         * Save data to the database.
         *
         * @param bool $status_transition
         * @return int booking ID
         */
        public function save($status_transition = \true)
        {
        }
        /**
         * Handle the status transition.
         */
        protected function status_transition()
        {
        }
        /**
         * Mark the confirmed bookings' order as complete if the total is zero.
         *
         * @since 1.15.59
         */
        public function mark_confirmed_order_complete_when_total_zero()
        {
        }
        /**
         * Skip status transition events.
         *
         * Allows self::status_transition to be bypassed before calling self::save().
         *
         * @since 1.10.0
         *
         * @version 1.10.0
         */
        public function skip_status_transition_events()
        {
        }
        /**
         * Handler when booking status is transitioned.
         *
         * @since 1.10.0
         *
         * @param string $from Status from.
         * @param string $to   Status to.
         */
        protected function status_transitioned_handler($from, $to)
        {
        }
        /*
        |--------------------------------------------------------------------------
        | CRUD Getters and setters.
        |--------------------------------------------------------------------------
        */
        /**
         * Get all_day.
         *
         * @param  string $context
         * @return boolean
         */
        public function get_all_day($context = 'view')
        {
        }
        /**
         * Set all_day.
         *
         * @param boolean $value
         */
        public function set_all_day($value)
        {
        }
        /**
         * Get cost.
         *
         * @param  string $context
         * @return float
         */
        public function get_cost($context = 'view')
        {
        }
        /**
         * Set cost.
         *
         * @param float $value
         */
        public function set_cost($value)
        {
        }
        /**
         * Get customer_id.
         *
         * @param  string $context
         * @return integer
         */
        public function get_customer_id($context = 'view')
        {
        }
        /**
         * Set customer_id.
         *
         * @param integer $value
         */
        public function set_customer_id($value)
        {
        }
        /**
         * Get woo_customer_id (WooCommerce Analytics customer ID).
         *
         * @since  3.5.0
         * @param  string $context What the value is for. Valid values are view and edit.
         * @return integer
         */
        public function get_woo_customer_id($context = 'view')
        {
        }
        /**
         * Set woo_customer_id (WooCommerce Analytics customer ID).
         *
         * @since 3.5.0
         * @param integer $value WooCommerce Analytics customer ID.
         */
        public function set_woo_customer_id($value)
        {
        }
        /**
         * Get date_created.
         *
         * @param  string $context
         * @return int
         */
        public function get_date_created($context = 'view')
        {
        }
        /**
         * Set date_created.
         *
         * @param string $timestamp Timestamp
         * @throws WC_Data_Exception
         */
        public function set_date_created($timestamp)
        {
        }
        /**
         * Get date_modified.
         *
         * @param  string $context
         * @return int
         */
        public function get_date_modified($context = 'view')
        {
        }
        /**
         * Set date_modified.
         *
         * @param string $timestamp
         * @throws WC_Data_Exception
         */
        public function set_date_modified($timestamp)
        {
        }
        /**
         * Get end_time.
         *
         * @param  string $context
         * @param  bool   $local
         * @return int
         */
        public function get_end($context = 'view', $local = \false)
        {
        }
        /**
         * Set end_time.
         *
         * @param string $timestamp
         * @throws WC_Data_Exception
         */
        public function set_end($timestamp)
        {
        }
        /**
         * Get google_calendar_event_id.
         *
         * @param  string $context
         * @return string
         */
        public function get_google_calendar_event_id($context = 'view')
        {
        }
        /**
         * Set google_calendar_event_id
         *
         * @param string $value
         */
        public function set_google_calendar_event_id($value)
        {
        }
        /**
         * Get order ID.
         *
         * @param  string $context
         * @return int
         */
        public function get_order_id($context = 'view')
        {
        }
        /**
         * Set order_id
         *
         * @param  int $value
         */
        public function set_order_id($value)
        {
        }
        /**
         * Get order_item_id.
         *
         * @param  string $context
         * @return integer
         */
        public function get_order_item_id($context = 'view')
        {
        }
        /**
         * Set order_item_id.
         *
         * @param integer $value
         */
        public function set_order_item_id($value)
        {
        }
        /**
         * Get parent ID.
         *
         * @param  string $context
         * @return int
         */
        public function get_parent_id($context = 'view')
        {
        }
        /**
         * Set parent ID.
         *
         * @param  int $value
         */
        public function set_parent_id($value)
        {
        }
        /**
         * Get person_counts.
         *
         * @param  string $context
         * @return integer
         */
        public function get_person_counts($context = 'view')
        {
        }
        /**
         * Set person_counts.
         *
         * @param integer $value
         */
        public function set_person_counts($value)
        {
        }
        /**
         * Get product_id.
         *
         * @param  string $context
         * @return integer
         */
        public function get_product_id($context = 'view')
        {
        }
        /**
         * Set product_id.
         *
         * @param integer $value
         */
        public function set_product_id($value)
        {
        }
        /**
         * Get resource_id.
         *
         * @param  string $context
         * @return integer
         */
        public function get_resource_id($context = 'view')
        {
        }
        /**
         * Set resource_id.
         *
         * @param integer $value
         */
        public function set_resource_id($value)
        {
        }
        /**
         * Get start_time.
         *
         * @param  string $context
         * @param  bool   $local
         * @return int
         */
        public function get_start($context = 'view', $local = \false)
        {
        }
        /**
         * Set start_time.
         *
         * @param string $timestamp
         * @throws WC_Data_Exception
         */
        public function set_start($timestamp)
        {
        }
        /**
         * Return the status without wc- internal prefix.
         *
         * @param  string $context
         * @return string
         */
        public function get_status($context = 'view')
        {
        }
        /**
         * Set status.
         *
         * @param string $new_status Status to change the order to. No internal wc- prefix is required.
         * @return array details of change
         */
        public function set_status($new_status)
        {
        }
        /**
         * Get local_timezone.
         *
         * @param  string $context
         * @return string
         */
        public function get_local_timezone($context = 'view')
        {
        }
        /**
         * Set local_timezone.
         *
         * @param string $timezone Local timezone.
         * @throws WC_Data_Exception
         */
        public function set_local_timezone($timezone)
        {
        }
        /**
         * Get date cancelled.
         *
         * @since 3.0.0
         *
         * @param  string $context View or edit.
         * @return int
         */
        public function get_date_cancelled($context = 'view')
        {
        }
        /**
         * Set date cancelled.
         *
         * @since 3.0.0
         *
         * @param string|int $timestamp Timestamp in date format or Unix timestamp.
         */
        public function set_date_cancelled($timestamp)
        {
        }
        /**
         * Get note.
         *
         * @since 3.0.0
         *
         * @param  string $context View or edit.
         * @return string
         */
        public function get_note($context = 'view')
        {
        }
        /**
         * Set note.
         *
         * @since 3.0.0
         *
         * @param string $note Note to set.
         */
        public function set_note($note)
        {
        }
        /**
         * Get attendance_status.
         *
         * @since 3.1.0
         *
         * @param  string $context View or edit.
         * @return string
         */
        public function get_attendance_status($context = 'view')
        {
        }
        /**
         * Set attendance_status.
         *
         * @since 3.1.0
         *
         * @param string $attendance_status Attendance status to set.
         */
        public function set_attendance_status($attendance_status)
        {
        }
        /*
        |--------------------------------------------------------------------------
        | Conditionals
        |--------------------------------------------------------------------------
        */
        /**
         * Checks the booking status against a passed in status.
         *
         * @return bool
         */
        public function has_status($status)
        {
        }
        /**
         * Return if all day event.
         *
         * @return boolean
         */
        public function is_all_day()
        {
        }
        /**
         * See if this booking is within a block.
         *
         * @return boolean
         */
        public function is_within_block($block_start, $block_end)
        {
        }
        /**
         * See if the booking intersects a block.
         *
         * @param int $block_start Block start timestamp.
         * @param int $block_end Block end timestamp.
         *
         * @return bool
         */
        public function is_intersecting_block($block_start, $block_end)
        {
        }
        /**
         * See if this booking is booked on a date.
         *
         * @return boolean
         */
        public function is_booked_on_day($block_start, $block_end)
        {
        }
        /**
         * See if this booking can still be cancelled by the user or not.
         *
         * @return boolean
         */
        public function passed_cancel_day()
        {
        }
        /**
         * Returns if persons are enabled/needed for the booking product
         * @return boolean
         */
        public function has_persons()
        {
        }
        /**
         * Returns if resources are enabled/needed for the booking product
         * @return boolean
         */
        public function has_resources()
        {
        }
        /*
        |--------------------------------------------------------------------------
        | Non-CRUD getters/helpers.
        |--------------------------------------------------------------------------
        */
        /**
         * Returns booking start date.
         *
         * @return string Date formatted via date_i18n
         */
        public function get_start_date($date_format = \null, $time_format = \null, $local = \false)
        {
        }
        /**
         * Returns booking end date.
         *
         * @return string Date formatted via date_i18n
         */
        public function get_end_date($date_format = \null, $time_format = \null, $local = \false)
        {
        }
        /**
         * Return the amount of persons for this booking.
         *
         * @return int
         */
        public function get_persons()
        {
        }
        /**
         * Return the amount of persons for this booking.
         *
         * @return int
         */
        public function get_persons_total()
        {
        }
        /**
         * Returns the object of the order corresponding to this booking.
         *
         * @return WC_Product|Boolean
         */
        public function get_product()
        {
        }
        /**
         * Returns the object of the order corresponding to this booking.
         *
         * @return WC_Order|Boolean
         */
        public function get_order()
        {
        }
        /**
         * Returns information about the customer of this order.
         *
         * @version 3.6.0
         *
         * @return object containing customer information
         */
        public function get_customer()
        {
        }
        /**
         * Resolve a customer's display name, preferring their full name
         * (first + last) and falling back to the account display name.
         *
         * @since 3.6.0
         *
         * @param WP_User $user User object.
         * @return string
         */
        private function get_customer_name($user)
        {
        }
        /**
         * Get the resource/type for this booking if applicable.
         *
         * @return bool|object WP_Post
         */
        public function get_resource()
        {
        }
        /**
         * Checks if booking end date has already passed.
         *
         * @since 1.15.16
         * @return bool True if current time is bigger than booking end date.
         */
        public function passed_end_date()
        {
        }
        /**
         * Schedule event for this booking.
         *
         * @param string $type
         * @return bool Whether schedule was done or not.
         */
        public function maybe_schedule_event($type)
        {
        }
        /**
         * Schedule events for this booking.
         */
        public function schedule_events()
        {
        }
        /**
         * Returns the cancel URL for a booking
         *
         * @param string $redirect
         * @return string
         */
        public function get_cancel_url($redirect = '')
        {
        }
        /*
        |--------------------------------------------------------------------------
        | Legacy.
        |--------------------------------------------------------------------------
        */
        /**
         * Actually create for the new booking belonging to an order.
         *
         * @param string $status Status for new order.
         */
        public function create($status = 'unpaid')
        {
        }
        /**
         * Will change the booking status once the order is paid for.
         *
         * @return bool
         */
        public function paid()
        {
        }
        /**
         * Populate the data with the id of the booking provided
         * Will query for the post belonging to this booking and store it
         *
         * @return boolean
         * @param int $booking_id
         */
        public function populate_data($booking_id)
        {
        }
        /**
         * Set the new status for this booking.
         *
         * @param string $status
         * @return bool
         */
        public function update_status($status)
        {
        }
        /**
         * Magic __isset method for backwards compatibility.
         *
         * @param string $key
         * @return bool
         */
        public function __isset($key)
        {
        }
        /**
         * Magic __get method for backwards compatibility.
         *
         * @param string $key
         * @return mixed
         */
        public function __get($key)
        {
        }
        /**
         * Get date localized to client timezone.
         *
         * @param  int $date timestamp to convert.
         * @return string|null datetime string in client's timezone.
         */
        public function get_localized_date($date)
        {
        }
        /**
         * If there is no local timezone assume server timezone.
         *
         * @since 1.15.18
         */
        public function get_booking_timezone()
        {
        }
        /**
         * Indicate whether the booking is active, i.e. not cancelled or refunded.
         *
         * @since 1.15.30
         *
         * @return bool
         */
        public function is_active()
        {
        }
    }
    /**
     * Class WC_Global_Availability
     *
     * @package WooCommerce/Bookings
     */
    /**
     * Class WC_Global_Availability
     *
     * @version 3.11.0
     */
    class WC_Global_Availability extends \WC_Bookings_Data implements \ArrayAccess
    {
        const DATA_STORE = 'booking-global-availability';
        const SECONDS_IN_A_MINUTE = 60;
        /**
         * This is the name of this object type.
         *
         * @var string
         */
        protected $object_type = 'booking_global_availability';
        protected $cache_group = 'booking-global-availability';
        /**
         * Data array.
         *
         * @var array
         */
        protected $data = array('gcal_event_id' => '', 'title' => '', 'range_type' => 'custom', 'from_date' => '', 'to_date' => '', 'from_range' => '', 'to_range' => '', 'bookable' => 'yes', 'priority' => 10, 'ordering' => 0, 'date_created' => '', 'date_modified' => '', 'rrule' => '', 'rule_type' => '');
        /**
         * Constructor.
         *
         * @param int|object|array $id Id.
         *
         * @throws Exception When validation fails.
         */
        public function __construct($id = 0)
        {
        }
        /**
         * Get created date.
         *
         * @param  string $context What the value is for.
         *                          Valid values are 'view' and 'edit'.
         *
         * @return WC_DateTime|null Object if the date is set or null if there is no date.
         */
        public function get_date_created($context = 'view')
        {
        }
        /**
         * Get modified date.
         *
         * @param  string $context What the value is for.
         *                          Valid values are 'view' and 'edit'.
         *
         * @return WC_DateTime|null Object if the date is set or null if there is no date.
         */
        public function get_date_modified($context = 'view')
        {
        }
        /**
         * Get title.
         *
         * @param  string $context What the value is for.
         *                          Valid values are 'view' and 'edit'.
         *
         * @return string
         */
        public function get_title($context = 'view')
        {
        }
        /**
         * Get google calendar event id.
         *
         * @param  string $context What the value is for.
         *                          Valid values are 'view' and 'edit'.
         *
         * @return string
         */
        public function get_gcal_event_id($context = 'view')
        {
        }
        /**
         * Get Range Type.
         *
         * @param  string $context What the value is for.
         *                          Valid values are 'view' and 'edit'.
         *
         * @return string
         */
        public function get_range_type($context = 'view')
        {
        }
        /**
         * Get From Date
         *
         * @param  string $context What the value is for.
         *                          Valid values are 'view' and 'edit'.
         *
         * @return string
         */
        public function get_from_date($context = 'view')
        {
        }
        /**
         * Get to Date.
         *
         * @param  string $context What the value is for.
         *                          Valid values are 'view' and 'edit'.
         *
         * @return string
         */
        public function get_to_date($context = 'view')
        {
        }
        /**
         * Get From Range.
         *
         * @param  string $context What the value is for.
         *                          Valid values are 'view' and 'edit'.
         *
         * @return string
         */
        public function get_from_range($context = 'view')
        {
        }
        /**
         * Get To Range.
         *
         * @param  string $context What the value is for.
         *                          Valid values are 'view' and 'edit'.
         *
         * @return string
         */
        public function get_to_range($context = 'view')
        {
        }
        /**
         * Get Bookable. 'yes' or 'no'.
         *
         * @param  string $context What the value is for.
         *                          Valid values are 'view' and 'edit'.
         *
         * @return string
         */
        public function get_bookable($context = 'view')
        {
        }
        /**
         * Get Priority.
         *
         * @param  string $context What the value is for.
         *                          Valid values are 'view' and 'edit'.
         *
         * @return string
         */
        public function get_priority($context = 'view')
        {
        }
        /**
         * Get RRULE.
         *
         * @param  string $context What the value is for.
         *                          Valid values are 'view' and 'edit'.
         *
         * @return string
         */
        public function get_rrule($context = 'view')
        {
        }
        /**
         * Get Rule Type.
         *
         * @param  string $context What the value is for.
         *                          Valid values are 'view' and 'edit'.
         *
         * @return string
         */
        public function get_rule_type($context = 'view')
        {
        }
        /**
         * Get Ordering.
         *
         * @param  string $context What the value is for.
         *                          Valid values are 'view' and 'edit'.
         *
         * @return string
         */
        public function get_ordering($context = 'view')
        {
        }
        /**
         * Get whether or not availability rule applies to full days.
         *
         * @return bool True if availability rule affects full day.
         */
        public function is_all_day()
        {
        }
        /**
         * Get whether or not it's a store availability.
         *
         * @return bool True if it's a store availability.
         */
        public function is_store_availability()
        {
        }
        /**
         * Get start and end times for global availability rule.
         *
         * @param int $date Timestamp of beginning of the day to check.
         *
         * @return null|array {
         *   int $start  Timestamp of start time.
         *   int $end    Timestamp of end time.
         */
        public function get_time_range_for_date($date)
        {
        }
        /**
         * Helper method that returns formatted date.
         *
         * @param int    $date_ts Timestamp to be formatted to date.
         * @param string $date_format Format string for date.
         * @param string $time_format Format string for time.
         *
         * @return string Date formatted via date_i18n
         */
        public function get_formatted_date($date_ts = \null, $date_format = \null, $time_format = \null)
        {
        }
        /**
         * For multi-day events, check if the timestamp occurs after 00:00.
         *
         * @param int $start_ts Timestamp.
         *
         * @return bool True if date starts during the day.
         */
        public function date_starts_today($start_ts)
        {
        }
        /**
         * Set Google calendar event id.
         *
         * @param string $gcal_event_id Google calendar event id.
         *
         * @return WC_Global_Availability
         */
        public function set_gcal_event_id($gcal_event_id)
        {
        }
        /**
         * Set Title
         *
         * @param string $title Title.
         *
         * @return WC_Global_Availability
         */
        public function set_title($title)
        {
        }
        /**
         * Set Range Type.
         *
         * @param string $range_type Range Type.
         *
         * @return WC_Global_Availability
         */
        public function set_range_type($range_type)
        {
        }
        /**
         * Set From Date
         *
         * @param string $from_date From Date.
         *
         * @return WC_Global_Availability
         */
        public function set_from_date($from_date)
        {
        }
        /**
         * Set To Date.
         *
         * @param string $to_date To Date.
         *
         * @return WC_Global_Availability
         */
        public function set_to_date($to_date)
        {
        }
        /**
         * Set From Range.
         *
         * @param string $from_range From Range.
         *
         * @return WC_Global_Availability
         */
        public function set_from_range($from_range)
        {
        }
        /**
         * Set To Range.
         *
         * @param string $to_range To Range.
         *
         * @return WC_Global_Availability
         */
        public function set_to_range($to_range)
        {
        }
        /**
         * Set Bookable.
         *
         * @param string $bookable Bookable.
         *
         * @return WC_Global_Availability
         */
        public function set_bookable($bookable)
        {
        }
        /**
         * Set Priority.
         *
         * @param string $priority Priority.
         *
         * @return WC_Global_Availability
         */
        public function set_priority($priority)
        {
        }
        /**
         * Set Ordering.
         *
         * @param string $ordering Ordering.
         *
         * @return WC_Global_Availability
         */
        public function set_ordering($ordering)
        {
        }
        /**
         * Set RRULE.
         *
         * @param string $rrule RRULE.
         *
         * @return WC_Global_Availability
         */
        public function set_rrule($rrule)
        {
        }
        /**
         * Set Rule Type.
         *
         * @param string $rule_type Rule Type.
         *
         * @return WC_Global_Availability
         */
        public function set_rule_type($rule_type)
        {
        }
        /**
         * Set webhook created date.
         *
         * @since 3.2.0
         *
         * @param string|integer|null $date UTC timestamp, or ISO 8601 DateTime.
         *                                  If the DateTime string has no timezone or offset,
         *                                  WordPress site timezone will be assumed.
         *                                  Null if their is no date.
         *
         * @return WC_Global_Availability
         */
        public function set_date_created($date = \null)
        {
        }
        /**
         * Set webhook modified date.
         *
         * @since 3.2.0
         *
         * @param string|integer|null $date UTC timestamp, or ISO 8601 DateTime.
         *                                  If the DateTime string has no timezone or offset,
         *                                  WordPress site timezone will be assumed.
         *                                  Null if their is no date.
         *
         * @return WC_Global_Availability
         */
        public function set_date_modified($date = \null)
        {
        }
        /**
         * Check if an availability is in the past.
         *
         * @return bool
         */
        public function has_past()
        {
        }
        /**
         * Check of offset exists.
         *
         * @param mixed $offset Offset.
         *
         * @return bool
         */
        #[\ReturnTypeWillChange]
        public function offsetExists($offset)
        {
        }
        /**
         * Get prop based on offset.
         *
         * @param mixed $offset Offset.
         *
         * @return mixed
         */
        #[\ReturnTypeWillChange]
        public function offsetGet($offset)
        {
        }
        /**
         * Set offset.
         *
         * @param mixed $offset Offset.
         * @param mixed $value Value.
         */
        #[\ReturnTypeWillChange]
        public function offsetSet($offset, $value)
        {
        }
        /**
         * Unset Offset.
         *
         * @param mixed $offset Offset.
         */
        #[\ReturnTypeWillChange]
        public function offsetUnset($offset)
        {
        }
        /**
         * Convert offset to it's new name.
         *
         * @param mixed $offset Offset.
         *
         * @return string
         */
        private function update_bc_offset($offset)
        {
        }
    }
    /**
     * Class for a booking product's person types.
     *
     * @version 3.11.0
     */
    class WC_Product_Booking_Person_Type extends \WC_Bookings_Data
    {
        /**
         * This is the name of this object type.
         *
         * @var string
         */
        protected $object_type = 'product_booking_person_type';
        /**
         * Data array.
         *
         * @var array
         */
        protected $data = array('block_cost' => 0, 'cost' => 0, 'description' => '', 'max' => '', 'min' => 0, 'name' => '', 'parent_id' => 0, 'sort_order' => 0);
        /**
         * Constructor.
         *
         * @param int|object|array $person_type
         */
        public function __construct($person_type = 0)
        {
        }
        /**
         * Save should create or update based on object existence.
         *
         * @return int
         */
        public function save()
        {
        }
        /**
         * __isset function for backwards compatibility with post data.
         *
         * @param string $key
         * @return bool
         */
        public function __isset($key)
        {
        }
        /**
         * __get function for backwards compatibility with post data.
         *
         * @param string $key
         * @return string
         */
        public function __get($key)
        {
        }
        /*
        |--------------------------------------------------------------------------
        | CRUD Getters and setters.
        |--------------------------------------------------------------------------
        */
        /**
         * Get parent ID.
         *
         * @param  string $context
         * @return int
         */
        public function get_parent_id($context = 'view')
        {
        }
        /**
         * Set parent ID.
         *
         * @param  int $value
         */
        public function set_parent_id($value)
        {
        }
        /**
         * Get name.
         *
         * @param  string $context
         * @return string
         */
        public function get_name($context = 'view')
        {
        }
        /**
         * Set name.
         *
         * @param string $value
         */
        public function set_name($value)
        {
        }
        /**
         * Get description.
         *
         * @param  string $context
         * @return string
         */
        public function get_description($context = 'view')
        {
        }
        /**
         * Set description.
         *
         * @param string $value
         */
        public function set_description($value)
        {
        }
        /**
         * Get min.
         *
         * @param  string $context
         * @return string
         */
        public function get_min($context = 'view')
        {
        }
        /**
         * Set min.
         *
         * @param int $value
         */
        public function set_min($value)
        {
        }
        /**
         * Get max.
         *
         * @param  string $context
         * @return string
         */
        public function get_max($context = 'view')
        {
        }
        /**
         * Set max.
         *
         * @param int $value
         */
        public function set_max($value)
        {
        }
        /**
         * Get cost.
         *
         * @param  string $context
         * @return string
         */
        public function get_cost($context = 'view')
        {
        }
        /**
         * Set cost.
         *
         * @param int $value
         */
        public function set_cost($value)
        {
        }
        /**
         * Get block_cost.
         *
         * @param  string $context
         * @return string
         */
        public function get_block_cost($context = 'view')
        {
        }
        /**
         * Set block_cost.
         *
         * @param int $value
         */
        public function set_block_cost($value)
        {
        }
        /**
         * Get sort_order.
         *
         * @param  string $context
         * @return int
         */
        public function get_sort_order($context = 'view')
        {
        }
        /**
         * Set sort_order.
         *
         * @param int $value
         */
        public function set_sort_order($value)
        {
        }
    }
    /**
     * Class for a booking product's resource type.
     * This object is associated with a bookable product and some data comes from that relationship.
     *
     * @version 3.11.0
     */
    class WC_Product_Booking_Resource extends \WC_Bookings_Data
    {
        /**
         * This is the name of this object type.
         *
         * @var string
         */
        protected $object_type = 'product_booking_resource';
        /**
         * Data array.
         *
         * @var array
         */
        protected $data = array('availability' => array(), 'base_cost' => 0, 'block_cost' => 0, 'name' => '', 'parent_id' => 0, 'qty' => 1, 'sort_order' => 0, 'status' => 'publish');
        /**
         * Constructor. Needs a product ID in order to load data from the product/resource relationship.
         *
         * @param int|object|array $resource Resource data.
         * @param int              $product_id Product ID.
         */
        public function __construct($resource = 0, $product_id = 0)
        {
        }
        /**
         * Get the post type for the resource.
         *
         * @return string
         */
        public function get_post_type()
        {
        }
        /**
         * Save should create or update based on object existence.
         *
         * @return int
         */
        public function save()
        {
        }
        /**
         * __isset function for backwards compatibility with post data.
         *
         * @param string $key
         * @return bool
         */
        public function __isset($key)
        {
        }
        /**
         * __get function for backwards compatibility with post data.
         *
         * @param string $key
         * @return string
         */
        public function __get($key)
        {
        }
        /**
         * Return if we have qty at resource level.
         *
         * @return boolean
         */
        public function has_qty()
        {
        }
        /**
         * Get the title of the resource.
         *
         * @return string
         */
        public function get_title()
        {
        }
        /**
         * Return the base cost (set at parent level).
         *
         * @return float
         */
        public function get_base_cost()
        {
        }
        /**
         * Return the block cost  (set at parent level).
         *
         * @return float
         */
        public function get_block_cost()
        {
        }
        /**
         * Get availability.
         *
         * @since 1.15.70 Unserialize availability rules.
         * @param string $context
         *
         * @return array
         */
        public function get_availability($context = 'view')
        {
        }
        /**
         * Set availability.
         *
         * @param array $value
         */
        public function set_availability($value)
        {
        }
        /*
        |--------------------------------------------------------------------------
        | CRUD Getters and setters.
        |--------------------------------------------------------------------------
        */
        /**
         * Get parent ID.
         *
         * @param  string $context
         * @return int
         */
        public function get_parent_id($context = 'view')
        {
        }
        /**
         * Set parent ID.
         * The Parent is the product to which the resource belongs.
         * @access protected
         * @param  int $value
         */
        protected function set_parent_id($value)
        {
        }
        /**
         * Get name.
         *
         * @param  string $context
         * @return string
         */
        public function get_name($context = 'view')
        {
        }
        /**
         * Set name.
         *
         * @param string $value
         */
        public function set_name($value)
        {
        }
        /**
         * Get the quantity set at resource level.
         *
         * @param  string $context
         * @return int
         */
        public function get_qty($context = 'view')
        {
        }
        /**
         * Set qty.
         *
         * @param int $value
         */
        public function set_qty($value)
        {
        }
        /**
         * Get sort_order.
         *
         * @param  string $context Context for the data.
         * @return int
         */
        public function get_sort_order($context = 'view')
        {
        }
        /**
         * Set sort_order.
         *
         * @param int $value Sort order value.
         */
        public function set_sort_order($value)
        {
        }
        /**
         * Get status.
         *
         * @param  string $context Context for the data.
         * @return string
         */
        public function get_status($context = 'view')
        {
        }
        /**
         * Set status.
         *
         * @param string $value Status value.
         * @return void
         */
        public function set_status($value)
        {
        }
        /**
         * Get allowed statuses.
         *
         * @return array
         */
        public static function get_allowed_statuses()
        {
        }
        /**
         * Flush transients for all products related to a specific resource.
         *
         * @since  1.15.18
         */
        public function flush_resource_transients()
        {
        }
    }
    /**
     * Class for a booking product's team member type.
     *
     * @package WooCommerce/Bookings
     */
    /**
     * Class for a booking product's team member resource type.
     *
     * @since 3.0.0
     * @version 3.0.0
     */
    class WC_Product_Booking_Team_Member extends \WC_Product_Booking_Resource
    {
        /**
         * Extra team member data array.
         *
         * @var array
         */
        protected $extra_data = array('role' => '', 'email' => '', 'phone_number' => '', 'image_id' => 0, 'description' => '', 'note' => '', 'availability_source' => 'store');
        /**
         * Get the post type for the team member.
         *
         * @return string
         */
        public function get_post_type()
        {
        }
        /**
         * Get resource role.
         *
         * @param  string $context Context for the data.
         * @return string
         */
        public function get_role($context = 'view')
        {
        }
        /**
         * Set resource role.
         *
         * @param string $value Role value.
         */
        public function set_role($value)
        {
        }
        /**
         * Get resource email.
         *
         * @param  string $context Context for the data.
         * @return string
         */
        public function get_email($context = 'view')
        {
        }
        /**
         * Set resource email.
         *
         * @param string $value Email value.
         */
        public function set_email($value)
        {
        }
        /**
         * Get resource phone number.
         *
         * @param  string $context Context for the data.
         * @return string
         */
        public function get_phone_number($context = 'view')
        {
        }
        /**
         * Set resource phone number.
         *
         * @param string $value Phone number value.
         */
        public function set_phone_number($value)
        {
        }
        /**
         * Get resource image ID.
         *
         * @param  string $context Context for the data.
         * @return int
         */
        public function get_image_id($context = 'view')
        {
        }
        /**
         * Set resource image ID.
         *
         * @param int $value Image ID value.
         */
        public function set_image_id($value)
        {
        }
        /**
         * Get resource description.
         *
         * @param  string $context Context for the data.
         * @return string
         */
        public function get_description($context = 'view')
        {
        }
        /**
         * Set resource description.
         *
         * @param string $value Description value.
         */
        public function set_description($value)
        {
        }
        /**
         * Get resource note.
         *
         * @param  string $context Context for the data.
         * @return string
         */
        public function get_note($context = 'view')
        {
        }
        /**
         * Set resource note.
         *
         * @param string $value Note value.
         */
        public function set_note($value)
        {
        }
        /**
         * Get resource availability source.
         *
         * @param  string $context Context for the data.
         * @return string One of 'team_member' or 'store'.
         */
        public function get_availability_source($context = 'view')
        {
        }
        /**
         * Set resource availability source.
         *
         * @param string $value Availability source: 'team_member' or 'store'.
         */
        public function set_availability_source($value)
        {
        }
    }
    /**
     * WC Booking Data Store: Stored in CPT.
     *
     * @todo When 2.6 support is dropped, implement WC_Object_Data_Store_Interface
     * @version 3.12.0
     */
    class WC_Booking_Data_Store extends \WC_Data_Store_WP
    {
        /**
         * Meta keys and how they transfer to CRUD props.
         *
         * @var array
         */
        private $booking_meta_key_to_props = array('_booking_all_day' => 'all_day', '_booking_cost' => 'cost', '_booking_customer_id' => 'customer_id', '_booking_woo_customer_id' => 'woo_customer_id', '_booking_order_item_id' => 'order_item_id', '_booking_parent_id' => 'parent_id', '_booking_persons' => 'person_counts', '_booking_product_id' => 'product_id', '_booking_resource_id' => 'resource_id', '_booking_start' => 'start', '_booking_end' => 'end', '_wc_bookings_gcalendar_event_id' => 'google_calendar_event_id', '_local_timezone' => 'local_timezone', '_booking_date_cancelled' => 'date_cancelled', '_booking_note' => 'note', '_booking_attendance_status' => 'attendance_status');
        /**
         * Request-scoped booking sets registered through `prefetch_bookings_in_date_range()`.
         *
         * Keyed by site and object-ID set; each entry holds the site it belongs to, the covered
         * window and, once loaded, the bookings inside it. Object IDs are only unique within a
         * site, so a set is never shared across a `switch_to_blog()` boundary.
         *
         * @since 3.10.0
         * @var array
         */
        private static $prefetched_bookings = array();
        /**
         * Bookings transient version the prefetched sets were loaded against, per site.
         *
         * @since 3.10.0
         * @var array
         */
        private static $prefetched_version = array();
        /**
         * Returns the meta-key → CRUD-prop map for bookings.
         *
         * @return array
         */
        public function get_meta_key_to_props_map()
        {
        }
        /*
        |--------------------------------------------------------------------------
        | CRUD Methods
        |--------------------------------------------------------------------------
        */
        /**
         * Method to create a new booking in the database.
         *
         * @version 3.12.0
         * @param WC_Booking $booking
         */
        public function create(&$booking)
        {
        }
        /**
         * Method to read an order from the database.
         *
         * @param WC_Booking $booking Booking object.
         */
        public function read(&$booking)
        {
        }
        /**
         * Method to update an order in the database.
         *
         * @param WC_Booking $booking
         */
        public function update(&$booking)
        {
        }
        /**
         * Method to delete an order from the database.
         *
         * @param WC_Booking $booking Booking object.
         * @param array $args Array of args to pass to the delete method.
         */
        public function delete(&$booking, $args = array())
        {
        }
        /**
         * Helper method that updates all the post meta for a booking based on it's settings in the WC_Booking class.
         *
         * @param WC_Booking $booking Booking object.
         */
        protected function update_post_meta(&$booking)
        {
        }
        /**
         * For a given order ID, get all bookings that belong to it.
         *
         * @param  int|array $order_id
         *
         * @return int[] Array of booking IDs.
         */
        public static function get_booking_ids_from_order_id($order_id)
        {
        }
        /**
         * For a given order item ID, get all bookings that belong to it.
         *
         * @param  int $order_item_id
         * @return array
         */
        public static function get_booking_ids_from_order_item_id($order_item_id)
        {
        }
        /**
         * Check if a given order contains only Bookings items.
         * If the order contains non-booking items, it will return false.
         * Otherwise, it will return an array of Bookings.
         *
         * @param  WC_Order $order
         * @return bool|array
         */
        public static function get_order_contains_only_bookings($order)
        {
        }
        /**
         * Get booking ids for an object  by ID. e.g. product.
         *
         * @param  array $filters Filters to apply.
         * @return array
         */
        public static function get_booking_ids_by($filters = array())
        {
        }
        /**
         * For a given booking ID, get it's linked order ID if set.
         *
         * @param  int $booking_id
         * @return int
         */
        public static function get_booking_order_id($booking_id)
        {
        }
        /**
         * For a given booking ID, get it's linked order item ID if set.
         *
         * @param  int $booking_id
         * @return int
         */
        public static function get_booking_order_item_id($booking_id)
        {
        }
        /**
         * For a given booking ID, get it's linked order customer ID if set.
         *
         * @param  int $booking_id
         * @return int
         */
        public static function get_booking_customer_id($booking_id)
        {
        }
        /**
         * For a given booking ID, get its WooCommerce Analytics customer ID if set.
         *
         * @since  3.5.0
         * @param  int $booking_id Booking ID.
         * @return int
         */
        public static function get_booking_woo_customer_id($booking_id)
        {
        }
        /**
         * Hydrate an array of booking IDs into WC_Booking objects.
         *
         * Batch-primes the post and meta caches so each WC_Booking read hits the
         * object cache instead of the DB, avoiding an N+1 over the result set. The
         * prime is chunked so the post/meta result-set buffers stay bounded
         * regardless of how many bookings the window returns.
         *
         * @version 3.6.0
         * @param  int[] $booking_ids Booking post IDs.
         * @return array WC_Booking objects.
         */
        private static function hydrate_bookings($booking_ids)
        {
        }
        /**
         * Gets bookings for product ids and resource ids.
         *
         * @param  array   $ids       Booking ids
         * @param  array   $status    Booking statuses
         * @param  integer $date_from Date from
         * @param  integer $date_to   Date to
         * @return array of WC_Booking objects
         */
        public static function get_bookings_for_objects_query($ids, $status, $date_from = 0, $date_to = 0)
        {
        }
        /**
         * Gets bookings for product ids and resource ids.
         *
         * @param  array   $ids       Booking ids
         * @param  array   $status    Booking statuses
         * @param  integer $date_from Date from
         * @param  integer $date_to   Date to
         * @return array of WC_Booking objects
         */
        public static function get_bookings_for_objects($ids = array(), $status = array(), $date_from = 0, $date_to = 0)
        {
        }
        /**
         * Finds existing bookings for a product and its tied resources.
         *
         * @param  WC_Product_Booking $bookable_product Bookable product
         * @param  int                $min_date         Minimum date
         * @param  int                $max_date         Maximum date
         * @return array
         */
        public static function get_all_existing_bookings($bookable_product, $min_date = 0, $max_date = 0)
        {
        }
        /**
         * Return all bookings for a product in a given range.
         * @param integer $start_date
         * @param integer $end_date
         * @param mixed   $product_or_resource_ids
         * @param bool    $check_in_cart
         *
         * @return array
         */
        public static function get_bookings_in_date_range($start_date, $end_date, $product_or_resource_ids = 0, $check_in_cart = \true)
        {
        }
        /**
         * Register a booking set that should be fetched in one go for the current request.
         *
         * Availability is checked one block / duration / resource combination at a time, and each
         * of those checks would otherwise run its own `get_bookings_in_date_range()` query. Declaring
         * the widest window and the full object set up-front lets those checks share a single query:
         * the set is loaded lazily on the first cache miss and every subsequent lookup that falls
         * inside it is answered from memory.
         *
         * Registering a scope never changes what a lookup returns — a lookup that is not fully
         * covered by a scope still runs its own query.
         *
         * @since 3.10.0
         *
         * @param int   $start_date Start of the window, as a timestamp.
         * @param int   $end_date   End of the window, as a timestamp.
         * @param array $ids        Product and/or resource IDs the window should cover.
         * @return void
         */
        public static function prefetch_bookings_in_date_range($start_date, $end_date, $ids)
        {
        }
        /**
         * Discard every registered prefetch scope.
         *
         * @since 3.10.0
         *
         * @return void
         */
        public static function clear_prefetched_bookings()
        {
        }
        /**
         * Answer a `get_bookings_in_date_range()` lookup from a registered prefetch scope.
         *
         * Returns `null` when no scope covers the lookup, in which case the caller must run its
         * own query. The filtering below mirrors the SQL built by `get_booking_ids_by()` exactly,
         * including the all-day comparison, so a served lookup is indistinguishable from a query.
         *
         * @since 3.10.0
         *
         * @param array $args       Query args as built by `get_bookings_in_date_range()`.
         * @param int   $start_date Start of the range being looked up.
         * @param int   $end_date   End of the range being looked up.
         * @return array|null Booking IDs, or null when the lookup cannot be served.
         */
        private static function get_prefetched_booking_ids($args, $start_date, $end_date)
        {
        }
        /**
         * Load the bookings for a prefetch scope, once per request.
         *
         * Only the values the lookups filter on are kept, pre-formatted the way they are stored in
         * meta. The `WC_Booking` objects are not held on to: callers get IDs and hydrate their own,
         * exactly as they do for a queried lookup.
         *
         * @since 3.10.0
         *
         * @param string $key Scope key.
         * @return array Booking rows: id, product_id, resource_id, status, all_day, start, end.
         */
        private static function load_prefetched_bookings($key)
        {
        }
        /**
         * Drop the loaded booking sets when bookings changed during the request.
         *
         * The scoped windows themselves are kept so they are simply reloaded on next use. The
         * transient version is site-scoped, so it is tracked and compared per site.
         *
         * @since 3.10.0
         *
         * @return void
         */
        private static function maybe_flush_prefetched_bookings()
        {
        }
        /**
         * Narrow a prefetched booking set down to the bookings a single lookup would have returned.
         *
         * @since 3.10.0
         *
         * @param array $rows         Booking rows from the scope, as built by `load_prefetched_bookings()`.
         * @param array $args         Query args as built by `get_bookings_in_date_range()`.
         * @param int   $start_date   Start of the range being looked up.
         * @param int   $end_date     End of the range being looked up.
         * @param array $product_ids  Product IDs the lookup is scoped to, if any.
         * @param array $resource_ids Resource IDs the lookup is scoped to, if any.
         * @return array Booking IDs.
         */
        private static function filter_prefetched_bookings($rows, $args, $start_date, $end_date, $product_ids, $resource_ids)
        {
        }
        /**
         * Gets bookings for a user by ID.
         *
         * @param  int   $user_id    The id of the user that we want bookings for
         * @param  array $query_args The query arguments used to get booking IDs
         * @return array             Array of WC_Booking objects
         */
        public static function get_bookings_for_user($user_id, $query_args = array())
        {
        }
        /**
         * Gets bookings for a product by ID.
         *
         * @param int $product_id The id of the product that we want bookings for
         * @param array $status Order statuses
         * @return array of WC_Booking objects
         */
        public static function get_bookings_for_product($product_id, $status = array('confirmed', 'paid'))
        {
        }
        /**
         * Search booking data for a term and return ids.
         *
         * @param  string $term Searched term.
         * @return array of ids
         */
        public function search_bookings($term)
        {
        }
    }
    /**
     * Class WC_Global_Availability_Data_Store
     *
     * @package Woocommerce/Bookings
     */
    /**
     * WC Global Availability Data Store: Stored in Custom table.
     *
     * @version 3.11.0
     * @todo When 2.6 support is dropped, implement WC_Object_Data_Store_Interface
     */
    class WC_Global_Availability_Data_Store extends \WC_Data_Store_WP
    {
        const TABLE_NAME = 'wc_bookings_availability';
        const CACHE_GROUP = 'wc-bookings-availability';
        const DEFAULT_MIN_DATE = '0000-00-00';
        const DEFAULT_MAX_DATE = '9999-99-99';
        protected $meta_type = 'bookings_availability';
        protected function get_db_info()
        {
        }
        /**
         * Create a new global availability in the database.
         *
         * @param WC_Global_Availability $availability WC_Global_Availability instance.
         */
        public function create(&$availability)
        {
        }
        /**
         * Read availability from the database.
         *
         * @param  WC_Global_Availability $availability Instance.
         * @throws Exception When webhook is invalid.
         */
        public function read(&$availability)
        {
        }
        /**
         * Update a webhook.
         *
         * @param WC_Global_Availability $availability Instance.
         */
        public function update(&$availability)
        {
        }
        /**
         * Remove a webhook from the database.
         *
         * @param WC_Global_Availability $availability Instance.
         * @param array                  $options      Options array.
         */
        public function delete(&$availability, $options = array())
        {
        }
        /**
         * Get all global availabilties defined in the database as objects.
         *
         * @param array  $filters { @see self::build_query() }.
         * @param string $min_date { @see self::build_query() }.
         * @param string $max_date { @see self::build_query() }.
         *
         * @return WC_Global_Availability[]
         * @throws Exception Validation fails.
         */
        public function get_all($filters = array(), $min_date = self::DEFAULT_MIN_DATE, $max_date = self::DEFAULT_MAX_DATE)
        {
        }
        /**
         * Should return whether Google event availability rules exists in database.
         *
         * @since 1.15.69
         *
         * @return bool
         */
        public function has_google_event()
        {
        }
        /**
         * Get global availability as array.
         *
         * @param array  $filters { @see self::build_query() }.
         * @param string $min_date { @see self::build_query() }.
         * @param string $max_date { @see self::build_query() }.
         *
         * @return array|null|object
         */
        public function get_all_as_array($filters = array(), $min_date = self::DEFAULT_MIN_DATE, $max_date = self::DEFAULT_MAX_DATE)
        {
        }
        /**
         * Builds query string for availability.
         *
         * @param array $filters { @see self::build_query() }.
         * @param string $min_date Minimum date to select intersecting availability entries for (yyyy-mm-dd format).
         * @param string $max_date Maximum date to select intersecting availability entries for (yyyy-mm-dd format).
         *
         * @return string
         */
        private function build_query($filters, $min_date, $max_date)
        {
        }
        /**
         * Validates query filter comparison (defaults to '=')
         *
         * @param string $compare Raw compare string.
         * @return string Validated compare string.
         */
        private function validate_compare($compare)
        {
        }
        /**
         * Return all bookings and blocked availability for a product in a given range.
         * @param integer $start_date
         * @param integer $end_date
         * @param mixed   $product_or_resource_ids
         * @param bool    $check_in_cart
         *
         * @return array
         */
        public static function get_events_in_date_range($start_date, $end_date, $product_or_resource_ids = 0, $check_in_cart = \true)
        {
        }
        /**
         * Return an array global_availability_rules
         * @since 1.13.0
         *
         * @param  int   $start_date
         * @param  int $end_date End date.
         *
         * @return array Days that are buffer days and therefor should be un-bookable
         */
        public static function get_global_availability_in_date_range($start_date, $end_date)
        {
        }
        /**
         * Get availability rules grouped by date or day.
         *
         * @param string $rule_type The rule type ('date_override' or 'weekly').
         * @param bool   $include_non_bookable Whether to include non-bookable rules (only applies to date_override).
         * @return array Availability rules grouped by date or day.
         */
        public function get_time_slots_grouped($rule_type, $include_non_bookable = \true)
        {
        }
    }
    /**
     * WC Bookable Product Data Store: Stored in CPT.
     *
     * @todo When 2.6 support is dropped, implement WC_Object_Data_Store_Interface
     * @version 3.12.0
     */
    class WC_Product_Booking_Data_Store_CPT extends \WC_Product_Data_Store_CPT
    {
        /**
         * Meta keys and how they transfer to CRUD props.
         *
         * @var array
         */
        private $booking_meta_key_to_props = array('_has_additional_costs' => 'has_additional_costs', '_wc_booking_apply_adjacent_buffer' => 'apply_adjacent_buffer', '_wc_booking_availability' => 'availability', '_wc_booking_block_cost' => 'block_cost', '_wc_booking_buffer_period' => 'buffer_period', '_wc_booking_calendar_display_mode' => 'calendar_display_mode', '_wc_booking_cancel_limit_unit' => 'cancel_limit_unit', '_wc_booking_cancel_limit' => 'cancel_limit', '_wc_booking_check_availability_against' => 'check_start_block_only', '_wc_booking_cost' => 'cost', '_wc_booking_default_date_availability' => 'default_date_availability', '_wc_booking_duration_type' => 'duration_type', '_wc_booking_duration_unit' => 'duration_unit', '_wc_booking_duration' => 'duration', '_wc_booking_enable_range_picker' => 'enable_range_picker', '_wc_booking_first_block_time' => 'first_block_time', '_wc_booking_has_person_types' => 'has_person_types', '_wc_booking_has_persons' => 'has_persons', '_wc_booking_has_resources' => 'has_resources', '_wc_booking_has_restricted_days' => 'has_restricted_days', '_wc_booking_has_shared_resource_qty' => 'has_shared_resource_qty', '_wc_booking_max_date_unit' => 'max_date_unit', '_wc_booking_max_date' => 'max_date_value', '_wc_booking_max_duration' => 'max_duration', '_wc_booking_max_persons_group' => 'max_persons', '_wc_booking_min_date_unit' => 'min_date_unit', '_wc_booking_min_date' => 'min_date_value', '_wc_booking_min_duration' => 'min_duration', '_wc_booking_min_persons_group' => 'min_persons', '_wc_booking_person_cost_multiplier' => 'has_person_cost_multiplier', '_wc_booking_person_qty_multiplier' => 'has_person_qty_multiplier', '_wc_booking_pricing' => 'pricing', '_wc_booking_qty' => 'qty', '_wc_booking_requires_confirmation' => 'requires_confirmation', '_wc_booking_resources_assignment' => 'resources_assignment', '_wc_booking_restricted_days' => 'restricted_days', '_wc_booking_user_can_cancel' => 'user_can_cancel', '_wc_display_cost' => 'display_cost', 'wc_booking_resource_label' => 'resource_label', '_price' => 'price', '_wc_booking_booking_location' => 'booking_location', '_wc_booking_booking_location_type' => 'booking_location_type');
        public function __construct()
        {
        }
        /**
         * Force meta values on save.
         *
         * @param  WC_Product $product
         */
        private function force_meta_values(&$product)
        {
        }
        /**
         * Method to create a new product in the database.
         *
         * @param WC_Product_Booking $product
         */
        public function create(&$product)
        {
        }
        /**
         * Method to read product data.
         *
         * @param WC_Product $product Product object.
         */
        public function read(&$product)
        {
        }
        /**
         * Method to update a product in the database.
         *
         * @param WC_Product $product Product object.
         */
        public function update(&$product)
        {
        }
        /**
         * Method to delete a product from the database.
         *
         * @param WC_Product $product Product object.
         * @param array $args Array of args to pass to the delete method.
         */
        public function delete(&$product, $args = array())
        {
        }
        /**
         * Helper method that updates all the post meta for a product based on it's settings in the WC_Product class.
         *
         * @param WC_Product $product Product object.
         * @param bool $force Force all props to be written even if not changed. This is used during creation.
         * @since 3.0.0
         */
        public function update_post_meta(&$product, $force = \false)
        {
        }
        /**
         * Read product data. Can be overridden by child classes to load other props.
         *
         * @param WC_Product $product Product object.
         */
        public function read_product_data(&$product)
        {
        }
        /**
         * Read resources from the database.
         *
         * @param WC_Product_Booking $product Booking product.
         */
        protected function read_resources(&$product)
        {
        }
        /**
         * Read person types from the database.
         *
         * @param WC_Product_Booking $product Booking product.
         */
        protected function read_person_types(&$product)
        {
        }
        /**
         * Update resources.
         *
         * @param WC_Product_Booking $product Booking product.
         */
        protected function update_resources(&$product)
        {
        }
        /**
         * Update person types. Person types are objects.
         *
         * @param WC_Product_Booking $product Booking product.
         */
        protected function update_person_types(&$product)
        {
        }
        /**
         * Get the booking products query args.
         *
         * @return array
         */
        private static function get_booking_products_query_args()
        {
        }
        /**
         * Get all booking products.
         *
         * @return array
         */
        public static function get_bookable_product_ids()
        {
        }
        /**
         * Get all booking products for rest endpoint.
         *
         * @return array
         */
        public static function get_bookable_product_ids_for_slots_rest_endpoint()
        {
        }
        /**
         * Read all persons from the database.
         */
        public static function get_person_types_ids()
        {
        }
    }
    /**
     * WC Bookable Product Person Type Data Store: Stored in CPT.
     *
     * @version 3.11.0
     */
    class WC_Product_Booking_Person_Type_Data_Store_CPT extends \WC_Data_Store_WP
    {
        /**
         * Create person type.
         *
         * @param WC_Product_Booking_Person_Type $person_type
         */
        public function create(&$person_type)
        {
        }
        /**
         * Method to read a person type from the database.
         *
         * @param WC_Product_Booking_Person_Type $person_type Person type object.
         */
        public function read(&$person_type)
        {
        }
        /**
         * Method to update a person type in the database.
         *
         * @param WC_Product_Booking_Person_Type $person_type
         */
        public function update(&$person_type)
        {
        }
        /**
         * Delete a person type.
         *
         * @param WC_Product_Booking_Person_Type $person_type
         * @param array $args Array of args to pass to the delete method.
         */
        public function delete(&$person_type, $args = array())
        {
        }
    }
    /**
     * WC Bookable Product Resource Data Store: Stored in CPT.
     *
     * @version 3.11.0
     */
    class WC_Product_Booking_Resource_Data_Store_CPT extends \WC_Data_Store_WP
    {
        /**
         * Stores updated props.
         *
         * @var array
         */
        protected $updated_props = array();
        /**
         * Meta keys to props mapping.
         *
         * @var array
         */
        protected $meta_key_to_props = array('_thumbnail_id' => 'image_id');
        /**
         * Flush transients for all products related to a specific resource.
         *
         * @param WC_Product_Booking_Resource $resource
         */
        public function flush_resource_transients($resource)
        {
        }
        /**
         * Create resource.
         *
         * @param WC_Product_Booking_Resource $resource
         */
        public function create(&$resource)
        {
        }
        /**
         * Method to read a resource from the database.
         *
         * @param WC_Product_Booking_Resource &$resource Resource object.
         *
         * @throws Exception When resource cannot be read.
         */
        public function read(&$resource)
        {
        }
        /**
         * Method to update a resource in the database.
         *
         * @param WC_Product_Booking_Resource $resource The resource object.
         */
        public function update(&$resource)
        {
        }
        /**
         * Delete a resource.
         *
         * @param WC_Product_Booking_Resource $resource The resource object.
         * @param array                       $args Array of args to pass to the delete method.
         */
        public function delete(&$resource, $args = array())
        {
        }
        /**
         * Read resource data.
         *
         * @param WC_Product_Booking_Resource $resource Resource object.
         */
        protected function read_resource_data(&$resource)
        {
        }
        /**
         * Read extra data associated with the resource.
         *
         * @param WC_Product_Booking_Resource $resource Resource object.
         */
        protected function read_extra_data(&$resource)
        {
        }
        /**
         * Helper method that updates all the post meta.
         *
         * @param WC_Product_Booking_Resource $resource Resource object.
         * @param bool                        $force Force update. Used during create.
         */
        protected function update_post_meta(&$resource, $force = \false)
        {
        }
        /**
         * Get all booking product resources.
         *
         * @return array
         */
        public static function get_bookable_product_resource_ids()
        {
        }
    }
    /**
     * WC_Booking_Email_Personalization_Tags class.
     *
     * Handles registration and rendering of booking-related personalization tags
     * for the WooCommerce block email editor.
     */
    class WC_Booking_Email_Personalization_Tags
    {
        /**
         * Initialize the personalization tags.
         *
         * @since 3.2.0
         *
         * @return void
         */
        public function init()
        {
        }
        /**
         * Register booking personalization tags.
         *
         * @since 3.2.0
         *
         * @param object $personalization_tags_registry The personalization tags registry.
         * @return object The personalization tags registry.
         */
        public function register_personalization_tags($personalization_tags_registry)
        {
        }
        /**
         * Get booking from context.
         *
         * @since 3.2.0
         *
         * @param array $context The context data.
         * @return WC_Booking|null The booking object or null.
         */
        private function get_booking_from_context($context)
        {
        }
        /**
         * Get booking admin link.
         *
         * @since 3.2.0
         *
         * @param array $context The context data.
         * @return string
         */
        public function get_booking_admin_link($context)
        {
        }
    }
    /**
     * Bookings Email Preview Class
     */
    class WC_Booking_Email_Previews
    {
        /**
         * Init method.
         */
        public function init()
        {
        }
        /**
         * Prepare email for preview
         *
         * @param WC_Email $email Email object.
         * @return WC_Email
         */
        public function prepare_email_for_preview($email)
        {
        }
        /**
         * Add preview booking context for block editor.
         *
         * This provides sample booking data for the block editor preview when no real booking is available.
         *
         * @since 3.2.0
         *
         * @param array    $context The context data.
         * @param WC_Email $email   The email object.
         * @return array
         */
        public function add_preview_booking_context($context, $email)
        {
        }
    }
    /**
     * WC_Email_Admin_Booking_Cancelled class.
     *
     * An email sent to the admin when a booking is cancelled.
     *
     * @version 3.11.0
     */
    class WC_Email_Admin_Booking_Cancelled extends \WC_Email
    {
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * trigger function.
         *
         * @access public
         * @param string $booking_id
         * @return void
         */
        public function trigger($booking_id)
        {
        }
        /**
         * get_content_html function.
         *
         * @access public
         * @return string
         */
        public function get_content_html()
        {
        }
        /**
         * get_content_plain function.
         *
         * @access public
         * @return string
         */
        public function get_content_plain()
        {
        }
        /**
         * Initialise Settings Form Fields
         *
         * @access public
         *
         * @return void
         */
        public function init_form_fields()
        {
        }
    }
    /**
     * WC_Email_Booking_Cancelled class.
     *
     * An email sent to the user when a booking is cancelled or not approved.
     *
     * @version 3.11.0
     */
    class WC_Email_Booking_Cancelled extends \WC_Email
    {
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * trigger function.
         *
         * @access public
         * @return void
         */
        public function trigger($booking_id)
        {
        }
        /**
         * get_content_html function.
         *
         * @access public
         * @return string
         */
        public function get_content_html()
        {
        }
        /**
         * get_content_plain function.
         *
         * @access public
         * @return string
         */
        public function get_content_plain()
        {
        }
        /**
         * Initialise Settings Form Fields
         *
         * @access public
         * @return void
         */
        public function init_form_fields()
        {
        }
    }
    /**
     * WC_Email_Booking_Confirmed class.
     *
     * An email sent to the user when a booking is confirmed.
     *
     * @version 3.11.0
     */
    class WC_Email_Booking_Confirmed extends \WC_Email
    {
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * trigger function.
         *
         * @access public
         * @return void
         */
        public function trigger($booking_id)
        {
        }
        /**
         * get_content_html function.
         *
         * @access public
         * @return string
         */
        public function get_content_html()
        {
        }
        /**
         * get_content_plain function.
         *
         * @access public
         * @return string
         */
        public function get_content_plain()
        {
        }
        /**
         * Initialise Settings Form Fields
         *
         * @access public
         * @return void
         */
        public function init_form_fields()
        {
        }
    }
    /**
     * Booking Notifications
     *
     * An email sent manually for bookings.
     *
     * @class   WC_Email_Booking_Notification
     * @version 3.11.0
     */
    class WC_Email_Booking_Notification extends \WC_Email
    {
        /**
         * Notification message content.
         *
         * @var string
         */
        public $notification_message;
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * trigger function.
         *
         * @access public
         * @return void
         */
        public function trigger($booking_id, $notification_subject, $notification_message, $attachments = array())
        {
        }
        /**
         * Reset tags for find/replace in notification message.
         *
         * @return void
         */
        public function reset_tags()
        {
        }
        /**
         * get_content_html function.
         *
         * @access public
         * @return string
         */
        public function get_content_html()
        {
        }
        /**
         * get_content_plain function.
         *
         * @access public
         * @return string
         */
        public function get_content_plain()
        {
        }
        /**
         * Initialise Settings Form Fields
         *
         * @access public
         * @return void
         */
        public function init_form_fields()
        {
        }
    }
    /**
     * WC_Email_Booking_Pending_Confirmation class.
     *
     * An email sent to the user when a booking is pending confirmation.
     *
     * @version 3.11.0
     */
    class WC_Email_Booking_Pending_Confirmation extends \WC_Email
    {
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * trigger function.
         *
         * @access public
         * @return void
         */
        public function trigger($booking_id)
        {
        }
        /**
         * get_content_html function.
         *
         * @access public
         * @return string
         */
        public function get_content_html()
        {
        }
        /**
         * get_content_plain function.
         *
         * @access public
         * @return string
         */
        public function get_content_plain()
        {
        }
        /**
         * Initialise Settings Form Fields
         *
         * @access public
         * @return void
         */
        public function init_form_fields()
        {
        }
    }
    /**
     * Booking reminder
     *
     * An email sent to the user when a new booking is upcoming.
     *
     * @class   WC_Email_Booking_Reminder
     * @version 3.11.0
     */
    class WC_Email_Booking_Reminder extends \WC_Email
    {
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * trigger function.
         *
         * @access public
         * @return void
         */
        public function trigger($booking_id)
        {
        }
        /**
         * get_content_html function.
         *
         * @access public
         * @return string
         */
        public function get_content_html()
        {
        }
        /**
         * get_content_plain function.
         *
         * @access public
         * @return string
         */
        public function get_content_plain()
        {
        }
        /**
         * Initialise Settings Form Fields
         *
         * @access public
         * @return void
         */
        public function init_form_fields()
        {
        }
    }
    /**
     * WC_Email_New_Booking class.
     *
     * An email sent to the admin when a new booking is created.
     *
     * @version 3.11.0
     */
    class WC_Email_New_Booking extends \WC_Email
    {
        /**
         * Subject for pending confirmation emails.
         *
         * @var string
         */
        public $subject_confirmation = '';
        /**
         * Heading for pending confirmation emails.
         *
         * @var string
         */
        public $heading_confirmation = '';
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * When bookings are created, orders and other parts may not exist yet. e.g. during order creation on checkout.
         *
         * This ensures emails are sent last, once all other logic is complete.
         */
        public function queue_notification($booking_id)
        {
        }
        /**
         * trigger function.
         */
        public function trigger($booking_id)
        {
        }
        /**
         * get_content_html function.
         *
         * @access public
         * @return string
         */
        public function get_content_html()
        {
        }
        /**
         * get_content_plain function.
         *
         * @access public
         * @return string
         */
        public function get_content_plain()
        {
        }
        /**
         * Return the function for this email type.
         *
         * @version 1.10.10 Set the subject and then return it.
         *
         * @return string
         */
        public function get_subject()
        {
        }
        /**
         * get_heading function.
         *
         * @return string
         */
        public function get_heading()
        {
        }
        /**
         * Initialise Settings Form Fields
         *
         * @access public
         * @return void
         */
        public function init_form_fields()
        {
        }
    }
    /**
     * WC_Bookings_Gateway class.
     *
     * Handles payment gateway for bookings.
     *
     * @version 3.8.0
     */
    class WC_Bookings_Gateway extends \WC_Payment_Gateway
    {
        /**
         * Constructor for the gateway.
         */
        public function __construct()
        {
        }
        /**
         * Define the settings shown on the gateway admin screen.
         */
        public function init_form_fields()
        {
        }
        /**
         * Check if this gateway is enabled.
         *
         * @return bool
         */
        public function is_available()
        {
        }
        /**
         * Process the payment and return the result
         *
         * @param  int $order_id
         *
         * @return array
         */
        public function process_payment($order_id)
        {
        }
        /**
         * Output for the order received page.
         */
        public function thankyou_page($order_id)
        {
        }
    }
    /**
     * WC_Bookings_Addons class.
     *
     * Handles integration with WooCommerce Product Addons.
     *
     * @version 3.12.0
     */
    class WC_Bookings_Addons
    {
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Show grand total or not?
         * @param  bool $show_grand_total
         * @param  object $product
         * @return bool
         */
        public function addons_show_grand_total($show_grand_total, $product)
        {
        }
        /**
         * Show options
         */
        public function addon_options($post, $addon, $loop)
        {
        }
        /**
         * Save options
         */
        public function save_addon_options($data, $i)
        {
        }
        /**
         * Sanitize imported options.
         *
         * @param array  $sanitized Addon as sanitized by plugin.
         * @param array  $addon     Original addon before sanitation.
         * @param string $key       Addon index in array.
         */
        public function import_addon_options($sanitized, $addon, $key)
        {
        }
        /**
         * Change addon price based on settings
         * @return float
         */
        public function addon_price($cart_item_data, $addon, $product_id, $post_data)
        {
        }
        /**
         * Don't adjust price for bookings since the booking form class adds the costs itself
         * @return bool
         */
        public function adjust_price($bool, $cart_item)
        {
        }
        /**
         * Adjust the final booking cost
         *
         * @param array $cart_item_data Extra data for cart item.
         * @return array
         */
        public function add_cart_item_data_adjust_booking_cost($cart_item_data)
        {
        }
        /**
         * Filter the cost display of bookings after booking selection.
         * This only filters on success.
         *
         * @since 1.11.4
         * @since 3.7.0 Changed signature to accept and return the full response array.
         *
         * @param array              $response      The full response array.
         * @param string             $output        The raw cost HTML string.
         * @param float              $display_price The displayed price.
         * @param WC_Product_Booking $product       The booking product.
         * @return array
         */
        public function filter_output_cost($response, $output, $display_price, $product)
        {
        }
    }
    /**
     * Deposits integration class.
     *
     * @version 3.11.0
     */
    class WC_Bookings_Deposits
    {
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Initialize the instance.
         *
         * @since 1.15.31
         */
        protected function init()
        {
        }
        /**
         * Handle changes in the order status.
         *
         * @since 1.15.31
         *
         * @param integer $order_id Id of de order whose status is changing.
         * @param string $from Previous order status.
         * @param string $to New order status.
         */
        public function handle_order_status_changed($order_id, $from, $to)
        {
        }
        /**
         * Process partial payments for on hold status.
         *
         * @since 1.15.12
         *
         * @param integer $order_id to state which order we're working with.
         * @param object  $order we are working with.
         */
        public function handle_on_hold_to_partial_payment($order_id, $order)
        {
        }
        /**
         * Process partial payments
         *
         * @since 1.11.0
         *
         * @param string  $order_status to be changed for filter.
         * @param integer $order_id to state which order we're working with.
         */
        public function handle_partial_payment($order_status, $order_id)
        {
        }
        /**
         * Go through all booking for an order and update the status for each.
         *
         * @since 1.11.0
         *
         * @param integer $order_id To find bookings.
         * @param string  $new_status To set to bookings of order.
         */
        public function set_status_for_bookings_in_order($order_id, $new_status)
        {
        }
        /**
         * Process partial payments.
         *
         * @since 1.11.0
         *
         * @param string  $order_status To filter/change.
         * @param integer $order_id To which this applies.
         */
        public function handle_completed_payment($order_status, $order_id)
        {
        }
        /**
         * Register the Deposits integration post status.
         *
         * @since 1.11.0
         */
        public function register_custom_post_status()
        {
        }
        /**
         * Add custom status to the list of standard bookings status.
         *
         * @since 1.11.0
         *
         * @param array $statuses to be changed in this function.
         */
        public function add_custom_status($statuses)
        {
        }
        /**
         * Make martial payment count as paid so items are added to Google calendar.
         *
         * @param array $statuses Current paid statuses.
         *
         * @return array
         */
        public function add_custom_paid_status($statuses)
        {
        }
        /**
         * Saves the order status from pending to wc-partial-payment
         * so that the reminder cron job can pick it up.
         *
         * @see https://github.com/woocommerce/woocommerce-bookings/issues/2379
         * @since 1.15.14
         * @return void
         */
        public function save_order_status($order_id)
        {
        }
    }
    /**
     * WC_Bookings_PayPal_Payments class.
     *
     * Handles compatibility with PayPal Payments express buttons on product pages.
     *
     * @since 3.2.0
     */
    class WC_Bookings_PayPal_Payments
    {
        /**
         * Constructor.
         *
         * @since 3.2.0
         */
        public function __construct()
        {
        }
        /**
         * Filter whether to display PayPal express pay buttons on product pages.
         *
         * Runs on the `woocommerce_paypal_payments_product_supports_payment_request_button` filter.
         *
         * @since 3.2.0
         *
         * @param bool        $is_supported Whether express pay buttons are supported on product pages.
         * @param \WC_Product $product      The product object.
         *
         * @return bool Modified support status.
         */
        public function is_product_supported($is_supported, $product)
        {
        }
    }
    /**
     * WC Bookings class
     *
     * @version 3.12.0
     */
    class WC_Bookings
    {
        /**
         * The single instance of the class.
         *
         * @var WC_Bookings|null
         * @since 1.13.0
         */
        protected static $_instance = \null;
        // phpcs:ignore PSR2.Classes.PropertyDeclaration.Underscore
        /**
         * Constructor.
         *
         * @since 1.13.0
         */
        public function __construct()
        {
        }
        /**
         * Initialize activation and deactivation hooks.
         */
        public function init_hooks()
        {
        }
        /**
         * Init WooCommerce Bookings when plugins are loaded.
         *
         * @since 1.13.1
         */
        public function woocommerce_bookings_init()
        {
        }
        /**
         * Declare compatibility with High-Performance Order Storage.
         *
         * @since 1.15.66
         */
        public function declare_hpos_compatibility()
        {
        }
        /**
         * Main Bookings Instance.
         *
         * Ensures only one instance of Bookings is loaded or can be loaded.
         *
         * @since 1.13.0
         * @return WC_Bookings
         */
        public static function instance()
        {
        }
        /**
         * Cloning is forbidden.
         *
         * @since 1.13.0
         */
        public function __clone()
        {
        }
        /**
         * Unserializing instances of this class is forbidden.
         *
         * @since 1.13.0
         */
        public function __wakeup()
        {
        }
        /**
         * Cleanup on plugin deactivation.
         *
         * @since 1.11
         */
        public function deactivate()
        {
        }
        /**
         * Activation hook.
         */
        public function activate()
        {
        }
        /**
         * Load Classes.
         *
         * @throws Exception When composer install hasn't been ran.
         */
        public function includes()
        {
        }
        /**
         * Init all the classes.
         */
        private function init()
        {
        }
        /**
         * Add the booking product type
         *
         * @param array $types - Array of product types.
         * @return array
         */
        public function product_type_selector($types)
        {
        }
        /**
         * Need to correct table names for meta to work.
         */
        public function wpdb_table_fix()
        {
        }
        /**
         * Shows admin notice after activation.
         *
         * Notices are triggered by a flag in options so they can be triggered once on activation
         * and then actually shown once all necessary resources have been loaded.
         *
         * @since 1.14.4
         */
        public function show_activation_notice()
        {
        }
        /**
         * Load the plugin text domain for translation.
         */
        public function load_plugin_textdomain()
        {
        }
    }
}
namespace {
    function rules_on_day($rules, $timestamp_date)
    {
    }
    /**
     * Get a booking object
     * @param  int $id
     * @return WC_Booking|false
     */
    function get_wc_booking($id)
    {
    }
    /**
     * Get a bookable product object
     * @param  int $id
     * @return WC_Product_Booking|false
     */
    function get_wc_product_booking($id)
    {
    }
    /**
     * Whether the current visitor may view a booking product's public availability or price.
     *
     * @since 3.11.0
     * @param WC_Product|false $product Product to check.
     * @return bool
     */
    function wc_bookings_current_user_can_view_product($product)
    {
    }
    /**
     * Get the edit URL for a booking in the admin.
     *
     * @since 3.4.0
     *
     * @param int|WC_Booking $booking Booking ID or object.
     * @return string
     */
    function wc_bookings_get_edit_booking_url($booking)
    {
    }
    /**
     * Get the booking calendar URL in the admin.
     *
     * @since 3.4.0
     *
     * @return string
     */
    function wc_bookings_get_calendar_url()
    {
    }
    /**
     * Get a booking resource.
     *
     * @since 3.0.0
     *
     * @param  int $id Resource ID.
     * @param  int $product_id Product ID (optional).
     * @return mixed|WC_Product_Booking_Resource|false
     */
    function get_wc_product_booking_resource($id, $product_id = 0)
    {
    }
    /**
     * Get product booking resource post types.
     *
     * @since 3.0.0
     *
     * @return array
     */
    function wc_booking_get_product_resource_post_types()
    {
    }
    /**
     * Get the product booking class name from the post type.
     *
     * @since 3.0.0
     *
     * @param string $post_type The post type.
     * @return string
     */
    function _wc_booking_get_product_resource_classname_from_post_type($post_type)
    {
    }
    /**
     * Gets a cost based on the base cost and default resource.
     *
     * @param  WC_Product_Booking $product
     * @return string
     */
    function wc_booking_calculated_base_cost($product)
    {
    }
    /**
     * Santiize and format a string into a valid 24 hour time
     * @return string
     */
    function wc_booking_sanitize_time($raw_time)
    {
    }
    /**
     * Returns true if the product is a booking product, false if not
     *
     * @param WC_Product $product The product to check.
     * @return bool
     */
    function is_wc_booking_product($product)
    {
    }
    /**
     * Get the booking product types.
     *
     * @since 3.0.0
     *
     * @return array
     */
    function wc_bookings_get_product_types()
    {
    }
    /**
     * Convert key to a nice readable label
     * @param  string $key
     * @return string
     */
    function get_wc_booking_data_label($key, $product)
    {
    }
    /**
     * Convert status to human readable label.
     *
     * @since  1.10.0
     * @param  string $status
     * @return string
     */
    function wc_bookings_get_status_label($status)
    {
    }
    /**
     * Returns a list of booking statuses.
     *
     * @since 1.9.13 Add new parameter that allows globalised status strings as part of the array.
     * @param  string $context An optional context (filters) for user or cancel statuses
     * @param boolean $include_translation_strings. Defaults to false. This introduces status translations text string. In future (2.0) should default to true.
     * @return array $statuses
     */
    function get_wc_booking_statuses($context = 'fully_booked', $include_translation_strings = \false)
    {
    }
    /**
     * Validate and create a new booking manually.
     *
     * @version  1.10.7
     * @see      WC_Booking::new_booking() for available $new_booking_data args
     * @param    int    $product_id you are booking
     * @param    array  $new_booking_data
     * @param    string $status
     * @param    bool   $exact If false, the function will look for the next available block after your start date if the date is unavailable.
     * @return   mixed  WC_Booking object on success or false on fail
     */
    function create_wc_booking($product_id, $new_booking_data = array(), $status = 'confirmed', $exact = \false)
    {
    }
    /**
     * Check if product/booking requires confirmation.
     *
     * @param  int $id Product ID.
     *
     * @return bool
     */
    function wc_booking_requires_confirmation($id)
    {
    }
    /**
     * Check if the cart has booking that requires confirmation.
     *
     * @return bool
     */
    function wc_booking_cart_requires_confirmation()
    {
    }
    /**
     * Check if the order has booking that requires confirmation.
     *
     * @param  WC_Order $order
     *
     * @return bool
     */
    function wc_booking_order_requires_confirmation($order)
    {
    }
    /**
     * Check if user has location based timezone selected in settings.
     *
     * @since 1.13.0
     *
     * @return bool
     */
    function wc_booking_has_location_timezone_set()
    {
    }
    /**
     * Clear the Bookings timezone string cache.
     *
     * @return void
     */
    function wc_booking_clear_timezone_string_cache()
    {
    }
    /**
     * Get timezone string.
     *
     * inspired by https://wordpress.org/plugins/event-organiser/
     *
     * @return string
     */
    function wc_booking_get_timezone_string()
    {
    }
    /**
     * Format a fake-UTC booking timestamp as ISO 8601 with the current site offset.
     *
     * Bookings store start/end as integers whose UTC representation equals the site-local
     * wall clock (see WC_Booking_Data_Store). This helper turns one of those timestamps
     * into a portable, unambiguous string of the form `2026-05-02T09:00:00-04:00`.
     *
     * @since 3.6.0
     *
     * @param int|string $fake_utc_ts Fake-UTC unix timestamp. Empty string or 0 returns ''.
     * @return string ISO 8601 datetime with offset, or empty string.
     */
    function wc_bookings_format_csv_datetime($fake_utc_ts)
    {
    }
    /**
     * Parse a CSV datetime value into a fake-UTC booking timestamp.
     *
     * Accepts:
     * - ISO 8601 with offset, e.g. `2026-05-02T09:00:00-04:00` (preferred). If the offset
     *   matches the destination site's offset for that date, this is a clean round-trip;
     *   otherwise the wall clock is preserved and a structured warning is returned via
     *   the by-ref `$warning` argument (mode = `preserve_wall_clock`).
     * - TZ-less wall clock, e.g. `2026-05-02 09:00:00` — interpreted as destination-local.
     * - Empty string — returns 0.
     *
     * Rejects:
     * - Bare numeric epochs (ambiguous given the fake-UTC storage convention).
     * - Anything else strtotime cannot parse.
     *
     * @since 3.6.0
     *
     * @param string     $value   Raw CSV value.
     * @param array|null $warning Out-param populated when offsets disagree with site.
     * @return int|WP_Error Fake-UTC timestamp, 0 for empty, or WP_Error on invalid input.
     */
    function wc_bookings_parse_csv_datetime($value, &$warning = \null)
    {
    }
    /**
     * Get bookable product resources.
     *
     * @param int $product_id product ID.
     *
     * @return array Resources objects list.
     */
    function wc_booking_get_product_resources($product_id)
    {
    }
    /**
     * Get bookable product resource by ID.
     *
     * @param int $product_id product ID.
     * @param int $resource_id resource ID
     *
     * @return array Resources object.
     */
    function wc_booking_get_product_resource($product_id, $resource_id)
    {
    }
    /**
     * Output how priority rules work with full HTML.
     */
    function wc_booking_rules_explanation_html()
    {
    }
    /**
     * Get descriptive text on how priority rules work.
     *
     * @since 1.9.10
     * @return array
     */
    function get_wc_booking_rules_explanation()
    {
    }
    /**
     * get_wc_booking_priority_explanation.
     *
     * @return string
     */
    function get_wc_booking_priority_explanation()
    {
    }
    /**
     * Get the min timestamp that is bookable based on settings.
     *
     * If $today is the current day, offset starts from NOW rather than midnight.
     *
     * @param int    $date Current timestamp, defaults to now.
     * @param int $offset
     * @param string $unit
     * @return int
     */
    function wc_bookings_get_min_timestamp_for_day($date, $offset, $unit)
    {
    }
    /**
     * Give this function a booking or resource ID, and a range of dates and get back
     * how many places are available for the requested quantity of bookings for all blocks within those dates.
     *
     * Replaces the WC_Product_Booking::get_available_bookings method.
     *
     * @param  WC_Product_Booking | integer $bookable_product Can be a product object or a booking prouct ID.
     * @param  integer $start_date
     * @param  integer $end_date
     * @param  integer|null                 $resource_id Optional.
     * @param  integer $qty
     * @param  array   $intervals
     * @return array|int|boolean|WP_Error False if no places/blocks are available or the dates are invalid.
     */
    function wc_bookings_get_total_available_bookings_for_range($bookable_product, $start_date, $end_date, $resource_id = \null, $qty = 1, $intervals = array())
    {
    }
    /**
     * (via Action Scheduler) Find available and booked blocks for specific resources (if any) and return them as array.
     *
     * @param  int $product_id
     * @param  integer $min_date The starting date for the set of blocks
     * @param  integer $max_date The ending date for the set of blocks
     * @param  integer $timezone_offset Timezone offset.
     * @return void
     *
     * @version  3.12.0
     */
    function wc_bookings_get_time_slots_scheduled($product_id, $min_date, $max_date, $timezone_offset)
    {
    }
    /**
     * Retrieve available booking time slots for a bookable product.
     *
     * @since 1.10.5
     * @version 3.12.0
     *
     * @param  WC_Product_Booking $bookable_product The bookable product.
     * @param  array              $blocks           Array of block start timestamps.
     * @param  array              $intervals        Optional. Array containing [interval, base_interval]. If empty, defaults are derived from product duration.
     * @param  int                $resource_id      Optional. Resource ID to check. Defaults to 0 (no specific resource).
     * @param  int                $from             Optional. Range start timestamp. Defaults to 0.
     * @param  int                $to               Optional. Range end timestamp. Defaults to 0.
     * @param  bool               $include_sold_out Whether to include sold-out blocks in the results. Defaults to false.
     *
     * @return array {
     *     Associative array of available time slots, keyed by block timestamp.
     *
     *     @type array $timestamp {
     *         Availability details for a block.
     *
     *         @type int   $booked    Number of slots already booked.
     *         @type int   $available Number of slots still available.
     *         @type array $resources Map of resource IDs to available quantities.
     *     }
     *     @type bool  $old_availability True if the response contains cached/stale availability.
     * }
     */
    function wc_bookings_get_time_slots($bookable_product, $blocks, $intervals = array(), $resource_id = 0, $from = 0, $to = 0, $include_sold_out = \false)
    {
    }
    /**
     * Take two arrays, check where they intersect,
     * add value to all elements in array1 from the intersection.
     *
     * @since 1.15.13
     *
     * @param array   $array1 First array.
     * @param array   $array1 Second array.
     * @param integer $value  Value to add to the intersection.
     * @return array          First array updated with $value at intersection.
     */
    function wc_bookings_add_at_intersection($array1, $array2, $value)
    {
    }
    /**
     * Generate a minute-level map for a booking block.
     *
     * Creates an associative array where each key is a Unix timestamp for a
     * specific minute within the block, and each value is initialized to `0`.
     * Used to track availability and overlaps at the granularity of minutes.
     *
     * Example:
     *   Input:  $block = 1735689600 (Jan 1, 2025 00:00), $interval = 3
     *   Output: {
     *     1735689600 => 0, // 00:00
     *     1735689660 => 0, // 00:01
     *     1735689720 => 0, // 00:02
     *   }
     *
     * @since 1.15.13
     *
     * @param  int $block    Block start timestamp.
     * @param  int $interval Length of the block in minutes.
     *
     * @return array<int,int> Associative array keyed by minute timestamp,
     *                        each initialized with value `0`.
     */
    function wc_bookings_get_block_minutes_array($block, $interval)
    {
    }
    /**
     * Builds the HTML to display the start time for hours/minutes.
     *
     * @since 1.13.0
     * @since 1.15.0 Deprecated
     * @param \WC_Product_Booking $bookable_product
     * @param  array  $blocks
     * @param  array  $intervals
     * @param  integer $resource_id
     * @param  integer $from The starting date for the set of blocks
     * @param  integer $to
     * @return string
     *
     */
    function wc_bookings_get_start_time_html($bookable_product, $blocks, $intervals = array(), $resource_id = 0, $from = 0, $to = 0)
    {
    }
    /**
     * Builds the data to display the end time for hours/minutes.
     *
     * @since 1.13.0
     * @param \WC_Product_Booking $bookable_product
     * @param  array  $blocks
     * @param  string $start_date_time Date of the start time.
     * @param  array  $intervals
     * @param  integer $resource_id
     * @param  integer $from The starting date for the set of blocks
     * @param  integer $to
     * @param  bool    $check Whether to just check if there's any data at all.
     * @return array
     *
     */
    function wc_bookings_get_end_times($bookable_product, $blocks, $start_date_time = '', $intervals = array(), $resource_id = 0, $from = 0, $to = 0, $check = \false)
    {
    }
    /**
     * Renders the HTML to display the end time for hours/minutes.
     *
     * @since 1.13.0
     * @since 1.15.0 Deprecated
     * @param \WC_Product_Booking $bookable_product
     * @param  array  $blocks
     * @param  string $start_date_time Date of the start time.
     * @param  array  $intervals
     * @param  integer $resource_id
     * @param  integer $from The starting date for the set of blocks
     * @param  integer $to
     * @return string
     *
     */
    function wc_bookings_get_end_time_html($bookable_product, $blocks, $start_date_time = '', $intervals = array(), $resource_id = 0, $from = 0, $to = 0)
    {
    }
    /**
     * Find available blocks and return HTML for the user to choose a block. Used in class-wc-bookings-ajax.php.
     *
     * @param \WC_Product_Booking $bookable_product
     * @param  array  $blocks
     * @param  array  $intervals
     * @param  integer $resource_id
     * @param  integer $from The starting date for the set of blocks
     * @param  integer $to
     * @return string
     *
     * @version  1.10.7
     */
    function wc_bookings_get_time_slots_html($bookable_product, $blocks, $intervals = array(), $resource_id = 0, $from = 0, $to = 0)
    {
    }
    function get_time_as_iso8601($timestamp)
    {
    }
    /**
     * Find available blocks and return HTML for the user to choose a block. Used in class-wc-bookings-ajax.php.
     *
     * @deprecated since 1.10.0
     * @param \WC_Product_Booking $bookable_product
     * @param  array  $blocks
     * @param  array  $intervals
     * @param  integer $resource_id
     * @param  string  $from The starting date for the set of blocks
     * @return string
     */
    function wc_bookings_available_blocks_html($bookable_product, $blocks, $intervals = array(), $resource_id = 0, $from = '')
    {
    }
    /**
     * Summary of booking data for admin and checkout.
     *
     * @version 1.15.44
     *
     * @param  WC_Booking $booking
     * @param  bool       $is_admin To determine if this is being called in admin or not.
     */
    function wc_bookings_get_summary_list($booking, $is_admin = \false)
    {
    }
    /**
     * Converts a string (e.g. yes or no) to a bool.
     * @param  string $string
     * @return boolean
     */
    function wc_bookings_string_to_bool($string)
    {
    }
    /**
     * @since 1.10.0
     * @param $minute
     * @param $check_date
     *
     * @return int
     */
    function wc_booking_minute_to_time_stamp($minute, $check_date)
    {
    }
    /**
     * Convert a timestamp into the minutes after 0:00
     *
     * @since 1.10.0
     * @param integer $timestamp
     * @return integer $minutes_after_midnight
     */
    function wc_booking_time_stamp_to_minutes_after_midnight($timestamp)
    {
    }
    /**
     * Get timezone offset in seconds.
     *
     * @since  1.10.3
     * @return float
     */
    function wc_booking_timezone_offset()
    {
    }
    /**
     * Get the site timezone offset in seconds at a given timestamp.
     *
     * Resolves the offset at the given moment (not "now") so DST-observing zones land correctly.
     *
     * @since 3.6.0
     *
     * @param int $timestamp Unix timestamp.
     * @return float Offset in seconds.
     */
    function wc_booking_timezone_offset_at($timestamp)
    {
    }
    /**
     * Determine whether Booking time should be converted to local time.
     *
     * @since  1.11.4
     * @return bool
     */
    function wc_should_convert_timezone($booking = \null)
    {
    }
    /**
     * Clear booking slots transient.
     *
     * In contexts where we have a product id, it will only delete the specific ones.
     * However, not all contexts will have a product id, e.g. Global Availability.
     *
     * @param  int|null $bookable_product_id
     * @since  1.13.12
     */
    function delete_booking_slots_transient($bookable_product_id = \null)
    {
    }
    /**
     * Renders a json object with a paginated availability set.
     *
     * @since 1.14.0
     */
    function wc_bookings_paginated_availability($availability, $page, $records_per_page)
    {
    }
    /**
     * Parse and normalize booking data from posted values.
     *
     * @since 1.15.0
     *
     * @param  array              $posted  Posted booking data. If empty, falls back to $_POST {
     *     wc_bookings_field_start_date_year
     *     wc_bookings_field_start_date_month
     *     wc_bookings_field_start_date_day
     *     wc_bookings_field_start_date_yearmonth (Used, for whole month selection; overrides the specific day fields)
     *     wc_bookings_field_start_date_time (Optional; only if product duration requires time; overrides the specific day fields)
     *     wc_bookings_field_resource (Only when Product has resources)
     *     wc_bookings_field_duration (Optional)
     *     wc_bookings_field_persons_<person_type_id> or wc_bookings_field_persons
     *     wc_bookings_field_start_date_local_timezone (Optional)
     * }.
     * @param  WC_Product_Booking $product The booking product object.
     *
     * @return array {
     *     Normalized booking data.
     *
     *     @type int    $_year            The booking start year.
     *     @type int    $_month           The booking start month.
     *     @type int    $_day             The booking start day.
     *     @type string $_date            The raw start date in Y-m-d format.
     *     @type string $date             Formatted start date (localized).
     *     @type string $_time            The raw start time in G:i format.
     *     @type string $time             Formatted start time (localized).
     *     @type int    $_qty             Quantity being booked.
     *     @type array  $_persons         Map of person type IDs to quantities.
     *     @type string $duration         Human-readable booking duration.
     *     @type int    $_duration        Numeric booking duration (customer-entered or fixed).
     *     @type string $_duration_unit   Duration unit (month, day, hour, minute, night).
     *     @type int    $_start_date      Start timestamp.
     *     @type int    $_end_date        End timestamp.
     *     @type int    $_all_day         Whether the booking spans the whole day (1) or not (0).
     *     @type int    $_resource_id     Assigned resource ID (0 if none).
     *     @type string $type             Resource type name, if applicable.
     *     @type string $_local_timezone  Client-provided local timezone.
     * }
     */
    function wc_bookings_get_posted_data($posted, $product)
    {
    }
    /**
     * Get an array of formatted time values.
     *
     * @since 1.15.0
     * @param  string $timestamp
     * @return array
     */
    function wc_bookings_get_formatted_times($timestamp)
    {
    }
    /**
     * Attempt to convert a date formatting string from PHP to Moment.
     *
     * @param string $format
     * @return string
     */
    function wc_bookings_convert_to_moment_format($format)
    {
    }
    /**
     * Return WP's time format, defaulting to a non-empty one if it is unset.
     *
     * @return string
     */
    function wc_bookings_time_format()
    {
    }
    /**
     * Return WP's date format, defaulting to a non-empty one if it is unset.
     *
     * @return string
     */
    function wc_bookings_date_format()
    {
    }
    /**
     * Search bookings.
     *
     * @param  string $term Term to search.
     * @return array List of bookings ID.
     */
    function wc_booking_search($term)
    {
    }
    /**
     * Get script dependencies from wp-scripts generated asset file.
     *
     * @since 2.0.3
     *
     * @param string   $entry_point             The entry point name in the webpack config.
     * @param string[] $additional_dependencies Additional dependencies to add to the list.
     * @return string[] An array of dependencies.
     */
    function wc_booking_get_script_dependencies($entry_point, $additional_dependencies = array())
    {
    }
    /**
     * Maybe mark a completed booking as attended.
     *
     * @param WC_Booking $booking Booking object.
     * @return bool Whether to mark the booking as attended.
     */
    function wc_bookings_maybe_mark_completed_bookings_as_attended($booking)
    {
    }
    /**
     * Get a formatted inline summary string for a booking.
     *
     * Returns a human-readable string combining booking ID, date, time, and optionally resource/team member.
     * Example with ID: "Booking #42 · Wednesday, January 8, 2026 at 12:00 pm with Marianne"
     * Example without ID: "Wednesday, January 8, 2026 at 12:00 pm with Marianne"
     *
     * @since 3.1.0
     *
     * @param WC_Booking $booking The booking object.
     * @param array      $args {
     *     Optional. Array of arguments.
     *
     *     @type bool   $include_booking_id  Whether to include the booking ID prefix. Default false.
     *     @type string $context             Context for the summary (e.g., 'email', 'admin', 'frontend'). Default 'frontend'.
     *     @type string $separator           Separator between parts. Default ' · '.
     *     @type bool   $use_local_timezone  Whether to use local timezone. Default null (auto-detect).
     * }
     * @return string The formatted booking summary string.
     */
    function wc_bookings_get_inline_summary(\WC_Booking $booking, array $args = array())
    {
    }
    /**
     * Get a formatted inline date/time string for a booking with team member name.
     *
     * Returns a human-readable date and time string with team member name.
     * Example: "Wednesday, January 8, 2026 at 12:00 pm with Marianne"
     *
     * @since 3.5.0
     *
     * @param WC_Booking $booking The booking object.
     * @return string The formatted date/time string with team member name.
     */
    function wc_bookings_get_inline_datetime_with_resource($booking)
    {
    }
    /**
     * Get a formatted inline date/time string for a booking.
     *
     * Returns a human-readable date and time string.
     * Example: "Wednesday, January 8, 2026 at 12:00 pm"
     *
     * TODO: Add support for range bookings.
     *
     * @since 3.1.0
     *
     * @param WC_Booking $booking The booking object.
     * @return string The formatted date/time string.
     */
    function wc_bookings_get_inline_datetime($booking)
    {
    }
    // phpcs:disable WordPress.Files.FileName
    /**
     * WooCommerce fallback notice.
     *
     * @since 1.13.0
     */
    function woocommerce_bookings_missing_wc_notice()
    {
    }
    \define('WC_BOOKINGS_ABSPATH', \dirname(__FILE__) . '/');
    \define('WC_BOOKINGS_ACTIVATION_NOTICE_KEY', 'woocommerce_bookings_show_activation_notice');
    \define('WC_BOOKINGS_VERSION', '3.12.0');
    // WRCS: DEFINED_VERSION.
    \define('WC_BOOKINGS_DB_VERSION', '1.14.7');
    \define('WC_BOOKINGS_TEMPLATE_PATH', \untrailingslashit(\plugin_dir_path(__FILE__)) . '/templates/');
    \define('WC_BOOKINGS_PLUGIN_URL', \untrailingslashit(\plugins_url('/', __FILE__)));
    \define('WC_BOOKINGS_PLUGIN_PATH', \untrailingslashit(\plugin_dir_path(__FILE__)));
    \define('WC_BOOKINGS_MAIN_FILE', __FILE__);
    \define('WC_BOOKINGS_GUTENBERG_EXISTS', \true);
}