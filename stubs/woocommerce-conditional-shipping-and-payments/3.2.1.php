<?php
/**
 * Generated stub declarations for woocommerce-conditional-shipping-and-payments 3.2.1.
 * @see https://github.com/woocommerce/php-stubs
 */

/**
 * Registers the CSP restriction rules read ability.
 *
 * @class   WC_CSP_Get_Restriction_Rules_Ability
 * @version 3.2.1
 */
class WC_CSP_Get_Restriction_Rules_Ability implements \Automattic\WooCommerce\Abilities\AbilityDefinition
{
    /**
     * Ability name.
     */
    private const ABILITY_NAME = 'woocommerce-conditional-shipping-and-payments/get-restriction-rules';
    /**
     * Supported restriction IDs.
     */
    private const RESTRICTION_IDS = array('payment_gateways', 'shipping_methods', 'shipping_countries');
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
     * Execute the ability.
     *
     * @param mixed $input Ability input.
     * @return array|\WP_Error
     */
    public static function execute($input = array())
    {
    }
    /**
     * Check whether the current user can read CSP restriction rules.
     *
     * @param mixed $input Ability input.
     * @return bool
     */
    public static function can_read_restriction_rules($input = array()): bool
    {
    }
    /**
     * Resolve the product that owns a product's restriction rules: variations inherit the rules of their parent.
     *
     * @since 3.1.5
     *
     * @param  int $product_id Product ID.
     * @return int
     */
    private static function get_rule_owner_product_id($product_id)
    {
    }
    /**
     * Format rules for a specific rule scope.
     *
     * @param \WC_CSP_Restriction $restriction Restriction object.
     * @param array               $rules       Rule data.
     * @param string              $scope       Rule scope.
     * @param int                 $product_id  Product ID, or 0 for global rules.
     * @param string              $status      Status filter.
     * @return array
     */
    private static function format_rules_for_scope($restriction, array $rules, string $scope, int $product_id, string $status): array
    {
    }
    /**
     * Format restricted targets for response output.
     *
     * @param \WC_CSP_Restriction $restriction Restriction object.
     * @param array               $rule        Rule data.
     * @return array
     */
    private static function format_restricted_targets($restriction, array $rule): array
    {
    }
    /**
     * Format payment gateway targets.
     *
     * @param array $gateway_ids Gateway IDs.
     * @return array
     */
    private static function format_payment_gateway_targets(array $gateway_ids): array
    {
    }
    /**
     * Format shipping method targets.
     *
     * @param array $method_ids Method IDs.
     * @return array
     */
    private static function format_shipping_method_targets(array $method_ids): array
    {
    }
    /**
     * Format shipping destination targets.
     *
     * @param array $rule Rule data.
     * @return array
     */
    private static function format_shipping_destination_targets(array $rule): array
    {
    }
    /**
     * Format conditions for response output.
     *
     * Condition values are intentionally summarized instead of returned raw,
     * because some condition types can contain customer emails or postcodes.
     *
     * @param array $conditions Condition data.
     * @return array
     */
    private static function format_conditions(array $conditions): array
    {
    }
    /**
     * Count scalar values in condition data.
     *
     * @param mixed $value Value to count.
     * @return int
     */
    private static function count_values($value): int
    {
    }
    /**
     * Verify that CSP runtime services are available.
     *
     * @return true|\WP_Error
     */
    private static function ensure_csp_is_loaded()
    {
    }
    /**
     * Get read-only ability metadata.
     *
     * @return array
     */
    private static function get_meta(): array
    {
    }
    /**
     * Get the input schema.
     *
     * @return array
     */
    private static function get_input_schema(): array
    {
    }
    /**
     * Get the output schema.
     *
     * @return array
     */
    private static function get_output_schema(): array
    {
    }
    /**
     * Get the rule output schema.
     *
     * @return array
     */
    private static function get_rule_schema(): array
    {
    }
    /**
     * Normalize text for ability output.
     *
     * @param string $text Text value.
     * @return string
     */
    private static function clean_text($text): string
    {
    }
    /**
     * Normalize a condition modifier for ability output.
     *
     * @param string $modifier Modifier value.
     * @return string
     */
    private static function normalize_modifier($modifier): string
    {
    }
}
/**
 * Registers the CSP restriction types read ability.
 *
 * @class   WC_CSP_List_Restriction_Types_Ability
 * @version 3.2.1
 */
class WC_CSP_List_Restriction_Types_Ability implements \Automattic\WooCommerce\Abilities\AbilityDefinition
{
    /**
     * Ability name.
     */
    private const ABILITY_NAME = 'woocommerce-conditional-shipping-and-payments/list-restriction-types';
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
     * Execute the ability.
     *
     * @param mixed $input Ability input.
     * @return array|\WP_Error
     */
    public static function execute($input = array())
    {
    }
    /**
     * Check whether the current user can read CSP restriction types.
     *
     * @param mixed $input Ability input.
     * @return bool
     */
    public static function can_read_restriction_types($input = array()): bool
    {
    }
    /**
     * Get supported conditions for a restriction.
     *
     * @param string $restriction_id Restriction ID.
     * @param string $scope          Scope filter.
     * @return array
     */
    private static function get_supported_conditions(string $restriction_id, string $scope): array
    {
    }
    /**
     * Get the rule option keys that can store restricted targets.
     *
     * @param \WC_CSP_Restriction $restriction Restriction object.
     * @return string[]
     */
    private static function get_restricted_target_keys($restriction): array
    {
    }
    /**
     * Verify that CSP runtime services are available.
     *
     * @return true|\WP_Error
     */
    private static function ensure_csp_is_loaded()
    {
    }
    /**
     * Get read-only ability metadata.
     *
     * @return array
     */
    private static function get_meta(): array
    {
    }
    /**
     * Get the input schema.
     *
     * @return array
     */
    private static function get_input_schema(): array
    {
    }
    /**
     * Get the output schema.
     *
     * @return array
     */
    private static function get_output_schema(): array
    {
    }
    /**
     * Get condition list schema.
     *
     * @return array
     */
    private static function get_condition_list_schema(): array
    {
    }
    /**
     * Normalize text for ability output.
     *
     * @param string $text Text value.
     * @return string
     */
    private static function clean_text($text): string
    {
    }
}
/**
 * Abstract Condition class.
 *
 * @class    WC_CSP_Condition
 * @version  3.2.1
 */
class WC_CSP_Condition
{
    /**
     * Unique ID for the condition - must be set.
     *
     * @var string
     */
    public $id;
    /**
     * Condition title - must be set.
     *
     * @var string
     */
    public $title;
    /**
     * Supported global restriction ids - must be set.
     *
     * @var array
     */
    public $supported_global_restrictions = array();
    /**
     * Supported global restriction ids - must be set.
     *
     * @var array
     */
    public $supported_product_restrictions = array();
    /**
     * Supported global restriction ids - must be set.
     *
     * @var int
     */
    protected $priority = 10;
    /**
     * Runtime caching of the category hierarchical tree.
     *
     * @since 1.8.1
     *
     * @var array|null
     */
    protected static $product_categories_tree;
    /**
     * Retrieves the evaluation priority of this condition.
     *
     * @since  1.13.1
     *
     * @return int
     */
    public function get_priority()
    {
    }
    /**
     * Validate, process and return condition fields. Must be overridden to save condition data.
     *
     * @param  array $posted_condition_data
     * @return array|false
     */
    public function process_admin_fields($posted_condition_data)
    {
    }
    /**
     * Get condition admin html content. Must be overridden to display condition fields.
     *
     * @param  int|string $index           Restriction index, or a template placeholder.
     * @param  int|string $condition_index Condition index, or a template placeholder.
     * @param  array      $condition_data  Condition data.
     * @return string|void
     */
    public function get_admin_fields_html($index, $condition_index, $condition_data)
    {
    }
    /**
     * Evaluate if a condition field is in effect or not.
     *
     * @param  array $data   condition field data
     * @param  array $args   optional arguments passed by restrictions
     * @return boolean
     */
    public function check_condition($data, $args)
    {
    }
    /**
     * Return condition field-specific resolution message which is combined along with others into a single restriction "resolution message".
     *
     * @param  array $data   condition field data
     * @param  array $args   optional arguments passed by restriction
     * @return string|false
     */
    public function get_condition_resolution($data, $args)
    {
    }
    /**
     * Get title.
     *
     * @return string
     */
    public function get_title()
    {
    }
    /**
     * Indicates the existence of fields for a restriction type and scope.
     *
     * @param  string $restriction_id
     * @param  string $scope
     * @return boolean
     */
    public function has_fields($restriction_id, $scope = 'global')
    {
    }
    /**
     * Get supported global restriction ids.
     *
     * @return array
     */
    public function get_supported_global_restrictions()
    {
    }
    /**
     * Get supported product restriction ids.
     *
     * @return array
     */
    public function get_supported_product_restrictions()
    {
    }
    /**
     * Merge strings to create resolution message.
     *
     * @since  1.3.0
     *
     * @param  array<int|string> $titles  Titles to merge.
     * @param  array             $args    Merge options: 'rel', 'quotes' and 'prefix'.
     * @return string $merged_titles
     */
    protected function merge_titles($titles, $args = array())
    {
    }
    /**
     * Checks if the provided modifier is inside the modifiers haystack.
     *
     * @since  1.4.0
     *
     * @param  string $modifier
     * @param  mixed  $haystack
     * @return bool
     */
    protected function modifier_is($modifier, $haystack = array())
    {
    }
    /**
     * Set condition as active in the current request.
     *
     * @since  1.9.0
     *
     * @return void
     */
    protected function set_active()
    {
    }
}
/**
 * Abstract Condition class.
 *
 * @class    WC_CSP_Condition
 * @version  3.1.6
 */
class WC_CSP_Package_Condition extends \WC_CSP_Condition
{
    /**
     * Find count of shipping packages.
     *
     * @param  array $args
     * @return int
     */
    protected function get_package_count($args)
    {
    }
    /**
     * Shipping packages getter.
     *
     * @since  1.8.6
     *
     * @return array
     */
    protected function get_packages()
    {
    }
    /**
     * Find 1-base index of shipping package.
     *
     * @param  array $args
     * @return int
     */
    protected function get_package_index($args)
    {
    }
}
/**
 * Abstract Restriction class.
 *
 * @class    WC_CSP_Restriction
 * @version  3.2.1
 */
class WC_CSP_Restriction extends \WC_Settings_API
{
    /** @var string Unique ID for the Restriction - must be set */
    public $id;
    /** @var string Restriction title */
    public $title;
    /** @var string Restriction description */
    public $description;
    /**
     * @var array Restriction types supported
     *
     * If the restriction needs to hook itself into 'woocommerce_add_to_cart_validation', 'woocommerce_check_cart_items', 'woocommerce_update_cart_validation', or 'woocommerce_after_checkout_validation',
     * if must declare support for the 'add-to-cart', 'cart', 'cart-update', or 'checkout' validation types
     * and implement the 'WC_CSP_Add_To_Cart_Restriction', 'WC_CSP_Cart_Restriction', 'WC_CSP_Update_Cart_Restriction', or 'WC_CSP_Checkout_Restriction' interfaces.
     */
    public $validation_types;
    /**
     * Restriction has options in product write panels.
     *
     * @var bool
     */
    public $has_admin_product_fields;
    /**
     * Restriction has global options.
     *
     * @var bool
     */
    public $has_admin_global_fields;
    /**
     * Restriction supports multiple rules.
     *
     * @var bool
     */
    public $supports_multiple;
    /** @var string Method title */
    public $method_title;
    /** @var array Restriction conditions */
    public $conditions;
    /** @var string Restricted array key */
    public $restricted_key;
    /**
     * Restriction title.
     *
     * @return string
     */
    public function get_title()
    {
    }
    /**
     * Restriction description.
     *
     * @return string
     */
    public function get_description()
    {
    }
    /**
     * Shop hook(s) where the restriction validates itself (add-to-cart, cart, update-cart, checkout).
     *
     * @return array
     */
    public function get_validation_types()
    {
    }
    /**
     * If the restriction has options on the product Restrictions write-panel.
     *
     * @return bool
     */
    public function has_admin_product_fields()
    {
    }
    /**
     * Display options on the product Restrictions write-panel.
     *
     * By default expects fields posted inside an indexed array.
     *
     * @param  int   $index    restriction fields array index
     * @param  array $options  metabox options.
     * @return false|void
     */
    public function get_admin_product_fields_html($index, $options)
    {
    }
    /**
     * Validate, process and return posted product metabox options.
     *
     * By default expects all fields posted inside an indexed array.
     *
     * @param  array $posted
     * @return array
     */
    public function process_admin_product_fields($posted)
    {
    }
    /**
     * If the restriction has options on the global Restrictions page.
     *
     * @return bool
     */
    public function has_admin_global_fields()
    {
    }
    /**
     * Display options on the global Restrictions sections.
     *
     * By default expects fields posted inside an indexed array.
     *
     * @param  int   $index    restriction fields array index
     * @param  array $options  metabox options.
     * @return false|void
     */
    public function get_admin_global_fields_html($index, $options)
    {
    }
    /**
     * Validate, process and return global settings.
     *
     * By default expects fields posted inside an indexed array.
     *
     * @param  array $posted_data
     * @return array
     */
    public function process_admin_global_fields($posted_data)
    {
    }
    /**
     * Display metaboxes on the global Restrictions sections.
     *
     * @return void
     */
    public function get_admin_global_metaboxes_html()
    {
    }
    /**
     * Get restriction content for admin product metaboxes.
     *
     * Product restriction content is always in metaboxes.
     *
     * @param  int   $index
     * @param  array $options
     * @param  bool  $ajax
     * @return void
     */
    public function get_admin_product_metaboxes_content($index, $options = array(), $ajax = \false)
    {
    }
    /**
     * Get restriction content for admin global metaboxes.
     *
     * Global restrictions do not necessarily need metaboxes.
     *
     * @param  int   $index Restriction index.
     * @param  array $options
     * @param  bool  $ajax
     * @return void
     */
    public function get_admin_global_metaboxes_content($index, $options = array(), $ajax = \false)
    {
    }
    /**
     * Validate, process and return global options as required by 'update_global_restriction_data'.
     *
     * By default expects all fields posted inside an indexed 'restriction' array.
     *
     * @return array|false
     */
    public function process_global_restriction_data()
    {
    }
    /**
     * Update global restriction settings.
     *
     * All settings are stored in the 'woocommerce_restrictions_global_settings' option by default.
     *
     * @return void
     */
    public function update_global_restriction_data()
    {
    }
    /**
     * Delete restriction rule based on given index.
     *
     * @since  1.4.0
     * @param  int $index
     * @return bool
     */
    public function delete_global_restriction_rule($index)
    {
    }
    /**
     * Sort posted restriction data.
     *
     * @param  mixed $a  Posted restriction data.
     * @param  mixed $b  Posted restriction data.
     * @return int
     */
    public function cmp($a, $b)
    {
    }
    /**
     * Retrieves product restriction data.
     *
     * @param  int|WC_Product $product
     * @param  string         $context
     * @return array
     */
    public function get_product_restriction_data($product, $context = 'view')
    {
    }
    /**
     * Retrieves global restriction data.
     *
     * @param  string $context
     * @return array
     */
    public function get_global_restriction_data($context = 'view')
    {
    }
    /**
     * Checks if all conditions of a restriction instance are true.
     *
     * @param  array $restriction_data
     * @param  array $args
     * @return bool
     */
    public function check_conditions_apply($restriction_data, $args = array())
    {
    }
    /**
     * Compiles a 'resolution' message that describes what steps can be taken to overcome a restriction based on the defined conditions.
     *
     * @param  array $restriction_data
     * @param  array $args
     * @return string|false
     */
    public function get_conditions_resolution($restriction_data, $args = array())
    {
    }
    /**
     * Display a short summary of the restriction's settings.
     *
     * @param  array $options
     * @return string
     */
    public function get_options_description($options)
    {
    }
    /**
     * Display a short summary of what needs to change to lift this restriction.
     *
     * @param  array  $restriction
     * @param  string $context
     * @param  array  $args
     * @return string
     */
    public function get_resolution_message($restriction, $context, $args = array())
    {
    }
    /**
     * Short summary of what needs to change to lift this restriction.
     *
     * @param  array  $restriction
     * @param  string $context
     * @param  array  $args
     * @return string
     */
    protected function get_resolution_message_content($restriction, $context, $args = array())
    {
    }
    /**
     * Show excluded methods or validate selection only.
     *
     * @param  array $restriction_data
     * @return bool
     */
    protected function show_excluded($restriction_data)
    {
    }
    /**
     * Show static notices below excluded methods/gateways.
     *
     * @since  1.7.0
     *
     * @param  array $restriction_data
     * @return bool
     */
    protected function show_excluded_notices($restriction_data)
    {
    }
    /**
     * Generate map data for each active rule.
     *
     * @since  1.4.0
     *
     * @param  array $payload
     * @param  array $restriction
     * @param  bool  $include_data
     * @return array
     */
    protected function generate_rules_map_data($payload, $restriction, $include_data)
    {
    }
    /**
     * Flatten all exclude ids into a unique array.
     *
     * @since  1.4.0
     *
     * @param  array $maps
     * @return array
     */
    protected function get_unique_exclusion_ids($maps)
    {
    }
    /**
     * Evaluate all restriction rules and parse all matching indexes.
     *
     * @since  1.4.0
     * @version 3.0.3
     *
     * @param  array $restriction_data
     * @param  array $payload
     * @param  array $args
     * @return array
     */
    public function get_matching_rules_map($restriction_data, $payload, $args = array())
    {
    }
    /**
     * If the restriction supports multiple rule definitions.
     *
     * @return bool
     */
    public function supports_multiple()
    {
    }
    /**
     * Checks if a feature is supported.
     *
     * @since  1.13.0
     *
     * @param  string $feature
     * @return boolean
     */
    public function supports($feature)
    {
    }
    /**
     * Add an extra variable in package information.
     *
     * @since  1.4.0
     *
     * @param  array  $package
     * @param  string $key
     * @param  mixed  $value
     * @return void
     */
    public static function add_extra_package_variable(&$package, $key, $value)
    {
    }
    /**
     * Get an extra's package variable value.
     *
     * @since  1.4.0
     *
     * @param  array  $package
     * @param  string $key
     * @return mixed
     */
    public static function get_extra_package_variable($package, $key)
    {
    }
}
/**
 * Product CSP Restrictions Admin Class.
 *
 * Loads admin tabs and adds related hooks / filters.
 *
 * @version  3.2.1
 */
class WC_CSP_Admin_Ajax
{
    /**
     * Setup admin class.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Handles toggling restrictions via Ajax.
     *
     * @since  1.4.0
     *
     * @return void
     */
    public static function toggle_restriction()
    {
    }
    /**
     * Handles adding restrictions via Ajax.
     *
     * @return void
     */
    public static function add_checkout_restriction()
    {
    }
    /**
     * Get terms for a given attribute slug.
     *
     * @since  2.1.0
     * @return void
     */
    public static function get_attribute_terms()
    {
    }
}
/**
 * Conditional Shipping and Payments admin notices handling.
 *
 * @class    WC_CSP_Admin_Notices
 * @version  3.2.1
 */
class WC_CSP_Admin_Notices
{
    /**
     * Notices persisting on the next request.
     *
     * @var array
     */
    public static $meta_box_notices = array();
    /**
     * Notices displayed on the current request.
     *
     * @var array
     */
    public static $admin_notices = array();
    /**
     * Maintenance notices displayed on every request until cleared.
     *
     * @var array
     */
    public static $maintenance_notices = array();
    /**
     * Dismissible notices displayed on the current request.
     *
     * @var array
     */
    public static $dismissed_notices = array();
    /**
     * Array of maintenance notice types - name => callback.
     *
     * @var array<string, string>
     */
    private static $maintenance_notice_types = array('update' => 'update_notice', 'welcome' => 'welcome_notice', 'cart_subtotal' => 'cart_subtotal_notice');
    /**
     * Array of one-time maintenance notice types - name => callback.
     *
     * @var array<string, string>
     */
    private static $one_time_maintenance_notice_types = array('cart_subtotal' => 'cart_subtotal_notice');
    /**
     * Constructor.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Add a notice/error.
     *
     * @param  string  $text
     * @param  mixed   $args
     * @param  boolean $save_notice
     * @return void
     */
    public static function add_notice($text, $args, $save_notice = \false)
    {
    }
    /**
     * Checks if a maintenance notice is visible.
     *
     * @param  string $notice_name
     * @return boolean
     */
    public static function is_maintenance_notice_visible($notice_name)
    {
    }
    /**
     * Checks if a dismissible notice has been dismissed in the past.
     *
     * @param  string $notice_name
     * @return boolean
     */
    public static function is_dismissible_notice_dismissed($notice_name)
    {
    }
    /**
     * Save errors to an option.
     *
     * @version 3.1.5
     * @return void
     */
    public static function save_notices()
    {
    }
    /**
     * Show any stored error messages.
     *
     * @version 3.1.5
     * @return void
     */
    public static function output_notices()
    {
    }
    /**
     * Show maintenance notices.
     *
     * @return void
     */
    public static function hook_maintenance_notices()
    {
    }
    /**
     * Add a dimissible notice/error.
     *
     * @param  string $text
     * @param  mixed  $args
     * @return void
     */
    public static function add_dismissible_notice($text, $args)
    {
    }
    /**
     * Remove a dismissible notice.
     *
     * @param  string $notice_name
     * @return bool
     */
    public static function remove_dismissible_notice($notice_name)
    {
    }
    /**
     * Add a maintenance notice to be displayed.
     *
     * @param  string $notice_name
     * @return bool
     */
    public static function add_maintenance_notice($notice_name)
    {
    }
    /**
     * Add a one-time maintenance notice to be displayed.
     *
     * @param  string $notice_name
     * @return bool
     */
    public static function add_one_time_maintenance_notice($notice_name)
    {
    }
    /**
     * Remove a maintenance notice.
     *
     * @param  string $notice_name
     * @return bool
     */
    public static function remove_maintenance_notice($notice_name)
    {
    }
    /**
     * Add 'update' maintenance notice.
     *
     * @return void
     */
    public static function update_notice()
    {
    }
    /**
     * Add 'cart_subtotal' maintenance notice.
     *
     * @return void
     */
    public static function cart_subtotal_notice()
    {
    }
    /**
     * Add 'welcome' notice.
     *
     * @since  1.5.0
     * @return void
     */
    public static function welcome_notice()
    {
    }
    /**
     * Returns a "trigger update" notice component.
     *
     * @return string
     */
    private static function get_trigger_update_prompt()
    {
    }
    /**
     * Returns a "force update" notice component.
     *
     * @return string
     */
    private static function get_force_update_prompt()
    {
    }
    /**
     * Returns a "failed update" notice component.
     *
     * @return string
     */
    private static function get_failed_update_prompt()
    {
    }
    /**
     * Dismisses a notice.
     *
     * @param  string $notice
     * @return bool
     */
    public static function dismiss_notice($notice)
    {
    }
}
/**
 * Product CSP Restrictions Admin Class.
 *
 * Loads admin tabs and adds related hooks / filters.
 *
 * @version  3.2.1
 */
class WC_CSP_Admin
{
    /**
     * Bundled selectSW library version.
     *
     * @var string
     */
    private static $bundled_selectsw_version = '1.2.3';
    /*
     * Setup admin class.
     */
    public function __construct()
    {
    }
    /**
     * Do stuff on the admin init hook.
     *
     * @since  1.4.0
     * @return void
     */
    public function admin_init()
    {
    }
    /**
     * Add Settings link on the Plugins page.
     *
     * @since  3.1.1
     *
     * @param  array $links Plugin action links.
     * @return array
     */
    public function plugin_action_links($links)
    {
    }
    /**
     * Include stuff on the admin init hook.
     *
     * @since  1.4.0
     * @return void
     */
    private function includes()
    {
    }
    /**
     * Register own version of select2 library.
     *
     * @since 1.6.0
     * @return void
     */
    public static function maybe_register_selectsw()
    {
    }
    /**
     * Load own version of select2 library.
     *
     * @since 1.6.0
     * @return void
     */
    public static function maybe_load_selectsw()
    {
    }
    /**
     * Display notice when selectSW library is unsupported.
     *
     * @since 1.6.0
     * @return void
     */
    public static function maybe_display_selectsw_notice()
    {
    }
    /**
     * Whether to load own version of select2 library or not.
     *
     * @since   1.6.0
     *
     * @return  boolean
     */
    private static function load_selectsw()
    {
    }
    /**
     * Admin product writepanel scripts.
     *
     * @return void
     */
    public function admin_scripts()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Global Settings.
    |--------------------------------------------------------------------------
    */
    /**
     * Add 'Restrictions' tab to WooCommerce Settings tabs.
     *
     * @since  1.0
     * @param  array $settings
     * @return array $settings
     */
    public function add_restrictions_settings_page($settings)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Product Meta-Boxes.
    |--------------------------------------------------------------------------
    */
    /**
     * Restrictions writepanel tab.
     *
     * @param  array $tabs
     * @return array
     */
    public function product_data_tabs($tabs)
    {
    }
    /**
     * Product writepanel for Restrictions.
     *
     * @return void
     */
    public function product_data_panel()
    {
    }
    /**
     * Gets posted product restriction data.
     *
     * @return array
     */
    public function get_posted_product_restriction_data()
    {
    }
    /**
     * Processes caller-supplied product restriction data.
     *
     * @internal
     * @since 3.1.5
     *
     * @param  array $posted_restrictions_data Restriction data in product-editor field format.
     * @return array
     */
    public function process_supplied_product_restriction_data($posted_restrictions_data)
    {
    }
    /**
     * Process, verify and save restriction product data.
     *
     * @param  int $post_id
     * @return void
     */
    public function process_product_meta($post_id)
    {
    }
    /**
     * Process, verify and save restriction product data.
     *
     * @param  WC_Product $product
     * @return void
     */
    public function process_product_data($product)
    {
    }
    /**
     * Add a notice if product-level restrictions are globally disabled.
     *
     * @return void
     */
    public function maybe_add_disabled_restrictions_notice()
    {
    }
    /**
     * Add a notice if no shipping methods are active.
     *
     * @return void
     */
    public function maybe_add_no_shipping_methods_notice()
    {
    }
    /**
     * Sort posted restriction data.
     *
     * @param  mixed $a  Posted restriction data.
     * @param  mixed $b  Posted restriction data.
     * @return int
     */
    private function cmp($a, $b)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Privacy.
    |--------------------------------------------------------------------------
    */
    /**
     * Message to add in the WP Privacy Policy Guide page.
     *
     * @since  1.3.4
     *
     * @return string
     */
    protected static function get_privacy_policy_guide_message()
    {
    }
    /**
     * Add a message in the WP Privacy Policy Guide page.
     *
     * @since  1.3.4
     * @return void
     */
    public static function add_privacy_policy_guide_content()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Product Filters.
    |--------------------------------------------------------------------------
    */
    /**
     * Add a new filter by restrictions inside the admin products list.
     *
     * @since 1.4.0
     *
     * @param string $filters Product filters HTML.
     * @return string
     */
    public function add_restrictions_product_filter($filters)
    {
    }
    /**
     * Query new filter by restrictions.
     *
     * @since 1.4.0
     *
     * @param array $query_vars Query vars.
     * @return array
     */
    public function query_filters($query_vars)
    {
    }
    /**
     * Handle any filters.
     *
     * @since 1.4.0
     *
     * @param array $query_vars Query vars.
     * @return array
     */
    public function request_query($query_vars)
    {
    }
    /**
     * Get all restriction filters.
     *
     * @since 1.4.0
     *
     * @return array
     */
    public function get_restriction_filters()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Notices.
    |--------------------------------------------------------------------------
    */
    /**
     * Dismisses notices.
     *
     * @since  1.5.0
     *
     * @return void
     */
    public static function dismiss_notice()
    {
    }
    /**
     * Show row meta on the plugin screen.
     *
     * @since 1.5.5
     *
     * @param   mixed $links
     * @param   mixed $file
     * @return  array
     */
    public static function plugin_row_meta($links, $file)
    {
    }
}
/**
 * WooCommerce core Product Importer/Exporter support.
 *
 * @class    WC_CSP_Product_Import_Export
 * @version  3.2.1
 */
class WC_CSP_Product_Import_Export
{
    /**
     * Hook in.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Add CSV columns for exporting restriction data.
     *
     * @param  mixed        $meta_value Metadata value.
     * @param  WC_Meta_Data $meta       Metadata object.
     * @return mixed         $meta_value
     */
    public static function export_product_level_restrictions($meta_value, $meta)
    {
    }
    /**
     * Parse and validate imported restriction metadata.
     *
     * @param  array $parsed_data Parsed product data.
     * @return array  $parsed_data
     */
    public static function import_product_level_restrictions($parsed_data)
    {
    }
    /**
     * Convert stored restriction data to the shape consumed by product-editor processors.
     *
     * @param  array $restrictions Stored restrictions.
     * @return array
     * @throws UnexpectedValueException When imported data has an unsafe shape.
     */
    private static function prepare_restrictions_for_editor($restrictions)
    {
    }
    /**
     * Return list fields for a restriction type.
     *
     * @param  string $restriction_id Restriction ID.
     * @return array
     */
    private static function get_list_fields($restriction_id)
    {
    }
    /**
     * Convert stored condition fields to product-editor field shapes.
     *
     * @param  mixed  $conditions     Stored conditions.
     * @param  string $restriction_id Restriction ID.
     * @return array
     * @throws UnexpectedValueException When condition data has an unsafe shape.
     */
    private static function prepare_conditions_for_editor($conditions, $restriction_id)
    {
    }
    /**
     * Validate a flat string list.
     *
     * @param  mixed $values Values to validate.
     * @return string[]
     * @throws UnexpectedValueException When a list contains another type.
     */
    private static function validate_string_list($values)
    {
    }
    /**
     * Convert a stored country/state map to product-editor select values.
     *
     * @param  mixed $states Stored states.
     * @return string[]
     * @throws UnexpectedValueException When state data has an unsafe shape.
     */
    private static function flatten_states($states)
    {
    }
}
/**
 * WooCommerce Global Restriction Settings.
 *
 * @version  3.2.1
 */
class WC_Settings_Restrictions extends \WC_Settings_Page
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Get sections.
     *
     * @return array
     */
    public function get_sections()
    {
    }
    /**
     * Get settings array.
     *
     * @return array
     */
    public function get_settings()
    {
    }
    /**
     * Output the settings.
     *
     * @return void
     */
    public function output()
    {
    }
    /**
     * Save settings.
     *
     * @return void
     */
    public function save()
    {
    }
    /**
     * Initialize settings page.
     *
     * @since  1.8.5
     *
     * @return void
     */
    public function settings_page_init()
    {
    }
    /**
     * Delete restriction rule.
     *
     * @since  1.4.0
     * @return void
     */
    public function delete()
    {
    }
    /**
     * Redirect to Restrictions tab.
     *
     * @since  1.4.0
     * @return void
     */
    protected function reload_overview()
    {
    }
    /**
     * Filter on restriction array for enabled rules.
     *
     * @param  mixed $rule  Restriction rule, as stored in the settings.
     * @return boolean
     */
    protected function is_enabled_filter($rule)
    {
    }
    /**
     * Output restrictions overview table.
     *
     * @return void
     */
    public function restrictions_overview()
    {
    }
}
class WC_CSP_Store_API
{
    /**
     * Plugin Identifier, unique to each plugin.
     *
     * @var string
     */
    const IDENTIFIER = 'woocommerce-conditional-shipping-and-payments';
    /**
     * Bootstraps the class and hooks required data.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Register cart data handler.
     *
     * @return void
     */
    public static function extend_store()
    {
    }
    /**
     * Whether the current Store API request pays an existing order.
     *
     * @since 3.1.6
     *
     * @return bool
     */
    private static function is_checkout_order_request()
    {
    }
    /**
     * Validate all payment restrictions in the cart state.
     *
     * @return array
     */
    public static function extend_cart_data()
    {
    }
    /**
     * Calculate CSP debug messages.
     *
     * @return array
     */
    protected static function get_debugger_cart_state()
    {
    }
    /**
     * Forces all restrictions to behave as if Show Excluded was off.
     *
     * @return boolean
     */
    public static function force_include_data()
    {
    }
    /**
     * Convert a notice to plain text without restoring encoded markup.
     *
     * @since  3.1.6
     *
     * @param  mixed $message Notice message.
     * @return string
     */
    private static function get_plain_text_message($message)
    {
    }
    /**
     * Validate all payment restrictions and format the data to be added in the cart state.
     *
     * @return array
     */
    protected static function get_payment_methods_cart_state()
    {
    }
    /**
     * Validates cart (destination, shipping method) restrictions in order payment context.
     *
     * @param  \WP_Error $errors  Errors.
     * @param  \WC_Cart  $cart    Cart object.
     * @return void
     */
    public static function validate_cart($errors, $cart)
    {
    }
    /**
     * Validate the final shipping destination before payment or free-order completion.
     *
     * @since 3.1.6
     * @param WC_Order $order Final checkout order.
     * @return void
     * @throws \Automattic\WooCommerce\StoreApi\Exceptions\InvalidCartException When a shipping restriction applies.
     * @throws \Automattic\WooCommerce\StoreApi\Exceptions\RouteException When a saved-order shipping restriction applies.
     */
    public static function validate_shipping_countries($order)
    {
    }
    /**
     * Validates the order payment gateway.
     *
     * @throws \Automattic\WooCommerce\StoreApi\Exceptions\InvalidCartException When a new-order restriction applies.
     * @throws \Automattic\WooCommerce\StoreApi\Exceptions\RouteException       When a saved-order restriction applies.
     *
     * @param  \WC_Order $order  Order object.
     * @return void
     */
    public static function checkout_order_processed($order)
    {
    }
    /**
     * Validates Gift Card restrictions before the Store API takes payment.
     *
     * Runs here rather than on 'woocommerce_store_api_cart_errors' because the posted billing and shipping
     * addresses only reach the customer session once 'update_customer_from_request()' has run.
     *
     * @since 3.1.6
     *
     * @throws \Automattic\WooCommerce\StoreApi\Exceptions\InvalidCartException  When an active gift card violates a restriction.
     * @throws \Automattic\WooCommerce\StoreApi\Exceptions\RouteException        When a saved-order gift card violates a restriction.
     *
     * @param  \WC_Order $order  Order object.
     * @return void
     */
    public static function validate_gift_cards($order)
    {
    }
    /**
     * Throws a Store API cart error carrying the messages of a failed restriction check.
     *
     * @since 3.1.6
     *
     * @throws \Automattic\WooCommerce\StoreApi\Exceptions\InvalidCartException  When the check result carries messages.
     * @throws \Automattic\WooCommerce\StoreApi\Exceptions\RouteException        When a saved-order restriction carries messages.
     *
     * @param  \WC_CSP_Check_Result $result            Restriction check result.
     * @param  string               $restriction_type  Restriction type the messages belong to.
     * @return void
     */
    private static function throw_restriction_errors($result, $restriction_type)
    {
    }
    /**
     * Register csp schema into cart endpoint.
     *
     * @return array Registered schema.
     */
    public static function extend_cart_schema()
    {
    }
}
/**
 * Class for integrating with WooCommerce Blocks scripts
 *
 * @package WooCommerce Conditional Shipping and Payments
 * @since   1.13.0
 * @version 3.2.1
 */
class WC_CSP_Blocks_Integration implements \Automattic\WooCommerce\Blocks\Integrations\IntegrationInterface
{
    /**
     * The single instance of the class.
     *
     * @var WC_CSP_Blocks_Integration|null
     */
    protected static $_instance = \null;
    /**
     * Main WC_CSP_Blocks_Integration instance. Ensures only one instance of WC_CSP_Blocks_Integration is loaded or can be loaded.
     *
     * @static
     * @return WC_CSP_Blocks_Integration
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
     *
     * @return void
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
 * Abilities API integration.
 *
 * @class    WC_CSP_Abilities
 * @version  3.1.2
 */
class WC_CSP_Abilities
{
    /**
     * WooCommerce ability definition interface.
     */
    private const ABILITY_DEFINITION_INTERFACE = '\Automattic\WooCommerce\Abilities\AbilityDefinition';
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Add CSP ability definition classes to the WooCommerce loader.
     *
     * @param array $classes Ability definition class names.
     * @return array
     */
    public function add_ability_definition_classes($classes)
    {
    }
}
/**
 * CSP Autoloader class.
 *
 * @version 3.2.1
 */
class WC_CSP_Autoloader
{
    /**
     * Path to the includes directory.
     *
     * @var string
     */
    private $include_path = '';
    /**
     * The Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Take a class name and turn it into a file name.
     *
     * @param  string $class Class name.
     * @return string
     */
    private function get_file_name_from_class($class)
    {
    }
    /**
     * Include a class file.
     *
     * @param  string $path File path.
     * @return bool Successful or not.
     */
    private function load_file($path)
    {
    }
    /**
     * Auto-load WC CSP classes on demand to reduce memory consumption.
     *
     * @param string $class Class name.
     * @return void
     */
    public function autoload($class)
    {
    }
}
/**
 * Stores error/notice messages returned by restrictions.
 *
 * @class    WC_CSP_Check_Result
 * @version  1.11.0
 */
class WC_CSP_Check_Result
{
    /** @var array Array of stored messages. */
    public $messages;
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Add a new message.
     *
     * @param   string $message_code
     * @param   string $message_text
     * @param   string $message_type
     * @param   array  $debug_info (Optional)
     * @return  boolean
     */
    public function add($message_code, $message_text, $message_type = 'error', $debug_info = array())
    {
    }
    /**
     * True if messages exist.
     *
     * @return boolean
     */
    public function has_messages()
    {
    }
    /**
     * Get stored messages.
     *
     * @param  string $code
     * @param  string $type
     * @return array
     */
    public function get_messages($code = '', $type = '')
    {
    }
}
/**
 * Conditions class.
 *
 * @class    WC_CSP_Conditions
 * @version  3.2.1
 */
class WC_CSP_Conditions
{
    /**
     * Array of registered condition classes.
     *
     * @var array|null
     */
    public $conditions;
    /**
     * Conditions evaluated so far in the current request.
     *
     * @var string[]
     */
    private $active_conditions = array();
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Called when a condition is evaluated during the course of a request.
     *
     * @since  1.9.0
     *
     * @param  string $id
     * @return void
     */
    public function set_active($id)
    {
    }
    /**
     * Indicates whether a condition has been evaluated in the course of this request.
     *
     * @since  1.9.0
     *
     * @param  string $id
     * @return bool
     */
    public function is_active($id)
    {
    }
    /**
     * Print condition JS templates in footer.
     *
     * @return void
     */
    public function print_condition_field_scripts()
    {
    }
    /**
     * Prints JS condition templates in footer.
     *
     * @param  string $scope
     * @return void
     */
    private function print_js_templates($scope)
    {
    }
    /**
     * Prints the admin fields of a condition as 'wp.template' source.
     *
     * Stored and filterable labels (term, role, currency, country/state names etc.) end up in this markup, and 'esc_html'/'esc_attr' leave '{' alone.
     * A label such as '{{ 7*6 }}' would therefore be evaluated when the template is compiled. Every '{' is printed as an HTML entity instead:
     * 'wp.template' no longer sees a delimiter, while the browser decodes the entity back to '{' when the compiled row is inserted as HTML,
     * so labels and attribute values (incl. JSON in data attributes) display and parse as before.
     * The index placeholders are swapped in afterwards, as they are the only template tags these fields are meant to contain.
     *
     * @since  3.1.6
     *
     * @param  WC_CSP_Condition $condition Condition to print.
     * @return void
     */
    private function print_condition_fields_template($condition)
    {
    }
    /**
     * Get condition class by condition_id.
     *
     * @param  string $condition_id Condition ID.
     * @return WC_CSP_Condition|false
     */
    public function get_condition($condition_id)
    {
    }
    /**
     * Get conditions by supported restriction id and scope.
     *
     * @param  string $restriction_id
     * @param  string $scope  Condition scope: 'global' or 'product'.
     * @return array
     */
    public function get_supported_conditions($restriction_id = '', $scope = 'global')
    {
    }
    /**
     * Compare Condition titles
     *
     * @param  WC_CSP_Condition $a
     * @param  WC_CSP_Condition $b
     * @return int
     */
    private function cmp_condition_titles($a, $b)
    {
    }
    /**
     * Get condition fields for admin product restriction metaboxes.
     *
     * @param  string $restriction_id
     * @param  int    $index
     * @param  array  $options
     * @return void
     */
    public function get_admin_condition_product_fields($restriction_id, $index, $options = array())
    {
    }
    /**
     * Get condition fields for admin global restriction metaboxes.
     *
     * @param  string $restriction_id
     * @param  int    $index
     * @param  array  $options
     * @return void
     */
    public function get_admin_condition_global_fields($restriction_id, $index, $options = array())
    {
    }
    /**
     * Get condition fields for admin restriction metaboxes.
     *
     * @param  string $scope
     * @param  string $restriction_id
     * @param  int    $index
     * @param  array  $options
     * @return false|void
     */
    private function get_admin_condition_fields($scope, $restriction_id, $index, $options = array())
    {
    }
    /**
     * Admin condition select dropdown.
     *
     * @param  array       $conditions Supported conditions.
     * @param  string|null $selected_id Selected condition ID, if any.
     * @param  array       $additional_options
     * @return void
     */
    private function get_conditions_dropdown($conditions, $selected_id, $additional_options = array())
    {
    }
    /**
     * Process condition fields for admin product restriction metaboxes.
     *
     * @param  array  $processed_data
     * @param  array  $posted_data
     * @param  string $restriction_id
     * @return array
     */
    public function process_admin_condition_product_fields($processed_data, $posted_data, $restriction_id)
    {
    }
    /**
     * Process condition fields for admin global restriction metaboxes.
     *
     * @param  array  $processed_data
     * @param  array  $posted_data
     * @param  string $restriction_id
     * @return array
     */
    public function process_admin_condition_global_fields($processed_data, $posted_data, $restriction_id)
    {
    }
    /**
     * Process condition fields.
     *
     * @param  string $scope
     * @param  string $restriction_id
     * @param  array  $processed_data
     * @param  array  $posted_data
     * @return array
     */
    private function process_admin_condition_fields($scope, $restriction_id, $processed_data, $posted_data)
    {
    }
    /**
     * Evaluate if a condition is in effect or not.
     *
     * @param  array $data   condition field data
     * @param  array $args   optional arguments passed by restrictions
     * @return boolean
     */
    public function check_condition($data, $args)
    {
    }
    /**
     * Return condition-field-specific resolution message which is combined along with others into a single restriction "resolution message".
     *
     * @param  array $data   condition field data
     * @param  array $args   optional arguments passed by restriction
     * @return string|false
     */
    public function get_condition_resolution($data, $args)
    {
    }
    /**
     * Sorts conditions data by execution priority.
     * Conditions with lower priority are evaluated first to preserve CPU resources.
     *
     * @since  1.13.1
     *
     * @param  array $data
     * @return array
     */
    public function get_optimized_conditions_data($data)
    {
    }
}
/**
 * CSP Debugger
 *
 * @class    WC_CSP_Debugger
 * @version  3.2.1
 */
class WC_CSP_Debugger
{
    /**
     * Property to store if the debugger is running.
     *
     * @var boolean
     */
    private static $is_running = \false;
    /**
     * Property to store if the debugger is enabled.
     *
     * @var boolean
     */
    private static $enabled = \false;
    /**
     * Property to store the payment gateway restriction class.
     *
     * @var WC_CSP_Restriction|false
     */
    private static $payment_gateways_restriction = \false;
    /**
     * Property to store the shipping method restriction class.
     *
     * @var WC_CSP_Restriction|false
     */
    private static $shipping_methods_restriction = \false;
    /**
     * Property to store the shipping country restriction class.
     *
     * @var WC_CSP_Restriction|false
     */
    private static $shipping_destinations_restriction = \false;
    /**
     * Initialization and hooks.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Initialize debugger.
     *
     * @return void
     */
    public static function initialize_debugger()
    {
    }
    /**
     * Return if the debugger is currently running.
     *
     * @return boolean
     */
    public static function is_running()
    {
    }
    /**
     * Adds debug arguments force include restriction data
     *
     * @param  bool  $include_data
     * @param  array $restriction
     * @param  array $payload
     * @param  array $args
     *
     * @return bool
     */
    public static function force_rule_map_to_include_restriction_data($include_data, $restriction, $payload, $args)
    {
    }
    /**
     * Adds debug variables to shipping packages to invalidate cache.
     *
     * @param  array $packages
     *
     * @return array
     */
    public static function add_debug_variables_to_packages($packages)
    {
    }
    /**
     * Adds checkout notices for all debug messages.
     *
     * @return void
     */
    public static function add_debug_notices()
    {
    }
    /**
     * Prepares the notice data for the payment gateways that CSP has excluded.
     * Sends the data to the renderer for parsing and creating notices.
     *
     * @return string
     */
    public static function prepare_debug_info_excluded_payment_gateways()
    {
    }
    /**
     * Prepares the notice data for the shipping methods/packages that CSP has excluded.
     * Sends the data to the renderer for parsing and creating notices.
     *
     * @return string|void
     */
    public static function prepare_debug_info_excluded_shipping_methods()
    {
    }
    /**
     * Collects the debug results of the shipping methods found in the given packages.
     *
     * @since 3.1.4
     *
     * @param  array $shipping_packages  The shipping packages to look into.
     *
     * @return array
     */
    private static function get_shipping_methods_debug_results($shipping_packages)
    {
    }
    /**
     * Prepares the notice data for the shipping packages that CSP has excluded because of the selected shipping destination.
     * Sends the data to the renderer for parsing and creating notices.
     *
     * @return string
     */
    public static function prepare_debug_info_excluded_shipping_destinations()
    {
    }
    /**
     * Parses the results and renders notices.
     *
     * @param  array  $results
     * @param  string $restriction_type
     *
     * @return string
     */
    private static function construct_debug_html($results, $restriction_type)
    {
    }
    /**
     * Prepares message markup.
     *
     * @param  string $level   Message level.
     * @param  mixed  $message Message data.
     *
     * @return string
     */
    private static function prepare_message_markup($level, $message)
    {
    }
}
/**
 * Helper Functions.
 *
 * @class    WC_CSP_Helpers
 * @version  3.1.6
 */
class WC_CSP_Helpers
{
    /**
     * Resolve wildcard variation attributes without changing the cart product.
     *
     * @since 3.1.6
     * @param WC_Product $product Product being checked.
     * @param array      $selected Cart variation attributes.
     * @return WC_Product
     */
    public static function get_product_with_selected_attributes($product, $selected)
    {
    }
    /**
     * Runtime cache.
     *
     * @var array
     */
    public static $cache = array();
    /**
     * Simple runtime cache getter.
     *
     * @param  string $key
     * @param  string $group_key
     * @return mixed
     */
    public static function cache_get($key, $group_key = '')
    {
    }
    /**
     * Simple runtime cache setter.
     *
     * @param  string $key
     * @param  mixed  $value
     * @param  string $group_key
     * @return void
     */
    public static function cache_set($key, $value, $group_key = '')
    {
    }
    /**
     * Simple runtime cache unsetter.
     *
     * @param  string $key
     * @param  string $group_key
     * @return void
     */
    public static function cache_delete($key, $group_key = '')
    {
    }
    /**
     * Simple runtime group cache invalidator.
     *
     * @param  string $group_key
     * @return void
     */
    public static function cache_invalidate($group_key)
    {
    }
    /**
     * Build an order-backed shipping package without reading the current cart.
     *
     * @since 3.1.6
     * @param WC_Order $order Order being checked.
     * @return array
     */
    public static function get_order_package($order)
    {
    }
}
/**
 * Restrictions.
 *
 * Loads restriction classes via hooks and prepares them for use.
 *
 * @class    WC_CSP_Restrictions
 * @version  3.2.1
 */
class WC_CSP_Restrictions
{
    /** @var array Array of registered restriction classes. */
    public $restrictions;
    public function __construct()
    {
    }
    /**
     * Modify checkout field data to update order details when changing the 'billing email' field and a global 'customer' condition exists.
     *
     * @since  1.4.0
     * @param  array $billing_field_data
     * @return array
     */
    public function maybe_update_totals_on_billing_email_change($billing_field_data)
    {
    }
    /**
     * Get restriction class by restriction_id.
     *
     * @param  string $restriction_id
     * @return WC_CSP_Restriction|false
     */
    public function get_restriction($restriction_id)
    {
    }
    /**
     * Get all registered restrictions by supported validation type.
     *
     * @param  string $validation_type
     * @return array
     */
    public function get_restrictions($validation_type = '')
    {
    }
    /**
     * Get all registered restrictions that have admin product metabox options.
     *
     * @return array
     */
    public function get_admin_product_field_restrictions()
    {
    }
    /**
     * Get all registered restrictions that have global settings.
     *
     * @return array
     */
    public function get_admin_global_field_restrictions()
    {
    }
    /**
     * Add-to-cart validation ('woocommerce_add_to_cart_validation' filter) for all restrictions that implement the 'WC_CSP_Add_To_Cart_Restriction' interface.
     *
     * @param  bool   $add
     * @param  int    $product_id
     * @param  int    $product_quantity
     * @param  string $variation_id
     * @param  array  $variations
     * @param  array  $cart_item_data
     * @return bool
     */
    public function validate_add_to_cart($add, $product_id, $product_quantity, $variation_id = '', $variations = array(), $cart_item_data = array())
    {
    }
    /**
     * Cart validation ('check_cart_items' action) for all restrictions that implement the 'WC_CSP_Cart_Restriction' interface.
     *
     * @return void
     */
    public function validate_cart()
    {
    }
    /**
     * Update cart validation ('update_cart_validation' filter) for all restrictions that implement the 'WC_CSP_Update_Cart_Restriction' interface.
     *
     * @param  bool   $passed
     * @param  string $cart_item_key Cart item key.
     * @param  array  $cart_item_values Cart item values.
     * @param  int    $quantity
     * @return bool
     */
    public function validate_cart_update($passed, $cart_item_key, $cart_item_values, $quantity)
    {
    }
    /**
     * Checkout validation ('woocommerce_after_checkout_validation' filter) for all restrictions that implement the 'WC_CSP_Checkout_Restriction' interface.
     *
     * @param  array $posted
     * @return void
     */
    public function validate_checkout($posted)
    {
    }
}
/**
 * Tracking module.
 *
 * @class    WCS_CSP_Tracker
 * @version  3.2.1
 */
class WCS_CSP_Tracker
{
    /**
     * Initialize the Tracker.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Adds CSP data to the WC tracked data.
     *
     * @param  array $data
     * @return array
     */
    public static function add_tracking_data($data)
    {
    }
    /**
     * Gets integration data.
     *
     * @return array
     */
    private static function get_integration_data()
    {
    }
    /**
     * Gets global restriction insights.
     *
     * @return array
     */
    private static function get_global_restriction_data()
    {
    }
    /**
     * Gets product data.
     *
     * @return array
     */
    private static function get_product_data()
    {
    }
    /**
     * Gets default conditions.
     *
     * @return string[]
     */
    private static function get_default_conditions()
    {
    }
}
/**
 * Handles compatibility with other WC extensions.
 *
 * @class    WC_CSP_Compatibility
 * @version  3.2.1
 */
class WC_CSP_Compatibility
{
    /**
     * Array of min required plugin versions.
     *
     * @var array<string, string>
     */
    private static $required = array();
    /**
     * Modules to load.
     *
     * @var array
     */
    private static $modules = array();
    /**
     * Setup compatibility class.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Initialize.
     *
     * @since  1.4.0
     *
     * @return void
     */
    protected static function load_modules()
    {
    }
    /**
     * Checks if a module has been loaded.
     *
     * @since  1.13.0
     *
     * @param  string $name  Module name.
     * @return boolean
     */
    public static function is_module_loaded($name)
    {
    }
    /**
     * Core compatibility functions.
     *
     * @return void
     */
    public static function core_includes()
    {
    }
    /**
     * Declare HPOS( Custom Order tables) compatibility.
     *
     * @since 1.14.3
     * @return void
     */
    public static function declare_hpos_compatibility()
    {
    }
    /**
     * Declare cart/checkout Blocks compatibility.
     *
     * @since 1.15.4
     * @return void
     */
    public static function declare_blocks_compatibility()
    {
    }
    /**
     * Load compatibility classes.
     *
     * @return void
     */
    public static function module_includes()
    {
    }
    /**
     * Checks versions of compatible/integrated/deprecated extensions.
     *
     * @since  1.8.0
     *
     * @return void
     */
    public static function add_compatibility_notices()
    {
    }
    /**
     * True if a gateway is restricted.
     *
     * @since  1.4.0
     *
     * @param  string $gateway_id
     * @return boolean
     */
    public static function is_gateway_restricted($gateway_id)
    {
    }
}
/**
 * Functions related to core back-compatibility.
 *
 * @class    WC_CSP_Core_Compatibility
 * @version  3.2.1
 */
class WC_CSP_Core_Compatibility
{
    /**
     * Cache 'gte' comparison results.
     *
     * @var bool[]
     */
    private static $is_wc_version_gte = array();
    /**
     * Cache 'gt' comparison results.
     *
     * @var bool[]
     */
    private static $is_wc_version_gt = array();
    /**
     * Cache 'gt' comparison results for WP version.
     *
     * @since  1.5.9
     * @var    bool[]
     */
    private static $is_wp_version_gt = array();
    /**
     * Cache 'gte' comparison results for WP version.
     *
     * @since  1.5.9
     * @var    bool[]
     */
    private static $is_wp_version_gte = array();
    /**
     * Cache block based checkout detection result.
     *
     * @since  1.13.0
     * @var    bool|null
     */
    private static $is_block_based_checkout = \null;
    /**
     * Current REST request stack.
     * An array containing WP_REST_Request instances.
     *
     * @since 1.15.8
     *
     * @var WP_REST_Request[]
     */
    private static $requests = array();
    /**
     * Initialization and hooks.
     *
     * @return void
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
     * @since  1.15.8
     *
     * @param  WP_REST_Response $response
     * @return mixed
     */
    public static function pop_rest_request($response)
    {
    }
    /**
     * Saves the current hydration request.
     *
     * @since  1.15.8
     *
     * @param  mixed           $result
     * @param  WP_REST_Request $request
     * @return mixed
     */
    public static function save_hydration_request($result, $request)
    {
    }
    /**
     * Saves the current rest request.
     *
     * @since  1.13.0
     *
     * @param  mixed           $result
     * @param  WP_REST_Server  $server
     * @param  WP_REST_Request $request
     * @return mixed
     */
    public static function save_rest_request($result, $server, $request)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | WC version handling.
    |--------------------------------------------------------------------------
    */
    /**
     * Helper method to get the version of the currently installed WooCommerce.
     *
     * @since  1.0.4
     *
     * @return string
     */
    public static function get_wc_version()
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is greater than or equal to $version.
     *
     * @since  1.2.5
     *
     * @param  string $version
     * @return boolean
     */
    public static function is_wc_version_gte($version)
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is greater than $version.
     *
     * @since  1.0.4
     *
     * @param  string $version
     * @return boolean
     */
    public static function is_wc_version_gt($version)
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is lower than or equal $version.
     *
     * @since  1.4.0
     *
     * @param  string $version
     * @return boolean
     */
    public static function is_wc_version_lte($version)
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is lower than $version.
     *
     * @since  1.4.0
     *
     * @param  string $version
     * @return boolean
     */
    public static function is_wc_version_lt($version)
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is greater than or equal to $version.
     *
     * @since  1.5.9
     *
     * @param  string $version
     * @return boolean
     */
    public static function is_wp_version_gt($version)
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is greater than or equal to $version.
     *
     * @since  1.5.9
     *
     * @param  string $version
     * @return boolean
     */
    public static function is_wp_version_gte($version)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Helpers.
    |--------------------------------------------------------------------------
    */
    /**
     * Back-compat wrapper for 'get_parent_id' with fallback to 'get_id'.
     *
     * @since  1.2.5
     *
     * @param  WC_Product $product
     * @return mixed
     */
    public static function get_product_id($product)
    {
    }
    /**
     * Return product title with attributes -- if variation.
     *
     * @since  1.5.8
     *
     * @param  WC_Product_Variation|int $product
     *
     * @return string|false
     */
    public static function get_name($product)
    {
    }
    /**
     * Checks if the current request is a WC REST API request.
     *
     * @since  1.13.0
     *
     * @return boolean
     */
    public static function is_rest_api_request()
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
     * @since  1.13.0
     *
     * @return boolean
     */
    public static function is_api_request()
    {
    }
    /**
     * Returns the current Store/REST API request or false.
     *
     * @since  1.13.0
     *
     * @return WP_REST_Request|false
     */
    public static function get_api_request()
    {
    }
    /**
     * Whether this is a Store API request.
     *
     * @since  1.13.0
     *
     * @param  string $route
     * @param  string $method  HTTP method to match, e.g. 'POST'.
     * @return boolean
     */
    public static function is_store_api_request($route = '', $method = '')
    {
    }
    /**
     * Whether the checkout page contains the checkout block.
     *
     * @since  1.13.0
     *
     * @return boolean
     */
    public static function is_block_based_checkout()
    {
    }
}
/**
 * Amazon Pay Compatibility.
 *
 * @since   1.4.0
 * @version 3.2.1
 */
class WC_CSP_AP_Compatibility
{
    /**
     * Initialize the Amazon Pay compatibility.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Prevent Amazon Payments from initializing.
     *
     * @param  boolean $enable
     * @return boolean
     */
    public static function init_amazon_payments($enable)
    {
    }
    /**
     * Checks if the current request is a WC REST API request.
     *
     * @since  1.5.3
     * @return boolean
     */
    private static function is_rest_api_request()
    {
    }
}
/**
 * WooCommerce Blocks Compatibility.
 *
 * @version 3.2.1
 */
class WC_CSP_Blocks_Compatibility
{
    /**
     * Initialize.
     *
     * @return void
     */
    public static function init()
    {
    }
}
/**
 * WooCommerce Gift Cards Compatibility.
 *
 * @version 3.2.1
 */
class WC_CSP_Gift_Cards_Compatibility
{
    /**
     * Used for sharing memory between hooks.
     *
     * @var WC_CSP_Check_Result|null
     */
    public static $shared_result;
    /**
     * Used for saving all GC affected global rules.
     *
     * @var array|null
     */
    private static $affected_rules;
    /**
     * Initialization.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Filter option description for GC payment gateway.
     *
     * @param  string $gateway_description
     * @param  string $key
     * @return string
     */
    public static function get_option_desciption($gateway_description, $key)
    {
    }
    /**
     * Filter and validate conditions saved when using Gift Cards as payment gateway.
     *
     * @param  array  $processed_data
     * @param  array  $posted_data
     * @param  string $restriction_id
     * @return array
     */
    public static function remove_gift_cards_condition($processed_data, $posted_data, $restriction_id)
    {
    }
    /**
     * Find GC affected global rules and cache them.
     *
     * Also hooked to `init`; the return value is kept for code that calls it directly.
     *
     * @return array
     */
    public static function cache_affected_rules()
    {
    }
    /**
     * Get GC affected global rules, finding and caching them on first use.
     *
     * @since  3.2.1
     *
     * @return array
     */
    public static function get_affected_rules()
    {
    }
    /**
     * Whether or not rules have show excluded enabled.
     *
     * @return bool
     */
    protected static function has_show_excluded()
    {
    }
    /**
     * Whether or not rules have static notices enabled.
     *
     * @return bool
     */
    protected static function has_excluded_notices()
    {
    }
    /**
     * Validate.
     *
     * @return void
     */
    public static function validate()
    {
    }
    /**
     * Returns the Gift Cards restriction violations of the active gift cards, if any.
     *
     * @since 3.1.6
     *
     * @param  array $args  Restriction evaluation args.
     * @return WC_CSP_Check_Result
     */
    public static function get_gift_card_violations($args = array())
    {
    }
    /**
     * Get shared static notices.
     *
     * @param  string $message
     * @return string
     */
    public static function get_static_messages($message = '')
    {
    }
    /**
     * Print shared static notices.
     *
     * @return void
     */
    public static function print_static_notices()
    {
    }
    /**
     * Print shared static notices.
     *
     * @param  array $args
     * @return WC_CSP_Check_Result
     */
    public static function validate_gift_cards_as_gateway($args = array())
    {
    }
    /**
     * Display Gift cards payment gateway after the last element.
     *
     * @param  string             $gateway_id
     * @param  WC_Payment_Gateway $gateway
     * @param  array              $gateways
     * @param  string             $field_type  Field type: 'global' or 'product'.
     * @return void
     */
    public static function add_gift_cards_payment_gateway($gateway_id, $gateway, $gateways, $field_type)
    {
    }
    /**
     * Get an object to be treated as a WC_Payment_Gateway.
     *
     * @return stdClass
     */
    public static function get_mock_payment_gateway()
    {
    }
    /**
     * Load additional conditions by adding to the global conditions array.
     *
     * @return void
     */
    public static function load_conditions()
    {
    }
}
/**
 * Klarna Checkout Compatibility.
 *
 * @since  1.12.1
 * @version  3.2.1
 */
class WC_CSP_KLC_Compatibility
{
    /**
     * Initialize the Klarna Checkout compatibility.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Restore WC checkout template if Klarna Checkout is disabled and disabled gateways are not displayed.
     *
     * @param  string $template
     * @param  string $template_name
     * @param  string $template_path
     * @return string
     */
    public static function restore_template($template, $template_name, $template_path)
    {
    }
    /**
     * Prevent Billing Country condition from saving when excluding Klarna Checkout.
     * Force 'Show Excluded' to 'no'.
     *
     * @param  array  $processed_data
     * @param  array  $posted_data
     * @param  string $restriction_id
     * @return array
     */
    public static function remove_billing_country_condition($processed_data, $posted_data, $restriction_id)
    {
    }
}
/**
 * Klarna Payments Compatibility.
 *
 * @version  3.2.1
 */
class WC_CSP_KLP_Compatibility
{
    /**
     * Default Klarna payment option labels.
     *
     * @var array<string, string>
     */
    private const DEFAULT_KLARNA_OPTIONS = array('klarna_payments_pay_now' => 'Pay Now', 'klarna_payments_pay_later' => 'Pay Later', 'klarna_payments_pay_over_time' => 'Slice It');
    /**
     * Klarna payment option IDs => names.
     *
     * @var array<string, string>
     */
    public static $klarna_options = self::DEFAULT_KLARNA_OPTIONS;
    /**
     * Initialization.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Translate Klarna payment option names after the plugin textdomain loads.
     *
     * @since 3.1.5
     *
     * @return void
     */
    public static function translate_klarna_options()
    {
    }
    /**
     * Modify gateway title in admin restriction descriptions.
     *
     * @param  string $description Gateway description.
     * @param  string $gateway_id
     * @param  array  $gateways
     * @return string
     */
    public static function admin_option_description($description, $gateway_id, $gateways)
    {
    }
    /**
     * Make individual payment options available in post-boxes.
     *
     * @param  string             $option_html
     * @param  string             $gateway_id
     * @param  WC_Payment_Gateway $gateway
     * @param  array              $gateways
     * @return array
     */
    public static function add_admin_options($option_html, $gateway_id, $gateway, $gateways)
    {
    }
    /**
     * See individual Klarna Payments options as restricted.
     *
     * @param  mixed              $is_restricted  Whether the gateway is restricted, as filtered.
     * @param  WC_Payment_Gateway $gateway
     * @param  array              $restricted_gateways
     * @return boolean
     */
    public static function restrict_klarna_options($is_restricted, $gateway, $restricted_gateways)
    {
    }
    /**
     * True when classic checkout shows Klarna as one 'klarna_payments' method and the shopper picks the option on Klarna's side:
     * with the "Combine payment methods" setting (Klarna 4.11+) or the redirect checkout flow.
     *
     * @param  WC_Payment_Gateway $gateway Klarna gateway.
     * @return bool
     */
    private static function shows_single_klarna_method($gateway)
    {
    }
    /**
     * Modify restricted gateway title.
     *
     * @param  string                    $title   Gateway title.
     * @param  WC_Payment_Gateway|string $gateway Gateway object or ID.
     * @return string
     */
    public static function restricted_option_title($title, $gateway)
    {
    }
    /**
     * Hide restricted Klarna options.
     *
     * Klarna Payments 3.0+ no longer keeps its categories in the 'klarna_payments_categories' session, but every
     * version passes them through this filter right before rendering them.
     *
     * @param  array $klarna_options Klarna payment categories.
     * @return array
     */
    public static function hide_klarna_options($klarna_options = array())
    {
    }
}
/**
 * WooCommerce Memberships Compatibility.
 *
 * @since  1.4.0
 * @version 3.2.1
 */
class WC_CSP_Memberships_Compatibility
{
    /**
     * Initialization.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Load additional conditions by adding to the global conditions array.
     *
     * @return void
     */
    public static function load_conditions()
    {
    }
}
/**
 * WooCommerce MultiCurrency Compatibility.
 *
 * @since  1.4.0
 * @version 3.2.1
 */
class WC_CSP_MultiCurrency_Compatibility
{
    /**
     * Initialization.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Load additional conditions by adding to the global conditions array.
     *
     * @return void
     */
    public static function load_conditions()
    {
    }
}
/**
 * PayPal Payments Compatibility.
 *
 * @since  3.1.0
 * @version 3.2.1
 */
class WC_CSP_PPCP_Compatibility
{
    const BASE_ID = 'ppcp-gateway';
    /**
     * Initialize the PayPal Payments compatibility.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Get registered PayPal Payments express payment method names.
     * These names are registered client-side via registerExpressPaymentMethod().
     * The pattern is: ppcp-gateway-<methodType> (camelCase)
     *
     * @since 3.1.0
     * @return array Array of express payment method names.
     */
    public static function get_express_payment_methods()
    {
    }
    /**
     * Include express payment methods to available payment methods.
     *
     * @since 3.1.0
     *
     * @param array $payment_method_ids Array of payment method ids.
     * @return array Array of payment method ids.
     */
    public static function handle_all_payment_methods_cart_state($payment_method_ids)
    {
    }
    /**
     * Handle express payment methods restrictions.
     *
     * @since 3.1.0
     *
     * @param array $cart_state Array of cart state gateways restrictions. Keyed by payment method id.
     * @return array
     */
    public static function handle_express_payment_methods($cart_state)
    {
    }
}
/**
 * PayPal Express Compatibility.
 *
 * @version  3.2.1
 */
class WC_CSP_PPE_Compatibility
{
    /**
     * PayPal Express Checkout plugin instance, as returned by wc_gateway_ppec().
     *
     * @var mixed
     */
    private static $wc_ppe;
    /**
     * Initialization.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Remove buttons from cart.
     *
     * @return void
     */
    public static function maybe_remove_paypal_product_button()
    {
    }
    /**
     * Remove buttons from mini-cart.
     *
     * @return void
     */
    public static function maybe_remove_paypal_mini_cart_button()
    {
    }
    /**
     * Remove buttons from single product pages.
     *
     * @return void
     */
    public static function maybe_remove_paypal_cart_button()
    {
    }
    /**
     * Remove buttons from checkout review.
     *
     * Used to be necessary with older versions of WC PPE:
     *
     * add_action( 'woocommerce_review_order_after_submit', array( __CLASS__, 'remove_paypal_checkout_button' ), 20 );
     *
     * @return void
     */
    public static function remove_paypal_checkout_button()
    {
    }
}
/**
 * Stripe Compatibility.
 *
 * @since  1.4.0
 * @version 3.2.1
 */
class WC_CSP_Stripe_Compatibility
{
    /**
     * Initialize the Stripe compatibility.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Hide payment request buttons.
     *
     * @param boolean $hide Whether to hide the payment request buttons.
     * @return boolean
     */
    public static function hide_payment_request($hide)
    {
    }
    /**
     * Get registered Stripe express payment method names.
     * These names are registered client-side via registerExpressPaymentMethod().
     * The pattern is: express_checkout_element_<methodType> (camelCase)
     *
     * @since 3.1.0
     *
     * @return array Array of express payment method names.
     */
    public static function get_express_payment_methods()
    {
    }
    /**
     * Ensures Stripe express payment methods registered on the client are merged into the
     * list of available payment method IDs so CSP rules can recognize and restrict them correctly.
     *
     * @since 3.1.0
     *
     * @param array $payment_method_ids Array of payment method ids.
     * @return array Array of payment method ids.
     */
    public static function handle_all_payment_methods_cart_state($payment_method_ids)
    {
    }
    /**
     * Handle express payment methods restrictions.
     *
     * @since 3.1.0
     *
     * @param array $cart_state Array of cart state gateways restrictions. Keyed by payment method id.
     * @return array
     */
    public static function handle_express_payment_methods($cart_state)
    {
    }
}
/**
 * Woo Payments Compatibility.
 *
 * @since  3.0.2
 * @version 3.2.1
 */
class WC_CSP_WC_Payments_Compatibility
{
    /**
     * Initialize the compatibility class.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Hide payment request buttons if gateway is restricted.
     *
     * @param  bool $is_supported Is gateway supported.
     *
     * @return bool
     */
    public static function handle_quick_pay_buttons($is_supported)
    {
    }
}
/**
 * WooCommerce Subscriptions Compatibility.
 *
 * @version 3.2.1
 */
class WC_CSP_WCS_Compatibility
{
    /**
     * Initialization.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Load additional conditions by adding to the global conditions array.
     *
     * @return void
     */
    public static function load_conditions()
    {
    }
    /**
     * Add an extra billing period variable in all recurring packages.
     *
     * @param  array $packages
     * @return array
     */
    public static function set_period_on_recurring_packages($packages)
    {
    }
    /**
     * Include recurring packages for the checkout process.
     *
     * @param  array $initial_packages
     * @return array
     */
    public static function get_recurring_packages($initial_packages)
    {
    }
}
/**
 * Selected Billing Country Condition.
 *
 * @class    WC_CSP_Condition_Billing_Country_State
 * @version  3.2.1
 */
class WC_CSP_Condition_Billing_Country_State extends \WC_CSP_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Return condition field-specific resolution message which is combined along with others into a single restriction "resolution message".
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return string|false
     */
    public function get_condition_resolution($data, $args)
    {
    }
    /**
     * Evaluate if the condition is in effect or not.
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return boolean
     */
    public function check_condition($data, $args)
    {
    }
    /**
     * Validate, process and return condition field data.
     *
     * @param  array $posted_condition_data
     * @return array|false
     */
    public function process_admin_fields($posted_condition_data)
    {
    }
    /**
     * Get billing countries condition content for restriction metaboxes.
     *
     * @param  int   $index
     * @param  int   $condition_index
     * @param  array $condition_data
     * @return void
     */
    public function get_admin_fields_html($index, $condition_index, $condition_data)
    {
    }
    /*
     *
     * Helpers.
     *
     */
    /**
     * Update countries array to include the countries of each selected continent.
     *
     * @param  array $selected_continents
     * @param  array $selected_countries
     * @param  array $billing_continents_directory
     * @param  array $billing_countries_directory
     *
     * @return array
     */
    public function populate_continent_countries($selected_continents, $selected_countries, $billing_continents_directory, $billing_countries_directory)
    {
    }
    /**
     * Prints states per country.
     *
     * @param  array $selected_countries
     * @param  array $selected_states
     * @param  array $billing_states_directory
     * @return void
     */
    public function print_states($selected_countries, $selected_states, $billing_states_directory)
    {
    }
    /**
     * Get continents that the store sells to in a format that includes billing countries.
     *
     * @return array
     */
    public function get_billing_continents()
    {
    }
}
/**
 * Billing Postcode Condition.
 *
 * @class    WC_CSP_Condition_Billing_Postcode
 * @version  3.2.1
 */
class WC_CSP_Condition_Billing_Postcode extends \WC_CSP_Package_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Return condition field-specific resolution message which is combined along with others into a single restriction "resolution message".
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return string|false
     */
    public function get_condition_resolution($data, $args)
    {
    }
    /**
     * Evaluate if the condition is in effect or not.
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restrictions.
     * @return boolean
     */
    public function check_condition($data, $args)
    {
    }
    /**
     * Condition matching package?
     *
     * @since  1.4.0
     *
     * @param  string $postcode
     * @param  string $country
     * @param  array  $data
     * @return boolean
     */
    protected function is_matching_postcode($postcode, $country, $data)
    {
    }
    /**
     * Validate, process and return condition fields.
     *
     * @param  array $posted_condition_data
     * @return array|false
     */
    public function process_admin_fields($posted_condition_data)
    {
    }
    /**
     * Get billing postcode condition content for restriction metaboxes.
     *
     * @param  int   $index
     * @param  int   $condition_index
     * @param  array $condition_data
     * @return void
     */
    public function get_admin_fields_html($index, $condition_index, $condition_data)
    {
    }
}
/**
 * Attribute in Cart Condition.
 *
 * @class    WC_CSP_Condition_Cart_Attribute
 * @version  3.2.1
 */
class WC_CSP_Condition_Cart_Attribute extends \WC_CSP_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Categories condition matching relationship. Values 'or' | 'and'.
     *
     * @return string
     */
    protected function get_term_relationship()
    {
    }
    /**
     * Return condition resolution message.
     *
     * @param array $data Condition field data.
     * @param array $args Optional arguments passed by restriction.
     *
     * @return string|false
     */
    public function get_condition_resolution($data, $args)
    {
    }
    /**
     * Retrieves the values for a specific product attribute.
     *
     * @param WC_Product $product  The product object.
     * @param string     $taxonomy The attribute name.
     *
     * @return array List of attribute values.
     */
    protected function get_product_attribute_values(\WC_Product $product, string $taxonomy): array
    {
    }
    /**
     * Returns condition resolution subjects.
     *
     * @param array $data Condition field data.
     * @param array $args Optional arguments passed by restriction.
     *
     * @return string[]
     */
    public function get_condition_violation_subjects(array $data, array $args): array
    {
    }
    /**
     * Evaluate if the condition is met.
     *
     * @param array $data Condition field data.
     * @param array $args Optional arguments passed by restriction.
     *
     * @return boolean
     */
    public function check_condition($data, $args)
    {
    }
    /**
     * Checks a set of cart or order items.
     *
     * @param array  $items               Cart or order items.
     * @param string $taxonomy            Attribute taxonomy.
     * @param array  $attribute_value_ids Tag IDs.
     * @param string $modifier            Condition modifier.
     *
     * @return bool
     */
    protected function check_items($items, $taxonomy, $attribute_value_ids, $modifier)
    {
    }
    /**
     * Validate, process and return condition fields.
     *
     * @param array $posted_condition_data Posted condition data.
     *
     * @return array|false
     */
    public function process_admin_fields($posted_condition_data)
    {
    }
    /**
     * Get admin fields for the condition.
     *
     * @param int   $index           Condition index.
     * @param int   $condition_index Condition field index.
     * @param array $condition_data  Condition field data.
     *
     * @return void
     */
    public function get_admin_fields_html($index, $condition_index, $condition_data)
    {
    }
}
/**
 * Backorder in Cart Condition.
 *
 * @class    WC_CSP_Condition_Cart_Backorder
 * @version  3.2.1
 */
class WC_CSP_Condition_Cart_Backorder extends \WC_CSP_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Return condition field-specific resolution message which is combined along with others into a single restriction "resolution message".
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return string|false
     */
    public function get_condition_resolution($data, $args)
    {
    }
    /**
     * Evaluate if the condition is in effect or not.
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return boolean
     */
    public function check_condition($data, $args)
    {
    }
    /**
     * Validate, process and return condition fields.
     *
     * @param  array $posted_condition_data
     * @return array
     */
    public function process_admin_fields($posted_condition_data)
    {
    }
    /**
     * Get backorders-in-cart condition content for global restrictions.
     *
     * @param  int   $index
     * @param  int   $condition_index
     * @param  array $condition_data
     * @return void
     */
    public function get_admin_fields_html($index, $condition_index, $condition_data)
    {
    }
}
/**
 * Brand in Cart Condition.
 *
 * @class    WC_CSP_Condition_Cart_Brand
 * @version  3.2.1
 */
class WC_CSP_Condition_Cart_Brand extends \WC_CSP_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Brands condition matching relationship. Values 'or' | 'and'.
     *
     * @return string
     */
    protected function get_term_relationship()
    {
    }
    /**
     * Return condition field-specific resolution message which is combined along with others into a single restriction "resolution message".
     *
     * @param array $data Condition field data.
     * @param array $args Optional arguments passed by restriction.
     *
     * @return string|false
     */
    public function get_condition_resolution($data, $args)
    {
    }
    /**
     * Returns condition resolution subjects.
     *
     * @param array $data Condition field data.
     * @param array $args Optional arguments passed by restriction.
     *
     * @return string[]
     */
    public function get_condition_violation_subjects(array $data, array $args): array
    {
    }
    /**
     * Evaluate if the condition is in effect or not.
     *
     * @param array $data Condition field data.
     * @param array $args Optional arguments passed by restriction.
     *
     * @return boolean
     */
    public function check_condition($data, $args): bool
    {
    }
    /**
     * Checks a set of cart or order items.
     *
     * @param array  $items    Cart or order items.
     * @param array  $brand_ids  Brand IDs.
     * @param string $modifier Condition modifier.
     *
     * @return bool
     */
    protected function check_items($items, $brand_ids, $modifier)
    {
    }
    /**
     * Validate, process and return condition fields.
     *
     * @param array $posted_condition_data Posted condition data.
     *
     * @return array|false
     */
    public function process_admin_fields($posted_condition_data)
    {
    }
    /**
     * Get brands-in-cart condition content for global restrictions.
     *
     * @param int   $index           Condition index.
     * @param int   $condition_index Condition field index.
     * @param array $condition_data  Condition field data.
     *
     * @return void
     */
    public function get_admin_fields_html($index, $condition_index, $condition_data)
    {
    }
}
/**
 * Category in Cart Condition.
 *
 * @class    WC_CSP_Condition_Cart_Category
 * @version  3.2.1
 */
class WC_CSP_Condition_Cart_Category extends \WC_CSP_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Categories condition matching relationship. Values 'or' | 'and'.
     *
     * @since  1.3.3
     *
     * @return string
     */
    protected function get_term_relationship()
    {
    }
    /**
     * Return condition field-specific resolution message which is combined along with others into a single restriction "resolution message".
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return string|false
     */
    public function get_condition_resolution($data, $args)
    {
    }
    /**
     * Returns condition resolution subjects.
     *
     * @since  1.4.0
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return string[]
     */
    public function get_condition_violation_subjects($data, $args)
    {
    }
    /**
     * Evaluate if the condition is in effect or not.
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return boolean
     */
    public function check_condition($data, $args)
    {
    }
    /**
     * Checks a set of cart or order items.
     *
     * @since  1.3.3
     *
     * @param  array  $items
     * @param  mixed  $category_ids  Category IDs from the condition data.
     * @param  string $modifier
     * @return bool
     */
    protected function check_items($items, $category_ids, $modifier)
    {
    }
    /**
     * Validate, process and return condition fields.
     *
     * @param  array $posted_condition_data
     * @return array|false
     */
    public function process_admin_fields($posted_condition_data)
    {
    }
    /**
     * Get categories-in-cart condition content for global restrictions.
     *
     * @param  int   $index
     * @param  int   $condition_index
     * @param  array $condition_data
     * @return void
     */
    public function get_admin_fields_html($index, $condition_index, $condition_data)
    {
    }
}
/**
 * Cart Item Count Condition.
 *
 * @class    WC_CSP_Condition_Cart_Item_Count
 * @version  3.2.1
 */
class WC_CSP_Condition_Cart_Item_Count extends \WC_CSP_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Return condition field-specific resolution message which is combined along with others into a single restriction "resolution message".
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return string|false
     */
    public function get_condition_resolution($data, $args)
    {
    }
    /**
     * Evaluate if the condition is in effect or not.
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return boolean
     */
    public function check_condition($data, $args)
    {
    }
    /**
     * Validate, process and return condition fields.
     *
     * @param  array $posted_condition_data
     * @return array|false
     */
    public function process_admin_fields($posted_condition_data)
    {
    }
    /**
     * Get quantity conditions content for admin global-level restriction metaboxes.
     *
     * @param  int   $index
     * @param  int   $condition_index
     * @param  array $condition_data
     * @return void
     */
    public function get_admin_fields_html($index, $condition_index, $condition_data)
    {
    }
}
/**
 * Cart Item On-Sale Condition.
 *
 * @class    WC_CSP_Condition_Cart_Item_On_Sale
 * @version  3.2.1
 */
class WC_CSP_Condition_Cart_Item_On_Sale extends \WC_CSP_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Return condition field-specific resolution message which is combined along with others into a single restriction "resolution message".
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return string|false
     */
    public function get_condition_resolution($data, $args)
    {
    }
    /**
     * Evaluate if the condition is in effect or not.
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return boolean
     */
    public function check_condition($data, $args)
    {
    }
    /**
     * Validate, process and return condition fields.
     *
     * @param  array $posted_condition_data
     * @return array
     */
    public function process_admin_fields($posted_condition_data)
    {
    }
    /**
     * Get quantity conditions content for admin product-level restriction metaboxes.
     *
     * @param  int   $index
     * @param  int   $condition_index
     * @param  array $condition_data
     * @return void
     */
    public function get_admin_fields_html($index, $condition_index, $condition_data)
    {
    }
}
/**
 * Cart Item Quantity Condition.
 *
 * @class    WC_CSP_Condition_Cart_Item_Quantity
 * @version  3.2.1
 */
class WC_CSP_Condition_Cart_Item_Quantity extends \WC_CSP_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Return condition field-specific resolution message which is combined along with others into a single restriction "resolution message".
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return string|false
     */
    public function get_condition_resolution($data, $args)
    {
    }
    /**
     * Evaluate if the condition is in effect or not.
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return boolean
     */
    public function check_condition($data, $args)
    {
    }
    /**
     * Validate, process and return condition fields.
     *
     * @param  array $posted_condition_data
     * @return array|false
     */
    public function process_admin_fields($posted_condition_data)
    {
    }
    /**
     * Get quantity conditions content for admin product-level restriction metaboxes.
     *
     * @param  int   $index
     * @param  int   $condition_index
     * @param  array $condition_data
     * @return void
     */
    public function get_admin_fields_html($index, $condition_index, $condition_data)
    {
    }
}
/**
 * Product on Subscription in Cart Condition.
 *
 * @class    WC_CSP_Condition_Cart_Recurring_Item
 * @version  3.2.1
 */
class WC_CSP_Condition_Cart_Recurring_Item extends \WC_CSP_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Return condition field-specific resolution message which is combined along with others into a single restriction "resolution message".
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return string|false
     */
    public function get_condition_resolution($data, $args)
    {
    }
    /**
     * Returns a readable form of the subscription periods.
     *
     * @since  1.4.0
     *
     * @param  array|String $periods  Periods to format.
     * @return array|String
     */
    private function get_billing_period_adverb($periods)
    {
    }
    /**
     * Returns condition violation subjects.
     *
     * @since  1.4.0
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return array
     */
    public function get_condition_violation_subjects($data, $args)
    {
    }
    /**
     * Evaluate if the condition is in effect or not.
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return boolean
     */
    public function check_condition($data, $args)
    {
    }
    /**
     * Validate, process and return condition fields.
     *
     * @param  array $posted_condition_data
     * @return array
     */
    public function process_admin_fields($posted_condition_data)
    {
    }
    /**
     * Get backorders-in-cart condition content for global restrictions.
     *
     * @param  int   $index
     * @param  int   $condition_index
     * @param  array $condition_data
     * @return void
     */
    public function get_admin_fields_html($index, $condition_index, $condition_data)
    {
    }
}
/**
 * Shipping Class in Cart Condition.
 *
 * @class    WC_CSP_Condition_Cart_Shipping_Class
 * @version  3.2.1
 */
class WC_CSP_Condition_Cart_Shipping_Class extends \WC_CSP_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Return condition field-specific resolution message which is combined along with others into a single restriction "resolution message".
     *
     * @param  array $data   condition field data
     * @param  array $args   optional arguments passed by restriction
     * @return string|false
     */
    public function get_condition_resolution($data, $args)
    {
    }
    /**
     * Returns condition resolution placeholder.
     *
     * @since  1.4.0
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return string
     */
    public function get_condition_resolution_placeholder($data, $args)
    {
    }
    /**
     * Returns condition violation subjects.
     *
     * @since  1.4.0
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return array
     */
    public function get_condition_violation_subjects($data, $args)
    {
    }
    /**
     * Evaluate if the condition is in effect or not.
     *
     * @param  array $data   condition field data
     * @param  array $args   optional arguments passed by restrictions
     * @return boolean
     */
    public function check_condition($data, $args)
    {
    }
    /**
     * Validate, process and return condition fields.
     *
     * @param  array $posted_condition_data
     * @return array|false
     */
    public function process_admin_fields($posted_condition_data)
    {
    }
    /**
     * Get shipping-class-in-cart condition content for global restrictions.
     *
     * @param  int   $index
     * @param  int   $condition_index
     * @param  array $condition_data
     * @return void
     */
    public function get_admin_fields_html($index, $condition_index, $condition_data)
    {
    }
}
/**
 * Cart Subtotal Condition.
 *
 * @class    WC_CSP_Condition_Cart_Subtotal
 * @version  3.2.1
 */
class WC_CSP_Condition_Cart_Subtotal extends \WC_CSP_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Return condition field-specific resolution message which is combined along with others into a single restriction "resolution message".
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return string|false
     */
    public function get_condition_resolution($data, $args)
    {
    }
    /**
     * Evaluate if the condition is in effect or not.
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restrictions.
     * @return boolean
     */
    public function check_condition($data, $args)
    {
    }
    /**
     * Validate, process and return condition fields.
     *
     * @param  array $posted_condition_data
     * @return array|false
     */
    public function process_admin_fields($posted_condition_data)
    {
    }
    /**
     * Get cart total conditions content for admin restriction metaboxes.
     *
     * @param  int   $index
     * @param  int   $condition_index Condition index.
     * @param  array $condition_data
     * @return void
     */
    public function get_admin_fields_html($index, $condition_index, $condition_data)
    {
    }
}
/**
 * Tag in Cart Condition.
 *
 * @class    WC_CSP_Condition_Cart_Tag
 * @version  3.2.1
 */
class WC_CSP_Condition_Cart_Tag extends \WC_CSP_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Tags condition matching relationship. Values 'or' | 'and'.
     *
     * @return string
     */
    protected function get_term_relationship()
    {
    }
    /**
     * Return condition field-specific resolution message which is combined along with others into a single restriction "resolution message".
     *
     * @param array $data Condition field data.
     * @param array $args Optional arguments passed by restriction.
     *
     * @return string|false
     */
    public function get_condition_resolution($data, $args)
    {
    }
    /**
     * Returns condition resolution subjects.
     *
     * @param array $data Condition field data.
     * @param array $args Optional arguments passed by restriction.
     *
     * @return string[]
     */
    public function get_condition_violation_subjects(array $data, array $args): array
    {
    }
    /**
     * Evaluate if the condition is in effect or not.
     *
     * @param array $data Condition field data.
     * @param array $args Optional arguments passed by restriction.
     *
     * @return boolean
     */
    public function check_condition($data, $args): bool
    {
    }
    /**
     * Checks a set of cart or order items.
     *
     * @param array  $items    Cart or order items.
     * @param array  $tag_ids  Tag IDs.
     * @param string $modifier Condition modifier.
     *
     * @return bool
     */
    protected function check_items($items, $tag_ids, $modifier)
    {
    }
    /**
     * Validate, process and return condition fields.
     *
     * @param array $posted_condition_data Posted condition data.
     *
     * @return array|false
     */
    public function process_admin_fields($posted_condition_data)
    {
    }
    /**
     * Get tags-in-cart condition content for global restrictions.
     *
     * @param int   $index           Condition index.
     * @param int   $condition_index Condition field index.
     * @param array $condition_data  Condition field data.
     *
     * @return void
     */
    public function get_admin_fields_html($index, $condition_index, $condition_data)
    {
    }
}
/**
 * Cart Total Condition.
 *
 * @class    WC_CSP_Condition_Cart_Total
 * @version  3.2.1
 */
class WC_CSP_Condition_Cart_Total extends \WC_CSP_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Return condition field-specific resolution message which is combined along with others into a single restriction "resolution message".
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return string|false
     */
    public function get_condition_resolution($data, $args)
    {
    }
    /**
     * Evaluate if the condition is in effect or not.
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restrictions.
     * @return boolean
     */
    public function check_condition($data, $args)
    {
    }
    /**
     * Validate, process and return condition fields.
     *
     * @param  array $posted_condition_data
     * @return array|false
     */
    public function process_admin_fields($posted_condition_data)
    {
    }
    /**
     * Get cart total conditions content for admin restriction metaboxes.
     *
     * @param  int   $index
     * @param  int   $condition_index Condition index.
     * @param  array $condition_data
     * @return void
     */
    public function get_admin_fields_html($index, $condition_index, $condition_data)
    {
    }
}
/**
 * Coupon Code Condition.
 *
 * @class    WC_CSP_Condition_Coupon_Code
 * @version  3.2.1
 */
class WC_CSP_Condition_Coupon_Code extends \WC_CSP_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Return condition field-specific resolution message which is combined along with others into a single restriction "resolution message".
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return string|false
     */
    public function get_condition_resolution($data, $args)
    {
    }
    /**
     * Returns condition resolution placeholder.
     *
     * @since  1.4.0
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return string
     */
    public function get_condition_resolution_placeholder($data, $args)
    {
    }
    /**
     * Returns condition violation subjects.
     *
     * @since  1.4.0
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return string[]
     */
    public function get_condition_violation_subjects($data, $args)
    {
    }
    /**
     * Evaluate if the condition is in effect or not.
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restrictions.
     * @return boolean
     */
    public function check_condition($data, $args)
    {
    }
    /**
     * Validate, process and return condition fields.
     *
     * @param  array $posted_condition_data
     * @return array|false
     */
    public function process_admin_fields($posted_condition_data)
    {
    }
    /**
     * Get cart total conditions content for admin restriction metaboxes.
     *
     * @param  int   $index
     * @param  int   $condition_index Condition index.
     * @param  array $condition_data
     * @return void
     */
    public function get_admin_fields_html($index, $condition_index, $condition_data)
    {
    }
}
/**
 * Selected Currency Condition.
 *
 * @class    WC_CSP_Condition_Currency
 * @version  3.2.1
 */
class WC_CSP_Condition_Currency extends \WC_CSP_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Return condition field-specific resolution message which is combined along with others into a single restriction "resolution message".
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return string|false
     */
    public function get_condition_resolution($data, $args)
    {
    }
    /**
     * Evaluate if a condition field is in effect or not.
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restrictions.
     * @return boolean
     */
    public function check_condition($data, $args)
    {
    }
    /**
     * Validate, process and return condition fields.
     *
     * @param  array $posted_condition_data
     * @return array|false
     */
    public function process_admin_fields($posted_condition_data)
    {
    }
    /**
     * Get currency condition content for product-level restriction metaboxes.
     *
     * @param  int   $index
     * @param  int   $condition_index
     * @param  array $condition_data
     * @return void
     */
    public function get_admin_fields_html($index, $condition_index, $condition_data)
    {
    }
}
/**
 * Customer Role Condition.
 *
 * @class    WC_CSP_Condition_Customer
 * @version  3.2.1
 */
class WC_CSP_Condition_Customer_Role extends \WC_CSP_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Return condition field-specific resolution message which is combined along with others into a single restriction "resolution message".
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return string|false
     */
    public function get_condition_resolution($data, $args)
    {
    }
    /**
     * Evaluate if the condition is in effect or not.
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restrictions.
     * @return boolean
     */
    public function check_condition($data, $args)
    {
    }
    /**
     * Validate, process and return condition fields.
     *
     * @param  array $posted_condition_data
     * @return array|false
     */
    public function process_admin_fields($posted_condition_data)
    {
    }
    /**
     * Get categories-in-cart condition content for global restrictions.
     *
     * @param  int   $index
     * @param  int   $condition_index
     * @param  array $condition_data
     * @return void
     */
    public function get_admin_fields_html($index, $condition_index, $condition_data)
    {
    }
}
/**
 * Customer Condition.
 *
 * @class    WC_CSP_Condition_Customer
 * @version  3.2.1
 */
class WC_CSP_Condition_Customer extends \WC_CSP_Condition
{
    /**
     * Configuration settings for the available modifiers.
     *
     * @var array<string, array{label: string}>
     **/
    protected $available_modifiers = array();
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Return condition field-specific resolution message which is combined along with others into a single restriction "resolution message".
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return string|false
     */
    public function get_condition_resolution($data, $args)
    {
    }
    /**
     * Evaluate if the condition is in effect or not.
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restrictions.
     * @return boolean
     */
    public function check_condition($data, $args)
    {
    }
    /**
     * Check if customer's e-mail is restricted.
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restrictions.
     * @return boolean
     */
    public function check_emails($data, $args)
    {
    }
    /**
     * Check if customer is a new or a returning one.
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restrictions.
     * @param  int   $user_id  Customer user ID, 0 for guests.
     * @return boolean
     */
    public function check_customer_status($data, $args, $user_id)
    {
    }
    /**
     * Validate, process and return condition fields.
     *
     * @param  array $posted_condition_data
     * @return array|false
     */
    public function process_admin_fields($posted_condition_data)
    {
    }
    /**
     * Filter out invalid e-mails.
     *
     * @param  string[]   $posted_emails E-mails entered in the condition.
     * @param  int|string $position Rule number shown in the error notices.
     * @return string[]
     */
    public function filter_invalid_emails($posted_emails, $position)
    {
    }
    /**
     * Get Customer condition content for restriction metaboxes.
     *
     * @param  int   $index
     * @param  int   $condition_index
     * @param  array $condition_data
     * @return void
     */
    public function get_admin_fields_html($index, $condition_index, $condition_data)
    {
    }
    /**
     * Prepare and return the freetext html fields
     *
     * @param string $current_modifier
     * @param array  $modifiers
     * @param array  $values
     * @param string $value_input_name
     *
     * @return false|string
     */
    protected function get_admin_fields_freetext_html($current_modifier, $modifiers, $values, $value_input_name)
    {
    }
    /**
     * Prepare and return the value placeholder field.
     *
     * @param string $current_modifier
     * @param array  $modifiers
     *
     * @return false|string
     */
    protected function get_admin_fields_placeholder_html($current_modifier, $modifiers)
    {
    }
}
/**
 * Date Time Condition.
 *
 * @class    WC_CSP_Condition_Date_Time
 * @version  3.2.1
 */
class WC_CSP_Condition_Date_Time extends \WC_CSP_Package_Condition
{
    /**
     * Maximum accepted length of a raw date/time condition value.
     *
     * @var int
     */
    protected const MAX_DATE_VALUE_LENGTH = 1024;
    /**
     * Maximum accepted number of date/time values after expanding ranges.
     *
     * @var int
     */
    protected const MAX_EXPANDED_DATE_VALUES = 1024;
    /**
     * Configuration settings for the available modifiers, keyed by modifier.
     *
     * @var array<string, array{dt_format: string, label: string, range: non-empty-array<int>, sample?: string}>
     */
    protected $available_modifiers = array();
    /**
     * Accepted values for each date part, keyed by date part.
     *
     * @var array<string, non-empty-array<int>>
     */
    protected $date_ranges = array();
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Parses the a string of numeric values, separated by commas and checks if they
     * are in range with the default date ranges.
     *
     * If a string has - , then it gets replaced with the equivalent values.
     *
     * @param  mixed  $value  Value entered in the admin.
     * @param  string $modifier  The date modifier.
     * @return array|false
     */
    protected function date_value_parser($value, $modifier)
    {
    }
    /**
     * Return condition field-specific resolution message which is combined along with others into a single restriction "resolution message".
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return string|false
     */
    public function get_condition_resolution($data, $args)
    {
    }
    /**
     * Evaluate if the condition is in effect or not.
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restrictions.
     * @return boolean
     */
    public function check_condition($data, $args)
    {
    }
    /**
     * Validate, process and return condition fields.
     *
     * @param  array $posted_condition_data
     * @return boolean|array
     */
    public function process_admin_fields($posted_condition_data)
    {
    }
    /**
     * Get date/time condition content for restriction metaboxes.
     *
     * @param  int   $index
     * @param  int   $condition_index
     * @param  array $condition_data
     * @return void
     */
    public function get_admin_fields_html($index, $condition_index, $condition_data)
    {
    }
    /**
     * Prepare and return the freetext html fields
     *
     * @param string $current_modifier
     * @param array  $modifiers
     * @param string $values
     * @param string $value_input_name
     *
     * @return false|string
     */
    protected function get_admin_fields_freetext_html($current_modifier, $modifiers, $values, $value_input_name)
    {
    }
    /**
     * Prepare and return the select2 html fields
     *
     * @param string $current_modifier
     * @param array  $modifiers
     * @param array  $values_array
     * @param string $value_input_name
     * @param string $type
     *
     * @return false|string
     */
    protected function get_admin_fields_select_html($current_modifier, $modifiers, $values_array, $value_input_name, $type)
    {
    }
}
/**
 * Gift Card Product Condition.
 *
 * @class    WC_CSP_Condition_Gift_Card_Product
 * @version  3.2.1
 */
class WC_CSP_Condition_Gift_Card_Product extends \WC_CSP_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Return condition field-specific resolution message which is combined along with others into a single restriction "resolution message".
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return string|false
     */
    public function get_condition_resolution($data, $args)
    {
    }
    /**
     * Evaluate if the condition is in effect or not.
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return boolean
     */
    public function check_condition($data, $args)
    {
    }
    /**
     * Validate, process and return condition fields.
     *
     * @param  array $posted_condition_data
     * @return array
     */
    public function process_admin_fields($posted_condition_data)
    {
    }
    /**
     * Get quantity conditions content for admin product-level restriction metaboxes.
     *
     * @param  int   $index
     * @param  int   $condition_index
     * @param  array $condition_data
     * @return void
     */
    public function get_admin_fields_html($index, $condition_index, $condition_data)
    {
    }
}
/**
 * Gift Cards Condition.
 *
 * @class    WC_CSP_Condition_Gift_Cards
 * @version  3.2.1
 */
class WC_CSP_Condition_Gift_Cards extends \WC_CSP_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Return condition field-specific resolution message which is combined along with others into a single restriction "resolution message".
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return string|false
     */
    public function get_condition_resolution($data, $args)
    {
    }
    /**
     * Evaluate if the condition is in effect or not.
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return boolean
     */
    public function check_condition($data, $args)
    {
    }
    /**
     * Validate, process and return condition fields.
     *
     * @param  array $posted_condition_data
     * @return array
     */
    public function process_admin_fields($posted_condition_data)
    {
    }
    /**
     * Get quantity conditions content for admin product-level restriction metaboxes.
     *
     * @param  int   $index
     * @param  int   $condition_index
     * @param  array $condition_data
     * @return void
     */
    public function get_admin_fields_html($index, $condition_index, $condition_data)
    {
    }
}
/**
 * Membership Plan Condition.
 *
 * @class    WC_CSP_Condition_Membership_Plan
 * @version  3.2.1
 */
class WC_CSP_Condition_Membership_Plan extends \WC_CSP_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Return condition field-specific resolution message which is combined along with others into a single restriction "resolution message".
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return string|false
     */
    public function get_condition_resolution($data, $args)
    {
    }
    /**
     * Evaluate if the condition is in effect or not.
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restrictions.
     * @return boolean
     */
    public function check_condition($data, $args)
    {
    }
    /**
     * Guest checkout is allowed when checking for not active plans.
     *
     * @return bool
     */
    private function allow_guest_checkout()
    {
    }
    /**
     * Validate, process and return condition fields.
     *
     * @param  array $posted_condition_data
     * @return array|false
     */
    public function process_admin_fields($posted_condition_data)
    {
    }
    /**
     * Get cart total conditions content for admin restriction metaboxes.
     *
     * @param  int   $index
     * @param  int   $condition_index Condition index.
     * @param  array $condition_data
     * @return void
     */
    public function get_admin_fields_html($index, $condition_index, $condition_data)
    {
    }
}
/**
 * Order Status Condition.
 *
 * @class    WC_CSP_Condition_Order_Status
 * @version  3.2.1
 */
class WC_CSP_Condition_Order_Status extends \WC_CSP_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Return condition field-specific resolution message which is combined along with others into a single restriction "resolution message".
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return string|false
     */
    public function get_condition_resolution($data, $args)
    {
    }
    /**
     * Evaluate if the condition is in effect or not.
     *
     * @param  array $data   condition field data
     * @param  array $args   optional arguments passed by restrictions
     * @return boolean
     */
    public function check_condition($data, $args)
    {
    }
    /**
     * Validate, process and return condition fields.
     *
     * @param  array $posted_condition_data
     * @return array|false
     */
    public function process_admin_fields($posted_condition_data)
    {
    }
    /**
     * Get order statuses condition content for global restrictions.
     * Modifiers: 'in', 'not-in'
     *
     * @param  int   $index
     * @param  int   $condition_index
     * @param  array $condition_data
     * @return void
     */
    public function get_admin_fields_html($index, $condition_index, $condition_data)
    {
    }
}
/**
 * Order Total Condition.
 *
 * @class    WC_CSP_Condition_Order_Total
 * @version  3.2.1
 */
class WC_CSP_Condition_Order_Total extends \WC_CSP_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Return condition field-specific resolution message which is combined along with others into a single restriction "resolution message".
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return string|false
     */
    public function get_condition_resolution($data, $args)
    {
    }
    /**
     * Evaluate if the condition is in effect or not.
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restrictions.
     * @return boolean
     */
    public function check_condition($data, $args)
    {
    }
    /**
     * Validate, process and return condition fields.
     *
     * @param  array $posted_condition_data
     * @return array|false
     */
    public function process_admin_fields($posted_condition_data)
    {
    }
    /**
     * Get order total conditions content for admin restriction metaboxes.
     *
     * @param  int   $index
     * @param  int   $condition_index Condition index.
     * @param  array $condition_data
     * @return void
     */
    public function get_admin_fields_html($index, $condition_index, $condition_data)
    {
    }
}
/**
 * Attribute in Package Condition.
 *
 * @class    WC_CSP_Condition_Package_Attribute
 * @version  3.2.1
 */
class WC_CSP_Condition_Package_Attribute extends \WC_CSP_Package_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Categories condition matching relationship. Values 'or' | 'and'.
     *
     * @return string
     */
    protected function get_term_relationship()
    {
    }
    /**
     * Return condition resolution message.
     *
     * @param array $data Condition field data.
     * @param array $args Optional arguments passed by restriction.
     *
     * @return string|false
     */
    public function get_condition_resolution($data, $args)
    {
    }
    /**
     * Retrieves the values for a specific product attribute.
     *
     * @param WC_Product $product  The product object.
     * @param string     $taxonomy The attribute name.
     *
     * @return array List of attribute values.
     */
    protected function get_product_attribute_values(\WC_Product $product, string $taxonomy): array
    {
    }
    /**
     * Returns condition resolution subjects.
     *
     * @param array $data Condition field data.
     * @param array $args Optional arguments passed by restriction.
     *
     * @return string[]
     */
    public function get_condition_violation_subjects(array $data, array $args): array
    {
    }
    /**
     * Evaluate if the condition is met.
     *
     * @param array $data Condition field data.
     * @param array $args Optional arguments passed by restriction.
     *
     * @return boolean
     */
    public function check_condition($data, $args)
    {
    }
    /**
     * Checks a package.
     *
     * @param array  $package_contents    Cart items.
     * @param string $taxonomy            Attribute taxonomy.
     * @param array  $attribute_value_ids Tag IDs.
     * @param string $modifier            Condition modifier.
     *
     * @return bool
     */
    protected function check_items($package_contents, $taxonomy, $attribute_value_ids, $modifier)
    {
    }
    /**
     * Validate, process and return condition fields.
     *
     * @param array $posted_condition_data Posted condition data.
     *
     * @return array|false
     */
    public function process_admin_fields($posted_condition_data)
    {
    }
    /**
     * Get admin fields for the condition.
     *
     * @param int   $index           Condition index.
     * @param int   $condition_index Condition field index.
     * @param array $condition_data  Condition field data.
     *
     * @return void
     */
    public function get_admin_fields_html($index, $condition_index, $condition_data)
    {
    }
}
/**
 * Backorder in Package Condition.
 *
 * @class    WC_CSP_Condition_Package_Backorder
 * @version  3.2.1
 */
class WC_CSP_Condition_Package_Backorder extends \WC_CSP_Package_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Return condition field-specific resolution message which is combined along with others into a single restriction "resolution message".
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return string|false
     */
    public function get_condition_resolution($data, $args)
    {
    }
    /**
     * Evaluate if the condition is in effect or not.
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return boolean
     */
    public function check_condition($data, $args)
    {
    }
    /**
     * Validate, process and return condition fields.
     *
     * @param  array $posted_condition_data
     * @return array
     */
    public function process_admin_fields($posted_condition_data)
    {
    }
    /**
     * Get backorders-in-cart condition content for global restrictions.
     *
     * @param  int   $index
     * @param  int   $condition_index
     * @param  array $condition_data
     * @return void
     */
    public function get_admin_fields_html($index, $condition_index, $condition_data)
    {
    }
}
/**
 * Brand in Package Condition.
 *
 * @class    WC_CSP_Condition_Package_Brand
 * @version  3.2.1
 */
class WC_CSP_Condition_Package_Brand extends \WC_CSP_Package_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Brands condition matching relationship. Values 'or' | 'and'.
     *
     * @return string
     */
    protected function get_term_relationship(): string
    {
    }
    /**
     * Return condition field-specific resolution message which is combined along with others into a single restriction "resolution message".
     *
     * @param array $data Condition field data.
     * @param array $args Optional arguments passed by restriction.
     *
     * @return string|false
     */
    public function get_condition_resolution($data, $args)
    {
    }
    /**
     * Returns condition resolution subjects.
     *
     * @param array $data Condition field data.
     * @param array $args Optional arguments passed by restriction.
     *
     * @return string[]
     */
    public function get_condition_violation_subjects(array $data, array $args): array
    {
    }
    /**
     * Evaluate if a condition field is in effect or not.
     *
     * @param array $data Condition field data.
     * @param array $args Optional arguments passed by restrictions.
     *
     * @return boolean
     */
    public function check_condition($data, $args): bool
    {
    }
    /**
     * Checks a package.
     *
     * @param array  $package_contents Cart items.
     * @param array  $brand_ids          Brand IDs.
     * @param string $modifier         Condition modifier.
     *
     * @return bool
     */
    protected function check_package(array $package_contents, array $brand_ids, string $modifier): bool
    {
    }
    /**
     * Validate, process and return condition fields.
     *
     * @param array $posted_condition_data Posted condition data.
     *
     * @return array|bool
     */
    public function process_admin_fields($posted_condition_data)
    {
    }
    /**
     * Get brands-in-package condition content for global restrictions.
     *
     * @param int   $index           Condition index.
     * @param int   $condition_index Condition field index.
     * @param array $condition_data  Condition field data.
     *
     * @return void
     */
    public function get_admin_fields_html($index, $condition_index, $condition_data): void
    {
    }
}
/**
 * Category in Package Condition.
 *
 * @class    WC_CSP_Condition_Package_Category
 * @version  3.2.1
 */
class WC_CSP_Condition_Package_Category extends \WC_CSP_Package_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Categories condition matching relationship. Values 'or' | 'and'.
     *
     * @since  1.3.3
     *
     * @return string
     */
    protected function get_term_relationship()
    {
    }
    /**
     * Return condition field-specific resolution message which is combined along with others into a single restriction "resolution message".
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return string|false
     */
    public function get_condition_resolution($data, $args)
    {
    }
    /**
     * Returns condition resolution placeholder.
     *
     * @since  1.4.0
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return string
     */
    public function get_condition_resolution_placeholder($data, $args)
    {
    }
    /**
     * Returns condition resolution subjects.
     *
     * @since  1.4.0
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return string[]
     */
    public function get_condition_violation_subjects($data, $args)
    {
    }
    /**
     * Evaluate if a condition field is in effect or not.
     *
     * @param  array $data   condition field data
     * @param  array $args   optional arguments passed by restrictions
     * @return boolean
     */
    public function check_condition($data, $args)
    {
    }
    /**
     * Checks a package.
     *
     * @since  1.3.3
     *
     * @param  array  $package_contents
     * @param  mixed  $category_ids  Category IDs from the condition data.
     * @param  string $modifier
     * @return bool
     */
    protected function check_package($package_contents, $category_ids, $modifier)
    {
    }
    /**
     * Validate, process and return condition fields.
     *
     * @param  array $posted_condition_data
     * @return array|false
     */
    public function process_admin_fields($posted_condition_data)
    {
    }
    /**
     * Get categories-in-package condition content for global restrictions.
     *
     * @param  int   $index
     * @param  int   $condition_index
     * @param  array $condition_data
     * @return void
     */
    public function get_admin_fields_html($index, $condition_index, $condition_data)
    {
    }
}
/**
 * Package Item Quantity Condition.
 *
 * @class    WC_CSP_Condition_Package_Item_Quantity
 * @version  3.2.1
 */
class WC_CSP_Condition_Package_Item_Quantity extends \WC_CSP_Package_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Return condition field-specific resolution message which is combined along with others into a single restriction "resolution message".
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return string|false
     */
    public function get_condition_resolution($data, $args)
    {
    }
    /**
     * Evaluate if the condition is in effect or not.
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return boolean
     */
    public function check_condition($data, $args)
    {
    }
    /**
     * Build an order-backed package compatible with the checkout package shape.
     *
     * @since  3.1.6
     *
     * @param  WC_Order $order Order being paid.
     * @return array
     */
    protected function get_order_package($order)
    {
    }
    /**
     * Condition matching package?
     *
     * @since  1.4.0
     *
     * @param  array $package
     * @param  array $data
     * @param  array $args
     * @return boolean
     */
    protected function is_matching_package($package, $data, $args)
    {
    }
    /**
     * Get items in package.
     *
     * @since  1.4.0
     *
     * @param  array $package
     * @param  array $data
     * @param  array $args
     * @return int
     */
    protected function get_items_in_package($package, $data, $args)
    {
    }
    /**
     * Validate, process and return condition fields.
     *
     * @param  array $posted_condition_data
     * @return array|false
     */
    public function process_admin_fields($posted_condition_data)
    {
    }
    /**
     * Get quantity conditions content for admin product-level restriction metaboxes.
     *
     * @param  int   $index
     * @param  int   $condition_index
     * @param  array $condition_data
     * @return void
     */
    public function get_admin_fields_html($index, $condition_index, $condition_data)
    {
    }
}
/**
 * Product on Subscription in Package Condition.
 *
 * @class    WC_CSP_Condition_Package_Recurring_Item
 * @version  3.2.1
 */
class WC_CSP_Condition_Package_Recurring_Item extends \WC_CSP_Package_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Return condition field-specific resolution message which is combined along with others into a single restriction "resolution message".
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return string|false
     */
    public function get_condition_resolution($data, $args)
    {
    }
    /**
     * Evaluate if the condition is in effect or not.
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return boolean
     */
    public function check_condition($data, $args)
    {
    }
    /**
     * Validate, process and return condition fields.
     *
     * @param  array $posted_condition_data
     * @return array
     */
    public function process_admin_fields($posted_condition_data)
    {
    }
    /**
     * Returns a readable form of the subscription periods.
     *
     * @since  1.4.0
     *
     * @param  array|String $periods  Periods to format.
     * @return array|String
     */
    private function get_billing_period_adverb($periods)
    {
    }
    /**
     * Get backorders-in-cart condition content for global restrictions.
     *
     * @param  int   $index
     * @param  int   $condition_index
     * @param  array $condition_data
     * @return void
     */
    public function get_admin_fields_html($index, $condition_index, $condition_data)
    {
    }
}
/**
 * Recurring frequency in Package Condition.
 *
 * @class    WC_CSP_Condition_Package_Recurring_Package
 * @version  3.2.1
 */
class WC_CSP_Condition_Package_Recurring_Package extends \WC_CSP_Package_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Return condition field-specific resolution message which is combined along with others into a single restriction "resolution message".
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return string|false
     */
    public function get_condition_resolution($data, $args)
    {
    }
    /**
     * Evaluate if the condition is in effect or not.
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return boolean
     */
    public function check_condition($data, $args)
    {
    }
    /**
     * Validate, process and return condition fields.
     *
     * @param  array $posted_condition_data
     * @return array
     */
    public function process_admin_fields($posted_condition_data)
    {
    }
    /**
     * Returns a readable form of the subscription periods.
     *
     * @since  1.4.0
     *
     * @param  array|String $periods  Periods to format.
     * @return array|String
     */
    private function get_billing_period_adverb($periods)
    {
    }
    /**
     * Get backorders-in-cart condition content for global restrictions.
     *
     * @param  int   $index
     * @param  int   $condition_index
     * @param  array $condition_data
     * @return void
     */
    public function get_admin_fields_html($index, $condition_index, $condition_data)
    {
    }
}
/**
 * Shipping Class in Package Condition.
 *
 * @class    WC_CSP_Condition_Package_Shipping_Class
 * @version  3.2.1
 */
class WC_CSP_Condition_Package_Shipping_Class extends \WC_CSP_Package_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Return condition field-specific resolution message which is combined along with others into a single restriction "resolution message".
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return string|false
     */
    public function get_condition_resolution($data, $args)
    {
    }
    /**
     * Returns condition resolution placeholder.
     *
     * @since  1.4.0
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return string
     */
    public function get_condition_resolution_placeholder($data, $args)
    {
    }
    /**
     * Returns condition resolution subjects.
     *
     * @since  1.4.0
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return string[]
     */
    public function get_condition_violation_subjects($data, $args)
    {
    }
    /**
     * Evaluate if the condition is in effect or not.
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restrictions.
     * @return boolean
     */
    public function check_condition($data, $args)
    {
    }
    /**
     * Validate, process and return condition fields.
     *
     * @param  array $posted_condition_data
     * @return array|false
     */
    public function process_admin_fields($posted_condition_data)
    {
    }
    /**
     * Get shipping-class-in-package condition content for global restrictions.
     *
     * @param  int   $index
     * @param  int   $condition_index
     * @param  array $condition_data
     * @return void
     */
    public function get_admin_fields_html($index, $condition_index, $condition_data)
    {
    }
}
/**
 * Tag in Package Condition.
 *
 * @class    WC_CSP_Condition_Package_Tag
 * @version  3.2.1
 */
class WC_CSP_Condition_Package_Tag extends \WC_CSP_Package_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Tags condition matching relationship. Values 'or' | 'and'.
     *
     * @return string
     */
    protected function get_term_relationship(): string
    {
    }
    /**
     * Return condition field-specific resolution message which is combined along with others into a single restriction "resolution message".
     *
     * @param array $data Condition field data.
     * @param array $args Optional arguments passed by restriction.
     *
     * @return string|false
     */
    public function get_condition_resolution($data, $args)
    {
    }
    /**
     * Returns condition resolution subjects.
     *
     * @param array $data Condition field data.
     * @param array $args Optional arguments passed by restriction.
     *
     * @return string[]
     */
    public function get_condition_violation_subjects(array $data, array $args): array
    {
    }
    /**
     * Evaluate if a condition field is in effect or not.
     *
     * @param array $data Condition field data.
     * @param array $args Optional arguments passed by restrictions.
     *
     * @return boolean
     */
    public function check_condition($data, $args): bool
    {
    }
    /**
     * Checks a package.
     *
     * @param array  $package_contents Cart items.
     * @param array  $tag_ids          Tag IDs.
     * @param string $modifier         Condition modifier.
     *
     * @return bool
     */
    protected function check_package(array $package_contents, array $tag_ids, string $modifier): bool
    {
    }
    /**
     * Validate, process and return condition fields.
     *
     * @param array $posted_condition_data Posted condition data.
     *
     * @return array|bool
     */
    public function process_admin_fields($posted_condition_data)
    {
    }
    /**
     * Get tags-in-package condition content for global restrictions.
     *
     * @param int   $index           Condition index.
     * @param int   $condition_index Condition field index.
     * @param array $condition_data  Condition field data.
     *
     * @return void
     */
    public function get_admin_fields_html($index, $condition_index, $condition_data): void
    {
    }
}
/**
 * Package Total Condition.
 *
 * @class    WC_CSP_Condition_Package_Total
 * @version  3.2.1
 */
class WC_CSP_Condition_Package_Total extends \WC_CSP_Package_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Return condition field-specific resolution message which is combined along with others into a single restriction "resolution message".
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return string|false
     */
    public function get_condition_resolution($data, $args)
    {
    }
    /**
     * Evaluate if the condition is in effect or not.
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restrictions.
     * @return boolean
     */
    public function check_condition($data, $args)
    {
    }
    /**
     * Validate, process and return condition fields.
     *
     * @param  array $posted_condition_data
     * @return array|false
     */
    public function process_admin_fields($posted_condition_data)
    {
    }
    /**
     * Get cart total conditions content for admin restriction metaboxes.
     *
     * @param  int   $index
     * @param  int   $condition_index Condition index.
     * @param  array $condition_data
     * @return void
     */
    public function get_admin_fields_html($index, $condition_index, $condition_data)
    {
    }
}
/**
 * Package Weight Condition.
 *
 * @class    WC_CSP_Condition_Package_Weight
 * @version  3.2.1
 */
class WC_CSP_Condition_Package_Weight extends \WC_CSP_Package_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Return condition field-specific resolution message which is combined along with others into a single restriction "resolution message".
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return string|false
     */
    public function get_condition_resolution($data, $args)
    {
    }
    /**
     * Evaluate if a condition field is in effect or not.
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restrictions.
     * @return boolean
     */
    public function check_condition($data, $args)
    {
    }
    /**
     * Validate, process and return condition fields.
     *
     * @param  array $posted_condition_data
     * @return array|false
     */
    public function process_admin_fields($posted_condition_data)
    {
    }
    /**
     * Get package weight condition content for admin global restriction metaboxes.
     *
     * @param  int   $index
     * @param  int   $condition_index
     * @param  array $condition_data
     * @return void
     */
    public function get_admin_fields_html($index, $condition_index, $condition_data)
    {
    }
}
/**
 * Selected Shipping Country/State Condition.
 *
 * @class    WC_CSP_Condition_Shipping_Country_State
 * @version  3.2.1
 */
class WC_CSP_Condition_Shipping_Country_State extends \WC_CSP_Package_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Return condition field-specific resolution message which is combined along with others into a single restriction "resolution message".
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return string|false
     */
    public function get_condition_resolution($data, $args)
    {
    }
    /**
     * Evaluate if a condition field is in effect or not.
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restrictions.
     * @return boolean
     */
    public function check_condition($data, $args)
    {
    }
    /**
     * Validate, process and return condition field data.
     *
     * @param  array $posted_condition_data
     * @return array|false
     */
    public function process_admin_fields($posted_condition_data)
    {
    }
    /**
     * Get shipping countries condition content for product-level restriction metaboxes.
     *
     * @param  int   $index
     * @param  int   $condition_index
     * @param  array $condition_data
     * @return void
     */
    public function get_admin_fields_html($index, $condition_index, $condition_data)
    {
    }
    /*
     *
     * Helpers.
     *
     */
    /**
     * Update countries array to include the countries of each selected continent.
     *
     * @param  array $selected_continents
     * @param  array $selected_countries
     * @param  array $shipping_continents_directory
     * @param  array $shipping_countries_directory
     *
     * @return array
     */
    public function populate_continent_countries($selected_continents, $selected_countries, $shipping_continents_directory, $shipping_countries_directory)
    {
    }
    /**
     * Prints states per country.
     *
     * @param  array $selected_countries
     * @param  array $selected_states
     * @param  array $shipping_states_directory
     * @return void
     */
    public function print_states($selected_countries, $selected_states, $shipping_states_directory)
    {
    }
}
/**
 * Selected Shipping Method Condition.
 *
 * @class    WC_CSP_Condition_Shipping_Method
 * @version  3.2.1
 */
class WC_CSP_Condition_Shipping_Method extends \WC_CSP_Package_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * True if a rate defined in the condition is selected.
     *
     * @param  string                 $selected_rate_id
     * @param  array                  $rate_ids
     * @param  WC_Shipping_Rate|false $selected_rate Selected shipping rate.
     * @return boolean
     */
    private function is_selected($selected_rate_id, $rate_ids, $selected_rate = \false)
    {
    }
    /**
     * Return condition field-specific resolution message which is combined along with others into a single restriction "resolution message".
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return string|false
     */
    public function get_condition_resolution($data, $args)
    {
    }
    /**
     * Evaluate if a condition field is in effect or not.
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restrictions.
     * @return boolean
     */
    public function check_condition($data, $args)
    {
    }
    /**
     * Validate, process and return condition field data.
     *
     * @param  array $posted_condition_data
     * @return array|false
     */
    public function process_admin_fields($posted_condition_data)
    {
    }
    /**
     * Get shipping methods condition content for admin product restriction metaboxes.
     *
     * @param  int   $index
     * @param  int   $condition_index
     * @param  array $condition_data
     * @return void
     */
    public function get_admin_fields_html($index, $condition_index, $condition_data)
    {
    }
}
/**
 * Zip Code Condition.
 *
 * @class    WC_CSP_Condition_Shipping_Postcode
 * @version  3.2.1
 */
class WC_CSP_Condition_Shipping_Postcode extends \WC_CSP_Package_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Return condition field-specific resolution message which is combined along with others into a single restriction "resolution message".
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return string|false
     */
    public function get_condition_resolution($data, $args)
    {
    }
    /**
     * Evaluate if the condition is in effect or not.
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restrictions.
     * @return boolean
     */
    public function check_condition($data, $args)
    {
    }
    /**
     * Condition matching package?
     *
     * @since  1.4.0
     *
     * @param  string $postcode
     * @param  string $country
     * @param  array  $data
     * @return boolean
     */
    protected function is_matching_package($postcode, $country, $data)
    {
    }
    /**
     * Validate, process and return condition fields.
     *
     * @param  array $posted_condition_data
     * @return array|false
     */
    public function process_admin_fields($posted_condition_data)
    {
    }
    /**
     * Get shipping postcode condition content for restriction metaboxes.
     *
     * @param  int   $index
     * @param  int   $condition_index
     * @param  array $condition_data
     * @return void
     */
    public function get_admin_fields_html($index, $condition_index, $condition_data)
    {
    }
}
/**
 * Stock Quantity Condition.
 *
 * @class    WC_CSP_Condition_Stock_Quantity
 * @version  3.2.1
 */
class WC_CSP_Condition_Stock_Quantity extends \WC_CSP_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Return condition field-specific resolution message which is combined along with others into a single restriction "resolution message".
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return string|false
     */
    public function get_condition_resolution($data, $args)
    {
    }
    /**
     * Evaluate if the condition is in effect or not.
     *
     * @param  array $data  Condition field data.
     * @param  array $args  Optional arguments passed by restriction.
     * @return boolean
     */
    public function check_condition($data, $args)
    {
    }
    /**
     * Validate, process and return condition fields.
     *
     * @param  array $posted_condition_data
     * @return array|boolean
     */
    public function process_admin_fields($posted_condition_data)
    {
    }
    /**
     * Get quantity conditions content for admin product-level restriction metaboxes.
     *
     * @param  int   $index
     * @param  int   $condition_index
     * @param  array $condition_data
     * @return void
     */
    public function get_admin_fields_html($index, $condition_index, $condition_data)
    {
    }
}
/**
 * Checkout Restriction Interface.
 *
 * @version 1.0.0
 */
interface WC_CSP_Checkout_Restriction
{
    /**
     * Restriction validation running on the 'woocommerce_after_checkout_validation' hook.
     *
     * @param  array $posted
     * @return void
     */
    public function validate_checkout($posted);
}
/**
 * Restrict Payment Gateways.
 *
 * @class    WC_CSP_Restrict_Payment_Gateways
 * @version  3.2.1
 */
class WC_CSP_Restrict_Payment_Gateways extends \WC_CSP_Restriction implements \WC_CSP_Checkout_Restriction
{
    /**
     * Flag to mark the beginning of the template render.
     *
     * @var int
     */
    protected $before_payment_gateways_template;
    /**
     * Flag to mark the end of the template render.
     *
     * @var int
     */
    protected $after_payment_gateways_template;
    public function __construct()
    {
    }
    /**
     * Declare 'admin_global_fields' type, generated by 'generate_admin_global_fields_html'.
     *
     * @return void
     */
    public function init_form_fields()
    {
    }
    /**
     * Display payment gateway options.
     *
     * @since  1.8.0
     *
     * @param  string             $gateway_id
     * @param  WC_Payment_Gateway $gateway
     * @param  array              $gateways
     * @return void
     */
    public function payment_gateway_option($gateway_id, $gateway, $gateways)
    {
    }
    /**
     * Generates the 'admin_global_fields' field type, which is based on metaboxes.
     *
     * @return void
     */
    public function generate_admin_global_fields_html()
    {
    }
    /**
     * Display admin options.
     *
     * @param  int          $index
     * @param  array|string $options     Metabox options.
     * @param  string       $field_type
     * @return void
     */
    public function get_admin_fields_html($index, $options = array(), $field_type = 'global')
    {
    }
    /**
     * Display a short summary of the restriction's settings.
     *
     * @param  array $options
     * @return string
     */
    public function get_options_description($options)
    {
    }
    /**
     * Display options on the global Restrictions write-panel.
     *
     * @param  int          $index    restriction fields array index
     * @param  string|array $options  metabox options.
     * @return void
     */
    function get_admin_global_fields_html($index, $options = array())
    {
    }
    /**
     * Display options on the product Restrictions write-panel.
     *
     * @param  int          $index    restriction fields array index
     * @param  string|array $options  metabox options.
     * @return void
     */
    function get_admin_product_fields_html($index, $options = array())
    {
    }
    /**
     * Validate, process and return product options.
     *
     * @param  array $posted_data
     * @return array
     */
    public function process_admin_fields($posted_data)
    {
    }
    /**
     * Validate, process and return product metabox options.
     *
     * @param  array $posted_data
     * @return array
     */
    public function process_admin_product_fields($posted_data)
    {
    }
    /**
     * Validate, process and return global settings.
     *
     * @param  array $posted_data
     * @return array
     */
    public function process_admin_global_fields($posted_data)
    {
    }
    /**
     * Check if payment gateways template has started rendering.
     *
     * @param  string $template_name
     * @param  string $template_path
     * @param  string $located
     * @param  array  $args
     *
     * @return void
     */
    public function before_payment_gateways_template($template_name, $template_path, $located, $args)
    {
    }
    /**
     * Check if payment gateways template is done rendering.
     *
     * @param  string $template_name
     * @param  string $template_path
     * @param  string $located
     * @param  array  $args
     *
     * @return void
     */
    public function after_payment_gateways_template($template_name, $template_path, $located, $args)
    {
    }
    /**
     * Check if payment gateways template is currently rendering.
     *
     * @return boolean
     */
    public function is_payment_gateways_template()
    {
    }
    /**
     * Shows a woocommerce error on the 'woocommerce_review_order_before_cart_contents' hook when payment gateway restrictions apply.
     *
     * @return void
     */
    public function excluded_payment_gateways_notice()
    {
    }
    /**
     * Render notice after excluded gateways.
     *
     * @since  1.7.2
     * @param  string $description Gateway description.
     * @param  string $id
     * @return mixed
     */
    public function add_notice_after_excluded_payment_gateway($description, $id)
    {
    }
    /**
     * Filter payment gateways when restrictions apply.
     *
     * @param  array $gateways
     * @param  bool  $bypass
     * @return array
     */
    public function exclude_payment_gateways($gateways, $bypass = \false)
    {
    }
    /**
     * Returns the products to evaluate product-level rules against, along with the item args to evaluate them with.
     *
     * Order line items are used when a full order is in context, cart items otherwise.
     *
     * @since 3.1.6
     *
     * @param  array $args  Restriction evaluation args.
     * @return array  Array of 'product' (int|WC_Product) and 'args' pairs.
     */
    private function get_product_contexts($args)
    {
    }
    /**
     * Generate map data for each active rule.
     *
     * @since  1.4.0
     *
     * @param  array $payload
     * @param  array $restriction
     * @param  bool  $include_data
     * @return array
     */
    protected function generate_rules_map_data($payload, $restriction, $include_data)
    {
    }
    /**
     * True if a gateway is excluded.
     *
     * @since  1.4.0
     *
     * @param  WC_Payment_Gateway $gateway Payment gateway.
     * @param  array              $restricted_gateways
     * @return bool
     */
    private function is_restricted($gateway, $restricted_gateways)
    {
    }
    /**
     * Validate order checkout and return WC_CSP_Check_Result object.
     *
     * @param  array $posted
     * @return WC_CSP_Check_Result
     */
    public function validate_checkout($posted)
    {
    }
    /**
     * Generate resolution message.
     *
     * @since  1.7.7
     *
     * @param  array  $restriction
     * @param  string $context
     * @param  array  $args
     * @return string
     */
    protected function get_resolution_message_content($restriction, $context, $args = array())
    {
    }
}
/**
 * Check Cart Restriction Interface.
 *
 * @version 1.0.0
 */
interface WC_CSP_Cart_Restriction
{
    /**
     * Restriction validation running on the 'check_cart_items' hook.
     *
     * @return void
     */
    public function validate_cart();
}
/**
 * Restrict Shipping Countries.
 *
 * @class    WC_CSP_Restrict_Shipping_Countries
 * @version  3.2.1
 */
class WC_CSP_Restrict_Shipping_Countries extends \WC_CSP_Restriction implements \WC_CSP_Checkout_Restriction, \WC_CSP_Cart_Restriction
{
    public function __construct()
    {
    }
    /**
     * Declare 'admin_global_fields' type, generated by 'generate_admin_global_fields_html'.
     *
     * @return void
     */
    function init_form_fields()
    {
    }
    /**
     * Generates the 'admin_global_fields' field type, which is based on metaboxes.
     *
     * @return void
     */
    function generate_admin_global_fields_html()
    {
    }
    /**
     * Display admin options.
     *
     * @param  int          $index
     * @param  array|string $options     Metabox options.
     * @param  string       $field_type  Field type: 'global' or 'product'.
     * @return void
     */
    public function get_admin_fields_html($index, $options = array(), $field_type = 'global')
    {
    }
    /**
     * Display a short summary of the restriction's settings.
     *
     * @param  array $options
     * @return string
     */
    public function get_options_description($options)
    {
    }
    /**
     * Display options on the global Restrictions page.
     *
     * @param  int          $index    restriction metabox unique id
     * @param  string|array $options  metabox options.
     * @return void
     */
    public function get_admin_global_fields_html($index, $options = array())
    {
    }
    /**
     * Display options on the product Restrictions write-panel.
     *
     * @param  int          $index    restriction metabox unique id
     * @param  string|array $options  metabox options.
     * @return void
     */
    public function get_admin_product_fields_html($index, $options = array())
    {
    }
    /**
     * Validate, process and return options.
     *
     * @param  array $posted_data
     * @return array
     */
    public function process_admin_fields($posted_data)
    {
    }
    /**
     * Validate, process and return product metabox options.
     *
     * @param  array $posted_data
     * @return array
     */
    public function process_admin_product_fields($posted_data)
    {
    }
    /**
     * Validate, process and return global settings.
     *
     * @param  array $posted_data
     * @return array
     */
    public function process_admin_global_fields($posted_data)
    {
    }
    /**
     * Shows a woocommerce error on the 'woocommerce_review_order_before_cart_contents' hook when country restrictions apply.
     *
     * @return void
     */
    public function excluded_country_notice()
    {
    }
    /**
     * Evaluate restriction objectives and return WC_CSP_Check_Result object.
     *
     * @param  string $msg_type  Notice type for the messages.
     * @return  WC_CSP_Check_Result
     */
    private function check_restriction($msg_type = 'error', $args = array())
    {
    }
    /**
     * Preserve package conditions when an existing order has no saved item allocation.
     *
     * @since 3.1.6
     * @param array $restriction_data Restriction data.
     * @param array $args Restriction context.
     * @return bool
     */
    public function check_conditions_apply($restriction_data, $args = array())
    {
    }
    /**
     * Generate map data for each active rule.
     *
     * @since  1.4.0
     *
     * @param  array $payload
     * @param  array $restriction
     * @param  bool  $include_data
     * @return array
     */
    protected function generate_rules_map_data($payload, $restriction, $include_data)
    {
    }
    /**
     * Generate resolution message.
     *
     * @since  1.7.7
     *
     * @param  array  $restriction
     * @param  string $context
     * @param  array  $args
     * @return string
     */
    protected function get_resolution_message_content($restriction, $context, $args = array())
    {
    }
    /**
     * Validate order checkout and return errors if restrictions apply.
     *
     * @param  array $posted
     * @return WC_CSP_Check_Result
     */
    public function validate_checkout($posted = array())
    {
    }
    /**
     * Validate cart and return errors if restrictions apply.
     *
     * @return WC_CSP_Check_Result
     */
    public function validate_cart()
    {
    }
}
/**
 * Restrict Shipping Methods.
 *
 * @class    WC_CSP_Restrict_Shipping_Methods
 * @version  3.2.1
 */
class WC_CSP_Restrict_Shipping_Methods extends \WC_CSP_Restriction implements \WC_CSP_Checkout_Restriction
{
    public function __construct()
    {
    }
    /**
     * Adds extra variables to shipping packages.
     *
     * @since  1.4.0
     * @param  array $packages
     */
    public function add_variables_to_packages($packages)
    {
    }
    /**
     * Update checkout fields/totals on changing the State field.
     *
     * @param  array $fields
     * @return array
     */
    public function update_totals_on_state_change($fields)
    {
    }
    /**
     * Render notice after excluded shipping rates.
     *
     * @since  1.7.0
     * @param  WC_Shipping_Rate $rate
     * @param  int              $index
     * @return void
     */
    public function add_notice_after_excluded_shipping_rate($rate, $index)
    {
    }
    /**
     * Display shipping method options.
     *
     * @param  string             $method_id
     * @param  WC_Shipping_Method $method
     * @param  array              $selected_methods
     * @return void
     */
    public function shipping_method_option($method_id, $method, $selected_methods)
    {
    }
    /**
     * Append additional legacy flat rate options.
     *
     * @param  WC_Shipping_Method $method
     * @param  array              $selected_methods
     * @return void
     */
    private function additional_legacy_flat_rate_options($method, $selected_methods)
    {
    }
    /**
     * Declare 'admin_global_fields' type, generated by 'generate_admin_global_fields_html'.
     *
     * @return void
     */
    function init_form_fields()
    {
    }
    /**
     * Generates the 'admin_global_fields' field type, which is based on metaboxes.
     *
     * @return void
     */
    function generate_admin_global_fields_html()
    {
    }
    /**
     * Display options on the product Restrictions write-panel.
     *
     * All fields placed inside an indexed 'restriction[ $index ]' array will be passed to the 'process_admin_product_fields' function for validation.
     *
     * @param  int          $index
     * @param  array|string $options     Metabox options.
     * @param  string       $field_type
     * @return void
     */
    public function get_admin_fields_html($index, $options = array(), $field_type = 'global')
    {
    }
    /**
     * Display a short summary of the restriction's settings.
     *
     * @param  array $options
     * @return string
     */
    public function get_options_description($options)
    {
    }
    /**
     * Display options on the global Restrictions write-panel.
     *
     * @param  int          $index    restriction fields array index
     * @param  string|array $options  metabox options.
     * @return void
     */
    function get_admin_global_fields_html($index, $options = array())
    {
    }
    /**
     * Display options on the product Restrictions write-panel.
     *
     * @param  int          $index    restriction fields array index
     * @param  string|array $options  metabox options.
     * @return void
     */
    function get_admin_product_fields_html($index, $options = array())
    {
    }
    /**
     * Validate, process and return product options.
     *
     * @see get_admin_product_fields_html
     *
     * @param  array $posted_data
     * @return array
     */
    public function process_admin_fields($posted_data)
    {
    }
    /**
     * Validate, process and return product metabox options.
     *
     * @param  array $posted_data
     * @return array
     */
    public function process_admin_product_fields($posted_data)
    {
    }
    /**
     * Validate, process and return global settings.
     *
     * @param  array $posted_data
     * @return array
     */
    public function process_admin_global_fields($posted_data)
    {
    }
    /**
     * Shows a woocommerce error on the 'woocommerce_review_order_before_cart_contents' hook when shipping method restrictions apply.
     *
     * @return void
     */
    public function excluded_shipping_methods_notice()
    {
    }
    /**
     * Return excluded rate IDs.
     *
     * @param  array $rates
     * @param  array $excluded_rates
     * @return array
     */
    private function get_restricted_rates($rates, $excluded_rates)
    {
    }
    /**
     * True if a rate is excluded.
     *
     * @param  string                 $rate_id
     * @param  array                  $excluded_rates
     * @param  WC_Shipping_Rate|false $rate
     * @return bool
     */
    private function is_restricted($rate_id, $excluded_rates, $rate = \false)
    {
    }
    /**
     * Remove shipping methods from packages.
     *
     * @param  mixed $rates    Package rates, as filtered by 'woocommerce_package_rates'.
     * @param  mixed $package  Shipping package.
     * @return mixed
     */
    public function exclude_package_shipping_methods($rates, $package)
    {
    }
    /**
     * Generate map data for each active rule.
     *
     * @since  1.4.0
     *
     * @param  array $payload
     * @param  array $restriction
     * @param  bool  $include_data
     * @return array
     */
    protected function generate_rules_map_data($payload, $restriction, $include_data)
    {
    }
    /**
     * Validate order checkout and return WC_CSP_Check_Result object.
     *
     * @param  array $posted
     * @return WC_CSP_Check_Result
     */
    public function validate_checkout($posted)
    {
    }
    /**
     * Generate resolution message.
     *
     * @since  1.7.7
     *
     * @param  array  $restriction
     * @param  string $context
     * @param  array  $args
     * @return string
     */
    protected function get_resolution_message_content($restriction, $context, $args = array())
    {
    }
}
/**
 * Add to Cart Restriction Interface.
 *
 * @version 1.0.0
 */
interface WC_CSP_Add_To_Cart_Restriction
{
    /**
     * Validation running on the 'woocommerce_add_to_cart_validation' hook.
     *
     * @param  bool   $add
     * @param  mixed  $product_id
     * @param  mixed  $product_quantity
     * @param  string $variation_id
     * @param  array  $variations
     * @param  array  $cart_item_data
     * @return void
     */
    public function validate_add_to_cart($add, $product_id, $product_quantity, $variation_id = '', $variations = array(), $cart_item_data = array());
}
/**
 * Update Cart Restriction Interface.
 *
 * @version 1.0.0
 */
interface WC_CSP_Update_Cart_Restriction
{
    /**
     * Restriction validation running on the 'woocommerce_update_cart_validation' hook.
     *
     * @param  bool   $passed
     * @param  string $cart_item_key
     * @param  array  $cart_item_values
     * @param  mixed  $quantity
     * @return void
     */
    public function validate_cart_update($passed, $cart_item_key, $cart_item_values, $quantity);
}
class WC_Conditional_Shipping_Payments
{
    /* Plugin version */
    const VERSION = '3.2.1';
    /* Required WC version */
    const REQ_WC_VERSION = '11.1.0';
    /* Required PHP version */
    const REQ_PHP_VERSION = '7.4.0';
    /* Text domain */
    const TEXT_DOMAIN = 'woocommerce-conditional-shipping-and-payments';
    /**
     * @var WC_Conditional_Shipping_Payments|null - the single instance of the class.
     *
     * @since 1.0.0
     */
    protected static $_instance = \null;
    /**
     * Main WC_Conditional_Shipping_Payments Instance.
     *
     * Ensures only one instance of WC_Conditional_Shipping_Payments is loaded or can be loaded.
     *
     * @since 1.0.0
     *
     * @static
     * @see WC_CSP()
     *
     * @return WC_Conditional_Shipping_Payments - Main instance
     */
    public static function instance()
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
     * Admin functions and filters.
     *
     * @var WC_CSP_Admin|null
     */
    public $admin;
    /**
     * Loaded restrictions.
     *
     * @var WC_CSP_Restrictions|null
     */
    public $restrictions;
    /**
     * Loaded conditions.
     *
     * @var WC_CSP_Conditions|null
     */
    public $conditions;
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Plugin version getter.
     *
     * @since  1.5.9
     *
     * @param  boolean $base
     * @param  string  $version
     * @return string
     */
    public function plugin_version($base = \false, $version = '')
    {
    }
    /**
     * Plugin url.
     *
     * @return string
     */
    public function plugin_url()
    {
    }
    /**
     * Plugin path.
     *
     * @return string
     */
    public function plugin_path()
    {
    }
    /**
     * Plugin base path name getter.
     *
     * @since  1.14.3
     *
     * @return string
     */
    public function get_plugin_basename()
    {
    }
    /**
     * Indicates whether the plugin has been fully initialized.
     *
     * Checks for the autoloader class without triggering autoloading: this method is called in contexts where
     * the plugin's own autoloader may never have been registered, and asking other autoloaders to resolve a
     * class we know they cannot provide is a pointless side effect.
     *
     * @since  1.7.6
     *
     * @version 3.1.4
     *
     * @return boolean
     */
    public function plugin_initialized()
    {
    }
    /**
     * Define constants if not present.
     *
     * @since  1.7.6
     *
     * @param  string $name   Constant name.
     * @param  mixed  $value  Constant value.
     * @return void
     */
    protected function maybe_define_constant($name, $value)
    {
    }
    /**
     * Fire in the hole!
     *
     * @version 3.2.1
     *
     * @return false|void
     */
    public function initialize_plugin()
    {
    }
    /**
     * Adds a WooCommerce version incompatibility notice.
     *
     * @version 3.1.4
     *
     * @return void
     */
    public function display_wc_incompatibility_notice()
    {
    }
    /**
     * Adds a PHP version incompatibility notice.
     *
     * @version 3.1.4
     *
     * @return void
     */
    public function display_php_incompatibility_notice()
    {
    }
    /**
     * Load plugin functionality.
     *
     * This callback is hooked in the constructor, before the WooCommerce version check in
     * 'initialize_plugin' has had a chance to run. When that check fails, 'includes' is skipped and the
     * autoloader is never registered, so bail out instead of instantiating classes that do not exist.
     *
     * @version 3.1.4
     *
     * @return void
     */
    public function load_restrictions_and_conditions()
    {
    }
    /**
     * Define constants.
     *
     * @return void
     */
    public function define_constants()
    {
    }
    /**
     * Includes.
     *
     * @since 1.4.0
     * @return void
     */
    public function includes()
    {
    }
    /**
     * Loads the Admin & AJAX filters / hooks.
     *
     * @return void
     */
    public function admin_includes()
    {
    }
    /**
     * Load textdomain.
     *
     * @return void
     */
    public function init_textdomain()
    {
    }
    /**
     * Store extension version.
     *
     * @return void
     */
    public function activate()
    {
    }
    /**
     * Deactivate extension.
     *
     * @return void
     */
    public function deactivate()
    {
    }
}
/**
 * Builds terms tree of a flatten terms array.
 *
 * @since  1.8.1
 *
 * @param  array $terms Array of WP_Term objects.
 * @param  int   $parent_id
 * @return array
 */
function wc_csp_build_taxonomy_tree($terms, $parent_id = 0)
{
}
/**
 * Prints <option/> elements for a given terms tree.
 *
 * @since  1.8.1
 *
 * @param  array $terms Array of WP_Term objects.
 * @param  array $selected_ids
 * @param  array $args
 * @return void
 */
function wc_csp_print_taxonomy_tree_options($terms, $selected_ids = array(), $args = array())
{
}
/**
 * Get debug status.
 *
 * @since  1.11.0
 *
 * @return bool
 */
function wc_csp_debug_enabled()
{
}
/**
 * Get payment method's method_title with a fallback to title if method_title is empty.
 *
 * @since  2.0.0
 * @version 3.0.2
 *
 * @param WC_Payment_Gateway $gateway
 *
 * @return string
 */
function wc_csp_get_payment_method_title($gateway)
{
}
// end class_exists check
/**
 * Returns the main instance of WC_Conditional_Shipping_Payments to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return WC_Conditional_Shipping_Payments
 */
function WC_CSP()
{
}