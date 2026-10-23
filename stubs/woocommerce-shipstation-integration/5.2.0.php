<?php
/**
 * Generated stub declarations for woocommerce-shipstation-integration 5.2.0.
 * @see https://github.com/woocommerce/all-plugins/tree/stubs
 */

namespace {
    /**
     * WC_Shipstation_API_Request Class
     */
    abstract class WC_Shipstation_API_Request
    {
        /**
         * Stores logger class.
         *
         * @var WC_Logger
         */
        private $log = \null;
        /**
         * Log something.
         *
         * @param string $message Log message.
         */
        public function log($message)
        {
        }
        /**
         * Run the request
         */
        public function request()
        {
        }
        /**
         * Validate data.
         *
         * @param array $required_fields fields to look for.
         */
        protected function validate_input($required_fields)
        {
        }
        /**
         * Trigger and log an error.
         *
         * @param string $message Error message.
         * @param int    $status_code Error status code.
         */
        public function trigger_error($message, $status_code = 400)
        {
        }
    }
    /**
     * WC_Shipstation_API_Export Class
     */
    class WC_Shipstation_API_Export extends \WC_Shipstation_API_Request
    {
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Preparing `IN` sql statement using `WPDB::prepare()`.
         *
         * @param array $values IN values.
         */
        private static function prepare_in($values)
        {
        }
        /**
         * Parse a ShipStation date string into a Unix timestamp.
         *
         * @see https://help.shipstation.com/hc/en-us/articles/360025856192 - Custom Store Development Guide:
         *      "The start date is UTC time. Format: MM/dd/yyyy HH:mm (24 hour notation)."
         *
         * @param string $date_string Date string from ShipStation (UTC).
         * @return int|false Unix timestamp, or false on failure.
         */
        private function parse_shipstation_date($date_string)
        {
        }
        /**
         * Do the request
         */
        public function request()
        {
        }
        /**
         * Append XML as cdata.
         *
         * @param DOMElement $append_to XML DOMElement to append to.
         * @param string     $name      Element name.
         * @param mixed      $value     Element value.
         * @param boolean    $cdata     Using cData or not.
         */
        private function xml_append($append_to, $name, $value, $cdata = \true)
        {
        }
        /**
         * Convert weight unit abbreviation to Shipstation enum (Pounds, Ounces, Grams).
         *
         * @param string $unit_abbreviation Weight unit abbreviation.
         */
        private function get_shipstation_weight_units($unit_abbreviation)
        {
        }
    }
    /**
     * WC_Shipstation_API_Shipnotify Class
     */
    class WC_Shipstation_API_Shipnotify extends \WC_Shipstation_API_Request
    {
        /**
         * Constructor.
         */
        public function __construct()
        {
        }
        /**
         * Get the order ID from the order number.
         *
         * @param string $order_number Order number.
         * @return integer
         */
        private function get_order_id($order_number)
        {
        }
        /**
         * Get Parsed XML response.
         *
         * @param  string $xml XML.
         * @return SimpleXMLElement|false
         */
        private function get_parsed_xml($xml)
        {
        }
        /**
         * Handling the request.
         *
         * @since 1.0.0
         * @version 4.1.18
         */
        public function request()
        {
        }
    }
}
namespace WooCommerce\Shipping\ShipStation\API\REST {
    /**
     * API_Controller class.
     */
    class API_Controller
    {
        /**
         * Stable error code returned when ShipStation Basic Auth fails. Surfaced so
         * the WPCOM proxy and direct callers see one consistent failure shape.
         */
        const REST_INVALID_CREDENTIALS = 'rest_shipstation_invalid_credentials';
        /**
         * Minimum seconds between persisted writes of the last-success latch
         * ({@see Connection_Log::LAST_SUCCESS_OPTION}). The latch only answers "did a
         * real sync land recently?" for the global broken-connection banner, which
         * itself arms only after the 24h inactivity window — second-level precision is
         * needless. Throttling the write keeps the hot REST auth path from issuing a
         * `wp_options` UPDATE on every request of a paginated sync. Mirrors
         * {@see Connection_Log::THROTTLE_SECONDS}.
         */
        const LAST_SUCCESS_THROTTLE_SECONDS = 300;
        /**
         * Per-request memoisation of looked-up woocommerce_api_keys rows, keyed by
         * the `wc_api_hash()` digest of the inbound consumer_key. Repeated
         * permission_callback invocations during a single dispatch reuse the row
         * fetched on the first call.
         *
         * @var array<string, \stdClass|null>
         */
        private static array $api_key_row_cache = array();
        /**
         * Log something.
         *
         * @param string $message Log message.
         */
        public function log($message)
        {
        }
        /**
         * Permission gate shared by every /wc-shipstation/v1/* route.
         *
         * Behaviour depends on the WPCOM transport flag AND whether the request
         * actually arrived through the WPCOM proxy, signalled by the presence of the
         * `X-ShipStation-Authorization` relay header:
         *
         *  - Flag ON + proxied (relay header present): the request must carry the
         *    ShipStation-issued Basic Auth credential. On match, the current user is
         *    set to that key's owner so the downstream wc_rest_check_manager_permissions
         *    check sees an authenticated identity even on `?rest_route=` URLs (which
         *    bypass WC_REST_Authentication's `/wp-json/wc-*` prefix test). The
         *    `wc_shipstation_user_can_manage_wc` filter is then applied as the
         *    second layer.
         *  - Flag ON + direct (no relay header): the strict step is skipped. WC core's
         *    `WC_REST_Authentication` remains the auth authority, which preserves the
         *    query-string consumer_key/secret fallback that misconfigured hosts
         *    (CGI/FastCGI, header-stripping WAFs) depend on. Scoping the strict gate to
         *    proxied requests is what keeps that fallback working once the flag is on
         *    (SHIPSTN-132).
         *  - Flag OFF: the strict step is skipped. The public
         *    `wc_shipstation_user_can_manage_wc` filter is the sole authority,
         *    preserving trunk semantics for sites that have not opted in.
         *
         * @since 5.0.5
         * @since 5.0.9 Strict gate scoped to proxied requests (relay header present).
         *
         * @param \WP_REST_Request $request Current REST request.
         * @param string          $context wc_rest_check_manager_permissions context, e.g. 'attributes'.
         * @param string          $action  wc_rest_check_manager_permissions action, 'read' or 'create'.
         * @return bool|\WP_Error `true` when authorized; `false` when the capability
         *                       layer (`wc_rest_check_manager_permissions` and the
         *                       `wc_shipstation_user_can_manage_wc` filter) rejects.
         *                       `WP_Error(401, rest_shipstation_invalid_credentials)`
         *                       only on Basic Auth failure (credential missing or
         *                       wrong, or the key owner cannot be resolved).
         */
        protected function check_namespace_permission(\WP_REST_Request $request, string $context, string $action)
        {
        }
        /**
         * Build the standard 401 response returned by every ShipStation REST
         * permission callback when the Basic Auth credential check fails.
         *
         * Centralised so the error code, message and status stay consistent
         * across controllers.
         *
         * @since 5.0.5
         *
         * @return \WP_Error
         */
        protected function invalid_credentials_error(): \WP_Error
        {
        }
        /**
         * Validate the inbound Basic Auth credential and return the matching
         * woocommerce_api_keys row on success, or null on any failure. The strict
         * gate uses the returned row's user_id to authenticate the request without
         * a second DB lookup.
         *
         * The credential is read exclusively from the `X-ShipStation-Authorization`
         * relay header: the only caller is the strict gate in
         * check_namespace_permission(), which runs only for proxied requests (relay
         * header present). Direct (non-proxied) calls are authenticated upstream by
         * WC core's WC_REST_Authentication, not here.
         *
         * The lookup hashes the inbound consumer_key and queries the row by that
         * hash. We deliberately do not pin to `woocommerce_shipstation_api_key_id`:
         * stores that issued ShipStation keys before the auth modal landed (plugin
         * versions before 5.0.3) never wrote that option, and pinning would 401
         * their existing valid credentials. The relaxation matches WC core's own
         * `WC_REST_Authentication` model for `/wp-json/wc-*` URLs; the second-layer
         * `wc_rest_check_manager_permissions` capability check still gates access.
         *
         * @since 5.0.5
         *
         * @param \WP_REST_Request $request Current REST request.
         * @return \stdClass|null woocommerce_api_keys row (user_id, consumer_key,
         *                       consumer_secret) on success; null on rejection.
         */
        private function resolve_authenticated_api_key_row(\WP_REST_Request $request): ?\stdClass
        {
        }
        /**
         * Fetch the woocommerce_api_keys row whose consumer_key column matches the
         * given `wc_api_hash()` digest, memoised for the request lifetime so
         * repeated permission_callback invocations during a single dispatch do
         * not re-hit the database.
         *
         * @since 5.0.5
         *
         * @param string $hashed_consumer_key `wc_api_hash()` of the inbound key.
         * @return \stdClass|null DB row, or null when no row matches.
         */
        private function fetch_api_key_row_by_hash(string $hashed_consumer_key): ?\stdClass
        {
        }
        /**
         * Stamp last_access on the authenticated key row, once per request.
         *
         * Mirrors WC_REST_Authentication::update_last_access(); the per-request
         * guard keeps repeated permission_callback invocations during a single
         * dispatch from re-writing the row.
         *
         * @since 5.2.0
         *
         * @param int $key_id Authenticated woocommerce_api_keys row id.
         */
        private function update_api_key_last_access(int $key_id): void
        {
        }
        /**
         * Record 'direct' as an observed transport for the plugin key that
         * authenticated this direct (non-proxied) request.
         *
         * Telemetry for the key list's "Type" column and the connection log — it
         * never affects the auth decision (WC core authenticated the request
         * upstream). Scoped to our own keys: a credential that does not resolve to a
         * plugin-prefixed row is ignored. The connection log throttles repeat writes,
         * so a steadily polling store adds no per-request overhead beyond one lookup.
         *
         * @since 5.2.0
         *
         * @param \WP_REST_Request $request Current REST request.
         *
         * @return void
         */
        private function record_direct_connection(\WP_REST_Request $request): void
        {
        }
        /**
         * Record a rejected WordPress.com proxy attempt as a 'wpcom' connection.
         *
         * With the transport off, ShipStation may still be pointed at the proxy Store
         * URL and keep polling; the store rejects those requests (the strict gate never
         * sets a user while the toggle is off), but recording the attempt lets the
         * connection list surface the disabled, store-rejected route as live rather
         * than frozen. The credential is verified, so only a genuine ShipStation
         * attempt is recorded — a bare probe is ignored. Never sets a user; telemetry.
         *
         * The live proxy URL can't be resolved while the transport is off (the
         * connection facade is gated by the toggle), so the key's existing wpcom row
         * URL is reused rather than spawning a urless duplicate row.
         *
         * @param \WP_REST_Request $request Current REST request.
         *
         * @return void
         */
        private function record_rejected_proxy_connection(\WP_REST_Request $request): void
        {
        }
        /**
         * Stamp the UTC epoch of a real, post-feature successful plugin-key auth so
         * the global broken-connection banner can latch "was working" (SHIPSTN-142).
         *
         * Called from the two SUCCESS record sites only — the proxied gate and the
         * direct path, both already scoped to plugin keys — never from the rejected-
         * proxy path (a turned-away request is not a success). The option name is a
         * constant on Connection_Log (already loaded in REST context); the renderer
         * reads the same constant. Non-autoloaded — read only on the WC settings
         * admin render, never on a front-end page load.
         *
         * The write is throttled to a {@see LAST_SUCCESS_THROTTLE_SECONDS} window so the
         * latch costs nothing on the hot path: the `wp_options` UPDATE is skipped across
         * the many requests of a paginated sync (and across repeated permission_callback
         * invocations within a single dispatch, where the second read is served from the
         * option cache). A genuinely broken connection has no successful sync for >24h,
         * so the stored value is far outside the window when recovery lands — the latch
         * always advances on the first real success (and on the first-ever success,
         * where the stored value is 0).
         *
         * @since 5.2.0
         *
         * @return void
         */
        private function stamp_last_success(): void
        {
        }
        /**
         * The WordPress.com proxy Store URL for this site, or '' when it cannot be
         * resolved (no connection facade / not connected). Used as the source URL of
         * a proxied connection record.
         *
         * @since 5.2.0
         *
         * @return string
         */
        private function wpcom_proxy_url(): string
        {
        }
        /**
         * Emit a diagnostic breadcrumb for a recorded ShipStation connection so a
         * support engineer can see which key + URL + transport ShipStation is using
         * when a merchant reports a connection problem. Debug-gated.
         *
         * @since 5.2.0
         *
         * @param string          $transport     'wpcom' or 'direct'.
         * @param int             $key_id        Authenticated key row id.
         * @param string          $truncated_key Last-7 of the consumer key.
         * @param string          $url           Source URL ShipStation connected on.
         * @param \WP_REST_Request $request       Current REST request.
         *
         * @return void
         */
        private function log_connection(string $transport, int $key_id, string $truncated_key, string $url, \WP_REST_Request $request): void
        {
        }
        /**
         * Read the consumer key a direct request presented, from the standard
         * Authorization Basic header or the query-string `consumer_key` fallback
         * (the same two places WC core's WC_REST_Authentication looks). Only the
         * key is needed — to identify the row — not the secret; WC core already
         * validated the credential on this path.
         *
         * @since 5.2.0
         *
         * @param \WP_REST_Request $request Current REST request.
         *
         * @return string Plain consumer key, or '' when none is present.
         */
        private function read_direct_consumer_key(\WP_REST_Request $request): string
        {
        }
        /**
         * Decode an `Authorization: Basic …` header value into a consumer key / secret pair.
         *
         * @param string $authorization Raw header value.
         * @return array{0: string, 1: string} Key and secret, both '' on any failure.
         */
        private function parse_basic_auth_payload(string $authorization): array
        {
        }
    }
    /**
     * Checkout_Rates_Controller class.
     */
    class Checkout_Rates_Controller extends \WooCommerce\Shipping\ShipStation\API\REST\API_Controller
    {
        /**
         * Namespace for the REST API
         *
         * @var string
         */
        protected string $namespace = 'wc-shipstation/v1';
        /**
         * REST base for the controller.
         *
         * @var string
         */
        protected string $rest_base = 'checkout-rates';
        /**
         * Register the routes for the controller.
         *
         * @since 5.0.9
         */
        public function register_routes(): void
        {
        }
        /**
         * REST API permission callback for GET routes.
         *
         * Checkout_Rates_Controller has no GET routes; this exists so shared
         * Permission_Test_Trait tests can exercise the namespace gate.
         *
         * @since 5.0.9
         *
         * @param \WP_REST_Request $request Current REST request.
         * @return bool|\WP_Error See API_Controller::check_namespace_permission().
         */
        public function check_get_permission(\WP_REST_Request $request)
        {
        }
        /**
         * REST API permission callback for POST /checkout-rates/* routes.
         *
         * @since 5.0.9
         *
         * @param \WP_REST_Request $request Current REST request.
         * @return bool|\WP_Error See API_Controller::check_namespace_permission().
         */
        public function check_update_permission(\WP_REST_Request $request)
        {
        }
        /**
         * Configure Checkout Rates by storing the ShipStation-issued rates URL.
         *
         * Validates the URL, rejects SSRF targets, stores via
         * Checkout_Rates_Options::set_rates_url().
         *
         * @since 5.0.9
         *
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        public function configure(\WP_REST_Request $request): \WP_REST_Response
        {
        }
        /**
         * Deactivate Checkout Rates by clearing the stored rates URL.
         *
         * Idempotent: always returns success even if no URL was stored.
         *
         * @since 5.0.9
         *
         * @param \WP_REST_Request $request Request object.
         * @return \WP_REST_Response
         */
        public function deactivate(\WP_REST_Request $request): \WP_REST_Response
        {
        }
        /**
         * Validate a rates URL for safety.
         *
         * Rejects:
         *  - Invalid URLs
         *  - Non-HTTPS URLs
         *  - localhost / loopback / private IP ranges (SSRF prevention)
         *
         * @param string $url Raw URL to validate.
         * @return true|\WP_Error True when valid; WP_Error otherwise.
         */
        private function validate_rates_url(string $url)
        {
        }
        /**
         * Build a standard success response.
         *
         * @return \WP_REST_Response
         */
        private function build_success_response(): \WP_REST_Response
        {
        }
        /**
         * Build a standard error response.
         *
         * @param string $message Error code/message.
         * @param int    $status HTTP status code.
         * @return \WP_REST_Response
         */
        private function build_error_response(string $message, int $status): \WP_REST_Response
        {
        }
    }
    /**
     * Diagnostics_Controller class.
     */
    class Diagnostics_Controller extends \WooCommerce\Shipping\ShipStation\API\REST\API_Controller
    {
        /**
         * Transient key under which the diagnostics details payload is cached.
         *
         * Public so tests can reference the key instead of duplicating the literal.
         *
         * @since 5.1.0
         *
         * @var string
         */
        public const DETAILS_TRANSIENT_KEY = 'wc_shipstation_diagnostics_details';
        /**
         * Namespace for the REST API
         *
         * @var string
         */
        protected string $namespace = 'wc-shipstation/v1';
        /**
         * REST base for the controller.
         *
         * @var string
         */
        protected string $rest_base = 'diagnostics';
        /**
         * Register the routes for the controller.
         */
        public function register_routes(): void
        {
        }
        /**
         * REST API permission callback for GET /diagnostics/details.
         *
         * @param \WP_REST_Request $request Current REST request.
         * @return bool|\WP_Error See API_Controller::check_namespace_permission().
         */
        public function check_get_permission(\WP_REST_Request $request)
        {
        }
        /**
         * REST API permission callback for POST /diagnostics/validate.
         *
         * @param \WP_REST_Request $request Current REST request.
         * @return bool|\WP_Error See API_Controller::check_namespace_permission().
         */
        public function check_creatable_permission(\WP_REST_Request $request)
        {
        }
        /**
         * Retrieve the site information.
         *
         * Reads environment values directly from PHP/WP/WC constants and options to
         * avoid dispatching the expensive WooCommerce system_status REST request on
         * every call. The raw response is cached in a transient for 5 minutes and
         * invalidated when plugins are activated or deactivated.
         *
         * @param \WP_REST_Request $request Request object.
         *
         * @return \WP_REST_Response
         */
        public function get_details(\WP_REST_Request $request): \WP_REST_Response
        {
        }
        /**
         * Build the human-readable memory limit string.
         *
         * Mirrors WooCommerce's system_status semantics: the effective limit is the
         * greater of WP_MEMORY_LIMIT and PHP's ini memory_limit, since WordPress
         * raises the runtime limit to WP_MEMORY_LIMIT but never lowers it below the
         * ini value. A non-positive result (e.g. ini memory_limit of -1) means
         * unlimited and is reported as an empty string, matching the prior behavior.
         *
         * @since 5.1.0
         *
         * @return string
         */
        private function get_memory_limit(): string
        {
        }
        /**
         * Build a comma-separated "Name Version" string for all active plugins.
         *
         * Reads plugin file headers from disk — no DB queries.
         * On multisite, network-active plugins are included.
         *
         * @since 5.1.0
         *
         * @return string
         */
        private function get_active_plugins_string(): string
        {
        }
        /**
         * Register cache-invalidation hooks.
         *
         * Called from REST_API_Loader::init() so hooks are active on admin requests
         * (plugin activation/deactivation) as well as REST requests.
         *
         * Note: plugin updates fire neither activated_plugin nor deactivated_plugin,
         * so updated version strings rely on the 5-minute transient TTL — this
         * staleness window is accepted.
         *
         * @since 5.1.0
         *
         * @return void
         */
        public static function register_hooks(): void
        {
        }
        /**
         * Delete the diagnostics transient cache.
         *
         * @since 5.1.0
         *
         * @return void
         */
        public static function clear_cache(): void
        {
        }
        /**
         * Validating the site.
         *
         * @param \WP_REST_Request $request Request object.
         *
         * @return \WP_REST_Response
         */
        public function validate_site(\WP_REST_Request $request): \WP_REST_Response
        {
        }
    }
    /**
     * Inventory_Controller class.
     */
    class Inventory_Controller extends \WooCommerce\Shipping\ShipStation\API\REST\API_Controller
    {
        /**
         * Namespace for the REST API
         *
         * @var string
         */
        protected string $namespace = 'wc-shipstation/v1';
        /**
         * REST base for the controller.
         *
         * @var string
         */
        protected string $rest_base = 'inventory';
        /**
         * Register the routes for the controller.
         */
        public function register_routes(): void
        {
        }
        /**
         * REST API permission callback for GET /inventory* routes.
         *
         * @param \WP_REST_Request $request Current REST request.
         * @return bool|\WP_Error See API_Controller::check_namespace_permission().
         */
        public function check_get_permission(\WP_REST_Request $request)
        {
        }
        /**
         * REST API permission callback for POST /inventory/update.
         *
         * @param \WP_REST_Request $request Current REST request.
         * @return bool|\WP_Error See API_Controller::check_namespace_permission().
         */
        public function check_update_permission(\WP_REST_Request $request)
        {
        }
        /**
         * Get product data for API response.
         *
         * @param \WC_Product $product Product object.
         *
         * @return array Product data.
         */
        private function get_product_data(\WC_Product $product): array
        {
        }
        /**
         * Get product data by product ID.
         *
         * @param int $product_id Product ID.
         *
         * @return array
         */
        public function get_product_data_by_id(int $product_id): array
        {
        }
        /**
         * Get a REST response with the provided product data.
         *
         * @param array $product_data Product data array.
         *
         * @return \WP_REST_Response
         */
        private function get_product_response(array $product_data): \WP_REST_Response
        {
        }
        /**
         * Retrieve the inventory stock data for a specific product by ID.
         *
         * @param \WP_REST_Request $request Request object.
         *
         * @return \WP_REST_Response
         */
        public function get_inventory_by_id(\WP_REST_Request $request): \WP_REST_Response
        {
        }
        /**
         * Retrieve the inventory stock data for a specific product by SKU.
         *
         * @param \WP_REST_Request $request Request object.
         *
         * @return \WP_REST_Response
         */
        public function get_inventory_by_sku(\WP_REST_Request $request): \WP_REST_Response
        {
        }
        /**
         * Retrieve the inventory stock data for all products and variations.
         *
         * @param \WP_REST_Request $request Request object.
         *
         * @return \WP_REST_Response
         */
        public function get_inventory(\WP_REST_Request $request): \WP_REST_Response
        {
        }
        /**
         * Update inventory stock for specified SKUs (both products and variations).
         *
         * @param \WP_REST_Request $request Request object.
         *
         * @return \WP_REST_Response
         */
        public function update_inventory(\WP_REST_Request $request): \WP_REST_Response
        {
        }
    }
    /**
     * Orders_Controller class.
     */
    class Orders_Controller extends \WooCommerce\Shipping\ShipStation\API\REST\API_Controller
    {
        /**
         * Namespace for the REST API
         *
         * @var string
         */
        protected string $namespace = 'wc-shipstation/v1';
        /**
         * REST base for the controller.
         *
         * @var string
         */
        protected string $rest_base = 'orders';
        /**
         * Per-order currency code used for export context.
         *
         * @var string
         */
        private string $currency_code = '';
        /**
         * Per-order exchange rate used to convert monetary values for ShipStation.
         *
         * @var float
         */
        private float $exchange_rate = 1.0;
        /**
         * Whether to export discounts as adjustment entries in the payment info.
         *
         * @var bool
         */
        private bool $export_discounts_as_separate_item = true;
        /**
         * Initialize per-order context values using filters.
         *
         * @param \WC_Order $order Order object.
         * @return void
         */
        private function set_order_context(\WC_Order $order): void
        {
        }
        /**
         * Get the per-order currency code.
         */
        private function get_currency_code(): string
        {
        }
        /**
         * Get the per-order exchange rate.
         */
        private function get_exchange_rate(): float
        {
        }
        /**
         * Whether to export discounts as a separate adjustment item.
         */
        private function should_export_discounts_as_separate_item(): bool
        {
        }
        /**
         * Register the routes for the controller.
         */
        public function register_routes(): void
        {
        }
        /**
         * REST API permission callback for GET /orders.
         *
         * @param \WP_REST_Request $request Current REST request.
         * @return bool|\WP_Error See API_Controller::check_namespace_permission().
         */
        public function check_get_permission(\WP_REST_Request $request)
        {
        }
        /**
         * REST API permission callback for POST /orders/shipments.
         *
         * @param \WP_REST_Request $request Current REST request.
         * @return bool|\WP_Error See API_Controller::check_namespace_permission().
         */
        public function check_update_permission(\WP_REST_Request $request)
        {
        }
        /**
         * Get mapped WC order status with ShipStation status.
         *
         * @return array
         */
        public function get_order_status_mapping(): array
        {
        }
        /**
         * Map a WooCommerce order status to its ShipStation `SalesOrderStatus`.
         *
         * A status with no mapping falls back to `OnHold`, which holds the order for
         * review instead of auto-shipping it: an unmapped status's intent is unknown,
         * and a hold is recoverable while a shipment is not (SHIPSTN-131).
         *
         * @param string        $order_status The WC order status to map.
         * @param \WC_Order|null $order        The order being exported, for log context. Optional.
         *
         * @return string A ShipStation `SalesOrderStatus` value.
         */
        public function get_shipstation_status_from_order(string $order_status, ?\WC_Order $order = null): string
        {
        }
        /**
         * Get the order status mapping.
         *
         * @param string $status The ShipStation status to map.
         *
         * @return array
         */
        public function get_order_status_from_shipstation(string $status): array
        {
        }
        /**
         * Retrieve the orders data.
         *
         * @param \WP_REST_Request $request Request object.
         *
         * @return \WP_REST_Response
         */
        public function get_orders(\WP_REST_Request $request): \WP_REST_Response
        {
        }
        /**
         * Fetch and map a specific set of orders by WC order ID.
         *
         * Called when the `order_ids` request parameter is present. Bypasses
         * the normal modified_after/pagination query and returns orders regardless
         * of their WC status. IDs not found in the database are logged as warnings
         * and omitted from the response.
         *
         * @since 5.1.0
         *
         * @param int[] $requested_ids Sanitised list of positive integer order IDs.
         * @return \WP_REST_Response
         */
        private function get_orders_by_id_param(array $requested_ids): \WP_REST_Response
        {
        }
        /**
         * Bulk-fetch orders and return them indexed by ID.
         *
         * This is intentionally a second query. The upstream `wc_get_orders()` call in
         * `get_orders()` uses `'return' => 'ids'` so it can retrieve pagination metadata
         * (`total`, `max_num_pages`) without instantiating full order objects. After that
         * cheap ID fetch, the `woocommerce_shipstation_export_order` filter runs per-ID and
         * may remove some orders from the set. This method then bulk-hydrates only the
         * orders that survived the filter, so no work is done for skipped orders.
         *
         * Passing all IDs at once to `wc_get_orders( [ 'post__in' => $ids ] )` is more
         * efficient than N individual `wc_get_order()` calls on both storage backends:
         * under HPOS it routes through `OrdersTableDataStore::read_multiple()`, which
         * batches the orders/addresses/meta table queries for the whole set; under the
         * legacy CPT backend, the underlying `WP_Query( post__in )` primes the WordPress
         * post cache for every ID in one round trip so the per-order `read()` calls that
         * follow are cache hits.
         *
         * @since 5.0.4
         * @since 5.1.0 Added the $extra_query_args parameter.
         *
         * @param int[] $order_ids        Order IDs to fetch.
         * @param array $extra_query_args Optional extra args merged into the wc_get_orders() call.
         * @return array<int, \WC_Order> Order objects indexed by ID.
         */
        private function get_orders_by_ids(array $order_ids, array $extra_query_args = array()): array
        {
        }
        /**
         * Warm caches for the current batch of orders before the payload pass.
         *
         * Primes `wc_order_items` and `wc_order_itemmeta` for every order in the batch
         * in two queries. HPOS inherits `read_items()` from the CPT store but does not
         * trigger its bulk priming helper, so without this the first `$order->get_items()`
         * on each order issues a separate SELECT.
         *
         * @since 5.0.4
         *
         * @param int[] $order_ids Orders IDs.
         * @return void
         */
        private function prime_batch_caches(array $order_ids): void
        {
        }
        /**
         * Get order data for the response.
         *
         * @param \WC_Order $order The order object.
         *
         * @return array
         */
        public function get_order_data(\WC_Order $order): array
        {
        }
        /**
         * Get buyer information from order.
         *
         * @param \WC_Order $order Order object.
         *
         * @return array
         */
        public function get_buyer(\WC_Order $order): array
        {
        }
        /**
         * Get Payment info for the order data.
         *
         * @param \WC_Order $order      Order object.
         * @param array    $extra_args Extra args.
         *
         * @return array
         */
        public function get_payment_info(\WC_Order $order, array $extra_args): array
        {
        }
        /**
         * Populates payment adjustment entries for order discounts in the ShipStation REST API payload.
         *
         * Coupon codes are also mapped to `payment.coupon_code` (single coupon) or
         * `payment.coupon_codes` (multiple coupons) in the payload.
         *
         * @param array    $payment_info The payment info array being built for the ShipStation API payload.
         * @param \WC_Order $order        The order object.
         *
         * @return array The modified payment info array with adjustment entries populated.
         */
        private function set_payment_adjustments(array $payment_info, \WC_Order $order): array
        {
        }
        /**
         * Get the payment status for ShipStation based on WooCommerce order status.
         *
         * @param string $order_status The WooCommerce order status.
         *
         * @return string
         */
        public function get_payment_status(string $order_status): string
        {
        }
        /**
         * Get the taxes for the order.
         *
         * @param array $order_taxes Order taxes.
         * @param array $extra_args  Extra args.
         *
         * @return array
         */
        public function get_taxes(array $order_taxes, array $extra_args): array
        {
        }
        /**
         * Get the shipping charges for the order.
         *
         * @param array $order_shipping_methods Order shipping methods.
         * @param array $extra_args Extra args.
         *
         * @return array
         */
        public function get_shipping_charges($order_shipping_methods, $extra_args): array
        {
        }
        /**
         * Format a WC_DateTime as a ShipStation-compatible ISO 8601 UTC string.
         *
         * @param \WC_DateTime|null $date The date object to format.
         *
         * @return string ISO 8601 UTC string (e.g., '2025-01-15T14:30:00.000Z'), or empty string if null.
         */
        public function get_shipstation_date_format(?\WC_DateTime $date): string
        {
        }
        /**
         * Get requested fulfillments for the order.
         *
         * @param \WC_Order $order      The order object.
         * @param array    $extra_args Extra args.
         *
         * @return array
         */
        public function get_requested_fulfillments(\WC_Order $order, array $extra_args): array
        {
        }
        /**
         * Get fulfillment info.
         *
         * @param array    $fulfillment_items Fulfillment items.
         * @param \WC_Order $order             Order object.
         * @param string   $fulfillment_id    WC Fulfillment ID.
         *
         * @return array
         */
        public function get_fulfillment(array $fulfillment_items, \WC_Order $order, string $fulfillment_id = ''): array
        {
        }
        /**
         * Get fulfillment item from WC Fulfillment.
         *
         * @param \WC_Order_Item $item       Order item object.
         * @param \WC_Order      $order      Order object.
         * @param int           $quantity   Item quantity.
         * @param array         $extra_args Extra args.
         */
        public function get_fulfillment_item($item, $order, $quantity = 0, $extra_args = array())
        {
        }
        /**
         * Get returns info for the order.
         *
         * @param \WC_Order $order Order object.
         *
         * @return array
         */
        public function get_returns($order)
        {
        }
        /**
         * Get return requested fulfillments for the order refund.
         *
         * @param \WC_Order_Refund $order_refund Order refund object.
         *
         * @return array
         */
        public function get_return_requested_fulfillments($order_refund)
        {
        }
        /**
         * Get refunds info for the order refund.
         *
         * @param \WC_Order_Refund $order_refund Order refund object.
         *
         * @return array
         */
        public function get_refund_data($order_refund)
        {
        }
        /**
         * Get return item refunds for the order refund.
         *
         * @param \WC_Order_Refund $order_refund Order refund object.
         *
         * @return array
         */
        public function get_return_item_refunds($order_refund)
        {
        }
        /**
         * Get item weight.
         *
         * @param \WC_Product $product WooCommerce Product Object.
         *
         * @return array
         */
        public function get_item_weight($product)
        {
        }
        /**
         * Get the COGS value for an order item.
         *
         * Caches the result of the feature flag check in a static local variable
         * to avoid repeated container lookups across items.
         *
         * @param \WC_Order_Item_Product $item Order item.
         * @return float
         */
        private function get_item_cogs_value(\WC_Order_Item_Product $item): float
        {
        }
        /**
         * Get item dimensions.
         *
         * @param \WC_Product $product WooCommerce Product Object.
         *
         * @return array
         */
        public function get_item_dimensions($product)
        {
        }
        /**
         * Get taxes information from the item.
         *
         * @param array $item_taxes Item Taxes.
         * @param bool  $is_refund  Whether the taxes are for a refund or not, which can be used to adjust the tax data accordingly if needed in the future.
         *
         * @return array
         */
        public function get_item_taxes($item_taxes, $is_refund = false)
        {
        }
        /**
         * Get gift info.
         *
         * @param \WC_Order $order Order object.
         *
         * @return array
         */
        public function get_gift($order)
        {
        }
        /**
         * Get a list of notes.
         *
         * @param \WC_Order $order Order object.
         *
         * @return array
         */
        public function get_notes(\WC_Order $order): array
        {
        }
        /**
         * Get custom fields
         *
         * @param \WC_Order $order Order object.
         *
         * @return array
         */
        public function get_custom_fields($order)
        {
        }
        /**
         * Get item details for the order.
         *
         * @param \WC_Order_Item $item Order item.
         *
         * @return array
         */
        public function get_item_details($item): array
        {
        }
        /**
         * Get the image source URL for a given image ID and size.
         *
         * @param int    $image_id Image ID.
         * @param string $size     Image size (default is 'full').
         *
         * @return string
         */
        public function get_image_src_url($image_id, $size = 'full'): string
        {
        }
        /**
         * Update orders shipments for specified SKUs (both products and variations).
         *
         * @param \WP_REST_Request $request Request object.
         *
         * @return \WP_REST_Response
         */
        public function update_orders_shipments(\WP_REST_Request $request): \WP_REST_Response
        {
        }
        /**
         * Process items from the ShipStation notification.
         *
         * @param array    $items        Items from the notification.
         * @param \WC_Order $order        The order object.
         * @param array    $notification The notification data.
         *
         * @return void
         */
        public function process_items(array $items, \WC_Order $order, array $notification)
        {
        }
        /**
         * Parse notes and return a standardized array.
         *
         * @param array $notes Notes data, can be an array of objects.
         *
         * @return array
         */
        public function parse_notes($notes): array
        {
        }
        /**
         * Parse address information and return a standardized array.
         *
         * @param mixed $address Address data, can be an object or array.
         *
         * @return array
         */
        public function parse_address_info($address): array
        {
        }
        /**
         * Fire the legacy woocommerce_api_wc_shipstation action if it hasn't
         * already been fired in this request.
         *
         * Plugins like WooCommerce Product Bundles hook into this
         * action to register filters on woocommerce_order_get_items and
         * woocommerce_order_item_product that reshape order items.
         *
         * In the XML API path the action fires naturally via WooCommerce's
         * legacy API mechanism, but the REST API path never triggers it.
         * Calling this method at the top of the REST endpoint ensures those
         * third-party filters are in place before order items are read.
         *
         * @return void
         */
        protected function fire_legacy_api_action(): void
        {
        }
    }
}
namespace WooCommerce\Shipping\ShipStation\Checkout {
    /**
     * Contract for fetching shipping rates from the ShipStation checkout rates API.
     *
     * @since 4.9.9
     */
    interface Checkout_Rates_Api_Client_Interface
    {
        /**
         * Fetch shipping rates for the given payload.
         *
         * @since 4.9.9
         *
         * @param array $payload Rates request payload.
         *
         * @return array Rates response data.
         */
        public function get_rates(array $payload): array;
    }
    /**
     * Concrete implementation of the checkout rates API client.
     *
     * Sends JSON POST requests to the configured ShipStation rates URL and
     * returns the decoded response. All failures return an empty array.
     *
     * The cache key is derived from the rates URL plus the JSON-encoded payload
     * built by Checkout_Rates_Request_Builder. Third-party mutations applied
     * later via the `http_request_args` core filter (e.g. injected headers) are
     * intentionally not part of the key — for the checkout hot path the payload
     * fully characterises the request, and including downstream filter output
     * would require a dry-run of `wp_safe_remote_post()` per cache lookup.
     *
     * @since 5.0.8
     */
    final class Checkout_Rates_Api_Client implements \WooCommerce\Shipping\ShipStation\Checkout\Checkout_Rates_Api_Client_Interface
    {
        /**
         * In-request response cache.
         *
         * Keys are md5 hashes of the rates URL + JSON-encoded payload.
         * Values are the decoded response arrays.
         *
         * @var array
         */
        private static $request_cache = array();
        /**
         * In-request error cache.
         *
         * Keys are md5 hashes of the rates URL + JSON-encoded payload.
         * Values are boolean true for cached errors.
         *
         * @var array
         */
        private static $error_cache = array();
        /**
         * Fetch shipping rates for the given payload.
         *
         * @since 5.0.8
         *
         * @param array $payload Rates request payload.
         *
         * @return array Rates response data.
         */
        public function get_rates(array $payload): array
        {
        }
        /**
         * Strip customer PII from a payload before logging.
         *
         * @param array $payload The rates request payload.
         *
         * @return array Payload safe to log.
         */
        private static function redact_payload_for_log(array $payload): array
        {
        }
        /**
         * Strip sensitive data from an inbound response before logging.
         *
         * The current ShipStation rates response shape carries no customer PII
         * (quote_id, carrier codes, display names, and amounts only) but may echo
         * back the GUID-tail rates URL on some error envelopes. Walks every string
         * value through Checkout_Rates_Options::redact() so any future field that
         * embeds the URL or a GUID is automatically scrubbed without re-auditing.
         *
         * @param array $data Decoded response body.
         *
         * @return array Response safe to log.
         */
        private static function redact_response_for_log(array $data): array
        {
        }
    }
    /**
     * Thrown by Checkout_Rates_Payload_Validator when the outbound payload fails
     * validation. Callers should catch this and skip the upstream API request — the
     * validator has already logged each violation with field- and filter-level
     * context.
     *
     * @since 5.0.9
     */
    class Checkout_Rates_Invalid_Payload_Exception extends \Exception
    {
    }
    /**
     * Centralized accessor for Checkout Rates options.
     */
    final class Checkout_Rates_Options
    {
        /**
         * Canonical shipping method id. Lives here (not on Checkout_Rates_Shipping_Method)
         * so zone-method lookups don't require loading the shipping method class file.
         */
        const SHIPPING_METHOD_ID = 'shipstation_checkout_rates';
        /**
         * Order shipping item meta key for the selected quote's rate code (the
         * ShipStation `code`, e.g. `dos_…`). Underscore-prefixed so WooCommerce
         * treats it as protected and hides it from the admin order screen, the
         * customer order/email views, and the Store API. Exported as
         * `shipping_preferences.preplanned_fulfillment_id`.
         */
        const RATE_CODE_META_KEY = '_shipstation_rate_code';
        /**
         * Order shipping item meta key for the response-level quote id. Protected
         * (underscore-prefixed) for the same reasons as RATE_CODE_META_KEY.
         */
        const QUOTE_ID_META_KEY = '_shipstation_quote_id';
        /**
         * Option key for the ShipStation-issued rates URL.
         */
        const OPTION_RATES_URL = 'wc_shipstation_checkout_rates_url';
        /**
         * Sentinel returned when the URL is redacted from log output.
         */
        const REDACTED_TOKEN = '<redacted-rates-url>';
        /**
         * Get the configured rates URL.
         *
         * @since 5.0.9
         *
         * @return string Empty string when unset.
         */
        public static function get_rates_url(): string
        {
        }
        /**
         * Store the rates URL.
         *
         * @since 5.0.9
         *
         * @param string $url Opaque ShipStation rates URL.
         *
         * @return bool True when the value was stored, or when the new value already
         *              matches the stored one (no update_option() call is issued in
         *              that case, so pre_update_option_* filters do not fire).
         */
        public static function set_rates_url(string $url): bool
        {
        }
        /**
         * Delete the stored rates URL.
         *
         * @since 5.0.9
         *
         * @return bool True when the option was removed or was already absent; false only when the delete operation itself failed.
         */
        public static function clear_rates_url(): bool
        {
        }
        /**
         * Whether a rates URL is currently stored.
         *
         * @since 5.0.9
         *
         * @return bool
         */
        public static function is_configured(): bool
        {
        }
        /**
         * Whether the read-only Checkout Rates section should render: feature flag on
         * and the current request is a render/save of the ShipStation integration
         * settings screen (not REST, AJAX, cron, or any other admin screen).
         *
         * @since 5.0.9
         *
         * @return bool
         */
        public static function should_render_settings_section(): bool
        {
        }
        /**
         * Whether a ShipStation Rates shipping method instance is attached to any
         * shipping zone (including the "Locations not covered" zone 0), regardless
         * of whether the instance is currently enabled.
         *
         * Pairs with is_shipping_method_enabled() — together they distinguish the
         * three real-world states a merchant can land in: no instance, instance
         * present but disabled, or instance present and enabled.
         *
         * @since 5.0.9
         *
         * @return bool
         */
        public static function is_shipping_method_added(): bool
        {
        }
        /**
         * Whether at least one ShipStation Rates shipping method instance exists
         * AND is currently enabled (is_enabled = 1) on any shipping zone.
         *
         * This is what the merchant cares about for the "is checkout actually
         * serving live rates right now" answer.
         *
         * @since 5.0.9
         *
         * @return bool
         */
        public static function is_shipping_method_enabled(): bool
        {
        }
        /**
         * Build the read-only HTML for the Checkout Rates settings section.
         *
         * Three branches reflect the merchant's actual position:
         *   - Not configured: no rates URL stored yet.
         *   - Connected: rates URL stored but no enabled instance on any zone.
         *   - Active: rates URL stored AND at least one enabled instance.
         *
         * The Connected branch further differentiates whether a disabled instance
         * exists (so the merchant just needs to toggle it on) versus no instance
         * at all (so they need to add one first). Otherwise the merchant gets
         * told to "add the method" when they've already added it.
         *
         * @since 5.0.9
         *
         * @return string HTML safe to embed in the WC settings 'description' slot.
         */
        public static function get_settings_description_html(): string
        {
        }
        /**
         * "Not configured" branch — no rates URL stored.
         *
         * @return string
         */
        private static function render_not_configured_html(): string
        {
        }
        /**
         * "Connected" branch — rates URL stored, no enabled instance on any zone.
         *
         * @param bool $instance_exists Whether a (disabled) instance is already on a zone.
         *
         * @return string
         */
        private static function render_connected_html(bool $instance_exists): string
        {
        }
        /**
         * "Active" branch — rates URL stored AND an enabled instance on a zone.
         *
         * @return string
         */
        private static function render_active_html(): string
        {
        }
        /**
         * Redact the configured rates URL (and any GUID-tail HTTPS URL) from a log message.
         *
         * @since 5.0.9
         *
         * @param string $message Log message that may contain the URL.
         *
         * @return string Message with the URL replaced by REDACTED_TOKEN.
         */
        public static function redact(string $message): string
        {
        }
    }
    /**
     * Validates the final checkout rates request payload against ShipStation's wire shape.
     *
     * Runs after all five public checkout-rates filters have applied. Logs each violation
     * with field- and filter-level context, then throws Checkout_Rates_Invalid_Payload_Exception
     * so callers can skip the upstream API request rather than send a payload ShipStation
     * will reject.
     *
     * @since 5.0.9
     */
    final class Checkout_Rates_Payload_Validator
    {
        /**
         * Filter execution order: snapshot key => the filter that runs immediately after it.
         *
         * Used to attribute a violation to the filter that introduced it by walking the
         * snapshots in chronological order and identifying the last "clean" snapshot.
         */
        private const FILTER_AFTER_SNAPSHOT = array('pre_address_type' => 'woocommerce_shipstation_checkout_rates_address_type', 'pre_destination' => 'woocommerce_shipstation_checkout_rates_destination', 'pre_item' => 'woocommerce_shipstation_checkout_rates_item', 'pre_items' => 'woocommerce_shipstation_checkout_rates_items', 'pre_request' => 'woocommerce_shipstation_checkout_rates_request');
        /**
         * Validate the final outbound payload.
         *
         * @since 5.0.9
         *
         * @param array $payload   Final outbound payload (post all filters).
         * @param array $snapshots Optional pre-filter snapshots for attribution. Recognised keys:
         *                         - 'pre_address_type' (string) Default address type before address_type filter.
         *                         - 'pre_destination'  (array)  Destination array before destination filter.
         *                         - 'pre_item'         (array)  Items array of line items before per-item filter.
         *                         - 'pre_items'        (array)  Items array before items filter.
         *                         - 'pre_request'      (array)  Full payload before request filter.
         *
         * @return void
         *
         * @throws Checkout_Rates_Invalid_Payload_Exception When the payload contains one or more violations.
         */
        public static function validate(array $payload, array $snapshots = array()): void
        {
        }
        /**
         * Collect all violations in the payload.
         *
         * @param array $payload Payload to inspect.
         *
         * @return array<int, array{path: string, message: string}>
         */
        private static function collect_violations(array $payload): array
        {
        }
        /**
         * Check the destination subtree for missing or malformed required fields.
         *
         * @param array $destination Destination array.
         *
         * @return array<int, array{path: string, message: string}>
         */
        private static function check_destination(array $destination): array
        {
        }
        /**
         * Check a single item entry for missing or malformed required fields.
         *
         * @param mixed $item  Item entry (expected array).
         * @param int   $index Zero-based index for error path formatting.
         *
         * @return array<int, array{path: string, message: string}>
         */
        private static function check_item($item, int $index): array
        {
        }
        /**
         * Identify the filter most likely responsible for a given violation.
         *
         * Walks the supplied snapshots in chronological order. For each snapshot that
         * the violation's path could touch, asks "is this snapshot clean for this
         * violation?". The last clean snapshot points to the filter that ran immediately
         * after — that filter introduced the violation.
         *
         * Returns null when the violation is present in every applicable snapshot
         * (pre-existing, not introduced by a filter), or when no snapshots were supplied.
         *
         * @param array $violation Violation entry.
         * @param array $snapshots Pre-filter snapshots.
         *
         * @return string|null Filter hook name, or null if not attributable.
         */
        private static function attribute_to_filter(array $violation, array $snapshots): ?string
        {
        }
        /**
         * Whether a destination snapshot is clean for a given destination-field path.
         *
         * @param array  $destination Destination array.
         * @param string $path        Violation path (e.g. "rate.destination.city").
         *
         * @return bool
         */
        private static function path_clean_in_destination(array $destination, string $path): bool
        {
        }
        /**
         * Whether an items-array snapshot is clean for a given item-path.
         *
         * @param array    $items      Items array (numerically indexed).
         * @param int|null $item_index Item index extracted from the path, if any.
         * @param string   $path       Violation path.
         *
         * @return bool
         */
        private static function path_clean_in_items(array $items, ?int $item_index, string $path): bool
        {
        }
        /**
         * Whether a full-payload snapshot is clean for a given path.
         *
         * @param array  $payload Payload snapshot.
         * @param string $path    Violation path.
         *
         * @return bool
         */
        private static function path_clean_in_payload(array $payload, string $path): bool
        {
        }
        /**
         * Log a violation as a single Logger::error call.
         *
         * @param array       $violation Violation entry.
         * @param string|null $filter    Filter hook name, or null if not attributable.
         */
        private static function log(array $violation, ?string $filter): void
        {
        }
    }
    /**
     * Builds the ShipStation checkout rates API request payload from a WC shipping package.
     *
     * @since 4.9.8
     */
    final class Checkout_Rates_Request_Builder
    {
        /**
         * Pre-filter payload snapshots captured during the current build() call.
         *
         * Used by Checkout_Rates_Payload_Validator to attribute a violation to the
         * public filter that introduced it. Reset on every build() call. Recognised
         * keys: 'pre_address_type', 'pre_destination', 'pre_item', 'pre_items',
         * 'pre_request'.
         *
         * @var array<string, mixed>
         */
        private array $filter_snapshots = array();
        /**
         * Build the rates request payload from a WooCommerce shipping package.
         *
         * Returns an array under a `rate` key containing `destination` and `items`.
         * The `connection_key` is not included — it is injected by the caller.
         *
         * @since 4.9.8
         *
         * @param array $package WooCommerce shipping package.
         *
         * @return array Rates request payload.
         *
         * @throws Checkout_Rates_Invalid_Payload_Exception When the final payload fails validation;
         *                                                  callers should treat this as "do not send the request".
         */
        public function build(array $package)
        {
        }
        /**
         * Build the destination portion of the payload.
         *
         * @param array $destination WC package destination array.
         *
         * @return array
         */
        private function build_destination(array $destination)
        {
        }
        /**
         * Build the items array from the package contents.
         *
         * @param array $package WooCommerce shipping package.
         *
         * @return array
         */
        private function build_items(array $package)
        {
        }
        /**
         * Build the dimensions array for a product.
         *
         * Returns an empty array if any dimension is empty, non-numeric, zero, or negative.
         *
         * @param \WC_Product $product WooCommerce product.
         *
         * @return array
         */
        private function build_item_dimensions(\WC_Product $product)
        {
        }
        /**
         * Get the current WooCommerce customer object, if available.
         *
         * @return \WC_Customer|null
         */
        private function get_customer()
        {
        }
        /**
         * Get customer name from the customer object.
         *
         * Name is an optional API field, so absence is expected behavior and not
         * an actionable condition.
         *
         * @since 4.9.8
         *
         * @return string
         */
        private function get_customer_name(): string
        {
        }
        /**
         * Get customer phone from customer object.
         *
         * @since 4.9.8
         *
         * @return string
         */
        private function get_customer_phone(): string
        {
        }
        /**
         * Get customer email from the customer object.
         *
         * @since 4.9.8
         *
         * @return string
         */
        private function get_customer_email(): string
        {
        }
    }
    /**
     * Maps raw ShipStation checkout rates API responses into WooCommerce-compatible rate arrays.
     *
     * @since 5.0.5
     */
    final class Checkout_Rates_Response_Mapper
    {
        /**
         * Map a ShipStation rates response to an array of WC rate arrays.
         *
         * @since 5.0.5
         *
         * @param array $response Raw ShipStation API response.
         *
         * @return array List of WC-compatible rate arrays.
         */
        public function map(array $response): array
        {
        }
        /**
         * Map a single quote entry to a WC rate array.
         *
         * Returns null if the entry should be skipped (missing or empty code, or missing cost).
         *
         * @since 5.0.5
         *
         * @param array  $quote    Single quote entry.
         * @param string $quote_id Top-level quote ID from the response.
         *
         * @return array|null WC rate array or null when quote should be skipped.
         */
        private function map_quote(array $quote, string $quote_id): ?array
        {
        }
    }
    /**
     * ShipStation checkout rates shipping method.
     *
     * @since 4.9.6
     */
    class Checkout_Rates_Shipping_Method extends \WC_Shipping_Method
    {
        /**
         * API client instance.
         *
         * @var Checkout_Rates_Api_Client_Interface|null
         */
        private $api_client = null;
        /**
         * Constructor.
         *
         * @since 4.9.6
         *
         * @param int $instance_id Shipping method instance ID.
         */
        public function __construct($instance_id = 0)
        {
        }
        /**
         * Define instance form fields.
         *
         * @since 4.9.6
         */
        public function init_form_fields()
        {
        }
        /**
         * Set the API client instance.
         *
         * @since 5.0.8
         *
         * @param Checkout_Rates_Api_Client_Interface $client API client.
         *
         * @return void
         */
        public function set_api_client(\WooCommerce\Shipping\ShipStation\Checkout\Checkout_Rates_Api_Client_Interface $client): void
        {
        }
        /**
         * Calculate shipping rates.
         *
         * @since 4.9.6
         *
         * @param array $package Shipping package.
         */
        public function calculate_shipping($package = array())
        {
        }
        /**
         * Whether the current request is a checkout render or a checkout-driven AJAX/Store API call.
         *
         * @since 5.0.8
         *
         * @return bool
         */
        protected function is_checkout_context(): bool
        {
        }
    }
    /**
     * Stateless converter mapping WooCommerce units onto ShipStation-accepted ones.
     *
     * @since 5.0.9
     */
    final class ShipStation_Unit_Converter
    {
        /**
         * Dimension units accepted by the ShipStation Checkout Rates API.
         *
         * @var array<int, string>
         */
        private const ACCEPTED_DIMENSION_UNITS = array('in', 'cm');
        /**
         * Weight units accepted by the ShipStation Checkout Rates API.
         *
         * @var array<int, string>
         */
        private const ACCEPTED_WEIGHT_UNITS = array('oz', 'lbs', 'g', 'kg');
        /**
         * Convert a dimension value from the given store unit into a ShipStation-accepted unit.
         *
         * @since 5.0.9
         *
         * @param mixed  $value      Numeric value (int, float, or numeric string).
         * @param string $store_unit Source unit identifier (e.g. 'mm', 'in').
         *
         * @return array{value: float, unit: string}|null Converted value and target unit, or null if the
         *                                                input is non-numeric or the unit is unknown.
         */
        public static function convert_dimension($value, string $store_unit): ?array
        {
        }
        /**
         * Convert a weight value from the given store unit into a ShipStation-accepted unit.
         *
         * @since 5.0.9
         *
         * @param mixed  $value      Numeric value (int, float, or numeric string).
         * @param string $store_unit Source unit identifier (e.g. 'mg', 'kg').
         *
         * @return array{value: float, unit: string}|null Converted value and target unit, or null if the
         *                                                input is non-numeric or the unit is unknown.
         */
        public static function convert_weight($value, string $store_unit): ?array
        {
        }
        /**
         * Shared conversion driver.
         *
         * @param mixed                                              $value          Numeric value.
         * @param string                                             $store_unit     Source unit.
         * @param array<string, array{family: string, to_base: int}> $units          Validated unit table.
         * @param array<int, string>                                 $accepted_units ShipStation-accepted units.
         *
         * @return array{value: float, unit: string}|null
         */
        private static function convert($value, string $store_unit, array $units, array $accepted_units): ?array
        {
        }
        /**
         * Built-in dimension table (extensible via filter).
         *
         * Imperial base = inch. Metric base = millimetre.
         *
         * @return array<string, array{family: string, to_base: int}>
         */
        private static function dimension_units(): array
        {
        }
        /**
         * Built-in weight table (extensible via filter).
         *
         * Imperial base = ounce. Metric base = milligram.
         *
         * @return array<string, array{family: string, to_base: int}>
         */
        private static function weight_units(): array
        {
        }
        /**
         * Drop malformed table entries so third-party filters cannot break checkout rates.
         *
         * @param mixed $units Possibly-mutated unit table from the filter pipeline.
         *
         * @return array<string, array{family: string, to_base: int}>
         */
        private static function sanitize_units($units): array
        {
        }
    }
}
namespace WooCommerce\Shipping\ShipStation {
    /**
     * Auth_Controller Class
     *
     * Manages authentication data display and WooCommerce API key generation.
     */
    class Auth_Controller
    {
        /**
         * Option name for storing WooCommerce API key ID.
         *
         * @var string
         */
        const API_KEY_ID_OPTION = 'woocommerce_shipstation_api_key_id';
        /**
         * Plaintext prefix prepended to every plugin-generated consumer_key.
         *
         * Combined with a 35-char `wc_rand_hash()` tail this keeps the total
         * plaintext at 43 chars, matching WooCommerce's own `ck_<40-hex>` shape
         * and leaving room inside the hashed `consumer_key char(64)` column and
         * the `truncated_key char(7)` column without adjustment.
         *
         * Surfaced in logs so a support engineer can tell at a glance whether a
         * key was generated by this plugin or pasted in by hand.
         *
         * @since 5.0.8
         *
         * @var string
         */
        const API_KEY_PREFIX = 'ck_wcss_';
        /**
         * Plaintext prefix prepended to every plugin-generated consumer_secret.
         *
         * Stored verbatim in `consumer_secret char(43)`, so this prefix is the
         * single source of truth for "did this plugin create this row?", used by
         * the inline credentials section, the settings-tab key list, and the per-row
         * delete ({@see delete_plugin_key_row()}) to identify our rows without
         * false-positive risk against merchant-created keys.
         *
         * Length budget: prefix (8) + `wc_rand_hash()` tail (35) = 43, exactly
         * filling `char(43)`. A longer total would silently truncate on insert
         * in non-strict SQL mode and break authentication.
         *
         * @since 5.0.8
         *
         * @var string
         */
        const API_SECRET_PREFIX = 'cs_wcss_';
        /**
         * Legacy plaintext prefix on consumer_key rows minted by the short-lived
         * two-key-set design (SHIPSTN-142).
         *
         * No longer minted: a WC REST API key is transport-agnostic — the same key
         * authenticates a direct request and a WordPress.com-proxied one, so the
         * separate "WPCOM" key set was a distinction without an external difference
         * (decided 2026-06-15). The single go-forward prefix is {@see API_KEY_PREFIX}.
         * This prefix is still RECOGNIZED everywhere (plugin-row lookups, the
         * prefix-guarded delete, the orphan prune) so rows minted on the interim
         * design stay manageable.
         *
         * @since 5.2.0
         *
         * @var string
         */
        const WPCOM_API_KEY_PREFIX = 'ck_wcsw_';
        /**
         * Legacy plaintext prefix on consumer_secret rows from the two-key-set design.
         *
         * Retained as a recognized "plugin-minted" marker alongside
         * {@see API_SECRET_PREFIX}; nothing mints it anymore (see
         * {@see WPCOM_API_KEY_PREFIX}). The plugin-row lookups, per-row delete, and
         * orphan prune all treat both prefixes as the one plugin key set.
         *
         * @since 5.2.0
         *
         * @var string
         */
        const WPCOM_API_SECRET_PREFIX = 'cs_wcsw_';
        /**
         * Option storing per-key mint metadata, keyed by `key_id`.
         *
         * `woocommerce_api_keys` has no created/minted timestamp column (`key_id`
         * gives creation order, not time), so the plugin records mint time itself:
         * `{ <key_id>: { minted_at: <epoch> } }`. Written at mint in
         * {@see insert_api_key_row()} and cleaned on delete in
         * {@see delete_plugin_key_row()}. Drives the "Minted" column (later slice)
         * and the age check in the orphan prune. Presence of an entry also marks a
         * row as "plugin-minted with intent".
         *
         * @since 5.2.0
         *
         * @var string
         */
        const KEY_META_OPTION = 'woocommerce_shipstation_key_meta';
        /**
         * Action Scheduler hook for the daily orphan-key prune.
         *
         * @since 5.2.0
         *
         * @var string
         */
        const PRUNE_HOOK = 'woocommerce_shipstation_prune_orphan_keys';
        /**
         * Action Scheduler group for the orphan-key prune action.
         *
         * @since 5.2.0
         *
         * @var string
         */
        const PRUNE_GROUP = 'woocommerce-shipstation';
        /**
         * Option name for the atomic single-flight lock guarding key generation.
         *
         * @since 5.0.8
         *
         * @var string
         */
        const GEN_LOCK_OPTION = 'woocommerce_shipstation_generate_keys_lock';
        /**
         * Maximum age of the generation lock before it's treated as stale and cleared.
         *
         * Generation should take well under a second; 30s is comfortably above any
         * legitimate runtime and well below any merchant-perceptible wait.
         *
         * @since 5.0.8
         *
         * @var int
         */
        const GEN_LOCK_TTL_SECONDS = 30;
        /**
         * Default "active" recency window in seconds: the single source of truth for
         * how recently ShipStation must have pinged for a key/route to count as
         * connected (24h). Exposed as a constant so the connection UI can derive its
         * tiers from it (e.g. the "Last sync" freshness colours: green under half this,
         * red past all of it). {@see active_window_seconds()} applies the filter on top.
         *
         * @since 5.2.0
         *
         * @var int
         */
        const ACTIVE_WINDOW_SECONDS = DAY_IN_SECONDS;
        /**
         * Optional injected WPCOM connection facade. Null resolves through Main at
         * call time. Injected in tests so WPCOM mode is exercisable without the
         * Main singleton.
         *
         * @var WPCOM_Connection|null
         */
        private ?\WooCommerce\Shipping\ShipStation\WPCOM_Connection $connection_override;
        /**
         * Constructor
         *
         * @param WPCOM_Connection|null $connection Optional injected WPCOM connection facade.
         */
        public function __construct(?\WooCommerce\Shipping\ShipStation\WPCOM_Connection $connection = null)
        {
        }
        /**
         * Enqueue scripts and styles for auth display.
         */
        public function enqueue_scripts()
        {
        }
        /**
         * Look up the most recent woocommerce_api_keys row that this plugin
         * generated, identified by either recognized plugin prefix on its
         * `consumer_secret` column ({@see API_SECRET_PREFIX} or the legacy
         * {@see WPCOM_API_SECRET_PREFIX} — both are the one plugin key set now).
         *
         * `consumer_secret` is stored as plaintext in `char(43)`, so a LIKE
         * match against the prefix is reliable and locale-independent.
         * `consumer_key` is stored hashed and cannot be used for the lookup.
         *
         * Pre-5.0.8 rows (no prefix) intentionally cannot be matched here: their
         * ownership is ambiguous from the DB alone, so the legacy
         * `API_KEY_ID_OPTION` pointer remains the only safe identification for
         * them.
         *
         * @return array|null ['key_id' => int, 'truncated_key' => string] for the most recent plugin-prefixed row, or null if none exists.
         */
        private function find_plugin_prefixed_api_key_row(): ?array
        {
        }
        /**
         * Return the first admin user ID to assign as the API key owner.
         *
         * WooCommerce REST auth runs every request under the key owner's capabilities.
         * Tying the key to the triggering user is unsafe: that user may later lose their
         * role or be deleted, causing every REST endpoint to return rest_forbidden.
         * Using the first administrator keeps the key stable.
         *
         * @return int
         */
        private function get_admin_user_id(): int
        {
        }
        /**
         * Generate new WooCommerce REST API credentials for the direct key set.
         *
         * @return array API credentials.
         */
        private function generate_api_credentials(): array
        {
        }
        /**
         * Insert a woocommerce_api_keys row for one key set.
         *
         * Set-agnostic core shared by the direct and WPCOM mint paths; callers own
         * any option bookkeeping (e.g. {@see API_KEY_ID_OPTION}) and sweeping.
         *
         * @since 5.2.0
         *
         * @param string $key_prefix    Plaintext consumer_key prefix (8 chars).
         * @param string $secret_prefix Plaintext consumer_secret prefix (8 chars).
         * @param string $description   Row description shown in WC's REST API key list.
         *
         * @return array ['consumer_key', 'consumer_secret', 'api_key_id'], or empty array on DB failure.
         */
        private function insert_api_key_row(string $key_prefix, string $secret_prefix, string $description): array
        {
        }
        /**
         * Read the per-key mint metadata map ({@see KEY_META_OPTION}).
         *
         * @since 5.2.0
         *
         * @return array<int, array> Map of key_id => metadata (e.g. ['minted_at' => int]).
         */
        public static function get_key_meta(): array
        {
        }
        /**
         * Record the mint timestamp for a freshly inserted key row.
         *
         * `woocommerce_api_keys` has no created column, so the plugin keeps its own
         * timestamp keyed by `key_id`. Stored non-autoloaded — it's read only on the
         * settings tab and by the prune.
         *
         * @since 5.2.0
         *
         * @param int $key_id Inserted row id.
         *
         * @return void
         */
        private static function record_key_minted_at(int $key_id): void
        {
        }
        /**
         * Return the recorded mint time for a key row, or null when unknown.
         *
         * Null means the row predates mint-time tracking (or its meta was cleaned):
         * its age is unknowable, so the prune leaves it alone.
         *
         * @since 5.2.0
         *
         * @param int $key_id Row id.
         *
         * @return int|null Epoch seconds, or null when no mint time is recorded.
         */
        public static function get_key_minted_at(int $key_id): ?int
        {
        }
        /**
         * Stamp a mint time on any plugin key row that lacks one (keys minted before
         * mint-time tracking existed). Uses "now" as the baseline, so a never-used
         * legacy key — already an orphan, since it never authenticated — joins the
         * normal lifecycle: it shows the auto-remove countdown and is pruned after the
         * TTL. Idempotent and cheap; only writes when something is missing.
         *
         * @since 5.2.0
         *
         * @return void
         */
        public static function backfill_missing_minted_at(): void
        {
        }
        /**
         * Distinct transports a plugin key has authenticated over, for the key
         * list's "Type" column. Delegates to the connection log (custom table).
         *
         * @since 5.2.0
         *
         * @param int $key_id Row id.
         *
         * @return string[] Subset of ['wpcom', 'direct']; empty when never observed.
         */
        public static function get_key_transports(int $key_id): array
        {
        }
        /**
         * Whether a plaintext consumer_secret carries one of the recognized plugin
         * prefixes — i.e. this plugin minted the row (current or legacy interim
         * set). The REST gate uses it to scope transport recording to our own keys.
         *
         * @since 5.2.0
         *
         * @param string $consumer_secret Plaintext secret from the keys table.
         *
         * @return bool
         */
        public static function is_plugin_secret(string $consumer_secret): bool
        {
        }
        /**
         * Drop the mint metadata for a key row that is being deleted.
         *
         * @since 5.2.0
         *
         * @param int $key_id Row id.
         *
         * @return void
         */
        private static function forget_key_meta(int $key_id): void
        {
        }
        /**
         * State for the inline connection/credentials section on the settings tab
         * (SHIPSTN-142). Replaces the auth modal's AJAX-loaded state with a
         * server-rendered one.
         *
         * `cred_state` is one of:
         *  - 'reference': a plugin key exists — show the consumer key's last 7 chars,
         *    the stored consumer secret, the auth key, and the Store URL.
         *  - 'missing': the API_KEY_ID_OPTION pointer is set but no plugin row exists
         *    (deleted externally) — show the recovery notice.
         *  - 'none': no plugin key has ever been generated — prompt to Generate.
         *
         * The full consumer key is never returned (it is hashed at rest); only a fresh
         * Generate reveals it.
         *
         * @return array{cred_state:string,conn_url:string,auth_key:string,truncated_key:string,consumer_secret:string}
         */
        public function get_connection_section_data(): array
        {
        }
        /**
         * Resolve the URL the merchant should paste into ShipStation's "Store URL"
         * field. With WPCOM transport active and the site Jetpack-connected, that's
         * the WPCOM proxy entry point; otherwise (or while a disconnect is pending,
         * when the merchant is being told to set up the direct route) it's the
         * merchant's own site URL.
         *
         * The proxy URL routes ShipStation traffic via WordPress.com (which signs
         * each call with the blog token before forwarding to the merchant), so a
         * merchant whose site is firewalled / behind a security plugin only needs
         * to allowlist `*.wordpress.com` rather than reverse-engineer their host's
         * blocking layer. The plugin's REST gate accepts both transports
         * identically; the URL surfaced in the credentials section decides which one
         * ShipStation actually uses.
         *
         * @since 5.0.5
         *
         * @return string Site or proxy URL, without a trailing slash.
         */
        private function get_conn_url_for_shipstation(): string
        {
        }
        /**
         * Resolve the WPCOM connection facade (injected in tests, else via Main).
         *
         * @return WPCOM_Connection|null
         */
        private function get_connection(): ?\WooCommerce\Shipping\ShipStation\WPCOM_Connection
        {
        }
        /**
         * List every plugin-generated key row (both sets), newest first.
         *
         * Rows are identified by the set prefixes on the plaintext
         * `consumer_secret`; merchant-created keys never appear here. Powers the
         * settings-tab key list from which the merchant retires old pairs.
         *
         * @since 5.2.0
         *
         * @return array[] Each: ['key_id' => int, 'transports' => string[], 'transport_last_seen' => array<string,string>, 'description' => string, 'truncated_key' => string, 'last_access' => string|null].
         */
        public static function get_plugin_key_rows(): array
        {
        }
        /**
         * Delete one plugin-generated key row by id.
         *
         * The WHERE clause re-checks the set prefixes, so a merchant-created row
         * can never be deleted through this path no matter what id is posted.
         *
         * @since 5.2.0
         *
         * @param int $key_id Row to delete.
         *
         * @return bool True when a plugin-generated row was deleted.
         */
        public static function delete_plugin_key_row(int $key_id): bool
        {
        }
        /**
         * Fetch the most recent plugin key row of either recognized prefix, or null
         * when none exists.
         *
         * Used to report `keys_exist` and the `truncated_key` for the inline
         * credentials section ({@see get_connection_section_data()}). Since the
         * two-key-set collapse this resolves the one plugin key set (both legacy
         * prefixes). The full consumer key (hashed at rest) is revealed only at
         * generation time, never re-rendered from here.
         *
         * @since 5.2.0
         *
         * @return array|null ['key_id' => int, 'truncated_key' => string, 'consumer_secret' => string], or null.
         */
        public function get_latest_wpcom_key(): ?array
        {
        }
        /**
         * Atomically acquire the generation lock, or return false if another
         * request already holds it.
         *
         * Two near-simultaneous generate requests (a double-clicked Generate button,
         * a second admin tab) can both POST to ajax_generate_new_keys. Generation is
         * non-destructive, so the hazard is no longer a mutual sweep but a duplicate
         * mint: both inserts succeed and race to write {@see API_KEY_ID_OPTION},
         * leaving an orphaned extra pair and an option that may track a different row
         * than the one whose plaintext a given tab displayed. The lock serialises
         * generation so a single click mints a single pair.
         *
         * Implemented via add_option(), which is atomic at the DB level (UNIQUE
         * constraint on option_name) and works without an object cache. The
         * stale-clear path is also race-safe: if two requests both observe an
         * expired lock and both delete + add_option(), the UNIQUE constraint
         * still picks exactly one winner.
         *
         * `add_option()` returns false for any failure — option already exists
         * (genuine contention) or a transient DB write error. After a false
         * return we re-read the option to disambiguate: an existing lock value
         * means real contention, while no value means the write failed and the
         * caller can retry on the merchant's next attempt. The DB-error case is
         * surfaced via the logger so support can trace it without confusing the
         * merchant.
         *
         * @return bool True if the lock was acquired by this request.
         */
        private function acquire_generation_lock(): bool
        {
        }
        /**
         * Release the generation lock.
         */
        private function release_generation_lock(): void
        {
        }
        /**
         * AJAX handler for generating new API keys.
         */
        public function ajax_generate_new_keys()
        {
        }
        /**
         * AJAX handler for deleting one plugin-generated API key row from the
         * settings-tab key list (SHIPSTN-142).
         *
         * @since 5.2.0
         */
        public function ajax_delete_api_key()
        {
        }
        /**
         * Wire the daily orphan-key prune: register the action handler and ensure
         * the recurring Action Scheduler job is scheduled.
         *
         * Called once from {@see Main::init()} (on plugins_loaded). Scheduling is
         * deferred to `init` so Action Scheduler is loaded before we query it.
         *
         * @since 5.2.0
         *
         * @return void
         */
        public static function register_orphan_prune(): void
        {
        }
        /**
         * Ensure a single daily recurring Action Scheduler action is scheduled.
         *
         * Idempotent: no-ops when one is already scheduled, so it can run on every
         * load. No-ops too when Action Scheduler is unavailable (it ships with
         * WooCommerce, so this only guards the rare pre-init / partial-install path).
         *
         * @since 5.2.0
         *
         * @return void
         */
        public static function schedule_orphan_prune(): void
        {
        }
        /**
         * Cancel the recurring orphan-prune action. Called on plugin deactivation.
         *
         * @since 5.2.0
         *
         * @return void
         */
        public static function unschedule_orphan_prune(): void
        {
        }
        /**
         * The orphan-key TTL in seconds: how long a provisional (never-used) plugin
         * key may live before the prune removes it. Default 48h, filterable.
         *
         * 48h is safe because ShipStation validates a custom store on save by
         * calling the export endpoint, which stamps `last_access` within minutes — a
         * pair with zero auth after 48h was never wired into ShipStation.
         *
         * @since 5.2.0
         *
         * @return int Seconds.
         */
        public static function orphan_ttl_seconds(): int
        {
        }
        /**
         * The "active" window in seconds: how recently ShipStation must have pinged a
         * key (its `last_access`) for the key to count as actively connected rather
         * than stale. Default 24h, filterable.
         *
         * ShipStation's polling cadence varies and can be much longer than once
         * assumed, so 24h is a deliberately generous buffer: it never falsely flags a
         * store that simply polls infrequently, while still surfacing keys that have
         * genuinely stopped connecting. This is the single recency window for the whole
         * connection UI — it drives the key list's display (active = full opacity;
         * once-used-but-now-silent = dimmed + flagged for manual delete), the
         * Connections table's per-row pill, and the section/global health banner — so
         * the banner can never warn while a route's pill still reads Active. It never
         * auto-deletes anything.
         *
         * @since 5.2.0
         *
         * @return int Seconds.
         */
        public static function active_window_seconds(): int
        {
        }
        /**
         * Maximum the latest DIRECT ShipStation hit may lag the latest WordPress.com
         * proxy hit before the direct route counts as no longer keeping pace — the
         * pre-disconnect safety signal (SHIPSTN-142).
         *
         * ShipStation polls every route it has on essentially the same cadence, so
         * when both are live their last hits land within a second or two (drifts of
         * ~10s have been observed on healthy stores). Once direct falls well behind
         * the proxy, that route has stopped while the proxy keeps going. 30s sits
         * comfortably above the healthy drift, so it flags a genuinely stalled direct
         * route without tripping on ordinary jitter.
         *
         * @since 5.2.0
         *
         * @return int Seconds.
         */
        public static function direct_lag_tolerance_seconds(): int
        {
        }
        /**
         * Prune provisional (never-used) plugin key rows older than the TTL.
         *
         * A row is pruned only when ALL hold:
         *  - it is plugin-minted (recognized prefix — never a merchant key);
         *  - it has never been used — `last_access` is NULL (the column default),
         *    empty, or the MySQL zero datetime; ShipStation never authenticated with
         *    it, so it is not a live credential (this is how the live connection is
         *    preserved);
         *  - its recorded `minted_at` is older than {@see orphan_ttl_seconds()} (rows
         *    with no recorded mint time have unknowable age and are left alone);
         *  - it is NOT the newest plugin row — cheap insurance against deleting a
         *    freshly minted pair a slow-to-paste merchant is still about to use.
         *
         * @since 5.2.0
         *
         * @return void
         */
        public static function prune_orphan_keys(): void
        {
        }
        /**
         * Get the CTA that sends the merchant to the ShipStation settings tab, where
         * the connection details and credentials now live inline (SHIPSTN-142). This
         * replaces the former "View Authentication Data" modal trigger; the modal was
         * removed in favour of the inline section.
         *
         * @return string Link HTML.
         */
        public static function get_auth_button_html(): string
        {
        }
    }
    /**
     * Checkout Class
     */
    class Checkout
    {
        /**
         * The namespace for our checkout fields.
         *
         * @var string
         */
        const FIELD_NAMESPACE = 'woocommerce_shipstation';
        /**
         * Maximum length of the gift message.
         *
         * @var int
         */
        public int $gift_message_max_length;
        /**
         * Constructor method.
         */
        public function __construct()
        {
        }
        /**
         * Enqueue checkout scripts and styles.
         *
         * @return void
         */
        public function enqueue_scripts(): void
        {
        }
        /**
         * Get a list of gift fields.
         *
         * @return array
         */
        protected function get_gift_fields(): array
        {
        }
        /**
         * Add gift fields to the classic checkout form.
         *
         * @param array $checkout_fields List of checkout fields.
         *
         * @return array Modified list of checkout fields including gift fields if enabled.
         */
        public function add_gift_fields_to_classic_checkout(array $checkout_fields): array
        {
        }
        /**
         * Hide (optional) text in checkbox label.
         *
         * @param string $field Field HTML.
         * @param string $key   Field key.
         *
         * @return string
         */
        public function modify_optional_label(string $field, string $key): string
        {
        }
        /**
         * Add gift fields to the block checkout form.
         *
         * @return void
         */
        public function add_gift_fields_to_block_checkout(): void
        {
        }
        /**
         * Deregister gift fields when they are not needed.
         *
         * This method removes gift fields from the block checkout in the following cases:
         * - When the cart doesn't need shipping
         * - On order-received page when the order is not a gift
         * - On view-order page when the order is not a gift
         *
         * @return void
         */
        public function maybe_deregister_fields()
        {
        }
        /**
         * Is the order a gift?
         *
         * Checks if the order is marked as a gift.
         *
         * @param int $order_id The order ID.
         *
         * @return bool
         */
        private function is_order_a_gift(int $order_id): bool
        {
        }
        /**
         * Display gift field descriptions on the block checkout form by injecting CSS styles.
         *
         * Generates CSS rules that use custom properties to display description text
         * below each gift-related field in the block checkout form. This allows the
         * descriptions to be styled and positioned consistently while maintaining
         * proper spacing.
         *
         * @return string CSS rules for displaying gift field descriptions, with each rule
         *                targeting a specific gift field class and setting its description text.
         */
        private function display_gift_field_descriptions_on_block_checkout(): string
        {
        }
        /**
         * Validates the gift fields during checkout.
         *
         * Checks if the gift message length is within allowed limits when an order is marked as a gift.
         * Returns validation error details if the message exceeds the maximum characters.
         *
         * @param boolean $is_gift      Whether the order is marked as a gift.
         * @param string  $gift_message Optional gift message text.
         *
         * @return array Empty array if validation passes, or array with error details.
         */
        protected function validate_gift_fields(bool $is_gift, string $gift_message): array
        {
        }
        /**
         * Validates gift fields during block checkout validation.
         *
         * @param \WP_Error $errors WordPress error object to add validation errors.
         * @param array    $fields List of checkout fields.
         *
         * @return void
         */
        public function validate_block_checkout_gift_fields(\WP_Error $errors, array $fields): void
        {
        }
        /**
         * Deletes gift-related metadata from an order if the order is not marked as a gift.
         * This helps keep the order metadata clean by removing unnecessary gift fields when they are not being used.
         *
         * @param \WC_Order $order WooCommerce Order object to check and potentially clean gift metadata from.
         *
         * @return void
         */
        public function maybe_delete_order_gift_field_meta_data(\WC_Order $order): void
        {
        }
        /**
         * Deletes gift-related metadata from an order.
         *
         * @param \WC_Order $order WooCommerce Order object.
         *
         * @return void
         */
        public function delete_order_gift_field_meta_data(\WC_Order $order): void
        {
        }
        /**
         * Validates gift fields during classic checkout validation.
         *
         * @return void
         */
        public function validate_classic_checkout_gift_fields(): void
        {
        }
        /**
         * Saves gift-related field values submitted during classic checkout to order meta data.
         *
         * @param int $order_id Order ID.
         *
         * @return void
         */
        public function save_gift_field_values_to_classic_checkout_order_meta(int $order_id): void
        {
        }
        /**
         * Gets formatted gift data from an order.
         *
         * Retrieves and formats gift-related data from order meta, including
         * - Gift status (whether order is marked as gift)
         * - Gift message if present
         * - Formatted values appropriate for admin or frontend display
         *
         * @param \WC_Order $order   WooCommerce order object to get gift data from.
         *
         * @return array{
         *     is_gift: bool,
         *     field_data: array,
         * } Array of gift field data.
         */
        public function get_order_gift_data(\WC_Order $order): array
        {
        }
        /**
         * Displays gift fields for the customer order detail views if conditions are met.
         * Shows gift details only if:
         * - Order was created via checkout OR using a block theme
         * - Gift fields data exists
         * - Order is marked as a gift
         *
         * @param \WC_Order|int $order Order object or order ID.
         *
         * @return void
         */
        public function maybe_display_order_gift_data_for_customers($order): void
        {
        }
        /**
         * Show or hide gift fields based on conditions.
         *
         * @param bool  $show_field Should field be shown flag.
         * @param array $field       Field data.
         *
         * @return bool
         */
        public function filter_fields_for_order_confirmation($show_field, $field): bool
        {
        }
        /**
         * Displays or modifies gift data fields shown below shipping fields in the admin order screen.
         * When context is 'edit', removes gift fields from shipping fields to prevent editing the fields.
         * When context is not 'edit', adds gift data to shipping fields if the order is marked as gift.
         *
         * @param array          $shipping_fields List of shipping fields to display in admin.
         * @param \WC_Order|false $order           WooCommerce order object containing gift data.
         * @param string         $context         Context of display - 'edit' for editing, other for viewing.
         *
         * @return array Modified list of shipping fields including gift data if applicable.
         */
        public function maybe_display_gift_data_below_admin_shipping_fields($shipping_fields, $order, $context): array
        {
        }
        /**
         * Set session.
         *
         * @param string $name  Session name.
         * @param mixed  $value Session value.
         *
         * @return void
         */
        public static function session_set(string $name, $value): void
        {
        }
        /**
         * Get Session.
         *
         * @param string $name Session name.
         *
         * @return mixed Session.
         */
        public static function session_get(string $name)
        {
        }
        /**
         * Delete session variables.
         *
         * @return void
         */
        public function delete_sessions(): void
        {
        }
        /**
         * Delete session.
         *
         * @param string $name Session name.
         *
         * @return void
         */
        public static function session_delete(string $name): void
        {
        }
        /**
         * Get the fully prefixed block checkout meta key for a given meta key.
         *
         * @param string $meta_key The meta key.
         *
         * @return string The fully prefixed block checkout meta key.
         */
        public static function get_block_prefixed_meta_key(string $meta_key): string
        {
        }
        /**
         * Get the namespaced field key.
         *
         * @param string $field_key The field key to be namespaced.
         *
         * @return string The namespaced field key.
         */
        public static function get_namespaced_field_key(string $field_key): string
        {
        }
        /**
         * Get the CSS class field key.
         *
         * @param string $field_key The field key to be namespaced.
         *
         * @return string The CSS class.
         */
        public static function get_css_class_field_key(string $field_key): string
        {
        }
        /**
         * Check if the cart needs shipping in a safe way.
         *
         * @return bool
         */
        private static function cart_needs_shipping(): bool
        {
        }
        /**
         * Check if the page contains checkout.
         *
         * @return bool
         */
        private static function is_checkout(): bool
        {
        }
        /**
         * Check if the page contains block checkout.
         *
         * @return bool
         */
        private static function is_block_checkout(): bool
        {
        }
        /**
         * Check if page contains classic checkout.
         *
         * @return bool
         */
        private static function is_classic_checkout(): bool
        {
        }
        /**
         * AJAX handler for saving field value to session.
         *
         * @return void
         */
        public function ajax_save_field_value(): void
        {
        }
        /**
         * Sanitize the gift message field value.
         *
         * @param string $gift_message Gift message.
         *
         * @return string Sanitized gift message.
         */
        private function sanitize_gift_message(string $gift_message): string
        {
        }
        /**
         * AJAX handler for loading field values from session.
         *
         * @return void
         */
        public function ajax_load_field_values(): void
        {
        }
        /**
         * Display gift fields in order confirmation email beneath customer details.
         *
         * @param \WC_Order $order         Order object.
         * @param bool     $sent_to_admin Whether the email is being sent to admin.
         * @param bool     $plain_text    Whether the email is plain text.
         *
         * @return void
         */
        public function display_gift_fields_in_order_email($order, $sent_to_admin = false, $plain_text = false): void
        {
        }
    }
    /**
     * Records and reads incoming ShipStation connections in a dedicated table.
     *
     * Every time ShipStation authenticates against the REST API the permission gate
     * records the route it came in on — which key, which transport (WordPress.com
     * proxy vs direct), and the source URL — with first/last-seen timestamps and a
     * hit counter. One row per (key, URL) pair.
     *
     * Stored in its own table rather than per-key metadata so the record survives
     * the key being deleted (recovery / audit: "this URL was used by a key you've
     * since removed") and so the hot auth path never rewrites a growing option.
     *
     * @since 5.2.0
     */
    class Connection_Log
    {
        /**
         * Table name without the WordPress table prefix.
         *
         * @var string
         */
        const TABLE = 'wc_shipstation_connections';
        /**
         * Option storing the installed schema version, so the table is (re)built
         * exactly once per schema change rather than on every load.
         *
         * @var string
         */
        const DB_VERSION_OPTION = 'woocommerce_shipstation_connlog_db_version';
        /**
         * Current schema version. Bump when the table definition changes.
         *
         * @var string
         */
        const DB_VERSION = '2';
        /**
         * Minimum seconds between on-disk `last_seen` refreshes for one connection.
         *
         * ShipStation polls on an interval; without throttling every poll would
         * write the row. 60s keeps "last seen" accurate to the minute while
         * collapsing bursts/retries.
         *
         * @var int
         */
        const THROTTLE_SECONDS = 60;
        /**
         * Cap on the connection rows surfaced to the settings UI by {@see all()}.
         *
         * Comfortably above any realistic install's lifetime route set (a few keys
         * each over direct/wpcom) while bounding the query and the unpaginated list.
         * Rows are ordered by `last_seen DESC`, so only the oldest, least-relevant
         * entries are ever dropped — never an active route.
         *
         * @var int
         */
        const MAX_DISPLAYED = 25;
        /**
         * Site option holding the UTC epoch of the most recent successful plugin-key
         * auth observed since this feature shipped (the global banner's "was working"
         * latch). Written by the REST auth gate ({@see \WooCommerce\Shipping\ShipStation\API\REST\API_Controller})
         * at its success record() sites, and read by the global-banner renderer.
         *
         * Lives on this class — not the admin-only renderer — because the writer is
         * REST-path code where Connection_Log is already loaded; the renderer must
         * never make the REST gate depend on an admin-only class's load order.
         * Deliberately distinct from `last_access` on woocommerce_api_keys, which
         * carries pre-feature history and would fire on an already-broken connection
         * at upgrade. Absent on upgrade so a connection already broken at upgrade
         * stays quiet until it pings successfully once and then stops.
         *
         * @var string
         */
        const LAST_SUCCESS_OPTION = 'woocommerce_shipstation_last_success_ts';
        /**
         * Fully-qualified table name.
         *
         * @since 5.2.0
         *
         * @return string
         */
        public static function table_name(): string
        {
        }
        /**
         * Create or update the table when the stored schema version is out of date.
         *
         * Cheap to call on every load — it short-circuits on an option compare and
         * only runs dbDelta after an install or a schema bump.
         *
         * @since 5.2.0
         *
         * @return void
         */
        public static function maybe_install(): void
        {
        }
        /**
         * Create/upgrade the connection table via dbDelta and stamp the version.
         *
         * @since 5.2.0
         *
         * @return void
         */
        public static function install(): void
        {
        }
        /**
         * Record (or refresh) an incoming ShipStation connection.
         *
         * One row per (key, source URL). A repeat hit refreshes `last_seen` and bumps
         * `hits`, throttled to {@see THROTTLE_SECONDS} so a polling store does not
         * write on every request. Telemetry only — never affects authentication.
         *
         * @since 5.2.0
         *
         * @param int    $key_id        Plugin key row id.
         * @param string $truncated_key Last-7 of the consumer key (legible after deletion).
         * @param string $transport     'wpcom' or 'direct'.
         * @param string $url           Store URL ShipStation connects to (the WordPress.com proxy URL for wpcom, the site URL for direct); '' falls back to the transport.
         * @param string $target_url    The site URL the request actually resolved to (home_url() at request time). For wpcom this is the final hop after the proxy; equals $url for direct.
         *
         * @return void
         */
        public static function record(int $key_id, string $truncated_key, string $transport, string $url = '', string $target_url = ''): void
        {
        }
        /**
         * The most-recent connection rows (capped at {@see MAX_DISPLAYED}), newest
         * first, as raw table rows — WITHOUT the `key_exists` annotation.
         *
         * The health/banner path ({@see health_from_rows()}) reads only last_seen, url,
         * target_url and transport, so it consumes these rows directly and skips the
         * key-row lookup {@see all()} performs purely to stamp `key_exists`. Keeping the
         * shared SELECT here lets that path run one query instead of three on every
         * non-ShipStation WC settings screen. {@see all()} layers the annotation on top.
         *
         * @since 5.2.0
         *
         * @return array[] Each: ['id','key_id','truncated_key','transport','url','target_url','first_seen','last_seen','hits'].
         */
        public static function recent_rows(): array
        {
        }
        /**
         * The most-recent connections (capped at {@see MAX_DISPLAYED}), newest first,
         * mapped onto the live key rows.
         *
         * Each record is annotated with `key_exists` — false when the key it was
         * recorded against has since been deleted, so the merchant-facing list can
         * still surface "this URL was used by a key you've removed" (recovery). The
         * health/banner path does not need this and reads {@see recent_rows()} directly.
         *
         * @since 5.2.0
         *
         * @return array[] Each: ['id','key_id','truncated_key','transport','url','target_url','first_seen','last_seen','hits','key_exists'].
         */
        public static function all(): array
        {
        }
        /**
         * Classify one connection row's route status.
         *
         * The single source of truth for both the per-row pill in the connections
         * table and the aggregate {@see health()}. Pure: no I/O.
         *
         * @since 5.2.0
         *
         * @param array  $conn               One row from {@see all()} (keys: last_seen, url, target_url, transport, key_exists).
         * @param int    $window             Seconds within which a ping counts as recent.
         * @param bool   $transport_enabled  Whether the WordPress.com transport is on.
         * @param string $current_host       Host of the current home_url().
         * @param bool   $is_wpcom_connected Whether the site currently has a live Jetpack/WordPress.com connection. Defaults to true so existing callers keep working; the live value is supplied by the settings render. Only consulted for wpcom rows.
         *
         * @return string One of 'deleted', 'mismatch', 'disconnected', 'inactive', 'rejected', 'active'.
         */
        public static function connection_status(array $conn, int $window, bool $transport_enabled, string $current_host, bool $is_wpcom_connected = true): string
        {
        }
        /**
         * Roll a key's connection rows up into a single status for the API Keys list,
         * so the Keys pill and the Connections pills can never disagree about the same
         * key (SHIPSTN-142).
         *
         * A key can authenticate over several connections at once, so the pill answers
         * "is this credential working, and if not, what's its latest state": if ANY of
         * the key's connections is {@see connection_status() active}, the key is
         * active; otherwise it reports the status of the most-recently-seen connection.
         * Equivalent to sorting the rows by (active-first, then last_seen desc) and
         * taking the top one — so the returned status always equals a real row in the
         * Connections table, which the merchant can scroll to for the detail.
         *
         * Pure: no I/O. Returns '' when the key has no connection rows, leaving the
         * caller to fall back to its bare last_access recency (the New/Unused states).
         *
         * @since 5.2.0
         *
         * @param array  $conn_rows          The key's rows from {@see all()} (already filtered to one key_id).
         * @param int    $window             Seconds within which a ping counts as recent.
         * @param bool   $transport_enabled  Whether the WordPress.com transport is on.
         * @param string $current_host       Host of the current home_url().
         * @param bool   $is_wpcom_connected Whether the site currently has a live Jetpack/WordPress.com connection.
         *
         * @return string A {@see connection_status()} result, or '' when there are no rows.
         */
        public static function key_rollup_status(array $conn_rows, int $window, bool $transport_enabled, string $current_host, bool $is_wpcom_connected = true): string
        {
        }
        /**
         * Whether any connection of a given transport currently resolves to a given
         * {@see connection_status()} (SHIPSTN-142).
         *
         * Drives both directions of the pre-save transport warning, which it suppresses
         * when toggling needs no ShipStation reconfiguration:
         *  - OFF: a direct connection is already `active`, so the proxy can go away with
         *    no change — ShipStation already reaches the store directly.
         *  - ON: a wpcom connection is `rejected` (recent, WordPress.com-connected,
         *    matching host — turned away only because the transport is off), so flipping
         *    the toggle on makes it `active` on ShipStation's next pull, no change.
         *
         * Pure: no I/O.
         *
         * @since 5.2.0
         *
         * @param array  $rows               Rows from {@see all()}.
         * @param string $transport          Transport to match: 'direct' or 'wpcom'.
         * @param string $status             Target {@see connection_status()} result.
         * @param int    $window             Seconds within which a ping counts as recent.
         * @param bool   $transport_enabled  Whether the WordPress.com transport is on.
         * @param string $current_host       Host of the current home_url().
         * @param bool   $is_wpcom_connected Whether the site currently has a live Jetpack/WordPress.com connection.
         *
         * @return bool True when at least one matching connection resolves to $status.
         */
        public static function has_connection_with_status(array $rows, string $transport, string $status, int $window, bool $transport_enabled, string $current_host, bool $is_wpcom_connected = true): bool
        {
        }
        /**
         * Per-hop glyph states for a connection's route cell, derived from its
         * resolved {@see connection_status()} (D3, SHIPSTN-142).
         *
         * A route renders as up to two hops: g1 is the first hop (ShipStation ->
         * next), g2 the second (proxy -> store, proxied rows only). Each hop is one
         * of four states the template maps to a coloured glyph: 'arrow' (working,
         * green ->), 'uncertain' (idle/unknown, gray ?), 'down' (broken, red x) and
         * 'reject' (broken because the transport is off, amber x).
         *
         * The break always lands on the store-edge hop (proxied g2 / direct g1); a
         * proxied first hop stays an arrow unless the whole route is idle. A direct
         * row has no second hop, so g2's store-edge state is folded onto g1 (the
         * single rendered glyph). Any unrecognised status renders healthy, matching
         * the prior inline fall-through.
         *
         * @since 5.2.0
         *
         * @param string $status     A {@see connection_status()} result ('deleted'|'mismatch'|'disconnected'|'inactive'|'rejected'|'active').
         * @param bool   $is_proxied Whether the row routes through the WordPress.com proxy (a second hop exists).
         *
         * @return array Keyed 'g1' (first hop) and 'g2' (store-edge hop); each one of 'arrow'|'uncertain'|'down'|'reject'.
         */
        public static function route_glyph_states(string $status, bool $is_proxied): array
        {
        }
        /**
         * Whether the global, WC-Settings-wide broken-connection banner should fire
         * (SHIPSTN-142). Pure and static, mirroring {@see section_verdict()} /
         * {@see route_glyph_states()} — no I/O — so the firing rule is unit-pinned in
         * isolation before any renderer is wired to it.
         *
         * The banner exists to surface a break the merchant does NOT already know
         * about, so it fires only for `inactive` — ShipStation stopped successfully
         * pinging us while nothing on our side changed (an external WordPress.com-side
         * revocation or a ShipStation-side stop both land here). Every merchant-caused
         * break is excluded for free by the {@see health_from_rows()} reason priority
         * (`disconnected`/`rejected` outrank or replace `inactive`), and a local
         * disconnect mid-flow is excluded explicitly via $disconnect_intent.
         *
         * All four conditions must hold to fire:
         *  1. no local disconnect in progress ($disconnect_intent false);
         *  2. the health reason is exactly 'inactive';
         *  3. the latch is set ($last_success_ts non-null) — we observed a real
         *     successful sync since this feature shipped, so the connection was
         *     genuinely working and is now broken (not merely never set up);
         *  4. not dismissed for this episode — either never dismissed, or a fresh
         *     success has landed since the dismiss ($last_success_ts > $dismissed_at),
         *     which re-arms after a genuine recover-then-stop.
         *
         * The render-scope guard — show on WC settings screens but NOT the ShipStation
         * tab, where the inline section banner already speaks — lives in the renderer,
         * NOT here. This helper is concerned only with the firing rule.
         *
         * @since 5.2.0
         *
         * @param string   $health_reason     Reason from {@see health_from_rows()}: ''|'none'|'inactive'|'mismatch'|'disconnected'|'rejected'.
         * @param int|null $last_success_ts   Epoch of the most recent post-feature successful plugin-key auth; null = no real success observed (latch off).
         * @param int|null $dismissed_at      Epoch the merchant last dismissed the banner site-wide; null = never dismissed.
         * @param bool     $disconnect_intent Whether a local WordPress.com disconnect is mid-flow.
         *
         * @return bool True only when a previously-working connection has stopped and the merchant should be pulled to the ShipStation tab.
         */
        public static function should_show_global_banner(string $health_reason, ?int $last_success_ts, ?int $dismissed_at, bool $disconnect_intent): bool
        {
        }
        /**
         * Derive the unified ShipStation Connection section verdict from the two
         * independent state axes the settings render already computes.
         *
         * Merging the WordPress.com transport row and the credentials row into one
         * section (SHIPSTN-142 reqs 6 & 7) needs a single source of truth for: the
         * section status pill (D10), whether to show the inline top banner and which
         * copy (D11/D13), which folds auto-open on load (D12), and what the banner's
         * recoverable-action button does. This pure map produces all four as symbolic
         * tokens; the renderer maps them to translated copy and markup, exactly as the
         * template maps {@see route_glyph_states()} to coloured glyphs.
         *
         * Credential state dominates (D11): with no usable key pair the only honest
         * message is "finish setup", regardless of any stale telemetry row -- so when
         * $cred_state is 'none' or 'missing' the $health_reason is ignored and the
         * auto-opened Credentials fold's own setup copy speaks (no banner). Only when
         * a key pair exists ('reference') does the banner defer to health.
         *
         * @since 5.2.0
         *
         * @param string $cred_state    Credential state from {@see Auth_Controller::get_connection_section_data()}: 'none'|'missing'|'reference'.
         * @param string $health_reason Health reason from {@see health_from_rows()}: ''|'none'|'inactive'|'mismatch'|'disconnected'|'rejected'.
         *
         * @return array Keyed: 'pill' ('connected'|'action'|'pending'), 'banner' ('' = none, else 'never_synced'|'inactive'|'mismatch'|'disconnected'|'rejected'), 'open_credentials' (bool), 'action' ('' = no button, else 'check_credentials'|'show_store_url'|'reconnect_wpcom'|'review_transport'), 'action_target' ('' | 'credentials'|'wpcom_connect'|'transport_toggle').
         */
        public static function section_verdict(string $cred_state, string $health_reason): array
        {
        }
        /**
         * Aggregate connection health for the section-level warning banner.
         *
         * 'ok' when at least one route is active within $stale_after. Otherwise
         * 'error': no route has reached this store within the window (or a domain
         * mismatch / rejected proxy means none can, or ShipStation has never
         * connected), so the merchant must take action. `reason` carries the
         * dominant cause so the banner copy can be specific.
         *
         * @since 5.2.0
         *
         * @param int    $stale_after        Seconds; a route with no sync newer than this is no longer active.
         * @param bool   $transport_enabled  Whether the WordPress.com transport is on.
         * @param string $current_host       Host of the current home_url().
         * @param bool   $is_wpcom_connected Whether the site currently has a live Jetpack/WordPress.com connection. Defaults to true; the live value is supplied by the settings render.
         *
         * @return array Keyed: 'level' ('ok'|'error'), 'reason' ('' when level is 'ok'; otherwise 'mismatch'|'disconnected'|'inactive'|'rejected'|'none'), 'last_sync_ts' (int|null).
         */
        public static function health(int $stale_after, bool $transport_enabled, string $current_host, bool $is_wpcom_connected = true): array
        {
        }
        /**
         * {@see health()} for already-fetched rows, so a caller that has loaded the
         * connection list (e.g. the settings tab) need not query {@see all()} twice.
         *
         * @since 5.2.0
         *
         * @param array[] $rows               Rows as returned by {@see all()}.
         * @param int     $stale_after        Seconds; a route with no sync newer than this is no longer active.
         * @param bool    $transport_enabled  Whether the WordPress.com transport is on.
         * @param string  $current_host       Host of the current home_url().
         * @param bool    $is_wpcom_connected Whether the site currently has a live Jetpack/WordPress.com connection. Defaults to true; the live value is supplied by the settings render.
         *
         * @return array Keyed: 'level' ('ok'|'error'), 'reason' ('' when level is 'ok'; otherwise 'mismatch'|'disconnected'|'rejected'|'inactive'|'none'), 'last_sync_ts' (int|null).
         */
        public static function health_from_rows(array $rows, int $stale_after, bool $transport_enabled, string $current_host, bool $is_wpcom_connected = true): array
        {
        }
        /**
         * Whether it is safe to disconnect WordPress.com — a DIRECT route is live AND
         * keeping pace with the WordPress.com proxy (SHIPSTN-142). Two conditions,
         * both required:
         *
         *  1. A direct hit within $window_seconds — the route has been seen recently
         *     at all.
         *  2. The latest direct hit is no more than $max_lag_seconds behind the latest
         *     proxy hit. ShipStation polls every route on essentially the same
         *     cadence, so once the direct hit falls well behind the proxy that route
         *     has stopped while the proxy keeps going — ShipStation is now reaching
         *     the store only over WordPress.com and disconnecting would cut it off.
         *     (A direct hit that is level with or ahead of the proxy is fine.)
         *
         * When no proxy hit has ever been recorded there is nothing to fall behind, so
         * only condition 1 applies. A missing/erroring table returns false — the safe
         * direction (warn rather than risk locking ShipStation out).
         *
         * @since 5.2.0
         *
         * @param int $window_seconds  Recency window for the direct hit.
         * @param int $max_lag_seconds Allowed lag of the latest direct hit behind the latest proxy hit.
         *
         * @return bool
         */
        public static function is_direct_connection_safe(int $window_seconds, int $max_lag_seconds): bool
        {
        }
        /**
         * Distinct transports a key has authenticated over, in first-seen order.
         * Powers the key list's "Type" column.
         *
         * @since 5.2.0
         *
         * @param int $key_id Row id.
         *
         * @return string[] Subset of ['wpcom', 'direct']; empty when never observed.
         */
        public static function transports_for_key(int $key_id): array
        {
        }
        /**
         * Most-recent recorded source URL for a key over a given transport.
         *
         * Lets a caller refresh the row ShipStation already used over a transport when
         * the live URL can't be resolved — e.g. recording a rejected proxy attempt
         * while the WordPress.com transport is off (the connection facade, and thus the
         * proxy URL, is gated by the toggle), so the existing wpcom row is reused
         * rather than spawning a urless duplicate.
         *
         * @since 5.2.0
         *
         * @param int    $key_id    Row id.
         * @param string $transport 'wpcom' or 'direct'.
         *
         * @return string The stored url, or '' when none recorded.
         */
        public static function latest_url_for_transport(int $key_id, string $transport): string
        {
        }
        /**
         * Batched transport summary for many keys at once: the distinct transports
         * each key has authenticated over (first-seen order) and the latest `last_seen`
         * per transport, gathered in a single grouped query so the settings key list
         * does not fan out to a per-row query for each key.
         *
         * @since 5.2.0
         *
         * @param int[] $key_ids Plugin key row ids.
         *
         * @return array<int,array<string,mixed>> Keyed by key_id; each value has
         *               'transports' (string[]) and 'transport_last_seen' (array<string,string>).
         *               Only ids with recorded connections are present.
         */
        public static function transports_summary_for_keys(array $key_ids): array
        {
        }
    }
    /**
     * Centralized feature flags for the ShipStation integration.
     */
    final class Features
    {
        /**
         * Whether the checkout-rates feature is enabled.
         *
         * @return bool
         */
        public static function is_checkout_rates_enabled(): bool
        {
        }
        /**
         * Whether the WPCOM-brokered transport is enabled. Default off.
         *
         * Enabled via any of three additive sources, checked in this order:
         *  1. the merchant-facing "Enable WordPress.com Transport" settings checkbox,
         *     stored under `wpcom_transport_enabled` in the integration's
         *     `woocommerce_shipstation_settings` option (SHIPSTN-133);
         *  2. the WC_SHIPSTATION_WPCOM_TRANSPORT constant (developer override, retained);
         *  3. the wc_shipstation_wpcom_transport_enabled filter (the legacy snippet path, retained).
         *
         * Any one being on enables the transport: a merchant who set the constant or
         * filter before the checkbox existed cannot turn the feature off by leaving
         * the box un-ticked — the override still forces it on (resolution is to remove
         * the snippet/constant). This is the single gate for the whole transport, so
         * enabling it also widens the strict ShipStation Basic Auth check in
         * API_Controller::check_namespace_permission() to proxied requests — which is
         * why this work was gated behind SHIPSTN-132.
         *
         * @since 5.0.3
         * @since 5.1.0 Added the settings-checkbox source.
         *
         * @return bool True when the transport is enabled.
         */
        public static function is_wpcom_transport_enabled(): bool
        {
        }
        /**
         * Whether a developer override — the WC_SHIPSTATION_WPCOM_TRANSPORT constant
         * or the wc_shipstation_wpcom_transport_enabled filter — forces the transport
         * on regardless of the settings checkbox.
         *
         * The settings UI uses this to render the checkbox checked + disabled (and to
         * explain which override is in control) when an override is active, since the
         * checkbox cannot turn the feature off while the override stands.
         *
         * @since 5.1.0
         *
         * @return bool True when the constant or filter forces the transport on.
         */
        public static function is_wpcom_transport_forced_by_override(): bool
        {
        }
    }
    /**
     * Raises a single, site-wide-dismissable RED banner across the WooCommerce
     * settings screens (every tab EXCEPT the ShipStation tab) when a connection
     * that was previously working has stopped — to pull the merchant's attention
     * back to ShipStation from wherever else in WC settings they happen to be.
     *
     * It fires only for the one break the merchant may NOT already know about:
     * ShipStation has stopped successfully pinging the store while nothing on the
     * store's side changed (an external WordPress.com-side revocation or a
     * ShipStation-side stop both surface as the `inactive` health reason). Every
     * merchant-caused break (a completed local WordPress.com disconnect, the
     * transport switched off, a mid-flow disconnect) is excluded — see
     * {@see Connection_Log::should_show_global_banner()}, which owns the firing
     * rule; this class owns only the render scope and the rendering.
     *
     * The ShipStation tab itself is deliberately excluded: its inline section banner
     * already speaks there, so a second banner would be redundant. The two never
     * show on the same screen.
     *
     * "Previously working" is gated on the success latch
     * ({@see Connection_Log::LAST_SUCCESS_OPTION}), stamped by the REST auth gate on
     * a real successful plugin-key auth. An install whose connection is already
     * broken at upgrade has no latch, so it stays quiet until it pings successfully
     * once and then stops.
     *
     * @since 5.2.0
     */
    class Global_Connection_Banner
    {
        /**
         * Site option ('time()' epoch when set): the merchant dismissed the banner
         * site-wide. Admin-only state, so the constant lives here rather than on
         * Connection_Log. Re-arms automatically: the firing predicate re-fires once a
         * fresh success lands after the dismiss (last_success_ts > dismissed_at), so
         * no reset logic is needed here.
         *
         * @var string
         */
        const DISMISS_OPTION = 'woocommerce_shipstation_global_banner_dismissed_at';
        /**
         * AJAX action that records a dismissal.
         *
         * @var string
         */
        const DISMISS_ACTION = 'shipstation_dismiss_global_banner';
        /**
         * Nonce action shared with the rest of the settings-tab AJAX surface.
         *
         * @var string
         */
        const NONCE_ACTION = 'shipstation_auth_nonce';
        /**
         * Register the admin-notice render and the dismiss AJAX handler.
         *
         * @since 5.2.0
         *
         * @return void
         */
        public function bootstrap(): void
        {
        }
        /**
         * Render the banner when a previously-working connection has gone silent and
         * the current screen is a WooCommerce settings tab other than ShipStation.
         *
         * Guards run cheap-first: the screen scope and capability gates short-circuit
         * before any option read, the latch read short-circuits before the disconnect-
         * intent and (most expensive) health computation, so a never-latched install —
         * the common case — costs only two get_option() calls and no row scan.
         *
         * @since 5.2.0
         *
         * @return void
         */
        public function maybe_render(): void
        {
        }
        /**
         * AJAX handler: record a site-wide dismissal so the banner stays gone for
         * every admin until a genuine recover-then-stop re-arms it.
         *
         * @since 5.2.0
         *
         * @return void
         */
        public function ajax_dismiss(): void
        {
        }
        /**
         * Whether the current admin request is a WooCommerce settings tab OTHER than
         * the ShipStation tab.
         *
         * True for WC settings (any tab) AND NOT (tab=integration AND
         * section=shipstation). The ShipStation tab is excluded because its inline
         * section banner already speaks there. Reads $_GET directly with the same
         * sanitize and nonce-suppression the rest of the settings screen detection
         * uses (read-only page context).
         *
         * @return bool
         */
        private function is_target_settings_screen(): bool
        {
        }
        /**
         * Read a site option that stores a UTC epoch, coercing WordPress's absent
         * sentinel (false) and any empty value to null and everything else to int.
         *
         * @param string $option_name Option key.
         * @return int|null Stored epoch, or null when absent/empty.
         */
        private function read_epoch_option(string $option_name): ?int
        {
        }
        /**
         * Compute the connection health reason the SAME way the inline ShipStation
         * section does, so the global banner's notion of "broken" is identical to the
         * inline one (one source of truth).
         *
         * Mirrors the health block in
         * {@see \WC_ShipStation_Integration::generate_shipstation_credentials_html()}
         * exactly, including the same recency window — {@see Auth_Controller::active_window_seconds()},
         * 24h — that the section verdict and the Connections table's per-row pill use, so
         * the banner can never warn while a route's pill still reads Active.
         *
         * @param WPCOM_Connection|null $connection The WordPress.com connection facade, or null.
         * @return string Health reason from {@see Connection_Log::health_from_rows()}.
         */
        private function compute_health_reason($connection): string
        {
        }
        /**
         * Echo the broken-connection banner markup and the inline dismiss-persistence
         * script.
         *
         * The copy stays general ("stopped syncing"): we can prove the connection went
         * silent and that nothing local changed, but not whether WordPress.com revoked
         * the link or ShipStation stopped on its side — so it never claims a specific
         * cause. The CTA deep-links to the ShipStation tab, whose inline section
         * carries the recoverable action.
         *
         * @return void
         */
        private function render_banner(): void
        {
        }
        /**
         * Print the small inline script that persists a dismissal to the AJAX action.
         *
         * WordPress core's `is-dismissible` only hides the notice client-side; it does
         * not persist. This handler POSTs the nonce to {@see DISMISS_ACTION} when the
         * core dismiss button is clicked, so the dismissal survives a reload. An inline
         * script is used rather than an enqueued file because the banner renders on WC
         * settings pages where the plugin's settings JS (auth-display.js) is not
         * enqueued, and the snippet is tiny, single-purpose, and only printed when the
         * banner actually shows (no separate scope-guarded enqueue plumbing, and no
         * risk of referencing a missing built `.min.js`).
         *
         * @return void
         */
        private function render_dismiss_script(): void
        {
        }
    }
    /**
     * Logger class.
     */
    class Logger
    {
        /**
         * WC Logger instance.
         *
         * @var \WC_Logger|null
         */
        private static ?\WC_Logger $logger = null;
        /**
         * Is debug enabled.
         *
         * @var bool
         */
        private static bool $is_debug_enabled = false;
        /**
         * Constructor.
         */
        private function __construct()
        {
        }
        /**
         * Initialize the logger.
         *
         * @return void
         */
        private static function init(): void
        {
        }
        /**
         * Merge default data with provided data.
         *
         * @param array $data Data to merge.
         *
         * @return array
         */
        private static function get_merged_data(array $data): array
        {
        }
        /**
         * Add a debug log entry if logging is enabled.
         *
         * @param string $message Message to log.
         * @param array  $data    Additional contextual data (e.g., array( 'source' => 'shipstation' ) ).
         *
         * @return void
         */
        public static function debug(string $message, array $data = array()): void
        {
        }
        /**
         * Add an info log entry. Always logged, regardless of the debug-logging setting.
         *
         * @param string $message Message to log.
         * @param array  $data    Additional contextual data (e.g., array( 'source' => 'shipstation' ) ).
         *
         * @return void
         */
        public static function info(string $message, array $data = array()): void
        {
        }
        /**
         * Add a warning log entry. Always logged, regardless of the debug-logging setting.
         *
         * Use for non-error conditions the merchant should see — e.g. a fallback being
         * triggered because the primary input was invalid.
         *
         * @param string $message Message to log.
         * @param array  $data    Additional contextual data (e.g., array( 'source' => 'shipstation' ) ).
         *
         * @return void
         */
        public static function warning(string $message, array $data = array()): void
        {
        }
        /**
         * Handles error logging or reporting with a message and optional associated data.
         *
         * @param string $message The error message to log or report.
         * @param array  $data    Optional additional data relevant to the error.
         *
         * @return void
         */
        public static function error(string $message, array $data = array()): void
        {
        }
    }
    /**
     * WC_Shipstation Class
     */
    class Main
    {
        /**
         * Instance to call certain functions globally within the plugin
         *
         * @var Main|null
         */
        protected static ?\WooCommerce\Shipping\ShipStation\Main $instance = null;
        /**
         * WPCOM connection facade. Null until the feature flag enables it.
         *
         * @var WPCOM_Connection|null
         */
        protected ?\WooCommerce\Shipping\ShipStation\WPCOM_Connection $wpcom_connection = null;
        /**
         * Main Websparks People Singleton.
         *
         * Ensures only one instance is loaded or can be loaded.
         *
         * @static
         * @return self Main instance.
         */
        public static function instance()
        {
        }
        /**
         * Class constructor.
         */
        public function __construct()
        {
        }
        /**
         * WooCommerce fallback notice.
         *
         * @since 4.1.26
         *
         * @return void
         */
        public function missing_wc_notice()
        {
        }
        /**
         * Include shipstation class.
         *
         * @since 1.0.0
         */
        public function init()
        {
        }
        /**
         * Bootstrap the WPCOM/Jetpack connection when the feature flag is on.
         *
         * @return void
         */
        protected function maybe_init_wpcom_connection(): void
        {
        }
        /**
         * WPCOM connection facade accessor.
         *
         * Re-runs the gated init when the facade is missing: the settings-checkbox
         * source of the feature flag can turn on after plugins_loaded (the settings
         * save persists mid-request), in which case maybe_init_wpcom_connection()
         * already skipped. Late bootstrap still wires this request's admin hooks;
         * Jetpack's own plugins_loaded-time configuration completes on the next load.
         *
         * @return WPCOM_Connection|null Null when the feature flag is off.
         */
        public function get_wpcom_connection(): ?\WooCommerce\Shipping\ShipStation\WPCOM_Connection
        {
        }
        /**
         * Run instances on time.
         *
         * @since 4.4.6
         */
        public function before_woocommerce_init()
        {
        }
        /**
         * Include needed files.
         *
         * @since 4.4.5
         */
        public function load_files()
        {
        }
        /**
         * Initialize REST API.
         *
         * @since 4.5.2
         */
        public function load_rest_api()
        {
        }
        /**
         * Define integration.
         *
         * @since 1.0.0
         *
         * @param array $integrations Integrations.
         *
         * @return array Integrations.
         */
        public function load_integration($integrations)
        {
        }
        /**
         * Register ShipStation shipping methods.
         *
         * @since 4.9.6
         *
         * @param array $methods Registered shipping methods.
         *
         * @return array Shipping methods.
         */
        public function register_shipping_methods(array $methods): array
        {
        }
        /**
         * Listen for API requests.
         *
         * @since 1.0.0
         */
        public function load_api()
        {
        }
        /**
         * Save refund meta data.
         *
         * @since 4.9.5
         *
         * @param int   $refund_id Refund ID.
         * @param array $args Refund arguments.
         */
        public function save_refund_meta_data($refund_id, $args)
        {
        }
        /**
         * Added ShipStation custom plugin action links.
         *
         * @since 4.1.17
         * @version 4.1.17
         *
         * @param array $links Links.
         *
         * @return array Links.
         */
        public function api_plugin_action_links($links)
        {
        }
        /**
         * Declaring HPOS compatibility.
         */
        public function declare_hpos_compatibility()
        {
        }
        /**
         * Hide ShipStation Checkout Rates internal shipping-item meta from the admin
         * order screen and orders list table. The underscore prefix already hides
         * these from the storefront, emails, and the Store API; wp-admin renders item
         * meta with an empty hide-prefix, so it needs the allow-list filter instead.
         *
         * @since 5.0.9
         *
         * @param array $hidden Hidden order item meta keys.
         *
         * @return array
         */
        public function hide_internal_order_item_meta(array $hidden): array
        {
        }
    }
    /**
     * Class Order_Util
     *
     * A proxy-style class that centralizes order-related utilities for ShipStation.
     * It abstracts away WooCommerce internals, normalizes differences between legacy
     * and HPOS order storage, and provides convenience methods for common order tasks.
     */
    class Order_Util
    {
        /**
         * Constant variable for admin screen name.
         *
         * @var string $legacy_order_admin_screen.
         */
        public static string $legacy_order_admin_screen = 'shop_order';
        /**
         * Checks whether the OrderUtil class exists
         *
         * @return bool
         */
        public static function wc_order_util_class_exists(): bool
        {
        }
        /**
         * Checks whether the OrderUtil class and the given method exist
         *
         * @param String $method_name Class method name.
         *
         * @return bool
         */
        public static function wc_order_util_method_exists(string $method_name): bool
        {
        }
        /**
         * Checks whether we are using custom order tables.
         *
         * @return bool
         */
        public static function custom_orders_table_usage_is_enabled(): bool
        {
        }
        /**
         * Checks whether HPOS data sync (dual-write to both wc_orders_meta and
         * wp_postmeta) is currently enabled.
         *
         * During a HPOS migration, WooCommerce keeps both storage backends in sync
         * by firing CRUD hooks on every meta change. Direct SQL writes bypass those
         * hooks, so callers must write to both tables manually when sync is on.
         *
         * @return bool
         */
        public static function data_sync_is_enabled(): bool
        {
        }
        /**
         * Returns the relevant order screen depending on whether
         * custom order tables are being used.
         *
         * @return string
         */
        public static function get_order_admin_screen(): string
        {
        }
        /**
         * Check if the object is WC_Order object.
         *
         * @param Mixed $post_object Either Post object or Order object.
         *
         * @return Boolean
         */
        public static function is_wc_order($post_object): bool
        {
        }
        /**
         * Returns the WC_Order object from the object passed to
         * the add_meta_box callback function.
         *
         * @param \WC_Order|\WP_Post $post_or_order_object Either Post object or Order object.
         *
         * @return \WC_Order
         */
        public static function init_theorder_object($post_or_order_object): \WC_Order
        {
        }
        /**
         * Returns the order ID from the order number.
         *
         * @param string $order_number Order number.
         *
         * @return int Order ID.
         */
        public static function get_order_id_from_order_number(string $order_number): int
        {
        }
        /**
         * Determine whether an order line item should be treated as shippable for export.
         *
         * Normally this is just the product's own needs_shipping() flag. The one
         * exception is a WooCommerce Product Bundles "container" line item: when a
         * bundle is configured as "Assembled" the whole bundle ships as a single
         * physical parcel (the container), and Product Bundles records the immutable
         * order-time meta `_bundle_weight` on that container item. If the merchant
         * later switches the bundle to "Unassembled", the live bundle product is
         * forced virtual and its needs_shipping() returns false, which would
         * retroactively strip historical Assembled orders of their only shippable
         * line and leave ShipStation with nothing to ship and no ShipNotify to send
         * (SHIPSTN-138). The order-time `_bundle_weight` meta lets us keep treating
         * such a container as shippable, matching how the order was originally
         * exported.
         *
         * @since 5.1.2
         *
         * @param \WC_Order_Item         $item    Order line item.
         * @param \WC_Product|false|null $product Pre-fetched product for the item when
         *                                        available; pass null to resolve it here.
         *
         * @return bool
         */
        public static function item_needs_shipping($item, $product = null): bool
        {
        }
        /**
         * Whether the order item is a Product Bundles container that shipped as a
         * single assembled parcel at order time.
         *
         * Product Bundles writes the `_bundle_weight` meta on a container line item
         * only when the bundle needed shipping at purchase time, and never rewrites
         * it afterwards, so its presence is a reliable record that the container was
         * a physical shipment for this order regardless of the live product's
         * current virtual state.
         *
         * @since 5.1.2
         *
         * @param \WC_Order_Item $item Order line item.
         *
         * @return bool
         */
        private static function is_assembled_bundle_container($item): bool
        {
        }
        /**
         * Check whether a given item ID is a shippable item.
         *
         * @since 4.7.6
         * @version 4.7.6
         *
         * @param \WC_Order $order   Order object.
         * @param int      $item_id Item ID.
         *
         * @return bool Returns true if item is shippable product.
         */
        public static function is_shippable_item(\WC_Order $order, int $item_id): bool
        {
        }
        /**
         * See how many items in the order need shipping.
         *
         * @param \WC_Order $order Order object.
         *
         * @return int
         */
        public static function order_items_to_ship_count(\WC_Order $order): int
        {
        }
        /**
         * Get address data from Order.
         *
         * @param \WC_Order $order Order object.
         *
         * @result array.
         */
        public static function get_address_data(\WC_Order $order)
        {
        }
        /**
         * Get shipping method names from the order joined with " | ".
         *
         * @param \WC_Order $order Order object.
         * @param boolean  $strip_chars Flag to strip non-alphanumeric characters from method names.
         *
         * @return string Shipping method names, or empty string if none.
         */
        public static function get_shipping_methods(\WC_Order $order, bool $strip_chars = true): string
        {
        }
        /**
         * Get the ShipStation Checkout Rates code stored on the order's shipping item(s).
         *
         * Reads the protected meta written when the customer selects a ShipStation rate
         * at checkout. Returns the first non-empty code found across the order's shipping
         * items, or '' when none carry one (e.g. a flat-rate shipment). The REST export
         * maps this to shipping_preferences.preplanned_fulfillment_id.
         *
         * @since 5.0.9
         *
         * @param \WC_Order $order Order object.
         *
         * @return string Rate code (e.g. 'dos_…'), or '' when absent.
         */
        public static function get_checkout_rate_code(\WC_Order $order): string
        {
        }
        /**
         * Get all WooCommerce order statuses.
         *
         * @return array
         */
        public static function get_all_order_statuses(): array
        {
        }
        /**
         * Get order notes grouped by visibility.
         *
         * Fetches all approved order notes for a given order and separates them into:
         * - Customer notes (visible to the customer).
         * - Private notes (internal use only).
         *
         * @param \WC_Order $order Order object.
         *
         * @return array{
         * private: string[],
         * customer: string[]
         * }
         */
        public static function get_order_notes(\WC_Order $order): array
        {
        }
        /**
         * Mark a batch of orders as exported in a single SQL round-trip for the
         * `_shipstation_exported` meta marker. Order notes are still inserted
         * per-order so the buyer-facing audit trail is preserved and existing
         * comment hooks continue to fire.
         *
         * The marker write goes direct-to-SQL rather than through `save_meta_data()`.
         * That is the point of the bulk path: one query per batch instead of N, and
         * — as a side effect — HPOS's `after_meta_change` cascade that would have
         * bumped `wc_orders.date_updated_gmt` (re-triggering ShipStation's
         * `modified_after` poll) never fires, so no filter dance is needed.
         *
         * Already-exported orders are skipped so the call is idempotent. Neither
         * `wp_postmeta` nor `wc_orders_meta` carries a unique index on
         * `(object_id, meta_key)` — `wc_orders_meta` indexes that pair with a plain
         * `KEY`, not a `UNIQUE KEY` — so prior `_shipstation_exported` rows for the
         * batch are deleted before the bulk `INSERT` on both storage backends to
         * keep concurrent calls and post-crash retries from accumulating duplicate
         * meta rows.
         *
         * Trade-off: bypassing `save_meta_data()` skips WC's per-meta hooks
         * (`update_post_meta` / `updated_postmeta`, HPOS `after_meta_change`).
         * Third-party code listening for those events on `_shipstation_exported`
         * will not be notified by this path. The marker value, key, and the
         * "Order has been exported to Shipstation" order note are unchanged.
         *
         * @since 5.0.4
         *
         * @param \WC_Order[] $orders Order objects.
         * @return void
         */
        public static function mark_orders_exported_bulk(array $orders): void
        {
        }
        /**
         * Prime the WooCommerce order-items and order-itemmeta caches for a batch of order IDs.
         *
         * WooCommerce's CPT order data store (which HPOS inherits `read_items()` from) caches
         * items under `'order-items-{order_id}'` in the `'orders'` group. When the CPT store
         * runs a `wc_get_orders()` query with `type = shop_order`, it calls
         * `prime_order_item_caches_for_orders()` and bulk-loads the items for the whole batch.
         * The HPOS data store does not trigger that helper, so `$order->get_items()` fires one
         * `wc_order_items` SELECT per order.
         *
         * This method replicates the same priming behavior with two queries:
         *   1. `SELECT ... FROM wc_order_items WHERE order_id IN ( ... )` — all items for the batch.
         *   2. `update_meta_cache( 'order_item', $all_item_ids )` — bulk prime `wc_order_itemmeta`.
         *
         * @since 5.0.4
         *
         * @param int[] $order_ids Order IDs to prime.
         * @return void
         */
        public static function prime_order_items_for_batch(array $order_ids): void
        {
        }
        /**
         * Prime the refunds cache for a batch of order IDs.
         *
         * `$order->get_refunds()` caches its result under the key
         * `WC_Cache_Helper::get_cache_prefix( 'orders' ) . 'refunds' . $id` in the
         * `'orders'` group. On HPOS the CPT store's `prime_refund_caches_for_order()`
         * helper is not triggered, so without this call the first `get_refunds()` on
         * each order runs a separate `wc_get_orders( type = shop_order_refund )` query.
         *
         * Fetches every refund whose parent is in the batch with a single
         * `wc_get_orders()` call (HPOS aliases `post_parent__in` to `parent_order_id`),
         * groups the results by parent, and stashes each order's refunds under the
         * expected cache key so the per-order `get_refunds()` becomes a memory read.
         *
         * @since 5.0.4
         *
         * @param int[] $order_ids Order IDs to prime.
         * @return void
         */
        public static function prime_refunds_for_batch(array $order_ids): void
        {
        }
        /**
         * Pre-fetched order-notes cache, keyed by order ID.
         *
         * @var array<int, array{private: string[], customer: string[]}>
         */
        private static array $order_notes_cache = array();
        /**
         * Prime the order-notes cache for a batch of order IDs.
         *
         * WordPress's `get_comments()` result cache is keyed by a hash of its arguments,
         * so a per-order call cannot be served from a batch query's cache. This method
         * instead bulk-fetches every order note for the batch in a single `get_comments()`,
         * primes `wp_commentmeta` for all returned comments with one `update_meta_cache()`,
         * and stores the resolved `{ private, customer }` arrays in a class-level map that
         * `get_order_notes()` consults before falling back to the per-order path.
         *
         * @since 5.0.4
         *
         * @param int[] $order_ids Order IDs to prime.
         * @return void
         */
        public static function prime_order_notes_for_batch(array $order_ids): void
        {
        }
        /**
         * Prime the WP post + postmeta caches for every product referenced by a batch of orders.
         *
         * `$item->get_product()` routes through `WC_Product_Factory`, which does not cache
         * instances across calls — every call runs the data-store `read()`, hitting
         * `wp_posts` and `wp_postmeta` on a cache miss. On a 500-order batch with a few
         * items each that is ~1,500 uncached round trips per request.
         *
         * Priming the post + postmeta caches once for every unique product or variation ID
         * across the batch turns all subsequent `get_product()` calls into cache hits.
         * `_prime_post_caches()` internally skips already-cached IDs, so this is safe to
         * call unconditionally. Call after `prime_order_items_for_batch()` so the
         * `$order->get_items()` iteration below is itself a cache hit.
         *
         * @since 5.0.4
         *
         * @param \WC_Order[] $orders Hydrated orders whose line-item products should be primed.
         * @return void
         */
        public static function prime_products_for_batch(array $orders): void
        {
        }
        /**
         * Checks whether the WooCommerce Cost of Goods Sold feature is enabled.
         *
         * @return bool
         */
        public static function is_cogs_enabled(): bool
        {
        }
    }
    /**
     * Class REST_API_Loader
     *
     * This class is responsible for loading the REST API routes for the ShipStation integration.
     */
    class REST_API_Loader
    {
        /**
         * Memoized checkout-rates feature flag, computed once during init().
         *
         * @var bool
         */
        private bool $checkout_rates_enabled = false;
        /**
         * Initialize the REST API routes.
         */
        public function init()
        {
        }
        /**
         * Register the REST API routes.
         *
         * @since 5.0.9
         */
        public function register_routes()
        {
        }
        /**
         * Enable WC consumer key/secret auth on our namespace when using plain permalinks.
         *
         * WC's default check only matches request URIs containing `/wp-json/`, so it misses
         * requests using the `?rest_route=/wc-shipstation/...` fallback. This filter extends
         * the check to cover our namespace, allowing WC consumer key/secret auth to work
         * regardless of permalink structure.
         *
         * @since 5.0.9
         *
         * @param bool $is_request_to_rest_api Whether the current request targets the WC REST API.
         * @return bool
         */
        public function allow_plain_permalink_auth($is_request_to_rest_api)
        {
        }
        /**
         * Registers the ShipStation namespaces for the REST API.
         *
         * @since 5.0.9
         *
         * @param array $controllers List of current REST API controllers.
         *
         * @return array Updated list of REST API controllers with added ShipStation namespaces.
         */
        public function register_shipstation_namespaces(array $controllers): array
        {
        }
    }
}
namespace {
    /**
     * WC_Shipstation_API Class
     */
    class WC_Shipstation_API extends \WC_Shipstation_API_Request
    {
        /**
         * Stores whether or not shipstation has been authenticated.
         *
         * @var boolean
         */
        private static $authenticated = \false;
        /**
         * Being used to store $_GET variable from ShipStation API request.
         *
         * @var array
         */
        protected $request;
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Has API been authenticated?
         *
         * @return bool
         */
        public static function authenticated()
        {
        }
        /**
         * Handle the request
         */
        public function request()
        {
        }
    }
    /**
     * WC_ShipStation_Integration Class
     */
    class WC_ShipStation_Integration extends \WC_Integration
    {
        /**
         * Authorization key for ShipStation API.
         *
         * @var string
         */
        public static $auth_key = \null;
        /**
         * Export statuses.
         *
         * @var array
         */
        public static $export_statuses = array();
        /**
         * Flag for logging feature.
         * `true` means log feature is on.
         *
         * @var boolean
         */
        public static $logging_enabled = \true;
        /**
         * Shipment status.
         *
         * @var string
         */
        public static $shipped_status = \null;
        /**
         * Gift enable flag.
         *
         * @var boolean
         */
        public static $gift_enabled = \false;
        /**
         * Status mapping.
         *
         * @var array
         */
        public static $status_mapping = array();
        /**
         * Status mapping mode: 'api' (ShipStation-driven) or 'plugin' (merchant-managed).
         *
         * @since 5.0.8
         * @var string
         */
        public static $status_mode = 'api';
        /**
         * ShipStation status for awaiting payment.
         *
         * @var string
         */
        public const AWAITING_PAYMENT_STATUS = 'AwaitingPayment';
        /**
         * ShipStation status for awaiting shipment.
         *
         * @var string
         */
        public const AWAITING_SHIPMENT_STATUS = 'AwaitingShipment';
        /**
         * ShipStation status for on-hold.
         *
         * @var string
         */
        public const ON_HOLD_STATUS = 'OnHold';
        /**
         * ShipStation status for completed.
         *
         * @var string
         */
        public const COMPLETED_STATUS = 'Completed';
        /**
         * ShipStation status for Cancelled.
         *
         * @var string
         */
        public const CANCELLED_STATUS = 'Cancelled';
        /**
         * ShipStation status for Payment Cancelled.
         *
         * @var string
         */
        public const PAYMENT_CANCELLED_STATUS = 'PaymentCancelled';
        /**
         * ShipStation status for Payment Failed.
         *
         * @var string
         */
        public const PAYMENT_FAILED_STATUS = 'PaymentFailed';
        /**
         * ShipStation status for Paid.
         *
         * @var string
         */
        public const PAID_STATUS = 'Paid';
        /**
         * Status mapping mode: ShipStation owns the mappings and overwrites plugin-side values on every poll.
         *
         * @since 5.0.8
         * @var string
         */
        public const STATUS_MODE_API = 'api';
        /**
         * Status mapping mode: plugin-side mappings are authoritative and ShipStation polls do not overwrite them.
         *
         * @since 5.0.8
         * @var string
         */
        public const STATUS_MODE_PLUGIN = 'plugin';
        /**
         * Order meta keys.
         *
         * @var array
         */
        public static array $order_meta_keys = array('is_gift' => 'shipstation_is_gift', 'gift_message' => 'shipstation_gift_message');
        /**
         * WooCommerce status prefix.
         *
         * @var string
         */
        public static $wc_status_prefix = 'wc-';
        /**
         * WooCommerce core order statuses (prefixed with `wc-`).
         *
         * Used by maybe_save_status_mapping() to distinguish merchant-added custom
         * statuses (which ShipStation's account-side mapping UI does not know about)
         * from WC core statuses (which it does). Custom statuses are preserved across
         * API-mode overwrites so a merchant's custom mapping is not silently dropped
         * on the next ShipStation poll.
         *
         * @var string[]
         */
        private const WC_CORE_ORDER_STATUSES = array(\Automattic\WooCommerce\Enums\OrderInternalStatus::PENDING, \Automattic\WooCommerce\Enums\OrderInternalStatus::PROCESSING, \Automattic\WooCommerce\Enums\OrderInternalStatus::ON_HOLD, \Automattic\WooCommerce\Enums\OrderInternalStatus::COMPLETED, \Automattic\WooCommerce\Enums\OrderInternalStatus::CANCELLED, \Automattic\WooCommerce\Enums\OrderInternalStatus::REFUNDED, \Automattic\WooCommerce\Enums\OrderInternalStatus::FAILED);
        /**
         * Stores logger class.
         *
         * @var WC_Logger
         */
        private static $log = \null;
        /**
         * Auth controller instance, created in init_auth_display() and reused by the
         * inline connection/credentials section renderer (SHIPSTN-142). Null on
         * front-end / non-admin contexts where the section never renders.
         *
         * @var \WooCommerce\Shipping\ShipStation\Auth_Controller|null
         */
        private $auth_controller = \null;
        /**
         * Per-request memo of the connection-log rows (SHIPSTN-142) so the settings
         * tab reads {@see Connection_Log::all()} once, shared by both the
         * connection-changed warning and the connections list.
         *
         * @var array[]|null
         */
        private $connection_rows = \null;
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Refresh status mapping after being updated.
         */
        public function refresh_status_mapping()
        {
        }
        /**
         * Update the status_mode option and keep the static cache in sync.
         *
         * @since 5.0.8
         *
         * @param string $value New status mode value. Must be one of self::STATUS_MODE_API or self::STATUS_MODE_PLUGIN.
         */
        public function update_status_mode($value)
        {
        }
        /**
         * Build the description string for the export_statuses settings field.
         *
         * Renders two spans that the settings-page JS keeps in sync as the merchant
         * toggles checkboxes:
         *
         *   #shipstation-excluded-statuses — informational list of statuses that
         *                                    will NOT be exported (always shown).
         *   #shipstation-unmapped-warning  — error notice listing statuses that ARE
         *                                    selected for export but are missing
         *                                    from every ShipStation→WC mapping slot.
         *                                    Hidden when the list is empty.
         *
         * @return string HTML description (safe to pass to WC_Settings_API field — rendered via wp_kses_post).
         */
        private function get_export_statuses_description(): string
        {
        }
        /**
         * Return display names of export_statuses entries missing from every mapping slot.
         *
         * Returns an empty array when:
         *  - api_mode is XML (the mapping UI is hidden in legacy mode), or
         *  - status_mode is 'api' (ShipStation owns the mappings — the merchant can't
         *    resolve the mismatch from this screen, so surfacing it would be noise), or
         *  - every selected export status appears in at least one mapping slot.
         *
         * Reads option values directly so it works both at field-render time (GET) and
         * post-save time (after process_admin_options() has persisted new values).
         *
         * @return string[] Display-name labels (e.g. "Custom A"), or slugs as fallback.
         */
        private function get_unmapped_export_statuses(): array
        {
        }
        /**
         * Check that every status in export_statuses is covered by at least one mapping slot.
         *
         * Only runs in REST mode. Calls WC_Admin_Settings::add_error() when unmapped
         * statuses are found so WooCommerce shows a red error box on the settings page.
         * Because WC_Admin_Settings::show_messages() uses an `elseif` between errors and
         * messages, adding an error here also suppresses the default "Your settings have
         * been saved." success notice — no extra work needed.
         *
         * @return void
         */
        private function validate_export_statuses_mapping(): void
        {
        }
        /**
         * Get REST API setting fields.
         * These fields will be available only if the REST API is being used instead of XML API.
         *
         * @return array
         */
        public function get_rest_api_setting_fields()
        {
        }
        /**
         * Update options for ShipStation settings.
         *
         * `WC_Integration::process_admin_options()` cannot be hooked directly because it
         * returns a value and PHPStan rejects that for action callbacks.
         *
         * When Status Mapping Mode is "API" (`status_mode === 'api'`), the five status
         * mapping <select> elements are HTML-disabled in the browser and therefore do
         * not arrive in `$_POST`. WC's validate_*_field() helpers turn an absent key
         * into `''`, so without intervention `process_admin_options()` would clear the
         * stored mappings on every save. Pre-fill the missing keys from `get_option()`
         * so the values round-trip unchanged, matching the merchant's expectation that
         * saving while ShipStation owns the mappings is a no-op for those fields.
         *
         * The WPCOM-transport checkbox gets the same pre-fill when a constant or
         * filter override renders it disabled, and the form fields are rebuilt after
         * the save so the conditional WordPress.com connection section reflects the
         * new opt-in value on the same request (SHIPSTN-141).
         */
        public function update_shipstation_options()
        {
        }
        /**
         * Initialize the authentication display functionality.
         */
        private function init_auth_display()
        {
        }
        /**
         * Bootstrap the global broken-connection banner — the site-wide RED notice
         * that fires on WooCommerce settings screens (other than the ShipStation tab)
         * when a previously-working connection has gone silent (SHIPSTN-142). Guarded
         * so a partial load never fatals.
         *
         * @return void
         */
        private function init_global_connection_banner()
        {
        }
        /**
         * Update the status mode and the status mapping fields if the plugin is a fresh installed.
         *
         * @param array $request_params Request parameters.
         */
        public function maybe_update_status_mode($request_params)
        {
        }
        /**
         * Check if the plugin has been used to export the orders.
         *
         * @return bool
         */
        public function check_shipstation_has_exported_orders()
        {
        }
        /**
         * Update API Mode.
         *
         * @param array $request_params Request parameters.
         */
        public function maybe_update_api_mode($request_params)
        {
        }
        /**
         * Save status mapping.
         *
         * @param array $request_params Request parameter.
         */
        public function maybe_save_status_mapping($request_params)
        {
        }
        /**
         * Handle a custom variable query var to get orders with the 'order_number' meta for HPOS.
         *
         * @param array $query_vars - Query vars from WC_Order_Query.
         *
         * @return array modified $query_vars
         */
        public function add_custom_query_vars_for_hpos($query_vars)
        {
        }
        /**
         * Handle a custom variable query var to get orders with the 'order_number' meta for order post type.
         *
         * @param array $query      Main query of WC_Order_Query.
         * @param array $query_vars Query vars from WC_Order_Query.
         *
         * @return array modified $query.
         */
        public function add_custom_query_vars_for_cpt($query, $query_vars)
        {
        }
        /**
         * Add more information into diagnostic API results.
         *
         * @param array $site_info Site informations.
         *
         * @return array
         */
        public function add_more_diagnostics_details($site_info)
        {
        }
        /**
         * Enqueue admin scripts/styles
         */
        public function enqueue_scripts()
        {
        }
        /**
         * Enqueue scripts and styles for the ShipStation integration settings page.
         *
         * @since 5.0.8
         *
         * @param string $hook_suffix Current admin page hook suffix.
         */
        public function enqueue_admin_settings_scripts($hook_suffix)
        {
        }
        /**
         * Generate a key.
         *
         * @return string
         */
        public function generate_key()
        {
        }
        /**
         * Init integration form fields
         */
        public function init_form_fields()
        {
        }
        /**
         * Render no standalone row for the WordPress.com transport field (SHIPSTN-142,
         * reqs 6 & 7). The save-bearing `wpcom_transport_enabled` field stays registered
         * in data-settings so its checkbox POSTs under
         * `woocommerce_shipstation_wpcom_transport_enabled` and
         * {@see validate_wpcom_transport_field()} runs — but the checkbox itself is now
         * hand-rendered inside the unified "ShipStation Connection" section's
         * always-visible transport strip by {@see generate_shipstation_credentials_html()},
         * so this WC-dispatched renderer emits nothing to avoid a duplicate row.
         *
         * @since 5.2.0
         *
         * @param string $key  Field key.
         * @param array  $data Field data.
         *
         * @return string Empty string (the field is rendered inside the unified section).
         */
        public function generate_wpcom_transport_html($key, $data)
        {
        }
        /**
         * Render the always-visible WordPress.com transport strip for the unified
         * "ShipStation Connection" section (SHIPSTN-142, reqs 6 & 7): the relocated
         * "Enable WordPress.com Transport" checkbox followed by the connect / connected +
         * guarded-disconnect controls.
         *
         * The checkbox is hand-rendered with the exact WC field name and id so it POSTs
         * to the registered `wpcom_transport_enabled` field and so the page JS can focus
         * it (`#woocommerce_shipstation_wpcom_transport_enabled`). When a constant or
         * filter override forces the transport on
         * ({@see Features::is_wpcom_transport_forced_by_override()}), the checkbox renders
         * disabled + checked with the override note — matching the prior data-settings
         * behaviour; the disabled-checked POST is round-tripped in
         * {@see update_shipstation_options()} so the stored opt-in is preserved.
         *
         * @since 5.2.0
         *
         * @param bool $transport_enabled Whether the saved/effective transport toggle is on.
         *
         * @return string Transport strip HTML.
         */
        private function build_wpcom_transport_strip_html(bool $transport_enabled): string
        {
        }
        /**
         * The help text shown beneath the relocated transport checkbox: the standard
         * "what this does" copy, prefixed with the locked-by-override note when a
         * constant or filter is forcing the transport on (SHIPSTN-142, reqs 6 & 7).
         *
         * Mirrors the description previously assembled in data-settings.php so the
         * relocated checkbox keeps the same guidance and the same forced-override note.
         *
         * @since 5.2.0
         *
         * @param bool $forced Whether a constant/filter override is forcing the transport on.
         *
         * @return string Escaped description HTML.
         */
        private function wpcom_transport_description_html(bool $forced): string
        {
        }
        /**
         * Save the WordPress.com transport toggle exactly like a checkbox; the custom
         * field type only changes rendering, not persistence.
         *
         * @since 5.2.0
         *
         * @param string $key   Field key.
         * @param mixed  $value Posted value.
         *
         * @return string 'yes' or 'no'.
         */
        public function validate_wpcom_transport_field($key, $value)
        {
        }
        /**
         * Whether the site currently has a live Jetpack/WordPress.com connection,
         * resolved null-safely for the connection-status logic (SHIPSTN-142).
         *
         * Threaded into {@see Connection_Log::connection_status()} and
         * {@see Connection_Log::health_from_rows()} so a proxy (wpcom) route reads as
         * "Disconnected" the moment Jetpack drops, instead of staying "Active" until
         * the recency window lapses. When the WordPress.com package is unavailable the
         * facade is null — there is no live link, so this is `false` (a proxy row is
         * genuinely disconnected), never a misleading `true`.
         *
         * {@see WPCOM_Connection::is_connected()} is synchronous and render-time safe.
         *
         * @since 5.2.0
         *
         * @return bool
         */
        private function is_wpcom_connected(): bool
        {
        }
        /**
         * Connection-log rows for the current settings render, fetched once.
         *
         * {@see generate_shipstation_credentials_html()} reads these rows twice on the
         * same render — once for the section verdict's health computation and once for
         * the Connections fold's list — so memoising avoids a second
         * {@see Connection_Log::all()} (and its key-row fan-out) on the same request.
         *
         * @since 5.2.0
         *
         * @return array[] Rows as returned by {@see Connection_Log::all()}.
         */
        private function get_connection_rows(): array
        {
        }
        /**
         * Render the unified "ShipStation Connection" section row (SHIPSTN-142, reqs 6
         * & 7). One settings row whose body, top to bottom, is:
         *   - an always-visible header: a section status pill (the overall sync verdict
         *     — Connected / Action needed / Not connected yet) (D10);
         *   - a conditional inline banner driven by the same verdict (D11/D13);
         *   - the always-visible WordPress.com transport strip: the "Enable WordPress.com
         *     Transport" checkbox + connect/connected/disconnect/repair controls (D9);
         *   - three collapsible <details> subsections, collapsed by default unless the
         *     verdict auto-opens Credentials (D12):
         *       - Credentials: the values ShipStation needs (Consumer Key, Consumer
         *         Secret, Authentication Key, Store URL) with inline Generate. In direct
         *         mode the Store URL is the site URL.
         *       - Connections: where ShipStation has authenticated from.
         *       - API Keys: the plugin-generated REST key pairs, with per-row delete.
         *
         * @since 5.2.0
         *
         * @param string $key  Field key.
         * @param array  $data Field data (title).
         *
         * @return string Row HTML.
         */
        public function generate_shipstation_credentials_html($key, $data)
        {
        }
        /**
         * The nonced WordPress.com connect URL the inline banner's "Reconnect
         * WordPress.com" action links to (SHIPSTN-142, reqs 6 & 7). Reuses the exact
         * same admin-post action + nonce the wpcom-controls.php Connect button builds,
         * so the relay/handler path is identical — no second nonce is introduced.
         *
         * @since 5.2.0
         *
         * @return string Nonced admin-post URL.
         */
        private static function wpcom_connect_url(): string
        {
        }
        /**
         * Build the section-level status pill for the unified "ShipStation Connection"
         * section (SHIPSTN-142, D10): the OVERALL ShipStation sync verdict, distinct
         * from {@see wpcom_status_pill()} (which reflects only the Jetpack link state)
         * and carrying no WordPress.com logo. Colour-coded by the verdict pill state.
         *
         * @internal Template render helper; not part of the public plugin API.
         *
         * @since 5.2.0
         *
         * @param string $pill One of 'connected', 'action', 'pending' (from {@see Connection_Log::section_verdict()}).
         *
         * @return string Pill HTML.
         */
        public static function section_status_pill(string $pill): string
        {
        }
        /**
         * The inline banner copy for a verdict's symbolic banner state (SHIPSTN-142,
         * D13). Maps the symbolic `banner` token (never_synced|inactive|mismatch|
         * disconnected|rejected) onto the merchant-facing body string and the action
         * button label. The input is the symbolic verdict state — not a health reason —
         * because {@see Connection_Log::section_verdict()} already resolved credential
         * dominance and the never-synced/setup split.
         *
         * @since 5.2.0
         *
         * @param string $banner_state One of 'never_synced', 'inactive', 'mismatch', 'disconnected', 'rejected'.
         *
         * @return array{body: string, action_label: string} The banner body, and the action button label ('' when no button).
         */
        private static function connection_banner_copy(string $banner_state): array
        {
        }
        /**
         * The credentials section carries no value; keep saves from persisting a
         * junk setting for it.
         *
         * @since 5.2.0
         *
         * @param string $key   Field key.
         * @param mixed  $value Posted value (always absent).
         *
         * @return string Empty string.
         */
        public function validate_shipstation_credentials_field($key, $value)
        {
        }
        /**
         * Build the WordPress.com connection controls shown atop the inline section:
         * the connect button, the connected state with the guarded disconnect intent
         * flow (pending → confirm when a direct fallback is detected; blocked +
         * "Dangerously disconnect" otherwise). In the admin these always render (the
         * connection is initialized regardless of the transport toggle), and the CSS
         * hides the block until the checkbox is ticked; '' only when the WordPress.com
         * package is unavailable outside the admin. Mirrors the guarded disconnect
         * flow in WPCOM_Connection (SHIPSTN-142).
         *
         * @since 5.2.0
         *
         * @return string Controls HTML.
         */
        private function build_wpcom_controls_html(): string
        {
        }
        /**
         * Build a WordPress.com connection-status pill: the WordPress.com icon, an
         * optional check mark, and a label, colour-coded by state via a modifier
         * class (connected = green, pending = amber, disconnected = gray).
         *
         * Static so the WordPress.com controls template can render pills without an
         * instance handle.
         *
         * @internal Template render helper; not part of the public plugin API.
         *
         * @since 5.2.0
         *
         * @param string $modifier State modifier: 'connected', 'pending', or 'disconnected'.
         * @param string $label    Pill label text.
         * @param string $dashicon Optional dashicon class to prepend (e.g. 'dashicons-yes-alt' for connected, 'dashicons-ellipsis' for pending).
         *
         * @return string Pill HTML.
         */
        public static function wpcom_status_pill($modifier, $label, $dashicon = '')
        {
        }
        /**
         * Translated labels for every status-pill state, shared by the API key list and
         * the observed-connection list so the two never drift. The key list uses
         * active/inactive/new/unused; the connection list active/inactive/rejected/
         * disconnected/mismatch/deleted — the union lives here.
         *
         * Static so the observed-connections template can render pills without an
         * instance handle.
         *
         * @return array<string,string> State modifier => translated label.
         */
        public static function pill_labels(): array
        {
        }
        /**
         * Render an inline status pill. Both the API key list and the observed-
         * connection list share this `shipstation-key-pill` markup so a markup or
         * state change lands in one place.
         *
         * @param string $modifier Pill state modifier (see {@see pill_labels()}).
         * @param string $label    Already-translated pill label.
         *
         * @return string Span HTML (internally escaped).
         */
        public static function key_pill(string $modifier, string $label): string
        {
        }
        /**
         * Gather the plugin-generated API key rows for the "API Keys" subsection,
         * sorted for display (SHIPSTN-142).
         *
         * Key generation is non-destructive everywhere — any older pair may be the
         * one currently configured in ShipStation — so this list is where the
         * merchant retires pairs they no longer use. Rows are fetched at render
         * time so the table reflects keys minted earlier in the same request.
         *
         * @since 5.2.0
         *
         * @return array{0: array, 1: int} The sorted rows and the newest key id.
         */
        private static function get_sorted_plugin_key_rows(): array
        {
        }
        /**
         * Render the "API Keys" subsection table to a string.
         *
         * Shared by the settings-tab render and the generate-keys AJAX response so the
         * just-minted key appears in the list without a page reload, using the exact
         * same server-authored markup (no client-side row building to drift).
         *
         * @since 5.2.0
         *
         * @return string Rendered api-key-list.php output.
         */
        public static function render_api_key_list_html(): string
        {
        }
        /**
         * The Unix timestamp at which a never-used key will be auto-removed by the
         * orphan prune, or 0 when it carries no countdown.
         *
         * No countdown when the key cannot actually be pruned: the newest plugin row
         * is always protected, and a row with no recorded mint time has an unknowable
         * age. The deadline is surfaced as a machine instant; relative-time.js renders
         * the live "auto-deletes in …" countdown in the viewer's locale.
         *
         * Static so the API key list template can compute the deadline without an
         * instance handle.
         *
         * @internal Template render helper; not part of the public plugin API.
         *
         * @since 5.2.0
         *
         * @param int  $key_id    Key row id.
         * @param bool $is_newest Whether this is the prune-protected newest row.
         *
         * @return int Deadline Unix timestamp, or 0 when no countdown applies.
         */
        public static function prune_deadline_ts(int $key_id, bool $is_newest): int
        {
        }
        /**
         * Prevents WooCommerce Subscriptions from copying across certain meta keys to renewal orders.
         *
         * @param string $order_meta_query Order meta query.
         * @param int    $original_order_id Original order ID.
         * @param int    $renewal_order_id Order ID after being renewed.
         * @param string $new_order_role New order role.
         *
         * @return array
         */
        public function subscriptions_renewal_order_meta_query($order_meta_query, $original_order_id, $renewal_order_id, $new_order_role)
        {
        }
        /**
         * Hides any admin notices.
         *
         * @since 4.1.37
         * @return void
         */
        public function hide_notices()
        {
        }
        /**
         * Settings prompt
         */
        public function settings_notice()
        {
        }
    }
    /**
     * A class to maintain privacy.
     *
     * @package WC_ShipStation
     */
    class WC_ShipStation_Privacy extends \WC_Abstract_Privacy
    {
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Returns a list of orders.
         *
         * @param string $email_address Email address.
         * @param int    $page Current page number in pagination.
         *
         * @return WC_Order[]
         */
        protected function get_orders($email_address, $page)
        {
        }
        /**
         * Gets the message of the privacy to display.
         */
        public function get_privacy_message()
        {
        }
        /**
         * Handle exporting data for Orders.
         *
         * @param string $email_address E-mail address to export.
         * @param int    $page          Pagination of data.
         *
         * @return array
         */
        public function order_data_exporter($email_address, $page = 1)
        {
        }
        /**
         * Finds and erases order data by email address.
         *
         * @since 3.4.0
         * @param string $email_address The user email address.
         * @param int    $page  Page.
         * @return array An array of personal data in name value pairs
         */
        public function order_data_eraser($email_address, $page)
        {
        }
        /**
         * Handle eraser of data tied to Orders
         *
         * @param WC_Order $order Order object.
         *
         * @return array
         */
        protected function maybe_handle_order($order)
        {
        }
    }
}
namespace WooCommerce\Shipping\ShipStation {
    /**
     * Thin facade over Jetpack's Connection Manager.
     */
    class WPCOM_Connection
    {
        /**
         * Jetpack connection slug used to identify this plugin in the Connection Manager.
         */
        const SLUG = 'woocommerce-shipstation';
        /**
         * Human-readable plugin name registered with the Jetpack connection.
         */
        const NAME = 'ShipStation for WooCommerce';
        /**
         * Pending flow: merchant clicked "Connect to WordPress.com".
         */
        const ACTION_CONNECT = 'connect';
        /**
         * Pending flow: merchant clicked "Disconnect from WordPress.com".
         */
        const ACTION_DISCONNECT = 'disconnect';
        /**
         * Outcome flow: a disconnect was intentionally refused because other plugins
         * still use the WordPress.com connection. A connection-respecting disconnect
         * is a no-op in that case (see {@see disconnect()}), so this drives an
         * informational notice — not the "could not disconnect" error — and steers
         * the merchant to the transport toggle, the real lever for ShipStation.
         */
        const ACTION_DISCONNECT_SHARED = 'disconnect_shared';
        /**
         * Jetpack connection-consumer slugs that do NOT count as "another plugin"
         * when deciding whether a disconnect is safe.
         *
         * WooCommerce core registers slug 'woocommerce' on every store
         * (class-woocommerce.php init_jetpack_connection_config(), unconditional), so
         * counting it would make ShipStation never the sole consumer and suppress the
         * disconnect control everywhere. It also re-registers harmlessly on the next
         * load, so excluding it is safe. ShipStation's own slug is excluded for the
         * same self-evident reason.
         *
         * @var string[]
         */
        const BASELINE_CONNECTION_SLUGS = array('woocommerce');
        /**
         * Site option recording a pending disconnect *intent*. Disconnect is a
         * two-step, guarded flow (SHIPSTN-142): clicking "Disconnect from
         * WordPress.com" records this intent rather than tearing down the connection,
         * because the proxy may be ShipStation's only working route. The real Jetpack
         * disconnect runs only once a direct ShipStation connection is detected (the
         * fallback signal) and the merchant confirms — or via the explicit
         * "Dangerously disconnect" override. Presence of the option = a disconnect is
         * pending; the value is the epoch the intent was recorded.
         *
         * @var string
         */
        const DISCONNECT_INTENT_OPTION = 'woocommerce_shipstation_disconnect_intent';
        /**
         * Site option recording the site URL that was registered with WordPress.com
         * when the connection was established (SHIPSTN-142, slice 4 — stale-URL / IDC
         * detection). It mirrors the `siteurl` that {@see Jetpack_Connection_Manager}
         * `register()` sent to WordPress.com, which is the address WordPress.com
         * forwards proxied ShipStation traffic to. If the site later moves (domain
         * migration), `home_url()` changes but WordPress.com keeps delivering to this
         * recorded URL — a Jetpack "identity crisis" that makes the proxy dead while
         * `is_connected()` (local tokens only) still reports connected. Comparing this
         * value's host to the current `home_url()` host is our detection signal.
         * Stamped on connect/reconnect, cleared on disconnect.
         *
         * @var string
         */
        const CONNECTED_URL_OPTION = 'woocommerce_shipstation_connected_url';
        /**
         * URL status (connection_url_status()): the site is not WordPress.com-connected,
         * so the URL check does not apply.
         */
        const URL_STATUS_NOT_CONNECTED = 'not_connected';
        /**
         * URL status (connection_url_status()): connected and the recorded URL host
         * matches the current site host — the proxy route is sound.
         */
        const URL_STATUS_OK = 'ok';
        /**
         * URL status (connection_url_status()): connected but the recorded URL host
         * differs from the current site host — a stale registration / identity crisis.
         * The proxy is delivering to the old address and needs a repair (reconnect).
         */
        const URL_STATUS_MISMATCH = 'mismatch';
        /**
         * URL status (connection_url_status()): connected but no URL was ever recorded
         * (a connection established before slice 4 shipped). Treated as OK; the next
         * settings render backfills the stamp so future moves are detected.
         */
        const URL_STATUS_UNKNOWN = 'unknown';
        /**
         * Per-user transient carrying the pending action that kicked off the current flow.
         * Cleared when the resulting notice is rendered or the TTL elapses.
         */
        const ACTION_TRANSIENT = 'shipstation_wpcom_action';
        /**
         * TTL for the pending-action transient. Short enough to bound the "stale notice
         * on next admin visit" window, long enough to cover the WPCOM authorize round-trip.
         */
        const ACTION_TRANSIENT_TTL = 90;
        /**
         * Cached Jetpack Connection Manager instance.
         *
         * @var \Automattic\Jetpack\Connection\Manager|null
         */
        private ?\Automattic\Jetpack\Connection\Manager $manager = null;
        /**
         * Guards bootstrap() against double-registration of hooks.
         *
         * @var bool
         */
        private bool $bootstrapped = false;
        /**
         * Register the connection package with Jetpack and wire admin hooks.
         * Idempotent: guarded by $bootstrapped so repeat calls don't double-register hooks.
         */
        public function bootstrap(): void
        {
        }
        /**
         * Bounce the merchant from `?page=jetpack` (the Calypso post-authorize
         * landing) back to the ShipStation settings tab when our connect/disconnect
         * action transient is set.
         *
         * Hooked on `admin_page_access_denied` so we run immediately before WP would
         * otherwise wp_die with "Sorry, you are not allowed to access this page."
         * (the Jetpack admin menu requires a cap that's only present when the
         * Jetpack core plugin is installed).
         *
         * Tightened compared to maybe_redirect_to_settings(): only intercepts the
         * specific `?page=jetpack` URL — any other denied admin page that happens
         * to fire this hook during our 90s transient window is left to its normal
         * wp_die so we don't yank merchants away from unrelated permission denials.
         * (Network admin context is skipped inside maybe_redirect_to_settings(),
         * so both this hook and the admin_init hook share that protection.)
         */
        public function maybe_redirect_post_authorize_landing(): void
        {
        }
        /**
         * Append the Jetpack/WPCOM hosts to allowed_redirect_hosts so wp_safe_redirect()
         * accepts our outbound jump from handle_connect_action() to jetpack.wordpress.com.
         *
         * Mirrors the host list Jetpack itself adds inside Webhooks\Authorize_Redirect::handle().
         *
         * @param array $hosts Existing allowed redirect hosts.
         * @return array Hosts with Jetpack/WPCOM/Calypso entries appended.
         */
        public function allow_wpcom_redirect_hosts($hosts): array
        {
        }
        /**
         * Whether the site has a Jetpack connection to WPCOM.
         *
         * Requires both site-level (`is_connected`) and a connected owner
         * (`has_connected_owner`) — matches WooCommerce Shipping's definition in
         * classes/class-wc-connect-jetpack.php so we don't treat a half-completed
         * registration (site token written, no user-token yet) as connected.
         *
         * @return bool True when Jetpack reports both a site connection and an owner.
         */
        public function is_connected(): bool
        {
        }
        /**
         * Return the site's WPCOM blog id, or null if the site isn't registered.
         *
         * @return int|null WPCOM blog id when known, otherwise null.
         */
        public function get_blog_id(): ?int
        {
        }
        /**
         * Build the WordPress.com proxy URL ShipStation should use as the Store URL.
         *
         * @since 5.2.0
         *
         * @return string|null Proxy URL, or null when the site has no WPCOM blog id.
         */
        public function get_proxy_url(): ?string
        {
        }
        /**
         * Build the Jetpack site-level authorize URL.
         *
         * Uses the default `auth_type=calypso` flow for the smoothest WPCOM-side UI
         * and appends a `from=woocommerce-shipstation` query arg so WordPress.com
         * recognizes the originating plugin and renders the standalone-plugin
         * authorize UI rather than landing the merchant on the generic Jetpack admin
         * page. Same pattern WooCommerce Shipping uses in
         * classes/class-wc-connect-jetpack.php.
         *
         * @param string $return_url Where to redirect the merchant after the flow completes. Defaults to the ShipStation settings tab.
         * @return string|null Null if the Connection package is unavailable.
         */
        public function get_authorize_url(string $return_url = ''): ?string
        {
        }
        /**
         * Disconnect the site from WordPress.com.
         *
         * Uses the full Manager::disconnect_site() ($ignore_connected_plugins = true).
         * The respectful variant ($ignore_connected_plugins = false) is unusable here:
         * WooCommerce core always registers slug 'woocommerce', so Jetpack's own
         * is_only() guard would refuse the disconnect on every store. We gate the
         * tear-down at the application level instead — callers only reach here once
         * {@see has_other_connection_consumers()} is false, so the only other
         * registered consumer is WooCommerce core, which re-registers harmlessly on
         * the next load. With that gate satisfied, a still-connected result is a
         * genuine failure.
         *
         * @return bool True if the site ended up disconnected.
         */
        public function disconnect(): bool
        {
        }
        /**
         * Whether a genuine third-party plugin — beyond WooCommerce core and
         * ShipStation itself — currently holds the WordPress.com connection (e.g.
         * Jetpack, Jetpack Backup, WooCommerce Shipping & Tax). When true, a full
         * disconnect would tear the connection down for that plugin too, so the UI
         * steers the merchant to the transport toggle instead of disconnecting.
         *
         * WooCommerce core is excluded ({@see BASELINE_CONNECTION_SLUGS}) because it
         * registers the connection unconditionally on every store; counting it would
         * suppress the disconnect control everywhere.
         *
         * Reads Plugin_Storage, configured on plugins_loaded; this runs on admin_post
         * / settings render (both later). Unknown state (package missing, WP_Error,
         * not yet configured) is treated as "no other consumers" so disconnect stays
         * available rather than being silently blocked.
         *
         * @return bool
         */
        public function has_other_connection_consumers(): bool
        {
        }
        /**
         * Classify the WordPress.com connection's URL health (slice 4).
         *
         * Compares the host of the URL recorded at connect ({@see CONNECTED_URL_OPTION})
         * against the current `home_url()` host. A difference means the site moved and
         * WordPress.com is still forwarding proxied traffic to the old address — a
         * Jetpack identity crisis — even though `is_connected()` (local tokens only)
         * still reports connected. Pure: no side effects (the lazy stamp lives in
         * {@see backfill_connected_url()}).
         *
         * @return string One of self::URL_STATUS_NOT_CONNECTED, URL_STATUS_UNKNOWN,
         *                URL_STATUS_MISMATCH, or URL_STATUS_OK.
         */
        public function connection_url_status(): string
        {
        }
        /**
         * Whether the connection is up but registered to a different site URL than the
         * site now uses — the actionable identity-crisis state the settings UI repairs.
         *
         * @return bool
         */
        public function has_url_mismatch(): bool
        {
        }
        /**
         * Record the current site URL as the one registered with WordPress.com for a
         * connection that predates slice 4 (no stamp yet). Starts mismatch tracking
         * from "now" so the next domain change is detected. No-op once a URL is
         * recorded, or when the site isn't connected. Call on settings render.
         *
         * Note: a connection that was ALREADY on a stale URL when slice 4 shipped
         * cannot be detected retroactively — WordPress.com won't reveal the old URL
         * once the site is unreachable — so this assumes the current URL is sound.
         *
         * @return void
         */
        public function backfill_connected_url(): void
        {
        }
        /**
         * The host of the URL registered with WordPress.com (the "previous" domain
         * when a mismatch exists), or '' when none is recorded.
         *
         * @return string
         */
        public function get_connected_host(): string
        {
        }
        /**
         * The host of the site's current `home_url()` (the "current" domain).
         *
         * @return string
         */
        public function get_current_host(): string
        {
        }
        /**
         * Read the recorded connect URL, or '' when none is stored.
         *
         * @return string
         */
        public function get_connected_url(): string
        {
        }
        /**
         * Record the URL registered with WordPress.com.
         *
         * @param string $url Site URL that was registered (typically home_url()).
         * @return void
         */
        private function set_connected_url(string $url): void
        {
        }
        /**
         * Clear the recorded connect URL (on disconnect).
         *
         * @return void
         */
        private function clear_connected_url(): void
        {
        }
        /**
         * Whether two URLs share the same (case-insensitive) host. Host-only by
         * design: a domain move is what breaks the WordPress.com proxy route; a
         * scheme tweak on the same host does not.
         *
         * @param string $a First URL.
         * @param string $b Second URL.
         * @return bool
         */
        private function same_host(string $a, string $b): bool
        {
        }
        /**
         * Extract the lower-cased host from a URL, or '' when it has none.
         *
         * @param string $url URL to parse.
         * @return string
         */
        private function url_host(string $url): string
        {
        }
        /**
         * Admin-post handler: register the site if needed and kick off the Jetpack
         * authorize flow. Records the action so the return-trip lands on the settings tab.
         */
        public function handle_connect_action(): void
        {
        }
        /**
         * Admin-post handler: re-establish the WordPress.com connection as a NEW site
         * after the site address changed (slice 4 — the only heal path).
         *
         * When the domain changes, the connection is bound to a dead URL. Keeping the
         * same blog id across a domain change would require jetpack-sync's IDC migrate
         * (declined for footprint — it means continuous full-site sync), so the
         * supported fix is a fresh connection: WordPress.com mints a NEW blog id / proxy
         * URL, and the merchant updates ShipStation's Store URL afterward.
         *
         * The teardown is LOCAL ONLY — `disconnect_site( false, … )` drops this site's
         * tokens without telling WordPress.com to deregister — so if this is a staging
         * clone of another site, the original site's WordPress.com record is untouched.
         * `$ignore_connected_plugins = true` lets the local clear proceed even though
         * WooCommerce core also registered the connection (each plugin re-registers).
         */
        public function handle_connect_fresh_action(): void
        {
        }
        /**
         * Admin-post handler: record the *intent* to disconnect, without touching the
         * Jetpack connection. Disconnecting tears down the proxy Store URL, so if
         * ShipStation is reaching the store only through WordPress.com the disconnect
         * is gated until a direct fallback connection is detected (or the merchant
         * uses the "Dangerously disconnect" override). The settings section reflects
         * the pending state and offers Confirm / Cancel / Dangerously disconnect.
         */
        public function handle_disconnect_request(): void
        {
        }
        /**
         * Admin-post handler: perform the real Jetpack disconnect — the GUARDED
         * execution. Refuses unless a direct ShipStation connection has been seen
         * within the active window (the fallback signal) OR the request carries the
         * explicit `force` flag ("Dangerously disconnect"). A refusal leaves the
         * pending intent intact and returns to the settings tab.
         */
        public function handle_disconnect_complete(): void
        {
        }
        /**
         * Admin-post handler: abandon a pending disconnect intent, leaving the
         * WordPress.com connection intact.
         */
        public function handle_disconnect_cancel(): void
        {
        }
        /**
         * Tear down the Jetpack site connection and keep the heartbeat schedule sane.
         * Shared by the confirm and forced ("Dangerously disconnect") paths.
         */
        private function perform_disconnect(): void
        {
        }
        /**
         * Re-schedule the Jetpack heartbeat cron event after a teardown that
         * unschedules it (disconnect, or the staging local-token clear).
         *
         * Manager::disconnect_site() unschedules `jetpack_v2_heartbeat`. On the *next*
         * page load Jetpack's plugins_loaded callback re-instantiates Heartbeat and
         * re-schedules the event — but plugins_loaded fires before after_setup_theme,
         * so the wp_schedule_event() call triggers WC's cron_schedules filter callback
         * (WC_Install::cron_schedules) which calls __('Monthly', 'woocommerce') before
         * WP 6.7's textdomain timing check passes. That emits a "_doing_it_wrong"
         * notice, the notice text echoes into the response body, and the settings
         * page's admin-header.php then fails with "Cannot modify header information —
         * headers already sent."
         *
         * Re-scheduling here (post-init, with after_setup_theme already fired) is safe
         * and means Jetpack's next plugins_loaded run finds an existing schedule and
         * skips the problematic wp_schedule_event() call.
         *
         * @return void
         */
        private function ensure_heartbeat_scheduled(): void
        {
        }
        /**
         * Whether a disconnect intent is currently pending.
         *
         * @return bool
         */
        public function has_disconnect_intent(): bool
        {
        }
        /**
         * Record a pending disconnect intent (epoch of the request).
         *
         * @return void
         */
        private function set_disconnect_intent(): void
        {
        }
        /**
         * Clear any pending disconnect intent.
         *
         * @return void
         */
        public function clear_disconnect_intent(): void
        {
        }
        /**
         * Log the WP_Error surfaced by Jetpack's webhook when authorize() fails.
         *
         * Unconditionally logs, so errors that fire outside our originating flow (other
         * Jetpack consumers, user-context-less webhook callbacks) are still captured.
         *
         * @param mixed $error WP_Error from Jetpack; loosely typed because the action is shared.
         */
        public function log_authorize_error($error): void
        {
        }
        /**
         * If the merchant landed on any admin page while a connect/disconnect flow
         * is still pending, bounce them to the ShipStation settings tab so the
         * notice renders in context.
         */
        public function maybe_redirect_to_settings(): void
        {
        }
        /**
         * Render a success/error admin notice on the ShipStation settings tab based on
         * the action transient and the resulting connection state, then clear the action.
         */
        public function render_admin_notice(): void
        {
        }
        /**
         * Return the translated notice message for the given action/outcome pair.
         *
         * @param string $action  One of self::ACTION_CONNECT or self::ACTION_DISCONNECT.
         * @param bool   $success Whether the action achieved the desired end state.
         * @return string Translated, user-facing message text.
         */
        private function notice_message_for(string $action, bool $success): string
        {
        }
        /**
         * Whether the given string is one of the known pending-action identifiers.
         *
         * @param string $action Candidate action identifier.
         * @return bool
         */
        private function is_known_action(string $action): bool
        {
        }
        /**
         * Store the current flow's action for the current user.
         *
         * Rejects unknown action identifiers so typos fail loudly rather than rendering
         * the wrong notice branch.
         *
         * @param string $action One of self::ACTION_CONNECT, self::ACTION_DISCONNECT, or self::ACTION_DISCONNECT_SHARED.
         */
        private function set_action(string $action): void
        {
        }
        /**
         * Read the current user's pending action, or '' if none is queued or the value
         * is not one of the known action constants.
         *
         * @return string Stored action (one of the self::ACTION_* constants), or ''
         *                when nothing valid is pending.
         */
        private function get_action(): string
        {
        }
        /**
         * Clear the current user's pending action.
         */
        private function clear_action(): void
        {
        }
        /**
         * Redirect to the ShipStation settings tab and end the request.
         */
        private function redirect_to_settings(): void
        {
        }
        /**
         * Absolute URL of the ShipStation settings tab.
         *
         * @return string Fully qualified admin URL for the ShipStation integration tab.
         */
        private static function settings_url(): string
        {
        }
        /**
         * Whether the current admin request is for the ShipStation settings tab.
         *
         * @return bool True when page/tab/section query args match the ShipStation integration tab.
         */
        private function is_shipstation_settings_screen(): bool
        {
        }
        /**
         * Persist the WordPress.com transport toggle to match the (possibly unsaved)
         * checkbox state carried on a connect/disconnect action link, before the
         * action runs. The settings tab now renders the connect/disconnect controls
         * regardless of the saved toggle (CSS-hidden until the box is ticked), so the
         * merchant can act on the connection without saving the form first; the link's
         * `wpcom_transport` param lets us keep the option and the action consistent.
         * Nonce + capability are already verified by the calling handler.
         *
         * @return void
         */
        private function maybe_persist_transport_toggle(): void
        {
        }
        /**
         * Verify the admin-post nonce and capability for a connection action, dying
         * with a clear message on failure.
         *
         * @param string $nonce_action Nonce action name to verify.
         *
         * @return void
         */
        private function assert_admin_action_allowed(string $nonce_action): void
        {
        }
        /**
         * Lazy-instantiate and cache the Jetpack Connection Manager.
         *
         * @return \Automattic\Jetpack\Connection\Manager|null Manager instance, or null when the Connection package is unavailable.
         */
        private function get_manager(): ?\Automattic\Jetpack\Connection\Manager
        {
        }
        /**
         * Whether Jetpack's Composer autoloader has loaded the Connection package.
         *
         * @return bool True when the Manager class is available to instantiate.
         */
        private function is_jetpack_autoloader_ready(): bool
        {
        }
    }
}
namespace {
    /**
     * Drop the connection-log table and delete the feature options for one blog.
     *
     * Option names mirror the class constants (kept as literals because the plugin
     * is not loaded at uninstall time):
     *  - Connection_Log::TABLE / DB_VERSION_OPTION
     *  - Connection_Change_Notice::SEEN_URL_OPTION / PENDING_OPTION
     *  - Auth_Controller::KEY_META_OPTION / GEN_LOCK_OPTION
     *  - WPCOM_Connection::DISCONNECT_INTENT_OPTION / CONNECTED_URL_OPTION
     *
     * @return void
     */
    function woocommerce_shipstation_uninstall_cleanup()
    {
    }
    /**
     * Run the cleanup for every blog on multisite, or just the current site.
     *
     * Wrapped in a function so the iteration variables stay out of the global scope.
     *
     * @return void
     */
    function woocommerce_shipstation_run_uninstall()
    {
    }
    \define('WC_SHIPSTATION_FILE', __FILE__);
    \define('WC_SHIPSTATION_ABSPATH', \trailingslashit(__DIR__));
    \define('WC_SHIPSTATION_PLUGIN_DIR', \plugin_dir_path(__FILE__));
    \define('WC_SHIPSTATION_PLUGIN_URL', \plugin_dir_url(__FILE__));
    \define('WC_SHIPSTATION_VERSION', '5.2.0');
    /**
     * Load WooCommerce ShipStation Instance.
     */
    function woocommerce_shipstation_instance()
    {
    }
    /**
     * Clean up scheduled background jobs on deactivation.
     *
     * Cancels the daily Action Scheduler orphan-key prune (SHIPSTN-142). Guarded by
     * class_exists because the class is only loaded once WooCommerce is active.
     *
     * @return void
     */
    function woocommerce_shipstation_deactivate()
    {
    }
    /**
     * Create the ShipStation connection-log table on activation (SHIPSTN-142).
     *
     * The class is loaded explicitly here because activation fires before this
     * plugin's plugins_loaded bootstrap has run load_files(). Existing installs get
     * the table via Connection_Log::maybe_install() on the next load, so this only
     * fast-tracks a fresh activation.
     *
     * @return void
     */
    function woocommerce_shipstation_activate()
    {
    }
}