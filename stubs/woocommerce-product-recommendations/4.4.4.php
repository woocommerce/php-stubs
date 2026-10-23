<?php
/**
 * Generated stub declarations for woocommerce-product-recommendations 4.4.4.
 * @see https://github.com/woocommerce/all-plugins/tree/stubs
 */

/**
 * Registers Product Recommendations ability definitions through WooCommerce.
 *
 * @class    WC_PRL_Abilities
 * @version  4.3.4
 */
class WC_PRL_Abilities
{
    /**
     * WooCommerce ability definition interface.
     */
    const ABILITY_DEFINITION_INTERFACE = '\Automattic\WooCommerce\Abilities\AbilityDefinition';
    /**
     * Initialize ability loading when WooCommerce's ability loader is available.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Register Product Recommendations ability definition classes.
     *
     * @param array $classes Ability definition class names.
     * @return array
     */
    public static function register_ability_definition_classes(array $classes)
    {
    }
}
/**
 * Describes recommendation components.
 *
 * @class    WC_PRL_Describe_Components_Ability
 * @version  4.3.4
 */
class WC_PRL_Describe_Components_Ability implements \Automattic\WooCommerce\Abilities\AbilityDefinition
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
     * Get ability registration args.
     *
     * @return array
     */
    public static function get_registration_args(): array
    {
    }
    /**
     * Describe recommendation components.
     *
     * @param array $input Ability input.
     * @return array
     */
    public static function execute(array $input = array()): array
    {
    }
    /**
     * Check whether the current user can read recommendation configuration.
     *
     * @param mixed $input Ability input.
     * @return bool
     */
    public static function can_read($input = array()): bool
    {
    }
    /**
     * Get ability input schema.
     *
     * @return array
     */
    private static function get_input_schema(): array
    {
    }
    /**
     * Get ability output schema.
     *
     * @return array
     */
    private static function get_output_schema(): array
    {
    }
    /**
     * Get schema for id/label items.
     *
     * @param array $extra_properties Extra schema properties.
     * @return array
     */
    private static function get_id_label_schema(array $extra_properties = array()): array
    {
    }
    /**
     * Get schema for component items.
     *
     * @param array $extra_properties Extra schema properties.
     * @return array
     */
    private static function get_component_schema(array $extra_properties = array()): array
    {
    }
    /**
     * Format engine types.
     *
     * @return array
     */
    private static function format_engine_types(): array
    {
    }
    /**
     * Format locations.
     *
     * @param string $engine_type Optional engine type filter.
     * @return array
     */
    private static function format_locations(string $engine_type = ''): array
    {
    }
    /**
     * Format supported filters.
     *
     * @param string $engine_type Optional engine type filter.
     * @return array
     */
    private static function format_filters(string $engine_type = ''): array
    {
    }
    /**
     * Format supported amplifiers.
     *
     * @param string $engine_type Optional engine type filter.
     * @return array
     */
    private static function format_amplifiers(string $engine_type = ''): array
    {
    }
    /**
     * Format supported conditions.
     *
     * @param string $engine_type Optional engine type filter.
     * @return array
     */
    private static function format_conditions(string $engine_type = ''): array
    {
    }
}
/**
 * Queries recommendation deployments.
 *
 * @class    WC_PRL_Query_Deployments_Ability
 * @version  4.4.4
 */
class WC_PRL_Query_Deployments_Ability implements \Automattic\WooCommerce\Abilities\AbilityDefinition
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
     * Get ability registration args.
     *
     * @return array
     */
    public static function get_registration_args(): array
    {
    }
    /**
     * Query recommendation deployments.
     *
     * @param array $input Ability input.
     * @return array|WP_Error
     */
    public static function execute(array $input = array())
    {
    }
    /**
     * Check whether the current user can read recommendation configuration.
     *
     * @param mixed $input Ability input.
     * @return bool
     */
    public static function can_read($input = array()): bool
    {
    }
    /**
     * Get ability input schema.
     *
     * @return array
     */
    private static function get_input_schema(): array
    {
    }
    /**
     * Get ability output schema.
     *
     * @return array
     */
    private static function get_output_schema(): array
    {
    }
    /**
     * Get deployment item output schema.
     *
     * @return array
     */
    private static function get_deployment_schema(): array
    {
    }
    /**
     * Get normalized settings schema.
     *
     * @return array
     */
    private static function get_setting_schema(): array
    {
    }
    /**
     * Format a deployment for ability output.
     *
     * @param WC_PRL_Deployment_Data $deployment Recommendation deployment.
     * @return array
     */
    public static function format_deployment(\WC_PRL_Deployment_Data $deployment): array
    {
    }
    /**
     * Format deployment conditions.
     *
     * @param array $conditions_data Conditions data.
     * @return array
     */
    private static function format_conditions(array $conditions_data): array
    {
    }
    /**
     * Format component settings as string key/value pairs.
     *
     * @param array    $data Component data.
     * @param string[] $excluded_keys Keys omitted from settings.
     * @return array<int, array{key: string, value: string}>
     */
    private static function format_settings(array $data, array $excluded_keys): array
    {
    }
    /**
     * Convert a setting value to a safe string.
     *
     * @param mixed $value Setting value.
     * @return string
     */
    private static function stringify_value($value): string
    {
    }
}
/**
 * Queries recommendation engines.
 *
 * @class    WC_PRL_Query_Engines_Ability
 * @version  4.4.4
 */
class WC_PRL_Query_Engines_Ability implements \Automattic\WooCommerce\Abilities\AbilityDefinition
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
     * Get ability registration args.
     *
     * @return array
     */
    public static function get_registration_args(): array
    {
    }
    /**
     * Query recommendation engines.
     *
     * @param array $input Ability input.
     * @return array|WP_Error
     */
    public static function execute(array $input = array())
    {
    }
    /**
     * Check whether the current user can read recommendation configuration.
     *
     * @param mixed $input Ability input.
     * @return bool
     */
    public static function can_read($input = array()): bool
    {
    }
    /**
     * Get ability input schema.
     *
     * @return array
     */
    private static function get_input_schema(): array
    {
    }
    /**
     * Get ability output schema.
     *
     * @return array
     */
    private static function get_output_schema(): array
    {
    }
    /**
     * Get engine item output schema.
     *
     * @return array
     */
    private static function get_engine_schema(): array
    {
    }
    /**
     * Get normalized settings schema.
     *
     * @return array
     */
    private static function get_setting_schema(): array
    {
    }
    /**
     * Format an engine for ability output.
     *
     * @param WC_PRL_Engine $engine Recommendation engine.
     * @return array
     */
    private static function format_engine(\WC_PRL_Engine $engine): array
    {
    }
    /**
     * Format filter configuration.
     *
     * @param array $filters_data Engine filter data.
     * @return array
     */
    private static function format_filters(array $filters_data): array
    {
    }
    /**
     * Format amplifier configuration.
     *
     * @param array $amplifiers_data Engine amplifier data.
     * @return array
     */
    private static function format_amplifiers(array $amplifiers_data): array
    {
    }
    /**
     * Format component settings as string key/value pairs.
     *
     * @param array    $data Component data.
     * @param string[] $excluded_keys Keys omitted from settings.
     * @return array<int, array{key: string, value: string}>
     */
    private static function format_settings(array $data, array $excluded_keys): array
    {
    }
    /**
     * Format date/time values as ISO8601 strings.
     *
     * @param mixed $datetime Date/time value.
     * @return string
     */
    private static function format_datetime($datetime): string
    {
    }
    /**
     * Convert a setting value to a safe string.
     *
     * @param mixed $value Setting value.
     * @return string
     */
    private static function stringify_value($value): string
    {
    }
}
/**
 * Abstract class used for managing engine Amplifiers.
 *
 * @class    WC_PRL_Amplifier
 * @version  4.4.4
 */
abstract class WC_PRL_Amplifier
{
    /**
     * Amplifier identifier.
     *
     * @var string
     */
    protected $id;
    /**
     * Amplifier title.
     *
     * @var string
     */
    protected $title;
    /**
     * Supported engine types.
     *
     * @var string[]
     */
    protected $supported_engine_types = array();
    /**
     * Supported modifiers.
     *
     * @var array
     */
    protected $supported_modifiers = array('order' => array('DESC', 'ASC'));
    /**
     * Constructor.
     */
    protected function __construct()
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param  string|null $post_name
     * @param  int         $amplifier_index
     * @param  array       $amplifier_data
     * @return void
     */
    abstract public function get_admin_fields_html($post_name, $amplifier_index, $amplifier_data);
    /*
    	---------------------------------------------------*/
    /*
    		Setters.                                         */
    /*---------------------------------------------------*/
    /**
     * Set the current id.
     *
     * @param  string $value
     * @return void
     */
    public function set_id($value)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Getters.                                         */
    /*---------------------------------------------------*/
    /**
     * Get the ID.
     *
     * @return string
     */
    public function get_id()
    {
    }
    /**
     * Get the title.
     *
     * @return string
     */
    public function get_title()
    {
    }
    /**
     * Get supported engine types.
     *
     * @return array
     */
    public function get_supported_engine_types()
    {
    }
    /**
     * Get modifiers select html.
     *
     * @param  string $selected
     * @return void
     */
    public function get_modifiers_select_options($selected)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Conditionals.                                    */
    /*---------------------------------------------------*/
    /**
     * Whether or not a amplifier is supported by an engine type.
     *
     * @param  string $type
     * @return bool
     */
    public function has_engine_type($type)
    {
    }
    /**
     * How many steps this amp needs to be calculated in the background generator.
     *
     * @since 1.4.0
     *
     * @return int
     */
    public function get_steps_count()
    {
    }
    /**
     * Run a step based on the step index. (non-zero index)
     *
     * @since 1.4.0
     *
     * @return mixed
     */
    public function run_step($step_index, $deployment, $args = array())
    {
    }
    /**
     * Save the results of the amplifier.
     *
     * @since 4.1.0
     *
     * @param  int    $product_id Source product ID.
     * @param  array  $products   Amplified products.
     * @param  string $type       Calibration type (Optional)
     * @return bool|void
     */
    public function save_products($product_id, $products, $type = 'default')
    {
    }
    /**
     * Get cached products
     *
     * @since 4.1.0
     *
     * @param  int    $product_id  Source product ID.
     * @param  string $type        Calibration type (Optional)
     * @return array {
     *    @type int     $id Unique identifier of this cached version.
     *    @type int     $source Source product ID.
     *    @type string  $name Amplifier name.
     *    @type string  $type Calibration type.
     *    @type array   $data Amplified products.
     *    @type int     $created_at Time of the cache.
     * } or empty array if not found.
     */
    public function get_cached_products($product_id, $type = 'default')
    {
    }
    /**
     * Apply the amplifier to the query args array.
     *
     * @param  array             $query_args
     * @param  WC_PRL_Deployment $deployment
     * @param  array             $data
     * @return array
     */
    public function amplify($query_args, $deployment, $data = array())
    {
    }
    /**
     * Amplify the query.
     *
     * @param  array             $query_args
     * @param  WC_PRL_Deployment $deployment
     * @param  array             $data
     * @return array
     */
    public function amp($query_args, $deployment, $data)
    {
    }
    /**
     * Fetches all products based on the filters.
     *
     * @param  array $query_args
     * @return array
     */
    public function query($query_args)
    {
    }
    /**
     * Removes global filters that might get registered relative to the previous query.
     *
     * @return void
     */
    public function remove_amp()
    {
    }
    /**
     * Validates the amplifier data.
     *
     * @param  mixed $data Data to validate.
     * @return bool
     */
    public function validate($data)
    {
    }
}
/**
 * Abstract class used for managing deployment visibility conditions.
 *
 * @class    WC_PRL_Condition
 * @version  4.4.4
 */
abstract class WC_PRL_Condition
{
    /**
     * Condition identifier.
     *
     * @var string
     */
    protected $id;
    /**
     * Condition title.
     *
     * @var string
     */
    protected $title;
    /**
     * Condition runtime complexity factors.
     *
     * Info: Separating conditions based on complexity, we can achieve performance boost by executing them in order.
     *
     * @var int
     */
    const ZERO_COMPLEXITY = 0;
    const LOW_COMPLEXITY = 10;
    const MEDIUM_COMPLEXITY = 20;
    const QUERY_COMPLEXITY = 50;
    const QUERY_JOIN_COMPLEXITY = 80;
    /**
     * Complexity of the condition check, one of the *_COMPLEXITY constants.
     *
     * @var int|null
     */
    protected $complexity;
    /**
     * Supported engine types.
     *
     * @var string[]
     */
    protected $supported_engine_types = array();
    /**
     * Supported modifiers.
     *
     * @var array<string, string>
     */
    protected $supported_modifiers = array();
    /**
     * Condition needs value.
     *
     * @var bool
     */
    public $needs_value = \false;
    /**
     * Runtime caching of the category hierarchical tree.
     *
     * @since 1.2.5
     *
     * @var array|null
     */
    protected static $product_categories_tree;
    /**
     * Constructor.
     */
    protected function __construct()
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param  string|null $post_name
     * @param  int         $condition_index
     * @param  array       $condition_data
     * @return void
     */
    abstract public function get_admin_fields_html($post_name, $condition_index, $condition_data);
    /*
    	---------------------------------------------------*/
    /*
    		Setters.                                         */
    /*---------------------------------------------------*/
    /**
     * Set the current id.
     *
     * @param  string $value
     * @return void
     */
    public function set_id($value)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Getters.                                         */
    /*---------------------------------------------------*/
    /**
     * Get the ID.
     *
     * @return string
     */
    public function get_id()
    {
    }
    /**
     * Get the title.
     *
     * @return string
     */
    public function get_title()
    {
    }
    /**
     * Get the complexity factor.
     *
     * @return int
     */
    public function get_complexity()
    {
    }
    /**
     * Get supported engine types.
     *
     * @return array
     */
    public function get_supported_engine_types()
    {
    }
    /**
     * Get modifiers select html.
     *
     * @param  string $selected
     * @return void
     */
    public function get_modifiers_select_options($selected)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Conditionals.                                    */
    /*---------------------------------------------------*/
    /**
     * Whether or not a condition is supported by an engine type.
     *
     * @param  string $type
     * @return bool
     */
    public function has_engine_type($type)
    {
    }
    /**
     * Apply the condition to the current request.
     *
     * @param  array             $data
     * @param  WC_PRL_Deployment $deployment Deployment.
     * @return bool
     */
    public function apply($data, $deployment)
    {
    }
    /**
     * Actual checking for the condition.
     *
     * @param  array             $data
     * @param  WC_PRL_Deployment $deployment Deployment.
     * @return bool
     */
    public function check($data, $deployment)
    {
    }
    /**
     * Get the default term relationship.
     *
     * @return string
     */
    public function get_default_term_relationship()
    {
    }
    /**
     * Checks if the provided modifier is inside the modifiers haystack.
     *
     * @param  string       $modifier  Modifier to look for.
     * @param  string|array $haystack  Modifier or list of modifiers to match against.
     * @return bool
     */
    protected function modifier_is($modifier, $haystack = array())
    {
    }
    /**
     * Validates the condition data.
     *
     * @param  mixed $data Data to validate.
     * @return bool
     */
    public function validate($data)
    {
    }
}
/**
 * Abstract class used for managing engine Filters.
 *
 * @class    WC_PRL_Filter
 * @version  4.4.4
 */
abstract class WC_PRL_Filter
{
    /**
     * Filter identifier.
     *
     * @var string
     */
    protected $id;
    /**
     * Filter title.
     *
     * @var string
     */
    protected $title;
    /**
     * Filter type. (static|dynamic)
     *
     * @var string
     */
    protected $type = 'static';
    /**
     * Supported engine types.
     *
     * @var string[]
     */
    protected $supported_engine_types = array();
    /**
     * Supported modifiers.
     *
     * @var array<string, string>
     */
    protected $supported_modifiers;
    /**
     * Filter needs value.
     *
     * @var bool
     */
    public $needs_value = \false;
    /**
     * Runtime caching of the category hierarchical tree.
     *
     * @since 1.2.5
     *
     * @var array|null
     */
    protected static $product_categories_tree;
    /**
     * Constructor.
     */
    protected function __construct()
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param  string|null $post_name
     * @param  int         $filter_index
     * @param  array       $filter_data
     * @return void
     */
    abstract public function get_admin_fields_html($post_name, $filter_index, $filter_data);
    /*
    	---------------------------------------------------*/
    /*
    		Setters.                                         */
    /*---------------------------------------------------*/
    /**
     * Set the current id.
     *
     * @param  string $value
     * @return void
     */
    public function set_id($value)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Getters.                                         */
    /*---------------------------------------------------*/
    /**
     * Get the ID.
     *
     * @return string
     */
    public function get_id()
    {
    }
    /**
     * Get the title.
     *
     * @return string
     */
    public function get_title()
    {
    }
    /**
     * Get supported engine types.
     *
     * @return array
     */
    public function get_supported_engine_types()
    {
    }
    /**
     * Get modifiers select html.
     *
     * @param  string $selected
     * @return void
     */
    public function get_modifiers_select_options($selected)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Conditionals.                                    */
    /*---------------------------------------------------*/
    /**
     * Whether or not a filter is supported by an engine type.
     *
     * @param  string $type
     * @return bool
     */
    public function has_engine_type($type)
    {
    }
    /**
     * Whether the filter is running at runtime or not.
     *
     * @return bool
     */
    public function is_static()
    {
    }
    /**
     * Apply the filter to the query args array.
     *
     * @param  array             $query_args
     * @param  WC_PRL_Deployment $deployment
     * @param  array             $data
     * @return true|void
     */
    public function apply(&$query_args, $deployment, $data = array())
    {
    }
    /**
     * Apply dynamic filter process.
     *
     * @param  array         $products
     * @param  int           $max_products
     * @param  array         $data
     * @param  WC_PRL_Engine $engine
     * @return void
     */
    public function run(&$products, $max_products, $data, $engine)
    {
    }
    /**
     * Replace the filter value based on the context..
     *
     * @param  array  &$data
     * @param  array  $source_data
     * @param  string $engine_type
     * @return mixed
     */
    protected function maybe_sync_context(&$data, $source_data, $engine_type)
    {
    }
    /**
     * Parse the contextual value.
     * Hint: Return `null` is the filter is not applicable.
     *
     * @param  array  $source_data
     * @param  string $engine_type
     * @param  mixed  $value
     * @return mixed
     */
    protected function parse_contextual_value($source_data, $engine_type, $value)
    {
    }
    /**
     * Filter the query args array.
     *
     * @param  array             $query_args
     * @param  WC_PRL_Deployment $deployment
     * @param  array             $data
     * @return array
     */
    public function filter($query_args, $deployment, $data)
    {
    }
    /**
     * Validates the filter data.
     *
     * @param  array $data
     * @return bool
     */
    public function validate($data)
    {
    }
}
/**
 * Abstract class for setting the Location of each Recommendation Engine.
 *
 * @class    WC_PRL_Location
 * @version  4.4.4
 */
abstract class WC_PRL_Location
{
    /**
     * Location ID.
     *
     * @var string
     */
    protected $id;
    /**
     * Location title.
     *
     * @var string
     */
    protected $title;
    /**
     * Defaults.
     *
     * @var array
     */
    protected $defaults;
    /**
     * Supported hooks.
     *
     * @var array
     */
    protected $hooks = array();
    /**
     * Location cacheable flag.
     *
     * @var bool
     */
    protected $cacheable = \true;
    /*
    	---------------------------------------------------*/
    /*
    		Runtime properties.                              */
    /*---------------------------------------------------*/
    /**
     * Current hook.
     *
     * @var string|array
     */
    protected $hook = array();
    /**
     * Location load status.
     *
     * @var bool
     */
    protected $is_loaded = \false;
    /**
     * Constructor.
     */
    protected function __construct()
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Setup all supported hooks based on the location id.
     *
     * @return void
     */
    abstract protected function setup_hooks();
    /*
    	---------------------------------------------------*/
    /*
    		Setters.                                         */
    /*---------------------------------------------------*/
    /**
     * Set the current hook.
     *
     * @param  string $hook
     * @return void
     */
    public function set_current_hook($hook)
    {
    }
    /**
     * Set the loaded status.
     *
     * @since 1.1.0
     *
     * @param  bool $value
     * @return void
     */
    public function set_load_status($value)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Getters.                                         */
    /*---------------------------------------------------*/
    /**
     * Get the location ID.
     *
     * @return string
     */
    public function get_location_id()
    {
    }
    /**
     * Get the location label.
     *
     * @return string
     */
    public function get_title()
    {
    }
    /**
     * Get the current hook if exists.
     *
     * @return mixed
     */
    public function get_current_hook()
    {
    }
    /**
     * Get hook data.
     *
     * @param string|null $hook Hook name. Defaults to the current hook.
     * @return mixed
     */
    public function get_hook_data($hook = \null)
    {
    }
    /**
     * Get the supported engine types for the current hook.
     *
     * @return array
     */
    public function get_current_supported_engine_types()
    {
    }
    /**
     * Get the supported actions.
     *
     * @param  string $context
     * @return array
     */
    public function get_hooks($context = 'edit')
    {
    }
    /**
     * Get the supported hooks by engine type.
     *
     * @param string $engine_type Engine type.
     * @return array
     */
    public function get_hooks_by_engine_type($engine_type)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Utilities.                                       */
    /*---------------------------------------------------*/
    /**
     * Indicates whether this location page could be served from a page cache.
     *
     * @return boolean
     */
    public function is_cacheable()
    {
    }
    /**
     * Check if the current location page is active.
     *
     * @return boolean
     */
    public function is_active()
    {
    }
    /**
     * Check if the current firing of a location hook belongs to this location.
     *
     * Template hooks fire for whatever is being rendered at the time, so a location may need to reject firings that come from elsewhere on the page.
     *
     * @since 4.4.2
     *
     * @return boolean
     */
    public function is_in_context()
    {
    }
    /**
     * Whether or not location's hooks are registered.
     *
     * @since 1.1.0
     *
     * @return boolean
     */
    public function is_loaded()
    {
    }
    /**
     * Get the source data.
     *
     * @param  WC_PRL_Deployment $deployment
     * @param  array             $args
     * @return array
     */
    public function get_source_data($deployment, $args = array())
    {
    }
    /**
     * Fill data into hooks array.
     *
     * @return void
     */
    private function parse_and_fill_hook_data()
    {
    }
    /**
     * Generate classes for the block title.
     *
     * @since  1.4.12
     * @return int
     */
    public function get_max_visible_deployments()
    {
    }
}
/**
 * Abstract meta-box handler.
 *
 * @class    WC_PRL_Meta_Box
 * @version  4.4.4
 */
abstract class WC_PRL_Meta_Box
{
    /**
     * Meta box id.
     *
     * @var string
     */
    protected $id;
    /**
     * Meta box context.
     *
     * @var string
     */
    protected $context = 'normal';
    /**
     * Meta box priority.
     *
     * @var string
     */
    protected $priority = 'default';
    /**
     * Meta box list of supported screen IDs.
     *
     * @var string[]
     */
    protected $screens = array();
    /**
     * Meta box list of additional postbox classes.
     *
     * @var string[]
     */
    protected $postbox_classes = array('wc-prl', 'woocommerce');
    /**
     * Current post where the meta box appears.
     *
     * @var WP_Post
     */
    protected $post;
    /**
     * Meta box constructor.
     */
    public function __construct()
    {
    }
    /**
     * Returns the meta box title.
     *
     * @return string
     */
    abstract public function get_title();
    /**
     * Returns the meta box ID.
     *
     * @return string
     */
    public function get_id()
    {
    }
    /**
     * Returns the meta box ID, with underscores instead of dashes.
     *
     * @return string
     */
    protected function get_id_underscored()
    {
    }
    /**
     * Returns the nonce name for the current meta box.
     *
     * @return string
     */
    protected function get_nonce_name()
    {
    }
    /**
     * Returns the nonce action for the current meta box.
     *
     * @return string
     */
    protected function get_nonce_action()
    {
    }
    /**
     * Returns the post object.
     *
     * @return WP_Post
     */
    public function get_post()
    {
    }
    /**
     * Enqueues scripts & styles for the meta box, if conditions are met.
     *
     * @return void
     */
    public function maybe_enqueue_scripts_and_styles()
    {
    }
    /**
     * Enqueues scripts and styles for the meta box.
     *
     * @return void
     */
    public function enqueue_scripts_and_styles()
    {
    }
    /**
     * Adds the meta box to the supported screen(s).
     *
     * @return void
     */
    public function add_meta_box()
    {
    }
    /**
     * Adds a CSS class to the meta box.
     *
     * @param  array $classes
     * @return array
     */
    public function postbox_classes($classes)
    {
    }
    /**
     * Outputs the basic meta box contents.
     *
     * @return void
     */
    public function do_output()
    {
    }
    /**
     * Outputs meta box contents.
     *
     * @param WP_Post $post
     * @return void
     */
    abstract public function output(\WP_Post $post);
    /**
     * Processes and saves meta box data
     *
     * @param int     $post_id
     * @param WP_Post $post
     * @return void
     */
    public function save_post($post_id, \WP_Post $post)
    {
    }
}
/**
 * Product Recommendations WooCommerce Admin Analytics.
 *
 * @version 4.4.4
 */
class WC_PRL_Admin_Analytics
{
    /**
     * Init.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Setup Analytics.
     *
     * @return void
     */
    public static function setup()
    {
    }
    /**
     * Injects custom script data into `getSetting(wc_admin)`.
     *
     * @param mixed $settings Shared settings.
     * @return array
     */
    public static function add_component_settings($settings)
    {
    }
    /**
     * Includes.
     *
     * @return void
     */
    protected static function includes()
    {
    }
    /**
     * Add "Recommendations" as a Analytics submenu item.
     *
     * @param  array $report_pages  Report page menu items.
     * @return array
     */
    public static function add_report_menu_item($report_pages)
    {
    }
    /**
     * Register analytics JS.
     *
     * @return void
     */
    public static function register_script()
    {
    }
    /**
     * Adds fields so that we can store user preferences for the columns to display on a report.
     *
     * @param array $user_data_fields User data fields.
     * @return array
     */
    public static function add_user_data_fields($user_data_fields)
    {
    }
    /**
     * Analytics includes and register REST controllers.
     *
     * @param  array $controllers
     * @return array
     */
    public static function add_rest_api_controllers($controllers)
    {
    }
    /**
     * Register Analytics data stores.
     *
     * @param  array $stores
     * @return array
     */
    public static function register_data_stores($stores)
    {
    }
    /**
     * Whether or not the new Analytics reports are enabled.
     *
     * @return bool
     */
    public static function is_enabled()
    {
    }
}
/**
 * WC_PRL_Analytics_Data_Store class.
 *
 * @version 4.4.4
 */
abstract class WC_PRL_Analytics_Data_Store extends \Automattic\WooCommerce\Admin\API\Reports\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
{
    /**
     * Date field name.
     *
     * @var string
     */
    protected $date_field_name = 'date';
    /**
     * Wrapper around DataStore::get_cached_data().
     *
     * @param string $cache_key Cache key.
     * @return mixed
     */
    protected function get_cached_data($cache_key)
    {
    }
    /**
     * Wrapper around DataStore::set_cached_data().
     *
     * @param string $cache_key Cache key.
     * @param mixed  $value     New value.
     * @return bool
     */
    protected function set_cached_data($cache_key, $value)
    {
    }
    /**
     * Fills WHERE clause of SQL request with date-related constraints.
     *
     * @param array  $query_args Parameters supplied by the user.
     * @param string $table_name Name of the db table relevant for the date constraint.
     * @return void
     */
    protected function add_time_period_sql_params($query_args, $table_name)
    {
    }
    /**
     * Fills FROM and WHERE clauses of SQL request for 'Intervals' section of data response based on user supplied parameters.
     *
     * @param array  $query_args Parameters supplied by the user.
     * @param string $table_name Name of the db table relevant for the date constraint.
     * @return void
     */
    protected function add_intervals_sql_params($query_args, $table_name)
    {
    }
    /**
     * @override TimeInterval::db_datetime_format().
     *
     * Returns date format to be used as grouping clause in SQL.
     *
     * @param string $time_interval Time interval.
     * @param string $table_name Name of the db table relevant for the date constraint.
     * @return mixed
     */
    public function db_datetime_format($time_interval, $table_name)
    {
    }
    /**
     * Updates the LIMIT query part for Intervals query of the report.
     *
     * If there are less records in the database than time intervals, then we need to remap offset in SQL query
     * to fetch correct records.
     *
     * @param array  $query_args Query arguments.
     * @param int    $db_interval_count Database interval count.
     * @param int    $expected_interval_count Expected interval count on the output.
     * @param string $table_name Name of the db table relevant for the date constraint.
     * @return void
     */
    protected function update_intervals_sql_params(&$query_args, $db_interval_count, $expected_interval_count, $table_name)
    {
    }
    /**
     * Updates start and end dates for intervals so that they represent intervals' borders, not times when data in db were recorded.
     *
     * E.g. if there are db records for only Tuesday and Thursday this week, the actual week interval is [Mon, Sun], not [Tue, Thu].
     *
     * @param DateTime $start_datetime Start date.
     * @param DateTime $end_datetime End date.
     * @param string   $time_interval Time interval, e.g. day, week, month.
     * @param array    $intervals Array of intervals extracted from SQL db.
     * @return void
     */
    protected function update_interval_boundary_dates($start_datetime, $end_datetime, $time_interval, &$intervals)
    {
    }
    /**
     * Parse date value to be used in SQL queries.
     *
     * @param  mixed $date
     * @return mixed
     */
    public function parse_date_for_sql($date)
    {
    }
}
/**
 * WC_PRL_Analytics_Revenue_Data_Store class.
 *
 * @version 4.4.4
 */
class WC_PRL_Analytics_Revenue_Data_Store extends \WC_PRL_Analytics_Data_Store
{
    /**
     * Table used to get the data.
     *
     * @var string
     */
    protected static $table_name = 'woocommerce_prl_tracking_conversions';
    /**
     * Cache identifier.
     *
     * @var string
     */
    protected $cache_key = 'recommendations_revenue';
    /**
     * Date field name.
     *
     * @var string
     */
    protected $date_field_name = 'ordered_time';
    /**
     * Mapping columns to data type to return correct response types.
     *
     * @var array<string, string>
     */
    protected $column_types = array('products_count' => 'intval', 'items_sold' => 'intval', 'orders_count' => 'intval', 'net_sales' => 'floatval', 'gross_sales' => 'floatval');
    /**
     * Extended giftcard attributes to include in the data. @TODO: remove this.
     *
     * @var array
     */
    protected $extended_attributes = array();
    /**
     * Data store context used to pass to filters.
     *
     * @var string
     */
    protected $context = 'recommendations_revenue';
    /**
     * Assign report columns once full table name has been assigned.
     *
     * @return void
     */
    protected function assign_report_columns()
    {
    }
    /**
     * Set up all the hooks for maintaining and populating table data.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Maps ordering specified by the user to columns in the database/fields in the data.
     *
     * @param string $order_by Sorting criterion.
     * @return string
     */
    protected function normalize_order_by($order_by)
    {
    }
    /**
     * Updates the database query with parameters used for Products Stats report: categories and order status.
     *
     * @param  array $query_args
     * @return void
     */
    protected function update_sql_query_params($query_args)
    {
    }
    /**
     * Returns comma separated hashes of allowed locations, based on query arguments from the user.
     *
     * @param array $query_args Parameters supplied by the user.
     * @return string|false
     */
    protected function get_included_locations($query_args)
    {
    }
    /**
     * Returns comma separated hashes of excluded locations, based on query arguments from the user.
     *
     * @param array $query_args Parameters supplied by the user.
     * @return string|false
     */
    protected function get_excluded_locations($query_args)
    {
    }
    /**
     * Returns the report data based on parameters supplied by the user.
     *
     * @param array $query_args  Query parameters.
     * @return stdClass|array|WP_Error Data.
     */
    public function get_data($query_args)
    {
    }
    /**
     * Initialize query objects.
     *
     * @return void
     */
    protected function initialize_queries()
    {
    }
}
/**
 * WC_PRL_Analytics_Revenue_Query class.
 *
 * @version 4.4.2
 */
class WC_PRL_Analytics_Revenue_Query extends \Automattic\WooCommerce\Admin\API\Reports\GenericQuery
{
    /**
     * Valid fields for report.
     *
     * @return array
     */
    protected function get_default_query_vars()
    {
    }
    /**
     * Get gift card data based on the current query vars.
     *
     * @return stdClass|WP_Error
     */
    public function get_data()
    {
    }
}
/**
 * WC_PRL_Analytics_Revenue_REST_Controller class.
 *
 * @version  4.4.4
 */
class WC_PRL_Analytics_Revenue_REST_Controller extends \WC_REST_Reports_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc-analytics';
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'reports/recommendations-revenue/stats';
    /**
     * Date field name.
     *
     * @var string
     */
    protected $date_field_name = 'ordered_time';
    /**
     * Mapping between external parameter name and name used in query class.
     *
     * @var array<string, string>
     */
    protected $param_mapping = array('products' => 'product_includes');
    /**
     * Get all items.
     *
     * @param WP_REST_Request $request Request data.
     * @return WP_REST_Response|WP_Error
     */
    public function get_items($request)
    {
    }
    /**
     * Prepare a report object for serialization.
     *
     * @param array|stdClass  $report  Report data.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response
     */
    public function prepare_item_for_response($report, $request)
    {
    }
    /**
     * Get the Report's schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
    }
    /**
     * Set the default results to 0 if API returns an empty array
     *
     * @param Mixed $results Report data.
     * @return object
     */
    public function set_default_report_data($results)
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
 * Admin AJAX meta-box handlers.
 *
 * @class    WC_PRL_Admin_Ajax
 * @version  4.4.4
 */
class WC_PRL_Admin_Ajax
{
    /**
     * Hook in.
     *
     * @return void
     */
    public static function init()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Deployments.
    |--------------------------------------------------------------------------
    */
    /**
     * Handles adding deployments via Ajax.
     *
     * @return void
     */
    public static function add_deployment()
    {
    }
    /**
     * Handles toggling deployments via Ajax.
     *
     * @return void
     */
    public static function toggle_deployment()
    {
    }
    /**
     * Handles deployment deletion via Ajax.
     *
     * @return void
     */
    public static function handle_delete()
    {
    }
    /**
     * Regenerates deployment products.
     * This is used when the user wants to regenerate the products for a deployment.
     *
     * @return void
     */
    public static function regenerate_deployment_products()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Engines.
    |--------------------------------------------------------------------------
    */
    /**
     * Invalidates an engine's cached products so that they are regenerated.
     *
     * @return void
     */
    public static function regenerate_engine_products()
    {
    }
    /**
     * Search for product variations and return json.
     *
     * @see WC_AJAX::json_search_engines()
     * @return void
     */
    public static function search_engines()
    {
    }
    /**
     * Search for engines and echo json.
     *
     * @param string $term (default: '')
     * @param array  $type
     * @return void
     */
    public static function json_search_engines($term = '', $type = array())
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Terms.
    |--------------------------------------------------------------------------
    */
    /**
     * Get terms for a given attribute slug.
     *
     * @since  1.3.0
     *
     * @return void
     */
    public static function get_attribute_terms()
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
     * @return void
     */
    public static function dismiss_notice()
    {
    }
    /**
     * Checks if loopback requests work.
     *
     * @since  1.3.0
     *
     * @return void
     */
    public static function ajax_loopback_test()
    {
    }
}
/**
 * WC_PRL_Admin_Deploy Class.
 *
 * @class    WC_PRL_Admin_Deploy
 * @version  4.4.4
 */
class WC_PRL_Admin_Deploy
{
    /**
     * Page home URL.
     *
     * @const PAGE_URL
     */
    const PAGE_URL = 'admin.php?page=prl_locations&section=deploy';
    /**
     * Save the settings.
     *
     * @return false
     */
    public static function save()
    {
    }
    /**
     * Deployments page.
     *
     * Handles the display of the pages list and the deployments accordion.
     *
     * @return void
     */
    public static function output()
    {
    }
}
/**
 * WC_Admin_Locations Class.
 *
 * @class    WC_PRL_Admin_Generator_Queue
 * @version  4.4.4
 */
class WC_PRL_Admin_Generator_Queue
{
    /**
     * Page home URL.
     *
     * @const PAGE_URL
     */
    const PAGE_URL = 'admin.php?page=wc-status&tab=recommendations_queue';
    /**
     * Deployments page.
     *
     * Handles the display of the pages list and the deployments accordion.
     *
     * @return void
     */
    public static function output()
    {
    }
    /**
     * Reports the status of the queue at any point.
     *
     * @return void
     */
    public static function render_queue_status_notice()
    {
    }
    /**
     * Handles page's actions.
     *
     * @return void
     */
    private static function handle_actions()
    {
    }
}
/**
 * WC_PRL_Admin_Hooks Class.
 *
 * @class    WC_PRL_Admin_Hooks
 * @version  4.4.4
 */
class WC_PRL_Admin_Hooks
{
    /**
     * Page home URL.
     *
     * @const PAGE_URL
     */
    const PAGE_URL = 'admin.php?page=prl_locations&section=hooks';
    /**
     * Save the settings.
     *
     * @return false
     */
    public static function save()
    {
    }
    /**
     * Hooks page.
     *
     * Handles the display of the hooks tabs.
     *
     * @return void
     */
    public static function output()
    {
    }
}
/**
 * WC_Admin_Locations Class.
 *
 * @class    WC_PRL_Admin_Locations
 * @version  4.4.4
 */
class WC_PRL_Admin_Locations
{
    /**
     * Page home URL.
     *
     * @const PAGE_URL
     */
    const PAGE_URL = 'admin.php?page=prl_locations';
    /**
     * Save the settings.
     *
     * @return void
     */
    public static function save()
    {
    }
    /**
     * Deployments page.
     *
     * Handles the display of the pages list and the deployments accordion.
     *
     * @return void
     */
    public static function output()
    {
    }
    /**
     * Deletes a deployment requested from the locations screen.
     *
     * @return void
     */
    private static function handle_delete()
    {
    }
}
/**
 * Setup PRL menus in WP admin.
 *
 * @class    WC_PRL_Admin_Menus
 * @version  4.4.4
 */
class WC_PRL_Admin_Menus
{
    /**
     * The CSS classes used to hide the submenu items in navigation.
     *
     * @var string
     */
    protected static $HIDE_CSS_CLASS = 'hide-if-js';
    /**
     * Setup.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Admin hooks.
     *
     * @return void
     */
    public static function add_hooks()
    {
    }
    /**
     * Configure giftcard tabs.
     *
     * @param  array $pages
     * @return array
     */
    public static function wc_admin_navigation_page_tab_sections($pages)
    {
    }
    /**
     * Configure giftcard page sections.
     *
     * @param  array $pages
     * @return array
     */
    public static function wc_admin_navigation_pages_with_tabs($pages)
    {
    }
    /**
     * Add screen id to WooCommerce.
     *
     * @since 3.0.0
     * @param  array $screen_ids  List of screen IDs.
     * @return array
     */
    public static function wc_admin_navigation_screen_ids($screen_ids)
    {
    }
    /**
     * Connect pages with navigation bar.
     *
     * @return void
     */
    public static function wc_admin_connect_prl_pages()
    {
    }
    /**
     * Renders tabs on our custom post types pages.
     *
     * @internal
     *
     * @since 1.0.0
     * @return void
     */
    public static function render_tabs()
    {
    }
    /**
     * Returns the current admin tab.
     *
     * @param  string $current_tab
     * @return string
     */
    public static function get_current_tab($current_tab = 'performance')
    {
    }
    /**
     * Fix the active menu item when editing/creating an Engine.
     *
     * @return mixed
     */
    public static function prl_fix_menu_highlight()
    {
    }
    /**
     * Add menu items.
     *
     * @return void
     */
    public static function prl_menu()
    {
    }
    /**
     * Add Recommendations Queue tab in WooCommerce status page.
     *
     * @since 3.0.0
     * @param  array $tabs
     * @return array
     */
    public static function add_generator_queue_page_tab($tabs)
    {
    }
    /**
     * Init admin locations page. Setups the `save` feature and adds messages.
     *
     * @return void
     */
    public static function locations_page_init()
    {
    }
    /**
     * Render "Performance" page.
     *
     * @return void
     */
    public static function performance_page()
    {
    }
    /**
     * Render "Locations" page.
     *
     * @return void
     */
    public static function locations_page()
    {
    }
    /**
     * Render "Generator Queue" page.
     *
     * @return void
     */
    public static function generator_queue_page()
    {
    }
    /**
     * Render "Deploy" page.
     *
     * @return void
     */
    public static function deploy_page()
    {
    }
    /**
     * Render "Hooks" page.
     *
     * @return void
     */
    public static function hooks_page()
    {
    }
    /**
     * Exclude menu items from WooCommerce menu migration.
     *
     * @since  1.4.11
     *
     * @param  array $excluded_items
     * @return array
     */
    public static function exclude_navigation_items($excluded_items)
    {
    }
    /**
     * Hide the submenu page based on slug and return the item that was hidden.
     *
     * @since 2.4.0
     *
     * Instead of actually removing the submenu item, a safer approach is to hide it and filter it in the API response.
     * In this manner we'll avoid breaking third-party plugins depending on items that no longer exist.
     *
     * @param string $menu_slug The parent menu slug.
     * @param string $submenu_slug The submenu slug that should be hidden.
     * @return false|array
     */
    protected static function hide_submenu_page($menu_slug, $submenu_slug)
    {
    }
    /**
     * Apply the hide-if-js CSS class to a submenu item.
     *
     * @since 2.4.0
     *
     * @param int    $index The position of a submenu item in the submenu array.
     * @param string $parent_slug The parent slug.
     * @param array  $item The submenu item.
     * @return void
     */
    protected static function hide_submenu_element($index, $parent_slug, $item)
    {
    }
}
/**
 * Admin notices handling.
 *
 * @class    WC_PRL_Admin_Notices
 * @version  4.4.4
 */
class WC_PRL_Admin_Notices
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
    private static $maintenance_notice_types = array('update' => 'update_notice', 'welcome' => 'welcome_notice', 'loopback' => 'loopback_notice', 'queue' => 'queue_notice', 'page_cache' => 'page_cache_notice', 'block_theme' => 'block_theme_notice');
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
     * Checks if a notice that belongs to a the specified uniqueness context already exists.
     *
     * @since  1.3.0
     *
     * @param  string $context
     * @return bool
     */
    private static function unique_notice_exists($context)
    {
    }
    /**
     * Get a setting for a notice type.
     *
     * @since  1.3.0
     *
     * @param  string $notice_name
     * @param  string $key
     * @param  mixed  $default
     * @return mixed
     */
    public static function get_notice_option($notice_name, $key, $default = \null)
    {
    }
    /**
     * Set a setting for a notice type.
     *
     * @since  1.3.0
     *
     * @param  string $notice_name
     * @param  string $key
     * @param  mixed  $value
     * @return void
     */
    public static function set_notice_option($notice_name, $key, $value)
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
     * Save notices to the DB.
     *
     * @return void
     */
    public static function save_notices()
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
     * Add 'welcome' notice.
     *
     * @return void
     */
    public static function welcome_notice()
    {
    }
    /**
     * Add 'block theme' notice.
     *
     * @return void
     */
    public static function block_theme_notice()
    {
    }
    /**
     * Add 'loopback' notice.
     *
     * @since  1.3.0
     * @return void
     */
    public static function loopback_notice()
    {
    }
    /**
     * Add 'page_cache' notice.
     *
     * @return void
     */
    public static function page_cache_notice()
    {
    }
    /**
     * Display notice if the WC queueing system fails.
     *
     * @since  1.3.3
     * @return void
     */
    public static function queue_notice()
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
     * Dismisses a notice. Dismissible maintenance notices cannot be dismissed forever.
     *
     * @param  string $notice
     * @return bool
     */
    public static function dismiss_notice($notice)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Notes for the WC Admin Inbox.
    |--------------------------------------------------------------------------
    */
    /**
     * Add note.
     *
     * @since  1.4.0
     *
     * @param  array|string $args
     * @return void
     */
    public static function add_note($args)
    {
    }
    /**
     * Get note data.
     *
     * @since 1.4.0
     *
     * @param  string $name
     * @return array|void
     */
    public static function get_note_args($name)
    {
    }
}
/**
 * WC_PRL_Admin_Performance Class.
 *
 * @class    WC_PRL_Admin_Performance
 * @version  4.4.4
 */
class WC_PRL_Admin_Performance
{
    /**
     * Page home URL.
     *
     * @const PAGE_URL
     */
    const PAGE_URL = 'admin.php?page=prl_performance';
    /**
     * Performance page.
     *
     * Handles the display of performance page.
     *
     * @return void
     */
    public static function output()
    {
    }
    /**
     * Get the current range and calculate the start and end dates.
     *
     * @return array{prev_start_date: int|false, prev_end_date: int|false, start_date: int|false, end_date: int|false, chart_interval: int}
     */
    public static function calculate_current_range()
    {
    }
    /**
     * Prepares data for the report. Bucketing into time periods.
     */
    public static function prepare($data, $date_key, $data_key, $interval, $start_date, $group_by)
    {
    }
    /**
     * Prints the diff between 2 values in HTML format.
     *
     * @param  float $current
     * @param  float $previous
     * @return void
     */
    private static function print_difference($current, $previous)
    {
    }
    /**
     * Get a product's object.
     *
     * @param  int $product_id Product ID.
     * @return string
     */
    private static function get_product($product_id)
    {
    }
    /**
     * Get a WCA analytics link by arguments.
     *
     * @param  array $args Link query arguments.
     * @return string
     */
    private static function get_analytics_link($args)
    {
    }
    /**
     * Get a locations's object by hash.
     *
     * @param  string $hash Location hash.
     * @return string
     */
    private static function get_location_by_hash($hash)
    {
    }
}
/**
 * Product Recommendations Admin Post Types Class.
 *
 * Registers custom post types admin settings.
 *
 * @class    WC_PRL_Admin_Post_Types
 * @version  4.4.4
 */
class WC_PRL_Admin_Post_Types
{
    /**
     * Hacky prop to track 'Publish' post box title changes.
     *
     * @var boolean
     */
    private static $post_box_title_changed = \false;
    /**
     * Hook in methods.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Setup post type screen.
     *
     * @param mixed $current_screen Current screen.
     * @return void
     */
    public static function setup_screen($current_screen)
    {
    }
    /**
     * Print submit box extra links.
     *
     * @since 3.0.0
     * @return void
     */
    public static function post_submitbox_start()
    {
    }
    /**
     * Handle clear caches for every deployment using the same engine.
     *
     * @param int $engine_id
     * @return void
     * @since 3.0.0
     */
    public static function handle_clear_caches_action($engine_id)
    {
    }
    /**
     * Print extra in the Publish metabox.
     *
     * @return void
     */
    public static function engine_extra_publish_options()
    {
    }
    /**
     * Change action button 'Publish' to 'Create' and rename post box title to 'Actions'.
     *
     * @param  string $translation
     * @param  string $text
     * @return string
     */
    public static function translate_publish_engine_status($translation, $text)
    {
    }
    /**
     * Change title boxes in admin.
     *
     * @param  string  $text Text to shown.
     * @param  WP_Post $post Current post object.
     * @return string
     */
    public static function enter_title_here($text, $post)
    {
    }
    /**
     * Specify custom action messages.
     *
     * @param  array $messages Existing post update messages.
     * @return array
     */
    public static function post_updated_messages($messages)
    {
    }
    /**
     * Specify custom bulk actions messages for different post types.
     *
     * @param  array $bulk_messages Array of messages.
     * @param  array $bulk_counts Array of how many objects were updated.
     * @return array
     */
    public static function bulk_post_updated_messages($bulk_messages, $bulk_counts)
    {
    }
    /**
     * Hide screen options for specific PRL admin screens.
     *
     * @param  bool $show_screen Whether to show the screen options tab.
     * @return bool Returns false to hide screen options, true to show them
     */
    public static function hide_screen_options($show_screen)
    {
    }
    /**
     * Engine body classes.
     *
     * @param mixed $classes Body classes.
     * @return string
     */
    public static function engine_body_classes($classes)
    {
    }
}
/**
 * Admin Class.
 *
 * Loads admin scripts, includes admin classes and adds admin hooks.
 *
 * @class    WC_PRL_Admin
 * @version  4.4.4
 */
class WC_PRL_Admin
{
    /**
     * Bundled selectSW library version.
     *
     * @var string
     */
    private static $bundled_selectsw_version = '1.2.3';
    /**
     * Setup Admin class.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Admin init.
     *
     * @return void
     */
    public static function admin_init()
    {
    }
    /**
     * Inclusions.
     *
     * @return void
     */
    protected static function includes()
    {
    }
    /**
     * Register own version of select2 library.
     *
     * @since 1.2.0
     * @return void
     */
    public static function maybe_register_selectsw()
    {
    }
    /**
     * Load own version of select2 library.
     *
     * @since 1.2.0
     * @return void
     */
    public static function maybe_load_selectsw()
    {
    }
    /**
     * Display notice when selectSW library is unsupported.
     *
     * @since 1.2.0
     * @return void
     */
    public static function maybe_display_selectsw_notice()
    {
    }
    /**
     * Whether to load own version of select2 library or not.
     *
     * @since 1.2.0
     *
     * @return boolean
     */
    private static function load_selectsw()
    {
    }
    /**
     * Include admin classes if on a PRL admin screen.
     *
     * @since 4.0.3
     *
     * @param  String $classes
     * @return String
     */
    public static function maybe_include_admin_body_class($classes)
    {
    }
    /**
     * Init meta-boxes.
     *
     * @return void
     */
    public static function init_meta_boxes()
    {
    }
    /**
     * Add a message in the WP Privacy Policy Guide page.
     *
     * @return void
     */
    public static function add_privacy_policy_guide_content()
    {
    }
    /**
     * Message to add in the WP Privacy Policy Guide page.
     *
     * @return string
     */
    protected static function get_privacy_policy_guide_message()
    {
    }
    /**
     * Admin scripts.
     *
     * @return void
     */
    public static function admin_resources()
    {
    }
    /**
     * Add a RPL screen ids.
     *
     * @param mixed $screens Screen IDs.
     * @return mixed
     */
    public static function add_wc_screens($screens)
    {
    }
    /**
     * Add 'Recommendations' tab to WooCommerce Settings tabs.
     *
     * @param  array $settings
     * @return array $settings
     */
    public static function add_settings_page($settings)
    {
    }
    /**
     * Adds status tool to re-schedule page cache test.
     *
     * @since  1.3.3
     *
     * @param  array $tools Status tools.
     * @return array
     */
    public static function add_page_cache_reschedule_tool($tools)
    {
    }
    /**
     * Rescedules page cache test.
     *
     * @since  1.3.3
     *
     * @return string|int
     */
    public static function reschedule_page_cache_test()
    {
    }
    /**
     * Adds status tool to clear the queue.
     *
     * @since  1.4.7
     *
     * @param  array $tools Status tools.
     * @return array
     */
    public static function add_clear_queue_tool($tools)
    {
    }
    /**
     * Clears the PRL queue.
     *
     * @since  1.4.7
     *
     * @return string|false
     */
    public static function clear_prl_queue()
    {
    }
}
/**
 * Adds a custom deployments list table.
 *
 * @class    WC_PRL_Deployments_List_Table
 * @version  4.4.4
 */
class WC_PRL_Deployments_List_Table extends \WP_List_Table
{
    /**
     * Page home URL.
     *
     * @const PAGE_URL
     */
    const PAGE_URL = 'admin.php?page=prl_locations';
    public function __construct()
    {
    }
    /**
     * This is a default column renderer
     *
     * @param $item - row (key, value array)
     * @param $column_name - string (key)
     * @return void
     */
    public function column_default($item, $column_name)
    {
    }
    /**
     * Handles the title column output.
     *
     * @param array $item
     * @return void
     */
    public function column_title($item)
    {
    }
    /**
     * Handles the checkbox column output.
     *
     * @param array $item
     * @return void
     */
    public function column_cb($item)
    {
    }
    /**
     * Handles the page column output.
     *
     * @param array $item
     * @return void
     */
    public function column_page($item)
    {
    }
    /**
     * Handles the location column output.
     *
     * @param array $item
     * @return void
     */
    public function column_location($item)
    {
    }
    /**
     * Handles the location column output.
     *
     * @param array $item
     * @return void
     */
    public function column_engine($item)
    {
    }
    /**
     * Handles the location column output.
     *
     * @param array $item
     * @return void
     */
    public function column_wc_actions($item)
    {
    }
    /**
     * Get a list of columns. The format is:
     * 'internal-name' => 'Title'
     */
    public function get_columns()
    {
    }
    public function get_sortable_columns()
    {
    }
    protected function get_bulk_actions()
    {
    }
    /**
     * Processes the bulk actions.
     *
     * @return void
     */
    private function process_bulk_action()
    {
    }
    /**
     * Prepares the list of items for displaying.
     *
     * @return void
     */
    public function prepare_items()
    {
    }
    /**
     * Message to be displayed when there are no items
     *
     * @return void
     */
    public function no_items()
    {
    }
}
/**
 * Modifies the custom's post type list table.
 *
 * @class    WC_PRL_Admin_List_Table_Engines
 * @version  4.4.4
 */
class WC_PRL_Admin_List_Table_Engines
{
    /**
     * Post type.
     *
     * @var string
     */
    private static $list_table_type = 'prl_engine';
    /**
     * Object being shown on the row.
     *
     * @var object|null
     */
    private static $engine = \null;
    /**
     * Hook in.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Remove Quick Edit action.
     *
     * @param  array   $actions
     * @param  WP_Post $post
     * @return array
     */
    public static function disable_quick_edit($actions, $post)
    {
    }
    /**
     * Remove Bulk actions.
     *
     * @param  array $actions
     * @return array
     */
    public static function disable_bulk_actions($actions)
    {
    }
    /**
     * Setup custom table columns.
     *
     * @param  array $columns
     * @return array
     */
    public static function engine_custom_columns($columns)
    {
    }
    /**
     * Define sortable table columns.
     *
     * @param  array $columns
     * @return array
     */
    public static function engine_sortable_columns($columns)
    {
    }
    /**
     * Pre-fetch any data for the row each column has access to it.
     *
     * @param int $post_id
     * @return void
     */
    private static function prepare_row_data($post_id)
    {
    }
    /**
     * Display custom column content.
     *
     * @param  string $column
     * @param  int    $post_id
     * @return void
     */
    public static function engine_render_columns($column, $post_id)
    {
    }
    /**
     * Add a quick filter for custom engine types taxonomy.
     *
     * @param string|null $post_type
     * @return void
     */
    public static function add_engine_types_filter($post_type)
    {
    }
    /**
     * Render column: type.
     *
     * @return void
     */
    public static function render_type_column()
    {
    }
    /**
     * Render column: deployments.
     *
     * @return void
     */
    public static function render_deployments_column()
    {
    }
    /**
     * Render column: wc_actions.
     *
     * @return void
     */
    public static function render_wc_actions_column()
    {
    }
}
/**
 * Adds a custom queue list table.
 *
 * @class    WC_PRL_Generator_Queue_List_Table
 * @version  4.4.4
 */
class WC_PRL_Generator_Queue_List_Table extends \WP_List_Table
{
    /**
     * Page home URL.
     *
     * @const PAGE_URL
     */
    const PAGE_URL = 'admin.php?page=wc-status&tab=recommendations_queue';
    public function __construct()
    {
    }
    /**
     * This is a default column renderer
     *
     * @param $item - row (key, value array)
     * @param $column_name - string (key)
     * @return void
     */
    public function column_default($item, $column_name)
    {
    }
    /**
     * Handles the title column output.
     *
     * @param array $item
     * @return void
     */
    public function column_deployment($item)
    {
    }
    /**
     * Handles the checkbox column output.
     *
     * @param array $item
     * @return void
     */
    public function column_cb($item)
    {
    }
    /**
     * Handles the location column output.
     *
     * @param array $item
     * @return void
     */
    public function column_wc_actions($item)
    {
    }
    /**
     * Handles the added time column output.
     *
     * @param array $item
     * @return void
     */
    public function column_added_time($item)
    {
    }
    /**
     * Get a list of columns. The format is:
     * 'internal-name' => 'Title'
     */
    public function get_columns()
    {
    }
    public function get_sortable_columns()
    {
    }
    protected function get_bulk_actions()
    {
    }
    /**
     * Processes the bulk actions.
     *
     * @return void
     */
    private function process_bulk_action()
    {
    }
    /**
     * Gets the total number of items.
     *
     * @return int|string|null
     */
    public function get_total_items_count()
    {
    }
    /**
     * Prepares the list of items for displaying.
     *
     * @return void
     */
    public function prepare_items()
    {
    }
    /**
     * Message to be displayed when there are no items
     *
     * @return void
     */
    public function no_items()
    {
    }
}
/**
 * Adds a custom queue list table.
 *
 * @class    WC_PRL_Generator_Stale_Queue_List_Table
 * @version  4.4.4
 */
class WC_PRL_Generator_Stale_Queue_List_Table extends \WC_PRL_Generator_Queue_List_Table
{
    /**
     * Page home URL.
     *
     * @const PAGE_URL
     */
    const PAGE_URL = 'admin.php?page=prl_generator_queue';
    public function __construct()
    {
    }
    /**
     * Handles the title column output.
     *
     * @param array $item
     * @return void
     */
    public function column_deployment($item)
    {
    }
    public function get_columns()
    {
    }
    public function get_sortable_columns()
    {
    }
    protected function get_bulk_actions()
    {
    }
    /**
     * Prepares the list of items for displaying.
     *
     * @return void
     */
    public function prepare_items()
    {
    }
}
/**
 * Engine details meta-box.
 *
 * @class    WC_PRL_Meta_Box_Engine_Configuration
 * @version  4.4.4
 */
class WC_PRL_Meta_Box_Engine_Configuration extends \WC_PRL_Meta_Box
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Adds a notice to deploy an engine, if not deployed already.
     *
     * @return void
     */
    public function maybe_add_non_deployed_notice()
    {
    }
    /**
     * Returns the meta box title.
     *
     * @return string
     */
    public function get_title()
    {
    }
    /**
     * Displays the engine details meta box.
     *
     * @param WP_Post $post
     * @return void
     */
    public function output(\WP_Post $post)
    {
    }
    /**
     * Handles the request data.
     *
     * @param int     $post_id
     * @param WP_Post $post
     * @return void
     */
    public function update($post_id, $post)
    {
    }
}
/**
 * WooCommerce Product Recommendations Settings.
 *
 * @class    WC_PRL_Settings
 * @version  2.0.0
 */
class WC_PRL_Settings extends \WC_Settings_Page
{
    /**
     * Constructor.
     */
    public function __construct()
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
}
/**
 * Admin Status Report Class.
 *
 * @class    WC_PRL_Admin_Status
 * @version  4.4.4
 */
class WC_PRL_Admin_Status
{
    /**
     * Setup Admin class.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Add PRL debug data in the system status.
     *
     * @return void
     */
    public static function render_system_status_items()
    {
    }
}
/**
 * WC_PRL_Amplifier_Conversion_Rate class for amplifying products based on their price.
 *
 * @class    WC_PRL_Amplifier_Conversion_Rate
 * @version  4.4.4
 */
class WC_PRL_Amplifier_Conversion_Rate extends \WC_PRL_Amplifier
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Apply the amplifier to the query args array.
     *
     * @param  array             $query_args
     * @param  WC_PRL_Deployment $deployment
     * @param  array             $data
     * @return array
     */
    public function amp($query_args, $deployment, $data)
    {
    }
    /**
     * Alters the raw query in order to add conversion rate order support.
     *
     * @param  array $args
     * @return array
     */
    public function add_order_clauses($args)
    {
    }
    /**
     * Removes any global amp settings.
     *
     * @return void
     */
    public function remove_amp()
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param  string|null $post_name
     * @param  int         $amplifier_index
     * @param  array       $amplifier_data
     * @return void
     */
    public function get_admin_fields_html($post_name, $amplifier_index, $amplifier_data)
    {
    }
}
/**
 * WC_PRL_Amplifier_Frequently_Bought_Together class for amplifying products based on their price.
 *
 * @class    WC_PRL_Amplifier_Frequently_Bought_Together
 * @version  4.4.4
 */
class WC_PRL_Amplifier_Frequently_Bought_Together extends \WC_PRL_Amplifier
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Apply the amplifier to the query args array.
     *
     * @param  array             $query_args
     * @param  WC_PRL_Deployment $deployment
     * @param  array             $data
     * @return array
     */
    public function amp($query_args, $deployment, $data)
    {
    }
    /**
     * Alters the raw query in order to create divisions for significant terms.
     *
     * @param  array $args
     * @return array
     */
    public function add_order_clauses($args)
    {
    }
    /**
     * Removes any global amp settings.
     *
     * @return void
     */
    public function remove_amp()
    {
    }
    /**
     * Get amplifiers substeps count.
     *
     * @return int
     */
    public function get_steps_count()
    {
    }
    /**
     * Run a step.
     * Hint: Keys in $args array represent the return values of each step (non-zero index).
     *
     * @param  int                     $step_index  Current step to run.
     * @param  WC_PRL_Deployment|array $source      The deployment object or an array of source data.
     * @param  array                   $args        Includes a set of all previous steps return values.
     * @return mixed
     */
    public function run_step($step_index, $source, $args = array())
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param  string|null $post_name
     * @param  int         $amplifier_index
     * @param  array       $amplifier_data
     * @return void
     */
    public function get_admin_fields_html($post_name, $amplifier_index, $amplifier_data)
    {
    }
}
/**
 * WC_PRL_Amplifier_Freshness class for amplifying products based on their freshness.
 *
 * @class    WC_PRL_Amplifier_Freshness
 * @version  4.4.4
 */
class WC_PRL_Amplifier_Freshness extends \WC_PRL_Amplifier
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Apply the amplifier to the query args array.
     *
     * @param  array             $query_args
     * @param  WC_PRL_Deployment $deployment
     * @param  array             $data
     * @return array
     */
    public function amp($query_args, $deployment, $data)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param  string|null $post_name
     * @param  int         $amplifier_index
     * @param  array       $amplifier_data
     * @return void
     */
    public function get_admin_fields_html($post_name, $amplifier_index, $amplifier_data)
    {
    }
}
/**
 * WC_PRL_Amplifier_Others_Also_Bought class for amplifying products based on their price.
 *
 * @class    WC_PRL_Amplifier_Others_Also_Bought
 * @version  4.4.4
 */
class WC_PRL_Amplifier_Others_Also_Bought extends \WC_PRL_Amplifier
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Apply the amplifier to the query args array.
     *
     * @param  array             $query_args
     * @param  WC_PRL_Deployment $deployment
     * @param  array             $data
     * @return array
     */
    public function amp($query_args, $deployment, $data)
    {
    }
    /**
     * Alters the raw query in order to create divisions for significant terms.
     *
     * @param  array $args
     * @return array
     */
    public function add_order_clauses($args)
    {
    }
    /**
     * Removes any global amp settings.
     *
     * @return void
     */
    public function remove_amp()
    {
    }
    /**
     * Get amplifiers substeps count.
     *
     * @return int
     */
    public function get_steps_count()
    {
    }
    /**
     * Run a step.
     * Hint: Keys in $args array represent the return values of each step (non-zero index).
     *
     * @param  int                     $step_index  Current step to run.
     * @param  WC_PRL_Deployment|array $source      The deployment object or an array of source data.
     * @param  array                   $args        Includes a set of all previous steps return values.
     * @return mixed
     */
    public function run_step($step_index, $source, $args = array())
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param  string|null $post_name
     * @param  int         $amplifier_index
     * @param  array       $amplifier_data
     * @return void
     */
    public function get_admin_fields_html($post_name, $amplifier_index, $amplifier_data)
    {
    }
}
/**
 * WC_PRL_Amplifier_Popularity class for amplifying products based on their order number in a given time span.
 *
 * @class    WC_PRL_Amplifier_Popularity
 * @version  4.4.4
 */
class WC_PRL_Amplifier_Popularity extends \WC_PRL_Amplifier
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Apply the amplifier to the query args array.
     *
     * @param  array             $query_args
     * @param  WC_PRL_Deployment $deployment
     * @param  array             $data
     * @return array
     */
    public function amp($query_args, $deployment, $data)
    {
    }
    /**
     * Alters the raw query in order to add popularity order support.
     *
     * @param  array $args
     * @return array
     */
    public function add_order_clauses($args)
    {
    }
    /**
     * Get all time-spans available for this amp.
     *
     * @return array
     */
    public function get_amplifier_values()
    {
    }
    /**
     * Removes any global amp settings.
     *
     * @return void
     */
    public function remove_amp()
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param  string|null $post_name
     * @param  int         $amplifier_index
     * @param  array       $amplifier_data
     * @return void
     */
    public function get_admin_fields_html($post_name, $amplifier_index, $amplifier_data)
    {
    }
}
/**
 * WC_PRL_Amplifier_Price class for amplifying products based on their price.
 *
 * @class    WC_PRL_Amplifier_Price
 * @version  4.4.4
 */
class WC_PRL_Amplifier_Price extends \WC_PRL_Amplifier
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Apply the amplifier to the query args array.
     *
     * @param  array             $query_args
     * @param  WC_PRL_Deployment $deployment
     * @param  array             $data
     * @return array
     */
    public function amp($query_args, $deployment, $data)
    {
    }
    /**
     * Alters the raw query in order to add rating order support.
     *
     * @param  array $args
     * @return array
     */
    public function add_order_clauses($args)
    {
    }
    /**
     * Removes any global amp settings.
     *
     * @return void
     */
    public function remove_amp()
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param  string|null $post_name
     * @param  int         $amplifier_index
     * @param  array       $amplifier_data
     * @return void
     */
    public function get_admin_fields_html($post_name, $amplifier_index, $amplifier_data)
    {
    }
}
/**
 * WC_PRL_Amplifier_Random class for amplifying products based on their freshness.
 *
 * @class    WC_PRL_Amplifier_Random
 * @version  4.4.4
 */
class WC_PRL_Amplifier_Random extends \WC_PRL_Amplifier
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Apply the amplifier to the query args array.
     *
     * @param  array             $query_args
     * @param  WC_PRL_Deployment $deployment
     * @param  array             $data
     * @return array
     */
    public function amp($query_args, $deployment, $data)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param  string|null $post_name
     * @param  int         $amplifier_index
     * @param  array       $amplifier_data
     * @return void
     */
    public function get_admin_fields_html($post_name, $amplifier_index, $amplifier_data)
    {
    }
}
/**
 * WC_PRL_Amplifier_Rating class for amplifying products based on their price.
 *
 * @class    WC_PRL_Amplifier_Rating
 * @version  4.4.4
 */
class WC_PRL_Amplifier_Rating extends \WC_PRL_Amplifier
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Apply the amplifier to the query args array.
     *
     * @param  array             $query_args
     * @param  WC_PRL_Deployment $deployment
     * @param  array             $data
     * @return array
     */
    public function amp($query_args, $deployment, $data)
    {
    }
    /**
     * Alters the raw query in order to add rating order support.
     *
     * @param  array $args
     * @return array
     */
    public function add_order_clauses($args)
    {
    }
    /**
     * Removes any global amp settings.
     *
     * @return void
     */
    public function remove_amp()
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param  string|null $post_name
     * @param  int         $amplifier_index
     * @param  array       $amplifier_data
     * @return void
     */
    public function get_admin_fields_html($post_name, $amplifier_index, $amplifier_data)
    {
    }
}
/**
 * The REST controller for the Amplifier Products.
 *
 * @class    WC_PRL_Rest_Amplifier_Products_V1_Controller
 * @version  4.4.4
 */
class WC_PRL_Rest_Amplifier_Products_V1_Controller extends \WP_REST_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc-prl-amplifier-provider/v1';
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Register routes.
     *
     * @return void
     */
    public function register_routes()
    {
    }
    /**
     * Check on the cache status of a given request.
     * If the cache is not available or has expired data, it will schedule a new cache generation task.
     *
     * @see WC_PRL_AS_Generator::handle
     * @see WC_PRL_Amplifier_Generator_Queue::run_step
     *
     * Possible responses:
     * - AVAILABLE: The cache is available.
     * - IN_QUEUE: The cache is being generated.
     * - NOT_AVAILABLE: The cache is not available.
     *
     * @param WP_REST_Request $request Request.
     * @return WP_REST_Response|WP_Error
     */
    public function get_status($request)
    {
    }
    /**
     * Check permissions for the request.
     *
     * @param WP_REST_Request $request Request.
     * @return boolean|WP_Error
     */
    public function permissions_check($request)
    {
    }
}
/**
 * The REST controller.
 *
 * @class    WC_PRL_REST_API
 * @version  4.4.4
 */
class WC_PRL_REST_API
{
    /**
     * Setup.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Registers the REST API routes.
     *
     * @return void
     */
    public static function rest_api_init()
    {
    }
}
/**
 * Base for Product Collection blocks.
 *
 * @package  WooCommerce Product Recommendations
 *
 * @since    4.1.0
 * @version  4.4.4
 */
abstract class WC_PRL_Blocks_Product_Collection
{
    /**
     * The collection name (including namespace.)
     *
     * @var string
     */
    protected $collection_name;
    /**
     * Runtime cache for the WP_Query's query arguments.
     *
     * @var bool
     */
    private $should_render = \true;
    /**
     * Construct.
     */
    public function __construct()
    {
    }
    /**
     * Disable rendering of the block.
     *
     * @return void
     */
    protected function disable_rendering()
    {
    }
    /**
     * Prevent rendering empty results.
     *
     * @param string $block_content The block content about to be rendered.
     *
     * @return string
     */
    public function handle_product_collection_rendering($block_content)
    {
    }
    /**
     * Check if the Product Collection block is the current variation.
     *
     * @param WP_Block $block The block being rendered.
     * @return bool
     */
    protected function is_valid_block($block)
    {
    }
    /**
     * Check if the Product Collection block is the current variation.
     *
     * @param WP_REST_Request $request The request.
     * @return bool
     */
    protected function is_valid_block_request($request)
    {
    }
    /**
     * Parse the order from the block context.
     *
     * @param WP_Block $block The block being rendered.
     * @return WC_Order|false
     */
    protected function get_viewed_order($block)
    {
    }
    /**
     * Get the product IDs from the block.
     *
     * @param WP_Block $block The block being rendered.
     * @return WC_Product|false
     */
    protected function get_viewed_product($block)
    {
    }
}
/**
 * The "Frequently Bought Together" Collection Controller.
 *
 * @package  WooCommerce Product Recommendations
 *
 * @since    4.1.0
 * @version  4.4.4
 */
class WC_PRL_Blocks_Collection_Fequently_Bought_Together extends \WC_PRL_Blocks_Product_Collection
{
    /**
     * The collection name.
     *
     * @var string
     */
    protected $collection_name = 'woocommerce-product-recommendations/product-collection/frequently-bought-together';
    /**
     * Runtime cache for the products.
     */
    private $products = array();
    /**
     * Construct.
     */
    public function __construct()
    {
    }
    /**
     * Orders the query results by their position in the recommendations.
     *
     * @param mixed $args Query clauses.
     * @return mixed
     */
    public function add_order_clauses($args)
    {
    }
    /**
     * Filter the query in the front-end.
     *
     * @param array    $query The WordPress WP_Query arguments.
     * @param WP_Block $block The block being rendered.
     * @param int      $page  The page number.
     *
     * @return array The modified query.
     */
    public function handle_query_vars($query, $block, $page)
    {
    }
}
/**
 * The "Others Also Bought" Collection Controller.
 *
 * @package  WooCommerce Product Recommendations
 *
 * @since    4.1.0
 * @version  4.4.4
 */
class WC_PRL_Blocks_Collection_Others_Also_Bought extends \WC_PRL_Blocks_Product_Collection
{
    /**
     * The collection name.
     *
     * @var string
     */
    protected $collection_name = 'woocommerce-product-recommendations/product-collection/others-also-bought';
    /**
     * Runtime cache for the products.
     */
    private $products = array();
    /**
     * Construct.
     */
    public function __construct()
    {
    }
    /**
     * Orders the query results by their position in the recommendations.
     *
     * @param mixed $args Query clauses.
     * @return mixed
     */
    public function add_order_clauses($args)
    {
    }
    /**
     * Filter the query in the front-end.
     *
     * @param array    $query The WordPress WP_Query arguments.
     * @param WP_Block $block The block being rendered.
     * @param int      $page  The page number.
     *
     * @return array The modified query.
     */
    public function handle_query_vars($query, $block, $page)
    {
    }
}
/**
 * The "Recently Viewed Products" Collection Controller.
 *
 * @package  WooCommerce Product Recommendations
 *
 * @since    4.1.0
 * @version  4.4.3
 */
class WC_PRL_Blocks_Collection_Recently_Viewed extends \WC_PRL_Blocks_Product_Collection
{
    /**
     * The collection name.
     *
     * @var string
     */
    protected $collection_name = 'woocommerce-product-recommendations/product-collection/recently-viewed';
    /**
     * Construct.
     */
    public function __construct()
    {
    }
    /**
     * Inject cookie data into the query.
     *
     * @param array    $query The WordPress WP_Query arguments.
     * @param WP_Block $block The block being rendered.
     * @param int      $page  The page number.
     *
     * @return array The modified query.
     */
    public function handle_query_vars($query, $block, $page)
    {
    }
}
/**
 * The "Viewed but not Purchased Products" Collection Controller.
 *
 * @package  WooCommerce Product Recommendations
 *
 * @since    4.1.0
 * @version  4.4.2
 */
class WC_PRL_Blocks_Collection_Viewed_Not_Purchased extends \WC_PRL_Blocks_Product_Collection
{
    /**
     * The collection name.
     *
     * @var string
     */
    protected $collection_name = 'woocommerce-product-recommendations/product-collection/viewed-not-purchased';
    /**
     * Construct.
     */
    public function __construct()
    {
    }
    /**
     * Inject cookie data into the query.
     *
     * @param array    $query The WordPress WP_Query arguments.
     * @param WP_Block $block The block being rendered.
     * @param int      $page  The page number.
     *
     * @return array The modified query.
     */
    public function handle_query_vars($query, $block, $page)
    {
    }
}
/**
 * Class for handling blocks.
 *
 * @package  WooCommerce Product Recommendations
 * @since    4.1.0
 * @version  4.4.4
 */
class WC_PRL_Blocks
{
    /**
     * The single instance of the class.
     *
     * @var WC_PRL_Blocks|null
     */
    protected static $_instance = \null;
    /**
     * Main WC_PRL_Blocks instance. Ensures only one instance of WC_PRL_Blocks is loaded or can be loaded.
     *
     * @static
     * @return WC_PRL_Blocks
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
     * Construct.
     */
    private function __construct()
    {
    }
    /**
     * Include files.
     *
     * @return void
     */
    private function includes()
    {
    }
    /**
     * Init.
     *
     * @return void
     */
    public function init()
    {
    }
    /**
     * Enqueue block scripts.
     *
     * @return void
     */
    public function enqueue_block_editor_assets()
    {
    }
    /**
     * Register product collection types.
     *
     * @return void
     */
    public function register_product_collection_types()
    {
    }
}
/**
 * Generator Queue class.
 *
 * @class    WC_PRL_Background_Queue
 * @version  4.4.4
 */
abstract class WC_PRL_Background_Queue
{
    /**
     * How long a queue-save lock remains valid, in seconds.
     */
    private const QUEUE_SAVE_LOCK_TTL = 10.0;
    /**
     * The queue identifier.
     *
     * @var string
     */
    protected $identifier = '';
    /**
     * The queue prefix.
     *
     * @var string
     */
    protected $action = 'async_request';
    /**
     * The queue data.
     *
     * @var array
     */
    protected $data = array();
    /**
     * Start time of current process.
     *
     * (default value: 0)
     *
     * @var int
     */
    protected $start_time = 0;
    /**
     * Property to set when dispatching a single queue item.
     *
     * @var string
     */
    protected $run_for_key;
    /**
     * Max size of the queue. After that number, the system no longer saves the task request.
     *
     * @var int|null
     */
    protected $max_queue_allowed;
    /**
     * The queue batch size.
     *
     * @var int
     */
    protected $batch_size = 10;
    /**
     * Generate a key for the queue items.
     *
     * @param array $data Data.
     * @return string
     */
    abstract public function generate_key($data);
    /**
     * Run step.
     *
     * This is a recurring task that will be called by the action scheduler. It will be called on repeat until it returns false.
     *
     * @param array $data Data.
     * @return array|false
     */
    abstract protected function run_step($data);
    /**
     * Get job data.
     *
     * Parses the queue's runtime $data property into a format that the background job can accept in the run_step method.
     *
     * @param array $data Data.
     * @return array|false The job data. Return array should contain the 'id' key to used as the source ID of each queue item. It can be a Product ID or a Deployment ID.
     */
    abstract protected function get_job_data($data);
    /**
     * Initiate new background process
     */
    public function __construct()
    {
    }
    /**
     * Handle recurring request via AS.
     *
     * @param array $args Arguments.
     * @return void
     */
    public function handle_request($args = array())
    {
    }
    /**
     * Decorate item.
     *
     * @param array $item The item.
     * @return object|false
     */
    private function decorate_item(array $item)
    {
    }
    /**
     * Get item.
     *
     * @param string $key The item key.
     * @return object|false
     */
    public function get_item(string $key)
    {
    }
    /**
     * Get batch.
     *
     * @since 4.3.0
     *
     * @param int $size The batch size.
     * @return array
     */
    public function get_batch(int $size)
    {
    }
    /**
     * Process batch.
     *
     * @since 4.3.0
     *
     * Hint: Tries to process all items in the batch.
     * If the execution limit is exceeded, it will stop processing (e.g., queries take too long).
     *
     * @param array $batch The batch.
     * @return void
     */
    public function process_batch(array $batch)
    {
    }
    /**
     * Process item.
     *
     * @since 4.3.0
     *
     * Hint: Each items needs multiple iterations to complete.
     * If not completed, it saved in the queue and will be processed again
     * on the next AS tick.
     *
     * @param object $item The item.
     * @return void
     */
    public function process_item($item)
    {
    }
    /**
     * Get max iterations.
     *
     * @since 4.3.0
     *
     * @return int
     */
    public static function get_max_iterations_per_item(): int
    {
    }
    /**
     * Get number of queue items.
     *
     * @param array $args The query arguments.
     * @return string|null
     */
    public function count($args = array())
    {
    }
    /**
     * Is queue empty
     *
     * @return bool
     */
    public function is_queue_empty(): bool
    {
    }
    /**
     * Checks if the queue is full.
     *
     * @return bool
     */
    public function is_queue_full(): bool
    {
    }
    /**
     * Does the task exist the queue?
     *
     * @param array $data Data.
     * @return bool
     */
    public function is_task_in_queue($data): bool
    {
    }
    /**
     * Query queue items.
     *
     * @param array $args The query arguments.
     * @return string|array|false|null
     */
    public function query($args = array())
    {
    }
    /*
    |--------------------------------------------------------------------------
    | CRUD.
    |--------------------------------------------------------------------------
    */
    /**
     * Saves local data to queue.
     *
     * Hint: Runs on shutdown and saves all requests to the queue.
     *
     * @return int|bool The number of items saved, or false when saving is unavailable.
     */
    public function save()
    {
    }
    /**
     * Acquire an options-table lock around queue capacity reservation and insertion.
     *
     * Concurrent INSERT ... SELECT statements can observe the same pre-insert count,
     * so the lock is still required around the capacity-limited write.
     *
     * @since 4.4.2
     *
     * @return string|null The lock token, or null when the lock was not acquired.
     */
    private function lock_queue_save()
    {
    }
    /**
     * Release the options-table lock used while saving queue items.
     *
     * @since 4.4.2
     *
     * @param string $lock_token The token returned by lock_queue_save().
     *
     * @return void
     */
    private function unlock_queue_save($lock_token)
    {
    }
    /**
     * Add to queue.
     *
     * Hint: Runs on runtime when a page view is loaded and recommendations are requested.
     *
     * @param mixed $data Data.
     *
     * @return string|false The key to be added. False if data is invalid.
     */
    public function add($data)
    {
    }
    /**
     * Update queue item.
     *
     * @param string $key Key.
     * @param array  $data Data.
     * @param int    $iterations Iterations.
     *
     * @return int|false
     */
    public function update($key, $data, $iterations = 0)
    {
    }
    /**
     * Delete queue item.
     *
     * @param string $key Key.
     *
     * @return bool
     */
    public function delete($key)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Iterations management.
    |--------------------------------------------------------------------------
    */
    /**
     * Force set a number of iterations in a queue item.
     *
     * @param string $key Key.
     * @param int    $number The number of iterations to set.
     *
     * @return bool
     */
    public function set_number_of_iterations($key, $number): bool
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Process locking utilities.
    |--------------------------------------------------------------------------
    */
    /**
     * Is process running
     *
     * Check whether the current process is already running
     * in a background process.
     *
     * @return bool
     */
    public function is_process_running(): bool
    {
    }
    /**
     * Lock process
     *
     * Lock the process so that multiple instances can't run simultaneously.
     * Override if applicable, but the duration should be greater than that
     * defined in the time_exceeded() method.
     *
     * @return void
     */
    protected function lock_process()
    {
    }
    /**
     * Unlock process
     *
     * Unlock the process so that other instances can spawn.
     *
     * @return $this
     */
    protected function unlock_process()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Keeping execution limits.
    |--------------------------------------------------------------------------
    */
    /**
     * Get max queue allowed.
     *
     * @since 4.3.0
     *
     * @return int
     */
    public function get_max_queue_allowed(): int
    {
    }
    /**
     * Execution limits.
     */
    protected function is_execution_limit_exceeded(): bool
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
    protected function memory_exceeded(): bool
    {
    }
    /**
     * Get memory limit
     *
     * @return int
     */
    protected function get_memory_limit(): int
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
    protected function time_exceeded(): bool
    {
    }
}
/**
 * Front-end AJAX filters.
 *
 * @class    WC_PRL_Ajax
 * @version  4.4.4
 */
class WC_PRL_Ajax
{
    /**
     * Maximum number of locations rendered in one request.
     */
    private const MAX_LOCATIONS_PER_REQUEST = 25;
    /**
     * Maximum number of unique location names validated in one request.
     */
    private const MAX_LOCATION_CANDIDATES = 100;
    /**
     * Current URL that is retrieving deployments.
     *
     * @var string|null
     */
    private static $current_url;
    /**
     * Hook in.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Render deployments to bypass HTML cache.
     *
     * @since 1.1.0
     *
     * @return void
     */
    public static function prl_print_location()
    {
    }
    /**
     * Validate and bound the requested location hooks.
     *
     * @since 4.4.0
     *
     * @param string|array $locations Comma-separated location hooks.
     * @return string[]
     */
    private static function get_requested_locations($locations)
    {
    }
    /**
     * Fix url add-to-cart button.
     *
     * @since 1.1.0
     *
     * @param  string     $url
     * @param  WC_Product $product
     * @return string
     */
    public static function fix_add_to_cart_url($url, $product)
    {
    }
}
/**
 * Generator Queue class for handling amplifier cache generation.
 *
 * @class    WC_PRL_Amplifier_Generator_Queue
 * @version  4.3.0
 */
class WC_PRL_Amplifier_Generator_Queue extends \WC_PRL_Background_Queue
{
    /**
     * Action
     *
     * @var string
     */
    protected $action = 'wc_prl_amplifier_generator';
    /**
     * How many seconds will the method is_running will return true counting from the start.
     * Throttle queue processing every 50 seconds (in seconds.)
     *
     * The repeating interval has been set to 1 minute, thus a lower number would be preferable.
     *
     * @var int
     */
    protected $queue_lock_time = 50;
    /**
     * Generate key
     *
     * Generates a unique key based on microtime. Queue items are
     * given a unique key so that they can be merged upon save.
     *
     * @param array $data Data.
     *
     * @return string
     */
    public function generate_key($data)
    {
    }
    /**
     * Run step.
     *
     * This is a recurring task that will be called by the action scheduler. It will be called on repeat until it returns false.
     *
     * @param array $data Data.
     * @return mixed
     */
    protected function run_step($data)
    {
    }
    /**
     * Get job data.
     *
     * @param array $data Data. The `id` and `name` key are required.
     * @return array|false The job data.
     */
    protected function get_job_data($data)
    {
    }
}
/**
 * A singleton controller for handling the amplifiers' cache tasks.
 *
 * @class    WC_PRL_Amplifier_Generator
 * @version  4.4.4
 */
final class WC_PRL_Amplifier_Generator
{
    /**
     * The instance.
     *
     * @var WC_PRL_Amplifier_Generator|null
     */
    private static $instance;
    /**
     * The generator instance.
     *
     * @var WC_PRL_Amplifier_Generator_Queue
     */
    private $queue;
    /**
     * Supported calibration types.
     *
     * @var string[]
     */
    const CALIBRATION_TYPES = array(
        'default',
        // Used in engines (backward compatibility.)
        'low',
        'medium',
        'high',
    );
    /**
     * Default calibration type.
     *
     * @var string
     */
    const DEFAULT_CALIBRATION_TYPE = 'default';
    /**
     * Constructor.
     */
    protected function __construct()
    {
    }
    /**
     * Get the instance.
     *
     * @return WC_PRL_Amplifier_Generator
     */
    public static function get_instance()
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
     * Schedule a task.
     *
     * @param  int    $product_id Product ID.
     * @param  string $name       Amplifier ID.
     * @param  string $type       Calibration Type. (Optional)
     * @return bool  True if the task is in queue.
     */
    public function schedule_task($product_id, $name, $type = 'default')
    {
    }
    /**
     * Check if the cache products have expired.
     *
     * @since 4.1.0
     *
     * @param  int                     $product_id
     * @param  string|WC_PRL_Amplifier $amplifier
     * @param  string                  $type Calibration Type. (Optional)
     * @return bool   Whether cached products are outdated. false if there are no cached products or the cache is still valid.
     */
    public function has_expired_cache_products($product_id, $amplifier, $type = 'default')
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Amplifiers results generation methods.
    |--------------------------------------------------------------------------
    */
    /**
     * Generates amplifier cache per product.
     *
     * Notes:
     * - It runs recurring until all steps are completed.
     * - Each time the return value is passed to the next step.
     *
     * @see WC_PRL_Amplifier_Generator_Queue::task()
     *
     * @param  array $args  {
     *    @type int    $id                    Product ID.
     *    @type string $name                  Amplifier ID.
     *    @type string $type                  Calibration Type. (Optional)
     *    @type int    $step                  Step number. (Optional)
     *    @type array  $carried_return_values Carried return values. (Internal use only)
     * }
     * @param bool  $force Force run even if cache is available (Optional)
     * @return mixed
     */
    public function run($args, $force = \false)
    {
    }
}
/**
 * Amplifiers Collection class.
 *
 * @class    WC_PRL_Amplifiers
 * @version  4.4.4
 */
class WC_PRL_Amplifiers
{
    /**
     * Amplifiers.
     *
     * @var array
     */
    protected $amplifiers;
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
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Instantiates the amplifiers.
     *
     * @return void
     */
    public function instantiate_amplifiers()
    {
    }
    /**
     * Get amplifier class by id.
     *
     * @param string $amplifier_id
     *
     * @return WC_PRL_Amplifier|false
     */
    public function get_amplifier($amplifier_id)
    {
    }
    /**
     * Get all supported amplifiers.
     *
     * @param string $engine_type
     *
     * @return array
     */
    public function get_supported_amplifiers($engine_type = '')
    {
    }
    /**
     * Get amplifiers fields for admin engine metabox.
     *
     * @param WC_PRL_Engine $engine
     * @param array         $options
     *
     * @return false|void
     */
    public function get_admin_filters_html($engine, $options = array())
    {
    }
    /**
     * Admin amplifiers select dropdown.
     *
     * @param string      $engine_type
     * @param array       $amplifiers
     * @param string|null $selected_id Selected ID, or null when nothing is selected.
     * @param array       $additional_options
     *
     * @return void
     */
    private function get_amplifiers_dropdown($engine_type, $amplifiers, $selected_id, $additional_options = array())
    {
    }
    /**
     * Print amplifiers JS templates in footer.
     *
     * @return void
     */
    public function print_amplifiers_field_scripts()
    {
    }
    /**
     * Prints JS condition templates in footer.
     *
     * @return void
     */
    private function print_js_templates()
    {
    }
    /**
     * Get calibration settings.
     *
     * @since 1.4.12
     *
     * @param string $amplifier_code
     *
     * @return array
     */
    public function get_calibration_settings($amplifier_code)
    {
    }
    /**
     * Get calibration option per type.
     *
     * @since 4.1.0
     *
     * @param string $key
     * @param string $amplifier_code
     * @param string $calibration_type
     *
     * @return int|float|string|false False for invalid params.
     */
    public function get_calibration_option_per_type($key, $amplifier_code, $calibration_type)
    {
    }
    /**
     * Get calibration options.
     *
     * @since 1.4.12
     * @since 4.1.0  Added the type string for the deployment parameter (used as a calibration type).
     *
     * @param string                   $key              The calibraption option name.
     * @param string                   $amplifier_code   The amplifier code (fgt or oab).
     * @param WC_PRL_Deployment|string $calibration_type (Optional) A deployment object or a preset name.
     *
     * @return mixed
     */
    public function get_calibration_option($key, $amplifier_code, $calibration_type = \null)
    {
    }
}
/**
 * The Generator Action Scheduler recurring task.
 *
 * @class    WC_PRL_AS_Generator
 * @version  4.4.4
 */
final class WC_PRL_AS_Generator
{
    /**
     * Unique AS job name.
     *
     * @var string
     */
    public static $cron_hook_identifier = 'wc_prl_as_generator';
    /**
     * Cron healthcheck every 1 minute.
     *
     * @var int Number of minutes.
     */
    protected $cron_interval = 1;
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Is queue processing handled via wp-cli.
     *
     * @return bool
     */
    public static function is_handled_via_wp_cli()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Cron Management.
    |--------------------------------------------------------------------------
    */
    /**
     * Schedule event
     *
     * @return void
     */
    protected function schedule_event()
    {
    }
    /**
     * Handle Action Scheduler recurring action.
     *
     * Acts as a cron job.
     * Splits the work between the amplifier and the classic generator.
     *
     * @return void
     */
    public function handle()
    {
    }
}
/**
 * Background Updater.
 *
 * Uses https://github.com/A5hleyRich/wp-background-processing to handle DB
 * updates in the background.
 *
 * @class    WC_PRL_Background_Updater
 * @version  4.4.4
 */
class WC_PRL_Background_Updater extends \WP_Background_Process
{
    /**
     * Initiate new background process.
     */
    public function __construct()
    {
    }
    /**
     * Returns the cron action identifier.
     *
     * @return string
     */
    public function get_cron_hook_identifier()
    {
    }
    /**
     * Dispatch updater.
     */
    public function dispatch()
    {
    }
    /**
     * Handle cron healthcheck.
     *
     * Restart the background process if not already running and data exists in the queue.
     *
     * @return void
     */
    public function handle_cron_healthcheck()
    {
    }
    /**
     * Schedule event.
     *
     * @return void
     */
    protected function schedule_event()
    {
    }
    /**
     * Is the updater queue empty?
     *
     * @return boolean
     */
    public function is_update_queued()
    {
    }
    /**
     * Is the updater actually running?
     *
     * @return boolean
     */
    public function is_process_running()
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
    public function time_exceeded()
    {
    }
    /**
     * Memory exceeded.
     *
     * Ensures the batch process never exceeds 90%
     * of the maximum WordPress memory.
     *
     * @return bool
     */
    public function memory_exceeded()
    {
    }
    /**
     * Runs update tasks and creates log entries.
     * Passes the object to task callbacks to allow in-task resource monitoring using the built-in methods.
     * Handles multiple callback exit codes for restarting or requeuing a task.
     *
     * @param  string $callback
     * @return mixed
     */
    protected function task($callback)
    {
    }
    /**
     * When all tasks complete, update plugin db version and create log entry.
     *
     * @return void
     */
    protected function complete()
    {
    }
}
/**
 * DB updating and other stuff via WP-CLI.
 *
 * @class    WC_PRL_CLI
 * @version  4.4.4
 */
class WC_PRL_CLI
{
    /**
     * Load required files and hooks.
     */
    public function __construct()
    {
    }
    /**
     * Load command files.
     *
     * @return void
     */
    private function includes()
    {
    }
    /**
     * Sets up and hooks WP CLI to our CLI code.
     *
     * @return void
     */
    private function hooks()
    {
    }
}
/**
 * Visibility Conditions Collection class.
 *
 * @class    WC_PRL_Conditions
 * @version  4.4.4
 */
class WC_PRL_Conditions
{
    /**
     * Conditions.
     *
     * @var array
     */
    protected $conditions;
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
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Instantiates the conditions.
     *
     * @return void
     */
    public function instantiate_conditions()
    {
    }
    /**
     * Get condition class by id.
     *
     * @param string $condition_id
     *
     * @return WC_PRL_Condition|false
     */
    public function get_condition($condition_id)
    {
    }
    /**
     * Get all supported conditions.
     *
     * @param string $engine_type
     *
     * @return array
     */
    public function get_supported_conditions($engine_type = '')
    {
    }
    /**
     * Get condition fields for admin deploy.
     *
     * @param string $engine_type
     * @param array  $options
     *
     * @return false|void
     */
    public function get_admin_conditions_html($engine_type, $options = array())
    {
    }
    /**
     * Admin filters select dropdown.
     *
     * @param string      $engine_type
     * @param array       $conditions
     * @param string|null $selected_id Selected ID, or null when nothing is selected.
     * @param array       $additional_options
     *
     * @return void
     */
    private function get_conditions_dropdown($engine_type, $conditions, $selected_id, $additional_options = array())
    {
    }
    /**
     * Print filter JS templates in footer.
     *
     * @return void
     */
    public function print_conditions_field_scripts()
    {
    }
    /**
     * Prints JS condition templates in footer.
     *
     * @return void
     */
    public function print_js_templates()
    {
    }
}
/**
 * Deployment class.
 *
 * @class    WC_PRL_Deployment
 * @version  4.4.4
 */
class WC_PRL_Deployment
{
    /**
     * A reference to the deployment data object - @see WC_PRL_Deployment_Data.
     *
     * @var WC_PRL_Deployment_Data|false|null
     */
    public $data = \null;
    /**
     * Current source data.
     *
     * @var array
     */
    protected $source_data;
    /**
     * Current source hash.
     *
     * @var int|string|false|null
     */
    protected $source_hash;
    /**
     * Deployment results are stored at runtime in this array - @see WC_PRL_Deployment::get_products().
     *
     * @var array|null
     */
    private $products;
    /**
     * Runtime property that checks if the deployment has a contextual engine.
     *
     * @var bool
     */
    private $has_contextual_engine;
    /**
     * Runtime property that indicates whether this deployment's cache is out of date.
     *
     * @var bool
     */
    private $expired;
    /**
     * Constructor.
     *
     * @param  int|object $deployment  ID to load from the DB (optional).
     */
    public function __construct($deployment)
    {
    }
    /**
     * Initialize runtime properties.
     *
     * @return void
     */
    private function init_runtime_properties()
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Setters.                                         */
    /*---------------------------------------------------*/
    /**
     * Sets the contextual engine state.
     *
     * @param  bool $value
     * @return void
     */
    public function set_contextual_engine_state($value)
    {
    }
    /**
     * Sets the source data.
     *
     * @param  array $value
     * @return void
     */
    public function set_source_data($value)
    {
    }
    /**
     * Sets the expired state.
     *
     * @param  bool $value
     * @return void
     */
    public function set_expired($value)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Getters.                                         */
    /*---------------------------------------------------*/
    /**
     * Get Deployment ID.
     * Returns the ID of the associated WC_PRL_Deployment_Data object - @see WC_PRL_Deployment_Data class.
     *
     * @return int|null
     */
    public function get_id()
    {
    }
    /**
     * Get Engine ID.
     *
     * @return int|null
     */
    public function get_engine_id()
    {
    }
    /**
     * Get Engine type.
     *
     * @return string|null
     */
    public function get_engine_type()
    {
    }
    /**
     * Get Title.
     *
     * @return string|null
     */
    public function get_title()
    {
    }
    /**
     * Get Description.
     *
     * @param  bool $formatted
     * @return string|null
     */
    public function get_description($formatted = \false)
    {
    }
    /**
     * Get Display order.
     *
     * @return int|null
     */
    public function get_display_order()
    {
    }
    /**
     * Get number of columns.
     *
     * @return int|null
     */
    public function get_columns()
    {
    }
    /**
     * Get max number of products.
     *
     * @return int|null
     */
    public function get_limit()
    {
    }
    /**
     * Get Location ID.
     *
     * @return string|null
     */
    public function get_location_id()
    {
    }
    /**
     * Get Hook.
     *
     * @return string|null
     */
    public function get_hook()
    {
    }
    /**
     * Get conditions data.
     *
     * @return array|null
     */
    public function get_conditions_data()
    {
    }
    /**
     * Get item data.
     *
     * @return array
     */
    public function get_data()
    {
    }
    /**
     * Get source data.
     *
     * @param  string $context
     * @return array
     */
    public function get_source_data($context = 'view')
    {
    }
    /**
     * Get source as string.
     *
     * To obtain a distinct interpretation of the source data, convert it into a string format.
     * The purpose of this is to assign a distinct identification to each item in the generation queue. @see WC_PRL_Generator_Queue::generate_key()
     *
     * @return string
     */
    public function get_source_data_string()
    {
    }
    /**
     * Get tracking source hash.
     *
     * @param  string $context
     * @return int|string|false
     */
    public function get_tracking_source_hash($context = 'view')
    {
    }
    /**
     * Get cache key.
     *
     * @return string
     */
    public function get_cache_key()
    {
    }
    /**
     * Get engine's product ids.
     *
     * @param  bool $force
     * @return array|null
     */
    public function get_products($force = \false)
    {
    }
    /**
     * Get Engine active status.
     *
     * @return bool|null
     */
    public function is_active()
    {
    }
    /**
     * Whether has contextual engine or not.
     *
     * @return bool
     */
    public function has_contextual_engine()
    {
    }
    /**
     * Has this deployment expired?.
     *
     * @return bool
     */
    public function has_expired()
    {
    }
}
/**
 * Deployments Factory class.
 *
 * @class    WC_PRL_Deployments
 * @version  4.4.4
 */
class WC_PRL_Deployments
{
    /**
     * Cached Deployments per page.
     *
     * @var array|null
     */
    private $deployments;
    /**
     * Background generator queue.
     *
     * @var WC_PRL_Generator_Queue
     */
    public $queue;
    /**
     * Array of deployment ID's to be processed by the background generator.
     *
     * @var array
     */
    private $deployments_for_background_generation = array();
    /**
     * Handles the throttle state of the current request.
     *
     * @var bool|null
     */
    private $is_throttled;
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
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Get deployments for a specific location.
     *
     * @param string $hook
     * @param array  $args
     * @param string $context
     *
     * @return array
     */
    public function get_deployments($hook, $context = 'edit', $args = array())
    {
    }
    /**
     * Bulk fetch source data for all deployments of a location.
     *
     * @param WC_PRL_Location $location Location.
     * @param array           $args Deployment arguments.
     *
     * @return void
     */
    private function bulk_load_source_data($location, $args)
    {
    }
    /**
     * Bulk fetch deployments based on a location.
     *
     * @param object $location
     *
     * @return void
     */
    public function bulk_load_deployments($location)
    {
    }
    /**
     * Is the current request throttled?
     *
     * Hint: This needs to be moved to a more appropriate location.
     *
     * @return boolean
     */
    public function is_generator_throttled()
    {
    }
    /**
     * Atomically claim the current generation throttle window.
     *
     * @since 4.4.2
     *
     * @param int $expiration Throttle duration in seconds.
     * @return bool Whether this request claimed the window.
     */
    private function claim_generator_throttle($expiration)
    {
    }
    /**
     * Get admin fields for accordion.
     *
     * @param int   $index Deployment index.
     * @param array $options Deployment options.
     * @param bool  $ajax Whether this is an AJAX request.
     *
     * @return void
     */
    public function get_admin_metaboxes_content($index, $options = array(), $ajax = \false)
    {
    }
    /**
     * Adds all deployments of a requests in the generation queue.
     *
     * @return void
     */
    public function add_deployments_to_queue()
    {
    }
    /**
     * Does the deployment exist the queue?
     *
     * @since 4.0.0
     * @see   WC_PRL_Deployment::get_products()
     *
     * @param WC_PRL_Deployment $deployment
     *
     * @return boolean
     */
    public function is_deployment_in_queue($deployment)
    {
    }
    /**
     * Adds a deployment ID into the background generator queue.
     *
     * @see WC_PRL_Deployment::get_products()
     *
     * @param WC_PRL_Deployment $deployment
     * @param bool              $force Whether to regenerate the products even if they are cached.
     *
     * @return void
     */
    public function schedule_deployment_generation($deployment, $force = \false)
    {
    }
}
/**
 * Engine.
 *
 * @class    WC_PRL_Engine
 * @version  4.4.4
 */
class WC_PRL_Engine extends \WC_Data
{
    /**
     * This is the name of this object type.
     *
     * @var string
     */
    protected $object_type = 'engine';
    /**
     * Post type.
     *
     * @var string
     */
    protected $post_type = 'prl_engine';
    /**
     * Cache group.
     *
     * @var string
     */
    protected $cache_group = 'engines';
    /**
     * Stores engine data.
     *
     * @var array
     */
    protected $data = array('name' => '', 'slug' => '', 'description' => '', 'short_description' => '', 'date_created' => \null, 'date_modified' => \null, 'status' => \false, 'type' => '', 'filters_data' => array(), 'amplifiers_data' => array(), 'cache_version' => '');
    /**
     * Cache dynamic filters array.
     *
     * @var array|null
     */
    protected $dynamic_filters_data;
    /**
     * Cache contextual flag on filters.
     *
     * @var bool|null
     */
    protected $has_contextual_filters;
    /**
     * Cache contextual flag on amplifiers.
     *
     * @since 1.4.0
     *
     * @var bool|null
     */
    protected $has_contextual_amplifiers;
    /**
     * Max sample array index per amplifier.
     *
     * @var int
     */
    public $sampling_max_index;
    /**
     * Max cached array index.
     *
     * @var int
     */
    public $caching_max_index;
    /**
     * Number of seconds before the cache is considered outdated.
     *
     * @var int
     */
    public $refresh_interval_in_seconds;
    /**
     * Get the engine if ID is passed, otherwise the engine is new and empty.
     *
     * @param int|string|array|WC_PRL_Engine|object|null $engine Engine to init.
     */
    public function __construct($engine = \null)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Getters
    |--------------------------------------------------------------------------
    |
    | Methods for getting data from the engine object.
    */
    /**
     * Get engine name.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_name($context = 'view')
    {
    }
    /**
     * Get engine slug.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_slug($context = 'view')
    {
    }
    /**
     * Get the engine type.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_type($context = 'view')
    {
    }
    /**
     * Get engine filters.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return array
     */
    public function get_filters_data($context = 'view')
    {
    }
    /**
     * Get engine amplifiers.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return array
     */
    public function get_amplifiers_data($context = 'view')
    {
    }
    /**
     * Get engine description.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_description($context = 'view')
    {
    }
    /**
     * Get engine short description.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_short_description($context = 'view')
    {
    }
    /**
     * Get engine status.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_status($context = 'view')
    {
    }
    /**
     * Get engine created date.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return WC_DateTime|NULL object if the date is set or null if there is no date.
     */
    public function get_date_created($context = 'view')
    {
    }
    /**
     * Get engine modified date.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return WC_DateTime|NULL object if the date is set or null if there is no date.
     */
    public function get_date_modified($context = 'view')
    {
    }
    /**
     * Get Dynamic filters on runtime.
     * Hint: Need to have a efficient order of execution.
     *
     * @param  bool $force
     * @return array
     */
    public function get_dynamic_filters_data($force = \false)
    {
    }
    /**
     * Get query exclude set of IDs.
     *
     * @param  array $source_data
     * @return int[]
     */
    public function get_exclude_ids($source_data)
    {
    }
    /**
     * Get the cache version.
     *
     * @param string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_cache_version($context = 'view')
    {
    }
    /**
     * Returns the filtererd query args.
     *
     * @param  WC_PRL_Deployment $deployment
     * @return array
     */
    public function get_filtered_args($deployment)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Setters
    |--------------------------------------------------------------------------
    |
    | Functions for setting engine data. These should not update anything in the
    | database itself and should only change what is stored in the class
    | object.
    */
    /**
     * Set all data based on input array.
     *
     * @param  array $data
     * @return void
     */
    public function set_all($data)
    {
    }
    /**
     * Set engine name.
     *
     * @param string $name
     * @return void
     */
    public function set_name($name)
    {
    }
    /**
     * Set engine slug.
     *
     * @param string $slug
     * @return void
     */
    public function set_slug($slug)
    {
    }
    /**
     * Set engine type.
     *
     * @param string $type
     * @return void
     */
    public function set_type($type)
    {
    }
    /**
     * Set engine description.
     *
     * @param string $description
     * @return void
     */
    public function set_description($description)
    {
    }
    /**
     * Set engine short description.
     *
     * @param string $short_description
     * @return void
     */
    public function set_short_description($short_description)
    {
    }
    /**
     * Set engine amplifiers data.
     *
     * @param array $amplifiers_data
     * @return void
     */
    public function set_amplifiers_data($amplifiers_data)
    {
    }
    /**
     * Set engine filters data.
     *
     * @param array $filters_data
     * @return void
     */
    public function set_filters_data($filters_data)
    {
    }
    /**
     * Set engine status.
     *
     * @param string $status
     * @return void
     */
    public function set_status($status)
    {
    }
    /**
     * Set the engine's cache version. Used for invalidating existing cache.
     *
     * @since 4.0.0
     *
     * @param string $version
     * @return void
     */
    public function set_cache_version($version)
    {
    }
    /**
     * Set engine created date.
     *
     * @param string|integer|null $date UTC timestamp, or ISO 8601 DateTime. If the DateTime string has no timezone or offset, WordPress site timezone will be assumed. Null if their is no date.
     * @return void
     */
    public function set_date_created($date = \null)
    {
    }
    /**
     * Set engine modified date.
     *
     * @param string|integer|null $date UTC timestamp, or ISO 8601 DateTime. If the DateTime string has no timezone or offset, WordPress site timezone will be assumed. Null if their is no date.
     * @return void
     */
    public function set_date_modified($date = \null)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Conditionals
    |--------------------------------------------------------------------------
    */
    /**
     * Checks the engine type.
     *
     * @param string|array $type
     * @return bool
     */
    public function is_type($type)
    {
    }
    /**
     * Checks the engine is inactive.
     *
     * @return bool
     */
    public function is_active()
    {
    }
    /**
     * Checks if the engine has contextual filters.
     *
     * @param  bool $force
     * @return bool
     */
    public function has_contextual_filters($force = \false)
    {
    }
    /**
     * Checks if the engine has contextual amplifiers.
     *
     * @since 1.4.0
     *
     * @param  bool $force
     * @return bool
     */
    public function has_contextual_amplifiers($force = \false)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Other Methods
    |--------------------------------------------------------------------------
    */
    /**
     * Fetches product results.
     *
     * @param  array $query_args
     * @return array
     */
    public function query($query_args)
    {
    }
    /**
     * Returns the filtererd query args.
     *
     * @param  array             $products
     * @param  WC_PRL_Deployment $deployment
     * @return array
     */
    public function apply_dynamic_filters($products, $deployment)
    {
    }
    /**
     * Do a weighted merge of each amplifier results.
     *
     * @param  array $results
     * @param  int   $max_index
     * @return array
     */
    public function weight_merge($results, $max_index)
    {
    }
    /**
     * Ensure properties are set correctly before save.
     *
     * @return void
     */
    public function validate_props()
    {
    }
    /**
     * Save data (either create or update depending on if we are working on an existing product).
     *
     * @return int
     */
    public function save()
    {
    }
    /**
     * Invalidate the cache version used for fetching cached recommendations.
     * If the cache prefix changes, the cache will be considered outdated and will be scheduled for regeneration.
     *
     * @since 4.0.0
     *
     * @return void
     */
    public function invalidate_cache_version()
    {
    }
}
/**
 * Filters Collection class.
 *
 * @class    WC_PRL_Filters
 * @version  4.4.4
 */
class WC_PRL_Filters
{
    /**
     * Filters.
     *
     * @var array
     */
    protected $filters;
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
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Instantiates the filters.
     *
     * @return void
     */
    public function instantiate_filters()
    {
    }
    /**
     * Get filter class by id.
     *
     * @param string $filter_id
     *
     * @return WC_PRL_Filter|false
     */
    public function get_filter($filter_id)
    {
    }
    /**
     * Get filters by supported engine type.
     *
     * @param string $engine_type
     *
     * @return array
     */
    public function get_supported_filters($engine_type = '')
    {
    }
    /**
     * Get filters fields for admin engine metabox.
     *
     * @param WC_PRL_Engine $engine
     * @param array         $options
     *
     * @return false|void
     */
    public function get_admin_filters_html($engine, $options = array())
    {
    }
    /**
     * Admin filters select dropdown.
     *
     * @param string      $engine_type
     * @param array       $filters
     * @param string|null $selected_id Selected ID, or null when nothing is selected.
     * @param array       $additional_options
     *
     * @return void
     */
    private function get_filters_dropdown($engine_type, $filters, $selected_id, $additional_options = array())
    {
    }
    /**
     * Print filter JS templates in footer.
     *
     * @return void
     */
    public function print_filters_field_scripts()
    {
    }
    /**
     * Prints JS condition templates in footer.
     *
     * @return void
     */
    private function print_js_templates()
    {
    }
    /**
     * Pass keys from the WooCommerce query builder to the WP_Query object
     *
     * @param array $query The WP_Query args
     * @param array $query_args
     *
     * @return array
     */
    public function include_prl_meta_query($query, $query_args)
    {
    }
}
/**
 * Generator Queue class.
 *
 * @class    WC_PRL_Generator_Queue
 * @version  4.4.1
 */
class WC_PRL_Generator_Queue extends \WC_PRL_Background_Queue
{
    /**
     * Action
     *
     * @var string
     */
    protected $action = 'wc_prl_generator';
    /**
     * How many seconds will the method is_running will return true counting from the start.
     * Throttle queue processing every 50 seconds (in seconds.)
     *
     * The repeating interval has been set to 1 minute, thus a lower number would be preferable.
     *
     * @var int
     */
    protected $queue_lock_time = 50;
    /**
     * Process an item.
     *
     * Restarts progress created before the engine's latest cache invalidation.
     *
     * @since 4.4.1
     *
     * @param object $item Item.
     * @return void
     */
    public function process_item($item)
    {
    }
    /**
     * Generate key
     *
     * Generates a unique key based on microtime. Queue items are
     * given a unique key so that they can be merged upon save.
     *
     * @param array $data Data.
     *
     * @return string
     */
    public function generate_key($data)
    {
    }
    /**
     * Run step.
     *
     * This is a recurring task that will be called by the action scheduler. It will be called on repeat until it returns false.
     *
     * @see WC_PRL_Generator::run
     *
     * @param array $data Data.
     *
     * @return mixed
     */
    protected function run_step($data)
    {
    }
    /**
     * Get job data.
     *
     * @param array $data Data.
     * @return array|false The job data.
     */
    protected function get_job_data($data)
    {
    }
}
/**
 * Recommendations generator class.
 *
 * @class    WC_PRL_Generator
 * @version  4.4.4
 */
final class WC_PRL_Generator
{
    /**
     * Logging group name.
     *
     * @const string
     */
    const LOG_GROUP_NAME = 'wc_prl_generator_tasks';
    /*
    |--------------------------------------------------------------------------
    | Recommendations generation task helpers.
    |--------------------------------------------------------------------------
    |
    | Methods that assist in managing the state of the shared $data array.
    |
    */
    /**
     * Set up data for the next amplifier loop.
     *
     * @access protected
     *
     * @param  array &$data
     * @return void
     */
    protected function next_amplifier(&$data)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Recommendations generation methods.
    |--------------------------------------------------------------------------
    */
    /**
     * Generates recommendations. (Recurring task.)
     *
     * @since 1.0.0
     *
     * This process is divided in three steps. Each step is connected to the previous with the $data array being the shared state.
     * Each time this task returns a non-empty array the system will loop again into the next async request with the new data state.
     *
     * ///
     * Step: 1 (or empty)
     *
     * In the first step we check for engine filters and apply them to the query_args array.
     *
     * ///
     * Step: 2
     *
     * The second step is the amplifiers step. On this point, the system loop through the engine's amplifiers and run them all.
     * Each amplifier and therefore the query will be handled in sequential async requests. The process will move to step 3 when all amplifiers are calculated.
     *
     * ///
     * Step: 3
     *
     * In case the engine has amplifiers, this stage involves a weighted merging process of the results obtained from each amplifier in step 2.
     * However, if there are no amplifiers, step 1 proceeds directly to this step and executes an un-amplified/simple query to retrieve the filtered data from step 1. Finally, the results, whether from the weighted merge or the un-amplified query, are stored in the deployments metadata table.
     *
     * The entire step loop is repeated for each deployment ID.
     *
     * @param  array $data  {
     *     @type  array  $id                   Deployment ID.
     *     @type  array  $source               The deployments source data.
     *     @type  array  $filtered_query_args  Indicates whether the filters have been applied to the current deployment.
     *     @type  array  $amplifiers           The amplifiers queue for the current deployment.
     *     @type  array  $results              Keeps the progress data of the amplifiers.
     *     @type  string $engine_cache_version Engine cache version used to build the progress data.
     *     @type  int    $step                 Enum( 1, 2, 3 ). Used for keeping track of what needs to run.
     *         - 1: Apply filters and cache amplifiers.
     *         - 2: Run amplifiers one by one.
     *         - 3: Combine results.
     *     @type  bool   $force                Force the regeneration of the deployment batch.
     * }
     * @return mixed
     */
    public function run($data)
    {
    }
}
/**
 * Handles installation and updating tasks.
 *
 * @class    WC_PRL_Install
 * @version  4.4.4
 */
class WC_PRL_Install
{
    /**
     * DB updates and callbacks that need to be run per version.
     *
     * @var array
     */
    private static $db_updates = array();
    /**
     * Background update class.
     *
     * @var WC_PRL_Background_Updater|null
     */
    private static $background_updater;
    /**
     * Current plugin version.
     *
     * @var string
     */
    private static $current_version;
    /**
     * Current DB version.
     *
     * @var string
     */
    private static $current_db_version;
    /**
     * Whether install() ran in this request.
     *
     * @var boolean
     */
    private static $is_install_request;
    /**
     * Hook in.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Init background updates.
     *
     * @return void
     */
    public static function init_background_updater()
    {
    }
    /**
     * Installation needed?
     *
     * @return boolean
     */
    private static function must_install()
    {
    }
    /**
     * Installation possible?
     *
     * @param  boolean $check_installing
     * @return boolean
     */
    private static function can_install($check_installing = \true)
    {
    }
    /**
     * Check version and run the installer if necessary.
     *
     * @return void
     */
    public static function maybe_install()
    {
    }
    /**
     * Is currently installing?
     *
     * @since  1.3.0
     *
     * @return boolean
     */
    private static function is_installing()
    {
    }
    /**
     * DB update needed?
     *
     * @return boolean
     */
    private static function must_update()
    {
    }
    /**
     * DB update possible?
     *
     * @param  boolean $check_installing
     * @return boolean
     */
    private static function can_update($check_installing = \true)
    {
    }
    /**
     * Run the updater if triggered.
     *
     * @return void
     */
    public static function maybe_update()
    {
    }
    /**
     * If the DB version is out-of-date, a DB update must be in progress: define a 'WC_PRL_UPDATING' constant.
     *
     * @return void
     */
    public static function define_updating_constant()
    {
    }
    /**
     * Install PRL.
     *
     * @return void
     */
    public static function install()
    {
    }
    /**
     * Set up the database tables which the plugin needs to function.
     *
     * @return void
     */
    private static function create_tables()
    {
    }
    /**
     * Schedule cron events.
     *
     * @since 2.1.0
     * @return void
     */
    public static function create_events()
    {
    }
    /**
     * Setup post types and taxonomies.
     *
     * @return void
     */
    private static function setup_environment()
    {
    }
    /**
     * Add terms.
     *
     * @return void
     */
    public static function create_terms()
    {
    }
    /**
     * Get table schema.
     *
     * @return string
     */
    private static function get_schema()
    {
    }
    /**
     * Update WC PRL version to current.
     *
     * @return void
     */
    private static function update_version()
    {
    }
    /**
     * Push all needed DB updates to the queue for processing.
     *
     * @return void
     */
    private static function update()
    {
    }
    /**
     * Is auto-updating enabled?
     *
     * @return boolean
     */
    public static function auto_update_enabled()
    {
    }
    /**
     * Trigger DB update.
     *
     * @return void
     */
    public static function trigger_update()
    {
    }
    /**
     * Force re-start the update cron if everything else fails.
     *
     * @return void
     */
    public static function force_update()
    {
    }
    /**
     * Updates plugin DB version when all updates have been processed.
     *
     * @return void
     */
    public static function update_complete()
    {
    }
    /**
     * True if a DB update is pending.
     *
     * @return boolean
     */
    public static function is_update_pending()
    {
    }
    /**
     * True if a DB update was started but not completed.
     *
     * @return boolean
     */
    public static function is_update_incomplete()
    {
    }
    /**
     * True if a DB update is in progress.
     *
     * @return boolean
     */
    public static function is_update_queued()
    {
    }
    /**
     * True if an update process is running.
     *
     * @return boolean
     */
    public static function is_update_process_running()
    {
    }
    /**
     * True if an update background process is running.
     *
     * @return boolean
     */
    public static function is_update_background_process_running()
    {
    }
    /**
     * True if a CLI update is running.
     *
     * @return boolean
     */
    public static function is_update_cli_process_running()
    {
    }
    /**
     * Update DB version to current.
     *
     * @param  string $version
     * @return void
     */
    public static function update_db_version($version = \null)
    {
    }
    /**
     * Get list of DB update callbacks.
     *
     * @return array
     */
    public static function get_db_update_callbacks()
    {
    }
    /**
     * Show row meta on the plugin screen.
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
 * Locations Collection class.
 *
 * @class    WC_PRL_Locations
 * @version  4.4.4
 */
class WC_PRL_Locations
{
    /**
     * Locations.
     *
     * @var array
     */
    protected $locations;
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
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Instantiates the locations.
     *
     * @return void
     */
    public function instantiate_locations()
    {
    }
    /**
     * Get location class by id.
     *
     * @param  string $location_id
     * @return WC_PRL_Location|false
     */
    public function get_location($location_id)
    {
    }
    /**
     * Get the location object based on the hook.
     *
     * @param  string $hook
     * @return mixed
     */
    public function get_location_by_hook($hook)
    {
    }
    /**
     * Get location hooks by engine type.
     *
     * @param  string $engine_type
     * @return array
     */
    public function get_hooks_for_deployment($engine_type)
    {
    }
    /**
     * Get the supported locations.
     *
     * @param  string $context
     * @return array
     */
    public function get_locations($context = 'edit')
    {
    }
    /**
     * Parse the source data.
     *
     * @since 1.1.0
     *
     * @param  string $engine_type
     * @param  array  $args
     * @return array
     */
    public function parse_source($engine_type, $args = array())
    {
    }
    /**
     * Extract environment.
     *
     * @since 1.1.0
     *
     * @return array
     */
    public function get_environment()
    {
    }
    /**
     * Setup environment.
     *
     * @since 1.1.0
     *
     * @param  array $posted
     * @return void
     */
    public function setup_environment($posted)
    {
    }
    /**
     * Get an order key from the posted page URL.
     *
     * @since 4.4.0
     *
     * @param array $posted Request data.
     * @return string
     */
    private function get_posted_order_key($posted)
    {
    }
    /**
     * Whether core would require email verification before showing this order.
     *
     * Mirrors the `order-received` page: within the grace period, for the logged-in
     * owner, or with a session email match, no verification is needed.
     *
     * @since 4.4.0
     *
     * @param WC_Order $order Order.
     * @return bool
     */
    private function order_requires_email_verification($order)
    {
    }
}
/**
 * Notice handling.
 *
 * @class    WC_PRL_Notices
 * @version  4.4.4
 */
class WC_PRL_Notices
{
    /**
     * Notice options.
     *
     * @var array
     */
    public static $notice_options = array();
    /**
     * Determines if notice options should be updated in the DB.
     *
     * @var boolean
     */
    private static $should_update = \false;
    /**
     * Constructor.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Get a setting for a notice type.
     *
     * @param  string $notice_name
     * @param  string $key
     * @param  mixed  $default
     * @return mixed
     */
    public static function get_notice_option($notice_name, $key, $default = \null)
    {
    }
    /**
     * Set a setting for a notice type.
     *
     * @param  string $notice_name
     * @param  string $key
     * @param  mixed  $value
     * @return void
     */
    public static function set_notice_option($notice_name, $key, $value)
    {
    }
    /**
     * Save notice options to the DB.
     *
     * @return void
     */
    public static function save_notice_options()
    {
    }
    /**
     * Schedules recurring tests.
     *
     * @return void
     */
    public static function schedule_tests()
    {
    }
    /**
     * Schedules the 'page_cache' notice test.
     *
     * @param bool $force Whether to schedule the test even if it ran in the last day.
     * @return bool|WP_Error
     */
    public static function schedule_page_cache_test($force = \false)
    {
    }
    /**
     * Runs the 'page_cache' notice test.
     *
     * @return void
     */
    public static function run_page_cache_test()
    {
    }
    /**
     * Generates a new 'page_cache' test result.
     *
     * @return string
     */
    private static function generate_page_cache_test_result()
    {
    }
    /**
     * Get the result of the page cache test.
     *
     * @return string|null
     */
    public static function get_page_cache_test_result()
    {
    }
    /**
     * Searches for our 'prl_page_cache_test' meta tag to figure out when a page was generated.
     *
     * @param  string $url
     * @return mixed
     */
    private static function get_page_generated_time($url)
    {
    }
    /**
     * Creates an html comment that contains a timestamp to help us identify whether a page is served from a cache.
     *
     * @return void
     */
    public static function add_page_cache_test_data()
    {
    }
    /**
     * Used to determine if a feature plugin is installed.
     *
     * No feature plugins were ever registered, so this has always returned null.
     *
     * @since  1.4.0
     * @deprecated 4.4.2
     *
     * @param  string $name
     * @return boolean|null
     */
    public static function is_feature_plugin_installed($name)
    {
    }
}
/**
 * Hooks and actions for Orders.
 *
 * @class    WC_PRL_Order
 * @version  4.4.4
 */
class WC_PRL_Order
{
    /**
     * Init.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Hide conversion metadata in edit-order screen.
     *
     * @param  array $hidden_meta
     * @return array
     */
    public static function hide_order_item_meta($hidden_meta)
    {
    }
    /**
     * Add conversion meta to order items.
     *
     * @param  WC_Order_Item $order_item
     * @param  string        $cart_item_key
     * @param  array         $cart_item
     * @return void
     */
    public static function add_order_item_meta($order_item, $cart_item_key, $cart_item)
    {
    }
    /**
     * Adds a conversion event on manual status edit if the current status is applicable.
     *
     * @param  int      $order_id Order ID.
     * @param  string   $status_from Previous status.
     * @param  string   $status_to New status.
     * @param  WC_Order $order
     * @return void
     */
    public static function maybe_add_order_conversion_event($order_id, $status_from, $status_to, $order)
    {
    }
    /**
     * Writes a conversion event in the DB for every converted item that exists in order line items.
     *
     * @param  WC_Order $order
     * @return void
     */
    private static function add_order_conversion_event($order)
    {
    }
}
/**
 * Modifies the custom's post type list table.
 *
 * @class    WC_PRL_Post_Data
 * @version  4.4.4
 */
class WC_PRL_Post_Data
{
    /**
     * Hook in methods.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Prevents delete engine if there are deployments.
     *
     * @param  mixed   $delete Whether to proceed to deletion. Default: null
     * @param  WP_Post $post
     * @param  bool    $force_delete
     * @return bool|null
     */
    public static function pre_delete_post($delete, $post, $force_delete)
    {
    }
    /**
     * Prevents delete engine if there are deployments when using custom data store.
     *
     * @throws exception
     *
     * @param  int $id
     * @return void
     */
    public static function prl_engine_delete_post($id)
    {
    }
}
/**
 * Product Recommendations Post Types Class.
 *
 * Registers custom post types and taxonomies.
 *
 * @class    WC_PRL_Post_Types
 * @version  4.4.4
 */
class WC_PRL_Post_Types
{
    /**
     * Hook in methods.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Remove "New Engine" item from Admin bar
     *
     * @param WP_Admin_Bar $admin_bar Admin bar.
     * @return void
     */
    public static function prl_admin_bar_menu($admin_bar)
    {
    }
    /**
     * Register taxonomies.
     *
     * @return void
     */
    public static function register_taxonomies()
    {
    }
    /**
     * Register post types.
     *
     * @return void
     */
    public static function register_post_types()
    {
    }
    /**
     * Boarding HTML when no engines.
     *
     * @return string|false
     */
    public static function no_engines_boarding()
    {
    }
}
/**
 * WooCommerce Product Recommendations Shortcodes class.
 *
 * @version 4.4.4
 */
class WC_PRL_Shortcodes
{
    /**
     * Init shortcodes.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Display recommendations shortcode.
     *
     * @param  array $args
     * @return string|false|void
     */
    public static function display_recommendations($args)
    {
    }
}
/**
 * Display functions and filters.
 *
 * @class    WC_PRL_Templates
 * @version  4.4.4
 */
class WC_PRL_Templates
{
    /**
     * Holds an instance of the WC_PRL_Deployment during runtime processing.
     *
     * @var WC_PRL_Deployment|NULL
     */
    private $current_deployment;
    /**
     * Whether a location is currently being processed.
     *
     * @since 4.4.2
     *
     * @var bool
     */
    private $is_processing = \false;
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
     * Setup hooks and functions.
     */
    public function __construct()
    {
    }
    /**
     * Hook in.
     *
     * @return void
     */
    public function add_hooks()
    {
    }
    /**
     * Get the current deployment.
     *
     * @return WC_PRL_Deployment|null
     */
    public function get_current_deployment()
    {
    }
    /**
     * Check if there are any active deployments and hook them in.
     *
     * @return void
     */
    public function add_deployment_hooks()
    {
    }
    /**
     * Render engines on each location.
     *
     * @return void
     */
    public function display_recommendations()
    {
    }
    /**
     * Process Location.
     *
     * @since 1.1.0
     *
     * @param  string $hook
     * @param  bool   $ajax
     * @param  array  $args
     * @return void
     */
    public function process_hook($hook, $ajax = \false, $args = array())
    {
    }
    /**
     * Renders the products template.
     *
     * @return void
     */
    public function render_deployment($products)
    {
    }
    /**
     * Generate classes for the product grid container.
     *
     * @return string
     */
    public function get_deployment_container_class()
    {
    }
    /**
     * Generate classes for the block title.
     *
     * @since  1.1.1
     * @return int|string
     */
    public function get_deployment_title_level()
    {
    }
    /**
     * Generate classes for the block title.
     *
     * @since  1.1.1
     * @return string
     */
    public function get_deployment_title_class()
    {
    }
    /**
     * Generate data attributes for the product grid container.
     *
     * @return string
     */
    public function get_deployment_container_attributes()
    {
    }
    /**
     * Front-end styles and scripts.
     *
     * @return void
     */
    public function frontend_scripts()
    {
    }
}
/**
 * Product Recommendations Helper Functions.
 *
 * @class    WC_PRL_Tracker
 * @version  4.4.4
 */
class WC_PRL_Tracker
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
     * Adds PRL data to the tracked data.
     *
     * @param array $data
     *
     * @return array all the tracking data.
     */
    public static function add_tracking_data($data)
    {
    }
    /**
     * Get all tracking data from cache.
     *
     * @return array All the tracking data.
     */
    protected static function get_tracking_data()
    {
    }
    /**
     * Calculates all tracking-related data for the previous month and year.
     * Runs independently in a background task. @see ::maybe_calculate_tracking_data().
     *
     * @return array All the tracking data.
     */
    protected static function calculate_tracking_data()
    {
    }
    /**
     * Maybe calculate orders data. Also, handles the caching strategy.
     *
     * @return bool Returns true if the data are re-calculated, false otherwise.
     */
    public static function maybe_calculate_tracking_data()
    {
    }
    /**
     * Orders data cache key based on time.
     *
     * @param DateTime $reference_date (Optional) A reference date to calculate on the previous month and year cache key. Defaults to 'now'.
     *
     * @return string The cache key string.
     */
    private static function get_cache_key($reference_date = \null)
    {
    }
    /**
     * Gets products data.
     *
     * @return array
     */
    private static function get_products_data()
    {
    }
    /**
     * Gets deployments data.
     *
     * @return array
     */
    private static function get_deployments_data()
    {
    }
    /**
     * Gets locations data.
     *
     * @return array
     */
    private static function get_locations_data()
    {
    }
    /**
     * Gets conditions data.
     *
     * @return array
     */
    private static function get_conditions_data()
    {
    }
    /**
     * Gets filters data.
     *
     * @return array
     */
    private static function get_filters_data()
    {
    }
    /**
     * Gets amplifiers data.
     *
     * @return array
     */
    private static function get_amplifiers_data()
    {
    }
    /**
     * Gets settings data.
     *
     * @return array
     */
    private static function get_settings()
    {
    }
    /**
     * Gets orders data.
     *
     * @return array
     */
    private static function get_orders_data()
    {
    }
    /**
     * Get dates.
     *
     * @param string   $time_period
     * @param DateTime $reference_date (Optional) Date to act as reference for calculating the previous month, year. Defaults to 'now'.
     *
     * @return array<string, DateTime> Array of DateTime objects.
     */
    protected static function get_dates($time_period, $reference_date = \null)
    {
    }
}
/**
 * Tracking class.
 *
 * @class    WC_PRL_Tracking
 * @version  4.4.4
 */
class WC_PRL_Tracking
{
    /**
     * Init.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Handles the long-term conversion after inserting into cart from a deployment.
     *
     * @param  array $cart_item_data
     * @return array
     */
    public static function add_long_term_conversion($cart_item_data)
    {
    }
    /**
     * Sign the deployment, product and source that the server rendered.
     *
     * Tokens attest to a rendered recommendation, not a human click. They are
     * shared across sessions because recommendation HTML can be page-cached.
     * The daily expiry allows a week of caching plus the normal shopping session.
     *
     * @since 4.4.2
     * @param WC_PRL_Deployment $deployment Rendered deployment.
     * @param int               $product_id Rendered product ID.
     * @return string Attribution token.
     */
    public static function get_conversion_token($deployment, $product_id)
    {
    }
    /**
     * Add tracking data DOM helper.
     *
     * @since  3.0.0
     *
     * @return void
     */
    public static function add_dom_helper()
    {
    }
}
/**
 * Allows processing the amplifier generation queue via WP-CLI.
 *
 * @class    WC_PRL_CLI_Process_Amplifier_Generation_Queue
 * @version  4.4.4
 */
class WC_PRL_CLI_Process_Amplifier_Generation_Queue
{
    /**
     * Registers the update command.
     *
     * @return void
     */
    public static function register_command()
    {
    }
    /**
     * Runs through the queue and generates product recommendations.
     *
     * @param array $args The arguments.
     * @param array $assoc_args The associative arguments.
     * @return void
     */
    public static function process($args, $assoc_args)
    {
    }
}
/**
 * Allows processing the generation queue via WP-CLI.
 *
 * @class    WC_PRL_CLI_Process_Generation_Queue
 * @version  4.4.4
 */
class WC_PRL_CLI_Process_Generation_Queue
{
    /**
     * Registers the update command.
     *
     * @return void
     */
    public static function register_command()
    {
    }
    /**
     * Runs through the queue and generates product recommendations.
     *
     * @param array $args The arguments.
     * @param array $assoc_args The associative arguments.
     * @return void
     */
    public static function process($args, $assoc_args)
    {
    }
}
/**
 * Allows DB updates via WP-CLI.
 *
 * @class    WC_PRL_CLI_Update
 * @version  4.4.4
 */
class WC_PRL_CLI_Update
{
    /**
     * Registers the update command.
     *
     * @return void
     */
    public static function register_command()
    {
    }
    /**
     * Runs all pending WooCommerce database updates.
     *
     * @return void
     */
    public static function update()
    {
    }
}
/**
 * Handles compatibility with other WC extensions.
 *
 * @class    WC_PRL_Compatibility
 * @version  4.4.4
 */
class WC_PRL_Compatibility
{
    /**
     * Min required plugin versions to check.
     *
     * @var array<string, string>
     */
    private static $required = array();
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
     * @return void
     */
    protected static function load_modules()
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
     * @since 2.1.2
     * @return void
     */
    public static function declare_hpos_compatibility()
    {
    }
    /**
     * Declare cart/checkout Blocks compatibility.
     *
     * @since 3.0.6
     * @return void
     */
    public static function declare_blocks_compatibility()
    {
    }
    /**
     * Prevent deprecated mini-extensions from initializing.
     *
     * @return void
     */
    protected static function unload_modules()
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
     * @return void
     */
    public static function add_compatibility_notices()
    {
    }
}
/**
 * Functions related to core back-compatibility.
 *
 * @class    WC_PRL_Core_Compatibility
 * @version  4.4.4
 */
class WC_PRL_Core_Compatibility
{
    /**
     * Cache 'gte' comparison results.
     *
     * @var array<string, bool>
     */
    private static $is_wc_version_gte = array();
    /**
     * Cache 'gt' comparison results.
     *
     * @var array<string, bool>
     */
    private static $is_wc_version_gt = array();
    /**
     * Cache 'gt' comparison results for WP version.
     *
     * @since  1.1.2
     * @var    array<string, bool>
     */
    private static $is_wp_version_gt = array();
    /**
     * Cache 'gte' comparison results for WP version.
     *
     * @since  1.1.2
     * @var    array<string, bool>
     */
    private static $is_wp_version_gte = array();
    /**
     * Cache wc admin status result.
     *
     * @since  1.2.3
     * @var    bool|null
     */
    private static $is_wc_admin_enabled = \null;
    /**
     * Cache HPOS status.
     *
     * @since  2.2.0
     * @var    bool|null
     */
    private static $is_hpos_enabled = \null;
    /**
     * Cache block based cart detection result.
     *
     * @since  2.2.1
     * @var    bool|null
     */
    private static $is_block_based_cart = \null;
    /**
     * Cache block based checkout detection result.
     *
     * @since  2.2.1
     * @var    bool|null
     */
    private static $is_block_based_checkout = \null;
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
    | WC version handling.
    |--------------------------------------------------------------------------
    */
    /**
     * Helper method to get the version of the currently installed WooCommerce.
     *
     * @return string
     */
    public static function get_wc_version()
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is greater than or equal to $version.
     *
     * @param  string $version
     * @return bool
     */
    public static function is_wc_version_gte($version)
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is greater than $version.
     *
     * @param  string $version
     * @return bool
     */
    public static function is_wc_version_gt($version)
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is lower than or equal $version.
     *
     * @param  string $version
     * @return bool
     */
    public static function is_wc_version_lte($version)
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is lower than $version.
     *
     * @param  string $version
     * @return bool
     */
    public static function is_wc_version_lt($version)
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is greater than or equal to $version.
     *
     * @since  1.1.2
     *
     * @param  string $version
     * @return bool
     */
    public static function is_wp_version_gt($version)
    {
    }
    /**
     * Returns true if the installed version of WooCommerce is greater than or equal to $version.
     *
     * @since  1.1.2
     *
     * @param  string $version
     * @return bool
     */
    public static function is_wp_version_gte($version)
    {
    }
    /**
     * Returns true if the WC Admin feature is installed and enabled.
     *
     * @since  1.2.3
     *
     * @return bool
     */
    public static function is_wc_admin_enabled()
    {
    }
    /**
     * Escape JSON for use on HTML or attribute text nodes.
     *
     * @since  3.5.5
     *
     * @param  string $json JSON to escape.
     * @param  bool   $html True if escaping for HTML text node, false for attributes. Determines how quotes are handled.
     * @return string  Escaped JSON.
     */
    public static function wc_esc_json($json, $html = \false)
    {
    }
    /**
     * Returns true if is a react based admin page.
     *
     * @since 2.0.0
     *
     * @return bool
     */
    public static function is_admin_or_embed_page()
    {
    }
    /**
     * Compatibility wrapper for checking if the current screen is a Gutenberg editor.
     *
     * @since  1.4.9
     *
     * @return bool
     */
    public static function is_block_editor()
    {
    }
    /**
     * Check if the usage of the custom orders table is enabled.
     *
     * @since  2.2.0
     *
     * @return bool
     */
    public static function is_hpos_enabled()
    {
    }
    /**
     * Whether the cart page contains the cart block.
     *
     * @since  2.2.1
     * @return bool
     */
    public static function is_block_based_cart()
    {
    }
    /**
     * Whether the checkout page contains the checkout block.
     *
     * @since  2.2.1
     * @return bool
     */
    public static function is_block_based_checkout()
    {
    }
}
/**
 * Hooks for Blocks compatibility.
 *
 * @class    WC_PRL_Blocks_Compatibility
 * @version  4.4.4
 */
class WC_PRL_Blocks_Compatibility
{
    /**
     * Initialize.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Filter out cart and checkout locations if block-based.
     *
     * @param  array $locations  Available locations.
     * @return array
     */
    public static function filter_locations($locations)
    {
    }
}
/**
 * Hooks for Composite Products compatibility.
 *
 * @class    WC_PRL_CP_Compatibility
 * @version  4.4.4
 */
class WC_PRL_CP_Compatibility
{
    /**
     * Initialize.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Aggregate component order item totals into parent order item container.
     *
     * @param  array                 $data
     * @param  WC_Order_Item_Product $item
     * @param  WC_Order              $order
     * @return array
     */
    public static function conversion_event_data($data, $item, $order)
    {
    }
}
/**
 * Hooks for Elementor Widgets compatibility.
 *
 * @class    WC_PRL_Elementor_Compatibility
 * @version  4.4.4
 */
class WC_PRL_Elementor_Compatibility
{
    /**
     * Initialize.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Load Product location's recommendations if not already loaded.
     *
     * @return void
     */
    public static function reload_product_location()
    {
    }
}
/**
 * Hooks for Flatsome theme compatibility.
 *
 * @class    WC_PRL_Flatsome_Compatibility
 * @version  4.4.4
 */
class WC_PRL_Flatsome_Compatibility
{
    /**
     * Initialize.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Add hooks if the active parent theme is Flatsome.
     *
     * @return void
     */
    public static function add_hooks()
    {
    }
    /**
     * Reset the cart columns number to fetch from PRL settings.
     *
     * @param  int $columns
     * @return int
     */
    public static function reset_cart_product_columns($columns)
    {
    }
}
/**
 * Hooks for Product Bundles compatibility.
 *
 * @class    WC_PRL_PB_Compatibility
 * @version  4.4.4
 */
class WC_PRL_PB_Compatibility
{
    /**
     * Initialize.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Aggregate bundled order item totals into parent order item container.
     *
     * @param  array                 $data
     * @param  WC_Order_Item_Product $item
     * @param  WC_Order              $order
     * @return array
     */
    public static function conversion_event_data($data, $item, $order)
    {
    }
    /**
     * Add 'Relative Bundle' filter.
     *
     * @param  array $classes
     * @return array
     */
    public static function relative_bundle_filter($classes)
    {
    }
    /**
     * Remove bundled products for Bundle recommendations.
     *
     * @since 1.4.12
     *
     * @param  array             $products
     * @param  WC_PRL_Deployment $deployment
     * @param  WC_PRL_Engine     $engine
     * @return array
     */
    public static function remove_bundled_products_from_single_bundle($products, $deployment, $engine)
    {
    }
}
/**
 * Hooks for Product Vendors compatibility.
 *
 * @class    WC_PRL_Vendors_Compatibility
 * @version  4.4.4
 */
class WC_PRL_Vendors_Compatibility
{
    /**
     * Initialize.
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Add 'Relative Bundle' filter.
     *
     * @param  array $filters Filters.
     * @return array
     */
    public static function add_filters($filters)
    {
    }
}
/**
 * Archive Category condition class.
 *
 * @class    WC_PRL_Condition_Archive_Category
 * @version  4.4.4
 */
class WC_PRL_Condition_Archive_Category extends \WC_PRL_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Check the condition to the current request.
     *
     * @param  array             $data
     * @param  WC_PRL_Deployment $deployment Deployment.
     * @return bool
     */
    public function check($data, $deployment)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param  string|null $post_name
     * @param  int         $condition_index
     * @param  array       $condition_data
     * @return void
     */
    public function get_admin_fields_html($post_name, $condition_index, $condition_data)
    {
    }
}
/**
 * Archive Tag condition class.
 *
 * @class    WC_PRL_Condition_Archive_Tag
 * @version  4.4.4
 */
class WC_PRL_Condition_Archive_Tag extends \WC_PRL_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Check the condition to the current request.
     *
     * @param  array             $data
     * @param  WC_PRL_Deployment $deployment Deployment.
     * @return bool
     */
    public function check($data, $deployment)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param  string|null $post_name
     * @param  int         $condition_index
     * @param  array       $condition_data
     * @return void
     */
    public function get_admin_fields_html($post_name, $condition_index, $condition_data)
    {
    }
}
/**
 * Cart Category condition class.
 *
 * @class    WC_PRL_Condition_Cart_Category
 * @version  4.4.4
 */
class WC_PRL_Condition_Cart_Category extends \WC_PRL_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Check the condition to the current request.
     *
     * @param array             $data
     * @param WC_PRL_Deployment $deployment Deployment.
     *
     * @return bool
     */
    public function check($data, $deployment)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param string|null $post_name
     * @param int         $condition_index
     * @param array       $condition_data
     *
     * @return void
     */
    public function get_admin_fields_html($post_name, $condition_index, $condition_data)
    {
    }
}
/**
 * Cart Item condition class.
 *
 * @class    WC_PRL_Condition_Cart_Item_Value
 * @version  4.4.4
 */
class WC_PRL_Condition_Cart_Item_Value extends \WC_PRL_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Check the condition to the current request.
     *
     * @param  array             $data
     * @param  WC_PRL_Deployment $deployment Deployment.
     * @return bool
     */
    public function check($data, $deployment)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param  string|null $post_name
     * @param  int         $condition_index
     * @param  array       $condition_data
     * @return void
     */
    public function get_admin_fields_html($post_name, $condition_index, $condition_data)
    {
    }
}
/**
 * Cart Product condition class.
 *
 * @class    WC_PRL_Condition_Cart_Product
 * @version  4.4.4
 */
class WC_PRL_Condition_Cart_Product extends \WC_PRL_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Check the condition to the current request.
     *
     * @param  array             $data
     * @param  WC_PRL_Deployment $deployment Deployment.
     * @return bool
     */
    public function check($data, $deployment)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param  string|null $post_name
     * @param  int         $condition_index
     * @param  array       $condition_data
     * @return void
     */
    public function get_admin_fields_html($post_name, $condition_index, $condition_data)
    {
    }
}
/**
 * Cart Tag condition class.
 *
 * @class    WC_PRL_Condition_Cart_Tag
 * @version  4.4.4
 */
class WC_PRL_Condition_Cart_Tag extends \WC_PRL_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Check the condition to the current request.
     *
     * @param  array             $data
     * @param  WC_PRL_Deployment $deployment Deployment.
     * @return bool
     */
    public function check($data, $deployment)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param  string|null $post_name
     * @param  int         $condition_index
     * @param  array       $condition_data
     * @return void
     */
    public function get_admin_fields_html($post_name, $condition_index, $condition_data)
    {
    }
}
/**
 * Cart Total condition class.
 *
 * @class    WC_PRL_Condition_Cart_Total
 * @version  4.4.4
 */
class WC_PRL_Condition_Cart_Total extends \WC_PRL_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Check the condition to the current request.
     *
     * @param  array             $data
     * @param  WC_PRL_Deployment $deployment Deployment.
     * @return bool
     */
    public function check($data, $deployment)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param  string|null $post_name
     * @param  int         $condition_index
     * @param  array       $condition_data
     * @return void
     */
    public function get_admin_fields_html($post_name, $condition_index, $condition_data)
    {
    }
}
/**
 * Date condition class.
 *
 * @class    WC_PRL_Condition_Date
 * @version  4.4.4
 */
class WC_PRL_Condition_Date extends \WC_PRL_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Check the condition to the current request.
     *
     * @param  array             $data
     * @param  WC_PRL_Deployment $deployment Deployment.
     * @return bool
     */
    public function check($data, $deployment)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param  string|null $post_name
     * @param  int         $condition_index
     * @param  array       $condition_data
     * @return void
     */
    public function get_admin_fields_html($post_name, $condition_index, $condition_data)
    {
    }
}
/**
 * Geolocate condition class.
 *
 * @class    WC_PRL_Condition_Geolocate
 * @version  4.4.4
 */
class WC_PRL_Condition_Geolocate extends \WC_PRL_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Check the condition to the current request.
     *
     * @param  array             $data
     * @param  WC_PRL_Deployment $deployment
     * @return bool
     */
    public function check($data, $deployment)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param  string|null $post_name
     * @param  int         $condition_index
     * @param  array       $condition_data
     * @return void
     */
    public function get_admin_fields_html($post_name, $condition_index, $condition_data)
    {
    }
}
/**
 * Customer condition class.
 *
 * @class    WC_PRL_Condition_Customer
 * @version  4.4.4
 */
class WC_PRL_Condition_Customer extends \WC_PRL_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Check the condition to the current request.
     *
     * @param  array             $data
     * @param  WC_PRL_Deployment $deployment Deployment.
     * @return bool
     */
    public function check($data, $deployment)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param  string|null $post_name
     * @param  int         $condition_index
     * @param  array       $condition_data
     * @return void
     */
    public function get_admin_fields_html($post_name, $condition_index, $condition_data)
    {
    }
}
/**
 * Order Category condition class.
 *
 * @class    WC_PRL_Condition_Order_Category
 * @version  4.4.4
 */
class WC_PRL_Condition_Order_Category extends \WC_PRL_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Check the condition to the current request.
     *
     * @param array             $data
     * @param WC_PRL_Deployment $deployment Deployment.
     *
     * @return bool
     */
    public function check($data, $deployment)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param string|null $post_name
     * @param int         $condition_index
     * @param array       $condition_data
     *
     * @return void
     */
    public function get_admin_fields_html($post_name, $condition_index, $condition_data)
    {
    }
}
/**
 * Order Item Value condition class.
 *
 * @class    WC_PRL_Condition_Order_Item_Value
 * @version  4.4.4
 */
class WC_PRL_Condition_Order_Item_Value extends \WC_PRL_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Check the condition to the current request.
     *
     * @param  array             $data
     * @param  WC_PRL_Deployment $deployment Deployment.
     * @return bool
     */
    public function check($data, $deployment)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param  string|null $post_name
     * @param  int         $condition_index
     * @param  array       $condition_data
     * @return void
     */
    public function get_admin_fields_html($post_name, $condition_index, $condition_data)
    {
    }
}
/**
 * Order Product condition class.
 *
 * @class    WC_PRL_Condition_Order_Product
 * @version  4.4.4
 */
class WC_PRL_Condition_Order_Product extends \WC_PRL_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Check the condition to the current request.
     *
     * @param  array             $data
     * @param  WC_PRL_Deployment $deployment Deployment.
     * @return bool
     */
    public function check($data, $deployment)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param  string|null $post_name
     * @param  int         $condition_index
     * @param  array       $condition_data
     * @return void
     */
    public function get_admin_fields_html($post_name, $condition_index, $condition_data)
    {
    }
}
/**
 * Order Tag condition class.
 *
 * @class    WC_PRL_Condition_Order_Tag
 * @version  4.4.4
 */
class WC_PRL_Condition_Order_Tag extends \WC_PRL_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Check the condition to the current request.
     *
     * @param  array             $data
     * @param  WC_PRL_Deployment $deployment Deployment.
     * @return bool
     */
    public function check($data, $deployment)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param  string|null $post_name
     * @param  int         $condition_index
     * @param  array       $condition_data
     * @return void
     */
    public function get_admin_fields_html($post_name, $condition_index, $condition_data)
    {
    }
}
/**
 * Order Total condition class.
 *
 * @class    WC_PRL_Condition_Order_Total
 * @version  4.4.4
 */
class WC_PRL_Condition_Order_Total extends \WC_PRL_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Check the condition to the current request.
     *
     * @param  array             $data
     * @param  WC_PRL_Deployment $deployment Deployment.
     * @return bool
     */
    public function check($data, $deployment)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param  string|null $post_name
     * @param  int         $condition_index
     * @param  array       $condition_data
     * @return void
     */
    public function get_admin_fields_html($post_name, $condition_index, $condition_data)
    {
    }
}
/**
 * Product Category condition class.
 *
 * @class    WC_PRL_Condition_Product_Category
 * @version  4.4.4
 */
class WC_PRL_Condition_Product_Category extends \WC_PRL_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Check the condition to the current request.
     *
     * @param array             $data
     * @param WC_PRL_Deployment $deployment Deployment.
     *
     * @return bool
     */
    public function check($data, $deployment)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param string|null $post_name
     * @param int         $condition_index
     * @param array       $condition_data
     *
     * @return void
     */
    public function get_admin_fields_html($post_name, $condition_index, $condition_data)
    {
    }
}
/**
 * Product ID condition class.
 *
 * @class    WC_PRL_Condition_Product_ID
 * @version  4.4.4
 */
class WC_PRL_Condition_Product_ID extends \WC_PRL_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Check the condition to the current request.
     *
     * @param  array             $data
     * @param  WC_PRL_Deployment $deployment Deployment.
     * @return bool
     */
    public function check($data, $deployment)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param  string|null $post_name
     * @param  int         $condition_index
     * @param  array       $condition_data
     * @return void
     */
    public function get_admin_fields_html($post_name, $condition_index, $condition_data)
    {
    }
}
/**
 * Product Price condition class.
 *
 * @class    WC_PRL_Condition_Product_Price
 * @version  4.4.4
 */
class WC_PRL_Condition_Product_Price extends \WC_PRL_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Check the condition to the current request.
     *
     * @param  array             $data
     * @param  WC_PRL_Deployment $deployment Deployment.
     * @return bool
     */
    public function check($data, $deployment)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param  string|null $post_name
     * @param  int         $condition_index
     * @param  array       $condition_data
     * @return void
     */
    public function get_admin_fields_html($post_name, $condition_index, $condition_data)
    {
    }
}
/**
 * Product Stock Status condition class.
 *
 * @class    WC_PRL_Condition_Product_Stock_Status
 * @version  4.4.4
 */
class WC_PRL_Condition_Product_Stock_Status extends \WC_PRL_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Check the condition to the current request.
     *
     * @param  array             $data
     * @param  WC_PRL_Deployment $deployment Deployment.
     * @return bool
     */
    public function check($data, $deployment)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param  string|null $post_name
     * @param  int         $condition_index
     * @param  array       $condition_data
     * @return void
     */
    public function get_admin_fields_html($post_name, $condition_index, $condition_data)
    {
    }
}
/**
 * Product Tag condition class.
 *
 * @class    WC_PRL_Condition_Product_Tag
 * @version  4.4.4
 */
class WC_PRL_Condition_Product_Tag extends \WC_PRL_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Check the condition to the current request.
     *
     * @param  array             $data
     * @param  WC_PRL_Deployment $deployment Deployment.
     * @return bool
     */
    public function check($data, $deployment)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param  string|null $post_name
     * @param  int         $condition_index
     * @param  array       $condition_data
     * @return void
     */
    public function get_admin_fields_html($post_name, $condition_index, $condition_data)
    {
    }
}
/**
 * Recent Category condition class.
 *
 * @class    WC_PRL_Condition_Recent_Category
 * @version  4.4.4
 */
class WC_PRL_Condition_Recent_Category extends \WC_PRL_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Enables the session if there is not enabled yet.
     *
     * @return void
     */
    public function start_session()
    {
    }
    /**
     * Check the condition to the current request.
     *
     * @param array             $data
     * @param WC_PRL_Deployment $deployment Deployment.
     *
     * @return bool
     */
    public function check($data, $deployment)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param string|null $post_name
     * @param int         $condition_index
     * @param array       $condition_data
     *
     * @return void
     */
    public function get_admin_fields_html($post_name, $condition_index, $condition_data)
    {
    }
}
/**
 * Recent Product condition class.
 *
 * @class    WC_PRL_Condition_Recent_Product
 * @version  4.4.4
 */
class WC_PRL_Condition_Recent_Product extends \WC_PRL_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Check the condition to the current request.
     *
     * @param  array             $data
     * @param  WC_PRL_Deployment $deployment Deployment.
     * @return bool
     */
    public function check($data, $deployment)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param  string|null $post_name
     * @param  int         $condition_index
     * @param  array       $condition_data
     * @return void
     */
    public function get_admin_fields_html($post_name, $condition_index, $condition_data)
    {
    }
}
/**
 * Recent Tag condition class.
 *
 * @class    WC_PRL_Condition_Recent_Tag
 * @version  4.4.4
 */
class WC_PRL_Condition_Recent_Tag extends \WC_PRL_Condition
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Check the condition to the current request.
     *
     * @param  array             $data
     * @param  WC_PRL_Deployment $deployment Deployment.
     * @return bool
     */
    public function check($data, $deployment)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param  string|null $post_name
     * @param  int         $condition_index
     * @param  array       $condition_data
     * @return void
     */
    public function get_admin_fields_html($post_name, $condition_index, $condition_data)
    {
    }
}
/**
 * Deployment Data model class.
 *
 * @class    WC_PRL_Deployment_Data
 * @version  4.4.4
 */
class WC_PRL_Deployment_Data
{
    /**
     * Data array, with defaults.
     *
     * @var array
     */
    protected $data = array('id' => 0, 'active' => 'on', 'engine_id' => 0, 'engine_type' => '', 'title' => '', 'description' => '', 'display_order' => 0, 'columns' => 4, 'limit' => 4, 'location_id' => '', 'hook' => '', 'conditions_data' => array());
    /**
     * Stores meta in cache for future reads.
     *
     * @since 4.0.0
     *
     * @var string
     */
    protected $cache_group = 'deploymentmeta';
    /**
     * Stores meta data, defaults included.
     * Meta keys are assumed unique by default. No meta is internal.
     *
     * @var array|null
     */
    protected $meta_data = \null;
    /**
     * Constructor.
     *
     * @param int|object|array $deployment ID to load from the DB (optional) or already queried data.
     */
    public function __construct($deployment = 0)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Getters.                                         */
    /*---------------------------------------------------*/
    /**
     * Returns all data for this object.
     *
     * @return array
     */
    public function get_data()
    {
    }
    /**
     * Get id.
     *
     * @return int
     */
    public function get_id()
    {
    }
    /**
     * Get engine id.
     *
     * @return int
     */
    public function get_engine_id()
    {
    }
    /**
     * Get engine type.
     *
     * @return string
     */
    public function get_engine_type()
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
     * Get description.
     *
     * @return string
     */
    public function get_description()
    {
    }
    /**
     * Get display order.
     *
     * @return int
     */
    public function get_display_order()
    {
    }
    /**
     * Get columns count.
     *
     * @return int
     */
    public function get_columns()
    {
    }
    /**
     * Get max number of products.
     *
     * @return int
     */
    public function get_limit()
    {
    }
    /**
     * Get location id.
     *
     * @return string
     */
    public function get_location_id()
    {
    }
    /**
     * Get hook name.
     *
     * @return string
     */
    public function get_hook()
    {
    }
    /**
     * Get conditions data.
     *
     * @param string $context
     *
     * @return array
     */
    public function get_conditions_data($context = 'view')
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Setters.                                         */
    /*---------------------------------------------------*/
    /**
     * Set all data based on input array.
     *
     * @param array $data
     * @return void
     */
    public function set_all($data)
    {
    }
    /**
     * Set Deployment ID.
     *
     * @param int $value Deployment ID.
     * @return void
     */
    public function set_id($value)
    {
    }
    /**
     * Set active.
     *
     * @param string $value Active status ('on' or 'off').
     *
     * @return void
     */
    public function set_active($value)
    {
    }
    /**
     * Set engine id.
     *
     * @param int $value Engine id.
     *
     * @return void
     */
    public function set_engine_id($value)
    {
    }
    /**
     * Set engine type.
     *
     * @param string $value Engine type.
     *
     * @return void
     */
    public function set_engine_type($value)
    {
    }
    /**
     * Set title.
     *
     * @param string $value Title.
     *
     * @return void
     */
    public function set_title($value)
    {
    }
    /**
     * Set description.
     *
     * @param string $value Description.
     *
     * @return void
     */
    public function set_description($value)
    {
    }
    /**
     * Set display order.
     *
     * @param int $value Display order.
     *
     * @return void
     */
    public function set_display_order($value)
    {
    }
    /**
     * Set columns number.
     *
     * @param int $value Columns number.
     *
     * @return void
     */
    public function set_columns($value)
    {
    }
    /**
     * Set max number of products.
     *
     * @param int $value Max number of products.
     *
     * @return void
     */
    public function set_limit($value)
    {
    }
    /**
     * Set location id.
     *
     * @param string $value Location id.
     *
     * @return void
     */
    public function set_location_id($value)
    {
    }
    /**
     * Set hook.
     *
     * @param string $value Hook.
     *
     * @return void
     */
    public function set_hook($value)
    {
    }
    /**
     * Set conditions data.
     *
     * @param array|string $value Conditions data, or its serialized form as read from the database.
     *
     * @return void
     */
    public function set_conditions_data($value)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		CRUD.                                            */
    /*---------------------------------------------------*/
    /**
     * Insert data into the database.
     *
     * @return void
     */
    private function create()
    {
    }
    /**
     * Update data in the database.
     *
     * @return int|false
     */
    private function update()
    {
    }
    /**
     * Delete data from the database.
     *
     * @return void
     */
    public function delete()
    {
    }
    /**
     * Save data to the database.
     *
     * @return int
     */
    public function save()
    {
    }
    /**
     * Read from DB deployment object using ID.
     *
     * @param int|object $deployment Deployment ID or an already queried deployment row.
     *
     * @return void
     */
    public function read($deployment)
    {
    }
    /**
     * Validates before saving for sanity.
     *
     * @return void
     */
    public function validate()
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Meta CRUD.                                       */
    /*---------------------------------------------------*/
    /**
     * Read meta data from the database.
     *
     * @since 4.0.0 Added the force_read parameter.
     *
     * @param bool $force_read True to force a new DB read (and update cache).
     * @return void
     */
    protected function read_meta_data($force_read = \false)
    {
    }
    /**
     * Maybe read meta data from the database.
     *
     * @return void
     */
    protected function maybe_read_meta_data()
    {
    }
    /**
     * Set all meta data from array.
     *
     * @param array $data
     * @return void
     */
    public function set_meta_data($data)
    {
    }
    /**
     * Update Meta Data in the database.
     *
     * @return void
     */
    protected function save_meta_data()
    {
    }
    /**
     * Get All Meta Data.
     *
     * @return array
     */
    public function get_meta_data()
    {
    }
    /**
     * Get Meta by Key.
     *
     * @param string $key
     *
     * @return mixed
     */
    public function get_meta($key)
    {
    }
    /**
     * Add meta data.
     *
     * @param string $key
     * @param string $value
     * @return void
     */
    public function add_meta($key, $value)
    {
    }
    /**
     * Add meta data.
     *
     * @param string $key
     * @param mixed  $value Meta value. Null deletes the meta.
     * @return void
     */
    public function update_meta($key, $value)
    {
    }
    /**
     * Delete meta data.
     *
     * @param string $key Meta key.
     * @return void
     */
    public function delete_meta($key)
    {
    }
    /**
     * Helper method to compute meta cache key.
     *
     * @since 4.0.0
     *
     * @return string|false
     */
    public function get_meta_ob_cache_key()
    {
    }
    /**
     * Clear meta cache.
     *
     * @since 4.1.3
     * @return void
     */
    public function clear_meta_ob_cache()
    {
    }
    /**
     * Similar to get_meta, but does not read the entire meta cache.
     *
     * Hint:
     * Read-only method useful for performance.
     * Don't write on the $this->meta_data because it might be wiped out when calling other meta methods.
     *
     * @param string $products_cache_key Meta key.
     *
     * @return mixed
     */
    public function get_meta_cache_data($products_cache_key)
    {
    }
    /**
     * Save meta data to cache.
     *
     * @since 4.1.3
     *
     * @param string $key  Meta key.
     * @param mixed  $data Meta data.
     * @return bool
     */
    public function save_meta_cache_data($key, $data)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Utilities.                                       */
    /*---------------------------------------------------*/
    /**
     * Generate cache key from id and group.
     *
     * @since 4.0.0
     *
     * @param int|string $id          Object ID.
     * @param string     $cache_group Group name use to store cache. Whole group cache can be invalidated in one go.
     *
     * @return string Meta cache key.
     */
    public static function generate_meta_ob_cache_key($id, $cache_group)
    {
    }
    /**
     * Is deployment active.
     *
     * @return bool
     */
    public function is_active()
    {
    }
    /**
     * Cleans null value meta when getting.
     *
     * @param mixed $value
     *
     * @return boolean
     */
    private function has_meta_value($value)
    {
    }
    /**
     * Meta value type sanitization on the way in.
     *
     * @param mixed  $meta_value
     * @param string $meta_key
     * @return mixed
     */
    private function sanitize_meta_value($meta_value, $meta_key)
    {
    }
}
/**
 * Engine CPT Data Store.
 *
 * @class    WC_PRL_Engine_Data_Store_CPT
 * @version  4.4.4
 */
class WC_PRL_Engine_Data_Store_CPT extends \WC_Data_Store_WP
{
    /**
     * Data stored in meta keys, but not considered "meta".
     *
     * @var string[]
     */
    protected $internal_meta_keys = array('_filters_data', '_amplifiers_data', '_cache_version');
    /**
     * Stores updated props.
     *
     * @var string[]
     */
    protected $updated_props = array();
    /*
    |--------------------------------------------------------------------------
    | CRUD Methods
    |--------------------------------------------------------------------------
    */
    /**
     * Method to create a new engine in the database.
     *
     * @param WC_PRL_Engine $engine
     * @return void
     */
    public function create(&$engine)
    {
    }
    /**
     * Method to read a engine from the database.
     *
     * @param  WC_PRL_Engine $engine Product object.
     * @return void
     * @throws Exception If invalid engine.
     */
    public function read(&$engine)
    {
    }
    /**
     * Method to update a engine in the database.
     *
     * @param WC_PRL_Engine $engine
     * @return void
     */
    public function update(&$engine)
    {
    }
    /**
     * Method to delete a engine from the database.
     *
     * @param WC_PRL_Engine $engine
     * @param array         $args
     * @return void
     */
    public function delete(&$engine, $args = array())
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Additional Methods
    |--------------------------------------------------------------------------
    */
    /**
     * Read engine data.
     *
     * @param WC_PRL_Engine $engine
     * @return void
     */
    protected function read_engine_data(&$engine)
    {
    }
    /**
     * Helper method that updates all the post meta for a engine based on it's settings in the WC_PRL_Engine class.
     *
     * @param WC_PRL_Engine $engine
     * @param bool          $force Force update. Used during create.
     * @return void
     */
    protected function update_post_meta(&$engine, $force = \false)
    {
    }
    /**
     * For all stored terms in all taxonomies, save them to the DB.
     *
     * @param WC_PRL_Engine $engine
     * @param bool          $force  Force update. Used during create.
     * @return void
     */
    protected function update_terms(&$engine, $force = \false)
    {
    }
    /**
     * Handle updated meta props after updating meta data.
     *
     * @param WC_PRL_Engine $engine
     * @return void
     */
    protected function handle_updated_props(&$engine)
    {
    }
    /**
     * Clear any caches.
     *
     * @param WC_PRL_Engine $engine
     * @return void
     */
    protected function clear_caches(&$engine)
    {
    }
    /**
     * Get engines based on type.
     *
     * @param string $type
     * @param int    $limit
     * @return WP_Post[]
     */
    public function get_engines_by_type($type, $limit = -1)
    {
    }
    /**
     * Search engine data for a term and return ids.
     *
     * @param  string   $term Search term.
     * @param  array    $type Type of engine.
     * @param  null|int $limit Limit returned results.
     * @return int[] Engine IDs.
     */
    public function search_engines($term, $type = array(), $limit = \null)
    {
    }
}
/**
 * Amplifier Cache DB API class.
 *
 * @class    WC_PRL_Amplifier_Cache_DB
 * @version  4.4.4
 */
class WC_PRL_Amplifier_Cache_DB
{
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
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Get cached results for given product.
     *
     * @param  int   $product_id
     * @param  array $args
     * @return array
     */
    public function get($product_id, $args)
    {
    }
    /**
     * Set cached results for given product.
     *
     * @param  int   $product_id
     * @param  array $products
     * @param  array $args {
     *    @type  string  $name    Amplifier type.
     *    @type  string  $type  Preset name.
     * }
     *
     * @return bool|void
     */
    public function set($product_id, $products, $args = array())
    {
    }
    /**
     * Update cached results for given product.
     *
     * @param  int   $product_id
     * @param  array $products
     * @param  array $args {
     *    @type  string  $name  The calculation name. Usually the Amplifier ID.
     *    @type  string  $type  Calibration type.
     * }
     *
     * @return bool
     */
    public function update($product_id, $products, $args)
    {
    }
    /**
     * Add a new record.
     *
     * @param  int   $product_id
     * @param  array $products
     * @param  array $args {
     *    @type  string  $name  The calculation name. Usually the Amplifier ID.
     *    @type  string  $type  Calibration type.
     * }
     * @return false|int
     */
    public function add($product_id, $products, $args)
    {
    }
}
/**
 * Product Recommendations DB API class.
 *
 * @class    WC_PRL_DB
 * @version  4.4.4
 */
class WC_PRL_DB
{
    /**
     * A reference to the deployment DB Model - @see WC_PRL_Deployment_DB.
     *
     * @var WC_PRL_Deployment_DB
     */
    public $deployment;
    /**
     * A reference to the tracking DB Model - @see WC_PRL_Tracking_DB.
     *
     * @var WC_PRL_Tracking_DB
     */
    public $tracking;
    /**
     * A reference to the frequencies DB Model - @see WC_PRL_Frequencies_DB.
     *
     * @var WC_PRL_Frequencies_DB
     */
    public $frequencies;
    /**
     * A reference to the amplifiers caching DB Model - @see WC_PRL_Amplifier_Cache_DB.
     *
     * @var WC_PRL_Amplifier_Cache_DB
     */
    public $amplifier_cache;
    /**
     * A reference to the Background Generator Queue DB Model - @see WC_PRL_Queue_DB.
     *
     * @var WC_PRL_Queue_DB
     */
    public $queue;
    /**
     * Runtime shared memory for `posts_clauses` filters.
     *
     * @var array
     */
    private $posts_clauses;
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
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Get the shared posts clauses.
     */
    public function get_shared_posts_clauses()
    {
    }
    /**
     * Set the shared posts clauses.
     *
     * @param array|null $args Posts clauses, or null to clear them.
     * @return void
     */
    public function set_shared_posts_clauses($args)
    {
    }
    /**
     * Get terms of mulptiple objects at once.
     *
     * @param  array  $ids
     * @param  string $term_taxonomy
     * @param  array  $args
     * @return array|false
     *
     * @throws Exception
     */
    public function get_object_terms($ids = array(), $term_taxonomy = '', $args = array())
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Engines.
    |--------------------------------------------------------------------------
    */
    /**
     * Registers the Engine Custom Post Type data store.
     *
     * @param  array $stores
     * @return array
     */
    public static function register_engine_data_store($stores)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Deployments.
    |--------------------------------------------------------------------------
    */
    /**
     * Make WP see 'prl_deployment' as a meta type.
     *
     * @return void
     */
    public function wpdb_deployments_table_fix()
    {
    }
}
/**
 * Deployments DB API class.
 *
 * @class    WC_PRL_Deployment_DB
 * @version  4.4.4
 */
class WC_PRL_Deployment_DB
{
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
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Query deployments data from the DB.
     *
     * @param  array $args  {
     *     @type  string     $return           Return array format:
     *
     *         - 'all': entire row casted to array,
     *         - 'ids': deployments ids only,
     *         - 'objects': WC_PRL_Deployment_Data objects.
     *         - 'count': integer total number of records fetched.
     *
     *     @type  int|array  $location_id      Deployment location id(s) in WHERE clause.
     *     @type  int|array  $hook             Deployment hook(s) in WHERE clause.
     *     @type  int|array  $engine_id        Deployment engine id(s) in WHERE clause.
     *     @type  array      $order_by         ORDER BY field => order (what => who) pairs.
     *     @type  array      $meta_query       Deployment meta query parameters, uses 'WP_Meta_Query' - see https://codex.wordpress.org/Class_Reference/WP_Meta_Query .
     * }
     *
     * @return array|int
     */
    public function query($args)
    {
    }
    public function count()
    {
    }
    /**
     * Get a deployment from the DB.
     *
     * @param  mixed $deployment
     * @return false|WC_PRL_Deployment_Data
     */
    public function get($deployment)
    {
    }
    /**
     * Create a deployment in the DB.
     *
     * @param  array $args
     * @return false|int
     *
     * @throws Exception
     */
    public function add($args)
    {
    }
    /**
     * Update a deployment in the DB.
     *
     * @param  mixed $deployment
     * @param  array $args
     * @return boolean
     */
    public function update($deployment, $args)
    {
    }
    /**
     * Delete a deployment from the DB.
     *
     * @param  mixed $deployment
     * @return void
     */
    public function delete($deployment)
    {
    }
    /**
     * Delete caches for deployments.
     *
     * @param  array $ids
     * @return int|bool|void
     */
    public function clear_caches($ids)
    {
    }
}
/**
 * Frequencies DB API class.
 *
 * @class    WC_PRL_Frequencies_DB
 * @version  4.4.2
 */
class WC_PRL_Frequencies_DB
{
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
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Query frequencies from the DB.
     *
     * @param  array $args  {
     *     @type  string        $return           Return array format:
     *
     *         - 'all': entire row casted to array,
     *         - 'ids': bucket ids only,
     *
     *     @type  string|array  $context       Product ID(s) in WHERE clause.
     *     @type  int|array     $product_id       Product ID(s) in WHERE clause.
     *     @type  int|array     $expire_date      Expire Date in WHERE clause.
     *     @type  array         $order_by         ORDER BY field => order pairs.
     * }
     *
     * @return array
     */
    public function query($args)
    {
    }
    /**
     * Create or update a frequency record.
     *
     * @param  array $args
     * @return false|int
     *
     * @throws Exception
     */
    public function cache($args)
    {
    }
}
/**
 * Queue DB API class. Used for background generator queue.
 *
 * @class    WC_PRL_Queue_DB
 * @version  4.4.4
 */
class WC_PRL_Queue_DB
{
    /**
     * Queue db table name
     *
     * @var string
     */
    protected $queue_table_name = 'woocommerce_prl_generator_queue';
    /**
     * Cache group.
     *
     * @var string
     */
    protected $cache_group = 'wc_prl_background_queue_query';
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
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Add queue item(s).
     *
     * @param array $args {
     *     It can also contain an array of data.
     *
     *     @type string $key       The main identifier (Required).
     *     @type int    $source_id The source ID.
     *     @type array  $data      Data.
     *     @type bool   $force     Whether to force add the item.
     * }
     *
     * @return int|false The number of items added, or false on failure.
     */
    public function add($args)
    {
    }
    /**
     * Add queue items without exceeding a maximum matching row count.
     *
     * The capacity check is part of the INSERT so replica-routing database layers
     * execute both operations on the primary connection.
     *
     * @since 4.4.2
     *
     * @param array  $args        Queue item data accepted by add().
     * @param int    $max_items   Maximum number of matching queue items.
     * @param string $key_pattern Queue key pattern used when enforcing the maximum.
     *
     * @return int|false The number of items added, or false on failure.
     */
    public function add_with_capacity($args, $max_items, $key_pattern)
    {
    }
    /**
     * Prepare queue item values for an INSERT statement.
     *
     * @since 4.4.2
     *
     * @param array $args One queue item or a list of queue items.
     *
     * @return array|false Prepared values and placeholders, or false when no item is valid.
     */
    private function prepare_insert_data($args)
    {
    }
    /**
     * Query queue items.
     *
     * @param array $args {
     *      @type int    $key       The main identifier (Required).
     *      @type int    $source_id The source ID.
     *      @type array  $order_by  An array of column names and sort orders.
     *      @type bool   $stale     Whether to query stale items.
     *      @type int    $limit     The number of items to return.
     *      @type int    $offset    The offset.
     *      @type bool   $count     Whether to count the results.
     * }
     *
     * @return string|array|false|null Returns the count as a numeric string if $args['count'] is true, an array of results otherwise, or false when no key is given.
     */
    public function query($args)
    {
    }
    /**
     * Update queue item.
     *
     * @param string $key Key.
     * @param array  $data Data.
     * @param int    $iterations Iterations.
     *
     * @return int|false
     */
    public function update($key, $data, $iterations = 0)
    {
    }
    /**
     * Delete queue item.
     *
     * @param string $key Key.
     *
     * @return bool
     */
    public function delete($key)
    {
    }
    /**
     * Force set a number of iterations in a queue item.
     *
     * @param string $key Key.
     * @param int    $number The number of iterations to set.
     *
     * @return bool
     */
    public function set_number_of_iterations($key, $number)
    {
    }
    /**
     * Is queue empty.
     *
     * @since 4.3.0
     *
     * @return bool
     */
    public function is_queue_empty(): bool
    {
    }
    /**
     * Check if key exists in the queue.
     *
     * Hint: Does not check if the item is stale.
     *
     * @since 4.3.0
     *
     * @param string $key Key.
     *
     * @return bool
     */
    public function key_exists($key): bool
    {
    }
}
/**
 * Tracking DB API class.
 *
 * @class    WC_PRL_Tracking_DB
 * @version  4.4.2
 */
class WC_PRL_Tracking_DB
{
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
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Get top conversions by group (products or locations).
     *
     * @since  2.0.0
     *
     * @param  array $args
     * @param  int   $limit
     * @return array
     */
    public function get_top_conversions($args, $limit = 5)
    {
    }
    public function query_conversions($args)
    {
    }
    /**
     * Create a tracking conversion in the DB.
     *
     * @param  array $args
     * @return false|int
     *
     * @throws Exception
     */
    public function add_conversion_event($args)
    {
    }
}
/**
 * WC_PRL_Filter_Attribute_Context class for filtering products based on category.
 *
 * @class    WC_PRL_Filter_Attribute_Context
 * @version  4.4.4
 */
class WC_PRL_Filter_Attribute_Context extends \WC_PRL_Filter
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Apply the filter to the query args array.
     *
     * @param  array             $query_args
     * @param  WC_PRL_Deployment $deployment
     * @param  array             $data
     * @return array
     */
    public function filter($query_args, $deployment, $data)
    {
    }
    /**
     * Parse the category value from the source context. -- @see WC_PRL_Filter::get_contextual_value()
     *
     * @param  array  $source_data
     * @param  string $engine_type
     * @param  mixed  $filter_data Filter data.
     * @return mixed|null
     */
    protected function parse_contextual_value($source_data, $engine_type, $filter_data)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param  string|null $post_name
     * @param  int         $filter_index
     * @param  array       $filter_data
     * @return void
     */
    public function get_admin_fields_html($post_name, $filter_index, $filter_data)
    {
    }
}
/**
 * WC_PRL_Filter_Attribute class for filtering products based on category.
 *
 * @class    WC_PRL_Filter_Attribute
 * @version  4.4.4
 */
class WC_PRL_Filter_Attribute extends \WC_PRL_Filter
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Apply the filter to the query args array.
     *
     * @param  array             $query_args
     * @param  WC_PRL_Deployment $deployment
     * @param  array             $data
     * @return array
     */
    public function filter($query_args, $deployment, $data)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param  string|null $post_name
     * @param  int         $filter_index
     * @param  array       $filter_data
     * @return void
     */
    public function get_admin_fields_html($post_name, $filter_index, $filter_data)
    {
    }
}
/**
 * WC_PRL_Filter_Bundle_Context class for including specific products.
 *
 * @class    WC_PRL_Filter_Bundle_Context
 * @version  4.4.4
 */
class WC_PRL_Filter_Bundle_Context extends \WC_PRL_Filter
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Apply the filter to the query args array.
     *
     * @param  array             $query_args
     * @param  WC_PRL_Deployment $deployment
     * @param  array             $data
     * @return array
     */
    public function filter($query_args, $deployment, $data)
    {
    }
    /**
     * Parse the percentage price value from the source context. -- @see WC_PRL_Filter::get_contextual_value()
     *
     * @param  array  $source_data
     * @param  string $engine_type
     * @param  double $value
     * @return mixed|null
     */
    protected function parse_contextual_value($source_data, $engine_type, $value)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param  string|null $post_name
     * @param  int         $filter_index
     * @param  array       $filter_data
     * @return void
     */
    public function get_admin_fields_html($post_name, $filter_index, $filter_data)
    {
    }
}
/**
 * WC_PRL_Filter_Category_Context class for filtering products based on category.
 *
 * @class    WC_PRL_Filter_Category_Context
 * @version  4.4.4
 */
class WC_PRL_Filter_Category_Context extends \WC_PRL_Filter
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Apply the filter to the query args array.
     *
     * @param array             $query_args
     * @param WC_PRL_Deployment $deployment
     * @param array             $data
     *
     * @return array
     */
    public function filter($query_args, $deployment, $data)
    {
    }
    /**
     * Parse the category value from the source context. -- @see WC_PRL_Filter::get_contextual_value()
     *
     * @param array  $source_data
     * @param string $engine_type
     * @param mixed  $filter_data Filter data.
     *
     * @return mixed|null
     */
    protected function parse_contextual_value($source_data, $engine_type, $filter_data)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param string|null $post_name
     * @param int         $filter_index
     * @param array       $filter_data
     *
     * @return void
     */
    public function get_admin_fields_html($post_name, $filter_index, $filter_data)
    {
    }
}
/**
 * WC_PRL_Filter_Category class for filtering products based on category.
 *
 * @class    WC_PRL_Filter_Category
 * @version  4.4.4
 */
class WC_PRL_Filter_Category extends \WC_PRL_Filter
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Apply the filter to the query args array.
     *
     * @param array             $query_args
     * @param WC_PRL_Deployment $deployment
     * @param array             $data
     *
     * @return array
     */
    public function filter($query_args, $deployment, $data)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param string|null $post_name
     * @param int         $filter_index
     * @param array       $filter_data
     *
     * @return void
     */
    public function get_admin_fields_html($post_name, $filter_index, $filter_data)
    {
    }
}
/**
 * WC_PRL_Filter_Featured class for filtering products based on category.
 *
 * @class    WC_PRL_Filter_Featured
 * @version  4.4.4
 */
class WC_PRL_Filter_Featured extends \WC_PRL_Filter
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Apply the filter to the query args array.
     *
     * @param  array             $query_args
     * @param  WC_PRL_Deployment $deployment
     * @param  array             $data
     * @return array
     */
    public function filter($query_args, $deployment, $data)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param  string|null $post_name
     * @param  int         $filter_index
     * @param  array       $filter_data
     * @return void
     */
    public function get_admin_fields_html($post_name, $filter_index, $filter_data)
    {
    }
}
/**
 * WC_PRL_Filter_Freshness class for filtering products based on creation date.
 *
 * @class    WC_PRL_Filter_Freshness
 * @version  4.4.4
 */
class WC_PRL_Filter_Freshness extends \WC_PRL_Filter
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Apply the filter to the query args array.
     *
     * @param  array             $query_args
     * @param  WC_PRL_Deployment $deployment
     * @param  array             $data
     * @return array
     */
    public function filter($query_args, $deployment, $data)
    {
    }
    /**
     * Get all time-spans available for this filter.
     *
     * @return array
     */
    public function get_filter_values()
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param  string|null $post_name
     * @param  int         $filter_index
     * @param  array       $filter_data
     * @return void
     */
    public function get_admin_fields_html($post_name, $filter_index, $filter_data)
    {
    }
}
/**
 * WC_PRL_Filter_Price_Context class for filtering products based on their price.
 *
 * @class    WC_PRL_Filter_Price_Context
 * @version  4.4.4
 */
class WC_PRL_Filter_Price_Context extends \WC_PRL_Filter
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Apply the filter to the query args array. -- @see WC_PRL_Filter::run()
     *
     * @param  array             $query_args
     * @param  WC_PRL_Deployment $deployment
     * @param  array             $data
     * @return array
     */
    public function filter($query_args, $deployment, $data)
    {
    }
    /**
     * Parse the percentage price value from the source context. -- @see WC_PRL_Filter::get_contextual_value()
     *
     * @param  array  $source_data
     * @param  string $engine_type
     * @param  array  $data
     * @return mixed|null
     */
    protected function parse_contextual_value($source_data, $engine_type, $data)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param  string|null $post_name
     * @param  int         $filter_index
     * @param  array       $filter_data
     * @return void
     */
    public function get_admin_fields_html($post_name, $filter_index, $filter_data)
    {
    }
}
/**
 * WC_PRL_Filter_Price class for filtering products based on their price.
 *
 * @class    WC_PRL_Filter_Price
 * @version  4.4.4
 */
class WC_PRL_Filter_Price extends \WC_PRL_Filter
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Apply the filter to the query args array. -- @see WC_PRL_Filter::run()
     *
     * @param  array             $query_args
     * @param  WC_PRL_Deployment $deployment
     * @param  array             $data
     * @return array
     */
    public function filter($query_args, $deployment, $data)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param  string|null $post_name
     * @param  int         $filter_index
     * @param  array       $filter_data
     * @return void
     */
    public function get_admin_fields_html($post_name, $filter_index, $filter_data)
    {
    }
}
/**
 * WC_PRL_Filter_Product class for including specific products.
 *
 * @class    WC_PRL_Filter_Product
 * @version  4.4.4
 */
class WC_PRL_Filter_Product extends \WC_PRL_Filter
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Apply the filter to the query args array.
     *
     * @param  array             $query_args
     * @param  WC_PRL_Deployment $deployment
     * @param  array             $data
     * @return array
     */
    public function filter($query_args, $deployment, $data)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param  string|null $post_name
     * @param  int         $filter_index
     * @param  array       $filter_data
     * @return void
     */
    public function get_admin_fields_html($post_name, $filter_index, $filter_data)
    {
    }
}
/**
 * WC_PRL_Filter_Recently_Viewed class for filtering products based on customer view history.
 *
 * @class    WC_PRL_Filter_Recently_Viewed
 * @version  4.4.4
 */
class WC_PRL_Filter_Recently_Viewed extends \WC_PRL_Filter
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Apply dynamic filter process.
     *
     * @param  array         $products
     * @param  int           $max_products
     * @param  array         $filter_data
     * @param  WC_PRL_Engine $engine
     * @return void
     */
    public function run(&$products, $max_products, $filter_data, $engine)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param  string|null $post_name
     * @param  int         $filter_index
     * @param  array       $filter_data
     * @return void
     */
    public function get_admin_fields_html($post_name, $filter_index, $filter_data)
    {
    }
}
/**
 * WC_PRL_Filter_Sales class for filtering products based on category.
 *
 * @class    WC_PRL_Filter_Sales
 * @version  4.4.4
 */
class WC_PRL_Filter_Sales extends \WC_PRL_Filter
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Apply the filter to the query args array.
     *
     * @param  array             $query_args
     * @param  WC_PRL_Deployment $deployment
     * @param  array             $data
     * @return array
     */
    public function filter($query_args, $deployment, $data)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param  string|null $post_name
     * @param  int         $filter_index
     * @param  array       $filter_data
     * @return void
     */
    public function get_admin_fields_html($post_name, $filter_index, $filter_data)
    {
    }
}
/**
 * WC_PRL_Filter_Stock_Status class for filtering products based on stock status.
 *
 * @class    WC_PRL_Filter_Stock_Status
 * @version  4.4.4
 */
class WC_PRL_Filter_Stock_Status extends \WC_PRL_Filter
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Apply dynamic filter process.
     *
     * @param  array         $products
     * @param  int           $max_products
     * @param  array         $filter_data
     * @param  WC_PRL_Engine $engine
     * @return void
     */
    public function run(&$products, $max_products, $filter_data, $engine)
    {
    }
    /**
     * Alters the raw query to add sorting tables support.
     *
     * @param  array $args
     * @return array
     */
    public function add_order_clauses($args)
    {
    }
    /**
     * Removes any addition in the query.
     *
     * @return void
     */
    public function remove_amp()
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param  string|null $post_name
     * @param  int         $filter_index
     * @param  array       $filter_data
     * @return void
     */
    public function get_admin_fields_html($post_name, $filter_index, $filter_data)
    {
    }
}
/**
 * WC_PRL_Filter_Tag_Context class for filtering products based on category.
 *
 * @class    WC_PRL_Filter_Tag_Context
 * @version  4.4.4
 */
class WC_PRL_Filter_Tag_Context extends \WC_PRL_Filter
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Apply the filter to the query args array.
     *
     * @param  array             $query_args
     * @param  WC_PRL_Deployment $deployment
     * @param  array             $data
     * @return array
     */
    public function filter($query_args, $deployment, $data)
    {
    }
    /**
     * Parse the tag value from the source context. -- @see WC_PRL_Filter::get_contextual_value()
     *
     * @param  array  $source_data
     * @param  string $engine_type
     * @param  array  $filter_data
     * @return mixed|null
     */
    protected function parse_contextual_value($source_data, $engine_type, $filter_data)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param  string|null $post_name
     * @param  int         $filter_index
     * @param  array       $filter_data
     * @return void
     */
    public function get_admin_fields_html($post_name, $filter_index, $filter_data)
    {
    }
}
/**
 * WC_PRL_Filter_Tag class for filtering products based on category.
 *
 * @class    WC_PRL_Filter_Tag
 * @version  4.4.4
 */
class WC_PRL_Filter_Tag extends \WC_PRL_Filter
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Apply the filter to the query args array.
     *
     * @param  array             $query_args
     * @param  WC_PRL_Deployment $deployment
     * @param  array             $data
     * @return array
     */
    public function filter($query_args, $deployment, $data)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param  string|null $post_name
     * @param  int         $filter_index
     * @param  array       $filter_data
     * @return void
     */
    public function get_admin_fields_html($post_name, $filter_index, $filter_data)
    {
    }
}
/**
 * WC_PRL_Filter_Vendor_Context class for filtering products based on Vendor.
 *
 * @class    WC_PRL_Filter_Vendor_Context
 * @version  4.4.4
 */
class WC_PRL_Filter_Vendor_Context extends \WC_PRL_Filter
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Apply the filter to the query args array.
     *
     * @param  array             $query_args
     * @param  WC_PRL_Deployment $deployment
     * @param  array             $data
     * @return array
     */
    public function filter($query_args, $deployment, $data)
    {
    }
    /**
     * Parse the tag value from the source context. -- @see WC_PRL_Filter::get_contextual_value()
     *
     * @param  array  $source_data
     * @param  string $engine_type
     * @param  array  $filter_data
     * @return mixed|null
     */
    protected function parse_contextual_value($source_data, $engine_type, $filter_data)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param  string|null $post_name
     * @param  int         $filter_index
     * @param  array       $filter_data
     * @return void
     */
    public function get_admin_fields_html($post_name, $filter_index, $filter_data)
    {
    }
}
/**
 * WC_PRL_Filter_Vendor class for filtering products based on Vendor.
 *
 * @class    WC_PRL_Filter_Vendor
 * @version  4.4.4
 */
class WC_PRL_Filter_Vendor extends \WC_PRL_Filter
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Apply the filter to the query args array.
     *
     * @param  array             $query_args
     * @param  WC_PRL_Deployment $deployment
     * @param  array             $data
     * @return array
     */
    public function filter($query_args, $deployment, $data)
    {
    }
    /*
    	---------------------------------------------------*/
    /*
    		Force methods.                                   */
    /*---------------------------------------------------*/
    /**
     * Get admin html for filter inputs.
     *
     * @param  string|null $post_name
     * @param  int         $filter_index
     * @param  array       $filter_data
     * @return void
     */
    public function get_admin_fields_html($post_name, $filter_index, $filter_data)
    {
    }
}
/**
 * Locations that are used only in cart context.
 *
 * @class    WC_PRL_Location_Cart_Page
 * @version  1.3.3
 */
class WC_PRL_Location_Cart_Page extends \WC_PRL_Location
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Check if the current location page is active.
     *
     * @return boolean
     */
    public function is_active()
    {
    }
    /**
     * Setup all supported hooks based on the location id.
     *
     * @return void
     */
    protected function setup_hooks()
    {
    }
}
/**
 * Locations that are used only in cart context.
 *
 * @class    WC_PRL_Location_Checkout
 * @version  1.3.3
 */
class WC_PRL_Location_Checkout extends \WC_PRL_Location
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Check if the current location page is active.
     *
     * @return boolean
     */
    public function is_active()
    {
    }
    /**
     * Setup all supported hooks based on the location id.
     *
     * @return void
     */
    protected function setup_hooks()
    {
    }
}
/**
 * Locations that are used only in cart context.
 *
 * @class    WC_PRL_Location_Order_Received
 * @version  4.4.3
 */
class WC_PRL_Location_Order_Received extends \WC_PRL_Location
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Check if the current location page is active.
     *
     * @return boolean
     */
    public function is_active()
    {
    }
    /**
     * Setup all supported hooks based on the location id.
     *
     * @return void
     */
    protected function setup_hooks()
    {
    }
}
/**
 * Locations that are used only in cart context.
 *
 * @class    WC_PRL_Location_Pay_Page
 * @version  1.3.3
 */
class WC_PRL_Location_Pay_Page extends \WC_PRL_Location
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Check if the current location page is active.
     *
     * @return boolean
     */
    public function is_active()
    {
    }
    /**
     * Setup all supported hooks based on the location id.
     *
     * @return void
     */
    protected function setup_hooks()
    {
    }
}
/**
 * Locations that are used only in cart context.
 *
 * @class    WC_PRL_Location_Product_Archive
 * @version  1.3.3
 */
class WC_PRL_Location_Product_Archive extends \WC_PRL_Location
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Check if the current location page is active.
     *
     * @return boolean
     */
    public function is_active()
    {
    }
    /**
     * Setup all supported hooks based on the location id.
     *
     * @return void
     */
    protected function setup_hooks()
    {
    }
}
/**
 * Locations that are used only in cart context.
 *
 * @class    WC_PRL_Location_Product_Details
 * @version  4.4.2
 */
class WC_PRL_Location_Product_Details extends \WC_PRL_Location
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Check if the current location page is active.
     *
     * @return boolean
     */
    public function is_active()
    {
    }
    /**
     * Only firings from the product page itself belong here. Product loops on the page (related products, carousels, quick views) set up their own post object for each item and can fire the same template hooks, even for the product being viewed.
     *
     * @since 4.4.2
     *
     * @return boolean
     */
    public function is_in_context()
    {
    }
    /**
     * Setup all supported hooks based on the location id.
     *
     * @return void
     */
    protected function setup_hooks()
    {
    }
}
/**
 * Locations that are used only in cart context.
 *
 * @class    WC_PRL_Location_Shop
 * @version  1.0.0
 */
class WC_PRL_Location_Shop extends \WC_PRL_Location
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Check if the current location page is active.
     *
     * @return boolean
     */
    public function is_active()
    {
    }
    /**
     * Get the supported actions.
     *
     * @override
     *
     * @param  string $context
     * @return array
     */
    public function get_hooks($context = 'edit')
    {
    }
    /**
     * Setup all supported hooks based on the location id.
     *
     * @return void
     */
    protected function setup_hooks()
    {
    }
}
/**
 * Main plugin class.
 *
 * @class    WC_Product_Recommendations
 * @version  4.4.4
 */
class WC_Product_Recommendations
{
    /**
     * Plugin version.
     *
     * @var string
     */
    private $version = '4.4.4';
    /**
     * Min required WC version.
     *
     * @var string
     */
    private $wc_min_version = '11.1.0';
    /**
     * The single instance of the class.
     *
     * @var WC_Product_Recommendations|null
     */
    protected static $_instance = \null;
    /**
     * Loaded locations.
     *
     * @var WC_PRL_Locations|null
     */
    public $locations;
    /**
     * Deployments factory.
     *
     * @var WC_PRL_Deployments
     */
    public $deployments;
    /**
     * Filters Collection class.
     *
     * @var WC_PRL_Filters
     */
    public $filters;
    /**
     * Amplifiers Collection class.
     *
     * @var WC_PRL_Amplifiers
     */
    public $amplifiers;
    /**
     * Visibility Conditions Collection class.
     *
     * @var WC_PRL_Conditions
     */
    public $conditions;
    /**
     * DB Helper.
     *
     * @var WC_PRL_DB
     */
    public $db;
    /**
     * Templates functions.
     *
     * @var WC_PRL_Templates
     */
    public $templates;
    /**
     * Main WC_Product_Recommendations instance. Ensures only one instance is loaded or can be loaded - @see 'WC_PRL()'.
     *
     * @static
     * @return  WC_Product_Recommendations
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
     * Make stuff.
     */
    protected function __construct()
    {
    }
    /**
     * Plugin URL getter.
     *
     * @return string
     */
    public function get_plugin_url()
    {
    }
    /**
     * Plugin path getter.
     *
     * @return string
     */
    public function get_plugin_path()
    {
    }
    /**
     * Plugin base path name getter.
     *
     * @return string
     */
    public function get_plugin_basename()
    {
    }
    /**
     * Plugin version getter.
     *
     * @param  boolean $base
     * @param  string  $version
     * @return string
     */
    public function get_plugin_version($base = \false, $version = '')
    {
    }
    /**
     * Get the file modified time as a cache buster if we're in dev mode.
     *
     * @since 4.1.0
     *
     * @param  string $file
     * @return string|int|false
     */
    public function get_file_version($file)
    {
    }
    /**
     * Define constants if not present.
     *
     * @since  1.2.4
     *
     * @param string $name  Constant name.
     * @param mixed  $value Constant value.
     * @return void
     */
    protected function maybe_define_constant($name, $value)
    {
    }
    /**
     * Indicates whether the plugin is fully initialized.
     *
     * @since  1.2.4
     *
     * @return boolean
     */
    public function is_plugin_initialized()
    {
    }
    /**
     * Fire in the hole!
     *
     * @return void
     */
    public function initialize_plugin()
    {
    }
    /**
     * Queues the WooCommerce version incompatibility notice.
     *
     * Runs on 'admin_notices' before 'WC_PRL_Admin_Notices::output_notices()' so that no translation
     * function is called before 'init'.
     *
     * @since 4.4.1
     *
     * @return void
     */
    public function wc_incompatibility_notice()
    {
    }
    /**
     * Queues the PHP version incompatibility notice.
     *
     * Runs on 'admin_notices' before 'WC_PRL_Admin_Notices::output_notices()' so that no translation
     * function is called before 'init'.
     *
     * @since 4.4.1
     *
     * @return void
     */
    public function php_incompatibility_notice()
    {
    }
    /**
     * Constants.
     *
     * @return void
     */
    public function define_constants()
    {
    }
    /**
     * A simple dumb datastore for sharing information across our plugins.
     *
     * @since  1.3.0
     *
     * @return void
     */
    private function maybe_create_store()
    {
    }
    /**
     * Includes.
     *
     * @return void
     */
    public function includes()
    {
    }
    /**
     * Admin & AJAX functions and hooks.
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
    public function load_translation()
    {
    }
    /**
     * Returns URL to a doc or support resource.
     *
     * @since  1.3.0
     *
     * @param  string $handle
     * @return string|false
     */
    public function get_resource_url($handle)
    {
    }
    /**
     * Log using 'WC_Logger' class.
     *
     * @param  string $message
     * @param  string $level
     * @param  string $context
     * @return void
     */
    public function log($message, $level, $context)
    {
    }
    /**
     * Handle plugin activation process.
     *
     * @since  2.1.0
     *
     * @return void
     */
    public function on_activation()
    {
    }
    /**
     * Handle plugin deactivation process.
     *
     * @since  2.1.0
     *
     * @return void
     */
    public function on_deactivation()
    {
    }
    /**
     * Checks if the current admin screen belongs to PRL extension.
     *
     * @return  bool
     */
    public function is_current_screen()
    {
    }
    /**
     * Checks if the current admin screen is the legacy reports tab.
     *
     * @return  bool
     */
    public function is_legacy_reports_screen()
    {
    }
    /**
     * Get PRL screen ids.
     */
    public function get_screen_ids()
    {
    }
}
/**
 * Get engine types.
 *
 * @return array
 */
function wc_prl_get_engine_types()
{
}
/**
 * Get engine type label.
 *
 * @param  string $slug
 * @return string
 */
function wc_prl_get_engine_type_label($slug)
{
}
/**
 * Get contextual engine types.
 * Hint: Used to limit the source data from the deployment -- @see WC_PRL_Deployment::get_source_data()
 *
 * @return array
 */
function wc_prl_get_contextual_engine_types()
{
}
/**
 * Get engines by type.
 *
 * @param  string $type
 * @param  int    $limit
 * @return array
 */
function wc_prl_get_engines_by_type($type, $limit = 5)
{
}
/**
 * Clear all transients cache for engine data.
 *
 * @deprecated 4.0.0
 *
 * @param  int $post_id
 * @return void
 */
function wc_prl_delete_engine_transients($post_id = 0)
{
}
/**
 * Clear all transients cache for prl reports.
 *
 * @since 1.0.5
 *
 * @return void
 */
function wc_prl_invalidate_reports()
{
}
/**
 * Clear all transients cache for prl reports.
 *
 * @since 1.0.5
 *
 * @param  string $type
 * @return bool
 */
function wc_prl_should_update_report($type = '')
{
}
/**
 * Get shopping session interval (in seconds).
 *
 * @return int
 */
function wc_prl_get_shopping_session_interval()
{
}
/**
 * Get tracking status.
 *
 * @return bool
 */
function wc_prl_tracking_enabled()
{
}
/**
 * Get admin screens status.
 *
 * @since 4.4.0
 *
 * @return bool
 */
function wc_prl_admin_screens_enabled()
{
}
/**
 * Get cache regeneration threshold.
 *
 * @since 1.0.0
 * @since 4.1.0 Made the engine parameter optional.
 *
 * @param  WC_PRL_Engine $engine Engine instance (optional).
 * @return int
 */
function wc_prl_get_cache_regeneration_threshold($engine = \null)
{
}
/**
 * Get max views event to store per cookie.
 *
 * @return int
 */
function wc_prl_get_clicks_max_cookie_num()
{
}
/**
 * Get max recently view products to store per cookie.
 *
 * @since 1.1.0
 *
 * @return int
 */
function wc_prl_get_recently_views_max_cookie_num()
{
}
/**
 * Get all recently viewed products.
 *
 * @since 4.1.0
 *
 * @param string $cookie Optional. Cookie value.
 * @return int[]
 */
function wc_prl_get_recently_viewed_cookie_products($cookie = \null)
{
}
/**
 * Whether or not to render deployments using AJAX.
 *
 * @since 1.1.0
 *
 * @param  string $context
 * @return bool
 */
function wc_prl_render_using_ajax($context = 'view')
{
}
/**
 * Helper function to sort conditions execution order based on complexity.
 *
 * @return int
 */
function wc_prl_complexity_cmp($a, $b)
{
}
/**
 * Get engine instance.
 *
 * @param  int|string $id Engine ID.
 * @return WC_PRL_Engine|false
 */
function wc_prl_get_engine($id)
{
}
/**
 * Get debug status.
 *
 * @return bool
 */
function wc_prl_debug_enabled()
{
}
/**
 * Get engine instance.
 *
 * @param  string $table_group
 * @return bool
 */
function wc_prl_lookup_tables_enabled($table_group = 'product')
{
}
/**
 * Builds terms tree of a flatten terms array.
 *
 * @since  1.2.5
 *
 * @param  array $terms Array of WP_Term objects.
 * @param  int   $parent_id
 * @return array
 */
function wc_prl_build_taxonomy_tree($terms, $parent_id = 0)
{
}
/**
 * Prints <option/> elements for a given terms tree.
 *
 * @since  1.2.5
 *
 * @param  array $terms Array of WP_Term objects.
 * @param  array $selected_ids
 * @param  array $args
 * @return void
 */
function wc_prl_print_taxonomy_tree_options($terms, $selected_ids = array(), $args = array())
{
}
/**
 * Get a key-value list of all global attribute taxonomies.
 *
 * @since 1.3.0
 *
 * @return array<string, string>
 */
function wc_prl_get_attribute_taxonomies()
{
}
/**
 * Get formatted screen id.
 *
 * @since 1.4.8
 *
 * @param  string $screen_id Screen ID.
 * @return string
 */
function wc_prl_get_formatted_screen_id($screen_id)
{
}
/**
 * Returns whether the give hook name is a Custom Location hook.
 *
 * @since 1.4.9
 *
 * @param  string $hook Hook name.
 * @return bool
 */
function wc_prl_is_cpt_hook($hook)
{
}
/**
 * Is a unix timestamp.
 *
 * @since 2.0.0
 *
 * @param mixed $stamp Value to check.
 * @return bool
 */
function wc_prl_is_unix_timestamp($stamp)
{
}
/**
 * Prints the weight selector of an amplifier.
 *
 * @param mixed  $weight     Weight.
 * @param string $input_name Input name.
 * @return void
 */
function wc_prl_print_weight_select($weight, $input_name)
{
}
/**
 * Formats an amount with the store currency symbol.
 *
 * @param mixed $amount Amount.
 * @return string
 */
function wc_prl_print_currency_amount($amount)
{
}
/**
 * Returns the main instance of WC_Product_Recommendations to prevent the need to use globals.
 *
 * @return  WC_Product_Recommendations
 */
function WC_PRL()
{
}