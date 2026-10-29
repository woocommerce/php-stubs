<?php
/**
 * Generated stub declarations for woocommerce-min-max-quantities 5.2.16.
 * @see https://github.com/woocommerce/php-stubs
 */

/**
 * Admin notices handling.
 *
 * @class    WC_Min_Max_Quantities_Admin_Notices
 * @version  5.2.16
 */
class WC_Min_Max_Quantities_Admin_Notices
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
     * Whether persisted meta box notices changed during this request.
     *
     * @var bool
     */
    private static $meta_box_notices_dirty = \false;
    /**
     * Array of maintenance notice types - name => callback.
     *
     * @var array<string, string>
     */
    private static $maintenance_notice_types = array('welcome' => 'welcome_notice');
    /**
     * Constructor.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Register persisted notice hooks after WordPress has initialized user capabilities.
     *
     * @since 5.2.12
     * @return void
     */
    public static function register_persisted_notice_hooks()
    {
    }
    /**
     * Add a notice/error.
     *
     * @param string       $text The notice text to display.
     * @param array|string $args Additional arguments for the notice.
     * @param boolean      $save_notice Whether to save the notice for the next request.
     * @phpstan-param array{type: string, dismiss_class?: string, unique_context?: string, save_notice?: bool}|string $args
     * @return void
     */
    public static function add_notice($text, $args, $save_notice = \false)
    {
    }
    /**
     * Checks if a notice that belongs to a the specified uniqueness context already exists.
     *
     * @since  4.2.3
     *
     * @param string $context The unique context to check.
     * @return bool Whether the notice exists.
     */
    private static function unique_notice_exists($context)
    {
    }
    /**
     * Checks if a maintenance notice is visible.
     *
     * @since  4.2.3
     *
     * @param string $notice_name The name of the notice to check.
     * @return boolean Whether the notice is visible.
     */
    public static function is_maintenance_notice_visible($notice_name)
    {
    }
    /**
     * Checks if a dismissible notice has been dismissed in the past.
     *
     * @since  4.2.3
     *
     * @param string $notice_name The name of the notice to check.
     * @return boolean Whether the notice has been dismissed.
     */
    public static function is_dismissible_notice_dismissed($notice_name)
    {
    }
    /**
     * Save notices to the DB.
     *
     * @return void
     */
    public static function save_notices()
    {
    }
    /**
     * Save persisted meta box notices to the DB.
     *
     * @since 5.2.12
     * @return void
     */
    public static function save_meta_box_notices()
    {
    }
    /**
     * Save maintenance notices to the DB.
     *
     * @since 5.2.12
     * @return void
     */
    public static function save_maintenance_notices()
    {
    }
    /**
     * Show any stored error messages.
     *
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
     * @since  4.2.3
     *
     * @param string       $text The notice text to display.
     * @param array|string $args Additional arguments for the notice.
     * @phpstan-param array{type: string, dismiss_class?: string, unique_context?: string, save_notice?: bool}|string $args
     * @return void
     */
    public static function add_dismissible_notice($text, $args)
    {
    }
    /**
     * Remove a dismissible notice.
     *
     * @since  5.8.0
     *
     * @param string $notice_name The name of the notice to remove.
     * @return bool Whether the notice was removed.
     */
    public static function remove_dismissible_notice($notice_name)
    {
    }
    /**
     * Add a maintenance notice to be displayed.
     *
     * @param string $notice_name The name of the notice to add.
     * @return bool Whether the notice was added.
     */
    public static function add_maintenance_notice($notice_name)
    {
    }
    /**
     * Remove a maintenance notice.
     *
     * @param string $notice_name The name of the notice to remove.
     * @return bool Whether the notice was removed.
     */
    public static function remove_maintenance_notice($notice_name)
    {
    }
    /**
     * Add 'welcome' notice.
     *
     * @since  4.2.3
     * @return void
     */
    public static function welcome_notice()
    {
    }
    /**
     * Dismisses a notice. Dismissible maintenance notices cannot be dismissed forever.
     *
     * @since  4.2.3
     *
     * @param string $notice The notice to dismiss.
     * @return bool Whether the notice was dismissed.
     */
    public static function dismiss_notice($notice)
    {
    }
}
/**
 * WC_Min_Max_Quantities_Admin class.
 *
 * @version 5.2.15
 */
class WC_Min_Max_Quantities_Admin
{
    /**
     * Plugin settings.
     *
     * @var array
     */
    public $settings = array();
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Sanitize the minimum order value.
     *
     * @param string $value The value to sanitize.
     * @return string The sanitized value, or an empty string.
     */
    public function sanitize_minimum_order_value($value)
    {
    }
    /**
     * Sanitize the maximum order value.
     *
     * @param string $value The value to sanitize.
     * @return string The sanitized value, or an empty string.
     */
    public function sanitize_maximum_order_value($value)
    {
    }
    /**
     * Helper function used to sanitize the order value settings.
     *
     * @param string $value The value to sanitize.
     * @param string $message The error message to display if the value is invalid.
     * @return string The sanitized value, or an empty string.
     */
    private function sanitize_numeric_string_value($value, $message)
    {
    }
    /**
     * Αdd global admin settings.
     *
     * @since 2.3.0
     *
     * @param array $settings The settings array.
     * @return array
     */
    public function add_settings($settings)
    {
    }
    /**
     * Display global admin settings.
     *
     * @return void
     */
    public function admin_settings()
    {
    }
    /**
     * Save global admin settings.
     *
     * @return void
     */
    public function save_admin_settings()
    {
    }
    /**
     * Admin writepanel scripts.
     *
     * @return void
     */
    public function admin_scripts()
    {
    }
    /**
     * Output product-level Quantity rules.
     *
     * @return void
     */
    public function write_panel()
    {
    }
    /**
     * Save variation-level quantity rules.
     *
     * @param int $variation_id The variation ID.
     * @param int $i The variation index.
     * @return void
     */
    public function save_variation_settings($variation_id, $i)
    {
    }
    /**
     * Save product-level Quantity rules.
     *
     * @param int $post_id The post ID of the product being saved.
     * @return void
     */
    public function write_panel_save($post_id)
    {
    }
    /**
     * Save variation-level quantity rules.
     *
     * @param int     $loop The variation loop index.
     * @param array   $variation_data The variation data array.
     * @param WP_Post $variation The variation object.
     * @return void
     */
    public function variation_options($loop, $variation_data, $variation)
    {
    }
    /**
     * Display variation-level Quantity rules.
     *
     * @param int     $loop The variation loop index.
     * @param array   $variation_data The variation data array.
     * @param WP_Post $variation The variation object.
     * @return void
     */
    public function variation_panel($loop, $variation_data, $variation)
    {
    }
    /**
     * Category thumbnail fields.
     *
     * @return void
     */
    public function add_category_fields()
    {
    }
    /**
     * Edit category quantity fields.
     *
     * @param WP_Term $term Term (category) being edited.
     * @return void
     */
    public function edit_category_fields($term)
    {
    }
    /**
     * Check whether the current request may save or validate product-category rules.
     *
     * @param int $term_id Product category ID for edit requests.
     * @return bool
     */
    private function is_category_fields_request_authorized($term_id = 0)
    {
    }
    /**
     * Validates category Group of value when creating a new category.
     *
     * @param string|WP_Error $term     The term name to add, or a WP_Error object if there's an error.
     * @param string          $taxonomy Taxonomy slug.
     * @return string|WP_Error
     */
    public function validate_category_fields($term, $taxonomy)
    {
    }
    /**
     * Save 'Group of' category field.
     *
     * @param int $term_id Term ID being saved.
     * @return void
     */
    public function category_fields_save($term_id)
    {
    }
    /**
     * Add new column in categories overview table.
     *
     * @param string[] $columns List of columns.
     * @return string[]
     */
    public function product_cat_columns($columns)
    {
    }
    /**
     * Populate the 'Group of' category column.
     *
     * @param string $columns Column data.
     * @param string $column Column name.
     * @param int    $id Term ID.
     * @return string
     */
    public function product_cat_column($columns, $column, $id)
    {
    }
    /**
     * Backwards compatibility: Add a notice if Minimum/Maximum quantities are not compatible with the "Group of" option.
     *
     * @return void
     */
    public function maybe_add_group_of_notice()
    {
    }
    /**
     * Whether a variation's parent product has "Combine variations" enabled.
     *
     * When it does, WC_Min_Max_Quantities_Quantity_Rules::get_rules_for_variation() discards the
     * variation's rules entirely, so validating them against a category "Group of" value would
     * rewrite a value the storefront never reads.
     *
     * @since 5.2.11
     *
     * @param WC_Product $product The variation to check.
     * @return bool
     */
    private function parent_allows_combination($product)
    {
    }
    /**
     * Get a variation's parent product "Group of" value.
     *
     * The parent's own rule outranks any category rule in
     * WC_Min_Max_Quantities_Quantity_Rules::get(), so it has to be consulted first when a
     * variation defines no "Group of" of its own.
     *
     * @since 5.2.11
     *
     * @param WC_Product $product The variation to check.
     * @return int The parent "Group of" value, or 0 if none is set.
     */
    private function get_parent_group_of($product)
    {
    }
    /**
     * Get the "Group of" quantity value from the product's categories.
     *
     * Returns the minimum "Group of" value across all of the product's categories,
     * matching the resolution logic in WC_Min_Max_Quantities_Quantity_Rules::get_rules_for_categories().
     * For variations, respects both the variation-level `variation_minmax_category_group_of_exclude`
     * and the parent product's `minmax_category_group_of_exclude` meta.
     *
     * @since 5.2.11
     *
     * @param WC_Product|false|null $product           The product to check.
     * @param bool|null             $exclude_override  Exclusion state for $product itself, when the caller
     *                                                 holds a newer one than the stored meta — a save reading
     *                                                 its own submitted checkbox before writing it. Null reads
     *                                                 the meta. A variation's parent is always read from meta,
     *                                                 since the parent is saved in its own request.
     * @return int The category "Group of" value, or 0 if none is set.
     */
    private function get_category_group_of($product, $exclude_override = \null)
    {
    }
    /**
     * Prints warning messages in the admin area.
     *
     * @param string $content The notice content to display.
     * @param string $type The type of notice (e.g., 'warning', 'error').
     * @return void
     */
    public function output_notice($content, $type)
    {
    }
    /**
     * Show row meta on the plugin screen.
     *
     * @param array  $links The existing plugin row meta links.
     * @param string $file The plugin file being displayed.
     * @return array
     */
    public static function plugin_row_meta($links, $file)
    {
    }
    /**
     * Dismisses notices.
     *
     * @since  4.2.3
     *
     * @return void
     */
    public function dismiss_notice()
    {
    }
}
/**
 * Add custom REST API fields.
 *
 * @class    WC_MMQ_REST_API
 * @version  5.2.16
 *
 * @phpstan-type FieldSchema array{description: string, type: string|list<string>, context: list<string>, enum?: list<string>}
 */
class WC_MMQ_REST_API
{
    /**
     * Internal request flag for post-save cache invalidation.
     */
    private const CACHE_INVALIDATION_REQUEST_PARAM = '_wc_mmq_invalidate_quantity_rule_cache';
    /**
     * Custom REST API product field names, indicating support for getting/updating.
     *
     * @var array<string, string[]>
     */
    private static $product_fields = array('group_of_quantity' => array('get', 'update'), 'min_quantity' => array('get', 'update'), 'max_quantity' => array('get', 'update'), 'exclude_order_quantity_value_rules' => array('get', 'update'), 'exclude_category_quantity_rules' => array('get', 'update'), 'combine_variations' => array('get', 'update'));
    /**
     * Variation meta keys that hold quantity rules.
     *
     * @var string[]
     */
    private static $variation_meta_keys = array('min_max_rules', 'variation_group_of_quantity', 'variation_minimum_allowed_quantity', 'variation_maximum_allowed_quantity', 'variation_minmax_do_not_count', 'variation_minmax_cart_exclude', 'variation_minmax_category_group_of_exclude');
    /**
     * Setup order class.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Filters REST API product variation responses to add custom data.
     *
     * @return void
     */
    public static function filter_variation_fields()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Variations.
    |--------------------------------------------------------------------------
    */
    /**
     * Modify GET requests for product variations.
     *
     * @param array $schema The variation schema to modify.
     * @return array The modified variation schema.
     */
    public static function filter_variation_schema($schema)
    {
    }
    /**
     * Filters WC REST API GET product variation responses.
     *
     * @since  4.3.0
     *
     * @param WP_REST_Response $response The REST API response object.
     * @param WC_Product       $product The product object.
     * @return WP_REST_Response The modified response object.
     */
    public static function filter_product_variation_response($response, $product)
    {
    }
    /**
     * Filters WC REST API SET product variation responses.
     *
     * @since  4.3.0
     *
     * @throws WC_REST_Exception When the current user cannot edit the variation parent.
     *
     * @param WC_Product_Variation $variation The variation object to update.
     * @param WP_REST_Request      $request The REST API request object.
     * @return WC_Product_Variation The updated variation object.
     */
    public static function handle_product_variation_update($variation, $request)
    {
    }
    /**
     * Rejects unauthorized quantity rule writes made through the variations generate route.
     *
     * The route hands 'meta_data' straight to the data store, so 'woocommerce_rest_pre_insert_product_variation_object' never fires.
     *
     * @since  5.2.12
     *
     * @param mixed           $dispatch_result The dispatch result, or null to run the route callback.
     * @param WP_REST_Request $request The REST API request object.
     * @param string          $route The matched route.
     * @return mixed The dispatch result.
     */
    public static function authorize_variation_generate_request($dispatch_result, $request, $route)
    {
    }
    /**
     * Checks whether the submitted metadata writes a quantity rule key.
     *
     * @since  5.2.12
     *
     * @param WP_REST_Request $request The REST API request object.
     * @return bool
     */
    private static function request_writes_variation_meta_keys($request)
    {
    }
    /**
     * Checks whether the submitted variation generation defaults write a quantity rule key.
     *
     * 'WC_Data::set_props()' skips only the literal 'meta_data' key, while PHP resolves 'set_Meta_Data' and nested 'set_Props' calls case-insensitively.
     *
     * @since  5.2.13
     *
     * @param mixed $props The submitted default values.
     * @return bool
     */
    private static function props_write_variation_meta_keys($props)
    {
    }
    /**
     * Checks whether the submitted metadata renames an existing quantity rule row of a variation.
     *
     * An existing row can be renamed by ID while the submitted key looks unrelated.
     *
     * @since  5.2.12
     *
     * @param int             $variation_id The variation ID the metadata rows must belong to.
     * @param WP_REST_Request $request The REST API request object.
     * @return bool
     */
    private static function request_renames_variation_meta_rows($variation_id, $request)
    {
    }
    /**
     * Validates quantity rules in REST API PUT/POST requests.
     *
     * @since  4.3.2
     *
     * @throws WC_REST_Exception When invalid quantity rules for variations.
     *
     * @param WC_Product_Variation $variation The variation object to validate.
     * @param WP_REST_Request      $request The REST API request object.
     * @return WC_Product_Variation|void The variation when there is nothing to validate, nothing otherwise.
     */
    public static function rest_validate_product_variation_quantity_rules($variation, $request)
    {
    }
    /**
     * Updates product variation meta data based on quantity rules from REST request.
     *
     * @since  4.3.2
     *
     * @param WC_Product_Variation $variation The variation object to update.
     * @param WP_REST_Request      $request The REST API request object.
     * @return WC_Product_Variation The updated variation object.
     */
    public static function rest_set_product_variation_fields($variation, $request)
    {
    }
    /**
     * Gets extended (unprefixed) variation schema properties for products.
     *
     * @return array<string, FieldSchema>
     */
    private static function get_extended_variation_schema()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Products.
    |--------------------------------------------------------------------------
    */
    /**
     * Register custom REST API fields for product requests.
     *
     * @return void
     */
    public static function register_product_fields()
    {
    }
    /**
     * Gets extended (unprefixed) schema properties for products.
     *
     * @return array<string, FieldSchema>
     */
    private static function get_extended_product_schema()
    {
    }
    /**
     * Gets schema properties for MMQ product fields.
     *
     * @param string $field_name The name of the field to get schema for.
     * @return FieldSchema|null The field schema, or null for an unknown field.
     */
    public static function get_product_field_schema($field_name)
    {
    }
    /**
     * Gets values for MMQ product fields.
     *
     * @param array  $response The response array containing product data.
     * @param string $field_name The name of the field to get value for.
     * @return mixed
     */
    public static function get_product_field_value($response, $field_name)
    {
    }
    /**
     * Validates and sets product fields based on PUT/POST REST API requests.
     *
     * @since  4.3.2
     *
     * @param mixed           $product The product object to update, or the value an earlier callback of the filter returned.
     * @param WP_REST_Request $request The REST API request object.
     * @return mixed The updated product, or the value an earlier callback of the filter returned (e.g. a WP_Error).
     */
    public static function handle_product_update($product, $request)
    {
    }
    /**
     * Updates product meta data based on quantity rules from REST request.
     *
     * @since  4.3.2
     *
     * @param WC_Product      $product The product object to update.
     * @param WP_REST_Request $request The REST API request object.
     * @return WC_Product
     */
    public static function rest_set_product_fields($product, $request)
    {
    }
    /**
     * Invalidate quantity-rule caches after a REST update is persisted.
     *
     * @since 5.2.12
     *
     * @param WC_Product      $product Saved product or variation.
     * @param WP_REST_Request $request REST request.
     * @return void
     */
    public static function invalidate_quantity_rule_cache_after_rest_update($product, $request)
    {
    }
    /**
     * Validates quantity rules in REST API PUT/POST requests.
     *
     * @since  4.3.2
     *
     * @throws WC_REST_Exception When invalid quantity rules.
     *
     * @param WC_Product      $product The product object to validate.
     * @param WP_REST_Request $request The REST API request object.
     * @return WC_Product|void The product when there is nothing to validate, nothing otherwise.
     */
    public static function rest_validate_product_quantity_rules($product, $request)
    {
    }
    /**
     * Gets bundle-specific product data.
     *
     * @since  5.0.0
     *
     * @param string     $key The field key to get value for.
     * @param WC_Product $product The product object to get data from.
     * @return mixed
     */
    private static function get_product_field($key, $product)
    {
    }
}
/**
 * Filters the store public API.
 *
 * @version 5.2.15
 */
class WC_MMQ_Store_API
{
    /**
     * Plugin Identifier, unique to each plugin.
     *
     * @var string
     */
    const IDENTIFIER = 'min_max_quantities';
    /**
     * Bootstraps the class and hooks required data.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Adjust cart item quantity limits to keep min quantity limited by Min/Max Quantity restrictions.
     *
     * If the $cart_item is null, then this means that the $product has not been added to the cart yet.
     * In this case, the minimum product quantity can be read directly from the post meta.
     * When the $cart_item exists, though, the minimum product quantity must be filtered by the `wc_min_max_quantity_minimum_allowed_quantity` first.
     *
     * @param mixed      $value The value being filtered.
     * @param WC_Product $product The product object.
     * @param array|null $cart_item The cart item if the product exists in the cart, or null.
     * @return mixed
     */
    public static function filter_min_cart_item_qty($value, $product, $cart_item)
    {
    }
    /**
     * Adjust cart item quantity limits to keep max quantity limited by Min/Max Quantity restrictions.
     *
     * If the $cart_item is null, then this means that the $product has not been added to the cart yet.
     * In this case, the maximum product quantity can be read directly from the post meta.
     * When the $cart_item exists, though, the maximum product quantity must be filtered by the `wc_min_max_quantity_maximum_allowed_quantity` first.
     *
     * @param mixed      $value The value being filtered.
     * @param WC_Product $product The product object.
     * @param array|null $cart_item The cart item if the product exists in the cart, or null.
     * @return mixed
     */
    public static function filter_max_cart_item_qty($value, $product, $cart_item)
    {
    }
    /**
     * Ensure that cart item quantity can be changed in specific intervals.
     *
     * If the $cart_item is null, then this means that the $product has not been added to the cart yet.
     * In this case, the group of product quantity can be read directly from the post meta.
     * When the $cart_item exists, though, the group of product quantity must be filtered by the `wc_min_max_quantity_group_of_quantity` first.
     *
     * @param mixed      $value The value being filtered.
     * @param WC_Product $product The product object.
     * @param array|null $cart_item The cart item if the product exists in the cart, or null.
     * @return mixed
     */
    public static function filter_multiple_of_cart_item_qty($value, $product, $cart_item)
    {
    }
    /**
     * Validate cart based on Min/Max/Group of rules and add error notices.
     *
     * @throws \Automattic\WooCommerce\StoreApi\Exceptions\RouteException When cart validation fails.
     *
     * @param WP_Error $errors The WP_Error object to add errors to.
     * @return void
     */
    public static function validate_cart($errors)
    {
    }
    /**
     * Prevents access to the checkout block if the cart item quantities are not correctly configured.
     *
     * @throws \Automattic\WooCommerce\StoreApi\Exceptions\RouteException When cart item quantities are invalid.
     *
     * @return void
     */
    public static function validate_draft_order()
    {
    }
}
/**
 * Registers read-only Min/Max Quantities abilities.
 *
 * @class    WC_Min_Max_Quantities_Abilities
 * @version  5.2.9
 */
class WC_Min_Max_Quantities_Abilities
{
    /**
     * Hooks ability registration into WooCommerce's Abilities API loader.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Adds Min/Max Quantities ability definitions to WooCommerce's ability loader.
     *
     * @param array $classes Ability definition class names.
     * @return array
     */
    public static function add_ability_definition_classes(array $classes)
    {
    }
    /**
     * Loads WooCommerce ability definition classes.
     *
     * @return void
     */
    private static function load_ability_definition_classes()
    {
    }
}
/**
 * Container class for a product or variations quantity rules
 *
 * @class    WC_Min_Max_Quantities_Quantity_Rules
 * @version  5.2.15
 */
class WC_Min_Max_Quantities_Quantity_Rules
{
    /**
     * Group of quantity magic string
     *
     * @var string
     */
    public const GROUP_OF = 'group_of';
    /**
     * Maximum magic string
     *
     * @var string
     */
    public const MAXIMUM = 'maximum';
    /**
     * Minimum magic string
     *
     * @var string
     */
    public const MINIMUM = 'minimum';
    /**
     * Transient group name.
     *
     * @var string
     */
    public const TRANSIENT_GROUP = 'wc_min_max_quantity';
    /**
     * Quantity rules that are allowed.
     *
     * @var string[]
     */
    protected const QUANTITY_RULES = array(self::MINIMUM, self::MAXIMUM, self::GROUP_OF);
    /**
     * Maps quantity rules to product meta keys.
     *
     * @var array<string, string>
     */
    protected const PRODUCT_META_KEYS = array(self::MINIMUM => 'minimum_allowed_quantity', self::MAXIMUM => 'maximum_allowed_quantity', self::GROUP_OF => 'group_of_quantity');
    /**
     * Maps quantity rules to variation meta keys.
     *
     * @var array<string, string>
     */
    protected const VARIATION_META_KEYS = array(self::MINIMUM => 'variation_minimum_allowed_quantity', self::MAXIMUM => 'variation_maximum_allowed_quantity', self::GROUP_OF => 'variation_group_of_quantity');
    /**
     * Transient name prefix.
     */
    protected const TRANSIENT_NAME_PREFIX = 'wc_min_max_quantity_rules_';
    /**
     * Whether submitted metadata changes an effective-rule dependency.
     *
     * @since 5.2.13
     * @param array $metadata Submitted metadata rows.
     * @param int   $product_id Product owning any existing rows.
     * @return bool
     */
    public static function metadata_affects_cache($metadata, $product_id = 0)
    {
    }
    /**
     * Remove saved product rules and rules inherited by its variations.
     *
     * Exact eviction also handles saves within the shared version's one-second interval.
     *
     * @since 5.2.13
     * @param WC_Product $product Saved product.
     * @return void
     */
    public static function invalidate_product_cache($product)
    {
    }
    /**
     * Invalidate rules after an importer persists relevant metadata.
     *
     * @since 5.2.13
     * @param WC_Product $product Saved product.
     * @param array      $data Imported data.
     * @return void
     */
    public static function invalidate_imported_product_cache($product, $data)
    {
    }
    /**
     * The product for this quantity rule.
     *
     * @var WC_Product
     */
    protected \WC_Product $product;
    /**
     * Constructor.
     *
     * @param WC_Product|int $product The product for this quantity rule.
     * @throws InvalidArgumentException If the product argument is invalid.
     */
    public function __construct($product)
    {
    }
    /**
     * Retrieves the transient value for the product.
     *
     * @return array<string, int>|null
     */
    protected function get_transient()
    {
    }
    /**
     * Sets the transient value for the product.
     *
     * @param array<string, int> $rules Array of quantity values.
     * @return void
     */
    protected function set_transient(array $rules): void
    {
    }
    /**
     * Reads the correct meta from the given product.
     *
     * @param WC_Product $product The product to read metadata from.
     *
     * @return array<string, int>
     */
    protected function read_rules_from_product_meta(\WC_Product $product): array
    {
    }
    /**
     * This gets the rules from the products categories.
     *
     * This method iterates over all categories for the product, it then reads the quantity rule for each category and
     * calculates the correct value for each quantity rule. Specifically, the lowest minimum and group of value, and
     * the highest maximum value.
     *
     * If the product is set to exclude category rules, this method will return early.
     *
     * @return array<string, int>|null
     */
    protected function get_rules_for_categories(): ?array
    {
    }
    /**
     * This gets the rules for the parent product.
     *
     * @return array<string, int>|null
     */
    protected function get_rules_for_product(): ?array
    {
    }
    /**
     * This gets the rules for the product if it's a variation.
     *
     * @return array<string, int>|null
     */
    protected function get_rules_for_variation(): ?array
    {
    }
    /**
     * Get quantity rules for the product.
     *
     * This method will calculate the quantity rules for the product, based on the product's categories and any overridden
     * values on the product.
     *
     * The following rules are used to calculate the quantity rules:
     *  - If `minmax_category_group_of_exclude` is set to `yes`, the category rules are ignored.
     *  - If not, then the lowest minimum and group of value, and the highest maximum value from all the product categories are used.
     *  - The product's own quantity rules are then merged with the category rules. The product's own rules take precedence.
     *    If the product is a variation, the parent product's rules are used.
     *  - If the product is a variation, and the variation has specific rules, these are merged with the rules.
     *    The variation rules take precedence. If`allow_combination` is set on the parent product, then variation rules are ignored.
     *
     * @since 5.2.0
     * @return array<string, int>
     */
    public function get(): array
    {
    }
}
/**
 * Min/Max Quantities Tracker.
 *
 * @class    WC_Min_Max_Quantities_Tracker
 * @version  5.2.16
 */
class WC_Min_Max_Quantities_Tracker
{
    /**
     * Property to store and share tracking data in the class.
     *
     * @var array
     */
    private static $data = array();
    /**
     * Property to store the starting time of the process.
     *
     * @var int
     */
    private static $start_time = 0;
    /**
     * Property to store how often the data will be invalidated.
     *
     * @var string
     */
    private static $invalidation_interval = '-1 week';
    /**
     * Initialize the tracker.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Add MMQ data to the tracked data.
     *
     * @param  array $data Plugin data.
     * @return array  all the tracking data.
     */
    public static function add_tracking_data($data)
    {
    }
    /**
     * Get all tracking data from options.
     *
     * @return array MMQ's tracking data.
     */
    private static function get_tracking_data()
    {
    }
    /**
     * Calculates all tracking-related data for the previous month and year.
     * Runs independently in a background task.
     *
     * @see ::maybe_calculate_tracking_data().
     * @return void
     */
    private static function calculate_tracking_data()
    {
    }
    /**
     * Maybe calculate data. Also, handles the caching strategy.
     *
     * @return bool Returns true if the data are re-calculated, false otherwise.
     */
    public static function maybe_calculate_tracking_data()
    {
    }
    /**
     * Calculate product aggregation data.
     *
     * @return void
     */
    private static function calculate_product_data()
    {
    }
    /**
     * Check if all the main aggregations have pending data.
     *
     * @return bool Pending status.
     */
    private static function has_pending_calculations()
    {
    }
    /**
     * Check if execution time is high or if available memory is almost consumed.
     *
     * @return bool Returns true if we're about to consume our available resources.
     */
    private static function time_or_memory_exceeded()
    {
    }
    /**
     * Initialize data if they are empty month/year has changed.
     *
     * @return void
     */
    private static function maybe_initialize_data()
    {
    }
    /**
     * Time exceeded.
     *
     * Ensures the batch never exceeds a sensible time limit.
     * A timeout limit of 30s is common on shared hosting.
     *
     * @return bool
     */
    private static function time_exceeded()
    {
    }
    /**
     * Memory exceeded
     *
     * Ensures the batch process never exceeds 90%
     * of the maximum WordPress memory.
     *
     * @return bool
     */
    private static function memory_exceeded()
    {
    }
    /**
     * Get memory limit.
     *
     * @return int
     */
    private static function get_memory_limit()
    {
    }
    /**
     * Increase iterations.
     *
     * @return void
     */
    private static function increase_iterations()
    {
    }
    /**
     * Set starting time.
     *
     * @return void
     */
    private static function set_start_time()
    {
    }
    /**
     * Set data from option.
     *
     * @return void
     */
    private static function read_data()
    {
    }
    /**
     * Set option with data.
     *
     * @return void
     */
    private static function set_option_data()
    {
    }
}
/**
 * WC_MMQ_Category_Rules_Ability ability definition.
 *
 * @version 5.2.9
 */
class WC_MMQ_Category_Rules_Ability implements \Automattic\WooCommerce\Abilities\AbilityDefinition
{
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
     * Checks whether the current user can read category rules.
     *
     * @param array $input Ability input.
     * @return bool
     */
    public static function can_read($input = array())
    {
    }
    /**
     * Returns Min/Max Quantities rules configured on a product category.
     *
     * @param array $input Ability input.
     * @return array|WP_Error
     */
    public static function execute($input = array())
    {
    }
    /**
     * Returns the input schema.
     *
     * @return array
     */
    private static function get_input_schema()
    {
    }
    /**
     * Returns the output schema.
     *
     * @return array
     */
    private static function get_output_schema()
    {
    }
    /**
     * Returns the quantity rule object schema.
     *
     * @return array
     */
    private static function get_quantity_rules_schema()
    {
    }
    /**
     * Returns metadata for a read-only, externally visible ability.
     *
     * @return array
     */
    private static function get_meta()
    {
    }
}
/**
 * WC_MMQ_Global_Rules_Ability ability definition.
 *
 * @version 5.2.9
 */
class WC_MMQ_Global_Rules_Ability implements \Automattic\WooCommerce\Abilities\AbilityDefinition
{
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
     * Checks whether the current user can read global rules.
     *
     * @param array $input Ability input.
     * @return bool
     */
    public static function can_read($input = array())
    {
    }
    /**
     * Returns global Min/Max Quantities rules.
     *
     * @param array $input Ability input.
     * @return array
     */
    public static function execute($input = array())
    {
    }
    /**
     * Returns the input schema.
     *
     * @return array
     */
    private static function get_input_schema()
    {
    }
    /**
     * Returns the output schema.
     *
     * @return array
     */
    private static function get_output_schema()
    {
    }
    /**
     * Returns metadata for a read-only, externally visible ability.
     *
     * @return array
     */
    private static function get_meta()
    {
    }
    /**
     * Reads a decimal option as a positive float.
     *
     * @param string $option_name Option name.
     * @return float
     */
    private static function get_decimal_option($option_name)
    {
    }
}
/**
 * WC_MMQ_Product_Rules_Ability ability definition.
 *
 * @version 5.2.15
 */
class WC_MMQ_Product_Rules_Ability implements \Automattic\WooCommerce\Abilities\AbilityDefinition
{
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
     * Checks whether the current user can read product rules.
     *
     * @param array $input Ability input.
     * @return bool
     */
    public static function can_read($input = array())
    {
    }
    /**
     * Returns effective Min/Max Quantities rules for a product or variation.
     *
     * @param array $input Ability input.
     * @return array|WP_Error
     */
    public static function execute($input = array())
    {
    }
    /**
     * Returns the input schema.
     *
     * @return array
     */
    private static function get_input_schema()
    {
    }
    /**
     * Returns the output schema.
     *
     * @return array
     */
    private static function get_output_schema()
    {
    }
    /**
     * Returns the quantity rule object schema.
     *
     * @return array
     */
    private static function get_quantity_rules_schema()
    {
    }
    /**
     * Returns metadata for a read-only, externally visible ability.
     *
     * @return array
     */
    private static function get_meta()
    {
    }
    /**
     * Checks whether a product combines variation quantities.
     *
     * @param WC_Product            $product Product object.
     * @param WC_Product|false|null $parent_product Parent product, if available.
     * @return bool
     */
    private static function product_combines_variations(\WC_Product $product, $parent_product)
    {
    }
    /**
     * Checks effective yes/no rule flags, including parent inheritance for variations.
     *
     * @param WC_Product            $product Product object.
     * @param WC_Product|false|null $parent_product Parent product, if available.
     * @param string                $product_meta_key Product-level meta key.
     * @param string                $variation_meta_key Variation-level meta key.
     * @return bool
     */
    private static function product_has_effective_yes_meta(\WC_Product $product, $parent_product, $product_meta_key, $variation_meta_key)
    {
    }
}
/**
 * Handles compatibility with other WC extensions.
 *
 * @class    WC_MMQ_Compatibility
 * @version  5.2.15
 */
class WC_MMQ_Compatibility
{
    /**
     * Min required plugin versions to check.
     *
     * @var array<string, string>
     */
    private $required = array();
    /**
     * Modules to load.
     *
     * @var array
     */
    private $modules = array();
    /**
     * The single instance of the class.
     *
     * @var WC_MMQ_Compatibility|null
     *
     * @since 4.0.4
     */
    protected static $_instance = \null;
    //phpcs:ignore PSR2.Classes.PropertyDeclaration.Underscore
    /**
     * Main WC_MMQ_Compatibility instance. Ensures only one instance of WC_MMQ_Compatibility is loaded or can be loaded.
     *
     * @static
     * @return WC_MMQ_Compatibility
     * @since  4.0.4
     */
    public static function instance()
    {
    }
    /**
     * Cloning is forbidden.
     *
     * @since 4.0.4
     */
    public function __clone()
    {
    }
    /**
     * Unserializing instances of this class is forbidden.
     *
     * @since 4.0.4
     */
    public function __wakeup()
    {
    }
    /**
     * Setup compatibility class.
     */
    protected function __construct()
    {
    }
    /**
     * Initialize.
     *
     * @since  5.4.0
     *
     * @return void
     */
    protected function load_modules()
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
     * Checks if a module has been loaded.
     *
     * @param  string $name Module name to check.
     * @return boolean
     */
    public function is_module_loaded($name)
    {
    }
    /**
     * Load compatibility classes.
     *
     * @version 4.3.2
     *
     * @return void
     */
    public function module_includes()
    {
    }
    /**
     * Get min module version.
     *
     * @since  4.0.4
     *
     * @param  string $module Module name to check.
     * @return string|null
     */
    public function get_required_module_version($module)
    {
    }
}
/**
 * Functions for WC core back-compatibility.
 *
 * @class    WC_MMQ_Core_Compatibility
 * @version  5.2.16
 */
class WC_MMQ_Core_Compatibility
{
    /**
     * Current REST request stack.
     * An array containing WP_REST_Request instances.
     *
     * @since 4.2.3
     *
     * @var WP_REST_Request[]
     */
    private static $requests = array();
    /**
     * Cache 'gt' comparison results for WP version.
     *
     * @since  4.3.0
     * @var    bool[]
     */
    private static $is_wp_version_gt = array();
    /**
     * Cache 'gte' comparison results for WP version.
     *
     * @since  4.3.0
     * @var    bool[]
     */
    private static $is_wp_version_gte = array();
    /**
     * Cache 'gte' comparison results for WC version.
     *
     * @since  5.13.3
     * @var    bool[]
     */
    private static $is_wc_version_gte = array();
    /**
     * Constructor.
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
     * @since  4.2.3
     *
     * @param  WP_REST_Response $response Response object.
     * @return mixed
     */
    public static function pop_rest_request($response)
    {
    }
    /**
     * Saves the current hydration request.
     *
     * @since  4.2.3
     *
     * @param  mixed           $result  Result object.
     * @param  WP_REST_Request $request Request object.
     * @return mixed
     */
    public static function save_hydration_request($result, $request)
    {
    }
    /**
     * Saves the current rest request.
     *
     * @since  6.15.0
     *
     * @param  mixed           $result  Result object.
     * @param  WP_REST_Server  $server  Server object.
     * @param  WP_REST_Request $request Request object.
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
     * Returns the current Store/REST API request or false.
     *
     * @since  2.5.0
     *
     * @return WP_REST_Request|false
     */
    public static function get_api_request()
    {
    }
    /**
     * Whether this is a Store API request.
     *
     * @since  2.5.0
     *
     * @param  string $route Route to check.
     * @return boolean
     */
    public static function is_store_api_request($route = '')
    {
    }
    /**
     * Returns true if the installed version of WordPress is greater than or equal to $version.
     *
     * @since  4.3.0
     *
     * @param  string $version Version to compare.
     * @return boolean
     */
    public static function is_wp_version_gt($version)
    {
    }
    /**
     * Returns true if the installed version of WordPress is greater than or equal to $version.
     *
     * @since  4.3.0
     *
     * @param  string $version Version to compare.
     * @return boolean
     */
    public static function is_wp_version_gte($version)
    {
    }
    /**
     * Helper method to get the version of the currently installed WooCommerce.
     *
     * @since  5.1.0
     *
     * @return string|null
     */
    private static function get_wc_version()
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is greater than or equal to $version.
     *
     * @since  5.1.0
     *
     * @param  string $version The version to compare.
     * @return boolean true if the installed version of WooCommerce is > $version
     */
    public static function is_wc_version_gte($version)
    {
    }
}
/**
 * Addons Compatibility.
 *
 * @version 2.3.15
 */
class WC_Min_Max_Quantities_Addons
{
    /**
     * Checks if checkout page is on set multiple shipping addresses.
     *
     * @since 2.3.15
     * @version 2.3.15
     * @return bool
     */
    public function is_multiple_shipping_address_page()
    {
    }
}
/**
 * WooCommerce Blocks Compatibility.
 *
 * @version 4.0.4
 */
class WC_MMQ_Blocks_Compatibility
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
 * PayPal Compatibility.
 *
 * @version 5.2.15
 */
class WC_Min_Max_Quantities_PayPal_Compatibility
{
    /**
     * Initialize PayPal compatibility hooks.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Hide smart buttons in product pages when Min or Max qty/value are set.
     *
     * @param  bool       $is_supported Whether the smart button is supported.
     * @param  WC_Product $product      Product object.
     *
     * @return bool
     */
    public static function handle_smart_buttons($is_supported, $product)
    {
    }
}
/**
 * Stripe Compatibility.
 *
 * @version 5.2.15
 */
class WC_Min_Max_Quantities_Stripe_Compatibility
{
    /**
     * Initialize Stripe compatibility hooks.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Hide express checkout buttons in product pages when Min or Max qty/value are set.
     *
     * @param  bool    $hide Whether to hide the express checkout button.
     * @param  WP_Post $post Post object.
     *
     * @return bool
     */
    public static function handle_express_checkout_buttons($hide, $post = \null)
    {
    }
}
/**
 * WC_Payments Compatibility.
 *
 * @version 5.2.15
 */
class WC_Min_Max_Quantities_WC_Payments_Compatibility
{
    /**
     * Initialize WC Payments compatibility hooks.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Hide express checkout buttons in product pages when Min or Max qty/value are set.
     *
     * @param  bool       $is_supported Whether the express checkout button is supported.
     * @param  WC_Product $product      Product object.
     *
     * @return bool
     */
    public static function handle_express_checkout_buttons($is_supported, $product)
    {
    }
}
// WRCS: DEFINED_VERSION.
/**
 * Min Max Quantities class.
 *
 * @version  5.2.15
 */
class WC_Min_Max_Quantities
{
    /**
     * Minimum WooCommerce version.
     *
     * @var string
     */
    public $min_wc_version = '11.1.0';
    /**
     * Minimum order quantity.
     *
     * @var int
     */
    public $minimum_order_quantity;
    /**
     * Maximum order quantity.
     *
     * @var int
     */
    public $maximum_order_quantity;
    /**
     * Minimum order value.
     *
     * @var float
     */
    public $minimum_order_value;
    /**
     * Maximum order value.
     *
     * @var float
     */
    public $maximum_order_value;
    /**
     * List of excluded product titles.
     *
     * @var string[]
     */
    public $excludes = array();
    /**
     * Instance of compatibility class.
     *
     * @var WC_MMQ_Compatibility
     */
    public $compatibility;
    /**
     * Instance of addons class.
     *
     * @var WC_Min_Max_Quantities_Addons|null
     */
    public $addons;
    /**
     * Class instance.
     *
     * @var WC_Min_Max_Quantities
     */
    private static $instance;
    /**
     * Get the class instance.
     *
     * @return WC_Min_Max_Quantities Instance of this class.
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
     * Sets DB version and conditionally displays welcome notice.
     *
     * @since 4.2.3
     * @return void
     */
    public function maybe_install()
    {
    }
    /**
     * Registers custom taxonomies.
     *
     * @since 4.1.4
     * @return void
     */
    public function register_custom_taxonomies()
    {
    }
    /**
     * Invalidate cached rules after product-category relationships change.
     *
     * @since 5.2.12
     *
     * @param int    $object_id  Product ID.
     * @param array  $terms      Submitted terms.
     * @param array  $tt_ids     Saved term-taxonomy IDs.
     * @param string $taxonomy   Taxonomy name.
     * @param bool   $append     Whether terms were appended.
     * @param array  $old_tt_ids Previous term-taxonomy IDs.
     * @return void
     */
    public function maybe_invalidate_rules_for_category_relationships($object_id, $terms, $tt_ids, $taxonomy, $append, $old_tt_ids)
    {
    }
    /**
     * Invalidate cached rules after product-category relationships are removed directly.
     *
     * @since 5.2.12
     *
     * @param int    $object_id Product ID.
     * @param array  $tt_ids    Removed term-taxonomy IDs.
     * @param string $taxonomy  Taxonomy name.
     * @return void
     */
    public function maybe_invalidate_rules_for_deleted_category_relationships($object_id, $tt_ids, $taxonomy)
    {
    }
    /**
     * Invalidate cached rules after product-category rule metadata changes.
     *
     * @since 5.2.12
     *
     * @param int    $meta_id  Metadata ID or IDs.
     * @param int    $term_id  Term ID.
     * @param string $meta_key Metadata key.
     * @return void
     */
    public function maybe_invalidate_rules_for_category_meta($meta_id, $term_id, $meta_key)
    {
    }
    /**
     * Increment the shared quantity-rule cache version.
     *
     * @since 5.2.12
     *
     * @return void
     */
    public function invalidate_quantity_rule_cache()
    {
    }
    /**
     * Plugin version getter.
     *
     * @since  4.3.0
     *
     * @param  boolean $base Whether to return base version.
     * @param  string  $version Version string.
     * @return string
     */
    public function plugin_version($base = \false, $version = '')
    {
    }
    /**
     * Define constants if not present.
     *
     * @since 4.0.4
     *
     * @param string $name  Constant name.
     * @param mixed  $value Constant value.
     * @return void
     */
    protected function maybe_define_constant($name, $value)
    {
    }
    /**
     * Plugin URL getter.
     *
     * @return string
     */
    public function plugin_url()
    {
    }
    /**
     * Output a notice if Woocommerce isn't active.
     *
     * @return void
     */
    public function woocommerce_required_notice()
    {
    }
    /**
     * Output a notice if PHP is older than 7.0
     *
     * @return void
     */
    public function php_version_notice()
    {
    }
    /**
     * Load scripts.
     *
     * @return void
     */
    public function load_scripts()
    {
    }
    /**
     * Declare HPOS (Custom Order tables) and Blocks compatibility.
     *
     * @since 4.0.2
     * @return void
     */
    public function declare_feature_compatibilities()
    {
    }
    /**
     * Load Localisation files.
     *
     * Note: the first-loaded translation file overrides any following ones if the same translation is present.
     *
     * Frontend/global Locales found in:
     * - WP_LANG_DIR/woocommerce-min-max-quantities/woocommerce-min-max-quantities-LOCALE.mo
     * - woocommerce-min-max-quantities/woocommerce-min-max-quantities-LOCALE.mo (which if not found falls back to:)
     * - WP_LANG_DIR/plugins/woocommerce-min-max-quantities-LOCALE.mo
     *
     * @return void
     */
    public function load_plugin_textdomain()
    {
    }
    /**
     * Handle plugin activation process.
     *
     * @return void
     */
    public static function on_activation()
    {
    }
    /**
     * Handle plugin deactivation process.
     *
     * @return void
     */
    public static function on_deactivation()
    {
    }
    /**
     * Add an error.
     *
     * @since 1.0.0
     * @version 5.2.14
     * @param string $error Error text.
     * @return void
     */
    public function add_error($error = '')
    {
    }
    /**
     * Output any plugin specific error messages
     *
     * We use this instead of wc_print_notices so we
     * can remove any error notices that aren't from us.
     *
     * @return void
     */
    public function output_errors()
    {
    }
    /**
     * Add quantity property to add to cart button on shop loop for simple products.
     *
     * @param  string     $html    Add to cart link.
     * @param  WC_Product $product Product object.
     * @return string
     */
    public function add_to_cart_link($html, $product)
    {
    }
    /**
     * Get product or variation ID to check
     *
     * @param array $values List of values.
     * @return int
     */
    public function get_id_to_check($values)
    {
    }
    /**
     * Get the product or variation ID used to aggregate cart quantities.
     *
     * @since 5.2.12
     *
     * @param array $values Cart item values.
     * @return int
     */
    private function get_aggregation_id_to_check($values)
    {
    }
    /**
     * Get the product or variation ID whose item settings apply.
     *
     * Inherited quantities may be aggregated per variation, but their settings and filter context
     * must continue to come from the parent product.
     *
     * @since 5.2.12
     *
     * @param array $values      Cart item values.
     * @param int   $checking_id Quantity aggregation ID.
     * @return int
     */
    private function get_settings_id_to_check($values, $checking_id)
    {
    }
    /**
     * Validate cart items against set rules
     *
     * @throws Exception When cart validation fails.
     * @return void
     */
    public function check_cart_items()
    {
    }
    /**
     * If the minimum allowed quantity for purchase is lower than the current stock, we need to
     * let the user know that they are on backorder, or out of stock.
     *
     * @param array      $args    List of arguments.
     * @param WC_Product $product Product object.
     * @return mixed The availability arguments received from the filter, or replacement backorder/out-of-stock arguments.
     */
    public function maybe_show_backorder_message($args, $product)
    {
    }
    /**
     * Update structured data (JSON-LD) product availability when stock is below the minimum quantity threshold.
     *
     * @since 5.2.13
     *
     * @param array      $markup  Structured data markup.
     * @param WC_Product $product Product object.
     * @return array
     */
    public function maybe_update_structured_data_availability($markup, $product)
    {
    }
    /**
     * Check whether a quantity is a positive integer multiple of a Group-of rule.
     *
     * @since 5.2.12
     *
     * @param mixed $quantity          Quantity to check.
     * @param mixed $group_of_quantity Group-of rule.
     * @return bool
     */
    private function is_quantity_multiple_of_group($quantity, $group_of_quantity)
    {
    }
    /**
     * Add respective error message depending on rules checked.
     *
     * @throws Exception When quantity rules are violated.
     *
     * @param WC_Product $product           Product object.
     * @param int        $quantity          Quantity to check.
     * @param int        $minimum_quantity  Minimum quantity.
     * @param int        $maximum_quantity  Maximum quanitty.
     * @param int        $group_of_quantity Group quantity.
     * @param int|null   $checking_id       Variation ID.
     * @return void
     */
    public function check_rules($product, $quantity, $minimum_quantity, $maximum_quantity, $group_of_quantity, $checking_id = \null)
    {
    }
    /**
     * Add to cart validation
     *
     * @version  5.2.12
     *
     * @param  mixed $pass         Filter value.
     * @param  mixed $product_id   Product ID.
     * @param  mixed $quantity     Quantity.
     * @param  int   $variation_id Variation ID (default none).
     * @return mixed
     */
    public function add_to_cart($pass, $product_id, $quantity, $variation_id = 0)
    {
    }
    /**
     * Updates the quantity arguments.
     *
     * @param array      $data    List of data to update.
     * @param WC_Product $product Product object.
     * @return array
     */
    public function update_quantity_args($data, $product)
    {
    }
    /**
     * If on a grouped product page, don't use Group as for our minimum.
     *
     * @param boolean    $use_group Whether to use group quantity as minimum. Default true.
     * @param WC_Product $product   Product object.
     * @return boolean
     */
    public function use_group_as_min_quantity($use_group, $product)
    {
    }
    /**
     * Adds variation min max settings to the localized variation parameters to be used by JS.
     *
     * @param array      $data      Available variation data.
     * @param WC_Product $product   Product object.
     * @param WC_Product $variation Variation object.
     * @return array $data
     */
    public function available_variation($data, $product, $variation)
    {
    }
    /**
     * Get group_of_quantity setting for a product.
     *
     * @param WC_Product $product Product object.
     *
     * Doesn't handle variations on variable products.
     *
     * @return int
     */
    public function get_group_of_quantity_for_product($product)
    {
    }
    /**
     * Get group_of_quantity setting for a product.
     *
     * @param WC_Product|int $product Product object.
     *
     * Doesn't handle variations on variable products.
     *
     * @return array<string, int>
     */
    public function get_quantity_rules_for_product($product): array
    {
    }
    /**
     * Modify quantity for add to cart action inside loop to respect minimum rules.
     *
     * @param int $product_id Product ID.
     *
     * @return int
     */
    public function modify_add_to_cart_quantity($product_id)
    {
    }
    /**
     * Filter Minimum Quantity based on "Group of" option on runtime.
     *
     * @param  int $min_quantity      Minimum quantity value.
     * @param  int $group_of_quantity Group of quantity value.
     *
     * @return int
     */
    public static function adjust_min_quantity($min_quantity, $group_of_quantity)
    {
    }
    /**
     * Filter Maximum Quantity based on "Group of" option on runtime.
     *
     * @param  int $max_quantity      Maximum quantity value.
     * @param  int $group_of_quantity Group of quantity value.
     * @param  int $min_quantity      Minimum quantity value.
     *
     * @return int
     */
    public static function adjust_max_quantity($max_quantity, $group_of_quantity, $min_quantity = 0)
    {
    }
    /**
     * Check if the product always conforms to MMQ rules.
     *
     * That is, there are either no rules set, or the min/max rules are set and equal.
     *
     * @param WC_Product $product Product object.
     *
     * @return bool
     */
    private function can_skip_product_rules_validation($product)
    {
    }
    /**
     * Check if the variable product supports express checkout.
     *
     * Simplified version that is a bit lighter on resources: If there are any variations with min/max rules enabled, return false.
     * Variations can have different prices, too. But that's handled outside of this plugin.
     *
     * @param WC_Product $product Product object.
     *
     * @return bool
     */
    private function variable_product_supports_express_checkout($product)
    {
    }
    /**
     * Check if global rules apply to a product.
     *
     * That is, if there are any global rules set, and the product is not excluded from them.
     *
     * Exclusion from group of rules applied through categories is done in can_skip_product_rules_validation(),
     * as get_group_of_quantity_for_product returns 0 if the rule is set, but the product is excluded.
     *
     * @since 4.3.2
     * @version 4.3.2
     *
     * @param WC_Product $product Product object.
     *
     * @return bool
     */
    private function global_rules_apply_to_product($product)
    {
    }
    /**
     * Check if the express checkout button(s) can be displayed on single product page.
     *
     * The only thing we can do from PHP is to hide the smart buttons if the min/max quantity or value is set.
     * The end customer can increase the quantity and click the express checkout button and only at that point
     * we can check if the quantity/value is within the allowed range.
     * Since we can't validate this in PHP, we hide the express checkout button.
     *
     * @since 4.3.2
     * @version 4.3.2
     *
     * @param WC_Product $product Product object.
     *
     * @return bool
     */
    public function can_display_express_checkout($product)
    {
    }
}
\define('WC_MIN_MAX_QUANTITIES', '5.2.16');