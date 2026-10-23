<?php
/**
 * Generated stub declarations for woocommerce-shipping-australia-post 2.8.10.
 * @see https://github.com/woocommerce/php-stubs
 */

namespace {
    /**
     * Shared read-only helpers for Australia Post abilities.
     */
    class WC_Shipping_Australia_Post_Abilities_Helper
    {
        /**
         * Shipping method ID.
         */
        private const METHOD_ID = 'australia_post';
        /**
         * Sensitive setting key fragments that must never be returned by abilities.
         */
        private const SENSITIVE_KEY_FRAGMENTS = array('api_key', 'apikey', 'password', 'token', 'secret', 'oauth', 'credential', 'account', 'meter', 'customer', 'contract', 'username');
        /**
         * Check whether the current user can read shipping configuration.
         *
         * @return bool
         */
        public static function can_manage_woocommerce(): bool
        {
        }
        /**
         * Return non-secret Australia Post shipping method configuration.
         *
         * @param array $input Ability input.
         *
         * @return array|WP_Error
         */
        public static function get_rate_configuration(array $input = array())
        {
        }
        /**
         * Return Australia Post service and package catalog data.
         *
         * @param array $input Ability input.
         *
         * @return array
         */
        public static function get_service_catalog(array $input = array()): array
        {
        }
        /**
         * Return method instances.
         *
         * @param int  $filter_instance_id Optional instance ID filter.
         * @param bool $include_services    Include service settings.
         * @param bool $include_boxes       Include box settings.
         *
         * @return array
         */
        private static function get_method_instances(int $filter_instance_id = 0, bool $include_services = \true, bool $include_boxes = \true): array
        {
        }
        /**
         * Return Australia Post shipping method contexts from WooCommerce zones.
         *
         * @param int $filter_instance_id Optional instance ID filter.
         *
         * @return array
         */
        private static function get_method_contexts(int $filter_instance_id = 0): array
        {
        }
        /**
         * Append Australia Post methods from a shipping zone.
         *
         * @param array  $contexts           Method context accumulator.
         * @param int    $zone_id            Shipping zone ID.
         * @param string $zone_name          Shipping zone name.
         * @param array  $shipping_methods   Zone shipping methods.
         * @param int    $filter_instance_id Optional instance ID filter.
         *
         * @return void
         */
        private static function append_zone_method_contexts(array &$contexts, int $zone_id, string $zone_name, array $shipping_methods, int $filter_instance_id = 0): void
        {
        }
        /**
         * Sort method instances by the same stable fields previously returned by direct SQL.
         *
         * @param array $a First method instance.
         * @param array $b Second method instance.
         *
         * @return int
         */
        private static function sort_method_instances(array $a, array $b): int
        {
        }
        /**
         * Return non-secret global settings.
         *
         * @return array
         */
        private static function get_global_settings(): array
        {
        }
        /**
         * Return environment status relevant to Australia Post.
         *
         * @return array
         */
        private static function get_environment_status(): array
        {
        }
        /**
         * Return instance settings.
         *
         * @param int         $instance_id     Instance ID.
         * @param object|null $shipping_method Shipping method instance.
         *
         * @return array
         */
        private static function get_instance_settings(int $instance_id, $shipping_method = \null): array
        {
        }
        /**
         * Return a safe setting value.
         *
         * @param array  $settings Settings.
         * @param string $key      Setting key.
         * @param mixed  $fallback Default value.
         *
         * @return mixed
         */
        private static function get_setting(array $settings, string $key, $fallback)
        {
        }
        /**
         * Return configured services.
         *
         * @param array $configured_services Configured service settings.
         *
         * @return array
         */
        private static function get_configured_services(array $configured_services): array
        {
        }
        /**
         * Return service catalog.
         *
         * @param string $scope Service scope.
         *
         * @return array
         */
        private static function get_services(string $scope): array
        {
        }
        /**
         * Return optional extras catalog.
         *
         * @return array
         */
        private static function get_optional_extras(): array
        {
        }
        /**
         * Return default configured boxes merged with saved box enablement and custom boxes.
         *
         * @param array $configured_boxes Configured boxes.
         *
         * @return array
         */
        private static function get_configured_boxes(array $configured_boxes): array
        {
        }
        /**
         * Return default box catalog.
         *
         * @return array
         */
        private static function get_default_boxes(): array
        {
        }
        /**
         * Return letter size catalog.
         *
         * @return array
         */
        private static function get_letter_sizes(): array
        {
        }
        /**
         * Format a box for ability output.
         *
         * @param array  $box    Box settings.
         * @param string $source Box source.
         *
         * @return array
         */
        private static function format_box(array $box, string $source): array
        {
        }
        /**
         * Return nullable integer setting.
         *
         * @param array  $settings Settings.
         * @param string $key      Setting key.
         *
         * @return int|null
         */
        private static function get_nullable_integer_setting(array $settings, string $key)
        {
        }
        /**
         * Return nullable float setting.
         *
         * @param array  $settings Settings.
         * @param string $key      Setting key.
         *
         * @return float|null
         */
        private static function get_nullable_float_setting(array $settings, string $key)
        {
        }
        /**
         * Return default box packer library.
         *
         * @return string
         */
        private static function get_default_box_packer_library(): string
        {
        }
        /**
         * Include an Australia Post data file.
         *
         * @param string $file File name.
         *
         * @return array
         */
        private static function include_data_file(string $file): array
        {
        }
        /**
         * Remove sensitive settings recursively.
         *
         * @param array $settings Settings.
         *
         * @return array
         */
        private static function remove_sensitive_settings(array $settings): array
        {
        }
        /**
         * Check whether a setting key is sensitive.
         *
         * @param string $key Setting key.
         *
         * @return bool
         */
        private static function is_sensitive_key(string $key): bool
        {
        }
    }
    /**
     * Ability definition for reading Australia Post rate configuration.
     */
    class WC_Shipping_Australia_Post_Get_Rate_Configuration_Ability implements \Automattic\WooCommerce\Abilities\AbilityDefinition
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
         * Get ability registration arguments.
         *
         * @return array
         */
        public static function get_registration_args(): array
        {
        }
        /**
         * Execute the ability.
         *
         * @param array $input Ability input.
         *
         * @return array|WP_Error
         */
        public static function execute($input = array())
        {
        }
        /**
         * Get input schema.
         *
         * @return array
         */
        private static function get_input_schema(): array
        {
        }
        /**
         * Get output schema.
         *
         * @return array
         */
        private static function get_output_schema(): array
        {
        }
        /**
         * Get schema for an Australia Post shipping method instance.
         *
         * @return array
         */
        private static function get_instance_schema(): array
        {
        }
        /**
         * Get schema for a configured Australia Post service.
         *
         * @return array
         */
        private static function get_configured_service_schema(): array
        {
        }
        /**
         * Get schema for an Australia Post package box.
         *
         * @return array
         */
        private static function get_box_schema(): array
        {
        }
    }
    /**
     * Ability definition for reading Australia Post service and package catalogs.
     */
    class WC_Shipping_Australia_Post_Get_Service_Catalog_Ability implements \Automattic\WooCommerce\Abilities\AbilityDefinition
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
         * Get ability registration arguments.
         *
         * @return array
         */
        public static function get_registration_args(): array
        {
        }
        /**
         * Execute the ability.
         *
         * @param array $input Ability input.
         *
         * @return array|WP_Error
         */
        public static function execute($input = array())
        {
        }
        /**
         * Get input schema.
         *
         * @return array
         */
        private static function get_input_schema(): array
        {
        }
        /**
         * Get output schema.
         *
         * @return array
         */
        private static function get_output_schema(): array
        {
        }
        /**
         * Get schema for a catalog service.
         *
         * @return array
         */
        private static function get_service_schema(): array
        {
        }
        /**
         * Get schema for a package box.
         *
         * @return array
         */
        private static function get_box_schema(): array
        {
        }
        /**
         * Get schema for a letter-size package catalog entry.
         *
         * @return array
         */
        private static function get_letter_size_schema(): array
        {
        }
    }
}
namespace WooCommerce\AustraliaPost {
    /**
     * Logger class.
     */
    class Logger
    {
        /**
         * WC Log context.
         *
         * @var string
         */
        const CONTEXT = 'woocommerce-shipping-australia-post';
        /**
         * WC Logger
         *
         * @var \WC_Logger
         */
        private \WC_Logger $logger;
        /**
         * Is debug enabled.
         *
         * @var bool
         */
        private bool $is_debug_enabled;
        /**
         * Constructor.
         *
         * @param boolean $is_debug_enabled Flag whether debug enabled or not.
         */
        public function __construct(bool $is_debug_enabled)
        {
        }
        /**
         * Check if debug is enabled.
         *
         * @return bool
         */
        private function is_debug_enabled(): bool
        {
        }
        /**
         * Add a debug log entry.
         * Only logs if debug is enabled.
         *
         * @param string $message Message to display.
         * @param array  $data    Additional contextual data to pass. Any 'source' key is replaced with the plugin source.
         *
         * @return void
         */
        public function debug(string $message, array $data = array())
        {
        }
    }
    /**
     * Notifier class.
     */
    class Notifier
    {
        /**
         * WC Session variable key
         *
         * @var string
         */
        const WC_SESSION_KEY = 'wc_shipping_australia_post_notices';
        /**
         * Valid notice types.
         *
         * @var array
         */
        private static array $valid_notice_types = array('error', 'success', 'notice');
        /**
         * Is debug enabled.
         *
         * @var bool
         */
        private bool $is_debug_enabled;
        /**
         * Constructor.
         *
         * @param bool $is_debug_enabled Is debug enabled.
         */
        public function __construct(bool $is_debug_enabled)
        {
        }
        /**
         * Add a debug notice.
         * Debug notices are only displayed if debug is enabled and the user has the manage_options capability.
         *
         * @param string $message Message to display.
         * @param string $type    Type of notice - either error, success or notice.
         * @param array  $data    Additional data to pass.
         * @param string $group   Optional. Group to categorize notices.
         */
        public function debug(string $message, string $type = 'notice', array $data = array(), string $group = ''): void
        {
        }
        /**
         * Check if debug is enabled.
         *
         * @return bool
         */
        private function is_debug_enabled(): bool
        {
        }
        /**
         * Validate notice type.
         *
         * If an invalid notice type is passed, it will default to 'notice'.
         *
         * @param string $type Type of notice - either error, success or notice.
         *
         * @return mixed|string
         */
        public function validate_type(string $type)
        {
        }
        /**
         * Add notice if not already added.
         *
         * If an invalid notice type is passed, it will default to 'notice'.
         *
         * @param string $message Message to display.
         * @param string $type    Type of notice - either error, success or notice.
         * @param array  $data    Additional data to pass.
         * @param string $group   Optional. Group to categorize notices.
         *
         * @return void
         */
        public function maybe_add_notice(string $message, string $type = 'notice', array $data = array(), string $group = ''): void
        {
        }
        /**
         * Check if a notice has already been added.
         *
         * @param string $message The text to display in the notice.
         * @param string $type    Optional. The name of the notice type - either error, success or notice.
         * @param array  $data    Optional. Additional data to pass.
         * @param string $group   Optional. Group to categorize notices.
         *
         * @return bool
         */
        public function has_notice(string $message, string $type = 'notice', array $data = array(), string $group = ''): bool
        {
        }
        /**
         * Format a notice.
         *
         * @param string $message Message to display.
         * @param array  $data    Additional data to pass.
         * @param string $group   Group to categorize notices.
         *
         * @return array
         */
        private function format_notice(string $message, array $data, string $group): array
        {
        }
        /**
         * Add a notice.
         *
         * @param string $message Message to display.
         * @param string $type    Type of notice - either error, success or notice.
         * @param array  $data    Additional data to pass.
         * @param string $group   Optional. Group to categorize notices.
         */
        private function add_notice(string $message, string $type, array $data = array(), string $group = ''): void
        {
        }
        /**
         * Check if WC Session exists.
         *
         * @return bool
         */
        public static function wc_session_exists(): bool
        {
        }
        /**
         * Add an info notice.
         *
         * @param string $message Message to display.
         * @param array  $data    Additional data to pass.
         * @param string $group   Optional. Group to categorize notices.
         */
        public function info(string $message, array $data = array(), string $group = '')
        {
        }
        /**
         * Add an error notice.
         *
         * @param string $message Message to display.
         * @param array  $data    Additional data to pass.
         * @param string $group   Optional. Group to categorize notices.
         */
        public function error(string $message, array $data = array(), string $group = '')
        {
        }
        /**
         * Add a success notice.
         *
         * @param string $message Message to display.
         * @param array  $data    Additional data to pass.
         * @param string $group   Optional. Group to categorize notices.
         */
        public function success(string $message, array $data = array(), string $group = '')
        {
        }
        /**
         * Print all notices.
         */
        public function print_notices(): void
        {
        }
        /**
         * Get all notices.
         *
         * @return array
         */
        public static function get_notices(): array
        {
        }
        /**
         * Clear all notices.
         *
         * @param string $group Optional. Group of notices to clear.
         */
        public static function clear_notices(string $group = ''): void
        {
        }
        /**
         * Maybe get formatted message.
         *
         * @param string $message Message to display.
         * @param string $data    Additional data to pass.
         *
         * @return string
         */
        public function maybe_get_formatted_message(string $message, string $data = ''): string
        {
        }
    }
}
namespace {
    /**
     * WC_Australia_Post_Privacy class.
     */
    class WC_Australia_Post_Privacy extends \WC_Abstract_Privacy
    {
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Gets the message of the privacy to display.
         */
        public function get_privacy_message(): string
        {
        }
    }
    /**
     * Registers Australia Post ability definitions with WooCommerce.
     */
    class WC_Shipping_Australia_Post_Abilities
    {
        /**
         * Initialize ability registration.
         *
         * @return void
         */
        public static function init(): void
        {
        }
        /**
         * Add Australia Post ability definition classes to WooCommerce's loader.
         *
         * @param array $classes Ability definition class names.
         *
         * @return array
         */
        public static function add_ability_definition_classes(array $classes): array
        {
        }
    }
    /**
     * WC_Shipping_Australia_Post_Init class.
     */
    class WC_Shipping_Australia_Post_Init
    {
        /**
         * Plugin's version.
         *
         * @since 2.4.0
         *
         * @var string
         */
        public string $version = \WC_SHIPPING_AUSTRALIA_POST_VERSION;
        /**
         * Class Instance.
         *
         * @var WC_Shipping_Australia_Post_Init|null
         */
        private static ?self $instance = \null;
        /**
         * Get the class instance
         */
        public static function get_instance(): ?self
        {
        }
        /**
         * Initialize the plugin's public actions
         */
        public function __construct()
        {
        }
        /**
         * Environment_check function.
         *
         * @return void
         */
        public function environment_check()
        {
        }
        /**
         * Include classes.
         *
         * @since 2.4.0
         * @version 2.4.0
         * @return void
         */
        public function includes()
        {
        }
        /**
         * Register WordPress Abilities when WooCommerce's ability loader is available.
         *
         * @return void
         */
        private function init_abilities(): void
        {
        }
        /**
         * Add Australia Post shipping method to WC
         *
         * @param array $methods List of shipping methods.
         *
         * @return array
         */
        public function add_method(array $methods): array
        {
        }
        /**
         * Localisation
         */
        public function load_textdomain()
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
         * Plugin page links
         *
         * @param array $links List of plugin action links.
         */
        public function plugin_links(array $links): array
        {
        }
        /**
         * WooCommerce not installed notice
         */
        public function wc_deactivated()
        {
        }
        /**
         * Checks the plugin version
         *
         * @since 2.4.0
         * @version 2.4.0
         * @return void
         */
        public function maybe_install()
        {
        }
        /**
         * Update/migration script
         *
         * @since 2.4.0
         * @version 2.4.0
         */
        public function install()
        {
        }
        /**
         * Show the user a notice for plugin updates
         *
         * @since 2.4.0
         */
        public function upgrade_notice()
        {
        }
        /**
         * Turn of the dismissible upgrade notice.
         *
         * @since 2.4.0
         */
        public function dismiss_upgrade_notice()
        {
        }
        /**
         * Helper method to check whether given zone_id has australia_post method instance.
         *
         * @param int $zone_id Zone ID.
         *
         * @return bool True if given zone_id has australia_post method instance
         * @since 2.4.0
         */
        public function is_zone_has_australia_post(int $zone_id): bool
        {
        }
    }
    /**
     * WC_Shipping_Australia_Post class.
     */
    class WC_Shipping_Australia_Post extends \WC_Shipping_Method
    {
        /**
         * Default API.
         *
         * @var string
         */
        private string $default_api_key = 'smUZLviAk6JIkIHvL0xgzP1yToSu7iQJ';
        // gitleaks:allow.
        /**
         * Max weight, Used for weight based packing only.
         *
         * @var float
         */
        private float $max_weight;
        /**
         * Australia Post services.
         *
         * @var array
         */
        public array $services;
        /**
         * Australia Post services extra cover.
         *
         * @var array
         */
        public array $extra_cover;
        /**
         * Australia Post services that can use Signature on Delivery.
         *
         * @var array
         */
        public array $delivery_confirmation;
        /**
         * Australia Post API endpoints.
         *
         * @var array
         */
        private array $endpoints = array('calculation' => 'https://digitalapi.auspost.com.au/postage/{type}/{doi}/calculate.json', 'services' => 'https://digitalapi.auspost.com.au/postage/{type}/{doi}/service.json');
        /**
         * Four of the external territories of Australia are officially assigned their own country codes in ISO 3166-1.
         *
         * @var array
         */
        private array $au_territories = array('AU', 'CC', 'CX', 'HM', 'NF');
        /**
         * Signature on Delivery cost.
         * Based on this link : https://auspost.com.au/business/shipping/domestic-shipping/optional-extras-domestic.
         *
         * @var float
         */
        private float $sod_cost = 2.95;
        /**
         * International Signature on Delivery cost.
         * Based on this link : https://auspost.com.au/sending/send-overseas/features-extras-international.
         *
         * @var float
         */
        private float $int_sod_cost = 5.5;
        /**
         * Found shipping rates after calculation shipping.
         *
         * @var array
         */
        private array $found_rates;
        /**
         * Is the shipping destination international?
         *
         * @var bool
         */
        private bool $is_international = \false;
        /**
         * Default Box Sizes.
         *
         * @var array
         */
        public array $default_boxes;
        /**
         * Letter Sizes.
         *
         * @var array
         */
        private array $letter_sizes;
        /**
         * Packing Method
         *
         * @var string
         */
        private string $packing_method;
        /**
         * Shipping prices excluding tax.
         *
         * @var string
         */
        private string $excluding_tax;
        /**
         * Origin postal code.
         *
         * @var string
         */
        private string $origin;
        /**
         * Api Key.
         *
         * @var string
         */
        private string $api_key;
        /**
         * Custom boxes.
         *
         * @var array
         */
        private array $boxes;
        /**
         * Enabled Services.
         *
         * @var array
         */
        public array $custom_services;
        /**
         * Show 'all' rates or not
         *
         * @var string
         */
        private string $offer_rates;
        /**
         * Box packer library.
         *
         * @var string
         */
        public string $box_packer_library;
        /**
         * Enable debug mode.
         *
         * @var bool
         */
        private bool $debug;
        /**
         * Notifier instance.
         *
         * @var WooCommerce\AustraliaPost\Notifier
         */
        public \WooCommerce\AustraliaPost\Notifier $notifier;
        /**
         * Logger instance.
         *
         * @var WooCommerce\AustraliaPost\Logger
         */
        public \WooCommerce\AustraliaPost\Logger $logger;
        /**
         * Use satchel rates. 'enable', 'disable' or 'prioritize'.
         *
         * @var string
         */
        private string $satchel_rates;
        /**
         * __construct function.
         *
         * @param int $instance_id Instance Id.
         * @return void
         */
        public function __construct($instance_id = 0)
        {
        }
        /**
         * Is_available function.
         *
         * @param array $package Package to check.
         * @return bool
         */
        public function is_available($package)
        {
        }
        /**
         * Initialize settings
         *
         * @version 2.4.0
         * @since 2.4.0
         * @return void
         */
        private function set_settings()
        {
        }
        /**
         * Init function.
         *
         * @return void
         */
        private function init()
        {
        }
        /**
         * Add meta keys to the list of keys to hide in the order item meta.
         *
         * @param array $keys Item meta keys.
         *
         * @return array
         */
        public function add_hidden_order_itemmeta_keys($keys)
        {
        }
        /**
         * Get default and custom boxes merged.
         *
         * @return array
         */
        public function get_all_boxes(): array
        {
        }
        /**
         * Process settings on save.
         *
         * @since 2.4.0
         * @version 2.4.0
         * @return void
         */
        public function process_admin_options()
        {
        }
        /**
         * Output a debug message.
         *
         * @since 1.0.0
         * @version 2.4.4
         *
         * @param string $message Debug message.
         * @param string $type    Debug type ('notice', 'error', 'success').
         * @param array  $data    Optional. Additional data to pass.
         * @param string $group   Optional. Group to categorize notices.
         */
        public function debug($message, $type = 'notice', $data = array(), $group = '')
        {
        }
        /**
         * Return the debug mode status.
         *
         * @return bool
         */
        public function is_debug_mode_enabled(): bool
        {
        }
        /**
         * Generate_services_html function.
         *
         * @return string
         */
        public function generate_services_html()
        {
        }
        /**
         * Generate_box_packing_html function.
         *
         * @return string
         */
        public function generate_box_packing_html()
        {
        }
        /**
         * Validate_box_packing_field function.
         *
         * @param string $key Field key.
         * @param string $value Posted Value.
         *
         * @return array
         */
        public function validate_box_packing_field($key, $value)
        {
        }
        /**
         * Validate_services_field function.
         *
         * @param mixed $key Key.
         * @return array
         */
        public function validate_services_field($key)
        {
        }
        /**
         * Clear_transients function.
         *
         * @return void
         */
        public function clear_transients()
        {
        }
        /**
         * Init_form_fields function.
         *
         * @return void
         */
        public function init_form_fields()
        {
        }
        /**
         * Tests the entered API key against the service to see if a forbidden error is returned.
         * If it is, the key is rejected and an error message is displayed.
         */
        public function test_api_key()
        {
        }
        /**
         * Get max extra cover from quote.
         *
         * @since 2.4.2
         *
         * @param float  $item_value Item value.
         * @param object $quote      Quote from API.
         *
         * @return int Max extra cover
         */
        protected function get_max_extra_cover_from_quote($item_value, $quote)
        {
        }
        /**
         * Calculates the extra cover cost
         * For international it's $4.00 per $100 over $100
         * For domestic it's $2.50 per $100 over $100
         * We are assuming max cover for each items
         *
         * @since 2.3.12
         * @version 2.4.18
         *
         * @param float $item_value Value of current item.
         * @param int   $max_extra_cover The maximum allowed value to cover.
         * @return float $cover_cost
         */
        public function calculate_extra_cover_cost($item_value, $max_extra_cover)
        {
        }
        /**
         * See if rate is satchel
         *
         * @param string $code Service code.
         * @return boolean
         */
        public function is_satchel($code)
        {
        }
        /**
         * Determine whether an API quote belongs to a configured service.
         *
         * A quote matches when it is the service itself, one of the service's
         * configured alternate_services, or any satchel size of the service. The
         * Australia Post API can return satchel codes that are not listed in
         * alternate_services (for example AUS_PARCEL_REGULAR_SATCHEL_250G), so the
         * satchel-prefix match ensures the cheapest available satchel is always
         * considered instead of the package falling back to the full parcel rate.
         *
         * @param string   $service The configured service code (e.g. AUS_PARCEL_REGULAR).
         * @param array    $values  The service configuration, including alternate_services.
         * @param object   $quote   The API quote object (expects a `code` property).
         *
         * @return bool
         */
        private function service_matches_quote(string $service, array $values, $quote): bool
        {
        }
        /**
         * Decide whether a satchel quote should be selected in "prioritize satchel" mode.
         *
         * The first satchel encountered is always selected (satchels are prioritized
         * over non-satchel rates), and a later satchel is selected only when it is
         * cheaper, so the cheapest available satchel wins regardless of the order the
         * API returns them in.
         *
         * @param bool       $satchel_selected Whether a satchel has already been selected for this service.
         * @param float|null $current_cost     The current best rate cost, or null if none yet.
         * @param float      $quote_price      The price of the satchel quote under consideration.
         *
         * @return bool
         */
        private function should_select_priority_satchel(bool $satchel_selected, ?float $current_cost, float $quote_price): bool
        {
        }
        /**
         * See if rate is Courier Post.
         *
         * @param string $code Service code.
         * @return bool
         */
        public function is_courier_post($code)
        {
        }
        /**
         * See if rate is a letter service.
         *
         * AUS Post does not offer Signature on Delivery or extra cover on letter
         * services, so optional extras must never be applied to these codes.
         *
         * @param string $code Service code.
         * @return bool
         */
        public function is_letter_service($code)
        {
        }
        /**
         * Calculate_shipping function.
         *
         * @param array $package Current package.
         * @return void
         */
        public function calculate_shipping($package = array())
        {
        }
        /**
         * Checks if destination is international.
         *
         * @since 2.3.12
         * @version 2.3.12
         * @param array $package Current Package.
         * @return bool
         */
        public function is_international($package)
        {
        }
        /**
         * Prepare_rate function.
         *
         * @param mixed  $rate_code Rate code.
         * @param mixed  $rate_id Rate ID.
         * @param mixed  $rate_name Rate name.
         * @param mixed  $rate_cost Rate cost.
         * @param string $package_request Package request.
         * @param array  $package Shipping Package.
         * @param array  $meta_data Rate meta data.
         */
        private function prepare_rate($rate_code, $rate_id, $rate_name, $rate_cost, $package_request = '', $package = array(), $meta_data = array())
        {
        }
        /**
         * Perform remote request to AU Post API and returns the response if succeed.
         *
         * @since 1.0.0
         * @version 2.4.4
         *
         * @param string $endpoint Endpoint URL where the request is made into.
         * @param string $request  Request args.
         * @param array  $headers  Request headers.
         *
         * @return mixed Response.
         */
        private function get_response($endpoint, $request, $headers)
        {
        }
        /**
         * Debug request and response.
         *
         * @since 2.4.4
         * @version 2.4.4
         *
         * @param string $request  HTTP request to the Australia Post API.
         * @param array  $response HTTP response from the Australia Post API.
         */
        private function debug_request_response($request, $response)
        {
        }
        /**
         * Sort_rates function.
         *
         * @param array $a Rate to sort.
         * @param array $b Rate to sort.
         *
         * @return int
         */
        public function sort_rates($a, $b)
        {
        }
        /**
         * Get header with auth key.
         *
         * @return array
         */
        private function get_request_header()
        {
        }
        /**
         * Get request array from package.
         *
         * @param array $package Current package.
         *
         * @return array
         */
        private function get_request($package)
        {
        }
        /**
         * Trim space and return the uppercase post code.
         *
         * @param array $package Current package.
         * @since 2.4.15
         * @return string
         */
        private function get_from_postcode($package)
        {
        }
        /**
         * Return the destination to_postcode. Strip space if it is in australia territories.
         *
         * @param array $package Current package.
         * @since 2.4.15
         * @return string
         */
        private function get_to_postcode($package)
        {
        }
        /**
         * Get_request function.
         *
         * @param array $package Current package.
         * @return array
         */
        private function get_package_requests($package)
        {
        }
        /**
         * Weight_only_shipping function.
         *
         * @param array $package Current package.
         *
         * @return array
         */
        private function weight_only_shipping(array $package): array
        {
        }
        /**
         * Generate shipping request based on individual product dimensions.
         *
         * @param array $package Current package.
         *
         * @return array
         */
        private function per_item_shipping(array $package): array
        {
        }
        /**
         * Generate shipping requests by packing items in boxes.
         *
         * @param array $package Current package.
         *
         * @return array
         * @since 2.4.5 Reset $request variable on each loop.
         */
        private function box_shipping(array $package): array
        {
        }
        /**
         * Check if the package matches any enabled satchel sizes.
         *
         * @param float $length Shipment package length.
         * @param float $width Shipment package width.
         * @param float $height Shipment package height.
         * @param float $weight Shipment  package weight.
         *
         * @return bool
         */
        private function matches_enabled_satchel_size(float $length, float $width, float $height, float $weight): bool
        {
        }
        /**
         * Get metadata package description string for the shipping rate.
         *
         * @param array $params Meta data info to join.
         *
         * @return string Rate meta data.
         */
        private function get_rate_package_description(array $params): string
        {
        }
        /**
         * Check if the package is a large envelope.
         *
         * @param array $package Package to check.
         *
         * @return bool
         */
        public function is_large_envelope(array $package): bool
        {
        }
        /**
         * Check if the current page is the classic checkout page.
         * This is the case when the checkout block is not present.
         *
         * @return bool
         */
        public function is_classic_checkout_page(): bool
        {
        }
        /**
         * Check if the current page is the classic cart page.
         * This is the case when the cart block is not present.
         *
         * @return bool
         */
        public function is_classic_cart_page(): bool
        {
        }
        /**
         * If the conditions are met, display the notices.
         *
         * @return void
         */
        public function maybe_display_notices()
        {
        }
        /**
         * Maybe clear the shipping cache.
         */
        public function maybe_clear_shipping_cache()
        {
        }
        /**
         * Clear the shipping cache.
         */
        public function clear_shipping_cache()
        {
        }
        /**
         * If the box packer library option is not yet set and there are existing
         * Australia Post shipping method instances, we can assume that this is not a
         * new/fresh installation of the Australia Post plugin,
         * so we should default to 'original'
         *
         * If the box packer library option is not set and there are no
         * Australia Post shipping method instances, then this is likely a new
         * installation of the Australia Post plugin,
         * so we should default to 'dvdoug'
         *
         * @return string
         */
        public function get_default_box_packer_library(): string
        {
        }
        /**
         * Get the default value for the "Tax Status" setting.
         *
         * @return string 'none' or 'taxable'
         */
        public function get_default_tax_status_value(): string
        {
        }
        /**
         * Helper method to get the number of Australia Post method instances.
         *
         * @return int The number of Australia Post method instances
         */
        public function instance_count(): int
        {
        }
        /**
         * Helper method to check if there are existing Australia Post method instances.
         *
         * @return bool
         */
        public function instances_exist(): bool
        {
        }
    }
}
namespace {
    \define('WC_SHIPPING_AUSTRALIA_POST_VERSION', '2.8.10');
    \define('WC_SHIPPING_AUSTRALIA_POST_PLUGIN_FILE', __FILE__);
    \define('WC_SHIPPING_AUSTRALIA_POST_ABSPATH', \trailingslashit(__DIR__));
    \define('WC_SHIPPING_AUSTRALIA_POST_PLUGIN_URL', \trailingslashit(\plugins_url('', __FILE__)));
    /**
     * Initialize plugin.
     */
    function wc_shipping_australia_post_init()
    {
    }
}