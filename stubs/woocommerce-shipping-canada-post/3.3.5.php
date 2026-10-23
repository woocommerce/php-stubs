<?php
/**
 * Generated stub declarations for woocommerce-shipping-canada-post 3.3.5.
 * @see https://github.com/woocommerce/all-plugins/tree/stubs
 */

namespace WooCommerce\CanadaPost {
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
        const CONTEXT = 'woocommerce-shipping-canada-post';
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
         * @param array  $data    Additional contextual data to pass.
         *
         * @return void
         */
        public function debug(string $message, array $data = array())
        {
        }
    }
}
namespace {
    /**
     * Loads Canada Post ability definitions.
     */
    class WC_Shipping_Canada_Post_Abilities
    {
        /**
         * Whether ability registration hooks have been initialized.
         *
         * @var bool
         */
        private static $initialized = \false;
        /**
         * Initialize ability registration hooks.
         *
         * @return void
         */
        public static function init()
        {
        }
        /**
         * Add Canada Post ability definitions to WooCommerce's loader.
         *
         * @param array $classes Ability definition class names.
         * @return array
         */
        public static function add_ability_definition_classes(array $classes)
        {
        }
        /**
         * Load ability definition classes after Woo's AbilityDefinition interface exists.
         *
         * @return void
         */
        private static function load_ability_definition_classes()
        {
        }
    }
    /**
     * Shared helper methods for Canada Post ability execution.
     */
    class WC_Shipping_Canada_Post_Ability_Helper
    {
        /**
         * Check whether the current user can read Canada Post shipping configuration.
         *
         * @return bool
         */
        public static function can_read()
        {
        }
        /**
         * Get non-secret environment status for Canada Post shipping.
         *
         * @return array
         */
        public static function get_environment()
        {
        }
        /**
         * Get Canada Post shipping method contexts, optionally filtered by instance ID.
         *
         * @param int $instance_id Shipping method instance ID. Zero means all instances.
         * @return array
         */
        public static function get_method_contexts($instance_id = 0)
        {
        }
        /**
         * Format common shipping method context data.
         *
         * @param array $context Method context.
         * @return array
         */
        public static function get_context_summary(array $context)
        {
        }
        /**
         * Get an optional instance ID from ability input.
         *
         * @param array $input Ability input.
         * @return int
         */
        public static function get_input_instance_id(array $input)
        {
        }
    }
    /**
     * Projects Canada Post shipping method configuration into ability responses.
     */
    class WC_Shipping_Canada_Post_Ability_Projection
    {
        /**
         * Non-secret configuration snapshot from the shipping method.
         *
         * @var array
         */
        private $snapshot;
        /**
         * Constructor.
         *
         * @param WC_Shipping_Canada_Post $method Canada Post shipping method.
         */
        public function __construct(\WC_Shipping_Canada_Post $method)
        {
        }
        /**
         * Get non-secret Canada Post settings for ability output.
         *
         * @return array
         */
        public function get_safe_settings()
        {
        }
        /**
         * Get Canada Post service configuration for ability output.
         *
         * @return array
         */
        public function get_service_configuration()
        {
        }
        /**
         * Get Canada Post package, flat-rate box, and lettermail catalogs for ability output.
         *
         * @return array
         */
        public function get_package_options()
        {
        }
        /**
         * Get configured custom boxes for ability output.
         *
         * @param array $configured_boxes Configured custom boxes.
         * @return array
         */
        private function get_custom_boxes(array $configured_boxes)
        {
        }
        /**
         * Get flat-rate box catalog for ability output.
         *
         * @param array $flat_rate_boxes         Flat-rate box catalog.
         * @param array $flat_rate_boxes_enabled Enabled-state map.
         * @return array
         */
        private function get_flat_rate_boxes(array $flat_rate_boxes, array $flat_rate_boxes_enabled)
        {
        }
        /**
         * Get lettermail catalogs for ability output.
         *
         * @param array $catalogs Lettermail catalogs keyed by scope.
         * @return array
         */
        private function get_lettermail_catalogs(array $catalogs)
        {
        }
        /**
         * Normalize an option value to a string list.
         *
         * @param mixed $value Option value.
         * @return array
         */
        private static function get_string_list($value)
        {
        }
        /**
         * Get an array value from an array.
         *
         * @param array  $values Values.
         * @param string $key Value key.
         * @return array
         */
        private static function get_array_value(array $values, $key)
        {
        }
        /**
         * Get a float value from an array.
         *
         * @param array  $values Values.
         * @param string $key Value key.
         * @return float
         */
        private static function get_float_value(array $values, $key)
        {
        }
        /**
         * Classify a Canada Post service code by destination region.
         *
         * @param string $code Service code.
         * @return string
         */
        private static function get_service_region($code)
        {
        }
    }
    /**
     * Canada Post safe settings ability definition.
     */
    class WC_Shipping_Canada_Post_Get_Settings_Ability implements \Automattic\WooCommerce\Abilities\AbilityDefinition
    {
        /**
         * Ability ID.
         */
        const NAME = 'woocommerce-shipping-canada-post/get-settings';
        /**
         * Ability category.
         */
        const CATEGORY = 'woocommerce';
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
         * Check whether the current user can read Canada Post settings.
         *
         * @param array $input Ability input.
         * @return bool
         */
        public static function can_read($input = array())
        {
        }
        /**
         * Execute the ability.
         *
         * @param array $input Ability input.
         * @return array
         */
        public static function execute($input = array())
        {
        }
        /**
         * Get the input schema.
         *
         * @return array
         */
        private static function get_input_schema()
        {
        }
        /**
         * Get the output schema.
         *
         * @return array
         */
        private static function get_output_schema()
        {
        }
        /**
         * Get the settings instance output schema.
         *
         * @return array
         */
        private static function get_instance_schema()
        {
        }
        /**
         * Get metadata for a read-only, externally visible ability.
         *
         * @return array
         */
        private static function get_meta()
        {
        }
    }
    /**
     * Plugin initiation class.
     */
    class WC_Shipping_Canada_Post_Init
    {
        /**
         * Plugin's version.
         *
         * @since 2.5.0
         *
         * @var string
         */
        public $version = \WC_CANADA_POST_VERSION;
        /**
         * Class instance.
         *
         * @var object
         */
        private static $instance;
        /**
         * Get the class instance.
         *
         * @return WC_Shipping_Canada_Post_Init
         */
        public static function get_instance()
        {
        }
        /**
         * Initialize the plugin's public actions
         */
        public function __construct()
        {
        }
        /**
         * Initialize WordPress Abilities API integration.
         *
         * @return void
         */
        public function init_abilities()
        {
        }
        /**
         * Environment check.
         *
         * @return void
         */
        public function environment_check()
        {
        }
        /**
         * Connects to Canada Post
         *
         * @version 2.5.3
         */
        public function connect_canada_post()
        {
        }
        /**
         * Create a new nonce to verify in the wc_canada_post_api_canada_post_return method.
         *
         * @version 2.5.3
         */
        public function wc_canada_post_create_registration_nonce()
        {
        }
        /**
         * When returning from CP, redirect to settings
         */
        public function wc_canada_post_api_canada_post_return()
        {
        }
        /**
         * Load plugin files function.
         *
         * @return void
         */
        public function includes()
        {
        }
        /**
         * Add Canada Post shipping method to WC
         *
         * @param mixed $methods All registered shipping methods.
         *
         * @return array
         */
        public function add_method($methods)
        {
        }
        /**
         * Localisation.
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
         * Plugin page links.
         *
         * @param array $links Registered plugin links.
         *
         * @return array
         */
        public function plugin_links($links)
        {
        }
        /**
         * WooCommerce not installed notice
         */
        public function wc_deactivated()
        {
        }
        /**
         * Update/migration script.
         *
         * @since 2.5.0
         * @version 2.5.0
         * @return void
         */
        public function install()
        {
        }
        /**
         * Show the user a notice for plugin updates
         *
         * @since 2.5.0
         */
        public function upgrade_notice()
        {
        }
        /**
         * Turn of the dismisable upgrade notice.
         *
         * @since 2.5.0
         */
        public function dismiss_upgrade_notice()
        {
        }
        /**
         * Helper method to check whether given zone_id has Canada Post method instance.
         *
         * @since 2.5.0
         *
         * @param int $zone_id Zone ID.
         *
         * @return bool True if given zone_id has canada_post method instance
         */
        public function is_zone_has_canada_post($zone_id)
        {
        }
    }
    /**
     * Canada Post package options ability definition.
     */
    class WC_Shipping_Canada_Post_List_Package_Options_Ability implements \Automattic\WooCommerce\Abilities\AbilityDefinition
    {
        /**
         * Ability ID.
         */
        const NAME = 'woocommerce-shipping-canada-post/list-package-options';
        /**
         * Ability category.
         */
        const CATEGORY = 'woocommerce';
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
         * Check whether the current user can read Canada Post package settings.
         *
         * @param array $input Ability input.
         * @return bool
         */
        public static function can_read($input = array())
        {
        }
        /**
         * Execute the ability.
         *
         * @param array $input Ability input.
         * @return array
         */
        public static function execute($input = array())
        {
        }
        /**
         * Get the input schema.
         *
         * @return array
         */
        private static function get_input_schema()
        {
        }
        /**
         * Get the output schema.
         *
         * @return array
         */
        private static function get_output_schema()
        {
        }
        /**
         * Get the package options schema.
         *
         * @return array
         */
        private static function get_package_options_schema()
        {
        }
        /**
         * Get the dimensions schema.
         *
         * @return array
         */
        private static function get_dimensions_schema()
        {
        }
        /**
         * Get the custom box schema.
         *
         * @return array
         */
        private static function get_custom_box_schema()
        {
        }
        /**
         * Get the flat-rate box schema.
         *
         * @return array
         */
        private static function get_flat_rate_box_schema()
        {
        }
        /**
         * Get the lettermail catalog schema.
         *
         * @return array
         */
        private static function get_lettermail_catalog_schema()
        {
        }
        /**
         * Get metadata for a read-only, externally visible ability.
         *
         * @return array
         */
        private static function get_meta()
        {
        }
    }
    /**
     * Canada Post services ability definition.
     */
    class WC_Shipping_Canada_Post_List_Services_Ability implements \Automattic\WooCommerce\Abilities\AbilityDefinition
    {
        /**
         * Ability ID.
         */
        const NAME = 'woocommerce-shipping-canada-post/list-services';
        /**
         * Ability category.
         */
        const CATEGORY = 'woocommerce';
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
         * Check whether the current user can read Canada Post service settings.
         *
         * @param array $input Ability input.
         * @return bool
         */
        public static function can_read($input = array())
        {
        }
        /**
         * Execute the ability.
         *
         * @param array $input Ability input.
         * @return array
         */
        public static function execute($input = array())
        {
        }
        /**
         * Get the input schema.
         *
         * @return array
         */
        private static function get_input_schema()
        {
        }
        /**
         * Get the output schema.
         *
         * @return array
         */
        private static function get_output_schema()
        {
        }
        /**
         * Get the service output schema.
         *
         * @return array
         */
        private static function get_service_schema()
        {
        }
        /**
         * Get metadata for a read-only, externally visible ability.
         *
         * @return array
         */
        private static function get_meta()
        {
        }
    }
    /**
     * Privacy class.
     */
    class WC_Shipping_Canada_Post_Privacy extends \WC_Abstract_Privacy
    {
        /**
         * Class constructor.
         */
        public function __construct()
        {
        }
        /**
         * Gets the message of the privacy to display.
         */
        public function get_privacy_message()
        {
        }
    }
    /**
     * WC_Shipping_Canada_Post class.
     */
    class WC_Shipping_Canada_Post extends \WC_Shipping_Method
    {
        /**
         * Canada post API endpoints.
         *
         * @var array
         */
        private $endpoints = array('development' => 'https://ct.soa-gw.canadapost.ca/rs/ship/price', 'production' => 'https://soa-gw.canadapost.ca/rs/ship/price');
        /**
         * Platform ID.
         *
         * @var string
         */
        private $platform_id = '0008218084';
        /**
         * List of found rates.
         *
         * @var array
         */
        private $found_rates;
        /**
         * List of Canada post services.
         *
         * @var array
         */
        private $services = array();
        /**
         * Liability additional coverage costs from https://www.canadapost-postescanada.ca/cpc/doc/en/support/LM-e.pdf.
         *
         * @var string|float
         */
        private $ca_additional_liability_coverage = '2.75';
        /**
         * Liability registered mail costs from https://www.canadapost-postescanada.ca/cpc/doc/en/support/LM-e.pdf.
         *
         * @var string|float
         */
        private $ca_registered = '10.50';
        /**
         * Liability international registered mail costs from https://www.canadapost-postescanada.ca/cpc/doc/en/support/prices/consumer-prices.pdf.
         *
         * @var string|float
         */
        private $int_registered = '21.00';
        /**
         * Lettermail boxes.
         *
         * @var array
         */
        private $lettermail_boxes;
        /**
         * Postcode origin.
         *
         * @var string
         */
        protected $origin;
        /**
         * Packing method.
         *
         * @var string
         */
        protected $packing_method;
        /**
         * List of boxes.
         *
         * @var array
         */
        public $boxes;
        /**
         * List of services.
         *
         * @var string
         */
        protected $custom_services;
        /**
         * Flag for using flat rates or not.
         *
         * @var bool
         */
        protected bool $enable_flat_rates;
        /**
         * Type of rate that will be offered.
         *
         * @var string
         */
        protected $offer_rates;
        /**
         * Quotation type whether to "commercial" or "counter".
         *
         * @var string
         */
        protected $quote_type;
        /**
         * Rate cost that will be used.
         *
         * @var string
         */
        protected $use_cost;
        /**
         * Lettermail rates.
         *
         * @var string
         */
        protected $lettermail;
        /**
         * Flag to use debug mode or not.
         *
         * @var bool
         */
        public $debug;
        /**
         * Logger instance.
         *
         * @var \WooCommerce\CanadaPost\Logger
         */
        public $logger;
        /**
         * Canada post options.
         *
         * @var array
         */
        public $options;
        /**
         * Flag for showing delivery time in front-end.
         *
         * @var bool
         */
        protected $show_delivery_time;
        /**
         * Delivery time delay value.
         *
         * @var int
         */
        protected $delivery_time_delay;
        /**
         * Customer number.
         *
         * @var string
         */
        protected $customer_number;
        /**
         * Username.
         *
         * @var string
         */
        protected $username;
        /**
         * Password.
         *
         * @var string
         */
        protected $password;
        /**
         * Contract ID.
         *
         * @var string
         */
        protected $contract_id;
        /**
         * Endpoint.
         *
         * @var string
         */
        public $endpoint;
        /**
         * Maximum weight.
         *
         * @var float
         */
        protected $max_weight;
        /**
         * Domestic Canadian Flat Rate Boxes.
         *
         * @see https://www.canadapost-postescanada.ca/cpc/en/personal/stamps-and-packaging/flat-rate-box.page
         *
         * @var array
         */
        private $ca_flat_rate_boxes = array('extra-small' => array('name' => 'Extra Small Flat Rate Box', 'length' => '24.1', 'width' => '16.5', 'height' => '8.9', 'max_weight' => '5', 'cost' => '18.99'), 'small' => array('name' => 'Small Flat Rate Box', 'length' => '35', 'width' => '26', 'height' => '5', 'max_weight' => '5', 'cost' => '21.99'), 'medium' => array('name' => 'Medium Flat Rate Box', 'length' => '39', 'width' => '26', 'height' => '12', 'max_weight' => '5', 'cost' => '24.99'), 'large' => array('name' => 'Large Flat Rate Box', 'length' => '40', 'width' => '30', 'height' => '19', 'max_weight' => '5', 'cost' => '32.99'));
        /**
         * Domestic Canadian rates from https://www.canadapost-postescanada.ca/cpc/en/personal/stamp-prices.page
         *
         * @var array
         */
        private $ca_lettermail_boxes = array('standard' => array('name' => 'Standard Lettermail', 'length' => '24.5', 'width' => '15.6', 'height' => '0.5', 'weight' => '0.05', 'costs' => array('0.03' => '1.44', '0.05' => '1.75')), 'non-standard' => array('name' => 'Non-standard Lettermail', 'length' => '38', 'width' => '27', 'height' => '2', 'weight' => '0.5', 'costs' => array('0.1' => '2.61', '0.2' => '4.29', '0.3' => '5.98', '0.4' => '6.85', '0.5' => '7.36')));
        /**
         * Shipping to US rates from https://www.canadapost-postescanada.ca/cpc/en/personal/stamp-prices.page
         *
         * @var array
         */
        private $us_lettermail_boxes = array('standard' => array('name' => 'Standard USA Letter-post', 'length' => '24.5', 'width' => '15.6', 'height' => '0.5', 'weight' => '0.05', 'costs' => array('0.03' => '1.75', '0.05' => '2.61')), 'non-standard' => array('name' => 'Non-standard USA Letter-post', 'length' => '38', 'width' => '27', 'height' => '2', 'weight' => '0.5', 'costs' => array('0.1' => '4.29', '0.2' => '7.49', '0.5' => '14.99')));
        /**
         * Shipping international other than US.
         *
         * @var array
         */
        private $int_lettermail_boxes = array('standard' => array('name' => 'Standard International Letter-post', 'length' => '24.5', 'width' => '15.6', 'height' => '0.5', 'weight' => '0.05', 'costs' => array('0.03' => '3.65', '0.05' => '5.21')), 'non-standard' => array('name' => 'Non-standard International Letter-post', 'length' => '38', 'width' => '27', 'height' => '2', 'weight' => '0.5', 'costs' => array('0.1' => '8.6', '0.2' => '14.99', '0.5' => '29.96')));
        /**
         * Sets the box packer library to use.
         *
         * @var string
         */
        public string $box_packer_library;
        /**
         * Array of enabled Canada Post flat rate box sizes.
         *
         * @var array
         */
        public array $flat_rate_boxes_enabled;
        /**
         * Class constructor.
         *
         * @param int $instance_id Instance ID.
         *
         * @return void
         */
        public function __construct($instance_id = 0)
        {
        }
        /**
         * Check if the package can use Canada post.
         *
         * @param array $package Cart package.
         *
         * @return bool
         */
        public function is_available($package)
        {
        }
        /**
         * Initialize settings
         *
         * @version 2.5.0
         * @since 2.5.0
         * @return void
         */
        private function set_settings()
        {
        }
        /**
         * Initiation function.
         *
         * @return void
         */
        private function init()
        {
        }
        /**
         * Process settings on save
         *
         * @since 2.5.0
         * @version 2.5.0
         * @return void
         */
        public function process_admin_options()
        {
        }
        /**
         * Output a message or error.
         *
         * @param string $message Debug message.
         * @param array  $data Additional data for debugging.
         */
        public function debug($message, $data = array())
        {
        }
        /**
         * Handle CP registration.
         */
        public function revoke_registration()
        {
        }
        /**
         * Display a notice when the account is connected.
         *
         * @return void
         */
        public function admin_options()
        {
        }
        /**
         * Generate services table HTML.
         *
         * @return string
         */
        public function generate_services_html()
        {
        }
        /**
         * Generate Flat Rate Box sizes HTML.
         *
         * @return string
         */
        public function generate_flat_rate_box_sizes_html()
        {
        }
        /**
         * Generate Box sizes HTML.
         *
         * @return string
         */
        public function generate_box_sizes_html()
        {
        }
        /**
         * Validating Box sizes value.
         *
         * @param mixed $key Field name or key.
         *
         * @return array
         */
        public function validate_box_sizes_field($key)
        {
        }
        /**
         * Validating Flat Rate Box sizes value.
         *
         * @param mixed $key Field name or key.
         *
         * @return array
         */
        public function validate_flat_rate_box_sizes_field($key)
        {
        }
        /**
         * Validating services field value function.
         *
         * @param mixed $key Field name or key.
         *
         * @return array
         */
        public function validate_services_field($key)
        {
        }
        /**
         * Clear transient.
         *
         * @return void
         */
        public function clear_transients()
        {
        }
        /**
         * Initialize form fields.
         *
         * @return void
         */
        public function init_form_fields()
        {
        }
        /**
         * Convert XML string to an array.
         *
         * @param string $xml_string XML string to convert.
         * @return array Converted array.
         */
        private function convert_xml_string_to_array($xml_string)
        {
        }
        /**
         * Calculate shipping rate function.
         *
         * @param array $package Cart package.
         * @return void
         */
        public function calculate_shipping($package = array())
        {
        }
        /**
         * Calculate lettermail rates.
         *
         * @param array $package    Cart package.
         * @param bool  $registered Registered service or not.
         *
         * @return array|false
         */
        public function calculate_lettermail_rate($package, $registered = \false)
        {
        }
        /**
         * Calculate flat rate.
         *
         * @param array $package Cart package.
         *
         * @return array|false
         */
        public function calculate_flat_rate($package)
        {
        }
        /**
         * Prepare the shipping rate.
         *
         * @param mixed $rate_code Rate code.
         * @param mixed $rate_id Rate ID.
         * @param mixed $rate_name Rate name.
         * @param mixed $rate_cost Rate cost.
         *
         * @return void
         */
        private function prepare_rate($rate_code, $rate_id, $rate_name, $rate_cost)
        {
        }
        /**
         * Sorting the rates.
         *
         * @param mixed $a First rate to be sorted.
         * @param mixed $b Second rate to be sorted.
         *
         * @return int
         */
        public function sort_rates($a, $b)
        {
        }
        /**
         * Get request header for calling API.
         *
         * @return array
         */
        private function get_request_header()
        {
        }
        /**
         * Generate request from cart package.
         *
         * @param mixed $package Cart package.
         *
         * @return string XML request.
         */
        private function get_request($package)
        {
        }
        /**
         * Since Apple/Google Pay are using asterisk (*) to replace some of the postal code for security reason,
         * we will need to replace the missing/replaced character.
         * And Canada postal code is using an alphabet-numeric-alphabet-numeric-alphabet-numeric (A1A1A1) format
         * in order to be validated.
         * e.g. we need to change M4C *** into M4C 1A1 in order to be valid.
         * This method will try to replace the missing/replaced character in canada post code into something valid.
         *
         * @param string $postcode Canada postal code.
         */
        public function ca_postal_code_replacement($postcode)
        {
        }
        /**
         * Get request based on the packing method.
         *
         * @param array $package Cart package.
         *
         * @return string[]
         */
        private function get_package_requests($package)
        {
        }
        /**
         * Generate XML per package item.
         *
         * @param array $package Cart package.
         *
         * @return string[]
         */
        private function per_item_shipping($package)
        {
        }
        /**
         * Generate XML for "weight only" packing method.
         *
         * @param array $package Cart package.
         *
         * @return string[]
         */
        private function weight_only_shipping($package)
        {
        }
        /**
         * Generate XML when using Box packing method.
         *
         * @param array $package Cart package.
         *
         * @return string[]
         */
        private function box_shipping($package)
        {
        }
        /**
         * Extract the packed box dimensions and weights if available and return in an array.
         *
         * @param array $package_requests The package requests.
         *
         * @return array|false
         */
        private function maybe_get_packed_box_details($package_requests)
        {
        }
        /**
         * If the box packer library option is not yet set and there are existing
         * Canada Post shipping method instances, we can assume that this is not a
         * new/fresh installation of the Canada Post plugin,
         * so we should default to 'original'
         *
         * If the box packer library option is not set and there are no
         * Canada Post shipping method instances, then this is likely a new
         * installation of the Canada Post plugin,
         * so we should default to 'dvdoug'
         *
         * @return string
         */
        public function get_default_box_packer_library(): string
        {
        }
        /**
         * Helper method to get the number of Canada Post method instances.
         *
         * @return int The number of Canada Post method instances
         */
        public function instance_count(): int
        {
        }
        /**
         * Helper method to check if there are existing Canada Post method instances.
         *
         * @return bool
         */
        public function instances_exist(): bool
        {
        }
        /**
         * Check if flat rate services are enabled.
         *
         * @return bool
         */
        public function is_flat_rate_enabled(): bool
        {
        }
        /**
         * Check if flat rate services are available for the given package.
         * Flat rates are only available for packages destined for Canada.
         *
         * @param array $package The package to check.
         * @return bool
         */
        public function is_flat_rate_available_for_package(array $package): bool
        {
        }
        /**
         * Get a non-secret snapshot of initialized method configuration.
         *
         * Raw carrier credentials, account identifiers, customer numbers, and
         * contract numbers must never be returned from this method.
         *
         * @return array
         */
        public function get_configuration_snapshot()
        {
        }
        /**
         * Format box measurements to given precision.
         *
         * @param  int|float|string $value    Measurement.
         * @param  int              $decimals Precision.
         *
         * @return void
         */
        public function output_formatted_box_measurements($value, $decimals = 2)
        {
        }
    }
}
namespace {
    /**
     * Plugin activation check
     */
    function wc_canada_post_activation_check()
    {
    }
    \define('WC_CANADA_POST_VERSION', '3.3.5');
    /**
     * Initialize plugin.
     */
    function wc_shipping_canada_post_init()
    {
    }
}