<?php
/**
 * Generated stub declarations for woocommerce-shipping-usps 5.6.7.
 * @see https://github.com/woocommerce/php-stubs
 */

namespace {
    /**
     * Loads WooCommerce USPS ability definitions.
     */
    class WC_Shipping_USPS_Abilities
    {
        /**
         * Whether ability hooks have been initialized.
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
         * Adds USPS ability definitions to WooCommerce's ability loader.
         *
         * @param array $classes Ability definition class names.
         * @return array
         */
        public static function add_ability_definition_classes(array $classes)
        {
        }
        /**
         * Loads USPS ability definition classes.
         *
         * @return void
         */
        private static function load_ability_definition_classes()
        {
        }
    }
    /**
     * Formats USPS ability output without exposing carrier credentials.
     */
    class WC_Shipping_USPS_Ability_Output
    {
        /**
         * Ability category.
         */
        const CATEGORY = 'woocommerce';
        /**
         * Permission check for USPS configuration reads.
         *
         * @return bool
         */
        public static function can_read()
        {
        }
        /**
         * Read-only metadata for externally visible USPS abilities.
         *
         * @return array
         */
        public static function get_read_only_meta()
        {
        }
        /**
         * Input schema shared by USPS settings read abilities.
         *
         * @return array
         */
        public static function get_instance_input_schema()
        {
        }
        /**
         * Resolve the USPS shipping method for ability input.
         *
         * @param array $input Ability input.
         * @return WC_Shipping_USPS|WP_Error
         */
        public static function get_shipping_method(array $input = array())
        {
        }
        /**
         * Get the requested USPS shipping method instance ID.
         *
         * @param array $input Ability input.
         * @return int
         */
        public static function get_instance_id(array $input = array()): int
        {
        }
        /**
         * Format a USPS service name for plain-text clients.
         *
         * @param string $value Service name.
         * @return string
         */
        public static function clean_label(string $value): string
        {
        }
        /**
         * Cast a value to a string for stable schema output.
         *
         * @param mixed $value Raw value.
         * @return string
         */
        public static function string_value($value): string
        {
        }
        /**
         * Format a merchant-entered service setting.
         *
         * @param array $settings Saved service settings.
         * @return array
         */
        public static function format_service_settings(array $settings = array()): array
        {
        }
        /**
         * Cast WooCommerce setting values to booleans.
         *
         * @param mixed $value Raw setting value.
         * @return bool
         */
        public static function bool_value($value): bool
        {
        }
        /**
         * Get whether a scalar setting has a non-empty value.
         *
         * @param mixed $value Setting value.
         * @return bool
         */
        public static function has_value($value): bool
        {
        }
    }
    /**
     * Ability definition for reading non-secret USPS settings.
     */
    class WC_Shipping_USPS_Get_Settings_Ability implements \Automattic\WooCommerce\Abilities\AbilityDefinition
    {
        /**
         * Ability ID.
         */
        const NAME = 'woocommerce-shipping-usps/get-settings';
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
         * Execute the USPS settings read ability.
         *
         * @param array $input Ability input.
         * @return array|WP_Error
         */
        public static function execute(array $input = array())
        {
        }
        /**
         * Get output schema for the settings ability.
         *
         * @return array
         */
        private static function get_output_schema(): array
        {
        }
    }
    /**
     * Ability definition for reading USPS package and box configuration.
     */
    class WC_Shipping_USPS_List_Packages_Ability implements \Automattic\WooCommerce\Abilities\AbilityDefinition
    {
        /**
         * Ability ID.
         */
        const NAME = 'woocommerce-shipping-usps/list-packages';
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
         * Execute the USPS packages read ability.
         *
         * @param array $input Ability input.
         * @return array|WP_Error
         */
        public static function execute(array $input = array())
        {
        }
        /**
         * Format USPS flat-rate boxes.
         *
         * @param WC_Shipping_USPS $shipping_method USPS shipping method.
         * @return array
         */
        private static function format_flat_rate_boxes(\WC_Shipping_USPS $shipping_method): array
        {
        }
        /**
         * Format merchant box-packing boxes without exposing free-form names.
         *
         * @param array $boxes Merchant box packing boxes.
         * @return array
         */
        private static function format_box_packing_boxes(array $boxes): array
        {
        }
        /**
         * Format merchant custom flat-rate boxes without exposing free-form names.
         *
         * @param array $boxes Merchant custom flat-rate boxes.
         * @return array
         */
        private static function format_custom_flat_rate_boxes(array $boxes): array
        {
        }
        /**
         * Get output schema for the packages ability.
         *
         * @return array
         */
        private static function get_output_schema(): array
        {
        }
        /**
         * Get schema for one USPS flat-rate box.
         *
         * @return array
         */
        private static function get_flat_rate_box_schema(): array
        {
        }
        /**
         * Get schema for one merchant box-packing box.
         *
         * @return array
         */
        private static function get_box_packing_box_schema(): array
        {
        }
        /**
         * Get schema for one merchant custom flat-rate box.
         *
         * @return array
         */
        private static function get_custom_flat_rate_box_schema(): array
        {
        }
    }
    /**
     * Ability definition for reading USPS service configuration.
     */
    class WC_Shipping_USPS_List_Services_Ability implements \Automattic\WooCommerce\Abilities\AbilityDefinition
    {
        /**
         * Ability ID.
         */
        const NAME = 'woocommerce-shipping-usps/list-services';
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
         * Execute the USPS services read ability.
         *
         * @param array $input Ability input.
         * @return array|WP_Error
         */
        public static function execute(array $input = array())
        {
        }
        /**
         * Format configured USPS subservices.
         *
         * @param array $subservices      USPS service catalog subservices.
         * @param array $service_settings Merchant service settings.
         * @return array
         */
        private static function format_subservices(array $subservices, array $service_settings): array
        {
        }
        /**
         * Format one USPS subservice.
         *
         * @param string $code     Subservice code.
         * @param string $name     Subservice name.
         * @param array  $settings Merchant service settings.
         * @return array
         */
        private static function format_subservice(string $code, string $name, array $settings): array
        {
        }
        /**
         * Get output schema for the services ability.
         *
         * @return array
         */
        private static function get_output_schema(): array
        {
        }
        /**
         * Get schema for one USPS subservice.
         *
         * @return array
         */
        private static function get_subservice_schema(): array
        {
        }
    }
}
namespace WooCommerce\USPS\API {
    /**
     * USPS Abstract API class.
     */
    abstract class Abstract_API
    {
        /**
         * Endpoint for the API.
         *
         * @var string
         */
        protected $endpoint;
        /**
         * USPS Shipping Method Class.
         *
         * @var \WC_Shipping_USPS
         */
        protected $shipping_method;
        /**
         * Calculate shipping cost.
         *
         * @param array $package Package to ship.
         *
         * @return void
         */
        abstract public function calculate_shipping($package);
        /**
         * Perform a request to check user ID validness.
         *
         * Error notice will displayed if user ID is invalid.
         */
        abstract public function validate_credentials();
        /**
         * Check if package dimensions and weight are within FCPIS limits.
         *
         * Logs a debug message if the package is outside limits. The USPS API does
         * not validate FCPIS eligibility, so limits must be enforced client-side.
         *
         * @see https://pe.usps.com/text/imm/immc2_022.htm#ep2686853
         *
         * @param float $length Package length in inches.
         * @param float $width  Package width in inches.
         * @param float $height Package height in inches.
         * @param float $weight Package weight in pounds.
         *
         * @return bool True if the package is within FCPIS limits, false if it should be skipped.
         */
        protected function is_package_eligible_for_fcpis(float $length, float $width, float $height, float $weight): bool
        {
        }
    }
    /**
     * First-Class service limits shared by REST and Legacy API implementations.
     */
    final class First_Class_Limits
    {
        /**
         * First Class Mail max weight in ounces.
         */
        public const MAX_WEIGHT_OZ = 13;
        /**
         * First Class Mail max length in inches.
         */
        public const MAX_LENGTH = 15;
        /**
         * First Class Mail max width in inches.
         */
        public const MAX_WIDTH = 12;
        /**
         * First Class Mail max height in inches.
         */
        public const MAX_HEIGHT = 0.75;
        /**
         * First-Class Package International Service max weight in pounds (4 lbs).
         *
         * @see https://pe.usps.com/text/imm/immc2_022.htm#ep2686853
         */
        public const INTL_MAX_WEIGHT_LB = 4;
        /**
         * First-Class Package International Service max length in inches (non-roll).
         *
         * @see https://pe.usps.com/text/imm/immc2_022.htm#ep2686853
         */
        public const INTL_MAX_LENGTH = 24;
        /**
         * First-Class Package International Service max combined dimensions (L+W+H) in inches (non-roll).
         *
         * @see https://pe.usps.com/text/imm/immc2_022.htm#ep2686853
         */
        public const INTL_MAX_COMBINED_DIMENSIONS = 36;
        /**
         * First-Class Package International Service minimum length in inches (non-roll).
         *
         * @see https://pe.usps.com/text/imm/immc2_022.htm#ep2686853
         */
        public const INTL_MIN_LENGTH = 6;
        /**
         * First-Class Package International Service minimum height in inches (non-roll).
         *
         * @see https://pe.usps.com/text/imm/immc2_022.htm#ep2686853
         */
        public const INTL_MIN_HEIGHT = 4;
    }
    // phpcs:disable WordPress.NamingConventions.ValidVariableName.UsedPropertyNotSnakeCase --- USPS API provides an object with camelCase properties and method
    /**
     * USPS XML API class.
     */
    class Legacy_API extends \WooCommerce\USPS\API\Abstract_API
    {
        /**
         * API endpoint.
         *
         * @var string
         */
        public $endpoint = 'https://secure.shippingapis.com/ShippingAPI.dll';
        /**
         * Class constructor.
         *
         * @param \WC_Shipping_USPS $shipping_method USPS shipping method object.
         */
        public function __construct($shipping_method)
        {
        }
        /**
         * Calculate shipping cost.
         *
         * @since   1.0.0
         * @version 4.4.7
         *
         * @param array $package Package to ship.
         *
         * @return void
         */
        public function calculate_shipping($package)
        {
        }
        /**
         * Perform a request to check credentials validness.
         */
        public function validate_credentials()
        {
        }
        /**
         * Get Parsed XML response.
         *
         * @param string $xml XML string.
         *
         * @return \SimpleXMLElement|bool
         *
         * @throws \Exception When the debug is on.
         */
        public function get_parsed_xml(string $xml)
        {
        }
        /**
         * Check found rates.
         *
         * @version 4.4.7
         */
        private function check_found_rates()
        {
        }
        /**
         * Prepare rate.
         *
         * @param mixed  $rate_code Rate code.
         * @param mixed  $rate_id   Rate ID.
         * @param mixed  $rate_name Rate name.
         * @param mixed  $rate_cost Cost.
         * @param string $meta_data Rate meta data.
         * @param int    $sort      Sort order.
         *
         * @return void
         */
        private function prepare_rate($rate_code, $rate_id, $rate_name, $rate_cost, $meta_data = '', $sort = 999)
        {
        }
        /**
         * Get package request.
         *
         * @param array $package Package to ship.
         *
         * @return array
         */
        private function get_standard_package_requests($package)
        {
        }
        /**
         * Generate request xml for flat rate packages.
         *
         * @param array  $package           Package with items to pack.
         * @param string $flat_rate_service 'priority' or 'express.
         *
         * @return array
         */
        private function get_flat_rate_package_requests($package, $flat_rate_service)
        {
        }
        /**
         * Parse response from USPS standard service request.
         *
         * @since 4.4.40
         *
         * @param array<\SimpleXMLElement> $usps_packages List of packages returned from the API.
         * @param bool                    $domestic      Whether domestic or not.
         * @param array                   $package       Package to ship.
         */
        private function parse_rates_from_usps_packages($usps_packages, $domestic, $package)
        {
        }
        /**
         * Parse response from USPS standard service request.
         *
         * @since   4.4.7
         * @version 4.4.8
         *
         * @param mixed $response Body from WP HTTP API.
         *
         * @return array<\SimpleXMLElement>|false
         */
        private function parse_packages_from_usps_api($response)
        {
        }
        /**
         * Debug found quotes in USPS standard service.
         *
         * @param array $quotes   Found quotes.
         * @param bool  $domestic Whether domestic or not.
         */
        private function debug_usps_standard_service_quotes($quotes, $domestic)
        {
        }
        /**
         * Split up USPS requests into batches when the requests exceed more then 25.
         *
         * @since 4.4.40
         *
         * @param array $shipping_package Raw shipping package.
         * @param array $package_requests Package params for the request.
         * @param bool  $domestic         Whether domestic or not.
         *
         * @return array<\SimpleXMLElement> Packages.
         */
        private function batch_request_usps_api($shipping_package, $package_requests, $domestic)
        {
        }
        /**
         * Request standard service through USPS API.
         *
         * @since 4.4.7
         *
         * @param array $package          Raw package.
         * @param array $package_requests Package params for the request.
         * @param bool  $domestic         Whether domestic or not.
         *
         * @return string|bool
         */
        private function request_usps_api($package, $package_requests, $domestic)
        {
        }
        /**
         * Convert request string to array.
         *
         * @param string $request Request string.
         *
         * @return array
         */
        public function convert_request_string_to_array(string $request): array
        {
        }
        /**
         * Convert response string to array.
         *
         * @param string $response Response string.
         *
         * @return array
         */
        public function convert_response_string_to_array(string $response): array
        {
        }
        /**
         * Clean up the response XML.
         *
         * @param \SimpleXMLElement $response_xml Response XML object.
         *
         * @return void
         */
        public function clean_response_xml(\SimpleXMLElement &$response_xml)
        {
        }
        /**
         * Build XML request for USPS standard service.
         *
         * @since 4.4.7
         *
         * @param array $package_requests Package params for the request.
         * @param bool  $domestic         Whether domestic or not.
         *
         * @return string
         */
        private function build_usps_standard_service_request($package_requests, $domestic)
        {
        }
        /**
         * Generate shipping request for weights only.
         *
         * @param array $package Package to ship.
         *
         * @return array
         */
        private function weight_based_shipping($package)
        {
        }
        /**
         * Generate XML requests using box packing method.
         *
         * @version 4.4.7
         *
         * @param array $package Package to ship.
         *
         * @return array Array of XML requests.
         */
        private function box_shipping($package)
        {
        }
        /**
         * Per item shipping.
         *
         * @param mixed $package Package to ship.
         *
         * @return array
         */
        private function per_item_shipping($package)
        {
        }
        /**
         * Generate a package ID for the request.
         *
         * Contains qty and dimension info so we can look at it again later when it
         * comes back from USPS if needed.
         *
         * @param string $id           Package ID.
         * @param int    $qty          Quantity.
         * @param float  $l            Length.
         * @param float  $w            Width.
         * @param float  $h            Height.
         * @param float  $weight       Weight.
         * @param string $request_type 'flatrate' or 'api'.
         * @param string $service      'express' or 'priority'.
         * @param string $service_id   Used by international flat rate requests to define which box to use.
         *
         * @return string
         */
        public function generate_package_id($id, $qty, $l, $w, $h, $weight, $request_type = '', $service = '', $service_id = '')
        {
        }
        /**
         * Return the necessary <MailType> value based on package type and
         * dimensions
         *
         * @param string $package_type   Type.
         * @param float  $value          Value of goods.
         * @param float  $package_length Length.
         * @param float  $package_width  Width.
         * @param float  $package_height Height.
         *
         * @return string The necessary <MailType> value.
         */
        private function get_mailtype($package_type, $value, $package_length, $package_width, $package_height)
        {
        }
    }
    // phpcs:disable WordPress.NamingConventions.ValidVariableName.UsedPropertyNotSnakeCase --- USPS API provides an object with camelCase properties and method
    /**
     * USPS REST API class.
     */
    class REST_API extends \WooCommerce\USPS\API\Abstract_API
    {
        /**
         * Standard rate requests.
         *
         * @var array
         */
        private array $standard_rate_requests = array();
        /**
         * First Class rate requests.
         *
         * @var array
         */
        private array $first_class_rate_requests = array();
        /**
         * True when the most recent box_shipping('letter-rates', ...) pass produced
         * any unpacked items. Used by the FC pipeline to refuse partial-cart FC
         * rates regardless of the merchant's `unpacked_item_handling` choice.
         *
         * @var bool
         */
        private bool $letter_rates_pack_had_unpacked = false;
        /**
         * Cached rate-id prefix (`get_rate_id() . ':'`) shared by helpers that
         * key into found_rates. Lazily computed via get_rate_id_prefix().
         *
         * @var string|null
         */
        private ?string $rate_id_prefix = null;
        /**
         * Priority flat rate requests.
         *
         * @var array
         */
        private array $priority_flat_rate_requests = array();
        /**
         * Express flat rate requests.
         *
         * @var array
         */
        private array $express_flat_rate_requests = array();
        /**
         * Current package being processed.
         *
         * @var array
         */
        private array $package = array();
        /**
         * Whether the current shipment is domestic.
         *
         * @var bool
         */
        private bool $is_domestic_shipment = true;
        /**
         * Rate indicators.
         *
         * @var array
         */
        private array $rate_indicators = array();
        /**
         * Class constructor.
         *
         * @param \WC_Shipping_USPS $shipping_method USPS shipping method object.
         */
        public function __construct(\WC_Shipping_USPS $shipping_method)
        {
        }
        /**
         * Calculate shipping cost.
         *
         * This method processes each package individually, sending a separate API request
         * for each package regardless of its size.
         *
         * @since   4.4.7
         * @version 4.4.7
         *
         * @param array $package Package to ship.
         *
         * @return void
         */
        public function calculate_shipping($package)
        {
        }
        /**
         * Perform a request to check REST API credentials.
         */
        public function validate_credentials()
        {
        }
        /**
         * Get Standard Rate API requests.
         *
         * @return array
         */
        private function get_standard_rate_api_requests(): array
        {
        }
        /**
         * Get First Class Mail Rate API requests.
         *
         * @return array
         */
        private function get_first_class_rate_api_requests(): array
        {
        }
        /**
         * Process API requests and update found rates.
         *
         * @param array  $requests Requests to process.
         * @param string $endpoint API Endpoint.
         *
         * @return void
         */
        private function process_api_requests_and_update_rates(array $requests, string $endpoint): void
        {
        }
        /**
         * Maybe calculate standard rates for the package.
         *
         * @return void
         */
        private function maybe_calculate_standard_rates(): void
        {
        }
        /**
         * Maybe calculate priority flat rates for the package.
         *
         * @return void
         */
        private function maybe_calculate_priority_flat_rates(): void
        {
        }
        /**
         * Maybe calculate express flat rates for the package.
         *
         * @return void
         */
        private function maybe_calculate_express_flat_rates(): void
        {
        }
        /**
         * Maybe calculate express flat rates for the package.
         *
         * @return void
         */
        private function maybe_calculate_first_class_mail_rates(): void
        {
        }
        /**
         * Check if package is eligible for first class service.
         *
         * @return bool
         */
        private function is_package_eligible_for_first_class(): bool
        {
        }
        /**
         * Validate found rates to ensure they have enough packages.
         * Also adds unpacked item costs to rates if needed.
         *
         * This method has side effects on $this->shipping_method->found_rates.
         *
         * Flat-rate buckets merge every box of one service into a single key, so
         * they are checked against that service's own request count instead of the
         * standard one. Legacy does the same.
         *
         * @return void
         */
        private function validate_found_rates(): void
        {
        }
        /**
         * Generate XML requests using box packing method.
         *
         * @version 5.4.0
         *
         * @param string $endpoint API endpoint name.
         * @param array  $constraints Filter packing boxes by given constraints.
         *
         * @return array Array of JSON requests.
         */
        private function box_shipping($endpoint = 'options', $constraints = array()): array
        {
        }
        /**
         * Generate shipping request for weights only.
         *
         * @param string     $endpoint           The endpoint to use for the request. Default 'options'.
         * @param float|null $max_package_weight Maximum package weight in pounds. Default null.
         *
         * @return array
         */
        private function weight_based_shipping($endpoint = 'options', $max_package_weight = null): array
        {
        }
        /**
         * Per item shipping.
         *
         * @param string $endpoint The endpoint to use for the request. Default 'options'.
         *
         * @return array
         */
        private function per_item_shipping($endpoint = 'options'): array
        {
        }
        /**
         * Filter boxes by given constraints.
         *
         * @param  array $constraints Constraints array.
         *
         * @return array
         */
        private function get_boxes($constraints)
        {
        }
        /**
         * Build a USPS API request array for the package.
         *
         * @param array  $destination    Destination of the package.
         * @param array  $dimensions     Package dimensions.
         * @param float  $weight         Package weight.
         * @param float  $declared_value Package Value.
         * @param string $mail_class     Mail class.
         * @param string $endpoint       The endpoint to use for the request. Default 'options'.
         *
         * @return array
         */
        public function build_api_request(array $destination, array $dimensions, float $weight, float $declared_value, string $mail_class = 'ALL', $endpoint = 'options'): array
        {
        }
        /**
         * Build a USPS API request array for the package.
         *
         * @param array  $destination    Destination of the package.
         * @param array  $dimensions     Package dimensions.
         * @param float  $weight         Package weight.
         * @param float  $declared_value Package Value.
         * @param string $mail_class     Mail class.
         *
         * @return array
         */
        public function build_options_api_request(array $destination, array $dimensions, float $weight, float $declared_value, string $mail_class): array
        {
        }
        /**
         * Determine which USPS extra-service codes to request for a package.
         *
         * Insurance maps to code 930 (declared value <= $500) or 931 (> $500) and is
         * available for both domestic and international shipments, but only when
         * there is a positive declared value to insure. Signature confirmation maps
         * to code 921 and is available for domestic shipments only.
         *
         * Note: the 930/931 split is USPS's USD coverage tier; the declared value is
         * compared raw (no currency conversion), so non-USD stores may map near the
         * $500 boundary to the adjacent tier.
         *
         * @param float $declared_value The package declared value, in store currency.
         *
         * @since 5.6.0
         *
         * @return int[] List of USPS extra-service codes to request.
         */
        private function get_requested_extra_service_codes(float $declared_value): array
        {
        }
        /**
         * Build a USPS API request array for the package.
         *
         * @param array  $destination    Destination of the package.
         * @param array  $dimensions     Package dimensions.
         * @param float  $weight         Package weight.
         * @param float  $declared_value Package Value.
         * @param string $mail_class     Mail class.
         *
         * @return array
         */
        public function build_letters_api_request(array $destination, array $dimensions, float $weight, float $declared_value, string $mail_class): array
        {
        }
        /**
         * Convert a weight in pounds to ounces, rounded to 3 decimal places.
         *
         * wc_get_weight() routes lbs→oz through kg using SI conversion constants,
         * which introduces floating-point artifacts (e.g. 0.5625 lbs → 9.000002367 oz).
         * Rounding to 3 decimal places eliminates the noise while retaining
         * sub-milliounce precision.
         *
         * @param float $weight_lbs Weight in pounds.
         * @return float Weight in ounces, rounded to 3 decimal places.
         */
        private function convert_weight_to_oz(float $weight_lbs): float
        {
        }
        /**
         * Lazily compute and cache the rate-id prefix used to key found_rates.
         *
         * @return string
         */
        private function get_rate_id_prefix(): string
        {
        }
        /**
         * Check if a rate key is one of the grouped flat-rate buckets.
         *
         * @param  string $rate_key Rate key.
         *
         * @return bool
         */
        private function is_flat_rate($rate_key): bool
        {
        }
        /**
         * Check if a rate key is a First Class service produced via the letter-rates pipeline.
         *
         * Keep this list in sync with `includes/data/data-services.php` whenever a
         * new FC service is added.
         *
         * @param  string $rate_key Rate key.
         *
         * @return bool
         */
        private function is_first_class_rate($rate_key): bool
        {
        }
        /**
         * Check if a service code represents a domestic flat rate service.
         *
         * @param string $service_code The service code to check.
         *
         * @return bool True if the service is domestic, false otherwise.
         */
        private function is_domestic_flat_rate_service(string $service_code): bool
        {
        }
        /**
         * Check if a service ID represents a domestic service.
         *
         * @param string $service_id The service ID to check.
         *
         * @return bool True if the service is domestic, false if it's international.
         */
        private function is_domestic_service(string $service_id): bool
        {
        }
        /**
         * Map USPS REST 4-character SKU prefixes to legacy numeric service IDs.
         *
         * This keeps backward compatibility with merchants’ saved settings, which
         * are keyed by legacy numeric IDs from data-services.php.
         *
         * @param string $sku_prefix The first 4 characters of the REST SKU.
         * @return string Legacy numeric service ID (as string) or the original code if unmapped.
         */
        private function map_rest_sku_to_legacy_code(string $sku_prefix): string
        {
        }
        /**
         * Sum the postage USPS priced for a rate option.
         *
         * USPS can return an option whose only priced component is a surcharge
         * such as "Nonstandard Length > 22". Prices are summed across rates[]
         * because USPS splits some products into several priced components.
         *
         * Callers treat null like zero: with no priced component there is nothing
         * to charge.
         *
         * @param object $rate_option A rate option from the API response.
         *
         * @since 5.6.7
         *
         * @return float|null Summed postage, or null when no component carries a numeric price.
         */
        private function get_rate_option_postage($rate_option): ?float
        {
        }
        /**
         * Get the flat rate box name from the service code.
         *
         * @param string $service_code The service code to get the box name for.
         *
         * @return string The flat rate box name or empty string if not found.
         */
        public function get_flat_rate_box_name_from_service_code(string $service_code): string
        {
        }
        /**
         * Get the expected USPS rateIndicator for a flat rate box service ID.
         *
         * We prefer using mailClass + rateIndicator to match rates for flat rate boxes.
         * If a service ID is not mapped, return an empty string.
         *
         * @param string $service_id Flat rate box service ID (e.g., d16, d29, d44, d17, d17b, d28, d22, d13, d30, d63).
         * @return string Expected rateIndicator or empty string if unknown.
         */
        private function get_rate_indicator_for_box(string $service_id): string
        {
        }
        /**
         * Add flat rate boxes to the boxpacker object.
         *
         * @param \WooCommerce\BoxPacker\Abstract_Packer $boxpacker         BoxPacker object.
         * @param string          $flat_rate_service 'priority' or 'express'.
         *
         * @return void
         */
        private function add_flat_rate_boxes_to_boxpacker(\WooCommerce\BoxPacker\Abstract_Packer $boxpacker, string $flat_rate_service): void
        {
        }
        /**
         * Add custom flat rate boxes to the boxpacker object.
         *
         * @param \WooCommerce\BoxPacker\Abstract_Packer $boxpacker         BoxPacker object.
         * @param string          $flat_rate_service 'priority' or 'express'.
         *
         * @return array List of added box descriptions for debug logging.
         */
        private function add_custom_flat_rate_boxes_to_boxpacker(\WooCommerce\BoxPacker\Abstract_Packer $boxpacker, string $flat_rate_service): array
        {
        }
        /**
         * Generate request xml for flat rate packages.
         *
         * @param string $flat_rate_service 'priority' or 'express'.
         *
         * @return array
         */
        private function get_flat_rate_api_requests(string $flat_rate_service): array
        {
        }
        /**
         * Parse responses from USPS API.
         *
         * @since 4.4.40
         *
         * @param array $api_responses Array of API responses.
         *
         * @return array
         */
        private function parse_rates_from_api_responses(array $api_responses): array
        {
        }
        /**
         * Parse rate options from API response.
         *
         * @param string $api_response API response (body) JSON string.
         *
         * @return array Rate options.
         *
         * @since   4.4.7
         * @version 4.4.8
         */
        private function parse_rate_options_from_api_response(string $api_response): array
        {
        }
        /**
         * Set up necessary properties before starting the rates calculations.
         *
         * @param array $package The shipment.
         *
         * @return void
         */
        public function run_pre_calculation_setup(array $package): void
        {
        }
        /**
         * Check found rates.
         *
         * @version 4.4.7
         */
        private function check_found_rates()
        {
        }
        /**
         * Append customer-selectable extra-service rate variants.
         *
         * For each base rate that carries captured insurance and/or signature
         * confirmation prices, add additional selectable rates so the customer can
         * choose, for example, "Priority Mail" or "Priority Mail - Insurance" at
         * checkout. The base rate is always retained, so taking an add-on is
         * optional. Variants are only produced when the method offers all rates; in
         * "cheapest only" mode a single rate is shown and there is nothing to choose.
         *
         * @since 5.6.0
         *
         * @return void
         */
        private function maybe_add_extra_service_variants(): void
        {
        }
        /**
         * Build a single extra-service rate variant from a base rate.
         *
         * @param string $base_rate_id The base rate id.
         * @param array  $base_rate    The base rate definition.
         * @param string $variant_type One of "insurance", "signature", "insurance_signature".
         * @param float  $surcharge    The total extra-service surcharge to add to the base cost.
         * @param string $label        The translated extra-service label for the variant.
         *
         * @since 5.6.0
         *
         * @return array The variant rate definition.
         */
        private function build_extra_service_variant(string $base_rate_id, array $base_rate, string $variant_type, float $surcharge, string $label): array
        {
        }
        /**
         * Sends an API request to USPS.
         *
         * @since 4.4.7
         *
         * @param array  $request             The API request to send.
         * @param string $endpoint            The API endpoint.
         * @param bool   $force_token_refresh Optional. Whether to force retrieval of a new access token. Default false.
         *
         * @return string|bool The response body on success, or false on failure.
         */
        private function send_api_request(array $request, string $endpoint, bool $force_token_refresh = false)
        {
        }
        /**
         * Maybe simplify the response body.
         *
         * @param string $response_body The response body.
         *
         * @return mixed
         */
        private function maybe_simplify_response_body(string $response_body)
        {
        }
        /**
         * Generate a package ID for the request.
         *
         * Contains qty and dimension info so we can look at it again later when it
         * comes back from USPS if needed.
         *
         * @param string  $id           Package ID.
         * @param int     $qty          Quantity.
         * @param float[] $dimensions   Array[L, W, H].
         * @param float   $weight       Weight.
         * @param string  $request_type "flatrate" or "api".
         * @param string  $service      "express" or "priority".
         * @param string  $service_id   Used by international flat rate requests to define which box to use.
         *
         * @return string
         */
        public function generate_package_id($id, $qty, $dimensions, $weight, $request_type = '', $service = '', $service_id = '')
        {
        }
        /**
         * Get the USPS API responses.
         *
         * @param array  $api_requests API requests.
         * @param string $endpoint API endpoint.
         *
         * @return array
         */
        private function get_api_responses(array $api_requests, string $endpoint): array
        {
        }
        /**
         * Check whether a raw API response carries a rate option USPS will not price.
         *
         * Applies the same rule the extraction guards use, so a response is rejected
         * from the cache exactly when one of its options would be dropped at parse
         * time. Responses that carry no rate options at all are cached as before.
         *
         * @param string $response Raw API response body.
         *
         * @since 5.6.7
         *
         * @return bool True when at least one rate option has no usable price.
         */
        private function response_has_unpriced_rate_option(string $response): bool
        {
        }
        /**
         * Parse rates from rate options.
         *
         * @param array  $rate_options Rate options.
         * @param string $request_id   Request ID.
         *
         * @return array
         */
        private function extract_rates_from_rate_options(array $rate_options, string $request_id): array
        {
        }
        /**
         * Read the insurance and signature confirmation prices from a rate option's
         * extraServices array.
         *
         * USPS returns the price for each requested extra service inside the rate
         * option. Insurance is reported under code 930 or 931, and signature
         * confirmation (a domestic-only service) under code 921. Prices are
         * multiplied by the package quantity so they accumulate consistently with the
         * base rate cost. Unrelated codes and legitimately free ($0) services are
         * skipped silently; a requested code returned without a usable price is
         * logged so the silent skip is traceable.
         *
         * @param object $rate_option The USPS rate option object.
         * @param int    $qty         The package quantity multiplier.
         *
         * @since 5.6.0
         *
         * @return array{insurance?: float, signature?: float} Extra-service prices keyed by type.
         */
        private function extract_extra_service_prices($rate_option, int $qty): array
        {
        }
        /**
         * Check if given indicator belongs to the given rate.
         *
         * @param string      $rate_name      The rate to check against.
         * @param string|null $rate_indicator The rate indicator to check.
         *
         * @return bool True if the rate indicator belongs to the given rate, false otherwise.
         */
        private function is_rate_indicator(string $rate_name, ?string $rate_indicator): bool
        {
        }
    }
    /**
     * Class USPS_OAuth
     *
     * Handles the OAuth authentication for the USPS REST API.
     *
     * @package WooCommerce\USPS
     */
    class USPS_OAuth
    {
        /**
         * The name of the transient used to store the access token.
         *
         * @var \WC_Shipping_USPS
         */
        private \WC_Shipping_USPS $shipping_method;
        /**
         * The name of the transient used to store the access token.
         *
         * @var string
         */
        private string $access_token_transient_name;
        /**
         * Constructor.
         *
         * @param \WC_Shipping_USPS $shipping_method The USPS shipping method object.
         */
        public function __construct(\WC_Shipping_USPS $shipping_method)
        {
        }
        /**
         * Check if we've successfully authenticated.
         *
         * @return bool
         */
        public function is_authenticated(): bool
        {
        }
        /**
         * Retrieves an access token.
         *
         * @param bool $force_token_refresh Optional. Whether to force retrieval of a new token from the API instead of using the cached token. Default false.
         *
         * @return string|false
         */
        public function get_access_token(bool $force_token_refresh = false)
        {
        }
        /**
         * Retrieves an access token from the USPS OAuth API.
         *
         * @param bool $bypass_static_cache Optional. Whether to bypass the static cache and request a new token. Default false.
         *
         * @return object|false The token response object on success, or false if the request fails.
         */
        private function get_token_data(bool $bypass_static_cache = false)
        {
        }
    }
}
namespace WooCommerce\USPS {
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
        const CONTEXT = 'woocommerce-shipping-usps';
        /**
         * WC Logger
         *
         * @var \WC_Logger
         */
        private $logger;
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
        /**
         * Add an error log entry.
         *
         * @param string $message Message to display.
         * @param array  $data    Additional contextual data to pass.
         *
         * @return void
         */
        public function error(string $message, array $data = array())
        {
        }
    }
}
namespace {
    /**
     * Admin handler.
     */
    class WC_Shipping_USPS_Admin
    {
        const META_KEY_ENVELOPE = '_shipping-usps-envelope';
        const META_KEY_DECLARED_VALUE = '_shipping-usps-declared-value';
        /**
         * Check if the store is using the Legacy (SOAP) API.
         *
         * Uses the effective api_type from WC_Shipping_USPS which accounts for
         * maybe_disable_soap_api() overrides.
         *
         * @return bool True if using the Legacy (SOAP) API, false if REST or unconfigured.
         */
        public static function is_using_legacy_api()
        {
        }
        /**
         * Class constructor.
         */
        public function __construct()
        {
        }
        /**
         * Add option in the product edit page.
         */
        public function product_options()
        {
        }
        /**
         * Add options in product variations.
         *
         * @param int     $loop           Loop index.
         * @param array   $variation_data Variation data.
         * @param WP_Post $variation      Product variation object.
         */
        public function variation_options($loop, array $variation_data, \WP_Post $variation)
        {
        }
        /**
         * Save custom fields
         *
         * @param int $post_id Product ID.
         */
        public function process_product_meta($post_id)
        {
        }
        /**
         * Save custom fields
         *
         * @param int $post_id Product ID.
         * @param int $loop    Loop index.
         */
        public function process_product_variation_meta($post_id, $loop)
        {
        }
    }
}
namespace WooCommerce\USPS {
    trait Util
    {
        /**
         * Helper method to check whether given zone_id has usps method instance.
         *
         * @param int $zone_id Zone ID.
         *
         * @return bool True if given zone_id has usps method instance.
         *
         * @since 4.4.0
         */
        public function is_zone_has_usps(int $zone_id): bool
        {
        }
        /**
         * Is USPS Settings Page.
         *
         * @return bool
         */
        public function is_usps_settings_page()
        {
        }
        /**
         * Is USPS Instance Settings Page.
         *
         * @return bool
         */
        public function is_usps_instance_settings_page()
        {
        }
        /**
         * Helper method to get the number of usps method instances.
         *
         * @return int The number of usps method instances
         */
        public function instance_count(): int
        {
        }
        /**
         * Helper method to check if there are existing usps method instances.
         *
         * @return bool
         */
        public function instances_exist(): bool
        {
        }
        /**
         * Determines whether the specified country is defined by WooCommerce as requiring a postcode during checkout.
         *
         * @param string $country_code Country code.
         *
         * @return bool
         */
        public function is_postcode_required_for_country(string $country_code): bool
        {
        }
    }
}
namespace {
    /**
     * Shipping method main class.
     *
     * @version 4.4.0
     */
    class WC_Shipping_USPS extends \WC_Shipping_Method
    {
        use \WooCommerce\USPS\Util;
        /**
         * The URL for the USPS OAuth API endpoint.
         *
         * @var string
         */
        const API_URL = 'https://apis.usps.com';
        /**
         * API type.
         *
         * @var string
         */
        public $api_type;
        /**
         * API class.
         *
         * @var \WooCommerce\USPS\API\Abstract_API
         */
        public $api;
        /**
         * USPS OAuth instance.
         *
         * @var \WooCommerce\USPS\API\USPS_OAuth
         */
        public $oauth;
        /**
         * Countries considered as domestic.
         *
         * @var array
         */
        public $domestic = array('US', 'PR', 'VI', 'MH', 'FM', 'GU', 'MP', 'AS', 'UM');
        /**
         * Found rates.
         *
         * @var array
         */
        public array $found_rates = array();
        /**
         * Raw Found rates.
         * Allows us to filter all found_rates before finally being returned.
         *
         * @var array
         */
        public $raw_found_rates;
        /**
         * Flat rate boxes.
         *
         * @var array
         */
        public $flat_rate_boxes;
        /**
         * Whether Flat Rate Box Weights are enabled or not.
         *
         * @var bool
         */
        public $enable_flat_rate_box_weights;
        /**
         * Whether Custom Flat Rate Boxes are enabled or not.
         *
         * @var bool
         */
        public bool $enable_custom_flat_rate_boxes;
        /**
         * Flat rate empty box weights.
         *
         * @var array
         */
        public $flat_rate_box_weights;
        /**
         * Custom flat rate boxes with adjustable dimensions.
         *
         * @var array
         */
        public array $custom_flat_rate_boxes;
        /**
         * Services.
         *
         * @var array
         */
        public $services;
        /**
         * Origin postcode.
         *
         * @var string
         */
        public $origin;
        /**
         * Whether debug is enabled or not.
         *
         * @var bool
         */
        public $debug;
        /**
         * Whether flat rate boxes is enabled or not.
         *
         * Valid values are "yes" and "no".
         *
         * @var string
         */
        public $enable_flat_rate_boxes;
        /**
         * Shipping classes whose restricted to Media Mail.
         *
         * @var array
         */
        public $mediamail_restriction;
        /**
         * USPS SOAP user ID.
         *
         * @var string
         */
        public $user_id;
        /**
         * USPS REST client ID.
         *
         * @var string
         */
        public $client_id;
        /**
         * USPS REST client secret.
         *
         * @var string
         */
        public $client_secret;
        /**
         * Packing method.
         *
         * Possible values are "per_item", "box_packing", and "weight_based".
         *
         * @var string
         */
        public $packing_method;
        /**
         * User defined boxes.
         *
         * @var array
         */
        public $boxes;
        /**
         * Defined services from setting.
         *
         * @var array
         */
        public $custom_services;
        /**
         * Rates to offer.
         *
         * Valid values are "all" and "cheapest".
         *
         * @var string
         */
        public $offer_rates;
        /**
         * Whether to offer optional shipping insurance as a selectable rate at checkout.
         *
         * @since 5.6.0
         *
         * @var bool
         */
        public $offer_insurance;
        /**
         * Whether to offer optional signature confirmation as a selectable rate at checkout.
         *
         * @since 5.6.0
         *
         * @var bool
         */
        public $offer_signature;
        /**
         * Shipping rate type ONLINE|ALL.
         *
         * @var string
         */
        public $shippingrates;
        /**
         * Fallback rate amount if no matching rates from API.
         *
         * @var string
         */
        public $fallback;
        /**
         * Default product dimensions to use for products without set dimensions.
         *
         * @var array
         */
        public $product_dimensions;
        /**
         * Default product weight to use for products without a set weight.
         *
         * @var float
         */
        public $product_weight;
        /**
         * Flat rate fee.
         *
         * @var string
         */
        public $flat_rate_fee;
        /**
         * Method to handle unpacked item.
         *
         * Possible values are "", "ignore", "fallback", and "abort".
         *
         * @var string
         */
        public $unpacked_item_handling;
        /**
         * Whether standard service (rates API) is enabled or not.
         *
         * @var bool
         */
        public $enable_standard_services;
        /**
         * Whether sort the rate by price.
         *
         * @var bool
         */
        public $sort_by_price;
        /**
         * Total cost of unpacked items.
         *
         * @var float
         */
        public $unpacked_item_costs;
        /**
         * Transient's name for USPS API request.
         *
         * Saved the request params in property because transient need to created
         * in another method.
         *
         * @since   4.4.9
         * @version 4.4.9
         *
         * @see     https://github.com/woocommerce/woocommerce-shipping-usps/issues/145
         *
         * @var string
         */
        public $request_transient;
        /**
         * Logger instance.
         *
         * @var \WooCommerce\USPS\Logger
         */
        public \WooCommerce\USPS\Logger $logger;
        /**
         * Sets the box packer library to use.
         *
         * @var string
         */
        public $box_packer_library;
        /**
         * Constructor.
         *
         * @param int $instance_id Instance ID.
         */
        public function __construct($instance_id = 0)
        {
        }
        /**
         * Checks whether this shipping instance is available or not.
         *
         * @param array $package Package to ship.
         *
         * @return bool True if available.
         */
        public function is_available($package)
        {
        }
        /**
         * Initialize settings.
         *
         * @version 4.4.0
         * @since   4.4.0
         * @return bool
         */
        private function set_settings()
        {
        }
        /**
         * Output a debug message.
         *
         * @param string $message Debug message.
         * @param array  $data    Optional. Additional data to pass.
         */
        public function debug(string $message, array $data = array())
        {
        }
        /**
         * Output a debug message.
         *
         * @param string $message Debug message.
         * @param array  $data    Optional. Additional data to pass.
         */
        public function error(string $message, array $data = array())
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
         * If the box packer library option is not yet set and there are existing
         * USPS shipping method instances, we can assume that this is not a
         * new/fresh installation of the USPS plugin,
         * so we should default to 'original'
         *
         * If the box packer library option is not set and there are no
         * USPS shipping method instances, then this is likely a new
         * installation of the USPS plugin,
         * so we should default to 'dvdoug'
         *
         * @return string
         */
        public function get_default_box_packer_library(): string
        {
        }
        /**
         * Add meta keys to the list of keys
         * to hide in the order item meta
         *
         * @param array $keys Item meta keys.
         *
         * @return array|mixed
         */
        public function add_hidden_order_itemmeta_keys($keys)
        {
        }
        /**
         * Process settings on save.
         *
         * @return void
         */
        public function process_admin_options()
        {
        }
        /**
         * HTML for oauth_status option.
         *
         * @param string $key  Option key.
         * @param array  $data Option data.
         *
         * @return string HTML for oauth_status option.
         */
        public function generate_oauth_status_html($key, $data)
        {
        }
        /**
         * HTML for services option.
         *
         * @return string HTML for services option.
         */
        public function generate_services_html(): string
        {
        }
        /**
         * HTML for box packing option.
         *
         * @return string HTML for box packing option.
         */
        public function generate_box_packing_html()
        {
        }
        /**
         * HTML for flat_rate_box_weights option.
         *
         * @return string HTML for flat_rate_box_weights option.
         */
        public function generate_flat_rate_box_weights_html()
        {
        }
        /**
         * HTML for custom_flat_rate_boxes option.
         *
         * @return string HTML for custom_flat_rate_boxes option.
         */
        public function generate_custom_flat_rate_boxes_html(): string
        {
        }
        /**
         * HTML for the product dimensions option.
         *
         * @return string HTML for the product dimensions option.
         */
        public function generate_product_dimensions_html(): string
        {
        }
        /**
         * Validate product_dimensions field.
         *
         * @return array
         */
        public function validate_product_dimensions_field(): array
        {
        }
        /**
         * Validate flat_rate_box_weights field.
         *
         * @return array
         */
        public function validate_flat_rate_box_weights_field(): array
        {
        }
        /**
         * Validate custom_flat_rate_boxes field.
         *
         * @return array Validated custom flat rate boxes.
         */
        public function validate_custom_flat_rate_boxes_field(): array
        {
        }
        /**
         * Validate flat_rate_fee field.
         *
         * @since   4.4.6
         * @version 4.4.6
         *
         * @param string $key   Key.
         * @param string $value Value.
         *
         * @return string
         */
        public function validate_flat_rate_fee_field($key, $value)
        {
        }
        /**
         * Validate origin postcode field.
         *
         * Warns the admin when the origin postcode is blank, since it is
         * required by every USPS API request type (domestic and international).
         *
         * @param string $key   Field key.
         * @param string $value Posted value.
         *
         * @return string Sanitized value (saved even when empty so other settings are not blocked).
         *
         * @since 5.5.4
         */
        public function validate_origin_field($key, $value)
        {
        }
        /**
         * Validate box packing field.
         *
         * @param string $key Field's key.
         *
         * @return array Validated value.
         */
        public function validate_box_packing_field($key)
        {
        }
        /**
         * Validate services field.
         *
         * @param string $key Field's key.
         *
         * @return array Validated value.
         */
        public function validate_services_field($key)
        {
        }
        /**
         * Clear transients used by this shipping method.
         */
        public function clear_transients()
        {
        }
        /**
         * Initialize form fields.
         */
        public function init_form_fields()
        {
        }
        /**
         * Get the saved Media Mail restriction as a normalized array.
         *
         * Shared by set_settings() and the settings-screen flagger so rate
         * enforcement and the settings UI always read the same restriction set.
         *
         * @since 5.6.3
         * @return array
         */
        private function get_stored_mediamail_restriction()
        {
        }
        /**
         * Surface Media Mail restriction entries that no longer resolve to a
         * shipping class.
         *
         * A deleted shipping class keeps its term id in the saved
         * `mediamail_restriction` option while disappearing from the multiselect
         * options, so the settings screen shows no restriction while checkout keeps
         * dropping Media Mail. Values that are not canonical term ids (written by
         * snippets or imports) also stay invisible in the UI while still altering
         * rate enforcement. Merging the unresolvable values back into the options
         * keeps the stored value visible and lets the merchant clear it
         * deliberately. Rate calculation is unchanged: the restriction stays in
         * force until cleared.
         *
         * Must run after `$instance_form_fields` is set: this method reads and
         * rewrites `$instance_form_fields['mediamail_restriction']['options']`
         * directly, and get_option() routes to the stored instance settings by
         * looking the key up in the instance form fields. It also normalizes the
         * in-memory `$instance_settings['mediamail_restriction']` scalars to
         * strings so stored int values render selected in the multiselect.
         *
         * @since 5.6.3
         */
        private function flag_unresolvable_mediamail_restriction_values()
        {
        }
        /**
         * Maybe disable the SOAP API settings.
         *
         * @return void
         */
        private function maybe_disable_soap_api()
        {
        }
        /**
         * Check if the SOAP API is configured.
         *
         * @return bool
         */
        public function is_soap_api_configured(): bool
        {
        }
        /**
         * Check if the user is on the USPS settings page.
         *
         * @return bool
         */
        public function is_usps_settings_page(): bool
        {
        }
        /**
         * Check if any of the First Class services are enabled.
         *
         * @param bool $is_domestic_shipment Whether the shipment is domestic or international.
         *
         * @return bool
         */
        public function has_enabled_first_class_service(bool $is_domestic_shipment): bool
        {
        }
        /**
         * Check whether a stored service entry is enabled.
         *
         * The `enabled` flag round-trips through `wp_options`, so a value written by
         * anything other than the admin form — WP-CLI, a staging import that
         * JSON-encodes the settings blob, a legacy migration — arrives as `1`, `'1'`
         * or `'yes'` rather than a real boolean. Comparing with a strict `true ===`
         * silently drops those rates even though the UI shows the service ticked,
         * which is the WOOUSPS-65 signature.
         *
         * An entry that stores no `enabled` key carries no opinion, so it counts as
         * enabled. That matches the long-standing behaviour for a service that has no
         * stored entry at all, and it stops a partially-shaped blob from raising an
         * undefined-index warning and dropping the rate as a side effect.
         *
         * @since 5.6.1
         *
         * @param string          $rate_code   Service key, e.g. `D_MEDIA_MAIL`.
         * @param string|int      $code        Sub-service id, e.g. `'6'`.
         * @param string|int|null $subsub_code Sub-sub-service key. Only used when `$code` is `'0'`.
         * @param object|null     $rate        Rate being considered, named in the debug line when it
         *                                     is skipped. Passed as an object so nothing is formatted
         *                                     unless the rate is actually dropped.
         *
         * @return bool
         */
        public function is_service_enabled($rate_code, $code, $subsub_code = \null, $rate = \null): bool
        {
        }
        /**
         * Describe the rate being skipped, for the debug line.
         *
         * REST rates carry `description` and `SKU`; Legacy quotes carry
         * `MailService` and no SKU. Returns an empty string when neither is
         * available, so the caller can append it unconditionally.
         *
         * @since 5.6.1
         *
         * @param object|null $rate Rate or quote object.
         *
         * @return string
         */
        private function describe_skipped_rate($rate): string
        {
        }
        /**
         * Log a rate skipped at the enabled gate.
         *
         * Fires on every rejection rather than once per service. The gate runs
         * inside the per-rate-option loop, so a disabled service that matches
         * several rate options produces a line per match, which is deliberate: this
         * path logged nothing at all before, and that silence is what made
         * WOOUSPS-65 undiagnosable from a merchant log.
         *
         * @since 5.6.1
         *
         * @param string          $rate_code   Service key, e.g. `D_MEDIA_MAIL`.
         * @param string|int      $code        Sub-service id, e.g. `'6'`.
         * @param string|int|null $subsub_code Sub-sub-service key, when set.
         * @param object|null     $rate        Rate being skipped, named in the line when available.
         *
         * @return void
         */
        private function debug_service_skipped($rate_code, $code, $subsub_code = \null, $rate = \null)
        {
        }
        /**
         * Coerce a stored `enabled` flag to a boolean.
         *
         * A non-scalar flag counts as disabled, matching the pre-fix `true ===`
         * comparison exactly. The guard exists because wc_string_to_bool() calls
         * strtolower(), which throws a TypeError on an array or object rather than
         * simply returning false.
         *
         * @since 5.6.1
         *
         * @param mixed $flag Raw flag as it comes out of the settings blob.
         *
         * @return bool
         */
        private function coerce_enabled_flag($flag): bool
        {
        }
        /**
         * Calculate shipping cost.
         *
         * @since   1.0.0
         * @version 4.4.7
         *
         * @param array $package Package to ship.
         *
         * @return void
         */
        public function calculate_shipping($package = array())
        {
        }
        /**
         * Get metadata package description string for the shipping rate.
         *
         * @since   4.4.7
         * @version 4.4.7
         *
         * @param array $params Meta data info to join.
         *
         * @return string Rate meta data.
         */
        public function get_rate_package_description($params)
        {
        }
        /**
         * Sort rate.
         *
         * @param mixed $a A.
         * @param mixed $b B.
         *
         * @return int
         */
        public function sort_rates($a, $b)
        {
        }
        /**
         * Get country name from given country code.
         *
         * @param string $code Country's code.
         *
         * @return bool|string False if country code is not found or string if there's
         *                     a match from a given country's code.
         */
        public function get_country_name($code)
        {
        }
        /**
         * Get dafault API type.
         *
         * @return string soap|rest;
         */
        public function get_default_api_type()
        {
        }
        /**
         * Undocumented function
         *
         * @param string $country Country code.
         *
         * @return bool
         */
        public function is_domestic(string $country): bool
        {
        }
        /**
         * Check if dimensions meet USPS minimum mailpiece requirements.
         *
         * @param float $package_length Length.
         * @param float $package_width  Width.
         * @param float $package_height Height (thickness).
         *
         * @return bool Whether dimensions meet USPS minimums.
         */
        private function meets_minimum_mailpiece_dimensions($package_length, $package_width, $package_height)
        {
        }
        /**
         * Check if dimensions fall within "Card" specs.
         *
         * @param float $package_length Length.
         * @param float $package_width  Width.
         * @param float $package_height Height.
         *
         * @return bool Whether or not package fit "Card" specs.
         */
        public function is_card($package_length, $package_width, $package_height): bool
        {
        }
        /**
         * Check if dimensions fall within "Letter" specs.
         *
         * @param float $package_length Length.
         * @param float $package_width  Width.
         * @param float $package_height Height.
         *
         * @return bool Whether or not package fit "Letter" specs.
         */
        public function is_letter($package_length, $package_width, $package_height)
        {
        }
        /**
         * Check if dimensions fall within "Large Envelope" specs.
         *
         * @param float $package_length Length.
         * @param float $package_width  Width.
         * @param float $package_height Height.
         *
         * @return bool Whether or not package fit "Large Envelope" specs.
         */
        public function is_large_envelope($package_length, $package_width, $package_height)
        {
        }
        /**
         * Check and return a boolean value to indicate if any package contain an item
         * that's over given weight.
         *
         * @since 4.4.33
         *
         * @param array  $package Package to ship.
         * @param float  $weight Package max weight.
         * @param string $unit Unit (optional, default lbs).
         *
         * @return bool true if there is at least 1 package with a weight greater than the specified max weight.
         */
        public function is_package_overweight($package, $weight, $unit = 'lbs')
        {
        }
        /**
         * Calculates the girth of the package from dimensions.
         *
         * Ref: https://www.ups.com/us/en/help-center/packaging-and-supplies/prepare-overize.page
         *
         * @since 4.4.45
         *
         * @param array $dimensions The dimension to calculate from.
         *
         * @return int $girth
         */
        public function get_girth($dimensions = \null)
        {
        }
        /**
         * Normalize and convert dimensions to inches.
         *
         * Ensures the dimensions array has exactly 3 valid float values,
         * converts them to inches, and sorts them in descending order.
         *
         * @param array $dimensions Raw dimensions array.
         *
         * @return float[] Normalized dimensions in inches, sorted descending.
         */
        private function normalize_and_convert_dimensions_to_inches(array $dimensions): array
        {
        }
        /**
         * Loop through the default product dimensions
         * for this instance, convert the values to
         * inches and return as an array.
         *
         * @param int|float   $qty     Quantity (optional, default 1).
         * @param ?WC_Product $product WC_Product (optional, default null).
         *
         * @return float[] the default product dimensions in inches.
         */
        public function get_default_product_dimensions($qty = 1, $product = \null): array
        {
        }
        /**
         * Loop through the default product dimensions
         * for this instance, convert the values to
         * inches and return as an array.
         *
         * @param WC_Product $product WC_Product.
         * @param int|float  $qty Quantity (optional, default 1).
         *
         * @return array the product dimensions in inches
         */
        public function get_product_dimensions($product, $qty = 1): array
        {
        }
        /**
         * Return the default product weight converted to inches
         *
         * @return float the default product weight
         */
        public function get_default_product_weight()
        {
        }
        /**
         * Return the default product weight converted to inches
         *
         * @param WC_Product $data WC Product.
         *
         * @return float the default product weight
         */
        public function get_product_weight($data)
        {
        }
        /**
         * Get the declared value for a product, with parent fallback for variations.
         *
         * Lookup chain: variation meta → parent product meta → product price.
         *
         * @param WC_Product $product Product or variation object.
         * @return float
         */
        public function get_product_declared_value(\WC_Product $product): float
        {
        }
        /**
         * Return the empty box weight if box weights should
         * be included in the calculations. Check for an override
         * first, before returning the default.
         *
         * @param string $box_key        The key for the requested box.
         * @param float  $default_weight The weight to use if the weight isn't overridden.
         *
         * @return float|mixed
         */
        public function get_empty_box_weight(string $box_key, float $default_weight)
        {
        }
        /**
         * Check if the package's dimensions match those of a USPS tube.
         *
         * @param string $length Package length.
         * @param string $width  Package width.
         * @param string $height Package height.
         *
         * @return bool
         */
        public function package_has_usps_tube_dimensions(string $length, string $width, string $height): bool
        {
        }
        /**
         * Returns packing method label based on WC_Shipping_USPS::$packing_method value.
         *
         * @return string
         */
        public function get_packing_method_label()
        {
        }
        /**
         * Output the settings page content wrapped with a specific ID for targeted admin CSS.
         *
         * @return void
         */
        public function admin_options()
        {
        }
    }
    /**
     * WC_USPS_Privacy class.
     */
    class WC_Usps_Privacy extends \WC_Abstract_Privacy
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
        public function get_privacy_message()
        {
        }
    }
    /**
     * WC_USPS class
     */
    class WC_USPS
    {
        use \WooCommerce\USPS\Util;
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Check the environment.
         *
         * @return void
         */
        public function environment_check()
        {
        }
        /**
         * Display migration notice for USPS API deprecation.
         *
         * @return void
         */
        public function migration_notice()
        {
        }
        /**
         * Handle AJAX request to dismiss migration notice.
         *
         * @return void
         */
        public function dismiss_migration_notice()
        {
        }
        /**
         * Get the USPS shipping method if it exists, otherwise return false.
         *
         * @return WC_Shipping_USPS|false
         */
        public function usps_shipping_method()
        {
        }
        /**
         * Localisation
         */
        public function load_plugin_textdomain()
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
         * Settings page links.
         *
         * @param array $links List of plugin URLs.
         */
        public function plugin_action_links($links)
        {
        }
        /**
         * Plugin page links to support and documentation
         *
         * @param  array  $links List of plugin links.
         * @param  string $file Current file.
         * @return array
         */
        public function plugin_row_meta($links, $file)
        {
        }
        /**
         * Load gateway class
         */
        public function init()
        {
        }
        /**
         * Add method to WC
         *
         * @param array $methods List of shipping methods.
         */
        public function add_method($methods)
        {
        }
        /**
         * Enqueue scripts
         */
        public function assets()
        {
        }
    }
}
namespace {
    \define('WC_USPS_VERSION', '5.6.7');
    // WRCS: DEFINED_VERSION.
    \define('WC_USPS_FILE', __FILE__);
    \define('WC_USPS_ABSPATH', \trailingslashit(__DIR__));
    \define('WC_USPS_API_DIR', \WC_USPS_ABSPATH . 'includes/api/');
    /**
     * Initialize plugin.
     */
    function wc_shipping_usps_init()
    {
    }
    /**
     * Show WooCommerce Deactivated Notice.
     */
    function wc_shipping_usps_show_woocommerce_deactivated_notice()
    {
    }
    /**
     * Check plugin can run
     */
    function wc_shipping_usps_activation_check()
    {
    }
}