<?php
/**
 * Generated stub declarations for woocommerce-checkout-field-editor 1.7.28.
 * @see https://github.com/woocommerce/all-plugins/tree/stubs
 */

/**
 * Checkout Field Editor Export Handler
 *
 * Adds support for:
 *
 * + Customer / Order CSV Export
 * + Customer / Order XML Export
 *
 * @since 1.2.5
 */
class WC_Checkout_Field_Editor_Export_Handler
{
    /** @var array checkout fields */
    private $fields;
    /**
     * Setup class
     *
     * @since 1.2.5
     */
    public function __construct()
    {
    }
    /** Customer / Order CSV Export ****************************************/
    /**
     * Adds support for Customer/Order CSV Export by adding column headers for each field.
     *
     * @since 1.2.5
     * @param array $headers existing array of header key/names for the CSV export
     * @return array
     */
    public function add_fields_to_csv_export_column_headers($headers, $csv_generator)
    {
    }
    /**
     * Adds support for Customer/Order CSV Export by adding checkout editor field data.
     *
     * @since 1.2.5
     * @param array                                   $order_data generated order data matching the column keys in the header
     * @param WC_Order                                $order order being exported
     * @param \WC_Customer_Order_CSV_Export_Generator $csv_generator instance
     * @return array
     */
    public function add_fields_to_csv_export_column_data($order_data, $order, $csv_generator)
    {
    }
    /**
     * Determine if the CSV Export format/format definition are set to export
     * one row per item.
     *
     * @since 1.5.3
     * @param \WC_Customer_Order_CSV_Export_Generator $csv_generator instance
     * @return bool
     */
    private function is_one_row_per_item($csv_generator)
    {
    }
    /** Customer / Order XML Export ****************************************/
    /**
     * Adds support for Customer/Order XML Export Suite by adding checkout editor field data.
     *
     * @since 1.4.6
     * @param array    $order_format array of order data to be exported
     * @param WC_Order $order order being exported
     * @return array modified array of order data to be exported
     */
    public function add_fields_to_xml_export_order_list_format($order_format, $order)
    {
    }
    /**
     * Set all registered fields.
     *
     * @since 1.2.5
     * @return array
     */
    private function set_fields()
    {
    }
    /**
     * Get all registered fields.
     *
     * @since 1.4.9
     * @return array
     */
    public function get_fields()
    {
    }
}
/**
 * Class to handle displaying of checkout fields on order details page and emails.
 *
 * @package WooCommerce/Checkout_Field_Editor
 */
/**
 * Class WC_Checkout_Field_Editor_Order_Details
 */
class WC_Checkout_Field_Editor_Order_Details
{
    /**
     * Register Hooks
     */
    public function register_hooks()
    {
    }
    /**
     * Filter located template to load template from our plugin.
     *
     * @param string $template      Template found other places.
     * @param string $template_name Name of template we are looking for.
     * @param string $template_path Current path we are looking in.
     *
     * @return string
     */
    public function woocommerce_locate_template($template, $template_name, $template_path)
    {
    }
    /**
     * Display the additional fields.
     *
     * @param WC_Order $order Current Order.
     */
    public function after_order_table($order)
    {
    }
    /**
     * Display the additional fields in emails.
     *
     * @param WC_Order $order Current Order.
     * @param bool     $sent_to_admin If we are sending email to admin.
     * @param bool     $plain_text If we are sending plain text email.
     * @param string   $email Email address.
     */
    public function email_after_order_table($order, $sent_to_admin, $plain_text, $email)
    {
    }
    /**
     * Output the custom fields formatted for html page.
     *
     * @param WC_Order $order Current Order.
     * @param string   $type Type of field we are displaying.
     */
    public static function display_custom_fields($order, $type)
    {
    }
    /**
     * Display Custom fields formatted for email.
     *
     * @param WC_Order $order Current Order.
     * @param string   $type Type of field we are displaying.
     */
    public static function display_custom_fields_email($order, $type)
    {
    }
    /**
     * Display Custom fields formatted for plain text email.
     *
     * @param WC_Order $order Current Order.
     * @param string   $type Type of field we are displaying.
     */
    public static function display_custom_fields_plain($order, $type)
    {
    }
    /**
     * Fetch custom checkout fields filtered by type and context.
     *
     * @param WC_Order $order Current Order.
     * @param string   $type Type to filter by.
     * @param string   $context Context to filter by.
     *
     * @return array
     */
    private static function get_custom_checkout_fields($order, $type, $context)
    {
    }
    /**
     * Check if the order has additional billing fields to display.
     *
     * @since 1.5.37
     *
     * @param WC_Order $order Current Order.
     *
     * @return bool
     */
    public static function has_custom_billing_checkout_fields($order)
    {
    }
    /**
     * Check if the order has additional shipping fields to display.
     *
     * @since 1.5.37
     *
     * @param WC_Order $order Current Order.
     *
     * @return bool
     */
    public static function has_custom_shipping_checkout_fields($order)
    {
    }
}
/**
 * Checkout Field Editor PIP Integration
 *
 * Adds support for:
 *
 * + Print Invoices & Packing lists
 *
 * @since 1.6.0
 */
class WC_Checkout_Field_Editor_PIP_Integration
{
    /**
     * Add actions and filters
     *
     * @since 1.6.0
     */
    public function __construct()
    {
    }
    /**
     * Extend PIP template settings
     *
     * @since 1.6.0
     * @param array $settings
     * @return array
     */
    public function add_settings($settings)
    {
    }
    /**
     * Show save button in general tab
     *
     * @since 1.6.0
     * @param bool   $hide_save_button
     * @param string $current_section
     * @return array
     */
    public function show_save_button($hide_save_button, $current_section)
    {
    }
    /**
     * Display custom checkout fields on view order pages.
     *
     * @param object $order
     */
    public function display_custom_fields_view_emails($order)
    {
    }
    /**
     * Output custom fields in PIP templates
     *
     * @since 1.6.0
     * @param string          $document_type PIP Document type
     * @param string          $action Current action running on Document
     * @param WC_PIP_Document $document PIP Document object
     * @param WC_Order        $order Order object
     */
    public function custom_fields($document_type, $action, $document, $order)
    {
    }
    /**
     * Output some styles for PIP documents
     *
     * @since 1.6.0
     */
    public function add_styles()
    {
    }
}
class WC_Checkout_Field_Editor_Privacy extends \WC_Abstract_Privacy
{
    /**
     * Constructor
     *
     */
    public function __construct()
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
 * WC_Checkout_Field_Editor_Tracks
 */
class WC_Checkout_Field_Editor_Tracks
{
    /**
     * Tracks event name prefix.
     */
    const PREFIX = 'checkout_field_editor_';
    /**
     * Record an event in Tracks - this is the preferred way to record events from PHP.
     *
     * @param string $event_name The name of the event.
     * @param array  $properties Custom properties to send with the event.
     * @return bool|WP_Error True for success or WP_Error if the event pixel could not be fired.
     */
    public static function record_event($event_name, $properties = array())
    {
    }
}
/**
 * WC_Checkout_Field_Editor class.
 */
class WC_Checkout_Field_Editor
{
    /**
     * Locale fields.
     *
     * @var array
     */
    public $locale_fields = array();
    /**
     * Default fields.
     *
     * @var array
     */
    public $default_fields = array();
    /**
     * Screen ID.
     *
     * @var bool
     */
    public $screen_id = \false;
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Menu function.
     */
    public function menu()
    {
    }
    /**
     * Add_screen_id function.
     *
     * @param array $ids Screen IDs.
     * @return array
     */
    public function add_screen_id($ids)
    {
    }
    /**
     * Scripts function.
     */
    public function scripts()
    {
    }
    /**
     * Welcome function.
     */
    public function welcome()
    {
    }
    /**
     * Debug_button function.
     *
     * @param array $old Old debug buttons.
     * @return array
     */
    public function debug_button($old)
    {
    }
    /**
     * Debug_button_action function.
     */
    public function debug_button_action()
    {
    }
    /**
     * The_editor function.
     */
    public function the_editor()
    {
    }
    /**
     * Render field options value.
     *
     * @param array $options Options.
     * @return string
     */
    private function get_field_options_value($options)
    {
    }
    /**
     * Get_fields function.
     *
     * @param string $key Key.
     * @return array
     */
    public static function get_fields($key)
    {
    }
    /**
     * List of restricted field names that shouldn't be used.
     *
     * @since 1.5.7
     * @return array
     */
    public function restricted_field_names()
    {
    }
    /**
     * Sanitize field names.
     *
     * @since 1.5.7
     * @param string $field_name Field name.
     * @return string
     */
    public function sanitize_field_name($field_name)
    {
    }
    /**
     * Save_options function.
     *
     * @param string $tab Tab.
     * @return void
     */
    public function save_options($tab)
    {
    }
    /**
     * Sort_fields function.
     *
     * @param array $a A.
     * @param array $b B.
     * @return int
     */
    public function sort_fields($a, $b)
    {
    }
    /**
     * Save_data function.
     *
     * @param int   $order_id Order ID.
     * @param array $posted Posted.
     * @return void
     */
    public function save_data($order_id, $posted)
    {
    }
    /**
     * Sets any default address field.
     *
     * @since 1.5.35
     * @param array $fields Default fields.
     * @return array $fields Modified fields.
     */
    public function set_default_address_field($fields)
    {
    }
}
/**
 * Main plugin functions.
 *
 * @package woocommerce-checkout-field-editor
 */
/**
 * Initialize the Checkout Field Editor.
 */
function woocommerce_init_checkout_field_editor()
{
}
/**
 * Updates the plugin version to DB.
 *
 * @since 1.5.6
 * @version 1.5.6
 */
function wc_checkout_fields_update_plugin_version()
{
}
/**
 * Performs installation processes such as migrations or data update.
 *
 * @since 1.5.6
 * @version 1.5.6
 */
function wc_checkout_fields_install()
{
}
/**
 * Migrates pre WC3.0 data. Pre WC30 checkout field ordering is using
 * "order" as the key. After WC30, its using "priority" as the key.
 * This migration will rename the key name and re-set the priority values
 * to align with WC core.
 *
 * @since 1.5.6
 * @version 1.5.6
 */
function wc_checkout_fields_wc30_migrate()
{
}
/**
 * Load function for the export handler.
 */
function woocommmerce_init_cfe_export_handler()
{
}
/**
 * Modify billing fields function.
 *
 * @param mixed $old Original list of billing fields.
 */
function wc_checkout_fields_modify_billing_fields($old)
{
}
/**
 * Mpdify shipping fields function.
 *
 * @param mixed $old Original list of shipping fields.
 */
function wc_checkout_fields_modify_shipping_fields($old)
{
}
/**
 * Modify order fields function.
 *
 * @param mixed $fields List of fields to modify.
 */
function wc_checkout_fields_modify_order_fields($fields)
{
}
/**
 * Adding our own action here so that 3rd party plugins can remove this
 * because they may need to keep the additional information header even
 * when order comments are disabled
 */
function wc_checkout_fields_maybe_hide_additional_info_header()
{
}
/**
 * Modify the array of billing and shipping fields.
 *
 * @param mixed $fields       New checkout fields from this plugin.
 * @param mixed $old_fields Existing checkout fields from WC.
 * @param string $field_type Field type (billing/shipping) for database updates.
 */
function wc_checkout_fields_modify_fields($fields, $old_fields, $field_type)
{
}
/**
 * Enqueue scripts for checkout fields.
 */
function wc_checkout_fields_scripts()
{
}
/**
 * Markup for date picker field.
 *
 * @param string $field Field markup (default: '').
 * @param mixed  $key   Field key.
 * @param mixed  $args  List of arguments to manipulate how it's displayed.
 * @param mixed  $value Field value.
 */
function wc_checkout_fields_date_picker_field($field = '', $key = '', $args = array(), $value = '')
{
}
/**
 * Markup for radio field.
 *
 * @param string $field Field markup (default: '').
 * @param mixed  $key   Field key.
 * @param mixed  $args  List of arguments to manipulate how it's displayed.
 * @param mixed  $value Field value.
 */
function wc_checkout_fields_radio_field($field = '', $key = '', $args = array(), $value = '')
{
}
/**
 * Markup for multiselect field.
 *
 * @param string $field Field markup (default: '').
 * @param mixed  $key   Field key.
 * @param mixed  $args  List of arguments to manipulate how it's displayed.
 * @param mixed  $value Field value.
 */
function wc_checkout_fields_multiselect_field($field = '', $key = '', $args = array(), $value = '')
{
}
/**
 * Markup for heading field.
 *
 * @param string $field Field markup (default: '').
 * @param mixed  $key   Field key.
 * @param mixed  $args  List of arguments to manipulate how it's displayed.
 * @param mixed  $value Field value.
 */
function wc_checkout_fields_heading_field($field = '', $key = '', $args = array(), $value = '')
{
}
/**
 * Checkout fields validation function.
 *
 * @param mixed $posted Fields to validate.
 */
function wc_checkout_fields_validation($posted)
{
}
/**
 * Get custom checkout fields.
 *
 * @param  object $order WC_Order object.
 * @param  array  $types Field types to retrieve.
 * @return array  $custom_fields
 */
function wc_get_custom_checkout_fields($order, $types = array('billing', 'shipping', 'additional'))
{
}
/**
 * Get custom checkout fields data for admin order area
 *
 * @param object $order WC_Order object.
 * @param array  $types Field types to retrieve.
 */
function wc_get_custom_fields_for_admin_order($order, $types)
{
}
/**
 * Display custom billing checkout fields in admin order area.
 *
 * @param object $order WC_Order object.
 */
function wc_display_custom_billing_fields_admin_order($order)
{
}
/**
 * Display custom shipping and additional checkout fields in admin order area.
 *
 * @param object $order WC_Order object.
 */
function wc_display_custom_shipping_fields_admin_order($order)
{
}
/**
 * Remove the localization WC core script to ensure
 * the order remains how it is set in the field editor
 * settings.
 */
function wc_checkout_fields_dequeue_address_i18n()
{
}
/**
 * Returns the value of an order's checkout field
 *
 * @param WC_Order $order Field's order.
 * @param string   $name Field's name.
 * @param array    $options Field's properties.
 * @return string
 */
function wc_get_checkout_field_value($order, $name, $options)
{
}
\define('WC_CHECKOUT_FIELD_EDITOR_VERSION', '1.7.28');
// WRCS: DEFINED_VERSION.
\define('WC_CHECKOUT_FIELD_EDITOR_PATH', \untrailingslashit(\plugin_dir_path(__FILE__)));
/**
 * Initialize plugin.
 */
function wc_checkout_fields_load()
{
}
/**
 * WooCommerce Deactivated Notice.
 */
function wc_checkout_fields_woocommerce_deactivated()
{
}
/**
 * Performs processes when plugin is activated.
 *
 * @since 1.5.6
 * @version 1.5.6
 */
function wc_checkout_fields_activate()
{
}
/**
 * Add plugin action links.
 *
 * @param  array  $actions The original array of plugin action links.
 * @param  string $plugin_file The path to the plugin file.
 * @return array $actions The updated array of plugin action links.
 * @since 1.5.36
 * @see https://developer.wordpress.org/reference/hooks/plugin_action_links_plugin_file/
 */
function wc_checkout_fields_plugin_action_links($actions, $plugin_file)
{
}
/**
 * Add plugin meta links.
 *
 * @param  array  $plugin_meta The original array with the plugin's metadata.
 * @param  string $plugin_file The path to the plugin file.
 * @return array $plugin_meta The updated array with the plugin's metadata.
 * @since 1.5.36
 * @see https://developer.wordpress.org/reference/hooks/plugin_row_meta/
 */
function wc_checkout_fields_plugin_row_meta($plugin_meta, $plugin_file)
{
}