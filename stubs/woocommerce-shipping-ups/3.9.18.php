<?php
/**
 * Generated stub declarations for woocommerce-shipping-ups 3.9.18.
 * @see https://github.com/woocommerce/php-stubs
 */

namespace WooCommerce\UPS\API {
    /**
     * Class Abstract_Address_Validator
     */
    abstract class Abstract_Address_Validator
    {
        /**
         * The notice group for address validation notices.
         *
         * @var string
         */
        public static string $notice_group = 'address-validation';
        /**
         * The address to validate.
         *
         * @var array
         */
        protected array $address_to_validate;
        /**
         * The address validation response.
         *
         * @var mixed|\WP_Error
         */
        protected $response;
        /**
         * Is the response cached?
         *
         * @var bool
         */
        protected bool $is_response_cached = false;
        /**
         * Abstract_Address_Validator constructor.
         *
         * @param array $address_to_validate array The address to validate.
         */
        public function __construct(array $address_to_validate)
        {
        }
        /**
         * Set the address to validate.
         *
         * @param array $address_to_validate The address to validate.
         *
         * @return void
         */
        private function set_address_to_validate(array $address_to_validate)
        {
        }
        /**
         * Maybe override the address to validate.
         *
         * @return void
         */
        private function maybe_override_address_to_validate()
        {
        }
        /**
         * Validate the address.
         *
         * @return void
         */
        public function validate()
        {
        }
        /**
         * Build the address validation request.
         *
         * @return void
         */
        public function build_address_validation_request()
        {
        }
        /**
         * Check whether the address_to_validate array contains all the required keys.
         *
         * @return bool
         */
        protected function has_required_address_keys(): bool
        {
        }
        /**
         * Get address to validate.
         *
         * @return array
         */
        protected function get_address_to_validate(): array
        {
        }
        /**
         * Get the required address keys.
         *
         * @return array
         */
        protected function get_required_address_keys(): array
        {
        }
        /**
         * Get the cached response if it exists.
         *
         * @return mixed
         */
        public function get_cached_response()
        {
        }
        /**
         * Get the cached response key.
         *
         * @return string
         */
        protected function get_cached_response_key(): string
        {
        }
        /**
         * Get the cached response key prefix.
         * This will be prepended to the address hash to create the cached response transient key.
         *
         * @return string
         */
        abstract protected function get_cached_response_key_prefix(): string;
        /**
         * Check if the cached response is valid.
         *
         * @param array|\WP_Error $cached_response The cached address validation response.
         *
         * @return bool
         */
        protected function is_cached_response_valid($cached_response): bool
        {
        }
        /**
         * Post the address validation request.
         *
         * @return array|\WP_Error
         */
        abstract protected function post_address_validation_request();
        /**
         * Process the address validation response.
         *
         * @param array|\WP_Error $response The address validation response.
         */
        abstract protected function process_response($response);
        /**
         * Get the address validation request.
         */
        abstract public function get_request();
        /**
         * Check if the address validation request found a potential match.
         *
         * @return bool
         */
        abstract public function found_potential_match(): bool;
        /**
         * Check if the address validation request returned a valid address classification.
         * Valid classifications are:
         * - Residential
         * - Commercial
         *
         * @return bool
         */
        abstract public function found_valid_classification(): bool;
        /**
         * Get the address classification from the address validation response if it exists.
         *
         * @return string|null
         */
        abstract public function get_address_classification(): ?string;
        /**
         * Get the first suggested address from the address validation response if it exists.
         *
         * @return array|false
         */
        abstract public function get_first_suggested_address();
        /**
         * Get the second suggested address from the address validation response if it exists.
         *
         * @return array|false
         */
        public function get_second_suggested_address()
        {
        }
        /**
         * Normalize the address by lowercasing and trimming the address fields.
         *
         * @param array $address The address to normalize.
         *
         * @return array The normalized address.
         */
        public function normalize_address($address): array
        {
        }
        /**
         * Compare two addresses to see if they match.
         *
         * @param array $address_1 The first address to compare.
         * @param array $address_2 The second address to compare.
         *
         * @return bool
         */
        public function addresses_match($address_1, $address_2): bool
        {
        }
        /**
         * Compare the address validation request address to the address validation response address.
         * If the address validation response address is different from the address validation request
         * address, then the address is invalid.
         *
         * @return bool
         */
        public function found_exact_match(): bool
        {
        }
        /**
         * Check if a single address string looks like a PO Box.
         *
         * Matches "PO Box", "P.O. Box", "POB", "P O Box", "PO-Box", "P.O.B.", and "Post Office Box".
         * Requires the "P" prefix (or "Post Office") so that bare "B 100" or "BOX 100"
         * street addresses are not incorrectly treated as PO Boxes.
         *
         * @param string $address The address string to check.
         *
         * @return bool
         */
        public static function address_string_is_po_box(string $address): bool
        {
        }
        /**
         * Check if address is a po box.
         */
        public function is_po_box(): bool
        {
        }
        /**
         * Maybe set the address validation cached response.
         * Only set if the response code is 200.
         * Set the cached response for 30 days.
         *
         * @param array|\WP_Error $response The address validation response.
         */
        protected function maybe_set_cached_response($response)
        {
        }
        /**
         * Get the address validation response.
         */
        abstract public function get_response();
        /**
         * Set the address validation response.
         *
         * @param array|\WP_Error $response The address validation response.
         */
        abstract protected function set_response($response);
        /**
         * Get the endpoint URL.
         *
         * @return string
         */
        abstract protected function get_endpoint(): string;
    }
    /**
     * Abstract API Client class.
     */
    abstract class Abstract_API_Client
    {
        /**
         * Mixed into every rate quote transient key. Bump it to invalidate all
         * cached rate responses, including those in a persistent object cache.
         *
         * @since 3.9.18
         *
         * @var string
         */
        const QUOTE_CACHE_VERSION = '2';
        /**
         * Prefix shared by every rate quote transient.
         *
         * @since 3.9.18
         *
         * @var string
         */
        const QUOTE_TRANSIENT_PREFIX = 'ups_quote_';
        /**
         * Option holding the salt mixed into every rate quote transient key.
         *
         * @var string
         */
        private const QUOTE_CACHE_SALT_OPTION = 'wc_ups_quote_cache_salt';
        /**
         * The notice group for rate request notices.
         *
         * @var string
         */
        public static string $notice_group = 'rate-request';
        /**
         * Endpoints for the API.
         *
         * @var array
         */
        protected static array $endpoints;
        /**
         * The UPS shipping method instance.
         *
         * @var \WC_Shipping_UPS
         */
        protected \WC_Shipping_UPS $shipping_method;
        /**
         * The logger instance.
         *
         * @var \WC_Logger|null
         */
        protected $logger;
        /**
         * The package requests to be sent in the rate request.
         *
         * @var array
         */
        protected array $package_requests;
        /**
         * The package to be used for the rate request.
         *
         * @var array
         */
        protected array $package;
        /**
         * The address validator.
         *
         * @var Abstract_Address_Validator
         */
        protected \WooCommerce\UPS\API\Abstract_Address_Validator $address_validator;
        /**
         * Abstract_API_Client constructor.
         *
         * @param \WC_Shipping_UPS $ups_shipping_method The UPS shipping method object.
         */
        public function __construct(\WC_Shipping_UPS $ups_shipping_method)
        {
        }
        /**
         * Set the package requests to be sent in the rate request.
         *
         * @param array $package_requests The package requests.
         *
         * @return void
         */
        public function set_package_requests(array $package_requests)
        {
        }
        /**
         * Set the package to be used for the rate request.
         *
         * @param array $package The package.
         *
         * @return void
         */
        public function set_package(array $package)
        {
        }
        /**
         * Determine if we can use Simple Rate for this package.
         *
         * @param int $total_packages_count The total packages count.
         *
         * @return bool
         */
        public function is_package_eligible_for_simple_rate(int $total_packages_count): bool
        {
        }
        /**
         * Convert the product dimensions from the store dimensions unit to the shipping method's dimension unit.
         * Format the dimensions for sending in the rate request.
         * Sort the dimensions in ascending order.
         *
         * @param \WC_Product $product The product.
         *
         * @return array
         */
        public function get_processed_product_dimensions(\WC_Product $product): array
        {
        }
        /**
         * Build a package element for a Box Packer packed box which will be added to the rate request.
         *
         * @param object $packed_box         The packed box object.
         * @param int    $packed_boxes_count The total packed boxes count.
         */
        abstract public function build_packed_box_package_for_rate_request(object $packed_box, int $packed_boxes_count);
        /**
         * Build a package element for an individually packed product which will be added to the rate request.
         *
         * @param array $cart_item The cart item.
         */
        abstract public function build_individually_packed_package_for_rate_request(array $cart_item);
        /**
         * POST all rate requests and return the parsed results.
         *
         * @return false|array
         */
        abstract public function get_rates();
        /**
         * Handle destination address validation.
         *
         * @param array $destination_address The destination address.
         *
         * @return void
         */
        abstract public function validate_destination_address(array $destination_address);
        /**
         * Set the is_valid_destination_address flag based on the address validator.
         *
         * @param Abstract_Address_Validator $address_validator The address validator.
         *
         * @return void
         */
        public function set_is_valid_destination_address(\WooCommerce\UPS\API\Abstract_Address_Validator $address_validator)
        {
        }
        /**
         * Get the rate cost for the service.
         *
         * @param object $shipment The shipment object.
         * @param string $code     The service code.
         *
         * @return float
         */
        public function get_rate_cost(object $shipment, string $code): float
        {
        }
        /**
         * Get the rate name for the service.
         *
         * @param string $code The service code.
         *
         * @return mixed|string
         */
        public function get_rate_name(string $code)
        {
        }
        /**
         * Gets the default position of a service code within the services array.
         *
         * @param string $code The service code to find.
         *
         * @return int The position of the service code (0-indexed), or 999 if not found.
         */
        public function get_default_order(string $code): int
        {
        }
        /**
         * Gets the sort order for a service, prioritizing custom settings if available.
         *
         * @param string $code The service code.
         *
         * @return int The sort order.
         */
        public function get_sort_order(string $code): int
        {
        }
        /**
         * Build the transient key for a cached rate response.
         *
         * Keeps the QUOTE_TRANSIENT_PREFIX prefix purge_quote_cache() matches on.
         * The salt rotates on every purge, so entries the DELETE cannot reach
         * (object cache) stop matching too.
         *
         * @since 3.9.18
         *
         * @param string $seed The serialized rate request.
         *
         * @return string
         */
        protected function get_quote_transient_key(string $seed): string
        {
        }
        /**
         * Retire every cached rate response.
         *
         * Rotates the key salt, then deletes the rows from the options table.
         *
         * @since 3.9.18
         *
         * @return bool False only when the query errored.
         */
        public static function purge_quote_cache(): bool
        {
        }
        /**
         * Make a post request to the rate endpoint.
         *
         * @param mixed  $request  The formatted request.
         * @param string $endpoint The endpoint.
         *
         * @return false|void|\WP_Error
         */
        abstract protected function post_rate_request($request, string $endpoint);
        /**
         * Get the rate request data.
         *
         * @param object $request_object The request object.
         *
         * @return bool
         */
        protected function is_valid_package_request_object(object $request_object): bool
        {
        }
        /**
         * Extract the packed box dimensions and weights if available and return in an array
         *
         * @return array|false
         */
        abstract protected function maybe_get_packed_box_details();
        /**
         * Maybe add the packed box dimensions and weights to the metadata.
         *
         * @param array  $meta_data      The metadata.
         * @param object $request_object The request object.
         * @param int    $index          The index.
         *
         * @return array
         */
        protected function maybe_get_packed_box_details_meta(array $meta_data, object $request_object, int $index): array
        {
        }
        /**
         * Maybe get the rate.
         *
         * @param object $response The response object.
         * @param string $code     The service code.
         * @param object $shipment The shipment object.
         *
         * @return array|false
         */
        protected function maybe_get_rate(object $response, string $code, object $shipment)
        {
        }
        /**
         *  Does the store currency match the currency of the rate response?
         *
         * @param object $rate_response The rate response.
         * @param string $rate_name     The rate name.
         * @param string $currency      The currency.
         *
         * @return bool
         */
        protected function is_store_currency_equal_to_rate_currency(object $rate_response, string $rate_name, string $currency): bool
        {
        }
        /**
         * Set the address validator.
         *
         * @param Abstract_Address_Validator $address_validator The address validator.
         */
        public function set_address_validator(\WooCommerce\UPS\API\Abstract_Address_Validator $address_validator)
        {
        }
        /**
         * Get the address validator.
         *
         * @return Abstract_Address_Validator
         */
        public function get_address_validator(): \WooCommerce\UPS\API\Abstract_Address_Validator
        {
        }
    }
}
namespace WooCommerce\UPS\API\Legacy {
    /**
     * Class Address_Validator
     */
    class Address_Validator extends \WooCommerce\UPS\API\Abstract_Address_Validator
    {
        /**
         * The UPS access request XML element.
         *
         * @var \SimpleXMLElement|mixed
         */
        private $access_request_xml_element;
        /**
         * The address validation request.
         *
         * @var string
         */
        private string $request = '';
        /**
         * Response XML Element.
         *
         * @var \SimpleXMLElement|mixed
         */
        private $response_xml_element;
        /**
         * Address_Validator constructor.
         *
         * @param array                  $address_to_validate        The address to validate.
         * @param \SimpleXMLElement|mixed $access_request_xml_element A UPS access request XML element.
         */
        public function __construct(array $address_to_validate, $access_request_xml_element)
        {
        }
        /**
         * Build the address validation request.
         *
         * @return void
         */
        public function build_address_validation_request()
        {
        }
        /**
         * Get the address validation request.
         */
        public function get_request(): string
        {
        }
        /**
         * Get the address validation response.
         */
        public function get_response()
        {
        }
        /**
         * Check if the address validation request found a potential match.
         *
         * @return bool
         */
        public function found_potential_match(): bool
        {
        }
        /**
         * Check if the response XML element is valid.
         *
         * @return bool
         */
        private function is_valid_response_xml_element(): bool
        {
        }
        /**
         * Check if the address validation request returned a valid address classification.
         * Valid classifications are:
         * - Residential
         * - Commercial
         *
         * @return bool
         */
        public function found_valid_classification(): bool
        {
        }
        /**
         * Get the address classification from the address validation response if it exists.
         *
         * @return string|null
         */
        public function get_address_classification(): ?string
        {
        }
        /**
         * Post the address validation request.
         *
         * @return array|\WP_Error
         */
        protected function post_address_validation_request()
        {
        }
        /**
         * Get the address validation endpoint.
         *
         * @return string
         */
        protected function get_endpoint(): string
        {
        }
        /**
         * Get the cached response key prefix.
         *
         * @return string
         */
        protected function get_cached_response_key_prefix(): string
        {
        }
        /**
         * Process the address validation response.
         *
         * @param array|\WP_Error $response The address validation response.
         *
         * @return void
         */
        protected function process_response($response)
        {
        }
        /**
         * Set the address validation response.
         *
         * @param array|\WP_Error $response The address validation response.
         *
         * @return void
         */
        protected function set_response($response)
        {
        }
        /**
         * Convert the response string to a SimpleXMLElement.
         *
         * @return void
         */
        private function convert_response_string_to_xml_element()
        {
        }
        /**
         * Get the first suggested address from the address validation response.
         *
         * @return array|false
         */
        public function get_first_suggested_address()
        {
        }
    }
    /**
     * Legacy API_Client Class.
     */
    class API_Client extends \WooCommerce\UPS\API\Abstract_API_Client
    {
        /**
         * Endpoints for the UPS XML API.
         *
         * @var array
         */
        protected static array $endpoints = array('rate' => 'https://onlinetools.ups.com/ups.app/xml/Rate');
        /**
         * Bytes of a response body kept in the debug log.
         *
         * @var int
         */
        private const DEBUG_BODY_LENGTH = 4096;
        /**
         * How long a rated response is cached.
         *
         * @var int
         */
        private const RATE_CACHE_TTL = DAY_IN_SECONDS * 30;
        /**
         * How long a Hard UPS error response is cached.
         *
         * @var int
         */
        private const ERROR_CACHE_TTL = DAY_IN_SECONDS;
        /**
         * Make a post request to the rate endpoint.
         *
         * @param string $request  The request body.
         * @param string $endpoint The request endpoint.
         *
         * @inheritDoc
         */
        protected function post_rate_request($request, string $endpoint)
        {
        }
        /**
         * Build a package element for a Box Packer packed box which will be added to the rate request.
         *
         * @param object $packed_box         The packed box.
         * @param int    $packed_boxes_count The number of packed boxes.
         *
         * @return string
         */
        public function build_packed_box_package_for_rate_request(object $packed_box, int $packed_boxes_count): string
        {
        }
        /**
         * Build a package element for an individually packed product which will be added to the rate request.
         *
         * @param array $cart_item The cart item.
         *
         * @return string
         */
        public function build_individually_packed_package_for_rate_request(array $cart_item): string
        {
        }
        /**
         * Get the rate for a package.
         *
         * @return array
         */
        public function get_rates(): array
        {
        }
        /**
         * Extract the packed box dimensions and weights if available and return in an array.
         *
         * @return array|false
         */
        protected function maybe_get_packed_box_details()
        {
        }
        /**
         * Add the package weight element to the request.
         *
         * @param string $request The request.
         * @param mixed  $weight  The weight.
         *
         * @return string
         */
        private function add_package_weight_element(string $request, $weight): string
        {
        }
        /**
         * Maybe add the delivery confirmation element to the request.
         *
         * @param string $country The country.
         * @param string $request The request.
         *
         * @return string
         */
        private function maybe_add_delivery_confirmation_element(string $country, string $request): string
        {
        }
        /**
         * Retrieves an array of rate requests.
         *
         * @return array
         */
        private function get_rate_requests_array(): array
        {
        }
        /**
         * Get access request XML element.
         *
         * @return \SimpleXMLElement
         */
        private function get_access_request_xml_element(): \SimpleXMLElement
        {
        }
        /**
         * Build the rate request.
         *
         * @param array  $package_requests The package requests.
         * @param array  $package          The package.
         * @param string $code             The code.
         *
         * @return string
         */
        private function build_rate_request(array $package_requests, array $package, string $code): string
        {
        }
        /**
         * Parse a rate response body.
         *
         * @param string $body The raw XML response body.
         *
         * @return false|\SimpleXMLElement
         */
        private function parse_rate_body(string $body)
        {
        }
        /**
         * Does the body carry rate data: a rating response with status code 1 and a priced RatedShipment?
         *
         * @param \SimpleXMLElement|false $xml The parsed response body, or false.
         *
         * @return bool
         */
        private function has_rate_data($xml): bool
        {
        }
        /**
         * How long a response body may be cached, in seconds. Zero means never.
         *
         * Used for both the write and the cached-read check.
         *
         * @param \SimpleXMLElement|false $xml The parsed response body, or false.
         *
         * @return int
         */
        private function get_rate_cache_ttl($xml): int
        {
        }
        /**
         * Get Parsed XML response.
         *
         * @param string $xml XML.
         *
         * @return false|\SimpleXMLElement|null Return false if failed to parse.
         */
        private function get_parsed_xml(string $xml)
        {
        }
        /**
         * Handle destination address validation.
         *
         * @param array $destination_address The destination address.
         *
         * @return void
         */
        public function validate_destination_address(array $destination_address)
        {
        }
    }
}
namespace {
    // phpcs:disable --- Reason: This file will be removed in the next month or so.
    /**
     * Drop in replacement for DOMDocument that is secure against XML eXternal Entity (XXE)
     * Injection.
     *
     * Bails if any DOCTYPE is found.
     *
     * Comments in quotes come from the DOMDocument documentation: http://php.net/manual/en/class.domdocument.php
     */
    class WC_Safe_DOMDocument extends \DOMDocument
    {
        /**
         * When called non-statically (as an object method) with malicious data,
         * no Exception is thrown, but the object is emptied of all DOM nodes.
         *
         * @param string $filename The path to the XML document.
         * @param int    $options  Bitwise OR of the libxml option constants.
         *
         * @see http://us3.php.net/manual/en/libxml.constants.php
         *
         * @return bool|DOMDocument true on success, false on failure. If called statically
         *                          (E_STRICT error), returns DOMDocument on success.
         */
        public function load($filename, $options = 0)
        {
        }
        /**
         * When called non-statically (as an object method) with malicious data,
         * no Exception is thrown, but the object is emptied of all DOM nodes.
         *
         * @param string $source  The string containing the XML.
         * @param int    $options Bitwise OR of the libxml option constants.
         *
         * @see http://us3.php.net/manual/en/libxml.constants.php.
         *
         * @return bool|DOMDocument true on success, false on failure.  If called
         *                          statically (E_STRICT error), returns DOMDocument on success.
         */
        public function loadXML($source, $options = 0)
        {
        }
    }
}
namespace WooCommerce\UPS\API\REST {
    /**
     * Class Address_Validator
     */
    class Address_Validator extends \WooCommerce\UPS\API\Abstract_Address_Validator
    {
        /**
         * The UPS access token.
         *
         * @var string
         */
        private string $access_token;
        /**
         * The address validation request.
         *
         * @var array
         */
        private array $request = array();
        /**
         * Address_Validator constructor.
         *
         * @param array  $address_to_validate The address to validate.
         * @param string $access_token        A UPS access token.
         */
        public function __construct(array $address_to_validate, string $access_token)
        {
        }
        /**
         * Build the address validation request.
         *
         * @return void
         */
        public function build_address_validation_request()
        {
        }
        /**
         * Get the address validation request.
         */
        public function get_request(): array
        {
        }
        /**
         * Get the address validation response.
         */
        public function get_response()
        {
        }
        /**
         * Check if the address validation request found a potential match.
         *
         * @return bool
         */
        public function found_potential_match(): bool
        {
        }
        /**
         * Check if the address validation request returned a valid address classification.
         * Valid classifications are:
         * - Residential
         * - Commercial
         *
         * @return bool
         */
        public function found_valid_classification(): bool
        {
        }
        /**
         * Get the address classification from the address validation response if it exists.
         *
         * @return string|null
         */
        public function get_address_classification(): ?string
        {
        }
        /**
         * Get the cached response key prefix. This will be prepended to the address hash to create the cached response transient key.
         */
        protected function get_cached_response_key_prefix(): string
        {
        }
        /**
         * Process the address validation response.
         *
         * @param array|\WP_Error $response The response from the address validation request.
         *
         * @return void
         */
        protected function process_response($response)
        {
        }
        /**
         * Set the address validation response.
         *
         * @param array|\WP_Error $response The response from the address validation request.
         *
         * @return void
         */
        protected function set_response($response)
        {
        }
        /**
         * Post the address validation request.
         *
         * @return array|\WP_Error
         */
        protected function post_address_validation_request()
        {
        }
        /**
         * Get the UPS address validation endpoint.
         *
         * @return string
         */
        protected function get_endpoint(): string
        {
        }
        /**
         * Get the first suggested address from the address validation response.
         *
         * @return array|false
         */
        public function get_first_suggested_address()
        {
        }
    }
    /**
     * REST API_Client class.
     */
    class API_Client extends \WooCommerce\UPS\API\Abstract_API_Client
    {
        /**
         * Endpoint for the UPS Rating API.
         *
         * @var array
         */
        protected static array $endpoints = array('shop' => 'https://onlinetools.ups.com/api/rating/v1/Shop', 'rate' => 'https://onlinetools.ups.com/api/rating/v1/Rate');
        /**
         * Make a post request to the rate endpoint.
         *
         * @param array  $request  The formatted request.
         * @param string $endpoint The request endpoint.
         *
         * @return array|\WP_Error
         */
        protected function post_rate_request($request, string $endpoint)
        {
        }
        /**
         * Build a package element for a packed box which will be added to the rate request.
         *
         * @param object $packed_box         The packed box.
         * @param int    $packed_boxes_count The total number of packed boxes.
         *
         * @return array
         */
        public function build_packed_box_package_for_rate_request(object $packed_box, int $packed_boxes_count): array
        {
        }
        /**
         * Build a package element for an individually packed product which will be added to the rate request.
         *
         * @param array $cart_item The cart item.
         *
         * @return array
         */
        public function build_individually_packed_package_for_rate_request(array $cart_item): array
        {
        }
        /**
         * POST all rate requests and return the parsed results.
         *
         * @return array
         */
        public function get_rates(): array
        {
        }
        /**
         * Check whether a decoded UPS rate API response contains valid rate data.
         *
         * @param mixed $response Decoded JSON response (object or null).
         *
         * @return bool
         */
        private function is_valid_rate_response($response): bool
        {
        }
        /**
         * Get the rate cost for the service.
         *
         * @param object $shipment The shipment object.
         * @param string $code     The service code.
         *
         * @return float
         */
        public function get_rate_cost(object $shipment, string $code): float
        {
        }
        /**
         * Extract the packed box dimensions and weights if available and return in an array.
         *
         * @return array|false
         */
        protected function maybe_get_packed_box_details()
        {
        }
        /**
         * Add PackagingType element to package.
         *
         * @param array $request The request array.
         *
         * @return void
         */
        private function add_package_packaging_type_element(array &$request)
        {
        }
        /**
         * Add PackageDimensions element to package.
         *
         * @param array $request The request array.
         * @param mixed $length  The length in the UPS instance's dimension unit.
         * @param mixed $width   The width in the UPS instance's dimension unit.
         * @param mixed $height  The height in the UPS instance's dimension unit.
         *
         * @return void
         */
        private function add_package_dimensions_element(array &$request, $length, $width, $height)
        {
        }
        /**
         * Add PackageWeight element to package.
         *
         * @param array $request The request array.
         * @param mixed $weight  The weight in the UPS instance's weight unit.
         *
         * @return void
         */
        private function add_package_weight_element(array &$request, $weight)
        {
        }
        /**
         * Maybe add SimpleRate element to package.
         *
         * Dimensions will be converted from WooCommerce's set units to inches.
         * Weight will be converted from WooCommerce's set units to pounds.
         *
         * @param array $request              The request array.
         * @param mixed $length               The length in the UPS instance's dimension unit.
         * @param mixed $width                The width in the UPS instance's dimension unit.
         * @param mixed $height               The height in the UPS instance's dimension unit.
         * @param mixed $weight               The weight in the UPS instance's weight unit.
         * @param int   $total_packages_count The total number of packages.
         *
         * @return bool
         */
        private function maybe_add_package_simple_rate_element(array &$request, $length, $width, $height, $weight, int $total_packages_count): bool
        {
        }
        /**
         * Maybe add InsuredValue element to package.
         *
         * @param array $request The request array.
         * @param mixed $value   The value to insure the package for.
         *
         * @return void
         */
        private function maybe_add_package_insured_value_element(array &$request, $value)
        {
        }
        /**
         * Maybe add DeliveryConfirmation element to package.
         *
         * @param array  $request The request array.
         * @param string $country The destination country.
         *
         * @return void
         */
        private function maybe_add_package_delivery_confirmation_element(array &$request, string $country)
        {
        }
        /**
         * Retrieves an array of rate requests.
         *
         * @param string $service_code A specific service code to get rates for.
         *                             Changes the request option and endpoint to 'Rate'
         *                             and adds the service code to the request.
         *
         * @return array
         */
        private function get_rate_requests_array(string $service_code = ''): array
        {
        }
        /**
         * Build the rate request.
         *
         * @param array  $package_requests The package requests.
         * @param string $service_code     A specific service code to get rates for.
         *
         * @return array|array[]
         */
        private function build_rate_request(array $package_requests, string $service_code = ''): array
        {
        }
        /**
         * Maybe add the customer classification code to the request.
         *
         * @param array $rate_request The rate request.
         *
         * @return void
         */
        public function maybe_add_customer_classification_code_element(array &$rate_request)
        {
        }
        /**
         * Maybe add the AddressLine element to the Shipper Address element.
         *
         * @param array $shipper The shipper.
         *
         * @return void
         */
        private function maybe_add_shipper_street_address_element(array &$shipper)
        {
        }
        /**
         * Maybe add the ship to address residential indicator element.
         * This setting is located in the shipping zone's shipping method settings.
         *
         * @param array $ship_to_address The ship to address.
         *
         * @return void
         */
        public function maybe_add_ship_to_address_residential_indicator_element(array &$ship_to_address)
        {
        }
        /**
         * Handle conditions where the ship to country code needs to be adjusted.
         *
         * @param array $ship_to_address The ship to address.
         *
         * @return void
         */
        public function maybe_adjust_ship_to_country_code(array &$ship_to_address)
        {
        }
        /**
         * Maybe add the AddressLine element to the ship from address.
         *
         * @param array $ship_from_address The ship from address.
         *
         * @return void
         */
        public function maybe_add_ship_from_street_address_element(array &$ship_from_address)
        {
        }
        /**
         * Maybe add the StateProvinceCode element to the ship from address.
         *
         * @param array $ship_from_address The ship from address.
         *
         * @return void
         */
        private function maybe_add_ship_from_address_state_province_code_element(array &$ship_from_address)
        {
        }
        /**
         * Maybe add shipment rating options to the request shipment element.
         *
         * @param array $shipment The shipment.
         *
         * @return void
         */
        public function maybe_add_shipment_rating_options(array &$shipment)
        {
        }
        /**
         * Maybe add shipment service options to the request shipment element.
         *
         * @param array $shipment The shipment.
         *
         * @return void
         */
        public function maybe_add_shipment_service_options(array &$shipment)
        {
        }
        /**
         * Maybe add ShipmentTotalWeight element to the request Shipment element.
         *
         * This element is only needed if there are multiple packages.
         *
         * @param array $shipment         The shipment.
         * @param array $package_requests The package requests.
         *
         * @return void
         */
        private function maybe_add_shipment_total_weight_element(array &$shipment, array $package_requests)
        {
        }
        /**
         * Get the total weight of all packages.
         *
         * @param array $package_requests The package requests.
         *
         * @return int|float
         */
        private function get_total_weight_of_all_packages(array $package_requests)
        {
        }
        /**
         * Validate the destination address.
         *
         * @param array $destination_address The destination address.
         *
         * @return void
         */
        public function validate_destination_address(array $destination_address)
        {
        }
        /**
         * Split the package requests into groups with a limited number of requests. If the service code is provided, the
         * requests will be grouped in groups of 200, otherwise in groups of 50.
         *
         *  According to the UPS documentation:
         *  "When using the Rate option, there is a 200-package maximum allowed for each API request.
         *  Each package container in the request can contain 1 package.
         *  When using the Shop option, there is a 50-package maximum limit allowed for each API request."
         *
         * @param string $service_code A specific service code to get rates for.
         *
         * @return array
         */
        public function get_grouped_requests(string $service_code = ''): array
        {
        }
        /**
         * Check if the package qualifies for UPS Ground Saver (service code 93).
         *
         * @param array $package_request The package request.
         *
         * @return bool
         */
        public function package_qualifies_for_ground_saver(array $package_request): bool
        {
        }
        /**
         * Get the total package dimension.
         * The formula is: Length + 2 * Width + 2 * Height.
         *
         * @param array $package_request The package request.
         *
         * @return float
         */
        public function get_total_package_dimension(array $package_request): float
        {
        }
        /**
         * Maybe add the shipment service element to the shipment.
         * This is used to get rates for a specific service code.
         *
         * @param array       $shipment     The shipment.
         * @param string|null $service_code The service code.
         *
         * @return void
         */
        public function maybe_add_shipment_service_element(array &$shipment, ?string $service_code)
        {
        }
    }
    /**
     * Class UPS_OAuth
     *
     * Handles the OAuth authentication for the UPS REST API.
     *
     * @package WooCommerce\UPS
     */
    class OAuth
    {
        /**
         * The client ID.
         *
         * @var string
         */
        private string $client_id;
        /**
         * The client secret.
         *
         * @var string
         */
        private string $client_secret;
        /**
         * The OAuth endpoint.
         *
         * @var string
         */
        private string $endpoint = 'https://onlinetools.ups.com/security/v1/oauth/token';
        /**
         * Array of transient names.
         *
         * @var array
         */
        private static array $transient_names = array('access_token' => 'woocommerce_ups_oauth_access_token', 'client_id' => 'woocommerce_ups_oauth_client_id', 'client_secret' => 'woocommerce_ups_oauth_client_secret');
        /**
         * The logger.
         *
         * @var \WC_Logger
         */
        private \WC_Logger $logger;
        /**
         * UPS_OAuth constructor.
         *
         * @param string $client_id     The client ID.
         * @param string $client_secret The client secret.
         */
        public function __construct(string $client_id, string $client_secret)
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
         * Get an access token.
         *
         * @return string|bool
         */
        public function get_access_token()
        {
        }
        /**
         * Maybe delete the cached access token.
         * This is useful when the user changes the client ID or secret.
         */
        private function maybe_delete_cached_access_token()
        {
        }
        /**
         * Request access token from the UPS OAuth API.
         *
         * @return object|bool
         */
        private function request_access_token()
        {
        }
    }
}
namespace WooCommerce\Shipping\UPS {
    /**
     * Blocks Integration class.
     */
    class Blocks_Integration implements \Automattic\WooCommerce\Blocks\Integrations\IntegrationInterface
    {
        /**
         * The name of the integration.
         *
         * @return string
         */
        public function get_name(): string
        {
        }
        /**
         * When called invokes any initialization/setup for the integratidon.
         */
        public function initialize()
        {
        }
        /**
         * Returns an array of script handles to enqueue in the frontend context.
         *
         * @return string[]
         */
        public function get_script_handles(): array
        {
        }
        /**
         * Returns an array of script handles to enqueue in the editor context.
         *
         * @return string[]
         */
        public function get_editor_script_handles(): array
        {
        }
        /**
         * An array of key, value pairs of data made available to the block on the client side.
         *
         * @return array
         */
        public function get_script_data(): array
        {
        }
        /**
         * Registers the scripts and styles for the integration.
         */
        public function register_scripts()
        {
        }
        /**
         * Register a script for the integration.
         *
         * @param string $handle Script handle.
         */
        protected function register_script(string $handle)
        {
        }
        /**
         * Get the file modified time as a cache buster if we're in dev mode.
         *
         * @param string $file Local path to the file.
         *
         * @return string The cache buster value to use for the given file.
         */
        protected function get_file_version(string $file): string
        {
        }
    }
}
namespace WooCommerce\UPS {
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
        const CONTEXT = 'woocommerce-shipping-ups';
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
         * @param bool $is_debug_enabled Is debug enabled.
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
        const WC_SESSION_KEY = 'wc_shipping_ups_notices';
        /**
         * Valid notice types.
         *
         * @var array
         */
        private static array $valid_notice_types = array('error', 'success', 'notice', 'warning');
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
         * Has notices.
         *
         * @return bool
         */
        public static function has_notices(): bool
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
    /**
     * Store API Extension.
     */
    class Store_API_Extension
    {
        /**
         * Stores Rest Extending instance.
         *
         * @var \Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema
         */
        private static $extend;
        /**
         * Plugin Identifier, unique to each plugin.
         *
         * @var string
         */
        const IDENTIFIER = 'wc_shipping_ups';
        /**
         * Bootstraps the class and hooks required data.
         *
         * @since 1.0.0
         */
        public static function init()
        {
        }
        /**
         * Registers the data into each endpoint.
         */
        public static function extend_store()
        {
        }
        /**
         * Store API extension data callback.
         *
         * @return array
         */
        public static function data()
        {
        }
        /**
         * Store API extension schema callback.
         *
         * @return array Registered schema.
         */
        public static function schema()
        {
        }
        /**
         * Store API extension update callback.
         *
         * @param array $data Data to update.
         */
        public static function update($data)
        {
        }
    }
}
namespace {
    /**
     * WC_Shipping_UPS_Init Class
     */
    class WC_Shipping_UPS_Init
    {
        /**
         * Instance of this class.
         *
         * @var WC_Shipping_UPS_Init|null
         */
        private static ?\WC_Shipping_UPS_Init $instance = \null;
        /**
         * Get the class instance.
         */
        public static function get_instance(): \WC_Shipping_UPS_Init
        {
        }
        /**
         * Initialize the plugin's public actions.
         */
        public function __construct()
        {
        }
        /**
         * Register blocks integration.
         */
        public function register_blocks_integration()
        {
        }
        /**
         * Extend the store API.
         */
        public function extend_store_api()
        {
        }
        /**
         * Resolve a UPS shipping method instance that applies to the customer's current cart.
         *
         * Address validation state lives on the method instance (per zone instance), so we need
         * one instance to ask `should_block_invalid_address()`. We use the first UPS instance
         * matching any shipping package on the current cart.
         *
         * @return \WC_Shipping_UPS|null
         */
        private function get_ups_method_for_cart()
        {
        }
        /**
         * Block Store API (block checkout) submission when the destination address
         * is invalid in strict mode or hard-invalid (PO Box / no suggestion), and
         * a UPS shipping method is selected on the order.
         *
         * @param \WC_Order $order The order being processed.
         *
         * @throws \Automattic\WooCommerce\StoreApi\Exceptions\RouteException When UPS should block checkout.
         * @return void
         */
        public function block_store_api_submission_on_invalid_address($order)
        {
        }
        /**
         * Block classic checkout submission when the destination address is invalid
         * in strict mode or hard-invalid, and UPS is the chosen shipping method.
         *
         * @param array     $data   Posted checkout data.
         * @param \WP_Error $errors Validation errors object.
         *
         * @return void
         */
        public function block_classic_submission_on_invalid_address($data, $errors)
        {
        }
        /**
         * Include needed files.
         */
        public function includes()
        {
        }
        /**
         * Assets to enqueue in admin.
         */
        public function assets()
        {
        }
        /**
         * Assets to enqueue on the frontend.
         */
        public function frontend_assets()
        {
        }
        /**
         * Add UPS shipping method.
         *
         * @param array $methods Shipping methods.
         *
         * @return array Shipping methods.
         * @since 1.0.0
         */
        public function add_method(array $methods): array
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
         * @param array $links Plugin links.
         *
         * @return array Plugin links.
         * @since 1.0.0
         */
        public function plugin_links(array $links): array
        {
        }
        /**
         * Plugin page links to support and documentation
         *
         * @param array  $links List of plugin links.
         * @param string $file  Current file.
         *
         * @return array
         * @since 3.x
         */
        public function plugin_row_meta(array $links, string $file): array
        {
        }
        /**
         * WooCommerce not installed notice.
         */
        public function wc_deactivated()
        {
        }
        /**
         * Runs the 3.2.0 settings migration and the one-shot quote cache purge.
         *
         * @version 3.2.0
         * @since   3.2.0
         *
         * @return void
         */
        public function maybe_install()
        {
        }
        /**
         * Purge cached rate responses once per QUOTE_CACHE_VERSION.
         *
         * Not keyed off 'wc_ups_version': install() stops updating it after 3.2.0.
         *
         * @return void
         */
        private function maybe_purge_quote_cache()
        {
        }
        /**
         * Update/migration script.
         *
         * @since   3.2.0
         * @version 3.2.0
         */
        public function install()
        {
        }
        /**
         * Show the user a notice for plugin updates.
         *
         * @since 3.2.0
         */
        public function upgrade_notice()
        {
        }
        /**
         * Turn of the dismisable upgrade notice.
         *
         * @since 3.2.0
         */
        public function dismiss_upgrade_notice()
        {
        }
        /**
         * Helper method to check whether given zone_id has ups method instance.
         *
         * @param int $zone_id Zone ID.
         *
         * @return bool True if given zone_id has ups method instance
         * @since 4.4.0
         */
        public function is_zone_has_ups(int $zone_id): bool
        {
        }
    }
    /**
     * UPS Shipping privacy class.
     */
    class WC_Shipping_UPS_Privacy extends \WC_Abstract_Privacy
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
     * WC_Shipping_UPS class.
     *
     * @version 3.2.6
     * @since   3.2.0
     * @see     WC_Shipping_Method
     */
    class WC_Shipping_UPS extends \WC_Shipping_Method
    {
        /**
         * Address validation will block checkout for soft-invalid addresses (has a suggestion).
         * PO Boxes and addresses with no match always block regardless of this setting.
         */
        const ADDRESS_VALIDATION_STRICT = 'strict';
        /**
         * Address validation shows an advisory notice for soft-invalid addresses but allows checkout.
         */
        const ADDRESS_VALIDATION_LENIENT = 'lenient';
        /**
         * UPS API user ID.
         *
         * @var mixed
         */
        private $user_id;
        /**
         * UPS API password.
         *
         * @var mixed
         */
        private $password;
        /**
         * UPS API access key.
         *
         * @var mixed
         */
        private $access_key;
        /**
         * UPS API shipper number.
         *
         * @var mixed
         */
        private $shipper_number;
        /**
         * UPS API classification code.
         *
         * @var mixed
         */
        private $classification_code;
        /**
         * Is UPS Simple Rate enabled?
         *
         * @var bool
         */
        private bool $simple_rate;
        /**
         * Is negotiated rates enabled?
         *
         * @var bool
         */
        private bool $negotiated;
        /**
         * The UPS instance dimension unit.
         *
         * @var string
         */
        private string $dim_unit;
        /**
         * The UPS instance weight unit.
         *
         * @var string
         */
        private string $weight_unit;
        /**
         * Offer all rates or cheapest.
         *
         * @var mixed
         */
        private $offer_rates;
        /**
         * Flag the destination address as residential.
         *
         * @var bool
         */
        private bool $residential;
        /**
         * Is the destination address valid?
         *
         * @var bool
         */
        private bool $is_valid_destination_address = \true;
        /**
         * Is the destination address validation enabled?
         *
         * @var bool
         */
        private bool $destination_address_validation;
        /**
         * Address validation behavior: ADDRESS_VALIDATION_LENIENT (default) shows an advisory
         * notice for soft-invalid addresses; ADDRESS_VALIDATION_STRICT blocks checkout.
         *
         * @var string
         */
        private string $address_validation_behavior;
        /**
         * The fallback cost to use if no rates are returned.
         *
         * @var mixed
         */
        private $fallback;
        /**
         * Whether to pack items into boxes or not.
         *
         * @var mixed
         */
        private $packing_method;
        /**
         * Sets the box packer library to use.
         *
         * @var string
         */
        public $box_packer_library;
        /**
         * The standard UPS packaging/box sizes selected by the user
         * to be used for packing items into for this instance.
         *
         * @var mixed
         */
        private $selected_ups_packaging;
        /**
         * The UPS Simple Rate packaging/box sizes selected by the user
         * to be used for packing items into for this instance.
         *
         * @var mixed
         */
        private $selected_simple_rate_packaging;
        /**
         * The UPS services.
         *
         * @var mixed
         */
        private $custom_services;
        /**
         * The custom boxes defined by the user.
         *
         * @var mixed
         */
        private $boxes;
        /**
         * A flag to determine if the user wants to insure the package.
         *
         * @var bool
         */
        private bool $insuredvalue;
        /**
         * Whether to require a signature or not and if so, what type.
         *
         * @var mixed
         */
        private $signature;
        /**
         * Metric or imperial.
         *
         * @var string
         */
        private string $units;
        /**
         * The origin address line.
         *
         * @var string
         */
        private string $origin_addressline;
        /**
         * The origin city.
         *
         * @var string
         */
        private string $origin_city;
        /**
         * The origin state.
         *
         * @var string
         */
        private string $origin_state;
        /**
         * The origin country.
         *
         * @var string
         */
        private string $origin_country;
        /**
         * The origin postcode.
         *
         * @var string
         */
        private string $origin_postcode;
        /**
         * UPS API type.
         *
         * This determines whether to use XML API or REST API.
         *
         * @var string
         */
        private string $api_type;
        /**
         * UPS REST API client ID.
         *
         * @var string
         */
        private string $client_id;
        /**
         * UPS REST API client secret.
         *
         * @var string
         */
        private string $client_secret;
        /**
         * UPS REST API OAuth instance.
         *
         * @var \WooCommerce\UPS\API\REST\OAuth
         */
        private \WooCommerce\UPS\API\REST\OAuth $ups_oauth;
        /**
         * UPS API Client instance.
         *
         * @var \WooCommerce\UPS\API\Abstract_API_Client
         */
        private \WooCommerce\UPS\API\Abstract_API_Client $ups_api;
        /**
         * Debug mode.
         *
         * @var bool
         */
        private bool $debug;
        /**
         * Ordered services.
         *
         * @var array
         */
        private array $ordered_services;
        /**
         * Notifier instance.
         *
         * @var \WooCommerce\UPS\Notifier
         */
        public \WooCommerce\UPS\Notifier $notifier;
        /**
         * Logger instance.
         *
         * @var \WooCommerce\UPS\Logger
         */
        public \WooCommerce\UPS\Logger $logger;
        /**
         * Servide codes mapped to the service names.
         *
         * @var array
         */
        private array $services = array(
            // Domestic.
            '01' => 'Next Day Air',
            '03' => 'Ground',
            '02' => '2nd Day Air',
            '12' => '3 Day Select',
            '13' => 'Next Day Air Saver',
            '14' => 'Next Day Air Early AM',
            '59' => '2nd Day Air AM',
            // UPS Ground Saver.
            '93' => 'Ground Saver',
            // International.
            '11' => 'Standard',
            '07' => 'Worldwide Express',
            '54' => 'Worldwide Express Plus',
            '08' => 'Worldwide Expedited Standard',
            '65' => 'Worldwide Saver',
        );
        /**
         * Country considered as EU.
         *
         * @var array
         */
        private array $eu_array = array('BE', 'BG', 'CZ', 'DK', 'DE', 'EE', 'IE', 'GR', 'ES', 'FR', 'HR', 'IT', 'CY', 'LV', 'LT', 'LU', 'HU', 'MT', 'NL', 'AT', 'PT', 'RO', 'SI', 'SK', 'FI', 'GB');
        /**
         * Shipments Originating in the European Union.
         *
         * @var array
         */
        private array $euservices = array('07' => 'UPS Express', '08' => 'UPS ExpeditedSM', '11' => 'UPS Standard', '54' => 'UPS Express PlusSM', '65' => 'UPS Saver');
        /**
         * Poland services.
         *
         * @var array
         */
        private array $polandservices = array('07' => 'UPS Express', '08' => 'UPS ExpeditedSM', '11' => 'UPS Standard', '54' => 'UPS Express PlusSM', '65' => 'UPS Saver', '82' => 'UPS Today Standard', '83' => 'UPS Today Dedicated Courier', '84' => 'UPS Today Intercity', '85' => 'UPS Today Express', '86' => 'UPS Today Express Saver');
        /**
         * Services available with UPS Simple Rate
         *
         * @see https://www.ups.com/assets/resources/media/en_US/daily_rates.pdf#page=76
         *
         * @var array
         */
        private array $simple_rate_services = array('02', '03', '12', '13');
        /**
         * Packaging not offered at this time: 00 = UNKNOWN, 30 = Pallet, 04 = Pak
         * Code 21 = Express box is valid code, but doesn't have dimensions.
         *
         * @see http://www.ups.com/content/us/en/resources/ship/packaging/supplies/envelopes.html.
         * @see http://www.ups.com/content/us/en/resources/ship/packaging/supplies/paks.html.
         * @see http://www.ups.com/content/us/en/resources/ship/packaging/supplies/boxes.html.
         * @see https://www.ups.com/content/us/en/shipping/create/package_type_help.html.
         *
         * @var array
         */
        private array $packaging = array('01' => array('name' => 'UPS Letter', 'length' => '12.5', 'width' => '9.5', 'height' => '0.25', 'weight' => '0.5'), '03' => array('name' => 'Tube', 'length' => '38', 'width' => '6', 'height' => '6', 'weight' => '100'), '24' => array('name' => '25KG Box', 'length' => '19.375', 'width' => '17.375', 'height' => '14', 'weight' => '55.1156'), '25' => array('name' => '10KG Box', 'length' => '16.5', 'width' => '13.25', 'height' => '10.75', 'weight' => '22.0462'), '2a' => array('name' => 'Small Express Box', 'length' => '13', 'width' => '11', 'height' => '2', 'weight' => '100'), '2b' => array('name' => 'Medium Express Box', 'length' => '15', 'width' => '11', 'height' => '3', 'weight' => '100'), '2c' => array('name' => 'Large Express Box', 'length' => '18', 'width' => '13', 'height' => '3', 'weight' => '30'));
        /**
         * Simple Rate Package requirements
         *
         * @see https://www.ups.com/assets/resources/media/en_US/daily_rates.pdf#page=76
         *
         * @var array
         */
        private array $simple_rate_packaging = array('XS' => array('name' => 'Extra Small Simple Rate Box', 'cubic_inches_min' => '1', 'cubic_inches_max' => '100', 'weight' => '50'), 'S' => array('name' => 'Small Simple Rate Box', 'cubic_inches_min' => '101', 'cubic_inches_max' => '250', 'weight' => '50'), 'M' => array('name' => 'Medium Simple Rate Box', 'cubic_inches_min' => '251', 'cubic_inches_max' => '650', 'weight' => '50'), 'L' => array('name' => 'Large Simple Rate Box', 'cubic_inches_min' => '651', 'cubic_inches_max' => '1050', 'weight' => '50'), 'XL' => array('name' => 'Extra Large Simple Rate Box', 'cubic_inches_min' => '1051', 'cubic_inches_max' => '1728', 'weight' => '50'));
        /**
         * Array of UPS standard packaging options formatted for select fields.
         *
         * This property contains a mapping of packaging codes to their display names,
         * derived from the $packaging property. It's used to populate the options
         * in the UPS Packaging multiselect field in the shipping method settings.
         *
         * @var array Key-value pairs where keys are packaging codes and values are display names.
         */
        private array $ups_packaging_select_options;
        /**
         * Array of UPS Simple Rate packaging options formatted for select fields.
         *
         * This property contains a mapping of Simple Rate packaging codes to their display names,
         * derived from the $simple_rate_packaging property. It's used to populate the options
         * in the UPS Simple Rate Packaging multiselect field in the shipping method settings.
         * The array keys are used as default values for the field when no user selection exists.
         *
         * @var array Key-value pairs where keys are Simple Rate packaging codes and values are display names.
         */
        private array $simple_rate_packaging_select_options;
        /**
         * Constructor.
         *
         * @param int $instance_id Instance ID.
         */
        public function __construct($instance_id = 0)
        {
        }
        /**
         * Checks whether shipping method is available or not.
         *
         * @param array $package Package to ship.
         *
         * @return bool True if shipping method is available.
         */
        public function is_available($package): bool
        {
        }
        /**
         * Output a debug message.
         *
         * @param string $message Debug message.
         * @param string $type    Optional. Message type - either error, success or notice. Default is notice.
         * @param mixed  $data    Optional. Additional data to pass.
         * @param string $group   Optional. Group to categorize notices.
         */
        public function debug(string $message, string $type = 'notice', $data = array(), string $group = '')
        {
        }
        /**
         * Output a WC notice for the customer.
         *
         * @param string $message Customer message.
         * @param string $type    Optional. Message type - either error, success or notice.
         * @param array  $data    Optional. Additional data to pass.
         * @param string $group   Optional. Group to categorize notices.
         */
        public function add_customer_notice(string $message, string $type = 'notice', array $data = array(), string $group = '')
        {
        }
        /**
         * Initialize settings.
         *
         * @return bool
         * @since   3.2.0
         *
         * @version 3.2.0
         */
        private function set_settings(): bool
        {
        }
        /**
         * Initialization.
         *
         * @return void
         */
        private function init()
        {
        }
        /**
         * If the box packer library option is not yet set and there are existing
         * UPS shipping method instances, we can assume that this is not a
         * new/fresh installation of the UPS plugin,
         * so we should default to 'original'
         *
         * If the box packer library option is not set and there are no
         * UPS shipping method instances, then this is likely a new
         * installation of the UPS plugin,
         * so we should default to 'dvdoug'
         *
         * @return string
         */
        public function get_default_box_packer_library(): string
        {
        }
        /**
         * Get the selected simple rate packaging options from user settings.
         *
         * If no settings exist yet, returns all available simple rate packaging options as the default.
         * Otherwise, returns the packaging options specifically selected by the user.
         *
         * @return array Array of selected simple rate packaging codes.
         */
        public function get_selected_simple_rate_packaging(): array
        {
        }
        /**
         * Maybe clear the shipping cache.
         *
         * This is essential for address validation to work correctly.
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
         * After get rates for package callback.
         *
         * @param array              $package Package of cart items.
         * @param WC_Shipping_Method $shipping_method Shipping method instance.
         * @return void
         */
        public function woocommerce_after_get_rates_for_package_callback($package, $shipping_method)
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
         * Process settings on save.
         *
         * @return void
         * @version 3.2.0
         * @since   3.2.0
         */
        public function process_admin_options()
        {
        }
        /**
         * Helper method to split the country/state and set them.
         *
         * @param string $country_state Value of Origin country.
         */
        public function split_country_state(string $country_state)
        {
        }
        /**
         * Environment check.
         *
         * @return void
         */
        private function environment_check()
        {
        }
        /**
         * Check if the API settings are complete.
         *
         * @return bool
         */
        private function are_api_settings_complete(): bool
        {
        }
        /**
         * Admin options.
         *
         * @return void
         */
        public function admin_options()
        {
        }
        /**
         * Get the default API type.
         *
         * If there are existing UPS method instances, default to XML.
         *
         * @return string
         */
        private function get_default_api_type(): string
        {
        }
        /**
         * HTML for origin country option.
         *
         * @used-by WC_Settings_API::generate_settings_html()
         *
         * @return string HTML string.
         */
        public function generate_single_select_country_html(): string
        {
        }
        /**
         * HTML for service option.
         *
         * @used-by WC_Settings_API::generate_settings_html()
         *
         * @return string HTML string.
         */
        public function generate_services_html(): string
        {
        }
        /**
         * HTML for box packing option.
         *
         * @used-by WC_Settings_API::generate_settings_html()
         *
         * @return string HTML string.
         */
        public function generate_box_packing_html(): string
        {
        }
        /**
         * Validate origin country option.
         *
         * @param mixed $key Option's key.
         *
         * @used-by WC_Settings_API::get_field_value()
         *
         * @return string Validated value.
         */
        public function validate_single_select_country_field($key): string
        {
        }
        /**
         * Validate box packing option.
         *
         * @param mixed $key Option's key.
         *
         * @used-by WC_Settings_API::get_field_value()
         *
         * @return array Validated value.
         */
        public function validate_box_packing_field($key): array
        {
        }
        /**
         * Validate services option.
         *
         * @param mixed $key Option's key.
         *
         * @used-by WC_Settings_API::get_field_value()
         *
         * @return array Validated value.
         */
        public function validate_services_field($key): array
        {
        }
        /**
         * Clear UPS transients.
         *
         * @return void
         */
        public function clear_transients()
        {
        }
        /**
         * Set form fields.
         *
         * @since   1.0.0
         * @version 3.2.5
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
         * @used-by WC_Settings_API::generate_settings_html()
         *
         * @return string HTML for oauth_status option.
         */
        public function generate_oauth_status_html(string $key, array $data): string
        {
        }
        /**
         * Calculate shipping cost.
         *
         * @param array $package Package to ship.
         *
         * @version 3.2.5
         *
         * @since   1.0.0
         */
        public function calculate_shipping($package = array())
        {
        }
        /**
         * Maybe validate the destination address.
         *
         * @param array $destination_address Destination address.
         *
         * @return void
         */
        private function maybe_validate_destination_address(array $destination_address)
        {
        }
        /**
         * Public wrapper around address validation used by submission-blocking hooks
         * and the Store API `data()` callback.
         *
         * Validates the address (validator caches per address, so repeat calls are cheap)
         * AND refreshes the "invalid address" notice in the session — so block-checkout
         * responses carry an up-to-date notice even on cart operations that do not re-run
         * calculate_shipping() (e.g. rate-selection updates).
         *
         * Notifier::maybe_add_notice() dedupes by message/type/group, so calling this after
         * calculate_shipping() in the same request does not produce duplicates.
         *
         * @param array $destination_address Destination address to validate.
         * @return void
         */
        public function revalidate_destination_address(array $destination_address)
        {
        }
        /**
         * Check if we should run address validation.
         *
         * @return bool
         */
        public function should_run_address_validation(): bool
        {
        }
        /**
         * Check if this is a WC store REST API request.
         *
         * @return bool
         */
        public function is_store_api_request(): bool
        {
        }
        /**
         * Is the WC checkout url the HTTP referer?
         *
         * @return bool
         */
        public function is_wc_checkout_url(): bool
        {
        }
        /**
         * Rates sorter.
         *
         * @param mixed $a A.
         * @param mixed $b B.
         *
         * @return int
         */
        public function sort_rates($a, $b): int
        {
        }
        /**
         * Get XML package request.
         *
         * @param array $package Package to ship.
         *
         * @return array See self::box_shipping and self::per_item_shipping.
         */
        private function get_package_requests(array $package): array
        {
        }
        /**
         * Build XML package request using per items packing method.
         *
         * @param array $package Package to ship.
         *
         * @return array $requests Array of XML strings.
         * @since   1.0.0
         * @version 3.2.5
         */
        private function per_item_shipping(array $package): array
        {
        }
        /**
         * Checks whether this instance has package service options.
         *
         * @param string $destination_country Country being delivered to.
         *
         * @return bool  True if it has package service options.
         * @since   3.2.5
         * @version 3.2.5
         */
        public function has_package_service_options(string $destination_country): bool
        {
        }
        /**
         * Checks whether this instance needs delivery confirmation.
         *
         * @return bool True if this instance needs delivery confirmation.
         * @version 3.2.5
         *
         * @since   3.2.5
         */
        public function needs_delivery_confirmation(): bool
        {
        }
        /**
         * Checks if delivery confirmation should be at the shipment or package level.
         * See https://github.com/woocommerce/woocommerce-shipping-ups/issues/99
         *
         * @param string $destination_country Country being delivered to.
         *
         * @return string shipment or package
         */
        public function delivery_confirmation_level(string $destination_country): string
        {
        }
        /**
         * Convert dimension.
         *
         * @param mixed  $dimension Dimension (length, width, or height).
         * @param string $from_unit Base unit to convert dimension from. Defaults to the store's dimension unit.
         * @param string $to_unit   Target unit to convert dimension to. Defaults to this instance's dimension unit.
         */
        public function get_converted_dimension($dimension, string $from_unit = '', string $to_unit = '')
        {
        }
        /**
         * Convert weight.
         *
         * @param float|int $weight    Weight.
         * @param string    $from_unit Weight unit to convert from. Defaults to the store's weight unit.
         * @param string    $to_unit   Weight unit to convert to. Defaults to this instance's weight unit.
         */
        public function get_converted_weight($weight, string $from_unit = '', string $to_unit = '')
        {
        }
        /**
         * Get formatted measurement.
         *
         * @param float|int|string $measurement Measurement.
         *
         * @return string Formatted measurement.
         */
        public function get_formatted_measurement($measurement): string
        {
        }
        /**
         * Build XML package request using box packing method.
         *
         * @param array $package Package to ship.
         *
         * @return array Array of XML strings.
         * @since   1.0.0
         * @version 3.2.5
         */
        private function box_shipping(array $package): array
        {
        }
        /**
         * Check if the product has dimensions and weight set.
         * This is used to determine if the product can be packed into a box.
         *
         * @param WC_Product $product Product instance.
         *
         * @return bool
         */
        public function product_can_be_packed(\WC_Product $product): bool
        {
        }
        /**
         * Get the UPS customer classifications.
         *
         * @return array
         */
        public function get_customer_classifications(): array
        {
        }
        /**
         * Returns the corresponding simple rate code if the package qualifies, otherwise returns false.
         *
         * @param int   $length Package length in inches.
         * @param int   $width  Package width in inches.
         * @param int   $height Package height in inches.
         * @param float $weight Package weight in pounds.
         *
         * @return false|string The simple rate code or false
         */
        public function maybe_get_simple_rate_code(int $length, int $width, int $height, float $weight)
        {
        }
        /**
         * Get enabled services.
         *
         * @return array
         */
        public function get_enabled_services(): array
        {
        }
        /**
         * Get enabled service codes.
         *
         * @return array|string[]
         */
        public function get_enabled_service_codes(): array
        {
        }
        /**
         * Check if at least one Simple Rate compatible service is enabled in the settings
         *
         * @return bool
         */
        public function simple_rate_services_enabled(): bool
        {
        }
        /**
         * Check if we are shipping within the United States
         *
         * @return bool
         */
        public function is_domestic_us_shipping(): bool
        {
        }
        /**
         * Get the UPS account user ID.
         *
         * @return mixed
         */
        public function get_user_id()
        {
        }
        /**
         * Get the UPS account password.
         *
         * @return mixed
         */
        public function get_password()
        {
        }
        /**
         * Get the UPS account access key.
         *
         * @return mixed
         */
        public function get_access_key()
        {
        }
        /**
         * Get the UPS account shipper number.
         *
         * @return mixed
         */
        public function get_shipper_number()
        {
        }
        /**
         * Get the UPS customer classification code.
         *
         * @return mixed
         */
        public function get_customer_classification_code()
        {
        }
        /**
         * Get the selected UPS API type.
         *
         * @return string
         */
        public function get_api_type(): string
        {
        }
        /**
         * Get the REST API client ID.
         *
         * @return string
         */
        public function get_client_id(): string
        {
        }
        /**
         * Get the REST API client secret.
         *
         * @return string
         */
        public function get_client_secret(): string
        {
        }
        /**
         * Get the UPS OAuth instance.
         *
         * @return \WooCommerce\UPS\API\REST\OAuth
         */
        public function get_ups_oauth(): \WooCommerce\UPS\API\REST\OAuth
        {
        }
        /**
         * Is UPS Simple Rate enabled?
         *
         * @return bool
         */
        public function is_simple_rate_enabled(): bool
        {
        }
        /**
         * Is negotiated rates enabled?
         *
         * @return bool
         */
        public function is_negotiated_rates_enabled(): bool
        {
        }
        /**
         * Get the dimension unit.
         *
         * @return string
         */
        public function get_dimension_unit(): string
        {
        }
        /**
         * Get the weight unit.
         *
         * @return string
         */
        public function get_weight_unit(): string
        {
        }
        /**
         * Should we flag the destination address as residential?
         *
         * @return bool
         */
        public function is_residential(): bool
        {
        }
        /**
         * Get the service code <> name mappings.
         *
         * @return array|string[]
         */
        public function get_services(): array
        {
        }
        /**
         * Get the UPS services.
         *
         * @return mixed
         */
        public function get_custom_services()
        {
        }
        /**
         * Should the shipment be insured?
         *
         * @return bool
         */
        public function is_insured_value_enabled(): bool
        {
        }
        /**
         * Whether to require a signature or not and if so, what type.
         *
         * @return mixed
         */
        public function get_signature()
        {
        }
        /**
         * Get the origin address line.
         *
         * @return string
         */
        public function get_origin_addressline(): string
        {
        }
        /**
         * Get the origin city.
         *
         * @return string
         */
        public function get_origin_city(): string
        {
        }
        /**
         * Get the origin state.
         *
         * @return string
         */
        public function get_origin_state(): string
        {
        }
        /**
         * Get the origin country.
         *
         * @return string
         */
        public function get_origin_country(): string
        {
        }
        /**
         * Get the origin postcode.
         *
         * @return string
         */
        public function get_origin_postcode(): string
        {
        }
        /**
         * Is debug mode enabled?
         *
         * @return bool
         */
        public function is_debug_mode_enabled(): bool
        {
        }
        /**
         * Is destination address validation enabled?
         *
         * @return bool
         */
        public function is_destination_address_validation_enabled(): bool
        {
        }
        /**
         * Is address validation in lenient mode?
         *
         * @return bool
         */
        public function is_lenient_address_validation(): bool
        {
        }
        /**
         * Is the current invalid address a soft invalid?
         *
         * A soft invalid address is one where UPS found a potential match and returned a suggestion,
         * but the entered address is not an exact match. PO Boxes and addresses with no match at all
         * are considered hard invalid.
         *
         * @return bool
         */
        public function is_soft_invalid_address(): bool
        {
        }
        /**
         * Should submission be blocked for the current destination address?
         *
         * True when the address is invalid AND any of:
         *  - hard-invalid (PO Box or no suggestion at all), OR
         *  - strict mode (merchant setting).
         *
         * UPS rates are still offered in all cases (so Core does not fall back to Local Pickup),
         * but selection/submission is prevented via CSS (classic) and REST/validation errors.
         *
         * @return bool
         */
        public function should_block_invalid_address(): bool
        {
        }
        /**
         * Is any UPS rate currently chosen (or no rate chosen yet) for the customer's packages?
         *
         * Used to suppress UPS address-validation notices when the customer has already chosen
         * a non-UPS delivery option (e.g. Local Pickup) so the notice only surfaces when it is
         * actually relevant to the selected shipping.
         *
         * @return bool True when no selection yet, or at least one package uses a UPS rate.
         */
        public static function chosen_methods_include_ups(): bool
        {
        }
        /**
         * Does the passed country support address validation?
         *
         * @param string $country The country code.
         *
         * @return bool
         */
        public function country_supports_address_validation($country): bool
        {
        }
        /**
         * Set whether the destination address is valid.
         *
         * @param bool $is_valid Is the destination address valid.
         *
         * @return void
         */
        public function set_is_valid_destination_address(bool $is_valid)
        {
        }
        /**
         * Is the destination address valid?
         *
         * @return bool
         */
        public function is_destination_address_valid(): bool
        {
        }
        /**
         * Add an invalid address notice if the right conditions are met.
         *
         * @return void
         */
        private function maybe_add_invalid_destination_address_notice()
        {
        }
        /**
         * Check if the address is complete.
         *
         * @param array $address The address to check.
         *
         * @return bool
         */
        public function is_address_complete(array $address): bool
        {
        }
        /**
         * If enabled, add UPS standard packaging box sizes to the boxpacker instance.
         *
         * @param \WooCommerce\BoxPacker\Abstract_Packer $boxpack The boxpacker instance.
         *
         * @return void
         */
        public function maybe_add_ups_packaging_boxpacker_boxes(\WooCommerce\BoxPacker\Abstract_Packer $boxpack)
        {
        }
        /**
         * If any exist, add custom defined box sizes to the boxpacker instance.
         *
         * @param \WooCommerce\BoxPacker\Abstract_Packer $boxpack The boxpacker instance.
         *
         * @return void
         */
        public function maybe_add_custom_defined_boxpacker_boxes(\WooCommerce\BoxPacker\Abstract_Packer $boxpack)
        {
        }
        /**
         * Add a WooCommerce notice to let the user know the destination address is invalid.
         *
         * @return void
         */
        private function add_invalid_destination_address_notice()
        {
        }
        /**
         * Get the invalid destination address notice message.
         *
         * @return string
         */
        public function get_invalid_destination_address_notice_message(): string
        {
        }
        /**
         * Maybe display the XML API deprecation notice and disable the XML API settings.
         *
         * @return void
         */
        private function maybe_disable_xml_api()
        {
        }
        /**
         * Check if the XML API is configured.
         *
         * @return bool
         */
        public function is_xml_api_configured(): bool
        {
        }
        /**
         * Show the XML API deprecation notice.
         *
         * @return void
         */
        public function show_xml_api_deprecated_notice()
        {
        }
        /**
         * Check if the user is on the UPS settings page.
         *
         * @return bool
         */
        public function is_ups_settings_page(): bool
        {
        }
        /**
         * Helper method to get the number of UPS method instances.
         *
         * @return int The number of UPS method instances
         */
        public function instance_count(): int
        {
        }
        /**
         * Helper method to check if there are existing UPS method instances.
         *
         * @return bool
         */
        public function instances_exist(): bool
        {
        }
    }
}
namespace {
    \define('WC_SHIPPING_UPS_VERSION', '3.9.18');
    // WRCS: DEFINED_VERSION.
    \define('WC_SHIPPING_UPS_PLUGIN_DIR', __DIR__);
    \define('WC_SHIPPING_UPS_PLUGIN_URL', \untrailingslashit(\plugins_url('', __FILE__)));
    \define('WC_SHIPPING_UPS_DIST_DIR', \WC_SHIPPING_UPS_PLUGIN_DIR . '/dist/');
    \define('WC_SHIPPING_UPS_DIST_URL', \WC_SHIPPING_UPS_PLUGIN_URL . '/dist/');
    /**
     * Plugin activation check
     */
    function wc_ups_activation_check()
    {
    }
    /**
     * Initialize plugin.
     */
    function wc_shipping_ups_init()
    {
    }
}