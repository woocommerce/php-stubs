<?php
/**
 * Generated stub declarations for woocommerce-warranty 2.7.14.
 * @see https://github.com/woocommerce/all-plugins/tree/stubs
 */

namespace {
    /**
     * Class for activity report display.
     */
    class Warranty_Active_Reports_List_Table extends \WP_List_Table
    {
        /**
         * List of valid orders.
         *
         * @var array
         */
        public $valid_orders = array();
        /**
         * Get table columns.
         *
         * @return array
         */
        public function get_columns()
        {
        }
        /**
         * Get sortable columns.
         *
         * @return array
         */
        protected function get_sortable_columns()
        {
        }
        /**
         * Prepare Table items.
         */
        public function prepare_items()
        {
        }
        /**
         * Value of order id column.
         *
         * @param WP_Post $item Warranty request data.
         *
         * @return string
         */
        public function column_order_id($item)
        {
        }
        /**
         * Value of status column.
         *
         * @param WP_Post $item Warranty request data.
         *
         * @return string
         */
        public function column_status($item)
        {
        }
        /**
         * Value of customer column.
         *
         * @param WP_Post $item Warranty request data.
         *
         * @return string
         */
        public function column_customer($item)
        {
        }
        /**
         * Value of product column.
         *
         * @param WP_Post $item Warranty request data.
         *
         * @return string
         */
        public function column_product($item)
        {
        }
        /**
         * Value of validity column.
         *
         * @param WP_Post $item Warranty request data.
         *
         * @return string
         */
        public function column_validity($item)
        {
        }
        /**
         * Value of date column.
         *
         * @param WP_Post $item Warranty request data.
         *
         * @return string
         */
        public function column_date($item)
        {
        }
        /**
         * Display no items text.
         */
        public function no_items()
        {
        }
    }
}
namespace WooCommerce\Warranty {
    /**
     * Trait Warranty_Util
     *
     * A collection of helpful methods that can be used in
     * multiple classes to help keep things DRY
     *
     * @package WooCommerce\Warranty
     */
    trait Warranty_Util
    {
        /**
         * Builds a warranty array based on the passed loop args,
         * loop warranty type and loop index.
         *
         * @param array      $loop_args the loop arguments.
         * @param array      $loop_warranty_type the loop warranty_type.
         * @param int|string $index the loop index.
         *
         * @return array
         */
        public static function build_warranty_array_inside_loop(array $loop_args, array $loop_warranty_type, $index)
        {
        }
        /**
         * Builds a warranty array based on passed args
         * and warranty type.
         *
         * @param array  $args Warranty data.
         * @param string $warranty_type Warranty type.
         *
         * @return array
         */
        public static function build_warranty_array(array $args, $warranty_type)
        {
        }
        /**
         * Loops through the passed data, validates it, sanitizes it
         * and returns the final warranty addons array. This is only
         * used for the addon_warranty warranty type.
         *
         * @param array $args Addon Warranty data.
         *
         * @return array
         */
        public static function build_warranty_addons_array(array $args)
        {
        }
        /**
         * Get POST data field.
         *
         * @param string $key Field key.
         * @param mixed  $_default Default value of the field.
         *
         * @return mixed
         */
        public static function post_get_field($key, $_default)
        {
        }
        /**
         * Get POST data field only for data with string value only.
         *
         * @param string $key Field key.
         * @param mixed  $_default Default value of the field.
         *
         * @return mixed
         */
        public static function post_get_string($key, $_default = '')
        {
        }
        /**
         * Check if post field value is equal with second parameter value.
         *
         * @param string $key Field key.
         * @param mixed  $value Value of the field.
         *
         * @return boolean
         */
        public static function post_field_equals($key, $value)
        {
        }
        /**
         * Check if post field is empty.
         *
         * @param string $key Field key.
         *
         * @return boolean
         */
        public static function post_is_empty($key)
        {
        }
    }
}
namespace {
    /**
     * Warranty_Admin class
     */
    class Warranty_Admin
    {
        use \WooCommerce\Warranty\Warranty_Util;
        /**
         * Number of columns
         *
         * @var int
         */
        public static $shop_order_columns = 1;
        /**
         * Flag to track if reason has been injected in inline edit row.
         *
         * @var bool
         */
        private $row_reason_injected = \false;
        /**
         * Register the hooks
         */
        public function __construct()
        {
        }
        /**
         * Init
         *
         * @return void
         */
        public function init()
        {
        }
        /**
         * Register the menu items
         */
        public function admin_menu()
        {
        }
        /**
         * Display notices in the admin panel
         */
        public function add_notices()
        {
        }
        /**
         * Get the localized script text.
         *
         * @return array
         */
        public function localized_script_text()
        {
        }
        /**
         * Load scripts and styles selectively, depending on the current screen and page
         */
        public function admin_scripts()
        {
        }
        /**
         * Render JS on the footer that controls variable fields for variable products
         */
        public function variable_script()
        {
        }
        /**
         * Adds a 'Warranty' tab to a product's data tabs
         */
        public function panel_data_tab()
        {
        }
        /**
         * Outputs the form for the Warranty data tab
         */
        public function panel_add_custom_box()
        {
        }
        /**
         * Undocumented function
         *
         * @param int     $loop           Position in the loop.
         * @param array   $variation_data Variation data.
         * @param WP_Post $variation      Post data.
         * @return void
         */
        public function variables_panel($loop, $variation_data, $variation)
        {
        }
        /**
         * Save product warranty data
         *
         * No need to check for a valid nonce because WooCommerce
         * does this for us with the woocommerce_meta_nonce.
         *
         * @param int $product_id WC_Product ID.
         * @return void
         */
        public function save_product_warranty($product_id)
        {
        }
        /**
         * Save product variation warranty data
         *
         * No need to check for a valid nonce because WooCommerce
         * does this for us with the woocommerce_meta_nonce.
         *
         * @param int        $variation_id WC_Product_Variation ID.
         * @param int|string $x the loop index.
         * @return void
         */
        public function save_variation_warranty($variation_id, $x)
        {
        }
        /**
         * Add generate_rma action to woocommerce_order_actions.
         *
         * @param array $actions Woocommerce order actions.
         * @return array $actions
         */
        public function add_order_action($actions)
        {
        }
        /**
         * Redirect to Warranty Request Admin Form
         *
         * @param WC_Order $order WC_Order object.
         * @return void
         */
        public function redirect_order_to_rma_form($order)
        {
        }
        /**
         * Routes the request to the correct page/file
         */
        public function admin_controller()
        {
        }
        /**
         * Get product vendor order by using billing email information.
         *
         * @param string $email Email value.
         */
        public function get_pv_order_by_billing_email($email)
        {
        }
        /**
         * Get product vendor order by using customer id information.
         *
         * @param string $customer_id Customer ID value.
         */
        public function get_pv_order_by_customer_id($customer_id)
        {
        }
        /**
         * Get product vendor order by using order id information.
         *
         * @param string $order_id Order ID value.
         */
        public function get_pv_order_by_order_id($order_id)
        {
        }
        /**
         * Get product vendor order by using order number information.
         *
         * @param string $order_number Order number value.
         */
        public function get_pv_order_by_order_number($order_number)
        {
        }
        /**
         * Get orders data based on search key and search keyword.
         *
         * @param string $key  Search key.
         * @param string $term Search keyword.
         *
         * @return array
         */
        public function get_orders($key, $term)
        {
        }
        /**
         * Check if you visiting Warranty updater route.
         *
         * @return boolean
         */
        public function is_updater_view()
        {
        }
        /**
         * Render Warranty Updater Page.
         *
         * @return void
         */
        public function updater_page()
        {
        }
        /**
         * Create a warranty request from POST
         *
         * @return void Redirect and exit on success, early return on failure.
         */
        public function create_warranty()
        {
        }
        /**
         * Handle file upload request and attach the uploaded file to the specified RMA request
         *
         * @return void
         */
        public function attach_shipping_label()
        {
        }
        /**
         * Return inventory.
         *
         * @return void
         */
        public function return_inventory()
        {
        }
        /**
         * Refund item process.
         */
        public function refund_item()
        {
        }
        /**
         * Available fields when importing using CSV.
         *
         * @param array $fields Import fields.
         *
         * @return array
         */
        public function csv_import_fields($fields)
        {
        }
        /**
         * Get the available actions for the warranty based on its status
         *
         * @param int  $id Warranty Request ID.
         * @param bool $html Pass TRUE to return in an HTML snippet. Defaults to false.
         *
         * @return array|string|false
         */
        public static function get_warranty_actions($id, $html = \false)
        {
        }
        /**
         * Handle delete requests and immediately redirects to the Warranties page
         */
        public function warranty_delete()
        {
        }
        /**
         * Renders a print-friendly version of the warranty request
         */
        public function warranty_print()
        {
        }
        /**
         * Get tracking html.
         *
         * @param array $warranty Warranty Request.
         * @return string
         */
        private static function get_tracking_html($warranty)
        {
        }
        /**
         * If $post['bulk_edit'] is not empty, attempt to bulk edit the
         * checked/selected products.
         *
         * @param array $post The submitted $_POST data.
         *
         * @return bool FALSE if $post['bulk_edit'] is empty. TRUE otherwise.
         */
        public function maybe_bulk_edit_products(array $post)
        {
        }
        /**
         * Process bulk edit request
         */
        public function bulk_edit()
        {
        }
        /**
         * Update Warranty settings.
         */
        public function update_settings()
        {
        }
        /**
         * Counting column on shop order list page.
         *
         * @param array $columns Available columns.
         */
        public function count_shop_order_columns($columns)
        {
        }
        /**
         * Display the RMA button if the order has any outstanding warranty requests
         *
         * @param WC_Order $order WC_Order.
         */
        public function order_inline_edit_actions($order)
        {
        }
        /**
         * Get link for the warranty post in admin.
         *
         * @param int $order_id Order ID.
         *
         * @return string
         */
        public function get_warranty_admin_inline_link($order_id)
        {
        }
        /**
         * Generate HTML for inline edit on order list.
         *
         * @param int $order_id Order ID.
         */
        public function order_inline_edit_row($order_id)
        {
        }
        /**
         * Add warranty data to manually added line items
         *
         * @param int                 $item_id Order item ID.
         * @param WC_Order_Item|false $item WC_Order_Item object.
         */
        public function add_line_item_warranty_meta($item_id, $item)
        {
        }
        /**
         * Allow admins to set the correct warranty addon for a line item. This is mostly used by
         * newly added line items from the edit order screen.
         *
         * @param int        $item_id wC_Order_Item ID.
         * @param array      $item wC_Order_Item.
         * @param WC_Product $product WC_Product.
         */
        public function maybe_render_addon_options($item_id, $item, $product)
        {
        }
        /**
         * Add hidden order item meta.
         *
         * @param array $hidden_meta Hidden item meta.
         * @return array $hidden_meta
         */
        public function hidden_order_item_meta($hidden_meta)
        {
        }
        /**
         * When a product with an add-on warranty gets added to an order,
         * we display the available add-ons in a select box. This method stores
         * the selected add-on when the order is saved.
         *
         * @param int           $post_id Post ID.
         * @param WP_Post|array $post WP_Post.
         */
        public function save_line_item_warranty_indices($post_id, $post)
        {
        }
        /**
         * Add addon price to line item.
         *
         * @param int   $order_id WC_Order ID.
         * @param array $items Order items to save.
         * @return void
         */
        public function add_addon_price_to_line_item($order_id, $items)
        {
        }
        /**
         * Redirect and exit
         *
         * @return void
         */
        public function redirect_and_exit()
        {
        }
        /**
         * Get valid WooCommerce Products.
         *
         * @param int[] $possible_product_ids List of WC_Product IDs.
         *
         * @return WC_Product[]
         */
        public function get_valid_product_objects_from_array(array $possible_product_ids)
        {
        }
    }
    /**
     * Class for AJAX operation
     */
    class Warranty_Ajax
    {
        use \WooCommerce\Warranty\Warranty_Util;
        /**
         * Hook in the AJAX events
         */
        public static function init()
        {
        }
        /**
         * AJAX handler for searching for users
         *
         * This method looks for partial user_email and/or user ID matches,
         * formatted as an array of unique customer keys with values being formed as:
         *
         *     first_name last_name <user_email>
         *
         * The resulting array is then JSON-encoded before it is sent back
         */
        public static function user_search()
        {
        }
        /**
         * Get product vendor users.
         *
         * @param String $term Search keyword.
         *
         * @return Array of User.
         */
        public static function get_product_vendor_users($term)
        {
        }
        /**
         * Get All roles that has `manage_woocommerce` capability.
         *
         * @return array
         */
        public static function get_manage_wc_roles()
        {
        }
        /**
         * AJAX handler for searching for existing email addresses
         *
         * This method looks for partial user_email and/or display_name matches,
         * as well as fuzzy first_name and last_name matches. The results are
         * formatted as an array of unique customer keys with values being formed as:
         *
         * first_name last_name <user_email>
         *
         * The resulting array is then JSON-encoded before it is sent back
         */
        public static function search_for_email()
        {
        }
        /**
         * Update a fragment of a warranty request
         */
        public static function update_request_fragment()
        {
        }
        /**
         * Update a request's status and return the available actions
         * based on the new status
         */
        public static function update_request_status()
        {
        }
        /**
         * Handle delete requests
         */
        public static function delete_request()
        {
        }
        /**
         * Add a comment to a request
         */
        public static function add_note()
        {
        }
        /**
         * Delete a request note
         */
        public static function delete_note()
        {
        }
        /**
         * Update an RMA request from the shop order screen via AJAX
         */
        public static function update_inline()
        {
        }
        /**
         * Return the stock if stock management is enabled
         */
        public static function return_inventory()
        {
        }
        /**
         * Process refund requests
         */
        public static function refund_item()
        {
        }
        /**
         * Send coupon as a refund
         */
        public static function send_coupon()
        {
        }
        /**
         * Update a product's warranty details and return the new warranty string/description
         */
        public static function product_warranty_update()
        {
        }
        /**
         * Updating default category settings.
         */
        public static function update_category_defaults()
        {
        }
        /**
         * Move RMA products into the new wc_warranty_products table
         */
        public static function migrate_products()
        {
        }
        /**
         * Process shipping label file upload.
         */
        public static function shipping_label_file_upload()
        {
        }
    }
    /**
     * Warranty_Cart class
     */
    class Warranty_Cart
    {
        /**
         * Class constructor.
         */
        public function __construct()
        {
        }
        /**
         * Show a product's warranty information
         */
        public function show_product_warranty()
        {
        }
        /**
         * Adds a warranty_index to a cart item. Used in tracking the selected warranty options
         *
         * @see WC_Warranty_Frontend::add_cart_item()
         * @param array $item_data Cart item data.
         *
         * @return array $item_data
         */
        public function add_cart_item_data($item_data)
        {
        }
        /**
         * Add custom data to a cart item based on the selected warranty type
         *
         * @see WC_Warranty_Frontend::add_cart_item_data()
         * @param array $item_data Cart item data.
         *
         * @return array $item_data
         */
        public function add_cart_item($item_data)
        {
        }
        /**
         * Make sure an add-to-cart request is valid.
         *
         * @param bool $valid        Flag for cart validation.
         * @param int  $product_id   Product ID.
         * @param int  $quantity     Product quantity.
         * @param int  $variation_id Product variation ID.
         *
         * @return bool $valid
         */
        public function add_cart_validation($valid, $product_id = 0, $quantity = 0, $variation_id = 0)
        {
        }
        /**
         * Check required add-ons.
         *
         * @param int $product_id Product ID.
         * @return bool
         */
        public function check_required_warranty($product_id)
        {
        }
        /**
         * Add to cart text.
         *
         * @since 1.0.0
         * @version 2.9.0
         * @param string      $text Add to cart text.
         * @param null|object $product Either product object or null.
         *
         * @return string
         */
        public function add_to_cart_text($text, $product = \null)
        {
        }
        /**
         * Removes ajax-add-to-cart functionality in WC 2.5 when a product has required add-ons.
         *
         * @param  bool       $supports If support a feature.
         * @param  string     $feature  Feature to support.
         * @param  WC_Product $product  Product data.
         * @return bool
         */
        public function ajax_add_to_cart_supports($supports, $feature, $product)
        {
        }
        /**
         * Include product add-ons to add to cart URL.
         *
         * @since 1.0.0
         * @version 2.9.0
         * @param string $url Add to cart URL.
         * @param object $product WC_Product.
         * @return string
         */
        public function add_to_cart_url($url, $product = \null)
        {
        }
        /**
         * Don't let products with required addons be added to cart when viewing grouped products.
         *
         * @param  bool       $purchasable If product is purchasable.
         * @param  WC_Product $product     Product data.
         * @return bool
         */
        public function prevent_purchase_at_grouped_level($purchasable, $product)
        {
        }
        /**
         * Returns warranty data about a cart item
         *
         * @param array $other_data Other cart item data.
         * @param array $cart_item Cart item information.
         *
         * @return array $other_data
         */
        public function get_item_data($other_data, $cart_item)
        {
        }
        /**
         * Get warranty index and add it to the cart item
         *
         * @param array $cart_item Cart item.
         * @param array $values Warranty data.
         * @return array $cart_item
         */
        public function get_cart_item_from_session($cart_item, $values)
        {
        }
        /**
         * Add warranty index to the cart items from POST
         *
         * @param string $cart_key Cart key.
         * @return void
         */
        public function add_warranty_index($cart_key)
        {
        }
    }
    /**
     * Warranty_Cart class
     */
    class Warranty_Completed_Reports_List_Table extends \WP_List_Table
    {
        /**
         * List of valid orders.
         *
         * @var array
         */
        public $valid_orders = array();
        /**
         * Get list of columns.
         *
         * @return array
         */
        public function get_columns()
        {
        }
        /**
         * Get sortable columns.
         *
         * @return array
         */
        protected function get_sortable_columns()
        {
        }
        /**
         * Preparing the row items.
         */
        public function prepare_items()
        {
        }
        /**
         * Display Order ID column.
         *
         * @param object $item Column item object.
         *
         * @return string
         */
        public function column_order_id($item)
        {
        }
        /**
         * Display status column.
         *
         * @param object $item Column item object.
         *
         * @return string
         */
        public function column_status($item)
        {
        }
        /**
         * Display customer column.
         *
         * @param object $item Column item object.
         *
         * @return string
         */
        public function column_customer($item)
        {
        }
        /**
         * Display product column.
         *
         * @param object $item Column item object.
         *
         * @return string
         */
        public function column_product($item)
        {
        }
        /**
         * Display validity column.
         *
         * @param object $item Column item object.
         *
         * @return void
         */
        public function column_validity($item)
        {
        }
        /**
         * Display date column.
         *
         * @param object $item Column item object.
         *
         * @return string
         */
        public function column_date($item)
        {
        }
        /**
         * Text when no items.
         */
        public function no_items()
        {
        }
    }
    /**
     * Warranty_Coupons class
     */
    class Warranty_Coupons
    {
        /**
         * Class initiation.
         */
        public static function init()
        {
        }
        /**
         * Send the coupon based on warranty ID.
         */
        public static function send_coupon()
        {
        }
        /**
         * Generate a random 8-character unique string that's to used as a coupon code
         *
         * @return string
         */
        public static function generate_coupon_code()
        {
        }
    }
    /**
     * Warranty_Frontend class
     */
    class Warranty_Frontend
    {
        /**
         * Setup the class
         */
        public function __construct()
        {
        }
        /**
         * Register the frontend hooks
         */
        public function register_hooks()
        {
        }
        /**
         * Display notice for the error.
         */
        public function display_notices()
        {
        }
        /**
         * Add woocommerce CSS classes to the <body> element of the Warranty pages
         *
         * @param array $classes Body classes.
         *
         * @return array
         */
        public function output_body_class($classes)
        {
        }
        /**
         * Register JS and CSS files
         */
        public function frontend_styles()
        {
        }
        /**
         * Display the 'Request Warranty' button on the order view page if
         * an order contains a product with a valid warranty
         *
         * @param WC_Order $order Order object.
         */
        public function show_request_button($order)
        {
        }
        /**
         * Display the 'Request Warranty' button on the My Account page
         *
         * @param array    $actions Warranty request actions.
         * @param WC_Order $order   WooCommerce order object.
         *
         * @return array $actions
         */
        public function my_orders_request_button($actions, $order)
        {
        }
        /**
         * Add warranty data to all variations
         *
         * @param array                $data      Variation data.
         * @param WC_Product           $product   WC_Product.
         * @param WC_Product_Variation $variation WC_Product_Variation.
         *
         * @return array
         */
        public function add_variation_data($data, $product, $variation)
        {
        }
        /**
         * Capture and process frontend form submissions.
         *
         * Consider splitting into methods.
         */
        public function process_form_submission()
        {
        }
        /**
         * Adds to Recent Comments widget query to filter out warranty notes.
         *
         * @since 1.8.13
         *
         * @param array $comment_query_args An array of arguments used to retrieve the recent comments.
         *
         * @return array Modified array of arguments.
         */
        public function hide_warranty_comments($comment_query_args)
        {
        }
        /**
         * Manipulate the comment feed to exclude the warranty_request notes.
         *
         * @param string $cwhere Where clause in comment sql.
         *
         * @return string
         */
        public function manipulate_feed_comment_query($cwhere)
        {
        }
    }
    /**
     * Warranty_Install class
     */
    class Warranty_Install
    {
        /**
         * Class constructor
         */
        public function __construct()
        {
        }
        /**
         * Register admin notices
         */
        public function add_notices()
        {
        }
        /**
         * Display a notice requiring a data update
         */
        public function install_notice()
        {
        }
        /**
         * Display a notice after the FUE data has been updated
         */
        public function updated_notice()
        {
        }
        /**
         * Listens for button actions such as clicking on the 'Update Data' button
         */
        public function actions()
        {
        }
        /**
         * Checks for changes in the version and prompt to update if necessary
         */
        public function check_version()
        {
        }
        /**
         * Register warranty_request post type and shop_warranty_status taxonomy
         */
        public function register_post_type()
        {
        }
        /**
         * Fired on plugin activation. Create the Warranty Request page if it doesn't exist
         */
        public function install()
        {
        }
        /**
         * Run data updates from older versions of WC_Warranty
         */
        public function run_updates()
        {
        }
        /**
         * Create Warranty Request page.
         *
         * @return void
         */
        public function create_warranty_request_page()
        {
        }
        /**
         * Create options.
         *
         * @return void
         */
        public function create_options()
        {
        }
        /**
         * Create tables
         *
         * @return void
         */
        public function create_tables()
        {
        }
        /**
         * Install statuses
         *
         * @return void
         */
        private function install_statuses()
        {
        }
        /**
         * Update Warranty status order.
         *
         * @return void
         */
        private function update_warranty_status_order()
        {
        }
        /**
         * Migrate warranty form
         *
         * @return void
         */
        private function migrate_warranty_form()
        {
        }
    }
    /**
     * Warranty_Item class
     */
    class Warranty_Item
    {
        /**
         * Item ID.
         *
         * @var string
         */
        public $item_id;
        /**
         * Type of warranty.
         *
         * @var string
         */
        public $type;
        /**
         * Label of warranty item.
         *
         * @var string
         */
        public $label;
        /**
         * Warranty item addons.
         *
         * @var array
         */
        public $addons;
        /**
         * Selected addons.
         *
         * @var string
         */
        public $addon_selected;
        /**
         * Default addons from settings.
         *
         * @var string
         */
        public $addon_default;
        /**
         * Duration length.
         *
         * @var string
         */
        public $length;
        /**
         * Duration value.
         *
         * @var int
         */
        public $duration_value;
        /**
         * Duration type.
         *
         * @var string
         */
        public $duration_type;
        /**
         * No warranty option.
         *
         * @var string
         */
        public $no_warranty_option;
        /**
         * Order ID.
         *
         * @var int
         */
        public $order_id;
        /**
         * Initialize the object
         *
         * @param int $item_id The WooCommerce Item ID.
         */
        public function __construct($item_id)
        {
        }
        /**
         * Get order ID from the item id.
         */
        public function get_order_id()
        {
        }
        /**
         * Get the available number of RMAs for the current order item.
         *
         * The available number is determined by the quantity of order item minus
         * the number of warranty requests made against the same order item.
         *
         * @return int
         */
        public function get_quantity_remaining()
        {
        }
        /**
         * Check if the item can send a warranty request
         *
         * This will return true for the following scenarios:
         *  - Type is 'included' and duration is 'lifetime' and remaining quantity > 0
         *  - Type is 'included' or 'addon' and expiry is in a future date and remainig quantity > 0
         *
         * @return bool
         */
        public function has_warranty()
        {
        }
        /**
         * Get the warranty's expiration date.
         *
         * @param string $duration_value Duration value.
         * @param string $duration_type Duration type.
         *
         * @return bool|int
         */
        public function get_expiry($duration_value = '', $duration_type = '')
        {
        }
        /**
         * Is the warranty expired?
         *
         * @return bool
         */
        public function is_expired()
        {
        }
    }
    /**
     * Class for warranty list table display.
     */
    class Warranty_List_Table extends \WP_List_Table
    {
        /**
         * `warranty_form` option value.
         *
         * @var array
         */
        private $form;
        /**
         * Form inputs.
         *
         * @var array
         */
        private $inputs;
        /**
         * Row reason injected.
         *
         * @var boolean
         */
        private $row_reason_injected = \false;
        /**
         * Number of columns.
         *
         * @var int
         */
        private $num_columns = 0;
        /**
         * Registered warranty statuses.
         *
         * @var array
         */
        private $statuses = \null;
        /**
         * Class constructor
         *
         * @param array $args Class args.
         */
        public function __construct($args = array())
        {
        }
        /**
         * Method to add SQL query when orderby value is `shop_warranty_status`.
         *
         * @param array    $clauses Existing SQL clauses.
         * @param WP_Query $wp_query WP_Query object.
         *
         * @return array
         */
        public function status_orderby_clauses($clauses, $wp_query)
        {
        }
        /**
         * Get all statuses.
         *
         * @return array
         */
        private function get_statuses()
        {
        }
        /**
         * Return array with column definition.
         *
         * @return array
         */
        public function get_columns()
        {
        }
        /**
         * Get sortable columns.
         *
         * @return array
         */
        public function get_sortable_columns()
        {
        }
        /**
         * Add a new field on table navigation form.
         *
         * @param string $which Which side of table navigation.
         */
        public function extra_tablenav($which)
        {
        }
        /**
         * Preparing column items.
         */
        public function prepare_items()
        {
        }
        /**
         * Modifying default column value.
         *
         * @param array  $item Column item.
         * @param string $column_name Column name.
         *
         * @return mixed
         */
        public function column_default($item, $column_name)
        {
        }
        /**
         * Value of column status.
         *
         * @param array $item Column item.
         */
        public function column_status($item)
        {
        }
        /**
         * Value of column email.
         *
         * @param array $item Column item.
         */
        public function column_email($item)
        {
        }
        /**
         * Value of column products.
         *
         * @param array $item Column item.
         */
        public function column_products($item)
        {
        }
        /**
         * Formats a product display line.
         *
         * @param string $name The product name.
         * @param int    $quantity The quantity of the product.
         *
         * @return string
         */
        private function get_formatted_product_line(string $name, int $quantity = 1): string
        {
        }
        /**
         * Value of column RMA.
         *
         * @param array $item Column item.
         */
        public function column_rma($item)
        {
        }
        /**
         * Value of column date.
         *
         * @param array $item Column item.
         */
        public function column_date($item)
        {
        }
        /**
         * Text when no items.
         */
        public function no_items()
        {
        }
        /**
         * Display table.
         */
        public function display()
        {
        }
    }
    /**
     * Warranty_Order class
     */
    class Warranty_Order
    {
        /**
         * Class constructor
         */
        public function __construct()
        {
        }
        /**
         * Actions for order item meta.
         *
         * @since 1.8.6
         * @return void
         */
        public function init_order_meta()
        {
        }
        /**
         * Listens to order status changes and sets the completed date if the current
         * order status matches the start status of the warranty period
         *
         * @param int      $order_id Order ID.
         * @param string   $old_status Old status from the order.
         * @param string   $new_status New status from the order.
         * @param WC_Order $order Actual order.
         */
        public function order_status_changed($order_id, $old_status, $new_status, $order)
        {
        }
        /**
         * Handler for the order status change.
         *
         * @param int      $order_id Order ID.
         * @param string   $new_status New status from the order.
         * @param callable $handler Order handler to save the completed date.
         */
        private function handle_status_change($order_id, $new_status, $handler)
        {
        }
        /**
         * Include add-ons line item meta.
         *
         * @param  WC_Order_Item_Product $item          Order item data.
         * @param  string                $cart_item_key Cart item key.
         * @param  array                 $values        Order item values.
         */
        public function order_item_meta($item, $cart_item_key, $values)
        {
        }
        /**
         * Check if an order contain items that have valid warranties
         *
         * @param WC_Order $order Order object.
         *
         * @return bool
         */
        public static function order_has_warranty($order)
        {
        }
        /**
         * Display an order item's warranty data
         *
         * @param int   $item_id Order item ID.
         * @param array $item Order item.
         */
        public function render_order_item_warranty($item_id, $item)
        {
        }
        /**
         * Display custom form key.
         *
         * @param WC_Order $order         Order object.
         * @param bool     $sent_to_admin Whether the email is being sent to admin or not.
         * @param bool     $plain_text    Whether email is in plain text or not.
         * @param WC_Email $email         Email object.
         */
        public function display_custom_form_key($order, $sent_to_admin, $plain_text = \null, $email = \null)
        {
        }
        /**
         * Handle a custom 'customvar' query var to get orders with the 'customvar' meta for HPOS.
         *
         * @param array $query_vars - Query vars from WC_Order_Query.
         *
         * @return array modified $query_vars
         */
        public function add_warranty_key_query_vars_for_hpos($query_vars)
        {
        }
        /**
         * Handle a custom 'customvar' query var to get orders with the 'customvar' meta for `shop_order` custom post type.
         *
         * @param array $query      Main query of WC_Order_Query.
         * @param array $query_vars Query vars from WC_Order_Query.
         *
         * @return array modified $query.
         */
        public function add_warranty_key_query_vars_for_cpt($query, $query_vars)
        {
        }
    }
    /**
     * Warranty_Privacy class
     */
    class Warranty_Privacy extends \WC_Abstract_Privacy
    {
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Returns a list of warranties.
         *
         * @param string $email_address User email address.
         * @param int    $page Number of pagination.
         *
         * @return array WP_Post
         */
        protected function get_warranties($email_address, $page)
        {
        }
        /**
         * Gets the message of the privacy to display.
         */
        public function get_privacy_message()
        {
        }
        /**
         * Handle exporting data for warranties.
         *
         * @param string $email_address E-mail address to export.
         * @param int    $page          Pagination of data.
         *
         * @return array
         */
        public function warranty_data_exporter($email_address, $page = 1)
        {
        }
        /**
         * Finds and erases warranty data by email address.
         *
         * @since 3.4.0
         * @param string $email_address The user email address.
         * @param int    $page  Page.
         * @return array An array of personal data in name value pairs
         */
        public function warranty_data_eraser($email_address, $page)
        {
        }
        /**
         * Handle eraser of data tied to warranties
         *
         * @param WP_Post $warranty Warranty post type object.
         *
         * @return array
         */
        protected function maybe_handle_warranty($warranty)
        {
        }
    }
    /**
     * Warranty_Query class
     */
    class Warranty_Query
    {
        /**
         * Class constructor.
         */
        public function __construct()
        {
        }
        /**
         * Adds a JOIN clause to the wc_warranty_products table when searching for warranty requests
         *
         * @param string   $join SQL JOIN query.
         * @param WP_Query $query SQL query.
         *
         * @return string
         */
        public function posts_join($join, $query)
        {
        }
        /**
         * Adds a WHERE clause when searching for warranty requests
         *
         * @param string   $where SQL WHERE query.
         * @param WP_Query $query SQL query.
         *
         * @return string
         */
        public function posts_where($where, $query)
        {
        }
    }
    /**
     * Plugin settings class.
     */
    class Warranty_Settings
    {
        /**
         * Class constructor.
         */
        public function __construct()
        {
        }
        /**
         * Get list of settings fields
         *
         * @return array
         */
        public static function get_settings_fields()
        {
        }
        /**
         * Updating warranty emails type field.
         *
         * @param array $value Field value.
         */
        public function update_warranty_emails($value)
        {
        }
        /**
         * Update warranty permission type field.
         *
         * @param array $value Field value.
         */
        public function update_permissions($value)
        {
        }
        /**
         * Update warranty multi status type field.
         *
         * @param array $value Field value.
         */
        public function update_multi_status($value)
        {
        }
        /**
         * Update warranty form builder type field.
         *
         * @param array $value Field value.
         */
        public function update_form_builder($value)
        {
        }
        /**
         * Update warranty category type field.
         *
         * @param array $value Field value.
         */
        public function update_category_warranties($value)
        {
        }
        /**
         * Update warranty default addons type field.
         *
         * @param array $value Field value.
         */
        public function update_default_addons($value)
        {
        }
        /**
         * Sanitize the value of warranty emails type field.
         *
         * @param mixed $value Field value.
         * @param array $option Field option.
         *
         * @return mixed
         */
        public function warranty_emails_posted_value($value, $option)
        {
        }
        /**
         * Sanitize the value of warranty permission type field.
         *
         * @param mixed $value Field value.
         * @param array $option Field option.
         *
         * @return mixed
         */
        public function permissions_posted_value($value, $option)
        {
        }
        /**
         * Sanitize the value of warranty multi status type field.
         *
         * @param mixed $value Field value.
         * @param array $option Field option.
         *
         * @return mixed
         */
        public function multi_status_posted_value($value, $option)
        {
        }
        /**
         * Sanitize the value of warranty form builder type field.
         *
         * @param mixed $value Field value.
         * @param array $option Field option.
         *
         * @return mixed
         */
        public function form_builder_posted_value($value, $option)
        {
        }
        /**
         * Sanitize the value of warranty default addons type field.
         *
         * @param mixed $value Field value.
         * @param array $option Field option.
         *
         * @return mixed
         */
        public function default_addons_posted_value($value, $option)
        {
        }
        /**
         * Create Warranty emails table.
         *
         * @param mixed $value Field value.
         */
        public function warranty_emails_table($value)
        {
        }
        /**
         * Display warranty multi status type field.
         *
         * @param array $value Field value.
         */
        public function warranty_multi_status_field($value)
        {
        }
        /**
         * Display warranty form builder type field.
         *
         * @param array $value Field value.
         */
        public function form_builder($value)
        {
        }
        /**
         * Display warranty permission table field.
         *
         * @param array $value Field value.
         */
        public function permissions_table($value)
        {
        }
        /**
         * Display warranty addons table.
         *
         * @param array $value Field value.
         */
        public function warranty_addons_table($value)
        {
        }
        /**
         * Display warranty categories table.
         *
         * @param array $value Field value.
         */
        public function warranty_categories_table($value)
        {
        }
        /**
         * Display warranty logo field.
         *
         * @param array $value Field value.
         */
        public function warranty_logo_field($value)
        {
        }
        /**
         * Get warranty emails from POST.
         */
        public static function get_warranty_emails_from_post()
        {
        }
        /**
         * Get warranty permission from POST.
         */
        public static function get_warranty_permissions_from_post()
        {
        }
        /**
         * Get multi status from POST
         *
         * @param string $option_id Option ID.
         */
        public static function get_multi_status_from_post($option_id)
        {
        }
        /**
         * Get form builder data from post
         *
         * @return array
         */
        public static function get_form_builder_from_post()
        {
        }
        /**
         * Get category warranties from post
         *
         * @return array
         */
        public static function get_category_warranties_from_post()
        {
        }
        /**
         * Get Posted data for the default addons and format them into an array of addons
         *
         * @return array
         */
        public static function get_default_addons_from_post()
        {
        }
    }
    /**
     * Plugin shortcodes class.
     */
    class Warranty_Shortcodes
    {
        /**
         * Class constructor.
         */
        public function __construct()
        {
        }
        /**
         * Returns the content for the shortcode [warranty_request]
         *
         * @return string The HTML content
         */
        public function render_warranty_request_shortcode()
        {
        }
        /**
         * Generates and returns the form for generic return requests
         *
         * @return string
         */
        public function render_return_form_shortcode()
        {
        }
    }
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
     * Current Compatibility: 2.5 - 3.0
     *
     * @version 2.0
     */
    class WC_Warranty_Compatibility
    {
        /**
         * Get order property with compatibility check on order getter introduced
         * in WC 3.0.
         *
         * @since 1.8.6
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
         * Get Order admin edit URL.
         *
         * @param Int $order_id ID of the order object.
         *
         * @return String
         */
        public static function get_order_admin_edit_url($order_id)
        {
        }
    }
    /**
     * Plugin initiation class.
     */
    class WooCommerce_Warranty
    {
        /**
         * Plugin file.
         *
         * @var string
         */
        public static $plugin_file = \WOOCOMMERCE_WARRANTY_FILE;
        /**
         * Plugin base folder path.
         *
         * @var string
         */
        public static $base_path = \WOOCOMMERCE_WARRANTY_ABSPATH;
        /**
         * Plugin includes/ folder path.
         *
         * @var string
         */
        public static $includes_path = \WOOCOMMERCE_WARRANTY_INCLUDES_PATH;
        /**
         * Warranty_Admin object.
         *
         * @var Warranty_Admin
         */
        public static $admin;
        /**
         * Database version.
         *
         * @var string
         */
        public static $db_version = '20240707';
        /**
         * Class constructor.
         * Setup the WC_Warranty extension.
         */
        public function __construct()
        {
        }
        /**
         * Initialization logic.
         */
        public function init()
        {
        }
        /**
         * Declare High-Performance Order Storage (HPOS) compatibility
         *
         * @see https://github.com/woocommerce/woocommerce/wiki/High-Performance-Order-Storage-Upgrade-Recipe-Book#declaring-extension-incompatibility
         *
         * @return void
         */
        public function declare_hpos_compatibility()
        {
        }
        /**
         * Load Localisation files.
         *
         * @return void
         */
        public function load_plugin_textdomain()
        {
        }
        /**
         * Enqueue script and style in the frontend.
         */
        public function enqueue_scripts()
        {
        }
        /**
         * Create a directory, and it's index.html file if they don't exist.
         *
         * @param string $directory Directory path.
         *
         * @return void
         */
        private static function maybe_create_directory_and_index_file($directory)
        {
        }
        /**
         * Create the directory for warranty uploads if it does not yet exist.
         */
        public static function maybe_create_warranty_uploads_directories()
        {
        }
        /**
         * Get an array of valid warranty uploads subdirectories.
         *
         * @return array
         */
        public static function get_valid_warranty_uploads_subdirectories()
        {
        }
        /**
         * Checks that the passed subdirectory is a valid warranty_uploads directory. Otherwise, it
         * returns the default subdirectory 'labels'
         *
         * @param string $subdir The subdirectory to validate.
         *
         * @return string
         */
        private static function validate_warranty_uploads_subdirectory($subdir)
        {
        }
        /**
         * Get warranty uploads directory.
         *
         * @param string $subdir The subdirectory to retrieve.
         *
         * @return string
         */
        public static function get_warranty_uploads_directory($subdir = '')
        {
        }
        /**
         * Get plugin URL.
         *
         * @return string
         */
        public static function get_plugin_url(): string
        {
        }
        /**
         * Get warranty uploads url.
         *
         * @param string $subdir The subdirectory to retrieve.
         *
         * @return string
         */
        public static function get_warranty_uploads_url($subdir = '')
        {
        }
        /**
         * Get warranty form builder tips.
         *
         * @return array
         */
        public static function get_tips(): array
        {
        }
        /**
         * Inserts an attachment for a file uploaded to the
         * warranty_uploads directory.
         *
         * @param string $filename the file path to the uploaded file.
         * @param string $subdir The subdirectory to retrieve.
         *
         * @return int
         */
        public static function insert_attachment_for_warranty_upload($filename, $subdir = '')
        {
        }
        /**
         * Updates an attachment guid for a file uploaded to the
         * warranty_uploads directory.
         *
         * @param int    $attachment_id Attachment ID.
         * @param string $filename the file path to the uploaded file.
         * @param string $subdir The subdirectory to retrieve.
         *
         * @return void
         */
        public static function update_attachment_guid_for_warranty_upload($attachment_id, $filename, $subdir = '')
        {
        }
        /**
         * Take the filename and subdirectory and build an args array
         * to pass to functions like wp_insert_attachment and wp_update_post.
         *
         * @param string $filename Filename.
         * @param string $subdir Sub directory of the filename.
         *
         * @return array
         */
        public static function build_attachment_args($filename, $subdir = '')
        {
        }
        /**
         * Return an anchor tag linked to the uploaded warranty file.
         *
         * @param string $filename Filename.
         * @param string $subdir The subdirectory to retrieve.
         *
         * @return string
         */
        public static function get_uploaded_file_anchor_tag($filename, $subdir = '')
        {
        }
        /**
         * Returns the default warranty statuses.
         *
         * @return array
         */
        public static function get_default_statuses()
        {
        }
        /**
         * Get shipping providers.
         *
         * @return array
         */
        public static function get_providers()
        {
        }
        /**
         * Include core files.
         */
        public function include_files()
        {
        }
        /**
         * Helper method to properly format a warranty string (e.g. 5 months)
         *
         * @param int    $duration Warranty duration.
         * @param string $unit Duration unit.
         *
         * @return string Formatted warranty string
         */
        public function get_warranty_string($duration, $unit = 'days')
        {
        }
        /**
         * Clear warranty informations from all products.
         */
        public static function clear_all_product_warranties()
        {
        }
        /**
         * Render warranty form.
         *
         * @param string $extra_key Extra key for the field ID in HTML.
         */
        public static function render_warranty_form($extra_key = '')
        {
        }
        /**
         * Render warranty form field.
         *
         * @param string $type Type of field.
         * @param string $key Field key or ID.
         * @param array  $field Field data.
         * @param string $extra_key Extra key for the field ID in HTML.
         */
        public static function render_warranty_form_field($type, $key, $field, $extra_key = '')
        {
        }
        /**
         * Render old warranty form.
         */
        public static function render_old_warranty_form()
        {
        }
        /**
         * Process and save data from fields generated by the form builder
         *
         * @param int $request_id Warranty request ID.
         *
         * @return bool|WP_Error
         */
        public static function process_warranty_form($request_id)
        {
        }
        /**
         * Returns a randomized filename.
         *
         * @param string $filename Filename.
         *
         * @return string
         */
        public static function get_randomized_filename($filename)
        {
        }
        /**
         * Make sure we restrict to a specific subset of MIME types, before doing the validation check.
         *
         * @param array $mimes list of supported mimes, by default.
         *
         * @return array restricted list of mimes.
         */
        public static function restrict_allowed_mime_types($mimes)
        {
        }
        /**
         * Get the datetime format to use throughout our views
         *
         * @return string
         */
        public static function get_datetime_format()
        {
        }
    }
}
namespace WooCommerce\Warranty {
    /**
     * Class Update_20221123
     *
     * Purpose of this update:
     * 1. Move all existing warranty request customer uploads and shipping label uploads to the new warranty_uploads folder.
     * 2. Randomize existing warranty request customer uploads' and shipping label uploads' filenames.
     *
     * @package WooCommerce\Warranty
     */
    class Update_20221123
    {
        /**
         * Database version.
         *
         * @var string
         */
        private static string $db_version = '20221123';
        /**
         * List of warranty requests.
         *
         * @var array
         */
        private array $warranty_request_ids = array();
        /**
         * List of shipping labels.
         *
         * @var array
         */
        private array $shipping_label_ids = array();
        /**
         * List of upload fields name.
         *
         * @var array
         */
        private array $customer_upload_field_meta_keys = array();
        /**
         * Initialize update.
         */
        public function __construct()
        {
        }
        /**
         * Set warranty request ids.
         *
         * @return void
         */
        private function set_warranty_request_ids()
        {
        }
        /**
         * A shipping label upload creates a WP attachment and the attachment ID is
         * stored in a post meta field '_warranty_shipping_label' on the
         * warranty_request post type.
         *
         * So, we can just loop through the warranty request IDs and grab those
         * attachment IDs. We'll use those to easily find, move each file and
         * update its path.
         *
         * @return void
         */
        private function set_warranty_shipping_label_ids()
        {
        }
        /**
         * Administrators have the option to add file upload fields to the warranty
         * request form through which customers submit warranty requests.
         *
         * Because the warranty request form is flexible (using a form builder UI),
         * the fields added to the form are saved in the 'warranty_form' WP option.
         * Each field input is saved with the following structure:
         * {"key":1828197948,"type":"file"}
         *
         * When a file is uploaded from the warranty request form, the path is saved to
         * the warranty_request post type meta using the field input key prefixed with
         * '_field_'. So for the example field input above, the post meta key
         * would be '_field_1828197948'.
         *
         * So, we'll save any field inputs of type 'file' so we can search each
         * warranty_request's post meta for those files and move them to the
         * new uploads directory.
         *
         * @return void
         */
        private function set_customer_upload_field_meta_keys()
        {
        }
        /**
         * Run all the necessary updates.
         *
         * @return void
         */
        private function run_updates()
        {
        }
        /**
         * Find all existing shipping labels that aren't in the
         * warranty_uploads/labels directory and move them and
         * update their corresponding WP attachment.
         *
         * @return void
         */
        private function maybe_move_and_rename_shipping_labels()
        {
        }
        /**
         * Find all existing customer uploads that aren't in the
         * warranty_uploads/customer directory and move them
         * and update the corresponding post meta field.
         *
         * @return void
         */
        private function maybe_move_and_rename_customer_uploads()
        {
        }
        /**
         * Set various flags so the plugin doesn't try to
         * run updates after this is done. Redirects go here
         * as well.
         *
         * @return void
         */
        private function complete_updates()
        {
        }
    }
    /**
     * Class Update_20240219
     *
     * Purpose of this update:
     * 1. Add order_id and rma code to post_title and post_parent.
     *
     * @package WooCommerce\Warranty
     */
    class Update_20240219
    {
        /**
         * Database version.
         *
         * @var string
         */
        private static $db_version = '20240219';
        /**
         * List of warranty requests.
         *
         * @var array
         */
        private $warranty_request_ids = array();
        /**
         * Initialize update.
         */
        public function __construct()
        {
        }
        /**
         * Set warranty request ids.
         *
         * @return void
         */
        private function set_warranty_request_ids()
        {
        }
        /**
         * Run all the necessary updates.
         *
         * @return void
         */
        private function run_updates()
        {
        }
        /**
         * Add order_id and rma code to post_title and post_parent.
         *
         * @return void
         */
        private function maybe_set_post_parent()
        {
        }
        /**
         * Set various flags so the plugin doesn't try to
         * run updates after this is done. Redirects go here
         * as well.
         *
         * @return void
         */
        private function complete_updates()
        {
        }
    }
    /**
     * Class Update_20240707
     *
     * Purpose of this update:
     * 1. Add order_id and rma code to post_title and post_parent.
     *
     * @package WooCommerce\Warranty
     */
    class Update_20240707
    {
        /**
         * Database version.
         *
         * @var string
         */
        private static $db_version = '20240707';
        /**
         * Initialize update.
         */
        public function __construct()
        {
        }
        /**
         * Run all the necessary updates.
         *
         * @return void
         */
        private function run_updates()
        {
        }
        /**
         * Update mata data values, replace empty array with empty string.
         *
         * @return void
         */
        private function update_meta_data_values()
        {
        }
        /**
         * Set various flags so the plugin doesn't try to
         * run updates after this is done. Redirects go here
         * as well.
         *
         * @return void
         */
        private function complete_updates()
        {
        }
    }
}
namespace {
    /**
     * Get variation string.
     *
     * @param WC_Order                    $order WC_Order.
     * @param WC_Order_Item_Product|array $item WC_Order_Item_Product.
     * @return string
     */
    function warranty_get_variation_string($order, $item)
    {
    }
    /**
     * Render Return Shipping Tracking Code Form.
     *
     * @param array $request Data from "Return Shipping Tracking Code Form".
     *
     * @return string
     */
    function warranty_return_shipping_tracking_code_form($request)
    {
    }
    /**
     * Render Request Shipping Tracking Code Form.
     *
     * @param array $request Data from "Request Shipping Tracking Code Form".
     *
     * @return string
     */
    function warranty_request_shipping_tracking_code_form($request)
    {
    }
    /**
     * Check whether a value is, or contains at any depth, an object.
     *
     * Warranty data is a small, shallow structure of arrays and scalars, so the walk
     * is bounded by both depth and node count. Depth alone is not enough: a decoded
     * array can reference one sub-array from many slots, which a walk by value sees
     * as exponentially many paths.
     *
     * @since 2.7.12
     *
     * @param mixed $value Value to inspect.
     * @return bool True when an object is found, or the value exceeds either bound.
     */
    function warranty_contains_object($value)
    {
    }
    /**
     * Log a stored warranty value that warranty_maybe_unserialize() refused.
     *
     * The helper returns false for a rejected payload, a row that no longer decodes
     * and a legitimately stored false alike, so the caller cannot tell them apart.
     * The log line records why the value was refused, and its type and size, so a
     * merchant whose warranty data stops showing has something to act on. The value
     * itself is never written to the log: it can hold attacker-supplied bytes.
     *
     * @since 2.7.12
     *
     * @param string $reason Why the value was refused.
     * @param mixed  $value  The refused value.
     * @return void
     */
    function warranty_log_rejected_value($reason, $value)
    {
    }
    /**
     * Unserialize a stored warranty value.
     *
     * Warranty data is only ever an array or a scalar, so decoding is limited to
     * those types and anything else is discarded. Use it on a stored warranty value
     * before treating it as an array: the meta accessor may have decoded the row
     * once already, leaving either a still-serialized string or a live object.
     *
     * @since 2.7.12
     *
     * @param mixed $value Stored meta value.
     * @return mixed The decoded value, or false when it does not decode to warranty data.
     */
    function warranty_maybe_unserialize($value)
    {
    }
    /**
     * Return warranty from order item.
     *
     * @param array $item Item data.
     * @return array
     */
    function warranty_get_order_item_warranty($item)
    {
    }
    /**
     * Get warranty duration.
     *
     * @param array    $warranty Warranty.
     * @param WC_Order $order WC_Order.
     * @return string
     */
    function warranty_get_warranty_duration_string($warranty, $order)
    {
    }
    /**
     * Get a product's warranty details
     *
     * @param int  $product_id Product or variation ID.
     * @param bool $maybe_use_parent false to force loading variation's warranty.
     *
     * @return array
     */
    function warranty_get_product_warranty($product_id, $maybe_use_parent = \true)
    {
    }
    /**
     * Get the default warranty of the given product.
     *
     * Falls back from the product's category warranties to the store-wide default warranty.
     *
     * @param int $product_id WC_Product ID.
     * @return array
     */
    function warranty_get_product_default_warranty($product_id)
    {
    }
    /**
     * Get the formatted warranty string of the given product
     *
     * @param int   $product_id WC_Product ID.
     * @param array $warranty Warranty data.
     * @return string
     */
    function warranty_get_warranty_string($product_id = 0, $warranty = \null)
    {
    }
    /**
     * Switch the duration from plural to singular form depending on the passed $value
     *
     * @param string $duration (e.g. weeks, months).
     * @param int    $value Number of $duration.
     *
     * @return string
     */
    function warranty_trim_duration($duration, $value)
    {
    }
    /**
     * Get the singular or plural form of the given duration.
     *
     * @param string $duration (e.g. weeks, months).
     * @param int    $value Number of $duration.
     * @return string
     */
    function warranty_duration_i18n($duration, $value = 0)
    {
    }
    /**
     * Get the default warranty settings
     *
     * @return array
     */
    function warranty_get_default_warranty()
    {
    }
    /**
     * Get the line total order item meta
     *
     * @param int $warranty_id Warranty ID.
     *
     * @return float
     */
    function warranty_get_item_amount($warranty_id)
    {
    }
    /**
     * Get the total amount of the request item.
     *
     * @param int $warranty_id Warranty ID.
     *
     * @return float
     *
     * @throws Exception If the item is not a product or the request quantity is zero.
     */
    function warranty_get_request_item_amount($warranty_id)
    {
    }
    /**
     * Get the number of available requests left for the given product in an order.
     *
     * @param int $order_id WC_Order ID.
     * @param int $product_id WC_Product ID.
     * @param int $idx Index.
     *
     * @return int
     */
    function warranty_get_quantity_remaining($order_id, $product_id, $idx)
    {
    }
    /**
     * Opposite to warranty_get_quantity_remaining()
     *
     * @param int $order_id WC_Order ID.
     * @param int $product_id WC_Product ID.
     * @param int $idx Index.
     * @return int
     */
    function warranty_count_quantity_used($order_id, $product_id, $idx)
    {
    }
    /**
     * Searches for warranty requests for a particular item in an order
     *
     * @param int $order_id WC_Order ID.
     * @param int $product_id WC_Product ID.
     * @param int $idx The index in the WC_Order::get_items results.
     *
     * @return array|bool Array of warranties or false if none are found
     */
    function warranty_search($order_id, $product_id = \null, $idx = \null)
    {
    }
    /**
     * Get all warranty statuses and allow other plugins to add their own
     *
     * @return array
     */
    function warranty_get_statuses()
    {
    }
    /**
     * Reset the statuses to the default value
     */
    function warranty_reset_statuses()
    {
    }
    /**
     * Update a warranty's status
     *
     * @param int    $warranty_id Warranty ID.
     * @param string $new_status Warranty Status.
     */
    function warranty_update_status($warranty_id, $new_status)
    {
    }
    /**
     * Return Warranty Completed Status object.
     *
     * @return WP_Term|false
     */
    function warranty_get_completed_status()
    {
    }
    /**
     * Get the warranty validity date based on the order date and warranty duration
     *
     * @param string $order_date Order date.
     * @param int    $warranty_duration Warranty duration.
     * @param string $warranty_unit Duration unit (e.g. weeks, months).
     *
     * @return string
     */
    function warranty_get_date($order_date, $warranty_duration, $warranty_unit)
    {
    }
    /**
     * Add item to Warranty Request
     *
     * @param string|int $request_id Warranty Request ID.
     * @param string|int $product_id WC_Product ID.
     * @param string|int $order_item_index Item index.
     * @param string|int $quantity Item quantity.
     *
     * @return int
     */
    function warranty_add_request_item($request_id, $product_id, $order_item_index = '', $quantity = 1)
    {
    }
    /**
     * Get Warranty Request items.
     *
     * @param int $request_id Warranty Request ID.
     * @return array|null
     */
    function warranty_get_request_items($request_id)
    {
    }
    /**
     * Process a request for warranty
     *
     * @deprecated
     * @param int    $order_id WC_Order ID.
     * @param int    $product_id WC_Product ID.
     * @param int    $idx Item Index.
     * @param string $request_type Request type.
     * @return int $request_id
     */
    function warranty_process_request($order_id, $product_id, $idx = 0, $request_type = 'replacement')
    {
    }
    /**
     * Create a new warranty request
     *
     * @param array $args Warranty request data.
     * @return int|false|WP_Error
     */
    function warranty_create_request($args = array())
    {
    }
    /**
     * Update a warranty request.
     *
     * @param int   $request_id Warranty Request ID.
     * @param array $data Array of data to update.
     * @return bool
     */
    function warranty_update_request($request_id, $data)
    {
    }
    /**
     * Delete Warranty Request.
     *
     * @param int $request_id Warranty Request ID.
     * @return bool
     */
    function warranty_delete_request($request_id)
    {
    }
    /**
     * Loads a warranty request, along with its metadata
     *
     * @param int     $request_id  Warranty Request ID.
     * @param boolean $need_user_check Flag to check if the user validation is needed.
     *
     * @return array|false
     */
    function warranty_load($request_id, $need_user_check = \true)
    {
    }
    /**
     * Check if current user can access warranty.
     *
     * @param WP_User             $user       WP User.
     * @param WC_Order|false|null $order      WC_Order object, false or null.
     * @param int                 $request_id Warranty ID.
     *
     * @return bool
     */
    function warranty_user_has_access($user, $order = \false, $request_id = 0)
    {
    }
    /**
     * Get product title.
     *
     * @param int $product_id WC_Product ID.
     * @return string
     */
    function warranty_get_product_title($product_id)
    {
    }
    /**
     * Send emails based on status change
     *
     * @uses warranty_variable_replacements()
     * @param int    $request_id Warranty Request ID.
     * @param string $status Status Slug.
     * @param string $prev_status Previous status.
     * @return void
     */
    function warranty_send_emails($request_id, $status, $prev_status = '')
    {
    }
    /**
     * Send a tracking request to the customer
     *
     * @param int $request_id Warranty Request ID.
     * @return void
     */
    function warranty_send_tracking_request($request_id)
    {
    }
    /**
     * Return inventory if the store or product's manage inventory is enabled
     *
     * @param int $request_id Warranty Request ID.
     * @return bool|void
     */
    function warranty_return_product_stock($request_id)
    {
    }
    /**
     * Add return stock note in the order.
     *
     * @param WC_Order   $order Order object.
     * @param int        $quantity Quantity of the product.
     * @param WC_Product $product Product object.
     */
    function warranty_add_return_stock_note($order, $quantity, $product)
    {
    }
    /**
     * Give a full or partial refund on the request's product
     *
     * @param int   $request_id Warranty Request ID.
     * @param float $amount If left empty, it will refund the full line item price.
     * @return bool|WP_Error
     */
    function warranty_refund_item($request_id, $amount = 0)
    {
    }
    /**
     * Find and replace variable holders. Used by warranty_send_emails()
     *
     * @param string $input String with placeholders to process.
     * @param int    $request_id Warranty Request ID.
     * @return string|false Parsed $input or false when can't load Warranty Request
     */
    function warranty_variable_replacements($input, $request_id)
    {
    }
    /**
     * Generate a unique RMA code
     *
     * @return string $code
     */
    function warranty_generate_rma_code()
    {
    }
    /**
     * Add an order note
     *
     * @param int $warranty_id Warranty Request ID.
     * @return bool
     */
    function warranty_add_order_note($warranty_id)
    {
    }
    /**
     * Get tracking data.
     *
     * @param int $request_id Warranty Request ID.
     * @return array|false
     */
    function warranty_get_tracking_data($request_id)
    {
    }
    /**
     * Check if the store allows refund requests
     *
     * @return bool
     */
    function warranty_refund_requests_enabled()
    {
    }
    /**
     * Check if the store allows coupon requests
     *
     * @return bool
     */
    function warranty_coupon_requests_enabled()
    {
    }
    /**
     * Check if the given order has any warranty requests
     *
     * @param int $order_id WC_Order ID.
     * @return bool
     */
    function warranty_order_has_warranty_requests($order_id)
    {
    }
    /**
     * Get sanitized $_REQUEST data.
     *
     * @return array
     */
    function warranty_request_data()
    {
    }
    /**
     * Sanitize post data.
     *
     * @param array $posts Post data.
     *
     * @return array
     */
    function warranty_post_data_cleaner($posts)
    {
    }
    /**
     * Get sanitized $_POST data.
     *
     * @return array
     */
    function warranty_request_post_data()
    {
    }
    /**
     * Get sanitized $_GET data.
     *
     * @return array
     */
    function warranty_request_get_data()
    {
    }
    /**
     * Get WC order object from warranty request id.
     *
     * @param int $request_id Warranty request ID.
     *
     * @return WC_Order|false
     */
    function warranty_get_order_from_request_id($request_id)
    {
    }
    \define('WOOCOMMERCE_WARRANTY_VERSION', '2.7.14');
    // WRCS: DEFINED_VERSION.
    \define('WOOCOMMERCE_WARRANTY_FILE', __FILE__);
    \define('WOOCOMMERCE_WARRANTY_ABSPATH', \trailingslashit(__DIR__));
    \define('WOOCOMMERCE_WARRANTY_INCLUDES_PATH', \WOOCOMMERCE_WARRANTY_ABSPATH . 'includes');
    /**
     * Initialize plugin.
     */
    function wc_warranty_init()
    {
    }
    /**
     * WooCommerce Deactivated Notice.
     */
    function wc_warranty_woocommerce_deactivated()
    {
    }
}