<?php
/**
 * Generated stub declarations for woocommerce-shipping-multiple-addresses 4.4.6.
 * @see https://github.com/woocommerce/all-plugins/tree/stubs
 */

namespace {
    /**
     * WooCommerce Compatibility Utility Class
     *
     * The unfortunate purpose of this class is to provide a single point of
     * compatibility functions for dealing with supporting multiple versions
     * of WooCommerce.
     *
     * The recommended procedure is to rename this file/class, replacing "my plugin"
     * with the particular plugin name, so as to avoid clashes between plugins.
     * Over time we expect to remove methods from this class, using the current
     * ones directly, as support for older versions of WooCommerce is dropped.
     *
     * Current Compatibility: 2.1.x - 2.2
     *
     * @version 2.0
     */
    class WC_MS_Compatibility
    {
        /**
         * Gets and formats a list of cart item data + variations for display on the frontend.
         *
         * @param array $cart_item Cart item object.
         * @param bool  $flat Should the data be returned flat or in a list.
         * @return string
         */
        public static function get_item_data($cart_item, $flat = \false)
        {
        }
        /**
         * Transparently backport the `post_status` WP Query arg used by WC 2.2
         * for order statuses to the `shop_order_status` taxonomy query arg used by
         * WC 2.1
         *
         * @since 2.0.0
         * @param array $args WP_Query args.
         * @return array
         */
        public static function backport_order_status_query_args($args)
        {
        }
        /**
         * Get the user ID for an order
         *
         * @since 2.0.0
         * @param \WC_Order $order Order object.
         * @return int
         */
        public static function get_order_user_id(\WC_Order $order)
        {
        }
        /**
         * Get the user for an order
         *
         * @since 2.0.0
         * @param \WC_Order $order Order object.
         * @return bool|WP_User
         */
        public static function get_order_user(\WC_Order $order)
        {
        }
        /**
         * The the Order's status.
         *
         * @param WC_Order $order Order object.
         * @return string
         */
        public static function get_order_status(\WC_Order $order)
        {
        }
        /**
         * Backports the get_formatted() method to WC 2.1
         *
         * @since 2.0.0
         * @see WC_Order_Item_Meta::get_formatted()
         * @param \WC_Order_Item_Meta $item_meta order item meta class instance.
         * @param string              $hide_prefix exclude meta when key is prefixed with this, defaults to `_`.
         * @return array
         */
        public static function get_formatted_item_meta(\WC_Order_Item_Meta $item_meta, $hide_prefix = '_')
        {
        }
        /**
         * Get the full path to the log file for a given $handle
         *
         * @since 2.0.0
         * @param string $handle Log handle.
         *
         * @return string
         */
        public static function wc_get_log_file_path($handle)
        {
        }
        /**
         * Get the tax rates
         *
         * @param string $tax_class Tax class.
         *
         * @return array
         */
        public static function get_tax_rates($tax_class = '')
        {
        }
        /**
         * Calculate the tax of the given $price
         *
         * @param float $price Price value.
         * @param array $rate Rate in percentage.
         * @param bool  $price_includes_tax If price include tax or not.
         * @param bool  $suppress_rounding If need to suppress rounding.
         * @return array
         */
        public static function calc_tax($price, $rate, $price_includes_tax = \false, $suppress_rounding = \false)
        {
        }
        /**
         * Calculate the total tax amount
         *
         * @param array $taxes List of taxes.
         *
         * @return float
         */
        public static function get_tax_total($taxes)
        {
        }
        /**
         * Helper method to get the version of the currently installed WooCommerce
         *
         * @since 1.0.0
         * @return string woocommerce version number or null
         */
        private static function get_wc_version()
        {
        }
        /**
         * Returns true if the installed version of WooCommerce is 2.2 or greater
         *
         * @since 2.0.0
         * @return boolean true if the installed version of WooCommerce is 2.2 or greater
         */
        public static function is_wc_version_gte_2_2()
        {
        }
        /**
         * Returns true if the installed version of WooCommerce is greater than $version
         *
         * @since 1.0.0
         * @param string $version the version to compare.
         *
         * @return boolean true if the installed version of WooCommerce is > $version
         */
        public static function is_wc_version_gt($version)
        {
        }
        /**
         * Returns true if the installed version of WooCommerce is greater than equal $version
         *
         * @since 1.0.0
         * @param string $version the version to compare.
         *
         * @return boolean true if the installed version of WooCommerce is > $version
         */
        public static function is_wc_version_gte($version)
        {
        }
        /**
         * Get order property with compatibility check on order getter introduced
         * in WC 3.0.
         *
         * @since 3.3.23
         *
         * @param WC_Order $order Order object.
         * @param string   $prop  Property name.
         *
         * @return mixed Property value
         */
        public static function get_order_prop($order, $prop)
        {
        }
        /**
         * Get screen type for order metabox.
         *
         * @return string
         */
        public static function get_meta_box_screen()
        {
        }
    }
}
namespace WooCommerce\Multiple_Addresses {
    /**
     * Multiple Addresses Blocks Integration class for Multiple Shipping Addresses.
     */
    class Blocks_Integration implements \Automattic\WooCommerce\Blocks\Integrations\IntegrationInterface
    {
        /**
         * The name of the integration.
         *
         * @return string
         */
        public function get_name(): string
        {
        }
        /**
         * When called invokes any initialization/setup for the integratidon.
         */
        public function initialize()
        {
        }
        /**
         * Returns an array of script handles to enqueue in the frontend context.
         *
         * @return string[]
         */
        public function get_script_handles(): array
        {
        }
        /**
         * Returns an array of script handles to enqueue in the editor context.
         *
         * @return string[]
         */
        public function get_editor_script_handles(): array
        {
        }
        /**
         * An array of key, value pairs of data made available to the block on the client side.
         *
         * @return array
         */
        public function get_script_data(): array
        {
        }
        /**
         * Registers the scripts and styles for the integration.
         */
        public function register_scripts()
        {
        }
        /**
         * Register a script for the integration.
         *
         * @param string $handle Script handle.
         */
        protected function register_script(string $handle)
        {
        }
        /**
         * Get the file modified time as a cache buster if we're in dev mode.
         *
         * @param string $file Local path to the file.
         *
         * @return string The cache buster value to use for the given file.
         */
        protected function get_file_version(string $file): string
        {
        }
    }
    /**
     * Store API Extension.
     */
    class Store_API_Extension
    {
        /**
         * Global WC_Ship_Multiple variable.
         *
         * @var \WC_Ship_Multiple
         */
        private static \WC_Ship_Multiple $wcms;
        /**
         * Plugin Identifier, unique to each plugin.
         *
         * @var string
         */
        const IDENTIFIER = 'wc_shipping_multiple_addresses';
        /**
         * Bootstraps the class and hooks required data.
         *
         * @since 1.0.0
         */
        public static function init()
        {
        }
        /**
         * Registers the data into each endpoint.
         */
        public static function extend_store()
        {
        }
        /**
         * Update multiple shipping notes an delivery dates.
         *
         * @param array $post_data Shipping notes data from POST.
         */
        public static function update_shipping_notes($post_data)
        {
        }
        /**
         * Store API extension data callback.
         *
         * @return array
         */
        public static function data_callback()
        {
        }
        /**
         * Store API extension schema callback.
         *
         * @return array Registered schema.
         */
        public static function schema_callback()
        {
        }
        /**
         * Prepare the duplicate cart data.
         */
        public static function prepare_duplicate_cart_button()
        {
        }
        /**
         * Prepare multiple shipping data.
         *
         * @param array $packages Cart packages.
         */
        public static function prepare_multi_shipping_data($packages)
        {
        }
        /**
         * Formatting the shipping method label.
         *
         * @param object $method Shipping Method object.
         */
        public static function get_formatted_shipping_method_label($method)
        {
        }
        /**
         * Get shipping rates for the multiple address.
         *
         * @param array $package Current package.
         * @param array $packages the whole cart packages.
         *
         * @return array
         */
        public static function get_multi_addr_shipping_rates($package, $packages)
        {
        }
        /**
         * Prepare variables from the settings and static text or urls.
         */
        public static function prepare_settings_static_variable()
        {
        }
    }
}
namespace {
    /**
     * Class for managing address book.
     */
    class WC_MS_Address_Book
    {
        /**
         * Multiple address class.
         *
         * @var WC_Ship_Multiple.
         */
        private $wcms;
        /**
         * Class constructor.
         *
         * @param WC_Ship_Multiple $wcms Multiple address object.
         */
        public function __construct(\WC_Ship_Multiple $wcms)
        {
        }
        /**
         * Get the user's default address
         *
         * @param int $user_id User ID.
         *
         * @return array
         */
        public function get_user_default_address($user_id)
        {
        }
        /**
         * Validate multi shipping items to make sure it has the same quantity as the real cart items.
         *
         * @param array $items Multi shipping items.
         *
         * @return boolean
         */
        public function validate_items_quantity(array $items)
        {
        }
        /**
         * Save shipping addresses to the current cart session.
         */
        public function save_shipping_addresses()
        {
        }
        /**
         * Saving the shipping addresses to user meta.
         */
        public function save_account_shipping_addresses()
        {
        }
        /**
         * Validating the address fields.
         *
         * @param array $ship_fields Ship fields.
         *
         * @return array.
         */
        public function validate_addresses_book($ship_fields)
        {
        }
        /**
         * Save addresses book from POST.
         */
        public function save_addresses_book_from_post()
        {
        }
        /**
         * Delete address using ajax.
         */
        public function ajax_delete_address()
        {
        }
        /**
         * Get user addresses from user meta.
         *
         * @param WP_User $user User object.
         * @param boolean $include_default Include default address from WooCommerce.
         *
         * @return array.
         */
        public function get_user_addresses($user, $include_default = \true)
        {
        }
        /**
         * Get available user addresses by filtering the user addresses using avaiable shipping countries.
         *
         * @param WP_User $user            User object.
         * @param boolean $include_default Include default address from WooCommerce.
         *
         * @return array.
         */
        public function get_available_user_addresses($user, $include_default = \true)
        {
        }
        /**
         * Sorting the array.
         *
         * @param array    $existing_array Array value.
         * @param string   $on type of address field.
         * @param constant $order type of sorting.
         *
         * @return array Sorted array.
         */
        public function array_sort($existing_array, $on, $order = \SORT_ASC)
        {
        }
        /**
         * Save user addresses to account or session
         * Removes the default addresses and any duplicate addresses
         *
         * @param  integer $user_id    Customer user ID.
         * @param  array   $addresses  List of user addresses.
         */
        public function save_user_addresses($user_id, $addresses)
        {
        }
        /**
         * Check if the checkout address fields is eligible for saving or not.
         *
         * @return boolean.
         */
        public function is_checkout_address_eligible_for_saving()
        {
        }
        /**
         * Save checkout address value.
         *
         * @param int $user_id User ID.
         *
         * @return void.
         */
        public function save_checkout_address(int $user_id)
        {
        }
        /**
         * Check if user has saved shipping address or not.
         *
         * @param int $user_id User ID.
         *
         * @return boolean.
         */
        public function user_has_shipping_address(int $user_id)
        {
        }
        /**
         * Generate a unique key for an address
         *
         * @param  array $address Address field values.
         *
         * @return string Unique key
         */
        public function unique_address_key($address)
        {
        }
    }
    /**
     * Class for managing address book.
     */
    class WC_MS_Admin_User_Addresses_List_Table extends \WP_List_Table
    {
        /**
         * User object.
         *
         * @var WP_User
         */
        public $user;
        /**
         * Create and instance of this list table.
         *
         * @param WP_User $user User object.
         */
        public function __construct($user)
        {
        }
        /**
         * List of columns
         *
         * @return array
         */
        public function get_columns()
        {
        }
        /**
         * List of sortable columns
         *
         * @return array
         */
        public function get_sortable_columns()
        {
        }
        /**
         * Prepare address items.
         */
        public function prepare_items()
        {
        }
        /**
         * Display address column.
         *
         * @param array $item Row item.
         */
        public function column_address($item)
        {
        }
        /**
         * Create a row in table.
         *
         * @param array $item Row item.
         */
        public function single_row($item)
        {
        }
        /**
         * Removing table nav.
         *
         * @param string $which which side of the table.
         */
        public function display_tablenav($which)
        {
        }
    }
    /**
     * Class WC_MS_Admin.
     */
    class WC_MS_Admin
    {
        /**
         * WC_Ship_Multiple object.
         *
         * @var WC_Ship_Multiple
         */
        private $wcms;
        /**
         * Class constructor.
         *
         * @param WC_Ship_Multiple $wcms WC_Ship_Multiple object.
         */
        public function __construct(\WC_Ship_Multiple $wcms)
        {
        }
        /**
         * Add scripts on WC settings page.
         */
        public static function settings_scripts()
        {
        }
        /**
         * Add scripts on edit user page.
         */
        public static function edit_user_scripts()
        {
        }
        /**
         * Add shipping page settings.
         *
         * @param array $settings List of settings.
         *
         * @return array
         */
        public function shipping_settings($settings)
        {
        }
        /**
         * Add account settings.
         *
         * @param array $settings List of settings.
         *
         * @return array
         */
        public function account_settings($settings)
        {
        }
        /**
         * Show shipping address notice.
         */
        public function show_shipping_address_notices()
        {
        }
        /**
         * Add all shipping addresses link on user page.
         *
         * @param WP_User $user User object.
         */
        public function add_customer_shipping_addresses_link($user)
        {
        }
        /**
         * Render a table for user addresses.
         *
         * @param WP_User $user User object.
         */
        public function render_user_addresses_table($user)
        {
        }
        /**
         * Delete user shipping address.
         */
        public function delete_user_shipping_address()
        {
        }
        /**
         * Edit user shipping address.
         */
        public function edit_user_shipping_address()
        {
        }
    }
    /**
     * Class WC_MS_API.
     * To be able adding a shipping packages using rest API.
     */
    class WC_MS_API
    {
        /**
         * Class constructor.
         */
        public function __construct()
        {
        }
        /**
         * API filters
         *
         * @since 3.3.23
         * @return void
         */
        public function init_api_filters()
        {
        }
        /**
         * Add shipping packages to data.
         *
         * @param WC_Order $order Order object.
         *
         * @since 3.3.23
         *
         * @return array
         */
        private function calculate_shipping_packages($order)
        {
        }
        /**
         * Add shipping packages to the order response array
         *
         * @param WP_REST_Response $response   The response object.
         * @param WC_Data          $obj        Order object.
         *
         * @return WP_REST_Response $data
         */
        public function add_shipping_packages($response, $obj)
        {
        }
    }
    /**
     * Class WC_MS_Cart.
     */
    class WC_MS_Cart
    {
        /**
         * WC_Ship_Multiple object.
         *
         * @var WC_Ship_Multiple
         */
        private $wcms;
        /**
         * Class constructor.
         *
         * @param WC_Ship_Multiple $wcms WC_Ship_Multiple object.
         */
        public function __construct(\WC_Ship_Multiple $wcms)
        {
        }
        /**
         * Duplicating cart after the button is hit.
         */
        public function duplicate_cart_post()
        {
        }
        /**
         * Removes the shipping calculator on the cart page when we have multiple shipping addresses.
         */
        public function remove_shipping_calculator()
        {
        }
        /**
         * Show duplicate cart button if it's enabled.
         */
        public function show_duplicate_cart_button()
        {
        }
        /**
         * Clean WCMS session when cart is updated.
         */
        public function cart_updated()
        {
        }
        /**
         * Count how many items have addresses set in session.
         *
         * @return array Array with 'session_count' and 'total_items' keys.
         */
        private function count_session_items(): array
        {
        }
        /**
         * Validate that session data matches current cart state.
         *
         * @return bool True if session is valid, false otherwise.
         */
        private function validate_session_data(): bool
        {
        }
        /**
         * Duplicating cart items.
         *
         * @param int $multiplier Duplication multiplier.
         *
         * @return array
         */
        public function duplicate_cart($multiplier = 1)
        {
        }
        /**
         * Load WooCommerce Cart files.
         */
        public function load_cart_files()
        {
        }
        /**
         * Check if the contents of the current cart are valid for multiple shipping
         *
         * To pass, there must be 1 or more items in the cart that passes the @see WC_Cart::needs_shipping() test.
         * If there is only 1 item in the cart, it must have a quantity of 2 or more. And child items
         * from Bundles and Composite Products are excluded from the count.
         *
         * This method will automatically return false if the only available shipping method is Local Pickup
         *
         * @return bool
         */
        public function cart_is_eligible_for_multi_shipping()
        {
        }
        /**
         * Check if multiple addresses have been set and are valid.
         *
         * @return bool
         */
        public function cart_has_multi_shipping()
        {
        }
    }
    /**
     * Class WC_MS_Checkout.
     */
    class WC_MS_Checkout
    {
        /**
         * Main class instance.
         *
         * @var WC_Ship_Multiple
         */
        private $wcms;
        /**
         * Constructor.
         *
         * @param WC_Ship_Multiple $wcms Main class instance.
         */
        public function __construct(\WC_Ship_Multiple $wcms)
        {
        }
        /**
         * Flush the cache when coupon is applied or removed.
         */
        public function coupon_flush_cache()
        {
        }
        /**
         * Prevent updating customer data if it's using saved address.
         *
         * @param bool $need_update Whether need to update customer data or not.
         *
         * return Int.
         */
        public function maybe_prevent_update_customer_data($need_update)
        {
        }
        /**
         * Save the other customer data if it's using saved address.
         *
         * @param Int   $customer_id Customer ID or User ID.
         * @param Array $data        Post data.
         */
        public function maybe_save_customer_data($customer_id, $data)
        {
        }
        /**
         * Actions for order item meta.
         *
         * @since 3.3.23
         * @return void
         */
        public function init_order_meta()
        {
        }
        /**
         * This method checks if free shipping is available for the current package,
         * depending on min_amount/requires.
         *
         * @param bool               $is_available Is free shipping available.
         * @param array              $package Cart package.
         * @param WC_Shipping_Method $shipping_method Shipping method object.
         *
         * @return bool
         */
        public function free_shipping_is_available_for_package($is_available, $package, $shipping_method)
        {
        }
        /**
         * Remove multishipping from shipping methods.
         *
         * @param array $rates Shipping rates.
         *
         * @return array
         */
        public function remove_multishipping_from_methods($rates)
        {
        }
        /**
         * Display multiple address button on checkout page.
         */
        public function display_set_addresses_button()
        {
        }
        /**
         * Save billing address fields.
         */
        public function save_billing_fields()
        {
        }
        /**
         * Render user addresses dropdown.
         */
        public function render_user_addresses_dropdown()
        {
        }
        /**
         * Store original cart item key
         *
         * @param  WC_Order_Item_Product $item          Order item.
         * @param  string                $cart_key      Cart item key.
         */
        public function store_item_key($item, $cart_key)
        {
        }
        /**
         * Calculating tax and adding order meta when processing the checkout for legacy checkout.
         *
         * @param int|WC_Order $new_order Either Order ID or WC_Order object.
         */
        public function legacy_checkout_process($new_order)
        {
        }
        /**
         * Calculating tax and adding order meta when processing the checkout for WC Blocks.
         *
         * @param int|WC_Order $new_order Either Order ID or WC_Order object.
         */
        public function blocks_checkout_process($new_order)
        {
        }
        /**
         * Calculating tax and adding order meta when processing the checkout.
         *
         * @param int|WC_Order $new_order Either Order ID or WC_Order object.
         * @param boolean      $is_wc_blocks Is using WC Blocks or not.
         */
        public function checkout_process($new_order, $is_wc_blocks = \false)
        {
        }
        /**
         * Check if a pickup method is selected for the order.
         *
         * @param WC_Order $order The order object.
         *
         * @return bool True if pickup method is selected.
         * @since 4.3.0
         */
        private function is_pickup_method_selected(\WC_Order $order): bool
        {
        }
        /**
         * Add temporary shipping address to bypass the WC Store API validation in `Automattic\WooCommerce\StoreApi\Utilities\OrderController::validate_address_fields()`.
         * Context: https://github.com/woocommerce/woocommerce/blob/2a0ad34d999417bbce78aaa490b869a2368d95f8/plugins/woocommerce/src/StoreApi/Utilities/OrderController.php#L389-L398
         *
         * @param \WC_Order        $order Order object.
         * @param \WP_REST_Request $request Full details about the request.
         */
        public function add_temporary_shipping_address_on_parent($order, $request)
        {
        }
        /**
         * Remove temporary shipping address after the shipping address validation has been bypassed.
         *
         * @param \WC_Order $order Order object.
         */
        public function remove_temporary_shipping_address_on_parent($order)
        {
        }
        /**
         * Checkout validation for legacy checkout.
         *
         * @param array $post POST data.
         */
        public function legacy_checkout_validation($post)
        {
        }
        /**
         * Checkout validation for WC checkout blocks.
         *
         * @param array $post POST data.
         */
        public function blocks_checkout_validation($post)
        {
        }
        /**
         * Making sure all multiple shipping package has address on checkout.
         *
         * @param array   $post         POST data.
         * @param boolean $is_wc_blocks Whether is WC Blocks or not.
         * @throws \Automattic\WooCommerce\StoreApi\Exceptions\RouteException When a package has no shipping address on the Blocks checkout path.
         */
        public function checkout_validation($post, $is_wc_blocks = \false)
        {
        }
        /**
         * Reject invalid shipping dates on either checkout path.
         *
         * Legacy dates arrive in $_POST['shipping_date'] (m/d/Y); blocks dates live in
         * the wcms_delivery_dates session (Y-m-d). Empty values are allowed (optional).
         *
         * @param bool $is_wc_blocks Whether this is the blocks/Store API path.
         * @throws \Automattic\WooCommerce\StoreApi\Exceptions\RouteException When a blocks-path date is invalid.
         */
        private function validate_shipping_dates($is_wc_blocks)
        {
        }
        /**
         * Add order item meta.
         *
         * @param WC_Order_Item_Meta $meta Order item meta object.
         * @param array              $values Package content.
         */
        public function add_item_meta($meta, $values)
        {
        }
        /**
         * Update order data on checkout page.
         *
         * @param array $post POST data.
         */
        public function update_order_review($post)
        {
        }
        /**
         * Return packages with subscription product only.
         *
         * @param  array $packages array of packages.
         * @return array $packages array of packages that contain subscription product.
         *
         * @since 3.6.28
         */
        private function get_shippable_subscription_product_packages($packages)
        {
        }
        /**
         * Check the cart if it only contains a recurring product.
         *
         * @param array|WC_Cart $cart Cart object.
         *
         * @return boolean
         *
         * @since 3.6.28
         */
        private function is_recurring_cart($cart)
        {
        }
        /**
         * Get non WC_Subscriptions_Product items from cart.
         *
         * @param WC_Cart $cart Cart object.
         *
         * @return WC_Cart Cart object without subscriptions product in the cart content.
         *
         * @since 3.6.28
         */
        private function get_cart_non_subscription_item($cart)
        {
        }
        /**
         * Calculate multiple shipping totals on cart object.
         *
         * @param WC_Cart $cart Cart object.
         */
        public function calculate_totals($cart)
        {
        }
        /**
         * Get discounted price.
         *
         * @param WC_Cart $cart Cart object.
         * @param array   $package_content Package content value.
         *
         * @return float
         */
        private function get_discounted_price($cart, $package_content)
        {
        }
        /**
         * Calculate taxes on multiple shipping.
         *
         * @param WC_Cart $cart Cart object.
         * @param array   $packages Cart packages.
         * @param boolean $return_packages Function should return the value as cart package when `true`.
         *
         * @return array|WC_Cart
         */
        public function calculate_taxes($cart = \null, $packages = \null, $return_packages = \false)
        {
        }
        /**
         * Apply extra data ( notes, dates, gifts ) for WC blocks.
         * The data will be retrieved from the session.
         *
         * @param array   $packages  Cart packages.
         * @param boolean $is_return Is return the package value or not.
         *
         * @return array.
         */
        public function apply_extra_data_to_package($packages, $is_return)
        {
        }
        /**
         * Get the coupons from the cart.
         *
         * @param WC_Cart $cart Cart object.
         *
         * @since 3.6.34
         * @return array
         */
        public function get_coupons_from_cart($cart)
        {
        }
        /**
         * Sort coupons so discounts apply consistently across installs.
         *
         * In order of priority;
         *  - sort param
         *  - usage restriction
         *  - coupon value
         *  - ID
         *
         * @param WC_Coupon $a Coupon object.
         * @param WC_Coupon $b Coupon object.
         *
         * @since 3.6.34
         * @return int
         */
        public function sort_coupons_callback($a, $b)
        {
        }
        /**
         * Recalculate the discount tax rates based on package destination.
         *
         * @param WC_Cart $cart Cart object.
         * @param array   $packages Cart packages.
         *
         * @since 3.6.34
         * @return array
         */
        public function calculate_coupon_discount_tax_amounts($cart, $packages)
        {
        }
        /**
         * Apply rounding to an array of taxes before summing.
         *
         * @param array $item_taxes Item taxes.
         * @return array
         */
        public function round_line_taxes($item_taxes)
        {
        }
        /**
         * Apply rounding to an array of shipping taxes before summing.
         *
         * @param array $shipping_taxes Shipping taxes.
         *
         * @return array
         */
        public function round_shipping_taxes($shipping_taxes)
        {
        }
        /**
         * Apply rounding to item subtotal before summing.
         *
         * @since 3.9.0
         * @param float $value Item subtotal value.
         * @return float
         */
        public function round_item_subtotal($value)
        {
        }
        /**
         * This method manipulate the subtotal item value for price with tax included.
         *
         * @param float  $product_subtotal Product subtotal in cart.
         * @param array  $cart_item Cart item.
         * @param string $cart_item_key Cart item key.
         *
         * @return float
         */
        public function subtotal_item_include_taxes($product_subtotal, $cart_item, $cart_item_key)
        {
        }
        /**
         * This method get item tax rates based on package destination.
         *
         * @param array $item Cart item.
         * @param array $package Cart package.
         *
         * @since 3.6.34
         * @return array
         */
        public function get_item_tax_rates($item, $package)
        {
        }
        /**
         * Create order shipments.
         *
         * @param int|WC_Order $new_order Either Order ID or Order object.
         */
        public function create_order_shipments($new_order)
        {
        }
        /**
         * Prevent updating customer data when the cart has multi shipping.
         *
         * @param boolean $update Update.
         *
         * @return boolean
         */
        public function prevent_customer_data_update($update)
        {
        }
        /**
         * Store shipping address on certain condition.
         *
         * @param int|WC_Customer $customer Either customer object or customer ID.
         */
        public function maybe_store_shipping_address($customer)
        {
        }
        /**
         * Set the shipping methods from WCMS session when shipping rate is selected from store API.
         *
         * @param string|null      $package_id The sanitized ID of the package being updated. Null if all packages are being updated.
         * @param string           $rate_id The sanitized chosen rate ID for the package.
         * @param \WP_REST_Request $request Full details about the request.
         */
        public function select_shipping_rate_on_store_api($package_id, $rate_id, $request)
        {
        }
        /**
         * Set the shipping methods from WCMS session when customer is being updated from store API.
         *
         * @param \WC_Customer     $customer Customer object.
         * @param \WP_REST_Request $request Full details about the request.
         */
        public function update_customer_on_store_api($customer, $request)
        {
        }
        /**
         * Set the shipping methods on WCMS session for WC blocks.
         */
        public function set_shipping_methods_on_block()
        {
        }
        /**
         * Restore default shipping address.
         *
         * @param int|WC_Order $new_order Either order object or order ID.
         */
        public function restore_customer_default_data($new_order)
        {
        }
        /**
         * Force to use billing address when WCMS is active.
         * It needs to force it in order to hide the shipping address on WC Blocks.
         *
         * @param mixed $value  Option value.
         * @param mixed $option Option.
         * @param mixed $default_value Option default value.
         */
        public function force_use_billing_address($value, $option, $default_value)
        {
        }
        /**
         * Calculate order taxes only for WC blocks.
         *
         * @param boolean  $and_taxes And calculate taxes.
         * @param WC_Order $order Order object.
         *
         * @throws \Automattic\WooCommerce\StoreApi\Exceptions\RouteException When cart cannot be loaded.
         */
        public function calculate_order_taxes_for_wc_blocks($and_taxes, $order)
        {
        }
        /**
         * Clear session for old cart/checkout page.
         */
        public function legacy_clear_session()
        {
        }
        /**
         * Clear session for WC cart/checkout blocks.
         */
        public function blocks_clear_session()
        {
        }
        /**
         * Reset multiple shipping address session.
         */
        public function reset_multiple_shipping_address()
        {
        }
        /**
         * Restore default shipping address.
         *
         * @param WC_Customer $customer Customer object.
         */
        public function restore_default_shipping_address($customer)
        {
        }
        /**
         * Clear session data if pickup is selected.
         */
        public function clear_session_for_pickup_before_order_creation()
        {
        }
    }
    /**
     * WC_MS_Front class.
     */
    class WC_MS_Front
    {
        /**
         * WC_Ship_Multiple object.
         *
         * @var WC_Ship_Multiple
         */
        private $wcms;
        /**
         * Country
         *
         * @var string
         */
        private $country;
        /**
         * Class constructor.
         *
         * @param WC_Ship_Multiple $wcms WC_Ship_Multiple object.
         */
        public function __construct(\WC_Ship_Multiple $wcms)
        {
        }
        /**
         * Load account addresses by adding a filter and action hooks.
         */
        public function load_account_addresses()
        {
        }
        /**
         * Add woocommerce and woocommerce-page classes to the body tag of WCMS pages
         *
         * @param array $classes Registered body css class.
         *
         * @return array
         */
        public function output_body_class($classes)
        {
        }
        /**
         * Enqueue scripts and styles for the frontend
         */
        public function front_scripts()
        {
        }
        /**
         * Address Validation scripts
         */
        public function enqueue_address_validation_scripts()
        {
        }
        /**
         * Prints the email table of items and their shipping addresses.
         *
         * @param WC_Order $order Order object or order ID.
         * @param boolean  $sent_to_admin Whether it is sent to admin or not.
         * @param boolean  $plain_text Whether the format is plain or HTML.
         */
        public function email_order_item_addresses($order, $sent_to_admin, $plain_text)
        {
        }
        /**
         * Prints the table of items and their shipping addresses.
         *
         * @param int|WC_Order $order_id Order ID or order object.
         */
        public function list_order_item_addresses($order_id)
        {
        }
        /**
         * Get account address labels.
         *
         * @param array $labels Address labels.
         * @param int   $customer_id Customer ID.
         *
         * @return array
         */
        public function account_address_labels($labels, $customer_id)
        {
        }
        /**
         * Get account address in formatted array.
         *
         * @param array  $address Current address.
         * @param int    $customer_id Customer ID.
         * @param string $address_id Address ID.
         *
         * @return array
         */
        public function account_address_formatted($address, $customer_id, $address_id)
        {
        }
        /**
         * Edit the address field value.
         *
         * @param mixed  $value Field value.
         * @param string $key Field key.
         * @param string $load_address Load address.
         *
         * @return mixed
         */
        public function edit_address_field_value($value, $key, $load_address)
        {
        }
        /**
         * Save and update a billing or shipping address if the
         * form was submitted through the user account page.
         * Copied from WC_Form_Handler::save_address and modified to save to address book
         */
        public function save_address()
        {
        }
        /**
         * Generate inline scripts for wp_footer
         */
        public function inline_scripts()
        {
        }
        /**
         * Add a delete address button on the edit address page
         */
        public function delete_address_button()
        {
        }
        /**
         * Handle the delete address action
         */
        public function delete_address_action()
        {
        }
        /**
         * Add address button on my account page
         */
        public function add_address_button()
        {
        }
        /**
         * Init address fields
         */
        public function init_address_fields()
        {
        }
        /**
         * Override address fields with country specific ones.
         *
         * @param array  $address_fields Address fields.
         * @param string $country Address country.
         *
         * @return string
         */
        public function country_address_fields($address_fields, $country)
        {
        }
        /**
         * Override address country field (to show correct list of states).
         *
         * @param mixed  $value Filter value.
         * @param string $input Input field name.
         *
         * @return mixed
         */
        public function country_address_value($value, $input)
        {
        }
        /**
         * Helper function to get address country
         * Saves it in the class to prevent multiple lookups
         */
        public function get_address_country()
        {
        }
    }
    /**
     * Class WC_MS_Gifts.
     */
    class WC_MS_Gifts
    {
        /**
         * Main class instance.
         *
         * @var WC_Ship_Multiple
         */
        private $wcms;
        /**
         * Constructor.
         *
         * @param WC_Ship_Multiple $wcms Main class instance.
         */
        public function __construct(\WC_Ship_Multiple $wcms)
        {
        }
        /**
         * Returns TRUE if the Gift Packages setting is enabled
         *
         * @return bool
         */
        public static function is_enabled()
        {
        }
        /**
         * Show the gift checkbox on the shipping packages blocks.
         *
         * @param string $loop Array key.
         *
         * @return void
         */
        public static function render_gift_form($loop)
        {
        }
        /**
         * Modify the 'wcms_packages' session data to attach gift data from POST
         * and at the same time, populate the WC_Gift_Checkout::gifts array
         *
         * @param array $packages Shipping packages to modify.
         *
         * @return array
         */
        public static function apply_gift_data_to_packages($packages)
        {
        }
        /**
         * Store gift data.
         *
         * @param int|WC_Order $new_order Either order ID or order object.
         *
         * @return void
         */
        public static function store_order_gift_data($new_order)
        {
        }
        /**
         * Render the 'This is a Gift' option in the shipping address form
         */
        public static function shipping_address_gift_form()
        {
        }
        /**
         * Mark an order as a gift.
         *
         * @param int|WC_Order $new_order Either order ID or order object.
         *
         * @return void.
         */
        public static function store_shipping_address_gift_data($new_order)
        {
        }
        /**
         * Render gift data for shipping address.
         *
         * @param \WC_Order $order Order object.
         *
         * @return void
         */
        public static function render_order_shipping_gift_data($order)
        {
        }
        /**
         * Render gift data.
         *
         * @param \WC_Order $order Order object.
         * @param array     $package Package to check.
         * @param string    $package_index Package index.
         *
         * @return void.
         */
        public static function render_gift_data($order, $package, $package_index)
        {
        }
    }
    /**
     * WC_MS_Notes class.
     */
    class WC_MS_Notes
    {
        /**
         * WC_Ship_Multiple object.
         *
         * @var WC_Ship_Multiple
         */
        private $wcms;
        /**
         * Class constructor.
         *
         * @param WC_Ship_Multiple $wcms WC_Ship_Multiple object.
         */
        public function __construct(\WC_Ship_Multiple $wcms)
        {
        }
        /**
         * Add datepicker settings to the WCMS JS array
         *
         * @param array $wcms_js WCMS JS variable.
         *
         * @return array
         */
        public static function add_datepicker_variables($wcms_js)
        {
        }
        /**
         * Whether the checkout datepicker feature is enabled.
         *
         * @return bool
         */
        public static function is_datepicker_enabled()
        {
        }
        /**
         * Effective datepicker validation settings (canonicalized).
         *
         * @return array{valid_days:int[],excluded_dates:string[]}
         */
        public static function get_datepicker_settings()
        {
        }
        /**
         * Parse a submitted shipping date strictly into a date-only object.
         *
         * @param string $value     Raw submitted value.
         * @param bool   $is_blocks Whether the value came from the blocks/Store API path.
         * @return DateTimeImmutable|null Midnight (site tz) on the given day, or null if invalid.
         */
        public static function normalize_shipping_date($value, $is_blocks)
        {
        }
        /**
         * Validate a submitted shipping date against the configured rules.
         *
         * Empty is allowed (the field is optional). A non-empty value must be a real
         * date, not in the past, on a valid weekday, and not an excluded date.
         *
         * @param string $value     Raw submitted value.
         * @param bool   $is_blocks Whether the value came from the blocks/Store API path.
         * @return bool
         */
        public static function validate_shipping_date($value, $is_blocks)
        {
        }
        /**
         * Store the notes in the checkout form immediately after they are entered
         */
        public static function checkout_scripts()
        {
        }
        /**
         * Show the note checkbox on the shipping packages blocks.
         *
         * @param int   $loop Loop index.
         * @param array $package Cart package.
         */
        public static function render_note_form($loop, $package)
        {
        }
        /**
         * Modify the 'wcms_packages' session data to attach notes from POST.
         *
         * @param array $packages Cart packages.
         *
         * @return array
         */
        public static function apply_notes_to_packages($packages)
        {
        }
        /**
         * Store multiple shipping notes on order.
         *
         * @param int|WC_Order $new_order Either Order ID or Order object.
         */
        public static function store_order_notes($new_order)
        {
        }
        /**
         * Render notes on multiple shipping address.
         *
         * @param WC_Order $order Order object.
         * @param array    $package Cart package.
         */
        public static function render_notes($order, $package)
        {
        }
        /**
         * Render dates on multiple shipping address.
         *
         * @param WC_Order $order Order object.
         * @param array    $package Cart package.
         */
        public static function render_dates($order, $package)
        {
        }
    }
    /**
     * WC_MS_Order_Shipment class.
     */
    class WC_MS_Order_Shipment
    {
        /**
         * WC_Ship_Multiple object.
         *
         * @var WC_Ship_Multiple
         */
        private $wcms;
        /**
         * Class constructor.
         *
         * @param WC_Ship_Multiple $wcms WC_Ship_Multiple object.
         */
        public function __construct(\WC_Ship_Multiple $wcms)
        {
        }
        /**
         * Child order should not reducing the product stock.
         * This method is to prevent the order to reducing the stock.
         *
         * @param boolean  $can_reduce Flag whether can reduce the stock or not.
         * @param WC_Order $order Order object.
         *
         * @return boolean
         */
        public function prevent_order_to_update_stock($can_reduce, $order)
        {
        }
        /**
         * Creates a single shipment.
         *
         * @param array $package WCMS package.
         * @param int   $package_index Package index.
         * @param int   $order_id Order ID.
         *
         * @return int|mixed|WP_Error
         * @throws Exception When unable to create a product in the shipment.
         */
        public function create_from_package($package, $package_index, $order_id)
        {
        }
        /**
         * Create a new Order Shipment
         *
         * @param array $args Arguments to create an order shipment.
         *
         * @return int|WP_Error
         */
        public function create_shipment($args)
        {
        }
        /**
         * Manipulate sending new order email.
         *
         * @param bool     $is_enabled Flag for email being enabled or not.
         * @param WC_Order $order Order object.
         */
        public function order_shipment_not_send_email($is_enabled, $order)
        {
        }
        /**
         * Update shipment order post to inherit order status.
         *
         * @param int    $order_id ID of the order post.
         * @param string $old_status Old status of the order.
         * @param string $new_status New status of the order.
         */
        public function inherit_order_status($order_id, $old_status, $new_status)
        {
        }
        /**
         * Get order shipment IDs by order ID.
         *
         * @param int $order_id ID of the order object.
         *
         * @return int[]
         */
        public static function get_by_order($order_id)
        {
        }
        /**
         * Get order shipments by order ID.
         *
         * @param int $order_id ID of the order object.
         *
         * @return WC_MS_Order_Type_Order_Shipment[]
         */
        public static function get_shipment_objects_by_order($order_id)
        {
        }
    }
    /**
     * Class WC_MS_Order_Type_Order_Shipment
     */
    class WC_MS_Order_Type_Order_Shipment extends \WC_Order
    {
        /**
         * Get internal type (post type.)
         *
         * @return string
         */
        public function get_type()
        {
        }
        /**
         * Set order key.
         *
         * @param string $value Max length 37 chars.
         * @throws WC_Data_Exception Throws exception when invalid data is found.
         */
        public function set_order_key($value)
        {
        }
    }
    /**
     * WC_MS_Order class.
     */
    class WC_MS_Order
    {
        /**
         * WC_Ship_Multiple object.
         *
         * @var WC_Ship_Multiple
         */
        private $wcms;
        /**
         * Class constructor.
         *
         * @param WC_Ship_Multiple $wcms WC_Ship_Multiple object.
         */
        public function __construct(\WC_Ship_Multiple $wcms)
        {
        }
        /**
         * Update package status.
         *
         * @return void
         */
        public function update_package_status()
        {
        }
        /**
         * Update package status on completed order.
         *
         * @param int $order_id Order ID.
         * @return void
         */
        public function update_package_on_completed_order($order_id)
        {
        }
        /**
         * Manipulate the order details value if it has multiple addresses.
         *
         * @param array    $order_details Order details.
         * @param WC_Order $order Order object.
         *
         * @return array
         */
        public function update_preview_order_details($order_details, $order)
        {
        }
        /**
         * Generate address map url for package destination.
         *
         * @param array    $package Package.
         * @param WC_Order $order   Order object.
         *
         * @return string
         */
        public static function generate_address_map_url($package, $order)
        {
        }
        /**
         * Generate formatted shipping address for multiple addresses.
         *
         * @param WC_Order $order   Order object.
         *
         * @return string
         */
        public function generate_formatted_multiple_addresses($order)
        {
        }
        /**
         * Order page shipping address override.
         *
         * @param \WC_Order $order Order object.
         * @return void
         */
        public function override_order_shipping_address($order)
        {
        }
        /**
         * Get shipping address data from cart package.
         *
         * @param array $package Array of information about the package.
         *
         * @return string
         */
        public function get_package_shipping_address($package)
        {
        }
        /**
         * Get products out of the cart package.
         *
         * @param array    $products Array of products.
         * @param WC_Order $order Order object.
         *
         * @return array
         */
        public function get_package_products($products, $order)
        {
        }
        /**
         * Get all the order items (and generate a unique key for each)
         *
         * @param WC_Order $order WC Order object.
         *
         * @return array
         */
        public function get_cart_item_keys($order)
        {
        }
        /**
         * Display shipping address in email.
         *
         * @param WC_Order $order Current order.
         * @param bool     $email Flag to check whether the display is for email or not.
         * @param bool     $plain_text Flag to check if the email is using plain text or not.
         *
         * @return void
         */
        public function display_order_shipping_addresses($order, $email = \false, $plain_text = \false)
        {
        }
        /**
         * Display shipping address in plain email.
         *
         * @param array    $packages Array of packages.
         * @param WC_Order $order Current order object.
         *
         * @return void
         */
        public function display_order_shipping_addresses_plain_email($packages, $order)
        {
        }
        /**
         * Show custom column for multiple address.
         *
         * @param array        $column List of column in the admin table.
         * @param int|WC_Order $post_id_or_order Post ID or order object.
         */
        public function show_multiple_addresses_line($column, $post_id_or_order)
        {
        }
        /**
         * Add meta box in the order admin page.
         *
         * @param string           $post_type Type of the post.
         * @param WP_Post|WC_Order $post_or_order_object Either WP_Post or WC_Order object.
         */
        public function order_meta_box($post_type, $post_or_order_object)
        {
        }
        /**
         * Enqueue admin scripts.
         */
        public function admin_enqueue_scripts()
        {
        }
        /**
         * Display a shipping package inside order meta box.
         *
         * @param WC_Order|WP_Post $post_or_order_object Either post or order object.
         */
        public function packages_meta_box($post_or_order_object)
        {
        }
        /**
         * Display shipping package address.
         *
         * @param WC_Order $order Order object.
         * @param array    $package Cart package.
         * @param int      $index Package index.
         * @param boolean  $edit Check if the address is editable.
         */
        public static function display_shipping_package_address($order, $package, $index, $edit = \false)
        {
        }
        /**
         * Update order addresses.
         *
         * @param int $post_id Order ID.
         * @return void
         */
        public function update_order_addresses($post_id)
        {
        }
        /**
         * Update order taxes.
         *
         * @param int   $order_id Order ID.
         * @param array $items Order items.
         * @return void
         */
        public function update_order_taxes($order_id, $items)
        {
        }
        /**
         * Set order items taxes.
         *
         * @param array    $items Order items.
         * @param WC_Order $order Order object.
         * @return array
         */
        public function order_item_taxes($items, $order)
        {
        }
        /**
         * Load a custom template body for orders with multishipping
         *
         * @param string   $template PIP Template path.
         * @param WC_Order $order Order object.
         *
         * @return string $template
         */
        public function pip_template_body($template, $order)
        {
        }
        /**
         * Send package email.
         *
         * @param int $order_id Order ID.
         * @param int $package_index Loop index.
         * @return void
         */
        public static function send_package_email($order_id, $package_index)
        {
        }
        /**
         * Get default email body.
         *
         * @return string
         */
        public static function get_default_email_body()
        {
        }
        /**
         * Render order products table.
         *
         * @param WC_Order $order Order object.
         * @param int      $idx Package index.
         * @return string
         */
        public static function render_products_table($order, $idx)
        {
        }
        /**
         * Render order addresses table.
         *
         * @param WC_Order $order Order object.
         * @param int      $index Package index.
         * @return string
         */
        public static function render_addresses_table($order, $index)
        {
        }
        /**
         * Gets and formats a list of item meta for display (fallback function for when we can't find order item)
         *
         * @param array $item Cart item.
         *
         * @return string
         */
        public static function get_item_meta($item)
        {
        }
        /**
         * Hides metadata.
         *
         * @param  array $hidden Hidden meta strings.
         * @return array Modified hidden meta strings
         */
        public function hidden_order_item_meta($hidden)
        {
        }
        /**
         * Hide shipping address if order has multiple address.
         *
         * @param bool     $needs_shipping Whether the order need shipping or not.
         * @param array    $hide List of shipping method that will hide the shipping address.
         * @param WC_Order $order Order object.
         *
         * @return bool
         */
        public function manipulate_needs_shipping($needs_shipping, $hide, $order)
        {
        }
    }
    /**
     * Class WC_MS_Packages.
     */
    class WC_MS_Packages
    {
        /**
         * WC_Ship_Multiple object.
         *
         * @var WC_Ship_Multiple
         */
        private $wcms;
        /**
         * Class constructor.
         *
         * @param WC_Ship_Multiple $wcms WC_Ship_Multiple object.
         */
        public function __construct(\WC_Ship_Multiple $wcms)
        {
        }
        /**
         * Drop the shipping rates for a package whose destination the store cannot ship to.
         *
         * Checkout is already refused for such a package, and the multi-shipping panel says
         * which field is missing, but WooCommerce's own shipping options control kept listing
         * selectable rates for it -- so the shopper was offered a price for a shipment that
         * would then be rejected.
         *
         * Scoped to packages this plugin split out. A normal single-address checkout must keep
         * its rates: there, an address that is still being filled in is expected, and removing
         * the rates would break every store that requires a field the shopper has not reached.
         *
         * @param array $rates   Shipping rates for the package.
         * @param array $package Cart package.
         *
         * @return array
         */
        public function hide_rates_for_unusable_address($rates, $package)
        {
        }
        /**
         * Filter the shipping packages to break it up into multiple packages
         *
         * @param array $packages Cart packages.
         *
         * @return array
         */
        public function shipping_packages($packages)
        {
        }
        /**
         * Stand in the customer's own address for any package that has no address at all.
         *
         * Only a package with no address data is filled in. A destination the shopper chose is
         * left alone even when it is incomplete, so get_missing_address_fields() can name what
         * is missing and the rate filter can withhold rates for it. Replacing an incomplete
         * destination here would silently ship those items to the customer's own address.
         *
         * "Has no address" is not the same as "is not set": an item the shopper never assigned
         * still arrives with a destination array whose every field is an empty string.
         *
         * @param array $packages Cart packages.
         *
         * @return array modified $packages
         */
        public function normalize_packages_address($packages)
        {
        }
        /**
         * Return a default address based on the customer information
         *
         * @return array default address
         */
        public function get_default_shipping_address()
        {
        }
    }
    /**
     * Class WC_MS_Post_Types.
     */
    class WC_MS_Post_Types
    {
        /**
         * Initiating.
         */
        public static function init()
        {
        }
        /**
         * Register the post type for order shipment.
         */
        public static function register_post_types()
        {
        }
    }
    /**
     * Class WC_MS_Privacy.
     */
    class WC_MS_Privacy extends \WC_Abstract_Privacy
    {
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Returns a list of orders that are using multiple shipping.
         *
         * @param string $email_address Email address.
         * @param int    $page Page number in pagination.
         *
         * @return array WP_Post
         */
        protected function get_s2ma_orders($email_address, $page)
        {
        }
        /**
         * Gets the message of the privacy to display.
         */
        public function get_privacy_message()
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
         * Finds and exports customer data by email address.
         *
         * @since 3.4.0
         * @param string $email_address The user email address.
         * @param int    $page  Page.
         * @return array An array of personal data in name value pairs
         */
        public function customer_data_exporter($email_address, $page)
        {
        }
        /**
         * Finds and erases customer data by email address.
         *
         * @since 3.4.0
         * @param string $email_address The user email address.
         * @param int    $page  Page.
         * @return array An array of personal data in name value pairs
         */
        public function customer_data_eraser($email_address, $page)
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
         *
         * @return array
         */
        protected function maybe_handle_order($order)
        {
        }
    }
    /**
     * Class WC_MS_Shipping_Easy.
     */
    class WC_MS_Shipping_Easy
    {
        /**
         * Class constructor.
         */
        public function __construct()
        {
        }
        /**
         * Process the export.
         *
         * @param WC_Order $order Order object.
         */
        public function process_manual_export($order)
        {
        }
        /**
         * Send shipments.
         *
         * @param int     $parent_order_id ID of parent order.
         * @param boolean $backend_order If order from backend.
         */
        public function send_shipments($parent_order_id, $backend_order = \false)
        {
        }
        /**
         * Replace the Order ID value.
         *
         * @param array $values ShippingEasy value.
         */
        public function order_id_replacement($values)
        {
        }
        /**
         * Mark the value as a gift. If there is a meta gift.
         *
         * @param array $values ShippingEasy value.
         */
        public function mark_as_gift($values)
        {
        }
        /**
         * Log response from ShippingEasy.
         *
         * @param array $response Response from ShippingEasy.
         */
        public function log_shipment_response($response)
        {
        }
    }
    /**
     * Class WC_MS_Shipworks.
     */
    class WC_MS_Shipworks
    {
        /**
         * Class constructor
         */
        public function __construct()
        {
        }
        /**
         * Send order in split based on the multiple address shipment.
         *
         * @param array $rows Shipworks rows.
         */
        public function send_split_orders($rows)
        {
        }
        /**
         * Add customer note into the order object.
         *
         * @param array $data Array of Order ID and customer note.
         */
        public function customer_note_added($data)
        {
        }
    }
    /**
     * WC_Multiple_Shipping_Settings class.
     *
     * @extends WC_Shipping_Method
     */
    class WC_Multiple_Shipping_Settings extends \WC_Shipping_Method
    {
        /**
         * Is cart duplication enabled?
         *
         * @var string.
         */
        public $cart_duplication;
        /**
         * Checkout notification value.
         *
         * @var string.
         */
        public $lang_notification;
        /**
         * Text for multiple address button.
         *
         * @var string.
         */
        public $lang_btn_items;
        /**
         * Class constructor.
         */
        public function __construct()
        {
        }
        /**
         * Initiate the action and filter.
         */
        public function init()
        {
        }
        /**
         * Do nothing when calculate shipping.
         *
         * @param array $package Current cart package.
         */
        public function calculate_shipping($package = array())
        {
        }
        /**
         * Listing the form fields.
         */
        public function init_form_fields()
        {
        }
        /**
         * Process and save admin options.
         *
         * Rebuilds form fields after save so options-driven multiselects (e.g. Excluded Delivery Dates)
         * reflect newly saved values without requiring a page refresh.
         *
         * @return bool
         */
        public function process_admin_options()
        {
        }
        /**
         * Check if current package is available for multiple address.
         *
         * @param mixed $package Cart package.
         * @return boolean
         */
        public function is_available($package)
        {
        }
        /**
         * Generate WP editor field HTML.
         *
         * @param string $key Field key.
         * @param array  $data Field data.
         *
         * @return string.
         */
        public function generate_ms_wp_editor_html($key, $data)
        {
        }
        /**
         * Generate product field HTML.
         *
         * @param string $key Field key.
         * @param array  $data Field data.
         *
         * @return string.
         */
        public function generate_ms_product_select_html($key, $data)
        {
        }
        /**
         * Generate category field HTML.
         *
         * @param string $key Field key.
         * @param array  $data Field data.
         *
         * @return string.
         */
        public function generate_ms_category_select_html($key, $data)
        {
        }
        /**
         * Save settings.
         *
         * @param array $settings Setting values.
         *
         * @return array.
         */
        public function save_settings($settings)
        {
        }
        /**
         * Validating the product field.
         *
         * @param string $key Field key.
         *
         * @return string.
         */
        public function validate_ms_product_select_field($key)
        {
        }
        /**
         * Validating the category field.
         *
         * @param string $key Field key.
         *
         * @return string.
         */
        public function validate_ms_category_select_field($key)
        {
        }
    }
    /**
     * Class WC_Ship_Multiple.
     */
    class WC_Ship_Multiple
    {
        const FILE = \WC_MS_FILE;
        /**
         * WC_MS_Front object.
         *
         * @var WC_MS_Front
         */
        public $front;
        /**
         * WC_MS_Cart object.
         *
         * @var WC_MS_Cart
         */
        public $cart;
        /**
         * WC_MS_Packages object.
         *
         * @var WC_MS_Packages
         */
        public $packages;
        /**
         * WC_MS_Address_Book object.
         *
         * @var WC_MS_Address_Book
         */
        public $address_book;
        /**
         * WC_MS_Checkout object.
         *
         * @var WC_MS_Checkout
         */
        public $checkout;
        /**
         * WC_MS_Notes object.
         *
         * @var WC_MS_Notes
         */
        public $notes;
        /**
         * WC_MS_Gifts object.
         *
         * @var WC_MS_Gifts
         */
        public $gifts;
        /**
         * WC_MS_Admin object.
         *
         * @var WC_MS_Admin
         */
        public $admin;
        /**
         * WC_MS_Order object.
         *
         * @var WC_MS_Order
         */
        public $order;
        /**
         * WC_MS_Order_Shipment object.
         *
         * @var WC_MS_Order_Shipment
         */
        public $shipments;
        /**
         * WC_MS_Customer_Order_Csv_Export object.
         *
         * @var WC_MS_Customer_Order_Csv_Export
         */
        public $csv_export;
        /**
         * Order meta key name.
         *
         * @var string
         */
        public $meta_key_order = '_shipping_methods';
        /**
         * Meta key settings ( Might not be used anymore ).
         *
         * @var string
         */
        public $meta_key_settings = '_shipping_settings';
        /**
         * Settings from shipping settings.
         *
         * @var array
         */
        public $settings = \null;
        /**
         * Saved settings.
         *
         * @var array
         */
        public $gateway_settings = \null;
        /**
         * Notification and button text.
         *
         * @var array
         */
        public static $lang = array('notification' => 'You may use multiple shipping addresses on this cart', 'btn_items' => 'Set Multiple Addresses');
        /**
         * Class constructor.
         */
        public function __construct()
        {
        }
        /**
         * Load textdomain for localization.
         */
        public function load_textdomain()
        {
        }
        /**
         * Add multiple shipping settings inside WooCommerce > Settings > Shipping page.
         *
         * Only registered in admin context — WC_Multiple_Shipping_Settings is a settings UI
         * handler only and must not be instantiated during frontend or REST API requests, as
         * its constructor calls init() which sets enabled = 'yes' and interferes with
         * WooCommerce Blocks / Store API checkout state.
         *
         * @param array $methods All of registered shipping method.
         */
        public function add_multiple_shipping_method($methods)
        {
        }
        /**
         * Creating multiship pages.
         */
        public function maybe_install_pages()
        {
        }
        /**
         * Load compatibility classes.
         *
         * @since 3.6.13
         * @return void
         */
        public function load_compat_classes()
        {
        }
        /**
         * Declaring HPOS compatibility.
         */
        public function declare_hpos_compatibility()
        {
        }
        /**
         * Check if multiship is enabled.
         *
         * @return boolean.
         */
        public function is_multiship_enabled(): bool
        {
        }
        /**
         * Display privacy notice.
         */
        public function wc_init()
        {
        }
        /**
         * Display shipping option per product.
         */
        public function product_options()
        {
        }
        /**
         * Process metabox. ( Might not be used anymore. )
         *
         * @param int $post_id Post ID.
         */
        public function process_metabox($post_id)
        {
        }
        /**
         * Display current user's addresses.
         */
        public function account_addresses()
        {
        }
        /**
         * Displaying a form.
         */
        public function draw_form()
        {
        }
        /**
         * Display multiple shipping methods.
         */
        public function display_shipping_methods()
        {
        }
        /**
         * Render shipping row for multiple shipping.
         *
         * @param array $packages Cart packages.
         * @param int   $type 0=multi-shipping; 1=different packages; 2=same packages.
         */
        public function render_shipping_row($packages, $type = 2)
        {
        }
        /**
         * Get available shipping methods based on the current cart packages.
         *
         * @return array Available shipping methods.
         */
        public function get_available_shipping_methods()
        {
        }
        /**
         * Register the address selection script.
         * This is called both in wp_enqueue_scripts and in the shortcode to ensure
         * the script is registered before it's enqueued (important for block themes).
         */
        public function register_address_selection_script()
        {
        }
        /**
         * Clear sessions and transients from the saved packages.
         *
         * @param int|WC_Order|string $order_obj Order ID or Order Object.
         */
        public function clear_session($order_obj = '')
        {
        }
        /**
         * Centralized method to clear all WCMS sessions.
         */
        public function clear_all_sessions()
        {
        }
        /**
         * Check if pickup is selected and clear session data if needed.
         *
         * @return bool True if pickup is selected and session was cleared.
         * @since 4.3.0
         */
        public function maybe_clear_session_for_pickup(): bool
        {
        }
        /**
         * Get shipping rate from the cart package.
         *
         * @param array $package Cart package.
         */
        public function get_package_shipping_rates($package = array())
        {
        }
        /**
         * Get cart item subtotal.
         *
         * @param array $cart_item Cart item.
         *
         * @return float.
         */
        public function get_cart_item_subtotal($cart_item)
        {
        }
        /**
         * Get product shipping method based on product ID.
         *
         * @param int $product_id Product ID.
         *
         * @return bool|string
         */
        public function get_product_shipping_method($product_id)
        {
        }
        /**
         * Check if the package has different methods.
         *
         * @param array $packages Cart package.
         *
         * @return boolean.
         */
        public function packages_have_different_methods($packages = array())
        {
        }
        /**
         * Check if the package has a different origin.
         *
         * @param array $packages Cart package.
         *
         * @return boolean
         */
        public function packages_have_different_origins($packages = array())
        {
        }
        /**
         * Check if the packages contain any shipping method.
         *
         * @param array $packages Cart package.
         */
        public function packages_contain_methods($packages = array())
        {
        }
        /**
         * Clear current package cache.
         */
        public function clear_packages_cache()
        {
        }
        /**
         * Check if address is empty or not.
         *
         * @param array $address_array Address data.
         */
        public function is_address_empty($address_array)
        {
        }
        /**
         * Get the shipping address field keys the store collects.
         *
         * Single source of truth for "which shipping fields exist", so callers stop keeping
         * their own copies of the list and drifting from what WooCommerce actually validates
         * against -- a field the merchant makes required, or one added by Checkout Field
         * Editor, is picked up everywhere automatically.
         *
         * $always is merged in regardless of store configuration: hiding a field's visibility
         * removes it from WooCommerce's field set, and a caller that has always handled a key
         * should keep handling it rather than silently start skipping it.
         *
         * @param string $country Country the fields apply to. Defaults to the store base country.
         * @param array  $always  Keys to include whether or not the store currently collects them.
         *
         * @return array Field keys, prefixed with shipping_.
         *
         * @since 4.4.3
         */
        public function get_shipping_field_keys($country = '', $always = array())
        {
        }
        /**
         * Strip the shipping_ prefix from a field key.
         *
         * Only the leading prefix goes, so a key that repeats it keeps the rest, and a key
         * without it is returned untouched. str_replace() did neither.
         *
         * @param string $key Field key, prefixed or not.
         *
         * @return string Key without the leading shipping_ prefix.
         *
         * @since 4.4.3
         */
        public static function strip_shipping_prefix($key)
        {
        }
        /**
         * The shipping address fields callers must always handle.
         *
         * Passed as the $always argument to get_shipping_field_keys() so that consolidating on
         * WooCommerce's field set can only add fields, never drop one that stored addresses and
         * templates already rely on. Setting a field's visibility to hidden removes it from that
         * set outright, which is how shipping_company and shipping_address_2 disappear.
         *
         * shipping_phone is the exception: it is listed here because callers must handle it, not
         * because they used to. It appeared in none of the hardcoded lists this replaces, which
         * is the bug. Setting its visibility to hidden drops it from WooCommerce's set the same
         * way company and address_2 go, so listing it here keeps a stored phone readable rather
         * than making it disappear the moment a merchant hides the field.
         *
         * @return array Field keys, prefixed with shipping_.
         *
         * @since 4.4.3
         */
        public static function get_legacy_shipping_field_keys()
        {
        }
        /**
         * Get the labels of the required address fields an address does not fill in.
         *
         * Lets callers tell "no address assigned at all" apart from "an address is
         * assigned but the store now requires a field it does not carry" -- which is
         * what happens to address book entries saved before a field became required.
         *
         * @param array $address_array Address data, with unprefixed keys.
         *
         * @return array Field labels, empty when the address is complete or has no country.
         *
         * @since 4.4.3
         */
        public function get_missing_address_fields($address_array)
        {
        }
        /**
         * Generate session for cart item and addresses.
         *
         * @param array $packages Cart package.
         */
        public function generate_address_session($packages)
        {
        }
        /**
         * Register blocks integration.
         */
        public function register_blocks_integration()
        {
        }
        /**
         * Extend the store API.
         */
        public function extend_store_api()
        {
        }
    }
    /**
     * Compatibility class for PIP.
     */
    class WC_Pip_Compat
    {
        /**
         * Constructor
         *
         * @since 3.6.13
         */
        public function __construct()
        {
        }
        /**
         * Add multiple addresses at the bottom of the order invoice.
         *
         * @since 3.6.13
         * @param string           $type document type.
         * @param string           $action current action running on Document.
         * @param \WC_PIP_Document $document document object.
         * @param \WC_Order        $order order object.
         * @return void
         */
        public function add_shipping_addresses_to_pip($type, $action, $document, $order)
        {
        }
        /**
         * Hide Shipping Address heading when there are multiple addresses.
         *
         * @since 3.6.13
         * @param bool      $show_shipping_address show shipping address.
         * @param string    $type current action running on Document.
         * @param \WC_Order $order order object.
         * @return bool
         */
        public function maybe_show_top_shipping_from_pip($show_shipping_address, $type, $order)
        {
        }
        /**
         * True if the order contains multiple addresses and packages.
         *
         * @since 3.6.13
         * @param \WC_Order $order order object.
         * @return bool
         */
        private function has_multiple_shipping_and_multiple_packages($order)
        {
        }
    }
    /**
     * Plugin compatibility with `woocommerce-customer-order-csv-export`.
     */
    class WC_MS_Customer_Order_Csv_Export
    {
        /**
         * Plugin reference.
         *
         * @var WC_Ship_Multiple
         */
        private $wcms;
        /**
         * Class constructor.
         *
         * @param WC_Ship_Multiple $wcms WC_Ship_Multiple object.
         */
        public function __construct(\WC_Ship_Multiple $wcms)
        {
        }
        /**
         * Method for adding an additional header for S2MA.
         *
         * @param  array $column_headers Existing column headers.
         *
         * @return array
         *
         * @since 3.6.0
         */
        public function modify_column_headers($column_headers)
        {
        }
        /**
         * Adds the line item's cart key to the line item data for use by the one row per item
         * filter.
         *
         * @param array                 $line_item {
         *       line item data in key => value format
         *       the keys are for convenience and not necessarily used for exporting. Make
         *       sure to prefix the values with the desired line item entry name
         * }.
         * @param WC_Order_Item_Product $item WC order item data.
         *
         * @return array
         *
         * @since 3.6.11
         */
        public function sv_wc_csv_export_add_cart_id_to_order_line_item($line_item, $item)
        {
        }
        /**
         * Adds the corresponding package address to each line item.
         *
         * @param array $order_data array of order data.
         * @param array $item array of item data.
         *
         * @return array
         *
         * @since 3.6.11
         */
        public function sv_wc_csv_export_add_package_multiple_address($order_data, $item)
        {
        }
        /**
         * Helper function to check the export format.
         *
         * @param \WC_Customer_Order_CSV_Export_Generator $csv_generator the generator instance.
         *
         * @return bool - true if this is a one row per item format
         *
         * @since 3.6.0
         */
        public function is_one_row($csv_generator)
        {
        }
        /**
         * Finds the package with the corresponding cart key.
         *
         * @param array  $packages Cart package.
         * @param string $cart_key Cart key.
         *
         * @return array
         *
         * @since 3.6.11
         */
        private function find_package($packages, $cart_key)
        {
        }
    }
}
namespace {
    /**
     * Get Cheapest shipping rate.
     *
     * @param array $rates Shipping rates.
     *
     * @return array Cheapest shipping rate.
     */
    function wcms_get_cheapest_shipping_rate($rates = array())
    {
    }
    /**
     * Get address.
     *
     * @param array $address Destination address.
     *
     * @return array Shipping address.
     */
    function wcms_get_address($address)
    {
    }
    /**
     * Get formatted address.
     *
     * @param array $address Shipping Address.
     *
     * @return string Formatted address.
     */
    function wcms_get_formatted_address($address)
    {
    }
    /**
     * Get real cart items count.
     *
     * @return int Cart items count.
     */
    function wcms_count_real_cart_items()
    {
    }
    /**
     * Get real cart items.
     *
     * @return array Cart items.
     */
    function wcms_get_real_cart_items()
    {
    }
    /**
     * Get Session.
     *
     * @param string $name Session name.
     *
     * @return mixed Session.
     */
    function wcms_session_get($name)
    {
    }
    /**
     * Check if session isset.
     *
     * @param string $name Session name.
     *
     * @return bool True if isset.
     */
    function wcms_session_isset($name)
    {
    }
    /**
     * Set session.
     *
     * @param string $name Session name.
     * @param mixed  $value Session value.
     *
     * @return void
     */
    function wcms_session_set($name, $value)
    {
    }
    /**
     * Delete a session.
     *
     * @param string $name Session name.
     *
     * @return void
     */
    function wcms_session_delete($name)
    {
    }
    /**
     * Remove price from shipping method label.
     *
     * @param string $label Shipping method label (may include price).
     *
     * @return string Label without price.
     */
    function wcms_remove_price_from_label(string $label): string
    {
    }
    /**
     * Get fallback shipping method title from methods array.
     *
     * @param int   $idx     Index of the package.
     * @param array $methods Array of shipping methods from order meta.
     *
     * @return string Fallback method title or empty string.
     */
    function wcms_get_fallback_method_title(int $idx, array $methods): string
    {
    }
    /**
     * Get shipping method title.
     *
     * @param int      $idx     Index of the package.
     * @param array    $methods Array of shipping methods from order meta.
     * @param WC_Order $order   Order object.
     *
     * @return string Shipping method title.
     */
    function wcms_get_shipping_method_title(int $idx, array $methods, \WC_Order $order): string
    {
    }
    \define('WC_MS_FILE', __FILE__);
    \define('WC_MS_ABSPATH', \trailingslashit(__DIR__));
    \define('WC_MS_PLUGIN_URL', \trailingslashit(\plugins_url('', __FILE__)));
    \define('WC_MS_DIST_DIR', \WC_MS_ABSPATH . 'dist/');
    \define('WC_MS_DIST_URL', \WC_MS_PLUGIN_URL . 'dist/');
    /**
     * WooCommerce fallback notice.
     *
     * @since 3.6.15
     * @return void
     */
    function woocommerce_shipping_multiple_addresses_missing_wc_notice()
    {
    }
    \define('WC_SHIPPING_MULTIPLE_ADDRESSES_VERSION', '4.4.6');
    /**
     * Declare compatibility with WC Cart and Checkout blocks.
     */
    function woocommerce_shipping_multiple_addresses_blocks_compatibility()
    {
    }
    /**
     * Initializes the extension.
     *
     * @since 3.6.15
     * @return void
     */
    function woocommerce_shipping_multiple_addresses_init()
    {
    }
}