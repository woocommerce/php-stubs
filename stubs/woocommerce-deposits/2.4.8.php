<?php
/**
 * Generated stub declarations for woocommerce-deposits 2.4.8.
 * @see https://github.com/woocommerce/all-plugins/tree/stubs
 */

/**
 * Store API integration class.
 *
 * @class    WC_Deposits_Store_API
 * @version  2.1.1
 */
class WC_Deposits_Store_API
{
    /**
     * Plugin identifier, unique to each plugin.
     *
     * @var string
     */
    const IDENTIFIER = 'woocommerce-deposits';
    /**
     * Class Instance
     *
     * @var WC_Deposits_Cart_Manager Class Instance
     */
    private static $cart_manager;
    /**
     * Bootstraps the class and hooks required data.
     */
    public static function initialize()
    {
    }
    /**
     * Register cart data handler.
     */
    public static function extend_store()
    {
    }
    /**
     * Adds extension data to cart route responses.
     *
     * @return array
     */
    public static function extend_cart_data()
    {
    }
    /**
     * Register schema into cart endpoint.
     *
     * @return  array  Registered schema.
     */
    public static function extend_cart_schema()
    {
    }
    /**
     * Filter store API responses to:
     *
     * - filter item prices according to deposits;
     *
     * @param WP_REST_Response $response Response.
     * @param WP_REST_Server   $server Server.
     * @param WP_REST_Request  $request Request.
     * @return WP_REST_Response|WP_Error
     */
    public static function filter_cart_item_data($response, $server, $request)
    {
    }
    /**
     * Adjusts the order-line item prices for the frontend.
     *
     * @param float $deposit_amount_including_tax Deposit amount including tax.
     * @param float $deposit_amount_excluding_tax Deposit amount excluding tax.
     *
     * @see https://github.com/woocommerce/woocommerce/discussions/46126
     *
     * @return array
     */
    public static function maybe_adjust_order_line_item_prices($deposit_amount_including_tax, $deposit_amount_excluding_tax)
    {
    }
    /**
     * Register deposits product data into cart/items endpoint.
     *
     * @param  array $cart_item Current cart item data.
     * @return array $item_data Registered deposits product data.
     */
    public static function extend_cart_item_data($cart_item)
    {
    }
    /**
     * Register deposits product schema into cart/items endpoint.
     *
     * @return array Registered schema.
     */
    public static function extend_cart_item_schema()
    {
    }
    /**
     * Add "Payable in total" cart item data to deposit items.
     *
     * @param array $data Cart Item data.
     * @param array $cart_item Cart Item.
     * @return array
     */
    public static function cart_item_data($data, $cart_item)
    {
    }
}
/**
 * Blocks integration class.
 *
 * @class        WC_Deposits_Blocks_Integration
 * @implements   IntegrationInterface
 * @version      1.6.0
 */
class WC_Deposits_Blocks_Integration implements \Automattic\WooCommerce\Blocks\Integrations\IntegrationInterface
{
    /**
     * The single instance of the class.
     *
     * @var WC_Deposits_Blocks_Integration
     */
    protected static $instance = \null;
    /**
     * Main WC_Deposits_Blocks_Integration instance. Ensures only one instance of WC_Deposits_Blocks_Integration is loaded or can be loaded.
     *
     * @static
     * @return WC_Deposits_Blocks_Integration
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
 * WooCommerce Blocks Compatibility.
 *
 * @class    WC_Deposits_Blocks_Compatibility
 * @version  1.6.0
 */
class WC_Deposits_Blocks_Compatibility
{
    /**
     * Min required plugin versions to check.
     *
     * @var array
     */
    private static $required = array('blocks' => '7.0.0');
    /**
     * Initialize.
     */
    public static function init()
    {
    }
}
/**
 * WC_Deposits_Cart_Manager class.
 */
class WC_Deposits_Cart_Manager
{
    /**
     * Class Instance
     *
     * @var WC_Deposits_Cart_Manager
     */
    private static $instance;
    /**
     * Whether we're buffering
     *
     * @var boolean
     */
    private $buffered = \false;
    /**
     * Get the class instance.
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
     * Hide itemization for Apple Pay and Google Pay when deposits are present.
     *
     * Compatibility with WooCommerce Payments. This filter is used to hide itemization
     * due to an issue in which the itemized amount shows the full price of the product
     * rather than the deposit amount.
     *
     * The full amount is calculated, displayed and charged correctly, ie it accounts
     * for the deposit, but the itemized amount is incorrect leading to confusion as
     * the math is incorrect.
     *
     * @todo Remove this filter once the issue is resolved in the extension.
     * @see https://github.com/woocommerce/woocommerce-deposits/issues/583
     *
     * @param bool $hide_itemization Whether to hide itemization for Apple Pay and Google Pay.
     * @return bool Modified value based on whether the cart has deposits.
     */
    public function wcpay_payment_request_hide_itemization($hide_itemization)
    {
    }
    /**
     * Scripts and styles.
     */
    public function wp_enqueue_scripts()
    {
    }
    /**
     * Show deposits form.
     */
    public function deposits_form_output()
    {
    }
    /**
     * Add deposits form to variation data.
     *
     * @since 2.1.3
     *
     * @param array                $data Variation data.
     * @param WC_Product           $product Product.
     * @param WC_Product_Variation $variation Variation object.
     * @return array
     */
    public function variation_deposits_form($data, $product, $variation)
    {
    }
    /**
     * Does the cart contain a deposit?
     *
     * @param WC_Cart|null $cart WooCommerce cart.
     * @return boolean
     */
    public function has_deposit($cart = \null)
    {
    }
    /**
     * Are we paying for a deposit or payment plan order?
     *
     * @return boolean
     */
    public function is_deposit_order()
    {
    }
    /**
     * When checking if coupon meets the minimum amount core looks on the subtotal value in cart.
     * When deposit item is in the cart, the subtotal value is missing the deposit part ( future payment ).
     * This makes the minimum amount coupon unusable in some cases. This function tries to correct this
     * by comparing minimum amount coupon setting to the subtotal with future payments added.
     *
     * @param boolean   $is_invalid Default filter value.
     * @param WC_Coupon $coupon Coupon.
     * @param float     $subtotal Subtotal.
     * @return boolean
     */
    public function check_coupon_minimum_amount($is_invalid, $coupon, $subtotal)
    {
    }
    /**
     * See how much credit the user is giving the customer (for payment plans)
     * If $cart_item is provided this function will calculate value only for this item.
     *
     * @param mixed $cart_item Cart Item.
     * @return float
     */
    public function get_future_payments_amount($cart_item = \null)
    {
    }
    /**
     * See how much credit the user is giving the customer. This calculates value excluding tax.
     * If $cart_item is provided this function will calculate value only for this item.
     *
     * @param mixed $_cart_item Cart Item.
     * @return float
     */
    public function get_future_payments_amount_no_tax($_cart_item = \null)
    {
    }
    /**
     * See what is left to pay in future including future discount.
     * If $cart_item is provided this function will calculate value only for this item.
     *
     * @param mixed $cart_item Cart Item.
     * @return float
     */
    public function get_future_payments_amount_with_discount($cart_item = \null)
    {
    }
    /**
     * Generate a unique ID for the cart item
     *
     * @param array|null $cart_item Cart Item.
     * @return string
     */
    public static function generate_cart_id($cart_item)
    {
    }
    /**
     * Checks if a parameter exist in $_POST or $_GET.
     *
     * @deprecated 1.6.1
     * @param string $name a key/parameter.
     *
     * @return mixed|null
     */
    public static function check_global_param_exist($name)
    {
    }
    /**
     * Checks if a parameter exist in $_POST or $_GET.
     *
     * @param string $name a key/parameter.
     *
     * @return mixed|null
     */
    public static function get_global_param($name)
    {
    }
    /**
     * See whats left to pay after deposits.
     * If $cart_item is provided this function will calculate value only for this item.
     *
     * @param array|null $_cart_item Cart Item.
     * @param boolean    $include_tax Include tax.
     * @param boolean    $after_discount After discount.
     * @return float
     */
    public function get_deposit_remaining_amount($_cart_item = \null, $include_tax = \false, $after_discount = \false)
    {
    }
    /**
     * See how much credit the user is giving the customer (for payment plans).
     *
     * @param mixed $_cart_item     When not null we calculate the credit value only for this item.
     * @param bool  $include_tax    Override global tax settings.
     * @param bool  $after_discount Calculate credit after discount has already been applied.
     * @return float
     */
    public function get_credit_amount($_cart_item = \null, $include_tax = \false, $after_discount = \false)
    {
    }
    /**
     * When an item is added to the cart, validate it.
     *
     * @param bool  $passed         Default validation value.
     * @param int   $product_id     Product ID.
     * @param int   $qty            Quantity.
     * @param int   $variation_id   Variation ID.
     * @param array $variations     Variations array.
     * @param array $cart_item_data Cart item data.
     *
     * @return bool
     */
    public function validate_add_cart_item($passed, $product_id, $qty, $variation_id = 0, $variations = array(), $cart_item_data = array())
    {
    }
    /**
     * Add posted data to the cart item.
     *
     * @param  array $cart_item_meta Cart item data.
     * @param  int   $product_id Product ID.
     * @param  int   $variation_id Variation ID.
     * @return array
     */
    public function add_cart_item_data($cart_item_meta, $product_id, $variation_id)
    {
    }
    /**
     * Add deposits related data to cart item data.
     *
     * Function adds payment_plan and is_deposit data to cart item.
     *
     * @param array                 $cart_item_data Cart Item Data.
     * @param WC_Order_Item_Product $item  Cart     Item.
     * @param WC_Order              $order          Order.
     * @return array
     */
    public function order_again_cart_item_data($cart_item_data, $item, $order)
    {
    }
    /**
     * Apply deposit information in the cart (if any deposit item)
     * This function is used only when wocommerce-memberships plugin is active.
     *
     * @return void
     */
    public function apply_deposit_info_to_cart()
    {
    }
    /**
     * Runs though all items in the cart applying any deposit information.
     * Needs to run on the cart_loaded_from_session hook so it runs after the cart has been fully loaded.
     *
     * @param WC_Cart $cart WooCommerce cart.
     */
    public function get_cart_from_session($cart)
    {
    }
    /**
     * Get data from the session and add to the cart item's meta.
     *
     * @param array $cart_item Cart Item.
     * @param mixed $values Cart Item values.
     * @param mixed $cart_item_key Cart Item key.
     * @return array cart item
     */
    public function get_cart_item_from_session($cart_item, $values, $cart_item_key)
    {
    }
    /**
     * Adjust the price of the product based on deposits.
     *
     * @param mixed $cart_item Cart item.
     * @return array cart item
     */
    public function add_cart_item($cart_item)
    {
    }
    /**
     * Clears all deferred discounts in the cart
     *
     * @since 1.1.11
     *
     * @return void
     */
    public function clear_deferred_discounts()
    {
    }
    /**
     * Control how coupons apply to products including a deposit or payment plan
     * Filters woocommerce_coupon_get_discount_amount (WC_Coupons get_discount_amount)
     *
     * @since 1.3.7
     *
     * @param float      $discount Discount.
     * @param float      $discounting_amount Amount the coupon is being applied to.
     * @param array|null $cart_item Cart item being discounted if applicable.
     * @param boolean    $single True if discounting a single qty item, false if its the line (always true in core).
     * @param WC_Coupon  $coupon Coupon.
     *
     * @return float Amount this coupon has discounted
     */
    public function get_discount_amount($discount, $discounting_amount, $cart_item, $single, $coupon)
    {
    }
    /**
     * Returns stored discount amount
     *
     * @since 1.2.0
     *
     * @param string         $type Discount type.
     * @param WC_Coupon|null $coupon Coupon.
     * @param array          $cart_item Cart item.
     * @return float
     */
    public static function get_stored_discount_amount($type, $coupon = \null, $cart_item = \null)
    {
    }
    /**
     * Calculates new cart totals taking into account credit amount, deposit and deferred discount
     *
     * @param WC_Cart $cart Cart.
     */
    public function adjust_cart_totals($cart)
    {
    }
    /**
     * Calculates how big portion of tax will be deferred into the future payments.
     *
     * @since 1.4.9
     * @param object $order The order object.
     * @return float $deferred_tax
     */
    public function calculate_deferred_tax_from_order($order)
    {
    }
    /**
     * Calculates taxes which will be deferred into future payments.
     *
     * @param WC_Cart $cart Cart.
     * @return array List of all deferred tax rates.
     */
    public function calculate_deferred_taxes_from_cart($cart = \null)
    {
    }
    /**
     * Calculate deferred and present discount tax
     *
     * @param string $_cart_item_key Cart item key.
     * @return array
     */
    public static function calculate_deferred_and_present_discount_tax($_cart_item_key = \null)
    {
    }
    /**
     * Calculates new subtotal taking into account credit amount and deposit
     *
     * @return float
     */
    public function adjust_cart_subtotal()
    {
    }
    /**
     * Calculates the sum of all deferred discounts in the cart for all items
     * or the sum of all discounts for one coupon
     * Totals are for (line) quantity, not just unit
     *
     * @since 1.2.0
     * @param WC_Coupon/null $coupon Coupon.
     * @param array          $cart_item Cart item.
     * @return float
     */
    public static function get_deferred_discount_amount($coupon = \null, $cart_item = \null)
    {
    }
    /**
     * Calculates the sum of all initial discounts in the cart for all items
     * or the sum of all discounts for one coupon
     * Totals are for (line) quantity, not just unit
     *
     * @since 1.2.0
     * @param WC_Coupon/null $coupon Coupon.
     * @param array          $cart_item Cart item.
     * @return float
     */
    public static function get_present_discount_amount($coupon = \null, $cart_item = \null)
    {
    }
    /**
     * Get tax amount for discounts for all items
     * or the sum of all discounts for one coupon
     * Totals are for (line) quantity, not just unit
     *
     * @since 1.2.0
     * @param WC_Coupon/null $coupon Coupon.
     * @param array          $cart_item Cart item.
     * @return float
     */
    public static function get_discount_tax($coupon = \null, $cart_item = \null)
    {
    }
    /**
     * Put meta data into format which can be displayed.
     *
     * @param array $other_data Current item data.
     * @param array $cart_item Cart item.
     * @return array meta
     */
    public function get_item_data($other_data, $cart_item)
    {
    }
    /**
     * Show the correct item price.
     *
     * @param string $output Price HTML.
     * @param array  $cart_item Cart item.
     * @param string $cart_item_key Cart item key.
     * @return string
     */
    public function display_item_price($output, $cart_item, $cart_item_key)
    {
    }
    /**
     * Adjust the subtotal display in the cart.
     *
     * @param string $output Subtotal HTML.
     * @param array  $cart_item Cart item.
     * @param string $cart_item_key Cart item key.
     * @return string
     */
    public function display_item_subtotal($output, $cart_item, $cart_item_key)
    {
    }
    /**
     * Before the main total.
     */
    public function display_cart_totals_before()
    {
    }
    /**
     * Print order total html including inc tax if needed
     */
    private function cart_totals_order_total_html()
    {
    }
    /**
     * Get order total html including inc tax if needed
     *
     * @return string
     */
    private function cart_totals_order_tax_formatted_output()
    {
    }
    /**
     * Generate a tax totals string to display for the Due Today line in the cart.
     * This function is copied from "wc_cart_totals_order_total_html" and subtracts
     * the deposit amount, when displaying a combined total.
     *
     * @return string
     */
    private function cart_totals_tax_string()
    {
    }
    /**
     * Displays the adjusted deferred taxes on the order details page.
     *
     * @since 1.4.9
     * @param float  $taxes The current tax totals.
     * @param object $order The order object.
     * @return array $tax Array of altered taxes.
     */
    public function order_totals_order_taxes($taxes, $order)
    {
    }
    /**
     * Update order totals to include the deposit adjustments.
     *
     * @since 1.4.19
     * @param WC_Order $order Order object.
     * @param array    $data  Saved order data.
     *
     * @return void
     */
    public function update_order_totals($order, $data)
    {
    }
    /**
     * Calculates the adjusted deferred taxes on the cart page.
     *
     * @param array   $taxes The current tax totals.
     * @param WC_Cart $cart The current cart.
     * @return array List of adjusted taxes.
     */
    public function cart_totals_order_taxes($taxes, $cart = \null)
    {
    }
    /**
     * Display the correct tax when the "Display Tax Totals" setting is set to "As a single total".
     *
     * @param string $total_html  Tax Total HTML.
     * @return string Tax Total HTML.
     */
    public function cart_totals_taxes_total_html($total_html)
    {
    }
    /**
     * After the main total.
     */
    public function display_cart_totals_after()
    {
    }
    /**
     * Store cart info inside new orders.
     *
     * @param WC_Order_Item_Product $item Order item.
     * @param string                $cart_item_key Cart item key.
     * @param array                 $values Values.
     */
    public function add_order_item_meta($item, $cart_item_key, $values)
    {
    }
    /**
     * Disable gateways when using deposits.
     *
     * @param  array $gateways Gateways.
     * @return array
     */
    public function disable_gateways($gateways = array())
    {
    }
    /**
     * Add to cart text.
     *
     * @param string     $text Add to cart text.
     * @param WC_Product $product Product object.
     * @return string
     */
    public function add_to_cart_text($text, $product = \null)
    {
    }
    /**
     * Add to cart URL.
     *
     * @version 1.2.2
     *
     * @param string     $url URL.
     * @param WC_Product $product Product object.
     *
     * @return string URL.
     */
    public function add_to_cart_url($url, $product = \null)
    {
    }
    /**
     * Remove the add to cart class from deposit products.
     *
     * @param string     $link HTML link.
     * @param WC_Product $product Product.
     * @return string HTML link
     */
    public function remove_add_to_cart_class($link, $product)
    {
    }
    /**
     * Provides a way to support both 2.6 and 3.0 since get_price_including_tax
     * gets deprecated in 3.0, and wc_get_price_including_tax gets introduced in
     * 3.0.
     *
     * @since 1.2
     * @param WC_Product $product Product.
     * @param array      $args Arguments.
     * @return float
     */
    private function get_price_including_tax($product, $args)
    {
    }
    /**
     * Returns price excluding tax (not rounded)
     *
     * @param WC_Product $product Product.
     * @param array      $args Arguments.
     * @return float
     */
    private function get_price_excluding_tax_no_round($product, $args)
    {
    }
    /**
     * Returns price including tax (not rounded)
     *
     * @param WC_Product $product Product.
     * @param array      $args Arguments.
     * @return float
     */
    private function get_price_including_tax_no_round($product, $args)
    {
    }
    /**
     * Provides a way to support both 2.6 and 3.0 since get_price_excluding_tax
     * gets deprecated in 3.0, and wc_get_price_excluding_tax gets introduced in
     * 3.0.
     *
     * @since 1.2
     * @param WC_Product $product Product.
     * @param array      $args Arguments.
     * @return float
     */
    private function get_price_excluding_tax($product, $args)
    {
    }
    /**
     * Fix deposits position on variable products - show them after a single variation description
     * or out of stock message.
     */
    public function reposition_display_for_variable_product()
    {
    }
    /* Deprecated */
    /**
     * Calculates new total taking into account credit amount, deposit and deferred discount
     *
     * @deprecated 1.5.7
     * @param float $total Original cart total.
     * @return float
     */
    public function adjust_cart_total($total)
    {
    }
    /**
     * Calculates new cart totals after TaxJar totals are applied on the cart.
     *
     * @param WC_Cart $cart cart.
     */
    public function adjust_cart_totals_after_taxjar($cart)
    {
    }
    /**
     * Disable ajax-add-to-cart functionality if product has deposits enabled.
     * (If the product has a Payment Plan or Deposits are optional)
     *
     * @since 2.1.9
     * @param  bool       $supports If support a feature.
     * @param  string     $feature  Feature to support.
     * @param  WC_Product $product  Product data.
     * @return bool
     */
    public function ajax_add_to_cart_supports($supports, $feature, $product)
    {
    }
}
/**
 * Class that handles the display of scheduled orders in My Account.
 */
class WC_Deposits_My_Account
{
    /**
     * Custom endpoint name.
     *
     * @var string
     */
    public static $endpoint;
    /**
     * Plugin actions.
     */
    public function __construct()
    {
    }
    /**
     * Register new endpoint to use inside My Account page.
     *
     * @see https://developer.wordpress.org/reference/functions/add_rewrite_endpoint/
     */
    public function add_endpoints()
    {
    }
    /**
     * Add new query var.
     *
     * @param array $vars Query vars.
     * @return array
     */
    public function add_query_vars($vars)
    {
    }
    /**
     * Add scheduled orders query var.
     *
     * @since 2.3.2
     *
     * @param array $vars Query vars.
     *
     * @return array
     */
    public function add_scheduled_orders_woocommerce_query_vars($vars)
    {
    }
    /**
     * Change title for scheduled orders endpoint.
     *
     * @since 2.3.2
     *
     * @return string
     */
    public function change_endpoint_title()
    {
    }
    /**
     * Set endpoint title.
     *
     * @param string $title Endpoint title.
     * @return string
     */
    public function endpoint_title($title)
    {
    }
    /**
     * If the customer has scheduled orders, add new Scheduled Orders menu to My Account menu.
     *
     * @since 1.4.20
     * @param array $items Menu items.
     * @return array
     */
    public function maybe_add_new_menu_items($items)
    {
    }
    /**
     * Insert the new endpoint into the My Account menu.
     *
     * @param array $items Menu items.
     * @return array
     */
    public function new_menu_items($items)
    {
    }
    /**
     * Endpoint HTML content.
     *
     * @param int $current_page Current page.
     */
    public function endpoint_content($current_page)
    {
    }
    /**
     * Adds a link to the original order from within a scheduled
     * order.
     * My Account > Orders > (Any scheduled order).
     *
     * @param WC_Order $order A scheduled order object.
     */
    public function add_original_order_link($order)
    {
    }
    /**
     * Renders a table of all scheduled orders for a given order.
     * My Account > Orders > (Any original order).
     *
     * @param WC_Order $order The Original Order object.
     */
    public function render_related_scheduled_orders($order)
    {
    }
    /**
     * Set pagination endpoint.
     *
     * @param string $url URL.
     * @param string $endpoint Endpoint.
     * @param mixed  $value Value.
     * @return string
     */
    public static function set_pagination_endpoint_url($url, $endpoint, $value)
    {
    }
}
/**
 * WC_Deposits_Notifications_Manager class.
 *
 * Handles notifications for upcoming payments.
 */
class WC_Deposits_Notifications_Manager
{
    /**
     * Class instance
     *
     * @var WC_Deposits_Notifications_Manager
     */
    private static $instance;
    /**
     * Action scheduler hook name for processing batches.
     *
     * @var string
     */
    const NOTIFICATION_BATCH_PROCESSING_ACTION = 'wc_deposits_batch_reminder_notifications';
    /**
     * Action scheduler hook name for processing a single reminder notification.
     *
     * @var string
     */
    const NOTIFICATION_REMINDER_PROCESSING_ACTION = 'wc_deposits_process_reminder_notifications';
    /**
     * WP Cron hook name for processing a batch.
     *
     * @var string
     */
    const NOTIFICATIONS_BATCH_SCHEDULER_CRON = 'wc_deposits_reminder_notifications_scheduler';
    /**
     * Get the class instance.
     */
    public static function get_instance()
    {
    }
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Add email classes to WooCommerce.
     *
     * @param array $emails Email classes.
     * @return array Modified email classes to include deposits notifications.
     */
    public function add_email_classes($emails)
    {
    }
    /**
     * Add notification settings to the global settings page.
     *
     * @param array $global_settings Global settings.
     * @return array Modified settings to include notifications.
     */
    public function add_settings($global_settings)
    {
    }
    /**
     * Generate a unique batch ID for a set of order IDs.
     *
     * Normalizes the order IDs to generate a consistent batch ID for
     * a set of due orders.
     *
     * @since 2.4.2
     *
     * @param array $order_ids Order IDs.
     * @return string Batch ID.
     */
    private static function generate_batch_id($order_ids = array())
    {
    }
    /**
     * Checks if there's already a scheduled batch processor action for a given set of products.
     *
     * @param int[]  $order_ids The order IDs to batch process invoices for.
     * @param string $batch_id The unique batch ID for this set of orders.
     *
     * @return bool True if there's a scheduled action already, otherwise false.
     */
    private static function has_scheduled_batch_processor($order_ids, $batch_id)
    {
    }
    /**
     * Schedule a batch processor for a set of due orders.
     *
     * @since 2.4.2
     *
     * @param int[]  $order_ids The order IDs to batch process pre-orders for.
     * @param string $batch_id  The unique batch ID for this set of orders.
     */
    private static function schedule_batch_processor($order_ids, $batch_id)
    {
    }
    /**
     * Schedule a batch job to send reminder notifications.
     *
     * @since 2.4.2
     */
    public static function maybe_batch_schedule_reminder_notifications()
    {
    }
    /**
     * Process a batch of scheduled orders.
     *
     * @param int[]  $order_ids The order IDs to batch process pre-orders for.
     * @param string $batch_id The unique batch ID for this set of orders.
     */
    public static function process_batch($order_ids, $batch_id)
    {
    }
    /**
     * Send a notification email of an upcoming payment.
     *
     * Sends an email to the customer informing them of an upcoming
     * payment for a scheduled payment order.
     *
     * @since 2.4.2
     *
     * @param int|WC_Order $order          Order ID or WC_Order object.
     * @param string       $batch_meta_key Meta key for the batch. Optional.
     */
    public static function send_notification_email($order, $batch_meta_key = \null)
    {
    }
    /**
     * Check if the notification email should be sent.
     *
     * Determines whether notifications emails should be sent based on the
     * site options and the current environment.
     *
     * @since 2.4.2
     *
     * @return bool True if the notification email should be sent, false otherwise.
     */
    public static function should_send_notification_emails()
    {
    }
    /**
     * Get the due date for a scheduled payment order.
     *
     * @since 2.4.2
     *
     * @param WC_Order $order Order object.
     * @return string|bool Due date or false if not a scheduled payment order.
     */
    public static function get_due_date($order)
    {
    }
    /**
     * Get the relative due date for a scheduled payment order.
     *
     * This is a human-readable format of the due date, eg "3 days".
     *
     * @since 2.4.2
     *
     * @param WC_Order $order Order object.
     * @return string|bool Relative due date or false if not a scheduled payment order.
     */
    public static function get_relative_due_date($order)
    {
    }
}
/**
 * WC_Deposits_Order_Item_Manager class.
 */
class WC_Deposits_Order_Item_Manager
{
    /**
     * See if an item is a deposit.
     *
     * @param  array $item Order item.
     * @return boolean
     */
    public static function is_deposit($item)
    {
    }
    /**
     * Get payment plan if used.
     *
     * @param  array $item Order item.
     * @return bool|WC_Deposits_Plan
     */
    public static function get_payment_plan($item)
    {
    }
    /**
     * See if an item has been fully paid.
     *
     * @param  array    $item Order item.
     * @param  WC_Order $parent_order Parent order.
     * @return boolean
     */
    public static function is_fully_paid($item, $parent_order = \null)
    {
    }
}
/**
 * WC_Deposits_Order_Manager class.
 */
class WC_Deposits_Order_Manager
{
    /**
     * Class Instance
     *
     * @var WC_Deposits_Order_Manager
     */
    private static $instance;
    /**
     * Get the class instance.
     */
    public static function get_instance()
    {
    }
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Does the order contain a deposit?
     *
     * @version 1.2.1
     * @param WC_Order|int $order Order.
     * @return boolean
     */
    public static function has_deposit($order)
    {
    }
    /**
     * Check if the order is follow up
     *
     * @param  int|WC_Order $order Order ID or object.
     * @return boolean
     */
    public static function is_follow_up_order($order)
    {
    }
    /**
     * Check if the order contains deposits that need future payments
     *
     * @param  int|WC_Order $order Order ID or object.
     * @return boolean
     */
    public static function order_has_future_deposit_payment($order)
    {
    }
    /**
     * Check if the order contains a deposit without additional payments.
     * E.g. discount was applied.
     *
     * @param  int|WC_Order $order Order ID or object.
     * @return boolean
     */
    public static function has_deposit_without_future_payments($order)
    {
    }
    /**
     * Register our custom post statuses, used for order status.
     */
    public function register_post_status()
    {
    }
    /**
     * Add order statusus to WooCommmerce.
     *
     * @param  array $order_statuses Order statuses.
     * @return array
     */
    public function add_order_statuses($order_statuses)
    {
    }
    /**
     * Statuses that can be completed.
     *
     * @param  array $statuses Order statuses.
     * @return array
     */
    public function woocommerce_valid_order_statuses_for_payment_complete($statuses)
    {
    }
    /**
     * Filters the order's status so that we can indicate if this order only has a partial payment
     *
     * @param string $status Order status (processing|completed).
     * @param int    $order_id Order ID.
     * @return string Order status (processing|completed|partial-payment)
     */
    public function woocommerce_payment_complete_order_status($status, $order_id)
    {
    }
    /**
     * Hide scheduled orders from account [age]
     *
     * @param array $query Query.
     * @return array
     */
    public function woocommerce_my_account_my_orders_query($query)
    {
    }
    /**
     * Process deposits in an order after payment.
     *
     * @param int $order_id Order ID.
     */
    public function process_deposits_in_order($order_id)
    {
    }
    /**
     * Create a scheduled order.
     *
     * @param  string $payment_date Payment date.
     * @param  int    $original_order_id Original order ID.
     * @param  int    $payment_number Number of payment.
     * @param  array  $item Order item.
     * @param  string $status Status.
     * @return id
     */
    public static function create_order($payment_date, $original_order_id, $payment_number, $item, $status = '')
    {
    }
    /**
     * Filter display value of order item
     *
     * @param string $display_value Original display value.
     * @param object $meta Item meta.
     * @return string
     */
    public function deposits_order_item_display_meta_value($display_value, $meta)
    {
    }
    /**
     * Rename meta key for attribute labels.
     *
     * @param  string $label Original attribute label.
     * @param  string $meta_key Meta key.
     * @return string
     */
    public function woocommerce_attribute_label($label, $meta_key)
    {
    }
    /**
     * Hide meta data.
     *
     * @param array $meta_keys Meta keys to filter.
     * @return array
     */
    public function woocommerce_hidden_order_itemmeta($meta_keys)
    {
    }
    /**
     * Show info before order item meta.
     *
     * @param int           $item_id Item ID.
     * @param WC_Order_Item $item Item.
     * @param WC_Product    $_product Product.
     * @return void
     */
    public function woocommerce_before_order_itemmeta($item_id, $item, $_product)
    {
    }
    /**
     * Show info after order item meta.
     *
     * @param int           $item_id Order item ID.
     * @param WC_Order_Item $item Order item.
     * @param WC_Product    $_product Product.
     * @return void
     */
    public function woocommerce_after_order_itemmeta($item_id, $item, $_product)
    {
    }
    /**
     * Create and redirect to an invoice.
     */
    public function order_action_handler()
    {
    }
    /**
     * Check if all deposits items are fully paid.
     *
     * @param int $order_id Order ID.
     * @return boolean
     */
    public function is_deposit_fully_paid($order_id)
    {
    }
    /**
     * Detect Local Pickup shipping method from order
     *
     * @param WC_Order $order Order.
     * @return boolean
     */
    public static function is_local_pickup($order)
    {
    }
    /**
     * Sends an email when a partial payment is made.
     *
     * @param int $order_id Order ID.
     */
    public function payment_complete_handler($order_id)
    {
    }
    /**
     * Adds partial payment as is paid status.
     *
     * @param array $order_statuses Order statuses.
     * @return array
     */
    public function add_is_paid_status($order_statuses)
    {
    }
    /**
     * Append text to item names when viewing an order.
     *
     * @param string        $item_name Item name.
     * @param WC_Order_Item $item Order item.
     * @return string
     */
    public function woocommerce_order_item_name($item_name, $item)
    {
    }
    /**
     * Add info about a deposit when viewing an order.
     *
     * @param int           $item_id Item ID.
     * @param WC_Order_Item $item Order item.
     * @param WC_Order      $order Order.
     * @return void
     */
    public function woocommerce_order_item_meta_end($item_id, $item, $order)
    {
    }
    /**
     * Adjust totals display.
     *
     * @since 1.3.4 Add in display of future discounts and correct discounted future payments.
     * @param array    $total_rows Total rows.
     * @param WC_Order $order Order.
     * @return array
     */
    public function woocommerce_get_order_item_totals($total_rows, $order)
    {
    }
    /**
     * Admin filters.
     *
     * @param array $vars Query vars.
     * @return array
     */
    public function request_query($vars)
    {
    }
    /**
     * Triggered when adding an item in the backend.
     * If deposits are forced, set all meta data.
     *
     * @param int           $item_id Order item ID.
     * @param WC_Order_Item $item Order item.
     * @return void
     */
    public function ajax_add_order_item_meta($item_id, $item)
    {
    }
    /**
     * Display total payable of deposit item in order item details.
     *
     * @since 1.1.10
     * @param float    $subtotal Line subtotal.
     * @param array    $item     Order item.
     * @param WC_Order $order    Order object.
     * @return string Formatted subtotal
     */
    public function display_item_total_payable($subtotal, $item, $order)
    {
    }
    /**
     * Should the order stock be reduced?
     *
     * @param boolean  $allowed Allow reduce stock.
     * @param WC_Order $order Order.
     * @return boolean
     */
    public function allow_reduce_order_stock($allowed, $order)
    {
    }
    /**
     * Prevent stock level adjustment for Deposit payment order line items
     *
     * @param bool          $prevent If should prevent.
     * @param WC_Order_Item $item Item object.
     * @return bool
     */
    public function prevent_adjust_line_item_product_stock($prevent, $item)
    {
    }
    /**
     * Alter if a download is permitted.
     *
     * Downloads should only be permitted for deposit plans if all
     * orders are paid.
     *
     * @since  1.1.7
     * @param  bool     $permitted Permit download.
     * @param  WC_Order $order Order.
     * @return bool @permitted
     */
    public function maybe_alter_if_download_permitted($permitted, $order)
    {
    }
    /**
     * Adds pending-deposit order status for inclusion for payment processes.
     *
     * @since  1.1.8
     * @param  array $statuses Statuses.
     * @return array $statuses
     */
    public function add_status_to_needs_payment($statuses)
    {
    }
    /**
     * Bypass stock management for the product
     *
     * @param boolean    $manage_stock Default stock management.
     * @param WC_Product $product Product.
     * @return boolean
     */
    public function maybe_bypass_manage_stock($manage_stock, $product)
    {
    }
    /**
     * Disables stock management in parent data of a production with variations.
     * This update is not persistent.
     *
     * @since 1.4.12
     * @param object $product product variation instance to update.
     *
     * @return object $product
     */
    private function disable_manage_stock_for_product_variation($product)
    {
    }
    /**
     * Filters the stock status check so that out of stock products
     * with deposits can still be paid for. In cases like initially
     * only one in stock and became zero.
     *
     * @since 1.3.3
     * @param bool       $in_stock Default product stock status.
     * @param WC_Product $product Product.
     *
     * @return bool
     */
    public function maybe_bypass_stock_status($in_stock, $product)
    {
    }
    /**
     * Register transitions from Pending Deposit and Scheduled Payment status
     * to send default WooCommerce emails.
     *
     * @param  array $actions Actions.
     * @return array
     */
    public function register_status_transitions_for_core_emails($actions)
    {
    }
    /**
     * Send WooCommerce emails on status transitions from
     * Pending Deposit or Scheduled Payment.
     *
     * @param WC_Emails $email_class WooCommerce email class.
     */
    public function send_core_emails_on_status_changes($email_class)
    {
    }
}
/**
 * WC_Deposits_Plans_Admin class
 */
class WC_Deposits_Plan
{
    /**
     * Plan ID
     *
     * @var int
     */
    private $id;
    /**
     * Plan name
     *
     * @var string
     */
    private $name;
    /**
     * Plan description
     *
     * @var string
     */
    private $description;
    /**
     * Plan schedule
     *
     * @var array
     */
    private $schedule;
    /**
     * Plan Constructor.
     *
     * @param object $plan Queried plan.
     */
    public function __construct($plan)
    {
    }
    /**
     * Whether this object represents a plan that actually exists.
     *
     * @return bool
     */
    public function exists()
    {
    }
    /**
     * Get ID of the plan.
     *
     * @return int
     */
    public function get_id()
    {
    }
    /**
     * Get name of the plan
     *
     * @return string
     */
    public function get_name()
    {
    }
    /**
     * Get description of the plan.
     *
     * @return string
     */
    public function get_description()
    {
    }
    /**
     * Get the schedule for this plan.
     * Do not rely on in the "index" from the results array. Instead use "schedule_index".
     *
     * @return array
     */
    public function get_schedule()
    {
    }
    /**
     * Get the total percent of the original cost for this plan.
     *
     * @return string
     */
    public function get_total_percent()
    {
    }
    /**
     * Format the payment schedule for display.
     *
     * @param  string $amount Optionally define the amount being paid (if used when displaying a product).
     * @param  string $currency Currency.
     * @return string
     */
    public function get_formatted_schedule($amount = '', $currency = '')
    {
    }
}
/**
 * WC_Deposits_Plans_Admin class.
 */
class WC_Deposits_Plans_Admin
{
    /**
     * Class Instance
     *
     * @var WC_Deposits_Plans_Admin
     */
    private static $instance;
    /**
     * Get the class instance.
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
     * Scripts.
     */
    public function styles_and_scripts()
    {
    }
    /**
     * Add a menu item for the payment plans screen.
     */
    public function add_menu_item()
    {
    }
    /**
     * Register the deposits screen ID.
     *
     * @param array $ids Existing screens IDs.
     * @return array
     */
    public function add_screen_id($ids = array())
    {
    }
    /**
     * Output the admin screen.
     */
    public function output()
    {
    }
    /**
     * Output a table of plans.
     */
    public function output_plans()
    {
    }
    /**
     * Validate plan amounts. Decline empty or 0.
     *
     * @param array $plan_amounts Plan amounts.
     *
     * @return bool valid or invalid.
     */
    public function validate_plan_amounts($plan_amounts = array())
    {
    }
    /**
     * Save a posted plan.
     */
    public function maybe_save_plan()
    {
    }
}
/**
 * WC_Deposits_Plans_Admin class.
 */
class WC_Deposits_Plans_Manager
{
    /**
     * Get a payment plan by ID.
     *
     * @param  int $plan_id Plan ID.
     * @return WC_Deposits_Plan
     */
    public static function get_plan($plan_id)
    {
    }
    /**
     * Get All plans.
     *
     * @return array of WC_Deposits_Plan
     */
    public static function get_plans()
    {
    }
    /**
     * Get all plan ids and names.
     *
     * @return array of ID name value pairs
     */
    public static function get_plan_ids()
    {
    }
    /**
     * Get the default plan IDs.
     */
    public static function get_default_plan_ids()
    {
    }
    /**
     * Get plan ids assigned to a product.
     *
     * @param  int $product_id Product ID.
     * @return int[]
     */
    public static function get_plan_ids_for_product($product_id)
    {
    }
    /**
     * Get payment plans for a product.
     *
     * @param  int $product_id Product ID.
     * @return WC_Deposits_Plan[]
     */
    public static function get_plans_for_product($product_id)
    {
    }
    /**
     * Figure out a payment plan is fully paid.
     *
     * This function looks at the children order items. If they are fully
     * paid and the parent order has a status of partially paid, processing or completed.
     *
     * @since  1.1.6
     * @param  WC_Order $parent_order Parent order.
     * @return bool
     */
    public static function is_order_plan_fully_paid($parent_order)
    {
    }
}
/**
 * WC_Deposits_Plans_Product_Admin class.
 */
class WC_Deposits_Plans_Product_Admin
{
    /**
     * Class instance
     *
     * @var WC_Deposits_Plans_Product_Admin
     */
    private static $instance;
    /**
     * Get the class instance.
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
     * Scripts.
     */
    public function styles_and_scripts()
    {
    }
    /**
     * Show the deposits tab.
     */
    public function add_tab()
    {
    }
    /**
     * Show the deposits panel.
     */
    public function deposit_panels()
    {
    }
    /**
     * Show deposits settings for variation.
     *
     * @since 2.1.3
     *
     * @param int     $loop           Position in the loop.
     * @param array   $variation_data Variation data.
     * @param WP_Post $variation      Post data.
     * @return void
     */
    public function variation_deposit_data($loop, $variation_data, $variation)
    {
    }
    /**
     * Save data.
     *
     * @param int $post_id Post ID.
     */
    public function save_product_data($post_id)
    {
    }
    /**
     * Save variation data.
     *
     * @since 2.1.3
     *
     * @param int $variation_id Variation.
     * @param int $i Variation number.
     * @return void
     */
    public function save_variation_data($variation_id, $i)
    {
    }
    /**
     * Format _wc_deposit_payment_plans value for export.
     *
     * WooCommerce has already unserialized $meta->value once (via
     * WC_Data::read_meta_data()) before this filter runs, so $value is
     * expected to already be the plan-ID array. Do not unserialize it again.
     *
     * @since 1.5.9
     * @param mixed      $value   Meta Value.
     * @param mixed      $meta    Meta Object.
     * @param WC_Product $product Product being exported.
     * @param array      $row     Row data.
     * @return mixed $value
     */
    public function format_deposit_payment_plans_export($value, $meta, $product, $row)
    {
    }
    /**
     * Serialize _wc_deposit_payment_plans value for import
     *
     * @since 1.5.9
     * @param  array $data Raw CSV data.
     * @return array $data
     */
    public function format_deposit_payment_plans_import($data)
    {
    }
}
/**
 * WC_Deposits_Product_Manager class.
 */
class WC_Deposits_Product_Manager
{
    /**
     * Initialize hooks and filters.
     */
    public static function init()
    {
    }
    /**
     * Are deposits enabled for a specific product.
     *
     * @param  int $product_id Product ID.
     * @return bool
     */
    public static function deposits_enabled($product_id)
    {
    }
    /**
     * Are deposits forced for a specific product?
     *
     * @param  int $product_id Product ID.
     * @return bool
     */
    public static function deposits_forced($product_id)
    {
    }
    /**
     * Get deposit type.
     *
     * @param  int $product_id Product ID.
     * @return string
     */
    public static function get_deposit_type($product_id)
    {
    }
    /**
     * Get deposit selected type.
     *
     * @param  int $product_id Product ID.
     * @return string
     */
    public static function get_deposit_selected_type($product_id)
    {
    }
    /**
     * Get global deposit settings.
     *
     * @return array Global deposit settings data
     */
    public static function get_global_settings()
    {
    }
    /**
     * Get formatted deposit amount display string.
     *
     * @param array $settings_data Settings data containing amount and payment plan details.
     * @return string Formatted deposit amount string with currency/percentage symbol.
     */
    public static function get_deposit_amount_display($settings_data)
    {
    }
    /**
     * Returns the label for the setting depending on store and product level inheritance.
     *
     * @since 2.2.6
     *
     * @param string $setting      Setting name. enabled, deposit_type, deposit_selected_type.
     * @param string $product_type Product type. simple or variation.
     *
     * @return string
     */
    public static function get_setting_inheritance_label($setting = '', $product_type = 'simple')
    {
    }
    /**
     * Does the product have plans?
     *
     * @param  int $product_id Product ID.
     * @return int
     */
    public static function has_plans($product_id)
    {
    }
    /**
     * Formatted deposit amount for a product based on fixed or %.
     *
     * @param  int $product_id Product ID.
     * @return string
     */
    public static function get_formatted_deposit_amount($product_id)
    {
    }
    /**
     * Formatted deposit amount for a product based on payment plan.
     *
     * @param  int $product_id Product ID.
     * @param  int $plan_id    Payment Plan ID.
     * @return string
     */
    public static function get_formatted_deposit_payment_plan_amount($product_id, $plan_id)
    {
    }
    /**
     * Deposit amount for a product based on fixed or %.
     *
     * @param  WC_Product|int $product Product.
     * @param  int            $plan_id Plan ID.
     * @return float|bool
     */
    public static function get_deposit_amount_for_display($product, $plan_id = 0)
    {
    }
    /**
     * Deposit amount for a product based on fixed or % using actual prices.
     *
     * @param  WC_Product|int $product Product.
     * @param  int            $plan_id Plan ID.
     * @param  string         $context of display Valid values display or order.
     * @param  float          $product_price If the price differs from that set in the product.
     * @return float|bool
     */
    public static function get_deposit_amount($product, $plan_id = 0, $context = 'display', $product_price = \null)
    {
    }
    /**
     * Get correct price/amount depending on tax mode.
     *
     * @since  1.2.0
     * @param  WC_Product $product Product.
     * @param  float      $amount Amount.
     * @return float
     */
    protected static function get_price($product, $amount)
    {
    }
    /**
     * Checks if a product or variation has any custom deposit settings enabled.
     *
     * @param int $product_id The product or product variation ID to check.
     * @return bool True if product has custom deposit settings, false otherwise.
     */
    public static function product_has_custom_settings($product_id)
    {
    }
    /**
     * Checks if the deposits override settings checkbox were disabled for a post.
     *
     * @param int $product_id The product (or variation) ID.
     * @return bool True if custom configuration is disabled, false if enabled.
     */
    public static function is_custom_deposits_configuration_disabled($product_id)
    {
    }
    /**
     * Clean up deposit meta fields if custom configuration is disabled,
     * to revert to global/parent settings.
     *
     * @param mixed $product_id_or_object The product ID or product object.
     */
    public static function maybe_clean_deposit_meta($product_id_or_object)
    {
    }
}
/**
 * WC_Deposits_Product_Meta class.
 *
 * @since 1.2.0
 */
class WC_Deposits_Product_Meta
{
    /**
     * Class instance
     *
     * @var WC_Deposits_Product_Meta
     */
    private static $instance;
    /**
     * Get the class instance.
     */
    public static function get_instance()
    {
    }
    /**
     * Gets a piece of product meta in a version agnostic way.
     *
     * @version 1.2.2
     *
     * @param  int|WC_Product $product  Product ID or object.
     * @param  string         $meta_key Meta key.
     * @return mixed
     */
    public static function get_meta($product, $meta_key)
    {
    }
    /**
     * Update a piece of product meta in a version agnostic way.
     *
     * @version 1.2.2
     *
     * @param  int|WC_Product $product    Product ID or object.
     * @param  string         $meta_key   Meta key.
     * @param  mixed          $meta_value Meta value.
     */
    public static function update_meta($product, $meta_key, $meta_value)
    {
    }
}
/**
 * WC_Deposits_Scheduled_Order_Manager class.
 *
 * Handles scheduled orders, e.g. emailing users when they are due for payment.
 */
class WC_Deposits_Scheduled_Order_Manager
{
    /**
     * Class instance
     *
     * @var WC_Deposits_Scheduled_Order_Manager
     */
    private static $instance;
    /**
     * Get the class instance.
     */
    public static function get_instance()
    {
    }
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Schedule all orders for a payment plan.
     * This is important because the tax point is when the order is placed.
     *
     * @param  WC_Deposits_Plan $payment_plan Payment plan.
     * @param  int              $original_order_id Original order ID.
     * @param  array            $item Item data.
     */
    public static function schedule_orders_for_plan($payment_plan, $original_order_id, $item)
    {
    }
    /**
     * Get normalized price before plan.
     *
     * The price_excluding_tax in order item is calculated with total percents
     * from payment plan. This method normalize the price again.
     *
     * @param WC_Deposits_Plan $plan Plan.
     * @param array            $item Order item.
     *
     * @return float Line price
     */
    private static function _get_normalized_price_before_plan($plan, $item)
    {
    }
    /**
     * Send an invoice for a scheduled order when the post date passes the current date.
     *
     * @version 1.3.2
     * @since 1.0.0
     */
    public static function invoice_scheduled_orders()
    {
    }
    /**
     * Hook into WC_Order::has_status to make the custom order statuses that Deposits creates behave predictably.
     * For example, an order with "pending-deposit" status should behave the same as an order with "pending" status.
     *
     * @since 1.3.1
     * @version 1.4.14
     *
     * @param bool         $retval Default status.
     * @param WC_Order     $order Order.
     * @param string|array $status_list List of statuses.
     *
     * @return bool
     */
    public static function deposit_pending_status($retval, $order, $status_list)
    {
    }
    /**
     * Get related orders created by deposits for an order ID.
     *
     * @param  int $order_id Order ID.
     * @return array
     */
    public static function get_related_orders($order_id)
    {
    }
    /**
     * When a post is trashed, if its an order, sync scheduled payments.
     *
     * @param int $id Post ID.
     */
    public static function trash_post($id)
    {
    }
    /**
     * When a post is untrashed, if its an order, sync scheduled payments.
     *
     * @param int $id Post ID.
     */
    public static function untrash_post($id)
    {
    }
    /**
     * When a post is deleted, if its an order, sync scheduled payments.
     *
     * @param int $id Post ID.
     */
    public static function before_delete_post($id)
    {
    }
    /**
     * When a HPOS order is trashed, sync scheduled payments.
     *
     * @param int $id Order ID.
     */
    public static function trash_order($id)
    {
    }
    /**
     * When a HPOS order is untrashed, sync scheduled payments.
     *
     * @param int $id Order ID.
     */
    public static function untrash_order($id)
    {
    }
    /**
     * When a HPOS order is deleted, sync scheduled payments.
     *
     * @param int $id Order ID.
     */
    public static function before_delete_order($id)
    {
    }
}
/**
 * WC_Deposits_Settings class.
 */
class WC_Deposits_Settings
{
    /**
     * Tab ID
     *
     * @var string
     */
    private $settings_tab_id = 'deposits';
    /**
     * Class instance
     *
     * @var WC_Deposits_Settings
     */
    private static $instance;
    /**
     * Get the class instance.
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
     * Scripts.
     */
    public function styles_and_scripts()
    {
    }
    /**
     * Add settings tab to woocommerce.
     *
     * @param array $settings_tabs Settings tabs.
     * @return array
     */
    public function add_woocommerce_settings_tab($settings_tabs)
    {
    }
    /**
     * Get the URL of the Deposits settings tab.
     *
     * @return string URL of the Deposits settings tab in WooCommerce settings.
     */
    public function get_settings_tab_url(): string
    {
    }
    /**
     * Returns settings array.
     *
     * @param array  $settings Settings.
     * @param string $current_section Section.
     * @return array
     */
    public function get_settings($settings, $current_section)
    {
    }
}
/**
 * WC_Deposits class.
 */
class WC_Deposits
{
    /**
     * Class Instance.
     *
     * @var object
     */
    private static $instance;
    /**
     * Get the class instance.
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
     * Deposits activation notice content.
     *
     * @since 2.3.9
     */
    public function get_deposits_activation_notice()
    {
    }
    /**
     * Display the deposits activation notice.
     *
     * @since 2.3.9
     */
    public function display_deposits_activation_notice()
    {
    }
    /**
     * Registers JS script asset.
     *
     * @param string $handle   Script handle.
     * @param string $filename Script filename.
     */
    public static function register_script($handle = '', $filename = '')
    {
    }
    /**
     * Localisation.
     */
    public function load_plugin_textdomain()
    {
    }
    /**
     * Includes.
     */
    public function includes()
    {
    }
    /**
     * Show row meta on the plugin screen.
     *
     * @param  array  $links Plugin Row Meta.
     * @param  string $file  Plugin Base file.
     * @return array
     */
    public function plugin_row_meta($links, $file)
    {
    }
    /**
     * Installer.
     */
    public function install()
    {
    }
    /**
     * Cleanup on plugin deactivation.
     *
     * @since 1.3.5
     */
    public function deactivate()
    {
    }
    /**
     * Installer (delayed).
     */
    public function delayed_install()
    {
    }
    /**
     * Add deposits filter in multicurrency get props filters to Convert fixed deposit amount.
     *
     * @param string[] $filter_tags The array of filter tags (the filter names).
     *
     * @return string[]
     */
    public function deposits_multicurrency_get_props_filters($filter_tags)
    {
    }
    /**
     * Declare compatibility with Woocommerce features.
     *
     * List of feature -
     *   1. High-Performance Order Storage
     *
     * @since 2.2.6 Rename function.
     *
     * @since 2.0.3
     */
    public function declare_woocommerce_feature_compatibility()
    {
    }
    /**
     * WooPayments MultiCurrency fixed price compatibility.
     *
     * This function is used to convert fixed price deposits to a specific
     * currency when using WooPayments MultiCurrency support.
     *
     * Note: This is not related to the WooCommerce Multicurrency extension.
     *
     * @since 2.2.2
     *
     * @param float $amount  Fixed amount deposit value.
     */
    public static function get_woopayments_multicurrency_price($amount)
    {
    }
    /**
     * Schedule cron event for invoice scheduled orders.
     *
     * @since 2.2.8
     */
    public function schedule_cron_events()
    {
    }
}
/**
 * Class for WC COT compatibility.
 *
 * @class    WC_Deposits_COT_Compatibility
 * @version  1.6.2
 */
class WC_Deposits_COT_Compatibility
{
    /**
     * Init.
     */
    public static function init()
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
     * Modify the main orders query to support multiple order statuses when viewing
     * scheduled payments.
     *
     * @param WP_Query $query The current WP_Query instance.
     * @return void
     */
    public static function modify_orders_query($query)
    {
    }
    /**
     * Modify the query arguments used in the (Custom Order Table-powered) order list table.
     *
     * @param array $order_query_args Arguments to be passed to `wc_get_orders()`.
     * @return array Modified Arguments.
     */
    public static function modify_query_args_for_parent_order($order_query_args)
    {
    }
    /**
     * Get scheduled payments URL for given order.
     *
     * @param int $order_id Order ID.
     * @return string scheduled payments URL.
     */
    public static function get_scheduled_payments_url($order_id)
    {
    }
    /**
     * Untrash HPOS order.
     *
     * @param WC_Order $order Order.
     */
    public static function untrash_order($order)
    {
    }
}
/**
 * Functions for WC core back-compatibility.
 *
 * @class    WC_Deposits_Core_Compatibility
 * @version  1.6.0
 */
class WC_Deposits_Core_Compatibility
{
    /**
     * Current REST request.
     *
     * @var WP_REST_Request
     */
    private static $request;
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
     * @since  1.6.0
     *
     * @param mixed           $result REST Result.
     * @param WP_REST_Server  $server REST Server.
     * @param WP_REST_Request $request REST Request.
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
     * Whether this is a Store/REST API request.
     *
     * @since  1.6.0
     *
     * @return boolean
     */
    public static function is_api_request()
    {
    }
    /**
     * Returns the current Store/REST API request or false.
     *
     * @since  1.6.0
     *
     * @return WP_REST_Request|false
     */
    public static function get_api_request()
    {
    }
    /**
     * Whether this is a Store API request.
     *
     * @since  1.6.0
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
     * @since  1.6.0
     *
     * @return boolean
     */
    public static function is_rest_api_request()
    {
    }
}
/**
 * Customer Reminder Notification Email.
 *
 * An email sent to the customer to remind them of an upcoming payment.
 *
 * @class       WC_Deposits_Email_Customer_Reminder_Notification
 * @extends     WC_Email
 */
class WC_Deposits_Email_Customer_Reminder_Notification extends \WC_Email
{
    /**
     * Whether the improved email is enabled in WooCommerce.
     *
     * @var bool
     */
    public $improved_email_enabled = \false;
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Filter the preview product.
     *
     * Modifies the dummy product title to indicate that it is a payment plan.
     *
     * @param WC_Product $item       Product.
     * @param string     $email_type Email type.
     * @return WC_Product Modified product.
     */
    public function modify_preview_dummy_product($item, $email_type)
    {
    }
    /**
     * Filter the preview variation product.
     *
     * Removes the variation product from the preview as the email
     * typically only has one product.
     *
     * @param WC_Product_Variation $item       Product variation.
     * @param string               $email_type Email type.
     * @return bool False to remove the variation product.
     */
    public function modify_preview_dummy_product_variation($item, $email_type)
    {
    }
    /**
     * Modify the preview order object.
     *
     * Sets the order status to 'scheduled-payment' and modifies the order
     * details for the preview.
     *
     * @param WC_Order $order      Order object.
     * @param string   $email_type Email type.
     * @return WC_Order Modified order object.
     */
    public function modify_preview_order_object($order, $email_type)
    {
    }
    /**
     * Prepare the email for preview.
     *
     * Replaces the placeholders in the email with dummy data.
     *
     * @param string[] $placeholders The email placeholders.
     * @param string   $email_type   The email type.
     * @return string[] The modified placeholders.
     */
    public function prepare_placeholders_for_email($placeholders, $email_type)
    {
    }
    /**
     * Trigger the email.
     *
     * @param int|WC_Order $order_id Order ID or WC_Order object.
     * @param WC_Order     $order    Order object.
     */
    public function trigger($order_id, $order = \false)
    {
    }
    /**
     * Get content for the HTML-version of the email.
     *
     * @return string
     */
    public function get_content_html()
    {
    }
    /**
     * Get content for the HTML-version of the email.
     *
     * @return string
     */
    public function get_content_plain()
    {
    }
}
/**
 * WC_Deposits_Plans_Table class.
 *
 * @extends WP_List_Table
 */
class WC_Deposits_Plans_Table extends \WP_List_Table
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Output name.
     *
     * @param  object $item Currently displayed item.
     * @return string
     */
    public function column_plan_name($item)
    {
    }
    /**
     * Output description.
     *
     * @param  object $item Currently displayed item.
     * @return string
     */
    public function column_plan_description($item)
    {
    }
    /**
     * Output the plans schedule.
     *
     * @param  object $item Currently displayed item.
     * @return string
     */
    public function column_schedule($item)
    {
    }
    /**
     * Custom columns
     *
     * @return  array
     */
    public function get_columns()
    {
    }
    /**
     * Get bulk actions.
     */
    public function get_bulk_actions()
    {
    }
    /**
     * Get items to display.
     */
    public function prepare_items()
    {
    }
}
\define('WC_DEPOSITS_VERSION', '2.4.8');
// WRCS: DEFINED_VERSION.
\define('WC_DEPOSITS_FILE', __FILE__);
/**
 * Install deposits upon activation.
 */
function wc_deposits_activate()
{
}
/**
 * Initialize plugin.
 */
function wc_deposits_init()
{
}
/**
 * WooCommerce Deactivated Notice.
 */
function wc_deposits_woocommerce_deactivated()
{
}