<?php
/**
 * Generated stub declarations for woocommerce-shipping-royalmail 4.1.2.
 * @see https://github.com/woocommerce/php-stubs
 */

namespace {
    /**
     * Registers Royal Mail ability definition classes with WooCommerce.
     */
    class WC_RoyalMail_Abilities
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
         * Register ability definition classes with WooCommerce's loader.
         *
         * @param array $classes Ability definition class names.
         * @return array
         */
        public static function register_ability_definition_classes(array $classes): array
        {
        }
        /**
         * Load concrete ability definition classes.
         *
         * @return void
         */
        private static function load_definition_classes(): void
        {
        }
    }
    /**
     * Helper methods used by Royal Mail ability definitions.
     */
    class WC_RoyalMail_Ability_Helper
    {
        /**
         * Shipping method ID.
         *
         * @var string
         */
        const METHOD_ID = 'royal_mail';
        /**
         * Ability namespace.
         *
         * @var string
         */
        const ABILITY_NAMESPACE = 'woocommerce-shipping-royalmail';
        /**
         * Check whether the current user can read Royal Mail store settings.
         *
         * @return bool
         */
        public static function can_manage_woocommerce(): bool
        {
        }
        /**
         * Get standard read-only ability metadata.
         *
         * @return array
         */
        public static function get_read_only_meta(): array
        {
        }
        /**
         * Build a Royal Mail ability name.
         *
         * @param string $name Local ability name.
         * @return string
         */
        public static function ability_name(string $name): string
        {
        }
        /**
         * Get all supported rate types.
         *
         * @return string[]
         */
        public static function get_rate_types(): array
        {
        }
        /**
         * Get all supported destination types.
         *
         * @return string[]
         */
        public static function get_destination_types(): array
        {
        }
        /**
         * Get service IDs for a rate type and destination country.
         *
         * @param string $rate_type Rate type.
         * @param string $country_code Destination country code.
         * @return string[]
         */
        public static function get_services_for_country(string $rate_type, string $country_code): array
        {
        }
        /**
         * Get service catalog entries.
         *
         * @param string $rate_type_filter Optional rate type filter.
         * @param string $destination_filter Optional destination type filter.
         * @return array
         */
        public static function get_service_catalog(string $rate_type_filter = '', string $destination_filter = ''): array
        {
        }
        /**
         * Get available rate types for a service.
         *
         * @param string $service_id Service ID.
         * @return string[]
         */
        public static function get_service_rate_types(string $service_id): array
        {
        }
        /**
         * Get available destination types for a service.
         *
         * @param string $service_id Service ID.
         * @return string[]
         */
        public static function get_service_destination_types(string $service_id): array
        {
        }
        /**
         * Get effective non-secret settings for a Royal Mail instance.
         *
         * @param int $instance_id Shipping method instance ID.
         * @return array
         */
        public static function get_effective_settings(int $instance_id = 0): array
        {
        }
        /**
         * Get sanitized non-secret settings output.
         *
         * @param array $settings Raw settings.
         * @return array
         */
        public static function format_settings(array $settings): array
        {
        }
        /**
         * Get configured Royal Mail shipping method instances from WooCommerce zones.
         *
         * @param int $requested_instance_id Optional instance ID filter.
         * @return array
         */
        public static function get_shipping_method_instances(int $requested_instance_id = 0): array
        {
        }
        /**
         * Create a WP_Error when available.
         *
         * @param string $code Error code.
         * @param string $message Error message.
         * @param array  $data Error data.
         * @return WP_Error|array
         */
        public static function error(string $code, string $message, array $data = array())
        {
        }
        /**
         * Get a settings option as an array.
         *
         * @param string $option Option name.
         * @return array
         */
        private static function get_option_array(string $option): array
        {
        }
        /**
         * Append Royal Mail instances from one zone.
         *
         * @param array  $instances Instances accumulator.
         * @param int    $zone_id Zone ID.
         * @param string $zone_name Zone name.
         * @param array  $shipping_methods Shipping methods.
         * @param int    $requested_instance_id Optional instance ID filter.
         * @return void
         */
        private static function append_zone_instances(array &$instances, int $zone_id, string $zone_name, array $shipping_methods, int $requested_instance_id = 0): void
        {
        }
        /**
         * Get option key for an instance.
         *
         * @param int $instance_id Instance ID.
         * @return string
         */
        private static function get_instance_option_key(int $instance_id): string
        {
        }
        /**
         * Get sanitized service rate summaries.
         *
         * @param string $service_id Service ID.
         * @param array  $rate_types Rate types.
         * @return array
         */
        private static function get_rate_data_summaries(string $service_id, array $rate_types): array
        {
        }
        /**
         * Check whether a service exists in a rate type.
         *
         * @param string $service_id Service ID.
         * @param string $rate_type Rate type.
         * @return bool
         */
        private static function service_exists_in_rate_type(string $service_id, string $rate_type): bool
        {
        }
        /**
         * Check whether a service exists in one rate/destination group.
         *
         * @param string $service_id Service ID.
         * @param string $rate_type Rate type.
         * @param string $destination_type Destination type.
         * @return bool
         */
        private static function service_exists_in_group(string $service_id, string $rate_type, string $destination_type): bool
        {
        }
        /**
         * Load rate data from local JSON files without database cache side effects.
         *
         * @param string $service_id Service ID.
         * @param string $rate_type Rate type.
         * @return array|false
         */
        private static function get_local_rate_data(string $service_id, string $rate_type)
        {
        }
        /**
         * Get current local rate date.
         *
         * @return string
         */
        private static function get_current_local_rate_date(): string
        {
        }
        /**
         * Format boxes for ability output.
         *
         * @param array $boxes Boxes settings.
         * @return array
         */
        private static function format_boxes(array $boxes): array
        {
        }
        /**
         * Format custom service settings.
         *
         * @param array $services Service settings.
         * @return array
         */
        private static function format_custom_services(array $services): array
        {
        }
        /**
         * Get enabled service IDs from formatted custom services.
         *
         * @param array $formatted_services Formatted services.
         * @return array
         */
        private static function get_enabled_service_ids(array $formatted_services): array
        {
        }
        /**
         * Normalize yes/no settings to bool.
         *
         * @param mixed $value Value.
         * @return bool
         */
        private static function is_yes($value): bool
        {
        }
        /**
         * Clean a service label.
         *
         * @param string $label Label.
         * @return string
         */
        private static function clean_label(string $label): string
        {
        }
        /**
         * Clean a text field.
         *
         * @param mixed $value Text value.
         * @return string
         */
        private static function clean_text($value): string
        {
        }
    }
    /**
     * Retrieves sanitized Royal Mail shipping method configuration.
     */
    class WC_RoyalMail_Get_Settings_Ability implements \Automattic\WooCommerce\Abilities\AbilityDefinition
    {
        /**
         * Get ability name.
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
         * Execute ability.
         *
         * @param array $input Ability input.
         * @return array
         */
        public static function execute(array $input = array()): array
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
         * Get settings schema.
         *
         * @return array
         */
        private static function get_settings_schema(): array
        {
        }
    }
    /**
     * Lists Royal Mail services and non-secret rate metadata.
     */
    class WC_RoyalMail_List_Services_Ability implements \Automattic\WooCommerce\Abilities\AbilityDefinition
    {
        /**
         * Get ability name.
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
         * Execute ability.
         *
         * @param array $input Ability input.
         * @return array
         */
        public static function execute(array $input = array()): array
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
         * Get service output schema.
         *
         * @return array
         */
        private static function get_service_schema(): array
        {
        }
    }
}
namespace WooCommerce\RoyalMail {
    /**
     * JSON Rate Loader class.
     *
     * Handles loading and caching of Royal Mail rate data from local JSON files.
     * Provides methods to fetch, validate, and cache rate information for different
     * Royal Mail services and rate types.
     */
    class JSON_Rate_Loader
    {
        /**
         * Local path for rate files directory relative to plugin root.
         *
         * @var string
         */
        const LOCAL_RATES_PATH = 'rate-files-json/';
        /**
         * Local rate paths configuration for different rate types.
         * Populated dynamically from local configuration file.
         *
         * @var array
         */
        private static array $local_paths = array();
        /**
         * Current rate date being used.
         *
         * @var string
         */
        private static string $current_rate_date = '';
        /**
         * Database table name for storing rates.
         *
         * @var string
         */
        public const TABLE_NAME = 'wc_royalmail_rates';
        /**
         * Logger instance, initialized on first use.
         *
         * @var \WC_Logger_Interface|null
         */
        private static ?\WC_Logger_Interface $logger = null;
        /**
         * Cache populated by preload_rates(); maps service_code => array|false.
         * false  = confirmed not in DB for current date; use file fallback.
         * absent = never looked up via preload; individual query may still run.
         *
         * @var array<string, array|false>
         */
        private static array $bulk_loaded_rates = array();
        /**
         * Cache for get_all_rate_dates(); null means unpopulated.
         *
         * @var string[]|null
         */
        private static ?array $rate_dates_cache = null;
        /**
         * Log a message at the given level, always tagged with the plugin source.
         *
         * @param string $message Log message.
         * @param string $level   Log level ('error', 'warning', etc.).
         * @param array  $context Additional context merged into the log context array.
         */
        public static function log(string $message, string $level = 'error', array $context = array()): void
        {
        }
        /**
         * Get plugin rates directory path.
         *
         * @return string Full path to the rates directory.
         */
        private static function get_plugin_rates_path(): string
        {
        }
        /**
         * Scan the rates directory and return all valid date directories (YYYY-MM-DD format).
         *
         * @return string[]|false All date directory names, unsorted, or false if the directory is unreadable.
         */
        private static function get_all_rate_dates()
        {
        }
        /**
         * Resolve the day that rate folder names are compared against.
         *
         * @param string $today Day in YYYY-MM-DD, or an empty string for today in UTC.
         *
         * @return string|false The day, or false when it is not in the same strict format as the folder names.
         */
        private static function resolve_today(string $today)
        {
        }
        /**
         * Get current rate date by scanning available directories.
         *
         * Scans the rate-files-json directory for date folders and returns
         * the most recent date that is not after the given day. This is the
         * rate set the plugin reads at runtime.
         *
         * @param string $today Day to resolve against (YYYY-MM-DD). Defaults to today in UTC.
         *
         * @return string|false Current rate date (YYYY-MM-DD), or false if none found or $today is malformed.
         */
        public static function get_current_rate_date(string $today = '')
        {
        }
        /**
         * Get upcoming rate dates by scanning available directories.
         *
         * Returns all date directories that are in the future (scheduled but not yet active).
         *
         * @param string $today Day to resolve against (YYYY-MM-DD). Defaults to today in UTC.
         *
         * @return string[] Upcoming rate dates (YYYY-MM-DD), sorted ascending. Empty if $today is malformed.
         */
        public static function get_upcoming_rate_dates(string $today = ''): array
        {
        }
        /**
         * Initialize local rate paths by scanning directories.
         *
         * @return bool True if paths loaded successfully, false otherwise.
         */
        private static function init_local_paths(): bool
        {
        }
        /**
         * Load rate data for a specific service.
         *
         * Attempts to load rate data from database first, then from local files if not available.
         * Saves successful file reads to database for future use.
         *
         * @param string $service_slug Service slug (e.g., 'international-economy').
         * @param string $rate_type    Rate type ('online' or 'regular').
         *
         * @return array|false Rate data array or false on failure.
         */
        public static function load_rate_data(string $service_slug, string $rate_type)
        {
        }
        /**
         * Fetch rate data from local file.
         *
         * Reads rate data from the local JSON file for the specified service and rate type.
         *
         * @param string $service_slug Service slug.
         * @param string $rate_type    Rate type.
         *
         * @return array|false Rate data or false on failure.
         */
        private static function fetch_from_local_file(string $service_slug, string $rate_type)
        {
        }
        /**
         * Validate rate data structure.
         *
         * Ensures the rate data contains required fields and at least one
         * valid rate structure (packages, zones, or compensation levels).
         *
         * @param array $data Rate data to validate.
         *
         * @return array|false Validated data or false on failure.
         */
        private static function validate_rate_data(array $data)
        {
        }
        /**
         * Bulk-load rate data for multiple services in a single DB query.
         *
         * Call this before iterating over services to reduce N queries to 1.
         * Results are cached in $bulk_loaded_rates; individual load_rate_data()
         * calls for preloaded codes will hit the cache without touching the DB.
         *
         * @param string[] $service_codes Service codes, e.g. ['first-class_online'].
         */
        public static function preload_rates(array $service_codes): void
        {
        }
        /**
         * Get rate data from database for a specific service.
         *
         * @param string $service_code Service code (e.g., 'international-economy_regular').
         *
         * @return array|false Rate data array or false if not found.
         */
        private static function get_rate_from_database(string $service_code)
        {
        }
        /**
         * Save rate data to database.
         *
         * @param string $service_code Service code (e.g., 'international-economy_regular').
         * @param array  $rate_data    Rate data to save.
         * @param string $start_date   Start date for the rates (defaults to current date).
         *
         * @return bool True on success, false on failure.
         */
        private static function save_rate_to_database(string $service_code, array $rate_data, string $start_date = ''): bool
        {
        }
        /**
         * Delete DB rate rows whose start_date no longer corresponds to a directory in the rate-files-json folder.
         *
         * Skips deletion entirely when $valid_dates is empty to prevent accidental data loss.
         *
         * @param string[] $valid_dates All date directory names currently on disk (YYYY-MM-DD).
         * @return int|false Number of rows deleted, 0 if guard fired or nothing stale, false on DB failure.
         */
        private static function delete_stale_db_rates(array $valid_dates)
        {
        }
        /**
         * Sync all available rates from local files to database.
         *
         * @return array Results array with success/failure counts.
         */
        public static function sync_rates_to_database(): array
        {
        }
    }
    /**
     * Packaging class.
     */
    class Packaging
    {
        /**
         * Represents a standard letter size.
         *
         * @var string
         */
        const LETTER = 'letter';
        /**
         * Represents a large letter size
         *
         * @var string
         */
        const LARGE_LETTER = 'large-letter';
        /**
         * Represents a tube size
         *
         * @var string
         */
        const TUBE = 'tube';
        /**
         * Represents a medium parcel
         *
         * @var string
         */
        const MEDIUM_PARCEL = 'medium-parcel';
        /**
         * Represents a packet or small parcel
         *
         * @var string
         */
        const PACKET = 'packet';
        /**
         * Represents printed papers
         *
         * @var string
         */
        const PRINTED_PAPERS = 'printed-papers';
    }
    /**
     * Rate Data Manager class.
     *
     * Provides methods to transform JSON rate data from local JSON files into the format
     * expected by Royal Mail rate classes. Handles various rate structures
     * including zone-based, package-based, and direct rates.
     */
    class Rate_Data_Manager
    {
        /**
         * Transform JSON rate data to bands format.
         *
         * @param array $json_data JSON rate data.
         *
         * @return array Transformed bands data.
         */
        public static function transform_to_bands(array $json_data): array
        {
        }
        /**
         * Check if service is taxed.
         *
         * @param array $json_data JSON rate data.
         *
         * @return bool Whether service is taxed.
         */
        public static function is_taxed(array $json_data): bool
        {
        }
        /**
         * Get compensation up to value from JSON.
         *
         * @param array $json_data JSON rate data.
         *
         * @return int Compensation up to value in pence.
         */
        public static function get_compensation_up_to_value(array $json_data): int
        {
        }
        /**
         * Get compensation included value from JSON.
         *
         * @param array $json_data JSON rate data.
         *
         * @return int Compensation included value in pence.
         */
        public static function get_compensation_included_value(array $json_data): int
        {
        }
        /**
         * Get additional compensation fees from JSON.
         *
         * @param array $json_data JSON rate data.
         *
         * @return int Additional compensation fees in pence.
         */
        public static function get_compensation_fees(array $json_data): int
        {
        }
        /**
         * Get maximum inclusive compensation from JSON.
         *
         * @param array $json_data JSON rate data.
         *
         * @return int Maximum inclusive compensation in pence.
         */
        public static function get_maximum_inclusive_compensation(array $json_data): int
        {
        }
        /**
         * Get maximum total cover from JSON.
         *
         * @param array $json_data JSON rate data.
         *
         * @return int Maximum total cover in pence.
         */
        public static function get_maximum_total_cover(array $json_data): int
        {
        }
        /**
         * Get supported countries from JSON.
         *
         * @param array $json_data JSON rate data.
         *
         * @return array Supported countries.
         */
        public static function get_supported_countries(array $json_data): array
        {
        }
        /**
         * Get additional rates from JSON.
         *
         * @param array $json_data JSON rate data.
         *
         * @return array Additional rates.
         */
        public static function get_additional_rates(array $json_data): array
        {
        }
    }
    /**
     * Royal Mail Services class
     */
    class Services
    {
        /**
         * First class service.
         *
         * @var string
         */
        const FIRST_CLASS = 'first-class';
        /**
         * First class signed service.
         *
         * @var string
         */
        const FIRST_CLASS_SIGNED = 'first-class-signed';
        /**
         * Second class service.
         *
         * @var string
         */
        const SECOND_CLASS = 'second-class';
        /**
         * Second class signed service.
         *
         * @var string
         */
        const SECOND_CLASS_SIGNED = 'second-class-signed';
        /**
         * Special delivery 9am service.
         *
         * @var string
         */
        const SPECIAL_DELIVERY_9AM = 'special-delivery-9am';
        /**
         * Special delivery 1PM service.
         *
         * @var string
         */
        const SPECIAL_DELIVERY_1PM = 'special-delivery-1pm';
        /**
         * Tracked 24 service.
         *
         * @var string
         */
        const TRACKED_24 = 'tracked-24';
        /**
         * Tracked 24 signed service.
         *
         * @var string
         */
        const TRACKED_24_SIGNED = 'tracked-24-signed';
        /**
         * Tracked 24 age verification service.
         *
         * @deprecated 4.0.9 No longer offered. Royal Mail publishes no online price for
         *                   Age Verification, so the service could never return a rate.
         *                   Kept because the value is a public identifier: it names a
         *                   rate file, forms the slug half of the `{slug}_{rate_type}`
         *                   service code in the rate cache table, and appears in the
         *                   `woocommerce_shipping_royalmail_{$rate_id}_rate_bands` and
         *                   `_rate_boxes` filter names.
         *
         * @var string
         */
        const TRACKED_24_AGE_VERIFICATION = 'tracked-24-age-verification';
        /**
         * Tracked 48 service.
         *
         * @var string
         */
        const TRACKED_48 = 'tracked-48';
        /**
         * Tracked 48 signed service.
         *
         * @var string
         */
        const TRACKED_48_SIGNED = 'tracked-48-signed';
        /**
         * Tracked 48 age verification service.
         *
         * @deprecated 4.0.9 No longer offered. Royal Mail publishes no online price for
         *                   Age Verification, so the service could never return a rate.
         *                   Kept because the value is a public identifier: it names a
         *                   rate file, forms the slug half of the `{slug}_{rate_type}`
         *                   service code in the rate cache table, and appears in the
         *                   `woocommerce_shipping_royalmail_{$rate_id}_rate_bands` and
         *                   `_rate_boxes` filter names.
         *
         * @var string
         */
        const TRACKED_48_AGE_VERIFICATION = 'tracked-48-age-verification';
        /**
         * Parcelforce express 10 service.
         *
         * @var string
         */
        const PARCELFORCE_EXPRESS_10 = 'parcelforce-express-10';
        /**
         * Parcelforce express AM service.
         *
         * @var string
         */
        const PARCELFORCE_EXPRESS_AM = 'parcelforce-express-am';
        /**
         * Parcelforce express 24 service.
         *
         * @var string
         */
        const PARCELFORCE_EXPRESS_24 = 'parcelforce-express-24';
        /**
         * Parcelforce express 48 service.
         *
         * @var string
         */
        const PARCELFORCE_EXPRESS_48 = 'parcelforce-express-48';
        /**
         * Parcelforce express 48 large service.
         *
         * @var string
         */
        const PARCELFORCE_EXPRESS_48_LARGE = 'parcelforce-express-48-large';
        /**
         * International standard service.
         *
         * @var string
         */
        const INTERNATIONAL_STANDARD = 'international-standard';
        /**
         * International tracked signed service.
         *
         * @var string
         */
        const INTERNATIONAL_TRACKED_SIGNED = 'international-tracked-signed';
        /**
         * International tracked service.
         *
         * @var string
         */
        const INTERNATIONAL_TRACKED = 'international-tracked';
        /**
         * International economy service.
         *
         * @var string
         */
        const INTERNATIONAL_ECONOMY = 'international-economy';
        /**
         * Parcelforce Ireland Express service.
         *
         * @var string
         */
        const PARCELFORCE_IRELANDEXPRESS = 'parcelforce-irelandexpress';
        /**
         * Parcelforce Global express service.
         *
         * @var string
         */
        const PARCELFORCE_GLOBALEXPRESS = 'parcelforce-globalexpress';
        /**
         * Parcelforce Global priority service.
         *
         * @var string
         */
        const PARCELFORCE_GLOBALPRIORITY = 'parcelforce-globalpriority';
    }
    /**
     * Shipping_Zone class.
     */
    class Shipping_Zones
    {
        /**
         * Zone 1.
         *
         * @var string
         */
        const ZONE_1 = '1';
        /**
         * Zone 2.
         *
         * @var string
         */
        const ZONE_2 = '2';
        /**
         * Zone 3.
         *
         * @var string
         */
        const ZONE_3 = '3';
        /**
         * Zone 4
         *
         * @var string
         */
        const ZONE_4 = '4';
        /**
         * Zone 5
         *
         * @var string
         */
        const ZONE_5 = '5';
        /**
         * Zone 6
         *
         * @var string
         */
        const ZONE_6 = '6';
        /**
         * Zone 7
         *
         * @var string
         */
        const ZONE_7 = '7';
        /**
         * Zone 8
         *
         * @var string
         */
        const ZONE_8 = '8';
        /**
         * Zone 9
         *
         * @var string
         */
        const ZONE_9 = '9';
        /**
         * Zone 9 Non EU
         *
         * @var string
         */
        const ZONE_9_NON_EU = '9_NON_EU';
        /**
         * Zone 10
         *
         * @var string
         */
        const ZONE_10 = '10';
        /**
         * Zone 11
         *
         * @var string
         */
        const ZONE_11 = '11';
        /**
         * Zone 12
         *
         * @var string
         */
        const ZONE_12 = '12';
        /**
         * Zone UK.
         *
         * @var string
         */
        const ZONE_UK = 'UK';
        /**
         * Zone EU.
         *
         * @var string
         */
        const ZONE_EU = 'EU';
        /**
         * Europe Zone 1.
         *
         * @var string
         */
        const ZONE_EUR_1 = 'EUR_1';
        /**
         * Europe Zone 2.
         *
         * @var string
         */
        const ZONE_EUR_2 = 'EUR_2';
        /**
         * Europe Zone 1.
         *
         * @var string
         */
        const ZONE_EUR_3 = 'EUR_3';
    }
}
namespace {
    /**
     * Privacy handler.
     */
    class WC_Royalmail_Privacy extends \WC_Abstract_Privacy
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
     * Main Royal Mail class
     */
    class WC_RoyalMail
    {
        /**
         * Plugin's version.
         *
         * @since 2.5.0 introduced.
         *
         * @var string
         */
        public $version = \WOOCOMMERCE_SHIPPING_ROYALMAIL_VERSION;
        /**
         * Centralized all service information.
         *
         * @var array
         */
        public static $service_names = array(\WooCommerce\RoyalMail\Services::FIRST_CLASS => 'Royal Mail 1st Class', \WooCommerce\RoyalMail\Services::FIRST_CLASS_SIGNED => 'Royal Mail Signed For&reg; 1st Class', \WooCommerce\RoyalMail\Services::SECOND_CLASS => 'Royal Mail 2nd Class', \WooCommerce\RoyalMail\Services::SECOND_CLASS_SIGNED => 'Royal Mail Signed For&reg; 2nd Class', \WooCommerce\RoyalMail\Services::SPECIAL_DELIVERY_9AM => 'Royal Mail Special Delivery Guaranteed by 9am&reg;', \WooCommerce\RoyalMail\Services::SPECIAL_DELIVERY_1PM => 'Royal Mail Special Delivery Guaranteed by 1pm&reg;', \WooCommerce\RoyalMail\Services::TRACKED_24 => 'Royal Mail Tracked 24', \WooCommerce\RoyalMail\Services::TRACKED_24_SIGNED => 'Royal Mail Tracked 24 with Signature', \WooCommerce\RoyalMail\Services::TRACKED_48 => 'Royal Mail Tracked 48', \WooCommerce\RoyalMail\Services::TRACKED_48_SIGNED => 'Royal Mail Tracked 48 with Signature', \WooCommerce\RoyalMail\Services::PARCELFORCE_EXPRESS_10 => 'Parcelforce Worldwide Express 10', \WooCommerce\RoyalMail\Services::PARCELFORCE_EXPRESS_AM => 'Parcelforce Worldwide Express AM', \WooCommerce\RoyalMail\Services::PARCELFORCE_EXPRESS_24 => 'Parcelforce Worldwide Express 24', \WooCommerce\RoyalMail\Services::PARCELFORCE_EXPRESS_48 => 'Parcelforce Worldwide Express 48', \WooCommerce\RoyalMail\Services::PARCELFORCE_EXPRESS_48_LARGE => 'Parcelforce Worldwide Express 48 Large', \WooCommerce\RoyalMail\Services::INTERNATIONAL_STANDARD => 'Royal Mail International Standard', \WooCommerce\RoyalMail\Services::INTERNATIONAL_TRACKED_SIGNED => 'Royal Mail International Tracked &amp; Signed', \WooCommerce\RoyalMail\Services::INTERNATIONAL_TRACKED => 'Royal Mail International Tracked', \WooCommerce\RoyalMail\Services::INTERNATIONAL_ECONOMY => 'Royal Mail International Economy', \WooCommerce\RoyalMail\Services::PARCELFORCE_IRELANDEXPRESS => 'Parcelforce Worldwide Ireland Express', \WooCommerce\RoyalMail\Services::PARCELFORCE_GLOBALEXPRESS => 'Parcelforce Worldwide Global Express', \WooCommerce\RoyalMail\Services::PARCELFORCE_GLOBALPRIORITY => 'Parcelforce Worldwide Global Priority');
        /**
         * Regular service enums.
         *
         * @var string
         */
        const REGULAR_SERVICE = 'regular';
        /**
         * Online service enums.
         *
         * @var string
         */
        const ONLINE_SERVICE = 'online';
        /**
         * UK service enums.
         *
         * @var string
         */
        const UK_SERVICE = 'uk';
        /**
         * UK service enums.
         *
         * @var string
         */
        const INTERNATIONAL_SERVICE = 'international';
        /**
         * Option key used to store the installed plugin version.
         *
         * @var string
         */
        const VERSION_OPTION_KEY = 'wc_royal_mail_version';
        /**
         * Centralized all service information.
         *
         * @var array
         */
        public static $services = array(self::REGULAR_SERVICE => array(self::UK_SERVICE => array(\WooCommerce\RoyalMail\Services::FIRST_CLASS, \WooCommerce\RoyalMail\Services::SECOND_CLASS, \WooCommerce\RoyalMail\Services::FIRST_CLASS_SIGNED, \WooCommerce\RoyalMail\Services::SECOND_CLASS_SIGNED, \WooCommerce\RoyalMail\Services::SPECIAL_DELIVERY_9AM, \WooCommerce\RoyalMail\Services::SPECIAL_DELIVERY_1PM, \WooCommerce\RoyalMail\Services::TRACKED_24, \WooCommerce\RoyalMail\Services::TRACKED_24_SIGNED, \WooCommerce\RoyalMail\Services::TRACKED_48, \WooCommerce\RoyalMail\Services::TRACKED_48_SIGNED, \WooCommerce\RoyalMail\Services::PARCELFORCE_EXPRESS_10, \WooCommerce\RoyalMail\Services::PARCELFORCE_EXPRESS_AM, \WooCommerce\RoyalMail\Services::PARCELFORCE_EXPRESS_24, \WooCommerce\RoyalMail\Services::PARCELFORCE_EXPRESS_48, \WooCommerce\RoyalMail\Services::PARCELFORCE_EXPRESS_48_LARGE), self::INTERNATIONAL_SERVICE => array(\WooCommerce\RoyalMail\Services::INTERNATIONAL_TRACKED, \WooCommerce\RoyalMail\Services::INTERNATIONAL_TRACKED_SIGNED, \WooCommerce\RoyalMail\Services::INTERNATIONAL_STANDARD, \WooCommerce\RoyalMail\Services::INTERNATIONAL_ECONOMY, \WooCommerce\RoyalMail\Services::PARCELFORCE_GLOBALPRIORITY)), self::ONLINE_SERVICE => array(self::UK_SERVICE => array(\WooCommerce\RoyalMail\Services::FIRST_CLASS, \WooCommerce\RoyalMail\Services::SECOND_CLASS, \WooCommerce\RoyalMail\Services::FIRST_CLASS_SIGNED, \WooCommerce\RoyalMail\Services::SECOND_CLASS_SIGNED, \WooCommerce\RoyalMail\Services::SPECIAL_DELIVERY_1PM, \WooCommerce\RoyalMail\Services::TRACKED_24, \WooCommerce\RoyalMail\Services::TRACKED_24_SIGNED, \WooCommerce\RoyalMail\Services::TRACKED_48, \WooCommerce\RoyalMail\Services::TRACKED_48_SIGNED, \WooCommerce\RoyalMail\Services::PARCELFORCE_EXPRESS_48, \WooCommerce\RoyalMail\Services::PARCELFORCE_EXPRESS_24, \WooCommerce\RoyalMail\Services::PARCELFORCE_EXPRESS_AM, \WooCommerce\RoyalMail\Services::PARCELFORCE_EXPRESS_10), self::INTERNATIONAL_SERVICE => array(\WooCommerce\RoyalMail\Services::INTERNATIONAL_TRACKED, \WooCommerce\RoyalMail\Services::INTERNATIONAL_TRACKED_SIGNED, \WooCommerce\RoyalMail\Services::INTERNATIONAL_STANDARD, \WooCommerce\RoyalMail\Services::INTERNATIONAL_ECONOMY, \WooCommerce\RoyalMail\Services::PARCELFORCE_GLOBALPRIORITY, \WooCommerce\RoyalMail\Services::PARCELFORCE_GLOBALEXPRESS, \WooCommerce\RoyalMail\Services::PARCELFORCE_IRELANDEXPRESS)));
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Check environment.
         *
         * Hooked into `admin_notices` so it'll render admin notice if there's
         * a failed check.
         *
         * @return void
         */
        public function environment_check()
        {
        }
        /**
         * Add plugin action links to the plugins page.
         *
         * @param array $links Links.
         *
         * @return array Links.
         */
        public function plugin_action_links($links)
        {
        }
        /**
         * Load our shipping class.
         */
        public function shipping_init()
        {
        }
        /**
         * Add our shipping method to woocommerce.
         *
         * @param array $methods Shipping methods.
         *
         * @return array Shipping methods.
         */
        public function shipping_methods($methods)
        {
        }
        /**
         * Checks the plugin version.
         *
         * @since 2.5.0
         * @version 2.5.0
         *
         * @return void
         */
        public function maybe_install()
        {
        }
        /**
         * Update/migration script.
         *
         * @since 2.5.0
         * @version 2.5.0
         */
        public function install()
        {
        }
        /**
         * Get All Royalmail Services.
         *
         * @return array
         */
        public static function get_all_services()
        {
        }
        /**
         * Get All Royalmail Regular Services.
         *
         * @return array
         */
        public static function get_regular_services()
        {
        }
        /**
         * Get Royalmail Regular UK Services.
         *
         * @return array
         */
        public static function get_regular_uk_services()
        {
        }
        /**
         * Get Royalmail Regular International Services.
         *
         * @return array
         */
        public static function get_regular_international_services()
        {
        }
        /**
         * Get All Royalmail Online Services.
         *
         * @return array
         */
        public static function get_online_services()
        {
        }
        /**
         * Get Royalmail Online UK Services.
         *
         * @return array
         */
        public static function get_online_uk_services()
        {
        }
        /**
         * Get Royalmail Online International Services.
         *
         * @return array
         */
        public static function get_online_international_services()
        {
        }
        /**
         * Get Royalmail UK Services ( Online and Regular ).
         * This method will return services that available on both regular and online by using intersect.
         *
         * @return array
         */
        public static function get_available_both_uk_services()
        {
        }
        /**
         * Get Royalmail International Services ( Online and Regular ).
         * This method will return services that available on both regular and online by using intersect.
         *
         * @return array
         */
        public static function get_available_both_international_services()
        {
        }
        /**
         * Get All Royalmail Services ( Online and Regular ).
         * It's different with `get_all_services()` method.
         * This method will return a flat array.
         *
         * @return array
         */
        public static function get_available_both_services()
        {
        }
        /**
         * Get Royalmail Regular Services only.
         * This method will return a flat array.
         *
         * @return array
         */
        public static function get_regular_services_only()
        {
        }
        /**
         * Get Royalmail Regular UK Services only.
         * This method will return the uk services that only available on regular only.
         *
         * @return array
         */
        public static function get_regular_uk_services_only()
        {
        }
        /**
         * Get Royalmail Regular International Services only.
         * This method will return the international services that only available on regular only.
         *
         * @return array
         */
        public static function get_regular_international_services_only()
        {
        }
        /**
         * Get Royalmail Online Services only.
         * This method will return the international services that only available on online only.
         *
         * @return array
         */
        public static function get_online_services_only()
        {
        }
        /**
         * Get Royalmail Online Services for UK only.
         * This method will return the UK services that only available on online only.
         *
         * @return array
         */
        public static function get_online_uk_services_only()
        {
        }
        /**
         * Get Royalmail Online Services for International only.
         * This method will return the international services that only available on online only.
         *
         * @return array
         */
        public static function get_online_international_services_only()
        {
        }
        /**
         * Helper method to check whether given zone_id has royal_mail method instance.
         *
         * @since 2.5.0
         * @version 2.5.0
         *
         * @param int $zone_id Zone ID.
         *
         * @return bool True if given zone_id has royal_mail method instance.
         */
        public function is_zone_has_royal_mail($zone_id)
        {
        }
        /**
         * Declaring WooCommerce features compatibility.
         */
        public function declare_wc_features_compatibility()
        {
        }
        /**
         * Create rates table for storing Royal Mail rate data.
         *
         * @since 4.0.0
         */
        private function create_rates_table()
        {
        }
        /**
         * Load JSON rate system classes.
         */
        private function load_json_rate_system()
        {
        }
        /**
         * Register Royal Mail abilities when WooCommerce's ability loader is available.
         *
         * @return void
         */
        private function init_abilities()
        {
        }
        /**
         * Check for plugin version changes and sync rates if needed.
         *
         * Runs on every `init`. When the plugin version changes, syncs local JSON
         * rate files into the database. On failure, retries up to 3 times with a
         * 5-minute backoff between attempts. After 3 failures the version is stamped
         * to stop retrying, and a persistent admin notice is shown with a manual
         * retry button (see `royalmail_sync_failure` option).
         *
         * @since 4.0.0
         */
        public function check_version_and_sync_rates()
        {
        }
    }
    /**
     * Admin handler.
     */
    class WC_Shipping_Royalmail_Admin
    {
        // phpcs:enable Generic.Classes.DuplicateClassName.Found
        const META_KEY_PRINTED_PAPERS = '_shipping-royalmail-printed-papers';
        const META_KEY_BOOK = '_shipping-royalmail-book';
        const META_KEY_TUBE = '_shipping-royalmail-tube';
        /**
         * Label text for printed papers.
         *
         * @var string
         */
        public $label_printed_papers;
        /**
         * Label text for book.
         *
         * @var string
         */
        public $label_book;
        /**
         * Label text for tube.
         *
         * @var string
         */
        public $label_tube;
        /**
         * Class constructor.
         */
        public function __construct()
        {
        }
        /**
         * Enqueue script for edit product page.
         */
        public function admin_enqueue_scripts()
        {
        }
        /**
         * Add more option for simple product type.
         */
        public function product_options()
        {
        }
        /**
         * Add more option for variation product type.
         *
         * @param int     $loop Loop index of the variation.
         * @param array   $variation_data Variation data.
         * @param WP_Post $variation Product variation object.
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
         * Save variation custom fields
         *
         * @param int $post_id Post ID.
         * @param int $loop Variation loop.
         */
        public function process_product_variation_meta($post_id, $loop)
        {
        }
        /**
         * Process product meta through REST API.
         *
         * @param WC_Product $product Product object.
         */
        public function process_rest_product_meta($product)
        {
        }
        /**
         * Set labels for shipping options.
         */
        private function set_shipping_option_labels()
        {
        }
        /**
         * Handle rate sync action from admin.
         */
        public function handle_rate_sync_action()
        {
        }
        /**
         * Display admin notices for rate sync.
         */
        public function rate_sync_admin_notices()
        {
        }
    }
    /**
     * WC_Shipping_Royalmail_Rates class.
     */
    class WC_Shipping_Royalmail_Rates
    {
        /**
         * Box packer library.
         *
         * @var string
         */
        public $box_packer_library;
        /**
         * Packing method that is being used.
         *
         * @var string
         */
        public $packing_method = '';
        /**
         * Shipping method instance id.
         *
         * @var int
         */
        public $instance_id = 0;
        /**
         * Rate price type.
         *
         * @var string
         */
        public $rate_type;
        /**
         * List of items to ship.
         *
         * @var array
         */
        public $items;
        /**
         * List of packages to ship.
         *
         * @var array
         */
        public $packages;
        /**
         * Destination.
         *
         * @var array
         */
        private $country_code;
        /**
         * User-defined boxes.
         *
         * @var array
         */
        private $boxes;
        /**
         * Available services for RoyalMail.
         *
         * @var array
         */
        private $services;
        /**
         * Available online services for RoyalMail.
         *
         * @var array
         */
        private $online_services;
        /**
         * Logger instance.
         *
         * @var WC_Logger_Interface
         */
        private $logger;
        /**
         * Constructor.
         *
         * @param array               $package            Package to ship.
         * @param string              $box_packer_library Box packer library.
         * @param string              $packing_method     Packing method.
         * @param array               $boxes              User-defined boxes.
         * @param int                 $instance_id        Instance ID.
         * @param string              $rate_type          Whether using regular price or online price.
         * @param WC_Logger_Interface $logger             Logger instance.
         */
        public function __construct($package, $box_packer_library, $packing_method, $boxes = array(), $instance_id = 0, $rate_type = 'regular', $logger = \null)
        {
        }
        /**
         * Output a message.
         *
         * @param string $message Message to display.
         * @param array  $data    Additional contextual data to pass.
         *
         * @return void
         */
        public function debug($message, $data = array())
        {
        }
        /**
         * Get the plugin path.
         *
         * @return string
         */
        public function plugin_path()
        {
        }
        /**
         * Get quotes.
         *
         * @since 1.0.0
         * @version 2.5.3
         *
         * @return array Quotes.
         */
        public function get_quotes()
        {
        }
        /**
         * Get services from a given destination.
         *
         * @since 2.5.3
         * @version 2.5.3
         *
         * @return array Services.
         */
        public function get_services()
        {
        }
        /**
         * Get rate price based on the settings.
         *
         * @since 2.9.0
         * @version 2.9.0
         *
         * @return string Rate price type.
         */
        public function get_rate_type()
        {
        }
        /**
         * Get rate type name.
         *
         * @since 2.9.0
         * @version 2.9.0
         *
         * @return string Rate type name.
         */
        public function get_rate_type_name()
        {
        }
        /**
         * Get service type.
         *
         * @since 2.5.3
         * @version 2.5.3
         *
         * @return string Service type ('uk' or 'international').
         */
        public function get_service_type()
        {
        }
        /**
         * Get class path of a given service.
         *
         * @since 2.5.3
         * @version 2.5.3
         *
         * @param string $service Service slug. See `self::services`.
         *
         * @return string Class filepath
         */
        public function get_service_class_path($service)
        {
        }
        /**
         * Get class name of a given service.
         *
         * @since 2.5.3
         * @version 2.5.3
         *
         * @param string $service Service slug. See `self::services`.
         *
         * @return string Class name
         */
        public function get_service_class_name($service)
        {
        }
        /**
         * Get items from a given package.
         *
         * @param mixed $package Package to ship.
         * @return array Items.
         */
        private function get_items($package)
        {
        }
    }
    /**
     * WC_Shipping_Royalmail class.
     */
    class WC_Shipping_Royalmail extends \WC_Shipping_Method
    {
        /**
         * Whether debug setting is enabled or not.
         *
         * @var bool
         */
        private $debug;
        /**
         * Logger instance.
         *
         * @var WC_Logger_Interface
         */
        private $logger;
        /**
         * Packing method that is being used.
         *
         * @var string
         */
        protected $packing_method = '';
        /**
         * Which rate types are being used.
         *
         * @var string
         */
        protected $rate_type = '';
        /**
         * How the rates being offered.
         *
         * @var string
         */
        protected $offer_rates = '';
        /**
         * Whether use compensation or not.
         *
         * @var string
         */
        protected $compensation_optional = '';
        /**
         * List of custom services.
         *
         * @var array
         */
        public $custom_services = array();
        /**
         * List of boxes.
         *
         * @var array
         */
        protected $boxes = array();
        /**
         * Pre-defined services.
         *
         * @var array
         */
        private $services;
        /**
         * Tax exemption lookup table.
         *
         * @var array
         */
        private $is_taxed = array(\WooCommerce\RoyalMail\Services::FIRST_CLASS => \false, \WooCommerce\RoyalMail\Services::FIRST_CLASS_SIGNED => \false, \WooCommerce\RoyalMail\Services::SECOND_CLASS => \false, \WooCommerce\RoyalMail\Services::SECOND_CLASS_SIGNED => \false, \WooCommerce\RoyalMail\Services::SPECIAL_DELIVERY_9AM => \true, \WooCommerce\RoyalMail\Services::SPECIAL_DELIVERY_1PM => \true, \WooCommerce\RoyalMail\Services::TRACKED_24 => \true, \WooCommerce\RoyalMail\Services::TRACKED_24_SIGNED => \true, \WooCommerce\RoyalMail\Services::TRACKED_24_AGE_VERIFICATION => \true, \WooCommerce\RoyalMail\Services::TRACKED_48 => \true, \WooCommerce\RoyalMail\Services::TRACKED_48_SIGNED => \true, \WooCommerce\RoyalMail\Services::TRACKED_48_AGE_VERIFICATION => \true, \WooCommerce\RoyalMail\Services::PARCELFORCE_EXPRESS_10 => \true, \WooCommerce\RoyalMail\Services::PARCELFORCE_EXPRESS_AM => \true, \WooCommerce\RoyalMail\Services::PARCELFORCE_EXPRESS_24 => \true, \WooCommerce\RoyalMail\Services::PARCELFORCE_EXPRESS_48 => \true, \WooCommerce\RoyalMail\Services::PARCELFORCE_EXPRESS_48_LARGE => \true, \WooCommerce\RoyalMail\Services::INTERNATIONAL_STANDARD => \false, \WooCommerce\RoyalMail\Services::INTERNATIONAL_TRACKED_SIGNED => \false, \WooCommerce\RoyalMail\Services::INTERNATIONAL_TRACKED => \false, \WooCommerce\RoyalMail\Services::INTERNATIONAL_ECONOMY => \false, \WooCommerce\RoyalMail\Services::PARCELFORCE_IRELANDEXPRESS => \true, \WooCommerce\RoyalMail\Services::PARCELFORCE_GLOBALEXPRESS => \true, \WooCommerce\RoyalMail\Services::PARCELFORCE_GLOBALPRIORITY => \true);
        /**
         * List of services that are only available at certain post offices.
         *
         * @var array
         */
        private $limited_availability = array(\WooCommerce\RoyalMail\Services::FIRST_CLASS => \false, \WooCommerce\RoyalMail\Services::FIRST_CLASS_SIGNED => \false, \WooCommerce\RoyalMail\Services::SECOND_CLASS => \false, \WooCommerce\RoyalMail\Services::SECOND_CLASS_SIGNED => \false, \WooCommerce\RoyalMail\Services::SPECIAL_DELIVERY_9AM => \false, \WooCommerce\RoyalMail\Services::SPECIAL_DELIVERY_1PM => \false, \WooCommerce\RoyalMail\Services::TRACKED_24 => \false, \WooCommerce\RoyalMail\Services::TRACKED_24_SIGNED => \false, \WooCommerce\RoyalMail\Services::TRACKED_24_AGE_VERIFICATION => \false, \WooCommerce\RoyalMail\Services::TRACKED_48 => \false, \WooCommerce\RoyalMail\Services::TRACKED_48_SIGNED => \false, \WooCommerce\RoyalMail\Services::TRACKED_48_AGE_VERIFICATION => \false, \WooCommerce\RoyalMail\Services::PARCELFORCE_EXPRESS_10 => \false, \WooCommerce\RoyalMail\Services::PARCELFORCE_EXPRESS_AM => \false, \WooCommerce\RoyalMail\Services::PARCELFORCE_EXPRESS_24 => \false, \WooCommerce\RoyalMail\Services::PARCELFORCE_EXPRESS_48 => \false, \WooCommerce\RoyalMail\Services::PARCELFORCE_EXPRESS_48_LARGE => \true, \WooCommerce\RoyalMail\Services::INTERNATIONAL_STANDARD => \false, \WooCommerce\RoyalMail\Services::INTERNATIONAL_TRACKED_SIGNED => \false, \WooCommerce\RoyalMail\Services::INTERNATIONAL_TRACKED => \false, \WooCommerce\RoyalMail\Services::INTERNATIONAL_ECONOMY => \false, \WooCommerce\RoyalMail\Services::PARCELFORCE_IRELANDEXPRESS => \false, \WooCommerce\RoyalMail\Services::PARCELFORCE_GLOBALEXPRESS => \false, \WooCommerce\RoyalMail\Services::PARCELFORCE_GLOBALPRIORITY => \false);
        /**
         * Service tips.
         *
         * @var array
         */
        public $service_tips;
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
         *
         * @return void
         */
        public function __construct($instance_id = 0)
        {
        }
        /**
         * Build the settings page description for the rate set in use.
         *
         * @param string|false $rate_date Effective date of the active rate set (YYYY-MM-DD), or false when none is available.
         *
         * @return string HTML description.
         */
        public static function get_price_guide_description($rate_date): string
        {
        }
        /**
         * Format a rate folder date for display using the site's date format.
         *
         * Rate dates are UTC calendar days, so the day is rendered in UTC and not in the site timezone.
         *
         * @param string $rate_date Date in YYYY-MM-DD format.
         *
         * @return string Formatted date, or the input unchanged if it cannot be parsed.
         */
        public static function format_rate_date(string $rate_date): string
        {
        }
        /**
         * Checks whether this shipping method is available or not.
         *
         * @param array $package Package to ship.
         * @return bool
         */
        public function is_available($package)
        {
        }
        /**
         * Initialize settings.
         *
         * @version 2.5.0
         * @since 2.5.0
         */
        private function set_settings()
        {
        }
        /**
         * Init form fields and set properties from saved settings.
         *
         * @return void
         */
        private function init()
        {
        }
        /**
         * Process settings on save
         *
         * @return void
         */
        public function process_admin_options()
        {
        }
        /**
         * Render services matrix input in instance setting page.
         *
         * @return string HTML of matrix input
         */
        public function generate_services_html()
        {
        }
        /**
         * Render boxes matrix input.
         *
         * @return string HTML boxes matrix input
         */
        public function generate_box_packing_html()
        {
        }
        /**
         * Validate box packing fields.
         *
         * @param mixed $key Key.
         * @return array
         */
        public function validate_box_packing_field($key)
        {
        }
        /**
         * Validate services fields.
         *
         * @param mixed $key Key.
         * @return array
         */
        public function validate_services_field($key)
        {
        }
        /**
         * Get service availability.
         *
         * @param string $service_id service ID.
         *
         * @return string
         */
        public function get_service_availability($service_id)
        {
        }
        /**
         * Init form fields.
         *
         * @return void
         */
        public function init_form_fields()
        {
        }
        /**
         * Calculate shipping cost.
         *
         * @param mixed $package Package to ship.
         * @return void
         */
        public function calculate_shipping($package = array())
        {
        }
        /**
         * Sort rates.
         *
         * @param mixed $a A.
         * @param mixed $b B.
         * @return int
         */
        public function sort_rates($a, $b)
        {
        }
        /**
         * If the box packer library option is not yet set and there are existing
         * RoyalMail shipping method instances, we can assume that this is not a
         * new/fresh installation of the RoyalMail plugin,
         * so we should default to 'original'
         *
         * If the box packer library option is not set and there are no
         * RoyalMail shipping method instances, then this is likely a new
         * installation of the RoyalMail plugin,
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
         * Generate sync rates button HTML.
         *
         * @return string HTML for sync rates button.
         */
        public function generate_sync_rates_button_html()
        {
        }
    }
}
namespace WooCommerce\RoyalMail\Rates {
    /**
     * RoyalMail Rate class
     */
    abstract class RoyalMail_Rate
    {
        const MAX_LARGE_LETTER_WEIGHT = 750;
        const MAX_LETTER_WEIGHT = 100;
        /**
         * List of country codes under EUR Zone 1.
         *
         * See https://www.royalmail.com/sites/royalmail.com/files/2023-09/our-prices-october-2023-ta.pdf
         * Page 10.
         *
         * Excluding Corsica as it's part of France.
         *
         * @var array EUR Zone 1 country codes
         */
        protected array $europe_zone_1 = array('IE', 'DE', 'DK', 'FR', 'MC');
        /**
         * List of country codes under EUR Zone 2.
         *
         * See https://www.royalmail.com/sites/royalmail.com/files/2023-09/our-prices-october-2023-ta.pdf
         * Page 10.
         *
         * Excluding Azores, Madeira as it's part of Portugal.
         * Excluding Balaeric Island, and Canary Island as it's part of Spain.
         *
         * @var array EUR Zone 2 country codes
         */
        protected array $europe_zone_2 = array('AT', 'BE', 'BG', 'HR', 'CY', 'CZ', 'EE', 'FI', 'GR', 'HU', 'IT', 'LV', 'LT', 'LU', 'MT', 'NL', 'PL', 'PT', 'RO', 'SK', 'SI', 'ES', 'SE');
        /**
         * List of country codes under EUR Zone 3.
         *
         * See https://www.royalmail.com/sites/royalmail.com/files/2023-09/our-prices-october-2023-ta.pdf
         * Page 10.
         *
         * Excluding Kosovo as it's not part of ISO Countries.
         *
         * @var array EUR Zone 3 country codes
         */
        protected array $europe_zone_3 = array('AL', 'AD', 'AM', 'AZ', 'BY', 'BA', 'FO', 'GE', 'GI', 'GL', 'IS', 'KZ', 'KG', 'LI', 'MD', 'ME', 'MK', 'NO', 'RU', 'SM', 'RS', 'CH', 'TJ', 'TR', 'TM', 'UA', 'UZ', 'VA');
        /**
         * List of country codes under World Zone 2.
         *
         * @var array World Zone country codes
         */
        protected array $world_zone_2 = array('AU', 'PW', 'IO', 'CX', 'CC', 'CK', 'FJ', 'PF', 'TF', 'KI', 'MO', 'NR', 'NC', 'NZ', 'PG', 'NU', 'NF', 'LA', 'PN', 'TO', 'TV', 'WS', 'AS', 'SG', 'SB', 'TK');
        /**
         * List of country codes under World Zone 3.
         *
         * @var array World Zone country codes
         */
        protected array $world_zone_3 = array('US');
        /**
         * List of country codes where Printed Papers max weight
         * is limited to 2kg instead of 5kg.
         *
         * @var array Country codes
         */
        protected array $printed_papers_2kg_limited_countries = array('CA', 'KH');
        /**
         * Name of the rate (e.g. 'special_delivery_1pm').
         *
         * @var string ID/Name of rate
         */
        protected string $rate_id = '';
        /**
         * Rate price type.
         *
         * @var string
         */
        public string $rate_type;
        /**
         * Bands is an array of pricing bands where key is coverage / compensation
         * for loss or damange (this will numeric value), or size (e.g. 'letter');
         * value is an key-value array where key is package weight and value is the
         * price. Data is nested within top-level array where key is the is the
         * calendar year during which the pricing bands became active.
         *
         * @var array Pricing bands
         */
        protected $bands = array();
        /**
         * Shipping boxes.
         *
         * @var array Shipping boxes
         */
        protected $boxes = array();
        /**
         * Refer to https://www.royalmail.com/sites/royalmail.com/files/2021-03/royal-mail-our-prices-april-2021.pdf page 9.
         *
         * @var array
         */
        protected array $international_default_box = array(\WooCommerce\RoyalMail\Packaging::LETTER => array(
            'length' => 240,
            // Max L in mm.
            'width' => 165,
            // Max W in mm.
            'height' => 5,
            // Max H in mm.
            'weight' => self::MAX_LETTER_WEIGHT,
        ), \WooCommerce\RoyalMail\Packaging::LARGE_LETTER => array('length' => 353, 'width' => 250, 'height' => 25, 'weight' => self::MAX_LARGE_LETTER_WEIGHT), 'long-parcel' => array('length' => 600, 'width' => 150, 'height' => 150, 'weight' => 2000), 'square-parcel' => array('length' => 300, 'width' => 300, 'height' => 300, 'weight' => 2000), 'parcel' => array('length' => 450, 'width' => 225, 'height' => 225, 'weight' => 2000), \WooCommerce\RoyalMail\Packaging::MEDIUM_PARCEL => array('length' => 610, 'width' => 460, 'height' => 460, 'weight' => 20000));
        /**
         * Additional rates for printed papers.
         *
         * @var array
         */
        protected array $additional_rates;
        /**
         * Box packer library to use.
         *
         * @var string
         */
        protected string $box_packer_library;
        /**
         * Maximum compensation value a customer can claim, in pounds.
         *
         * @var float
         */
        private float $compensation_up_to_value = 0;
        /**
         * Maximum inclusive compensation threshold before extra fees apply, in pounds.
         *
         * @var float
         */
        private float $maximum_inclusive_compensation = 0;
        /**
         * Maximum total cover available for a service, in pounds.
         *
         * @var float
         */
        private float $maximum_total_cover = 0;
        /**
         * Compensation value included by default with the service, in pounds.
         *
         * @var float
         */
        private float $compensation_included_value = 0;
        /**
         * Additional compensation fees, in pence.
         *
         * @var int
         */
        private int $compensation_fees = 0;
        /**
         * Whether the service rate includes tax.
         *
         * @var bool
         */
        protected bool $is_taxed = false;
        /**
         * List of country codes supported by the service.
         *
         * @var array
         */
        protected array $supported_countries = array();
        /**
         * Class constructor.
         *
         * @param string $rate_type          Rate type.
         * @param string $box_packer_library Box packer library.
         */
        public function __construct(string $rate_type, string $box_packer_library)
        {
        }
        /**
         * Set up the rate.
         */
        public function setup()
        {
        }
        /**
         * Name of the rate (e.g. 'special_delivery_1pm').
         *
         * @return string
         */
        public function get_rate_id(): string
        {
        }
        /**
         * Slug of the rate (e.g. 'special-delivery-1pm').
         *
         * @return string
         */
        abstract public function get_rate_slug(): string;
        /**
         * Get this rates pricing Bands.
         *
         * @param mixed $band Coverage or compensation for loss / damage, or size.
         *                    If not specified all prices are returned.
         *
         * @return array Pricing bands, or an empty array if no rate data is available
         *               or a filter callback returned invalid data.
         */
        public function get_rate_bands($band = false): array
        {
        }
        /**
         * Apply additional rates for any package type if needed.
         */
        public function apply_additional_rates()
        {
        }
        /**
         * Apply additional rates to a specific package type across all zones.
         *
         * @param string    $package_type Package type key (e.g., 'printed-papers').
         * @param array|int $zone_rates   Either an associative array of zone => rate or a single integer rate to apply to all zones.
         *
         * @return void
         */
        private function apply_additional_rates_to_package_type(string $package_type, $zone_rates)
        {
        }
        /**
         * Get this rates boxes.
         *
         * @return array Shipping boxes, or an empty array if a filter callback returned invalid data.
         */
        public function get_rate_boxes(): array
        {
        }
        /**
         * Emit a doing-it-wrong notice when a rate filter callback returns invalid data.
         *
         * @param string $kind Filter kind ('bands' or 'boxes').
         * @param string $band Band key when the invalid value was a band value, empty string otherwise.
         *
         * @return void
         */
        private function invalid_filter_return_notice(string $kind, string $band = ''): void
        {
        }
        /**
         * Get all European countries. Combination of Europe zone 1, 2, and 3.
         *
         * @return array
         */
        public function get_all_european_countries(): array
        {
        }
        /**
         * Get the zone for the package.
         *
         * @param string $country_code $country_code Two-letter country code.
         *
         * @return string Zone.
         */
        public function get_zone(string $country_code): string
        {
        }
        /**
         * See if box could be a letter.
         *
         * @param  object $box Box.
         * @return bool
         */
        public function box_is_letter(object $box): bool
        {
        }
        /**
         * See if box could be a letter.
         *
         * @param  object $box Box.
         * @return bool
         */
        public function box_is_large_letter(object $box): bool
        {
        }
        /**
         * Pack items into boxes and return results.
         *
         * @param array  $items Items to pack.
         * @param string $method Method to pack items (e.g. 'Pack items individually').
         * @param string $country_code The two-letter country code of the destination.
         * @param bool   $printed_papers If this is for Printed Papers rates.
         * @param bool   $books If this is for Printed Papers rates only for books.
         * @param bool   $tube If this is for tube rates.
         *
         * @return array Packed items.
         * @since 1.0.0
         * @version 2.5.3
         */
        public function get_packages(array $items, string $method, string $country_code = '', bool $printed_papers = false, bool $books = false, bool $tube = false): array
        {
        }
        /**
         * Get box packer instance populated with defined boxes.
         *
         * @param string $country_code The two-letter country code of the destination.
         * @param bool   $printed_papers If this is for Printed Papers rates.
         * @param bool   $books If this is for Printed Papers rates only for books.
         * @param bool   $tube If this is for tube rates.
         *
         * @return \WooCommerce\BoxPacker\Abstract_Packer Box packer.
         * @since 2.5.3
         * @version 3.5.0
         */
        protected function get_boxpack(string $country_code = '', bool $printed_papers = false, bool $books = false, bool $tube = false): \WooCommerce\BoxPacker\Abstract_Packer
        {
        }
        /**
         * Get packages using per item method.
         *
         * @since 2.5.3
         * @version 2.5.3
         *
         * @param array                     $items   Items to pack.
         * @param \WooCommerce\BoxPacker\Abstract_Packer $boxpack Box packer instance.
         * @param string                    $method  Method to pack items (e.g. 'per_item').
         *
         * @return array Packages.
         */
        protected function get_packages_using_per_item_method(array $items, \WooCommerce\BoxPacker\Abstract_Packer $boxpack, string $method = ''): array
        {
        }
        /**
         * Get packages using box packing method.
         *
         * @since 2.5.3
         * @version 2.5.3
         *
         * @param array                     $items   Items to pack.
         * @param \WooCommerce\BoxPacker\Abstract_Packer $boxpack Box packer instance.
         * @param string                    $method  Method to pack items (e.g. 'Pack items individually').
         *
         * @return array Packages.
         */
        protected function get_packages_using_box_packing_method(array $items, \WooCommerce\BoxPacker\Abstract_Packer $boxpack, string $method = ''): array
        {
        }
        /**
         * Gets the instance options.
         *
         * @since 2.5.7
         * @param  int $instance_id The ID of the shipping instance.
         * @return array $option_value
         */
        public function get_instance_options(int $instance_id = 0): array
        {
        }
        /**
         * Validates package id and weights
         *
         * @param \WooCommerce\BoxPacker\Package $package Package object.
         */
        protected function validate_package(\WooCommerce\BoxPacker\Package $package)
        {
        }
        /**
         * Separate all qualifying Printed Papers items, get them packed
         * according to type and weight, and return the packages for
         * quoting.
         *
         * @param array  $items $items Items to pack.
         * @param string $country_code Two-letter country code.
         * @param string $packing_method Method to pack items (e.g. 'Pack items individually').
         *
         * @return array Printed Papers packages.
         */
        protected function get_printed_papers_packages(array &$items, string $country_code, string $packing_method): array
        {
        }
        /**
         * Separate all qualifying Tube items, get them packed
         * according to type and weight, and return the packages for
         * quoting.
         *
         * @param array  $items $items Items to pack.
         * @param string $country_code Two-letter country code.
         * @param string $packing_method Method to pack items (e.g. 'Pack items individually').
         *
         * @return array Tube packages.
         */
        protected function get_tube_packages(array &$items, string $country_code, string $packing_method): array
        {
        }
        /**
         * Find and separate printed papers from the standard items
         * so we can handle differently.
         *
         * Any qualifying Printed Papers items will be returned in an
         * array and will also be unset from the $items array that is
         * passed by reference.
         *
         * @see https://www.royalmail.com/price-finder/printed-papers
         *
         * @param array  $items Items to pack.
         * @param string $country_code Two-letter country code.
         *
         * @return array Printed Papers items.
         */
        protected function get_qualifying_printed_papers_items(array &$items, string $country_code): array
        {
        }
        /**
         * Find and separate printed papers books from other
         * printed papers items for separate calculation if necessary.
         * Example: Republic of Ireland only allows books to be over
         * 2kg and up to 5kg. Other printed papers items must be 2kg
         * or less. So we need to split books from other printed papers
         * items for separate handling/rules in that case.
         *
         * Any qualifying Printed Papers book items will be returned in an
         * array and will also be unset from the $items array that is
         * passed by reference.
         *
         * @param array $printed_papers_items Printed Papers items.
         *
         * @return array Printed Papers books.
         */
        protected function get_printed_papers_books(array &$printed_papers_items): array
        {
        }
        /**
         * Find and separate tubes from the standard items
         * so we can handle differently.
         *
         * Any qualifying Tube items will be returned in an
         * array and will also be unset from the $items array that is
         * passed by reference.
         *
         * @param array $items Items to pack.
         *
         * @return array Tube items.
         */
        protected function get_qualifying_tube_items(array &$items): array
        {
        }
        /**
         * Load JSON dependencies
         */
        private function load_json_dependencies()
        {
        }
        /**
         * Get JSON rate data for this service
         *
         * @return array|false JSON rate data or false on failure.
         */
        protected function get_json_rate_data()
        {
        }
        /**
         * Load service limits from JSON data.
         *
         * @param array|false $json_data JSON rate data.
         */
        protected function load_service_limits_from_json($json_data)
        {
        }
        /**
         * Get compensation up to value
         *
         * @return float Compensation up to value in pounds.
         */
        protected function get_compensation_up_to_value(): float
        {
        }
        /**
         * Get compensation included value
         *
         * @return float Compensation included value in pounds.
         */
        protected function get_compensation_included_value(): float
        {
        }
        /**
         * Get supported countries.
         *
         * @return array Supported countries.
         */
        protected function get_supported_countries(): array
        {
        }
        /**
         * Get additional compensation fees
         *
         * @return int Additional compensation fees in pence.
         */
        protected function get_compensation_fees(): int
        {
        }
        /**
         * Get maximum total cover.
         *
         * @return float Maximum total cover value in pounds.
         */
        protected function get_maximum_total_cover(): float
        {
        }
        /**
         * Get maximum inclusive compensation.
         *
         * @return float Maximum inclusive compensation value in pounds.
         */
        protected function get_maximum_inclusive_compensation(): float
        {
        }
        /**
         * Get zone bands.
         *
         * @param string $country_code Destination country code.
         *
         * @return mixed
         */
        public function get_zone_bands(string $country_code)
        {
        }
    }
    /**
     * International_Rate class.
     */
    abstract class International_Rate extends \WooCommerce\RoyalMail\Rates\RoyalMail_Rate
    {
        /**
         * Boxes that must remain in $this->boxes when merchants configure custom
         * international parcel boxes, so BoxPacker can classify packages the user's
         * boxes cannot rate-model. Subclasses whose rate bands include box types
         * beyond PACKET should override this and return the relevant default box
         * keys from $this->international_default_box.
         *
         * @return array<int, string>
         */
        protected function get_custom_box_additions(): array
        {
        }
        /**
         * Get quotes for this rate.
         *
         * @since 2.5.4
         * @version 2.5.4
         *
         * @param  array  $items to be shipped.
         * @param  string $packing_method the method selected.
         * @param  string $country_code Address to ship to.
         * @param  array  $boxes User-defined boxes.
         * @param  int    $instance_id Instance ID.
         *
         * @return array<string, float>
         */
        public function get_quotes(array $items, string $packing_method, string $country_code, array $boxes = array(), int $instance_id = 0): array
        {
        }
    }
    /**
     * International Parcelforce rate
     *
     * @since 2.5.3
     * @version 2.5.3
     */
    abstract class Parcelforce_Rate extends \WooCommerce\RoyalMail\Rates\RoyalMail_Rate
    {
        /**
         * List of countries categorized as far east.
         *
         * @version 2.5.3
         * @since 2.5.3
         *
         * @var array
         */
        protected array $far_east = array('CN', 'HK', 'MO', 'JP', 'MN', 'KP', 'KR', 'TW', 'BN', 'KH', 'TL', 'ID', 'LA', 'MY', 'MM', 'PH', 'SG', 'TH', 'VN', 'RU');
        /**
         * List of countries categorized as Australasia.
         *
         * @version 2.5.3
         * @since 2.5.3
         *
         * @var array
         */
        protected array $australasia = array('AU', 'PF', 'NU', 'TO', 'CX', 'KI', 'PG', 'TV', 'CC', 'NR', 'PN', 'VU', 'CK', 'NC', 'SB', 'WF', 'FJ', 'NZ', 'TK', 'WS');
        /**
         * List of European countries that is not part of European Union.
         *
         * @version 2.5.36
         * @since 2.5.36
         *
         * @var array
         */
        protected array $europe_non_eu = array('AL', 'AD', 'AM', 'AZ', 'BY', 'BA', 'GE', 'IS', 'LI', 'MD', 'MC', 'ME', 'MK', 'NO', 'RU', 'SM', 'RS', 'CH', 'TR', 'UA', 'GB', 'VA');
        /**
         * Get the international zone for the package.
         *
         * Sending within UK will be handled by RoyalMail rates.
         *
         * @since 2.5.3
         * @version 2.5.3
         *
         * @param string $country_code Two-letter country code.
         *
         * @return string Zone.
         */
        public function get_zone(string $country_code): string
        {
        }
        /**
         * Get volumetric weight.
         *
         * Since WC_Shipping_Royalmail_Rates::get_items converts the dimensions to
         * mm, this is calculated in mm instead of cm.
         *
         * @see http://www.parcelforce.com/help-and-advice/sending/volumetric-charging.
         *
         * @since 2.5.3
         * @version 2.5.3
         *
         * @param float|int $l Length.
         * @param float|int $w Width.
         * @param float|int $h Height.
         *
         * @return float Calculated weight in gram.
         */
        public function get_volumetric_weight($l, $w, $h)
        {
        }
        /**
         * Get quotes for this service.
         *
         * @since 2.5.3
         * @version 2.5.3
         *
         * @param array  $items          Items to be shipped.
         * @param string $packing_method Selected packing method.
         * @param string $country_code   Two-letter country code.
         * @param array  $boxes          User-defined boxes.
         * @param int    $instance_id    Shipping instance ID.
         *
         * @return array Quotes.
         */
        public function get_quotes(array $items, string $packing_method, string $country_code, array $boxes = array(), int $instance_id = 0)
        {
        }
        /**
         * Set boxes from user-defined (in setting) boxes.
         *
         * @since 2.5.3
         * @version 2.5.5
         *
         * @param array $boxes User-defined boxes.
         */
        protected function set_boxes(array $boxes = array())
        {
        }
        /**
         * Get quotes based on items.
         *
         * Each item in items is considered packaged already in a box. Which means
         * dimensions stored in product property will be used to calculate the
         * cost.
         *
         * @since 2.5.3
         * @version 2.5.3
         *
         * @param array  $items        Items to ship.
         * @param string $country_code Two-letter country code.
         * @param int    $instance_id  Shipping instance ID.
         *
         * @return false|array Quotes.
         */
        protected function get_quotes_based_on_items(array $items, string $country_code, int $instance_id = 0)
        {
        }
        /**
         * Get quotes based on packages.
         *
         * This method will be used if user-defined boxes are not empty.
         *
         * @since 2.5.3
         * @version 2.5.3
         *
         * @param array  $items to be shipped.
         * @param string $packing_method the method selected.
         * @param string $country_code Two-letter country code.
         * @param int    $instance_id Shipping instance ID.
         *
         * @return array|false Quote.
         */
        protected function get_quotes_based_on_packages(array $items, string $packing_method, string $country_code, int $instance_id = 0)
        {
        }
        /**
         * Get additional compensation cost.
         *
         * @version 2.5.3
         * @since 2.5.3
         *
         * @see http://www.parcelforce.com/help-and-advice/sending/enhanced-compensation.
         *
         * @param float|int $valued_item Valued item (product's price).
         *
         * @return int|float Additional compensation.
         */
        public function get_additional_compensation_cost($valued_item)
        {
        }
    }
    /**
     * Parcelforce UK rate.
     *
     * @since 4.0.0
     */
    abstract class Parcelforce_UK_Rate extends \WooCommerce\RoyalMail\Rates\RoyalMail_Rate
    {
        /**
         * Get quotes for the rate.
         *
         * @param  array  $items to be shipped.
         * @param  string $packing_method the method selected.
         * @param  string $country_code Address to ship to.
         *
         * @return array<string, float>
         */
        public function get_quotes(array $items, string $packing_method, string $country_code): array
        {
        }
    }
}
namespace {
    /**
     * RoyalMail_Online_International_Economy class.
     */
    class RoyalMail_Online_International_Economy extends \WooCommerce\RoyalMail\Rates\International_Rate
    {
        /**
         * Slug of the rate (e.g. 'international-tracked').
         *
         * @return string
         */
        public function get_rate_slug(): string
        {
        }
        /**
         * Get quotes for this rate.
         *
         * @since 2.5.4
         * @version 2.5.4
         *
         * @param  array  $items to be shipped.
         * @param  string $packing_method the method selected.
         * @param  string $country_code Address to ship to.
         * @param  array  $boxes User-defined boxes.
         * @param  int    $instance_id Instance ID.
         *
         * @return array{ 'rate-slug': float }
         */
        public function get_quotes(array $items, string $packing_method, string $country_code, array $boxes = array(), int $instance_id = 0): array
        {
        }
    }
    /**
     * RoyalMail_Online_International_Standard class.
     */
    class RoyalMail_Online_International_Standard extends \WooCommerce\RoyalMail\Rates\International_Rate
    {
        /**
         * Slug of the rate (e.g. 'international-tracked').
         *
         * @return string
         */
        public function get_rate_slug(): string
        {
        }
    }
    /**
     * RoyalMail_Online_International_Tracked_Signed class.
     */
    class RoyalMail_Online_International_Tracked_Signed extends \WooCommerce\RoyalMail\Rates\International_Rate
    {
        /**
         * Slug of the rate (e.g. 'international-tracked').
         *
         * @return string
         */
        public function get_rate_slug(): string
        {
        }
    }
    /**
     * RoyalMail_Online_International_Tracked class.
     */
    class RoyalMail_Online_International_Tracked extends \WooCommerce\RoyalMail\Rates\International_Rate
    {
        /**
         * Slug of the rate (e.g. 'international-tracked').
         *
         * @return string
         */
        public function get_rate_slug(): string
        {
        }
        /**
         * Keep the built-in MEDIUM_PARCEL box available when merchants configure
         * custom international parcel boxes, so BoxPacker can route packages above
         * the PACKET 2 kg limit to the MEDIUM_PARCEL rate bands (up to 20 kg).
         *
         * @return array<int, string>
         */
        protected function get_custom_box_additions(): array
        {
        }
    }
    /**
     * Rates for Parcelforce Global Express.
     */
    class RoyalMail_Online_Parcelforce_Globalexpress extends \WooCommerce\RoyalMail\Rates\Parcelforce_Rate
    {
        /**
         * Slug of the rate (e.g. 'special-delivery-1pm').
         *
         * @return string
         */
        public function get_rate_slug(): string
        {
        }
    }
    /**
     * Rates for Parcelforce Global Priority.
     */
    class RoyalMail_Online_Parcelforce_Globalpriority extends \WooCommerce\RoyalMail\Rates\Parcelforce_Rate
    {
        /**
         * Slug of the rate (e.g. 'special-delivery-1pm').
         *
         * @return string
         */
        public function get_rate_slug(): string
        {
        }
    }
    /**
     * Rates for Parcelforce irelandexpress.
     */
    class RoyalMail_Online_Parcelforce_Irelandexpress extends \WooCommerce\RoyalMail\Rates\Parcelforce_Rate
    {
        /**
         * Slug of the rate (e.g. 'special-delivery-1pm').
         *
         * @return string
         */
        public function get_rate_slug(): string
        {
        }
    }
    /**
     * RoyalMail_Regular_International_Economy class.
     */
    class RoyalMail_Regular_International_Economy extends \WooCommerce\RoyalMail\Rates\International_Rate
    {
        /**
         * Slug of the rate (e.g. 'international-tracked').
         *
         * @return string
         */
        public function get_rate_slug(): string
        {
        }
        /**
         * Get quotes for this rate.
         *
         * @since 2.5.4
         * @version 2.5.4
         *
         * @param  array  $items to be shipped.
         * @param  string $packing_method the method selected.
         * @param  string $country_code Address to ship to.
         * @param  array  $boxes User-defined boxes.
         * @param  int    $instance_id Instance ID.
         *
         * @return array{ 'rate-slug': float }
         */
        public function get_quotes(array $items, string $packing_method, string $country_code, array $boxes = array(), int $instance_id = 0): array
        {
        }
    }
    /**
     * RoyalMail_Regular_International_Standard class.
     */
    class RoyalMail_Regular_International_Standard extends \WooCommerce\RoyalMail\Rates\International_Rate
    {
        /**
         * Slug of the rate (e.g. 'international-tracked').
         *
         * @return string
         */
        public function get_rate_slug(): string
        {
        }
    }
    /**
     * RoyalMail_Regular_International_Tracked_Signed class.
     */
    class RoyalMail_Regular_International_Tracked_Signed extends \WooCommerce\RoyalMail\Rates\International_Rate
    {
        /**
         * Slug of the rate (e.g. 'international-tracked').
         *
         * @return string
         */
        public function get_rate_slug(): string
        {
        }
    }
    /**
     * RoyalMail_Regular_International_Tracked class.
     */
    class RoyalMail_Regular_International_Tracked extends \WooCommerce\RoyalMail\Rates\International_Rate
    {
        /**
         * Slug of the rate (e.g. 'international-tracked').
         *
         * @return string
         */
        public function get_rate_slug(): string
        {
        }
        /**
         * Keep the built-in MEDIUM_PARCEL box available when merchants configure
         * custom international parcel boxes, so BoxPacker can route packages above
         * the PACKET 2 kg limit to the MEDIUM_PARCEL rate bands (up to 20 kg).
         *
         * @return array<int, string>
         */
        protected function get_custom_box_additions(): array
        {
        }
    }
    /**
     * Rates for Parcelforce globalexpress.
     */
    class RoyalMail_Regular_Parcelforce_Globalexpress extends \WooCommerce\RoyalMail\Rates\Parcelforce_Rate
    {
        /**
         * Slug of the rate (e.g. 'special-delivery-1pm').
         *
         * @return string
         */
        public function get_rate_slug(): string
        {
        }
    }
    /**
     * Rates for Parcelforce globalpriority.
     */
    class RoyalMail_Regular_Parcelforce_Globalpriority extends \WooCommerce\RoyalMail\Rates\Parcelforce_Rate
    {
        /**
         * Slug of the rate (e.g. 'special-delivery-1pm').
         *
         * @return string
         */
        public function get_rate_slug(): string
        {
        }
    }
    /**
     * Rates for Parcelforce irelandexpress.
     */
    class RoyalMail_Regular_Parcelforce_Irelandexpress extends \WooCommerce\RoyalMail\Rates\Parcelforce_Rate
    {
        /**
         * Slug of the rate (e.g. 'special-delivery-1pm').
         *
         * @return string
         */
        public function get_rate_slug(): string
        {
        }
    }
    /**
     * RoyalMail_Online_First_Class class.
     */
    class RoyalMail_Online_First_Class extends \WooCommerce\RoyalMail\Rates\RoyalMail_Rate
    {
        /**
         * Slug of the rate (e.g. 'special-delivery-1pm').
         *
         * @return string
         */
        public function get_rate_slug(): string
        {
        }
        /**
         * Get quotes for this rate.
         *
         * @param array  $items to be shipped.
         * @param string $packing_method the method selected.
         * @param string $country_code Address to ship to.
         * @param array  $boxes List of boxes.
         * @param int    $instance_id Instance ID.
         *
         * @return array{ 'first-class': float }|false|null
         */
        public function get_quotes(array $items, string $packing_method, string $country_code, array $boxes = array(), int $instance_id = 0)
        {
        }
    }
    /**
     * RoyalMail_Online_First_Class_Signed class.
     */
    class RoyalMail_Online_First_Class_Signed extends \RoyalMail_Online_First_Class
    {
        /**
         * Slug of the rate (e.g. 'special-delivery-1pm').
         *
         * @return string
         */
        public function get_rate_slug(): string
        {
        }
        /**
         * Get quotes for this rate.
         *
         * @param array  $items to be shipped.
         * @param string $packing_method the method selected.
         * @param string $country_code Address to ship to.
         * @param array  $boxes Boxes used.
         * @param int    $instance_id Instance ID.
         *
         * @return array{ 'first-class-signed': float }|false|null
         */
        public function get_quotes(array $items, string $packing_method, string $country_code, array $boxes = array(), int $instance_id = 0)
        {
        }
    }
    /**
     * RoyalMail_Online_Parcelforce_Express_10 class.
     */
    class RoyalMail_Online_Parcelforce_Express_10 extends \WooCommerce\RoyalMail\Rates\Parcelforce_UK_Rate
    {
        /**
         * Slug of the rate (e.g. 'special-delivery-1pm').
         *
         * @return string
         */
        public function get_rate_slug(): string
        {
        }
    }
    /**
     * RoyalMail_Online_Parcelforce_Express_24 class.
     */
    class RoyalMail_Online_Parcelforce_Express_24 extends \WooCommerce\RoyalMail\Rates\Parcelforce_UK_Rate
    {
        /**
         * Slug of the rate (e.g. 'special-delivery-1pm').
         *
         * @return string
         */
        public function get_rate_slug(): string
        {
        }
    }
    /**
     * RoyalMail_Online_Parcelforce_Express_48 class.
     */
    class RoyalMail_Online_Parcelforce_Express_48 extends \WooCommerce\RoyalMail\Rates\Parcelforce_UK_Rate
    {
        /**
         * Slug of the rate (e.g. 'special-delivery-1pm').
         *
         * @return string
         */
        public function get_rate_slug(): string
        {
        }
    }
    /**
     * RoyalMail_Online_Parcelforce_Express_AM class.
     */
    class RoyalMail_Online_Parcelforce_Express_AM extends \WooCommerce\RoyalMail\Rates\Parcelforce_UK_Rate
    {
        /**
         * Slug of the rate (e.g. 'special-delivery-1pm').
         *
         * @return string
         */
        public function get_rate_slug(): string
        {
        }
    }
    /**
     * RoyalMail_Online_Second_Class class.
     */
    class RoyalMail_Online_Second_Class extends \WooCommerce\RoyalMail\Rates\RoyalMail_Rate
    {
        /**
         * Slug of the rate (e.g. 'special-delivery-1pm').
         *
         * @return string
         */
        public function get_rate_slug(): string
        {
        }
        /**
         * Get quotes for this rate.
         *
         * @param array  $items to be shipped.
         * @param string $packing_method selected.
         * @param string $country_code address.
         * @param array  $boxes Boxes used.
         * @param int    $instance_id Instance ID.
         *
         * @return array{ 'second-class': float }|false|null
         */
        public function get_quotes($items, $packing_method, $country_code, $boxes = array(), $instance_id = 0)
        {
        }
    }
    /**
     * RoyalMail_Online_Second_Class_Signed class.
     */
    class RoyalMail_Online_Second_Class_Signed extends \RoyalMail_Online_Second_Class
    {
        /**
         * Slug of the rate (e.g. 'special-delivery-1pm').
         *
         * @return string
         */
        public function get_rate_slug(): string
        {
        }
        /**
         * Get quotes for this rate.
         *
         * @param array  $items to be shipped.
         * @param string $packing_method selected.
         * @param string $country_code address.
         * @param array  $boxes Boxes used.
         * @param int    $instance_id Instance ID.
         *
         * @return array{ 'second-class-signed': float }|false|null
         */
        public function get_quotes($items, $packing_method, $country_code, $boxes = array(), $instance_id = 0)
        {
        }
    }
    /**
     * RoyalMail_Online_Special_Delivery_1pm class.
     */
    class RoyalMail_Online_Special_Delivery_1pm extends \WooCommerce\RoyalMail\Rates\RoyalMail_Rate
    {
        /**
         * Slug of the rate (e.g. 'special-delivery-1pm').
         *
         * @return string
         */
        public function get_rate_slug(): string
        {
        }
        /**
         * Get quotes for this rate.
         *
         * @param array  $items to be shipped.
         * @param string $packing_method the method selected.
         * @param string $country_code Address to ship to.
         *
         * @return array{ 'special-delivery-1pm': float }|false|null
         */
        public function get_quotes($items, $packing_method, $country_code)
        {
        }
    }
    /**
     * RoyalMail_Online_Tracked_24_Age_Verification class.
     *
     * @deprecated 4.0.9 The service is no longer offered: Royal Mail publishes no
     *                   online price for Age Verification, so this class has had no
     *                   rate data since the 2026-04-07 pricing cycle and returns no
     *                   quote. It is kept rather than deleted because it is an
     *                   externally exposed surface - third parties can extend it, and
     *                   removing it would take the
     *                   `woocommerce_shipping_royalmail_tracked-24-age-verification_rate_bands`
     *                   and `_rate_boxes` filters with it.
     */
    class RoyalMail_Online_Tracked_24_Age_Verification extends \WooCommerce\RoyalMail\Rates\RoyalMail_Rate
    {
        /**
         * Slug of the rate (e.g. 'special-delivery-1pm').
         *
         * @return string
         */
        public function get_rate_slug(): string
        {
        }
        /**
         * Get quotes for this rate.
         *
         * @param array  $items to be shipped.
         * @param string $packing_method the method selected.
         * @param string $country_code Address to ship to.
         * @param array  $boxes Boxes used.
         * @param int    $instance_id Instance ID.
         *
         * @return array{ 'tracked-24-age-verification': float }|false|null
         */
        public function get_quotes($items, $packing_method, $country_code, $boxes = array(), $instance_id = 0)
        {
        }
    }
    /**
     * RoyalMail_Online_Tracked_24_Signed class.
     */
    class RoyalMail_Online_Tracked_24_Signed extends \WooCommerce\RoyalMail\Rates\RoyalMail_Rate
    {
        /**
         * Slug of the rate (e.g. 'special-delivery-1pm').
         *
         * @return string
         */
        public function get_rate_slug(): string
        {
        }
        /**
         * Get quotes for this rate.
         *
         * @param array  $items to be shipped.
         * @param string $packing_method the method selected.
         * @param string $country_code Address to ship to.
         * @param array  $boxes Boxes used.
         * @param int    $instance_id Instance ID.
         *
         * @return array{ 'tracked-24-signed': float }|false|null
         */
        public function get_quotes($items, $packing_method, $country_code, $boxes = array(), $instance_id = 0)
        {
        }
    }
    /**
     * RoyalMail_Online_Tracked_24 class.
     */
    class RoyalMail_Online_Tracked_24 extends \WooCommerce\RoyalMail\Rates\RoyalMail_Rate
    {
        /**
         * Slug of the rate (e.g. 'special-delivery-1pm').
         *
         * @return string
         */
        public function get_rate_slug(): string
        {
        }
        /**
         * Get quotes for this rate.
         *
         * @param array  $items to be shipped.
         * @param string $packing_method the method selected.
         * @param string $country_code Address to ship to.
         * @param array  $boxes Boxes used.
         * @param int    $instance_id Instance ID.
         *
         * @return array{ 'tracked-24': float }|false|null
         */
        public function get_quotes($items, $packing_method, $country_code, $boxes = array(), $instance_id = 0)
        {
        }
    }
    /**
     * RoyalMail_Online_Tracked_48_Age_Verification class.
     *
     * @deprecated 4.0.9 The service is no longer offered: Royal Mail publishes no
     *                   online price for Age Verification, so this class has had no
     *                   rate data since the 2026-04-07 pricing cycle and returns no
     *                   quote. It is kept rather than deleted because it is an
     *                   externally exposed surface - third parties can extend it, and
     *                   removing it would take the
     *                   `woocommerce_shipping_royalmail_tracked-48-age-verification_rate_bands`
     *                   and `_rate_boxes` filters with it.
     */
    class RoyalMail_Online_Tracked_48_Age_Verification extends \WooCommerce\RoyalMail\Rates\RoyalMail_Rate
    {
        /**
         * Slug of the rate (e.g. 'special-delivery-1pm').
         *
         * @return string
         */
        public function get_rate_slug(): string
        {
        }
        /**
         * Get quotes for this rate.
         *
         * @param array  $items to be shipped.
         * @param string $packing_method the method selected.
         * @param string $country_code Address to ship to.
         * @param array  $boxes Boxes used.
         * @param int    $instance_id Instance ID.
         *
         * @return array{ 'tracked-48-age-verification': float }|false|null
         */
        public function get_quotes($items, $packing_method, $country_code, $boxes = array(), $instance_id = 0)
        {
        }
    }
    /**
     * RoyalMail_Online_Tracked_48_Signed class.
     */
    class RoyalMail_Online_Tracked_48_Signed extends \WooCommerce\RoyalMail\Rates\RoyalMail_Rate
    {
        /**
         * Slug of the rate (e.g. 'special-delivery-1pm').
         *
         * @return string
         */
        public function get_rate_slug(): string
        {
        }
        /**
         * Get quotes for this rate.
         *
         * @param array  $items to be shipped.
         * @param string $packing_method the method selected.
         * @param string $country_code Address to ship to.
         * @param array  $boxes Boxes used.
         * @param int    $instance_id Instance ID.
         *
         * @return array{ 'tracked-48-signed': float }|false|null
         */
        public function get_quotes($items, $packing_method, $country_code, $boxes = array(), $instance_id = 0)
        {
        }
    }
    /**
     * RoyalMail_Online_Tracked_48 class.
     */
    class RoyalMail_Online_Tracked_48 extends \WooCommerce\RoyalMail\Rates\RoyalMail_Rate
    {
        /**
         * Slug of the rate (e.g. 'special-delivery-1pm').
         *
         * @return string
         */
        public function get_rate_slug(): string
        {
        }
        /**
         * Get quotes for this rate.
         *
         * @param array  $items to be shipped.
         * @param string $packing_method the method selected.
         * @param string $country_code Address to ship to.
         * @param array  $boxes Boxes used.
         * @param int    $instance_id Instance ID.
         *
         * @return array{ 'tracked-48': float }|false|null
         */
        public function get_quotes($items, $packing_method, $country_code, $boxes = array(), $instance_id = 0)
        {
        }
    }
    /**
     * RoyalMail_Regular_First_Class class.
     */
    class RoyalMail_Regular_First_Class extends \WooCommerce\RoyalMail\Rates\RoyalMail_Rate
    {
        /**
         * Slug of the rate (e.g. 'special-delivery-1pm').
         *
         * @return string
         */
        public function get_rate_slug(): string
        {
        }
        /**
         * Get quotes for this rate.
         *
         * @param array  $items to be shipped.
         * @param string $packing_method the method selected.
         * @param string $country_code Address to ship to.
         * @param array  $boxes User-defined boxes.
         * @param int    $instance_id Instance ID.
         *
         * @return array{ 'first-class': float }|false|null
         */
        public function get_quotes($items, $packing_method, $country_code, $boxes = array(), $instance_id = 0)
        {
        }
    }
    /**
     * RoyalMail_Regular_First_Class_Signed class.
     */
    class RoyalMail_Regular_First_Class_Signed extends \RoyalMail_Regular_First_Class
    {
        /**
         * Slug of the rate (e.g. 'special-delivery-1pm').
         *
         * @return string
         */
        public function get_rate_slug(): string
        {
        }
        /**
         * Get quotes for this rate.
         *
         * @param array  $items to be shipped.
         * @param string $packing_method the method selected.
         * @param string $country_code Address to ship to.
         * @param array  $boxes User-defined boxes.
         * @param int    $instance_id Instance ID.
         *
         * @return array{ 'first-class-signed': float }|false|null
         */
        public function get_quotes($items, $packing_method, $country_code, $boxes = array(), $instance_id = 0)
        {
        }
    }
    /**
     * RoyalMail_Regular_Parcelforce_Express_10 class.
     */
    class RoyalMail_Regular_Parcelforce_Express_10 extends \WooCommerce\RoyalMail\Rates\Parcelforce_UK_Rate
    {
        /**
         * Slug of the rate (e.g. 'special-delivery-1pm').
         *
         * @return string
         */
        public function get_rate_slug(): string
        {
        }
    }
    /**
     * RoyalMail_Regular_Parcelforce_Express_24 class.
     */
    class RoyalMail_Regular_Parcelforce_Express_24 extends \WooCommerce\RoyalMail\Rates\Parcelforce_UK_Rate
    {
        /**
         * Slug of the rate (e.g. 'special-delivery-1pm').
         *
         * @return string
         */
        public function get_rate_slug(): string
        {
        }
    }
    /**
     * RoyalMail_Regular_Parcelforce_Express_48_Large class.
     */
    class RoyalMail_Regular_Parcelforce_Express_48_Large extends \WooCommerce\RoyalMail\Rates\Parcelforce_UK_Rate
    {
        /**
         * Slug of the rate (e.g. 'special-delivery-1pm').
         *
         * @return string
         */
        public function get_rate_slug(): string
        {
        }
    }
    /**
     * RoyalMail_Regular_Parcelforce_Express_48 class.
     */
    class RoyalMail_Regular_Parcelforce_Express_48 extends \WooCommerce\RoyalMail\Rates\Parcelforce_UK_Rate
    {
        /**
         * Slug of the rate (e.g. 'special-delivery-1pm').
         *
         * @return string
         */
        public function get_rate_slug(): string
        {
        }
    }
    /**
     * RoyalMail_Regular_Parcelforce_Express_AM class.
     */
    class RoyalMail_Regular_Parcelforce_Express_AM extends \WooCommerce\RoyalMail\Rates\Parcelforce_UK_Rate
    {
        /**
         * Slug of the rate (e.g. 'special-delivery-1pm').
         *
         * @return string
         */
        public function get_rate_slug(): string
        {
        }
    }
    /**
     * RoyalMail_Regular_Second_Class class.
     */
    class RoyalMail_Regular_Second_Class extends \WooCommerce\RoyalMail\Rates\RoyalMail_Rate
    {
        /**
         * Slug of the rate (e.g. 'special-delivery-1pm').
         *
         * @return string
         */
        public function get_rate_slug(): string
        {
        }
        /**
         * Get quotes for this rate.
         *
         * @param array  $items to be shipped.
         * @param string $packing_method selected.
         * @param string $country_code address.
         * @param array  $boxes User-defined boxes.
         * @param int    $instance_id Instance ID.
         *
         * @return array{ 'second-class': float }|false|null
         */
        public function get_quotes($items, $packing_method, $country_code, $boxes = array(), $instance_id = 0)
        {
        }
    }
    /**
     * RoyalMail_Regular_Second_Class_Signed class.
     */
    class RoyalMail_Regular_Second_Class_Signed extends \RoyalMail_Regular_Second_Class
    {
        /**
         * Slug of the rate (e.g. 'special-delivery-1pm').
         *
         * @return string
         */
        public function get_rate_slug(): string
        {
        }
        /**
         * Get quotes for this rate.
         *
         * @param array  $items to be shipped.
         * @param string $packing_method selected.
         * @param string $country_code address.
         * @param array  $boxes User-defined boxes.
         * @param int    $instance_id Instance ID.
         *
         * @return array{ 'second-class-signed': float }|false|null
         */
        public function get_quotes($items, $packing_method, $country_code, $boxes = array(), $instance_id = 0)
        {
        }
    }
    /**
     * RoyalMail_Regular_Special_Delivery_1pm class.
     */
    class RoyalMail_Regular_Special_Delivery_1pm extends \WooCommerce\RoyalMail\Rates\RoyalMail_Rate
    {
        /**
         * Slug of the rate (e.g. 'special-delivery-1pm').
         *
         * @return string
         */
        public function get_rate_slug(): string
        {
        }
        /**
         * Get quotes for this rate.
         *
         * @param array  $items to be shipped.
         * @param string $packing_method the method selected.
         * @param string $country_code Address to ship to.
         *
         * @return array{ 'special-delivery-1pm': float }|false|null
         */
        public function get_quotes($items, $packing_method, $country_code)
        {
        }
    }
    /**
     * RoyalMail_Regular_Special_Delivery_9am class.
     */
    class RoyalMail_Regular_Special_Delivery_9am extends \WooCommerce\RoyalMail\Rates\RoyalMail_Rate
    {
        /**
         * Slug of the rate (e.g. 'special-delivery-1pm').
         *
         * @return string
         */
        public function get_rate_slug(): string
        {
        }
        /**
         * Get quotes for this rate.
         *
         * @param array  $items to be shipped.
         * @param string $packing_method the method selected.
         * @param string $country_code Address to ship to.
         *
         * @return array{ 'special-delivery-9am': float }|false|null
         */
        public function get_quotes($items, $packing_method, $country_code)
        {
        }
    }
    /**
     * RoyalMail_Regular_Tracked_24_Signed class.
     */
    class RoyalMail_Regular_Tracked_24_Signed extends \WooCommerce\RoyalMail\Rates\RoyalMail_Rate
    {
        /**
         * Slug of the rate (e.g. 'special-delivery-1pm').
         *
         * @return string
         */
        public function get_rate_slug(): string
        {
        }
        /**
         * Get quotes for this rate.
         *
         * @param array  $items to be shipped.
         * @param string $packing_method the method selected.
         * @param string $country_code Address to ship to.
         * @param array  $boxes Boxes used.
         * @param int    $instance_id Instance ID.
         *
         * @return array{ 'tracked-24-signed': float }|false|null
         */
        public function get_quotes($items, $packing_method, $country_code, $boxes = array(), $instance_id = 0)
        {
        }
    }
    /**
     * RoyalMail_Regular_Tracked_24 class.
     */
    class RoyalMail_Regular_Tracked_24 extends \WooCommerce\RoyalMail\Rates\RoyalMail_Rate
    {
        /**
         * Slug of the rate (e.g. 'special-delivery-1pm').
         *
         * @return string
         */
        public function get_rate_slug(): string
        {
        }
        /**
         * Get quotes for this rate.
         *
         * @param array  $items to be shipped.
         * @param string $packing_method the method selected.
         * @param string $country_code Address to ship to.
         * @param array  $boxes Boxes used.
         * @param int    $instance_id Instance ID.
         *
         * @return array{ 'tracked-24': float }|false|null
         */
        public function get_quotes($items, $packing_method, $country_code, $boxes = array(), $instance_id = 0)
        {
        }
    }
    /**
     * RoyalMail_Regular_Tracked_48_Signed class.
     */
    class RoyalMail_Regular_Tracked_48_Signed extends \WooCommerce\RoyalMail\Rates\RoyalMail_Rate
    {
        /**
         * Slug of the rate (e.g. 'special-delivery-1pm').
         *
         * @return string
         */
        public function get_rate_slug(): string
        {
        }
        /**
         * Get quotes for this rate.
         *
         * @param array  $items to be shipped.
         * @param string $packing_method the method selected.
         * @param string $country_code Address to ship to.
         * @param array  $boxes Boxes used.
         * @param int    $instance_id Instance ID.
         *
         * @return array{ 'tracked-48-signed': float }|false|null
         */
        public function get_quotes($items, $packing_method, $country_code, $boxes = array(), $instance_id = 0)
        {
        }
    }
    /**
     * RoyalMail_Regular_Tracked_48 class.
     */
    class RoyalMail_Regular_Tracked_48 extends \WooCommerce\RoyalMail\Rates\RoyalMail_Rate
    {
        /**
         * Slug of the rate (e.g. 'special-delivery-1pm').
         *
         * @return string
         */
        public function get_rate_slug(): string
        {
        }
        /**
         * Get quotes for this rate.
         *
         * @param array  $items to be shipped.
         * @param string $packing_method the method selected.
         * @param string $country_code Address to ship to.
         * @param array  $boxes Boxes used.
         * @param int    $instance_id Instance ID.
         *
         * @return array{ 'tracked-48': float }|false|null
         */
        public function get_quotes($items, $packing_method, $country_code, $boxes = array(), $instance_id = 0)
        {
        }
    }
}
namespace {
    \define('WOOCOMMERCE_SHIPPING_ROYALMAIL_FILE', __FILE__);
    \define('WOOCOMMERCE_SHIPPING_ROYALMAIL_ABSPATH', \trailingslashit(__DIR__));
    \define('WOOCOMMERCE_SHIPPING_ROYALMAIL_VERSION', '4.1.2');
    /**
     * Initializes extension.
     *
     * @since 2.5.24
     * @return void
     */
    function woocommerce_shipping_royalmail_init()
    {
    }
    /**
     * WooCommerce fallback notice.
     *
     * @since 2.5.24
     * @return void
     */
    function woocommerce_shipping_royalmail_missing_wc_notice()
    {
    }
    /**
     * Load plugin textdomain.
     *
     * @return void
     */
    function woocommerce_shipping_royalmail_load_textdomain()
    {
    }
}