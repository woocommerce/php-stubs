<?php
/**
 * Generated stub declarations for woocommerce-gateway-stripe 10.9.1.
 * @see https://github.com/woocommerce/all-plugins/tree/stubs
 */

// phpcs:disable WordPress.Files.FileName -- Abstract class file follows the plugin's `abstract-*` convention.
/**
 * Shared helpers for Stripe ability definitions.
 *
 * Mirrors the shape of WooCommerce Core's
 * `Internal\Abilities\Domain\AbstractDomainAbility` (introduced in WC 10.9)
 * without coupling this plugin to that class — Woo Core's lives under
 * `Internal\`, which we treat as off-limits for cross-plugin reuse.
 *
 * Lives in `includes/abilities/` rather than the plugin's usual
 * `includes/abstracts/` directory because every consumer is itself in
 * `includes/abilities/domain/`; co-locating the base with its subdomain keeps
 * the abilities module self-contained.
 *
 * @since 10.8.0
 *
 * @internal Subject to change without notice between releases.
 */
abstract class WC_Stripe_Ability_Base
{
    /**
     * Ability category slug shared across every Stripe Domain ability.
     *
     * The `woocommerce` category is owned and registered by WooCommerce
     * Core (10.9+); plugin ownership lives in the ability namespace
     * (`woocommerce-gateway-stripe/*`), not the category. Single source of
     * truth — Domain classes reference this via `self::CATEGORY_SLUG`.
     */
    public const CATEGORY_SLUG = 'woocommerce';
    /**
     * Execute a backing REST controller route and return its unwrapped response.
     *
     * Used by Shape-2 abilities whose backing is a plugin-local REST
     * controller (the Tier 1 abilities in the RSM-108 audit). Builds a
     * `WP_REST_Request`, dispatches via `rest_do_request()`, and unwraps
     * either a `WP_REST_Response` or a raw array return shape.
     *
     * @param string $controller_class Fully-qualified backing controller class
     *                                 (informational; produces a clean error
     *                                 when the class is not loaded).
     * @param string $method           HTTP method (GET, POST, PUT, DELETE).
     * @param string $route            Resolved WP REST route path.
     * @param array  $params           Request parameters.
     * @param bool   $return_response  When true, return the WP_REST_Response so
     *                                 callers can read response headers (e.g.
     *                                 X-WP-Total for paginated envelopes).
     *
     * @phpstan-return ($return_response is true ? array|WP_REST_Response|WP_Error : array|WP_Error)
     * @return array|WP_REST_Response|WP_Error
     */
    protected static function delegate_to_rest_controller(string $controller_class, string $method, string $route, array $params = [], bool $return_response = \false)
    {
    }
    /**
     * Call Stripe's API via WC_Stripe_API::retrieve() and normalize the response.
     *
     * Used by abilities that read directly from `https://api.stripe.com/v1/$path`.
     *  Returns the decoded Stripe object or a WP_Error.
     *
     * `WC_Stripe_API::retrieve()` returns `null` on every 401 (the
     * invalid-API-key UI signal), and additionally short-circuits before
     * any network call once the invalid-key error counter exceeds the
     * threshold — both paths surface here as a typed
     * `wc_stripe_api_unauthenticated` `WP_Error` rather than a quiet empty.
     *
     * @param string $stripe_api_path Stripe API path (e.g. "charges/ch_xxx" or
     *                                "charges?limit=10"). Caller is responsible
     *                                for url-encoding any id segments.
     *
     * @return array|WP_Error
     */
    protected static function retrieve_from_stripe(string $stripe_api_path)
    {
    }
    /**
     * Build a query string for Stripe list endpoints from an input array.
     *
     * Filters out null / empty-string values, preserves bracket-style nested
     * filters (e.g. `created[gte]`), and applies Stripe's list pagination
     * conventions (`limit`, `starting_after`, `ending_before`).
     *
     * @param array $params Map of param name to scalar or scalar-keyed-array value.
     *
     * @return string Empty string when nothing remains after filtering, else
     *                a `?key=val&...` suffix.
     */
    protected static function build_stripe_query_string(array $params): string
    {
    }
    /**
     * Build a Stripe-style `expand[]=...` query fragment.
     *
     * Stripe expects `expand[]=foo&expand[]=bar` (brackets-no-index), which
     * is *not* what `http_build_query()` emits for indexed arrays. Callers
     * append the fragment to a path (with `?` or `&` separator chosen by
     * the caller, since the path may already carry an id segment or other
     * filters).
     *
     * Empty / non-string entries are dropped. Returns an empty string when
     * the resulting list is empty.
     *
     * @param array<int, mixed> $expand Whitelisted expand field names.
     * @return string e.g. "expand[]=customer&expand[]=balance_transaction" or "".
     */
    protected static function build_expand_query_fragment(array $expand): string
    {
    }
    /**
     * Append an `expand[]=...` fragment to a Stripe API path.
     *
     * Picks the right separator (`?` or `&`) based on whether the path
     * already carries a query string, and skips entirely when no expand
     * fields are requested.
     *
     * @param string            $resource_path e.g. "charges/ch_xxx" or "charges?limit=10".
     * @param array<int, mixed> $expand        Whitelisted expand field names.
     * @return string Path suitable for WC_Stripe_API::retrieve().
     */
    protected static function append_expand_to_path(string $resource_path, array $expand): string
    {
    }
}
/**
 * Registers Stripe abilities with the WordPress Abilities API.
 *
 * Thin coordinator: holds the ABILITY_CLASSES list and the
 * can_manage_woocommerce() capability helper that mirrors the load-bearing
 * read gate resolved by WC_Stripe_REST_Base_Controller::check_permission().
 *
 * Gated by the `wc_stripe_abilities_enabled` filter (default false).
 *
 * Registration pattern: abilities are registered exclusively via Woo Core's
 * `woocommerce_ability_definition_classes` loader filter (introduced in
 * WC 10.9). On stores running WC < 10.9 the feature silently no-ops — see
 * `woo_abilities_loader_available()`.
 *
 * @since 10.8.0
 *
 * @internal Subject to change without notice between releases.
 */
class WC_Stripe_Abilities_Registrar
{
    /**
     * Ability definition classes registered through the WC 10.9 loader.
     *
     * Every Stripe ability is listed here. The `::class` constants are
     * compile-time strings — referencing them does NOT autoload the
     * classes. They resolve only when Woo Core's loader iterates the
     * filter return value on WC 10.9+.
     *
     * @var array<int, class-string>
     */
    private const ABILITY_CLASSES = [\WC_Stripe_Ability_Get_Account_Summary::class, \WC_Stripe_Ability_Get_Charges::class, \WC_Stripe_Ability_Get_Charge::class, \WC_Stripe_Ability_Get_Payment_Intent::class, \WC_Stripe_Ability_Get_Disputes::class, \WC_Stripe_Ability_Get_Dispute::class, \WC_Stripe_Ability_Get_Payouts::class, \WC_Stripe_Ability_Get_Payout::class, \WC_Stripe_Ability_Get_Balance::class, \WC_Stripe_Ability_Get_Balance_Transactions::class];
    /**
     * Whether init() has already wired its filter callbacks.
     *
     * Without this guard, repeated calls to init() while the feature filter
     * is true would each append a fresh add_filter() for the registrar
     * callback, and Woo Core's loader would emit `_doing_it_wrong` notices
     * for every already-registered slug when the loader fires.
     *
     * @var bool
     */
    private static $initialized = \false;
    /**
     * Initialize the abilities registration.
     *
     * @return void
     */
    public static function init(): void
    {
    }
    /**
     * Reset the idempotency guard set by init().
     *
     * @internal Test-isolation helper. Not part of the public API.
     *
     * @return void
     */
    public static function reset_initialized_for_testing(): void
    {
    }
    /**
     * Whether WooCommerce 10.9's AbilitiesLoader is available.
     *
     * Used as a hard gate: on WC < 10.9 the abilities feature silently
     * no-ops. WC 10.9 transitively requires WP 6.9, so
     * `wp_register_ability()` is implicitly available wherever the loader
     * exists.
     *
     * @return bool
     */
    private static function woo_abilities_loader_available(): bool
    {
    }
    /**
     * Append Stripe ability classes to Woo Core's loader.
     *
     * Filter callback for `woocommerce_ability_definition_classes`.
     *
     * @param array $classes Class names accumulated by the loader.
     * @return array
     */
    public static function append_classes(array $classes): array
    {
    }
    /**
     * Permission callback for Stripe read abilities.
     *
     * Mirrors WC_Stripe_REST_Base_Controller::check_permission(), which
     * gates every Stripe REST controller in this plugin behind
     * `current_user_can( 'manage_woocommerce' )`.
     *
     * @return bool
     */
    public static function can_manage_woocommerce(): bool
    {
    }
}
// phpcs:disable WordPress.Files.FileName -- Domain class follows the plugin's `class-*` convention with `ability-` infix.
/**
 * Registers the woocommerce-gateway-stripe/get-account-summary ability.
 *
 * Answers "what's the current state of my Stripe account?" in one zero-arg
 * call — status, country, supported currencies, statement descriptor,
 * test/live mode, and pending/overdue requirements. Delegates to
 * WC_REST_Stripe_Account_Controller::get_account_summary via the abstract
 * base's delegate_to_rest_controller() helper.
 *
 * @internal Only loaded when WooCommerce 10.9+ is active. The
 *           WC_Stripe_Abilities_Registrar short-circuits before Woo Core's
 *           loader would iterate ABILITY_CLASSES on earlier WC versions.
 *
 * @since 10.8.0
 */
class WC_Stripe_Ability_Get_Account_Summary extends \WC_Stripe_Ability_Base implements \Automattic\WooCommerce\Abilities\AbilityDefinition
{
    /**
     * Stable ability ID — the public contract agents call.
     *
     * @return string
     */
    public static function get_name(): string
    {
    }
    /**
     * Build the wp_register_ability() argument array.
     *
     * @return array
     */
    public static function get_registration_args(): array
    {
    }
    /**
     * Execute callback.
     *
     * Forwards to WC_REST_Stripe_Account_Controller::get_account_summary
     * via rest_do_request() so any future controller-side normalization
     * applies uniformly to REST consumers, MCP agents, and the Abilities
     * API REST bridge.
     *
     * @param mixed $input Optional; ability input. Unused (empty input_schema).
     * @return array|WP_Error
     */
    public static function execute($input = \null)
    {
    }
}
// phpcs:disable WordPress.Files.FileName -- Domain class follows the plugin's `class-*` convention with `ability-` infix.
/**
 * Registers the woocommerce-gateway-stripe/get-balance-transactions ability.
 *
 * Lists Stripe balance transactions (charges, refunds, payouts,
 * adjustments) — answers "what cleared into or out of my Stripe balance
 * recently?". Complements get-payouts when reconciling specific payout
 * amounts. Calls the Stripe `balance_transactions` API.
 *
 * @see https://docs.stripe.com/api/balance_transactions/retrieve
 *
 * @internal
 *
 * @since 10.8.0
 */
class WC_Stripe_Ability_Get_Balance_Transactions extends \WC_Stripe_Ability_Base implements \Automattic\WooCommerce\Abilities\AbilityDefinition
{
    public static function get_name(): string
    {
    }
    public static function get_registration_args(): array
    {
    }
    /**
     * Execute the ability.
     *
     * @param array|null $input Optional ability input.
     * @return array|WP_Error
     */
    public static function execute($input = \null)
    {
    }
}
// phpcs:disable WordPress.Files.FileName -- Domain class follows the plugin's `class-*` convention with `ability-` infix.
/**
 * Registers the woocommerce-gateway-stripe/get-balance ability.
 *
 * Get the current balance overview.
 * Calls the Stripe `balance` API.
 *
 * @see https://docs.stripe.com/api/balance/balance_retrieve
 *
 * @internal
 *
 * @since 10.8.0
 */
class WC_Stripe_Ability_Get_Balance extends \WC_Stripe_Ability_Base implements \Automattic\WooCommerce\Abilities\AbilityDefinition
{
    public static function get_name(): string
    {
    }
    public static function get_registration_args(): array
    {
    }
    /**
     * Execute the ability.
     *
     * @param array|null $input Optional ability input.
     * @return array|WP_Error
     */
    public static function execute($input = \null)
    {
    }
}
// phpcs:disable WordPress.Files.FileName -- Domain class follows the plugin's `class-*` convention with `ability-` infix.
/**
 * Registers the woocommerce-gateway-stripe/get-charge ability.
 *
 * Single-charge lookup by Stripe charge ID.
 * Calls Stripe `charges` API.
 *
 * @see https://docs.stripe.com/api/charges/retrieve
 *
 * @internal
 *
 * @since 10.8.0
 */
class WC_Stripe_Ability_Get_Charge extends \WC_Stripe_Ability_Base implements \Automattic\WooCommerce\Abilities\AbilityDefinition
{
    /**
     * Fields the Stripe `GET /v1/charges/{id}` endpoint supports expanding.
     *
     * @see https://docs.stripe.com/api/charges/retrieve
     *
     * @var array<int, string>
     */
    public const EXPANDABLE_FIELDS = ['balance_transaction', 'customer', 'payment_intent', 'refunds', 'review'];
    public static function get_name(): string
    {
    }
    public static function get_registration_args(): array
    {
    }
    /**
     * Execute the ability.
     *
     * @param array|null $input Optional ability input.
     * @return array|WP_Error
     */
    public static function execute($input = \null)
    {
    }
}
// phpcs:disable WordPress.Files.FileName -- Domain class follows the plugin's `class-*` convention with `ability-` infix.
/**
 * Registers the woocommerce-gateway-stripe/get-charges ability.
 *
 * Lists recent Stripe charges with filters (date range, customer,
 * payment_intent, limit).
 * Calls the Stripe `charges` API and returns raw Stripe charge objects
 * (which include customer-shaped data like billing_details and
 * receipt_email).
 *
 * @see https://docs.stripe.com/api/charges/list
 *
 * @internal
 *
 * @since 10.8.0
 */
class WC_Stripe_Ability_Get_Charges extends \WC_Stripe_Ability_Base implements \Automattic\WooCommerce\Abilities\AbilityDefinition
{
    public static function get_name(): string
    {
    }
    public static function get_registration_args(): array
    {
    }
    /**
     * Execute the ability.
     *
     * @param array|null $input Optional ability input.
     * @return array|WP_Error
     */
    public static function execute($input = \null)
    {
    }
}
// phpcs:disable WordPress.Files.FileName -- Domain class follows the plugin's `class-*` convention with `ability-` infix.
/**
 * Registers the woocommerce-gateway-stripe/get-dispute ability.
 *
 * Single dispute lookup by Stripe dispute ID.
 * Calls the Stripe `disputes` API.
 *
 * @see https://docs.stripe.com/api/disputes/retrieve
 *
 * @internal
 *
 * @since 10.8.0
 */
class WC_Stripe_Ability_Get_Dispute extends \WC_Stripe_Ability_Base implements \Automattic\WooCommerce\Abilities\AbilityDefinition
{
    /**
     * Fields the Stripe `GET /v1/disputes/{id}` endpoint supports expanding.
     *
     * @see https://docs.stripe.com/api/disputes/retrieve
     *
     * @var array<int, string>
     */
    public const EXPANDABLE_FIELDS = ['charge', 'evidence.cancellation_policy', 'evidence.customer_communication', 'evidence.customer_signature', 'evidence.duplicate_charge_documentation', 'evidence.receipt', 'evidence.refund_policy', 'evidence.service_documentation', 'evidence.shipping_documentation', 'evidence.uncategorized_file', 'payment_intent'];
    public static function get_name(): string
    {
    }
    public static function get_registration_args(): array
    {
    }
    /**
     * Execute the ability.
     *
     * @param array|null $input Optional ability input.
     * @return array|WP_Error
     */
    public static function execute($input = \null)
    {
    }
}
// phpcs:disable WordPress.Files.FileName -- Domain class follows the plugin's `class-*` convention with `ability-` infix.
/**
 * Registers the woocommerce-gateway-stripe/get-disputes ability.
 *
 * Lists Stripe disputes with filters.
 * Calls the Stripe `disputes` API. This API does not support a status filter,
 * so filtering must be done after fetching data from the API.
 *
 * @see https://docs.stripe.com/api/disputes/list
 *
 * @internal
 *
 * @since 10.8.0
 */
class WC_Stripe_Ability_Get_Disputes extends \WC_Stripe_Ability_Base implements \Automattic\WooCommerce\Abilities\AbilityDefinition
{
    public static function get_name(): string
    {
    }
    public static function get_registration_args(): array
    {
    }
    /**
     * Execute the ability.
     *
     * @param array|null $input Optional ability input.
     * @return array|WP_Error
     */
    public static function execute($input = \null)
    {
    }
}
// phpcs:disable WordPress.Files.FileName -- Domain class follows the plugin's `class-*` convention with `ability-` infix.
/**
 * Registers the woocommerce-gateway-stripe/get-payment-intent ability.
 *
 * Single payment-intent lookup by Stripe ID.
 * Calls the Stripe `payment_intents` API.
 *
 * @see https://docs.stripe.com/api/payment_intents/retrieve
 *
 * @internal
 *
 * @since 10.8.0
 */
class WC_Stripe_Ability_Get_Payment_Intent extends \WC_Stripe_Ability_Base implements \Automattic\WooCommerce\Abilities\AbilityDefinition
{
    /**
     * Fields the Stripe `GET /v1/payment_intents/{id}` endpoint supports expanding.
     *
     * @see https://docs.stripe.com/api/payment_intents/retrieve
     *
     * @var array<int, string>
     */
    public const EXPANDABLE_FIELDS = ['customer', 'latest_charge', 'payment_method', 'review'];
    public static function get_name(): string
    {
    }
    public static function get_registration_args(): array
    {
    }
    /**
     * Execute the ability.
     *
     * @param array|null $input Optional ability input.
     * @return array|WP_Error
     */
    public static function execute($input = \null)
    {
    }
}
// phpcs:disable WordPress.Files.FileName -- Domain class follows the plugin's `class-*` convention with `ability-` infix.
/**
 * Registers the woocommerce-gateway-stripe/get-payout ability.
 *
 * Single payout lookup by Stripe payout ID.
 * Calls the Stripe `payouts` API.
 *
 * @see https://docs.stripe.com/api/payouts/retrieve
 *
 * @internal
 *
 * @since 10.8.0
 */
class WC_Stripe_Ability_Get_Payout extends \WC_Stripe_Ability_Base implements \Automattic\WooCommerce\Abilities\AbilityDefinition
{
    public static function get_name(): string
    {
    }
    public static function get_registration_args(): array
    {
    }
    /**
     * Execute the ability.
     *
     * @param array|null $input Optional ability input.
     * @return array|WP_Error
     */
    public static function execute($input = \null)
    {
    }
}
// phpcs:disable WordPress.Files.FileName -- Domain class follows the plugin's `class-*` convention with `ability-` infix.
/**
 * Registers the woocommerce-gateway-stripe/get-payouts ability.
 *
 * Lists Stripe payouts.
 * Calls the Stripe `payouts` API.
 *
 * @see https://docs.stripe.com/api/payouts/list
 *
 * @internal
 *
 * @since 10.8.0
 */
class WC_Stripe_Ability_Get_Payouts extends \WC_Stripe_Ability_Base implements \Automattic\WooCommerce\Abilities\AbilityDefinition
{
    public static function get_name(): string
    {
    }
    public static function get_registration_args(): array
    {
    }
    /**
     * Execute the ability.
     *
     * @param array|null $input Optional ability input.
     * @return array|WP_Error
     */
    public static function execute($input = \null)
    {
    }
}
// phpcs:disable WordPress.Files.FileName
/**
 * Stripe Connect base REST controller class.
 */
abstract class WC_Stripe_Connect_REST_Controller extends \WP_REST_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v1';
    /**
     * Stripe connect api.
     *
     * @var object $api
     */
    private $api;
    /**
     * Constructor.
     *
     * @param WC_Stripe_Connect_API $api stripe connect api.
     */
    public function __construct(\WC_Stripe_Connect_API $api)
    {
    }
    /**
     * Registers rest routes for stripe connect functionality
     *
     * @return void
     */
    public function register_routes()
    {
    }
    /**
     * Send get request.
     *
     * @param array $request request.
     *
     * @return array
     */
    public function get_internal($request)
    {
    }
    /**
     * Send post request.
     *
     * @param array $request request.
     *
     * @return array
     */
    public function post_internal($request)
    {
    }
    /**
     * Sends delete request.
     *
     * @param array $request request.
     *
     * @return array
     */
    public function delete_internal($request)
    {
    }
    /**
     * Validate the requester's permissions
     *
     * @param array $request request.
     *
     * @return bool
     */
    public function check_permission($request)
    {
    }
    /**
     * Consolidate cache prevention mechanisms.
     *
     * @return void
     */
    public function prevent_route_caching()
    {
    }
    /**
     * Send a no-cache header for WCS REST API responses. Prompted by cache issues
     * on the Pantheon hosting platform.
     *
     * See: https://pantheon.io/docs/cache-control/
     *
     * @param  WP_REST_Response $response REST API response.
     * @param  WP_REST_Server   $server   server.
     *
     * @return WP_REST_Response passthrough $response parameter
     */
    public function send_nocache_header($response, $server)
    {
    }
}
/**
 * Trait for Subscriptions utility functions.
 *
 * @since 5.6.0
 */
trait WC_Stripe_Subscriptions_Utilities_Trait
{
    /**
     * Is $order_id a subscription?
     *
     * @since 5.6.0
     *
     * @param  int $order_id
     * @return boolean
     */
    public function has_subscription($order_id)
    {
    }
    /**
     * Returns whether this user is changing the payment method for a subscription.
     *
     * @since 5.6.0
     *
     * @return bool
     */
    public function is_changing_payment_method_for_subscription()
    {
    }
    /**
     * Returns boolean value indicating whether payment for an order will be recurring,
     * as opposed to single.
     *
     * @since 5.6.0
     *
     * @param int $order_id ID for corresponding WC_Order in process.
     *
     * @return bool
     */
    public function is_payment_recurring($order_id)
    {
    }
    /**
     * Returns a boolean value indicating whether the save payment checkbox should be
     * displayed during checkout.
     *
     * Returns `false` if the cart currently has a subscriptions or if the request has a
     * `change_payment_method` GET parameter. Returns the value in `$display` otherwise.
     *
     * @since 5.6.0
     *
     * @param bool $display Bool indicating whether to show the save payment checkbox in the absence of subscriptions.
     *
     * @return bool Indicates whether the save payment method checkbox should be displayed or not.
     */
    public function display_save_payment_method_checkbox($display)
    {
    }
    /**
     * Returns boolean on whether current WC_Cart or WC_Subscriptions_Cart
     * contains a subscription or subscription renewal item
     *
     * @since 5.6.0
     *
     * @return bool
     */
    public function is_subscription_item_in_cart()
    {
    }
    /**
     * Returns boolean on whether manual renewal is required for the subscriptions of this store.
     *
     * @since 9.6.0
     *
     * @return bool
     *
     * @deprecated 9.6.0 Use WC_Stripe_Subscriptions_Helper::is_manual_renewal_required instead.
     */
    public function is_manual_renewal_required()
    {
    }
    /**
     * Checks the cart to see if it contains a subscription product renewal.
     *
     * @since 5.6.0
     *
     * @return mixed The cart item containing the renewal as an array, else false.
     */
    public function cart_contains_renewal()
    {
    }
    /**
     * Checks if the given object is a WC_Subscription.
     *
     * Slightly more performant than has_subscription() which checks wcs_order_contains_subscription() first.
     *
     * @param  mixed $subscription
     *
     * @return boolean
     */
    public function is_subscription($subscription)
    {
    }
}
/**
 * Trait for Subscriptions compatibility.
 */
trait WC_Stripe_Subscriptions_Trait
{
    use \WC_Stripe_Subscriptions_Utilities_Trait;
    /**
     * Initialize subscription support and hooks.
     *
     * @return void
     * @since 5.6.0
     */
    public function maybe_init_subscriptions()
    {
    }
    /**
     * Maybe register the payment method hooks for subscriptions.
     * These are registered once per payment method.
     *
     * @param string $payment_method_id The payment method ID to register the hooks for.
     * @return void
     */
    private function maybe_register_payment_method_hooks(string $payment_method_id): void
    {
    }
    /**
     * Maybe register the plugin-level hooks for subscriptions.
     * These should only be registered once for the main gateway instance.
     *
     * @return bool True if the hooks were registered, false otherwise.
     * @since 10.9.0
     */
    private function maybe_register_plugin_hooks(): bool
    {
    }
    /**
     * Displays a checkbox to allow users to update all subs payments with new
     * payment.
     *
     * @return void
     * @since 4.1.11
     */
    public function display_update_subs_payment_checkout()
    {
    }
    /**
     * Updates all active subscriptions payment method.
     *
     * Note: This is the Legacy checkout experience method for updating subscriptions payment method.
     *
     * @since 4.1.11
     *
     * @see handle_upe_add_payment_method_success() for the new UPE checkout method.
     *
     * @param string $source_id     The source ID.
     * @param object $source_object The source object.
     * @return void
     */
    public function handle_add_payment_method_success($source_id, $source_object)
    {
    }
    /**
     * Updates all the user's active subscriptions payment method with the new payment method.
     *
     * @since 8.8.0
     *
     * @param int      $user_id               The user ID.
     * @param stdClass $payment_method_object The newly added payment method object.
     * @return void
     */
    public function handle_upe_add_payment_method_success($user_id, $payment_method_object)
    {
    }
    /**
     * Render a dummy element in the "Change payment method" form (that does not appear in the "Pay for order" form)
     * which can be checked to determine proper SCA handling to apply for each form.
     *
     * @return void
     * @since 4.6.1
     */
    public function differentiate_change_payment_method_form()
    {
    }
    /**
     * Maybe process payment method change for subscriptions.
     *
     * @since 5.6.0
     *
     * @param int $order_id
     * @return bool
     */
    public function maybe_change_subscription_payment_method($order_id)
    {
    }
    /**
     * Process the payment method change for subscriptions.
     *
     * @since 5.6.0
     *
     * @param int $order_id
     * @return array|null
     */
    public function process_change_subscription_payment_method($order_id)
    {
    }
    /**
     * Process the payment method change with deferred intent.
     *
     * @param int $subscription_id
     *
     * @return array
     */
    public function process_change_subscription_payment_with_deferred_intent($subscription_id)
    {
    }
    /**
     * Process a scheduled subscription payment,
     * most commonly via the 'woocommerce_scheduled_subscription_payment_<payment_method>' action.
     *
     * @param float    $amount_to_charge The amount to charge.
     * @param WC_Order $renewal_order    A WC_Order object created to record the renewal payment.
     * @return void
     */
    public function scheduled_subscription_payment($amount_to_charge, $renewal_order)
    {
    }
    /**
     * Determines whether a failed payment was blocked by Stripe Radar.
     *
     * When Stripe Radar blocks a charge it still creates a charge object (for audit
     * purposes) with outcome.type === 'blocked'. The charge ID is surfaced in the
     * error response so we can fetch it and inspect the outcome.
     *
     * @param object $response The Stripe API response containing the error.
     * @return string|false The Radar block reason (e.g. 'highest_risk_level', 'rule') when the
     *                      charge is blocked, false otherwise.
     */
    protected function is_charge_blocked_by_radar($response)
    {
    }
    /**
     * Process a payment for a subscription renewal.
     *
     * @since 3.0
     * @since 4.0.4 Add third parameter flag to retry.
     * @since 4.1.0 Add fourth parameter to log previous errors.
     * @since 5.6.0 Process renewal payments for SEPA and UPE.
     *
     * @param float        $amount         The amount to charge.
     * @param WC_Order     $renewal_order  The renewal order.
     * @param bool         $retry          Should we retry the process?
     * @param object|false $previous_error Previous error object.
     * @return void
     */
    public function process_subscription_payment($amount, $renewal_order, $retry = \true, $previous_error = \false)
    {
    }
    /**
     * Updates other subscription sources.
     *
     * @since 5.6.0
     *
     * @param WC_Order $order              The order object.
     * @param stdClass $source             The source object.
     * @param string   $payment_gateway_id The payment method ID. eg 'stripe'.
     * @return void
     */
    public function maybe_update_source_on_subscription_order($order, $source, $payment_gateway_id = '')
    {
    }
    /**
     * Don't transfer Stripe customer/token meta to resubscribe orders.
     *
     * @param WC_Order $resubscribe_order The order created for the customer to resubscribe to the old expired/cancelled subscription
     * @return void
     */
    public function delete_resubscribe_meta($resubscribe_order)
    {
    }
    /**
     * Don't transfer Stripe fee/ID meta to renewal orders.
     *
     * @param WC_Order|null $renewal_order The renewal order.
     * @return WC_Order|null The renewal order.
     */
    public function delete_renewal_meta($renewal_order)
    {
    }
    /**
     * Update the customer_id for a subscription after using Stripe to complete a payment to make up for
     * an automatic renewal payment which previously failed.
     *
     * @param WC_Subscription $subscription The subscription for which the failing payment method relates.
     * @param WC_Order        $renewal_order The order which recorded the successful payment (to make up for the failed automatic payment).
     * @return void
     */
    public function update_failing_payment_method($subscription, $renewal_order)
    {
    }
    /**
     * Include the payment meta data required to process automatic recurring payments so that store managers can
     * manually set up automatic recurring payments for a customer via the Edit Subscriptions screen in 2.0+.
     *
     * @since 2.5
     *
     * @param array           $payment_meta associative array of meta data required for automatic payments
     * @param WC_Subscription $subscription An instance of a subscription object
     * @return array
     */
    public function add_subscription_payment_meta($payment_meta, $subscription)
    {
    }
    /**
     * Validate the payment meta data required to process automatic recurring payments so that store managers can
     * manually set up automatic recurring payments for a customer via the Edit Subscriptions screen in 2.0+.
     *
     * @since 2.5
     * @since 4.0.4 Stripe sourd id field no longer needs to be required.
     *
     * @param string $payment_method_id The ID of the payment method to validate
     * @param array  $payment_meta associative array of meta data required for automatic payments
     * @return void
     */
    public function validate_subscription_payment_meta($payment_method_id, $payment_meta)
    {
    }
    /**
     * Add the necessary information to payment intents for subscriptions to allow Stripe to create
     * mandates for 3DS payments in India. It's ok to apply this across the board; Stripe will
     * take care of handling any authorizations.
     *
     * @param array    $request          The HTTP request that will be sent to Stripe to create the payment intent.
     * @param WC_Order $order            The renewal order.
     * @param object   $prepared_source  The source object.
     * @param bool     $is_setup_intent  Whether this is a setup intent.
     * @return array
     */
    public function add_subscription_information_to_intent($request, $order, $prepared_source, $is_setup_intent = \false)
    {
    }
    /**
     * Find the mandate id for a subscription renewal from a previous renewal order. Return the mandate id
     * if it exists and the amount matches the renewal order amount, return empty otherwise to indicate that a
     * new mandate should be created.
     *
     * @param WC_Order $order The subscription order.
     * @param string   $payment_method The payment method ID.
     * @return string The mandate id or empty string if no valid mandate id is found.
     */
    private function get_mandate_for_subscription($order, $payment_method)
    {
    }
    /**
     * Create mandate options for a subscription order to be added to the payment intent request.
     *
     * @param WC_Order $order The renewal order.
     * @param WC_Subscription[] $subscriptions Subscriptions for the renewal order.
     * @param bool $is_setup_intent Whether the intent is a setup intent.
     * @return array the mandate_options for the subscription order.
     */
    private function create_mandate_options_for_order($order, $subscriptions, $is_setup_intent = \false)
    {
    }
    /**
     * Render the payment method used for a subscription in the "My Subscriptions" table
     *
     * @since 1.7.5
     * @version 5.6.0
     *
     * @param string          $payment_method_to_display the default payment method text to display
     * @param WC_Subscription $subscription the subscription details
     * @return string the subscription payment method
     */
    public function maybe_render_subscription_payment_method($payment_method_to_display, $subscription)
    {
    }
    /**
     * Returns the pinned `wallet_type` of the saved token backing a Stripe PaymentMethod.
     *
     * Fingerprint dedup can repoint a saved card token at a newer (wallet-flavored)
     * PaymentMethod while leaving its `wallet_type` pinned. The subscription
     * row must reflect that pinned branding rather than the live PaymentMethod's wallet,
     * so the row and the saved-token list agree.
     *
     * @param int    $customer_user     WP user ID owning the subscription.
     * @param string $stripe_source_id  Stripe PaymentMethod ID stored on the subscription.
     * @return string|null The token's pinned wallet type (possibly an empty string), or null
     *                     when no matching saved token exists (e.g. guest / parent-order lookups).
     */
    protected function get_saved_token_wallet_type($customer_user, $stripe_source_id): ?string
    {
    }
    /**
     * Helper function to get the descriptive text for a payment method or source.
     *
     * @param object      $payment_method      The payment method or source object.
     * @param string|null $wallet_type_override Authoritative wallet type from the matching saved
     *                                          token, or null when no token matched. When provided
     *                                          (including an empty string), it wins over the live
     *                                          PaymentMethod's `card->wallet->type` so the row matches
     *                                          the saved-token list's pinned branding.
     * @return string The descriptive text for the payment method or source.
     */
    protected function get_payment_method_to_display_for_payment_method(object $payment_method, ?string $wallet_type_override = \null): string
    {
    }
    /**
     * If this is the "Pass the SCA challenge" flow, remove a variable that is checked by WC Subscriptions
     * so WC Subscriptions doesn't redirect to the checkout
     *
     * @return void
     */
    public function remove_order_pay_var()
    {
    }
    /**
     * Restore the variable that was removed in remove_order_pay_var()
     *
     * @return void
     */
    public function restore_order_pay_var()
    {
    }
    /**
     * Checks if a renewal already failed because a manual authentication is required.
     *
     * @param WC_Order $renewal_order The renewal order.
     * @return boolean
     */
    public function has_authentication_already_failed($renewal_order)
    {
    }
    /**
     * Hijacks `wp_redirect` in order to generate a JS-friendly object with the URL.
     *
     * @param string $url The URL that Subscriptions attempts a redirect to.
     * @return void
     */
    public function redirect_after_early_renewal($url)
    {
    }
    /**
     * Once an intent has been verified, perform some final actions for early renewals.
     *
     * @param WC_Order $order The renewal order.
     * @param stdClass $intent The Payment Intent object.
     * @return void
     */
    protected function maybe_process_subscription_early_renewal_success($order, $intent)
    {
    }
    /**
     * During early renewals, instead of failing the renewal order, delete it and let Subs redirect to the checkout.
     *
     * @param WC_Order $order The renewal order.
     * @param stdClass $intent The Payment Intent object (unused).
     * @return void
     */
    protected function maybe_process_subscription_early_renewal_failure($order, $intent)
    {
    }
    /**
     * Returns true if Stripe will attempt the charges at a future date.
     *
     * This applies to subscription payments and Indian 3DS regulations.
     * https://docs.stripe.com/india-recurring-payments?integration=subscriptions#predebit-notification
     *
     * @param StdClass $payment_intent the Payment Intent to be evaluated.
     * @return bool true if the charge attempt is delayed, false otherwise.
     */
    protected function is_charge_attempt_delayed($payment_intent)
    {
    }
    /**
     * Updates the payment method for all subscriptions related to an order.
     *
     * @param WC_Order $order               The order to update the related subscriptions for.
     * @param string   $payment_method_type The payment method ID. eg 'stripe', 'stripe_sepa'.
     * @return void
     */
    public function update_subscription_payment_method_from_order($order, $payment_method_type)
    {
    }
    /**
     * Disable edits for subscriptions that have a mandate and a card payment method from India.
     *
     * @param bool     $editable The current editability of the subscription.
     * @param WC_Order $order    The order object.
     * @return bool Returns true if the subscription can be edited, false otherwise.
     */
    public function disable_subscription_edit_for_india($editable, $order)
    {
    }
    /**
     * When handling a subscription change payment method request with deferred intents,
     * don't immediately update the subscription's payment method to Stripe until we've created and confirmed the setup intent.
     *
     * For purchases with a 3DS card specifically, we don't want to update the payment method on the subscription until after the customer has authenticated.
     *
     * @param bool            $update_payment_method Whether to update the payment method.
     * @param string          $new_payment_method    The new payment method.
     * @param WC_Subscription $subscription          The subscription.
     *
     * @return bool
     */
    public function update_payment_after_deferred_intent($update_payment_method, $new_payment_method, $subscription)
    {
    }
}
/**
 * Trait for Pre-Orders compatibility.
 */
trait WC_Stripe_Pre_Orders_Trait
{
    /**
     * Stores a flag to indicate if the Pre-order integration hooks have been attached.
     *
     * The callbacks attached as part of maybe_init_pre_orders() only need to be attached once to avoid duplication.
     *
     * @var bool False by default, true once the callbacks have been attached.
     */
    private static $has_attached_pre_order_integration_hooks = \false;
    /**
     * Initialize pre-orders hook.
     *
     * @return void
     * @since 5.8.0
     */
    public function maybe_init_pre_orders()
    {
    }
    /**
     * Checks if pre-orders are enabled on the site.
     *
     * @since 5.8.0
     *
     * @return bool
     */
    public function is_pre_orders_enabled()
    {
    }
    /**
     * Is $order_id a pre-order?
     *
     * @since 5.8.0
     *
     * @param  int|WC_Order $order_or_order_id The order ID or order object.
     * @return bool
     */
    public function has_pre_order($order_or_order_id)
    {
    }
    /**
     * Returns true if the pre-order completed.
     *
     * @since 8.8.0
     *
     * @param  int $order_id
     * @return bool
     */
    public function is_pre_order_completed($order_id)
    {
    }
    /**
     * Returns boolean on whether current cart contains a pre-order item.
     *
     * @since 5.8.0
     *
     * @return bool
     */
    public function is_pre_order_item_in_cart()
    {
    }
    /**
     * Returns pre-order product from cart.
     *
     * @since 5.8.0
     *
     * @return object|null
     */
    public function get_pre_order_product_from_cart()
    {
    }
    /**
     * Returns pre-order product from order.
     *
     * @since 5.8.0
     *
     * @param int $order_id
     *
     * @return object|null
     */
    public function get_pre_order_product_from_order($order_id)
    {
    }
    /**
     * Returns boolean on whether product is charged upon release.
     *
     * @since 5.8.0
     *
     * @param object $product
     *
     * @return bool
     */
    public function is_pre_order_product_charged_upon_release($product)
    {
    }
    /**
     * Returns boolean on whether product is charged upfront.
     *
     * @since 5.8.0
     *
     * @param object $product
     *
     * @return bool
     */
    public function is_pre_order_product_charged_upfront($product)
    {
    }
    /**
     * Checks if we need to process pre-orders when
     * a pre-order product is in the cart.
     *
     * @since 5.8.0
     *
     * @param int $order_id
     *
     * @return bool
     */
    public function maybe_process_pre_orders($order_id)
    {
    }
    /**
     * Remove order meta.
     *
     * @param WC_Order $order The order object.
     *
     * @return void
     */
    public function remove_order_source_before_retry($order)
    {
    }
    /**
     * Marks the order as pre-ordered.
     * The native function is wrapped so we can call it separately and more easily mock it in our tests.
     *
     * @param WC_Order $order The order object.
     * @return void
     */
    public function mark_order_as_pre_ordered($order)
    {
    }
    /**
     * Process the pre-order when pay upon release is used.
     *
     * @param int $order_id
     *
     * @return array
     */
    public function process_pre_order($order_id)
    {
    }
    /**
     * Process a pre-order payment when the pre-order is released.
     *
     * @param WC_Order $order
     * @param bool     $retry
     *
     * @return void
     */
    public function process_pre_order_release_payment($order, $retry = \true)
    {
    }
    /**
     * Determines if there is a pre-order in the cart and if it is charged upon release.
     *
     * @return bool
     */
    public function is_pre_order_charged_upon_release_in_cart()
    {
    }
    /**
     * Determines if an order contains a pre-order and if it is charged upon release.
     *
     * @param WC_Order $order The order object.
     * @return bool
     */
    public function has_pre_order_charged_upon_release($order)
    {
    }
    /**
     * Hides the save payment method checkbox when the cart contains a pre-order that is charged upon release.
     *
     * @param bool $display_save_option The default value of whether the save payment method checkbox should be displayed.
     * @return bool Whether the save payment method checkbox should be displayed.
     */
    public function hide_save_payment_for_pre_orders_charged_upon_release($display_save_option)
    {
    }
}
// phpcs:disable WordPress.Files.FileName
/**
 * Abstract class that will be inherited by all payment methods.
 *
 * @extends WC_Payment_Gateway_CC
 *
 * @since 4.0.0
 */
abstract class WC_Stripe_Payment_Gateway extends \WC_Payment_Gateway_CC
{
    use \WC_Stripe_Subscriptions_Trait;
    use \WC_Stripe_Pre_Orders_Trait;
    /**
     * Error string returned by Stripe when a PaymentMethod is detached.
     *
     * @var string
     */
    protected const DETACHED_PAYMENT_METHOD_ERROR_STRING = 'The provided PaymentMethod was previously used with a PaymentIntent without Customer attachment';
    /**
     * The delay between retries.
     *
     * @var int
     */
    protected $retry_interval = 1;
    /**
     * Fallback method to be inherited by all payment methods. Stripe UPE will override it.
     *
     * @return string[]
     */
    public function get_upe_enabled_payment_method_ids($force_refresh = \false)
    {
    }
    /**
     * Fallback method to be inherited by all payment methods. Stripe UPE will override it.
     *
     * @return string[]
     */
    public function get_upe_available_payment_methods()
    {
    }
    /**
     * Checks whether the gateway is enabled.
     *
     * @return bool The result.
     */
    public function is_enabled()
    {
    }
    /**
     * Disables gateway.
     */
    public function disable()
    {
    }
    /**
     * Enables gateway.
     */
    public function enable()
    {
    }
    /**
     * Add additional field to payment gateway settings which is unique to the gateway.
     *
     * @param array $settings Settings array.
     * @return array
     */
    public function get_unique_settings($settings = [])
    {
    }
    /**
     * Displays the admin settings webhook description.
     *
     * @since 4.1.0
     * @version 5.0.0
     * @return mixed
     */
    public function display_admin_settings_webhook_description()
    {
    }
    /**
     * Prints the admin options for the gateway.
     * Inserts an empty placeholder div feature flag is enabled.
     */
    public function admin_options()
    {
    }
    /**
     * Inserts an empty placeholder div for new account card when Stripe is not connected.
     * Inserts an empty placeholder div for UPE opt-in banner within the existing form fields, otherwise.
     */
    public function render_upe_settings()
    {
    }
    /**
     * Displays the save to account checkbox.
     *
     * @since 4.1.0
     * @version 5.6.0
     */
    public function save_payment_method_checkbox($force_checked = \false)
    {
    }
    /**
     * Checks to see if request is invalid and that
     * they are worth retrying.
     *
     * @since 4.0.5
     * @param object $error
     */
    public function is_retryable_error($error)
    {
    }
    /**
     * Checks to see if error is of same idempotency key
     * error due to retries with different parameters.
     *
     * @since 4.1.0
     * @param object $error
     */
    public function is_same_idempotency_error($error)
    {
    }
    /**
     * Checks to see if error is of invalid request
     * error and it is no such customer.
     *
     * @since 4.1.0
     * @param object $error
     */
    public function is_no_such_customer_error($error)
    {
    }
    /**
     * Checks to see if error is of invalid request
     * error and it is no such token.
     *
     * @since 4.1.0
     * @param object $error
     */
    public function is_no_such_token_error($error)
    {
    }
    /**
     * Checks to see if error is of invalid request
     * error and it is no such source.
     *
     * @since 4.1.0
     * @param object|false $error
     * @return bool
     */
    public function is_no_such_source_error($error)
    {
    }
    /**
     * Checks to see if error is of invalid request
     * error and it is no such source linked to customer.
     *
     * @since 4.1.0
     * @param object|false $error
     * @return bool
     */
    public function is_no_linked_source_error($error)
    {
    }
    /**
     * Check to see if we need to update the idempotency
     * key to be different from previous charge request.
     *
     * @since 4.1.0
     * @param object $source_object
     * @param object|false $error
     * @return bool
     */
    public function need_update_idempotency_key($source_object, $error)
    {
    }
    /**
     * Checks if keys are set and valid.
     *
     * @since 4.0.6
     * @return bool True if the keys are set *and* valid, false otherwise (for example, if keys are empty or the secret key was pasted as publishable key).
     */
    public function are_keys_set()
    {
    }
    /**
     * Check if we need to make gateways available.
     *
     * @since 4.1.3
     * @return bool
     */
    public function is_available()
    {
    }
    public function save_payment_method_requested()
    {
    }
    /**
     * Customer param wrong? The user may have been deleted on stripe's end. Remove customer_id. Can be retried without.
     *
     * @since 4.2.0
     * @param object   $error The error that was returned from Stripe's API.
     * @param WC_Order $order The order those payment is being processed.
     * @return bool           A flag that indicates that the customer does not exist and should be removed.
     */
    public function maybe_remove_non_existent_customer($error, $order)
    {
    }
    /**
     * All payment icons that work with Stripe. Some icons references
     * WC core icons.
     *
     * @since 4.0.0
     * @since 4.1.0 Changed to using img with svg (colored) instead of fonts.
     * @return array
     */
    public function payment_icons()
    {
    }
    /**
     * Validates that the order meets the minimum order amount
     * set by Stripe.
     *
     * @since 4.0.0
     * @version 4.0.0
     * @param WC_Order $order
     *
     * @return void
     *
     * @deprecated 10.0.0 Use WC_Stripe_Order_Helper::validate_minimum_order_amount() instead.
     */
    public function validate_minimum_order_amount($order)
    {
    }
    /**
     * Gets the transaction URL linked to Stripe dashboard.
     *
     * @since 4.0.0
     * @version 4.0.0
     */
    public function get_transaction_url($order)
    {
    }
    /**
     * Gets the saved customer id if exists.
     *
     * @since 4.0.0
     * @version 4.0.0
     */
    public function get_stripe_customer_id($order)
    {
    }
    /**
     * Builds the return URL from redirects.
     *
     * @since 4.0.0
     * @version 4.0.0
     * @param object $order
     * @param int    $id Stripe session id.
     */
    public function get_stripe_return_url($order = \null, $id = \null)
    {
    }
    /**
     * Generate the request for the payment.
     *
     * @since 3.1.0
     * @version 4.5.4
     * @param  WC_Order $order
     * @param  object   $prepared_payment_method Stripe Payment Method or Source.
     * @return array()
     */
    public function generate_payment_request($order, $prepared_payment_method)
    {
    }
    /**
     * Store extra meta data for an order from a Stripe charge response.
     *
     * @param object $response The Charge response from Stripe.
     * @param WC_Order $order The Order object.
     *
     * @return object The Charge response from Stripe.
     *
     * @throws WC_Stripe_Exception
     */
    public function process_response($response, $order)
    {
    }
    /**
     * Sends the failed order email to admin.
     *
     * @since 3.1.0
     * @version 4.0.0
     * @param int $order_id
     * @param array $status_update Optional. Use fields 'to' and 'from' to provide context
     *    when a status change has occurred for the order.
     * @return void
     */
    public function send_failed_order_email($order_id, $status_update = [])
    {
    }
    /**
     * Sends the failed refund email to both admin and shopper.
     *
     * @since 9.6.0
     * @param WC_Order $order The order object for which the refund failed.
     * @return void
     */
    public function send_failed_refund_emails($order)
    {
    }
    /**
     * Get owner details.
     *
     * @since 4.0.0
     * @version 4.0.0
     * @param WC_Order $order
     * @return object $details
     *
     * @deprecated 10.0.0 Use WC_Stripe_Order_Helper::get_owner_details() instead.
     */
    public function get_owner_details($order)
    {
    }
    /**
     * Get source object by source ID.
     *
     * @since 4.0.3
     * @param string $source_id The source ID to get source object for.
     *
     * @throws WC_Stripe_Exception Error while retrieving source object.
     * @return string|object
     */
    public function get_source_object($source_id = '')
    {
    }
    /**
     * Get charge object by charge ID.
     *
     * @since 7.0.2
     * @param string $charge_id The charge ID to get charge object for.
     * @param array  $params    The parameters to pass to the request.
     *
     * @throws WC_Stripe_Exception Error while retrieving charge object.
     * @return string|object
     */
    public function get_charge_object($charge_id = '', $params = [])
    {
    }
    /**
     * Get latest charge object from payment intent.
     *
     * Since API version 2022-11-15, the `charges` property was replaced with `latest_charge`.
     * We can remove this method once we drop support for API versions prior to 2022-11-15.
     *
     * @since 7.0.2
     * @param object $intent Stripe API Payment Intent object response.
     *
     * @return string|object
     */
    public function get_latest_charge_from_intent($intent)
    {
    }
    /**
     * Checks if card is a prepaid card.
     *
     * @since 4.0.6
     * @param object $source_object
     * @return bool
     */
    public function is_prepaid_card($source_object)
    {
    }
    /**
     * Checks if a payment method object represents a prepaid credit card and
     * throws an exception if it is one, but that is not allowed.
     *
     * @since 4.2.0
     * @param object $prepared_source The object with source details.
     * @throws WC_Stripe_Exception An exception if the card is prepaid, but prepaid cards are not allowed.
     */
    public function maybe_disallow_prepaid_card($payment_method)
    {
    }
    /**
     * Checks if source is of legacy type card.
     *
     * @since 4.0.8
     * @param string $source_id
     * @return bool
     */
    public function is_type_legacy_card($source_id)
    {
    }
    /**
     * Checks if source is payment method (pm_).
     *
     * @since 5.6.0
     * @param string $source_id
     * @return bool
     */
    public function is_type_payment_method($source_id)
    {
    }
    /**
     * Checks if payment is via saved payment source.
     *
     * @since 4.1.0
     * @return bool
     */
    public function is_using_saved_payment_method()
    {
    }
    /**
     * Get payment source. This can be a new token/source or existing WC token.
     * If user is logged in and/or has WC account, create an account on Stripe.
     * This way we can attribute the payment to the user to better fight fraud.
     *
     * @since 3.1.0
     * @version 4.0.0
     * @param string $user_id
     * @param bool   $force_save_source Should we force save payment source.
     *
     * @throws Exception When card was not added or for and invalid card.
     * @return object
     */
    public function prepare_source($user_id, $force_save_source = \false, $existing_customer_id = \null)
    {
    }
    /**
     * Get payment source from an order. This could be used in the future for
     * a subscription as an example, therefore using the current user ID would
     * not work - the customer won't be logged in :)
     *
     * Not using 2.6 tokens for this part since we need a customer AND a card
     * token, and not just one.
     *
     * @since 3.1.0
     * @version 4.0.0
     * @param object $order
     * @return object
     */
    public function prepare_order_source($order = \null)
    {
    }
    /**
     * Checks whether a source exists.
     *
     * @since 4.2.0
     * @param  object $prepared_source The source that should be verified.
     * @throws WC_Stripe_Exception     An exception if the source ID is missing.
     */
    public function check_source($prepared_source)
    {
    }
    /**
     * Save source to order.
     *
     * @since 3.1.0
     * @version 4.0.0
     * @param WC_Order $order For to which the source applies.
     * @param stdClass $source Source information.
     */
    public function save_source_to_order($order, $source)
    {
    }
    /**
     * Updates Stripe fees/net.
     * e.g usage would be after a refund.
     *
     * @since 4.0.0
     * @version 4.0.6
     * @param WC_Order $order                  The order object.
     * @param string   $balance_transaction_id The balance transaction ID.
     * @param bool     $replace                Whether to replace existing fee/net values instead of
     *                                         adding to them. Use true for captures where the fee
     *                                         reflects the captured amount. Default false (add mode
     *                                         for refunds and adjustments).
     */
    public function update_fees($order, $balance_transaction_id, bool $replace = \false)
    {
    }
    /**
     * Refund a charge.
     *
     * @since 3.1.0
     * @version 4.9.0
     * @param  int $order_id
     * @param  float $amount
     *
     * @return bool True or false based on success.
     * @throws Exception Throws exception when charge wasn't captured.
     */
    public function process_refund($order_id, $amount = \null, $reason = '')
    {
    }
    /**
     * Recovers a missing charge ID from the order's stored payment intent and persists it.
     *
     * @param WC_Order $order The order to recover the charge ID for.
     * @return string The recovered charge ID, or an empty string if it could not be recovered.
     */
    private function recover_charge_id_from_intent(\WC_Order $order): string
    {
    }
    /**
     * Add payment method via account screen.
     * We don't store the token locally, but to the Stripe API.
     *
     * @since 3.0.0
     * @version 4.0.0
     *
     * @return array
     */
    public function add_payment_method()
    {
    }
    /**
     * Gets the locale with normalization that only Stripe accepts.
     *
     * @since 4.0.6
     * @return string $locale
     */
    public function get_locale()
    {
    }
    /**
     * Change the idempotency key so charge can
     * process order as a different transaction.
     *
     * @since 4.0.6
     * @param string $idempotency_key
     * @param array  $request
     */
    public function change_idempotency_key($idempotency_key, $request)
    {
    }
    /**
     * Checks if request is the original to prevent double processing
     * on WC side. The original-request header and request-id header
     * needs to be the same to mean its the original request.
     *
     * @since 4.0.6
     * @param array $headers
     */
    public function is_original_request($headers)
    {
    }
    /**
     * Generates the request when creating a new payment intent.
     *
     * @param WC_Order $order           The order that is being paid for.
     * @param object   $prepared_source The source that is used for the payment.
     * @return array                    The arguments for the request.
     */
    public function generate_create_intent_request($order, $prepared_source)
    {
    }
    /**
     * Create the level 3 data array to send to Stripe when making a purchase.
     *
     * @param WC_Order $order The order that is being paid for.
     * @return array          The level 3 data to send to Stripe.
     * @throws WC_Stripe_Exception If an order item has no quantity set.
     */
    public function get_level3_data_from_order($order)
    {
    }
    /**
     * Create a new PaymentIntent.
     *
     * @param WC_Order $order           The order that is being paid for.
     * @param object   $prepared_source The source that is used for the payment.
     * @return object                   An intent or an error.
     */
    public function create_intent($order, $prepared_source)
    {
    }
    /**
     * Updates an existing intent with updated amount, source, and customer.
     *
     * @param object   $intent          The existing intent object.
     * @param WC_Order $order           The order.
     * @param object   $prepared_source Currently selected source.
     * @return object                   An updated intent.
     */
    public function update_existing_intent($intent, $order, $prepared_source)
    {
    }
    /**
     * Confirms an intent if it is the `requires_confirmation` state.
     *
     * @since 4.2.1
     * @param object   $intent          The intent to confirm.
     * @param WC_Order $order           The order that the intent is associated with.
     * @param object   $prepared_source The source that is being charged.
     * @return object                   Either an error or the updated intent.
     */
    public function confirm_intent($intent, $order, $prepared_source)
    {
    }
    /**
     * Saves intent to order.
     *
     * @since 3.2.0
     * @param WC_Order $order For to which the source applies.
     * @param stdClass $intent Payment intent information.
     */
    public function save_intent_to_order($order, $intent)
    {
    }
    /**
     * Retrieves the payment intent, associated with an order.
     *
     * @since 4.2
     * @param WC_Order $order The order to retrieve an intent for.
     * @return object|false   Either the intent object or `false`.
     */
    public function get_intent_from_order($order)
    {
    }
    /**
     * Retrieves intent from Stripe API by intent id.
     *
     * @param string $intent_type   Either 'payment_intents' or 'setup_intents'.
     * @param string $intent_id     Intent id.
     * @return object|false         Either the intent object or `false`.
     * @throws Exception            Throws exception for unknown $intent_type.
     */
    private function get_intent($intent_type, $intent_id)
    {
    }
    /**
     * Locks an order for payment intent processing for 5 minutes.
     *
     * @since 4.2
     * @param WC_Order $order  The order that is being paid.
     * @return bool            A flag that indicates whether the order is already locked.
     *
     * @deprecated 10.0.0 Deprecated in favor of WC_Stripe_Order_Helper::lock_order_payment().
     */
    public function lock_order_payment($order)
    {
    }
    /**
     * Unlocks an order for processing by payment intents.
     *
     * @since 4.2
     * @param WC_Order $order The order that is being unlocked.
     *
     * @return void
     *
     * @deprecated 10.0.0 Deprecated in favor of WC_Stripe_Order_Helper::unlock_order_payment().
     */
    public function unlock_order_payment($order)
    {
    }
    /**
     * Retrieves the existing lock for an order.
     *
     * @param WC_Order $order The order to retrieve the lock for
     * @return mixed
     *
     * @deprecated 10.0.0 Deprecated in favor of WC_Stripe_Order_Helper::get_order_payment_lock().
     */
    protected function get_order_existing_lock($order)
    {
    }
    /**
     * Checks if an order is locked for payment processing.
     *
     * @param WC_Order $order The order to check the lock for
     * @return bool
     *
     * @deprecated 10.0.0 Deprecated in favor of WC_Stripe_Order_Helper::is_order_payment_locked().
     */
    protected function is_order_payment_locked($order)
    {
    }
    /**
     * Locks an order for refund processing for 5 minutes.
     *
     * @since 9.1.0
     * @param WC_Order $order  The order that is being refunded.
     * @return bool            A flag that indicates whether the order is already locked.
     *
     * @deprecated 10.0.0 Deprecated in favor of WC_Stripe_Order_Helper::lock_order_refund().
     */
    public function lock_order_refund($order)
    {
    }
    /**
     * Unlocks an order for processing refund.
     *
     * @since 9.1.0
     * @param WC_Order $order The order that is being unlocked.
     *
     * @return void
     *
     * @deprecated 10.0.0 Deprecated in favor of WC_Stripe_Order_Helper::unlock_order_refund().
     */
    public function unlock_order_refund($order)
    {
    }
    /**
     * Given a response from Stripe, check if it's a card error where authentication is required
     * to complete the payment.
     *
     * @param object $response The response from Stripe.
     * @return boolean Whether or not it's a 'authentication_required' error
     */
    public function is_authentication_required_for_payment($response)
    {
    }
    /**
     * Creates a SetupIntent for future payments, and saves it to the order.
     *
     * @param WC_Order $order           The ID of the (free/pre- order).
     * @param object   $prepared_source The source, entered/chosen by the customer.
     * @return string|null              The client secret of the intent, used for confirmation in JS.
     */
    public function setup_intent($order, $prepared_source)
    {
    }
    /**
     * Create and confirm a new PaymentIntent.
     *
     * @param WC_Order $order           The order that is being paid for.
     * @param object   $prepared_source The source that is used for the payment.
     * @param float    $amount          The amount to charge. If not specified, it will be read from the order.
     * @return object                   An intent or an error.
     */
    public function create_and_confirm_intent_for_off_session($order, $prepared_source, $amount = \null)
    {
    }
    /** Verifies whether a certain ZIP code is valid for the US, incl. 4-digit extensions.
     *
     * @param string $zip The ZIP code to verify.
     * @return boolean
     */
    public function is_valid_us_zip_code($zip)
    {
    }
    /**
     * Checks if the current page is the pay for order page and the current user is allowed to pay for the order.
     *
     * @return bool
     */
    public function is_valid_pay_for_order_endpoint(): bool
    {
    }
    /**
     * Checks if the current page is the order received page and the current user is allowed to manage the order.
     *
     * @return bool
     */
    public function is_valid_order_received_endpoint(): bool
    {
    }
    /**
     * Gets a localized message for an error from a response, adds it as a note to the order, and throws it.
     *
     * @since 4.2.0
     * @param  stdClass $response  The response from the Stripe API.
     * @param  WC_Order $order     The order to add a note to.
     * @throws WC_Stripe_Exception An exception with the right message.
     */
    public function throw_localized_message($response, $order)
    {
    }
    /**
     * Generates a localized message for an error from a response.
     *
     * @since 4.3.2
     *
     * @param stdClass $response The response from the Stripe API.
     *
     * @return string The localized error message.
     */
    public function get_localized_error_message_from_response($response)
    {
    }
    /**
     * Payment_scripts function.
     *
     * Outputs scripts used for stripe payment
     *
     * @since 3.1.0
     * @version 4.0.0
     */
    public function payment_scripts()
    {
    }
    /**
     * Whether to skip loading the full payment gateway bundle on the current page.
     *
     * On product/cart pages where no express checkout method is enabled,
     * the full bundle is unnecessary — only Stripe JS is needed.
     *
     * @return bool True if the caller should return after enqueuing Stripe JS only.
     */
    protected function should_skip_full_payment_scripts()
    {
    }
    /**
     * Attaches the given payment method to the currently logged-in user.
     *
     * @param object $source_object The payment method to be attached.
     * @throws WC_Stripe_Exception
     */
    public function save_payment_method($source_object)
    {
    }
    /**
     * Returns the JavaScript configuration object used on the product, cart, and checkout pages.
     *
     * @return array  The configuration object to be loaded to JS.
     */
    public function javascript_params()
    {
    }
    /**
     * Retrieves and returns the source_id for the given $_POST variables.
     *
     * @throws WC_Stripe_Exception Error while attempting to retrieve the source_id.
     * @return object
     */
    private function get_source_object_from_request()
    {
    }
    /**
     * Whether the store needs to use SSL.
     *
     * @since 7.5.0
     * @return bool True if SSL is needed but not set.
     */
    private function needs_ssl_setup()
    {
    }
    /**
     * Retrieves or stores the status of the order before a specific event (hold or refund).
     *
     * @param WC_Order $order The order.
     * @param string   $target_status The target status the order will be set to.
     * @return string The status of the order before the event.
     * @throws InvalidArgumentException If the target status is unsupported.
     */
    protected function get_stripe_order_status_before_event($order, $target_status)
    {
    }
    /**
     * Stores the status of the order before a specific event (hold or refund) in metadata.
     *
     * @param WC_Order $order The order.
     * @param string   $target_status The target status the order will be set to.
     * @param string   $current_status The order status to store. Accepts 'default_payment_complete' which will fetch the default status for payment complete orders.
     * @return void
     */
    protected function set_stripe_order_status_before_event($order, $target_status, $current_status)
    {
    }
    /**
     * Helper method to retrieve the status of the order before it was put on hold.
     *
     * @since 8.3.0
     *
     * @param WC_Order $order The order.
     * @return string The status of the order before it was put on hold.
     */
    protected function get_stripe_order_status_before_hold($order)
    {
    }
    /**
     * Stores the status of the order before being put on hold in metadata.
     *
     * @since 8.3.0
     *
     * @param WC_Order  $order  The order.
     * @param string    $status The order status to store.
     * @return void
     */
    protected function set_stripe_order_status_before_hold($order, $status)
    {
    }
    /**
     * Helper method to retrieve the status of the order before it was refunded.
     *
     * @since 9.6.0
     *
     * @param WC_Order $order The order.
     * @return string The status of the order before it was refunded.
     */
    protected function get_stripe_order_status_before_refund($order)
    {
    }
    /**
     * Stores the status of the order before being refunded.
     *
     * @since 9.6.0
     *
     * @param WC_Order  $order  The order.
     * @param string    $status The order status to store.
     * @return void
     */
    protected function set_stripe_order_status_before_refund($order, $status)
    {
    }
    /**
     * Retrieves the risk/fraud outcome from the webhook payload.
     *
     * @param object $event_data The event data from the webhook.
     *
     * @return string The fraud type.
     */
    protected function get_risk_outcome($event_data)
    {
    }
    /**
     * Update the saved payment method information with updated billing values.
     *
     * @param string       $payment_method_id The payment method to update.
     * @param WC_Order|int $order             Order object or id.
     */
    public function update_saved_payment_method($payment_method_id, $order)
    {
    }
    /**
     * Attaches a source to the Stripe Customer object if the source type needs manual attachment.
     *
     * SEPA sources need to be manually attached to the customer object as they use legacy source objects.
     * Other reusable payment methods (eg cards), are attached to the customer object via the setup/payment intent.
     *
     * @param stdClass           $source   The source object to attach.
     * @param WC_Stripe_Customer $customer The customer object to attach the source to. Optional.
     *
     * @throws WC_Stripe_Exception If the source could not be attached to the customer.
     * @return bool True if the source was successfully attached to the customer.
     */
    private function maybe_attach_source_to_customer($source, $customer = \null)
    {
    }
    /**
     * Retrieves the balance transaction ID from the Stripe charge.
     *
     * @param stdClass $charge The charge object.
     *
     * @return string|null The balance transaction ID.
     */
    public function get_balance_transaction_id_from_charge($charge)
    {
    }
    /**
     * Generates a unique signature for an order.
     *
     * This signature is included as metadata in Stripe requests and used to identify the order when webhooks are received.
     *
     * @param WC_Order|\Automattic\WooCommerce\Admin\Overrides\OrderRefund $order The Order object.
     * @return string The order's unique signature. Format: order_id:md5(order_id-order_key-customer_id-order_total).
     */
    protected function get_order_signature($order)
    {
    }
    /**
     * Returns the default order-identification metadata sent to Stripe for an order's intent.
     *
     * @since 10.9.0
     *
     * @param WC_Order $order The order the intent belongs to.
     * @return array The default metadata: order_id, order_key, signature and tax_amount.
     */
    protected function get_order_metadata($order)
    {
    }
    /**
     * Prepares Stripe metadata for a given order.
     *
     * @param WC_Order $order Order being processed.
     *
     * @return array Array of keyed metadata values.
     */
    public function get_metadata_from_order($order)
    {
    }
}
// phpcs:disable WordPress.Files.FileName
/**
 * Abstract class that will be inherited by voucher payment methods.
 * Used by Boleto and OXXO
 *
 * @extends WC_Stripe_UPE_Payment_Gateway
 *
 * @since 5.8.0
 */
abstract class WC_Stripe_Payment_Gateway_Voucher extends \WC_Stripe_Payment_Gateway
{
    /**
     * ID used by UPE
     *
     * @var string
     */
    public const ID = '';
    /**
     * ID used by WooCommerce to identify the payment method
     * Override this when extending the class
     *
     * @var string
     */
    public $id = '';
    /**
     * ID used by stripe
     * Change this when extending this class
     */
    protected $stripe_id = '';
    /**
     * List of accepted currencies
     * Change this when extending this class
     *
     * @var array
     */
    protected $supported_currencies = [];
    /**
     * List of accepted countries
     * Change this when extending this class
     */
    protected $supported_countries = [];
    /**
     * Notices (array)
     *
     * @var array
     */
    public $notices = [];
    /**
     * Is test mode active?
     *
     * @var bool
     */
    public $testmode;
    /**
     * Alternate credit card statement name
     *
     * @var bool
     */
    public $statement_descriptor;
    /**
     * API access secret key
     *
     * @var string
     */
    public $secret_key;
    /**
     * Api access publishable key
     *
     * @var string
     */
    public $publishable_key;
    /**
     * Should we store the users credit cards?
     *
     * @var bool
     */
    public $saved_cards;
    /**
     * Gateway has additional fields during checkout
     *
     * @var bool
     */
    public $has_fields = \true;
    /**
     * Constructor
     *
     * @since 5.8.0
     */
    public function __construct()
    {
    }
    /**
     * Checks to see if all criteria is met before showing payment method.
     *
     * @return bool
     * @return bool
     * @since 5.8.0
     */
    public function is_available()
    {
    }
    /**
     * Hides refund through stripe when payment method does not allow refund
     *
     * @param WC_Order $order
     *
     * @return array|bool
     */
    public function can_refund_order($order)
    {
    }
    /**
     * Returns all supported currencies for this payment method.
     *
     * @return array
     * @return array
     * @since 5.8.0
     */
    public function get_supported_currency()
    {
    }
    /**
     * Get_icon function.
     *
     * @return string
     * @since 5.8.0
     */
    public function get_icon()
    {
    }
    /**
     * Payment_scripts function.
     *
     * @since 5.8.0
     */
    public function payment_scripts()
    {
    }
    /**
     * Returns the JavaScript configuration object used on the product, cart, and checkout pages.
     *
     * @return array  The configuration object to be loaded to JS.
     */
    public function javascript_params()
    {
    }
    /**
     * Initialize Gateway Settings Form Fields.
     *
     * @since 5.8.0
     */
    public function init_form_fields()
    {
    }
    /**
     * Process the payment
     *
     * @param int $order_id Reference.
     * @param bool $retry Should we retry on fail.
     * @param bool $force_save_source Force payment source to be saved.
     *
     * @throws Exception If payment will not be accepted.
     *
     * @since 5.8.0
     * @since 5.8.0
     */
    public function process_payment($order_id, $retry = \true, $force_save_save = \false)
    {
    }
    /**
     * Creates payment intent using order and store details.
     * If the order already has a Payment Intent it gets updated
     *
     * @param WC_Order $order The order.
     *
     * @return object
     * @throws Exception - If the create intent call returns with an error.
     * @since 5.8.0
     */
    public function create_or_update_payment_intent($order)
    {
    }
    /**
     * Validates the minimum and maximum amount.
     * Override this method when extending the class
     *
     * @param $amount
     *
     * @throws WC_Stripe_Exception when amount is out of range
     * @since 5.8.0
     */
    abstract protected function validate_amount_limits($amount);
    /**
     * Updates the payment intent when trying to pay again via Pay Order Page
     */
    public function update_payment_intent_ajax()
    {
    }
    /**
     * Gather the data necessary to confirm the payment via javascript
     * Override this when extending the class
     *
     * @param WC_Order $order
     *
     * @return array
     */
    protected function get_confirm_payment_data($order)
    {
    }
}
/**
 * REST controller for transactions.
 */
class WC_Stripe_REST_Base_Controller extends \WP_REST_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v3';
    /**
     * Verify access.
     *
     * Override this method if custom permissions required.
     *
     * @return bool
     */
    public function check_permission()
    {
    }
}
/**
 * REST controller for retrieving Stripe's account data.
 *
 * @since 5.6.0
 */
class WC_REST_Stripe_Account_Controller extends \WC_Stripe_REST_Base_Controller
{
    /**
     * Endpoint path.
     *
     * @var string
     */
    protected $rest_base = 'wc_stripe/account';
    /**
     * The account data utility.
     *
     * @var WC_Stripe_Account
     */
    private $account;
    /**
     * Stripe payment gateway.
     *
     * @var WC_Stripe_UPE_Payment_Gateway
     */
    private $gateway;
    public function __construct(\WC_Stripe_UPE_Payment_Gateway $gateway, \WC_Stripe_Account $account)
    {
    }
    /**
     * Configure REST API routes.
     *
     * @return void
     */
    public function register_routes()
    {
    }
    /**
     * Retrieve the Stripe account information.
     *
     * @return WP_REST_Response
     */
    public function get_account()
    {
    }
    /**
     * Return a summary of Stripe account details.
     *
     * @return WP_REST_Response
     */
    public function get_account_summary()
    {
    }
    /**
     * Retrieve the webhook status information.
     *
     * @return WP_REST_Response
     */
    public function get_webhook_status_message()
    {
    }
    /**
     * Refreshes the cached account data and returns the updated payload.
     *
     * @return WP_REST_Response
     */
    public function refresh_account()
    {
    }
    /**
     * Generates the OAuth connection data for the given mode.
     *
     * @param string $mode The mode. Can be 'test' or 'live'.
     * @return array The connection data.
     */
    private function get_account_oauth_connection_data($mode)
    {
    }
}
/**
 * REST controller for saving Stripe's test/live account keys.
 *
 * This includes Live Publishable Key, Live Secret Key, Webhook Secret.
 *
 * @since 5.6.0
 */
class WC_REST_Stripe_Account_Keys_Controller extends \WC_Stripe_REST_Base_Controller
{
    /**
     * Endpoint path.
     *
     * @var string
     */
    protected $rest_base = 'wc_stripe/account_keys';
    /**
     * The instance of the Stripe account.
     *
     * @var WC_Stripe_Account
     */
    private $account;
    /**
     * Constructor.
     *
     * @param WC_Stripe_Account $account The instance of the Stripe account.
     */
    public function __construct(\WC_Stripe_Account $account)
    {
    }
    /**
     * Configure REST API routes.
     *
     * @return void
     */
    public function register_routes()
    {
    }
    /**
     * Retrieve flag status.
     *
     * @return WP_REST_Response
     */
    public function get_account_keys()
    {
    }
    private function mask_key_value($value): string
    {
    }
    /**
     * Validate stripe publishable keys and secrets. Allow empty string to erase key.
     * Also validates against explicit key prefixes based on live/test environment.
     *
     * @param mixed           $param            The parameter value to validate.
     * @param WP_REST_Request $request          The request object.
     * @param string          $key              The parameter key.
     * @param array           $validate_options Validation options with 'regex' and 'error_message'.
     * @return true|WP_Error
     */
    private function validate_stripe_param($param, $request, $key, $validate_options)
    {
    }
    /**
     * Validates a publishable key.
     *
     * @param mixed           $param The parameter value to validate.
     * @param WP_REST_Request $request The request object.
     * @param string          $key The parameter key.
     * @return true|WP_Error
     */
    public function validate_publishable_key($param, $request, $key)
    {
    }
    /**
     * Validates a secret key.
     *
     * @param mixed           $param The parameter value to validate.
     * @param WP_REST_Request $request The request object.
     * @param string          $key The parameter key.
     * @return true|WP_Error
     */
    public function validate_secret_key($param, $request, $key)
    {
    }
    /**
     * Validates a test publishable key.
     *
     * @param mixed           $param   The parameter value to validate.
     * @param WP_REST_Request $request The request object.
     * @param string          $key     The parameter key.
     * @return true|WP_Error
     */
    public function validate_test_publishable_key($param, $request, $key)
    {
    }
    /**
     * Validates a test secret key.
     *
     * @param mixed           $param   The parameter value to validate.
     * @param WP_REST_Request $request The request object.
     * @param string          $key     The parameter key.
     * @return true|WP_Error
     */
    public function validate_test_secret_key($param, $request, $key)
    {
    }
    /**
     * Update the data.
     *
     * @param WP_REST_Request $request Full data about the request.
     * @return WP_REST_Response
     */
    public function set_account_keys(\WP_REST_Request $request)
    {
    }
    /**
     * Tests the Stripe API Keys, using the received keys, or the unmasked version if they were not changed.
     *
     * This code was ported from the frontend as we no longer have the unmasked keys available in the client.
     * It uses the Stripe token API to check the keys, and it DOES NOT use the current saved keys, it uses the received
     * data (except for masked keys, for those the original value from settings is used)
     *
     * @param WP_REST_Request $request Full data about the request.
     * @return WP_REST_Response
     */
    public function test_account_keys(\WP_REST_Request $request)
    {
    }
    /**
     * Configure webhooks for the Stripe Account.
     *
     * This will create a webhook endpoint in the Stripe account with the events we need to listen to at the correct URL.
     * The webhook secret will be stored in the settings.
     *
     * @param WP_REST_Request $request Data about the request.
     * @return WP_REST_Response
     */
    public function configure_webhooks(\WP_REST_Request $request)
    {
    }
    /**
     * Decommissions the configured Webhook if the user is removing their secret key.
     * This is to avoid leaving orphaned Webhooks in the Stripe account.
     *
     * @param array $settings             The current settings.
     * @param array $current_account_keys The current account keys.
     *
     * @return array The updated settings. The webhook data will be removed if the webhook was decommissioned.
     */
    private function decommission_configured_webhook_after_key_update($settings, $current_account_keys)
    {
    }
    /**
     * Records a track event when the keys of an account are manually removed (account disconnected).
     *
     * @param bool $is_test_mode Whether the keys are test ones.
     * @return void
     */
    private function record_manual_account_disconnect_track_event(bool $is_test_mode)
    {
    }
    /**
     * Records a track event when the keys of an account are manually updated.
     *
     * @param bool $is_test_mode Whether the keys are test ones.
     * @return void
     */
    private function record_manual_account_key_update_track_event(bool $is_test_mode)
    {
    }
}
/**
 * REST controller for the Agentic Commerce dashboard.
 *
 * @since 10.7.0
 */
class WC_REST_Stripe_Agentic_Commerce_Controller extends \WC_Stripe_REST_Base_Controller
{
    /**
     * Option key for the sync lock.
     *
     * Uses a dedicated option (not a transient) so the lock is not silently
     * dropped by object-cache flushes. The stored value is the lock acquisition
     * timestamp; locks older than {@see self::SYNC_LOCK_TTL} are treated as stale.
     *
     * @var string
     * @since 10.7.0
     */
    private const SYNC_LOCK_OPTION = 'wc_stripe_agentic_sync_lock';
    /**
     * Maximum age in seconds before a sync lock is considered stale.
     *
     * @var int
     * @since 10.7.0
     */
    private const SYNC_LOCK_TTL = 5 * \MINUTE_IN_SECONDS;
    /**
     * ImportSet statuses that are non-terminal and should be re-polled.
     *
     * Stripe advances an ImportSet through `queued` → `validating_records` →
     * `pending` → `creating_records` → one of the terminal states
     * (`succeeded`, `succeeded_with_errors`, or `failed`). Entries in any
     * non-terminal state get refreshed on dashboard load. `unknown` is also
     * refreshed so rows persisted before the creation response included a
     * status eventually resolve.
     *
     * @since 10.7.0
     * @var string[]
     */
    private const REFRESHABLE_STATUSES = ['queued', 'validating', 'validating_records', 'pending', 'creating_records', 'unknown'];
    /**
     * Number of most-recent sync history entries the dashboard table shows.
     *
     * @var int
     * @since 10.9.0
     */
    private const RECENT_HISTORY_LIMIT = 5;
    /**
     * Endpoint path.
     *
     * @var string
     */
    protected $rest_base = 'wc_stripe/agentic-commerce';
    /**
     * Placeholder returned by GET /settings when a webhook secret is stored.
     *
     * Mirrors Stripe's `whsec_` prefix so the field looks recognisable in the UI
     * without exposing the stored value. The same value is detected on POST so
     * saving without editing the field does not overwrite the stored secret.
     *
     * @var string
     * @since 10.7.0
     */
    public const MASKED_WEBHOOK_SECRET = 'whsec_********************************';
    /**
     * Configure REST API routes.
     *
     * Routes are only registered when the Agentic Commerce feature flag is on
     * and the integration class is loaded, so no endpoints exist when the
     * feature is disabled.
     *
     * @since 10.7.0
     * @return void
     */
    public function register_routes(): void
    {
    }
    /**
     * Return current sync status, history, and next scheduled run.
     *
     * @since 10.7.0
     * @return WP_REST_Response|WP_Error
     */
    public function get_status()
    {
    }
    /**
     * Return an upload-free preview of the next sync: how many products would be
     * included vs. excluded, plus the products the feed validator would reject
     * and why.
     *
     * Read-only and gated only on the developer feature flag (not the merchant
     * toggle) so merchants can inspect feed health before enabling the feature.
     *
     * @since 10.9.0
     * @return WP_REST_Response|WP_Error
     */
    public function get_preview()
    {
    }
    /**
     * Trigger a manual product feed sync.
     *
     * On success, the next scheduled recurring sync is rescheduled from the
     * current time so the manual sync resets the automatic sync window.
     *
     * @since 10.7.0
     * @return WP_REST_Response|WP_Error
     */
    public function trigger_sync()
    {
    }
    /**
     * Return the Agentic Commerce feature settings.
     *
     * @since 10.7.0
     * @return WP_REST_Response
     */
    public function get_agentic_settings(): \WP_REST_Response
    {
    }
    /**
     * Update the Agentic Commerce feature settings.
     *
     * @since 10.7.0
     * @param WP_REST_Request $request Full request data.
     * @return WP_REST_Response
     */
    public function update_agentic_settings(\WP_REST_Request $request): \WP_REST_Response
    {
    }
    /**
     * Refresh any non-terminal sync entries by polling Stripe for their current status.
     *
     * Called lazily when the status endpoint is read. Entries in any status
     * listed in {@see self::REFRESHABLE_STATUSES} with a valid import_set_id
     * are refreshed. The Stripe API round-trips run against an in-memory copy
     * of the history; the resulting status updates are then applied through
     * {@see WC_Stripe_Agentic_Commerce_Integration::update_pending_statuses()},
     * which re-reads the persisted history at write time so any entries
     * appended concurrently by the scheduled sync or another manual trigger
     * are not clobbered.
     *
     * @since 10.7.0
     * @return void
     */
    private function refresh_pending_sync_statuses(): void
    {
    }
    /**
     * Create a Files API delivery instance using the current Stripe settings.
     *
     * @since 10.7.0
     * @return WC_Stripe_Agentic_Commerce_Files_Api_Delivery
     */
    private function create_delivery(): \WC_Stripe_Agentic_Commerce_Files_Api_Delivery
    {
    }
    /**
     * Normalise a raw sync option array into a consistent shape for the API response.
     *
     * Used for both the last_sync snapshot and individual history entries.
     *
     * @since 10.7.0
     * @param array $entry Raw entry from options table.
     * @return array
     */
    private function format_entry(array $entry): array
    {
    }
    /**
     * Whether the Agentic Commerce integration is available in this request.
     *
     * @since 10.7.0
     * @return bool
     */
    private function is_available(): bool
    {
    }
    /**
     * Whether the merchant has enabled Agentic Commerce via the settings UI.
     *
     * Distinct from {@see self::is_available()} which checks the developer
     * feature flag and class availability. This check enforces the merchant-
     * facing toggle on write paths so a stale admin tab or direct POST cannot
     * push the catalog to Stripe after the merchant has disabled the feature.
     *
     * @since 10.7.0
     * @return bool
     */
    private function is_merchant_enabled(): bool
    {
    }
    /**
     * Build the standard "unavailable" error response.
     *
     * @since 10.7.0
     * @return WP_Error
     */
    private function get_unavailable_error(): \WP_Error
    {
    }
    /**
     * Attempt to acquire the sync lock.
     *
     * Uses a dedicated option (with `add_option()` for atomicity) rather than a
     * transient so the lock survives object-cache flushes. A lock older than
     * {@see self::SYNC_LOCK_TTL} is considered stale and overwritten.
     *
     * @since 10.7.0
     * @return bool True if the caller holds the lock, false if another caller holds it.
     */
    private function acquire_sync_lock(): bool
    {
    }
    /**
     * Release the sync lock.
     *
     * @since 10.7.0
     * @return void
     */
    private function release_sync_lock(): void
    {
    }
}
/**
 * REST controller for connection tokens.
 */
class WC_REST_Stripe_Connection_Tokens_Controller extends \WC_Stripe_REST_Base_Controller
{
    /**
     * Endpoint path.
     *
     * @var string
     */
    protected $rest_base = 'wc_stripe/connection_tokens';
    /**
     * Stripe payment gateway.
     *
     * @var WC_Stripe_UPE_Payment_Gateway
     */
    private $gateway;
    /**
     * Constructor.
     *
     * @param WC_Stripe_UPE_Payment_Gateway $gateway Stripe payment gateway.
     */
    public function __construct(\WC_Stripe_UPE_Payment_Gateway $gateway)
    {
    }
    /**
     * Configure REST API routes.
     *
     * @return void
     */
    public function register_routes()
    {
    }
    /**
     * Create a connection token via API.
     *
     * @param WP_REST_Request $request Full data about the request.
     *
     * @return WP_REST_Response|WP_Error
     */
    public function create_token($request)
    {
    }
}
/**
 * Handles the exit survey dismiss REST endpoint.
 */
class WC_REST_Stripe_Exit_Survey_Controller extends \WC_Stripe_REST_Base_Controller
{
    /**
     * Endpoint path.
     *
     * @var string
     */
    protected $rest_base = 'wc_stripe/exit-survey';
    /**
     * Option name for the cooldown timestamp.
     *
     * @var string
     */
    public const OPTION_NAME = 'wc_stripe_exit_survey_last_shown';
    /**
     * Register routes.
     *
     * @return void
     */
    public function register_routes()
    {
    }
    /**
     * Persist the exit survey cooldown timestamp.
     *
     * @param WP_REST_Request<array<string, mixed>> $request The request object.
     * @return WP_REST_Response
     */
    public function dismiss(\WP_REST_Request $request)
    {
    }
}
/**
 * REST controller for terminal locations.
 */
class WC_REST_Stripe_Locations_Controller extends \WC_Stripe_REST_Base_Controller
{
    /**
     * Endpoint path.
     *
     * @var string
     */
    protected $rest_base = 'wc_stripe/terminal/locations';
    /**
     * Configure REST API routes.
     *
     * @return void
     */
    public function register_routes()
    {
    }
    /**
     * Transform location address for Puerto Rico to use US as country and PR as state.
     *
     * @param object|array $location Location object or address array to transform
     * @return object|array Transformed location object or address array
     */
    private function transform_pr_address($location)
    {
    }
    /**
     * Create a terminal location via Stripe API.
     *
     * @param WP_REST_Request $request Full data about the request.
     *
     * @return WP_REST_Response|WP_Error
     */
    public function create_location($request)
    {
    }
    /**
     * Get all terminal locations via Stripe API.
     *
     * @param WP_REST_Request $request Full data about the request.
     *
     * @return WP_REST_Response|WP_Error
     */
    public function get_all_locations($request)
    {
    }
    /**
     * Delete a terminal location via Stripe API.
     *
     * @param WP_REST_Request $request Full data about the request.
     *
     * @return WP_REST_Response|WP_Error
     */
    public function delete_location($request)
    {
    }
    /**
     * Get a terminal location via Stripe API.
     *
     * @param WP_REST_Request $request Full data about the request.
     *
     * @return WP_REST_Response|WP_Error
     */
    public function get_location($request)
    {
    }
    /**
     * Get default terminal location.
     *
     * @param WP_REST_Request $request Full data about the request.
     *
     * @return WP_REST_Response|WP_Error
     */
    public function get_store_location($request)
    {
    }
    /**
     * Update a terminal location via Stripe API.
     *
     * @param WP_REST_Request $request Full data about the request.
     *
     * @return WP_REST_Response|WP_Error
     */
    public function update_location($request)
    {
    }
    /**
     * Fetch terminal locations from Stripe API.
     *
     * @return array
     */
    private function fetch_locations()
    {
    }
}
/**
 * REST controller for orders.
 */
class WC_REST_Stripe_Orders_Controller extends \WC_Stripe_REST_Base_Controller
{
    /**
     * Endpoint path.
     *
     * @var string
     */
    protected $rest_base = 'wc_stripe/orders';
    /**
     * Minimum charge amounts by currency.
     * https://docs.stripe.com/currencies#minimum-and-maximum-charge-amounts
     *
     * @var array
     */
    protected static $minimum_amounts = [
        'USD' => 50,
        // $0.50
        'AED' => 200,
        // 2.00 د.إ
        'AUD' => 50,
        // $0.50
        'BGN' => 100,
        // лв1.00
        'BRL' => 50,
        // R$0.50
        'CAD' => 50,
        // $0.50
        'CHF' => 50,
        // 0.50 Fr
        'CZK' => 1500,
        // 15.00Kč
        'DKK' => 250,
        // 2.50-kr
        'EUR' => 50,
        // €0.50
        'GBP' => 30,
        // £0.30
        'HKD' => 400,
        // $4.00
        'HUF' => 17500,
        // 175.00 Ft
        'INR' => 50,
        // ₹0.50
        'JPY' => 50,
        // ¥50
        'MXN' => 1000,
        // $10
        'MYR' => 200,
        // RM 2
        'NOK' => 300,
        // 3.00-kr
        'NZD' => 50,
        // $0.50
        'PLN' => 200,
        // 2.00 zł
        'RON' => 200,
        // lei2.00
        'SEK' => 300,
        // 3.00-kr
        'SGD' => 50,
        // $0.50
        'THB' => 1000,
    ];
    /**
     * Stripe payment gateway.
     *
     * @var WC_Stripe_UPE_Payment_Gateway
     */
    private $gateway;
    /**
     * Constructor.
     *
     * @param WC_Stripe_UPE_Payment_Gateway $gateway Stripe payment gateway.
     */
    public function __construct(\WC_Stripe_UPE_Payment_Gateway $gateway)
    {
    }
    /**
     * Configure REST API routes.
     *
     * @return void
     */
    public function register_routes()
    {
    }
    /**
     * Create a Stripe customer for an order if needed, or return existing customer.
     *
     * @param WP_REST_Request $request Full data about the request.
     *
     * @return WP_REST_Response|WP_Error
     */
    public function create_customer($request)
    {
    }
    /**
     * Capture terminal payment for an order.
     *
     * @param WP_REST_Request $request Full data about the request.
     *
     * @return WP_REST_Response|WP_Error
     */
    public function capture_terminal_payment($request)
    {
    }
}
/**
 * REST controller for settings.
 */
class WC_REST_Stripe_Settings_Controller extends \WC_Stripe_REST_Base_Controller
{
    /**
     * Endpoint path.
     *
     * @var string
     */
    protected $rest_base = 'wc_stripe/settings';
    /**
     * Stripe payment gateway.
     *
     * @var WC_Stripe_UPE_Payment_Gateway
     */
    private $gateway;
    /**
     * Constructor.
     *
     * @param WC_Stripe_UPE_Payment_Gateway $gateway Stripe payment gateway.
     */
    public function __construct(\WC_Stripe_UPE_Payment_Gateway $gateway)
    {
    }
    /**
     * Configure REST API routes.
     *
     * @return void
     */
    public function register_routes()
    {
    }
    /**
     * Retrieve settings.
     *
     * @return WP_REST_Response
     */
    public function get_settings()
    {
    }
    /**
     * Update settings.
     *
     * @param WP_REST_Request $request Full data about the request.
     *
     * @return WP_REST_Response
     */
    public function update_settings(\WP_REST_Request $request)
    {
    }
    /**
     * Returns the payment method IDs to enable.
     *
     * @param WP_REST_Request $request Request object.
     *
     * @return string[]
     */
    private function get_payment_method_ids_to_enable(\WP_REST_Request $request)
    {
    }
    /**
     * Updates the order of available payment methods in settings.
     *
     * @param WP_REST_Request $request Request object.
     *
     * @return WP_REST_Response
     */
    public function update_payment_methods_order(\WP_REST_Request $request)
    {
    }
    /**
     * Updates Stripe enabled status.
     *
     * @param WP_REST_Request $request Request object.
     *
     * @return void
     */
    private function update_is_stripe_enabled(\WP_REST_Request $request)
    {
    }
    /**
     * Updates Stripe test mode.
     *
     * @param WP_REST_Request $request Request object.
     *
     * @return void
     */
    private function update_is_test_mode_enabled(\WP_REST_Request $request)
    {
    }
    /**
     * Updates the "payment request" enable/disable settings.
     *
     * @param WP_REST_Request $request Request object.
     *
     * @return void
     */
    private function update_is_express_checkout_enabled_for_legacy_checkout(\WP_REST_Request $request)
    {
    }
    /**
     * Updates manual capture.
     *
     * @param WP_REST_Request $request Request object.
     *
     * @return void
     */
    private function update_is_manual_capture_enabled(\WP_REST_Request $request)
    {
    }
    /**
     * Updates "saved cards" feature.
     *
     * @param WP_REST_Request $request Request object.
     *
     * @return void
     */
    private function update_is_saved_cards_enabled(\WP_REST_Request $request)
    {
    }
    /**
     * Updates "SEPA tokens for other iDEAL" feature.
     *
     * @param WP_REST_Request $request Request object.
     *
     * @return void
     */
    private function update_is_sepa_tokens_for_ideal_enabled(\WP_REST_Request $request)
    {
    }
    /**
     * Updates "SEPA tokens for Bancontact" feature.
     *
     * @param WP_REST_Request $request Request object.
     *
     * @return void
     */
    private function update_is_sepa_tokens_for_bancontact_enabled(\WP_REST_Request $request)
    {
    }
    /**
     * Updates "separate card form" feature.
     *
     * @param WP_REST_Request $request Request object.
     *
     * @return void
     */
    private function update_is_separate_card_form_enabled(\WP_REST_Request $request)
    {
    }
    /**
     * Updates whether short account statement should be used.
     *
     * @param WP_REST_Request $request Request object.
     *
     * @return void
     */
    private function update_is_short_account_statement_enabled(\WP_REST_Request $request)
    {
    }
    /**
     * Updates whether debug logging is enabled.
     *
     * @param WP_REST_Request $request Request object.
     *
     * @return void
     */
    private function update_is_debug_log_enabled(\WP_REST_Request $request)
    {
    }
    /**
     * Updates appearance attributes of the Amazon Pay button.
     *
     * @param WP_REST_Request $request Request object.
     *
     * @return void
     */
    private function update_amazon_pay_settings(\WP_REST_Request $request)
    {
    }
    /**
     * Updates appearance attributes of the Link by Stripe button.
     *
     * @param WP_REST_Request $request Request object.
     *
     * @return void
     */
    private function update_link_settings(\WP_REST_Request $request)
    {
    }
    /**
     * Updates appearance attributes of the payment request button.
     *
     * @param WP_REST_Request $request Request object.
     *
     * @return void
     */
    private function update_express_checkout_settings(\WP_REST_Request $request)
    {
    }
    /**
     * Updates the "Optimized Checkout" settings.
     *
     * @param WP_REST_Request $request Request object.
     *
     * @return void
     */
    private function update_oc_settings(\WP_REST_Request $request)
    {
    }
    /**
     * Updates the list of enabled payment methods.
     *
     * @param array $payment_method_ids_to_enable The list of payment method ids to enable.
     * @param bool  $is_upe_enabled               Whether UPE is enabled.
     *
     * @return void
     */
    private function update_enabled_payment_methods($payment_method_ids_to_enable, $is_upe_enabled)
    {
    }
    /**
     * Set `wc_stripe_show_customization_notice` as `no` to dismiss notice.
     *
     * @param WP_REST_Request $request Request object.
     *
     * @return WP_REST_Response
     *
     * @deprecated since 9.6.0, use `dismiss_notice` instead.
     */
    public function dismiss_customization_notice(\WP_REST_Request $request)
    {
    }
    /**
     * Dismisses settings notices such as the customization notice and BNPL promotion banner.
     *
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response
     */
    public function dismiss_notice(\WP_REST_Request $request)
    {
    }
    /**
     * Moves Stripe gateways to the first positions in WooCommerce gateway order.
     *
     * @return WP_REST_Response
     */
    public function set_stripe_gateways_first()
    {
    }
    /**
     * Record tracks events for each payment method that was enabled or disabled.
     *
     * @param array $enabled_methods An array of payment method ids that were enabled.
     * @param array $disabled_methods An array of payment method ids that were disabled.
     *
     * @return void
     */
    private function record_payment_method_settings_event($enabled_methods, $disabled_methods)
    {
    }
}
/**
 * REST controller for tokens.
 */
class WC_REST_Stripe_Tokens_Controller extends \WC_Stripe_REST_Base_Controller
{
    /**
     * Endpoint path.
     */
    protected $rest_base = 'wc_stripe/tokens';
    /**
     * Register REST API routes for Stripe tokens.
     *
     * @return void
     */
    public function register_routes()
    {
    }
    /**
     * Retrieve a Stripe token, given a secret-key and token_id.
     *
     * @param WP_REST_Request $request Request object.
     *
     * @return WP_REST_Response Response object.
     */
    public function get_token($request)
    {
    }
}
/**
 * Class that represents admin notices.
 *
 * @since 4.1.0
 */
class WC_Stripe_Admin_Notices
{
    /**
     * Stripe customer page base URL.
     *
     * @var string
     */
    private const STRIPE_CUSTOMER_PAGE_BASE_URL = 'https://dashboard.stripe.com/customers/';
    /**
     * Meta key name to store the subscription detachment notice status.
     *
     * @var string
     */
    protected const DETACHED_NOTICE_DISMISSED_META = '_wc_stripe_subscription_detached_notice_dismissed';
    /**
     * Product-update URL linked from the OCS/AP 10.8 "now active" notices.
     *
     * @var string
     */
    private const OCS_AP_PRODUCT_UPDATE_URL = 'https://woocommerce.com/product-update/stripe-for-woocommerce-10-8-0';
    /**
     * Server-side visibility flags, written by WC_Stripe_OCS_AP_Default_On_Update,
     * that gate the OCS/AP 10.8 "now active" notices.
     *
     * @var string
     */
    private const SHOW_OCS_AP_BANNER_OPTION = 'wc_stripe_show_ocs_ap_banner';
    private const SHOW_AP_ONLY_BANNER_OPTION = 'wc_stripe_show_ap_only_banner';
    private const SHOW_OCS_ONLY_BANNER_OPTION = 'wc_stripe_show_ocs_only_banner';
    /**
     * Notices (array)
     *
     * @var array
     */
    public $notices = [];
    /**
     * Constructor
     *
     * @since 4.1.0
     */
    public function __construct()
    {
    }
    /**
     * Allow this class and other classes to add slug keyed notices (to avoid duplication).
     *
     * @since 1.0.0
     * @version 4.0.0
     *
     * @param string $slug        The notice slug.
     * @param string $class       The notice CSS class.
     * @param string $message     The notice message.
     * @param bool   $dismissible Whether the notice is dismissible.
     * @param array  $actions     Optional action buttons.
     * @param array  $css_rules   Optional CSS rules.
     *
     * @return void
     */
    public function add_admin_notice($slug, $class, $message, $dismissible = \false, $actions = [], array $css_rules = [])
    {
    }
    /**
     * Display any notices we've collected thus far.
     *
     * @since 1.0.0
     * @version 4.0.0
     *
     * @return void
     */
    public function admin_notices()
    {
    }
    /**
     * Displays the legacy deprecation notice.
     *
     * @param string $plugin_file Plugin file.
     *
     * @return void
     */
    public static function display_legacy_deprecation_notice($plugin_file)
    {
    }
    /**
     * List of available payment methods.
     *
     * @since 4.1.0
     * @return array
     *
     * @deprecated 10.3.0 This method will be removed in a future release.
     */
    public function get_payment_methods()
    {
    }
    /**
     * The backup sanity check, in case the plugin is activated in a weird way,
     * or the environment changes after activation. Also handles upgrade routines.
     *
     * @since 1.0.0
     * @version 4.0.0
     *
     * @return void
     */
    public function stripe_check_environment()
    {
    }
    /**
     * Surfaces a notice when the Stripe API appears to be experiencing an outage.
     *
     * The outage flag is set by WC_Stripe_API when requests fail with network
     * errors, timeouts, or 5xx responses, and clears automatically when the
     * transient expires (or earlier on the next successful response).
     *
     * @return void
     */
    public function check_api_outage(): void
    {
    }
    /**
     * Wrapper around wp_get_environment_type().
     *
     * A test seam: wp_get_environment_type() memoizes in a static and can't be
     * varied between test cases.
     *
     * @return string One of 'local', 'development', 'staging', 'production'.
     */
    protected function get_environment_type(): string
    {
    }
    /**
     * Environment check for all other payment methods.
     *
     * @since 4.1.0
     *
     * @return void
     */
    public function payment_methods_check_environment()
    {
    }
    /**
     * Checks if the merchant may have been affected by the ECE button location bug
     * in versions 10.1.0–10.2.x and displays a notice if so.
     *
     * @since 10.4.0
     *
     * @return void
     */
    public function check_express_checkout_location(): void
    {
    }
    /**
     * Surfaces the "now active" notices for the OCS + Adaptive Pricing 10.8
     * default-on rollout.
     *
     * The visibility options are written once by {@see WC_Stripe_OCS_AP_Default_On_Update}
     * at upgrade time, which guarantees they are mutually exclusive.
     *
     * Shown across all WooCommerce admin screens so the message reaches merchants
     * who never open the Stripe settings page.
     *
     * @since 10.8.0
     *
     * @return void
     */
    public function check_ocs_ap_update_notices(): void
    {
    }
    /**
     * Adds a notice to the subscription details page if we are looking at an active subscription and the payment method has been detached.
     *
     * @return void
     */
    public function subscription_check_detachment()
    {
    }
    /**
     * Add a notice to the admin area if there are subscriptions with payment method detached.
     *
     * @return void
     */
    public function subscription_check_detachment_bulk_action()
    {
    }
    /**
     * Hides any admin notices.
     *
     * @since 4.0.0
     * @version 4.0.0
     *
     * @return void
     */
    public function hide_notices()
    {
    }
    /**
     * Get setting link.
     *
     * @since 1.0.0
     *
     * @return string Setting link
     */
    public function get_setting_link()
    {
    }
    /**
     * Saves options in order to hide notices based on the gateway's version.
     *
     * @since 4.3.0
     *
     * @return void
     */
    public function stripe_updated()
    {
    }
    /**
     * Check for any notices to display after an update.
     *
     * @param string $previous_version The previous version of the plugin.
     *
     * @since 10.8.0
     *
     * @return void
     */
    public static function check_update_notices($previous_version): void
    {
    }
}
/**
 * Admin page for Amazon Pay Customize Express Checkouts.
 */
class WC_Stripe_Amazon_Pay_Controller
{
    public function __construct()
    {
    }
    /**
     * Load admin scripts.
     *
     * @return void
     */
    public function admin_scripts()
    {
    }
    /**
     * Prints the admin options for the gateway.
     * Remove this action once we're fully migrated to UPE and move the wrapper in the `admin_options` method of the UPE gateway.
     *
     * @return void
     */
    public function admin_options()
    {
    }
}
/**
 * Registers Stripe admin destinations as WordPress Command Palette commands.
 *
 * @since 10.9.0
 */
class WC_Stripe_Command_Palette_Controller
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Registers and enqueues the command palette registration script on every admin screen.
     *
     * Loaded globally because the palette is mounted by core in the editor,
     * not on Stripe's own settings pages. This only needs to load it for users who can manage WooCommerce.
     *
     * @return void
     */
    public function admin_scripts(): void
    {
    }
}
/**
 * Admin page for UPE Customize Express Checkouts.
 *
 * @since 10.3.0
 */
class WC_Stripe_Express_Checkout_Controller
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Load admin scripts.
     *
     * @return void
     */
    public function admin_scripts(): void
    {
    }
    /**
     * Prints the admin options for the gateway.
     *
     * TODO: Remove this action and move the wrapper in the `admin_options` method of the UPE gateway.
     *
     * @return void
     */
    public function admin_options(): void
    {
    }
}
/**
 * Class that adds Inbox notifications.
 *
 * @since 4.5.4
 */
class WC_Stripe_Inbox_Notes
{
    public const SUCCESS_NOTE_NAME = 'stripe-apple-pay-marketing-guide-holiday-2020';
    public const FAILURE_NOTE_NAME = 'stripe-apple-pay-domain-registration-needed';
    public const POST_SETUP_SUCCESS_ACTION = 'wc_stripe_apple_pay_post_setup_success';
    public const CAMPAIGN_2020_CLEANUP_ACTION = 'wc_stripe_apple_pay_2020_cleanup';
    public function __construct()
    {
    }
    /**
     * Check if inbox notes are supported.
     *
     * @return bool True if inbox notes are supported, false otherwise.
     */
    public static function are_inbox_notes_supported()
    {
    }
    /**
     * Create UPE notes.
     *
     * @return void
     */
    public static function create_upe_notes()
    {
    }
    /**
     * Get the cutoff timestamp for the 2020 holiday campaign.
     *
     * @return int The cutoff timestamp.
     */
    public static function get_campaign_2020_cutoff()
    {
    }
    /**
     * Get the success note title.
     *
     * @return string The success note title.
     */
    public static function get_success_title()
    {
    }
    /**
     * Manage notes to show after domain registration.
     *
     * @param bool $registration_complete Whether the domain registration was successful.
     *
     * @return void
     */
    public static function notify_on_apple_pay_domain_registration($registration_complete)
    {
    }
    /**
     * Whether conditions are right for the marketing note.
     *
     * @return bool True if the marketing note should be shown, false otherwise.
     */
    public static function should_show_marketing_note()
    {
    }
    /**
     * If conditions are right, show note promoting Apple Pay marketing guide.
     *
     * @return void
     */
    public static function create_marketing_note()
    {
    }
    /**
     * Show note indicating domain registration failure.
     *
     * @return void
     */
    public static function create_failure_note()
    {
    }
    /**
     * Destroy unactioned inbox notes from the 2020 holiday campaign, replacing
     * them with a non-holiday note promoting Apple Pay. This will be run once
     * on/about 2020 Dec 22.
     *
     * @return void
     */
    public static function cleanup_campaign_2020()
    {
    }
}
/**
 * Admin page for Link by Stripe Customize Express Checkouts.
 */
class WC_Stripe_Link_Controller
{
    public function __construct()
    {
    }
    /**
     * Load admin scripts.
     *
     * @return void
     */
    public function admin_scripts()
    {
    }
    /**
     * Prints the admin options for the gateway.
     *
     * @return void
     */
    public function admin_options()
    {
    }
}
/**
 * Class that handles various admin tasks.
 *
 * @since 5.6.0
 */
class WC_Stripe_Payment_Gateways_Controller
{
    /**
     * The Stripe account instance.
     *
     * @var WC_Stripe_Account
     */
    private \WC_Stripe_Account $account;
    /**
     * Constructor
     *
     * @since 5.6.0
     *
     * @param WC_Stripe_Account $account Stripe account.
     */
    public function __construct(\WC_Stripe_Account $account)
    {
    }
    /**
     * Register payment gateway scripts.
     *
     * @return void
     */
    public function register_payments_scripts()
    {
    }
    /**
     * Enqueue payment gateway scripts on the payment methods page.
     *
     * @return void
     */
    public function enqueue_payments_scripts()
    {
    }
    /**
     * Adds a container to the "payment gateways" page.
     * This is where the "Are you sure you want to disable Stripe?" confirmation dialog is rendered.
     *
     * @return void
     */
    public function wc_stripe_gateway_container()
    {
    }
}
/**
 * Admin page for UPE Customize Express Checkouts.
 *
 * @since 5.4.1
 *
 * @deprecated 10.3.0 Moved to includes/admin/class-wc-stripe-express-checkout-controller.php
 */
class WC_Stripe_Payment_Requests_Controller
{
    public function __construct()
    {
    }
    /**
     * Load admin scripts.
     *
     * @return void
     */
    public function admin_scripts()
    {
    }
    /**
     * Prints the admin options for the gateway.
     * Remove this action once we're fully migrated to UPE and move the wrapper in the `admin_options` method of the UPE gateway.
     *
     * @return void
     */
    public function admin_options()
    {
    }
}
/**
 * Enqueues the exit survey script on the Plugins admin page.
 *
 * @since 10.6.0
 */
class WC_Stripe_Plugins_Page_Controller
{
    /**
     * The Stripe account instance.
     *
     * @var WC_Stripe_Account
     */
    private $account;
    /**
     * Constructor.
     *
     * @param WC_Stripe_Account $account Stripe account.
     */
    public function __construct(\WC_Stripe_Account $account)
    {
    }
    /**
     * Enqueue the plugins page script and styles.
     *
     * @param string|null $hook_suffix The current admin page hook suffix.
     * @return void
     */
    public function enqueue_scripts($hook_suffix = \null)
    {
    }
    /**
     * Returns the WordPress.org plugin slug.
     *
     * Hard-coded so the plugin information modal still resolves when the plugin
     * is installed in a non-standard directory.
     *
     * @return string The plugin slug.
     */
    private function get_plugin_slug(): string
    {
    }
    /**
     * Builds the URL for the WordPress plugin information modal, opened on the changelog tab.
     *
     * @return string The thickbox-iframe URL.
     */
    private function get_changelog_url(): string
    {
    }
    private string $stripe_plugin_basename = '';
    private function get_plugin_basename(): string
    {
    }
    /**
     * Appends a "Release Notes" link to the plugin row meta on the plugins admin page.
     *
     * The link reuses WordPress' built-in plugin information modal, opened on the
     * changelog tab via thickbox (already enqueued by `enqueue_scripts`).
     *
     * @param mixed  $links Existing plugin row meta links.
     * @param string $file  Plugin file the row belongs to.
     * @return array Updated row meta links.
     */
    public function add_release_notes_link($links, $file): array
    {
    }
    /**
     * Whether WordPress has staged an available update for the given plugin file.
     *
     * @param string $file Plugin file relative path.
     * @return bool
     */
    private function has_pending_update(string $file): bool
    {
    }
    /**
     * Localized params used by the post-update changelog link.
     *
     * @return array{plugin_slug: string, view_changelog_url: string}
     */
    private function get_changelog_link_params(): array
    {
    }
    /**
     * Render the container div for the React app.
     *
     * @return void
     */
    public function render_container()
    {
    }
}
class WC_Stripe_Privacy extends \WC_Abstract_Privacy
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Register erasers and exporters.
     *
     * @return void
     */
    public function register_erasers_exporters()
    {
    }
    /**
     * Add retention settings to account tab.
     *
     * @param array $settings
     * @return array $settings Updated
     */
    public function account_settings($settings)
    {
    }
    /**
     * Returns a list of orders that are using one of Stripe's payment methods.
     *
     * @param string $email_address
     * @param int    $page
     *
     * @return array WP_Post
     */
    protected function get_stripe_orders($email_address, $page)
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
     * Handle exporting data for Subscriptions.
     *
     * @param string $email_address E-mail address to export.
     * @param int    $page          Pagination of data.
     *
     * @return array
     */
    public function subscriptions_data_exporter($email_address, $page = 1)
    {
    }
    /**
     * Finds and exports customer data by email address.
     *
     * @param string $email_address The user email address.
     * @param int    $page  Page.
     * @return array An array of personal data in name value pairs
     */
    public function customer_data_exporter($email_address, $page)
    {
    }
    /**
     * Finds and erases customer data by email address.
     *
     * @param string $email_address The user email address.
     * @param int    $page  Page.
     * @return array An array of personal data in name value pairs
     */
    public function customer_data_eraser($email_address, $page)
    {
    }
    /**
     * Finds and erases order data by email address.
     *
     * @param string $email_address The user email address.
     * @param int    $page  Page.
     * @return array An array of personal data in name value pairs
     */
    public function order_data_eraser($email_address, $page)
    {
    }
    /**
     * Handle eraser of data tied to Subscriptions
     *
     * @param WC_Order $order
     * @return array
     */
    protected function maybe_handle_subscription($order)
    {
    }
    /**
     * Handle eraser of data tied to Orders
     *
     * @param WC_Order $order
     * @return array
     */
    protected function maybe_handle_order($order)
    {
    }
    /**
     * Checks if create date is passed retention duration.
     *
     * @param string $created_date The creation date to check.
     *
     * @return bool True if the retention period has expired, false otherwise.
     */
    public function is_retention_expired($created_date)
    {
    }
}
/**
 * REST controller for OC setting.
 */
class WC_Stripe_REST_OC_Setting_Toggle_Controller extends \WC_Stripe_REST_Base_Controller
{
    /**
     * Endpoint path.
     *
     * @var string
     */
    protected $rest_base = 'wc_stripe/oc_setting_toggle';
    /**
     * Stripe payment gateway.
     *
     * @var WC_Stripe_UPE_Payment_Gateway
     */
    private $gateway;
    /**
     * Constructor.
     *
     * @param WC_Stripe_UPE_Payment_Gateway $gateway Stripe payment gateway.
     */
    public function __construct(\WC_Stripe_UPE_Payment_Gateway $gateway)
    {
    }
    /**
     * Configure REST API routes.
     *
     * @return void
     */
    public function register_routes()
    {
    }
    /**
     * Retrieve the setting status.
     *
     * @return WP_REST_Response
     */
    public function get_setting()
    {
    }
    /**
     * Update the data.
     *
     * @param WP_REST_Request $request Full data about the request.
     *
     * @return WP_REST_Response
     */
    public function set_setting(\WP_REST_Request $request)
    {
    }
}
/**
 * REST controller for the legacy UPE feature flag.
 *
 * This class is fully deprecated, but is being kept in the code for backwards compatibility.
 * It will be fully removed in an upcoming release.
 *
 * @deprecated 10.2.0 UPE is generally available and this endpoint will be removed in a future release.
 */
class WC_Stripe_REST_UPE_Flag_Toggle_Controller extends \WC_Stripe_REST_Base_Controller
{
    /**
     * Endpoint path.
     *
     * @var string
     */
    protected $rest_base = 'wc_stripe/upe_flag_toggle';
    /**
     * Configure REST API routes.
     *
     * @return void
     */
    public function register_routes()
    {
    }
    /**
     * Retrieve flag status.
     *
     * @deprecated 10.2.0 UPE is generally available and this endpoint will be removed in a future release.
     *
     * @return WP_REST_Response
     */
    public function get_flag()
    {
    }
    /**
     * Deprecated no-op. Kept in the code for backwards compatibility.
     *
     * @param WP_REST_Request<array<string, mixed>> $request Full data about the request.
     *
     * @deprecated 10.2.0 UPE is generally available and this endpoint will be removed in a future release.
     *
     * @return WP_REST_Response
     */
    public function set_flag(\WP_REST_Request $request)
    {
    }
}
/**
 * Controls whether we're on the settings page and enqueues the JS code.
 *
 * @since 5.4.1
 */
class WC_Stripe_Settings_Controller
{
    /**
     * The Stripe account instance.
     *
     * @var WC_Stripe_Account
     */
    private $account;
    /**
     * The Stripe gateway instance.
     *
     * @var WC_Stripe_Payment_Gateway|null
     */
    private $gateway;
    /**
     * Constructor
     *
     * @param WC_Stripe_Account $account Stripe account
     * @param WC_Stripe_Payment_Gateway|null $gateway Stripe gateway
     */
    public function __construct(\WC_Stripe_Account $account, ?\WC_Stripe_Payment_Gateway $gateway = \null)
    {
    }
    /**
     * Fetches the Stripe gateway instance.
     */
    private function get_gateway()
    {
    }
    /**
     * This replaces the refund button with a disabled 'Refunding unavailable' button in the same place for orders that have been authorized but not captured.
     *
     * A help tooltip explains that refunds are not available for orders which have not been captured yet.
     *
     * @param WC_Order $order The order that is being viewed.
     */
    public function hide_refund_button_for_uncaptured_orders($order)
    {
    }
    /**
     * Prints the admin options for the gateway.
     * Remove this action once we're fully migrated to UPE and move the wrapper in the `admin_options` method of the UPE gateway.
     *
     * @param WC_Stripe_Payment_Gateway $gateway the Stripe gateway.
     */
    public function admin_options(\WC_Stripe_Payment_Gateway $gateway)
    {
    }
    /**
     * Determines if the payments task is completed in WooCommerce onboarding flow.
     *
     * @return bool True if the payments task is completed, false otherwise.
     */
    private function is_payments_onboarding_task_completed(): bool
    {
    }
    /**
     * AJAX handler to generate OAuth URL on-demand
     */
    public function ajax_get_oauth_url()
    {
    }
    /**
     * Load admin scripts.
     */
    public function admin_scripts($hook_suffix)
    {
    }
    /**
     * Build a URL to the WooCommerce logs page pre-filtered to the Stripe log source.
     *
     * The `source` query argument is supported by WooCommerce's logs screen for
     * both the database and file log handlers, so merchants land directly on the
     * Stripe log entries rather than the unfiltered log index.
     *
     * @since 10.7.0
     * @return string
     */
    private function get_agentic_commerce_logs_url(): string
    {
    }
    /**
     * Removes all Stripe alternative payment methods (eg Bancontact, giropay) on the WooCommerce Settings page.
     *
     * Note: This function is hooked onto `woocommerce_admin_field_payment_gateways` which is the hook used
     * to display the payment gateways on the WooCommerce Settings page.
     */
    public static function hide_gateways_on_settings_page()
    {
    }
}
/**
 * Class WC_Stripe_Subscription_Detached_Bulk_Action
 */
class WC_Stripe_Subscription_Detached_Bulk_Action
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Add custom bulk action to check for detachment of subscriptions' payment methods.
     *
     * @param array $bulk_actions An associative array of actions which can be performed on the subscription post type.
     * @return array
     */
    public function subscriptions_bulk_actions($bulk_actions)
    {
    }
    /**
     * Handle the custom bulk action to check for detachment of subscriptions' payment methods.
     *
     * @param string $redirect_url The URL to redirect to after the action is performed.
     * @param string $action The action being performed.
     * @param array $post_ids The IDs of the posts being acted upon.
     * @return string
     */
    public function handle_subscription_detachment_check($redirect_url, $action, $post_ids)
    {
    }
}
/**
 * Controls the UPE compatibility before we release UPE - adds some notices for the merchant if necessary.
 *
 * @since 5.5.0
 */
class WC_Stripe_UPE_Compatibility_Controller
{
    public function __construct()
    {
    }
    /**
     * I created this as a separate method, so it can be mocked in unit tests.
     *
     * @return string
     */
    public function get_wc_version()
    {
    }
    /**
     * Adds a compatibility notice in the `wp-admin` area in case the version of WooCommerce or WordPress are (or will be) not supported.
     *
     * @return void
     */
    public function add_compatibility_notice()
    {
    }
    /**
     * Get the installed versions message for unsatisfied requirements.
     *
     * @param array $unsatisfied_requirements The unsatisfied requirements.
     *
     * @return string The installed versions message.
     */
    private function get_installed_versions_message($unsatisfied_requirements)
    {
    }
    /**
     * Get the unsatisfied requirements message.
     *
     * @param array $unsatisfied_requirements The unsatisfied requirements.
     *
     * @return string The unsatisfied requirements message.
     */
    private function get_unsatisfied_requirements_message($unsatisfied_requirements)
    {
    }
    /**
     * Show the current compatibility notice.
     *
     * @param array $unsatisfied_requirements The unsatisfied requirements.
     *
     * @return void
     */
    private function show_current_compatibility_notice(array $unsatisfied_requirements)
    {
    }
}
/**
 * Provides typed access to Stripe checkout session data.
 *
 * The Stripe API returns untyped objects from json_decode(). This class
 * wraps that raw object and provides small, testable getter methods with
 * proper return types and fallback logic.
 *
 * @since 10.6.0
 */
class WC_Stripe_Agentic_Checkout_Session
{
    /**
     * The raw Stripe checkout session object.
     *
     * @var stdClass
     */
    private \stdClass $session;
    /**
     * Constructor.
     *
     * @since 10.6.0
     * @param stdClass $session The raw Stripe checkout session object.
     */
    public function __construct(\stdClass $session)
    {
    }
    /**
     * Returns the fields to expand when retrieving the checkout session.
     *
     * @since 10.6.0
     * @return array The fields to expand.
     */
    public static function get_fields_to_expand(): array
    {
    }
    /**
     * Returns the checkout session ID, or null when absent.
     *
     * @since 10.6.0
     * @return string|null
     */
    public function get_id(): ?string
    {
    }
    /**
     * Returns the session currency in uppercase, or null when absent.
     *
     * @since 10.6.0
     * @return string|null
     */
    public function get_currency(): ?string
    {
    }
    /**
     * Returns the session currency in lowercase (for Stripe metadata storage), or null when absent.
     *
     * @since 10.6.0
     * @return string|null
     */
    public function get_currency_lowercase(): ?string
    {
    }
    /**
     * Returns the total amount in the smallest currency unit, or null when absent.
     *
     * @since 10.6.0
     * @return int|null
     */
    public function get_amount_total(): ?int
    {
    }
    /**
     * Returns the aggregate discount amount in the smallest currency unit, or 0 when absent.
     *
     * @since 10.9.0
     * @return int
     */
    public function get_amount_discount(): int
    {
    }
    /**
     * Returns the customer email, falling back from customer_details to customer_email.
     * Returns null when neither source is present.
     *
     * @since 10.6.0
     * @return string|null
     */
    public function get_customer_email(): ?string
    {
    }
    /**
     * Returns the customer name, falling back to the shipping name.
     * Returns null when all sources are absent.
     *
     * @since 10.6.0
     * @return string|null
     */
    public function get_customer_name(): ?string
    {
    }
    /**
     * Returns the billing phone number, or null when absent.
     *
     * @since 10.6.0
     * @return string|null
     */
    public function get_billing_phone(): ?string
    {
    }
    /**
     * Returns the billing address object.
     *
     * @since 10.6.0
     * @return WC_Stripe_API_Address
     */
    public function get_billing_address(): \WC_Stripe_API_Address
    {
    }
    /**
     * Returns the resolved shipping details.
     *
     * Falls back from top-level shipping_details to
     * collected_information.shipping_details.
     *
     * @since 10.6.0
     * @return object|null
     */
    public function get_shipping_details(): ?object
    {
    }
    /**
     * Returns the shipping recipient name, or null when absent.
     *
     * @since 10.6.0
     * @return string|null
     */
    public function get_shipping_name(): ?string
    {
    }
    /**
     * Returns the shipping phone, falling back to the billing phone.
     * Returns null when both are absent.
     *
     * @since 10.6.0
     * @return string|null
     */
    public function get_shipping_phone(): ?string
    {
    }
    /**
     * Returns the shipping address object.
     *
     * @since 10.6.0
     * @return WC_Stripe_API_Address|null
     */
    public function get_shipping_address(): ?\WC_Stripe_API_Address
    {
    }
    /**
     * Returns the line items array.
     *
     * @since 10.6.0
     * @return WC_Stripe_Agentic_Line_Item[]
     */
    public function get_line_items(): array
    {
    }
    /**
     * Returns the expanded payment intent ID, or null when absent.
     *
     * @since 10.6.0
     * @return string|null
     */
    public function get_payment_intent_id(): ?string
    {
    }
    /**
     * Returns the Stripe customer ID, or null when absent.
     *
     * Handles both a plain string customer ID and an expanded customer object.
     *
     * @since 10.6.0
     * @return string|null
     */
    public function get_customer_id(): ?string
    {
    }
    /**
     * Returns the WooCommerce rate ID from the chosen Stripe shipping rate metadata.
     *
     * @since 10.6.0
     * @return string|null
     */
    public function get_chosen_shipping_rate_wc_id(): ?string
    {
    }
    /**
     * Returns the display name of the chosen Stripe shipping rate.
     *
     * @since 10.6.0
     * @return string|null
     */
    public function get_chosen_shipping_rate_display_name(): ?string
    {
    }
    /**
     * Returns the shipping amount in the smallest currency unit, or null when absent.
     *
     * @since 10.6.0
     * @return int|null
     */
    public function get_shipping_amount(): ?int
    {
    }
    /**
     * Checks whether this checkout session originates from agentic commerce.
     *
     * A session is agentic when its payment intent carries an
     * agent_details.network_business_profile, which Stripe populates to
     * identify the originating agent. The webhook handler expands
     * payment_intent.agent_details on retrieve for exactly this detection.
     *
     * @since 10.6.0
     * @return bool
     */
    public function is_agentic(): bool
    {
    }
}
// CLI output is not rendered in a browser.
// phpcs:disable WordPress.Security.EscapeOutput.ExceptionNotEscaped
/**
 * Manage the Stripe Agentic Commerce product feed.
 *
 * @since 10.5.0
 */
class WC_Stripe_Agentic_Commerce_CLI extends \WP_CLI_Command
{
    /**
     * Generate the product feed and optionally push it to Stripe.
     *
     * ## OPTIONS
     *
     * [--push]
     * : Deliver the feed to Stripe after generation.
     *
     * ## EXAMPLES
     *
     *     wp stripe agentic-commerce sync
     *     wp stripe agentic-commerce sync --push
     *
     * @param array $args       Positional arguments.
     * @param array $assoc_args Associative arguments.
     * @return void
     */
    public function sync($args, $assoc_args): void
    {
    }
    /**
     * Preview what the next sync would include, exclude, and reject — without
     * generating a CSV or uploading anything to Stripe.
     *
     * ## OPTIONS
     *
     * [--limit=<number>]
     * : Maximum number of invalid products to list with their errors.
     * ---
     * default: 50
     * ---
     *
     * ## EXAMPLES
     *
     *     wp stripe agentic-commerce preview
     *     wp stripe agentic-commerce preview --limit=100
     *
     * @param array $args       Positional arguments.
     * @param array $assoc_args Associative arguments.
     * @return void
     */
    public function preview($args, $assoc_args): void
    {
    }
    /**
     * Check the status of an ImportSet.
     *
     * ## OPTIONS
     *
     * <import_set_id>
     * : The ImportSet ID (e.g. impset_test_...).
     *
     * ## EXAMPLES
     *
     *     wp stripe agentic-commerce status impset_test_abc123
     *
     * @param array $args       Positional arguments.
     * @param array $assoc_args Associative arguments.
     * @return void
     */
    public function status($args, $assoc_args): void
    {
    }
    /**
     * Fetch and display the error report for an ImportSet.
     *
     * ## OPTIONS
     *
     * <import_set_id>
     * : The ImportSet ID (e.g. impset_test_...).
     *
     * [--limit=<number>]
     * : Maximum number of error rows to display.
     * ---
     * default: 10
     * ---
     *
     * ## EXAMPLES
     *
     *     wp stripe agentic-commerce errors impset_test_abc123
     *     wp stripe agentic-commerce errors impset_test_abc123 --limit=50
     *
     * @param array $args       Positional arguments.
     * @param array $assoc_args Associative arguments.
     * @return void
     */
    public function errors($args, $assoc_args): void
    {
    }
    /**
     * Get a configured delivery instance.
     *
     * @return WC_Stripe_Agentic_Commerce_Files_Api_Delivery
     */
    private function get_delivery(): \WC_Stripe_Agentic_Commerce_Files_Api_Delivery
    {
    }
}
// This file works directly with local files for streaming CSV writes. That's fine.
// phpcs:disable WordPress.WP.AlternativeFunctions
/**
 * Streaming CSV feed generator for Stripe's Agentic Commerce.
 *
 * Implements WooCommerce's Product Catalog FeedInterface. Handles large catalogs (100k+ products)
 * via streaming writes to temporary files. See README.md for detailed documentation.
 *
 * @since 10.5.0
 */
class WC_Stripe_Agentic_Commerce_Csv_Feed implements \Automattic\WooCommerce\Internal\ProductFeed\Feed\FeedInterface
{
    /**
     * The base name of the feed file.
     *
     * @var string
     */
    private $base_name;
    /**
     * CSV column headers.
     *
     * @var array
     */
    private $headers = [];
    /**
     * File handle for streaming writes.
     *
     * @var resource|false|null
     */
    private $file_handle = \null;
    /**
     * The name of the feed file, no directory.
     *
     * @var string|null
     */
    private $file_name = \null;
    /**
     * Path to CSV file.
     *
     * @var string|null
     */
    private $file_path = \null;
    /**
     * Number of entries written to feed.
     *
     * @var int
     */
    private $entry_count = 0;
    /**
     * Whether feed generation has started.
     *
     * @var bool
     */
    private $started = \false;
    /**
     * Whether feed has been finalized.
     *
     * @var bool
     */
    private $finalized = \false;
    /**
     * Constructor.
     *
     * @since 10.5.0
     * @param string $base_name The base name of the feed file.
     */
    public function __construct(string $base_name)
    {
    }
    /**
     * Set CSV column headers.
     *
     * @since 10.5.0
     * @param array $headers CSV column headers.
     * @return self
     */
    public function set_columns(array $headers): self
    {
    }
    /**
     * Get the upload directory for the feed.
     *
     * Creates directory with security files if needed.
     * Pattern: wp-content/uploads/stripe-product-feeds/
     *
     * @since 10.5.0
     * @return array {
     *     The upload directory for the feed. Both fields end with the right trailing slash.
     *
     *     @type string $path The path to the upload directory.
     *     @type string $url The URL to the upload directory.
     * }
     * @throws Exception If the upload directory cannot be created.
     */
    private function get_upload_dir(): array
    {
    }
    /**
     * Start feed generation.
     *
     * Creates file in temp directory, opens file handle, writes UTF-8 BOM and headers.
     *
     * @since 10.5.0
     * @throws Exception If feed generation cannot be started.
     * @return void
     */
    public function start(): void
    {
    }
    /**
     * Add entry to feed.
     *
     * Sanitizes data, writes to file via fputcsv, and logs progress.
     *
     * @since 10.5.0
     * @param array $entry Entry data (should match header count).
     * @throws Exception If entry cannot be added.
     * @return void
     */
    public function add_entry(array $entry): void
    {
    }
    /**
     * Sanitize entry data for CSV output.
     *
     * Handles scalar values (strings, numbers, booleans, null) and ensures proper formatting
     * for Stripe's product catalog specification.
     *
     * Note: Arrays and objects are not supported. Callers must format complex data themselves
     * according to Stripe's specification (e.g., "url1,url2,url3" for multiple values,
     * "US:CA:Express:1-2:12.99 USD" for structured data, "15.00 USD" for prices).
     *
     * @since 10.5.0
     * @param array $entry Raw entry data (must contain only scalar values or null).
     * @throws Exception If entry contains arrays or objects.
     * @return array Sanitized entry data.
     */
    private function sanitize_entry(array $entry)
    {
    }
    /**
     * Sanitize a single value for CSV output.
     *
     * @since 10.5.0
     * @param mixed  $value The value to sanitize.
     * @param string $key   The column key (for error messages).
     * @throws Exception If value is not a scalar or null.
     * @return string The sanitized value.
     */
    private function sanitize_value($value, string $key): string
    {
    }
    /**
     * Finalize feed generation.
     *
     * Closes file handle and marks feed as complete.
     *
     * @since 10.5.0
     * @return void
     */
    public function end(): void
    {
    }
    /**
     * Get the number of entries written to the feed.
     *
     * This reflects the rows actually persisted to the CSV, so it matches
     * what is delivered to Stripe — unlike the ProductWalker's iterated count,
     * which includes rows dropped by the validator.
     *
     * @since 10.7.0
     * @return int Number of CSV rows written (excluding the header row).
     */
    public function get_entry_count(): int
    {
    }
    /**
     * Get file system path to finalized feed.
     *
     * @since 10.5.0
     * @return string|null Absolute file path, or null if not finalized.
     */
    public function get_file_path(): ?string
    {
    }
    /**
     * Get public URL to finalized feed.
     *
     * Moves file from temp directory to uploads directory if needed.
     *
     * @since 10.5.0
     * @throws Exception Stripe's feeds can only be pushed, the URL is not available.
     * @return string|null Public URL, or null if not finalized.
     */
    public function get_file_url(): ?string
    {
    }
    /**
     * Clean up temporary files and resources.
     *
     * Used for cleanup upon errors and unfinished feeds.
     *
     * @since 10.5.0
     */
    private function cleanup(): void
    {
    }
}
/**
 * Builds the merchant-facing feed preview by running the same mapper + validator
 * pipeline the sync uses, without writing a CSV or uploading anything to Stripe.
 *
 * @since 10.9.0
 */
class WC_Stripe_Agentic_Commerce_Feed_Preview
{
    /**
     * Products loaded per page while walking the catalog. Matches the
     * ProductWalker default so the preview streams in bounded batches rather
     * than buffering the whole catalog — the same memory contract the sync
     * walker honours.
     *
     * @var int
     * @since 10.9.0
     */
    private const PER_PAGE = 100;
    /**
     * Default cap on the number of invalid products returned with full detail.
     * Failures beyond the cap are summed into the `truncated` count so the
     * response stays bounded regardless of catalog size.
     *
     * @var int
     * @since 10.9.0
     */
    public const DEFAULT_DETAIL_LIMIT = 50;
    /**
     * Default cap on the number of products the preview walks.
     *
     * The preview runs synchronously inside a single REST request (the merchant
     * clicks "Preview feed" and waits), unlike the real sync which streams the
     * full catalog in background batches under a scheduled action. Walking an
     * unbounded catalog one-shot would blow past `max_execution_time` and 504 on
     * large stores, so the scan stops at this many products and flags the result
     * as partial via `scan_limited`.
     *
     * @var int
     * @since 10.9.0
     */
    public const DEFAULT_SCAN_LIMIT = 2000;
    /**
     * Integration whose query args, mapper, and validator drive the preview.
     *
     * @var WC_Stripe_Agentic_Commerce_Integration
     */
    private \WC_Stripe_Agentic_Commerce_Integration $integration;
    /**
     * Constructor.
     *
     * @since 10.9.0
     * @param WC_Stripe_Agentic_Commerce_Integration|null $integration Optional integration instance; one is created when omitted.
     */
    public function __construct(?\WC_Stripe_Agentic_Commerce_Integration $integration = \null)
    {
    }
    /**
     * Walk the catalog and summarise what the next sync would include, exclude,
     * and reject.
     *
     * The walk mirrors {@see \Automattic\WooCommerce\Internal\ProductFeed\Feed\ProductWalker::from_integration()}
     * — same base query args and `woocommerce_product_feed_args` filter — plus
     * standalone subscription products, which the sync drops at the query but the
     * preview reports as excluded so the catalog count is explained. Nothing is
     * written or uploaded.
     *
     * @since 10.9.0
     * @param int $detail_limit Maximum number of invalid products to return with full detail.
     * @param int $scan_limit   Maximum number of products to walk before stopping; the
     *                          result is flagged `scan_limited` when the cap is hit.
     * @return array{
     *     total_count: int,
     *     included_count: int,
     *     excluded_count: int,
     *     excluded_breakdown: array{subscriptions:int, filtered:int},
     *     invalid_count: int,
     *     validation_errors: array<int, array{product_id:int, product_name:string, edit_link:string, errors:string[]}>,
     *     truncated: int,
     *     scan_limited: bool
     * }
     */
    public function generate(int $detail_limit = self::DEFAULT_DETAIL_LIMIT, int $scan_limit = self::DEFAULT_SCAN_LIMIT): array
    {
    }
    /**
     * Append a product's validation failure to the detail list, or bump the
     * truncated count once the detail cap is reached.
     *
     * @since 10.9.0
     * @param array       $validation_errors Detail list, modified in place.
     * @param int         $truncated         Overflow counter, modified in place.
     * @param int         $detail_limit      Maximum number of detailed entries to retain.
     * @param \WC_Product $product           Product that failed.
     * @param string[]    $errors            Validation messages for the product.
     * @return void
     */
    private function collect_error(array &$validation_errors, int &$truncated, int $detail_limit, \WC_Product $product, array $errors): void
    {
    }
}
/**
 * Stripe Agentic Commerce Product Feed Schema Definition
 *
 * Based on https://docs.stripe.com/agentic-commerce/product-catalog
 *
 * @since 10.5.0
 */
class WC_Stripe_Agentic_Commerce_Feed_Schema
{
    /**
     * Cached schema to avoid rebuilding on every call.
     *
     * @var array|null
     */
    private static ?array $cached_schema = \null;
    /**
     * Get the complete feed schema definition (cached).
     *
     * @since 10.5.0
     * @return array Complete schema configuration.
     */
    public static function get_schema(): array
    {
    }
    /**
     * Get field configuration.
     *
     * @since 10.5.0
     * @param string $field Field name.
     * @return array|null Field configuration or null if not found.
     */
    public static function get_field(string $field): ?array
    {
    }
    /**
     * Check if field is required.
     *
     * Handles both absolute requirements and conditional requirements.
     *
     * @since 10.5.0
     * @param string $field Field name to check.
     * @param array  $data  Product data for conditional checks. Not modified, passed by reference.
     * @return bool True if field is required, false otherwise.
     */
    public static function is_field_required(string $field, array &$data = []): bool
    {
    }
    /**
     * Get CSV column headers in correct order.
     *
     * Order matters for CSV output consistency.
     *
     * @since 10.5.0
     * @return array CSV column headers.
     */
    public static function get_csv_headers(): array
    {
    }
    /**
     * Get required fields list.
     *
     * @since 10.5.0
     * @return array List of absolutely required field names.
     */
    public static function get_required_fields(): array
    {
    }
    /**
     * Get conditionally required fields list.
     *
     * @since 10.5.0
     * @return array List of conditionally required field names.
     */
    public static function get_conditionally_required_fields(): array
    {
    }
}
/**
 * Validates product feed entries for Stripe Agentic Commerce.
 *
 * Ensures product data meets Stripe's requirements and format specifications.
 *
 * @since 10.5.0
 */
class WC_Stripe_Agentic_Commerce_Feed_Validator implements \Automattic\WooCommerce\Internal\ProductFeed\Feed\FeedValidatorInterface
{
    /**
     * Variant attributes that must be consistent within an item group.
     *
     * Per Stripe spec, all variants in an item_group_id must use the same attribute set.
     */
    private const VARIANT_ATTRIBUTES = ['color', 'size', 'material', 'gender', 'size_system'];
    /**
     * Cap on the number of failing products retained in detail by
     * {@see self::$collected_errors}. Anything past the cap is counted in
     * {@see self::$overflow_count} so the eventual log entry stays bounded
     * regardless of catalog size.
     */
    protected const MAX_COLLECTED_ERRORS = 50;
    /**
     * Stripe feed schema definition.
     *
     * @var array
     */
    protected array $schema;
    /**
     * Tracks which variant attributes are used per item_group_id.
     *
     * Maps item_group_id => list of attribute names that are non-empty.
     *
     * @var array<string, string[]>
     */
    protected array $variant_attribute_sets = [];
    /**
     * Per-product validation failures accumulated during this validator's
     * lifetime. Maps product_id => list of error messages. Capped at
     * {@see self::MAX_COLLECTED_ERRORS}; subsequent failures bump
     * {@see self::$overflow_count} instead.
     *
     * @var array<int, string[]>
     */
    protected array $collected_errors = [];
    /**
     * Number of additional products with validation failures beyond
     * {@see self::MAX_COLLECTED_ERRORS} — used to expose a "+ N truncated"
     * trailer to the caller without keeping the full payload.
     *
     * @var int
     */
    protected int $overflow_count = 0;
    /**
     * Products dropped by the visibility filter, not by validation. The caller
     * subtracts this from the skip total so exclusions don't log as failures or
     * trigger "Partial success".
     *
     * @since 10.8.0
     * @var int
     */
    protected int $excluded_count = 0;
    /**
     * Non-empty return from {@see self::validate_entry()} for an excluded product,
     * so the walker drops the row without recording it as a validation error.
     *
     * @since 10.8.0
     */
    private const EXCLUDED_SENTINEL = '__excluded_by_filter__';
    /**
     * Initialize validator with schema.
     *
     * @since 10.5.0
     */
    public function __construct()
    {
    }
    /**
     * Validate product feed entry.
     *
     * @since 10.5.0
     * @param array       $row     Product data row to validate.
     * @param \WC_Product $product Product object for context.
     * @return array Array of validation error messages (empty if valid).
     */
    public function validate_entry(array $row, \WC_Product $product): array
    {
    }
    /**
     * Return the per-product validation failures accumulated by this
     * validator. Intended for the caller (the integration) to log once at
     * the end of a sync, rather than the validator logging per-row.
     *
     * @since 10.7.0
     * @return array{products: array<int, string[]>, truncated: int}
     */
    public function get_collected_errors(): array
    {
    }
    /**
     * Count of products dropped by the visibility filter this run.
     *
     * @since 10.8.0
     * @return int
     */
    public function get_excluded_count(): int
    {
    }
    /**
     * Validate required fields are present.
     *
     * @since 10.5.0
     * @param array $row Product data row.
     * @return array Validation errors.
     */
    protected function validate_required_fields(array $row): array
    {
    }
    /**
     * Validate conditionally required fields.
     *
     * @since 10.5.0
     * @param array $row Product data row.
     * @return array Validation errors.
     */
    protected function validate_conditional_requirements(array $row): array
    {
    }
    /**
     * Validate field formats.
     *
     * @since 10.5.0
     * @param array $row Product data row.
     * @return array Validation errors.
     */
    protected function validate_field_formats(array $row): array
    {
    }
    /**
     * Validate business rules.
     *
     * @since 10.5.0
     * @param array       $row     Product data row.
     * @param \WC_Product $product Product object.
     * @return array Validation errors.
     */
    protected function validate_business_rules(array $row, \WC_Product $product): array
    {
    }
    /**
     * Validate variant attribute consistency within item groups.
     *
     * Per Stripe spec, all variants sharing an item_group_id must use
     * the same set of variant-distinguishing attributes.
     *
     * @since 10.5.0
     * @param array $row Product data row.
     * @return array Validation errors.
     */
    protected function validate_variant_consistency(array $row): array
    {
    }
}
// This file uses cURL for multipart file uploads to Stripe's Files API.
// phpcs:disable WordPress.WP.AlternativeFunctions
/**
 * Stripe Files API Delivery Method
 *
 * Uploads CSV product feeds to Stripe's Files API, then creates an ImportSet
 * via the Data Management API to trigger processing.
 *
 * @since 10.5.0
 */
class WC_Stripe_Agentic_Commerce_Files_Api_Delivery
{
    /**
     * Stripe Files API endpoint.
     *
     * @var string
     */
    public const FILES_API_ENDPOINT = 'https://files.stripe.com/v1/files';
    /**
     * Stripe Data Management API endpoint.
     *
     * @var string
     */
    public const IMPORT_SETS_ENDPOINT = 'https://api.stripe.com/v1/data_management/import_sets';
    /**
     * Stripe Files API content endpoint.
     *
     * @var string
     */
    public const FILES_CONTENT_ENDPOINT = 'https://files.stripe.com/v1/files/';
    /**
     * Stripe API version for Data Management (preview).
     * Remove udap_beta=v1 suffix once Data Management API is out of beta.
     *
     * @var string
     */
    public const API_VERSION = '2026-03-25.dahlia;udap_beta=v1';
    /**
     * Stripe secret key.
     *
     * @var string
     */
    private string $secret_key;
    /**
     * Stripe account ID (optional, for connected accounts).
     *
     * @var string
     */
    private string $account_id;
    /**
     * Initialize delivery method.
     *
     * @since 10.5.0
     * @param string $secret_key Stripe secret key.
     * @param string $account_id Stripe account ID (optional).
     */
    public function __construct(string $secret_key, string $account_id = '')
    {
    }
    /**
     * Check if delivery method is properly configured.
     *
     * @since 10.5.0
     * @return bool True if configured, false otherwise.
     */
    public function check_setup(): bool
    {
    }
    /**
     * Upload feed to Stripe Files API and create ImportSet.
     *
     * @since 10.5.0
     * @param \Automattic\WooCommerce\Internal\ProductFeed\Feed\FeedInterface $feed The feed to deliver.
     * @return array {
     *     Response with file and import set details.
     *
     *     @type string $file_id       Stripe file ID (e.g. "file_...").
     *     @type string $import_set_id ImportSet ID.
     *     @type string $status        ImportSet status.
     * }
     * @throws Exception If upload or ImportSet creation fails.
     */
    public function deliver(\Automattic\WooCommerce\Internal\ProductFeed\Feed\FeedInterface $feed): array
    {
    }
    /**
     * Upload an inventory feed to Stripe Files API and create an inventory_feed ImportSet.
     *
     * Uses the same two-step upload as deliver(), but creates the ImportSet with the
     * 'inventory_feed' standard_data_format for incremental stock quantity updates.
     *
     * @since 10.6.0
     * @param \Automattic\WooCommerce\Internal\ProductFeed\Feed\FeedInterface $feed The finalized inventory feed to deliver.
     * @return array {
     *     Response with file and import set details.
     *
     *     @type string $file_id       Stripe file ID (e.g. "file_...").
     *     @type string $import_set_id ImportSet ID.
     *     @type string $status        ImportSet status.
     * }
     * @throws Exception If upload or ImportSet creation fails.
     */
    public function deliver_inventory_feed(\Automattic\WooCommerce\Internal\ProductFeed\Feed\FeedInterface $feed): array
    {
    }
    /**
     * Upload a feed file to Stripe Files API and create an ImportSet.
     *
     * Shared implementation for deliver() and deliver_inventory_feed().
     *
     * @since 10.6.0
     * @param \Automattic\WooCommerce\Internal\ProductFeed\Feed\FeedInterface $feed                 The feed to deliver.
     * @param string        $standard_data_format The ImportSet standard_data_format value.
     * @param string        $log_prefix           Label used in log messages (e.g. "Product catalog", "Inventory").
     * @return array {
     *     @type string $file_id       Stripe file ID.
     *     @type string $import_set_id ImportSet ID.
     *     @type string $status        ImportSet status.
     * }
     * @throws Exception If upload or ImportSet creation fails.
     */
    private function upload_and_import(\Automattic\WooCommerce\Internal\ProductFeed\Feed\FeedInterface $feed, string $standard_data_format, string $log_prefix): array
    {
    }
    /**
     * Upload a file to Stripe's Files API using cURL multipart/form-data.
     *
     * @since 10.5.0
     * @param string $file_path Absolute path to the CSV file.
     * @return array Decoded JSON response from Stripe.
     * @throws Exception If the upload fails.
     */
    private function upload_to_files_api(string $file_path): array
    {
    }
    /**
     * Create an ImportSet via the Data Management API.
     *
     * @since 10.5.0
     * @param string $file_id            Stripe file ID from the Files API upload.
     * @param string $standard_data_format Format type (e.g. "product_catalog_feed").
     * @return array Decoded JSON response from Stripe.
     * @throws Exception If the request fails.
     */
    private function create_import_set(string $file_id, string $standard_data_format): array
    {
    }
    /**
     * Get the full ImportSet object including status, result, and errors.
     *
     * @since 10.5.0
     * @param string $import_set_id ImportSet ID.
     * @return array {
     *     Full ImportSet response from Stripe.
     *
     *     @type string $id            ImportSet ID.
     *     @type string $status        pending, failed, succeeded, succeeded_with_errors, pending_archive, archived.
     *     @type string $failed_reason Failure reason if status is "failed".
     *     @type array  $result {
     *         @type array $errors             Error file details (file ID + row_count).
     *         @type int   $objects_created     Number of objects created.
     *         @type int   $rows_processed      Number of rows processed.
     *         @type array $skipped_by_filter   Skipped rows details.
     *         @type array $skipped_duplicates  Duplicate rows details.
     *         @type array $successes           Success details (row_count).
     *     }
     * }
     * @throws Exception If the request fails.
     */
    public function get_import_set(string $import_set_id): array
    {
    }
    /**
     * Get the error report for an ImportSet.
     *
     * Downloads and parses the error CSV from Stripe when an ImportSet
     * has status "succeeded_with_errors" or "failed".
     *
     * @since 10.5.0
     * @param array $import_set Full ImportSet response from get_import_set().
     * @return array {
     *     Parsed error report.
     *
     *     @type int    $error_count Number of errored rows.
     *     @type array  $headers     CSV column headers.
     *     @type array  $rows        Array of associative arrays (header => value) for each error row.
     * }
     * @throws Exception If no error file is available or download fails.
     */
    public function get_error_report(array $import_set): array
    {
    }
    /**
     * Extract error message from a Stripe API response body.
     *
     * Parses the JSON error object and returns only the error message,
     * avoiding leaking raw response data into logs or exceptions.
     *
     * @param string $body Raw response body.
     * @return string Extracted error message or 'Unknown error'.
     */
    private function parse_stripe_error(string $body): string
    {
    }
    /**
     * Get common headers for Data Management API requests.
     *
     * @since 10.5.0
     * @return array Headers array for wp_remote_* functions.
     */
    private function get_common_headers(): array
    {
    }
}
/**
 * Stripe Agentic Commerce Product Feed Integration
 *
 * @since 10.5.0
 */
class WC_Stripe_Agentic_Commerce_Integration implements \Automattic\WooCommerce\Internal\ProductFeed\Integrations\IntegrationInterface
{
    /**
     * Integration ID.
     *
     * @var string
     */
    public const ID = 'stripe-agentic-commerce';
    /**
     * Action Scheduler hook name.
     *
     * @var string
     */
    public const SCHEDULED_ACTION = 'wc_stripe_agentic_commerce_sync_feed';
    /**
     * Action Scheduler hook for an immediate, one-off full resync. Kept distinct
     * from {@see self::SCHEDULED_ACTION} — the recurring action is always pending,
     * so sharing it would make `as_has_scheduled_action()` drop every immediate resync.
     *
     * @var string
     * @since 10.8.0
     */
    protected const IMMEDIATE_SYNC_ACTION = 'wc_stripe_agentic_commerce_sync_feed_now';
    /**
     * Option name to track whether the sync is scheduled.
     *
     * @var string
     * @since 10.5.0
     */
    public const SCHEDULED_OPTION = 'wc_stripe_agentic_commerce_feed_sync_scheduled';
    /**
     * Option key for the merchant-facing enabled toggle.
     *
     * Distinct from the developer feature flag. This is the value the merchant
     * controls via the Agentic Commerce settings UI.
     *
     * @var string
     * @since 10.6.0
     */
    public const ENABLED_OPTION = 'wc_stripe_agentic_commerce_enabled';
    /**
     * Option key for the store-wide checkout mode. `yes` emits
     * `disable_checkout=true` for every product so agents redirect to the store.
     *
     * @var string
     * @since 10.9.0
     */
    public const DISABLE_CHECKOUT_OPTION = 'wc_stripe_agentic_commerce_disable_checkout';
    /**
     * Option key storing the content hash, upload timestamp, and Stripe file id
     * of the most recent successful full-catalog upload. Used to skip the Stripe
     * Files API upload when the regenerated catalog is byte-identical to the
     * previously uploaded one.
     *
     * @var string
     * @since 10.8.0
     */
    private const LAST_UPLOAD_OPTION = 'wc_stripe_agentic_commerce_last_feed_upload';
    /**
     * Maximum age (in seconds) before a cached feed upload is considered stale
     * and the next sync uploads even if the content hash matches. Guards against
     * Stripe-side file expiration and against bugs in our hashing logic.
     *
     * Override via the `wc_stripe_agentic_commerce_feed_cache_ttl` filter.
     *
     * @var int
     * @since 10.8.0
     */
    private const FEED_CACHE_TTL = \WEEK_IN_SECONDS;
    /**
     * Option key for the Agentic Commerce webhook secret.
     *
     * Lives on the integration class (not the REST controller) because this
     * value is read on every webhook delivery via the
     * `woocommerce_api_wc_stripe` hook, which does not trigger
     * `rest_api_init`. Keeping the const here ensures it is always reachable
     * — the integration class is in the Composer autoload classmap — even
     * when the REST controller has not been instantiated.
     *
     * @var string
     * @since 10.7.0
     */
    public const WEBHOOK_SECRET_OPTION = 'wc_stripe_agentic_commerce_webhook_secret';
    /**
     * Sync interval in seconds.
     *
     * @var int
     */
    public const SYNC_INTERVAL = 15 * \MINUTE_IN_SECONDS;
    /**
     * Option key for the last sync result.
     *
     * @internal Not part of the public API. Use {@see self::get_last_sync()}
     *           rather than reading the underlying option directly.
     * @var string
     * @since 10.7.0
     */
    public const LAST_SYNC_OPTION = 'wc_stripe_agentic_last_sync';
    /**
     * Option key for the sync history.
     *
     * @internal Not part of the public API. Use {@see self::get_sync_history()}
     *           rather than reading the underlying option directly.
     * @var string
     * @since 10.7.0
     */
    public const SYNC_HISTORY_OPTION = 'wc_stripe_agentic_sync_history';
    /**
     * Default maximum number of sync history entries to retain.
     *
     * Filterable via `wc_stripe_agentic_commerce_sync_history_limit`.
     *
     * @var int
     * @since 10.7.0
     */
    public const SYNC_HISTORY_LIMIT = 50;
    /**
     * Cached validator instance for the current sync, so the walker (via
     * {@see ProductWalker::from_integration()}) and the post-walk caller in
     * {@see self::sync_feed()} share state — specifically, the validator's
     * accumulated per-product failures. Reset to null at the start of each
     * sync_feed() call so successive syncs in the same request don't pool
     * errors across runs.
     *
     * @var \Automattic\WooCommerce\Internal\ProductFeed\Feed\FeedValidatorInterface|null
     */
    protected ?\Automattic\WooCommerce\Internal\ProductFeed\Feed\FeedValidatorInterface $feed_validator = \null;
    /**
     * Get integration ID.
     *
     * @since 10.5.0
     * @return string Integration identifier.
     */
    public function get_id(): string
    {
    }
    /**
     * Register WordPress hooks.
     *
     * @since 10.5.0
     * @return void
     */
    public function register_hooks(): void
    {
    }
    /**
     * Enqueue an immediate full-feed sync unless one is already queued.
     *
     * Idempotent against other immediate resyncs only, so adapters can call it on
     * every visibility-setting save. It does NOT dedupe against the recurring
     * {@see self::SCHEDULED_ACTION}, which would otherwise leave the catalog stale
     * until the next cron tick.
     *
     * @since 10.8.0
     * @return void
     */
    public function schedule_full_resync_now(): void
    {
    }
    /**
     * Cancel any pending immediate resync. A just-run full sync already reflects
     * current visibility, so a queued {@see self::IMMEDIATE_SYNC_ACTION} would only
     * repeat the work; the manual sync's reschedule doesn't touch it, so clear it
     * explicitly. Idempotent.
     *
     * @since 10.8.0
     * @return void
     */
    public function cancel_pending_full_resync(): void
    {
    }
    /**
     * Adds the agentic `created_via` value to the WooCommerce allowlist so that
     * `WC_Order::payment_complete()` (WC 10.8+) does not block agentic orders.
     *
     * @param array $allowed Existing allowlist passed by the filter.
     * @return array
     */
    public function allow_agentic_payment_complete($allowed): array
    {
    }
    /**
     * Activate integration - schedule recurring sync.
     *
     * @since 10.5.0
     * @return void
     */
    public function activate(): void
    {
    }
    /**
     * Deactivate integration - cancel scheduled sync.
     *
     * @since 10.5.0
     * @return void
     */
    public function deactivate(): void
    {
    }
    /**
     * Schedule the recurring feed sync.
     *
     * @since 10.9.0
     * @param int|null $start_time The timestamp to start the sync. Defaults to the current time when null is supplied.
     * @return bool True if the sync was scheduled, false otherwise.
     */
    public function schedule_recurring_feed_sync(?int $start_time = \null): bool
    {
    }
    /**
     * Check if the integration can schedule a recurring feed sync.
     *
     * @return bool True if the integration can schedule a recurring feed sync, false otherwise.
     */
    private function can_schedule_recurring_feed_sync(): bool
    {
    }
    /**
     * Reschedule the next feed sync.
     *
     * @since 10.9.0
     * @param int|null $start_time The start timestamp to use when computing the next sync time. Defaults to the current item time.
     * @return bool True if the sync was rescheduled, false otherwise.
     */
    public function reschedule_next_feed_sync(?int $start_time = \null): bool
    {
    }
    /**
     * Get the feed sync interval in seconds.
     *
     * @since 10.9.0
     * @return int Feed sync interval in seconds.
     */
    public function get_feed_sync_interval(): int
    {
    }
    /**
     * Get product feed query arguments.
     *
     * Constructs the `wc_get_products()` argument set passed to the walker.
     * When a {@see WC_Stripe_Agentic_Commerce_Product_Filter} has been
     * configured (via stored options or the
     * `wc_stripe_agentic_commerce_product_filter` filter), the query arguments
     * are built from those criteria.
     * Those parameters can then be modified via the `wc_stripe_agentic_commerce_product_query_args` filter.
     *
     * @since 10.5.0
     * @return array WP_Query arguments for product selection.
     */
    public function get_product_feed_query_args(): array
    {
    }
    /**
     * Create feed instance.
     *
     * @since 10.5.0
     * @return \Automattic\WooCommerce\Internal\ProductFeed\Feed\FeedInterface CSV feed instance.
     */
    public function create_feed(): \Automattic\WooCommerce\Internal\ProductFeed\Feed\FeedInterface
    {
    }
    /**
     * Get product mapper instance.
     *
     * @since 10.5.0
     * @return \Automattic\WooCommerce\Internal\ProductFeed\Feed\ProductMapperInterface Product mapper instance.
     */
    public function get_product_mapper(): \Automattic\WooCommerce\Internal\ProductFeed\Feed\ProductMapperInterface
    {
    }
    /**
     * Get feed validator instance.
     *
     * @since 10.5.0
     * @return \Automattic\WooCommerce\Internal\ProductFeed\Feed\FeedValidatorInterface Feed validator instance.
     */
    public function get_feed_validator(): \Automattic\WooCommerce\Internal\ProductFeed\Feed\FeedValidatorInterface
    {
    }
    /**
     * Get push delivery method for uploading to Stripe.
     *
     * @since 10.5.0
     * @return WC_Stripe_Agentic_Commerce_Files_Api_Delivery Stripe Files API delivery method.
     */
    public function get_push_delivery_method(): \WC_Stripe_Agentic_Commerce_Files_Api_Delivery
    {
    }
    /**
     * Check if integration is enabled.
     *
     * @since 10.5.0
     * @return bool True if enabled, false otherwise.
     */
    public function is_enabled(): bool
    {
    }
    /**
     * Check if the merchant has enabled Agentic Commerce via the settings UI.
     *
     * This is distinct from the developer feature flag. Both must be true for the
     * integration to be fully active.
     *
     * @since 10.6.0
     * @return bool True if the merchant has enabled the feature.
     */
    public static function is_merchant_enabled(): bool
    {
    }
    /**
     * Whether the store-wide default disables in-agent checkout (feed-only / redirect).
     * Per-product overrides live in the mapper's filter.
     *
     * @since 10.9.0
     * @return bool
     */
    public static function is_checkout_disabled(): bool
    {
    }
    /**
     * Execute feed sync process.
     *
     * Generates product feed using ProductWalker.
     *
     * @since 10.5.0
     * @param bool $force_upload When true, bypass the content-hash dedup check and always
     *                           push the regenerated catalog to Stripe. Used by manual sync
     *                           from the UI, where the merchant expects every click to land
     *                           an upload regardless of whether the file changed.
     * @return bool True on successful delivery, false on early returns or failure.
     */
    public function sync_feed(bool $force_upload = \false): bool
    {
    }
    /**
     * Persist a sync result to the history option and update the last-sync snapshot.
     *
     * @since 10.7.0
     * @param array $result {
     *     Sync result data.
     *
     *     @type int    $products         Number of products synced.
     *     @type string $status           Sync status (e.g. "succeeded", "failed").
     *     @type string $file_id          Stripe file ID.
     *     @type string $import_set_id    Stripe ImportSet ID.
     *     @type string $error            Error message, if any.
     *     @type int    $skipped_products Count of products dropped by the local
     *                                    feed validator before the CSV reached
     *                                    Stripe. Persisted so the refresh poll
     *                                    can upgrade a Stripe-reported `succeeded`
     *                                    to `succeeded_with_errors` once the
     *                                    ImportSet completes.
     * }
     * @return void
     */
    public function store_sync_result(array $result): void
    {
    }
    /**
     * Get the last sync result as stored by {@see self::store_sync_result()}.
     *
     * Supported API for reading the last sync snapshot. External callers should
     * use this getter rather than reading the underlying option directly.
     *
     * @since 10.7.0
     * @return array Normalized sync entry, or an empty array when no sync has run.
     */
    public static function get_last_sync(): array
    {
    }
    /**
     * Get the sync history.
     *
     * Supported API for reading the sync history. Returned entries are in
     * insertion order (oldest first). Non-array entries from corrupted data are
     * filtered out.
     *
     * @since 10.7.0
     * @return array<int, array> List of sync entries.
     */
    public static function get_sync_history(): array
    {
    }
    /**
     * Resolve the status to persist from an ImportSet creation response.
     *
     * When Stripe returns an `import_set_id` but omits a `status` string, the
     * ImportSet is in-flight and should be recorded as `pending` so the
     * dashboard's non-terminal poll keeps refreshing until Stripe returns a
     * terminal state. Falls back to `unknown` only when the delivery failed
     * outright (no `import_set_id` returned).
     *
     * When `$skipped_count` is positive — i.e. the local validator dropped
     * some products before they reached the CSV — a Stripe-reported
     * `succeeded` is upgraded to `succeeded_with_errors` so the dashboard
     * badge ("Partial Success") matches the warning logged for the skips.
     *
     * @since 10.7.0
     * @param array $result        Delivery result from the Files API.
     * @param int   $skipped_count Count of products dropped by the local validator.
     * @return string Normalized status string.
     */
    private static function normalize_delivery_status(array $result, int $skipped_count = 0): string
    {
    }
    /**
     * Upgrade `succeeded` to `succeeded_with_errors` when the local validator
     * dropped products at sync time.
     *
     * Centralizes the upgrade so it runs both at initial sync (via
     * {@see self::normalize_delivery_status()}) and at refresh time (via
     * {@see self::update_pending_statuses()}). The initial-sync call rarely
     * sees `succeeded` directly because Stripe processes the ImportSet
     * asynchronously; the refresh path is where the upgrade typically fires.
     *
     * @since 10.7.0
     * @param string $status        Status reported by Stripe (or normalized fallback).
     * @param int    $skipped_count Count of products dropped by the local validator
     *                              for the corresponding sync.
     * @return string Status with the partial-success upgrade applied if applicable.
     */
    private static function apply_partial_success_rule(string $status, int $skipped_count): string
    {
    }
    /**
     * Apply status updates to non-terminal history entries by import_set_id.
     *
     * Re-reads the current history at write time and applies the updates to
     * matching entries whose stored status is non-terminal (`queued`,
     * `validating_records`, `pending`, `creating_records`, or `unknown`), matching
     * the controller's
     * {@see WC_REST_Stripe_Agentic_Commerce_Controller::REFRESHABLE_STATUSES}.
     * This preserves any entries appended concurrently by
     * {@see self::store_sync_result()} between read and write (for example
     * during a Stripe API round-trip in the dashboard refresh flow).
     *
     * @since 10.7.0
     * @param array<string, string> $status_updates Map of import_set_id to new status.
     * @return void
     */
    public static function update_pending_statuses(array $status_updates): void
    {
    }
    /**
     * Compute the content hash of a generated feed file.
     *
     * Uses `hash_file` so PHP streams the file in chunks — the full catalog
     * is never buffered in memory, preserving the streaming feed contract.
     *
     * @since 10.8.0
     * @param string $file_path Absolute path to the generated feed file.
     * @return string SHA-256 hex digest, or an empty string if the file cannot be hashed.
     */
    protected function get_feed_hash(string $file_path): string
    {
    }
    /**
     * Decide whether an upload can be skipped because the generated feed matches
     * the last successfully uploaded one.
     *
     * Returns false when dedup is disabled via filter, when the cached record is
     * missing/malformed, or when the cached upload has exceeded the cache TTL.
     *
     * @since 10.8.0
     * @param string $current_hash Hash of the feed that was just generated.
     * @return bool True if the upload should be skipped.
     */
    protected function is_feed_unchanged(string $current_hash): bool
    {
    }
    /**
     * Record the hash, timestamp, and Stripe file id of a successful upload.
     *
     * @since 10.8.0
     * @param string $hash   SHA-256 hex digest of the uploaded feed content.
     * @param array  $result Delivery result array returned by the Files API delivery method.
     * @return void
     */
    protected function remember_feed_upload(string $hash, array $result): void
    {
    }
    /**
     * Get Stripe secret key from settings.
     *
     * @since 10.5.0
     * @return string Stripe secret key.
     */
    private function get_secret_key(): string
    {
    }
}
/**
 * Tracks product stock changes and syncs incremental inventory updates to Stripe.
 *
 * Stock changes are batched in a WordPress option and uploaded as an inventory_feed
 * one minute after the first change, reducing API load compared to full catalog syncs.
 *
 * @since 10.6.0
 */
class WC_Stripe_Agentic_Commerce_Inventory_Tracker
{
    /**
     * Option key used to store pending inventory updates.
     *
     * @var string
     */
    public const PENDING_UPDATES_OPTION = 'wc_stripe_agentic_pending_inventory';
    /**
     * Option key used to store pending product archives.
     *
     * @var string
     */
    public const PENDING_ARCHIVES_OPTION = 'wc_stripe_agentic_pending_archives';
    /**
     * Action Scheduler hook name for inventory sync.
     *
     * @var string
     */
    public const SCHEDULED_ACTION = 'wc_stripe_agentic_commerce_sync_inventory';
    /**
     * Action Scheduler hook name for archive sync.
     *
     * @var string
     */
    public const ARCHIVE_SCHEDULED_ACTION = 'wc_stripe_agentic_commerce_sync_archives';
    /**
     * Maximum number of pending updates before falling back to full catalog sync.
     *
     * @var int
     */
    public const MAX_PENDING_UPDATES = 1000;
    /**
     * Delay in seconds before processing a batch of stock changes.
     *
     * @var int
     */
    public const BATCH_DELAY_SECONDS = 60;
    /**
     * Register WordPress hooks.
     *
     * @since 10.6.0
     * @return void
     */
    public function register_hooks(): void
    {
    }
    /**
     * Track a stock quantity change for a product.
     *
     * Stores the change in the pending updates option and schedules a sync
     * 60 seconds later if one is not already scheduled. Multiple changes
     * within that window are batched into a single upload.
     *
     * @since 10.6.0
     * @param \WC_Product $product The product whose stock changed.
     * @return void
     */
    public function track_stock_change(\WC_Product $product): void
    {
    }
    /**
     * Route a WordPress post deletion or trash event to track_product_archive() if it is a product.
     *
     * Hooked to before_delete_post and wp_trash_post so that product removals via the
     * WordPress admin UI are captured in addition to programmatic / REST API deletions.
     * Loads the full WC_Product so that all required feed fields can be captured before
     * the product is permanently deleted.
     *
     * @since 10.6.0
     * @param int $post_id The ID of the post being deleted or trashed.
     * @return void
     */
    public function maybe_track_product_archive(int $post_id): void
    {
    }
    /**
     * Remove a product from the pending archives queue when it is restored from trash.
     *
     * If a merchant trashes a product and then restores it before the 60-second
     * batch window elapses, this prevents the product from being synced to Stripe
     * as out_of_stock.
     *
     * @since 10.6.0
     * @param int $post_id The ID of the post being restored.
     * @return void
     */
    public function maybe_cancel_pending_archive(int $post_id): void
    {
    }
    /**
     * Remove any pending inventory or archive entry queued for $product_id.
     *
     * Called from the track_* methods when the visibility filter votes false so
     * a product that was queued before the filter flipped doesn't still flush
     * to Stripe on the next batch.
     *
     * @since 10.8.0
     * @param int $product_id Product ID to evict.
     * @return void
     */
    private function evict_pending_entries(int $product_id): void
    {
    }
    /**
     * Re-check `should_sync_product()` for each pending entry and drop the
     * ones whose filter outcome flipped to false between enqueue and flush.
     *
     * The event-driven eviction in `track_stock_change()` and `track_product_archive()`
     * only fires when a follow-up event arrives. If a merchant hides a product
     * during the 60-second batch window and no further event lands for it, the
     * queued row would otherwise still ship on the next flush — defeating the
     * filter's "this product should not be synced" contract. Reading the option
     * blind at flush time isn't enough; the visibility decision can move.
     *
     * For permanently-deleted products (`wc_get_product()` returns false): inventory
     * entries are dropped (the stock delta references a SKU that no longer exists),
     * but archive entries are kept because the row data was already captured at
     * archive time and Stripe still has the product to mark out_of_stock.
     *
     * @since 10.8.0
     * @param string $option_key Pending option to prune.
     * @param bool   $is_archive Whether the option holds archive entries (changes the missing-product policy).
     * @return array Pruned pending entries — also persisted back to `$option_key` if anything changed.
     */
    private function prune_stale_pending_entries(string $option_key, bool $is_archive): array
    {
    }
    /**
     * Track a product deletion (permanent delete or trash) for archiving on Stripe.
     *
     * Uses the product mapper to capture all required feed fields (title, description,
     * link, price, image, etc.) before the product is permanently deleted, then stores
     * the full mapped row in the pending archives option. This is necessary because
     * Stripe's product_catalog_feed ImportSet requires all mandatory fields even when
     * the purpose is to mark a product as out_of_stock.
     *
     * Schedules a sync 60 seconds later if one is not already scheduled. The product
     * is also removed from any pending inventory updates since the stock quantity is
     * no longer relevant once the product is removed.
     *
     * @since 10.6.0
     * @param \WC_Product $product The product being deleted or trashed.
     * @return void
     */
    public function track_product_archive(\WC_Product $product): void
    {
    }
    /**
     * Generate an inventory feed CSV from pending stock updates.
     *
     * Returns a finalized CSV feed containing only SKU ID and quantity columns,
     * or null if there are no pending updates.
     *
     * @since 10.6.0
     * @return WC_Stripe_Agentic_Commerce_Csv_Feed|null Finalized feed, or null if nothing to sync.
     */
    public function generate_inventory_feed(): ?\WC_Stripe_Agentic_Commerce_Csv_Feed
    {
    }
    /**
     * Execute inventory sync process.
     *
     * Called by Action Scheduler one minute after the first tracked stock change.
     * Generates a minimal inventory CSV and uploads it to Stripe as an inventory_feed.
     *
     * On success, pending updates are cleared. On failure they are retained so
     * the next scheduled sync can retry.
     *
     * If the number of pending updates exceeds MAX_PENDING_UPDATES, the queue is
     * cleared and the regular full catalog sync will handle the backlog on its
     * next run.
     *
     * @since 10.6.0
     * @return void
     */
    public function sync_inventory(): void
    {
    }
    /**
     * Generate an archive feed CSV from pending product archives.
     *
     * Returns a finalized CSV feed containing all product catalog fields with
     * availability set to out_of_stock. The full field set is required because
     * Stripe's product_catalog_feed ImportSet validates all mandatory columns
     * (title, description, link, price, image_link, mpn/gtin, product_category,
     * inventory_quantity/inventory_not_tracked).
     *
     * @since 10.6.0
     * @return WC_Stripe_Agentic_Commerce_Csv_Feed|null Finalized feed, or null if nothing to sync.
     */
    public function generate_archive_feed(): ?\WC_Stripe_Agentic_Commerce_Csv_Feed
    {
    }
    /**
     * Execute archive sync process.
     *
     * Called by Action Scheduler one minute after the first tracked product deletion
     * or trash event. Generates a minimal product catalog CSV (id + availability:
     * out_of_stock) and uploads it to Stripe as a product_catalog_feed ImportSet,
     * marking each product as unavailable without permanently removing it.
     *
     * On success, pending archives are cleared. On failure they are retained so
     * the next scheduled sync can retry.
     *
     * If the number of pending archives exceeds MAX_PENDING_UPDATES, the queue
     * is cleared and the regular full catalog sync will handle the backlog on its
     * next run.
     *
     * @since 10.6.0
     * @return void
     */
    public function sync_archives(): void
    {
    }
}
/**
 * Handles the manual approval decision for agentic checkout orders.
 *
 * Validates each line item for product existence, purchasability,
 * and stock availability. Provides a filter for custom merchant logic.
 *
 * @since 10.6.0
 */
class WC_Stripe_Agentic_Commerce_Manual_Approval
{
    /**
     * Validates the finalize_checkout event and returns the approval response.
     *
     * @since 10.6.0
     * @param WC_Stripe_Agentic_Customize_Checkout_Event $event The finalize checkout event.
     * @return array The manual_approval_details response array.
     * @throws Exception When product resolution fails.
     */
    public function validate(\WC_Stripe_Agentic_Customize_Checkout_Event $event): array
    {
    }
    /**
     * Validates a single line item for purchasability and stock.
     *
     * @since 10.6.0
     * @param WC_Stripe_Agentic_Customize_Checkout_Line_Item $line_item The line item to validate.
     * @return array|null Null if valid, or array with 'code' and 'reason' keys.
     * @throws Exception When product resolution fails.
     */
    private function validate_line_item(\WC_Stripe_Agentic_Customize_Checkout_Line_Item $line_item): ?array
    {
    }
}
/**
 * Creates WooCommerce orders from Stripe agentic checkout session data.
 *
 * @since 10.6.0
 */
class WC_Stripe_Agentic_Commerce_Order_Mapper
{
    private const ADDRESS_TYPE_BILLING = 'billing';
    private const ADDRESS_TYPE_SHIPPING = 'shipping';
    /**
     * `created_via` value stamped on orders produced by the agentic checkout flow.
     *
     * WooCommerce 10.8+ blocks `payment_complete()` on orders that lack
     * checkout evidence. The integration registers this value with the
     * `woocommerce_payment_complete_allowed_created_via_values` filter so
     * agentic orders can complete payment.
     */
    public const CREATED_VIA = 'stripe-agentic-commerce';
    /**
     * Minutes to hold reserved stock while payment completes. Passed explicitly
     * so a blank `woocommerce_hold_stock_minutes` cannot disable the guard;
     * payment_complete()'s stock reduction releases the hold.
     *
     * @var int
     */
    private const STOCK_HOLD_MINUTES = 10;
    /**
     * Creates a WooCommerce order from a Stripe checkout session.
     *
     * @since 10.6.0
     * @param WC_Stripe_Agentic_Checkout_Session $session The checkout session wrapper.
     * @return WC_Order The created order.
     * @throws Exception When the order cannot be created.
     */
    public function create_order_from_checkout_session(\WC_Stripe_Agentic_Checkout_Session $session): \WC_Order
    {
    }
    /**
     * Validates that the checkout session has all required fields.
     *
     * @since 10.6.0
     * @param WC_Stripe_Agentic_Checkout_Session $session The checkout session wrapper.
     * @throws Exception When required fields are missing or invalid.
     */
    private function validate_checkout_session(\WC_Stripe_Agentic_Checkout_Session $session): void
    {
    }
    /**
     * Creates the WooCommerce order with basic settings.
     *
     * @since 10.6.0
     * @param WC_Stripe_Agentic_Checkout_Session $session The checkout session wrapper.
     * @return WC_Order The created order.
     * @throws Exception When wc_create_order fails.
     */
    private function create_order(\WC_Stripe_Agentic_Checkout_Session $session): \WC_Order
    {
    }
    /**
     * Validates the customer email and links existing WordPress users.
     *
     * If no matching user is found, the order is created as a guest order.
     *
     * @since 10.6.0
     * @param WC_Order                           $order   The WooCommerce order.
     * @param WC_Stripe_Agentic_Checkout_Session $session The checkout session wrapper.
     * @throws Exception When the email is not present or invalid.
     */
    private function map_customer(\WC_Order $order, \WC_Stripe_Agentic_Checkout_Session $session): void
    {
    }
    /**
     * Maps line items from the checkout session to order products.
     *
     * Resolves the price's external_reference to a WooCommerce product (SKU
     * first, falling back to product ID for catalogs synced under the legacy
     * contract). Throws if neither lookup matches a product.
     *
     * @since 10.6.0
     * @param WC_Order                           $order   The WooCommerce order.
     * @param WC_Stripe_Agentic_Checkout_Session $session The checkout session wrapper.
     * @throws Exception When a product cannot be found for a line item.
     */
    private function map_line_items(\WC_Order $order, \WC_Stripe_Agentic_Checkout_Session $session): void
    {
    }
    /**
     * Adds a product to the order and returns the item.
     *
     * @since 10.6.0
     * @param WC_Order   $order    The WooCommerce order.
     * @param WC_Product $product  The product to add.
     * @param int        $quantity The quantity of the product to add.
     * @param string     $session_id The ID of the checkout session.
     * @return WC_Order_Item_Product The added item.
     * @throws Exception When the product cannot be added to the order.
     */
    private function add_product_to_order(\WC_Order $order, \WC_Product $product, int $quantity, string $session_id): \WC_Order_Item_Product
    {
    }
    /**
     * Places an atomic stock hold for the order's managed-stock items;
     * ReserveStock itself skips backorder-enabled products.
     *
     * @since 10.9.0
     * @param WC_Order $order The order with mapped line items.
     * @throws \Automattic\WooCommerce\Checkout\Helpers\ReserveStockException When stock cannot be secured.
     */
    private function reserve_stock(\WC_Order $order): void
    {
    }
    /**
     * Parks a paid order that lost the stock race instead of overselling.
     *
     * Payment is already captured, so the order can't be declined or deleted:
     * keep it on-hold with the transaction id and suppress the on-hold stock
     * reduction that would drive the oversold product negative.
     *
     * @since 10.9.0
     * @param WC_Order                           $order   The created order.
     * @param WC_Stripe_Agentic_Checkout_Session $session The checkout session wrapper.
     * @param Throwable                          $e       The reservation failure.
     */
    private function hold_order_for_insufficient_stock(\WC_Order $order, \WC_Stripe_Agentic_Checkout_Session $session, \Throwable $e): void
    {
    }
    /**
     * Maps an address from a Stripe address object to the order.
     *
     * @since 10.6.0
     * @param WC_Order              $order   The WooCommerce order.
     * @param WC_Stripe_API_Address $address The Stripe address object.
     * @param string                $name    The name of the address to map.
     * @param string                $phone   The phone number of the address to map.
     * @param string                $type    The type of address to map ('billing' or 'shipping').
     */
    private function map_address(\WC_Order $order, \WC_Stripe_API_Address $address, string $name, string $phone, string $type = self::ADDRESS_TYPE_BILLING): void
    {
    }
    /**
     * Maps billing and shipping contact details from the checkout session.
     *
     * Sets name, phone, and address fields for both billing and shipping.
     * Stripe provides a single full name field which is split into
     * first name and last name for WooCommerce.
     *
     * @since 10.6.0
     * @param WC_Order                           $order   The WooCommerce order.
     * @param WC_Stripe_Agentic_Checkout_Session $session The checkout session wrapper.
     */
    private function map_addresses(\WC_Order $order, \WC_Stripe_Agentic_Checkout_Session $session): void
    {
    }
    /**
     * Stores Stripe-specific metadata on the order.
     *
     * @since 10.6.0
     * @param WC_Order                           $order   The WooCommerce order.
     * @param WC_Stripe_Agentic_Checkout_Session $session The checkout session wrapper.
     */
    private function store_stripe_metadata(\WC_Order $order, \WC_Stripe_Agentic_Checkout_Session $session): void
    {
    }
    /**
     * Maps the chosen shipping rate from the checkout session to the order.
     *
     * Re-runs WooCommerce shipping calculation for the order's destination and
     * resolves the chosen rate using the following priority:
     *   1. By WC rate ID from the Stripe shipping rate metadata (wc_rate_id).
     *   2. If exactly one rate is available, accept it unconditionally.
     *   3. By display name match as a last resort.
     *   4. If no WC rate matches (or WC shipping calculation fails), fall back
     *      to a free-form WC_Order_Item_Shipping built from
     *      shipping_rate.display_name and total_details.amount_shipping.
     *
     * Does nothing when no shipping rate was chosen (digital goods or not applicable).
     *
     * @since 10.6.0
     * @param WC_Order                           $order   The WooCommerce order.
     * @param WC_Stripe_Agentic_Checkout_Session $session The checkout session wrapper.
     * @throws Exception When WooCommerce shipping is unavailable (WC()->shipping() is not a WC_Shipping).
     */
    private function map_shipping(\WC_Order $order, \WC_Stripe_Agentic_Checkout_Session $session): void
    {
    }
    /**
     * Verifies that the WC order total matches the Stripe session total.
     *
     * Called after all components (line items, shipping, tax) are mapped
     * so the comparison covers the full order amount.
     *
     * @since 10.6.0
     * @param WC_Order                           $order   The WooCommerce order.
     * @param WC_Stripe_Agentic_Checkout_Session $session The checkout session wrapper.
     * @throws Exception When the totals diverge beyond rounding tolerance.
     */
    private function verify_order_total(\WC_Order $order, \WC_Stripe_Agentic_Checkout_Session $session): void
    {
    }
    /**
     * Splits a full name into first and last name components.
     *
     * @since 10.6.0
     * @param string $full_name The full name to split.
     * @return array{first: string, last: string} The split name.
     */
    private static function split_full_name(string $full_name): array
    {
    }
}
/**
 * Stores the per-product exclude flag and filters Agentic Commerce sync eligibility.
 *
 * @internal
 * @since 10.9.0
 */
class WC_Stripe_Agentic_Commerce_Product_Exclusion
{
    /**
     * Hidden post meta key for the exclude flag ('yes' = excluded; 'no'/unset = synced).
     */
    protected const META_KEY = '_wc_stripe_agentic_commerce_exclude';
    /**
     * The exclude-flag meta key.
     *
     * @since 10.9.0
     * @return string
     */
    public static function get_meta_key(): string
    {
    }
    /**
     * Register the should-sync filter. Runs in every context (cron/CLI included)
     * so sync honors the flag regardless of how it was triggered.
     *
     * @since 10.9.0
     * @return void
     */
    public function init(): void
    {
    }
    /**
     * Whether the product is excluded from Agentic Commerce sync. The parent's
     * flag is authoritative for variations (the checkbox lives on the parent).
     *
     * Accepts an already-loaded product to avoid a redundant `wc_get_product()`
     * when the caller (e.g. the feed's should-sync filter) holds the instance.
     *
     * @since 10.9.0
     * @param WC_Product|int $product Product instance or post ID.
     * @return bool
     */
    public static function is_excluded($product): bool
    {
    }
    /**
     * Persist the exclude flag for a product.
     *
     * @since 10.9.0
     * @param int  $product_id Product post ID.
     * @param bool $excluded   Whether the product should be excluded from sync.
     * @return bool True when the stored value changed, false on a no-op (or invalid ID).
     */
    public static function set_excluded(int $product_id, bool $excluded): bool
    {
    }
    /**
     * Filter callback: vote false when the product is excluded, without
     * resurrecting one another callback already excluded.
     *
     * @since 10.9.0
     * @param bool       $should_sync Whether to include the product.
     * @param WC_Product $product     Product being evaluated.
     * @return bool
     */
    public function filter_should_sync_product($should_sync, $product): bool
    {
    }
}
/**
 * Manages filtering for the Agentic Commerce feed.
 *
 * @since 10.9.0
 */
class WC_Stripe_Agentic_Commerce_Product_Filter
{
    /**
     * Single option storing all supported filter values.
     *
     * @var string
     * @since 10.9.0
     */
    protected const OPTION_NAME = 'wc_stripe_agentic_commerce_product_filters';
    /**
     * Local cache for filters to prevent re-calculating the filters for a given instance.
     *
     * @var array|null
     */
    private ?array $filters = \null;
    /**
     * Read the persisted option and apply the override filter.
     *
     * @since 10.9.0
     * @return array {
     *     @type int[] $product_ids             Product IDs.
     *     @type int[] $category_ids            Category taxonomy IDs.
     *     @type int[] $tag_ids                 Tag taxonomy IDs.
     *     @type int[] $brand_ids               Brand taxonomy IDs.
     *     @type int[] $variable_product_ids    Variable product IDs.
     * }
     */
    public function get_filters(): array
    {
    }
    /**
     * Save a set of filters.
     *
     * Note that input data is normalized, resolved, and verified before being saved.
     * {@see self::get_filters()}.
     *
     * @since 10.9.0
     * @param array $filters Raw caller-supplied filters. Unknown keys are ignored.
     * @return bool True when the option was written successfully.
     */
    public function save_filters(array $filters): bool
    {
    }
    /**
     * Indicate whether we have any filters defined.
     * {@see self::get_filters()}
     *
     * @since 10.9.0
     * @return bool
     */
    public function has_filters(): bool
    {
    }
    /**
     * At present, the product feed infrastructure can only support query criteria
     * that can be handled by a single wc_get_products() call. As such,
     * this method indicates which field types will be used to construct the query.
     *
     * @see get_query_args()
     * @since 10.9.0
     * @return string[] Field types that will be used to construct the query.
     */
    public function get_effective_filter_types(): array
    {
    }
    /**
     * Get the query arguments to apply the specified filters.
     * Note that not all filter criteria can be applied in a single query,
     * so this method has a hierarchy for applicable criteria.
     * Call {@see get_effective_filter_types()} to identify which criteria will be used.
     *
     * @since 10.9.0
     * @return array|null WC_Product_Query arguments. Null when no filters are specified.
     */
    public function get_query_args(): ?array
    {
    }
    /**
     * Indicate whether the supplied filters are empty.
     *
     * @since 10.9.0
     * @param array $filters
     * @return bool
     */
    private function are_filters_empty(array $filters): bool
    {
    }
    /**
     * Validate an array of possible taxonomy IDs and slugs and return an
     * array of valid term IDs.
     *
     * Empty values are dropped and string terms are trimmed.
     * Term slugs are resolved to term IDs via `get_term_by()`,
     * and unknown term slugs and term IDs are removed.
     *
     * @since 10.9.0
     * @param array  $values   Array of taxonomy IDs and/or slugs.
     * @param string $taxonomy Taxonomy slug.
     * @return int[] List of valid term IDs.
     */
    private function validate_taxonomy_ids(array $values, string $taxonomy): array
    {
    }
    /**
     * Normalize the filter data, which may be stored in the option or provided by a filter.
     *
     * @since 10.9.0
     * @param array $raw The raw data stored in the option.
     * @return array {
     *     @type int[] $product_ids             Product IDs.
     *     @type int[] $category_ids            Category taxonomy IDs.
     *     @type int[] $tag_ids                 Tag taxonomy IDs.
     *     @type int[] $brand_ids               Brand taxonomy IDs.
     *     @type int[] $variable_product_ids    Variable product IDs.
     *                                            them to their variations. Default false.
     * }
     */
    private function normalize_filter_data(array $raw): array
    {
    }
    /**
     * Validate a list of product IDs.
     *
     * @since 10.9.0
     * @param mixed[]  $product_ids           List of product IDs to validate.
     * @param string[] $allowed_product_types List of allowed product types.
     * @return int[] List of validated product IDs.
     */
    private function validate_product_ids(array $product_ids, array $allowed_product_types): array
    {
    }
    /**
     * Normalize a possibly-malformed value to int[] — drop non-numerics and `<= 0`.
     *
     * @since 10.9.0
     * @param mixed $value
     * @return int[]
     */
    private function normalize_ids($value): array
    {
    }
}
/**
 * Maps WooCommerce products to Stripe Agentic Commerce feed format.
 *
 * Converts WooCommerce product data into Stripe Product Catalog CSV specification.
 * Uses schema-driven approach to ensure all required fields are mapped correctly.
 *
 * @since 10.5.0
 */
class WC_Stripe_Agentic_Commerce_Product_Mapper implements \Automattic\WooCommerce\Internal\ProductFeed\Feed\ProductMapperInterface
{
    /**
     * Stripe feed schema definition.
     *
     * @var array
     */
    protected array $schema;
    /**
     * Cached shipping data to prevent repeated queries.
     *
     * @var string|null
     */
    private ?string $cached_shipping_data = \null;
    /**
     * Cached shipping zones to prevent repeated API calls.
     *
     * @var array|null
     */
    private ?array $cached_shipping_zones = \null;
    /**
     * Initialize mapper with schema.
     *
     * @since 10.5.0
     */
    public function __construct()
    {
    }
    /**
     * Map WooCommerce product to feed row.
     *
     * Main entry point for converting a WooCommerce product into Stripe feed format.
     *
     * @since 10.5.0
     * @param \WC_Product $product Product to map.
     * @return array Mapped product data array.
     * @throws RuntimeException If the parent product is not found.
     */
    public function map_product(\WC_Product $product): array
    {
    }
    /**
     * Map individual field based on configuration.
     *
     * @since 10.5.0
     * @param \WC_Product      $product        Product object.
     * @param string           $field          Field name to map.
     * @param array            $config         Field configuration from schema.
     * @param \WC_Product|null $parent_product Parent product for variations.
     * @return mixed Mapped field value.
     */
    protected function map_field(\WC_Product $product, string $field, array $config, ?\WC_Product $parent_product = \null)
    {
    }
    /**
     * Convert value to appropriate type.
     *
     * @since 10.5.0
     * @param mixed $value  Value to convert.
     * @param array $config Field configuration.
     * @return mixed Converted value.
     */
    protected function convert_type($value, array $config)
    {
    }
    /**
     * Get the catalog row id Stripe will surface back as `price.external_reference`.
     *
     * Returns the WooCommerce SKU when present so the merchant's identifier shows
     * up in Stripe's UI and downstream lookups can resolve via `wc_get_product_id_by_sku()`.
     * Falls back to the product ID for SKU-less products so the legacy contract — which
     * keyed catalogs by product ID — keeps working.
     *
     * @since 10.5.0
     * @param \WC_Product $product Product object.
     * @return string SKU when present, otherwise the product ID as a string.
     */
    protected function get_id(\WC_Product $product): string
    {
    }
    /**
     * Get product title.
     *
     * @since 10.5.0
     * @param \WC_Product $product Product object.
     * @return string Product title with HTML tags stripped.
     */
    protected function get_title(\WC_Product $product): string
    {
    }
    /**
     * Get product description.
     *
     * @since 10.5.0
     * @param \WC_Product $product Product object.
     * @return string Product description with HTML tags stripped.
     */
    protected function get_description(\WC_Product $product): string
    {
    }
    /**
     * Get product permalink.
     *
     * @since 10.5.0
     * @param \WC_Product $product Product object.
     * @return string Product permalink URL.
     */
    protected function get_link(\WC_Product $product): string
    {
    }
    /**
     * Whether to exclude this product from in-agent checkout (feed-only / redirect).
     *
     * @since 10.9.0
     * @param \WC_Product      $product        Product object.
     * @param \WC_Product|null $parent_product Parent product for variations.
     * @return bool
     */
    protected function get_disable_checkout(\WC_Product $product, ?\WC_Product $parent_product = \null): bool
    {
    }
    /**
     * Get product GTIN.
     *
     * @since 10.5.0
     * @param \WC_Product $product Product object.
     * @return string|null Product GTIN or null.
     */
    protected function get_gtin(\WC_Product $product): ?string
    {
    }
    /**
     * Get product MPN.
     *
     * @since 10.5.0
     * @param \WC_Product $product Product object.
     * @return string|null Product MPN or null.
     */
    protected function get_mpn(\WC_Product $product): ?string
    {
    }
    /**
     * Generate MPN using product ID and trimmed product name.
     *
     * @since 10.5.0
     * @param \WC_Product $product Product object.
     * @return string Generated MPN.
     */
    private function generate_mpn(\WC_Product $product): string
    {
    }
    /**
     * Get product category path.
     *
     * Returns the deepest (most specific) category path with hierarchical structure using " > " separator.
     * When a product has multiple categories, selects the one with the most levels.
     * Example: "Apparel & Accessories > Shoes > Running Shoes"
     *
     * @since 10.5.0
     * @param \WC_Product      $product        Product object.
     * @param \WC_Product|null $parent_product Parent product for variations.
     * @return string|null Product category path or null.
     */
    protected function get_product_category(\WC_Product $product, ?\WC_Product $parent_product): ?string
    {
    }
    /**
     * Get product brand.
     *
     * @since 10.5.0
     * @param \WC_Product      $product        Product object.
     * @param \WC_Product|null $parent_product Parent product for fallback.
     * @return string|null Product brand or Generic.
     */
    protected function get_brand(\WC_Product $product, ?\WC_Product $parent_product = \null): ?string
    {
    }
    /**
     * Get product material.
     *
     * @since 10.5.0
     * @param \WC_Product $product Product object.
     * @return string|null Product material or null.
     */
    protected function get_material(\WC_Product $product): ?string
    {
    }
    /**
     * Get product condition.
     *
     * @since 10.5.0
     * @param \WC_Product $product Product object.
     * @return string Product condition, defaults to 'new'.
     */
    protected function get_condition(\WC_Product $product): string
    {
    }
    /**
     * Get product age group.
     *
     * @since 10.5.0
     * @param \WC_Product $product Product object.
     * @return string|null Product age group or null.
     */
    protected function get_age_group(\WC_Product $product): ?string
    {
    }
    /**
     * Get product weight with unit.
     *
     * @since 10.5.0
     * @param \WC_Product $product Product object.
     * @return string|null Product weight with unit or null.
     */
    protected function get_weight(\WC_Product $product): ?string
    {
    }
    /**
     * Get product length with unit.
     *
     * @since 10.5.0
     * @param \WC_Product $product Product object.
     * @return string|null Product length with unit or null.
     */
    protected function get_length(\WC_Product $product): ?string
    {
    }
    /**
     * Get product width with unit.
     *
     * @since 10.5.0
     * @param \WC_Product $product Product object.
     * @return string|null Product width with unit or null.
     */
    protected function get_width(\WC_Product $product): ?string
    {
    }
    /**
     * Get product height with unit.
     *
     * @since 10.5.0
     * @param \WC_Product $product Product object.
     * @return string|null Product height with unit or null.
     */
    protected function get_height(\WC_Product $product): ?string
    {
    }
    /**
     * Get product main image link.
     *
     * @since 10.5.0
     * @param \WC_Product      $product        Product object.
     * @param \WC_Product|null $parent_product Parent product for fallback.
     * @return string Product image URL.
     */
    protected function get_image_link(\WC_Product $product, ?\WC_Product $parent_product): string
    {
    }
    /**
     * Get product additional image links.
     *
     * @since 10.5.0
     * @param \WC_Product      $product        Product object.
     * @param \WC_Product|null $parent_product Parent product for fallback.
     * @return string|null Comma-separated product gallery image URLs.
     */
    protected function get_additional_image_link(\WC_Product $product, ?\WC_Product $parent_product): ?string
    {
    }
    /**
     * Get product price with currency.
     *
     * @since 10.5.0
     * @param \WC_Product $product Product object.
     * @return string|null Product price or null.
     */
    protected function get_price(\WC_Product $product): ?string
    {
    }
    /**
     * Get product sale price with currency.
     *
     * @since 10.5.0
     * @param \WC_Product $product Product object.
     * @return string|null Product sale price or null.
     */
    protected function get_sale_price(\WC_Product $product): ?string
    {
    }
    /**
     * Get product sale price effective date.
     *
     * @since 10.5.0
     * @param \WC_Product $product Product object.
     * @return string|null Product sale price effective date or null.
     */
    protected function get_sale_price_effective_date(\WC_Product $product): ?string
    {
    }
    /**
     * Get product availability status.
     *
     * @since 10.5.0
     * @param \WC_Product $product Product object.
     * @return string Product availability status.
     */
    protected function get_availability(\WC_Product $product): string
    {
    }
    /**
     * Get product inventory quantity.
     *
     * @since 10.5.0
     * @param \WC_Product $product Product object.
     * @return int|null Product inventory quantity or null.
     */
    protected function get_inventory_quantity(\WC_Product $product): ?int
    {
    }
    /**
     * Get inventory_not_tracked flag.
     *
     * Returns 'true' for products without stock management (virtual, digital, etc.)
     * and 'false' for products that track inventory.
     *
     * @since 10.5.0
     * @param \WC_Product $product Product object.
     * @return bool Whether inventory is not tracked.
     */
    protected function get_inventory_not_tracked(\WC_Product $product): bool
    {
    }
    /**
     * Get product item group ID.
     *
     * @since 10.5.0
     * @param \WC_Product      $product        Product object.
     * @param \WC_Product|null $parent_product Parent product for group ID.
     * @return string|null Parent product ID or null.
     */
    protected function get_item_group_id(\WC_Product $product, ?\WC_Product $parent_product = \null): ?string
    {
    }
    /**
     * Get product item group title.
     *
     * @since 10.5.0
     * @param \WC_Product      $product        Product object.
     * @param \WC_Product|null $parent_product Parent product for title.
     * @return string|null Parent product title or null.
     */
    protected function get_item_group_title(\WC_Product $product, ?\WC_Product $parent_product = \null): ?string
    {
    }
    /**
     * Get product color.
     *
     * @since 10.5.0
     * @param \WC_Product $product Product object.
     * @return string|null Product color or null.
     */
    protected function get_color(\WC_Product $product): ?string
    {
    }
    /**
     * Get product size.
     *
     * @since 10.5.0
     * @param \WC_Product $product Product object.
     * @return string|null Product size or null.
     */
    protected function get_size(\WC_Product $product): ?string
    {
    }
    /**
     * Get product size system.
     *
     * @since 10.5.0
     * @param \WC_Product $product Product object.
     * @return string|null Product size system or null.
     */
    protected function get_size_system(\WC_Product $product): ?string
    {
    }
    /**
     * Get product gender.
     *
     * @since 10.5.0
     * @param \WC_Product $product Product object.
     * @return string|null Product gender or null.
     */
    protected function get_gender(\WC_Product $product): ?string
    {
    }
    /**
     * Get Stripe product tax code.
     *
     * @since 10.5.0
     * @param \WC_Product $product Product object.
     * @return string|null Stripe tax code or null.
     */
    protected function get_stripe_product_tax_code(\WC_Product $product): ?string
    {
    }
    /**
     * Get tax behavior (inclusive/exclusive).
     *
     * @since 10.5.0
     * @param \WC_Product $product Product object.
     * @return string|null Tax behavior or null.
     */
    protected function get_tax_behavior(\WC_Product $product): ?string
    {
    }
    /**
     * Get product review count.
     *
     * @since 10.5.0
     * @param \WC_Product $product Product object.
     * @return int|null Number of reviews or null.
     */
    protected function get_product_review_count(\WC_Product $product): ?int
    {
    }
    /**
     * Get product review rating.
     *
     * @since 10.5.0
     * @param \WC_Product $product Product object.
     * @return float|null Average rating (1-5 scale) or null.
     */
    protected function get_product_review_rating(\WC_Product $product): ?float
    {
    }
    /**
     * Get delete flag.
     *
     * Always returns null for products being included in the feed.
     * This field is used to mark products for removal from Stripe's catalog.
     *
     * @since 10.5.0
     * @param \WC_Product $product Product object.
     * @return null Always null for active products.
     */
    protected function get_delete(\WC_Product $product): ?string
    {
    }
    /**
     * Get shipping options.
     *
     * Format: country:region:service:speed:price
     * Multiple entries separated by commas.
     *
     * @since 10.5.0
     * @return string|null Shipping data string or null.
     */
    protected function get_shipping(): ?string
    {
    }
    /**
     * Get attribute or return null.
     *
     * @since 10.5.0
     * @param \WC_Product $product   Product object.
     * @param string      $attribute Attribute name.
     * @return string|null Attribute value or null.
     */
    private function get_attribute_or_return_null(\WC_Product $product, string $attribute): ?string
    {
    }
    /**
     * Get weight unit.
     *
     * @since 10.5.0
     * @return string Weight unit.
     */
    private function get_weight_unit(): string
    {
    }
    /**
     * Format dimension with unit.
     *
     * @since 10.5.0
     * @param string|null $dimension Dimension value.
     * @return string|null Formatted dimension or null.
     */
    private function format_dimension(?string $dimension): ?string
    {
    }
    /**
     * Get dimension unit.
     *
     * @since 10.5.0
     * @return string Dimension unit.
     */
    private function get_dimension_unit(): string
    {
    }
    /**
     * Get main product image.
     *
     * @since 10.5.0
     * @param \WC_Product      $product        Product object.
     * @param \WC_Product|null $parent_product Parent product for fallback.
     * @return string Product image URL or empty string.
     */
    private function get_main_image(\WC_Product $product, ?\WC_Product $parent_product): string
    {
    }
    /**
     * Get currency code.
     *
     * @since 10.5.0
     * @return string Currency code.
     */
    private function get_currency_code(): string
    {
    }
    /**
     * Format price with currency.
     *
     * @since 10.5.0
     * @param string|null $price    Price value.
     * @param string      $currency Currency code.
     * @return string|null Formatted price or null.
     */
    private function format_price(?string $price, string $currency): ?string
    {
    }
    /**
     * Get sale date range.
     *
     * @since 10.5.0
     * @param \WC_Product $product Product object.
     * @return string|null Sale date range or null.
     */
    private function get_sale_date_range(\WC_Product $product): ?string
    {
    }
    /**
     * Get cached shipping zones (prevents repeated API calls).
     *
     * @since 10.5.0
     * @return array Shipping zones.
     */
    private function get_cached_shipping_zones(): array
    {
    }
    /**
     * Whether the product is a subscription type the feed excludes by default.
     *
     * Exposed so callers can report the exclusion reason without duplicating the
     * type list.
     *
     * @since 10.9.0
     * @param \WC_Product $product Product to check.
     * @return bool
     */
    public static function is_subscription_product(\WC_Product $product): bool
    {
    }
    /**
     * Whether the given product should be included in any Agentic Commerce sync
     * (full feed, inventory updates, archive events).
     *
     * Default is true; integrations such as WC AI Storefront can return false to
     * exclude a product based on merchant-configured visibility settings.
     *
     * @since 10.8.0
     * @param \WC_Product $product Product to check.
     * @return bool
     */
    public static function should_sync_product(\WC_Product $product): bool
    {
    }
}
/**
 * Per-product exclude toggle for Agentic Commerce sync (editor UI).
 *
 * @internal
 * @since 10.9.0
 */
class WC_Stripe_Agentic_Commerce_Product_Meta_Box
{
    /**
     * Product types the toggle renders for, and the only types `save_meta()`
     * persists. The feed syncs `simple` and `variation`; a variation's parent is
     * `variable`, which is where the checkbox lives.
     */
    private const SUPPORTED_TYPES = [\Automattic\WooCommerce\Enums\ProductType::SIMPLE, \Automattic\WooCommerce\Enums\ProductType::VARIABLE];
    /**
     * Register the editor UI hooks. Admin-only — the should-sync filter that
     * enforces the flag during a feed run lives in the exclusion storage class.
     *
     * @since 10.9.0
     * @return void
     */
    public function init(): void
    {
    }
    /**
     * Render the exclude checkbox. Gated on the merchant having Agentic Commerce
     * enabled and the product being a supported type, so it never dangles.
     *
     * @since 10.9.0
     * @return void
     */
    public function render_checkbox(): void
    {
    }
    /**
     * Persist the checkbox state on product save. Re-verifies the nonce since
     * `woocommerce_process_product_meta` is public and callable directly.
     *
     * @since 10.9.0
     * @param int $product_id Product post ID.
     * @return void
     */
    public function save_meta(int $product_id): void
    {
    }
}
/**
 * Resolves WooCommerce products from Stripe external IDs.
 *
 * This is a simple utility class with a single static method. It is tested
 * indirectly through the order mapper and tax calculator tests.
 *
 * @since 10.6.0
 */
class WC_Stripe_Agentic_Commerce_Product_Resolver
{
    /**
     * Resolves a WooCommerce product from an external reference.
     *
     * @since 10.6.0
     * @param int $product_id The parsed product ID.
     * @return WC_Product The product.
     * @throws Exception When no matching product exists.
     */
    public static function resolve_product(int $product_id): \WC_Product
    {
    }
    /**
     * Resolves a WC product ID from a Stripe external reference.
     *
     * Tries SKU first, then a numeric product-ID fallback so catalogs synced
     * under the legacy contract (or SKU-less products) still resolve.
     * Returns 0 on miss.
     *
     * @since 10.7.0
     * @param string $external_reference The reference Stripe sent back.
     * @return int Resolved product ID, or 0 if no match.
     */
    public static function resolve_product_id_by_external_reference(string $external_reference): int
    {
    }
}
/**
 * Computes tax rates for agentic checkout line items using WooCommerce's tax engine.
 *
 * Given a customize_checkout event, resolves each line item's product by
 * SKU, determines the applicable tax class, and returns WooCommerce tax
 * rates in Stripe's rate_data format (percentage-based).
 *
 * @since 10.6.0
 */
class WC_Stripe_Agentic_Commerce_Tax_Calculator
{
    /**
     * Extracts line items from a customization hook event.
     *
     * @since 10.6.0
     * @param WC_Stripe_Agentic_Customize_Checkout_Event $event The customization hook event.
     * @return array<string,int> The line items hash. Line item ID => Product ID.
     * @throws Exception When a SKU cannot be resolved to a product.
     */
    public function extract_line_items_from_customization_hook(\WC_Stripe_Agentic_Customize_Checkout_Event $event): array
    {
    }
    /**
     * Calculates tax rates for each line item in the customize_checkout event.
     *
     * Returns a Stripe-format response array with line_items containing
     * tax_rates in rate_data format. Stripe applies the rates itself —
     * we only provide the rate percentages.
     *
     * @since 10.6.0
     * @param WC_Stripe_Agentic_Customize_Checkout_Event $event      The customization hook event.
     * @param array<string,int>                          $line_items The line items hash. Line item ID => Product ID.
     * @return array The response array in Stripe's expected format.
     */
    public function calculate(\WC_Stripe_Agentic_Customize_Checkout_Event $event, array $line_items): array
    {
    }
    /**
     * Calculates tax rates for a single line item.
     *
     * @since 10.6.0
     * @param string                 $line_item_id The line item ID.
     * @param int                    $product_id   The product ID.
     * @param WC_Stripe_API_Address  $address      The tax address.
     * @return array The line item tax response.
     */
    private function calculate_line_item_taxes(string $line_item_id, int $product_id, \WC_Stripe_API_Address $address): array
    {
    }
    /**
     * Converts WooCommerce tax rates to Stripe's rate_data format.
     *
     * @since 10.6.0
     * @param array $wc_tax_rates Tax rates from WC_Tax::find_rates().
     * @return array Array of Stripe tax rate objects with rate_data.
     */
    private function format_tax_rates(array $wc_tax_rates): array
    {
    }
    /**
     * Maps line items to a callback.
     *
     * @since 10.6.0
     * @param callable $callback   The callback to map the line items.
     * @param array    $line_items The line items.
     * @return array The mapped line items.
     */
    private function map_line_items(callable $callback, array $line_items): array
    {
    }
}
/**
 * Provides typed access to the customize_checkout webhook event data.
 *
 * Stripe sends this event when it needs tax calculations (or shipping
 * options) during the agentic checkout flow. The event contains line
 * items, addresses, and tax configuration.
 *
 * @since 10.6.0
 */
class WC_Stripe_Agentic_Customize_Checkout_Event
{
    /**
     * The raw Stripe event object.
     *
     * @var stdClass
     */
    private \stdClass $event;
    /**
     * Constructor.
     *
     * @since 10.6.0
     * @param stdClass $event The raw Stripe event object.
     */
    public function __construct(\stdClass $event)
    {
    }
    /**
     * Returns the event ID.
     *
     * @since 10.6.0
     * @return string
     */
    public function get_id(): string
    {
    }
    /**
     * Returns the event type.
     *
     * @since 10.6.0
     * @return string
     */
    public function get_type(): string
    {
    }
    /**
     * Returns whether this is a live mode event.
     *
     * @since 10.6.0
     * @return bool
     */
    public function is_livemode(): bool
    {
    }
    /**
     * Returns the currency code in lowercase.
     *
     * @since 10.6.0
     * @return string
     */
    public function get_currency(): string
    {
    }
    /**
     * Returns whether Stripe Tax (automatic tax) is enabled.
     *
     * When true, Stripe handles tax calculation and the merchant
     * should not return custom tax rates.
     *
     * @since 10.6.0
     * @return bool
     */
    public function is_automatic_tax_enabled(): bool
    {
    }
    /**
     * Returns the line items as typed wrapper objects.
     *
     * @since 10.6.0
     * @return WC_Stripe_Agentic_Customize_Checkout_Line_Item[]
     */
    public function get_line_items(): array
    {
    }
    /**
     * Returns the billing address object.
     *
     * Note: The customize_checkout event does not include a separate billing address.
     * The shipping address is used as the billing address for tax/shipping calculations.
     *
     * @since 10.6.0
     * @return WC_Stripe_API_Address
     */
    public function get_billing_address(): \WC_Stripe_API_Address
    {
    }
    /**
     * Returns the shipping address object.
     *
     * @since 10.6.0
     * @return WC_Stripe_API_Address|null
     */
    public function get_shipping_address(): ?\WC_Stripe_API_Address
    {
    }
}
/**
 * Provides typed access to a single customize_checkout line item.
 *
 * Unlike WC_Stripe_Agentic_Line_Item (which wraps a completed checkout
 * session line item using price.external_reference), this class wraps
 * the line_item_details entries from the customize_checkout event
 * which use sku_id for product identification.
 *
 * This is a simple value object with two getters. It is tested indirectly
 * through the tax calculator and customization hook tests.
 *
 * @since 10.6.0
 */
class WC_Stripe_Agentic_Customize_Checkout_Line_Item
{
    /**
     * The raw line item object.
     *
     * @var stdClass
     */
    private \stdClass $item;
    /**
     * Constructor.
     *
     * @since 10.6.0
     * @param stdClass $item The raw line item object from the customize_checkout event.
     */
    public function __construct(\stdClass $item)
    {
    }
    /**
     * Returns the line item ID.
     *
     * @since 10.6.0
     * @return string
     */
    public function get_id(): string
    {
    }
    /**
     * Returns the SKU ID used to look up the WooCommerce product.
     *
     * @since 10.6.0
     * @return string
     */
    public function get_sku_id(): string
    {
    }
    /**
     * Returns the requested quantity.
     *
     * @since 10.6.0
     * @return int
     */
    public function get_quantity(): int
    {
    }
    /**
     * Returns the product name.
     *
     * @since 10.6.0
     * @return string
     */
    public function get_name(): string
    {
    }
}
/**
 * Provides typed access to a single Stripe checkout session line item.
 *
 * The Stripe API returns untyped objects from json_decode(). This class
 * wraps a single line item and provides small, testable getter methods
 * with proper return types and fallback logic.
 *
 * @since 10.6.0
 */
class WC_Stripe_Agentic_Line_Item
{
    /**
     * The raw Stripe line item object.
     *
     * @var object
     */
    private object $item;
    /**
     * Constructor.
     *
     * @since 10.6.0
     * @param object $item The raw Stripe line item object.
     */
    public function __construct(object $item)
    {
    }
    /**
     * Returns the line item ID.
     *
     * @since 10.6.0
     * @return string
     */
    public function get_id(): string
    {
    }
    /**
     * Returns the line item description.
     *
     * @since 10.6.0
     * @return string
     */
    public function get_description(): string
    {
    }
    /**
     * Returns the quantity.
     *
     * @since 10.6.0
     * @return int
     */
    public function get_quantity(): int
    {
    }
    /**
     * Returns the total amount in the smallest currency unit (includes tax).
     *
     * @since 10.6.0
     * @return int
     */
    public function get_amount_total(): int
    {
    }
    /**
     * Returns the tax amount in the smallest currency unit.
     *
     * @since 10.6.0
     * @return int
     */
    public function get_amount_tax(): int
    {
    }
    /**
     * Returns the WooCommerce product ID resolved from the price's external_reference.
     *
     * Tries the merchant SKU first (current sync contract), then falls back to
     * a numeric product-ID lookup so catalogs synced under the legacy
     * "external_reference = product_id" contract — and products without a SKU —
     * keep resolving instead of failing the checkout. Returns 0 when neither
     * path matches a real product.
     *
     * @since 10.6.0
     * @return int
     */
    public function get_product_id(): int
    {
    }
    /**
     * Checks whether this line item has a resolvable WooCommerce product ID.
     *
     * @since 10.6.0
     * @return bool
     */
    public function has_product_id(): bool
    {
    }
}
/**
 * Computes available shipping options for agentic checkout using WooCommerce's shipping engine.
 *
 * Given a customize_checkout event, resolves the destination address from the
 * session, calculates available shipping rates via WooCommerce, and returns them
 * in Stripe's shipping_options format so the AI agent can present them to the customer.
 *
 * @since 10.6.0
 */
class WC_Stripe_Agentic_Shipping_Calculator
{
    /**
     * Calculates available shipping options for the given checkout session.
     *
     * Returns a Stripe-format response array with shipping_options containing
     * each available rate's display name and fixed amount. Returns an empty
     * array when shipping is disabled or no rates are found for the destination.
     *
     * @since 10.6.0
     * @param WC_Stripe_Agentic_Customize_Checkout_Event $event    The customization hook event.
     * @param string                                     $currency The three-letter currency code (e.g. "USD").
     * @return array The response array in Stripe's expected format, or [] when no rates apply.
     * @throws Exception When neither a shipping nor billing address is available.
     */
    public function calculate(\WC_Stripe_Agentic_Customize_Checkout_Event $event, string $currency): array
    {
    }
}
/**
 * Represents an address, as returned by the Stripe API.
 *
 * @since 10.6.0
 */
class WC_Stripe_API_Address
{
    /**
     * The raw Stripe address object.
     *
     * @var stdClass
     */
    private \stdClass $address;
    /**
     * Constructor.
     *
     * @param object $address The raw Stripe address object.
     * @throws \InvalidArgumentException If the address is not a stdClass instance.
     */
    public function __construct($address)
    {
    }
    /**
     * Returns the country code.
     *
     * @since 10.6.0
     * @return string|null
     */
    public function get_country(): ?string
    {
    }
    /**
     * Returns the state or province.
     *
     * @since 10.6.0
     * @return string|null
     */
    public function get_state(): ?string
    {
    }
    /**
     * Returns the postal code.
     *
     * @since 10.6.0
     * @return string|null
     */
    public function get_postal_code(): ?string
    {
    }
    /**
     * Returns the city.
     *
     * @since 10.6.0
     * @return string|null
     */
    public function get_city(): ?string
    {
    }
    /**
     * Returns address line 1.
     *
     * @since 10.6.0
     * @return string|null
     */
    public function get_line1(): ?string
    {
    }
    /**
     * Returns address line 2.
     *
     * @since 10.6.0
     * @return string|null
     */
    public function get_line2(): ?string
    {
    }
    /**
     * Sanitizes an address field value.
     *
     * @param mixed $value The raw value.
     * @return string|null The sanitized string, or null if empty.
     */
    private function sanitize_field($value): ?string
    {
    }
}
/**
 * WC_Stripe_Checkout_Sessions_Ajax_Handler class.
 */
class WC_Stripe_Checkout_Sessions_Ajax_Handler
{
    /**
     * Checkout session metadata value identifying an Adaptive Pricing checkout.
     *
     * @var string
     */
    public const ADAPTIVE_PRICING_CHECKOUT_TYPE = 'adaptive_pricing_checkout';
    /**
     * Initialize hooks.
     *
     * @return void
     */
    public function init_hooks(): void
    {
    }
    /**
     * Create a Stripe Checkout Session and return the client secret.
     *
     * @return void
     */
    public function create_checkout_session(): void
    {
    }
    /**
     * Update a Stripe Checkout Session. Currently only used to update the line items.
     *
     * @since 10.6.0
     * @return void
     */
    public function update_checkout_session(): void
    {
    }
    /**
     * Build the current cart context used to validate Checkout Session updates.
     *
     * @return array
     */
    private function build_cart_context(): array
    {
    }
    /**
     * Recalculate cart totals using the same checkout conditional third-party tax integrations expect.
     *
     * @return void
     */
    private function calculate_cart_totals(): void
    {
    }
    /**
     * Build the line items array for the Stripe Checkout Session request based on the WooCommerce cart contents.
     *
     * @param array|null $cart_context Current cart context.
     * @return array
     */
    private function build_line_items(?array $cart_context = \null): array
    {
    }
    /**
     * Build the payment intent data array, including metadata information.
     *
     * @return array
     */
    private function build_payment_intent_data(): array
    {
    }
}
/**
* Class that handles UPE payment method.
*
* @extends WC_Stripe_Payment_Gateway
*
* @since 5.5.0
*/
class WC_Stripe_UPE_Payment_Gateway extends \WC_Stripe_Payment_Gateway
{
    public const ID = 'stripe';
    /**
     * Upe Available Methods
     *
     * @type WC_Stripe_UPE_Payment_Method[]
     */
    public const UPE_AVAILABLE_METHODS = [\WC_Stripe_Payment_Methods::CARD => \WC_Stripe_UPE_Payment_Method_CC::class, \WC_Stripe_Payment_Methods::ACH => \WC_Stripe_UPE_Payment_Method_ACH::class, \WC_Stripe_Payment_Methods::ALIPAY => \WC_Stripe_UPE_Payment_Method_Alipay::class, \WC_Stripe_Payment_Methods::AMAZON_PAY => \WC_Stripe_UPE_Payment_Method_Amazon_Pay::class, \WC_Stripe_Payment_Methods::BLIK => \WC_Stripe_UPE_Payment_Method_BLIK::class, \WC_Stripe_Payment_Methods::GIROPAY => \WC_Stripe_UPE_Payment_Method_Giropay::class, \WC_Stripe_Payment_Methods::KLARNA => \WC_Stripe_UPE_Payment_Method_Klarna::class, \WC_Stripe_Payment_Methods::AFFIRM => \WC_Stripe_UPE_Payment_Method_Affirm::class, \WC_Stripe_Payment_Methods::AFTERPAY_CLEARPAY => \WC_Stripe_UPE_Payment_Method_Afterpay_Clearpay::class, \WC_Stripe_Payment_Methods::EPS => \WC_Stripe_UPE_Payment_Method_Eps::class, \WC_Stripe_Payment_Methods::BANCONTACT => \WC_Stripe_UPE_Payment_Method_Bancontact::class, \WC_Stripe_Payment_Methods::BOLETO => \WC_Stripe_UPE_Payment_Method_Boleto::class, \WC_Stripe_Payment_Methods::IDEAL => \WC_Stripe_UPE_Payment_Method_Ideal::class, \WC_Stripe_Payment_Methods::OXXO => \WC_Stripe_UPE_Payment_Method_Oxxo::class, \WC_Stripe_Payment_Methods::SEPA_DEBIT => \WC_Stripe_UPE_Payment_Method_Sepa::class, \WC_Stripe_Payment_Methods::P24 => \WC_Stripe_UPE_Payment_Method_P24::class, \WC_Stripe_Payment_Methods::SOFORT => \WC_Stripe_UPE_Payment_Method_Sofort::class, \WC_Stripe_Payment_Methods::MULTIBANCO => \WC_Stripe_UPE_Payment_Method_Multibanco::class, \WC_Stripe_Payment_Methods::LINK => \WC_Stripe_UPE_Payment_Method_Link::class, \WC_Stripe_Payment_Methods::WECHAT_PAY => \WC_Stripe_UPE_Payment_Method_Wechat_Pay::class, \WC_Stripe_Payment_Methods::CASHAPP_PAY => \WC_Stripe_UPE_Payment_Method_Cash_App_Pay::class, \WC_Stripe_Payment_Methods::ACSS_DEBIT => \WC_Stripe_UPE_Payment_Method_ACSS::class, \WC_Stripe_Payment_Methods::BACS_DEBIT => \WC_Stripe_UPE_Payment_Method_Bacs_Debit::class, \WC_Stripe_Payment_Methods::BECS_DEBIT => \WC_Stripe_UPE_Payment_Method_Becs_Debit::class];
    /**
     * Transient name for appearance settings.
     *
     * @deprecated 10.5.0 Appearance is fully managed by the client.
     * @type string
     */
    public const APPEARANCE_TRANSIENT = 'wc_stripe_appearance';
    /**
     * Transient name for appearance settings on the block checkout.
     *
     * @deprecated 10.5.0 Appearance is fully managed by the client.
     * @type string
     */
    public const BLOCKS_APPEARANCE_TRANSIENT = 'wc_stripe_blocks_appearance';
    /**
     * The default layout for the Optimized Checkout.
     *
     * @var string
     */
    public const OPTIMIZED_CHECKOUT_DEFAULT_LAYOUT = 'accordion';
    /**
     * Notices (array)
     *
     * @var array
     */
    public $notices = [];
    /**
     * Is test mode active?
     *
     * @var bool
     */
    public $testmode;
    /**
     * Alternate credit card statement name
     *
     * @var bool
     */
    public $statement_descriptor;
    /**
     * Are saved cards enabled
     *
     * @var bool
     */
    public $saved_cards;
    /**
     * Should SEPA tokens be used for other payment methods (iDEAL and Bancontact).
     *
     * Previously public property that is now private for backwards compatibility.
     * Deprecation notices are triggered via {@see __get()} and {@see __set()}.
     *
     * @var bool
     *
     * @deprecated 10.0.0 Use `sepa_tokens_for_ideal` and `sepa_tokens_for_bancontact` instead.
     */
    private $sepa_tokens_for_other_methods;
    /**
     * Should SEPA tokens be used for iDEAL
     *
     * @var bool
     */
    public $sepa_tokens_for_ideal;
    /**
     * Should SEPA tokens be used for Bancontact
     *
     * @var bool
     */
    public $sepa_tokens_for_bancontact;
    /**
     * Is Single Payment Element enabled?
     *
     * Deprecated property that was previously public and is now private for backwards compatibility.
     * Deprecation notices are triggered via {@see __get()} and {@see __set()}.
     *
     * @var bool
     *
     * @deprecated 9.5.0 Use `oc_enabled`.
     */
    private $spe_enabled;
    /**
     * Is Optimized Checkout enabled?
     *
     * @var bool
     */
    public $oc_enabled;
    /**
     * API access secret key
     *
     * @var string
     */
    public $secret_key;
    /**
     * Api access publishable key
     *
     * @var string
     */
    public $publishable_key;
    /**
     * Instance of WC_Stripe_Intent_Controller.
     *
     * @var WC_Stripe_Intent_Controller
     */
    public $intent_controller;
    /**
     * WC_Stripe_Action_Scheduler_Service instance for scheduling ActionScheduler jobs.
     *
     * @var WC_Stripe_Action_Scheduler_Service
     */
    public $action_scheduler_service;
    /**
     * Array mapping payment method string IDs to classes
     *
     * @var WC_Stripe_UPE_Payment_Method[]
     */
    public $payment_methods = [];
    /**
     * Should we capture Credit cards
     *
     * @var bool
     */
    public $capture;
    /**
     * Do we accept Payment Request?
     *
     * @var bool
     */
    public $payment_request;
    /**
     * Inline CC form styling
     *
     * @var string
     */
    public $inline_cc_form;
    /**
     * Order pay intent
     */
    private $order_pay_intent;
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Returns the payment method instance for the given payment method name.
     *
     * @param $payment_method string The payment method name.
     * @return WC_Stripe_UPE_Payment_Method|null The payment method instance.
     */
    public static function get_payment_method_instance($payment_method)
    {
    }
    /**
     * Returns the HTML for the bundled payment instructions when Optimized Checkout (previously known as Smart Checkout and SPE) is enabled.
     *
     * @return string
     *
     * @deprecated 10.0.0 Use `WC_Stripe_UPE_Payment_Method_OC::get_testing_instructions()` instead.
     */
    public static function get_testing_instructions_for_optimized_checkout()
    {
    }
    /**
     * Expands <number> placeholder tags in testing instructions into copy-to-clipboard button markup.
     *
     * Converts `<number>4242...</number>` into a `<button>` wrapping the number text,
     * with a copy icon and accessible labels.
     *
     * @param string $instructions The testing instructions containing <number> tags.
     * @return string Instructions with <number> tags replaced by copy button HTML.
     */
    public static function expand_copy_button_markup($instructions)
    {
    }
    /**
     * Removes all saved payment methods when the setting to save cards is disabled.
     *
     * @param  array $list         List of payment methods passed from wc_get_customer_saved_methods_list().
     * @param  int   $customer_id  The customer to fetch payment methods for.
     * @return array               Filtered list of customers payment methods.
     */
    public function filter_saved_payment_methods_list($list, $customer_id)
    {
    }
    /**
     * Proceed with current request using new login session (to ensure consistent nonce).
     *
     * @param string $cookie New cookie value.
     */
    public function set_cookie_on_current_request($cookie)
    {
    }
    /**
     * Hides refund through stripe when payment method does not allow refund
     *
     * @param WC_Order $order
     *
     * @return array|bool
     */
    public function can_refund_order($order)
    {
    }
    /**
     * Gets the payment method's icon.
     *
     * @return string The icon HTML.
     */
    public function get_icon()
    {
    }
    /**
     * Initialize Gateway Settings Form Fields.
     */
    public function init_form_fields()
    {
    }
    /**
     * Outputs scripts used for stripe payment
     */
    public function payment_scripts()
    {
    }
    /**
     * Returns the JavaScript configuration object used on the product, cart, and checkout pages.
     *
     * @return array  The configuration object to be loaded to JS.
     */
    public function javascript_params()
    {
    }
    /**
     * Resolves the billing data to localize for the deferred-payment flows (pay for order,
     * change payment method, add payment method).
     *
     * On the pay-for order page, we try to source the billing data from the order, as it's likely the merchant has pre-filled them.
     * Failing that, we fall back to the customer data, which may be available for the logged in users.
     *
     * @param bool             $is_pay_for_order Whether the current page is the validated pay-for-order endpoint.
     * @param WC_Order|null    $order            The order being paid, or null when not pay-for-order/unavailable.
     * @param WC_Customer|null $customer         The current customer, or null when unavailable.
     * @return array|null The billing data array, or null when no usable source exists.
     */
    public function get_deferred_flow_billing_data(bool $is_pay_for_order, ?\WC_Order $order, ?\WC_Customer $customer): ?array
    {
    }
    /**
     * Builds the billing data array from a billing source.
     *
     * @param WC_Order|WC_Customer $source The object to read billing details from.
     * @return array The billing data array.
     */
    private function build_billing_data_from_source($source): array
    {
    }
    /**
     * Returns the list of payment methods that should be excluded from the Payment Element in optimized checkout.
     * The payment method configuration might have some payment methods enabled in Stripe that are not supported in the plugin,
     * so we need to exclude them from the Payment Element.
     *
     * @return string[] List of payment method types to exclude.
     */
    public function get_excluded_payment_method_types(): array
    {
    }
    /**
     * Checks if we are currently on the "Add payment method" page.
     *
     * Extracted as a protected method to allow overriding in tests.
     *
     * @return bool
     */
    protected function is_on_add_payment_method_page(): bool
    {
    }
    /**
     * Checks if we are on a page where the optimized checkout can be shown.
     *
     * @return bool True if we are on a page where the optimized checkout can be shown, false otherwise.
     */
    public function is_valid_optimized_checkout_page(): bool
    {
    }
    /**
     * Whether the single OC element should represent Stripe for the current request.
     *
     * Covers real OC checkout pages (classic and Blocks) plus the Cart/Checkout block editor,
     * where is_checkout() (and thus is_valid_optimized_checkout_page()) is false.
     *
     * @return bool
     */
    public function should_render_optimized_checkout(): bool
    {
    }
    /**
     * Checks whether Optimized Checkout is the active payment strategy for the current request.
     *
     * Distinct from {@see self::is_valid_optimized_checkout_page()} which gates *rendering* to
     * actual checkout pages. This broader check is true wherever OCS-aware token handling should
     * apply (e.g. My Account → Payment Methods, where saved tokens for sub-gateways must still
     * surface under the consolidated 'stripe' gateway).
     *
     * @return bool
     */
    public function is_optimized_checkout_active(): bool
    {
    }
    /**
     * Returns the payment method title.
     *
     * When Optimized Checkout is enabled, returns the title from the OC payment method class.
     *
     * @return string
     */
    public function get_title()
    {
    }
    /**
     * Gets payment method settings to pass to client scripts
     *
     * @return array
     */
    private function get_enabled_payment_method_config()
    {
    }
    /**
     * Returns UPE enabled payment method IDs.
     *
     * @return string[]
     */
    public function get_upe_enabled_payment_method_ids($force_refresh = \false)
    {
    }
    /**
     * Returns the list of enabled payment method types that will function with the current checkout.
     *
     * @param int|null $order_id
     * @return string[]
     */
    public function get_upe_enabled_at_checkout_payment_method_ids($order_id = \null)
    {
    }
    /**
     * Returns the list of available payment method types for UPE.
     * See https://docs.stripe.com/payments/accept-a-payment?platform=web&ui=elements#web-create-intent for a complete list.
     *
     * @return string[]
     */
    public function get_upe_available_payment_methods()
    {
    }
    /**
     * Updates the enabled payment methods.
     *
     * @param string[] $payment_method_ids_to_enable
     */
    public function update_enabled_payment_methods($payment_method_ids_to_enable)
    {
    }
    /**
     * Returns the list of supported payment method types for Stripe.
     *
     * @return string[]
     */
    private function get_stripe_supported_payment_methods()
    {
    }
    /**
     * Renders the UPE input fields needed to get the user's payment information on the checkout page
     */
    public function payment_fields()
    {
    }
    /**
     * Attaches the currency selector div to the classic checkout page.
     * This is used to render the currency selector element in the checkout page.
     *
     * @return void
     * @deprecated 10.6.0 This method is no longer used.
     */
    public function attach_currency_selector_element()
    {
    }
    /**
     * Adds the converted currency information to the order total on the order received page and My Account orders when the order is paid with a different currency than the store currency.
     *
     * @param string            $formatted_total  Total to display.
     * @param WC_Abstract_Order $order            Order data.
     */
    public function add_converted_currency_information(string $formatted_total, $order): string
    {
    }
    /**
     * Returns true if the order's billing country is within the European Economic Area.
     *
     * @param WC_Abstract_Order $order The order object.
     * @return bool
     */
    private function is_eea_customer(\WC_Abstract_Order $order): bool
    {
    }
    /**
     * Shows a notice to the order received page to inform the customer about the currency conversion
     * when the order is paid with a different currency than the store currency.
     *
     * @param WC_Abstract_Order $order The order object.
     *
     * @return void
     */
    public function add_currency_conversion_notice(\WC_Abstract_Order $order): void
    {
    }
    /**
     * Shows a notice in order confirmation emails to inform the customer (or merchant) about the
     * currency conversion when the order is paid with a different currency than the store currency.
     *
     * @since 10.6.0
     *
     * @param WC_Abstract_Order $order         Order data.
     * @param bool              $sent_to_admin Whether the email is being sent to admin or customer.
     * @param bool              $plain_text    Whether the email is plain text (no HTML).
     * @return void
     */
    public function add_email_currency_conversion_notice($order, bool $sent_to_admin = \false, bool $plain_text = \false): void
    {
    }
    /**
     * Process the payment for a given order.
     *
     * @param int   $order_id Reference.
     * @param bool  $retry Should we retry on fail.
     * @param bool  $force_save_source Force save the payment source.
     * @param mixed $previous_error Any error message from previous request.
     * @param bool  $use_order_source Whether to use the source, which should already be attached to the order.
     *
     * @return array|null An array with result of payment and redirect URL, or nothing.
     */
    public function process_payment($order_id, $retry = \true, $force_save_source = \false, $previous_error = \false, $use_order_source = \false)
    {
    }
    /**
     * Process the payment for an order using a deferred intent.
     *
     * @param int $order_id WC Order ID to be paid for.
     *
     * @return array An array with the result of the payment processing, and a redirect URL on success.
     */
    private function process_payment_with_deferred_intent(int $order_id)
    {
    }
    /**
     * Process the payment for an order that has a checkout session attached.
     *
     * @param int    $order_id ID of order to be processed.
     * @param string $checkout_session_id ID of checkout session to be processed.
     * @param bool   $save_payment_method Whether to save the payment method.
     * @param string $selected_payment_type The selected payment type.
     *
     * @return array An array with the result of the payment processing, and a redirect URL on success.
     */
    private function process_payment_with_checkout_session(int $order_id, string $checkout_session_id, bool $save_payment_method = \false, string $selected_payment_type = ''): array
    {
    }
    /**
     * Process the payment for an order that has a payment method attached.
     *
     * @param int $order_id ID of order to be processed.
     *
     * @return array An array with the result of the payment processing, and a redirect URL on success.
     */
    private function process_payment_with_payment_method(int $order_id)
    {
    }
    /**
     * Process the payment for an order that has a confirmation token attached.
     *
     * @param int $order_id ID of order to be processed.
     *
     * @return array An array with the result of the payment processing, and a redirect URL on success.
     */
    private function process_payment_with_confirmation_token(int $order_id)
    {
    }
    /**
     * Handle errors that occur during the payment processing.
     *
     * @param WC_Stripe_Exception $e    The exception that was thrown.
     * @param WC_Order            $order The order that was being processed.
     *
     * @return array
     */
    private function handle_process_payment_error(\WC_Stripe_Exception $e, $order)
    {
    }
    /**
     * Process payment using saved payment method.
     * This follows `process_payment` from the legacy checkout,
     * but uses Payment Methods instead of Sources.
     *
     * @param int $order_id   The order ID being processed.
     * @param bool $can_retry Should we retry on fail.
     *
     * @deprecated 10.5.0 This method is deprecated and will be removed in a future release.
     */
    public function process_payment_with_saved_payment_method($order_id, $can_retry = \true)
    {
    }
    /**
     * Check for a UPE redirect payment method on order received page or setup intent on payment methods page.
     *
     * @since 5.6.0
     * @version 5.6.0
     */
    public function maybe_process_upe_redirect()
    {
    }
    /**
     * Ensure the order is associated to the payment intent.
     *
     * @param int $order_id The order ID.
     * @param string $intent_id The payment intent ID.
     * @return bool
     */
    private function is_order_associated_to_payment_intent(int $order_id, string $intent_id): bool
    {
    }
    /**
     * Ensure the order is associated to the setup intent.
     *
     * @param int $order_id The order ID.
     * @param string $intent_id The setup intent ID.
     * @return bool
     */
    private function is_order_associated_to_setup_intent(int $order_id, string $intent_id): bool
    {
    }
    /**
     * Processes UPE redirect payments.
     *
     * @param int    $order_id The order ID being processed.
     * @param string $intent_id The Stripe setup/payment intent ID for the order payment.
     * @param bool   $save_payment_method Boolean representing whether payment method for order should be saved.
     * @param bool $is_pay_for_order True if processing payment from Pay for Order page. Optional.
     *
     * @since 5.5.0
     * @version 5.5.0
     */
    public function process_upe_redirect_payment($order_id, $intent_id, $save_payment_method, $is_pay_for_order = \false)
    {
    }
    /**
     * Dispatcher for the Checkout Sessions (Adaptive Pricing) return URL. Runs on
     * the order-received page when `wc_stripe_cs=1` is present in the URL, validates
     * the CS-specific nonce + endpoint, and forwards to {@see process_checkout_session_redirect()}.
     *
     * Kept separate from {@see maybe_process_upe_redirect()} so the working PaymentIntent
     * dispatcher is not touched and the CS path has its own nonce + validation lifecycle.
     *
     * @since 10.6.0
     */
    public function maybe_process_checkout_session_redirect(): void
    {
    }
    /**
     * Handles a customer return from the Checkout Sessions (Adaptive Pricing) flow.
     *
     * Symmetric to {@see process_upe_redirect_payment()} for the PaymentIntent flow:
     * fetches the Stripe Checkout Session for the order and decides whether the customer
     * should land on the order-received page (success) or be bounced back to /checkout
     * with a notice (cancel/failure). The order is never marked paid here — the
     * `checkout.session.completed` / `checkout.session.async_payment_*` webhooks are the
     * durable source of truth for payment completion.
     *
     * Cancel/failure branches mirror the PaymentIntent path: customer-initiated
     * cancellations leave the order pending and add a 'notice'-type notice so the
     * customer can retry; hard failures move the order to FAILED and add an 'error'
     * notice. Both redirect to the checkout URL (or pay-for-order URL when applicable).
     *
     * @param int  $order_id         The order ID being processed.
     * @param bool $is_pay_for_order True when the customer is on the pay-for-order endpoint.
     *
     * @since 10.6.0
     */
    public function process_checkout_session_redirect(int $order_id, bool $is_pay_for_order = \false): void
    {
    }
    /**
     * Update order and maybe save payment method for an order after an intent has been created and confirmed.
     *
     * @param WC_Order $order               Order being processed.
     * @param string   $intent_id           Stripe setup/payment ID.
     * @param bool     $save_payment_method Boolean representing whether payment method for order should be saved.
     */
    public function process_order_for_confirmed_intent($order, $intent_id, $save_payment_method)
    {
    }
    /**
     * Converts payment method into object similar to prepared source
     * compatible with wc_stripe_payment_metadata and wc_stripe_generate_payment_request filters.
     *
     * @param object           $payment_method Stripe payment method object response.
     *
     * @return object
     */
    public function prepare_payment_method($payment_method)
    {
    }
    /**
     * Save payment method to order.
     *
     * @param WC_Order $order For to which the source applies.
     * @param stdClass $payment_method Stripe Payment Method.
     */
    public function save_payment_method_to_order($order, $payment_method)
    {
    }
    /**
     * Retries the payment process once an error occurred.
     *
     * @param object   $response          The response from the Stripe API.
     * @param WC_Order $order             An order that is being paid for.
     * @param bool     $retry             A flag that indicates whether another retry should be attempted.
     * @param bool     $force_save_source Force save the payment source.
     * @param mixed    $previous_error    Any error message from previous request.
     * @param bool     $use_order_source  Whether to use the source, which should already be attached to the order.
     * @throws WC_Stripe_Exception If the payment is not accepted.
     * @return array|void
     */
    public function retry_after_error($response, $order, $retry, $force_save_source = \false, $previous_error = \false, $use_order_source = \false)
    {
    }
    /**
     * Returns true if a payment is needed for the current cart or order.
     * Pre-Orders and Subscriptions may not require an upfront payment, so we need to check whether
     * or not the payment is necessary to decide for either a setup intent or a payment intent.
     *
     * @since 5.8.0
     *
     * @param int $order_id The order ID being processed.
     *
     * @return bool Whether a payment is necessary.
     */
    public function is_payment_needed($order_id = \null)
    {
    }
    /**
     * Checks if card on Payment Method is a prepaid card.
     *
     * @since 4.0.6
     * @param object $payment_method
     * @return bool
     */
    public function is_prepaid_card($payment_method)
    {
    }
    /**
     * Get WC User from WC Order.
     *
     * @param WC_Order $order
     *
     * @return WP_User
     */
    public function get_user_from_order($order)
    {
    }
    /**
     * Get WC Stripe Customer from WC Order.
     *
     * @param WC_Order $order
     *
     * @return WC_Stripe_Customer
     */
    public function get_stripe_customer_from_order($order)
    {
    }
    /**
     * Checks if gateway should be available to use.
     *
     * @since 5.6.0
     */
    public function is_available()
    {
    }
    /**
     * Function to be used with array_filter
     * to filter UPE payment methods supported with current checkout
     *
     * @param string $payment_method_id Stripe payment method.
     *
     * @return bool
     */
    public function is_enabled_at_checkout($payment_method_id)
    {
    }
    /**
     * Function to be used with array_filter
     * to filter UPE payment methods that support saved payments
     *
     * @param string $payment_method_id Stripe payment method.
     *
     * @return bool
     */
    public function is_enabled_for_saved_payments($payment_method_id)
    {
    }
    /**
     * Register the subscription hooks for the gateway.
     *
     * @return bool True if the hooks were registered, false otherwise.
     */
    public function maybe_register_gateway_subscription_hooks(): bool
    {
    }
    /**
     * Validates the UPE checkout experience accepted payments field.
     *
     * @param string $key   Field key.
     * @param string $value Field value.
     *
     * @return string Validated field value.
     * @deprecated 10.5.0 This method is deprecated and will be removed in a future release.
     */
    public function validate_upe_checkout_experience_accepted_payments_field($key, $value)
    {
    }
    /**
     * Checks if the setting to allow the user to save cards is enabled.
     *
     * @return bool Whether the setting to allow saved cards is enabled or not.
     */
    public function is_saved_cards_enabled()
    {
    }
    /**
     * Checks if the setting to allow the saving of SEPA tokens for other payment methods (iDEAL and Bancontact) is enabled.
     *
     * @return bool Whether the setting to allow SEPA tokens for other payment methods is enabled.
     *
     * @deprecated 10.0.0 Use is_sepa_tokens_for_ideal_enabled() and is_sepa_tokens_for_bancontact_enabled() instead.
     */
    public function is_sepa_tokens_for_other_methods_enabled()
    {
    }
    /**
     * Checks if the setting to allow the saving of SEPA tokens for iDEAL is enabled.
     *
     * @return bool Whether the setting to allow SEPA tokens for iDEAL is enabled.
     */
    public function is_sepa_tokens_for_ideal_enabled()
    {
    }
    /**
     * Checks if the setting to allow the saving of SEPA tokens for Bancontact is enabled.
     *
     * @return bool Whether the setting to allow SEPA tokens for Bancontact is enabled.
     */
    public function is_sepa_tokens_for_bancontact_enabled()
    {
    }
    /**
     * Checks if the Optimized Checkout setting is enabled.
     *
     * @return bool Whether the Optimized Checkout setting is enabled.
     */
    public function is_oc_enabled()
    {
    }
    /**
     * Checks if Adaptive Pricing is currently supported and active.
     *
     * Delegates to WC_Stripe_Helper::is_adaptive_pricing_supported(). Extracted as a
     * non-static instance method to allow mocking in unit tests.
     *
     * @return bool Whether Adaptive Pricing is supported.
     */
    protected function is_adaptive_pricing_supported(): bool
    {
    }
    /**
     * Set formatted readable payment method title for order,
     * using payment method details from accompanying charge.
     *
     * @param WC_Order      $order WC Order being processed.
     * @param string        $payment_method_type Stripe payment method key.
     * @param stdClass|bool $stripe_payment_method Stripe payment method object.
     *
     * @since 5.5.0
     * @version 5.5.0
     */
    public function set_payment_method_title_for_order($order, $payment_method_type, $stripe_payment_method = \false)
    {
    }
    /**
     * This is overloading the upe checkout experience type on the settings page.
     *
     * @param string $key Field key.
     * @param array  $data Field data.
     * @return string
     *
     * @deprecated 10.5.0 This method is deprecated and will be removed in a future release.
     */
    public function generate_upe_checkout_experience_accepted_payments_html($key, $data)
    {
    }
    /**
     * Extacts the Stripe intent's payment_method_type and payment_method_details values.
     *
     * @param $intent   Stripe's intent response.
     * @return string[] List with 2 values: payment_method_type and payment_method_details.
     */
    private function get_payment_method_data_from_intent($intent)
    {
    }
    /**
     * Adds BNPL debug metadata to the metadata array.
     *
     * @return array
     */
    public function add_bnpl_debug_metadata($metadata, $order)
    {
    }
    /**
     * Returns true when viewing payment methods page.
     *
     * @return bool
     */
    private function is_payment_methods_page()
    {
    }
    /**
     * True if the request contains the values that indicates a redirection after a successful setup intent creation.
     *
     * @return bool
     */
    private function is_setup_intent_success_creation_redirection()
    {
    }
    /**
     * Adds a token to current user from a setup intent id.
     *
     * @param string  $setup_intent_id ID of the setup intent.
     * @param WP_User $user            User to add token to.
     *
     * @return WC_Payment_Token|null The added token or null if an error occurs.
     *
     * @since 5.8.0
     * @version 5.8.0
     */
    public function create_token_from_setup_intent($setup_intent_id, $user)
    {
    }
    /**
     * Wrapper function to manage requests to WC_Stripe_API.
     *
     * @param string     $path   Stripe API endpoint path to query.
     * @param array|null $params Parameters for request body.
     * @param WC_Order   $order  WC Order for request.
     * @param string     $method HTTP method for request.
     *
     * @return object JSON response object.
     */
    protected function stripe_request($path, $params = \null, $order = \null, $method = 'POST')
    {
    }
    /**
     * Returns an array of address data to be used in a Stripe /payment_intents API request.
     *
     * Stripe docs: https://docs.stripe.com/api/payment_intents/create#create_payment_intent-shipping
     *
     * @since 7.7.0
     *
     * @param WC_Order $order Order to fetch address data from.
     *
     * @return array
     */
    private function get_address_data_for_payment_request($order)
    {
    }
    /**
     * Create a payment intent for the order, or update the existing one.
     *
     * @param WC_Order $order The WC Order for which we're handling a payment intent.
     * @param array    $payment_information The payment information to be used for the payment intent.
     * @param bool     $retry Whether we should retry if this processing fails.
     *
     * @throws WC_Stripe_Exception When there's an error creating or updating the payment intent, and can't be retried.
     *
     * @return stdClass
     */
    private function process_payment_intent_for_order(\WC_Order $order, array $payment_information, $retry = \true)
    {
    }
    /**
     * Return specific error messages for payment intent errors.
     *
     * @param stdClass $payment_intent The payment intent object.
     * @return string The error message.
     */
    private function get_payment_intent_error_message($payment_intent)
    {
    }
    /**
     * Create a setup intent for the order.
     *
     * @param WC_Order $order               The WC Order for which we're handling a setup intent.
     * @param array    $payment_information The payment information to be used for the setup intent.
     *
     * @throws WC_Stripe_Exception When there's an error creating the setup intent.
     *
     * @return stdClass
     */
    protected function process_setup_intent_for_order(\WC_Order $order, array $payment_information)
    {
    }
    /**
     * Returns the full bank statement descriptor to use for non-card payments.
     *
     * Uses the locally configured statement descriptor, falling back to the Stripe account-level descriptor.
     *
     * @return string The cleaned statement descriptor, or an empty string when none is configured.
     */
    public function get_full_statement_descriptor()
    {
    }
    /**
     * Collects the payment information needed for processing a payment intent.
     *
     * @param WC_Order $order The WC Order to be paid for.
     * @return array An array containing the payment information for processing a payment intent.
     * @throws WC_Stripe_Exception When there's an error retrieving the payment information.
     */
    protected function prepare_payment_information_from_request(\WC_Order $order)
    {
    }
    /**
     * Add or remove payment information fields for the confirmation token flow.
     *
     * @param array $payment_information The base payment information.
     * @param string $selected_payment_type The selected payment type.
     * @param string $capture_method The capture method to be used.
     * @param WC_Order $order The WC Order being processed.
     * @return array The customized payment information for the confirmation token flow.
     */
    private function prepare_payment_information_for_confirmation_token($payment_information, $selected_payment_type, $capture_method, $order)
    {
    }
    /**
     * Add or remove payment information fields for the payment method flow.
     *
     * @param array $payment_information The base payment information.
     * @param string $selected_payment_type The selected payment type.
     * @param WC_Order $order The WC Order being processed.
     * @return array The customized payment information for the payment method flow.
     */
    private function prepare_payment_information_for_payment_method($payment_information, $selected_payment_type, $order)
    {
    }
    /**
     * Returns the payment method options for the selected payment type.
     *
     * @param string   $selected_payment_type  The selected payment type, e.g. 'klarna'
     * @param WC_Order $order                  The WC Order we are processing a payment for.
     * @param stdClass $payment_method_details The payment method details.
     */
    private function get_payment_method_options($selected_payment_type, $order, $payment_method_details)
    {
    }
    /**
     * Conditionally stores the card brand to the order meta.
     *
     * @param WC_Order $order          The WC Order for which we're processing a payment.
     * @param stdClass $payment_method The payment method object.
     */
    private function maybe_set_preferred_card_brand_for_order(\WC_Order $order, $payment_method)
    {
    }
    /**
     * Returns whether the selected payment method should be saved.
     *
     * We want to save it for subscriptions and when the shopper chooses to,
     * as long as the selected payment method type is reusable.
     *
     * @param int    $order_id            The ID of the order we're processing.
     * @param string $payment_method_type
     *
     * @return boolean
     */
    private function should_save_payment_method_from_request($order_id, $payment_method_type)
    {
    }
    /**
     * Gets the selected payment method type from the request and normalizes its slug for internal use.
     *
     * @return string
     */
    private function get_selected_payment_method_type_from_request()
    {
    }
    /**
     * Gets the express payment type, e.g. google_pay, apple_pay, from the request,
     *   if applicable.
     *
     * @return string|null
     */
    private function get_express_payment_type_from_request()
    {
    }
    /**
     * Save the selected payment method information to the order and as a payment token for the user.
     *
     * @param WC_Order $order                  The WC order for which we're saving the payment method.
     * @param stdClass $payment_method_object  The payment method object retrieved from Stripe.
     * @param string   $payment_method_type    The payment method type, like `card`, `sepa_debit`, etc.
     *
     * @return void
     */
    public function handle_saving_payment_method(\WC_Order $order, \stdClass $payment_method_object, string $payment_method_type): void
    {
    }
    /**
     * Resolves the PaymentMethod that should be saved as a token.
     *
     * Payment methods that are saved as secondary types need special logic to get the saved payment
     * method details. This primarily occurs for Bancontact and iDEAL/Wero, which are saved as SEPA tokens.
     *
     * @param stdClass           $payment_method_object The PaymentMethod object used for the payment.
     * @param object|string|null $charge                The latest charge from the intent, if available.
     *
     * @return stdClass|null The payment method to save, or null. The payment method may need to be
     *                       resolved for payment methods that have been converted to SEPA or similar.
     */
    public function get_reusable_payment_method_for_saving(\stdClass $payment_method_object, $charge)
    {
    }
    /**
     * Set the payment metadata for payment method id.
     *
     * @param WC_Order $order The order.
     * @param string   $payment_method_id The value to be set.
     */
    public function set_payment_method_id_for_order(\WC_Order $order, string $payment_method_id)
    {
    }
    /**
     * Set the payment metadata for payment method id for subscription.
     *
     * @param WC_Subscription $order The order.
     * @param string   $payment_method_id The value to be set.
     */
    public function set_payment_method_id_for_subscription($subscription, string $payment_method_id)
    {
    }
    /**
     * Set the payment metadata for customer id.
     *
     * Set to public so it can be called from confirm_change_payment_from_setup_intent_ajax()
     *
     * @param WC_Order $order The order.
     * @param string   $customer_id The value to be set.
     */
    public function set_customer_id_for_order(\WC_Order $order, string $customer_id)
    {
    }
    /**
     * Set the payment metadata for customer id for subscription.
     *
     * Set to public so it can be called from confirm_change_payment_from_setup_intent_ajax()
     *
     * @param WC_Subscription $subscription The subscription.
     * @param string          $customer_id The value to be set.
     */
    public function set_customer_id_for_subscription($subscription, string $customer_id)
    {
    }
    /**
     * Set the payment metadata for the selected payment type.
     *
     * @param WC_Order $order                 The order for which we're setting the selected payment type.
     * @param string   $selected_payment_type The selected payment type.
     */
    private function set_selected_payment_type_for_order(\WC_Order $order, string $selected_payment_type)
    {
    }
    /**
     * Gets the Stripe customer ID associated with an order, creates one if none is associated.
     *
     * @param WC_Order $order The WC order from which to get the Stripe customer.
     * @return string The Stripe customer ID.
     */
    private function get_customer_id_for_order(\WC_Order $order): string
    {
    }
    /**
     * Throws an exception when the given payment method type is not valid.
     *
     * @param array  $payment_information Payment information to process the payment.
     * @param string $billing_country     Order billing country.
     *
     * @throws WC_Stripe_Exception When the payment method type is not allowed in the given country.
     */
    protected function validate_selected_payment_method_type($payment_information, $billing_country)
    {
    }
    /**
     * Add a new Stripe payment method via the My Account > Payment methods page.
     *
     * This function is called by @see WC_Form_Handler::add_payment_method_action().
     *
     * @return array
     */
    public function add_payment_method()
    {
    }
    /**
     * Returns a URL to process UPE redirect payments.
     *
     * @param WC_Order $order               The WC Order to be paid for.
     * @param bool     $save_payment_method Whether to save the payment method for future use.
     *
     * @return string
     */
    private function get_return_url_for_redirect($order, $save_payment_method)
    {
    }
    /**
     * Returns the URL passed to actions.confirm() / checkout.confirm() in the Checkout Sessions
     * (Adaptive Pricing) flow. Symmetric to {@see get_return_url_for_redirect()} for the
     * PaymentIntent flow: lands on the order-received page but carries disambiguation params
     * + a nonce so {@see process_checkout_session_redirect()} can run on return from a
     * redirect-based payment method (Klarna, iDEAL, Bancontact, etc.) and bounce the
     * customer back to the checkout page on cancel/failure.
     *
     * @param WC_Order $order The WC Order being paid for.
     *
     * @return string
     */
    private function get_return_url_for_checkout_session(\WC_Order $order): string
    {
    }
    /**
     * Retrieves the (possible) existing payment intent for an order and payment method types.
     *
     * @param WC_Order $order The order.
     * @param array    $payment_method_types The payment method types.
     *
     * @return object|null
     *
     * @throws WC_Stripe_Exception
     */
    private function get_existing_compatible_payment_intent($order, $payment_method_types)
    {
    }
    /**
     * Returns the payment method types for the intent creation request, given the selected payment type.
     *
     * @param string $selected_payment_type The payment type the shopper selected, if any.
     * @param int    $order_id              ID of the WC order we're handling.
     * @param string|null $express_payment_type  The express payment type, if any.
     *
     * @return array
     */
    private function get_payment_method_types_for_intent_creation(string $selected_payment_type, int $order_id, ?string $express_payment_type = \null): array
    {
    }
    /**
     * Checks if the save option for a payment method should be displayed or not.
     *
     * @param WC_Stripe_UPE_Payment_Method $payment_method UPE Payment Method instance.
     * @return bool - True if the payment method is reusable and the saved cards feature is enabled for the gateway and there is no subscription item in the cart, false otherwise.
     */
    private function should_upe_payment_method_show_save_option($payment_method)
    {
    }
    /**
     * Determines the gateway ID to set as the subscription order's payment method.
     *
     * Some UPE payment methods use different gateway IDs to process their payments. eg Bancontact uses SEPA tokens, cards use 'stripe' etc.
     * This function will return the correct gateway ID which should be recorded on the subscription so that the correct payment method is used to process future payments.
     *
     * @param WC_Stripe_UPE_Payment_Method $payment_method The UPE payment method instance.
     * @return string The gateway ID to set on the subscription/order.
     */
    protected function get_upe_gateway_id_for_order($payment_method)
    {
    }
    /**
     * Checks if the current page is the order details page.
     *
     * @return bool Whether the current page is the order details page.
     */
    private function is_order_details_page()
    {
    }
    /**
     * Checks if this is a refund request.
     *
     * @return bool Whether this is a refund request.
     */
    private function is_refund_request()
    {
    }
    /**
     * Depending on the payment method used to process the payment, we may need to redirect the user to a URL for further processing.
     *
     * - Voucher payments (Boleto or Oxxo or Multibanco) respond with a hash URL so the client JS code can recognize the response, pull out the necessary args and handle the displaying of the voucher.
     * - Wallet payments (CashApp or WeChat) respond with a hash URL so the client JS code can recognize the response, pull out the necessary args and handle the displaying of the modal.
     * - Other payment methods like Giropay, iDEAL, Alipay etc require a redirect to a URL provided by Stripe.
     * - 3DS Card payments return a hash URL so the client JS code can recognize the response, pull out the necessary PI args and display the 3DS confirmation modal.
     *
     * @param $return_url string The return URL.
     * @param $payment_intent object The payment intent object.
     * @param $payment_information array The payment information.
     * @param $order WC_Order The order.
     * @param $payment_needed bool Whether payment is needed.
     * @return string The redirect URL.
     */
    protected function get_redirect_url($return_url, $payment_intent, $payment_information, $order, $payment_needed)
    {
    }
    /**
     * Saves the default appearance settings to a transient cache.
     *
     * Individual appearance settings are saved for both block and shortcode checkout and also against each theme so that changing the theme will use different transient setting.
     *
     * @deprecated 10.5.0 Appearance is fully managed by the client.
     */
    public function save_appearance_ajax()
    {
    }
    /**
     * Clears the appearance transients when a Block theme is updated or customized.
     * This ensures the UPE appearance is regenerated with the new theme colors.
     *
     * @deprecated 10.5.0 Appearance is fully managed by the client.
     *
     * @param int     $post_id The post ID.
     * @param WP_Post $post    The post object.
     */
    public function clear_appearance_transients_block_theme($post_id, $post)
    {
    }
    /**
     * Clears the appearance transients when a classic theme is updated or customized.
     * This ensures the UPE appearance is regenerated with the new theme colors.
     *
     * @deprecated 10.5.0 Appearance is fully managed by the client.
     */
    public function clear_appearance_transients()
    {
    }
    /**
     * Hide "Pay" and "Cancel" action buttons for pending orders if they take a while to be confirmed.
     *
     * @param array     $actions An array with the default actions.
     * @param \WC_Order $order The order.
     * @return array
     */
    public function filter_my_account_my_orders_actions($actions, $order): array
    {
    }
    /**
     * Checks if Google Pay and Apple Pay (ECE) are enabled.
     *
     * @return bool
     */
    public function is_express_checkout_enabled()
    {
    }
    /**
     * Checks if Google Pay and Apple Pay (ECE) are enabled.
     *
     * @deprecated 10.6.0 Use is_express_checkout_enabled() instead.
     * @return bool
     */
    public function is_payment_request_enabled()
    {
    }
    /**
     * Override the parent admin_options method.
     */
    public function admin_options()
    {
    }
    /**
     * Completes an order without a positive value.
     *
     * @since 10.3.0. Migrated from the legacy checkout.
     *
     * @param \WC_Order $order             The order to complete.
     * @param object    $prepared_source   Payment source and customer data.
     * @param boolean   $force_save_source Whether the payment source must be saved, like when dealing with a Subscription setup.
     * @return array                      Redirection data for `process_payment`.
     */
    public function complete_free_order(\WC_Order $order, object $prepared_source, bool $force_save_source): array
    {
    }
    /**
     * Displays the Stripe fee
     *
     * @since 10.3.0 Migrated from the legacy checkout.
     *
     * @param int $order_id The ID of the order.
     * @return void
     */
    public function display_order_fee(int $order_id): void
    {
    }
    /**
     * Displays the amount the customer actually paid when Adaptive Pricing converted the order into
     * the shopper's local currency. Nothing is rendered for non-Adaptive-Pricing orders.
     *
     * @param int $order_id The ID of the order.
     * @return void
     */
    public function display_paid_by_customer_amount(int $order_id): void
    {
    }
    /**
     * Displays the net total of the transaction without the charges of Stripe.
     *
     * @since 10.3.0 Migrated from the legacy checkout.
     *
     * @param int $order_id The ID of the order.
     * @return void
     */
    public function display_order_payout(int $order_id): void
    {
    }
    /**
     * Adds an error message wrapper to each saved method.
     *
     * @since 10.3.0 Migrated from the legacy checkout.
     *
     * @param WC_Payment_Token $token Payment Token.
     * @return string                 Generated payment method HTML
     */
    public function get_saved_payment_method_option_html($token)
    {
    }
    /**
     * Attached to `woocommerce_payment_successful_result` with a late priority,
     * this method will combine the "naturally" generated redirect URL from
     * WooCommerce and a payment/setup intent secret into a hash, which contains both
     * the secret, and a proper URL, which will confirm whether the intent succeeded.
     *
     * @since 10.3.0 Migrated from the legacy checkout.
     *
     * @param array $result   The result from `process_payment`.
     * @param int   $order_id The ID of the order which is being paid for.
     * @return array
     */
    public function modify_successful_payment_result(array $result, int $order_id): array
    {
    }
    /**
     * Executed between the "Checkout" and "Thank you" pages, this
     * method updates orders based on the status of associated PaymentIntents.
     *
     * @since 10.3.0 Migrated from the legacy checkout.
     *
     * @param \WC_Order $order The order which is in a transitional state.
     * @return void
     */
    public function verify_intent_after_checkout(\WC_Order $order): void
    {
    }
    /**
     * Called after an intent verification succeeds, this allows
     * specific APNs or children of this class to modify its behavior.
     *
     * @param \WC_Order $order The order whose verification succeeded.
     * @param stdClass $intent The Payment Intent object.
     * @return void
     */
    protected function handle_intent_verification_success(\WC_Order $order, \stdClass $intent): void
    {
    }
    /**
     * Called after an intent verification fails, this allows
     * specific APNs or children of this class to modify its behavior.
     *
     * @param \WC_Order $order The order whose verification failed.
     * @param stdClass $intent The Payment Intent object.
     * @return void
     */
    protected function handle_intent_verification_failure(\WC_Order $order, \stdClass $intent): void
    {
    }
    /**
     * Checks if the payment intent associated with an order failed and records the event.
     *
     * @since 10.3.0 Migrated from the legacy checkout.
     *
     * @param \WC_Order $order  The order which should be checked.
     * @param object    $intent The intent, associated with the order.
     * @return void
     */
    public function failed_sca_auth(\WC_Order $order, \stdClass $intent): void
    {
    }
    /**
     * Preserves the "wc-stripe-confirmation" URL parameter so the user can complete the SCA authentication after logging in.
     *
     * @since 10.3.0 Migrated from the legacy checkout.
     *
     * @param string   $pay_url Current computed checkout URL for the given order.
     * @param \WC_Order $order Order object.
     *
     * @return string Checkout URL for the given order.
     */
    public function get_checkout_payment_url(string $pay_url, \WC_Order $order): string
    {
    }
    /**
     * Checks whether new keys are being entered when saving options.
     *
     * @since 10.3.0 Migrated from the legacy checkout.
     *
     * @return void
     */
    public function process_admin_options(): void
    {
    }
    /**
     * Checks whether the gateway is enabled.
     *
     * @since 10.3.0 Migrated from the legacy checkout.
     *
     * @return bool The result.
     */
    public function is_enabled(): bool
    {
    }
    /**
     * Disables gateway.
     *
     * @since 10.3.0 Migrated from the legacy checkout.
     *
     * @return void
     */
    public function disable(): void
    {
    }
    /**
     * Enables gateway.
     *
     * @since 10.3.0 Migrated from the legacy checkout.
     *
     * @return void
     */
    public function enable(): void
    {
    }
    /**
     * Returns whether test_mode is active for the gateway.
     *
     * @since 10.3.0 Migrated from the legacy checkout.
     *
     * @return boolean Test mode enabled if true, disabled if false.
     */
    public function is_in_test_mode(): bool
    {
    }
    /**
     * Determines whether the "automatic" or "manual" capture setting is enabled.
     *
     * @since 10.3.0 Migrated from the legacy checkout.
     *
     * @return bool
     */
    public function is_automatic_capture_enabled(): bool
    {
    }
    /**
     * Determine if the gateway still requires setup.
     *
     * @since 10.3.0 Migrated from the legacy checkout.
     *
     * @return bool
     */
    public function needs_setup(): bool
    {
    }
    /**
     * Validates a field value before updating.
     *
     * @since 10.3.0 Migrated from the legacy checkout.
     *
     * @param string       $field_key the form field key.
     * @param string|array $field_value the form field value.
     *
     * @return bool True if the value was updated, false otherwise.
     */
    public function update_validated_option(string $field_key, $field_value): bool
    {
    }
    /**
     * Retrieves validated field value.
     *
     * @since 10.3.0 Migrated from the legacy checkout.
     *
     * @param string       $field_key the form field key.
     * @param string|array $empty_value fallback value.
     *
     * @return string|array validated field value.
     */
    public function get_validated_option(string $field_key, $empty_value = \null)
    {
    }
    /**
     * Returns a user's saved tokens for this gateway.
     *
     * @since 10.6.0
     * @return array
     */
    public function get_tokens()
    {
    }
    /**
     * Ensures validated field values.
     *
     * @param string       $field_key the form field key.
     * @param string|array $field_value the form field value.
     *
     * @return string|array validated field value.
     */
    private function validate_field(string $field_key, $field_value)
    {
    }
    /**
     * Fetches the checkout session object from the order meta and retrieves the session details from Stripe.
     *
     * @param WC_Order $order                 The order whose checkout session should be fetched.
     * @param bool     $force_refresh         When true, bypasses the database cache and always
     *                                        fetches a fresh session from Stripe. Use this when
     *                                        the freshness of `status` / `payment_status` /
     *                                        `last_payment_error` matters (e.g. handling a
     *                                        customer return from a redirect-based payment method).
     * @param bool     $expand_payment_intent When true, requests the session with `expand[]=payment_intent`
     *                                        so `last_payment_error` is available on the returned object.
     *                                        Only used by the redirect-return handler; other call sites
     *                                        (e.g. presentment metadata population) don't need the
     *                                        extra payload.
     *
     * @return object|null The checkout session object, or null if it could not be retrieved.
     */
    private function get_checkout_session_from_order(\WC_Order $order, bool $force_refresh = \false, bool $expand_payment_intent = \false): ?object
    {
    }
    /**
     * Adds presentment amount and currency metadata to the order if they are not already set.
     *
     * @param WC_Order $order The order to which the presentment metadata should be added.
     *
     * @return void
     */
    private function maybe_add_presentment_metadata_to_order(\WC_Order $order): void
    {
    }
    /**
     * Prepares the data for the currency conversion notice based on the presentment amount and currency stored in the order meta.
     *
     * @param WC_Abstract_Order $order The order for which the currency conversion notice data should be prepared.
     *
     * @return array|null
     */
    private function get_currency_conversion_notice_data($order): ?array
    {
    }
    /**
     * Prepares the presentment amount and currency data based on the order meta to be used in the order details and emails.
     *
     * @param WC_Abstract_Order $order The order for which the presentment data should be prepared.
     *
     * @return array|null
     */
    private function get_presentment_data_from_order($order): ?array
    {
    }
    /**
     * Magic setter to add warnings for deprecated properties.
     *
     * @param string $name  Property name.
     * @param mixed  $value Value being assigned.
     * @return void
     */
    public function __set($name, $value)
    {
    }
    /**
     * Magic getter to add warnings for deprecated properties.
     *
     * @param string $name Property name.
     * @return mixed
     */
    public function __get($name)
    {
    }
}
/**
 * WC_Gateway_Stripe class. Temporarily extends WC_Stripe_UPE_Payment_Gateway for backward compatibility.
 *
 * @deprecated Deprecated in favor of WC_Stripe_UPE_Payment_Gateway. To be removed in a future version.
 */
class WC_Gateway_Stripe extends \WC_Stripe_UPE_Payment_Gateway
{
}
/**
 * WC_Stripe_Account class.
 *
 * Communicates with Stripe API.
 */
class WC_Stripe_Account
{
    /**
     * The Account Data cache key.
     *
     * @var string
     */
    public const ACCOUNT_CACHE_KEY = 'account_data';
    /**
     * The Account Data cache expiration (TTL).
     *
     * @var int
     */
    public const ACCOUNT_CACHE_EXPIRATION = 2 * \HOUR_IN_SECONDS;
    public const LIVE_WEBHOOK_STATUS_OPTION = 'wcstripe_webhook_status_live';
    public const TEST_WEBHOOK_STATUS_OPTION = 'wcstripe_webhook_status_test';
    public const STATUS_COMPLETE = 'complete';
    public const STATUS_NO_ACCOUNT = 'NOACCOUNT';
    public const STATUS_RESTRICTED_SOON = 'restricted_soon';
    public const STATUS_RESTRICTED = 'restricted';
    /**
     * List of webhook events that this plugin listens to.
     * Based on WC_Stripe_Webhook_Handler::process_webhook()
     */
    public const WEBHOOK_EVENTS = ['account.updated', 'source.chargeable', 'source.canceled', 'charge.succeeded', 'charge.failed', 'charge.captured', 'charge.dispute.created', 'charge.dispute.closed', 'charge.refunded', 'charge.refund.updated', 'review.opened', 'review.closed', 'payment_intent.processing', 'payment_intent.succeeded', 'payment_intent.payment_failed', 'payment_intent.amount_capturable_updated', 'payment_intent.requires_action', 'setup_intent.succeeded', 'setup_intent.setup_failed', 'checkout.session.completed', 'checkout.session.expired', 'checkout.session.async_payment_succeeded', 'checkout.session.async_payment_failed'];
    /**
     * The Stripe connect instance.
     *
     * @var WC_Stripe_Connect
     */
    private $connect;
    /**
     * The Stripe API class to access the static method.
     *
     * @var WC_Stripe_API
     */
    private $stripe_api;
    /**
     * Constructor
     *
     * @param WC_Stripe_Connect $connect Stripe connect
     * @param string $stripe_api Stripe API class
     */
    public function __construct(\WC_Stripe_Connect $connect, $stripe_api)
    {
    }
    /**
     * Gets and caches the data for the account connected to this site.
     *
     * @param string|null $mode          Optional. The mode to get the account data for. 'live' or 'test'. Default will use the current mode.
     * @param bool        $force_refresh Optional. Whether to fetch the account data from Stripe instead of using the cache. Default is false.
     * @return array Account data or empty if failed to retrieve account data.
     */
    public function get_cached_account_data($mode = \null, bool $force_refresh = \false)
    {
    }
    /**
     * Read the account from the WP option we cache it in.
     *
     * @return array empty when no data found, otherwise returns the cached data
     */
    private function read_account_from_cache()
    {
    }
    /**
     * Caches account data for a period of time.
     *
     * @param string|null $mode Optional. The mode to get the account data for. 'live' or 'test'. Default will use the current mode.
     */
    private function cache_account($mode = \null)
    {
    }
    /**
     * Re-reads the account data from Stripe and drops the cached webhook status.
     *
     * A failed fetch (network error, Stripe outage) leaves the previously cached account data in
     * place so the UI keeps rendering the last known account; an invalid API key does not, so the
     * reconnect prompt can still surface.
     *
     * @return array Account data or empty if failed to retrieve account data.
     */
    public function refresh_cache()
    {
    }
    /**
     * Wipes the account data option.
     */
    public function clear_cache()
    {
    }
    /**
     * Wipes the cached webhook status for both modes.
     */
    private function clear_webhook_status_cache(): void
    {
    }
    /**
     * Indicates whether the account has any pending requirements that could cause the account to be restricted.
     *
     * @return bool True if account has pending restrictions, false otherwise.
     */
    public function has_pending_requirements()
    {
    }
    /**
     * Indicates whether the account has any overdue requirements that could cause the account to be restricted.
     *
     * @return bool True if account has overdue restrictions, false otherwise.
     */
    public function has_overdue_requirements()
    {
    }
    /**
     * Returns the account's Stripe status (completed, restricted_soon, restricted).
     *
     * @return string The account's status.
     */
    public function get_account_status()
    {
    }
    /**
     * Returns the Stripe's account supported currencies.
     *
     * @return string[] Supported store currencies.
     */
    public function get_supported_store_currencies(): array
    {
    }
    /**
     * Gets the account default currency.
     *
     * @return string Currency code in lowercase.
     */
    public function get_account_default_currency(): string
    {
    }
    /**
     * Returns the Stripe account's card payment bank statement prefix.
     *
     * Merchants can set this in their Stripe settings at: https://dashboard.stripe.com/settings/public.
     *
     * @return string The Stripe Accounts card statement prefix.
     */
    public function get_card_statement_prefix()
    {
    }
    /**
     * Gets the account country.
     *
     * @return string Country.
     */
    public function get_account_country()
    {
    }
    /**
     * Configures webhooks for the account.
     *
     * @param string $mode The mode to configure webhooks for. Either 'live' or 'test'. Default is 'live'.
     *
     * @throws Exception If there was a problem setting up the webhooks.
     * @return object The response from the API.
     */
    public function configure_webhooks($mode = 'live')
    {
    }
    /**
     * Deletes any previously configured webhooks that are sent to the current site's webhook URL.
     *
     * @param string $exclude_webhook_id Webhook ID to exclude from deletion.
     */
    public function delete_previously_configured_webhooks($exclude_webhook_id = '')
    {
    }
    /**
     * Decommissions a previously configured webhook endpoint when the secret key that
     * created it is being removed or replaced.
     *
     * @param mixed  $webhook_data   The previously stored webhook data. Expected to contain 'id' and 'secret'.
     * @param string $new_secret_key The secret key that is about to be saved. Empty when disconnecting.
     *
     * @return bool True if a webhook was decommissioned, false otherwise.
     */
    public function maybe_decommission_webhook($webhook_data, $new_secret_key): bool
    {
    }
    /**
     * Determine if the webhook is enabled by checking with Stripe.
     *
     * @return bool
     */
    public function is_webhook_enabled()
    {
    }
    /**
     * Checks if the enabled events in an existing webhook differ from our desired events.
     *
     * @param object $existing_webhook The existing webhook object from Stripe.
     * @return bool True if events differ, false if they match.
     */
    private function do_webhook_events_differ($existing_webhook)
    {
    }
    /**
     * Checks if the API version of an existing webhook differs from our desired API version.
     *
     * @param object $existing_webhook The existing webhook object from Stripe.
     * @return bool True if API version differs, false if they match.
     */
    private function does_webhooks_api_version_differ($existing_webhook): bool
    {
    }
    /**
     * Returns the API version for the webhooks.
     *
     * @return string The API version.
     */
    private static function get_webhooks_api_version(): string
    {
    }
    /**
     * Gets the existing webhook for the site's URL.
     *
     * @return object|false The webhook object if found, false otherwise.
     */
    public function get_existing_webhook()
    {
    }
    /**
     * Reconfigures webhooks during plugin update or when admin enables Adaptive Pricing in the settings.
     * This ensures webhooks are updated with any new events that may have been added.
     * Only reconfigures if there's an existing webhook and its events differ from desired events.
     *
     * @param string $update_type The type of update that is happening. Default is 'plugin'.
     * Possible values are:
     *  - 'plugin': Reconfigures webhooks during plugin update.
     *  - 'settings': Reconfigures webhooks when Adaptive Pricing is enabled in the settings.
     * @return void
     */
    public function maybe_reconfigure_webhooks_on_update(string $update_type = 'plugin')
    {
    }
}
/**
 * Class which handles setting up all ActionScheduler hooks.
 */
class WC_Stripe_Action_Scheduler_Service
{
    public const GROUP_ID = 'woocommerce_stripe';
    /**
     * Schedule an action scheduler job. Also unschedules (replaces) any previous instances of the same job.
     * This prevents duplicate jobs, for example when multiple events fire as part of the order update process.
     * The `as_unschedule_action` function will only replace a job which has the same $hook, $args AND $group.
     *
     * @param int    $timestamp - When the job will run.
     * @param string $hook      - The hook to trigger.
     * @param array  $args      - An array containing the arguments to be passed to the hook.
     * @param string $group     - The AS group the action will be created under.
     *
     * @return void
     */
    public function schedule_job(int $timestamp, string $hook, array $args = [], string $group = self::GROUP_ID)
    {
    }
}
/**
 * Tracks whether the Stripe API is currently experiencing an outage.
 *
 * Outages are detected from API responses (network failures, timeouts, 5xx
 * status codes) and recorded in a transient so that other parts of the plugin
 * (admin notices, REST endpoints, payment methods) can react without each
 * having to make their own probe request to Stripe.
 *
 * 4xx responses are NOT treated as outages: they confirm Stripe is reachable
 * and our request was rejected for a non-outage reason (auth, validation, etc.).
 */
class WC_Stripe_API_Outage_Status
{
    /**
     * Transient key used to store the outage state.
     */
    public const OUTAGE_TRANSIENT_KEY = 'wc_stripe_api_outage';
    /**
     * How long an outage is considered active without a fresh signal.
     *
     * Short enough that a recovered Stripe API stops being flagged quickly,
     * long enough that we don't repeatedly hammer Stripe to re-confirm.
     */
    public const OUTAGE_TTL = 10 * \MINUTE_IN_SECONDS;
    /**
     * HTTP status codes that indicate a Stripe-side outage.
     *
     * 5xx means Stripe accepted the request but failed to serve it. We keep
     * this list narrow on purpose so admin/auth issues stay in the existing
     * error paths.
     */
    private const OUTAGE_STATUS_CODES = [500, 502, 503, 504];
    /**
     * Determine whether a wp_remote_* response indicates a Stripe outage.
     *
     * @param array|WP_Error $response The raw response from wp_safe_remote_*.
     * @return bool
     */
    public static function is_outage_response($response): bool
    {
    }
    /**
     * Record that an outage is currently happening.
     *
     * Preserves the original `detected_at` timestamp on subsequent calls so the
     * recorded outage start time reflects when it actually began.
     */
    public static function record_outage(): void
    {
    }
    /**
     * Clear the outage state.
     *
     * Called when we receive a non-outage response — including 4xx — because
     * any response from Stripe servers proves the API is reachable.
     */
    public static function record_success(): void
    {
    }
    /**
     * Whether an outage is currently flagged.
     */
    public static function is_in_outage(): bool
    {
    }
}
/**
 * WC_Stripe_API class.
 *
 * Communicates with Stripe API.
 */
class WC_Stripe_API
{
    /**
     * Stripe API Endpoint
     */
    public const ENDPOINT = 'https://api.stripe.com/v1/';
    public const STRIPE_API_VERSION = '2026-03-25.dahlia';
    public const AGENTIC_COMMERCE_API_VERSION = '2025-12-15.preview';
    /**
     * The invalid API key error count cache key.
     *
     * @var string
     */
    public const INVALID_API_KEY_ERROR_COUNT_CACHE_KEY = 'invalid_api_key_error_count';
    /**
     * The invalid API key error count cache timeout.
     * This is the delay in seconds enforced for Stripe API calls after the consecutive error count threshold is reached.
     *
     * @var int
     */
    protected const INVALID_API_KEY_ERROR_COUNT_CACHE_TIMEOUT = 2 * \HOUR_IN_SECONDS;
    /**
     * The invalid API key error count threshold.
     *
     * @var int
     */
    protected const INVALID_API_KEY_ERROR_COUNT_THRESHOLD = 5;
    /**
     * Secret API Key.
     *
     * @var string
     */
    private static $secret_key = '';
    /**
     * Instance of WC_Stripe_API.
     *
     * @var WC_Stripe_API
     */
    private static $instance;
    /**
     * Get instance of WC_Stripe_API.
     *
     * @return WC_Stripe_API
     */
    public static function get_instance()
    {
    }
    /**
     * Set instance of WC_Stripe_API.
     *
     * @param WC_Stripe_API $instance
     */
    public static function set_instance($instance)
    {
    }
    /**
     * Set secret API Key.
     *
     * @param string $key
     */
    public static function set_secret_key($secret_key)
    {
    }
    /**
     * Get secret key.
     *
     * @return string
     */
    public static function get_secret_key()
    {
    }
    /**
     * Set secret key based on mode.
     *
     * @param string|null $mode Optional. The mode to set the secret key for. 'live' or 'test'. Default will set the secret for the currently active mode.
     */
    public static function set_secret_key_for_mode($mode = \null)
    {
    }
    /**
     * Generates the user agent we use to pass to API request so
     * Stripe can identify our application.
     *
     * @since 4.0.0
     * @version 4.0.0
     */
    public static function get_user_agent()
    {
    }
    /**
     * Generates the headers to pass to API request.
     *
     * @since 4.0.0
     * @version 4.0.0
     */
    public static function get_headers()
    {
    }
    /**
     * Generates the idempotency key for the request.
     *
     * @param string $api The API endpoint.
     * @param string $method The HTTP method.
     * @param array  $request The request parameters.
     * @return string|null The idempotency key.
     */
    public static function get_idempotency_key($api, $method, $request)
    {
    }
    /**
     * Send the request to Stripe's API
     *
     * @since 3.1.0
     * @version 4.0.6
     * @param array  $request
     * @param string $api
     * @param string $method
     * @param bool   $with_headers To get the response with headers.
     * @return stdClass|array
     * @throws WC_Stripe_Exception
     */
    public static function request($request, $api = 'charges', $method = 'POST', $with_headers = \false)
    {
    }
    /**
     * Retrieve API endpoint.
     *
     * @since 4.0.0
     * @version 4.0.0
     * @param string $api
     */
    public static function retrieve($api)
    {
    }
    /**
     * Send the request to Stripe's API with level 3 data generated
     * from the order. If the request fails due to an error related
     * to level3 data, make the request again without it to allow
     * the payment to go through.
     *
     * @since 4.3.2
     * @version 5.1.0
     *
     * @param array    $request     Array with request parameters.
     * @param string   $api         The API path for the request.
     * @param array    $level3_data The level 3 data for this request.
     * @param WC_Order $order       The order associated with the payment.
     *
     * @return stdClass|array The response
     */
    public static function request_with_level3_data($request, $api, $level3_data, $order)
    {
    }
    /**
     * Returns a payment method object from Stripe given an ID. Accepts both 'src_xxx' and 'pm_xxx'
     * style IDs for backwards compatibility.
     *
     * @param string $payment_method_id The ID of the payment method to retrieve.
     *
     * @return stdClass  The payment method object.
     */
    public static function get_payment_method(string $payment_method_id)
    {
    }
    /**
     * Update payment method data.
     *
     * @param string $payment_method_id   Payment method ID.
     * @param array  $payment_method_data Payment method updated data.
     *
     * @return array Payment method details.
     *
     * @throws WC_Stripe_Exception If payment method update fails.
     */
    public static function update_payment_method($payment_method_id, $payment_method_data = [])
    {
    }
    /**
     * Attaches a payment method to the given customer.
     *
     * @param string $customer_id        The ID of the customer the payment method should be attached to.
     * @param string $payment_method_id  The payment method that should be attached to the customer.
     *
     * @return stdClass|array  The response from the API request.
     * @throws WC_Stripe_Exception
     */
    public static function attach_payment_method_to_customer(string $customer_id, string $payment_method_id)
    {
    }
    /**
     * Detaches a payment method from the given customer.
     *
     * @param string $customer_id        The ID of the customer that contains the payment method that should be detached.
     * @param string $payment_method_id  The ID of the payment method that should be detached.
     *
     * @return  stdClass|array  The response from the API request
     * @throws WC_Stripe_Exception
     */
    public static function detach_payment_method_from_customer(string $customer_id, string $payment_method_id)
    {
    }
    /**
     * Checks if a payment method should be detached from a customer.
     *
     * If the site is a staging/local/development site in live mode, we should not detach the payment method
     * from the customer to avoid detaching it from the production site.
     *
     * @return bool True if the payment should be detached, false otherwise.
     */
    public static function should_detach_payment_method_from_customer()
    {
    }
    /**
     * Checks if the site has WooCommerce Subscriptions staging mode enabled.
     *
     * @return bool True if the site has WooCommerce Subscriptions active and staging mode enabled, false otherwise.
     */
    private static function is_woocommerce_subscriptions_staging_mode()
    {
    }
    /**
     * Get the payment method configuration.
     *
     * @return array The response from the API request.
     */
    public function get_payment_method_configurations()
    {
    }
    /**
     * Update the payment method configuration.
     *
     * @param array $payment_method_configurations The payment method configurations to update.
     */
    public function update_payment_method_configurations($id, $payment_method_configurations)
    {
    }
    /**
     * Log an error response from the Stripe API.
     *
     * @param array|WP_Error $response HTTP response or error.
     * @param string         $api      The API endpoint.
     * @param string         $method   The HTTP method used for the request.
     * @param array          $data     Additional data to add to the log.
     * @return void
     */
    private static function log_error_response($response, string $api, string $method, array $data = []): void
    {
    }
    /**
     * Returns the Stripe's request_id associated with the response.
     *
     * @param array|WP_Error $response HTTP response.
     *
     * @return string The Stripe's request_id associated with the response or null if not present.
     */
    private static function get_stripe_request_id($response)
    {
    }
    /**
     * Get the masked secret key.
     * It uses the same pattern as the Stripe dashboard: sk_live_...JLWaeq.
     *
     * @return string The masked secret key.
     */
    public static function get_masked_secret_key(): string
    {
    }
}
class WC_Stripe_Apple_Pay_Registration
{
    /**
     * Cached Stripe settings.
     *
     * @var
     */
    private $stripe_settings;
    /**
     * Current domain name.
     *
     * @var string
     */
    private $domain_name;
    /**
     * Stores Apple Pay domain registration issues.
     *
     * @var string
     */
    public $apple_pay_registration_notice;
    public function __construct()
    {
    }
    /**
     * Gets the Stripe settings.
     *
     * @since 4.0.6
     * @param string $setting
     * @param string default
     * @return string $setting_value
     */
    public function get_option($setting = '', $default_value = '')
    {
    }
    /**
     * Whether the domain is set.
     *
     * @return bool
     */
    public function is_domain_set()
    {
    }
    /**
     * Whether the gateway and Express Checkout Buttons (prerequisites for Apple Pay) are enabled.
     *
     * @since 4.5.4
     * @return string Whether Apple Pay required settings are enabled.
     */
    private function is_enabled()
    {
    }
    /**
     * Gets the Stripe secret key for the current mode.
     *
     * @since 4.5.3
     * @version 4.9.0
     *
     * @param array $settings Optional. The Stripe settings to check.
     *
     * @return string Secret key.
     */
    private function get_secret_key($settings = \null)
    {
    }
    /**
     * Trigger Apple Pay registration upon domain name change.
     *
     * Note: This will also cover the case where Apple Pay is enabled
     * for the first time for the current domain.
     *
     * @since 4.9.0
     */
    public function register_domain_on_domain_name_change()
    {
    }
    /**
     * Makes request to register the domain with Stripe.
     *
     * @param string $secret_key
     * @throws Exception If domain registration request fails.
     * @since 3.1.0
     * @version 4.9.0
     */
    private function make_domain_registration_request($secret_key)
    {
    }
    /**
     * Processes a payment method domain registration.
     *
     * @since 3.1.0
     * @version 4.5.4
     *
     * @param string $secret_key
     *
     * @return bool Whether domain registration succeeded.
     */
    public function register_domain($secret_key)
    {
    }
    /**
     * Process the Apple Pay domain registration if proper settings are configured.
     *
     * @since 4.5.4
     * @version 4.9.0
     */
    public function register_domain_if_configured()
    {
    }
    /**
     * Conditionally process the Apple Pay domain registration after settings are updated.
     *
     * @param array $prev_settings The settings before the update.
     * @param array $settings The settings after the update.
     *
     * @return void
     * @since 4.5.3
     * @version 4.5.4
     */
    public function register_domain_on_updated_settings($prev_settings, $settings)
    {
    }
    /**
     * Display any admin notices to the user.
     *
     * @since 4.0.6
     */
    public function admin_notices()
    {
    }
    /**
     * Returns whether Apple Pay can be registered.
     *
     * @since 7.6.0
     *
     * @return boolean
     */
    private function is_available(): bool
    {
    }
}
/**
 * WC_Stripe_Blocks_Support class.
 */
final class WC_Stripe_Blocks_Support extends \Automattic\WooCommerce\Blocks\Payments\Integrations\AbstractPaymentMethodType
{
    /**
     * Handle for our integration script for block cart and checkout.
     *
     * @var string
     */
    private const BLOCKS_SCRIPT_HANDLE = 'wc-stripe-blocks-integration';
    /**
     * Handle for our stylesheet for block cart and checkout.
     *
     * @var string
     */
    private const BLOCKS_STYLE_HANDLE = 'wc-stripe-blocks-checkout-style';
    /**
     * Payment method name defined by payment methods extending this class.
     *
     * @var string
     */
    protected $name = 'stripe';
    /**
     * The Express Checkout configuration class used for Shortcode PRBs. We use it here to retrieve
     * the same configurations.
     *
     * @var WC_Stripe_Express_Checkout_Element
     */
    private $express_checkout_configuration;
    /**
     * Local cache for the UPE blocks asset metadata. Used to avoid multiple file reads.
     *
     * @var array{version: string, dependencies: array}|null
     */
    private $blocks_asset = \null;
    /**
     * Constructor
     *
     * @param mixed                                   $payment_request_configuration The Stripe Payment Request configuration used for Payment Request buttons (removed).
     * @param WC_Stripe_Express_Checkout_Element|null $express_checkout_configuration The Stripe Express Checkout configuration used for Express Checkout buttons.
     *
     * @deprecated Parameter $payment_request_configuration is deprecated since version 10.4.0 and will be removed in later versions.
     */
    public function __construct($payment_request_configuration = \null, ?\WC_Stripe_Express_Checkout_Element $express_checkout_configuration = \null)
    {
    }
    /**
     * Initializes the payment method type.
     *
     * @return void
     */
    public function initialize()
    {
    }
    /**
     * Returns if this payment method should be active. If false, the scripts will not be enqueued.
     *
     * @return boolean
     */
    public function is_active()
    {
    }
    /**
     * Returns an array of scripts/handles to be registered for this payment method.
     *
     * @return array
     */
    public function get_payment_method_script_handles(): array
    {
    }
    /**
     * Registers the UPE JS scripts.
     *
     * @return void
     */
    private function register_upe_payment_method_script_handles(): void
    {
    }
    /**
     * Registers our stylesheet for block cart and checkout.
     *
     * @return void
     */
    private function register_upe_payment_method_style_handle(): void
    {
    }
    /**
     * Get the build metadata for the UPE blocks bundle, with fallback logic when the file doesn't exist.
     *
     * @return array{version: string, dependencies: array} The build version and script dependencies.
     */
    private function get_upe_blocks_asset(): array
    {
    }
    /**
     * Enqueue the block stylesheet when the Cart or Checkout block renders AND
     * our blocks script has also been enqueued.
     *
     * Implemented to run as a filter callback for `render_block_woocommerce/cart`
     * and `render_block_woocommerce/checkout`, so the content MUST be returned as-is.
     *
     * @since 10.9.0
     *
     * @param string $content The rendered block content.
     *
     * @return string The unmodified block content.
     */
    public function maybe_enqueue_blocks_style($content)
    {
    }
    /**
     * Block editor counterpart to {@see maybe_enqueue_blocks_style()},
     * which enqueues our block stylesheet when the block script has been enqueued.
     *
     * @since 10.9.0
     *
     * @return void
     */
    public function maybe_enqueue_blocks_style_for_editor(): void
    {
    }
    /**
     * Enqueues the blocks stylesheet if the block script has been enqueued.
     *
     * @return void
     */
    private function enqueue_blocks_style_if_script_enqueued(): void
    {
    }
    /**
     * Registers the classic JS scripts.
     *
     * @return void
     */
    private function register_legacy_payment_method_script_handles()
    {
    }
    /**
     * Returns an array of key=>value pairs of data made available to the payment methods script.
     *
     * @return array
     */
    public function get_payment_method_data()
    {
    }
    /**
     * Returns an array of style properties supported by the payment method.
     * This method is used only when rendering the payment method in the editor.
     *
     * @return array Array of style properties.
     */
    private function get_style()
    {
    }
    /**
     * Returns true if the ECE should be shown on the current page, false otherwise.
     *
     * @return boolean True if ECEs should be displayed, false otherwise.
     */
    private function should_show_express_checkout_button()
    {
    }
    /**
     * Returns the Stripe Payment Gateway JavaScript configuration object.
     *
     * @return array  the JS configuration from the Stripe Payment Gateway.
     */
    private function get_gateway_javascript_params()
    {
    }
    /**
     * Returns the Stripe Express Checkout JavaScript configuration object.
     *
     * @return array  the JS configuration for Stripe Express Checkout.
     */
    private function get_express_checkout_javascript_params()
    {
    }
    /**
     * Determine if store allows cards to be saved during checkout.
     *
     * @return bool True if merchant allows shopper to save card (payment method) during checkout.
     */
    private function get_show_saved_cards()
    {
    }
    /**
     * Determine if the checkbox to enable the user to save their payment method should be shown.
     *
     * @return bool True if the save payment checkbox should be displayed to the user.
     */
    private function get_show_save_option()
    {
    }
    /**
     * Returns the title string to use in the UI (customisable via admin settings screen).
     *
     * @return string Title / label string
     */
    private function get_title()
    {
    }
    /**
     * Return the icons urls.
     *
     * @return array Arrays of icons metadata.
     */
    private function get_icons()
    {
    }
    /**
     * Add express checkout data to the order meta as hooked on the
     * woocommerce_rest_checkout_process_payment_with_context action.
     *
     * @deprecated 10.6.0 Use add_express_checkout_order_meta() instead.
     *
     * @param \Automattic\WooCommerce\StoreApi\Payments\PaymentContext $context Holds context for the payment.
     * @param \Automattic\WooCommerce\StoreApi\Payments\PaymentResult  $result  Result object for the payment.
     *
     * @return void
     */
    public function add_payment_request_order_meta(\Automattic\WooCommerce\StoreApi\Payments\PaymentContext $context, \Automattic\WooCommerce\StoreApi\Payments\PaymentResult &$result)
    {
    }
    /**
     * Add express checkout data to the order meta as hooked on the
     * woocommerce_rest_checkout_process_payment_with_context action.
     *
     * @param \Automattic\WooCommerce\StoreApi\Payments\PaymentContext $context Holds context for the payment.
     * @param \Automattic\WooCommerce\StoreApi\Payments\PaymentResult  $result  Result object for the payment.
     *
     * @return void
     */
    public function add_express_checkout_order_meta(\Automattic\WooCommerce\StoreApi\Payments\PaymentContext $context, \Automattic\WooCommerce\StoreApi\Payments\PaymentResult &$result)
    {
    }
    /**
     * Handles any potential stripe intents on the order that need handled.
     *
     * This is configured to execute after legacy payment processing has
     * happened on the woocommerce_rest_checkout_process_payment_with_context
     * action hook.
     *
     * @param \Automattic\WooCommerce\StoreApi\Payments\PaymentContext $context Holds context for the payment.
     * @param \Automattic\WooCommerce\StoreApi\Payments\PaymentResult  $result  Result object for the payment.
     *
     * @return void
     */
    public function add_stripe_intents(\Automattic\WooCommerce\StoreApi\Payments\PaymentContext $context, \Automattic\WooCommerce\StoreApi\Payments\PaymentResult &$result)
    {
    }
    /**
     * Whether the given Store API payment method id belongs to this gateway.
     *
     * A bare `stripe_` prefix test is not enough: other vendors register gateways under
     * that prefix too, so split UPE ids are matched against the methods this gateway
     * actually registers.
     *
     * @param string $payment_method The payment method id from the payment context.
     *
     * @return bool
     */
    private function is_stripe_payment_method(string $payment_method): bool
    {
    }
    /**
     * Fails the payment when WooCommerce never handed it to the gateway.
     *
     * Every path through `Legacy::process_legacy_payment()` sets a status once the gateway
     * runs, so an empty one here means the gateway was never invoked and no charge was
     * attempted. The Store API would otherwise answer 200 with an empty payment status,
     * leaving an unpaid order with its stock still reserved and nothing logged. Throwing
     * gives the shopper an error and lets WooCommerce release the stock it held.
     *
     * @param \Automattic\WooCommerce\StoreApi\Payments\PaymentContext $context Holds context for the payment.
     * @param \Automattic\WooCommerce\StoreApi\Payments\PaymentResult  $result  Result object for the payment.
     *
     * @throws Exception When the payment was never processed.
     *
     * @return void
     */
    public function fail_unprocessed_payment(\Automattic\WooCommerce\StoreApi\Payments\PaymentContext $context, \Automattic\WooCommerce\StoreApi\Payments\PaymentResult &$result)
    {
    }
    /**
     * Handles adding information about the express checkout type used to the order meta.
     *
     * @param \WC_Order $order                The order being processed.
     * @param string    $express_checkout_type The express checkout type used for payment.
     *
     * @return void
     */
    private function add_order_meta(\WC_Order $order, $express_checkout_type)
    {
    }
    /**
     * Returns an array of supported features.
     *
     * @return string[]
     */
    public function get_supported_features()
    {
    }
    /**
     * Determines if the UPE gateway is being used and if there is at least 1 UPE method available.
     *
     * @param array $available_gateways The available gateways.
     * @return bool True if there is at least 1 UPE method available, false otherwise.
     */
    private function is_upe_method_available($available_gateways)
    {
    }
}
/**
 * Stores and validates local context for Stripe Checkout Sessions.
 */
class WC_Stripe_Checkout_Session_Context
{
    /**
     * Cache key prefix for Checkout Session ownership and amount context.
     *
     * @var string
     */
    private const CONTEXT_CACHE_PREFIX = 'checkout_session_context_';
    /**
     * Option key prefix for short-lived Checkout Session mutation locks.
     *
     * @var string
     */
    private const MUTATION_LOCK_OPTION_PREFIX = 'wc_stripe_checkout_session_lock_';
    /**
     * WC session key flagging that this customer hit a Checkout Session amount mismatch, so their
     * later checkouts use the standard intent flow instead of Adaptive Pricing.
     *
     * @var string
     */
    private const AMOUNT_MISMATCH_SESSION_KEY = 'wc_stripe_checkout_session_amount_mismatch';
    /**
     * WooCommerce rewrites the session customer ID when checkout creates an account.
     *
     * @var string
     */
    private const MIGRATED_GUEST_SESSION_ID_KEY = 'wc_stripe_migrated_guest_session_id';
    /**
     * Context lifetime. Stripe Checkout Sessions expire after 24 hours by default.
     *
     * @var int
     */
    private const CONTEXT_TTL = \DAY_IN_SECONDS;
    /**
     * Lock lifetime for coordinating cart updates with order linking. The update path holds the
     * lock while waiting for Stripe, so this must not be shorter than WC_Stripe_API's request timeout.
     *
     * @var int
     */
    private const MUTATION_LOCK_TTL = 70;
    /**
     * Initialize hooks.
     *
     * @return void
     */
    public static function init_hooks(): void
    {
    }
    /**
     * Returns the generic failure message for Checkout Session context validation.
     *
     * @return string
     */
    public static function get_unavailable_message(): string
    {
    }
    /**
     * Get stored context for a Stripe Checkout Session.
     *
     * @param string $session_id Stripe Checkout Session ID.
     * @return array|null
     */
    public static function get_context(string $session_id): ?array
    {
    }
    /**
     * Check if the current customer session previously hit a Checkout Session amount mismatch.
     *
     * @return bool
     */
    public static function was_amount_mismatch_detected(): bool
    {
    }
    /**
     * Store context for a Stripe Checkout Session.
     *
     * @param string $session_id Stripe Checkout Session ID.
     * @param array  $context Checkout Session context.
     * @return void
     */
    public static function set_context(string $session_id, array $context): void
    {
    }
    /**
     * Preserve the guest owner key WooCommerce replaces during checkout account creation.
     *
     * @param string $guest_session_id Former guest session ID.
     * @param string $user_session_id Current user session ID.
     * @return void
     */
    public static function remember_migrated_guest_session(string $guest_session_id, string $user_session_id): void
    {
    }
    /**
     * Store Checkout Session context for the current browser session.
     *
     * @param string $session_id Stripe Checkout Session ID.
     * @param array  $cart_context Current cart context.
     * @return void
     * @throws Exception When the current checkout session cannot be identified.
     */
    public static function store_for_cart(string $session_id, array $cart_context): void
    {
    }
    /**
     * Delete stored context for a Stripe Checkout Session.
     *
     * @param string $session_id Stripe Checkout Session ID.
     * @return void
     */
    public static function delete_context(string $session_id): void
    {
    }
    /**
     * Run a callback while holding a Checkout Session mutation lock.
     *
     * @param string   $session_id Stripe Checkout Session ID.
     * @param callable $callback Callback to run while the lock is held.
     * @return mixed
     * @throws Exception When the Checkout Session is currently locked.
     */
    public static function with_mutation_lock(string $session_id, callable $callback)
    {
    }
    /**
     * Validate that the current request may update a Checkout Session.
     *
     * @param string $session_id Stripe Checkout Session ID.
     * @return void
     * @throws Exception When the session is unknown, owned by another browser session, or already linked to an order.
     */
    public static function validate_update_request(string $session_id): void
    {
    }
    /**
     * Validate that a Checkout Session can be linked to the given order.
     *
     * @param string   $session_id Stripe Checkout Session ID.
     * @param WC_Order $order WooCommerce order.
     * @return array Stored Checkout Session context.
     * @throws Exception When the Checkout Session context is missing or does not match the order.
     */
    public static function validate_for_order(string $session_id, \WC_Order $order): array
    {
    }
    /**
     * Mark the Checkout Session context as linked to an order.
     *
     * @param string   $session_id Stripe Checkout Session ID.
     * @param WC_Order $order WooCommerce order.
     * @return void
     */
    public static function mark_linked_to_order(string $session_id, \WC_Order $order): void
    {
    }
    /**
     * Attempt to acquire the Checkout Session mutation lock.
     *
     * Best-effort: the lock only serializes the short update/link window so a stale validation
     * result cannot race a concurrent cart update or order submission. The authoritative guard
     * against amount manipulation is the order-id and amount/currency checks, so the rare race
     * where two requests reclaim the same expired lock is acceptable.
     *
     * `add_option()` is atomic on the option name, so the common (uncrashed) path is race-free.
     * A lock abandoned by a crashed request is reclaimed once MUTATION_LOCK_TTL has elapsed.
     *
     * @param string $session_id Stripe Checkout Session ID.
     * @return bool True when the caller acquired the lock.
     */
    private static function acquire_mutation_lock(string $session_id): bool
    {
    }
    /**
     * Release the Checkout Session mutation lock.
     *
     * @param string $session_id Stripe Checkout Session ID.
     * @return void
     */
    private static function release_mutation_lock(string $session_id): void
    {
    }
    /**
     * Validate that the stored Checkout Session context belongs to the current browser session.
     *
     * @param array $context Stored Checkout Session context.
     * @return void
     * @throws Exception When the current browser session does not own the Checkout Session.
     */
    private static function validate_owner(array $context): void
    {
    }
    /**
     * A stored Checkout Session total that disagrees with the order means the store may have an
     * incompatible totals integration; invalidate the session to use the standard intent flow.
     *
     * @param string   $session_id Stripe Checkout Session ID.
     * @param WC_Order $order WooCommerce order.
     * @param array    $context Stored Checkout Session context.
     * @param float|int $order_amount Order amount in Stripe minor units.
     * @param string   $order_currency Order currency.
     * @return void
     */
    private static function invalidate_session_after_amount_mismatch(string $session_id, \WC_Order $order, array $context, $order_amount, string $order_currency): void
    {
    }
    /**
     * Get the current browser/customer owner keys for a Checkout Session.
     *
     * @return string[]
     */
    private static function get_current_owner_keys(): array
    {
    }
    /**
     * Normalize owner keys to unique string values.
     *
     * @param mixed $owner_keys Owner keys.
     * @return string[]
     */
    private static function normalize_owner_keys($owner_keys): array
    {
    }
    /**
     * Build the cache key for Checkout Session context.
     *
     * @param string $session_id Stripe Checkout Session ID.
     * @return string
     */
    private static function get_context_cache_key(string $session_id): string
    {
    }
    /**
     * Build the option name for the Checkout Session mutation lock.
     *
     * @param string $session_id Stripe Checkout Session ID.
     * @return string
     */
    private static function get_mutation_lock_option_name(string $session_id): string
    {
    }
}
/**
 * Connects Checkout Session synchronization to native WooCommerce checkout responses.
 */
class WC_Stripe_Checkout_Session_Lifecycle
{
    /**
     * Store API extension namespace.
     *
     * @var string
     */
    private const EXTENSION_NAMESPACE = 'wc-stripe/checkout-session';
    /**
     * Classic checkout fragment selector.
     *
     * @var string
     */
    private const CLASSIC_FRAGMENT_SELECTOR = '#wc-stripe-checkout-session-data';
    /**
     * Whether this Store API request explicitly requested initial session creation.
     *
     * @var bool
     */
    private static $store_api_sync_requested = \false;
    /**
     * Checkout Session manager.
     *
     * @var WC_Stripe_Checkout_Session_Manager
     */
    private $manager;
    /**
     * Constructor.
     *
     * @param WC_Stripe_Checkout_Session_Manager|null $manager Checkout Session manager.
     */
    public function __construct(?\WC_Stripe_Checkout_Session_Manager $manager = \null)
    {
    }
    /**
     * Register hooks used by classic checkout.
     *
     * @return void
     */
    public function init_classic_hooks(): void
    {
    }
    /**
     * Register Checkout Session data and synchronization with the Store API.
     *
     * This must run on woocommerce_blocks_loaded, before the plugin's regular initialization.
     *
     * @return void
     */
    public static function init_store_api(): void
    {
    }
    /**
     * Render the stable DOM target replaced by classic update-order-review responses.
     *
     * @return void
     */
    public function render_classic_placeholder(): void
    {
    }
    /**
     * Synchronize after WooCommerce has updated customer, shipping, and totals, then embed the result.
     *
     * @param array $fragments Checkout fragments.
     * @return array
     */
    public function add_classic_fragment(array $fragments): array
    {
    }
    /**
     * Store API schema for the embedded Checkout Session data.
     *
     * @return array
     */
    public static function get_store_api_schema(): array
    {
    }
    /**
     * Synchronize while WooCommerce is serializing its fully calculated Cart response.
     *
     * Once initialized, every native Cart response can update the Stripe session. This covers
     * address, shipping, coupon, and quantity changes without guessing which client event caused it.
     *
     * @return array
     */
    public static function get_store_api_data(): array
    {
    }
    /**
     * Mark this Cart Extensions request as the checkout initialization request.
     *
     * Synchronization is deferred to the CartSchema data callback because WooCommerce calculates
     * totals after update callbacks and before serializing the response.
     *
     * @param array $data Extension request data.
     * @return void
     */
    public static function request_store_api_sync(array $data): void
    {
    }
    /**
     * Build the classic checkout fragment with safely encoded session data.
     *
     * @param array $data Public session data.
     * @return string
     */
    private function get_classic_fragment_html(array $data): string
    {
    }
    /**
     * Validate the same checkout/cart eligibility used to render Adaptive Pricing on the page.
     *
     * Every caller runs without WordPress's page query: classic checkout refreshes arrive as
     * wc-ajax requests against the home URL, and Store API cart requests are REST requests. In both
     * is_checkout() is false even though we are serving checkout, so it has to be forced here. The
     * temporary conditional is limited to eligibility checks; WooCommerce has already calculated
     * the cart natively.
     *
     * @return bool
     */
    private static function is_adaptive_pricing_enabled(): bool
    {
    }
}
/**
 * Creates and synchronizes the Stripe Checkout Session owned by a WooCommerce session.
 */
class WC_Stripe_Checkout_Session_Manager
{
    /**
     * Checkout session metadata value identifying an Adaptive Pricing checkout.
     *
     * @var string
     */
    public const ADAPTIVE_PRICING_CHECKOUT_TYPE = 'adaptive_pricing_checkout';
    /**
     * WooCommerce session key containing the active Stripe Checkout Session.
     *
     * @var string
     */
    private const WC_SESSION_KEY = 'wc_stripe_checkout_session';
    /**
     * Singleton instance.
     *
     * @var self|null
     */
    private static $instance;
    /**
     * Return the shared manager instance.
     *
     * @return self
     */
    public static function get_instance(): self
    {
    }
    /**
     * Return a runtime error message when we cannot create, initialize, or update a Stripe Checkout Session.
     *
     * @return string
     */
    public static function get_runtime_error_message(): string
    {
    }
    /**
     * Create a new Stripe Checkout Session for the current WooCommerce cart.
     *
     * @return array Public session data.
     * @throws Exception When the cart or Stripe response is invalid.
     */
    public function create_session(): array
    {
    }
    /**
     * Update an existing Stripe Checkout Session from the current cart.
     *
     * @param string $session_id Stripe Checkout Session ID.
     * @return array Public session data.
     * @throws Exception When the session cannot be updated.
     */
    public function update_session(string $session_id): array
    {
    }
    /**
     * Create or update the session only when the native WooCommerce cart has changed.
     *
     * @return array Public session data.
     * @throws Exception When synchronization fails.
     */
    public function synchronize(): array
    {
    }
    /**
     * Return the current session data without causing a Stripe API request.
     *
     * @return array
     */
    public function get_current_data(): array
    {
    }
    /**
     * Record a synchronization failure while retaining the last usable session identifiers.
     *
     * @param string $message Failure message.
     * @return array
     */
    public function mark_failed(string $message): array
    {
    }
    /**
     * Will a newly created session allow a saved payment method to be created.
     * This is only available for a logged-in user with an existing WC_Customer definition
     * at the start of a session.
     *
     * @return bool
     */
    private function can_enable_save_payment_method(): bool
    {
    }
    /**
     * Build the current cart amount and currency after WooCommerce has applied checkout integrations.
     *
     * @return array
     */
    private function build_cart_context(): array
    {
    }
    /**
     * Build the aggregate line item expected by Stripe Custom Checkout.
     *
     * @param array $cart_context Current cart context.
     * @return array
     */
    private function build_line_items(array $cart_context): array
    {
    }
    /**
     * Build PaymentIntent metadata for a Checkout Session.
     *
     * @return array
     */
    private function build_payment_intent_data(): array
    {
    }
    /**
     * Generate an opaque revision token for the session record.
     * The token is a unique string to ensure that concurrent writes
     * always result in a new revision value, and clients will need to
     * update in response, regardless of which write is persisted.
     *
     * @return string
     */
    private function generate_revision_token(): string
    {
    }
    /**
     * Ensure checkout services needed by the manager exist in this request context.
     *
     * @return void
     * @throws WC_Stripe_Exception When the cart or WooCommerce session is unavailable.
     */
    private function validate_cart(): void
    {
    }
    /**
     * Get the active record from the WooCommerce session.
     *
     * @return array|null
     */
    private function get_record(): ?array
    {
    }
    /**
     * Store the active record in the WooCommerce session.
     *
     * @param array $record Session record.
     * @return void
     */
    private function set_record(array $record): void
    {
    }
    /**
     * Limit session data exposed to checkout clients.
     *
     * @param array|null $record Stored session record.
     * @return array
     */
    private function get_public_data(?array $record): array
    {
    }
}
class WC_Stripe_Co_Branded_CC_Compatibility
{
    public const MIN_WC_VERSION = '8.9.0';
    /**
     * Determines whether the current version of WooCommerce is supported.
     *
     * @return bool
     */
    public static function is_wc_supported()
    {
    }
}
/**
 * WC_Stripe_Customer class.
 *
 * Represents a Stripe Customer.
 */
class WC_Stripe_Customer
{
    /**
     * Constant for the customer context when adding a payment method.
     */
    public const CUSTOMER_CONTEXT_ADD_PAYMENT_METHOD = 'add_payment_method';
    /**
     * Constant for the customer context when paying for an order via the "Pay for Order" page.
     */
    public const CUSTOMER_CONTEXT_PAY_FOR_ORDER = 'pay_for_order';
    /**
     * Constant for the customer context when creating a Checkout Session (Optimized Checkout).
     */
    public const CUSTOMER_CONTEXT_CHECKOUT_SESSION = 'checkout_session';
    /**
     * Constants for the customer contexts where minimal billing details are permitted.
     */
    public const MINIMAL_BILLING_DETAILS_CONTEXTS = [self::CUSTOMER_CONTEXT_ADD_PAYMENT_METHOD, self::CUSTOMER_CONTEXT_PAY_FOR_ORDER, self::CUSTOMER_CONTEXT_CHECKOUT_SESSION];
    /**
     * String prefix for Stripe payment methods request transient.
     */
    public const PAYMENT_METHODS_TRANSIENT_KEY = 'stripe_payment_methods_';
    /**
     * Queryable Stripe payment method types.
     */
    public const STRIPE_PAYMENT_METHODS = [\WC_Stripe_UPE_Payment_Method_CC::STRIPE_ID, \WC_Stripe_UPE_Payment_Method_LINK::STRIPE_ID, \WC_Stripe_UPE_Payment_Method_Sepa::STRIPE_ID, \WC_Stripe_UPE_Payment_Method_Cash_App_Pay::STRIPE_ID, \WC_Stripe_UPE_Payment_Method_ACH::STRIPE_ID, \WC_Stripe_UPE_Payment_Method_ACSS::STRIPE_ID, \WC_Stripe_UPE_Payment_Method_Bacs_Debit::STRIPE_ID, \WC_Stripe_UPE_Payment_Method_Amazon_Pay::STRIPE_ID, \WC_Stripe_UPE_Payment_Method_Becs_Debit::STRIPE_ID];
    /**
     * The maximum value for the `limit` argument in the Stripe payment_methods API.
     *
     * @see https://docs.stripe.com/api/payment_methods/customer_list#list_customer_payment_methods-limit
     */
    protected const PAYMENT_METHODS_API_LIMIT = 100;
    /**
     * Stripe customer ID
     *
     * @var string
     */
    private $id = '';
    /**
     * WP User ID
     *
     * @var integer
     */
    private $user_id = 0;
    /**
     * Data from API
     *
     * @var array
     */
    private $customer_data = [];
    /**
     * Constructor
     *
     * @param int $user_id The WP user ID
     */
    public function __construct($user_id = 0)
    {
    }
    /**
     * Get Stripe customer ID.
     *
     * @return string
     */
    public function get_id()
    {
    }
    /**
     * Set Stripe customer ID.
     *
     * @param string|array $id The Stripe customer ID, or an array containing the customer ID for backwards compatibility with pre-3.0 data storage.
     *
     * @return void
     */
    public function set_id($id)
    {
    }
    /**
     * User ID in WordPress.
     *
     * @return int
     */
    public function get_user_id()
    {
    }
    /**
     * Set User ID used by WordPress.
     *
     * @param int $user_id
     */
    public function set_user_id($user_id)
    {
    }
    /**
     * Get user object.
     *
     * @return WP_User
     */
    protected function get_user()
    {
    }
    /**
     * Store data from the Stripe API about this customer
     */
    public function set_customer_data($data)
    {
    }
    /**
     * Generates the customer request, used for both creating and updating customers.
     *
     * @param  array        $args  Additional arguments for the request (optional).
     * @param WC_Order|null $order The order object (optional). If provided, billing details will be retrieved from the order.
     *
     * @return array
     */
    protected function generate_customer_request($args = [], $order = \null)
    {
    }
    /**
     * Validate that we have valid data before we try to create a customer.
     *
     * @param array       $create_customer_request The base data to build the customer request.
     * @param null|string $current_context         Flag to indicate whether we are in a context where limited details are permitted.
     *
     * @throws WC_Stripe_Exception
     */
    private function validate_create_customer_request($create_customer_request, ?string $current_context = \null)
    {
    }
    /**
     * Get the list of required fields for the create customer request.
     *
     * @param string|null $current_context The context we are creating the customer in.
     *
     * @return array
     */
    private function get_create_customer_required_fields(?string $current_context = \null)
    {
    }
    /**
     * Get value of billing data field, either from POST or order object.
     *
     * @param string        $field Field name.
     * @param WC_Order|null $order The order object (optional).
     *
     * @return string
     */
    private function get_billing_data_field($field, $order = \null)
    {
    }
    /**
     * If customer does not exist, create a new customer. Else retrieve the Stripe customer through the API to check it's existence.
     * Recreate the customer if it does not exist in this Stripe account.
     *
     * @param string|null $current_context The context the customer is being created in. Some contexts (e.g. creating a Checkout
     *                                     Session before the buyer has entered any details) permit minimal billing details.
     *
     * @return string Customer ID
     *
     * @throws WC_Stripe_Exception
     */
    public function maybe_create_customer(?string $current_context = \null)
    {
    }
    /**
     * Search for an existing customer in Stripe account by email and name.
     *
     * @deprecated 10.9.0 No longer used internally and no replacement is provided.
     *
     * @param string $email Customer email.
     * @param string $name  Customer name.
     * @return array
     */
    public function get_existing_customer($email, $name)
    {
    }
    /**
     * Create a customer via API.
     *
     * @param array         $args            Additional arguments for the request (optional).
     * @param string|null   $current_context The context we are creating the customer in (optional).
     * @param WC_Order|null $order           The order object (optional). If provided, billing details will be retrieved from the order.
     *
     * @return string Stripe customer ID in the format `cus_XXXXXXXXXXXXXX`
     *
     * @throws WC_Stripe_Exception
     */
    public function create_customer($args = [], $current_context = \null, $order = \null)
    {
    }
    /**
     * Updates the Stripe customer through the API.
     *
     * @param array         $args     Additional arguments for the request (optional).
     * @param bool          $is_retry Whether the current call is a retry (optional, defaults to false). If true, then an exception will be thrown instead of further retries on error.
     * @param WC_Order|null $order    The order object (optional). If provided, billing details will be retrieved from the order.
     *
     * @return string Stripe customer ID in the format `cus_XXXXXXXXXXXXXX`
     *
     * @throws WC_Stripe_Exception
     */
    public function update_customer($args = [], $is_retry = \false, $order = \null)
    {
    }
    /**
     * Updates existing Stripe customer or creates new customer for User through API.
     *
     * @param array         $args            Additional arguments for the request (optional).
     * @param string|null   $current_context The context we are creating the customer in (optional).
     * @param WC_Order|null $order           The order object (optional). If provided, billing details will be retrieved from the order.
     *
     * @return string Stripe customer ID in the format `cus_XXXXXXXXXXXXXX`
     *
     * @throws WC_Stripe_Exception
     */
    public function update_or_create_customer($args = [], $current_context = \null, $order = \null)
    {
    }
    /**
     * Normalize the current context to a string, as the argument was initially introduced as a boolean flag.
     *
     * @param string|bool|null $current_context The current context.
     * @return string|null The normalized context.
     */
    private function normalize_current_context($current_context): ?string
    {
    }
    /**
     * Checks to see if error is of invalid request
     * error and it is no such customer.
     *
     * @since 4.1.2
     * @param array $error
     */
    public function is_no_such_customer_error($error)
    {
    }
    /**
     * Checks to see if error is of invalid request
     * error and it is no such customer.
     *
     * @since 4.5.6
     * @param array $error
     * @return bool
     */
    public function is_source_already_attached_error($error)
    {
    }
    /**
     * Add a source for this stripe customer.
     *
     * @param string $source_id
     * @return WP_Error|int
     */
    public function add_source($source_id)
    {
    }
    /**
     * Attaches a source to the Stripe customer.
     *
     * @param string $source_id The ID of the new source.
     * @return object|WP_Error Either a source object, or a WP error.
     */
    public function attach_source($source_id)
    {
    }
    /**
     * Get a customers saved sources using their Stripe ID.
     *
     * @param  string $customer_id
     * @return array
     */
    public function get_sources()
    {
    }
    /**
     * Gets saved payment methods for a customer using Intentions API.
     *
     * @param string $payment_method_type Stripe ID of payment method type
     *
     * @return array
     */
    public function get_payment_methods($payment_method_type)
    {
    }
    /**
     * Get all payment methods for a customer.
     *
     * @param string[] $payment_method_types The payment method types to look for using Stripe method IDs. If the array is empty, it implies all payment method types.
     * @param int      $limit                The maximum number of payment methods to return. If the value is -1, no limit is applied.
     * @return array
     */
    public function get_all_payment_methods(array $payment_method_types = [], int $limit = -1)
    {
    }
    /**
     * Delete a source from stripe.
     *
     * @param string $source_id
     */
    public function delete_source($source_id)
    {
    }
    /**
     * Detach a payment method from stripe.
     *
     * @param string $payment_method_id
     */
    public function detach_payment_method($payment_method_id)
    {
    }
    /**
     * Set default source in Stripe
     *
     * @param string $source_id The ID of the source to set as default.
     * @return bool True if the default source was set successfully, false otherwise.
     * @throws WC_Stripe_Exception
     */
    public function set_default_source($source_id): bool
    {
    }
    /**
     * Set default payment method in Stripe
     *
     * @param string $payment_method_id The ID of the payment method to set as default.
     * @return bool True if the default payment method was set successfully, false otherwise.
     * @throws WC_Stripe_Exception
     */
    public function set_default_payment_method($payment_method_id): bool
    {
    }
    /**
     * Deletes caches for this users cards.
     *
     * @param string|null $payment_method_id The ID of the payment method to clear cache for, if specified.
     */
    public function clear_cache($payment_method_id = \null)
    {
    }
    /**
     * Retrieves the Stripe Customer ID from the user meta.
     *
     * @param  int $user_id The ID of the WordPress user.
     * @return string|bool  Either the Stripe ID or false.
     */
    public function get_id_from_meta($user_id)
    {
    }
    /**
     * Updates the current user with the right Stripe ID in the meta table.
     *
     * @param string $id The Stripe customer ID.
     */
    public function update_id_in_meta($id)
    {
    }
    /**
     * Deletes the user ID from the meta table with the right key.
     */
    public function delete_id_from_meta()
    {
    }
    /**
     * Recreates the customer for this user.
     *
     * @param array         $args            Additional arguments for the request (optional).
     * @param string|null   $current_context The context we are creating the customer in (optional).
     * @param WC_Order|null $order           The order object (optional). If provided, billing details will be retrieved from the order.
     *
     * @return string ID of the new Customer object.
     */
    private function recreate_customer($args = [], ?string $current_context = \null, $order = \null)
    {
    }
    /**
     * Get the customer's preferred locale based on the user or site setting.
     *
     * @param object $user The user being created/modified.
     * @return array The matched locale string wrapped in an array, or empty default.
     */
    public function get_customer_preferred_locale($user)
    {
    }
    /**
     * Gets the customer's locale/language based on their setting or the site settings.
     *
     * @param object $user The user we're wanting to get the locale for.
     * @return string The locale/language set in the user profile or the site itself.
     */
    public function get_customer_locale($user)
    {
    }
    /**
     * Given a WC_Order or WC_Customer, returns an array representing a Stripe customer object.
     * At least one parameter has to not be null.
     *
     * @param WC_Order|null    $wc_order    The Woo order to parse.
     * @param WC_Customer|null $wc_customer The Woo customer to parse.
     *
     * @return array Customer data.
     */
    public static function map_customer_data(?\WC_Order $wc_order = \null, ?\WC_Customer $wc_customer = \null)
    {
    }
}
// block direct access.
/**
 * Class WC_Stripe_Database_Cache_Prefetch
 *
 * This class is responsible for prefetching cache keys.
 */
class WC_Stripe_Database_Cache_Prefetch
{
    /**
     * The action used for the asynchronous cache prefetch code.
     *
     * @var string
     */
    public const ASYNC_PREFETCH_ACTION = 'wc_stripe_database_cache_prefetch_async';
    /**
     * Configuration for cache prefetching.
     *
     * @var int[]
     */
    protected const PREFETCH_CONFIG = [
        // Note that prefetching for account data is off by default.
        \WC_Stripe_Account::ACCOUNT_CACHE_KEY => 0,
        \WC_Stripe_Payment_Method_Configurations::CONFIGURATION_CACHE_KEY => 10,
    ];
    /**
     * The prefix used for prefetch tracking options.
     *
     * @var string
     */
    private const PREFETCH_OPTION_PREFIX = 'wcstripe_prefetch_';
    /**
     * The singleton instance.
     */
    private static ?\WC_Stripe_Database_Cache_Prefetch $instance = \null;
    /**
     * Static array to track pending prefetches which we have already queued up in the current request.
     *
     * @var bool[]
     */
    private static array $pending_prefetches = [];
    /**
     * Protected constructor to support singleton pattern.
     */
    protected function __construct()
    {
    }
    /**
     * Get the singleton instance.
     *
     * @return WC_Stripe_Database_Cache_Prefetch The singleton instance.
     */
    public static function get_instance(): \WC_Stripe_Database_Cache_Prefetch
    {
    }
    /**
     * Check if the unprefixed cache key has prefetch enabled.
     *
     * @param string $key The unprefixed cache key to check.
     * @return bool True if the cache key can be prefetched, false otherwise.
     */
    public function should_prefetch_cache_key(string $key): bool
    {
    }
    /**
     * Maybe queue a prefetch for a cache key.
     *
     * @param string $key         The unprefixed cache key to prefetch.
     * @param int    $expiry_time The expiry time of the cache entry.
     */
    public function maybe_queue_prefetch(string $key, int $expiry_time): void
    {
    }
    /**
     * Reset the pending prefetches.
     *
     * @return void
     */
    public function reset_pending_prefetches(): void
    {
    }
    /**
     * Get the prefetch window for a given cache key.
     *
     * @param string $key The unprefixed cache key to get the prefetch window for.
     * @return int The prefetch window for the cache key. 0 indicates that prefetching is disabled for the key.
     */
    private function get_prefetch_window(string $cache_key): int
    {
    }
    /**
     * Check if a prefetch is already queued up.
     *
     * @param string $key The unprefixed cache key to check.
     * @return bool True if a prefetch is queued up, false otherwise.
     */
    private function is_prefetch_queued(string $key): bool
    {
    }
    /**
     * Get the name of the prefetch tracking option for a given cache key.
     *
     * @param string $key The unprefixed cache key to get the option name for.
     * @return string The name of the prefetch option.
     */
    private function get_prefetch_option_name(string $key): string
    {
    }
    /**
     * Handle the prefetch action. We are generally expecting this to be queued up by Action Scheduler using
     * the action from {@see ASYNC_PREFETCH_ACTION}.
     *
     * @param string $key The unprefixed cache key to prefetch.
     * @return void
     */
    public function handle_prefetch_action($key): void
    {
    }
    /**
     * Helper method to implement prefetch/repopulation for supported cache entries.
     *
     * @param string $key The unprefixed cache key to prefetch.
     * @return bool|null True if the prefetch was successful, false if the prefetch failed, or null if the prefetch was not attempted.
     */
    protected function prefetch_cache_key(string $key): ?bool
    {
    }
}
// block direct access.
/**
 * Class WC_Stripe_Database_Cache
 */
/**
 * A class for caching data as an option in the database.
 *
 * Based on the WooCommerce Payments Database_Cache class implementation.
 *
 * @see https://github.com/Automattic/woocommerce-payments/blob/4b084af108cac9c6bd2467e52e5cdc3bc974a951/includes/class-database-cache.php
 */
class WC_Stripe_Database_Cache
{
    /**
     * In-memory cache for the duration of a single request.
     *
     * This is used to avoid multiple database reads for the same data and as a backstop in case the database write fails.
     *
     * @var array
     */
    private static $in_memory_cache = [];
    /**
     * The action used for the asynchronous cache cleanup code.
     *
     * @var string
     */
    public const ASYNC_CLEANUP_ACTION = 'wc_stripe_database_cache_cleanup_async';
    /**
     * The prefix used for every cache key.
     *
     * @var string
     */
    public const CACHE_KEY_PREFIX = 'wcstripe_cache_';
    /**
     * Cleanup approach that runs in the current process.
     *
     * @var string
     */
    public const CLEANUP_APPROACH_INLINE = 'inline';
    /**
     * Cleanup approach that runs asynchronously via Action Scheduler.
     *
     * @var string
     */
    public const CLEANUP_APPROACH_ASYNC = 'async';
    /**
     * Permitted/accepted approaches.
     *
     * @var string[]
     */
    protected const CLEANUP_APPROACHES = [self::CLEANUP_APPROACH_INLINE, self::CLEANUP_APPROACH_ASYNC];
    /**
     * Class constructor.
     */
    private function __construct()
    {
    }
    /**
     * Stores a value in the cache.
     *
     * The key is automatically prefixed with "wcstripe_cache_[mode]_".
     *
     * @param string $key  The key to store the value under.
     * @param mixed  $data The value to store.
     * @param int    $ttl  The TTL of the cache. Dafault 1 hour.
     *
     * @return void
     */
    public static function set($key, $data, $ttl = \HOUR_IN_SECONDS)
    {
    }
    /**
     * Stores a value in the cache for the specified mode.
     *
     * @param string $key The key to store the value under.
     * @param mixed  $data The value to store.
     * @param int    $ttl  The TTL of the cache. Dafault 1 hour.
     * @param string|null $mode The mode to use as prefix for the key. Default is null, which means the current plugin mode.
     *
     * @return void
     */
    public static function set_with_mode($key, $data, $ttl = \HOUR_IN_SECONDS, ?string $mode = \null)
    {
    }
    /**
     * Gets a value from the cache.
     *
     * The key is automatically prefixed with "wcstripe_cache_[mode]_".
     *
     * @param string $key The key to look for.
     *
     * @return mixed|null The cache contents. NULL if the cache value is expired or missing.
     */
    public static function get($key)
    {
    }
    /**
     * Gets a value from the cache for the specified mode.
     *
     * The key is automatically prefixed with "wcstripe_cache_[mode]_".
     *
     * @param string $key       The key to look for.
     * @param string|null $mode The mode to use as prefix for the key. Default is null, which means the current plugin mode.
     *
     * @return mixed|null The cache contents. NULL if the cache value is expired or missing.
     */
    public static function get_with_mode($key, ?string $mode = \null)
    {
    }
    /**
     * Deletes a value from the cache.
     *
     * The key is automatically prefixed with "wcstripe_cache_[mode]_".
     *
     * @param string $key The key to delete.
     *
     * @return void
     */
    public static function delete($key)
    {
    }
    /**
     * Deletes a value from the cache for the specified mode.
     *
     * @param string $key  The key to delete.
     * @param string $mode The mode to use as prefix for the key. Default is null, which means the current plugin mode.
     *
     * @return void
     */
    public static function delete_with_mode($key, ?string $mode = \null): void
    {
    }
    /**
     * Deletes a value from the cache.
     *
     * @param string $prefixed_key The key to delete.
     *
     * @return void
     */
    private static function delete_from_cache(string $prefixed_key): void
    {
    }
    /**
     * Wraps the data in the cache metadata and stores it.
     *
     * @param string  $prefixed_key The key to store the data under (with prefix).
     * @param mixed   $data         The data to store.
     * @param int     $ttl          The TTL of the cache.
     *
     * @return void
     */
    private static function write_to_cache($prefixed_key, $data, $ttl)
    {
    }
    /**
     * Get the cache contents for a certain key.
     *
     * @param string $prefixed_key The cache key (with prefix).
     *
     * @return array|false The cache contents (array with `data`, `ttl`, and `updated` entries).
     *                     False if there is no cached data.
     */
    private static function get_from_cache($prefixed_key)
    {
    }
    /**
     * Checks if the cache value is expired.
     *
     * @param string $prefixed_key   The cache key (with prefix).
     * @param array  $cache_contents The cache contents.
     *
     * @return boolean True if the contents are expired. False otherwise.
     */
    private static function is_expired($prefixed_key, $cache_contents)
    {
    }
    /**
     * Get the expiry time for a cache entry. Includes validation for time-related fields in the array.
     *
     * @param array $cache_contents The cache contents.
     *
     * @return int|null The expiry time as a timestamp. Null if the expiry time can't be determined.
     */
    private static function get_expiry_time(array $cache_contents): ?int
    {
    }
    /**
     * Maybe trigger a cache prefetch.
     *
     * @param string $key            The unprefixed cache key.
     * @param array  $cache_contents The cache contents.
     *
     * @return void
     */
    private static function maybe_trigger_prefetch(string $key, array $cache_contents): void
    {
    }
    /**
     * Adds the CACHE_KEY_PREFIX + plugin mode prefix to the key.
     * Ex: "wcstripe_cache_[mode]_[key].
     *
     * @param string $key       The key to add the prefix to.
     * @param string|null $mode The mode to use as prefix for the key. Default is null, which means the current plugin mode.
     *
     * @return string The key with the prefix.
     */
    private static function add_key_prefix(string $key, ?string $mode = \null): string
    {
    }
    /**
     * Deletes stale entries from the cache.
     *
     * @param int         $max_rows The maximum number of entries to check. -1 will check all rows. 0 will do nothing. Default is 500.
     * @param string|null $last_key The last key processed. If provided, the query will start from the next key. Allows for pagination.
     * @return array {
     *     @type bool        $more_entries True if more entries may exist. False if all rows have been processed.
     *     @type string|null $last_key     The last key processed.
     *     @type int         $processed    The number of entries processed.
     *     @type int         $deleted      The number of entries deleted.
     * }
     */
    public static function delete_stale_entries(int $max_rows = 500, ?string $last_key = \null): array
    {
    }
    /**
     * Deletes all stale entries from the cache.
     *
     * @param string $approach The approach to use to delete the entries. {@see CLEANUP_APPROACH_INLINE} will delete the entries in the
     *                         current process, and {@see CLEANUP_APPROACH_ASYNC} will enqueue an async job to delete the entries.
     * @param int    $max_rows The maximum number of entries to check. -1 will check all rows. 0 will do nothing. Default is 500.
     *
     * @return array {
     *     @type int           $processed The number of entries processed.
     *     @type int           $deleted   The number of entries deleted.
     *     @type WP_Error|null $error     Null if all is OK; WP_Error if there is an error.
     * }
     */
    public static function delete_all_stale_entries(string $approach, int $max_rows = 500): array
    {
    }
    /**
     * Schedule a daily async cleanup of the Stripe database cache.
     *
     * @return void
     */
    public static function maybe_schedule_daily_async_cleanup(): void
    {
    }
    /**
     * Unschedule the daily async cleanup of the Stripe database cache.
     *
     * @return void
     */
    public static function unschedule_daily_async_cleanup(): void
    {
    }
    /**
     * Deletes all stale entries from the cache asynchronously using Action Scheduler and the `wc_stripe_database_cache_cleanup_async` action.
     *
     * @param int   $max_rows The maximum number of entries to check. -1 will check all rows. 0 will do nothing. Default is 500.
     * @param array $job_data Internal job data. Must not be provided when calling the function/action.
     *
     * @return void
     */
    public static function delete_all_stale_entries_async(int $max_rows = 500, array $job_data = []): void
    {
    }
    /**
     * Helper function to validate the job data for {@see delete_all_stale_entries_async()}.
     *
     * @param array $job_data The job data.
     *
     * @return bool True if the job data is valid. False otherwise.
     */
    private static function validate_stale_entries_async_job_data(array $job_data): bool
    {
    }
}
class WC_Stripe_Exception extends \Exception
{
    /**
     * String sanitized/localized error message.
     *
     * @var string */
    protected $localized_message;
    /**
     * Setup exception
     *
     * @since 4.0.2
     * @param string $error_message Full response
     * @param string $localized_message user-friendly translated error message
     */
    public function __construct($error_message = '', $localized_message = '')
    {
    }
    /**
     * Returns the localized message.
     *
     * @since 4.0.2
     * @return string
     */
    public function getLocalizedMessage()
    {
    }
}
class WC_Stripe_Feature_Flags
{
    public const UPE_CHECKOUT_FEATURE_ATTRIBUTE_NAME = 'upe_checkout_experience_enabled';
    /**
     * Feature flag for Amazon Pay.
     *
     * @var string
     * @deprecated This feature flag will be removed in version 10.5.0. Amazon Pay is permanently enabled as of version 10.4.0.
     */
    public const AMAZON_PAY_FEATURE_FLAG_NAME = '_wcstripe_feature_amazon_pay';
    /**
     * Feature flag for Stripe Checkout Sessions.
     *
     * @var string
     * @since 10.4.0
     *
     * @deprecated This feature flag will be removed in version 10.8.0. Stripe Checkout Sessions is available as of version 10.6.0.
     */
    public const CHECKOUT_SESSIONS_FEATURE_FLAG_NAME = '_wcstripe_feature_stripe_checkout_sessions';
    /**
     * Feature flag for Agentic Commerce.
     *
     * @var string
     * @since 10.5.0
     */
    public const AGENTIC_COMMERCE_FEATURE_FLAG_NAME = '_wcstripe_feature_agentic_commerce';
    /**
     * Feature flag for expanding Optimized Checkout Suite in legacy checkout.
     *
     * @var string
     * @since 10.6.0
     */
    protected const EXPAND_OPTIMIZED_CHECKOUT_IN_LEGACY_CHECKOUT_FEATURE_FLAG_NAME = '_wcstripe_feature_expand_ocs_legacy_checkout';
    /**
     * Feature flag for the WordPress Abilities API integration.
     *
     * @var string
     * @since 10.8.0
     */
    public const ABILITIES_FEATURE_FLAG_NAME = '_wcstripe_feature_abilities';
    /**
     * Map of feature flag option names => their default "yes"/"no" value.
     * This single source of truth makes it easier to maintain our dev tools.
     *
     * @var array
     */
    protected static $feature_flags = ['_wcstripe_feature_upe' => 'yes', self::AMAZON_PAY_FEATURE_FLAG_NAME => 'no', self::CHECKOUT_SESSIONS_FEATURE_FLAG_NAME => 'no', self::AGENTIC_COMMERCE_FEATURE_FLAG_NAME => 'no', self::EXPAND_OPTIMIZED_CHECKOUT_IN_LEGACY_CHECKOUT_FEATURE_FLAG_NAME => 'no', self::ABILITIES_FEATURE_FLAG_NAME => 'no'];
    /**
     * Retrieve all defined feature flags with their default values.
     * Note: This method is intended for use in the dev tools.
     *
     * @return array
     */
    public static function get_all_feature_flags_with_defaults()
    {
    }
    /**
     * Retrieve the default value for a specific feature flag.
     *
     * @param string $flag
     * @return string
     */
    public static function get_option_with_default($flag)
    {
    }
    /**
     * Feature flag to control Amazon Pay feature availability.
     *
     * @return bool
     * @deprecated 10.9.0 Amazon Pay is permanently enabled as of version 10.4.0.
     */
    public static function is_amazon_pay_available()
    {
    }
    /**
     * Feature flag to control the availability of Stripe Checkout Sessions.
     *
     * @deprecated 10.9.0 Stripe Checkout Sessions is permanently available as of version 10.6.0. This method will be removed in a future release.
     * @return bool
     * @since 10.4.0
     */
    public static function is_checkout_sessions_available()
    {
    }
    /**
     * Checks whether Stripe ECE (Express Checkout Element) feature flag is enabled.
     * Express checkout buttons are rendered with either ECE or PRB depending on this feature flag.
     *
     * @return bool
     *
     * @deprecated 10.0.0 ECE is always enabled. This method will be removed in a future release.
     */
    public static function is_stripe_ece_enabled()
    {
    }
    /**
     * Checks whether UPE "preview" feature flag is enabled.
     * This allows the merchant to enable/disable UPE checkout.
     *
     * @return bool
     *
     * @deprecated 10.1.0 UPE is always enabled. This method will be removed in a future release.
     */
    public static function is_upe_preview_enabled()
    {
    }
    /**
     * Checks whether UPE is enabled.
     *
     * @return bool
     *
     * @deprecated 10.0.0 UPE is always enabled. This method will be removed in a future release.
     */
    public static function is_upe_checkout_enabled()
    {
    }
    /**
     * Whether the Optimized Checkout Suite should be expanded in legacy checkout.
     *
     * @return bool True if the Optimized Checkout Suite should be expanded in legacy checkout, false otherwise.
     * @since 10.6.0
     */
    public static function should_expand_ocs_in_legacy_checkout(): bool
    {
    }
    /**
     * Whether the Optimized Checkout (OC) feature flag is enabled.
     *
     * @return bool
     */
    public static function is_oc_available()
    {
    }
    /**
     * Whether the WordPress Abilities API integration is enabled.
     *
     * Default-off during rollout. Merchants, integrators, and developers
     * can opt in via the `wc_stripe_abilities_enabled` filter.
     *
     * @since 10.8.0
     * @return bool True if enabled, false otherwise.
     */
    public static function is_abilities_enabled(): bool
    {
    }
    /**
     * Whether Agentic Commerce product feed is enabled.
     *
     * @since 10.5.0
     * @return bool True if enabled, false otherwise.
     */
    public static function is_agentic_commerce_enabled(): bool
    {
    }
}
/**
 * Provides static methods as helpers.
 *
 * @since 4.0.0
 */
class WC_Stripe_Helper
{
    public const SETTINGS_OPTION = 'woocommerce_stripe_settings';
    public const LEGACY_META_NAME_FEE = 'Stripe Fee';
    public const LEGACY_META_NAME_NET = 'Net Revenue From Stripe';
    public const META_NAME_FEE = '_stripe_fee';
    public const META_NAME_NET = '_stripe_net';
    public const META_NAME_STRIPE_CURRENCY = '_stripe_currency';
    public const PAYMENT_AWAITING_ACTION_META = '_stripe_payment_awaiting_action';
    /**
     * The identifier for the official Affirm gateway plugin.
     *
     * @var string
     */
    public const OFFICIAL_PLUGIN_ID_AFFIRM = 'affirm';
    /**
     * The identifier for the official Klarna gateway plugin.
     *
     * @var string
     */
    public const OFFICIAL_PLUGIN_ID_KLARNA = 'klarna_payments';
    /**
     * List of legacy Stripe gateways.
     *
     * @var array
     */
    public static $stripe_legacy_gateways = [];
    /**
     * Validates a value against the expected Stripe object ID shape: `{prefix}_{token}`,
     * word characters only, at most 255 characters (Stripe's documented ceiling).
     *
     * @see https://docs.stripe.com/upgrades#what-changes-does-stripe-consider-to-be-backwards-compatible
     *
     * @param mixed             $id       The value to validate.
     * @param string|array|null $prefixes Allowed prefix or prefixes (e.g. 'cus' or [ 'pm', 'src', 'card' ]).
     *                                    When null, any lowercase-letter prefix is accepted.
     * @return bool True when the value is a syntactically valid Stripe identifier.
     */
    public static function is_valid_stripe_id($id, $prefixes = \null): bool
    {
    }
    /**
     * Get the main Stripe settings option.
     *
     * @param string $method (Optional) The payment method to get the settings from.
     * @return array $settings The Stripe settings.
     */
    public static function get_stripe_settings($method = \null)
    {
    }
    /**
     * Update the main Stripe settings option.
     *
     * @param $options array The Stripe settings.
     * @return void
     */
    public static function update_main_stripe_settings($options)
    {
    }
    /**
     * Delete the main Stripe settings option.
     *
     * @return void
     */
    public static function delete_main_stripe_settings()
    {
    }
    /**
     * Get Stripe amount to pay
     *
     * @param float  $total Amount due.
     * @param string $currency Accepted currency.
     *
     * @return float|int
     */
    public static function get_stripe_amount($total, $currency = '')
    {
    }
    /**
     * Converts a Stripe amount (in smallest currency unit) to a WooCommerce decimal amount.
     *
     * This is the inverse of `get_stripe_amount()`.
     *
     * @since 10.6.0
     * @param int    $amount   The amount in Stripe's smallest currency unit.
     * @param string $currency The three-letter currency code.
     * @return float The decimal amount for WooCommerce.
     */
    public static function convert_from_stripe_amount(int $amount, string $currency): float
    {
    }
    /**
     * Builds the description sent to Stripe for an order's payment or setup intent.
     *
     * @since 10.8.0
     * @param WC_Order $order The order the intent belongs to.
     * @return string The intent description. Format: "{blog name} - Order {order number}".
     */
    public static function get_payment_intent_description($order): string
    {
    }
    /**
     * Converts a Stripe amount (smallest currency unit) to WooCommerce amount.
     *
     * @param int    $stripe_amount Amount in Stripe's smallest unit (e.g. cents).
     * @param string $currency      Currency code (e.g. 'eur', 'usd').
     * @return string Formatted amount for display.
     */
    public static function get_woocommerce_amount_from_stripe_amount(int $stripe_amount, string $currency = ''): string
    {
    }
    /**
     * Localize Stripe messages based on code
     *
     * @since 3.0.6
     * @version 3.0.6
     * @return array
     */
    public static function get_localized_messages()
    {
    }
    /**
     * Generates a localized message for an error from a response.
     *
     * @since 10.3.0
     *
     * @param stdClass|object $response The response from the Stripe API.
     *
     * @return string The localized error message.
     */
    public static function get_localized_error_message_from_response($response)
    {
    }
    /**
     * List of currencies supported by Stripe that has no decimals
     * https://docs.stripe.com/currencies#zero-decimal from https://docs.stripe.com/currencies#presentment-currencies
     * ugx is an exception and not in this list for being a special cases in Stripe https://docs.stripe.com/currencies#special-cases
     *
     * @deprecated 10.7.0 Use WC_Stripe_Currency_Code::NO_DECIMAL_CURRENCY_CODES instead.
     *
     * @return array $currencies
     */
    public static function no_decimal_currencies()
    {
    }
    /**
     * List of currencies supported by Stripe that has three decimals
     * https://docs.stripe.com/currencies?presentment-currency=AE#three-decimal
     *
     * @deprecated 10.7.0 Use WC_Stripe_Currency_Code::THREE_DECIMAL_CURRENCY_CODES instead.
     *
     * @return array $currencies
     */
    public static function three_decimal_currencies()
    {
    }
    /**
     * Stripe uses smallest denomination in currencies such as cents.
     * We need to format the returned currency from Stripe into human readable form.
     * The amount is not used in any calculations so returning string is sufficient.
     *
     * @param object $balance_transaction
     * @param string $type Type of number to format
     * @return string
     */
    public static function format_balance_fee($balance_transaction, $type = 'fee')
    {
    }
    /**
     * Checks Stripe minimum order value authorized per currency
     *
     * @see https://docs.stripe.com/currencies#minimum-and-maximum-charge-amounts
     *
     * @return int The minimum amount in the smallest currency unit.
     */
    public static function get_minimum_amount(): int
    {
    }
    /**
     * Gets all the saved setting options from a specific method.
     * If specific setting is passed, only return that.
     *
     * @since 4.0.0
     * @version 4.0.0
     * @param string $method The payment method to get the settings from.
     * @param string $setting The name of the setting to get.
     */
    public static function get_settings($method = \null, $setting = \null)
    {
    }
    /**
     * List of legacy payment method classes.
     *
     * @return array
     *
     * @deprecated 10.3.0 This method will be removed in future versions.
     */
    public static function get_legacy_payment_method_classes()
    {
    }
    /**
     * List of legacy payment methods.
     *
     * @return array
     *
     * @deprecated 10.3.0 This method will be removed in future versions.
     */
    public static function get_legacy_payment_methods()
    {
    }
    /**
     * Get legacy payment method by id.
     *
     * @return null
     *
     * @deprecated 10.3.0 This method will be removed in future versions.
     */
    public static function get_legacy_payment_method($id)
    {
    }
    /**
     * List of available legacy payment method ids.
     * It returns the order saved in the `stripe_legacy_method_order` option in Stripe settings.
     * If the `stripe_legacy_method_order` option is not set, it returns the default order.
     *
     * The ids are mapped to the corresponding equivalent UPE method ids for rendeing on the frontend.
     *
     * @return array
     *
     * @deprecated 10.3.0 This method will be removed in future versions.
     */
    public static function get_legacy_available_payment_method_ids()
    {
    }
    /**
     * List of enabled legacy payment methods.
     *
     * @return array
     *
     * @deprecated 10.3.0 This method will be removed in future versions.
     */
    public static function get_legacy_enabled_payment_methods()
    {
    }
    /**
     * List of enabled legacy payment method ids.
     *
     * @return array
     *
     * @deprecated 10.3.0 This method will be removed in future versions.
     */
    public static function get_legacy_enabled_payment_method_ids()
    {
    }
    /**
     * Returns the list of ordered payment methods for the settings page when UPE is enabled.
     * It returns the order saved in the `stripe_upe_payment_method_order` option in Stripe settings.
     * If the `stripe_upe_payment_method_order` option is not set, it returns the default order of available gateways.
     *
     * @param WC_Stripe_Payment_Gateway $gateway Stripe payment gateway.
     * @return string[]
     */
    public static function get_upe_ordered_payment_method_ids($gateway)
    {
    }
    /**
     * Returns the list of payment methods that have capabilities set in the Stripe account data.
     *
     * @param string[] $payment_method_ids Payment method ids to filter by capabilities.
     * @param bool     $testmode Whether stripe is in test mode.
     * @return string[]
     */
    public static function filter_payment_methods_with_capabilities($payment_method_ids, $testmode)
    {
    }
    /**
     * Returns the list of enabled payment methods for the settings page when UPE is enabled.
     *
     * @param WC_Stripe_Payment_Gateway $gateway Stripe payment gateway.
     * @return string[]
     */
    public static function get_upe_settings_enabled_payment_method_ids($gateway)
    {
    }
    /**
     * Reorders the list of available payment gateways in 'woocommerce_gateway_order' option to include the Stripe methods
     * in the order merchants have chosen in the settings.
     *
     * @param array $ordered_payment_method_ids Ordered Stripe payment method list.
     */
    public static function add_stripe_methods_in_woocommerce_gateway_order($ordered_payment_method_ids = [])
    {
    }
    /**
     * Checks whether to show the Stripe first method notice.
     *
     * @return bool
     */
    public static function should_show_stripe_first_method_notice(): bool
    {
    }
    /**
     * Checks whether Stripe is the first gateway shown at checkout.
     * Disabled non-Stripe gateways are skipped because they don't render at checkout.
     *
     * @return bool
     */
    public static function is_stripe_in_position_one_in_woocommerce_gateway_order(): bool
    {
    }
    /**
     * Moves Stripe gateways to the first positions in WooCommerce gateway order.
     * Preserves relative order among Stripe gateways and among non-Stripe gateways.
     *
     * @return void
     */
    public static function move_stripe_gateways_to_top_in_woocommerce_gateway_order(): void
    {
    }
    /**
     * Checks if WC version is less than passed in version.
     *
     * @since 4.1.11
     * @param string $version Version to check against.
     * @return bool
     */
    public static function is_wc_lt($version)
    {
    }
    /**
     * Gets the webhook URL for Stripe triggers. Used mainly for
     * asyncronous redirect payment methods in which statuses are
     * not immediately chargeable.
     *
     * @since 4.0.0
     * @version 4.0.0
     * @return string
     */
    public static function get_webhook_url()
    {
    }
    /**
     * Gets the order by Stripe source ID.
     *
     * @since 4.0.0
     * @version 4.0.0
     * @param string $source_id
     */
    public static function get_order_by_source_id($source_id)
    {
    }
    /**
     * Gets the order by Stripe charge ID.
     *
     * @since 4.0.0
     * @since 4.1.16 Return false if charge_id is empty.
     * @param string $charge_id
     */
    public static function get_order_by_charge_id($charge_id)
    {
    }
    /**
     * Gets the order by Stripe refund ID.
     *
     * @since 7.5.0
     * @param string $refund_id
     */
    public static function get_order_by_refund_id($refund_id)
    {
    }
    /**
     * Gets the order by Stripe PaymentIntent ID.
     *
     * @since 4.2
     * @param string $intent_id The ID of the intent.
     * @return WC_Order|false Either an order or false when not found.
     */
    public static function get_order_by_intent_id($intent_id)
    {
    }
    /**
     * Gets the order by Stripe SetupIntent ID.
     *
     * @since 4.3
     * @param string $intent_id The ID of the intent.
     * @return WC_Order|false Either an order or false when not found.
     */
    public static function get_order_by_setup_intent_id($intent_id)
    {
    }
    /**
     * Gets the order by Stripe checkout session ID.
     *
     * When HPOS is enabled we use wc_get_orders() with meta_query.
     * When HPOS is disabled, meta_query in wc_get_orders() is not supported (WooCommerce
     * only supports it for the custom orders table), so we use a direct meta query for legacy.
     *
     * @since 10.5.0
     * @param string $checkout_session_id The ID of the checkout session.
     * @return WC_Order|bool Either an order or false when not found.
     */
    public static function get_order_by_checkout_session_id(string $checkout_session_id)
    {
    }
    /**
     * Gets the dynamic bank statement descriptor suffix.
     *
     * Stripe will automatically append this suffix to the merchant account's bank statement prefix.
     *
     * @param WC_Order $order The order to generate the suffix for.
     * @return string The statement descriptor suffix ("#{order-number}").
     */
    public static function get_dynamic_statement_descriptor_suffix($order)
    {
    }
    /**
     * Sanitize statement descriptor text.
     *
     * Stripe requires max of 22 characters and no special characters.
     *
     * @since 4.0.0
     * @param string $statement_descriptor Statement descriptor.
     * @return string $statement_descriptor Sanitized statement descriptor.
     */
    public static function clean_statement_descriptor($statement_descriptor = '')
    {
    }
    /**
     * Converts a WooCommerce locale to the closest supported by Stripe.js.
     *
     * Stripe.js supports only a subset of IETF language tags, if a country specific locale is not supported we use
     * the default for that language (https://docs.stripe.com/js/appendix/supported_locales).
     * If no match is found we return 'auto' so Stripe.js uses the browser locale.
     *
     * @param string $wc_locale The locale to convert.
     *
     * @return string Closest locale supported by Stripe ('auto' if NONE).
     */
    public static function convert_wc_locale_to_stripe_locale($wc_locale)
    {
    }
    /**
     * Checks if this page is a cart or checkout page.
     *
     * @since 5.2.3
     * @return boolean
     */
    public static function has_cart_or_checkout_on_current_page()
    {
    }
    /**
     * Whether the express checkout button styles are overridden by the "Apply uniform style"
     * option of the Cart & Checkout blocks' Express Checkout section (`showButtonStyles`).
     *
     * @since 10.9.0
     * @return bool
     */
    public static function is_express_checkout_button_style_overridden(): bool
    {
    }
    /**
     * Checks if Adaptive Pricing is available for the current Stripe account.
     * Refer to {@see get_adaptive_pricing_account_unavailable_reason()} for more details.
     *
     * @return bool True if Adaptive Pricing is available for the current Stripe account, false otherwise.
     */
    public static function is_adaptive_pricing_available_for_account(): bool
    {
    }
    /**
     * Returns the reason why adaptive pricing is not available for the current Stripe account.
     * Adaptive Pricing is not supported for accounts based in India, as well as for other situations.
     *
     * @link https://docs.stripe.com/payments/currencies/localize-prices/adaptive-pricing?payment-ui=embedded-components#restrictions
     *
     * @return string|null The reason why adaptive pricing is not available for the current Stripe account, or null if it is available.
     */
    public static function get_adaptive_pricing_account_unavailable_reason(): ?string
    {
    }
    /**
     * Returns whether adaptive pricing is supported for the current checkout.
     *
     * When on the checkout page, adaptive pricing is not supported if the cart contains
     * any of the following:
     * - A subscription product.
     * - A pre-order product that will be charged upon release.
     * - A deposit product.
     *
     * There's a hook to additionally opt out (but not back in) via the
     * `wc_stripe_is_adaptive_pricing_supported` filter.
     *
     * @return bool True if adaptive pricing is supported for the current checkout, false otherwise.
     * @since 10.6.0
     */
    public static function is_adaptive_pricing_supported(): bool
    {
    }
    /**
     * Return true if the current_tab and current_section match the ones we want to check against.
     *
     * @param string $tab
     * @param string $section
     * @return boolean
     */
    public static function should_enqueue_in_current_tab_section($tab, $section)
    {
    }
    /**
     * Returns true if the Stripe JS should be loaded on product pages.
     *
     * The critical part here is running the filter to allow merchants to disable Stripe's JS to
     * improve their store's performance when PRBs are disabled.
     *
     * @since 5.8.0
     * @return boolean True if Stripe's JS should be loaded, false otherwise.
     */
    public static function should_load_scripts_on_product_page()
    {
    }
    /**
     * Returns true if the Stripe JS should be loaded on the cart page.
     *
     * The critical part here is running the filter to allow merchants to disable Stripe's JS to
     * improve their store's performance when PRBs are disabled.
     *
     * @since 5.8.0
     * @return boolean True if Stripe's JS should be loaded, false otherwise.
     */
    public static function should_load_scripts_on_cart_page()
    {
    }
    /**
     * Returns true if the Stripe JS should be loaded for the provided location.
     *
     * @since 5.8.1
     * @param string $location  Either 'product' or 'cart'. Used to specify which location to check.
     * @return boolean True if Stripe's JS should be loaded for the provided location, false otherwise.
     */
    private static function should_load_scripts_for_ece_location($location)
    {
    }
    /**
     * Adds a source or payment method argument to the request array depending on what sort of
     * payment method ID is provided. If ID is neither a source or a payment method ID then nothing
     * is added.
     *
     * @param string $payment_method_id  The payment method ID that should be added to the request array.
     * @param array $request             The request representing the arguments that will be sent in the request.
     *
     * @return array  The updated request array.
     */
    public static function add_payment_method_to_request_array(string $payment_method_id, array $request): array
    {
    }
    /**
     * Evaluates whether the object passed to this function is a Stripe Payment Method.
     *
     * @param stdClass $object  The object that should be evaluated.
     * @return bool             Returns true if the object is a Payment Method; false otherwise.
     */
    public static function is_payment_method_object(\stdClass $payment_method): bool
    {
    }
    /**
     * Evaluates whether a given Stripe Source (or Stripe Payment Method) is reusable.
     * Payment Methods are always reusable; Sources are only reusable when the appropriate
     * usage metadata is provided.
     *
     * @param stdClass $payment_method  The source or payment method to be evaluated.
     * @return bool  Returns true if the source is reusable; false otherwise.
     */
    public static function is_reusable_payment_method(\stdClass $payment_method): bool
    {
    }
    /**
     * Returns true if the provided payment method is a card, false otherwise.
     *
     * @param stdClass $payment_method  The provided payment method object. Can be a Source or a Payment Method.
     *
     * @return bool  True if payment method is a card, false otherwise.
     */
    public static function is_card_payment_method(\stdClass $payment_method): bool
    {
    }
    /**
     * Returns a source or payment method from a given intent object.
     *
     * @param stdClass|object $intent  The intent that contains the payment method.
     *
     * @return stdClass|string|null  The payment method if found, null otherwise.
     */
    public static function get_payment_method_from_intent($intent)
    {
    }
    /**
     * Fetches a list of all Stripe gateway IDs.
     *
     * @return array An array of all Stripe gateway IDs.
     */
    public static function get_stripe_gateway_ids()
    {
    }
    /**
     * Returns the list of countries in the European Economic Area (EEA).
     *
     * Based on the list documented at https://www.gov.uk/eu-eea.
     *
     * @return string[]
     */
    public static function get_european_economic_area_countries()
    {
    }
    /**
     * Verifies if the provided payment method ID supports manual capture.
     *
     * @param string $payment_method_id Payment method ID.
     * @return bool Whether the payment method allows manual capture.
     */
    public static function payment_method_allows_manual_capture(string $payment_method_id)
    {
    }
    /**
     * Determines whether Level 3 data should be sent to Stripe for the given order.
     *
     * Level 3 is card-network only. Sending it for a non-card method draws a rejection that
     * sets the account-wide wc_stripe_level3_not_allowed transient, disabling level3 for
     * legitimate card orders too — so gate strictly to card payment types.
     *
     * @param WC_Order $order The order being processed.
     * @return bool Whether Level 3 data applies to the order's payment method.
     */
    public static function order_supports_level3_data($order)
    {
    }
    /**
     * Verifies if the provided order contains the identifier for a wallet method.
     *
     * @param WC_Order $order The order.
     * @return bool
     *
     * @deprecated 8.9.0
     */
    public static function is_wallet_payment_method($order)
    {
    }
    /**
     * Checks if a given URL matches the current site's Webhook URL.
     *
     * This function ignores trailing slashes and compares the host and path of the URLs.
     * The protocol is ignored. It also requires that any query parameters in the
     * webhook URL are present in the supplied URL, though extra query parameters in the
     * supplied URL are ignored.
     * There is one special case: when the supplied URL has the same host and path,
     * but an empty query string, it is treated as a match. This is to allow for cleanup
     * of webhook URLs that don't have identifying URL parameters.
     *
     * @param string $url         The URL to check.
     * @param string $webhook_url The webhook URL to compare against.
     *
     * @return bool Whether the URL is a matching webhook URL.
     */
    public static function is_webhook_url($url, $webhook_url = '')
    {
    }
    public static function get_transaction_url($is_test_mode = \false)
    {
    }
    /**
     * Returns the Stripe dashboard payment URL for a given object ID.
     *
     * @param string $id           The Stripe object ID to link to (PaymentIntent, charge, etc.).
     * @param bool   $is_test_mode Whether to link to the test-mode dashboard.
     * @return string
     */
    public static function get_transaction_url_for_id(string $id, bool $is_test_mode = \false): string
    {
    }
    /**
     * Returns a supported locale for setting Klarna's "preferred_locale".
     * While Stripe allows for localization of Klarna's payments page, it still
     * limits the locale to the billing country's set of supported locales. For example,
     * we cannot set the locale to "fr-FR" or "fr-US" if the billing country is "US".
     *
     * We compute our desired locale by combining the language tag from the store locale
     * and the billing country. We return that if it is supported.
     *
     * @param string $store_locale The WooCommerce store locale.
     *   Expected format: WordPress locale format, e.g. "en" or "en_US".
     * @param string $billing_country The billing country code.
     * @return string|null The Klarna locale or null if not supported.
     */
    public static function get_klarna_preferred_locale($store_locale, $billing_country)
    {
    }
    /**
     * Adds mandate data to the request.
     *
     * @param array $request The request to add mandate data to.
     *
     * @return array The request with mandate data added.
     */
    public static function add_mandate_data($request)
    {
    }
    /**
     * Logs an invalid IP address.
     *
     * @param string $ip_address The IP address to log.
     * @return void
     */
    public static function maybe_log_ip_issues($ip_address)
    {
    }
    /**
     * Return capability ID based on payment method ID.
     *
     * @param string $payment_method_id The payment method ID.
     * @return string The capability ID.
     */
    public static function get_payment_method_capability_id($payment_method_id)
    {
    }
    /**
     * Renders the admin header with back link consistently across admin pages.
     *
     * @param string $header_text The text to display in the header.
     * @param string $return_text The text for the return link.
     * @param string $return_url  The URL for the return link.
     * @return void
     */
    public static function render_admin_header($header_text, $return_text, $return_url)
    {
    }
    /**
     * Checks if a given currency is supported for Indian recurring payment mandates.
     *
     * @since 9.4.0
     * @param string $currency The currency code to check (e.g., 'usd', 'eur').
     * @return bool True if the currency is supported, false otherwise.
     */
    public static function is_currency_supported_for_indian_recurring_payment_mandate($currency)
    {
    }
    /**
     * Checks if the payment method should be saved.
     *
     * @since 9.6.0
     * @param bool $force_save Whether the payment method should be saved.
     * @param string $order_id Order ID.
     * @return bool
     */
    public static function should_force_save_payment_method($force_save = \false, $order_id = \null)
    {
    }
    /**
     * Returns the description for a refund reason.
     *
     * @return string
     */
    public static function get_refund_reason_description($refund_reason_key)
    {
    }
    /**
     * Checks if there are other Buy Now Pay Later plugins active.
     *
     * @return bool
     */
    public static function has_other_bnpl_plugins_active()
    {
    }
    /**
     * Checks if a given payment gateway plugin is active.
     *
     * @param string $plugin_id The plugin ID to check.
     * @param array $available_payment_gateways Optional. The available payment gateways. If not provided, the available payment gateways will be fetched using WC()->payment_gateways->payment_gateways.
     *
     * @return bool
     */
    public static function has_gateway_plugin_active($plugin_id, $available_payment_gateways = \null)
    {
    }
    /**
     * Checks if the given payment intent is valid for the order.
     * This checks the currency, amount, and payment method types.
     * The function will log a critical error if there is a mismatch.
     *
     * @param WC_Order      $order                 The order to check.
     * @param object|string $intent                The payment intent to check, can either be an object or an intent ID.
     * @param string|null   $selected_payment_type The selected payment type, which is generally applicable for updates. If null, we will use the stored payment type for the order.
     *
     * @throws Exception Throws an exception if the intent is not valid for the order.
     *
     * @deprecated 10.0.0 Use WC_Stripe_Order_Helper::validate_intent_for_order() instead.
     */
    public static function validate_intent_for_order($order, $intent, ?string $selected_payment_type = \null): void
    {
    }
    /**
     * Determines if the store is connected to Stripe.
     *
     * @param string $mode Optional. The mode to check. 'live' or 'test' - if not provided, the currently enabled mode will be checked.
     * @return bool True if connected, false otherwise.
     */
    public static function is_connected($mode = \null)
    {
    }
    /**
     * Checks if the order is using a Stripe payment method.
     *
     * @param $order WC_Order The order to check.
     * @return bool
     *
     * @deprecated 10.0.0 Use WC_Stripe_Order_Helper::is_stripe_gateway_order() instead.
     */
    public static function is_stripe_gateway_order($order)
    {
    }
    /**
     * Checks if the verbose debug mode is enabled.
     *
     * @return bool True if enabled, false otherwise.
     */
    public static function is_verbose_debug_mode_enabled(): bool
    {
    }
    /**
     * Builds the line items to pass to express checkout elements and to checkout sessions creation request.
     *
     * @param bool $itemized_display_items Whether to force itemized display items.
     * @return array The display items.
     */
    public static function build_line_items(bool $itemized_display_items = \false): array
    {
    }
    /**
     * Returns the number of decimals to use for a given currency.
     *
     * @since 10.6.0
     *
     * @param string $currency_code The currency code (e.g., 'usd', 'jpy').
     *
     * @return int The number of decimals to use for the currency.
     */
    public static function get_currency_decimals(string $currency_code): int
    {
    }
    /**
     * Build the localized survey params array shared across admin controllers.
     *
     * @param WC_Stripe_Account $account Stripe account instance.
     * @return array Associative array of survey parameters for wp_localize_script.
     */
    /**
     * Check if the current admin page is the WooCommerce Payments settings list page.
     *
     * @return bool
     */
    public static function is_admin_payments_page(): bool
    {
    }
    public static function get_exit_survey_params(\WC_Stripe_Account $account): array
    {
    }
    /**
     * Checks if the Stripe Checkout Sessions feature is available.
     *
     * @return bool True if the checkout sessions feature is available, false otherwise.
     */
    public static function is_checkout_sessions_available(): bool
    {
    }
}
/**
 * General hook manager.
 *
 * @since 10.9.0
 */
class WC_Stripe_Hook_Manager
{
    /**
     * The singleton instance.
     *
     * @var WC_Stripe_Hook_Manager|null
     */
    private static $instance = \null;
    /**
     * The registered plugin hooks.
     *
     * @var array<string, bool>
     */
    private array $registered_plugin_hooks = [];
    /**
     * The registered payment method hooks.
     *
     * @var array<string, array<string, bool>>
     */
    private array $registered_payment_method_hooks = [];
    /**
     * Get the singleton instance.
     *
     * @return WC_Stripe_Hook_Manager
     */
    public static function get_instance(): self
    {
    }
    /**
     * Constructor.
     */
    protected function __construct()
    {
    }
    /**
     * Check if the plugin hooks are registered for a given hook category.
     *
     * @param string $hook_category The hook category to check.
     * @return bool True if the plugin hooks are registered, false otherwise.
     */
    public function are_plugin_hooks_registered(string $hook_category): bool
    {
    }
    /**
     * Register the plugin hooks for a given hook category.
     *
     * @param string $hook_category The hook category to register.
     * @return bool True if the plugin hooks are registered, false otherwise.
     */
    public function register_plugin_hooks(string $hook_category): bool
    {
    }
    /**
     * Check if the payment method ID is valid.
     *
     * @param string $payment_method_id The payment method ID to check.
     * @return bool True if the payment method ID is valid, false otherwise.
     */
    public function is_valid_payment_method_id(string $payment_method_id): bool
    {
    }
    /**
     * Check if the payment method hooks are registered for a given hook category.
     *
     * @param string $payment_method_id The payment method ID to check.
     * @param string $hook_category     The hook category to check.
     * @return bool True if the payment method hooks for the hook category are registered, false otherwise.
     */
    public function are_payment_method_hooks_registered(string $payment_method_id, string $hook_category): bool
    {
    }
    /**
     * Register the payment method hooks for a given hook category.
     *
     * @param string $payment_method_id The payment method ID to register.
     * @param string $hook_category     The hook category to register.
     * @return bool True if the payment method hooks for the hook category are registered, false otherwise.
     */
    public function register_payment_method_hooks(string $payment_method_id, string $hook_category): bool
    {
    }
}
/**
 * WC_Stripe_Intent_Controller class.
 *
 * Handles in-checkout AJAX calls, related to Payment Intents.
 */
class WC_Stripe_Intent_Controller
{
    /**
     * Holds an instance of the gateway class.
     *
     * @since 4.2.0
     * @var WC_Stripe_UPE_Payment_Gateway
     */
    protected $gateway;
    /**
     * Adds the necessary hooks.
     *
     * @since 4.2.0
     *
     * @return void
     */
    public function init_hooks()
    {
    }
    /**
     * Returns an instantiated gateway.
     *
     * @since 4.2.0
     * @return WC_Stripe_Payment_Gateway
     */
    protected function get_gateway()
    {
    }
    /**
     * Returns an instantiated UPE gateway
     *
     * @since 5.6.0
     * @throws WC_Stripe_Exception if UPE is not enabled.
     * @return WC_Stripe_UPE_Payment_Gateway
     */
    protected function get_upe_gateway()
    {
    }
    /**
     * Loads the order from the current request.
     *
     * @since 4.2.0
     * @throws WC_Stripe_Exception An exception if there is no order ID or the order does not exist.
     * @return WC_Order
     */
    private function get_order_from_request()
    {
    }
    /**
     * Handles successful PaymentIntent authentications.
     *
     * @since 4.2.0
     *
     * @return void
     */
    public function verify_intent()
    {
    }
    /**
     * Handles exceptions during intent verification.
     *
     * @since 4.2.0
     * @param WC_Stripe_Exception $e            The exception that was thrown.
     * @param string              $redirect_url An URL to use if a redirect is needed.
     *
     * @return void
     */
    protected function handle_error($e, $redirect_url)
    {
    }
    /**
     * Creates a Setup Intent through AJAX while adding cards.
     *
     * @return void
     */
    public function create_setup_intent()
    {
    }
    /**
     * Handle AJAX requests for creating a payment intent for Stripe UPE.
     *
     * @return void
     */
    public function create_payment_intent_ajax()
    {
    }
    /**
     * Checks if the intent creation should be allowed for the given order and order key.
     *
     * @param WC_Order|WC_Order_Refund|bool $order     The order to check, may be an order, refund, or false.
     * @param string|null                   $order_key The order key to check. May be null or ''.
     * @return bool True if the intent creation should be allowed, false otherwise.
     */
    private function should_allow_intent_creation($order, ?string $order_key): bool
    {
    }
    /**
     * Creates payment intent using current cart or order and store details.
     *
     * @param int|null    $order_id The id of the order if intent created from Order.
     * @param string|null $payment_method_type The type of payment method to use for the intent.
     *
     * @throws Exception - If the create intent call returns with an error.
     * @return array
     */
    public function create_payment_intent($order_id = \null, $payment_method_type = \null)
    {
    }
    /**
     * Handle AJAX request for updating a payment intent for Stripe UPE.
     *
     * @since 5.6.0
     *
     * @return void
     */
    public function update_payment_intent_ajax()
    {
    }
    /**
     * Updates payment intent or setup intent to be able to save payment method.
     *
     * @since 5.6.0
     * @version 9.4.0
     *
     * @param string  $intent_id                 The id of the payment intent or setup intent to update.
     * @param int     $order_id                  The id of the order if intent created from Order.
     * @param boolean $save_payment_method       True if saving the payment method.
     * @param string  $selected_upe_payment_type The name of the selected UPE payment type or empty string.
     *
     * @throws Exception  If the update intent call returns with an error.
     * @return array|null An array with result of the update, or nothing
     */
    public function update_intent($intent_id = '', $order_id = \null, $save_payment_method = \false, $selected_upe_payment_type = '')
    {
    }
    /**
     * Handle AJAX requests for creating a setup intent without confirmation for Stripe UPE.
     *
     * @since 5.6.0
     * @version 9.4.0
     *
     * @return void
     */
    public function init_setup_intent_ajax()
    {
    }
    /**
     * Creates a setup intent without confirmation.
     *
     * @since 5.6.0
     * @version 9.4.0
     *
     * @param string|null $payment_method_type The type of payment method to use for the intent.
     * @return array
     * @throws Exception If customer for the current user cannot be read/found.
     */
    public function init_setup_intent($payment_method_type = \null)
    {
    }
    /**
     * Handle AJAX request after authenticating payment at checkout.
     *
     * This function is used to update the order status after the user has
     * been asked to authenticate their payment.
     *
     * This function is used for both:
     * - regular checkout
     * - Pay for Order page (in theory).
     *
     * @throws WC_Stripe_Exception
     *
     * @return void
     */
    public function update_order_status_ajax()
    {
    }
    /**
     * Handle AJAX request if error occurs while confirming intent.
     * We will log the error and update the order.
     *
     * @throws WC_Stripe_Exception
     *
     * @return void
     */
    public function update_failed_order_ajax()
    {
    }
    /**
     * Creates and confirm a payment intent with the given payment information.
     * Used for dPE.
     *
     * @param array $payment_information The payment information needed for creating and confirming the intent.
     *
     * @throws WC_Stripe_Exception - If the create intent call returns with an error.
     *
     * @return stdClass
     */
    public function create_and_confirm_payment_intent($payment_information)
    {
    }
    /**
     * Adds mandate options to the request if required.
     *
     * @param array            $request              The request array to add the mandate options to.
     * @param string|null      $payment_method_type  The type of payment method to use for the intent.
     * @param bool             $is_setup_intent      Whether the request is for a setup intent.
     * @param WC_Order|null    $order                The order object.
     *
     * @return array
     */
    private function maybe_add_mandate_options($request, $payment_method_type, $is_setup_intent = \false, $order = \null)
    {
    }
    /**
     * Updates and confirm a payment intent with the given payment information.
     * Used for dPE.
     *
     * @param object $payment_intent       The payment intent to update.
     * @param array $payment_information The payment information needed for creating and confirming the intent.
     *
     * @throws WC_Stripe_Exception - If any of the required information is missing.
     *
     * @return array
     */
    public function update_and_confirm_payment_intent($payment_intent, $payment_information)
    {
    }
    /**
     * Determines if the request contains all the required params for creating or updating a payment intent.
     *
     * @param array $required_params The required parameters for the payment intent.
     * @param array $non_empty_params The parameters that must not contain an empty value.
     * @param array $instance_params The parameters that must be of a specific type.
     * @param array $payment_information The payment information to be validated.
     * @return void
     * @throws WC_Stripe_Exception
     */
    private function validate_payment_intent_required_params($required_params, $non_empty_params, $instance_params, $payment_information)
    {
    }
    /**
     * Builds the base request parameters for creating/updating and confirming a payment intent.
     *
     * @param array $payment_information The payment information needed for creating/updating and confirming the intent.
     *
     * @return array The request parameters for creating/updating and confirming a payment intent.
     */
    private function build_base_payment_intent_request_params($payment_information)
    {
    }
    /**
     * Determines if mandate data is required for deferred intent UPE payment.
     *
     * A mandate must be provided before a deferred intent UPE payment can be processed.
     * This applies to SEPA, Bancontact, iDeal, Sofort, Cash App, Link payment methods,
     * ACH, ACSS Debit and BACS.
     * https://docs.stripe.com/payments/finalize-payments-on-the-server
     *
     * @param string $selected_payment_type         The name of the selected UPE payment type.
     * @param bool   $is_using_saved_payment_method Option. True if the customer is using a saved payment method, false otherwise.
     *
     * @return bool True if a mandate must be shown and acknowledged by customer before deferred intent UPE payment can be processed, false otherwise.
     */
    public function is_mandate_data_required($selected_payment_type, $is_using_saved_payment_method = \false)
    {
    }
    /**
     * Creates and confirm a setup intent with the given payment method ID.
     *
     * @param array $payment_information The payment information to be used for the setup intent.
     *
     * @throws WC_Stripe_Exception If the create intent call returns with an error.
     *
     * @return stdClass
     */
    public function create_and_confirm_setup_intent($payment_information)
    {
    }
    /**
     * Handle AJAX requests for creating and confirming a setup intent.
     *
     * @throws Exception If the AJAX request is missing the required data or if there's an error creating and confirming the setup intent.
     *
     * @return void
     */
    public function create_and_confirm_setup_intent_ajax()
    {
    }
    /**
     * Confirms the change payment method request for a subscription.
     *
     * This creates the payment method token from the setup intent.
     *
     * This function is used to confirm the change payment method request for a subscription after the user has been asked to authenticate their payment (eg 3D-Secure).
     * It is initiated from the subscription change payment method page.
     *
     * @return void
     */
    public function confirm_change_payment_from_setup_intent_ajax()
    {
    }
    /**
     * Determines whether the request needs to redirect customer off-site to authorize payment.
     * This is needed for the non-card UPE payment method (i.e. iDeal, giropay, etc.)
     *
     * @param array $payment_methods The list of payment methods used for the processing the payment.
     *
     * @return boolean True if the array consist of only one payment method and it isn't card, Boleto, Oxxo or Multibanco. False otherwise.
     */
    private function request_needs_redirection($payment_methods)
    {
    }
    /**
     * Determines whether the intent needs to be confirmed later.
     *
     * Some payment methods such as CashApp, Boleto, Oxxo and Multibanco require the payment to be confirmed later when
     * displaying the voucher or QR code to the customer on the checkout or pay for order page.
     *
     * @param array $payment_methods The list of payment methods used for the processing the payment.
     *
     * @return boolean
     */
    private function is_delayed_confirmation_required($payment_methods)
    {
    }
    /**
     * Check if manual renewal is required for the payment method.
     *
     * @param bool $is_payment_method_reusable Whether the payment method is reusable.
     *
     * @return bool
     */
    private function is_manual_renewal_required($is_payment_method_reusable)
    {
    }
}
/**
 * Log all things!
 *
 * @since 4.0.0
 * @version 4.0.0
 */
class WC_Stripe_Logger
{
    public const WC_LOG_FILENAME = 'woocommerce-gateway-stripe';
    public const LOG_CONTEXT = ['source' => self::WC_LOG_FILENAME, 'stripe_version' => \WC_STRIPE_VERSION, 'stripe_api_version' => \WC_Stripe_API::STRIPE_API_VERSION];
    /**
     * Log handler instance.
     *
     * @see https://developer.wordpress.org/reference/classes/wp_logger/
     * @see https://developer.woocommerce.com/docs/best-practices/data-management/logging/#log-handlers
     *
     * @var WC_Logger
     */
    public static $logger;
    // Logs have eight different severity levels:
    // - emergency
    // - alert
    // - critical
    // - error
    // - warning
    // - notice
    // - info
    // - debug
    /**
     * Creates a log entry of type emergency.
     *
     * @since 9.7.0
     *
     * @param string $message Message to send to the log file.
     * @param array $context Additional context to add to the log.
     *
     * @return void
     */
    public static function emergency($message, $context = [])
    {
    }
    /**
     * Creates a log entry of type alert.
     *
     * @since 9.7.0
     *
     * @param string $message Message to send to the log file.
     * @param array $context Additional context to add to the log.
     *
     * @return void
     */
    public static function alert($message, $context = [])
    {
    }
    /**
     * Creates a log entry of type critical.
     *
     * @since 9.7.0
     *
     * @param string $message Message to send to the log file.
     * @param array $context Additional context to add to the log.
     *
     * @return void
     */
    public static function critical($message, $context = [])
    {
    }
    /**
     * Creates a log entry of type error.
     *
     * @since 4.0.0
     *
     * @param string $message Message to send to the log file.
     * @param array $context Additional context to add to the log.
     *
     * @return void
     */
    public static function error($message, $context = [])
    {
    }
    /**
     * Creates a log entry of type warning.
     *
     * @since 9.7.0
     *
     * @param string $message Message to send to the log file.
     * @param array $context Additional context to add to the log.
     *
     * @return void
     */
    public static function warning($message, $context = [])
    {
    }
    /**
     * Creates a log entry of type notice.
     *
     * @since 9.7.0
     *
     * @param string $message Message to send to the log file.
     * @param array $context Additional context to add to the log.
     *
     * @return void
     */
    public static function notice($message, $context = [])
    {
    }
    /**
     * Creates a log entry of type info.
     *
     * @since 9.7.0
     *
     * @param string $message Message to send to the log file.
     * @param array $context Additional context to add to the log.
     *
     * @return void
     */
    public static function info($message, $context = [])
    {
    }
    /**
     * Creates a log entry of type debug.
     *
     * @since 4.0.0
     *
     * @param string $message Message to send to the log file.
     * @param array $context Additional context to add to the log.
     *
     * @return void
     */
    public static function debug($message, $context = [])
    {
    }
    /**
     * Whether we can log based on the plugin settings.
     *
     * @param string|null $log_level The log level to check. Can be one of 'warning', 'notice', 'info', 'debug'.
     *
     * @return boolean
     */
    public static function can_log(?string $log_level = \null): bool
    {
    }
    /**
     * Get the caller from outside this class.
     *
     * @return array|null {
     *     The calling code that is trying to log something. When not null, has the following properties:
     *
     *     @type string|null $class    The class that called the log method. May be null if the caller is a function.
     *     @type string      $function The function that called the log method.
     * }
     *
     * @since 10.8.0
     */
    private static function get_caller(): ?array
    {
    }
}
/**
 * Class WC_Stripe_Mode
 */
class WC_Stripe_Mode
{
    /**
     * Checks if the plugin is in live mode.
     *
     * @return bool Whether the plugin is in live mode.
     */
    public static function is_live()
    {
    }
    /**
     * Checks if the plugin is in test mode.
     *
     * @return bool Whether the plugin is in test mode.
     */
    public static function is_test()
    {
    }
}
/**
 * Handles and process orders from asyncronous flows.
 *
 * @since 4.0.0
 */
class WC_Stripe_Order_Handler extends \WC_Stripe_Payment_Gateway
{
    private static $_this;
    /**
     * Constructor.
     *
     * @since 4.0.0
     * @version 4.0.0
     */
    public function __construct()
    {
    }
    /**
     * Public access to instance object.
     *
     * @since 4.0.0
     * @version 4.0.0
     */
    public static function get_instance()
    {
    }
    /**
     * Shows a warning message about editing uncaptured orders.
     *
     * @param $order_id
     */
    public function show_warning_for_uncaptured_orders($order_id)
    {
    }
    /**
     * Processes payments.
     *
     * Note at this time the original source has already been
     * saved to a customer card (if applicable) from process_payment.
     *
     * @since 4.0.0
     * @since 4.1.8 Add $previous_error parameter.
     * @param int  $order_id
     * @param bool $retry
     * @param mix  $previous_error Any error message from previous request.
     */
    public function process_redirect_payment($order_id, $retry = \true, $previous_error = \false)
    {
    }
    /**
     * Processes the orders that are redirected.
     *
     * @since 4.0.0
     * @version 4.0.0
     */
    public function maybe_process_redirect_order()
    {
    }
    /**
     * Processes redirect payment for stores with legacy checkout experience enabled.
     *
     * @since 8.3.0
     */
    private function maybe_process_legacy_redirect()
    {
    }
    /**
     * Capture payment when the order is changed from on-hold to complete or processing.
     *
     * @since 3.1.0
     * @version 4.0.0
     * @param  int $order_id
     * @return stdClass|void Result of payment capture.
     */
    public function capture_payment($order_id)
    {
    }
    /**
     * Cancel pre-auth on refund/cancellation.
     *
     * @since 3.1.0
     * @version 4.2.2
     * @param  int $order_id
     */
    public function cancel_payment($order_id)
    {
    }
    /**
     * Filter. Adds additional meta data to Tracks events.
     * Note that this filter is only called if WC_Site_Tracking::is_tracking_enabled.
     *
     * @since 4.5.1
     * @param array Properties to be appended to.
     * @param string Event name, e.g. orders_edit_status_change.
     */
    public function woocommerce_tracks_event_properties($properties, $prefixed_event_name)
    {
    }
    /**
     * Prevents WooCommerce's hold stock feature from cancelling Stripe orders that are awaiting action from the customer,
     * whether it's waiting for the customer to complete 3DS or waiting for the redirect/webhook
     * to be processed to complete the payment.
     *
     * This function uses the _stripe_payment_awaiting_action meta to determine if the order is waiting for customer action, however if the order has
     * been pending for more than a day and still has this meta, we assume it's been abandoned and should be cancelled.
     *
     * @since 6.9.0
     *
     * @param bool     $cancel_order Whether to cancel the order.
     * @param WC_Order $order        The order object.
     *
     * @return bool
     */
    public function prevent_cancelling_orders_awaiting_action($cancel_order, $order)
    {
    }
    /**
     * Whether the intent is a SetupIntent that Stripe has not settled yet.
     *
     * Only intents that can still succeed count; a failed or cancelled one stays cancellable.
     *
     * @param stdClass|object $intent The intent retrieved for the order.
     * @return bool
     */
    private static function is_setup_intent_awaiting_verification($intent): bool
    {
    }
    /**
     * Surfaces a paid-but-pending Stripe order whose auto-cancellation we just blocked via an order
     * note and an action hook. A meta flag keeps it idempotent across wc_cancel_unpaid_orders() retries.
     *
     * @since 10.8.0
     *
     * @param WC_Order $order The paid order whose cancellation was prevented.
     */
    private function surface_prevented_paid_order_cancellation($order): void
    {
    }
}
/**
 * WC_Stripe_Order_Helper class.
 */
class WC_Stripe_Order_Helper
{
    /**
     * Meta key for Stripe currency.
     *
     * @var string
     */
    private const META_STRIPE_CURRENCY = '_stripe_currency';
    /**
     * Meta key for Stripe fee.
     *
     * @var string
     */
    private const META_STRIPE_FEE = '_stripe_fee';
    /**
     * Meta key for Stripe fee (legacy version).
     *
     * @var string
     */
    private const LEGACY_META_STRIPE_FEE = 'Stripe Fee';
    /**
     * Meta key for Stripe net.
     *
     * @var string
     */
    private const META_STRIPE_NET = '_stripe_net';
    /**
     * Meta key for Stripe net (legacy version).
     *
     * @var string
     */
    private const LEGACY_META_STRIPE_NET = 'Net Revenue From Stripe';
    /**
     * Meta key for Stripe source ID.
     *
     * @var string
     */
    private const META_STRIPE_SOURCE_ID = '_stripe_source_id';
    /**
     * Meta key for Stripe refund ID.
     *
     * @var string
     */
    private const META_STRIPE_REFUND_ID = '_stripe_refund_id';
    /**
     * Meta key for Stripe intent ID.
     *
     * @var string
     */
    private const META_STRIPE_INTENT_ID = '_stripe_intent_id';
    /**
     * Meta key for Stripe setup intent ID.
     *
     * @var string
     */
    private const META_STRIPE_SETUP_INTENT = '_stripe_setup_intent';
    /**
     * Meta key for Stripe checkout session ID.
     *
     * @var string
     */
    private const META_STRIPE_CHECKOUT_SESSION_ID = '_stripe_checkout_session_id';
    /**
     * Meta key for whether the payment method should be saved to the store after checkout session payment.
     *
     * @var string
     */
    private const META_STRIPE_SHOULD_SAVE_PAYMENT_METHOD = '_stripe_should_save_payment_method_to_store';
    /**
     * Meta key for Stripe presentment currency.
     *
     * @var string
     */
    private const META_STRIPE_PRESENTMENT_CURRENCY = '_stripe_presentment_currency';
    /**
     * Meta key for Stripe presentment amount.
     *
     * @var string
     */
    private const META_STRIPE_PRESENTMENT_AMOUNT = '_stripe_presentment_amount';
    /**
     * Meta key for Stripe customer ID.
     *
     * @var string
     */
    private const META_STRIPE_CUSTOMER_ID = '_stripe_customer_id';
    /**
     * Meta key for Stripe card ID.
     *
     * @var string
     */
    private const META_STRIPE_CARD_ID = '_stripe_card_id';
    /**
     * Meta key for Stripe mandate ID.
     *
     * @var string
     */
    private const META_STRIPE_MANDATE_ID = '_stripe_mandate_id';
    /**
     * Meta key for the Stripe Multibanco data.
     *
     * @var string
     */
    private const META_STRIPE_MULTIBANCO_DATA = '_stripe_multibanco';
    /**
     * Meta key for the Stripe refund status.
     *
     * @var string
     */
    private const META_STRIPE_REFUND_STATUS = '_stripe_refund_status';
    /**
     * Meta key for the Stripe card brand.
     *
     * @var string
     */
    private const META_STRIPE_CARD_BRAND = '_stripe_card_brand';
    /**
     * Meta key for Stripe charge captured.
     *
     * @var string
     */
    private const META_STRIPE_CHARGE_CAPTURED = '_stripe_charge_captured';
    /**
     * Meta key for Stripe status final.
     *
     * @var string
     */
    private const META_STRIPE_STATUS_FINAL = '_stripe_status_final';
    /**
     * Meta key for Stripe refund failure reason.
     *
     * @var string
     */
    private const META_STRIPE_REFUND_FAILURE_REASON = '_stripe_refund_failure_reason';
    /**
     * Meta key for Stripe UPE payment type.
     *
     * @var string
     */
    private const META_STRIPE_UPE_PAYMENT_TYPE = '_stripe_upe_payment_type';
    /**
     * Meta key for Stripe UPE waiting for redirect.
     *
     * @var string
     */
    private const META_STRIPE_UPE_WAITING_FOR_REDIRECT = '_stripe_upe_waiting_for_redirect';
    /**
     * Meta key for Stripe UPE redirect processed.
     *
     * @var string
     */
    private const META_STRIPE_UPE_REDIRECT_PROCESSED = '_stripe_upe_redirect_processed';
    /**
     * Meta key for payment awaiting action.
     *
     * @var string
     */
    private const META_STRIPE_PAYMENT_AWAITING_ACTION = '_stripe_payment_awaiting_action';
    /**
     * Meta key for lock payment to prevent multiple simultaneous payment attempts.
     *
     * @var string
     */
    private const META_STRIPE_LOCK_PAYMENT = '_stripe_lock_payment';
    /**
     * Meta key for lock refund to prevent multiple simultaneous refund attempts.
     *
     * @var string
     */
    private const META_STRIPE_LOCK_REFUND = '_stripe_lock_refund';
    /**
     * Meta key for the In-Person Payments channel.
     *
     * Stores the ipp_channel value from Stripe PaymentIntent metadata.
     * Used to identify POS terminal payments (e.g. 'mobile_pos', 'mobile_store_management').
     *
     * @var string
     */
    private const META_STRIPE_IPP_CHANNEL = '_stripe_ipp_channel';
    /**
     * Singleton instance of the class.
     *
     * @var null|WC_Stripe_Order_Helper
     */
    private static ?\WC_Stripe_Order_Helper $instance = \null;
    /**
     * Gets the singleton instance of the class.
     *
     * @return WC_Stripe_Order_Helper
     */
    public static function get_instance(): self
    {
    }
    /**
     * Sets the singleton instance of the class.
     *
     * @param WC_Stripe_Order_Helper|null $instance
     * @return void
     */
    public static function set_instance(?self $instance)
    {
    }
    /**
     * Gets the Stripe currency for order.
     *
     * @since 10.0.0
     *
     * @param WC_Order $order
     * @return string $currency
     */
    public function get_stripe_currency(?\WC_Order $order = \null)
    {
    }
    /**
     * Updates the Stripe currency for order.
     *
     * @since 10.0.0
     *
     * @param WC_Order $order
     * @param string $currency
     */
    public function update_stripe_currency(\WC_Order $order, string $currency)
    {
    }
    /**
     * Gets the Stripe fee for order. With legacy check.
     *
     * @since 10.0.0
     *
     * @param WC_Order|null $order
     * @return string $amount
     */
    public function get_stripe_fee(?\WC_Order $order = \null)
    {
    }
    /**
     * Updates the Stripe fee for order.
     *
     * @since 10.0.0
     *
     * @param WC_Order|null $order
     * @param float $amount
     */
    public function update_stripe_fee(?\WC_Order $order = \null, float $amount = 0.0)
    {
    }
    /**
     * Deletes the Stripe fee for order.
     *
     * @since 10.0.0
     *
     * @param WC_Order|null $order
     */
    public function delete_stripe_fee(?\WC_Order $order = \null)
    {
    }
    /**
     * Gets the Stripe net for order. With legacy check.
     *
     * @since 10.0.0
     *
     * @param WC_Order|null $order
     * @return string $amount
     */
    public function get_stripe_net(?\WC_Order $order = \null)
    {
    }
    /**
     * Updates the Stripe net for order.
     *
     * @since 10.0.0
     *
     * @param WC_Order|null $order
     * @param float $amount
     */
    public function update_stripe_net(?\WC_Order $order = \null, float $amount = 0.0)
    {
    }
    /**
     * Deletes the Stripe net for order.
     *
     * @since 10.0.0
     *
     * @param WC_Order|null $order
     */
    public function delete_stripe_net(?\WC_Order $order = \null)
    {
    }
    /**
     * Gets the Stripe source for order.
     *
     * @since 10.0.0
     *
     * @param WC_Order|null $order
     * @return false|string|null
     */
    public function get_stripe_source_id(?\WC_Order $order = \null)
    {
    }
    /**
     * Updates the Stripe source for order.
     *
     * @since 10.0.0
     *
     * @param WC_Order|null $order
     * @param string $source_id
     * @return false|void
     */
    public function update_stripe_source_id(?\WC_Order $order = \null, string $source_id = '')
    {
    }
    /**
     * Deletes the Stripe source for order.
     *
     * @since 10.0.0
     *
     * @param WC_Order|null $order
     * @return false|void
     */
    public function delete_stripe_source_id(?\WC_Order $order = \null)
    {
    }
    /**
     * Updates the Stripe refund for order.
     *
     * @since 10.0.0
     *
     * @param WC_Order|null $order
     * @return false|string|null
     */
    public function get_stripe_refund_id(?\WC_Order $order = \null)
    {
    }
    /**
     * Updates the Stripe refund for order.
     *
     * @since 10.0.0
     *
     * @param WC_Order|null $order
     * @param string $refund_id
     * @return false|void
     */
    public function update_stripe_refund_id(?\WC_Order $order = \null, string $refund_id = '')
    {
    }
    /**
     * Deletes the Stripe refund for order.
     *
     * @since 10.0.0
     *
     * @param WC_Order|null $order
     * @return false|void
     */
    public function delete_stripe_refund_id(?\WC_Order $order = \null)
    {
    }
    /**
     * Gets the Stripe refund ID stored on a refund record.
     *
     * The parent order's `_stripe_refund_id` only tracks the most recent refund, so
     * per-refund reconciliation must read the ID from the refund record itself.
     *
     * @since 10.9.0
     *
     * @param WC_Order_Refund|null $refund
     * @return false|string|null
     */
    public function get_stripe_refund_id_for_refund(?\WC_Order_Refund $refund = \null)
    {
    }
    /**
     * Stores the Stripe refund ID on a refund record.
     *
     * Does not persist; callers must save the refund. `WC_Order_Refund` has no
     * `transaction_id` in WooCommerce core, so meta is the only portable storage.
     *
     * @since 10.9.0
     *
     * @param WC_Order_Refund|null $refund
     * @param string $refund_id
     * @return false|void
     */
    public function update_stripe_refund_id_for_refund(?\WC_Order_Refund $refund = \null, string $refund_id = '')
    {
    }
    /**
     * Deletes the Stripe refund ID from a refund record.
     *
     * Does not persist; callers must save the refund.
     *
     * @since 10.9.0
     *
     * @param WC_Order_Refund|null $refund
     * @return false|void
     */
    public function delete_stripe_refund_id_for_refund(?\WC_Order_Refund $refund = \null)
    {
    }
    /**
     * Returns the order's refund records that carry their own Stripe refund ID.
     *
     * @since 10.9.0
     *
     * @param WC_Order $order
     * @return WC_Order_Refund[]
     */
    public function get_refunds_with_stripe_refund_ids(\WC_Order $order): array
    {
    }
    /**
     * Deletes the Stripe refund ID from each of the order's refund records.
     *
     * Unlike the single-record methods, this persists each deletion — as a bulk
     * operation over records it looked up itself, callers have nothing to save.
     *
     * @since 10.9.0
     *
     * @param WC_Order $order
     * @return void
     */
    public function delete_stripe_refund_ids_from_refunds(\WC_Order $order): void
    {
    }
    /**
     * Gets the Stripe intent for order.
     *
     * @since 10.0.0
     *
     * @param WC_Order|null $order
     * @return false|string|null
     */
    public function get_stripe_intent_id(?\WC_Order $order = \null)
    {
    }
    /**
     * Updates the Stripe intent for order.
     *
     * @since 10.0.0
     *
     * @param WC_Order|null $order
     * @param string $intent_id
     * @return false|void
     */
    public function update_stripe_intent_id(?\WC_Order $order = \null, string $intent_id = '')
    {
    }
    /**
     * Deletes the Stripe intent for order.
     *
     * @since 10.0.0
     *
     * @param WC_Order|null $order
     * @return false|void
     */
    public function delete_stripe_intent_id(?\WC_Order $order = \null)
    {
    }
    /**
     * Gets the Stripe setup intent for order.
     *
     * @since 10.0.0
     *
     * @param WC_Order|null $order
     * @return false|string|null
     */
    public function get_stripe_setup_intent_id(?\WC_Order $order = \null)
    {
    }
    /**
     * Updates the Stripe setup intent for order.
     *
     * @since 10.0.0
     *
     * @param WC_Order|null $order
     * @param string $intent_id
     * @return false|void
     */
    public function update_stripe_setup_intent_id(?\WC_Order $order = \null, string $intent_id = '')
    {
    }
    /**
     * Gets the Stripe checkout session ID for order.
     *
     * @since 10.5.0
     *
     * @param WC_Order|null $order
     * @return false|string|null
     */
    public function get_stripe_checkout_session_id(?\WC_Order $order = \null)
    {
    }
    /**
     * Updates the Stripe checkout session ID for order.
     *
     * @since 10.5.0
     *
     * @param WC_Order|null $order
     * @param string $checkout_session_id
     * @return false|void
     */
    public function update_stripe_checkout_session_id(?\WC_Order $order = \null, string $checkout_session_id = '')
    {
    }
    /**
     * Gets whether the payment method should be saved to the store after a checkout session payment.
     *
     * @param WC_Order|null $order
     * @return bool
     */
    public function get_should_save_stripe_payment_method(?\WC_Order $order = \null): bool
    {
    }
    /**
     * Sets the flag indicating the payment method should be saved to the store after a checkout session payment.
     *
     * @param WC_Order|null $order
     */
    public function update_should_save_stripe_payment_method(?\WC_Order $order = \null, bool $value = \false): void
    {
    }
    /**
     * Clears the flag indicating the payment method should be saved to the store after a checkout session payment.
     *
     * @param WC_Order|null $order
     */
    public function delete_should_save_stripe_payment_method(?\WC_Order $order = \null): void
    {
    }
    /**
     * Gets the Stripe presentment currency for order.
     *
     * @since 10.5.0
     *
     * @param WC_Order|null $order
     * @return false|string|null
     */
    public function get_stripe_presentment_currency(?\WC_Order $order = \null)
    {
    }
    /**
     * Updates the Stripe presentment currency for order.
     *
     * @since 10.5.0
     *
     * @param WC_Order|null $order
     * @param string $presentment_currency
     * @return false|void
     */
    public function update_stripe_presentment_currency(?\WC_Order $order = \null, string $presentment_currency = '')
    {
    }
    /**
     * Gets the Stripe presentment amount for order.
     *
     * @since 10.5.0
     *
     * @param WC_Order|null $order
     * @return false|string|null
     */
    public function get_stripe_presentment_amount(?\WC_Order $order = \null)
    {
    }
    /**
     * Updates the Stripe presentment amount for order.
     *
     * @since 10.5.0
     *
     * @param WC_Order|null $order
     * @param int           $presentment_amount Stripe minor-unit integer (e.g. 7800 for $78.00)
     * @return false|void
     */
    public function update_stripe_presentment_amount(?\WC_Order $order = \null, int $presentment_amount = 0)
    {
    }
    /**
     * Gets the Stripe customer ID for an order.
     *
     * @since 10.0.0
     *
     * @param WC_Order|null $order
     * @return false|string|null
     */
    public function get_stripe_customer_id(?\WC_Order $order = \null)
    {
    }
    /**
     * Updates the Stripe customer ID for an order.
     *
     * @since 10.0.0
     *
     * @param WC_Order|null $order
     * @param string $customer_id
     * @return false|void
     */
    public function update_stripe_customer_id(?\WC_Order $order = \null, string $customer_id = '')
    {
    }
    /**
     * Deletes the Stripe customer ID for an order.
     *
     * @since 10.0.0
     *
     * @param WC_Order|null $order
     * @return false|void
     */
    public function delete_stripe_customer_id(?\WC_Order $order = \null)
    {
    }
    /**
     * Gets the Stripe card for order.
     *
     * @since 10.0.0
     *
     * @param WC_Order|null $order
     * @return false|string|null
     */
    public function get_stripe_card_id(?\WC_Order $order = \null)
    {
    }
    /**
     * Deletes the Stripe card for order.
     *
     * @since 10.0.0
     *
     * @param WC_Order|null $order
     * @return false|void
     */
    public function delete_stripe_card_id(?\WC_Order $order = \null)
    {
    }
    /**
     * Gets the Stripe mandate ID for order.
     *
     * @since 10.1.0
     *
     * @param WC_Order|null $order
     * @return false|string|null
     */
    public function get_stripe_mandate_id(?\WC_Order $order = \null)
    {
    }
    /**
     * Updates the Stripe mandate ID for an order.
     *
     * @since 10.1.0
     *
     * @param WC_Order|null $order
     * @param string $mandate_id
     * @return false|void
     */
    public function update_stripe_mandate_id(?\WC_Order $order = \null, string $mandate_id = '')
    {
    }
    /**
     * Gets the Stripe Multibanco data for order.
     *
     * @since 10.1.0
     *
     * @param WC_Order|null $order
     * @return false|string|null
     */
    public function get_stripe_multibanco_data(?\WC_Order $order = \null)
    {
    }
    /**
     * Updates the Stripe Multibanco data for an order.
     *
     * @since 10.1.0
     *
     * @param WC_Order|null $order
     * @param array $multibanco_data
     * @return false|void
     */
    public function update_stripe_multibanco_data(?\WC_Order $order = \null, array $multibanco_data = [])
    {
    }
    /**
     * Updates the Stripe refund status for an order.
     *
     * @since 10.1.0
     *
     * @param WC_Order|null $order
     * @param string $status
     * @return false|void
     */
    public function update_stripe_refund_status(?\WC_Order $order = \null, string $status = '')
    {
    }
    /**
     * Updates the Stripe card brand for an order.
     *
     * @since 10.1.0
     *
     * @param WC_Order|null $order
     * @param string $brand
     * @return false|void
     */
    public function update_stripe_card_brand(?\WC_Order $order = \null, string $brand = '')
    {
    }
    /**
     * Gets the Stripe refund failure reason for order.
     *
     * @since 10.1.0
     *
     * @param WC_Order|null $order
     * @return false|string|null
     */
    public function get_stripe_refund_failure_reason(?\WC_Order $order = \null)
    {
    }
    /**
     * Updates the Stripe mandate ID for an order.
     *
     * @since 10.1.0
     *
     * @param WC_Order|null $order
     * @param string $failure_reason
     * @return false|void
     */
    public function update_stripe_refund_failure_reason(?\WC_Order $order = \null, string $failure_reason = '')
    {
    }
    /**
     * Deletes the Stripe refund failure reason for an order.
     *
     * @since 10.1.0
     *
     * @param WC_Order|null $order
     * @return false|void
     */
    public function delete_stripe_refund_failure_reason(?\WC_Order $order = \null)
    {
    }
    /**
     * Gets whether charge was captured for order.
     *
     * @since 10.1.0
     *
     * @param WC_Order|null $order The order to get the meta from.
     * @return false|string|null
     */
    public function get_stripe_charge_captured(?\WC_Order $order = \null)
    {
    }
    /**
     * Checks if charge was captured for order.
     *
     * @since 10.1.0
     *
     * @param WC_Order|null $order
     * @return bool
     */
    public function is_stripe_charge_captured(?\WC_Order $order = \null): bool
    {
    }
    /**
     * Sets whether charge was captured for order.
     *
     * @since 10.1.0
     *
     * @param WC_Order $order The order to add the metadata to.
     * @param bool $captured  Whether the charge was captured.
     *
     * @return void
     */
    public function set_stripe_charge_captured(\WC_Order $order, bool $captured = \true): void
    {
    }
    /**
     * Checks if stripe status is final for order.
     *
     * @since 10.1.0
     *
     * @param WC_Order|null $order
     * @return bool
     */
    public function is_stripe_status_final(?\WC_Order $order = \null): bool
    {
    }
    /**
     * Sets whether stripe status is final for order.
     *
     * @since 10.1.0
     *
     * @param WC_Order $order The order to add the metadata to.
     * @param bool $is_final  Whether the stripe status is final.
     *
     * @return void
     */
    public function set_stripe_status_final(\WC_Order $order, bool $is_final = \true): void
    {
    }
    /**
     * Gets the Stripe UPE payment type for order.
     *
     * @since 10.0.0
     *
     * @param WC_Order|null $order
     * @return false|string|null
     */
    public function get_stripe_upe_payment_type(?\WC_Order $order = \null)
    {
    }
    /**
     * Updates the Stripe UPE payment type for order.
     *
     * @since 10.0.0
     *
     * @param WC_Order|null $order
     * @param string $payment_type
     * @return false|void
     */
    public function update_stripe_upe_payment_type(?\WC_Order $order = \null, string $payment_type = '')
    {
    }
    /**
     * Gets the Stripe UPE waiting for redirect for order.
     *
     * @since 10.0.0
     *
     * @param WC_Order|null $order
     * @return bool|null
     */
    public function get_stripe_upe_waiting_for_redirect(?\WC_Order $order = \null)
    {
    }
    /**
     * Updates the Stripe UPE waiting for redirect for order.
     *
     * @since 10.0.0
     *
     * @param WC_Order|null $order
     * @param bool $waiting_for_redirect
     * @return false|void
     */
    public function update_stripe_upe_waiting_for_redirect(?\WC_Order $order = \null, bool $waiting_for_redirect = \false)
    {
    }
    /**
     * Deletes the Stripe UPE waiting for redirect for order.
     *
     * @since 10.0.0
     *
     * @param WC_Order|null $order
     * @return false|void
     */
    public function delete_stripe_upe_waiting_for_redirect(?\WC_Order $order = \null)
    {
    }
    /**
     * Gets the Stripe UPE redirect processed for order.
     *
     * @since 10.0.0
     *
     * @param WC_Order|null $order
     * @return bool|null
     */
    public function get_stripe_upe_redirect_processed(?\WC_Order $order = \null)
    {
    }
    /**
     * Updates the Stripe UPE redirect processed for order.
     *
     * @since 10.0.0
     *
     * @param WC_Order|null $order
     * @param bool $redirect_processed
     * @return false|void
     */
    public function update_stripe_upe_redirect_processed(?\WC_Order $order = \null, bool $redirect_processed = \false)
    {
    }
    /**
     * Gets the In-Person Payments channel for the order.
     *
     * @since 10.6.0
     *
     * @param WC_Order|null $order
     * @return false|string|null
     */
    public function get_stripe_ipp_channel(?\WC_Order $order = \null)
    {
    }
    /**
     * Updates the In-Person Payments channel for the order.
     *
     * @since 10.6.0
     *
     * @param WC_Order|null $order
     * @param string $channel The IPP channel value (e.g. 'mobile_pos', 'mobile_store_management').
     * @return false|void
     */
    public function update_stripe_ipp_channel(?\WC_Order $order = \null, string $channel = '')
    {
    }
    /**
     * Adds payment intent id and order note to order if payment intent is not already saved
     *
     * @since 10.0.0
     *
     * @param string $payment_intent_id The payment intent ID to add to the order.
     * @param $order WC_Order
     */
    public function add_payment_intent_to_order(string $payment_intent_id, \WC_Order $order): void
    {
    }
    /**
     * Adds metadata to the order to indicate that the payment is awaiting action.
     *
     * This meta is primarily used to prevent orders from being cancelled by WooCommerce's hold stock settings.
     *
     * @since 10.0.0
     *
     * @param WC_Order $order The order to add the metadata to.
     * @param bool     $save  Whether to save the order after adding the metadata.
     *
     * @return void
     */
    public function set_payment_awaiting_action(\WC_Order $order, bool $save = \true): void
    {
    }
    /**
     * Checks if the order is awaiting action for payment.
     *
     * @since 10.0.0
     *
     * @param WC_Order $order The order to check.
     * @return bool
     */
    public function is_payment_awaiting_action(\WC_Order $order): bool
    {
    }
    /**
     * Removes the metadata from the order that was used to indicate that the payment was awaiting action.
     *
     * @since 10.0.0
     *
     * @param WC_Order $order The order to remove the metadata from.
     * @param bool     $save  Whether to save the order after removing the metadata.
     *
     * @return void
     */
    public function remove_payment_awaiting_action(\WC_Order $order, bool $save = \true): void
    {
    }
    /**
     * Returns the payment intent or setup intent ID from a given order object.
     *
     * @since 10.0.0
     *
     * @param WC_Order $order The order to fetch the Stripe intent from.
     *
     * @return string|bool  The intent ID if found, false otherwise.
     */
    public function get_intent_id_from_order(\WC_Order $order)
    {
    }
    /**
     * Get owner details.
     *
     * @since 10.0.0
     *
     * @param WC_Order $order
     * @return object $details
     */
    public function get_owner_details(\WC_Order $order): object
    {
    }
    /**
     * Checks if the given payment intent is valid for the order.
     * This checks the currency, amount, and payment method types.
     * The function will log a critical error if there is a mismatch.
     *
     * @since 10.0.0
     *
     * @param WC_Order      $order                 The order to check.
     * @param object|string $intent                The payment intent to check, can either be an object or an intent ID.
     * @param string|null   $selected_payment_type The selected payment type, which is generally applicable for updates. If null, we will use the stored payment type for the order.
     *
     * @throws Exception Throws an exception if the intent is not valid for the order.
     */
    public function validate_intent_for_order(\WC_Order $order, $intent, ?string $selected_payment_type = \null): void
    {
    }
    /**
     * Checks if the order is using a Stripe payment method.
     *
     * @since 10.0.0
     *
     * @param $order WC_Order The order to check.
     * @return bool
     */
    public function is_stripe_gateway_order(\WC_Order $order): bool
    {
    }
    /**
     * Validates that the order meets the minimum order amount
     * set by Stripe.
     *
     * @since 10.0.0
     * @param WC_Order $order
     */
    public function validate_minimum_order_amount(\WC_Order $order): void
    {
    }
    /**
     * Locks an order for payment intent processing for 5 minutes.
     *
     * @since 10.0.0
     *
     * @param WC_Order $order  The order that is being paid.
     * @return bool            A flag that indicates whether the order is already locked.
     */
    public function lock_order_payment(\WC_Order $order): bool
    {
    }
    /**
     * Unlocks an order for processing by payment intents.
     *
     * @since 10.0.0
     *
     * @param WC_Order $order The order that is being unlocked.
     */
    public function unlock_order_payment(\WC_Order $order): void
    {
    }
    /**
     * Retrieves the existing lock for an order.
     *
     * @since 10.0.0
     *
     * @param WC_Order $order The order to retrieve the lock for
     * @return mixed
     */
    public function get_order_existing_payment_lock(\WC_Order $order)
    {
    }
    /**
     * Locks an order for refund processing for 5 minutes.
     *
     * @since 10.0.0
     *
     * @param WC_Order $order  The order that is being refunded.
     * @return bool            A flag that indicates whether the order is already locked.
     */
    public function lock_order_refund(\WC_Order $order): bool
    {
    }
    /**
     * Retrieves the existing refund lock for an order.
     *
     * @since 10.0.0
     *
     * @param $order WC_Order The order to retrieve the lock for
     * @return mixed
     */
    public function get_order_existing_refund_lock(\WC_Order $order)
    {
    }
    /**
     * Unlocks an order for processing refund.
     *
     * @since 10.0.0
     *
     * @param WC_Order $order The order that is being unlocked.
     */
    public function unlock_order_refund(\WC_Order $order): void
    {
    }
    /**
     * Checks if an order is locked for payment processing.
     *
     * @since 10.0.0
     *
     * @param WC_Order $order The order to check the lock for
     * @return bool
     */
    protected function is_order_payment_locked(\WC_Order $order): bool
    {
    }
    /**
     * Checks if an order is locked for refund.
     *
     * @since 10.0.0
     *
     * @param WC_Order $order The order to check the lock for
     * @return bool
     */
    protected function is_order_refund_locked(\WC_Order $order): bool
    {
    }
    /**
     * Helper function to get order meta data. The goal of the function is to reduce boilerplate in the helper due to `null` checks everywhere.
     *
     * @param WC_Order|null $order The order to get meta for.
     * @param string $key The meta key to get.
     * @return false|string|null
     */
    protected function get_order_meta(?\WC_Order $order, string $key)
    {
    }
    /**
     * Helper function to update order meta data. The goal of the function is to reduce boilerplate in the helper due to `null` checks everywhere.
     *
     * @param WC_Order|null $order The order to update meta for.
     * @param string $key The meta key to update.
     * @param mixed $value The meta value to set.
     * @return false|void
     */
    protected function update_order_meta(?\WC_Order $order, string $key, $value)
    {
    }
    /**
     * Helper function to delete an order meta data. The goal of the function is to reduce boilerplate in the helper due to `null` checks everywhere.
     *
     * @param WC_Order|null $order The order to delete meta for.
     * @param string $key The meta key to delete.
     * @return false|void
     */
    protected function delete_order_meta(?\WC_Order $order, string $key)
    {
    }
}
class WC_Stripe_Payment_Cancelled_Exception extends \WC_Stripe_Exception
{
}
/**
 * Class WC_Stripe_Payment_Method_Configurations
 */
class WC_Stripe_Payment_Method_Configurations
{
    /**
     * The primary configuration.
     *
     * @var object|null
     */
    private static $primary_configuration = \null;
    /**
     * The test mode configuration parent ID.
     *
     * @var string|null
     */
    public const TEST_MODE_CONFIGURATION_PARENT_ID = 'pmc_1LEKjBGX8lmJQndTBOzjqxSa';
    /**
     * The live mode configuration parent ID.
     *
     * @var string|null
     */
    public const LIVE_MODE_CONFIGURATION_PARENT_ID = 'pmc_1LEKjAGX8lmJQndTk2ziRchV';
    /**
     * The payment method configuration cache key.
     *
     * @var string
     */
    public const CONFIGURATION_CACHE_KEY = 'payment_method_configuration';
    /**
     * The payment method configuration cache expiration (TTL).
     *
     * @var int
     */
    public const CONFIGURATION_CACHE_EXPIRATION = 20 * \MINUTE_IN_SECONDS;
    /**
     * The payment method configuration fetch cooldown option key.
     */
    public const FETCH_COOLDOWN_OPTION_KEY = 'wcstripe_payment_method_config_fetch_cooldown';
    /**
     * Get the merchant payment method configuration in Stripe.
     *
     * @param bool $force_refresh Whether to force a refresh of the payment method configuration from Stripe.
     * @return object|null
     */
    private static function get_primary_configuration($force_refresh = \false)
    {
    }
    /**
     * Get the payment method configuration from cache.
     *
     * @return object|null
     */
    private static function get_payment_method_configuration_from_cache()
    {
    }
    /**
     * Clear the payment method configuration from cache.
     */
    public static function clear_payment_method_configuration_cache()
    {
    }
    /**
     * Cache the payment method configuration.
     *
     * @param object|array $configuration The payment method configuration to set in cache.
     */
    private static function set_payment_method_configuration_cache($configuration)
    {
    }
    /**
     * Get the payment method configuration from Stripe.
     *
     * @return object|null
     */
    private static function get_payment_method_configuration_from_stripe()
    {
    }
    /**
     * Given the list of payment method configurations returned from Stripe,
     * find the fallback Payment Method Configuration to use.
     *
     * @param array $payment_method_configurations The list of payment method configurations returned from Stripe.
     * @return array {
     *     @type object|null $pmc    The fallback Payment Method Configuration.
     *     @type string      $reason The reason for using the fallback Payment Method Configuration.
     * }
     */
    private static function get_fallback_payment_method_configuration(array $payment_method_configurations): array
    {
    }
    /**
     * Get the WooCommerce Platform payment method configuration id.
     *
     * @return string
     */
    public static function get_parent_configuration_id()
    {
    }
    /**
     * Get the current payment method configuration ID.
     *
     * @return string|null The payment method configuration ID when settings sync is enabled and we have a PMC. Null otherwise.
     */
    public static function get_configuration_id(): ?string
    {
    }
    /**
     * Get the UPE available payment method IDs.
     *
     * @return array
     */
    public static function get_upe_available_payment_method_ids()
    {
    }
    /**
     * Get the enabled payment method IDs in the PMC that are not supported in the plugin.
     *
     * @return string[] List of payment method IDs that are enabled in the PMC but not supported in the plugin.
     */
    public static function get_unsupported_enabled_payment_method_ids_in_pmc(): array
    {
    }
    /**
     * Get the UPE enabled payment method IDs.
     *
     * @param bool $force_refresh Whether to force a refresh of the payment method configuration from Stripe.
     * @return array
     */
    public static function get_upe_enabled_payment_method_ids($force_refresh = \false)
    {
    }
    /**
     * Update the payment method configuration.
     *
     * @param array $enabled_payment_method_ids
     * @param array $available_payment_method_ids
     */
    public static function update_payment_method_configuration($enabled_payment_method_ids, $available_payment_method_ids)
    {
    }
    /**
     * Record tracks events for each payment method that was enabled or disabled.
     *
     * @param array $enabled_methods An array of payment method ids that were enabled.
     * @param array $disabled_methods An array of payment method ids that were disabled.
     *
     * @return void
     */
    public static function record_payment_method_settings_event($enabled_methods, $disabled_methods)
    {
    }
    /**
     * Check if the payment method configurations API can be used to store enabled payment methods.
     * This requires the Stripe account to be connected to Stripe.
     *
     * @return bool
     */
    public static function is_enabled()
    {
    }
    /**
     * Migrates the payment methods from the DB option to PMC if needed.
     *
     * @param bool $force_migration Whether to force the migration.
     */
    public static function maybe_migrate_payment_methods_from_db_to_pmc($force_migration = \false)
    {
    }
    /**
     * Disables the payment method configuration sync by setting pmc_enabled to 'no' in the Stripe settings.
     * This is called when no Payment Method Configuration is found that inherits from the WooCommerce Platform.
     */
    private static function disable_payment_method_configuration_sync()
    {
    }
}
/**
 * Class WC_Stripe_Status.
 *
 * Integrates with Woo Status pages to offer additional tools and insights for the Stripe extension.
 */
class WC_Stripe_Status
{
    /**
     * Maximum number of subscriptions to process in the detached subscriptions tool.
     *
     * @var int
     */
    private const SUBSCRIPTIONS_DETACHED_LIST_LIMIT = 1000;
    /**
     * Instance of WC_Stripe_UPE_Payment_Gateway
     *
     * @var WC_Stripe_UPE_Payment_Gateway
     */
    private $gateway;
    /**
     * Instance of WC_Stripe_Account
     *
     * @var WC_Stripe_Account
     */
    private $account;
    /**
     * WC_Stripe_Status constructor.
     *
     * @param WC_Stripe_UPE_Payment_Gateway $gateway Gateway instance.
     * @param WC_Stripe_Account $account Account instance.
     */
    public function __construct($gateway, $account)
    {
    }
    /**
     * Init hooks.
     *
     * @return void
     */
    public function init_hooks()
    {
    }
    /**
     * Renders Stripe information on the status page.
     *
     * @return void
     */
    public function render_status_report_section()
    {
    }
    /**
     * Add Stripe tools to the Woo debug tools.
     *
     * @param array $tools List of current available tools.
     *
     * @return array
     */
    public function debug_tools($tools)
    {
    }
    /**
     * Lists Stripe subscriptions with detached payment methods.
     *
     * @return void
     */
    public function list_detached_subscriptions()
    {
    }
    /**
     * Clean up stale entries from the Stripe database cache.
     *
     * @return void
     */
    public function database_cache_cleanup(): void
    {
    }
}
/**
 * WC_Stripe_Update_Manager class.
 *
 * @since 10.8.0
 */
class WC_Stripe_Update_Manager
{
    /**
     * Singleton instance of the update manager.
     *
     * @var self|null
     */
    private static $instance = \null;
    /**
     * Get the singleton instance of the update manager.
     *
     * @return self
     */
    public static function get_instance(): self
    {
    }
    /**
     * Private constructor to prevent direct instantiation.
     */
    private function __construct()
    {
    }
    /**
     * Run update checks when a new version of the plugin is being installed.
     * This can include updates, downgrades, and fresh installs.
     *
     * @param string $previous_version The previous version of the plugin.
     * @return void
     * @since 10.8.0
     */
    public static function run_update_checks($previous_version): void
    {
    }
    /**
     * Run the update functions.
     *
     * @param string $previous_version The previous version of the plugin.
     * @return void
     */
    protected function run_update_functions($previous_version): void
    {
    }
    /**
     * Get the update functions to run.
     *
     * @return callable[]
     */
    protected function get_update_functions(): array
    {
    }
}
class WC_Stripe_UPE_Compatibility
{
    public const MIN_WP_VERSION = '5.6';
    public const MIN_WC_VERSION = '5.5';
    public const LEARN_MORE_LINK = 'https://developer.woocommerce.com/2021/08/26/developer-advisory-woocommerce-stripe-support-policy-change/';
    public static function is_wp_supported()
    {
    }
    public static function is_wc_supported()
    {
    }
}
/**
 * Class WC_Stripe_Webhook_Handler.
 *
 * Handles webhooks from Stripe on sources that are not immediately chargeable.
 *
 * @since 4.0.0
 */
class WC_Stripe_Webhook_Handler extends \WC_Stripe_Payment_Gateway
{
    /**
     * Cache key prefix marking an agentic checkout session as owned by this site.
     *
     * Stripe allows a single agentic-commerce endpoint per account, so only the owning site
     * receives the synchronous customize/finalize hooks and records a claim under this prefix.
     *
     * @var string
     */
    protected const AGENTIC_SESSION_CLAIM_CACHE_PREFIX = 'agentic_session_claim_';
    /**
     * How long an agentic session claim is retained, long enough to cover the gap between the
     * sync hook and the broadcast checkout.session.completed event for a pending checkout.
     *
     * @var int
     */
    protected const AGENTIC_SESSION_CLAIM_TTL = \DAY_IN_SECONDS;
    /**
     * Order meta flag recording that a late Stripe payment on a cancelled order was already
     * refunded/voided. Deferred webhooks are retried by Action Scheduler, and refunds are not
     * idempotent, so this guards against issuing a second refund on a retry.
     *
     * @var string
     */
    protected const META_REFUNDED_AFTER_CANCELLATION = '_stripe_refunded_after_cancellation';
    /**
     * Is test mode active?
     *
     * @var bool
     */
    public $testmode;
    /**
     * The secret to use when verifying webhooks.
     *
     * @var string
     */
    protected $secret;
    /**
     * The Action Scheduler service.
     *
     * @var WC_Stripe_Action_Scheduler_Service
     */
    protected $action_scheduler_service;
    /**
     * How long to wait before processing a deferred webhook.
     *
     * @var int
     */
    protected $deferred_webhook_delay = 2 * \MINUTE_IN_SECONDS;
    /**
     * How long to wait before retrying a webhook that lost the order-payment lock race.
     *
     * The order-received redirect handler holds the lock only across a single Stripe API
     * call (~1s), so a short backoff settles the order quickly instead of leaving it pending
     * for the full deferred delay. Kept well above the typical hold to avoid a busy re-queue loop.
     *
     * @var int
     */
    protected $locked_order_retry_delay = 10;
    /**
     * The Action Scheduler hook to use when retrying a webhook.
     *
     * @var string
     */
    protected $deferred_webhook_action = 'wc_stripe_deferred_webhook';
    /**
     * How long to wait before updating the payment intent description and metadata after a webhook.
     *
     * @var int
     */
    protected $process_payment_intent_metadata_delay = 2 * \MINUTE_IN_SECONDS;
    /**
     * The Action Scheduler hook to use when updating the payment intent description and metadata after a webhook.
     *
     * @var string
     */
    protected $process_payment_intent_metadata_action = 'wc_stripe_process_payment_intent_metadata';
    /**
     * The legacy Action Scheduler hook that updated checkout session metadata after a webhook.
     * Kept registered so jobs queued before the switch to {@see $process_payment_intent_metadata_action} still run to completion.
     *
     * @deprecated 10.8.0 Replaced by {@see $process_payment_intent_metadata_action}.
     *
     * @var string
     */
    protected $process_checkout_session_metadata_action = 'wc_stripe_process_checkout_session_metadata';
    /**
     * The order object being processed.
     *
     * @var WC_Order|null
     */
    protected $resolved_order = \null;
    /**
     * Constructor.
     *
     * @since 4.0.0
     * @version 5.0.0
     */
    public function __construct()
    {
    }
    /**
     * Check incoming requests for Stripe Webhook data and process them.
     *
     * @since 4.0.0
     * @version 5.0.0
     */
    public function check_for_webhook()
    {
    }
    /**
     * Whether the event's Stripe account matches the connected account.
     *
     * Fails open when the event carries no account or the connected account is unknown.
     *
     * @param object $event The decoded webhook event.
     * @return bool True when the event may be processed, false when it must be skipped.
     */
    protected function event_belongs_to_connected_account($event): bool
    {
    }
    /**
     * The Stripe account an event originated from.
     *
     * Connect events expose it as `account`; agentic delegated-checkout events use `context`.
     *
     * @param object $event The decoded webhook event.
     * @return string Account ID (e.g. `acct_123`), or an empty string when absent.
     */
    protected function get_event_account_id($event): string
    {
    }
    /**
     * The connected Stripe account ID for the active mode.
     *
     * @return string Account ID (e.g. `acct_123`), or an empty string when unknown.
     */
    protected function get_connected_account_id(): string
    {
    }
    /**
     * Check if the Stripe account has duplicate webhooks setup for this site.
     *
     * @since 9.1.0
     */
    public function has_duplicate_webhooks_setup()
    {
    }
    /**
     * Verify the incoming webhook notification to make sure it is legit.
     *
     * @since 4.0.0
     * @version 5.0.0
     * @param array $request_headers The request headers from Stripe.
     * @param array $request_body    The request body from Stripe.
     * @param string $secret         The secret key for the webhook.
     * @return string The validation result (e.g. self::VALIDATION_SUCCEEDED )
     */
    public function validate_request($request_headers, $request_body, $secret)
    {
    }
    /**
     * Gets the incoming request headers. Some servers are not using
     * Apache and "getallheaders()" will not work so we may need to
     * build our own headers.
     *
     * @since 4.0.0
     * @version 4.0.0
     */
    public function get_request_headers()
    {
    }
    /**
     * Process webhook payments.
     * This is where we charge the source.
     *
     * @since 4.0.0
     * @version 4.0.0
     * @param object $notification
     * @param bool   $retry
     */
    public function process_webhook_payment($notification, $retry = \true)
    {
    }
    /**
     * Process webhook dispute that is created.
     * This is triggered when fraud is detected or customer processes chargeback.
     * We want to put the order into on-hold and add an order note.
     *
     * @since 4.0.0
     * @param object $notification
     */
    public function process_webhook_dispute($notification)
    {
    }
    /**
     * Process webhook dispute that is closed.
     *
     * @since 4.4.1
     * @param object $notification
     */
    public function process_webhook_dispute_closed($notification)
    {
    }
    /**
     * Process webhook capture. This is used for an authorized only
     * transaction that is later captured via Stripe not WC.
     *
     * @since 4.0.0
     * @version 4.0.0
     * @param object $notification
     */
    public function process_webhook_capture($notification)
    {
    }
    /**
     * Process webhook charge succeeded. This is used for payment methods
     * that takes time to clear which is asynchronous. e.g. SEPA, Sofort.
     *
     * @since 4.0.0
     * @version 4.0.0
     * @param object $notification
     */
    public function process_webhook_charge_succeeded($notification)
    {
    }
    /**
     * Process webhook charge failed.
     *
     * @since 4.0.0
     * @since 4.1.5 Can handle any fail payments from any methods.
     * @since 9.0.0 Can handle payment expiration.
     * @param object $notification
     */
    public function process_webhook_charge_failed($notification)
    {
    }
    /**
     * Process webhook source canceled. This is used for payment methods
     * that redirects and awaits payments from customer.
     *
     * @since 4.0.0
     * @since 4.1.15 Add check to make sure order is processed by Stripe.
     * @param object $notification
     */
    public function process_webhook_source_canceled($notification)
    {
    }
    /**
     * Process webhook refund.
     *
     * @since 4.0.0
     * @version 4.9.0
     * @param object $notification
     */
    public function process_webhook_refund($notification)
    {
    }
    /**
     * Process a refund update.
     *
     * @param object $notification
     */
    public function process_webhook_refund_updated($notification)
    {
    }
    /**
     * Process webhook reviews that are opened. i.e Radar.
     *
     * @since 4.0.6
     * @param object $notification
     */
    public function process_review_opened($notification)
    {
    }
    /**
     * Process webhook reviews that are closed. i.e Radar.
     *
     * @since 4.0.6
     * @param object $notification
     */
    public function process_review_closed($notification)
    {
    }
    /**
     * Checks if capture is partial.
     *
     * @since 4.0.0
     * @version 4.0.0
     * @param object $notification
     */
    public function is_partial_capture($notification)
    {
    }
    /**
     * Gets the first refund object from charge notification.
     *
     * @since 7.0.2
     * @param object $notification
     *
     * @return object
     */
    public function get_refund_object($notification)
    {
    }
    /**
     * Gets the amount refunded.
     *
     * @since 4.0.0
     * @version 4.0.0
     * @param object $notification
     */
    public function get_refund_amount($notification)
    {
    }
    /**
     * Gets the amount we actually charge.
     *
     * @since 4.0.0
     * @version 4.0.0
     * @param object $notification
     */
    public function get_partial_amount_to_charge($notification)
    {
    }
    /**
     * Handles the processing of a payment intent webhook.
     *
     * @param stdClass $notification The webhook notification from Stripe.
     */
    public function process_payment_intent($notification)
    {
    }
    public function process_setup_intent($notification)
    {
    }
    /**
     * Completes an order whose SetupIntent has succeeded.
     *
     * Delegates to the gateway so the token, mandate and payment-method-title work that follows a
     * confirmed intent runs here too. A SetupIntent that only reaches `succeeded` asynchronously
     * (bank microdeposits, SEPA) never passes through the redirect handler, so completing the order
     * without that step would leave the shopper paid up but without a saved payment method.
     *
     * @param WC_Order $order  The order to complete.
     * @param stdClass $intent The SetupIntent from the webhook payload.
     * @return void
     */
    private function complete_order_for_succeeded_setup_intent($order, $intent)
    {
    }
    /**
     * Schedules a job to run in the future to check on the status of a webhook.
     *
     * Each Webhook type which is deferred should be supported by @see process_deferred_webhook().
     *
     * @param stdClass $webhook_notification The webhook payload received from Stripe.
     * @param array    $additional_data      Additional data to pass to the scheduled job.
     * @param int|null $delay                Seconds to wait before retrying. Defaults to $deferred_webhook_delay.
     */
    protected function defer_webhook_processing($webhook_notification, $additional_data, $delay = \null)
    {
    }
    /**
     * Restores a webhook notification to an object after Action Scheduler deserialization.
     *
     * Action Scheduler in defer_webhook_processing() serializes job args; stdClass becomes a nested array. process_deferred_webhook() expects Stripe's
     * object-shaped payload.
     *
     * @param array|object $notification Raw notification from the scheduled job.
     * @return object      The normalized notification object.
     * @throws Exception When the payload cannot be normalized.
     */
    private function normalize_deferred_webhook_notification_to_object($notification)
    {
    }
    /**
     * Processes a deferred webhook event.
     *
     * Deferred webhooks are scheduled by @see defer_webhook_processing().
     *
     * @param string          $webhook_type    The webhook event name/type.
     * @param array           $additional_data Additional data passed to the scheduled job.
     * @param array|object|null $notification  The webhook notification payload (arrays after AS deserialization).
     */
    public function process_deferred_webhook($webhook_type, $additional_data, $notification = \null)
    {
    }
    /**
     * Returns true when the order was paid via a Stripe gateway (the main `stripe` gateway or a
     * `stripe_*` payment method).
     *
     * @param WC_Order $order
     */
    protected function order_uses_stripe_gateway(\WC_Order $order): bool
    {
    }
    /**
     * Flags an unexpected Stripe charge on an order that was paid via a different gateway.
     *
     * Adds a visible order note linking to the Stripe dashboard and fires an action so site-specific
     * integrations can react (for example, to auto-refund). Idempotent per intent — repeat calls for
     * the same PaymentIntent on the same order are no-ops, so it's safe to invoke from every webhook
     * path that can detect the unexpected charge (charge.succeeded fallback, charge.captured fallback).
     *
     * @param WC_Order $order        The order to evaluate.
     * @param string   $intent_id    The Stripe PaymentIntent ID.
     * @param object   $charge       The Stripe Charge object.
     * @param string   $webhook_type The Stripe webhook event type (e.g. 'charge.succeeded' or 'charge.captured').
     *
     * @return bool True when an unexpected-charge note was added, false when skipped.
     */
    protected function maybe_flag_unexpected_charge_on_order(\WC_Order $order, string $intent_id, object $charge, string $webhook_type): bool
    {
    }
    /**
     * Updates a Checkout Session payment intent with the order description and metadata.
     *
     * @since 10.8.0
     *
     * @param string $payment_intent_id The payment intent ID.
     * @param array  $request           The request payload (description and metadata) computed at scheduling time.
     * @return void
     */
    public function process_payment_intent_metadata(string $payment_intent_id, array $request): void
    {
    }
    /**
     * Processes the checkout session metadata update event to store additional metadata on the checkout session object.
     *
     * @deprecated 10.8.0 Replaced by {@see process_payment_intent_metadata()}; kept so jobs queued before the switch still run to completion.
     *
     * @param string $checkout_session_id The checkout session ID.
     * @param array $metadata The metadata from the checkout session.
     * @return void
     */
    public function process_checkout_session_metadata(string $checkout_session_id, array $metadata): void
    {
    }
    /**
     * Handles a deferred payment_intent.succeeded event.
     *
     * @param WC_Order $order     The order object.
     * @param string   $intent_id The payment intent ID.
     */
    protected function handle_deferred_payment_intent_succeeded($order, $intent_id)
    {
    }
    /**
     * Handles a deferred payment webhook for an order the shopper already cancelled.
     *
     * A shopper can cancel an order while its payment is still settling in Stripe - for
     * example a slow 3DS confirmation that fails the return to checkout, after which the
     * shopper cancels the still-pending order. Stripe can then capture the payment and fire
     * payment_intent.succeeded (or authorise it and fire amount_capturable_updated) against
     * a cancelled order. Marking that order paid would silently run payment_complete(),
     * granting downloads, reducing stock and firing fulfilment hooks for an order nobody
     * wants. Instead we return the money: refund a captured charge, or void an uncaptured
     * authorisation, and record the details on the order for the merchant.
     *
     * @param WC_Order $order     The cancelled order.
     * @param string   $intent_id The PaymentIntent ID from the webhook payload.
     * @return void
     */
    protected function handle_deferred_payment_for_cancelled_order($order, $intent_id)
    {
    }
    /**
     * Records that a late Stripe payment on a cancelled order has been refunded/voided.
     *
     * @param WC_Order $order The cancelled order.
     * @return void
     */
    private function mark_cancelled_order_refunded($order)
    {
    }
    /**
     * Process webhook account updated event.
     * This is triggered when the account details are updated in Stripe's end.
     * We want to clear the cached account data to fetch fresh data on next request.
     *
     * @param object $notification The notification from Stripe
     */
    public function process_account_updated($notification)
    {
    }
    /**
     * Processes the checkout session completed event.
     *
     * This webhook exists for both standard post-payment checkout
     * sessions, as well as agentic checkout sessions.
     *
     * @param object $notification The notification from Stripe
     * @return void
     *
     * @deprecated 10.6.0 Use process_checkout_session_success instead.
     */
    public function process_checkout_session(object $notification): void
    {
    }
    /**
     * Processes the checkout session success events.
     * This includes:
     * - checkout.session.completed event; Fires when a Stripe Checkout session is completed.
     * - checkout.session.async_payment_succeeded event; Fires when an asynchronous payment method on a Stripe Checkout session succeeds.
     *
     * This webhook exists for both standard post-payment checkout
     * sessions, as well as agentic checkout sessions.
     *
     * @param object $notification The notification from Stripe
     * @return bool True if the event was deferred for async processing, false if handled inline.
     */
    public function process_checkout_session_success(object $notification): bool
    {
    }
    /**
     * Handles a deferred checkout session success event.
     *
     * @param object        $notification The Stripe notification containing the checkout session data.
     * @return bool True if the event was re-queued for async processing, false if handled inline.
     */
    protected function handle_checkout_session_success(object $notification): bool
    {
    }
    /**
     * Processes checkout session failure events.
     * This includes:
     * - checkout.session.expired event; Fires when a Stripe Checkout session expires before the customer completes payment.
     * - checkout.session.async_payment_failed event; Fires when an asynchronous payment method on a Stripe Checkout session fails.
     * When the checkout session has expired, we mark the order as cancelled.
     * When the checkout session has a failed payment method, we mark the order as failed.
     *
     * @param object $notification The Stripe notification containing the checkout session data.
     */
    public function process_checkout_session_failure(object $notification): bool
    {
    }
    /**
     * Handles a deferred checkout session failure event.
     *
     * @param object $notification The Stripe notification containing the checkout session data.
     * @return void
     */
    protected function handle_checkout_session_failure(object $notification): void
    {
    }
    /**
     * Cancels an order whose Stripe Checkout Session expired.
     *
     * No payment was ever attempted, so neither party is notified by default. WooCommerce only fires
     * its cancelled-order emails on some transitions — never on pending to cancelled for the customer
     * email — so its automatic send is suppressed here and the emails are dispatched explicitly, which
     * keeps both filters meaningful whichever status the order was in.
     *
     * @param WC_Order $order The order to cancel.
     * @return void
     */
    private function cancel_expired_checkout_session_order(\WC_Order $order): void
    {
    }
    /**
     * Processes the incoming webhook.
     *
     * @since 4.0.0
     * @version 4.0.0
     * @param string $request_body
     */
    public function process_webhook($request_body)
    {
    }
    /**
     * Helper function to run the `wc_stripe_webhook_received` action consistently.
     *
     * @param string $webhook_type The type of webhook that was processed.
     * @param object $notification The webhook data sent from Stripe.
     */
    private function run_webhook_received_action(string $webhook_type, object $notification): void
    {
    }
    /**
     * Fetches an order from a payment intent.
     *
     * @param stdClass $intent The Stripe PaymentIntent object.
     * @return WC_Order|false The order object, or false if not found.
     */
    private function get_order_from_intent($intent)
    {
    }
    /**
     * Resolves the order behind a PaymentIntent via its Checkout Session.
     *
     * @param string $intent_id PaymentIntent ID from the failed event.
     * @return WC_Order|null
     */
    private function get_order_by_intent_checkout_session(string $intent_id): ?\WC_Order
    {
    }
    /**
     * Get the payment method type from the charge object.
     * https://docs.stripe.com/api/charges/object
     *
     * @param object $charge The charge object from Stripe
     * @return string|null The payment method type, or null if not found
     */
    private function get_payment_method_type_from_charge($charge)
    {
    }
    /**
     * Processes an agentic hook.
     *
     * @since 10.6.0
     * @param stdClass $event The webhook event from Stripe.
     * @return void
     */
    private function process_agentic_hook(\stdClass $event)
    {
    }
    /**
     * Handle the Agentic Checkout customization hook.
     *
     * This parameter is expected to generate both an HTTP status code and a JSON response.
     *
     * @since 10.6.0
     * @param stdClass $event The webhook event from Stripe.
     * @return array
     * @throws Exception
     */
    private function process_agentic_customization_hook(\stdClass $event): array
    {
    }
    /**
     * Handle the Agentic Checkout finalize (manual approval) hook.
     *
     * @since 10.6.0
     * @param stdClass $event The webhook event from Stripe.
     * @return array
     * @throws Exception When product resolution fails.
     */
    private function process_agentic_finalize_checkout_hook(\stdClass $event): array
    {
    }
    /**
     * Records that this site owns an agentic checkout session.
     *
     * Called from the synchronous customize/finalize hooks, which Stripe delivers only to the
     * account's single agentic endpoint — so a claim identifies sessions this site produced.
     *
     * @since 10.9.0
     * @param string $checkout_session_id The `cs_…` id from the sync hook payload.
     */
    protected function claim_agentic_session(string $checkout_session_id): void
    {
    }
    /**
     * Whether this site previously claimed the given agentic checkout session via a sync hook.
     *
     * @since 10.9.0
     * @param string $checkout_session_id The `cs_…` id from checkout.session.completed.
     * @return bool
     */
    protected function is_agentic_session_claimed(string $checkout_session_id): bool
    {
    }
    /**
     * Processes an agentic checkout session after the concurrency lock is acquired.
     *
     * @since 10.6.0
     * @param object $notification The webhook notification from Stripe.
     */
    private function handle_agentic_checkout_session($notification): void
    {
    }
    /**
     * Builds the Stripe API URL for retrieving a checkout session with expanded fields.
     *
     * Expands the payment intent's agent_details (to detect agentic sessions)
     * and any additional fields required by the checkout session wrapper.
     *
     * @since 10.6.0
     * @param string   $session_id       The Stripe checkout session ID.
     * @param string[] $additional_expand Additional fields to expand beyond payment_intent.agent_details.
     * @return string The API URL with expand query parameters.
     *
     * @see https://docs.stripe.com/agentic-commerce/enable-in-context-selling-on-ai-agents?order-monitoring=webhooks#checkout-session-field-reference
     */
    private function build_checkout_session_retrieve_url(string $session_id, array $additional_expand = []): string
    {
    }
}
/**
 * Class WC_Stripe_Webhook_State.
 *
 * Tracks the most recent successful and unsuccessful webhooks in test and live modes.
 *
 * @since 5.0.0
 */
class WC_Stripe_Webhook_State
{
    public const OPTION_LIVE_MONITORING_BEGAN_AT = 'wc_stripe_wh_monitor_began_at';
    public const OPTION_LIVE_LAST_SUCCESS_AT = 'wc_stripe_wh_last_success_at';
    public const OPTION_LIVE_LAST_FAILURE_AT = 'wc_stripe_wh_last_failure_at';
    public const OPTION_LIVE_LAST_ERROR = 'wc_stripe_wh_last_error';
    public const OPTION_LIVE_PENDING_WEBHOOKS = 'wc_stripe_wh_live_pending_webhooks';
    public const OPTION_TEST_MONITORING_BEGAN_AT = 'wc_stripe_wh_test_monitor_began_at';
    public const OPTION_TEST_LAST_SUCCESS_AT = 'wc_stripe_wh_test_last_success_at';
    public const OPTION_TEST_LAST_FAILURE_AT = 'wc_stripe_wh_test_last_failure_at';
    public const OPTION_TEST_LAST_ERROR = 'wc_stripe_wh_test_last_error';
    public const OPTION_TEST_PENDING_WEBHOOKS = 'wc_stripe_wh_test_pending_webhooks';
    public const VALIDATION_SUCCEEDED = 'validation_succeeded';
    public const VALIDATION_FAILED_EMPTY_HEADERS = 'empty_headers';
    public const VALIDATION_FAILED_EMPTY_BODY = 'empty_body';
    public const VALIDATION_FAILED_EMPTY_SECRET = 'empty_secret';
    public const VALIDATION_FAILED_USER_AGENT_INVALID = 'user_agent_invalid';
    public const VALIDATION_FAILED_SIGNATURE_INVALID = 'signature_invalid';
    public const VALIDATION_FAILED_DUPLICATE_WEBHOOKS = 'duplicate_webhooks';
    public const VALIDATION_FAILED_TIMESTAMP_MISMATCH = 'timestamp_out_of_range';
    public const VALIDATION_FAILED_SIGNATURE_MISMATCH = 'signature_mismatch';
    /**
     * Clears the webhook state.
     *
     * @param string $mode Optional. The mode to clear the webhook state for. Can be 'all', 'live', or 'test'. Default is 'all'.
     */
    public static function clear_state($mode = 'all'): void
    {
    }
    /**
     * Gets (and sets, if unset) the timestamp the plugin first
     * started tracking webhook failure and successes.
     *
     * @since 5.0.0
     * @return int UTC seconds since 1970.
     */
    public static function get_monitoring_began_at()
    {
    }
    /**
     * Sets the timestamp of the last successfully processed webhook.
     *
     * @since 5.0.0
     * @param int $timestamp UTC seconds since 1970.
     */
    public static function set_last_webhook_success_at($timestamp): void
    {
    }
    /**
     * Gets the timestamp of the last successfully processed webhook,
     * or returns 0 if no webhook has ever been successfully processed.
     *
     * @since 5.0.0
     * @return int UTC seconds since 1970 | 0.
     */
    public static function get_last_webhook_success_at()
    {
    }
    /**
     * Sets the timestamp of the last failed webhook.
     *
     * @since 5.0.0
     * @param int $timestamp UTC seconds since 1970.
     */
    public static function set_last_webhook_failure_at($timestamp): void
    {
    }
    /**
     * Gets the timestamp of the last failed webhook,
     * or returns 0 if no webhook has ever failed to process.
     *
     * @since 5.0.0
     * @return int UTC seconds since 1970 | 0.
     */
    public static function get_last_webhook_failure_at()
    {
    }
    /**
     * Sets the reason for the last failed webhook.
     *
     * @since 5.0.0
     * @param string $reason Reason code.
     */
    public static function set_last_error_reason($reason): void
    {
    }
    /**
     * Returns the localized reason the last webhook failed.
     *
     * @since 5.0.0
     * @return string Reason the last webhook failed.
     */
    public static function get_last_error_reason()
    {
    }
    /**
     * Gets the status code for the webhook processing.
     *
     * @since 8.6.0
     * @return int The status code for the webhook processing.
     */
    public static function get_webhook_status_code()
    {
    }
    /**
     * Sets the number of pending webhooks.
     *
     * @since 9.7.0
     *
     * @param int $pending_webhooks The number of pending webhooks.
     */
    public static function set_pending_webhooks_count($pending_webhooks): void
    {
    }
    /**
     * Gets the number of pending webhooks.
     *
     * @since 9.7.0
     *
     * @return int The number of pending webhooks.
     */
    public static function get_pending_webhooks_count()
    {
    }
    /**
     * Gets the state of webhook processing in a human readable format.
     *
     * @since 5.0.0
     * @return string Details on recent webhook successes and failures.
     */
    public static function get_webhook_status_message()
    {
    }
    /**
     * Fetches the configured webhook URLs.
     *
     * @return array URLs for live and test mode webhooks.
     */
    public static function get_configured_webhook_urls()
    {
    }
    /**
     * Gets an option value that must be an integer. Stringified integers will be cast to int,
     * but other non-integer values will be returned as 0.
     *
     * @since 10.8.0
     * @param string $option_name The name of the option to get.
     * @return int The integer value of the option, or 0 if the option is not an integer.
     */
    protected static function get_int_option(string $option_name): int
    {
    }
    /**
     * Update an option with an integer value.
     *
     * @param string $option_name The name of the option to update.
     * @param mixed  $value       The value to update the option with. Should be a scalar integer.
     * @return void
     */
    protected static function update_int_option(string $option_name, $value): void
    {
    }
    /**
     * Validate that a value is an integer.
     *
     * @param mixed $value The value to validate.
     * @return int|null The integer value of the value, or null if the value is not an integer.
     */
    protected static function validate_int_value($value): ?int
    {
    }
}
/**
 * WC_Stripe class.
 */
class WC_Stripe
{
    /**
     * The *Singleton* instance of this class
     *
     * @var WC_Stripe
     */
    private static $instance;
    /**
     * Returns the *Singleton* instance of this class.
     *
     * @return WC_Stripe The *Singleton* instance.
     */
    public static function get_instance()
    {
    }
    /**
     * Stripe Connect API
     *
     * @var WC_Stripe_Connect_API
     */
    private $api;
    /**
     * Stripe Connect
     *
     * @var WC_Stripe_Connect
     */
    public $connect;
    /**
     * Stripe Payment Request configurations. Holds a WC_Stripe_Payment_Request_Compat no-op shim.
     *
     * @var WC_Stripe_Payment_Request_Compat
     *
     * @deprecated 10.4.0 Use express_checkout_configuration instead. This will be removed in a future release.
     */
    public $payment_request_configuration;
    /**
     * Stripe Express Checkout configurations.
     *
     * @var WC_Stripe_Express_Checkout_Element
     */
    public $express_checkout_configuration;
    /**
     * Stripe Account.
     *
     * @var WC_Stripe_Account
     */
    public $account;
    /**
     * The main Stripe gateway instance. Use get_main_stripe_gateway() to access it.
     *
     * @var null|WC_Stripe_Payment_Gateway
     */
    protected $stripe_gateway = \null;
    /**
     * Private clone method to prevent cloning of the instance of the
     * *Singleton* instance.
     *
     * @return void
     */
    public function __clone()
    {
    }
    /**
     * Private unserialize method to prevent unserializing of the *Singleton*
     * instance.
     *
     * @return void
     */
    public function __wakeup()
    {
    }
    /**
     * Protected constructor to prevent creating a new instance of the
     * *Singleton* via the `new` operator from outside of this class.
     */
    public function __construct()
    {
    }
    /**
     * Init the plugin after plugins_loaded so environment variables are set.
     *
     * @since 1.0.0
     * @version 5.0.0
     */
    public function init()
    {
    }
    /**
     * Initialize the class for handling the Apple Pay registration.
     */
    public function initialize_apple_pay_registration()
    {
    }
    /**
     * Initialize Express Checkout after translations are loaded.
     */
    public function init_express_checkout()
    {
    }
    /**
     * Updates the plugin version in db
     *
     * @since 3.1.0
     * @version 4.0.0
     */
    public function update_plugin_version()
    {
    }
    /**
     * Handles upgrade routines.
     *
     * @since 3.1.0
     * @version 3.1.0
     */
    public function install()
    {
    }
    /**
     * Sets the Stripe gateways in the 'woocommerce_gateway_order' option which contains the list of all the gateways.
     * This function is called when the 'woocommerce_gateway_order' option is updated.
     * Adding the Stripe gateway to the option is needed to display them in the checkout page.
     *
     * @param array $ordering The current ordering of the gateways.
     * @return void
     */
    public function set_stripe_gateways_in_list($ordering)
    {
    }
    /**
     * Redirects to the Stripe settings page upon plugin activation if the transient is set,
     * and if not activating multiple plugins at once.
     *
     * @return void
     */
    public function maybe_redirect_to_stripe_settings(): void
    {
    }
    /**
     * Migrates to the new checkout experience.
     *
     * @since 9.6.0
     * @version 9.6.0
     */
    public function migrate_to_new_checkout_experience()
    {
    }
    /**
     * Updates the PRB location settings based on deprecated filters.
     *
     * The filters were removed in favor of plugin settings. This function can, and should,
     * be removed when we're reasonably sure most merchants have had their settings updated
     * through this function. Maybe ~80% of merchants is a good threshold?
     *
     * @since 5.5.0
     * @version 5.5.0
     */
    public function update_prb_location_settings()
    {
    }
    /**
     * Add plugin action links.
     *
     * @since 1.0.0
     * @version 4.0.0
     */
    public function plugin_action_links($links)
    {
    }
    /**
     * Add plugin action links.
     *
     * @since 4.3.4
     * @param  array  $links Original list of plugin links.
     * @param  string $file  Name of current file.
     * @return array  $links Update list of plugin links.
     */
    public function plugin_row_meta($links, $file)
    {
    }
    /**
     * Add the gateways to WooCommerce.
     *
     * @since 1.0.0
     * @version 5.6.0
     */
    public function add_gateways($methods)
    {
    }
    /**
     * Whether the request is editing a post that hosts the Cart or Checkout block.
     *
     * ECE and OCS render as inner blocks of those, so either parent's presence on the edited post is
     * what {@see add_gateways()} keys on to suppress block-support warnings. The OC Blocks config
     * builder keys on the same check so the gateway list and registered Blocks methods stay in lockstep.
     *
     * The post ID is read from the request rather than the global $post because this filter runs
     * during the editor page load before $post is populated.
     *
     * @return bool
     */
    public function is_editing_cart_or_checkout_block(): bool
    {
    }
    /**
     * Modifies the order of the gateways displayed in admin.
     *
     * @since 4.0.0
     * @version 4.0.0
     */
    public function filter_gateway_order_admin($sections)
    {
    }
    /**
     * Provide default values for missing settings on initial gateway settings save.
     *
     * @since 4.5.4
     * @version 4.5.4
     *
     * @param array      $settings New settings to save.
     * @param array|bool $old_settings Existing settings, if any.
     * @return array New value but with defaults initially filled in for missing settings.
     */
    public function gateway_settings_update($settings, $old_settings)
    {
    }
    /**
     * When the Adaptive Pricing amount mismatch migration is incomplete and
     * the merchant toggles the Adaptive Pricing setting, we need to mark the
     * amount mismatch migration as complete.
     *
     * @param array|false $old_settings Previous settings; false if no previous settings existed.
     * @param array       $settings     New settings that were saved.
     * @return void
     */
    public function maybe_mark_adaptive_pricing_migration_complete($old_settings, $settings): void
    {
    }
    /**
     * Runs after Stripe gateway settings option is updated. Reconfigures webhooks only when Adaptive Pricing becomes enabled.
     * Adaptive Pricing and Optimized Checkout both must be enabled in the new value for webhooks to be reconfigured.
     *
     * @param array|false $old_value Previous option value.
     * @param array       $value     New option value.
     * @return void
     */
    public function maybe_reconfigure_webhooks_after_adaptive_pricing_enabled($old_value, $value)
    {
    }
    /**
     * Helper function that ensures we clear the in-memory Stripe API key in {@see WC_Stripe_API}
     * when we're making a change to our settings that impacts which secret key we should be using.
     *
     * @param array $settings     New settings that have just been saved.
     * @param array $old_settings Old settings that were previously saved.
     * @return void
     */
    protected function maybe_reset_stripe_in_memory_key($settings, $old_settings)
    {
    }
    /**
     * Enable or disable UPE.
     *
     * When enabling UPE: For each currently enabled Stripe LPM, the corresponding UPE method is enabled.
     *
     * When disabling UPE: For each currently enabled UPE method, the corresponding LPM is enabled.
     *
     * @param array      $settings New settings to save.
     * @param array|bool $old_settings Existing settings, if any.
     * @return array New value but with defaults initially filled in for missing settings.
     */
    protected function toggle_upe($settings, $old_settings)
    {
    }
    protected function enable_upe($settings)
    {
    }
    protected function disable_upe($settings)
    {
    }
    /**
     * Adds the failed SCA auth email to WooCommerce.
     *
     * @param WC_Email[] $email_classes All existing emails.
     * @return WC_Email[]
     */
    public function add_emails($email_classes)
    {
    }
    /**
     * Register REST API routes.
     *
     * New endpoints/controllers can be added here.
     */
    public function register_routes()
    {
    }
    /**
     * Returns the main Stripe payment gateway class instance.
     *
     * @return WC_Stripe_UPE_Payment_Gateway
     */
    public function get_main_stripe_gateway()
    {
    }
    /**
     * Move the email field to the top of the Checkout page.
     *
     * @param array $fields WooCommerce checkout fields.
     *
     * @return array WooCommerce checkout fields.
     */
    public function checkout_update_email_field_priority($fields)
    {
    }
    /**
     * Initializes updating subscriptions.
     */
    public function initialize_subscriptions_updater()
    {
    }
    public function load_plugin_textdomain()
    {
    }
    /**
     * Initializes the status page.
     *
     * @return void
     */
    public function initialize_status_page()
    {
    }
    /**
     * Initialize Agentic Commerce product feed integration.
     *
     * Registers the integration with WooCommerce product feed system and
     * sets up Action Scheduler for automated sync.
     *
     * @since 10.5.0
     * @return void
     */
    public function initialize_agentic_commerce()
    {
    }
    /**
     * Toggle payment methods that should be enabled/disabled, e.g. unreleased,
     * BNPLs when other official plugins are active, etc.
     *
     * @param WC_Payment_Gateways $gateways The WooCommerce Payment Gateways instance.
     *
     * @return void
     */
    public function maybe_toggle_payment_methods(\WC_Payment_Gateways $gateways)
    {
    }
    /**
     * Deactivate Affirm or Klarna payment methods if other official plugins are active.
     *
     * @param array $available_payment_gateways The available payment gateways.
     * @param array $enabled_payment_methods The enabled payment methods.
     * @return array The payment method IDs to disable.
     */
    private function maybe_deactivate_bnpls($available_payment_gateways, $enabled_payment_methods)
    {
    }
}
/**
 * Base class for the email sent to the admin and customers when a refund fails.
 *
 * @since 9.6.0
 */
abstract class WC_Stripe_Email_Failed_Refund extends \WC_Email_Failed_Order
{
    /**
     * Returns the list of template parameters.
     *
     * @return array
     */
    abstract public function get_template_params();
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Get the default e-mail subject.
     *
     * @return string
     */
    public function get_default_subject()
    {
    }
    /**
     * Get the default e-mail heading.
     *
     * @return string
     */
    public function get_default_heading()
    {
    }
    /**
     * Get content html.
     *
     * @return string
     */
    public function get_content_html()
    {
    }
    /**
     * Get content plain.
     *
     * @return string
     */
    public function get_content_plain()
    {
    }
    /**
     * Trigger.
     *
     * @param int            $order_id The order ID.
     * @param WC_Order|false $order    Order object.
     * @return void
     */
    public function trigger($order_id, $order = \false)
    {
    }
    /**
     * Returns the refund failure reason in a human-readable form.
     *
     * @param object $order The order object whose refund request failed.
     * @return string
     */
    protected static function get_reason($order)
    {
    }
}
/**
 * An email sent to the admin when a refund fails.
 *
 * @since 9.6.0
 */
class WC_Stripe_Email_Admin_Failed_Refund extends \WC_Stripe_Email_Failed_Refund
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Returns the list of template parameters.
     *
     * @inheritDoc
     */
    public function get_template_params()
    {
    }
    /**
     * Trigger.
     *
     * @inheritDoc
     * @return void
     */
    public function trigger($order_id, $order = \false)
    {
    }
}
/**
 * Failed Refund Notification (shopper)
 *
 * @since 9.6.0
 */
class WC_Stripe_Email_Customer_Failed_Refund extends \WC_Stripe_Email_Failed_Refund
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Returns the list of template parameters.
     *
     * @inheritDoc
     */
    public function get_template_params()
    {
    }
    /**
     * Trigger.
     *
     * @inheritDoc
     * @return void
     */
    public function trigger($order_id, $order = \false)
    {
    }
}
/**
 * An email sent to the admin when payment fails to go through due to authentication_required error.
 *
 * @since 4.3.0
 */
class WC_Stripe_Email_Failed_Authentication_Retry extends \WC_Email_Failed_Order
{
    /**
     * The retry object for the order
     *
     * @var WCS_Retry|null
     */
    protected $retry;
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Get retry time.
     *
     * @return string
     */
    public function get_retry_time()
    {
    }
    /**
     * Get the default e-mail subject.
     *
     * @return string
     */
    public function get_default_subject()
    {
    }
    /**
     * Get the default e-mail heading.
     *
     * @return string
     */
    public function get_default_heading()
    {
    }
    /**
     * Trigger.
     *
     * @param int           $order_id The order ID.
     * @param WC_Order|null $order Order object.
     *
     * @return void
     */
    public function trigger($order_id, $order = \null)
    {
    }
    /**
     * Get content html.
     *
     * @return string
     */
    public function get_content_html()
    {
    }
    /**
     * Get content plain.
     *
     * @return string
     */
    public function get_content_plain()
    {
    }
}
/**
 * Base for Failed Renewal/Pre-Order Authentication Notifications.
 */
abstract class WC_Stripe_Email_Failed_Authentication extends \WC_Email
{
    /**
     * An instance of the email, which would normally be sent after a failed payment.
     *
     * @var WC_Email
     */
    public $original_email;
    /**
     * Generates the HTML for the email while keeping the `template_base` in mind.
     *
     * @return string
     */
    public function get_content_html()
    {
    }
    /**
     * Generates the plain text for the email while keeping the `template_base` in mind.
     *
     * @return string
     */
    public function get_content_plain()
    {
    }
    /**
     * Generates the URL, which will be used to authenticate the payment.
     *
     * @param WC_Order $order The order whose payment needs authentication.
     * @return string
     */
    public function get_authorization_url($order)
    {
    }
    /**
     * Uses specific fields from `WC_Email_Customer_Invoice` for this email.
     *
     * @return void
     */
    public function init_form_fields()
    {
    }
    /**
     * Triggers the email.
     *
     * @param WC_Order $order The renewal order whose payment failed.
     * @return void
     */
    public function trigger($order)
    {
    }
}
/**
 * Failed Renewal/Pre-Order Authentication Notification
 */
class WC_Stripe_Email_Failed_Preorder_Authentication extends \WC_Stripe_Email_Failed_Authentication
{
    /**
     * Holds the message, which is entered by admins when sending the email.
     *
     * @var string
     */
    protected $custom_message;
    /**
     * Constructor.
     *
     * @param WC_Email[] $email_classes All existing instances of WooCommerce emails.
     */
    public function __construct($email_classes = [])
    {
    }
    /**
     * When autnentication is required, this adds another action to `wc_pre_orders_pre_order_completed`
     * in order to send the authentication required email when the custom pre-orders message is available.
     *
     * @param WC_Order $order The order whose payment is failing.
     * @return void
     */
    public function trigger($order)
    {
    }
    /**
     * Triggers the email while also disconnecting the original Pre-Orders email.
     *
     * @param WC_Order $order The order that is being paid.
     * @param string   $message The message, which should be added to the email.
     * @return void
     */
    public function send_email($order, $message)
    {
    }
    /**
     * Returns the default subject of the email (modifyable in settings).
     *
     * @return string
     */
    public function get_default_subject()
    {
    }
    /**
     * Returns the default heading of the email (modifyable in settings).
     *
     * @return string
     */
    public function get_default_heading()
    {
    }
    /**
     * Returns the custom message, entered by the admin.
     *
     * @return string
     */
    public function get_custom_message()
    {
    }
}
/**
 * Failed Renewal/Pre-Order Authentication Notification
 */
class WC_Stripe_Email_Failed_Renewal_Authentication extends \WC_Stripe_Email_Failed_Authentication
{
    /**
     * Constructor.
     *
     * @param WC_Email[] $email_classes All existing instances of WooCommerce emails.
     */
    public function __construct($email_classes = [])
    {
    }
    /**
     * Triggers the email while also disconnecting the original Subscriptions email.
     *
     * @param WC_Order $order The order that is being paid.
     * @return void
     */
    public function trigger($order)
    {
    }
    /**
     * Returns the default subject of the email (modifyable in settings).
     *
     * @return string
     */
    public function get_default_subject()
    {
    }
    /**
     * Returns the default heading of the email (modifyable in settings).
     *
     * @return string
     */
    public function get_default_heading()
    {
    }
    /**
     * Prevent all customer-facing retry notifications from being sent after this email.
     *
     * @param array $rule_array   The raw details about the retry rule.
     * @param int   $retry_number The number of the retry.
     * @param int   $order_id     The ID of the order that needs payment.
     * @return array
     */
    public function prevent_retry_notification_email($rule_array, $retry_number, $order_id)
    {
    }
    /**
     * Send store owner a different email when the retry is related to an authentication required error.
     *
     * @param array $rule_array   The raw details about the retry rule.
     * @param int   $retry_number The number of the retry.
     * @param int   $order_id     The ID of the order that needs payment.
     * @return array
     */
    public function set_store_owner_custom_email($rule_array, $retry_number, $order_id)
    {
    }
}
/**
 * Helper class to handle subscriptions.
 */
class WC_Stripe_Subscriptions_Helper
{
    /**
     * Stripe customer page base URL.
     *
     * @var string
     */
    public const STRIPE_CUSTOMER_PAGE_BASE_URL = 'https://dashboard.stripe.com/customers/';
    /**
     * Transient key for detached subscriptions.
     *
     * @var string
     */
    private const DETACHED_SUBSCRIPTIONS_CACHE_PREFIX = 'detached_subscriptions';
    /**
     * Maximum number of subscriptions to load per page.
     *
     * @var int
     */
    private const MAX_SUBSCRIPTIONS_PER_PAGE = 50;
    /**
     * Fallback maximum execution time in seconds.
     *
     * @var int
     */
    private const MAX_EXECUTION_TIME_FALLBACK = 30;
    /**
     * Checks if subscriptions are enabled on the site.
     *
     * @return bool Whether subscriptions is enabled or not.
     */
    public static function is_subscriptions_enabled()
    {
    }
    /**
     * Loads all active subscriptions renewing in less than a month, and attempts to return those that are detached from the customer.
     *
     * @param int $limit The maximum number of subscriptions to retrieve. Use -1 for no limit (default).
     * @return array
     */
    public static function get_detached_subscriptions($limit = -1)
    {
    }
    /**
     * Checks if a subscription's payment method is detached from the customer.
     *
     * @param WC_Subscription $subscription The subscription object to check.
     * @return bool True if the payment method is detached, false otherwise.
     */
    public static function is_subscription_payment_method_detached($subscription)
    {
    }
    /**
     * Returns boolean on whether manual renewal is required for the subscriptions of this store.
     *
     * @since 9.6.0
     *
     * @return bool
     */
    public static function is_manual_renewal_required()
    {
    }
    /**
     * Returns boolean on whether manual renewal is enabled for the subscriptions of this store.
     *
     * @since 9.6.0
     *
     * @return bool
     */
    public static function is_manual_renewal_enabled()
    {
    }
    /**
     * Extracts data from a subscription object for detached subscriptions.
     *
     * @param WC_Subscription $subscription The subscription object to extract data from.
     * @return array
     */
    public static function get_detached_payment_data_from_subscription($subscription)
    {
    }
    /**
     * Builds a string containing messages about subscriptions that are detached from the customer.
     *
     * @param array $subscriptions An array of subscriptions that are detached from the customer.
     * @return string A string containing the messages to be displayed in the admin interface.
     */
    public static function build_subscriptions_detached_messages($subscriptions = [])
    {
    }
    /**
     * Builds a message for a single subscription that is detached from the customer.
     *
     * @param array $subscription An array containing the (single) subscription details.
     * @return string
     */
    public static function build_subscription_detached_message($subscription)
    {
    }
    /**
     * Helper function to get and temporarily cache the payment method details for a customer and payment method ID.
     *
     * @param string $stripe_customer_id The Stripe customer ID.
     * @param string $payment_method_id  The Stripe payment method ID. This may be a source ID or a payment method ID.
     * @return object|null The payment method details or null if the payment method is not found.
     */
    public static function get_subscription_payment_method_details(string $stripe_customer_id, string $payment_method_id): ?object
    {
    }
    /**
     * Checks if the current page is a subscription edit page in wp-admin.
     *
     * This should be removed once WooCommerce provides a way to check for subscription edit pages.
     *
     * @return bool
     */
    public static function is_subscription_edit_page(): bool
    {
    }
}
/**
 * Handles migrating the tokens of Subscriptions using SEPA's Legacy gateway ID.
 *
 * We have two different payment gateway IDs for SEPA depending on whether we use the Legacy experience:
 *   - stripe_sepa, when the Legacy experience is enabled (Sources API).
 *   - stripe_sepa_debit, when the Updated experience is enabled (Payment Methods API).
 *
 * When purchasing a subscription using the Legacy experience (Sources API), we set stripe_sepa as the associated payment method gateway.
 * When purchasing a subscription using the Updated experience (Payment Methods API), we set stripe_sepa_debit as the associated payment method gateway.
 *
 * Because we use a different payment gateway ID when disabling the Legacy experience (switching to the Payment Methods API),
 * WooCommerce detects that the stripe_sepa payment gateway as no longer available.
 * This causes the Subscription to change to Manual renewal, and automatic renewals to fail.
 *
 * This class updates the following for the given subscription:
 *   - The associated gateway ID to the one used for the updated checkout experience `stripe_sepa_debit`, so it doesn't switch to Manual Renewal.
 *   - The payment method used for renewals to the migrated pm_, if any.
 */
class WC_Stripe_Subscriptions_Legacy_SEPA_Token_Update
{
    /**
     * Subscription meta key used to store the payment method used before migration.
     *
     * @var string
     */
    public const LEGACY_TOKEN_PAYMENT_METHOD_META_KEY = '_migrated_sepa_payment_method';
    /**
     * Subscription meta key used to store the associated source ID.
     *
     * @var string
     */
    public const SOURCE_ID_META_KEY = '_stripe_source_id';
    /**
     * Gateway ID for the Updated SEPA payment method.
     *
     * @var string
     */
    private $updated_sepa_gateway_id = \WC_Stripe_UPE_Payment_Gateway::ID . '_' . \WC_Stripe_UPE_Payment_Method_Sepa::STRIPE_ID;
    /**
     * Conditionally updates the payment method of a subscription and creates a new token for it.
     *
     * @param int $subscription_id The ID of the subscription to update.
     * @throws \Exception When updating the payment method of the subscription was skipped.
     * @return void
     */
    public function maybe_update_subscription_legacy_payment_method($subscription_id)
    {
    }
    /**
     * Attempts to update the payment method for renewals from Sources to PaymentMethods.
     *
     * @param WC_Subscription $subscription The subscription for which the payment method must be updated.
     * @return void
     */
    public function maybe_update_subscription_source(\WC_Subscription $subscription)
    {
    }
    /**
     * Gets the subscription to update.
     *
     * Only allows migration if:
     * - The Legacy experience is disabled
     * - The WooCommerce Subscription extension is active
     * - The subscription ID is a valid subscription
     *
     * @param int $subscription_id The ID of the subscription to update.
     * @return WC_Subscription An instance of the subscription to be updated.
     * @throws \Exception When the subscription can't be updated.
     */
    private function get_subscription_to_migrate($subscription_id)
    {
    }
    /**
     * Updates the payment method used for renewals to the migrated pm_, if any.
     *
     * The subscription is using a source for renewals at this point.
     * When the migration runs on the Stripe account, there will be a payment method (pm_) migrated from the source (src_).
     * This method updates the subscription to use the migrated payment method (pm_) for renewals, if it exists.
     *
     * @param WC_Subscription $subscription The subscription to update.
     * @throws \Exception When the subscription is already using a pm_ or its src_ hasn't been migrated to a pm_.
     * @return void
     */
    private function set_subscription_updated_payment_method(\WC_Subscription $subscription)
    {
    }
    /**
     * Sets the updated SEPA gateway ID for the subscription.
     *
     * @param WC_Subscription $subscription Subscription for which the payment method must be updated.
     * @return void
     */
    private function set_subscription_updated_payment_gateway_id(\WC_Subscription $subscription)
    {
    }
}
/**
 * Util class for handling compatibilities with different versions of WooCommerce core.
 */
class WC_Stripe_Woo_Compat_Utils
{
    /**
     * Return non-deprecated class for instantiating WC-Admin notes.
     *
     * @return string
     */
    public static function get_note_class()
    {
    }
    /**
     * Return non-deprecated class for instantiating WC-Admin notes.
     *
     * @return string
     */
    public static function get_notes_class()
    {
    }
    /**
     * Checks if the custom orders table is enabled.
     *
     * @return bool Whether the custom orders table is enabled.
     */
    public static function is_custom_orders_table_enabled()
    {
    }
}
/**
 * Stripe Connect API class.
 */
class WC_Stripe_Connect_API
{
    public const WOOCOMMERCE_CONNECT_SERVER_API_VERSION = '3';
    /**
     * Send request to Connect Server to initiate Stripe OAuth
     *
     * @param string $return_url The URL to return to after the OAuth is completed.
     * @param string $mode       Optional. The mode to connect to. 'live' or 'test'. Default is 'live'.
     *
     * @return array|WP_Error The response from the server.
     */
    public function get_stripe_oauth_init($return_url, $mode = 'live')
    {
    }
    /**
     * Send request to Connect Server for Stripe keys
     *
     * @param string $code OAuth server code.
     * @param string $type Optional. The type of the connection. 'connect' or 'app'. Default is 'connect'.
     * @param string $mode Optional. The mode to connect to. 'live' or 'test'. Default is 'live'.
     *
     * @return array
     */
    public function get_stripe_oauth_keys($code, $type = 'connect', $mode = 'live')
    {
    }
    /**
     * Sends a request to the Connect Server for Stripe App refreshed keys.
     *
     * @since 8.6.0
     *
     * @param string $refresh_token Stripe App OAuth refresh token.
     * @param string $mode          Optional. The mode to refresh keys for. 'live' or 'test'. Default is 'live'.
     *
     * @return array
     */
    public function refresh_stripe_app_oauth_keys($refresh_token, $mode = 'live')
    {
    }
    /**
     * General OAuth request method.
     *
     * @param string $method request method.
     * @param string $path   path for request.
     * @param array  $body   request body.
     *
     * @return array|WP_Error
     */
    protected function request($method, $path, $body = [])
    {
    }
    /**
     * Adds useful WP/WC/WCC information to request bodies.
     *
     * @param array $initial_body body of initial request.
     *
     * @return array
     */
    protected function request_body($initial_body = [])
    {
    }
    /**
     * Generates headers for request to the WooCommerce Connect Server.
     *
     * @return array|WP_Error
     */
    protected function request_headers()
    {
    }
}
/**
 * Stripe Connect class.
 */
class WC_Stripe_Connect
{
    /**
     * Stripe connect api.
     *
     * @var object $api
     */
    private $api;
    /**
     * Constructor.
     *
     * @param WC_Stripe_Connect_API $api stripe connect api.
     */
    public function __construct(\WC_Stripe_Connect_API $api)
    {
    }
    /**
     * Gets the OAuth URL for Stripe onboarding flow
     *
     * @param string $return_url The URL to return to after OAuth flow.
     * @param string $mode       Optional. The mode to connect to. 'live' or 'test'. Default is 'live'.
     *
     * @return string|WP_Error
     */
    public function get_oauth_url($return_url = '', $mode = 'live')
    {
    }
    /**
     * Initiate OAuth connection request to Connect Server
     *
     * @param string $state State token to prevent request forgery.
     * @param string $code  OAuth code.
     * @param string $type  Optional. The type of the connection. 'connect' or 'app'. Default is 'connect'.
     * @param string $mode  Optional. The mode to connect to. 'live' or 'test'. Default is 'live'.
     *
     * @return string|WP_Error
     */
    public function connect_oauth($state, $code, $type = 'connect', $mode = 'live')
    {
    }
    /**
     * Handle redirect back from oauth-init or credentials reset
     */
    public function maybe_handle_redirect()
    {
    }
    /**
     * Helper function to clear some important caches after a key update.
     */
    public function clear_caches_after_key_update(): void
    {
    }
    /**
     * Saves Stripe keys after OAuth response
     *
     * @param stdObject $result OAuth's response result.
     * @param string    $type   Optional. The type of the connection. 'connect' or 'app'. Default is 'connect'.
     * @param string    $mode   Optional. The mode to connect to. 'live' or 'test'. Default is 'live'.
     *
     * @return stdObject|WP_Error OAuth's response result or WP_Error.
     */
    private function save_stripe_keys($result, $type = 'connect', $mode = 'live')
    {
    }
    /**
     * If user is reconnecting and there are existing settings data, return the value from the settings.
     * Otherwise for new connections return 'yes' for `upe_checkout_experience_enabled` field.
     */
    private function get_upe_checkout_experience_enabled()
    {
    }
    /**
     * Gets default Stripe settings
     */
    private function get_default_stripe_config()
    {
    }
    /**
     * Determines if the store is connected to Stripe.
     *
     * @param string $mode Optional. The mode to check. 'live' or 'test' - if not provided, the currently enabled mode will be checked.
     * @return bool True if connected, false otherwise.
     */
    public function is_connected($mode = \null)
    {
    }
    /**
     * Determines if the store is connected to Stripe via OAuth.
     *
     * @param string $mode Optional. The mode to check. 'live' or 'test' (default: 'live').
     * @return bool True if connected via OAuth, false otherwise.
     */
    public function is_connected_via_oauth($mode = 'live')
    {
    }
    /**
     * Determines if the store is using a Stripe App OAuth connection.
     *
     * @since 8.6.0
     *
     * @param string $mode Optional. The mode to check. 'live' | 'test' | null (default: null).
     * @return bool True if connected via Stripe App OAuth, false otherwise.
     */
    public function is_connected_via_app_oauth($mode = \null)
    {
    }
    /**
     * Fetches the connection type for the account.
     *
     * @param string $mode The account mode. 'live' or 'test'.
     * @return string The connection type. 'connect', 'app', or ''.
     */
    public function get_connection_type($mode)
    {
    }
    /**
     * Records a track event after the user is redirected back to the store from the Stripe UX.
     *
     * @param bool $had_error Whether the Stripe connection had an error.
     */
    private function record_account_connect_track_event(bool $had_error)
    {
    }
    /**
     * Schedules the App OAuth connection refresh.
     *
     * @since 8.6.0
     */
    private function schedule_connection_refresh()
    {
    }
    /**
     * Unschedules the App OAuth connection refresh.
     *
     * @since 8.6.0
     */
    protected function unschedule_connection_refresh()
    {
    }
    /**
     * Refreshes the App OAuth access_token via the Woo Connect Server.
     *
     * @since 8.6.0
     */
    public function refresh_connection()
    {
    }
    /**
     * Determines whether a refresh failure is terminal — i.e. retrying can never succeed.
     *
     * @param WP_Error $error The error returned by the refresh request.
     * @return bool True only when the forwarded Stripe error code is known to be terminal.
     */
    private function is_terminal_oauth_error(\WP_Error $error): bool
    {
    }
    /**
     * Handles a terminal refresh failure: stops the refresh loop and forces a reconnect.
     *
     * @param string   $prefix   The settings key prefix for the active mode ('' or 'test_').
     * @param WP_Error $response The terminal error returned by the refresh request.
     */
    private function handle_terminal_refresh_failure(string $prefix, \WP_Error $response): void
    {
    }
    /**
     * Redacts sensitive information from strings, arrays, or objects.
     *
     * @param string|array|object $data The string, array, or object to redact sensitive information from.
     * @return string|array
     */
    public static function redact_sensitive_data($data)
    {
    }
    /**
     * Redacts a string to: 3 periods and the last 4 characters in square brackets.
     *
     * @param string $string The string to redact.
     * @return string
     */
    public static function redact_string($string)
    {
    }
}
/**
 * Class WC_Stripe_Country_Code
 */
class WC_Stripe_Country_Code
{
    // Source: https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2
    public const ANDORRA = 'AD';
    // Andorra.
    public const UNITED_ARAB_EMIRATES = 'AE';
    // United Arab Emirates.
    public const AUSTRIA = 'AT';
    // Austria.
    public const AUSTRALIA = 'AU';
    // Australia.
    public const BELGIUM = 'BE';
    // Belgium.
    public const BULGARIA = 'BG';
    // Bulgaria.
    public const BRAZIL = 'BR';
    // Brazil.
    public const CANADA = 'CA';
    // Canada.
    public const SWITZERLAND = 'CH';
    // Switzerland.
    public const CYPRUS = 'CY';
    // Cyprus.
    public const CZECH_REPUBLIC = 'CZ';
    // Czech Republic.
    public const GERMANY = 'DE';
    // Germany.
    public const DENMARK = 'DK';
    // Denmark.
    public const ESTONIA = 'EE';
    // Estonia.
    public const SPAIN = 'ES';
    // Spain.
    public const FINLAND = 'FI';
    // Finland.
    public const FRANCE = 'FR';
    // France.
    public const UNITED_KINGDOM = 'GB';
    // United Kingdom.
    public const GIBRALTAR = 'GI';
    // Gibraltar.
    public const GREECE = 'GR';
    // Greece.
    public const HONG_KONG = 'HK';
    // Hong Kong.
    public const CROATIA = 'HR';
    // Croatia.
    public const HUNGARY = 'HU';
    // Hungary.
    public const IRELAND = 'IE';
    // Ireland.
    public const INDIA = 'IN';
    // India.
    public const ICELAND = 'IS';
    // Iceland.
    public const ITALY = 'IT';
    // Italy.
    public const JAPAN = 'JP';
    // Japan.
    public const LIECHTENSTEIN = 'LI';
    // Liechtenstein.
    public const LITHUANIA = 'LT';
    // Lithuania.
    public const LUXEMBOURG = 'LU';
    // Luxembourg.
    public const LATVIA = 'LV';
    // Latvia.
    public const MONACO = 'MC';
    // Monaco.
    public const MALTA = 'MT';
    // Malta.
    public const MEXICO = 'MX';
    // Mexico.
    public const MALAYSIA = 'MY';
    // Malaysia.
    public const NETHERLANDS = 'NL';
    // Netherlands.
    public const NORWAY = 'NO';
    // Norway.
    public const NEW_ZEALAND = 'NZ';
    // New Zealand.
    public const POLAND = 'PL';
    // Poland.
    public const PUERTO_RICO = 'PR';
    // Puerto Rico.
    public const PORTUGAL = 'PT';
    // Portugal.
    public const ROMANIA = 'RO';
    // Romania.
    public const SWEDEN = 'SE';
    // Sweden.
    public const SINGAPORE = 'SG';
    // Singapore.
    public const SLOVENIA = 'SI';
    // Slovenia.
    public const SLOVAKIA = 'SK';
    // Slovakia.
    public const SAN_MARINO = 'SM';
    // San Marino.
    public const THAILAND = 'TH';
    // Thailand.
    public const UNITED_STATES = 'US';
    // United States.
    public const VATICAN_CITY = 'VA';
    // Vatican City.
}
/**
 * Class WC_Stripe_Currency_Code
 */
class WC_Stripe_Currency_Code
{
    // Source: https://docs.stripe.com/currencies
    public const UNITED_STATES_DOLLAR = 'USD';
    // United States Dollar.
    public const UNITED_ARAB_EMIRATES_DIRHAM = 'AED';
    // United Arab Emirates dirham.
    public const AFGHAN_AFGHANI = 'AFN';
    // Afghan afghani.
    public const ALBANIAN_LEK = 'ALL';
    // Albanian lek.
    public const ARMENIAN_DRAM = 'AMD';
    // Armenian dram.
    public const NETHERLANDS_ANTILLEAN_GUILDER = 'ANG';
    // Netherlands Antillean guilder.
    public const ANGOLAN_KWANZA = 'AOA';
    // Angolan kwanza.
    public const ARGENTINE_PESO = 'ARS';
    // Argentine peso.
    public const AUSTRALIAN_DOLLAR = 'AUD';
    // Australian dollar.
    public const ARUBAN_FLORIN = 'AWG';
    // Aruban florin.
    public const AZERBAIJANI_MANAT = 'AZN';
    // Azerbaijani manat.
    public const BOSNIA_AND_HERZEGOVINA_CONVERTIBLE_MARK = 'BAM';
    // Bosnia and Herzegovina convertible mark.
    public const BARBADOS_DOLLAR = 'BBD';
    // Barbados dollar.
    public const BANGLADESHI_TAKA = 'BDT';
    // Bangladeshi taka.
    public const BULGARIAN_LEV = 'BGN';
    // Bulgarian lev.
    public const BAHRAINI_DINAR = 'BHD';
    // Bahraini dinar.
    public const BURUNDIAN_FRANC = 'BIF';
    // Burundian franc.
    public const BERMUDIAN_DOLLAR = 'BMD';
    // Bermudian dollar.
    public const BRUNEI_DOLLAR = 'BND';
    // Brunei dollar.
    public const BOLIVIANO = 'BOB';
    // Boliviano.
    public const BRAZILIAN_REAL = 'BRL';
    // Brazilian real.
    public const BAHAMIAN_DOLLAR = 'BSD';
    // Bahamian dollar.
    public const BOTSWANA_PULA = 'BWP';
    // Botswana pula.
    public const NEW_BELARUSIAN_RUBLE = 'BYN';
    // New Belarusian ruble.
    public const BELIZE_DOLLAR = 'BZD';
    // Belize dollar.
    public const CANADIAN_DOLLAR = 'CAD';
    // Canadian dollar.
    public const CONGOLESE_FRANC = 'CDF';
    // Congolese franc.
    public const SWISS_FRANC = 'CHF';
    // Swiss franc.
    public const CHILEAN_PESO = 'CLP';
    // Chilean peso.
    public const CHINESE_YUAN = 'CNY';
    // Renminbi (Chinese yuan).
    public const COLOMBIAN_PESO = 'COP';
    // Colombian peso.
    public const COSTA_RICAN_COLON = 'CRC';
    // Costa Rican colon.
    public const CAPE_VERDE_ESCUDO = 'CVE';
    // Cape Verde escudo.
    public const CZECH_KORUNA = 'CZK';
    // Czech koruna.
    public const DJIBOUTIAN_FRANC = 'DJF';
    // Djiboutian franc.
    public const DANISH_KRONE = 'DKK';
    // Danish krone.
    public const DOMINICAN_PESO = 'DOP';
    // Dominican peso.
    public const ALGERIAN_DINAR = 'DZD';
    // Algerian dinar.
    public const EGYPTIAN_POUND = 'EGP';
    // Egyptian pound.
    public const ETHIOPIAN_BIRR = 'ETB';
    // Ethiopian birr.
    public const EURO = 'EUR';
    // Euro.
    public const FIJI_DOLLAR = 'FJD';
    // Fiji dollar.
    public const FALKLAND_ISLANDS_POUND = 'FKP';
    // Falkland Islands pound.
    public const POUND_STERLING = 'GBP';
    // Pound sterling.
    public const GEORGIAN_LARI = 'GEL';
    // Georgian lari.
    public const GIBRALTAR_POUND = 'GIP';
    // Gibraltar pound.
    public const GAMBIAN_DALASI = 'GMD';
    // Gambian dalasi.
    public const GUINEAN_FRANC = 'GNF';
    // Guinean franc.
    public const GUATEMALAN_QUETZAL = 'GTQ';
    // Guatemalan quetzal.
    public const GUYANESE_DOLLAR = 'GYD';
    // Guyanese dollar.
    public const HONG_KONG_DOLLAR = 'HKD';
    // Hong Kong dollar.
    public const HONDURAN_LEMPIRA = 'HNL';
    // Honduran lempira.
    public const HAITIAN_GOURDE = 'HTG';
    // Haitian gourde.
    public const HUNGARIAN_FORINT = 'HUF';
    // Hungarian forint.
    public const INDONESIAN_RUPIAH = 'IDR';
    // Indonesian rupiah.
    public const ISRAELI_NEW_SHEKEL = 'ILS';
    // Israeli new shekel.
    public const INDIAN_RUPEE = 'INR';
    // Indian rupee.
    public const ICELANDIC_KRONA = 'ISK';
    // Icelandic króna.
    public const JAMAICAN_DOLLAR = 'JMD';
    // Jamaican dollar.
    public const JORDANIAN_DINAR = 'JOD';
    // Jordanian dinar.
    public const JAPANESE_YEN = 'JPY';
    // Japanese yen.
    public const KENYAN_SHILLING = 'KES';
    // Kenyan shilling.
    public const KYRGYZSTANI_SOM = 'KGS';
    // Kyrgyzstani som.
    public const CAMBODIAN_RIEL = 'KHR';
    // Cambodian riel.
    public const COMORIAN_FRANC = 'KMF';
    // Comorian franc.
    public const SOUTH_KOREAN_WON = 'KRW';
    // South Korean won.
    public const KUWAITI_DINAR = 'KWD';
    // Kuwaiti dinar.
    public const CAYMAN_ISLANDS_DOLLAR = 'KYD';
    // Cayman Islands dollar.
    public const KAZAKHSTANI_TENGE = 'KZT';
    // Kazakhstani tenge.
    public const LAO_KIP = 'LAK';
    // Lao kip.
    public const LEBANESE_POUND = 'LBP';
    // Lebanese pound.
    public const SRI_LANKAN_RUPEE = 'LKR';
    // Sri Lankan rupee.
    public const LIBERIAN_DOLLAR = 'LRD';
    // Liberian dollar.
    public const LESOTHO_LOTI = 'LSL';
    // Lesotho loti.
    public const MOROCCAN_DIRHAM = 'MAD';
    // Moroccan dirham.
    public const MOLDOVAN_LEU = 'MDL';
    // Moldovan leu.
    public const MALAGASY_ARIARY = 'MGA';
    // Malagasy ariary.
    public const MACEDONIAN_DENAR = 'MKD';
    // Macedonian denar.
    public const MYANMAR_KYAT = 'MMK';
    // Myanmar kyat.
    public const MONGOLIAN_TOGROG = 'MNT';
    // Mongolian tögrög.
    public const MACANESE_PATACA = 'MOP';
    // Macanese pataca.
    public const MAURITIAN_RUPEE = 'MUR';
    // Mauritian rupee.
    public const MALDIVIAN_RUFIYAA = 'MVR';
    // Maldivian rufiyaa.
    public const MALAWIAN_KWACHA = 'MWK';
    // Malawian kwacha.
    public const MEXICAN_PESO = 'MXN';
    // Mexican peso.
    public const MALAYSIAN_RINGGIT = 'MYR';
    // Malaysian ringgit.
    public const MOZAMBICAN_METICAL = 'MZN';
    // Mozambican metical.
    public const NAMIBIAN_DOLLAR = 'NAD';
    // Namibian dollar.
    public const NIGERIAN_NAIRA = 'NGN';
    // Nigerian naira.
    public const NICARAGUAN_CORDOBA = 'NIO';
    // Nicaraguan córdoba.
    public const NORWEGIAN_KRONE = 'NOK';
    // Norwegian krone.
    public const NEPALESE_RUPEE = 'NPR';
    // Nepalese rupee.
    public const NEW_ZEALAND_DOLLAR = 'NZD';
    // New Zealand dollar.
    public const OMANI_RIAL = 'OMR';
    // Omani rial.
    public const PANAMANIAN_BALBOA = 'PAB';
    // Panamanian balboa.
    public const PERUVIAN_SOL = 'PEN';
    // Peruvian sol.
    public const PAPUA_NEW_GUINEAN_KINA = 'PGK';
    // Papua New Guinean kina.
    public const PHILIPPINE_PESO = 'PHP';
    // Philippine peso.
    public const PAKISTANI_RUPEE = 'PKR';
    // Pakistani rupee.
    public const POLISH_ZLOTY = 'PLN';
    // Polish złoty.
    public const PARAGUAYAN_GUARANI = 'PYG';
    // Paraguayan guaraní.
    public const QATARI_RIYAL = 'QAR';
    // Qatari riyal.
    public const ROMANIAN_LEU = 'RON';
    // Romanian leu.
    public const SERBIAN_DINAR = 'RSD';
    // Serbian dinar.
    public const RUSSIAN_RUBLE = 'RUB';
    // Russian ruble.
    public const RWANDAN_FRANC = 'RWF';
    // Rwandan franc.
    public const SAUDI_RIYAL = 'SAR';
    // Saudi riyal.
    public const SOLOMON_ISLANDS_DOLLAR = 'SBD';
    // Solomon Islands dollar.
    public const SEYCHELLOIS_RUPEE = 'SCR';
    // Seychellois rupee.
    public const SWEDISH_KRONA = 'SEK';
    // Swedish krona.
    public const SINGAPORE_DOLLAR = 'SGD';
    // Singapore dollar.
    public const SAINT_HELENA_POUND = 'SHP';
    // Saint Helena pound.
    public const SIERRA_LEONEAN_LEONE = 'SLE';
    // Sierra Leonean leone.
    public const SOMALI_SHILLING = 'SOS';
    // Somali shilling.
    public const SURINAMESE_DOLLAR = 'SRD';
    // Surinamese dollar.
    public const SAO_TOME_AND_PRINCIPE_DOBRA = 'STD';
    // São Tomé and Príncipe dobra.
    public const SWAZI_LILANGENI = 'SZL';
    // Swazi lilangeni.
    public const THAI_BAHT = 'THB';
    // Thai baht.
    public const TAJIKISTANI_SOMONI = 'TJS';
    // Tajikistani somoni.
    public const TUNISIAN_DINAR = 'TND';
    // Tunisian dinar.
    public const TONGAN_PAANGA = 'TOP';
    // Tongan paʻanga.
    public const TURKISH_LIRA = 'TRY';
    // Turkish lira.
    public const TRINIDAD_AND_TOBAGO_DOLLAR = 'TTD';
    // Trinidad and Tobago dollar.
    public const NEW_TAIWAN_DOLLAR = 'TWD';
    // New Taiwan dollar.
    public const TANZANIAN_SHILLING = 'TZS';
    // Tanzanian shilling.
    public const UKRAINIAN_HRYVNIA = 'UAH';
    // Ukrainian hryvnia.
    public const UGANDAN_SHILLING = 'UGX';
    // Ugandan shilling.
    public const URUGUAYAN_PESO = 'UYU';
    // Uruguayan peso.
    public const UZBEKISTANI_SOM = 'UZS';
    // Uzbekistani som.
    public const VIETNAMESE_DONG = 'VND';
    // Vietnamese đồng.
    public const VANUATU_VATU = 'VUV';
    // Vanuatu vatu.
    public const SAMOAN_TALA = 'WST';
    // Samoan tala.
    public const CENTRAL_AFRICAN_CFA_FRANC = 'XAF';
    // Central African CFA franc.
    public const EAST_CARIBBEAN_DOLLAR = 'XCD';
    // East Caribbean dollar.
    public const WEST_AFRICAN_CFA_FRANC = 'XOF';
    // West African CFA franc.
    public const CFP_FRANC = 'XPF';
    // CFP franc.
    public const YEMENI_RIAL = 'YER';
    // Yemeni rial.
    public const SOUTH_AFRICAN_RAND = 'ZAR';
    // South African rand.
    public const ZAMBIAN_KWACHA = 'ZMW';
    // Zambian kwacha.
    // ... add more currencies as needed.
    // crypto currencies.
    public const BITCOIN = 'BTC';
    // Bitcoin.
    /**
     * List of currency codes that do not have a decimal component (i.e., no cents).
     *
     * Source: https://stripe.com/docs/currencies#zero-decimal
     *
     * @var string[]
     */
    public const NO_DECIMAL_CURRENCY_CODES = [self::BURUNDIAN_FRANC, self::CHILEAN_PESO, self::DJIBOUTIAN_FRANC, self::GUINEAN_FRANC, self::JAPANESE_YEN, self::COMORIAN_FRANC, self::SOUTH_KOREAN_WON, self::MALAGASY_ARIARY, self::PARAGUAYAN_GUARANI, self::RWANDAN_FRANC, self::VIETNAMESE_DONG, self::VANUATU_VATU, self::CENTRAL_AFRICAN_CFA_FRANC, self::WEST_AFRICAN_CFA_FRANC, self::CFP_FRANC];
    /**
     * List of currency codes that have three decimal places.
     *
     * @var string[]
     */
    public const THREE_DECIMAL_CURRENCY_CODES = [self::BAHRAINI_DINAR, self::JORDANIAN_DINAR, self::KUWAITI_DINAR, self::OMANI_RIAL, self::TUNISIAN_DINAR];
}
/**
 * Class WC_Stripe_Express_Checkout_Button_States
 *
 * Provides a map between WC states and Payment Request API states.
 * The list is based on libaddressinput: https://github.com/google/libaddressinput,
 * which is used by Chromium based browsers in the native Payment Request address dialog.
 *
 * Known issues/inconsistencies:
 *    1. WC provides a dropdown list of states, but there's no state field in Chrome for the following countries:
 *        AO (Angola), BD (Bangladesh), BG (Bulgaria), BJ (Benin), BO (Bolivia), DO (Dominican Republic),
 *        DZ (Algeria), GH (Ghana), GT (Guatemala), HU (Hungary), KE (Kenya), LA (Laos),
 *        LR (Liberia), LT (Lithuania), MA (Morocco), MD (Moldova), NA (Namibia), NP (Nepal), PK (Pakistan),
 *        PY (Paraguay), RO (Romania), TZ (Tanzania), UG (Uganda), UM (United States Minor Outlying Islands),
 *        ZA (South Africa), ZM (Zambia).
 *    2. Chrome does not provide a dropdown list of states for 161 countries in total, out of the 249 countries WC supports,
 *        so the countries in which the state field is required by WC, and not provided by the browser are not supported.
 *    3. Chrome does not provide a zip/postal code field for 60 out of the 249 countries WC supports. Only for 5 countries
 *        the zip code field is missing while the state field is present: BS (Bahamas), PA (Panama), SC (Seychelles),
 *        SR (Suriname), TV (Tuvalu). Several other countries provide an optional zip code field.
 *    4. WC expects it, but there's no city field in the Payment Request API for the following:
 *        JP (Japan), MO (Macao), TN (Tunisia), KY (Cayman Islands), GI (Gibraltar).
 *    5. The following countries are not listed in WC:
 *        AC (Ascension Island), IC (Canary Islands), EA (Ceuta & Melilla), CP (Clipperton Island), DG (Diego Garcia),
 *        TA (Tristan da Cunha), XK (Kosovo).
 *
 * @since 10.3.0
 */
class WC_Stripe_Express_Checkout_Button_States
{
    /**
     * A list of states which is compatible with Chromium based browsers for the Payment Request API.
     * If the input comes from Chrome, we will always match with `code`, but if the request comes from
     * Safari or other browsers which don't provide a dropdown list, we can match one of the following:
     *    - [0] = code (string)
     *    - [1] = name (string)
     *    - [2] = localName (string|null)
     *
     * @var array
     */
    public const STATES = [
        // Afghanistan.
        'AF' => [],
        // Angola.
        'AO' => [],
        // Argentina.
        'AR' => ['C' => ['Ciudad Autónoma de Buenos Aires', 'Ciudad Autónoma de Buenos Aires', \null], 'B' => ['Buenos Aires', 'Buenos Aires', \null], 'K' => ['Catamarca', 'Catamarca', \null], 'H' => ['Chaco', 'Chaco', \null], 'U' => ['Chubut', 'Chubut', \null], 'X' => ['Córdoba', 'Córdoba', \null], 'W' => ['Corrientes', 'Corrientes', \null], 'E' => ['Entre Ríos', 'Entre Ríos', \null], 'P' => ['Formosa', 'Formosa', \null], 'Y' => ['Jujuy', 'Jujuy', \null], 'L' => ['La Pampa', 'La Pampa', \null], 'F' => ['La Rioja', 'La Rioja', \null], 'M' => ['Mendoza', 'Mendoza', \null], 'N' => ['Misiones', 'Misiones', \null], 'Q' => ['Neuquén', 'Neuquén', \null], 'R' => ['Río Negro', 'Río Negro', \null], 'A' => ['Salta', 'Salta', \null], 'J' => ['San Juan', 'San Juan', \null], 'D' => ['San Luis', 'San Luis', \null], 'Z' => ['Santa Cruz', 'Santa Cruz', \null], 'S' => ['Santa Fe', 'Santa Fe', \null], 'G' => ['Santiago del Estero', 'Santiago del Estero', \null], 'V' => ['Tierra del Fuego', 'Tierra del Fuego', \null], 'T' => ['Tucumán', 'Tucumán', \null]],
        // Austria.
        'AT' => [],
        // Australia.
        'AU' => ['ACT' => ['ACT', 'Australian Capital Territory', \null], 'NSW' => ['NSW', 'New South Wales', \null], 'NT' => ['NT', 'Northern Territory', \null], 'QLD' => ['QLD', 'Queensland', \null], 'SA' => ['SA', 'South Australia', \null], 'TAS' => ['TAS', 'Tasmania', \null], 'VIC' => ['VIC', 'Victoria', \null], 'WA' => ['WA', 'Western Australia', \null]],
        // Aland Islands.
        'AX' => [],
        // Bangladesh.
        'BD' => [],
        // Belgium.
        'BE' => [],
        // Bulgaria.
        'BG' => [],
        // Bahrain.
        'BH' => [],
        // Burundi.
        'BI' => [],
        // Benin.
        'BJ' => [],
        // Bolivia.
        'BO' => [],
        // Brazil.
        'BR' => ['AC' => ['AC', 'Acre', \null], 'AL' => ['AL', 'Alagoas', \null], 'AP' => ['AP', 'Amapá', \null], 'AM' => ['AM', 'Amazonas', \null], 'BA' => ['BA', 'Bahia', \null], 'CE' => ['CE', 'Ceará', \null], 'DF' => ['DF', 'Distrito Federal', \null], 'ES' => ['ES', 'Espírito Santo', \null], 'GO' => ['GO', 'Goiás', \null], 'MA' => ['MA', 'Maranhão', \null], 'MT' => ['MT', 'Mato Grosso', \null], 'MS' => ['MS', 'Mato Grosso do Sul', \null], 'MG' => ['MG', 'Minas Gerais', \null], 'PA' => ['PA', 'Pará', \null], 'PB' => ['PB', 'Paraíba', \null], 'PR' => ['PR', 'Paraná', \null], 'PE' => ['PE', 'Pernambuco', \null], 'PI' => ['PI', 'Piauí', \null], 'RJ' => ['RJ', 'Rio de Janeiro', \null], 'RN' => ['RN', 'Rio Grande do Norte', \null], 'RS' => ['RS', 'Rio Grande do Sul', \null], 'RO' => ['RO', 'Rondônia', \null], 'RR' => ['RR', 'Roraima', \null], 'SC' => ['SC', 'Santa Catarina', \null], 'SP' => ['SP', 'São Paulo', \null], 'SE' => ['SE', 'Sergipe', \null], 'TO' => ['TO', 'Tocantins', \null]],
        // Canada.
        'CA' => ['AB' => ['AB', 'Alberta', 'Alberta'], 'BC' => ['BC', 'British Columbia', 'Colombie-Britannique'], 'MB' => ['MB', 'Manitoba', 'Manitoba'], 'NB' => ['NB', 'New Brunswick', 'Nouveau-Brunswick'], 'NL' => ['NL', 'Newfoundland and Labrador', 'Terre-Neuve-et-Labrador'], 'NT' => ['NT', 'Northwest Territories', 'Territoires du Nord-Ouest'], 'NS' => ['NS', 'Nova Scotia', 'Nouvelle-Écosse'], 'NU' => ['NU', 'Nunavut', 'Nunavut'], 'ON' => ['ON', 'Ontario', 'Ontario'], 'PE' => ['PE', 'Prince Edward Island', 'Île-du-Prince-Édouard'], 'QC' => ['QC', 'Quebec', 'Québec'], 'SK' => ['SK', 'Saskatchewan', 'Saskatchewan'], 'YT' => ['YT', 'Yukon', 'Yukon']],
        // Switzerland.
        'CH' => [],
        // China.
        'CN' => ['CN1' => ['Yunnan Sheng', 'Yunnan Sheng', '云南省'], 'CN2' => ['Beijing Shi', 'Beijing Shi', '北京市'], 'CN3' => ['Tianjin Shi', 'Tianjin Shi', '天津市'], 'CN4' => ['Hebei Sheng', 'Hebei Sheng', '河北省'], 'CN5' => ['Shanxi Sheng', 'Shanxi Sheng', '山西省'], 'CN6' => ['Neimenggu Zizhiqu', 'Neimenggu Zizhiqu', '内蒙古'], 'CN7' => ['Liaoning Sheng', 'Liaoning Sheng', '辽宁省'], 'CN8' => ['Jilin Sheng', 'Jilin Sheng', '吉林省'], 'CN9' => ['Heilongjiang Sheng', 'Heilongjiang Sheng', '黑龙江省'], 'CN10' => ['Shanghai Shi', 'Shanghai Shi', '上海市'], 'CN11' => ['Jiangsu Sheng', 'Jiangsu Sheng', '江苏省'], 'CN12' => ['Zhejiang Sheng', 'Zhejiang Sheng', '浙江省'], 'CN13' => ['Anhui Sheng', 'Anhui Sheng', '安徽省'], 'CN14' => ['Fujian Sheng', 'Fujian Sheng', '福建省'], 'CN15' => ['Jiangxi Sheng', 'Jiangxi Sheng', '江西省'], 'CN16' => ['Shandong Sheng', 'Shandong Sheng', '山东省'], 'CN17' => ['Henan Sheng', 'Henan Sheng', '河南省'], 'CN18' => ['Hubei Sheng', 'Hubei Sheng', '湖北省'], 'CN19' => ['Hunan Sheng', 'Hunan Sheng', '湖南省'], 'CN20' => ['Guangdong Sheng', 'Guangdong Sheng', '广东省'], 'CN21' => ['Guangxi Zhuangzuzizhiqu', 'Guangxi Zhuangzuzizhiqu', '广西'], 'CN22' => ['Hainan Sheng', 'Hainan Sheng', '海南省'], 'CN23' => ['Chongqing Shi', 'Chongqing Shi', '重庆市'], 'CN24' => ['Sichuan Sheng', 'Sichuan Sheng', '四川省'], 'CN25' => ['Guizhou Sheng', 'Guizhou Sheng', '贵州省'], 'CN26' => ['Shaanxi Sheng', 'Shaanxi Sheng', '陕西省'], 'CN27' => ['Gansu Sheng', 'Gansu Sheng', '甘肃省'], 'CN28' => ['Qinghai Sheng', 'Qinghai Sheng', '青海省'], 'CN29' => ['Ningxia Huizuzizhiqu', 'Ningxia Huizuzizhiqu', '宁夏'], 'CN30' => ['Macau', 'Macau', '澳门'], 'CN31' => ['Xizang Zizhiqu', 'Xizang Zizhiqu', '西藏'], 'CN32' => ['Xinjiang Weiwuerzizhiqu', 'Xinjiang Weiwuerzizhiqu', '新疆']],
        // Czech Republic.
        'CZ' => [],
        // Germany.
        'DE' => [],
        // Denmark.
        'DK' => [],
        // Dominican Republic.
        'DO' => [],
        // Algeria.
        'DZ' => [],
        // Estonia.
        'EE' => [],
        // Egypt.
        'EG' => ['EGALX' => ['Alexandria Governorate', 'Alexandria Governorate', 'الإسكندرية'], 'EGASN' => ['Aswan Governorate', 'Aswan Governorate', 'أسوان'], 'EGAST' => ['Asyut Governorate', 'Asyut Governorate', 'أسيوط'], 'EGBA' => ['Red Sea Governorate', 'Red Sea Governorate', 'البحر الأحمر'], 'EGBH' => ['El Beheira Governorate', 'El Beheira Governorate', 'البحيرة'], 'EGBNS' => ['Beni Suef Governorate', 'Beni Suef Governorate', 'بني سويف'], 'EGC' => ['Cairo Governorate', 'Cairo Governorate', 'القاهرة'], 'EGDK' => ['Dakahlia Governorate', 'Dakahlia Governorate', 'الدقهلية'], 'EGDT' => ['Damietta Governorate', 'Damietta Governorate', 'دمياط'], 'EGFYM' => ['Faiyum Governorate', 'Faiyum Governorate', 'الفيوم'], 'EGGH' => ['Gharbia Governorate', 'Gharbia Governorate', 'الغربية'], 'EGGZ' => ['Giza Governorate', 'Giza Governorate', 'الجيزة'], 'EGIS' => ['Ismailia Governorate', 'Ismailia Governorate', 'الإسماعيلية'], 'EGJS' => ['South Sinai Governorate', 'South Sinai Governorate', 'جنوب سيناء'], 'EGKB' => ['Qalyubia Governorate', 'Qalyubia Governorate', 'القليوبية'], 'EGKFS' => ['Kafr El Sheikh Governorate', 'Kafr El Sheikh Governorate', 'كفر الشيخ'], 'EGKN' => ['Qena Governorate', 'Qena Governorate', 'قنا'], 'EGLX' => ['Luxor Governorate', 'Luxor Governorate', 'الأقصر'], 'EGMN' => ['Menia Governorate', 'Menia Governorate', 'المنيا'], 'EGMNF' => ['Menofia Governorate', 'Menofia Governorate', 'المنوفية'], 'EGMT' => ['Matrouh Governorate', 'Matrouh Governorate', 'مطروح'], 'EGPTS' => ['Port Said Governorate', 'Port Said Governorate', 'بورسعيد'], 'EGSHG' => ['Sohag Governorate', 'Sohag Governorate', 'سوهاج'], 'EGSHR' => ['Ash Sharqia Governorate', 'Ash Sharqia Governorate', 'الشرقية'], 'EGSIN' => ['North Sinai Governorate', 'North Sinai Governorate', 'شمال سيناء'], 'EGSUZ' => ['Suez Governorate', 'Suez Governorate', 'السويس'], 'EGWAD' => ['New Valley Governorate', 'New Valley Governorate', 'الوادي الجديد']],
        // Spain.
        'ES' => ['C' => ['A Coruña', 'A Coruña', 'La Coruña'], 'VI' => ['Álava', 'Álava', 'Araba'], 'AB' => ['Albacete', 'Albacete', \null], 'A' => ['Alicante', 'Alicante', 'Alacant'], 'AL' => ['Almería', 'Almería', \null], 'O' => ['Asturias', 'Asturias', \null], 'AV' => ['Ávila', 'Ávila', \null], 'BA' => ['Badajoz', 'Badajoz', \null], 'PM' => ['Balears', 'Balears', 'Illes Balears'], 'B' => ['Barcelona', 'Barcelona', \null], 'BU' => ['Burgos', 'Burgos', \null], 'CC' => ['Cáceres', 'Cáceres', \null], 'CA' => ['Cádiz', 'Cádiz', \null], 'S' => ['Cantabria', 'Cantabria', \null], 'CS' => ['Castellón', 'Castellón', 'Castelló'], 'CE' => ['Ceuta', 'Ceuta', \null], 'CR' => ['Ciudad Real', 'Ciudad Real', \null], 'CO' => ['Córdoba', 'Córdoba', \null], 'CU' => ['Cuenca', 'Cuenca', \null], 'GI' => ['Girona', 'Girona', 'Gerona'], 'GR' => ['Granada', 'Granada', \null], 'GU' => ['Guadalajara', 'Guadalajara', \null], 'SS' => ['Guipúzcoa', 'Guipúzcoa', 'Gipuzkoa'], 'H' => ['Huelva', 'Huelva', \null], 'HU' => ['Huesca', 'Huesca', 'Osca'], 'J' => ['Jaén', 'Jaén', \null], 'LO' => ['La Rioja', 'La Rioja', \null], 'GC' => ['Las Palmas', 'Las Palmas', \null], 'LE' => ['León', 'León', \null], 'L' => ['Lleida', 'Lleida', 'Lérida'], 'LU' => ['Lugo', 'Lugo', \null], 'M' => ['Madrid', 'Madrid', \null], 'MA' => ['Málaga', 'Málaga', \null], 'ML' => ['Melilla', 'Melilla', \null], 'MU' => ['Murcia', 'Murcia', \null], 'NA' => ['Navarra', 'Navarra', 'Nafarroa'], 'OR' => ['Ourense', 'Ourense', 'Orense'], 'P' => ['Palencia', 'Palencia', \null], 'PO' => ['Pontevedra', 'Pontevedra', \null], 'SA' => ['Salamanca', 'Salamanca', \null], 'TF' => ['Santa Cruz de Tenerife', 'Santa Cruz de Tenerife', \null], 'SG' => ['Segovia', 'Segovia', \null], 'SE' => ['Sevilla', 'Sevilla', \null], 'SO' => ['Soria', 'Soria', \null], 'T' => ['Tarragona', 'Tarragona', \null], 'TE' => ['Teruel', 'Teruel', \null], 'TO' => ['Toledo', 'Toledo', \null], 'V' => ['Valencia', 'Valencia', 'València'], 'VA' => ['Valladolid', 'Valladolid', \null], 'BI' => ['Vizcaya', 'Vizcaya', 'Bizkaia'], 'ZA' => ['Zamora', 'Zamora', \null], 'Z' => ['Zaragoza', 'Zaragoza', \null]],
        // Finland.
        'FI' => [],
        // France.
        'FR' => [],
        // French Guiana.
        'GF' => [],
        // Ghana.
        'GH' => [],
        // Guadeloupe.
        'GP' => [],
        // Greece.
        'GR' => [],
        // Guatemala.
        'GT' => [],
        // Hong Kong.
        'HK' => ['HONG KONG' => ['Hong Kong Island', 'Hong Kong Island', '香港島'], 'KOWLOON' => ['Kowloon', 'Kowloon', '九龍'], 'NEW TERRITORIES' => ['New Territories', 'New Territories', '新界']],
        // Hungary.
        'HU' => [],
        // Indonesia.
        'ID' => ['AC' => ['Aceh', 'Aceh', \null], 'SU' => ['Sumatera Utara', 'Sumatera Utara', \null], 'SB' => ['Sumatera Barat', 'Sumatera Barat', \null], 'RI' => ['Riau', 'Riau', \null], 'KR' => ['Kepulauan Riau', 'Kepulauan Riau', \null], 'JA' => ['Jambi', 'Jambi', \null], 'SS' => ['Sumatera Selatan', 'Sumatera Selatan', \null], 'BB' => ['Kepulauan Bangka Belitung', 'Kepulauan Bangka Belitung', \null], 'BE' => ['Bengkulu', 'Bengkulu', \null], 'LA' => ['Lampung', 'Lampung', \null], 'JK' => ['DKI Jakarta', 'DKI Jakarta', \null], 'JB' => ['Jawa Barat', 'Jawa Barat', \null], 'BT' => ['Banten', 'Banten', \null], 'JT' => ['Jawa Tengah', 'Jawa Tengah', \null], 'JI' => ['Jawa Timur', 'Jawa Timur', \null], 'YO' => ['Daerah Istimewa Yogyakarta', 'Daerah Istimewa Yogyakarta', \null], 'BA' => ['Bali', 'Bali', \null], 'NB' => ['Nusa Tenggara Barat', 'Nusa Tenggara Barat', \null], 'NT' => ['Nusa Tenggara Timur', 'Nusa Tenggara Timur', \null], 'KB' => ['Kalimantan Barat', 'Kalimantan Barat', \null], 'KT' => ['Kalimantan Tengah', 'Kalimantan Tengah', \null], 'KI' => ['Kalimantan Timur', 'Kalimantan Timur', \null], 'KS' => ['Kalimantan Selatan', 'Kalimantan Selatan', \null], 'KU' => ['Kalimantan Utara', 'Kalimantan Utara', \null], 'SA' => ['Sulawesi Utara', 'Sulawesi Utara', \null], 'ST' => ['Sulawesi Tengah', 'Sulawesi Tengah', \null], 'SG' => ['Sulawesi Tenggara', 'Sulawesi Tenggara', \null], 'SR' => ['Sulawesi Barat', 'Sulawesi Barat', \null], 'SN' => ['Sulawesi Selatan', 'Sulawesi Selatan', \null], 'GO' => ['Gorontalo', 'Gorontalo', \null], 'MA' => ['Maluku', 'Maluku', \null], 'MU' => ['Maluku Utara', 'Maluku Utara', \null], 'PA' => ['Papua', 'Papua', \null], 'PB' => ['Papua Barat', 'Papua Barat', \null]],
        // Ireland.
        'IE' => ['CW' => ['Co. Carlow', 'Co. Carlow', \null], 'CN' => ['Co. Cavan', 'Co. Cavan', \null], 'CE' => ['Co. Clare', 'Co. Clare', \null], 'CO' => ['Co. Cork', 'Co. Cork', \null], 'DL' => ['Co. Donegal', 'Co. Donegal', \null], 'D' => ['Co. Dublin', 'Co. Dublin', \null], 'G' => ['Co. Galway', 'Co. Galway', \null], 'KY' => ['Co. Kerry', 'Co. Kerry', \null], 'KE' => ['Co. Kildare', 'Co. Kildare', \null], 'KK' => ['Co. Kilkenny', 'Co. Kilkenny', \null], 'LS' => ['Co. Laois', 'Co. Laois', \null], 'LM' => ['Co. Leitrim', 'Co. Leitrim', \null], 'LK' => ['Co. Limerick', 'Co. Limerick', \null], 'LD' => ['Co. Longford', 'Co. Longford', \null], 'LH' => ['Co. Louth', 'Co. Louth', \null], 'MO' => ['Co. Mayo', 'Co. Mayo', \null], 'MH' => ['Co. Meath', 'Co. Meath', \null], 'MN' => ['Co. Monaghan', 'Co. Monaghan', \null], 'OY' => ['Co. Offaly', 'Co. Offaly', \null], 'RN' => ['Co. Roscommon', 'Co. Roscommon', \null], 'SO' => ['Co. Sligo', 'Co. Sligo', \null], 'TA' => ['Co. Tipperary', 'Co. Tipperary', \null], 'WD' => ['Co. Waterford', 'Co. Waterford', \null], 'WH' => ['Co. Westmeath', 'Co. Westmeath', \null], 'WX' => ['Co. Wexford', 'Co. Wexford', \null], 'WW' => ['Co. Wicklow', 'Co. Wicklow', \null]],
        // Israel.
        'IL' => [],
        // Isle of Man.
        'IM' => [],
        // India.
        'IN' => [
            'AP' => ['Andhra Pradesh', 'Andhra Pradesh', \null],
            'AR' => ['Arunachal Pradesh', 'Arunachal Pradesh', \null],
            'AS' => ['Assam', 'Assam', \null],
            'BR' => ['Bihar', 'Bihar', \null],
            'CT' => ['Chhattisgarh', 'Chhattisgarh', \null],
            'GA' => ['Goa', 'Goa', \null],
            'GJ' => ['Gujarat', 'Gujarat', \null],
            'HR' => ['Haryana', 'Haryana', \null],
            'HP' => ['Himachal Pradesh', 'Himachal Pradesh', \null],
            'JK' => ['Jammu and Kashmir', 'Jammu & Kashmir', \null],
            'JH' => ['Jharkhand', 'Jharkhand', \null],
            'KA' => ['Karnataka', 'Karnataka', \null],
            'KL' => ['Kerala', 'Kerala', \null],
            // 'LA' => __( 'Ladakh', 'woocommerce' ),
            'MP' => ['Madhya Pradesh', 'Madhya Pradesh', \null],
            'MH' => ['Maharashtra', 'Maharashtra', \null],
            'MN' => ['Manipur', 'Manipur', \null],
            'ML' => ['Meghalaya', 'Meghalaya', \null],
            'MZ' => ['Mizoram', 'Mizoram', \null],
            'NL' => ['Nagaland', 'Nagaland', \null],
            'OR' => ['Odisha', 'Odisha', \null],
            'PB' => ['Punjab', 'Punjab', \null],
            'RJ' => ['Rajasthan', 'Rajasthan', \null],
            'SK' => ['Sikkim', 'Sikkim', \null],
            'TN' => ['Tamil Nadu', 'Tamil Nadu', \null],
            'TS' => ['Telangana', 'Telangana', \null],
            'TR' => ['Tripura', 'Tripura', \null],
            'UK' => ['Uttarakhand', 'Uttarakhand', \null],
            'UP' => ['Uttar Pradesh', 'Uttar Pradesh', \null],
            'WB' => ['West Bengal', 'West Bengal', \null],
            'AN' => ['Andaman and Nicobar Islands', 'Andaman & Nicobar', \null],
            'CH' => ['Chandigarh', 'Chandigarh', \null],
            'DN' => ['Dadra and Nagar Haveli', 'Dadra & Nagar Haveli', \null],
            'DD' => ['Daman and Diu', 'Daman & Diu', \null],
            'DL' => ['Delhi', 'Delhi', \null],
            'LD' => ['Lakshadweep', 'Lakshadweep', \null],
            'PY' => ['Puducherry', 'Puducherry', \null],
        ],
        // Iran.
        'IR' => ['KHZ' => ['Khuzestan Province', 'Khuzestan Province', 'استان خوزستان'], 'THR' => ['Tehran Province', 'Tehran Province', 'استان تهران'], 'ILM' => ['Ilam Province', 'Ilam Province', 'استان ایلام'], 'BHR' => ['Bushehr Province', 'Bushehr Province', 'استان بوشهر'], 'ADL' => ['Ardabil Province', 'Ardabil Province', 'استان اردبیل'], 'ESF' => ['Isfahan Province', 'Isfahan Province', 'استان اصفهان'], 'YZD' => ['Yazd Province', 'Yazd Province', 'استان یزد'], 'KRH' => ['Kermanshah Province', 'Kermanshah Province', 'استان کرمانشاه'], 'KRN' => ['Kerman Province', 'Kerman Province', 'استان کرمان'], 'HDN' => ['Hamadan Province', 'Hamadan Province', 'استان همدان'], 'GZN' => ['Qazvin Province', 'Qazvin Province', 'استان قزوین'], 'ZJN' => ['Zanjan Province', 'Zanjan Province', 'استان زنجان'], 'LRS' => ['Lorestan Province', 'Lorestan Province', 'استان لرستان'], 'ABZ' => ['Alborz Province', 'Alborz Province', 'استان البرز'], 'EAZ' => ['East Azerbaijan Province', 'East Azerbaijan Province', 'استان آذربایجان شرقی'], 'WAZ' => ['West Azerbaijan Province', 'West Azerbaijan Province', 'استان آذربایجان غربی'], 'CHB' => ['Chaharmahal and Bakhtiari Province', 'Chaharmahal and Bakhtiari Province', 'استان چهارمحال و بختیاری'], 'SKH' => ['South Khorasan Province', 'South Khorasan Province', 'استان خراسان جنوبی'], 'RKH' => ['Razavi Khorasan Province', 'Razavi Khorasan Province', 'استان خراسان رضوی'], 'NKH' => ['North Khorasan Province', 'North Khorasan Province', 'استان خراسان شمالی'], 'SMN' => ['Semnan Province', 'Semnan Province', 'استان سمنان'], 'FRS' => ['Fars Province', 'Fars Province', 'استان فارس'], 'QHM' => ['Qom Province', 'Qom Province', 'استان قم'], 'KRD' => ['Kurdistan Province', 'Kurdistan Province', 'استان کردستان'], 'KBD' => ['Kohgiluyeh and Boyer-Ahmad Province', 'Kohgiluyeh and Boyer-Ahmad Province', 'استان کهگیلویه و بویراحمد'], 'GLS' => ['Golestan Province', 'Golestan Province', 'استان گلستان'], 'GIL' => ['Gilan Province', 'Gilan Province', 'استان گیلان'], 'MZN' => ['Mazandaran Province', 'Mazandaran Province', 'استان مازندران'], 'MKZ' => ['Markazi Province', 'Markazi Province', 'استان مرکزی'], 'HRZ' => ['Hormozgan Province', 'Hormozgan Province', 'استان هرمزگان'], 'SBN' => ['Sistan and Baluchestan Province', 'Sistan and Baluchestan Province', 'استان سیستان و بلوچستان']],
        // Iceland.
        'IS' => [],
        // Italy.
        'IT' => ['AG' => ['AG', 'Agrigento', \null], 'AL' => ['AL', 'Alessandria', \null], 'AN' => ['AN', 'Ancona', \null], 'AO' => ['AO', 'Aosta', \null], 'AR' => ['AR', 'Arezzo', \null], 'AP' => ['AP', 'Ascoli Piceno', \null], 'AT' => ['AT', 'Asti', \null], 'AV' => ['AV', 'Avellino', \null], 'BA' => ['BA', 'Bari', \null], 'BT' => ['BT', 'Barletta-Andria-Trani', \null], 'BL' => ['BL', 'Belluno', \null], 'BN' => ['BN', 'Benevento', \null], 'BG' => ['BG', 'Bergamo', \null], 'BI' => ['BI', 'Biella', \null], 'BO' => ['BO', 'Bologna', \null], 'BZ' => ['BZ', 'Bolzano', \null], 'BS' => ['BS', 'Brescia', \null], 'BR' => ['BR', 'Brindisi', \null], 'CA' => ['CA', 'Cagliari', \null], 'CL' => ['CL', 'Caltanissetta', \null], 'CB' => ['CB', 'Campobasso', \null], 'CE' => ['CE', 'Caserta', \null], 'CT' => ['CT', 'Catania', \null], 'CZ' => ['CZ', 'Catanzaro', \null], 'CH' => ['CH', 'Chieti', \null], 'CO' => ['CO', 'Como', \null], 'CS' => ['CS', 'Cosenza', \null], 'CR' => ['CR', 'Cremona', \null], 'KR' => ['KR', 'Crotone', \null], 'CN' => ['CN', 'Cuneo', \null], 'EN' => ['EN', 'Enna', \null], 'FM' => ['FM', 'Fermo', \null], 'FE' => ['FE', 'Ferrara', \null], 'FI' => ['FI', 'Firenze', \null], 'FG' => ['FG', 'Foggia', \null], 'FC' => ['FC', 'Forlì-Cesena', \null], 'FR' => ['FR', 'Frosinone', \null], 'GE' => ['GE', 'Genova', \null], 'GO' => ['GO', 'Gorizia', \null], 'GR' => ['GR', 'Grosseto', \null], 'IM' => ['IM', 'Imperia', \null], 'IS' => ['IS', 'Isernia', \null], 'SP' => ['SP', 'La Spezia', \null], 'AQ' => ['AQ', "L'Aquila", \null], 'LT' => ['LT', 'Latina', \null], 'LE' => ['LE', 'Lecce', \null], 'LC' => ['LC', 'Lecco', \null], 'LI' => ['LI', 'Livorno', \null], 'LO' => ['LO', 'Lodi', \null], 'LU' => ['LU', 'Lucca', \null], 'MC' => ['MC', 'Macerata', \null], 'MN' => ['MN', 'Mantova', \null], 'MS' => ['MS', 'Massa-Carrara', \null], 'MT' => ['MT', 'Matera', \null], 'ME' => ['ME', 'Messina', \null], 'MI' => ['MI', 'Milano', \null], 'MO' => ['MO', 'Modena', \null], 'MB' => ['MB', 'Monza e Brianza', \null], 'NA' => ['NA', 'Napoli', \null], 'NO' => ['NO', 'Novara', \null], 'NU' => ['NU', 'Nuoro', \null], 'OR' => ['OR', 'Oristano', \null], 'PD' => ['PD', 'Padova', \null], 'PA' => ['PA', 'Palermo', \null], 'PR' => ['PR', 'Parma', \null], 'PV' => ['PV', 'Pavia', \null], 'PG' => ['PG', 'Perugia', \null], 'PU' => ['PU', 'Pesaro e Urbino', \null], 'PE' => ['PE', 'Pescara', \null], 'PC' => ['PC', 'Piacenza', \null], 'PI' => ['PI', 'Pisa', \null], 'PT' => ['PT', 'Pistoia', \null], 'PN' => ['PN', 'Pordenone', \null], 'PZ' => ['PZ', 'Potenza', \null], 'PO' => ['PO', 'Prato', \null], 'RG' => ['RG', 'Ragusa', \null], 'RA' => ['RA', 'Ravenna', \null], 'RC' => ['RC', 'Reggio Calabria', \null], 'RE' => ['RE', 'Reggio Emilia', \null], 'RI' => ['RI', 'Rieti', \null], 'RN' => ['RN', 'Rimini', \null], 'RM' => ['RM', 'Roma', \null], 'RO' => ['RO', 'Rovigo', \null], 'SA' => ['SA', 'Salerno', \null], 'SS' => ['SS', 'Sassari', \null], 'SV' => ['SV', 'Savona', \null], 'SI' => ['SI', 'Siena', \null], 'SR' => ['SR', 'Siracusa', \null], 'SO' => ['SO', 'Sondrio', \null], 'SU' => ['SU', 'Sud Sardegna', \null], 'TA' => ['TA', 'Taranto', \null], 'TE' => ['TE', 'Teramo', \null], 'TR' => ['TR', 'Terni', \null], 'TO' => ['TO', 'Torino', \null], 'TP' => ['TP', 'Trapani', \null], 'TN' => ['TN', 'Trento', \null], 'TV' => ['TV', 'Treviso', \null], 'TS' => ['TS', 'Trieste', \null], 'UD' => ['UD', 'Udine', \null], 'VA' => ['VA', 'Varese', \null], 'VE' => ['VE', 'Venezia', \null], 'VB' => ['VB', 'Verbano-Cusio-Ossola', \null], 'VC' => ['VC', 'Vercelli', \null], 'VR' => ['VR', 'Verona', \null], 'VV' => ['VV', 'Vibo Valentia', \null], 'VI' => ['VI', 'Vicenza', \null], 'VT' => ['VT', 'Viterbo', \null]],
        // Jamaica.
        'JM' => ['JM-01' => ['Kingston', 'Kingston', \null], 'JM-02' => ['St. Andrew', 'St. Andrew', \null], 'JM-03' => ['St. Thomas', 'St. Thomas', \null], 'JM-04' => ['Portland', 'Portland', \null], 'JM-05' => ['St. Mary', 'St. Mary', \null], 'JM-06' => ['St. Ann', 'St. Ann', \null], 'JM-07' => ['Trelawny', 'Trelawny', \null], 'JM-08' => ['St. James', 'St. James', \null], 'JM-09' => ['Hanover', 'Hanover', \null], 'JM-10' => ['Westmoreland', 'Westmoreland', \null], 'JM-11' => ['St. Elizabeth', 'St. Elizabeth', \null], 'JM-12' => ['Manchester', 'Manchester', \null], 'JM-13' => ['Clarendon', 'Clarendon', \null], 'JM-14' => ['St. Catherine', 'St. Catherine', \null]],
        // Japan.
        'JP' => ['JP01' => ['Hokkaido', 'Hokkaido', '北海道'], 'JP02' => ['Aomori', 'Aomori', '青森県'], 'JP03' => ['Iwate', 'Iwate', '岩手県'], 'JP04' => ['Miyagi', 'Miyagi', '宮城県'], 'JP05' => ['Akita', 'Akita', '秋田県'], 'JP06' => ['Yamagata', 'Yamagata', '山形県'], 'JP07' => ['Fukushima', 'Fukushima', '福島県'], 'JP08' => ['Ibaraki', 'Ibaraki', '茨城県'], 'JP09' => ['Tochigi', 'Tochigi', '栃木県'], 'JP10' => ['Gunma', 'Gunma', '群馬県'], 'JP11' => ['Saitama', 'Saitama', '埼玉県'], 'JP12' => ['Chiba', 'Chiba', '千葉県'], 'JP13' => ['Tokyo', 'Tokyo', '東京都'], 'JP14' => ['Kanagawa', 'Kanagawa', '神奈川県'], 'JP15' => ['Niigata', 'Niigata', '新潟県'], 'JP16' => ['Toyama', 'Toyama', '富山県'], 'JP17' => ['Ishikawa', 'Ishikawa', '石川県'], 'JP18' => ['Fukui', 'Fukui', '福井県'], 'JP19' => ['Yamanashi', 'Yamanashi', '山梨県'], 'JP20' => ['Nagano', 'Nagano', '長野県'], 'JP21' => ['Gifu', 'Gifu', '岐阜県'], 'JP22' => ['Shizuoka', 'Shizuoka', '静岡県'], 'JP23' => ['Aichi', 'Aichi', '愛知県'], 'JP24' => ['Mie', 'Mie', '三重県'], 'JP25' => ['Shiga', 'Shiga', '滋賀県'], 'JP26' => ['Kyoto', 'Kyoto', '京都府'], 'JP27' => ['Osaka', 'Osaka', '大阪府'], 'JP28' => ['Hyogo', 'Hyogo', '兵庫県'], 'JP29' => ['Nara', 'Nara', '奈良県'], 'JP30' => ['Wakayama', 'Wakayama', '和歌山県'], 'JP31' => ['Tottori', 'Tottori', '鳥取県'], 'JP32' => ['Shimane', 'Shimane', '島根県'], 'JP33' => ['Okayama', 'Okayama', '岡山県'], 'JP34' => ['Hiroshima', 'Hiroshima', '広島県'], 'JP35' => ['Yamaguchi', 'Yamaguchi', '山口県'], 'JP36' => ['Tokushima', 'Tokushima', '徳島県'], 'JP37' => ['Kagawa', 'Kagawa', '香川県'], 'JP38' => ['Ehime', 'Ehime', '愛媛県'], 'JP39' => ['Kochi', 'Kochi', '高知県'], 'JP40' => ['Fukuoka', 'Fukuoka', '福岡県'], 'JP41' => ['Saga', 'Saga', '佐賀県'], 'JP42' => ['Nagasaki', 'Nagasaki', '長崎県'], 'JP43' => ['Kumamoto', 'Kumamoto', '熊本県'], 'JP44' => ['Oita', 'Oita', '大分県'], 'JP45' => ['Miyazaki', 'Miyazaki', '宮崎県'], 'JP46' => ['Kagoshima', 'Kagoshima', '鹿児島県'], 'JP47' => ['Okinawa', 'Okinawa', '沖縄県']],
        // Kenya.
        'KE' => [],
        // South Korea.
        'KR' => [],
        // Kuwait.
        'KW' => [],
        // Laos.
        'LA' => [],
        // Lebanon.
        'LB' => [],
        // Sri Lanka.
        'LK' => [],
        // Liberia.
        'LR' => [],
        // Lithuania.
        'LT' => [],
        // Luxembourg.
        'LU' => [],
        // Morocco.
        'MA' => [],
        // Moldova.
        'MD' => [],
        // Martinique.
        'MQ' => [],
        // Malta.
        'MT' => [],
        // Mexico.
        'MX' => ['DF' => ['CDMX', 'Ciudad de México', \null], 'JA' => ['Jal.', 'Jalisco', \null], 'NL' => ['N.L.', 'Nuevo León', \null], 'AG' => ['Ags.', 'Aguascalientes', \null], 'BC' => ['B.C.', 'Baja California', \null], 'BS' => ['B.C.S.', 'Baja California Sur', \null], 'CM' => ['Camp.', 'Campeche', \null], 'CS' => ['Chis.', 'Chiapas', \null], 'CH' => ['Chih.', 'Chihuahua', \null], 'CO' => ['Coah.', 'Coahuila de Zaragoza', \null], 'CL' => ['Col.', 'Colima', \null], 'DG' => ['Dgo.', 'Durango', \null], 'GT' => ['Gto.', 'Guanajuato', \null], 'GR' => ['Gro.', 'Guerrero', \null], 'HG' => ['Hgo.', 'Hidalgo', \null], 'MX' => ['Méx.', 'Estado de México', \null], 'MI' => ['Mich.', 'Michoacán', \null], 'MO' => ['Mor.', 'Morelos', \null], 'NA' => ['Nay.', 'Nayarit', \null], 'OA' => ['Oax.', 'Oaxaca', \null], 'PU' => ['Pue.', 'Puebla', \null], 'QT' => ['Qro.', 'Querétaro', \null], 'QR' => ['Q.R.', 'Quintana Roo', \null], 'SL' => ['S.L.P.', 'San Luis Potosí', \null], 'SI' => ['Sin.', 'Sinaloa', \null], 'SO' => ['Son.', 'Sonora', \null], 'TB' => ['Tab.', 'Tabasco', \null], 'TM' => ['Tamps.', 'Tamaulipas', \null], 'TL' => ['Tlax.', 'Tlaxcala', \null], 'VE' => ['Ver.', 'Veracruz', \null], 'YU' => ['Yuc.', 'Yucatán', \null], 'ZA' => ['Zac.', 'Zacatecas', \null]],
        // Malaysia.
        'MY' => ['JHR' => ['Johor', 'Johor', \null], 'KDH' => ['Kedah', 'Kedah', \null], 'KTN' => ['Kelantan', 'Kelantan', \null], 'LBN' => ['Labuan', 'Labuan', \null], 'MLK' => ['Melaka', 'Melaka', \null], 'NSN' => ['Negeri Sembilan', 'Negeri Sembilan', \null], 'PHG' => ['Pahang', 'Pahang', \null], 'PNG' => ['Pulau Pinang', 'Pulau Pinang', \null], 'PRK' => ['Perak', 'Perak', \null], 'PLS' => ['Perlis', 'Perlis', \null], 'SBH' => ['Sabah', 'Sabah', \null], 'SWK' => ['Sarawak', 'Sarawak', \null], 'SGR' => ['Selangor', 'Selangor', \null], 'TRG' => ['Terengganu', 'Terengganu', \null], 'PJY' => ['Putrajaya', 'Putrajaya', \null], 'KUL' => ['Kuala Lumpur', 'Kuala Lumpur', \null]],
        // Mozambique.
        'MZ' => ['MZP' => ['Cabo Delgado', 'Cabo Delgado', \null], 'MZG' => ['Gaza', 'Gaza', \null], 'MZI' => ['Inhambane', 'Inhambane', \null], 'MZB' => ['Manica', 'Manica', \null], 'MZL' => ['Maputo', 'Maputo', \null], 'MZMPM' => ['Cidade de Maputo', 'Cidade de Maputo', \null], 'MZN' => ['Nampula', 'Nampula', \null], 'MZA' => ['Niassa', 'Niassa', \null], 'MZS' => ['Sofala', 'Sofala', \null], 'MZT' => ['Tete', 'Tete', \null], 'MZQ' => ['Zambezia', 'Zambezia', \null]],
        // Namibia.
        'NA' => [],
        // Nigeria.
        'NG' => ['AB' => ['Abia', 'Abia', \null], 'FC' => ['Federal Capital Territory', 'Federal Capital Territory', \null], 'AD' => ['Adamawa', 'Adamawa', \null], 'AK' => ['Akwa Ibom', 'Akwa Ibom', \null], 'AN' => ['Anambra', 'Anambra', \null], 'BA' => ['Bauchi', 'Bauchi', \null], 'BY' => ['Bayelsa', 'Bayelsa', \null], 'BE' => ['Benue', 'Benue', \null], 'BO' => ['Borno', 'Borno', \null], 'CR' => ['Cross River', 'Cross River', \null], 'DE' => ['Delta', 'Delta', \null], 'EB' => ['Ebonyi', 'Ebonyi', \null], 'ED' => ['Edo', 'Edo', \null], 'EK' => ['Ekiti', 'Ekiti', \null], 'EN' => ['Enugu', 'Enugu', \null], 'GO' => ['Gombe', 'Gombe', \null], 'IM' => ['Imo', 'Imo', \null], 'JI' => ['Jigawa', 'Jigawa', \null], 'KD' => ['Kaduna', 'Kaduna', \null], 'KN' => ['Kano', 'Kano', \null], 'KT' => ['Katsina', 'Katsina', \null], 'KE' => ['Kebbi', 'Kebbi', \null], 'KO' => ['Kogi', 'Kogi', \null], 'KW' => ['Kwara', 'Kwara', \null], 'LA' => ['Lagos', 'Lagos', \null], 'NA' => ['Nasarawa', 'Nasarawa', \null], 'NI' => ['Niger', 'Niger', \null], 'OG' => ['Ogun State', 'Ogun State', \null], 'ON' => ['Ondo', 'Ondo', \null], 'OS' => ['Osun', 'Osun', \null], 'OY' => ['Oyo', 'Oyo', \null], 'PL' => ['Plateau', 'Plateau', \null], 'RI' => ['Rivers', 'Rivers', \null], 'SO' => ['Sokoto', 'Sokoto', \null], 'TA' => ['Taraba', 'Taraba', \null], 'YO' => ['Yobe', 'Yobe', \null], 'ZA' => ['Zamfara', 'Zamfara', \null]],
        // Netherlands.
        'NL' => [],
        // Norway.
        'NO' => [],
        // Nepal.
        'NP' => [],
        // New Zealand.
        'NZ' => [],
        // Peru.
        'PE' => ['CAL' => ['Callao', 'Callao', \null], 'LMA' => ['Municipalidad Metropolitana de Lima', 'Municipalidad Metropolitana de Lima', \null], 'AMA' => ['Amazonas', 'Amazonas', \null], 'ANC' => ['Áncash', 'Áncash', \null], 'APU' => ['Apurímac', 'Apurímac', \null], 'ARE' => ['Arequipa', 'Arequipa', \null], 'AYA' => ['Ayacucho', 'Ayacucho', \null], 'CAJ' => ['Cajamarca', 'Cajamarca', \null], 'CUS' => ['Cuzco', 'Cuzco', \null], 'HUV' => ['Huancavelica', 'Huancavelica', \null], 'HUC' => ['Huánuco', 'Huánuco', \null], 'ICA' => ['Ica', 'Ica', \null], 'JUN' => ['Junín', 'Junín', \null], 'LAL' => ['La Libertad', 'La Libertad', \null], 'LAM' => ['Lambayeque', 'Lambayeque', \null], 'LIM' => ['Gobierno Regional de Lima', 'Gobierno Regional de Lima', \null], 'LOR' => ['Loreto', 'Loreto', \null], 'MDD' => ['Madre de Dios', 'Madre de Dios', \null], 'MOQ' => ['Moquegua', 'Moquegua', \null], 'PAS' => ['Pasco', 'Pasco', \null], 'PIU' => ['Piura', 'Piura', \null], 'PUN' => ['Puno', 'Puno', \null], 'SAM' => ['San Martín', 'San Martín', \null], 'TAC' => ['Tacna', 'Tacna', \null], 'TUM' => ['Tumbes', 'Tumbes', \null], 'UCA' => ['Ucayali', 'Ucayali', \null]],
        // Philippines.
        'PH' => ['ABR' => ['Abra', 'Abra', \null], 'AGN' => ['Agusan del Norte', 'Agusan del Norte', \null], 'AGS' => ['Agusan del Sur', 'Agusan del Sur', \null], 'AKL' => ['Aklan', 'Aklan', \null], 'ALB' => ['Albay', 'Albay', \null], 'ANT' => ['Antique', 'Antique', \null], 'APA' => ['Apayao', 'Apayao', \null], 'AUR' => ['Aurora', 'Aurora', \null], 'BAS' => ['Basilan', 'Basilan', \null], 'BAN' => ['Bataan', 'Bataan', \null], 'BTN' => ['Batanes', 'Batanes', \null], 'BTG' => ['Batangas', 'Batangas', \null], 'BEN' => ['Benguet', 'Benguet', \null], 'BIL' => ['Biliran', 'Biliran', \null], 'BOH' => ['Bohol', 'Bohol', \null], 'BUK' => ['Bukidnon', 'Bukidnon', \null], 'BUL' => ['Bulacan', 'Bulacan', \null], 'CAG' => ['Cagayan', 'Cagayan', \null], 'CAN' => ['Camarines Norte', 'Camarines Norte', \null], 'CAS' => ['Camarines Sur', 'Camarines Sur', \null], 'CAM' => ['Camiguin', 'Camiguin', \null], 'CAP' => ['Capiz', 'Capiz', \null], 'CAT' => ['Catanduanes', 'Catanduanes', \null], 'CAV' => ['Cavite', 'Cavite', \null], 'CEB' => ['Cebu', 'Cebu', \null], 'COM' => ['Compostela Valley', 'Compostela Valley', \null], 'NCO' => ['Cotabato', 'Cotabato', \null], 'DAV' => ['Davao del Norte', 'Davao del Norte', \null], 'DAS' => ['Davao del Sur', 'Davao del Sur', \null], 'DAC' => ['Davao Occidental', 'Davao Occidental', \null], 'DAO' => ['Davao Oriental', 'Davao Oriental', \null], 'DIN' => ['Dinagat Islands', 'Dinagat Islands', \null], 'EAS' => ['Eastern Samar', 'Eastern Samar', \null], 'GUI' => ['Guimaras', 'Guimaras', \null], 'IFU' => ['Ifugao', 'Ifugao', \null], 'ILN' => ['Ilocos Norte', 'Ilocos Norte', \null], 'ILS' => ['Ilocos Sur', 'Ilocos Sur', \null], 'ILI' => ['Iloilo', 'Iloilo', \null], 'ISA' => ['Isabela', 'Isabela', \null], 'KAL' => ['Kalinga', 'Kalinga', \null], 'LUN' => ['La Union', 'La Union', \null], 'LAG' => ['Laguna', 'Laguna', \null], 'LAN' => ['Lanao del Norte', 'Lanao del Norte', \null], 'LAS' => ['Lanao del Sur', 'Lanao del Sur', \null], 'LEY' => ['Leyte', 'Leyte', \null], 'MAG' => ['Maguindanao', 'Maguindanao', \null], 'MAD' => ['Marinduque', 'Marinduque', \null], 'MAS' => ['Masbate', 'Masbate', \null], 'MSC' => ['Misamis Occidental', 'Misamis Occidental', \null], 'MSR' => ['Misamis Oriental', 'Misamis Oriental', \null], 'MOU' => ['Mountain Province', 'Mountain Province', \null], 'NEC' => ['Negros Occidental', 'Negros Occidental', \null], 'NER' => ['Negros Oriental', 'Negros Oriental', \null], 'NSA' => ['Northern Samar', 'Northern Samar', \null], 'NUE' => ['Nueva Ecija', 'Nueva Ecija', \null], 'NUV' => ['Nueva Vizcaya', 'Nueva Vizcaya', \null], 'MDC' => ['Mindoro Occidental', 'Mindoro Occidental', \null], 'MDR' => ['Mindoro Oriental', 'Mindoro Oriental', \null], 'PLW' => ['Palawan', 'Palawan', \null], 'PAM' => ['Pampanga', 'Pampanga', \null], 'PAN' => ['Pangasinan', 'Pangasinan', \null], 'QUE' => ['Quezon Province', 'Quezon Province', \null], 'QUI' => ['Quirino', 'Quirino', \null], 'RIZ' => ['Rizal', 'Rizal', \null], 'ROM' => ['Romblon', 'Romblon', \null], 'WSA' => ['Samar', 'Samar', \null], 'SAR' => ['Sarangani', 'Sarangani', \null], 'SIQ' => ['Siquijor', 'Siquijor', \null], 'SOR' => ['Sorsogon', 'Sorsogon', \null], 'SCO' => ['South Cotabato', 'South Cotabato', \null], 'SLE' => ['Southern Leyte', 'Southern Leyte', \null], 'SUK' => ['Sultan Kudarat', 'Sultan Kudarat', \null], 'SLU' => ['Sulu', 'Sulu', \null], 'SUN' => ['Surigao del Norte', 'Surigao del Norte', \null], 'SUR' => ['Surigao del Sur', 'Surigao del Sur', \null], 'TAR' => ['Tarlac', 'Tarlac', \null], 'TAW' => ['Tawi-Tawi', 'Tawi-Tawi', \null], 'ZMB' => ['Zambales', 'Zambales', \null], 'ZAN' => ['Zamboanga del Norte', 'Zamboanga del Norte', \null], 'ZAS' => ['Zamboanga del Sur', 'Zamboanga del Sur', \null], 'ZSI' => ['Zamboanga Sibuguey', 'Zamboanga Sibuguey', \null], '00' => ['Metro Manila', 'Metro Manila', \null]],
        // Pakistan.
        'PK' => [],
        // Poland.
        'PL' => [],
        // Puerto Rico.
        'PR' => [],
        // Portugal.
        'PT' => [],
        // Paraguay.
        'PY' => [],
        // Reunion.
        'RE' => [],
        // Romania.
        'RO' => [],
        // Serbia.
        'RS' => [],
        // Sweden.
        'SE' => [],
        // Singapore.
        'SG' => [],
        // Slovenia.
        'SI' => [],
        // Slovakia.
        'SK' => [],
        // Thailand.
        'TH' => ['TH-37' => ['Amnat Charoen', 'Amnat Charoen', 'อำนาจเจริญ'], 'TH-15' => ['Ang Thong', 'Ang Thong', 'อ่างทอง'], 'TH-14' => ['Phra Nakhon Si Ayutthaya', 'Phra Nakhon Si Ayutthaya', 'พระนครศรีอยุธยา'], 'TH-10' => ['Bangkok', 'Bangkok', 'กรุงเทพมหานคร'], 'TH-38' => ['Bueng Kan', 'Bueng Kan', 'จังหวัด บึงกาฬ'], 'TH-31' => ['Buri Ram', 'Buri Ram', 'บุรีรัมย์'], 'TH-24' => ['Chachoengsao', 'Chachoengsao', 'ฉะเชิงเทรา'], 'TH-18' => ['Chai Nat', 'Chai Nat', 'ชัยนาท'], 'TH-36' => ['Chaiyaphum', 'Chaiyaphum', 'ชัยภูมิ'], 'TH-22' => ['Chanthaburi', 'Chanthaburi', 'จันทบุรี'], 'TH-50' => ['Chiang Rai', 'Chiang Rai', 'เชียงราย'], 'TH-57' => ['Chiang Mai', 'Chiang Mai', 'เชียงใหม่'], 'TH-20' => ['Chon Buri', 'Chon Buri', 'ชลบุรี'], 'TH-86' => ['Chumpon', 'Chumpon', 'ชุมพร'], 'TH-46' => ['Kalasin', 'Kalasin', 'กาฬสินธุ์'], 'TH-62' => ['Kamphaeng Phet', 'Kamphaeng Phet', 'กำแพงเพชร'], 'TH-71' => ['Kanchanaburi', 'Kanchanaburi', 'กาญจนบุรี'], 'TH-40' => ['Khon Kaen', 'Khon Kaen', 'ขอนแก่น'], 'TH-81' => ['Krabi', 'Krabi', 'กระบี่'], 'TH-52' => ['Lampang', 'Lampang', 'ลำปาง'], 'TH-51' => ['Lamphun', 'Lamphun', 'ลำพูน'], 'TH-42' => ['Loei', 'Loei', 'เลย'], 'TH-16' => ['Lop Buri', 'Lop Buri', 'ลพบุรี'], 'TH-58' => ['Mae Hong Son', 'Mae Hong Son', 'แม่ฮ่องสอน'], 'TH-44' => ['Maha Sarakham', 'Maha Sarakham', 'มหาสารคาม'], 'TH-49' => ['Mukdahan', 'Mukdahan', 'มุกดาหาร'], 'TH-26' => ['Nakhon Nayok', 'Nakhon Nayok', 'นครนายก'], 'TH-73' => ['Nakhon Pathom', 'Nakhon Pathom', 'นครปฐม'], 'TH-48' => ['Nakhon Phanom', 'Nakhon Phanom', 'นครพนม'], 'TH-30' => ['Nakhon Ratchasima', 'Nakhon Ratchasima', 'นครราชสีมา'], 'TH-60' => ['Nakhon Sawan', 'Nakhon Sawan', 'นครสวรรค์'], 'TH-80' => ['Nakhon Si Thammarat', 'Nakhon Si Thammarat', 'นครศรีธรรมราช'], 'TH-55' => ['Nan', 'Nan', 'น่าน'], 'TH-96' => ['Narathiwat', 'Narathiwat', 'นราธิวาส'], 'TH-39' => ['Nong Bua Lam Phu', 'Nong Bua Lam Phu', 'หนองบัวลำภู'], 'TH-43' => ['Nong Khai', 'Nong Khai', 'หนองคาย'], 'TH-12' => ['Nonthaburi', 'Nonthaburi', 'นนทบุรี'], 'TH-13' => ['Pathum Thani', 'Pathum Thani', 'ปทุมธานี'], 'TH-94' => ['Pattani', 'Pattani', 'ปัตตานี'], 'TH-82' => ['Phang Nga', 'Phang Nga', 'พังงา'], 'TH-93' => ['Phattalung', 'Phattalung', 'พัทลุง'], 'TH-56' => ['Phayao', 'Phayao', 'พะเยา'], 'TH-67' => ['Phetchabun', 'Phetchabun', 'เพชรบูรณ์'], 'TH-76' => ['Phetchaburi', 'Phetchaburi', 'เพชรบุรี'], 'TH-66' => ['Phichit', 'Phichit', 'พิจิตร'], 'TH-65' => ['Phitsanulok', 'Phitsanulok', 'พิษณุโลก'], 'TH-54' => ['Phrae', 'Phrae', 'แพร่'], 'TH-83' => ['Phuket', 'Phuket', 'ภูเก็ต'], 'TH-25' => ['Prachin Buri', 'Prachin Buri', 'ปราจีนบุรี'], 'TH-77' => ['Prachuap Khiri Khan', 'Prachuap Khiri Khan', 'ประจวบคีรีขันธ์'], 'TH-85' => ['Ranong', 'Ranong', 'ระนอง'], 'TH-70' => ['Ratchaburi', 'Ratchaburi', 'ราชบุรี'], 'TH-21' => ['Rayong', 'Rayong', 'ระยอง'], 'TH-45' => ['Roi Et', 'Roi Et', 'ร้อยเอ็ด'], 'TH-27' => ['Sa Kaeo', 'Sa Kaeo', 'สระแก้ว'], 'TH-47' => ['Sakon Nakhon', 'Sakon Nakhon', 'สกลนคร'], 'TH-11' => ['Samut Prakan', 'Samut Prakan', 'สมุทรปราการ'], 'TH-74' => ['Samut Sakhon', 'Samut Sakhon', 'สมุทรสาคร'], 'TH-75' => ['Samut Songkhram', 'Samut Songkhram', 'สมุทรสงคราม'], 'TH-19' => ['Saraburi', 'Saraburi', 'สระบุรี'], 'TH-91' => ['Satun', 'Satun', 'สตูล'], 'TH-17' => ['Sing Buri', 'Sing Buri', 'สิงห์บุรี'], 'TH-33' => ['Si Sa Ket', 'Si Sa Ket', 'ศรีสะเกษ'], 'TH-90' => ['Songkhla', 'Songkhla', 'สงขลา'], 'TH-64' => ['Sukhothai', 'Sukhothai', 'สุโขทัย'], 'TH-72' => ['Suphanburi', 'Suphanburi', 'สุพรรณบุรี'], 'TH-84' => ['Surat Thani', 'Surat Thani', 'สุราษฎร์ธานี'], 'TH-32' => ['Surin', 'Surin', 'สุรินทร์'], 'TH-63' => ['Tak', 'Tak', 'ตาก'], 'TH-92' => ['Trang', 'Trang', 'ตรัง'], 'TH-23' => ['Trat', 'Trat', 'ตราด'], 'TH-34' => ['Ubon Ratchathani', 'Ubon Ratchathani', 'อุบลราชธานี'], 'TH-41' => ['Udon Thani', 'Udon Thani', 'อุดรธานี'], 'TH-61' => ['Uthai Thani', 'Uthai Thani', 'อุทัยธานี'], 'TH-53' => ['Uttaradit', 'Uttaradit', 'อุตรดิตถ์'], 'TH-95' => ['Yala', 'Yala', 'ยะลา'], 'TH-35' => ['Yasothon', 'Yasothon', 'ยโสธร']],
        // Turkey.
        'TR' => ['TR01' => ['Adana', 'Adana', \null], 'TR02' => ['Adıyaman', 'Adıyaman', \null], 'TR03' => ['Afyon', 'Afyon', \null], 'TR04' => ['Ağrı', 'Ağrı', \null], 'TR05' => ['Amasya', 'Amasya', \null], 'TR06' => ['Ankara', 'Ankara', \null], 'TR07' => ['Antalya', 'Antalya', \null], 'TR08' => ['Artvin', 'Artvin', \null], 'TR09' => ['Aydın', 'Aydın', \null], 'TR10' => ['Balıkesir', 'Balıkesir', \null], 'TR11' => ['Bilecik', 'Bilecik', \null], 'TR12' => ['Bingöl', 'Bingöl', \null], 'TR13' => ['Bitlis', 'Bitlis', \null], 'TR14' => ['Bolu', 'Bolu', \null], 'TR15' => ['Burdur', 'Burdur', \null], 'TR16' => ['Bursa', 'Bursa', \null], 'TR17' => ['Çanakkale', 'Çanakkale', \null], 'TR18' => ['Çankırı', 'Çankırı', \null], 'TR19' => ['Çorum', 'Çorum', \null], 'TR20' => ['Denizli', 'Denizli', \null], 'TR21' => ['Diyarbakır', 'Diyarbakır', \null], 'TR22' => ['Edirne', 'Edirne', \null], 'TR23' => ['Elazığ', 'Elazığ', \null], 'TR24' => ['Erzincan', 'Erzincan', \null], 'TR25' => ['Erzurum', 'Erzurum', \null], 'TR26' => ['Eskişehir', 'Eskişehir', \null], 'TR27' => ['Gaziantep', 'Gaziantep', \null], 'TR28' => ['Giresun', 'Giresun', \null], 'TR29' => ['Gümüşhane', 'Gümüşhane', \null], 'TR30' => ['Hakkari', 'Hakkari', \null], 'TR31' => ['Hatay', 'Hatay', \null], 'TR32' => ['Isparta', 'Isparta', \null], 'TR33' => ['Mersin', 'Mersin', \null], 'TR34' => ['İstanbul', 'İstanbul', \null], 'TR35' => ['İzmir', 'İzmir', \null], 'TR36' => ['Kars', 'Kars', \null], 'TR37' => ['Kastamonu', 'Kastamonu', \null], 'TR38' => ['Kayseri', 'Kayseri', \null], 'TR39' => ['Kırklareli', 'Kırklareli', \null], 'TR40' => ['Kırşehir', 'Kırşehir', \null], 'TR41' => ['Kocaeli', 'Kocaeli', \null], 'TR42' => ['Konya', 'Konya', \null], 'TR43' => ['Kütahya', 'Kütahya', \null], 'TR44' => ['Malatya', 'Malatya', \null], 'TR45' => ['Manisa', 'Manisa', \null], 'TR46' => ['Kahramanmaraş', 'Kahramanmaraş', \null], 'TR47' => ['Mardin', 'Mardin', \null], 'TR48' => ['Muğla', 'Muğla', \null], 'TR49' => ['Muş', 'Muş', \null], 'TR50' => ['Nevşehir', 'Nevşehir', \null], 'TR51' => ['Niğde', 'Niğde', \null], 'TR52' => ['Ordu', 'Ordu', \null], 'TR53' => ['Rize', 'Rize', \null], 'TR54' => ['Sakarya', 'Sakarya', \null], 'TR55' => ['Samsun', 'Samsun', \null], 'TR56' => ['Siirt', 'Siirt', \null], 'TR57' => ['Sinop', 'Sinop', \null], 'TR58' => ['Sivas', 'Sivas', \null], 'TR59' => ['Tekirdağ', 'Tekirdağ', \null], 'TR60' => ['Tokat', 'Tokat', \null], 'TR61' => ['Trabzon', 'Trabzon', \null], 'TR62' => ['Tunceli', 'Tunceli', \null], 'TR63' => ['Şanlıurfa', 'Şanlıurfa', \null], 'TR64' => ['Uşak', 'Uşak', \null], 'TR65' => ['Van', 'Van', \null], 'TR66' => ['Yozgat', 'Yozgat', \null], 'TR67' => ['Zonguldak', 'Zonguldak', \null], 'TR68' => ['Aksaray', 'Aksaray', \null], 'TR69' => ['Bayburt', 'Bayburt', \null], 'TR70' => ['Karaman', 'Karaman', \null], 'TR71' => ['Kırıkkale', 'Kırıkkale', \null], 'TR72' => ['Batman', 'Batman', \null], 'TR73' => ['Şırnak', 'Şırnak', \null], 'TR74' => ['Bartın', 'Bartın', \null], 'TR75' => ['Ardahan', 'Ardahan', \null], 'TR76' => ['Iğdır', 'Iğdır', \null], 'TR77' => ['Yalova', 'Yalova', \null], 'TR78' => ['Karabük', 'Karabük', \null], 'TR79' => ['Kilis', 'Kilis', \null], 'TR80' => ['Osmaniye', 'Osmaniye', \null], 'TR81' => ['Düzce', 'Düzce', \null]],
        // Tanzania.
        'TZ' => [],
        // Ukraine.
        'UA' => ['UA-05' => ['Vinnytsia Oblast', 'Vinnytsia Oblast', 'Вінницька область'], 'UA-07' => ['Volyn Oblast', 'Volyn Oblast', 'Волинська область'], 'UA-09' => ['Luhansk Oblast', 'Luhansk Oblast', 'Луганська область'], 'UA-12' => ['Dnipropetrovsk Oblast', 'Dnipropetrovsk Oblast', 'Дніпропетровська область'], 'UA-14' => ['Donetsk Oblast', 'Donetsk Oblast', 'Донецька область'], 'UA-18' => ['Zhytomyr Oblast', 'Zhytomyr Oblast', 'Житомирська область'], 'UA-21' => ['Zakarpattia Oblast', 'Zakarpattia Oblast', 'Закарпатська область'], 'UA-23' => ['Zaporizhzhia Oblast', 'Zaporizhzhia Oblast', 'Запорізька область'], 'UA-26' => ['Ivano-Frankivsk Oblast', 'Ivano-Frankivsk Oblast', 'Івано-Франківська область'], 'UA-30' => ['Kyiv', 'Kyiv', 'Київ'], 'UA-32' => ['Kyiv Oblast', 'Kyiv Oblast', 'Київська область'], 'UA-35' => ['Kirovohrad Oblast', 'Kirovohrad Oblast', 'Кіровоградська область'], 'UA-40' => ['Sevastopol', 'Sevastopol', 'Севастополь'], 'UA-43' => ['Crimea', 'Crimea', 'Автономна Республіка Крим'], 'UA-46' => ['Lviv Oblast', 'Lviv Oblast', 'Львівська область'], 'UA-48' => ['Mykolaiv Oblast', 'Mykolaiv Oblast', 'Миколаївська область'], 'UA-51' => ['Odesa Oblast', 'Odesa Oblast', 'Одеська область'], 'UA-53' => ['Poltava Oblast', 'Poltava Oblast', 'Полтавська область'], 'UA-56' => ['Rivne Oblast', 'Rivne Oblast', 'Рівненська область'], 'UA-59' => ['Sumy Oblast', 'Sumy Oblast', 'Сумська область'], 'UA-61' => ['Ternopil Oblast', 'Ternopil Oblast', 'Тернопільська область'], 'UA-63' => ['Kharkiv Oblast', 'Kharkiv Oblast', 'Харківська область'], 'UA-65' => ['Kherson Oblast', 'Kherson Oblast', 'Херсонська область'], 'UA-68' => ['Khmelnytskyi Oblast', 'Khmelnytskyi Oblast', 'Хмельницька область'], 'UA-71' => ['Cherkasy Oblast', 'Cherkasy Oblast', 'Черкаська область'], 'UA-74' => ['Chernihiv Oblast', 'Chernihiv Oblast', 'Чернігівська область'], 'UA-77' => ['Chernivtsi Oblast', 'Chernivtsi Oblast', 'Чернівецька область']],
        // Uganda.
        'UG' => [],
        // United States Minor Outlying Islands.
        'UM' => [],
        // United States.
        'US' => ['AL' => ['AL', 'Alabama', \null], 'AK' => ['AK', 'Alaska', \null], 'AZ' => ['AZ', 'Arizona', \null], 'AR' => ['AR', 'Arkansas', \null], 'CA' => ['CA', 'California', \null], 'CO' => ['CO', 'Colorado', \null], 'CT' => ['CT', 'Connecticut', \null], 'DE' => ['DE', 'Delaware', \null], 'DC' => ['DC', 'District of Columbia', \null], 'FL' => ['FL', 'Florida', \null], 'GA' => ['GA', 'Georgia', \null], 'HI' => ['HI', 'Hawaii', \null], 'ID' => ['ID', 'Idaho', \null], 'IL' => ['IL', 'Illinois', \null], 'IN' => ['IN', 'Indiana', \null], 'IA' => ['IA', 'Iowa', \null], 'KS' => ['KS', 'Kansas', \null], 'KY' => ['KY', 'Kentucky', \null], 'LA' => ['LA', 'Louisiana', \null], 'ME' => ['ME', 'Maine', \null], 'MD' => ['MD', 'Maryland', \null], 'MA' => ['MA', 'Massachusetts', \null], 'MI' => ['MI', 'Michigan', \null], 'MN' => ['MN', 'Minnesota', \null], 'MS' => ['MS', 'Mississippi', \null], 'MO' => ['MO', 'Missouri', \null], 'MT' => ['MT', 'Montana', \null], 'NE' => ['NE', 'Nebraska', \null], 'NV' => ['NV', 'Nevada', \null], 'NH' => ['NH', 'New Hampshire', \null], 'NJ' => ['NJ', 'New Jersey', \null], 'NM' => ['NM', 'New Mexico', \null], 'NY' => ['NY', 'New York', \null], 'NC' => ['NC', 'North Carolina', \null], 'ND' => ['ND', 'North Dakota', \null], 'OH' => ['OH', 'Ohio', \null], 'OK' => ['OK', 'Oklahoma', \null], 'OR' => ['OR', 'Oregon', \null], 'PA' => ['PA', 'Pennsylvania', \null], 'RI' => ['RI', 'Rhode Island', \null], 'SC' => ['SC', 'South Carolina', \null], 'SD' => ['SD', 'South Dakota', \null], 'TN' => ['TN', 'Tennessee', \null], 'TX' => ['TX', 'Texas', \null], 'UT' => ['UT', 'Utah', \null], 'VT' => ['VT', 'Vermont', \null], 'VA' => ['VA', 'Virginia', \null], 'WA' => ['WA', 'Washington', \null], 'WV' => ['WV', 'West Virginia', \null], 'WI' => ['WI', 'Wisconsin', \null], 'WY' => ['WY', 'Wyoming', \null], 'AA' => ['AA', 'Armed Forces (AA)', \null], 'AE' => ['AE', 'Armed Forces (AE)', \null], 'AP' => ['AP', 'Armed Forces (AP)', \null]],
        // Vietnam.
        'VN' => [],
        // Mayotte.
        'YT' => [],
        // South Africa.
        'ZA' => [],
        // Zambia.
        'ZM' => [],
    ];
}
/**
 * Class WC_Stripe_Hong_Kong_States
 *
 * Contains a list of districts (equivalent to WC states) in Hong Kong used for normalization and validation purposes.
 * This is necessary due to a bug in Apple Pay that's currently being worked on. Until
 * that bug is fixed this workaround will be necessary.
 *
 * More info in pc4etw-bY-p2.
 *
 * @since 5.8.0
 */
class WC_Stripe_Hong_Kong_States
{
    // Source: https://www.rvd.gov.hk/doc/tc/hkpr13/06.pdf
    public const STATES = ['hong kong', '港島', 'central and western', '中西區', 'kennedy town', 'shek tong tsui', 'sai ying pun', 'sheung wan', 'central', 'admiralty', 'mid-levels', 'peak', '堅尼地城', '石塘咀', '西營盤', '上環', '中環', '金鐘', '半山區', '山頂', 'wan chai', '灣仔', 'causeway bay', 'happy valley', 'tai hang', 'so kon po', "jardine's lookout", '灣仔', '銅鑼灣', '跑馬地', '大坑', '掃桿埔', '渣甸山', 'eastern', '東區', 'tin hau', 'braemar hill', 'north point', 'quarry bay', 'sai wan ho', 'shau kei wan', 'chai wan', 'siu sai wan', '天后', '寶馬山', '北角', '鰂魚涌', '西灣河', '筲箕灣', '柴灣', '小西灣', 'southern', '南區', 'pok fu lam', 'aberdeen', 'ap lei chau', 'wong chuk hang', 'shouson hill', 'repulse bay', 'chung hom kok', 'stanley', 'tai tam', 'shek o', '薄扶林', '香港仔', '鴨脷洲', '黃竹坑', '壽臣山', '淺水灣', '舂磡角', '赤柱', '大潭', '石澳', 'kowloon', '九龍', 'yau tsim mong', '油尖旺', 'tsim sha tsui', 'yau ma tei', 'west kowloon reclamation', "king's park, mong kok", 'tai kok tsui', '尖沙咀', '油麻地', '西九龍填海區', '京士柏', '旺角', '大角咀', 'sham shui po', '深水埗', 'mei foo', 'lai chi kok', 'cheung sha wan', 'shek kip mei', 'yau yat tsuen', 'tai wo ping', 'stonecutters island', '美孚', '荔枝角', '長沙灣', '石硤尾', '又一村', '大窩坪', '昂船洲', 'kowloon city', '九龍城', 'hung hom', 'to kwa wan', 'ma tau kok', 'ma tau wai', 'kai tak', 'ho man tin', 'kowloon tong', 'beacon hill', '紅磡', '土瓜灣', '馬頭角', '馬頭圍', '啟德', '何文田', '九龍塘', '筆架山', 'wong tai sin', '黃大仙', 'san po kong', 'tung tau', 'wang tau hom', 'lok fu', 'diamond hill', 'tsz wan shan', 'ngau chi wan', '新蒲崗', '東頭', '橫頭磡', '樂富', '鑽石山', '慈雲山', '牛池灣', 'kwun tong', '觀塘', 'ping shek', 'kowloon bay', 'ngau tau kok', 'jordan valley', 'kwun tong', 'sau mau ping', 'lam tin', 'yau tong', 'lei yue mun', '坪石', '九龍灣', '牛頭角', '佐敦谷', '觀塘', '秀茂坪', '藍田', '油塘', '鯉魚門', 'new territories', '新界', 'kwai tsing', '葵青', 'kwai chung', 'tsing yi', '葵涌', '青衣', 'tsuen wan', '荃灣', 'lei muk shue', 'ting kau', 'sham tseng', 'tsing lung tau', 'ma wan', 'sunny bay', '梨木樹', '汀九', '深井', '青龍頭', '馬灣', '欣澳', 'tuen mun', '屯門', 'tai lam chung', 'so kwun wat', 'tuen mun', 'lam tei', '大欖涌', '掃管笏', '屯門', '藍地', 'yuen long', '元朗', 'hung shui kiu', 'ha tsuen', 'lau fau shan', 'tin shui wai', 'yuen long', 'san tin', 'lok ma chau', 'kam tin', 'shek kong', 'pat heung', '洪水橋', '廈村', '流浮山', '天水圍', '元朗', '新田', '落馬洲', '錦田', '石崗', '八鄉', 'north', '北區', 'fanling', 'luen wo hui', 'sheung shui', 'shek wu hui', 'sha tau kok', 'luk keng', 'wu kau tang', '粉嶺', '聯和墟', '上水', '石湖墟', '沙頭角', '鹿頸', '烏蛟騰', 'tai po', '大埔', 'tai po market', 'tai po kau', 'tai mei tuk', 'shuen wan', 'cheung muk tau', 'kei ling ha', '大埔墟', '大埔', '大埔滘', '大尾篤', '船灣', '樟木頭', '企嶺下', 'sha tin', '沙田', 'tai wai', 'fo tan', 'ma liu shui', 'wu kai sha', 'ma on shan', '大圍', '火炭', '馬料水', '烏溪沙', '馬鞍山', 'sai kung', '西貢', 'clear water bay', 'tai mong tsai', 'tseung kwan o', 'hang hau', 'tiu keng leng', 'ma yau tong', '清水灣', '大網仔', '將軍澳', '坑口', '調景嶺', '馬游塘', 'islands', '離島', 'cheung chau', 'peng chau', 'lantau island (including tung chung)', 'lamma island', '長洲', '坪洲', '大嶼山(包括東涌)', '南丫島'];
    /**
     * Checks if the given state is a valid region (equivalent to WC state) in Hong Kong.
     *
     * @param string $state  The state to be evaluated.
     * @return bool  True if the provided state is valid, false otherwise.
     */
    public static function is_valid_state($state)
    {
    }
}
/**
 * Class WC_Stripe_Hook_Categories
 *
 * @since 10.9.0
 */
class WC_Stripe_Hook_Categories
{
    /**
     * Subscriptions hook category.
     *
     * @since 10.9.0
     * @var string
     */
    public const SUBSCRIPTIONS = 'subscriptions';
}
/**
 * Class WC_Stripe_Intent_Status
 *
 * For a documentation on the possible intent statuses, please refer to the following link:
 * https://docs.stripe.com/api/payment_intents/object#payment_intent_object-status
 */
class WC_Stripe_Intent_Status
{
    /**
     * Payment intent status that indicates the payment was canceled.
     *
     * @var string
     */
    public const CANCELED = 'canceled';
    /**
     * Payment intent status that indicates the payment is processing.
     *
     * @var string
     */
    public const PROCESSING = 'processing';
    /**
     * Payment intent status that indicates the payment requires confirmation.
     *
     * @var string
     */
    public const REQUIRES_CONFIRMATION = 'requires_confirmation';
    /**
     * Payment intent status that indicates the payment requires action.
     *
     * @var string
     */
    public const REQUIRES_ACTION = 'requires_action';
    /**
     * Payment intent status that indicates the payment requires capture.
     *
     * @var string
     */
    public const REQUIRES_CAPTURE = 'requires_capture';
    /**
     * Payment intent status that indicates the payment requires payment method.
     *
     * @var string
     */
    public const REQUIRES_PAYMENT_METHOD = 'requires_payment_method';
    /**
     * Payment intent status that indicates the payment was successful.
     *
     * @var string
     */
    public const SUCCEEDED = 'succeeded';
    /**
     * Stripe intents that are treated as successfully created.
     *
     * @var array
     */
    public const SUCCESSFUL_STATUSES = [self::SUCCEEDED, self::REQUIRES_CAPTURE, self::PROCESSING];
    /**
     * Grouping of statuses that require confirmation or action.
     */
    public const REQUIRES_CONFIRMATION_OR_ACTION_STATUSES = [self::REQUIRES_CONFIRMATION, self::REQUIRES_ACTION];
    /**
     * Grouping of statuses that are considered successful when setting up intents.
     */
    public const SUCCESSFUL_SETUP_INTENT_STATUSES = [self::SUCCEEDED, self::PROCESSING, self::REQUIRES_ACTION, self::REQUIRES_CONFIRMATION];
}
/**
 * Class WC_Stripe_Payment_Methods
 */
class WC_Stripe_Payment_Methods
{
    // Standard payment method constants
    public const ACH = 'us_bank_account';
    public const ACSS_DEBIT = 'acss_debit';
    public const AFFIRM = 'affirm';
    public const AFTERPAY_CLEARPAY = 'afterpay_clearpay';
    public const ALIPAY = 'alipay';
    public const BACS_DEBIT = 'bacs_debit';
    public const BECS_DEBIT = 'au_becs_debit';
    public const BANCONTACT = 'bancontact';
    public const BLIK = 'blik';
    public const BOLETO = 'boleto';
    public const CARD = 'card';
    public const CARD_PRESENT = 'card_present';
    public const CASHAPP_PAY = 'cashapp';
    public const EPS = 'eps';
    public const GIROPAY = 'giropay';
    public const IDEAL = 'ideal';
    public const KLARNA = 'klarna';
    public const MULTIBANCO = 'multibanco';
    public const OXXO = 'oxxo';
    public const P24 = 'p24';
    public const SEPA = 'sepa';
    public const SEPA_DEBIT = 'sepa_debit';
    public const SOFORT = 'sofort';
    public const WECHAT_PAY = 'wechat_pay';
    public const OC = 'card';
    // This is a special case for the Optimized Checkout
    public const LEGACY_SEPA = 'stripe_sepa';
    // Sepa method identifier for the legacy checkout (now removed)
    // Express method constants
    public const AMAZON_PAY = 'amazon_pay';
    public const GOOGLE_PAY = 'google_pay';
    public const APPLE_PAY = 'apple_pay';
    public const LINK = 'link';
    // Payment method labels
    public const BACS_DEBIT_LABEL = 'Bacs Direct Debit';
    public const GOOGLE_PAY_LABEL = 'Google Pay';
    public const APPLE_PAY_LABEL = 'Apple Pay';
    public const AMAZON_PAY_LABEL = 'Amazon Pay';
    public const LINK_LABEL = 'Link';
    public const PAYMENT_REQUEST_LABEL = 'Payment Request';
    /**
     * Payment methods that are considered as express payment methods.
     *
     * @var array
     */
    public const EXPRESS_PAYMENT_METHODS = [self::AMAZON_PAY, self::GOOGLE_PAY, self::APPLE_PAY, self::LINK];
    /**
     * Payment methods that are considered as voucher payment methods.
     *
     * @var array
     */
    public const VOUCHER_PAYMENT_METHODS = [self::BOLETO, self::MULTIBANCO, self::OXXO];
    /**
     * Payment methods that are considered as BNPL (Buy Now, Pay Later) payment methods.
     *
     * @var array
     */
    public const BNPL_PAYMENT_METHODS = [self::AFFIRM, self::AFTERPAY_CLEARPAY, self::KLARNA];
    /**
     * Payment methods that are considered as wallet payment methods.
     *
     * @var array
     */
    public const WALLET_PAYMENT_METHODS = [self::CASHAPP_PAY, self::WECHAT_PAY];
    /**
     * Payment method types that Stripe accepts Level 3 data for.
     * Level 3 is card-network only.
     *
     * @var array
     */
    public const LEVEL3_SUPPORTED_PAYMENT_METHODS = [self::CARD, self::CARD_PRESENT];
    /**
     * List of express payment methods labels. Amazon Pay and Link are not included,
     * as they have their own payment method classes.
     */
    public const EXPRESS_METHODS_LABELS = ['google_pay' => self::GOOGLE_PAY_LABEL, 'apple_pay' => self::APPLE_PAY_LABEL];
    /**
     * Payment method types that can not be excluded via Stripe's 'excludedPaymentMethodTypes' parameter.
     * These values are not supported in the 'excludedPaymentMethodTypes' parameter and causes an error when trying to render the Payment Element excluding them.
     *
     * The list is inferred by comparing the currently unsupported types of the accepted arguments to excluded_payment_method_types (https://docs.stripe.com/api/payment_intents/update#update_payment_intent-excluded_payment_method_types)
     * against the possible elements that are present in the Payment Method Configuration object (https://docs.stripe.com/api/payment_method_configurations/object).
     * see https://github.com/woocommerce/woocommerce-gateway-stripe/pull/4922#discussion_r2770707821
     *
     * @var array
     */
    public const NON_EXCLUDABLE_PAYMENT_METHOD_TYPES = [self::APPLE_PAY, self::GOOGLE_PAY, self::LINK, 'cartes_bancaires', 'jcb'];
}
/**
 * Known issues/inconsistencies:
 *    1. WC provides a dropdown list of states, but there's no state field in Chrome for the following countries:
 *        AO (Angola), BD (Bangladesh), BG (Bulgaria), BJ (Benin), BO (Bolivia), DO (Dominican Republic),
 *        DZ (Algeria), GH (Ghana), GT (Guatemala), HU (Hungary), KE (Kenya), LA (Laos),
 *        LR (Liberia), LT (Lithuania), MD (Moldova), NA (Namibia), NP (Nepal), PK (Pakistan),
 *        PY (Paraguay), RO (Romania), TZ (Tanzania), UG (Uganda), UM (United States Minor Outlying Islands),
 *        ZA (South Africa), ZM (Zambia).
 *    2. Chrome does not provide a dropdown list of states for 161 countries in total, out of the 249 countries WC supports,
 *        so the countries in which the state field is required by WC, and not provided by the browser are not supported.
 *    3. Chrome does not provide a zip/postal code field for 60 out of the 249 countries WC supports. Only for 5 countries
 *        the zip code field is missing while the state field is present: BS (Bahamas), PA (Panama), SC (Seychelles),
 *        SR (Suriname), TV (Tuvalu). Several other countries provide an optional zip code field.
 *    4. WC expects it, but there's no city field in the Payment Request API for the following:
 *        JP (Japan), MO (Macao), TN (Tunisia), KY (Cayman Islands), GI (Gibraltar).
 *    5. The following countries are not listed in WC:
 *        AC (Ascension Island), IC (Canary Islands), EA (Ceuta & Melilla), CP (Clipperton Island), DG (Diego Garcia),
 *        TA (Tristan da Cunha), XK (Kosovo).
 *
 * @since 5.1.0
 *
 * @deprecated 10.3.0 Moved to includes/constants/class-wc-stripe-express-checkout-button-states.php
 */
class WC_Stripe_Payment_Request_Button_States
{
    /**
     * A list of states which is compatible with Chromium based browsers for the Payment Request API.
     * If the input comes from Chrome, we will always match with `code`, but if the request comes from
     * Safari or other browsers which don't provide a dropdown list, we can match one of the following:
     *    - [0] = code (string)
     *    - [1] = name (string)
     *    - [2] = localName (string|null)
     */
    // phpcs:disable
    const STATES = \WC_Stripe_Express_Checkout_Button_States::STATES;
    // phpcs:enable
}
/**
 * Class Allowed_Payment_Request_Button_Types_Update
 *
 * Remaps deprecated payment request button types to fallback values.
 *
 * @since 5.6.0
 */
class Allowed_Payment_Request_Button_Types_Update
{
    /**
     * Only execute the migration if not applied yet.
     *
     * @return void
     */
    public function maybe_migrate()
    {
    }
    /**
     * Maps deprecated button types to fallback values.
     *
     * @param mixed $button_type "payment_request_button_type" value.
     * @param mixed $branded_type "payment_request_button_branded_type" value.
     *
     * @return mixed
     */
    private function map_button_type($button_type, $branded_type)
    {
    }
    /**
     * Returns the main Stripe payment gateways.
     *
     * @return WC_Stripe_Payment_Gateway
     */
    public function get_gateway()
    {
    }
}
/**
 * Class Migrate_Payment_Request_Data_To_Express_Checkout_Data
 *
 * Migrates Payment Request settings data to Express Checkout settings data.
 *
 * @since 9.1.0
 */
class Migrate_Payment_Request_Data_To_Express_Checkout_Data
{
    /**
     * Only execute the migration if not applied yet.
     *
     * @return void
     */
    public function maybe_migrate()
    {
    }
    /**
     * Copies over Payment Request settings data to Express Checkout settings data.
     *
     * @return void
     */
    private function migrate()
    {
    }
    /**
     * Returns the main Stripe payment gateways.
     *
     * @return WC_Stripe_Payment_Gateway
     */
    public function get_gateway()
    {
    }
}
/**
 * Class Sepa_Tokens_For_Other_Methods_Settings_Update
 *
 * Remaps the deprecated setting key for "SEPA tokens for other methods" to the newly, split version.
 *
 * @since 10.0.0
 */
class Sepa_Tokens_For_Other_Methods_Settings_Update
{
    /**
     * Only execute the migration if not applied yet.
     *
     * @return void
     */
    public function maybe_migrate()
    {
    }
    /**
     * Returns the main Stripe payment gateways.
     *
     * @return WC_Stripe_Payment_Gateway
     */
    public function get_gateway()
    {
    }
}
/**
 * Class WC_Stripe_Express_Checkout_Add_Change_Payment_Method_Location_Update
 *
 * Opt merchants who already had every previous express-checkout button
 * location enabled into the new `change_payment_method` location, so the
 * upgrade preserves the "everything on" state instead of silently leaving
 * the new location off.
 *
 * Runs once. Merchants who customized their location set (i.e. didn't have
 * all three of product/cart/checkout enabled) are left alone.
 *
 * @since 10.8.0
 */
class WC_Stripe_Express_Checkout_Add_Change_Payment_Method_Location_Update
{
    /**
     * Option flag used to ensure the migration only runs once. Reading and
     * writing a top-level option (rather than a gateway sub-option) keeps the
     * gate independent of the settings array we mutate.
     */
    private const MIGRATION_FLAG_OPTION = 'wc_stripe_express_checkout_cpm_location_migrated';
    /**
     * The legacy location set this migration assumes the merchant had fully
     * enabled before the new location existed.
     *
     * @var string[]
     */
    private const LEGACY_LOCATIONS = ['product', 'cart', 'checkout'];
    /**
     * The location key being added by this migration.
     *
     * @var string
     */
    private const NEW_LOCATION = 'change_payment_method';
    /**
     * Append the new `change_payment_method` location when the merchant had
     * the full pre-PR default set enabled. No-op otherwise.
     *
     * @return void
     */
    public function maybe_migrate()
    {
    }
    /**
     * Whether WooCommerce Subscriptions is installed and active. Protected so
     * tests can swap the result without loading or unloading the Subscriptions
     * plugin at runtime.
     *
     * @return bool
     */
    protected function is_subscriptions_enabled()
    {
    }
}
/**
 * Class WC_Stripe_Migrate_Link_Button_Locations
 *
 * Before Link had a dedicated `link_button_locations` setting, it inherited its
 * locations from the payment request (Apple Pay / Google Pay) button. This
 * migration copies those locations into the new setting on upgrade so existing
 * merchants keep their configured Link placement.
 *
 * @since 10.9.0
 */
class WC_Stripe_Migrate_Link_Button_Locations
{
    /**
     * Only execute the migration if not applied yet.
     *
     * @return void
     */
    public function maybe_migrate()
    {
    }
}
/**
 * Class WC_Stripe_OCS_AP_Default_On_Update
 *
 * Handle x.y.z->10.8 migration that defaults Optimized Checkout (OC) and
 * Adaptive Pricing (AP) on for back-book merchants, decides per-merchant
 * banner visibility.
 *
 * @since 10.8.0
 */
class WC_Stripe_OCS_AP_Default_On_Update
{
    /**
     * Option flag used to ensure the migration only runs once.
     */
    private const MIGRATION_FLAG_OPTION = 'wc_stripe_ocs_ap_default_on_migration_ran';
    /**
     * Server-side visibility flags consumed by the settings-controller gate.
     */
    private const SHOW_OCS_AP_BANNER_OPTION = 'wc_stripe_show_ocs_ap_banner';
    private const SHOW_AP_ONLY_BANNER_OPTION = 'wc_stripe_show_ap_only_banner';
    private const SHOW_OCS_ONLY_BANNER_OPTION = 'wc_stripe_show_ocs_only_banner';
    /**
     * Epoch time for 2026-05-14 09:30 UTC.
     * Stripe accounts created on or after this timestamp are treated as
     * creating their account after 10.7 was released.
     */
    private const OC_AP_DEFAULT_ON_RELEASE_TS = 1778751000;
    /**
     * Entry point invoked by WC_Stripe_Update_Manager.
     *
     * @param string|false $previous_version The plugin version recorded before this upgrade, or false on a new install.
     *
     * @return void
     */
    public function maybe_migrate($previous_version = \false): void
    {
    }
    /**
     * Heuristic for "the merchant likely received the 10.7 frontbook OC+AP
     * default-on at OAuth time". Both conditions must hold:
     *
     * 1. They had 10.7 installed at some point before this 10.8 upgrade
     * 2. Their Stripe account was created on/after the 10.7 release date
     *    (so they most plausibly signed up via 10.7+).
     *
     * Returns false on missing account data to keep the conservative path
     * "show the banner if otherwise eligible."
     *
     * @param string $previous_version
     *
     * @return bool
     */
    protected function is_likely_frontbook_10_7(string $previous_version): bool
    {
    }
    /**
     * Returns the reason Adaptive Pricing is unavailable for the connected account,
     * or null when AP is available. Wraps the shared helper so it can be overridden
     * in tests.
     *
     * @return string|null
     */
    protected function get_ap_unavailable_reason(): ?string
    {
    }
    /**
     * Resolves the connected Stripe account's `created` Unix timestamp.
     * Note: this is a best effort attempt. If it's a standard account, API response
     * will not include `created` and this will return null. If it's a connected account, it should be present.
     *
     * @return int|null
     */
    protected function get_account_created_ts(): ?int
    {
    }
    /**
     * Returns the cached Stripe account data, or an empty array when the account
     * cannot be read (invalid/absent credentials). Wrapped so it can be overridden
     * in tests.
     *
     * @return array<string, mixed>
     */
    protected function get_account_data(): array
    {
    }
}
/**
 * Restore Adaptive Pricing for stores affected by the amount-mismatch safety disable.
 *
 * @since 10.9.0
 */
class WC_Stripe_Restore_Adaptive_Pricing_After_Amount_Mismatch_Update
{
    /**
     * Option flag used to ensure the migration only runs once.
     */
    private const MIGRATION_FLAG_OPTION = 'wc_stripe_restored_adaptive_pricing_after_amount_mismatch';
    /**
     * This marker is the only reliable distinction between an automatic safety disable and a merchant's setting choice.
     */
    private const AMOUNT_MISMATCH_OPTION = 'wc_stripe_adaptive_pricing_session_amount_mismatch_detected';
    /**
     * Restore Adaptive Pricing only when the safety marker proves it was not disabled manually.
     *
     * @param string|false $previous_version The plugin version recorded before this upgrade, or false on a new install.
     * @return void
     */
    public function maybe_migrate($previous_version = \false): void
    {
    }
    /**
     * Marks the Adaptive Pricing amount mismatch migration as complete.
     *
     * @return void
     */
    public static function mark_migration_complete(): void
    {
    }
    /**
     * Checks if the Adaptive Pricing amount mismatch migration has been completed.
     *
     * @return bool True if the amount mismatch migration has been completed, false otherwise.
     */
    public static function is_migration_complete(): bool
    {
    }
    /**
     * Checks if the Adaptive Pricing amount mismatch migration is needed.
     *
     * @return bool True if the amount mismatch migration is needed, false otherwise.
     */
    public static function is_migration_needed(): bool
    {
    }
    /**
     * Deletes the amount mismatch option if it exists.
     *
     * @return bool True if the option was deleted, false otherwise.
     */
    public static function delete_amount_mismatch_option(): bool
    {
    }
}
/**
 * Handles repairing the Subscriptions using SEPA's Legacy payment method.
 *
 * This class extends the WCS_Background_Repairer for scheduling and running the individual migration actions.
 */
class WC_Stripe_Subscriptions_Repairer_Legacy_SEPA_Tokens extends \WCS_Background_Repairer
{
    public const LEGACY_SEPA_SUBSCRIPTIONS_COUNT = 'woocommerce_stripe_subscriptions_with_legacy_sepa';
    /**
     * The transient key used to store the progress of the repair.
     *
     * @var string
     */
    private $action_progress_transient = 'wc_stripe_legacy_sepa_tokens_repair_progress';
    /**
     * The transient key used to store whether we should display the notice to the user.
     *
     * @var string
     */
    private $display_notice_transient = 'wc_stripe_legacy_sepa_tokens_repair_notice';
    /**
     * The scheduled hook.
     *
     * @var string
     */
    protected $scheduled_hook;
    /**
     * The repair hook.
     *
     * @var string
     */
    protected $repair_hook;
    /**
     * Constructor
     *
     * @param WC_Logger_Interface $logger The WC_Logger instance.
     */
    public function __construct(\WC_Logger_Interface $logger)
    {
    }
    /**
     * Conditionally schedules the repair of subscriptions using the Legacy SEPA payment method.
     *
     * Don't run if either of these conditions are met:
     *    - The WooCommerce Subscriptions extension isn't active.
     *    - The Legacy checkout experience is enabled (aka UPE is disabled).
     *
     * @return void
     */
    public function maybe_update()
    {
    }
    /**
     * Triggers the conditional payment method update for the given subscription.
     *
     * This is the callback for the repair hook.
     *
     * @param int $subscription_id ID of the subscription to be processed.
     *
     * @return void
     */
    public function repair_item($subscription_id)
    {
    }
    /**
     * Schedules an individual action to migrate a subscription.
     *
     * Overrides the parent class function to make two changes:
     * 1. Don't schedule an action if one already exists.
     * 2. Schedules the migration to happen in two minutes instead of in one hour.
     * 3. Delete the transient which stores the progress of the repair.
     *
     * @param int $item The ID of the subscription to migrate.
     *
     * @return void
     */
    protected function update_item($item)
    {
    }
    /**
     * Gets the batch of subscriptions using the Legacy SEPA payment method to be updated.
     *
     * @param int $page The page of results to fetch.
     *
     * @return int[] The IDs of the subscriptions to migrate.
     */
    protected function get_items_to_repair($page)
    {
    }
    /**
     * Updates subscriptions which need updating prior to it renewing.
     *
     * This function is a backstop to prevent subscription renewals from failing if we haven't ran the repair yet.
     *
     * @param int $subscription_id The subscription ID which is about to renew.
     *
     * @return void
     */
    public function maybe_migrate_before_renewal($subscription_id)
    {
    }
    /**
     * Displays an admin notice to inform the user that the repair is in progress.
     *
     * This notice is displayed on the Subscriptions list table page and includes information about the progress of the repair.
     * What % of the repair is complete, or when the next scheduled action is expected to run.
     *
     * @return void
     */
    public function display_admin_notice()
    {
    }
    /**
     * Checks if the current screen is the subscriptions list table.
     *
     * @return bool True if the current screen is the subscriptions list table, false otherwise.
     */
    private function is_admin_subscriptions_list_table_screen()
    {
    }
    /**
     * Fetches the number of pending and completed migration scheduled actions.
     *
     * @return array|bool The counts of pending and completed actions. False if the Action Scheduler store is not available.
     */
    private function get_scheduled_action_counts()
    {
    }
    /**
     * Registers the repair tool for the Legacy SEPA token migration.
     *
     * @param array $tools The existing repair tools.
     *
     * @return array The updated repair tools.
     */
    public function add_debug_tool($tools)
    {
    }
    /**
     * Checks if there are subscriptions using the Legacy SEPA payment method.
     *
     * @return bool True if there are subscriptions using the Legacy SEPA payment method, false otherwise.
     */
    private function has_legacy_sepa_subscriptions()
    {
    }
    /**
     * Restarts the legacy token update process.
     *
     * @return void
     */
    public function restart_update()
    {
    }
}
/**
 * Class WC_Stripe_BNPL_Promotion_Note
 */
class WC_Stripe_BNPL_Promotion_Note
{
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    public const NOTE_NAME = 'wc-stripe-bnpl-promotion-note';
    /**
     * Link to learn more about BNPLs.
     */
    public const LEARN_MORE_LINK = 'https://woocommerce.com/document/stripe/setup-and-configuration/additional-payment-methods/';
    /**
     * Get the note.
     *
     * @return \Automattic\WooCommerce\Admin\Notes\Note
     */
    public static function get_note()
    {
    }
    /**
     * Init BNPL promotion notification
     *
     * @param WC_Stripe_Payment_Gateway $gateway
     *
     * @return void
     * @throws \Automattic\WooCommerce\Admin\Notes\NotesUnavailableException
     */
    public static function init(\WC_Stripe_Payment_Gateway $gateway)
    {
    }
}
/**
 * Class WC_Stripe_OC_Promotion_Note
 */
final class WC_Stripe_OC_Promotion_Note
{
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    public const NOTE_NAME = 'wc-stripe-oc-promotion-note';
    /**
     * Link to activate OC in store.
     */
    private const ACTIVATE_NOW_LINK = '?page=wc-settings&tab=checkout&section=stripe&panel=settings&highlight=enable-optimized-checkout';
    /**
     * Get the note.
     *
     * @return \Automattic\WooCommerce\Admin\Notes\Note
     */
    public static function get_note()
    {
    }
    /**
     * Init OC promotion notification
     *
     * @param WC_Stripe_Payment_Gateway $gateway
     *
     * @return void
     * @throws \Automattic\WooCommerce\Admin\Notes\NotesUnavailableException
     */
    public static function init(\WC_Stripe_Payment_Gateway $gateway)
    {
    }
    /**
     * Should this note exist?
     *
     * @inheritDoc
     *
     * @return bool
     */
    public static function is_applicable()
    {
    }
}
/**
 * Class WC_Stripe_UPE_StripeLink_Note
 */
class WC_Stripe_UPE_StripeLink_Note
{
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    public const NOTE_NAME = 'wc-stripe-upe-stripelink-note';
    /**
     * Link to Stripe Link documentation.
     */
    public const NOTE_DOCUMENTATION_URL = 'https://woocommerce.com/document/stripe/setup-and-configuration/express-checkouts/';
    /**
     * Get the note.
     *
     * @return \Automattic\WooCommerce\Admin\Notes\Note
     */
    public static function get_note()
    {
    }
    /**
     * Init Link payment method notification
     *
     * @param WC_Stripe_Payment_Gateway $gateway
     *
     * @return void
     * @throws \Automattic\WooCommerce\Admin\Notes\NotesUnavailableException
     */
    public static function init(\WC_Stripe_Payment_Gateway $gateway)
    {
    }
}
/**
 * Class WC_Stripe_Whats_New_Note
 */
final class WC_Stripe_Whats_New_Note
{
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;
    /**
     * Name of the note for use in the database.
     */
    public const NOTE_NAME = 'wc-stripe-whats-new-note';
    /**
     * Version a merchant was last shown the note for; compared against
     * WC_STRIPE_VERSION so the note fires for upgraders only.
     */
    public const LAST_SEEN_VERSION_OPTION = 'wc_stripe_whats_new_note_version';
    /**
     * Get the note.
     *
     * @return \Automattic\WooCommerce\Admin\Notes\Note
     */
    public static function get_note()
    {
    }
    /**
     * Show the note to merchants who just upgraded.
     *
     * @return void
     * @throws \Automattic\WooCommerce\Admin\Notes\NotesUnavailableException
     */
    public static function init()
    {
    }
    /**
     * Whether the merchant has upgraded past the version they last saw the note for.
     *
     * @return bool
     */
    public static function is_upgrade_pending(): bool
    {
    }
    /**
     * Seed the version baseline from the plugin's upgrade routine.
     *
     * Fresh installs bank the current version so the note never fires. Upgraders
     * bank the version they came from, but only when no baseline exists yet, so
     * we never lower a value init() already advanced (both run on the same
     * `admin_init` pass in an undefined order).
     *
     * @param string|false $previous_version Version before this upgrade, or false on a fresh install.
     * @return void
     */
    public static function record_install_version($previous_version): void
    {
    }
    /**
     * Public changelog URL for the note action.
     *
     * An external (non-admin) URL is required for the Inbox to open the action
     * in a new tab: it routes any link under the admin URL to the same tab and
     * only `window.open()`s URLs outside it.
     *
     * @return string
     */
    private static function get_changelog_url(): string
    {
    }
}
/**
 * WC_Stripe_Express_Checkout_Ajax_Handler class.
 */
class WC_Stripe_Express_Checkout_Ajax_Handler
{
    /**
     * WC_Stripe_Express_Checkout_Helper instance.
     *
     * @var WC_Stripe_Express_Checkout_Helper
     */
    private $express_checkout_helper;
    /**
     * Constructor.
     *
     * @param WC_Stripe_Express_Checkout_Helper $express_checkout_helper Express checkout helper.
     */
    public function __construct(\WC_Stripe_Express_Checkout_Helper $express_checkout_helper)
    {
    }
    /**
     * Initialize hooks.
     *
     * @return void
     */
    public function init()
    {
    }
    /**
     * Normalizes redacted Google Pay / Apple Pay address data on express checkout
     * Store API requests so WooCommerce's validation doesn't reject it.
     *
     * Wallets send a long-form state and (on shipping-address change) a truncated
     * postcode. We normalize the state, and on the `update-customer` route also
     * normalize the postcode and relax its validation so shipping zones resolve.
     * `select-shipping-rate` needs neither: the location is already set by then.
     *
     * @param mixed                                  $response Returned unchanged.
     * @param \WP_REST_Server                        $server   Server instance.
     * @param \WP_REST_Request<array<string, mixed>> $request  The current request.
     *
     * @return mixed
     */
    public function tokenized_cart_store_api_address_normalization($response, $server, $request)
    {
    }
    /**
     * Lets redacted UK/CA wallet postcodes bypass postcode validation on the Store API.
     *
     * They're padded with `0` (not `*`) because WC_Validation::is_postcode() rejects
     * non-alphanumerics before this filter runs.
     *
     * @param bool   $valid    Whether the postcode is valid.
     * @param string $postcode The postcode in question.
     * @param string $country  The country for the postcode.
     *
     * @return bool
     */
    public function maybe_skip_postcode_validation($valid, $postcode, $country)
    {
    }
    /**
     * Get cart details.
     *
     * @deprecated 10.9.0 Cart details are now fetched via Store API.
     *
     * @return void
     */
    public function ajax_get_cart_details()
    {
    }
    /**
     * Adds the current product to the cart. Used on product detail page.
     *
     * @return array $data Results of adding the product to the cart.
     */
    public function ajax_add_to_cart()
    {
    }
    /**
     * Clears cart.
     *
     * @return void
     */
    public function ajax_clear_cart()
    {
    }
    /**
     * Normalizes address fields in WooCommerce supported format.
     *
     * @return void
     */
    public function ajax_normalize_address()
    {
    }
    /**
     * Get shipping options.
     *
     * @deprecated 10.9.0 Shipping options are now fetched via Store API.
     *
     * @see WC_Cart::get_shipping_packages().
     * @see WC_Shipping::calculate_shipping().
     * @see WC_Shipping::get_packages().
     *
     * @return void
     */
    public function ajax_get_shipping_options()
    {
    }
    /**
     * Update shipping method.
     *
     * @deprecated 10.9.0 Shipping method updates now use Store API.
     *
     * @return void
     */
    public function ajax_update_shipping_method()
    {
    }
    /**
     * Gets the selected product data.
     *
     * @return  array $data The selected product data.
     */
    public function ajax_get_selected_product_data()
    {
    }
    /**
     * Determine whether a product may be exposed through a storefront request.
     *
     * WC_Product::is_purchasable() permits unpublished products to users who can edit
     * them. This endpoint is shared with storefront visitors, so it requires a published
     * product explicitly while retaining WooCommerce's normal catalog-hidden behavior.
     *
     * @param WC_Product|false|null $product    Product object, or false/null when it does not exist.
     * @param int                   $product_id Top-level product ID used for password protection.
     * @return bool
     */
    private function is_product_available_for_purchase($product, $product_id)
    {
    }
    /**
     * Return one response for missing and unavailable products so IDs cannot be enumerated.
     *
     * @return string
     */
    private function get_product_unavailable_message()
    {
    }
    /**
     * Return the latest WooCommerce validation error for a publicly purchasable product.
     *
     * Product eligibility is checked before cart validation, so WooCommerce's useful stock
     * and extension feedback can be preserved here without exposing non-public product data.
     *
     * @param int $existing_error_count Number of error notices before validation started.
     * @return string
     */
    private function get_cart_error_message($existing_error_count)
    {
    }
    /**
     * Deprecated no-op for the former express checkout error-logging endpoint.
     *
     * @deprecated 10.9.0 No longer called by the plugin; the endpoint no longer logs anything.
     *
     * @return void
     */
    public function ajax_log_errors()
    {
    }
    /**
     * Modify country locale for express checkout.
     * Countries that don't have state fields, make the state field optional.
     * Make postcode optional for specific countries during express checkout.
     *
     * @param array $locale The country locale.
     * @return array Modified country locale.
     */
    public function modify_country_locale_for_express_checkout($locale)
    {
    }
}
class WC_Stripe_Express_Checkout_Custom_Fields
{
    /**
     * Express checkout helper, used to gate processing to express checkout requests.
     *
     * @var WC_Stripe_Express_Checkout_Helper
     */
    private $express_checkout_helper;
    /**
     * Constructor.
     *
     * @param WC_Stripe_Express_Checkout_Helper|null $express_checkout_helper Helper; created on demand when omitted.
     */
    public function __construct($express_checkout_helper = \null)
    {
    }
    /**
     * Perform necessary setup steps for supporting custom checkout fields in express checkout,
     * including registering space for the data in the Store API,
     * and hooking into the action that will let us process the data and update the order.
     *
     * @return void
     */
    public function init()
    {
    }
    /**
     * Allow third-party to validate and add custom checkout data to
     * express checkout orders for stores using classic, shortcode-based checkout.
     *
     * @param WC_Order $order The order to add custom checkout data to.
     * @param WP_REST_Request $request The request object.
     * @return void
     */
    public function process_custom_checkout_data($order, $request)
    {
    }
    /**
     * Whether the request carries the express checkout custom-data payload.
     *
     * The client attaches the payload (even when empty) whenever a classic
     * checkout form is present on the page, so its absence identifies flows
     * started on pages where custom fields are not rendered.
     *
     * @param WP_REST_Request $request The request object.
     * @return bool
     */
    private function request_has_custom_checkout_data($request)
    {
    }
    /**
     * Get custom checkout data from the request object.
     *
     * To support custom fields in express checkout and classic checkout,
     * we pass custom data as extended data, i.e. under extensions.
     *
     * @param WP_REST_Request $request The request object.
     * @return array Custom checkout data.
     */
    private function get_custom_checkout_data_from_request($request)
    {
    }
    /**
     * Perform basic sanitization on custom checkout field values, based on the field type.
     *
     * @param string $value The value to sanitize.
     * @param string $type The type of the field.
     * @return mixed The sanitized field value.
     */
    private function get_sanitized_field_value($value, $type)
    {
    }
    /**
     * Get custom checkout data schema.
     *
     * @return array Custom checkout data schema.
     */
    public function get_custom_checkout_data_schema()
    {
    }
    /**
     * Retrieve custom checkout field IDs.
     *
     * @param string $context The context for the fields.
     * @return array Custom checkout field IDs.
     */
    public function get_custom_checkout_fields($context = '')
    {
    }
    /**
     * Get standard checkout fields.
     *
     * @return array Standard checkout fields.
     */
    private function get_standard_checkout_fields()
    {
    }
}
/**
 * WC_Stripe_Express_Checkout_Element class.
 */
class WC_Stripe_Express_Checkout_Element
{
    /**
     * Stripe settings.
     *
     * @var array
     */
    public $stripe_settings;
    /**
     * This Instance.
     *
     * @var WC_Stripe_Express_Checkout_Element
     */
    private static $_this;
    /**
     * WC_Stripe_Express_Checkout_Ajax_Handler instance.
     *
     * @var WC_Stripe_Express_Checkout_Ajax_Handler
     */
    private $express_checkout_ajax_handler;
    /**
     * WC_Stripe_Express_Checkout_Helper instance.
     *
     * @var WC_Stripe_Express_Checkout_Helper
     */
    public $express_checkout_helper;
    /**
     * Constructor.
     */
    public function __construct(\WC_Stripe_Express_Checkout_Ajax_Handler $express_checkout_ajax_handler, \WC_Stripe_Express_Checkout_Helper $express_checkout_helper)
    {
    }
    /**
     * Initialize hooks.
     *
     * @return  void
     */
    public function init()
    {
    }
    /**
     * Get this instance.
     *
     * @return WC_Stripe_Express_Checkout_Element
     */
    public static function instance()
    {
    }
    /**
     * Sets the WC customer session if one is not set.
     * This is needed so nonces can be verified by AJAX Request.
     * DEPRECATED: We now defer creation of sessions until the user actually interacts with the Express Checkout Element.
     *
     * @deprecated 10.5.0
     * @return void
     */
    public function set_session()
    {
    }
    /**
     * Handles express checkout redirect when the redirect dialog "Continue" button is clicked.
     *
     * @return void
     */
    public function handle_express_checkout_redirect()
    {
    }
    /**
     * Returns the login redirect URL.
     *
     * @param string $redirect Default redirect URL.
     * @return string Redirect URL.
     */
    public function get_login_redirect_url($redirect)
    {
    }
    /**
     * Returns the JavaScript configuration object used for any pages with express checkout element.
     *
     * @return array  The settings used for the Stripe express checkout element in JavaScript.
     */
    public function javascript_params()
    {
    }
    /**
     * Should ECE use product pricing (vs. cart pricing) in the current context.
     *
     * For One Page Checkout (OPC), when checkout buttons are enabled, always use cart
     * context so discounts/coupons are reflected.
     *
     * @return bool True to use product pricing; false to use cart totals.
     */
    public function is_product_page_for_ece()
    {
    }
    /**
     * Localizes additional parameters necessary for the Pay for Order page.
     *
     * @param WC_Order $order The order that needs payment.
     * @return void
     */
    public function localize_pay_for_order_page_scripts($order)
    {
    }
    /**
     * Get asset file data (version and dependencies).
     *
     * @return array Array containing 'version' and 'dependencies' keys.
     */
    private function get_asset_data()
    {
    }
    /**
     * Register the express checkout script without enqueuing it.
     *
     * @return void
     */
    private function register_express_checkout_script()
    {
    }
    /**
     * Append preconnect URLs for Stripe-owned hosts when the current page will render ECE.
     *
     * @param array  $urls          URLs that core has gathered for the relation type.
     * @param string $relation_type Resource hint relation ('preconnect', 'dns-prefetch', etc.).
     *
     * @return array
     */
    public function add_resource_hints($urls, $relation_type)
    {
    }
    /**
     * Append a preload entry for the Express Checkout bundle when ECE will render.
     *
     * Routed through the `wp_preload_resources` filter (WP 6.1+) so core handles the
     * `<link>` emission, attribute escaping, and deduplication. The hint lands in
     * `<head>` ahead of the footer enqueue, letting the browser's preload scanner
     * overlap the bundle fetch with the rest of `<head>` parsing.
     *
     * @param array $preload_resources Preload entries gathered by core.
     *
     * @return array
     */
    public function add_preload_resources($preload_resources)
    {
    }
    /**
     * Load scripts and styles.
     *
     * @return void
     */
    public function scripts()
    {
    }
    /**
     * Add needed order meta
     *
     * @param integer $order_id    The order ID.
     * @param array   $posted_data The posted data from checkout form.
     *
     * @return  void
     */
    public function add_order_meta($order_id, $posted_data)
    {
    }
    /**
     * Updates the subscription's payment method title to reflect the express checkout type.
     *
     * Mirrors `add_order_meta()` for the subscription change-payment-method flow, which
     * doesn't fire `woocommerce_checkout_order_processed`. Hooked on
     * `wc_stripe_change_subs_payment_method_success` (success path with $_POST data).
     *
     * @return void
     */
    public function update_subscription_payment_method_title()
    {
    }
    /**
     * After intent confirmation (e.g. post-3DS), re-apply the express checkout title to
     * the subscription using the type persisted to subscription meta during the change-
     * payment-method redirect. This compensates for `set_payment_method_title_for_order()`
     * resetting the title to the underlying card type during 3DS confirmation.
     *
     * Hooked on `wc_stripe_after_set_payment_method_title_for_confirmed_intent`.
     *
     * @param WC_Order $order The order or subscription that was just confirmed.
     * @return void
     */
    public function maybe_apply_express_title_after_confirmed_intent($order)
    {
    }
    /**
     * Applies an express checkout title (Apple Pay / Google Pay) to the given order or
     * subscription. Returns true when the title was applied.
     *
     * @param WC_Order $order                 Order or subscription to update.
     * @param string   $express_checkout_type The express checkout type (apple_pay, google_pay, link).
     * @return bool    Whether the title was applied.
     */
    private function apply_express_checkout_title_to_order($order, $express_checkout_type)
    {
    }
    /**
     * Returns the order-storage title for an express checkout type, including the
     * "(Stripe)" suffix for Apple Pay / Google Pay / Amazon Pay and the bare "Link"
     * label for Stripe Link.
     *
     * @param string $express_checkout_type One of WC_Stripe_Payment_Methods::APPLE_PAY/GOOGLE_PAY/AMAZON_PAY/LINK, or empty.
     * @return string The express label, or empty string if the type is not an express method.
     */
    private function get_express_checkout_method_title($express_checkout_type)
    {
    }
    /**
     * Substitutes the express checkout label into the change-payment-method order note
     * that `WC_Subscriptions_Change_Payment_Gateway::update_payment_method()` writes.
     *
     * Without this filter, WCS records "Payment method changed from X to Credit Card" even
     * when the shopper paid via Apple Pay / Google Pay / Link, because WCS computes the
     * "to" label from `$gateway->get_title()` (which is "Credit Card" for the `stripe`
     * gateway). Our own title override on `wc_stripe_change_subs_payment_method_success`
     * runs after the note has already been written, so it can correct the visible
     * subscription title but not the note copy.
     *
     * @param string          $title              The WCS-computed new payment method title.
     * @param string          $new_payment_method The new payment gateway ID.
     * @param WC_Subscription $subscription       The subscription being updated.
     * @return string
     */
    public function filter_change_payment_method_note_title($title, $new_payment_method, $subscription)
    {
    }
    /**
     * Filters the gateway title to reflect express checkout type
     *
     * @param string $title The gateway title.
     * @param string $id    The gateway ID.
     * @return string
     */
    public function filter_gateway_title($title, $id)
    {
    }
    /**
     * Display the express checkout button.
     *
     * @return void
     */
    public function display_express_checkout_button_html()
    {
    }
    /**
     * Add order attribution inputs to the page.
     *
     * @return void
     */
    public function add_order_attribution_inputs()
    {
    }
    /**
     * Display express checkout button separator.
     *
     * @return void
     */
    public function display_express_checkout_button_separator_html()
    {
    }
    /**
     * Determine whether to filter the cart needs shipping address.
     *
     * @param boolean $needs_shipping_address Whether the cart needs a shipping address.
     * @return bool
     */
    public function filter_cart_needs_shipping_address($needs_shipping_address)
    {
    }
}
/**
 * WC_Stripe_Express_Checkout_Helper class.
 */
class WC_Stripe_Express_Checkout_Helper
{
    use \WC_Stripe_Pre_Orders_Trait;
    /**
     * Stripe settings.
     *
     * @var array
     */
    public $stripe_settings;
    /**
     * Total label
     *
     * @var string
     */
    public $total_label;
    /**
     * Is test mode active?
     *
     * @var bool
     */
    public $testmode;
    /**
     * Gateway.
     *
     * @var WC_Stripe_UPE_Payment_Gateway
     */
    private $gateway;
    /**
     * Request-scoped cache for `should_show_express_checkout_button()`.
     *
     * Keys in the array capture specific contexts that may apply within a request.
     * Once such case is for handling One Page Checkout, which can affect when we are in checkout via runtime hooks.
     *
     * @var array<string, bool>
     */
    private $should_show_cache = [];
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Returns the suffix set for the express payment method titles.
     *
     * @return string
     */
    public static function get_payment_method_title_suffix()
    {
    }
    /**
     * Replaces the subscription's saved payment tokens with the WC token that
     * matches the given Stripe payment method ID. The change-payment flow
     * updates `_stripe_source_id` / `_payment_method` but not `_payment_tokens`,
     * so without this My Account keeps rendering the previously saved card.
     *
     * @param WC_Order $subscription      The subscription being updated.
     * @param string   $payment_method_id The Stripe payment method ID just attached to the subscription.
     * @return bool                       Whether a matching token was attached.
     */
    public static function replace_subscription_payment_token($subscription, $payment_method_id)
    {
    }
    /**
     * Checks whether authentication is required for checkout.
     *
     * @return bool
     */
    public function is_authentication_required()
    {
    }
    /**
     * Checks whether account creation is possible upon checkout.
     *
     * @return bool
     */
    public function is_account_creation_possible()
    {
    }
    /**
     * Gets the button type.
     *
     * @return  string
     */
    public function get_button_type()
    {
    }
    /**
     * Gets the button theme.
     *
     * @return  string
     */
    public function get_button_theme()
    {
    }
    /**
     * Gets the button height.
     *
     * @return  string
     */
    public function get_button_height()
    {
    }
    /**
     * Gets the Link button height.
     *
     * @return string
     */
    public function get_link_button_height()
    {
    }
    /**
     * Gets the Amazon Pay button height.
     *
     * @return string
     */
    public function get_amazon_pay_button_height()
    {
    }
    /**
     * Gets the button radius.
     *
     * @return string
     */
    public function get_button_radius()
    {
    }
    /**
     * Gets total label.
     *
     * @return string
     */
    public function get_total_label()
    {
    }
    /**
     * Gets the product total price.
     *
     * @param object    $product         WC_Product_* object.
     * @param bool|null $is_deposit      Whether this is a deposit.
     * @param int       $deposit_plan_id Deposit plan ID.
     *
     * @return float Total price.
     */
    public function get_product_price($product, $is_deposit = \null, $deposit_plan_id = 0)
    {
    }
    /**
     * Gets the product data for the currently viewed page
     *
     * @return  mixed Returns false if not on a product page, the product information otherwise.
     */
    public function get_product_data()
    {
    }
    /**
     * Render-time cart snapshot that lets the cart/checkout Express Checkout button
     * paint without the initial `GET /wc/store/v1/cart` fetch. Built from the same
     * helpers the AJAX path uses, so it matches what the fetch would return. Returns
     * null when the button must not render (wrong page, empty cart, or zero total
     * without a free trial); the client then falls back to its AJAX path.
     *
     * @return array|null
     */
    public function get_cart_render_data()
    {
    }
    /**
     * Helper function to return the list of countries that WooCommerce is set up to ship to.
     * The data is returned as an array of country codes, and relies on core WooCommerce shipping settings.
     *
     * @return string[]|null List of country codes, or null if shipping is not enabled.
     */
    public function get_allowed_shipping_countries()
    {
    }
    /**
     * Get the number of decimals supported by Stripe for the currency.
     *
     * @return int
     */
    public static function get_stripe_currency_decimals()
    {
    }
    /**
     * JS params data used by cart and checkout pages.
     *
     * @return array The checkout data.
     */
    public function get_checkout_data()
    {
    }
    /**
     * Default shipping option, used by product, cart and checkout pages.
     *
     * @return void|array
     */
    private function get_default_shipping_option()
    {
    }
    /**
     * Normalizes postal code in case of redacted data from Apple Pay.
     *
     * @param string $postcode Postal code.
     * @param string $country  Country.
     *
     * @return string The normalized postal code.
     */
    public function get_normalized_postal_code($postcode, $country)
    {
    }
    /**
     * Checks to make sure product type is supported.
     *
     * @return  array
     */
    public function supported_product_types()
    {
    }
    /**
     * Checks the cart to see if all items are allowed to be used.
     *
     * @return  boolean
     */
    public function allowed_items_in_cart()
    {
    }
    /**
     * Returns true if the given product is a subscription that cannot be purchased with express checkout buttons.
     *
     * Invalid subscription products include those with:
     *  - a free trial that requires shipping (synchronised subscriptions with a delayed first payment are considered to have a free trial)
     *  - a synchronised subscription with no upfront payment and is virtual (this limitation only applies to the product page as we cannot calculate totals correctly)
     *
     * If the product is a variable subscription, this function will return true if all of its variations have a trial and require shipping.
     *
     * @since 7.8.0
     *
     * @param WC_Product|null $product                 Product object.
     * @param boolean         $is_product_page_request Whether this is a request from the product page.
     *
     * @return boolean
     */
    public function is_invalid_subscription_product($product, $is_product_page_request = \false)
    {
    }
    /**
     * Checks whether cart contains a subscription product or this is a subscription product page.
     *
     * @return boolean
     */
    public function has_subscription_product()
    {
    }
    /**
     * Checks whether the subscription product has a free trial.
     *
     * @return bool
     */
    public function has_free_trial()
    {
    }
    /**
     * Checks if this is a product page or content contains a product_page shortcode.
     *
     * @return boolean
     */
    public function is_product()
    {
    }
    /**
     * Get product from product page or product_page shortcode.
     *
     * @return WC_Product|false Product object, or false if product is not found.
     */
    public function get_product()
    {
    }
    /**
     * Returns true if the current page supports Express Checkout Buttons, false otherwise.
     *
     * @return  boolean  True if the current page is supported, false otherwise.
     */
    public function is_page_supported()
    {
    }
    /**
     * Returns true if the current page is a subscription change payment method page.
     *
     * @return boolean
     */
    public function is_change_payment_method_page()
    {
    }
    /**
     * Returns true if ECE should be shown on the subscription change payment method page.
     *
     * Performs only the basic checks needed (account connected, SSL, gateway available,
     * ECE enabled) without cart-dependent validations which don't apply to this flow.
     * The location toggle (`change_payment_method`) lets merchants opt out independently
     * of the checkout-page setting.
     *
     * @return boolean
     */
    private function should_show_ece_on_change_payment_method_page()
    {
    }
    /**
     * Returns true if any express checkout buttons are enabled for the subscription
     * change payment method location, false otherwise.
     *
     * @since 10.8.0
     * @return boolean
     */
    public function should_show_ece_on_change_payment_method_location()
    {
    }
    /**
     * Returns true if express checkout elements are supported on the current page, false
     * otherwise.
     *
     * @return  boolean  True if express checkout elements are supported on current page, false otherwise
     */
    public function should_show_express_checkout_button()
    {
    }
    /**
     * Evaluate every guard for showing the Express Checkout button. Do not call directly;
     * go through `should_show_express_checkout_button()` so the result is cached.
     *
     * @return boolean
     */
    protected function compute_should_show_express_checkout_button()
    {
    }
    /**
     * Returns true if ECE should be hidden based on the shop's or product's tax setup.
     *
     * We cannot guarantee accurate taxes for express checkout when taxes are based on the
     * billing address. This is because we do not have access to the billing address until
     * after payment is submitted, i.e. on the confirm event.
     *
     * However, we hide ECE only when the product/cart does not need shipping, as we can
     * use the shipping address as fallback for tax calculations. In this scenario, there is
     * still a chance that the taxes will be inaccurate if the customer's billing and
     * shipping addresses are different. We can reconsider this trade-off in the future,
     * if needed.
     *
     * @return boolean True if ECE should be hidden, false otherwise.
     */
    private function should_hide_ece_based_on_tax_setup()
    {
    }
    /**
     * Returns true if the product or cart is taxable, false otherwise.
     *
     * @return boolean True if the product or cart is taxable, false otherwise.
     */
    private function is_product_or_cart_taxable()
    {
    }
    /**
     * Check if the passed product needs to be shipped.
     *
     * @return bool Returns true if the product requires shipping.
     *              Otherwise, returns false.
     */
    private function product_or_cart_needs_shipping()
    {
    }
    /**
     * Returns true if any express checkout buttons are enabled on the cart page, false
     * otherwise.
     *
     * @return  boolean  True if any express checkout buttons are enabled on the cart page, false otherwise
     */
    public function should_show_ece_on_cart_page()
    {
    }
    /**
     * Returns true if any express checkout buttons are enabled on the checkout page, false
     * otherwise.
     *
     * @return  boolean  True if any express checkout buttons are enabled on the checkout page, false otherwise
     */
    public function should_show_ece_on_checkout_page()
    {
    }
    /**
     * Detects if the current page is a One Page Checkout page.
     *
     * @return boolean True if on a One Page Checkout page, false otherwise.
     */
    public function is_one_page_checkout(): bool
    {
    }
    /**
     * Returns true if any express checkout buttons are enabled on product pages, false
     * otherwise.
     *
     * @return  boolean  True if any express checkout buttons are enabled on product pages, false otherwise
     */
    public function should_show_ece_on_product_pages()
    {
    }
    /**
     * Returns true if any express checkout buttons are enabled on the given location, false
     * otherwise.
     *
     * @param string $location The location to check.
     *
     * @return boolean True if any express checkout buttons are enabled on the given page, false otherwise.
     */
    private function should_show_ece_on_location(string $location): bool
    {
    }
    /**
     * Returns true if the provided product is supported, false otherwise.
     *
     * @param WC_Product|null|bool $product The product to check if it is supported.
     *
     * @return bool True if the provided product is supported, false otherwise.
     */
    public function is_product_supported($product)
    {
    }
    /**
     * Gets shipping options available for specified shipping address
     *
     * Since 11.0.0, this method no longer defines the WOOCOMMERCE_CART constant;
     * callers are responsible for defining it when they need this to run in a
     * WooCommerce cart context.
     *
     * @param array   $shipping_address       Shipping address.
     * @param boolean $itemized_display_items Indicates whether to show subtotals or itemized views.
     *
     * @return array Shipping options data.
     *
     * phpcs:ignore Squiz.Commenting.FunctionCommentThrowTag
     */
    public function get_shipping_options($shipping_address, $itemized_display_items = \false)
    {
    }
    /**
     * Updates shipping method in WC session.
     *
     * @param array $shipping_methods Array of selected shipping methods ids.
     *
     * @return void
     */
    public function update_shipping_method($shipping_methods)
    {
    }
    /**
     * Normalizes billing and shipping state fields.
     *
     * @param array $data Address data.
     *
     * @return array Normalized address data.
     */
    public function normalize_state($data)
    {
    }
    /**
     * Checks if given state is normalized.
     *
     * @param string $state State.
     * @param string $country Two-letter country code.
     *
     * @return bool Whether state is normalized or not.
     */
    public function is_normalized_state($state, $country)
    {
    }
    /**
     * Sanitize string for comparison.
     *
     * @param string $string String to be sanitized.
     *
     * @return string The sanitized string.
     */
    public function sanitize_string($string)
    {
    }
    /**
     * Get normalized state from express checkout API dropdown list of states.
     *
     * @param string $state   Full state name or state code.
     * @param string $country Two-letter country code.
     *
     * @return string Normalized state or original state input value.
     */
    public function get_normalized_state_from_pr_states($state, $country)
    {
    }
    /**
     * Get normalized state from WooCommerce list of translated states.
     *
     * @param string $state   Full state name or state code.
     * @param string $country Two-letter country code.
     *
     * @return string Normalized state or original state input value.
     */
    public function get_normalized_state_from_wc_states($state, $country)
    {
    }
    /**
     * Gets the normalized state/county field because in some
     * cases, the state/county field is formatted differently from
     * what WC is expecting and throws an error. An example
     * for Ireland, the county dropdown in Chrome shows "Co. Clare" format.
     *
     * @param string $state   Full state name or an already normalized abbreviation.
     * @param string $country Two-letter country code.
     *
     * @return string Normalized state abbreviation.
     */
    public function get_normalized_state($state, $country)
    {
    }
    /**
     * The express checkout API provides its own validation for the address form.
     * For some countries, it might not provide a state field, so we need to return a more descriptive
     * error message, indicating that the express checkout button is not supported for that country.
     *
     * @return void
     */
    public function validate_state()
    {
    }
    /**
     * Performs special mapping for address fields for specific contexts.
     *
     * @param array $data Address data.
     *
     * @return array Address data.
     */
    public function fix_address_fields_mapping($data)
    {
    }
    /**
     * Calculate and set shipping method.
     *
     * @param array $address Shipping address.
     *
     * @return void
     */
    protected function calculate_shipping($address = [])
    {
    }
    /**
     * The settings for the `button` attribute.
     *
     * @return array
     */
    public function get_button_settings()
    {
    }
    /**
     * Checks if this is the Pay for Order page.
     *
     * @return boolean
     */
    public function is_pay_for_order_page()
    {
    }
    /**
     * Checks if this is the checkout page or content contains a checkout block.
     *
     * @return boolean
     */
    public function is_checkout()
    {
    }
    /**
     * Checks if this is the cart page or content contains a cart block.
     *
     * @return boolean
     */
    public function is_cart()
    {
    }
    /**
     * Builds the shipping methods to pass to express checkout elements.
     *
     * @param array $shipping_methods The shipping methods data.
     *
     * @return array The formatted shipping methods for express checkout.
     */
    protected function build_shipping_methods($shipping_methods)
    {
    }
    /**
     * Builds the line items to pass to express checkout elements.
     *
     * Since 11.0.0, this method no longer defines the WOOCOMMERCE_CART constant;
     * callers are responsible for defining it when they need this to run in a
     * WooCommerce cart context.
     *
     * @param bool $itemized_display_items Whether to include itemized display items.
     *
     * @return array {
     *     The display items and total for express checkout.
     *
     *     @type array $displayItems The display items.
     *     @type array $total {
     *         The total for express checkout.
     *
     *         @type string    $label   The label for the total.
     *         @type float|int $amount  The amount for the total.
     *         @type bool      $pending Whether the total is pending.
     *     }
     * }
     */
    public function build_display_items($itemized_display_items = \false)
    {
    }
    /**
     * Settings array for the user authentication dialog and redirection.
     *
     * @return array
     */
    public function get_login_confirmation_settings()
    {
    }
    /**
     * Pages where the express checkout buttons should be displayed.
     *
     * @param string|null $express_checkout_type The type of express checkout.
     * @return array
     */
    public function get_button_locations(?string $express_checkout_type = \null): array
    {
    }
    /**
     * Check if the express checkout type is enabled for the given location.
     *
     * @param string $express_checkout_type The type of express checkout.
     * @param string $location The location to check.
     *
     * @return boolean
     */
    public function is_enabled_for_location(string $express_checkout_type = 'payment_request', string $location = ''): bool
    {
    }
    /**
     * Returns whether any of the Stripe express checkout element is enabled.=
     *
     * @return boolean
     */
    public function is_express_checkout_enabled()
    {
    }
    /**
     * Checks if the given express checkout type is enabled for the current page context.
     *
     * @param string $express_checkout_type The type of express checkout.
     *
     * @return boolean
     */
    private function is_enabled_for_current_context(string $express_checkout_type): bool
    {
    }
    /**
     * Checks if Apple Pay and Google Pay buttons are enabled.
     *
     * @deprecated 10.6.0 Use is_apple_google_pay_enabled() instead.
     * @return boolean
     */
    public function is_payment_request_enabled()
    {
    }
    /**
     * Checks if Apple Pay and Google Pay buttons are enabled.
     *
     * @since 10.6.0
     * @return boolean
     */
    public function is_apple_google_pay_enabled()
    {
    }
    /**
     * Returns whether Amazon Pay is enabled.
     *
     * @return boolean
     */
    public function is_amazon_pay_enabled()
    {
    }
    /**
     * Returns whether Link is enabled.
     *
     * @return boolean
     */
    public function is_link_enabled()
    {
    }
    /**
     * Restores the shipping methods previously chosen for each recurring cart after shipping was reset and recalculated
     * during the express checkout get_shipping_options flow.
     *
     * When the cart contains multiple subscriptions with different billing periods, customers are able to select different shipping
     * methods for each subscription, however, this is not supported when purchasing with Apple Pay and Google Pay as it's
     * only concerned about handling the initial purchase.
     *
     * In order to avoid Woo Subscriptions's `WC_Subscriptions_Cart::validate_recurring_shipping_methods` throwing an error, we need to restore
     * the previously chosen shipping methods for each recurring cart.
     *
     * This function needs to be called after `WC()->cart->calculate_totals()` is run, otherwise `WC()->cart->recurring_carts` won't exist yet.
     *
     * @param array $previous_chosen_methods The previously chosen shipping methods.
     *
     * @return void
     */
    public function maybe_restore_recurring_chosen_shipping_methods($previous_chosen_methods = [])
    {
    }
    /**
     * Calculates taxes as displayed on cart, based on a product and a particular price.
     *
     * @param WC_Product $product The product, for retrieval of tax classes.
     * @param float      $price   The price, which to calculate taxes for.
     * @return array              An array of final taxes.
     */
    public function get_taxes_like_cart($product, $price)
    {
    }
    /**
     * Whether tax should be displayed on separate line in cart.
     * returns true if tax is disabled or display of tax in checkout is set to inclusive.
     *
     * @return boolean
     */
    public function cart_prices_include_tax()
    {
    }
    /**
     * Gets the booking id from the cart.
     *
     * It's expected that the cart only contains one item which was added via ajax_add_to_cart.
     * Used to remove the booking from WC Bookings in-cart status.
     *
     * @return int|false
     *
     * @deprecated 9.8.0 Use `get_booking_ids_from_cart()` instead.
     */
    public function get_booking_id_from_cart()
    {
    }
    /**
     * Gets a list of booking ids from the cart.
     *
     * Used to remove the booking from WC Bookings in-cart status.
     *
     * @return array
     */
    public function get_booking_ids_from_cart()
    {
    }
    /**
     * Check if the current request is an express checkout context.
     *
     * @return bool True if express checkout context, false otherwise.
     */
    public function is_express_checkout_context()
    {
    }
    /**
     * Check if is request to the Store API.
     *
     * @return bool
     */
    public function is_request_to_store_api()
    {
    }
    /**
     * Check if the cart contains a free trial subscription.
     *
     * @return bool
     */
    private function cart_contains_free_trial(): bool
    {
    }
    /**
     * Check if a specific recurring cart contains a free trial subscription.
     *
     * Unlike cart_contains_free_trial(), this operates on a single recurring cart object
     * so it can be used to make per-cart decisions inside loops over recurring_carts.
     *
     * @param WC_Cart $recurring_cart A recurring cart instance from WC()->cart->recurring_carts.
     *
     * @return bool
     */
    private function recurring_cart_contains_free_trial($recurring_cart): bool
    {
    }
}
/**
 * No-op stand-in for the WC_Stripe_Payment_Request class removed in 10.4.0.
 *
 * Third parties still read woocommerce_gateway_stripe()->payment_request_configuration and
 * register its methods as hook callbacks; a null property made those callbacks fatal at
 * hook-fire time. This keeps them resolving to a valid object without restoring any behaviour.
 *
 * Every call logs a deprecation so remaining third-party usage stays visible; remove this
 * class together with the WC_Stripe::$payment_request_configuration property once that
 * signal dies down.
 *
 * @deprecated 10.4.0 Use WC_Stripe_Express_Checkout_Element instead.
 */
class WC_Stripe_Payment_Request_Compat
{
    public function display_payment_request_button_html(): void
    {
    }
    public function display_payment_request_button_separator_html(): void
    {
    }
    /**
     * Swallow any other removed method so legacy callbacks never fatal.
     *
     * @param string  $name
     * @param mixed[] $arguments
     * @return null
     */
    public function __call(string $name, array $arguments)
    {
    }
}
/**
 * Abstract UPE Payment Method class
 *
 * Handles general functionality for UPE payment methods
 */
/**
 * Extendable abstract class for payment methods.
 */
abstract class WC_Stripe_UPE_Payment_Method extends \WC_Payment_Gateway
{
    use \WC_Stripe_Subscriptions_Utilities_Trait;
    use \WC_Stripe_Pre_Orders_Trait;
    /**
     * Stripe account countries permitted to enable this payment method.
     * Default is all countries.
     *
     * @var string[]
     */
    protected const SUPPORTED_ACCOUNT_COUNTRIES = [];
    /**
     * Stripe account countries not permitted to enable this payment method.
     * Default is no countries.
     *
     * @var string[]
     */
    protected const UNSUPPORTED_ACCOUNT_COUNTRIES = [];
    /**
     * Customer billing countries permitted to use this payment method at checkout.
     * Default is all countries.
     *
     * @var string[]
     */
    protected const SUPPORTED_BILLING_COUNTRIES = [];
    /**
     * Stripe key name
     *
     * @var string
     */
    protected $stripe_id;
    /**
     * Display title
     *
     * @var string
     */
    public $title;
    /**
     * Method label
     *
     * @var string
     */
    protected $label;
    /**
     * Method description
     *
     * @var string
     */
    public $description;
    /**
     * Can payment method be saved or reused?
     *
     * @var bool
     */
    protected $is_reusable;
    /**
     * Array of currencies supported by this UPE method
     *
     * @var array
     */
    protected $supported_currencies;
    /**
     * Can this payment method be refunded?
     *
     * @var array
     */
    protected $can_refund = \true;
    /**
     * Wether this UPE method is enabled
     *
     * @var bool
     */
    public $enabled;
    /**
     * Stripe account countries permitted to enable this payment method.
     * Empty means no restriction (all merchant account countries permitted).
     *
     * @var string[]
     */
    protected $supported_account_countries = [];
    /**
     * Stripe account countries not permitted to enable this payment method.
     * Empty means no countries are unsupported.
     *
     * @var string[]
     */
    protected $unsupported_account_countries = [];
    /**
     * Customer billing countries permitted to use this payment method at checkout.
     * Empty means no restriction (all billing countries permitted).
     *
     * @var string[]
     */
    protected $supported_billing_countries = [];
    /**
     * Should payment method be restricted to only domestic payments.
     * E.g. only to Stripe's connected account currency.
     *
     * @var boolean
     */
    protected $accept_only_domestic_payment = \false;
    /**
     * Represent payment total limitations for the payment method (per-currency).
     *
     * @var array<string,array<string,array<string,int>>>
     */
    protected $limits_per_currency = [];
    /**
     * Wether this UPE method is in testmode.
     *
     * @var bool
     */
    public $testmode;
    /**
     * Wether this payment method supports deferred intent creation.
     *
     * @var bool
     */
    protected $supports_deferred_intent;
    /**
     * Whether Optimized Checkout is enabled.
     *
     * @var bool
     */
    protected $oc_enabled;
    /**
     * Create instance of payment method
     */
    public function __construct()
    {
    }
    /**
     * Magic method to get properties.
     * Used for backwards compatibility with deprecated properties.
     *
     * @internal This method may be removed at any time.
     *
     * @param string $property The property name.
     * @return mixed
     */
    public function __get($property)
    {
    }
    /**
     * Magic method to check if properties are set.
     * Used for backwards compatibility with deprecated properties.
     *
     * @internal This method may be removed at any time.
     *
     * @param string $property The property name.
     * @return bool
     */
    public function __isset($property): bool
    {
    }
    /**
     * Magic method to call methods from the main UPE Stripe gateway.
     *
     * Calling methods on the UPE method instance should forward the call to the main UPE Stripe gateway.
     * Because the UPE methods are not actual gateways, they don't have the methods to handle payments, so we need to forward the calls to
     * the main UPE Stripe gateway.
     *
     * That would suggest we should use a class inheritance structure, however, we don't want to extend the UPE Stripe gateway class
     * because we don't want the UPE method instance of the gateway to process those calls, we want the actual main instance of the
     * gateway to process them.
     *
     * @param string $method    The method name.
     * @param array  $arguments The method arguments.
     * @return mixed
     */
    public function __call($method, $arguments)
    {
    }
    /**
     * Returns payment method ID
     *
     * @return string
     */
    public function get_id()
    {
    }
    /**
     * Returns true if the UPE method is enabled.
     *
     * @return bool
     */
    public function is_enabled()
    {
    }
    /**
     * Returns true if the UPE method is available.
     *
     * @return bool
     */
    public function is_available()
    {
    }
    /**
     * Returns payment method title
     *
     * @param stdClass|array|bool $payment_details Optional payment details from charge object.
     *
     * @return string
     */
    public function get_title($payment_details = \false)
    {
    }
    /**
     * Returns payment method label
     *
     * @return string
     */
    public function get_label()
    {
    }
    /**
     * Returns payment method description
     *
     * @return string
     */
    public function get_description()
    {
    }
    /**
     * Gets the payment method's icon.
     *
     * @return string The icon HTML.
     */
    public function get_icon()
    {
    }
    /**
     * Gets the payment method's icon url.
     * Each payment method should override this method to return the icon url.
     *
     * @return string The icon url.
     */
    public function get_icon_url()
    {
    }
    /**
     * Returns boolean dependent on whether payment method
     * can be used at checkout
     *
     * @param int|null    $order_id
     * @param string|null $account_domestic_currency The account's default currency.
     * @return bool
     */
    public function is_enabled_at_checkout($order_id = \null, $account_domestic_currency = \null)
    {
    }
    /**
     * Returns the supported customer locations for which charges for a payment method can be processed.
     *
     * @return array Supported customer locations.
     */
    public function get_available_billing_countries()
    {
    }
    /**
     * Validates if a payment method is available on a given country.
     *
     * @deprecated 10.8.0 Use is_available_for_billing_country() instead.
     *
     * @param string $country A two-letter country code.
     *
     * @return bool
     */
    public function is_allowed_on_country($country)
    {
    }
    /**
     * Whether the given billing country for a shopper is permitted to use this payment method.
     *
     * @param string $country_code Two-letter ISO country code.
     *
     * @return bool True when no restriction is set or the country is in the supported list.
     */
    public function is_available_for_billing_country($country_code): bool
    {
    }
    /**
     * Returns boolean dependent on whether payment method
     * will support saved payments/subscription payments
     *
     * @return bool
     */
    public function is_reusable()
    {
    }
    /**
     * Returns boolean dependent on whether capability
     * for site account is enabled for payment method.
     *
     * @return bool
     */
    public function is_capability_active()
    {
    }
    /**
     * Returns capabilities response object for site account.
     *
     * @return object
     */
    public function get_capabilities_response()
    {
    }
    /**
     * Returns string representing payment method type
     * to query to retrieve saved payment methods from Stripe.
     *
     * @return string
     */
    public function get_retrievable_type()
    {
    }
    /**
     * Create new WC payment token and add to user.
     *
     * @param int $user_id        WP_User ID
     * @param object $payment_method Stripe payment method object
     *
     * @return WC_Payment_Token_SEPA
     */
    public function create_payment_token_for_user($user_id, $payment_method)
    {
    }
    /**
     * Updates a payment token.
     *
     * @param WC_Payment_Token $token   The token to update.
     * @param string $payment_method_id The new payment method ID.
     * @return WC_Payment_Token
     */
    public function update_payment_token($token, $payment_method_id)
    {
    }
    /**
     * Returns the currencies this UPE method supports.
     *
     * @return array|null
     */
    public function get_supported_currencies()
    {
    }
    /**
     * Determines whether the payment method is restricted to the Stripe account's currency.
     * E.g.: Afterpay/Clearpay and Affirm only supports domestic payments; Klarna also implements a simplified version of these market restrictions.
     *
     * @return bool
     */
    public function has_domestic_transactions_restrictions(): bool
    {
    }
    /**
     * Wrapper function for get_woocommerce_currency global function
     *
     * @return string
     */
    public function get_woocommerce_currency()
    {
    }
    /**
     * Returns whether the payment method requires automatic capture.
     * By default all the UPE payment methods require automatic capture, except for "card".
     *
     * @return bool
     */
    public function requires_automatic_capture()
    {
    }
    /**
     * Returns the HTML for the subtext messaging in the old settings UI.
     *
     * @param string $stripe_method_status (optional) Status of this payment method based on the Stripe's account capabilities
     * @return string
     */
    public function get_subtext_messages($stripe_method_status)
    {
    }
    /**
     * Checks if payment method allows refund via stripe
     *
     * @return bool
     */
    public function can_refund_via_stripe()
    {
    }
    /**
     * Returns testing credentials to be printed at checkout in test mode.
     *
     * Wrap test card/account numbers in `<number>` tags (e.g. `<number>4242 4242 4242 4242</number>`)
     * so they are rendered as copy-to-clipboard buttons at checkout.
     *
     * @see WC_Stripe_UPE_Payment_Gateway::expand_copy_button_markup()
     *
     * @param bool $show_optimized_checkout_instruction Deprecated. Whether to show optimized checkout instructions.
     * @param bool $include_test_mode_label Whether to include the "Test mode:" label prefix. Pass false for
     *                                      Blocks checkout, which already displays a Test Mode badge.
     * @return string
     */
    public function get_testing_instructions(bool $show_optimized_checkout_instruction = \false, bool $include_test_mode_label = \true)
    {
    }
    /**
     * Processes an order payment.
     *
     * UPE Payment methods use the WC_Stripe_UPE_Payment_Gateway::process_payment() function.
     *
     * @param int $order_id The order ID to process.
     * @return array The payment result.
     */
    public function process_payment($order_id)
    {
    }
    /**
     * Process a refund.
     *
     * UPE Payment methods use the WC_Stripe_UPE_Payment_Gateway::process_payment() function.
     *
     * @param int        $order_id Order ID.
     * @param float|null $amount Refund amount.
     * @param string     $reason Refund reason.
     *
     * @return bool|\WP_Error True or false based on success, or a WP_Error object.
     */
    public function process_refund($order_id, $amount = \null, $reason = '')
    {
    }
    /**
     * Process the add payment method request.
     *
     * UPE Payment methods use the WC_Stripe_UPE_Payment_Gateway::process_payment() function.
     *
     * @return array The add payment method result.
     */
    public function add_payment_method()
    {
    }
    /**
     * Determines if the Stripe Account country supports this UPE method.
     *
     * @return bool
     */
    public function is_available_for_account_country()
    {
    }
    /**
     * Returns the UPE Payment Method settings option.
     *
     * @return string
     */
    public function get_option_key()
    {
    }
    /**
     * Get option from the main Stripe gateway if it exists.
     *
     * @param string $key Option key.
     * @param mixed  $empty_value Value when empty.
     * @return string The value specified for the option or a default value for the option.
     */
    public function get_option($key, $empty_value = \null)
    {
    }
    /**
     * Renders the UPE payment fields.
     *
     * @return void
     */
    public function payment_fields()
    {
    }
    /**
     * Returns true if the saved cards feature is enabled.
     *
     * @return bool
     */
    public function is_saved_cards_enabled()
    {
    }
    /**
     * Returns true if the SEPA tokens for iDEAL feature is enabled.
     *
     * @return bool
     *
     * @deprecated 10.0.0 Use is_sepa_tokens_for_ideal and is_sepa_tokens_for_bancontact instead.
     */
    public function is_sepa_tokens_for_other_methods_enabled()
    {
    }
    /**
     * Returns true if the SEPA tokens for iDEAL feature is enabled.
     *
     * @return bool
     */
    public function is_sepa_tokens_for_ideal_enabled()
    {
    }
    /**
     * Returns true if the SEPA tokens for Bancontact feature is enabled.
     *
     * @return bool
     */
    public function is_sepa_tokens_for_bancontact_enabled()
    {
    }
    /**
     * Determines if this payment method should show the save to account checkbox.
     *
     * @return bool
     */
    public function should_show_save_option()
    {
    }
    /**
     * Returns the payment method's limits per currency.
     *
     * @return int[][][]
     */
    public function get_limits_per_currency(): array
    {
    }
    /**
     * Returns the current order amount (from the "pay for order" page or from the current cart).
     *
     * @return float|int|string
     */
    public function get_current_order_amount()
    {
    }
    /**
     * Determines if the payment method is inside the currency limits.
     *
     * @param  string $current_store_currency The store's currency.
     * @return bool True if the payment method is inside the currency limits, false otherwise.
     */
    public function is_inside_currency_limits($current_store_currency): bool
    {
    }
    /**
     * Displays the save to account checkbox.
     *
     * @param bool $force_checked Whether the checkbox should be checked by default.
     *
     * @return void
     */
    public function save_payment_method_checkbox($force_checked = \false)
    {
    }
    /**
     * Gets the transaction URL.
     * Overrides WC_Payment_Gateway::get_transaction_url().
     *
     * @param  WC_Order $order Order object.
     * @return string
     */
    public function get_transaction_url($order)
    {
    }
    /**
     * Whether this payment method supports deferred intent creation.
     *
     * @return bool
     */
    public function supports_deferred_intent()
    {
    }
    /**
     * Returns UPE enabled payment method IDs.
     *
     * @return string[]
     */
    public function get_upe_enabled_payment_method_ids()
    {
    }
    /**
     * Returns the title for the card wallet type.
     * This is used to display the title for Apple Pay and Google Pay.
     *
     * @param string $express_payment_type The type of express payment method.
     *
     * @return string The title for the card wallet type.
     */
    protected function get_card_wallet_type_title($express_payment_type)
    {
    }
}
/**
 * Class that handles ACH Direct Debit as a UPE Payment Method.
 *
 * @extends WC_Stripe_UPE_Payment_Method
 */
class WC_Stripe_UPE_Payment_Method_ACH extends \WC_Stripe_UPE_Payment_Method
{
    use \WC_Stripe_Subscriptions_Trait;
    /**
     * Stripe's internal identifier for ACH Direct Debit.
     */
    public const STRIPE_ID = \WC_Stripe_Payment_Methods::ACH;
    /**
     * Stripe account countries that may enable ACH Direct Debit. ACH itself only debits US
     * bank accounts, but Stripe permits the connected merchant account to live in many countries.
     *
     * @var string[]
     */
    protected const SUPPORTED_ACCOUNT_COUNTRIES = [\WC_Stripe_Country_Code::AUSTRIA, \WC_Stripe_Country_Code::BELGIUM, \WC_Stripe_Country_Code::BULGARIA, \WC_Stripe_Country_Code::SWITZERLAND, \WC_Stripe_Country_Code::CYPRUS, \WC_Stripe_Country_Code::CZECH_REPUBLIC, \WC_Stripe_Country_Code::GERMANY, \WC_Stripe_Country_Code::DENMARK, \WC_Stripe_Country_Code::ESTONIA, \WC_Stripe_Country_Code::SPAIN, \WC_Stripe_Country_Code::FINLAND, \WC_Stripe_Country_Code::FRANCE, \WC_Stripe_Country_Code::UNITED_KINGDOM, \WC_Stripe_Country_Code::GIBRALTAR, \WC_Stripe_Country_Code::GREECE, \WC_Stripe_Country_Code::CROATIA, \WC_Stripe_Country_Code::HUNGARY, \WC_Stripe_Country_Code::IRELAND, \WC_Stripe_Country_Code::ITALY, \WC_Stripe_Country_Code::LIECHTENSTEIN, \WC_Stripe_Country_Code::LITHUANIA, \WC_Stripe_Country_Code::LUXEMBOURG, \WC_Stripe_Country_Code::LATVIA, \WC_Stripe_Country_Code::MALTA, \WC_Stripe_Country_Code::NETHERLANDS, \WC_Stripe_Country_Code::NORWAY, \WC_Stripe_Country_Code::POLAND, \WC_Stripe_Country_Code::PORTUGAL, \WC_Stripe_Country_Code::ROMANIA, \WC_Stripe_Country_Code::SWEDEN, \WC_Stripe_Country_Code::SLOVENIA, \WC_Stripe_Country_Code::SLOVAKIA, \WC_Stripe_Country_Code::UNITED_STATES];
    /**
     * Shopper billing countries permitted to use ACH Direct Debit (US bank accounts only).
     *
     * @var string[]
     */
    protected const SUPPORTED_BILLING_COUNTRIES = [\WC_Stripe_Country_Code::UNITED_STATES];
    /**
     * Constructor for ACH Direct Debit payment method.
     */
    public function __construct()
    {
    }
    /**
     * Creates an ACH payment token for the customer.
     *
     * @param int      $user_id        The customer ID the payment token is associated with.
     * @param stdClass $payment_method The payment method object.
     *
     * @return WC_Payment_Token_ACH|null The payment token created.
     */
    public function create_payment_token_for_user($user_id, $payment_method)
    {
    }
}
/**
 * The Canadian Pre-Authorized Debit (ACSS Debit) Payment Method class extending UPE base class
 */
class WC_Stripe_UPE_Payment_Method_ACSS extends \WC_Stripe_UPE_Payment_Method
{
    use \WC_Stripe_Subscriptions_Trait;
    public const STRIPE_ID = \WC_Stripe_Payment_Methods::ACSS_DEBIT;
    /**
     * Stripe account countries that may enable ACSS Debit.
     *
     * @var string[]
     */
    protected const SUPPORTED_ACCOUNT_COUNTRIES = [\WC_Stripe_Country_Code::CANADA, \WC_Stripe_Country_Code::UNITED_STATES];
    /**
     * Shopper billing countries permitted to use ACSS Debit.
     *
     * @var string[]
     */
    protected const SUPPORTED_BILLING_COUNTRIES = [\WC_Stripe_Country_Code::CANADA];
    /**
     * Constructor for ACSS Debit payment method
     */
    public function __construct()
    {
    }
    /**
     * Renders the UPE payment fields.
     *
     * Overrides the base class to add an informational message since the Stripe Payment Element
     * renders empty for ACSS Debit — the bank account authorization happens via a Stripe-hosted
     * mandate modal during payment confirmation.
     *
     * @return void
     */
    public function payment_fields()
    {
    }
    /**
     * Creates an ACSS payment token for the customer.
     *
     * @param int      $user_id        The customer ID the payment token is associated with.
     * @param stdClass $payment_method The payment method object.
     *
     * @return WC_Payment_Token_ACSS|null The payment token created.
     */
    public function create_payment_token_for_user($user_id, $payment_method)
    {
    }
}
/**
 * The Affirm Payment Method class extending UPE base class
 */
class WC_Stripe_UPE_Payment_Method_Affirm extends \WC_Stripe_UPE_Payment_Method
{
    public const STRIPE_ID = \WC_Stripe_Payment_Methods::AFFIRM;
    /**
     * Stripe account countries that may enable Affirm.
     *
     * @var string[]
     */
    protected const SUPPORTED_ACCOUNT_COUNTRIES = [\WC_Stripe_Country_Code::UNITED_STATES, \WC_Stripe_Country_Code::CANADA];
    /**
     * Shopper billing countries permitted to use Affirm (Affirm is domestic-only, so same as account).
     *
     * @var string[]
     */
    protected const SUPPORTED_BILLING_COUNTRIES = [\WC_Stripe_Country_Code::UNITED_STATES, \WC_Stripe_Country_Code::CANADA];
    /**
     * Constructor for Affirm payment method
     */
    public function __construct()
    {
    }
    /**
     * Returns whether the payment method requires automatic capture.
     *
     * @inheritDoc
     */
    public function requires_automatic_capture()
    {
    }
    /**
     * Returns true if the UPE method is available.
     *
     * @inheritDoc
     */
    public function is_available()
    {
    }
}
/**
 * The Afterpay / Clearpay Payment Method class extending UPE base class
 */
class WC_Stripe_UPE_Payment_Method_Afterpay_Clearpay extends \WC_Stripe_UPE_Payment_Method
{
    public const STRIPE_ID = \WC_Stripe_Payment_Methods::AFTERPAY_CLEARPAY;
    /**
     * Stripe account countries that may enable Clearpay / Afterpay.
     *
     * @var string[]
     */
    protected const SUPPORTED_ACCOUNT_COUNTRIES = [\WC_Stripe_Country_Code::AUSTRALIA, \WC_Stripe_Country_Code::CANADA, \WC_Stripe_Country_Code::UNITED_KINGDOM, \WC_Stripe_Country_Code::NEW_ZEALAND, \WC_Stripe_Country_Code::UNITED_STATES];
    /**
     * Shopper billing countries permitted to use Clearpay / Afterpay (domestic-only, so same as account).
     *
     * @var string[]
     */
    protected const SUPPORTED_BILLING_COUNTRIES = [\WC_Stripe_Country_Code::AUSTRALIA, \WC_Stripe_Country_Code::CANADA, \WC_Stripe_Country_Code::UNITED_KINGDOM, \WC_Stripe_Country_Code::NEW_ZEALAND, \WC_Stripe_Country_Code::UNITED_STATES];
    /**
     * Constructor for afterpay / clearpay payment method
     */
    public function __construct()
    {
    }
    /**
     * Returns payment method title
     *
     * @param stdClass|array|bool $payment_details Optional payment details from charge object.
     *
     * @return string
     */
    public function get_title($payment_details = \false)
    {
    }
    /**
     * Returns payment method icon.
     *
     * @return string|null
     */
    public function get_icon()
    {
    }
    /**
     * Returns whether the payment method requires automatic capture.
     *
     * @inheritDoc
     */
    public function requires_automatic_capture()
    {
    }
    /**
     * Returns true if the Stripe account country is GB
     *
     * @return boolean
     */
    private function is_gb_country()
    {
    }
}
/**
 * The alipay Payment Method class extending UPE base class
 */
class WC_Stripe_UPE_Payment_Method_Alipay extends \WC_Stripe_UPE_Payment_Method
{
    public const STRIPE_ID = \WC_Stripe_Payment_Methods::ALIPAY;
    /**
     * Stripe account countries that may enable Alipay. Differs slightly from the global
     * list (includes Malaysia; excludes Poland and Mexico) per Stripe's docs.
     *
     * @var string[]
     */
    protected const SUPPORTED_ACCOUNT_COUNTRIES = [\WC_Stripe_Country_Code::AUSTRIA, \WC_Stripe_Country_Code::AUSTRALIA, \WC_Stripe_Country_Code::BELGIUM, \WC_Stripe_Country_Code::BULGARIA, \WC_Stripe_Country_Code::CANADA, \WC_Stripe_Country_Code::SWITZERLAND, \WC_Stripe_Country_Code::CYPRUS, \WC_Stripe_Country_Code::CZECH_REPUBLIC, \WC_Stripe_Country_Code::GERMANY, \WC_Stripe_Country_Code::DENMARK, \WC_Stripe_Country_Code::ESTONIA, \WC_Stripe_Country_Code::SPAIN, \WC_Stripe_Country_Code::FINLAND, \WC_Stripe_Country_Code::FRANCE, \WC_Stripe_Country_Code::UNITED_KINGDOM, \WC_Stripe_Country_Code::GIBRALTAR, \WC_Stripe_Country_Code::GREECE, \WC_Stripe_Country_Code::HONG_KONG, \WC_Stripe_Country_Code::CROATIA, \WC_Stripe_Country_Code::HUNGARY, \WC_Stripe_Country_Code::IRELAND, \WC_Stripe_Country_Code::ITALY, \WC_Stripe_Country_Code::JAPAN, \WC_Stripe_Country_Code::LIECHTENSTEIN, \WC_Stripe_Country_Code::LITHUANIA, \WC_Stripe_Country_Code::LUXEMBOURG, \WC_Stripe_Country_Code::LATVIA, \WC_Stripe_Country_Code::MALTA, \WC_Stripe_Country_Code::MALAYSIA, \WC_Stripe_Country_Code::NETHERLANDS, \WC_Stripe_Country_Code::NORWAY, \WC_Stripe_Country_Code::NEW_ZEALAND, \WC_Stripe_Country_Code::PORTUGAL, \WC_Stripe_Country_Code::ROMANIA, \WC_Stripe_Country_Code::SWEDEN, \WC_Stripe_Country_Code::SINGAPORE, \WC_Stripe_Country_Code::SLOVENIA, \WC_Stripe_Country_Code::SLOVAKIA, \WC_Stripe_Country_Code::UNITED_STATES];
    /**
     * Buyer eligibility is gated by having an Alipay account, not by country.
     *
     * @var string[]
     */
    protected const SUPPORTED_BILLING_COUNTRIES = [];
    /**
     * Constructor for alipay payment method
     */
    public function __construct()
    {
    }
    /**
     * Returns the currencies this UPE method supports for the Stripe account.
     * Documentation: https://docs.stripe.com/payments/alipay#supported-currencies.
     *
     * @return array
     */
    public function get_supported_currencies()
    {
    }
}
/**
 * Amazon Pay Payment Method class extending UPE base class.
 * Note that Amazon Pay only supports USD for US accounts.
 * Furthermore, Amazon Pay supports multiple currencies without supporting accounts from those
 * countries, including AUD, HKD, JPY, NOK, NZD, and ZAR.
 * In addition, Amazon Pay supports EUR transactions, but does not support accounts from all EU countries.
 *
 * @see https://docs.stripe.com/payments/amazon-pay
 */
class WC_Stripe_UPE_Payment_Method_Amazon_Pay extends \WC_Stripe_UPE_Payment_Method
{
    use \WC_Stripe_Subscriptions_Trait;
    public const STRIPE_ID = \WC_Stripe_Payment_Methods::AMAZON_PAY;
    /**
     * Stripe account countries that may enable Amazon Pay.
     *
     * @var string[]
     */
    protected const SUPPORTED_ACCOUNT_COUNTRIES = [\WC_Stripe_Country_Code::AUSTRIA, \WC_Stripe_Country_Code::BELGIUM, \WC_Stripe_Country_Code::CYPRUS, \WC_Stripe_Country_Code::DENMARK, \WC_Stripe_Country_Code::FRANCE, \WC_Stripe_Country_Code::GERMANY, \WC_Stripe_Country_Code::HUNGARY, \WC_Stripe_Country_Code::IRELAND, \WC_Stripe_Country_Code::ITALY, \WC_Stripe_Country_Code::LUXEMBOURG, \WC_Stripe_Country_Code::NETHERLANDS, \WC_Stripe_Country_Code::PORTUGAL, \WC_Stripe_Country_Code::SPAIN, \WC_Stripe_Country_Code::SWEDEN, \WC_Stripe_Country_Code::SWITZERLAND, \WC_Stripe_Country_Code::UNITED_KINGDOM, \WC_Stripe_Country_Code::UNITED_STATES];
    /**
     * Supported currencies for Amazon Pay.
     *
     * @var string[]
     */
    private const SUPPORTED_CURRENCIES = [\WC_Stripe_Currency_Code::AUSTRALIAN_DOLLAR, \WC_Stripe_Currency_Code::SWISS_FRANC, \WC_Stripe_Currency_Code::DANISH_KRONE, \WC_Stripe_Currency_Code::EURO, \WC_Stripe_Currency_Code::POUND_STERLING, \WC_Stripe_Currency_Code::HONG_KONG_DOLLAR, \WC_Stripe_Currency_Code::JAPANESE_YEN, \WC_Stripe_Currency_Code::NORWEGIAN_KRONE, \WC_Stripe_Currency_Code::NEW_ZEALAND_DOLLAR, \WC_Stripe_Currency_Code::SWEDISH_KRONA, \WC_Stripe_Currency_Code::UNITED_STATES_DOLLAR, \WC_Stripe_Currency_Code::SOUTH_AFRICAN_RAND];
    /**
     * Constructor for Amazon Pay payment method
     */
    public function __construct()
    {
    }
    /**
     * Returns the currencies this UPE method supports for the Stripe account.
     *
     * Amazon Pay has restrictions for US accounts, as they can only transact in USD.
     * All other accounts can transact in any currency.
     *
     * @return array Supported currencies.
     */
    public function get_supported_currencies()
    {
    }
    /**
     * Returns the supported currencies for the current Stripe account.
     *
     * @return string[] Supported currencies.
     */
    public static function get_amazon_pay_supported_currencies(): array
    {
    }
    /**
     * Returns whether the payment method is available for the Stripe account's country.
     *
     * Amazon Pay is available for the following countries: AT, BE, CY, DK, FR, DE, HU, IE, IT, LU, NL, PT, ES, SE, CH, GB, US.
     *
     * @return bool True if the payment method is available for the account's country, false otherwise.
     */
    public function is_available_for_account_country()
    {
    }
    /**
     * Returns whether the payment method is available for the Stripe account's country.
     *
     * Amazon Pay is available for the following countries: AT, BE, CY, DK, FR, DE, HU, IE, IT, LU, NL, PT, ES, SE, CH, GB, US.
     *
     * @return bool True if the payment method is available for the account's country, false otherwise.
     */
    public static function is_amazon_pay_available_for_account_country()
    {
    }
    /**
     * Create new WC payment token and add to user.
     *
     * @param int $user_id        WP_User ID
     * @param object $payment_method Stripe payment method object
     *
     * @return WC_Payment_Token_Amazon_Pay
     */
    public function create_payment_token_for_user($user_id, $payment_method)
    {
    }
    /**
     * Return if Amazon Pay is enabled.
     *
     * @param WC_Stripe_Payment_Gateway $gateway The gateway instance.
     *
     * @return bool
     */
    public static function is_amazon_pay_enabled(\WC_Stripe_Payment_Gateway $gateway)
    {
    }
    /**
     * Returns whether the payment method is available.
     *
     * Amazon Pay is rendered as an express checkout method only, for now.
     * We return false here so that it isn't considered available by WooCommerce
     * and rendered as a standard payment method at checkout.
     *
     * @return bool
     */
    public function is_available()
    {
    }
    /**
     * Returns whether the payment method requires automatic capture.
     *
     * @return bool
     */
    public function requires_automatic_capture()
    {
    }
}
/**
 * The Bacs Direct Debit Payment Method class extending UPE base class.
 *
 * @since 9.3.0
 */
class WC_Stripe_UPE_Payment_Method_Bacs_Debit extends \WC_Stripe_UPE_Payment_Method
{
    use \WC_Stripe_Subscriptions_Trait;
    /**
     * The Stripe ID for the payment method.
     */
    public const STRIPE_ID = \WC_Stripe_Payment_Methods::BACS_DEBIT;
    /**
     * Stripe account countries that may enable Bacs Direct Debit.
     *
     * @var string[]
     */
    protected const SUPPORTED_ACCOUNT_COUNTRIES = [\WC_Stripe_Country_Code::UNITED_KINGDOM];
    /**
     * Shopper billing countries permitted to use Bacs Direct Debit.
     *
     * @var string[]
     */
    protected const SUPPORTED_BILLING_COUNTRIES = [\WC_Stripe_Country_Code::UNITED_KINGDOM];
    /**
     * Constructor for Bacs Direct Debit payment method.
     */
    public function __construct()
    {
    }
    /**
     * Returns true if Bacs Direct Debit is available for processing payments.
     *
     * @return bool
     */
    public function is_enabled_at_checkout($order_id = \null, $account_domestic_currency = \null)
    {
    }
    /**
     * Creates a Bacs Direct Debit payment token for the customer.
     *
     * @param int      $user_id        The customer ID the payment token is associated with.
     * @param stdClass $payment_method The payment method object.
     *
     * @return WC_Payment_Token The payment token created.
     */
    public function create_payment_token_for_user($user_id, $payment_method)
    {
    }
    /**
     * Conditionally hides the Bacs payment gateway for specific scenarios.
     *
     * @return void
     */
    public function maybe_hide_bacs_payment_gateway()
    {
    }
    /**
     * Determines whether the Bacs payment gateway should be hidden on the "Add Payment Method" page.
     *
     * @return bool True if the Bacs payment gateway should be hidden, false otherwise.
     */
    public function should_hide_bacs_on_add_payment_method_page()
    {
    }
    /**
     * Determines whether the Bacs payment gateway should be hidden for pre-orders that are charged upon release.
     *
     * WooCommerce Pre-Orders allows merchants to choose when to charge customers.
     * If a product is set to be charged upon release, Bacs can't be used for now as setup intents are not supported for Bacs.
     *
     * @return bool True if Bacs should be hidden, false otherwise.
     */
    public function should_hide_bacs_for_pre_orders_charge_upon_release()
    {
    }
    /**
     * Determines whether the Bacs payment gateway should be hidden for subscriptions with free trials.
     *
     * If the cart contains a subscription with a free trial and the cart total amount is zero,
     * Bacs can't be used for now as setup intents are not supported for Bacs.
     *
     * @return bool True if Bacs should be hidden, false otherwise.
     */
    public function should_hide_bacs_for_subscriptions_with_free_trials()
    {
    }
    /**
     * Determines whether the Bacs payment gateway should be hidden on the change payment method page for subscriptions.
     *
     * @return bool True if the Bacs payment gateway should be hidden, false otherwise.
     */
    public function should_hide_bacs_on_change_subscription_payment_method_page()
    {
    }
}
/**
 * Bancontact Payment Method class extending UPE base class
 */
class WC_Stripe_UPE_Payment_Method_Bancontact extends \WC_Stripe_UPE_Payment_Method
{
    use \WC_Stripe_Subscriptions_Trait;
    public const STRIPE_ID = \WC_Stripe_Payment_Methods::BANCONTACT;
    /**
     * Stripe account countries where Bancontact is not supported.
     *
     * @var string[]
     */
    protected const UNSUPPORTED_ACCOUNT_COUNTRIES = [\WC_Stripe_Country_Code::BRAZIL, \WC_Stripe_Country_Code::MALAYSIA, \WC_Stripe_Country_Code::THAILAND, \WC_Stripe_Country_Code::UNITED_ARAB_EMIRATES];
    /**
     * Shopper billing countries permitted to use Bancontact.
     *
     * @var string[]
     */
    protected const SUPPORTED_BILLING_COUNTRIES = [\WC_Stripe_Country_Code::BELGIUM];
    /**
     * Constructor for Bancontact payment method
     */
    public function __construct()
    {
    }
    /**
     * Returns string representing payment method type
     * to query to retrieve saved payment methods from Stripe.
     */
    public function get_retrievable_type()
    {
    }
}
/**
 * Class that handles BECS Direct Debit as a UPE Payment Method.
 *
 * @extends WC_Stripe_UPE_Payment_Method
 */
class WC_Stripe_UPE_Payment_Method_Becs_Debit extends \WC_Stripe_UPE_Payment_Method
{
    use \WC_Stripe_Subscriptions_Trait;
    /**
     * Stripe's internal identifier for BECS Direct Debit.
     */
    public const STRIPE_ID = \WC_Stripe_Payment_Methods::BECS_DEBIT;
    /**
     * Stripe account countries that may enable BECS Direct Debit.
     *
     * @var string[]
     */
    protected const SUPPORTED_ACCOUNT_COUNTRIES = [\WC_Stripe_Country_Code::AUSTRALIA];
    /**
     * Shopper billing countries permitted to use BECS Direct Debit.
     *
     * @var string[]
     */
    protected const SUPPORTED_BILLING_COUNTRIES = [\WC_Stripe_Country_Code::AUSTRALIA];
    /**
     * Constructor for BECS Direct Debit payment method.
     */
    public function __construct()
    {
    }
    /**
     * Creates a BECS Debit payment token for the customer.
     *
     * @param int      $user_id        The customer ID the payment token is associated with.
     * @param stdClass $payment_method The payment method object.
     *
     * @return WC_Payment_Token_Becs_Debit|null The payment token created.
     */
    public function create_payment_token_for_user($user_id, $payment_method)
    {
    }
}
/**
 * The BLIK Payment Method class extending UPE base class
 */
class WC_Stripe_UPE_Payment_Method_BLIK extends \WC_Stripe_UPE_Payment_Method
{
    public const STRIPE_ID = \WC_Stripe_Payment_Methods::BLIK;
    /**
     * Stripe account countries that may not enable BLIK.
     *
     * @var string[]
     */
    protected const UNSUPPORTED_ACCOUNT_COUNTRIES = [\WC_Stripe_Country_Code::BRAZIL, \WC_Stripe_Country_Code::GIBRALTAR, \WC_Stripe_Country_Code::HONG_KONG, \WC_Stripe_Country_Code::JAPAN, \WC_Stripe_Country_Code::MALAYSIA, \WC_Stripe_Country_Code::MEXICO, \WC_Stripe_Country_Code::NEW_ZEALAND, \WC_Stripe_Country_Code::THAILAND, \WC_Stripe_Country_Code::UNITED_ARAB_EMIRATES];
    /**
     * Shopper billing countries permitted to use BLIK.
     *
     * @var string[]
     */
    protected const SUPPORTED_BILLING_COUNTRIES = [\WC_Stripe_Country_Code::POLAND];
    /**
     * Constructor for BLIK payment method
     */
    public function __construct()
    {
    }
    /**
     * Returns testing instructions to be printed at checkout in test mode.
     *
     * @param bool $show_optimized_checkout_instruction Deprecated. Whether to show optimized checkout instructions.
     * @param bool $include_test_mode_label Whether to include the "Test mode:" label prefix. Pass false for
     *                                      Blocks checkout, which already displays a Test Mode badge.
     * @return string
     */
    public function get_testing_instructions(bool $show_optimized_checkout_instruction = \false, bool $include_test_mode_label = \true)
    {
    }
    public function payment_fields()
    {
    }
    /**
     * Returns the supported customer locations for which charges for BLIK can be processed.
     *
     * @return array Supported customer locations.
     */
    public function get_available_billing_countries()
    {
    }
    /**
     * Determines whether BLIK should be hidden.
     *
     * It should hide for pre-orders that are charged upon release.
     * WooCommerce Pre-Orders allows merchants to choose when to charge customers.
     * BLIK only supports upfront charges.
     *
     * @return bool True if BLIK should be hidden, false otherwise.
     */
    public function should_hide_blik()
    {
    }
    /**
     * Conditionally hides BLIK in specific scenarios.
     */
    public function maybe_hide_blik()
    {
    }
}
/**
 * Boleto Payment Method class extending UPE base class
 */
class WC_Stripe_UPE_Payment_Method_Boleto extends \WC_Stripe_UPE_Payment_Method
{
    public const STRIPE_ID = \WC_Stripe_Payment_Methods::BOLETO;
    /**
     * Stripe account countries that may enable Boleto.
     *
     * @var string[]
     */
    protected const SUPPORTED_ACCOUNT_COUNTRIES = [\WC_Stripe_Country_Code::BRAZIL];
    /**
     * Shopper billing countries permitted to use Boleto.
     *
     * @var string[]
     */
    protected const SUPPORTED_BILLING_COUNTRIES = [\WC_Stripe_Country_Code::BRAZIL];
    /**
     * Constructor for Boleto payment method
     *
     * @since 5.8.0
     */
    public function __construct()
    {
    }
    /**
     * Adds on-hold as accepted status during webhook handling on orders paid with Boleto
     *
     * @param array    $allowed_statuses The allowed statuses.
     * @param WC_Order $order            The order object.
     * @return array
     */
    public function add_allowed_payment_processing_statuses($allowed_statuses, $order)
    {
    }
}
/**
 * The Cash App Pay Payment Method class extending UPE base class.
 */
class WC_Stripe_UPE_Payment_Method_Cash_App_Pay extends \WC_Stripe_UPE_Payment_Method
{
    use \WC_Stripe_Subscriptions_Trait;
    /**
     * The Stripe ID for the payment method.
     */
    public const STRIPE_ID = \WC_Stripe_Payment_Methods::CASHAPP_PAY;
    /**
     * Stripe account countries that may enable Cash App Pay.
     *
     * @var string[]
     */
    protected const SUPPORTED_ACCOUNT_COUNTRIES = [\WC_Stripe_Country_Code::UNITED_STATES];
    /**
     * Shopper billing countries permitted to use Cash App Pay.
     *
     * @var string[]
     */
    protected const SUPPORTED_BILLING_COUNTRIES = [\WC_Stripe_Country_Code::UNITED_STATES];
    /**
     * Constructor for Cash App payment method.
     */
    public function __construct()
    {
    }
    /**
     * Creates a Cash App Pay payment token for the customer.
     *
     * @param int      $user_id        The customer ID the payment token is associated with.
     * @param stdClass $payment_method The payment method object.
     *
     * @return WC_Payment_Token The payment token created.
     */
    public function create_payment_token_for_user($user_id, $payment_method)
    {
    }
    /**
     * Custom wallet payment method order received text (for mobile only). This identifies the order failed and displays the error message.
     *
     * @param string   $text Default text.
     * @param WC_Order $order Order data.
     * @return string
     */
    public function order_received_text_for_wallet_failure($text, $order)
    {
    }
}
/**
 * Class WC_Stripe_UPE_Payment_Method_CC
 */
/**
 * Credit card Payment Method class extending UPE base class
 */
class WC_Stripe_UPE_Payment_Method_CC extends \WC_Stripe_UPE_Payment_Method
{
    use \WC_Stripe_Subscriptions_Trait;
    public const STRIPE_ID = \WC_Stripe_Payment_Methods::CARD;
    /**
     * Constructor for card payment method
     */
    public function __construct()
    {
    }
    /**
     * Whether the save-to-account checkbox should be shown on classic checkout.
     *
     * When Link is enabled, Link handles save consent via the Payment Element,
     * so the store-level checkbox is hidden for card.
     *
     * @return bool
     */
    public function should_show_save_option()
    {
    }
    /**
     * Returns payment method title
     *
     * @param stdClass|array|bool $payment_details Optional payment details from charge object.
     *
     * @return string
     */
    public function get_title($payment_details = \false)
    {
    }
    /**
     * Create and return WC payment token for user.
     *
     * This will be used from the WC_Stripe_Payment_Tokens service
     * as opposed to WC_Stripe_UPE_Payment_Gateway.
     *
     * @param string $user_id        WP_User ID
     * @param object $payment_method Stripe payment method object
     *
     * @return WC_Stripe_Payment_Token_CC
     */
    public function create_payment_token_for_user($user_id, $payment_method)
    {
    }
    /**
     * Returns boolean dependent on whether capability
     * for site account is enabled for payment method.
     *
     * @return bool
     */
    public function is_capability_active()
    {
    }
    /**
     * The Credit Card method allows automatic capture.
     *
     * @inheritDoc
     */
    public function requires_automatic_capture()
    {
    }
    /**
     * Returns testing credentials to be printed at checkout in test mode.
     *
     * @param bool $show_optimized_checkout_instruction Deprecated. Whether to show optimized checkout instructions.
     * @param bool $include_test_mode_label Whether to include the "Test mode:" label prefix. Pass false for
     *                                      Blocks checkout, which already displays a Test Mode badge.
     * @return string
     */
    public function get_testing_instructions(bool $show_optimized_checkout_instruction = \false, bool $include_test_mode_label = \true)
    {
    }
}
/**
 * EPS Payment Method class extending UPE base class
 */
class WC_Stripe_UPE_Payment_Method_Eps extends \WC_Stripe_UPE_Payment_Method
{
    public const STRIPE_ID = \WC_Stripe_Payment_Methods::EPS;
    /**
     * Stripe account countries that may not enable EPS.
     *
     * @var string[]
     */
    protected const UNSUPPORTED_ACCOUNT_COUNTRIES = [\WC_Stripe_Country_Code::BRAZIL, \WC_Stripe_Country_Code::MALAYSIA, \WC_Stripe_Country_Code::THAILAND, \WC_Stripe_Country_Code::UNITED_ARAB_EMIRATES];
    /**
     * Shopper billing countries permitted to use EPS.
     *
     * @var string[]
     */
    protected const SUPPORTED_BILLING_COUNTRIES = [\WC_Stripe_Country_Code::AUSTRIA];
    /**
     * Constructor for EPS payment method
     */
    public function __construct()
    {
    }
}
/**
 * The giropay Payment Method class extending UPE base class
 */
class WC_Stripe_UPE_Payment_Method_Giropay extends \WC_Stripe_UPE_Payment_Method
{
    public const STRIPE_ID = \WC_Stripe_Payment_Methods::GIROPAY;
    /**
     * Stripe account countries that may enable giropay. Last-known data; giropay was
     * deprecated by Stripe on 2024-06-30. is_enabled_at_checkout() returns false.
     *
     * @var string[]
     */
    protected const SUPPORTED_ACCOUNT_COUNTRIES = [];
    /**
     * Shopper billing countries permitted to use giropay (last-known data).
     *
     * @var string[]
     */
    protected const SUPPORTED_BILLING_COUNTRIES = [\WC_Stripe_Country_Code::GERMANY];
    /**
     * Constructor for giropay payment method
     */
    public function __construct()
    {
    }
    /**
     * Returns boolean dependent on whether payment method
     * can be used at checkout
     *
     * @param int|null    $order_id
     * @param string|null $account_domestic_currency The account's default currency.
     * @return bool
     */
    public function is_enabled_at_checkout($order_id = \null, $account_domestic_currency = \null)
    {
    }
}
/**
 * The iDEAL Payment Method class extending UPE base class
 */
class WC_Stripe_UPE_Payment_Method_Ideal extends \WC_Stripe_UPE_Payment_Method
{
    use \WC_Stripe_Subscriptions_Trait;
    public const STRIPE_ID = \WC_Stripe_Payment_Methods::IDEAL;
    /**
     * Stripe account countries that may not enable iDEAL | Wero.
     *
     * @var string[]
     */
    protected const UNSUPPORTED_ACCOUNT_COUNTRIES = [\WC_Stripe_Country_Code::BRAZIL, \WC_Stripe_Country_Code::MALAYSIA, \WC_Stripe_Country_Code::THAILAND, \WC_Stripe_Country_Code::UNITED_ARAB_EMIRATES];
    /**
     * Shopper billing countries permitted to use iDEAL | Wero.
     *
     * @var string[]
     */
    protected const SUPPORTED_BILLING_COUNTRIES = [\WC_Stripe_Country_Code::NETHERLANDS];
    /**
     * Constructor for iDEAL payment method
     */
    public function __construct()
    {
    }
    /**
     * Returns string representing payment method type
     * to query to retrieve saved payment methods from Stripe.
     */
    public function get_retrievable_type()
    {
    }
}
/**
 * The Klarna Payment Method class extending UPE base class
 */
class WC_Stripe_UPE_Payment_Method_Klarna extends \WC_Stripe_UPE_Payment_Method
{
    use \WC_Stripe_Subscriptions_Trait;
    public const STRIPE_ID = \WC_Stripe_Payment_Methods::KLARNA;
    /**
     * Stripe account countries that may enable Klarna.
     *
     * @var string[]
     */
    protected const SUPPORTED_ACCOUNT_COUNTRIES = [\WC_Stripe_Country_Code::AUSTRALIA, \WC_Stripe_Country_Code::AUSTRIA, \WC_Stripe_Country_Code::BELGIUM, \WC_Stripe_Country_Code::CANADA, \WC_Stripe_Country_Code::CROATIA, \WC_Stripe_Country_Code::CYPRUS, \WC_Stripe_Country_Code::CZECH_REPUBLIC, \WC_Stripe_Country_Code::DENMARK, \WC_Stripe_Country_Code::ESTONIA, \WC_Stripe_Country_Code::FINLAND, \WC_Stripe_Country_Code::FRANCE, \WC_Stripe_Country_Code::GERMANY, \WC_Stripe_Country_Code::GREECE, \WC_Stripe_Country_Code::IRELAND, \WC_Stripe_Country_Code::ITALY, \WC_Stripe_Country_Code::LATVIA, \WC_Stripe_Country_Code::LITHUANIA, \WC_Stripe_Country_Code::LUXEMBOURG, \WC_Stripe_Country_Code::MALTA, \WC_Stripe_Country_Code::NETHERLANDS, \WC_Stripe_Country_Code::NEW_ZEALAND, \WC_Stripe_Country_Code::NORWAY, \WC_Stripe_Country_Code::POLAND, \WC_Stripe_Country_Code::PORTUGAL, \WC_Stripe_Country_Code::ROMANIA, \WC_Stripe_Country_Code::SLOVAKIA, \WC_Stripe_Country_Code::SLOVENIA, \WC_Stripe_Country_Code::SPAIN, \WC_Stripe_Country_Code::SWEDEN, \WC_Stripe_Country_Code::SWITZERLAND, \WC_Stripe_Country_Code::UNITED_KINGDOM, \WC_Stripe_Country_Code::UNITED_STATES];
    /**
     * Shopper billing countries permitted to use Klarna — union of all billing countries Klarna
     * ever accepts. The per-account cross-border matrix is refined in get_available_billing_countries().
     *
     * @var string[]
     */
    protected const SUPPORTED_BILLING_COUNTRIES = [\WC_Stripe_Country_Code::AUSTRIA, \WC_Stripe_Country_Code::AUSTRALIA, \WC_Stripe_Country_Code::BELGIUM, \WC_Stripe_Country_Code::CANADA, \WC_Stripe_Country_Code::SWITZERLAND, \WC_Stripe_Country_Code::CZECH_REPUBLIC, \WC_Stripe_Country_Code::GERMANY, \WC_Stripe_Country_Code::DENMARK, \WC_Stripe_Country_Code::SPAIN, \WC_Stripe_Country_Code::FINLAND, \WC_Stripe_Country_Code::FRANCE, \WC_Stripe_Country_Code::UNITED_KINGDOM, \WC_Stripe_Country_Code::GREECE, \WC_Stripe_Country_Code::IRELAND, \WC_Stripe_Country_Code::ITALY, \WC_Stripe_Country_Code::NETHERLANDS, \WC_Stripe_Country_Code::NORWAY, \WC_Stripe_Country_Code::NEW_ZEALAND, \WC_Stripe_Country_Code::POLAND, \WC_Stripe_Country_Code::PORTUGAL, \WC_Stripe_Country_Code::ROMANIA, \WC_Stripe_Country_Code::SWEDEN, \WC_Stripe_Country_Code::UNITED_STATES];
    /**
     * Constructor for Klarna payment method
     */
    public function __construct()
    {
    }
    /**
     * Returns the supported customer locations for which charges for a payment method can be processed.
     *
     * Klarna has unique requirements for domestic transactions. The customer must be located in the same country as the merchant's Stripe account.
     * Additionally, if the merchant is in the EEA, the country they can transact with depends on the presentment currency.
     *
     * EUR stores can transact with other EUR countries. Stores with currencies like GBP, CHF, etc. can only transact with customers located in those countries.
     * This creates the following unique situations:
     *  - Stores presenting EUR, with a Stripe account in any EEA country including Switzerland or the UK can transact with countries where Euros are the standard currency: AT, BE, FI, FR, GR, DE, IE, IT, NL, PT, ES.
     *  - Stores presenting GBP with a Stripe account in any EEA country including Switzerland or the UK can transact with: GB.
     *  - Stores presenting NOK with a Stripe account in France, for example, cannot sell into France. They can only sell into Norway.
     *
     * @see https://docs.stripe.com/payments/klarna#:~:text=Merchant%20country%20availability
     *
     * @return array Supported customer locations.
     */
    public function get_available_billing_countries()
    {
    }
    /**
     * Returns the currencies this UPE method supports for the Stripe account.
     *
     * Klarna has unique requirements for domestic transactions. The customer must be located in the same country as the merchant's Stripe account and the currency must match.
     * - Stores connected to US account and presenting USD can only transact with customers located in the US.
     * - Stores connected to US account and presenting non-USD currency can not transact with customers irrespective of their location.
     *
     * Additionally, if the merchant is in the EEA, the country they can transact with depends on the presentment currency.
     * EUR stores can transact with other EUR countries. Stores with currencies like GBP, CHF, etc. can only transact with customers located in those countries.
     * This creates the following unique situations:
     *  - Stores presenting EUR, with a Stripe account in any EEA country including Switzerland or the UK can transact with countries where Euros are the standard currency: AT, BE, FI, FR, GR, DE, IE, IT, NL, PT, ES.
     *  - Stores presenting GBP with a Stripe account in any EEA country including Switzerland or the UK can transact with: GB.
     *  - Stores presenting NOK with a Stripe account in France, for example, cannot sell into France. They can only sell into Norway.
     *
     * @return array Supported currencies.
     */
    public function get_supported_currencies()
    {
    }
    /**
     * Returns whether the payment method requires automatic capture.
     *
     * @inheritDoc
     */
    public function requires_automatic_capture()
    {
    }
    /**
     * Returns true if the UPE method is available.
     *
     * @inheritDoc
     */
    public function is_available()
    {
    }
    /**
     * Creates a Klarna payment token for the customer.
     *
     * @param int      $user_id        The customer ID the payment token is associated with.
     * @param stdClass $payment_method The payment method object.
     *
     * @return WC_Payment_Token The payment token created.
     */
    public function create_payment_token_for_user($user_id, $payment_method)
    {
    }
}
/**
 * Link Payment Method class extending UPE base class
 */
class WC_Stripe_UPE_Payment_Method_Link extends \WC_Stripe_UPE_Payment_Method
{
    public const STRIPE_ID = \WC_Stripe_Payment_Methods::LINK;
    /**
     * Stripe account countries where Link is not available.
     *
     * @var string[]
     */
    protected const UNSUPPORTED_ACCOUNT_COUNTRIES = [\WC_Stripe_Country_Code::BRAZIL, \WC_Stripe_Country_Code::THAILAND];
    /**
     * Constructor for Link payment method
     */
    public function __construct()
    {
    }
    /**
     * Link handles its own save consent via the Payment Element, so the
     * store-level save checkbox is never needed for Link.
     *
     * @return bool
     */
    public function should_show_save_option()
    {
    }
    /**
     * Return if Stripe Link is enabled
     *
     * @param WC_Stripe_UPE_Payment_Gateway $gateway The gateway instance.
     * @return bool
     */
    public static function is_link_enabled(\WC_Stripe_UPE_Payment_Gateway $gateway)
    {
    }
    /**
     * Create new WC payment token and add to user.
     *
     * @param int $user_id        WP_User ID
     * @param object $payment_method Stripe payment method object
     *
     * @return WC_Payment_Token_Link
     */
    public function create_payment_token_for_user($user_id, $payment_method)
    {
    }
    /**
     * Returns true if the UPE method is available.
     *
     * Link isn't like a traditional UPE payment method as it is not shown as a standard payment method at checkout.
     * Customers use the Stripe Link button and the existing credit card fields to enter their payment details. The payment is then treated as a card.
     *
     * We return false here so the payment method isn't considered available by WooCommerce and rendered as a payment method at checkout.
     *
     * @return bool
     */
    public function is_available()
    {
    }
    /**
     * Returns whether the payment method requires automatic capture.
     * By default all the UPE payment methods require automatic capture, except for "card" and "link".
     *
     * @return bool
     */
    public function requires_automatic_capture()
    {
    }
    /**
     * Filters the gateway title to reflect Link as the payment method.
     *
     * @param string $title The gateway title.
     * @param string $id The gateway ID.
     * @return string
     */
    public function filter_gateway_title($title, $id)
    {
    }
}
/**
 * The Multibanco Payment Method class extending UPE base class
 */
class WC_Stripe_UPE_Payment_Method_Multibanco extends \WC_Stripe_UPE_Payment_Method
{
    public const STRIPE_ID = \WC_Stripe_Payment_Methods::MULTIBANCO;
    /**
     * Stripe account countries that may enable Multibanco.
     *
     * @var string[]
     */
    protected const SUPPORTED_ACCOUNT_COUNTRIES = [\WC_Stripe_Country_Code::AUSTRIA, \WC_Stripe_Country_Code::BELGIUM, \WC_Stripe_Country_Code::BULGARIA, \WC_Stripe_Country_Code::SWITZERLAND, \WC_Stripe_Country_Code::CYPRUS, \WC_Stripe_Country_Code::CZECH_REPUBLIC, \WC_Stripe_Country_Code::GERMANY, \WC_Stripe_Country_Code::DENMARK, \WC_Stripe_Country_Code::ESTONIA, \WC_Stripe_Country_Code::SPAIN, \WC_Stripe_Country_Code::FINLAND, \WC_Stripe_Country_Code::FRANCE, \WC_Stripe_Country_Code::UNITED_KINGDOM, \WC_Stripe_Country_Code::GIBRALTAR, \WC_Stripe_Country_Code::GREECE, \WC_Stripe_Country_Code::CROATIA, \WC_Stripe_Country_Code::HUNGARY, \WC_Stripe_Country_Code::IRELAND, \WC_Stripe_Country_Code::ITALY, \WC_Stripe_Country_Code::LIECHTENSTEIN, \WC_Stripe_Country_Code::LITHUANIA, \WC_Stripe_Country_Code::LUXEMBOURG, \WC_Stripe_Country_Code::LATVIA, \WC_Stripe_Country_Code::MALTA, \WC_Stripe_Country_Code::NETHERLANDS, \WC_Stripe_Country_Code::NORWAY, \WC_Stripe_Country_Code::POLAND, \WC_Stripe_Country_Code::PORTUGAL, \WC_Stripe_Country_Code::ROMANIA, \WC_Stripe_Country_Code::SWEDEN, \WC_Stripe_Country_Code::SLOVENIA, \WC_Stripe_Country_Code::SLOVAKIA, \WC_Stripe_Country_Code::UNITED_STATES];
    /**
     * Shopper billing countries permitted to use Multibanco.
     *
     * @var string[]
     */
    protected const SUPPORTED_BILLING_COUNTRIES = [\WC_Stripe_Country_Code::PORTUGAL];
    /**
     * Constructor for Multibanco payment method
     */
    public function __construct()
    {
    }
    /**
     * Output for the order received page.
     *
     * @param int $order_id The order ID.
     * @return void
     */
    public function thankyou_page($order_id)
    {
    }
    /**
     * Add content to the WC emails.
     *
     * @param WC_Order $order
     * @param bool     $sent_to_admin
     * @param bool     $plain_text
     * @return void
     */
    public function email_instructions($order, $sent_to_admin, $plain_text = \false)
    {
    }
    /**
     * Gets Multibanco payment instructions for the customer.
     *
     * @param WC_Order $order      The order object.
     * @param bool     $plain_text Whether to output as plain text.
     * @return void
     */
    public function get_instructions($order, $plain_text = \false)
    {
    }
    /**
     * Saves Multibanco information to the order meta for later use.
     *
     * @param WC_Order $order          The order object.
     * @param object   $payment_intent The PaymentIntent object.
     * @return void
     */
    public function save_instructions($order, $payment_intent)
    {
    }
    /**
     * Adds on-hold as accepted status during webhook handling on orders paid with Multibanco
     *
     * @param array    $allowed_statuses The allowed statuses.
     * @param WC_Order $order            The order object.
     * @return array
     */
    public function add_allowed_payment_processing_statuses($allowed_statuses, $order)
    {
    }
}
/**
 * Class WC_Stripe_UPE_Payment_Method_OC
 *
 * This class represents the Stripe UPE payment method for the Optimized Checkout (OC) flow.
 */
class WC_Stripe_UPE_Payment_Method_OC extends \WC_Stripe_UPE_Payment_Method
{
    use \WC_Stripe_Subscriptions_Trait;
    public const STRIPE_ID = \WC_Stripe_Payment_Methods::OC;
    private const DEFAULT_TITLE = 'Stripe';
    /**
     * Constructor for the Optimized Checkout payment method (which renders all methods).
     */
    public function __construct()
    {
    }
    /**
     * Returns payment method title
     *
     * @param stdClass|array|bool $payment_details Optional payment details from charge object.
     *
     * @return string
     */
    public function get_title($payment_details = \false)
    {
    }
    /**
     * Returns the alternative title for the Optimized Checkout payment method.
     *
     * @return string
     */
    public static function get_alternative_title(): string
    {
    }
    /**
     * Returns the title shown in classic shortcode checkout when
     * Optimized Checkout is enabled.
     *
     * @return string
     */
    public static function get_classic_title(): string
    {
    }
    /**
     * Returns true if the UPE method is available.
     *
     * @inheritDoc
     */
    public function is_available()
    {
    }
    /**
     * Returns string representing payment method type
     * to query to retrieve saved payment methods from Stripe.
     *
     * @inheritDoc
     */
    public function get_retrievable_type()
    {
    }
    /**
     * Returns boolean dependent on whether capability
     * for site account is enabled for payment method.
     *
     * @inheritDoc
     */
    public function is_capability_active()
    {
    }
    /**
     * The Optimized Checkout method allows automatic capture.
     *
     * @inheritDoc
     */
    public function requires_automatic_capture()
    {
    }
    /**
     * Returns testing credentials to be printed at checkout in test mode.
     *
     * @param bool $show_optimized_checkout_instruction Deprecated. Whether to show optimized checkout instructions.
     * @param bool $include_test_mode_label Whether to include the "Test mode:" label prefix. Pass false for
     *                                      Blocks checkout, which already displays a Test Mode badge.
     * @return string
     */
    public function get_testing_instructions(bool $show_optimized_checkout_instruction = \false, bool $include_test_mode_label = \true)
    {
    }
}
/**
 * OXXO Payment Method class extending UPE base class
 */
class WC_Stripe_UPE_Payment_Method_Oxxo extends \WC_Stripe_UPE_Payment_Method
{
    public const STRIPE_ID = \WC_Stripe_Payment_Methods::OXXO;
    /**
     * Stripe account countries that may enable OXXO.
     *
     * @var string[]
     */
    protected const SUPPORTED_ACCOUNT_COUNTRIES = [\WC_Stripe_Country_Code::MEXICO];
    /**
     * Shopper billing countries permitted to use OXXO.
     *
     * @var string[]
     */
    protected const SUPPORTED_BILLING_COUNTRIES = [\WC_Stripe_Country_Code::MEXICO];
    /**
     * Constructor for OXXO payment method
     *
     * @since 5.8.0
     */
    public function __construct()
    {
    }
    /**
     * Adds on-hold as accepted status during webhook handling on orders paid with OXXO
     *
     * @param array    $allowed_statuses The allowed statuses.
     * @param WC_Order $order            The order object.
     * @return array
     */
    public function add_allowed_payment_processing_statuses($allowed_statuses, $order)
    {
    }
}
/**
 * Przelewy24 Payment Method class extending UPE base class
 */
class WC_Stripe_UPE_Payment_Method_P24 extends \WC_Stripe_UPE_Payment_Method
{
    public const STRIPE_ID = \WC_Stripe_Payment_Methods::P24;
    /**
     * Stripe account countries that may not enable Przelewy24.
     *
     * @var string[]
     */
    protected const UNSUPPORTED_ACCOUNT_COUNTRIES = [\WC_Stripe_Country_Code::BRAZIL, \WC_Stripe_Country_Code::MALAYSIA, \WC_Stripe_Country_Code::THAILAND, \WC_Stripe_Country_Code::UNITED_ARAB_EMIRATES];
    /**
     * Shopper billing countries permitted to use Przelewy24.
     *
     * @var string[]
     */
    protected const SUPPORTED_BILLING_COUNTRIES = [\WC_Stripe_Country_Code::POLAND];
    /**
     * Constructor for Przelewy24 payment method
     */
    public function __construct()
    {
    }
}
/**
 * SEPA Payment Method class extending UPE base class
 */
class WC_Stripe_UPE_Payment_Method_Sepa extends \WC_Stripe_UPE_Payment_Method
{
    use \WC_Stripe_Subscriptions_Trait;
    public const STRIPE_ID = \WC_Stripe_Payment_Methods::SEPA_DEBIT;
    /**
     * Stripe account countries that may not enable SEPA Direct Debit.
     *
     * @var string[]
     */
    protected const UNSUPPORTED_ACCOUNT_COUNTRIES = [\WC_Stripe_Country_Code::BRAZIL, \WC_Stripe_Country_Code::MALAYSIA, \WC_Stripe_Country_Code::THAILAND, \WC_Stripe_Country_Code::UNITED_ARAB_EMIRATES];
    /**
     * Shopper billing countries permitted to use SEPA Direct Debit — the SEPA zone (countries whose banks
     * can issue a SEPA-compliant IBAN). Stripe's docs say "Europe / SEPA zone" without enumerating.
     *
     * @var string[]
     */
    protected const SUPPORTED_BILLING_COUNTRIES = [\WC_Stripe_Country_Code::ANDORRA, \WC_Stripe_Country_Code::AUSTRIA, \WC_Stripe_Country_Code::BELGIUM, \WC_Stripe_Country_Code::BULGARIA, \WC_Stripe_Country_Code::SWITZERLAND, \WC_Stripe_Country_Code::CYPRUS, \WC_Stripe_Country_Code::CZECH_REPUBLIC, \WC_Stripe_Country_Code::GERMANY, \WC_Stripe_Country_Code::DENMARK, \WC_Stripe_Country_Code::ESTONIA, \WC_Stripe_Country_Code::SPAIN, \WC_Stripe_Country_Code::FINLAND, \WC_Stripe_Country_Code::FRANCE, \WC_Stripe_Country_Code::UNITED_KINGDOM, \WC_Stripe_Country_Code::GIBRALTAR, \WC_Stripe_Country_Code::GREECE, \WC_Stripe_Country_Code::CROATIA, \WC_Stripe_Country_Code::HUNGARY, \WC_Stripe_Country_Code::IRELAND, \WC_Stripe_Country_Code::ICELAND, \WC_Stripe_Country_Code::ITALY, \WC_Stripe_Country_Code::LIECHTENSTEIN, \WC_Stripe_Country_Code::LITHUANIA, \WC_Stripe_Country_Code::LUXEMBOURG, \WC_Stripe_Country_Code::LATVIA, \WC_Stripe_Country_Code::MONACO, \WC_Stripe_Country_Code::MALTA, \WC_Stripe_Country_Code::NETHERLANDS, \WC_Stripe_Country_Code::NORWAY, \WC_Stripe_Country_Code::POLAND, \WC_Stripe_Country_Code::PORTUGAL, \WC_Stripe_Country_Code::ROMANIA, \WC_Stripe_Country_Code::SWEDEN, \WC_Stripe_Country_Code::SLOVENIA, \WC_Stripe_Country_Code::SLOVAKIA, \WC_Stripe_Country_Code::SAN_MARINO, \WC_Stripe_Country_Code::VATICAN_CITY];
    /**
     * Constructor for SEPA payment method
     *
     * @param WC_Payments_Token_Service $token_service Token class instance.
     */
    public function __construct()
    {
    }
    /**
     * Returns testing credentials to be printed at checkout in test mode.
     *
     * @param bool $show_optimized_checkout_instruction Deprecated. Whether to show optimized checkout instructions.
     * @param bool $include_test_mode_label Whether to include the "Test mode:" label prefix. Pass false for
     *                                      Blocks checkout, which already displays a Test Mode badge.
     * @return string
     */
    public function get_testing_instructions(bool $show_optimized_checkout_instruction = \false, bool $include_test_mode_label = \true)
    {
    }
    /**
     * Gets the payment method's icon.
     *
     * @return string The icon HTML.
     */
    public function get_icon()
    {
    }
}
/**
 * Sofort Payment Method class extending UPE base class
 */
class WC_Stripe_UPE_Payment_Method_Sofort extends \WC_Stripe_UPE_Payment_Method
{
    use \WC_Stripe_Subscriptions_Trait;
    public const STRIPE_ID = \WC_Stripe_Payment_Methods::SOFORT;
    /**
     * Constructor for Sofort payment method
     */
    public function __construct()
    {
    }
    /**
     * Sofort saves tokens as SEPA Direct Debit on the Stripe side, so saved
     * payment methods must be retrieved using the SEPA type rather than `sofort`.
     *
     * @return string
     */
    public function get_retrievable_type()
    {
    }
}
/**
 * The WeChat Pay Payment Method class extending UPE base class
 */
class WC_Stripe_UPE_Payment_Method_Wechat_Pay extends \WC_Stripe_UPE_Payment_Method
{
    public const STRIPE_ID = \WC_Stripe_Payment_Methods::WECHAT_PAY;
    /**
     * Stripe account countries that may enable WeChat Pay.
     *
     * @var string[]
     */
    protected const SUPPORTED_ACCOUNT_COUNTRIES = [\WC_Stripe_Country_Code::AUSTRIA, \WC_Stripe_Country_Code::AUSTRALIA, \WC_Stripe_Country_Code::BELGIUM, \WC_Stripe_Country_Code::CANADA, \WC_Stripe_Country_Code::SWITZERLAND, \WC_Stripe_Country_Code::GERMANY, \WC_Stripe_Country_Code::DENMARK, \WC_Stripe_Country_Code::SPAIN, \WC_Stripe_Country_Code::FINLAND, \WC_Stripe_Country_Code::FRANCE, \WC_Stripe_Country_Code::HONG_KONG, \WC_Stripe_Country_Code::IRELAND, \WC_Stripe_Country_Code::ITALY, \WC_Stripe_Country_Code::JAPAN, \WC_Stripe_Country_Code::LUXEMBOURG, \WC_Stripe_Country_Code::NETHERLANDS, \WC_Stripe_Country_Code::NORWAY, \WC_Stripe_Country_Code::PORTUGAL, \WC_Stripe_Country_Code::SWEDEN, \WC_Stripe_Country_Code::SINGAPORE, \WC_Stripe_Country_Code::UNITED_KINGDOM, \WC_Stripe_Country_Code::UNITED_STATES];
    /**
     * Constructor for WeChat Pay payment method
     */
    public function __construct()
    {
    }
    /**
     * Returns the currencies this UPE method supports for the Stripe account.
     * Documentation: https://docs.stripe.com/payments/wechat-pay#supported-currencies.
     *
     * @return array
     */
    public function get_supported_currencies()
    {
    }
}
/**
 * Interface for comparing payment method tokens with payment methods.
 */
interface WC_Stripe_Payment_Method_Comparison_Interface
{
    /**
     * Checks if the payment method token is equal a provided payment method.
     *
     * @param  object $payment_method Payment method object.
     * @return bool
     */
    public function is_equal_payment_method($payment_method): bool;
}
/**
 * Trait for handling payment method fingerprint property.
 */
trait WC_Stripe_Fingerprint_Trait
{
    /**
     * Returns the token fingerprint (unique identifier).
     *
     * @since  9.0.0
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string Fingerprint
     */
    public function get_fingerprint($context = 'view')
    {
    }
    /**
     * Set the token fingerprint (unique identifier).
     *
     * @since 9.0.0
     * @param string $fingerprint The fingerprint.
     * @return void
     */
    public function set_fingerprint(string $fingerprint)
    {
    }
}
// phpcs:disable WordPress.Files.FileName
/**
 * WooCommerce Stripe ACH Direct Debit Payment Token.
 *
 * Representation of a payment token for ACH.
 *
 * @class    WC_Payment_Token_ACH
 * @since    9.3.0
 */
class WC_Payment_Token_ACH extends \WC_Payment_Token implements \WC_Stripe_Payment_Method_Comparison_Interface
{
    use \WC_Stripe_Fingerprint_Trait;
    /**
     * Stores payment type.
     *
     * @var string
     */
    protected $type = \WC_Stripe_Payment_Methods::ACH;
    /**
     * Stores ACH payment token data.
     *
     * @var array
     */
    protected $extra_data = ['bank_name' => '', 'account_type' => '', 'last4' => '', 'payment_method_type' => \WC_Stripe_Payment_Methods::ACH, 'fingerprint' => ''];
    /**
     * Get type to display to user.
     *
     * @param  string $deprecated Deprecated since WooCommerce 3.0
     * @return string
     */
    public function get_display_name($deprecated = '')
    {
    }
    /**
     * Hook prefix
     */
    protected function get_hook_prefix()
    {
    }
    /**
     * Validate ACH payment tokens.
     *
     * These fields are required by all ACH payment tokens:
     * last4  - string Last 4 digits of the Account Number
     * bank_name - string Name of the bank
     * account_type - string Type of account (checking, savings)
     * fingerprint - string Unique identifier for the bank account
     *
     * @return boolean True if the passed data is valid
     */
    public function validate()
    {
    }
    /**
     * Get the bank name.
     *
     * @param string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_bank_name($context = 'view')
    {
    }
    /**
     * Set the bank name.
     *
     * @param string $bank_name The bank name.
     * @return void
     */
    public function set_bank_name($bank_name)
    {
    }
    /**
     * Get the account type.
     *
     * @param string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_account_type($context = 'view')
    {
    }
    /**
     * Set the account type.
     *
     * @param string $account_type The account type.
     * @return void
     */
    public function set_account_type($account_type)
    {
    }
    /**
     * Returns the last four digits.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string Last 4 digits
     */
    public function get_last4($context = 'view')
    {
    }
    /**
     * Set the last four digits.
     *
     * @param string $last4 The last 4 digits.
     * @return void
     */
    public function set_last4($last4)
    {
    }
    /**
     * Checks if the payment method token is equal a provided payment method.
     *
     * @inheritDoc
     */
    public function is_equal_payment_method($payment_method): bool
    {
    }
}
// phpcs:disable WordPress.Files.FileName
/**
 * WooCommerce Stripe ACSS Payment Token.
 *
 * Token for ACSS.
 *
 * @since 9.4.0
 */
class WC_Payment_Token_ACSS extends \WC_Payment_Token implements \WC_Stripe_Payment_Method_Comparison_Interface
{
    use \WC_Stripe_Fingerprint_Trait;
    /**
     * Token Type.
     *
     * @var string
     */
    protected $type = \WC_Stripe_Payment_Methods::ACSS_DEBIT;
    /**
     * ACSS payment token data.
     *
     * @var array
     */
    protected $extra_data = ['bank_name' => '', 'last4' => '', 'payment_method_type' => \WC_Stripe_Payment_Methods::ACSS_DEBIT, 'fingerprint' => ''];
    /**
     * Checks if the payment method token is equal a provided payment method.
     *
     * @param  object $payment_method Payment method object.
     * @return bool
     */
    public function is_equal_payment_method($payment_method): bool
    {
    }
    /**
     * Set the last four digits for the ACSS Debit Token.
     *
     * @param string $last4 The last 4 digits.
     * @return void
     */
    public function set_last4($last4)
    {
    }
    /**
     * Returns the last four digits of the ACSS Token.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string The last 4 digits.
     */
    public function get_last4($context = 'view')
    {
    }
    /**
     * Set Stripe payment method type.
     *
     * @param string $type Payment method type.
     * @return void
     */
    public function set_payment_method_type($type)
    {
    }
    /**
     * Returns Stripe payment method type.
     *
     * @param string $context What the value is for. Valid values are view and edit.
     * @return string $payment_method_type
     */
    public function get_payment_method_type($context = 'view')
    {
    }
    /**
     * Set the bank name.
     *
     * @param string $bank_name The bank name.
     * @return void
     */
    public function set_bank_name($bank_name)
    {
    }
    /**
     * Get the bank name.
     *
     * @param string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_bank_name($context = 'view')
    {
    }
    /**
     * Returns the name of the token to display.
     *
     * @param  string $deprecated Deprecated since WooCommerce 3.0
     * @return string
     */
    public function get_display_name($deprecated = '')
    {
    }
    /**
     * Hook prefix.
     */
    protected function get_hook_prefix()
    {
    }
}
// phpcs:disable WordPress.Files.FileName
/**
 * WooCommerce Stripe Amazon Pay Payment Token.
 *
 * Representation of a payment token for Amazon Pay.
 *
 * @class    WC_Payment_Token_Amazon_Pay
 */
class WC_Payment_Token_Amazon_Pay extends \WC_Payment_Token implements \WC_Stripe_Payment_Method_Comparison_Interface
{
    /**
     * Stores payment type.
     *
     * @var string
     */
    protected $type = \WC_Stripe_Payment_Methods::AMAZON_PAY;
    /**
     * Stores Amazon Pay payment token data.
     *
     * @var array
     */
    protected $extra_data = ['email' => ''];
    /**
     * Get type to display to user.
     *
     * @param  string $deprecated Deprecated since WooCommerce 3.0
     * @return string
     */
    public function get_display_name($deprecated = '')
    {
    }
    /**
     * Hook prefix
     */
    protected function get_hook_prefix()
    {
    }
    /**
     * Returns the customer email.
     *
     * @param string $context What the value is for. Valid values are view and edit.
     *
     * @return string Customer email.
     */
    public function get_email($context = 'view')
    {
    }
    /**
     * Set the customer email.
     *
     * @param string $email Customer email.
     * @return void
     */
    public function set_email($email)
    {
    }
    /**
     * Checks if the payment method token is equal a provided payment method.
     *
     * @inheritDoc
     */
    public function is_equal_payment_method($payment_method): bool
    {
    }
}
// phpcs:disable WordPress.Files.FileName
/**
 * WooCommerce Stripe Bacs Direct Debit Payment Token.
 *
 * Token for Bacs Direct Debit.
 *
 * @since 9.3.0
 */
class WC_Payment_Token_Bacs_Debit extends \WC_Payment_Token implements \WC_Stripe_Payment_Method_Comparison_Interface
{
    use \WC_Stripe_Fingerprint_Trait;
    /**
     * Token Type.
     *
     * @var string
     */
    protected $type = \WC_Stripe_Payment_Methods::BACS_DEBIT;
    /**
     * Bacs Debit payment token data.
     *
     * @var array
     */
    protected $extra_data = ['last4' => '', 'payment_method_type' => \WC_Stripe_Payment_Methods::BACS_DEBIT, 'fingerprint' => ''];
    /**
     * Checks if the payment method token is equal a provided payment method.
     *
     * @param  object $payment_method Payment method object.
     * @return bool
     */
    public function is_equal_payment_method($payment_method): bool
    {
    }
    /**
     * Set the last four digits for the Bacs Debit Token.
     *
     * @param string $last4 The last 4 digits.
     * @return void
     */
    public function set_last4($last4)
    {
    }
    /**
     * Hook prefix
     */
    protected function get_hook_prefix()
    {
    }
    /**
     * Returns the last four digits of the Bacs Debit Token.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string The last 4 digits.
     */
    public function get_last4($context = 'view')
    {
    }
    /**
     * Set Stripe payment method type.
     *
     * @param string $type Payment method type.
     * @return void
     */
    public function set_payment_method_type($type)
    {
    }
    /**
     * Returns Stripe payment method type.
     *
     * @param string $context What the value is for. Valid values are view and edit.
     * @return string $payment_method_type
     */
    public function get_payment_method_type($context = 'view')
    {
    }
    /**
     * Get type to display to user.
     *
     * @param  string $deprecated Deprecated since WooCommerce 3.0
     * @return string
     */
    public function get_display_name($deprecated = '')
    {
    }
}
// phpcs:disable WordPress.Files.FileName
/**
 * WooCommerce Stripe BECS Debit Payment Token.
 *
 * Representation of a payment token for BECS.
 *
 * @class    WC_Payment_Token_Becs_Debit
 * @since    9.4.0
 */
class WC_Payment_Token_Becs_Debit extends \WC_Payment_Token implements \WC_Stripe_Payment_Method_Comparison_Interface
{
    use \WC_Stripe_Fingerprint_Trait;
    /**
     * Stores payment type.
     *
     * @var string
     */
    protected $type = \WC_Stripe_Payment_Methods::BECS_DEBIT;
    /**
     * Stores BECS payment token data.
     *
     * @var array
     */
    protected $extra_data = ['last4' => '', 'payment_method_type' => \WC_Stripe_Payment_Methods::BECS_DEBIT, 'fingerprint' => ''];
    /**
     * Get type to display to user.
     *
     * @param  string $deprecated Deprecated since WooCommerce 3.0
     * @return string
     */
    public function get_display_name($deprecated = '')
    {
    }
    /**
     * Hook prefix
     */
    protected function get_hook_prefix()
    {
    }
    /**
     * Validate BECS Debit payment tokens.
     *
     * These fields are required by all BECS Debit payment tokens:
     * last4  - string Last 4 digits of the Account Number
     * bank_name - string Name of the bank
     * account_type - string Type of account (checking, savings)
     * fingerprint - string Unique identifier for the bank account
     *
     * @return boolean True if the passed data is valid
     */
    public function validate()
    {
    }
    /**
     * Returns the last four digits.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string Last 4 digits
     */
    public function get_last4($context = 'view')
    {
    }
    /**
     * Set the last four digits.
     *
     * @param string $last4 The last 4 digits.
     * @return void
     */
    public function set_last4($last4)
    {
    }
    /**
     * Checks if the payment method token is equal a provided payment method.
     *
     * @inheritDoc
     */
    public function is_equal_payment_method($payment_method): bool
    {
    }
}
class WC_Payment_Token_CashApp extends \WC_Payment_Token implements \WC_Stripe_Payment_Method_Comparison_Interface
{
    /**
     * Token Type.
     *
     * @var string
     */
    protected $type = \WC_Stripe_Payment_Methods::CASHAPP_PAY;
    /**
     * Extra data.
     *
     * @var string[]
     */
    protected $extra_data = ['cashtag' => ''];
    /**
     * Returns the name of the token to display
     *
     * @param  string $deprecated Deprecated since WooCommerce 3.0
     * @return string The name of the token to display
     */
    public function get_display_name($deprecated = '')
    {
    }
    /**
     * Sets the Cash App Pay $Cashtag for this token.
     *
     * @param string $cashtag A public identifier for buyers using Cash App.
     * @return void
     */
    public function set_cashtag($cashtag)
    {
    }
    /**
     * Fetches the Cash App Pay token's $Cashtag.
     *
     * @return string The Cash App Pay $Cashtag.
     */
    public function get_cashtag()
    {
    }
    /**
     * Checks if the payment method token is equal a provided payment method.
     *
     * @inheritDoc
     */
    public function is_equal_payment_method($payment_method): bool
    {
    }
    /**
     * Returns this token's hook prefix.
     *
     * @return string The hook prefix.
     */
    protected function get_hook_prefix()
    {
    }
}
class WC_Stripe_Payment_Token_CC extends \WC_Payment_Token_CC implements \WC_Stripe_Payment_Method_Comparison_Interface
{
    use \WC_Stripe_Fingerprint_Trait;
    /**
     * Constructor.
     *
     * @inheritDoc
     */
    public function __construct($token = '')
    {
    }
    /**
     * Returns the digital wallet the card was tokenized through, if any.
     *
     * @param string $context
     * @return string
     */
    public function get_wallet_type($context = 'view')
    {
    }
    /**
     * Stores the digital wallet the card was tokenized through.
     *
     * @param string $wallet_type
     * @return void
     */
    public function set_wallet_type(string $wallet_type)
    {
    }
    /**
     * Returns the shopper-facing wallet label, or '' for tokens we don't surface
     * wallet branding on (manual entry, `link`, anything unknown).
     *
     * @return string
     */
    public function get_wallet_brand_label(): string
    {
    }
    /**
     * Wraps the parent display name with wallet branding for Apple Pay /
     * Google Pay tokenized cards so the classic checkout radio matches the
     * My Account label, e.g. "Apple Pay (Visa) ending in 4242 (expires 03/27)".
     *
     * @inheritDoc
     */
    public function get_display_name($deprecated = '')
    {
    }
    /**
     * Checks if the payment method token is equal a provided payment method.
     *
     * @inheritDoc
     */
    public function is_equal_payment_method($payment_method): bool
    {
    }
}
class WC_Stripe_Klarna_Payment_Token extends \WC_Payment_Token implements \WC_Stripe_Payment_Method_Comparison_Interface
{
    /**
     * Token Type.
     *
     * @var string
     */
    protected $type = \WC_Stripe_Payment_Methods::KLARNA;
    /**
     * Extra data.
     *
     * @var string[]
     */
    protected $extra_data = ['dob' => ''];
    /**
     * Returns the name of the token to display
     *
     * @param  string $deprecated Deprecated since WooCommerce 3.0
     * @return string The name of the token to display
     */
    public function get_display_name($deprecated = '')
    {
    }
    /**
     * Sets the Klarna token's date of birth.
     *
     * @param string $dob The formatted date of birth string (YYYY-mm-dd).
     * @return void
     */
    public function set_dob(string $dob)
    {
    }
    /**
     * Fetches Klarna token's date of birth (formatted to Y-m-d).
     *
     * @return string The Klarna token's date of birth.
     */
    public function get_dob(): string
    {
    }
    /**
     * Sets the Klarna token's date of birth based on the object returned from the Stripe payment method API.
     *
     * @param object $dob The raw `dob` object from Stripe.
     * @see https://docs.stripe.com/api/payment_methods/object#payment_method_object-klarna-dob
     * @return void
     */
    public function set_dob_from_object(object $dob)
    {
    }
    /**
     * Checks if the payment method token is equal a provided payment method.
     *
     * @inheritDoc
     */
    public function is_equal_payment_method($payment_method): bool
    {
    }
    /**
     * Returns this token's hook prefix.
     *
     * @return string The hook prefix.
     */
    protected function get_hook_prefix()
    {
    }
    /**
     * Formats the date of birth for display.
     *
     * @param $dob object The date of birth object.
     * @return string The formatted date of birth.
     */
    protected function format_dob(object $dob)
    {
    }
}
// phpcs:disable WordPress.Files.FileName
/**
 * WooCommerce Stripe Link Payment Token.
 *
 * Representation of a payment token for Link.
 *
 * @class    WC_Payment_Token_Link
 */
class WC_Payment_Token_Link extends \WC_Payment_Token implements \WC_Stripe_Payment_Method_Comparison_Interface
{
    /**
     * Stores payment type.
     *
     * @var string
     */
    protected $type = \WC_Stripe_Payment_Methods::LINK;
    /**
     * Stores Link payment token data.
     *
     * @var array
     */
    protected $extra_data = ['email' => ''];
    /**
     * Get type to display to user.
     *
     * @param  string $deprecated Deprecated since WooCommerce 3.0
     * @return string
     */
    public function get_display_name($deprecated = '')
    {
    }
    /**
     * Hook prefix
     */
    protected function get_hook_prefix()
    {
    }
    /**
     * Set Stripe payment method type.
     *
     * @param string $type Payment method type.
     * @return void
     */
    public function set_payment_method_type($type)
    {
    }
    /**
     * Returns Stripe payment method type.
     *
     * @param string $context What the value is for. Valid values are view and edit.
     * @return string $payment_method_type
     */
    public function get_payment_method_type($context = 'view')
    {
    }
    /**
     * Returns the customer email.
     *
     * @param string $context What the value is for. Valid values are view and edit.
     *
     * @return string Customer email.
     */
    public function get_email($context = 'view')
    {
    }
    /**
     * Set the customer email.
     *
     * @param string $email Customer email.
     * @return void
     */
    public function set_email($email)
    {
    }
    /**
     * Checks if the payment method token is equal a provided payment method.
     *
     * @inheritDoc
     */
    public function is_equal_payment_method($payment_method): bool
    {
    }
}
/**
 * Handles and process WC payment tokens API.
 * Seen in checkout page and my account->add payment method page.
 *
 * @since 4.0.0
 */
class WC_Stripe_Payment_Tokens
{
    /**
     * Instance of this class.
     *
     * @var WC_Stripe_Payment_Tokens|null
     */
    private static $_this;
    /**
     * List of reusable payment gateways by payment method.
     *
     * The keys are the possible values for the type of the PaymentMethod object in Stripe.
     * https://docs.stripe.com/api/payment_methods/object#payment_method_object-type
     *
     * The values are the related gateway ID we use for them in the extension.
     *
     * @var array
     */
    public const UPE_REUSABLE_GATEWAYS_BY_PAYMENT_METHOD = [\WC_Stripe_UPE_Payment_Method_CC::STRIPE_ID => \WC_Stripe_UPE_Payment_Gateway::ID, \WC_Stripe_UPE_Payment_Method_Link::STRIPE_ID => \WC_Stripe_UPE_Payment_Gateway::ID, \WC_Stripe_UPE_Payment_Method_Amazon_Pay::STRIPE_ID => \WC_Stripe_UPE_Payment_Gateway::ID, \WC_Stripe_UPE_Payment_Method_ACH::STRIPE_ID => \WC_Stripe_UPE_Payment_Gateway::ID . '_' . \WC_Stripe_UPE_Payment_Method_ACH::STRIPE_ID, \WC_Stripe_UPE_Payment_Method_Bancontact::STRIPE_ID => \WC_Stripe_UPE_Payment_Gateway::ID . '_' . \WC_Stripe_UPE_Payment_Method_Bancontact::STRIPE_ID, \WC_Stripe_UPE_Payment_Method_Ideal::STRIPE_ID => \WC_Stripe_UPE_Payment_Gateway::ID . '_' . \WC_Stripe_UPE_Payment_Method_Ideal::STRIPE_ID, \WC_Stripe_UPE_Payment_Method_Sepa::STRIPE_ID => \WC_Stripe_UPE_Payment_Gateway::ID . '_' . \WC_Stripe_UPE_Payment_Method_Sepa::STRIPE_ID, \WC_Stripe_UPE_Payment_Method_Sofort::STRIPE_ID => \WC_Stripe_UPE_Payment_Gateway::ID . '_' . \WC_Stripe_UPE_Payment_Method_Sofort::STRIPE_ID, \WC_Stripe_UPE_Payment_Method_Cash_App_Pay::STRIPE_ID => \WC_Stripe_UPE_Payment_Gateway::ID . '_' . \WC_Stripe_UPE_Payment_Method_Cash_App_Pay::STRIPE_ID, \WC_Stripe_UPE_Payment_Method_Bacs_Debit::STRIPE_ID => \WC_Stripe_UPE_Payment_Gateway::ID . '_' . \WC_Stripe_UPE_Payment_Method_Bacs_Debit::STRIPE_ID, \WC_Stripe_UPE_Payment_Method_ACSS::STRIPE_ID => \WC_Stripe_UPE_Payment_Gateway::ID . '_' . \WC_Stripe_UPE_Payment_Method_ACSS::STRIPE_ID, \WC_Stripe_UPE_Payment_Method_Becs_Debit::STRIPE_ID => \WC_Stripe_UPE_Payment_Gateway::ID . '_' . \WC_Stripe_UPE_Payment_Method_Becs_Debit::STRIPE_ID, \WC_Stripe_UPE_Payment_Method_Klarna::STRIPE_ID => \WC_Stripe_UPE_Payment_Gateway::ID . '_' . \WC_Stripe_UPE_Payment_Method_Klarna::STRIPE_ID];
    /**
     * Constructor.
     *
     * @since 4.0.0
     * @version 4.0.0
     */
    public function __construct()
    {
    }
    /**
     * Public access to instance object.
     *
     * @since 4.0.0
     * @version 4.0.0
     * @return WC_Stripe_Payment_Tokens|null
     */
    public static function get_instance()
    {
    }
    /**
     * Normalizes the payment method labels on My Account page.
     *
     * @since 9.4.0
     * @version 9.4.0
     * @param string $label
     * @return string $label
     */
    public function normalize_payment_method_label($label)
    {
    }
    /**
     * Extract the payment token from the provided request.
     *
     * TODO: Once php requirement is bumped to >= 7.1.0 set return type to ?\WC_Payment_Token
     * since the return type is nullable, as per
     * https://www.php.net/manual/en/functions.returning-values.php#functions.returning-values.type-declaration
     *
     * @param array $request Associative array containing payment request information.
     *
     * @return \WC_Payment_Token|NULL
     */
    public static function get_token_from_request(array $request)
    {
    }
    /**
     * Checks if customer has saved payment methods.
     *
     * @since 4.1.0
     * @param int $customer_id
     * @return bool
     *
     * @deprecated 10.6.0 - This method is deprecated and will be removed in a future version.
     */
    public static function customer_has_saved_methods($customer_id)
    {
    }
    /**
     * Gets saved tokens from Stripe, if they don't already exist in WooCommerce.
     *
     * @param array  $tokens      Array of tokens
     * @param int    $customer_id WC customer ID
     * @param string $gateway_id  WC Gateway ID
     *
     * @return WC_Payment_Token[]
     */
    public function woocommerce_get_customer_payment_tokens($tokens, $customer_id, $gateway_id)
    {
    }
    /**
     * Syncs the payment tokens between Stripe and WooCommerce and returns the updated tokens list.
     *
     * @param array  $tokens      Existing tokens.
     * @param int    $customer_id WC customer ID.
     * @param string $gateway_id  WC Gateway ID.
     *
     * @return WC_Payment_Token[] Array of payment tokens after syncing with Stripe.
     */
    private function sync_and_retrieve_customer_payment_tokens(array $tokens, int $customer_id, string $gateway_id): array
    {
    }
    /**
     * Splits the existing token list into stored (valid) and deprecated buckets,
     * ignoring tokens that don't belong to a reusable Stripe gateway.
     *
     * @param WC_Payment_Token[] $tokens All existing tokens for the customer.
     *
     * @return array{stored: array<string, WC_Payment_Token>, deprecated: array<string, WC_Payment_Token>} List of stored and deprecated Stripe tokens, keyed by token string.
     */
    private function categorize_existing_tokens(array $tokens): array
    {
    }
    /**
     * Returns the gateway IDs for all sub-gateways (every reusable gateway except the main 'stripe' gateway).
     *
     * @return string[]
     */
    private function get_reusable_sub_gateway_ids(): array
    {
    }
    /**
     * Gets saved tokens from Sources API if they don't already exist in WooCommerce.
     *
     * @since 3.1.0
     * @version 4.0.0
     * @param array  $tokens      Existing tokens.
     * @param int    $customer_id The customer ID.
     * @param string $gateway_id  The gateway ID.
     * @return array
     *
     * @deprecated 10.6.0 - This method is deprecated and will be removed in a future version.
     */
    public function woocommerce_get_customer_payment_tokens_legacy($tokens, $customer_id, $gateway_id)
    {
    }
    /**
     * Gets saved tokens from Intentions API if they don't already exist in WooCommerce.
     *
     * @param array  $tokens     Array of tokens
     * @param string $user_id    WC User ID
     * @param string $gateway_id WC Gateway ID
     *
     * @return array
     *
     * @deprecated 10.6.0 - This method is deprecated and will be removed in a future version.
     */
    public function woocommerce_get_customer_upe_payment_tokens($tokens, $user_id, $gateway_id)
    {
    }
    /**
     * Returns original Stripe payment method type from payment token
     *
     * @param WC_Payment_Token $payment_token WC Payment Token (CC or SEPA)
     *
     * @return string
     */
    private function get_payment_method_type_from_token($payment_token)
    {
    }
    /**
     * Controls the output for some payment methods on the my account page.
     *
     * @since 4.8.0
     * @param array            $item          Individual list item from woocommerce_saved_payment_methods_list.
     * @param WC_Payment_Token $payment_token The payment token associated with this method entry.
     *
     * @return array $item Modified list item.
     */
    public function get_account_saved_payment_methods_list_item($item, $payment_token)
    {
    }
    /**
     * Deletes a token from Stripe.
     *
     * @since 3.1.0
     * @version 4.0.0
     *
     * @param int              $token_id The WooCommerce token ID.
     * @param WC_Payment_Token $token    The WC_Payment_Token object.
     * @return void
     */
    public function woocommerce_payment_token_deleted($token_id, $token)
    {
    }
    /**
     * Set as default in Stripe.
     *
     * @since 3.1.0
     * @version 4.0.0
     * @param int $token_id The token ID.
     * @return void
     */
    public function woocommerce_payment_token_set_default($token_id)
    {
    }
    /**
     * Returns boolean value if payment method type matches relevant payment gateway.
     *
     * @param string $payment_method_type Stripe payment method type ID.
     * @param string $gateway_id          WC Stripe gateway ID.
     * @return bool                       True, if payment method type matches gateway, false if otherwise.
     */
    private function is_valid_payment_method_type_for_gateway($payment_method_type, $gateway_id)
    {
    }
    /**
     * Creates and add a token to an user, based on the PaymentMethod object.
     *
     * @param   object             $payment_method      Payment method to be added.
     * @param   WC_Stripe_Customer $customer            WC_Stripe_Customer we're processing the tokens for.
     * @param   array              $payment_method_ids  List of payment methods retrieved from Stripe.
     * @return  WC_Payment_Token   The WC object for the payment token.
     */
    private function add_token_to_user($payment_method, \WC_Stripe_Customer $customer, $payment_method_ids = [])
    {
    }
    /**
     * Returns the original type of payment method from Stripe's PaymentMethod object.
     *
     * APMs like iDEAL, Bancontact, and Sofort get their PaymentMethod object type set to SEPA.
     * This method checks the extra data within the PaymentMethod object to determine the
     * original APM type that was used to create the PaymentMethod.
     *
     * @param object $payment_method Stripe payment method JSON object.
     *
     * @return string Payment method type/ID
     */
    private function get_original_payment_method_type($payment_method)
    {
    }
    /**
     * Returns the list of payment tokens that belong to the current user that require a label override on the block checkout page.
     *
     * The block checkout will default to a string that includes the token's payment gateway ID. This method will return a list of
     * payment tokens that should have a custom label displayed instead.
     *
     * @return string[] List of payment token IDs and their custom labels.
     */
    public static function get_token_label_overrides_for_checkout()
    {
    }
    /**
     * Updates a saved payment token from payment method details received from Stripe.
     *
     * @param int    $user_id                The user ID.
     * @param string $payment_method         The Stripe payment method ID.
     * @param object $payment_method_details The payment method object from Stripe.
     * @return void
     */
    public static function update_token_from_method_details($user_id, $payment_method, $payment_method_details)
    {
    }
    /**
     * Returns true if the payment method ID is valid for the given payment method type.
     *
     * Payment method IDs beginning with 'src_' are only valid for card payment methods.
     *
     * @param string $payment_method_id   The payment method ID (e.g. 'pm_123' or 'src_123').
     * @param string $payment_method_type The payment method type.
     *
     * @return bool
     */
    public function is_valid_payment_method_id($payment_method_id, $payment_method_type = '')
    {
    }
    /**
     * Searches for a duplicate token in the user's saved payment methods and returns it.
     *
     * @param object $payment_method The payment method object.
     * @param int    $user_id        The user ID.
     * @param string $gateway_id     The gateway ID.
     * @return WC_Payment_Token|null
     */
    public static function get_duplicate_token($payment_method, $user_id, $gateway_id)
    {
    }
    /**
     * Filters the payment token class to handle token classes that don't match the default
     * WooCommerce payment token class name.
     *
     * @param string $class Payment token class.
     * @param string $type Token type.
     * @return string
     */
    public function woocommerce_payment_token_class($class, $type)
    {
    }
    /**
     * Returns the list of active reusable payment method types based on the enabled gateways and their settings.
     *
     * @return array List of active reusable payment method types.
     */
    private function get_active_reusable_payment_method_types(): array
    {
    }
    /**
     * Removes invalid tokens that no longer exist in Stripe or are using deprecated formats.
     *
     * @param array $tokens            List of tokens that belong to the user.
     * @param array $stored_tokens     List of orphaned tokens that no longer exist in Stripe.
     * @param array $deprecated_tokens List of tokens that are using deprecated formats.
     *
     * @return array
     */
    private function cleanup_invalid_tokens(array $tokens, array $stored_tokens, array $deprecated_tokens): array
    {
    }
    /**
     * Checks if a token is deprecated based on its gateway ID, type, and format.
     *
     * A token is deprecated if it is:
     * - APM tokens from before Split PE was in place.
     * - Non-credit card tokens using the sources API. Payments using these will fail with the PaymentMethods API.
     *
     * @param WC_Payment_Token $token The payment token to check.
     *
     * @return bool True if the token is deprecated, false otherwise.
     */
    private function is_token_deprecated(\WC_Payment_Token $token): bool
    {
    }
}
// phpcs:disable WordPress.Files.FileName
/**
 * WooCommerce Stripe SEPA Direct Debit Payment Token.
 *
 * Representation of a payment token for SEPA.
 *
 * @class    WC_Payment_Token_SEPA
 * @version  4.0.0
 * @since    4.0.0
 */
class WC_Payment_Token_SEPA extends \WC_Payment_Token implements \WC_Stripe_Payment_Method_Comparison_Interface
{
    use \WC_Stripe_Fingerprint_Trait;
    /**
     * Stores payment type.
     *
     * @var string
     */
    protected $type = \WC_Stripe_Payment_Methods::SEPA;
    /**
     * Stores SEPA payment token data.
     *
     * @var array
     */
    protected $extra_data = ['last4' => '', 'payment_method_type' => \WC_Stripe_Payment_Methods::SEPA_DEBIT, 'fingerprint' => ''];
    /**
     * Get type to display to user.
     *
     * @since  4.0.0
     * @version 4.0.0
     * @param  string $deprecated Deprecated since WooCommerce 3.0
     * @return string
     */
    public function get_display_name($deprecated = '')
    {
    }
    /**
     * Hook prefix
     *
     * @since 4.0.0
     * @version 4.0.0
     */
    protected function get_hook_prefix()
    {
    }
    /**
     * Validate SEPA payment tokens.
     *
     * These fields are required by all SEPA payment tokens:
     * last4  - string Last 4 digits of the iBAN
     *
     * @since 4.0.0
     * @version 4.0.0
     * @return boolean True if the passed data is valid
     */
    public function validate()
    {
    }
    /**
     * Returns the last four digits.
     *
     * @since  4.0.0
     * @version 4.0.0
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string Last 4 digits
     */
    public function get_last4($context = 'view')
    {
    }
    /**
     * Set the last four digits.
     *
     * @since 4.0.0
     * @version 4.0.0
     * @param string $last4 The last 4 digits.
     * @return void
     */
    public function set_last4($last4)
    {
    }
    /**
     * Set Stripe payment method type.
     *
     * @param string $type Payment method type.
     * @return void
     */
    public function set_payment_method_type($type)
    {
    }
    /**
     * Returns Stripe payment method type.
     *
     * @param string $context What the value is for. Valid values are view and edit.
     * @return string $payment_method_type
     */
    public function get_payment_method_type($context = 'view')
    {
    }
    /**
     * Checks if the payment method token is equal a provided payment method.
     *
     * @inheritDoc
     */
    public function is_equal_payment_method($payment_method): bool
    {
    }
}

/**
 * Required minimums and constants
 */
\define('WC_STRIPE_VERSION', '10.9.1');
// WRCS: DEFINED_VERSION.
\define('WC_STRIPE_MIN_PHP_VER', '7.4');
\define('WC_STRIPE_MIN_WC_VER', '10.8');
\define('WC_STRIPE_FUTURE_MIN_WC_VER', '10.9');
\define('WC_STRIPE_MAIN_FILE', __FILE__);
\define('WC_STRIPE_ABSPATH', __DIR__ . '/');
\define('WC_STRIPE_PLUGIN_URL', \untrailingslashit(\plugin_dir_url(\WC_STRIPE_MAIN_FILE)));
\define('WC_STRIPE_PLUGIN_PATH', \untrailingslashit(\plugin_dir_path(\WC_STRIPE_MAIN_FILE)));
// phpcs:disable WordPress.Files.FileName
/**
 * WooCommerce fallback notice.
 *
 * @since 4.1.2
 */
function woocommerce_stripe_missing_wc_notice()
{
}
/**
 * WooCommerce not supported fallback notice.
 *
 * @since 4.4.0
 */
function woocommerce_stripe_wc_not_supported()
{
}
/**
 * Initialize the autoloader for the plugin.
 *
 * @since 10.8.0
 * @return bool Return whether the autoloader is available.
 */
function woocommerce_stripe_init_autoloader(): bool
{
}
function woocommerce_gateway_stripe()
{
}
function woocommerce_gateway_stripe_init()
{
}

/**
 * Set a transient to redirect the user to the settings page upon activation.
 *
 * @return void
 */
function wc_stripe_set_settings_redirection_transient(): void
{
}
function wcstripe_deactivated(): void
{
}
function woocommerce_gateway_stripe_woocommerce_block_support()
{
}