<?php
/**
 * Generated stub declarations for woocommerce-shipping-fedex 4.8.3.
 * @see https://github.com/woocommerce/all-plugins/tree/stubs
 */

namespace {
    /**
     * Registers read-only FedEx abilities.
     */
    class WC_Shipping_Fedex_Abilities
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
         * Adds FedEx ability definitions to WooCommerce's ability loader.
         *
         * @param array $classes Ability definition class names.
         * @return array
         */
        public static function add_ability_definition_classes(array $classes)
        {
        }
        /**
         * Loads FedEx ability definition classes and shared helpers.
         *
         * @return void
         */
        private static function load_ability_definition_classes()
        {
        }
    }
    /**
     * Builds credential-safe FedEx ability responses from WooCommerce settings.
     */
    class WC_Shipping_Fedex_Ability_Data
    {
        /**
         * Checks whether the current user can read FedEx settings.
         *
         * @return bool
         */
        public static function can_read_settings()
        {
        }
        /**
         * Returns FedEx method instances matching ability input.
         *
         * @param array $input Ability input.
         * @return array|WP_Error
         */
        public static function get_shipping_method_instances_for_input($input)
        {
        }
        /**
         * Returns the shared instance filter input schema.
         *
         * @return array
         */
        public static function get_instance_input_schema()
        {
        }
        /**
         * Returns the connection status store environment schema.
         *
         * @return array
         */
        public static function get_connection_store_schema()
        {
        }
        /**
         * Returns the rate configuration store environment schema.
         *
         * @return array
         */
        public static function get_rate_store_schema()
        {
        }
        /**
         * Returns metadata for read-only, externally visible FedEx abilities.
         *
         * @return array
         */
        public static function get_read_only_meta()
        {
        }
        /**
         * Returns store-level FedEx connection environment information.
         *
         * @return array
         */
        public static function get_connection_store_environment()
        {
        }
        /**
         * Returns store-level FedEx rate environment information.
         *
         * @return array
         */
        public static function get_rate_store_environment()
        {
        }
        /**
         * Returns FedEx method instance rows.
         *
         * @return array
         */
        public static function get_shipping_method_instances()
        {
        }
        /**
         * Adds FedEx method instances from a shipping zone.
         *
         * @param array  $instances        Instance list.
         * @param int    $zone_id          Shipping zone ID.
         * @param string $zone_name        Shipping zone name.
         * @param array  $shipping_methods Zone shipping methods.
         * @return void
         */
        private static function add_zone_instances(&$instances, $zone_id, $zone_name, $shipping_methods)
        {
        }
        /**
         * Sorts FedEx method instances by zone, method order, and instance ID.
         *
         * @param array $a First instance.
         * @param array $b Second instance.
         * @return int
         */
        private static function sort_instances($a, $b)
        {
        }
        /**
         * Returns one FedEx method instance row.
         *
         * @param int $instance_id Shipping method instance ID.
         * @return array|false
         */
        public static function get_shipping_method_instance($instance_id)
        {
        }
        /**
         * Returns connection status for one method instance.
         *
         * @param array $instance FedEx method instance data.
         * @return array
         */
        public static function format_connection_status($instance)
        {
        }
        /**
         * Returns rate configuration for one method instance.
         *
         * @param array $instance FedEx method instance data.
         * @return array
         */
        public static function format_rate_configuration($instance)
        {
        }
        /**
         * Returns service configuration.
         *
         * @param array $settings Method settings.
         * @return array
         */
        private static function get_services($settings)
        {
        }
        /**
         * Returns FedEx service labels with the same country-specific naming as the shipping method.
         *
         * @return array
         */
        private static function get_service_labels()
        {
        }
        /**
         * Returns package configuration summary without exposing full box dimensions.
         *
         * @param array $settings Method settings.
         * @return array
         */
        private static function get_package_summary($settings)
        {
        }
        /**
         * Returns the settings array for a method instance.
         *
         * @param int $instance_id Shipping method instance ID.
         * @return array
         */
        private static function get_instance_settings($instance_id)
        {
        }
        /**
         * Returns the store base country.
         *
         * @return string
         */
        private static function get_base_country()
        {
        }
        /**
         * Returns the configured API type.
         *
         * REST is the only supported API type.
         *
         * @return string
         */
        private static function get_api_type()
        {
        }
        /**
         * Returns the configured API mode.
         *
         * @param array $settings Method settings.
         * @return string
         */
        private static function get_api_mode($settings)
        {
        }
        /**
         * Returns the default box packer library.
         *
         * @return string
         */
        private static function get_default_box_packer_library()
        {
        }
        /**
         * Returns missing setup requirements for the active FedEx API type.
         *
         * @param array $settings Method settings.
         * @return array
         */
        private static function get_missing_connection_requirements($settings)
        {
        }
        /**
         * Checks whether all settings are populated.
         *
         * @param array $settings Method settings.
         * @param array $keys     Setting keys.
         * @return bool
         */
        private static function has_all_settings($settings, $keys)
        {
        }
        /**
         * Checks whether a setting is populated.
         *
         * @param array  $settings Method settings.
         * @param string $key      Setting key.
         * @return bool
         */
        private static function has_setting($settings, $key)
        {
        }
        /**
         * Reads a boolean yes/no setting.
         *
         * @param array  $settings      Method settings.
         * @param string $key           Setting key.
         * @param bool   $default_value Default value.
         * @return bool
         */
        private static function get_setting_bool($settings, $key, $default_value)
        {
        }
        /**
         * Reads a string setting.
         *
         * @param array  $settings      Method settings.
         * @param string $key           Setting key.
         * @param string $default_value Default value.
         * @return string
         */
        private static function get_setting_string($settings, $key, $default_value)
        {
        }
    }
    /**
     * Get FedEx connection status ability definition.
     */
    class WC_Shipping_Fedex_Get_Connection_Status_Ability implements \Automattic\WooCommerce\Abilities\AbilityDefinition
    {
        /**
         * Ability category.
         */
        const CATEGORY = 'woocommerce';
        /**
         * Ability ID.
         */
        const NAME = 'woocommerce-shipping-fedex/get-connection-status';
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
         * Checks whether the current user can read FedEx settings.
         *
         * @param array $input Ability input.
         * @return bool
         */
        public static function can_read($input = array())
        {
        }
        /**
         * Returns credential-safe FedEx connection status.
         *
         * @param array $input Ability input.
         * @return array|WP_Error
         */
        public static function execute($input = array())
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
         * Returns the connection instance schema.
         *
         * @return array
         */
        private static function get_connection_instance_schema()
        {
        }
    }
    /**
     * Get FedEx rate configuration ability definition.
     */
    class WC_Shipping_Fedex_Get_Rate_Configuration_Ability implements \Automattic\WooCommerce\Abilities\AbilityDefinition
    {
        /**
         * Ability category.
         */
        const CATEGORY = 'woocommerce';
        /**
         * Ability ID.
         */
        const NAME = 'woocommerce-shipping-fedex/get-rate-configuration';
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
         * Checks whether the current user can read FedEx settings.
         *
         * @param array $input Ability input.
         * @return bool
         */
        public static function can_read($input = array())
        {
        }
        /**
         * Returns credential-safe FedEx rate configuration.
         *
         * @param array $input Ability input.
         * @return array|WP_Error
         */
        public static function execute($input = array())
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
         * Returns the configuration instance schema.
         *
         * @return array
         */
        private static function get_configuration_instance_schema()
        {
        }
        /**
         * Returns the service schema.
         *
         * @return array
         */
        private static function get_service_schema()
        {
        }
        /**
         * Returns the package summary schema.
         *
         * @return array
         */
        private static function get_package_summary_schema()
        {
        }
    }
}
namespace WooCommerce\FedEx {
    /**
     * FedEx Abstract API class.
     */
    abstract class Abstract_FedEx_API
    {
        /**
         * Endpoint for the API.
         *
         * @var string
         */
        protected $endpoint;
        /**
         * FedEx Shipping Method Class.
         *
         * @var \WC_Shipping_Fedex
         */
        protected $shipping_method;
        /**
         * Get the common API request parameters.
         *
         * @param string $request_type Request type.
         *
         * @return array
         */
        abstract public function get_fedex_api_request($request_type);
        /**
         * Prepare request elements.
         *
         * @param array  $request API request.
         * @param string $request_type The request type.
         * @param string $parent_key   The parent key.
         *
         * @return array
         */
        public function prepare_request($request, $request_type = '', $parent_key = '')
        {
        }
        /**
         * Get result.
         *
         * @param array  $request API request.
         * @param string $request_type Request type.
         *
         * @return array
         */
        abstract public function get_result($request, $request_type);
        /**
         * Whether the last get_result() call returned a 200 that contained no rates.
         *
         * Lets the caller tell "the carrier has nothing for this request" apart from a transport or
         * authorization failure, so only the former is worth remembering. Implementations that
         * cannot tell the two apart leave this false, and nothing is cached.
         *
         * @return bool
         *
         * @since 4.8.0
         */
        public function response_had_no_rates()
        {
        }
        /**
         * Check if Destination Address is Residential.
         *
         * @param array $request API request.
         *
         * @return bool
         */
        abstract public function residential_address_validation($request);
        /**
         * Process API response.
         *
         * @param array  $request Request data.
         * @param mixed  $result API response or result.
         * @param string $request_type Request type.
         *
         * @return void
         */
        abstract public function process_result($request, $result, $request_type);
    }
    /**
     * Class FedEx_OAuth
     *
     * Handles the OAuth authentication for the FedEx REST API.
     *
     * @package WooCommerce\FedEx
     */
    class FedEx_OAuth
    {
        /**
         * Duration in seconds to cache authentication failures.
         * Prevents repeated failed API calls when credentials are incorrect.
         *
         * @var int
         */
        const FAILURE_CACHE_DURATION = 300;
        // 5 minutes
        /**
         * WC_Shipping_Fedex method.
         *
         * @var \WC_Shipping_Fedex
         */
        protected $shipping_method;
        /**
         * The client ID used to authenticate with the FedEx OAuth API.
         *
         * @var string
         */
        protected $client_id;
        /**
         * The client secret used to authenticate with the FedEx OAuth API.
         *
         * @var string
         */
        protected $client_secret;
        /**
         * The URL for the FedEx OAuth API endpoint.
         *
         * @var string
         */
        protected $endpoint;
        /**
         * The OAuth scope to request. An empty string means no `scope` parameter is
         * sent (the FedEx parcel OAuth does not use one; FedEx Freight requires `fxf-api`).
         *
         * @var string
         */
        protected $scope = '';
        /**
         * The name of the transient used to store the access token.
         *
         * @var string
         */
        protected $access_token_transient_name;
        /**
         * The name of the transient used to store authentication failures.
         *
         * @var string
         */
        protected $auth_failure_transient_name;
        /**
         * Prefix identifying this connection in log messages. Subclasses override it so freight
         * and parcel token activity can be told apart in the WooCommerce logs.
         *
         * @var string
         */
        protected $log_prefix = 'FedEx_OAuth';
        /**
         * Constructor.
         *
         * Subclasses configure themselves by overriding get_endpoint(), get_scope(),
         * get_environment_key() and get_transient_prefix() rather than replacing this
         * initialization, so state added here is never missed by a child client.
         *
         * @param \WC_Shipping_Fedex $fedex_shipping_method The FedEx shipping method object.
         * @param string|null       $client_id             Client ID. Defaults to the parcel API key from the settings.
         * @param string|null       $client_secret         Client secret. Defaults to the parcel API secret from the settings.
         *
         * @since 4.8.0 Added the $client_id and $client_secret parameters.
         */
        public function __construct($fedex_shipping_method, $client_id = null, $client_secret = null)
        {
        }
        /**
         * The OAuth token endpoint for this connection's environment.
         *
         * @return string
         *
         * @since 4.8.0
         */
        protected function get_endpoint()
        {
        }
        /**
         * The OAuth scope to request. An empty string sends no `scope` parameter.
         *
         * @return string
         *
         * @since 4.8.0
         */
        protected function get_scope()
        {
        }
        /**
         * Environment identifier mixed into the transient name, so sandbox and production
         * tokens for the same credentials never share a cache entry.
         *
         * @return string
         *
         * @since 4.8.0
         */
        protected function get_environment_key()
        {
        }
        /**
         * Transient name prefix for this connection's token and failure caches.
         *
         * @return string
         *
         * @since 4.8.0
         */
        protected function get_transient_prefix()
        {
        }
        /**
         * Human-readable name for this connection, used in admin notices.
         *
         * @return string
         *
         * @since 4.8.0
         */
        protected function get_connection_label()
        {
        }
        /**
         * Log context tagged with this connection's own environment.
         *
         * Logger::log() otherwise derives the log file from the shipping method's api_mode — the
         * parcel environment — so freight token activity lands in the parcel log whenever the two
         * environments differ. Identical to the default for the parcel connection.
         *
         * @param array $context Existing log context.
         *
         * @return array
         *
         * @since 4.8.0
         */
        protected function log_context($context = array())
        {
        }
        /**
         * Check if we've successfully authenticated.
         *
         * @return bool
         */
        public function is_authenticated()
        {
        }
        /**
         * Clear the cached access token and any cached authentication failures.
         *
         * @return void
         */
        public function clear_access_token()
        {
        }
        /**
         * Validate credentials by attempting to get a token.
         *
         * @param string $client_id     The client ID to validate.
         * @param string $client_secret The client secret to validate.
         *
         * @return array Array with 'success' boolean and 'message' string.
         */
        public function validate_credentials($client_id, $client_secret)
        {
        }
        /**
         * What to check when this connection cannot authenticate.
         *
         * Shown on the settings screen as well as in the save-time message, because the status row
         * is what a merchant sees on every later visit.
         *
         * @return string
         *
         * @since 4.8.0
         */
        public function get_failure_hint()
        {
        }
        /**
         * What to check when save-time credential validation fails.
         *
         * The freight connection overrides this: with its own environment toggle, a correct
         * production key tested against the QA host fails the same way as a wrong key.
         *
         * @return string
         *
         * @since 4.8.0
         */
        protected function get_validation_failure_hint()
        {
        }
        /**
         * Check if there's a cached authentication failure.
         *
         * @return bool True if there's a cached failure, false otherwise.
         */
        private function has_cached_failure()
        {
        }
        /**
         * Cache an authentication failure to prevent repeated failed API calls.
         * Note: Server errors (500, 503) are NOT cached as they are temporary issues.
         *
         * @return void
         */
        private function cache_failure()
        {
        }
        /**
         * Clear any cached authentication failure.
         *
         * @return void
         */
        private function clear_failure_cache()
        {
        }
        /**
         * Get an access token.
         *
         * @param bool $force_refresh Force token refresh.
         *
         * @return string|bool
         */
        public function get_access_token($force_refresh = false)
        {
        }
        /**
         * Get an access token from the FedEx OAuth API.
         *
         * @param string $client_id     Client ID to use for authentication.
         * @param string $client_secret Client secret to use for authentication.
         *
         * @return array The response from the FedEx OAuth API with 'success', 'access_token', 'expires_in', and 'http_code'.
         */
        private function get_access_token_from_fedex($client_id, $client_secret)
        {
        }
        /**
         * Get response body.
         *
         * @param  array $response FedEx API response.
         *
         * @return object
         */
        private function get_response_body($response)
        {
        }
        /**
         * Get error message from FedEx API response.
         *
         * @param  object $response FedEx API response.
         *
         * @return string
         */
        private function retrieve_error_message_from_response($response)
        {
        }
    }
    /**
     * Class FedEx_Freight_OAuth
     *
     * OAuth client for the FedEx Freight LTL platform, which the spinoff moved onto its own
     * developer portal with separate credentials, token host, `fxf-api` scope and environment.
     * The token flow itself is identical to parcel, so only the configuration is overridden.
     *
     * @package WooCommerce\FedEx
     *
     * @since 4.8.0
     */
    class FedEx_Freight_OAuth extends \WooCommerce\FedEx\FedEx_OAuth
    {
        /**
         * Prefix identifying freight token activity in the logs.
         *
         * @var string
         *
         * @since 4.8.0
         */
        protected $log_prefix = 'FedEx_Freight_OAuth';
        /**
         * Human-readable name for this connection, used in admin notices.
         *
         * @return string
         *
         * @since 4.8.0
         */
        protected function get_connection_label()
        {
        }
        /**
         * The FedEx Freight token endpoint, which has its own sandbox host.
         *
         * @return string
         *
         * @since 4.8.0
         */
        protected function get_endpoint()
        {
        }
        /**
         * FedEx Freight requires a scope; the parcel OAuth does not send one.
         *
         * @return string
         *
         * @since 4.8.0
         */
        protected function get_scope()
        {
        }
        /**
         * Freight has its own production/sandbox toggle, independent of the parcel environment.
         *
         * @return string
         *
         * @since 4.8.0
         */
        protected function get_environment_key()
        {
        }
        /**
         * Freight tokens are cached separately from parcel tokens.
         *
         * @return string
         *
         * @since 4.8.0
         */
        protected function get_transient_prefix()
        {
        }
        /**
         * A correct production key tested against the QA host fails like a wrong key, so the
         * environment toggle belongs in the hint.
         *
         * @return string
         *
         * @since 4.8.0
         */
        protected function get_validation_failure_hint()
        {
        }
    }
    /**
     * FedEx REST API class.
     */
    class FedEx_REST_API extends \WooCommerce\FedEx\Abstract_FedEx_API
    {
        /**
         * Endpoint for the FedEx Rating API.
         *
         * @var string
         */
        protected $api_url = '';
        /**
         * OAuth value.
         *
         * @var \WooCommerce\FedEx\FedEx_OAuth
         */
        protected $oauth;
        /**
         * FedEx Account Number
         *
         * @var string
         */
        protected $account_number;
        /**
         * API Mode Production or Test
         *
         * @var string
         */
        protected $api_mode;
        /**
         * Request type
         *
         * @var string
         */
        protected $request_type;
        /**
         * Is Recipient Address Residential.
         *
         * @var bool
         */
        protected $residential;
        /**
         * Request headers.
         *
         * @var array
         */
        protected $headers;
        /**
         * Max transport retries for wp_remote_post_with_retry().
         *
         * @var int
         */
        protected $transport_max_retries;
        /**
         * Delay in milliseconds between transport retries.
         *
         * @var int
         */
        protected $transport_retry_delay_ms;
        /**
         * Longest Retry-After this client will wait out before giving up on a retry.
         *
         * A rate request runs while a shopper waits, so a throttle window measured in seconds is
         * better answered with "no rates this time" than with a blocked checkout.
         *
         * @var int
         *
         * @since 4.8.0
         */
        const MAX_RETRY_AFTER_MS = 2000;
        /**
         * Prefix identifying this client in log messages. Subclasses override it so freight and
         * parcel rate activity can be told apart in the WooCommerce logs.
         *
         * @var string
         *
         * @since 4.8.0
         */
        protected $log_prefix = 'FedEx_REST_API';
        /**
         * Whether the last get_result() call received a 200 that carried no rates.
         *
         * Lets the caller tell "FedEx has nothing for this request" apart from a transport or
         * authorization failure, so only the former is worth remembering.
         *
         * @var bool
         *
         * @since 4.8.0
         */
        protected $response_had_no_rates = false;
        /**
         * FedEx_REST_API constructor.
         *
         * Subclasses configure themselves by overriding is_production_environment(),
         * get_api_base_url(), resolve_account_number() and resolve_oauth() rather than replacing
         * this initialization, so state added here is never missed by a child client.
         *
         * @param \WC_Shipping_Fedex $fedex_shipping_method The FedEx shipping method object.
         */
        public function __construct($fedex_shipping_method)
        {
        }
        /**
         * Whether this client talks to the production environment.
         *
         * Overridden by the FedEx Freight rate client, which has its own environment toggle.
         *
         * @return bool
         *
         * @since 4.8.0
         */
        protected function is_production_environment()
        {
        }
        /**
         * Host this client sends its requests to.
         *
         * Overridden by the FedEx Freight rate client, which runs on a separate platform.
         *
         * @return string
         *
         * @since 4.8.0
         */
        protected function get_api_base_url()
        {
        }
        /**
         * Account number rates are requested against.
         *
         * Overridden by the FedEx Freight rate client, which bills to the freight account.
         *
         * @return string
         *
         * @since 4.8.0
         */
        protected function resolve_account_number()
        {
        }
        /**
         * OAuth connection this client authenticates with.
         *
         * Overridden by the FedEx Freight rate client, which has its own credentials.
         *
         * @return FedEx_OAuth
         *
         * @since 4.8.0
         */
        protected function resolve_oauth()
        {
        }
        /**
         * Resolve the HTTP transport retry settings from filters.
         *
         * Shared by the parcel and freight rate clients so both honour the same filters.
         *
         * @return void
         *
         * @since 4.8.0
         */
        protected function init_transport_retry_settings()
        {
        }
        /**
         * Log context tagged with this client's own environment.
         *
         * Logger::log() otherwise derives the log file from the shipping method's api_mode — the
         * parcel environment — which files freight entries under the parcel log whenever the two
         * environments differ. Identical to the default for the parcel client.
         *
         * @param array $context Existing log context.
         *
         * @return array
         *
         * @since 4.8.0
         */
        protected function log_context($context = array())
        {
        }
        /**
         * Set request headers.
         *
         * @param bool $force_refresh Force refresh access token.
         *
         * @return bool True if headers were set successfully, false if authentication failed.
         *
         * @since 4.8.0 Widened to protected for symmetry with the other subclass seams.
         */
        protected function set_headers($force_refresh = false)
        {
        }
        /**
         * Headers sent with every request from this client.
         *
         * The seam subclasses override, so a header added here reaches every client rather than
         * only the parcel one. Overridden by the FedEx Freight rate client, whose platform also
         * requires x-client-id.
         *
         * @param string $access_token Bearer token for this client's connection.
         *
         * @return array
         *
         * @since 4.8.0
         */
        protected function get_request_headers($access_token)
        {
        }
        /**
         * Rate request types asked for in the rate request.
         *
         * PREFERRED asks FedEx to convert into the store currency; the preferred currency is not
         * returned when the requested one is already present in the response. Overridden by the
         * FedEx Freight rate client, whose LTL rateRequestType enum has no PREFERRED value.
         *
         * @return array
         *
         * @since 4.8.0
         */
        protected function get_rate_request_types()
        {
        }
        /**
         * Get the common API request parameters.
         *
         * @param string $request_type Request type.
         *
         * @return array
         */
        public function get_fedex_api_request($request_type)
        {
        }
        /**
         * Get the recipient country code from a prepared rate request.
         *
         * @param array $request Prepared request.
         *
         * @return string Two letter country code, or '?' when the request has no recipient.
         */
        private function get_request_destination_country($request)
        {
        }
        /**
         * Get result.
         *
         * @param array  $request Request.
         * @param string $request_type Rate service type.
         * @param bool   $allow_retry Allow retry.
         *
         * @return mixed
         */
        public function get_result($request, $request_type, $allow_retry = true)
        {
        }
        /**
         * Whether the last get_result() call returned a 200 that contained no rates.
         *
         * @return bool
         *
         * @since 4.8.0
         */
        public function response_had_no_rates()
        {
        }
        /**
         * HTTP status codes worth one transport-level retry on a rate request.
         *
         * The freight client overrides this: its platform throttles bursts with 429.
         *
         * @return int[]
         *
         * @since 4.8.0
         */
        protected function get_retryable_rate_codes()
        {
        }
        /**
         * Platform-specific explanation for a failed rate response, logged after the raw line.
         *
         * The freight client overrides this: its raw status lines do not name the cause.
         *
         * @param int $code HTTP status code.
         *
         * @return string Extra log line, or an empty string for none.
         *
         * @since 4.8.0
         */
        protected function get_failure_hint($code)
        {
        }
        /**
         * Rate endpoint path for the given request type.
         *
         * Overridden by the FedEx Freight rate client, which uses a different platform path.
         *
         * @param string $request_type Request type.
         *
         * @return string
         *
         * @since 4.8.0
         */
        protected function get_rate_endpoint($request_type)
        {
        }
        /**
         * Extract the rate reply details from a decoded response body.
         *
         * Overridden by the FedEx Freight rate client, which also accepts a payload nesting
         * `output` one level deeper.
         *
         * An empty list counts as absent: a 200 carrying no rates must not be cached, or the
         * caller stores it for a week and suppresses rates for that destination.
         *
         * @param object $response_body Decoded response body.
         *
         * @return array|null The rate reply details, or null when absent or empty.
         *
         * @since 4.8.0
         */
        protected function get_rate_reply_details($response_body)
        {
        }
        /**
         * Find the rate reply details in a decoded response body, wherever this platform puts them.
         *
         * Overridden by the FedEx Freight rate client, which also accepts a payload nesting `output`
         * one level deeper.
         *
         * @param object $response_body Decoded response body.
         *
         * @return mixed The raw rate reply details, or null when absent.
         *
         * @since 4.8.0
         */
        protected function locate_rate_reply_details($response_body)
        {
        }
        /**
         * Drop reply entries that carry no price, and report nothing left as no rates at all.
         *
         * Every request type sets servicesNeededOnRateFailure — see get_fedex_api_request() — so
         * FedEx can answer with entries for services it could not price, and those carry no
         * ratedShipmentDetails. Left in, a reply where nothing was priced looks rated and the caller
         * keeps it for a week while the shopper sees no rates.
         *
         * @param mixed $details Raw rate reply details.
         *
         * @return array|object|null The priced entries, or null when none remain.
         *
         * @since 4.8.0
         */
        protected function keep_priced_details($details)
        {
        }
        /**
         * Service name of a reply entry, for a log line.
         *
         * FedEx sends a string; anything else is coerced rather than concatenated, because a
         * stdClass here would raise an Error, and run_package_request() catches only Exception.
         *
         * @param object $entry Rate reply entry.
         *
         * @return string
         *
         * @since 4.8.0
         */
        protected function describe_service($entry)
        {
        }
        /**
         * Execute wp_remote_post with retry on transport failure or specified HTTP codes.
         *
         * @param string $url             Request URL.
         * @param array  $args            Request arguments.
         * @param array  $retryable_codes HTTP status codes that trigger a retry.
         *
         * @return array|\WP_Error
         */
        private function wp_remote_post_with_retry($url, $args, $retryable_codes = array())
        {
        }
        /**
         * How long a response asked us to wait, in milliseconds.
         *
         * Retry-After is either a number of seconds or an HTTP date; both forms are accepted.
         *
         * @param array $response wp_remote_post() response.
         *
         * @return int|null Milliseconds to wait, or null when the header is absent or unusable.
         *
         * @since 4.8.0
         */
        private function get_retry_after_ms($response)
        {
        }
        /**
         * Check if Destination Address is Residential.
         *
         * @param array $request API Request value.
         *
         * @return bool
         */
        public function residential_address_validation($request)
        {
        }
        /**
         * Get residential/business classification from FedEx address validation response.
         *
         * @param string $classification The classification returned from FedEx (MIXED, UNKNOWN, BUSINESS, RESIDENTIAL).
         * @return bool True if residential, false if business or default to zone setting.
         */
        private function is_residential(string $classification): bool
        {
        }
        /**
         * Generate key from address data.
         *
         * @param  array $request Address validation request.
         *
         * @return string|false
         */
        private function get_address_key($request)
        {
        }
        /**
         * Prepare request elements.
         *
         * Depending on the request type, some elements need to be renamed or removed.
         * This function will loop through the request array, and modify the keys and values as needed.
         *
         * @param array  $request      The request array.
         * @param string $request_type The request type.
         * @param string $parent_key   The parent key.
         *
         * @return array
         */
        public function prepare_request($request, $request_type = '', $parent_key = '')
        {
        }
        /**
         * Process result.
         *
         * @param array  $request Request data.
         * @param object $result API response or result.
         * @param string $request_type Request type.
         *
         * @return void
         */
        public function process_result($request, $result, $request_type)
        {
        }
    }
    /**
     * FedEx Freight LTL rate client.
     *
     * The FedEx Freight spinoff moved LTL rating onto its own platform (api.ltl.tech) with
     * separate credentials, host, path and a required x-client-id header. This client owns
     * those freight-platform specifics and reuses the parcel client's request transform
     * (prepare_request) and HTTP transport (wp_remote_post_with_retry).
     *
     * Configuration happens through the parent's overridable seams rather than a replacement
     * constructor, so state the parent gains later is never silently missed here.
     *
     * Constructing this class requests a freight OAuth token, so build it only when a freight
     * rate is actually being requested — see WC_Shipping_Fedex::get_api().
     *
     * @since 4.8.0
     */
    class FedEx_Freight_REST_API extends \WooCommerce\FedEx\FedEx_REST_API
    {
        /**
         * Prefix identifying freight rate activity in the logs.
         *
         * @var string
         *
         * @since 4.8.0
         */
        protected $log_prefix = 'FedEx_Freight_REST_API';
        /**
         * Freight has its own production/sandbox toggle, independent of the parcel environment.
         *
         * @return bool
         *
         * @since 4.8.0
         */
        protected function is_production_environment()
        {
        }
        /**
         * The FedEx Freight LTL host, which has its own preprod environment.
         *
         * @return string
         *
         * @since 4.8.0
         */
        protected function get_api_base_url()
        {
        }
        /**
         * Freight rates are requested against the FedEx Freight account.
         *
         * @return string
         *
         * @since 4.8.0
         */
        protected function resolve_account_number()
        {
        }
        /**
         * Freight authenticates against its own OAuth connection on the freight platform.
         *
         * @return FedEx_OAuth
         *
         * @since 4.8.0
         */
        protected function resolve_oauth()
        {
        }
        /**
         * The freight platform rejects a request without x-client-id, with a 403 Invalid Client.
         *
         * Only the extra header is declared here; the token fetch, its failure handling and every
         * other header stay with the parent, so a header added there reaches freight too.
         *
         * @param string $access_token Bearer token for the freight connection.
         *
         * @return array
         *
         * @since 4.8.0
         */
        protected function get_request_headers($access_token)
        {
        }
        /**
         * The LTL API's rateRequestType enum has no PREFERRED value, so only the store's configured
         * rate type is asked for.
         *
         * Everything else the parent builds already resolves correctly for freight: the account is
         * the freight account via resolve_account_number(), and PickupType and carrierCodes are
         * gated on a request type of 'freight' never matching them.
         *
         * @return array
         *
         * @since 4.8.0
         */
        protected function get_rate_request_types()
        {
        }
        /**
         * The freight platform throttles at 1400 transactions per 10 seconds with a 429.
         *
         * Retried like 503 is elsewhere; without it a throttled burst silently drops freight from
         * the calculation. The wait follows the platform's Retry-After when it sends one, capped by
         * the transport's retry budget so a throttle cannot stall a checkout.
         *
         * @return int[]
         *
         * @since 4.8.0
         */
        protected function get_retryable_rate_codes()
        {
        }
        /**
         * Name the platform-specific causes the raw freight status lines leave out.
         *
         * A 403 is the shape the spinoff produced: OAuth can succeed while every rate request is
         * refused, so the log must say what to check instead of echoing the raw status line.
         *
         * @param int $code HTTP status code.
         *
         * @return string
         *
         * @since 4.8.0
         */
        protected function get_failure_hint($code)
        {
        }
        /**
         * Rate endpoint path — the FedEx Freight LTL Get Rate Quote path.
         *
         * @param string $request_type Request type.
         *
         * @return string
         *
         * @since 4.8.0
         */
        protected function get_rate_endpoint($request_type)
        {
        }
        /**
         * The freight payload can nest `output` one level deeper than the parcel Rate API.
         *
         * The live LTL API returns `output.rateReplyDetails`, the published example
         * `output.output.rateReplyDetails`. Only the location differs here — dropping unpriced
         * entries is the base class's job, and applies to every request type.
         *
         * @param object $response_body Decoded response body.
         *
         * @return mixed The raw rate reply details, or null when absent.
         *
         * @since 4.8.0
         */
        protected function locate_rate_reply_details($response_body)
        {
        }
    }
    /**
     * Class Logger
     *
     * Handles logging functionality for the SandboxLogger.
     */
    class Logger
    {
        /**
         * Fix linebreaks in log messages.
         *
         * @param string $message The original log message.
         * @return string The formatted log entry.
         */
        private static function format_linebreaks(string $message): string
        {
        }
        /**
         * Get the FedEx shipping method instance.
         *
         * @param string $method The shipping method identifier.
         *
         * @return \WC_Shipping_Fedex|false The FedEx shipping method instance or false if not found.
         */
        private static function get_shipping_method(string $method = 'fedex')
        {
        }
        /**
         * Logs a message with the specified level.
         *
         * @param string $level   Log level.
         * @param string $message Message to log.
         * @param array  $context Log context.
         *
         * @return void
         */
        public static function log(string $level, string $message, array $context = array())
        {
        }
        /**
         * Adds an emergency level message.
         *
         * System is unusable.
         *
         * @see WC_Logger::log
         *
         * @param string $message Message to log.
         * @param array  $context Log context.
         */
        public static function emergency(string $message, array $context = array())
        {
        }
        /**
         * Adds an alert level message.
         *
         * Action must be taken immediately.
         * Example: Entire website down, database unavailable, etc.
         *
         * @see WC_Logger::log
         *
         * @param string $message Message to log.
         * @param array  $context Log context.
         */
        public static function alert(string $message, array $context = array())
        {
        }
        /**
         * Adds a critical level message.
         *
         * Critical conditions.
         * Example: Application component unavailable, unexpected exception.
         *
         * @see WC_Logger::log
         *
         * @param string $message Message to log.
         * @param array  $context Log context.
         */
        public static function critical(string $message, array $context = array())
        {
        }
        /**
         * Adds an error level message.
         *
         * Runtime errors that do not require immediate action but should typically be logged
         * and monitored.
         *
         * @see WC_Logger::log
         *
         * @param string $message Message to log.
         * @param array  $context Log context.
         */
        public static function error(string $message, array $context = array())
        {
        }
        /**
         * Adds a warning level message.
         *
         * Exceptional occurrences that are not errors.
         *
         * Example: Use of deprecated APIs, poor use of an API, undesirable things that are not
         * necessarily wrong.
         *
         * @see WC_Logger::log
         *
         * @param string $message Message to log.
         * @param array  $context Log context.
         */
        public static function warning(string $message, array $context = array())
        {
        }
        /**
         * Adds a notice level message.
         *
         * Normal but significant events.
         *
         * @see WC_Logger::log
         *
         * @param string $message Message to log.
         * @param array  $context Log context.
         */
        public static function notice(string $message, array $context = array())
        {
        }
        /**
         * Adds an info level message.
         *
         * Interesting events.
         * Example: User logs in, SQL logs.
         *
         * @see WC_Logger::log
         *
         * @param string $message Message to log.
         * @param array  $context Log context.
         */
        public static function info(string $message, array $context = array())
        {
        }
        /**
         * Adds a debug level message.
         *
         * Detailed debug information.
         *
         * @see WC_Logger::log
         *
         * @param string $message Message to log.
         * @param array  $context Log context.
         */
        public static function debug(string $message, array $context = array())
        {
        }
    }
}
namespace {
    /**
     * Map freight classes to shipping classes
     */
    class WC_Fedex_Freight_Mapping
    {
        /**
         * Freight shipping classes list.
         *
         * @var array
         */
        public $classes;
        /**
         * Freight class key.
         *
         * @var string
         */
        public $fedex_freight_class;
        /**
         * Freight class name.
         *
         * @var string
         */
        public $display_fedex_freight_class;
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Change shipping classes data.
         *
         * @param array $classes Shipping classes.
         *
         * @return array
         */
        public function get_shipping_classes($classes)
        {
        }
        /**
         * Change columns on shipping clases screen.
         *
         * @param array $columns Shipping class columns.
         *
         * @return array
         */
        public function add_shipping_class_column($columns)
        {
        }
        /**
         * Output html for column.
         */
        public function display_freight_class_column()
        {
        }
        /**
         * Save class during ajax save event.
         *
         * @param mixed $term_id Term ID.
         * @param array $data Shipping class data.
         */
        public function save_shipping_class($term_id, $data)
        {
        }
    }
    /**
     * Privacy handler class.
     */
    class WC_Fedex_Privacy extends \WC_Abstract_Privacy
    {
        /**
         * Constructor.
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
     * Admin handler.
     */
    class WC_Shipping_Fedex_Admin
    {
        const META_KEY_LIFTGATE_DELIVERY = '_shipping-fedex-liftgate-delivery';
        const META_KEY_LIFTGATE_PICKUP = '_shipping-fedex-liftgate-pickup';
        /**
         * WC_Shipping_Fedex_Admin constructor.
         */
        public function __construct()
        {
        }
        /**
         * Add options to Shipping panel.
         *
         * @return void
         */
        public function product_options()
        {
        }
        /**
         * Add options to variation.
         *
         * @param int     $loop           Number.
         * @param array   $variation_data Variation data.
         * @param WP_Post $variation      WP_Post object.
         *
         * @return void
         */
        public function variation_options($loop, array $variation_data, \WP_Post $variation)
        {
        }
        /**
         * Save custom fields
         *
         * @param int $post_id WP Post ID.
         *
         * @return void
         */
        public function process_product_meta($post_id)
        {
        }
        /**
         * Save custom fields
         *
         * @param int $post_id WP Post ID.
         * @param int $loop Number.
         *
         * @return void
         */
        public function process_product_variation_meta($post_id, $loop)
        {
        }
    }
}
namespace WooCommerce\FedEx {
    trait Util
    {
        /**
         * Helper method to check whether given zone_id has fedex method instance.
         *
         * @param int $zone_id Zone ID.
         *
         * @return bool True if given zone_id has fedex method instance
         * @since 4.4.0
         */
        public function is_zone_has_fedex($zone_id)
        {
        }
        /**
         * Helper method to check whether given country uses the postcode or not.
         *
         * @param string $country_code Country code.
         *
         * @return bool True if given country uses the postcode.
         * @since 3.9.5
         */
        public function country_uses_postcode($country_code)
        {
        }
        /**
         * Helper method to check if the destination country don't use the postcode, will return fake one.
         *
         * @param array $package Shipping package.
         *
         * @return string Destination postcode.
         * @since 3.9.5
         */
        public function get_shipping_postcode($package)
        {
        }
        /**
         * Helper method to get WooCommerce base country.
         *
         * @return string Base country or empty string.
         * @since 4.1.0
         */
        public function get_base_country()
        {
        }
    }
}
namespace {
    /**
     * Main plugin class.
     */
    class WC_Shipping_Fedex_Init
    {
        use \WooCommerce\FedEx\Util;
        /**
         * Plugin's version.
         *
         * @var string
         * @since 3.4.0
         */
        public $version;
        /**
         * Class instance.
         *
         * @var object
         */
        private static $instance;
        /**
         * WC_Admin_Notices name for the freight credentials notice.
         *
         * Public surface: this composes the dismissal hook
         * `woocommerce_hide_fedex_freight_credentials_notice` and the storage option
         * `woocommerce_admin_notice_fedex_freight_credentials`. Renaming it strands both.
         *
         * @var string
         * @since 4.8.1
         */
        const FREIGHT_NOTICE_NAME = 'fedex_freight_credentials';
        /**
         * Option recording that the freight credentials signals are currently out.
         *
         * Lets the evaluator touch the Notes API only on transitions rather than on every admin
         * page load, since each note call costs a database query. It is also what the teardown keys
         * off, so it is written whenever the signals go out — see FREIGHT_SIGNALS_STATE_NOTICE_ONLY
         * for the case where only one of the two made it.
         *
         * @var string
         * @since 4.8.1
         */
        const FREIGHT_SIGNALS_ACTIVE_OPTION = 'woocommerce_fedex_freight_signals_active';
        /**
         * FREIGHT_SIGNALS_ACTIVE_OPTION value meaning both signals are in place.
         *
         * @var string
         * @since 4.8.1
         */
        const FREIGHT_SIGNALS_STATE_ACTIVE = 'yes';
        /**
         * FREIGHT_SIGNALS_ACTIVE_OPTION value meaning the notice is out but the inbox note is not.
         *
         * The Notes API can be unavailable at the moment the signals go out. Recording that separately
         * keeps the teardown working — it only needs to know the signals are out at all — while still
         * letting the next admin_init retry the note.
         *
         * @var string
         * @since 4.8.1
         */
        const FREIGHT_SIGNALS_STATE_NOTICE_ONLY = 'notice-only';
        /**
         * The 4.8.0 dismissal flag, migrated to FREIGHT_NOTICE_DISMISSED_AT_OPTION and then deleted.
         *
         * @var string
         * @since 4.8.1
         */
        const FREIGHT_LEGACY_DISMISSED_OPTION = 'woocommerce_fedex_dismissed_freight_credentials_notice';
        /**
         * Option holding the timestamp of the last freight notice dismissal.
         *
         * @var string
         * @since 4.8.1
         */
        const FREIGHT_NOTICE_DISMISSED_AT_OPTION = 'woocommerce_fedex_freight_credentials_notice_dismissed_at';
        /**
         * Get the class instance.
         */
        public static function get_instance()
        {
        }
        /**
         * Initialize the plugin's public actions.
         */
        public function __construct()
        {
        }
        /**
         * Initialize WordPress Abilities API definitions.
         *
         * @return void
         */
        private function init_abilities()
        {
        }
        /**
         * Load the freight credentials inbox note class.
         *
         * WC Admin can be disabled, in which case the Notes API is absent and the admin notice is
         * the only signal. There is no autoloader for plugin classes, so this require is the only
         * thing that makes the class exist.
         *
         * @return bool Whether the note class is available.
         *
         * @since 4.8.1
         */
        private function load_freight_credentials_note()
        {
        }
        /**
         * URL of the plugin-wide FedEx settings screen.
         *
         * The section=fedex query arg is required: the freight credential fields live on the
         * plugin-wide FedEx screen, not the shipping zones list, and both freight signals exist to
         * send merchants there.
         *
         * @return string
         *
         * @since 4.8.1
         */
        public static function get_freight_settings_url(): string
        {
        }
        /**
         * Environment check function.
         */
        public function environment_check()
        {
        }
        /**
         * Enqueue admin scripts.
         *
         * @return void
         * @version 3.4.0
         * @since   3.4.0
         */
        public function enqueue_admin_scripts()
        {
        }
        /**
         * Load includes.
         *
         * @return void
         * @version 3.4.0
         * @since   3.4.0
         */
        public function includes()
        {
        }
        /**
         * Add Fedex shipping method to WC.
         *
         * @param mixed $methods Shipping methods.
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
         * @param array $links Plugin action links.
         *
         * @return array Plugin action links.
         * @version 3.4.9
         */
        public function plugin_links($links)
        {
        }
        /**
         * WooCommerce not installed notice.
         */
        public function wc_deactivated()
        {
        }
        /**
         * See if we need to install any upgrades
         * and call the install.
         *
         * @version 3.4.0
         * @since   3.4.0
         */
        public function maybe_install()
        {
        }
        /**
         * Update/migration script.
         *
         * @since   3.4.0
         * @version 3.4.0
         */
        public function install()
        {
        }
        /**
         * Show the user a notice for plugin updates.
         *
         * @since 3.4.0
         */
        public function upgrade_notice()
        {
        }
        /**
         * Turn of the dismissible upgrade notice.
         *
         * @since 3.4.0
         */
        public function dismiss_upgrade_notice()
        {
        }
        /**
         * One-time migration: FedEx retired the SOAP (Web Services) API on 2026-06-01.
         * Force any store still on `api_type = soap` onto REST and flag a notice.
         *
         * @return void
         */
        public function maybe_migrate_soap()
        {
        }
        /**
         * Show the one-time notice after a SOAP store is migrated to REST.
         *
         * @return void
         */
        public function soap_retired_notice()
        {
        }
        /**
         * Dismiss the SOAP-retired notice.
         *
         * @return void
         */
        public function dismiss_soap_retired_notice()
        {
        }
        /**
         * Whether freight is enabled but the FedEx Freight credentials are missing.
         *
         * Freight is configured on the plugin-wide FedEx settings screen, not per shipping zone —
         * its fields live in `form_fields`, not `instance_form_fields`, so they are stored in
         * `woocommerce_fedex_settings` and read from there by `WC_Shipping_Method::get_option()`.
         *
         * @return bool
         *
         * @since 4.8.0
         */
        private function has_freight_without_credentials()
        {
        }
        /**
         * Names of the shipping zones where a FedEx instance has a freight service enabled.
         *
         * The rate path only asks the freight platform for rates when a freight service is enabled
         * on the instance, so the credentials signals must stay quiet for stores that never request
         * one.
         *
         * Every code in data-freight-services.php counts, including the INTERNATIONAL_ ones. The
         * platform is chosen by destination, not by service: calculate_shipping() sends US, CA and
         * PR to the LTL platform and everything else to the parcel endpoint, so a store offering
         * only INTERNATIONAL_PRIORITY_FREIGHT still needs freight credentials the moment it quotes
         * a US address. Narrowing this list by service code would leave that store unwarned while
         * its freight requests were skipped.
         *
         * The list is therefore "zones with a freight service enabled", not "zones that are broken":
         * a zone whose locations can never match US, CA or PR routes to the parcel endpoint as an
         * 'international_freight' request and is unaffected, but it is still listed here. Zone
         * locations are not consulted on purpose — over-listing costs a merchant nothing, whereas any
         * hole in that logic would silently leave a genuinely broken store unwarned, which is the
         * failure this whole signal exists to prevent. The message is worded to match: it names where
         * freight is enabled, and states the lost destinations separately.
         *
         * Reads through the shipping-zone data store rather than WC_Shipping_Zones::get_zones().
         * That helper resolves every method in every zone into an object, and
         * WC_Shipping_Zone::get_shipping_methods() then calls get_admin_options_html() on each one
         * declaring 'instance-settings-modal' — core's flat rate, free shipping and local pickup all
         * do — so it would build and discard their entire settings markup on every admin screen. The
         * 'json' context does not help: that markup is built before the context is consulted.
         *
         * WC_Data_Store::load( 'shipping-zone' ) exposes the two reads underneath that helper —
         * get_zones() and get_methods(), both on WC_Shipping_Zone_Data_Store_Interface — which return
         * raw rows and instantiate nothing. The cost is one query per zone rather than one overall,
         * paid only on stores that already have freight enabled with no credentials.
         *
         * @return array List of zone names. Empty when no zone offers a freight service.
         *
         * @since 4.8.0
         */
        private function get_freight_enabled_zone_names()
        {
        }
        /**
         * Whether a FedEx method instance offers at least one freight service.
         *
         * @param int   $instance_id      Shipping method instance ID.
         * @param array $freight_services Service codes from data-freight-services.php.
         *
         * @return bool
         *
         * @since 4.8.1
         */
        private function instance_has_freight_service($instance_id, array $freight_services)
        {
        }
        /**
         * Format zone names for display in the credentials message.
         *
         * Capped so a store with a dozen freight-enabled zones does not get an unreadable banner.
         *
         * @param array $zone_names Zone names from get_freight_enabled_zone_names().
         *
         * @return string
         *
         * @since 4.8.1
         */
        private function format_freight_zone_names(array $zone_names)
        {
        }
        /**
         * Keep the freight credentials signals in step with the store's configuration.
         *
         * Runs on admin_init, which is after WooCommerce saves settings on wp_loaded
         * (WC_Admin_Menus::save_settings()). The first evaluation after a save therefore already
         * sees the new credentials, which is what clears both signals without a save hook.
         *
         * @return void
         *
         * @since 4.8.1
         */
        public function sync_freight_credentials_signals()
        {
        }
        /**
         * Remove both freight signals and the state that drives them.
         *
         * Keyed on FREIGHT_SIGNALS_ACTIVE_OPTION being set at all, not on it recording that the inbox
         * note was placed. The notice is added whenever the store is affected, while the note is
         * best-effort — add_freight_credentials_note() returns false whenever the Notes API is
         * unavailable — so a teardown gated on the note having succeeded left the banner permanently
         * out, telling a merchant with working credentials that their freight rates had stopped.
         *
         * The notice is checked independently of the option rather than trusted to follow it, so a
         * banner that is out with no matching state — a hand-edited option, a half-applied upgrade —
         * still gets cleared instead of stranding. has_notice() reads WC_Admin_Notices' in-memory
         * cache, so the extra check is free.
         *
         * Every call below is a no-op when the corresponding state is already absent, and the guard
         * means an unaffected store pays one cached option read per admin request.
         *
         * @return void
         *
         * @since 4.8.1
         */
        private function clear_freight_credentials_signals()
        {
        }
        /**
         * Add the credentials notice unless it is inside its dismissal cooldown.
         *
         * @param array $zone_names Affected zone names.
         *
         * @return void
         *
         * @since 4.8.1
         */
        private function maybe_add_freight_credentials_notice(array $zone_names)
        {
        }
        /**
         * Build the credentials notice content.
         *
         * WooCommerce wraps custom notices in `<div id="message" class="updated woocommerce-message">`
         * — a success style, with no type parameter and no per-notice hook for CSS. The bold lead-in
         * and the warning dashicon are what carry the urgency the green chrome does not.
         *
         * @param array $zone_names Affected zone names.
         *
         * @return string
         *
         * @since 4.8.1
         */
        private function get_freight_credentials_notice_html(array $zone_names)
        {
        }
        /**
         * Add the freight credentials inbox note, if WC Admin is available.
         *
         * The caller only records the freight signals as active when this returns true. If the Notes
         * API is unavailable or the add call throws, the signal is left inactive so the next
         * admin_init retries — otherwise a one-off failure (WC Admin disabled at that moment, a
         * partial WC upgrade, a transient DB error) would permanently lose the inbox note with no
         * further retry, since the transition only happens once.
         *
         * @return bool True when the note was added or already exists. False when the Notes API is
         *              unavailable or the add call threw.
         *
         * @since 4.8.1
         */
        private function add_freight_credentials_note()
        {
        }
        /**
         * Delete the freight credentials inbox note.
         *
         * Deleted rather than actioned on purpose: NoteTraits::possibly_add_note() refuses to re-add
         * a note whose name still exists, so removing the row is what lets the note come back if the
         * credentials are ever cleared again.
         *
         * @return void
         *
         * @since 4.8.1
         */
        private function delete_freight_credentials_note()
        {
        }
        /**
         * Clear this branch's freight credentials signals on plugin deactivation.
         *
         * Under 4.8.0 the freight warning was a plain admin_notices callback, so deactivating the
         * plugin removed it instantly. The WC_Admin_Notices custom notice, the WC Admin inbox note,
         * and the two flag options this branch introduced all outlive deactivation unless cleared
         * here — left alone, a merchant who deactivates or deletes the plugin keeps seeing a FedEx
         * warning whose action button points at a settings section that no longer exists.
         *
         * @return void
         *
         * @since 4.8.1
         */
        public function deactivate()
        {
        }
        /**
         * Record when the merchant dismissed the freight credentials notice.
         *
         * The timestamp starts the cooldown after which the notice comes back, so a single dismissal
         * cannot leave a store permanently unwarned while its LTL rates are still failing.
         *
         * @return void
         *
         * @since 4.8.1
         */
        public function record_freight_notice_dismissal()
        {
        }
        /**
         * Carry the 4.8.0 dismissal flag over to the cooldown.
         *
         * Runs lazily from the evaluator rather than from an upgrade routine. install() is
         * unreachable on live installs — maybe_install() gates it on wc_fedex_version < 3.4.0 — so
         * a migration appended there would look correct in review and on a fresh wp-env while
         * running on zero real sites.
         *
         * Seeded to now rather than to the original dismissal time, which was never recorded: a
         * merchant who already dismissed the 4.8.0 notice gets a fresh quiet window instead of a
         * banner the moment they upgrade.
         *
         * Only seeded on a store the signals actually apply to. A 4.8.0 dismissal on a store whose
         * freight credentials are fine says nothing about the future, and turning it into a cooldown
         * there would silence the banner for 30 days if that store later lost its credentials — the
         * exact failure this branch exists to remove. The flag is still deleted either way, so the
         * migration stays one-shot.
         *
         * @param bool $is_affected Whether the store currently needs the freight signals.
         *
         * @return void
         *
         * @since 4.8.1
         */
        private function migrate_legacy_freight_notice_dismissal($is_affected)
        {
        }
        /**
         * Dismiss the freight credentials notice.
         *
         * @deprecated 4.8.1 The notice is a WC_Admin_Notices custom notice, dismissed through
         *                   WooCommerce's own handler. Kept for one release so a stale admin page
         *                   whose 4.8.0 inline script still fires does not error. Remove in 4.9.0.
         *
         * @return void
         *
         * @since 4.8.0
         */
        public function dismiss_freight_credentials_notice()
        {
        }
    }
    /**
     * WC_Shipping_Fedex class.
     */
    class WC_Shipping_Fedex extends \WC_Shipping_Method
    {
        /**
         * Cached in place of a rate response when FedEx answered 200 with no rates.
         *
         * Distinct from a cached success so the two are never confused on read, and short-lived so
         * a destination that starts rating is picked up quickly.
         *
         * @var string
         *
         * @since 4.8.0
         */
        const NO_RATES_MARKER = 'fedex_no_rates';
        use \WooCommerce\FedEx\Util;
        /**
         * Pre-defined Fedex boxes.
         *
         * @var array
         */
        public $default_boxes;
        /**
         * Rates found.
         *
         * @var array
         */
        private $found_rates;
        /**
         * Pre-defined services.
         *
         * @var array
         */
        public $services;
        /**
         * FedEx API type.
         *
         * Always 'rest'. Retained for the Logger source string and backward compatibility
         * (the legacy SOAP API was retired by FedEx on 2026-06-01 and removed from the plugin).
         *
         * @var string
         */
        public $api_type;
        /**
         * FedEx OAuth instance.
         *
         * @var string
         */
        private $client_id = '';
        /**
         * FedEx API client secret.
         *
         * @var string
         */
        private $client_secret = '';
        /**
         * FedEx Freight API client ID (from developer.fedexfreight.com; separate from the parcel API key).
         *
         * @var string
         */
        private $freight_client_id = '';
        /**
         * FedEx Freight API client secret (separate from the parcel API secret).
         *
         * @var string
         */
        private $freight_client_secret = '';
        /**
         * Whether the FedEx Freight credentials are a production key (independent of the parcel environment).
         *
         * @var bool
         */
        private $freight_production = \false;
        /**
         * FedEx Account Number
         *
         * @var string
         */
        private $account_number;
        /**
         * FedEx OAuth instance.
         *
         * @var \WooCommerce\FedEx\FedEx_OAuth
         */
        public $fedex_oauth;
        /**
         * FedEx Freight OAuth instance.
         *
         * @var \WooCommerce\FedEx\FedEx_Freight_OAuth
         *
         * @since 4.8.0
         */
        public $fedex_freight_oauth;
        /**
         * FedEx API instance.
         *
         * @var \WooCommerce\FedEx\Abstract_FedEx_API
         */
        private $fedex_api;
        /**
         * FedEx Freight LTL rate API instance. Null until the first freight rate request
         * builds it — see get_api().
         *
         * @var \WooCommerce\FedEx\FedEx_Freight_REST_API|null
         */
        private $fedex_freight_api = \null;
        /**
         * Is production key.
         *
         * @var bool
         */
        private $production;
        /**
         * Is Shipper Address Residential.
         *
         * @var bool
         */
        private $residential;
        /**
         * Request Type.
         *
         * @var string
         */
        private $request_type;
        /**
         * Shipper postal code.
         *
         * @var string
         */
        private $origin;
        /**
         * User set variable.
         *
         * @var string
         */
        public $title;
        /**
         * Debug on/off.
         *
         * @var bool
         */
        public $debug;
        /**
         * API mode test|production.
         *
         * @var string
         */
        public $api_mode;
        /**
         * Packing method.
         *
         * @var string
         */
        private $packing_method;
        /**
         * Box dimensions.
         *
         * @var array
         */
        public $boxes;
        /**
         * Request Type.
         *
         * @var array
         */
        public $custom_services;
        /**
         * Check if freight is enabled.
         *
         * @var bool
         */
        private $freight_enabled;
        /**
         * List of FedEx Ground services.
         *
         * @var array
         */
        private $ground_services;
        /**
         * List of FedEx SmartPost services.
         *
         * @var array
         */
        private $smartpost_services;
        /**
         * List of FedEx Fright services.
         *
         * @var array
         */
        private $freight_services;
        /**
         * Check if fedex one rate.
         *
         * @var bool
         */
        public $fedex_one_rate;
        /**
         * Freight class.
         *
         * @var string
         */
        private $freight_class;
        /**
         * Freight number, if not found uses account number as default.
         *
         * @var string
         */
        private $freight_number;
        /**
         * Billing street address for freight.
         *
         * @var string
         */
        private $freight_billing_street;
        /**
         * Additional billing street details.
         *
         * @var string
         */
        private $freight_billing_street_2;
        /**
         * City name associated with billing address for freight.
         *
         * @var string
         */
        private $freight_billing_city;
        /**
         * State or province associated with billing address for freight.
         *
         * @var string
         */
        private $freight_billing_state;
        /**
         * Postal or ZIP code associated with billing address for freight.
         *
         * @var string
         */
        private $freight_billing_postcode;
        /**
         *  Country of billing address for freight.
         *
         * @var string
         */
        private $freight_billing_country;
        /**
         * Street address of shipper in a freight shipment.
         *
         * @var string
         */
        private $freight_shipper_street;
        /**
         * Additional shipper street details.
         *
         * @var string
         */
        private $freight_shipper_street_2;
        /**
         * City.of shipper in a freight shipment
         *
         * @var string
         */
        private $freight_shipper_city;
        /**
         * State or province of freight shipper.
         *
         * @var string
         */
        private $freight_shipper_state;
        /**
         * Postal or ZIP code of freight shipper.
         *
         * @var string
         */
        private $freight_shipper_postcode;
        /**
         * Country of shipper for freight.
         *
         * @var string
         */
        private $freight_shipper_country;
        /**
         * Origin country code.
         *
         * @var string
         */
        private $origin_country;
        /**
         * .
         *
         * @var string
         */
        private $smartpost_hub;
        /**
         * If insured.
         *
         * @var bool
         */
        private $insure_contents;
        /**
         * Represents the option for offering rates.
         *
         * @var string
         */
        private $offer_rates;
        /**
         * Contains package IDs eligible for FedEx One Rate shipping.
         *
         * @var array
         */
        private $fedex_one_rate_package_ids;
        /**
         * Is shipper residential.
         *
         * @var bool
         */
        private $freight_shipper_residential;
        /**
         * .
         *
         * @var bool
         */
        private $package;
        /**
         * Sets the box packer library to use.
         *
         * @var string
         */
        public $box_packer_library;
        /**
         * Class constructor.
         *
         * @param int $instance_id Shipping instance ID.
         */
        public function __construct($instance_id = 0)
        {
        }
        /**
         * Bypass shipping rates cache.
         *
         * @param bool $value woocommerce_shipping_debug_mode value.
         *
         * @return string
         */
        public function maybe_bypass_shipping_cache($value)
        {
        }
        /**
         * Check if the shipping method can be available for current package.
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
         * @return void
         * @since   3.4.0
         * @version 3.4.0
         */
        private function set_settings()
        {
        }
        /**
         * Process settings on save
         *
         * @return void
         * @version 3.4.0
         * @since   3.4.0
         */
        public function process_admin_options()
        {
        }
        /**
         * Get option value from $_POST.
         *
         * @param mixed  $value Option value.
         * @param string $key  Option key.
         *
         * @return mixed
         * @since 4.4.0
         */
        public function get_updated_option($value, $key)
        {
        }
        /**
         * Output a message or error
         *
         * @param string $message Notification message.
         * @param string $type Notification type (success, notice, error).
         * @param bool   $is_user_notification Flag allowing to show notification for customer even if debug mode is not activated.
         */
        public function notify($message, $type = 'notice', $is_user_notification = \false)
        {
        }
        /**
         * Add debug information in the cart/checkout page using JS.
         */
        private function add_debug_script()
        {
        }
        /**
         * Initiate setting fields.
         */
        public function init_form_fields()
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
         * HTML for freight_oauth_status option.
         *
         * @param string $key  Option key.
         * @param array  $data Option data.
         *
         * @return string HTML for freight_oauth_status option.
         *
         * @since 4.8.0
         */
        public function generate_freight_oauth_status_html($key, $data)
        {
        }
        /**
         * Render the shared OAuth status template for a given connection.
         *
         * @param string $key    Option key.
         * @param array  $data   Option data.
         * @param array  $status Connection status: 'template', 'row_id', 'connection_label', 'has_credentials', 'is_authenticated', 'failure_hint'.
         *
         * @return string HTML for the status row.
         *
         * @since 4.8.0
         */
        private function render_oauth_status_html($key, $data, $status)
        {
        }
        /**
         * Generate HTML for service fields.
         */
        public function generate_services_html()
        {
        }
        /**
         * Generate HTML for box packing fields.
         */
        public function generate_box_packing_html()
        {
        }
        /**
         * Validate the box packing field.
         *
         * @param mixed $key Field key.
         */
        public function validate_box_packing_field($key)
        {
        }
        /**
         * Validate service field.
         *
         * @param mixed $key Field key.
         */
        public function validate_services_field($key)
        {
        }
        /**
         * Get packages.
         *
         * Divide the WC package into packages/parcels suitable for a FEDEX quote.
         *
         * @param array $package Package to ship.
         *
         * @return array Package to ship.
         */
        public function get_fedex_packages($package)
        {
        }
        /**
         * Get the freight class.
         *
         * @param int $shipping_class_id Shipping class ID.
         *
         * @return string
         */
        public function get_freight_class($shipping_class_id)
        {
        }
        /**
         * If the box packer library option is not yet set and there are existing
         * FedEx shipping method instances, we can assume that this is not a
         * new/fresh installation of the FedEx plugin,
         * so we should default to 'original'
         *
         * If the box packer library option is not set and there are no
         * FedEx shipping method instances, then this is likely a new
         * installation of the FedEx plugin,
         * so we should default to 'dvdoug'
         *
         * @return string
         */
        public function get_default_box_packer_library(): string
        {
        }
        /**
         * Pack items individually.
         *
         * @param mixed $package Package to ship.
         *
         * @return array
         */
        private function per_item_shipping($package)
        {
        }
        /**
         * Pack into boxes with weights and dimensions.
         *
         * @param mixed $package Package to ship.
         *
         * @return array
         */
        private function box_shipping($package)
        {
        }
        /**
         * Package count validation when calculate shipping.
         *
         * @param array $fedex_package FedEx package.
         *
         * @return bool
         */
        public function package_count_validation($fedex_package)
        {
        }
        /**
         * Make API call to see if address is residential and update residential property.
         *
         * @param array $package Cart package.
         *
         * @return void
         */
        public function residential_address_validation($package)
        {
        }
        /**
         * Add Special Service to API request.
         *
         * @param array  $request FedEx API request.
         * @param string $service Service name.
         *
         * @return array
         * @since   3.4.43
         *
         * @version 3.4.43
         */
        private function add_special_service($request, $service)
        {
        }
        /**
         * MAybe add FedEx Liftgate service.
         *
         * @param array $package shipping package.
         * @param array $request FedEx request.
         *
         * @return array
         * @since   3.4.43
         *
         * @version 3.4.43
         */
        private function maybe_add_liftgate_service($package, $request)
        {
        }
        /**
         * Get the country code FedEx should see for a package destination.
         *
         * The Virgin Islands reach us either as country VI or as country US with state VI,
         * and FedEx only recognises the former. Resolving both to VI in one place keeps the
         * address we send and the endpoint we route to in agreement.
         *
         * @param array $package Cart package.
         *
         * @return string Two letter country code.
         */
        private function get_destination_country($package)
        {
        }
        /**
         * Get Fedex API request.
         *
         * @param mixed  $package Cart package.
         * @param string $request_type Request type.
         *
         * @return array
         * @version 3.4.9
         */
        private function get_fedex_api_request($package, $request_type)
        {
        }
        /**
         * Get Fedex request.
         *
         * @param array  $fedex_packages Array of packages to ship.
         * @param array  $package        array the package passed from WooCommerce.
         * @param string $request_type   Used if making a certain type of request i.e. freight, smartpost.
         *
         * @return array
         */
        private function get_fedex_requests($fedex_packages, $package, $request_type = '')
        {
        }
        /**
         * Undocumented function
         *
         * @param  array  $requests     Requests.
         * @param  string $request_type Shipping service type.
         *
         * @return array
         * @since 4.4.0
         */
        private function get_chunks($requests, $request_type)
        {
        }
        /**
         * Calculate shipping cost.
         *
         * @param mixed $package Package to ship.
         *
         * @version 3.4.9
         *
         * @since   1.0.0
         */
        public function calculate_shipping($package = array())
        {
        }
        /**
         * Check if is cart or checkout screen.
         *
         * @return bool
         */
        private function is_cart_or_shipping()
        {
        }
        /**
         * Run product validation process on cart or checkout screen.
         *
         * @return void
         */
        public function maybe_validate_products()
        {
        }
        /**
         * Check if product has dimensions and weight. Display notification errors and modify woocommerce_cart_no_shipping_available_html.
         *
         * @param  array $package Shipping package.
         *
         * @return bool
         */
        private function validate_products($package)
        {
        }
        /**
         * No need to calculate the rates if there is any warning or error on cart/checkout page.
         *
         * @param array $errors Error texts.
         * @param array $package Cart package.
         */
        private function cant_calculate_shipping_rates_notification_init($errors, $package)
        {
        }
        /**
         * Return Notification markup.
         *
         * @param string $original_html Original HTML.
         * @param array  $errors List or error messages.
         * @param array  $package Shipping package.
         * @param string $location Location (cart or checkout).
         *
         * @return string
         */
        public function cant_calculate_shipping_rates_notification($original_html, $errors, $package, $location)
        {
        }
        /**
         * Run requests and get/parse results
         *
         * @param array|false $requests Request.
         * @param string      $request_type Shipping service type.
         */
        public function run_package_request($requests, $request_type = 'default')
        {
        }
        /**
         * Get the API client for a request type.
         *
         * Freight (LTL) rating runs against the separate FedEx Freight platform; everything
         * else uses the parcel REST client. The freight client is built on first use because
         * constructing it requests a freight OAuth token, and only a freight rate request
         * reaches this method with 'freight'.
         *
         * @param string $request_type API request type.
         *
         * @return \WooCommerce\FedEx\Abstract_FedEx_API
         *
         * @since 4.8.0
         */
        private function get_api($request_type)
        {
        }
        /**
         * Get API results.
         *
         * @param mixed  $request API request.
         * @param string $request_type API request type.
         *
         * @return array|false
         */
        private function get_result($request, $request_type = '')
        {
        }
        /**
         * Process API result.
         *
         * @param array  $request      Request.
         * @param mixed  $result       Result.
         * @param string $request_type Shipping service type.
         *
         * @return void
         */
        private function process_result($request, $result = '', $request_type = '')
        {
        }
        /**
         * Prepare rate.
         *
         * @param mixed  $rate_code    Rate code.
         * @param mixed  $rate_id      Rate ID.
         * @param mixed  $rate_name    Rate name.
         * @param mixed  $rate_cost    Cost.
         * @param mixed  $currency     Currency.
         * @param mixed  $details      XML details.
         * @param string $request_type Request type.
         */
        public function prepare_rate($rate_code, $rate_id, $rate_name, $rate_cost, $currency, $details, $request_type)
        {
        }
        /**
         * Get meta data string for the shipping rate.
         *
         * @param array $params Meta data info to join.
         *
         * @return string Rate meta data.
         * @since   3.4.9
         * @version 3.4.9
         */
        private function get_rate_meta_data($params)
        {
        }
        /**
         * Add found rates to WooCommerce
         */
        public function add_found_rates()
        {
        }
        /**
         * Determine if the current shipping is to be done internationally
         *
         * @return bool
         */
        public function is_shipping_internationally()
        {
        }
        /**
         * Check if any Ground service is enabled.
         *
         * @return bool
         */
        public function is_ground_service_enabled()
        {
        }
        /**
         * Check if any SmartPost service is enabled.
         *
         * @return bool
         */
        public function is_smartpost_service_enabled()
        {
        }
        /**
         * Check if any Freight service is enabled.
         *
         * @return bool
         */
        public function is_freight_service_enabled()
        {
        }
        /**
         * Log context tagged with the environment the given request type actually runs against.
         *
         * Logger::log() otherwise fills in the parcel environment, so with parcel on production and
         * freight on sandbox a freight request line and its response land in different log files.
         * Mirrors FedEx_REST_API::log_context(), which covers the calls made inside the client.
         *
         * @param string $request_type API request type.
         * @param array  $context      Existing log context.
         *
         * @return array
         *
         * @since 4.8.0
         */
        private function log_context($request_type, $context = array())
        {
        }
        /**
         * Check whether credentials for the separate FedEx Freight platform are configured.
         *
         * Stores that rated LTL before the spinoff have none of these yet, so every freight
         * code path has to tolerate their absence rather than assume a token can be issued.
         *
         * @return bool
         *
         * @since 4.8.0
         */
        public function has_freight_credentials()
        {
        }
        /**
         * Sorting the rates.
         *
         * @param mixed $a First rate.
         * @param mixed $b Second rate.
         *
         * @return int
         */
        public function sort_rates($a, $b)
        {
        }
        /**
         * Get the transient name based on the given request. Return
         * a hash representation of the request.
         *
         * @param array  $request      Request.
         * @param string $request_type Request type.
         *
         * @return string|false
         * @since 3.4.25
         */
        private function get_transient_name($request, $request_type = '')
        {
        }
        /**
         * Loop through packages, grouping them by type
         *
         * @param array  $packages Packages to loop through.
         * @param string $request_type Request type: [default, ground, smartpost, freight, international_freight].
         *
         * @return array The packages grouped by type
         */
        private function get_fedex_packages_grouped_by_type(array $packages, $request_type = '')
        {
        }
        /**
         * Checking if using Production environment or not.
         */
        public function is_production()
        {
        }
        /**
         * Checking if the FedEx Freight credentials use the Production environment.
         *
         * Independent of is_production() because FedEx Freight is a separate platform with
         * its own sandbox/production keys and hosts.
         *
         * @return bool
         *
         * @since 4.8.0
         */
        public function is_freight_production()
        {
        }
        /**
         * Check the value of residential.
         */
        public function is_residential()
        {
        }
        /**
         * Get the client ID from the setting.
         */
        public function get_client_id()
        {
        }
        /**
         * Get the client secret from the setting.
         */
        public function get_client_secret()
        {
        }
        /**
         * Get the FedEx Freight client ID from the setting.
         *
         * @return string
         *
         * @since 4.8.0
         */
        public function get_freight_client_id()
        {
        }
        /**
         * Get the FedEx Freight client secret from the setting.
         *
         * @return string
         *
         * @since 4.8.0
         */
        public function get_freight_client_secret()
        {
        }
        /**
         * Get the FedEx Freight account number.
         *
         * Only populated when freight is enabled, where it falls back to the main account
         * number if no separate freight account is configured. Null otherwise.
         *
         * @return string|null
         *
         * @since 4.8.0
         */
        public function get_freight_number()
        {
        }
        /**
         * Get the FedEx Freight OAuth instance.
         *
         * @return \WooCommerce\FedEx\FedEx_Freight_OAuth
         *
         * @since 4.8.0
         */
        public function get_freight_oauth()
        {
        }
        /**
         * Get the Fedex account number.
         */
        public function get_account_number()
        {
        }
        /**
         * Get oAuth value.
         */
        public function get_oauth()
        {
        }
        /**
         * Get the service data.
         *
         * @param string $service Service ID.
         */
        public function get_service($service)
        {
        }
        /**
         * Get the request type.
         */
        public function get_request_type()
        {
        }
        /**
         * Helper method to get the number of FedEx method instances.
         *
         * @return int The number of FedEx method instances
         */
        public function instance_count(): int
        {
        }
        /**
         * Helper method to check if there are existing FedEx method instances.
         *
         * @return bool
         */
        public function instances_exist(): bool
        {
        }
    }
    /**
     * The durable half of the freight-credentials signal.
     *
     * The admin notice interrupts and can be dismissed; this note persists in the inbox until the
     * credentials are entered, at which point WC_Shipping_Fedex_Init deletes it outright. Deleting
     * rather than actioning matters: NoteTraits::possibly_add_note() refuses to re-add a note whose
     * name still exists in any state, so removing the row is what lets the note come back if the
     * credentials are ever cleared again.
     *
     * @since 4.8.1
     */
    class WC_Fedex_Note_Freight_Credentials
    {
        use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
        /**
         * Name of the note in the database.
         *
         * Public surface: renaming it orphans every existing note and re-notifies every merchant.
         *
         * @var string
         */
        const NOTE_NAME = 'wc-shipping-fedex-freight-credentials';
        /**
         * Build the note.
         *
         * @return \Automattic\WooCommerce\Admin\Notes\Note
         */
        public static function get_note()
        {
        }
    }
}
/**
 * FedEx carrier codes for REST API rate requests.
 *
 * @package WC_Shipping_Fedex
 */
namespace WooCommerce\FedEx {
    /**
     * FedEx Express carrier code.
     *
     * @var string
     */
    const CARRIER_CODE_EXPRESS = 'FDXE';
    /**
     * FedEx Ground carrier code.
     *
     * @var string
     */
    const CARRIER_CODE_GROUND = 'FDXG';
    /**
     * FedEx SmartPost (Ground Economy) carrier code.
     *
     * @var string
     */
    const CARRIER_CODE_SMARTPOST = 'FXSP';
}
namespace {
    \define('WC_SHIPPING_FEDEX_VERSION', '4.8.3');
    // WRCS: DEFINED_VERSION.
    \define('WC_SHIPPING_FEDEX_FILE', __FILE__);
    \define('WC_SHIPPING_FEDEX_ABSPATH', \trailingslashit(__DIR__));
    \define('WC_SHIPPING_FEDEX_API_DIR', \WC_SHIPPING_FEDEX_ABSPATH . 'includes/api');
    /**
     * Initialize plugin.
     */
    function wc_shipping_fedex_init()
    {
    }
}