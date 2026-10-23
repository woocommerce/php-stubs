<?php
/**
 * Generated stub declarations for woocommerce-accommodation-bookings 1.3.15.
 * @see https://github.com/woocommerce/php-stubs
 */

/**
 * Sets up our "write" panels for accommodations products.
 *
 * @class   WC_Accommodation_Booking_Admin_Panels
 * @version 1.3.15
 */
class WC_Accommodation_Booking_Admin_Panels
{
    /**
     * Hook into WordPress and WooCommerce
     */
    public function __construct()
    {
    }
    /**
     * Filters product unit to display.
     *
     * @param string $duration_unit_default Default fallback duration
     * @param string $duration_unit         Current duration unit
     * @param int    $duration              Duration of booking
     *
     * @return string
     */
    public function get_product_duration($duration_unit_default, $duration_unit, $duration)
    {
    }
    /**
     * Displays the main accommodation booking settings/data view
     *
     * @return void
     */
    public function general_product_data()
    {
    }
    /**
     * Loads any CSS or JS necessary for the admin
     *
     * @return void
     */
    public function admin_styles_and_scripts()
    {
    }
    /**
     * Loads our panels related to accommodation bookings
     * @version  1.0.11
     * @return void
     */
    public function panels()
    {
    }
    /**
     * Hides the "virtual" option for accommodations
     * @param  array $options
     * @return array
     */
    public function product_type_options($options)
    {
    }
    /**
     * Add tab entries definition
     *
     * @param array $tabs List of tabs.
     * @return array
     */
    public function add_tabs($tabs)
    {
    }
}
/**
 * Adds the Accommodation tab to Bookings > Settings by hooking into
 * the `woocommerce_bookings_settings_page` filter.
 *
 * @class   WC_Accommodation_Booking_Admin_Product_Settings
 * @version 1.3.15
 */
class WC_Accommodation_Booking_Admin_Product_Settings extends \WC_Settings_API
{
    /**
     * The single instance of the class.
     *
     * @var WC_Accommodation_Booking_Admin_Product_Settings|null
     * @since 1.13.0
     */
    protected static $_instance = \null;
    /**
     * Name for nonce to update times settings.
     *
     * @since 1.13.0
     * @var string self::NONCE_NAME
     */
    const NONCE_NAME = 'bookings_times_settings_nonce';
    /**
     * Action name for nonce to update times settings.
     *
     * @since 1.13.0
     * @var string self::NONCE_ACTION
     */
    const NONCE_ACTION = 'submit_bookings_times_settings';
    /**
     * Constructor.
     *
     * @since 1.13.0
     */
    public function __construct()
    {
    }
    /**
     * Maybe migrate data from old format to new one.
     *
     * @return void
     */
    public function maybe_migrate()
    {
    }
    /**
     * Initialize settings by using Bookings filter.
     *
     * @since 1.3.9 Capability changed from `manage_options` to `manage_woocommerce`
     *              so Shop Manager users can access the Accommodation tab.
     *
     * @param array $tabs_metadata Tabs metadata.
     *
     * @return array Modified metadata that includes Accommodation.
     */
    public function add_accommodation_settings($tabs_metadata)
    {
    }
    /**
     * Initialize settings and form data.
     *
     * @since 1.13.0
     * @return void
     */
    public function init_times_settings()
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
     * Returns WC_Accommodation_Booking_Admin_Product_Settings singleton
     *
     * Ensures only one instance of WC_Accommodation_Booking_Admin_Product_Settings is created.
     *
     * @since 1.13.0
     * @return WC_Accommodation_Booking_Admin_Product_Settings Main instance.
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
    /**
     * Outputs a time selector input box
     *
     * @param  string $key   Field key.
     * @param  array  $value The "setting" info from init_form_fields.
     * @return string|false Field HTML, or false when output buffering is not active.
     */
    public function generate_accommodation_time_html($key, $value)
    {
    }
}
/**
 * Required functions for REST API and Admin functionality.
 *
 * @class   WC_Accommodation_Booking_REST_And_Admin
 * @version 1.3.15
 */
class WC_Accommodation_Booking_REST_And_Admin
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Add the accommodation booking product type.
     *
     * @param array $types Product types.
     *
     * @return array
     */
    public function product_type_selector($types)
    {
    }
    /**
     * Saves booking / accommodation data for a product.
     *
     * @version 1.0.11
     * @param   int $post_id Post ID.
     * @return void
     */
    public function save_product_data($post_id)
    {
    }
    /**
     * Accommodation Bookings debug tools in WooCommerce > Status > Tools.
     *
     * @param array $tools Existing tools.
     * @return array Tools with Accommodation Bookings tools added.
     */
    public function accommodation_bookings_debug_tools($tools)
    {
    }
    /**
     * Callback for clearing stale booking transients tool.
     *
     * @return string Success message.
     */
    public function clear_stale_booking_transients_tool()
    {
    }
    /**
     * Clear stale booking transients that may cause availability or booking issues.
     * Can be run multiple times safely.
     *
     * @return void
     */
    private function clear_stale_booking_transients()
    {
    }
}
/**
 * We need to change a couple things about how the cart manager works:
 * - The add-to-cart action for accommodation bookings should just call the booking action
 * - We should display check-in/check-out times on the cart
 *
 * @class   WC_Accommodation_Booking_Cart_Manager
 * @version 1.3.15
 */
class WC_Accommodation_Booking_Cart_Manager
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Fire the woocommerce_booking_add_to_cart action
     *
     * @return void
     */
    function add_to_cart()
    {
    }
    /**
     * Display our check-in/check-out info
     *
     * @param mixed $other_data
     * @param mixed $cart_item
     * @return array
     */
    public function get_item_data($other_data, $cart_item)
    {
    }
}
/**
 * Hooks into the Bookings Date Picker so we can customize it a bit.
 *
 * @class   WC_Accommodation_Booking_Date_Picker
 * @version 1.3.15
 */
class WC_Accommodation_Booking_Date_Picker
{
    /**
     * Hooks into WooCommerce Bookings...
     */
    public function __construct()
    {
    }
    /**
     * Add custom start and end dat to booking data
     *
     * @since 1.0.7
     *
     * @param array               $data           Posted data.
     * @param \WC_Product_Booking $product        Booking product.
     * @param int                 $total_duration Total duration.
     *
     * @return mixed
     */
    public function add_accommodation_posted_data($data, $product, $total_duration)
    {
    }
    /**
     * Changes the start label to "Check-in"
     *
     * @param  string $label Label.
     * @return string
     */
    public function start_label($label)
    {
    }
    /**
     * Changes the end label to "Check-out"
     *
     * @param  string $label Label.
     * @return string
     */
    public function end_label($label)
    {
    }
    /**
     * Add partially booked accommodation bookings
     * If a calendar date has check-in ( a booking starts on that date ) if it is feasible we want it marked as
     * partially booked because some other booking could end on that date.
     * If a calendar date has check-out ( a booking ends on that date ) if it is feasible we want it marked as
     * partially booked because some other booking could start on that date.
     * When it is feasible to mark a date partially booked:
     *  - for a check-in date we check if a day before that date has any available resources. Only if a day before
     *    check-in has any available resources it is possible that some booking could end ( had its check-out ) on the
     *    check-in date we are testing.
     *  - for a check-out date we chack if that date has any available resources. If it does it means that some other
     *    booking can start ( can have its check-in ) on the check-out date that we are testing.
     * Function works in following steps:
     *  1. gather all check-in and checko-out dates for product
     *  2. loop over all dates from (1):
     *    a. get all available resources for: day before for check-in and current for check-out
     *    b. test if resources are available and if yes than move fully booked day to partially booked days
     *
     * @param array                            $booked_data_array Array of booked days.
     * @param WC_Product_Accommodation_Booking $product           Product.
     */
    public function add_partially_booked_dates($booked_data_array, $product)
    {
    }
    /**
     * Update the fully booked, fully booked start day, and fully booked end day accommodation bookings,
     *
     * @param array                            $booked_data_array Array of booked days.
     * @param WC_Product_Accommodation_Booking $product           Product.
     */
    public function update_fully_booked_dates($booked_data_array, $product)
    {
    }
    /**
     * Should return find booked day blocks with additional data.
     *
     * @since 1.1.40
     *
     * @param array $result        Array of booked days.
     * @param array $booked_blocks Array of booked blocks.
     */
    public function find_booked_day_blocks($result, $booked_blocks): array
    {
    }
    /**
     * Calculates array that contains the start and the end time of all bookings for given product.
     *
     * @param \WC_Product_Booking $product Product.
     * @return array{in: array<int, int[]>, out: array<int, int[]>} Booking start (in) and end (out) timestamps, keyed by resource ID.
     */
    private function get_check_in_and_out_times($product)
    {
    }
    /**
     * Get amount of available product resources on a specific timestamp
     *
     * @param \WC_Product_Booking $product  Product.
     * @param int                 $resource Resource ID.
     * @param int|false           $time     Timestamp from strtotime(), false when it fails.
     *
     * @return int|mixed
     */
    private function get_product_resource_available_blocks_on_time($product, $resource, $time)
    {
    }
    /**
     * Moves day from fully booked days array to partially booked days array and if the fully booked days is
     * array for that day is empty ( no assigned resources ) removes that empty day entry
     *
     * @param array  $booked_data_array Array of booked days.
     * @param int    $resource          Resource ID.
     * @param string $day               Day.
     */
    private function move_day_from_fully_to_partially_booked($booked_data_array, $resource, $day)
    {
    }
    /**
     * Moves day from fully_booked_days array to the fully_booked_start_days or fully_booked_end_days
     * This is required because we want to showcase days availability as per the selection.
     * So by default, fully_booked_start_days will be colored red; not available for check-ins.
     * When start date is selected, fully_booked_end_days will be colored red; not available for check-outs.
     *
     * @param array  $booked_data_array Array of booked days.
     * @param int    $resource          Resource ID.
     * @param string $day               A Day.
     * @param string $which             In or Out.
     */
    private function prepare_fully_booked_start_and_end_days($booked_data_array, $resource, $day, $which = 'in')
    {
    }
}
/**
 * Adds some additional info (such as check-in/check-out time) to the order info line item
 *
 * @class   WC_Accommodation_Booking_Order_Manager
 * @version 1.3.15
 */
class WC_Accommodation_Booking_Order_Manager
{
    /**
     * Hook into WooCommerce..
     */
    public function __construct()
    {
    }
    /**
     * Adds check-in/check-out info to the WooCommerce order line item area
     *
     * @param int           $item_id Order item ID.
     * @param WC_Order_Item $item    Order item.
     * @param WC_Order      $order   Order.
     * @return void
     */
    public function add_checkinout_info_to_order_email($item_id, $item, $order)
    {
    }
    /**
     * Get timestamp of checkout time based on given `$start_date` and `$duration`.
     *
     * @param  string $start_date
     * @param  int $duration
     * @return int|false
     */
    private function get_end_date_timestamp($start_date, $duration)
    {
    }
    /**
     * Complete virtual booking orders,
     *
     * Hooked into a filter that changes the status for bookings.
     *
     * @param mixed $order_status Order status, possibly changed by earlier callbacks.
     * @param int   $order_id     Order ID.
     * @return mixed 'completed' for a virtual accommodation order, otherwise the status as received.
     */
    public function complete_order($order_status, $order_id)
    {
    }
}
/**
 * Adds some new tabs to the front end display of a accommodation product.
 * The new tab shows check-in and check-out times.
 * In the future, other accommodation specific tabs might show up here.
 *
 * @class   WC_Accommodation_Booking_Product_Tabs
 * @version 1.3.15
 */
class WC_Accommodation_Booking_Product_Tabs
{
    /**
     * Product ID.
     *
     * @var int
     */
    public $product_id = 0;
    /**
     * Hook into WooCommerce..
     */
    public function __construct()
    {
    }
    /**
     * Let's us know if the admin actually filled out the check-in/check-out settings
     * @return boolean
     */
    public function are_time_fields_filled_out()
    {
    }
    /**
     * Adds our time tab to the list of tabs, if the product is an accommodation product and
     * the admin filled out the time setting fields.
     *
     * @param array $tabs List of WooCommerce product tabs
     * @return array $tabs
     */
    public function add_time_tab($tabs = array())
    {
    }
    /**
     * The actual content for our time tab.
     *
     * @return void
     */
    public function add_time_tab_content()
    {
    }
}
/**
 * Adds our new product type to the list of WooCommerce product types.
 *
 * @class   WC_Accommodation_Booking
 * @version 1.3.15
 */
class WC_Accommodation_Booking
{
    /**
     * Hook into bookings..
     */
    public function __construct()
    {
    }
    /**
     * Keep the calendar (.ics) dates of a booking on the days it really covers.
     *
     * Bookings moves the end of every multi-day booking to the following day. That suits an
     * all-day booking, whose date-only end is exclusive, but not a stay that ends at the
     * check-out time, so the original timestamp is exported instead.
     *
     * @param string          $value     Formatted value.
     * @param int             $timestamp Timestamp to format.
     * @param int             $old_ts    Original timestamp.
     * @param WC_Booking|null $booking   Booking object, or null when Bookings formats a date without one.
     *
     * @return string Formatted date for ICS.
     */
    public function disable_ics_formatting_for_accommodation($value, $timestamp, $old_ts, $booking)
    {
    }
    /**
     * Apply only one rate modifier to any given accommodation block.
     *
     * Rate rules for accommodation bookings define the absolute accommodation
     * rate for a block, so it does not make sense to apply multiple concurrent
     * rates. This hook will cause the rate calculation loop to exit after the
     * first applicable rate rule modifies the block cost.
     *
     * @since 1.1.12
     *
     * @param  bool               $enable_overlapping_rates
     * @param  WC_Product_Booking $product
     * @return bool
     */
    public function disable_overlapping_rates($enable_overlapping_rates, $product)
    {
    }
    /**
     * Register data stores for bookings.
     *
     * @param  array  $data_stores
     * @return array
     */
    public function register_data_stores($data_stores = array())
    {
    }
    /**
     * Hooks into woocommerce_bookings_product_types and adds our new type
     * @param array $types Array of WooCommerce Bookings Product Types
     */
    public function add_product_type($types)
    {
    }
    /**
     * Hooks into woocommerce_bookings_product_type_rest_check and verifies that product is a correct bookings type
     *
     * @param mixed      $is_product_valid Whether the product is a valid bookings type so far.
     * @param WC_Product $product          Product.
     * @return bool
     */
    public function validate_rest_product_type($is_product_valid, $product)
    {
    }
    /**
     * Shows the check-in time in the start date of an accommodation booking.
     *
     * @param mixed $date    Start date with time, as formatted by Bookings or earlier callbacks.
     * @param mixed $booking Booking (WC_Booking).
     * @return mixed
     */
    public function add_checkin_time_to_booking_start_time($date, $booking)
    {
    }
    /**
     * Shows the check-out time in the end date of an accommodation booking.
     *
     * @param mixed $date    End date with time, as formatted by Bookings or earlier callbacks.
     * @param mixed $booking Booking (WC_Booking).
     * @return mixed
     */
    public function add_checkout_time_to_booking_end_time($date, $booking)
    {
    }
    /**
     * Adds 'accommodation-booking' to the list of valid product types/terms
     */
    public function add_accommodation_to_booking_product_terms($terms)
    {
    }
    /**
     * Adds 'accommodation-booking' to `get_booking_products` so 'accommodation-booking'
     * products appear in the dropdown.
     *
     * @param array $args Current query args.
     *
     * @return array Query args
     */
    public function add_accommodation_to_booking_products_args($args)
    {
    }
    /**
     * Update start and end time based on check in/out time.
     *
     * Since duration of accommodation product is one night, only date is respected
     * and check-in/out times are not counted.
     *
     * @since 1.0.6
     *
     * @param int $booking_id Booking ID
     * @return void
     */
    public function update_start_end_time($booking_id)
    {
    }
    /**
     * Updates resource duration display string when duration unit is 'night'.
     *
     * @since 1.1.15
     *
     * @param string $duration_display Duration to display.
     * @param object $product          The product we are working with.
     *
     * @return string $duration_display Duration to display.
     */
    public function filter_resource_duration_display_string($duration_display, $product)
    {
    }
    /**
     * Update the time of a given datetime.
     *
     * @param string            $datetime Date time without separator (YmdHis)
     * @param string|false|null $time     Time in `xx:yy` pm/am format, or empty for none.
     *
     * @return string Datetime without separator
     */
    protected function _get_updated_timestamp_time($datetime, $time)
    {
    }
}
/**
 * WC Accommodation Bookings class
 *
 * @class   WC_Accommodation_Bookings_Plugin
 * @version 1.3.15
 */
class WC_Accommodation_Bookings_Plugin
{
    /**
     * Main plugin's file.
     *
     * @var string
     */
    public $plugin_file;
    /**
     * Plugin's version.
     *
     * @var string
     */
    public $version;
    /**
     * Dependencies check result.
     *
     * @var bool|WP_Error
     */
    public $dependencies_check_result;
    /**
     * Constructor.
     *
     * @param string $plugin_file Path to main plugin's file.
     * @param string $version     Plugin's version.
     */
    public function __construct($plugin_file, $version)
    {
    }
    /**
     * Declare compatibility with High-Performance Order Storage.
     *
     * @since 1.1.34
     * @return void
     */
    public function declare_hpos_compatibility()
    {
    }
    /**
     * Run the plugin.
     *
     * @return void
     */
    public function run()
    {
    }
    /**
     * Handles additional tasks when product is duplicated.
     *
     * @since 1.1.14
     * @param  WC_Product $new_product Duplicated product.
     * @param  WC_Product $product     Original product.
     * @return void
     */
    public function woocommerce_duplicate_product($new_product, $product)
    {
    }
    /**
     * Define plugin's constants.
     *
     * @return void
     */
    // phpcs:ignore
    private function _define_constants()
    {
    }
    /**
     * Register to hooks.
     *
     * @return void
     */
    // phpcs:ignore
    private function _register_hooks()
    {
    }
    /**
     * Check dependencies.
     *
     * @return bool|WP_Error Returns true if dependencies are satisfied. Otherwise error.
     */
    public function check_dependencies()
    {
    }
    /**
     * Admin notice when plugin is automatically deactivated.
     *
     * @deprecated 1.3.11 Use dependency_notice() instead.
     * @return void
     */
    public function deactivate_notice()
    {
    }
    /**
     * Admin notice when a required dependency is missing or outdated.
     *
     * @since 1.3.11
     *
     * @return void
     */
    public function dependency_notice()
    {
    }
    /**
     * WooCommerce fallback notice.
     *
     * @since 1.2.1
     * @return void
     */
    public function missing_wc_notice()
    {
    }
    /**
     * Load Classes
     *
     * @return void
     */
    public function includes()
    {
    }
    /**
     * Include admin
     *
     * @return void
     */
    public function admin_includes()
    {
    }
    /**
     * Include REST API and Admin functions' class.
     *
     * @return void
     */
    public function rest_admin_includes()
    {
    }
    /**
     * Frontend booking form scripts
     *
     * @return void
     */
    public function frontend_assets()
    {
    }
    /**
     * Adds product-type-accommodation-booking (and .product) classes to the wrapper div of a
     * woocommerce/single-product block when the product is an accommodation-booking type.
     *
     * On classic product pages wc_product_class() / content-single-product.php applies these
     * classes, but the block renderer skips that template and never adds them — breaking both
     * the CSS ::after "Check-in" label and the JS is_product_type_accommodation_booking() check.
     *
     * @since 1.3.9
     *
     * @param string $block_content Rendered block HTML.
     * @param array  $block         Block data including attrs.
     * @return string
     */
    public function add_product_type_class_to_block($block_content, $block)
    {
    }
    /**
     * Returns the first accommodation-booking product found inside a woocommerce/single-product
     * Gutenberg block on the current page, or null if none exists.
     *
     * @return WC_Product|null
     */
    private function get_accommodation_product_from_block()
    {
    }
    /**
     * Show row meta on the plugin screen.
     *
     * @param array  $links Plugin Row Meta.
     * @param string $file  Plugin Base file.
     *
     * @return  array
     */
    public function plugin_row_meta($links, $file)
    {
    }
    /**
     * Installer
     *
     * @return void
     */
    public function install()
    {
    }
}
/**
 * A WC_Accommodation_Dependencies class file.
 *
 * @package woocommerce-accommodation-bookings
 */
/**
 * WC Accommodation Bookings Dependency Checker
 *
 * Checks if WooCommerce Bookings is enabled and if it is the correct
 * version for accommodations to work.
 *
 * @class   WC_Accommodation_Dependencies
 * @version 1.3.15
 */
class WC_Accommodation_Dependencies
{
    /**
     * Array of active plugins
     *
     * @var array of active plugins
     */
    private static $active_plugins;
    /**
     * Load a list of our currently active WordPress plugins
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Returns true if bookings is installed/active and false if not
     *
     * @return boolean
     */
    private static function is_bookings_installed()
    {
    }
    /**
     * Returns true if bookings is greater than a specific version and false if not
     *
     * @param string $version The version to check against.
     * @return boolean
     */
    private static function is_bookings_above_or_equal_to_version($version)
    {
    }
    /**
     * Check dependencies.
     *
     * @throws Exception Show exception on dependencies failure.
     * @return void
     */
    public static function check_dependencies()
    {
    }
}
/**
 * Class that creates our new accommodation booking product resource type
 * Mostly inherited from WC_Product_Booking_Resource (code reuse!) but overrides a few methods
 *
 * @version 1.1.3
 * @since 1.0.9
 */
class WC_Product_Accommodation_Booking_Resource extends \WC_Product_Booking_Resource
{
    /**
     * Return the base cost (set at parent level).
     * @version 1.0.9
     * @since 1.0.9
     *
     * @return float
     */
    public function get_base_cost()
    {
    }
    /**
     * Return the block cost  (set at parent level).
     * @version 1.0.9
     * @since 1.0.9
     *
     * @return float
     */
    public function get_block_cost()
    {
    }
}
/**
 * Class that creates our new accommodation booking product type
 * Mostly inherited from WC_Product_Booking (code reuse!) but overrides a few methods
 *
 * @class   WC_Product_Accommodation_Booking
 * @version 1.3.15
 */
class WC_Product_Accommodation_Booking extends \WC_Product_Booking
{
    /**
     * Minimum timestamp value for detecting v2 format timestamps.
     * Timestamps below this (2001) are considered invalid for booking detection.
     *
     * @var int
     */
    const MIN_TIMESTAMP = 1000000000;
    /**
     * The type of product we're creating
     *
     * @var string
     */
    public $product_type = 'accommodation-booking';
    /**
     * The type of duration we're using
     *
     * @var string
     */
    public $wc_booking_duration_type = 'customer';
    /**
     * The unit of duration we're using
     *
     * @var string
     */
    public $wc_booking_duration_unit = 'night';
    /**
     * The duration of the booking
     *
     * @var integer
     */
    public $wc_booking_duration = 1;
    /**
     * Set up our new type and fill out some basic info
     *
     * WC_Product_Accommodation_Booking constructor.
     *
     * @param int|WC_Product|object $product Product to init.
     */
    public function __construct($product)
    {
    }
    /**
     * Get resource by ID.
     * Need to override this to return the proper resource class.
     *
     * @param  int $id
     *
     * @return WC_Product_Booking_Resource object
     */
    public function get_resource($id)
    {
    }
    /**
     * Override product type
     *
     * @return string
     */
    public function get_type()
    {
    }
    /**
     * Get resources objects.
     *
     * @return array Array of WC_Product_Accommodation_Booking_Resource objects.
     */
    public function get_resources()
    {
    }
    /**
     * Tells Bookings that this product type is a bookings addon.
     *
     * @return boolean
     */
    public function is_bookings_addon()
    {
    }
    /**
     * Human readable version of the addon title
     *
     * @return string
     */
    public function bookings_addon_title()
    {
    }
    /**
     * We want users to be able to select their range of dates
     *
     * @return boolean
     */
    public function is_range_picker_enabled()
    {
    }
    /**
     * Customers define how many nights they want to stay. There is no concept
     * of "fixed" durations for accommodations.
     *
     * @param  string $context
     *
     * @return string
     */
    public function get_duration_type($context = 'view')
    {
    }
    /**
     * Our duration is nights instead of days
     *
     * @param  string $context
     *
     * @return string
     */
    public function get_duration_unit($context = 'view')
    {
    }
    /**
     * Costs can vary depending on rates (weekend rates, etc)
     * In the future, addons like cots can also change cost.
     *
     * @return boolean
     */
    public function has_additional_costs()
    {
    }
    /**
     * By default, rooms will be available.
     *
     * @return boolean
     */
    public function get_default_availability()
    {
    }
    /**
     * Hotel rooms are a "virtual" product. No shipping is involved.
     *
     * @return boolean
     */
    public function is_virtual()
    {
    }
    /**
     * Get price HTML
     *
     * @param string $price
     *
     * @return string
     */
    public function get_price_html($price = '')
    {
    }
    /**
     * Find available and booked blocks for specific resources (if any) and return them as array.
     *
     * @param  array   $blocks
     * @param  integer $resource_id
     * @param  integer $from The starting date for the set of blocks
     * @param  integer $to
     * @param  bool    $include_sold_out Whether to include sold-out blocks.
     * @return array
     */
    public function get_time_slots($blocks, $resource_id = 0, $from = 0, $to = 0, $include_sold_out = \false)
    {
    }
    /**
     * Get an array of blocks within in a specified date range
     *
     * The WC_Product_Booking class does not account for 'nights' as a valid duration unit so it retrieves every minute of each day as a block,
     * severely slowing down the load time of the page.
     *
     * @param int   $start_date     Range start timestamp.
     * @param int   $end_date       Range end timestamp.
     * @param array $intervals
     * @param int   $resource_id
     * @param array $booked
     * @param bool  $get_past_times
     *
     * @return array
     */
    public function get_blocks_in_range($start_date, $end_date, $intervals = array(), $resource_id = 0, $booked = array(), $get_past_times = \false)
    {
    }
    /**
     * Normalize blocks array to handle both v2 (flat) and v3 (associative) formats.
     * Automatically converts stale v2-format data from cached transients to v3 format.
     *
     * @param array $blocks Array of blocks (may be flat array from v2 or associative from v3).
     * @return array Normalized associative array compatible with v3 format.
     */
    private function normalize_blocks_array($blocks)
    {
    }
    /**
     * Get checkin and checkout times.
     *
     * @param string $type       The type, check_in or check_out.
     * @param int    $product_id The product ID.
     *
     * @return string|false|null The time, either from options or default or from the filtered value.
     *                           An empty string, false or null from the filter means no time.
     */
    public static function get_check_times($type, $product_id = 0)
    {
    }
    /**
     * Get duration.
     *
     * Duration unit is always one night.
     *
     * @param  string $context
     * @return integer
     */
    public function get_duration($context = 'view')
    {
    }
}
/**
 * Addons integration class.
 *
 * @class   WC_Accommodation_Booking_Addons
 * @version 1.3.15
 */
class WC_Accommodation_Booking_Addons
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
     * @param  WC_Product $product Product the add-ons total is shown for.
     * @return bool
     */
    public function addons_show_grand_total($show_grand_total, $product)
    {
    }
    /**
     * Show same options as bookings integration now.
     * Only difference is the product type we are targeting.
     *
     * @param mixed      $post  Product post, or null for global add-ons.
     * @param mixed      $addon Add-on data.
     * @param int|string $loop  Add-on row index, or the '{loop}' placeholder for a new row.
     * @return void
     */
    public function addon_options($post, $addon, $loop)
    {
    }
    /**
     * Don't adjust cart item price for accommodation bookings since the booking form class adds the costs itself
     *
     * @param boolean $bool should the the addon price be added to the product price.
     * @param array   $cart_item the corresponding cart item.
     *
     * @return bool
     */
    public function disable_product_add_on_price_adjustment($bool, $cart_item)
    {
    }
    /**
     * Change addon price based on settings
     *
     * @param mixed $cart_item_data Add-on cart item data.
     * @param mixed $addon          Add-on data.
     * @param int   $product_id     Product ID.
     * @param mixed $post_data      Posted data.
     * @return mixed
     */
    public function addon_price($cart_item_data, $addon, $product_id, $post_data)
    {
    }
}
\define('WC_ACCOMMODATION_BOOKINGS_VERSION', '1.3.15');