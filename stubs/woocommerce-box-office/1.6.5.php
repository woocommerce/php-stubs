<?php
/**
 * Generated stub declarations for woocommerce-box-office 1.6.5.
 * @see https://github.com/woocommerce/all-plugins/tree/stubs
 */

/**
 * Registers and enqueues Box Office scripts and styles.
 *
 * @class   WC_Box_Office_Assets
 * @version 1.6.5
 */
class WC_Box_Office_Assets
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Load frontend CSS.
     *
     * @access  public
     * @since   1.0.0
     * @return void
     */
    public function enqueue_styles()
    {
    }
    /**
     * Load frontend Javascript.
     *
     * @access  public
     * @since   1.0.0
     * @param   bool|string $force Whether to load the scripts outside the My Ticket page. The wp_enqueue_scripts hook passes ''.
     * @return  void
     */
    public function enqueue_scripts($force = \false)
    {
    }
    /**
     * Load admin Javascript.
     *
     * @access  public
     * @since   1.0.0
     * @param   string $hook The current admin page hook suffix.
     * @return  void
     */
    public function admin_enqueue_scripts($hook = '')
    {
    }
    /**
     * Load admin CSS.
     *
     * @access  public
     * @since   1.0.0
     * @param   string $hook The current admin page hook suffix.
     * @return  void
     */
    public function admin_enqueue_styles($hook = '')
    {
    }
}
/**
 * Class responsible for dealing with everything related to the adoption of
 * Gutenberg Blocks and WooCommerce.
 *
 * @class   WC_Box_Office_Blocks
 * @version 1.6.5
 */
class WC_Box_Office_Blocks
{
    /**
     * Constructor
     *
     * @return void
     */
    public function __construct()
    {
    }
    /**
     * Registers the block category 'WooCommerce Box Office'.
     *
     * @param array $block_categories Array of block categories.
     *
     * @return array
     */
    public function register_block_category($block_categories)
    {
    }
    /**
     * Register blocks.
     *
     * @return void
     */
    public function register_blocks()
    {
    }
    /**
     * Loads the Box-Office specific frontend styles to the editor.
     *
     * @return void
     */
    public function enqueue_admin_assets()
    {
    }
}
/**
 * Handles ticket products in the cart.
 *
 * @class   WC_Box_Office_Cart
 * @version 1.6.5
 */
class WC_Box_Office_Cart
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Filter whether express payment options are supported on the product pages.
     *
     * This runs on the filter `wcpay_payment_request_is_product_supported` as a
     * compatibility fix for WooPayments.
     *
     * @since 1.2.3
     *
     * @param bool  $is_supported Whether express payment options are supported on product pages.
     * @param mixed $product      The product. WooPayments documents this as WC_Product|null, but
     *                            the shape of a filtered value should not be trusted.
     * @return bool Whether express payment options are supported on product pages.
     */
    public function filter_wcpay_payment_request_is_product_supported($is_supported, $product)
    {
    }
    /**
     * Filter whether stripe express payment options should be hidden on the product pages.
     *
     * @since 1.2.9
     *
     * @param bool  $should_hide Whether express payment options should be hidden on product pages.
     * @param mixed $product     Stripe passes the global $post here (WP_Post|null), not a product.
     * @return bool Whether express payment options should be hidden on product pages.
     */
    public function filter_wc_stripe_hide_payment_request_on_product_page($should_hide, $product)
    {
    }
    /**
     * Validate ticket product data for Braintree PayPal express payment options.
     *
     * @since 1.2.9
     *
     * @param bool $is_valid Whether product data is valid.
     * @return bool Whether product data is valid.
     */
    public function braintree_paypal_product_button_validate_product_data($is_valid)
    {
    }
    /**
     * Process Braintree PayPal express payment options before adding to cart.
     *
     * @since 1.2.9
     *
     * @param int   $product_id   The product ID.
     * @param int   $quantity     The product quantity.
     * @param int   $variation_id The product variation ID.
     * @param array $cart_data    The cart data.
     * @return void
     */
    public function braintree_paypal_before_product_button_add_to_cart($product_id, $quantity, $variation_id, $cart_data)
    {
    }
    /**
     * Render ticket fields in single product summary.
     *
     * @return void
     */
    public function render_ticket_fields()
    {
    }
    /**
     * Add posted data to the cart item.
     *
     * @param array $cart_item_meta Cart item meta
     * @param int   $product_id     Product ID
     *
     * The hook also passes variation ID as argument 3 and quantity as argument 4.
     * Overrides should forward all received arguments to preserve those values.
     *
     * @return array Cart item meta
     * @throws Automattic\WooCommerce\StoreApi\Exceptions\RouteException When required ticket fields are missing or customer-detail quantity exceeds the purchase limit.
     */
    public function add_cart_item_data($cart_item_meta, $product_id)
    {
    }
    /**
     * Returns ticket meta to be stored in cart item meta.
     *
     * @param WC_Product $product     Product
     * @param array      $posted_data Posted data
     *
     * @return array Ticket meta
     */
    private function _ticket_meta($product, $posted_data)
    {
    }
    /**
     * Change the add to cart text for ticket enabled products.
     *
     * @param mixed      $text    The add to cart text, as filtered by WooCommerce and other plugins.
     * @param WC_Product $product The product.
     *
     * @return mixed
     */
    public function change_add_to_cart_text($text, $product)
    {
    }
    /**
     * Change the add to cart URL for ticket enabled products.
     *
     * @param String $url
     * @param WC_Product $product
     *
     * @return string|false
     */
    public function change_add_to_cart_url($url, $product)
    {
    }
    /**
     * Remove the add to cart class from ticket enabled products.
     *
     * @param String     $link    The HTML link for the add to cart button.
     * @param WC_Product $product The product object.
     * @return String The modified HTML link for the add to cart button.
     */
    public function loop_add_to_cart_button_remove_add_to_cart_class($link, $product)
    {
    }
    /**
     * Remove the add to cart class from ticket enabled products.
     *
     * @deprecated 1.5.1 Use loop_add_to_cart_button_remove_add_to_cart_class instead.
     *
     * @param String     $link    The HTML link for the add to cart button.
     * @param WC_Product $product The product object.
     * @return String The modified HTML link for the add to cart button.
     */
    public function loop_add_to_cart_buttom_remove_add_to_cart_class($link, $product)
    {
    }
    /**
     * Change the add to cart text for ticket enabled product in single page.
     *
     * @param mixed      $text    The add to cart text, as filtered by WooCommerce and other plugins.
     * @param WC_Product $product The product.
     *
     * @return mixed
     */
    public function change_add_to_cart_text_single($text, $product)
    {
    }
    /**
     * Make quantity input in cart page immutable.
     *
     * @param string $product_quantity Product quantity markup
     * @param string $cart_item_key    Cart item key
     * @param array  $cart_item        Cart item
     *
     * @return string Immutable quantity display
     */
    public function make_qty_in_cart_immutable($product_quantity, $cart_item_key, $cart_item)
    {
    }
    /**
     * Alter cart message when ticket product is added.
     *
     * Since WooCommerce 3.0, `wc_add_to_cart_message_html` passes a product ID => quantity
     * map, which this callback never recognised as a ticket, so it has not changed any message.
     *
     * @deprecated 1.6.5 No longer hooked; WooCommerce's add-to-cart message is used. Direct calls with a ticket product ID still get the ticket message.
     *
     * @param string    $message    Cart message
     * @param int|array $product_id Product ID, or the product ID => quantity map that wc_add_to_cart_message_html passes.
     *
     * @return string Cart message
     */
    public function filter_cart_message($message, $product_id)
    {
    }
    /**
     * Filter sold individually product found in cart.
     *
     * The ticket product will always generate different cart item key (because
     * of ticket field hash) with the same ticket product.
     *
     * One of each variation can be added to the cart when sold individually is enabled.
     *
     * @see https://github.com/woocommerce/woocommerce-box-office/issues/208
     *
     * @since 1.1.6
     * @version 1.1.9
     *
     * @param bool   $found_in_cart  Whether an item found in the cart.
     * @param int    $product_id     The ID of the product being added to the cart.
     * @param int    $variation_id   The variation ID of the product being added to the cart.
     * @param array  $cart_item_data Extra cart item data being passed into the item.
     * @param string $cart_id        Cart ID being evaluated.
     *
     * @return bool Whether an item found in the cart.
     */
    public function filter_sold_individually_found_in_cart($found_in_cart, $product_id, $variation_id, $cart_item_data, $cart_id)
    {
    }
    /**
     * Validate required ticket fields.
     *
     * @param  bool $passed     Validation.
     * @param  int  $product_id Product ID.
     * @return bool
     */
    public function validate_required_ticket_fields($passed, $product_id)
    {
    }
    /**
     * Get the add to cart text for ticket enabled products.
     *
     * @param WC_Product $product Product object.
     * @return string
     */
    public function get_add_to_cart_text($product)
    {
    }
    /**
     * Update the aria-label attribute for the add to cart button.
     *
     * @param array      $args    Add to cart button args.
     * @param WC_Product $product The product.
     * @return array
     */
    public function update_add_to_cart_aria_label($args, $product)
    {
    }
}
/**
 * Schedules and sends Box Office emails.
 *
 * @class   WC_Box_Office_Cron
 * @version 1.6.5
 */
class WC_Box_Office_Cron
{
    /**
     * Whether we are rendering an email or not.
     *
     * @var boolean
     */
    protected static $is_rendering_email = \false;
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Returns the value of `$is_rendering_email`.
     *
     * @return boolean
     */
    public static function is_rendering_email()
    {
    }
    /**
     * Filter cron schedules.
     *
     * @param array $schedules Schedules.
     *
     * @return array Schedules
     */
    public function cron_schedules($schedules)
    {
    }
    /**
     * Schedule sending batch emails from tools.
     *
     * @return void
     */
    public function scheduled_batch_emails()
    {
    }
    /**
     * Send batch emails. One job at a time.
     *
     * This worker is hooked from 'wc-box-office-send-batch-emails' schedule.
     *
     * @return void
     */
    public function send_emails_batch()
    {
    }
    /**
     * Schedule send email to each contact in each ticket after tickets published.
     *
     * @param int                    $timestamp  The time to send the email.
     * @param array<int, int|string> $ticket_ids Ticket IDs.
     * @param bool                   $force_send Whether to send even if the ticket's product has ticket emails turned off.
     * @return void
     */
    public function schedule_send_email_after_tickets_published($timestamp, array $ticket_ids, $force_send = \false)
    {
    }
    /**
     * Send email to each contact in each ticket.
     *
     * Triggered by scheduled event 'wc-box-office-send-email-after-tickets-published'.
     *
     * @param array<int, int|string> $ticket_ids Ticket IDs.
     * @param bool                   $force_send Force send even if ticket's product has _email_tickets
     *                                           set to false.
     *
     * @return void
     */
    public function send_email_to_ticket_contacts(array $ticket_ids, $force_send = \false)
    {
    }
    /**
     * Schedule send email after requesting private content link.
     *
     * @param int    $timestamp          The time to send the email.
     * @param string $email              Email address to send the email.
     * @param int    $ticket_id          Ticket ID.
     * @param int    $private_content_id Private content ID.
     *
     * @return void
     */
    public function schedule_send_email_for_private_content_link($timestamp, $email, $ticket_id, $private_content_id)
    {
    }
    /**
     * Send email which contains private content link. Template for the email
     * can be found in `templates/ticket/private-link-email.php`.
     *
     * Triggered by scheduled event 'wc-box-office-send-email-for-private-link'.
     *
     * @param string $email              Email address to send the email.
     * @param int    $ticket_id          Ticket ID.
     * @param int    $private_content_id Private content ID.
     *
     * @return void
     */
    public function send_email_for_private_content_link($email, $ticket_id, $private_content_id)
    {
    }
    /**
     * Schedule the job for updating user privacy preference.
     *
     * @param string $preference User preference for a ticket.
     * @param int    $page       The current batch of tickets being updated.
     *
     * @return void
     */
    public function schedule_user_privacy_update_job($preference, $page = 1)
    {
    }
    /**
     * Updates user privacy preference in all tickets.
     *
     * @param string $preference User preference for a ticket.
     * @param int    $page       The current batch of tickets being updated.
     *
     * @return void
     */
    public function update_user_preference($preference, $page = 1)
    {
    }
}
/**
 * Box Office Email Preview Class
 *
 * @class   WC_Box_Office_Email_Preview
 * @version 1.3.5
 */
class WC_Box_Office_Email_Preview
{
    /**
     * Constructor
     */
    public function __construct()
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
     * Get email preview content for the default email
     *
     * @return string
     */
    public function get_email_preview_content()
    {
    }
}
/**
 * Box Office Email
 *
 * @class   WC_Box_Office_Email
 * @version 1.6.5
 */
class WC_Box_Office_Email extends \WC_Email
{
    /**
     * Email message
     *
     * @var string
     */
    public $message = '';
    /**
     * Custom heading to override
     *
     * @var string
     */
    public $custom_heading = '';
    /**
     * Set email defaults
     */
    public function __construct()
    {
    }
    /**
     * Add pull-quote (blockquote) styling to this email's inlined CSS, since neither this plugin
     * nor WooCommerce core's transactional email stylesheet style blockquotes by default. Keep in
     * sync with the blockquote rules in src/scss/admin-tools.scss.
     *
     * @param string   $css   CSS to be inlined into the email.
     * @param WC_Email $email Email instance the styles are being generated for.
     * @return string
     */
    public function add_pull_quote_styles($css, $email)
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
     * Get email default heading.
     *
     * @return string
     */
    public function get_default_heading()
    {
    }
    /**
     * Get email heading.
     *
     * @return string
     */
    public function get_heading()
    {
    }
    /**
     * Prepares email content and triggers the transactional email
     *
     * @param string|array $to Recipient.
     * @param string       $subject Email subject.
     * @param string       $message Email message.
     * @param string       $custom_heading Email heading to override. Default empty string to use site-wide setting.
     * @return bool|void Whether the email was sent; nothing when disabled or without recipient.
     */
    public function trigger($to, $subject, $message, $custom_heading = '')
    {
    }
    /**
     * Returns HTML email content.
     *
     * @return string
     */
    public function get_content_html()
    {
    }
    /**
     * Returns plain email content.
     *
     * @return string
     */
    public function get_content_plain()
    {
    }
    /**
     * Initialize settings form fields
     *
     * @return void
     */
    public function init_form_fields()
    {
    }
}
/**
 * Box Office Logger.
 *
 * Can be used to log data to post meta or log debug data via WC_Logger.
 *
 * @class   WC_Box_Office_Logger
 * @version 1.6.5
 */
class WC_Box_Office_Logger
{
    /**
     * Instance of WC_Logger.
     *
     * @since 1.1.0
     *
     * @var WC_Logger|null
     */
    private $_logger;
    /**
     * Whether logging is enabled in setting.
     *
     * @since 1.1.0
     *
     * @var string
     */
    private $_enable_logging;
    public function __construct()
    {
    }
    /**
     * Log a message against a post.
     *
     * @param string $message Message to log.
     * @param int    $post_id Post ID to log against.
     * @param mixed  $data    Extra data to store with the message.
     * @return void
     */
    public function log($message, $post_id, $data = \null)
    {
    }
    /**
     * Log debug message.
     *
     * @since 1.1.0
     *
     * @param string $message Message to log
     *
     * @return void
     */
    public function log_debug($message)
    {
    }
    /**
     * Append a log entry to the post's log meta.
     *
     * @param string $message Message to log.
     * @param int    $post_id Post ID to log against.
     * @param mixed  $data    Extra data to store with the message.
     * @return void
     */
    public function log_to_post_meta($message, $post_id, $data)
    {
    }
    /**
     * Log message to a file via WC_Logger.
     *
     * @since 1.1.0
     *
     * @param string $message Message to log
     *
     * @return void
     */
    public function log_to_wc_logger($message)
    {
    }
}
/**
 * Handles tickets in orders.
 *
 * @class   WC_Box_Office_Order
 * @version 1.6.5
 */
class WC_Box_Office_Order
{
    /**
     * Ticket IDs captured before WooCommerce removes order items.
     *
     * @var array<int, array<int, int|string>>
     */
    private $tickets_pending_deletion = array();
    /**
     * Orders whose ticket restore records were captured by the WooCommerce trash hook.
     *
     * @var bool[]
     */
    private $orders_pending_trash = array();
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Populates values from billing information if autofill is enabled on ticket field.
     *
     * @see https://github.com/woocommerce/woocommerce-box-office/issues/318
     *
     * @param array          $data       Ticket fields array.
     * @param int            $product_id Product ID.
     * @param WC_Order|false $order      Order object, or false when the order can't be loaded.
     * @return array $data with possibly autofilled fields.
     */
    private function maybe_autofill_ticket_fields($data, $product_id, $order)
    {
    }
    /**
     * Populates ticket fields from customer detail mappings.
     *
     * When 'Use customer details for tickets' is enabled on a product,
     * this method uses the stored mappings to populate ticket fields
     * from the order's billing data.
     *
     * @since 1.6.0
     *
     * @param array          $data       Ticket fields array.
     * @param int            $product_id Product ID.
     * @param WC_Order|false $order      Order object, or false when the order can't be loaded.
     * @return array $data with populated fields from mappings.
     */
    private function populate_ticket_fields_from_mappings($data, $product_id, $order)
    {
    }
    /**
     * Extracts individual ticket information from order item metadata.
     *
     * @param WC_Order_Item|false $values   Item meta.
     * @param int                 $item_id  Item ID.
     * @param int                 $order_id Order ID.
     * @return array
     */
    private function get_ticket_data_from_order_item($values, $item_id, $order_id = 0)
    {
    }
    /**
     * Add ticket meta as order item meta.
     *
     * @param mixed $item_id  Item ID.
     * @param mixed $values   Item meta.
     * @param mixed $order_id Order ID.
     * @return void
     */
    public function add_order_item_meta($item_id, $values, $order_id = 0)
    {
    }
    /**
     * Update order item meta with ticket info specified by `$ticket_id`.
     *
     * The order item meta contains ticket fields information which is stored
     * as raw HTML string. The meta key contains HTML string too but with ticket
     * ID. When ticket is updated either via admin or front-end, updated info
     * should be propagated to order item meta too.
     *
     * @since 1.1.4
     * @version 1.1.4
     *
     * @see https://github.com/woocommerce/woocommerce-box-office/issues/180.
     *
     * @param int $ticket_id Ticket ID.
     *
     * @return bool True if updated successfully.
     */
    public function update_item_meta_from_ticket($ticket_id)
    {
    }
    /**
     * Use the ticket markup as the label of ticket order item meta.
     *
     * @param mixed  $label The attribute label, as filtered by WooCommerce and other plugins.
     * @param string $name  The attribute name.
     * @return mixed
     */
    public function filter_order_item_meta_ticket($label, $name)
    {
    }
    /**
     * Removed order items meta that contains ticket fields in markup. It won't
     * nicely displayed in PayPal.
     *
     * @see https://github.com/woothemes/woocommerce-box-office/issues/106
     *
     * @param string $output Output of items meta to display
     *
     * @return string Returns empty string if output contains markup of ticket fields
     */
    public function filter_order_items_meta_display($output)
    {
    }
    /**
     * Set ticket to publish.
     *
     * @param  integer $order_id Order ID
     * @return void
     */
    public function publish_tickets($order_id = 0)
    {
    }
    /**
     * Set ticket to pending.
     *
     * Changes the status for all the tickets from the order to pending.
     *
     * @param integer $order_id Order ID.
     * @return void
     */
    public function maybe_unpublish_tickets($order_id = 0)
    {
    }
    /**
     * Permanently delete tickets related to the order being deleted.
     *
     * @param int $order_id ID of order being deleted
     * @return void
     */
    public function delete_tickets($order_id)
    {
    }
    /**
     * Capture tickets while their order items still exist, without deleting them.
     *
     * @param int $order_id Order being deleted.
     * @return void
     */
    public function remember_tickets_for_order_deletion($order_id)
    {
    }
    /**
     * Trash tickets related to the order being deleted/cancelled.
     *
     * @param int $order_id ID of order being trashed
     * @return void
     */
    public function trash_tickets($order_id)
    {
    }
    /**
     * Untrash tickets related to the order being deleted.
     *
     * @param int $order_id ID of order being untrashed
     * @return void
     */
    public function untrash_tickets($order_id)
    {
    }
    /**
     * Remember only tickets newly trashed with this order, excluding prior revocations.
     *
     * @param int $order_id Order being trashed.
     * @return void
     */
    public function remember_tickets_for_order_restore($order_id)
    {
    }
    /**
     * Trash tickets when the legacy orders screen uses WordPress directly.
     *
     * @param int $post_id Order post being trashed.
     * @return void
     */
    public function maybe_trash_legacy_order_tickets($post_id)
    {
    }
    /**
     * Restore tickets when WordPress restores a legacy order post.
     *
     * @param int $post_id Restored post ID.
     * @return void
     */
    public function maybe_untrash_legacy_order_tickets($post_id)
    {
    }
    /**
     * Apply callable to tickets in order.
     *
     * @param int   $order_id      Order ID
     * @param mixed $callable      Callable func
     * @param array $callable_args Args to be passed to callable after ticket_id
     * @return void
     */
    private function _apply_func_to_order_tickets($order_id, $callable, $callable_args = array())
    {
    }
    /**
     * Display order tickets list.
     *
     * @param  WC_Order|false $order Order object.
     * @return void
     */
    public function order_details_ticket_list($order = \false)
    {
    }
    /**
     * Display order ticket in order email.
     *
     * @param  WC_Order|false $order Order object.
     * @return void
     */
    public function order_email_ticket_list($order = \false)
    {
    }
    /**
     * Check if ticket metadata should be hidden for an order.
     *
     * Returns true only when ALL ticket products in the order
     * have 'Use customer details for tickets' enabled.
     *
     * @since 1.6.0
     *
     * @param WC_Order $order Order object.
     * @return bool
     */
    private function should_hide_ticket_metadata($order)
    {
    }
    /**
     * Get tickets purchased in order.
     *
     * @param  int    $order_id Order ID.
     * @param  string $amount   Number of tickets to fetch.
     * @param  string $fields   How to return results: '' (for complete `WP_Post`, 'ids' for post IDs).
     * @param  array  $args     Overridable args for `get_posts()`.
     * @return array  Array of ticket posts
     */
    public function get_tickets_by_order($order_id = 0, $amount = 'all', $fields = '', $args = array())
    {
    }
    /**
     * Ensure that tickets are added to the order again action by the user.
     *
     * @since 1.0.0
     *
     * @param array                       $cart_item_data
     * @param WC_Order_Item_Product|array $order_item Order item, or its legacy array form.
     * @param WC_Order                    $original_order
     * @return array $order_meta
     */
    public function order_again_add_tickets($cart_item_data, $order_item, $original_order)
    {
    }
    /**
     * Don't send order items meta to gateway if order has ticket product.
     *
     * @see https://github.com/woothemes/woocommerce-box-office/issues/137
     * @since 1.1.0
     *
     * @param int|WC_Order $order Order ID or order object.
     * @return void
     */
    public function filter_order_items_meta_to_gateway($order)
    {
    }
    /**
     * Create barcode fields in checkout form.
     *
     * The fields contain 2 * N fields, where N is number of purchased tickets.
     * Keep field names for compatibility; barcode values are issued during processing.
     *
     * @since 1.1.1
     * @return void
     */
    public function maybe_create_barcode_fields()
    {
    }
    /**
     * Get barcode fields to be injected in checkout form.
     *
     * @since 1.1..1
     *
     * @return array Barcode fields
     */
    protected function _get_barcode_fields_for_checkout()
    {
    }
    /**
     * Maybe process barcode fields.
     *
     * Generate missing barcodes from the current order's stored ticket mappings.
     * Posted barcode fields are not an authority for ticket selection or values.
     *
     * @since 1.1.1
     *
     * @param int $order_id Order ID
     * @return void
     */
    public function maybe_process_barcode_fields($order_id)
    {
    }
    /**
     * Make sure display value contains correct HTML contents for tickets.
     * We need to do this after https://github.com/woocommerce/woocommerce/pull/17821.
     *
     * @param string        $display_value
     * @param WC_Meta_Data  $meta
     * @param WC_Order_Item $order_item
     *
     * @return string
     */
    public function process_ticket_display_meta($display_value, $meta, $order_item)
    {
    }
    /**
     * Move ticket to trash when it is refunded but other items in the order are not.
     *
     * @param int $order_id The order ID.
     *
     * @return void
     */
    public function move_ticket_to_trash_on_refund($order_id)
    {
    }
    /**
     * Assign the logged-in user to the tickets.
     *
     * @param \WC_Order $order Order object.
     * @return void
     */
    public function fix_box_office_tickets_customer_id_block_checkout($order)
    {
    }
}
/**
 * Registers the Box Office post types.
 *
 * @class   WC_Box_Office_Post_Types
 * @version 1.6.5
 */
class WC_Box_Office_Post_Types
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Change settings for ticket post type.
     *
     * @param  array $args Default args
     * @return array       Modified args
     */
    public function ticket_post_type_args($args = array())
    {
    }
    /**
     * Change settings for ticket email post type.
     *
     * @param  array $args Default args
     * @return array       Modified args
     */
    public function ticket_email_post_type_args($args = array())
    {
    }
    /**
     * Require commerce authority while preserving explicit capability overrides.
     *
     * @param array $args Post type arguments.
     * @return array
     */
    public function commerce_post_type_args($args)
    {
    }
    /**
     * Register post types.
     *
     * @return void
     */
    private function _register_post_types()
    {
    }
    /**
     * Wrapper function to register a new post type.
     *
     * @param  string $post_type   Post type name
     * @param  string $plural      Post type item plural name
     * @param  string $single      Post type item single name
     * @param  string $description Description of post type
     * @return object|void         Post type class object
     */
    private function _register_post_type($post_type = '', $plural = '', $single = '', $description = '')
    {
    }
}
/**
 * Exports and erases ticket data for privacy requests.
 *
 * @class   WC_Box_Office_Privacy
 * @version 1.6.5
 */
class WC_Box_Office_Privacy extends \WC_Abstract_Privacy
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
     *
     * @return void
     */
    public function register_erasers_exporters()
    {
    }
    /**
     * Returns a list of tickets.
     *
     * @param string  $email_address
     * @param int     $page
     *
     * @return array WP_Post
     */
    protected function get_tickets($email_address, $page)
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
     * Handle exporting data for tickets.
     *
     * @param string $email_address E-mail address to export.
     * @param int    $page          Pagination of data.
     *
     * @return array
     */
    public function ticket_data_exporter($email_address, $page = 1)
    {
    }
    /**
     * Finds and erases ticket data by email address.
     *
     * @param string $email_address The user email address.
     * @param int    $page  Page.
     * @return array An array of personal data in name value pairs
     */
    public function ticket_data_eraser($email_address, $page)
    {
    }
}
/**
 * Adds ticket settings to the product edit screen.
 *
 * @class   WC_Box_Office_Product_Admin
 * @version 1.6.3
 */
class WC_Box_Office_Product_Admin
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Add 'Ticket' option to products.
     *
     * @param  array  $options Default options
     * @return array           Modified options
     */
    public function ticket_type_option($options = array())
    {
    }
    /**
     * Add 'Ticket Fields' tab.
     *
     * @param  array  $tabs Default tabs
     * @return array        Modified tabs
     */
    public function ticket_tab($tabs = array())
    {
    }
    /**
     * Add content to the 'Ticket Fields' write panel
     * @return void
     */
    public function ticket_panel()
    {
    }
    /**
     * Save ticket options.
     *
     * @param  integer $post_id Post ID
     * @param  object  $post    Post object
     * @return void
     */
    public function save_ticket_options($post_id, $post)
    {
    }
}
/**
 * Adds Box Office reports.
 *
 * @class   WC_Box_Office_Report
 * @version 1.6.5
 */
class WC_Box_Office_Report
{
    /**
     * WC Admin report instance.
     *
     * @var WC_Admin_Report|null
     */
    private $_report;
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Add 'Ticket' tab in WC Reports.
     *
     * @param array $reports Tabs
     */
    public function reports_tab($reports)
    {
    }
    /**
     * Output the ticket sales by product report.
     *
     * @return void
     */
    public function sales_by_product()
    {
    }
    /**
     * Get the total sales of a product.
     *
     * @param int $product_id Product ID.
     * @return mixed The order report data, which other plugins can filter.
     */
    public function get_product_total_sales($product_id)
    {
    }
}
/**
 * Handles settings for Box Office.
 *
 * @class   WC_Box_Office_Settings
 * @since   1.1.0
 * @version 1.6.5
 */
class WC_Box_Office_Settings
{
    /**
     * Settings tab ID.
     *
     * @var string
     */
    private $settings_tab_id = 'box_office';
    public function __construct()
    {
    }
    /**
     * Display admin warning if Box Office emails enabled but the corresponding WC_Email is disabled
     *
     * @param string $inline Whether to keep notice inline if the string equals 'inline'.
     * @return void
     */
    public static function display_warning($inline = '')
    {
    }
    /**
     * Add settings tab to woocommerce
     *
     * @param mixed $settings_tabs The settings tabs, as filtered by WooCommerce and other plugins.
     * @return mixed
     */
    public function add_woocommerce_settings_tab($settings_tabs)
    {
    }
    /**
     * Do this when viewing our custom settings tab(s). One function for all tabs.
     *
     * @return void
     */
    public function woocommerce_settings_tab_action()
    {
    }
    /**
     * Save settings in a single field in the database for each tab's fields (one field per tab).
     *
     * @return void
     */
    public function woocommerce_settings_save()
    {
    }
    /**
     * Returns settings array.
     *
     * @return array settings
     */
    public function get_settings()
    {
    }
}
/**
 * Handles the ticket admin screens.
 *
 * @class   WC_Box_Office_Ticket_Admin
 * @version 1.6.5
 */
class WC_Box_Office_Ticket_Admin
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Add Box Office pages to WooCommerce screen IDs.
     *
     * @param  string[] $screen_ids Existing IDs.
     * @return string[]             Modified IDs
     */
    public function screen_ids($screen_ids = array())
    {
    }
    /**
     * Add ticket product_id filter.
     *
     * @return void
     */
    public function filter_ticket_product_id()
    {
    }
    /**
     * Display ticket check-in counter.
     *
     * Shows total tickets and remaining unchecked tickets based on current filters.
     *
     * @param string $which The location of the extra table nav markup: 'top' or 'bottom'.
     * @return void
     */
    public function display_ticket_counter($which)
    {
    }
    /**
     * Filter ticket products query.
     *
     * @param mixed $query
     *
     * @return void
     */
    public function filter_ticket_product_id_query($query)
    {
    }
    /**
     * Get count of tickets not yet checked in based on current admin filters.
     *
     * @param WP_Query $main_query The main query object with all filters applied.
     *
     * @return int Number of unchecked tickets
     */
    private function get_unchecked_ticket_count($main_query)
    {
    }
    /**
     * Create meta box on ticket edit screen.
     *
     * @param  WP_Post $post Post object.
     * @return void
     */
    public function event_ticket_meta_box($post)
    {
    }
    /**
     * Ticket barcode meta box.
     *
     * @param  WP_Post $post Post object.
     * @return void
     */
    public function display_ticket_barcode_meta_box($post)
    {
    }
    /**
     * Load content for ticket meta box.
     *
     * @param  WP_Post $post Post object.
     * @return void
     */
    public function event_ticket_meta_box_content($post)
    {
    }
    /**
     * Custom field wrapper in ticket meta box.
     *
     * @param array $tpl_vars Template vars for field
     *
     * @return array Template vars
     */
    public function custom_field_wrapper($tpl_vars)
    {
    }
    /**
     * Save fields from event ticket meta box.
     *
     * @param  integer $post_id Ticket ID
     * @return void
     */
    public function event_ticket_meta_box_save($post_id = 0)
    {
    }
    /**
     * Update order item meta when ticket is updated.
     *
     * @since 1.1.4
     * @version 1.1.4
     *
     * @param int     $post_id Post ID.
     * @param WP_Post $post    Post object.
     * @param bool    $update  Whether this is an existing post being updated or not.
     * @return void
     */
    public function update_order_item_meta($post_id, $post, $update)
    {
    }
    /**
     * Create meta box on ticket edit screen.
     *
     * @param  WP_Post $post Post object.
     * @return void
     */
    public function event_ticket_email_meta_box($post)
    {
    }
    /**
     * Load content for ticket email meta box.
     *
     * @param  WP_Post $post Post object.
     * @return void
     */
    public function event_ticket_email_meta_box_content($post)
    {
    }
    /**
     * Load content for ticket email meta box.
     *
     * @param  WP_Post $post Post object.
     * @return void
     */
    public function event_ticket_email_content_meta_box_content($post)
    {
    }
    /**
     * Output the email log meta box content.
     *
     * @param WP_Post $post Post object.
     * @return void
     */
    public function event_ticket_email_log_meta_box_content($post)
    {
    }
    /**
     * Modify admin columns for tickets list table.
     *
     * @param  string[] $columns Default columns.
     * @return string[]          Modified columns
     */
    public function manage_ticket_columns($columns = array())
    {
    }
    /**
     * Display data in ticket list table columns.
     *
     * @param  string  $column  Column name
     * @param  integer $post_id Ticket ID
     * @return void
     */
    public function display_ticket_columns($column = '', $post_id = 0)
    {
    }
    /**
     * Set row actions for event_ticket post type.
     *
     * @param string[] $actions List of actions.
     * @param WP_Post  $post    Post object
     *
     * @return string[]
     */
    public function row_actions($actions, $post)
    {
    }
    /**
     * Add new bulk actions for event_ticket post type and remove edit action.
     *
     * @param array $actions Bulk actions.
     *
     * @return array $actions Bulk actions
     */
    public function modify_bulk_actions($actions)
    {
    }
    /**
     * Handle bulk actions for event_ticket post type.
     *
     * @param string                 $redirect_to Redirect URL after bulk actions.
     * @param string                 $doaction    Action to perform.
     * @param array<int, int|string> $post_ids    Post IDs.
     * @return string Redirect URL
     */
    public function handle_bulk_actions($redirect_to, $doaction, $post_ids)
    {
    }
    /**
     * Report selections skipped by a custom ticket bulk action.
     *
     * @return void
     */
    public function bulk_action_notice()
    {
    }
    /**
     * Remove the bulk-action result from subsequent admin URLs.
     *
     * @param string[] $args Removable query arguments.
     * @return string[]
     */
    public function removable_query_args($args)
    {
    }
    /**
     * Modify admin columns for ticket emails list table.
     *
     * @param  string[] $columns Default columns.
     * @return string[]          Modified columns
     */
    public function manage_ticket_email_columns($columns = array())
    {
    }
    /**
     * Remove 'Add New' menu item from Tickets
     * @return void
     */
    public function hide_ticket_add()
    {
    }
    /**
     * Prevent access to specific admin pages
     * @return void
     */
    public function block_admin_pages()
    {
    }
    /**
     * Add create ticket page.
     *
     * @return void
     */
    public function add_create_ticket_page()
    {
    }
    /**
     * Render create ticket page on admin.
     *
     * @return void
     */
    public function create_ticket_page()
    {
    }
    /**
     * Register the navigation items in the WooCommerce navigation.
     *
     * WooCommerce removed its navigation feature in 9.5, so this has had no effect.
     *
     * @deprecated 1.6.5 No longer hooked; WooCommerce no longer has the navigation it registered items in.
     * @return void
     */
    public function register_navigation_items()
    {
    }
}
/**
 * WC_Box_Office_Ticket_Ajax class.
 *
 * Handles ajax requests for ticket scanning.
 *
 * @class   WC_Box_Office_Ticket_Ajax
 * @version 1.6.3
 */
class WC_Box_Office_Ticket_Ajax
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Process scanning/input of barcode.
     *
     * @return void
     */
    public function scan_ticket()
    {
    }
}
/**
 * Generates and displays ticket barcodes.
 *
 * @class   WC_Box_Office_Ticket_Barcode
 * @version 1.6.5
 */
class WC_Box_Office_Ticket_Barcode
{
    /**
     * Checks if barcode functionality is available or not.
     *
     * @since 1.1.1
     *
     * @return bool|void Returns true if barcode functionality is available
     */
    public function is_available()
    {
    }
    /**
     * Display ticket barcode of a given ticket.
     *
     * The barcode for this ticket is displayed in ticket meta box (in admin
     * screen) and printed page (for customer). If current ticket doesn't have
     * barcode (for example the order barcodes extension just installed recently),
     * it will generate new barcode text and image.
     *
     * @param integer|WP_Post $ticket_id Ticket ID or ticket post.
     * @param array           $args {
     *     Optional. Arguments to display ticket barcode.
     *
     *     @type bool $auto_generate Automatically generate barcode when barcode
     *                               meta is not present in ticket post. Default
     *                               to `true`. In case enqueuing JS is not possible
     *                               (e.g. in printed layout) then set this to
     *                               `false`
     * }
     *
     * @return void
     */
    public function display_ticket_barcode($ticket_id = 0, $args = array())
    {
    }
    /**
     * Generate unique barcode for ticket.
     *
     * @since 1.0.0
     *
     * @param int $ticket_id Ticket ID
     *
     * @return  void
     */
    public function generate_ticket_barcode($ticket_id = 0)
    {
    }
    /**
     * Generate a unique barcode text for a ticket.
     *
     * @since 1.1.1
     *
     * @return string Generated barcode text
     */
    public function generate_barcode_text_for_ticket()
    {
    }
    /**
     * @deprecated
     *
     * @return string
     */
    public function get_ticket_barcode_string()
    {
    }
    /**
     * Retrieve ticket ID from a given barcode text.
     *
     * @since 1.1.1
     *
     * @param  string  $barcode Barcode text
     * @return integer          Ticket ID
     */
    public function get_ticket_id_from_barcode_text($barcode = '')
    {
    }
    /**
     * @deprecated
     *
     * @param string $barcode Barcode text.
     * @return int
     */
    public function get_barcode_ticket($barcode = '')
    {
    }
}
/**
 * Creates tickets manually from the admin.
 *
 * @class   WC_Box_Office_Ticket_Create_Admin
 * @version 1.6.5
 */
class WC_Box_Office_Ticket_Create_Admin
{
    /**
     * Required fields.
     *
     * @var array
     */
    private $_fields = array();
    /**
     * Errors.
     *
     * @var string[]
     */
    private $_errors = array();
    /**
     * Clean data after validated.
     *
     * @var array
     */
    private $_clean_data = array();
    /**
     * Cache current product.
     *
     * @var WC_Product|null|false
     */
    private $_current_product;
    /**
     * Cache current variation_id.
     *
     * @var int
     */
    private $_current_variation_id;
    /**
     * Cache current product variation.
     *
     * @var array
     */
    private $_current_variation = array();
    /**
     * Cache current order.
     *
     * @var WC_Order|null
     */
    private $_current_order;
    /**
     * Created tickets.
     *
     * @var WC_Box_Office_Ticket[]
     */
    private $_created_tickets;
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Render the create ticket admin page.
     *
     * @param array $posted_data Posted data
     *
     * @return void
     */
    public function render($posted_data = array())
    {
    }
    /**
     * Get step from posted data.
     *
     * @param array $posted_data Posted data
     *
     * @return int Step
     */
    private function _get_step($posted_data)
    {
    }
    /**
     * Process posted data if present.
     *
     * @throws Exception
     *
     * @param array $posted_data Posted data
     * @param int   $step        Current step.
     *
     * @return bool
     */
    private function _process_posted_data($posted_data, $step)
    {
    }
    /**
     * Maybe create order item.
     *
     * @throws Exception
     *
     * @return int Order item ID
     */
    private function _maybe_create_order_item()
    {
    }
    /**
     * Create order from given customer and total.
     *
     * @since 1.0.0
     * @version 1.1.7
     *
     * @param int    $customer_id Customer ID.
     * @param string $total       Total for the order.
     *
     * @return int Order ID.
     * @throws Exception When WooCommerce cannot create the order.
     */
    private function _create_order($customer_id, $total)
    {
    }
    /**
     * Create tickets.
     *
     * @param int $item_id Order item ID
     *
     * @return WC_Box_Office_Ticket[] List of created tickets
     */
    private function _create_tickets($item_id = 0)
    {
    }
    /**
     * Maybe send emails to ticket holders if user opt-in to 'Send confirmation email to each ticket?'.
     *
     * @param array $posted_data Posted data
     *
     * @return void
     */
    private function _maybe_send_emails($posted_data)
    {
    }
    /**
     * Validate posted data.
     *
     * @throws Exception
     *
     * @param array $data Posted data. Basically from $_POST
     *
     * @return void
     */
    private function _validate($data)
    {
    }
    /**
     * Check if field is required. If required make sure it's available in posted
     * data.
     *
     * @throws Exception
     *
     * @param string $field      Field's name
     * @param array  $field_prop Field's properties
     * @param array  $data       Posted data
     *
     * @return bool True if field is required
     */
    private function _is_field_required($field, $field_prop, $data)
    {
    }
    /**
     * Sanitize field's value and store sanitized value into clean_data.
     *
     * @param string $field      Field's name
     * @param array  $field_prop Field's properties
     * @param array  $data       Posted data
     *
     * @return void
     */
    private function _sanitize_field($field, $field_prop, $data)
    {
    }
    /**
     * Sanitize field's value and store sanitized value into clean_data.
     *
     * @throws Exception
     *
     * @param string $field      Field's name
     * @param array  $field_prop Field's properties
     * @param array  $data       Posted data
     *
     * @return void
     */
    private function _validate_field($field, $field_prop, $data)
    {
    }
    /**
     * Sanitize create order method.
     *
     * @param string $value Create order method
     *
     * @return string Create order method
     */
    private function _sanitize_create_order_method($value)
    {
    }
    /**
     * Default sanitizer. Return $value without any change.
     *
     * @param mixed $value Value
     *
     * @return mixed Value
     */
    private function _return_no_change($value)
    {
    }
    /**
     * Returns true if $value is NOT zero.
     *
     * @param int $value Value
     *
     * @return bool True if $value is NOT zero
     */
    private function _validate_not_zero($value)
    {
    }
    /**
     * Validate create order method.
     *
     * @param string $value Value
     *
     * @return bool True if $value is valid create order method
     */
    private function _validate_create_order_method($value)
    {
    }
    /**
     * Validate order ID.
     *
     * @param int $value Order ID
     *
     * @return bool True if $value is valid order ID
     */
    private function _validate_existing_order($value)
    {
    }
    /**
     * Validate product ID.
     *
     * @throws Exception
     *
     * @param int   $value Product ID
     * @param array $data  Posted data
     *
     * @return bool True if $value is valid product ID
     */
    private function _validate_product($value, $data)
    {
    }
    /**
     * Get variation ID.
     *
     * @throws Exception
     *
     * @param WC_Product $product Product
     * @param array      $data    Posted data
     *
     * @return int Variation ID
     */
    private function _get_variation_id($product, $data)
    {
    }
    /**
     * Validate ticket fields.
     *
     * @throws Exception
     *
     * @param array $value Ticket fields
     * @param array $data  Posted data
     *
     * @return bool True if $value is valid ticket fields
     */
    private function _validate_ticket_fields($value, $data)
    {
    }
    /**
     * Only require ticket_order_id when ticket_order_type is 'existing'.
     *
     * @param array $posted_data Posted data
     *
     * @return bool True if ticket_order_type is 'existing'
     */
    private function _maybe_require_order_id($posted_data)
    {
    }
    /**
     * Only require field after step one
     *
     * @param array $posted_data Posted data
     *
     * @return bool True after posted from step #1
     */
    private function _require_it_after_step_one($posted_data)
    {
    }
    /**
     * Maybe print errors.
     *
     * @return void
     */
    public function maybe_print_errors()
    {
    }
}
/**
 * Renders the ticket fields form for a ticket product.
 *
 * @class   WC_Box_Office_Ticket_Form
 * @version 1.6.5
 */
class WC_Box_Office_Ticket_Form
{
    /**
     * Ticket-enabled product.
     *
     * @var WC_Product
     */
    public $product;
    /**
     * Ticket fields which is set from product.
     *
     * @var array
     */
    public $fields = array();
    /**
     * Prefix for field's name.
     *
     * @var string
     */
    public $field_name_prefix = 'ticket_fields';
    /**
     * Posted data.
     *
     * @var array
     */
    private $_posted_data;
    /**
     * Ticket fields data after validated.
     *
     * @var array
     */
    private $_clean_data = array();
    /**
     * Flag to indicate whether validation has been performed.
     *
     * @var bool
     */
    private $_validated = \false;
    /**
     * Constructor.
     *
     * @param WC_Product $product Product.
     * @param mixed      $data    Posted ticket field values, or null.
     */
    public function __construct(\WC_Product $product, $data = \null)
    {
    }
    /**
     * Render the ticket form fields.
     *
     * @param mixed $args Form arguments, as an array or a query string (see wp_parse_args()).
     * @return void
     */
    public function render($args = array())
    {
    }
    /**
     * Retrieve customer data to populate the fields in ticket form.
     *
     * Customer can be logged-in user viewing the single product ticket or
     * selected customer when creating ticket via admin page.
     *
     * @since 1.1.2
     *
     * @return array Customer data.
     */
    private function _get_customer_data()
    {
    }
    /**
     * Enqueue the script for forms with multiple tickets.
     *
     * @return void
     */
    private function _multiple_tickets_js()
    {
    }
    /**
     * Enqueue JS script to handle client-side validation of required ticket fields,
     * including checkbox groups.
     *
     * @param array $args            Ticket form related parameters.
     * @param array $required_fields Configuration data for all required fields used for validation.
     * @see   https://github.com/woocommerce/woocommerce-box-office/issues/105
     * @return void
     */
    private function ticket_form_js($args, $required_fields)
    {
    }
    /**
     * Return input-based template vars from given field key and properties.
     *
     * @param string $field_key Field's key
     * @param array  $field     Field properties
     *
     * @return array Template vars
     */
    private function _input_field_to_template_vars($field_key, $field)
    {
    }
    /**
     * Return option-based template vars from given field key and properties.
     *
     * @param string $field_key Field's key
     * @param array  $field     Field properties
     *
     * @return array Template vars
     */
    private function _option_field_to_template_vars($field_key, $field)
    {
    }
    /**
     * Get required field template.
     *
     * @param string $field_key Field's key.
     * @param array  $field     Field properties.
     * @return string|false
     */
    private function _get_required_template($field_key, $field)
    {
    }
    /**
     * Load field template with passed args.
     *
     * @param string $type Field type that can be found in templates/ticket-fields
     * @param array  $vars List of variables that will be available on template
     *
     * @return void
     */
    private function _load_field_template($type, $vars = array())
    {
    }
    /**
     * Validate posted data.
     *
     * @throws Exception
     *
     * @param array $posted_data Posted data to the form.
     * @return void
     */
    public function validate($posted_data)
    {
    }
    /**
     * Validate field of the given key and given value.
     *
     * @throws Exception
     *
     * @param string       $key   Field's key
     * @param string|array $value Field's value, an array for multi-option fields.
     *
     * @return void
     */
    private function _validate_field($key, $value)
    {
    }
    /**
     * Check whether field, from the given, key has given property stored.
     *
     * @param string $key  Field's key
     * @param string $prop Field's property
     *
     * @return bool True if field has the property
     */
    private function _field_has_prop($key, $prop)
    {
    }
    /**
     * Get the value of field's property.
     *
     * @param string $key     Field's key
     * @param string $prop    Field's property
     * @param mixed  $default Default value to return of property doesn't exist.
     *
     * @return mixed Value of field's property
     */
    private function _field_prop_val($key, $prop, $default = \null)
    {
    }
    /**
     * Check whether the value of field's property matches with the given value.
     *
     * @param string $key      Field's key
     * @param string $prop     Field's property
     * @param mixed  $prop_val Value to match
     *
     * @return bool True if matches
     */
    private function _field_prop_is($key, $prop, $prop_val = '')
    {
    }
    /**
     * Get posted data.
     *
     * @return array
     */
    public function get_posted_data()
    {
    }
    /**
     * Get clean data after validated.
     *
     * @return array Clean data
     */
    public function get_clean_data()
    {
    }
}
/**
 * Class that handles frontend page query.
 *
 * @class   WC_Box_Office_Ticket_Frontend_Query
 * @since   1.0.2
 * @version 1.6.5
 */
class WC_Box_Office_Ticket_Frontend_Query extends \WC_Query
{
    public function __construct()
    {
    }
    /**
     * Add a query var for my-tickets.
     *
     * @since 1.2.8
     *
     * @param array $vars Query vars.
     *
     * @return array altered query vars
     */
    public function add_my_tickets_woocommerce_query_vars($vars)
    {
    }
    /**
     * Update the title for the my-tickets endpoint.
     *
     * @since 1.2.8
     *
     * @global $wp WP The WordPress environment.
     *
     * @param string $title Title.
     *
     * @return string Altered title
     */
    public function change_endpoint_my_tickets_title($title)
    {
    }
    /**
     * Init query vars by loading options.
     *
     * @return void
     */
    public function init_query_vars()
    {
    }
    /**
     * Check if the current query is for a type we want to override.
     *
     * @param  string $query_var the string for a query to check for
     * @return bool
     */
    protected function is_query($query_var)
    {
    }
    /**
     * Get endpoint title.
     *
     * @global $wp The WordPress environment.
     *
     * @param  string $endpoint Endpoint name.
     * @param  string $action   Optional action or variation within the endpoint.
     * @return string           Endpoint title.
     */
    public function get_endpoint_title($endpoint, $action = '')
    {
    }
    /**
     * Changes page title on my tickets page.
     *
     * @param  string $title original title
     * @return string        changed title
     */
    public function change_endpoint_title($title)
    {
    }
    /**
     * Insert the new endpoint into the My Account menu.
     *
     * @param array $menu_items Menu items.
     * @return array
     */
    public function add_menu_items($menu_items)
    {
    }
    /**
     * Endpoint HTML content.
     *
     * @return void
     */
    public function endpoint_content()
    {
    }
    /**
     * Fix for endpoints on the homepage
     *
     * Based on WC_Query->pre_get_posts(), but only applies the fix for endpoints on the homepage from it
     * instead of duplicating all the code to handle the main product query.
     *
     * @param mixed $q query object
     * @return void
     */
    public function pre_get_posts($q)
    {
    }
}
/**
 * Handles ticket pages on the frontend.
 *
 * @class   WC_Box_Office_Ticket_Frontend
 * @version 1.6.5
 */
class WC_Box_Office_Ticket_Frontend
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Display tickets list in my account page.
     *
     * @since 1.0.2
     * @return void
     */
    public function my_tickets()
    {
    }
    /**
     * My tickets page query.
     *
     * @since 1.0.2
     * @return void
     */
    public function my_tickets_query()
    {
    }
    /**
     * Process updated ticket from ticket edit page.
     *
     * @since 1.1.0
     *
     * @return void
     */
    public function maybe_process_updated_ticket()
    {
    }
    /**
     * Maybe print ticket request.
     *
     * @since 1.1.0
     *
     * @return void
     */
    public function maybe_print_ticket()
    {
    }
    /**
     * Hijacks the template to render when printing the ticket.
     *
     * @since 1.1.0
     *
     * @return void
     */
    public function print_ticket()
    {
    }
    /**
     * Validate whether current request comes with expected request vars (POST
     * and GET) and from my-ticket page.
     *
     * @since 1.1.0
     *
     * @param string $mode  Either 'edit' or 'print'. Default to 'edit'.
     *
     * @return bool
     */
    protected function _is_valid_ticket_page_request($mode = 'edit')
    {
    }
    /**
     * Display user tickets on My Account page.
     *
     * @return void
     */
    public function account_ticket_list()
    {
    }
    /**
     * Add order tickets to PDF invoice.
     *
     * @param  string  $pdflines Existing PDF content
     * @param  integer $order_id Order ID
     * @return string            Updated PDF content
     */
    public function pdf_invoice_ticket_list($pdflines = '', $order_id = 0)
    {
    }
}
/**
 * Registers the Box Office shortcodes.
 *
 * @class   WC_Box_Office_Ticket_Shortcode
 * @version 1.6.5
 */
class WC_Box_Office_Ticket_Shortcode
{
    /**
     * Notice when trying to retrieve link for viewing private content.
     *
     * @var string
     */
    private $_notice_link_retrieval = '';
    /**
     * Notice type when trying to retrieve link for viewing private content.
     *
     * @var int|string
     */
    private $_notice_type_link_retrieval = '';
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Shortcode for my ticket.
     *
     * @since 1.1.0
     *
     * @param  array  $params Shortcode parameters
     * @return string         HTML of edit ticket
     */
    public function my_ticket($params = array())
    {
    }
    /**
     * Shortcode for user ticket list.
     *
     * @param  array  $params Shortcode parameters
     * @return string         HTML of user ticket list
     */
    public function user_ticket_list($params = array())
    {
    }
    /**
     * Shortcode for order ticket list.
     *
     * @param  array  $params Shortcode parameters
     * @return string|false|void HTML of order ticket list
     */
    public function order_ticket_list($params = array())
    {
    }
    /**
     * Shortcode to display purchased tickets (attendees).
     *
     * @param array $params Shortcode parameters.
     * @return string HTML of ticket list.
     */
    public function display_tickets($params = array())
    {
    }
    /**
     * Form for scanning barcodes.
     *
     * @param  array  $params Shortcode parameters
     * @return string|false|void Form markup
     */
    public function ticket_scan_form($params = array())
    {
    }
    /**
     * Lock post content with [ticket_private_content][/ticket_private_content].
     *
     * If token is not passed in $_GET then user will be prompted with notice
     * and email form to retrieve link (with token in query string) to unlock
     * content.
     *
     * @param array  $atts    Shortcode attributes.
     * @param string $content Content in [ticket_private_content][/ticket_private_content].
     *
     * @return string Private content
     */
    public function private_content($atts = array(), $content = '')
    {
    }
    /**
     * Maybe send link to ticket's email to unlock private content. Link is URL
     * of the page with ticket's token appended in query string.
     *
     * @return void
     */
    public function maybe_send_private_content_link()
    {
    }
    /**
     * Get private content based on given content vars for the template.
     *
     * @param array $content_vars Variables for the template
     *
     * @return string Private content
     */
    private function _get_private_content($content_vars)
    {
    }
}
/**
 * Class that represents a ticket.
 *
 * @class   WC_Box_Office_Ticket
 * @version 1.6.5
 */
class WC_Box_Office_Ticket
{
    /**
     * Ticket's ID.
     *
     * @var int
     */
    public $id;
    /**
     * Post object of this ticket.
     *
     * @var WP_Post
     */
    public $post;
    /**
     * Ticket title.
     *
     * @var string
     */
    public $title;
    /**
     * Ticket status.
     *
     * @var string
     */
    public $status;
    /**
     * Ticket fields defined from product.
     *
     * @var array
     */
    public $fields;
    /**
     * Product ID.
     *
     * @var int
     */
    public $product_id;
    /**
     * Variation ID.
     *
     * @var int
     */
    public $variation_id;
    /**
     * Product in which this ticket is purchased from.
     *
     * @var WC_Product|false|null
     */
    public $product;
    /**
     * Order ID.
     *
     * @var int
     */
    public $order_id;
    /**
     * Order that creates this ticket.
     *
     * @var WC_Order|WC_Order_Refund|false|null
     */
    public $order;
    /**
     * Unique key associated to ticket.
     *
     * @var string
     */
    public $uid = '';
    /**
     * Ticket position/index relative to other tickets in same order item.
     *
     * @var int
     */
    public $index = 0;
    /**
     * Flag to indicate properties of instance has been populated or not.
     *
     * @var bool
     */
    public $populated = \false;
    /**
     * Temporary order item data.
     *
     * @var array
     */
    private $_order_item_data;
    /**
     * Constructor.
     *
     * Instantiating this class may not populate the properties or create a post.
     * If order data is passed and an ticket need to be created, invoke `create`
     * method.
     *
     * @param mixed $ticket If array is passed, then it's assumed as order's data.
     *                      Otherwise WP_Post or Post ID is expected.
     */
    public function __construct($ticket = \false)
    {
    }
    /**
     * Populate properties based on WP_Post.
     *
     * @param int|WP_Post $ticket Post ID or object.
     * @param bool        $force Force populate
     *
     * @return void
     */
    public function populate($ticket, $force = \false)
    {
    }
    /**
     * Create new ticket from an order item data.
     *
     * @param string $status Ticket's status
     *
     * @return mixed
     */
    public function create($status = 'publish')
    {
    }
    /**
     * Update the ticket.
     *
     * @throws Exception
     *
     * @param array $data Ticket fields data for the update
     *
     * @return void
     */
    public function update($data)
    {
    }
    /**
     * Get printed content with label variables replaced with real values.
     *
     * @return string Printed ticket content
     */
    public function get_printed_content()
    {
    }
    /**
     * Get ticket fields by its type.
     *
     * @param string $type Field type.
     */
    public function get_ticket_fields_by_type($type)
    {
    }
    /**
     * Maybe create title with its formatted variations.
     *
     * @param WC_Product $product Product object.
     * @param array      $data    Ticket data.
     *
     * @return string Title that might be formatted with variations
     */
    private function maybe_create_title_variation($product, $data)
    {
    }
    /**
     * Save ticket field.
     *
     * @param integer      $ticket_id Ticket ID
     * @param string       $key       Field key
     * @param string|array $value     Submitted value, or the array of checked options for a checkbox field.
     * @param string       $type      Field type
     *
     * @return void
     */
    public function save_ticket_field($ticket_id, $key, $value, $type = 'text')
    {
    }
    /**
     * Set ticket to an order and order item by ID.
     *
     * @param int $order_id      Order ID
     * @param int $order_item_id Order item ID
     *
     * @return void
     */
    public function set_order_item_id($order_id, $order_item_id)
    {
    }
    /**
     * Generate token from a given ticket ID. Copied from wp_hash_password.
     *
     * @param int $ticket_id Ticket ID
     * @return string
     */
    private function _generate_token($ticket_id)
    {
    }
}
/**
 * Box Office tools.
 *
 * Handle tools that can be found in Ticket > Tools page.
 *
 * @class   WC_Box_Office_Tools
 * @version 1.6.5
 */
class WC_Box_Office_Tools
{
    /**
     * Error messages.
     *
     * @var string[]
     */
    private $_errors = array();
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Add the admin-tools stylesheet to the TinyMCE editor iframe on the Tickets > Tools > Emails screen,
     * so blockquotes get the same pull-quote styling in the editor as in the preview panel and delivered email.
     *
     * @param string $stylesheets Comma-delimited list of stylesheets.
     * @return string
     */
    public function add_editor_content_css($stylesheets)
    {
    }
    /**
     * Add settings page to admin menu.
     *
     * @return void
     */
    public function add_menu_item()
    {
    }
    /**
     * Add settings link to plugin list table.
     *
     * @param  string[] $links Existing links.
     * @return string[]        Modified links
     */
    public function add_tools_link($links)
    {
    }
    /**
     * Dispatch action in tools page.
     *
     * @return void
     */
    public function dispatch_tools_action()
    {
    }
    /**
     * Send test email via ajax request.
     *
     * @return void
     */
    public function show_test_email()
    {
    }
    /**
     * AJAX handler to get ticket field options.
     *
     * @return void
     */
    public function get_ticket_field_options_ajax()
    {
    }
    /**
     * Export selected tickets.
     *
     * @since 1.0.0
     * @version 1.1.5
     *
     * @return false False if the request is not valid; otherwise it exits.
     */
    public function export_tickets()
    {
    }
    /**
     * Send submitted email to specified recipients.
     *
     * @return void
     */
    public function email_tickets()
    {
    }
    /**
     * Update user privacy preference.
     *
     * @return void
     */
    public function user_privacy()
    {
    }
    /**
     * Notice message when email job is queued.
     *
     * @return void
     */
    public function notice_email_job_queued()
    {
    }
    /**
     * Load tools page content.
     *
     * @return void
     */
    public function tools_page()
    {
    }
    /**
     * Get formatted errors.
     *
     * @return string
     */
    protected function _get_formatted_errors()
    {
    }
}
/**
 * Box Office installer and updater.
 *
 * @class   WC_Box_Office_Updater
 * @since   1.1.0
 * @version 1.6.5
 */
class WC_Box_Office_Updater
{
    /**
     * List of update callbacks from version-to-version.
     *
     * @var array<string, string>
     */
    protected $_updates = array('1.1.0' => 'wcbo_update_110');
    /**
     * Install the plugin. Called by handler of register_activation_hook.
     *
     * @return void
     */
    public function install()
    {
    }
    /**
     * Install my ticket page.
     *
     * @return void
     */
    public function install_my_ticket_page()
    {
    }
    /**
     * Install default settings.
     *
     * @return void
     */
    public function install_default_settings()
    {
    }
    /**
     * Update version on DB. Called by version check routine that's called when
     * plugin is loaded.
     *
     * @see WC_Account_Funds::version_check
     *
     * @param string $version Version to store in DB
     *
     * @return void
     */
    public function update_version($version = \null)
    {
    }
    /**
     * Check for update based on current plugin's version versus installed
     * version. Perform update routine if version mismatches.
     *
     * @param string $current_version Plugin's version
     *
     * @return void
     */
    public function update_check($current_version)
    {
    }
    /**
     * Perform update.
     *
     * @param string $installed_version Installed version
     *
     * @return void
     */
    protected function _update($installed_version)
    {
    }
}
/**
 * Box Office plugin controller.
 *
 * @class   WC_Box_Office
 * @version 1.6.5
 */
class WC_Box_Office
{
    /**
     * The single instance of WooCommerce_Box_Office.
     *
     * @var     WC_Box_Office|null
     * @access  private
     * @since 	1.0.0
     */
    private static $_instance = \null;
    /**
     * The version number.
     * @var     string
     * @access  public
     * @since   1.0.0
     */
    public $_version;
    /**
     * The token.
     *
     * @var     string
     * @access  public
     * @since   1.0.0
     */
    public $_token;
    /**
     * The main plugin file.
     *
     * @var     string
     * @access  public
     * @since   1.0.0
     */
    public $file;
    /**
     * The main plugin directory.
     *
     * @var     string
     * @access  public
     * @since   1.0.0
     */
    public $dir;
    /**
     * The plugin assets directory.
     *
     * @var     string
     * @access  public
     * @since   1.0.0
     */
    public $assets_dir;
    /**
     * The plugin assets URL.
     *
     * @var     string
     * @access  public
     * @since   1.0.0
     */
    public $assets_url;
    /**
     * Suffix for Javascripts.
     *
     * @var     string
     * @access  public
     * @since   1.0.0
     */
    public $script_suffix;
    /**
     * Plugin's component.
     *
     * @var   stdClass
     * @since 1.0.0
     */
    public $components;
    /**
     * Flag to indicate that the plugin has been initiated.
     *
     * @var   bool
     * @since 1.0.0
     */
    private $_initiated = \false;
    /**
     * OrderUtil object.
     *
     * @var \Automattic\WooCommerce\Utilities\OrderUtil|false|null OrderUtil object, false if the container lookup failed, null before init().
     */
    public static $order_util;
    /**
     * Whether to display the native reports or not.
     *
     * @deprecated 1.3.5
     *
     * @var bool
     */
    protected $display_reports = \true;
    /**
     * Constructor.
     *
     * @access  public
     * @since   1.0.0
     * @param   string $file    Main plugin file.
     * @param   string $version Plugin version.
     * @return  void
     */
    private function __construct($file, $version)
    {
    }
    /**
     * Init the plugin. Can be initiated once.
     *
     * @return void
     */
    public function init()
    {
    }
    /**
     * Load the plugin files.
     *
     * @return void
     */
    private function _load_includes()
    {
    }
    /**
     * Set plugin's components.
     *
     * @since  1.0.0
     * @return void
     */
    private function _set_components()
    {
    }
    /**
     * Load plugin textdomain.
     *
     * @access  public
     * @since   1.0.0
     * @return  void
     */
    public function load_plugin_textdomain()
    {
    }
    /**
     * Main WC_Box_Office Instance.
     *
     * Ensures only one instance of WC_Box_Office is loaded or can be loaded.
     *
     * @since 1.0.0
     * @static
     * @see get_woocommerce_box_office()
     * @param string $file    Main plugin file.
     * @param string $version Plugin version.
     * @return WC_Box_Office Main WooCommerce_Box_Office instance
     */
    public static function instance($file = '', $version = '1.0.0')
    {
    }
    /**
     * Cloning is forbidden.
     *
     * @since 1.0.0
     */
    public function __clone()
    {
    }
    /**
     * Unserializing instances of this class is forbidden.
     *
     * @since 1.0.0
     */
    public function __wakeup()
    {
    }
    /**
     * Magic method to handle deprecated property access.
     *
     * @since 1.3.5
     *
     * @param string $name The name of the property.
     * @return mixed|null The value of the property or null if not found.
     */
    public function __get($name = '')
    {
    }
    /**
     * Check updates
     *
     * @since 1.1.0
     * @return void
     */
    public function check_updates()
    {
    }
    /**
     * Register Box Office email class to WooCommerce emails
     *
     * @param WC_Email[] $emails WooCommerce registered email classes.
     * @return WC_Email[]
     */
    public function register_email($emails = array())
    {
    }
    /**
     * Declare compatibility with High-Performance Order Storage.
     *
     * @since 1.1.42
     * @return void
     */
    public function declare_hpos_compatibility()
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
     * Helper function to check whether custom order tables are in sync or not.
     *
     * @return bool
     */
    public static function is_cot_sync_enabled()
    {
    }
    /**
     * Check if reports should be displayed.
     *
     * @since 1.3.5
     *
     * @return bool True if reports should be displayed, false otherwise.
     */
    public static function display_reports()
    {
    }
    /**
     * Displays an admin notice indicating Box Office reports are disabled on HPOS environments with no syncing.
     *
     * @return void
     */
    public static function display_hpos_incompatibility_notice()
    {
    }
    /**
     * Admin notice for the changes introduced to the shortcodes in v1.2.3s.
     *
     * @return void
     */
    function render_shortcode_changes_notice()
    {
    }
}
/**
 * Registers a custom post type.
 *
 * @class   WC_Box_Office_Post_Type
 * @version 1.6.5
 */
class WC_Box_Office_Post_Type
{
    /**
     * The name for the custom post type.
     *
     * @var    string
     * @access public
     * @since  1.0.0
     */
    public $post_type;
    /**
     * The plural name for the custom post type posts.
     *
     * @var    string
     * @access public
     * @since  1.0.0
     */
    public $plural;
    /**
     * The singular name for the custom post type posts.
     *
     * @var    string
     * @access public
     * @since  1.0.0
     */
    public $single;
    /**
     * The description of the custom post type.
     *
     * @var    string
     * @access public
     * @since  1.0.0
     */
    public $description;
    /**
     * Constructor.
     *
     * @param string $post_type   Post type name.
     * @param string $plural      Post type item plural name.
     * @param string $single      Post type item single name.
     * @param string $description Description of post type.
     */
    public function __construct($post_type = '', $plural = '', $single = '', $description = '')
    {
    }
    /**
     * Register new post type.
     *
     * @return void
     */
    public function register_post_type()
    {
    }
    /**
     * Set up admin messages for post type.
     *
     * @param  array $messages Default message
     * @return array           Modified messages
     */
    public function updated_messages($messages = array())
    {
    }
    /**
     * Set up bulk admin messages for post type.
     *
     * @param  array $bulk_messages Default bulk messages
     * @param  int[] $bulk_counts   Counts of selected posts in each status.
     * @return array                Modified messages
     */
    public function bulk_updated_messages($bulk_messages = array(), $bulk_counts = array())
    {
    }
}
/**
 * Check if this is a ticket page on the frontend.
 *
 * @deprecated
 *
 * @param  string  $page Page type
 * @return boolean       True if ticket page
 */
function wc_box_office_is_ticket_page($page = 'edit')
{
}
/**
 * Get ticket URL for customer.
 *
 * @deprecated
 *
 * @param int $ticket_id Ticket ID
 * @param string $action Action
 *
 * @return string Ticket URL
 */
function wc_box_office_get_ticket_url($ticket_id, $action = 'edit')
{
}
/**
 * Returns the main instance of WC_Box_Office to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return WC_Box_Office
 */
function WCBO()
{
}
/**
 * Get ticket.
 *
 * @param mixed $ticket Ticket ID or WP_Post object
 *
 * @return mixed
 */
function wc_box_office_get_ticket($ticket)
{
}
/**
 * Is a given product with ticketing enabled.
 *
 * @version 1.1.9
 *
 * @param mixed $product Product object or ID.
 *
 * @return bool Returns true if product is ticket product.
 */
function wc_box_office_is_product_ticket($product)
{
}
/**
 * Check if current page is the my ticket page.
 *
 * @since 1.1.0
 *
 * @return bool Returns true if current page is my ticket page.
 */
function wcbo_is_my_ticket_page()
{
}
/**
 * Get ticket by token.
 *
 * @param string $token Ticket's token
 *
 * @return null|WC_Box_Office_Ticket Ticket object
 */
function wc_box_office_get_ticket_by_token($token)
{
}
/**
 * Get ticket by email and product ID.
 *
 * @param string $email      Ticket's email
 * @param mixed  $product_id Product's enabled-ticket ID
 *
 * @return null|WC_Box_Office_Ticket Ticket object
 */
function wc_box_office_get_ticket_by_email($email, $product_id)
{
}
/**
 * Get description of a ticket.
 *
 * @param  integer $ticket_id Ticket ID
 * @param  string  $formatter Display formatter. Defaults to flat.
 * @return string Ticket description.
 */
function wc_box_office_get_ticket_description($ticket_id = 0, $formatter = 'flat')
{
}
/**
 * Flat formatter for ticket description. Returns pipe separated fields.
 *
 * @param integer $ticket_id     Ticket ID
 * @param array   $ticket_fields Ticket fields
 *
 * @return string Ticket description
 */
function wc_box_office_ticket_description_flat_formatter($ticket_id, $ticket_fields)
{
}
/**
 * List formatter for ticket description. Returns unordered list of fields.
 *
 * @param integer $ticket_id     Ticket ID
 * @param array   $ticket_fields Ticket fields
 *
 * @return string Ticket description
 */
function wc_box_office_ticket_description_list_formatter($ticket_id, $ticket_fields)
{
}
/**
 * Table formatter for ticket description.
 *
 * @since 1.1.1
 *
 * @param integer $ticket_id     Ticket ID
 * @param array   $ticket_fields Ticket fields
 *
 * @return string Ticket description
 */
function wc_box_office_ticket_description_table_formatter($ticket_id, $ticket_fields)
{
}
/**
 * Get ticket URL of a given ticket ID.
 *
 * @since 1.1.0
 *
 * @param int  $ticket_id Ticket ID
 * @param bool $print     Whether to print the ticket
 *
 * @return string Ticket URL
 */
function wcbo_get_my_ticket_url($ticket_id, $print = \false)
{
}
/**
 * Query tickets by user.
 *
 * @since 1.3.7
 *
 * @param int             $user_id User ID.
 * @param int|string|null $amount  Number of tickets to fetch. Defaults to value of `posts_per_page` option.
 * @param int             $page    Page to fetch.
 *
 * @return WP_Query|array Query object with tickets, or an empty array when there is no user.
 */
function wc_box_office_query_tickets_by_user($user_id = 0, $amount = \null, $page = 1)
{
}
/**
 * Get tickets purchased by user.
 *
 * @param  integer    $user_id User ID.
 * @param  int|string $amount  Number of tickets to fetch. Defaults to 'all'.
 * @param  integer    $page    Page to fetch.
 *
 * @return WP_Post[]|int[]|null Ticket post objects (or IDs if the query args are filtered), as in WP_Query::$posts.
 */
function wc_box_office_get_tickets_by_user($user_id = 0, $amount = 'all', $page = 1)
{
}
/**
 * Get all ticket products in database.
 *
 * @param bool $include_variation Optional parameter whether to include variation data per product or not.
 * @return ($include_variation is true ? array<int, WP_Post&object{variations: array<int, object{ID: mixed, variation_title: string}>}> : array<int, WP_Post>) Product posts, each with a `variations` list when $include_variation is true.
 */
function wc_box_office_get_all_ticket_products($include_variation = \false)
{
}
/**
 * Send email to ticket holder.
 *
 * @param integer      $ticket_id  Ticket ID.
 * @param string|array $address    Email address(es). If empty, uses email in ticket
 *                                 ticket field which sets as email contact.
 * @param string       $subject    Email subject.
 * @param string       $message    Email body.
 * @param string       $heading    Email heading.
 *
 * @return bool|void
 */
function wc_box_office_send_ticket_email($ticket_id = 0, $address = '', $subject = '', $message = '', $heading = '')
{
}
/**
 * Send mail.
 *
 * @param string|array $to      Email address(es).
 * @param string       $subject Email subject.
 * @param string       $message Email body.
 * @param string       $heading Email heading.
 *
 * @return bool
 */
function wc_box_office_send_mail($to, $subject, $message, $heading = '')
{
}
/**
 * Get email contacts from a ticket.
 *
 * @param int $ticket_id Ticket ID
 *
 * @return array List of email contacts on a ticket
 */
function wc_box_office_get_ticket_email_contacts($ticket_id)
{
}
/**
 * Get parsed ticket content. Variables (.e.g, '{First Name}, {Email}, etc') will
 * be replaced by value based on given ticket.
 *
 * @param int    $ticket_id Ticket ID.
 * @param string $content Content to parse.
 *
 * @return string Parsed content
 */
function wc_box_office_get_parsed_ticket_content($ticket_id, $content)
{
}
/**
 * Get from name for email.
 *
 * @access public
 * @return string
 */
function wc_box_office_get_email_from_name()
{
}
/**
 * Get from email address.
 *
 * @access public
 * @return string
 */
function wc_box_office_get_email_from_address()
{
}
/**
 * Get the content type for the email.
 *
 * @access public
 * @return string
 */
function wc_box_office_get_email_content_type()
{
}
/**
 * Get ticket fields of a product.
 *
 * @param int $product_id Product ID
 *
 * @return array
 */
function wc_box_office_get_product_ticket_fields($product_id)
{
}
/**
 * Get the option elements for a product's ticket fields.
 *
 * @param int               $product_id Product ID.
 * @param array<int|string> $selected   Keys of the selected ticket fields.
 * @return string
 */
function wc_box_office_get_product_ticket_fields_options($product_id, $selected = array())
{
}
/**
 * Get all available ticket field types.
 *
 * @return array Array of field types
 */
function wc_box_office_ticket_field_types()
{
}
/**
 * Get all available autofill options for tickets.
 *
 * @return array Array of options
 */
function wc_box_office_autofill_options()
{
}
/**
 * Check if a product uses customer details for tickets.
 *
 * @since 1.6.0
 *
 * @param mixed $product_id Product ID, WP_Post, or WC_Product.
 * @return bool
 */
function wc_box_office_uses_customer_details($product_id)
{
}
/**
 * Get input HTML for ticket field.
 *
 * @param  string  $field_key Field key
 * @param  array   $field     Field info
 * @param  integer $ticket_id Ticket ID
 * @param  boolean $disabled  Whether field should be disabled or not
 * @return string             HTML of input field
 */
function wc_box_office_ticket_field_input($field_key = '', $field = array(), $ticket_id = 0, $disabled = \false)
{
}
/**
 * Escape a string to be used in a CSV context
 *
 * Malicious input can inject formulas into CSV files, opening up the possibility
 * for phishing attacks and disclosure of sensitive information.
 *
 * Additionally, Excel exposes the ability to launch arbitrary commands through
 * the DDE protocol.
 *
 * @see http://www.contextis.com/resources/blog/comma-separated-vulnerabilities/
 * @see https://hackerone.com/reports/72785
 *
 * @since 1.1.0
 *
 * @param string $field CSV field to escape
 *
 * @return string
 */
function wcbo_esc_csv($field)
{
}
/**
 * Check whether a ticket grants its published entitlement.
 *
 * @param mixed $ticket Ticket object.
 * @return bool
 */
function wc_box_office_is_ticket_active($ticket)
{
}
/**
 * Resolve a product's ticket printing setting, falling back to the global default.
 *
 * @param int $product_id Product ID.
 * @return bool
 */
function wc_box_office_is_ticket_printing_enabled($product_id)
{
}
/**
 * Check if a ticket can be printed.
 *
 * In order for the ticket to be printable, the printing option must be enabled,
 * and the ticket must have an active entitlement.
 *
 * @param mixed $ticket  Ticket object.
 *
 * @return bool          Is ticket printable.
 */
function is_ticket_ready_for_printing($ticket)
{
}
/**
 * Check if a ticket can be edited.
 *
 * @param mixed $object Ticket or product object.
 *
 * @return bool          Is ticket editable.
 */
function is_ticket_editable($object)
{
}
/**
 * Prepare ticket title prefix
 *
 * @return string Ticket title prefix
 */
function wcbo_get_ticket_title_prefix()
{
}
/**
 * Enqueue script.
 *
 * @param string   $handle   Script handle.
 * @param string   $filename Script filename.
 * @param string[] $deps     Fallback script dependencies.
 * @return void
 */
function wcbo_register_script($handle = '', $filename = '', $deps = array())
{
}
/**
 * Sanitize Twitter/X handle. Remove URLs, @ symbols, etc. Only the handle
 * itself is returned.
 *
 * @param string $twitter Twitter handle to sanitize.
 * @return string Sanitized Twitter handle.
 */
function wcbo_sanitize_twitter_handle($twitter)
{
}
/**
 * Update routine for version 1.1.0.
 *
 * @return void
 */
function wcbo_update_110()
{
}
\define('WOOCOMMERCE_BOX_OFFICE_VERSION', '1.6.5');
/**
 * Initialize plugin.
 *
 * @return void
 */
function wc_box_office_init()
{
}
/**
 * Plugin update.
 *
 * @return void
 */
function wc_box_office_maybe_install()
{
}
/**
 * WooCommerce Deactivated Notice.
 *
 * @return void
 */
function wc_box_office_woocommerce_deactivated()
{
}