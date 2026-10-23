<?php
/**
 * Generated stub declarations for woocommerce-shipment-tracking 2.7.9.
 * @see https://github.com/woocommerce/all-plugins/tree/stubs
 */

namespace {
    /**
     * WC_Shipment_Tracking_Order_REST_API_Controller class file.
     *
     * @package WC_Shipment_Tracking
     */
    /**
     * REST API shipment tracking controller.
     *
     * Handles requests to /orders/shipment-tracking endpoint.
     *
     * @since 1.5.0
     */
    class WC_Shipment_Tracking_Order_REST_API_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         * This should not be in wc/* because shippment tracking does not need to follow WC core apis.
         *
         * @var string
         */
        protected $namespace = 'wc-shipment-tracking/v3';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'orders/(?P<order_id>[\d]+)/shipment-trackings';
        /**
         * Post type.
         *
         * @var string
         */
        protected $post_type = 'shop_order';
        /**
         * Set a namespace for tracking order Rest API.
         *
         * @param string $_namespace Rest API namespace.
         *
         * @return WC_Shipment_Tracking_Order_REST_API_Controller
         */
        public function set_namespace($_namespace)
        {
        }
        /**
         * Register the routes for trackings.
         */
        public function register_routes()
        {
        }
        /**
         * Rest route permission always return true.
         *
         * @return boolean
         */
        public function rest_provider_route_permission()
        {
        }
        /**
         * Check whether a given request has permission to read order shipment-trackings.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_items_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access create order shipment-tracking.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return boolean
         */
        public function create_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access to read a order shipment-tracking.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return WP_Error|boolean
         */
        public function get_item_permissions_check($request)
        {
        }
        /**
         * Check if a given request has access delete a order shipment-tracking.
         *
         * @param  WP_REST_Request $request Full details about the request.
         * @return boolean
         */
        public function delete_item_permissions_check($request)
        {
        }
        /**
         * Checks if an order ID is a valid order.
         *
         * @param int $order_id Order ID.
         *
         * @return bool
         * @since 1.6.4
         */
        public function is_valid_order_id($order_id)
        {
        }
        /**
         * Get shipment-trackings from an order.
         *
         * @param WP_REST_Request $request Full details about the request.
         *
         * @return array
         */
        public function get_items($request)
        {
        }
        /**
         * Get shipment-tracking providers.
         *
         * @param WP_REST_Request $request Full details about the request.
         *
         * @return array
         */
        public function get_providers($request)
        {
        }
        /**
         * Create a single order shipment-tracking.
         *
         * @param WP_REST_Request $request Full details about the request.
         *
         * @return WP_Error|WP_REST_Response
         */
        public function create_item($request)
        {
        }
        /**
         * Get a single order shipment-tracking.
         *
         * @param WP_REST_Request $request Full details about the request.
         *
         * @return WP_Error|WP_REST_Response
         */
        public function get_item($request)
        {
        }
        /**
         * Delete a single order shipment-tracking.
         *
         * @param WP_REST_Request $request Full details about the request.
         *
         * @return WP_REST_Response|WP_Error
         */
        public function delete_item($request)
        {
        }
        /**
         * Prepare a single order shipment-note output for response.
         *
         * @param array           $tracking_item Shipment tracking item.
         * @param WP_REST_Request $request       Request object.
         *
         * @return WP_REST_Response $response Response data
         */
        public function prepare_item_for_response($tracking_item, $request)
        {
        }
        /**
         * Prepare links for the request.
         *
         * @param int   $order_id Order ID.
         * @param array $tracking_item Shipment tracking item.
         *
         * @return array Links for the given order shipment-tracking.
         */
        protected function prepare_links($order_id, $tracking_item)
        {
        }
        /**
         * Get the Order Notes schema, conforming to JSON Schema.
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
    }
    /**
     * WC_Shipment_Tracking_REST_API_Controller class file.
     *
     * @package WC_Shipment_Tracking
     */
    /**
     * REST API shipment tracking controller.
     *
     * Handles requests to /orders/shipment-tracking endpoint.
     *
     * @since 1.5.0
     */
    class WC_Shipment_Tracking_REST_API_Controller extends \WC_REST_Controller
    {
        /**
         * Endpoint namespace.
         * This should not be in wc/* because shippment tracking does not need to follow WC core apis.
         *
         * @var string
         */
        protected $namespace = 'wc-shipment-tracking/v3';
        /**
         * Route base.
         *
         * @var string
         */
        protected $rest_base = 'shipment-trackings';
        /**
         * Set rest api namespace.
         *
         * @param string $_namespace Namespace.
         *
         * @return WC_Shipment_Tracking_REST_API_Controller
         */
        public function set_namespace($_namespace)
        {
        }
        /**
         * Register the routes for trackings.
         */
        public function register_routes()
        {
        }
        /**
         * Rest route permission always return true.
         *
         * @return boolean
         */
        public function rest_provider_route_permission()
        {
        }
        /**
         * Get shipment-tracking providers.
         *
         * @param WP_REST_Request $request WordPress Rest Request object.
         *
         * @return array
         */
        public function get_providers($request)
        {
        }
    }
    /**
     * Loads Shipment Tracking ability definitions.
     */
    class WC_Shipment_Tracking_Abilities
    {
        /**
         * Initialize ability registration hooks.
         *
         * @return void
         */
        public static function init()
        {
        }
        /**
         * Add Shipment Tracking ability definitions to WooCommerce's loader.
         *
         * @param array $classes Ability definition class names.
         *
         * @return array
         */
        public static function add_ability_definition_classes(array $classes)
        {
        }
        /**
         * Load ability definition classes after Woo's AbilityDefinition interface exists.
         *
         * @return void
         */
        private static function load_ability_definition_classes()
        {
        }
    }
}
namespace WooCommerce\ShipmentTracking {
    /**
     * Trait Order_Util
     *
     * A proxy-style trait that will help keep our code more stable and cleaner during the
     * transition to WC Custom Order Tables.
     */
    trait Order_Util
    {
        /**
         * The OrderUtil class provided by WooCommerce in version 6.5
         * to help with the transition to Custom Order Tables
         *
         * @var string
         */
        public static $wc_order_util_class = 'Automattic\WooCommerce\Utilities\OrderUtil';
        /**
         * The legacy screen name/id for the WC Order post type
         *
         * @var string
         */
        public static $legacy_order_admin_screen = 'shop_order';
        /**
         * Checks whether the OrderUtil class exists
         *
         * @return bool
         */
        public function wc_order_util_class_exists()
        {
        }
        /**
         * Checks whether the OrderUtil class and the given method exist
         *
         * @param string $method Method name of the order object.
         *
         * @return bool
         */
        public function wc_order_util_method_exists($method)
        {
        }
        /**
         * Checks whether we are using custom order tables.
         *
         * @return bool
         */
        public function custom_orders_table_usage_is_enabled()
        {
        }
        /**
         * Returns the relevant order screen depending on whether
         * custom order tables are being used.
         *
         * @return string
         */
        public function get_order_admin_screen()
        {
        }
        /**
         * Returns the WC_Order object from the object passed to
         * the add_meta_box callback function.
         *
         * @param \WP_Post|\WC_Order $post_or_order_object Either post or order object.
         *
         * @return \WC_Order
         */
        public function init_theorder_object($post_or_order_object)
        {
        }
    }
}
namespace {
    /**
     * WooCommerce Shipment Tracking Actions
     *
     * @since 1.4.0
     */
    class WC_Shipment_Tracking_Actions
    {
        use \WooCommerce\ShipmentTracking\Order_Util;
        /**
         * Instance of this class.
         *
         * @var object Class Instance
         */
        private static $instance;
        /**
         * Get the class instance
         *
         * @return WC_Shipment_Tracking_Actions
         */
        public static function get_instance()
        {
        }
        /**
         * Get shipping providers.
         *
         * @return array
         */
        public function get_providers()
        {
        }
        /**
         * Load admin styles.
         */
        public function admin_styles()
        {
        }
        /**
         * Enqueue the tracking meta box scripts.
         *
         * Hooked to `admin_enqueue_scripts` rather than called while the meta box
         * renders. Enqueuing during meta box output only prints a tag when the footer
         * scripts have not already gone out, which holds on some setups and silently
         * fails on others - leaving the meta box with no JavaScript at all, so Delete
         * does nothing and Save Tracking falls back to submitting the order form.
         *
         * @since 2.7.8
         */
        public function admin_scripts()
        {
        }
        /**
         * Whether the current admin screen is one that renders the tracking meta box.
         *
         * @since 2.7.8
         *
         * @return bool
         */
        protected function is_tracking_meta_box_screen()
        {
        }
        /**
         * Define shipment tracking column in admin orders list.
         *
         * @param array $columns Existing columns.
         *
         * @return array Altered columns
         * @since 1.8.0
         */
        public function add_wc_orders_list_columns($columns)
        {
        }
        /**
         * Render shipment tracking in custom column.
         *
         * @param string $column_name The name of the column to display.
         * @param int    $post_id The current post ID.
         *
         * @since 1.6.1
         */
        public function render_shop_order_columns($column_name, $post_id)
        {
        }
        /**
         * Render shipment tracking in custom column on WC Orders page (when using Custom Order Tables).
         *
         * @param string    $column_name Identifier for the custom column.
         * @param \WC_Order $order Current WooCommerce order object.
         *
         * @return void
         * @since 1.8.0
         */
        public function render_wc_orders_list_columns($column_name, $order)
        {
        }
        /**
         * Get content for shipment tracking column.
         *
         * @since 1.6.1
         *
         * @param int $order_id Order ID.
         *
         * @return string Column content to render
         */
        public function get_shipment_tracking_column($order_id)
        {
        }
        /**
         * Add the meta box for shipment info on the order page
         */
        public function add_meta_box()
        {
        }
        /**
         * Returns a HTML node for a tracking item for the admin meta box.
         *
         * @param int   $order_id Order ID.
         * @param array $item Tracking item.
         */
        public function display_html_tracking_item_for_meta_box($order_id, $item)
        {
        }
        /**
         * Show the meta box for shipment info on the order page.
         *
         * @param WP_Post|WC_Order $post_or_order_object Either Post object or Order object.
         */
        public function meta_box($post_or_order_object)
        {
        }
        /**
         * Order Tracking Save.
         * Function for saving tracking items.
         *
         * @param int $post_id Post Id.
         */
        public function save_meta_box($post_id)
        {
        }
        /**
         * Order Tracking Get All Order Items AJAX
         *
         * Function for getting all tracking items associated with the order
         */
        public function get_meta_box_items_ajax()
        {
        }
        /**
         * Order Tracking Save AJAX
         *
         * Function for saving tracking items via AJAX
         */
        public function save_meta_box_ajax()
        {
        }
        /**
         * Order Tracking Delete
         *
         * Function to delete a tracking item
         */
        public function meta_box_delete_tracking()
        {
        }
        /**
         * Display Shipment info in the frontend (order view/tracking page).
         *
         * @param int $order_id Order ID.
         */
        public function display_tracking_info($order_id)
        {
        }
        /**
         * List of excluded email classes.
         * Shipment tracking will not be added to emails that are instances of these email classes.
         *
         * @return array
         */
        public function get_excluded_email_classes()
        {
        }
        /**
         * Display shipment info in customer emails.
         *
         * @version 1.6.8
         *
         * @param WC_Order $order         Order object.
         * @param bool     $sent_to_admin Whether the email is being sent to admin or not.
         * @param bool     $plain_text    Whether email is in plain text or not.
         * @param WC_Email $email         Email object.
         */
        public function email_display($order, $sent_to_admin, $plain_text = \null, $email = \null)
        {
        }
        /**
         * Prevents shipment tracking data being copied to subscription renewals.
         *
         * @param array $data Data from WC Subscription plugin. It's about renewal order data.
         *
         * @return array
         */
        public function prevent_copying_shipment_tracking_data($data)
        {
        }
        /**
         * Prevents data being copied to subscription renewals.
         *
         * @param string $order_meta_query  Order meta query.
         *
         * @return string
         */
        public function woocommerce_subscriptions_renewal_order_meta_query($order_meta_query)
        {
        }
        /**
         * Works out the final tracking provider and tracking link and appends then to the returned tracking item
         *
         * @param int   $order_id      Order ID.
         * @param array $tracking_item Tracking item.
         */
        public function get_formatted_tracking_item($order_id, $tracking_item)
        {
        }
        /**
         * Get formatted tracking link.
         *
         * @param array       $tracking_item Tracking item.
         * @param string|null $postcode      Postcode.
         * @param string|null $country_code  Country code.
         * @param int         $order_id      Order ID.
         * @param string|null $link_format   Link format.
         *
         * @return string
         */
        public function get_formatted_tracking_link(array $tracking_item, ?string $postcode, ?string $country_code, int $order_id, ?string $link_format): string
        {
        }
        /**
         * Deletes a tracking item from order meta array.
         *
         * @param int    $order_id    Order ID.
         * @param string $tracking_id Tracking ID.
         *
         * @return bool True if tracking item is deleted successfully
         */
        public function delete_tracking_item($order_id, $tracking_id)
        {
        }
        /**
         * Adds a tracking item to the order meta array.
         *
         * @param int   $order_id Order ID.
         * @param array $args     tracking info arguments.
         *
         * @return array Tracking item
         */
        public function add_tracking_item($order_id, $args)
        {
        }
        /**
         * Saves the tracking items array to order meta.
         *
         * @param int   $order_id       Order ID.
         * @param array $tracking_items List of tracking item.
         */
        public function save_tracking_items($order_id, $tracking_items)
        {
        }
        /**
         * Gets a single tracking item from the order meta array for an order.
         *
         * @param int    $order_id    Order ID.
         * @param string $tracking_id Tracking ID.
         * @param bool   $formatted   Whether to resolve the final tracking
         *                            link and provider in the returned tracking item.
         *                            Default to false.
         *
         * @return null|array Null if not found, otherwise array of tracking item will be returned
         */
        public function get_tracking_item($order_id, $tracking_id, $formatted = \false)
        {
        }
        /**
         * Gets all tracking items from the post meta array for an order
         *
         * @param int  $order_id  Order ID.
         * @param bool $formatted Whether to resolve the final tracking link
         *                        and provider in the returned tracking item.
         *                        Default to false.
         *
         * @return array List of tracking items
         */
        public function get_tracking_items($order_id, $formatted = \false)
        {
        }
        /**
         * Gets the absolute plugin path without a trailing slash, e.g.
         * /path/to/wp-content/plugins/plugin-directory
         *
         * @return string plugin path
         */
        public function get_plugin_path()
        {
        }
    }
    /**
     * WooCommerce Shipment Tracking compats handler.
     *
     * @since 1.6.0
     */
    class WC_Shipment_Tracking_Compat
    {
        /**
         * Load compat classes and instantiate it.
         */
        public function load_compats()
        {
        }
    }
    /**
     * Shipment Tracking provider list ability definition.
     */
    class WC_Shipment_Tracking_List_Providers_Ability implements \Automattic\WooCommerce\Abilities\AbilityDefinition
    {
        /**
         * Ability ID.
         */
        const NAME = 'woocommerce-shipment-tracking/list-providers';
        /**
         * Ability category.
         */
        const CATEGORY = 'woocommerce';
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
         * Check whether the current request can read provider definitions.
         *
         * Provider definitions are already exposed by the extension's public REST
         * provider endpoint and do not include order/customer tracking data.
         *
         * @param mixed $input Ability input.
         *
         * @return bool|\WP_Error
         */
        public static function can_read_providers($input = \null)
        {
        }
        /**
         * Execute the provider list ability.
         *
         * @param array $input Ability input.
         *
         * @return array
         */
        public static function execute(array $input)
        {
        }
        /**
         * Read-only metadata for externally visible abilities.
         *
         * @return array
         */
        private static function get_read_only_meta()
        {
        }
        /**
         * Get the input schema.
         *
         * @return array
         */
        private static function get_input_schema()
        {
        }
        /**
         * Get the output schema.
         *
         * @return array
         */
        private static function get_output_schema()
        {
        }
    }
    /**
     * Shipment Tracking order tracking items ability definition.
     */
    class WC_Shipment_Tracking_List_Tracking_Items_Ability implements \Automattic\WooCommerce\Abilities\AbilityDefinition
    {
        /**
         * Ability ID.
         */
        const NAME = 'woocommerce-shipment-tracking/list-tracking-items';
        /**
         * Ability category.
         */
        const CATEGORY = 'woocommerce';
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
         * Check whether the current user can read shipment tracking for the order.
         *
         * @param mixed $input Ability input.
         *
         * @return bool|\WP_Error
         */
        public static function can_read_tracking_items($input = \null)
        {
        }
        /**
         * Execute the tracking items read ability.
         *
         * @param array $input Ability input.
         *
         * @return array|\WP_Error
         */
        public static function execute(array $input)
        {
        }
        /**
         * Format a tracking item for the public ability contract.
         *
         * @param array $tracking_item Tracking item from the extension domain helper.
         *
         * @return array
         */
        public static function format_tracking_item(array $tracking_item)
        {
        }
        /**
         * Read-only metadata for externally visible abilities.
         *
         * @return array
         */
        private static function get_read_only_meta()
        {
        }
        /**
         * Get the input schema.
         *
         * @return array
         */
        private static function get_input_schema()
        {
        }
        /**
         * Get the output schema.
         *
         * @return array
         */
        private static function get_output_schema()
        {
        }
    }
    /**
     * WC_Shipment_Tracking_Privacy class.
     *
     * This class handles the display of the privacy message of the privacy id to the admin,
     * privacy data to be exported and privacy data to be deleted.
     */
    class WC_Shipment_Tracking_Privacy extends \WC_Abstract_Privacy
    {
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Returns a list of orders that are using one of 2Checkout API's payment methods.
         *
         * @param string $email_address Email address to be searched on orders.
         * @param int    $page Pagination of data.
         *
         * @return array List of orders.
         */
        protected function get_orders($email_address, $page)
        {
        }
        /**
         * Gets the message of the privacy to display.
         */
        public function get_privacy_message()
        {
        }
        /**
         * Prepares the array data for output.
         *
         * @param array $items Array of array.
         * @return array $output Prepared array.
         */
        public function prepare_data($items)
        {
        }
        /**
         * Handle exporting data for Orders.
         *
         * @param string $email_address E-mail address to export.
         * @param int    $page          Pagination of data.
         *
         * @return array
         */
        public function order_data_exporter($email_address, $page = 1)
        {
        }
        /**
         * Finds and erases order data by email address.
         *
         * @since 3.4.0
         * @param string $email_address The user email address.
         * @param int    $page  Page.
         * @return array An array of personal data in name value pairs
         */
        public function order_data_eraser($email_address, $page)
        {
        }
        /**
         * Handle eraser of data tied to Orders
         *
         * @param WC_Order $order Order object.
         * @return array
         */
        protected function maybe_handle_order($order)
        {
        }
    }
    /**
     * WooCommerce Shipment Tracking Updates.
     *
     * This class performs the update of a given version. If a particular version
     * needs update routine (e.g. DB migration) then the updater should be defined
     * in `self::get_updaters()`.
     *
     * @since 1.6.5
     * @version 1.6.5
     */
    class WC_Shipment_Tracking_Updates
    {
        /**
         * List of updaters from version-to-version.
         *
         * @since 1.6.5
         * @version 1.6.5
         *
         * @see self::get_updaters()
         *
         * @var array
         */
        protected static $updaters;
        /**
         * Get list of version updaters.
         *
         * @since 1.6.5
         * @version 1.6.5
         *
         * @return array Array of updaters where key is the version and value is
         *               updater array.
         */
        protected static function get_updaters()
        {
        }
        /**
         * Check for update based on current plugin's version versus installed
         * version. Perform update routine if version mismatches.
         *
         * Hooked into `init` so that it's checked on every request.
         *
         * @since 1.6.5
         * @version 1.6.5
         */
        public static function check_updates()
        {
        }
        /**
         * Update version that's stored in DB to the latest version.
         *
         * @since 1.6.5
         * @version 1.6.5
         */
        protected static function update_version()
        {
        }
        /**
         * Maybe perform update if there's an udpate routine for a given version.
         *
         * @since 1.6.5
         * @version 1.6.5
         *
         * @param string $installed_version Installed version found in DB.
         */
        protected static function maybe_perform_update($installed_version)
        {
        }
        /**
         * Maybe the updater will run `updates` routine.
         *
         * @since 1.6.5
         * @version 1.6.5
         *
         * @param array $updater Updater array.
         */
        protected static function maybe_updater_runs_update(array $updater)
        {
        }
        /**
         * Get updater base dir.
         *
         * @since 1.6.5
         * @version 1.6.5
         *
         * @return string Updater base dir.
         */
        protected static function get_updater_base_dir()
        {
        }
    }
    /**
     * Plugin's main class.
     */
    class WC_Shipment_Tracking
    {
        /**
         * Instance of WC_Shipment_Tracking_Actions.
         *
         * @var WC_Shipment_Tracking_Actions
         */
        public $actions;
        /**
         * Instance of WC_Shipment_Tracking_Compat.
         *
         * @var WC_Shipment_Tracking_Compat
         */
        public $compat;
        /**
         * Plugin file.
         *
         * @since 1.6.2
         * @var string
         */
        public $plugin_file;
        /**
         * Plugin dir.
         *
         * @since 1.6.2
         * @var string
         */
        public $plugin_dir;
        /**
         * Plugin URL.
         *
         * @since 1.6.2
         * @var string
         */
        public $plugin_url;
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Loads any class that needs to check for WC loaded.
         *
         * @since 1.6.11
         */
        public function load_post_wc_class()
        {
        }
        /**
         * Include required files.
         *
         * @since 1.4.0
         */
        private function includes()
        {
        }
        /**
         * Init shipment tracking REST API.
         *
         * @since 1.5.0
         */
        private function init_rest_api()
        {
        }
        /**
         * Register shipment tracking routes.
         *
         * @since 1.5.0
         */
        public function rest_api_register_routes()
        {
        }
        /**
         * Localisation.
         */
        public function load_plugin_textdomain()
        {
        }
        /**
         * Gets the absolute plugin path without a trailing slash, e.g.
         * /path/to/wp-content/plugins/plugin-directory.
         *
         * @return string plugin path
         */
        public function get_plugin_path()
        {
        }
        /**
         * Gets the version of Subscriptions active on the store.
         *
         * This works for stores that have the WC Subscriptions extension activated or
         * the subscriptions-core version that is bundled in WooCommerce Payments.
         *
         * @return null|string
         */
        public function get_subscriptions_version()
        {
        }
    }
    /**
     * WooCommerce Shipment Tracking compatibility with Order CSV Export.
     *
     * @since 1.6.2
     */
    class WC_Shipment_Tracking_Order_CSV_Export_Compat
    {
        /**
         * Constructor
         *
         * Set callbacks to WP hooks.
         */
        public function __construct()
        {
        }
        /**
         * Add custom mapping options.
         *
         * @param array  $options     Mapping options.
         * @param string $export_type Export type.
         *
         * @return array Mapping options.
         */
        public function add_custom_mapping_options($options, $export_type)
        {
        }
        /**
         * Adds support for Customer/Order CSV Export by adding appropriate column headers.
         *
         * @param array  $headers       Existing array of header key/names for the CSV export.
         * @param object $csv_generator WC_CSV_Export_Generator instance.
         *
         * @return array Column headers.
         */
        public function add_tracking_info_to_csv_export_column_headers($headers, $csv_generator)
        {
        }
        /**
         * Adds support for Customer/Order CSV Export by adding data for the column headers.
         *
         * @param array    $order_data    Generated order data matching the column keys in the header.
         * @param WC_Order $order         Order being exported.
         * @param object   $csv_generator WC_CSV_Export_Generator instance.
         *
         * @return array Column data.
         */
        public function add_tracking_info_to_csv_export_column_data($order_data, $order, $csv_generator)
        {
        }
    }
    /**
     * WooCommerce Shipment Tracking compatibility with Customer / Coupon / Order CSV Import
     *
     * @since 1.6.2
     */
    class WC_Shipment_Tracking_Order_CSV_Import_Compat
    {
        /**
         * Constructor.
         *
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * Add Shipment Tracking as a recognized import column
         *
         * @param array  $options Associative array of options for import mapping.
         * @param string $importer Importer type.
         *
         * @return array updated options
         */
        public function add_column_mapping_options($options, $importer)
        {
        }
        /**
         * Add Shipment Tracking data to the parsed raw order data in CSV Import Suite.
         *
         * @since 1.6.2
         * @param array $order_data Parsed order data.
         * @param array $item Raw order data.
         * @return array
         */
        public function add_parsed_order_data($order_data, $item)
        {
        }
        /**
         * Update Shipment Tracking data when orders are imported by CSV Import Suite.
         *
         * @param int   $order_id Order ID.
         * @param array $order_data Order data.
         *
         * @since 1.6.2
         */
        public function save_shipment_tracking_order_data($order_id, $order_data)
        {
        }
    }
    /**
     * WooCommerce Shipment Tracking compatibility with PIP extension.
     *
     * @since 1.6.0
     */
    class WC_Shipment_Tracking_PIP_Compat
    {
        /**
         * Constructor.
         *
         * Hooks into various PIP filters.
         */
        public function __construct()
        {
        }
        /**
         * Add shipment tracking settings to PIP settings.
         *
         * @since 1.6.0
         *
         * @param array $settings Settings.
         * @return array Settings
         */
        public function add_settings($settings)
        {
        }
        /**
         * Show save button in general tab.
         *
         * @since 1.6.0
         *
         * @param bool   $hide Whether to hide or not the save button, default false (do not hide), true on general tab.
         * @param string $current_section the current settings section.
         *
         * @return bool
         */
        public function show_save_button($hide, $current_section)
        {
        }
        /**
         * Display shipment tracking info in PIP document.
         *
         * @since 1.6.0
         *
         * @param string   $document_type Document type.
         * @param string   $action Current action running on document.
         * @param object   $document WC_PIP_Document object.
         * @param WC_Order $order Order object.
         */
        public function display_shipment_tracking($document_type, $action, $document, $order)
        {
        }
    }
    /**
     * WooCommerce Shipment Tracking compatibility with Customer / Order XML Export
     *
     * @since 1.7.0
     */
    class WC_Shipment_Tracking_XML_Export_Compat
    {
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Adds fields to the order XML Export for shipment tracking information.
         *
         * @param array    $format Fields in the order XML output.
         * @param WC_Order $order The order object being exported.
         *
         * @return array - the updated fields
         */
        public function add_fields_to_xml_export_order_format($format, $order)
        {
        }
    }
    /**
     * Base class for version updater to implement.
     *
     * Real version updater lives in the same directory.
     *
     * @since 1.6.5
     * @version 1.6.5
     */
    abstract class WC_Shipment_Tracking_Updater
    {
        /**
         * Logger instance.
         *
         * @since 1.6.5
         * @version 1.6.5
         *
         * @var WC_Logger
         */
        private $logger;
        /**
         * Performs update.
         *
         * @since 1.6.5
         * @version 1.6.5
         *
         * @return bool Returns true if succeed.
         */
        abstract public function update();
        /**
         * Log debug message.
         *
         * @since 1.6.5
         * @version 1.6.5
         *
         * @param string $message Message to log.
         */
        protected function log_debug($message)
        {
        }
    }
    /**
     * Update routine for 1.0.2 where shipping zone support is initially supported.
     *
     * @since 1.6.5
     */
    class WC_Shipment_Tracking_Updater_1_6_5 extends \WC_Shipment_Tracking_Updater
    {
        /**
         * {@inheritdoc}
         */
        public function update()
        {
        }
        /**
         * Convert old meta in a given order ID to new meta structure.
         *
         * @param int $order_id Order ID.
         */
        private function convert_old_meta_in_order($order_id)
        {
        }
        /**
         * Get order IDs with legacy meta.
         *
         * @return array Order IDs.
         */
        private function get_order_ids_with_legacy_meta()
        {
        }
    }
}
namespace {
    /**
     * WooCommerce fallback notice.
     *
     * @since 1.6.20
     * @return void
     */
    function woocommerce_shipment_tracking_missing_wc_notice()
    {
    }
    \define('WC_SHIPMENT_TRACKING_FILE', __FILE__);
    \define('WC_SHIPMENT_TRACKING_DIR', __DIR__);
    \define('WC_SHIPMENT_TRACKING_VERSION', '2.7.9');
    /**
     * Initializes the extension.
     *
     * @since 1.6.20
     * @return void
     */
    function woocommerce_shipment_tracking_init()
    {
    }
    /**
     * Returns an instance of WC_Shipment_Tracking.
     *
     * @since 1.6.5
     * @version 1.6.5
     *
     * @return WC_Shipment_Tracking
     */
    function wc_shipment_tracking()
    {
    }
    /**
     * Adds a tracking number to an order.
     *
     * @param int         $order_id        The order id of the order you want to
     *                                     attach this tracking number to.
     * @param string      $tracking_number The tracking number.
     * @param string      $provider        The tracking provider. If you use one
     *                                     from `WC_Shipment_Tracking_Actions::get_providers()`,
     *                                     the tracking url will be taken case of.
     * @param int         $date_shipped    The timestamp of the shipped date.
     *                                     This is optional, if not set it will
     *                                     use current time.
     * @param bool|string $custom_url      If you are not using a provder from
     *                                     `WC_Shipment_Tracking_Actions::get_providers()`,
     *                                     you can add a url for tracking here.
     *                                     This is optional.
     */
    function wc_st_add_tracking_number($order_id, $tracking_number, $provider, $date_shipped = \null, $custom_url = \false)
    {
    }
    /**
     * Deletes tracking information based on tracking_number relating to an order.
     *
     * @param int    $order_id        Order ID.
     * @param string $tracking_number The tracking number to be deleted.
     * @param string $provider        You can filter the delete by specifying a
     *                                tracking provider. This is optional.
     */
    function wc_st_delete_tracking_number($order_id, $tracking_number, $provider = '')
    {
    }
    /**
     * Declaring HPOS compatibility.
     */
    function wc_st_declare_hpos_compatibility()
    {
    }
    /**
     * Declare cart/checkout blocks compatibility.
     */
    function wc_st_declare_cart_checkout_blocks_compatibility()
    {
    }
    /**
     * Get the alias name of provider.
     *
     * @param string $provider Provider name.
     *
     * @return string
     */
    function wc_st_get_provider_alias($provider)
    {
    }
}