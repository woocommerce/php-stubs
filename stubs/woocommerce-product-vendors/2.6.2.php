<?php
/**
 * Generated stub declarations for woocommerce-product-vendors 2.6.2.
 * @see https://github.com/woocommerce/all-plugins/tree/stubs
 */

/**
 * Admin Notes UI.
 *
 * Renders the admin-only notes timeline on the product edit screen (as a sidebar meta
 * box) and on the vendor term edit screen, and handles the add/edit/delete AJAX actions.
 * Every render and AJAX path is gated to store admins via the data API.
 *
 * @package WooCommerce Product Vendors/Admin Notes
 * @version 2.6.0
 */
class WC_Product_Vendors_Admin_Notes_UI
{
    /**
     * Max products listed in the vendor "Products with notes" rollup.
     *
     * @var int
     */
    const ROLLUP_PRODUCT_LIMIT = 20;
    /**
     * Registers hooks.
     *
     * @since 2.6.0
     * @return WC_Product_Vendors_Admin_Notes_UI
     */
    public static function init()
    {
    }
    /**
     * Registers the product notes meta box (store admins only).
     *
     * @since 2.6.0
     * @return void
     */
    public function add_product_notes_meta_box()
    {
    }
    /**
     * Renders the product notes meta box.
     *
     * @since 2.6.0
     * @param WP_Post $post Current product post.
     * @return void
     */
    public function render_product_notes_meta_box($post)
    {
    }
    /**
     * Renders the vendor notes timeline on the term edit screen.
     *
     * @since 2.6.0
     * @param WP_Term $term Current vendor term.
     * @return void
     */
    public function render_vendor_notes($term)
    {
    }
    /**
     * Renders the shared timeline (list + add form) for an object.
     *
     * @since 2.6.0
     * @param string $object_type One of the OBJECT_TYPE_* constants.
     * @param int    $object_id   Vendor term id or product post id.
     * @return void
     */
    private function render_timeline($object_type, $object_id)
    {
    }
    /**
     * Renders the "Products with notes" rollup on the vendor term edit screen.
     *
     * Instead of interleaving product notes into the vendor timeline, this lists the
     * vendor's products that have notes (name, count, most-recent date) with a link to
     * each product's edit screen. Renders nothing when no product has notes.
     *
     * @since 2.6.0
     * @param int $vendor_id Vendor term id.
     * @return void
     */
    private function render_vendor_product_rollup($vendor_id)
    {
    }
    /**
     * Footer link under the product timeline pointing to the vendor's other notes.
     *
     * Surfaces notes/flags the product's vendor has elsewhere (its profile and its
     * other products) and links to the vendor edit screen. Returns '' unless this is a
     * product that has a vendor with notes elsewhere.
     *
     * @since 2.6.0
     * @param string $object_type One of the OBJECT_TYPE_* constants.
     * @param int    $object_id   Object id.
     * @return string
     */
    public function vendor_other_notes_footer($object_type, $object_id)
    {
    }
    /**
     * Returns the HTML for an inline "icon + count" stat chip.
     *
     * Shared by the product rollup and the Vendors list Notes column so both render
     * identically. The glyph and visible count are decorative (aria-hidden); the label
     * is exposed to screen readers and as a hover title.
     *
     * @since 2.6.0
     * @param int    $count    Visible count.
     * @param string $glyph    Dashicon glyph class (e.g. dashicons-flag).
     * @param string $modifier Colour modifier (is-note|is-flag|is-solved).
     * @param string $label    Accessible / hover label (e.g. "2 red flags").
     * @return string
     */
    public static function stat_chip($count, $glyph, $modifier, $label)
    {
    }
    /**
     * Builds the note / open-flag / solved-flag stat chips for a set of counts.
     *
     * Owns the glyph, colour, and label mapping in one place so the product rollup and
     * the Vendors list Notes column render identical chips. Each chip is omitted when
     * its count is zero.
     *
     * @since 2.6.0
     * @param int $notes  Number of regular notes.
     * @param int $open   Number of open red flags.
     * @param int $solved Number of solved red flags.
     * @return string Concatenated chip HTML (already escaped).
     */
    public static function stats_html($notes, $open, $solved)
    {
    }
    /**
     * Returns the HTML for a single timeline note (list item).
     *
     * Mirrors the WooCommerce order-notes markup so existing styles apply.
     *
     * @since 2.6.0
     * @param object $note Formatted note object.
     * @return string
     */
    public function note_li_html($note)
    {
    }
    /**
     * Reads and validates the object type from the request.
     *
     * @since 2.6.0
     * @return string Sanitized object type (may be empty/invalid; verify_request rejects it).
     */
    private function request_object_type()
    {
    }
    /**
     * Verifies an AJAX request (per-object nonce + capability). Exits on failure.
     *
     * @since 2.6.0
     * @param string $object_type Object type.
     * @param int    $object_id   Object id.
     * @return void
     */
    private function verify_request($object_type, $object_id)
    {
    }
    /**
     * Fetches a note and verifies it belongs to the request's object.
     *
     * The request nonce is scoped to a single object_type/object_id, so a note_id from a
     * different object must be rejected. Sends a 403 and exits on a missing note or a
     * mismatch.
     *
     * @since 2.6.0
     * @param int    $note_id     Note id.
     * @param string $object_type Requested object type.
     * @param int    $object_id   Requested object id.
     * @return object The formatted note (only returned when it matches the request object).
     */
    private function get_request_note($note_id, $object_type, $object_id)
    {
    }
    /**
     * AJAX: add a note.
     *
     * @since 2.6.0
     * @return void
     */
    public function ajax_add_note()
    {
    }
    /**
     * AJAX: edit a note.
     *
     * @since 2.6.0
     * @return void
     */
    public function ajax_edit_note()
    {
    }
    /**
     * AJAX: delete a note.
     *
     * @since 2.6.0
     * @return void
     */
    public function ajax_delete_note()
    {
    }
    /**
     * AJAX: resolve a note (close a flag).
     *
     * @since 2.6.0
     * @return void
     */
    public function ajax_resolve_note()
    {
    }
}
class WC_Product_Vendors_Privacy extends \WC_Abstract_Privacy
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
 * Class WC_Product_Vendors_Product_List_Filters
 *
 * @package WooCommerce Product Vendors/Admin
 * @since 2.1.0
 */
class WC_Product_Vendors_Product_List_Filters
{
    /**
     * Constructing, mainly hooking into actions.
     */
    public function __construct()
    {
    }
    /**
     * Output the select box containing the product vendors.
     *
     * @since 2.1.0
     */
    public function display_vendor_filter()
    {
    }
    /**
     * Get the vendors. These are all $terms from
     * wcpv_product_vendors taxonomy;
     *
     * @since 2.1.0
     *
     * @return array WP_Term
     */
    protected function get_vendors()
    {
    }
}
/**
 * Store Admin Class.
 *
 * General admin class to handle all things admin side for store.
 *
 * @category Admin
 * @package  WooCommerce Product Vendors/Admin
 * @version  2.0.0
 */
class WC_Product_Vendors_Store_Admin
{
    public static $self;
    /**
     * Initialize.
     *
     * @since 2.0.0
     * @version 2.0.35
     */
    public static function init()
    {
    }
    /**
     * Returns the current class object.
     *
     * @since 2.0.35
     * @version 2.0.35
     */
    public static function get_instance()
    {
    }
    /**
     * Adds our screen ids to WC so scripts can load
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return array $screen_ids
     */
    public function add_screen_ids_to_wc($screen_ids)
    {
    }
    /**
     * Gets the screen ids that needs styles or scripts
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return array
     */
    public function get_screen_ids()
    {
    }
    /**
     * Enqueue scripts and styles
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function enqueue_scripts_styles()
    {
    }
    /**
     * Role update / send email
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.31
     * @param int $user_id
     * @param string $new_role
     * @param array $old_roles
     * @return bool
     */
    public function role_update($user_id, $new_role, $old_roles)
    {
    }
    /**
     * Shows the pending count bubble on sidebar menu items for pending vendors
     * and pending product approvals.
     *
     * @access public
     * @since 2.0.0
     * @version 2.4.0
     * @param object $menu
     * @return array $menu modified menu
     */
    public function pending_items_count($menu)
    {
    }
    /**
     * Perform action when user is deleted.
     *
     * @since 2.0.31
     * @version 2.0.31
     * @param int $user_id
     * @return void
     */
    public function delete_user($user_id)
    {
    }
    /**
     * Adds vendor fields to vendor create page
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.16
     * @return bool
     */
    public function add_vendor_fields()
    {
    }
    /**
     * Adds additional fields for product vendor term
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.16
     * @param object $taxonomy
     * @return bool
     */
    public function edit_vendor_fields($term)
    {
    }
    /**
     * Saves additional fields for product vendor term
     *
     * @since 2.0.0
     * @version 2.0.0
     * @param object $term_id
     * @return bool
     */
    public function save_vendor_fields($term_id)
    {
    }
    /**
     * Run validation on the vendor email field
     *
     * @since 2.1.52
     * @version 2.1.52
     * @param string $term The term name to add.
     * @param string $taxonomy Taxonomy slug.
     * @return string|WP_Error
     */
    public function validate_email_field($term, $taxonomy)
    {
    }
    /**
     * Output a notice if a vendor is missing their email
     *
     * @since 2.1.52
     * @version 2.1.52
     * @return void
     */
    public function invalid_vendor_data_notice()
    {
    }
    /**
     * Modifies the vendor columns
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return array $columns modified columns
     */
    public function modify_vendor_columns($columns)
    {
    }
    /**
     * Renders the modified vendor column
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param string $value current value
     * @param string $column_name current column name
     * @param int $term_id current term id
     * @return string $value
     */
    public function render_vendor_columns($value, $column_name, $term_id)
    {
    }
    /**
     * Returns the vendor term ids shown on the current list-table page.
     *
     * Lets the notes column prefetch totals for the listed vendors only. Core populates the
     * terms list table before the column callbacks run; an empty array means "unknown", and
     * callers should fall back to every vendor.
     *
     * @since 2.6.0
     * @return int[] Vendor term ids, or an empty array when the list table is unavailable.
     */
    private static function listed_vendor_ids()
    {
    }
    /**
     * Add column to the user taxonomy columns
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param array $columns
     * @return bool
     */
    public function add_custom_user_column($columns)
    {
    }
    /**
     * Modifies the user taxonomy columns
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param string $content
     * @return string $vendors
     */
    public function add_user_column_data($content, $column_slug, $user_id)
    {
    }
    /**
     * Add vendor section fields to user profile
     *
     * @access public
     * @since 2.0.0
     * @version 2.1.0
     * @param object $user
     * @return bool
     */
    public function add_product_vendor_user_profile_section($user)
    {
    }
    /**
     * Save vendor section fields to user profile
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param object $user
     * @return bool
     */
    public function save_product_vendor_user_profile_section($user_id)
    {
    }
    /**
     * Register the commission menu item
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function register_commissions_menu_item()
    {
    }
    /**
     * Adds screen options for this page
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function add_screen_options()
    {
    }
    /**
     * Sets screen options for this page
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return mixed
     */
    public function set_screen_option($status, $option, $value)
    {
    }
    /**
     * Renders the commission page
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function render_commission_page()
    {
    }
    /**
     * After performing bulk updates, show a notification to the admin.
     *
     * @since  2.1.38
     * @return void
     */
    private function maybe_render_bulk_update_notifications()
    {
    }
    /**
     * Adds extra vendor field to attachment so we know who the attachment belongs to
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param array $form_fields
     * @param object $post
     * @return array $form_fields
     */
    public function add_attachments_field($form_fields, $post)
    {
    }
    /**
     * Saves attachment extra fields
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param object $post
     * @param array $data
     * @return array $post
     */
    public function save_attachments_field($post, $data)
    {
    }
    /**
     * Add vendor settings section to products tab
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param array $sections existing sections
     * @return array $sections modified sections
     */
    public function add_vendor_settings_section($sections)
    {
    }
    /**
     * Add vendor settings to vendor settings section
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param array $settings existing settings
     * @param string $current_section current section name
     * @return array $settings
     */
    public function add_vendor_settings($settings, $current_section)
    {
    }
    /**
     * Save vendor general/global settings
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function save_vendor_settings($value, $option, $raw_value)
    {
    }
    /**
     * Add sold by vendor to order item
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function add_sold_by_order_item_detail($item_id, $item, $product)
    {
    }
    /**
     * Add a commission field to the product general tab
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function add_product_commission_field_general()
    {
    }
    /**
     * Save the commission field for the product general tab
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param int $post_id
     * @return bool
     */
    public function save_product_commission_field_general($post_id)
    {
    }
    /**
     * Add a commission field to the product variation
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param int $loop
     * @return bool
     */
    public function add_product_commission_field_variation($loop, $variation_data, $variation)
    {
    }
    /**
     * Save the commission field for the product variable
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param int $product_id
     * @return bool
     */
    public function save_product_commission_field_variable($product_id)
    {
    }
    /**
     * Save the commission field for the product variation
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param int $variation_id
     * @param int $i loop count
     * @return bool
     */
    public function save_product_commission_field_variation($variation_id, $i)
    {
    }
    /**
     * Add a pass shipping field to the product general tab
     *
     * @access  public
     * @since 2.1.72 Implement _wcpv_customize_product_vendor_settings setting.
     * @since   2.0.0
     * @return void
     * @version 2.0.0
     *
     */
    public function add_product_pass_shipping_tax_field_general()
    {
    }
    /**
     * Save the pass shipping field for the product general tab
     *
     * @since 2.1.72 Implement logic to save _wcpv_customize_product_vendor_settings and _wcpv_product_taxes setting.
     * @since   2.0.0
     *
     * @param int $post_id
     *
     * @version 2.0.0
     */
    public function save_product_pass_shipping_tax_field_general($post_id)
    {
    }
    /**
     * Adds bulk edit action for vendors
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function add_variation_vendor_bulk_edit()
    {
    }
    /**
     * Ajax search for vendors
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return json $found_vendors
     */
    public function vendor_search_ajax()
    {
    }
    /**
     * Add pass shipping/tax setting to product bulk edit menu
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function add_product_bulk_edit_pass_shipping_tax()
    {
    }
    /**
     * Filters the order item meta label without underscore.
     *
     * @since 2.1.8 User correct WC core filter.
     * @param string $key
     * @return bool
     */
    public function filter_order_attribute_label($key)
    {
    }
    /**
     * Filters the order item meta value.
     *
     * @since 2.1.8
     * @param string $value
     * @param object $meta
     * @return bool
     */
    public function filter_order_attribute_value($value, $meta)
    {
    }
    /**
     * Save pass shipping/tax setting to product bulk edit
     *
     * @since 2.0.0
     * @version 2.0.0
     * @param object $product
     */
    public function save_product_bulk_edit_pass_shipping_tax($product)
    {
    }
    /**
     * Handles saving of the vendor to product.
     *
     * @since 2.0.0
     * @version 2.0.0
     * @param int $post_id
     * @return bool
     */
    public function save_product_vendor($post_id)
    {
    }
    /**
     * Add vendor selection on quick and bulk edit
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param string $column_name the name of the column to add it to
     * @param string $post_type
     * @return bool
     */
    public function quick_edit($column_name, $post_type)
    {
    }
    /**
     * Handles quick and bulk edit saves
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param int $post_id
     * @param object $post
     * @return int
     */
    public function bulk_and_quick_edit_save_post($post_id, $post)
    {
    }
    /**
     * Generates the CSV ( commissions ) download of current view
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return array $query
     */
    public function export_commissions_ajax()
    {
    }
    /**
     * Handles export of unpaid commissions
     *
     * @access public
     * @since 2.0.6
     * @version 2.0.6
     * @return bool
     */
    public function export_unpaid_commissions_ajax()
    {
    }
    /**
     * Add debug tool button.
     *
     * @since 2.0.0
     * @since 2.2.0 Update "wcpv_clear_transients" action callback.
     * @version 2.0.35
     * @return array $tools
     */
    public function add_debug_tool($tools)
    {
    }
    /**
     * Clears all report transients
     *
     * @access public
     * @since 2.0.0
     * @return bool
     * @version 2.0.0
     */
    public function clear_reports_transients()
    {
    }
    /**
     * Delete all transients created by this add-on.
     *
     * This function handles "wcpv_clear_transients" action.
     *
     * Note: This function is for internal usage.
     *
     * @since 2.2.0
     * @return void
     */
    public function clear_all_transients()
    {
    }
    /**
     * Maybe show a migrate admin storage notice.
     */
    public function migrate_admin_storage_notice()
    {
    }
}
/**
 * Commission Class.
 *
 * A class that generates the commission list.
 *
 * @category Commission
 * @package  WooCommerce Product Vendors/Commission
 * @version  2.0.0
 */
class WC_Product_Vendors_Store_Admin_Commission_List extends \WP_List_Table
{
    protected $commission;
    /**
     * Constructor
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function __construct(\WC_Product_Vendors_Commission $commission)
    {
    }
    /**
     * Prepares the items for display
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function prepare_items()
    {
    }
    /**
     * Adds additional views
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param mixed $views
     * @return bool
     */
    public function get_views()
    {
    }
    /**
     * Generate the table navigation above or below the table
     *
     * @since 3.1.0
     * @access protected
     * @param string $which
     */
    protected function display_tablenav($which)
    {
    }
    /**
     * Adds filters to the table
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param string $position whether top/bottom
     * @return bool
     */
    public function extra_tablenav($position)
    {
    }
    /**
     * Displays the months filter
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function months_dropdown($post_type)
    {
    }
    /**
     * Displays the commission status dropdown filter
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function status_dropdown($post_type)
    {
    }
    /**
     * Displays the vendors dropdown filter
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function vendors_dropdown($post_type)
    {
    }
    /**
     * Defines the columns to show
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return array $columns
     */
    public function get_columns()
    {
    }
    /**
     * Adds checkbox to each row
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param object $item
     * @return mixed
     */
    public function column_cb($item)
    {
    }
    /**
     * Defines what data to show on each column
     *
     * @since   2.0.0
     * @since   2.1.77 Use WC_Product_Vendors_Utils::get_total_commission_amount_html to display vendor commission.
     *
     * @param \stdClass  $item
     * @param string $column_name
     *
     * @return mixed
     * @version 2.0.0
     */
    public function column_default($item, $column_name)
    {
    }
    /**
     * Defines the hidden columns
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return array $columns
     */
    public function get_hidden_columns()
    {
    }
    /**
     * Returns the columns that need sorting
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return array $sort
     */
    public function get_sortable_columns()
    {
    }
    /**
     * Display custom no items found text
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function no_items()
    {
    }
    /**
     * Add bulk actions
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function get_bulk_actions()
    {
    }
    /**
     * Processes bulk actions
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return void
     */
    public function process_bulk_action()
    {
    }
    /**
     * Set shipping status of an order item
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param int $order_item_id
     * @param string $status
     * @return bool
     */
    public function set_fulfill_status($order_item_id, $status = 'unfulfilled')
    {
    }
    /**
     * Print column headers, accounting for hidden and sortable columns.
     * this overrides WP core simply to make column headers use REQUEST instead of GET
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param bool $with_id Whether to set the id attribute or not
     * @return bool
     */
    public function print_column_headers($with_id = \true)
    {
    }
}
/**
 * Vendor Admin Class.
 *
 * General admin class to handle all things vendor side for store.
 *
 * @category Admin
 * @package  WooCommerce Product Vendors/Vendor Admin
 * @version  2.0.0
 */
class WC_Product_Vendors_Vendor_Admin
{
    public $order_notes;
    public static $self;
    /**
     * Array of pages IDs where vendor id filter should be added to queries.
     *
     * @since 2.1.12
     * @var array $filtered_page_list array of page IDs.
     */
    private $filtered_page_list = array(
        'edit-product',
        // Page ID to filter on WooCommerce product list view.
        'product_page_woocommerce-bulk-stock-management',
    );
    /**
     * Initialize
     *
     * @since 2.0.0
     * @version 2.0.35
     * @return bool
     */
    public static function init()
    {
    }
    /**
     * Filters the permalink for the vendor store page.
     *
     * @since 2.4.4
     *
     * @param string $permalink The original permalink for the vendor store page.
     * @return string The filtered permalink for the vendor store page.
     */
    public function filter_vendor_store_page_permalink($permalink)
    {
    }
    /**
     * Display a title on the vendor order details page.
     *
     * Defines the WordPress title global when viewing an order in the context
     * of a vendor.
     *
     * @since 2.2.0
     *
     * @param WP_Screen $current_screen The current screen object. Passed by reference.
     */
    public function display_html_page_title($current_screen)
    {
    }
    /**
     * Disables WC Admin Features.
     *
     * @since 2.1.50
     * @return array Empty array of features.
     */
    public function disable_wc_admin_features()
    {
    }
    /**
     * Checks if we need to require additional capabilities for editing other vendor's stuff.
     *
     * @deprecated 2.6.2 Superseded by WC_Product_Vendors_Roles_Caps::map_vendor_capabilities(),
     *             which is registered globally (not just in wp-admin) so it also covers
     *             REST/XML-RPC. Kept as a compatibility shim since this was a public method/hook.
     *
     * @param array  $caps Currently required capabilities.
     * @param string $cap Original requested capability.
     * @param int    $user_id Current User id.
     * @param array  $args object id in use.
     *
     * @return array
     */
    public function map_vendor_capabilities(array $caps, $cap, $user_id, array $args)
    {
    }
    /**
     * Filters out pages vendors should not have access to.
     *
     * @since 2.0.39
     * @version 2.0.39
     */
    public function filter_page_access()
    {
    }
    /**
     * Remove subscriptions access from vendors as it is not compatible.
     *
     * @since 2.0.37
     * @version 2.0.37
     */
    public function filter_subs_caps($args)
    {
    }
    /**
     * Returns the current class object.
     *
     * @since 2.0.35
     * @version 2.0.35
     */
    public static function get_instance()
    {
    }
    /**
     * Adds vendor switcher function to the admin bar
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param object $bar
     * @return bool
     */
    public function add_vendor_switcher($bar)
    {
    }
    /**
     * Remove new function from the admin bar
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function filter_admin_bar()
    {
    }
    /**
     * Remove the help tab from admin toolbar
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function remove_help_tab()
    {
    }
    /**
     * Handles the switching of vendors
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function vendor_switch_ajax()
    {
    }
    /**
     * Handles the vendor support form submission
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function vendor_support_ajax()
    {
    }
    /**
     * Process the vendor support form
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param array $form_items
     * @return bool
     */
    public function vendor_support_form_process($form_items)
    {
    }
    /**
     * Adds a class to page body for easier targeting of styles
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param array $classes
     * @return bool
     */
    public function add_admin_body_class($classes)
    {
    }
    /**
     * Remove meta boxes from products for vendors
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function remove_product_meta_boxes()
    {
    }
    /**
     * Remove product types from vendors
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param array $types
     * @return bool
     */
    public function remove_product_types($types)
    {
    }
    /**
     * Remove product data tabs
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param array $tabs
     * @return array $tabs
     */
    public function remove_product_data_tabs($tabs)
    {
    }
    /**
     * Adds a message for pending vendors
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function add_pending_vendor_message()
    {
    }
    /**
     * Tells a vendor user who is not assigned to any vendor why their screens are empty.
     *
     * Login is already blocked for these users, but an existing session survives the
     * removal of the last vendor assignment, which otherwise leaves them on a dashboard
     * with no data and no explanation.
     *
     * @since 2.6.1
     * @return void
     */
    public function maybe_add_no_vendor_notice()
    {
    }
    /**
     * Remove screen help tabs
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function remove_help_tabs($old_help, $screen_id, $screen)
    {
    }
    /**
     * Gets the screen ids that needs styles or scripts
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function get_screen_ids()
    {
    }
    /**
     * Enqueue scripts and styles
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function enqueue_scripts_styles()
    {
    }
    /**
     * Adds our screen ids to WC so scripts can load
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return array $screen_ids
     */
    public function add_screen_ids_to_wc($screen_ids)
    {
    }
    /**
     * Conditionally show sales widget in dashboard for vendors
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return object $query
     */
    public function render_dashboard_sales_widget($query)
    {
    }
    /**
     * Filters the product category dropdown
     *
     * @access public
     * @since 2.0.9
     * @version 2.0.9
     * @return array $columns modified columns
     */
    public function filter_product_dropdown_categories($args)
    {
    }
    /**
     * Restricts some of the product columns from vendors
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return array $columns modified columns
     */
    public function restrict_product_columns($columns)
    {
    }
    /**
     * Restrict products only the vendor has managed access to
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param object $query original query object
     * @return bool
     */
    public function restrict_products($query)
    {
    }
    /**
     * Restrict attachments only the vendor has managed access to
     *
     * @access public
     * @since 2.0.19
     * @version 2.0.19
     * @param object $query original query object
     * @return bool
     */
    public function restrict_attachments($query)
    {
    }
    /**
     * Check that the current user is able to edit the currently requested product.
     * Die if access is restricted.
     *
     * @since 2.1.1
     */
    public function product_edit_access_control()
    {
    }
    /**
     * Perform tasks on save post
     *
     * @access public
     * @since 2.0.0
     * @since 2.2.0 Add WC_Product_Vendor_Transient_Manager to delete vendor transient data.
     *
     * @param int $post_id
     *
     * @return bool
     * @version 2.0.0
     */
    public function save_post($post_id)
    {
    }
    /**
     * Add meta when adding attachments
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param int $post_id
     * @return bool
     */
    public function process_attachment($post_id)
    {
    }
    /**
     * Restrict attachments only the vendor has managed access to
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param object $query original query object
     * @return bool
     */
    public function restrict_attachments_ajax($query)
    {
    }
    /**
     * Restrict ajax searched products only the vendor has managed access to
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param array $found_products
     * @return bool
     */
    public function restrict_ajax_searched_products($found_products)
    {
    }
    /**
     * Restricts the ajax customer search results to customers the vendor can manage.
     *
     * When the search term is numeric, WooCommerce loads the user by ID directly
     * without running a WP_User_Query, so filter_users() never applies. Re-querying
     * the found IDs runs them through filter_users() via pre_get_users.
     *
     * Gated on is_vendor() rather than auth_vendor_user() to match
     * WC_Product_Vendors_Roles_Caps::map_vendor_order_capabilities(), so a vendor with no active vendor gets an
     * empty result from filter_users() instead of unfiltered results.
     *
     * @since 2.6.2
     *
     * @param array $found_customers Customer labels keyed by user ID.
     *
     * @return array
     */
    public function restrict_ajax_searched_customers($found_customers)
    {
    }
    /**
     * Modified product filters to fit for vendor
     *
     * This is a copy of the original WC product_filters() method to manipulate
     * the count of each product types
     *
     * @since 2.0.0
     * @version 2.0.0
     *
     * @param string $output Product filter output.
     * @return string $output Modified product filter output.
     */
    public function product_filters($output)
    {
    }
    /**
     * Removes the count from product statuses
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return mix $views
     */
    public function product_status_views($views)
    {
    }
    /**
     * Modify the view columns for users
     *
     * @access public
     * @since 2.1.0
     * @version 2.1.0
     * @return mix $views
     */
    public function users_type_views($views)
    {
    }
    /**
     * Modify the product months filter to only show the months where the
     * product belongs to the current vendor
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param array $month
     * @param sting $post_type
     * @return array $months
     */
    public function product_months_filter($months, $post_type)
    {
    }
    /**
     * Adds vendor menus
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function register_vendor_menus()
    {
    }
    /**
     * Adds screen options for this page
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function add_orders_screen_options()
    {
    }
    /**
     * Sets screen options for this page
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return mixed
     */
    public function set_screen_option($status, $option, $value)
    {
    }
    /**
     * Renders the vendor orders page
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function render_orders_page()
    {
    }
    /**
     * Renders the vendor order page
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function render_order_page()
    {
    }
    /**
     * Renders the vendor sales report page
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function render_reports_page()
    {
    }
    /**
     * Add a commission field to the product general tab
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function add_product_commission_field_general()
    {
    }
    /**
     * Add a commission field to the product variation
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param int $loop
     * @return bool
     */
    public function add_product_commission_field_variation($loop, $variation_data, $variation)
    {
    }
    /**
     * Renders the vendor settings page
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function render_settings_page()
    {
    }
    /**
     * Renders the vendor support page
     *
     * @access public
     * @since 2.0.0
     * @version 2.1.5
     */
    public function render_support_page()
    {
    }
    /**
     * Gets all products that are unfulfilled for the current vendor
     *
     * @access public
     * @since 2.0.0
     * @since 2.2.0 Use WC_Product_Vendor_Transient_Manager to get and set data in transient.
     * @version 2.0.0
     * @return int $count
     */
    public function unfulfilled_products_count()
    {
    }
    /**
     * Filters the user list query to only the vendor can manage
     *
     * @access public
     * @since 2.1.0
     * @version 2.1.0
     * @param object $query
     * @return bool
     */
    public function filter_users($query)
    {
    }
    /**
     * Filters the user roles to only the vendor can manage
     *
     * @access public
     * @since 2.1.0
     * @version 2.1.0
     * @param object $roles
     * @return bool
     */
    public function filter_user_roles($roles)
    {
    }
    /**
     * Save vendor id to user meta
     *
     * @access public
     * @since 2.1.0
     * @version 2.1.0
     * @param object $user
     * @return bool
     */
    public function update_user($user_id)
    {
    }
    /**
     * Save user/customer addresses from profile
     *
     * @access public
     * @since 2.1.0
     * @version 2.1.0
     * @param object $user
     * @return bool
     */
    public function update_user_addresses($user_id)
    {
    }
    /**
     * Get Address Fields for the edit user pages.
     *
     * @return array Fields to display which are filtered through woocommerce_customer_meta_fields before being returned
     */
    public function get_customer_meta_fields()
    {
    }
    /**
     * Add customer shipping/billing info to user profile
     *
     * @access public
     * @since 2.1.0
     * @version 2.1.0
     * @param object $user
     * @return bool
     */
    public function add_customer_detail_profile_section($user)
    {
    }
    /**
     * Filters the user columns
     *
     * @access public
     * @since 2.1.0
     * @version 2.1.0
     * @param array $columns
     * @return array $columns
     */
    public function filter_user_columns($columns)
    {
    }
    /**
     * Shows the unfulfilled products count on orders menu item
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param object $menu
     * @return array $menu modified menu
     */
    public function unfulfilled_products_count_bubble($menu)
    {
    }
    /**
     * Clears all report transients
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function clear_reports_transients()
    {
    }
    /**
     * Hides admin notices if user is not admin (Keeps notices from WC_Admin_Meta_Boxes only)
     *
     * @since 2.1.34
     * @return void
     */
    public function maybe_hide_admin_notices()
    {
    }
    /**
     * Should return vendor (admin or manager) editable settings list.
     *
     * Vendor store settings are defined in includes/admin/views/html-vendor-store-settings-page.php
     *
     * @since 2.1.69
     *
     * @return array List of editable settings.
     */
    private function get_vendor_store_editable_settings_list()
    {
    }
}
/**
 * Vendor Dashboard Class.
 *
 * A class that handles the dashboard for vendors.
 *
 * @category Dashboard
 * @package  WooCommerce Product Vendors/Vendor Dashboard
 * @version  2.0.0
 */
class WC_Product_Vendors_Vendor_Dashboard
{
    /**
     * Constructor
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.16
     * @return bool
     */
    public function __construct()
    {
    }
    /**
     * Setup dashboard for vendors
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function setup_vendor_dashboard()
    {
    }
    /**
     * Remove screen help tabs.
     *
     * @since 2.0.0
     * @version 2.0.38
     * @return bool
     */
    public function remove_help_tabs($old_help, $screen_id, $screen)
    {
    }
    /**
     * Setup dashboard widgets for vendors
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.16
     * @return bool
     */
    public function setup_vendor_dashboard_widget()
    {
    }
    /**
     * Renders the sales dashboard widgets for vendors
     *
     * @since 2.0.0
     * @since 2.2.0 Use WC_Product_Vendor_Transient_Manager to get and set data in transient.
     * @version 2.0.0
     */
    public function render_sales_dashboard_widget()
    {
    }
    /**
     * Set dashboard columns to 1
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return array $columns
     */
    public function set_dashboard_columns($columns)
    {
    }
    /**
     * Set dashboard columns to 1
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return int
     */
    public function set_user_dashboard_columns()
    {
    }
}
/**
 * Order Detail List Class.
 *
 * A class that generates the order list (detail) for vendors.
 *
 * @category Order
 * @package  WooCommerce Product Vendors/Vendor Order Detail List
 * @version  2.0.0
 */
class WC_Product_Vendors_Vendor_Order_Detail_List extends \WP_List_Table
{
    private $vendor_data;
    /**
     * Init
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function __construct()
    {
    }
    /**
     * Prepares the items for display
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function prepare_items()
    {
    }
    /**
     * Generate the table navigation above or below the table
     *
     * @since 3.1.0
     * @access protected
     * @param string $which
     */
    protected function display_tablenav($which)
    {
    }
    /**
     * Defines the columns to show
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return array $columns
     */
    public function get_columns()
    {
    }
    /**
     * Adds checkbox to each row
     *
     * @access  public
     * @since   2.0.0
     * @since   2.1.77 Use WC_Product_Vendors_Utils::get_total_commission_amount_html to display vendor commission.
     *
     * @param object $item
     *
     * @return mixed
     * @version 2.0.0
     */
    public function column_cb($item)
    {
    }
    /**
     * Defines what data to show on each column
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param \stdClass $item
     * @param string $column_name
     * @return mixed
     */
    public function column_default($item, $column_name)
    {
    }
    /**
     * Defines the hidden columns
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return array $columns
     */
    public function get_hidden_columns()
    {
    }
    /**
     * Display custom no items found text
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function no_items()
    {
    }
    /**
     * Add bulk actions
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function get_bulk_actions()
    {
    }
    /**
     * Processes bulk actions
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function process_bulk_action()
    {
    }
    /**
     * Checks if order item is a variable product
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param array $item
     * @return bool
     */
    public function is_variable_product($item)
    {
    }
    /**
     * Print column headers, accounting for hidden and sortable columns.
     * this overrides WP core simply to make column headers use REQUEST instead of GET
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param bool $with_id Whether to set the id attribute or not
     * @return bool
     */
    public function print_column_headers($with_id = \true)
    {
    }
}
/**
 * Order Notes Class.
 *
 * A class that generates the order notes.
 *
 * @category Order
 * @package  WooCommerce Product Vendors/Vendor Order Notes
 * @version  2.0.0
 */
class WC_Product_Vendors_Vendor_Order_Notes
{
    /**
     * Constructor
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function __construct()
    {
    }
    /**
     * Validates the current request.
     *
     * @return boolean TRUE if request is valid, FALSE otherwise.
     */
    private function is_valid_request()
    {
    }
    /**
     * Adds a note (comment) to the order.
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param string $note Note to add.
     * @param int $is_customer_note (default: 0) Is this a note for the customer?
     * @param bool added_by_user Was the note added by a user?
     * @return int Comment ID.
     */
    public function add_order_note()
    {
    }
    /**
     * Outputs the order notes
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param WC_Order $order
     * @return mixed
     */
    public function output($order)
    {
    }
}
/**
 * Orders List Class.
 *
 * A class that generates the orders list for vendors.
 *
 * @category Order
 * @package  WooCommerce Product Vendors/Vendor Orders List
 * @version  2.0.0
 */
class WC_Product_Vendors_Vendor_Orders_List extends \WP_List_Table
{
    private $vendor_id;
    private $vendor_data;
    /**
     * Init
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function __construct()
    {
    }
    /**
     * Prepares the items for display
     *
     * @todo this needs to be cached
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function prepare_items()
    {
    }
    /**
     * Adds additional views
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param mixed $views
     * @return bool
     */
    public function get_views()
    {
    }
    /**
     * Generate the table navigation above or below the table
     *
     * @since 3.1.0
     * @access protected
     * @param string $which
     */
    protected function display_tablenav($which)
    {
    }
    /**
     * Adds filters to the table
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param string $position whether top/bottom
     * @return bool
     */
    public function extra_tablenav($position)
    {
    }
    /**
     * Displays the months filter
     *
     * @todo this needs to be cached
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function months_dropdown($post_type)
    {
    }
    /**
     * Displays the paid status dropdown filter
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function status_dropdown($post_type)
    {
    }
    /**
     * Defines the columns to show
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return array $columns
     */
    public function get_columns()
    {
    }
    /**
     * Adds checkbox to each row
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param object $item
     * @return mixed
     */
    public function column_cb($item)
    {
    }
    /**
     * Defines what data to show on each column
     *
     * @access  public
     * @since   2.0.0
     * @since   2.1.77 Use WC_Product_Vendors_Utils::get_total_commission_amount_html to display vendor commission.
     *
     * @param \stdClass $item
     * @param string $column_name
     *
     * @return mixed
     * @version 2.0.0
     */
    public function column_default($item, $column_name)
    {
    }
    /**
     * Defines the hidden columns
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return array $columns
     */
    public function get_hidden_columns()
    {
    }
    /**
     * Returns the columns that need sorting
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return array $sort
     */
    public function get_sortable_columns()
    {
    }
    /**
     * Display custom no items found text
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function no_items()
    {
    }
    /**
     * Add bulk actions
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function get_bulk_actions()
    {
    }
    /**
     * Processes bulk actions
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function process_bulk_action()
    {
    }
    /**
     * Checks if order item is a variable product
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param array $item
     * @return bool
     */
    public function is_variable_product($item)
    {
    }
    /**
     * Print column headers, accounting for hidden and sortable columns.
     * this overrides WP core simply to make column headers use REQUEST instead of GET
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param bool $with_id Whether to set the id attribute or not
     * @return bool
     */
    public function print_column_headers($with_id = \true)
    {
    }
}
class WC_Product_Vendors_Store_Report_Sales_By_Date extends \WC_Admin_Report
{
    public $chart_colors = array();
    public $current_range;
    public $vendor_id;
    private $report_data;
    /**
     * Constructor
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function __construct()
    {
    }
    /**
     * Get the report data
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return array of objects
     */
    public function get_report_data()
    {
    }
    /**
     * Get the report based on parameters
     *
     * @access public
     * @since 2.0.0
     * @since 2.2.0 Use WC_Product_Vendor_Transient_Manager to get and set data in transient.
     * @version 2.0.0
     * @return array of objects
     */
    public function query_report_data()
    {
    }
    /**
     * Get the legend for the main chart sidebar
     * @return array
     */
    public function get_chart_legend()
    {
    }
    /**
     * Output the report
     */
    public function output_report()
    {
    }
    /**
     * Output an export link
     */
    public function get_export_button()
    {
    }
    /**
     * Round our totals correctly
     * @param  string $amount
     * @return string
     */
    private function round_chart_totals($amount)
    {
    }
    /**
     * Get the main chart
     *
     * @since 2.2.0 Use WC_Product_Vendor_Transient_Manager to get and set data in transient.
     * @return string
     */
    public function get_main_chart()
    {
    }
    /**
     * [get_chart_widgets description]
     *
     * @return array
     */
    public function get_chart_widgets()
    {
    }
    /**
     * Show current filters
     */
    public function current_filters()
    {
    }
    /**
     * Vendor selection
     */
    public function vendor_widget()
    {
    }
}
/**
 * WC_Product_Vendors_Store_Reports Class
 */
class WC_Product_Vendors_Store_Reports
{
    /**
     * Constructor
     *
     * @since 2.0.0
     * @version 2.0.0
     */
    public function __construct()
    {
    }
    /**
     * Get a report from our reports subfolder
     *
     * @param string $name Report name.
     * @throws Exception If the file could not be read.
     */
    public static function get_report($name)
    {
    }
    /**
     * Add vendor report
     *
     * @since 2.0.0
     * @version 2.0.0
     * @param array $reports Reports.
     * @return array $reports Updated reports.
     */
    public function add_report($reports)
    {
    }
}
class WC_Product_Vendors_Vendor_Report_Low_In_Stock extends \WC_Report_Stock
{
    /**
     * No items found text
     */
    public function no_items()
    {
    }
    /**
     * Get Products matching stock criteria
     */
    public function get_items($current_page, $per_page)
    {
    }
}
class WC_Product_Vendors_Vendor_Report_Most_Stocked extends \WC_Report_Stock
{
    /**
     * Get Products matching stock criteria
     */
    public function get_items($current_page, $per_page)
    {
    }
}
class WC_Product_Vendors_Vendor_Report_Out_Of_Stock extends \WC_Report_Stock
{
    /**
     * No items found text
     */
    public function no_items()
    {
    }
    /**
     * Get Products matching stock criteria
     */
    public function get_items($current_page, $per_page)
    {
    }
}
class WC_Product_Vendors_Vendor_Report_Sales_By_Date extends \WC_Admin_Report
{
    public $chart_colors = array();
    public $current_range;
    private $report_data;
    /**
     * Constructor
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function __construct()
    {
    }
    /**
     * Get the report data
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return array of objects
     */
    public function get_report_data()
    {
    }
    /**
     * Get the report based on parameters
     *
     * @access public
     * @since 2.0.0
     * @since 2.2.0 Use WC_Product_Vendor_Transient_Manager to get and set data in transient.
     * @return array of objects
     * @version 2.0.0
     */
    public function query_report_data()
    {
    }
    /**
     * Get the legend for the main chart sidebar
     * @return array
     */
    public function get_chart_legend()
    {
    }
    /**
     * Output the report
     */
    public function output_report()
    {
    }
    /**
     * Output an export link
     */
    public function get_export_button()
    {
    }
    /**
     * Round our totals correctly
     * @param  string $amount
     * @return string
     */
    private function round_chart_totals($amount)
    {
    }
    /**
     * Get the main chart
     * @since 2.2.0 Use WC_Product_Vendor_Transient_Manager to get and set data in transient.
     * @return string
     */
    public function get_main_chart()
    {
    }
}
class WC_Product_Vendors_Vendor_Report_Sales_By_Product extends \WC_Admin_Report
{
    public $chart_colors = array();
    public $product_ids = array();
    public $product_ids_titles = array();
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Filters the list of product ids belonging to a vendor
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return
     */
    public function filter_vendor_ids()
    {
    }
    /**
     * Checks whether a product belongs to the vendor the user is currently switched to.
     *
     * This report is scoped to a single vendor throughout - its commission queries and its
     * cached data are both keyed on the active vendor - so membership of the product's
     * vendor is the wrong test here: a user assigned to several vendors would otherwise see
     * another vendor's rows inside totals that do not include them.
     *
     * @since x.x.x
     * @param int $product_id Product ID.
     * @return bool
     */
    private function is_active_vendor_product($product_id)
    {
    }
    /**
     * Get the legend for the main chart sidebar
     * @return array
     */
    public function get_chart_legend()
    {
    }
    /**
     * Output the report
     */
    public function output_report()
    {
    }
    /**
     * [get_chart_widgets description]
     *
     * @return array
     */
    public function get_chart_widgets()
    {
    }
    /**
     * Show current filters
     */
    public function current_filters()
    {
    }
    /**
     * Product selection
     */
    public function products_widget()
    {
    }
    /**
     * Output an export link
     */
    public function get_export_button()
    {
    }
    /**
     * Get the main chart
     *
     * @return string
     */
    public function get_main_chart()
    {
    }
}
class WC_Product_Vendors_Vendor_Reports
{
    /**
     * Handles output of the reports page in vendor admin.
     */
    public static function output()
    {
    }
    /**
     * Returns the definitions for the reports to show in admin.
     *
     * @return array
     */
    public static function get_reports()
    {
    }
    /**
     * Get a report from our reports subfolder
     */
    public static function get_report($name)
    {
    }
}
//phpcs:disable Squiz.Classes.ClassFileName.NoMatch
/**
 * BlockTemplateUtils class used for serving block templates from Woo Blocks.
 * IMPORTANT: These methods have been duplicated from Gutenberg/lib/full-site-editing/block-templates.php as those functions are not for public usage.
 *
 * For internal use only.
 *
 * Based on https://github.com/woocommerce/woocommerce/blob/release/10.0/plugins/woocommerce/includes/blocks/class-wc-brands-block-template-utils-duplicated.php.
 */
class WC_Product_Vendor_Block_Template_Utils
{
    /**
     * WooCommerce plugin slug
     *
     * This is used to save templates to the DB which are stored against this value in the wp_terms table.
     *
     * @var string
     */
    protected const PLUGIN_SLUG = 'woocommerce/woocommerce';
    /**
     * Returns an array containing the references of
     * the passed blocks and their inner blocks.
     *
     * @param array $blocks array of blocks.
     *
     * @return array block references to the passed blocks and their inner blocks.
     */
    public static function gutenberg_flatten_blocks(&$blocks)
    {
    }
    /**
     * Parses wp_template content and injects the current theme's
     * stylesheet as a theme attribute into each wp_template_part
     *
     * @param string $template_content serialized wp_template content.
     *
     * @return string Updated wp_template content.
     */
    public static function gutenberg_inject_theme_attribute_in_content($template_content)
    {
    }
    /**
     * Build a unified template object based on a theme file.
     *
     * @param array|object $template_file Theme file.
     * @param string       $template_type wp_template or wp_template_part.
     *
     * @return \WP_Block_Template Template.
     */
    public static function gutenberg_build_template_result_from_file($template_file, $template_type)
    {
    }
    /**
     * Converts template slugs into readable titles.
     *
     * @param string $template_slug The templates slug (e.g. single-product).
     * @return string Human friendly title converted from the slug.
     */
    public static function convert_slug_to_title($template_slug)
    {
    }
    /**
     * Build a new template object so that we can make Woo Blocks default templates available in the current theme should they not have any.
     *
     * @param string $template_file Block template file path.
     * @param string $template_type wp_template or wp_template_part.
     * @param string $template_slug Block template slug e.g. single-product.
     * @param bool   $template_is_from_theme If the block template file is being loaded from the current theme instead of Woo Blocks.
     *
     * @return object Block template object.
     */
    public static function create_new_block_template_object($template_file, $template_type, $template_slug, $template_is_from_theme = \false)
    {
    }
    /**
     * Returns whether the blockified templates should be used or not.
     *
     * If the option is not stored on the db, we need to check if the current theme is a block one or not.
     *
     * @return boolean
     */
    public static function should_use_blockified_product_grid_templates()
    {
    }
}
/**
 * Utils for compatibility with WooCommerce Full Site Editor Blocks.
 *
 * @version 2.4.5
 */
class WC_Product_Vendor_Block_Templates
{
    /**
     * Constructor.
     *
     * @since 2.4.5
     */
    public function __construct()
    {
    }
    /**
     * Fixes a bug regarding taxonomies and FSE.
     * Without this, the system will always load archive-product.php version instead of taxonomy_wcpv_product_vendors.html
     * it will show a deprecation error if that happens.
     *
     * @since 2.4.5
     *
     * @param bool   $has_template  True if the template is available.
     * @param string $template_name The name of the template.
     * @return bool True if the system is checking archive-product
     */
    public function has_block_template($has_template, $template_name)
    {
    }
    /**
     * Get the block template for Taxonomy Product Vendors. First it attempts to load the last version from DB
     * Otherwise it loads the file based template.
     *
     * @since 2.4.5
     *
     * @param string $template_type The post_type for the template. Normally wp_template or wp_template_part.
     * @return WP_Block_Template The taxonomy-wcpv_product_vendors template.
     */
    private function get_product_vendors_template($template_type)
    {
    }
    /**
     * Function to check if a template name is woocommerce/taxonomy-wcpv_product_vendors.
     *
     * @since 2.4.5
     *
     * @param  String $id The string to check if contains the template name.
     * @return bool True if the template is woocommerce/taxonomy-wcpv_product_vendors
     */
    private function is_taxonomy_product_vendors_template($id)
    {
    }
    /**
     * Get the block template for Taxonomy Product Vendors if requested.
     * Triggered by get_block_file_template action
     *
     * @since 2.4.5
     *
     * @param WP_Block_Template|null $block_template The current Block Template loaded, if any.
     * @param string                 $id The template id normally in the format theme-slug//template-slug.
     * @param string                 $template_type The post_type for the template. Normally wp_template or wp_template_part.
     * @return WP_Block_Template|null The taxonomy-wcpv_product_vendors template.
     */
    public function get_block_file_template($block_template, $id, $template_type)
    {
    }
    /**
     * Add the Block template in the template query results needed by FSE
     * Triggered by get_block_templates action
     *
     * @since 2.4.5
     *
     * @param array  $query_result The list of templates to render in the query.
     * @param array  $query The current query parameters.
     * @param string $template_type The post_type for the template. Normally wp_template or wp_template_part.
     * @return WP_Block_Template[] Array of the matched Block Templates to render.
     */
    public function get_block_templates($query_result, $query, $template_type)
    {
    }
    /**
     * Displays a current vendors details based on the specified attributes.
     *
     * @since 2.4.5
     *
     * @param array $atts {
     *     Optional. An array of vendor-specific attributes to customize the output.
     *     Default empty array.
     *
     *     @type bool $show_logo    Whether to display the vendor's logo. Default true.
     *     @type bool $show_ratings Whether to display the vendor's ratings. Default true.
     *     @type bool $show_profile Whether to display the vendor's profile. Default true.
     * }
     * @return string The generated HTML for the vendor.
     */
    public function wcpv_vendor_details_shortcode($atts)
    {
    }
}
/**
 * Manage vendor related transient data
 *
 * @package WooCommerce Product Vendors/Cache
 * @since 2.2.0
 */
final class WC_Product_Vendor_Transient_Manager
{
    private $vendor_id;
    private $transient_key;
    private $expiration = \DAY_IN_SECONDS;
    private $transient_version;
    /**
     * @param int $vendor_id
     */
    public function __construct($vendor_id = \null)
    {
    }
    /**
     * Should return class object.
     *
     * @param int $vendor_id
     *
     * @return self
     */
    public static function make($vendor_id = \null)
    {
    }
    /**
     * Should return vendor report data version.
     *
     * @param bool $refresh
     *
     * @return string
     */
    public function get_transient_version($refresh = \false)
    {
    }
    /**
     * Should return specific vendor report data patrr.
     *
     * @param string $key
     *
     * @return mixed|null
     */
    public function get($key)
    {
    }
    /**
     * Save vendor report data.
     *
     * @param $key
     * @param $data
     *
     * @return bool
     */
    public function save($key, $data)
    {
    }
    /**
     * Delete vendor report data.
     *
     * This function reset transient version which invalidate existing transient report data.
     *
     * @return string
     */
    public function delete()
    {
    }
}
/**
 * Admin Notes data API.
 *
 * Stores and retrieves admin-only notes attached to a vendor (taxonomy term) or a
 * product (post). This is the single, stable entry point used by the admin UI, AJAX
 * handlers and any programmatic integration (e.g. automations logging a note).
 *
 * All public read/write methods are gated to store admins (users with the
 * `manage_vendors` capability who are not themselves vendors). Trusted server-side
 * callers that run outside of an admin request (cron, REST, status transitions) should
 * use {@see WC_Product_Vendors_Admin_Notes::add_system_note()} which is not gated.
 *
 * @package WooCommerce Product Vendors/Admin Notes
 * @version 2.6.0
 */
class WC_Product_Vendors_Admin_Notes
{
    /**
     * Object type: vendor (a `wcpv_product_vendors` taxonomy term).
     */
    const OBJECT_TYPE_VENDOR = 'vendor';
    /**
     * Object type: product (a `product` post).
     */
    const OBJECT_TYPE_PRODUCT = 'product';
    /**
     * Source: note added manually by an admin through the UI.
     */
    const SOURCE_MANUAL = 'manual';
    /**
     * Source: note added programmatically by trusted server-side code.
     */
    const SOURCE_SYSTEM = 'system';
    /**
     * Source: note created by migrating the legacy single vendor notes field.
     */
    const SOURCE_MIGRATED = 'migrated';
    /**
     * Type: a general admin note (the default).
     */
    const TYPE_NOTE = 'note';
    /**
     * Type: a vendor/product violation flagged for attention.
     */
    const TYPE_REDFLAG = 'redflag';
    /**
     * Returns the notes table name.
     *
     * @return string
     */
    private static function table()
    {
    }
    /**
     * Returns the supported object types.
     *
     * @return array
     */
    public static function get_object_types()
    {
    }
    /**
     * Whether the current user may manage admin notes.
     *
     * Store admins and shop managers have `manage_vendors`; vendor users never do.
     *
     * @return bool
     */
    public static function current_user_can_manage()
    {
    }
    /**
     * Returns the registered note sources mapped to human labels.
     *
     * Integrations may register their own sources via the filter so system notes can be
     * labelled/badged in the timeline.
     *
     * @return array
     */
    public static function get_registered_sources()
    {
    }
    /**
     * Returns the registered note types.
     *
     * Each type maps to metadata: `label` (display), `is_flag` (whether the type marks a
     * violation that should be highlighted), and `selectable` (whether admins can pick it
     * in the add-note form; system/event types are typically not selectable).
     *
     * Integrations register their own types (e.g. a workflow's "payout failed" event) via
     * the filter — see docs/admin-notes.md.
     *
     * @return array Map of type slug => metadata array.
     */
    public static function get_registered_note_types()
    {
    }
    /**
     * Returns whether a note type is a "flag" (a violation to highlight).
     *
     * @param string $type Type slug.
     * @return bool
     */
    public static function is_flag_type($type)
    {
    }
    /**
     * Returns whether a note type is registered and selectable in the add-note form.
     *
     * Used to validate the type an admin submits; non-selectable types (e.g. system/event
     * types) are added programmatically via add_system_note(), not through the UI.
     *
     * @since 2.6.0
     * @param string $type Type slug.
     * @return bool
     */
    public static function is_selectable_type($type)
    {
    }
    /**
     * Returns registered note type slugs that should count as flags.
     *
     * @since 2.6.0
     * @return array
     */
    private static function get_flag_types()
    {
    }
    /**
     * Validates an object type + id pair, ensuring the object exists.
     *
     * @param string $object_type One of the OBJECT_TYPE_* constants.
     * @param int    $object_id   Vendor term id or product post id.
     * @return int|WP_Error Sanitized object id, or WP_Error when invalid.
     */
    private static function validate_object($object_type, $object_id)
    {
    }
    /**
     * Adds a note as the current user.
     *
     * Gated to store admins. For programmatic/server-side use see add_system_note().
     *
     * @param string $object_type One of the OBJECT_TYPE_* constants.
     * @param int    $object_id   Vendor term id or product post id.
     * @param string $content     Note content.
     * @param array  $args        Optional. { source, type, author_id, meta }.
     * @return int|WP_Error Inserted note id, or WP_Error on failure.
     */
    public static function add_note($object_type, $object_id, $content, $args = array())
    {
    }
    /**
     * Adds a red-flag note (a flagged violation) as the current user.
     *
     * Convenience wrapper around add_note() for the common case. For a programmatic
     * red flag, call add_system_note() with `[ 'type' => self::TYPE_REDFLAG ]`.
     *
     * @param string $object_type One of the OBJECT_TYPE_* constants.
     * @param int    $object_id   Vendor term id or product post id.
     * @param string $content     Note content.
     * @param array  $args        Optional. { source, type, author_id, meta }.
     * @return int|WP_Error Inserted note id, or WP_Error on failure.
     */
    public static function add_redflag($object_type, $object_id, $content, $args = array())
    {
    }
    /**
     * Adds a note from trusted server-side code (not capability gated).
     *
     * Intended for automations, cron, REST or status transitions where there may be no
     * current user. Defaults the source to `system` and the author to 0.
     *
     * @param string $object_type One of the OBJECT_TYPE_* constants.
     * @param int    $object_id   Vendor term id or product post id.
     * @param string $content     Note content.
     * @param array  $args        Optional. { source, type, author_id, meta }.
     * @return int|WP_Error Inserted note id, or WP_Error on failure.
     */
    public static function add_system_note($object_type, $object_id, $content, $args = array())
    {
    }
    /**
     * Sanitizes note content and rejects empty values.
     *
     * @param string $content Raw note content.
     * @return string|WP_Error Sanitized content, or WP_Error when empty.
     */
    private static function validate_content($content)
    {
    }
    /**
     * Runs a notes query for a prepared WHERE clause and returns formatted rows.
     *
     * @param string $where Prepared WHERE clause.
     * @param string $order 'ASC' or 'DESC' (default DESC).
     * @param string $limit Optional prepared LIMIT/OFFSET clause.
     * @return array Array of formatted note objects.
     */
    private static function query_notes($where, $order = 'DESC', $limit = '')
    {
    }
    /**
     * Inserts a note row. Internal; callers enforce their own capability policy.
     *
     * @param string $object_type One of the OBJECT_TYPE_* constants.
     * @param int    $object_id   Vendor term id or product post id.
     * @param string $content     Note content.
     * @param array  $args        Optional. { source, type, author_id, meta }.
     * @return int|WP_Error Inserted note id, or WP_Error on failure.
     */
    private static function insert_note($object_type, $object_id, $content, $args = array())
    {
    }
    /**
     * Retrieves a single note (gated).
     *
     * @param int $note_id Note id.
     * @return object|null Formatted note, or null.
     */
    public static function get_note($note_id)
    {
    }
    /**
     * Retrieves the notes for an object, newest first by default (gated).
     *
     * @param string $object_type One of the OBJECT_TYPE_* constants.
     * @param int    $object_id   Vendor term id or product post id.
     * @param array  $args        Optional. { order, number, offset, source }.
     * @return array Array of formatted note objects.
     */
    public static function get_notes($object_type, $object_id, $args = array())
    {
    }
    /**
     * Summarizes the notes on a vendor's products, grouped by product (gated).
     *
     * Callers that render a list should pass a $limit; callers that aggregate across every
     * product (e.g. the product screen's "notes elsewhere" totals) must not, or the sum would
     * silently undercount.
     *
     * @param int $vendor_id Vendor term id.
     * @param int $limit     Optional. Max products returned, newest activity first. 0 for all.
     * @return array Row objects { object_id, note_count, redflag_open, redflag_solved, last_created_at }, newest activity first.
     */
    public static function get_vendor_product_note_summary($vendor_id, $limit = 0)
    {
    }
    /**
     * Returns the note / red-flag counts for a single object in one query (gated).
     *
     * @param string $object_type One of the OBJECT_TYPE_* constants.
     * @param int    $object_id   Vendor term id or product post id.
     * @return array { note_count, redflag_open, redflag_solved } as ints.
     */
    public static function get_object_note_counts($object_type, $object_id)
    {
    }
    /**
     * Returns per-vendor note totals in two grouped queries (gated).
     *
     * Each total combines the vendor's own notes with those on its products. Intended for
     * the Vendors list table, which would otherwise run per-row counts (an N+1 pattern);
     * callers should compute this once per request and look up by vendor id.
     *
     * @since 2.6.0
     * @param array $vendor_ids Optional. Restrict to these vendor term ids (e.g. the ones on
     *                          the current list-table page). Empty for every vendor.
     * @return array Map of vendor term id => { note_count, redflag_open, redflag_solved } (ints).
     */
    public static function get_all_vendor_note_totals($vendor_ids = array())
    {
    }
    /**
     * Returns the number of notes for an object (gated).
     *
     * @param string $object_type One of the OBJECT_TYPE_* constants.
     * @param int    $object_id   Vendor term id or product post id.
     * @param string $type        Optional. Restrict to a single note type (e.g. redflag).
     * @param bool   $open_only   Optional. Only count unresolved notes.
     * @return int
     */
    public static function get_notes_count($object_type, $object_id, $type = '', $open_only = \false)
    {
    }
    /**
     * Whether a note may be edited by an admin.
     *
     * Solved red flags are locked as an audit record.
     *
     * @param object $note Formatted note object.
     * @return bool
     */
    public static function can_edit($note)
    {
    }
    /**
     * Whether a note may be deleted by an admin.
     *
     * Red flags are an audit record and cannot be deleted.
     *
     * @param object $note Formatted note object.
     * @return bool
     */
    public static function can_delete($note)
    {
    }
    /**
     * Updates a note's content (gated).
     *
     * @param int    $note_id Note id.
     * @param string $content New content.
     * @return true|WP_Error
     */
    public static function update_note($note_id, $content)
    {
    }
    /**
     * Marks a note resolved (gated), recording who/when and an optional resolution reason.
     *
     * Used to close a flag (e.g. a red flag) once the admin has acted on it. Resolution is
     * one-way; record a new note if the issue recurs.
     *
     * @param int   $note_id Note id.
     * @param array $args    Optional. { reason }.
     * @return true|WP_Error
     */
    public static function resolve_note($note_id, $args = array())
    {
    }
    /**
     * Deletes a note (gated).
     *
     * @param int $note_id Note id.
     * @return true|WP_Error
     */
    public static function delete_note($note_id)
    {
    }
    /**
     * Fetches and formats a single note row. Internal; not capability gated.
     *
     * @param int $note_id Note id.
     * @return object|null
     */
    private static function fetch_note($note_id)
    {
    }
    /**
     * Formats a raw DB row into a note object with author name and decoded meta.
     *
     * @param object|null $row Raw DB row.
     * @return object|null
     */
    private static function format_row($row)
    {
    }
}
/**
 * Authentication Class.
 *
 * Handles the user/vendor authentication.
 *
 * @category Authentication
 * @package  WooCommerce Product Vendors/Authentication
 * @version  2.0.0
 */
class WC_Product_Vendors_Authentication
{
    public $logged_in_vendor;
    /**
     * Constructor
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function __construct()
    {
    }
    /**
     * Allow vendors to access backend URL
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function allow_admin_access($return)
    {
    }
    /**
     * Redirect vendors on login
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param string $redirect_to the URL to redirect to
     * @param string $request the URL the request was from
     * @param object $user the user object passed
     * @return bool
     */
    public function login_redirect($redirect_to, $request, $user)
    {
    }
    /**
     * Login Authentication
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param object $user
     * @param string $username
     * @param string $password
     * @return bool
     */
    public function login_authentication($user, $username, $password)
    {
    }
}
/**
 * CLI Class.
 *
 * Register CLI commands.
 *
 * @category CLI
 * @package  WooCommerce Product Vendors/CLI
 * @version  future
 * @since future
 */
class WC_Product_Vendors_Cli
{
    /**
     * Constructor
     *
     * @access public
     * @since future
     * @version future
     * @return void
     */
    public function __construct()
    {
    }
}
/**
 * Commission Class.
 *
 * Model for commissions to handle CRUD process.
 *
 * @category Commission
 * @package  WooCommerce Product Vendors/Commission
 * @version  2.0.0
 * @since 2.0.0
 */
class WC_Product_Vendors_Commission
{
    public $table_name;
    protected $masspay;
    private $table_columns = array('id' => '%d', 'order_id' => '%d', 'order_item_id' => '%d', 'order_date' => '%s', 'vendor_id' => '%d', 'vendor_name' => '%s', 'product_id' => '%d', 'variation_id' => '%d', 'product_name' => '%s', 'variation_attributes' => '%s', 'product_amount' => '%s', 'product_quantity' => '%s', 'product_shipping_amount' => '%s', 'product_shipping_tax_amount' => '%s', 'product_tax_amount' => '%s', 'product_commission_amount' => '%s', 'total_commission_amount' => '%s', 'commission_status' => '%s', 'paid_date' => '%s');
    /**
     * Constructor
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function __construct(\WC_Product_Vendors_Vendor_Payout_Interface $masspay)
    {
    }
    /**
     * Get the vendor total earned commission on a specified order.
     *
     * @since 2.1.0
     * @version 2.4.0
     * @param string $vendor_id
     * @param string $order_id
     *
     * @return array|bool Array values or false if none found.
     */
    public function get_vendor_earned_commission_by_order_id($vendor_id, $order_id)
    {
    }
    /**
     * Gets all commission that is tied to a specific order id.
     *
     * @since 2.0.35
     * @version 2.4.0
     * @param int    $order_id          Order ID.
     * @param string $commission_status Commission status.
     * @return array|bool Array of commissions or false if none found.
     */
    public function get_commission_by_order_id($order_id = \null, $commission_status = 'all')
    {
    }
    /**
     * Inserts a new commission record
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function insert($order_id = '', $order_item_id = '', $order_date = \NULL, $vendor_id = '', $vendor_name = '', $product_id = '', $variation_id = '', $product_name = '', $variation_attributes = '', $product_amount = '', $product_qty = '1', $product_shipping_amount = \NULL, $product_shipping_tax_amount = \NULL, $product_tax_amount = \NULL, $product_commission_amount = '0', $total_commission_amount = '0', $commission_status = 'unpaid', $paid_date = \NULL)
    {
    }
    /**
     * Should update commission data.
     *
     * @since 2.1.72
     * @global WPDB $wpdb
     */
    public function update(array $data, int $commission_id): bool
    {
    }
    /**
     * Pays the vendor their commission using passed in mass payments
     *
     * @since 2.0.0
     * @version 2.0.0
     * @param int $commission_ids list of commission ids
     * @return bool
     */
    public function pay($commission_ids = array())
    {
    }
    /**
     * Gets commission data with caching
     *
     * @since 2.0.0
     * @version 2.4.0
     * @param array $commission_ids List of commission IDs.
     * @return array|null Commission data or null if empty.
     */
    public function get_commission_data($commission_ids = array())
    {
    }
    /**
     * Combines the total commission per vendor and order id.
     *
     * @access public
     * @since 2.0.6
     * @since 2.1.8
     * @param array $commission_data
     * @return array $combined_commission
     */
    public function combine_total_commission_per_vendor_and_order($commission_data = array())
    {
    }
    /**
     * Gets the list of unpaid commission ids
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return array $filtered_commission_ids
     */
    public function get_unpaid_commission_ids()
    {
    }
    /**
     * Gets the list of unpaid commissions with caching
     *
     * @since 2.0.0
     * @version 2.4.0
     * @return array|false Array of unpaid commissions or false if none found.
     */
    public function get_unpaid_commission_data()
    {
    }
    /**
     * Deletes a commission record
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param int $commission_id
     * @return bool
     */
    public function delete($commission_id = 0)
    {
    }
    /**
     * Deletes a commission record by order id.
     *
     * @access public
     * @since 2.1.27
     * @version 2.1.27
     * @param int $order_id
     * @return bool
     */
    public function delete_by_order_id($order_id = 0)
    {
    }
    /**
     * Update commission status with cache invalidation
     *
     * @since 2.0.0
     * @version 2.4.0
     * @param int    $commission_id Commission ID.
     * @param int    $order_item_id Order item ID.
     * @param string $commission_status New commission status.
     * @return bool Success.
     */
    public function update_status($commission_id, $order_item_id, $commission_status)
    {
    }
    /**
     * Clear commission related caches
     *
     * @since 2.4.0
     */
    private function clear_commission_caches()
    {
    }
    /**
     * Calculates the commission for a product based on an order
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param int   $product_id Product or variation ID.
     * @param int   $vendor_id Vendor term ID.
     * @param float $product_amount Discounted line total for the item.
     * @param int   $quantity Item quantity.
     * @param float $discount_ratio Discounted line total divided by the undiscounted subtotal; 1 when no discount applies.
     * @return float $commission
     */
    public function calc_order_product_commission($product_id, $vendor_id, $product_amount, $quantity = 1, $discount_ratio = 1)
    {
    }
    /**
     * Queries the commission table based on filters
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param int    $order_id
     * @param string $year
     * @param string $month
     * @param string $commission_status
     * @param int    $vendor_id
     * @return array $query
     */
    public function csv_filtered_query($order_id = '', $year = '', $month = '', $commission_status = '', $vendor_id = '')
    {
    }
    /**
     * Should return commission id for order item.
     *
     * @since 2.1.74
     *
     * @param int $order_item_id Order item ID.
     * @param int $order_id Order ID.
     *
     * @return int
     */
    public function get_commission_id_by_order_item_id($order_item_id, $order_id)
    {
    }
    /**
     * Should return commission by order item id and order id if exists, null otherwise.
     *
     * @since 2.1.72
     *
     * @param int $order_item_id Order item id.
     * @param int $order_id Order id.
     *
     * @return array|null
     */
    public function get_commission_by_order_item_id($order_item_id, $order_id)
    {
    }
}
/**
 * Deactivation Class.
 *
 * Handles the clean up upon deactivation.
 *
 * @category Deactivation
 * @package  WooCommerce Product Vendors/Deactivation
 * @version  2.0.0
 */
class WC_Product_Vendors_Deactivation
{
    /**
     * Constructor not to be instantiated
     *
     * @access private
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    private function __construct()
    {
    }
    /**
     * Perform deactivation tasks
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public static function deactivate()
    {
    }
}
/**
 * Emails Class.
 *
 * Initializes all custom emails.
 *
 * @category Emails
 * @package  WooCommerce Product Vendors/Emails
 * @version  2.0.0
 */
class WC_Product_Vendors_Emails
{
    /**
     * Init
     *
     * @access public
     * @since 2.0.0
     * @since 2.1.70 Add resend renewal email order action handler.
     * @version 2.0.0
     * @return bool
     */
    public static function init()
    {
    }
    /**
     * Adds additional email classes to WC
     *
     * @since 2.0.0
     * @since 2.1.70 Register "New Renewal Email (Vendor)".
     * @version 2.0.16
     *
     * @param array $classes Email classes.
     * @return array $classes Email classes array.
     */
    public function add_email_classes($classes)
    {
    }
    /**
     * Adds additional email notification actions to WC
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param array $actions
     * @return array $actions
     */
    public function add_email_notification_actions($actions)
    {
    }
    /**
     * Sends email
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param string $to the email to send to
     * @param string $subject the subject of the email
     * @param string $message the message of the email
     * @param string $headers the headers of the email
     * @return bool
     */
    public function send_email($to = '', $subject = '', $message = '', $headers = '')
    {
    }
    /**
     * Add resend order email to vendor item
     *
     * @access public
     * @since 2.0.0
     * @since 2.1.70 Add "Resend Renewal Email (Vendor)" order action.
     *              Remove WC < 3.2 support
     *
     * @param array $emails
     *
     * @return array $emails
     * @version 2.0.0
     */
    public function add_resend_order_email_action($emails)
    {
    }
    /**
     * Triggers the resend of order email to vendor
     *
     * @since 2.0.0
     * @version 2.1.3
     * @param object $order
     * @return void | boolean true.
     */
    public function trigger_resend_order_email_to_vendor($order)
    {
    }
    /**
     * Triggers the resend of subscription renewal order email to vendor
     *
     * @since 2.1.70
     * @param WC_Order $order
     * @return void | boolean true.
     */
    public function trigger_resend_new_renewal_email_to_vendor($order)
    {
    }
    /**
     * Trigger new product email to admin
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param string $old_status
     * @param string $new_status
     * @param object $post
     * @return bool
     */
    public function trigger_new_product_email($new_status, $old_status, $post)
    {
    }
    /**
     * Trigger registration emails
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param array $args
     * @return bool
     */
    public function send_registration_emails($args)
    {
    }
    /**
     * Sends a no stock email to vendor
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function send_no_stock_email($product)
    {
    }
    /**
     * Sends a low stock email to vendor
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function send_low_stock_email($product)
    {
    }
    /**
     * Custom template directory.
     *
     * @access public
     * @since 2.0.14
     * @version 2.0.14
     * @param  string $directory
     * @param  string $template
     */
    public function template_directory($directory, $template)
    {
    }
    /**
     * Should we show "Resend Renewal Email (Vendor)" in order actions.
     *
     * @since 2.1.70
     * @return bool
     */
    private function can_show_resend_renewal_vendor_email_order_action()
    {
    }
    /**
     * Add vendor support recipient email field
     * @param array $settings Email settings fields.
     *
     * @return array $settings
     */
    public function add_vendor_support_recipient_email_field(array $settings)
    {
    }
}
/**
 * Installation/Activation Class.
 *
 * Handles the activation/installation of the plugin.
 *
 * @category Installation
 * @package  WooCommerce Product Vendors/Install
 * @version  2.0.0
 */
class WC_Product_Vendors_Install
{
    /**
     * Object to manage caps.
     *
     * @var WC_Product_Vendors_Roles_Caps
     */
    private static $roles;
    /** @var array DB updates that need to be run */
    private static $db_updates = array('2.0.0' => 'admin/updates/wc-product-vendors-update-2.0.0.php');
    /**
     * Number of vendors migrated per legacy-notes batch.
     *
     * @var int
     */
    const NOTES_MIGRATION_BATCH_SIZE = 100;
    /**
     * Times the legacy-notes migration is rescheduled before giving up.
     *
     * @var int
     */
    const NOTES_MIGRATION_MAX_ATTEMPTS = 3;
    /**
     * Action Scheduler hook running a legacy-notes migration batch.
     *
     * @var string
     */
    const NOTES_MIGRATION_HOOK = 'wcpv_migrate_admin_notes_batch';
    /**
     * Action Scheduler group for the legacy-notes migration.
     *
     * @var string
     */
    const NOTES_MIGRATION_GROUP = 'woocommerce-product-vendors';
    /**
     * Initialize hooks
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public static function init(\WC_Product_Vendors_Roles_Caps $roles)
    {
    }
    /**
     * Checks the plugin version
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public static function check_version()
    {
    }
    /**
     * Perform actions
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public static function install_actions()
    {
    }
    /**
     * Updates the plugin version in db
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    private static function update_plugin_version()
    {
    }
    /**
     * Updates the plugin version
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    private static function update_wcpv_version()
    {
    }
    /**
     * Updates the commission table db version
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    private static function update_commission_db_version($version = \null)
    {
    }
    /**
     * Updates the per product shipping table db version
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    private static function update_per_product_shipping_db_version($version = \null)
    {
    }
    /**
     * Updates the admin notes table db version
     *
     * @since 2.6.0
     * @param string $version Optional version to set.
     * @return bool
     */
    private static function update_admin_notes_db_version($version = \null)
    {
    }
    /**
     * Schedules the legacy vendor-notes migration when it still has work to do.
     *
     * Runs in Action Scheduler batches so it scales to large marketplaces without hitting
     * max_execution_time. Hooked on `admin_init` (and called from install()) so an interrupted
     * or failed run resumes on a later request — the version bump in install() must not be the
     * only trigger. Falls back to a synchronous run when Action Scheduler is absent.
     *
     * @since 2.6.0
     * @return void
     */
    public static function maybe_schedule_legacy_notes_migration()
    {
    }
    /**
     * Processes one batch of the legacy vendor-notes migration, then schedules the next.
     *
     * Action Scheduler callback. A transient failure leaves the migration unfinalised with
     * nothing pending, so maybe_schedule_legacy_notes_migration() restarts it on a later load.
     *
     * @since 2.6.0
     * @param int $offset Vendor-term offset for this batch.
     * @return void
     */
    public static function migrate_legacy_notes_batch($offset = 0)
    {
    }
    /**
     * Migrates one slice of vendors (their legacy notes field) into the timeline.
     *
     * Each vendor's `vendor_data['notes']` is stored as a migrated timeline note, then removed
     * from the vendor data. The legacy field is only cleared after a successful insert; a
     * per-vendor failure is recorded so the run is not marked complete.
     *
     * @since 2.6.0
     * @param int $offset Vendor-term offset.
     * @return int|false Vendor terms fetched (a full batch means more remain), or false on a
     *                   transient failure that should abort this run without finalising it.
     */
    private static function process_legacy_notes_slice($offset)
    {
    }
    /**
     * Finalises the legacy notes migration once every batch has run.
     *
     * Marks it complete only when nothing failed. Otherwise the flag is cleared without setting
     * `wcpv_admin_notes_migrated`, so the next admin_init reschedules the run — already-migrated
     * vendors have their legacy field cleared, making a re-run idempotent.
     *
     * @since 2.6.0
     * @return void
     */
    private static function finalize_legacy_notes_migration()
    {
    }
    /**
     * Perform update action
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    private static function update()
    {
    }
    /**
     * Checks to see if we need update for 2.0.0
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public static function needs_update()
    {
    }
    /**
     * Show update notice
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public static function update_notice()
    {
    }
    /**
     * Show updated notice
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public static function updated_notice()
    {
    }
    /**
     * Do installs
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public static function install()
    {
    }
    /**
     * Prepare tables for modification/add
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public static function create_tables()
    {
    }
    /**
     * Shows activation notice for next steps
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public static function activate_notice()
    {
    }
    /**
     * Clears all reports transients
     *
     * @access public
     * @since 2.0.0
     * @since 2.2.0 Replace DELETE SQL query with utility class function
     * @version 2.0.0
     * @return bool
     */
    public static function clear_reports_transients()
    {
    }
    /**
     * Add tables
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    private static function get_schema()
    {
    }
}
/**
 * Log all things!
 *
 * @since 2.0.35
 * @version 2.0.35
 */
class WC_Product_Vendors_Logger
{
    public static $logger;
    const WC_LOG_FILENAME = 'woocommerce-product-vendors';
    /**
     * Utilize WC logger class
     *
     * @since 2.0.35
     * @version 2.0.35
     */
    public static function log($message, $start_time = \null, $end_time = \null)
    {
    }
}
/**
 * Order Class.
 *
 * Process the orders from WooCommerce.
 *
 * @category Order
 * @package  WooCommerce Product Vendors/Order
 * @version  2.0.35
 * @since 2.0.0
 */
class WC_Product_Vendors_Order
{
    protected $commission;
    public $order;
    protected $log;
    /**
     * Constructor
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.35
     * @return bool
     */
    public function __construct(\WC_Product_Vendors_Commission $commission)
    {
    }
    /**
     * Process the webhook trigger from PayPal to mark payout "paid". This fires only
     * if the payout was successful. Note that each notification will
     * be for one single vendor that may contain the sum of commission
     * payout for one entire order.
     *
     * @since 2.0.35
     * @version 2.0.35
     * @param object $notification
     */
    public function process_paypal_webhook($notification)
    {
    }
    /**
     * Process the manual create commission action
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param WC_Order $order
     * @return bool
     */
    public function process_manual_create_commission_action($order)
    {
    }
    /**
     * Process order
     *
     * @access  public
     * @since   2.1.72 Implement logic to regenerate vendor commission for given order id and order item id.
     *              Process payout only for unpaid commissions.
     * @since   2.0.0
     *
     * @param int $order_id
     *
     * @return bool
     * @version 2.0.0
     */
    public function process($order_id)
    {
    }
    /**
     * Delete the site transients for the reports.
     *
     * The site transients need to be flushed when a commission is added
     * to an order (indicating a vendor product was sold) to ensure that the
     * vendor reports are regenerated when the vendor next views their reports.
     *
     * This also flushes the sales by product report transient to ensure that
     * the product sale data is up to date.
     *
     * @since 2.3.1
     *
     * @param int $vendor_id The vendor ID.
     * @return void
     */
    public function delete_report_transients($vendor_id)
    {
    }
    /**
     * Maybe change order status to completed if all products are fulfilled.
     *
     * @since 2.1.30
     * @param int $order_id The Id of the order.
     * @return void.
     */
    public function maybe_complete_order($order_id)
    {
    }
    /**
     * Add order note to state commission added for order
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param object $order
     * @return bool
     */
    public function add_commission_order_note($order)
    {
    }
    /**
     * Adds an action to manually create commission based on order
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param array $actions
     * @return array $actions
     */
    public function add_commission_order_action($actions)
    {
    }
    /**
     * Calculate per product shipping and tax
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param object $item
     * @return array
     */
    public function calc_per_product_shipping($item)
    {
    }
    /**
     * get_fee function.
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param mixed $fee
     * @param mixed $total
     * @return float
     */
    public function get_fee($fee, $total)
    {
    }
    /**
     * Maybe remove affected commission when an order item is removed.
     *
     * @since 2.2.5
     * @param int $order_item_id Order item ID.
     * @return void
     */
    public function maybe_remove_affected_commission($order_item_id)
    {
    }
    /**
     * Remove affected commissions when an order gets deleted.
     *
     * @param int $order_id Order ID.
     *
     * @access public
     * @since 2.1.27
     * @version 2.1.27
     */
    public function remove_affected_commissions($order_id)
    {
    }
    /**
     * On payment complete do additional processes.
     *
     * @since 2.1.35
     * @param int $order_id ID of the order.
     * @return void
     */
    public function payment_complete($order_id)
    {
    }
    /**
     * Update commission data when refunds performed.
     *
     * @since 2.1.74
     *
     * @param int $order_id Order ID.
     * @param int $refund_id Refund ID.
     *
     * @return void
     */
    public function process_order_refund($order_id, $refund_id)
    {
    }
    /**
     * Should return serialize value of product variation.
     *
     * @since 2.1.74
     *
     * @param WC_Product $product Product object.
     *
     * @return string
     */
    private function get_serialize_product_variation_value(\WC_Product $product)
    {
    }
    /**
     * Should fully refund vendor commission.
     *
     * @since 2.1.74
     *
     * @return void
     */
    private function commission_fully_refunded(\WC_Order $order, \WC_Order_Item $item, \WC_Order_Refund $refund, int $commission_id)
    {
    }
}
/**
 * Payout Scheduler Class.
 *
 * Processes the cron schedule for commission payouts.
 *
 * @category Payout
 * @package  WooCommerce Product Vendors/Payout Scheduler
 * @version  2.0.0
 */
class WC_Product_Vendors_Payout_Scheduler
{
    protected $commission;
    protected $frequency;
    protected $log;
    /**
     * Constructor
     *
     * @access private
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function __construct(\WC_Product_Vendors_Commission $commission)
    {
    }
    /**
     * Adds new intervals for cron
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param array $intervals
     * @return array $intervals
     */
    public function add_new_intervals($intervals)
    {
    }
    /**
     * Update the cron schedule if settings changed
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param string $old_value Old value of the setting.
     * @param string $new_value New value of the setting.
     * @return bool|void
     */
    public function update_schedule($old_value, $new_value)
    {
    }
    /**
     * Runs the schedule after vendor settings are saved
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool|void
     */
    public function run_schedule()
    {
    }
    /**
     * Process commission payments
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool|void
     */
    public function do_payment()
    {
    }
}
/**
 * Vendor Registration.
 *
 * Handles the vendor form registration process .
 *
 * @category Registration
 * @package  WooCommerce Product Vendors/Registration
 * @version  2.0.0
 */
class WC_Product_Vendors_Registration
{
    /**
     * Stores registration form errors
     *
     * @var array
     */
    private $form_errors = array();
    /**
     * Init
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     */
    public function __construct()
    {
    }
    /**
     * Add scripts
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function add_scripts()
    {
    }
    /**
     * Handles the registration via AJAX
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function registration_ajax()
    {
    }
    /**
     * Enqueue assets to register Vendor Registration Block.
     */
    public function register_vendor_registration_block()
    {
    }
    /**
     * Loads the vendor registration styles inside the editor.
     */
    public function enqueue_block_style()
    {
    }
    /**
     * Includes the registration form
     *
     * Also allows for the form template to be overwritten.
     *
     * @access public
     * @since 2.0.0
     * @version 2.1.5
     */
    public function include_form()
    {
    }
    /**
     * Validates the registration form
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param array $form_items forms items to validate
     * @return bool
     */
    public function registration_form_validation($form_items = array())
    {
    }
    /**
     * Process the registration for a vendor.
     *
     * @since 2.0.41
     * @version 2.0.41
     * @param array   $form_items Sanitized form items
     * @param WP_User $user       WP User
     * @param array   $args
     * @return bool
     */
    protected function register_vendor($form_items, $user, $args = array())
    {
    }
    /**
     * Process the registration form for just vendor.
     * As in they already have a user account on the site.
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.41
     * @param array $form_items sanitized form items
     * @return bool
     */
    public function vendor_registration_form_process($form_items)
    {
    }
    /**
     * Process the registration form for vendor and user
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.41
     * @param array $form_items sanitized form items
     * @return bool
     */
    public function vendor_user_registration_form_process($form_items)
    {
    }
    /**
     * Create user on vendor creation through admin dashboard
     *
     * @access public
     * @param int $term_id newly created term id
     * @return void
     */
    public function create_user_on_vendor_term_creation($term_id)
    {
    }
}
/**
 * Roles and Capability Class.
 *
 * Adds all the default roles and capabilities for store and vendor admins.
 *
 * @category Roles and Capability
 * @package  WooCommerce Product Vendors/Roles and Capability
 * @version  2.0.0
 */
class WC_Product_Vendors_Roles_Caps
{
    /**
     * Init
     */
    public function __construct()
    {
    }
    /**
     * Force the classic product editor for vendor admins.
     *
     * Guards against accidentally exposing the block product editor on the vendor
     * dashboard on stores where it is still enabled. Kept until the block product
     * editor is removed from the minimum supported WooCommerce version.
     *
     * @since 2.6.0
     * @param bool $is_block_editor_enabled Whether the block editor is enabled.
     * @return bool
     */
    public function enable_classic_editor_for_vendor_roles($is_block_editor_enabled)
    {
    }
    /**
     * Allow shop manager to manage vendor profiles.
     *
     * @since 2.1.10
     * @param array $roles Roles that a shop manager can manage.
     * @return array
     */
    public function shop_manager_vendor_management($roles = array())
    {
    }
    /**
     * Declares the default admin vendor capabilities
     *
     * @access protected
     * @since 2.0.0
     * @version 2.0.19
     * @return array
     */
    protected function default_admin_vendor_caps()
    {
    }
    /**
     * Declares the default manager vendor capabilities
     *
     * @access protected
     * @since 2.0.0
     * @version 2.0.19
     * @return array
     */
    protected function default_manager_vendor_caps()
    {
    }
    /**
     * Declares the default pending vendor capabilities
     *
     * @access protected
     * @since 2.0.0
     * @version 2.0.0
     * @return array
     */
    protected function default_pending_vendor_caps()
    {
    }
    /**
     * Adds the default roles
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function add_default_roles()
    {
    }
    /**
     * Adds the necessary caps to shop manager and administrator.
     *
     * @since 2.1.15
     */
    public function add_manager_caps()
    {
    }
    /**
     * Removes the manage_bookings cap since it's deprecated in bookings 1.14.2
     */
    public function remove_deprecated_caps()
    {
    }
    /**
     * Adds publish products capability to a user
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function add_publish_products($user_id = \null)
    {
    }
    /**
     * Remove publish products capability from a user
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function remove_publish_products($user_id = \null)
    {
    }
    /**
     * Adds manage users capabilities to a user
     *
     * @access public
     * @since 2.1.0
     * @version 2.1.0
     * @return bool
     */
    public function add_manage_users($user_id = \null)
    {
    }
    /**
     * Remove manage users capabilities from a user
     *
     * @access public
     * @since 2.1.0
     * @version 2.1.0
     * @return bool
     */
    public function remove_manage_users($user_id = \null)
    {
    }
    /**
     * Add vendor actions.
     *
     * @param string[] $actions     An array of action links to be displayed.
     *                              Default 'Edit', 'Delete' for single site, and
     *                              'Edit', 'Remove' for Multisite.
     * @param WP_User  $user_object WP_User object for the currently listed user.
     */
    public function user_row_actions($actions, $user_object)
    {
    }
    /**
     * Handle vendor actions.
     */
    public function approve_vendor_handler()
    {
    }
    /**
     * Vendor approved notice.
     */
    public function vendor_approved_notice()
    {
    }
    /**
     * Allow Vendors to edit attachment details.
     *
     * @param array   $allcaps All capabilities.
     * @param array   $caps    Capabilities.
     * @param array   $args    Arguments.
     * @param WP_User $user    The user object.
     *
     * @return array The filtered array of all capabilities.
     */
    public function vendor_allow_edit_attachment($allcaps, $caps, $args, $user)
    {
    }
    /**
     * Checks if we need to require additional capabilities for editing other vendor's stuff.
     *
     * Also scopes the edit_shop_orders capability held by vendor roles. See
     * map_vendor_order_capabilities().
     *
     * @param array  $caps Currently required capabilities.
     * @param string $cap Original requested capability.
     * @param int    $user_id Current User id.
     * @param array  $args object id in use.
     *
     * @return array
     */
    public function map_vendor_capabilities($caps, $cap, $user_id, $args)
    {
    }
    /**
     * Decides whether taxonomy ownership locks a vendor out of a product.
     *
     * A product with no wcpv_product_vendors term belongs to no vendor, so there is no
     * ownership to protect - fall back to authorship, which is the only signal this check
     * had before it moved out of the admin-only class. Products created outside wp-admin
     * before 2.6.2 never got a term (REST, XML-RPC, importers, or an admin leaving the
     * vendor field blank), and blocking their author outright would lock vendors out of
     * their own catalogue the moment the store updates. A product that has been reassigned
     * still carries the new vendor's term, so this never weakens that check.
     *
     * @since 2.6.2
     * @param int     $user_id User ID being checked.
     * @param WP_Post $product Product post the capability is being mapped for.
     * @return bool
     */
    private function is_vendor_locked_out_of_product($user_id, \WP_Post $product)
    {
    }
    /**
     * Assigns the creating vendor's term to a product created over the REST API.
     *
     * Mirrors WC_Product_Vendors_Vendor_Admin::save_post(), which only ever runs in wp-admin.
     * Without this a REST-created product carries no vendor term, so it is attributed to no
     * vendor for commission purposes, never appears in the vendor's product list, and fails
     * the ownership check in map_vendor_capabilities() for its own creator.
     *
     * @since 2.6.2
     * @param WC_Product      $product  Product that was just saved.
     * @param WP_REST_Request $request  Request object.
     * @param bool            $creating True when the product was created, false on update.
     * @return void
     */
    public function assign_vendor_to_rest_created_product($product, $request, $creating)
    {
    }
    /**
     * Prevent commission/tax/shipping override meta from being set on a product
     * or variation via the REST API by anyone other than a vendor admin/manager.
     *
     * @param WC_Product|WP_Error $product Product or variation object about to be saved, or
     *                                     a WP_Error an earlier callback used to reject the write.
     * @return WC_Product|WP_Error
     */
    public function strip_privileged_product_meta_from_rest_request($product)
    {
    }
    /**
     * Scopes the edit_shop_orders capability held by vendor roles.
     *
     * Vendor roles are granted edit_shop_orders so they can use WooCommerce's customer
     * search. Without scoping, that capability applies to every order in the store.
     *
     * - Checks against a specific order (current_user_can( 'edit_shop_orders', $order_id ))
     *   only pass for orders containing the vendor's products, limiting vendors to their
     *   own orders.
     * - WooCommerce core order AJAX handlers (add order note, refund, save order items,
     *   get customer details, etc.) check edit_shop_orders with no order ID and then act
     *   on any order ID in the request, so there is no order to test against. During
     *   admin AJAX, woocommerce_* actions are denied unless allowlisted via the
     *   wcpv_vendor_allowed_wc_ajax_actions filter. Vendors manage orders through their
     *   own screens, and this also stops them changing other vendors' items on a shared
     *   order.
     * - edit_others_shop_orders is not handled here, since vendor roles are not granted it.
     *
     * @since 2.6.2
     *
     * @param array $caps    Currently required capabilities.
     * @param int   $user_id User ID being checked.
     * @param array $args    Additional arguments, the first being an optional order ID.
     *
     * @return array
     */
    protected function map_vendor_order_capabilities(array $caps, $user_id, array $args)
    {
    }
}
/**
 * Shortcodes Class.
 *
 * Registers all shortcodes.
 *
 * @category Shortcodes
 * @package  WooCommerce Product Vendors/Shortcodes
 * @version  2.0.0
 */
class WC_Product_Vendors_Shortcodes
{
    public $registration;
    /**
     * Constructor
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     */
    public function __construct()
    {
    }
    /**
     * Registers actions.
     *
     * @since 2.5.0
     */
    public function init()
    {
    }
    /**
     * Enqueue scripts and styles
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function enqueue_scripts()
    {
    }
    /**
     * Renders the registration form for new vendors
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     *
     * @return html $form
     */
    public function render_registration_shortcode()
    {
    }
    /**
     * Displays a list of vendors
     *
     * @access public
     * @since 2.0.4
     * @version 2.1.5
     * @param array $atts user specified attributes
     * @return html
     */
    public function vendor_list_shortcode($atts)
    {
    }
}
/**
 * Taxonomy Class
 *
 * Add custom taxonomy to WordPress.
 *
 * @package  WooCommerce Product Vendors/Taxonomy
 * @version  2.0.0
 */
class WC_Product_Vendors_Taxonomy
{
    /**
     * Constructor
     *
     * @since 2.0.0
     * @return bool
     */
    public function __construct()
    {
    }
    /**
     * Register vendor taxonomy
     *
     * @since 2.0.0
     * @return void
     */
    public function register_vendor_taxonomy()
    {
    }
    /**
     * Customize vendor taxonomy updated messages.
     *
     * @since 2.1.34
     *
     * @param array $messages The list of available messages.
     * @return array
     */
    public function updated_term_messages($messages)
    {
    }
    /**
     * Adds the taxonomy meta box
     *
     * @since 2.0.0
     * @return mixed
     */
    public function add_meta_box()
    {
    }
    /**
     * Remove active vendor meta from Vendor Admin if active vendor is going to delete.
     *
     * @param int    $term     Term ID.
     * @param string $taxonomy Taxonomy name.
     * @return void
     */
    public function maybe_remove_wcpv_active_vendor($term, $taxonomy)
    {
    }
}
/**
 * Utility Class.
 *
 * All miscellaneous convenient functions wrapper.
 *
 * @category Utility
 * @package  WooCommerce Product Vendors/Utils
 * @version  2.0.0
 */
class WC_Product_Vendors_Utils
{
    /**
     * Empty private constructor to prevent instantiation
     *
     * @access private
     * @since 2.0.0
     * @version 2.0.0
     * @return void
     */
    private function __construct()
    {
    }
    /**
     * Check if user has specific vendor role with caching.
     *
     * @since 2.4.0
     * @param string           $role Vendor role to check.
     * @param int|WP_User|null $user User object or ID. Default null.
     * @return bool
     */
    private static function has_vendor_role($role, $user = \null)
    {
    }
    /**
     * Update vendor role cache when user roles change.
     *
     * @since 2.4.0
     * @param int    $user_id  User ID.
     * @param string $new_role New role.
     */
    public static function update_vendor_role_cache($user_id, $new_role)
    {
    }
    /**
     * Conditional check if current user is a vendor
     *
     * @since 2.0.0
     * @version 2.4.0
     * @param int|WP_User|null $user User object or ID to check.
     * @return bool
     */
    public static function is_vendor($user = \null)
    {
    }
    /**
     * Conditional check if current user is a pending vendor
     *
     * @since 2.0.0
     * @version 2.4.0
     * @param int|WP_User|null $user User object or ID to check.
     * @return bool
     */
    public static function is_pending_vendor($user = \null)
    {
    }
    /**
     * Conditional check if current user is an admin vendor
     *
     * @since 2.0.0
     * @version 2.4.0
     * @param int|WP_User|null $user User object or ID to check.
     * @return bool
     */
    public static function is_admin_vendor($user = \null)
    {
    }
    /**
     * Conditional check if current user is a manager vendor
     *
     * @since 2.0.0
     * @version 2.4.0
     * @param int|WP_User|null $user User object or ID to check.
     * @return bool
     */
    public static function is_manager_vendor($user = \null)
    {
    }
    /**
     * Sanitizes multilevel array
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param array $item
     * @param mix $key
     * @return bool
     */
    public static function sanitize_multi_array($item, $key)
    {
    }
    /**
     * Sanitizes commission
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param string $commission
     * @return string $commission
     */
    public static function sanitize_commission($commission)
    {
    }
    /**
     * Gets the data from a specific vendor the passed in user is managing
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return array $vendor_data
     */
    public static function get_vendor_data_from_user()
    {
    }
    /**
     * Get sold by info for the vendor
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param int $post_id
     * @return array mixed
     */
    public static function get_sold_by_link($post_id = \null)
    {
    }
    /**
     * Gets the data from a specific vendor
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param int $vendor_id
     * @return array $vendor_data
     */
    public static function get_vendor_data_by_id($vendor_id)
    {
    }
    /**
     * Clear vendor data cache when term is updated/deleted
     *
     * @since 2.4.0
     * @param int    $term_id  Term ID.
     * @param int    $tt_id    Term taxonomy ID.
     * @param string $taxonomy Taxonomy slug.
     */
    public static function clear_vendor_data_cache($term_id, $tt_id, $taxonomy)
    {
    }
    /**
     * Clear vendor data cache when term taxonomy is updated
     *
     * @since 2.4.0
     * @param int $tt_id    Term taxonomy ID.
     * @param int $taxonomy Taxonomy slug.
     */
    public static function clear_vendor_taxonomy_cache($tt_id, $taxonomy)
    {
    }
    /**
     * Clear vendor data cache when terms are set
     *
     * @since 2.4.0
     * @param int    $object_id Object ID.
     * @param array  $terms     An array of object terms.
     * @param array  $tt_ids    An array of term taxonomy IDs.
     * @param string $taxonomy  Taxonomy slug.
     */
    public static function clear_vendor_terms_cache($object_id, $terms, $tt_ids, $taxonomy)
    {
    }
    /**
     * Clear vendor data cache when term meta is added, updated, or deleted.
     *
     * @since 2.4.0
     * @param int|int[] $meta_id   ID of the affected metadata entry (an array of IDs when fired from deleted_term_meta).
     * @param int       $object_id Term ID.
     * @param string    $meta_key  Metadata key.
     */
    public static function clear_vendor_meta_cache($meta_id, $object_id, $meta_key)
    {
    }
    /**
     * Sets the data for a specific vendor
     *
     * @access public
     * @since future
     * @version future
     * @param int $vendor_id
     * @param array $vendor_data
     * @return bool
     */
    public static function set_vendor_data($vendor_id, $vendor_data)
    {
    }
    /**
     * Gets all vendor data the passed in user is managing
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.9
     * @param int|WP_User|null $user User object or ID. Default null.
     * @return array $vendor_data
     */
    public static function get_all_vendor_data($user = \null)
    {
    }
    /**
     * Authenticates if user is assigned to a vendor and can manage it
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.9
     * @param int $user_id
     * @param string $vendor_id
     * @return bool
     */
    public static function auth_vendor_user($user_id = \null, $vendor_id = \null)
    {
    }
    /**
     * Checks if a user holds a vendor role and is assigned to the given vendor.
     *
     * Unlike auth_vendor_user() this never falls back to the user's active vendor, so it
     * is safe to call while that value is being resolved.
     *
     * @since 2.6.1
     * @param int        $user_id   User ID.
     * @param int|string $vendor_id Vendor term ID.
     * @return bool
     */
    public static function can_user_manage_vendor($user_id, $vendor_id)
    {
    }
    /**
     * Checks if a user is listed as one of the admins of the given vendor.
     *
     * This is the assignment check only: it ignores the user's role, matching how
     * get_all_vendor_data() decides which vendors a user belongs to.
     *
     * @since 2.6.1
     * @param int        $user_id   User ID.
     * @param int|string $vendor_id Vendor term ID.
     * @return bool
     */
    public static function is_user_assigned_to_vendor($user_id, $vendor_id)
    {
    }
    /**
     * Gets the IDs of the users assigned as admins of a vendor.
     *
     * Returns an empty array when the vendor term no longer exists.
     *
     * @since 2.6.1
     * @param int|string $vendor_id Vendor term ID.
     * @return array
     */
    public static function get_vendor_admin_ids($vendor_id)
    {
    }
    /**
     * Normalizes a stored vendor `admins` value into a list of user IDs.
     *
     * The value is an array on current installs but may still be a comma separated string
     * on older ones or when altered by a filter.
     *
     * @since 2.6.1
     * @param mixed $admins Stored admins value.
     * @return array
     */
    private static function normalize_admin_ids($admins)
    {
    }
    /**
     * Checks if vendor is valid
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.9
     * @param int|string $vendor
     * @return mixed
     */
    public static function is_valid_vendor($vendor = \null)
    {
    }
    /**
     * Checks if user can manage product
     *
     * @access public
     * @since 2.0.0
     * @since 2.6.2 $user_id is now honored. It previously had no effect - ownership was
     *              always checked against the current user's active vendor regardless of
     *              what was passed. Any external caller relying on that (e.g. passing a
     *              vendor term ID instead of a user ID) must be updated to pass a real
     *              user ID.
     * @version 2.0.0
     * @param int $user_id
     * @param int $product_id
     * @return bool
     */
    public static function can_user_manage_product($user_id = \null, $product_id = \null)
    {
    }
    /**
     * Sets the active vendor a user is managing.
     *
     * @since 2.0.38
     * @version 2.0.38
     * @param int $vendor_id
     * @param int $user_id Optional user id. Defaults to the current user.
     * @return int|bool
     */
    public static function set_user_active_vendor($vendor_id = '', $user_id = \null)
    {
    }
    /**
     * Gets the active vendor a user is managing.
     *
     * The stored value is only honoured while the user is still assigned to that vendor.
     * Removing a user from a vendor does not clean up every stored value, so without this
     * check a user can be left pointing at a vendor they can no longer manage, with no way
     * back to the one they can.
     *
     * @since 2.0.38
     * @param int $user_id Optional user id.
     *
     * @return string|bool
     */
    public static function get_user_active_vendor($user_id = \null)
    {
    }
    /**
     * Gets the users default active vendor.
     *
     * @since 2.0.38
     * @param int $user_id Optional user id.
     *
     * @return string|bool
     */
    public static function get_user_default_vendor($user_id = \null)
    {
    }
    /**
     * Clears a user's active vendor when it points at the given vendor.
     *
     * Called when a user loses access to a vendor so the next read resolves to a vendor
     * they are still assigned to.
     *
     * @since 2.6.1
     * @param int $user_id   User ID losing access.
     * @param int $vendor_id Vendor term ID the user no longer manages.
     * @return bool
     */
    public static function maybe_clear_stale_active_vendor($user_id, $vendor_id)
    {
    }
    /**
     * Get the vendor slug/id of the current user.
     *
     * @since 2.0.0
     * @version 2.0.38
     * @param string $type the type to return
     * @return mixed
     */
    public static function get_logged_in_vendor($type = 'id')
    {
    }
    /**
     * Checks if the page is a edit product page
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public static function is_edit_product_page()
    {
    }
    /**
     * Get all products that belong to a vendor
     *
     * @access public
     * @since 2.0.0
     * @version 2.4.0
     * @param int $term_id
     * @return array $ids product ids
     */
    public static function get_vendor_product_ids($term_id = '')
    {
    }
    /**
     * Get vendor rating based on average of product ratings
     *
     * @access public
     * @since 2.0.0
     * @version 2.4.0
     * @param int $term_id Vendor term ID.
     * @return int $avg_rating
     */
    public static function get_vendor_rating($term_id)
    {
    }
    /**
     * Get vendor rating html
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param int $term_id
     * @return mixed
     */
    public static function get_vendor_rating_html($term_id)
    {
    }
    /**
     * Clear vendor rating cache when comment count updates.
     *
     * @since  2.4.0
     * @version 2.4.0
     * @param  int $post_id Post ID.
     * @return void
     */
    public static function clear_vendor_rating_cache($post_id)
    {
    }
    /**
     * Clear vendor rating cache when a new comment is approved.
     *
     * @since  2.4.0
     * @version 2.4.0
     * @param  int   $comment_id       Comment ID.
     * @param  int   $comment_approved Comment approval status.
     * @param  array $comment_data     Comment data.
     * @return void
     */
    public static function clear_vendor_rating_on_comment($comment_id, $comment_approved, $comment_data)
    {
    }
    /**
     * Clear vendor rating and product caches when a post is deleted.
     *
     * @since  2.4.0
     * @version 2.4.0
     * @param  int $post_id Post ID.
     * @return void
     */
    public static function clear_vendor_rating_and_product_caches($post_id)
    {
    }
    /**
     * Clear vendor product cache when terms are set.
     *
     * @since  2.4.0
     * @version 2.4.0
     * @param  int    $object_id Object ID.
     * @param  array  $terms     Terms array.
     * @param  array  $tt_ids    Term taxonomy IDs array.
     * @param  string $taxonomy  Taxonomy slug.
     * @return void
     */
    public static function clear_vendor_product_cache($object_id, $terms, $tt_ids, $taxonomy)
    {
    }
    /**
     * Clear vendor product cache when a product is updated
     *
     * @since  2.4.0
     * @version 2.4.0
     * @param  int $product_id Product ID.
     * @return void
     */
    public static function clear_vendor_product_cache_on_update($product_id)
    {
    }
    /**
     * Converts a GMT date into the correct format for the blog.
     *
     * Requires and returns a date in the Y-m-d H:i:s format. If there is a
     * timezone_string available, the returned date is in that timezone, otherwise
     * it simply adds the value of gmt_offset. Return format can be overridden
     * using the $format parameter
     *
     * @since 2.0.16
     * @version 2.0.16
     * @param string $string The date to be converted.
     * @param string $format The format string for the returned date (default is Y-m-d H:i:s)
     * @return string Formatted date relative to the timezone / GMT offset.
     */
    public static function get_date_from_gmt($string, $format, $timezone_string)
    {
    }
    /**
     * Gets the default timezone string from blog setting
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.16
     * @return string $tzstring
     */
    public static function get_default_timezone_string()
    {
    }
    /**
     * Formats the order and payout dates to be consistent
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.16
     * @param string $sql_date
     * @return string $date
     */
    public static function format_date($sql_date, $timezone = '')
    {
    }
    /**
     * Gets the vendor id from product
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param int $product_id
     * @return int $vendor_id
     */
    public static function get_vendor_id_from_product($product_id = \null)
    {
    }
    /**
     * Checks if the given product is a vendor product
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param int $product_id
     * @return object $term
     */
    public static function is_vendor_product($product_id = \null)
    {
    }
    /**
     * Checks whether the logged-in user (with their active vendor) can access an order.
     *
     * @param int $order_id Order ID.
     * @return boolean TRUE if user can access the order, FALSE otherwise.
     *
     * @since 2.1.66
     */
    public static function can_logged_in_user_access_order($order_id)
    {
    }
    /**
     * Checks whether a vendor can access an order.
     *
     * @param int $order_id  Order ID.
     * @param int $vendor_id Vendor ID.
     * @return boolean TRUE if vendor can access the order, FALSE otherwise.
     *
     * @since 2.1.66
     */
    public static function can_vendor_access_order($order_id, $vendor_id)
    {
    }
    /**
     * Checks if a given order item can be managed by the logged-in user (it's of one of the vendors the user manages).
     *
     * @param int $order_item_id Order item ID.
     * @return boolean TRUE if the user can manage the order item, FALSE otherwise.
     *
     * @since 2.1.66
     */
    public static function can_logged_in_user_manage_order_item($order_item_id)
    {
    }
    /**
     * Checks if an order item ID can be managed by a given vendor.
     *
     * @param int $order_item_id The order item ID.
     * @param int $vendor_id     The vendor ID.
     * @return boolean TRUE if the vendor can manage the order item, FALSE otherwise.
     *
     * @since 2.1.66
     */
    public static function can_vendor_manage_order_item($order_item_id, $vendor_id)
    {
    }
    /**
     * Gets the list of vendors
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return array objects $vendors
     */
    public static function get_vendors()
    {
    }
    /**
     * Gets the list of all vendors, even those without products
     *
     * @access public
     * @since 2.1.54
     * @version 2.1.54
     * @return array
     */
    public static function get_all_vendors()
    {
    }
    /**
     * Gets product settings related to vendors.
     *
     * @since 2.1.72 Return vendor setting on basis of _wcpv_customize_product_vendor_settings product setting value
     *
     * @param WC_Product $product     Product Object.
     * @param array|null $vendor_data Vendor Data.
     *
     * @return array
     */
    public static function get_product_vendor_settings(\WC_Product $product, $vendor_data = \null)
    {
    }
    /**
     * Gets the commission for a product
     * Search order is: product variation level -> product parent level -> vendor level -> general vendors level
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param int $product_id
     * @param array $vendor_data
     * @return array mixed
     */
    public static function get_product_commission($product_id, $vendor_data)
    {
    }
    /**
     * Gets the list of vendor data from an order
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param object $order
     * @return array $vendor_data
     */
    public static function get_vendors_from_order($order = \null)
    {
    }
    /**
     * Converts array to string comma delimited
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param array $query
     * @return array $query
     */
    public static function convert2string($query)
    {
    }
    /**
     * Unserializes the variation attributes
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param array $query
     * @return array $query
     */
    public static function unserialize_attributes($query)
    {
    }
    /**
     * Checks whether the commission table exists
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public static function commission_table_exists()
    {
    }
    /**
     * Returns the payout schedule frequency
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return string $frequency
     */
    public static function payout_schedule_frequency()
    {
    }
    /**
     * Gets per product shipping matching rule
     *
     * @param mixed $product_id
     * @param mixed $package
     * @return false|null
     */
    public static function get_pp_shipping_matching_rule($product_id, $package, $standalone = \true)
    {
    }
    /**
     * Updates the user/customer meta to contain related vendors
     * This comes from either vendor created user or a customer of the vendor
     *
     * @access public
     * @since 2.1.0
     * @version 2.1.0
     * @param int $user_id
     * @param int $vendor_id
     * @return bool
     */
    public static function update_user_related_vendors($user_id = \null, $vendor_id = \null)
    {
    }
    /**
     * Get fulfillment status of an order item
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param int $order_item_id
     * @return string $status
     */
    public static function get_fulfillment_status($order_item_id)
    {
    }
    /**
     * Set fulfillment status of an order item
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param int $order_item_id
     * @param string $status
     * @return bool
     */
    public static function set_fulfillment_status($order_item_id, $status)
    {
    }
    /**
     * Trigger fulfillment status email
     *
     * @access public
     * @since 2.0.16
     * @version 2.0.16
     * @param array $vendor_data
     * @param string $status
     * @param int $order_item_id
     * @return bool
     */
    public static function send_fulfill_status_email($vendor_data = \null, $status = '', $order_item_id = '')
    {
    }
    /**
     * Maybe set order to complete or back to processing when product vendor is fulfilled or unfulfilled.
     *
     * @since 2.1.30
     * @param object $order The order.
     * @param string $fulfillment_status 'fulfilled' or 'unfulfilled'.
     * @return void
     */
    public static function maybe_update_order($order, $fulfillment_status)
    {
    }
    /**
     * Returns true if all products in order have the specified fulfillment status.
     * All products need to be product vendors.
     *
     * @since 2.1.30
     * @param object $order The order.
     * @param string $fulfillment_status 'fulfilled' or 'unfulfilled'.
     * @return bool  True if all products are vendors and have the specified fulfillment status.
     */
    public static function order_has_fulfillment_status($order, $fulfillment_status)
    {
    }
    /**
     * Gets an order by the order item id
     *
     * @access public
     * @since 2.0.16
     * @version 2.0.16
     * @param int $order_item_id
     * @return bool
     */
    public static function get_order_by_order_item_id($order_item_id = \null)
    {
    }
    /**
     * Gets the order item name by order item id
     *
     * @access public
     * @since 2.0.16
     * @version 2.0.16
     * @param int $order_item_id
     * @return string $order_item_name
     */
    public static function get_order_item_name($order_item_id = \null)
    {
    }
    /**
     * Force save an order item's meta data to alleviate aggressive object caching.
     *
     * @since 2.1.33
     * @param  int $order_item_id
     * @return void
     */
    public static function update_order_item_meta($order_item_id)
    {
    }
    /**
     * Set new pending vendor to list to later be
     * counted to show as a bubble count on menu.
     *
     * @since 2.0.31
     * @version 2.0.31
     * @param int $user_id
     * @return void
     */
    public static function set_new_pending_vendor($user_id = \null)
    {
    }
    /**
     * Deletes new pending vendor from list.
     *
     * @since 2.0.31
     * @version 2.0.31
     * @param int $user_id
     * @return void
     */
    public static function delete_new_pending_vendor($user_id = \null)
    {
    }
    /**
     * Clears all reports transients for vendor
     *
     * @access public
     * @since 2.0.0
     * @since 2.2.0 Use vendor report transient manager to clear transient.
     * @return bool
     * @version 2.0.0
     */
    public static function clear_reports_transients()
    {
    }
    /**
     * Clear low stock transient.
     *
     * @deprecated 2.2.0
     *
     * @since 2.1.15
     */
    public static function clear_low_stock_transient()
    {
    }
    /**
     * Clear out of stock transient.
     *
     * @deprecated 2.2.0
     *
     * @since 2.1.15
     */
    public static function clear_out_of_stock_transient()
    {
    }
    /**
     * Clear out the vendor error list transient.
     *
     * @access public
     * @since 2.1.54
     * @version 2.1.54
     */
    public static function clear_vendor_error_list_transient()
    {
    }
    /**
     * Deletes PayPal webhook id.
     *
     * @since 2.0.35
     * @version 2.0.35
     */
    public static function delete_paypal_webhook_id()
    {
    }
    /**
     * Checks if bookings is enabled for this vendor
     *
     * @since 2.0.0
     * @param int $user_id Optional user id.
     *
     * @return bool
     */
    public static function is_bookings_enabled($user_id = \null)
    {
    }
    /**
     * Formats the order status for localization
     *
     * @since   2.0.21
     * @since   2.1.70 Use WordPress and Woocommerce status names.
     *
     * @param string $order_status
     *
     * @version 2.0.21
     */
    public static function format_order_status($order_status = '')
    {
    }
    /**
     * Return the URL that should be used for Product Vendors PayPal Webhook Notifications
     *
     * @since 2.0.35
     * @version 2.0.35
     * @return string
     */
    public static function get_paypal_webhook_notification_url()
    {
    }
    /**
     * Check if Per-Product Shipping method is globally enabled.
     * @since 2.1.36
     * @return bool
     */
    public static function is_wcpv_per_product_shipping_enabled()
    {
    }
    /**
     * Modify status display on the vendor's screen.
     *
     * @param WC_Order $order     Order object.
     * @param int      $vendor_id Vendor ID.
     *
     * @return string
     */
    public static function get_vendor_order_status($order, $vendor_id)
    {
    }
    /**
     * Set a vendor admin user
     *
     * @since future
     * @version future
     * @param int $vendor_id
     * @param int $user_id
     * return bool
     */
    public static function set_vendor_admin($vendor_id, $user_id)
    {
    }
    /**
     * Update vendor admin users
     *
     * @since future
     * @version future
     * @param int $vendor_id
     * @param array $user_ids
     * return bool
     */
    public static function update_vendor_admins($vendor_id, $user_ids)
    {
    }
    /**
     * Remove a vendor admin user
     *
     * @since future
     * @version future
     * @param int $vendor_id
     * @param int $user_id
     * return bool
     */
    public static function remove_vendor_admin($vendor_id, $user_id)
    {
    }
    /**
     * Get a vendor admin users
     *
     * @since future
     * @version future
     * @param int $vendor_id
     * return array
     */
    public static function get_vendor_admins($vendor_id)
    {
    }
    /**
     * Check if a user is a vendor admin
     *
     * @since future
     * @version future
     * @param int $vendor_id
     * @param int $user_id
     * return bool
     */
    public static function is_vendor_admin($vendor_id, $user_id)
    {
    }
    /**
     * Check if the site uses term meta to store vendor admin instead of the vendor data object.
     *
     * @since future
     * @version future
     * @return bool
     */
    public static function is_vendor_admin_meta_storage_enabled()
    {
    }
    /**
     * Should return date SQL query part from date range for commission table.
     *
     * @since 2.1.76
     *
     * @param string $range      Date range type: Valid values are: year, last_month, month, 7 day (default), custom.
     * @param string $start_date Optional. Date after which retrieve vendor commission data. Mysql formatted date.
     * @param string $end_date   Optional. Date before which retrieve vendor commission data. Mysql formatted date.
     *
     * @return string
     */
    public static function get_commission_date_sql_query_from_range($range, $start_date = '', $end_date = '')
    {
    }
    /**
     * Should return boolean value for date validation result.
     *
     * @since 2.1.76
     *
     * @param string $date Mysql formatted date,
     *
     * @return bool
     */
    public static function is_valid_mysql_formatted_date($date)
    {
    }
    /* * Calculate the total tax refunded for a line item.
     *
     * @since 2.1.74
     *
     * @param WC_Order_Item $item  Order item id.
     * @param WC_Order      $order Order.
     *
     * @return float
     */
    public static function get_total_tax_refunded_line_item(\WC_Order_Item $item, \WC_Order $order)
    {
    }
    /**
     * Gets the count of order items (only need shipping).
     *
     * @since 2.1.74
     *
     * @param WC_Order $order Order object.
     *
     * @return int
     */
    public static function get_item_count_need_with_shipping(\WC_Order $order)
    {
    }
    /**
     * Gets the count of refunded order items (only need shipping).
     *
     * @since 2.1.74
     *
     * @param WC_Order $order Order object.
     *
     * @return int
     */
    public static function get_total_qty_refunded_with_need_shipping(\WC_Order $order)
    {
    }
    /**
     * Calculate the total shipping charges for refunded order item.
     *
     * @since 2.1.74
     *
     * @return array
     */
    public static function get_total_order_item_shipping_charges_with_refund(\WC_Order_Item $item)
    {
    }
    /**
     * This function should return HTML about vendor commission amount with refunded amount.
     * We use this function to show vendor commission details in store commission list, vendor order list and  vendor order details page.
     *
     * @since 2.1.77
     *
     * @return string
     */
    public static function get_total_commission_amount_html(\stdClass $commission, \WC_Order $order)
    {
    }
}
/**
 * Frontend Class.
 *
 * Handles the frontend UI items.
 *
 * @category Frontend
 * @package  WooCommerce Product Vendors/Frontend
 * @version  2.0.0
 */
class WC_Product_Vendors_Vendor_Frontend
{
    /**
     * Init
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public static function init()
    {
    }
    /**
     * Registers frontend scripts and styles
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function register_frontend_scripts_styles()
    {
    }
    /**
     * Add vendor specific section to my accounts page
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function add_section()
    {
    }
    /**
     * Add sold by vendor to product archive pages
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function add_sold_by_loop()
    {
    }
    /**
     * Add sold by vendor to product archive pages
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function add_sold_by_single()
    {
    }
    /**
     * Add sold by vendor to cart page
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param array $values
     * @param object $cart_item
     * @return array $values
     */
    public function add_sold_by_cart($values, $cart_item)
    {
    }
    /**
     * Add sold by vendor to all order details
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param int $item_id
     * @param object $item
     * @param object $order
     * @return bool
     */
    public function add_sold_by_order_details($item_id, $item, $order)
    {
    }
    /**
     * Add supported tag in profile section
     * 
     * @return array
     */
    public function kses_allowed_html($allowed_tags, $context)
    {
    }
    /**
     * Displays the vendor logo and profile
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function display_vendor_logo_profile()
    {
    }
}
/**
 * Widgets Class. 
 *
 * Registers all widgets.
 *
 * @category Widgets
 * @package  WooCommerce Product Vendors/Widgets
 * @version  2.0.0
 */
class WC_Product_Vendors_Widgets
{
    /**
     * Constructor
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function __construct()
    {
    }
    /**
     * Registers all widgets
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function register_widgets()
    {
    }
}
/**
 * Migrate Vendor Admin Storage Class.
 *
 * Migrate vendor admin storage from the vendor_data meta object to individual meta entries.
 *
 * @category CLI
 * @package WooCommerce Product Vendors/CLI
 * @version future
 * @since future
 */
class WC_Product_Vendors_Cli_Vendor_Admin_Storage extends \WP_CLI_Command
{
    /**
     * Migrate vendor admin storage.
     * @since future
     * @version future
     * @param array $args
     *
     * ## OPTIONS
     *
     * [--dry-run]
     * : Simulate script without doing any live changes.
     *
     * [--batch-size]
     * : Number of items to process in a single batch.
     */
    public function __invoke($args, $assoc_args)
    {
    }
    /**
     * Pause to allow the database to catch up.
     */
    private function pause()
    {
    }
}
/**
 * Migrate Vendor Admin Storage Class.
 *
 * Migrate vendor admin storage from the vendor_data meta object to individual meta entries.
 */
class WC_Product_Vendors_Admin_Storage_Compatibility
{
    const BATCH_SIZE = 100;
    /**
     * Initialize actions.
     */
    public function init()
    {
    }
    /**
     * Schedule admin storage migration.
     */
    public function schedule_migration()
    {
    }
    /**
     * Update the scheduled migration status.
     *
     * @param bool $status
     */
    public function update_scheduled_migration_status($status)
    {
    }
    /**
     * Check if admin storage migration is scheduled.
     *
     * @return bool
     */
    public function is_migration_scheduled()
    {
    }
    /**
     * Migrate admin storage batch.
     *
     * @param array $args
     */
    public function migrate_batch($vendors)
    {
    }
    /**
     * Process a batch of vendor admin storage migration.
     * @since future
     * @version future
     * @param array $vendors Array of vendor vendors.
     * 
     * @return bool
     */
    public function migrate_vendors($vendors)
    {
    }
    /**
     * Get the next batch of vendors to migrate.
     * 
     * @since future
     * @version future
     * @param int $batch_size The number of vendors to get.
     * @param int $batch Optional param to get a specific batch.
     * @return array
     */
    public function get_vendors_to_migrate($batch, $batch_size)
    {
    }
    /**
     * Set the admin storage as migrated.
     */
    public function set_admin_storage_migrated()
    {
    }
}
/**
 * Class for WC COT compatibility.
 *
 * @class    WC_Product_Vendors_COT_Compatibility
 * @version  2.1.66
 */
class WC_Product_Vendors_COT_Compatibility
{
    /**
     * Helper function to get whether custom order tables are enabled or not.
     *
     * @return bool
     */
    public static function is_cot_enabled()
    {
    }
    /**
     * Helper function to get whether given id is order or not.
     *
     * @param int $order_id Order ID.
     *
     * @return bool Whether given id is order or not.
     */
    public static function is_order($order_id)
    {
    }
    /**
     * Helper function to check whether custom order tables are in sync or not.
     *
     * @since 2.3.1
     *
     * @return bool
     */
    public static function is_cot_sync_enabled()
    {
    }
}
class WC_Product_Vendors_Approval extends \WC_Email
{
    /**
     * User role
     *
     * @var string
     */
    public $role;
    /**
     * Recipients for the email.
     *
     * @var string
     */
    public $recipient = '';
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Trigger function.
     *
     * @access public
     * @return void
     */
    public function trigger($user_id, $new_role, $old_roles)
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
class WC_Product_Vendors_Cancelled_Order_Email_To_Vendor extends \WC_Email
{
    /**
     * Vendor ID
     *
     * @var int
     */
    public $vendor;
    /**
     * Recipients for the email.
     *
     * @var string
     */
    public $recipient = '';
    /**
     * Constructor
     *
     * @access public
     * @return bool
     */
    public function __construct()
    {
    }
    /**
     * trigger function.
     *
     * @access public
     * @param int $order_id
     * @return bool
     */
    public function trigger($order_id)
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
     * Filters the order items for vendor items
     *
     * @access public
     * @param array $items;
     * @param object $order
     * @return string
     */
    public function filter_vendor_items($items, $order)
    {
    }
    /**
     * Filters the order totals
     *
     * @access public
     * @param array $total_rows;
     * @param object $order
     * @return string
     */
    public function filter_order_totals($total_rows, $order)
    {
    }
    /**
     * Filters the customer fields
     *
     * @access public
     * @param array $fields
     * @param bool $sent_to_admin
     * @param object $order
     * @return string
     */
    public function filter_customer_fields($fields, $sent_to_admin, $order)
    {
    }
    /**
     * Filters the customer addresses
     *
     * @access public
     * @param array $template_path the path of the original template
     * @param string $template_name the name to the original template
     * @param array $args
     * @return string
     */
    public function filter_customer_addresses($template_path, $template_name, $args)
    {
    }
    /**
     * Initialize Settings Form Fields
     *
     * @access public
     * @return bool
     */
    public function init_form_fields()
    {
    }
}
/**
 * Product Vendors Email Preview Class
 */
class WC_Product_Vendors_Email_Preview
{
    /**
     * The email being previewed
     *
     * @var string
     */
    private $email_type;
    /**
     * Initialize the class
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
     * Get a dummy order object without the need to create in the database.
     *
     * @return WC_Order
     */
    private function get_dummy_order()
    {
    }
    /**
     * Get a dummy product.
     *
     * @return WC_Product
     */
    private function get_dummy_product()
    {
    }
    /**
     * Get a dummy product variation.
     *
     * @return WC_Product_Variation
     */
    private function get_dummy_product_variation()
    {
    }
    /**
     * Get a dummy address.
     *
     * @return array
     */
    private function get_dummy_address()
    {
    }
    /**
     * Get a dummy vendor data.
     *
     * @return array
     */
    private function get_dummy_vendor_data()
    {
    }
}
/**
 * Handles "New Renewal Email (Vendor)" email notification.
 *
 * @since 2.1.70
 */
class WC_Product_Vendors_New_Renewal_Email_To_Vendor extends \WC_Email
{
    /**
     * Vendor ID
     *
     * @var int
     */
    public $vendor;
    /**
     * Recipients for the email.
     *
     * @var string
     */
    public $recipient = '';
    /**
     * Constructor
     *
     * @access public
     * @return bool
     */
    public function __construct()
    {
    }
    /**
     * trigger function.
     *
     * @access public
     * @param int $order_id
     * @return bool
     */
    public function trigger($order_id)
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
     * Filters the order totals
     *
     * @access public
     * @param array $total_rows;
     * @param object $order
     * @return string
     */
    public function filter_order_totals($total_rows, $order)
    {
    }
    /**
     * Filters the customer fields
     *
     * @access public
     * @param array $fields
     * @param bool $sent_to_admin
     * @param object $order
     * @return string
     */
    public function filter_customer_fields($fields, $sent_to_admin, $order)
    {
    }
    /**
     * Filters the customer addresses
     *
     * @access public
     * @param array $template_path the path of the original template
     * @param string $template_name the name to the original template
     * @param array $args
     * @return string
     */
    public function filter_customer_addresses($template_path, $template_name, $args)
    {
    }
    /**
     * Renders the order table
     *
     * @access public
     * @param object $order
     * @param bool $sent_to_admin
     * @param bool $plain_text
     * @param object $email
     * @return bool
     */
    public function render_order_details_table($order, $sent_to_admin, $plain_text, $email)
    {
    }
    /**
     * Initialize Settings Form Fields
     *
     * @access public
     * @return bool
     */
    public function init_form_fields()
    {
    }
    /**
     * Show the commission details on the order.
     *
     * @param WC_Order $order
     * @param Boolean $sent_to_admin
     * @param Boolean $plain_text
     * @param String $email
     */
    public function show_commission_information($order, $sent_to_admin, $plain_text, $email)
    {
    }
}
class WC_Product_Vendors_Order_Email_To_Vendor extends \WC_Email
{
    /**
     * Vendor ID
     *
     * @var int
     */
    public $vendor;
    /**
     * Recipients for the email.
     *
     * @var string
     */
    public $recipient = '';
    /**
     * Constructor
     *
     * @since 2.1.70 Move subscription renewal email notification related code to WC_Product_Vendors_Order_Email_To_Vendor.
     *
     * @access public
     * @return bool
     */
    public function __construct()
    {
    }
    /**
     * Function to append email ID and phone number to address.
     *
     * @param string $address     Formatted address.
     * @param array  $raw_address Raw address.
     *
     * @return mixed|string
     */
    public function formatted_address($address, $raw_address)
    {
    }
    /**
     * trigger function.
     *
     * @access public
     * @param int $order_id
     * @return bool
     */
    public function trigger($order_id)
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
     * Filters the order totals
     *
     * @access public
     * @param array $total_rows;
     * @param object $order
     * @return string
     */
    public function filter_order_totals($total_rows, $order)
    {
    }
    /**
     * Filters the customer fields
     *
     * @access public
     * @param array $fields
     * @param bool $sent_to_admin
     * @param object $order
     * @return string
     */
    public function filter_customer_fields($fields, $sent_to_admin, $order)
    {
    }
    /**
     * Filters the customer addresses
     *
     * @access public
     * @param array $template_path the path of the original template
     * @param string $template_name the name to the original template
     * @param array $args
     * @return string
     */
    public function filter_customer_addresses($template_path, $template_name, $args)
    {
    }
    /**
     * Renders the order table
     *
     * @since 2.0.2
     * @version 2.0.2
     * @access public
     * @param object $order
     * @param bool $sent_to_admin
     * @param bool $plain_text
     * @param object $email
     * @return bool
     */
    public function render_order_details_table($order, $sent_to_admin, $plain_text, $email)
    {
    }
    /**
     * Initialize Settings Form Fields
     *
     * @access public
     * @return bool
     */
    public function init_form_fields()
    {
    }
    /**
     * Show the commission details on the order.
     *
     * @since 2.1.0
     * @version 2.1.3
     *
     * @param WC_Order $order
     * @param Boolean $sent_to_admin
     * @param Boolean $plain_text
     * @param String $email
     */
    public function show_commission_information($order, $sent_to_admin, $plain_text, $email)
    {
    }
}
class WC_Product_Vendors_Order_Fulfill_Status_To_Admin extends \WC_Email
{
    /**
     * Vendor name
     *
     * @var string
     */
    public $vendor_name;
    /**
     * Fulfillment status
     *
     * @var string
     */
    public $fulfill_status;
    /**
     * Order
     *
     * @var object
     */
    public $order;
    /**
     * Order item name
     *
     * @var string
     */
    public $order_item_name;
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
     * @since 2.0.0
     * @version 2.0.16
     * @param array $vendor_data
     * @param string $status
     * @param int $order_item_id
     * @return null
     */
    public function trigger($vendor_data, $status, $order_item_id)
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
class WC_Product_Vendors_Order_Note_To_Customer extends \WC_Email
{
    /**
     * Vendor ID
     *
     * @var int
     */
    public $vendor;
    /**
     * Order note
     *
     * @var string
     */
    public $note = '';
    /**
     * Constructor
     *
     * @access public
     * @return bool
     */
    public function __construct()
    {
    }
    /**
     * trigger function.
     *
     * @access public
     * @param int $order_id
     * @param string $note
     * @param int $vendor_id
     * @return bool
     */
    public function trigger($order_id, $note, $vendor_id)
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
     * Filters the order items for vendor items
     *
     * @access public
     * @param array $items;
     * @param object $order
     * @return string
     */
    public function filter_vendor_items($items, $order)
    {
    }
    /**
     * Initialize Settings Form Fields
     *
     * @access public
     * @return bool
     */
    public function init_form_fields()
    {
    }
    /**
     * Should set vendor email as "Reply-to" and returns email headers.
     *
     * @since 2.1.70
     *
     * @param string $headers   Email headers.
     * @param int    $vendor_id Vendor Id.
     */
    private function set_vendor_email_headers(string $headers, int $vendor_id): string
    {
    }
}
class WC_Product_Vendors_Product_Added_Notice extends \WC_Email
{
    /**
     * Vendor name
     *
     * @var string
     */
    public $vendor_name;
    /**
     * Product name
     *
     * @var string
     */
    public $product_name;
    /**
     * Product link
     *
     * @var string
     */
    public $product_link;
    /**
     * Constructor
     *
     * @access public
     * @return bool
     */
    public function __construct()
    {
    }
    /**
     * Trigger function.
     *
     * @access public
     * @param object $post
     * @return bool
     */
    public function trigger($post)
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
     * Initialize Settings Form Fields
     *
     * @access public
     * @return bool
     */
    public function init_form_fields()
    {
    }
}
class WC_Product_Vendors_Registration_Email_To_Admin extends \WC_Email
{
    /**
     * User email
     *
     * @var string
     */
    public $user_email;
    /**
     * User login
     *
     * @var string
     */
    public $user_login;
    /**
     * First name
     *
     * @var string
     */
    public $first_name;
    /**
     * Last name
     *
     * @var string
     */
    public $last_name;
    /**
     * Vendor name
     *
     * @var string
     */
    public $vendor_name;
    /**
     * Vendor description
     *
     * @var string
     */
    public $vendor_desc;
    /**
     * Vendor profile
     *
     * @var string
     */
    public $vendor_profile;
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
    public function trigger($args)
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
class WC_Product_Vendors_Registration_Email_To_Vendor extends \WC_Email
{
    /**
     * User email
     *
     * @var string
     */
    public $user_email;
    /**
     * User login
     *
     * @var string
     */
    public $user_login;
    /**
     * Password reset key
     *
     * @var string
     */
    public $password_reset_key;
    /**
     * Recipients for the email.
     *
     * @var string
     */
    public $recipient = '';
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
    public function trigger($args)
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
 * Payout Interface Class.
 *
 * Interface which payouts must adhere to.
 *
 * @category Payout
 * @package  WooCommerce Product Vendors/Payout Interface
 * @version  2.0.0
 */
interface WC_Product_Vendors_Vendor_Payout_Interface
{
    /**
     * Performs the logic to payout vendors
     *
     */
    public function do_payment($commissions);
}
/**
 * PayPal Mass Payments Class.
 *
 * Mass Payments by PayPal to mass pay vendor commission.
 *
 * @category Payout
 * @package  WooCommerce Product Vendors/PayPal Masspay
 * @version  2.0.35
 * @since 2.0.0
 */
class WC_Product_Vendors_PayPal_MassPay implements \WC_Product_Vendors_Vendor_Payout_Interface
{
    private $clientID;
    private $clientSecret;
    private $apiContext;
    private $environment;
    /**
     * Constructor
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param array of objects $commissions
     * @return bool
     */
    public function __construct()
    {
    }
    /**
     * Sets the API context
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function set_api_context()
    {
    }
    /**
     * Sends payment 
     *
     * @since 2.0.0
     * @version 2.0.35
     * @return string $batch_id
     */
    public function do_payment($commissions)
    {
    }
    /**
     * Gets the batch status from PayPal
     *
     * @access public
     * @since 2.0.6
     * @version 2.0.6
     * @return object $result
     */
    public function get_batch_status($batch_id)
    {
    }
}
/**
 * Class WC_Product_Vendors_Webhook_Handler.
 * Mass payment is sent via batch payments and they're asynchronous.
 * Therefore notification webhooks are needed to obtain payment
 * information such as if they payment was successful or not.
 *
 * Handles the PayPal Masspay webhooks.
 * @since 2.0.35
 */
class WC_Product_Vendors_Webhook_Handler
{
    private $clientID;
    private $clientSecret;
    private $apiContext;
    private $environment;
    private $events;
    private $webhook_id;
    /**
     * Number of minutes to wait before trying to create a Webhook handler.
     */
    const WEBHOOK_DEFAULT_WAIT_TIME = 1;
    /**
     * Name for the option when a Webhook failure occurs.
     */
    const WEBHOOK_FAILURE_STATE = 'wcpv_webhook_failure_state';
    /**
     * Constructor.
     *
     * @since 2.0.35
     * @version 2.0.35
     */
    public function __construct()
    {
    }
    /**
     * Sets the API context.
     *
     * @since 2.0.35
     * @version 2.0.35
     */
    public function set_api_context()
    {
    }
    /**
     * Gets a list of all registered webhooks.
     *
     * @since 2.0.35
     * @version 2.0.35
     * @return mixed
     */
    public function get_all_webhooks()
    {
    }
    /**
     * Clears the webhook ID if a related option is updated.
     *
     * Runs on the action `update_option_{option_name}` for the options:
     *
     * - `wcpv_vendor_settings_paypal_masspay_environment`
     * - `wcpv_vendor_settings_paypal_masspay_client_id_sandbox`
     * - `wcpv_vendor_settings_paypal_masspay_client_secret_sandbox`
     * - `wcpv_vendor_settings_paypal_masspay_client_id_live`
     * - `wcpv_vendor_settings_paypal_masspay_client_secret_live`
     *
     * @since 2.5.1
     *
     * @param mixed  $old_value   The old option value.
     * @param mixed  $new_value   The new option value.
     * @param string $option_name The name of the option being updated.
     */
    public function maybe_clear_webhook($old_value, $new_value, $option_name)
    {
    }
    /**
     * Delete a specific webhook.
     *
     * @since 2.0.35
     * @version 2.0.35
     * @param string $webhook_id
     */
    public function delete_webhook($webhook_id)
    {
    }
    /**
     * Maybe create webhook. Only if we don't already have webhook ID.
     *
     * @since 2.0.35
     * @version 2.0.35
     */
    public function maybe_create_webhook()
    {
    }
    /**
     * Saves the newly created webhook id.
     *
     * @since 2.0.35
     * @version 2.0.35
     * @param string $id
     */
    public function save_webhook_id($id)
    {
    }
    /**
     * Creates webhook. From the docs, site may need to be under SSL to work.
     *
     * @since 2.0.35
     * @version 2.0.35
     */
    public function create_webhook()
    {
    }
    /**
     * Verify the incoming webhook notification to make sure it is legit.
     * Note that when testing, you cannot use the webhook simulator in the
     * PayPal developer's account as that does not work due to a bug on their
     * end.
     *
     * @since 2.0.35
     * @version 2.0.35
     * @param string $request_headers The request headers from PayPal.
     * @param string $request_body The request body from PayPal.
     * @return bool
     */
    public function is_valid_request($request_headers = \null, $request_body = \null)
    {
    }
    /**
     * Check incoming requests for PayPal Webhook data and process them.
     *
     * @since 2.0.35
     * @version 2.0.35
     */
    public function check_for_webhook()
    {
    }
    /**
     * Gets the incoming request headers. Some servers are not using
     * Apache and "getallheaders()" will not work so we may need to
     * build our own headers.
     *
     * @since 2.0.35
     * @version 2.0.35
     */
    public function get_request_headers()
    {
    }
    /**
     * Processes the incoming webhook.
     *
     * @since 2.0.35
     * @version 2.0.35
     * @param string $request_body
     */
    public function process_webhook($request_body = \null)
    {
    }
}
/**
 * Class WC_Product_Vendors_Bookings_Global_Availability_Legacy
 */
class WC_Product_Vendors_Bookings_Global_Availability_Legacy
{
    /**
     * Init integration.
     */
    public function init()
    {
    }
    /**
     * Register all hooks.
     */
    protected function register_hooks()
    {
    }
    /**
     * Remove bookings global availability menu
     *
     * @since 2.0.2
     * @version 2.0.2
     * @return bool
     */
    public function remove_bookings_global_availability_menu()
    {
    }
    /**
     * Adds the submenu page
     *
     * @since 2.1.0
     * @version 2.1.0
     * @return bool
     */
    public function add_bookings_global_availability_menu()
    {
    }
    /**
     * Renders the global availability page
     *
     * @since 2.1.0
     * @version 2.1.0
     * @return bool
     */
    public function global_availability_page()
    {
    }
    /**
     * When saving global availability rules, save it in vendor meta as well
     *
     * @since 2.1.0
     * @version 2.1.0
     *
     * @param array $new_values
     * @param array $old_values
     *
     * @return array $new_values
     */
    public function before_update_global_availability($new_values, $old_values)
    {
    }
    /**
     * Filter out only rules for the vendor
     *
     * @since 2.1.0
     * @version 2.1.0
     *
     * @param array $option
     *
     * @return array|false $option
     */
    public function before_display_global_availability($option = \false)
    {
    }
    /**
     * Filters the global availability rules for specific vendor's products only
     *
     * @since 2.1.0
     * @version 2.1.0
     *
     * @param array  $rules
     * @param int    $for_resource
     * @param object $booking
     *
     * @return array $availability_rules
     */
    public function filter_availability_rules($rules, $for_resource, $booking)
    {
    }
}
/**
 * Class WC_Product_Vendors_Bookings_Global_Availability
 *
 * @since 2.1.15
 */
class WC_Product_Vendors_Bookings_Global_Availability
{
    /**
     * Cache vendor data to prevent extra queries.
     *
     * @var array
     */
    private $bookings_to_vendors_cache = array();
    /**
     * Cache vendor rules for performance improvements.
     *
     * @var array
     */
    private $vendor_rules_cache = array();
    /**
     * Init Integration.
     */
    public function init()
    {
    }
    /**
     * Register all hooks.
     */
    protected function register_hooks()
    {
    }
    /**
     * Migrate global availability rules from WP option to global availability table.
     */
    public function maybe_migrate_old_global_availability_option()
    {
    }
    /**
     * Output the vendor header for the table.
     */
    public function extra_global_availability_fields_header()
    {
    }
    /**
     * Output the vendor if set.
     *
     * @param WC_Global_Availability $availability Current availability object.
     */
    public function extra_global_availability_fields(\WC_Global_Availability $availability)
    {
    }
    /**
     * Adds vendor_id to meta data on save.
     *
     * @param WC_Global_Availability $availability Object being saved.
     * @param WC_Data_Store          $data_store Data Store.
     */
    public function before_global_availability_save(\WC_Global_Availability $availability, \WC_Data_Store $data_store)
    {
    }
    /**
     * Removes vendor_id from meta data on delete.
     *
     * @param WC_Global_Availability            $availability Object being deleted.
     * @param WC_Global_Availability_Data_Store $data_store Data Store.
     */
    public function before_global_availability_delete(\WC_Global_Availability $availability, \WC_Global_Availability_Data_Store $data_store)
    {
    }
    /**
     * Filter global availability by vendor.
     *
     * @since 2.1.70 Add logic to apply filter to availability rules on  "Bookings > Settings > Store Availability"
     *
     * @param WC_Global_Availability[] $availabilities All global availability objects.
     *
     * @return WC_Global_Availability[]
     */
    public function filter_global_availability(array $availabilities)
    {
    }
    /**
     * Filters the global availability rules for specific vendor's products only
     *
     * @param array  $rules All rules.
     * @param int    $for_resource Resource id rules are for.
     * @param object $booking Current Bookable product.
     *
     * @return array $availability_rules
     */
    public function filter_availability_rules($rules, $for_resource, $booking)
    {
    }
}
/**
 * Class WC_Product_Vendors_Bookings_Legacy
 */
class WC_Product_Vendors_Bookings_Legacy
{
    /**
     * Init integration.
     */
    public function init()
    {
    }
    /**
     * Register all hooks.
     *
     * @since 2.1.15
     */
    protected function register_hooks()
    {
    }
    /**
     * Remove bookings resources page
     *
     * @since 2.0.0
     * @version 2.0.0
     * @return array $post_type_args
     */
    public function remove_resource($post_type_args)
    {
    }
    /**
     * Removes post type if bookings is not enabled
     *
     * @since 2.0.0
     * @version 2.0.0
     * @param array $args
     * @return array $args
     */
    public function maybe_remove_wc_booking_post_type($args)
    {
    }
    /**
     * Removes post type if bookings is not enabled
     *
     * @since 2.0.0
     * @version 2.0.0
     * @param array $args
     * @return array $args
     */
    public function maybe_remove_bookable_person_post_type($args)
    {
    }
}
/**
 * Class WC_Product_Vendors_Bookings
 */
class WC_Product_Vendors_Bookings
{
    /**
     * Init integration.
     */
    public function init()
    {
    }
    /**
     * Register all hooks.
     *
     * @since 2.1.15
     */
    protected function register_hooks()
    {
    }
    /**
     * Checks if we need to require additional capabilities for editing other vendor's stuff.
     *
     * @param array  $caps Currently required capabilities.
     * @param string $cap Original requested capability.
     * @param int    $user_id Current User id.
     * @param array  $args object id in use.
     *
     * @return array
     */
    public function map_vendor_capabilities($caps, $cap, $user_id, $args)
    {
    }
    /**
     *
     * @param array        $allcaps An array of all the user's capabilities.
     * @param array|string $caps    Actual capabilities for meta capability.
     * @param array        $args    Optional parameters passed to has_cap(), typically object ID.
     * @param WP_User      $user    The user object.
     *
     * @return array
     */
    public function add_booking_caps(array $allcaps, $caps, array $args, \WP_User $user)
    {
    }
    /**
     * Add dashboard widgets for vendors
     *
     * @since 2.1.0
     * @version 2.1.0
     * @return bool
     */
    public function add_vendor_dashboard_widget()
    {
    }
    /**
     * Renders the bookings dashboard widgets for vendors
     *
     * @since 2.0.0
     * @since 2.2.0 Use WC_Product_Vendor_Transient_Manager class to manage transient data.
     * @version 2.0.0
     */
    public function render_bookings_dashboard_widget()
    {
    }
    /**
     * Filters the product ids for logged in vendor
     *
     * @since 2.0.0
     * @version 2.0.0
     * @param string $term the slug of the term
     * @return array $ids product ids
     */
    public function filter_booking_products($item)
    {
    }
    /**
     * Filters the product type
     *
     * @since 2.0.9
     * @param array $types
     * @return array $post_type_args
     */
    public function filter_product_type($types)
    {
    }
    /**
     * This hack is needed because in $this->filter_product_type function we unset bookings.
     * WooCommerce doesn't know how to handle this and simply shows the output if the bookable
     * product is no longer available in the type.
     *
     * @since 2.1.0
     */
    public function maybe_hide_bookings_fields()
    {
    }
    /**
     * Modifies the booking status views
     *
     * @since 2.0.9
     * @version 2.0.9
     * @param array $views
     * @return array $post_type_args
     */
    public function booking_status_views($views)
    {
    }
    /**
     * Remove bookings menu item when user has no access
     *
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function remove_bookings_menu()
    {
    }
    /**
     * Filter products for specific vendor
     *
     * @since 2.0.0
     * @version 2.0.0
     * @param array $query_args
     * @return array $products
     */
    public function filter_products($query_args)
    {
    }
    /**
     * Filter products booking list to specific vendor
     *
     * @since 2.0.0
     * @version 2.0.0
     * @param array $query
     * @return bool
     */
    public function filter_products_booking_list($query)
    {
    }
    /**
     * Filter products booking calendar to specific vendor
     *
     * @since 2.0.0
     * @version 2.0.0
     * @param array $booking_ids booking ids
     * @return array
     */
    public function filter_bookings_calendar($booking_ids)
    {
    }
    /**
     * Add vendor email to bookings admin emails
     *
     * @since 2.0.0
     * @version 2.0.0
     * @param array  $recipients
     * @param object $this_email
     * @return array $recipients
     */
    public function filter_booking_emails($recipients, $this_email)
    {
    }
    public function create_booking_redirect($location)
    {
    }
    /**
     * Should clear vendor transient cache.
     *
     * @since 2.0.21
     * @since 2.2.0 Use WC_Product_Vendor_Transient_Manager class to delete transient data.
     * @version 2.0.21
     * @return bool
     */
    public function clear_recent_bookings_cache_on_create()
    {
    }
    /**
     * Clears the recent bookings cache on dashboard
     *
     * @since 2.0.21
     * @since 2.2.0 Use WC_Product_Vendor_Transient_Manager class to delete transient data.
     * @version 2.0.21
     * @return bool
     */
    public function clear_recent_bookings_cache_on_save_post($post_id, $post)
    {
    }
    /**
     * Clears the bookings query cache on page load
     *
     * @since 2.0.1
     * @since 2.2.0 Use WC_Booking_Cache class to delete booking cache.
     * @since 2.1.70  Add condition to prevent PHP warning. Access property from valid $current_screen (WP_Screen object)
     * @version 2.0.1
     * @return bool
     */
    public function clear_bookings_cache()
    {
    }
    /**
     * Filter the edit order URL when viewing a booking.
     *
     * Replaces the edit order URL with a link to the vendor view page when the
     * vendor does not have permission to edit the order.
     *
     * @since 2.2.0
     *
     * @param string   $edit_url URL where we can edit the order.
     * @param WC_Order $order    Order object.
     * @return string  Filtered URL pointing to vendor page.
     */
    public function filter_edit_order_url($edit_url, $order)
    {
    }
    /**
     * Filter the view order URL when viewing a booking.
     *
     * @param string   $url      URL where we can view booking details.
     * @param int      $order_id Order ID.
     * @param WC_Order $order    Order object.
     * @return string  Filtered URL pointing to vendor page.
     */
    public function admin_view_order_url($url, $order_id, $order)
    {
    }
}
class WC_Product_Vendors_Product_Enquiry
{
    /**
     * Constructor
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function __construct()
    {
    }
    /**
     * Add vendor email to recipient for customer inquiry on products
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return array $send_to
     */
    public function send_to($send_to, $product_id)
    {
    }
}
class WC_Product_Vendors_Per_Product_Shipping_Admin
{
    /**
     * Constructor
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function __construct()
    {
    }
    /**
     * Enqueue scripts
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function enqueue_scripts()
    {
    }
    /**
     * Adds shipping rules table to product edit page variation
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param int $post_id
     * @return bool
     */
    public function add_shipping_rules_table_variation($loop, $variation_data, $variation)
    {
    }
    /**
     * Adds shipping rules table to product edit page
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @param int $post_id
     * @return bool
     */
    public function add_shipping_rules_table($post_id = 0)
    {
    }
    /**
     * Renders the shipping rules table
     *
     * @access  public
     * @since   2.0.0
     * @since   2.1.72 Add "Import CSV (override)" button.
     *
     * @param int $post_id
     *
     * @return bool
     * @version 2.0.0
     */
    public function render_shipping_rules_table($post_id = 0)
    {
    }
    /**
     * Replaces the aseterisks with empty string
     *
     * @param string $rule
     * @return string
     */
    public function replace_aseterisk($rule)
    {
    }
    /**
     * Saves the shipping rules
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function save($post_id)
    {
    }
    /**
     * Saves the shipping rules (variations)
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function save_variation($post_id, $index)
    {
    }
    /**
     * Registers our shipping rules importer
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function register_importer()
    {
    }
    /**
     * Loads our shipping rules importer
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function importer()
    {
    }
}
class WC_Product_Vendors_Per_Product_Shipping_Importer extends \WP_Importer
{
    public $id;
    public $import_page;
    public $delimiter;
    public $posts = array();
    public $imported;
    public $skipped;
    public $vendor_id;
    /**
     * __construct function.
     *
     * @access public
     * @return void
     */
    public function __construct()
    {
    }
    /**
     * Registered callback function for the WordPress Importer
     *
     * Manages the three separate stages of the CSV import process
     */
    public function dispatch()
    {
    }
    /**
     * format_data_from_csv function.
     *
     * @access public
     * @param mixed $data
     * @param mixed $enc
     * @return void
     */
    public function format_data_from_csv($data, $enc)
    {
    }
    /**
     * import function.
     *
     * @access public
     * @since  2.1.72 Remove existing product shipping rules when "override_product_id" set.
     *
     * @param mixed $file
     *
     * @return void
     */
    public function import($file)
    {
    }
    /**
     * Performs post-import cleanup of files and the cache
     */
    public function import_end()
    {
    }
    /**
     * Handles the CSV upload and initial parsing of the file to prepare for
     * displaying author import options
     *
     * @return bool False if error uploading or invalid file, true otherwise
     */
    public function handle_upload()
    {
    }
    /**
     * header function.
     *
     * @access public
     * @return void
     */
    public function header()
    {
    }
    /**
     * footer function.
     *
     * @access public
     * @return void
     */
    public function footer()
    {
    }
    /**
     * greet function.
     *
     * @access public
     * @since  2.1.72 Add "override_product_id" query param to form action url and warning about shipping rule(s) override.
     * @return void
     */
    public function greet()
    {
    }
    /**
     * Added to http_request_timeout filter to force timeout at 60 seconds during import
     * @return int 60
     */
    public function bump_request_timeout($val)
    {
    }
}
/**
 * Per Product Shipping Class.
 *
 * Adds per product shipping method to WooCommerce
 *
 * @category Per Product Shipping
 * @package  WooCommerce Product Vendors/Per Product Shipping
 * @version  2.0.0
 */
class WC_Product_Vendors_Per_Product_Shipping_Method extends \WC_Shipping_Method
{
    /**
     * Cost per product.
     *
     * @var float $cost Per product cost.
     */
    public $cost;
    /**
     * Order fee.
     *
     * @var float $order_fee Order fee.
     */
    public $order_fee;
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Initialise Gateway Settings Form Fields
     */
    public function init_form_fields()
    {
    }
    /**
     * Validates the value of the default product cost field.
     * Checks for numeric and empty values.
     *
     * @param string $key   The key name.
     * @param string $value The field value.
     */
    public function validate_cost_field($key, $value)
    {
    }
    /**
     * Validates the value of the Handling Fee (per product) field.
     * Checks for numeric, empty and string representation of percentage values.
     *
     * @param string $key   The key name.
     * @param string $value The field value.
     */
    public function validate_fee_field($key, $value)
    {
    }
    /**
     * Validates the value of the Handling Fee (per order) field.
     * Checks for numeric, empty and string representation of percentage values.
     *
     * @param string $key   The key name.
     * @param string $value The field value.
     */
    public function validate_order_fee_field($key, $value)
    {
    }
    /**
     * Returns true if the amount format is valid.
     *
     * @param string|integer|float $amount The amount value.
     *
     * @return bool
     */
    public static function is_amount_format_valid($amount)
    {
    }
    /**
     * Returns true if the percentage format is valid.
     *
     * @param string|integer|float $percentage The percentage value.
     *
     * @return bool
     */
    public static function is_percentage_format_valid($percentage)
    {
    }
    /**
     * Calculate shipping when this method is used standalone.
     */
    public function calculate_shipping($package = array())
    {
    }
}
/**
 * Per Product Shipping Class Controller.
 *
 * Adds per product shipping method to WooCommerce
 *
 * @category Per Product Shipping
 * @package  WooCommerce Product Vendors/Per Product Shipping
 * @version  2.0.0
 */
class WC_Product_Vendors_Per_Product_Shipping
{
    /**
     * Constructor
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function __construct()
    {
    }
    /**
     * Loads shipping method into WC
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function load_shipping_method()
    {
    }
    /**
     * Registers shipping method into WC
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function register_shipping_method($methods)
    {
    }
}
/**
 * Vendors Widget.
 *
 * Displays vendor context widget.
 *
 * @category Widgets
 * @package  WooCommerce Product Vendors/Widgets/Widget
 * @version  2.0.0
 * @extends  WP_Widget
 */
class WC_Product_Vendors_Vendor_Widget extends \WP_Widget
{
    public function __construct()
    {
    }
    public function widget($args, $instance)
    {
    }
    public function update($new_instance, $old_instance)
    {
    }
    public function form($instance)
    {
    }
}
// WRCS: DEFINED_VERSION.
/**
 * Main class.
 *
 * @package WC_Product_Vendors
 * @since 2.0.0
 * @version 2.0.0
 */
class WC_Product_Vendors
{
    private static $_instance = \null;
    /**
     * Get the single instance aka Singleton
     *
     * @since 2.0.0
     * @version 2.0.0
     * @return WC_Product_Vendors
     */
    public static function instance()
    {
    }
    /**
     * Prevent cloning
     *
     * @since 2.0.0
     * @version 2.0.0
     */
    public function __clone()
    {
    }
    /**
     * Prevent unserializing instances
     *
     * @since 2.0.0
     * @version 2.0.0
     */
    public function __wakeup()
    {
    }
    /**
     * Construct
     *
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    private function __construct()
    {
    }
    /**
     * Define constants
     *
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    private function define_constants()
    {
    }
    /**
     * Include all files needed
     *
     * @since 2.0.0
     * @version 2.1.0
     * @return bool
     */
    public function dependencies()
    {
    }
    /**
     * Initializes hooks
     *
     * @access private
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    private function init_hooks()
    {
    }
    /**
     * Initializes the CLI
     *
     * @access private
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function init_cli()
    {
    }
    /**
     * Initialize cache clearing hooks
     *
     * @since 2.4.0
     * @return void
     */
    private function cache_hooks()
    {
    }
    /**
     * Init
     *
     * @access public
     * @since 2.0.0
     * @version 2.1.5
     * @return bool
     */
    public function init()
    {
    }
    /**
     * Load the plugin text domain for translation.
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return bool
     */
    public function load_plugin_textdomain()
    {
    }
    /**
     * WooCommerce fallback notice.
     *
     * @access public
     * @since 2.0.0
     * @version 2.0.0
     * @return string
     */
    public function woocommerce_missing_notice()
    {
    }
    /**
     * PHP version fallback notice.
     *
     * @access public
     * @since 2.1.5
     * @version 2.1.5
     * @return string
     */
    public function php_version_notice()
    {
    }
    /**
     * Declares feature compatibility
     *
     * @since 2.1.68
     */
    public function declare_feature_compatibility()
    {
    }
    /**
     * Add links on the plugins page.
     *
     * @param  array $links Default plugin links.
     * @return array        Default + added plugin links.
     */
    public function plugin_links($links)
    {
    }
}
\define('WC_PRODUCT_VENDORS_VERSION', '2.6.2');