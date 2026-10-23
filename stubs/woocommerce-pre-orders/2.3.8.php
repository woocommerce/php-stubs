<?php
/**
 * Generated stub declarations for woocommerce-pre-orders 2.3.8.
 * @see https://github.com/woocommerce/all-plugins/tree/stubs
 */

namespace {
    /**
     * Pre-Orders Admin class.
     */
    class WC_Pre_Orders_Admin_Ajax
    {
        public function __construct()
        {
        }
        /**
         * Adds validation to make sure only one pre-order product is added to an order
         * @param WP_Error $validation_error
         * @param WC_Product $product
         * @param WC_Order $order
         * @param int $qty
         *
         * @return WP_Error
         */
        public function can_add_product_to_order($validation_error, $product, $order, $qty)
        {
        }
        /**
         * Add pre-order fee when a pre-order product is added
         *
         * @param WC_Order_Item[] $added_items
         * @param WC_Order $order
         *
         * @since 1.6.0
         */
        public function maybe_add_pre_order_fee_admin($added_items, $order)
        {
        }
        /**
         * Removes pre-order fees from the order when the pre-order product is removed
         *
         * @param int $item_id
         *
         * @since 1.6.0
         */
        public function maybe_remove_pre_order_fee_admin($item_id)
        {
        }
        /**
         * Adjusts pre-order fees when product quantity changes
         *
         * @param bool $and_taxes
         * @param WC_Order $order
         */
        public function maybe_adjust_pre_order_fee_admin($and_taxes, $order)
        {
        }
        /**
         * Search for products and echo json.
         *
         * @param string $term (default: '') Term to search for.
         */
        public function search_pre_order_enabled_products($term = '')
        {
        }
        /**
         * Search pre-order enabled products for a term and return ids.
         *
         * Taken from WC_Product_Data_Store_CPT::search_products and modified to only search for pre-order enabled products
         *
         * @param  string     $term Search term.
         * @return array of ids
         */
        public function search_pre_order_enabled_product_ids($term)
        {
        }
        /**
         * Check if the terms are suitable for searching.
         *
         * Derived from WC_Product_Data_Store_CPT::get_valid_search_terms
         */
        protected function get_valid_search_terms($terms)
        {
        }
        /**
         * Retrieve stopwords used when parsing search terms.
         *
         * Derived from WC_Product_Data_Store_CPT::get_search_stopwords
         */
        protected function get_search_stopwords()
        {
        }
    }
    /**
     * Pre-Orders Admin Orders class.
     */
    class WC_Pre_Orders_Admin_Orders
    {
        /**
         * Initialize the admin order actions.
         */
        public function __construct()
        {
        }
        /**
         * Add pre-order emails to the list of order emails that can be resent, based on the pre-order status.
         *
         * @param  array $available_emails Simple array of WC_Email class IDs that can be resent.
         *
         * @return array
         */
        public function maybe_allow_resend_of_pre_order_emails($available_emails)
        {
        }
        /**
         * Marks the order as being a pre order if it contains pre order products in
         * case an order gets added manually from the administration panel.
         *
         * @param int $order_id ID of the newly saved order.
         *
         * @since 1.4.10
         * @version 1.5.3
         */
        public function check_manual_order_for_pre_order_products($order_id)
        {
        }
        /**
         * Marks the order as being a pre order if it contains pre order products in
         * case an order gets added manually from the administration panel. (for HPOS only)
         *
         * @param int $order_id ID of the newly saved order.
         *
         * @since 1.9.0
         */
        public function hpos_check_manual_order_for_pre_order_products($order_id)
        {
        }
        /**
         * Set Manual order as pre-order if it contains pre-order products.
         *
         * @param int $order_id ID of the newly saved order.
         *
         * @since 1.9.0
         */
        public function maybe_set_pre_order_for_pre_order_products($order_id)
        {
        }
        /**
         * Adds Pre-Order Only and Non Pre-Order to the WooCommerce Subscriptions Order Subtype select
         * Or create a new select if WooCommerce Subscriptions is not active
         * @since 1.6.0
         */
        public function add_order_page_filters()
        {
        }
        /**
         * Add an admin dropdown for order types to Woocommerce -> Orders screen
         *
         * @param string $order_type The type of order.
         *
         * @since 1.6.0
         */
        public function restrict_manage_pre_order($order_type = '')
        {
        }
        /**
         * Includes the Non Pre-Orders and Pre-Orders Only Filter to the WooCommerce Subscriptions Order Subtype Select
         * @since 1.6.0
         * @param $order_types
         * @return array
         */
        public function add_pre_order_filter($order_types)
        {
        }
        /**
         * Add request filter for order types to Woocommerce -> Orders screen
         *
         * Orders that have _wc_pre_orders_is_pre_order meta are considered a pre order
         * Orders that DO NOT have _wc_pre_orders_is_pre_order meta are NOT considered a pre order
         *
         * @since 1.6.0
         * @param $vars array wp_query args
         * @return array wp_query args
         */
        public function orders_by_type_query($vars)
        {
        }
    }
    /**
     * Pre-Orders Admin Pre Orders class.
     */
    class WC_Pre_Orders_Admin_Pre_Orders
    {
        /**
         * The pre-orders list table object.
         *
         * @var WC_Pre_Orders_List_Table
         */
        private $pre_orders_list_table;
        /**
         * Mensage transient prefix.
         *
         * @var string
         */
        private $message_transient_prefix = '_wc_pre_orders_messages_';
        /**
         * Initialize the admin settings actions.
         */
        public function __construct()
        {
        }
        /**
         * Modify query string parameters to be removed on Pre-order admin pages.
         *
         * Modifies the query string parameters to be removed via JavaScript when setting the canonical
         * admin URL for the admin page.
         *
         * The success and product ID query string parameters are removed to reduce the chance of
         * a user bookmarking the page with a success message or product ID in the URL.
         *
         * @param string[] $args Query string parameter that can be removed.
         * @return string[] Modified query string parameters.
         */
        public function remove_query_args($args)
        {
        }
        /**
         * Get pre-orders tabs.
         *
         * @return array
         */
        protected function get_tabs()
        {
        }
        /**
         * Add 'Pre-Orders' sub-menu link under 'WooCommerce' top level menu.
         */
        public function add_menu_link()
        {
        }
        /**
         * Show Pre-Orders Manage/Actions page content.
         */
        public function show_sub_menu_page()
        {
        }
        /**
         * Add the Pre-Orders list table Screen Options.
         */
        public function add_pre_orders_list_options()
        {
        }
        /**
         * Processes the cancelling of individual pre-order.
         *
         * @since 1.4.6
         * @version 1.4.7
         * @return bool
         */
        public function process_cancel_pre_order_action()
        {
        }
        /**
         * Process the actions from the 'Actions' tab.
         */
        public function process_actions_tab()
        {
        }
        /**
         * Process the actions from the 'Manage' tab.
         */
        public function process_manage_tab()
        {
        }
        /**
         * Get the current action selected from the bulk actions dropdown, verifying
         * that it's a valid action to perform.
         *
         * @see WP_List_Table::current_action()
         *
         * @return string|bool The action name or False if no action was selected.
         */
        public function current_action()
        {
        }
        /**
         * Dispatch actions from Manage tab and Actions tab.
         *
         * @since 1.0
         */
        public function process_actions()
        {
        }
        /**
         * Gets the bulk actions available for pre-orders: complete, cancel or message.
         *
         * @see WP_List_Table::get_bulk_actions()
         *
         * @return array associative array of action_slug => action_title.
         */
        public function get_bulk_actions()
        {
        }
        /**
         * Gets the current customer message which is used for bulk actions.
         *
         * @return string the current customer message.
         */
        public function get_current_customer_message()
        {
        }
        /**
         * Loads the pre-orders list table so the columns can be hidden/shown from
         * the page Screen Options dropdown (this must be done prior to Screen Options
         * being rendered).
         */
        public function load_pre_orders_list_table()
        {
        }
        /**
         * Gets the pre-orders list table object.
         *
         * @return WC_Pre_Orders_List_Table the pre-orders list table object
         */
        private function get_pre_orders_list_table()
        {
        }
        /**
         * Show the Pre-Orders > Actions tab content.
         */
        private function show_actions_tab()
        {
        }
        /**
         * Show the Pre-Orders > Manage tab content.
         */
        private function show_manage_tab()
        {
        }
        /**
         * Get the fields to display for the selected action, in the format required by woocommerce_admin_fields().
         *
         * @param  string $section The current section to get fields for.
         *
         * @return array
         */
        private function get_action_fields($section)
        {
        }
        /**
         * Generate a submit button, called via a do_action() inside woocommerce_admin_fields() for non-default field types.
         *
         * @param array $field The field info.
         */
        public function generate_submit_button($field)
        {
        }
        /**
         * Save our list option.
         *
         * @param  string $status unknown.
         * @param  string $option the option name.
         * @param  string $value the option value.
         *
         * @return string
         */
        public function set_pre_orders_list_option($status, $option, $value)
        {
        }
        /**
         * Redirect with message notice.
         *
         * @since 1.4.7
         *
         * @param string $message Message to display
         */
        protected function _redirect_with_notice($message)
        {
        }
    }
    /**
     * Pre-Orders Admin Products class.
     */
    class WC_Pre_Orders_Admin_Products
    {
        /**
         * Initialize the admin products actions.
         */
        public function __construct()
        {
        }
        /**
         * Add 'Pre-Orders' tab to product writepanel.
         */
        public function add_product_tab()
        {
        }
        /**
         * Add 'Pre-Orders' tab to product write panel.
         *
         * @since 2.0.2 Hide pre-order options for unsupported product types.
         *
         * @param array $tabs Product tabs.
         *
         * @return array Product tabs.
         */
        public static function product_data_tab($tabs)
        {
        }
        /**
         * Add pre-orders options to product writepanel.
         */
        public function add_product_tab_options()
        {
        }
        /**
         * Save pre-order options.
         *
         * @param int $post_id The ID of the product being saved.
         */
        public function save_product_tab_options($post_id)
        {
        }
        /**
         * Save the availability date/time.
         *
         * The date/time a pre-order is released is saved as a unix timestamp adjusted for the site's timezone. For example,
         * when an admin sets a pre-order to be released on 2013-06-25 12pm EST (UTC-4), it is saved as a timestamp equivalent
         * to 2013-12-25 4pm UTC. This makes the pre-order release check much easier, as it's a simple timestamp comparison,
         * because the release datetime and the current time are both in UTC.
         *
         * @param int    $post_id The ID of the product being saved.
         * @param string $value   The value of the availability date/time.
         * @return int|false The availability date/time as a unix timestamp. False if the date/time was in the past or could not be saved.
         */
        public static function save_availability_date_time($post_id, $value)
        {
        }
    }
    /**
     * Pre-Orders Admin Settings class.
     */
    class WC_Pre_Orders_Admin_Settings
    {
        /**
         * Settings page tab ID
         *
         * @var string
         */
        private $settings_tab_id = 'pre_orders';
        /**
         * Initialize the admin settings actions.
         */
        public function __construct()
        {
        }
        /**
         * Add 'Pre-Orders' tab to WooCommerce Settings tabs
         *
         * @param  array $settings_tabs Tabs array sans 'Pre-Orders' tab.
         *
         * @return array $settings_tabs Now with 100% more 'Pre-Orders' tab!
         */
        public function add_settings_tab($settings_tabs)
        {
        }
        /**
         * Show the 'Pre-Orders' settings page.
         */
        public function show_settings()
        {
        }
        /**
         * Save the 'Pre-Orders' settings page.
         */
        public function save_settings()
        {
        }
        /**
         * Returns settings array for use by output/save functions.
         *
         * @return array Settings.
         */
        public function get_settings()
        {
        }
    }
    /**
     * Pre-Orders Admin class.
     */
    class WC_Pre_Orders_Admin
    {
        /**
         * Setup admin class.
         */
        public function __construct()
        {
        }
        /**
         * Includes.
         */
        protected function includes()
        {
        }
        /**
         * Set installed option and default settings / terms.
         */
        public function maybe_install()
        {
        }
        /**
         * Add Pre-orders screen to woocommerce_screen_ids.
         *
         * @param  array $ids
         *
         * @return array
         */
        public function screen_ids($ids)
        {
        }
        /**
         * Load admin styles & scripts only on needed pages.
         *
         * @param string $hook_suffix the menu/page identifier
         */
        public function load_styles_scripts($hook_suffix)
        {
        }
        /**
         * Get payment timing messages for JavaScript.
         *
         * @return array
         */
        public function get_payment_timing_messages()
        {
        }
    }
}
namespace WooCommerce\Pre_Orders\Blocks {
    /**
     * Pre-orders Gateway method integration.
    */
    final class WC_Pre_Orders_Blocks_Gateway extends \Automattic\WooCommerce\Blocks\Payments\Integrations\AbstractPaymentMethodType
    {
        /**
         * Payment method name defined by payment methods extending this class.
         *
         * @var string
         */
        protected $name = 'pre_orders_pay_later';
        /**
         * An instance of the Asset Api.
         *
         * @var \Automattic\WooCommerce\Blocks\Assets\Api
         */
        private $asset_api;
        /**
         * Is the payment method enabled.
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
         * Get the options for the pre-orders pay later gateway.
         *
         * If an option name is provided, it will return the value of that option.
         * If no option name is provided, it will return all options as an array.
         *
         * @since 2.2.8
         *
         * @param string|null $option_name The name of the option to retrieve.
         * @return string|array The value of the option if $option_name is provided, or an array of all options if not.
         */
        public function get_option($option_name = null)
        {
        }
        /**
         * Get the title text for the payment method.
         *
         * @since 2.2.8
         *
         * @return string The title text.
         */
        public function get_title_text()
        {
        }
        /**
         * Get the description text for the payment method.
         *
         * @since 2.2.8
         *
         * @return string The description text.
         */
        public function get_description_text()
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
    }
    /**
     * This class is responsible for integrating a new payment method when using WooCommerce Blocks.
     */
    class WC_Pre_Orders_Blocks_Integration
    {
        public function __construct()
        {
        }
        /**
         * Add payment method block support.
         */
        public function add_woocommerce_block_support()
        {
        }
        /**
         * Register payment method.
         *
         * @return WC_Pre_Orders_Blocks_Gateway $instance pre-orders gateway instance.
         */
        protected function register_payment_methods()
        {
        }
        /**
         * Register the payment requirements for blocks.
         */
        public function blocks_loaded()
        {
        }
        /**
         * Check if is a pre-order and charged upon release.
         *
         * @return bool
         */
        public static function is_pre_order_and_charged_upon_release()
        {
        }
        /**
         * Adds pre_order availability payment requirement for carts that contain a product that requires it.
         *
         * @return array
         */
        public function add_pre_order_availability_payment_requirement()
        {
        }
        /**
         * Register payment method integration.
         *
         * @param \Automattic\WooCommerce\Blocks\Payments\PaymentMethodRegistry $payment_method_registry Payment method registry object.
         */
        public function register_payment_method_integrations(\Automattic\WooCommerce\Blocks\Payments\PaymentMethodRegistry $payment_method_registry)
        {
        }
        /**
         * Include class that represents the gateway.
         */
        public function includes()
        {
        }
        /**
         * Enqueue cart/checkout integration for block cart and checkout.
         *
         * @since 2.3.0
         */
        public function enqueue_checkout_integration()
        {
        }
    }
    class WC_Pre_Orders_Extend_Store_API
    {
        /**
         * Plugin Identifier, unique to each plugin.
         *
         * @var string
         */
        const IDENTIFIER = 'preorders';
        /**
         * Bootstraps the class and hooks required data.
         *
         * @since 3.1.0
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
         * Register pre-order product type data into cart/items endpoint.
         *
         * @param array $cart_item Current cart item data.
         *
         * @return array $item_data Registered data or empty array if condition is not satisfied.
         */
        public static function extend_cart_item_data($cart_item)
        {
        }
        /**
         * Register pre-order product type schema into cart/items endpoint.
         *
         * @return array Registered schema.
         */
        public static function extend_cart_item_schema()
        {
        }
    }
}
namespace {
    /**
     * Pre-Orders Cart class
     *
     * Customizes the cart
     *
     * @since 1.0
     */
    class WC_Pre_Orders_Cart
    {
        /**
         * Add hooks / filters
         *
         * @since 1.0
         * @return WC_Pre_Orders_Cart
         */
        public function __construct()
        {
        }
        /**
         * Clears the pre-order meta data stored in an order when an item is removed from the cart.
         *
         * This is to ensure that adding a non-preorder item to the cart after the
         * pre-order is removed doesn't cause the order to be treated as a pre-order.
         *
         * @see https://github.com/woocommerce/woocommerce-pre-orders/issues/434
         */
        public function clear_order_meta_when_item_removed_from_cart()
        {
        }
        /**
         * Get the order total formatted to show when the order will be charged
         *
         * @since 1.0
         * @param string $total price string ( note: this is already formatted by woocommerce_price() )
         * @return string the formatted order total price string
         */
        public function get_formatted_cart_total($total)
        {
        }
        /**
         * Get item data to display on cart/checkout pages that shows the availability date of the pre-order
         *
         * @since 1.0
         * @param array $item_data any existing item data
         * @param array $cart_item the cart item
         * @return array
         */
        public function get_item_data($item_data, $cart_item)
        {
        }
        /**
         * Redirect to the cart
         */
        public function redirect_to_cart()
        {
        }
        /**
         * When a pre-order is added to the cart, remove any other products
         *
         * @since 1.0
         * @param bool $valid
         * @param $product_id
         * @return bool
         */
        public function validate_cart($valid, $product_id)
        {
        }
        /**
         * Add any applicable pre-order fees when calculating totals
         *
         * @since 1.0
         */
        public function maybe_add_pre_order_fee()
        {
        }
        /**
         * Generates fee
         *
         * @since 1.6.0
         * @param WC_Product|int $product
         * @return array|null
         */
        public function generate_fee($product)
        {
        }
        /**
         * Checks if the current cart contains a product with pre-orders enabled
         *
         * @since 1.0
         * @return bool true if the cart contains a pre-order, false otherwise
         */
        public static function cart_contains_pre_order()
        {
        }
        /**
         * Checks if the current cart contains a pre-order fee
         *
         * @since 1.0
         * @return bool true if the cart contains a pre-order fee, false otherwise
         */
        public static function cart_contains_pre_order_fee()
        {
        }
        /**
         * Since a cart may only contain a single pre-ordered product, this returns the pre-ordered product object or
         * null if the cart does not contain a pre-order
         *
         * @since 1.0
         * @return object|null the pre-ordered product object, or null if the cart does not contain a pre-order
         */
        public static function get_pre_order_product()
        {
        }
    }
    /**
     * Pre-Orders Checkout class
     *
     * Override some functionality of the WC checkout process in order to support pre-orders
     *
     * @since 1.0
     */
    class WC_Pre_Orders_Checkout
    {
        /**
         * Add hooks / filters
         *
         * @since 1.0.0
         * @version 1.5.4
         * @return \WC_Pre_Orders_Checkout
         */
        public function __construct()
        {
        }
        /**
         * This only applies to orders charged upon release.
         *
         * It changes the native WooCommerce thank you for order received message,
         * including info about auto or manual payment and a release date, if one is set.
         *
         * @since 1.5.4
         * @version 1.5.4
         * @param string   $message WooCommerce native thank you order received message.
         * @param WC_Order $order WooCommerce order object.
         * @return string Updated message, with release date information, if applicable
         */
        public function add_release_date_message($message, $order): string
        {
        }
        /**
         * Check if is a pre-order and charged upon release
         *
         * @return bool
         */
        protected function is_pre_order_and_charged_upon_release()
        {
        }
        /**
         * Check if is a pre-order and charged up front.
         *
         * @return bool
         */
        protected function is_pre_order_and_charged_up_front()
        {
        }
        /**
         * Conditionally remove any gateways that don't support pre-orders on the checkout page.
         *
         * When the pre-order is charged upon release, this is done because payment info is not
         * required in this case so displaying gateways/payment fields is not needed. Instead the
         * pay later gateway is displayed.
         *
         * When the pre-order is charged upfront, the cash on delivery gateway is removed as it
         * is contradicts the upfront payment model.
         *
         * @since 1.0
         *
         * @param array $available_gateways
         *
         * @return array
         */
        public function maybe_remove_unsupported_gateways($available_gateways)
        {
        }
        /**
         * Modifies the 'Place Order' button text on the checkout page
         *
         * @since 1.0
         * @param string $default_text default place order button text
         * @return string
         */
        public function modify_place_order_button_text($default_text)
        {
        }
        /**
         * Adds order meta needed for pre-order functionality,
         * when coming from an order using WooCommerce Blocks.
         *
         * @param WC_Order $order
         */
        public function add_order_meta_by_order($order)
        {
        }
        /**
         * Add order meta needed for pre-order functionality
         *
         * @since 1.0
         * @param int $order_id
         */
        public function add_order_meta($order_id)
        {
        }
        /**
         * Update payment complete order status to pre-ordered for orders that are charged upfront. This handles gateways
         * that call payment_complete() and prevents an awkward status change from pending->processing->pre-ordered, instead
         * just showing a nice, clean pending->pre-ordered.
         *
         * @since 1.0.0
         * @version 1.5.1
         * @param string $new_status the status to change the order to.
         * @param int $order_id the post ID of the order.
         * @return string
         */
        public function update_payment_complete_order_status($new_status, $order_id)
        {
        }
        /**
         * updates order status to pre-ordered for orders that are charged upfront. This handles gateways that don't call
         * payment_complete(). Unfortunately status changes show like pending->processing/completed->pre-ordered
         *
         * @since 2.0.4 Check whether product can be pre-ordered when processing failed order.
         * @since 1.9.1 Improve support for "Failed" orders.
         * @since 1.9.0 Check whether the order item was pre-ordered to process failed pre-ordered order.
         * @since 1.0
         * @param int $order_id the post ID of the order
         * @return string
         */
        public function update_manual_payment_complete_order_status($order_id)
        {
        }
        /**
         * Removes the "_wc_pre_orders_is_pre_order" flag when charged ufront and the payment fails.
         *
         * This prevents the pre-order from showing up under the Pre-Orders
         * table when the payment must be done upfront but fails.
         *
         * @since 1.5.31
         * @param int $order_id the post ID of the order.
         */
        public function remove_is_pre_order_on_failure($order_id)
        {
        }
    }
    /**
     * Pre-Orders Cron class
     *
     * Adds custom wp-cron schedule and handles pre-order completion checks
     *
     * @since 1.0
     */
    class WC_Pre_Orders_Cron
    {
        /**
         * Adds hooks and filters
         *
         * @since 1.0
         * @return \WC_Pre_Orders_Cron
         */
        public function __construct()
        {
        }
        /**
         * Adds custom wp-cron schedule named 'wc_pre_orders_completion_check' with custom interval
         *
         * @since 1.0
         * @since 1.5.6 Default frequency reduced from every five minutes to once per hour.
         * @param array $schedules existing WP recurring schedules
         * @return array
         */
        public function add_custom_schedules($schedules)
        {
        }
        /**
         * Add scheduled events to wp-cron if not already added
         *
         * @since 1.0
         * @return array
         */
        public function add_scheduled_events()
        {
        }
    }
    /**
     * Pre-Orders List Table class
     *
     * Extends WP_List_Table to display pre-orders and related information
     *
     * @since 1.0
     * @extends \WP_List_Table
     */
    class WC_Pre_Orders_List_Table extends \WP_List_Table
    {
        private $message_transient_prefix = '_wc_pre_orders_messages_';
        /**
         * Set of available views can include (All, Active, Completed, Cancelled, Trash)
         *
         * @var array
         */
        private $views;
        /**
         * Setup list table
         *
         * @see WP_List_Table::__construct()
         * @since 1.0
         * @return \WC_Pre_Orders_List_Table
         */
        public function __construct()
        {
        }
        /**
         * Gets the bulk actions available for pre-orders: complete, cancel
         * or message.
         *
         * @see WP_List_Table::get_bulk_actions()
         * @since 1.0
         * @return array associative array of action_slug => action_title
         */
        public function get_bulk_actions()
        {
        }
        /**
         * Get list of views available (one per available pre-order status) plus
         * default of 'all', with counts for each
         *
         * @see WP_List_Table::get_views()
         * @since 1.0
         * @return array
         */
        public function get_views()
        {
        }
        /**
         * Gest the currently selected pre-order status (the current view) if any.
         * Defaults to 'all'.  Status is verified to exist in $available_status if
         * provided
         *
         * @since 1.0
         * @param array $available_status optional array of status => count used for validation
         * @return string the current pre-order status
         */
        public function get_current_pre_order_status($available_status = \null)
        {
        }
        /**
         * Returns the column slugs and titles
         *
         * @see WP_List_Table::get_columns()
         * @since 1.0
         * @return array of column slug => title
         */
        public function get_columns()
        {
        }
        /**
         * Returns the sortable columns.  We make order_date and order sortable
         * because they're available right in the posts table, and they make sense
         * to order over.
         *
         * @see WP_List_Table::get_sortable_columns()
         * @since 1.0
         * @return array of sortable column slug => array( 'orderby', boolean )
         *         where true indicates the initial sort is descending
         */
        public function get_sortable_columns()
        {
        }
        /**
         * Get content for the special checkbox column
         *
         * @see WP_List_Table::single_row_columns()
         * @since 1.0
         * @param WC_Order $order one row (item) in the table
         * @return string the checkbox column content
         */
        public function column_cb($order)
        {
        }
        /**
         * Get column content, this is called once per column, per row item ($order)
         * returns the content to be rendered within that cell.
         *
         * @see WP_List_Table::single_row_columns()
         * @since 1.0
         * @param WC_Order $order one row (item) in the table
         * @param string $column_name the column slug
         * @return string the column content
         */
        public function column_default($order, $column_name)
        {
        }
        /**
         * Output any messages from the bulk action handling
         *
         * @since 1.0
         */
        public function render_messages()
        {
        }
        /**
         * Gets the current orderby, defaulting to 'date' if none is selected
         */
        private function get_current_orderby()
        {
        }
        /**
         * Gets the current orderby, defaulting to 'DESC' if none is selected
         */
        private function get_current_order()
        {
        }
        /**
         * Prepare the list of pre-order items for display
         *
         * @see WP_List_Table::prepare_items()
         * @since 1.0
         */
        public function prepare_items()
        {
        }
        /**
         * Adds in any query arguments based on the current filters
         *
         * @since 1.0
         * @param array $args associative array of WP_Query arguments used to query and populate the list table
         * @return array associative array of WP_Query arguments used to query and populate the list table
         */
        private function add_filter_args($args)
        {
        }
        /**
         * Adds in any query arguments based on the current view
         *
         * @since 1.0
         * @param array $args associative array of WP_Query arguments used to query and populate the list table
         * @return array associative array of WP_Query arguments used to query and populate the list table
         */
        private function add_view_args($args)
        {
        }
        /**
         * Adds in any query arguments based on the search term
         *
         * @see woocommerce_shop_order_search_custom_fields()
         * @since 1.0
         * @param array $args associative array of WP_Query arguments used to query and populate the list table
         * @return array associative array of WP_Query arguments used to query and populate the list table
         */
        private function add_search_args($args)
        {
        }
        /**
         * The text to display when there are no pre-orders
         *
         * @see WP_List_Table::no_items()
         * @since 1.0
         */
        public function no_items()
        {
        }
        /**
         * Extra controls to be displayed between bulk actions and pagination, which
         * includes our Filters: Customers, Products, Availability Dates
         *
         * @see WP_List_Table::extra_tablenav();
         * @since 1.0
         * @param string $which the placement, one of 'top' or 'bottom'
         */
        public function extra_tablenav($which)
        {
        }
        /**
         * Display a monthly dropdown for filtering items by availability date
         *
         * @since 1.0
         */
        private function render_availability_dates_dropdown()
        {
        }
    }
    /**
     * Pre-Orders Manager class
     *
     * Provides an API for managing pre-orders and their associated actions
     *
     * @since 1.0
     */
    class WC_Pre_Orders_Manager
    {
        /**
         * The Scheduled action hook used to process a batch of pre-order.
         *
         * @var string
         */
        private static $scheduled_batch_processing_hook = 'wc_pre_orders_process_batch';
        /**
         * The scheduled action hook used to complete a pre-order.
         *
         * @var string
         */
        private static $scheduled_pre_order_complete_hook = 'wc_pre_orders_complete_pre_order';
        /**
         * Adds hooks / filters
         *
         * @since 1.0
         * @return \WC_Pre_Orders_Manager
         */
        public function __construct()
        {
        }
        /**
         * Schedules individual background actions to process pre-order products passed their release date.
         *
         * @since 2.0.0
         */
        public function maybe_schedule_batch_processor()
        {
        }
        /**
         * Schedules a batch processor for a given batch of product IDs.
         *
         * @param int[]  $product_ids The product IDs to batch process pre-orders for.
         * @param string $product_ids The unique batch ID for this set of products.
         */
        private function schedule_batch_processor($product_ids, $batch_id)
        {
        }
        /**
         * Checks if there's already a scheduled batch processor action for a given set of products.
         *
         * @param int[]  $product_ids The product IDs to batch process pre-orders for.
         * @param string $product_ids The unique batch ID for this set of products.
         *
         * @return bool True if there's a scheduled action already, otherwise false.
         */
        private function has_scheduled_batch_processor($product_ids, $batch_id)
        {
        }
        /**
         * Schedules a background job to process a single pre-order.
         *
         * @param WC_Order $order The order the schedule a completion hook for.
         */
        private function schedule_pre_order_complete($order)
        {
        }
        /**
         * Finds pre-orders for a batch of given products and schedules a background job to process them.
         *
         * @since 2.0.0
         *
         * @param int[]  $product_ids The product IDs to schedule pre-order completion for.
         * @param string $product_ids The unique batch ID for this set of products.
         */
        public function schedule_actions_to_complete_pre_orders($product_ids, $batch_id)
        {
        }
        /**
         * Deletes a batch ID flag stored on orders handled by a batch processor.
         *
         * @param string $meta_key_flag The unique meta key used to flag orders as being handled by a batch processor.
         * @return int The number of orders updated.
         */
        private function release_orders_from_batch($meta_key_flag)
        {
        }
        /**
         * Prevent completed pre-orders from being cancelled - Any new pre-orders that have not been processed yet
         * (e.g. by checking out via PayPal but not completing purchase) should respect the default order cancel settings
         *
         * @since 1.0
         * @param bool $cancel_order whether to cancel the pending order or not
         * @param object $order the \WC_Order object
         * @return bool true if the order should be cancelled, false otherwise
         */
        public function maybe_prevent_pending_order_cancel($cancel_order, $order)
        {
        }
        /**
         * Prevent order stock reduction when WC_Order::payment_complete() is called for a pre-order charged upon release.
         * Because order stock for pre-orders charged upon release is reduced during initial checkout, this prevents stock from
         * being reduced twice.
         *
         * @since 1.0
         * @param bool $reduce_stock whether to reduce stock for the order or not
         * @param int $order_id the post ID of the order
         * @return bool true if the order stock should be reduced, false otherwise
         */
        public function maybe_prevent_payment_complete_order_stock_reduction($reduce_stock, $order_id)
        {
        }
        /**
         * Reduce the stock level for an order and record the stock reduction in data store
         *
         * @since 1.5.31
         * @param object $order the \WC_Order object
         */
        public static function reduce_stock_level($order)
        {
        }
        /**
         * Gets all pre-orders
         *
         * @since 1.0
         * @return array
         */
        public static function get_all_pre_orders()
        {
        }
        /**
         * Gets all pre-orders for a given product
         *
         * @since 1.0
         * @param object|int $product
         * @return array
         */
        public static function get_all_pre_orders_by_product($product)
        {
        }
        /**
         * Gets all pre-orders for the currently logged in user, or the user identified by $user_id
         *
         * @since 1.0
         * @since 2.2.9 Added $page_number and $query parameters.
         *
         * @param int            $user_id     Optional user id to return pre-orders for. Defaults to the currently logged in user.
         * @param int            $page_number Optional page number to return pre-orders for. Defaults to 1.
         * @param array|stdClass $query       Optional reference to a query object that will be populated with the query results. Passed by reference.
         * @return array of WC_Order objects
         */
        public static function get_users_pre_orders($user_id = \null, $page_number = 1, &$query = \null)
        {
        }
        /**
         * Returns true if the pre-order identified by $order/$item can be changed to
         * $new_status
         *
         * @since 1.0
         * @param string $new_status the new status
         * @param WC_Order $order the order object
         * @return boolean true if the status can be changed, false otherwise
         */
        public static function can_pre_order_be_changed_to($new_status, $order)
        {
        }
        /**
         * Checks whether the release payment state prevents a pre-order being completed again.
         *
         * Only applies to pre-orders charged upon release: those are the ones whose completion
         * charges a stored payment token.
         *
         * @since 2.3.8
         * @param object|int $order the order object, or order ID
         * @return bool true if the pre-order must not be completed again
         */
        protected static function release_payment_blocks_completion($order)
        {
        }
        /**
         * Checks whether the release payment may be charged for an order.
         *
         * Once a release payment has been recorded for an order, the release payment hook is not
         * fired for it again. A genuinely failed attempt is still retryable, because nothing
         * records a charge that never happened.
         *
         * This check is not atomic with firing the hook: a charge is only recorded once the gateway
         * confirms it, so two completions running at the same time can both pass it. Gateways
         * remain responsible for guarding their own charge on $order->is_paid() or an existing
         * transaction ID.
         *
         * @since 2.3.8
         * @param object|int $order the order object, or order ID
         * @return bool true if the release payment hook may be fired for this order
         */
        public static function can_charge_release_payment($order)
        {
        }
        /**
         * Records that a release payment was refused because the order has already been charged.
         *
         * @since 2.3.8
         * @param WC_Order $order the order object
         */
        protected static function log_blocked_release_payment($order)
        {
        }
        /**
         * Return a link for customers to change the status of their pre-order to $status
         *
         * @since 1.0
         * @param string $new_status the new status
         * @param WC_Order $order the order object
         * @return string
         */
        public static function get_users_change_status_link($new_status, $order)
        {
        }
        /**
         * Gets all products that are currently pre-order enabled
         *
         * @since 1.9.0 Return private and published pre-order products.
         * @since 1.0
         * @return array of WC_Product objects
         */
        public static function get_all_pre_order_enabled_products()
        {
        }
        /**
         * Checks if there are any pre-order enabled products
         *
         * @since 2.3.2
         *
         * @return bool true if there are any pre-order enabled products, false otherwise
         */
        public static function has_pre_order_enabled_products()
        {
        }
        /**
         * Sends a notification email (using the built-in 'Customer Note' email
         * template) to all customers associated with the supplied $orders with an active pre-order
         *
         * @since 1.0
         * @param int|WC_Order $order order object or identifier
         * @param string $message required message to include in notification email to customer
         */
        public static function email_pre_order_customer($order, $message)
        {
        }
        /**
         * Sends a notification email (using the built-in 'Customer Note' email
         * template) to all customers associated with the supplied $orders with an active pre-order
         *
         * @since 1.0
         * @param array $orders array of post ID or WC_Order objects
         * @param string $message required message to include in notification email to customer
         */
        public static function email_pre_order_customers($orders, $message)
        {
        }
        /**
         * Sends a notification email (using the built-in 'Customer Note' email template) to all customers who have pre-ordered
         * the given product
         *
         * @since 1.0
         * @param object|int $product the product to email all pre-ordered customers for
         * @param string $message required message to include in notification email to customer
         */
        public static function email_all_pre_order_customers($product, $message)
        {
        }
        /**
         * Change the release date for  pre-orders by updating the availability date for the pre-ordered product to a new date in the future
         *
         * @since 1.0
         * @param object|int $product the product to change the release date for all pre-orders for
         * @param string $new_availability_date the new availability date
         * @param string $message an optional message to include in communications to the customer
         */
        public static function change_release_date_for_all_pre_orders($product, $new_availability_date, $message = '')
        {
        }
        /**
         * Checks to see if order is zero cost.
         *
         * @version 1.5.1
         * @since 1.5.1
         * @param object $order
         * @return bool
         */
        public static function is_zero_cost_order($order = \null)
        {
        }
        /**
         * Checks to see if order is initially using pay later gateway.
         * This is needed because payment method will change later in the process
         * when customer goes to pay when product is available. But we need to
         * preserve what the order was originally used so we can know if we need
         * to reduce stock or not based on that.
         *
         * @version 1.5.1
         * @since 1.5.1
         * @param object $order
         * @return bool
         */
        public static function is_order_pay_later($order_id = \null)
        {
        }
        /**
         * Completes the pre-order by updating the pre-order status to 'completed' and following this process for handling payment :
         *
         * - for a pre-order charged upon release AND containing a payment token, an action is fired for the supported gateway
         *   to hook into an charge the total payment amount. Note that the supported gateway will then call WC_Order::payment_complete()
         *   upon successful charge
         *
         * - for a pre-order charged upon release with no payment token, the order status is changed to 'pending' and an email
         *   is sent containing a link for the customer to come back to and pay for their order
         *
         * - for a pre-order charged upfront, the order status is changed to 'completed' or 'processing' based on the same rules
         *   from WC_Order::payment_complete() -- this is because payment_complete() has already occurred for these order
         *
         * @since 1.0
         * @param int|WC_Order $order post IDs or order object to complete the pre-order for
         * @param string $message optional message to include in 'pre-order completed' email to customer
         */
        public static function complete_pre_order($order, $message = '')
        {
        }
        /**
         * Completes the provided pre-orders
         *
         * @since 1.0
         * @param array $orders an array of orders containing a pre-order to complete
         * @param string $message optional message to include in 'pre-order completed' email to customer
         */
        public static function complete_pre_orders($orders, $message = '')
        {
        }
        /**
         * Helper function to complete all the pre-orders for a given product
         *
         * @since 1.0
         * @param object|int $product the product to complete all pre-orders for
         * @param string $message an optional message to include in communications to the customer
         */
        public static function complete_all_pre_orders($product, $message)
        {
        }
        /**
         * Cancel a pre-orders by changing its order status / pre-order status to 'cancelled'
         *
         * @since 1.0
         * @param int|WC_Order $order post IDs or order object to cancel the pre-order for
         * @param string $message an optional message to include in communications to the customer
         */
        public static function cancel_pre_order($order, $message = '')
        {
        }
        /**
         * Cancels pre-orders by changing their order status / pre-order status to 'cancelled'
         *
         * @since 1.0
         * @param array $orders array of post IDs or order objects to cancel pre-orders for
         * @param string $message an optional message to include in communications to the customer
         */
        public static function cancel_pre_orders($orders, $message = '')
        {
        }
        /**
         * Helper function to cancel all pre-orders for a given product
         *
         * @see WC_Pre_Orders_Manager::cancel_pre_orders()
         *
         * @since 1.0
         * @param object|int $product the product to complete all pre-orders for
         * @param string $message an optional message to include in communications to the customer
         */
        public static function cancel_all_pre_orders($product, $message)
        {
        }
        /**
         * Helper function to return a formatted pre-order order total, e.g. '$99 charged on Dec 1, 2014'
         *
         * @since 1.0
         * @param string $total formatted order total to modify
         * @param object|int $product the product that the pre-order contains
         * @return string the new formatted order total
         */
        public static function get_formatted_pre_order_total($total, $product)
        {
        }
        /**
         * Helper method to disable pre-orders for a product, called after the availability date for a pre-order has been reached
         * and pre-orders are completed
         *
         * @since 1.0
         * @param array|int $product_ids product IDs to disable pre-orders for
         */
        private function disable_pre_orders_for_products($product_ids)
        {
        }
        /**
         * Checks for action to cancel an existing pre order and if needed it gets executed
         *
         * @since 1.0.3
         */
        public function check_cancel_pre_order()
        {
        }
        /**
         * Generates a unique key used to recognise if an order has been handled by a batch processeor.
         *
         * @param int[] $product_ids An array of product IDs to generate the hash for.
         * @return string A hash of the product IDs.
         */
        private static function generate_batch_id($product_ids)
        {
        }
        /**
         * When the setting is enabled makes out of stock products into pre-order products
         *
         * @param int $product_id
         * @param string $stock_status
         * @param WC_Product $product
         */
        public function maybe_activate_preorder($product_id, $stock_status, $product)
        {
        }
    }
    /**
     * My Pre-Orders class
     *
     * @since 1.4.4
     */
    class WC_Pre_Orders_My_Pre_Orders
    {
        /**
         * Adds needed hooks / filters
         */
        public function __construct()
        {
        }
        /**
         * Add cancel action to pre-orders within my account.
         *
         * Runs on the `woocommerce_my_account_my_orders_actions` filter.
         *
         * Modifies the order actions as displayed on the order page within my account to display
         * a cancel button for pre-orders that can be cancelled.
         *
         * @since 2.2.3
         *
         * @param array     $actions The order actions.
         * @param \WC_Order $order   The order object.
         * @return array The modified order actions.
         */
        public function add_pre_order_actions($actions, $order)
        {
        }
        /**
         * Register new endpoint to use inside My Account page.
         *
         * @since 1.4.7
         *
         * @see https://developer.wordpress.org/reference/functions/add_rewrite_endpoint/
         */
        public function add_endpoint()
        {
        }
        /**
         * Add pre-orders query var.
         *
         * @since 1.4.7
         *
         * @param array $vars Query vars
         *
         * @return array altered query vars
         */
        public function add_query_vars($vars)
        {
        }
        /**
         * Add pre-orders query var.
         *
         * @since 2.1.4
         *
         * @param array $vars Query vars.
         *
         * @return array altered query vars
         */
        public function add_pre_orders_woocommerce_query_vars($vars)
        {
        }
        /**
         * Change title for pre-orders endpoint.
         *
         * @since 1.4.7
         *
         * @param string $title Page title
         *
         * @return string Page title
         */
        public function endpoint_title($title)
        {
        }
        /**
         * Update the title for the pre-orders endpoint.
         *
         * @since 2.1.4
         *
         * @param string $title Title.
         *
         * @return string Altered title
         */
        public function change_endpoint_title($title)
        {
        }
        /**
         * Checks if current page is pre-orders endpoint.
         *
         * @since 1.4.7
         *
         * @return bool Returns true if current page is pre-orders endpoint
         */
        public function is_pre_orders_endpoint()
        {
        }
        /**
         * Insert Pre-Ordres menu into My Account menus.
         *
         * @since 1.4.7
         *
         * @param array $items Menu items
         *
         * @return array Menu items
         */
        public function menu_items($items)
        {
        }
        /**
         * Helper to add new items into an array after a selected item.
         *
         * @since 1.4.7
         *
         * @param array  $items     Menu items
         * @param array  $new_items New menu items
         * @param string $after     Key in items
         *
         * @return array Menu items
         */
        protected function _insert_new_items_after($items, $new_items, $after)
        {
        }
        /**
         * Output "My Pre-Orders" table in the user's My Account page
         */
        public function my_pre_orders()
        {
        }
    }
    /**
     * Pre-Orders Order class
     *
     * Mirrors the  WC_Order class to provide pre-orders specific functionality
     *
     * @since 1.0
     */
    class WC_Pre_Orders_Order
    {
        /**
         * Order meta key recording that the release payment has been taken.
         *
         * Holds the gateway transaction ID, or '1' when the gateway supplied none. Its presence is
         * the plugin's durable record that money has moved for this order.
         *
         * @since 2.3.8
         * @var string
         */
        const RELEASE_PAYMENT_CHARGED_META = '_wc_pre_orders_release_payment_charged';
        /**
         * Order meta key recording when the release payment was taken (GMT, Y-m-d H:i:s).
         *
         * @since 2.3.8
         * @var string
         */
        const RELEASE_CHARGED_AT_META = '_wc_pre_orders_release_charged_at';
        /**
         * Pre-order statuses that may be written by self::auto_update_pre_order_status().
         *
         * Used to validate the return value of the
         * 'wc_pre_orders_auto_update_pre_order_status' filter. An empty string means
         * "leave the pre-order status alone".
         *
         * @since 2.3.8
         * @var array
         */
        const AUTO_UPDATE_STATUSES = array('', 'active', 'completed', 'cancelled');
        /**
         * Add hooks / filters
         *
         * @since 1.0
         * @return \WC_Pre_Orders_Order
         */
        public function __construct()
        {
        }
        /**
         * Add support for coupons and pre-ordered status
         */
        public function register_order_status_change_coupons_support()
        {
        }
        /**
         * New order status for WooCommerce 2.2 or later
         */
        public function register_order_status()
        {
        }
        /**
         * Set wc-pre-ordered in WooCommerce order statuses.
         *
         * @param  array $order_statuses
         * @return array
         */
        public function order_statuses($order_statuses)
        {
        }
        /**
         * Add "pre-ordered" order status to WC Reports for tracking order revenue.
         *
         * @param array|bool $order_statuses
         * @return array
         */
        public function add_pre_orders_to_report_statuses($order_statuses)
        {
        }
        /**
         * Get the order total formatted to show when the order will be (or was) charged
         *
         * @since 1.0
         * @param string $formatted_total price string ( note: this is already formatted by woocommerce_price() )
         * @param object $order the WC_Order object
         * @return string the formatted order total price string
         */
        public function get_formatted_order_total($formatted_total, $order)
        {
        }
        /**
         * Checks if an order contains a pre-order
         *
         * @since 1.0
         * @param object|int $order Preferably the order object, or order ID if
         *                          object is inconvenient to provide.
         * @return bool true if the order contains a pre-order, false otherwise
         */
        public static function order_contains_pre_order($order)
        {
        }
        /**
         * Checks if an order will be charged upon release
         *
         * @since 1.0
         * @param object|int $order preferably the order object, or order ID if object is inconvenient to provide
         * @return bool true if the order will be charged upon , false otherwise
         */
        public static function order_will_be_charged_upon_release($order)
        {
        }
        /**
         * Checks if an order requires payment tokenization. For a pre-order charged upon release, a customer has the option
         * to use the 'pay later' gateway, and then return and pay for the pre-order with a supported gateway. Because the
         * pre-order is still marked as being charged upon release, this helps the supported gateway know how to process the
         * payment.
         *
         * @since 1.0
         * @param object|int $order preferably the order object, or order ID if object is inconvenient to provide
         * @return bool true if the order requires payment tokenization , false otherwise
         */
        public static function order_requires_payment_tokenization($order)
        {
        }
        /**
         * Checks if an order has an existing payment token that can be used by the original gateway to charge the pre-order
         * upon release
         *
         * @since 1.0
         * @param object|int $order preferably the order object, or order ID if object is inconvenient to provide
         * @return bool true if the order contains a payment token , false otherwise
         */
        public static function order_has_payment_token($order)
        {
        }
        /**
         * Checks whether the release payment for an order has already been taken.
         *
         * This is the plugin's durable record that money has changed hands, and it is what stops the
         * release payment hook firing again for an order that has already been charged. It is
         * deliberately not derived from the pre-order status, which any order status change can
         * rewrite.
         *
         * Orders charged before this meta existed are recognised by inference: an order charged upon
         * release can only be paid if its release payment already succeeded, because checkout marks
         * these orders as pre-ordered rather than calling payment_complete(). This means no database
         * migration is required.
         *
         * @since 2.3.8
         * @param object|int $order preferably the order object, or order ID if object is inconvenient to provide
         * @return bool true if the release payment has already been taken
         */
        public static function release_payment_was_charged($order)
        {
        }
        /**
         * Records that the release payment for a pre-order has been taken.
         *
         * Hooked to 'woocommerce_payment_complete', the documented way a supported gateway reports a
         * successful release charge. That also covers a gateway capturing asynchronously and the
         * customer paying a 'pay later' pre-order on the order pay page.
         *
         * Always works on a freshly loaded order object: the order object held by
         * WC_Pre_Orders_Manager::complete_pre_order() spans the gateway hook, and the gateway loads
         * and saves its own instance.
         *
         * @since 2.3.8
         * @param int    $order_id       the order ID
         * @param string $transaction_id the gateway transaction ID
         */
        public function record_release_payment_charged($order_id, $transaction_id = '')
        {
        }
        /**
         * Changes the status for an unpaid, but payment-tokenized order to pre-ordered and adds meta to indicate the order
         * has a payment token. Should be used by supported gateways when processing a pre-order charged upon release, instead of calling
         * $order->payment_complete(), this will be used. Note that if the order used pay later, this does not apply.
         *
         * @since 1.0
         * @param object|int $order preferably the order object, or order ID if object is inconvenient to provide
         */
        public static function mark_order_as_pre_ordered($order)
        {
        }
        /**
         * Since an order may only contain a single pre-ordered item, this returns
         * the pre-ordered item array.  This method assumes that $order is a pre-order
         *
         * @since    1.0
         * @version  1.5.3
         * @param    object|int $order the order object or order ID
         * @return   object|bool the pre-ordered order item array
         */
        public static function get_pre_order_item($order)
        {
        }
        /**
         * Since an order may only contain a single pre-ordered product, this returns the pre-ordered product object
         *
         * @since    1.0
         * @version  1.5.3
         * @param    object|int $order preferably the order object, or order ID if object is inconvenient to provide
         * @return   object|bool the pre-ordered product object, or false if the cart does not contain a pre-order
         */
        public static function get_pre_order_product($order)
        {
        }
        /**
         * Get the pre-order status for an order
         * - Active = awaiting release
         * - Completed = availability date was reached or admin manually completed
         * - Cancelled = order and/or pre-order was cancelled
         *
         * @since 1.0
         * @param object|int $order Preferably the order object, or order ID if
         *                          object is inconvenient to provide.
         * @return bool|string The pre-order status or false if order is not valid.
         */
        public static function get_pre_order_status($order)
        {
        }
        /**
         * Returns a pre-order status to display
         *
         * @since 1.0
         * @param object|int $order preferably the order object, or order ID if object is inconvenient to provide
         * @return string the pre-order status for display
         */
        public static function get_pre_order_status_to_display($order)
        {
        }
        /**
         * Automatically change the pre-order status when the order status changes.
         *
         * @since 1.0
         * @param int    $order_id post ID of the order
         * @param string $old_order_status the prior order status
         * @param string $new_order_status the new order status
         */
        public function auto_update_pre_order_status($order_id, $old_order_status, $new_order_status)
        {
        }
        /**
         * Decides which pre-order status to apply when the order moves to pre-ordered or on-hold.
         *
         * A pre-order whose release payment has already been taken must never return to 'active'.
         * Doing so re-arms the release payment hook against an order that has already been settled,
         * which is how the same stored card can be charged twice.
         *
         * The test is deliberately the recorded charge and not the pre-order status. The pre-order
         * status is not a safe proxy for "money has moved": WC_Pre_Orders_Manager::complete_pre_order()
         * marks a pre-order 'completed' even when the gateway declined the charge, and a declined
         * charge must stay retryable. Likewise a pre-order can be 'cancelled' with no charge ever
         * having been taken, either because the release charge failed or because a pre-order charged
         * upfront was marked failed and is legitimately resurrected when the customer pays.
         *
         * @since 2.3.8
         * @param WC_Order $order the order object
         * @return string 'active', or '' to leave the pre-order status alone
         */
        protected function get_pre_order_status_for_activation($order)
        {
        }
        /**
         * Applies and validates the filter over the automatic pre-order status transition.
         *
         * @since 2.3.8
         * @param string $new_pre_order_status     the status this plugin decided on, or '' for no change
         * @param int    $order_id                 the order ID
         * @param string $old_order_status         the prior order status
         * @param string $new_order_status         the new order status
         * @param string $current_pre_order_status the current pre-order status
         * @return string a validated pre-order status, or '' for no change
         */
        protected function filter_auto_update_pre_order_status($new_pre_order_status, $order_id, $old_order_status, $new_order_status, $current_pre_order_status)
        {
        }
        /**
         * Records that a pre-order was not returned to the active status.
         *
         * @since 2.3.8
         * @param WC_Order $order            the order object
         * @param string   $old_order_status the prior order status
         * @param string   $new_order_status the new order status
         */
        protected function log_prevented_reactivation($order, $old_order_status, $new_order_status)
        {
        }
        /**
         * Update the pre-order status for an order
         *
         * @since 1.0
         * @param object|int $order preferably the order object, or order ID if object is inconvenient to provide
         * @param string     $new_status the new pre-order status
         * @param string     $message an optional message to include in the email to customer
         */
        public static function update_pre_order_status($order, $new_status, $message = '')
        {
        }
        /**
         * Automatically cancel a pre-order if it's parent order is moved to the trash. Note that un-trashing the order does
         * not change the pre-order back to it's original status
         *
         * @since 1.0
         * @param int $order_id the order post ID.
         */
        public function maybe_cancel_trashed_pre_order($order_id)
        {
        }
        /**
         * Product is in stock for orders which are pre-orders (stock reduced during pre-order)
         *
         * @param bool       $in_stock
         * @param WC_Product $product
         * @param WC_Order   $order
         *
         * @return bool
         */
        public static function product_in_stock($in_stock, $product, $order)
        {
        }
        /**
         * Add order data to the admin script.
         *
         * @param array  $script_data The script data.
         * @param string $hook_suffix The current screen hook suffix.
         * @return array Modified script data.
         */
        public function add_order_data_to_admin_script($script_data, $hook_suffix)
        {
        }
        /**
         * Get order data for use in the admin JavaScript.
         *
         * This data is used by the admin JavaScript to determine whether an order is a pre-order
         * and whether it can be changed to completed or processing without affecting the
         * sending of an invoice to the purchaser.
         *
         * @since 2.2.4
         *
         * @param WC_Order $order The order object.
         * @return array Order data for the script.
         */
        public function get_order_script_data($order)
        {
        }
        /**
         * Add order data to the WooCommerce Orders screen when using HPOS.
         *
         * As the HPOS screen does not use a global query object, the data is not available
         * at the time scripts are enqueued. This ensures that the data is available to the
         * admin JavaScript by defining the data as the order table is rendered.
         *
         * Runs on the `manage_woocommerce_page_wc-orders_custom_column` action.
         *
         * @param string $column_name The column name being rendered in the list table.
         * @param mixed  $order       The order object or ID.
         */
        public function add_order_data_to_hpos_rows($column_name, $order)
        {
        }
    }
    class WC_Pre_Orders_Privacy extends \WC_Abstract_Privacy
    {
        /**
         * Constructor
         *
         */
        public function __construct()
        {
        }
        /**
         * Initial registration.
         */
        public function register()
        {
        }
        /**
         * Gets the message of the privacy to display.
         *
         */
        public function get_privacy_message()
        {
        }
    }
    /**
     * Pre-Orders Product class
     *
     * Customizes the functionality and display of simple/variable products to support Pre-Orders
     *
     * @since 1.0
     */
    class WC_Pre_Orders_Product
    {
        /**
         * Adds needed hooks / filters
         *
         * @since 1.0
         */
        public function __construct()
        {
        }
        /**
         * Add 'Available XX/XX/XXXX' message to product lists in woocommerce blocks.
         *
         * @param string $html Upstream html.
         * @param stdClass $data Data to render.
         * @param WC_Product $product Current Product.
         *
         * @return string
         */
        public function update_blocks_product_grid($html, $data, $product)
        {
        }
        /**
         * Add a customizable message to product's on the shop loop page and / or on the single product page immediately
         * after the price
         *
         * @since 1.0
         */
        public function add_pre_order_product_message()
        {
        }
        /**
         * Get message of when product will be available.
         *
         * @param WC_Product $product Current product.
         * @param bool $product_grid We are currently displaying a grid of products.
         *
         * @return string
         */
        private function get_pre_order_product_message($product, $product_grid = \false)
        {
        }
        /**
         * Modifies the add to cart button text on product loop page & single product page
         *
         * @since 1.0
         * @param string $default_text default add to cart button text
         * @param WC_Product $product
         * @return string
         */
        public function modify_add_to_cart_button_text($default_text, $product)
        {
        }
        /**
         * Modifies the add to cart description -- used in ARIA tags.
         *
         * @since 2.3.0
         *
         * @param string     $description_text Text used in the aria-label attribute of the add to cart button.
         * @param WC_Product $product          The product object.
         * @return string The modified area-label attribute text.
         */
        public function modify_add_to_cart_description($description_text, $product)
        {
        }
        /**
         * Modify availability text
         *
         * @param  array      $data
         * @param  WC_Product $product
         *
         * @return array
         */
        public function modify_availability_text($data, $product)
        {
        }
        /**
         * Checks if a given product can be pre-ordered by verifying pre-orders are enabled for it
         *
         * @since 2.0.2 Validate compatible pre-order product types.
         * @since 1.0
         *
         * @param object|int $product preferably the product object, or product ID if object is inconvenient to provide
         *
         * @return bool true if product can be pre-ordered, false otherwise
         */
        public static function product_can_be_pre_ordered($product)
        {
        }
        /**
         * Checks if a given product can have the pre-order feature enabled.
         *
         * This check is independent of whether the product is currently available for pre-order.
         * It can be used to check whether the product is of a supported type and the features set
         * for the product allow the product to be placed in to a pre-order state.
         *
         * Use WC_Pre_Orders_Product::product_can_be_pre_ordered() to check if the product currently
         * has pre-orders enabled.
         *
         * @param WC_Product|int $product The product object or ID.
         * @return bool Whether the product can have pre-orders enabled.
         */
        public static function product_supports_pre_order_feature($product)
        {
        }
        /**
         * Checks if a given product has active pre-orders
         *
         * @since 1.0.0
         * @version 1.5.1
         * @param object|int $product preferably the product object, or product ID if object is inconvenient to provide
         * @return bool true if product can be pre-ordered, false otherwise
         */
        public static function product_has_active_pre_orders($product)
        {
        }
        /**
         * Checks if a given pre-order-enabled product is charged upon release
         *
         * @since 1.0
         * @param object|int $product preferably the product object, or product ID if object is inconvenient to provide
         * @return bool true if pre-order is charged upon release, false otherwise
         */
        public static function product_is_charged_upon_release($product)
        {
        }
        /**
         * Checks if a given pre-order-enabled product is charged upfront
         *
         * @since 1.0
         * @param object|int $product preferably the product object, or product ID if object is inconvenient to provide
         * @return bool true if pre-order is charged upfront, false otherwise
         */
        public static function product_is_charged_upfront($product)
        {
        }
        /**
         * Gets the pre-order fee for a given product
         *
         * @since 1.0
         * @param object|int $product preferably the product object, or product ID if object is inconvenient to provide
         * @return string the pre-order fee amount
         */
        public static function get_pre_order_fee($product)
        {
        }
        /**
         * Gets the tax status of a pre-order fee by checking the tax status of the product
         *
         * @since 1.0
         * @param object|int $product preferably the product object, or product ID if object is inconvenient to provide
         * @return bool true if the pre-order fee is taxable, false otherwise
         */
        public static function get_pre_order_fee_tax_status($product)
        {
        }
        /**
         * Gets the availability date of the product localized to the site's date format
         *
         * @since 1.0
         * @param object|int $product preferably the product object, or product ID if object is inconvenient to provide
         * @param string $none_text optional text to return if there is no availability datetime set
         * @return string the formatted availability date
         */
        public static function get_localized_availability_date($product, $none_text = '')
        {
        }
        /**
         * Gets the availability time of the product formatted according to the site's time format and timezone
         *
         * @since 1.0
         * @param object|int $product preferably the product object, or product ID if object is inconvenient to provide
         * @return string the formatted availability time
         */
        public static function get_localized_availability_time($product)
        {
        }
        /**
         * Gets the availability timestamp of the product localized to the configured
         * timezone
         *
         * @param WC_Product|int $product the product object or post identifier
         * @return int the timestamp, localized to the current timezone
         */
        public static function get_localized_availability_datetime_timestamp($product)
        {
        }
        /**
         * Gets the availability date of the product in UTC.
         *
         * @since 2.2.0
         *
         * @param WC_Product|int $product the product object or post identifier
         * @return int The timestamp of the completion date.
         */
        public static function get_utc_availability_datetime_timestamp($product)
        {
        }
        /**
         * Returns the timezone string for a site, even if it's set to a UTC offset
         *
         * Adapted from http://www.php.net/manual/en/function.timezone-name-from-abbr.php#89155
         *
         * @since 1.0
         * @return string valid PHP timezone string
         */
        public static function get_wp_timezone_string()
        {
        }
        /**
         * Maybe cancel pre order when product is trashed
         *
         * @param int $product_id Product ID
         */
        public function maybe_cancel_pre_order_product_trashed($product_id)
        {
        }
        /**
         * Gets the list of products with an availability date in the past.
         *
         * @return array An array of products IDs which have passed their scheduled availability date.
         */
        public static function get_products_passed_release_date()
        {
        }
    }
    class WC_Pre_Orders
    {
        /**
         * The single instance of the class.
         *
         * @var WC_Pre_Orders
         * @since 1.13.0
         */
        protected static $instance = \null;
        /**
         * Plugin file path without trailing slash
         *
         * @var string
         */
        private $plugin_path;
        /**
         * Plugin url without trailing slash
         *
         * @var string
         */
        private $plugin_url;
        /**
         * WC_Logger instance
         *
         * @var object
         */
        private $logger;
        /**
         * @var string __FILE__ of the base plugin file
         */
        private $base_file;
        /**
         * @var WC_Pre_Orders_Cron
         */
        private $cron = \null;
        /**
         * @var WC_Pre_Orders_Manager
         */
        private $manager = \null;
        /**
         * @var WC_Pre_Orders_Product
         */
        private $product = \null;
        /**
         * @var WC_Pre_Orders_Cart
         */
        private $cart = \null;
        /**
         * @var WC_Pre_Orders_Checkout
         */
        private $checkout = \null;
        /**
         * @var WC_Pre_Orders_Order
         */
        private $order = \null;
        /**
         * @var WC_Pre_Orders_Compat_Subscriptions
         */
        private $subscriptions = \null;
        /**
         * Setup main plugin class
         *
         * @return \WC_Pre_Orders
         * @since  1.0
         */
        public function __construct($base_file)
        {
        }
        /**
         * Main Instance.
         *
         * Ensures only one instance is loaded or can be loaded.
         *
         * @return WC_Pre_Orders
         * @since 1.5.25
         */
        public static function instance()
        {
        }
        /**
         * This function will send email based on action name.
         *
         * @param string $email Action name
         * @param WC_Order $order
         */
        public function sendmail($email, $order)
        {
        }
        /**
         * Load core classes
         *
         * @since 1.0
         */
        public function load_classes()
        {
        }
        /**
         * Loads the classes for the integration with WooCommerce Blocks.
         */
        public static function load_block_classes()
        {
        }
        /**
         * Load actions and filters that require WC to be loaded
         *
         * @since 1.0
         */
        public function init()
        {
        }
        /**
         * Add the 'pay later' gateway, which replaces gateways that do not support pre-orders when the pre-order is charged
         * upon release
         *
         * @since 1.0
         */
        public function add_pay_later_gateway($gateways)
        {
        }
        /**
         * Adds the countdown shortcode.
         */
        private function add_countdown_shortcode()
        {
        }
        /**
         * Adds Pre-Order email classes
         *
         * @since 1.0
         */
        public function add_email_classes($email_classes)
        {
        }
        /**
         * Sends transactional email by hooking into pre-order status changes
         *
         * @since 1.0
         */
        public function send_transactional_email($args = array(), $message = '')
        {
        }
        /**
         * Remove terms and scheduled events on plugin deactivation
         *
         * @since 1.0
         */
        public function deactivate()
        {
        }
        /**
         * Return the plugin action links.
         *
         * @param array $actions Associative array of action names to anchor tags.
         *
         * @return array          Associative array of plugin action links.
         */
        public function plugin_action_links($actions)
        {
        }
        /**
         * Returns the plugin's path without a trailing slash
         *
         * @return string the plugin path
         * @since  1.0
         *
         */
        public function get_plugin_path()
        {
        }
        /**
         * Returns the plugin's url without a trailing slash
         *
         * @return string the plugin url
         * @since  1.0
         *
         */
        public function get_plugin_url()
        {
        }
        /**
         * Log errors to WooCommerce log
         *
         * @param string $message message to log
         *
         * @since 1.0
         *
         */
        public function log($message)
        {
        }
        /**
         * Get supported product types.
         *
         * @return array
         */
        public static function get_supported_product_types()
        {
        }
        /**
         * Declare compatibility with various Woo features.
         *
         * @since 1.9.0
         */
        public function declare_feature_compatibility()
        {
        }
        /**
         * Check if High-performance Order Storage ("HPOS") enable
         *
         * @return bool Whether enabled or not
         */
        public static function is_hpos_enabled()
        {
        }
    }
    class WC_Pre_Orders_Compat_Subscriptions
    {
        /**
         * Date format used by WooCommerce Subscriptions.
         */
        const SUBS_DATE_TIME_FORMAT = 'Y-m-d H:i:s';
        /**
         * Date format used by WooCommerce Pre-Orders.
         */
        const PRE_ORDERS_DATE_TIME_FORMAT = 'Y-m-d H:i';
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Register hooks.
         *
         * Bails early if WooCommerce Subscriptions is not active to
         * allow the remaining methods within this class to presume the
         * extension is active.
         */
        public function add_hooks()
        {
        }
        /**
         * Modifies whether a product supports the pre-order feature.
         *
         * Disables the pre-order feature for subscription products with incompatible features.
         *
         * Runs on the `wc_pre_orders_product_supports_pre_order_feature` filter.
         *
         * @param bool       $supports_pre_order_feature Whether the product supports the pre-order feature.
         * @param WC_Product $product                    The product object.
         */
        public function product_supports_pre_order_feature($supports_pre_order_feature, $product)
        {
        }
        /**
         * Show store managers warning a subscription product is incompatible with pre-orders.
         *
         * Displays a message on the product page if the product is a subscription product
         * with an incompatible feature for pre-orders.
         *
         * Runs on the `woocommerce_single_product_summary` action.
         */
        public function show_notice_subscriptions_feature_compatibility()
        {
        }
        /**
         * Determine whether a subscription product can be pre-ordered.
         *
         * Runs on the `woocommerce_is_purchasable` filter.
         *
         * Prevent the pre-order of a subscription product if the product
         * is using features that are incompatible with pre-orders.
         *
         * The product interface in the dashboard prevents the configuration
         * of incompatible features for pre-orders so this should only be
         * needed for products created via the CLI or REST API.
         *
         * @param bool $is_purchaseable Whether the product is purchasable.
         * @param WC_Product $product The product object.
         * @return bool Modified purchasable status.
         */
        public function is_purchasable($is_purchaseable, $product)
        {
        }
        /**
         * Show a notice on the variations page when an incompatible subscription product is set.
         *
         * Warn the merchant that the pre-order function is unavailable for certain
         * subscription products.
         *
         * Runs on the actions:
         * - woocommerce_variable_product_before_variations
         * - woocommerce_product_options_general_product_data
         */
        public function show_notice_subscriptions_feature_compatibility_above_product_pricing()
        {
        }
        /**
         * Show a notice when an incompatible subscription product is set.
         *
         * Warn the merchant that the pre-order function is unavailable for certain
         * subscription products.
         *
         * Runs on the `wc_pre_orders_product_options_start` action.
         */
        public function show_notice_subscriptions_feature_compatibility_above_pre_orders()
        {
        }
        /**
         * Add details about the product to the admin script data.
         *
         * @param array  $script_data The script data.
         * @param string $hook_suffix The current screen hook suffix.
         * @return array The modified script data.
         */
        public function add_product_data_to_admin_script($script_data, $hook_suffix)
        {
        }
        /**
         * Get whether the product has synchronized subscriptions.
         *
         * @param bool|int|WC_Product $product Post object or post ID of the product. Defaults to the current post.
         * @return bool Whether the product has synchronized subscriptions.
         */
        public static function product_has_synced_subs($product = \false)
        {
        }
        /**
         * Get whether the product has a trial period.
         *
         * @param bool|int|WC_Product $product Post object or post ID of the product. Defaults to the current post.
         * @return bool Whether the product has a trial period.
         */
        public static function product_has_trial_period($product = \false)
        {
        }
        /**
         * Store maturity date for pre-orders on subscription variations.
         *
         * Runs on the `wc_pre_orders_after_product_options_updated` action.
         *
         * @todo Modify for synchronized subscriptions when support is added.
         *
         * @param int $product_id The product ID.
         * @param bool $is_enabled Whether pre-orders are enabled for the product.
         * @param int $timestamp The maturity timestamp of the pre-order's parent product.
         */
        public function store_pre_order_completion_date_on_subscription_variants($product_id, $is_enabled, $timestamp)
        {
        }
        /**
         * Prevent subscriptions from being recreated when the initial payment is paid for.
         *
         * This accounts for pay upon release pre-orders using the pay-later payment method.
         * Allowing subscriptions to recreate the order prevents the subscription being purchased
         * if the pre-order was completed prior to the product's initial maturity date.
         *
         * Runs on the filter `wcs_recreate_initial_payment_order`.
         *
         * @param bool     $recreate_cary Whether to recreate the cart.
         * @param WC_Order $order         The order object.
         */
        public function prevent_recreation_of_initial_cart_for_pre_orders($recreate_order, $order)
        {
        }
        /**
         * Remove the renewal actions from pre-ordered subscriptions.
         *
         * When editing a pre-ordered subcscription in the admin the renewal actions are removed:
         *    - Process renewal
         *    - Create pending renewal
         *
         * Prior to a pre-order becoming active, these actions are unavailable as they require status
         * transitions that are prevented by the pre-order status.
         *
         * Runs on the filter `woocommerce_order_actions, 20`.
         *
         * @param array           $actions     The order actions.
         * @param WC_Subscription $subscription The subscription object.
         */
        public function prevent_admin_generated_renewals_for_pre_orders($actions, $subscription)
        {
        }
        /**
         * Check if the subscriptions extension is supported.
         *
         * Pre-orders requires Subscriptions 6.7.0 or later.
         *
         * Pre-orders makes use of code introduced in the following upstream pull requests:
         *
         * @link https://github.com/Automattic/woocommerce-subscriptions-core/pull/579
         * @link https://github.com/Automattic/woocommerce-subscriptions-core/pull/594
         * @link https://github.com/Automattic/woocommerce-subscriptions-core/pull/647
         *
         * @return bool Whether the subscriptions extension available and a supported version.
         */
        public static function is_subscriptions_supported()
        {
        }
        /**
         * Check if a subscription feature is supported.
         *
         * @param string $feature The feature to check support for, accepts 'synchronized-subscriptions' and 'trial-periods'.
         * @return false Whether the feature is supported.
         */
        public static function is_subscriptions_feature_supported($feature)
        {
        }
        /**
         * Add a note to the customer subscription actions if the subscription is pre-ordered.
         *
         * This adds a note to the customer subscription actions explaining that they will be
         * able to modify their subscription once it comes out of pre-order state.
         *
         * @param WC_Subscription $subscription The subscription object.
         */
        public function after_subscriptions_actions($subscription)
        {
        }
        /**
         * Prevent the subscriptions and subscription renewal orders from being marked as pre-ordered.
         *
         * Remove the pre-order meta data from the subscription objects.
         *
         * For new subscriptions this prevents the subscription from being treated as an order
         * in the pre-order bulk actions.
         *
         * For renewals this ensures that the renewal orders to not go through the pre-order
         * status and related workflows.
         *
         * Runs on the `wc_subscriptions_renewal_order_data` and
         * `wc_subscriptions_subscription_data` filters.
         *
         * @param mixed[] $data Array of meta data for the renewal order.
         * @return mixed[] The modified array excluding the pre-order meta data.
         */
        public function remove_pre_order_status_from_subscription_objects($data)
        {
        }
        /**
         * Set the subscription status to pre-ordered for active pre-orders.
         *
         * Runs on the `wc_pre_order_status_active` action.
         *
         * @param int $order_id The order ID.
         */
        public function pre_order_status_active($order_id)
        {
        }
        /**
         * Active a subscription when the status changes from pre-ordered to processing.
         *
         * Runs on the `wcs_is_subscription_order_completed` filter.
         *
         * @param bool              $order_completed  Whether the order is considered completed.
         * @param string            $new_order_status The new order status.
         * @param string            $old_order_status The old order status.
         * @param WC_Subscription[] $subscriptions    The subscriptions in the order.
         * @param WC_Order          $order            The order object.
         */
        public function allow_activate_subscription_on_pre_order_to_processing($order_completed, $new_order_status, $old_order_status, $subscriptions, $order)
        {
        }
        /**
         * Prevent a pre-order status from marking a subscription as complete/active.
         *
         * Prevents the Woo Subscriptions from activating the subscription following payment.
         *
         * Runs on the `wcs_is_subscription_order_completed` filter.
         *
         * @param bool              $order_completed  Whether the order is considered completed.
         * @param string            $new_order_status The new order status.
         * @param string            $old_order_status The old order status.
         * @param WC_Subscription[] $subscriptions    The subscriptions in the order.
         * @param WC_Order          $order            The order object.
         */
        public function prevent_activate_subscription_on_payment($order_completed, $new_order_status, $old_order_status, $subscriptions, $order)
        {
        }
        /**
         * Add the pre-ordered status to the list of subscription statuses.
         *
         * @param string[] $statuses The list of subscription statuses.
         * @return string[] The modified list of subscription statuses.
         */
        public function add_pre_order_status($statuses)
        {
        }
        /**
         * Determine if the status can be updated from pre-ordered to complete.
         *
         * This is hooked in to the checks for updating a subscription status to
         * completed. If the current status is pre-ordered then it's determined whether
         * to allow the status change.
         *
         * @param bool $can_be_updated Whether the subscription status can be updated.
         * @param WC_Subscription $subscription The subscription object.
         * @return bool Whether the subscription status can be updated.
         */
        public function allow_status_update_from_pre_ordered_to_completed($can_be_updated, $subscription)
        {
        }
        /**
         * Determine if the status can be updated from pre-ordered to active.
         *
         * This is hooked in to the checks for updating a subscription status to
         * active. If the current status is pre-ordered then it's determined whether
         * to allow the status change.
         *
         * @param bool $can_be_updated Whether the subscription status can be updated.
         * @param WC_Subscription $subscription The subscription object.
         * @return bool Whether the subscription status can be updated.
         */
        public function allow_status_update_from_pre_ordered_to_active($can_be_updated, $subscription)
        {
        }
        /**
         * Determine if the status can be updated from on-hold to active.
         *
         * Generally this is permitted based on the capabilities of the payment gateway. When
         * activating a pre-ordered subscription, the transition needs to be made during the
         * pay for order page.
         *
         * @param bool $can_be_updated Whether the subscription status can be updated.
         * @param WC_Subscription $subscription The subscription object.
         * @return bool Whether the subscription status can be updated.
         */
        public function allow_status_update_from_on_hold_to_active($can_be_updated, $subscription)
        {
        }
        /**
         * Determine if the status can be updated from pre-ordered to on-hold.
         *
         * This is hooked in to the checks for updating a subscription status to
         * on-hold. If the current status is pre-ordered then it's determined whether
         * to allow the status change.
         *
         * @param bool $can_be_updated Whether the subscription status can be updated.
         * @param WC_Subscription $subscription The subscription object.
         * @return bool Whether the subscription status can be updated.
         */
        public function allow_status_update_from_pre_ordered_to_on_hold($can_be_updated, $subscription)
        {
        }
        /**
         * Modify whether a user can resubscribe to a subscription.
         *
         * Prevents a customer from resubscribing to a subscription that was cancelled
         * prior to the pre-order date completing. This is to account for situations in
         * which the cancellation is due to the product launch no longer proceeding.
         *
         * Runs on the `wcs_can_user_resubscribe_to_subscription` filter.
         *
         * @param bool            $can_user_resubscribe Whether the user can resubscribe.
         * @param WC_Subscription $subscription         The subscription object.
         * @return bool Modified value of whether the user can resubscribe.
         */
        public function prevent_resubscribe_for_cancelled_pre_orders($can_user_resubscribe, $subscription)
        {
        }
        /**
         * Determine if the status can be updated from pre-ordered to cancelled.
         *
         * This is hooked in to the checks for updating a subscription status to
         * cancelled. If the current status is pre-ordered then it's determined whether
         * to allow the status change.
         *
         * @param bool $can_be_updated Whether the subscription status can be updated.
         * @param WC_Subscription $subscription The subscription object.
         * @return bool Whether the subscription status can be updated.
         */
        public function allow_status_update_from_pre_ordered_to_cancelled($can_be_updated, $subscription)
        {
        }
        /**
         * Update the subscription start date and first renewal date when the pre-order is paid for.
         *
         * This is to ensure the subscription status is correct when the product is first ordered and
         * paid for but prior to the pre-order availability date.
         *
         * Runs on the `woocommerce_payment_complete_order_status` filter.
         *
         * @param string $new_status The new order status.
         * @param int    $order_id    The order ID.
         * @param object $order       The order object.
         * @return string The modified order status.
         */
        public function update_payment_complete_order_status($new_status, $order_id, $order)
        {
        }
        /**
         * Set the subscription start date to the pre-order availability date.
         *
         * @param string  $start_date The recurring cart UTC start date in the format YYYY-MM-DD HH:MM:SS.
         * @param WC_Cart $cart       The cart object.
         * @return string The modified start date for the subscription.
         */
        public function set_recurring_cart_start_date($start_date, $cart)
        {
        }
        /**
         * Update the start date and next payment date for subscriptions when the pre-order availability date changes.
         *
         * @param array $args {
         *     The arguments passed to the wc_pre_orders_pre_order_date_changed action.
         *
         *     @type WC_Order $order The order object.
         *     @type int $availability_date The new availability date.
         *     @type string $message The email message sent to the customer.
         * }
         */
        public function pre_order_date_changed($args)
        {
        }
        /**
         * Update the subscription when the order is completed.
         *
         * Update the subscription status to active when the order is completed. To account
         * for store owners manually completing pre-orders, the subscription start date is
         * updated to the current time.
         *
         * @param WC_Order $order The order object.
         */
        public function pre_order_completed($order)
        {
        }
        /**
         * Cancel the subscription when the pre-order is cancelled.
         *
         * Update the subscription status to cancelled when the order is cancelled.
         *
         * @param WC_Order $order The order object.
         */
        public function pre_order_cancelled($order)
        {
        }
        /**
         * Remove subscription info section from cancellation emails.
         *
         * This deregisters the hook adding subscription info to the cancellation emails
         * of pre-orders. Due to an order of operations issue, the subscription info is
         * out of date when the email is sent.
         *
         * This runs on the `wc_pre_order_status_active_to_cancelled` hook.
         */
        public function remove_subscription_info_from_cancellation_emails()
        {
        }
    }
    /**
     * Admin Pre-Order Cancelled Email
     *
     * An email sent to the admin when a pre-order is cancelled.
     */
    class WC_Pre_Orders_Email_Admin_Pre_Order_Cancelled extends \WC_Email
    {
        /** @var string optional message to include in email */
        private $message;
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Dispatch the email
         */
        public function trigger($order_id, $message)
        {
        }
        /**
         * Gets the email HTML content
         *
         * @return string the email HTML content
         */
        public function get_content_html()
        {
        }
        /**
         * Gets the email plain content
         *
         * @return string the email plain content
         */
        public function get_content_plain()
        {
        }
    }
    /**
     * New Pre-Order Email
     *
     * An email sent to the admin when a new pre-order is received
     *
     * @since 1.0
     */
    class WC_Pre_Orders_Email_New_Pre_Order extends \WC_Email
    {
        /**
         * Constructor
         *
         * @since 1.0
         */
        public function __construct()
        {
        }
        /**
         * Dispatch the email
         *
         * @since 1.0
         */
        public function trigger($order_id)
        {
        }
        /**
         * Gets the email HTML content
         *
         * @since 1.0
         * @return string the email HTML content
         */
        public function get_content_html()
        {
        }
        /**
         * Gets the email plain content
         *
         * @since 1.0
         * @return string the email plain content
         */
        public function get_content_plain()
        {
        }
        /**
         * Initialise Settings Form Fields
         *
         * @since 1.0
         */
        public function init_form_fields()
        {
        }
    }
    /**
     * Customer Pre-Order Available Email
     *
     * An email sent to the customer when a pre-order is available.
     *
     * @since 1.0
     */
    class WC_Pre_Orders_Email_Pre_Order_Available extends \WC_Email
    {
        /** @var string optional message to include in email */
        private $message;
        /**
         * Constructor
         *
         * @since 1.0
         */
        public function __construct()
        {
        }
        /**
         * Dispatch the email
         *
         * @since 1.0
         */
        public function trigger($order_id, $message = '')
        {
        }
        /**
         * Gets the email HTML content
         *
         * @since 1.0
         * @return string the email HTML content
         */
        public function get_content_html()
        {
        }
        /**
         * Gets the email plain content
         *
         * @since 1.0
         * @return string the email plain content
         */
        public function get_content_plain()
        {
        }
    }
    /**
     * Customer Pre-Order Cancelled Email
     *
     * An email sent to the customer when a pre-order is cancelled.
     *
     * @since 1.0
     */
    class WC_Pre_Orders_Email_Pre_Order_Cancelled extends \WC_Email
    {
        /** @var string optional message to include in email */
        private $message;
        /**
         * Constructor
         *
         * @since 1.0
         */
        public function __construct()
        {
        }
        /**
         * Dispatch the email
         *
         * @since 1.0
         */
        public function trigger($order_id, $message)
        {
        }
        /**
         * Gets the email HTML content
         *
         * @since 1.0
         * @return string the email HTML content
         */
        public function get_content_html()
        {
        }
        /**
         * Gets the email plain content
         *
         * @since 1.0
         * @return string the email plain content
         */
        public function get_content_plain()
        {
        }
    }
    /**
     * Customer Pre-Order Date Changed Email
     *
     * An email sent to the customer when a pre-order release date is changed
     *
     * @since 1.0
     */
    class WC_Pre_Orders_Email_Pre_Order_Date_Changed extends \WC_Email
    {
        /** @var string optional message to include in email */
        private $message;
        /** @var localized availability date for pre-order  */
        private $availability_date;
        /**
         * Constructor
         *
         * @since 1.0
         */
        public function __construct()
        {
        }
        /**
         * Dispatch the email
         *
         * @since 2.0.7 Update logic to handle function first argument as array.
         *              First argument is same as for wc_pre_orders_pre_order_date_changed action hook.
         * @since 1.0
         */
        public function trigger(array $args)
        {
        }
        /**
         * Gets the email HTML content
         *
         * @since 1.0
         * @return string the email HTML content
         */
        public function get_content_html()
        {
        }
        /**
         * Gets the email plain content
         *
         * @since 1.0
         * @return string the email plain content
         */
        public function get_content_plain()
        {
        }
    }
    /**
     * Customer Pre-Ordered Email
     *
     * An email sent to the customer when a pre-order is initially placed.  This can
     * require payment (for an upfront payment with a deferred gateway like bacs).
     *
     * @since 1.0
     */
    class WC_Pre_Orders_Email_Pre_Ordered extends \WC_Email
    {
        /** @var string availability date for the pre-order */
        private $availability_date;
        /** @var int availability date timestamp */
        private $timestamp;
        /**
         * Constructor
         *
         * @since 1.0
         */
        public function __construct()
        {
        }
        /**
         * Dispatch the email
         *
         * @since 1.0
         */
        public function trigger($order_id)
        {
        }
        /**
         * Gets the email HTML content
         *
         * @since 1.0
         * @return string the email HTML content
         */
        public function get_content_html()
        {
        }
        /**
         * Gets the email plain content
         *
         * @since 1.0
         * @return string the email plain content
         */
        public function get_content_plain()
        {
        }
    }
    /**
     * Pre-Orders "Pay Later" Payment Gateway class
     *
     * Extends the WC_Payment_Gateway class to provide a generic "Pay Later" payment gateway for pre-orders
     *
     * @since 1.0
     * @extends \WC_Payment_Gateway
     */
    class WC_Pre_Orders_Gateway_Pay_Later extends \WC_Payment_Gateway
    {
        /**
         * Loads settings and hooks for saving
         *
         * @since 1.0
         * @return \WC_Pre_Orders_Gateway_Pay_Later
         */
        public function __construct()
        {
        }
        /**
         * Disables the gateway under any of these conditions:
         * 1) If the cart does not contain a pre-order
         * 2) If the pre-order amount is charged upfront
         * 3) On the pay page
         *
         * @since 1.0
         * @return bool
         */
        public function is_available()
        {
        }
        /**
         * Setup gateway form fields
         *
         * @since 1.0
         */
        public function init_form_fields()
        {
        }
        /**
         * Process the payment and return the result
         *
         * @since  1.0
         *
         * @param  int $order_id
         *
         * @return array
         */
        public function process_payment($order_id)
        {
        }
        /**
         * Receipt page.
         *
         * @param  WC_Order $order
         *
         * @return string
         */
        public function receipt_page($order)
        {
        }
    }
    /**
     * Countdown Shortcode
     *
     * Displays a JavaScript-enabled countdown timer
     *
     * @since 1.0
     */
    class WC_Pre_Orders_Shortcode_Countdown
    {
        /**
         * Get the shortcode content.
         *
         * @param array $atts associative array of shortcode parameters
         * @return string shortcode content
         */
        public static function get($atts)
        {
        }
        /**
         * Sanitize the layout content.
         *
         * @param string $content Layout content
         * @return string
         */
        private static function sanitize_layout($content)
        {
        }
        /**
         * Callback for `sanitize_layout()`.
         *
         * @param array $matches preg_replace regexp matches
         * @return string
         */
        public static function sanitize_layout_callback($matches)
        {
        }
        /**
         * Output the countdown timer.  This defaults to the following format, where
         * elements in [ ] are not shown if zero:
         *
         * [y Years] [o Months] [d Days] h Hours m Minutes s Seconds
         *
         * The following shortcode arguments are optional:
         *
         * * product_id/product_sku - id or sku of pre-order product to countdown to.
         *     Defaults to current product, if any
         * * until - date/time to count down to, overrides product release date
         *     if set.  Example values: "15 March 2015", "+1 month".
         *     More examples: http://php.net/manual/en/function.strtotime.php
         * * before - text to show before the countdown.  Only available if 'layout' is not ''
         * * after - text to show after the countdown.  Only available if 'layout' is not ''
         * * layout - The countdown layout, defaults to y Years o Months d Days h Hours m Minutes s Seconds
         *     See http://keith-wood.name/countdownRef.html#layout for all possible options
         * * format - The format for the countdown display.  Example: 'yodhms'
         *     to display the year, month, day and time.  See http://keith-wood.name/countdownRef.html#format for all options
         * * compact - If 'true' displays the date/time labels in compact form, ie
         *     'd' rather than 'days'.  Defaults to 'false'
         *
         * When the countdown date/time is reached the page will refresh.
         *
         * To test different time periods you can create shortcodes like the following samples:
         *
         * [woocommerce_pre_order_countdown until="+10 year"]
         * [woocommerce_pre_order_countdown until="+10 month"]
         * [woocommerce_pre_order_countdown until="+10 day"]
         * [woocommerce_pre_order_countdown until="+10 second"]
         *
         * @param array $atts associative array of shortcode parameters
         */
        public static function get_pre_order_countdown_shortcode_content($atts)
        {
        }
        /**
         * Enqueue required JavaScripts:
         * * jquery.countdown.js - Main countdown script
         * * jquery.countdown-{language}.js - Localized countdown script based on WPLANG, and if available
         */
        private static function enqueue_scripts()
        {
        }
    }
}
namespace {
    /**
     * WooCommerce fallback notice.
     *
     * @since 1.5.25
     */
    function woocommerce_pre_orders_missing_wc_notice()
    {
    }
    /**
     * Actions to perform when plugin is activated.
     *
     * @since 1.4.7
     */
    function woocommerce_pre_orders_activate()
    {
    }
    \define('WC_PRE_ORDERS_VERSION', '2.3.8');
    // WRCS: DEFINED_VERSION.
    \define('WC_PRE_ORDERS_PLUGIN_PATH', \untrailingslashit(\plugin_dir_path(__FILE__)));
    \define('WC_PRE_ORDERS_PLUGIN_URL', \untrailingslashit(\plugins_url(\basename(\plugin_dir_path(__FILE__), \basename(__FILE__)))));
    \define('WC_PRE_ORDERS_GUTENBERG_EXISTS', \function_exists('register_block_type') ? \true : \false);
    /**
     * Load the plugin text domain for translation.
     */
    function woocommerce_pre_orders_load_plugin_textdomain()
    {
    }
    /**
     * Initializes the extension.
     *
     * @return Object Instance of the extension.
     * @since 1.5.25
     */
    function woocommerce_pre_orders_init()
    {
    }
    /**
     * Loads the classes for the integration with WooCommerce Blocks.
     */
    function woocommerce_pre_orders_load_block_classes()
    {
    }
}